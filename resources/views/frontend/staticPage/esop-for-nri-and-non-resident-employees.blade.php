@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush








@section('meta')
    <title>ESOP for NRI Employees 2026: FEMA and Reporting | Patron Accounting</title>
    <meta name="description" content="How an Indian company grants ESOPs to NRI and non-resident employees: FEMA and NDI Rules, Form ESOP reporting, pricing and repatriation at sale. From Rs 19,999.">
    <link rel="canonical" href="/esop-for-nri-and-non-resident-employees">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP for NRI Employees 2026: FEMA and Reporting | Patron Accounting">
    <meta property="og:description" content="How an Indian company grants ESOPs to NRI and non-resident employees: FEMA and NDI Rules, Form ESOP reporting, pricing and repatriation at sale. From Rs 19,999.">
    <meta property="og:url" content="/esop-for-nri-and-non-resident-employees">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP for NRI Employees 2026: FEMA and Reporting | Patron Accounting">
    <meta name="twitter:description" content="How an Indian company grants ESOPs to NRI and non-resident employees: FEMA and NDI Rules, Form ESOP reporting, pricing and repatriation at sale. From Rs 19,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-for-nri-and-non-resident-employees/#service",
        "name": "ESOP for NRI and Non-Resident Employees in India",
        "description": "Patron Accounting helps Indian companies grant ESOPs to NRI and non-resident employees, handling eligibility under Rule 12, the FEMA Non-debt Instruments Rules 2019 framework, Form ESOP reporting within 30 days via the FIRMS portal and AD bank, fair-value pricing certified by a CA or merchant banker, the 5 percent general-permission route, and repatriation of sale proceeds.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-for-nri-and-non-resident-employees" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Non-resident Indian", "sameAs": "https://en.wikipedia.org/wiki/Non-resident_Indian_and_person_of_Indian_origin" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP for NRI Employees Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Non-Resident Employee ESOP FEMA Structuring and Reporting" },
                    "price": "19999",
                    "priceCurrency": "INR",
                    "description": "Eligibility check, FEMA structuring and Form ESOP reporting for a grant. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-for-nri-and-non-resident-employees/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP for NRI Employees", "item": "https://www.patronaccounting.com/esop-for-nri-and-non-resident-employees" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-for-nri-and-non-resident-employees/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Can an Indian company grant ESOPs to NRI employees?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. The definition of employee in Rule 12 of the Companies Act covers employees and directors whether based in India or abroad, so an Indian company can grant ESOPs to its NRI, OCI or foreign-national employees, and to employees of its overseas branch or subsidiary. The promoter and over-10-percent-director bar still applies. The key extra step compared with a resident employee is FEMA compliance, because shares are going to a person resident outside India, which brings in RBI reporting." }
            },
            {
                "@type": "Question",
                "name": "What FEMA reporting applies when we grant ESOPs to a non-resident employee?",
                "acceptedAnswer": { "@type": "Answer", "text": "The grant is a foreign investment under Schedule I of the NDI Rules 2019. The company must file Form ESOP within 30 days of the grant, through the RBI FIRMS portal via its authorised dealer bank, and report the share issuance on allotment. Delayed filing does not invalidate the grant but attracts a late submission fee set by the RBI. The reporting obligation is on the company, which is why employers, not employees, need to manage it." }
            },
            {
                "@type": "Question",
                "name": "NRI employee ko ESOP dene pe RBI reporting kya hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Jab Indian company kisi non-resident employee ko ESOP deti hai, to yeh foreign investment maana jaata hai NDI Rules ke tahat. Company ko Form ESOP grant ke 30 din ke andar FIRMS portal aur AD bank ke through file karni padti hai, aur allotment pe share issuance report karni hoti hai. Late filing pe late submission fee lagti hai. Yeh zimmedari company ki hoti hai, employee ki nahi. Hum yeh file karte hain." }
            },
            {
                "@type": "Question",
                "name": "At what price must shares be issued to a non-resident employee?",
                "acceptedAnswer": { "@type": "Answer", "text": "Under FEMA, shares issued to a person resident outside India must be at not less than the fair value, determined by an internationally accepted method such as discounted cash flow and certified by a chartered accountant or merchant banker. This prevents undervaluation and protects the foreign-investment record. DPIIT-recognised startups have some flexibility in ESOP pricing. We arrange the certified valuation before the grant so the price is FEMA-compliant." }
            },
            {
                "@type": "Question",
                "name": "How are sale proceeds repatriated when the NRI employee sells?",
                "acceptedAnswer": { "@type": "Answer", "text": "The proceeds are handled through the employee's NRE or NRO account. If the shares are held on a repatriation basis, the proceeds can be remitted abroad through the appropriate channel; an NRI who acquired the shares while still resident in India usually holds them on a non-repatriation basis, in which case different routing applies. The repatriation basis is effectively set at the time of grant, so we plan it then to keep the eventual exit clean." }
            },
            {
                "@type": "Question",
                "name": "Is there a limit on ESOPs to non-resident employees?",
                "acceptedAnswer": { "@type": "Answer", "text": "Under general permission, an Indian company can issue ESOPs to its non-resident employees, or to employees of its overseas joint venture or wholly owned subsidiary, directly or through a trust, up to 5 percent of its paid-up capital. Issuance beyond that level is possible but attracts additional conditions. Most company schemes sit comfortably within this, but where a larger allocation is planned we structure it to stay compliant." }
            },
            {
                "@type": "Question",
                "name": "How is the NRI employee's ESOP taxed?",
                "acceptedAnswer": { "@type": "Answer", "text": "This page covers the FEMA and reporting side; the tax is a separate workstream. In outline, the perquisite is taxed at exercise with the employer deducting TDS, and the gain on sale is taxed as capital gains, with a non-resident getting relief under the relevant DTAA on the India-taxed portion. For the full computation, including residency, the perquisite, capital gains and treaty relief, see our dedicated ESOP tax page for NRI and non-resident employees." }
            },
            {
                "@type": "Question",
                "name": "Does it matter if the employee is an NRI, OCI or foreign national?",
                "acceptedAnswer": { "@type": "Answer", "text": "For the FEMA framework, what matters is that the person is resident outside India, so the issuance is a foreign investment and the Form ESOP reporting applies, whether the employee is an NRI, an OCI or a foreign national. There can be differences in account types and repatriation, for example NRE versus NRO routing, and in the tax and treaty position by country. We tailor the structuring and the repatriation set-up to the specific status." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-for-nri-and-non-resident-employees",
        "name": "ESOP for NRI and Non-Resident Employees in India",
        "description": "How an Indian company grants ESOPs to NRI and non-resident employees: FEMA and NDI Rules, Form ESOP reporting, pricing and repatriation at sale. From Rs 19,999.",
        "url": "https://www.patronaccounting.com/esop-for-nri-and-non-resident-employees",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-for-nri-and-non-resident-employees/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-for-nri-and-non-resident-employees/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How an Indian company grants and reports ESOPs to non-resident employees",
        "description": "Step-by-step process to confirm eligibility under Rule 12, obtain a FEMA-compliant fair-value certificate, grant and approve, file Form ESOP within 30 days via FIRMS, and manage allotment reporting and repatriation.",
        "totalTime": "P14D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Confirm eligibility",
                "text": "Check each non-resident employee against Rule 12 and the scheme."
            },
            {
                "@type": "HowToStep",
                "name": "Value the shares",
                "text": "Obtain a FEMA-compliant fair-value certificate from a CA or merchant banker."
            },
            {
                "@type": "HowToStep",
                "name": "Grant and approve",
                "text": "Pass the board and shareholder approvals and issue the grant."
            },
            {
                "@type": "HowToStep",
                "name": "Report to the RBI",
                "text": "File Form ESOP within 30 days via the FIRMS portal and the AD bank."
            },
            {
                "@type": "HowToStep",
                "name": "Manage the lifecycle",
                "text": "Report allotment, and set up repatriation for the eventual sale."
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
        "name": "ESOP for NRI Employees Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "NDI Rules 2019",
                "description": "The FEMA Non-debt Instruments Rules under which an Indian company issuing shares to a non-resident is a foreign investment."
            },
            {
                "@type": "DefinedTerm",
                "name": "Form ESOP",
                "description": "The RBI reporting form filed via FIRMS within 30 days when ESOPs are granted to a non-resident employee."
            },
            {
                "@type": "DefinedTerm",
                "name": "FIRMS portal",
                "description": "The RBI Foreign Investment Reporting and Management System through which Form ESOP is filed via the AD bank."
            },
            {
                "@type": "DefinedTerm",
                "name": "Repatriation basis",
                "description": "Whether sale proceeds can be remitted abroad, routed through the employee's NRE or NRO account."
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
                        ESOP for NRI and Non-Resident Employees
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> yes, an Indian company can grant ESOPs to NRI and non-resident employees.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>FEMA:</span> issuance to non-residents under the NDI Rules, reported to the RBI.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Reporting:</span> Form ESOP within 30 days via the FIRMS portal.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> NRI-employee ESOP handling from Rs 19,999 (Exl GST and Govt. Charges).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on FEMA, NDI Rules and RBI reporting</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP for NRI Employees%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20for%20NRI%20Employees%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20for%20NRI%20Employees%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP for NRI Employees',
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
    'ctaText'    => 'Companies with global teams trust Patron Accounting to grant and report ESOPs to non-resident employees compliantly under FEMA.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">Can You Grant?</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">The FEMA Regime</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">RBI Reporting</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Pricing and Repatriation</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Reporting Events</button>
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
                    <p><strong>&#128204; TL;DR - ESOP for NRI Employees Services at a Glance</strong></p>
                    <p>An Indian company can grant ESOPs to its NRI and non-resident employees; the grant is a foreign investment under the NDI Rules, reported to the RBI in Form ESOP within 30 days, with fair-value pricing and repatriation at sale. We handle the employer side.</p>
                </div>
                <p>You want to give your NRI or overseas team members the same equity as everyone else, but the moment shares go to a non-resident, FEMA and RBI reporting kick in. Patron Accounting handles it from the employer's side: confirming eligibility, structuring the grant under the FEMA rules, filing the RBI reporting, and getting the pricing and repatriation right.</p>
                <p>This page is for the employer, not the employee. It answers how your company grants and reports ESOPs to NRI and non-resident staff under FEMA. For the employee's own tax computation, perquisite, capital gains and DTAA, see our dedicated ESOP tax page for NRIs and non-residents.</p>
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
                <h2 class="section-title">Can an Indian Company Grant ESOPs to NRI Employees?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Yes.</strong> The definition of 'employee' in Rule 12 of the Companies Act covers permanent employees and directors whether based in India or abroad, so a non-resident employee, an NRI, OCI or foreign national, on your rolls or those of your overseas branch or subsidiary, can be granted ESOPs.</p>
                    <p><strong>The catch is FEMA, not the Companies Act.</strong> Because shares are going to a person resident outside India, the issuance is treated as a foreign investment and must follow the FEMA rules and RBI reporting, in addition to the usual ESOP scheme requirements. The promoter and over-10-percent-director bar applies just as it does for any employee.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP for NRI Employees:</strong></p>
                    <ul>
                        <li><strong>NDI Rules 2019:</strong> the FEMA rules under which the grant is a foreign investment.</li>
                        <li><strong>Form ESOP:</strong> the RBI reporting form, filed via FIRMS within 30 days.</li>
                        <li><strong>FIRMS portal:</strong> the RBI reporting system, accessed via the AD bank.</li>
                        <li><strong>Repatriation basis:</strong> whether sale proceeds can be remitted abroad (NRE) or not (NRO).</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP for NRI Employees</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Reported under</span>
                        <strong>NDI Rules 2019</strong>
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
            <h2 class="section-title">The FEMA Regime: Issuance to Non-Residents</h2>
            <div class="content-text">
                
                <p>When shares move from an Indian company to a non-resident, the transaction enters the foreign investment framework. This is the inbound direction, distinct from an Indian employee receiving foreign-parent shares.</p>
                <ul>
                    <li><strong>NDI Rules 2019:</strong> an Indian company issuing ESOPs to a person resident outside India is a foreign investment under Schedule I of the FEMA (Non-debt Instruments) Rules, 2019, read with the Mode of Payment and Reporting Regulations.</li>
                    <li><strong>Companies Act:</strong> the grant must also follow Section 62 and Rule 12, and the company's ESOP scheme, as for any employee.</li>
                    <li><strong>SEBI:</strong> for listed companies, the SEBI SBEB and Sweat Equity Regulations apply on top.</li>
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
            <h2 class="section-title">RBI Reporting: Form ESOP and FIRMS</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Grant of ESOP to a non-resident</td><td>Form ESOP within 30 days of the grant.</td></tr>
                        <tr><td>Channel</td><td>Through the RBI FIRMS portal and the company's AD bank.</td></tr>
                        <tr><td>On allotment of shares</td><td>Report the share issuance to the non-resident.</td></tr>
                        <tr><td>Late filing</td><td>Attracts a late submission fee set by the RBI.</td></tr>
                        <tr><td>The 30-day point</td><td>Missing the window does not invalidate the grant, but a pattern of late filings becomes a FEMA exposure in audits and diligence.</td></tr>

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
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From confirming eligibility to managing the lifecycle, we run the employer side of a non-resident ESOP grant end to end.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Confirm eligibility</h3>
        <p class="step-description">We check each non-resident employee against Rule 12 and the scheme.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 12</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scheme check</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="60" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="44" cy="34" r="3" fill="#25D366"/><line x1="54" y1="34" x2="78" y2="34" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="44" cy="50" r="3" fill="#25D366"/><line x1="54" y1="50" x2="78" y2="50" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="44" cy="66" r="3" fill="#F5A623"/><line x1="54" y1="66" x2="72" y2="66" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div>
            <span class="illustration-label">Eligibility Confirmed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Value the shares</h3>
        <p class="step-description">We obtain a FEMA-compliant fair-value certificate from a CA or merchant banker.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DCF valuation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA / MB certified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="12" width="60" height="76" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M40 60 l10 -12 8 8 14 -18" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DCF</text></svg></div>
            <span class="illustration-label">Shares Valued</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Grant and approve</h3>
        <p class="step-description">We pass the board and shareholder approvals and issue the grant.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board + SR</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grant issued</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="60" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="30" x2="78" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="60" cy="60" r="13" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 60l5 5 9-9" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Granted</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Report to the RBI</h3>
        <p class="step-description">We file Form ESOP within 30 days via the FIRMS portal and the AD bank.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Within 30 days</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FIRMS + AD bank</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30 44 L60 26 L90 44 Z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><rect x="34" y="44" width="6" height="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="57" y="44" width="6" height="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="80" y="44" width="6" height="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="72" width="64" height="6" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/></svg></div>
            <span class="illustration-label">Reported</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Manage the lifecycle</h3>
        <p class="step-description">We report allotment, and set up repatriation for the eventual sale.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Allotment report</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NRE / NRO</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M44 50 h32 M68 42 l8 8 -8 8" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/><circle cx="42" cy="50" r="4" fill="#F5A623"/></svg></div>
            <span class="illustration-label">Lifecycle Managed</span>
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
            <h2 class="section-title">Pricing and Repatriation</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Fair-value pricing:</strong> because the shares go to a non-resident, FEMA requires the price to be not less than the fair value, determined by an internationally accepted method such as discounted cash flow and certified by a chartered accountant or merchant banker. DPIIT-recognised startups have some pricing flexibility.</li>
                    <li><strong>The 5 percent route:</strong> under general permission, an Indian company can issue ESOPs to its non-resident employees, or to employees of its overseas joint venture or wholly owned subsidiary, directly or through a trust, up to 5 percent of paid-up capital, with conditions applying beyond that level.</li>
                    <li><strong>Repatriation at sale:</strong> when the non-resident employee eventually sells the shares, the proceeds are handled through their NRE or NRO account. Shares held on a repatriation basis allow the proceeds to be remitted abroad, while an NRI who acquired shares while resident in India typically holds them on a non-repatriation basis.</li>
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
                        <tr><td>Form ESOP deadline missed</td><td>Late submission fee and FEMA exposure</td><td>Track and file within 30 days, or regularise with the LSF.</td></tr>
                        <tr><td>Shares priced below fair value</td><td>Undervaluation issue on the foreign-investment record</td><td>Arrange a certified DCF valuation before the grant.</td></tr>
                        <tr><td>Unclear repatriation basis at exit</td><td>Blocked or delayed remittance of proceeds</td><td>Set the basis at grant and route proceeds through NRE or NRO.</td></tr>
                        <tr><td>FEMA and tax handled in silos</td><td>Mismatched filings and TDS</td><td>Coordinate the reporting with the perquisite TDS and tax.</td></tr>

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
            <h2 class="section-title">NRI-Employee ESOP Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 19,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Eligibility check, FEMA structuring and the Form ESOP reporting for a grant</td></tr>
                        <tr><td>Fair-value valuation, share-issuance reporting, repatriation set-up</td><td>Scoped on top</td></tr>
                        <tr><td>AD bank or government charges</td><td>At actuals</td></tr>
                        <tr><td>Regular global hiring</td><td>Reporting handled on an ongoing basis</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP for NRI Employees consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20for%20NRI%20Employees%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Confirming eligibility and structuring the grant</td><td>Usually a few days</td></tr>
                        <tr><td>Fair-value valuation and board and shareholder approvals</td><td>1 to 2 weeks</td></tr>
                        <tr><td>Form ESOP filing</td><td>Within the 30-day window after the grant</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Repatriation set-up is handled at grant and revisited at the eventual sale.</strong> For ongoing global hiring, we fold the reporting into a regular cycle so each grant is captured on time.</p>

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
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Compliant from the start</h3>
            <p class="feature-text">Non-resident grants made and reported within the FEMA rules, not after.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <h3 class="feature-title">Form ESOP on time</h3>
            <p class="feature-text">Form ESOP filed in time, avoiding late submission fees and FEMA exposure.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
            <h3 class="feature-title">Protected record</h3>
            <p class="feature-text">Fair-value pricing that protects the foreign-investment record.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 010 20M12 2a15 15 0 000 20"/></svg></div>
            <h3 class="feature-title">Clean exit</h3>
            <p class="feature-text">A repatriation basis set at grant, so the employee's exit is clean.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Companies With Global Teams</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years on FEMA, NDI Rules, RBI reporting and ESOPs for Indian companies with global teams.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Reporting Events at a Glance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Event</th><th>Reporting</th></tr></thead>
                    <tbody>
                        <tr><td>Grant of ESOP to a non-resident</td><td>Form ESOP within 30 days of the grant</td></tr>
                        <tr><td>Channel</td><td>RBI FIRMS portal via the AD bank</td></tr>
                        <tr><td>Allotment of shares</td><td>Report the share issuance to the non-resident</td></tr>
                        <tr><td>Late filing</td><td>Late submission fee set by the RBI</td></tr>
                        <tr><td>At sale</td><td>Repatriation through the NRE or NRO account</td></tr>

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
                
                <p>This builds on our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>, and the grant is issued via <a href="/issue-of-shares">issue of shares</a>, reported alongside our <a href="/fdi-compliance">FDI compliance</a> work.</p>
                <p>For the employee's tax, see our <a href="/itr-for-esop-employees">ITR for ESOP employees</a> and <a href="/itr-for-capital-gains">ITR for capital gains</a> services, and for treaty relief our <a href="/fdi-compliance">cross-border compliance</a> support. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

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
                
                <p><strong>Foreign investment:</strong> an Indian company issuing ESOPs to a person resident outside India is a foreign investment under Schedule I of the FEMA (Non-debt Instruments) Rules, 2019, read with the FEMA (Mode of Payment and Reporting of Non-Debt Instruments) Regulations, 2019.</p>
                <p><strong>Eligibility:</strong> the grant is made under Section 62(1)(b) of the Companies Act read with Rule 12 of the Share Capital Rules, under which a non-resident employee or director qualifies, subject to the promoter and over-10-percent-director exclusion.</p>
                <p><strong>Reporting and pricing:</strong> Form ESOP is filed within 30 days through the FIRMS portal and the AD bank, with a late submission fee for delay; shares must be priced at not less than fair value certified by a chartered accountant or merchant banker.</p>
                <p><strong>Repatriation:</strong> sale proceeds are routed through the employee's NRE or NRO account, with repatriation depending on whether the shares are held on a repatriation or non-repatriation basis under FEMA.</p>
                <p>Authoritative sources: the <a href="https://www.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a> (NDI Rules, FIRMS, Form ESOP reporting), the <a href="https://firms.rbi.org.in" target="_blank" rel="noopener">RBI FIRMS portal</a>, the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Section 62, Rule 12), and the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">FEMA, 1999 and NDI Rules bare text</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on granting ESOPs to NRI and non-resident employees, the FEMA reporting, pricing and repatriation.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP for NRI Employees',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can an Indian company grant ESOPs to NRI employees?</h3>
                        <div class="faq-expanded__a"><p>Yes. The definition of employee in Rule 12 of the Companies Act covers employees and directors whether based in India or abroad, so an Indian company can grant ESOPs to its NRI, OCI or foreign-national employees, and to employees of its overseas branch or subsidiary. The promoter and over-10-percent-director bar still applies. The key extra step compared with a resident employee is FEMA compliance, because shares are going to a person resident outside India, which brings in RBI reporting.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What FEMA reporting applies when we grant ESOPs to a non-resident employee?</h3>
                        <div class="faq-expanded__a"><p>The grant is a foreign investment under Schedule I of the NDI Rules 2019. The company must file Form ESOP within 30 days of the grant, through the RBI FIRMS portal via its authorised dealer bank, and report the share issuance on allotment. Delayed filing does not invalidate the grant but attracts a late submission fee set by the RBI. The reporting obligation is on the company, which is why employers, not employees, need to manage it.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">NRI employee ko ESOP dene pe RBI reporting kya hai?</h3>
                        <div class="faq-expanded__a"><p>Jab Indian company kisi non-resident employee ko ESOP deti hai, to yeh foreign investment maana jaata hai NDI Rules ke tahat. Company ko Form ESOP grant ke 30 din ke andar FIRMS portal aur AD bank ke through file karni padti hai, aur allotment pe share issuance report karni hoti hai. Late filing pe late submission fee lagti hai. Yeh zimmedari company ki hoti hai, employee ki nahi. Hum yeh file karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">At what price must shares be issued to a non-resident employee?</h3>
                        <div class="faq-expanded__a"><p>Under FEMA, shares issued to a person resident outside India must be at not less than the fair value, determined by an internationally accepted method such as discounted cash flow and certified by a chartered accountant or merchant banker. This prevents undervaluation and protects the foreign-investment record. DPIIT-recognised startups have some flexibility in ESOP pricing. We arrange the certified valuation before the grant so the price is FEMA-compliant.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How are sale proceeds repatriated when the NRI employee sells?</h3>
                        <div class="faq-expanded__a"><p>The proceeds are handled through the employee's NRE or NRO account. If the shares are held on a repatriation basis, the proceeds can be remitted abroad through the appropriate channel; an NRI who acquired the shares while still resident in India usually holds them on a non-repatriation basis, in which case different routing applies. The repatriation basis is effectively set at the time of grant, so we plan it then to keep the eventual exit clean.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is there a limit on ESOPs to non-resident employees?</h3>
                        <div class="faq-expanded__a"><p>Under general permission, an Indian company can issue ESOPs to its non-resident employees, or to employees of its overseas joint venture or wholly owned subsidiary, directly or through a trust, up to 5 percent of its paid-up capital. Issuance beyond that level is possible but attracts additional conditions. Most company schemes sit comfortably within this, but where a larger allocation is planned we structure it to stay compliant.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is the NRI employee's ESOP taxed?</h3>
                        <div class="faq-expanded__a"><p>This page covers the FEMA and reporting side; the tax is a separate workstream. In outline, the perquisite is taxed at exercise with the employer deducting TDS, and the gain on sale is taxed as capital gains, with a non-resident getting relief under the relevant DTAA on the India-taxed portion. For the full computation, including residency, the perquisite, capital gains and treaty relief, see our dedicated ESOP tax page for NRI and non-resident employees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does it matter if the employee is an NRI, OCI or foreign national?</h3>
                        <div class="faq-expanded__a"><p>For the FEMA framework, what matters is that the person is resident outside India, so the issuance is a foreign investment and the Form ESOP reporting applies, whether the employee is an NRI, an OCI or a foreign national. There can be differences in account types and repatriation, for example NRE versus NRO routing, and in the tax and treaty position by country. We tailor the structuring and the repatriation set-up to the specific status.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Allowed?</strong> Yes, non-resident employees qualify.</li>
                    <li><strong>Regime?</strong> NDI Rules 2019, Schedule I.</li>
                    <li><strong>Reporting?</strong> Form ESOP within 30 days, via FIRMS.</li>
                    <li><strong>Pricing?</strong> Not below fair value, CA or MB certified.</li>
                    <li><strong>At sale?</strong> Repatriate through NRE or NRO.</li>
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
                
                <p>The Form ESOP deadline is just 30 days from the grant, and it is the step employers most often miss, building up late submission fees and a FEMA exposure that surfaces in the next audit or fundraise. The fair-value certificate and the repatriation basis also need to be in place at the grant, not retrofitted later. Set the FEMA workflow up before you grant to your NRI team, so the equity is compliant from day one.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Give Your Global Team Equity, Compliantly</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">Giving your NRI and non-resident employees equity is straightforward in principle, they qualify like any employee, but the moment shares cross to a non-resident, FEMA and RBI reporting apply, with a 30-day Form ESOP deadline, fair-value pricing and repatriation to manage.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of FEMA and ESOP experience, runs the employer side end to end and coordinates with the tax workstream, so your global team gets its equity cleanly and compliantly.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20for%20NRI%20Employees%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP for NRI Employees%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20for%20NRI%20Employees%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NRI-Employee ESOP Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote FEMA structuring, Form ESOP reporting and repatriation set-up for global teams.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We serve Indian companies with global teams nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The eligibility check, FEMA structuring, Form ESOP reporting and repatriation set-up is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for non-resident employee equity</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/fdi-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/issue-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-esop-employees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for ESOP Employees</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every six months for changes to the NDI Rules 2019 or the Mode of Payment and Reporting Regulations, Form ESOP format or deadlines, FIRMS portal procedures, FEMA pricing or repatriation rules, and Rule 12 eligibility (Tier 2 freshness).</p>
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
