
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Company Registration in UAE - Freezone, Cost & Documents</title>
    <meta name="description" content="Register a company in UAE from India. Mainland, Free Zone, Offshore setup from AED 4,999. 100% foreign ownership. CA-managed process. Call now.">
    <link rel="canonical" href="/company-registration-in-uae">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Company Registration in UAE - Freezone, Cost & Documents">
    <meta property="og:description" content="Register a company in UAE from India. Mainland, Free Zone, Offshore setup from AED 4,999. 100% foreign ownership. CA-managed process. Call now.">
    <meta property="og:url" content="/company-registration-in-uae">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Company Registration in UAE - Freezone, Cost & Documents">
    <meta name="twitter:description" content="Register a company in UAE from India. Mainland, Free Zone, Offshore setup from AED 4,999. 100% foreign ownership. CA-managed process. Call now.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Company Registration in UAE - Freezone, Cost & Documents",
          "description": "Register a company in UAE from India. Mainland, Free Zone, Offshore setup from AED 4,999. 100% foreign ownership. CA-managed process. Call now.",
          "url": "https://www.patronaccounting.com/company-registration-in-uae",
          "serviceType": "Company Registration in UAE - Freezone, Cost & Documents",
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
              "name": "Company Registration in UAE - Freezone, Cost & Documents",
              "item": "https://www.patronaccounting.com/company-registration-in-uae"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to register a company in UAE from India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Choose a jurisdiction (Mainland, Free Zone, or Offshore), select a business activity, reserve a trade name, submit incorporation documents with passport copies, pay license fees, and obtain the trade license. The entire process can be managed from India with Patron Accounting's assistance. Physical presence is required only for visa stamping and Emirates ID. Timeline is 1-4 weeks."
              }
            },
            {
              "@type": "Question",
              "name": "What is the cost of company registration in UAE?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Free Zone setup starts from AED 5,500 (approximately Rs 1.25 lakh) for a basic package without visas. Mainland LLC starts from AED 15,000 (approximately Rs 3.4 lakh). Offshore starts from AED 8,000 (approximately Rs 1.8 lakh). Additional costs include visa processing (AED 3,000-5,000 per visa), office rent, and bank account minimum deposit."
              }
            },
            {
              "@type": "Question",
              "name": "Can an Indian citizen own 100% of a UAE company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Following the 2021 amendment to the UAE Commercial Companies Law, 100% foreign ownership is allowed in most mainland business activities. Free Zone companies have always permitted 100% foreign ownership. Only a few strategic sectors may still require UAE national participation. Indian citizens must comply with FEMA and RBI regulations when investing from India."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Mainland and Free Zone in UAE?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Mainland companies can trade directly in the UAE local market and with government entities. Free Zone companies are restricted from direct mainland trading but offer lower costs, simplified setup, potential corporate tax exemption, and customs duty benefits. Mainland requires physical office space. Free Zones offer flexi-desk and virtual office options. Both allow 100% foreign ownership."
              }
            },
            {
              "@type": "Question",
              "name": "What taxes apply to companies in UAE?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The UAE levies 9% corporate tax on profits exceeding AED 375,000. The first AED 375,000 is taxed at 0%. Qualifying Free Zone persons may be eligible for 0% corporate tax if they meet specific conditions. VAT at 5% applies if annual taxable supplies exceed AED 375,000. There is no personal income tax, no withholding tax, and no capital gains tax."
              }
            },
            {
              "@type": "Question",
              "name": "Do I need a local sponsor for UAE company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, for most business activities. The 2021 amendment removed the requirement for a UAE national partner in most sectors. Both Mainland and Free Zone companies can be 100% foreign-owned. Some strategic activities may still require a local partner or service agent. Patron Accounting advises on activity-specific requirements."
              }
            },
            {
              "@type": "Question",
              "name": "How long does UAE company registration take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Free Zone companies: 5-10 working days. Mainland: 2-4 weeks. Offshore: 3-7 working days. Bank account opening adds 2-4 weeks. Total from start to operational readiness is typically 3-6 weeks including visa processing and banking."
              }
            },
            {
              "@type": "Question",
              "name": "Is FEMA approval required for Indians to register a UAE company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Individual investment from India falls under the Liberalised Remittance Scheme (LRS) with a limit of USD 250,000 per financial year. This does not require RBI approval but must be remitted through an authorised dealer bank. If an Indian company is investing (Overseas Direct Investment), the ODI framework under FEMA applies and may require RBI approval."
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
                        Company Registration in UAE - Start Your Business from India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>100% Foreign Ownership:</span> Register across Mainland, Free Zone, or Offshore jurisdictions - 100% ownership available for Indian entrepreneurs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax Advantage:</span> 0% personal income tax, 9% corporate tax only on profits above AED 375,000, 45+ free zones available</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Quick Setup:</span> Complete setup in 1-4 weeks - trade license, visa processing, bank account, and tax registration handled end-to-end</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Managed from India:</span> Entire process managed remotely by our CA team - FEMA compliance, licensing, visa, and ongoing UAE tax compliance</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | India-UAE Dual Expertise</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20a%20company%20in%20UAE%20from%20India.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Company Registration in UAE',
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
    'ctaText'    => 'Join hundreds of Indian entrepreneurs with UAE businesses set up by Patron Accounting',
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
                <a href="#what-is-section" class="toc-btn">What Is</a>
                <a href="#who-section" class="toc-btn">Who Should</a>
                <a href="#services-section" class="toc-btn">Our Services</a>
                <a href="#procedure-section" class="toc-btn">Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Cost</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why Patron</a>
                <a href="#comparison-section" class="toc-btn">Comparison</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company Registration in UAE - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Company Registration in UAE Services at a Glance</strong></p>
                    <p><p><strong>TL;DR:</strong> The UAE is one of the most business-friendly jurisdictions for Indian entrepreneurs. With no personal income tax, 100% foreign ownership in most sectors, and strategic access to Middle East, Africa, and European markets, registering a company in the UAE provides a globally respected business base. The process involves selecting a jurisdiction (Mainland, Free Zone, or Offshore), reserving a trade name, obtaining a trade license, and opening a corporate bank account. Patron Accounting manages the entire process from India.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
                <tr><td>What</td><td>Legal incorporation of a company in the UAE across Mainland, Free Zone, or Offshore jurisdictions</td></tr>
                <tr><td>Who Can Register</td><td>Indian individuals, HUFs, companies, NRIs - 100% foreign ownership available in most sectors</td></tr>
                <tr><td>Jurisdictions</td><td>Mainland (DET/DED) | Free Zone (45+ zones) | Offshore (international operations)</td></tr>
                <tr><td>Cost</td><td>Free Zone from AED 5,500 (~Rs 1.25 lakh) | Mainland from AED 15,000 (~Rs 3.4 lakh) | Offshore from AED 8,000</td></tr>
                <tr><td>Timeline</td><td>1-4 weeks (Free Zone: 5-10 days | Mainland: 2-4 weeks | Offshore: 1 week)</td></tr>
                <tr><td>Corporate Tax</td><td>9% on profits above AED 375,000 (~Rs 85 lakh). 0% for qualifying Free Zone persons</td></tr>
                <tr><td>Key Benefit</td><td>No personal income tax, 100% profit repatriation, investor visa, global banking access</td></tr>
                </tbody></table></div></p>
                </div>
                <p><p>The process involves selecting a jurisdiction, choosing a business activity and legal structure, reserving a trade name, obtaining a trade license, and opening a corporate bank account. Patron Accounting manages the entire registration from India, handling documentation, licensing, visa processing, and post-registration compliance including UAE corporate tax and VAT registration on the <a href="https://tax.gov.ae" target="_blank" rel="noopener">FTA EmaraTax portal</a>.</p></p>
                <p><p>Indian residents must comply with FEMA regulations when investing abroad. Remittance under the Liberalised Remittance Scheme (LRS) is capped at USD 250,000 per financial year per individual. For corporate investments, the Overseas Direct Investment (ODI) framework under FEMA applies. India and UAE have a Double Taxation Avoidance Agreement (DTAA) for tax-efficient profit repatriation.</p></p>
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
                <h2 class="section-title">What Is Company Registration in UAE?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Company registration in the UAE is the formal process of incorporating a business entity under UAE federal and emirate-specific laws, obtaining a trade license, and gaining legal authority to conduct business within or from the UAE. The registration establishes the company as a distinct legal entity recognised by the UAE government.</p>
                <p>The UAE comprises seven emirates - Abu Dhabi, Dubai, Sharjah, Ajman, Umm Al Quwain, Ras Al Khaimah, and Fujairah - each with its own <a href="https://www.dubaided.gov.ae" target="_blank" rel="noopener">Department of Economic Development (DED)</a> or Department of Economy and Tourism (DET) for mainland companies, and over 45 free zones governed by independent Free Zone Authorities.</p>
                <p>Following the 2021 amendment to the UAE Commercial Companies Law, 100% foreign ownership is now permitted in most mainland business activities, removing the previous requirement for a UAE national partner. This reform has made the UAE even more attractive for Indian entrepreneurs seeking international expansion.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Company Registration in UAE:</strong></p>
                    <ul>
                    <li><strong>Mainland Company:</strong> Registered with the DED/DET. Can trade anywhere in the UAE and with local market. 100% foreign ownership in most sectors post-2021. Requires physical office space.</li>
                    <li><strong>Free Zone Company:</strong> Registered within one of 45+ free zones (<a href="https://www.dmcc.ae" target="_blank" rel="noopener">DMCC</a>, IFZA, DAFZA, etc.). 100% foreign ownership, potential corporate tax exemption, customs duty benefits. Cannot trade directly in UAE mainland.</li>
                    <li><strong>Offshore Company:</strong> Incorporated in UAE offshore jurisdictions (JAFZA Offshore, RAK ICC). Cannot conduct business within UAE. Used for international operations, holding structures, asset protection.</li>
                    <li><strong>Trade License:</strong> Primary business permit from DED/DET or Free Zone Authority. Types: Commercial (trading), Professional (services), Industrial (manufacturing). Annual renewal required.</li>
                    <li><strong>LLC (Limited Liability Company):</strong> Most common mainland structure. Liability limited to capital contribution. 1-50 shareholders. No minimum capital in most emirates.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Company Registration in UAE</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>UAE Business Setup</span>
                        <strong>100% Ownership</strong>
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
            <h2 class="section-title">Who Should Register a Company in UAE?</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Indian entrepreneurs and startups</strong> seeking international market access through a globally respected jurisdiction</li>
                    <li><strong>IT, consulting, and professional services firms</strong> expanding to Middle East and African markets</li>
                    <li><strong>Trading companies</strong> seeking import/export operations through Dubai's logistics hub (Jebel Ali Port)</li>
                    <li><strong>Indian manufacturers</strong> wanting a distribution base in the GCC region</li>
                    <li><strong>Freelancers and consultants</strong> seeking UAE residency and a tax-efficient business base</li>
                    <li><strong>Indian companies</strong> creating holding structures for international operations</li>
                    <li><strong>NRIs and PIOs</strong> already in the UAE seeking to formalise business operations</li>
                </ul>
                <p style="margin-top:16px;"><strong>India-Specific Considerations:</strong> FEMA compliance (LRS cap USD 250,000/year for individuals), RBI reporting for overseas investments, ODI framework for corporate investments, and India-UAE DTAA for tax-efficient profit repatriation.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's UAE Company Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Jurisdiction Advisory</td><td>Expert guidance on Mainland vs Free Zone vs Offshore selection based on business activity, target market, budget, and visa requirements</td></tr>
                        <tr><td>Trade Name Reservation</td><td>Name availability check, cultural sensitivity review, and reservation with DED/DET or Free Zone Authority</td></tr>
                        <tr><td>Trade License Application</td><td>Complete preparation and filing with the relevant authority including business activity selection and legal structure setup</td></tr>
                        <tr><td>MOA/AOA Drafting</td><td>Memorandum and Articles of Association preparation, notarisation, and submission</td></tr>
                        <tr><td>Visa Processing</td><td>Investor/partner visa, employment visa, Emirates ID, medical fitness test coordination, and GDRFA registration</td></tr>
                        <tr><td>Corporate Bank Account</td><td>Bank selection guidance, KYC documentation, and application submission for UAE corporate banking</td></tr>

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
            <h2 class="section-title">9-Step Process for UAE Company Registration from India</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The entire process can be managed from India. Physical presence in UAE is required only for visa stamping and Emirates ID biometrics. Patron Accounting handles each step end-to-end.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Choose Jurisdiction and Business Activity</h3><p class="step-description">Decide between Mainland, Free Zone, or Offshore based on your target market, budget, and operational needs. Select from approved business activities. The activity determines trade license type (Commercial, Professional, or Industrial).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Mainland vs Free Zone vs Offshore</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Activity and license type selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="40" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="35" y="42" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ML</text><rect x="65" y="15" width="40" height="50" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="85" y="42" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FZ</text></svg></div><span class="illustration-label">Jurisdiction Selected</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Select Legal Structure</h3><p class="step-description">Choose LLC, Sole Establishment, Civil Company, Branch Office (Mainland), or FZ-LLC, FZE, FZCO, Branch (Free Zone). LLC is the most common structure for Indian entrepreneurs in both jurisdictions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> LLC recommended for most</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Structure matched to needs</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LLC</text><line x1="40" y1="48" x2="80" y2="48" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Structure Confirmed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reserve Trade Name</h3><p class="step-description">Submit a trade name reservation to DED/DET or Free Zone Authority. Name must be unique, culturally appropriate, reflect business activity, and not contain restricted terms. Cost AED 600-1,000.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Unique name verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Cultural compliance checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="42" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TRADE NAME</text><circle cx="90" cy="20" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M86 20l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Name Reserved</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Obtain Initial Approval</h3><p class="step-description">Submit passport copies, proposed activities, and legal structure details. The authority issues a preliminary approval certificate. Some activities (healthcare, education, financial) require additional regulatory approvals.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Preliminary approval obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regulatory checks complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 38l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Approval Received</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Submit Incorporation Documents</h3><p class="step-description">Draft MOA/AOA, get them notarised, arrange office space (physical for Mainland, flexi-desk for Free Zone), and submit complete application with all supporting documents.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MOA/AOA notarised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Office space arranged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="35" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="25" y="20" width="35" height="45" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="35" y="30" width="35" height="45" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/></svg></div><span class="illustration-label">Docs Submitted</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive Trade License</h3><p class="step-description">Pay the trade license fee and registration charges. Upon approval, receive the trade license and certificate of incorporation. The company is now legally registered and can begin operations.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> License fee paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate of incorporation issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M55 35l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><rect x="35" y="55" width="50" height="6" rx="3" fill="#F5A623" opacity="0.4"/></svg></div><span class="illustration-label">License Granted</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Apply for Visas</h3><p class="step-description">Apply for investor/partner visa through GDRFA. Process involves entry permit, medical fitness test, Emirates ID registration, and visa stamping. Each visa costs approximately AED 3,000-5,000.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Entry permit issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Emirates ID registered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="22" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="50" y="30" width="20" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="41" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">VISA</text></svg></div><span class="illustration-label">Visas Processed</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Open Corporate Bank Account</h3><p class="step-description">Submit trade license, MOA, passport copies, and business plan to selected bank. KYC requirements are stringent. Processing takes 2-4 weeks. Minimum deposit varies by bank.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> KYC documentation prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank selected for best fit</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="28" width="50" height="12" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="37" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">BANK</text></svg></div><span class="illustration-label">Account Opened</span><span class="step-number-large">08</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 9</span><h3 class="step-title">Register for Corporate Tax and VAT</h3><p class="step-description">Register with the Federal Tax Authority (FTA) on EmaraTax portal within 3 months of incorporation. Corporate tax registration is mandatory. VAT registration required if annual taxable supplies exceed AED 375,000. Penalty for late registration: AED 10,000.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FTA registration complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> VAT assessed and filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="35" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FTA</text><text x="60" y="50" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">TAX REG</text></svg></div><span class="illustration-label">Tax Registered</span><span class="step-number-large">09</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for UAE Company Registration</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Passport copies</strong> of all shareholders and directors (valid 6+ months, colour copies)</li>
                    <li><strong>Passport-sized photographs</strong> (white background, recent)</li>
                    <li><strong>UAE visa copy</strong> (if existing UAE resident)</li>
                    <li><strong>No Objection Certificate (NOC)</strong> from current sponsor if already in UAE</li>
                    <li><strong>Business plan / activity description</strong> (required for some free zones and bank accounts)</li>
                    <li><strong>Memorandum of Association (MOA)</strong> drafted per jurisdiction requirements</li>
                    <li><strong>Articles of Association (AOA)</strong> for LLC structure</li>
                    <li><strong>Proof of address</strong> from home country (utility bill or bank statement)</li>
                    <li><strong>Bank reference letter</strong> from existing bank in India or UAE</li>
                    <li><strong>Tenancy contract / Ejari</strong> (office lease for Mainland companies)</li>
                </ul>
                <p style="margin-top:12px;font-style:italic;color:var(--text-muted);">For Indian entrepreneurs: All Indian documents may need attestation by the Ministry of External Affairs (MEA) and the UAE Embassy in India. Patron Accounting coordinates the attestation process.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in UAE Company Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Choosing the Wrong Jurisdiction</td><td>Mainland allows local trading but costs more. Free Zone restricts mainland trading but is cheaper.</td><td>Patron's advisory team matches your business activity and target market to the optimal jurisdiction.</td></tr>
                        <tr><td>Bank Account Opening Delays</td><td>UAE banks have strict KYC. Non-resident founders and high-risk industries face longer processing.</td><td>Patron prepares comprehensive KYC packages and recommends banks with higher approval rates for Indian entrepreneurs.</td></tr>
                        <tr><td>FEMA/RBI Compliance</td><td>Indian residents must comply with FEMA when investing abroad. LRS cap USD 250,000/year. ODI framework for corporate investments.</td><td>CA team guides on LRS limits, ODI framework, and RBI reporting requirements for overseas investments.</td></tr>
                        <tr><td>Missing Corporate Tax Deadline</td><td>UAE corporate tax registration mandatory within 3 months. Missing deadline incurs AED 10,000 penalty.</td><td>Patron includes FTA registration in the setup package to prevent penalties.</td></tr>

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
            <h2 class="section-title">Cost of Company Registration in UAE</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Free Zone (basic package - no visa)</td><td>AED 5,500 - AED 15,000 (~Rs 1.25 - 3.4 lakh)</td></tr>
                        <tr><td>Free Zone (with 1 investor visa)</td><td>AED 15,000 - AED 35,000 (~Rs 3.4 - 8 lakh)</td></tr>
                        <tr><td>Mainland LLC</td><td>AED 15,000 - AED 50,000 (~Rs 3.4 - 11.4 lakh)</td></tr>
                        <tr><td>Offshore</td><td>AED 8,000 - AED 20,000 (~Rs 1.8 - 4.5 lakh)</td></tr>
                        <tr><td>Visa Processing (per visa)</td><td>AED 3,000 - AED 5,000 (~Rs 68,000 - 1.14 lakh)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from AED 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Company Registration in UAE consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20UAE%20company%20registration%20assistance.%20Please%20call%20me%20back." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for UAE Company Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Jurisdiction and activity selection</td><td>1-2 days</td></tr>
                        <tr><td>Trade name reservation</td><td>1-3 days</td></tr>
                        <tr><td>Initial approval</td><td>1-3 days</td></tr>
                        <tr><td>Document preparation (MOA, attestation)</td><td>3-7 days</td></tr>
                        <tr><td>License issuance (Free Zone / Mainland)</td><td>5-10 days (FZ) / 2-4 weeks (Mainland)</td></tr>
                        <tr><td>Visa processing (per visa)</td><td>5-10 working days</td></tr>
                        <tr><td>Bank account opening</td><td>2-4 weeks</td></tr>
                        <tr><td>Corporate tax / VAT registration</td><td>5-15 business days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Fast Track:</strong> Free Zone companies can be operational within 2 weeks if documents are ready. Mainland takes 3-4 weeks including office setup. Contact us at <a href="tel:+919459456700">+91 945 945 6700</a> for a timeline specific to your chosen jurisdiction and activity.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for UAE Company Registration</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>India-UAE Dual Expertise</h3><p>CA team experienced in both Indian (FEMA, RBI, Income Tax) and UAE (FTA, DET, Free Zone) compliance frameworks for seamless cross-border setup.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>End-to-End from India</h3><p>Entire process managed remotely. Physical presence in UAE required only for visa stamping and Emirates ID biometrics.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg></div><h3>Jurisdiction Optimisation</h3><p>Data-driven recommendation of Mainland, Free Zone, or Offshore based on your specific business model, not a one-size-fits-all approach.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/></svg></div><h3>Post-Registration Compliance</h3><p>Corporate tax, VAT, bookkeeping, annual license renewal, and Economic Substance Regulations (ESR) compliance managed ongoing.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:28px;height:28px;"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1"/></svg></div><h3>DTAA and Tax Planning</h3><p>Guidance on India-UAE Double Taxation Avoidance Agreement to optimise tax treatment of profits, royalties, and fees between jurisdictions.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Entrepreneurs Going Global</h2>
            <div class="content-text">
                
                <p><strong>15+ Years Experience | 10,000+ Businesses Served | 4.9 Google Rating | 8 Offices Across India</strong></p>
                <p>Patron Accounting has helped hundreds of Indian entrepreneurs set up companies in the UAE across Mainland, Free Zone, and Offshore jurisdictions. From IT companies in Pune to trading firms in Mumbai and consulting practices in Delhi, our CA team delivers end-to-end UAE business setup with FEMA-compliant structuring.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Mainland vs Free Zone vs Offshore - Which Is Right for You?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Mainland</th><th>Free Zone</th><th>Offshore</th></tr></thead>
                    <tbody>
                        <tr><td>Foreign Ownership</td><td>100% (post-2021)</td><td>100%</td><td>100%</td></tr>
                        <tr><td>UAE Local Trading</td><td>Yes - unrestricted</td><td>No - mainland restricted</td><td>No - no UAE operations</td></tr>
                        <tr><td>Physical Office</td><td>Mandatory</td><td>Flexi-desk available</td><td>Not required</td></tr>
                        <tr><td>Visa Eligibility</td><td>Yes - unlimited quota</td><td>Yes - limited quota</td><td>No visas</td></tr>
                        <tr><td>Corporate Tax</td><td>9% above AED 375K</td><td>0% (qualifying)</td><td>Typically exempt</td></tr>
                        <tr><td>Cost (First Year)</td><td>AED 15K - 50K</td><td>AED 5.5K - 35K</td><td>AED 8K - 20K</td></tr>
                        <tr><td>Best For</td><td>Local market, govt contracts</td><td>International trade, startups</td><td>Holding, asset protection</td></tr>

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
            <h2 class="section-title">Related Services for International Business Setup</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/company-registration-in-usa">Company Registration in USA</a> - Incorporate in the US with LLC or C-Corp for North American market access.</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Register a Pvt Ltd company in India as your domestic entity.</li>
                    <li><a href="/llp-incorporation">LLP Registration</a> - Register an LLP in India for professional services.</li>
                    <li><a href="/gst-registration">GST Registration</a> - Register for GST in India for domestic operations.</li>
                    <li><a href="/iec-registration">Import Export Code (IEC)</a> - Obtain IEC for cross-border trade between India and UAE.</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - Annual ITR filing for individuals and companies with overseas income.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">UAE Tax and Legal Framework for Companies</h2>
            <div class="content-text">
                
                <p><strong>Corporate Tax:</strong> 0% on first AED 375,000 profit; 9% above AED 375,000. Applies to all UAE businesses. Registration with <a href="https://tax.gov.ae" target="_blank" rel="noopener">Federal Tax Authority (FTA)</a> mandatory within 3 months. Penalty for non-registration: AED 10,000.</p>
                <p><strong>Free Zone Tax:</strong> 0% for Qualifying Free Zone Persons meeting conditions - derive qualifying income, maintain adequate substance, do not elect out of the exemption.</p>
                <p><strong>VAT:</strong> 5% standard rate. Mandatory registration if annual taxable supplies exceed AED 375,000. Voluntary registration if supplies exceed AED 187,500.</p>
                <p><strong>Personal Income Tax:</strong> 0% - No personal income tax in the UAE for individuals.</p>
                <p><strong>Withholding Tax:</strong> 0% - No withholding tax on dividends, interest, or royalties paid from UAE.</p>
                <p><strong>India-UAE DTAA:</strong> Applies for Indian shareholders receiving dividends, interest, royalties, or fees for technical services. Reduces or eliminates double taxation on cross-border income.</p>
                <p><strong>FEMA (India side):</strong> Individual investment under LRS (USD 250,000/year). Corporate investment under ODI framework. RBI reporting mandatory. All remittances through authorised dealer banks.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - UAE Company Registration</h2>
                    <p class="faq-expanded__lead">Expert answers on registering a company in UAE from India, costs, ownership rules, taxes, and FEMA compliance.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Company Registration in UAE',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to register a company in UAE from India?</h3>
                        <div class="faq-expanded__a"><p>Choose a jurisdiction (Mainland, Free Zone, or Offshore), select a business activity, reserve a trade name, submit incorporation documents with passport copies, pay license fees, and obtain the trade license. The entire process can be managed from India with Patron Accounting's assistance. Physical presence is required only for visa stamping and Emirates ID. Timeline is 1-4 weeks.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the cost of company registration in UAE?</h3>
                        <div class="faq-expanded__a"><p>Free Zone setup starts from AED 5,500 (approximately Rs 1.25 lakh) for a basic package without visas. Mainland LLC starts from AED 15,000 (approximately Rs 3.4 lakh). Offshore starts from AED 8,000 (approximately Rs 1.8 lakh). Additional costs include visa processing (AED 3,000-5,000 per visa), office rent, and bank account minimum deposit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can an Indian citizen own 100% of a UAE company?</h3>
                        <div class="faq-expanded__a"><p>Yes. Following the 2021 amendment to the UAE Commercial Companies Law, 100% foreign ownership is allowed in most mainland business activities. Free Zone companies have always permitted 100% foreign ownership. Only a few strategic sectors may still require UAE national participation. Indian citizens must comply with FEMA and RBI regulations when investing from India.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between Mainland and Free Zone in UAE?</h3>
                        <div class="faq-expanded__a"><p>Mainland companies can trade directly in the UAE local market and with government entities. Free Zone companies are restricted from direct mainland trading but offer lower costs, simplified setup, potential corporate tax exemption, and customs duty benefits. Mainland requires physical office space. Free Zones offer flexi-desk and virtual office options. Both allow 100% foreign ownership.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What taxes apply to companies in UAE?</h3>
                        <div class="faq-expanded__a"><p>The UAE levies 9% corporate tax on profits exceeding AED 375,000. The first AED 375,000 is taxed at 0%. Qualifying Free Zone persons may be eligible for 0% corporate tax if they meet specific conditions. VAT at 5% applies if annual taxable supplies exceed AED 375,000. There is no personal income tax, no withholding tax, and no capital gains tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need a local sponsor for UAE company?</h3>
                        <div class="faq-expanded__a"><p>No, for most business activities. The 2021 amendment removed the requirement for a UAE national partner in most sectors. Both Mainland and Free Zone companies can be 100% foreign-owned. Some strategic activities may still require a local partner or service agent. Patron Accounting advises on activity-specific requirements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How long does UAE company registration take?</h3>
                        <div class="faq-expanded__a"><p>Free Zone companies: 5-10 working days. Mainland: 2-4 weeks. Offshore: 3-7 working days. Bank account opening adds 2-4 weeks. Total from start to operational readiness is typically 3-6 weeks including visa processing and banking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is FEMA approval required for Indians to register a UAE company?</h3>
                        <div class="faq-expanded__a"><p>Individual investment from India falls under the Liberalised Remittance Scheme (LRS) with a limit of USD 250,000 per financial year. This does not require RBI approval but must be remitted through an authorised dealer bank. If an Indian company is investing (Overseas Direct Investment), the ODI framework under FEMA applies and may require RBI approval.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>UAE mein company kaise register karein?</strong> Jurisdiction choose karein (Mainland/Free Zone/Offshore), trade name reserve karein, documents submit karein, license fee pay karein, aur trade license receive karein. Patron Accounting pura process India se manage karta hai.</p>
                <p><strong>UAE company registration kitne mein hota hai?</strong> Free Zone: AED 5,500 se (Rs 1.25 lakh). Mainland: AED 15,000 se (Rs 3.4 lakh). Offshore: AED 8,000 se (Rs 1.8 lakh).</p>
                <p><strong>Can I register UAE company without visiting?</strong> Yes, the entire process except visa stamping can be done remotely from India with Patron Accounting's assistance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the Corporate Tax Registration Deadline</h2>
            <div class="content-text">
                
                <p><strong>UAE corporate tax registration with the Federal Tax Authority (FTA) is mandatory within 3 months of incorporation.</strong> Missing this deadline incurs a penalty of AED 10,000 (approximately Rs 2.28 lakh). Additionally, annual trade license renewal, VAT filing, and Economic Substance Regulations (ESR) compliance are ongoing obligations.</p>
                <p>Patron Accounting includes FTA registration and ongoing compliance in the setup package. <strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20a%20company%20in%20UAE%20from%20India.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a> to get started today.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your UAE Company Registration Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Company registration in the UAE offers Indian entrepreneurs a strategically located, tax-efficient, and globally respected business base. With 100% foreign ownership, no personal income tax, a 9% corporate tax rate with 0% threshold, and access to 45+ free zones, the UAE provides flexibility for every business model.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's CA team manages the entire process from India - FEMA compliance, trade license application, visa processing, bank account opening, and ongoing UAE tax compliance - ensuring your UAE business is operational and compliant from day one. Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20UAE%20company%20registration%20assistance.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Company%20Registration%20in%20UAE&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20UAE%20company%20registration.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">UAE Company Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get expert assistance for UAE company setup from our offices across India</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/company-registration-in-uae/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related International Services</div><div class="pa-block-sub">End-to-end international business setup</div><div class="pa-cross-grid"><a href="/company-registration-in-usa" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration in USA</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a><a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a><a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Import Export Code (IEC)</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/us-bank-account-opening" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">US Bank Account Opening</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually (Freshness Tier 2) to reflect UAE Commercial Companies Law amendments, free zone fee changes, corporate tax updates, visa policy changes, and FEMA/RBI regulation updates.</p>
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
