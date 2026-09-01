
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Corporate Compliance for NGO, 2026 | Patron Accounting</title>
    <meta name="description" content="Annual compliance for an NGO, Section 8 company filings plus 12A, 80G and FCRA, across MCA, Income Tax and MHA, managed end to end. From INR 9,999 a year.">
    <link rel="canonical" href="/corporate-compliance-for-ngo">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Corporate Compliance for NGO, 2026 | Patron Accounting">
    <meta property="og:description" content="Annual compliance for an NGO, Section 8 company filings plus 12A, 80G and FCRA, across MCA, Income Tax and MHA, managed end to end. From INR 9,999 a year.">
    <meta property="og:url" content="/corporate-compliance-for-ngo">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Corporate Compliance for NGO, 2026 | Patron Accounting">
    <meta name="twitter:description" content="Annual compliance for an NGO, Section 8 company filings plus 12A, 80G and FCRA, across MCA, Income Tax and MHA, managed end to end. From INR 9,999 a year.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-ngo/#service",
        "name": "Corporate Compliance for an NGO",
        "description": "NGO compliance services from Patron Accounting LLP cover the complete annual compliance of an NGO across its three regulators, the MCA for a Section 8 company’s ROC filings (AOC-4, MGT-7, ADT-1, statutory audit, board meetings, AGM and DIR-3 KYC), the Income Tax Department for ITR-7, the 12A and 80G registrations and renewals, the Form 10B or 10BB audit report and the 10BD and 10BE donation statements, and the Ministry of Home Affairs for FCRA Form FC-4 where foreign contributions are received, plus the CSR-1 registration, run as one managed retainer, with trust and society filings with the Charity Commissioner or Registrar of Societies handled under the same tax overlay.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/corporate-compliance-for-ngo" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Section 8 company", "sameAs": "https://en.wikipedia.org/wiki/Section_8_company" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "NGO Compliance Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "NGO Annual Compliance Retainer",
                    "priceCurrency": "INR",
                    "price": "9999",
                    "description": "Annual NGO compliance retainer covering the Section 8 ROC filings and audit coordination, ITR-7 with the Form 10B or 10BB audit report, the 12A and 80G validity and renewals, the 10BD and 10BE donation forms, and the CSR-1 and statutory registers, exclusive of GST and government charges. The FCRA Form FC-4 and separate foreign-fund accounting, the statutory audit fee, registration renewal government fees, and trust or society filings are scoped per engagement."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-ngo/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Company Compliance", "item": "https://www.patronaccounting.com/corporate-compliance-services" },
            { "@type": "ListItem", "position": 3, "name": "NGO Compliance", "item": "https://www.patronaccounting.com/corporate-compliance-for-ngo" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-ngo/#faq",
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-04T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What compliance must an NGO follow each year?",
                "acceptedAnswer": { "@type": "Answer", "text": "An NGO's compliance depends on its structure but generally spans three regulators. A Section 8 company files AOC-4 and MGT-7 with the MCA, is audited and holds an AGM. Every NGO files ITR-7 with the Income Tax Department and must keep its 12A and 80G registrations valid, file the audit report in Form 10B or 10BB, and the donation forms 10BD and 10BE. If it receives foreign funds, it files FCRA Form FC-4 by 31 December. A trust or society files with the Charity Commissioner or Registrar instead of the MCA." }
            },
            {
                "@type": "Question",
                "name": "What is the difference between 12A and 80G?",
                "acceptedAnswer": { "@type": "Answer", "text": "12A is the Income Tax registration that gives the NGO itself its tax exemption, so that its income applied to charitable objects is not taxed. 80G is a separate registration that lets the NGO's donors claim a deduction for their donations, which makes the NGO more attractive to fund. Both are now granted for limited periods and must be renewed within their cycles, and both must be valid for the NGO to register for CSR funds in Form CSR-1, so keeping them current is essential." }
            },
            {
                "@type": "Question",
                "name": "When is the FCRA annual return due?",
                "acceptedAnswer": { "@type": "Answer", "text": "An NGO registered under the Foreign Contribution Regulation Act must file its annual return in Form FC-4 by 31 December each year, even where it has received no foreign contribution during the year, in which case a NIL return is filed. The return relies on audited accounts of the foreign funds, which the NGO must keep in a separate set of books and receive into its designated FCRA account with the State Bank of India in New Delhi. Missing FC-4 can lead to suspension of the FCRA registration." }
            },
            {
                "@type": "Question",
                "name": "Does a Section 8 company have the same compliance as a private company?",
                "acceptedAnswer": { "@type": "Answer", "text": "Largely yes, on the corporate side. A Section 8 company holds board meetings and an AGM, has its accounts audited, and files AOC-4, MGT-7, ADT-1 and DIR-3 KYC like any company. What sets it apart is the not-for-profit overlay, it files ITR-7 rather than ITR-6, must maintain its 12A and 80G registrations, and follows the FCRA rules if it takes foreign funds, and its licence can be revoked under Section 8(6) if it strays from its charitable objects." }
            },
            {
                "@type": "Question",
                "name": "What are Forms 10BD and 10BE?",
                "acceptedAnswer": { "@type": "Answer", "text": "Form 10BD is the statement of donations that an 80G-registered NGO files with the Income Tax Department by 31 May each year, listing the donations received where the donor is eligible to claim a deduction. After filing it, the NGO issues Form 10BE, the donation certificate, to each such donor. The tax department auto-matches these against the donors' own returns, so a delay or error directly affects the donors' ability to claim their 80G deduction, which is why timely filing matters." }
            },
            {
                "@type": "Question",
                "name": "What happens if an NGO does not stay compliant?",
                "acceptedAnswer": { "@type": "Answer", "text": "The consequences are serious and cut to the NGO's funding. Letting 12A or 80G lapse means losing the tax exemption and the donor deduction, so donations decline. A missed FCRA return can lead to suspension of FCRA registration and the loss of foreign funding. For a Section 8 company, persistent default can lead to penalties and even revocation of the licence under Section 8(6). Because the regulators are linked, a single lapse can cascade, which is why coordinated compliance is vital." }
            },
            {
                "@type": "Question",
                "name": "Is an audit mandatory for an NGO?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. A Section 8 company must have its accounts audited like any company. Separately, for income tax, a charitable institution must file an audit report, Form 10B for larger or foreign-funded NGOs or Form 10BB otherwise, signed by a chartered accountant, before its ITR-7 is filed. An FCRA-registered NGO also needs its foreign-fund accounts audited for the FC-4 return. So audit is a recurring, and in several forms simultaneous, requirement across the NGO's regulators." }
            },
            {
                "@type": "Question",
                "name": "Can you handle all of our NGO compliance?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. Our NGO compliance retainer runs all three regulators as one engagement, the Section 8 ROC filings and audit, the ITR-7 with the Form 10B or 10BB audit report, the 12A and 80G validity and the 10BD and 10BE donation forms, the FCRA Form FC-4 and separate foreign-fund books where they apply, and the CSR-1 registration. For trusts and societies we handle the Charity Commissioner or Registrar filings with the same tax overlay, all from a starting fee of 9,999 rupees a year." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-ngo",
        "name": "Corporate Compliance for an NGO",
        "description": "Annual compliance for an NGO, Section 8 company filings plus 12A, 80G and FCRA, across MCA, Income Tax and MHA, managed end to end. From INR 9,999 a year.",
        "url": "https://www.patronaccounting.com/corporate-compliance-for-ngo",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com" },
        "about": { "@id": "https://www.patronaccounting.com/corporate-compliance-for-ngo/#service" },
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-04T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/corporate-compliance-for-ngo/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How NGO Compliance Runs Through the Year",
        "description": "How an NGO runs its combined company, tax and foreign-funding compliance across the year, coordinating all three regulators on one calendar.",
        "totalTime": "P365D",
        "step": [
            { "@type": "HowToStep", "name": "Map the regulators", "text": "Identify which of the MCA, Income Tax and FCRA layers apply to your NGO and build one calendar." },
            { "@type": "HowToStep", "name": "Run the tax cycle", "text": "File the donation statements, keep 12A and 80G valid, and prepare the audit and ITR-7." },
            { "@type": "HowToStep", "name": "Run the company cycle", "text": "Hold the board meetings and AGM and file AOC-4, MGT-7 and the KYC." },
            { "@type": "HowToStep", "name": "Run the FCRA cycle", "text": "Where foreign funds apply, maintain the books and file FC-4 by 31 December." },
            { "@type": "HowToStep", "name": "Keep funding-ready", "text": "Maintain CSR-1 and the registrations so grants and CSR funds keep flowing." },
            { "@type": "HowToStep", "name": "Handle events", "text": "File the event-based forms and manage any changes during the year." }
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
        "name": "NGO Compliance Key Terms",
        "definedTerm": [
            { "@type": "DefinedTerm", "name": "Section 8 company", "description": "A not-for-profit company under Section 8 of the Companies Act." },
            { "@type": "DefinedTerm", "name": "12A", "description": "The Income Tax registration that gives the NGO its tax exemption." },
            { "@type": "DefinedTerm", "name": "80G", "description": "The registration that lets donors claim a deduction for their donations." },
            { "@type": "DefinedTerm", "name": "FCRA", "description": "The Foreign Contribution Regulation Act regime for receiving foreign funds." },
            { "@type": "DefinedTerm", "name": "CSR-1", "description": "The MCA registration that lets an NGO receive corporate CSR funds." }
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
                        Corporate Compliance for an NGO
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Service:</span> End-to-end annual compliance for an NGO, across all three of its regulators.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> NGO compliance starting from INR 9,999 per year (Exl GST and Govt. Charges).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Covers:</span> Section 8 ROC filings, ITR-7, the 12A and 80G overlay, and FCRA where it applies.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>For:</span> Section 8 companies, trusts and societies that want every regulator handled in one place.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ Businesses  |  4.9 Google Rating  |  Offices in Pune, Mumbai, Delhi and Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO Compliance%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20NGO Compliance%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20run%20an%20NGO%20and%20need%20the%20Section%208%2C%2012A%2C%2080G%20and%20FCRA%20compliance%20handled.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'NGO Compliance',
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
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Three Regulators</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Through the Year</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Information Needed</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Compliance Year</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Why a Retainer</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">By Structure</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Compliance: Overview and Quick Summary</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Compliance Services at a Glance</strong></p>
                    <p>An NGO answers to three regulators at once. As a Section 8 company it files AOC-4 and MGT-7 with the MCA and is audited like any company. With the Income Tax Department it files ITR-7 and must keep its 12A and 80G registrations valid, now on five-year cycles, and file the donation statements 10BD and 10BE. If it receives foreign funds, it files FCRA Form FC-4 by 31 December and follows the FCRA rules. A trust or society shares the tax and FCRA overlay but files with the Charity Commissioner or Registrar instead.</p>
                </div>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Regulator</th><th>Key filings</th><th>Note</th></tr></thead>
                    <tbody>
                        <tr><td><strong>MCA (Section 8)</strong></td><td>AOC-4, MGT-7, ADT-1</td><td>Audit, board, AGM</td></tr>
                        <tr><td><strong>Income Tax</strong></td><td>ITR-7, 10B or 10BB</td><td>12A and 80G valid</td></tr>
                        <tr><td><strong>Income Tax (donations)</strong></td><td>10BD, 10BE</td><td>By 31 May, donor certs</td></tr>
                        <tr><td><strong>MHA (FCRA)</strong></td><td>Form FC-4</td><td>By 31 December</td></tr>
                        <tr><td><strong>MCA (CSR)</strong></td><td>CSR-1</td><td>Needs 12A and 80G</td></tr>
                        <tr><td><strong>Director KYC</strong></td><td>DIR-3 KYC</td><td>By 30 September</td></tr>
                        <tr><td><strong>Cost</strong></td><td>From INR 9,999</td><td>Per year</td></tr>
                    </tbody>
                </table>
                </div>
                <p>This page is the complete picture of corporate compliance for an NGO, the overlay of company, tax and foreign-funding obligations that makes it distinct, and it routes you to each NGO service. When you want every regulator handled on one retainer, our team runs the whole calendar for you.</p>
                <p>For the registrations behind the compliance, see our <a href="https://www.patronaccounting.com/12a-registration">12A registration</a> and <a href="https://www.patronaccounting.com/80g-registration">80G registration</a> services, and for the bookkeeping, our <a href="https://www.patronaccounting.com/ngo-and-non-profit-accounting-services">NGO and non-profit accounting services</a>.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is NGO Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>NGO compliance is the full set of statutory filings, audits and registrations an NGO must keep current each year to stay legally operational and tax-exempt. What makes it different from an ordinary company is that an NGO is regulated on several fronts at once, its corporate or state regulator, the Income Tax Department for its charitable status, and, where it takes foreign funds, the Ministry of Home Affairs under FCRA.</p><p>The defining feature is the overlay. A Section 8 company has all the usual company compliance, and then the tax-exemption and foreign-funding layers sit on top, each with its own forms, deadlines and regulator, and a lapse in one can put the others, and the NGO’s funding, at risk.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Compliance:</strong></p>
                    <ul><li><strong>Section 8 company:</strong> A not-for-profit company under Section 8 of the Companies Act.</li><li><strong>12A:</strong> The Income Tax registration that gives the NGO its tax exemption.</li><li><strong>80G:</strong> The registration that lets donors claim a deduction for their donations.</li><li><strong>FCRA:</strong> The Foreign Contribution Regulation Act regime for receiving foreign funds.</li><li><strong>CSR-1:</strong> The MCA registration that lets an NGO receive corporate CSR funds.</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Tax Exemption</span>
                        <strong>12A / 80G</strong>
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
            <h2 class="section-title">The Three Regulators of an NGO</h2>
            <div class="content-text">
                
                <p>The clearest way to understand NGO compliance is by the three regulators it answers to.</p><h3>MCA, the Corporate Regulator</h3><p>For a Section 8 company, the MCA layer is the usual company compliance, AOC-4 and MGT-7, ADT-1, DIR-3 KYC, the statutory audit, board meetings and the AGM, plus the CSR-1 registration to receive CSR funds. A trust or society instead files with the Charity Commissioner or Registrar of Societies under state law.</p><h3>Income Tax, the Charitable-Status Regulator</h3><p>Every NGO files ITR-7, and to stay tax-exempt it must keep its 12A and 80G registrations valid, now on five-year renewal cycles, file the audit report in Form 10B or 10BB before the return, and, if 80G-registered, file the statement of donations in Form 10BD and issue Form 10BE certificates to donors.</p><h3>MHA, the Foreign-Funding Regulator</h3><p>If the NGO receives foreign contributions, the FCRA layer applies, with Form FC-4 by 31 December each year including NIL returns, a designated SBI New Delhi account, administrative expenses capped at 20 percent of foreign contribution, and a bar on sub-granting foreign funds to other NGOs.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our NGO Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Section 8 ROC Compliance</strong></td><td>We file AOC-4, MGT-7, ADT-1 and DIR-3 KYC, coordinate the audit, and support the board meetings and AGM.</td></tr><tr><td><strong>Income Tax and ITR-7</strong></td><td>We file ITR-7 with the Form 10B or 10BB audit report, and ensure the 85 percent application of income is met.</td></tr><tr><td><strong>12A and 80G</strong></td><td>We keep the 12A and 80G registrations valid, handle the renewals, and file the 10BD and 10BE donation forms.</td></tr><tr><td><strong>FCRA Compliance</strong></td><td>We file Form FC-4, maintain the separate foreign-fund books, and keep the NGO within the FCRA rules.</td></tr><tr><td><strong>CSR-1 and Funding Readiness</strong></td><td>We register and maintain CSR-1 so the NGO can receive CSR funds, and keep it funding-ready.</td></tr><tr><td><strong>Trust and Society Filings</strong></td><td>For trusts and societies, we handle the Charity Commissioner or Registrar filings alongside the tax overlay.</td></tr>

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
            <h2 class="section-title">How NGO Compliance Runs Through the Year</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How Patron runs the company, tax and FCRA cycles together on one calendar, so every regulator is handled and funding stays secure.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Map the Regulators</h3>
        <p class="step-description">We identify which of the MCA, Income Tax and FCRA layers apply to your NGO and build one calendar.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Three regulators</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>One calendar</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="16" y="34" width="26" height="42" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="47" y="34" width="26" height="42" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><rect x="78" y="34" width="26" height="42" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="29" y="60" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MCA</text><text x="60" y="60" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IT</text><text x="91" y="60" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MHA</text></svg></div>
            <span class="illustration-label">Map</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Run the Tax Cycle</h3>
        <p class="step-description">We file the donation statements, keep 12A and 80G valid, and prepare the audit and ITR-7.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12A / 80G valid</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-7</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="16" width="60" height="68" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR-7</text><line x1="42" y1="54" x2="78" y2="54" stroke="#14365F" stroke-width="2" opacity="0.35"/><path d="M44 66l5 5 10-10" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Tax</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Run the Company Cycle</h3>
        <p class="step-description">We hold the board meetings and AGM and file AOC-4, MGT-7 and the KYC.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOC-4 / MGT-7</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Post-AGM</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="28" width="52" height="52" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="44" y1="42" x2="76" y2="42" stroke="#14365F" stroke-width="2" opacity="0.35"/><line x1="44" y1="54" x2="76" y2="54" stroke="#14365F" stroke-width="2" opacity="0.35"/><path d="M44 66l6 6 12-12" stroke="#E8712C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Company</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Run the FCRA Cycle</h3>
        <p class="step-description">Where foreign funds apply, we maintain the books and file FC-4 by 31 December.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FC-4 by 31 Dec</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Separate books</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="none" stroke="#14365F" stroke-width="2"/><path d="M30 50h60M60 20c8 8 8 52 0 60M60 20c-8 8-8 52 0 60" stroke="#14365F" stroke-width="1.5" opacity="0.45" fill="none"/><circle cx="84" cy="28" r="11" fill="#E8712C"/><text x="84" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FC4</text></svg></div>
            <span class="illustration-label">FCRA</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Keep Funding-Ready</h3>
        <p class="step-description">We maintain CSR-1 and the registrations so grants and CSR funds keep flowing.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CSR-1 live</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grant-ready</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 78s-22-12-22-30a12 12 0 0122-7 12 12 0 0122 7c0 18-22 30-22 30z" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/><text x="60" y="52" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CSR-1</text></svg></div>
            <span class="illustration-label">Funding</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Handle Events</h3>
        <p class="step-description">We file the event-based forms and manage any changes during the year.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Event forms</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Changes managed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="20" width="60" height="60" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M42 40h36M42 52h28" stroke="#14365F" stroke-width="2" opacity="0.4" stroke-linecap="round"/><circle cx="78" cy="64" r="10" fill="#E8712C"/><path d="M78 60v8M74 64h8" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg></div>
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
            <h2 class="section-title">Information Required for NGO Compliance</h2>
            <div class="content-text">
                
                <ul><li>NGO structure, Section 8, trust or society, and its registration.</li><li>12A and 80G certificates and their validity.</li><li>FCRA registration and foreign-fund records, if any.</li><li>Financial statements and books for the year.</li><li>Details of donations received.</li><li>Director, trustee or member details.</li></ul><p><strong>Need the full checklist?</strong> We share a tailored NGO compliance checklist when you engage us.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common NGO Compliance Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Letting 12A or 80G lapse</strong></td><td>If 80G is not renewed within its cycle, donors lose the deduction and donations fall. We track the renewals so the registrations never lapse.</td></tr><tr><td><strong>Missing the FCRA return</strong></td><td>FC-4 is due by 31 December even as a NIL return, and a miss risks FCRA suspension. We file it on time and keep the foreign-fund books separate.</td></tr><tr><td><strong>Forgetting the donation forms</strong></td><td>Form 10BD by 31 May and Form 10BE to donors are easy to overlook, and a delay hurts donors’ claims. We file and issue them on schedule.</td></tr><tr><td><strong>Coordinating three regulators</strong></td><td>Separate MCA, tax and FCRA calendars cause gaps. We run all three as one engagement so nothing is missed.</td></tr>

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
            <h2 class="section-title">NGO Compliance Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (annual retainer)</td><td class="table-amount">Starting from INR 9,999 per year (Exl GST and Govt. Charges)</td></tr><tr><td>Scope of the retainer</td><td class="table-amount">Section 8 ROC filings, ITR-7 with the audit report, 12A and 80G validity and the donation forms, and the CSR-1 and statutory registers</td></tr><tr><td>FCRA Form FC-4 and foreign-fund accounting</td><td class="table-amount">Confirmed as part of the engagement scope</td></tr><tr><td>Statutory audit, registration renewal fees, trust or society filings</td><td class="table-amount">Confirmed as part of the engagement scope</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">The FCRA Form FC-4 and separate foreign-fund accounting, the statutory audit fee, the registration renewal government fees, and trust or society filings where they apply are confirmed as part of the engagement scope, since the workload depends on your structure and whether you receive foreign funds. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20set%20up%20annual%20compliance%20for%20my%20NGO%20across%20all%20its%20regulators.%20Please%20share%20the%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The NGO Compliance Year</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Form 10BD, donation statement</td><td>By 31 May (Form 10BE certificates issued to donors)</td></tr><tr><td>DIR-3 KYC, director KYC</td><td>By 30 September</td></tr><tr><td>Audit report and ITR-7</td><td>Form 10B or 10BB before the income tax return</td></tr><tr><td>Section 8 ROC, after AGM</td><td>AOC-4 and MGT-7 after the AGM, within six months of the year end</td></tr><tr><td>FCRA Form FC-4, where it applies</td><td>By 31 December each year, including a NIL return</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>An NGO’s year spans three calendars.</strong> The donation statement in Form 10BD is due by 31 May, the director KYC by 30 September, the audit report in Form 10B or 10BB before the income tax return, and the Section 8 company files AOC-4 and MGT-7 after its AGM, which is within six months of the year end. The FCRA Form FC-4, where it applies, is due by 31 December. Because these deadlines sit with three different regulators and overlap through the year, a single combined calendar is the only reliable way to keep an NGO compliant, which is what the retainer provides.</p>

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
            <h2 class="section-title">Why Use a Managed NGO Retainer</h2>
        </div>
        <div class="features-grid"><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 010 18M12 3a15 15 0 000 18"/></svg></div>
                <h3 class="feature-title">All Three Regulators in One Place</h3>
                <p class="feature-text">The MCA, Income Tax and FCRA calendars are run together by one team, so nothing falls between the regulators.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15l2 2 4-4"/></svg></div>
                <h3 class="feature-title">12A and 80G Kept Valid</h3>
                <p class="feature-text">The 12A and 80G registrations are tracked and renewed within their cycles, protecting the exemption and donor deductions.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
                <h3 class="feature-title">FCRA Returns Filed on Time</h3>
                <p class="feature-text">The FCRA Form FC-4 is filed by 31 December, NIL return included, with the foreign-fund books kept separate.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-4.35-7-10a4 4 0 017-2.65A4 4 0 0119 11c0 5.65-7 10-7 10z"/></svg></div>
                <h3 class="feature-title">CSR and Grant Readiness</h3>
                <p class="feature-text">CSR-1 and the registrations are maintained so corporate CSR funds and grants keep flowing to the NGO.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg></div>
                <h3 class="feature-title">Funding Protected</h3>
                <p class="feature-text">Coordinated compliance across the linked regulators prevents one lapse from cascading and cutting off funding.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3 class="feature-title">Qualified CA and CS Team</h3>
                <p class="feature-text">Handled by a qualified CA and CS team experienced across Section 8, trust and society structures.</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Organisations Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years</strong></p><p>"Patron manages our Section 8 filings, our 12A and 80G, and our FCRA return, all from one team, so we focus on our cause." - Director, Section 8 company, Pune.</p><p>"They kept our 80G valid and filed our donation forms on time, which protected our donors’ deductions." - Trustee, charitable trust, Delhi.</p><p>Trusted by leading brands including Hyundai, Asian Paints and Bridgestone for accounting and compliance support.</p><p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves organisations across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Compliance by Structure</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Section 8 Company</th><th>Trust</th><th>Society</th></tr></thead>
                    <tbody>
                        <tr><td>Primary regulator</td><td>MCA</td><td>Charity Commissioner</td><td>Registrar of Societies</td></tr><tr><td>Annual filing</td><td>AOC-4, MGT-7</td><td>State filing</td><td>Annual return</td></tr><tr><td>Tax overlay</td><td>ITR-7, 12A, 80G</td><td>ITR-7, 12A, 80G</td><td>ITR-7, 12A, 80G</td></tr><tr><td>FCRA</td><td>If foreign funds</td><td>If foreign funds</td><td>If foreign funds</td></tr>

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
            <h2 class="section-title">NGO Services and Registrations</h2>
            <div class="content-text">
                
                <p>This hub routes to each NGO-related service and registration.</p><ul><li><a href="https://www.patronaccounting.com/section8-company-registration">Section 8 Company Registration</a> to set up a not-for-profit company.</li><li><a href="https://www.patronaccounting.com/12a-registration">12A Registration</a> for the tax exemption registration.</li><li><a href="https://www.patronaccounting.com/80g-registration">80G Registration</a> for the donor deduction registration.</li><li><a href="https://www.patronaccounting.com/fcra-registration">FCRA Registration</a> to receive foreign contributions.</li><li><a href="https://www.patronaccounting.com/ngo-and-non-profit-accounting-services">NGO and Non Profit Accounting Services</a> for the bookkeeping behind the filings.</li><li><a href="https://www.patronaccounting.com/statutory-audit">Statutory Audit</a> for the audit of the accounts.</li></ul><p>For setting up the entity, see also our <a href="https://www.patronaccounting.com/ngo-registration">NGO registration</a> and society registration services, and the <a href="https://www.patronaccounting.com/compliance-calendar">compliance calendar</a> to track every deadline.</p>

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
                
                <p><strong>The corporate layer:</strong> A Section 8 company, a not-for-profit company registered under Section 8 of the Companies Act, 2013, has the same core company compliance as other companies, holding board meetings and an annual general meeting, having its accounts audited, filing the financial statements in Form AOC-4 and the annual return in Form MGT-7, intimating the auditor in ADT-1 and completing DIR-3 KYC, while the Central Government may revoke its licence under Section 8(6) if it operates fraudulently or against its objects, and a trust or society instead files with the Charity Commissioner or the Registrar of Societies under the applicable state law.</p><p><strong>The tax-exemption layer:</strong> Every NGO files its income tax return in Form ITR-7, and to retain its exemption it must hold valid registrations under Section 12A and, for donor deductions, under Section 80G, now granted for limited periods and subject to renewal, file the audit report in Form 10B, for larger or foreign-funded institutions, or Form 10BB otherwise before the return, apply at least the prescribed proportion of its income to its objects, and, where 80G-registered, file the statement of donations in Form 10BD by 31 May and issue the donation certificate in Form 10BE to each donor.</p><p><strong>The foreign-funding layer:</strong> An NGO that receives foreign contributions must be registered under the Foreign Contribution Regulation Act, file the annual return in Form FC-4 by 31 December each year including a NIL return, receive all foreign contributions into the designated FCRA account with the State Bank of India in New Delhi, keep its administrative expenses within 20 percent of the foreign contribution received under the 2020 amendment, and not sub-grant foreign funds to other organisations.</p><p><strong>Funding and consequences:</strong> To receive corporate social responsibility funds, an NGO registers in Form CSR-1 with the MCA, which requires valid 12A and 80G, and across all of these layers non-compliance carries serious consequences, the loss of 12A or 80G and so of tax exemption and donor benefit, the suspension of FCRA registration, and the revocation of a Section 8 licence, any of which can cut off the NGO’s funding.</p><p>Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA portal</a> for the company forms, the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax portal</a> for the tax filings, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">the Companies Act on IndiaCode</a> for the provisions.</p>

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
                    <p class="faq-expanded__lead">Common questions on NGO annual compliance, the three regulators, 12A and 80G, the FCRA return, Forms 10BD and 10BE, audit and the consequences of non-compliance.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NGO Compliance',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What compliance must an NGO follow each year?</h3>
                        <div class="faq-expanded__a"><p>An NGO’s compliance depends on its structure but generally spans three regulators. A Section 8 company files AOC-4 and MGT-7 with the MCA, is audited and holds an AGM. Every NGO files ITR-7 with the Income Tax Department and must keep its 12A and 80G registrations valid, file the audit report in Form 10B or 10BB, and the donation forms 10BD and 10BE. If it receives foreign funds, it files FCRA Form FC-4 by 31 December. A trust or society files with the Charity Commissioner or Registrar instead of the MCA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between 12A and 80G?</h3>
                        <div class="faq-expanded__a"><p>12A is the Income Tax registration that gives the NGO itself its tax exemption, so that its income applied to charitable objects is not taxed. 80G is a separate registration that lets the NGO’s donors claim a deduction for their donations, which makes the NGO more attractive to fund. Both are now granted for limited periods and must be renewed within their cycles, and both must be valid for the NGO to register for CSR funds in Form CSR-1, so keeping them current is essential.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When is the FCRA annual return due?</h3>
                        <div class="faq-expanded__a"><p>An NGO registered under the Foreign Contribution Regulation Act must file its annual return in Form FC-4 by 31 December each year, even where it has received no foreign contribution during the year, in which case a NIL return is filed. The return relies on audited accounts of the foreign funds, which the NGO must keep in a separate set of books and receive into its designated FCRA account with the State Bank of India in New Delhi. Missing FC-4 can lead to suspension of the FCRA registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does a Section 8 company have the same compliance as a private company?</h3>
                        <div class="faq-expanded__a"><p>Largely yes, on the corporate side. A Section 8 company holds board meetings and an AGM, has its accounts audited, and files AOC-4, MGT-7, ADT-1 and DIR-3 KYC like any company. What sets it apart is the not-for-profit overlay, it files ITR-7 rather than ITR-6, must maintain its 12A and 80G registrations, and follows the FCRA rules if it takes foreign funds, and its licence can be revoked under Section 8(6) if it strays from its charitable objects.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are Forms 10BD and 10BE?</h3>
                        <div class="faq-expanded__a"><p>Form 10BD is the statement of donations that an 80G-registered NGO files with the Income Tax Department by 31 May each year, listing the donations received where the donor is eligible to claim a deduction. After filing it, the NGO issues Form 10BE, the donation certificate, to each such donor. The tax department auto-matches these against the donors’ own returns, so a delay or error directly affects the donors’ ability to claim their 80G deduction, which is why timely filing matters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if an NGO does not stay compliant?</h3>
                        <div class="faq-expanded__a"><p>The consequences are serious and cut to the NGO’s funding. Letting 12A or 80G lapse means losing the tax exemption and the donor deduction, so donations decline. A missed FCRA return can lead to suspension of FCRA registration and the loss of foreign funding. For a Section 8 company, persistent default can lead to penalties and even revocation of the licence under Section 8(6). Because the regulators are linked, a single lapse can cascade, which is why coordinated compliance is vital.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is an audit mandatory for an NGO?</h3>
                        <div class="faq-expanded__a"><p>Yes. A Section 8 company must have its accounts audited like any company. Separately, for income tax, a charitable institution must file an audit report, Form 10B for larger or foreign-funded NGOs or Form 10BB otherwise, signed by a chartered accountant, before its ITR-7 is filed. An FCRA-registered NGO also needs its foreign-fund accounts audited for the FC-4 return. So audit is a recurring, and in several forms simultaneous, requirement across the NGO’s regulators.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can you handle all of our NGO compliance?</h3>
                        <div class="faq-expanded__a"><p>Yes. Our NGO compliance retainer runs all three regulators as one engagement, the Section 8 ROC filings and audit, the ITR-7 with the Form 10B or 10BB audit report, the 12A and 80G validity and the 10BD and 10BE donation forms, the FCRA Form FC-4 and separate foreign-fund books where they apply, and the CSR-1 registration. For trusts and societies we handle the Charity Commissioner or Registrar filings with the same tax overlay, all from a starting fee of 9,999 rupees a year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">NGO ki compliance kya hai?</h3>
                        <div class="faq-expanded__a"><p>NGO ko teen regulators follow karne hote hain, Section 8 company ke liye MCA me AOC-4 aur MGT-7, Income Tax me ITR-7 aur 12A aur 80G, aur foreign funds par MHA me FCRA ka FC-4.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">FCRA return kya hai?</h3>
                        <div class="faq-expanded__a"><p>FCRA return Form FC-4 hai, jo foreign funds lene wale NGO ko har saal 31 December tak file karni hoti hai, NIL return bhi, warna FCRA registration suspend ho sakti hai.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Three regulators?</strong> MCA, Income Tax and MHA.</p><p><strong>Tax return?</strong> ITR-7, with 12A and 80G valid.</p><p><strong>FCRA return?</strong> Form FC-4 by 31 December.</p><p><strong>Donor forms?</strong> 10BD by 31 May, 10BE to donors.</p>

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
                
                <p><strong>For an NGO, compliance is directly tied to funding.</strong> Let 80G lapse and donors lose their deduction, miss the FCRA return and foreign funding can be suspended, fall short on the tax filings and the exemption itself is at risk, and stray from the objects and a Section 8 licence can be revoked. Because the three regulators are linked, one lapse can trigger others. Running all three on a single, tracked calendar is what keeps an NGO compliant and its funding secure.</p><p><strong>Set up your NGO compliance - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20set%20up%20annual%20compliance%20for%20my%20NGO%20across%20all%20its%20regulators." target="_blank" rel="noopener">WhatsApp us</a>. We respond within 2 hours.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Set Up NGO Compliance with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">Corporate compliance for an NGO is defined by its overlay, the company or state-law filings, the Income Tax layer of ITR-7, 12A and 80G, and the FCRA layer where foreign funds are received, three regulators on one organisation.</p><p style="color:#FFFFFF;">The filings are linked, and a lapse in one can put the others, and the NGO’s funding, at risk. This page maps the whole picture and routes you to each NGO service. Patron Accounting, with a qualified CA and CS team and offices in Pune, Mumbai, Delhi and Gurugram, runs the full NGO calendar across all three regulators on a single retainer from 9,999 rupees a year.</p><p style="color:#FFFFFF;"><strong>10,000+ Businesses  |  4.9 Rating  |  50,000+ Documents Filed  |  15+ Years.</strong> Book a free consultation today.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20set%20up%20annual%20compliance%20for%20my%20NGO%20across%20all%20its%20regulators.%20Please%20share%20the%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO Compliance%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20NGO Compliance%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
<div class="pa-block-title">NGO Services and Registrations</div>
<div class="pa-block-sub">Setup, registrations and accounting</div>
<div class="pa-cross-grid">
<a href="https://www.patronaccounting.com/section8-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/12a-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">12A Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/80g-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">80G Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/fcra-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FCRA Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/ngo-and-non-profit-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Accounting</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed at least yearly and updated whenever the Section 8 company compliance, the 12A and 80G renewal cycles, the Form 10B/10BB/10BD/10BE requirements, the FCRA rules and Form FC-4, or the CSR-1 framework change. Freshness Tier 1.</p>
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
