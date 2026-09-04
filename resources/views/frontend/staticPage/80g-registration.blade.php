
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>80G Registration for NGOs - Form 10A & Donor Tax Deduction</title>
    <meta name="description" content="80G registration enables donors to claim 50% tax deduction on donations to your NGO. CA-managed Form 10A filing from INR 7,499. No government fee.">
    <link rel="canonical" href="/80g-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="80G Registration for NGOs - Form 10A & Donor Tax Deduction">
    <meta property="og:description" content="80G registration enables donors to claim 50% tax deduction on donations to your NGO. CA-managed Form 10A filing from INR 7,499. No government fee.">
    <meta property="og:url" content="/80g-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="80G Registration for NGOs - Form 10A & Donor Tax Deduction">
    <meta name="twitter:description" content="80G registration enables donors to claim 50% tax deduction on donations to your NGO. CA-managed Form 10A filing from INR 7,499. No government fee.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "80G Registration for NGOs - Form 10A & Donor Tax Deduction",
          "description": "80G registration enables donors to claim 50% tax deduction on donations to your NGO. CA-managed Form 10A filing from INR 7,499. No government fee.",
          "url": "https://www.patronaccounting.com/80g-registration",
          "serviceType": "80G Registration for NGOs - Form 10A & Donor Tax Deduction",
          "areaServed": {
            "@type": "Country",
            "name": "India"
          },
          "provider": {
            "@type": "Organization",
            "name": "Patron Accounting LLP",
            "url": "https://www.patronaccounting.com/",
            "logo": "https://www.patronaccounting.com/images/site-logo.svg"
          }
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "https://www.patronaccounting.com/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "80G Registration for NGOs - Form 10A & Donor Tax Deduction",
              "item": "https://www.patronaccounting.com/80g-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is 80G registration for an NGO?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "80G registration is a certification under Section 80G(5) of the Income Tax Act, 1961 that allows donors who contribute to the registered NGO to claim a tax deduction on their donation. For most NGO registrations, donors can deduct 50% of the donation amount from their taxable income, subject to a qualifying limit of 10% of their adjusted gross total income. The benefit goes to the donor, not the NGO itself. The NGO must have valid 12A/12AB registration as a prerequisite."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between 12A and 80G registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "12A registration exempts the NGO's own income from income tax. 80G registration enables donors to claim tax deductions on their donations to the NGO. 12A benefits the organisation directly, while 80G benefits the donors. 12A is a mandatory prerequisite for 80G - you cannot apply for 80G without a valid 12A/12AB registration. Both are filed online through the Income Tax e-filing portal using Form 10A or Form 10AB."
              }
            },
            {
              "@type": "Question",
              "name": "How to apply for 80G registration online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Log in to the Income Tax e-filing portal (incometax.gov.in) using your NGO's PAN. Navigate to e-File > Income Tax Forms > Form 10A. Select the relevant assessment year and choose the section code for 80G (separate from 12A). Fill in all organisation details, attach the 12A order, audited accounts, activity reports, and other required documents. Submit using DSC or EVC. The PCIT(E) issues the order in Form 10AC within 1 month for provisional registration."
              }
            },
            {
              "@type": "Question",
              "name": "80G registration ke liye kya documents chahiye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "You need self-certified copies of: trust deed or MOA, PAN card, registration certificate, valid 12A/12AB order, audited accounts for 3 years, activity report, utilisation certificate, details of donations received, list of trustees/directors with PAN and Aadhaar, NGO Darpan Unique ID, and bank account details. All documents must be in English - vernacular documents require notarised English translations."
              }
            },
            {
              "@type": "Question",
              "name": "What is the 80G deduction limit for donors?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For donations to most NGOs registered under Section 80G(5), donors can claim a 50% deduction subject to a qualifying limit of 10% of their adjusted gross total income. For example, if adjusted gross total income is Rs 10,00,000 and they donate Rs 2,00,000, the qualifying limit is Rs 1,00,000 (10% of Rs 10,00,000), and the deduction is 50% of Rs 1,00,000 = Rs 50,000. Cash donations above Rs 2,000 are not eligible."
              }
            },
            {
              "@type": "Question",
              "name": "Can donors claim 80G deduction under the new tax regime?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Deduction under Section 80G is not available to taxpayers who opt for the new tax regime under Section 115BAC. Only donors filing under the old tax regime can claim 80G deductions. This applies to individuals, HUFs, companies, and firms. NGOs should clearly communicate this distinction to potential donors."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form 10BE and when must it be issued?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 10BE is the Certificate of Donation that every 80G-registered NGO must issue to each donor. Made mandatory from FY 2022-23 under Rule 18AB. The NGO must first file the Statement of Donations on the Income Tax e-filing portal, after which Form 10BE is generated for each donor. It must be furnished to donors by 31 May following the financial year in which the donation was received."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if 80G registration is not renewed on time?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "If the renewal application (Form 10AB) is not filed at least 6 months before expiry, 80G registration lapses. Donors can no longer claim tax deductions for donations made after the expiry date. This directly impacts donation inflow, especially from corporate CSR contributors who require valid 80G certificates."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-7.css') }}?v=1">
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
                        80G Registration - Tax Benefits for Donors of Your NGO
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">15 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Donor Tax Benefit:</span> 80G enables donors to claim 50% tax deduction on donations - attracting more contributions and CSR funding</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Online Process:</span> Filed via Form 10A on the IT e-filing portal - provisional 3 years, regular 5 years. Prerequisite: valid 12A registration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 10BE Compliance:</span> NGO must issue Form 10BE (Certificate of Donation) to every donor by 31 May each year under Rule 18AB</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CA-Managed:</span> End-to-end service from 12A prerequisite check through PCIT(E) scrutiny handling and post-registration compliance</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | CA and CS Managed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => '80G Registration',
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
    'ctaText'    => 'Join hundreds of NGOs that trust Patron Accounting for 80G compliance',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
                <a href="#what-is-section" class="toc-btn">What Is 80G</a>
                <a href="#who-section" class="toc-btn">Who Needs It</a>
                <a href="#services-section" class="toc-btn">Our Services</a>
                <a href="#procedure-section" class="toc-btn">Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Benefits</a>
                <a href="#comparison-section" class="toc-btn">12A vs 80G</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - 80G Registration Services at a Glance</strong></p>
                    <p><p><strong>TL;DR:</strong> 80G registration is a tax certification that benefits the donors of your NGO, not the NGO itself. While 12A registration exempts your NGO's income from tax, 80G registration allows individuals and companies who donate to your NGO to claim a deduction of up to 50% of the donated amount from their taxable income under the old tax regime. The registration is granted by the PCIT(E) under Section 80G(5) of the Income Tax Act, 1961, with no government fee.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table><thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>What</td><td>Registration under Section 80G(5) enabling donors to claim tax deduction on donations to the NGO</td></tr>
                        <tr><td>Benefit To</td><td>Donors (individuals, HUFs, companies, firms) - not the NGO itself</td></tr>
                        <tr><td>Deduction Rate</td><td>50% of donated amount, subject to 10% of donor's adjusted gross total income (for most NGO registrations)</td></tr>
                        <tr><td>Prerequisite</td><td>Valid 12A/12AB registration under the Income Tax Act</td></tr>
                        <tr><td>Application Form</td><td>Form 10A (new/provisional) or Form 10AB (renewal/final)</td></tr>
                        <tr><td>Validity</td><td>Provisional: 3 years | Regular: 5 years (renewal required 6 months before expiry)</td></tr>
                        <tr><td>Government Fee</td><td>Nil - No government fee for filing Form 10A or Form 10AB</td></tr>
                    </tbody></table></div></p>
                </div>
                <p><p>This makes your NGO significantly more attractive for donations and CSR contributions. The entire process is online through Form 10A (new applications) or Form 10AB (renewals) on the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax e-filing portal</a>. There is no government fee, and 12A registration is a mandatory prerequisite.</p></p>
                <p><p>Post-registration, the NGO must issue Form 10BE (Certificate of Donation) to every donor by 31 May each year under Rule 18AB. Without Form 10BE, donors cannot claim the 80G deduction. Patron Accounting's CA team manages the entire process end-to-end, from 12A prerequisite check through PCIT(E) scrutiny handling and Form 10BE compliance setup.</p></p>
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
                <h2 class="section-title">What Is 80G Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>80G registration is a certification granted to charitable trusts, societies, and Section 8 companies under Section 80G(5) of the Income Tax Act, 1961, that allows donors who contribute to the registered NGO to claim a tax deduction on the donated amount from their taxable income.</p>
                <p>When a donor gives money to an 80G-registered NGO, they can deduct 50% of the donation from their adjusted gross total income (subject to a 10% qualifying limit) while filing their income tax return under the old tax regime. This financial incentive directly increases donor willingness and average donation size, making 80G registration essential for any NGO that relies on public or corporate donations.</p>
                <p><strong>Critical Note:</strong> Deduction under Section 80G is NOT available to donors who opt for the new tax regime under Section 115BAC. NGOs should communicate this distinction clearly to potential donors. Cash donations above Rs 2,000 are also not eligible - donors must use cheque, NEFT, RTGS, UPI, or other electronic modes.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for 80G Registration:</strong></p>
                    <ul>
                    <li><strong>Section 80G(5):</strong> The subsection prescribing conditions for an institution to be approved for 80G benefits - must be established in India for charitable purposes, maintain proper books, and not benefit any particular religion or caste exclusively.</li>
                    <li><strong>Form 10BE (Certificate of Donation):</strong> Mandatory certificate every 80G-registered NGO must issue to donors by 31 May each year. Contains donor details, donation amount, payment mode, and NGO's 80G registration number. Without it, donors cannot claim deduction.</li>
                    <li><strong>Qualifying Limit (10% Rule):</strong> For most NGO donations, the 80G deduction is capped at 10% of the donor's adjusted gross total income. The adjusted gross total income is gross total income reduced by certain deductions and capital gains.</li>
                    <li><strong>Four Deduction Categories:</strong> Section 80G classifies donations into: (1) 100% without limit, (2) 50% without limit, (3) 100% with 10% limit, (4) 50% with 10% limit. Most NGO registrations fall under Category 4.</li>
                    <li><strong>Old vs New Tax Regime:</strong> 80G deductions are available only under the old tax regime. Donors opting for the new regime under Section 115BAC cannot claim 80G deductions.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">80G Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Donor Tax Benefits</span>
                        <strong>80G Certified</strong>
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
            <h2 class="section-title">Who Needs 80G Registration?</h2>
            <div class="content-text">
                
                <p>Every NGO that receives donations and wants to offer donors a tax deduction incentive needs 80G registration. Without it, donors receive no tax benefit, which significantly reduces donation inflow - especially from corporate CSR contributions and high-net-worth individuals.</p>
                <p><strong>Eligible NGOs:</strong></p>
                <ul>
                    <li>Charitable trusts with valid 12A/12AB registration - registered under the Indian Trusts Act, 1882 or state trust acts</li>
                    <li>Societies with valid 12A/12AB registration - registered under the Societies Registration Act, 1860 or state equivalents</li>
                    <li>Section 8 companies with valid 12A/12AB registration - registered under the Companies Act, 2013</li>
                </ul>
                <p style="margin-top:16px;"><strong>Not Eligible:</strong></p>
                <ul>
                    <li>NGOs without valid 12A/12AB registration (12A is a mandatory prerequisite)</li>
                    <li>Private or family trusts</li>
                    <li>Trusts established exclusively for religious purposes benefiting a particular religion or caste</li>
                    <li>NGOs with non-exempt income from business activities (unless separate books maintained)</li>
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
            <h2 class="section-title">Patron Accounting's 80G Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>12A Prerequisite Check</td><td>Verify existing 12A/12AB registration status. If not registered, Patron files 12A first as a bundled service.</td></tr>
                        <tr><td>Objects Clause Compliance Review</td><td>CA team reviews trust deed/MOA to confirm objects meet Section 80G(5) eligibility including charitable purpose requirement and religious non-exclusivity condition.</td></tr>
                        <tr><td>Form 10A / 10AB Filing</td><td>Complete preparation and online filing of Form 10A (new 80G) or Form 10AB (renewal) on the Income Tax e-filing portal with correct section code selection.</td></tr>
                        <tr><td>Document Preparation</td><td>Compilation of all required attachments including 12A order, audited accounts, utilisation certificates, activity reports, donor records, and <a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">NGO Darpan</a> Unique ID.</td></tr>
                        <tr><td>PCIT(E) Scrutiny Handling</td><td>End-to-end management of queries, document requests, physical inspection coordination, and hearings before the Principal Commissioner of Income Tax (Exemptions).</td></tr>
                        <tr><td>Post-Registration Compliance</td><td>Form 10BE generation guidance, donation receipt compliance, annual Statement of Donations filing, and renewal tracking.</td></tr>

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
            <h2 class="section-title">8-Step Process for 80G Registration Online</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The entire process is online through the Income Tax e-filing portal. 12A/12AB registration must be obtained before applying for 80G. Patron Accounting manages each step end-to-end.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Obtain 12A/12AB Registration</h3>
        <p class="step-description">80G requires valid 12A/12AB registration as a mandatory prerequisite. If your NGO does not have 12A, apply for it first. Patron Accounting offers a bundled 12A + 80G service.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 12A prerequisite verified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bundled service available</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M50 35l6 6 14-14" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="60" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12A</text></svg></div>
            <span class="illustration-label">12A Confirmed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Register on NGO Darpan Portal</h3>
        <p class="step-description">Registration on the NITI Aayog NGO Darpan portal (ngodarpan.gov.in) is mandatory for 80G applications. Obtain the NGO Darpan Unique ID before filing Form 10A.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> NGO Darpan Unique ID obtained</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> NITI Aayog portal registration</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="24" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 35 L60 28 L70 35 L70 50 L50 50 Z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="60" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">NGO Darpan</text></svg></div>
            <span class="illustration-label">Darpan Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Prepare Documents</h3>
        <p class="step-description">Compile all required documents as self-certified PDF copies under 5 MB each. Key documents: trust deed, PAN, 12A order, utilisation certificates, donations received, audited accounts for 3 years, and NGO Darpan ID.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 12A order and accounts ready</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Utilisation certificate prepared</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="35" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="25" y="20" width="35" height="45" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="35" y="30" width="35" height="45" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><line x1="42" y1="42" x2="62" y2="42" stroke="#14365F" stroke-width="1.5" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Docs Compiled</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Log in to IT E-Filing Portal</h3>
        <p class="step-description">Visit incometax.gov.in and log in using the NGO's PAN. Navigate to e-File > Income Tax Forms > Form 10A. Select the relevant Assessment Year and the Section Code for 80G (separate from 12A section code).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 80G section code selected</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Assessment year confirmed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="28" width="50" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="35" y="42" width="50" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><circle cx="30" cy="32" r="3" fill="#25D366"/><circle cx="30" cy="46" r="3" fill="#25D366"/></svg></div>
            <span class="illustration-label">Portal Ready</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Fill Form 10A for 80G</h3>
        <p class="step-description">Fill in all mandatory fields including organisation details, 12A registration number, nature of charitable activities, details of donations received, and financial information. Attach all supporting documents.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All fields verified by CA</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Donations details attached</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><rect x="30" y="36" width="15" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="50" y="36" width="35" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><rect x="30" y="52" width="15" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="50" y="52" width="35" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/></svg></div>
            <span class="illustration-label">Form 10A Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Submit with DSC or EVC</h3>
        <p class="step-description">Submit the completed Form 10A using DSC of the authorised signatory or EVC via Aadhaar OTP. Separate Form 10A applications must be filed for 12A and 80G - they are not combined.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC or Aadhaar OTP verified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Acknowledgement saved</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M55 38 L58 41 L66 33" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><rect x="35" y="56" width="50" height="8" rx="4" fill="#25D366" opacity="0.3"/></svg></div>
            <span class="illustration-label">Form Submitted</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">PCIT(E) Review and Order</h3>
        <p class="step-description">The PCIT(E) reviews the application. Provisional order in Form 10AC is issued within 1 month under Section 12AB(3). For regular registration (Form 10AB), the PCIT(E) may conduct physical inspection and inquiry. Timeline is up to 6 months.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Provisional: 1 month</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regular: up to 6 months</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 25 L60 40 L72 46" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Under Review</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Download 80G Certificate and URN</h3>
        <p class="step-description">Download the Form 10AC order with the 16-digit URN from the e-filing portal. Display the 80G registration number and validity period prominently on all donation receipts, fundraising materials, and your NGO's website.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 16-digit URN assigned</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Display on all receipts</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M55 35l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><rect x="40" y="55" width="40" height="6" rx="3" fill="#F5A623" opacity="0.4"/></svg></div>
            <span class="illustration-label">80G Granted</span>
            <span class="step-number-large">08</span>
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
            <h2 class="section-title">Documents Required for 80G Registration</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Trust Deed / MOA / AOA:</strong> Self-certified copy depending on entity type (trust/society/Section 8 company)</li>
                    <li><strong>PAN Card</strong> of the organisation (mandatory)</li>
                    <li><strong>Registration Certificate</strong> from Sub-Registrar / Registrar of Societies / RoC (mandatory)</li>
                    <li><strong>Valid 12A/12AB Registration Order</strong> (Form 10AC) - mandatory prerequisite</li>
                    <li><strong>Audited Annual Accounts</strong> for the last 3 years (balance sheet, income and expenditure, receipts and payments)</li>
                    <li><strong>Activity Report</strong> - details of charitable activities since inception or last 3 years</li>
                    <li><strong>Utilisation Certificate</strong> showing funds received and applied for charitable purposes</li>
                    <li><strong>Details of Donations Received</strong> - donor-wise list with amounts, dates, and payment modes</li>
                    <li><strong>List of Trustees/Directors/Governing Body</strong> with PAN, Aadhaar, and address</li>
                    <li><strong>NGO Darpan Unique ID</strong> - registration on <a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">ngodarpan.gov.in</a> required</li>
                    <li><strong>FCRA Registration Certificate</strong> (if registered under FCRA 2010)</li>
                    <li><strong>Bank Account Details</strong> (account number, IFSC, bank name, branch)</li>
                    <li><strong>Existing 80G order</strong> (if renewal - self-certified copy)</li>
                </ul>
                <p style="margin-top:12px;font-style:italic;color:var(--text-muted);">All documents must be in English. Vernacular documents require notarised English translations. Each PDF must be under 5 MB.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in 80G Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>12A Not in Place or Expired</td><td>80G cannot be applied without valid 12A - application gets rejected at filing stage</td><td>Patron files 12A first as a bundled service. If 12A expired, files renewal with condonation if deadline missed, then proceeds with 80G.</td></tr>
                        <tr><td>Religious Purpose Restriction</td><td>Section 80G(5) requires activities not exclusively for one religion/caste - objects clause may fail this test</td><td>CA team reviews trust deed and recommends amendments to ensure charitable activities are open to all before filing.</td></tr>
                        <tr><td>NGO Darpan Not Completed</td><td>NGO Darpan Unique ID is now mandatory for Form 10A filing for 80G</td><td>Patron assists with NITI Aayog portal registration and ID generation before filing the 80G application.</td></tr>
                        <tr><td>Form 10BE Non-Compliance</td><td>Post-registration, donors cannot claim deductions if NGO fails to issue Form 10BE by 31 May deadline</td><td>Patron provides guidance on generating Form 10BE through e-filing portal's Statement of Donations feature under Rule 18AB.</td></tr>

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
            <h2 class="section-title">Fees and Costs for 80G Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Form 10A / Form 10AB)</td><td>Nil - No government fee charged by Income Tax Department</td></tr>
                        <tr><td>Patron Accounting Professional Fees (80G Standalone)</td><td>INR 7,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>12A + 80G Registration (Bundled)</td><td>From INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>12A + 80G + NGO Darpan + CSR-1 (Complete Package)</td><td>From INR 14,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>80G Renewal (Form 10AB)</td><td>INR 7,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free 80G Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for 80G Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>12A prerequisite check and NGO Darpan registration</td><td>2-5 working days</td></tr>
                        <tr><td>Document preparation and compilation</td><td>3-5 working days</td></tr>
                        <tr><td>Form 10A filing on IT portal</td><td>1-2 working days</td></tr>
                        <tr><td>PCIT(E) order for provisional registration</td><td>Up to 1 month from end of month of application</td></tr>
                        <tr><td>PCIT(E) order for regular registration</td><td>Up to 6 months (includes inquiry and possible physical inspection)</td></tr>
                        <tr><td>Total (Provisional - NGO with 12A in place)</td><td>15-45 days typically</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> 80G registration timeline depends on having valid 12A/12AB already in place. If 12A is also needed, add 15-30 days for provisional 12A registration. Patron Accounting can file both 12A and 80G sequentially to minimise total turnaround time. Call <a href="tel:+919459456700">+91 945 945 6700</a> for a timeline estimate.</p>

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
            <h2 class="section-title">5 Benefits of Professional 80G Registration Assistance</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Prerequisite Compliance</h3><p>CA team verifies 12A status, NGO Darpan registration, and objects clause alignment before filing, preventing unnecessary rejections at the PCIT(E) stage.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg></div><h3>Correct Section Code Selection</h3><p>80G has separate section codes from 12A under Form 10A. Wrong code selection is a common error that leads to outright rejection. Our team prevents this.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><h3>Physical Inspection Readiness</h3><p>PCIT(E) may conduct a physical inspection for 80G (more common than for 12A). Patron prepares the NGO with organised records and briefing.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3>Form 10BE Compliance Setup</h3><p>Post-registration, Patron guides on issuing Form 10BE to donors through the e-filing portal's Statement of Donations feature, ensuring donors can claim deductions.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Donation Receipt Design</h3><p>Guidance on compliant donation receipts with all mandatory details: NGO name, PAN, 80G registration number, validity, donor name, amount, payment mode, and date.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Hundreds of NGOs Across India</h2>
            <div class="content-text">
                
                <p><strong>15+ Years Experience | 10,000+ Businesses Served | 4.9 Google Rating | 8 Offices</strong></p>
                <p>Patron Accounting has helped hundreds of charitable trusts, societies, and Section 8 companies obtain their 80G registration and set up Form 10BE compliance. Our clients report an average 40% increase in donation inflow after obtaining 80G certification, especially from corporate CSR contributors.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">12A vs 80G Registration - Understanding the Difference</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>12A Registration</th><th>80G Registration</th></tr></thead>
                    <tbody>
                        <tr><td>Benefit To</td><td>The NGO itself</td><td>Donors who contribute to the NGO</td></tr>
                        <tr><td>Tax Impact</td><td>NGO's income exempt from income tax</td><td>Donors claim deduction from their taxable income</td></tr>
                        <tr><td>Deduction Rate</td><td>100% exemption on NGO's charitable income</td><td>50% of donation (subject to 10% qualifying limit for most NGOs)</td></tr>
                        <tr><td>Prerequisite</td><td>NGO must be registered as trust/society/Section 8</td><td>Valid 12A/12AB registration required</td></tr>
                        <tr><td>Tax Regime</td><td>Applicable regardless of regime</td><td>Only under old tax regime (not available under Section 115BAC)</td></tr>
                        <tr><td>Form 10BE</td><td>Not required</td><td>NGO must issue Form 10BE to every donor by 31 May</td></tr>
                        <tr><td>Impact on Donations</td><td>Indirect - makes NGO grant-eligible</td><td>Direct - increases donor willingness and donation size</td></tr>

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
            <h2 class="section-title">Related Services for NGO Compliance</h2>
            <div class="content-text">
                
                <p>If you are registering for 80G, you may also need these complementary services:</p>
                <ul>
                    <li><a href="/12a-registration">12A Registration</a> - Mandatory prerequisite for 80G. Exempts your NGO's income from income tax.</li>
                    <li><a href="/ngo-registration">NGO Registration</a> - Register your organisation as a Trust, Society, or Section 8 Company before applying for tax exemptions.</li>
                    <li><a href="/fcra-registration">FCRA Registration</a> - Register under FCRA 2010 to receive foreign donations. Requires prior 12A registration.</li>
                    <li><a href="/section8-company-registration">Section 8 Company Registration</a> - Incorporate a not-for-profit company under the Companies Act, 2013.</li>
                    <li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Annual ITR-7 mandatory for all 12A/80G-registered trusts and institutions.</li>
                    <li>Society Registration - Register a society for charitable, literary, or scientific purposes.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for 80G Registration</h2>
            <div class="content-text">
                
                <p><strong>Section 80G(1):</strong> Allows deduction from gross total income for donations to certain funds and charitable institutions.</p>
                <p><strong>Section 80G(2):</strong> Lists four categories of eligible donations with deduction percentages (100%/50%) and qualifying limits. Most NGO registrations fall under Category 4 (50% deduction with 10% qualifying limit).</p>
                <p><strong>Section 80G(5):</strong> Prescribes conditions for an institution to receive 80G approval: must be established in India, charitable purpose, proper books of accounts, no benefit to particular religion/caste, no non-charitable application of income.</p>
                <p><strong>Section 80G(5D):</strong> Ceiling limit - aggregate deduction for donations subject to the qualifying limit cannot exceed 10% of the donor's adjusted gross total income.</p>
                <p><strong>Rule 18AB (Form 10BE):</strong> Prescribes the Certificate of Donation format that every 80G-registered institution must furnish to each donor. Statement of Donations must be filed on the e-filing portal, and Form 10BE issued to donors by 31 May following the financial year.</p>
                <p><strong>Key Amendments:</strong> Finance Act 2020 introduced mandatory re-registration framework. Finance Act 2022 made Form 10BE mandatory from FY 2022-23. Budget 2025 confirmed 80G renewal validity remains 5 years (not extended to 10 years like 12A for small trusts).</p>
                <p><strong>New Tax Regime (Section 115BAC):</strong> Deduction under Section 80G is NOT available to donors who opt for the new tax regime. This was confirmed in the Income Tax Act, 2025 amendments. Cash donations above Rs 2,000 are not eligible for deduction under any regime.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - 80G Registration</h2>
                    <p class="faq-expanded__lead">Expert answers from our CA team on 80G registration, donor tax deductions, Form 10BE compliance, and the old vs new tax regime distinction.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => '80G Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is 80G registration for an NGO?</h3>
                        <div class="faq-expanded__a"><p>80G registration is a certification under Section 80G(5) of the Income Tax Act, 1961 that allows donors who contribute to the registered NGO to claim a tax deduction on their donation. For most NGO registrations, donors can deduct 50% of the donation amount from their taxable income, subject to a qualifying limit of 10% of their adjusted gross total income. The benefit goes to the donor, not the NGO itself. The NGO must have valid 12A/12AB registration as a prerequisite.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between 12A and 80G registration?</h3>
                        <div class="faq-expanded__a"><p>12A registration exempts the NGO's own income from income tax. 80G registration enables donors to claim tax deductions on their donations to the NGO. 12A benefits the organisation directly, while 80G benefits the donors. 12A is a mandatory prerequisite for 80G - you cannot apply for 80G without a valid 12A/12AB registration. Both are filed online through the Income Tax e-filing portal using Form 10A or Form 10AB.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How to apply for 80G registration online?</h3>
                        <div class="faq-expanded__a"><p>Log in to the Income Tax e-filing portal (incometax.gov.in) using your NGO's PAN. Navigate to e-File > Income Tax Forms > Form 10A. Select the relevant assessment year and choose the section code for 80G (separate from 12A). Fill in all organisation details, attach the 12A order, audited accounts, activity reports, and other required documents. Submit using DSC or EVC. The PCIT(E) issues the order in Form 10AC within 1 month for provisional registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">80G registration ke liye kya documents chahiye?</h3>
                        <div class="faq-expanded__a"><p>You need self-certified copies of: trust deed or MOA, PAN card, registration certificate, valid 12A/12AB order, audited accounts for 3 years, activity report, utilisation certificate, details of donations received, list of trustees/directors with PAN and Aadhaar, NGO Darpan Unique ID, and bank account details. All documents must be in English - vernacular documents require notarised English translations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the 80G deduction limit for donors?</h3>
                        <div class="faq-expanded__a"><p>For donations to most NGOs registered under Section 80G(5), donors can claim a 50% deduction subject to a qualifying limit of 10% of their adjusted gross total income. For example, if adjusted gross total income is Rs 10,00,000 and they donate Rs 2,00,000, the qualifying limit is Rs 1,00,000 (10% of Rs 10,00,000), and the deduction is 50% of Rs 1,00,000 = Rs 50,000. Cash donations above Rs 2,000 are not eligible.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can donors claim 80G deduction under the new tax regime?</h3>
                        <div class="faq-expanded__a"><p>No. Deduction under Section 80G is not available to taxpayers who opt for the new tax regime under Section 115BAC. Only donors filing under the old tax regime can claim 80G deductions. This applies to individuals, HUFs, companies, and firms. NGOs should clearly communicate this distinction to potential donors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is Form 10BE and when must it be issued?</h3>
                        <div class="faq-expanded__a"><p>Form 10BE is the Certificate of Donation that every 80G-registered NGO must issue to each donor. Made mandatory from FY 2022-23 under Rule 18AB. The NGO must first file the Statement of Donations on the Income Tax e-filing portal, after which Form 10BE is generated for each donor. It must be furnished to donors by 31 May following the financial year in which the donation was received.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if 80G registration is not renewed on time?</h3>
                        <div class="faq-expanded__a"><p>If the renewal application (Form 10AB) is not filed at least 6 months before expiry, 80G registration lapses. Donors can no longer claim tax deductions for donations made after the expiry date. This directly impacts donation inflow, especially from corporate CSR contributors who require valid 80G certificates.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>80G registration kya hai?</strong> 80G registration allows your NGO's donors to save tax on their donations. Donors get a 50% deduction on the donated amount from their taxable income under the old tax regime.</p>
                <p><strong>80G registration kitne din mein hota hai?</strong> Provisional 80G registration takes 15-30 days. Regular registration takes 1-6 months.</p>
                <p><strong>80G ke bina kya hota hai?</strong> Without 80G, donors get no tax benefit for donating to your NGO. This significantly reduces donations, especially from companies and HNIs who seek tax deductions.</p>
                <p><strong>Can 80G and 12A be applied together?</strong> Yes, both can be filed simultaneously via separate Form 10A applications, but 12A is processed first as it is a prerequisite for 80G.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Renewal and Form 10BE Deadline Alert</h2>
            <div class="content-text">
                
                <p><strong>If your NGO's 80G registration was granted in 2021 (5-year validity), it expired on 31 March 2026.</strong> The renewal deadline via Form 10AB was 30 September 2025. If you missed this deadline, your donors can no longer claim deductions and your CSR eligibility is compromised.</p>
                <p>Additionally, every 80G-registered NGO must file the Statement of Donations and issue Form 10BE to all donors by <strong>31 May each year</strong>. Failure to comply means donors cannot claim deductions, damaging your NGO's credibility and donor relationships.</p>
                <p style="margin-top:16px;"><strong>Contact Patron Accounting immediately - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for urgent 80G renewal and Form 10BE compliance assistance.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get 80G Registration for Your NGO Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">80G registration is the single most impactful step an NGO can take to increase donation inflow. By enabling donors to claim a 50% tax deduction on their contributions, 80G makes your NGO significantly more attractive for individual donors, corporate CSR contributions, and institutional funding. The process is fully online with no government fee.</p>
                <p style="color:rgba(255,255,255,0.85);">Combined with 12A registration, NGO Darpan enrolment, and CSR-1 registration, 80G completes the tax compliance framework that makes your NGO fully operational and fundraising-ready. Patron Accounting's CA and CS team manages the entire process end-to-end across 8 cities in India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%2080G%20Registration%20Services&body=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">80G Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert CA assistance for 80G registration from our offices across major Indian cities</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/80g-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/80g-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/80g-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/80g-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>

<a href="/80g-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/80g-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
</div></div><div class="pa-city-block"><div class="pa-block-title">Related NGO Services</div><div class="pa-block-sub">End-to-end NGO compliance support</div><div class="pa-cross-grid"><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">12A and 80G Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/ngo-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/section8-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/fcra-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FCRA Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect 80G amendments, Form 10BE deadline changes, new/old tax regime updates, Budget announcements, and PCIT(E) procedural changes.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
{{--
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Join 5,000+ business owners.</strong> Get compliance due date alerts on WhatsApp.</span>
        <a href="https://wa.me/919459456700?text=Hi%2C%20please%20add%20me%20to%20your%20compliance%20due%20date%20reminders%20on%20WhatsApp." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Join Free &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div> 
--}}
@include('layouts.itr-season-strip')

</main>






<!-- ============================================
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

<script>

</script>

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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
