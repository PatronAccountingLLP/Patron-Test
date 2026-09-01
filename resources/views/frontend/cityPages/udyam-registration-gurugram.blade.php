
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Udyam Registration Gurugram - MSME Certificate & Benefits</title>
    <meta name="description" content="CA-assisted Udyam MSME registration in Gurugram. Zero fee. Revised 2025 limits. GeM access, priority lending, govt tenders. Serving Cyber City, Manesar. Call +91 945 945 6700.">
    <link rel="canonical" href="/udyam-registration/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Udyam Registration Gurugram - MSME Certificate & Benefits">
    <meta property="og:description" content="CA-assisted Udyam MSME registration in Gurugram. Zero fee. Revised 2025 limits. GeM access, priority lending, govt tenders. Serving Cyber City, Manesar. Call +91 945 945 6700.">
    <meta property="og:url" content="/udyam-registration/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Udyam Registration Gurugram - MSME Certificate & Benefits">
    <meta name="twitter:description" content="CA-assisted Udyam MSME registration in Gurugram. Zero fee. Revised 2025 limits. GeM access, priority lending, govt tenders. Serving Cyber City, Manesar. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Udyam Registration in Gurugram",
      "description": "CA-assisted Udyam MSME registration in Gurugram. Zero fee. Revised 2025 limits. GeM access, priority lending, govt tenders. Serving Cyber City, Manesar. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/udyam-registration/gurugram",
      "serviceType": "Udyam Registration in Gurugram",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
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
        "url": "https://www.patronaccounting.com/udyam-registration/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "2",
          "maxPrice": "500",
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
          "name": "Udyam Registration India: Revised MSME Limits and Benefits",
          "item": "https://www.patronaccounting.com/udyam-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Udyam Registration in Gurugram",
          "item": "https://www.patronaccounting.com/udyam-registration/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I register for Udyam in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Visit udyamregistration.gov.in (only official portal). Enter Aadhaar, validate OTP. Fill enterprise details - PAN, GSTIN, Gurugram address, NIC code, investment, turnover. Certificate generated instantly with permanent URN. Patron handles complete process including data reconciliation."
          }
        },
        {
          "@type": "Question",
          "name": "What is Udyam registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Official MSME registration with Ministry of MSME providing permanent URN and digital certificate. Unlocks priority lending, collateral-free loans (CGTMSE Rs 5 Cr), GeM procurement, delayed payment protection, and subsidies. Free, online, paperless, lifetime validity."
          }
        },
        {
          "@type": "Question",
          "name": "What are MSME limits after April 2025?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Micro: Investment up to Rs 2.5 Cr AND turnover up to Rs 10 Cr. Small: up to Rs 25 Cr / Rs 100 Cr. Medium: up to Rs 125 Cr / Rs 500 Cr. Both must be within limits simultaneously. Investment excludes land, building, vehicles. Turnover excludes GST."
          }
        },
        {
          "@type": "Question",
          "name": "Is Udyam registration free?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, completely free on government portal. Ministry warns no private agency is authorised to charge. Patron professional fee from Rs 999 covers data reconciliation, NIC code selection, and post-registration benefits activation."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No documents uploaded - 100% self-declaration. Need Aadhaar (with linked mobile for OTP), PAN, GSTIN (if applicable), enterprise details including address, investment, turnover, NIC code, bank details. Portal auto-verifies against ITR and GST databases."
          }
        },
        {
          "@type": "Question",
          "name": "What are the benefits of MSME registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Priority sector bank loans at lower rates. CGTMSE collateral-free credit up to Rs 5 Cr. GeM government procurement (25% MSME reservation). Delayed payment protection (45 days). Subsidies on ISO, patent, bar code. Electricity concessions from Haryana."
          }
        },
        {
          "@type": "Question",
          "name": "Is Udyam mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not legally mandatory to operate. But prerequisite for all MSME benefits - priority lending, CGTMSE, GeM, delayed payment, government schemes. Many tenders require Udyam certificate. For Gurugram businesses targeting government contracts, effectively mandatory."
          }
        },
        {
          "@type": "Question",
          "name": "What is the April 2025 revised classification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Investment limits increased 2.5x and turnover 2x. Medium went from Rs 50 Cr to Rs 125 Cr investment and Rs 250 Cr to Rs 500 Cr turnover. Many mid-sized Gurugram IT and manufacturing firms now qualify as MSMEs under the expanded limits. Quick Answers Udyam registration free hai kya? Haan, bilkul free hai. Govt portal par koi fee nahi. Patron Rs 999 se start - classification check aur benefits activation. April 2025 mein limits badhe hain? Haan. Medium: investment Rs 125 Cr, turnover Rs 500 Cr. Bahut companies ab MSME mein qualify karti hain. Certificate kitne din mein milta hai? Instant. Portal par details bharo, Aadhaar OTP, aur certificate turant generate."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        Udyam Registration in Gurugram: MSME Certificate for Manufacturers, IT Companies and Traders
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Aadhaar, PAN, GSTIN (self-declaration; no document uploads required)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> ZERO - completely free on the official government portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Micro (Inv <= Rs 2.5 Cr, TO <= Rs 10 Cr) | Small (Inv <= Rs 25 Cr, TO <= Rs 100 Cr) | Medium (Inv <= Rs 125 Cr, TO <= Rs 500 Cr)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Instant to 2-3 working days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Udyam%20Registration%20in%20Gurugram&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20Udyam%20MSME%20registration%20in%20Gurugram.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Udyam Registration in Gurugram',
                                            'city'     => 'Gurugram',
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
    'ctaText'    => 'Patron has helped 10,000+ businesses with Udyam registration, MSME benefits activation, and government scheme access. Gurugram MSMEs trust us for April 2025 classification expertise and dual-portal registration.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">2025 Limits</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Udyam Registration in Gurugram Services at a Glance</strong></p>
                    <p>Udyam Registration is the official MSME registration on udyamregistration.gov.in - completely free, fully online, paperless, self-declaration based. You receive a permanent URN and digital certificate. April 2025 revised limits: Micro (Inv <= Rs 2.5 Cr, TO <= Rs 10 Cr), Small (<= Rs 25 Cr / Rs 100 Cr), Medium (<= Rs 125 Cr / Rs 500 Cr). Unlocks priority lending, CGTMSE collateral-free loans up to Rs 5 Cr, GeM govt procurement, delayed payment protection, and subsidies. Patron bundles with HUM portal and GeM registration.</p>
                </div>
                <p>Gurugram's economy is powered by MSMEs - IT companies in Cyber City, auto manufacturers in Manesar IMT, traders in Udyog Vihar. The April 2025 revision dramatically expanded eligible businesses (Medium now Rs 125 Cr investment / Rs 500 Cr turnover). Many companies that exceeded old limits now qualify. Learn more about <a href="/udyam-registration">Udyam Registration across India</a>.</p>
                <p>Registration is instant, free, needs only Aadhaar + PAN + GSTIN. But most businesses stop at the certificate and miss the benefits: GeM, CGTMSE, HUM portal, delayed payment protection. Patron's Gurugram office on Golf Course Extension Road provides CA-assisted registration with post-registration benefits activation. Also see <a href="/gst-registration/gurugram">GST Registration</a> and <a href="/startup-registration/gurugram">Startup Registration</a>.</p>
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
                    
                    <p>Udyam Registration is the official government process of registering an enterprise as a Micro, Small, or Medium Enterprise (MSME) with the Ministry of MSME under the MSMED Act, 2006, through <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">udyamregistration.gov.in</a>, resulting in a permanent Udyam Registration Number (URN) and digital certificate with QR code.</p>
                    <p>Classification is based on composite criteria: BOTH investment in plant & machinery/equipment AND annual turnover simultaneously. Auto-verified against ITR and GST filings. One URN per PAN - multiple activities via NIC codes. Lifetime validity, no renewal. Auto-classification updated annually.</p>
                    <p>For Gurugram IT companies, manufacturers, and traders - Udyam unlocks priority lending, CGTMSE (collateral-free loans up to Rs 5 Cr), GeM (25% govt procurement from MSMEs), and delayed payment protection (buyers must pay within 45 days).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Udyam Registration in Gurugram:</strong></p>
                    <p><strong>URN:</strong> Udyam Registration Number - permanent 12-digit identity. Lifetime validity.</p>
                    <p><strong>Composite Criteria:</strong> BOTH investment AND turnover must be within the same category. April 2025 revised limits apply.</p>
                    <p><strong>CGTMSE:</strong> Collateral-free credit up to Rs 5 crore for Micro and Small enterprises via bank guarantee.</p>
                    <p><strong>GeM:</strong> Government e-Marketplace - 25% procurement reserved for MSMEs. Udyam is prerequisite.</p>
                    <p><strong>HUM:</strong> Haryana Udhyam Memorandum portal - state MSME scheme access. Complements central Udyam.</p>
                    <p><strong>April 2025 Revision:</strong> Investment 2.5x increase, turnover 2x. Medium now Rs 125 Cr / Rs 500 Cr.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Udyam Registration in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Gurugram MSME Hub</span>
                        <strong>Udyam Certified</strong>
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
            <h2 class="section-title">Who Needs Udyam Registration in Gurugram?</h2>
            <div class="content-text">
                
                <p><strong>IT/ITES Companies (Small/Medium):</strong> DLF Cyber City, Golf Course Road. Investment under Rs 25 Cr, turnover under Rs 100 Cr = Small Enterprise. Unlocks GeM IT projects, CGTMSE, priority lending. Many don't realise they qualify as MSMEs.</p>
                <p><strong>Manufacturers (Manesar IMT, Udyog Vihar):</strong> April 2025: investment up to Rs 125 Cr, turnover up to Rs 500 Cr = Medium. Delayed payment protection (45 days), electricity concessions, Haryana MSME subsidies.</p>
                <p><strong>Startups (Sohna Road, Golf Course Extension):</strong> Low investment, early turnover = Micro. Complements <a href="/startup-registration/gurugram">DPIIT Startup India recognition</a>. Adds CGTMSE + GeM access. Patron bundles both registrations.</p>
                <p><strong>Traders, Wholesalers, Retailers:</strong> Eligible since July 2021. Trading companies in Udyog Vihar, Sector 14 handling electronics, textiles, auto parts. Opens GeM procurement + priority lending.</p>
                <p><strong>Service Providers, Consultants:</strong> Consulting firms, marketing agencies, staffing companies. Turnover under Rs 100 Cr + investment under Rs 25 Cr = Small Enterprise under new limits.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration Services Included by Patron in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Classification Assessment (April 2025)</td><td>CA verifies investment and turnover against revised composite criteria. Correct Micro/Small/Medium determination</td></tr>
                        <tr><td>PAN-GSTIN-ITR Data Reconciliation</td><td>Pre-verification that self-declaration matches ITR and GST database figures. Multiple GSTIN aggregation for multi-state companies</td></tr>
                        <tr><td>NIC Code Selection</td><td>Correct National Industrial Classification code for business activity. Affects scheme eligibility. Precision selection for Gurugram businesses</td></tr>
                        <tr><td>Portal Registration + Certificate</td><td>Complete filing on <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">udyamregistration.gov.in</a>. Aadhaar OTP, PAN, GSTIN, enterprise details. Instant certificate with URN</td></tr>
                        <tr><td>HUM Portal (Haryana)</td><td>Registration on Haryana Udhyam Memorandum portal (msme.haryana.gov.in) for state MSME schemes and subsidies. Bundled</td></tr>
                        <tr><td>GeM Registration Support</td><td>Government e-Marketplace seller registration guidance. Prerequisite for 25% MSME procurement reservation</td></tr>
                        <tr><td>CGTMSE Loan Facilitation</td><td>Collateral-free credit up to Rs 5 crore guidance with partner banks. Application preparation</td></tr>
                        <tr><td>Delayed Payment Protection</td><td>MSME Samadhaan portal setup. Buyers must pay within 45 days or face 3x bank rate compound interest</td></tr>

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
            <h2 class="section-title">Udyam Registration Process in Gurugram - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete MSME registration - from classification to benefits activation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify MSME Eligibility (April 2025)</h3><p class="step-description">CA assesses composite criteria: BOTH investment AND turnover within limits. Micro: Inv <= Rs 2.5 Cr AND TO <= Rs 10 Cr. Small: <= Rs 25 Cr / Rs 100 Cr. Medium: <= Rs 125 Cr / Rs 500 Cr. GST excluded. Many Gurugram companies now qualify under revised limits.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Eligibility Confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Category Set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MSME?</text><text x="60" y="50" font-size="7" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Qualified</text><circle cx="85" cy="22" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M81 22L84 25L90 19" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">PAN-GSTIN-ITR Data Reconciliation</h3><p class="step-description">Portal auto-fetches investment from ITR and turnover from GST returns. Mismatches cause errors/wrong classification. Patron verifies consistency across PAN, GSTIN, ITR, GST before filing. Multi-GSTIN aggregation for multi-state companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Data Verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Consistent</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="47" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITR</text><rect x="55" y="25" width="25" height="35" rx="3" fill="#E8EDF4" stroke="#14365F" stroke-width="0.5"/><text x="67" y="47" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GST</text><rect x="85" y="30" width="15" height="25" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><path d="M89 42L91 44L97 38" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Register on Official Udyam Portal</h3><p class="step-description">udyamregistration.gov.in (ONLY authorised portal). Aadhaar OTP validation. Enterprise details: name, type, PAN, GSTIN(s), Gurugram address, NIC code(s), investment, turnover, bank details. Self-declaration. Zero fee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Aadhaar Validated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Receive Udyam Certificate Instantly</h3><p class="step-description">Portal auto-verifies against ITR/GST. Certificate generated instantly with URN, enterprise name, MSME category, QR code. Emailed and downloadable. Lifetime validity. No physical certificate. One URN per PAN.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> URN Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><text x="60" y="32" font-size="9" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">UDYAM</text><text x="60" y="48" font-size="8" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Certified</text><rect x="45" y="54" width="30" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.5"/><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">QR Code</text></svg></div><span class="illustration-label">MSME Certified</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Register on HUM Portal (Haryana)</h3><p class="step-description">Haryana Udhyam Memorandum at msme.haryana.gov.in for state enterprise database and Haryana-specific MSME schemes. Many Gurugram businesses complete central Udyam but miss HUM - losing state subsidies and concessions. Patron registers on both.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> HUM Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> State Access</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="37" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Central</text><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="88" y="47" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">HUM</text></svg></div><span class="illustration-label">Dual Registered</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Activate Post-Registration Benefits</h3><p class="step-description">GeM registration for govt procurement (25% MSME reservation). CGTMSE collateral-free loan facilitation (up to Rs 5 Cr). Delayed payment protection via MSME Samadhaan. Haryana MSME Policy: electricity concessions, stamp duty reductions for Manesar manufacturers. ISO/patent subsidies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GeM Active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CGTMSE Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Benefits Live</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Information Required for Udyam Registration in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Udyam requires NO document uploads - 100% self-declaration based.</strong></p>
                <ul><li><strong>Aadhaar:</strong> Of proprietor/managing partner/Karta/authorised signatory. Must be linked to active mobile for OTP</li><li><strong>PAN:</strong> Of enterprise (company/LLP) or proprietor's personal PAN</li><li><strong>GSTIN:</strong> If applicable. Multiple GSTINs across states must all be declared (aggregated for turnover)</li><li><strong>Enterprise Details:</strong> Name, type, date of commencement, Gurugram address, employee count</li><li><strong>NIC Code:</strong> National Industrial Classification for each business activity (up to 10 codes)</li><li><strong>Investment and Turnover:</strong> Self-declared. Auto-verified against ITR and GST databases</li><li><strong>Bank Details:</strong> Account number, IFSC, bank name</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Gurugram IT company tip:</strong> Investment in computers and servers counts as 'equipment'. An IT company with Rs 5 crore in equipment and Rs 80 crore turnover = Small Enterprise under April 2025 limits. Patron ensures investment figure includes only eligible plant & machinery/equipment (excluding land, building, vehicles) per MSMED Act.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Udyam Registration Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>PAN-GSTIN-ITR Data Mismatch</td><td>Portal fetches from ITR (investment) and GST (turnover). Self-declared figures differ = wrong classification. Complex for multi-GSTIN companies</td><td>All data sources reconciled before filing. Multi-GSTIN aggregation handled correctly</td></tr>
                        <tr><td>Not Knowing April 2025 Revised Limits</td><td>Companies assume old limits (Rs 50 Cr/Rs 250 Cr). Under April 2025: Rs 125 Cr/Rs 500 Cr for Medium. Many now qualify</td><td>Classification against current April 2025 limits. Many 'too large' companies now eligible</td></tr>
                        <tr><td>Wrong NIC Code</td><td>Generic code selected instead of precise business activity code. Affects scheme eligibility</td><td>Exact NIC code for your Gurugram business activity. IT-specific, manufacturing-specific codes</td></tr>
                        <tr><td>Multiple Udyam Attempts</td><td>One per PAN only. Multiple verticals (mfg + trading + services) need one registration with multiple NIC codes</td><td>All activities consolidated into single registration with correct NIC codes</td></tr>
                        <tr><td>Missing HUM Portal</td><td>Central Udyam done but Haryana state portal missed. Loses access to state subsidies and concessions</td><td>Dual registration: central Udyam + Haryana HUM portal. Maximum scheme access</td></tr>

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
            <h2 class="section-title">Udyam Registration Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Udyam)</td><td>ZERO - completely free</td></tr>
                        <tr><td>Patron Fee (Udyam Registration)</td><td>From Rs 999 (classification + portal filing + certificate)</td></tr>
                        <tr><td>Patron Fee (Udyam + Benefits Package)</td><td>From Rs 2,999 (Udyam + HUM + GeM + CGTMSE)</td></tr>
                        <tr><td>HUM Portal (Haryana)</td><td>Included in benefits package</td></tr>
                        <tr><td>GeM Registration Support</td><td>From Rs 1,999 (Government e-Marketplace)</td></tr>
                        <tr><td>CGTMSE Loan Facilitation</td><td>From Rs 2,999 (collateral-free loan application)</td></tr>
                        <tr><td>Udyam Update/Modification</td><td>From Rs 499</td></tr>
                        <tr><td>Annual Classification Review</td><td>Included (ITR/GST data verification)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Udyam Registration in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Classification Assessment</td><td>1 day</td></tr><tr><td>PAN-GSTIN-ITR Reconciliation</td><td>1-2 days</td></tr><tr><td>Portal Registration + Certificate</td><td>Instant to 1 day</td></tr><tr><td>HUM Portal Registration</td><td>1-2 days</td></tr><tr><td>GeM Registration</td><td>3-7 working days</td></tr><tr><td><strong>Udyam Only</strong></td><td><strong>1-3 working days</strong></td></tr><tr><td><strong>Udyam + Benefits Package</strong></td><td><strong>7-15 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Every day without Udyam = missed benefits: lower-interest bank loans (save 1-1.5%), collateral-free CGTMSE credit up to Rs 5 Cr, GeM government contracts (25% MSME reservation), delayed payment protection (45-day mandate). April 2025 revision means your enterprise almost certainly qualifies now. Registration takes minutes, costs nothing, delivers lifetime benefits. Register now.</p>

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
            <h2 class="section-title">Why Choose Patron for Udyam Registration in Gurugram</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">April 2025 Limits Expertise</h3><p class="feature-desc">Many Gurugram companies now qualify under revised limits. CA correctly classifies using composite criteria. IT companies, manufacturers, and traders reassessed against Rs 125 Cr/Rs 500 Cr Medium ceiling.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">PAN-GSTIN-ITR Reconciliation</h3><p class="feature-desc">The #1 registration error source eliminated. Pre-verification across all data sources including multi-GSTIN aggregation for multi-state operations. Correct classification guaranteed.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Benefits Activation (Not Just Certificate)</h3><p class="feature-desc">GeM, HUM, CGTMSE, delayed payment protection all activated. Dual portal registration (central + Haryana). Certificate alone does not deliver benefits - Patron turns it into tangible financial advantages.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Gurugram Office + Track Record</h3><p class="feature-desc">Golf Course Extension Road. In-person classification assessment and benefits planning. 10,000+ businesses, 4.9 Google rating, 50,000+ documents, 15+ years. NIC code precision for every industry.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by MSMEs Across Gurugram</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs | 15+ Years</strong></p><p>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle." - Startup Founder, Pune</p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone. Offices in Pune, Mumbai, Delhi, Gurugram.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MSME Classification - April 2025 Revised Limits</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Category</th><th>Investment (Plant & Machinery)</th><th>Annual Turnover</th><th>Gurugram Example</th></tr></thead>
                    <tbody>
                        <tr><td>Micro</td><td>Up to Rs 2.5 crore</td><td>Up to Rs 10 crore</td><td>Sohna Road startup, small workshop Sector 37</td></tr>
                        <tr><td>Small</td><td>Up to Rs 25 crore</td><td>Up to Rs 100 crore</td><td>IT company Cyber City, auto parts Manesar</td></tr>
                        <tr><td>Medium</td><td>Up to Rs 125 crore</td><td>Up to Rs 500 crore</td><td>Mid-size manufacturer Manesar, IT firm Golf Course Rd</td></tr>
                        <tr><td>Not MSME</td><td>Above Rs 125 crore</td><td>Above Rs 500 crore</td><td>Large corporations in Cyber City</td></tr>

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
                
                <p>Patron offers complete MSME and business registration in Gurugram:</p><ul>
                    <li><a href="/udyam-registration">Udyam Registration in India</a></li>
                    <li><a href="/gst-registration/gurugram">GST Registration in Gurugram</a></li>
                    <li><a href="/private-limited-company-registration/gurugram">Pvt Ltd Registration in Gurugram</a></li>
                    <li><a href="/startup-registration/gurugram">Startup Registration in Gurugram</a></li>
                    <li><a href="/trademark-registration/gurugram">Trademark Registration in Gurugram</a></li>
                    <li><a href="/accounting-services/gurugram">Accounting Services in Gurugram</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Udyam in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> MSMED Act, 2006 + Notification 26 June 2020 + April 2025 Revision</p><ul>
                    <li>Composite criteria: BOTH investment AND turnover within category limits. Stricter limit applies</li>
                    <li>One Udyam per PAN. Multiple activities via NIC codes. Auto-classification annually</li>
                    <li>Section 15 MSMED Act: Delayed payment protection - buyers pay within 45 days. Interest 3x bank rate</li>
                    <li>CGTMSE: Collateral-free up to Rs 5 Cr (expanded Rs 100 Cr select sectors Budget 2025)</li>
                    <li>GeM: 25% govt procurement from MSMEs, 4% from SC/ST-owned MSMEs</li></ul>
                <p><strong>Key Portals:</strong></p><ul>
                    <li><a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">udyamregistration.gov.in</a> - ONLY official portal</li>
                    <li>msme.haryana.gov.in - Haryana HUM portal for state schemes</li>
                    <li>gem.gov.in - Government e-Marketplace</li></ul>

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
                    <h2 class="faq-expanded__title">FAQs - Udyam Registration in Gurugram</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about Udyam MSME registration in Gurugram.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Udyam Registration in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I register for Udyam in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Visit udyamregistration.gov.in (only official portal). Enter Aadhaar, validate OTP. Fill enterprise details - PAN, GSTIN, Gurugram address, NIC code, investment, turnover. Certificate generated instantly with permanent URN. Patron handles complete process including data reconciliation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Udyam registration?</h3>
                        <div class="faq-expanded__a"><p>Official MSME registration with Ministry of MSME providing permanent URN and digital certificate. Unlocks priority lending, collateral-free loans (CGTMSE Rs 5 Cr), GeM procurement, delayed payment protection, and subsidies. Free, online, paperless, lifetime validity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are MSME limits after April 2025?</h3>
                        <div class="faq-expanded__a"><p>Micro: Investment up to Rs 2.5 Cr AND turnover up to Rs 10 Cr. Small: up to Rs 25 Cr / Rs 100 Cr. Medium: up to Rs 125 Cr / Rs 500 Cr. Both must be within limits simultaneously. Investment excludes land, building, vehicles. Turnover excludes GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is Udyam registration free?</h3>
                        <div class="faq-expanded__a"><p>Yes, completely free on government portal. Ministry warns no private agency is authorised to charge. Patron professional fee from Rs 999 covers data reconciliation, NIC code selection, and post-registration benefits activation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What documents are needed?</h3>
                        <div class="faq-expanded__a"><p>No documents uploaded - 100% self-declaration. Need Aadhaar (with linked mobile for OTP), PAN, GSTIN (if applicable), enterprise details including address, investment, turnover, NIC code, bank details. Portal auto-verifies against ITR and GST databases.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the benefits of MSME registration?</h3>
                        <div class="faq-expanded__a"><p>Priority sector bank loans at lower rates. CGTMSE collateral-free credit up to Rs 5 Cr. GeM government procurement (25% MSME reservation). Delayed payment protection (45 days). Subsidies on ISO, patent, bar code. Electricity concessions from Haryana.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is Udyam mandatory?</h3>
                        <div class="faq-expanded__a"><p>Not legally mandatory to operate. But prerequisite for all MSME benefits - priority lending, CGTMSE, GeM, delayed payment, government schemes. Many tenders require Udyam certificate. For Gurugram businesses targeting government contracts, effectively mandatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the April 2025 revised classification?</h3>
                        <div class="faq-expanded__a"><p>Investment limits increased 2.5x and turnover 2x. Medium went from Rs 50 Cr to Rs 125 Cr investment and Rs 250 Cr to Rs 500 Cr turnover. Many mid-sized Gurugram IT and manufacturing firms now qualify as MSMEs under the expanded limits.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Udyam registration free hai kya?</strong> Haan, bilkul free hai. Govt portal par koi fee nahi. Patron Rs 999 se start - classification check aur benefits activation.</p><p><strong>April 2025 mein limits badhe hain?</strong> Haan. Medium: investment Rs 125 Cr, turnover Rs 500 Cr. Bahut companies ab MSME mein qualify karti hain.</p><p><strong>Certificate kitne din mein milta hai?</strong> Instant. Portal par details bharo, Aadhaar OTP, aur certificate turant generate.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Udyam Registration for Your Gurugram Business - Zero Cost, Lifetime Benefits</h2>
            <div class="content-text">
                
                <p>Every day without Udyam = missed benefits: lower-interest loans (save 1-1.5%), CGTMSE collateral-free credit up to Rs 5 Cr, GeM government contracts (25% reservation), delayed payment protection (45 days). April 2025 revision means you almost certainly qualify now. Registration takes minutes, costs nothing, delivers lifetime benefits.</p><p><strong>Register now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Udyam Registration in Gurugram with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Udyam Registration is the highest-ROI compliance step for every eligible MSME in Gurugram. Zero cost, instant issuance, lifetime benefits. April 2025 revised limits dramatically expand the eligible pool - IT companies in Cyber City, manufacturers in Manesar, traders in Udyog Vihar all qualify under the new ceiling.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted registration with April 2025 classification, PAN-GSTIN-ITR reconciliation, dual-portal (Udyam + HUM), and benefits activation (GeM, CGTMSE, delayed payment). 15+ years, 10,000+ businesses. One engagement from certificate to benefits.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Udyam%20Registration%20in%20Gurugram&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20Udyam%20MSME%20registration%20in%20Gurugram.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides Udyam MSME registration in 8 major cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/udyam-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/udyam-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/udyam-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/udyam-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/udyam-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/udyam-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/udyam-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end MSME and business registration in Gurugram</div><div class="pa-cross-grid"><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/trademark-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/iec-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to incorporate MSME classification changes, Udyam portal updates, CGTMSE limit revisions, GeM policy changes, and Haryana MSME scheme notifications. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
