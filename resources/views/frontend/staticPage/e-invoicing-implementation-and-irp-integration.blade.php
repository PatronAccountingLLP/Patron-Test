@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>E-Invoicing 2026: IRP Integration | Patron Accounting</title>
    <meta name="description" content="E-invoicing implementation and IRP integration for B2B turnover above Rs 5 crore. IRN, QR code, ERP setup, 30-day rule. Patron from Rs 24,999.">
    <link rel="canonical" href="/e-invoicing-implementation-and-irp-integration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="E-Invoicing 2026: IRP Integration | Patron Accounting">
    <meta property="og:description" content="E-invoicing implementation and IRP integration for B2B turnover above Rs 5 crore. IRN, QR code, ERP setup, 30-day rule. Patron from Rs 24,999.">
    <meta property="og:url" content="/e-invoicing-implementation-and-irp-integration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="E-Invoicing 2026: IRP Integration | Patron Accounting">
    <meta name="twitter:description" content="E-invoicing implementation and IRP integration for B2B turnover above Rs 5 crore. IRN, QR code, ERP setup, 30-day rule. Patron from Rs 24,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/e-invoicing-implementation-and-irp-integration/#service",
        "name": "E-Invoicing Implementation and IRP Integration in India",
        "description": "End-to-end GST e-invoicing implementation and Invoice Registration Portal integration under Rule 48(4) of the CGST Rules 2017 for businesses with PAN-level AATO above Rs 5 crore. Covers PAN-level applicability test, IRP selection from 6 GSTN-authorized portals, ERP integration with Tally, Zoho, SAP, Oracle, Busy and custom systems, master data cleanup, JSON schema mapping, UAT with 100+ scenario invoices, go-live cutover, 30-day reporting rule compliance for AATO above Rs 10 crore, 2FA setup, and post-go-live stabilisation, starting from INR 24,999 per implementation engagement.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/e-invoicing-implementation-and-irp-integration" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "E-Invoicing Implementation Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "Standard E-Invoicing Implementation",
                    "priceCurrency": "INR",
                    "price": "24999",
                    "description": "Single GSTIN, single ERP (Tally/Zoho/Busy), up to 500 invoices per month"
                },
                {
                    "@type": "Offer",
                    "name": "Growth Implementation",
                    "priceCurrency": "INR",
                    "price": "49999",
                    "description": "Up to 3 GSTINs, mid-tier ERP (SAP/Oracle), 500-2,000 invoices per month"
                },
                {
                    "@type": "Offer",
                    "name": "Enterprise Implementation",
                    "priceCurrency": "INR",
                    "price": "74999",
                    "description": "3+ GSTINs, complex ERP integration, 2,000+ invoices per month, multi-state cutover"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/e-invoicing-implementation-and-irp-integration/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "GST Services", "item": "https://www.patronaccounting.com/gst-services" },
            { "@type": "ListItem", "position": 3, "name": "E-Invoicing Implementation", "item": "https://www.patronaccounting.com/e-invoicing-implementation-and-irp-integration" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/e-invoicing-implementation-and-irp-integration/#faq",
        "datePublished": "2026-05-27T08:00:00+05:30",
        "dateModified": "2026-06-01T08:00:00+05:30",
        "mainEntity": [

            {
                "@type": "Question",
                "name": "Who must comply with e-invoicing in 2026?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Every registered taxpayer whose PAN-level aggregate annual turnover (AATO) crossed Rs 5 crore in any financial year since 2017-18 must comply with e-invoicing under Rule 48(4) of the CGST Rules. The threshold is sticky - once crossed in any past FY, the obligation continues. Compliance is required for B2B supplies, B2G supplies, exports, supplies to SEZ units, and credit and debit notes issued under Section 34. Banks, NBFCs, insurance, GTA, passenger transport, multiplex operators, SEZ Units, government departments, and OIDAR providers are exempt."
                }
            },
            {
                "@type": "Question",
                "name": "What is IRN and QR code on e-invoice?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "IRN (Invoice Reference Number) is a unique 64-character alphanumeric hash generated by the Invoice Registration Portal (IRP) after authenticating the supplier invoice data. The IRP also returns a digitally signed QR code embedded with the supplier GSTIN, buyer GSTIN, invoice number, date, value, HSN, and IRN - allowing offline verification. Every e-invoice must carry both the IRN and the QR code. Without them the document is invalid under Rule 48(5) and the buyer cannot claim ITC."
                }
            },
            {
                "@type": "Question",
                "name": "What is the 30-day reporting rule for e-invoicing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Effective 1 April 2025, taxpayers with PAN-level AATO above Rs 10 crore must upload every B2B invoice to the IRP within 30 days of the invoice date. If the upload happens after 30 days, the IRP rejects the submission and the invoice becomes permanently invalid - no IRN issued, no ITC for buyer, and Section 122 penalty exposure for supplier. The rule effectively forces real-time IRP submission for higher-turnover taxpayers."
                }
            },
            {
                "@type": "Question",
                "name": "Which IRP should a business use for e-invoicing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Six GSTN-authorized Invoice Registration Portals are currently operational - all interoperable, meaning the same IRN is returned regardless of which portal is used. The primary IRP is einvoice1.gst.gov.in maintained by NIC, and additional portals are run by CBIC-authorised private operators including IRIS Business Services, ClearTax, Cygnet, Ernst and Young, and Defmacro. Selection depends on ERP integration support, customer service, and volume-based pricing."
                }
            },
            {
                "@type": "Question",
                "name": "Who is exempt from e-invoicing under Rule 48(4)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Exemptions under Rule 48(4) read with Notifications 13/2020-CT, 61/2020-CT, and 23/2021-CT cover banks, Non-Banking Financial Companies (NBFCs), insurance companies, Goods Transport Agencies (GTA), passenger transportation service providers, multiplex cinema operators, Special Economic Zone (SEZ) Units (not SEZ Developers), government departments and local authorities, OIDAR providers registered under Rule 14, and Free Trade and Warehousing Zones. The exemption applies to the entity as a whole, not to specific transactions."
                }
            },
            {
                "@type": "Question",
                "name": "What is the penalty for not generating e-invoices?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 122 of the CGST Act 2017 prescribes penalty of Rs 10,000 per invoice or 100 percent of the tax due on the invoice, whichever is higher, for non-compliance with Rule 48(4). Since the penalty is per invoice, missing e-invoicing obligations on 100 invoices in a month can attract Rs 10 lakh penalty plus the underlying tax demand. Additionally, Rule 48(5) declares such invoices invalid - the recipient cannot claim ITC, creating commercial pressure on the supplier from the buyer side."
                }
            },
            {
                "@type": "Question",
                "name": "How does e-invoicing integrate with ERP and GST returns?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "After implementation, ERPs (Tally, Zoho, SAP, Oracle, Busy, custom) push invoice data to the IRP via API at the moment of invoice approval. The IRP returns IRN and QR code which the ERP embeds on the printed invoice. The IRP also pushes the data to the GST system, auto-populating GSTR-1 for the supplier, and to the e-way bill system if applicable. This eliminates the need for separate GSTR-1 entry and e-way bill generation, reducing GST reconciliation workload by 70 to 80 percent."
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
                        E-Invoicing Implementation and IRP Integration in 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> GSTIN list, ERP details (Tally, Zoho, SAP, Oracle, Busy, custom), HSN/SAC master, party master, and invoice volume.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 24,999 (Exl GST and Govt. Charges) per implementation project.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every business with PAN-level AATO above Rs 5 crore in any FY since 2017-18 issuing B2B, export, or SEZ supplies.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 4-8 weeks for end-to-end implementation, including ERP integration, master setup, UAT, and go-live.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 350+ E-Invoicing Implementations | 99.7% IRN-Success Rate Post Go-Live</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20E-Invoicing Implementation%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20E-Invoicing Implementation%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%20Patron%20Accounting%2C%20I%20need%20e-invoicing%20implementation%20and%20IRP%20integration%20for%20my%20business.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'E-Invoicing Implementation',
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
            <!-- TOC_NAVIGATION_ITEMS PATTERN - use class "toc-btn" (NOT "toc-pill"); the CSS (.toc-btn) and scroll-spy JS (querySelectorAll('.toc-btn')) both target this exact class. First item gets "toc-btn active". One button per content section, in document order. Pattern:
                <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
                <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
                (repeat for who-section, services-section, procedure-section, documents-section, challenges-section, fees-section, timeline-section, benefits-section, comparison-section, faq-section)
            -->
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Must Comply</button>
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
            <h2 class="section-title">E-Invoicing Implementation at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - E-Invoicing Implementation Services at a Glance</strong></p>
                    <p>E-invoicing under Rule 48(4) of the CGST Rules 2017 is mandatory for every registered taxpayer with PAN-level aggregate annual turnover (AATO) above Rs 5 crore in any financial year since 2017-18 - covering B2B supplies, B2G, exports, supplies to SEZ units, and credit and debit notes under Section 34. Each invoice is authenticated by an Invoice Registration Portal (IRP) which returns a unique Invoice Reference Number (IRN) and a digitally signed QR code. Taxpayers with AATO above Rs 10 crore must upload to IRP within 30 days of invoice date (effective April 2025). Invoices without IRN are invalid - the buyer loses ITC and the supplier faces a Rs 10,000 per invoice penalty under Section 122.</p>
                </div>
                <p>E-invoicing has progressively become the backbone of B2B GST compliance in India - what began in October 2020 for taxpayers above Rs 500 crore aggregate turnover now covers every business above the Rs 5 crore AATO threshold (effective 1 August 2023). The framework requires real-time invoice authentication on an Invoice Registration Portal (IRP) with a unique IRN and digitally signed QR code returned to the supplier.</p>
                <p>Any B2B invoice without these markers is treated as an invalid document under Rule 48(5), denying the buyer input tax credit and exposing the supplier to penalty under Section 122 of the CGST Act. With 10,000+ Indian businesses served, 350+ end-to-end e-invoicing implementations across Tally, Zoho, SAP, Oracle, Busy, and custom ERPs, and a 99.7 percent IRN-success rate post go-live, Patron Accounting LLP runs the full project lifecycle - readiness assessment, IRP integration, ERP master data setup, UAT, go-live, and 30-day-rule operational compliance.</p>
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
                <h2 class="section-title">What Is E-Invoicing and IRP Integration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>E-invoicing under Rule 48(4) of the CGST Rules 2017 is the mandatory real-time authentication of B2B tax invoices, credit notes, and debit notes by an Invoice Registration Portal (IRP) before the document is issued to the buyer.</p>
                    <p>The supplier ERP or accounting software transmits invoice data in a prescribed JSON format to the IRP, which validates the data, generates a unique 64-character Invoice Reference Number (IRN), digitally signs the invoice, returns a QR code embedded with key invoice details for offline verification, and pushes the data to GSTR-1 (auto-population) and the e-way bill system where applicable.</p>
                    <p>The mandate applies to every registered taxpayer with PAN-level AATO above Rs 5 crore in any FY since 2017-18 - a sticky threshold that does not reset if turnover drops in a later year. From April 2025, taxpayers with AATO above Rs 10 crore must upload every invoice within 30 days of invoice date or the IRP rejects the submission, making the invoice invalid.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for E-Invoicing Implementation:</strong></p>
                    <ul>
                        <li><strong>IRP (Invoice Registration Portal):</strong> Government-designated digital gateway that authenticates B2B invoices. Six IRPs are operational - the NIC-maintained einvoice1.gst.gov.in is primary; private CBIC-authorised operators (IRIS, ClearTax, Cygnet, EY, Defmacro) run interoperable portals returning identical IRNs.</li>
                        <li><strong>IRN (Invoice Reference Number):</strong> Unique 64-character alphanumeric hash generated by the IRP from the supplier GSTIN, document type, document number, and financial year - making each authenticated invoice globally unique within GST.</li>
                        <li><strong>QR Code:</strong> Quick Response code returned by the IRP containing supplier and recipient GSTINs, invoice number, date, value, HSN, IRN, and digital signature - allows offline verification of authenticity.</li>
                        <li><strong>AATO (Aggregate Annual Turnover):</strong> PAN-level total of all taxable, exempt, export, and inter-state supplies across all GSTINs under the same PAN. Applicability is tested on AATO of any FY since 2017-18 - the threshold is sticky.</li>
                        <li><strong>JSON Schema:</strong> Prescribed structure used to transmit invoice data to the IRP - headers, seller and buyer details, item details, totals, and document references. Updated periodically by GSTN.</li>
                        <li><strong>30-Day Reporting Rule:</strong> From 1 April 2025, taxpayers with AATO above Rs 10 crore must upload each invoice to IRP within 30 days of invoice date - the IRP rejects uploads beyond this window.</li>
                        <li><strong>Rule 48(5) Invalidity:</strong> Any tax invoice falling under Rule 48(4) but issued without IRN and QR code is not a valid tax invoice - the recipient cannot claim ITC and the supplier faces penalty under Section 122.</li>
                        <li><strong>E-Invoice Exemption Declaration:</strong> A self-declaration on the einvoice portal confirming exemption under Rule 48(4) - applicable to banks, NBFCs, insurance, GTA, passenger transport, multiplexes, SEZ units, government departments, and OIDAR providers.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">E-Invoicing Implementation</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Current Threshold</span>
                        <strong>AATO Above Rs 5 Crore</strong>
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
            <h2 class="section-title">Who Must Comply with E-Invoicing</h2>
            <div class="content-text">
                
                <p>E-invoicing applies to every registered taxpayer whose PAN-level aggregate annual turnover (AATO) crossed Rs 5 crore in any financial year from 2017-18 onwards. The threshold test is sticky - once crossed in any past FY, the obligation continues even if current-year turnover drops below Rs 5 crore. Applicability is at the PAN level, meaning all GSTINs under the same PAN are jointly tested.</p>
                <h3 style="margin-top:24px;">Threshold Evolution</h3>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Effective Date</th><th>AATO Threshold</th><th>Notification</th></tr></thead>
                    <tbody>
                        <tr><td>1 October 2020</td><td>Above Rs 500 crore</td><td>Notification 61/2020-CT and 70/2020-CT</td></tr>
                        <tr><td>1 January 2021</td><td>Above Rs 100 crore</td><td>Notification 88/2020-CT</td></tr>
                        <tr><td>1 April 2021</td><td>Above Rs 50 crore</td><td>Notification 05/2021-CT</td></tr>
                        <tr><td>1 April 2022</td><td>Above Rs 20 crore</td><td>Notification 01/2022-CT</td></tr>
                        <tr><td>1 October 2022</td><td>Above Rs 10 crore</td><td>Notification 17/2022-CT</td></tr>
                        <tr><td>1 August 2023</td><td>Above Rs 5 crore (current)</td><td>Notification 10/2023-CT</td></tr>
                        <tr><td>Proposed (not notified)</td><td>Rs 2 crore</td><td>Discussed at GST Council</td></tr>
                    </tbody>
                </table>
                </div>
                <h3 style="margin-top:28px;">Transactions Covered</h3>
                <ul>
                    <li>B2B supplies - registered taxpayer to registered taxpayer</li>
                    <li>B2G supplies - to government departments and local authorities</li>
                    <li>Exports - both with payment of tax and zero-rated (LUT) supplies</li>
                    <li>Supplies to SEZ units (with or without payment of tax)</li>
                    <li>Credit notes and debit notes issued under Section 34 of the CGST Act</li>
                    <li>Reverse charge (RCM) supplies where the supplier is liable to issue the invoice</li>
                    <li>Deemed exports under Section 147</li>
                </ul>
                <h3 style="margin-top:28px;">Transactions Not Covered</h3>
                <ul>
                    <li>B2C (business to consumer) supplies - separate dynamic QR code requirement for AATO above Rs 500 crore</li>
                    <li>Exempt and nil-rated supplies (bill of supply, not tax invoice)</li>
                    <li>High sea sales (Schedule III - not a supply)</li>
                    <li>Import transactions (Bill of Entry route applies)</li>
                    <li>Financial credit notes and commercial credit notes (not under Section 34)</li>
                </ul>
                <h3 style="margin-top:28px;">Exempt Categories Under Rule 48(4)</h3>
                <ul>
                    <li>Banks, NBFCs, and insurance companies (Notification 13/2020-CT)</li>
                    <li>Goods Transport Agencies (GTA) supplying transportation services</li>
                    <li>Passenger transportation service providers (airlines, buses, taxis, metro)</li>
                    <li>Multiplex cinema operators - admission ticket supplies</li>
                    <li>SEZ Units (Notification 61/2020-CT) - SEZ Developers are NOT exempt</li>
                    <li>Government departments and local authorities (Notification 23/2021-CT)</li>
                    <li>OIDAR providers registered under Rule 14 of the CGST Rules</li>
                    <li>Free Trade and Warehousing Zones (FTWZ) - same exemption as SEZ Units</li>
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
            <h2 class="section-title">Patron Accounting Services for E-Invoicing Implementation</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Readiness Assessment and IRP Selection</td><td>PAN-level AATO test to confirm applicability, exemption verification under Rule 48(4), IRP selection from 6 available portals (NIC primary or private operators), and integration mode decision - API direct, ERP-bundled, web/manual, or SFTP batch.</td></tr>
                        <tr><td>ERP Integration - Tally, Zoho, SAP, Oracle, Busy, Custom</td><td>Direct API integration with Tally Prime, Zoho Books, SAP S/4HANA, Oracle Fusion, Busy, Microsoft Dynamics 365, NetSuite, and custom-built systems. Includes data mapping, schema configuration, and signed JSON push.</td></tr>
                        <tr><td>Master Data Setup and HSN/SAC Cleanup</td><td>Vendor and customer GSTIN validation against the GSTN database, HSN/SAC master alignment, item master cleanup, place-of-supply mapping, and tax rate matrix configuration - the foundation that prevents 90 percent of IRP rejections.</td></tr>
                        <tr><td>UAT Testing and Go-Live Cutover</td><td>Two-week UAT in IRP sandbox with at least 100 test invoices across goods, services, exports, SEZ supplies, credit notes, and RCM. Go-live cutover plan, parallel run period, and exception handling SOP delivered to the operations team.</td></tr>
                        <tr><td>30-Day Reporting Rule and 2FA Compliance</td><td>For AATO above Rs 10 crore - real-time IRP submission workflow (not batch upload), 2FA setup, a monitoring dashboard for invoices approaching the 30-day cliff, and a recovery procedure for rejected uploads.</td></tr>
                        <tr><td>Ongoing Operations and Exception Handling</td><td>Post-go-live monthly retainer covering IRN failure investigation, schema update implementation, master data refresh, GSTR-1 auto-population reconciliation, e-way bill linkage, and CBIC notification monitoring.</td></tr>

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
            <h2 class="section-title">How E-Invoicing Implementation Works - Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From PAN-level applicability testing to go-live and stabilisation, here is exactly how Patron Accounting runs an e-invoicing implementation and IRP integration project.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">PAN-Level AATO Applicability Test</h3>
                    <p class="step-description">Aggregate turnover at PAN level across all GSTINs is computed for every FY from 2017-18 onwards. If any year crosses Rs 5 crore, the obligation is triggered permanently. Enablement status is cross-checked on einvoice1.gst.gov.in.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All FYs computed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Status verified</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="12" width="52" height="76" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="42" y="20" width="36" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="48" cy="48" r="3" fill="#14365F"/><circle cx="60" cy="48" r="3" fill="#14365F"/><circle cx="72" cy="48" r="3" fill="#E8712C"/><circle cx="48" cy="62" r="3" fill="#14365F"/><circle cx="60" cy="62" r="3" fill="#14365F"/><circle cx="72" cy="62" r="3" fill="#14365F"/></svg></div>
                        <span class="illustration-label">AATO Test</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Exemption Verification Under Rule 48(4)</h3>
                    <p class="step-description">Check whether the entity falls in any exempt category - banks, NBFCs, insurance, GTA, passenger transport, multiplex, SEZ unit, government department, OIDAR. If exempt, file the e-invoice exemption declaration on the portal.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Category checked</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Declaration filed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 14l30 10v22c0 18-13 30-30 38-17-8-30-20-30-38V24z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l9 9 18-20" stroke="#25D366" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <span class="illustration-label">Exemption</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">IRP Selection and Account Activation</h3>
                    <p class="step-description">Choose the primary IRP from 6 GSTN-authorized portals - NIC primary einvoice1.gst.gov.in or private operators. Activate the account, generate API credentials, and set up sandbox access for UAT.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IRP chosen</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Credentials set</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="80" height="56" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="80" height="14" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="28" cy="27" r="2" fill="#E8712C"/><circle cx="36" cy="27" r="2" fill="#14365F"/><path d="M44 50h32M44 60h22" stroke="#14365F" stroke-width="2" opacity="0.4" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">IRP Setup</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">ERP Integration Mode Decision</h3>
                    <p class="step-description">Select the integration mode based on invoice volume - API direct (over 1,000/month), ERP-bundled connector (Tally/Zoho/SAP plug-ins for 100-1,000/month), bulk upload (Excel/CSV for under 100/month), or web portal (manual entry).</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Volume-matched</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mode locked</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="30" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M60 42v14M40 70a20 20 0 0140 0" stroke="#14365F" stroke-width="2" fill="none"/><path d="M30 70h60" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Mode Decision</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Master Data Setup</h3>
                    <p class="step-description">Vendor and customer GSTIN validation against GSTN, HSN/SAC alignment (6 or 8 digit), item master cleanup with UQC tagging, place-of-supply matrix, tax rate matrix, and document type configuration.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTINs verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN aligned</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><ellipse cx="60" cy="26" rx="30" ry="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M30 26v34c0 5.5 13.4 10 30 10s30-4.5 30-10V26" stroke="#14365F" stroke-width="1.5" fill="#F0F4F8" fill-opacity="0.5"/><path d="M30 43c0 5.5 13.4 10 30 10s30-4.5 30-10" stroke="#14365F" stroke-width="1.5"/></svg></div>
                        <span class="illustration-label">Master Data</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">JSON Schema Mapping and Field Validation</h3>
                    <p class="step-description">Map ERP invoice fields to the prescribed JSON schema - 12 mandatory section headers, 100+ optional fields, conditional validation rules. Configure auto-trigger on invoice approval to generate signed JSON for IRP submission.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fields mapped</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auto-trigger set</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="24" y="14" width="72" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="40" y="42" font-size="14" fill="#E8712C" font-weight="700" font-family="monospace">{ }</text><line x1="40" y1="56" x2="84" y2="56" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="40" y1="68" x2="74" y2="68" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div>
                        <span class="illustration-label">Schema Mapping</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">UAT Testing in IRP Sandbox</h3>
                    <p class="step-description">Two-week UAT with 100+ test invoices covering goods, services, exports (with and without payment), SEZ supplies, credit and debit notes, RCM, and corner cases (zero-rated, mixed-state, multi-rate). All IRN-rejection scenarios documented.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>100+ invoices</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rejections logged</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M50 16h20v18l16 30a6 6 0 01-5 9H39a6 6 0 01-5-9l16-30z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M44 60h32" stroke="#F5A623" stroke-width="2.5"/><circle cx="54" cy="70" r="3" fill="#E8712C"/><circle cx="66" cy="74" r="3" fill="#E8712C"/></svg></div>
                        <span class="illustration-label">Sandbox UAT</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Go-Live Cutover</h3>
                    <p class="step-description">Production environment activated, parallel run for 5 to 7 working days with the operations team monitoring, transition to fully IRP-authenticated invoice issuance, and freezing of legacy non-IRN invoice numbering.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Parallel run</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Legacy frozen</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="34" width="36" height="34" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><rect x="66" y="34" width="36" height="34" rx="5" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M54 51h12" stroke="#E8712C" stroke-width="2.5"/><path d="M60 46l6 5-6 5" stroke="#E8712C" stroke-width="2.5" fill="none"/></svg></div>
                        <span class="illustration-label">Go-Live</span>
                        <span class="step-number-large">08</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 9</span>
                    <h3 class="step-title">30-Day Rule and 2FA Enablement</h3>
                    <p class="step-description">For AATO above Rs 10 crore - real-time submission (not batch) enabled, 2FA setup completed, a monitoring dashboard live-tracking invoices approaching the 30-day cliff, and a recovery SOP for rejected uploads.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Real-time on</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2FA enabled</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 32v18l12 8" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" fill="none"/></svg></div>
                        <span class="illustration-label">30-Day Rule</span>
                        <span class="step-number-large">09</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 10</span>
                    <h3 class="step-title">Stabilisation and Handover</h3>
                    <p class="step-description">30-day post-go-live monitoring with daily IRN-success rate tracking, exception SOP refinement, operations team training, and handover to in-house operations or an ongoing Patron retainer.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Team trained</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Retainer ready</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="40" y="40" width="40" height="24" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M50 52l6 6 14-14" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round"/><path d="M40 56c-6 0-10-4-10-10M80 44c6 0 10 4 10 10" stroke="#14365F" stroke-width="2" fill="none"/></svg></div>
                        <span class="illustration-label">Handover</span>
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
                
                <p>Have these inputs ready for a smooth e-invoicing implementation:</p>
                <ul>
                    <li>PAN-based GSTIN list (all states with active registrations)</li>
                    <li>Annual turnover data for each FY from 2017-18 onwards (PAN-level)</li>
                    <li>ERP or accounting software details (vendor, version, deployment - on-premise or cloud)</li>
                    <li>Monthly B2B invoice volume and average ticket size</li>
                    <li>Customer master with verified GSTINs and addresses</li>
                    <li>Vendor master with HSN/SAC tagging for inward supplies</li>
                    <li>Item or service master with UQC (Unit Quantity Code) tagging</li>
                    <li>Recent B2B invoice samples (PDF and structured data) for schema mapping reference</li>
                    <li>DSC of the authorised signatory for IRP account activation</li>
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
                        <tr><td>GSTIN and HSN Validation Failures at IRP</td><td>Single-character errors in buyer GSTIN, wrong state code, expired or cancelled GSTINs, and incorrect HSN/SAC codes are the most common IRN rejection causes - typically 8 to 15 percent of first-pass invoices fail, blocking buyer ITC and triggering rework.</td><td>Real-time GSTIN validation against the GSTN public API at invoice creation, HSN/SAC normalisation against the official 8-digit master, and a validation-rule library pushed to the ERP - reduces first-pass rejection to under 1 percent.</td></tr>
                        <tr><td>30-Day Reporting Rule Compliance Drift</td><td>For AATO above Rs 10 crore, the monthly batch-upload practice (common pre-April-2025) silently violates the 30-day rule. Invoices held back for end-of-month processing get rejected by the IRP and become permanently invalid.</td><td>Real-time IRP submission architecture (not batch) with auto-trigger on invoice approval, a monitoring dashboard tracking every invoice age in days, escalation alerts at 25 days, and an operational SOP forcing daily resolution.</td></tr>
                        <tr><td>ERP Schema Drift After GSTN Version Updates</td><td>GSTN periodically updates the JSON schema (new mandatory fields, modified validation rules, new tax rates). ERPs running outdated mappings start failing without notice - dropping IRN success rate to 60-70 percent.</td><td>CBIC and GSTN advisory monitoring with monthly schema update sweeps, regression testing in sandbox before any production push, and version-controlled mapping files - keeping IRN success rate at 99.5 percent plus through schema changes.</td></tr>
                        <tr><td>Credit and Debit Note Coverage Gap</td><td>Companies frequently configure e-invoicing for tax invoices but miss credit and debit notes under Section 34 - which are equally subject to IRP authentication. Result: buyer ITC reversals not flowing to GSTR-1, mismatch with GSTR-2B at the recipient end.</td><td>Full document type coverage during implementation - tax invoices, credit notes, debit notes, RCM supplier invoices, deemed exports, and SEZ supplies. UAT covers all 7 document types with positive and negative scenarios.</td></tr>

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
            <h2 class="section-title">E-Invoicing Implementation Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 24,999 (Exl GST and Govt. Charges) - per implementation engagement</td></tr>
                        <tr><td>Standard Implementation</td><td>INR 24,999 - single GSTIN, single ERP (Tally/Zoho/Busy), up to 500 invoices/month</td></tr>
                        <tr><td>Growth Implementation</td><td>INR 49,999 - up to 3 GSTINs, mid-tier ERP (SAP/Oracle), 500-2,000 invoices/month</td></tr>
                        <tr><td>Enterprise Implementation</td><td>INR 74,999+ - 3+ GSTINs, complex ERP integration, 2,000+ invoices/month, multi-state cutover</td></tr>
                        <tr><td>Ongoing Operations Retainer</td><td>INR 9,999/mo per GSTIN - post-go-live support, exception handling, schema updates</td></tr>
                        <tr><td>30-Day Rule Compliance Audit</td><td>INR 14,999 one-time - single engagement audit for AATO above Rs 10 crore taxpayers</td></tr>
                        <tr><td>IRP Subscription Fees</td><td>Out of scope - NIC primary is free; private operators charge based on volume</td></tr>
                        <tr><td>DSC, Connector Licences, Legacy Invoice Tax</td><td>Out of scope - billed separately at actuals</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free E-Invoicing Implementation consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%20Patron%20Accounting%2C%20I%20need%20e-invoicing%20implementation%20and%20IRP%20integration%20for%20my%20business.%20Please%20share%20the%20process%20and%20fees." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for E-Invoicing Implementation</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Readiness assessment and IRP selection</td><td>3-5 days (Discovery)</td></tr>
                        <tr><td>ERP integration setup and credential exchange</td><td>5-10 days (Setup)</td></tr>
                        <tr><td>Master data cleanup and HSN/SAC alignment</td><td>7-10 days (Setup)</td></tr>
                        <tr><td>JSON schema mapping and configuration</td><td>5-7 days (Build)</td></tr>
                        <tr><td>UAT testing in IRP sandbox</td><td>10-14 days (Test)</td></tr>
                        <tr><td>Go-live cutover with parallel run</td><td>5-7 days (Cutover)</td></tr>
                        <tr><td>30-day stabilisation and handover</td><td>20-30 days (Stabilisation)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>End-to-end implementation: 4 to 8 weeks depending on ERP complexity and invoice volume.</strong> Post-go-live ongoing operations transition to a monthly retainer.</p>

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
            <h2 class="section-title">Benefits of Professional E-Invoicing Implementation</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Rule 48(4) and 48(5) Compliance</h3>
                <p class="feature-desc">No invalid invoices issued and no Section 122 penalty exposure across your B2B issuance.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Buyer ITC Protected</h3>
                <p class="feature-desc">Every B2B invoice carries a valid IRN and QR code, so recipients keep their input tax credit.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                <h3 class="feature-title">30-Day Rule Maintained</h3>
                <p class="feature-desc">Real-time submission architecture keeps AATO above Rs 10 crore taxpayers within the reporting window.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                <h3 class="feature-title">2FA Enablement</h3>
                <p class="feature-desc">2FA set up for higher AATO taxpayers - no surprise login lockouts at the IRP.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9c-2.5 0-4.8-1-6.4-2.6M3 12a9 9 0 019-9c2.5 0 4.8 1 6.4 2.6"/><path d="M21 3v6h-6M3 21v-6h6"/></svg></div>
                <h3 class="feature-title">GSTR-1 Auto-Population</h3>
                <p class="feature-desc">IRP-driven auto-population cuts reconciliation workload by 70 to 80 percent.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><path d="M16 8h4l3 3v5h-7zM5.5 21a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM18.5 21a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"/></svg></div>
                <h3 class="feature-title">E-Way Bill Auto-Trigger</h3>
                <p class="feature-desc">E-way bills auto-trigger from e-invoice data, eliminating duplicate entry.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8"/><path d="M17 7h4v4"/></svg></div>
                <h3 class="feature-title">Proactive Schema Sweeps</h3>
                <p class="feature-desc">Schema updates are absorbed proactively - no quiet IRN-rate drops after GSTN version changes.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div>
                <h3 class="feature-title">Tax Practice Backing</h3>
                <p class="feature-desc">15+ years of indirect tax practice - the same team handles any Section 122 scrutiny if a notice lands.</p>
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
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ Indian manufacturers, traders, service providers, and exporters across Tally, Zoho, SAP, Oracle, Busy, and custom ERP environments.</p>
                <p>Patron has completed 350+ e-invoicing implementations spanning single-GSTIN small businesses to 25+ GSTIN multi-state enterprises. Post go-live, the average IRN success rate is 99.7 percent across the active client base, with zero Section 122 penalty incidents in the last 36 months.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong> See our <a href="https://www.patronaccounting.com/gst-returns/pune">GST returns support in Pune</a> for local assistance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">E-Invoicing vs Traditional Invoicing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Traditional Invoicing</th><th>E-Invoicing (Rule 48(4))</th></tr></thead>
                    <tbody>
                        <tr><td>Generation Stage</td><td>Invoice generated in ERP, sent to customer</td><td>Invoice authenticated by IRP before being sent</td></tr>
                        <tr><td>Authentication</td><td>Self-issued (supplier signature)</td><td>Government IRP digital signature with IRN and QR</td></tr>
                        <tr><td>Validity Test</td><td>Standard tax invoice (Section 31)</td><td>Valid only if IRN and QR present (Rule 48(5))</td></tr>
                        <tr><td>Invoice Number Uniqueness</td><td>Supplier-controlled</td><td>Globally unique 64-character IRN</td></tr>
                        <tr><td>Real-Time Reporting</td><td>No - reported in GSTR-1 monthly</td><td>Yes - real-time to IRP and GSTN</td></tr>
                        <tr><td>GSTR-1 Population</td><td>Manual entry</td><td>Auto-populated from IRP</td></tr>
                        <tr><td>E-Way Bill Linkage</td><td>Separate generation</td><td>Auto-triggered from e-invoice</td></tr>
                        <tr><td>QR Code on Invoice</td><td>Not required (B2C dynamic QR for AATO above Rs 500 cr)</td><td>Mandatory on B2B/B2G/Export invoices</td></tr>
                        <tr><td>30-Day Reporting (AATO above Rs 10 cr)</td><td>Not applicable</td><td>Mandatory upload within 30 days of invoice date</td></tr>
                        <tr><td>Buyer ITC Impact</td><td>ITC available subject to Section 16(2)</td><td>ITC denied if no IRN/QR</td></tr>

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
                    <li><a href="https://www.patronaccounting.com/gst-returns">GST Returns</a> - GSTR-1 auto-populates from e-invoice IRN data.</li>
                    <li><a href="https://www.patronaccounting.com/gst-annual-returns">GST Annual Returns</a> - year-end reconciliation of IRP-authenticated invoices.</li>
                    <li><a href="https://www.patronaccounting.com/gst-registration">GST Registration</a> - state-wise GSTIN setup feeding e-invoicing applicability.</li>
                    <li><a href="https://www.patronaccounting.com/gst-audit">GST Audit</a> - Section 61 scrutiny on Rule 48(4) compliance.</li>
                    <li><a href="https://www.patronaccounting.com/gst-returns-for-e-commerce-operator">GST Returns for E-Commerce Operator</a> - Section 9(5) supplies and e-invoicing coverage.</li>
                    <li><a href="https://www.patronaccounting.com/private-limited-company-compliance">Private Limited Company Compliance</a> - annual compliance and ERP governance.</li>
                </ul>

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
                        <tr><td>Governing Act</td><td>Central Goods and Services Tax Act 2017</td></tr>
                        <tr><td>Primary Rule</td><td>Rule 48(4) CGST Rules 2017 - mandatory e-invoicing through IRP</td></tr>
                        <tr><td>Validity Rule</td><td>Rule 48(5) CGST Rules 2017 - an invoice not in IRP format is invalid</td></tr>
                        <tr><td>Linked Sections</td><td>Section 31 (tax invoice); Section 34 (credit and debit notes); Section 16(2)(a) (buyer ITC condition)</td></tr>
                        <tr><td>Form</td><td>FORM GST INV-01 (prescribed JSON schema)</td></tr>
                        <tr><td>Current Threshold</td><td>AATO above Rs 5 crore (effective 1 August 2023 via Notification 10/2023-CT)</td></tr>
                        <tr><td>Sticky Threshold</td><td>Applicability tested on AATO of any FY since 2017-18; once triggered, permanent</td></tr>
                        <tr><td>30-Day Reporting Rule</td><td>AATO above Rs 10 crore - effective 1 April 2025; mandatory IRP upload within 30 days of invoice date</td></tr>
                        <tr><td>Exemption Notifications</td><td>Notification 13/2020-CT (initial exemptions); 23/2021-CT (government departments)</td></tr>
                        <tr><td>SEZ Exemption</td><td>Notification 61/2020-CT - SEZ Units exempt; SEZ Developers NOT exempt</td></tr>
                        <tr><td>IRPs Authorized</td><td>Notification 69/2019-CT - 10 originally notified; 6 currently operational</td></tr>
                        <tr><td>NIC Primary IRP</td><td>einvoice1.gst.gov.in (and einvoice6.gst.gov.in run by IRIS)</td></tr>
                        <tr><td>Penalty Section</td><td>Section 122 CGST Act - Rs 10,000 per invoice or 100% of tax due, whichever higher</td></tr>
                        <tr><td>2FA Requirement</td><td>Mandatory for higher AATO taxpayers (rolled out progressively from 2025)</td></tr>
                        <tr><td>Authority</td><td>CBIC and GSTN; NIC for the primary IRP</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;"><strong>Penalty for non-compliance:</strong> Rs 10,000 per invoice or 100 percent of the tax involved, whichever is higher, under Section 122 of the CGST Act. The amount is per invoice, so a missed obligation on 100 invoices in a month can attract Rs 10 lakh penalty plus tax demand.</p>
                <p style="margin-top:12px;"><strong>Buyer-side enforcement:</strong> Recipients of non-IRN invoices cannot claim ITC under Section 16(2)(a) since the invoice is not valid under Rule 48(5), creating commercial pressure on suppliers to comply.</p>
                <p style="margin-top:12px;"><strong>Proposed but not notified:</strong> Reduction of the threshold to Rs 2 crore AATO and shortening of the reporting window to 3 days for qualifying taxpayers (discussed at the GST Council, not yet implemented).</p>
                <p style="margin-top:12px;">This page is the compliance-led implementation engagement (mandate, exemptions, threshold history, lifecycle). The deep technical ERP-IRP API integration project (ERP-specific connectors, JSON schema, sandbox, idempotency, retry logic) is covered by our <a href="https://www.patronaccounting.com/e-invoicing-for-erp-and-billing-software-integration">E-Invoicing for ERP and Billing Software Integration</a> service.</p>
                <p style="margin-top:12px;">Authoritative references: <a href="https://taxinformation.cbic.gov.in/" target="_blank" rel="noopener">CBIC Tax Information Portal (Rule 48(4))</a>, <a href="https://einvoice1.gst.gov.in/" target="_blank" rel="noopener">NIC Primary IRP</a>, <a href="https://cbic-gst.gov.in/notifications.html" target="_blank" rel="noopener">CBIC GST Notifications</a>, <a href="https://www.gstn.org.in/" target="_blank" rel="noopener">GSTN</a>, and <a href="https://www.indiacode.nic.in/handle/123456789/2104" target="_blank" rel="noopener">India Code - Section 122 CGST Act</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on e-invoicing applicability, the Rs 5 crore threshold, IRN and QR codes, the 30-day reporting rule, IRP selection, exemptions, and penalties.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'E-Invoicing Implementation',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who must comply with e-invoicing in 2026?</h3>
                        <div class="faq-expanded__a"><p>Every registered taxpayer whose PAN-level aggregate annual turnover (AATO) crossed Rs 5 crore in any financial year since 2017-18 must comply with e-invoicing under Rule 48(4) of the CGST Rules. The threshold is sticky - once crossed in any past FY, the obligation continues even if current-year turnover drops below Rs 5 crore. Compliance is required for B2B supplies, B2G supplies, exports, supplies to SEZ units, and credit and debit notes issued under Section 34. Banks, NBFCs, insurance, GTA, passenger transport, multiplex operators, SEZ Units, government departments, and OIDAR providers are exempt.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is IRN and QR code on e-invoice?</h3>
                        <div class="faq-expanded__a"><p>IRN (Invoice Reference Number) is a unique 64-character alphanumeric hash generated by the Invoice Registration Portal (IRP) after authenticating the supplier invoice data. The IRP also returns a digitally signed QR code embedded with the supplier GSTIN, buyer GSTIN, invoice number, date, value, HSN, and IRN - allowing offline verification. Every e-invoice must carry both the IRN and the QR code; without them the document is invalid under Rule 48(5) and the buyer cannot claim ITC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the 30-day reporting rule for e-invoicing?</h3>
                        <div class="faq-expanded__a"><p>Effective 1 April 2025, taxpayers with PAN-level AATO above Rs 10 crore must upload every B2B invoice to the IRP within 30 days of the invoice date. If the upload happens after 30 days, the IRP rejects the submission and the invoice becomes permanently invalid - no IRN issued, no ITC for buyer, and Section 122 penalty exposure for supplier. The rule effectively forces real-time IRP submission for higher-turnover taxpayers, replacing batch month-end uploads.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Which IRP should a business use for e-invoicing?</h3>
                        <div class="faq-expanded__a"><p>Six GSTN-authorized Invoice Registration Portals are currently operational - all interoperable, meaning the same IRN is returned regardless of which portal is used. The primary IRP is einvoice1.gst.gov.in maintained by NIC (National Informatics Centre), and additional portals are run by CBIC-authorised private operators including IRIS Business Services (einvoice6.gst.gov.in), ClearTax, Cygnet, Ernst and Young, and Defmacro. Selection depends on ERP integration support, customer service, and volume-based pricing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Who is exempt from e-invoicing under Rule 48(4)?</h3>
                        <div class="faq-expanded__a"><p>Exemptions under Rule 48(4) read with Notifications 13/2020-CT, 61/2020-CT, and 23/2021-CT cover banks, Non-Banking Financial Companies (NBFCs), insurance companies, Goods Transport Agencies (GTA), passenger transportation service providers (airlines, buses, taxis, metro), multiplex cinema operators, Special Economic Zone (SEZ) Units (NOT SEZ Developers), government departments and local authorities, OIDAR providers registered under Rule 14, and Free Trade and Warehousing Zones (FTWZ). The exemption applies to the entity as a whole, not to specific transactions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the penalty for not generating e-invoices?</h3>
                        <div class="faq-expanded__a"><p>Section 122 of the CGST Act 2017 prescribes penalty of Rs 10,000 per invoice or 100 percent of the tax due on the invoice, whichever is higher, for non-compliance with Rule 48(4). Since the penalty is per invoice, missing e-invoicing obligations on 100 invoices in a month can attract Rs 10 lakh penalty plus the underlying tax demand. Additionally, Rule 48(5) declares such invoices invalid - the recipient cannot claim ITC, creating commercial pressure on the supplier from the buyer side.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How does e-invoicing integrate with ERP and GST returns?</h3>
                        <div class="faq-expanded__a"><p>After implementation, ERPs (Tally, Zoho, SAP, Oracle, Busy, custom) push invoice data to the IRP via API at the moment of invoice approval. The IRP returns IRN and QR code which the ERP embeds on the printed invoice. The IRP also pushes the data to the GST system, auto-populating GSTR-1 for the supplier, and to the e-way bill system if applicable. This eliminates the need for separate GSTR-1 entry and e-way bill generation, reducing GST reconciliation workload by 70 to 80 percent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">E-invoicing aur IRP integration kya hota hai?</h3>
                        <div class="faq-expanded__a"><p>E-invoicing ka matlab hai ki agar aapki PAN-level annual turnover 2017-18 ke baad kisi bhi FY mein Rs 5 crore se zyada ho gayi hai, to har B2B, B2G, export, aur SEZ supply ki invoice ko Invoice Registration Portal (IRP) par real-time mein authenticate karwana mandatory hai. IRP aapki invoice data ko validate karke ek 64-character ka IRN aur digitally signed QR code return karta hai. Bina IRN ke invoice invalid mani jaati hai - buyer ko ITC nahi milti aur supplier par Section 122 ka penalty (Rs 10,000 per invoice ya 100 percent tax) lagta hai. AATO Rs 10 crore se zyada wale taxpayers ke liye 30 din ke andar IRP par upload mandatory hai.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Current Threshold (2026):</strong> AATO above Rs 5 crore in any FY since 2017-18 (sticky threshold).</li>
                    <li><strong>Threshold Effective Date:</strong> 1 August 2023 (Notification 10/2023-Central Tax).</li>
                    <li><strong>30-Day Reporting Rule:</strong> AATO above Rs 10 crore - effective 1 April 2025.</li>
                    <li><strong>IRPs Available:</strong> 6 GSTN-authorized portals (all interoperable).</li>
                    <li><strong>Coverage:</strong> B2B, B2G, exports, SEZ supplies, credit and debit notes (Section 34).</li>
                    <li><strong>Key Exemptions:</strong> Banks, NBFCs, insurance, GTA, passenger transport, multiplex, SEZ Units, government, OIDAR.</li>
                    <li><strong>Penalty:</strong> Section 122 - Rs 10,000 per invoice or 100% tax, whichever higher.</li>
                    <li><strong>Buyer-Side Risk:</strong> ITC denied to recipient for invoices without valid IRN/QR.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why E-Invoicing Compliance Cannot Wait</h2>
            <div class="content-text">
                
                <p>E-invoicing non-compliance is the highest-multiplier penalty in GST - Rs 10,000 per invoice under Section 122 means 1,000 missed invoices in a year is a Rs 1 crore exposure on top of the tax demand. The 30-day reporting rule for AATO above Rs 10 crore (effective 1 April 2025) compounds the risk by making any invoice beyond 30 days permanently invalid, with no recovery path.</p>
                <p>Buyers actively refuse to accept non-IRN invoices because their ITC depends on Rule 48(5) validity, so commercial pressure builds even before the department issues a notice. Proposed reduction of the threshold to Rs 2 crore and shortening of the reporting window to 3 days are under GST Council discussion - if notified, the compliance surface expands by 3 to 4x and the reporting urgency by 10x.</p>
                <p>The implementation project takes 4 to 8 weeks - starting now means being safely live before any threshold or window changes hit. Starting fee Rs 24,999, with typical ROI through avoided penalties of Rs 10 lakh plus annually.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your E-Invoicing Implementation Live in 4 to 8 Weeks</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">E-invoicing has transformed B2B GST compliance from a downstream reporting exercise to an upstream invoice-by-invoice authentication framework - every transaction issued by a taxpayer above the Rs 5 crore AATO threshold must carry an IRP-issued IRN and QR code, with the 30-day reporting rule (effective April 2025) closing the window for batch processing.</p>
                <p style="color:rgba(255,255,255,0.92);">The implementation is a 4 to 8 week project covering applicability testing, IRP selection from 6 interoperable portals, ERP integration across Tally, Zoho, SAP, Oracle, Busy and custom systems, master data cleanup, UAT with 100+ scenario invoices, go-live cutover, and 30-day stabilisation. Patron Accounting LLP, with 15+ years of indirect tax practice and 350+ implementations at a 99.7 percent IRN success rate, runs the full project lifecycle plus an optional operations retainer.</p>
                <p style="color:rgba(255,255,255,0.92);">Pair this with <a href="https://www.patronaccounting.com/gst-returns" style="color:#fff;text-decoration:underline;">GST Returns</a> for IRN-driven GSTR-1 auto-population, or move to the deep technical build via <a href="https://www.patronaccounting.com/e-invoicing-for-erp-and-billing-software-integration" style="color:#fff;text-decoration:underline;">E-Invoicing for ERP and Billing Software Integration</a>.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%20Patron%20Accounting%2C%20I%20need%20e-invoicing%20implementation%20and%20IRP%20integration%20for%20my%20business.%20Please%20share%20the%20process%20and%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20E-Invoicing Implementation%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20E-Invoicing Implementation%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
                <div class="pa-block-sub">End-to-end support for E-Invoicing Implementation</div>
                <div class="pa-cross-grid">
                    <a href="https://www.patronaccounting.com/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-annual-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-returns-for-e-commerce-operator" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns E-Commerce</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/e-invoicing-for-erp-and-billing-software-integration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ERP-IRP Integration</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed quarterly (Tier 1 cadence) and on any CBIC notification on Rule 48(4), GST Council threshold change, 30-day-rule update, GSTN JSON schema version change, or new IRP authorisation.</p>
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
// BF-1: Last Updated mirrors schema dateModified (frozen, NOT live new Date())
(function() {
    var dateStr = '1 June 2026';
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>

