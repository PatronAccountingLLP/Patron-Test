
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>AD Code Registration - Process for Customs & Export India</title>
    <meta name="description" content="Register your AD Code (Authorised Dealer Code) for customs clearance. 14-digit code from RBI-authorised bank. One-time process, lifetime validity. ICEGATE portal registration.">
    <link rel="canonical" href="/ad-code-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="AD Code Registration - Process for Customs & Export India">
    <meta property="og:description" content="Register your AD Code (Authorised Dealer Code) for customs clearance. 14-digit code from RBI-authorised bank. One-time process, lifetime validity. ICEGATE portal registration.">
    <meta property="og:url" content="/ad-code-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AD Code Registration - Process for Customs & Export India">
    <meta name="twitter:description" content="Register your AD Code (Authorised Dealer Code) for customs clearance. 14-digit code from RBI-authorised bank. One-time process, lifetime validity. ICEGATE portal registration.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "AD Code Registration in India: Process, Docs and ICEGATE",
          "description": "Register your AD Code (Authorised Dealer Code) for customs clearance. 14-digit code from RBI-authorised bank. One-time process, lifetime validity. ICEGATE portal registration.",
          "url": "https://www.patronaccounting.com/ad-code-registration",
          "serviceType": "AD Code Registration in India: Process, Docs and ICEGATE",
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
              "name": "AD Code Registration in India: Process, Docs and ICEGATE",
              "item": "https://www.patronaccounting.com/ad-code-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is AD Code?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "AD Code stands for Authorised Dealer Code. It is a unique 14-digit code issued by a bank authorised by the Reserve Bank of India (RBI) to deal in foreign exchange. The AD Code links an exporter's or importer's bank account to ICEGATE, enabling generation of shipping bills, bills of entry, and tracking of foreign exchange remittances. It is obtained from the bank where the business maintains its current account, after receiving the IEC from DGFT."
              }
            },
            {
              "@type": "Question",
              "name": "How to register AD Code online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "AD Code registration is a two-step process. First, obtain the AD Code letter from your RBI-authorised bank on their letterhead (in the format prescribed by Customs Public Notice 93/2020). Second, register on the ICEGATE portal (icegate.gov.in) using your IEC number and Class 3 DSC. After login, navigate to Bank Account, add new bank with AD Code details, select the customs port, upload the AD Code letter, and submit. Customs verifies within 2-3 working days."
              }
            },
            {
              "@type": "Question",
              "name": "Is AD Code mandatory for imports?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. AD Code is required for both exports and imports. For imports, it is needed to process bills of entry through ICEGATE and to facilitate foreign exchange payment through banking channels. Without a registered AD Code, the customs system will not process your import clearance documentation as per FEMA 1999 requirements."
              }
            },
            {
              "@type": "Question",
              "name": "How long is AD Code valid?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "AD Code has lifetime validity. Once registered, it does not expire and there is no renewal requirement. It remains valid as long as the business entity exists and the bank account is active. However, if you change your bank or close the current account, you will need a new AD Code from the new bank and must update it on ICEGATE."
              }
            },
            {
              "@type": "Question",
              "name": "Can I use one AD Code for all ports?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The AD Code number stays the same, but historically it needed separate registration at each customs port. DGFT has announced that exporters can register at a single port and use it across all Indian ports for exports. For imports, port-wise registration on ICEGATE may still be required. Patron Accounting registers the AD Code at all your required ports."
              }
            },
            {
              "@type": "Question",
              "name": "Is there a government fee for AD Code?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No official customs or DGFT fee for AD Code registration on ICEGATE. The bank may charge a nominal documentation fee of Rs 500 to Rs 2,000 for issuing the AD Code letter. Professional service fees for end-to-end handling are additional. Quick Answers Can I export without AD Code? No. Shipping bills cannot be generated on ICEGATE without a registered AD Code. Even courier shipments (CSB-V) up to Rs 5 lakh require AD Code. Is AD Code the same as IEC? No. IEC is from DGFT (10-digit). AD Code is from your bank (14-digit). Both are mandatory. Do I need separate AD Code for import and export? No. Same AD Code works for both. Is there a government fee? No official customs fee. Bank may charge Rs 500-2,000."
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
                        AD Code Registration in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">10 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What:</span> 14-digit Authorised Dealer Code issued by RBI-authorised bank for customs clearance and foreign exchange tracking</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Validity:</span> Lifetime - one-time registration, no renewal required. Valid as long as the entity and bank account exist.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Prerequisite:</span> Valid Import Export Code (IEC) from DGFT + GST Registration + Business current account with AD bank</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3-7 working days end-to-end including bank coordination, ICEGATE registration, and customs verification</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India for export-import compliance and registration services</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20AD%20Code%20Registration&body=Hello%2C%20I%20just%20visited%20your%20AD%20Code%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20AD%20Code%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'AD Code Registration',
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
    'ctaText'    => 'Expert AD Code registration - bank coordination, ICEGATE portal filing, multi-port activation, and export incentive linkage.',
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
            <a class="toc-btn" href="#overview-section">Overview</a>
            <a class="toc-btn" href="#what-section">What Is It</a>
            <a class="toc-btn" href="#who-section">Who Needs It</a>
            <a class="toc-btn" href="#services-section">Our Services</a>
            <a class="toc-btn" href="#procedure-section">6-Step Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#timeline-section">Timeline</a>
            <a class="toc-btn" href="#benefits-section">Benefits</a>
            <a class="toc-btn" href="#comparison-section">IEC vs AD Code vs RCMC</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AD Code Registration - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - AD Code Registration Services at a Glance</strong></p>
                    <p>AD Code (Authorised Dealer Code) is a 14-digit code issued by your bank (authorised by RBI to deal in foreign exchange) that must be registered on the <a href="https://icegate.gov.in" target="_blank" rel="noopener">ICEGATE portal</a> for customs clearance. Without AD Code, you cannot generate shipping bills, receive export incentives, or process foreign remittances. It is a one-time registration with lifetime validity. IEC is the prerequisite.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Full Form</td><td>Authorised Dealer Code - 14-digit unique code issued by RBI-authorised bank</td></tr>
                        <tr><td>Issued By</td><td>AD Category-I bank where exporter/importer maintains business current account</td></tr>
                        <tr><td>Prerequisite</td><td>Valid IEC from DGFT + GST Registration + Business Current Account with AD bank</td></tr>
                        <tr><td>Registration Portal</td><td>ICEGATE (icegate.gov.in)</td></tr>
                        <tr><td>Validity</td><td>Lifetime - no renewal required</td></tr>
                        <tr><td>Government Fee</td><td>Nil - no official Customs/DGFT fee. Bank may charge nominal documentation fee.</td></tr>
                        <tr><td>Timeline</td><td>3-7 working days (end-to-end)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:0;</p>
                </div>
                <p>AD Code registration is the essential bridge between your Import Export Code (IEC) and actual customs clearance. While IEC identifies you as an importer/exporter with DGFT, the AD Code links your bank account to the customs system, enabling the generation of shipping bills, tracking of foreign exchange remittances, and disbursement of export incentives under RoDTEP, duty drawback, and other government schemes.</p>
                <p>The two-step process involves: (1) obtaining the AD Code letter from your bank on their letterhead, and (2) registering this AD Code on the <a href="https://icegate.gov.in" target="_blank" rel="noopener">ICEGATE portal</a> linked to your designated export/import port. Patron Accounting handles end-to-end AD Code registration including bank coordination, ICEGATE registration, Class 3 DSC procurement, and multi-port activation from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is AD Code Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An Authorised Dealer Code (AD Code) is a unique 14-digit numerical code assigned by a bank authorised by the Reserve Bank of India (RBI) to deal in foreign exchange. Under the FEMA (Foreign Exchange Management Act), 1999, only banks designated as Authorised Dealers (AD) by RBI can facilitate foreign exchange transactions for trade.</p>
                    <p>AD Code registration is a two-phase process. First, the exporter obtains the AD Code letter from their AD bank in the format prescribed by Customs Public Notice No. 93/2020 (dated 29 July 2020). Second, the exporter registers this AD Code on the ICEGATE portal, linking it to the specific customs port(s) from where goods will be exported or imported.</p>
                    <p>Without this registration, the customs system will not generate shipping bills, and the exporter cannot claim benefits under RoDTEP, duty drawback, or other government export incentive schemes.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for AD Code Registration:</strong></p>
                    <p><strong>Authorised Dealer (AD) Bank</strong> - A bank authorised by RBI under FEMA 1999 to deal in foreign exchange. Only AD Category-I banks can issue AD Codes. All major banks (SBI, HDFC, ICICI, Axis, Kotak) are AD banks.</p>
                    <p><strong>ICEGATE</strong> - Indian Customs Electronic Gateway (icegate.gov.in) - the central e-commerce portal of Indian Customs for electronic filing of shipping bills, bills of entry, and other trade documents.</p>
                    <p><strong>Class 3 DSC</strong> - Digital Signature Certificate (Class 3) in the name of the IEC holder - required for ICEGATE portal registration and electronic submission.</p>
                    <p><strong>Customs Public Notice 93/2020</strong> - Dated 29 July 2020, prescribes the format for the AD Code bank certificate required for customs port registration.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="100" cy="70" r="50" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="50" y1="70" x2="150" y2="70" stroke="#14365F" stroke-width="1" opacity="0.3"/><path d="M100 20a50 50 0 0120 50 50 50 0 01-20 50 50 50 0 01-20-50 50 50 0 0120-50z" fill="none" stroke="#14365F" stroke-width="1" opacity="0.3"/><path d="M120 55 L150 55" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M145 50 L152 55 L145 60" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/><path d="M80 85 L50 85" stroke="#25D366" stroke-width="3" stroke-linecap="round"/><path d="M55 80 L48 85 L55 90" stroke="#25D366" stroke-width="3" fill="none" stroke-linecap="round"/><text x="100" y="68" font-size="10" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">AD</text><text x="100" y="80" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CODE</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">14 DIGIT</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ICE</text><text x="100" y="168" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AD Code Registration</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FEMA 1999</span>
                        <strong>AD Code Registration</strong>
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
            <h2 class="section-title">Who Needs AD Code Registration?</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Goods Exporters:</strong> Any business exporting physical goods - manufacturers, traders, agricultural exporters. Mandatory for shipping bills at any Indian port</li>
                    <li><strong>Goods Importers:</strong> Businesses importing goods. AD Code required for bills of entry and foreign exchange payments through banking channels</li>
                    <li><strong>E-Commerce Cross-Border Sellers:</strong> Sellers on Amazon Global, eBay, Etsy. CSB-V for commercial shipments up to Rs 5 lakh also requires AD Code</li>
                    <li><strong>Startups with International Sales:</strong> Tech startups, D2C brands entering export markets. AD Code enables RoDTEP, duty drawback, IGST refund claims</li>
                    <li><strong>Agricultural and Food Exporters:</strong> Exporters of commodities, spices, marine products. AD Code needed alongside APEDA/EPC registration</li>
                    <li><strong>Manufacturing Exporters:</strong> Factories exporting under Advance Authorisation or EPCG schemes</li>
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
            <h2 class="section-title">Our AD Code Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Bank Coordination and AD Code Letter</td><td>Direct liaison with your AD bank's trade finance desk to obtain the AD Code letter in the prescribed format (Customs Public Notice 93/2020) with correct 14-digit code, IFSC, and SWIFT codes</td></tr>
                        <tr><td>ICEGATE Registration</td><td>Create your ICEGATE account, register the AD Code on the portal, and link it to your designated customs port. Includes Class 3 DSC procurement if needed</td></tr>
                        <tr><td>Multi-Port Registration</td><td>Register your AD Code at each required port on ICEGATE (JNPT Mumbai, Nhava Sheva, Chennai, ICD Pune, airports) for seamless nationwide clearance</td></tr>
                        <tr><td>IEC + AD Code Bundle</td><td>Combined <a href="/iec-registration">IEC registration</a> (DGFT) and AD Code registration as a complete export-readiness package for new exporters</td></tr>
                        <tr><td>AD Code Modification</td><td>Handle AD Code modification on ICEGATE when you change bank account, switch banks, or update business details</td></tr>
                        <tr><td>Export Incentive Linkage</td><td>Link your AD Code with RoDTEP, duty drawback, IGST refund, and RoSCTL schemes ensuring benefits are credited to your registered bank account</td></tr>

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
            <h2 class="section-title">6-Step AD Code Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting guides you through the complete AD Code registration process - from bank coordination to ICEGATE port activation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify Prerequisites</h3><p class="step-description">Confirm you have a valid IEC from DGFT, GST registration, and a business current account with an RBI-authorised AD Category-I bank.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IEC verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank account confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="34" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="46" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/></svg></div><span class="illustration-label">Prerequisites Clear</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Obtain AD Code Letter from Bank</h3><p class="step-description">Submit a request to your bank. The bank issues a letter on letterhead with your 14-digit AD Code, IFSC, SWIFT/BIC code per Customs Public Notice 93/2020. Timeline: 1-3 working days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 14-digit code issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PN 93/2020 format</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="20" width="90" height="15" rx="6" fill="#14365F"/><text x="60" y="31" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">AD BANK</text><text x="60" y="62" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">14-DIGIT CODE</text></svg></div><span class="illustration-label">AD Code Received</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Procure Class 3 DSC</h3><p class="step-description">Obtain a Class 3 Digital Signature Certificate in the name of the IEC holder from any government-approved Certifying Authority. Required for ICEGATE portal registration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Class 3 DSC obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IEC holder name matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="42" font-size="8" fill="#C05E10" font-weight="800" text-anchor="middle" font-family="Arial">DSC</text></svg></div><span class="illustration-label">DSC Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Register on ICEGATE Portal</h3><p class="step-description">Visit icegate.gov.in. Create an account using your IEC number and Class 3 DSC. Complete the registration process to generate ICEGATE login credentials.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ICEGATE account created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Login credentials generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ICEGATE</text><rect x="30" y="38" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/></svg></div><span class="illustration-label">Portal Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Register AD Code on ICEGATE</h3><p class="step-description">Navigate to Bank Account section. Select Add New Bank Account. Enter bank name, IFSC, account number, AD Code, customs port. Upload the AD Code letter (PDF). Submit for verification.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AD Code entered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Port selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ADD BANK</text><line x1="28" y1="35" x2="92" y2="35" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="60" y="52" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">AD CODE + PORT</text></svg></div><span class="illustration-label">Submission Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Verification and Activation</h3><p class="step-description">Customs officials verify the submitted documents. Upon successful verification, the AD Code is activated for the selected port(s). You can now generate shipping bills and bills of entry. Timeline: 2-3 working days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Customs verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Port activated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ACTIVATED</text></svg></div><span class="illustration-label">AD Code Active</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for AD Code Registration</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>AD Code Letter from Bank:</strong> Original bank certificate on letterhead per Customs Public Notice 93/2020 with 14-digit AD Code, IFSC, SWIFT code</li>
                    <li><strong>IEC Certificate:</strong> Valid Import Export Code from DGFT (copy with company seal)</li>
                    <li><strong>Company PAN Card:</strong> PAN of the entity with seal and authorised signatory's signature</li>
                    <li><strong>GST Registration Certificate:</strong> Valid GST registration showing GSTIN</li>
                    <li><strong>Class 3 DSC:</strong> Digital Signature Certificate in the name of the IEC holder</li>
                    <li><strong>Bank Account Proof:</strong> Cancelled cheque or statement showing the current account linked to AD Code</li>
                    <li><strong>Authorisation Letter:</strong> On company letterhead authorising AD Code registration</li>
                    <li><strong>Power of Attorney:</strong> If filing through customs broker or agent</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common AD Code Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Bank Delay in Issuing AD Code Letter</td><td>Some banks take weeks, especially for new accounts, causing export shipment delays</td><td>We coordinate directly with the bank's forex/trade finance desk and ensure format compliance with PN 93/2020</td></tr>
                        <tr><td>ICEGATE Portal Technical Issues</td><td>Frequent technical glitches, DSC compatibility issues, and browser requirements frustrate first-time users</td><td>Our team has daily ICEGATE experience - handles portal navigation, DSC configuration, and submission without issues</td></tr>
                        <tr><td>Multi-Port Registration Confusion</td><td>Exporters shipping from multiple ports need separate registrations, leading to missed ports and clearance blocks</td><td>We identify all required ports upfront and register across all of them simultaneously</td></tr>
                        <tr><td>AD Code Mismatch with IEC</td><td>If bank account or entity details don't match IEC, customs rejects the shipping bill, blocking the entire shipment</td><td>We cross-verify all details between IEC, GST, PAN, and AD Code before submission to ensure zero mismatches</td></tr>

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
            <h2 class="section-title">AD Code Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government/Customs Fee</td><td>NIL - No official government fee on ICEGATE</td></tr>
                        <tr><td>Bank Documentation Fee</td><td>Varies by bank - typically Rs 500 to Rs 2,000 (some charge nil)</td></tr>
                        <tr><td>Class 3 DSC (if not available)</td><td>Rs 800 to Rs 2,000 (depends on Certifying Authority)</td></tr>
                        <tr><td>Multi-Port Registration</td><td>Included in professional service fee</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free AD Code Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20AD%20Code%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AD Code Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Bank AD Code Letter</td><td>1-3 working days</td></tr>
                        <tr><td>Class 3 DSC (if needed)</td><td>1-2 days</td></tr>
                        <tr><td>ICEGATE Account Registration</td><td>1 day</td></tr>
                        <tr><td>AD Code Registration on ICEGATE</td><td>1 day</td></tr>
                        <tr><td>Customs Verification</td><td>2-3 working days</td></tr>
                        <tr><td>Total End-to-End</td><td>3-7 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> AD Code registration is a one-time process with lifetime validity. No renewal required. The 3-7 day timeline assumes all prerequisites (IEC, GST, bank account) are in place. If IEC is not yet obtained, add 2-3 days for <a href="/iec-registration">IEC registration</a>.</p>

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
            <h2 class="section-title">Benefits of Professional AD Code Registration</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Bank Coordination</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Direct liaison with bank trade finance desk ensures PN 93/2020 compliant letter without delays</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">ICEGATE Expertise</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Daily portal experience means zero technical issues, correct DSC configuration, and first-time submission</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Multi-Port Activation</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Register AD Code across all required Indian ports in one go for seamless nationwide clearance</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">IEC + AD Code Bundle</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Complete export-readiness package covering IEC, AD Code, GST, and ICEGATE - all integrated</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Export Incentive Setup</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Link AD Code with RoDTEP, duty drawback, IGST refund, and RoSCTL for immediate benefit access</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including exporters, importers, and cross-border e-commerce sellers trust Patron Accounting. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our CA and CS team delivers reliable trade compliance.</p><p>Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC vs AD Code vs RCMC - Key Differences</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>IEC</th><th>AD Code</th><th>RCMC</th></tr></thead>
                    <tbody>
                        <tr><td>Full Form</td><td>Import Export Code</td><td>Authorised Dealer Code</td><td>Registration-cum-Membership Certificate</td></tr>
                        <tr><td>Issued By</td><td>DGFT</td><td>RBI-authorised bank</td><td>Export Promotion Council</td></tr>
                        <tr><td>Purpose</td><td>Identify importer/exporter</td><td>Link bank to customs for forex</td><td>Access export incentive schemes</td></tr>
                        <tr><td>Digits</td><td>10-digit (PAN-based)</td><td>14-digit (bank-issued)</td><td>Varies by EPC</td></tr>
                        <tr><td>Validity</td><td>Lifetime (update annually)</td><td>Lifetime (no renewal)</td><td>5 years (renewable)</td></tr>
                        <tr><td>Mandatory For</td><td>All imports/exports</td><td>Customs clearance + shipping bill</td><td>Specific export incentive schemes</td></tr>

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
            <h2 class="section-title">Related Export-Import Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/iec-registration">IEC Registration</a> - Import Export Code - prerequisite for AD Code</li>
                    <li><a href="/iec-renewal">IEC Renewal</a> - Annual IEC update on DGFT portal</li>
                    <li><a href="/gst-registration">GST Registration</a> - Mandatory for exporters and importers</li>
                    <li><a href="/gst-returns">GST Returns</a> - Monthly/quarterly filing for export businesses</li>
                    <li><a href="/private-limited-company-registration">Pvt Ltd Registration</a> - Incorporate your export business</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for AD Code Registration</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead><tbody>
                        <tr><td>FEMA 1999</td><td>Establishes the framework for Authorised Dealers in foreign exchange. Only RBI-designated banks can facilitate trade forex</td></tr>
                        <tr><td>RBI AD Category</td><td>Banks designated into AD Category-I, II. Only AD Category-I can issue AD Codes for trade transactions</td></tr>
                        <tr><td>Customs Act 1962 (Sec 46/50)</td><td>Bill of entry (imports) and shipping bill (exports) require valid customs documentation linked to AD Code</td></tr>
                        <tr><td><a href="https://icegate.gov.in" target="_blank" rel="noopener">ICEGATE</a></td><td>Central e-commerce portal of CBIC for electronic filing of all customs documents</td></tr>
                        <tr><td>Customs PN 93/2020</td><td>Dated 29 July 2020 - prescribes the format for AD Code bank certificate for customs port registration</td></tr>
                        <tr><td><a href="https://dgft.gov.in" target="_blank" rel="noopener">DGFT FTP 2023</a></td><td>Chapter 2 - registration requirements. IEC prerequisite. AD Code required for customs clearance</td></tr>
                        <tr><td>RoDTEP/Duty Drawback</td><td>Export incentives credit to bank account linked via AD Code. Without registration, benefits cannot be claimed</td></tr>
                    </tbody></table></div>
                <p><strong>Regulatory Authorities:</strong> <a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a>, CBIC/<a href="https://icegate.gov.in" target="_blank" rel="noopener">ICEGATE</a>, <a href="https://dgft.gov.in" target="_blank" rel="noopener">DGFT</a>.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - AD Code Registration</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about AD Code registration, ICEGATE, and customs clearance in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'AD Code Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is AD Code?</h3>
                        <div class="faq-expanded__a"><p>AD Code stands for Authorised Dealer Code. It is a unique 14-digit code issued by a bank authorised by the Reserve Bank of India (RBI) to deal in foreign exchange. The AD Code links an exporter's or importer's bank account to ICEGATE, enabling generation of shipping bills, bills of entry, and tracking of foreign exchange remittances. It is obtained from the bank where the business maintains its current account, after receiving the IEC from DGFT.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to register AD Code online?</h3>
                        <div class="faq-expanded__a"><p>AD Code registration is a two-step process. First, obtain the AD Code letter from your RBI-authorised bank on their letterhead (in the format prescribed by Customs Public Notice 93/2020). Second, register on the ICEGATE portal (icegate.gov.in) using your IEC number and Class 3 DSC. After login, navigate to Bank Account, add new bank with AD Code details, select the customs port, upload the AD Code letter, and submit. Customs verifies within 2-3 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is AD Code mandatory for imports?</h3>
                        <div class="faq-expanded__a"><p>Yes. AD Code is required for both exports and imports. For imports, it is needed to process bills of entry through ICEGATE and to facilitate foreign exchange payment through banking channels. Without a registered AD Code, the customs system will not process your import clearance documentation as per FEMA 1999 requirements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long is AD Code valid?</h3>
                        <div class="faq-expanded__a"><p>AD Code has lifetime validity. Once registered, it does not expire and there is no renewal requirement. It remains valid as long as the business entity exists and the bank account is active. However, if you change your bank or close the current account, you will need a new AD Code from the new bank and must update it on ICEGATE.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I use one AD Code for all ports?</h3>
                        <div class="faq-expanded__a"><p>The AD Code number stays the same, but historically it needed separate registration at each customs port. DGFT has announced that exporters can register at a single port and use it across all Indian ports for exports. For imports, port-wise registration on ICEGATE may still be required. Patron Accounting registers the AD Code at all your required ports.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is there a government fee for AD Code?</h3>
                        <div class="faq-expanded__a"><p>No official customs or DGFT fee for AD Code registration on ICEGATE. The bank may charge a nominal documentation fee of Rs 500 to Rs 2,000 for issuing the AD Code letter. Professional service fees for end-to-end handling are additional.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can I export without AD Code?</strong> No. Shipping bills cannot be generated on ICEGATE without a registered AD Code. Even courier shipments (CSB-V) up to Rs 5 lakh require AD Code.</p>
                <p><strong>Is AD Code the same as IEC?</strong> No. IEC is from DGFT (10-digit). AD Code is from your bank (14-digit). Both are mandatory.</p>
                <p><strong>Do I need separate AD Code for import and export?</strong> No. Same AD Code works for both.</p>
                <p><strong>Is there a government fee?</strong> No official customs fee. Bank may charge Rs 500-2,000.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Register Your AD Code Today - Start Exporting</h2>
            <div class="content-text">
                
                <p>Without AD Code, your international trade is completely blocked - no shipping bills, no customs clearance, no export incentives. Every day without AD Code means potential shipment delays and lost revenue.</p><p><strong>The process takes only 3-7 working days.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20AD%20Code%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to get your AD Code registered today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your AD Code Registered - Start Trading Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">AD Code registration is a mandatory one-time compliance requirement for all businesses in international trade. The 14-digit code, issued by your RBI-authorised bank and registered on ICEGATE, is the critical link between your bank account and the customs system.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting provides end-to-end AD Code registration including bank coordination, ICEGATE portal registration, Class 3 DSC procurement, multi-port activation, and export incentive linkage. With offices in Pune, Mumbai, Delhi, and Gurugram, we ensure your export operations are customs-ready within days.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20AD%20Code%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20AD%20Code%20Registration&body=Hello%2C%20I%20just%20visited%20your%20AD%20Code%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">AD Code Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides AD Code registration for exporters and importers in major cities.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">AD Code Registration by City</p><p class="pa-block-sub">Expert ICEGATE and customs registration</p><div class="pa-city-grid"><a href="/ad-code-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/ad-code-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/ad-code-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/ad-code-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
            <div class="pa-city-block"><p class="pa-block-title">Related Export-Import Services</p><p class="pa-block-sub">Comprehensive trade compliance</p><div class="pa-cross-grid"><a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">India</div></div></a><a href="/iec-renewal" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">IEC Renewal</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a><a href="/fssai-central-license" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FSSAI Central License</div><div class="pa-card-sub">Food Export</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually - aligned to ICEGATE updates, Customs Public Notices, DGFT trade policy amendments, and RBI AD bank framework changes. Next review: March 2027.</p>
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
