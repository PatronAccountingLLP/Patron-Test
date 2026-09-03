

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Change in Authorised Capital - ROC Process, Fees & SH-7 Form</title>
    <meta name="description" content="Increase your company's authorised capital in India in 2026. File Form SH-7 and MGT-14 with ROC under Section 61. CA and CS service starting at INR 3,999.">
    <link rel="canonical" href="/change-in-authorised-capital">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Change in Authorised Capital - ROC Process, Fees & SH-7 Form">
    <meta property="og:description" content="Increase your company's authorised capital in India in 2026. File Form SH-7 and MGT-14 with ROC under Section 61. CA and CS service starting at INR 3,999.">
    <meta property="og:url" content="/change-in-authorised-capital">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Change in Authorised Capital - ROC Process, Fees & SH-7 Form">
    <meta name="twitter:description" content="Increase your company's authorised capital in India in 2026. File Form SH-7 and MGT-14 with ROC under Section 61. CA and CS service starting at INR 3,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Change Authorised Capital: SH-7",
          "description": "Increase your company's authorised capital in India in 2026. File Form SH-7 and MGT-14 with ROC under Section 61. CA and CS service starting at INR 3,999.",
          "url": "https://www.patronaccounting.com/change-in-authorised-capital",
          "serviceType": "Change Authorised Capital: SH-7",
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
              "name": "Change Authorised Capital: SH-7",
              "item": "https://www.patronaccounting.com/change-in-authorised-capital"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is an Ordinary Resolution sufficient to increase authorised capital?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, in most cases an Ordinary Resolution (simple majority) is sufficient under Section 61(1)(a). A Special Resolution is needed only if the company's AOA mandates a higher threshold."
              }
            },
            {
              "@type": "Question",
              "name": "Is Form MGT-14 mandatory for every authorised capital increase?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. MGT-14 is required only when the AOA is amended via Special Resolution. For a straightforward capital increase where the AOA already permits it, only Form SH-7 is needed."
              }
            },
            {
              "@type": "Question",
              "name": "What is the stamp duty on increase of authorised capital?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Stamp duty on the altered MOA is state-specific. An indicative rate is 0.15% of the increased authorised capital. It is paid electronically via the MCA portal during SH-7 filing."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if Form SH-7 is not filed within 30 days?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late filing attracts INR 10,000 on the company and every officer in default, plus INR 1,000 per day of continuing default, capped at INR 50,000 per officer."
              }
            },
            {
              "@type": "Question",
              "name": "How long does the authorised capital increase take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "7 to 15 working days from board meeting to MCA Master Data update, assuming company is ACTIVE COMPLIANT and AOA already permits capital alteration."
              }
            },
            {
              "@type": "Question",
              "name": "Can authorised capital be decreased?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Decreasing authorised capital to match lower paid-up capital requires reduction under Section 66 of the Companies Act 2013 with NCLT approval - a more complex process than SH-7."
              }
            },
            {
              "@type": "Question",
              "name": "Is there a minimum authorised capital for a private limited company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. The Companies (Amendment) Act 2015 removed the earlier INR 1,00,000 minimum. Companies can incorporate with any amount and increase as needed."
              }
            },
            {
              "@type": "Question",
              "name": "Does the change affect the company's CIN or PAN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. A change in authorised capital does not affect CIN, PAN, existing contracts, liabilities, or legal obligations. Only the capital ceiling in MCA Master Data and MOA is updated. Quick Answers Which form? SH-7 (Notice of Alteration of Share Capital) filed within 30 days. Resolution type? Ordinary Resolution (simple majority) is sufficient in most cases. Stamp duty? State-specific, typically 0.15% of increased capital, paid via MCA portal. Minimum capital? No minimum for Pvt Ltd since 2015 amendment. Increase as needed."
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
<link rel="stylesheet" href="{{ asset('css/pages-2.css') }}?v=1">
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
                        Change in Authorised Capital: MCA-Approved Procedure in 2026
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 61 Compliance:</span> Statutory process governed by Section 61 of the Companies Act 2013. Ordinary Resolution at EGM is sufficient in most cases.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>SH-7 Within 30 Days:</span> Form SH-7 must be filed with ROC on MCA V3 portal within 30 days of passing the resolution.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>7-15 Working Days:</span> End-to-end process from board meeting to MCA Master Data update confirming new authorised capital.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Stamp Duty Included:</span> State-specific stamp duty (typically 0.15% of increased capital) calculated and paid electronically via MCA portal.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">300+ capital changes filed | 4.8/5 client rating | 7-15 day processing</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Authorised%20Capital%20Change%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Authorised%20Capital%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Authorised%20Capital%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Change in Authorised Capital',
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
    'ctaText'    => 'Join 300+ companies who trust Patron Accounting for authorised capital changes.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Why Change</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Errors</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">Auth vs Paid-Up</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Change in Authorised Capital - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Change in Authorised Capital Services at a Glance</strong></p>
                    <p>Changing the authorised capital requires an Ordinary Resolution at EGM and filing Form SH-7 with ROC within 30 days under Section 61 of the Companies Act 2013. Stamp duty (typically 0.15% of increase) is state-specific and paid via MCA portal. If AOA does not permit capital alteration, amend AOA first via Special Resolution + MGT-14. Timeline: 7-15 working days. Starting at INR 3,999.</p>
                </div>
                <p>Changing the authorised capital of your company - whether increasing it to issue new shares or restructuring the capital clause - is a statutory process governed by Section 61 of the Companies Act, 2013. The change requires an Ordinary Resolution passed at an Extraordinary General Meeting (EGM) and filing of Form SH-7 with the Registrar of Companies (ROC) on the MCA V3 portal within 30 days.</p>
                <p>Our CA and CS team at Patron Accounting manages the entire process - from verifying your Articles of Association, drafting board and EGM resolutions, and amending the MOA Capital Clause (Clause V) to filing Form SH-7 with e-MOA and paying stamp duty on the MCA portal.</p>
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
                <h2 class="section-title">What is Authorised Capital?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Authorised capital</strong> (also called nominal capital) under Section 2(8) of the Companies Act 2013 is the maximum amount of share capital that a company is permitted to issue to its shareholders, as specified in the Capital Clause (Clause V) of its Memorandum of Association. This is the legal ceiling - not the amount actually raised.</p>
<div class="table-responsive-wrapper"><table><thead><tr><th>Capital Type</th><th>Definition</th><th>Example</th></tr></thead><tbody>
<tr><td>Authorised Capital</td><td>Maximum the company CAN issue (legal ceiling in MOA)</td><td>INR 10,00,000</td></tr>
<tr><td>Issued Capital</td><td>Amount actually offered for subscription</td><td>INR 5,00,000</td></tr>
<tr><td>Paid-Up Capital</td><td>Amount actually paid by shareholders</td><td>INR 5,00,000</td></tr>
</tbody></table></div>
<p style='margin-top:16px;'>A company cannot issue shares beyond its authorised capital limit. Before any fresh allotment, rights issue, ESOP, or convertible instrument conversion that breaches the limit, the company must first increase its authorised capital.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Change in Authorised Capital:</strong></p>
                    <p><strong>Section 61</strong> - Companies Act 2013 provision governing alteration of share capital. Allows increase, consolidation, sub-division, and cancellation.</p>
<p><strong>Form SH-7</strong> - Notice of Alteration of Share Capital filed with ROC within 30 days of resolution.</p>
<p><strong>Clause V (MOA)</strong> - Capital Clause in Memorandum of Association specifying authorised capital amount and share structure.</p>
<p><strong>e-MOA Module</strong> - Electronic MOA entered within Form SH-7 on MCA V3 portal. Must reflect the updated Clause V.</p>
<p><strong>Stamp Duty</strong> - State-specific duty on altered MOA, typically 0.15% of increased capital. Paid electronically via MCA portal.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Capital bars chart -->
<rect x="55" y="95" width="20" height="30" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
<rect x="80" y="70" width="20" height="55" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<rect x="105" y="45" width="20" height="80" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<path d="M65 90l20-20 25-20" stroke="#25D366" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
<!-- SH-7 badge -->
<rect x="120" y="30" width="40" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="140" y="44" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SH-7</text>
<!-- S.61 badge -->
<rect x="42" y="40" width="35" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="59" y="52" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S.61</text>
<!-- MOA CL.V -->
<rect x="55" y="128" width="55" height="16" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
<text x="82" y="139" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MOA CL.V</text>
<!-- Verified -->
<circle cx="152" cy="130" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M146 130l4 4 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Change in Authorised Capital</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 61</span>
                        <strong>Form SH-7</strong>
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
            <h2 class="section-title">Why Do Companies Need to Change Authorised Capital?</h2>
            <div class="content-text">
                
                <p>Common triggers for increasing authorised capital:</p>
<ul>
<li><strong>Fresh fundraising:</strong> Issuing new equity shares to investors, VCs, or PE funds when paid-up capital approaches authorised limit</li>
<li><strong>ESOP implementation:</strong> Issuing employee stock option shares under new ESOP scheme</li>
<li><strong>Rights issue or bonus issue:</strong> Adding fresh shares for existing shareholders</li>
<li><strong>Conversion of convertible instruments:</strong> CCDs or CCPs converting into equity breaching authorised limit</li>
<li><strong>Merger or acquisition:</strong> Issuing shares as consideration requiring expanded authorised capital</li>
<li><strong>Lender or investor requirement:</strong> Minimum authorised capital as prerequisite for business</li>
<li><strong>Regulatory compliance:</strong> NBFCs, payment aggregators face minimum capital requirements</li>
</ul>
<p><strong>Pre-requisites:</strong> Company must be ACTIVE COMPLIANT on MCA (not ACTIVE NON-COMPLIANT). AOA must contain capital alteration provision. All AOC-4/MGT-7 filings up to date.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Authorised Capital Change Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>AOA Compliance Check</td><td>Verify AOA contains capital alteration provision. If not, amend AOA first via Special Resolution + MGT-14.</td></tr>
<tr><td>Board Resolution and EGM Drafting</td><td>Draft board resolution, EGM notice with explanatory statement under Section 102, and Ordinary Resolution text.</td></tr>
<tr><td>MOA Clause V Amendment</td><td>Update Capital Clause with new authorised capital amount and revised share structure.</td></tr>
<tr><td>SH-7 Filing with e-MOA</td><td>Complete Form SH-7 on MCA V3 portal with e-MOA module entry, certified resolution, and DSC signing.</td></tr>
<tr><td>Stamp Duty Calculation and Payment</td><td>Compute state-specific stamp duty and guide electronic payment via MCA portal.</td></tr>
<tr><td>ROC Approval and MCA Master Data Verification</td><td>Track filing status, confirm MCA Master Data update reflecting new authorised capital.</td></tr>

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
            <h2 class="section-title">8-Step Procedure for Authorised Capital Change</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Under Section 61 of the Companies Act 2013. Form SH-7 must be filed within 30 days. Late filing penalty: INR 10,000 + INR 1,000/day (max INR 50,000 per officer).</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Issue Board Meeting Notice (7 Days)</h3><p class="step-description">Send notice to all directors at least 7 days prior (Section 173 and SS-1). Agenda: approve capital increase, amend Clause V of MOA, fix EGM date, time, and venue.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notice issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Agenda set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Notice Sent</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Conduct Board Meeting and Pass Resolution</h3><p class="step-description">Pass Board Resolution approving the proposed new authorised capital, revised share structure, calling of EGM, and authorised signatory for filing. Cannot be passed by circulation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EGM authorised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">BOARD</text></svg></div><span class="illustration-label">Board Done</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Issue EGM Notice (21 Clear Days)</h3><p class="step-description">Issue notice to all shareholders at least 21 clear days before EGM (Section 101). Include proposed resolution text and explanatory statement under Section 102. Shorter notice with 95% shareholder consent.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EGM notice issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>21-day clock started</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="30" width="50" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">21 DAYS</text></svg></div><span class="illustration-label">Notice Sent</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Conduct EGM and Pass Ordinary Resolution</h3><p class="step-description">Pass Ordinary Resolution (simple majority) to alter Clause V of MOA. Must specify existing capital, new capital, and new share structure. Special Resolution only if AOA mandates higher threshold.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OR passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Capital approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EGM</text><text x="60" y="52" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">OR PASSED</text></svg></div><span class="illustration-label">EGM Done</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Amend Clause V of MOA</h3><p class="step-description">Update Capital Clause of Memorandum of Association to reflect the new authorised capital amount and revised share structure. Print fresh copies for records and filings.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Clause V updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MOA amended</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MOA</text><text x="60" y="50" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">CL. V</text></svg></div><span class="illustration-label">MOA Updated</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File MGT-14 (Only If AOA Amended)</h3><p class="step-description">If AOA was amended to add capital alteration provision via Special Resolution, file MGT-14 within 30 days. Attach EGM notice, certified resolution, altered MOA and AOA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MGT-14 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOA registered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT</text><text x="60" y="50" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">14</text></svg></div><span class="illustration-label">If Needed</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File Form SH-7 on MCA V3 (Within 30 Days)</h3><p class="step-description">File SH-7 with ROC within 30 days. Enter complete e-MOA with updated Clause V. Pay ROC filing fee (capital slab) and state-specific stamp duty electronically. Affix DSC of authorised signatory.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-7 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stamp duty paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SH-7 FILED</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">ROC Approval and MCA Master Data Update</h3><p class="step-description">ROC processes the form (STP or manual). MCA Master Data updated to reflect new authorised capital. Change legally effective from date of update. Verify on mca.gov.in.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Master Data updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M36 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="65" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M61 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="90" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M86 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Authorised Capital Change</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Filed With</th></tr></thead><tbody>
<tr><td>Board Resolution (certified copy)</td><td>SH-7 optional attachment</td></tr>
<tr><td>EGM Notice with Explanatory Statement (Section 102)</td><td>SH-7 and MGT-14</td></tr>
<tr><td>Certified True Copy of Ordinary Resolution</td><td>SH-7 mandatory attachment</td></tr>
<tr><td>Amended MOA - Clause V with new authorised capital</td><td>SH-7 (via e-MOA module)</td></tr>
<tr><td>Amended AOA (only if AOA was altered)</td><td>MGT-14 attachment</td></tr>
<tr><td>Special Resolution for AOA amendment (if applicable)</td><td>MGT-14</td></tr>
<tr><td>DSC of authorised signatory (Director/CS/CEO/CFO)</td><td>SH-7 and e-MOA digital signing</td></tr>
<tr><td>Stamp duty payment challan (e-stamp via MCA portal)</td><td>SH-7 portal record</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Errors and Rejection Reasons for SH-7</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Company status is ACTIVE NON-COMPLIANT</td><td>Pending INC-22A causes automatic SH-7 rejection</td><td>Patron Accounting files INC-22A to regularise status before initiating capital change</td></tr>
<tr><td>AOA missing capital alteration provision</td><td>SH-7 cannot proceed without AOA authorisation</td><td>We check AOA first and amend via Special Resolution + MGT-14 if needed</td></tr>
<tr><td>e-MOA module filled incorrectly</td><td>Full MOA must be entered, not just altered Clause V</td><td>Our CS team completes the entire e-MOA entry accurately - the biggest SH-7 failure point</td></tr>
<tr><td>Stamp duty not paid or paid incorrectly</td><td>State-specific rates vary and must be computed accurately</td><td>We compute state-specific duty and handle electronic payment via MCA portal</td></tr>

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
            <h2 class="section-title">Authorised Capital Change Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>End-to-End Authorised Capital Change (Patron)</td><td>INR 3,999 + GST (board resolution, EGM, MOA amendment, SH-7 filing, e-MOA entry)</td></tr>
<tr><td>AOA Amendment + MGT-14 (if AOA needs change)</td><td>INR 2,999 + GST (additional, only when AOA amended)</td></tr>
<tr><td>MCA Filing Fee for SH-7</td><td>INR 200 to INR 600+ based on authorised capital slab</td></tr>
<tr><td>Stamp Duty on Altered MOA</td><td>State-specific; typically 0.15% of increased authorised capital</td></tr>
<tr><td>Late Filing Penalty (SH-7 after 30 days)</td><td>INR 10,000 + INR 1,000/day continuing (max INR 50,000 per officer)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 3,999 (Exl GST, Govt. Fees and Stamp Duty)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Change in Authorised Capital consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Authorised%20Capital%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Authorised Capital Change Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Board Meeting - approve capital increase and fix EGM date</td><td>Day 1-2</td></tr>
<tr><td>AOA amendment (if needed) - Special Resolution + MGT-14</td><td>Day 1-14 (if required)</td></tr>
<tr><td>Issue EGM Notice (21 clear days to shareholders)</td><td>Day 2-3</td></tr>
<tr><td>EGM - Pass Ordinary Resolution</td><td>Day 23-25</td></tr>
<tr><td>Prepare amended MOA Clause V and SH-7 form</td><td>Day 25-28</td></tr>
<tr><td>File Form SH-7 with e-MOA + pay stamp duty</td><td>Within 30 days of resolution</td></tr>
<tr><td>ROC approval + MCA Master Data update</td><td>3-7 working days post-filing</td></tr>
<tr><td>Total end-to-end (Patron Accounting)</td><td>7-15 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Penalty Warning:</strong> Late SH-7 filing attracts INR 10,000 on company and every officer in default. Continuing default: INR 1,000/day (max INR 50,000 per officer). Failure to correctly file can invalidate subsequent share allotments.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Authorised Capital Change?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">AOA Pre-Check</h3><p class="feature-text">Verify AOA contains capital alteration provision before filing - prevents rejection.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Error-Free e-MOA Entry</h3><p class="feature-text">Complete e-MOA data entry in SH-7 - the biggest failure point - handled accurately by our CS team.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">30-Day Deadline Tracking</h3><p class="feature-text">We ensure SH-7 filing is never overdue. Zero penalty guarantee.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Stamp Duty Expertise</h3><p class="feature-text">State-specific stamp duty calculated accurately and paid electronically via MCA portal.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">Post-Approval Verification</h3><p class="feature-text">We verify MCA Master Data is correctly updated before confirming completion to you.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Transparent Pricing</h3><p class="feature-text">Fixed fee from INR 3,999. Government fees and stamp duty quoted separately. No hidden charges.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Companies Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>300+ Capital Changes Filed | 4.8/5 Client Rating | 7-15 Day Avg. Processing | Expert CA and CS Team Across India</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Authorised Capital vs Paid-Up Capital Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Authorised Capital Change</th><th>Paid-Up Capital Change</th></tr></thead>
                    <tbody>
                        <tr><td>What Changes</td><td>Legal ceiling in MOA Clause V</td><td>Actual amount received from shareholders</td></tr>
<tr><td>Governing Section</td><td>Section 61, Companies Act 2013</td><td>Section 62 (Rights), 63 (Bonus), 42 (Private Placement)</td></tr>
<tr><td>Resolution Required</td><td>Ordinary Resolution at EGM</td><td>Varies - Board/Shareholder based on issue type</td></tr>
<tr><td>Primary Form</td><td>Form SH-7</td><td>Form PAS-3 (Return of Allotment)</td></tr>
<tr><td>ROC Approval</td><td>After SH-7 filing</td><td>After PAS-3 filing</td></tr>
<tr><td>Stamp Duty on MOA</td><td>Applicable on increase</td><td>Not directly applicable</td></tr>

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
            <h2 class="section-title">Related Corporate Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/issue-of-shares">Issue of Shares</a> - allotment of new equity shares after authorised capital increase (Form PAS-3)</li>
<li><a href="/change-in-object-clause">Change in Object Clause</a> - if capital increase accompanies a shift in business activities</li>
<li><a href="/change-in-name-of-company">Change in Name of Company</a> - if rebranding alongside capital restructuring</li>
<li><a href="/transfer-of-shares">Transfer of Shares</a> - post-allotment share transfer</li>
<li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - keep ACTIVE COMPLIANT status</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Section 61 Companies Act 2013</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Requirement</th></tr></thead><tbody>
<tr><td>Section 61(1)(a)</td><td>Increase authorised capital by any amount the company considers expedient.</td></tr>
<tr><td>Section 61(1)(b-e)</td><td>Consolidate, sub-divide, convert shares to stock, or cancel unissued shares.</td></tr>
<tr><td>Section 64</td><td>Notice of alteration (Form SH-7) to ROC within 30 days of resolution.</td></tr>
<tr><td>Section 13 and 14</td><td>MOA and AOA alteration provisions - AOA must authorise capital alteration.</td></tr>
<tr><td>Section 101</td><td>EGM notice to all shareholders - minimum 21 clear days.</td></tr>
<tr><td>Section 117</td><td>MGT-14 for Special Resolution (only if AOA amended).</td></tr>
<tr><td>Rule 15, SC&D Rules 2014</td><td>Procedure for filing notice of share capital alteration.</td></tr>
<tr><td>Section 66</td><td>Reduction of share capital (paid-up) - separate NCLT process, NOT SH-7.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Link:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal - Forms and Filing</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Change in Authorised Capital</h2>
                    <p class="faq-expanded__lead">Get answers about Form SH-7, Section 61 procedure, stamp duty, penalties, and authorised capital requirements.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Change in Authorised Capital',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is an Ordinary Resolution sufficient to increase authorised capital?</h3>
                        <div class="faq-expanded__a"><p>Yes, in most cases an Ordinary Resolution (simple majority) is sufficient under Section 61(1)(a). A Special Resolution is needed only if the company's AOA mandates a higher threshold.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is Form MGT-14 mandatory for every authorised capital increase?</h3>
                        <div class="faq-expanded__a"><p>No. MGT-14 is required only when the AOA is amended via Special Resolution. For a straightforward capital increase where the AOA already permits it, only Form SH-7 is needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the stamp duty on increase of authorised capital?</h3>
                        <div class="faq-expanded__a"><p>Stamp duty on the altered MOA is state-specific. An indicative rate is 0.15% of the increased authorised capital. It is paid electronically via the MCA portal during SH-7 filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if Form SH-7 is not filed within 30 days?</h3>
                        <div class="faq-expanded__a"><p>Late filing attracts INR 10,000 on the company and every officer in default, plus INR 1,000 per day of continuing default, capped at INR 50,000 per officer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does the authorised capital increase take?</h3>
                        <div class="faq-expanded__a"><p>7 to 15 working days from board meeting to MCA Master Data update, assuming company is ACTIVE COMPLIANT and AOA already permits capital alteration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can authorised capital be decreased?</h3>
                        <div class="faq-expanded__a"><p>Decreasing authorised capital to match lower paid-up capital requires reduction under Section 66 of the Companies Act 2013 with NCLT approval - a more complex process than SH-7.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is there a minimum authorised capital for a private limited company?</h3>
                        <div class="faq-expanded__a"><p>No. The Companies (Amendment) Act 2015 removed the earlier INR 1,00,000 minimum. Companies can incorporate with any amount and increase as needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does the change affect the company's CIN or PAN?</h3>
                        <div class="faq-expanded__a"><p>No. A change in authorised capital does not affect CIN, PAN, existing contracts, liabilities, or legal obligations. Only the capital ceiling in MCA Master Data and MOA is updated.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Which form?</strong> SH-7 (Notice of Alteration of Share Capital) filed within 30 days.</p>
<p><strong>Resolution type?</strong> Ordinary Resolution (simple majority) is sufficient in most cases.</p>
<p><strong>Stamp duty?</strong> State-specific, typically 0.15% of increased capital, paid via MCA portal.</p>
<p><strong>Minimum capital?</strong> No minimum for Pvt Ltd since 2015 amendment. Increase as needed.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File SH-7 Within 30 Days - Avoid INR 10,000 Penalty</h2>
            <div class="content-text">
                
                <p><strong>Key Deadlines:</strong></p>
<ul>
<li><strong>7 days:</strong> Board Meeting notice to all directors</li>
<li><strong>21 clear days:</strong> EGM notice to all shareholders</li>
<li><strong>30 days:</strong> SH-7 must be filed with ROC after resolution - penalty INR 10,000 + INR 1,000/day</li>
<li><strong>30 days:</strong> MGT-14 for Special Resolution (only if AOA amended)</li>
</ul>
<p><strong>Critical:</strong> Failure to correctly file SH-7 can invalidate a subsequent share allotment, creating downstream legal complications for the company and its investors.</p>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Authorised%20Capital%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free expert review.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Change Your Authorised Capital - Starting at INR 3,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Change in authorised capital is a relatively straightforward but document-intensive secretarial process under Section 61 of the Companies Act 2013. The key steps are verifying the AOA, passing an Ordinary Resolution at an EGM, amending Clause V of the MOA, and filing Form SH-7 on the MCA V3 portal within 30 days.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's CA and CS team handles every step - from drafting board resolution and EGM notice to completing the e-MOA entry in SH-7 and ensuring MCA Master Data update is confirmed. 300+ capital changes filed with 100% on-time record.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Authorised%20Capital%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Authorised%20Capital%20Change%20-%20SH-7&body=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Authorised%20Capital%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Authorised Capital Change Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get your authorised capital changed from Patron Accounting offices across India.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Authorised Capital Change by City</div><div class="pa-block-sub">SH-7 filing and ROC approval from Patron Accounting</div><div class="pa-city-grid">
<a href="/change-in-authorised-capital/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/change-in-authorised-capital/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/change-in-authorised-capital/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>

</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Share capital and company compliance</div><div class="pa-cross-grid">
<a href="/issue-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">India</div></div></a>
<a href="/change-in-object-clause" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change Object Clause</div><div class="pa-card-sub">India</div></div></a>
<a href="/transfer-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Transfer of Shares</div><div class="pa-card-sub">India</div></div></a>
<a href="/change-in-name-of-company" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Name Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> January 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: MCA updates to SH-7 form, fee schedule, or Companies (Share Capital and Debentures) Rules 2014 amendments.</p>
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
