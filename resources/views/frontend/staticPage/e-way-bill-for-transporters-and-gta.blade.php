@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>E-Way Bill Transporters and GTA 2026 | Patron Accounting</title>
    <meta name="description" content="E-way bill compliance for transporters and GTA - TRANSIN, Part B updates, consolidated EWB-02, RCM and FCM. Patron from Rs 4,999 per engagement.">
    <link rel="canonical" href="/e-way-bill-for-transporters-and-gta">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="E-Way Bill Transporters and GTA 2026 | Patron Accounting">
    <meta property="og:description" content="E-way bill compliance for transporters and GTA - TRANSIN, Part B updates, consolidated EWB-02, RCM and FCM. Patron from Rs 4,999 per engagement.">
    <meta property="og:url" content="/e-way-bill-for-transporters-and-gta">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="E-Way Bill Transporters and GTA 2026 | Patron Accounting">
    <meta name="twitter:description" content="E-way bill compliance for transporters and GTA - TRANSIN, Part B updates, consolidated EWB-02, RCM and FCM. Patron from Rs 4,999 per engagement.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/e-way-bill-for-transporters-and-gta/#service",
        "name": "E-Way Bill for Transporters and Goods Transport Agencies in India",
        "description": "Comprehensive transporter and Goods Transport Agency e-way bill compliance service under Rule 138 of the CGST Rules 2017 covering TRANSIN enrolment for unregistered transporters, GTA registration and tax treatment decision under Section 9(3) of the CGST Act (5 percent RCM default) versus Forward Charge Mechanism (5 percent without ITC or 18 percent with ITC via Annexure V annual election by 15 March), Annexure III invoice declaration discipline, Rule 138(3) transporter obligation, consolidated EWB generation in Form GST EWB-02 under Rule 138(6), Rule 138A documents carriage compliance, Form GST EWB-04 detention upload under Rule 138D, and Section 129 detention defence, starting from INR 4,999 per engagement.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/e-way-bill-for-transporters-and-gta" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Transporter and GTA E-Way Bill Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "TRANSIN Enrolment",
                    "priceCurrency": "INR",
                    "price": "4999",
                    "description": "Single state enrolment, portal access, multi-state extension"
                },
                {
                    "@type": "Offer",
                    "name": "GTA RCM/FCM Strategy Memo",
                    "priceCurrency": "INR",
                    "price": "9999",
                    "description": "Customer-mix analysis, RCM vs FCM decision, Annexure filing"
                },
                {
                    "@type": "Offer",
                    "name": "Monthly Operational Retainer",
                    "priceCurrency": "INR",
                    "price": "4999",
                    "description": "EWB monitoring, EWB-02 generation, customer-master maintenance (per fleet, per month)"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/e-way-bill-for-transporters-and-gta/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "GST Services", "item": "https://www.patronaccounting.com/gst-services" },
            { "@type": "ListItem", "position": 3, "name": "Transporter and GTA E-Way Bill", "item": "https://www.patronaccounting.com/e-way-bill-for-transporters-and-gta" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/e-way-bill-for-transporters-and-gta/#faq",
        "datePublished": "2026-05-27T08:00:00+05:30",
        "dateModified": "2026-06-01T08:00:00+05:30",
        "mainEntity": [

            {
                "@type": "Question",
                "name": "What is a Goods Transport Agency (GTA) under GST?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A Goods Transport Agency is defined under Notification 11/2017-Central Tax (Rate) as any person who provides services in relation to transport of goods by road AND issues a consignment note. The issuance of a consignment note is the mandatory differentiating feature - individual truck or tempo operators who do not issue consignment notes are NOT GTAs and remain exempt from GST. GTA services fall under SAC code 9965 and are taxed at 5 percent under either Reverse Charge Mechanism (RCM under Section 9(3)) or Forward Charge Mechanism (FCM at 5 percent without ITC or 18 percent with ITC, elected via Annexure V)."
                }
            },
            {
                "@type": "Question",
                "name": "What is TRANSIN and how is it obtained?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "TRANSIN is a 15-digit Transporter ID generated for unregistered transporters or transporters who do not have an active GSTIN through the e-way bill portal enrolment facility at ewaybillgst.gov.in. The transporter selects the Enrolment for Transporters option, enters PAN, name, address, contact, and business type, completes OTP verification on the registered mobile, and receives the TRANSIN. The TRANSIN is used in Part B of the e-way bill in place of the GSTIN. Multi-state operations require enrolment in each operating state."
                }
            },
            {
                "@type": "Question",
                "name": "When does a transporter need to generate the e-way bill?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Rule 138(3) of the CGST Rules, if neither the registered shipper nor the registered consignee has generated the e-way bill before handing over goods to the transporter, the transporter is legally required to generate it based on the invoice or delivery challan provided. This creates direct transporter accountability - the failure to generate exposes the transporter to Section 129 detention even if the shipper raised a correct invoice. Patron operations runbook tests every incoming consignment for EWB existence and triggers immediate generation if needed."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between RCM and FCM for GTA services?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Reverse Charge Mechanism (RCM) is the default treatment under Section 9(3) of the CGST Act - the recipient of GTA service (factory, body corporate, partnership firm, AOP/BOI, society, cooperative society, registered casual taxable person) pays 5 percent GST in cash without ITC to the GTA. Forward Charge Mechanism (FCM) is the GTA-elected alternative where the GTA itself collects and pays GST at 5 percent (no ITC on inputs) or 18 percent (full ITC on inputs). FCM is elected annually via Annexure V filed by 15 March for the next FY."
                }
            },
            {
                "@type": "Question",
                "name": "How does a GTA elect Forward Charge?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A GTA wanting to be taxed under Forward Charge files Annexure V on the GST portal by 15 March of the preceding financial year - the election applies for the full next FY. New GTAs can file Annexure V within 45 days of GST registration or 1 month of obtaining registration, whichever is later. Once filed, the GTA must include Annexure III declaration on every tax invoice. Annexure VI is filed to withdraw FCM and revert to RCM."
                }
            },
            {
                "@type": "Question",
                "name": "What is a Consolidated E-Way Bill and who generates it?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A consolidated e-way bill in Form GST EWB-02 is generated by the transporter under Rule 138(6) when a single vehicle is carrying multiple consignments, each with its own individual EBN. The transporter logs into the portal before vehicle departure, indicates the serial numbers of individual EBNs being carried, and generates the EWB-02 document. The consolidated bill is for inspection convenience at roadside checks - individual EBNs remain the primary compliance records. Driver carries both the EWB-02 and the individual EBN copies."
                }
            },
            {
                "@type": "Question",
                "name": "Are GTAs required to issue e-invoices under Rule 48(4)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. GTAs are exempt from e-invoicing under Rule 48(4) per Notification 13/2020-Central Tax. However, GTAs with aggregate turnover above the e-invoicing threshold (currently Rs 5 crore) must furnish a self-declaration on every tax invoice stating that they are not required to prepare an e-invoice under Rule 48(4) despite crossing the threshold. The declaration format was prescribed via Notification 14/2022 dated 5 July 2022. This exemption does not extend to e-way bill obligations under Rule 138 - GTAs must continue full EWB compliance."
                }
            }
        ]
    }
    </script>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-8.css') }}?v=1">
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
                        E-Way Bill for Transporters and Goods Transport Agencies in 2026
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> GSTIN or TRANSIN (15-digit Transporter ID), consignment notes, vehicle fleet list, customer master with RCM/FCM categorisation, and Annexure V declaration if FCM opted.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 4,999 (Exl GST and Govt. Charges) per engagement for transporter or GTA setup.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Goods Transport Agencies issuing consignment notes, unregistered transporters needing TRANSIN, fleet operators, logistics aggregators, and courier companies.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5-10 working days for TRANSIN enrolment, FCM election (Annexure V), consolidated EWB-02 workflow setup, and detention defence SOP.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Transporter EWBs Generated | 100+ GTAs Compliant with RCM and FCM Frameworks</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Transporter and GTA E-Way Bill%20Services&body=Hello%2C%20I%20just%20visited%20your%20Transporter%20and%20GTA%20E-Way%20Bill%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Transporter%20and%20GTA%20E-Way%20Bill%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Transporter and GTA E-Way Bill',
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
            <!-- TOC_NAVIGATION_ITEMS PATTERN - use class "toc-btn" (NOT "toc-pill"); the CSS (.toc-btn) and scroll-spy JS (querySelectorAll('.toc-btn')) both target this exact class. First item gets "toc-btn active". One button per content section, in document order. Pattern:
                <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
                <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
                (repeat for who-section, services-section, procedure-section, documents-section, challenges-section, fees-section, timeline-section, benefits-section, comparison-section, faq-section)
            -->
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Bears It</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Comparison</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Transporter and GTA E-Way Bill Compliance at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Transporter and GTA E-Way Bill Services at a Glance</strong></p>
                    <p>A Goods Transport Agency (GTA) under Notification 11/2017-CT(R) is any person providing road transport of goods AND issuing a consignment note - the consignment note is the defining feature. Individual truck and tempo operators without consignment notes are NOT GTAs and remain GST-exempt. GTAs choose annually between 5 percent RCM (default - recipient pays under Section 9(3)) and forward charge (5 percent without ITC or 18 percent with ITC) via Annexure V declaration. Transporters bear independent e-way bill obligations under Rule 138(3) - they must generate the EWB if neither shipper nor consignee has done so. Unregistered transporters obtain a 15-digit TRANSIN through portal enrolment. Consolidated EWB in Form GST EWB-02 under Rule 138(6) is the transporter responsibility for multi-consignment vehicles. GTAs are exempt from e-invoicing under Rule 48(4) but must furnish a self-declaration. Patron engagement at Rs 4,999.</p>
                </div>
                <p>Transporters and Goods Transport Agencies sit at the operational frontline of e-way bill compliance - they are the entities physically moving the goods, interacting with proper officers at checkpoints, updating Part B at each transhipment, and bearing primary responsibility under Rule 138(3) when the shipper or consignee fails to generate an EWB. Layered on top is the GTA-specific tax-treatment question - RCM (5 percent under Section 9(3) with recipient paying) or FCM (5 percent or 18 percent with the GTA paying directly via Annexure V election).</p>
                <p>The two layers - EWB compliance and GTA tax treatment - cannot be managed separately, since the RCM/FCM choice affects every consignment note issued, every tax invoice raised, and every monthly GSTR-1 and GSTR-3B filing. With 10,000+ Indian businesses served, 50,000+ transporter e-way bills generated, and 100+ GTAs operating compliant RCM and FCM frameworks across the active client base, Patron Accounting LLP runs the full transporter-side stack - TRANSIN enrolment, Rule 138(3) compliance, consolidated EWB-02 generation, RCM and FCM optimisation, Annexure V annual filing, detention defence, and ongoing GSTR returns.</p>
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
                <h2 class="section-title">What Is E-Way Bill Compliance for Transporters and GTAs?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>E-way bill compliance for transporters and Goods Transport Agencies covers the entity-side of GST logistics - the operator moving the goods rather than the shipper dispatching them. A GTA is defined under Notification 11/2017-Central Tax (Rate) as any person who provides services of transport of goods by road AND issues a consignment note.</p>
                    <p>The consignment note is the differentiating feature - individual truck or tempo operators who do not issue consignment notes are NOT GTAs and remain exempt from GST. Transporters operate under SAC code 9965. The tax treatment is twofold - 5 percent RCM (default) where the recipient pays GST under Section 9(3) of the CGST Act, or forward charge (5 percent without ITC or 18 percent with full ITC) where the GTA pays directly, via annual election filed in Annexure V.</p>
                    <p>On the e-way bill side, transporters carry independent obligations under Rule 138(3) - they must generate the EWB if neither the shipper nor consignee has done so. Unregistered transporters obtain a 15-digit TRANSIN through portal enrolment. Consolidated EWB in Form GST EWB-02 under Rule 138(6) is the transporter responsibility when one vehicle carries multiple consignments. GTAs are exempt from e-invoicing under Rule 48(4) but must furnish a self-declaration to that effect.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Transporter and GTA E-Way Bill:</strong></p>
                    <ul>
                        <li><strong>Goods Transport Agency (GTA):</strong> Per Notification 11/2017-CT(R), any person who provides service in relation to transport of goods by road AND issues a consignment note. Issuance of a consignment note is the mandatory differentiator - a transporter not issuing consignment notes is NOT a GTA and remains GST-exempt.</li>
                        <li><strong>Consignment Note:</strong> Document issued by the GTA acknowledging receipt of goods for transport, containing serial number, consignor and consignee names, GSTINs, vehicle registration number, place of origin and destination, person liable to pay GST, and goods details. Its issuance is the GTA-defining act.</li>
                        <li><strong>SAC 9965:</strong> Service Accounting Code for Goods Transport Services - covers road transport of goods by a GTA and ancillary loading, unloading, and packing that is part of the transport contract.</li>
                        <li><strong>TRANSIN (Transporter ID):</strong> 15-digit unique Transporter ID generated for unregistered transporters through the e-way bill portal enrolment facility. Used in Part B of the e-way bill in place of the GSTIN.</li>
                        <li><strong>RCM (Section 9(3)):</strong> Default treatment for GTA services at 5 percent - the recipient (factory, body corporate, partnership firm, AOP/BOI, society, cooperative society, registered casual taxable person) pays the GST in cash; the GTA does not collect or pay.</li>
                        <li><strong>FCM (Forward Charge Mechanism):</strong> GTA-elected treatment where the GTA collects and pays GST directly - 5 percent without ITC OR 18 percent with full ITC. Election is annual via Annexure V by 15 March for the next FY.</li>
                        <li><strong>Annexure V:</strong> Declaration filed on the GST portal to opt into Forward Charge for the next FY. New GTAs can file within 45 days of registration or 1 month of obtaining registration, whichever is later.</li>
                        <li><strong>Annexure VI:</strong> Declaration filed on the GST portal to withdraw from Forward Charge and revert to RCM, effective from the next FY.</li>
                        <li><strong>Annexure III:</strong> Invoice-level declaration that the GTA has opted for Forward Charge - mandatory on every invoice issued under FCM.</li>
                        <li><strong>Rule 138(3) Transporter Obligation:</strong> If neither the registered consignor nor consignee has generated the e-way bill, the transporter must generate it based on the invoice or delivery challan provided.</li>
                        <li><strong>Rule 138(6) Consolidated EWB:</strong> When one vehicle carries multiple consignments with individual EBNs, the transporter generates a consolidated e-way bill in Form GST EWB-02.</li>
                        <li><strong>Rule 138A Documents Carried:</strong> The person in charge of the conveyance must carry the e-way bill (printed or electronic) plus the invoice, bill of supply, or delivery challan during the entire movement.</li>
                        <li><strong>Form GST EWB-03:</strong> Verification report issued by the proper officer who intercepts and inspects goods in transit, recorded within 3 days under Rule 138C.</li>
                        <li><strong>Form GST EWB-04:</strong> Detention information uploaded to the common portal under Rule 138D if a vehicle is detained for more than 30 minutes.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Transporter and GTA E-Way Bill</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GTA Defining Test</span>
                        <strong>Issues Consignment Note</strong>
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
            <h2 class="section-title">Who Bears Transporter-Side Compliance</h2>
            <div class="content-text">
                
                <p>Transporter and GTA-side compliance applies to every entity providing road transport services - whether registered with a GSTIN or operating as an unregistered transporter under TRANSIN. The obligations differ based on whether the entity issues consignment notes (GTA status), the chosen tax treatment (RCM or FCM), and the registration status.</p>
                <h3 style="margin-top:24px;">Entity Types Covered</h3>
                <ul>
                    <li>Goods Transport Agencies (GTAs) - issuing consignment notes, registered under GST</li>
                    <li>Unregistered transporters - using TRANSIN for portal access, no consignment notes typically</li>
                    <li>Fleet operators with mixed GTA and non-GTA operations</li>
                    <li>Logistics aggregators and consolidators running multi-shipper vehicles</li>
                    <li>Courier and parcel companies (some classify as GTA when consignment notes are issued)</li>
                    <li>Cold chain and specialised transporters with refrigerated, ODC, or hazardous cargo</li>
                    <li>Inter-state long-haul truckers</li>
                    <li>Last-mile delivery operators serving e-commerce platforms</li>
                </ul>
                <h3 style="margin-top:24px;">GTA Service Recipient Categories (Affects RCM/FCM Split)</h3>
                <ul>
                    <li>Body corporates (RCM applies under Section 9(3))</li>
                    <li>Factories registered under the Factories Act 1948 (RCM applies)</li>
                    <li>Societies registered under the Societies Registration Act (RCM applies)</li>
                    <li>Cooperative societies (RCM applies)</li>
                    <li>Partnership firms including LLPs (RCM applies)</li>
                    <li>Registered AOP/BOI (RCM applies)</li>
                    <li>Casual taxable persons (RCM applies)</li>
                    <li>Government departments registered only for TDS (exempt under Notification 12/2017-CT(R))</li>
                    <li>Unregistered persons (exempt below the RCM threshold; loses exemption above)</li>
                </ul>
                <h3 style="margin-top:24px;">GTA Exemptions Under Notification 12/2017-CT(R)</h3>
                <ul>
                    <li>Transport of agricultural produce</li>
                    <li>Transport of milk, salt, and food grains (rice, flour, pulses)</li>
                    <li>Transport of organic manure</li>
                    <li>Transport of newspapers or magazines registered with the Registrar of Newspapers</li>
                    <li>Transport of relief materials for victims of natural or man-made disasters</li>
                    <li>Transport of defence or military equipment</li>
                    <li>Single consignment value below Rs 750 in a single carriage</li>
                    <li>Total fare in a goods carriage below Rs 1,500</li>
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
            <h2 class="section-title">Patron Accounting Services for Transporters and GTAs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>TRANSIN Enrolment and Portal Access</td><td>For unregistered transporters - end-to-end TRANSIN enrolment on ewaybillgst.gov.in including PAN-based application, address verification, mobile-OTP authentication, and access setup. Multi-state transporters enrolled across all operating states.</td></tr>
                        <tr><td>GTA Registration and RCM vs FCM Decision Framework</td><td>For new GTAs - Section 22 threshold test, Section 24 compulsory registration assessment, GST registration filing. Strategic RCM vs FCM analysis based on customer mix, ITC optimisation, and cash flow impact. Annexure V or VI filing.</td></tr>
                        <tr><td>Consolidated EWB-02 Daily Generation Workflow</td><td>For transporters running multi-consignment vehicles - a daily SOP for Form GST EWB-02 generation under Rule 138(6) before vehicle departure. Individual EBN collection, validation, consolidated bill issuance, driver documentation, and inspection-readiness.</td></tr>
                        <tr><td>Annual FCM Election and Annexure Management</td><td>Annexure V filing for FCM election (by 15 March for next FY or within 45 days of new registration); Annexure VI for FCM withdrawal; Annexure III declaration on every FCM invoice. Yearly review of customer mix to validate FCM vs RCM optimality.</td></tr>
                        <tr><td>Detention Defence Under Section 129 and Form EWB-04</td><td>Real-time response when a vehicle is intercepted - Form MOV-02 inspection rebuttal with Rule 138A documents, EWB-04 detention upload within the 30-minute window, MOV-09 payment route or Section 107 appeal. Recovery of detained vehicles within statutory timelines.</td></tr>
                        <tr><td>Bridge to GTA-Specific GST Returns</td><td>Comprehensive GST return filing for GTAs - GSTR-1 outward supplies with consignment note details, GSTR-3B tax computation under RCM or FCM, GSTR-9 annual reconciliation, and ITC apportionment for FCM at 5 percent (no ITC) vs 18 percent (with ITC).</td></tr>

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
            <h2 class="section-title">How Transporter and GTA Compliance Works - Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From GTA status testing and TRANSIN enrolment to detention defence, here is exactly how Patron Accounting runs transporter and GTA e-way bill compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">GTA Status Test and Registration Path</h3>
                    <p class="step-description">For new transporters - test whether consignment notes are issued (defines GTA status). For GTAs - the Section 22 threshold (Rs 20 lakh / Rs 10 lakh) test for compulsory registration; Section 24 if any other taxable supplies. For non-GTA transporters - GST exempt; only TRANSIN needed for EWB participation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Status tested</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Path chosen</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="28" y="12" width="64" height="76" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="38" y1="28" x2="82" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="38" y1="42" x2="78" y2="42" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="38" y1="54" x2="78" y2="54" stroke="#14365F" stroke-width="2" opacity="0.3"/><text x="60" y="76" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CN</text></svg></div>
                        <span class="illustration-label">GTA Test</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">TRANSIN Enrolment (Unregistered Transporters)</h3>
                    <p class="step-description">Login to ewaybillgst.gov.in, select Enrolment for Transporters, enter PAN, name, address, contact, and business type. OTP verification on the registered mobile. The portal generates a 15-digit TRANSIN. Multi-state operations require enrolment in each operating state.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TRANSIN issued</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="26" width="84" height="48" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="38" cy="50" r="9" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><line x1="56" y1="44" x2="92" y2="44" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="56" y1="54" x2="84" y2="54" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">TRANSIN</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">RCM vs FCM Strategic Decision</h3>
                    <p class="step-description">For GTAs - analyse the customer mix. If most customers are RCM-eligible (factories, body corporates, partnership firms), default RCM is operationally simpler. If significant unregistered customers or ITC-heavy operations, FCM at 5 percent or 18 percent may optimise overall economics.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mix analysed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Treatment set</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 18v60M36 78h48" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><path d="M60 26L34 40m26-14l26 14" stroke="#14365F" stroke-width="1.5"/><path d="M22 40h24l-12 18z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M74 40h24l-12 18z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><circle cx="60" cy="18" r="4" fill="#E8712C"/></svg></div>
                        <span class="illustration-label">RCM vs FCM</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">FCM Election Filing (Annexure V)</h3>
                    <p class="step-description">If FCM is chosen - file Annexure V on the GST portal by 15 March for the next FY. New GTAs file within 45 days of GST registration or 1 month of obtaining registration, whichever is later. Once filed, it applies for the full FY.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annexure V filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deadline met</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="60" height="72" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="36" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Ann V</text><circle cx="78" cy="64" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M72 64l4 4 8-8" stroke="#25D366" stroke-width="2.5" fill="none" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">FCM Election</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Invoice Declaration (Annexure III on FCM)</h3>
                    <p class="step-description">For every FCM invoice - include the Annexure III declaration confirming the GTA has opted to pay tax under forward charge from the relevant financial year. Without this declaration, the recipient may default to RCM treatment.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Declaration added</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No RCM default</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="28" y="14" width="64" height="72" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="38" y1="32" x2="82" y2="32" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="38" y1="44" x2="82" y2="44" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="44" y="56" width="32" height="18" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2" transform="rotate(-8 60 65)"/><text x="60" y="68" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial" transform="rotate(-8 60 65)">Ann III</text></svg></div>
                        <span class="illustration-label">Annexure III</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Daily EWB Generation Discipline (Rule 138(3))</h3>
                    <p class="step-description">For each consignment - if the shipper or consignee has generated the EWB, the transporter receives it and proceeds. If neither has done so, the transporter generates the EWB under Rule 138(3) based on the invoice or delivery challan provided.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EWB checked</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Gap filled</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="26" y="18" width="68" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M40 34h40M40 46h28" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="84" cy="68" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M84 62v12M78 68h12" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Rule 138(3)</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Consolidated EWB-02 Pre-Departure</h3>
                    <p class="step-description">Before vehicle departure carrying multiple consignments - login to the portal, select Consolidated EWB, indicate the serial numbers of individual EBNs being carried. Generate the EWB-02 document and hand a printed copy to the driver alongside individual EBN copies.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EBNs indicated</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EWB-02 ready</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="22" width="18" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="18" y="42" width="18" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="18" y="62" width="18" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M40 49h14" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><rect x="58" y="38" width="44" height="24" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="80" y="54" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EWB-02</text></svg></div>
                        <span class="illustration-label">Consolidated</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Driver Documentation Per Rule 138A</h3>
                    <p class="step-description">Driver pouch checklist - printed or electronic e-way bill (or RFID device for higher volumes), tax invoice or bill of supply or delivery challan per consignment, consignment notes (GTA), and the consolidated EWB-02 if applicable. All documents available throughout movement.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pouch ready</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs carried</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="24" width="60" height="58" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M44 24v-6a16 16 0 0132 0v6" stroke="#14365F" stroke-width="1.5" fill="none"/><line x1="42" y1="44" x2="78" y2="44" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="42" y1="56" x2="70" y2="56" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div>
                        <span class="illustration-label">Rule 138A</span>
                        <span class="step-number-large">08</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 9</span>
                    <h3 class="step-title">Multi-Vehicle Part B Updates (If Transhipment)</h3>
                    <p class="step-description">For transhipment routes - update Part B on the portal at each vehicle change before goods resume movement. Exception: less than 10 km same state under Rule 138(3) - no Part B update. Real-time portal monitoring at each handover point.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Part B updated</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10-km checked</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="14" y="40" width="36" height="26" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="70" y="40" width="36" height="26" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M52 48h16M68 44l-6 4 6 4M68 58H52M52 62l6-4-6-4" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Transhipment</span>
                        <span class="step-number-large">09</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 10</span>
                    <h3 class="step-title">Detention Response and EWB-04 Upload</h3>
                    <p class="step-description">If a vehicle is intercepted under Section 68 - immediate compliance response with Rule 138A documents and a MOV-02 inspection rebuttal. If detained for more than 30 minutes, file Form GST EWB-04 on the portal under Rule 138D. Payment under MOV-09 or appeal under Section 107.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MOV-02 filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EWB-04 uploaded</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 14l30 10v22c0 18-13 30-30 38-17-8-30-20-30-38V24z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l9 9 18-20" stroke="#25D366" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <span class="illustration-label">Detention</span>
                        <span class="step-number-large">10</span>
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
            <h2 class="section-title">Documents and Data Checklist</h2>
            <div class="content-text">
                
                <p>Have these inputs ready for transporter and GTA e-way bill compliance:</p>
                <ul>
                    <li>GSTIN (for registered GTAs) or PAN for TRANSIN enrolment</li>
                    <li>Fleet vehicle registration numbers and capacity details</li>
                    <li>Consignment note template per company branding</li>
                    <li>Customer master with GSTINs and RCM/FCM categorisation</li>
                    <li>Annexure V (FCM election) or Annexure VI (FCM withdrawal) if applicable</li>
                    <li>Annexure III declaration text for invoices</li>
                    <li>Driver training materials on Rule 138A documents to carry</li>
                    <li>Operations team SOP for daily EWB and EWB-02 generation</li>
                    <li>Portal credentials for ewaybillgst.gov.in (and backup ewaybill2.gst.gov.in)</li>
                    <li>2FA mobile number registered on the portal (mandatory since early 2025)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Rule 138(3) Trigger - Transporter Liable When Shipper Skips</td><td>Many transporters assume the e-way bill is solely the shipper's responsibility. Under Rule 138(3), if the shipper or consignee has not generated an EWB and the goods are above threshold, the transporter must. Failure exposes the transporter to Section 129 detention even if the invoice was correct.</td><td>Daily intake checklist for the transporter operations team - every consignment received is tested for EWB existence; if missing and above threshold, the transporter generates immediately based on invoice details. Across 50,000+ transporter EWBs, zero Rule 138(3) trigger detentions.</td></tr>
                        <tr><td>FCM Annexure V Filing Window Missed</td><td>GTAs wanting to switch to FCM for the next FY must file Annexure V by 15 March of the preceding year. The window is rigid - missing it locks the GTA into RCM for the full year. New GTAs have 45 days from registration or 1 month from obtaining registration, whichever is later.</td><td>Annual FCM strategy review in January-February each year with customer-mix analysis - if FCM is optimal, Annexure V is filed in February, well before the 15 March deadline. For new GTAs, a registration-day countdown to the 45-day deadline. Zero missed Annexure V incidents.</td></tr>
                        <tr><td>Annexure III Declaration Missing on FCM Invoices</td><td>GTAs who have opted FCM via Annexure V must include the Annexure III declaration on every tax invoice. Without it, recipients may default to RCM, causing payment confusion, ITC reconciliation issues, and disputes over who paid the tax. Repeated occurrence triggers Section 61 scrutiny.</td><td>Invoice template configured with the Annexure III declaration as mandatory non-removable text. Monthly invoice register audit catches any missed declarations. Customer education on FCM-vs-RCM treatment to align recipient-side ITC claims.</td></tr>
                        <tr><td>Consolidated EWB-02 Skipped by Transporter Driver</td><td>Daily multi-consignment vehicles often depart with only individual EBNs because the driver or dispatch clerk skips the EWB-02 step. At roadside inspection, the lack of a consolidated bill confuses the proper officer even when individual EBNs are valid. Detention follows.</td><td>Daily pre-departure SOP for the dispatch clerk - individual EBNs collected from all shippers, EWB-02 generated on the portal, printed and handed to the driver alongside individual EBN copies. Operations training and monthly audit verify 100 percent EWB-02 compliance.</td></tr>

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
            <h2 class="section-title">Transporter and GTA Compliance Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges) - per engagement for setup</td></tr>
                        <tr><td>TRANSIN Enrolment</td><td>INR 4,999 one-time - single state enrolment, portal access, multi-state extension</td></tr>
                        <tr><td>GTA RCM/FCM Strategy Memo</td><td>INR 9,999 one-time - customer-mix analysis, RCM vs FCM decision, Annexure filing</td></tr>
                        <tr><td>Annual FCM Annexure V or VI Filing</td><td>INR 2,999 per year - annual FCM election or withdrawal on portal</td></tr>
                        <tr><td>Consolidated EWB-02 Workflow</td><td>INR 4,999/mo - daily SOP, operations team training, monthly compliance audit</td></tr>
                        <tr><td>Driver and Operations Training</td><td>INR 9,999 one-time - Rule 138A driver pouch, MOV detention response, EWB-04 upload</td></tr>
                        <tr><td>Detention Defence</td><td>INR 14,999 per incident - per intercepted vehicle, MOV-02 response, MOV-09 filing, Section 107 appeal</td></tr>
                        <tr><td>Monthly Operational Retainer</td><td>INR 4,999/mo per fleet - EWB monitoring, EWB-02 generation, customer-master maintenance</td></tr>
                        <tr><td>Section 129 Penalty and Consignment Tax</td><td>Billed separately at actuals - government portal fees are nil</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Transporter and GTA E-Way Bill consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Transporter%20and%20GTA%20E-Way%20Bill%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for Transporter and GTA Activities</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>TRANSIN enrolment on portal</td><td>1-2 days (one-time per state)</td></tr>
                        <tr><td>GTA registration under GST</td><td>5-7 days (on crossing Section 22 threshold or Section 24 trigger)</td></tr>
                        <tr><td>Annexure V FCM election filing</td><td>1 day (by 15 March for next FY; or 45 days for new GTA)</td></tr>
                        <tr><td>Consolidated EWB-02 daily generation</td><td>5-10 minutes (pre-departure, every day)</td></tr>
                        <tr><td>Driver pouch documentation setup</td><td>15-30 minutes per vehicle (pre-departure)</td></tr>
                        <tr><td>MOV-02 detention response</td><td>4-6 hours (within 7 days of MOV-07 notice)</td></tr>
                        <tr><td>Form GST EWB-04 detention upload</td><td>15-30 minutes (within 30 minutes of detention notice)</td></tr>
                        <tr><td>MOV-09 payment and vehicle release</td><td>24-48 hours (on payment of tax and penalty)</td></tr>
                        <tr><td>Section 107 appeal filing</td><td>15-30 days (3 months from MOV-09 order)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Day-to-day activities (EWB generation, EWB-02, driver checklist) close in minutes to hours.</strong> Strategic decisions (FCM election, registration) are annual or one-time. Detention defence is incident-based.</p>

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
            <h2 class="section-title">Benefits of Professional Transporter and GTA Compliance</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><path d="M16 8h4l3 3v5h-7zM5.5 21a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM18.5 21a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"/></svg></div>
                <h3 class="feature-title">Rule 138(3) Trigger Managed</h3>
                <p class="feature-desc">Zero independent transporter detentions - every consignment is tested for EWB existence at intake.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><circle cx="8" cy="12" r="2"/><path d="M13 10h6M13 14h4"/></svg></div>
                <h3 class="feature-title">TRANSIN Enrolment Done</h3>
                <p class="feature-desc">Unregistered transporters participate fully in the EWB system with a valid 15-digit TRANSIN.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18M5 21h14M6 7l-3 7h6zM18 7l-3 7h6zM6 7l6-2 6 2"/></svg></div>
                <h3 class="feature-title">RCM vs FCM Optimised</h3>
                <p class="feature-desc">The strategic tax choice is optimised on customer mix and ITC economics, not guesswork.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
                <h3 class="feature-title">Annexure V Window Met</h3>
                <p class="feature-desc">The annual filing window is met every year - no FCM lockouts into RCM.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 22h14M12 2a3 3 0 013 3c0 2-2 3-2 5h-2c0-2-2-3-2-5a3 3 0 013-3zM7 22v-3a2 2 0 012-2h6a2 2 0 012 2v3"/></svg></div>
                <h3 class="feature-title">Annexure III on Every Invoice</h3>
                <p class="feature-desc">FCM invoices carry the declaration, preventing recipient ITC confusion and RCM defaults.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                <h3 class="feature-title">EWB-02 SOP in Place</h3>
                <p class="feature-desc">Daily consolidated EWB-02 generation eliminates roadside inspection confusion.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2h12l2 7H4zM4 9h16v11a2 2 0 01-2 2H6a2 2 0 01-2-2z"/></svg></div>
                <h3 class="feature-title">Driver Pouch Ready</h3>
                <p class="feature-desc">Rule 138A documents are always available for a smooth checkpoint experience.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Detention Response Disciplined</h3>
                <p class="feature-desc">EWB-04 upload within the 30-minute window and MOV responses within statutory timelines.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 18v-4a10 10 0 0120 0v4M2 14h20M7 14v4M17 14v4M12 14v4"/></svg></div>
                <h3 class="feature-title">Bridge to GTA Returns</h3>
                <p class="feature-desc">A clean handoff to comprehensive GTA GST returns for end-to-end compliance.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div>
                <h3 class="feature-title">Logistics-Specialist Team</h3>
                <p class="feature-desc">15+ years of GST and logistics practice with dedicated transporter and GTA expertise.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust Signals and Outcome Proof</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</strong></p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ Indian transporters, Goods Transport Agencies, fleet operators, logistics aggregators, courier companies, and cold-chain specialists running multi-state operations.</p>
                <p>Patron has generated 50,000+ transporter-side e-way bills across the active client base, set up 100+ GTAs with optimised RCM and FCM frameworks, and recorded zero Rule 138(3) transporter trigger detentions in the last 24 months. Annual Annexure V FCM elections filed at 100 percent on-time across all GTA clients, with an average MOV-02 detention response time of 4 hours from notice to vehicle release.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves transporters and GTAs across India - both in-person and remotely.</strong> See our <a href="https://www.patronaccounting.com/travel-and-logistics-accounting-services">travel and logistics accounting support in Mumbai</a> for local assistance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GTA vs Non-GTA Transporter</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>GTA (Consignment Note Issuer)</th><th>Non-GTA Transporter (No Consignment Note)</th></tr></thead>
                    <tbody>
                        <tr><td>Defining Test</td><td>Issues consignment note</td><td>Does not issue consignment note</td></tr>
                        <tr><td>Notification Reference</td><td>Notification 11/2017-CT(R)</td><td>Outside GTA scope - exempt</td></tr>
                        <tr><td>SAC Code</td><td>9965</td><td>N/A (exempt)</td></tr>
                        <tr><td>GST Applicability</td><td>5% RCM (default) or 5%/18% FCM (Annexure V)</td><td>Exempt - no GST</td></tr>
                        <tr><td>Recipient RCM Liability</td><td>Recipient pays under Section 9(3) if RCM</td><td>Not applicable</td></tr>
                        <tr><td>GST Registration</td><td>Required if FCM or above Section 22 threshold</td><td>Not required if exclusively transport</td></tr>
                        <tr><td>ITC for the Operator on Inputs</td><td>No ITC under 5% (RCM or FCM); full ITC under 18% FCM</td><td>No ITC (exempt)</td></tr>
                        <tr><td>Invoice Format</td><td>Tax invoice with Annexure III if FCM</td><td>Bill of supply or no formal invoice</td></tr>
                        <tr><td>Common Examples</td><td>Mahindra Logistics, TCI, Safexpress, VRL Logistics</td><td>Individual truck owners, small tempo operators</td></tr>
                        <tr><td>E-Way Bill Obligations</td><td>Rule 138(3) full applicability</td><td>Same Rule 138(3) applicability (TRANSIN required)</td></tr>

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
                
                <ul>
                    <li><a href="https://www.patronaccounting.com/gst-services">GST Services</a> - the complete GST services hub covering registration, returns, ITC, refunds, notices and audits.</li>
                    <li><a href="https://www.patronaccounting.com/gst-returns">GST Returns</a> - GSTR-1, GSTR-3B, and GSTR-9 for GTAs.</li>
                    <li><a href="https://www.patronaccounting.com/gst-audit">GST Audit</a> - Section 129 detention defence and Section 107 appeals.</li>
                    <li><a href="https://www.patronaccounting.com/gst-registration">GST Registration</a> - GTA registration under Section 22/24.</li>
                    <li><a href="https://www.patronaccounting.com/gst-annual-returns">GST Annual Returns</a> - GSTR-9 reconciliation for GTAs.</li>
                    <li><a href="https://www.patronaccounting.com/travel-and-logistics-accounting-services">Travel and Logistics Accounting Services</a> - industry-vertical accounting.</li>
                    <li><a href="https://www.patronaccounting.com/payroll-services-for-travel-and-logistics-industry">Payroll Services for Travel and Logistics Industry</a> - workforce payroll compliance.</li>
                </ul>
                <p style="margin-top:14px;">For dedicated GTA-specific GST return filing (GSTR-1 with consignment note details, GSTR-3B under RCM or FCM, GSTR-9 annual reconciliation, ITC apportionment), a dedicated GST Returns for Goods Transport Agency engagement is available on request.</p>

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
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Element</th><th>Provision</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Central Goods and Services Tax Act 2017 + CGST Rules 2017</td></tr>
                        <tr><td>GTA Definition</td><td>Notification 11/2017-Central Tax (Rate) - SAC 9965</td></tr>
                        <tr><td>RCM Authority</td><td>Section 9(3) CGST Act + Notification 13/2017-CT(R)</td></tr>
                        <tr><td>FCM Election</td><td>Annexure V - filed on GST portal by 15 March for next FY</td></tr>
                        <tr><td>FCM Withdrawal</td><td>Annexure VI - filed on GST portal</td></tr>
                        <tr><td>Invoice Declaration</td><td>Annexure III - mandatory on every FCM invoice</td></tr>
                        <tr><td>GTA Exemptions</td><td>Notification 12/2017-CT(R) - specified goods and recipients</td></tr>
                        <tr><td>Consignment Threshold</td><td>Rs 750 per consignment OR Rs 1,500 total fare per goods carriage</td></tr>
                        <tr><td>E-Invoicing Exemption</td><td>Rule 48(4) - GTAs exempt with self-declaration</td></tr>
                        <tr><td>E-Way Bill Authority</td><td>Section 68 CGST Act + Rule 138 CGST Rules</td></tr>
                        <tr><td>Transporter EWB Obligation</td><td>Rule 138(3) - generate if neither shipper nor consignee did</td></tr>
                        <tr><td>TRANSIN Enrolment</td><td>Rule 138(2A) - for unregistered transporters</td></tr>
                        <tr><td>Consolidated EWB</td><td>Rule 138(6) - Form GST EWB-02 by transporter</td></tr>
                        <tr><td>Documents Carried</td><td>Rule 138A - EWB + invoice or bill of supply or delivery challan</td></tr>
                        <tr><td>Verification / Inspection</td><td>Rule 138B (verification); Rule 138C - Form GST EWB-03 within 3 days</td></tr>
                        <tr><td>Detention Upload</td><td>Rule 138D - Form GST EWB-04 within 30 minutes of detention</td></tr>
                        <tr><td>Detention / Confiscation</td><td>Section 129 (MOV-01/02/07/09/06); Section 130 (confiscation on intent to evade)</td></tr>
                        <tr><td>Penalty</td><td>Section 129(1)(a) - 200% of tax payable; Section 122 - Rs 10,000 or tax</td></tr>
                        <tr><td>Appeal</td><td>Section 107 CGST Act - first appellate authority within 3 months</td></tr>
                        <tr><td>Authority</td><td>CBIC and NIC</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;"><strong>GTA RCM trigger:</strong> Section 9(3) of the CGST Act read with Notification 13/2017-CT(R) makes the recipient liable to pay 5 percent GST in cash when GTA service is provided to a specified category (body corporate, factory, partnership, AOP/BOI, society, cooperative society, registered casual taxable person).</p>
                <p style="margin-top:12px;"><strong>FCM alternative:</strong> A GTA can elect Forward Charge via Annexure V to be the tax payer - at 5 percent without ITC or 18 percent with full ITC. The election is annual and applies for the full FY.</p>
                <p style="margin-top:12px;">For comprehensive GTA-specific GST return filing (GSTR-1 with consignment note details, GSTR-3B under RCM or FCM, GSTR-9 annual reconciliation, and ITC apportionment), a dedicated GST Returns for Goods Transport Agency engagement is available.</p>
                <p style="margin-top:12px;">Authoritative references: <a href="https://www.indiacode.nic.in/handle/123456789/2104" target="_blank" rel="noopener">India Code - Section 9 and 68 CGST Act</a>, <a href="https://taxinformation.cbic.gov.in/" target="_blank" rel="noopener">CBIC Tax Information Portal (Rule 138)</a>, <a href="https://ewaybillgst.gov.in/" target="_blank" rel="noopener">E-Way Bill Portal</a>, <a href="https://ewaybill2.gst.gov.in/" target="_blank" rel="noopener">E-Way Bill 2.0 Backup Portal</a>, and <a href="https://cbic-gst.gov.in/notifications.html" target="_blank" rel="noopener">CBIC GST Notifications (11/2017, 12/2017, 13/2017)</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on GTA status, TRANSIN, Rule 138(3) transporter obligations, RCM vs FCM, Annexure V, consolidated EWB-02, and e-invoicing exemption.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Transporter and GTA E-Way Bill',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a Goods Transport Agency (GTA) under GST?</h3>
                        <div class="faq-expanded__a"><p>A Goods Transport Agency is defined under Notification 11/2017-Central Tax (Rate) as any person who provides services in relation to transport of goods by road AND issues a consignment note. The issuance of a consignment note is the mandatory differentiating feature - individual truck or tempo operators who do not issue consignment notes are NOT GTAs and remain exempt from GST. GTA services fall under SAC code 9965 and are taxed at 5 percent under either Reverse Charge Mechanism (RCM under Section 9(3)) or Forward Charge Mechanism (FCM at 5 percent without ITC or 18 percent with ITC, elected via Annexure V).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is TRANSIN and how is it obtained?</h3>
                        <div class="faq-expanded__a"><p>TRANSIN is a 15-digit Transporter ID generated for unregistered transporters or transporters who do not have an active GSTIN through the e-way bill portal enrolment facility at ewaybillgst.gov.in. The transporter selects the Enrolment for Transporters option, enters PAN, name, address, contact, and business type, completes OTP verification on the registered mobile, and receives the TRANSIN. The TRANSIN is used in Part B of the e-way bill in place of the GSTIN. Multi-state operations require enrolment in each operating state.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When does a transporter need to generate the e-way bill (Rule 138(3))?</h3>
                        <div class="faq-expanded__a"><p>Under Rule 138(3) of the CGST Rules, if neither the registered shipper nor the registered consignee has generated the e-way bill before handing over goods to the transporter, the transporter is legally required to generate it based on the invoice or delivery challan provided. This creates direct transporter accountability - the failure to generate exposes the transporter to Section 129 detention even if the shipper raised a correct invoice. Patron operations runbook tests every incoming consignment for EWB existence and triggers immediate generation if needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between RCM and FCM for GTA services?</h3>
                        <div class="faq-expanded__a"><p>Reverse Charge Mechanism (RCM) is the default treatment under Section 9(3) of the CGST Act - the recipient of GTA service (factory, body corporate, partnership firm, AOP/BOI, society, cooperative society, registered casual taxable person) pays 5 percent GST in cash without ITC to the GTA. Forward Charge Mechanism (FCM) is the GTA-elected alternative where the GTA itself collects and pays GST at 5 percent (no ITC on inputs) or 18 percent (full ITC on inputs). FCM is elected annually via Annexure V filed by 15 March for the next FY.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How does a GTA elect Forward Charge?</h3>
                        <div class="faq-expanded__a"><p>A GTA wanting to be taxed under Forward Charge files Annexure V on the GST portal by 15 March of the preceding financial year - the election applies for the full next FY. New GTAs can file Annexure V within 45 days of GST registration or 1 month of obtaining registration, whichever is later. Once filed, the GTA must include the Annexure III declaration on every tax invoice - confirming it has exercised the option to pay tax on GTA services under forward charge. Annexure VI is filed to withdraw FCM and revert to RCM.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is a Consolidated E-Way Bill and who generates it?</h3>
                        <div class="faq-expanded__a"><p>A consolidated e-way bill in Form GST EWB-02 is generated by the transporter under Rule 138(6) when a single vehicle is carrying multiple consignments, each with its own individual EBN. The transporter logs into the portal before vehicle departure, indicates the serial numbers of individual EBNs being carried, and generates the EWB-02 document. The consolidated bill is for inspection convenience at roadside checks - individual EBNs remain the primary compliance records. Driver carries both the EWB-02 and the individual EBN copies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Are GTAs required to issue e-invoices under Rule 48(4)?</h3>
                        <div class="faq-expanded__a"><p>No. GTAs are exempt from e-invoicing under Rule 48(4) per Notification 13/2020-Central Tax. However, GTAs with aggregate turnover above the e-invoicing threshold (currently Rs 5 crore) must furnish a self-declaration on every tax invoice stating that they are not required to prepare an e-invoice under Rule 48(4) despite crossing the threshold. The declaration format was prescribed via Notification 14/2022 dated 5 July 2022. This exemption does not extend to e-way bill obligations under Rule 138 - GTAs must continue full EWB compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">GTA aur transporter ka e-way bill compliance mein kya farak hai?</h3>
                        <div class="faq-expanded__a"><p>GTA ka matlab hai woh transporter jo consignment note issue karta hai (Notification 11/2017-CT(R) ke under). Bina consignment note wale truck/tempo operators GST exempt hain. GTA par 5 percent GST lagta hai - default RCM ke under (recipient bharta hai under Section 9(3)) ya FCM ke under (GTA khud bharta hai 5% bina ITC ya 18% full ITC ke saath, Annexure V dene par). E-way bill ke side mein - har transporter (GTA ya non-GTA) Rule 138(3) ke under EWB generate karna hota hai agar shipper ya consignee ne nahi banayi. Unregistered transporters ke liye TRANSIN (15-digit ID) portal se milti hai. Multi-consignment vehicle ke liye transporter Form GST EWB-02 (Consolidated EWB) generate karta hai Rule 138(6) ke under. Patron monthly retainer Rs 4,999 se start.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>GTA Test:</strong> Issues consignment note (Notification 11/2017-CT(R)); SAC 9965.</li>
                    <li><strong>Non-GTA Treatment:</strong> No consignment note - exempt from GST.</li>
                    <li><strong>Default Tax:</strong> 5% RCM under Section 9(3) - recipient pays.</li>
                    <li><strong>FCM Option:</strong> 5% (no ITC) or 18% (full ITC) - Annexure V.</li>
                    <li><strong>FCM Election Deadline:</strong> 15 March for next FY; or 45 days for new GTA.</li>
                    <li><strong>Invoice Declaration:</strong> Annexure III mandatory on every FCM invoice.</li>
                    <li><strong>TRANSIN:</strong> 15-digit ID for unregistered transporters via portal enrolment.</li>
                    <li><strong>Rule 138(3):</strong> Transporter generates EWB if shipper/consignee did not.</li>
                    <li><strong>Consolidated EWB:</strong> Form GST EWB-02 by transporter under Rule 138(6).</li>
                    <li><strong>Documents Carried:</strong> Rule 138A - EWB + invoice/bill of supply/delivery challan.</li>
                    <li><strong>Detention Upload:</strong> Form GST EWB-04 within 30 min of detention (Rule 138D).</li>
                    <li><strong>Patron Fee:</strong> INR 4,999 setup; INR 4,999/mo retainer; INR 14,999/incident detention.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Transporter and GTA Compliance Cannot Be Left to Chance</h2>
            <div class="content-text">
                
                <p>Transporter and GTA-side e-way bill compliance combines two distinct exposure surfaces - operational (Rule 138(3) liability if shipper or consignee fails to generate, consolidated EWB-02 omission at multi-consignment dispatch, Rule 138A document carriage gaps, and the Form EWB-04 detention upload window of 30 minutes) and strategic (RCM vs FCM tax treatment via annual Annexure V election, customer-mix categorisation, and ITC optimisation under 18 percent FCM).</p>
                <p>The Annexure V filing window of 15 March each year is rigid - missing it locks the GTA into RCM for the entire next FY. Section 129 detention penalty of 200 percent of tax payable hits transporters directly - even when the shipper raised correct invoices, the Rule 138(3) trigger makes the transporter independently liable.</p>
                <p>The recent GST Council 5 percent rate consolidation, the October 2025 Supreme Court ruling on mens rea for Section 129 penalty, and ongoing portal updates (E-Way Bill 2.0, 30-minute EWB-04 window enforcement) all favour proactive compliance over reactive scramble. Patron engagement starts at Rs 4,999.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Transporter and GTA E-Way Bill Compliance Set Up Right</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">Transporters and Goods Transport Agencies operate at the working end of GST logistics - the entity physically moving goods, interacting with proper officers at checkpoints, generating consolidated EWBs for multi-consignment vehicles, and bearing Rule 138(3) liability if the shipper or consignee fails to generate. The GTA layer adds strategic dimensions - the consignment note test under Notification 11/2017-CT(R), the RCM vs FCM annual election via Annexure V, and Annexure III declaration discipline on every FCM invoice.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP runs this transporter and GTA-specific engagement with 15+ years of GST and logistics practice, 50,000+ transporter-side e-way bills generated, 100+ GTAs operating optimised RCM and FCM frameworks, and zero Rule 138(3) trigger detentions in the last 24 months.</p>
                <p style="color:rgba(255,255,255,0.92);">Pair this with <a href="https://www.patronaccounting.com/gst-returns" style="color:#fff;text-decoration:underline;">GST Returns</a> for GSTR-1 and GSTR-3B filing and <a href="https://www.patronaccounting.com/gst-audit" style="color:#fff;text-decoration:underline;">GST Audit</a> for Section 129 detention defence - together they form an integrated logistics-side compliance backbone.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Transporter%20and%20GTA%20E-Way%20Bill%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Transporter and GTA E-Way Bill%20Services&body=Hello%2C%20I%20just%20visited%20your%20Transporter%20and%20GTA%20E-Way%20Bill%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for transporters and GTAs</div>
                <div class="pa-cross-grid">
                    <a href="https://www.patronaccounting.com/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-annual-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/travel-and-logistics-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Travel and Logistics Accounting</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/payroll-services-for-travel-and-logistics-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Logistics Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 27 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 1 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Tier 1 cadence) and on any CBIC notification on GTA tax rate, RCM/FCM applicability, Annexure V or VI format revision, or Rule 138 transporter-obligation change.</p>
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
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Transporter%20and%20GTA%20E-Way%20Bill%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
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
// BF-1: Last Updated mirrors schema dateModified (frozen, NOT live new Date())
(function() {
    var dateStr = '1 June 2026';
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>

