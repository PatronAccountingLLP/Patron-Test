@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP Perquisite Reporting in ITR 2026 | Patron</title>
    <meta name="description" content="Report the ESOP perquisite in Schedule S, capital gains in Schedule CG, and foreign shares in Schedule FA using ITR-2 or ITR-3. Expert help from Rs 2,499.">
    <link rel="canonical" href="/esop-perquisite-reporting-in-itr">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Perquisite Reporting in ITR 2026: Which Schedule | Patron Accounting">
    <meta property="og:description" content="Report the ESOP perquisite in Schedule S, capital gains in Schedule CG, and foreign shares in Schedule FA using ITR-2 or ITR-3. Expert help from Rs 2,499.">
    <meta property="og:url" content="/esop-perquisite-reporting-in-itr">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Perquisite Reporting in ITR 2026: Which Schedule | Patron Accounting">
    <meta name="twitter:description" content="Report the ESOP perquisite in Schedule S, capital gains in Schedule CG, and foreign shares in Schedule FA using ITR-2 or ITR-3. Expert help from Rs 2,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-perquisite-reporting-in-itr/#service",
        "name": "ESOP Perquisite Reporting in ITR (AY 2026-27)",
        "description": "Patron Accounting maps the ESOP perquisite to Schedule S, sale gains to Schedule CG and 112A, and foreign shares to Schedule FA, selects ITR-2 or ITR-3, files the Schedule Tax-Deferred on ESOP where applicable, and reconciles every figure with Form 16, Form 12BA, AIS and Form 26AS across India.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-perquisite-reporting-in-itr" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Income tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP Perquisite Reporting in ITR Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "ESOP Perquisite ITR Reporting and Filing" },
                    "price": "2499",
                    "priceCurrency": "INR",
                    "description": "Schedule mapping, form selection and AIS reconciliation for a salaried return with an ESOP perquisite. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-perquisite-reporting-in-itr/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP Perquisite Reporting in ITR", "item": "https://www.patronaccounting.com/esop-perquisite-reporting-in-itr" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-perquisite-reporting-in-itr/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Which ITR form should I use for ESOPs?",
                "acceptedAnswer": { "@type": "Answer", "text": "Use ITR-2 if you have salary, capital gains or foreign assets but no business income, and ITR-3 if you have business or professional income. ITR-1 cannot be used where ESOP tax is deferred, foreign assets are held, or capital gains exceed the small Section 112A carve-out. Filing ITR-1 with ESOPs triggers a defective-return notice under Section 139(9)." }
            },
            {
                "@type": "Question",
                "name": "Where do I report the ESOP perquisite in the ITR?",
                "acceptedAnswer": { "@type": "Answer", "text": "Report the ESOP perquisite in Schedule S (Salary), exactly as shown in Form 16 Part B and Form 12BA. It is already part of your gross salary, since the employer added it at exercise and deducted TDS. You do not compute it again; you disclose it so the salary figure reconciles with Form 26AS and the AIS." }
            },
            {
                "@type": "Question",
                "name": "ESOP ITR mein kahan report karte hain?",
                "acceptedAnswer": { "@type": "Answer", "text": "ESOP perquisite ko Schedule S mein report karte hain, Form 16 ke hisaab se. Shares bechne par capital gain Schedule CG aur 112A mein jaata hai, aur foreign shares Schedule FA mein. ITR-2 ya ITR-3 use karein, ITR-1 nahi." }
            },
            {
                "@type": "Question",
                "name": "How do I report the sale of ESOP shares?",
                "acceptedAnswer": { "@type": "Answer", "text": "Report the sale in Schedule CG. For listed shares sold with STT, long-term gains go scrip by scrip in Schedule 112A, and the special rate is applied through Schedule SI. Use the fair market value on the exercise date as the cost of acquisition, and the holding period from allotment to classify the gain as short-term or long-term." }
            },
            {
                "@type": "Question",
                "name": "Do I need to report foreign ESOP shares if I have not sold them?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. If you are a resident and ordinarily resident, you must disclose foreign ESOP or RSU shares in Schedule FA even if you have not sold them and earned no income. Non-disclosure can attract penalties under the Black Money Act. Foreign source income goes in Schedule FSI, with Form 67 filed for any Foreign Tax Credit." }
            },
            {
                "@type": "Question",
                "name": "Can I file ITR-1 if I only have an ESOP perquisite?",
                "acceptedAnswer": { "@type": "Answer", "text": "No, in most cases. If the ESOP tax is deferred, or you hold foreign shares, or you have capital gains beyond the small Section 112A carve-out, ITR-1 is barred. Even a salaried employee with only an ESOP perquisite is safest on ITR-2, because ESOP and unlisted-share holdings generally exclude ITR-1. The wrong form risks a defective-return notice." }
            },
            {
                "@type": "Question",
                "name": "AIS aur Form 16 match nahi ho rahe to kya karein?",
                "acceptedAnswer": { "@type": "Answer", "text": "Pehle Schedule S ki perquisite value ko Form 12BA aur Form 16 se milayen, phir AIS aur Form 26AS se reconcile karein. Mismatch hone par hum correct figure file karke notice se bachate hain." }
            },
            {
                "@type": "Question",
                "name": "Where do I report deferred ESOP tax from a startup?",
                "acceptedAnswer": { "@type": "Answer", "text": "If your employer is an eligible startup under Section 80-IAC and the perquisite tax is deferred, disclose it in the Schedule Tax-Deferred on ESOP in ITR-2 or ITR-3. You still report the perquisite, but the schedule records that the tax is postponed to a trigger event, so the figures reconcile while the payment is deferred." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-perquisite-reporting-in-itr",
        "name": "ESOP Perquisite Reporting in ITR (AY 2026-27)",
        "description": "Report the ESOP perquisite in Schedule S, capital gains in Schedule CG, and foreign shares in Schedule FA using ITR-2 or ITR-3. Expert help from Rs 2,499.",
        "url": "https://www.patronaccounting.com/esop-perquisite-reporting-in-itr",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-perquisite-reporting-in-itr/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-perquisite-reporting-in-itr/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to report ESOP perquisite in your ITR",
        "description": "Step-by-step process to pick the right ITR form, report the perquisite in Schedule S, report the sale in Schedule CG and 112A, disclose foreign shares in Schedule FA, add any startup deferral, and reconcile with AIS before filing.",
        "totalTime": "P3D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Pick the right form",
                "text": "Use ITR-2 if you have no business income, ITR-3 if you do. Never ITR-1 with ESOPs."
            },
            {
                "@type": "HowToStep",
                "name": "Report the perquisite",
                "text": "Enter the ESOP perquisite in Schedule S as per Form 16 Part B and Form 12BA."
            },
            {
                "@type": "HowToStep",
                "name": "Report the sale",
                "text": "Enter sale gains in Schedule CG, with listed long-term gains scrip-wise in Schedule 112A."
            },
            {
                "@type": "HowToStep",
                "name": "Disclose foreign shares",
                "text": "Complete Schedule FA, FSI and TR for foreign ESOPs, and file Form 67 for Foreign Tax Credit."
            },
            {
                "@type": "HowToStep",
                "name": "Add the deferral, if any",
                "text": "Fill the Schedule Tax-Deferred on ESOP for an eligible Section 80-IAC startup."
            },
            {
                "@type": "HowToStep",
                "name": "Reconcile and file",
                "text": "Match every figure with AIS, Form 26AS and Form 12BA, then file and e-verify."
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
        "name": "ESOP Perquisite Reporting in ITR Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Schedule S",
                "description": "The salary schedule where the ESOP perquisite is reported, matching Form 16."
            },
            {
                "@type": "DefinedTerm",
                "name": "Schedule 112A",
                "description": "The schedule for listed STT-paid long-term gains, filled scrip by scrip."
            },
            {
                "@type": "DefinedTerm",
                "name": "Schedule FA",
                "description": "The foreign assets schedule, mandatory for residents holding foreign ESOP shares."
            },
            {
                "@type": "DefinedTerm",
                "name": "Form 12BA",
                "description": "The employer statement of perquisites, used to verify the ESOP value in Schedule S."
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
                        ESOP Perquisite Reporting in ITR
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form 16, Form 12BA, broker and AIS statements, exercise data.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form:</span> ITR-2 or ITR-3 only, never ITR-1, when you hold ESOPs.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Schedules:</span> Schedule S, Schedule CG, Schedule 112A, Schedule FA.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> ESOP ITR reporting support from Rs 2,499 (Exl GST and Govt. Charges).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years filing ESOP-linked returns</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP Perquisite Reporting in ITR%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP Perquisite Reporting in ITR%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20have%20an%20ESOP%20perquisite%20to%20report%20in%20my%20ITR%20and%20need%20help%20mapping%20the%20schedules%2C%20picking%20ITR-2%2FITR-3%20and%20reconciling%20with%20AIS.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP Perquisite Reporting in ITR',
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
    'ctaText'    => 'Salaried employees and MNC staff trust Patron Accounting to map every ESOP component to the right schedule and file clean.',
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
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Schedule Map</button>
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
                    <p><strong>&#128204; TL;DR - ESOP Perquisite Reporting in ITR Services at a Glance</strong></p>
                    <p>Report the ESOP perquisite in Schedule S, sale gains in Schedule CG and 112A, and foreign shares in Schedule FA, using ITR-2 or ITR-3. We map and file it.</p>
                </div>
                <p>Report your ESOP correctly in your ITR and avoid a defective-return notice. Patron Accounting maps each ESOP component to the right schedule, picks ITR-2 or ITR-3 for you, and reconciles it with your AIS and Form 16 so the return processes clean.</p>
                <p>ESOP reporting is the disclosure step where most defective-return notices begin. The perquisite is already in your Form 16, the sale gain sits in capital gains, and any foreign shares need Schedule FA. Put a component in the wrong place, or pick ITR-1, and the return is rejected. Patron Accounting has filed ESOP-linked returns for salaried employees, NRIs and MNC staff for over 15 years.</p>
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
                <h2 class="section-title">What Is ESOP Reporting in ITR</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESOP reporting in ITR is the correct disclosure of the ESOP perquisite, sale gains and foreign holdings across the right schedules of the income tax return. The perquisite goes under salary, the sale under capital gains, and foreign shares under foreign assets.</p>
                    <p>This is a disclosure exercise, not a fresh tax computation: the perquisite was already taxed at exercise and appears in Form 16. The job is to place each item in the correct schedule, pick ITR-2 or ITR-3, and reconcile the figures with the AIS, Form 26AS and Form 12BA so the return is processed without a notice.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Perquisite Reporting in ITR:</strong></p>
                    <ul>
                        <li><strong>Schedule S:</strong> the salary schedule where the ESOP perquisite is reported, matching Form 16.</li>
                        <li><strong>Schedule 112A:</strong> the schedule for listed STT-paid long-term gains, filled scrip by scrip.</li>
                        <li><strong>Schedule FA:</strong> the foreign assets schedule, mandatory for residents holding foreign ESOP shares.</li>
                        <li><strong>Form 12BA:</strong> the employer statement of perquisites, used to verify the ESOP value in Schedule S.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Perquisite Reporting in ITR</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Filed on</span>
                        <strong>ITR-2 or ITR-3</strong>
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
                
                <p>Anyone with an ESOP component in the year must report it correctly and choose the right ITR form.</p>
                <ul>
                    <li>Salaried employees with an ESOP perquisite in Form 16.</li>
                    <li>Employees who sold ESOP shares and have a capital gain or loss.</li>
                    <li>Residents holding foreign-parent ESOP or RSU shares, even if unsold.</li>
                    <li>Eligible startup employees with deferred ESOP tax to disclose.</li>
                </ul>
                <p><strong>Statutory anchor:</strong> a taxpayer holding ESOPs, foreign assets or capital gains beyond the small 112A carve-out cannot use ITR-1; using it triggers a defective-return notice under Section 139(9), and an unrectified return is treated as invalid.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our ESOP ITR Reporting Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Schedule Mapping</td><td>We place the perquisite, sale gains and foreign shares in the correct schedules of ITR-2 or ITR-3.</td></tr>
                        <tr><td>Form Selection</td><td>We confirm whether you need ITR-2 or ITR-3 based on your full income profile, avoiding ITR-1 errors.</td></tr>
                        <tr><td>AIS and Form 26AS Reconciliation</td><td>We match the ESOP perquisite and TDS against your AIS, Form 26AS and Form 12BA before filing.</td></tr>
                        <tr><td>Foreign Asset Disclosure</td><td>We complete Schedule FA, FSI and TR for foreign ESOPs and file Form 67 for Foreign Tax Credit.</td></tr>
                        <tr><td>Deferral Disclosure</td><td>We fill the Schedule Tax-Deferred on ESOP for eligible startup employees.</td></tr>
                        <tr><td>Notice Defence</td><td>We respond to Section 139(9) defective-return and mismatch notices on ESOP income.</td></tr>

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
            <h2 class="section-title">How to Report ESOP in ITR in 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From picking the right form to reconciling with AIS, we place every ESOP component in its correct schedule and file clean.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Pick the right form</h3>
        <p class="step-description">Use ITR-2 if you have no business income, ITR-3 if you do. Never ITR-1 with ESOPs.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-2 / ITR-3</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No ITR-1</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="14" width="52" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="44" font-size="12" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR-2</text><line x1="44" y1="56" x2="76" y2="56" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="44" y1="66" x2="68" y2="66" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div>
            <span class="illustration-label">Form Picked</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Report the perquisite</h3>
        <p class="step-description">Enter the ESOP perquisite in Schedule S as per Form 16 Part B and Form 12BA.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule S</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 + 12BA</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="20" width="60" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="46" font-size="13" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">S</text><line x1="42" y1="58" x2="78" y2="58" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Perquisite Reported</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Report the sale</h3>
        <p class="step-description">Enter sale gains in Schedule CG, with listed long-term gains scrip-wise in Schedule 112A.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule CG</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule 112A</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 70 L48 52 L62 60 L92 32" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/><circle cx="92" cy="32" r="4" fill="#F5A623"/><text x="40" y="86" font-size="10" fill="#14365F" font-weight="700" font-family="Arial, sans-serif">CG/112A</text></svg></div>
            <span class="illustration-label">Sale Reported</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Disclose foreign shares</h3>
        <p class="step-description">Complete Schedule FA, FSI and TR for foreign ESOPs, and file Form 67 for Foreign Tax Credit.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule FA</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 67</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M32 50 h56 M60 22 a40 40 0 010 56 M60 22 a40 40 0 000 56" stroke="#F5A623" stroke-width="1.3" fill="none"/><text x="60" y="92" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FA</text></svg></div>
            <span class="illustration-label">Foreign Disclosed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Add the deferral, if any</h3>
        <p class="step-description">Fill the Schedule Tax-Deferred on ESOP for an eligible Section 80-IAC startup.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax-Deferred</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 80-IAC</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 32 v18 l12 8" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" fill="none"/><circle cx="60" cy="50" r="3" fill="#F5A623"/></svg></div>
            <span class="illustration-label">Deferral Added</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Reconcile and file</h3>
        <p class="step-description">Match every figure with AIS, Form 26AS and Form 12BA, then file and e-verify.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AIS + 26AS</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>File + e-verify</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22" y="30" width="32" height="40" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><rect x="66" y="30" width="32" height="40" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M54 50 h12 M60 45 l6 5 -6 5" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
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
                    <li>Form 16 Part B showing the ESOP perquisite under salary.</li>
                    <li>Form 12BA with the perquisite break-up.</li>
                    <li>Broker contract notes and capital gains statement for any sale.</li>
                    <li>AIS and Form 26AS for reconciliation.</li>
                    <li>Foreign share statements and tax slips for Schedule FA and Form 67.</li>
                    <li>Exercise and allotment records to fix cost base and holding period.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Schedule map at a glance</strong></p>
                    <p>Perquisite to Schedule S, sale to Schedule CG and 112A, special rate via Schedule SI, foreign shares to Schedule FA. Deferred startup tax to the Schedule Tax-Deferred on ESOP.</p>
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
                        <tr><td>Filing ITR-1 with an ESOP perquisite</td><td>Defective-return notice risk</td><td>We move you to ITR-2 or ITR-3 to avoid a Section 139(9) defective-return notice.</td></tr>
                        <tr><td>Missing Schedule FA on foreign ESOPs</td><td>Black Money Act exposure</td><td>We disclose all foreign holdings to avoid Black Money Act exposure.</td></tr>
                        <tr><td>Perquisite not matching AIS or Form 26AS</td><td>Mismatch notice</td><td>We reconcile Schedule S against Form 12BA, AIS and Form 26AS before filing.</td></tr>
                        <tr><td>Sale gain placed in the wrong schedule</td><td>Wrong tax or rejection</td><td>We route gains through Schedule CG, 112A and SI with the correct cost base.</td></tr>

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
            <h2 class="section-title">ESOP ITR Reporting Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 2,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Schedule mapping, form selection and AIS reconciliation for a salaried return with an ESOP perquisite</td></tr>
                        <tr><td>Capital gains, foreign-asset disclosure and Form 67</td><td>Quoted on scope</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Perquisite Reporting in ITR consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20file%20my%20ESOP%20ITR%20correctly.%20Please%20share%20how%20it%20works%20and%20your%20fees.%20I%20can%20send%20my%20Form%2016%20and%20exercise%20data." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Salaried ESOP return, once documents are in</td><td>2 to 3 working days</td></tr>
                        <tr><td>Returns with capital gains and foreign-asset disclosure</td><td>3 to 5 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>File well before the 31 July due date to avoid the rush and late fees.</strong> Mapping the schedules and reconciling with AIS early keeps the return clean and preserves any capital-loss carry-forward.</p>

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
            <h3 class="feature-title">No defective notice</h3>
            <p class="feature-text">Right ITR form, so no Section 139(9) defective-return notice.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18"/></svg></div>
            <h3 class="feature-title">Reconciled with AIS</h3>
            <p class="feature-text">Every component in the correct schedule, reconciled with AIS.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3 class="feature-title">Foreign ESOPs disclosed</h3>
            <p class="feature-text">Foreign ESOPs disclosed in Schedule FA, avoiding Black Money Act risk.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"/></svg></div>
            <h3 class="feature-title">Losses preserved</h3>
            <p class="feature-text">Capital-loss carry-forward preserved by filing the correct form on time.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Salaried Employees and MNC Staff</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years filing salaried, capital-gains and foreign-asset returns with ESOP components.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Component to Schedule Map</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Component</th><th>Schedule</th><th>Source Document</th></tr></thead>
                    <tbody>
                        <tr><td>Perquisite at exercise</td><td>Schedule S</td><td>Form 16, Form 12BA</td></tr>
                        <tr><td>Listed LTCG on sale</td><td>Schedule CG + 112A</td><td>Broker statement, AIS</td></tr>
                        <tr><td>Special rate (111A/112A)</td><td>Schedule SI</td><td>Capital gains statement</td></tr>
                        <tr><td>Foreign ESOP shares</td><td>Schedule FA + FSI/TR</td><td>Foreign broker, tax slip</td></tr>
                        <tr><td>Startup deferral</td><td>Tax-Deferred on ESOP</td><td>Employer deferral note</td></tr>

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
                
                <p>This page is the reporting how-to. For the underlying tax, see our <a href="/itr-for-esop-employees">ITR for ESOP employees</a> service and <a href="/itr-for-capital-gains">ITR for capital gains</a> on the sale. NRIs should see our <a href="/itr-for-nris">ITR for NRIs</a> service.</p>
                <p>For done-for-you filing, use <a href="/itr-for-salary">ITR for salary</a> or <a href="/itr-for-capital-gains">ITR for capital gains</a>. For general filing, see <a href="/income-tax-return">income tax return filing</a>. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

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
                
                <p><strong>Disclosure basis:</strong> the ESOP perquisite under Section 17(2)(vi) is part of salary and is reported in Schedule S of ITR-2 or ITR-3, matching Form 16 and Form 12BA.</p>
                <p><strong>Capital gains:</strong> sale gains go in Schedule CG, with listed STT-paid long-term gains in Schedule 112A and special rates applied via Schedule SI.</p>
                <p><strong>Foreign assets:</strong> residents must complete Schedule FA, FSI and TR for foreign ESOP shares and file Form 67 for Foreign Tax Credit; non-disclosure carries Black Money Act exposure.</p>
                <p><strong>Form integrity:</strong> ITR-1 cannot be used where ESOP tax is deferred, foreign assets are held, or capital gains exceed the small 112A carve-out; a wrong form draws a defective-return notice under Section 139(9). For AY 2026-27, the 23 July 2024 rate-split fields have been removed from the ITR forms.</p>
                <p>Authoritative sources: the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax e-filing portal</a> (ITR-2/ITR-3, schedules and AIS), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Income-tax Act and Rules</a>, and the <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">CBDT / Income Tax Department</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on which ITR form to use, where the ESOP perquisite and sale go, Schedule FA and deferral disclosure.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP Perquisite Reporting in ITR',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should I use for ESOPs?</h3>
                        <div class="faq-expanded__a"><p>Use ITR-2 if you have salary, capital gains or foreign assets but no business income, and ITR-3 if you have business or professional income. ITR-1 cannot be used where ESOP tax is deferred, foreign assets are held, or capital gains exceed the small Section 112A carve-out. Filing ITR-1 with ESOPs triggers a defective-return notice under Section 139(9).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Where do I report the ESOP perquisite in the ITR?</h3>
                        <div class="faq-expanded__a"><p>Report the ESOP perquisite in Schedule S (Salary), exactly as shown in Form 16 Part B and Form 12BA. It is already part of your gross salary, since the employer added it at exercise and deducted TDS. You do not compute it again; you disclose it so the salary figure reconciles with Form 26AS and the AIS.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">ESOP ITR mein kahan report karte hain?</h3>
                        <div class="faq-expanded__a"><p>ESOP perquisite ko Schedule S mein report karte hain, Form 16 ke hisaab se. Shares bechne par capital gain Schedule CG aur 112A mein jaata hai, aur foreign shares Schedule FA mein. ITR-2 ya ITR-3 use karein, ITR-1 nahi.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How do I report the sale of ESOP shares?</h3>
                        <div class="faq-expanded__a"><p>Report the sale in Schedule CG. For listed shares sold with STT, long-term gains go scrip by scrip in Schedule 112A, and the special rate is applied through Schedule SI. Use the fair market value on the exercise date as the cost of acquisition, and the holding period from allotment to classify the gain as short-term or long-term.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do I need to report foreign ESOP shares if I have not sold them?</h3>
                        <div class="faq-expanded__a"><p>Yes. If you are a resident and ordinarily resident, you must disclose foreign ESOP or RSU shares in Schedule FA even if you have not sold them and earned no income. Non-disclosure can attract penalties under the Black Money Act. Foreign source income goes in Schedule FSI, with Form 67 filed for any Foreign Tax Credit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I file ITR-1 if I only have an ESOP perquisite?</h3>
                        <div class="faq-expanded__a"><p>No, in most cases. If the ESOP tax is deferred, or you hold foreign shares, or you have capital gains beyond the small Section 112A carve-out, ITR-1 is barred. Even a salaried employee with only an ESOP perquisite is safest on ITR-2, because ESOP and unlisted-share holdings generally exclude ITR-1. The wrong form risks a defective-return notice.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">AIS aur Form 16 match nahi ho rahe to kya karein?</h3>
                        <div class="faq-expanded__a"><p>Pehle Schedule S ki perquisite value ko Form 12BA aur Form 16 se milayen, phir AIS aur Form 26AS se reconcile karein. Mismatch hone par hum correct figure file karke notice se bachate hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Where do I report deferred ESOP tax from a startup?</h3>
                        <div class="faq-expanded__a"><p>If your employer is an eligible startup under Section 80-IAC and the perquisite tax is deferred, disclose it in the Schedule Tax-Deferred on ESOP in ITR-2 or ITR-3. You still report the perquisite, but the schedule records that the tax is postponed to a trigger event, so the figures reconcile while the payment is deferred.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Which form?</strong> ITR-2 or ITR-3, never ITR-1.</li>
                    <li><strong>Perquisite goes in?</strong> Schedule S (Salary).</li>
                    <li><strong>Sale goes in?</strong> Schedule CG, with Schedule 112A for listed LTCG.</li>
                    <li><strong>Foreign shares?</strong> Schedule FA, plus FSI and TR.</li>
                    <li><strong>Deferral?</strong> Schedule Tax-Deferred on ESOP.</li>
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
                
                <p>ESOP returns are filed in the Apr to Jul window, with the due date typically 31 July. A wrong form or missed schedule draws a Section 139(9) notice and can forfeit capital-loss carry-forward. Map the schedules and reconcile with AIS early, well before the deadline.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your ESOP ITR Correctly</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP perquisite reporting in ITR is mostly about disclosure discipline: the right form, the right schedule, and a clean reconciliation with the AIS.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of ITR experience, maps every ESOP component to its correct schedule and files ITR-2 or ITR-3 so your return processes without a notice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20file%20my%20ESOP%20ITR%20correctly.%20Please%20share%20how%20it%20works%20and%20your%20fees.%20I%20can%20send%20my%20Form%2016%20and%20exercise%20data." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP Perquisite Reporting in ITR%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP Perquisite Reporting in ITR%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESOP ITR Reporting Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote schedule mapping, form selection and AIS reconciliation for ESOP-linked returns.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We file ESOP-linked returns for employees nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The schedule mapping, form selection and AIS reconciliation is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for your ESOP return</div>
                <div class="pa-cross-grid">
                    <a href="/itr-for-esop-employees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for ESOP Employees</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-salary" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-nris" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for NRIs</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every three months for new ITR form notifications and utility changes, schedule additions or removals, ITR-1 eligibility changes, Schedule FA and Form 67 procedure updates, due-date changes, and Income-tax Act 2025 mapping (Tier 1 freshness).</p>
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
