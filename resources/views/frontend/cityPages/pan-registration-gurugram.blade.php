
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>PAN Card Registration Gurugram - Form 49A & Process</title>
    <meta name="description" content="CA-assisted PAN registration in Gurugram for companies, LLPs, trusts, societies, individuals. Form 49A, instant e-PAN. Serving Cyber City, Manesar. Call +91 945 945 6700.">
    <link rel="canonical" href="/pan-registration/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PAN Card Registration Gurugram - Form 49A & Process">
    <meta property="og:description" content="CA-assisted PAN registration in Gurugram for companies, LLPs, trusts, societies, individuals. Form 49A, instant e-PAN. Serving Cyber City, Manesar. Call +91 945 945 6700.">
    <meta property="og:url" content="/pan-registration/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PAN Card Registration Gurugram - Form 49A & Process">
    <meta name="twitter:description" content="CA-assisted PAN registration in Gurugram for companies, LLPs, trusts, societies, individuals. Form 49A, instant e-PAN. Serving Cyber City, Manesar. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "PAN Registration in Gurugram",
      "description": "CA-assisted PAN registration in Gurugram for companies, LLPs, trusts, societies, individuals. Form 49A, instant e-PAN. Serving Cyber City, Manesar. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/pan-registration/gurugram",
      "serviceType": "PAN Registration in Gurugram",
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
        "url": "https://www.patronaccounting.com/pan-registration/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "101",
          "maxPrice": "107",
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
          "name": "PAN Registration in Gurugram",
          "item": "https://www.patronaccounting.com/pan-registration/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I apply for PAN in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Individuals with Aadhaar get instant free e-PAN on incometax.gov.in in under 10 minutes. Business entities file Form 49A on Protean or UTIITSL portal with identity, address, and business proof. Fee Rs 101 (paperless) or Rs 107 (physical). Physical card reaches Gurugram in 15 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the fee for PAN registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Instant e-PAN free for individuals with Aadhaar. Protean/UTIITSL: Rs 101 (paperless), Rs 107 (physical). Outside India dispatch Rs 1,011. Reprint Rs 50. Through Patron from Rs 999 all-inclusive with document preparation and tracking."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for PAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Individuals: Aadhaar alone for instant e-PAN. Form 49A: identity proof, address proof, DOB proof, photograph. Entities: business registration proof (trust deed, society certificate, partnership deed, COI), Gurugram address proof, signatory identity."
          }
        },
        {
          "@type": "Question",
          "name": "How long does PAN take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Instant e-PAN: under 10 minutes. Paperless online: 4-7 working days. Physical mode: 10-15 working days. Companies via SPICe+ get PAN at incorporation (same day as COI). Patron recommends paperless with Aadhaar e-Sign for fastest processing."
          }
        },
        {
          "@type": "Question",
          "name": "Is PAN auto-allotted to companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Companies incorporated via SPICe+ through RoC Delhi receive PAN automatically. No separate application needed. TAN also auto-allotted. Patron verifies the auto-allotted PAN post-incorporation and files correction if details are incorrect."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between PAN and TAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN is universal tax identity for all financial transactions, ITR, GST, bank accounts. TAN is specifically for entities deducting TDS or collecting TCS - for filing TDS returns. Every business needs PAN; only those deducting TDS need TAN. Patron bundles both."
          }
        },
        {
          "@type": "Question",
          "name": "Can NRIs and foreigners get PAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NRIs apply through Form 49A (same as Indian citizens). Foreign nationals through Form 49AA using passport as identity and address proof. Foreign directors of Gurugram companies need PAN for DIN compliance and ITR. Patron handles Form 49AA including apostilled documents."
          }
        },
        {
          "@type": "Question",
          "name": "Is PAN-Aadhaar linking mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, for individuals under Section 139AA. Non-linked PAN becomes inoperative - cannot file ITR, receive refunds, or use for financial transactions. TDS deducted at higher rate. Rs 1,000 penalty for late linking. Patron checks status and completes linking. Quick Answers PAN card kitne mein banta hai? Instant e-PAN free Aadhaar se. Online Rs 101. Physical Rs 107. Patron Rs 999 se start. Company ko alag se PAN apply karna padta hai? Nahi. SPICe+ se PAN aur TAN auto allot hote hain RoC Delhi se. PAN-Aadhaar link nahi kiya toh? PAN inoperative. ITR nahi file kar paoge, refund nahi, TDS zyada katega. Rs 1,000 penalty."
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
                        PAN Registration in Gurugram: Permanent Account Number for Companies, LLPs, Trusts and Individuals
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Identity proof, address proof, date of birth proof, photographs, business registration proof</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 101 (paperless) / Rs 107 (physical) / FREE instant e-PAN via IT portal with Aadhaar</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All individuals, companies, LLPs, partnerships, trusts, societies, HUFs, NRIs, foreign nationals</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Instant (e-PAN) to 15 working days (physical PAN card)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PAN%20Registration%20in%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'PAN Registration in Gurugram',
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
    'ctaText'    => 'Patron has helped 10,000+ businesses with PAN registration, tax identity setup, and compliance. Gurugram businesses trust us for CA-assisted PAN with bundled TAN and GST.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">PAN vs TAN</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PAN Registration in Gurugram Services at a Glance</strong></p>
                    <p>PAN (Permanent Account Number) is the foundational 10-digit alphanumeric identity from the Income Tax Department needed for tax compliance, financial transactions, and regulatory registrations. PAN is the prerequisite for GST, bank accounts, IEC, ITR, and TDS. New companies via SPICe+ (RoC Delhi) get PAN automatically. Others apply through Form 49A on Protean (NSDL) or UTIITSL portal. Individuals with Aadhaar get instant free e-PAN on incometax.gov.in. PAN-Aadhaar linking is mandatory (Section 139AA) - non-linking makes PAN inoperative with Rs 1,000 penalty.</p>
                </div>
                <p>Gurugram's business ecosystem - startups in DLF Cyber City, manufacturers in Manesar IMT, professional services on Golf Course Road - runs on PAN. It is the first registration every business needs and unlocks every subsequent compliance step. Without PAN: no GST, no bank account, no IEC, no ITR. Learn more about <a href="/pan-registration">PAN Registration across India</a>.</p>
                <p>The process is now largely digital. Instant e-PAN is free on <a href="https://incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> with Aadhaar. Business entities file Form 49A for Rs 101-107. Patron's Gurugram office on Golf Course Extension Road provides CA-assisted PAN for all entity types, bundled with TAN and <a href="/gst-registration/gurugram">GST Registration</a>.</p>
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
                    
                    <p>PAN (Permanent Account Number) registration is the process of obtaining a unique 10-digit alphanumeric identification number from the Income Tax Department under Section 139A of the Income Tax Act, 1961, that serves as the universal tax identity for individuals and entities across all financial and regulatory transactions in India.</p>
                    <p>PAN structure: five letters, four digits, one letter (e.g., AABCC1234D). The fourth character indicates entity type: P (individual), C (company), F (firm), H (HUF), A (AOP/trust), T (trust). For Gurugram businesses, PAN is the master key connecting GST (GSTIN is PAN-based), IEC (= PAN post-GST), ITR, TDS/TCS, bank accounts, and all regulatory filings.</p>
                    <p>Companies incorporated via SPICe+ through RoC Delhi get PAN automatically. All others must apply separately. Bundle with <a href="/private-limited-company-registration/gurugram">Pvt Ltd Registration in Gurugram</a> for automatic PAN allotment.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PAN Registration in Gurugram:</strong></p>
                    <p><strong>PAN:</strong> 10-digit alphanumeric universal tax identity. Prerequisite for GST, bank accounts, IEC, ITR, TDS.</p>
                    <p><strong>Form 49A:</strong> Application for Indian citizens and entities (companies, LLPs, firms, trusts, societies, HUFs).</p>
                    <p><strong>Instant e-PAN:</strong> Free PAN for individuals with Aadhaar on incometax.gov.in. Under 10 minutes. PDF format.</p>
                    <p><strong>SPICe+ Auto-Allotment:</strong> MCA company incorporation form auto-allots PAN and TAN. No separate application.</p>
                    <p><strong>Section 139AA:</strong> Mandatory PAN-Aadhaar linking. Non-linking = inoperative PAN + Rs 1,000 penalty.</p>
                    <p><strong>TAN:</strong> Tax Deduction Account Number via Form 49B. For entities deducting TDS. Bundled with PAN.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAN Registration in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Gurugram Tax Hub</span>
                        <strong>PAN Allotted</strong>
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
            <h2 class="section-title">Who Needs PAN Registration in Gurugram?</h2>
            <div class="content-text">
                
                <p><strong>Companies via SPICe+ (Auto-Allotment):</strong> Pvt Ltd/Public Ltd incorporated through RoC Delhi get PAN automatically at incorporation. No separate application. Patron verifies and corrects if needed.</p>
                <p><strong>LLPs:</strong> Incorporated with RoC Delhi via FiLLiP. PAN usually auto-allotted. If not or needs correction, separate Form 49A required. Patron verifies post-incorporation.</p>
                <p><strong>Partnership Firms / Trusts / Societies / HUFs:</strong> Must apply separately via Form 49A. Trusts (Sub-Registrar Gurugram), Societies (Haryana Societies Act 2012), HUFs (Karta affidavit). PAN prerequisite for 12A/80G, bank accounts, ITR-7. See <a href="/ngo-registration/gurugram">NGO Registration in Gurugram</a>.</p>
                <p><strong>Individuals (Founders, Professionals, NRIs):</strong> Instant free e-PAN via incometax.gov.in with Aadhaar. Physical card Rs 101-107 via Protean/UTIITSL. NRIs use Form 49A; foreign nationals use Form 49AA.</p>
                <p><strong>Foreign Nationals:</strong> Directors in Gurugram companies, those with Indian income. Form 49AA with passport (apostilled/notarised). Patron handles foreign director PAN for <a href="/startup-registration/gurugram">Gurugram startups</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration Services Included by Patron in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Entity Type Assessment</td><td>Correct PAN category and form (49A vs 49AA, individual vs company vs trust vs AOP) determination</td></tr>
                        <tr><td>Form 49A / 49AA Filing</td><td>Complete online filing on Protean (NSDL) or UTIITSL portal with all details and document uploads</td></tr>
                        <tr><td>Instant e-PAN Assistance</td><td>Guidance through free instant e-PAN on <a href="https://incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> for individuals with Aadhaar</td></tr>
                        <tr><td>SPICe+ PAN Verification</td><td>For newly incorporated companies: verify PAN/TAN auto-allotted correctly. Correction filing if details are incorrect</td></tr>
                        <tr><td>TAN Registration (Bundled)</td><td>Form 49B for Tax Deduction Account Number. Required for TDS compliance. Filed alongside PAN at no extra cost</td></tr>
                        <tr><td>PAN-Aadhaar Linking</td><td>Section 139AA compliance. Status check, linking completion, Rs 1,000 late fee payment assistance if deadline missed</td></tr>
                        <tr><td>Duplicate PAN Resolution</td><td>Identification and surrender of duplicate PANs to prevent Section 272B penalty (Rs 10,000)</td></tr>
                        <tr><td>Post-PAN Compliance Setup</td><td>PAN-based <a href="/gst-registration/gurugram">GST registration</a>, bank account documentation, <a href="/iec-registration/gurugram">IEC readiness</a>, ITR filing calendar</td></tr>

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
            <h2 class="section-title">PAN Registration Process in Gurugram - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages PAN registration for all entity types - from instant e-PAN to complete tax identity setup.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Application Type and Form</h3><p class="step-description">Instant e-PAN (free, individuals with Aadhaar), Form 49A (Indian entities), Form 49AA (foreign nationals), or SPICe+ verification (companies via RoC Delhi). Patron determines the correct path based on entity type.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Type Assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form Selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><text x="37" y="47" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">e-PAN</text><rect x="55" y="25" width="25" height="35" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="67" y="47" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">49A</text><rect x="85" y="25" width="15" height="35" rx="3" fill="#E8EDF4" stroke="#14365F" stroke-width="0.5"/><text x="92" y="47" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AA</text></svg></div><span class="illustration-label">Path Set</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Documents</h3><p class="step-description">Individuals: Aadhaar alone for instant e-PAN. Entities: business registration proof (trust deed/society certificate/partnership deed/COI), Gurugram address proof, signatory identity, photographs. Patron prepares in prescribed format.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs Ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Format Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="10" rx="3" fill="#E8EDF4"/><rect x="30" y="37" width="60" height="10" rx="3" fill="#FFF3E0"/><rect x="30" y="52" width="60" height="10" rx="3" fill="#E8F5E9"/></svg></div><span class="illustration-label">Prepared</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Application Online</h3><p class="step-description">Instant e-PAN: incometax.gov.in, Aadhaar OTP, PDF in minutes. Form 49A/49AA: Protean or UTIITSL portal, paperless (Rs 101) or physical (Rs 107), documents uploaded, acknowledgment number generated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Application Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ACK Generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">e-Sign or Document Submission</h3><p class="step-description">Paperless: Aadhaar OTP e-sign, no physical docs needed (recommended). Physical: printed application with self-attested documents posted to processing centre (Delhi region) within 15 days of online submission.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> e-Signed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><text x="60" y="35" font-size="10" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">PAN</text><text x="60" y="52" font-size="8" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Verified</text></svg></div><span class="illustration-label">Authenticated</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">PAN Allotment and Card Dispatch</h3><p class="step-description">Protean/UTIITSL verifies application. e-PAN sent to registered email. Physical card dispatched to Gurugram address within 15 working days. Patron tracks using acknowledgment number and coordinates any query responses.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN Allotted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Card Dispatched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="88" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">10-digit</text></svg></div><span class="illustration-label">PAN Active</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-PAN Compliance Setup</h3><p class="step-description">PAN-Aadhaar linking (individuals). TAN registration for TDS via Form 49B. GST registration setup (GSTIN is PAN-based). Bank account documentation. IEC readiness for exporters. ITR filing calendar. PAN is the foundation - every registration references it.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Aadhaar Linked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TAN + GST Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Tax Identity Complete</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for PAN Registration in Gurugram</h2>
            <div class="content-text">
                
                <ul><li><strong>Individuals:</strong> Aadhaar (single document for instant e-PAN), or identity proof + address proof + DOB proof + photograph for Form 49A</li><li><strong>Trust:</strong> Trust deed (Sub-Registrar Gurugram) + PAN of trustees + registered office address proof</li><li><strong>Society:</strong> Registration certificate (Haryana Societies Act 2012) + MOA + PAN of governing body + address proof</li><li><strong>Partnership:</strong> Partnership deed + PAN of all partners + firm's Gurugram address proof</li><li><strong>LLP:</strong> COI from RoC Delhi + LLP Agreement + PAN of designated partners (if not auto-allotted)</li><li><strong>HUF:</strong> Affidavit by Karta with HUF name + Karta's PAN + address proof</li><li><strong>Foreign National:</strong> Form 49AA + Passport (apostilled/notarised) + photograph</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Gurugram tip:</strong> For instant e-PAN, only Aadhaar with linked mobile number is needed - no other documents. This is the fastest path for individual founders. For entities, ensure the business registration document name matches the PAN application exactly to avoid rejection.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common PAN Registration Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Name Mismatch (Aadhaar vs Application)</td><td>Most common rejection. Even minor spelling differences, missing middle names, or abbreviations cause failure</td><td>Patron verifies Aadhaar name before filing. Recommends Aadhaar correction if needed</td></tr>
                        <tr><td>Trust/Society Wrong Category</td><td>Trusts select wrong category. Trusts = 'Trust'. Societies (Haryana Act 2012) = 'AOP'. Wrong category delays processing</td><td>Correct category ensured based on entity registration certificate</td></tr>
                        <tr><td>SPICe+ PAN Not Reflecting</td><td>PAN allotted via SPICe+ but not on IT portal or contains errors (wrong name/address)</td><td>Verified immediately post-incorporation. Correction filed if needed</td></tr>
                        <tr><td>PAN-Aadhaar Non-Linking</td><td>Non-linked PAN becomes inoperative. Cannot file ITR, receive refunds. TDS at higher rate. Rs 1,000 penalty</td><td>Linking status checked and completed. Late fee payment assistance</td></tr>
                        <tr><td>Duplicate PAN</td><td>No person can hold more than one PAN. Rs 10,000 penalty under Section 272B. Often from different life stages</td><td>Duplicates identified proactively. Surrender applications filed</td></tr>

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
            <h2 class="section-title">PAN Registration Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Instant e-PAN (IT Portal, Aadhaar)</td><td>FREE</td></tr>
                        <tr><td>New PAN - Paperless (Protean/UTIITSL)</td><td>Rs 101 (incl. GST)</td></tr>
                        <tr><td>New PAN - Physical Mode</td><td>Rs 107 (incl. GST)</td></tr>
                        <tr><td>PAN Dispatch Outside India (NRI/Foreign)</td><td>Rs 1,011 (incl. GST)</td></tr>
                        <tr><td>PAN Correction/Update</td><td>Rs 101 (paperless) / Rs 107 (physical)</td></tr>
                        <tr><td>PAN-Aadhaar Linking (Late Fee)</td><td>Rs 1,000 (on IT portal)</td></tr>
                        <tr><td>Patron Fee (PAN Registration)</td><td>From Rs 999 (form filing + doc prep + tracking)</td></tr>
                        <tr><td>Patron Fee (PAN + TAN Bundle)</td><td>From Rs 1,999 (PAN + TAN + PAN-Aadhaar linking)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PAN Registration in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Instant e-PAN (IT Portal)</td><td>Under 10 minutes</td></tr><tr><td>Paperless Online (Protean/UTIITSL)</td><td>4-7 working days</td></tr><tr><td>Physical Mode (Protean/UTIITSL)</td><td>10-15 working days</td></tr><tr><td>SPICe+ Auto-Allotment (Companies)</td><td>At incorporation (same day as COI)</td></tr><tr><td>TAN Registration (Form 49B)</td><td>7-15 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> PAN is the foundational identity without which no business compliance is possible. Without PAN: no GST (GSTIN is PAN-based), no bank account, no IEC, no ITR, no TDS compliance. If PAN is inoperative (non-linked with Aadhaar), TDS is deducted at higher rate and you cannot file ITR for refunds. Duplicate PANs attract Rs 10,000 penalty. For Gurugram startups, PAN delay cascades - every day without PAN is a day without GST, bank account, and invoicing ability.</p>

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
            <h2 class="section-title">Why Choose Patron for PAN Registration in Gurugram</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">All Entity Types Covered</h3><p class="feature-desc">Individual, company (SPICe+ verification), LLP, partnership, trust (Sub-Registrar Gurugram), society (Haryana Act 2012), HUF, NRI, foreign nationals. Correct category every time.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Bundled Tax Identity</h3><p class="feature-desc">PAN + TAN + GST registration setup as one engagement. The complete tax identity foundation for your Gurugram business. No coordination gaps between separate filings.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">PAN-Aadhaar + Duplicate Resolution</h3><p class="feature-desc">Linking verification and completion. Late fee handling. Duplicate PAN identification and surrender. Inoperative PAN reactivation. Zero compliance gaps.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Gurugram Office + Track Record</h3><p class="feature-desc">Golf Course Extension Road. In-person document review and application assistance. 10,000+ businesses, 4.9 Google rating, 50,000+ documents filed, 15+ years.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across Gurugram</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle." - Startup Founder, Pune</p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone. Offices in Pune, Mumbai, Delhi, Gurugram.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN vs TAN - When Do You Need What?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>PAN</th><th>TAN</th></tr></thead>
                    <tbody>
                        <tr><td>Full Form</td><td>Permanent Account Number</td><td>Tax Deduction Account Number</td></tr>
                        <tr><td>Purpose</td><td>Universal tax identity for all transactions</td><td>Identity for TDS deduction/TCS collection</td></tr>
                        <tr><td>Who Needs It</td><td>Every individual and entity</td><td>Only entities deducting TDS or collecting TCS</td></tr>
                        <tr><td>Form</td><td>49A (Indian) / 49AA (Foreign)</td><td>49B</td></tr>
                        <tr><td>Fee</td><td>Rs 101-107 / Free (instant e-PAN)</td><td>Rs 65</td></tr>
                        <tr><td>Mandatory For</td><td>ITR, GST, bank account, IEC, all financial transactions</td><td>TDS returns (Form 26Q/24Q), TCS collection</td></tr>
                        <tr><td>Gurugram Context</td><td>Every business and individual needs PAN first</td><td>Employers, service buyers above TDS threshold</td></tr>

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
                
                <p>Patron offers complete tax identity and business registration in Gurugram:</p><ul>
                    <li><a href="/pan-registration">PAN Registration in India</a></li>
                    <li><a href="/gst-registration/gurugram">GST Registration in Gurugram</a></li>
                    <li><a href="/private-limited-company-registration/gurugram">Pvt Ltd Registration in Gurugram</a></li>
                    <li><a href="/llp-incorporation/gurugram">LLP Registration in Gurugram</a></li>
                    <li><a href="/ngo-registration/gurugram">NGO Registration in Gurugram</a></li>
                    <li><a href="/accounting-services/gurugram">Accounting Services in Gurugram</a></li>
                    <li><a href="/iec-registration/gurugram">IEC Registration in Gurugram</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for PAN Registration in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>Income Tax Act, 1961 - Section 139A (PAN allotment), Section 139AA (PAN-Aadhaar linking), Section 272B (Rs 10,000 penalty for duplicate/incorrect PAN)</li>
                    <li>Form 49A (Indian), Form 49AA (Foreign), Form 49B (TAN)</li>
                    <li>SPICe+ integration - auto PAN/TAN for companies via MCA/RoC Delhi</li></ul>
                <p><strong>Key Portals:</strong></p><ul>
                    <li><a href="https://incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> - Instant e-PAN + PAN-Aadhaar linking</li>
                    <li>onlineservices.nsdl.com (Protean) / pan.utiitsl.com (UTIITSL) - Form 49A/49AA filing</li></ul>
                <p><strong>Penalties:</strong> Section 272B: Rs 10,000 for duplicate PAN or failure to obtain. Section 139AA: Rs 1,000 for late PAN-Aadhaar linking. Inoperative PAN: higher TDS rate, no ITR/refunds.</p>

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
                    <h2 class="faq-expanded__title">FAQs - PAN Registration in Gurugram</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about PAN registration in Gurugram.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PAN Registration in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I apply for PAN in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Individuals with Aadhaar get instant free e-PAN on incometax.gov.in in under 10 minutes. Business entities file Form 49A on Protean or UTIITSL portal with identity, address, and business proof. Fee Rs 101 (paperless) or Rs 107 (physical). Physical card reaches Gurugram in 15 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the fee for PAN registration?</h3>
                        <div class="faq-expanded__a"><p>Instant e-PAN free for individuals with Aadhaar. Protean/UTIITSL: Rs 101 (paperless), Rs 107 (physical). Outside India dispatch Rs 1,011. Reprint Rs 50. Through Patron from Rs 999 all-inclusive with document preparation and tracking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What documents are needed for PAN?</h3>
                        <div class="faq-expanded__a"><p>Individuals: Aadhaar alone for instant e-PAN. Form 49A: identity proof, address proof, DOB proof, photograph. Entities: business registration proof (trust deed, society certificate, partnership deed, COI), Gurugram address proof, signatory identity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does PAN take?</h3>
                        <div class="faq-expanded__a"><p>Instant e-PAN: under 10 minutes. Paperless online: 4-7 working days. Physical mode: 10-15 working days. Companies via SPICe+ get PAN at incorporation (same day as COI). Patron recommends paperless with Aadhaar e-Sign for fastest processing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is PAN auto-allotted to companies?</h3>
                        <div class="faq-expanded__a"><p>Yes. Companies incorporated via SPICe+ through RoC Delhi receive PAN automatically. No separate application needed. TAN also auto-allotted. Patron verifies the auto-allotted PAN post-incorporation and files correction if details are incorrect.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between PAN and TAN?</h3>
                        <div class="faq-expanded__a"><p>PAN is universal tax identity for all financial transactions, ITR, GST, bank accounts. TAN is specifically for entities deducting TDS or collecting TCS - for filing TDS returns. Every business needs PAN; only those deducting TDS need TAN. Patron bundles both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can NRIs and foreigners get PAN?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs apply through Form 49A (same as Indian citizens). Foreign nationals through Form 49AA using passport as identity and address proof. Foreign directors of Gurugram companies need PAN for DIN compliance and ITR. Patron handles Form 49AA including apostilled documents.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is PAN-Aadhaar linking mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes, for individuals under Section 139AA. Non-linked PAN becomes inoperative - cannot file ITR, receive refunds, or use for financial transactions. TDS deducted at higher rate. Rs 1,000 penalty for late linking. Patron checks status and completes linking.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>PAN card kitne mein banta hai?</strong> Instant e-PAN free Aadhaar se. Online Rs 101. Physical Rs 107. Patron Rs 999 se start.</p><p><strong>Company ko alag se PAN apply karna padta hai?</strong> Nahi. SPICe+ se PAN aur TAN auto allot hote hain RoC Delhi se.</p><p><strong>PAN-Aadhaar link nahi kiya toh?</strong> PAN inoperative. ITR nahi file kar paoge, refund nahi, TDS zyada katega. Rs 1,000 penalty.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Your PAN in Gurugram - The Foundation for Every Business Compliance</h2>
            <div class="content-text">
                
                <p>Without PAN: no GST, no bank account, no IEC, no ITR, no TDS compliance. Inoperative PAN (non-linked Aadhaar) means higher TDS and no refunds. Duplicate PAN = Rs 10,000 penalty. For startups, every day without PAN cascades into delayed GST, bank account, and invoicing.</p><p><strong>Start now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get PAN Registration in Gurugram with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">PAN registration is the first and most foundational compliance step for every business and individual in Gurugram. The 10-digit Permanent Account Number is the master key to GST, bank accounts, IEC, ITR, TDS, and every financial transaction.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted PAN for all entity types - companies (SPICe+ verification), LLPs, trusts, societies, individuals, and foreign nationals. Bundled with TAN, GST setup, and PAN-Aadhaar compliance. 15+ years, 10,000+ businesses served.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PAN%20Registration%20in%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides PAN registration in 8 major cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/pan-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pan-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pan-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/pan-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/pan-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/pan-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/pan-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end tax identity and business registration in Gurugram</div><div class="pa-cross-grid"><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/llp-incorporation/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/ngo-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/iec-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Freshness Tier 2) to incorporate PAN fee updates, Aadhaar linking deadline changes, SPICe+ integration updates, and IT Department procedural changes. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
