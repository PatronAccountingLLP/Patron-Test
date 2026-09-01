
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>FSSAI License Renewal - Process, Fees & Deadline Rules</title>
    <meta name="description" content="Renew your FSSAI licence online via FoSCoS portal. Fees from Rs 100/year (Basic) to Rs 7,500/year (Central). Late fee Rs 100/day. Apply 30 days before expiry.">
    <link rel="canonical" href="/fssai-renewal">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FSSAI License Renewal - Process, Fees & Deadline Rules">
    <meta property="og:description" content="Renew your FSSAI licence online via FoSCoS portal. Fees from Rs 100/year (Basic) to Rs 7,500/year (Central). Late fee Rs 100/day. Apply 30 days before expiry.">
    <meta property="og:url" content="/fssai-renewal">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FSSAI License Renewal - Process, Fees & Deadline Rules">
    <meta name="twitter:description" content="Renew your FSSAI licence online via FoSCoS portal. Fees from Rs 100/year (Basic) to Rs 7,500/year (Central). Late fee Rs 100/day. Apply 30 days before expiry.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "FSSAI Renewal in India: Process, Fees and Late Penalty",
          "description": "Renew your FSSAI licence online via FoSCoS portal. Fees from Rs 100/year (Basic) to Rs 7,500/year (Central). Late fee Rs 100/day. Apply 30 days before expiry.",
          "url": "https://www.patronaccounting.com/fssai-renewal",
          "serviceType": "FSSAI Renewal in India: Process, Fees and Late Penalty",
          "areaServed": {
            "@type": "Country",
            "name": "India"
          },
          "provider": {
            "@type": "Organization",
            "name": "Patron Accounting LLP",
            "url": "https://www.patronaccounting.com/",
            "logo": "https://www.patronaccounting.com/images/site-logo.svg"
          },
          "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "https://www.patronaccounting.com/fssai-renewal",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "100",
              "maxPrice": "7500",
              "priceCurrency": "INR"
            }
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
              "name": "FSSAI Renewal in India: Process, Fees and Late Penalty",
              "item": "https://www.patronaccounting.com/fssai-renewal"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to renew FSSAI licence online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Log in to the FoSCoS portal (foscos.fssai.gov.in) with your registered credentials. Navigate to the renewal section. Select your licence type (Basic/State/Central). Fill in the renewal form, upload updated documents, and pay the fee online. Initiate at least 30 days before expiry to avoid the Rs 100/day late fee. Once processed, download the renewed licence. Your 14-digit FSSAI number stays the same."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for FSSAI renewal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Renewal fees are the same as original licence fees. Basic Registration: Rs 100 per year. State Licence: Rs 2,000 to Rs 5,000 per year depending on business type. Central Licence: Rs 7,500 per year. You can renew for 1 to 5 years. For example, a 5-year Central renewal costs Rs 37,500. Late fee of Rs 100/day applies if filed after the 30-day deadline."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if FSSAI licence expires?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Regulation 2.1.7(5), if renewal is not applied before the expiry date, the licence expires. The FBO must immediately stop all food business activity. Operating with an expired licence is equivalent to operating without a licence, attracting penalties under Section 63 - imprisonment up to 6 months and fine up to Rs 5 lakh. A completely fresh application is required."
              }
            },
            {
              "@type": "Question",
              "name": "Can I renew FSSAI licence after expiry?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Once the expiry date has passed without a renewal application, the licence stands expired under Regulation 2.1.7(5). You must apply for a fresh FSSAI registration/licence. However, if you filed the renewal application before the expiry date (even if late, with Rs 100/day penalty), your licence continues under Section 31(9) until processing is complete."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late FSSAI renewal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "If you file after the 30-day deadline but before the licence expiry date, you pay Rs 100 per day of delay under Regulation 2.1.7(3). For example, if your licence expires on 30 June and you file on 10 June (20 days before expiry, 10 days late past the 30-day mark), the late fee is Rs 1,000 (10 days x Rs 100). If you miss the expiry date entirely, no late renewal is possible."
              }
            },
            {
              "@type": "Question",
              "name": "How early can I start the FSSAI renewal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The renewal window opens 180 days (approximately 6 months) before the licence expiry date on the FoSCoS portal. Best practice is to start 90 to 120 days before expiry to allow time for document preparation, portal filing, and processing. Starting early avoids the Rs 100/day late fee and ensures zero gap in licence validity. Quick Answers How early can I start the renewal? The renewal window opens 180 days before the licence expiry date on FoSCoS. Best practice: start 90-120 days before. Does the FSSAI number change on renewal? No. The 14-digit FSSAI licence number remains the same after renewal. Can I change licence category during renewal? You can upgrade (Basic to State, State to Central) but this is a separate upgrade application, not standard renewal. Is annual return (Form D-1) linked to renewal? They are separate compliances. Annual return is due by 31 May every year. However, pending returns may affect renewal processing. Can I renew for 5 years at once? Yes. Choose 1 to 5 years at the time of renewal. Longer periods reduce renewal frequency."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column  -  right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
           ============================================ */
        .expert-attribution-box {
            background: #F9F9F9;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
/* ============================================
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
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
                        FSSAI Renewal in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applies To:</span> All Food Business Operators holding Basic Registration, State Licence, or Central Licence under the FSS Act, 2006</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 100/year (Basic) | Rs 2,000-5,000/year (State) | Rs 7,500/year (Central) - same as original licence fees</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> Apply at least 30 days before licence expiry (Regulation 2.1.7(2)). Renewal window opens 180 days before expiry.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Penalty:</span> Rs 100 per day of delay under Regulation 2.1.7(3). Failure to renew before expiry = licence expires, fresh application required.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ food businesses across India for FSSAI renewal and compliance services</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Renewal&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20FSSAI%20renewal%20help.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20FSSAI%20Renewal%20help.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'FSSAI Renewal',
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
            <a class="toc-btn" href="#comparison-section">Basic vs State vs Central</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Renewal - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FSSAI Renewal Services at a Glance</strong></p>
                    <p>FSSAI renewal is mandatory for all food business operators before their registration or licence expires. Apply at least 30 days before expiry via the <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS portal</a>. Renewal fees are the same as original registration fees - Rs 100/year for Basic, Rs 2,000-5,000/year for State, and Rs 7,500/year for Central. Late renewal attracts a penalty of Rs 100 per day. Failure to renew before expiry means the licence expires and a fresh application is required.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Food Safety and Standards Act, 2006 (Section 31) + FSS (L&R) Regulations, 2011 (Regulation 2.1.7)</td></tr>
                        <tr><td>Renewal Deadline</td><td>At least 30 days before licence expiry (Reg 2.1.7(2)). Window opens 180 days before expiry.</td></tr>
                        <tr><td>Late Fee</td><td>Rs 100 per day of delay after the 30-day deadline but before expiry (Reg 2.1.7(3))</td></tr>
                        <tr><td>Post-Expiry Consequence</td><td>Licence expires. FBO must stop all activity and apply fresh (Reg 2.1.7(5))</td></tr>
                        <tr><td>Renewal Fee (Basic)</td><td>Rs 100 per year (same as original registration fee)</td></tr>
                        <tr><td>Renewal Fee (State/Central)</td><td>State: Rs 2,000-5,000/year | Central: Rs 7,500/year</td></tr>
                        <tr><td>Portal</td><td>FoSCoS (foscos.fssai.gov.in)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:0;</p>
                </div>
                <p>FSSAI renewal ensures that food business operators maintain continuous compliance with India's food safety regulations. Under Section 31(9) of the <a href="https://fssai.gov.in" target="_blank" rel="noopener">Food Safety and Standards Act, 2006</a>, an FSSAI licence remains valid for 1 to 5 years as chosen by the FBO. Before this period expires, the FBO must apply for renewal through the FoSCoS portal. The renewal fee is identical to the original registration/licence fee.</p>
                <p>The critical deadline is Regulation 2.1.7(2), which requires the renewal application to be filed not later than 30 days before the expiry date. Filing after this deadline but before expiry attracts a late fee of Rs 100 per day. If the FBO fails to renew before expiry entirely, the licence expires under Regulation 2.1.7(5) and the FBO must cease operations and apply afresh. Patron Accounting handles FSSAI renewal for all three categories with proactive deadline tracking.</p>
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
                <h2 class="section-title">What Is FSSAI Renewal?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>FSSAI renewal is the process of extending the validity of an existing FSSAI registration or licence before it expires. Every food business in India must hold a valid FSSAI registration or licence, granted for a fixed period of 1 to 5 years. When this validity period is about to end, the FBO must apply for renewal through the <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS</a> (Food Safety Compliance System) portal.</p>
                    <p>FSSAI renewal is not a re-registration - it extends the same 14-digit licence number for a new period. The renewal fee is the same as the original licence fee, and the process is simpler than the original application because the FBO's basic details are already on record. However, all documents must be current, and any changes must be updated during renewal.</p>
                    <p>Under Section 31(9), if a renewal application is filed before expiry, the licence continues to remain in force until orders are passed on the renewal application - providing continuity of operations even during processing.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FSSAI Renewal:</strong></p>
                    <p><strong>FBO (Food Business Operator)</strong> - Any person who carries on a food business, including manufacturing, processing, packaging, storage, transportation, distribution, sale, import, or export of food.</p>
                    <p><strong>Regulation 2.1.7</strong> - The specific regulation under FSS (L&R) Regulations, 2011 governing validity, renewal timelines, late fees, and expiry consequences for FSSAI licences.</p>
                    <p><strong>FoSCoS Portal</strong> - Food Safety Compliance System at foscos.fssai.gov.in - the official online portal for FSSAI registration, licensing, renewal, modification, and annual returns.</p>
                    <p><strong>14-Digit Licence Number</strong> - Unique FSSAI number displayed on premises and food packaging. Starts with '1' for Central, '2' for State/Basic. Remains the same after renewal.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Renewal cycle arrows -->
                            <circle cx="100" cy="75" r="45" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <path d="M100 30 A45 45 0 0 1 145 75" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/>
                            <path d="M145 75 A45 45 0 0 1 100 120" stroke="#25D366" stroke-width="3" fill="none" stroke-linecap="round"/>
                            <path d="M100 120 A45 45 0 0 1 55 75" stroke="#14365F" stroke-width="3" fill="none" stroke-linecap="round"/>
                            <path d="M55 75 A45 45 0 0 1 100 30" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/>
                            <!-- Arrow heads -->
                            <polygon points="140,68 148,75 140,82" fill="#F5A623"/>
                            <polygon points="107,117 100,125 93,117" fill="#25D366"/>
                            <polygon points="60,82 52,75 60,68" fill="#14365F"/>
                            <polygon points="93,33 100,25 107,33" fill="#F5A623"/>
                            <!-- Center text -->
                            <text x="100" y="72" font-size="12" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">FSSAI</text>
                            <text x="100" y="86" font-size="10" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RENEW</text>
                            <!-- 30-day badge -->
                            <rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">30 DAYS</text>
                            <!-- Reg badge -->
                            <circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <text x="165" y="34" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">2.1.7</text>
                            <text x="100" y="168" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Licence Renewal</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Regulation 2.1.7</span>
                        <strong>FSSAI Licence Renewal</strong>
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
            <h2 class="section-title">Who Needs FSSAI Renewal?</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Restaurants, Cafes, and Cloud Kitchens:</strong> Any food service establishment with an existing FSSAI licence nearing expiry - dine-in, takeaway, QSRs, and cloud/dark kitchens</li>
                    <li><strong>Food Manufacturers and Processors:</strong> Factories, processing units, packaging units with State or Central FSSAI licence nearing expiry</li>
                    <li><strong>Distributors, Wholesalers, and Retailers:</strong> Food distributors, FMCG wholesalers, retail chains, and kirana stores with FSSAI registration</li>
                    <li><strong>Importers and Exporters:</strong> Food importers/exporters holding Central FSSAI licence - expiry means inability to clear customs</li>
                    <li><strong>Caterers and Event Food Services:</strong> Catering companies, banquet halls, and institutional caterers with FSSAI licence</li>
                    <li><strong>Home-Based Food Businesses:</strong> Home bakers, tiffin services, cottage food producers with Basic FSSAI registration nearing expiry</li>
                    <li><strong>E-Commerce Food Sellers:</strong> FBOs selling food on Amazon, Swiggy, Zomato, Flipkart - platforms delist sellers with expired FSSAI</li>
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
            <h2 class="section-title">Our FSSAI Renewal Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Renewal Deadline Tracking</td><td>We monitor your FSSAI licence expiry date and send reminders 180 days, 90 days, and 30 days before expiry - zero penalty, zero lapse</td></tr>
                        <tr><td>Document Preparation and Update</td><td>Review existing documents, prepare updated medical fitness certificates, water test reports, FSMS plans, and ensure everything is current for renewal</td></tr>
                        <tr><td>FoSCoS Portal Filing</td><td>Complete the renewal application (Form A for Basic, Form B for State/Central), upload documents, and submit fee payment on <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">foscos.fssai.gov.in</a></td></tr>
                        <tr><td>Modification During Renewal</td><td>Update food categories, add new products, change premises address, or update FBO details alongside the renewal application</td></tr>
                        <tr><td>Licence Upgrade</td><td>If your business has grown (turnover crossed Rs 12 lakh or Rs 20 crore), we manage the upgrade from Basic to State or State to Central during renewal</td></tr>
                        <tr><td>Post-Expiry Fresh Application</td><td>If your licence has already expired, we file a fresh application to get you operational again as quickly as possible, minimising business downtime</td></tr>

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
            <h2 class="section-title">6-Step FSSAI Renewal Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting guides you through the complete FSSAI renewal process - from expiry date verification to renewed licence download under the FSS (L&R) Regulations, 2011.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Check Licence Expiry Date</h3>
        <p class="step-description">Verify your FSSAI licence expiry date from your licence certificate or the FoSCoS portal. The renewal window opens 180 days before expiry. The mandatory deadline is 30 days before expiry (Regulation 2.1.7(2)).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Expiry date verified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 180-day window confirmed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="16" rx="6" fill="#14365F"/><text x="60" y="27" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">EXPIRY DATE</text><circle cx="45" cy="52" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="45" y="56" font-size="8" fill="#C05E10" font-weight="800" text-anchor="middle" font-family="Arial">30</text><text x="80" y="56" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DAYS</text></svg></div>
            <span class="illustration-label">Date Confirmed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Gather Updated Documents</h3>
        <p class="step-description">Collect updated documents: existing FSSAI licence copy, identity proof, premises proof, medical fitness certificates of food handlers, water test report, FSMS plan (for State/Central), and NOC if required.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents collected</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Medical certs updated</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="40" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="85" cy="18" r="6" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><path d="M82 18l2 2 4-3" stroke="#25D366" stroke-width="1.2" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Documents Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Login to FoSCoS Portal</h3>
        <p class="step-description">Visit foscos.fssai.gov.in. Login with your registered credentials. Navigate to the renewal section. You must have your FoSCoS login ID and password used during original registration.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal login successful</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Renewal section accessed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FoSCoS PORTAL</text><rect x="30" y="38" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LOGIN</text></svg></div>
            <span class="illustration-label">Portal Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Complete Renewal Application</h3>
        <p class="step-description">Fill in the renewal form (Form A for Basic, Form B for State/Central). Update any changed details (address, food categories, capacity). Upload required documents in the specified format.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Renewal form completed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Changes updated</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">RENEWAL FORM</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Application Ready</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Pay Renewal Fee Online</h3>
        <p class="step-description">Pay the applicable government fee: Rs 100/year (Basic), Rs 2,000-5,000/year (State), Rs 7,500/year (Central). Choose renewal period (1-5 years). If filing late, Rs 100/day late fee is automatically added.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fee paid online</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Renewal period selected</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="20" width="90" height="15" rx="6" fill="#14365F"/><text x="60" y="31" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">RENEWAL FEE</text><line x1="25" y1="48" x2="95" y2="48" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><circle cx="85" cy="58" r="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M82 58l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Fee Paid</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Download Renewed Licence</h3>
        <p class="step-description">Once the application is processed and approved (inspection may be required for State/Central), download the renewed licence from the FoSCoS portal. The 14-digit licence number remains the same.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Licence renewed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 14-digit number unchanged</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RENEWED</text></svg></div>
            <span class="illustration-label">Renewal Complete</span>
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
            <h2 class="section-title">Documents Required for FSSAI Renewal</h2>
            <div class="content-text">
                
                <p><strong>For Basic Registration Renewal:</strong></p>
                <ul>
                    <li>Existing FSSAI Registration Certificate</li>
                    <li>Identity Proof (Aadhaar/PAN)</li>
                    <li>FoSCoS Portal Login Credentials</li>
                </ul>
                <p><strong>For State and Central Licence Renewal:</strong></p>
                <ul>
                    <li><strong>Existing FSSAI Licence Certificate</strong></li>
                    <li><strong>Identity Proof (Aadhaar/PAN)</strong> of FBO</li>
                    <li><strong>Proof of Premises</strong> - Rent Agreement/Ownership Deed</li>
                    <li><strong>Food Safety Management System (FSMS) Plan/Certificate</strong></li>
                    <li><strong>Medical Fitness Certificates</strong> of Food Handlers</li>
                    <li><strong>Water Test Report</strong> from NABL-accredited lab</li>
                    <li><strong>List of Equipment and Machinery</strong></li>
                    <li><strong>NOC from Municipality/Local Authority</strong> (if changed)</li>
                    <li><strong>Product List with FSSAI Categories</strong></li>
                    <li><strong>Power of Attorney</strong> (if filing through agent)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FSSAI Renewal Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missed the 30-Day Deadline</td><td>Many FBOs forget the renewal deadline and file late, incurring Rs 100/day penalty under Regulation 2.1.7(3)</td><td>Patron Accounting sets up 180-day, 90-day, and 30-day reminders. Late filing before expiry is still accepted with penalty - we ensure it gets filed immediately</td></tr>
                        <tr><td>Licence Already Expired</td><td>Under Regulation 2.1.7(5), an expired licence means the FBO must stop all operations and apply fresh - causing significant business disruption</td><td>We expedite fresh application filing to minimise downtime. The new application is processed faster if the FBO has a clean compliance history</td></tr>
                        <tr><td>FoSCoS Portal Login Issues</td><td>FBOs who registered years ago often lose their portal credentials, preventing online renewal</td><td>We assist with FoSCoS account recovery, password reset, and migration from the old FLRS system to FoSCoS</td></tr>
                        <tr><td>Business Details Changed</td><td>Address change, new food categories, capacity increase, or ownership change since the last licence period creates complications during renewal</td><td>We file modification requests alongside renewal to update all details simultaneously, avoiding separate applications</td></tr>

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
            <h2 class="section-title">FSSAI Renewal Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Registration Renewal</td><td>Rs 100 per year</td></tr>
                        <tr><td>State Licence Renewal (Small)</td><td>Rs 2,000 per year</td></tr>
                        <tr><td>State Licence Renewal (Medium)</td><td>Rs 3,000-5,000 per year</td></tr>
                        <tr><td>Central Licence Renewal</td><td>Rs 7,500 per year</td></tr>
                        <tr><td>Late Fee (any category)</td><td>Rs 100 per day of delay (Reg 2.1.7(3))</td></tr>
                        <tr><td>5-Year Central Renewal</td><td>Rs 37,500 (Rs 7,500 x 5 years)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FSSAI Renewal consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20to%20renew%20my%20FSSAI%20licence.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Renewal Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Preparation</td><td>1-3 days</td></tr>
                        <tr><td>FoSCoS Portal Filing</td><td>1 day</td></tr>
                        <tr><td>Processing (Basic)</td><td>7-15 days</td></tr>
                        <tr><td>Processing (State)</td><td>30-60 days</td></tr>
                        <tr><td>Processing (Central)</td><td>30-60 days</td></tr>
                        <tr><td>Inspection (if required)</td><td>Scheduled by authority</td></tr>
                        <tr><td>Total</td><td>7-60 days depending on licence type</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Recommended:</strong> Start the renewal process at least 60-90 days before expiry to account for document preparation, portal issues, and processing time. The renewal window opens 180 days before expiry. Filing after the 30-day deadline but before expiry incurs Rs 100/day late fee. Filing after expiry = licence expires, fresh application required.</p>

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
            <h2 class="section-title">Benefits of Professional FSSAI Renewal</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Zero-Lapse Guarantee</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Proactive deadline tracking with 180/90/30-day reminders ensures your licence never lapses - avoiding Rs 5 lakh penalties and business closure</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Portal Expertise</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Our team navigates the FoSCoS portal daily - handling technical glitches, upload issues, and payment failures efficiently</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Combined Renewal + Modification</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Update food categories, premises, capacity, and FBO details during renewal - avoiding separate modification applications and fees</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Compliance Bundle</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">We combine FSSAI renewal with annual return filing (Form D-1) and other compliance requirements for seamless operations</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Post-Expiry Recovery</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">If your licence has already expired, we fast-track fresh application to get you back in business with minimum downtime</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including restaurants, food manufacturers, and e-commerce food sellers trust Patron Accounting for FSSAI renewal and compliance. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our CA and CS team ensures zero-lapse FSSAI compliance.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, we serve food businesses across India - from home bakers to multi-state manufacturers.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Basic vs State vs Central FSSAI Renewal Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Basic Registration</th><th>State Licence</th><th>Central Licence</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover</td><td>Below Rs 12 lakh</td><td>Rs 12 lakh - Rs 20 crore</td><td>Above Rs 20 crore / Importers / Multi-state</td></tr>
                        <tr><td>Form</td><td>Form A</td><td>Form B</td><td>Form B</td></tr>
                        <tr><td>Fee Per Year</td><td>Rs 100</td><td>Rs 2,000-5,000</td><td>Rs 7,500</td></tr>
                        <tr><td>Documents</td><td>Minimal - ID proof, existing licence</td><td>FSMS plan, water report, medical certs, NOC</td><td>FSMS plan, water report, medical certs, NOC, equipment list</td></tr>
                        <tr><td>Inspection</td><td>Rarely required</td><td>May be required</td><td>Usually required</td></tr>
                        <tr><td>Processing Time</td><td>7-15 days</td><td>30-60 days</td><td>30-60 days</td></tr>

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
            <h2 class="section-title">Related FSSAI and Compliance Services</h2>
            <div class="content-text">
                
                <p>Patron Accounting offers comprehensive FSSAI and food business compliance services:</p>
                <ul>
                    <li><a href="/fssai-registration">FSSAI Registration</a> - Initial FSSAI registration for new food businesses</li>
                    <li><a href="/fssai-central-license">FSSAI Central License</a> - For large FBOs with turnover above Rs 20 crore</li>
                    <li><a href="/fssai-state-license">FSSAI State License</a> - For medium businesses Rs 12 lakh to Rs 20 crore</li>
                    <li><a href="/fssai-returns">FSSAI Returns</a> - Annual return filing (Form D-1) by 31 May each year</li>
                    <li><a href="/gst-returns-for-restaurants-food-businesses">GST Returns for Restaurants</a> - Tax compliance for food service businesses</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for FSSAI Renewal</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead>
                    <tbody>
                        <tr><td><a href="https://fssai.gov.in" target="_blank" rel="noopener">Section 31, FSS Act</a></td><td>Licensing and registration mandatory. Section 31(9): if renewal applied before expiry, licence continues in force until orders are passed</td></tr>
                        <tr><td>Regulation 2.1.7(1)</td><td>Registration/licence validity is 1 to 5 years as chosen by the FBO at the time of application</td></tr>
                        <tr><td>Regulation 2.1.7(2)</td><td>Renewal application must be filed not later than 30 days before the expiry date in Form A or Form B</td></tr>
                        <tr><td>Regulation 2.1.7(3)</td><td>Late filing (after 30-day deadline but before expiry) attracts Rs 100 per day of delay</td></tr>
                        <tr><td>Regulation 2.1.7(5)</td><td>If renewal not applied before expiry, licence expires. FBO must stop all activity and apply fresh</td></tr>
                        <tr><td>Section 55</td><td>Penalty for non-compliance - up to Rs 2 lakh fine</td></tr>
                        <tr><td>Section 63</td><td>Operating without valid licence (including expired) - imprisonment up to 6 months, fine up to Rs 5 lakh</td></tr>
                        <tr><td>Annual Return (Form D-1)</td><td>Every licensee must file by 31 May each year. Late filing attracts Rs 100/day penalty. Separate from renewal.</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Regulatory Authority:</strong> <a href="https://fssai.gov.in" target="_blank" rel="noopener">FSSAI</a>, under the Ministry of Health and Family Welfare, Government of India.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - FSSAI Renewal</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about FSSAI licence renewal, fees, deadlines, and late penalties in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FSSAI Renewal',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to renew FSSAI licence online?</h3>
                        <div class="faq-expanded__a"><p>Log in to the FoSCoS portal (foscos.fssai.gov.in) with your registered credentials. Navigate to the renewal section. Select your licence type (Basic/State/Central). Fill in the renewal form, upload updated documents, and pay the fee online. Initiate at least 30 days before expiry to avoid the Rs 100/day late fee. Once processed, download the renewed licence. Your 14-digit FSSAI number stays the same.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the fee for FSSAI renewal?</h3>
                        <div class="faq-expanded__a"><p>Renewal fees are the same as original licence fees. Basic Registration: Rs 100 per year. State Licence: Rs 2,000 to Rs 5,000 per year depending on business type. Central Licence: Rs 7,500 per year. You can renew for 1 to 5 years. For example, a 5-year Central renewal costs Rs 37,500. Late fee of Rs 100/day applies if filed after the 30-day deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happens if FSSAI licence expires?</h3>
                        <div class="faq-expanded__a"><p>Under Regulation 2.1.7(5), if renewal is not applied before the expiry date, the licence expires. The FBO must immediately stop all food business activity. Operating with an expired licence is equivalent to operating without a licence, attracting penalties under Section 63 - imprisonment up to 6 months and fine up to Rs 5 lakh. A completely fresh application is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I renew FSSAI licence after expiry?</h3>
                        <div class="faq-expanded__a"><p>No. Once the expiry date has passed without a renewal application, the licence stands expired under Regulation 2.1.7(5). You must apply for a fresh FSSAI registration/licence. However, if you filed the renewal application before the expiry date (even if late, with Rs 100/day penalty), your licence continues under Section 31(9) until processing is complete.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for late FSSAI renewal?</h3>
                        <div class="faq-expanded__a"><p>If you file after the 30-day deadline but before the licence expiry date, you pay Rs 100 per day of delay under Regulation 2.1.7(3). For example, if your licence expires on 30 June and you file on 10 June (20 days before expiry, 10 days late past the 30-day mark), the late fee is Rs 1,000 (10 days x Rs 100). If you miss the expiry date entirely, no late renewal is possible.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How early can I start the FSSAI renewal?</h3>
                        <div class="faq-expanded__a"><p>The renewal window opens 180 days (approximately 6 months) before the licence expiry date on the FoSCoS portal. Best practice is to start 90 to 120 days before expiry to allow time for document preparation, portal filing, and processing. Starting early avoids the Rs 100/day late fee and ensures zero gap in licence validity.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>How early can I start the renewal?</strong> The renewal window opens 180 days before the licence expiry date on FoSCoS. Best practice: start 90-120 days before.</p>
                <p><strong>Does the FSSAI number change on renewal?</strong> No. The 14-digit FSSAI licence number remains the same after renewal.</p>
                <p><strong>Can I change licence category during renewal?</strong> You can upgrade (Basic to State, State to Central) but this is a separate upgrade application, not standard renewal.</p>
                <p><strong>Is annual return (Form D-1) linked to renewal?</strong> They are separate compliances. Annual return is due by 31 May every year. However, pending returns may affect renewal processing.</p>
                <p><strong>Can I renew for 5 years at once?</strong> Yes. Choose 1 to 5 years at the time of renewal. Longer periods reduce renewal frequency.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Renew Your FSSAI Licence Before It Expires</h2>
            <div class="content-text">
                
                <p>An expired FSSAI licence has immediate consequences: you must stop all food business operations, e-commerce platforms will delist your products within days, and operating with an expired licence carries penalties up to Rs 5 lakh and 6 months imprisonment under Section 63. The Rs 100/day late fee accumulates quickly - a 30-day delay costs Rs 3,000 in penalties alone.</p>
                <p><strong>Start your renewal process today.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20to%20renew%20my%20FSSAI%20licence.%20Please%20call%20me." target="_blank">WhatsApp us</a> for immediate assistance.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Renew Your FSSAI Licence Today - Zero Lapse Guarantee</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">FSSAI renewal is a mandatory compliance requirement for all food business operators. Under Regulation 2.1.7, the renewal application must be filed at least 30 days before licence expiry. Late filing attracts Rs 100/day penalty, and failure to renew before expiry means the licence expires entirely, requiring a fresh application and business stoppage.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting provides end-to-end FSSAI renewal services including proactive deadline tracking, document preparation, FoSCoS portal filing, combined renewal and modification, licence upgrade assistance, and post-expiry fresh application support. With offices in Pune, Mumbai, Delhi, and Gurugram, we ensure your food business maintains continuous compliance.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20to%20renew%20my%20FSSAI%20licence.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Renewal&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20renew%20my%20FSSAI%20licence.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FSSAI Renewal Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides FSSAI renewal for food businesses in major cities across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
                <p class="pa-block-title">FSSAI Renewal by City</p>
                <p class="pa-block-sub">Expert food licence renewal with zero-lapse guarantee</p>
                <div class="pa-city-grid">
                    <a href="/fssai-renewal/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/fssai-renewal/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/fssai-renewal/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/fssai-renewal/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <p class="pa-block-title">Related FSSAI and Compliance Services</p>
                <p class="pa-block-sub">Comprehensive food business licensing and compliance</p>
                <div class="pa-cross-grid">
                    <a href="/fssai-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Basic</div></div></a>
                    <a href="/fssai-central-license" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FSSAI Central License</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/fssai-state-license" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FSSAI State License</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/fssai-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FSSAI Returns</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-returns-for-restaurants-food-businesses" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST for Restaurants</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months - aligned to FSSAI regulation amendments, fee revisions, FoSCoS portal updates, and validity rule changes. Next review: September 2026.</p>
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
