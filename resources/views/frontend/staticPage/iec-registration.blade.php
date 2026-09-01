
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>IEC Registration Online - DGFT Process, Fees & Documents</title>
    <meta name="description" content="Apply for Import Export Code (IEC) online at dgft.gov.in. Govt fee Rs 500. 10-digit code. Lifetime validity. Issued in 1-3 days by DGFT.">
    <link rel="canonical" href="/iec-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IEC Registration Online - DGFT Process, Fees & Documents">
    <meta property="og:description" content="Apply for Import Export Code (IEC) online at dgft.gov.in. Govt fee Rs 500. 10-digit code. Lifetime validity. Issued in 1-3 days by DGFT.">
    <meta property="og:url" content="/iec-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IEC Registration Online - DGFT Process, Fees & Documents">
    <meta name="twitter:description" content="Apply for Import Export Code (IEC) online at dgft.gov.in. Govt fee Rs 500. 10-digit code. Lifetime validity. Issued in 1-3 days by DGFT.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "IEC Registration in India: Online Process and Fees Rs 500",
          "description": "Apply for Import Export Code (IEC) online at dgft.gov.in. Govt fee Rs 500. 10-digit code. Lifetime validity. Issued in 1-3 days by DGFT.",
          "url": "https://www.patronaccounting.com/iec-registration",
          "serviceType": "IEC Registration in India: Online Process and Fees Rs 500",
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
            "url": "https://www.patronaccounting.com/iec-registration",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "500",
              "maxPrice": "1499",
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
              "name": "IEC Registration in India: Online Process and Fees Rs 500",
              "item": "https://www.patronaccounting.com/iec-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is IEC registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "IEC Registration is the process of obtaining the Import Export Code - a unique 10-digit alphanumeric identification number issued by the DGFT under the Foreign Trade (Development and Regulation) Act, 1992. It is mandatory for any person importing or exporting goods from India. The code is the same as the firm's PAN post-GST but must be separately obtained from DGFT via Form ANF-2A. Government fee is Rs 500."
              }
            },
            {
              "@type": "Question",
              "name": "How to apply for IEC online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Register on dgft.gov.in with PAN, email, and mobile. Log in and navigate to Services > IEC > Apply for IEC. Fill Form ANF-2A with business details, director/partner information, and bank account details. Upload documents (PAN, Aadhaar, cancelled cheque, address proof, photo). Pay Rs 500 fee online. Verify with Aadhaar OTP or DSC and submit. e-IEC certificate is issued within 1 to 3 working days."
              }
            },
            {
              "@type": "Question",
              "name": "Is IEC mandatory for export of services?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For basic service exports, IEC is not mandatory for receiving foreign exchange payments. However, IEC becomes mandatory when the service exporter claims benefits under the Foreign Trade Policy (FTP) or when the service category is notified under Section 7. In practice, most service exporters obtain IEC to access DGFT benefits and maintain a formal trade identity."
              }
            },
            {
              "@type": "Question",
              "name": "What is the validity of IEC?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "IEC has lifetime validity - it does not expire. However, DGFT mandates annual update between April 1 and June 30 on the DGFT portal. This is commonly called 'IEC renewal'. Failure to complete results in the IEC being placed on the Denied Entity List (DEL) and deactivated, rendering it unusable until the update is completed."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for IEC registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Government fee is Rs 500 (one-time, non-refundable), paid online on the DGFT portal. IEC modification costs Rs 200 per application. Annual IEC update itself is free on the portal. New IEC registration through Patron Accounting starts from Rs 1,499 (including the Rs 500 govt fee)."
              }
            },
            {
              "@type": "Question",
              "name": "How long does IEC registration take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DGFT typically issues the e-IEC certificate within 1 to 3 working days of application submission. Post-issuance, AD Code registration at customs ports takes 3 to 7 days, and ICEGATE registration takes 2 to 5 days. Total time to trade-readiness: 5 to 10 working days. Quick Answers Can a proprietorship get IEC? Yes. Proprietorships, partnerships, LLPs, companies, trusts, HUFs, and societies can all obtain IEC. Is GST needed along with IEC? GST is separate. However, GSTIN is essential for importers (IGST on imports) and exporters filing LUT for zero-rated supply. Can I modify IEC details later? Yes. Update via DGFT portal, upload supporting documents, pay Rs 200, and submit for auto-approval. What if address is found incorrect? DGFT may suspend IEC until address is corrected and re-verified. Ensure accuracy before applying."
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
                        Import Export Code (IEC) Registration in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>What:</span> 10-digit unique alphanumeric code issued by DGFT for importing and exporting goods from India. Same as PAN post-GST.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Fee:</span> Rs 500 (one-time, non-refundable). Service fee starting from Rs 1,499 (including Rs 500 govt fee).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Validity:</span> Lifetime - IEC does not expire. Mandatory annual update April 1 to June 30 on DGFT portal to prevent deactivation.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 1 to 3 working days for e-IEC certificate from DGFT. Total trade-readiness (with AD Code + ICEGATE): 5-10 working days.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India for IEC registration and export-import compliance</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IEC%20Registration&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20IEC%20registration.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20IEC%20Registration.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'IEC Registration',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Needs It</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">7-Step Process</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Timeline</a><a class="toc-btn" href="#benefits-section">Benefits</a><a class="toc-btn" href="#comparison-section">Post-IEC Checklist</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Registration - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IEC Registration Services at a Glance</strong></p>
                    <p>The Import Export Code (IEC) is a unique 10-digit alphanumeric code issued by the <a href="https://dgft.gov.in" target="_blank" rel="noopener">DGFT</a> under the Foreign Trade (Development and Regulation) Act, 1992. Mandatory for any person importing or exporting goods. Government fee Rs 500. Lifetime validity with mandatory annual update April-June. Post-GST, IEC equals PAN but requires separate DGFT application.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Governing Law</td><td>Foreign Trade (D&R) Act, 1992; Foreign Trade Policy 2023 (Chapter 2)</td></tr><tr><td>Issuing Authority</td><td>DGFT, Ministry of Commerce and Industry</td></tr><tr><td>Code Format</td><td>10-digit alphanumeric (same as PAN post-GST)</td></tr><tr><td>Application Form</td><td>ANF-2A (Aayat Niryat Form)</td></tr><tr><td>Government Fee</td><td>Rs 500 (one-time, non-refundable)</td></tr><tr><td>Validity</td><td>Lifetime (mandatory annual update April-June)</td></tr><tr><td>Portal</td><td>dgft.gov.in</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>India's merchandise exports crossed USD 437 billion in FY 2024-25. Every consignment through an Indian customs port requires a valid IEC for clearance. The IEC is the first step for any business entering international trade: without it, customs will not clear your goods, banks will not process foreign exchange remittances, and you cannot access any DGFT export incentive scheme (RoDTEP, EPCG, Advance Authorisation).</p>
                <p>Whether you are a manufacturer exporting to the Middle East, an e-commerce seller shipping globally via Amazon FBA, or a service company invoicing foreign clients, IEC registration is the foundational compliance step. Patron Accounting provides end-to-end IEC registration and post-registration compliance support from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is IEC Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>IEC Registration is the process of obtaining the Import Export Code from the <a href="https://dgft.gov.in" target="_blank" rel="noopener">Directorate General of Foreign Trade (DGFT)</a>. The IEC is issued under Section 7 of the Foreign Trade (Development and Regulation) Act, 1992, which states that no person shall make any import or export except under an IEC granted by DGFT.</p><p>After GST, the IEC is the same as the PAN of the firm. However, a separate DGFT application is still required to activate the IEC and create the Importer-Exporter Profile on the DGFT portal. The IEC serves as the primary identity for customs clearance, foreign exchange processing, and accessing export promotion benefits.</p><p>The IEC has lifetime validity but must be updated annually between April 1 and June 30. Failure results in the IEC being placed on the Denied Entity List (DEL) and deactivated. See <a href="/iec-renewal">IEC Renewal</a> for annual update details.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IEC Registration:</strong></p>
                    <p><strong>DGFT</strong> - Directorate General of Foreign Trade, the authority issuing IECs under the Ministry of Commerce and Industry.</p><p><strong>ANF-2A</strong> - Aayat Niryat Form 2A, the prescribed online application for IEC registration on the DGFT portal.</p><p><strong>AD Code</strong> - Authorised Dealer Code from your bank linking the bank account to customs. Must be registered at each port. See <a href="/ad-code-registration">AD Code Registration</a>.</p><p><strong>ICEGATE</strong> - Indian Customs Electronic Gateway (icegate.gov.in) for electronic filing of bills of entry and shipping bills. Registration requires IEC and DSC.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="100" cy="70" r="50" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="50" y1="70" x2="150" y2="70" stroke="#14365F" stroke-width="1" opacity="0.3"/><path d="M100 20a50 50 0 0120 50 50 50 0 01-20 50 50 50 0 01-20-50 50 50 0 0120-50z" fill="none" stroke="#14365F" stroke-width="1" opacity="0.3"/><path d="M120 55 L150 55" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M145 50 L152 55 L145 60" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/><path d="M80 85 L50 85" stroke="#25D366" stroke-width="3" stroke-linecap="round"/><path d="M55 80 L48 85 L55 90" stroke="#25D366" stroke-width="3" fill="none" stroke-linecap="round"/><text x="100" y="65" font-size="14" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">IEC</text><text x="100" y="82" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">10-DIGIT</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Rs 500</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DGFT</text><text x="100" y="168" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IEC Registration</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FT(D&R) Act 1992</span>
                        <strong>IEC Registration</strong>
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
            <h2 class="section-title">Who Needs IEC Registration?</h2>
            <div class="content-text">
                
                <ul><li><strong>Importers of Physical Goods:</strong> Any business or individual importing goods for trade, manufacturing, or commercial use</li><li><strong>Exporters of Physical Goods:</strong> Manufacturers, traders, and merchants exporting Indian goods to foreign buyers</li><li><strong>E-Commerce Exporters:</strong> Sellers on Amazon Global, eBay, Etsy, or own websites shipping internationally from India</li><li><strong>Service Exporters (Conditional):</strong> IEC required when claiming FTP benefits or when service category is notified under Section 7</li><li><strong>Manufacturers with Export Plans:</strong> Units planning to export - also needed for EPCG and Advance Authorisation schemes</li><li><strong>All Entity Types:</strong> Proprietorships, partnerships, LLPs, private/public limited companies, trusts, HUFs, societies</li></ul><p><strong>Exemptions:</strong> Central/State Government departments; personal use imports (not connected with trade); Nepal/Myanmar border trade within value limits.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting IEC Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>IEC Registration (ANF-2A)</td><td>Complete DGFT portal registration, Form ANF-2A preparation and filing, document upload, fee payment, and e-IEC certificate download</td></tr><tr><td>AD Code Registration</td><td>Obtaining AD Code letter from the bank and registering at designated customs ports (one-time per port). <a href="/ad-code-registration">Learn more</a></td></tr><tr><td>ICEGATE Registration</td><td>Setting up the <a href="https://icegate.gov.in" target="_blank" rel="noopener">ICEGATE</a> account for electronic filing of bills of entry and shipping bills</td></tr><tr><td>Annual IEC Update</td><td>Mandatory April-June annual update on DGFT portal to prevent DEL deactivation. <a href="/iec-renewal">Learn more</a></td></tr><tr><td>IEC Modification</td><td>Updating IEC details (address, partner/director, bank account) via DGFT portal. Amendment fee Rs 200</td></tr><tr><td>Export Scheme Advisory</td><td>Guidance on RoDTEP, EPCG, Advance Authorisation, DFIA, and other DGFT export incentive schemes available to IEC holders</td></tr>

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
            <h2 class="section-title">7-Step IEC Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete IEC registration process - from DGFT portal registration to e-IEC certificate download.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Ensure Prerequisites</h3><p class="step-description">The firm must have: (a) a valid PAN, (b) a bank account in the firm's name, and (c) a valid business address. Entity can be proprietorship, partnership, LLP, company, trust, HUF, or society.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank account ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="34" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="46" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text><text x="60" y="41" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BANK A/C</text><text x="60" y="53" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ADDRESS</text></svg></div><span class="illustration-label">Prerequisites Clear</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Register on DGFT Portal</h3><p class="step-description">Visit dgft.gov.in. Click 'Register'. Enter PAN, email, mobile number, set a password. Verify using OTP sent to email and mobile. Log in with credentials.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DGFT account created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> OTP verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">dgft.gov.in</text><rect x="30" y="38" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTER</text></svg></div><span class="illustration-label">Portal Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Navigate to IEC Application</h3><p class="step-description">Go to 'Services' > 'IEC' > 'Apply for IEC'. The ANF-2A (Aayat Niryat Form) will open. Select the entity type: Individual, Proprietorship, Partnership, LLP, Private Limited, etc.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ANF-2A opened</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Entity type selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SERVICES</text><path d="M55 42 L60 50 L65 42" stroke="#F5A623" stroke-width="2" fill="none"/><text x="60" y="62" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">APPLY IEC</text></svg></div><span class="illustration-label">Application Started</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Fill ANF-2A with Business Details</h3><p class="step-description">Enter: legal name of firm (as per PAN), PAN number, date of incorporation, registered address, nature of business, details of proprietor/partners/directors, bank account details, and authorised signatory details.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All fields completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Details cross-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ANF-2A</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Form Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Upload Documents</h3><p class="step-description">Upload scanned copies (PDF/JPEG): PAN Card, Aadhaar of applicant, cancelled cheque or bank certificate, address proof of business premises, and passport-size photograph.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Format verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 55 L60 30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M50 38 L60 28 L70 38" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Uploaded</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Pay Rs 500 and Submit</h3><p class="step-description">Pay the one-time government fee of Rs 500 via net banking, debit/credit card, or UPI. After payment, verify using Aadhaar-based OTP or Digital Signature Certificate (DSC). Submit the application.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 500 paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC/Aadhaar verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="20" width="90" height="15" rx="6" fill="#14365F"/><text x="60" y="31" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">Rs 500</text><circle cx="85" cy="55" r="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M82 55l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">e-IEC Certificate Issued</h3><p class="step-description">DGFT verifies the application (cross-checks with Income Tax database). e-IEC certificate generated within 1 to 3 working days, sent to registered email. Download from DGFT portal with QR code.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> e-IEC certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> QR code ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">e-IEC</text></svg></div><span class="illustration-label">IEC Registered</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for IEC Registration</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card</strong> of the firm (or individual for proprietorship)</li><li><strong>Aadhaar Card</strong> of the applicant/authorised signatory</li><li><strong>Cancelled cheque</strong> of the firm's current account OR bank certificate on letterhead confirming account details</li><li><strong>Address proof:</strong> Rent agreement + electricity bill, OR ownership document + electricity bill</li><li><strong>Passport-size photograph</strong> of the applicant</li><li><strong>Certificate of Incorporation</strong> (for companies/LLPs)</li><li><strong>Partnership Deed</strong> (for partnership firms)</li><li><strong>Digital Signature Certificate</strong> (recommended for companies/LLPs, optional for others)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IEC Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>PAN Name Mismatch</td><td>The name on PAN must exactly match the entity name on incorporation certificate or registration documents</td><td>We verify all documents for name consistency before filing to prevent rejection</td></tr><tr><td>Bank Account Not in Firm's Name</td><td>IEC requires a bank account in the firm's name - personal accounts for proprietorships may not be accepted</td><td>We advise on opening a current account in the firm's name if not already available</td></tr><tr><td>IEC Deactivated (Missed Annual Update)</td><td>IECs not updated annually between April-June are placed on DEL and deactivated, blocking all trade</td><td>We reactivate deactivated IECs through the DGFT portal updation process and set annual reminders. See <a href="/iec-renewal">IEC Renewal</a></td></tr><tr><td>AD Code and ICEGATE Not Completed</td><td>IEC alone is insufficient for actual trade - AD Code at ports and ICEGATE registration are also needed</td><td>We handle AD Code registration and ICEGATE setup as part of our complete trade readiness package</td></tr>

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
            <h2 class="section-title">IEC Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (DGFT - one-time)</td><td>Rs 500</td></tr><tr><td>Patron Accounting - IEC Registration</td><td>Starting from INR 1,499 (Exl GST, Incl. Rs 500 Govt. Fee)</td></tr><tr><td>IEC + AD Code Registration (one port)</td><td>Rs 2,999</td></tr><tr><td>IEC + AD Code + ICEGATE Setup</td><td>Rs 4,999</td></tr><tr><td>IEC Modification (DGFT)</td><td>Rs 200 (govt fee)</td></tr><tr><td>Annual IEC Update Service</td><td>Rs 999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IEC Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20IEC%20registration%20help.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Preparation</td><td>1 working day</td></tr><tr><td>DGFT Portal Filing</td><td>Same day</td></tr><tr><td>DGFT Processing and e-IEC Issuance</td><td>1-3 working days</td></tr><tr><td>AD Code Registration at Port</td><td>3-7 working days</td></tr><tr><td>ICEGATE Registration</td><td>2-5 working days</td></tr><tr><td>Total (Trade-Readiness)</td><td>5-10 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> e-IEC is issued within 1-3 working days. However, for actual trade operations, AD Code registration at customs ports and ICEGATE setup are also required. Patron Accounting recommends the complete trade-readiness package (IEC + AD Code + ICEGATE) for businesses ready to start importing or exporting.</p>

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
            <h2 class="section-title">Benefits of IEC Registration</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Legal Authority to Trade</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">No import or export of goods is permitted without IEC. Customs requires IEC for clearing every consignment at ports, airports, and ICDs</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Foreign Exchange Processing</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Banks require IEC for processing foreign currency remittances - both inward (export receipts) and outward (import payments)</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Export Incentive Schemes</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Gateway to all DGFT schemes: RoDTEP, EPCG, Advance Authorisation, DFIA, and Status Holder recognition</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Global Market Access</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">IEC establishes your business as a legitimate Indian trade entity. Foreign buyers verify IEC as the first due diligence step</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">No Turnover Threshold</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Unlike GST, no minimum turnover for IEC. Any entity from a startup to a multinational can obtain IEC for Rs 500</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including exporters, importers, e-commerce sellers, and service exporters trust Patron Accounting for IEC registration and trade compliance. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our CA and CS team delivers reliable trade compliance.</p><p>Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Post-IEC Registration Checklist</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Step</th><th>Action</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>1</td><td>AD Code Registration at customs port(s)</td><td>Within 7 days of IEC</td></tr><tr><td>2</td><td>ICEGATE Registration (icegate.gov.in)</td><td>Within 7 days</td></tr><tr><td>3</td><td>GST Registration (if not already done)</td><td>Before first import/export</td></tr><tr><td>4</td><td>LUT/Bond Filing (for exporters)</td><td>Before first export shipment</td></tr><tr><td>5</td><td>RCMC from Export Promotion Council</td><td>Within 30 days (for scheme benefits)</td></tr><tr><td>6</td><td>Annual IEC Update on DGFT portal</td><td>Every year, April 1-June 30</td></tr><tr><td>7</td><td>Aadhaar Linking on DGFT portal</td><td>As soon as possible</td></tr>

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
            <h2 class="section-title">Related Export-Import and Business Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/iec-renewal">IEC Renewal / Annual Update</a> - Mandatory annual update to keep IEC active</li><li><a href="/ad-code-registration">AD Code Registration</a> - Link bank account to customs ports</li><li><a href="/gst-registration">GST Registration</a> - Mandatory for most importers and exporters</li><li><a href="/private-limited-company-registration">Pvt Ltd Registration</a> - Incorporate your export business</li><li><a href="/llp-incorporation">LLP Registration</a> - Limited Liability Partnership</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for IEC Registration</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead><tbody><tr><td><a href="https://dgft.gov.in" target="_blank" rel="noopener">Section 7, FT(D&R) Act 1992</a></td><td>No person shall import or export except under an IEC granted by DGFT, unless specifically exempted</td></tr><tr><td>FTP 2023, Chapter 2</td><td>IEC issuance, modification, annual update, suspension, and surrender provisions</td></tr><tr><td>ANF-2A</td><td>Prescribed application form for IEC. Filed online on dgft.gov.in. Govt fee Rs 500.</td></tr><tr><td>Post-GST IEC</td><td>IEC number equals PAN. Separate DGFT application still required to activate and create profile.</td></tr><tr><td>Annual Update</td><td>Mandatory between April 1 and June 30. Failure results in DEL placement and IEC deactivation.</td></tr><tr><td>Section 11, FT(D&R) Act</td><td>Penalties for contravention - fine up to 5 times value of goods/services or Rs 1 lakh, whichever is more</td></tr></tbody></table></div><p><strong>Regulatory Authority:</strong> <a href="https://dgft.gov.in" target="_blank" rel="noopener">DGFT</a>, Ministry of Commerce and Industry, Government of India.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - IEC Registration</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about Import Export Code registration, fees, process, and compliance.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IEC Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is IEC registration?</h3>
                        <div class="faq-expanded__a"><p>IEC Registration is the process of obtaining the Import Export Code - a unique 10-digit alphanumeric identification number issued by the DGFT under the Foreign Trade (Development and Regulation) Act, 1992. It is mandatory for any person importing or exporting goods from India. The code is the same as the firm's PAN post-GST but must be separately obtained from DGFT via Form ANF-2A. Government fee is Rs 500.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to apply for IEC online?</h3>
                        <div class="faq-expanded__a"><p>Register on dgft.gov.in with PAN, email, and mobile. Log in and navigate to Services > IEC > Apply for IEC. Fill Form ANF-2A with business details, director/partner information, and bank account details. Upload documents (PAN, Aadhaar, cancelled cheque, address proof, photo). Pay Rs 500 fee online. Verify with Aadhaar OTP or DSC and submit. e-IEC certificate is issued within 1 to 3 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is IEC mandatory for export of services?</h3>
                        <div class="faq-expanded__a"><p>For basic service exports, IEC is not mandatory for receiving foreign exchange payments. However, IEC becomes mandatory when the service exporter claims benefits under the Foreign Trade Policy (FTP) or when the service category is notified under Section 7. In practice, most service exporters obtain IEC to access DGFT benefits and maintain a formal trade identity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the validity of IEC?</h3>
                        <div class="faq-expanded__a"><p>IEC has lifetime validity - it does not expire. However, DGFT mandates annual update between April 1 and June 30 on the DGFT portal. This is commonly called 'IEC renewal'. Failure to complete results in the IEC being placed on the Denied Entity List (DEL) and deactivated, rendering it unusable until the update is completed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the fee for IEC registration?</h3>
                        <div class="faq-expanded__a"><p>Government fee is Rs 500 (one-time, non-refundable), paid online on the DGFT portal. IEC modification costs Rs 200 per application. Annual IEC update itself is free on the portal. New IEC registration through Patron Accounting starts from Rs 1,499 (including the Rs 500 govt fee).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does IEC registration take?</h3>
                        <div class="faq-expanded__a"><p>DGFT typically issues the e-IEC certificate within 1 to 3 working days of application submission. Post-issuance, AD Code registration at customs ports takes 3 to 7 days, and ICEGATE registration takes 2 to 5 days. Total time to trade-readiness: 5 to 10 working days.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can a proprietorship get IEC?</strong> Yes. Proprietorships, partnerships, LLPs, companies, trusts, HUFs, and societies can all obtain IEC.</p><p><strong>Is GST needed along with IEC?</strong> GST is separate. However, GSTIN is essential for importers (IGST on imports) and exporters filing LUT for zero-rated supply.</p><p><strong>Can I modify IEC details later?</strong> Yes. Update via DGFT portal, upload supporting documents, pay Rs 200, and submit for auto-approval.</p><p><strong>What if address is found incorrect?</strong> DGFT may suspend IEC until address is corrected and re-verified. Ensure accuracy before applying.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Your Import Export Code - Start Trading Globally</h2>
            <div class="content-text">
                
                <p>Without IEC, your business cannot import, export, or access any DGFT incentive scheme. Every day without IEC is a day of lost international trade opportunity. The process takes just 1-3 working days and costs only Rs 500 in government fees.</p><p><strong>Start now.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20IEC%20registration%20help.%20Please%20call%20me." target="_blank">WhatsApp us</a> for your IEC registration today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your IEC - Start Importing and Exporting Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Import Export Code (IEC) is the first and most essential step for any business entering international trade from India. With a one-time government fee of Rs 500, lifetime validity, and issuance within 1-3 working days, IEC is one of the most accessible business registrations in India.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting provides end-to-end IEC registration including DGFT portal filing, AD Code registration, ICEGATE setup, annual update, modification, and export scheme advisory. With 15+ years of experience and offices in Pune, Mumbai, Delhi, and Gurugram, we ensure your trade operations are compliant from day one.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20IEC%20registration%20help.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IEC%20Registration&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20IEC%20Registration.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IEC Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides IEC registration for businesses in major cities across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">IEC Registration by City</p><p class="pa-block-sub">Expert DGFT portal filing and trade readiness</p><div class="pa-city-grid"><a href="/iec-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/iec-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/iec-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/iec-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/iec-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/iec-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/iec-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/iec-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related Export-Import Services</p><p class="pa-block-sub">Comprehensive trade compliance</p><div class="pa-cross-grid"><a href="/iec-renewal" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">IEC Renewal</div><div class="pa-card-sub">Annual Update</div></div></a><a href="/ad-code-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">AD Code Registration</div><div class="pa-card-sub">ICEGATE</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a><a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a><a href="/company-registration-in-uae" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Company in UAE</div><div class="pa-card-sub">International</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months - aligned to Foreign Trade Policy amendments, DGFT circulars, IEC fee changes, and annual update window changes. Next review: September 2026.</p>
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
