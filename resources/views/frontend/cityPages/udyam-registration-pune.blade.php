
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Udyam Registration in Pune - MSME Certificate & Benefits</title>
    <meta name="description" content="Free Udyam/MSME registration in Pune. CA-assisted portal filing. CGTMSE loans, GeM access, Section 43B(h) protection. Serving MIDC, Hinjewadi MSMEs. Call +91 945 945 6700.">
    <link rel="canonical" href="/udyam-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Udyam Registration in Pune - MSME Certificate & Benefits">
    <meta property="og:description" content="Free Udyam/MSME registration in Pune. CA-assisted portal filing. CGTMSE loans, GeM access, Section 43B(h) protection. Serving MIDC, Hinjewadi MSMEs. Call +91 945 945 6700.">
    <meta property="og:url" content="/udyam-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Udyam Registration in Pune - MSME Certificate & Benefits">
    <meta name="twitter:description" content="Free Udyam/MSME registration in Pune. CA-assisted portal filing. CGTMSE loans, GeM access, Section 43B(h) protection. Serving MIDC, Hinjewadi MSMEs. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Udyam Registration in Pune",
      "description": "Free Udyam/MSME registration in Pune. CA-assisted portal filing. CGTMSE loans, GeM access, Section 43B(h) protection. Serving MIDC, Hinjewadi MSMEs. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/udyam-registration/pune",
      "serviceType": "Udyam Registration in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
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
        "url": "https://www.patronaccounting.com/udyam-registration/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "50",
          "maxPrice": "999",
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
          "name": "Udyam Registration in Pune",
          "item": "https://www.patronaccounting.com/udyam-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does Udyam registration cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Udyam registration is completely free on the official government portal (udyamregistration.gov.in). The Ministry of MSME charges zero fees. Any website demanding 'government fee' is unauthorised. Patron's advisory fee starts from Rs 999 for assisted registration with NIC code mapping and post-registration benefit setup."
          }
        },
        {
          "@type": "Question",
          "name": "How long does Udyam registration take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Processed instantly upon successful Aadhaar OTP verification and form submission. Certificate with 19-digit Udyam Registration Number and dynamic QR code available for download immediately. Post-registration setup (GeM, CGTMSE, NSIC) takes additional 5-30 days."
          }
        },
        {
          "@type": "Question",
          "name": "What are the MSME classification limits?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Micro: investment up to Rs 1 crore AND turnover up to Rs 5 crore. Small: up to Rs 10 crore AND up to Rs 50 crore. Medium: up to Rs 50 crore AND up to Rs 250 crore. Both criteria must be met. Export turnover excluded. Classification auto-updated from IT and GST data."
          }
        },
        {
          "@type": "Question",
          "name": "Is Udyam registration mandatory for MSMEs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not legally mandatory for business operations, but effectively required for accessing all MSME benefits: priority sector lending, CGTMSE loans, GeM procurement, Section 43B(h) payment protection, and central/state MSME schemes. Without registration, no MSME benefit can be claimed."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 43B(h) delayed payment protection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 43B(h) of the Income Tax Act (effective 1 April 2024) requires buyers to pay MSME suppliers within 45 days (with agreement) or 15 days (without). If buyer fails, the expense is disallowed as deduction in the buyer's income tax return. Only applies to Udyam-registered MSMEs."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Udyam and Udyog Aadhaar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Udyog Aadhaar (UAM) was the earlier system, replaced by Udyam on 1 July 2020. All old UAM/EM-II holders must re-register on the Udyam portal. Old registrations are no longer valid for MSME schemes. Udyam auto-fetches data from IT/GST systems for more accurate classification."
          }
        },
        {
          "@type": "Question",
          "name": "Can traders register under Udyam?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Since July 2021, wholesale and retail traders are eligible for Udyam and can access priority sector lending. However, traders are not eligible for all schemes (e.g., public procurement preference applies only to manufacturing and service MSEs). Pune's Market Yard and Bhavani Peth traders can register for bank credit benefits."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company hold both DPIIT and Udyam registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. DPIIT (Startup India) and Udyam (MSME) are separate systems with different benefits. A Pune startup can hold both - DPIIT for Section 80IAC tax exemption and angel tax relief, Udyam for CGTMSE loans, Section 43B(h) protection, and MSME procurement preference. Patron registers eligible startups on both. Quick Answers Udyam registration ka fee kitna hai? ZERO. Government portal pe bilkul free hai. Jo bhi portal ya agent fee maange woh unauthorised hai. Section 43B(h) kya hai? Agar buyer MSME supplier ko 45 din mein payment nahi karta, to buyer ko woh expense income tax mein deduction nahi milega. Yeh sirf Udyam registered MSMEs ko protection deta hai. Traders Udyam mein register kar sakte hain? Haan. July 2021 se wholesale aur retail traders bhi eligible hain. Bank priority lending milti hai."
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
                        Udyam Registration in Pune: Free MSME Certificate for Manufacturers, IT Companies, and Traders
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Aadhaar of proprietor/partner/director, PAN, GSTIN (if applicable) - NO document uploads required (self-declaration)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Government fee ZERO | Patron all-inclusive from Rs 999 (with NIC code mapping + post-registration setup)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All manufacturing and service enterprises with investment up to Rs 50 crore and turnover up to Rs 250 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Instant to 1-3 working days (fully online, paperless, self-declaration based)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Visit our Pune office or get started online</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Udyam Registration in Pune',
                                            'city'     => 'Pune',
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
    'ctaText'    => 'CA-managed Udyam registration with CGTMSE loans, GeM access, and Section 43B(h) protection for Pune MSMEs.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is Udyam</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">MSME Classes</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Udyam Registration in Pune Services at a Glance</strong></p>
                    <p>Udyam Registration is the Government of India's free, fully online, paperless MSME registration system at udyamregistration.gov.in that assigns a permanent 19-digit Udyam Registration Number and e-certificate with dynamic QR code. Registration unlocks collateral-free CGTMSE loans up to Rs 5 crore, GeM government procurement access, 50% patent/trademark subsidy, and Section 43B(h) delayed payment protection.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Portal</td><td>udyamregistration.gov.in (official; no other portal authorised)</td></tr><tr><td>Government Fee</td><td>ZERO (completely free)</td></tr><tr><td>Process</td><td>Fully online, paperless, self-declaration. No document uploads.</td></tr><tr><td>Requirements</td><td>Aadhaar + PAN + GSTIN (if applicable)</td></tr><tr><td>Timeline</td><td>Instant to 1-3 working days</td></tr><tr><td>Validity</td><td>Lifetime (no renewal; auto-updated from IT/GST data)</td></tr><tr><td>Classification</td><td>Micro: &lt; Rs 1 Cr invest + &lt; Rs 5 Cr turnover | Small: &lt; Rs 10 Cr + &lt; Rs 50 Cr | Medium: &lt; Rs 50 Cr + &lt; Rs 250 Cr</td></tr><tr><td>Key Benefit</td><td>Section 43B(h): Buyers must pay MSME suppliers within 45 days or lose tax deduction</td></tr></tbody></table></div></p>
                </div>
                <p>Pune is one of India's largest MSME hubs. Thousands of auto component manufacturers operate from Chakan, Talegaon, and Pimpri-Chinchwad. Engineering and pharma MSMEs in MIDC Bhosari produce precision components and APIs. IT MSMEs in Hinjewadi and Kharadi serve global clients. D2C brands, food processors, and professional service firms across Pune qualify - yet many operate without Udyam, missing collateral-free loans, government tenders, and Section 43B(h) protection. Learn more about <a href="/udyam-registration">Udyam Registration across India</a>.</p>
                <p>Patron Accounting handles Udyam registration from our Pune office at RTC Silver, Wagholi - bundled with <a href="/gst-registration">GST Registration</a>, PTRC/PTEC, Tally/Zoho accounting, NIC code mapping, GeM seller registration, CGTMSE loan facilitation, and <a href="/income-tax-return">Section 43B(h) compliance advisory</a>.</p>
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
                <h2 class="section-title">What Is Udyam Registration</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Udyam Registration is the Government of India's free, fully online system for registering Micro, Small, and Medium Enterprises under the MSMED Act, 2006, assigning a permanent 19-digit Udyam Registration Number and e-certificate with dynamic QR code via udyamregistration.gov.in.</p><p>Launched 1 July 2020, Udyam replaced Udyog Aadhaar Memorandum (UAM) and SSI registration. The process is entirely paperless and self-declaration based - no documents uploaded. The portal integrates with Income Tax and GSTIN systems, auto-fetching investment and turnover data for classification. Only one Udyam Registration is permitted per enterprise.</p><p>MSME classification uses composite criteria: investment in plant and machinery/equipment AND annual turnover. Micro: up to Rs 1 crore investment and Rs 5 crore turnover. Small: up to Rs 10 crore and Rs 50 crore. Medium: up to Rs 50 crore and Rs 250 crore. Classification is auto-updated from IT and GST data.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Udyam Registration in Pune:</strong></p>
                    <p><strong>Section 43B(h):</strong> Income Tax Act provision (effective 1 April 2024) - buyers must pay MSME suppliers within 45 days (with agreement) or 15 days (without), or lose the expense deduction. Only applies to Udyam-registered MSMEs.</p><p><strong>CGTMSE:</strong> Credit Guarantee Fund Trust for Micro and Small Enterprises - collateral-free loans up to Rs 5 crore for Udyam-registered enterprises.</p><p><strong>GeM:</strong> Government e-Marketplace (gem.gov.in) - central/state government procurement platform. Udyam certificate required for MSME seller benefits.</p><p><strong>NIC Code:</strong> National Industrial Classification code determining enterprise activity, scheme eligibility, and GeM listing category.</p><p><strong>MSME Classification:</strong> Micro (&lt; Rs 1 Cr invest + &lt; Rs 5 Cr turnover), Small (&lt; Rs 10 Cr + &lt; Rs 50 Cr), Medium (&lt; Rs 50 Cr + &lt; Rs 250 Cr). Both criteria must be met.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Udyam Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>MSMED Act 2006</span>
                        <strong>Udyam Certificate</strong>
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
            <h2 class="section-title">Who Needs Udyam Registration in Pune</h2>
            <div class="content-text">
                
                <p><strong>Auto Component Manufacturers (Chakan, Talegaon, Pimpri-Chinchwad, MIDC Bhosari):</strong> Precision components, castings, forgings, stampings supplying to OEMs. Udyam unlocks Section 43B(h) payment protection (buyers must pay within 45 days), CGTMSE loans up to Rs 5 crore, and GeM government procurement preference.</p><p><strong>IT and Software Companies (Hinjewadi, Kharadi):</strong> SaaS, digital marketing, IT consulting, software development studios with turnover below Rs 250 crore. GeM access for government departments, priority sector lending, and 50% trademark/patent subsidy.</p><p><strong>D2C Brands, Food Processors, Traders:</strong> Since July 2021, wholesale and retail traders are eligible for Udyam for priority sector lending. Covers Pune's trading community in Market Yard and Bhavani Peth.</p><p><strong>Professional Service Providers and Freelancers:</strong> CAs, lawyers, consultants, architects operating as proprietorships, partnerships, or LLPs. Service enterprises with turnover below Rs 5 crore qualify as Micro - eligible for collateral-free credit.</p><p><strong>Startups with DPIIT Recognition:</strong> DPIIT and Udyam are separate systems. A startup can hold both for different benefits - DPIIT for Section 80IAC tax exemption, Udyam for CGTMSE loans and Section 43B(h) protection.</p><p><strong>Existing UAM/EM-II Holders:</strong> Must re-register on Udyam portal. Old registrations no longer valid for accessing MSME schemes and benefits.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">11 Udyam Registration Services Included in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Udyam Registration (Official Portal)</td><td>Complete registration on udyamregistration.gov.in with Aadhaar verification, PAN validation, GSTIN linking, NIC code selection, and investment/turnover declaration. Government fee: ZERO.</td></tr><tr><td>NIC Code Mapping</td><td>Accurate 4-digit NIC code for Pune's auto components (2930), IT services (6201/6202), food processing (1010-1080), professional services (6910-7490). Affects classification and scheme eligibility.</td></tr><tr><td>GST Registration (if needed)</td><td>Filed simultaneously. GSTIN mandatory for Udyam since 1 April 2021 for GST-registered enterprises.</td></tr><tr><td>Maharashtra PTRC/PTEC</td><td>Professional Tax on mahagst.gov.in - mandatory for Pune employers alongside Udyam.</td></tr><tr><td>Tally/Zoho Books Setup</td><td>MSME-specific cost centres, investment tracking (plant and machinery), and turnover monitoring for classification compliance.</td></tr><tr><td>GeM Seller Registration</td><td>Registration on gem.gov.in for government procurement. Udyam certificate prerequisite for MSME seller benefits.</td></tr><tr><td>CGTMSE Loan Facilitation</td><td>Collateral-free loans up to Rs 5 crore. Patron prepares loan documentation package for bank submission.</td></tr><tr><td>NSIC Registration</td><td>Single-point registration for government tender participation with EMD exemption.</td></tr><tr><td>Section 43B(h) Compliance Advisory</td><td>Invoicing terms, payment tracking, and interest claims under MSMED Act. Ensures buyers pay within 45-day statutory window.</td></tr><tr><td>Udyam Update/Correction</td><td>Activity change, address change, investment/turnover update. Classification auto-updates from IT/GST data annually.</td></tr><tr><td>UAM to Udyam Migration</td><td>Re-registration of enterprises with old UAM/EM-II on the Udyam portal. Old registrations no longer valid.</td></tr>

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
            <h2 class="section-title">6-Step Udyam Registration Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Udyam registration is entirely online via udyamregistration.gov.in. DIC Pune and Champions Control Room provide facilitation. Patron's Pune office at RTC Silver, Wagholi handles registration, NIC code mapping, GeM setup, and CGTMSE facilitation. Walk-in available.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Gather Aadhaar, PAN, and GSTIN</h3><p class="step-description">Only prerequisites: Aadhaar of proprietor/managing partner/Karta/authorised signatory + PAN of enterprise + GSTIN (mandatory since 1 April 2021 for GST-registered enterprises). No physical documents needed - the portal fetches data from Aadhaar, PAN, and GST databases automatically.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN + GSTIN verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="18" width="25" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="38" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Aadhaar</text><rect x="55" y="18" width="20" height="20" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="65" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text><rect x="80" y="18" width="20" height="20" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="90" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GST</text></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Visit the Official Udyam Portal</h3><p class="step-description">Navigate to udyamregistration.gov.in - the ONLY authorised portal. No other website or app is authorised by the Ministry of MSME. Private portals charging fees are unauthorised. Patron files exclusively on the official government portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Official portal only</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No private sites</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">udyamregistration</text><text x="60" y="40" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">.gov.in</text><text x="60" y="58" font-size="4" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Official &amp; FREE</text></svg></div><span class="illustration-label">Portal Open</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Enter Aadhaar and Verify via OTP</h3><p class="step-description">Enter Aadhaar number and name. Portal sends OTP to Aadhaar-linked mobile for verification. Upon success, details auto-fetched from Aadhaar database. If mobile number is outdated, update Aadhaar mobile before registration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Identity confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="15" width="60" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="10" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">OTP</text><text x="60" y="52" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Aadhaar Verified</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Fill Enterprise Details with NIC Code</h3><p class="step-description">Enterprise name, type (proprietorship/partnership/company/LLP), PAN, Pune address, bank details, and NIC code. Patron selects the correct NIC code: auto components Chakan (2930), IT services Hinjewadi (6201/6202), food processing MIDC (1010-1080), professional services (6910-7490).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NIC code mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Enterprise details filled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><rect x="30" y="45" width="50" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="55" y="55" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NIC 2930</text></svg></div><span class="illustration-label">NIC Mapped</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Declare Investment and Turnover</h3><p class="step-description">Enter investment in plant and machinery/equipment and annual turnover. Portal cross-verifies with IT and GST data. Classification auto-assigned: Micro (&lt; Rs 1 Cr + &lt; Rs 5 Cr), Small (&lt; Rs 10 Cr + &lt; Rs 50 Cr), Medium (&lt; Rs 50 Cr + &lt; Rs 250 Cr).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Classification assigned</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auto-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="10" width="35" height="30" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="22" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Micro</text><rect x="45" y="10" width="30" height="30" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Small</text><rect x="80" y="10" width="35" height="30" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="98" y="28" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Medium</text><rect x="20" y="50" width="80" height="20" rx="3" fill="#14365F" opacity="0.06"/><text x="60" y="63" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Classified</text></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive Certificate and Setup MSME Benefits</h3><p class="step-description">Portal assigns permanent 19-digit Udyam Registration Number with e-certificate and dynamic QR code - available immediately. Patron then sets up: GeM seller registration, CGTMSE loan documentation, Section 43B(h) compliance in invoicing and payment terms, and NSIC single-point registration for tenders.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Benefits activated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">MSME</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Udyam Certificate + QR</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CGTMSE + GeM + 43B(h)</text></svg></div><span class="illustration-label">MSME Ready</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Udyam Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li>Aadhaar Number of proprietor/managing partner/Karta/authorised signatory (linked to active mobile for OTP)</li><li>PAN of the enterprise (or proprietor's PAN for proprietorships)</li><li>GSTIN (mandatory since 1 April 2021 for GST-registered enterprises)</li><li>Bank account details (account number, IFSC code)</li><li>Enterprise name, type of organisation, date of commencement</li><li>NIC Code for business activity (Patron maps the correct 4-digit code)</li><li>Investment in plant and machinery/equipment (self-declaration)</li><li>Annual turnover (self-declaration; auto-verified from IT/GST data)</li><li>NO physical documents need to be uploaded - entire process is self-declaration based</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Pune-Specific Tip:</strong> For auto component manufacturers in Chakan and MIDC Bhosari, accurately declaring plant and machinery investment is critical for classification. Investment includes purchase price minus depreciation but excludes land and building. For IT companies in Hinjewadi, equipment includes computers, servers, and software licences. Patron helps calculate the correct investment figure per MSME notification guidelines.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common Udyam Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Incorrect NIC Code Selection</td><td>Generic NIC codes miss targeted scheme benefits. Auto manufacturer using general 'manufacturing' instead of NIC 2930 loses access to specific schemes.</td><td>Map correct 4-digit NIC code based on actual business activities for Pune's auto, IT, pharma, and food sectors.</td></tr><tr><td>Aadhaar-Mobile Number Mismatch</td><td>OTP sent to Aadhaar-linked mobile. Outdated number blocks registration entirely.</td><td>Advise on Aadhaar mobile update before initiating Udyam registration.</td></tr><tr><td>Not Migrating from Old UAM</td><td>Old UAM/EM-II registrations no longer valid for MSME schemes, bank credit, or government procurement.</td><td>Migrate old registrations to Udyam portal. Many MIDC Bhosari and Pimpri-Chinchwad MSMEs still on old UAM numbers.</td></tr><tr><td>Not Leveraging Section 43B(h)</td><td>Buyers can delay MSME payments without tax consequence if supplier lacks valid Udyam. Most powerful MSME protection unused.</td><td>Section 43B(h) compliance advisory: invoicing terms, payment tracking, interest claims under MSMED Act.</td></tr><tr><td>Registering on Unauthorised Portals</td><td>Private websites charge Rs 500-5,000 for a free government process. Registrations may not be valid.</td><td>File exclusively on official udyamregistration.gov.in portal. Transparent pricing for advisory services only.</td></tr>

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
            <h2 class="section-title">Udyam Registration Fees in Pune - 2026 Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Udyam Registration (Government Portal)</td><td>Govt: ZERO | Patron: Rs 999 (portal filing + NIC code mapping)</td></tr><tr><td>Udyam + GST Bundle</td><td>Govt: ZERO (Udyam) | Patron: Rs 2,999 (Udyam + GST together)</td></tr><tr><td>Udyam + GST + PTRC/PTEC</td><td>Govt: ZERO (Udyam) | Patron: Rs 4,999 (complete MSME compliance)</td></tr><tr><td>GeM Seller Registration (add-on)</td><td>Govt: ZERO | Patron: Rs 1,999</td></tr><tr><td>CGTMSE Loan Documentation</td><td>Patron: Rs 4,999 (loan application package for bank)</td></tr><tr><td>NSIC Registration (add-on)</td><td>Govt: Rs 5,000-25,000 | Patron: Rs 2,999 + govt fee</td></tr><tr><td>Tally/Zoho Accounting Setup</td><td>Patron: Rs 2,999 (MSME cost centre + investment tracking)</td></tr><tr><td>UAM to Udyam Migration</td><td>Govt: ZERO | Patron: Rs 499</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Udyam Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar/PAN/GSTIN Verification</td><td>Pre-registration (ensure Aadhaar mobile is current)</td></tr><tr><td>Portal Registration</td><td>Instant to 1 day (self-declaration; no uploads)</td></tr><tr><td>Udyam Certificate Issuance</td><td>Instant (certificate with QR code available immediately)</td></tr><tr><td>GeM Seller Registration</td><td>3-5 days (post-Udyam; GeM portal approval)</td></tr><tr><td>CGTMSE Loan Application</td><td>7-15 days (bank processing after documentation)</td></tr><tr><td>NSIC Registration</td><td>15-30 days (NSIC processing + inspection)</td></tr><tr><td><strong>Total (Udyam only)</strong></td><td><strong>Instant to 1 day - certificate issued same day in most cases</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Udyam registration is the fastest government registration in India - certificate issued instantly upon successful form submission. The real value is in post-registration benefit setup: GeM seller within 5 days, CGTMSE documentation within 7 days, Section 43B(h) compliant invoicing configured in Tally/Zoho. Patron delivers the complete MSME-readiness chain.</p>

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
            <h2 class="section-title">Why Choose Patron for Udyam Registration in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Post-Registration Benefit Activation</h3><p class="feature-text">While Udyam itself is free and instant, the real value lies in what happens AFTER: GeM seller setup, CGTMSE loan facilitation, Section 43B(h) compliance, NSIC registration, and accurate NIC code mapping. This is where Patron's CA expertise makes the difference.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">Pune MSME Sector NIC Expertise</h3><p class="feature-text">Correct NIC codes for Chakan auto components (2930), Hinjewadi IT services (6201/6202), MIDC Bhosari engineering, and Pune food processing. Incorrect NIC codes cause problems during bank loans and GeM listing.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Section 43B(h) Payment Protection</h3><p class="feature-text">The most powerful MSME commercial tool. Patron configures Section 43B(h) compliant invoicing in Tally/Zoho, tracks buyer payment timelines, and advises on interest claims under MSMED Act for delayed payments.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Official Portal Only - Transparent Pricing</h3><p class="feature-text">Unlike unauthorised portals charging for a free process, Patron files exclusively on udyamregistration.gov.in with transparent advisory fees. Government fee is ZERO. Patron charges only for professional advisory and benefit activation.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India. Patron serves Pune MSMEs across manufacturing, IT, and service sectors with local CA expertise and post-registration benefit activation.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MSME Classification - Investment and Turnover Limits</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Category</th><th>Investment in Plant & Machinery</th><th>Annual Turnover</th></tr></thead>
                    <tbody>
                        <tr><td>Micro</td><td>Up to Rs 1 crore</td><td>Up to Rs 5 crore</td></tr><tr><td>Small</td><td>Up to Rs 10 crore</td><td>Up to Rs 50 crore</td></tr><tr><td>Medium</td><td>Up to Rs 50 crore</td><td>Up to Rs 250 crore</td></tr>

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
            <h2 class="section-title">Related Business and MSME Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/udyam-registration">Udyam Registration in India</a> - Our national MSME registration service</li><li><a href="/gst-registration">GST Registration</a> - GSTIN mandatory for Udyam since April 2021</li><li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition for Startup India benefits</li><li><a href="/trademark-registration">Trademark Registration</a> - 50% fee subsidy for Udyam-registered MSMEs</li><li><a href="/accounting-services">Accounting Services</a> - Investment and turnover tracking for MSME classification</li><li><a href="/iec-registration">IEC Registration</a> - Export turnover excluded from MSME classification</li></ul><p>Both investment AND turnover criteria must be met. Export turnover is excluded from calculation, benefiting Pune's exporting MSMEs in Chakan and MIDC Bhosari. Classification is auto-updated - no manual renewal needed.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Udyam Registration</h2>
            <div class="content-text">
                
                <p><strong>Governing Provisions:</strong></p><ul><li>MSMED Act, 2006 - MSME classification, registration, and protection framework</li><li>MSME Notification 26 June 2020 - Udyam Registration effective 1 July 2020, replacing UAM/SSI</li><li>Section 15 of MSMED Act - Buyer must pay MSME within 45 days (agreement) or 15 days (no agreement). Interest at 3x bank rate.</li><li>Section 43B(h) Income Tax Act (effective 1 April 2024) - Buyer loses expense deduction if MSME not paid within statutory period</li><li>CGTMSE - Collateral-free loans up to Rs 5 crore for Micro and Small enterprises</li><li>Public Procurement Policy for MSEs, 2012 - 25% government procurement from MSEs (4% SC/ST, 3% women MSEs)</li><li>Maharashtra Industrial Policy - Electricity duty exemption, stamp duty concession, interest subsidy for MSMEs</li></ul><p><strong>Key Portal:</strong> <a href="https://udyamregistration.gov.in" target="_blank" rel="noopener">udyamregistration.gov.in</a> - ONLY authorised portal</p>

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
                    <h2 class="faq-expanded__title">FAQs - Udyam Registration in Pune</h2>
                    <p class="faq-expanded__lead">Answers to common questions about Udyam/MSME registration in Pune. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Udyam Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does Udyam registration cost?</h3>
                        <div class="faq-expanded__a"><p>Udyam registration is completely free on the official government portal (udyamregistration.gov.in). The Ministry of MSME charges zero fees. Any website demanding 'government fee' is unauthorised. Patron's advisory fee starts from Rs 999 for assisted registration with NIC code mapping and post-registration benefit setup.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does Udyam registration take?</h3>
                        <div class="faq-expanded__a"><p>Processed instantly upon successful Aadhaar OTP verification and form submission. Certificate with 19-digit Udyam Registration Number and dynamic QR code available for download immediately. Post-registration setup (GeM, CGTMSE, NSIC) takes additional 5-30 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are the MSME classification limits?</h3>
                        <div class="faq-expanded__a"><p>Micro: investment up to Rs 1 crore AND turnover up to Rs 5 crore. Small: up to Rs 10 crore AND up to Rs 50 crore. Medium: up to Rs 50 crore AND up to Rs 250 crore. Both criteria must be met. Export turnover excluded. Classification auto-updated from IT and GST data.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is Udyam registration mandatory for MSMEs?</h3>
                        <div class="faq-expanded__a"><p>Not legally mandatory for business operations, but effectively required for accessing all MSME benefits: priority sector lending, CGTMSE loans, GeM procurement, Section 43B(h) payment protection, and central/state MSME schemes. Without registration, no MSME benefit can be claimed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Section 43B(h) delayed payment protection?</h3>
                        <div class="faq-expanded__a"><p>Section 43B(h) of the Income Tax Act (effective 1 April 2024) requires buyers to pay MSME suppliers within 45 days (with agreement) or 15 days (without). If buyer fails, the expense is disallowed as deduction in the buyer's income tax return. Only applies to Udyam-registered MSMEs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between Udyam and Udyog Aadhaar?</h3>
                        <div class="faq-expanded__a"><p>Udyog Aadhaar (UAM) was the earlier system, replaced by Udyam on 1 July 2020. All old UAM/EM-II holders must re-register on the Udyam portal. Old registrations are no longer valid for MSME schemes. Udyam auto-fetches data from IT/GST systems for more accurate classification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can traders register under Udyam?</h3>
                        <div class="faq-expanded__a"><p>Yes. Since July 2021, wholesale and retail traders are eligible for Udyam and can access priority sector lending. However, traders are not eligible for all schemes (e.g., public procurement preference applies only to manufacturing and service MSEs). Pune's Market Yard and Bhavani Peth traders can register for bank credit benefits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a company hold both DPIIT and Udyam registration?</h3>
                        <div class="faq-expanded__a"><p>Yes. DPIIT (Startup India) and Udyam (MSME) are separate systems with different benefits. A Pune startup can hold both - DPIIT for Section 80IAC tax exemption and angel tax relief, Udyam for CGTMSE loans, Section 43B(h) protection, and MSME procurement preference. Patron registers eligible startups on both.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Udyam registration ka fee kitna hai?</strong> ZERO. Government portal pe bilkul free hai. Jo bhi portal ya agent fee maange woh unauthorised hai.</p><p><strong>Section 43B(h) kya hai?</strong> Agar buyer MSME supplier ko 45 din mein payment nahi karta, to buyer ko woh expense income tax mein deduction nahi milega. Yeh sirf Udyam registered MSMEs ko protection deta hai.</p><p><strong>Traders Udyam mein register kar sakte hain?</strong> Haan. July 2021 se wholesale aur retail traders bhi eligible hain. Bank priority lending milti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Every Day Without Udyam = Lost MSME Benefits</h2>
            <div class="content-text">
                
                <p>Every day without Udyam registration means your MSME cannot claim Section 43B(h) payment protection - your large buyers in Hinjewadi, Chakan, and Pimpri-Chinchwad can delay payments without tax consequence. Banks cannot classify your loan under priority sector lending without Udyam. GeM tenders (Rs 1 lakh crore+ annual procurement) are only for Udyam-registered MSMEs. CGTMSE collateral-free loans up to Rs 5 crore require Udyam. Old UAM registrations are no longer valid. Registration is free and instant - there is no reason to delay.</p><p><strong>Get your Udyam certificate today. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Free MSME Certificate and Unlock Benefits</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Udyam Registration in Pune provides free, permanent MSME recognition that unlocks CGTMSE loans, GeM procurement, Section 43B(h) payment protection, priority sector lending, and IPR fee subsidy for manufacturers in MIDC Bhosari and Chakan, IT companies in Hinjewadi and Kharadi, and service providers across the city.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Pune office at RTC Silver, Wagholi delivers the complete MSME-readiness chain: Udyam registration with NIC code mapping, GST, PTRC/PTEC, GeM seller setup, CGTMSE loan documentation, and Section 43B(h) compliance. With 10,000+ businesses served and a CA team experienced in Pune's MSME ecosystem, Patron turns a free Udyam certificate into a revenue-generating asset.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Udyam%20Registration%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers Udyam/MSME registration in 8 major cities. Select your city below.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/udyam-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/udyam-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/udyam-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/udyam-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/udyam-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/udyam-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/udyam-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end MSME and business registration</div><div class="pa-cross-grid"><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/iec-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually (Freshness Tier 2) to reflect MSME classification updates, scheme changes, Section 43B(h) enforcement, and portal updates. The next scheduled review is September 2026.</p>
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
