
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>PAN Card Registration in Pune - Form 49A & Process</title>
    <meta name="description" content="CA-assisted PAN registration in Pune. Form 49A for individuals, trusts, societies. Instant e-PAN, PAN 2.0 QR, Aadhaar linking. Call +91 945 945 6700.">
    <link rel="canonical" href="/pan-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PAN Card Registration in Pune - Form 49A & Process">
    <meta property="og:description" content="CA-assisted PAN registration in Pune. Form 49A for individuals, trusts, societies. Instant e-PAN, PAN 2.0 QR, Aadhaar linking. Call +91 945 945 6700.">
    <meta property="og:url" content="/pan-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PAN Card Registration in Pune - Form 49A & Process">
    <meta name="twitter:description" content="CA-assisted PAN registration in Pune. Form 49A for individuals, trusts, societies. Instant e-PAN, PAN 2.0 QR, Aadhaar linking. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "PAN Registration in Pune",
      "description": "CA-assisted PAN registration in Pune. Form 49A for individuals, trusts, societies. Instant e-PAN, PAN 2.0 QR, Aadhaar linking. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/pan-registration/pune",
      "serviceType": "PAN Registration in Pune",
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
        "url": "https://www.patronaccounting.com/pan-registration/pune",
        "price": "107"
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
          "name": "PAN Registration in Pune",
          "item": "https://www.patronaccounting.com/pan-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does PAN registration cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Instant e-PAN for individuals with Aadhaar is completely free via the Income Tax portal. Form 49A costs Rs 107 for Indian applicants (paperless). Physical card dispatch within India is Rs 107. NRI and foreign entities pay Rs 1,017 including international dispatch. Patron's fees start from Rs 499 (instant e-PAN) to Rs 2,999 (foreign entity)."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to get PAN in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Instant e-PAN takes 10 minutes for individuals with Aadhaar. Online applications via Protean or UTIITSL take 7-15 days. Physical PAN card delivery to Pune takes 15-20 days. Pune applicants benefit from the Protean processing center being located at Baner, enabling faster turnaround for physical submissions."
          }
        },
        {
          "@type": "Question",
          "name": "Is Aadhaar mandatory for PAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, for Indian citizens. Under Section 139AA, quoting Aadhaar is mandatory in PAN applications. Existing PAN holders must link PAN with Aadhaar. Non-linked PANs become inoperative - cannot file ITR, process refunds, or complete financial transactions. NRIs and foreign citizens are exempt from Aadhaar requirement."
          }
        },
        {
          "@type": "Question",
          "name": "Do companies need a separate PAN application?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. PAN is automatically allotted to companies during incorporation via SPICe+ and to LLPs via FiLLiP. The PAN number appears on the Certificate of Incorporation. Separate Form 49A is needed only if auto-allotment fails or for entities not incorporated through SPICe+/FiLLiP (trusts, societies, HUFs, partnership firms)."
          }
        },
        {
          "@type": "Question",
          "name": "What is PAN 2.0?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN 2.0 is a government project approved by CCEA on 25 November 2024 with Rs 1,435 crore budget. It introduces dynamic QR codes on PAN cards for real-time verification, a unified PAN/TAN digital portal, free corrections and updates, and enhanced security. Existing PAN numbers remain unchanged. Rolling out through 2026."
          }
        },
        {
          "@type": "Question",
          "name": "How to link Aadhaar with PAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Aadhaar-PAN linking is done online on the Income Tax e-Filing portal by entering PAN number, Aadhaar number, and verifying via OTP. If names don't match, correction must be made on either document first. Late linking attracts Rs 1,000 penalty under Section 234H. Patron handles linking and name correction if needed."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for not linking Aadhaar with PAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 1,000 under Section 234H for late linking. More critically, non-linked PAN becomes inoperative - cannot file ITR, receive refunds, open bank accounts, or use PAN for KYC. Reactivation requires linking Aadhaar and paying the penalty. Processing takes up to 30 days after linking."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get PAN for a trust registered in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Trusts registered under the Bombay Public Trusts Act 1950 apply via Form 49A with trust deed, Charity Commissioner registration certificate from Joint Charity Commissioner Pune (45/2, Dhole Patil Marg), and trustee identity proof. PAN is a prerequisite for the trust's 12A, 80G, and bank account. Quick Answers PAN card ke liye Aadhaar zaroori hai kya? Haan. Section 139AA ke under Indian citizens ke liye PAN application mein Aadhaar mandatory hai. Aadhaar-PAN linking bhi zaroori hai - nahi kiya to PAN inoperative ho jayega. Company ke liye alag se PAN lagana padta hai? Nahi. SPICe+ (company) aur FiLLiP (LLP) mein PAN automatic allot hota hai. Trust, society, HUF ke liye alag Form 49A lagana padta hai. PAN 2.0 kya hai? Government ka naya project - PAN card pe dynamic QR code aayega, unified portal hoga, corrections free hongi. 2026 mein rollout ho raha hai."
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
                        PAN Registration in Pune: PAN Card for Individuals, Companies, Trusts, and LLPs
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Aadhaar (mandatory), photograph, identity proof, address proof, entity registration certificate (for non-individuals)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Instant e-PAN FREE (individuals with Aadhaar) | Form 49A Rs 107 (Indian, paperless) | Physical card Rs 107 additional</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All Indian citizens, HUFs, trusts, societies, companies, LLPs, firms, NRIs, foreign entities</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Instant e-PAN 10 minutes | Online application 7-15 days | Physical delivery 15-20 days</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PAN%20registration%20in%20Pune.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'PAN Registration in Pune',
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
    'ctaText'    => 'CA-managed PAN registration with TAN, GST, and Aadhaar linking for Pune individuals and businesses.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is PAN</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">PAN Routes</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PAN Registration in Pune Services at a Glance</strong></p>
                    <p>PAN (Permanent Account Number) is a 10-digit alphanumeric identifier issued by the Income Tax Department that is mandatory for filing income tax returns, opening bank accounts, and conducting financial transactions above prescribed thresholds. In Pune, PAN applications are filed via the Protean eGov Technologies portal (tinpan.proteantech.in) or UTIITSL portal using Form 49A (Indian citizens/entities) or Form 49AA (foreign citizens). Individuals with Aadhaar can get instant e-PAN free of charge in 10 minutes. For companies and LLPs, PAN is auto-generated during incorporation via SPICe+ and FiLLiP. Pune holds a unique position: the Protean PAN processing center is physically located at Sapphire Chambers, Baner Road, Pune 411 045.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Issuing Authority</td><td>Income Tax Department (via Protean eGov / UTIITSL)</td></tr><tr><td>Pune Processing Center</td><td>Protean eGov, 4th Floor, Sapphire Chambers, Baner Road, Baner, Pune 411 045</td></tr><tr><td>Application Form</td><td>Form 49A (Indian) | Form 49AA (Foreign) | Instant e-PAN (individuals with Aadhaar)</td></tr><tr><td>Fee</td><td>Instant e-PAN: FREE | Paperless: Rs 107 | Physical card: Rs 107 | Foreign: Rs 1,017</td></tr><tr><td>Timeline</td><td>Instant e-PAN: 10 min | Online: 7-15 days | Physical: 15-20 days</td></tr><tr><td>Validity</td><td>Lifetime (no renewal needed)</td></tr><tr><td>Key Obligation</td><td>Aadhaar-PAN linking mandatory per Section 139AA</td></tr><tr><td>2026 Update</td><td>PAN 2.0 with dynamic QR code rolling out through 2026</td></tr></tbody></table></div></p>
                </div>
                <p>Pune has a unique connection to India's PAN infrastructure. Protean eGov Technologies Limited (formerly NSDL), which processes all PAN applications across India, operates its Income Tax PAN Services Unit from Sapphire Chambers, Baner Road, Pune 411 045. UTIITSL also operates multiple TIN Facilitation Centres across Pune. Aadhaar-PAN linking is mandatory under Section 139AA - non-linked PANs become inoperative. PAN 2.0 (approved November 2024, Rs 1,435 crore) introduces dynamic QR codes, rolling out through 2026. Learn more about <a href="/pan-registration">PAN Registration across India</a>.</p>
                <p>Patron Accounting handles PAN registration from our Pune office at RTC Silver, Wagholi - for individuals, HUFs, trusts (with Bombay PT Act Charity Commissioner prerequisite), societies, Section 8 companies, Pvt Ltd, LLPs, and NRIs. We bundle PAN with TAN, <a href="/gst-registration">GST Registration</a>, and <a href="/income-tax-return">Income Tax Return Filing</a> as a complete compliance launch.</p>
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
                <h2 class="section-title">What Is PAN Registration</h2>
                <div class="content-text what-is-definition">
                    
                    <p>PAN registration is the process of obtaining a 10-digit alphanumeric Permanent Account Number from the Income Tax Department, issued via Protean eGov Technologies or UTIITSL, that serves as the universal identifier for all tax-related and financial transactions in India.</p><p>PAN is required for filing income tax returns, opening bank accounts and demat accounts, purchasing property above Rs 10 lakh, making cash deposits above Rs 50,000, buying mutual funds, and all high-value financial transactions. For businesses, PAN is the foundation for GST registration (GSTIN is PAN-based), TDS/TCS compliance, IEC registration (IEC is PAN-based since GST), and all statutory filings.</p><p>The PAN 2.0 project, approved by CCEA in November 2024 with Rs 1,435 crore budget, will upgrade the PAN system with dynamic QR codes for real-time verification, a unified PAN/TAN digital portal, free corrections and updates, and enhanced security through a PAN Data Vault. PAN 2.0 is rolling out in phases through 2026. Existing PAN numbers remain unchanged - cardholders can request a QR code-enabled card at no additional cost.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PAN Registration in Pune:</strong></p>
                    <p><strong>Form 49A:</strong> PAN application form for Indian citizens and entities - individuals, HUFs, trusts, societies, firms.</p><p><strong>Instant e-PAN:</strong> Free PAN for individuals with Aadhaar via Income Tax portal (incometaxindia.gov.in). Generated in 10 minutes using Aadhaar e-KYC.</p><p><strong>Section 139AA:</strong> Income Tax Act provision mandating Aadhaar-PAN linking. Non-linked PAN becomes inoperative.</p><p><strong>Protean eGov:</strong> Formerly NSDL e-Governance - PAN processing agent with processing center at Sapphire Chambers, Baner Road, Pune 411 045.</p><p><strong>PAN 2.0:</strong> Government project (Nov 2024, Rs 1,435 crore) introducing dynamic QR codes, unified portal, and free corrections. Rolling out through 2026.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAN Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Tax Dept</span>
                        <strong>PAN Card</strong>
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
            <h2 class="section-title">Who Needs PAN Registration in Pune</h2>
            <div class="content-text">
                
                <p><strong>Individuals:</strong> Salaried employees, freelancers in Hinjewadi and Kharadi, professionals, students opening first bank accounts, persons buying property in Pune. Individuals with Aadhaar can get instant e-PAN free in 10 minutes.</p><p><strong>Newly Incorporated Companies and LLPs:</strong> PAN auto-generated via SPICe+ (companies) and FiLLiP (LLPs). No separate application needed. Manual Form 49A only if auto-allotment fails.</p><p><strong>Trusts and Societies:</strong> Entities registered under the Bombay Public Trusts Act 1950 and Societies Registration Act 1860 need separate PAN via Form 49A. Charity Commissioner registration certificate required for Maharashtra entities. PAN is a prerequisite for 12A, 80G, and bank account.</p><p><strong>Hindu Undivided Families (HUFs):</strong> HUF PAN requires Form 49A with the HUF name, an HUF affidavit from the Karta, and the Karta's identity and address proof.</p><p><strong>NRIs:</strong> Non-Resident Indians with income sourced in India, planning property purchases, investments, or claiming tax treaty benefits. Form 49A with passport as primary identity document.</p><p><strong>Foreign Companies and Entities:</strong> Liaison offices, branch offices, or project offices in Pune. Form 49AA used for foreign entities.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">10 PAN Registration Services Included in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Individual PAN (Form 49A)</td><td>Complete online application on Protean portal with Aadhaar authentication. Fee: Rs 107 (paperless). Physical card dispatch to Pune address.</td></tr><tr><td>Instant e-PAN (Individuals)</td><td>Free instant PAN via Income Tax portal using Aadhaar e-KYC. Generated in 10 minutes. Available for individuals with valid Aadhaar linked to mobile.</td></tr><tr><td>Entity PAN (Trust/Society/HUF)</td><td>Form 49A with trust deed, Charity Commissioner certificate (Maharashtra), registration certificate, HUF affidavit.</td></tr><tr><td>Company/LLP PAN</td><td>PAN auto-generated via SPICe+ (companies) or FiLLiP (LLPs). Manual Form 49A filed if auto-allotment fails.</td></tr><tr><td>NRI PAN Application</td><td>Form 49A with passport-based identity proof. Physical card dispatch to foreign address at Rs 1,017.</td></tr><tr><td>Foreign Entity PAN (Form 49AA)</td><td>Application for foreign companies, entities, and individuals without Indian citizenship.</td></tr><tr><td>TAN Application (add-on)</td><td>Tax Deduction Account Number filed simultaneously with PAN for entities required to deduct TDS.</td></tr><tr><td>PAN Correction/Update</td><td>Name, date of birth, address, photograph, or signature correction via Change Request form.</td></tr><tr><td>PAN Reprint (PAN 2.0 QR)</td><td>Reissue of PAN card with dynamic QR code under PAN 2.0. No additional cost for QR upgrade.</td></tr><tr><td>Aadhaar-PAN Linking</td><td>Mandatory under Section 139AA. Linking + reactivation of inoperative PANs. Penalty Rs 1,000 for late linking.</td></tr>

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
            <h2 class="section-title">6-Step PAN Registration Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron handles PAN registration for all entity types from our Pune office. Applications filed via Protean portal (tinpan.proteantech.in) or UTIITSL. The Protean PAN processing center is located in Pune at Sapphire Chambers, Baner - enabling faster turnaround for Pune applicants.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine PAN Category and Route</h3><p class="step-description">Patron assesses the applicant type: individual (instant e-PAN or Form 49A), HUF (Form 49A with affidavit), trust/society (Form 49A with entity registration), company/LLP (automatic via SPICe+/FiLLiP), NRI (Form 49A with passport), or foreign entity (Form 49AA). For individuals with Aadhaar, instant e-PAN via Income Tax portal is fastest - free and 10 minutes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Category assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Best route selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="18" width="25" height="20" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="38" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">e-PAN</text><rect x="55" y="18" width="25" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="68" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">49A</text><rect x="85" y="18" width="15" height="20" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="93" y="31" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">49AA</text></svg></div><span class="illustration-label">Route Set</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Compile Identity and Entity Documents</h3><p class="step-description">For individuals: Aadhaar (mandatory), photograph, identity proof, address proof. For trusts: trust deed + Charity Commissioner certificate (Maharashtra mandatory). For HUFs: HUF affidavit from Karta. For NRIs: passport. Patron verifies name consistency across all documents - Aadhaar-PAN name mismatch is the most common rejection cause.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs compiled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="48" x2="72" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="60" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 60l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File PAN Application</h3><p class="step-description">Online via Protean portal (tinpan.proteantech.in) or UTIITSL. Enter applicant details, upload documents, verify via Aadhaar OTP or DSC. Pay Rs 107 government fee online. For instant e-PAN: file directly on incometaxindia.gov.in using Aadhaar e-KYC - PAN generated in 10 minutes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Application filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 107 paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">tinpan.proteantech.in</text><line x1="25" y1="35" x2="85" y2="35" stroke="#F5A623" stroke-width="2"/><line x1="25" y1="48" x2="78" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Receive PAN</h3><p class="step-description">Instant e-PAN: PDF downloaded in 10 minutes. Online applications processed in 7-15 days at the Protean center at Sapphire Chambers, Baner, Pune. Physical PAN card dispatched via Speed Post to Pune address in 15-20 days. PAN 2.0 cards include dynamic QR code.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10-digit number</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">PAN</text><rect x="25" y="32" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="44" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">ABCDE1234F</text><text x="60" y="62" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">QR Code Enabled</text></svg></div><span class="illustration-label">PAN Issued</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Link Aadhaar with PAN</h3><p class="step-description">Mandatory under Section 139AA. Link via Income Tax e-Filing portal (incometaxindia.gov.in) using PAN number, Aadhaar number, and OTP verification. Non-linked PAN becomes inoperative - cannot file ITR, process refunds, or complete financial transactions. Late linking penalty Rs 1,000 under Section 234H. Patron files linking and handles reactivation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar linked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN operative</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="25" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="43" y="32" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text><path d="M58 30L68 30" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/><rect x="68" y="20" width="25" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="80" y="32" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Aadhaar</text><circle cx="60" cy="52" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M56 52l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Linked</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Complete Compliance Setup</h3><p class="step-description">TAN application for TDS-deducting entities. GST registration (GSTIN is PAN-based). Bank account opening using PAN. Entity registration if not already done. For trusts and societies: 12A and 80G applications require PAN as prerequisite. Patron delivers the complete compliance chain from PAN onwards.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TAN + GST ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance launched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="10" width="30" height="30" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="20" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TAN</text><rect x="40" y="10" width="30" height="30" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="55" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GST</text><rect x="75" y="10" width="40" height="30" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="95" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Bank</text><rect x="20" y="50" width="80" height="20" rx="3" fill="#14365F" opacity="0.06"/><text x="60" y="63" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Compliance Ready</text></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for PAN Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li>Aadhaar card (mandatory for Indian citizens per Section 139AA)</li><li>Passport-size photograph (recent, white background)</li><li>Identity proof: Aadhaar / Passport / Voter ID / Driving Licence</li><li>Address proof: Aadhaar / Passport / Electricity bill / Bank statement (not older than 3 months)</li><li>Entity registration certificate: Certificate of Incorporation (company/LLP), Trust Deed + Charity Commissioner certificate (Maharashtra trusts), Society Registration Certificate, Partnership Deed</li><li>HUF: Affidavit from Karta with HUF member details</li><li>NRI: Passport (mandatory), OCI/PIO card, foreign address proof</li><li>DSC of authorised signatory (optional - Aadhaar OTP accepted)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Pune-Specific Tip:</strong> For Maharashtra trusts and societies, the Charity Commissioner registration certificate from the Joint Charity Commissioner, Pune (45/2, Dhole Patil Marg, Pune 411 001) must be attached with the Form 49A. For physical submissions, documents are mailed to Protean at Baner, Pune 411 045 - Pune applicants can also hand-deliver for faster processing.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common PAN Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar-PAN Name Mismatch</td><td>Spelling variations between Aadhaar (often regional script) and PAN (English) cause application rejection</td><td>Verify name consistency across all identity documents before filing. Correct Aadhaar or PAN if needed.</td></tr><tr><td>Inoperative PAN (Non-Linking with Aadhaar)</td><td>Non-linked PAN cannot file ITR, process refunds, or complete financial transactions. Rs 1,000 penalty.</td><td>File linking request and reactivation on Income Tax portal. Handle name correction if needed.</td></tr><tr><td>Duplicate PAN Allotment</td><td>Multiple PANs attract Rs 10,000 penalty under Section 272B. Common when employer applies separately.</td><td>Identify duplicate PANs and file for surrender/cancellation of the extra PAN.</td></tr><tr><td>Entity PAN Without Charity Commissioner Certificate</td><td>Maharashtra trusts/societies face queries or delays without Bombay PT Act registration certificate</td><td>Ensure Charity Commissioner registration is complete before filing entity PAN application.</td></tr><tr><td>Incorrect AO Code Selection</td><td>Wrong Assessing Officer code leads to jurisdictional issues during ITR processing and assessment</td><td>Verify correct AO code for the applicant's Pune ward/circle before filing.</td></tr>

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
            <h2 class="section-title">PAN Registration Fees in Pune - 2026 Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Instant e-PAN (Individual with Aadhaar)</td><td>Govt: FREE | Patron: Rs 499</td></tr><tr><td>Form 49A - Indian (Paperless)</td><td>Govt: Rs 107 | Patron: Rs 999</td></tr><tr><td>Form 49A - NRI (Foreign dispatch)</td><td>Govt: Rs 1,017 | Patron: Rs 1,999</td></tr><tr><td>Entity PAN (Trust/Society/HUF)</td><td>Govt: Rs 107 | Patron: Rs 1,999</td></tr><tr><td>Form 49AA - Foreign Entity</td><td>Govt: Rs 1,017 | Patron: Rs 2,999</td></tr><tr><td>PAN Correction/Update</td><td>Govt: Rs 107 | Patron: Rs 999</td></tr><tr><td>PAN Reprint (QR-enabled PAN 2.0)</td><td>Govt: Rs 107 | Patron: Rs 499</td></tr><tr><td>TAN Application (add-on)</td><td>Govt: Rs 65 | Patron: Rs 499</td></tr><tr><td>Aadhaar-PAN Linking</td><td>Govt: NIL (Rs 1,000 penalty if late) | Patron: Rs 499</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PAN Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PAN%20registration%20in%20Pune.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Instant e-PAN (Individual with Aadhaar)</td><td>10 minutes</td></tr><tr><td>Online (Paperless/e-Sign)</td><td>7-10 days</td></tr><tr><td>Online (Physical submission)</td><td>15-20 days</td></tr><tr><td>Physical card dispatch (Pune)</td><td>15-20 days from processing</td></tr><tr><td>Physical card dispatch (Foreign)</td><td>4-6 weeks</td></tr><tr><td>PAN Correction/Update</td><td>15-20 days</td></tr><tr><td>Aadhaar-PAN Linking</td><td>Instant to 7 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Pune applicants benefit from the Protean eGov processing center being located at Sapphire Chambers, Baner, Pune 411 045. Physical submissions can be hand-delivered for faster processing. Instant e-PAN is the fastest route for individuals - free and completed in 10 minutes via the Income Tax portal.</p>

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
            <h2 class="section-title">Why Choose Patron for PAN Registration in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Same City as Protean Processing Center</h3><p class="feature-text">Patron operates from RTC Silver, Wagholi, Pune - in the same city as the Protean eGov PAN processing center at Sapphire Chambers, Baner. Physical submissions processed faster for Pune applicants.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">PAN + TAN + GST Bundle</h3><p class="feature-text">PAN bundled with TAN (for TDS-deducting entities), GST registration (GSTIN is PAN-based), Aadhaar-PAN linking, and entity registration. Complete compliance launch from one CA practice.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Maharashtra Prerequisite Handling</h3><p class="feature-text">Trusts and societies in Pune need Charity Commissioner registration before entity PAN. Online portals outside Maharashtra often miss this. Patron ensures the prerequisite is complete before PAN application.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Aadhaar-PAN Linking + PAN 2.0</h3><p class="feature-text">Mandatory Aadhaar-PAN linking, inoperative PAN reactivation, and PAN 2.0 QR code reprint. Patron handles linking, penalty payment, and QR card upgrade as part of the service.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Pune individuals and businesses with local CA practice strength.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Application Routes - Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Instant e-PAN</th><th>Protean (Form 49A Online)</th><th>UTIITSL (Online)</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility</td><td>Individuals with Aadhaar only</td><td>All categories</td><td>All categories</td></tr><tr><td>Fee</td><td>FREE</td><td>Rs 107+</td><td>Rs 107+</td></tr><tr><td>Timeline</td><td>10 minutes</td><td>7-15 days</td><td>7-15 days</td></tr><tr><td>Physical Card</td><td>e-PAN only (PDF)</td><td>Optional</td><td>Optional</td></tr><tr><td>Entity PAN</td><td>Not available</td><td>Available</td><td>Available</td></tr><tr><td>Best For</td><td>Quick individual PAN</td><td>Trusts/societies/HUFs/firms</td><td>Alternative portal</td></tr>

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
            <h2 class="section-title">Related Tax and Business Registration Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/pan-registration">PAN Registration in India</a> - Our national PAN registration service</li><li><a href="/gst-registration">GST Registration</a> - GSTIN is PAN-based; required for businesses above turnover threshold</li><li><a href="/income-tax-return">Income Tax Return Filing</a> - PAN is mandatory for ITR filing</li><li><a href="/ngo-registration">NGO Registration</a> - PAN prerequisite for 12A, 80G registration</li><li><a href="#">Trust Registration</a> - Maharashtra trusts under Bombay PT Act</li><li><a href="/accounting-services">Accounting Services</a> - Complete accounting and compliance</li></ul><p>PAN is the foundation of India's tax compliance infrastructure. All other registrations - GST, IEC, 12A, 80G, bank accounts - are built on PAN. Patron delivers PAN as part of the complete entity-launch compliance chain.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for PAN Registration</h2>
            <div class="content-text">
                
                <p><strong>Governing Provisions:</strong></p><ul><li>Income Tax Act, 1961 - Section 139A (PAN mandatory), Section 139AA (Aadhaar-PAN linking), Section 272B (Rs 10,000 penalty for duplicate PAN), Section 234H (Rs 1,000 penalty for late Aadhaar linking)</li><li>Income Tax Rules, 1962 - Rule 114 (PAN procedure), Form 49A (Indian), Form 49AA (foreign)</li><li>PAN 2.0 Project - CCEA approved 25 Nov 2024, Rs 1,435 crore, dynamic QR code, unified portal, free corrections</li><li>Protean eGov Technologies Ltd - PAN processing agent. Pune center: Sapphire Chambers, Baner Road, Pune 411 045</li><li>Aadhaar-PAN Linking: Mandatory per Section 139AA. Non-linked PAN inoperative.</li></ul><p><strong>Penalties:</strong> Duplicate PAN: Rs 10,000 (Section 272B). Not quoting PAN: Rs 10,000. Late Aadhaar linking: Rs 1,000 (Section 234H).</p><p><strong>Key Portals:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax (incometaxindia.gov.in)</a> | <a href="https://tinpan.proteantech.in" target="_blank" rel="noopener">Protean PAN (tinpan.proteantech.in)</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - PAN Registration in Pune</h2>
                    <p class="faq-expanded__lead">Answers to common questions about PAN registration in Pune. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PAN Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does PAN registration cost?</h3>
                        <div class="faq-expanded__a"><p>Instant e-PAN for individuals with Aadhaar is completely free via the Income Tax portal. Form 49A costs Rs 107 for Indian applicants (paperless). Physical card dispatch within India is Rs 107. NRI and foreign entities pay Rs 1,017 including international dispatch. Patron's fees start from Rs 499 (instant e-PAN) to Rs 2,999 (foreign entity).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does it take to get PAN in Pune?</h3>
                        <div class="faq-expanded__a"><p>Instant e-PAN takes 10 minutes for individuals with Aadhaar. Online applications via Protean or UTIITSL take 7-15 days. Physical PAN card delivery to Pune takes 15-20 days. Pune applicants benefit from the Protean processing center being located at Baner, enabling faster turnaround for physical submissions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is Aadhaar mandatory for PAN?</h3>
                        <div class="faq-expanded__a"><p>Yes, for Indian citizens. Under Section 139AA, quoting Aadhaar is mandatory in PAN applications. Existing PAN holders must link PAN with Aadhaar. Non-linked PANs become inoperative - cannot file ITR, process refunds, or complete financial transactions. NRIs and foreign citizens are exempt from Aadhaar requirement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do companies need a separate PAN application?</h3>
                        <div class="faq-expanded__a"><p>No. PAN is automatically allotted to companies during incorporation via SPICe+ and to LLPs via FiLLiP. The PAN number appears on the Certificate of Incorporation. Separate Form 49A is needed only if auto-allotment fails or for entities not incorporated through SPICe+/FiLLiP (trusts, societies, HUFs, partnership firms).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is PAN 2.0?</h3>
                        <div class="faq-expanded__a"><p>PAN 2.0 is a government project approved by CCEA on 25 November 2024 with Rs 1,435 crore budget. It introduces dynamic QR codes on PAN cards for real-time verification, a unified PAN/TAN digital portal, free corrections and updates, and enhanced security. Existing PAN numbers remain unchanged. Rolling out through 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How to link Aadhaar with PAN?</h3>
                        <div class="faq-expanded__a"><p>Aadhaar-PAN linking is done online on the Income Tax e-Filing portal by entering PAN number, Aadhaar number, and verifying via OTP. If names don't match, correction must be made on either document first. Late linking attracts Rs 1,000 penalty under Section 234H. Patron handles linking and name correction if needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the penalty for not linking Aadhaar with PAN?</h3>
                        <div class="faq-expanded__a"><p>Rs 1,000 under Section 234H for late linking. More critically, non-linked PAN becomes inoperative - cannot file ITR, receive refunds, open bank accounts, or use PAN for KYC. Reactivation requires linking Aadhaar and paying the penalty. Processing takes up to 30 days after linking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I get PAN for a trust registered in Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Trusts registered under the Bombay Public Trusts Act 1950 apply via Form 49A with trust deed, Charity Commissioner registration certificate from Joint Charity Commissioner Pune (45/2, Dhole Patil Marg), and trustee identity proof. PAN is a prerequisite for the trust's 12A, 80G, and bank account.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>PAN card ke liye Aadhaar zaroori hai kya?</strong> Haan. Section 139AA ke under Indian citizens ke liye PAN application mein Aadhaar mandatory hai. Aadhaar-PAN linking bhi zaroori hai - nahi kiya to PAN inoperative ho jayega.</p><p><strong>Company ke liye alag se PAN lagana padta hai?</strong> Nahi. SPICe+ (company) aur FiLLiP (LLP) mein PAN automatic allot hota hai. Trust, society, HUF ke liye alag Form 49A lagana padta hai.</p><p><strong>PAN 2.0 kya hai?</strong> Government ka naya project - PAN card pe dynamic QR code aayega, unified portal hoga, corrections free hongi. 2026 mein rollout ho raha hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Inoperative PAN Blocks All Financial Transactions</h2>
            <div class="content-text">
                
                <p>A non-linked PAN is inoperative under Section 139AA - cannot file ITR, receive refunds, open bank accounts, or complete financial transactions. Penalty for late linking: Rs 1,000. Duplicate PANs attract Rs 10,000 penalty. For trusts and societies, PAN is prerequisite for 12A, 80G, CSR-1, and bank account - every day without PAN delays the entire compliance chain. PAN 2.0 with QR code is rolling out - apply now and get the upgraded version from day one.</p><p><strong>Get your PAN today. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PAN%20registration%20in%20Pune." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your PAN Card in Pune Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">PAN registration in Pune provides the foundational 10-digit identification number for all tax and financial compliance - from individuals filing their first ITR to trusts applying for 12A/80G, companies launching with SPICe+, and NRIs investing in Pune property.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Pune office at RTC Silver, Wagholi operates in the same city as the Protean eGov PAN processing center at Baner. Our CA team handles PAN for all entity types, bundled with TAN, GST, Aadhaar-PAN linking, and entity registration. With 10,000+ businesses served and direct experience in Pune's Income Tax jurisdictional structure, Patron ensures your PAN application is processed without queries and linked to the complete compliance chain.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PAN%20registration%20in%20Pune.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PAN%20Registration%20Pune&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20PAN%20registration%20in%20Pune.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers PAN registration in 8 major cities. Select your city below.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/pan-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pan-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/pan-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/pan-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/pan-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/pan-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/pan-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end tax and business registration</div><div class="pa-cross-grid"><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/ngo-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect PAN 2.0 rollout updates, Aadhaar-PAN linking enforcement changes, and fee structure revisions. The next scheduled review is June 2026.</p>
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
