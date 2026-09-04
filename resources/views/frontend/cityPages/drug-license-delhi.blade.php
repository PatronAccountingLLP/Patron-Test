
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Drug License in Delhi - Retail, Wholesale & CDSCO Process</title>
    <meta name="description" content="CA-assisted drug license in Delhi. Retail, wholesale and manufacturing pharmacy licence via Drugs Control Department. Serving all 4 Delhi zones. Call +91 945 945 6700.">
    <link rel="canonical" href="#">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Drug License in Delhi - Retail, Wholesale & CDSCO Process">
    <meta property="og:description" content="CA-assisted drug license in Delhi. Retail, wholesale and manufacturing pharmacy licence via Drugs Control Department. Serving all 4 Delhi zones. Call +91 945 945 6700.">
    <meta property="og:url" content="/drug-license/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Drug License in Delhi - Retail, Wholesale & CDSCO Process">
    <meta name="twitter:description" content="CA-assisted drug license in Delhi. Retail, wholesale and manufacturing pharmacy licence via Drugs Control Department. Serving all 4 Delhi zones. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Drug License in Delhi",
      "description": "CA-assisted drug license in Delhi. Retail, wholesale and manufacturing pharmacy licence via Drugs Control Department. Serving all 4 Delhi zones. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/drug-license/delhi",
      "serviceType": "Drug License in Delhi",
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
        "url": "https://www.patronaccounting.com/drug-license/delhi",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "1500",
          "maxPrice": "7499",
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
          "name": "Drug License in India: Types, Process, Fees and Forms",
          "item": "https://www.patronaccounting.com/drug-license"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Drug License in Delhi",
          "item": "https://www.patronaccounting.com/drug-license/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which department issues drug license in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Drugs Control Department, GNCTD, headquartered at F-17, Karkardooma, Delhi-110032, issues all drug licences. Delhi is divided into 2 Divisions comprising 4 Zones, each headed by a Dy. Drugs Controller. Applications are filed online through drugs.delhi.gov.in. Patron handles all filings and zone-specific coordination."
          }
        },
        {
          "@type": "Question",
          "name": "Can I apply for drug license online in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All drug licence applications in Delhi are filed exclusively online through drugs.delhi.gov.in. Paper applications are not accepted. The applicant obtains user ID and password, uploads documents at 100 dpi in black and white, fills the form and e-sends it. Patron's Delhi team handles the entire online process."
          }
        },
        {
          "@type": "Question",
          "name": "How much does a drug license cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fees: retail/wholesale Rs 1,500-3,000, manufacturing Rs 6,000 plus Rs 1,500 inspection fee. Patron's professional fee starts from INR 7,499 covering document preparation, online filing, inspection coordination and licence receipt. Call +91 945 945 6700 for a precise quote."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to get a drug license in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Retail and wholesale drug licences take 30-60 days from application to approval. Manufacturing licences take up to 75 days. Premises preparation adds 5-10 days. Patron's accurate documentation and pre-inspection preparation help minimise processing delays."
          }
        },
        {
          "@type": "Question",
          "name": "What is the minimum area for a pharmacy in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The minimum premises area for a retail pharmacy in Delhi is 10 square metres. The premises must have adequate storage shelving, refrigerator for temperature-sensitive drugs, pharmacist dispensing counter, proper ventilation and pest control. For DDA residential plots, MPD 2021 compliance and MCD conversion charges are mandatory."
          }
        },
        {
          "@type": "Question",
          "name": "How to renew a drug license in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Drug licence renewal must be filed 90 days before the 5-year expiry through drugs.delhi.gov.in. Required documents include the system-generated renewal form and updated MCD conversion charge receipt for residential premises. Late filing causes licence lapse requiring a fresh application. Patron tracks renewal dates for all Delhi clients. Quick Answers Drug license kya hai? Drug license ek mandatory authorisation hai jo Drugs and Cosmetics Act, 1940 ke under pharmaceutical products ki sale ya manufacturing ke liye zaroori hai. Delhi mein Drugs Control Department, Karkardooma se issue hota hai. Online apply karna padta hai drugs.delhi.gov.in pe. 5 saal ke liye valid. Chemist shop kholne ke liye kya chahiye? Delhi mein chemist shop ke liye Form 20 + Form 21 retail drug license chahiye, registered pharmacist Delhi Pharmacy Council registered, minimum 10 sq. metre area, MPD 2021 compliance aur GST registration. Cost INR 7,499 se shuru. Bhagirath Palace mein wholesale license kaise milega? Wholesale drug license ke liye Form 20B + Form 21B chahiye. Drugs Control Department portal pe online apply karo. Competent person with pharmacy degree zaroor chahiye. Inspection hoga. 30-60 din mein license milta hai."
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
                        Drug License in Delhi: CA-Assisted Pharmacy Licence for Retail, Wholesale and Manufacturing
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Application form, site plan, premises proof, constitution of firm, photo ID, pharmacist qualification, Delhi Pharmacy Council registration, non-conviction affidavit</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Govt fee varies by licence type (Rs 1,500-7,500) | Patron professional fee from INR 7,499</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Registered pharmacist (retail), graduate with 1 year pharma experience (wholesale), approved industrial premises (manufacturing)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Retail/Wholesale: 30-60 days | Manufacturing: up to 75 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Trusted by Delhi pharmacies across all 4 zones</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Drug License in Delhi',
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
    'ctaText'    => 'Get expert CA-assisted drug license in Delhi with end-to-end support from premises advisory to licence renewal.',
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
            <a href="#what-section" class="toc-btn">What Is Drug License</a>
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
            <h2 class="section-title">Drug License in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Drug License in Delhi Services at a Glance</strong></p>
                    <p>A drug license in Delhi is a mandatory authorisation under the Drugs and Cosmetics Act, 1940 for any business involved in the sale, distribution or manufacture of pharmaceutical products and cosmetics. The Drugs Control Department, Government of NCT of Delhi, headquartered at F-17, Karkardooma, Delhi-110032, issues all drug licenses. Delhi is divided into 2 Divisions (North-West and South-East) comprising 4 Zones, each headed by a Deputy Drugs Controller. Applications are filed online through drugs.delhi.gov.in. Key licence types include Form 20 (retail allopathic), Form 21 (retail Schedule C/C1), Form 20B (wholesale), Form 21B (wholesale Schedule C/C1) and manufacturing licences. Retail premises must have minimum 10 sq. metres area and employ a registered pharmacist with Delhi Pharmacy Council registration. Licences are valid for 5 years.</p>
                </div>
                <p>Delhi's pharmaceutical market is among India's largest - from the iconic wholesale drug market at Bhagirath Palace in Chandni Chowk (one of Asia's largest pharmaceutical wholesale hubs) to thousands of retail pharmacies across Connaught Place, Karol Bagh, Rohini, Dwarka and every residential colony, manufacturing units in Narela and Bawana industrial areas, and hospital pharmacies attached to AIIMS, Safdarjung, RML and other major Delhi hospitals. Every entity in this supply chain requires a valid drug license issued by the Drugs Control Department, GNCTD. Learn more about <a href="#">Drug License services across India</a>.</p>
                <p>The Drugs Control Department of Delhi, headquartered at F-17, Karkardooma, Delhi-110032, functions as an independent department. The Drugs Controller heads the department. For enforcement, Delhi is divided into two Divisions - North-West Zones and South-East Zones - each comprising two Zones headed by a Deputy Drugs Controller. All applications are filed online through drugs.delhi.gov.in - paper applications are not accepted. Pharmaceutical businesses also need <a href="/gst-registration">GST Registration</a> for tax compliance.</p>
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
                <h2 class="section-title">What Is a Drug License?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A drug license is a mandatory authorisation granted by the state Drugs Control Authority under the Drugs and Cosmetics Act, 1940 to any person or entity engaged in the sale, distribution, stocking or manufacture of drugs, pharmaceuticals or cosmetics.</p>
                    <p>In Delhi, the Drugs Control Department issues multiple licence types based on the nature of the business. For retail sale of allopathic drugs (excluding Schedule C, C1 and X drugs), Form 20 licence is required - this is the standard licence for a chemist shop or pharmacy. Form 21 permits retail sale of Schedule C and C1 drugs (vaccines, sera, biological products). Form 20B is for wholesale distribution of drugs other than Schedule C/C1/X, while Form 21B covers wholesale of Schedule C/C1 drugs. Form 20G permits wholesale of Schedule X drugs (psychotropic substances). Manufacturing licences are separate and require premises in approved Delhi industrial areas.</p>
                    <p>For Delhi's pharmaceutical ecosystem - where a Bhagirath Palace wholesaler supplies thousands of retail chemists across NCR, a Narela manufacturer produces for national distribution, and a neighbourhood pharmacy in Rohini serves local patients - the correct licence type and zone-specific filing are critical. The Drugs Control Department actively inspects premises, collects drug samples for testing and initiates prosecution for violations. Operating without a valid drug license in Delhi attracts penalties up to Rs 5 lakh and imprisonment under the D&C Act.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Drug License in Delhi:</strong></p>
                    <p><strong>Form 20:</strong> Retail drug licence for sale of allopathic drugs excluding Schedule C, C1 and X drugs. Standard licence for chemist shops.</p>
                    <p><strong>Form 21:</strong> Retail licence for sale of Schedule C and C1 drugs (vaccines, sera, biological products).</p>
                    <p><strong>Form 20B/21B:</strong> Wholesale drug licences for distribution of allopathic drugs and Schedule C/C1 drugs respectively.</p>
                    <p><strong>D&C Act 1940:</strong> Drugs and Cosmetics Act, 1940 - the primary legislation governing drug licensing in India.</p>
                    <p><strong>Drugs Controller:</strong> Head of the Drugs Control Department, GNCTD - the apex licensing authority for Delhi.</p>
                    <p><strong>Designated Officer:</strong> Deputy Drugs Controller heading each of Delhi's 4 zones for licence processing.</p>
                    <p><strong>MPD 2021:</strong> Master Plan for Delhi 2021 - compliance required for pharmacies on DDA residential plots.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Drug License in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>D&C Act 1940</span>
                        <strong>Drug Licence Approved</strong>
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
            <h2 class="section-title">Who Needs a Drug License in Delhi?</h2>
            <div class="content-text">
                
                <p><strong>Retail Pharmacy and Chemist Shops:</strong> Retail pharmacy and chemist shop owners across Delhi - from standalone pharmacies in Connaught Place and Karol Bagh to chain pharmacy outlets in Rohini, Dwarka and South Delhi - need Form 20 and Form 21 retail drug licences. Every retail pharmacy must employ a registered pharmacist with Delhi Pharmacy Council registration. The premises must have a minimum area of 10 square metres with adequate storage, refrigeration for temperature-sensitive drugs and proper shelving.</p>
                <p><strong>Pharmaceutical Wholesalers:</strong> Pharmaceutical wholesalers and distributors in Delhi's wholesale drug markets - particularly the massive Bhagirath Palace market in Chandni Chowk, wholesale hubs in Okhla Industrial Area and distribution centres across Delhi NCR - require Form 20B and Form 21B wholesale licences. Wholesale operations require a competent person with a graduate degree in pharmacy or a registered pharmacist.</p>
                <p><strong>Drug Manufacturers:</strong> Drug manufacturers with production facilities in Delhi's industrial areas - Narela Industrial Estate, Bawana, Okhla Industrial Area and other approved industrial zones - need manufacturing licences. These require compliance with Good Manufacturing Practices (GMP), qualified technical staff and NOC from the Delhi Pollution Control Committee.</p>
                <p><strong>Hospital Pharmacies:</strong> Hospital pharmacies attached to Delhi's major hospitals - AIIMS, Safdarjung, RML, GTB, LNJP and private hospitals - require drug licences for their dispensary operations. E-pharmacy businesses operating from Delhi also need appropriate drug licences.</p>
                <p><strong>Specialised Drug Businesses:</strong> Businesses dealing in homeopathic medicines, ayurvedic/unani drugs and Schedule X drugs (psychotropic substances) require specialised licence types. Patron's Delhi team advises on the correct combination of licences. For company formation, explore <a href="/private-limited-company-registration">Private Limited Company Registration</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in Drug License Assistance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Licence Type Determination</td><td>Assessment of your Delhi pharmaceutical business to determine the exact combination of licences needed - Form 20, 21, 20B, 21B, 20G or manufacturing licence based on drug categories and business model.</td></tr>
                        <tr><td>Premises Compliance Advisory</td><td>Review of Delhi premises for D&C Rules compliance: minimum 10 sq. metres for retail, refrigeration, storage, ventilation, and for DDA residential plots - MPD 2021 compliance verification and MCD conversion charge assistance.</td></tr>
                        <tr><td>Delhi Pharmacy Council Coordination</td><td>Verification of pharmacist registration with Delhi Pharmacy Council, appointment letter preparation and bio-data compilation as required by the Drugs Control Department.</td></tr>
                        <tr><td>Online Application Filing</td><td>Complete filing on the Drugs Control Department portal (drugs.delhi.gov.in) including user ID setup, document scanning at 100 dpi B&W, upload, e-sending to the correct Licensing Authority zone and government fee payment.</td></tr>
                        <tr><td>Inspection Preparation</td><td>Pre-inspection premises audit ensuring all original documents are available, storage conditions meet requirements, pharmacist is present and infrastructure meets D&C Rules standards.</td></tr>
                        <tr><td>Licence Receipt and Verification</td><td>Download of licence with e-signature and official seal from the portal within 3 days of approval SMS. Verification of licence details and archival.</td></tr>
                        <tr><td>Post-Licence Compliance</td><td><a href="/gst-registration/delhi">GST registration</a> (mandatory for pharma), accounting setup for drug purchase/sale registers, licence renewal filing (90 days before 5-year expiry) and ongoing monitoring.</td></tr>

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
            <h2 class="section-title">How Drug License Works in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end drug licence process for Delhi pharmaceutical businesses - from premises compliance and pharmacist registration through online application on drugs.delhi.gov.in to Drug Inspector inspection and licence grant. Patron's Delhi office in Rohini handles all filings across all 4 Delhi zones.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Licence Type and Prepare Premises</h3><p class="step-description">Patron's Delhi CA team assesses your pharmaceutical business to determine required licence types. For a standard Delhi chemist shop: Form 20 + Form 21. For wholesale in Bhagirath Palace: Form 20B + Form 21B. For manufacturing in Narela: manufacturing licence. Simultaneously, premises must meet D&C Rules requirements. For DDA residential plots, MPD 2021 compliance must be verified and MCD conversion charges paid.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Correct forms identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MPD 2021 checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="25" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="65" y="25" width="25" height="25" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><line x1="30" y1="65" x2="90" y2="65" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Type Selected</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Secure Pharmacist and Delhi Pharmacy Council Registration</h3><p class="step-description">Every retail drug licence requires a registered pharmacist with Delhi Pharmacy Council registration. Patron verifies the pharmacist's qualification (B.Pharm/D.Pharm with mark sheets), Delhi Pharmacy Council registration certificate, and prepares appointment letter and bio-data. For wholesale, a competent person with pharmacy graduate degree and 1 year experience is needed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pharmacist verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Council registration confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="35" r="20" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><path d="M48 50c0-8 5-12 12-12s12 4 12 12" stroke="#14365F" stroke-width="1.5" fill="none"/><rect x="35" y="60" width="50" height="25" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><path d="M55 72l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Pharmacist Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compile Documents and Obtain Portal User ID</h3><p class="step-description">All documents compiled: system-generated application form, site plan and key plan, constitution of firm, photo ID, pharmacist documents, non-conviction affidavit, MPD 2021 affidavit, MCD receipt and premises proof. User ID and password obtained from drugs.delhi.gov.in. All documents scanned at 100 dpi in black and white for upload.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>100 dpi scans ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal access secured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="70" y="55" width="30" height="15" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">Docs Compiled</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Online Application and Pay Government Fees</h3><p class="step-description">Application filed on drugs.delhi.gov.in. Documents uploaded, information filled for the applicable licence type, and application e-sent to the Licensing Authority of the concerned Delhi zone. Government fees paid through the Delhi e-payment portal. For manufacturing: Rs 6,000 plus Rs 1,500 inspection fee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zone-specific filing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fees paid online</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="30" y="35" width="40" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="30" y="48" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><circle cx="90" cy="80" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><text x="90" y="84" font-size="10" fill="#10B981" text-anchor="middle" font-family="Arial">Rs</text></svg></div><span class="illustration-label">App Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Premises Inspection by Drug Inspector</h3><p class="step-description">Drug Inspector from the concerned Delhi zone visits premises. For retail: verifies area, storage, refrigeration, pharmacist presence and drug stock registers. For wholesale: warehousing conditions, temperature logs and stock management. For manufacturing: GMP compliance, equipment, testing facilities, DPCC NOC and fire NOC. Patron prepares premises and accompanies applicant.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pre-inspection audit</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inspector coordination</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 40l6 6 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><rect x="20" y="75" width="80" height="6" rx="3" fill="#F5A623" opacity="0.3"/></svg></div><span class="illustration-label">Inspection Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive Drug License and Set Up Compliance</h3><p class="step-description">After satisfactory inspection, Drugs Controller/Dy. Drugs Controller grants the licence. SMS notification sent. Licence with e-signature available for download within 3 days. Patron sets up GST registration, accounting for drug purchase/sale registers, stock maintenance protocols and licence renewal tracking (90 days before 5-year expiry).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Licence downloaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance systems active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M54 30l4 4 8-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><rect x="35" y="50" width="50" height="8" rx="2" fill="#F5A623" opacity="0.3"/><rect x="30" y="70" width="25" height="18" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><rect x="65" y="70" width="25" height="18" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/></svg></div><span class="illustration-label">Licence Granted</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Drug License in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Application Form:</strong> System-generated Form 19 (retail), 19A (wholesale), 19B (manufacturing) or 19C (Schedule X) from the Drugs Control Department portal.</li>
                    <li><strong>Site Plan and Key Plan:</strong> Blueprint/ammonia print showing premises layout, storage areas, pharmacist station, refrigeration location.</li>
                    <li><strong>Constitution of Firm:</strong> MOA, AOA and Board Resolution (companies), Partnership Deed attested by Notary Public (partnerships), Trust Deed (trusts), or Proprietorship declaration.</li>
                    <li><strong>Photo ID:</strong> Government-issued photo identity proof of proprietor/partners/directors.</li>
                    <li><strong>Non-Conviction Affidavit:</strong> Affidavit declaring no conviction under the Drugs & Cosmetics Act, 1940.</li>
                    <li><strong>MPD 2021 Compliance Affidavit:</strong> Required if premises are on DDA residential flat/plot/building. Confirms compliance with Master Plan for Delhi 2021.</li>
                    <li><strong>MCD Conversion Charge Receipt:</strong> Receipt from MCD for premises on residential properties used commercially. Required before application filing.</li>
                    <li><strong>Pharmacist Qualification (Retail):</strong> Final degree certificate/provisional certificate with mark sheets, Delhi Pharmacy Council registration, appointment letter and bio-data.</li>
                    <li><strong>Competent Person Documents (Wholesale):</strong> Degree certificate, experience certificate (minimum 1 year in drug sales), appointment letter and bio-data.</li>
                    <li><strong>Premises Proof:</strong> Sale deed/GPA/conveyance deed/property tax receipt (owned) or rent receipt and notary-attested rent agreement (rented).</li>
                    <li><strong>For Manufacturing:</strong> List of equipment and machinery, list of formulations, DPCC NOC, Delhi Fire Services NOC (for alcohol/inflammable materials), list of technical staff.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Delhi-specific tip:</strong> All documents must be scanned at 100 dpi in black and white before upload. The portal rejects uploads not meeting this specification. Ensure MCD conversion charges are paid before application for premises on residential plots - this is a uniquely Delhi requirement under MPD 2021 that causes frequent application delays.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Drug License in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>MPD 2021 Premises Compliance</td><td>Pharmacies on DDA residential plots rejected without MCD conversion charge receipt</td><td>Patron advises on premises selection and MPD 2021 compliance before licence application</td></tr>
                        <tr><td>Delhi Pharmacy Council Delays</td><td>Newly qualified pharmacists face registration processing delays</td><td>Patron coordinates registration and provides alternative competent person arrangements</td></tr>
                        <tr><td>Online Portal Technical Issues</td><td>Document upload failures and payment errors on drugs.delhi.gov.in</td><td>Patron maintains pre-scanned documents and retries during optimal portal availability</td></tr>
                        <tr><td>Inspection Preparation Gaps</td><td>Drug Inspector identifies deficiencies in storage, temperature or pharmacist docs</td><td>Patron conducts pre-inspection premises audit and rectification advisory</td></tr>

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
            <h2 class="section-title">Drug License Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Retail Drug License (Form 20 + 21)</td><td class="table-amount">Govt: Rs 1,500 - Rs 3,000</td></tr>
                        <tr><td>Wholesale Drug License (Form 20B + 21B)</td><td class="table-amount">Govt: Rs 1,500 - Rs 3,000</td></tr>
                        <tr><td>Schedule X Wholesale (Form 20G)</td><td class="table-amount">Govt: Rs 1,500 - Rs 3,000</td></tr>
                        <tr><td>Manufacturing License</td><td class="table-amount">Govt: Rs 6,000 + Rs 1,500 inspection</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 7,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Licence Renewal (all types)</td><td class="table-amount">Govt: Same as fresh | Patron: Rs 4,999 onwards</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Drug License in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Drug License in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Premises Compliance & Setup</td><td>Retail/Wholesale: 5-10 days | Manufacturing: 15-30 days</td></tr>
                        <tr><td>Document Compilation</td><td>Retail/Wholesale: 3-5 days | Manufacturing: 7-10 days</td></tr>
                        <tr><td>Online Application Filing</td><td>1 day for all types</td></tr>
                        <tr><td>Drug Inspector Inspection</td><td>Retail/Wholesale: 15-30 days | Manufacturing: 30-45 days</td></tr>
                        <tr><td>Licence Grant</td><td>Retail/Wholesale: 30-60 days total | Manufacturing: Up to 75 days total</td></tr>
                        <tr><td>Post-Licence GST + Compliance</td><td>7 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi Processing Note:</strong> Drug licence applications are filed 100% online through drugs.delhi.gov.in. Paper applications are not accepted. The application is routed to the Licensing Authority of the concerned zone based on premises location. Patron's Delhi office in Rohini handles all online filings, document preparation and inspection coordination across all four Delhi zones.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Drug License in Delhi</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Delhi Office at Rohini</h3><p>In-person consultations for pharmacy entrepreneurs, wholesale businesses and manufacturers. Premises compliance assessment, inspection preparation and Drugs Control Department coordination on-site.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>MPD 2021 and Premises Advisory</h3><p>Patron advises on premises selection, MPD 2021 compliance verification, MCD conversion charge requirements and infrastructure setup before licence application - avoiding the most common Delhi rejection reason.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>All 4 Delhi Zones Coverage</h3><p>Whether your pharmacy is in North Delhi (Rohini), West Delhi (Dwarka), South Delhi (Saket/GK) or East Delhi (Karkardooma), Patron files with the correct zone Licensing Authority and coordinates with the Dy. Drugs Controller.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>Integrated Pharma Compliance</h3><p>Same CA team handles drug license, GST registration (mandatory for pharma), accounting for drug purchase/sale registers, TDS filing and income tax returns. Single compliance partner for your Delhi pharmacy.</p></article>
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
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves Delhi pharmaceutical businesses with both in-person and online drug licence support. Our Delhi CA team at Rohini has helped hundreds of pharmacies, wholesalers and manufacturers secure their drug licence from the Drugs Control Department.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Retail vs Wholesale vs Manufacturing Drug License in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Retail Drug License</th><th>Wholesale Drug License</th><th>Manufacturing License</th></tr></thead>
                    <tbody>
                        <tr><td>Forms Required</td><td>Form 20 + Form 21</td><td>Form 20B + Form 21B</td><td>Manufacturing application</td></tr>
                        <tr><td>Application Form</td><td>Form 19</td><td>Form 19A</td><td>Form 19B</td></tr>
                        <tr><td>Premises</td><td>Min 10 sq. m, retail setup</td><td>Warehouse with temp control</td><td>Approved industrial area only</td></tr>
                        <tr><td>Qualified Person</td><td>Registered pharmacist (Delhi Pharmacy Council)</td><td>Pharmacy graduate or competent person</td><td>Technical staff + pharmacist</td></tr>
                        <tr><td>Key Delhi Areas</td><td>All residential/commercial</td><td>Bhagirath Palace, Okhla</td><td>Narela, Bawana, Okhla</td></tr>
                        <tr><td>Govt Fee</td><td>Rs 1,500-3,000</td><td>Rs 1,500-3,000</td><td>Rs 6,000 + Rs 1,500 inspection</td></tr>
                        <tr><td>Grant Period</td><td>30-60 days</td><td>30-60 days</td><td>Up to 75 days</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Pharmaceutical Businesses</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="#">Drug License in India</a> - Parent service covering all drug licence types across India</li>
                    <li><a href="/gst-registration">GST Registration</a> - Mandatory for all pharmaceutical businesses in Delhi</li>
                    <li><a href="/shop-act-registration">Shop Act Registration</a> - Shop and establishment registration for Delhi pharmacies</li>
                    <li><a href="/fssai-registration">FSSAI Registration</a> - For pharmacies selling health supplements and nutraceuticals</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing for pharmaceutical business operators</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect your Delhi pharmacy brand name</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Drug License</h2>
            <div class="content-text">
                
                <p><strong>Drugs and Cosmetics Act, 1940:</strong> The primary legislation governing the import, manufacture, distribution and sale of drugs and cosmetics in India. Penalties for operating without licence include fines up to Rs 5 lakh and imprisonment.</p>
                <p><strong>Drugs and Cosmetics Rules, 1945:</strong> Prescribes forms, fees, conditions and procedures. Forms 19/19A/19B/19C for application; Forms 20/20B/21/21B/20G for licence issuance. Specifies premises requirements, qualified person requirements, storage conditions and record-keeping obligations.</p>
                <p><strong>Drugs (Prices Control) Order, 2013:</strong> Controls prices of essential medicines. Pharmacies must sell scheduled drugs at or below the ceiling price. Enforced by the Drugs Control Department in Delhi.</p>
                <p><strong>Drugs & Magic Remedies (Objectionable Advertisements) Act, 1954:</strong> Prohibits misleading drug advertisements. Enforced by the Drugs Control Department.</p>
                <p><strong>MPD 2021 - Master Plan for Delhi:</strong> Pharmacies on DDA residential plots must comply with MPD 2021 provisions for commercial activity. MCD conversion charges must be paid. Applicant must file compliance affidavit.</p>
                <p><strong>Delhi Pharmacy Council:</strong> State pharmacy council under the Pharmacy Act, 1948. Every pharmacist practising in Delhi must be registered. Without valid registration, drug licence application is incomplete.</p>
                <p><strong>Drugs Control Department, GNCTD:</strong> Headquartered at F-17, Karkardooma, Delhi-110032. 2 Divisions, 4 Zones. Online portal: <a href="https://drugs.delhi.gov.in/" target="_blank" rel="noopener">drugs.delhi.gov.in</a>.</p>
                <p><strong>Record Keeping:</strong> Every licence holder must maintain purchase/sale registers for minimum 3 years with batch numbers, manufacturing dates, expiry dates, supplier details and quantity. Drug Inspector may examine during routine inspections.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Drug License in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about drug licence for Delhi pharmaceutical businesses answered by our CA team</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Drug License in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which department issues drug license in Delhi?</h3>
                        <div class="faq-expanded__a"><p>The Drugs Control Department, GNCTD, headquartered at F-17, Karkardooma, Delhi-110032, issues all drug licences. Delhi is divided into 2 Divisions comprising 4 Zones, each headed by a Dy. Drugs Controller. Applications are filed online through drugs.delhi.gov.in. Patron handles all filings and zone-specific coordination.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I apply for drug license online in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. All drug licence applications in Delhi are filed exclusively online through drugs.delhi.gov.in. Paper applications are not accepted. The applicant obtains user ID and password, uploads documents at 100 dpi in black and white, fills the form and e-sends it. Patron's Delhi team handles the entire online process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does a drug license cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Government fees: retail/wholesale Rs 1,500-3,000, manufacturing Rs 6,000 plus Rs 1,500 inspection fee. Patron's professional fee starts from INR 7,499 covering document preparation, online filing, inspection coordination and licence receipt. Call +91 945 945 6700 for a precise quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does it take to get a drug license in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Retail and wholesale drug licences take 30-60 days from application to approval. Manufacturing licences take up to 75 days. Premises preparation adds 5-10 days. Patron's accurate documentation and pre-inspection preparation help minimise processing delays.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the minimum area for a pharmacy in Delhi?</h3>
                        <div class="faq-expanded__a"><p>The minimum premises area for a retail pharmacy in Delhi is 10 square metres. The premises must have adequate storage shelving, refrigerator for temperature-sensitive drugs, pharmacist dispensing counter, proper ventilation and pest control. For DDA residential plots, MPD 2021 compliance and MCD conversion charges are mandatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How to renew a drug license in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Drug licence renewal must be filed 90 days before the 5-year expiry through drugs.delhi.gov.in. Required documents include the system-generated renewal form and updated MCD conversion charge receipt for residential premises. Late filing causes licence lapse requiring a fresh application. Patron tracks renewal dates for all Delhi clients.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Drug license kya hai?</strong> Drug license ek mandatory authorisation hai jo Drugs and Cosmetics Act, 1940 ke under pharmaceutical products ki sale ya manufacturing ke liye zaroori hai. Delhi mein Drugs Control Department, Karkardooma se issue hota hai. Online apply karna padta hai drugs.delhi.gov.in pe. 5 saal ke liye valid.</p>
                <p><strong>Chemist shop kholne ke liye kya chahiye?</strong> Delhi mein chemist shop ke liye Form 20 + Form 21 retail drug license chahiye, registered pharmacist Delhi Pharmacy Council registered, minimum 10 sq. metre area, MPD 2021 compliance aur GST registration. Cost INR 7,499 se shuru.</p>
                <p><strong>Bhagirath Palace mein wholesale license kaise milega?</strong> Wholesale drug license ke liye Form 20B + Form 21B chahiye. Drugs Control Department portal pe online apply karo. Competent person with pharmacy degree zaroor chahiye. Inspection hoga. 30-60 din mein license milta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Risk Prosecution - Get Your Delhi Drug License Now</h2>
            <div class="content-text">
                
                <p>Every day a Delhi pharmaceutical business operates without a valid drug license is a day of exposure to prosecution under the Drugs & Cosmetics Act, 1940 - with penalties up to Rs 5 lakh and imprisonment. Delhi's Drugs Control Department actively inspects through Drug Inspectors across all four zones, sampling drugs and taking action against unlicensed operators.</p>
                <p>Drug licence renewal must be filed 90 days before the 5-year expiry - late renewal causes licence lapse requiring a fresh application with full inspection. For pharmacies on DDA residential premises, MPD 2021 non-compliance can result in both licence rejection and MCD enforcement. <strong>Apply now to secure your Delhi drug license and commence legally compliant pharmaceutical operations.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Drug License in Delhi - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">A drug license in Delhi is the foundational legal requirement for every pharmaceutical business - from a corner chemist shop in Rohini to the massive wholesale operations at Bhagirath Palace and manufacturing units in Narela Industrial Estate. The Drugs Control Department at F-17, Karkardooma, operating through its 4-zone structure, actively regulates Delhi's pharmaceutical market.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Delhi office in Rohini provides end-to-end drug licence assistance - from licence type determination and premises compliance advisory through online application filing on drugs.delhi.gov.in and Drug Inspector inspection preparation to post-licence compliance including GST registration, accounting setup and 5-year renewal tracking.</p>
                <p style="color:rgba(255,255,255,0.9);">For Delhi pharmaceutical entrepreneurs seeking a drug licence - whether a new pharmacy, wholesale business or manufacturing unit - Patron offers a free consultation to assess premises compliance, determine the correct licence type and provide a transparent timeline and fee quote.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Drug%20License%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Drug License Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides drug license services for pharmaceutical businesses in major cities across India. Select your city below.</p>
    
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end pharmaceutical compliance in Delhi</div>
                <div class="pa-cross-grid">
                    <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/shop-act-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Shop Act Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/fssai-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
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
            <p>This page on Drug License in Delhi is reviewed quarterly by our CA & CS team. Content accuracy is verified against the latest D&C Act amendments, Drugs Control Department circulars and MPD 2021 updates for Delhi. Freshness Tier 2.</p>
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
