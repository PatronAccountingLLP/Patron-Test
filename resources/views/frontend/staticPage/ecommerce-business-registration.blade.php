@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Ecommerce Business Registration in India 2026 | Patron Accounting</title>
    <meta name="description" content="Register your ecommerce business in India: Pvt Ltd plus mandatory GST under Section 24, with IEC and DPIIT. Built for marketplace sellers. From INR 9,999.">
    <link rel="canonical" href="/ecommerce-business-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Ecommerce Business Registration in India 2026 | Patron Accounting">
    <meta property="og:description" content="Register your ecommerce business in India: Pvt Ltd plus mandatory GST under Section 24, with IEC and DPIIT. Built for marketplace sellers. From INR 9,999.">
    <meta property="og:url" content="/ecommerce-business-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ecommerce Business Registration in India 2026 | Patron Accounting">
    <meta name="twitter:description" content="Register your ecommerce business in India: Pvt Ltd plus mandatory GST under Section 24, with IEC and DPIIT. Built for marketplace sellers. From INR 9,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/ecommerce-business-registration/#service",
        "name": "Ecommerce Business Registration",
        "description": "Bundled registration service for e-commerce sellers in India, covering private limited company incorporation, mandatory GST registration under Section 24 with TCS-ready compliance, Import Export Code for cross-border sales, DPIIT startup recognition, and multi-platform and multi-state setup for Amazon, Flipkart, Meesho and own-store sellers.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/ecommerce-business-registration" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "E-commerce", "sameAs": "https://en.wikipedia.org/wiki/E-commerce" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Ecommerce Business Registration Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Ecommerce Business Registration Bundle (Pvt Ltd and GST base)" },
                    "price": "9999",
                    "priceCurrency": "INR",
                    "description": "Core e-commerce setup with private limited company and mandatory GST registration, TCS-ready; IEC, DPIIT and additional state registrations added modularly. Exl GST and Govt. Charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/ecommerce-business-registration/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Business Registration Services", "item": "https://www.patronaccounting.com/business-registration-services" },
            { "@type": "ListItem", "position": 3, "name": "Ecommerce Business Registration", "item": "https://www.patronaccounting.com/ecommerce-business-registration" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/ecommerce-business-registration/#faq",
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-03T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How do I register an ecommerce business in India?",
                "acceptedAnswer": { "@type": "Answer", "text": "You set up an entity and the tax and trade registrations an online seller needs. Most sellers register a private limited company for credibility and scaling, then complete GST registration, which is mandatory for marketplace sellers under Section 24, and add an IEC for cross-border sales of goods and DPIIT recognition if they are an eligible startup. The platform then collects TCS on your sales, which you reconcile and claim as credit. We bundle the right set for your model." }
            },
            {
                "@type": "Question",
                "name": "Is GST registration mandatory for ecommerce sellers?",
                "acceptedAnswer": { "@type": "Answer", "text": "For sellers supplying goods through a marketplace e-commerce operator that collects TCS, yes, GST registration is mandatory from the first sale under Section 24 of the CGST Act, with no INR 20 lakh threshold. There are limited relaxations: service suppliers through platforms are generally exempt below INR 20 lakh unless TCS applies, and a 2023 notification allows small goods suppliers to sell through ECOs without registration in specific cases. We confirm which rule applies to you." }
            },
            {
                "@type": "Question",
                "name": "Which business structure is best for ecommerce?",
                "acceptedAnswer": { "@type": "Answer", "text": "A private limited company is generally preferred for e-commerce that intends to scale, because it offers credibility with platforms and investors, supports foreign investment, and handles multi-platform and multi-state TCS reconciliation cleanly. A proprietorship or LLP can work for a smaller or single-channel seller. The right structure depends on your scale, funding plans and number of platforms, which we assess before setting up." }
            },
            {
                "@type": "Question",
                "name": "What is TCS in ecommerce GST?",
                "acceptedAnswer": { "@type": "Answer", "text": "Tax Collected at Source is an amount the e-commerce operator collects on your sales under Section 52 of the CGST Act. The platform deducts TCS at 1%, being 0.5% CGST plus 0.5% SGST for intra-state sales or 1% IGST for inter-state sales, on the net value of taxable supplies made through it, and deposits it with the government while filing GSTR-8. As a seller you can claim this TCS as a credit in your GST returns and adjust it against your liability." }
            },
            {
                "@type": "Question",
                "name": "Do I need GST to sell on Amazon or Flipkart?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. To sell goods on Amazon, Flipkart, Meesho or any marketplace that collects TCS, you need a GST registration before you list your first product, regardless of turnover, because Section 24 of the CGST Act overrides the small-supplier exemption. There is no grace period and no minimum-turnover exception for marketplace goods sellers. We register you so you are GSTIN-ready to onboard to the platforms." }
            },
            {
                "@type": "Question",
                "name": "Do I need GST for my own ecommerce website (D2C)?",
                "acceptedAnswer": { "@type": "Answer", "text": "If you sell only through your own website and not through a third-party marketplace, you are not selling through an ECO, so the Section 24 override does not directly apply, and your GST requirement follows the normal turnover threshold of INR 20 lakh, or INR 10 lakh in special-category states. However, most D2C brands ship across state lines, and inter-state supply of goods makes GST registration mandatory regardless of turnover, so in practice most D2C sellers need GST." }
            },
            {
                "@type": "Question",
                "name": "Do ecommerce businesses need an IEC?",
                "acceptedAnswer": { "@type": "Answer", "text": "An Import Export Code is required if your e-commerce business imports or exports goods, for example selling to customers abroad or sourcing products internationally. For purely domestic online selling, an IEC is not needed. Many e-commerce sellers obtain an IEC early because cross-border selling is a common growth step, and it is quick to get. We add it to your bundle where your model involves cross-border trade." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/ecommerce-business-registration",
        "name": "Ecommerce Business Registration",
        "description": "Register your ecommerce business in India: Pvt Ltd plus mandatory GST under Section 24, with IEC and DPIIT. Built for marketplace sellers. From INR 9,999.",
        "url": "https://www.patronaccounting.com/ecommerce-business-registration",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/ecommerce-business-registration/#service" },
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-03T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/ecommerce-business-registration/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to Register an Ecommerce Business in India",
        "description": "Six steps to set up an e-commerce business in India: choose the structure, incorporate the company, register for GST under Section 24, add IEC and DPIIT, onboard to platforms, and set up compliance.",
        "totalTime": "P14D",
        "step": [
            { "@type": "HowToStep", "position": 1, "name": "Choose the structure", "text": "Select the entity, usually a private limited company for scaling e-commerce." },
            { "@type": "HowToStep", "position": 2, "name": "Incorporate the company", "text": "Register the company through SPICe+ with auto PAN and TAN." },
            { "@type": "HowToStep", "position": 3, "name": "Register for GST", "text": "Complete the mandatory GST registration under Section 24 for marketplace sales." },
            { "@type": "HowToStep", "position": 4, "name": "Add IEC and DPIIT", "text": "Obtain an IEC for cross-border goods and DPIIT recognition if eligible." },
            { "@type": "HowToStep", "position": 5, "name": "Onboard to platforms", "text": "Set up the seller accounts and TCS-ready invoicing and HSN codes." },
            { "@type": "HowToStep", "position": 6, "name": "Set up compliance", "text": "Put GST returns, TCS reconciliation and company compliance in place." }
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
        "name": "Ecommerce Business Registration Key Terms",
        "definedTerm": [
            { "@type": "DefinedTerm", "name": "ECO", "description": "E-commerce operator, the marketplace (Amazon, Flipkart, Meesho) that collects payment." },
            { "@type": "DefinedTerm", "name": "Section 24", "description": "The CGST provision making GST registration mandatory for marketplace sellers." },
            { "@type": "DefinedTerm", "name": "TCS (Section 52)", "description": "The 1% tax the platform collects on your net sales, claimable as credit." },
            { "@type": "DefinedTerm", "name": "Section 9(5)", "description": "Notified services where the platform, not the seller, pays the GST." }
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
                        Ecommerce Business Registration
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>What it is:</span> the registrations an online seller needs, bundled and done for you.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Ecommerce registration bundle starting from INR 9,999 (Exl GST and Govt. Charges).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Typical bundle:</span> Pvt Ltd + GST (mandatory) + IEC (for cross-border) + DPIIT.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Key rule:</span> GST is mandatory for marketplace sellers under Section 24, regardless of turnover.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Ecommerce Business Registration%20Services&body=Hello%2C%20I%20just%20visited%20your%20Ecommerce%20Business%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Ecommerce%20Business%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Ecommerce Business Registration',
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
    'ctaText'    => 'From company and GST to TCS-ready compliance, online sellers trust Patron Accounting to set up their e-commerce business right.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What It Involves</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Needs It</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">The Bundle</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Registering an Ecommerce Business: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Ecommerce Business Registration Services at a Glance</strong></p>
                    <p>An e-commerce business usually needs an entity (a private limited company is preferred for scaling), and GST registration is mandatory for sellers supplying goods through a marketplace under Section 24, regardless of turnover. Add IEC for cross-border sales and DPIIT for startup benefits. Platforms collect TCS, which you claim as credit. Patron Accounting bundles it from INR 9,999.</p>
                </div>
                <p><div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>What you need</th><th>When</th><th>Why</th></tr></thead>
                    <tbody>
                        <tr><td>Entity (Pvt Ltd preferred)</td><td>To trade and scale</td><td>Credibility, FDI, multi-platform compliance</td></tr>
                        <tr><td>GST registration</td><td>Mandatory for marketplace goods sellers</td><td>Section 24, no turnover threshold</td></tr>
                        <tr><td>IEC</td><td>For cross-border sales of goods</td><td>Required for export/import</td></tr>
                        <tr><td>DPIIT recognition</td><td>If an eligible startup</td><td>Tax holiday and startup benefits</td></tr>
                        <tr><td>TCS handling</td><td>Once selling on platforms</td><td>Claim platform TCS as credit</td></tr>
                    </tbody>
                </table>
                </div></p>
                <p>The single most important point: if you sell goods through a marketplace, GST is not optional, whatever your turnover. Whether a specific seller falls in the mandatory-registration limb or a relaxation depends on the goods or services, platform and states, which we confirm case by case.</p>
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
                <h2 class="section-title">What Does Ecommerce Registration Involve?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Ecommerce business registration is setting up the entity and the tax and trade registrations an online seller needs to operate legally and on the platforms.</strong> For most sellers that means a company, mandatory GST and, where relevant, IEC and DPIIT.</p>
                    <p>The defining feature is <strong>mandatory GST</strong>: under Section 24 of the CGST Act, a person supplying goods through a marketplace e-commerce operator that collects TCS must register for GST regardless of turnover, so the usual INR 20 lakh exemption does not apply. The platform then collects TCS, which you reconcile and claim as credit.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Ecommerce Business Registration:</strong></p>
                    <ul>
                        <li><strong>ECO:</strong> e-commerce operator, the marketplace (Amazon, Flipkart, Meesho) that collects payment.</li>
                        <li><strong>Section 24:</strong> the CGST provision making GST registration mandatory for marketplace sellers.</li>
                        <li><strong>TCS (Section 52):</strong> the 1% tax the platform collects on your net sales, claimable as credit.</li>
                        <li><strong>Section 9(5):</strong> notified services where the platform, not the seller, pays the GST.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Ecommerce Business Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>The Bundle</span>
                        <strong>Pvt Ltd | GST | IEC | DPIIT</strong>
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
            <h2 class="section-title">Who Needs Ecommerce Registration?</h2>
            <div class="content-text">
                
                <p>Anyone <strong>selling goods online through a marketplace</strong> - Amazon, Flipkart, Meesho, Myntra, Nykaa and similar - needs GST registration from the first sale under Section 24, plus an entity to trade under. The same applies if you run your own marketplace as an e-commerce operator, with TCS obligations under Section 52.</p>
                <p>There are some nuances: <strong>service providers</strong> selling through platforms are generally exempt below INR 20 lakh unless TCS applies, and under a 2023 notification small goods sellers can sell through ECOs without registration in limited cases. If you sell <strong>only through your own website (D2C)</strong>, you are not selling through an ECO, so it depends on turnover and inter-state rules - but most D2C brands ship nationally, which makes GST mandatory anyway. We confirm exactly what you need.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Ecommerce Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Company setup</td><td>Private limited company registration as your e-commerce vehicle.</td></tr>
                        <tr><td>GST registration</td><td>Mandatory GST registration, set up TCS-ready for marketplaces.</td></tr>
                        <tr><td>IEC registration</td><td>Import Export Code for cross-border sales of goods.</td></tr>
                        <tr><td>DPIIT recognition</td><td>Startup recognition for eligible e-commerce startups.</td></tr>
                        <tr><td>Multi-state and multi-platform</td><td>Registrations across states and platforms where needed.</td></tr>
                        <tr><td>Ongoing compliance</td><td>GST returns including GSTR-8 reconciliation and company compliance.</td></tr>

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
            <h2 class="section-title">Ecommerce Setup Process: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From choosing the structure to TCS-ready compliance, here is how Patron Accounting gets an online seller fully set up and platform-ready, usually within a couple of weeks.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Choose the structure</h3>
        <p class="step-description">Select the entity, usually a private limited company for scaling e-commerce.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Structure chosen</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scale weighed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="40" width="28" height="28" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><rect x="74" y="40" width="28" height="28" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M52 54h16" stroke="#14365F" stroke-width="2" opacity="0.5"/><circle cx="60" cy="26" r="6" fill="#25D366" opacity="0.3" stroke="#25D366" stroke-width="1.5"/></svg>
            </div>
            <span class="illustration-label">Structure Set</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Incorporate the company</h3>
        <p class="step-description">Register the company through SPICe+ with auto PAN and TAN.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pvt Ltd incorporated</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN and TAN issued</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="12" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="45" x2="78" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="58" x2="70" y2="58" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Company Set Up</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Register for GST</h3>
        <p class="step-description">Complete the mandatory GST registration under Section 24 for marketplace sales.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTIN issued</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 24 covered</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="48" font-size="16" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GST</text><line x1="34" y1="60" x2="86" y2="60" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="92" cy="28" r="4" fill="#25D366"/></svg>
            </div>
            <span class="illustration-label">GST Registered</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Add IEC and DPIIT</h3>
        <p class="step-description">Obtain an IEC for cross-border goods and DPIIT recognition if eligible.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IEC obtained</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DPIIT recognised</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><ellipse cx="60" cy="50" rx="11" ry="28" fill="none" stroke="#14365F" stroke-width="1.2" opacity="0.4"/><line x1="32" y1="50" x2="88" y2="50" stroke="#14365F" stroke-width="1.2" opacity="0.4"/><path d="M40 38a26 26 0 0140 0" fill="none" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="50" r="3" fill="#25D366"/></svg>
            </div>
            <span class="illustration-label">IEC and DPIIT Done</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Onboard to platforms</h3>
        <p class="step-description">Set up the seller accounts and TCS-ready invoicing and HSN codes.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Seller accounts live</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> HSN codes set</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="16" y="30" width="38" height="44" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="66" y="30" width="38" height="44" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M26 44h18M26 54h14" stroke="#14365F" stroke-width="2" opacity="0.35" stroke-linecap="round"/><path d="M74 50l6 6 14-14" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">Platforms Onboarded</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Set up compliance</h3>
        <p class="step-description">Put GST returns, TCS reconciliation and company compliance in place.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-8 reconciled</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance scheduled</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22" y="16" width="76" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-8</text><line x1="34" y1="52" x2="86" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><path d="M70 66l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">Compliance Live</span>
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
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Directors' KYC:</strong> PAN, Aadhaar, photographs and address proof.</li>
                    <li><strong>Registered office proof:</strong> rent agreement or ownership with a utility bill and NOC.</li>
                    <li><strong>Bank details:</strong> for the business current account.</li>
                    <li><strong>Business details:</strong> the proposed name, objects and product or service categories.</li>
                    <li><strong>HSN or SAC codes:</strong> for the products or services to be listed.</li>
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
                        <tr><td>GST mandatory but unclear scope</td><td>Sellers miss the Section 24 trigger</td><td>We confirm Section 24 applicability and register correctly</td></tr>
                        <tr><td>Multi-state and multi-platform GST</td><td>Each state and platform adds complexity</td><td>We handle registrations and reconciliation across states</td></tr>
                        <tr><td>TCS credit not reconciling</td><td>Platform TCS does not match returns</td><td>We reconcile platform TCS against GSTR-2B and returns</td></tr>
                        <tr><td>D2C vs marketplace confusion</td><td>The rule differs by sales channel</td><td>We map the right rule to your sales channel</td></tr>

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
            <h2 class="section-title">Ecommerce Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>MCA / SPICe+ incorporation government fees</td><td>As per MCA schedule, based on authorised capital and state</td></tr>
                        <tr><td>IEC, DPIIT and additional state registrations</td><td>Transparent, modular fees added per requirement</td></tr>
                        <tr><td>Ongoing GST and company compliance</td><td>Available separately on a monthly or annual basis</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Ecommerce Business Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Ecommerce%20Business%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does It Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Company incorporation</td><td>About 7 to 12 working days</td></tr>
                        <tr><td>GST registration</td><td>About 3 to 7 working days with Aadhaar e-KYC</td></tr>
                        <tr><td>IEC</td><td>About 7 to 15 days</td></tr>
                        <tr><td>DPIIT recognition</td><td>A week or two</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p>We typically get an e-commerce seller fully set up and platform-ready within a couple of weeks, running the registrations in parallel.</p>

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
            <h2 class="section-title">Why Set Up Properly for Ecommerce</h2>
        </div>
        <div class="features-grid">
        <article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <h3 class="feature-title">Platform-ready</h3>
            <p class="feature-text">A GSTIN and entity in place before you list on Amazon, Flipkart or your own store.</p>
        </article>
        <article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
            <h3 class="feature-title">TCS-ready</h3>
            <p class="feature-text">Set up to reconcile and claim platform TCS credit against your GST liability.</p>
        </article>
        <article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 4 4 5-6"/></svg></div>
            <h3 class="feature-title">Built to scale</h3>
            <p class="feature-text">A Pvt Ltd structure for multi-platform growth, multi-state compliance and FDI.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Online Sellers Across India</h2>
            <div class="content-text">
                
                <p style="font-weight:700;color:var(--blue);">10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Handled  |  15+ Years Experience</p>
                <p>Trusted by clients including Hyundai, Asian Paints and Bridgestone. With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting sets up and supports e-commerce sellers on Amazon, Flipkart, Meesho and their own stores both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The Ecommerce Registration Bundle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Registration</th><th>Who needs it</th><th>Note</th></tr></thead>
                    <tbody>
                        <tr><td>Private limited company</td><td>Preferred for scaling sellers</td><td>Multi-platform, FDI-ready</td></tr>
                        <tr><td>GST registration</td><td>Marketplace goods sellers (mandatory)</td><td>Section 24, no threshold</td></tr>
                        <tr><td>IEC</td><td>Cross-border sellers of goods</td><td>For export/import</td></tr>
                        <tr><td>DPIIT recognition</td><td>Eligible startups</td><td>Tax holiday and benefits</td></tr>

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
                
                <p>This page bundles what an online seller needs. Each is available on its own:</p>
                <ul>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - the preferred e-commerce vehicle.</li>
                    <li><a href="/gst-registration">GST Registration</a> - mandatory for marketplace goods sellers.</li>
                    <li><a href="/iec-registration">IEC Registration</a> - the Import Export Code for cross-border sales.</li>
                    <li><a href="/startup-registration">Startup (DPIIT) Registration</a> - DPIIT recognition for eligible e-commerce startups.</li>
                    <li><a href="/gst-returns-for-e-commerce-operator">GST Returns for E-Commerce Operators</a> - GSTR-8 and TCS reconciliation.</li>
                    <li><a href="/accounting-services-for-e-commerce-industry">Accounting Services for the E-Commerce Industry</a> - accounting built for online sellers.</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - ongoing ROC and statutory compliance.</li>
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
                
                <p><strong>Mandatory GST (Section 24):</strong> under Section 24 of the CGST Act, e-commerce operators must register regardless of turnover, and persons supplying goods through an ECO that collects TCS must also register regardless of turnover, so the standard threshold exemption does not apply to marketplace goods sellers (see the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>).</p>
                <p><strong>Relaxations and D2C:</strong> service suppliers through ECOs are generally exempt below INR 20 lakh unless TCS applies, Notification 34/2023 lets small goods suppliers sell through ECOs without registration in limited cases, and a seller using only its own website is not through an ECO, so its registration follows the normal turnover and inter-state rules.</p>
                <p><strong>TCS (Section 52) and Section 9(5):</strong> the e-commerce operator collects TCS at 1% on the net value of taxable supplies and files GSTR-8, with the seller claiming the TCS as credit; for notified services under Section 9(5) such as restaurant, accommodation and cab services, the operator is deemed the supplier and pays the GST (see <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a>).</p>
                <p><strong>Structure and FDI:</strong> a private limited company is the preferred structure for scaling e-commerce, supporting multi-platform and multi-state compliance, credibility and FDI, with the marketplace model permitting 100% FDI under the automatic route while the inventory-based B2C model has restrictions. An <a href="https://www.dgft.gov.in" target="_blank" rel="noopener">IEC from the DGFT</a> is needed for cross-border trade.</p>

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
                    <p class="faq-expanded__lead">Common questions about registering an e-commerce business, mandatory GST under Section 24, TCS and the right structure.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Ecommerce Business Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I register an ecommerce business in India?</h3>
                        <div class="faq-expanded__a"><p>You set up an entity and the tax and trade registrations an online seller needs. Most sellers register a private limited company for credibility and scaling, then complete GST registration, which is mandatory for marketplace sellers under Section 24, and add an IEC for cross-border sales of goods and DPIIT recognition if they are an eligible startup. The platform then collects TCS on your sales, which you reconcile and claim as credit. We bundle the right set for your model.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is GST registration mandatory for ecommerce sellers?</h3>
                        <div class="faq-expanded__a"><p>For sellers supplying goods through a marketplace e-commerce operator that collects TCS, yes, GST registration is mandatory from the first sale under Section 24 of the CGST Act, with no INR 20 lakh threshold. There are limited relaxations: service suppliers through platforms are generally exempt below INR 20 lakh unless TCS applies, and a 2023 notification allows small goods suppliers to sell through ECOs without registration in specific cases. We confirm which rule applies to you.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which business structure is best for ecommerce?</h3>
                        <div class="faq-expanded__a"><p>A private limited company is generally preferred for e-commerce that intends to scale, because it offers credibility with platforms and investors, supports foreign investment, and handles multi-platform and multi-state TCS reconciliation cleanly. A proprietorship or LLP can work for a smaller or single-channel seller. The right structure depends on your scale, funding plans and number of platforms, which we assess before setting up.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is TCS in ecommerce GST?</h3>
                        <div class="faq-expanded__a"><p>Tax Collected at Source is an amount the e-commerce operator collects on your sales under Section 52 of the CGST Act. The platform deducts TCS at 1%, being 0.5% CGST plus 0.5% SGST for intra-state sales or 1% IGST for inter-state sales, on the net value of taxable supplies made through it, and deposits it with the government while filing GSTR-8. As a seller you can claim this TCS as a credit in your GST returns and adjust it against your liability.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do I need GST to sell on Amazon or Flipkart?</h3>
                        <div class="faq-expanded__a"><p>Yes. To sell goods on Amazon, Flipkart, Meesho or any marketplace that collects TCS, you need a GST registration before you list your first product, regardless of turnover, because Section 24 of the CGST Act overrides the small-supplier exemption. There is no grace period and no minimum-turnover exception for marketplace goods sellers. We register you so you are GSTIN-ready to onboard to the platforms.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need GST for my own ecommerce website (D2C)?</h3>
                        <div class="faq-expanded__a"><p>If you sell only through your own website and not through a third-party marketplace, you are not selling through an ECO, so the Section 24 override does not directly apply, and your GST requirement follows the normal turnover threshold of INR 20 lakh, or INR 10 lakh in special-category states. However, most D2C brands ship across state lines, and inter-state supply of goods makes GST registration mandatory regardless of turnover, so in practice most D2C sellers need GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do ecommerce businesses need an IEC?</h3>
                        <div class="faq-expanded__a"><p>An Import Export Code is required if your e-commerce business imports or exports goods, for example selling to customers abroad or sourcing products internationally. For purely domestic online selling, an IEC is not needed. Many e-commerce sellers obtain an IEC early because cross-border selling is a common growth step, and it is quick to get. We add it to your bundle where your model involves cross-border trade.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Ecommerce business registration kaise kare?</h3>
                        <div class="faq-expanded__a"><p>Pvt Ltd company banao, marketplace par bechte ho to Section 24 ke tahat GST mandatory hai (turnover chahe kitna bhi ho), cross-border ke liye IEC aur eligible startup ke liye DPIIT lo. Patron Accounting poora TCS-ready set up karta hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>GST mandatory?</strong> Yes, for marketplace goods sellers (Section 24), no threshold.</li>
                    <li><strong>Best structure?</strong> Private limited company for scaling.</li>
                    <li><strong>TCS?</strong> 1%, collected by the platform, claimed as credit.</li>
                    <li><strong>IEC?</strong> Only for cross-border sales of goods.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Launching an Online Business? Be TCS-Ready from Day One</h2>
            <div class="content-text">
                
                <p>E-commerce compliance is unforgiving: platforms require a GSTIN before you list, and TCS reconciliation across platforms and states gets complex fast. Setting up the right entity and registrations from the start keeps you compliant and ready to scale.</p>
                <p><strong>Call +91 945 945 6700 or message us on WhatsApp and we will set up your e-commerce business TCS-ready from day one.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Set Up Your Ecommerce Business Today</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:#FFFFFF;">E-commerce has its own compliance rulebook, and the headline is simple: if you sell goods through a marketplace, GST is mandatory from your first sale under Section 24, whatever your turnover. Beyond that, a private limited company is the preferred structure for scaling, an IEC unlocks cross-border selling, and DPIIT adds startup benefits, while the platform's TCS must be reconciled and claimed.</p>
                <p style="color:#FFFFFF;">Getting the entity and registrations right, and being TCS-ready, lets you onboard to platforms and grow without compliance surprises. Patron Accounting, with 15+ years of experience and a CA and CS team, sets up the full e-commerce bundle and supports your returns.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Ecommerce%20Business%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Ecommerce Business Registration%20Services&body=Hello%2C%20I%20just%20visited%20your%20Ecommerce%20Business%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
                    <div class="pa-block-sub">End-to-end support for online sellers</div>
                    <div class="pa-cross-grid"><a href="/business-registration-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Business Registration Services</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup (DPIIT) Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-returns-for-e-commerce-operator" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns for E-Commerce</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/accounting-services-for-e-commerce-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">E-Commerce Accounting</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 6 months or whenever the GST rates or TCS rules, Section 24 or Section 52 provisions, or the e-commerce FDI policy change, so the registration guidance stays current.</p>
        </div>
    </div>
</section>



</main>





<!-- ============================================
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
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
    var dateStr = '3 June 2026';
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection

