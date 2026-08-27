@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>NRI ESOP Tax 2026: DTAA & Residency Rules | Patron</title>
    <meta name="description" content="NRI and non-resident employees are taxed in India on the India-services portion of ESOPs, with DTAA relief. Expert cross-border advisory from Rs 9,999.">
    <link rel="canonical" href="/esop-tax-for-nri-and-non-resident-employees">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NRI ESOP Tax 2026: DTAA and Residency Rules in India | Patron Accounting">
    <meta property="og:description" content="NRI and non-resident employees are taxed in India on the India-services portion of ESOPs, with DTAA relief. Expert cross-border advisory from Rs 9,999.">
    <meta property="og:url" content="/esop-tax-for-nri-and-non-resident-employees">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NRI ESOP Tax 2026: DTAA and Residency Rules in India | Patron Accounting">
    <meta name="twitter:description" content="NRI and non-resident employees are taxed in India on the India-services portion of ESOPs, with DTAA relief. Expert cross-border advisory from Rs 9,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/#service",
        "name": "ESOP Tax for NRI and Non-Resident Employees",
        "description": "Patron Accounting determines residential status under Section 6, apportions the India-taxable ESOP perquisite by India workdays, claims DTAA relief and Foreign Tax Credit through TRC, Form 10F and Form 67, handles Schedule FA disclosure, and plans FEMA-compliant repatriation for NRI and non-resident employees.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Non-resident Indian", "sameAs": "https://en.wikipedia.org/wiki/Non-resident_Indian_and_person_of_Indian_origin" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "NRI ESOP Tax Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "NRI and Cross-Border ESOP Tax Advisory" },
                    "price": "9999",
                    "priceCurrency": "INR",
                    "description": "Residency determination, apportionment and DTAA relief mapping. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "NRI ESOP Tax", "item": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Are NRI ESOPs taxed in India if exercised abroad?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes, to the extent they relate to services rendered in India. A 2025 tribunal ruling confirmed that ESOPs granted for work in India remain taxable in India even when the option is exercised after moving abroad. The India-taxable portion is apportioned by the days worked in India during the vesting period, and DTAA relief prevents double taxation." }
            },
            {
                "@type": "Question",
                "name": "How is the ESOP perquisite apportioned for a non-resident?",
                "acceptedAnswer": { "@type": "Answer", "text": "The perquisite is split by the proportion of the grant-to-vest period during which the employee worked in India. For example, if options vested over four years and the employee worked in India for two of them, only 50% of the perquisite is taxable in India for a non-resident. A resident and ordinarily resident is taxed on the full amount." }
            },
            {
                "@type": "Question",
                "name": "NRI ke ESOP par India mein tax lagta hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Haan, jitna hissa India mein di gayi service se juda hai, utna India mein taxable hai, chahe exercise videsh mein hua ho. Residency aur India workdays ke hisaab se apportionment hota hai, aur DTAA se double tax se bachav milta hai." }
            },
            {
                "@type": "Question",
                "name": "How do I claim DTAA relief on ESOP income?",
                "acceptedAnswer": { "@type": "Answer", "text": "To claim relief under the applicable Double Taxation Avoidance Agreement, obtain a Tax Residency Certificate from your country of residence, file Form 10F, and claim Foreign Tax Credit by filing Form 67 before the ITR due date under Section 90 or 91. Missing the Form 67 deadline forfeits the credit, a common and costly oversight." }
            },
            {
                "@type": "Question",
                "name": "Do I report foreign ESOP shares in my Indian return?",
                "acceptedAnswer": { "@type": "Answer", "text": "If you are a resident and ordinarily resident, you must disclose foreign ESOP shares in Schedule FA of the ITR, even if you have not sold them. Non-disclosure can attract penalties under the Black Money Act. Non-residents and RNORs are generally not required to report foreign assets that are outside the Indian tax net." }
            },
            {
                "@type": "Question",
                "name": "How are ESOP sale proceeds repatriated by an NRI?",
                "acceptedAnswer": { "@type": "Answer", "text": "Proceeds depend on the bank account used. Funds in an NRE account are fully repatriable without limit, while funds in an NRO account are repatriable up to USD 1 million per financial year. An NRI demat account is required to sell listed shares on an Indian exchange, and the route must follow FEMA documentation." }
            },
            {
                "@type": "Question",
                "name": "Foreign company ke RSU par India tax kaise lagta hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Indian resident ke liye foreign company ke RSU vesting par salary perquisite ke roop mein taxable hote hain, aur bechne par capital gains. Foreign mein diya gaya tax DTAA aur Form 67 ke through credit ban jaata hai." }
            },
            {
                "@type": "Question",
                "name": "What if my residential status changed during the vesting period?",
                "acceptedAnswer": { "@type": "Answer", "text": "Your status is tested separately for each year under Section 6, and the perquisite is apportioned across the period accordingly. Returning NRIs often qualify as RNOR, which limits Indian tax on foreign income for a transitional period. Getting the year-by-year status right is essential to avoid overpaying or facing a notice." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees",
        "name": "ESOP Tax for NRI and Non-Resident Employees",
        "description": "NRI and non-resident employees are taxed in India on the India-services portion of ESOPs, with DTAA relief. Expert cross-border advisory from Rs 9,999.",
        "url": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How cross-border ESOP tax works for NRIs",
        "description": "Step-by-step process to fix residential status, map the service period, apportion the perquisite, claim DTAA relief, handle the sale and FEMA, and disclose and file.",
        "totalTime": "P6D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Fix residential status",
                "text": "Apply Section 6 day-count and the RNOR and Section 6(1A) tests for the exercise and sale years."
            },
            {
                "@type": "HowToStep",
                "name": "Map the service period",
                "text": "Identify the grant-to-vest period and the days worked in India within it."
            },
            {
                "@type": "HowToStep",
                "name": "Apportion the perquisite",
                "text": "Tax only the India-services share for a non-resident or RNOR; the whole for a resident."
            },
            {
                "@type": "HowToStep",
                "name": "Claim DTAA relief",
                "text": "Obtain the TRC and Form 10F, and file Form 67 for Foreign Tax Credit before the ITR due date."
            },
            {
                "@type": "HowToStep",
                "name": "Handle the sale and FEMA",
                "text": "Compute capital gains on India-sourced shares and route proceeds through NRE or NRO accounts."
            },
            {
                "@type": "HowToStep",
                "name": "Disclose and file",
                "text": "Report foreign shares in Schedule FA and file the ITR reconciled with foreign tax slips."
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
        "name": "NRI ESOP Tax Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "RNOR",
                "description": "Resident but Not Ordinarily Resident, a transitional status taxed broadly like a non-resident on foreign income."
            },
            {
                "@type": "DefinedTerm",
                "name": "Apportionment",
                "description": "Splitting the perquisite by India workdays during the grant-to-vest period to find the India-taxable share."
            },
            {
                "@type": "DefinedTerm",
                "name": "TRC",
                "description": "Tax Residency Certificate from the country of residence, required to claim DTAA relief."
            },
            {
                "@type": "DefinedTerm",
                "name": "FTC",
                "description": "Foreign Tax Credit under Section 90 or 91 for tax paid abroad, claimed via Form 67."
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
                        ESOP Tax for NRI and Non-Resident Employees
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> grant letter, residency days, TRC, Form 10F, foreign tax slips.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> cross-border ESOP advisory from Rs 9,999 (Exl GST and Govt. Charges).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Rule:</span> NR and RNOR taxed only on the India-services portion.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Relief:</span> DTAA Article 16, Foreign Tax Credit via Form 67 and Section 90.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years in cross-border and NRI tax</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NRI ESOP Tax%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20NRI ESOP Tax%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20need%20cross-border%20ESOP%20tax%20advice.%20Please%20help%20me%20fix%20my%20residency%2C%20apportion%20the%20India-taxable%20portion%2C%20and%20claim%20DTAA%20relief.%20I%20can%20share%20my%20residency%20and%20grant%20details." target="_blank" class="btn-sample text-decoration-none">
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

                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - NRI ESOP Tax',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'NRI ESOP Tax', 'label' => 'NRI ESOP Tax', 'selected' => true, 'disabled' => false],
                            ['value' => 'ESOP Management and Compliance', 'label' => 'ESOP Management and Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'ITR for NRIs', 'label' => 'ITR for NRIs', 'selected' => false, 'disabled' => false],
                            ['value' => 'ITR for Capital Gains', 'label' => 'ITR for Capital Gains', 'selected' => false, 'disabled' => false],
                            ['value' => 'ITR for Salary', 'label' => 'ITR for Salary', 'selected' => false, 'disabled' => false],
                            ['value' => 'FDI Compliance', 'label' => 'FDI Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'ESOP Services', 'label' => 'ESOP Services', 'selected' => false, 'disabled' => false],
                            ['value' => 'Other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
                        ],
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
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <!-- POPULATE: Replace with real testimonial-card divs. Cards are locked to a fixed 370px height by CSS for a uniform row.
             TEXT CARD (single-row style): quote mark on top; review text (`flex:1`, top-aligned); single author row {avatar + name + "Google Review" + 5 orange stars stacked, with "X months ago" pushed to the far right via margin-left:auto}.
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             Avatar bg cycles across cards: var(--orange), var(--blue), #7C3AED (purple), #0D9488 (teal).
             VIDEO CARD (optional; only if real video testimonials exist) - video fills top 298px with poster + centred play button + stars overlay; circular author photo below:
             <div class="testimonial-card" style="padding:0;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;overflow:hidden;">
                 <div style="position:relative;cursor:pointer;height:298px;flex-shrink:0;background:#000;" onclick="var v=this.querySelector('video'); if(v.paused){v.play();this.querySelector('.testi-play-ov').style.display='none';}else{v.pause();this.querySelector('.testi-play-ov').style.display='flex';}">
                     <video preload="metadata" poster="POSTER_URL" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;"><source src="VIDEO_URL" type="video/mp4"></video>
                     <div class="testi-play-ov" style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;"><div style="width:54px;height:54px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(0,0,0,0.35);"><svg viewBox="0 0 24 24" fill="#fff" style="width:22px;height:22px;margin-left:2px;"><path d="M8 5v14l11-7z"/></svg></div></div>
                     <div style="position:absolute;left:16px;bottom:12px;color:var(--orange);font-size:15px;text-shadow:0 1px 3px rgba(0,0,0,0.5);">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                 </div>
                 <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                     <div style="width:36px;height:36px;border-radius:50%;overflow:hidden;flex-shrink:0;"><img src="POSTER_URL" alt="Name" style="width:100%;height:100%;object-fit:cover;"></div>
                     <div style="min-width:0;"><div style="font-weight:700;font-size:13px;color:var(--blue);">Name</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role - Company</div></div>
                 </div>
             </div>
             ORDER (when video testimonials are used): 1st video, 2nd a text review, 3rd second video, then remaining text reviews. Content from real-testimonials.json.
        -->
        <div class="testimonial-card" style="padding:0;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;overflow:hidden;">
    <div style="position:relative;cursor:pointer;height:298px;flex-shrink:0;background:#000;" onclick="var vd=this.querySelector('video'); if(vd.paused){vd.play();this.querySelector('.testi-play-ov').style.display='none';}else{vd.pause();this.querySelector('.testi-play-ov').style.display='flex';}">
        <video preload="metadata" poster="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;"><source src="/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4"></video>
        <div class="testi-play-ov" style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;"><div style="width:54px;height:54px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(0,0,0,0.35);"><svg viewBox="0 0 24 24" fill="#fff" style="width:22px;height:22px;margin-left:2px;"><path d="M8 5v14l11-7z"/></svg></div></div>
        <div style="position:absolute;left:16px;bottom:12px;color:var(--orange);font-size:15px;text-shadow:0 1px 3px rgba(0,0,0,0.5);">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    </div>
    <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
        <div style="width:36px;height:36px;border-radius:50%;overflow:hidden;flex-shrink:0;"><img src="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal" style="width:100%;height:100%;object-fit:cover;"></div>
        <div style="min-width:0;"><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director - Demandify Media</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I've had an outstanding experience working with Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process smooth and stress-free. Highly recommended for anyone seeking reliable and knowledgeable financial guidance!</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:0;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;overflow:hidden;">
    <div style="position:relative;cursor:pointer;height:298px;flex-shrink:0;background:#000;" onclick="var vd=this.querySelector('video'); if(vd.paused){vd.play();this.querySelector('.testi-play-ov').style.display='none';}else{vd.pause();this.querySelector('.testi-play-ov').style.display='flex';}">
        <video preload="metadata" poster="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;"><source src="/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4"></video>
        <div class="testi-play-ov" style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;"><div style="width:54px;height:54px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(0,0,0,0.35);"><svg viewBox="0 0 24 24" fill="#fff" style="width:22px;height:22px;margin-left:2px;"><path d="M8 5v14l11-7z"/></svg></div></div>
        <div style="position:absolute;left:16px;bottom:12px;color:var(--orange);font-size:15px;text-shadow:0 1px 3px rgba(0,0,0,0.5);">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    </div>
    <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
        <div style="width:36px;height:36px;border-radius:50%;overflow:hidden;flex-shrink:0;"><img src="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava" style="width:100%;height:100%;object-fit:cover;"></div>
        <div style="min-width:0;"><div style="font-weight:700;font-size:13px;color:var(--blue);">Anjanay Srivastava</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder - Hunarsource Consulting</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really impressed by their acumen. And it's not expensive at all. Good guidance while filling was given as well.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I have been taking services of Patron Accounting from 5 years and found them highly professional and the best people for all taxation related work be it individual or company services. Highly recommended.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AG</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ayushi Garg</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge, attention to detail, and a genuine willingness to help. It gave me immense confidence and peace of mind.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PR</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Preeti Singh Rathor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I recently got my business incorporated and I am extremely satisfied with their services. They made the entire process of incorporation smooth and hassle-free. The team was very professional, knowledgeable, and always ready to assist me.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">S</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Shahriar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I got financial services from them for my private limited company. They are having good and qualified staff to provide services in a professional manner which is beneficial for me.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MS</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Monika Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>NRIs and global employers trust Patron Accounting to fix residency, apportion the India-taxable portion and secure DTAA relief so ESOP income is taxed once.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

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
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Resident vs NR</button>
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
                    <p><strong>&#128204; TL;DR - NRI ESOP Tax Services at a Glance</strong></p>
                    <p>NRI and non-resident employees are taxed in India only on the India-services portion of the ESOP perquisite, apportioned by workdays, with DTAA relief for tax paid abroad. We compute and claim it.</p>
                </div>
                <p>Cross-border ESOP tax, handled by India specialists. Whether you are an NRI holding Indian ESOPs or an Indian-origin employee with foreign-parent shares, Patron Accounting fixes your residency, apportions the India-taxable portion, and claims DTAA relief so you are taxed once, correctly.</p>
                <p>Cross-border ESOP tax turns on residency and where the service was rendered. A 2025 tribunal ruling confirmed that ESOPs granted for work in India remain taxable in India even when exercised abroad. Get the residency status, apportionment and DTAA relief right, and you avoid both double taxation and a notice. Patron Accounting has handled NRI and cross-border tax for over 15 years.</p>
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
                <h2 class="section-title">What Is Cross-Border ESOP Tax</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Cross-border ESOP tax is the Indian tax on stock-option benefits where the employee is a non-resident or the shares are foreign. India taxes the portion of the perquisite that relates to services rendered in India, regardless of where the option is exercised.</p>
                    <p>Residential status under Section 6 decides the scope. A resident and ordinarily resident is taxed on worldwide ESOP income. A non-resident or RNOR is taxed only on the India-linked portion, apportioned by the days worked in India during the vesting period. Tax paid in the other country can be relieved under the applicable Double Taxation Avoidance Agreement.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NRI ESOP Tax:</strong></p>
                    <ul>
                        <li><strong>RNOR:</strong> Resident but Not Ordinarily Resident, taxed broadly like a non-resident on foreign income.</li>
                        <li><strong>Apportionment:</strong> splitting the perquisite by India workdays during the grant-to-vest period.</li>
                        <li><strong>TRC:</strong> Tax Residency Certificate from the country of residence, required for DTAA relief.</li>
                        <li><strong>FTC:</strong> Foreign Tax Credit under Section 90 or 91 for tax paid abroad, claimed via Form 67.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NRI ESOP Tax</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Turns on</span>
                        <strong>Residency and DTAA</strong>
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
                
                <p>This service applies wherever residency or a foreign element complicates the ESOP. Status under Section 6 is the starting point.</p>
                <ul>
                    <li>NRIs holding ESOPs of an Indian company, exercising while abroad.</li>
                    <li>Indian-origin employees of foreign companies holding ESOPs or RSUs.</li>
                    <li>Employees who moved into or out of India during the vesting period.</li>
                    <li>Returning NRIs whose residential status changed to RNOR or resident.</li>
                    <li>Foreign-parent companies advising their India-linked employees.</li>
                </ul>
                <p><strong>Statutory anchor:</strong> an individual is resident under Section 6 if present 182 days or more in the year, or 60 days plus 365 days across the prior four years; Indian citizens with India income above Rs 15 lakh face a 120-day threshold and possible deemed residence under Section 6(1A).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Cross-Border ESOP Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Residency Determination</td><td>We compute your status under Section 6, including RNOR and deemed-resident tests, for each relevant year.</td></tr>
                        <tr><td>Income Apportionment</td><td>We split the perquisite by India workdays during the grant-to-vest period to isolate the India-taxable portion.</td></tr>
                        <tr><td>DTAA Relief and FTC</td><td>We claim treaty relief under Article 16 and Foreign Tax Credit via TRC, Form 10F and Form 67.</td></tr>
                        <tr><td>Schedule FA Disclosure</td><td>We disclose foreign ESOP shares in Schedule FA to avoid Black Money Act exposure.</td></tr>
                        <tr><td>FEMA Repatriation Planning</td><td>We align NRE and NRO routing so sale proceeds are repatriated within the USD 1 million limit.</td></tr>
                        <tr><td>ITR Filing and Notice Defence</td><td>We file the cross-border ITR and respond to mismatch notices on foreign ESOP income.</td></tr>

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
            <h2 class="section-title">How Cross-Border ESOP Tax Works in 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From fixing residency to filing the return, we isolate the India-taxable portion and secure DTAA relief so you are taxed once.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Fix residential status</h3>
        <p class="step-description">We apply Section 6 day-count and the RNOR and Section 6(1A) tests for the exercise and sale years.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 6</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RNOR / 6(1A)</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="32" y="22" width="56" height="56" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="32" y1="36" x2="88" y2="36" stroke="#14365F" stroke-width="1.5"/><text x="60" y="60" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">182d</text></svg></div>
            <span class="illustration-label">Status Fixed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Map the service period</h3>
        <p class="step-description">We identify the grant-to-vest period and the days worked in India within it.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grant-to-vest</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>India workdays</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="28" y1="50" x2="92" y2="50" stroke="#14365F" stroke-width="2"/><circle cx="34" cy="50" r="4" fill="#F5A623"/><circle cx="60" cy="50" r="4" fill="#E8712C"/><circle cx="86" cy="50" r="4" fill="#25D366"/><rect x="34" y="42" width="26" height="16" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1" opacity="0.6"/></svg></div>
            <span class="illustration-label">Period Mapped</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Apportion the perquisite</h3>
        <p class="step-description">We tax only the India-services share for a non-resident or RNOR; the whole for a resident.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>India share</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NR vs ROR</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 50 L60 20 A30 30 0 0 1 60 80 Z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.3"/><text x="74" y="54" font-size="9" fill="#E8712C" font-weight="700" font-family="Arial, sans-serif">India</text></svg></div>
            <span class="illustration-label">Apportioned</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Claim DTAA relief</h3>
        <p class="step-description">We obtain the TRC and Form 10F, and file Form 67 for Foreign Tax Credit before the ITR due date.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TRC + Form 10F</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 67</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22" y="36" width="30" height="28" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.3"/><rect x="68" y="36" width="30" height="28" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><path d="M52 50 h16 M60 45 l6 5 -6 5" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/><text x="37" y="78" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TRC/67</text></svg></div>
            <span class="illustration-label">Relief Claimed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Handle the sale and FEMA</h3>
        <p class="step-description">We compute capital gains on India-sourced shares and route proceeds through NRE or NRO accounts.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Capital gains</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NRE / NRO</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M32 50 h56 M60 22 a40 40 0 010 56 M60 22 a40 40 0 000 56" stroke="#F5A623" stroke-width="1.2" fill="none"/><text x="60" y="92" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NRE/NRO</text></svg></div>
            <span class="illustration-label">FEMA Routed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Disclose and file</h3>
        <p class="step-description">We report foreign shares in Schedule FA and file the ITR reconciled with foreign tax slips.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule FA</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reconciled ITR</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="14" width="52" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sch FA</text><circle cx="60" cy="60" r="11" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M54 60l4 4 8-8" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
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
                    <li>Passport stamps or travel record to count residency days.</li>
                    <li>ESOP grant letter with grant date, vesting schedule and exercise price.</li>
                    <li>Record of days worked in India during the vesting period.</li>
                    <li>Tax Residency Certificate and Form 10F from the country of residence.</li>
                    <li>Foreign tax slips (W-2, 1099 or equivalent) for Foreign Tax Credit.</li>
                    <li>NRE/NRO account details and demat statement for sale and repatriation.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Apportionment example</strong></p>
                    <p>Options vested over 4 years; the employee worked in India for 2 of them. For a non-resident at exercise, only 50% of the perquisite is taxable in India; the balance follows the other country, with DTAA relief preventing double taxation.</p>
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
                        <tr><td>Assuming exercise abroad means no India tax</td><td>Under-reporting and notice risk</td><td>We apply the services-in-India rule confirmed by the 2025 tribunal ruling and apportion correctly.</td></tr>
                        <tr><td>Double taxation across two countries</td><td>Same income taxed twice</td><td>We claim DTAA relief and Foreign Tax Credit via TRC, Form 10F and Form 67.</td></tr>
                        <tr><td>Missed Schedule FA disclosure on foreign shares</td><td>Black Money Act exposure</td><td>We disclose all foreign ESOP holdings to avoid Black Money Act penalties.</td></tr>
                        <tr><td>Repatriation blocked or over the limit</td><td>Funds stuck abroad or in NRO</td><td>We route proceeds through NRE or NRO accounts within the USD 1 million annual cap.</td></tr>

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
            <h2 class="section-title">Cross-Border ESOP Tax Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Residency determination, apportionment and DTAA relief mapping</td></tr>
                        <tr><td>FEMA repatriation planning, Schedule FA disclosure and full ITR filing</td><td>Quoted on scope</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NRI ESOP Tax consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20help%20with%20NRI%2Fcross-border%20ESOP%20tax%2C%20DTAA%20relief%20and%20FEMA%20repatriation.%20Please%20share%20how%20it%20works%20and%20your%20fees." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Residency determination with apportionment</td><td>4 to 6 working days</td></tr>
                        <tr><td>Where TRC, Form 10F and Foreign Tax Credit documentation are involved</td><td>1 to 2 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>File Form 67 before the ITR due date, as a late filing can forfeit the credit.</strong> Fixing residency and gathering the TRC early keeps the cross-border position clean.</p>

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
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 010 20M12 2a15 15 0 000 20"/></svg></div>
            <h3 class="feature-title">Correct residency</h3>
            <p class="feature-text">Correct residency status, the foundation of every cross-border ESOP position.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12l2.5 2.5L16 9"/></svg></div>
            <h3 class="feature-title">Defensible apportionment</h3>
            <p class="feature-text">Defensible apportionment of the India-taxable portion, ready for assessment.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
            <h3 class="feature-title">Relief claimed in time</h3>
            <p class="feature-text">DTAA relief and Foreign Tax Credit claimed correctly via Form 67 in time.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3 class="feature-title">FA and FEMA handled</h3>
            <p class="feature-text">Schedule FA and FEMA handled so foreign holdings and repatriation stay compliant.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by NRIs and Global Employers</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years in cross-border and NRI taxation, DTAA relief and FEMA-compliant repatriation.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Resident vs Non-Resident ESOP Tax</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Resident (ROR)</th><th>Non-Resident / RNOR</th></tr></thead>
                    <tbody>
                        <tr><td>Taxable scope</td><td>Worldwide ESOP income</td><td>India-services portion only</td></tr>
                        <tr><td>Foreign shares</td><td>Taxable in India</td><td>Generally outside India tax</td></tr>
                        <tr><td>Schedule FA</td><td>Mandatory disclosure</td><td>Not required for non-resident</td></tr>
                        <tr><td>DTAA relief</td><td>FTC on foreign tax</td><td>Treaty allocates taxing right</td></tr>
                        <tr><td>Repatriation</td><td>Resident account</td><td>NRE free; NRO up to USD 1M/year</td></tr>

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
                
                <p>This page handles the cross-border layer over the core ESOP stack. See our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a> for the exercise computation, employer withholding and sale-event handling that sit underneath the cross-border position.</p>
                <p>Employees file through <a href="/itr-for-salary">ITR for salary</a>, <a href="/itr-for-capital-gains">ITR for capital gains</a> and <a href="/itr-for-nris">ITR for NRIs</a>. Foreign-parent companies setting up in India can also use our <a href="/fdi-compliance">FDI compliance services</a>. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

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
                
                <p><strong>Residency:</strong> Section 6 of the Income-tax Act 1961 sets the 182-day and 60-plus-365-day tests, the 120-day threshold for high-India-income citizens, and deemed residence under Section 6(1A). RNOR applies where the individual was non-resident in 9 of the last 10 years or present 729 days or fewer in the last 7.</p>
                <p><strong>Charge and sourcing:</strong> the ESOP perquisite under Section 17(2)(vi) is taxable to the extent it relates to services rendered in India, per CBDT Circular 2/2021 and confirmed by a 2025 ITAT ruling, even if exercised abroad.</p>
                <p><strong>Relief:</strong> Section 90 and 91 and the applicable DTAA Article 16 allow Foreign Tax Credit, claimed with a TRC, Form 10F and Form 67 filed before the return due date.</p>
                <p><strong>Disclosure and FEMA:</strong> residents must disclose foreign ESOP shares in Schedule FA, with Black Money Act exposure for non-disclosure; FEMA permits full NRE repatriation and NRO repatriation up to USD 1 million per financial year.</p>
                <p>Authoritative sources: the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (residency, Schedule FA, Form 67), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Income-tax Act and Rules</a>, the <a href="https://www.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a> (FEMA, repatriation), and the <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">CBDT</a> (DTAA, Circular 2/2021).</p>

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
                    <p class="faq-expanded__lead">Common questions on NRI ESOP taxability, exercise abroad, apportionment, DTAA relief, Schedule FA and FEMA repatriation.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Are NRI ESOPs taxed in India if exercised abroad?</h3>
                        <div class="faq-expanded__a"><p>Yes, to the extent they relate to services rendered in India. A 2025 tribunal ruling confirmed that ESOPs granted for work in India remain taxable in India even when the option is exercised after moving abroad. The India-taxable portion is apportioned by the days worked in India during the vesting period, and DTAA relief prevents double taxation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How is the ESOP perquisite apportioned for a non-resident?</h3>
                        <div class="faq-expanded__a"><p>The perquisite is split by the proportion of the grant-to-vest period during which the employee worked in India. For example, if options vested over four years and the employee worked in India for two of them, only 50% of the perquisite is taxable in India for a non-resident. A resident and ordinarily resident is taxed on the full amount.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">NRI ke ESOP par India mein tax lagta hai?</h3>
                        <div class="faq-expanded__a"><p>Haan, jitna hissa India mein di gayi service se juda hai, utna India mein taxable hai, chahe exercise videsh mein hua ho. Residency aur India workdays ke hisaab se apportionment hota hai, aur DTAA se double tax se bachav milta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How do I claim DTAA relief on ESOP income?</h3>
                        <div class="faq-expanded__a"><p>To claim relief under the applicable Double Taxation Avoidance Agreement, obtain a Tax Residency Certificate from your country of residence, file Form 10F, and claim Foreign Tax Credit by filing Form 67 before the ITR due date under Section 90 or 91. Missing the Form 67 deadline forfeits the credit, a common and costly oversight.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do I report foreign ESOP shares in my Indian return?</h3>
                        <div class="faq-expanded__a"><p>If you are a resident and ordinarily resident, you must disclose foreign ESOP shares in Schedule FA of the ITR, even if you have not sold them. Non-disclosure can attract penalties under the Black Money Act. Non-residents and RNORs are generally not required to report foreign assets that are outside the Indian tax net.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How are ESOP sale proceeds repatriated by an NRI?</h3>
                        <div class="faq-expanded__a"><p>Proceeds depend on the bank account used. Funds in an NRE account are fully repatriable without limit, while funds in an NRO account are repatriable up to USD 1 million per financial year. An NRI demat account is required to sell listed shares on an Indian exchange, and the route must follow FEMA documentation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Foreign company ke RSU par India tax kaise lagta hai?</h3>
                        <div class="faq-expanded__a"><p>Indian resident ke liye foreign company ke RSU vesting par salary perquisite ke roop mein taxable hote hain, aur bechne par capital gains. Foreign mein diya gaya tax DTAA aur Form 67 ke through credit ban jaata hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What if my residential status changed during the vesting period?</h3>
                        <div class="faq-expanded__a"><p>Your status is tested separately for each year under Section 6, and the perquisite is apportioned across the period accordingly. Returning NRIs often qualify as RNOR, which limits Indian tax on foreign income for a transitional period. Getting the year-by-year status right is essential to avoid overpaying or facing a notice.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Who is taxed worldwide?</strong> Resident and ordinarily resident only.</li>
                    <li><strong>NR/RNOR scope?</strong> Only the India-services portion.</li>
                    <li><strong>Apportionment basis?</strong> India workdays during the vesting period.</li>
                    <li><strong>DTAA documents?</strong> TRC, Form 10F, Form 67.</li>
                    <li><strong>NRO repatriation?</strong> Up to USD 1 million per financial year.</li>
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
                
                <p>Form 67 for Foreign Tax Credit must be filed before the ITR due date, or the credit is lost for that year. Schedule FA non-disclosure carries Black Money Act exposure. Fix residency and gather the TRC early, well before the return deadline.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Cross-Border ESOP Sorted</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP tax for NRIs and non-resident employees sits at the intersection of residency, DTAA and FEMA, and a single wrong assumption can trigger double taxation or a notice.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of cross-border tax experience, fixes your residency, apportions the India-taxable portion, and secures DTAA relief so you are taxed once and stay compliant on both sides.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20help%20with%20NRI%2Fcross-border%20ESOP%20tax%2C%20DTAA%20relief%20and%20FEMA%20repatriation.%20Please%20share%20how%20it%20works%20and%20your%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NRI ESOP Tax%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20NRI ESOP Tax%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Cross-Border ESOP Tax Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote residency determination, apportionment, DTAA relief and FEMA planning for NRIs and global employers.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We advise NRIs and global employers nationwide and abroad, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The residency determination, apportionment, DTAA relief and FEMA planning is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for cross-border ESOP tax</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-nris" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for NRIs</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-salary" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/fdi-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every three months for residency-rule amendments, new DTAA or MLI positions, ITAT or High Court rulings on cross-border ESOPs, FEMA repatriation limit changes, Schedule FA or Form 67 procedure changes, and Income-tax Act 2025 mapping (Tier 1 freshness).</p>
        </div>
    </div>
</section>


</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
    function renderReviews(reviews) {
        const slider = document.getElementById('testimonialSlider');
        const loading = document.getElementById('testiLoading');
        // Static cards already in DOM - just init Slick if not already done
        if (slider.children.length > 0 && !$(slider).hasClass('slick-initialized')) {
            if (loading) loading.style.display = 'none';
            initSlick(slider);
            return;
        }
        let html = '';

        reviews.forEach(function(review, i) {
            if (review.hasVideo && review.videoUrl) {
                html += buildVideoCard(review);
            } else {
                html += buildQuoteCard(review, i);
            }
        });

        slider.innerHTML = html;
        slider.style.display = 'block';
        loading.style.display = 'none';

        // Init Slick
        initSlick(slider);
    }

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered in the desired order - use them as-is and do NOT
        // fetch/regenerate from fallbackReviews or the Google API (that would overwrite the
        // curated order, e.g. video, text, video, then rest).
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
            return; // static cards are authoritative - stop here
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneVal = phoneInput.value.trim();
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

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
