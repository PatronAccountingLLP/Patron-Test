
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>PAN Card Registration in Delhi - Form 49A & Process</title>
    <meta name="description" content="CA-assisted PAN registration in Delhi. Individual and business PAN via Form 49A, instant ePAN. Serving Rohini, CP, Nehru Place businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/pan-registration/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PAN Card Registration in Delhi - Form 49A & Process">
    <meta property="og:description" content="CA-assisted PAN registration in Delhi. Individual and business PAN via Form 49A, instant ePAN. Serving Rohini, CP, Nehru Place businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/pan-registration/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PAN Card Registration in Delhi - Form 49A & Process">
    <meta name="twitter:description" content="CA-assisted PAN registration in Delhi. Individual and business PAN via Form 49A, instant ePAN. Serving Rohini, CP, Nehru Place businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "PAN Registration in Delhi",
      "description": "CA-assisted PAN registration in Delhi. Individual and business PAN via Form 49A, instant ePAN. Serving Rohini, CP, Nehru Place businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/pan-registration/delhi",
      "serviceType": "PAN Registration in Delhi",
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
        "url": "https://www.patronaccounting.com/pan-registration/delhi",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "107",
          "maxPrice": "499",
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
          "name": "PAN Registration: Process and Fee",
          "item": "https://www.patronaccounting.com/pan-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "PAN Registration in Delhi",
          "item": "https://www.patronaccounting.com/pan-registration/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to apply for PAN in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Delhi residents can apply online through Protean (NSDL) portal or UTIITSL portal using Form 49A, or get instant ePAN through the Income Tax e-filing portal (incometax.gov.in) using Aadhaar. Offline applications can be submitted at any of Delhi's 139+ PAN facilitation centres in Rohini, Dwarka, Laxmi Nagar, Uttam Nagar and other localities. Patron's Delhi office in Rohini handles all application modes with correct AO Code selection."
          }
        },
        {
          "@type": "Question",
          "name": "What is the fee for PAN card in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Instant ePAN via Aadhaar on the Income Tax portal is completely free. Regular PAN application through Protean or UTIITSL costs Rs 107 for delivery to an Indian address and Rs 989 to Rs 1,011 for a foreign address. Patron's professional fee for assisted PAN registration starts from Rs 499. Business PAN assistance costs Rs 999. These fees are standardised nationally - there are no Delhi-specific charges."
          }
        },
        {
          "@type": "Question",
          "name": "How long does PAN take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Instant ePAN via Aadhaar takes approximately 10 minutes. Regular online applications through Protean or UTIITSL take 10-15 working days for PAN allotment and physical card delivery to a Delhi address. Offline applications submitted at Delhi PAN centres take 15-20 working days. The ePAN (PDF) is emailed upon allotment regardless of physical card dispatch timeline."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get instant ePAN in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Any individual with a valid Aadhaar card linked to an active mobile number can get an instant ePAN through the Income Tax e-filing portal (incometax.gov.in) for free. The process takes about 10 minutes - Aadhaar OTP verification, PAN allotment and ePAN PDF generation. The ePAN is valid for all purposes identical to the physical PAN card. Patron assists Delhi residents who face Aadhaar OTP or e-KYC issues."
          }
        },
        {
          "@type": "Question",
          "name": "Is PAN-Aadhaar linkage mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Section 139AA of the Income Tax Act, every individual who has been allotted PAN and possesses Aadhaar must link them. Non-linkage makes the PAN inoperative - the individual cannot file ITR, receive refunds, open new bank accounts or complete financial transactions requiring PAN. A late linkage fee of Rs 1,000 applies. Patron assists Delhi residents with linkage and resolves name/DOB mismatches."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for business PAN in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For companies registered with RoC Delhi: Certificate of Incorporation (PAN is usually allotted during SPICe+ incorporation). For LLPs: Certificate of Incorporation and LLP Agreement. For partnership firms: Partnership Deed and Registrar of Firms certificate. For trusts: Trust Deed and Registration Certificate. For societies in Delhi: Registration Certificate from Registrar of Societies (East). Patron handles all business PAN applications. Quick Answers PAN card kya hai? PAN (Permanent Account Number) ek 10-digit alphanumeric number hai jo Income Tax Department issue karta hai. ITR file karne, bank account kholne, property registration aur GST registration ke liye mandatory hai. Delhi mein Aadhaar se instant ePAN free mein milta hai 10 minute mein. Delhi mein PAN kaise banaye? Sabse fast tarika: incometax.gov.in pe Aadhaar se instant ePAN apply karo - free hai, 10 minute mein milta hai. Regular PAN ke liye Protean ya UTIITSL portal pe Form 49A bharo, Rs 107 fee do, 10-15 din mein physical card aayega. PAN-Aadhaar link kaise kare? incometax.gov.in pe login karo, Quick Links mein Link Aadhaar select karo, PAN aur Aadhaar number daalo, OTP verify karo. Agar naam ya DOB mein mismatch hai to pehle correction karwao. Late linkage pe Rs 1,000 fee lagti hai."
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
                        PAN Registration in Delhi: CA-Assisted PAN Card for Individuals, Businesses and Companies
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Aadhaar, photo ID, address proof, DOB proof, photographs, DSC (for companies), incorporation certificate (for business PAN)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 107 (Indian address) | Instant ePAN via Aadhaar: FREE | Patron professional fee from Rs 499</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any individual, HUF, company, LLP, firm, trust, society, AOP - no minimum age or income requirement</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Instant ePAN: 10 minutes | Physical PAN: 10-15 working days</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'PAN Registration in Delhi',
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
    'ctaText'    => 'Get expert CA-assisted PAN registration and compliance for your Delhi business today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is PAN</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PAN Registration in Delhi Services at a Glance</strong></p>
                    <p>PAN (Permanent Account Number) is a 10-digit alphanumeric identifier issued by the Income Tax Department under Section 139A of the Income Tax Act, 1961. It is mandatory for filing income tax returns, opening bank accounts, property registration, GST registration and most financial transactions. PAN applications are processed by Protean eGov Technologies (NSDL) and UTIITSL through 139+ PAN facilitation centres across Delhi and online portals. Indian citizens use Form 49A; foreign citizens use Form 49AA. Fee is Rs 107 for Indian address. Instant ePAN via Aadhaar on incometax.gov.in is free and issued within minutes. PAN-Aadhaar linkage is mandatory under Section 139AA.</p>
                </div>
                <p>Delhi, as India's national capital and a major commercial hub, has one of the highest concentrations of PAN card holders in the country. Every salaried employee in Connaught Place and Nehru Place, every trader in Chandni Chowk and Karol Bagh, every startup founder in Okhla and Rohini, every property buyer across Delhi NCR, every company incorporated with RoC Delhi, and every professional operating in the city needs a PAN. With 139+ authorised PAN facilitation centres managed by Protean eGov Technologies and UTIITSL spread across Rohini, Dwarka, Laxmi Nagar, Uttam Nagar, Narela and Mayur Vihar, applying for PAN is highly accessible. Learn more about <a href="/pan-registration">PAN Registration across India</a>.</p>
                <p>PAN serves as the universal financial identifier in India. It is required for filing income tax returns (ITR), opening bank accounts, registering for GST (GSTIN starts with PAN), applying for IEC, property registration (mandatory for transactions above Rs 10 lakh), mutual fund investments, share trading and receiving payments above prescribed TDS thresholds. For Delhi businesses - whether a newly incorporated company registered at RoC Delhi (Nehru Place), an LLP, a partnership firm or a proprietorship - obtaining business PAN is one of the first post-incorporation steps. Patron Accounting's Delhi office in Rohini provides end-to-end PAN registration - from individual PAN applications and instant ePAN for salaried employees to business PAN for newly incorporated companies. Post-PAN, the same CA team handles <a href="/gst-registration/delhi">GST registration in Delhi</a>, <a href="/income-tax-return">ITR filing</a>, TDS compliance and all tax-related services from a single point of contact.</p>
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
                <h2 class="section-title">What Is PAN Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>PAN (Permanent Account Number) is a unique 10-digit alphanumeric identification number issued by the Income Tax Department under Section 139A of the Income Tax Act, 1961, to every taxpayer and entity in India.</p>
                    <p>The 10-character PAN follows a specific structure: the first three characters are alphabetical (randomly assigned), the fourth character indicates the entity type (P for individual, C for company, F for firm, H for HUF, T for trust, A for AOP, B for BOI, L for local authority, J for artificial juridical person, G for government), the fifth character is the first letter of the surname or entity name, the next four are sequential numbers, and the last is an alphabetical check digit. PAN is issued through two authorised managed service providers - Protean eGov Technologies Limited (formerly NSDL) and UTI Infrastructure Technology and Services Limited (UTIITSL).</p>
                    <p>For Delhi residents and businesses, PAN is the gateway to the entire financial and tax compliance ecosystem. Every GSTIN issued to a Delhi business contains the PAN (digits 3-12). Every ITR filed requires PAN. Every property registration at Sub-Registrar offices across Delhi requires PAN for transactions above Rs 10 lakh. Bank accounts, demat accounts, mutual fund folios and insurance policies above specified thresholds all require PAN. Having a single, accurate PAN linked to Aadhaar is not just a legal requirement under Section 139AA - it is the foundation of every financial transaction. Visit <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> for instant ePAN.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PAN Registration in Delhi:</strong></p>
                    <ul><li><strong>PAN:</strong> Permanent Account Number - 10-digit alphanumeric identifier issued under Section 139A</li><li><strong>Form 49A:</strong> Application form for Indian citizens and Indian entities</li><li><strong>Form 49AA:</strong> Application form for foreign citizens and foreign entities</li><li><strong>AO Code:</strong> Assessing Officer Code determining the Income Tax jurisdiction for Delhi taxpayers</li><li><strong>ePAN:</strong> Electronic PAN issued instantly via Aadhaar-based e-KYC on incometax.gov.in</li><li><strong>Section 139AA:</strong> IT Act provision mandating PAN-Aadhaar linkage for all individual PAN holders</li></ul>

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
                            <!-- PAN tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAN</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAN Registration in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Instant ePAN</span>
                        <strong>FREE via Aadhaar</strong>
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
            <h2 class="section-title">Who Needs PAN Registration in Delhi?</h2>
            <div class="content-text">
                
                <p>Individuals earning taxable income in Delhi - salaried employees in Connaught Place, Nehru Place and Aerocity offices, self-employed professionals in South Delhi and Okhla, freelancers and gig workers across Delhi NCR - must obtain PAN for filing income tax returns. Even individuals below the taxable threshold may need PAN for bank account opening, property transactions, mutual fund investments above Rs 50,000 and receiving payments subject to TDS.</p>
                <p>Companies incorporated with the Registrar of Companies (RoC) Delhi at Nehru Place receive PAN during the SPICe+ incorporation process. However, if PAN is not allotted during incorporation or needs correction, a separate application is required. Every <a href="/private-limited-company-registration/delhi">private limited company registered in Delhi</a>, public limited company and One Person Company must have a valid PAN.</p>
                <p>LLPs registered with RoC Delhi, partnership firms, proprietorship businesses, Hindu Undivided Families (HUFs), trusts registered in Delhi, societies registered with the Registrar of Societies (East) Delhi, and Associations of Persons all need entity-level PAN separate from individual PANs of their partners/members/trustees.</p>
                <p>NRIs and foreign citizens with financial interests in Delhi - owning property, receiving rental income, holding investments or conducting business - need PAN for tax compliance. NRIs use Form 49A (Indian passport holders) and foreign citizens use Form 49AA.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in PAN Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Individual PAN Application (Form 49A)</td><td>Online application through Protean (NSDL) or UTIITSL portal for Delhi residents. Complete form filling with correct AO Code for Delhi jurisdiction, document upload, fee payment and tracking.</td></tr>
                        <tr><td>Instant ePAN via Aadhaar</td><td>Free instant ePAN through incometax.gov.in using Aadhaar-based KYC. PAN allotted and ePAN PDF generated within 10 minutes. Patron assists with Aadhaar authentication issues.</td></tr>
                        <tr><td>Business PAN (Companies/LLPs/Firms/Trusts)</td><td>PAN application for newly incorporated entities. For companies and LLPs registered with RoC Delhi, Patron handles post-incorporation PAN issues, corrections and fresh applications.</td></tr>
                        <tr><td>NRI PAN Application (Form 49A/49AA)</td><td>PAN for Non-Resident Indians and foreign citizens. Correct AO Code (ADIT for international taxation), document attestation guidance and application filing.</td></tr>
                        <tr><td>PAN-Aadhaar Linkage</td><td>Mandatory under Section 139AA. Patron assists with linkage on the Income Tax portal, including resolution of name/DOB mismatches between PAN and Aadhaar.</td></tr>
                        <tr><td>PAN Correction and Reprint</td><td>Name change, address update, DOB correction, photograph update and reprint requests through Protean or UTIITSL portal.</td></tr>
                        <tr><td>Post-PAN Compliance Bundle</td><td>Same CA team handles <a href="/gst-registration/delhi">GST registration</a> (GSTIN contains PAN), <a href="/income-tax-return">income tax return</a> filing, TDS compliance and all tax services from our Delhi office.</td></tr>

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
            <h2 class="section-title">How PAN Registration Works in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Delhi CA team manages the entire PAN registration process - from application type determination to PAN-Aadhaar linkage and post-PAN compliance setup.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Application Type and Gather Documents</h3><p class="step-description">Patron's Delhi CA team assesses the application type: individual PAN (Form 49A), business PAN, NRI PAN (Form 49A/49AA), or instant ePAN (Aadhaar-based, free). Documents gathered: Aadhaar card, proof of identity, proof of address, proof of date of birth, photographs, and for business PAN: incorporation certificate from RoC Delhi, partnership deed, trust deed or society registration certificate.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Application type assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents compiled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="40" height="10" rx="3" fill="#F5A623" opacity="0.3"/><line x1="25" y1="35" x2="85" y2="35" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/><line x1="25" y1="45" x2="75" y2="45" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/><circle cx="90" cy="65" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M83 65l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Select Application Mode - Instant ePAN or Regular</h3><p class="step-description">For Delhi individuals with valid Aadhaar linked to mobile number, Patron recommends the instant ePAN route through incometax.gov.in - free and generated within 10 minutes. For business entities, NRIs and individuals without Aadhaar-mobile linkage, the regular online application through Protean (NSDL) or UTIITSL is used.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fastest route identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M55 35l3 3 7-7" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="55" width="50" height="8" rx="4" fill="#E8712C" opacity="0.2"/></svg></div><span class="illustration-label">Mode Selected</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Application with Correct Delhi AO Code</h3><p class="step-description">For regular applications, Patron files Form 49A/49AA online. The critical AO Code field determines the Delhi tax jurisdiction. Patron uses the AO Code search tool to select the exact code for the applicant's Delhi locality. Documents are uploaded, the Rs 107 fee is paid, and a 15-digit acknowledgement number is generated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Delhi AO Code selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Application submitted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="8" rx="4" fill="#E8712C" opacity="0.2"/><rect x="30" y="35" width="60" height="8" rx="4" fill="#14365F" opacity="0.1"/><rect x="30" y="50" width="25" height="8" rx="4" fill="#E8712C" opacity="0.7"/><text x="60" y="80" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">AO Code</text></svg></div><span class="illustration-label">Form Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Document Verification and PAN Allotment</h3><p class="step-description">Protean/UTIITSL verifies uploaded documents. For online applications with Aadhaar e-KYC, verification is faster. After successful verification, PAN is allotted. The ePAN PDF is emailed. The physical PAN card is dispatched by speed post to the Delhi address. Total processing: 10-15 working days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN allotted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 40l6 6 14-14" stroke="#14365F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><line x1="78" y1="58" x2="95" y2="75" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><rect x="20" y="75" width="80" height="8" rx="4" fill="#E8712C" opacity="0.15"/></svg></div><span class="illustration-label">PAN Issued</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive PAN Card and Complete PAN-Aadhaar Linkage</h3><p class="step-description">Physical PAN card is delivered to the Delhi address. ePAN PDF is emailed simultaneously. Patron downloads and verifies PAN details. PAN-Aadhaar linkage is completed on the Income Tax portal. If there is a name or DOB mismatch, Patron initiates correction to enable linkage. Non-linkage results in PAN becoming inoperative under Section 139AA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN card received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar linkage completed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M56 30l3 3 6-6" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="48" width="50" height="6" rx="3" fill="#F5A623" opacity="0.3"/><rect x="30" y="70" width="60" height="10" rx="5" fill="#14365F" opacity="0.08"/><text x="60" y="78" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAN + Aadhaar</text></svg></div><span class="illustration-label">Linked</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Configure Post-PAN Tax and Business Compliance</h3><p class="step-description">Post-PAN, Patron configures the Delhi applicant's full compliance setup: GST registration (GSTIN contains PAN), income tax e-filing portal registration, advance tax payment schedule, TDS compliance for businesses, bank KYC update, and for businesses - current account opening, IEC application and statutory audit setup.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST registration initiated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax compliance configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="60" y="15" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="37" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAN</text><text x="82" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST</text><path d="M55 35l10 10" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><circle cx="90" cy="72" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M87 72l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliance Set</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for PAN Registration in Delhi</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Proof of Identity (any one):</strong> Aadhaar card, passport, voter ID, driving licence, ration card with photograph, arms licence, pensioner card, Central/State government photo ID card</li>
<li><strong>Proof of Address (any one):</strong> Aadhaar card, passport, voter ID, driving licence, electricity bill (not older than 3 months), water bill, property tax receipt, bank statement, employer certificate</li>
<li><strong>Proof of Date of Birth (any one):</strong> Aadhaar card, birth certificate, passport, voter ID, matriculation certificate, driving licence, marriage certificate</li>
<li><strong>Photographs:</strong> Two recent passport-size colour photographs</li>
<li><strong>For Companies:</strong> Certificate of Incorporation issued by RoC Delhi (Nehru Place). MOA/AOA not required for PAN.</li>
<li><strong>For LLPs:</strong> Certificate of Incorporation from RoC Delhi. LLP Agreement.</li>
<li><strong>For Partnership Firms:</strong> Partnership deed. Certificate of Registration from Registrar of Firms (if registered).</li>
<li><strong>For Trusts/Societies:</strong> Trust deed/Registration certificate. For societies: Registration Certificate from Registrar of Societies (East), Delhi.</li>
<li><strong>For NRIs/Foreign Citizens:</strong> Passport (mandatory). Address proof of overseas residence. Form 49AA for foreign passport holders.</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Delhi-specific tip:</strong> For instant ePAN via Aadhaar, ensure your mobile number is linked to Aadhaar before applying. Many Delhi residents face OTP failures because their Aadhaar-linked mobile number has changed. Update Aadhaar at the nearest Aadhaar centre in Delhi before attempting instant ePAN.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in PAN Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>AO Code Selection Errors</td><td>Delhi has multiple Commissioner charges, ranges and wards - wrong AO Code causes jurisdictional issues during ITR processing</td><td>Patron uses AO Code search tool and Delhi jurisdiction maps to select the exact code based on locality</td></tr>
<tr><td>PAN-Aadhaar Linkage Failures</td><td>Name spelling differences, DOB mismatches or gender discrepancies prevent automatic linkage; unlinkered PANs become inoperative</td><td>Patron resolves mismatches by initiating corrections on PAN or Aadhaar before completing linkage</td></tr>
<tr><td>Duplicate PAN Issues</td><td>Some Delhi residents hold multiple PANs - penalty of Rs 10,000 under Section 272B</td><td>Patron identifies duplicate PANs and surrenders the extra through the correction process</td></tr>
<tr><td>Business PAN Post-Incorporation Delays</td><td>PAN errors after SPICe+ incorporation or PAN not received post-incorporation for companies at RoC Delhi</td><td>Patron handles all business PAN corrections and fresh applications for Delhi entities</td></tr>

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
            <h2 class="section-title">PAN Registration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Instant ePAN (Aadhaar-based)</td><td>FREE (Government) | Rs 499 assisted by Patron</td></tr>
<tr><td>Individual PAN (Form 49A) - Indian Address</td><td>Rs 107 (Government) | Rs 499 (Patron fee)</td></tr>
<tr><td>Individual PAN - Foreign Address</td><td>Rs 989-1,011 (Government) | Rs 999 (Patron fee)</td></tr>
<tr><td>Business PAN (Company/LLP/Firm/Trust)</td><td>Rs 107 (Government) | Rs 999 (Patron fee)</td></tr>
<tr><td>NRI PAN (Form 49A/49AA)</td><td>Rs 107-989 (Government) | Rs 1,499 (Patron fee)</td></tr>
<tr><td>PAN Correction / Reprint</td><td>Rs 107-989 (Government) | Rs 499 (Patron fee)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>INR 499 (Exl GST and Govt. Charges)</td></tr>
<tr><td>PAN-Aadhaar Linkage (late penalty)</td><td>Rs 1,000 (IT Dept penalty) | Rs 499 (Patron assistance)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PAN Registration in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for PAN Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Instant ePAN - Application</td><td>2 minutes</td></tr>
<tr><td>Instant ePAN - PAN Allotment</td><td>10 minutes (ePAN PDF emailed)</td></tr>
<tr><td>Regular Online - Application</td><td>15-30 minutes</td></tr>
<tr><td>Regular Online - Verification</td><td>7-10 working days</td></tr>
<tr><td>Regular Online - Physical Card Delivery</td><td>10-15 working days total</td></tr>
<tr><td>Offline (Delhi PAN Centre)</td><td>15-20 working days total</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi Processing Note:</strong> PAN applications can be filed online from anywhere. Delhi has 139+ physical PAN facilitation centres (managed by Protean and UTIITSL) in Rohini, Dwarka, Laxmi Nagar, Uttam Nagar, Narela, Mayur Vihar and other localities for those preferring offline submission. Instant ePAN via Aadhaar is the fastest route for Delhi individuals. Patron's Delhi office in Rohini handles all online filings, AO Code selection and post-PAN compliance.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for PAN Registration in Delhi?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Delhi Office at Rohini</h3><p class="feature-text">In-person consultations for individuals, business owners, NRIs and newly incorporated companies. AO Code guidance, document verification and PAN-Aadhaar linkage assistance available on-site.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Delhi AO Code Expertise</h3><p class="feature-text">Patron's CA team knows Delhi's Income Tax jurisdictional structure - Commissioner charges, ranges, wards and circles. We select the correct AO Code based on your specific Delhi locality and income source.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Business PAN + Company Registration</h3><p class="feature-text">For newly incorporated companies and LLPs registered with RoC Delhi at Nehru Place, Patron handles both incorporation and PAN in a single engagement. Post-PAN, GST registration and compliance are seamlessly configured.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Integrated PAN-to-ITR Compliance</h3><p class="feature-text">Same CA team handles PAN registration, PAN-Aadhaar linkage, GST registration, ITR filing, TDS compliance and all tax services. Your Delhi tax compliance flows from PAN through to annual return from a single partner.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune</blockquote><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"We were facing ROC non-compliance notices. Patron sorted everything in 2 weeks." - Director, Delhi</blockquote><p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Delhi residents and businesses with both in-person and online PAN registration support.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Individual PAN vs Business PAN for Delhi Applicants</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Individual PAN</th><th>Business PAN</th></tr></thead>
                    <tbody>
                        <tr><td>4th Character of PAN</td><td>P (Person)</td><td>C (Company) / F (Firm) / H (HUF) / T (Trust) / A (AOP)</td></tr>
<tr><td>Form</td><td>Form 49A (Indian) / 49AA (Foreign)</td><td>Form 49A (for Indian entities)</td></tr>
<tr><td>Documents</td><td>Aadhaar/ID proof, address proof, DOB proof</td><td>Incorporation certificate, deed, registration certificate</td></tr>
<tr><td>Delhi Use Cases</td><td>Salaried employees, professionals, freelancers, property buyers</td><td>Companies (RoC Delhi), LLPs, firms, trusts, societies</td></tr>
<tr><td>Aadhaar Linkage</td><td>Mandatory under Section 139AA</td><td>Not applicable for entities</td></tr>
<tr><td>Fee</td><td>Rs 107 / FREE (instant ePAN)</td><td>Rs 107</td></tr>
<tr><td>Processing</td><td>Instant ePAN available</td><td>10-15 working days</td></tr>

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
                
                <p>PAN is the foundation for all financial and tax compliance. Here are related services:</p><ul><li><a href="/pan-registration">PAN Registration in India</a> - National-level PAN registration services</li><li><a href="/gst-registration">GST Registration</a> - GSTIN contains PAN; mandatory for most businesses</li><li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing requires valid PAN</li><li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - PAN allotted during SPICe+ incorporation</li><li><a href="/tan-registration">TAN Registration</a> - Tax Deduction Account Number for TDS compliance</li><li><a href="/iec-registration">IEC Registration</a> - Import Export Code equals PAN for trade</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for PAN in Delhi</h2>
            <div class="content-text">
                
                <p><strong>Income Tax Act, 1961 - Section 139A:</strong> Mandates PAN for every person whose total income exceeds the basic exemption limit, every person carrying on business/profession whose turnover exceeds prescribed limits, and every person who enters into prescribed financial transactions.</p>
<p><strong>Section 139AA - PAN-Aadhaar Linkage:</strong> Every individual who has been allotted PAN and possesses Aadhaar must link them. Non-linkage makes the PAN inoperative - the individual cannot file ITR, receive refunds or complete financial transactions requiring PAN.</p>
<p><strong>Section 272B - Penalty for Duplicate PAN:</strong> Penalty of Rs 10,000 for having more than one PAN. Delhi residents with duplicate PANs must surrender the extra PAN.</p>
<p><strong>Form 49A and Form 49AA:</strong> Form 49A for Indian citizens and entities. Form 49AA for foreign citizens and entities. Filed through Protean (NSDL) or UTIITSL.</p>
<p><strong>Protean eGov Technologies (NSDL):</strong> Authorised PAN agency. Online portal: onlineservices.nsdl.com. Multiple TIN facilitation centres in Delhi.</p>
<p><strong>UTIITSL:</strong> Second authorised PAN agency. Online portal: pan.utiitsl.com. UTIITSL centres across Delhi for offline applications.</p>
<p><strong>Instant ePAN:</strong> Free service on <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> for individuals with valid Aadhaar linked to mobile number. PAN allotted within minutes.</p>
<p><strong>AO Code:</strong> Assessing Officer Code determines Delhi's Income Tax jurisdiction. Correct selection is critical for proper jurisdictional assignment of Delhi taxpayers.</p>

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
                    <h2 class="faq-expanded__title">FAQs - PAN Registration in Delhi</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about PAN registration in Delhi. Our CA team has compiled answers based on real client queries.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PAN Registration in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to apply for PAN in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Delhi residents can apply online through Protean (NSDL) portal or UTIITSL portal using Form 49A, or get instant ePAN through the Income Tax e-filing portal (incometax.gov.in) using Aadhaar. Offline applications can be submitted at any of Delhi's 139+ PAN facilitation centres in Rohini, Dwarka, Laxmi Nagar, Uttam Nagar and other localities. Patron's Delhi office in Rohini handles all application modes with correct AO Code selection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the fee for PAN card in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Instant ePAN via Aadhaar on the Income Tax portal is completely free. Regular PAN application through Protean or UTIITSL costs Rs 107 for delivery to an Indian address and Rs 989 to Rs 1,011 for a foreign address. Patron's professional fee for assisted PAN registration starts from Rs 499. Business PAN assistance costs Rs 999. These fees are standardised nationally - there are no Delhi-specific charges.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does PAN take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Instant ePAN via Aadhaar takes approximately 10 minutes. Regular online applications through Protean or UTIITSL take 10-15 working days for PAN allotment and physical card delivery to a Delhi address. Offline applications submitted at Delhi PAN centres take 15-20 working days. The ePAN (PDF) is emailed upon allotment regardless of physical card dispatch timeline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I get instant ePAN in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. Any individual with a valid Aadhaar card linked to an active mobile number can get an instant ePAN through the Income Tax e-filing portal (incometax.gov.in) for free. The process takes about 10 minutes - Aadhaar OTP verification, PAN allotment and ePAN PDF generation. The ePAN is valid for all purposes identical to the physical PAN card. Patron assists Delhi residents who face Aadhaar OTP or e-KYC issues.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is PAN-Aadhaar linkage mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 139AA of the Income Tax Act, every individual who has been allotted PAN and possesses Aadhaar must link them. Non-linkage makes the PAN inoperative - the individual cannot file ITR, receive refunds, open new bank accounts or complete financial transactions requiring PAN. A late linkage fee of Rs 1,000 applies. Patron assists Delhi residents with linkage and resolves name/DOB mismatches.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What documents are needed for business PAN in Delhi?</h3>
                        <div class="faq-expanded__a"><p>For companies registered with RoC Delhi: Certificate of Incorporation (PAN is usually allotted during SPICe+ incorporation). For LLPs: Certificate of Incorporation and LLP Agreement. For partnership firms: Partnership Deed and Registrar of Firms certificate. For trusts: Trust Deed and Registration Certificate. For societies in Delhi: Registration Certificate from Registrar of Societies (East). Patron handles all business PAN applications.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>PAN card kya hai?</strong> PAN (Permanent Account Number) ek 10-digit alphanumeric number hai jo Income Tax Department issue karta hai. ITR file karne, bank account kholne, property registration aur GST registration ke liye mandatory hai. Delhi mein Aadhaar se instant ePAN free mein milta hai 10 minute mein.</p><p><strong>Delhi mein PAN kaise banaye?</strong> Sabse fast tarika: incometax.gov.in pe Aadhaar se instant ePAN apply karo - free hai, 10 minute mein milta hai. Regular PAN ke liye Protean ya UTIITSL portal pe Form 49A bharo, Rs 107 fee do, 10-15 din mein physical card aayega.</p><p><strong>PAN-Aadhaar link kaise kare?</strong> incometax.gov.in pe login karo, Quick Links mein Link Aadhaar select karo, PAN aur Aadhaar number daalo, OTP verify karo. Agar naam ya DOB mein mismatch hai to pehle correction karwao. Late linkage pe Rs 1,000 fee lagti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your PAN Registration in Delhi</h2>
            <div class="content-text">
                
                <p>An inoperative PAN due to non-linkage with Aadhaar means a Delhi resident or business cannot file income tax returns, receive tax refunds, open bank accounts, complete property registrations above Rs 10 lakh, invest in mutual funds above Rs 50,000 or process any financial transaction requiring PAN. For Delhi businesses, PAN is the foundation of the entire compliance chain - GST registration (GSTIN contains PAN), IEC, bank account opening, ITR filing, TDS compliance and statutory audit all require valid PAN. Duplicate PAN attracts Rs 10,000 penalty under Section 272B. Instant ePAN via Aadhaar takes just 10 minutes and is free. Apply now.</p><p><strong>Get your PAN registration in Delhi - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your PAN Registration in Delhi Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">PAN registration in Delhi is the foundational identity document for every financial and tax transaction - from a salaried employee filing their first ITR to a newly incorporated company opening its current account, an NRI purchasing property or a Chandni Chowk trader registering for GST. Delhi's 139+ PAN facilitation centres and the instant ePAN via Aadhaar route make application highly accessible.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Delhi office in Rohini provides end-to-end CA-assisted PAN registration - from individual and business PAN applications with correct Delhi AO Code selection through instant ePAN assistance and PAN-Aadhaar linkage resolution to the complete post-PAN compliance bundle of GST registration, ITR filing and TDS compliance.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">For Delhi residents and businesses seeking PAN registration - whether first-time applicants, newly incorporated entities or NRIs - Patron offers a free consultation to determine the fastest application route and provide a transparent fee quote.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PAN%20Registration%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">PAN Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert CA-assisted PAN registration services available in all major cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
<a href="/pan-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/pan-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
<a href="/pan-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/pan-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<a href="/pan-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/pan-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<a href="/pan-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">End-to-end support for PAN Registration in Delhi</div><div class="pa-cross-grid">
<a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/llp-incorporation/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/tan-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">Delhi</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly to reflect any changes in IT Department updates, PAN-Aadhaar linkage deadlines, fee changes and portal updates. Last review: March 2026. Next review: June 2026.</p>
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
