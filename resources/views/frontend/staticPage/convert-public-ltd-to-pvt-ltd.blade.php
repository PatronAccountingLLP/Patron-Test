@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Convert Public Ltd to Pvt Ltd 2026 | Patron Accounting</title>
    <meta name="description" content="Convert your public limited company to a private limited company under Section 14 with Regional Director approval. MoA and AoA alteration. From INR 49,999.">
    <link rel="canonical" href="/convert-public-ltd-to-pvt-ltd">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Convert Public Ltd to Pvt Ltd 2026 | Patron Accounting">
    <meta property="og:description" content="Convert your public limited company to a private limited company under Section 14 with Regional Director approval. MoA and AoA alteration. From INR 49,999.">
    <meta property="og:url" content="/convert-public-ltd-to-pvt-ltd">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Convert Public Ltd to Pvt Ltd 2026 | Patron Accounting">
    <meta name="twitter:description" content="Convert your public limited company to a private limited company under Section 14 with Regional Director approval. MoA and AoA alteration. From INR 49,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/convert-public-ltd-to-pvt-ltd/#service",
        "name": "Convert Public Limited to Private Limited Company",
        "description": "Conversion service that takes a public limited company private under Section 14 of the Companies Act, 2013, including special resolution, alteration of the MoA and AoA, the Regional Director application in Form RD-1, creditor notices, and ROC filings in Forms INC-28 and INC-27 in India.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/convert-public-ltd-to-pvt-ltd" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Private limited company", "sameAs": "https://en.wikipedia.org/wiki/Private_limited_company" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Public to Private Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Public Limited to Private Limited Company Conversion under Section 14" },
                    "price": "49999",
                    "priceCurrency": "INR",
                    "description": "Premium per-engagement scope covering board and EGM support, MoA and AoA alteration, the Regional Director application in Form RD-1, advertisement and notices, and the post-order ROC filings; government fees depend on the authorised share capital slab and are billed at actuals. Exl GST and Govt. Charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/convert-public-ltd-to-pvt-ltd/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Business Registration Services", "item": "https://www.patronaccounting.com/business-registration-services" },
            { "@type": "ListItem", "position": 3, "name": "Public to Private", "item": "https://www.patronaccounting.com/convert-public-ltd-to-pvt-ltd" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/convert-public-ltd-to-pvt-ltd/#faq",
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-03T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Can a public limited company be converted into a private limited company?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. A public limited company can convert into a private limited company under Section 14 of the Companies Act, 2013 by passing a special resolution, altering its MoA and AoA to add the private company restrictions, and obtaining approval from the Regional Director. The same legal entity continues with the same CIN, and the members must not exceed 200 after conversion." }
            },
            {
                "@type": "Question",
                "name": "Is NCLT or Regional Director approval required for public to private conversion?",
                "acceptedAnswer": { "@type": "Answer", "text": "Regional Director approval is required, not NCLT. The Central Government's power to approve a public-to-private conversion was delegated to the Regional Director by notification SO 6225(E) dated 18 December 2018. The company files Form RD-1 with the Regional Director within 60 days of the special resolution, and the RD passes an order after examining any creditor objections." }
            },
            {
                "@type": "Question",
                "name": "What is the process to convert a public company to a private company?",
                "acceptedAnswer": { "@type": "Answer", "text": "Hold a board meeting and call an EGM, then pass a special resolution to alter the MoA and AoA. File Form MGT-14 within 30 days, publish a newspaper advertisement and serve notices to creditors and authorities, and file Form RD-1 with the Regional Director within 60 days. After the RD order, file Form INC-28 and INC-27 within 15 days, and the ROC issues a fresh Certificate of Incorporation." }
            },
            {
                "@type": "Question",
                "name": "Which forms are filed to convert a public company to a private company?",
                "acceptedAnswer": { "@type": "Answer", "text": "Four forms are involved. Form MGT-14 reports the special resolution within 30 days. Form RD-1 is the application to the Regional Director within 60 days, with creditor lists and affidavits. After the RD order, Form INC-28 files the order with the Registrar and Form INC-27 records the conversion, both within 15 days of the order, after which a fresh Certificate of Incorporation is issued." }
            },
            {
                "@type": "Question",
                "name": "What are the conditions for converting a public company to private?",
                "acceptedAnswer": { "@type": "Answer", "text": "The members must not exceed 200 after conversion, all creditors must consent or charges must be satisfied or have a no-objection certificate, and there must be no pending prosecution, investigation or default in ROC filings. The company must also publish a newspaper advertisement and serve notices to creditors and regulators, allowing them to raise objections before the Regional Director." }
            },
            {
                "@type": "Question",
                "name": "How long does it take to convert a public company to a private company?",
                "acceptedAnswer": { "@type": "Answer", "text": "The conversion typically takes about 60 to 90 working days. This is longer than a private-to-public conversion because the Regional Director must allow time for creditor objections and may hold a hearing before passing the order. The timeline depends on creditor consents, any objections, document readiness and Regional Director processing speed." }
            },
            {
                "@type": "Question",
                "name": "Why would a company convert from public to private?",
                "acceptedAnswer": { "@type": "Answer", "text": "Companies convert from public to private after an acquisition or buyout, following a delisting from a stock exchange, or to reduce the heavier compliance and governance obligations of a public company. A private company offers tighter control through restricted share transfers and a capped membership, which suits a closely held business that no longer needs public company status." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/convert-public-ltd-to-pvt-ltd",
        "name": "Convert Public Limited to Private Limited Company",
        "description": "Convert your public limited company to a private limited company under Section 14 with Regional Director approval. MoA and AoA alteration. From INR 49,999.",
        "url": "https://www.patronaccounting.com/convert-public-ltd-to-pvt-ltd",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/convert-public-ltd-to-pvt-ltd/#service" },
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-03T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/convert-public-ltd-to-pvt-ltd/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to Convert a Public Limited Company to a Private Limited Company",
        "description": "Six steps to convert a public company to private under Section 14: hold a board meeting, pass the special resolution, file MGT-14, apply to the Regional Director in RD-1, obtain the RD order, and file INC-28 and INC-27.",
        "totalTime": "P90D",
        "step": [
            { "@type": "HowToStep", "position": 1, "name": "Hold a board meeting", "text": "Pass board resolutions to approve the conversion, alter the MoA and AoA, and call an EGM." },
            { "@type": "HowToStep", "position": 2, "name": "Pass the special resolution", "text": "At the EGM, pass a special resolution (75% of votes) approving conversion and the altered MoA and AoA under Section 14." },
            { "@type": "HowToStep", "position": 3, "name": "File MGT-14", "text": "File Form MGT-14 with the special resolution and altered documents within 30 days of the EGM." },
            { "@type": "HowToStep", "position": 4, "name": "Apply to the Regional Director", "text": "File Form RD-1 with the Regional Director within 60 days, with creditor lists, affidavits, and proof of newspaper advertisement and notices." },
            { "@type": "HowToStep", "position": 5, "name": "Obtain the RD order", "text": "The Regional Director examines objections, may hold a hearing, and passes an order approving the conversion." },
            { "@type": "HowToStep", "position": 6, "name": "File INC-28 and INC-27", "text": "File the RD order in Form INC-28 and the conversion in Form INC-27 within 15 days; the ROC issues a fresh Certificate of Incorporation." }
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
        "name": "Public to Private Key Terms",
        "definedTerm": [
            { "@type": "DefinedTerm", "name": "Section 14", "description": "The provision allowing alteration of articles to convert a company's class." },
            { "@type": "DefinedTerm", "name": "Regional Director (RD)", "description": "The Central Government authority that approves public-to-private conversion." },
            { "@type": "DefinedTerm", "name": "Form RD-1", "description": "The application to the Regional Director, filed within 60 days of the resolution." },
            { "@type": "DefinedTerm", "name": "Form INC-28", "description": "The form to file the RD's order with the Registrar within 15 days." }
        ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-5.css') }}?v=1">
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
                        Convert Public Limited to Private Limited Company
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Trigger:</span> post-acquisition, delisting, or to reduce public company compliance.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> conversion starting from INR 49,999 (Exl GST and Govt. Charges).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> members must not exceed 200; creditor consent required.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> typically 60 to 90 working days including RD approval.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Public to Private%20Services&body=Hello%2C%20I%20just%20visited%20your%20Public%20to%20Private%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Public%20to%20Private%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Public to Private',
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
    'ctaText'    => 'From the special resolution and MoA and AoA alteration to the Regional Director order, companies trust Patron Accounting for their public to private conversion.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What It Means</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">When to Convert</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Why a Professional</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Public vs Private</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Public Ltd to Pvt Ltd Conversion: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Public to Private Services at a Glance</strong></p>
                    <p>A public company converts to private under Section 14 by special resolution, altering the MoA and AoA, and obtaining Regional Director approval in Form RD-1. Members must not exceed 200. Patron Accounting handles it end to end from INR 49,999.</p>
                </div>
                <p><div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Companies Act, 2013 (Sections 14, 18); Rule 41, Incorporation Rules 2014</td></tr>
                        <tr><td>Approving Authority</td><td>Regional Director (delegated by Central Government, not NCLT)</td></tr>
                        <tr><td>Approval</td><td>Special resolution at EGM (75%); Form RD-1 within 60 days</td></tr>
                        <tr><td>Key Filings</td><td>MGT-14 (30 days); RD-1 (60 days); INC-28 and INC-27 (15 days of order)</td></tr>
                        <tr><td>Condition</td><td>Members must not exceed 200; creditor consent required</td></tr>
                        <tr><td>Cost</td><td>Conversion from INR 49,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Timeline</td><td>About 60 to 90 working days</td></tr>
                    </tbody>
                </table>
                </div></p>
                <p>Companies usually convert from public to private after an acquisition, a delisting, or a decision to reduce the heavier compliance of a public company. Government filing fees depend on the authorised share capital slab and are billed at actuals.</p>
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
                <h2 class="section-title">What Does Converting Public Ltd to Pvt Ltd Mean?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Converting a public limited company to a private limited company means altering the MoA and AoA under Section 14 of the Companies Act, 2013 to add the private company restrictions in Section 2(68), with the change approved by the Regional Director.</strong> The same legal entity continues with the same CIN; only its class changes from public to private.</p>
                    <p>A private company caps membership at <strong>200 members</strong>, restricts share transfers and cannot invite the public to subscribe, but it has lighter governance than a public company. The conversion needs creditor consent and a Regional Director order before it takes effect.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Public to Private:</strong></p>
                    <ul>
                        <li><strong>Section 14:</strong> the provision allowing alteration of articles to convert a company's class.</li>
                        <li><strong>Regional Director (RD):</strong> the Central Government authority that approves public-to-private conversion.</li>
                        <li><strong>Form RD-1:</strong> the application to the Regional Director, filed within 60 days of the resolution.</li>
                        <li><strong>Form INC-28:</strong> the form to file the RD's order with the Registrar within 15 days.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Public to Private</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 14</span>
                        <strong>RD-1 | INC-27</strong>
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
            <h2 class="section-title">When Should You Convert to a Private Company?</h2>
            <div class="content-text">
                
                <p>Conversion suits a public company after a <strong>buyout or delisting</strong>, or when a company wants closer control and lower compliance. It is common when a small public company has effectively become closely held and no longer needs public-company status.</p>
                <p>Before applying, the company must ensure its <strong>members do not exceed 200</strong>, all creditors consent or charges are satisfied, there is no pending prosecution or investigation, and all ROC filings are up to date. These conditions are checked by the Regional Director.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Conversion Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility review</td><td>Checking the 200-member cap, charges, creditors and filing status.</td></tr>
                        <tr><td>Board and EGM support</td><td>Drafting notices, special resolution and minutes.</td></tr>
                        <tr><td>MoA and AoA alteration</td><td>Redrafting to add private company restrictions.</td></tr>
                        <tr><td>RD application</td><td>Preparing and filing Form RD-1 with creditor lists and affidavits.</td></tr>
                        <tr><td>Advertisement and notices</td><td>Newspaper advertisement and notices to creditors and authorities.</td></tr>
                        <tr><td>ROC filings</td><td>Filing MGT-14, and INC-28 and INC-27 after the RD order.</td></tr>

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
            <h2 class="section-title">Conversion Process: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From the board meeting and special resolution to the Regional Director order and the fresh Certificate of Incorporation, here is how Patron Accounting takes a public company private end to end.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Hold a board meeting</h3>
        <p class="step-description">Pass board resolutions to approve the conversion, alter the MoA and AoA, and call an EGM.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board resolutions</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EGM called</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="30" width="80" height="44" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="52" r="7" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="60" cy="52" r="7" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="80" cy="52" r="7" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="70" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">Board</text></svg>
            </div>
            <span class="illustration-label">Board Meeting</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Pass the special resolution</h3>
        <p class="step-description">At the EGM, pass a special resolution (75% of votes) approving conversion and the altered MoA and AoA under Section 14.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 75% majority</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MoA / AoA altered</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22" y="20" width="76" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="11" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">75%</text><text x="60" y="58" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">Special Resln</text><text x="60" y="70" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">EGM</text></svg>
            </div>
            <span class="illustration-label">Special Resolution</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">File MGT-14</h3>
        <p class="step-description">File Form MGT-14 with the special resolution and altered documents within 30 days of the EGM.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MGT-14 filed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Within 30 days</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="26" y="14" width="62" height="74" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="57" y="34" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">MGT-14</text><line x1="38" y1="46" x2="76" y2="46" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="38" y1="56" x2="70" y2="56" stroke="#14365F" stroke-width="2" opacity="0.3"/><text x="57" y="76" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">30 days</text></svg>
            </div>
            <span class="illustration-label">Resolution Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Apply to the Regional Director</h3>
        <p class="step-description">File Form RD-1 with the Regional Director within 60 days, with creditor lists, affidavits, and proof of newspaper advertisement and notices.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> RD-1 filed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Within 60 days</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22" y="18" width="76" height="64" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="10" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">RD-1</text><text x="60" y="56" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">Regional Dir</text><text x="60" y="70" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">60 days</text></svg>
            </div>
            <span class="illustration-label">RD Application</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Obtain the RD order</h3>
        <p class="step-description">The Regional Director examines objections, may hold a hearing, and passes an order approving the conversion.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Objections heard</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Order passed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22" y="22" width="76" height="56" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="44" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">RD ORDER</text><circle cx="60" cy="62" r="9" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M55 62l3 3 6-7" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">RD Approval</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">File INC-28 and INC-27</h3>
        <p class="step-description">File the RD order in Form INC-28 and the conversion in Form INC-27 within 15 days; the ROC issues a fresh Certificate of Incorporation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> INC-28 / INC-27</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fresh COI</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="22" width="80" height="56" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">INC-28/27</text><text x="60" y="56" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">Fresh COI</text><circle cx="60" cy="68" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M56 68l3 3 5-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">Now Private</span>
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
            <h2 class="section-title">Documents Required for Conversion</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Board and EGM resolutions:</strong> approving the conversion.</li>
                    <li><strong>Altered MoA and AoA:</strong> adding private company restrictions.</li>
                    <li><strong>List of creditors and debenture holders:</strong> with their consent or NOC.</li>
                    <li><strong>Newspaper advertisement:</strong> and notices to creditors, ROC and regulators.</li>
                    <li><strong>Affidavits and declarations:</strong> confirming no default, prosecution or dispute.</li>
                    <li><strong>Latest financial statements:</strong> and PCS certificate.</li>
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
                        <tr><td>Members exceeding 200</td><td>A private company caps members at 200</td><td>We restructure shareholding to meet the private company cap</td></tr>
                        <tr><td>Creditor objections at RD stage</td><td>Creditors can object before the RD</td><td>We obtain consents and NOCs and represent at the RD hearing</td></tr>
                        <tr><td>Missed MGT-14 or RD-1 timelines</td><td>The 30-day and 60-day windows are strict</td><td>We file within the 30-day and 60-day limits to avoid penalties</td></tr>
                        <tr><td>Pending charges or defaults</td><td>Open charges or defaults block approval</td><td>We clear charges and ROC defaults before applying</td></tr>

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
            <h2 class="section-title">Conversion Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 49,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Government filing fees</td><td>Depend on the authorised share capital slab; at actuals</td></tr>
                        <tr><td>Newspaper advertisement</td><td>At actuals, depending on state and newspapers</td></tr>
                        <tr><td>Professional certification</td><td>PCS or auditor certification, scoped separately</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Public to Private consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Public%20to%20Private%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Conversion Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Conversion (overall)</td><td>About 60 to 90 working days</td></tr>
                        <tr><td>Regional Director examination</td><td>Includes objection window and possible hearing</td></tr>
                        <tr><td>Post-order ROC filings</td><td>INC-28 and INC-27 within 15 days of the order</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p>Because the Regional Director must examine objections and may hold a hearing, the timeline runs longer than a private-to-public conversion. The exact duration depends on creditor consents, any objections at the RD stage, document readiness and Regional Director processing.</p>

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
            <h2 class="section-title">Why Convert with a Professional</h2>
        </div>
        <div class="features-grid">
        <article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg></div>
            <h3 class="feature-title">Lower compliance</h3>
            <p class="feature-text">Fewer governance obligations than a public company.</p>
        </article>
        <article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3 class="feature-title">Tighter control</h3>
            <p class="feature-text">Restricted share transfers and a capped membership.</p>
        </article>
        <article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Cleaner structure</h3>
            <p class="feature-text">A streamlined entity after an acquisition or delisting.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Companies Across India</h2>
            <div class="content-text">
                
                <p style="font-weight:700;color:var(--blue);">10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Handled  |  15+ Years Experience</p>
                <p>Trusted by clients including Hyundai, Asian Paints and Bridgestone. With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Public Limited vs Private Limited Company</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Public Limited</th><th>Private Limited</th></tr></thead>
                    <tbody>
                        <tr><td>Minimum members</td><td>7</td><td>2</td></tr>
                        <tr><td>Maximum members</td><td>No limit</td><td>200</td></tr>
                        <tr><td>Share transfer</td><td>Freely transferable</td><td>Restricted</td></tr>
                        <tr><td>Public share offer</td><td>Allowed (can list)</td><td>Not allowed</td></tr>
                        <tr><td>Compliance</td><td>High, governance norms</td><td>Moderate</td></tr>

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
                
                <p>Need the underlying entity services? See <a href="/private-limited-company-registration">private limited company registration</a> and ongoing <a href="/private-limited-company-compliance">private limited company compliance</a>. Starting as a public company instead? See <a href="/public-company-registration">public company registration</a>. The conversion may also need a <a href="/change-in-object-clause">change in object clause</a> or a <a href="/change-in-authorised-capital">change in authorised capital</a>.</p>

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
                
                <p><strong>Section 14, Companies Act, 2013:</strong> allows alteration of articles to convert a public company to a private company; the alteration is not valid unless approved by the Central Government (filed via the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a>).</p>
                <p><strong>Regional Director delegation:</strong> the Central Government's approval power was delegated to the Regional Director by notification SO 6225(E) dated 18 December 2018, so the application is made in Form RD-1, not to the NCLT.</p>
                <p><strong>Rule 41, Companies (Incorporation) Rules, 2014:</strong> prescribes the RD-1 procedure, the 60-day filing window, the newspaper advertisement, notices to creditors and authorities, and the objection and hearing process.</p>
                <p><strong>Membership cap:</strong> a private company's members must not exceed 200, excluding present and former employee members, so shareholding may need restructuring before conversion.</p>

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
                    <p class="faq-expanded__lead">Common questions about converting a public limited company to a private limited company under Section 14, Regional Director (not NCLT) approval, the RD-1 process, forms, conditions and timelines.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Public to Private',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can a public limited company be converted into a private limited company?</h3>
                        <div class="faq-expanded__a"><p>Yes. A public limited company can convert into a private limited company under Section 14 of the Companies Act, 2013 by passing a special resolution, altering its MoA and AoA to add the private company restrictions, and obtaining approval from the Regional Director. The same legal entity continues with the same CIN, and the members must not exceed 200 after conversion.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is NCLT or Regional Director approval required for public to private conversion?</h3>
                        <div class="faq-expanded__a"><p>Regional Director approval is required, not NCLT. The Central Government's power to approve a public-to-private conversion was delegated to the Regional Director by notification SO 6225(E) dated 18 December 2018. The company files Form RD-1 with the Regional Director within 60 days of the special resolution, and the RD passes an order after examining any creditor objections.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the process to convert a public company to a private company?</h3>
                        <div class="faq-expanded__a"><p>Hold a board meeting and call an EGM, then pass a special resolution to alter the MoA and AoA. File Form MGT-14 within 30 days, publish a newspaper advertisement and serve notices to creditors and authorities, and file Form RD-1 with the Regional Director within 60 days. After the RD order, file Form INC-28 and INC-27 within 15 days, and the ROC issues a fresh Certificate of Incorporation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Which forms are filed to convert a public company to a private company?</h3>
                        <div class="faq-expanded__a"><p>Four forms are involved. Form MGT-14 reports the special resolution within 30 days. Form RD-1 is the application to the Regional Director within 60 days, with creditor lists and affidavits. After the RD order, Form INC-28 files the order with the Registrar and Form INC-27 records the conversion, both within 15 days of the order, after which a fresh Certificate of Incorporation is issued.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the conditions for converting a public company to private?</h3>
                        <div class="faq-expanded__a"><p>The members must not exceed 200 after conversion, all creditors must consent or charges must be satisfied or have a no-objection certificate, and there must be no pending prosecution, investigation or default in ROC filings. The company must also publish a newspaper advertisement and serve notices to creditors and regulators, allowing them to raise objections before the Regional Director.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does it take to convert a public company to a private company?</h3>
                        <div class="faq-expanded__a"><p>The conversion typically takes about 60 to 90 working days. This is longer than a private-to-public conversion because the Regional Director must allow time for creditor objections and may hold a hearing before passing the order. The timeline depends on creditor consents, any objections, document readiness and Regional Director processing speed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Why would a company convert from public to private?</h3>
                        <div class="faq-expanded__a"><p>Companies convert from public to private after an acquisition or buyout, following a delisting from a stock exchange, or to reduce the heavier compliance and governance obligations of a public company. A private company offers tighter control through restricted share transfers and a capped membership, which suits a closely held business that no longer needs public company status.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Public limited ko private limited me kaise convert kare?</h3>
                        <div class="faq-expanded__a"><p>Special resolution paas karo, MoA aur AoA alter karo, aur Regional Director se Form RD-1 par approval lo. Patron Accounting poora process sambhal leta hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Which section?</strong> Section 14 read with Section 18, Companies Act, 2013.</li>
                    <li><strong>Who approves?</strong> The Regional Director (not NCLT).</li>
                    <li><strong>Which forms?</strong> MGT-14, RD-1, then INC-28 and INC-27.</li>
                    <li><strong>Member cap?</strong> Members must not exceed 200.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Planning a Delisting or Buyout Restructuring?</h2>
            <div class="content-text">
                
                <p>A public-to-private conversion is a regulated, objection-driven process before the Regional Director where creditor consents, advertisements and timelines must be handled precisely. Professional handling keeps the application clean and the order on track.</p>
                <p><strong>Call +91 945 945 6700 or message us on WhatsApp for a free, no-obligation quote on your Public Ltd to Pvt Ltd conversion.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Conversion Today</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:#FFFFFF;">Converting a public limited company to a private limited company is a post-acquisition or delisting restructuring carried out under Section 14 of the Companies Act, 2013 with Regional Director approval. It needs a special resolution, a clean alteration of the MoA and AoA, creditor consents, newspaper advertisement, and timely filing of Forms MGT-14, RD-1, INC-28 and INC-27.</p>
                <p style="color:#FFFFFF;">Patron Accounting, with 15+ years of experience and a CA and CS team, manages approvals, the RD application and ROC filings end to end so the conversion clears the Regional Director without delay.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Public%20to%20Private%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Public to Private%20Services&body=Hello%2C%20I%20just%20visited%20your%20Public%20to%20Private%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
                    <div class="pa-block-sub">Conversions, registrations and structural changes</div>
                    <div class="pa-cross-grid"><a href="/business-registration-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Business Registration Services</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Compliance</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/public-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Public Company Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/change-in-object-clause" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change in Object Clause</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/change-in-authorised-capital" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change in Authorised Capital</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/convert-llp-to-private-limited-company" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Convert LLP to Pvt Ltd</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 3 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 3 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months or whenever the Companies Act, Rule 41 of the Incorporation Rules, or the Regional Director jurisdiction and forms change, so the public to private conversion guidance stays current.</p>
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
    var dateStr = '3 June 2026';
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
