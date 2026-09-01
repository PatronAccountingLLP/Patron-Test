
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Corporate Compliance for OPC, 2026 | Patron Accounting</title>
    <meta name="description" content="Annual compliance for a One Person Company, AOC-4, MGT-7A, audit and KYC, with no AGM and lighter board rules, managed end to end. From INR 4,999 a year.">
    <link rel="canonical" href="/corporate-compliance-for-opc">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Corporate Compliance for OPC, 2026 | Patron Accounting">
    <meta property="og:description" content="Annual compliance for a One Person Company, AOC-4, MGT-7A, audit and KYC, with no AGM and lighter board rules, managed end to end. From INR 4,999 a year.">
    <meta property="og:url" content="/corporate-compliance-for-opc">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Corporate Compliance for OPC, 2026 | Patron Accounting">
    <meta name="twitter:description" content="Annual compliance for a One Person Company, AOC-4, MGT-7A, audit and KYC, with no AGM and lighter board rules, managed end to end. From INR 4,999 a year.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-opc/#service",
        "name": "Corporate Compliance for an OPC",
        "description": "OPC compliance services from Patron Accounting LLP cover the complete annual compliance of a One Person Company under the Companies Act, 2013, including Form AOC-4 within 180 days of the financial year end, the abridged annual return MGT-7A within 60 days of the deemed AGM date, the mandatory statutory audit, ADT-1, the director DIR-3 KYC by 30 September, the ITR-6 income tax return, and DPT-3 and MSME-1 where applicable, applying the OPC relaxations (no AGM under Section 96, the half-yearly board meeting and the single-director minutes-book rule) and the small company reduced penalties, run as one managed retainer.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/corporate-compliance-for-opc" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "One Person Company", "sameAs": "https://en.wikipedia.org/wiki/One_Person_Company" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "OPC Compliance Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "OPC Annual Compliance Retainer",
                    "priceCurrency": "INR",
                    "price": "4999",
                    "description": "Annual OPC compliance retainer covering AOC-4, the abridged MGT-7A, ADT-1, the director DIR-3 KYC, the ITR-6 income tax return, and the routine event-based filings and minutes, exclusive of GST and government charges. The statutory audit fee, the MCA filing fees and major event-based matters such as a conversion to a private limited company are scoped per engagement."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-opc/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Company Compliance", "item": "https://www.patronaccounting.com/corporate-compliance-services" },
            { "@type": "ListItem", "position": 3, "name": "OPC Compliance", "item": "https://www.patronaccounting.com/corporate-compliance-for-opc" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-opc/#faq",
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-04T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What annual compliance must an OPC do?",
                "acceptedAnswer": { "@type": "Answer", "text": "A One Person Company must, every year, file Form AOC-4, its financial statements, within 180 days of the financial year end, file the abridged annual return MGT-7A within 60 days of the date the AGM would have been held, have its accounts audited, file its income tax return in Form ITR-6, and complete DIR-3 KYC for the director by 30 September. DPT-3 and the half-yearly MSME-1 apply where relevant. There is no AGM, but all of these filings are mandatory, even for a dormant OPC." }
            },
            {
                "@type": "Question",
                "name": "Does an OPC have to hold an AGM?",
                "acceptedAnswer": { "@type": "Answer", "text": "No. A One Person Company is exempt from holding an annual general meeting under Section 96 of the Companies Act, 2013. This is one of its main relaxations. However, the exemption does not remove the related filings, the OPC still files its financial statements in AOC-4 within 180 days of the year end and the abridged annual return MGT-7A within 60 days of the date the AGM would have been held, so the filing obligations continue even though no meeting is held." }
            },
            {
                "@type": "Question",
                "name": "Does an OPC file MGT-7 or MGT-7A?",
                "acceptedAnswer": { "@type": "Answer", "text": "An OPC files MGT-7A, the abridged annual return form for One Person Companies and small companies, not the full MGT-7. MGT-7A is shorter and simpler, capturing the registered office, shares and director details. It is filed within 60 days of the date on which the annual general meeting would have been held, which for a March year end usually falls around late November. The abridged return is part of what makes OPC compliance lighter than a regular private company." }
            },
            {
                "@type": "Question",
                "name": "Is a statutory audit mandatory for an OPC?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. Every One Person Company must appoint an auditor and have its financial statements audited by a chartered accountant each year, regardless of its turnover or whether it made a profit. The AGM exemption and the lighter return do not extend to the audit, which remains a mandatory part of OPC compliance. The audited accounts are then filed in AOC-4, so an OPC should plan to complete its audit in good time before the 180-day deadline." }
            },
            {
                "@type": "Question",
                "name": "When are an OPC's filings due?",
                "acceptedAnswer": { "@type": "Answer", "text": "An OPC files Form AOC-4 within 180 days of the financial year end, which for a 31 March year end is around late September, and the abridged annual return MGT-7A within 60 days of the date the annual general meeting would have been held, around late November. Director KYC is due by 30 September, the income tax return in ITR-6 in its window, DPT-3 by 30 June, and MSME-1 each half-year where applicable. The 180-day AOC-4 window is longer than the company norm." }
            },
            {
                "@type": "Question",
                "name": "Does a single-director OPC need board meetings?",
                "acceptedAnswer": { "@type": "Answer", "text": "An OPC must hold at least one board meeting in each half of the calendar year, with a gap of not less than 90 days. However, where the OPC has only one director, Sections 173 and 174 of the Companies Act do not apply, so the sole director does not hold a formal meeting and instead records every resolution in the minutes book, signed and dated. This keeps the governance simple while still maintaining a proper record, which the filings rely on." }
            },
            {
                "@type": "Question",
                "name": "Does a dormant OPC still need to file?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. The compliance obligation arises from the One Person Company being registered, not from whether it does business. A dormant or zero-income OPC must still file its AOC-4, MGT-7A and ITR-6, have its accounts audited, and complete the director's KYC. Assuming that no activity means no filing is a common and costly mistake, because the daily late fees and the disqualification rules apply regardless. Even an idle OPC should be kept current." }
            },
            {
                "@type": "Question",
                "name": "Can you handle all of our OPC compliance?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. Our OPC compliance retainer handles the entire calendar, the AOC-4 and the abridged MGT-7A, the statutory audit coordination, ADT-1, the director KYC, the income tax return in ITR-6, DPT-3 and MSME-1 where they apply, and the minutes book and event-based filings. We apply the OPC relaxations and the small company reduced penalties, track every deadline, and, if you outgrow the single-member form, manage the conversion to a private limited company, all from a starting fee of 4,999 rupees a year." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-opc",
        "name": "Corporate Compliance for an OPC",
        "description": "Annual compliance for a One Person Company, AOC-4, MGT-7A, audit and KYC, with no AGM and lighter board rules, managed end to end. From INR 4,999 a year.",
        "url": "https://www.patronaccounting.com/corporate-compliance-for-opc",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com" },
        "about": { "@id": "https://www.patronaccounting.com/corporate-compliance-for-opc/#service" },
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-04T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/corporate-compliance-for-opc/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How OPC Compliance Runs Through the Year",
        "description": "How a One Person Company runs its lighter annual compliance under the Companies Act, 2013, from planning the calendar to filing AOC-4 and MGT-7A.",
        "totalTime": "P365D",
        "step": [
            { "@type": "HowToStep", "name": "Plan the calendar", "text": "Map the AOC-4, MGT-7A, KYC and ITR deadlines from the start of the year." },
            { "@type": "HowToStep", "name": "Maintain the record", "text": "Keep the minutes book and the half-yearly board resolutions in order." },
            { "@type": "HowToStep", "name": "Coordinate the audit", "text": "Work with the auditor so the accounts are finalised and audited in time." },
            { "@type": "HowToStep", "name": "File AOC-4 and MGT-7A", "text": "File the financial statements within 180 days and the abridged annual return on time." },
            { "@type": "HowToStep", "name": "Complete KYC and ITR", "text": "Complete the director's KYC and file ITR-6 in its window." },
            { "@type": "HowToStep", "name": "Handle events", "text": "File event-based forms, and where you convert, manage the move to a private limited company." }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "https://www.patronaccounting.com/#organization-rating",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com",
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "850", "bestRating": "5", "worstRating": "1" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "DefinedTermSet",
        "name": "OPC Compliance Key Terms",
        "definedTerm": [
            { "@type": "DefinedTerm", "name": "AOC-4", "description": "The form to file the OPC's financial statements, due within 180 days of the year end." },
            { "@type": "DefinedTerm", "name": "MGT-7A", "description": "The abridged annual return for OPCs and small companies, simpler than MGT-7." },
            { "@type": "DefinedTerm", "name": "Deemed AGM date", "description": "The date by which an AGM would have been held, used to set the MGT-7A deadline." },
            { "@type": "DefinedTerm", "name": "Nominee", "description": "The person named in Form INC-3 who takes over the OPC on the member's death." },
            { "@type": "DefinedTerm", "name": "Section 446B", "description": "The provision giving OPCs and small companies reduced penalties." }
        ]
    }
    </script>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-3.css') }}?v=1">
@endpush

@section('content')
<main>

<!-- BREADCRUMB -->

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
                        Corporate Compliance for an OPC
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us/" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Service:</span> Complete annual compliance for a One Person Company, managed end to end.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> OPC compliance starting from INR 4,999 per year (Exl GST and Govt. Charges).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Covers:</span> AOC-4, the abridged MGT-7A, the audit, director KYC and the income tax return.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Lighter:</span> No AGM, a 180-day AOC-4 window and only a half-yearly board meeting.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ Businesses  |  4.9 Google Rating  |  Offices in Pune, Mumbai, Delhi and Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20OPC Compliance%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20OPC Compliance%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20run%20a%20One%20Person%20Company%20and%20need%20the%20annual%20compliance%2C%20AOC-4%2C%20MGT-7A%20and%20audit%2C%20handled.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'OPC Compliance',
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
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, &amp; stay in control.',
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
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">How It's Lighter</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Retainer Covers</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Through the Year</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Information Needed</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Compliance Year</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Why a Retainer</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">OPC vs Pvt Ltd</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OPC Compliance: Overview and Quick Summary</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - OPC Compliance Services at a Glance</strong></p>
                    <p>A One Person Company is a company, so it has annual ROC compliance, but a lighter version. It is exempt from holding an AGM, files Form AOC-4 within an extended 180 days of the year end, files the abridged annual return MGT-7A, holds just one board meeting in each half of the year, and a single-director OPC simply records resolutions in the minutes book. Its accounts are still audited, and it files ITR-6 and DIR-3 KYC. Even a dormant OPC must file.</p>
                </div>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Filing</th><th>Form</th><th>Due</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Financial statements</strong></td><td>AOC-4</td><td>180 days of FY end</td></tr>
                        <tr><td><strong>Annual return</strong></td><td>MGT-7A</td><td>60 days of deemed AGM</td></tr>
                        <tr><td><strong>Auditor intimation</strong></td><td>ADT-1</td><td>On appointment</td></tr>
                        <tr><td><strong>Director KYC</strong></td><td>DIR-3 KYC</td><td>30 September</td></tr>
                        <tr><td><strong>Income tax return</strong></td><td>ITR-6</td><td>31 October</td></tr>
                        <tr><td><strong>AGM</strong></td><td>Not required</td><td>Section 96 exempt</td></tr>
                        <tr><td><strong>Board meetings</strong></td><td>One per half-year</td><td>90-day gap</td></tr>
                    </tbody>
                </table>
                </div>
                <p>This page is the complete picture of corporate compliance for an OPC, the lightest of the company forms, and it routes you to each OPC service. When you want it all handled on a single retainer, our team runs the full OPC calendar for you. If you outgrow the single-member form, we also handle the conversion to a <a href="https://www.patronaccounting.com/private-limited-company-compliance">private limited company</a>.</p>
                <p>To set up a new OPC, see our <a href="https://www.patronaccounting.com/one-person-company-registration">One Person Company registration service</a>, and for the mandatory annual audit, our <a href="https://www.patronaccounting.com/statutory-audit">statutory audit service</a>.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is OPC Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>OPC compliance is everything a One Person Company must do each year to stay in good standing under the Companies Act, the ROC filings, the audit, the income tax return, the director KYC and the basic governance. An OPC is a full company in law, with a single member, so it carries company-style compliance, but the Act gives it several relaxations that make the load lighter than a regular private company.</p><p>The defining feature of OPC compliance is that it is reduced, not removed. There is no AGM, the AOC-4 deadline is longer, the annual return is abridged, and a single director need not hold formal meetings, but the core filings and the audit still apply, and missing them carries the same daily late fees.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for OPC Compliance:</strong></p>
                    <ul><li><strong>AOC-4:</strong> The form to file the OPC’s financial statements, due within 180 days of the year end.</li><li><strong>MGT-7A:</strong> The abridged annual return for OPCs and small companies, simpler than MGT-7.</li><li><strong>Deemed AGM date:</strong> The date by which an AGM would have been held, used to set the MGT-7A deadline.</li><li><strong>Nominee:</strong> The person named in Form INC-3 who takes over the OPC on the member’s death.</li><li><strong>Section 446B:</strong> The provision giving OPCs and small companies reduced penalties.</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">OPC Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>AOC-4 Window</span>
                        <strong>180 days</strong>
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
            <h2 class="section-title">How OPC Compliance Is Lighter</h2>
            <div class="content-text">
                
                <p>An OPC keeps a corporate identity while shedding several of the heavier company obligations.</p><ul><li><strong>No AGM:</strong> An OPC is exempt from holding an annual general meeting under Section 96.</li><li><strong>Extended AOC-4:</strong> The financial statements are due within 180 days of the year end, not 30 days from an AGM.</li><li><strong>Abridged annual return:</strong> The OPC files MGT-7A, a shorter form than MGT-7.</li><li><strong>Lighter board meetings:</strong> Only one board meeting in each half of the year, and a single-director OPC records resolutions in the minutes book instead.</li><li><strong>Reduced penalties:</strong> As a small company, an OPC often benefits from the reduced penalties under Section 446B.</li></ul><h3>The OPC Annual Compliance Map</h3><p>These are the recurring filings every OPC must complete each year.</p><ul><li><strong>AOC-4, financial statements:</strong> Within 180 days of the financial year end, with the audited accounts.</li><li><strong>MGT-7A, annual return:</strong> The abridged return, within 60 days of the date the AGM would have been held.</li><li><strong>Statutory audit:</strong> By a chartered accountant, mandatory for every OPC, before the filings.</li><li><strong>ADT-1, auditor:</strong> To intimate the auditor’s appointment.</li><li><strong>DIR-3 KYC, director KYC:</strong> By 30 September, to keep the director’s DIN active.</li><li><strong>ITR-6, income tax:</strong> Filed even if there is no income, with the audit report.</li><li><strong>DPT-3 and MSME-1:</strong> By 30 June and half-yearly respectively, where applicable.</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What the OPC Retainer Covers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>AOC-4 and MGT-7A</strong></td><td>We file the financial statements in AOC-4 within 180 days and the abridged annual return MGT-7A on time.</td></tr><tr><td><strong>Statutory Audit Coordination</strong></td><td>We coordinate the mandatory statutory audit by a chartered accountant each year.</td></tr><tr><td><strong>ADT-1 and Director KYC</strong></td><td>We file ADT-1 for the auditor and the director’s DIR-3 KYC by 30 September.</td></tr><tr><td><strong>Income Tax Return (ITR-6)</strong></td><td>We file the OPC income tax return in Form ITR-6, even where the income is nil.</td></tr><tr><td><strong>DPT-3, MSME-1 and Minutes</strong></td><td>We file DPT-3 and MSME-1 where applicable and maintain the minutes book.</td></tr><tr><td><strong>Event Filings and Tracking</strong></td><td>We handle the event-based filings and track every deadline through the year.</td></tr>

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
            <h2 class="section-title">How OPC Compliance Runs Through the Year</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How Patron runs the lighter OPC calendar, from the minutes book to AOC-4, MGT-7A, KYC and any conversion.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Plan the Calendar</h3>
        <p class="step-description">We map the AOC-4, MGT-7A, KYC and ITR deadlines from the start of the year.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All deadlines</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>From year start</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="28" y="22" width="64" height="58" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M28 38h64M44 16v12M76 16v12" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><rect x="40" y="48" width="10" height="8" rx="2" fill="#E8712C"/><rect x="70" y="60" width="10" height="8" rx="2" fill="#E8712C" opacity="0.55"/></svg></div>
            <span class="illustration-label">Plan</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Maintain the Record</h3>
        <p class="step-description">We keep the minutes book and the half-yearly board resolutions in order.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Minutes book</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Half-yearly</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="16" width="60" height="68" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="34" x2="78" y2="34" stroke="#E8712C" stroke-width="2.5"/><line x1="42" y1="48" x2="72" y2="48" stroke="#14365F" stroke-width="2" opacity="0.35"/><line x1="42" y1="60" x2="76" y2="60" stroke="#14365F" stroke-width="2" opacity="0.35"/></svg></div>
            <span class="illustration-label">Record</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Coordinate the Audit</h3>
        <p class="step-description">We work with the auditor so the accounts are finalised and audited in time.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mandatory audit</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>In good time</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="52" cy="44" r="20" fill="#F0F4F8" stroke="#14365F" stroke-width="2.5"/><line x1="67" y1="59" x2="86" y2="78" stroke="#E8712C" stroke-width="4" stroke-linecap="round"/><path d="M44 44l6 6 12-12" stroke="#E8712C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Audit</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File AOC-4 and MGT-7A</h3>
        <p class="step-description">We file the financial statements within 180 days and the abridged annual return on time.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>180-day AOC-4</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Abridged MGT-7A</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="28" y="14" width="64" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="13" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AOC-4</text><text x="60" y="62" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MGT-7A</text></svg></div>
            <span class="illustration-label">Filings</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Complete KYC and ITR</h3>
        <p class="step-description">We complete the director’s KYC and file ITR-6 in its window.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIR-3 KYC</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-6</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/><path d="M36 80c0-14 11-22 24-22s24 8 24 22" stroke="#14365F" stroke-width="2" fill="none"/><circle cx="86" cy="30" r="11" fill="#E8712C"/><path d="M81 30l3 3 6-6" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">KYC + ITR</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Handle Events</h3>
        <p class="step-description">We file event-based forms, and where you convert, we manage the move to a private limited company.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Event forms</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Conversion</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="30" width="22" height="50" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="62" y="20" width="24" height="60" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><path d="M52 54h16M62 48l8 6-8 6" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Events</span>
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
            <h2 class="section-title">Information Required for OPC Compliance</h2>
            <div class="content-text">
                
                <ul><li>Financial statements and books for the year.</li><li>Member and nominee details.</li><li>Director DIN and KYC details.</li><li>Auditor details and consent.</li><li>Bank statements and transaction records.</li><li>Records of any events during the year.</li></ul><p><strong>Need the full checklist?</strong> We share a tailored OPC compliance checklist when you engage us.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common OPC Compliance Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Assuming one owner means no compliance</strong></td><td>An OPC is a company and must comply with corporate law, even with a single owner. We run the full, if lighter, compliance so nothing is missed.</td></tr><tr><td><strong>Thinking no AGM means no obligations</strong></td><td>The AGM exemption removes one requirement, not the filings. AOC-4, MGT-7A, the audit and KYC still apply, and we handle them all.</td></tr><tr><td><strong>Believing an OPC is audit-exempt</strong></td><td>Every OPC must have its accounts audited, regardless of turnover. We coordinate the statutory audit each year.</td></tr><tr><td><strong>Treating a dormant OPC as exempt</strong></td><td>A dormant or zero-income OPC must still file its annual forms. We keep even an idle OPC current to avoid penalties.</td></tr>

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
            <h2 class="section-title">OPC Compliance Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (annual retainer)</td><td class="table-amount">Starting from INR 4,999 per year (Exl GST and Govt. Charges)</td></tr><tr><td>Scope of the retainer</td><td class="table-amount">AOC-4, the abridged MGT-7A, ADT-1, director KYC, the ITR-6 return, and the routine event-based filings and minutes</td></tr><tr><td>Statutory audit fee and MCA filing fees</td><td class="table-amount">Confirmed as part of the engagement scope</td></tr><tr><td>Major events such as conversion to a private limited company</td><td class="table-amount">Confirmed as part of the engagement scope</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">The statutory audit fee, the MCA filing fees, and major event-based matters such as a conversion to a private limited company are confirmed as part of the engagement scope. As a small company, an OPC enjoys the lighter regime and reduced penalties within the fee. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free OPC Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20set%20up%20annual%20compliance%20for%20my%20OPC.%20Please%20share%20the%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The OPC Compliance Year at a Glance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>AOC-4, financial statements</td><td>Within 180 days of the year end (around late September for a March year end)</td></tr><tr><td>DIR-3 KYC, director KYC</td><td>By 30 September</td></tr><tr><td>MGT-7A, annual return</td><td>Within 60 days of the deemed AGM date (around late November)</td></tr><tr><td>ITR-6, income tax return</td><td>In its window; DPT-3 by 30 June, MSME-1 half-yearly where applicable</td></tr><tr><td>AGM</td><td>Not required for an OPC (Section 96 exempt)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>The OPC year is lighter but still has a rhythm.</strong> There is no AGM to schedule, the financial statements in AOC-4 are due within 180 days of the year end, around late September for a March year end, and the abridged MGT-7A follows within 60 days of the date an AGM would have been held, around late November. The director KYC falls by 30 September and the income tax return in ITR-6 in its window, with DPT-3 by 30 June and MSME-1 each half-year where they apply. The longer AOC-4 window is a real benefit, but the audit must still be completed in time, so planning ahead keeps the OPC penalty-free.</p>

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
            <h2 class="section-title">Why Use a Managed OPC Retainer</h2>
        </div>
        <div class="features-grid"><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg></div>
                <h3 class="feature-title">The Lighter Regime Applied Correctly</h3>
                <p class="feature-text">The OPC relaxations, no AGM, the 180-day AOC-4 window and the half-yearly board rule, are applied correctly so you claim every benefit you are due.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15l2 2 4-4"/></svg></div>
                <h3 class="feature-title">AOC-4 and MGT-7A Filed on Time</h3>
                <p class="feature-text">The financial statements and the abridged annual return are filed within their windows, avoiding the uncapped daily late fees.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></div>
                <h3 class="feature-title">Statutory Audit Coordinated</h3>
                <p class="feature-text">The mandatory statutory audit is coordinated with the auditor and completed in good time before the AOC-4 deadline.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0116 0"/><path d="M19 6l1.5 1.5L23 5"/></svg></div>
                <h3 class="feature-title">Director KYC Never Missed</h3>
                <p class="feature-text">The director’s DIR-3 KYC is filed by 30 September every year, keeping the DIN active and the filings unblocked.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
                <h3 class="feature-title">Even an Idle OPC Kept Current</h3>
                <p class="feature-text">A dormant or zero-income OPC is still filed every year, avoiding penalties and the disqualification rules.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3 class="feature-title">Qualified CA and CS Team</h3>
                <p class="feature-text">Handled by a qualified CA and CS team, with conversion to a private limited company managed if you grow.</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years</strong></p><p>"As a solo founder I run an OPC, and Patron handles all my filings, the AOC-4, the MGT-7A and the audit, for a simple yearly fee." - Member, OPC, Pune.</p><p>"When my OPC grew, Patron converted it to a private limited company and kept the compliance seamless." - Founder, OPC, Gurugram.</p><p>Trusted by leading brands including Hyundai, Asian Paints and Bridgestone for accounting and compliance support.</p><p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OPC Compliance Compared with a Private Company</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>OPC</th><th>Private Company</th></tr></thead>
                    <tbody>
                        <tr><td>AGM</td><td>Not required</td><td>Required, six months</td></tr><tr><td>AOC-4</td><td>180 days of year end</td><td>30 days of AGM</td></tr><tr><td>Annual return</td><td>MGT-7A</td><td>MGT-7 or 7A</td></tr><tr><td>Board meetings</td><td>One per half-year</td><td>Four, or two if small</td></tr>

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
            <h2 class="section-title">OPC Services and Filings</h2>
            <div class="content-text">
                
                <p>This hub routes to each OPC-related service.</p><ul><li><a href="https://www.patronaccounting.com/one-person-company-registration">One Person Company Registration</a> to set up a new OPC.</li><li><a href="https://www.patronaccounting.com/statutory-audit">Statutory Audit</a> for the mandatory annual audit.</li><li><a href="https://www.patronaccounting.com/appointment-of-auditor">Appointment of Auditor</a> for the auditor appointment and ADT-1.</li><li><a href="https://www.patronaccounting.com/director-kyc">Director KYC</a> for the annual DIR-3 KYC.</li><li><a href="https://www.patronaccounting.com/private-limited-company-compliance">Private Limited Company Compliance</a> if you convert to a private limited company.</li><li><a href="https://www.patronaccounting.com/compliance-calendar">Compliance Calendar</a> to track every OPC deadline.</li></ul><p>Where the founder outgrows the single-member form, the OPC to private limited conversion is handled by our conversion service, which this hub routes to.</p>

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
                
                <p><strong>No AGM and the filing deadlines:</strong> A One Person Company under Section 2(62) of the Companies Act, 2013 is exempt from holding an annual general meeting under Section 96, and as a result it files its financial statements in Form AOC-4 within 180 days of the close of the financial year, an extended window compared with the 30 days from the AGM that applies to other companies, and files the abridged annual return in Form MGT-7A within 60 days of the date on which the annual general meeting would have been held.</p><p><strong>Board meetings and a single director:</strong> An OPC must hold at least one meeting of its board in each half of the calendar year, with a gap of not less than ninety days between the two, while Sections 173 and 174 do not apply to an OPC that has only one director, who instead records every resolution in the minutes book, signed and dated, in place of a formal meeting.</p><p><strong>Audit and other annual filings:</strong> Every OPC must appoint an auditor, with ADT-1 filed to intimate the appointment, and have its financial statements audited by a chartered accountant regardless of turnover, so an OPC is not audit-exempt, and it files its income tax return in Form ITR-6 even where its income is nil, completes DIR-3 KYC for the director by 30 September, and files DPT-3 by 30 June and the half-yearly MSME-1 where these apply.</p><p><strong>Small company benefits:</strong> Most OPCs fall within the small company thresholds, and so benefit from the reduced penalties under Section 446B, while still being required to complete every annual filing, the obligation arising from the company’s registration and not from whether it carries on business, so even a dormant OPC must file.</p><p>Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA portal</a> for the forms and to <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">the Companies Act on IndiaCode</a> for the provisions.</p>

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
                    <p class="faq-expanded__lead">Common questions on OPC annual compliance, the AGM exemption, AOC-4 and MGT-7A, the mandatory audit, the filing deadlines and dormant OPCs.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'OPC Compliance',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What annual compliance must an OPC do?</h3>
                        <div class="faq-expanded__a"><p>A One Person Company must, every year, file Form AOC-4, its financial statements, within 180 days of the financial year end, file the abridged annual return MGT-7A within 60 days of the date the AGM would have been held, have its accounts audited, file its income tax return in Form ITR-6, and complete DIR-3 KYC for the director by 30 September. DPT-3 and the half-yearly MSME-1 apply where relevant. There is no AGM, but all of these filings are mandatory, even for a dormant OPC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Does an OPC have to hold an AGM?</h3>
                        <div class="faq-expanded__a"><p>No. A One Person Company is exempt from holding an annual general meeting under Section 96 of the Companies Act, 2013. This is one of its main relaxations. However, the exemption does not remove the related filings, the OPC still files its financial statements in AOC-4 within 180 days of the year end and the abridged annual return MGT-7A within 60 days of the date the AGM would have been held, so the filing obligations continue even though no meeting is held.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Does an OPC file MGT-7 or MGT-7A?</h3>
                        <div class="faq-expanded__a"><p>An OPC files MGT-7A, the abridged annual return form for One Person Companies and small companies, not the full MGT-7. MGT-7A is shorter and simpler, capturing the registered office, shares and director details. It is filed within 60 days of the date on which the annual general meeting would have been held, which for a March year end usually falls around late November. The abridged return is part of what makes OPC compliance lighter than a regular private company.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is a statutory audit mandatory for an OPC?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every One Person Company must appoint an auditor and have its financial statements audited by a chartered accountant each year, regardless of its turnover or whether it made a profit. The AGM exemption and the lighter return do not extend to the audit, which remains a mandatory part of OPC compliance. The audited accounts are then filed in AOC-4, so an OPC should plan to complete its audit in good time before the 180-day deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">When are an OPC’s filings due?</h3>
                        <div class="faq-expanded__a"><p>An OPC files Form AOC-4 within 180 days of the financial year end, which for a 31 March year end is around late September, and the abridged annual return MGT-7A within 60 days of the date the annual general meeting would have been held, around late November. Director KYC is due by 30 September, the income tax return in ITR-6 in its window, DPT-3 by 30 June, and MSME-1 each half-year where applicable. The 180-day AOC-4 window is longer than the company norm.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does a single-director OPC need board meetings?</h3>
                        <div class="faq-expanded__a"><p>An OPC must hold at least one board meeting in each half of the calendar year, with a gap of not less than 90 days. However, where the OPC has only one director, Sections 173 and 174 of the Companies Act do not apply, so the sole director does not hold a formal meeting and instead records every resolution in the minutes book, signed and dated. This keeps the governance simple while still maintaining a proper record, which the filings rely on.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does a dormant OPC still need to file?</h3>
                        <div class="faq-expanded__a"><p>Yes. The compliance obligation arises from the One Person Company being registered, not from whether it does business. A dormant or zero-income OPC must still file its AOC-4, MGT-7A and ITR-6, have its accounts audited, and complete the director’s KYC. Assuming that no activity means no filing is a common and costly mistake, because the daily late fees and the disqualification rules apply regardless. Even an idle OPC should be kept current.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can you handle all of our OPC compliance?</h3>
                        <div class="faq-expanded__a"><p>Yes. Our OPC compliance retainer handles the entire calendar, the AOC-4 and the abridged MGT-7A, the statutory audit coordination, ADT-1, the director KYC, the income tax return in ITR-6, DPT-3 and MSME-1 where they apply, and the minutes book and event-based filings. We apply the OPC relaxations and the small company reduced penalties, track every deadline, and, if you outgrow the single-member form, manage the conversion to a private limited company, all from a starting fee of 4,999 rupees a year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">OPC ki compliance kya hai?</h3>
                        <div class="faq-expanded__a"><p>OPC har saal AOC-4 (180 din me), abridged MGT-7A, audit, ITR-6 aur director KYC file karti hai, AGM ki zaroorat nahi hoti, aur half-year me ek board meeting honi chahiye.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">OPC me AGM hoti hai kya?</h3>
                        <div class="faq-expanded__a"><p>Nahi, OPC ko Section 96 ke tahat AGM se chhoot hai, lekin AOC-4 aur MGT-7A filing phir bhi karni hoti hai.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Financial statements?</strong> AOC-4, within 180 days of year end.</p><p><strong>Annual return?</strong> MGT-7A, abridged.</p><p><strong>AGM?</strong> Not required, Section 96 exempt.</p><p><strong>Audit?</strong> Mandatory for every OPC.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Stay on Top of It</h2>
            <div class="content-text">
                
                <p><strong>OPC compliance is light, but it is still company compliance.</strong> The AGM exemption and the longer AOC-4 window make it easy to assume there is little to do, which is exactly when a deadline slips. Late filing of AOC-4 or MGT-7A attracts 100 rupees per day per form with no cap, a missed KYC deactivates the DIN, and the audit must still be done each year. A managed retainer applies the relaxations you are due, files everything on time, and keeps your OPC clean.</p><p><strong>Set up your OPC compliance - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20set%20up%20annual%20compliance%20for%20my%20OPC." target="_blank" rel="noopener">WhatsApp us</a>. We respond within 2 hours.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Set Up OPC Compliance with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">Corporate compliance for an OPC is the lightest of the company regimes, no AGM, an extended 180-day AOC-4 window, the abridged MGT-7A, and only a half-yearly board meeting, with a single director recording resolutions in the minutes book.</p><p style="color:#FFFFFF;">But it is still company compliance, the audit is mandatory, the income tax return and KYC are due, and even a dormant OPC must file. This page maps the whole picture and routes you to each OPC service, including conversion if you grow. Patron Accounting, with a qualified CA and CS team and offices in Pune, Mumbai, Delhi and Gurugram, runs the full OPC calendar on a single retainer from 4,999 rupees a year.</p><p style="color:#FFFFFF;"><strong>10,000+ Businesses  |  4.9 Rating  |  50,000+ Documents Filed  |  15+ Years.</strong> Book a free consultation today.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20set%20up%20annual%20compliance%20for%20my%20OPC.%20Please%20share%20the%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20OPC Compliance%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20OPC Compliance%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- CITY PAGES + RELATED SERVICES -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
<div class="pa-city-block">
<div class="pa-block-title">OPC Services</div>
<div class="pa-block-sub">Setup, audit, KYC and conversion</div>
<div class="pa-cross-grid">
<a href="https://www.patronaccounting.com/one-person-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">OPC Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/director-kyc" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director KYC</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/compliance-calendar" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Compliance Calendar</div><div class="pa-card-sub">India</div></div></a>
</div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 3 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 4 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed at least yearly and updated whenever the OPC compliance rules, the AOC-4 180-day window, the MGT-7A abridged return, the board meeting relaxations, the audit requirement, or the small company penalty provisions change. Freshness Tier 1.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026-27 ITR filing is live</strong> - get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

</main>
@endsection

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>





<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll
const tocBtns = document.querySelectorAll('.toc-btn');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', function() {
    let current = '';
    sections.forEach(function(section) {
        const sectionTop = section.offsetTop - 120;
        if (pageYOffset >= sectionTop) { current = section.getAttribute('id'); }
    });
    tocBtns.forEach(function(btn) {
        btn.classList.remove('active');
        if (btn.getAttribute('href') === '#' + current) { btn.classList.add('active'); }
    });
});
</script>

<!-- WhatsApp Sticky Bar Script -->
<script>
(function() {
    var waBar = document.getElementById('waBar');
    var waClose = document.getElementById('waBarClose');
    var dismissed = false;

    // Initially hidden, show after scrolling 300px
    waBar.classList.add('hidden');

    window.addEventListener('scroll', function() {
        if (dismissed) return;
        if (window.scrollY > 300) {
            waBar.classList.remove('hidden');
        } else {
            waBar.classList.add('hidden');
        }
    });

    // Close button
    waClose.addEventListener('click', function() {
        dismissed = true;
        waBar.classList.add('hidden');
        // Remember dismissal for this session
        try { sessionStorage.setItem('wa_bar_dismissed', '1'); } catch(e) {}
    });

    // Check if already dismissed this session
    try {
        if (sessionStorage.getItem('wa_bar_dismissed') === '1') {
            dismissed = true;
            waBar.classList.add('hidden');
            waBar.style.display = 'none';
        }
    } catch(e) {}
})();
</script>

<script>
// BF-1 (corrected): Last Updated mirrors schema dateModified — STABLE hardcoded date, never live new Date()
(function() {
    var dateStr = '4 June 2026';
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>
