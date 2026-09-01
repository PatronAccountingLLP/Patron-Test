
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>12A Registration for NGOs - Form 10A & Income Tax Exemption</title>
    <meta name="description" content="12A registration exempts NGO income from tax under the Income Tax Act. CA-managed Form 10A filing from INR 7,499. Trusts, societies, Section 8 companies.">
    <link rel="canonical" href="/12a-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="12A Registration for NGOs - Form 10A & Income Tax Exemption">
    <meta property="og:description" content="12A registration exempts NGO income from tax under the Income Tax Act. CA-managed Form 10A filing from INR 7,499. Trusts, societies, Section 8 companies.">
    <meta property="og:url" content="/12a-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="12A Registration for NGOs - Form 10A & Income Tax Exemption">
    <meta name="twitter:description" content="12A registration exempts NGO income from tax under the Income Tax Act. CA-managed Form 10A filing from INR 7,499. Trusts, societies, Section 8 companies.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "12A Registration for NGOs - Form 10A & Income Tax Exemption",
          "description": "12A registration exempts NGO income from tax under the Income Tax Act. CA-managed Form 10A filing from INR 7,499. Trusts, societies, Section 8 companies.",
          "url": "https://www.patronaccounting.com/12a-registration",
          "serviceType": "12A Registration for NGOs - Form 10A & Income Tax Exemption",
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
              "name": "12A Registration for NGOs - Form 10A & Income Tax Exemption",
              "item": "https://www.patronaccounting.com/12a-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is 12A registration for an NGO?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "12A registration is a tax exemption registration under Section 12A of the Income Tax Act, 1961. It allows charitable trusts, societies, and Section 8 companies to claim exemption from income tax on surplus income applied for charitable purposes. The registration is now processed under Section 12AB through Form 10A (new) or Form 10AB (renewal) filed on the Income Tax e-filing portal. Without 12A, an NGO's income - including donations - is taxed like any commercial entity."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between 12A and 12AB registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 12A prescribes the conditions for claiming tax exemption, while Section 12AB (introduced by Finance Act 2020, effective 1 April 2021) prescribes the procedure for registration. Earlier, the procedure was under Section 12AA. All new registrations since April 2021 are processed under 12AB. In practice, when people say '12A registration', they mean registration under the 12AB procedure for claiming benefits under 12A."
              }
            },
            {
              "@type": "Question",
              "name": "How to apply for 12A registration online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Log in to the Income Tax e-filing portal (incometax.gov.in) using the NGO's PAN. Navigate to e-File > Income Tax Forms > Form 10A. Select the relevant assessment year and section code. Fill in organisation details, trustee/director information, and activity description. Upload self-certified copies of trust deed, PAN, registration certificate, and financial statements. Submit using DSC or EVC (Aadhaar OTP). The PCIT(E) issues the order in Form 10AC within 1 month for provisional registration."
              }
            },
            {
              "@type": "Question",
              "name": "12A registration ke liye kya documents chahiye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "You need self-certified copies of: trust deed or MOA, PAN card, registration certificate from the relevant authority (Sub-Registrar, Registrar of Societies, or RoC), audited accounts for the last 3 years (for existing NGOs), activity report, list of trustees/directors with PAN and Aadhaar, bank account details, and FCRA registration certificate (if applicable). All documents must be in English. Vernacular documents require notarised English translations."
              }
            },
            {
              "@type": "Question",
              "name": "What is the government fee for 12A registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "There is no government fee for filing Form 10A or Form 10AB for 12A registration. The Income Tax Department does not charge any filing fee. The only cost involved is professional fees if you engage a CA firm for assistance. Patron Accounting's professional fee starts from INR 7,499 (exclusive of GST) for standalone 12A registration."
              }
            },
            {
              "@type": "Question",
              "name": "How long does 12A registration take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 12AB(3), the PCIT(E) must pass the order within 1 month from the end of the month of application for provisional registration (Form 10A for new NGOs). For regular registration via Form 10AB, the timeline is 6 months. In practice, provisional registration is typically received within 15 to 30 days if documents are complete. Regular registration may take 1 to 6 months depending on scrutiny."
              }
            },
            {
              "@type": "Question",
              "name": "Can a trust apply for 12A and 80G together?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, a trust can file separate Form 10A applications for both 12A and 80G simultaneously on the Income Tax e-filing portal. However, 12A registration is a prerequisite for 80G - the Income Tax Department typically processes 12A first and then 80G. Patron Accounting offers a bundled 12A + 80G registration service for convenience and cost efficiency."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if 12A registration is not renewed on time?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "If the renewal application (Form 10AB) is not filed before the deadline, the 12A registration lapses on expiry. The NGO loses its tax-exempt status, all income becomes taxable, donors can no longer claim 80G deductions, and the NGO becomes ineligible for government grants and CSR funding. Under Section 115TD, the accreted income (fair market value of assets minus liabilities) may be taxed at the maximum marginal rate. Late filing with a condonation-of-delay application is possible but not guaranteed."
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
                        12A Registration - Tax Exemption for NGOs in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax Exemption:</span> Registration under Section 12AB exempts charitable trusts, societies, and Section 8 companies from income tax on surplus income</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Online Process:</span> Filed via Form 10A on the Income Tax e-filing portal - provisional registration valid for 3 years, regular for 5 years</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Prerequisite:</span> Mandatory for 80G registration, government grants, CSR funding, and FCRA eligibility</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CA-Managed:</span> End-to-end service from trust deed review to PCIT(E) scrutiny handling across 8 cities in India</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%2012A%20registration%20for%20my%20NGO.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => '12A Registration',
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
    'heading'  => 'Real Stories from Real People',
    'lead'     => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle' => 'Join 10,000+ Satisfied Businesses',
    'ctaText'  => 'Join hundreds of NGOs that trust Patron Accounting for 12A compliance',
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
                <a href="#what-is-section" class="toc-btn">What Is 12A</a>
                <a href="#who-section" class="toc-btn">Who Needs It</a>
                <a href="#services-section" class="toc-btn">Our Services</a>
                <a href="#procedure-section" class="toc-btn">Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Benefits</a>
                <a href="#comparison-section" class="toc-btn">DIY vs CA</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">12A Registration - Complete Overview for NGOs</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - 12A Registration Services at a Glance</strong></p>
                    <p><p><strong>TL;DR:</strong> Every charitable trust, society, and Section 8 company in India must register under Section 12A of the Income Tax Act, 1961 to claim exemption from income tax on surplus income. Without 12A registration, even genuinely charitable organisations are taxed at applicable slab rates on all receipts including donations. The process is fully online via Form 10A on the Income Tax e-filing portal with no government fee.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>What</td><td>Registration under Section 12A/12AB of the Income Tax Act granting income tax exemption to NGOs</td></tr>
                        <tr><td>Who Needs It</td><td>Charitable trusts, societies (Societies Registration Act), Section 8 companies</td></tr>
                        <tr><td>Governing Law</td><td>Section 12A, 12AB of the Income Tax Act, 1961 (as amended by Finance Act 2020 and 2023)</td></tr>
                        <tr><td>Application Form</td><td>Form 10A (new/provisional) or Form 10AB (renewal/final registration)</td></tr>
                        <tr><td>Validity</td><td>Provisional: 3 years | Regular: 5 years (10 years for trusts with income under Rs 5 crore from April 2025)</td></tr>
                        <tr><td>Government Fee</td><td>Nil - No government fee for filing Form 10A or Form 10AB</td></tr>
                        <tr><td>Processing Time</td><td>15-30 days (provisional) | 1-6 months (regular, depends on PCIT(E) scrutiny)</td></tr>
                    </tbody>
                </table>
                </div></p>
                </div>
                <p><p>The registration process has been streamlined under Section 12AB since April 2021, with the entire application now filed online through the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax e-filing portal</a> using Form 10A (new registrations) or Form 10AB (renewals). There is no government fee for filing the application, and Patron Accounting's CA team manages the entire process from document preparation to PCIT(E) order follow-up.</p></p>
                <p><p>The Finance Act 2025 (Budget 2025) extended validity to 10 years for trusts with income under Rs 5 crore in each of the preceding 2 years, significantly reducing the renewal burden for smaller NGOs. All registrations are processed by the Principal Commissioner of Income Tax (Exemptions) - PCIT(E) - based on the registered office location of the NGO.</p></p>
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
                <h2 class="section-title">What Is 12A Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>12A registration is a tax exemption registration granted by the Income Tax Department to charitable trusts, societies, and Section 8 companies under Section 12A of the Income Tax Act, 1961. It enables eligible non-profit organisations to claim exemption from income tax on income applied for charitable or religious purposes under Sections 11 and 12 of the Act.</p>
                <p>The registration process is now governed by Section 12AB, introduced by the Finance Act 2020 (effective 1 April 2021), which replaced the earlier Section 12AA. All new and existing NGOs must register or re-register under the 12AB framework. The Principal Commissioner of Income Tax (Exemptions) - PCIT(E) - processes all 12A applications filed online through Form 10A or Form 10AB.</p>
                <p>Upon successful registration, the PCIT(E) issues a Form 10AC order containing a 16-digit alphanumeric Unique Registration Number (URN) that must be quoted in all income tax returns (Form ITR-7), 80G applications, and compliance filings.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for 12A Registration:</strong></p>
                    <ul>
                    <li><strong>Charitable Purpose (Section 2(15)):</strong> Relief of the poor, education, yoga, medical relief, preservation of environment and monuments, and advancement of any other object of general public utility. If receipts from trade or commerce exceed 20% of total receipts, charitable status is restricted.</li>
                    <li><strong>Section 12AB:</strong> The current operative section (replacing 12AA) that prescribes the procedure for registration of trusts and institutions for claiming tax exemption. All registrations since 1 April 2021 are processed under this section.</li>
                    <li><strong>Form 10A:</strong> The prescribed online application form for new/provisional registration under Section 12AB. Also used for re-validation of existing registrations.</li>
                    <li><strong>Form 10AB:</strong> The prescribed online application form for conversion from provisional to regular registration, renewal after 5 years, or re-registration after change in objects.</li>
                    <li><strong>PCIT(E):</strong> Principal Commissioner of Income Tax (Exemptions) - the designated authority that processes and approves 12A registration applications. Jurisdiction is based on the registered office location of the NGO.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">12A Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>NGO Compliance</span>
                        <strong>Tax Exempt</strong>
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
            <h2 class="section-title">Who Needs 12A Registration?</h2>
            <div class="content-text">
                
                <p>12A registration is mandatory for every non-profit organisation in India that wants to claim income tax exemption on surplus income. Without it, all receipts - including donations, grants, and fees - are taxed at applicable rates under the Income Tax Act.</p>
                <p><strong>Eligible Entities:</strong></p>
                <ul>
                    <li>Charitable trusts registered under the Indian Trusts Act, 1882 or relevant state trust acts</li>
                    <li>Societies registered under the Societies Registration Act, 1860 or state equivalents</li>
                    <li>Section 8 companies (not-for-profit) registered under the Companies Act, 2013</li>
                    <li>Religious trusts with charitable activities (eligible for 12A but 80G only if activities are open to all religions)</li>
                </ul>
                <p style="margin-top:16px;"><strong>Not Eligible:</strong></p>
                <ul>
                    <li>Private or family trusts</li>
                    <li>Organisations with profit distribution to members or stakeholders</li>
                    <li>Entities engaged primarily in commercial activities (trade/commerce receipts exceeding 20% of total receipts under Section 2(15) proviso)</li>
                </ul>
                <p style="margin-top:16px;"><strong>When to Apply:</strong> New NGOs should apply immediately after incorporation - at least one month before the commencement of the previous year from which exemption is sought. For renewals, apply at least 6 months before expiry of current registration. For change in objects, apply within 30 days of the modification.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's 12A Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Deed / MOA Review</td><td>CA team reviews your trust deed (for trusts), MOA and rules (for societies), or MOA and AOA (for Section 8 companies) to confirm objects qualify as 'charitable purpose' under Section 2(15)</td></tr>
                        <tr><td>Form 10A / 10AB Filing</td><td>Complete preparation and online filing of Form 10A (provisional registration) or Form 10AB (regular registration / renewal) on the Income Tax e-filing portal</td></tr>
                        <tr><td>Document Preparation</td><td>Self-certification, formatting, and uploading of all required attachments including registration certificates, PAN, activity reports, and financial statements</td></tr>
                        <tr><td>PCIT(E) Scrutiny Handling</td><td>End-to-end management of queries, additional document requests, and hearings before the Principal Commissioner of Income Tax (Exemptions)</td></tr>
                        <tr><td>Bundled 80G + NGO Darpan + CSR-1</td><td>Optional bundled service covering <a href="/80g-registration">80G registration</a>, NITI Aayog <a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">NGO Darpan</a> enrolment, and CSR-1 registration on MCA portal</td></tr>
                        <tr><td>Post-Registration Compliance</td><td>Guidance on annual ITR filing (Form ITR-7), audit requirements (if income exceeds basic exemption limit), and accumulation rules under Section 11</td></tr>

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
            <h2 class="section-title">8-Step Process for 12A Registration Online</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The entire registration process is online through the Income Tax e-filing portal. No physical office visit is required. Patron Accounting's CA team manages each step end-to-end.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Incorporate the NGO</h3>
        <p class="step-description">Register your organisation as a charitable trust (under the Indian Trusts Act, 1882), society (under the Societies Registration Act, 1860), or Section 8 company (under the Companies Act, 2013). Obtain PAN in the name of the organisation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Trust/Society/Section 8 formation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN obtained</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">NGO Registered</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Verify Objects Clause</h3>
        <p class="step-description">Ensure the trust deed, MOA, or AOA contains objects that fall within 'charitable purpose' as defined in Section 2(15) of the Income Tax Act, 1961 - relief of the poor, education, yoga, medical relief, preservation of environment and monuments, or advancement of general public utility.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 2(15) compliance</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Objects clause reviewed by CA</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="40" r="20" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="64" y1="54" x2="80" y2="70" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">Objects Verified</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Register on IT E-Filing Portal</h3>
        <p class="step-description">Visit incometax.gov.in and register the organisation using its PAN. Create login credentials and activate the account. Ensure the authorised signatory's mobile number and email are updated for OTP verification.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal account created</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Signatory details updated</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><rect x="30" y="36" width="15" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="50" y="36" width="35" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><rect x="30" y="52" width="15" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="50" y="52" width="35" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/></svg>
            </div>
            <span class="illustration-label">Portal Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Prepare and Upload Documents</h3>
        <p class="step-description">Compile all required documents as self-certified PDF copies. Each file should be under 5 MB and named clearly (e.g., TrustDeed.pdf, PAN_Card.pdf). Includes trust deed, PAN, registration certificate, accounts, and activity report.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Self-certified documents</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Files under 5 MB limit</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 55 L60 30" stroke="#F5A623" stroke-width="2.5"/><path d="M50 38 L60 28 L70 38" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">Docs Compiled</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File Form 10A Online</h3>
        <p class="step-description">Navigate to e-File > Income Tax Forms > select Form 10A > choose the relevant Assessment Year. Select the correct Section Code under Section 12AB clause. Fill in all mandatory fields including nature of activities, details of trustees/directors, and financial information.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Correct section code selected</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All fields completed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><rect x="30" y="36" width="15" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="50" y="36" width="35" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><rect x="30" y="52" width="15" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="50" y="52" width="35" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/></svg>
            </div>
            <span class="illustration-label">Form 10A Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Submit with DSC or EVC</h3>
        <p class="step-description">Submit the completed Form 10A using Digital Signature Certificate (DSC) of the authorised signatory or Electronic Verification Code (EVC) via Aadhaar OTP. Save the acknowledgement number for tracking.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC or Aadhaar OTP verified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Acknowledgement saved</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M55 38 L58 41 L66 33" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><rect x="35" y="56" width="50" height="8" rx="4" fill="#25D366" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Form Submitted</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Await PCIT(E) Order</h3>
        <p class="step-description">The Principal Commissioner of Income Tax (Exemptions) reviews the application. For provisional registration, the order in Form 10AC is typically issued within 1 month from the end of the month of application under Section 12AB(3). For regular registration, the timeline is 6 months.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Provisional: 1 month timeline</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regular: up to 6 months</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 25 L60 40 L72 46" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">Under Review</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Download Registration Certificate</h3>
        <p class="step-description">Once the order is passed, download the Form 10AC order and the 16-digit URN from the e-filing portal. This confirms your 12A registration status. Quote this URN in all future ITR-7 filings and 80G applications.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 10AC order received</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 16-digit URN assigned</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M55 35l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><rect x="40" y="55" width="40" height="6" rx="3" fill="#F5A623" opacity="0.4"/></svg>
            </div>
            <span class="illustration-label">12A Granted</span>
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
            <h2 class="section-title">Documents Required for 12A Registration</h2>
            <div class="content-text">
                
                <p>The following documents must be self-certified and uploaded as PDF attachments with Form 10A / Form 10AB:</p>
                <ul>
                    <li><strong>For Trusts:</strong> Self-certified copy of Trust Deed / Instrument of Creation</li>
                    <li><strong>For Societies:</strong> Self-certified copy of MOA and Rules / Bye-laws</li>
                    <li><strong>For Section 8 Companies:</strong> Self-certified copy of MOA and AOA with Certificate of Incorporation</li>
                    <li><strong>For All:</strong> PAN Card of the organisation</li>
                    <li><strong>For All:</strong> Registration Certificate (from Sub-Registrar / Registrar of Societies / RoC)</li>
                    <li><strong>Existing NGOs:</strong> Self-certified copy of existing 12A / 12AA / 12AB order (if renewal)</li>
                    <li><strong>If applicable:</strong> Self-certified copy of existing 80G registration order</li>
                    <li><strong>If applicable:</strong> Self-certified copy of FCRA registration (under FCRA 2010)</li>
                    <li><strong>Existing NGOs:</strong> Audited annual accounts for the last 3 years</li>
                    <li><strong>For All:</strong> Activity report / note on activities since inception or last 3 years</li>
                    <li><strong>For All:</strong> List of all trustees / directors / governing body members with PAN, Aadhaar, and address</li>
                    <li><strong>For All:</strong> Bank account details (account number, IFSC, bank name)</li>
                </ul>
                <p style="margin-top:12px;font-style:italic;color:var(--text-muted);">All documents must be in English. If the original is in a vernacular language, get it translated and notarised before uploading.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in 12A Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Objects Clause Non-Compliance</td><td>Trust deeds with vague or overly broad objects get rejected by PCIT(E)</td><td>CA team reviews and recommends supplementary deed amendments to align objects with Section 2(15) before filing Form 10A</td></tr>
                        <tr><td>Missed Renewal Deadline</td><td>Form 10AB not filed 6 months before expiry - registration lapses and NGO loses tax-exempt status</td><td>Urgent remediation with condonation-of-delay applications and supporting representations to PCIT(E)</td></tr>
                        <tr><td>PCIT(E) Scrutiny Queries</td><td>Commissioner requests additional documents, seeks clarifications on fund utilisation, or questions genuineness of activities</td><td>CA team prepares detailed responses, compiles supporting evidence, and represents the NGO during hearings</td></tr>
                        <tr><td>Portal Technical Issues</td><td>Incorrect PAN-based registration, auto-filled fields not populating, file upload size limits exceeded</td><td>Portal credentials correctly configured, files formatted within 5 MB limit, OTP verification completed before submission</td></tr>

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
            <h2 class="section-title">Fees and Costs for 12A Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Form 10A / Form 10AB)</td><td>Nil - No government fee charged by Income Tax Department</td></tr>
                        <tr><td>Patron Accounting Professional Fees (12A Standalone)</td><td>INR 7,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>12A + 80G Registration (Bundled)</td><td>From INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>12A + 80G + NGO Darpan + CSR-1 (Complete Package)</td><td>From INR 14,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>12A Renewal (Form 10AB)</td><td>INR 7,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free 12A Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%2012A%20registration.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for 12A Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Trust deed / MOA review and document preparation</td><td>2-5 working days</td></tr>
                        <tr><td>Form 10A filing on IT portal</td><td>1-2 working days</td></tr>
                        <tr><td>PCIT(E) order for provisional registration</td><td>Up to 1 month from end of month of application (Section 12AB(3))</td></tr>
                        <tr><td>PCIT(E) order for regular registration</td><td>Up to 6 months from end of month of application</td></tr>
                        <tr><td>Total (Provisional - New NGO)</td><td>15-45 days typically</td></tr>
                        <tr><td>Total (Regular - Existing NGO)</td><td>1-6 months depending on scrutiny</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Fast-Track Tip:</strong> Provisional registration (Form 10A for new NGOs) is typically the fastest route - often completed within 15-30 days when documentation is complete. Patron Accounting ensures first-time-right filing to minimise delays. Call <a href="tel:+919459456700">+91 945 945 6700</a> for a timeline estimate for your NGO.</p>

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
            <h2 class="section-title">5 Benefits of Professional 12A Registration Assistance</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3>Objects Clause Compliance</h3>
                <p>CA team ensures trust deed objects align with Section 2(15) charitable purpose definition before filing, preventing rejection at the PCIT(E) stage.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg></div>
                <h3>Correct Section Code Selection</h3>
                <p>Multiple section codes exist under Section 12AB clause (ac). Selecting the wrong code leads to rejection. Our team identifies the correct clause based on your NGO's registration history.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>PCIT(E) Representation</h3>
                <p>If the Commissioner raises queries or requests hearings, our CA team prepares responses and represents the NGO professionally throughout the scrutiny process.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"/></svg></div>
                <h3>Bundled NGO Compliance</h3>
                <p>12A alone is insufficient for full NGO operability. We bundle 80G, NGO Darpan, and CSR-1 registration to make your NGO grant-ready and CSR-ready from day one.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3>Post-Registration Compliance</h3>
                <p>Annual ITR-7 filing, audit coordination when income exceeds the basic exemption limit, and accumulation tracking under Section 11 - all managed by our team.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Organisations Across India</h2>
            <div class="content-text">
                
                <p><strong>15+ Years Experience | 10,000+ Businesses Served | 4.9 Google Rating | Offices in 8 Cities</strong></p>
                <p>Patron Accounting has helped hundreds of charitable trusts, societies, and Section 8 companies obtain and maintain their 12A registration across India. From education trusts in Pune to charitable societies in Delhi and Section 8 companies in Bangalore, our CA and CS team delivers end-to-end NGO compliance services.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Filing vs Professional 12A Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY (Self-Filing)</th><th>With Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Deed Review</td><td>Self-assessment - risk of non-compliant objects clause</td><td>CA-reviewed for Section 2(15) compliance</td></tr>
                        <tr><td>Section Code Selection</td><td>Manual selection - common error leading to rejection</td><td>Correct clause identified based on NGO history</td></tr>
                        <tr><td>Form 10A Preparation</td><td>Self-filled online</td><td>CA-prepared with all fields verified</td></tr>
                        <tr><td>Document Compilation</td><td>Self-managed</td><td>Professional compilation with self-certification guidance</td></tr>
                        <tr><td>PCIT(E) Query Response</td><td>Self-managed - risk of inadequate responses</td><td>CA-prepared responses with supporting evidence</td></tr>
                        <tr><td>Timeline</td><td>Varies - depends on errors and resubmissions</td><td>15-45 days (provisional) with first-time-right filing</td></tr>
                        <tr><td>Cost</td><td>Nil (government fee is zero)</td><td>From INR 7,499 (professional fee)</td></tr>
                        <tr><td>Post-Registration Guidance</td><td>None</td><td>ITR-7 filing, audit, accumulation compliance</td></tr>

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
                
                <p>If you are registering for 12A, you may also need these complementary services from Patron Accounting:</p>
                <ul>
                    <li><a href="/80g-registration">80G Registration</a> - Enables donors to claim tax deductions under Section 80G on donations to your NGO. 80G can only be applied after obtaining 12A registration.</li>
                    <li><a href="/ngo-registration">NGO Registration</a> - Register your organisation as a Trust, Society, or Section 8 Company before applying for 12A.</li>
                    <li><a href="/section8-company-registration">Section 8 Company Registration</a> - Incorporate a not-for-profit company under the Companies Act, 2013.</li>
                    <li><a href="/fcra-registration">FCRA Registration</a> - Register under the Foreign Contribution (Regulation) Act, 2010 to receive foreign donations. Requires prior 12A registration.</li>
                    <li>Society Registration - Register a society under the Societies Registration Act, 1860 for charitable, literary, or scientific purposes.</li>
                    <li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Annual ITR-7 filing is mandatory for all 12A-registered trusts and institutions.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for 12A Registration</h2>
            <div class="content-text">
                
                <p><strong>Section 2(15):</strong> Defines 'charitable purpose' - relief of the poor, education, yoga, medical relief, preservation of environment and monuments, advancement of general public utility. Trade/commerce receipts must not exceed 20% of total receipts.</p>
                <p><strong>Section 11:</strong> Income from property held for charitable or religious purposes is exempt if applied to such purposes. Up to 15% of income may be accumulated for future application. From FY 2022-23, unapplied income beyond 85% is taxable in the same year.</p>
                <p><strong>Section 12:</strong> Voluntary contributions received by charitable trusts are treated as income but eligible for exemption under Section 11 if applied for charitable purposes. Corpus donations are exempt under Section 11(1)(d).</p>
                <p><strong>Section 12A:</strong> Prescribes conditions for registration - mandates that trusts/institutions must register to claim exemption under Sections 11 and 12.</p>
                <p><strong>Section 12AB:</strong> Procedure for registration - introduced by Finance Act 2020, effective 1 April 2021. Prescribes Form 10A (provisional), Form 10AB (regular/renewal), timelines for PCIT(E) orders, and grounds for cancellation.</p>
                <p><strong>Section 13:</strong> Denial of exemption - income not exempt if applied for private religious purposes, benefits a particular religion/caste, income/property used for benefit of specified persons, or funds invested in prohibited modes under Section 11(5).</p>
                <p><strong>Section 115TD:</strong> Exit tax - if registration is cancelled, accreted income (fair market value of assets minus liabilities) is taxed at maximum marginal rate.</p>
                <p><strong>Key Amendments:</strong> Finance Act 2020 introduced Section 12AB and mandatory re-registration. Finance Act 2023 treated donations to other trusts as application only to extent of 85%. Finance Act 2025 (Budget 2025) extended validity to 10 years for trusts with income under Rs 5 crore.</p>
                <p><strong>Consequences of Non-Registration:</strong> All income taxed at applicable slab rates. No exemption under Sections 11 and 12. Donors cannot claim 80G deductions. NGO ineligible for government grants, CSR funding, and FCRA registration. Penalty under FEMA Section 13 of Income Tax Act applies - up to 3 times the amount involved for specified violations.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - 12A Registration</h2>
                    <p class="faq-expanded__lead">Expert answers from our CA team on 12A registration under Section 12AB, Form 10A filing, renewal deadlines, and NGO tax exemption compliance.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => '12A Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is 12A registration for an NGO?</h3>
                        <div class="faq-expanded__a"><p>12A registration is a tax exemption registration under Section 12A of the Income Tax Act, 1961. It allows charitable trusts, societies, and Section 8 companies to claim exemption from income tax on surplus income applied for charitable purposes. The registration is now processed under Section 12AB through Form 10A (new) or Form 10AB (renewal) filed on the Income Tax e-filing portal. Without 12A, an NGO's income - including donations - is taxed like any commercial entity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between 12A and 12AB registration?</h3>
                        <div class="faq-expanded__a"><p>Section 12A prescribes the conditions for claiming tax exemption, while Section 12AB (introduced by Finance Act 2020, effective 1 April 2021) prescribes the procedure for registration. Earlier, the procedure was under Section 12AA. All new registrations since April 2021 are processed under 12AB. In practice, when people say '12A registration', they mean registration under the 12AB procedure for claiming benefits under 12A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How to apply for 12A registration online?</h3>
                        <div class="faq-expanded__a"><p>Log in to the Income Tax e-filing portal (incometax.gov.in) using the NGO's PAN. Navigate to e-File > Income Tax Forms > Form 10A. Select the relevant assessment year and section code. Fill in organisation details, trustee/director information, and activity description. Upload self-certified copies of trust deed, PAN, registration certificate, and financial statements. Submit using DSC or EVC (Aadhaar OTP). The PCIT(E) issues the order in Form 10AC within 1 month for provisional registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">12A registration ke liye kya documents chahiye?</h3>
                        <div class="faq-expanded__a"><p>You need self-certified copies of: trust deed or MOA, PAN card, registration certificate from the relevant authority (Sub-Registrar, Registrar of Societies, or RoC), audited accounts for the last 3 years (for existing NGOs), activity report, list of trustees/directors with PAN and Aadhaar, bank account details, and FCRA registration certificate (if applicable). All documents must be in English. Vernacular documents require notarised English translations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the government fee for 12A registration?</h3>
                        <div class="faq-expanded__a"><p>There is no government fee for filing Form 10A or Form 10AB for 12A registration. The Income Tax Department does not charge any filing fee. The only cost involved is professional fees if you engage a CA firm for assistance. Patron Accounting's professional fee starts from INR 7,499 (exclusive of GST) for standalone 12A registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does 12A registration take?</h3>
                        <div class="faq-expanded__a"><p>Under Section 12AB(3), the PCIT(E) must pass the order within 1 month from the end of the month of application for provisional registration (Form 10A for new NGOs). For regular registration via Form 10AB, the timeline is 6 months. In practice, provisional registration is typically received within 15 to 30 days if documents are complete. Regular registration may take 1 to 6 months depending on scrutiny.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a trust apply for 12A and 80G together?</h3>
                        <div class="faq-expanded__a"><p>Yes, a trust can file separate Form 10A applications for both 12A and 80G simultaneously on the Income Tax e-filing portal. However, 12A registration is a prerequisite for 80G - the Income Tax Department typically processes 12A first and then 80G. Patron Accounting offers a bundled 12A + 80G registration service for convenience and cost efficiency.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if 12A registration is not renewed on time?</h3>
                        <div class="faq-expanded__a"><p>If the renewal application (Form 10AB) is not filed before the deadline, the 12A registration lapses on expiry. The NGO loses its tax-exempt status, all income becomes taxable, donors can no longer claim 80G deductions, and the NGO becomes ineligible for government grants and CSR funding. Under Section 115TD, the accreted income (fair market value of assets minus liabilities) may be taxed at the maximum marginal rate. Late filing with a condonation-of-delay application is possible but not guaranteed.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>12A registration kya hai?</strong> 12A registration is a tax exemption registration for NGOs (trusts, societies, Section 8 companies) under the Income Tax Act. It allows your NGO's income used for charitable purposes to be exempt from income tax.</p>
                <p><strong>12A registration kitne din mein hota hai?</strong> Provisional registration takes 15-30 days. Regular registration takes 1-6 months.</p>
                <p><strong>12A aur 80G mein kya fark hai?</strong> 12A exempts the NGO's own income from tax. 80G allows donors to claim tax deductions on donations to the NGO. 12A is a prerequisite for 80G.</p>
                <p><strong>Can Section 8 company get 12A?</strong> Yes. Section 8 companies incorporated under the Companies Act, 2013 are eligible for 12A registration if their objects qualify as charitable under Section 2(15).</p>
                <p><strong>Is 12A registration permanent?</strong> No. Provisional registration is valid for 3 years and regular registration for 5 years (10 years for trusts with income under Rs 5 crore from April 2025). Renewal via Form 10AB must be filed before expiry.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Renewal Deadline Alert - Act Now</h2>
            <div class="content-text">
                
                <p><strong>If your NGO received 12A/12AB registration in 2021 (5-year validity), your registration expired on 31 March 2026.</strong> The deadline for filing Form 10AB was 30 September 2025 (6 months before expiry). If you missed this deadline, your NGO's tax-exempt status has lapsed.</p>
                <p>Patron Accounting provides urgent remediation for lapsed registrations with condonation-of-delay applications and PCIT(E) representations. Under Section 115TD, accreted income of a trust that loses 12AB status may be taxed at the maximum marginal rate.</p>
                <p style="margin-top:16px;"><strong>Contact us immediately - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%2012A%20registration%20for%20my%20NGO.%20Please%20share%20details." target="_blank">WhatsApp us</a> to restore your 12A status before your NGO incurs tax liability.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your 12A Registration Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">12A registration is the foundational tax compliance step for every charitable trust, society, and Section 8 company in India. Under the current Section 12AB framework, the process is fully online through Form 10A (provisional) or Form 10AB (regular/renewal), with no government fee. The Finance Act 2025 amendment extending validity to 10 years for smaller trusts further reduces the compliance burden.</p>
                <p style="color:rgba(255,255,255,0.85);">However, the registration involves technical nuances - correct section code selection, objects clause compliance with Section 2(15), and PCIT(E) scrutiny handling - where professional CA guidance makes a material difference. Patron Accounting's CA and CS team manages the entire process end-to-end, from trust deed review to post-registration compliance, across 8 cities in India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%2012A%20registration.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%2012A%20Registration%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%2012A%20Registration%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">12A Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert CA assistance for 12A registration from our offices across major Indian cities</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
                    <div class="pa-city-grid">
                        <a href="/12a-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/12a-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/12a-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                        <a href="/12a-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        <a href="/12a-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                        
                        
                        <a href="/12a-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                    </div>
                </div>
                <div class="pa-city-block">
                    <div class="pa-block-title">Related NGO Services</div>
                    <div class="pa-block-sub">End-to-end NGO compliance support</div>
                    <div class="pa-cross-grid">
                        <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">12A and 80G Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/ngo-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/section8-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/fcra-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FCRA Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return (ITR) Filing</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) by Patron Accounting's CA and CS team to reflect 12A/12AB amendments, Form 10A/10AB deadline changes, PCIT(E) procedural updates, Budget announcements affecting NGO taxation, and validity period changes.</p>
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
