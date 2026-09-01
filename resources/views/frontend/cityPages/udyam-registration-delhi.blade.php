
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Udyam Registration in Delhi - MSME Certificate & Benefits</title>
    <meta name="description" content="CA-assisted Udyam registration in Delhi. Free MSME certificate for traders, manufacturers and services. Serving Okhla, Chandni Chowk, CP. Call +91 945 945 6700.">
    <link rel="canonical" href="/udyam-registration/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Udyam Registration in Delhi - MSME Certificate & Benefits">
    <meta property="og:description" content="CA-assisted Udyam registration in Delhi. Free MSME certificate for traders, manufacturers and services. Serving Okhla, Chandni Chowk, CP. Call +91 945 945 6700.">
    <meta property="og:url" content="/udyam-registration/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Udyam Registration in Delhi - MSME Certificate & Benefits">
    <meta name="twitter:description" content="CA-assisted Udyam registration in Delhi. Free MSME certificate for traders, manufacturers and services. Serving Okhla, Chandni Chowk, CP. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Udyam Registration in Delhi",
      "description": "CA-assisted Udyam registration in Delhi. Free MSME certificate for traders, manufacturers and services. Serving Okhla, Chandni Chowk, CP. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/udyam-registration/delhi",
      "serviceType": "Udyam Registration in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
        }
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
        "url": "https://www.patronaccounting.com/udyam-registration/delhi",
        "price": "499"
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
          "name": "Udyam Registration India: Revised MSME Limits and Benefits",
          "item": "https://www.patronaccounting.com/udyam-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Udyam Registration in Delhi",
          "item": "https://www.patronaccounting.com/udyam-registration/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to get Udyam registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Visit the official Udyam portal at udyamregistration.gov.in. Enter your Aadhaar number and enterprise name. Verify via OTP. Fill business details including PAN, GST, Delhi address, investment, turnover and NIC codes. Submit - the certificate is generated instantly. The process is free and paperless. Patron's Delhi office in Rohini provides assisted filing with correct classification assessment and NIC code selection."
          }
        },
        {
          "@type": "Question",
          "name": "Is Udyam registration free?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Udyam Registration on the official government portal (udyamregistration.gov.in) is completely free - zero cost, no fees. Beware of private websites that charge money for Udyam registration - the official process has no charges. Patron's assisted filing service for Delhi enterprises costs Rs 499, which covers classification assessment, NIC code selection, portal filing and certificate verification."
          }
        },
        {
          "@type": "Question",
          "name": "What is the revised MSME classification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Effective April 2025, the revised classification is: Micro (investment up to Rs 1 crore, turnover up to Rs 5 crore), Small (up to Rs 10 crore, up to Rs 50 crore), Medium (up to Rs 50 crore, up to Rs 250 crore). Both investment AND turnover must be within limits. GST is excluded. Export turnover is also excluded. This represents a 2.5x increase in investment limits from previous thresholds."
          }
        },
        {
          "@type": "Question",
          "name": "Is Udyam registration mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Udyam Registration is not legally mandatory to operate a business. However, without it, Delhi enterprises cannot access MSME benefits: priority bank lending, CGTMSE collateral-free loans, GeM procurement, delayed payment protection, trademark fee reduction and government schemes. For practical purposes, Udyam registration is essential for any Delhi MSME seeking to grow."
          }
        },
        {
          "@type": "Question",
          "name": "What are the benefits of Udyam registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Key benefits for Delhi MSMEs: priority sector bank lending at lower interest rates, collateral-free loans up to Rs 1 crore under CGTMSE, government procurement on GeM with EMD exemption, delayed payment protection via MSME Samadhaan (interest at 3x RBI rate), 50% reduction in trademark registration fees, ISO certification cost reimbursement, electricity bill concessions and eligibility for numerous Central and Delhi State MSME schemes."
          }
        },
        {
          "@type": "Question",
          "name": "Can I update my Udyam registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Enterprises must update Udyam information annually on the portal with ITR and GST return data. This keeps classification current. Additional updates can be made for address, bank details, NIC codes or business activity changes. If investment or turnover crosses limits, classification auto-updates. Patron files annual updates for all Delhi clients. Quick Answers Udyam registration kya hai? Udyam Registration se MSME ko government recognition milta hai. udyamregistration.gov.in pe free mein online hota hai. Aadhaar, PAN aur GST se verify hota hai. Certificate turant milta hai QR code ke saath. Lifetime valid hai. Delhi mein Okhla, Chandni Chowk, Narela sab ke liye applicable. Kya Udyam free hai? Haan, 100% free hai official portal pe. Private websites se mat karo - wo charge karte hain. Patron ka assisted filing Rs 499 mein hai. MSME classification kya hai 2025 ke baad? Micro: Investment Rs 1 crore tak + Turnover Rs 5 crore tak. Small: Rs 10 crore + Rs 50 crore tak. Medium: Rs 50 crore + Rs 250 crore tak. April 2025 se badha hua hai. GST aur export turnover exclude hai."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column — right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>

@section('content')
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
                        Udyam Registration in Delhi: CA-Assisted MSME Certificate for Traders, Manufacturers and Services
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">13 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Aadhaar number of proprietor/partner/director, PAN, GST number (if registered). No document uploads required.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> FREE on official Udyam portal | Patron professional fee from Rs 499 (assisted filing)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any enterprise in manufacturing, services or trading with investment and turnover within MSME limits</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Instant certificate generation (minutes) on the official portal</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20Registration%20in%20Delhi.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Udyam Registration in Delhi',
                                            'city'     => 'Delhi',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is Udyam</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Classification</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Udyam Registration in Delhi Services at a Glance</strong></p>
                    <p>Udyam Registration is the official government process for registering MSMEs under the MSMED Act, 2006 through the Udyam portal (udyamregistration.gov.in). Registration is completely free, 100% online, paperless and based on self-declaration. Aadhaar, PAN and GST are auto-verified. MSME classification revised April 2025: Micro (investment up to Rs 1 crore, turnover up to Rs 5 crore), Small (up to Rs 10 crore, up to Rs 50 crore), Medium (up to Rs 50 crore, up to Rs 250 crore). Lifetime validity with no renewal. Delhi businesses benefit from MSME schemes, priority lending, GeM procurement, delayed payment protection and CGTMSE loans.</p>
                </div>
                <p>Delhi's MSME sector is among India's most vibrant - from the massive manufacturing clusters in Okhla Industrial Area, Narela Industrial Estate and Bawana to the legendary wholesale trading markets of Chandni Chowk, Sadar Bazar and Karol Bagh, IT and software services in Nehru Place and Connaught Place, food processing units in Wazirpur and Narela, garment manufacturing in Gandhi Nagar and Okhla, auto parts suppliers in Kashmere Gate and handicraft producers at Janpath and Dilli Haat. These enterprises form the backbone of Delhi's economy. Learn more about <a href="/udyam-registration">Udyam Registration across India</a>.</p>
                <p>Udyam Registration provides Delhi MSMEs with official government recognition through a unique URN and digital certificate. This unlocks priority sector bank lending, collateral-free loans up to Rs 1 crore under CGTMSE, government procurement on <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">GeM portal</a>, delayed payment protection under MSME Samadhaan, 50% trademark registration fee reduction, ISO certification reimbursement and access to Central and State MSME schemes. Patron Accounting's Delhi office in Rohini provides assisted registration with correct classification assessment, NIC code selection and post-registration benefit activation including <a href="/gst-registration/delhi">GST registration</a> and <a href="/income-tax-return">ITR filing</a> from the same CA team.</p>
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
                <h2 class="section-title">What Is Udyam Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Udyam Registration is the official online process for registering Micro, Small and Medium Enterprises (MSMEs) under the MSMED Act, 2006, launched by the Ministry of MSME on 1 July 2020, replacing the earlier Udyog Aadhaar (UAM) system.</p><p>The registration is entirely digital, paperless and free of cost on the official portal (udyamregistration.gov.in). No documents need to be uploaded - the process is based on self-declaration with automatic verification through Aadhaar, PAN and GST database integration. Upon successful submission, the enterprise receives a permanent Udyam Registration Number (URN) and a digital certificate with dynamic QR code. The classification is determined by a dual-threshold system: both investment in plant and machinery AND annual turnover must fall within prescribed limits. GST is excluded from both calculations.</p><p>For Delhi's diverse enterprise base - where a Chandni Chowk wholesale trader with Rs 2 crore turnover qualifies as Small, an Okhla garment manufacturer with Rs 80 lakh investment is Micro, and a Nehru Place IT company with Rs 30 crore turnover is Medium - correct classification under the revised April 2025 limits is critical for accessing the right tier of benefits.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Udyam Registration in Delhi:</strong></p>
                    <ul><li><strong>URN:</strong> Udyam Registration Number - unique permanent identifier for registered MSMEs</li><li><strong>MSMED Act:</strong> Micro, Small and Medium Enterprises Development Act, 2006 - primary MSME legislation</li><li><strong>NIC Code:</strong> National Industrial Classification code identifying business activity on the portal</li><li><strong>CGTMSE:</strong> Credit Guarantee Fund Trust providing collateral-free loans up to Rs 1 crore for MSMEs</li><li><strong>GeM:</strong> Government e-Marketplace for government procurement with MSME priority access</li><li><strong>MSME Samadhaan:</strong> Government portal for filing delayed payment complaints with 3x RBI rate interest</li></ul>

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
                            <!-- MSME tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MSME</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Udyam Registration in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FREE Registration</span>
                        <strong>Instant Certificate</strong>
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
            <h2 class="section-title">Who Needs Udyam Registration in Delhi?</h2>
            <div class="content-text">
                
                <p>Manufacturers in Delhi's industrial areas - Okhla, Narela, Bawana, Wazirpur - producing goods from garments to auto parts, food products, pharmaceuticals and electronics should register for CGTMSE loans, CLCSS subsidies, GeM procurement and delayed payment protection from large buyers.</p><p>Traders and wholesalers in Chandni Chowk, Sadar Bazar, Karol Bagh, Lajpat Nagar, Bhagirath Palace became eligible after the 2021 amendment including trading within MSME. Delhi's trading community can now access priority bank lending and government scheme benefits.</p><p>Service providers across Delhi - IT companies in Nehru Place and Connaught Place, consultancies, logistics operators, restaurants, educational institutes, healthcare providers - qualify based on investment in equipment and annual turnover. Consider also <a href="/startup-registration/delhi">Startup Registration in Delhi</a> for DPIIT benefits alongside Udyam.</p><p>Startups and new businesses as proprietorships, partnerships, LLPs, companies, trusts or SHGs can register from day one. Existing enterprises with old Udyog Aadhaar must migrate to Udyam - old registrations have expired.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in Udyam Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>MSME Classification Assessment</td><td>Patron's Delhi CA team assesses investment and turnover against revised April 2025 limits to determine correct Micro, Small or Medium category. Incorrect self-classification affects benefit eligibility.</td></tr><tr><td>NIC Code Selection</td><td>Precise NIC (National Industrial Classification) code selection for up to 10 business activities. Correct codes determine manufacturing/services/trading classification and scheme eligibility.</td></tr><tr><td>Udyam Portal Filing</td><td>Complete registration on official udyamregistration.gov.in. Aadhaar verification, PAN/GST linking, business details, Delhi addresses, investment and turnover entry, NIC codes and submission.</td></tr><tr><td>Certificate Generation</td><td>Instant Udyam Registration Certificate with URN and dynamic QR code. Downloaded, verified and archived for the Delhi enterprise.</td></tr><tr><td>Annual Udyam Update</td><td>Mandatory annual update with ITR and GST return data. Patron files updates preventing classification discrepancies and maintaining benefit eligibility.</td></tr><tr><td>GeM Registration</td><td>Government e-Marketplace registration for Delhi MSMEs seeking government procurement opportunities with EMD exemption. Udyam is prerequisite for GeM seller registration.</td></tr><tr><td>CGTMSE and Loan Advisory</td><td>Collateral-free loan guidance up to Rs 1 crore under CGTMSE. Bank documentation and interest rate negotiation support for Delhi MSMEs.</td></tr><tr><td>Post-Registration Compliance</td><td>Same CA team handles <a href="/gst-registration/delhi">GST registration</a>, return filing, <a href="/income-tax-return">ITR</a>, TDS, <a href="/accounting-services/delhi">accounting</a> and all business compliance. Integrated MSME support.</td></tr>

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
            <h2 class="section-title">How Udyam Registration Works in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Delhi CA team manages the entire Udyam registration process - from classification assessment to certificate generation and benefits activation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Assess MSME Classification and Gather Information</h3><p class="step-description">Patron's Delhi CA team assesses investment in plant and machinery and annual turnover against the revised April 2025 MSME limits. Information gathered: Aadhaar number, PAN, GSTIN (if registered), bank account details, Delhi plant and office addresses, investment figures and turnover. No physical documents needed - entirely self-declaration based.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Classification assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Information gathered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="40" height="8" rx="3" fill="#F5A623" opacity="0.3"/><line x1="25" y1="32" x2="85" y2="32" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="25" y1="42" x2="75" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/><circle cx="90" cy="65" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M85 65l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Access Udyam Portal and Enter Aadhaar</h3><p class="step-description">Patron accesses udyamregistration.gov.in. For new enterprises, the 'New Entrepreneur' option is selected. Aadhaar number is entered with enterprise name. OTP sent to Aadhaar-linked mobile for verification. For Udyog Aadhaar migration, the 'Already having UAM' option is used.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar OTP verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="39" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OTP</text><rect x="35" y="55" width="50" height="8" rx="4" fill="#E8712C" opacity="0.2"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Complete Enterprise Details with PAN and GST</h3><p class="step-description">After Aadhaar verification, Patron completes: enterprise type, PAN (auto-verified), GSTIN (auto-linked for investment/turnover data), major activity (manufacturing/services/trading), NIC codes (up to 10), number of employees, Delhi plant and office addresses, bank account, investment and turnover figures determining MSME classification.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN + GST verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NIC codes selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="8" rx="4" fill="#E8712C" opacity="0.2"/><rect x="30" y="35" width="60" height="8" rx="4" fill="#14365F" opacity="0.1"/><rect x="30" y="50" width="25" height="8" rx="4" fill="#E8712C" opacity="0.7"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PAN+GST Verified</text></svg></div><span class="illustration-label">Details Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Submit and Receive Instant Udyam Certificate</h3><p class="step-description">Form reviewed for accuracy and submitted. Portal processes instantly. URN assigned permanently and Udyam Registration Certificate generated digitally with dynamic QR code. Available for immediate download and emailed. Patron downloads, verifies URN and classification, and archives for the Delhi business.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>URN assigned</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/><rect x="30" y="68" width="60" height="12" rx="6" fill="#14365F" opacity="0.08"/><text x="60" y="77" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">URN Issued</text></svg></div><span class="illustration-label">Certified</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Activate Post-Registration Benefits</h3><p class="step-description">Patron activates the Delhi MSME's benefit stack: GeM registration for government procurement (EMD exemption), bank communication for priority sector lending and CGTMSE eligibility, MSME Samadhaan for delayed payment protection, trademark registration at 50% fee, ISO certification reimbursement, and CLCSS technology upgradation eligibility for manufacturers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GeM registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CGTMSE activated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="30" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="25" y="35" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GeM</text><rect x="45" y="15" width="30" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="35" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CGTMSE</text><rect x="80" y="15" width="30" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="95" y="35" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Bank</text><circle cx="60" cy="78" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M56 78l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Benefits Active</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Configure Annual Update and Ongoing Compliance</h3><p class="step-description">Patron configures annual Udyam update schedule - enterprises must update with ITR and GST return data yearly. If investment or turnover crosses category limits, classification auto-updates. Same CA team handles GST return filing, ITR, TDS, accounting and all compliance - integrated MSME support from Delhi office.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual update scheduled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Full compliance configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="90" y2="20" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="30" x2="80" y2="30" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="30" y1="40" x2="70" y2="40" stroke="#14365F" stroke-width="1" opacity="0.2"/><rect x="60" y="48" width="30" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="75" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UPDATE</text><circle cx="30" cy="78" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M27 78l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Udyam Registration in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>Aadhaar Number (Mandatory):</strong> Proprietor's Aadhaar (proprietorship), managing partner's (partnership/LLP), karta's (HUF), or authorised signatory's (company/trust). Active Aadhaar-linked mobile required for OTP.</li><li><strong>PAN (Mandatory):</strong> Enterprise PAN (companies/LLPs/firms) or individual PAN (proprietorships). Auto-verified through IT database.</li><li><strong>GST Number (If Registered):</strong> GSTIN auto-linked with GST database for investment and turnover data. Enterprises without GST can still register.</li><li><strong>No Document Uploads:</strong> Entirely paperless and self-declaration based. No identity proof, address proof or incorporation certificate needed.</li><li><strong>Information Required:</strong> Enterprise name, type, Delhi address (plant and office), bank account, major activity, NIC codes, employees, investment in plant/machinery and annual turnover.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Delhi-specific tip:</strong> Delhi MSMEs with multiple units (e.g., manufacturing in Okhla + warehouse in Narela + showroom in CP) can cover all under a single URN (same PAN). Add all Delhi addresses during registration. Investment and turnover calculated at enterprise level (aggregate across all units).</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Udyam Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Old Udyog Aadhaar Not Migrated</td><td>Expired UAM registrations invalid for MSME benefits</td><td>Patron migrates old UAM to Udyam through the portal's migration option</td></tr><tr><td>Incorrect MSME Classification</td><td>Wrong category after April 2025 revision affects benefit eligibility</td><td>Patron applies correct dual-threshold assessment with GST excluded from calculations</td></tr><tr><td>Wrong NIC Code Selection</td><td>Incorrect or insufficient codes affect scheme eligibility for diverse Delhi businesses</td><td>Patron selects precise NIC codes covering all business activities</td></tr><tr><td>Annual Update Non-Filing</td><td>Outdated classification causes issues in bank loans and tender bids verifying Udyam status</td><td>Patron proactively files annual update for all Delhi Udyam clients</td></tr>

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
            <h2 class="section-title">Udyam Registration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Udyam Registration (New) - Govt Fee</td><td>FREE on official portal</td></tr><tr><td>Udyog Aadhaar to Udyam Migration - Govt Fee</td><td>FREE</td></tr><tr><td>Patron Accounting Professional Fees</td><td>INR 499 (Exl GST and Govt. Charges)</td></tr><tr><td>Udyam + GST Bundle</td><td>Rs 1,999 (Udyam + GST registration)</td></tr><tr><td>Annual Udyam Update</td><td>Rs 299/year</td></tr><tr><td>Udyam + GeM Bundle</td><td>Rs 2,999</td></tr><tr><td>Full MSME Compliance Package</td><td>Rs 9,999/year (Udyam + GST + ITR + accounting)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Udyam Registration in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20Registration%20in%20Delhi.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Udyam Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Information Gathering</td><td>30 minutes</td></tr><tr><td>Portal Filing</td><td>10-15 minutes</td></tr><tr><td>Aadhaar OTP Verification</td><td>1-2 minutes</td></tr><tr><td>Certificate Generation</td><td>Instant</td></tr><tr><td>GeM Registration (post-Udyam)</td><td>2-3 days</td></tr><tr><td>Total</td><td>Under 1 hour (certificate available immediately)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi Processing Note:</strong> Udyam Registration is filed 100% online at udyamregistration.gov.in - free of cost, no documents required. Delhi DICs (District Industries Centres) function as Single Window facilitation systems for enterprises needing assistance. Champions Control Rooms at MSME-DI offices provide handholding. Patron's Delhi office in Rohini handles all assisted registrations and post-registration compliance.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Udyam Registration in Delhi?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Delhi Office at Rohini</h3><p class="feature-text">In-person consultations for MSME owners, traders and manufacturers. Classification assessment, NIC code guidance, portal filing and benefits activation on-site.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Revised Classification Expertise</h3><p class="feature-text">Patron applies the April 2025 revised MSME limits correctly - many Delhi enterprises reclassified upward due to 2.5x investment increase. We ensure the right category for maximum benefits.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Full Benefits Activation</h3><p class="feature-text">Not just registration - Patron activates GeM, CGTMSE loan advisory, MSME Samadhaan, trademark fee reduction, ISO reimbursement and bank priority lending. Maximum value from your Udyam certificate.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Integrated MSME Compliance</h3><p class="feature-text">Same CA team handles Udyam, GST, ITR, TDS, accounting and annual Udyam update. Delhi MSMEs get a single partner for all business compliance needs.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune</blockquote><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"We were facing ROC non-compliance notices. Patron sorted everything in 2 weeks." - Director, Delhi</blockquote><p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Delhi MSMEs with both in-person and online Udyam registration and compliance support.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Revised MSME Classification (Effective April 2025)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Category</th><th>Investment in Plant & Machinery</th><th>Annual Turnover</th><th>Delhi Enterprise Examples</th></tr></thead>
                    <tbody>
                        <tr><td>Micro</td><td>Up to Rs 1 crore</td><td>Up to Rs 5 crore</td><td>Small traders (Chandni Chowk), home bakers, freelancers, neighbourhood shops</td></tr><tr><td>Small</td><td>Up to Rs 10 crore</td><td>Up to Rs 50 crore</td><td>Mid-size manufacturers (Okhla), wholesale traders, IT firms (Nehru Place), restaurants</td></tr><tr><td>Medium</td><td>Up to Rs 50 crore</td><td>Up to Rs 250 crore</td><td>Large manufacturers (Narela/Bawana), trading houses, IT companies (CP)</td></tr>

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
                
                <p>Udyam registration is part of a comprehensive MSME compliance framework:</p><ul><li><a href="/udyam-registration">Udyam Registration in India</a> - National-level MSME registration</li><li><a href="/gst-registration">GST Registration</a> - Mandatory for most MSMEs above threshold</li><li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition complementing Udyam</li><li><a href="/trademark-registration">Trademark Registration</a> - 50% fee reduction for Udyam MSMEs</li><li><a href="/income-tax-return">Income Tax Return</a> - Annual ITR linked to Udyam update</li><li><a href="/iec-registration">IEC Registration</a> - For Delhi MSMEs in import-export</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Udyam in Delhi</h2>
            <div class="content-text">
                
                <p><strong>MSMED Act, 2006:</strong> Primary legislation governing MSMEs. Defines classification, establishes facilitation councils, provides delayed payment protection (interest at 3x RBI bank rate) and specifies penalties.</p><p><strong>Udyam Registration Notification (June 2020, revised April 2025):</strong> Launched Udyam replacing Udyog Aadhaar. Fully online, free, paperless. Revised limits April 2025 with 2.5x investment increase. One URN per PAN. Lifetime validity.</p><p><strong>Section 27 - Penalty:</strong> Misrepresentation during Udyam registration is punishable. DIC General Manager can initiate enquiry and recommend cancellation.</p><p><strong>Delayed Payment (Sections 15-24):</strong> Buyers must pay MSMEs within 45 days. Interest at 3x RBI rate on delayed payments. Complaints on <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">MSME Samadhaan portal</a>. Udyam registration mandatory for filing.</p><p><strong>CGTMSE:</strong> Collateral-free credit up to Rs 1 crore for Udyam MSMEs. Banks get guarantee cover eliminating collateral requirement.</p><p><strong>GeM:</strong> Government e-Marketplace for procurement. Udyam MSMEs get EMD exemption and priority in government procurement under PPP-MSEs policy (25% minimum from MSEs).</p>

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
                    <h2 class="faq-expanded__title">FAQs - Udyam Registration in Delhi</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about Udyam registration in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Udyam Registration in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to get Udyam registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Visit the official Udyam portal at udyamregistration.gov.in. Enter your Aadhaar number and enterprise name. Verify via OTP. Fill business details including PAN, GST, Delhi address, investment, turnover and NIC codes. Submit - the certificate is generated instantly. The process is free and paperless. Patron's Delhi office in Rohini provides assisted filing with correct classification assessment and NIC code selection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is Udyam registration free?</h3>
                        <div class="faq-expanded__a"><p>Yes. Udyam Registration on the official government portal (udyamregistration.gov.in) is completely free - zero cost, no fees. Beware of private websites that charge money for Udyam registration - the official process has no charges. Patron's assisted filing service for Delhi enterprises costs Rs 499, which covers classification assessment, NIC code selection, portal filing and certificate verification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the revised MSME classification?</h3>
                        <div class="faq-expanded__a"><p>Effective April 2025, the revised classification is: Micro (investment up to Rs 1 crore, turnover up to Rs 5 crore), Small (up to Rs 10 crore, up to Rs 50 crore), Medium (up to Rs 50 crore, up to Rs 250 crore). Both investment AND turnover must be within limits. GST is excluded. Export turnover is also excluded. This represents a 2.5x increase in investment limits from previous thresholds.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is Udyam registration mandatory?</h3>
                        <div class="faq-expanded__a"><p>Udyam Registration is not legally mandatory to operate a business. However, without it, Delhi enterprises cannot access MSME benefits: priority bank lending, CGTMSE collateral-free loans, GeM procurement, delayed payment protection, trademark fee reduction and government schemes. For practical purposes, Udyam registration is essential for any Delhi MSME seeking to grow.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the benefits of Udyam registration?</h3>
                        <div class="faq-expanded__a"><p>Key benefits for Delhi MSMEs: priority sector bank lending at lower interest rates, collateral-free loans up to Rs 1 crore under CGTMSE, government procurement on GeM with EMD exemption, delayed payment protection via MSME Samadhaan (interest at 3x RBI rate), 50% reduction in trademark registration fees, ISO certification cost reimbursement, electricity bill concessions and eligibility for numerous Central and Delhi State MSME schemes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I update my Udyam registration?</h3>
                        <div class="faq-expanded__a"><p>Yes. Enterprises must update Udyam information annually on the portal with ITR and GST return data. This keeps classification current. Additional updates can be made for address, bank details, NIC codes or business activity changes. If investment or turnover crosses limits, classification auto-updates. Patron files annual updates for all Delhi clients.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Udyam registration kya hai?</strong> Udyam Registration se MSME ko government recognition milta hai. udyamregistration.gov.in pe free mein online hota hai. Aadhaar, PAN aur GST se verify hota hai. Certificate turant milta hai QR code ke saath. Lifetime valid hai. Delhi mein Okhla, Chandni Chowk, Narela sab ke liye applicable.</p><p><strong>Kya Udyam free hai?</strong> Haan, 100% free hai official portal pe. Private websites se mat karo - wo charge karte hain. Patron ka assisted filing Rs 499 mein hai.</p><p><strong>MSME classification kya hai 2025 ke baad?</strong> Micro: Investment Rs 1 crore tak + Turnover Rs 5 crore tak. Small: Rs 10 crore + Rs 50 crore tak. Medium: Rs 50 crore + Rs 250 crore tak. April 2025 se badha hua hai. GST aur export turnover exclude hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your Udyam Registration in Delhi</h2>
            <div class="content-text">
                
                <p>Every day without Udyam means missed benefits. CGTMSE collateral-free loans up to Rs 1 crore are only for Udyam MSMEs. GeM procurement (over Rs 4 lakh crore annually) requires valid Udyam. Delayed payments can be recovered with 3x interest only through MSME Samadhaan which requires Udyam. Old Udyog Aadhaar has expired. The process takes under one hour, is completely free and the certificate is instant. Register now.</p><p><strong>Get your Udyam registration in Delhi - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20Registration%20in%20Delhi.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Udyam Registration in Delhi Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Udyam Registration in Delhi is the gateway to India's comprehensive MSME benefits ecosystem - from collateral-free bank loans and government procurement access to delayed payment protection and trademark fee reduction. For Delhi's vast MSME sector spanning manufacturing in Okhla and Narela, trading in Chandni Chowk and Karol Bagh, and services in CP and Nehru Place, the free, instant Udyam certificate is the most impactful government recognition available.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Delhi office in Rohini provides CA-assisted Udyam registration - from correct classification under revised April 2025 limits and NIC code selection through portal filing and certificate generation to full benefits activation including GeM, CGTMSE and MSME Samadhaan, with integrated GST and accounting compliance.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">For Delhi enterprises seeking Udyam registration - whether new businesses, existing unregistered MSMEs or old Udyog Aadhaar holders - Patron offers a free consultation to assess MSME classification and maximise scheme benefits.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20Registration%20in%20Delhi.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Udyam%20Registration%20in%20Delhi&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Udyam%20Registration%20services%20in%20Delhi.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Udyam Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert CA-assisted Udyam registration services in all major cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/udyam-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/udyam-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/udyam-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/udyam-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/udyam-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/udyam-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/udyam-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">End-to-end support for Udyam Registration in Delhi</div><div class="pa-cross-grid"><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/iec-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/fssai-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect MSME classification changes, Udyam portal updates, CGTMSE revisions and government scheme announcements. Last review: March 2026. Next review: September 2026.</p>
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
