
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>IEC Registration in Delhi - DGFT, Fees & Export Code</title>
    <meta name="description" content="CA-assisted IEC registration in Delhi. Import Export Code via DGFT for traders, manufacturers and service exporters. Serving Okhla, CP, Nehru Place. Call +91 945 945 6700.">
    <link rel="canonical" href="/iec-registration/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IEC Registration in Delhi - DGFT, Fees & Export Code">
    <meta property="og:description" content="CA-assisted IEC registration in Delhi. Import Export Code via DGFT for traders, manufacturers and service exporters. Serving Okhla, CP, Nehru Place. Call +91 945 945 6700.">
    <meta property="og:url" content="/iec-registration/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IEC Registration in Delhi - DGFT, Fees & Export Code">
    <meta name="twitter:description" content="CA-assisted IEC registration in Delhi. Import Export Code via DGFT for traders, manufacturers and service exporters. Serving Okhla, CP, Nehru Place. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "IEC Registration in Delhi",
      "description": "CA-assisted IEC registration in Delhi. Import Export Code via DGFT for traders, manufacturers and service exporters. Serving Okhla, CP, Nehru Place. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/iec-registration/delhi",
      "serviceType": "IEC Registration in Delhi",
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
        "url": "https://www.patronaccounting.com/iec-registration/delhi",
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
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "IEC Registration in Delhi",
          "item": "https://www.patronaccounting.com/iec-registration/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who issues IEC in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Directorate General of Foreign Trade (DGFT), Ministry of Commerce and Industry issues IEC. DGFT Headquarters is at Udyog Bhawan, New Delhi. The DGFT Delhi Zonal Office (CLA) serves as Northern Zone HQ. IEC is applied online through dgft.gov.in. EDI Helpdesk: 1800-572-1550. Patron handles all DGFT portal filings from our Delhi office."
          }
        },
        {
          "@type": "Question",
          "name": "Is IEC the same as PAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, since GST, the IEC number equals the firm's PAN. However, DGFT still requires a separate online application through the portal using Form ANF 2A and issues the IEC certificate independently. Having PAN alone does not mean you have IEC - the DGFT application must be filed and certificate obtained."
          }
        },
        {
          "@type": "Question",
          "name": "How much does IEC registration cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fee is Rs 500, paid online on the DGFT portal. Patron's professional fee starts from INR 1,499 covering document preparation, DGFT portal filing, IEC certificate download and verification. The IEC + AD Code + LUT export readiness bundle costs Rs 4,999. Annual update costs Rs 999."
          }
        },
        {
          "@type": "Question",
          "name": "How long does IEC registration take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IEC registration through the DGFT portal takes 2-3 working days for straightforward applications. Document compilation takes 1-2 days. The complete export readiness package (IEC + AD Code + LUT) takes 5-7 working days. Patron's accurate documentation ensures first-time approval."
          }
        },
        {
          "@type": "Question",
          "name": "Is annual IEC update mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every IEC holder must update details on the DGFT portal annually during the April-June window. Failure causes automatic deactivation, blocking all import and export transactions. Reactivation requires filing the update and waiting for DGFT processing. Patron files proactively for all Delhi clients."
          }
        },
        {
          "@type": "Question",
          "name": "Can individuals get IEC in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Individuals cannot get IEC in personal capacity for trade. However, a proprietorship firm can obtain IEC. The firm must have PAN, a bank account in the firm's name and a valid Delhi business address. Other eligible entities include partnerships, LLPs, companies, trusts, HUFs and societies. Quick Answers IEC kya hai? IEC (Import Export Code) ek 10-digit number hai jo DGFT issue karta hai. India se goods import ya export karne ke liye mandatory hai. Delhi mein dgft.gov.in pe online apply hota hai. Govt fee Rs 500. 2-3 din mein milta hai. PAN hi IEC number ban gaya hai GST ke baad. Kya IEC ka annual update zaroori hai? Haan, har saal April-June mein DGFT portal pe IEC update karna mandatory hai. Nahi karoge to IEC automatically deactivate ho jayega aur koi bhi import-export nahi kar paoge. AD Code kya hota hai? AD Code aapke bank account ka code hai jo customs port pe register karna padta hai. IEC milne ke baad AD Code IGI Airport ya ICD Tughlakabad ke customs mein register karo - bina AD Code ke consignment process nahi hoga."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        IEC Registration in Delhi: CA-Assisted Import Export Code for Traders, Manufacturers and Exporters
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business address proof, bank account details (cancelled cheque), constitution documents, DSC (for companies/LLPs)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Govt fee Rs 500 | Patron professional fee from INR 1,499</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any business entity (proprietorship, partnership, LLP, company, trust, HUF, society) engaged in import or export</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 2-3 working days (online processing via DGFT portal)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Trusted by Delhi importers and exporters across Okhla, Nehru Place and Chandni Chowk</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20IEC%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'IEC Registration in Delhi',
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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Get expert CA-assisted IEC registration in Delhi with end-to-end support from DGFT filing to full export-import readiness.',
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
            <a href="#what-section" class="toc-btn">What Is IEC</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
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
            <h2 class="section-title">IEC Registration in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IEC Registration in Delhi Services at a Glance</strong></p>
                    <p>The Import Export Code (IEC) is a 10-digit unique identification number issued by the Directorate General of Foreign Trade (DGFT), Ministry of Commerce and Industry. It is mandatory for every business importing or exporting goods from India. Since GST, the IEC number equals the PAN of the firm, though DGFT still issues it separately. IEC is applied online through dgft.gov.in using Form ANF 2A with a government fee of Rs 500. The IEC has lifetime validity but requires mandatory annual update on the DGFT portal (April-June window) to remain active - failure to update causes automatic deactivation. Delhi businesses benefit from proximity to DGFT Headquarters at Udyog Bhawan, IGI Airport customs and ICD Tughlakabad.</p>
                </div>
                <p>Delhi is India's gateway to international trade. The city houses the DGFT Headquarters at Udyog Bhawan on Maulana Azad Road, the DGFT Delhi Zonal Office (CLA) serving as the Northern Zone Headquarters, Indira Gandhi International Airport (India's busiest international cargo airport), ICD Tughlakabad (one of India's largest inland container depots), and multiple Custom Houses. Delhi's export ecosystem spans textiles from Gandhi Nagar and Okhla, electronics imports through Nehru Place, auto parts from Karol Bagh, handicrafts from Janpath and Dilli Haat, spices from Khari Baoli and IT/ITES services exports from Connaught Place. Learn more about <a href="/iec-registration">IEC Registration across India</a>.</p>
                <p>For every Delhi business engaged in importing or exporting goods, an Import Export Code issued by DGFT is the first mandatory requirement. Without IEC, goods cannot clear customs at IGI Airport, ICD Tughlakabad or any Indian port. Since GST, the IEC number equals the firm's PAN, but DGFT still requires a separate application. Delhi businesses also need <a href="/gst-registration">GST Registration</a> for tax compliance on import-export transactions, and exporters should file a <a href="/income-tax-return">Letter of Undertaking (LUT)</a> for zero-rated exports.</p>
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
                    
                    <p>Import Export Code (IEC) is a 10-digit unique business identification number issued by the Directorate General of Foreign Trade (DGFT) under the Ministry of Commerce and Industry, Government of India, mandatory for all import and export of goods from India.</p>
                    <p>The IEC serves as the primary identification for any importer or exporter at all Indian customs points. Every Bill of Entry (imports) and Shipping Bill (exports) requires the IEC number. Banks processing foreign currency transactions for trade require the IEC for remittance purposes. Since GST, the IEC number is identical to the firm's PAN - however, DGFT still requires a separate online application through dgft.gov.in using Form ANF 2A, with verification and separate issuance of the IEC certificate. The IEC has lifetime validity but must be updated annually on the DGFT portal during the April-June window to remain active.</p>
                    <p>For Delhi's trade ecosystem - where an Okhla garment exporter ships to Europe via IGI Airport, a Nehru Place electronics trader imports from China through ICD Tughlakabad, a Chandni Chowk jeweller exports to the Middle East, and a Connaught Place IT company exports software services globally - the IEC is the foundational trade licence. Delhi businesses have the unique advantage of proximity to DGFT Headquarters at Udyog Bhawan and the DGFT Delhi Zonal Office (CLA), enabling faster resolution of IEC-related issues.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IEC Registration in Delhi:</strong></p>
                    <p><strong>IEC:</strong> Import Export Code - 10-digit identification number (equals PAN since GST) issued by DGFT for all import-export businesses.</p>
                    <p><strong>DGFT:</strong> Directorate General of Foreign Trade - the apex authority under Ministry of Commerce issuing IEC and administering Foreign Trade Policy.</p>
                    <p><strong>Form ANF 2A:</strong> The application form for IEC registration filed on the DGFT portal (dgft.gov.in).</p>
                    <p><strong>AD Code:</strong> Authorised Dealer Code - bank account code that must be registered at customs ports for processing import-export consignments.</p>
                    <p><strong>LUT:</strong> Letter of Undertaking - filed under GST for zero-rated exports without paying IGST at the time of export.</p>
                    <p><strong>RCMC:</strong> Registration-cum-Membership Certificate from Export Promotion Councils for availing Foreign Trade Policy benefits.</p>
                    <p><strong>FTP 2023:</strong> Foreign Trade Policy 2023 - the current policy governing export promotion schemes and trade regulations.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IEC Registration in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FT(D&R) Act 1992</span>
                        <strong>IEC Code Issued</strong>
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
            <h2 class="section-title">Who Needs IEC Registration in Delhi?</h2>
            <div class="content-text">
                
                <p><strong>Goods Importers:</strong> Delhi businesses importing products through any customs port - IGI Airport cargo terminal, ICD Tughlakabad, Nhava Sheva or any other port - must have IEC before the first consignment arrives. Without IEC, customs will not process the Bill of Entry. Delhi's electronics importers in Nehru Place, auto parts traders in Kashmere Gate and Karol Bagh, and raw material importers in Okhla Industrial Area all need IEC registration.</p>
                <p><strong>Goods Exporters:</strong> Delhi businesses shipping products to international markets need IEC for customs clearance of every Shipping Bill. This covers garment exporters in Gandhi Nagar and Okhla, handicraft exporters from Janpath and Dilli Haat, spice exporters from Khari Baoli, gems and jewellery exporters from Chandni Chowk, and manufacturers in Narela exporting globally.</p>
                <p><strong>Service Exporters:</strong> IT/ITES companies in Connaught Place and Okhla, consultancy firms, design studios and freelancers providing services to foreign clients need IEC when availing Foreign Trade Policy benefits. Many Delhi banks also require IEC for trade-related foreign exchange transactions.</p>
                <p><strong>E-Commerce Cross-Border Sellers:</strong> Delhi businesses selling cross-border through Amazon Global Selling, eBay Global Shipping or direct-to-consumer international channels require IEC for customs processing. For company formation, explore <a href="/private-limited-company-registration">Private Limited Company Registration</a>.</p>
                <p><strong>Exempted Entities:</strong> Central/State Government ministries, persons importing/exporting for personal use (not trade), and certain notified categories are exempt. All other Delhi businesses engaged in import or export must obtain IEC.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in IEC Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>DGFT Portal Application (ANF 2A)</td><td>Complete online filing on dgft.gov.in - registration, Form ANF 2A preparation with business details, PAN verification, bank account details, address proof upload and Rs 500 government fee payment.</td></tr>
                        <tr><td>Document Preparation</td><td>PAN card, Aadhaar, Delhi business address proof, cancelled cheque or bank certificate, constitution documents, passport photograph and DSC for companies/LLPs.</td></tr>
                        <tr><td>IEC Certificate Download</td><td>Upon DGFT approval, IEC certificate with QR code downloaded, verified (IEC number = PAN) and archived for the Delhi business.</td></tr>
                        <tr><td>AD Code Registration at Customs</td><td>Bank's AD Code registered at IGI Airport customs (air cargo), ICD Tughlakabad (containerised cargo) or any other port where Delhi business processes consignments.</td></tr>
                        <tr><td>LUT Filing Under GST</td><td>Letter of Undertaking filed on GST portal for Delhi exporters making zero-rated supplies without paying IGST. Filed annually. Also see <a href="/gst-registration/delhi">GST Registration in Delhi</a>.</td></tr>
                        <tr><td>RCMC from Export Promotion Council</td><td>Registration-cum-Membership Certificate from relevant Export Promotion Council (FIEO, AEPC, EPCH, CAPEXIL) for FTP scheme benefits.</td></tr>
                        <tr><td>Mandatory Annual IEC Update</td><td>IEC updated annually on DGFT portal during April-June window to keep it active. Failure causes automatic deactivation. Patron tracks and files proactively.</td></tr>
                        <tr><td>Post-IEC Compliance Bundle</td><td>GST return filing with IGST refund tracking, foreign currency reconciliation, customs duty accounting, income tax filing and transfer pricing advisory for Delhi importers/exporters.</td></tr>

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
            <h2 class="section-title">How IEC Registration Works in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end IEC registration for Delhi importers and exporters - from DGFT portal application through IEC certificate issuance to AD Code, LUT and full trade compliance setup. IEC is filed 100% online through dgft.gov.in. Patron's Delhi office in Rohini handles all filings.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify Eligibility and Gather Documents</h3><p class="step-description">Patron's Delhi CA team confirms your business's eligibility for IEC. Documents gathered: PAN card, Aadhaar of proprietor/partners/directors, Delhi business address proof, cancelled cheque or bank certificate, constitution documents and passport-size photograph of the authorised signatory.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN + bank verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents compiled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M54 35l4 4 8-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Eligibility OK</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Register on DGFT Portal and Prepare Application</h3><p class="step-description">Patron registers the firm on dgft.gov.in by creating a user account with PAN, email and mobile number. Form ANF 2A is filled with firm name, PAN (which becomes IEC number), nature of firm, Delhi office address, bank account details, branch details and authorised signatory information.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DGFT account created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ANF 2A prepared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Form Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Upload Documents and Pay Government Fee</h3><p class="step-description">All scanned documents uploaded to the DGFT portal. Government fee of Rs 500 paid online. Application digitally signed using DSC (companies/LLPs) or Aadhaar-based e-sign (proprietorships/partnerships). Patron ensures all documents meet portal specifications to avoid rejection.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 500 fee paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC/e-sign applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="30" y="35" width="40" height="6" rx="2" fill="#14365F" opacity="0.15"/><path d="M60 70L55 80L65 80Z" fill="#10B981"/><rect x="50" y="80" width="20" height="5" rx="2" fill="#10B981" opacity="0.5"/></svg></div><span class="illustration-label">App Submitted</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">DGFT Processing and IEC Issuance</h3><p class="step-description">DGFT processes the application online. For straightforward applications, IEC is issued within 2-3 working days. The IEC certificate with firm name, IEC number (same as PAN), address, date of issue and QR code is generated digitally on the portal. Patron downloads and provides the certificate.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2-3 day processing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M54 30l4 4 8-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><rect x="35" y="50" width="50" height="8" rx="2" fill="#F5A623" opacity="0.3"/><path d="M55 75L60 68L65 75Z" fill="#F5A623"/><rect x="50" y="75" width="20" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg></div><span class="illustration-label">IEC Issued</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Complete Post-IEC Setup - AD Code, LUT and RCMC</h3><p class="step-description">AD Code of the firm's bank registered at relevant customs port (IGI Airport for air cargo, ICD Tughlakabad for containerised cargo). LUT filed on GST portal for zero-rated exports. RCMC application submitted to relevant Export Promotion Council. Annual IEC update schedule configured for April-June window.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AD Code registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT + RCMC filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="45" height="35" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><line x1="25" y1="22" x2="50" y2="22" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><rect x="60" y="25" width="45" height="35" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><line x1="70" y1="37" x2="95" y2="37" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><rect x="35" y="55" width="50" height="30" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M55 67l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Trade Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Configure Ongoing Trade and Tax Compliance</h3><p class="step-description">Patron sets up integrated compliance: GST return filing with IGST treatment, foreign currency bank reconciliation, customs duty accounting, IGST refund claim tracking for exporters, income tax filing and annual IEC update filed proactively every April.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST export compliance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual update tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="35" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="75" cy="35" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><path d="M53 35h14" stroke="#14365F" stroke-width="1.5" stroke-dasharray="3 2"/><rect x="30" y="72" width="60" height="15" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><path d="M55 79l3 3 6-6" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliance Active</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for IEC Registration in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>PAN Card of Firm:</strong> PAN of the business entity. This PAN becomes the IEC number. Firm must have an active PAN before applying.</li>
                    <li><strong>Aadhaar of Proprietor/Partners/Directors:</strong> Aadhaar card for identity verification and e-signing the application.</li>
                    <li><strong>Business Address Proof (Delhi):</strong> For owned premises: sale deed/property tax receipt/electricity bill. For rented: notarised rent agreement plus landlord's utility bill. Plus NOC from premises owner if rented.</li>
                    <li><strong>Bank Account Details:</strong> Cancelled cheque or bank certificate showing account number, IFSC code, bank name and branch. Account must be in the firm's name.</li>
                    <li><strong>Constitution Documents:</strong> Partnership deed (partnerships), MOA/AOA and COI (companies), LLP agreement and COI (LLPs), trust deed (trusts), HUF declaration.</li>
                    <li><strong>Passport-Size Photograph:</strong> Recent photograph of the authorised signatory.</li>
                    <li><strong>Digital Signature Certificate:</strong> Class 2 or Class 3 DSC for companies and LLPs. Proprietorships and partnerships can use Aadhaar-based e-sign.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Delhi-specific tip:</strong> Delhi exporters planning to ship via IGI Airport should prepare AD Code registration documents (bank authorisation letter + IEC certificate) simultaneously with the IEC application. This saves time - many Delhi exporters lose 1-2 weeks post-IEC waiting for AD Code registration before the first shipment can be processed at customs.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in IEC Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Annual IEC Update Non-Filing</td><td>IEC automatically deactivated; all import-export transactions blocked until reactivation</td><td>Patron proactively files the annual update during April-June for all Delhi IEC clients</td></tr>
                        <tr><td>IEC-PAN Mismatch Post-GST</td><td>Problems during customs clearance and bank foreign exchange processing</td><td>Patron rectifies IEC-PAN mismatches through the DGFT modification process</td></tr>
                        <tr><td>AD Code Registration Delays</td><td>First shipment blocked at IGI Airport/ICD Tughlakabad until AD Code registered at customs</td><td>Patron processes AD Code registration alongside IEC to avoid bottleneck</td></tr>
                        <tr><td>Incorrect Bank Account Details</td><td>DGFT portal rejects application if account name doesn't match firm name on PAN</td><td>Patron verifies bank account details before filing to ensure name match</td></tr>

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
            <h2 class="section-title">IEC Registration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>IEC Registration (Fresh)</td><td class="table-amount">Govt: Rs 500 | Patron: Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>IEC + GST Bundle</td><td class="table-amount">Govt: Rs 500 | Patron: Rs 2,999 - Rs 4,999</td></tr>
                        <tr><td>IEC + AD Code + LUT Bundle</td><td class="table-amount">Govt: Rs 500 | Patron: Rs 4,999</td></tr>
                        <tr><td>IEC Annual Update</td><td class="table-amount">Govt: NIL | Patron: Rs 999</td></tr>
                        <tr><td>IEC Modification</td><td class="table-amount">Govt: NIL | Patron: Rs 999</td></tr>
                        <tr><td>IEC Reactivation (after deactivation)</td><td class="table-amount">Govt: NIL | Patron: Rs 1,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IEC Registration in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20IEC%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for IEC Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Compilation</td><td>1-2 days</td></tr>
                        <tr><td>DGFT Portal Registration</td><td>Same day - account creation with PAN, email, mobile OTP</td></tr>
                        <tr><td>Form ANF 2A Filing</td><td>Same day - application with document upload + Rs 500 payment</td></tr>
                        <tr><td>DGFT Processing</td><td>2-3 working days - verification and IEC certificate issuance</td></tr>
                        <tr><td>AD Code Registration</td><td>3-5 working days - bank AD Code at customs port</td></tr>
                        <tr><td>LUT Filing (exporters)</td><td>1-2 working days - on GST portal</td></tr>
                        <tr><td>Total (IEC Only)</td><td>2-3 working days</td></tr>
                        <tr><td>Total (IEC + AD Code + LUT)</td><td>5-7 working days - full export readiness</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi Processing Note:</strong> IEC registration is filed 100% online through dgft.gov.in. No visit to DGFT Headquarters at Udyog Bhawan or the DGFT Delhi Zonal Office is required. Delhi businesses benefit from DGFT HQ proximity for scheme applications and dispute resolution. DGFT EDI Helpdesk: 1800-572-1550 / 1800-111-550. Patron's Delhi office in Rohini handles all portal filings and post-IEC compliance.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for IEC Registration in Delhi</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Delhi Office at Rohini</h3><p>In-person consultations for importers, exporters, manufacturers and service exporters. Document verification, DGFT portal filing and customs coordination available on-site.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Complete Export-Import Readiness</h3><p>Not just IEC - Patron delivers the full trade compliance package: IEC + AD Code at IGI Airport/ICD Tughlakabad + LUT filing + RCMC application + GST export compliance.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Annual Update Tracking</h3><p>Patron proactively tracks and files the mandatory annual IEC update during the April-June window. No Delhi client faces IEC deactivation due to missed updates.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>Integrated Trade Compliance</h3><p>Same CA team handles IEC, GST return filing with IGST refund tracking, customs duty accounting, foreign currency reconciliation and income tax filing for Delhi importers and exporters.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves Delhi importers and exporters with both in-person and online IEC registration and trade compliance support. Our Delhi CA team at Rohini has helped hundreds of traders, manufacturers and service exporters secure their IEC through the DGFT portal.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC vs GST vs RCMC - Registration Comparison for Delhi Exporters</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>IEC Registration</th><th>GST Registration</th><th>RCMC</th></tr></thead>
                    <tbody>
                        <tr><td>Issuing Authority</td><td>DGFT, Ministry of Commerce</td><td>GST Portal (Central + State)</td><td>Export Promotion Councils (FIEO, AEPC, EPCH)</td></tr>
                        <tr><td>Purpose</td><td>Import/Export identity at customs</td><td>Tax collection, ITC, compliance</td><td>FTP scheme eligibility (EPCG, AA)</td></tr>
                        <tr><td>Mandatory For</td><td>All goods importers/exporters</td><td>Businesses above threshold / interstate</td><td>Exporters availing FTP benefits</td></tr>
                        <tr><td>Validity</td><td>Lifetime (annual update required)</td><td>No expiry (ongoing compliance)</td><td>5 years (renewable)</td></tr>
                        <tr><td>Fee</td><td>Rs 500</td><td>NIL</td><td>Rs 5,000-25,000 (varies by council)</td></tr>
                        <tr><td>Patron Bundle</td><td>Included in IEC package</td><td>Included in export bundle</td><td>Included in full export package</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Importers and Exporters</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/iec-registration">IEC Registration in India</a> - Parent service covering IEC registration across India</li>
                    <li><a href="/gst-registration">GST Registration</a> - Mandatory for Delhi businesses with import-export operations</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Incorporate a company for your Delhi export business</li>
                    <li><a href="/llp-incorporation">LLP Registration</a> - Form an LLP for your Delhi import-export business</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing with export income treatment for Delhi traders</li>
                    <li><a href="/ad-code-registration">AD Code Registration</a> - Bank AD Code registration at customs ports</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for IEC Registration</h2>
            <div class="content-text">
                
                <p><strong>Foreign Trade (Development and Regulation) Act, 1992:</strong> The primary legislation governing foreign trade. Section 7 mandates that no person shall import or export except under an IEC granted by DGFT. Violations attract penalties including IEC suspension and prosecution.</p>
                <p><strong>Foreign Trade Policy 2023 (FTP 2023):</strong> Current foreign trade policy effective 1 April 2023. Governs all export promotion schemes including Advance Authorisation, EPCG, RODTEP, SEIS. IEC is the prerequisite for availing any FTP benefit.</p>
                <p><strong>IEC = PAN Since GST:</strong> Post-GST, the IEC number is the same as the firm's PAN. However, DGFT requires a separate application and issues the IEC certificate independently. Both GST and IEC registration are separate requirements.</p>
                <p><strong>Annual IEC Update (Mandatory):</strong> Every IEC holder must update details on the DGFT portal annually during April-June. Non-updation causes automatic deactivation, blocking all import-export transactions until reactivation.</p>
                <p><strong>AD Code Registration:</strong> Bank's Authorised Dealer Code must be registered at each customs port. For Delhi: IGI Airport customs (air cargo), ICD Tughlakabad (containerised cargo). Without AD Code, consignments cannot be processed.</p>
                <p><strong>Letter of Undertaking (LUT) - GST:</strong> Exporters filing LUT under GST Rule 96A can make zero-rated exports without paying IGST. Filed annually on the GST portal (<a href="https://www.dgft.gov.in/" target="_blank" rel="noopener">dgft.gov.in</a>).</p>
                <p><strong>RCMC:</strong> Registration-cum-Membership Certificate from Export Promotion Councils required for availing FTP scheme benefits. Delhi exporters should obtain RCMC from the relevant council.</p>
                <p><strong>Customs Compliance:</strong> All imported goods declared in Bill of Entry and exported goods in Shipping Bill. IEC mandatory in both. Delhi businesses using IGI Airport or ICD Tughlakabad must comply with customs procedures.</p>

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
                    <h2 class="faq-expanded__title">FAQs - IEC Registration in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about Import Export Code for Delhi businesses answered by our CA team</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IEC Registration in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who issues IEC in Delhi?</h3>
                        <div class="faq-expanded__a"><p>The Directorate General of Foreign Trade (DGFT), Ministry of Commerce and Industry issues IEC. DGFT Headquarters is at Udyog Bhawan, New Delhi. The DGFT Delhi Zonal Office (CLA) serves as Northern Zone HQ. IEC is applied online through dgft.gov.in. EDI Helpdesk: 1800-572-1550. Patron handles all DGFT portal filings from our Delhi office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is IEC the same as PAN?</h3>
                        <div class="faq-expanded__a"><p>Yes, since GST, the IEC number equals the firm's PAN. However, DGFT still requires a separate online application through the portal using Form ANF 2A and issues the IEC certificate independently. Having PAN alone does not mean you have IEC - the DGFT application must be filed and certificate obtained.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does IEC registration cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Government fee is Rs 500, paid online on the DGFT portal. Patron's professional fee starts from INR 1,499 covering document preparation, DGFT portal filing, IEC certificate download and verification. The IEC + AD Code + LUT export readiness bundle costs Rs 4,999. Annual update costs Rs 999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does IEC registration take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>IEC registration through the DGFT portal takes 2-3 working days for straightforward applications. Document compilation takes 1-2 days. The complete export readiness package (IEC + AD Code + LUT) takes 5-7 working days. Patron's accurate documentation ensures first-time approval.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is annual IEC update mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every IEC holder must update details on the DGFT portal annually during the April-June window. Failure causes automatic deactivation, blocking all import and export transactions. Reactivation requires filing the update and waiting for DGFT processing. Patron files proactively for all Delhi clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can individuals get IEC in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Individuals cannot get IEC in personal capacity for trade. However, a proprietorship firm can obtain IEC. The firm must have PAN, a bank account in the firm's name and a valid Delhi business address. Other eligible entities include partnerships, LLPs, companies, trusts, HUFs and societies.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>IEC kya hai?</strong> IEC (Import Export Code) ek 10-digit number hai jo DGFT issue karta hai. India se goods import ya export karne ke liye mandatory hai. Delhi mein dgft.gov.in pe online apply hota hai. Govt fee Rs 500. 2-3 din mein milta hai. PAN hi IEC number ban gaya hai GST ke baad.</p>
                <p><strong>Kya IEC ka annual update zaroori hai?</strong> Haan, har saal April-June mein DGFT portal pe IEC update karna mandatory hai. Nahi karoge to IEC automatically deactivate ho jayega aur koi bhi import-export nahi kar paoge.</p>
                <p><strong>AD Code kya hota hai?</strong> AD Code aapke bank account ka code hai jo customs port pe register karna padta hai. IEC milne ke baad AD Code IGI Airport ya ICD Tughlakabad ke customs mein register karo - bina AD Code ke consignment process nahi hoga.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Lose Trade Opportunities - Get Your Delhi IEC Now</h2>
            <div class="content-text">
                
                <p>Every day a Delhi import-export business operates without IEC is a day of lost trade opportunity. Goods arriving at IGI Airport or ICD Tughlakabad without IEC cannot clear customs - demurrage charges accumulate daily (Rs 5,000-50,000+ per day). Exporters without IEC cannot file Shipping Bills, losing delivery commitments. FTP benefits worth lakhs are inaccessible without IEC.</p>
                <p>The mandatory annual IEC update window (April-June) is time-critical - missing it causes automatic deactivation, halting all trade until reactivation. <strong>Register now to secure your IEC and unlock Delhi's international trade ecosystem.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get IEC Registration in Delhi - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">IEC registration in Delhi is the foundational trade licence for every importer and exporter - from a Chandni Chowk jeweller shipping to Dubai to an Okhla garment manufacturer exporting to Europe, a Nehru Place electronics trader importing from China or a Connaught Place IT company billing overseas clients.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Delhi office in Rohini provides end-to-end CA-assisted IEC registration - from DGFT portal application and IEC certificate issuance through AD Code registration, LUT filing and RCMC application to the complete post-IEC compliance bundle of annual update tracking, GST export compliance and integrated trade accounting.</p>
                <p style="color:rgba(255,255,255,0.9);">For Delhi businesses seeking IEC registration - whether first-time applicants, businesses needing reactivation or exporters requiring the full trade readiness package - Patron offers a free consultation to assess your trade compliance needs and provide a transparent timeline and fee quote.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20IEC%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IEC%20Registration%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20IEC%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IEC Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides IEC registration services for importers and exporters in major cities across India. Select your city below.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/iec-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/iec-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/iec-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/iec-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/iec-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="/iec-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="/iec-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end trade and business compliance in Delhi</div>
                <div class="pa-cross-grid">
                    <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/llp-incorporation/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/pan-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on IEC Registration in Delhi is reviewed quarterly by our CA & CS team. Content accuracy is verified against the latest Foreign Trade Policy updates, DGFT portal changes and customs notification amendments. Freshness Tier 2.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
