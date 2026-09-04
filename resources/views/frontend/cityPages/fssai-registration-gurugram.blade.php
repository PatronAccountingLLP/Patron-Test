
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
    <title>FSSAI Registration Gurugram - Process, Fees & FoSCoS</title>
    <meta name="description" content="CA-assisted FSSAI registration in Gurugram. Basic, state, central food licence via FOSCOS. Serving Cyber Hub, Sohna Road, Manesar food businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/fssai-registration/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FSSAI Registration Gurugram - Process, Fees & FoSCoS">
    <meta property="og:description" content="CA-assisted FSSAI registration in Gurugram. Basic, state, central food licence via FOSCOS. Serving Cyber Hub, Sohna Road, Manesar food businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/fssai-registration/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FSSAI Registration Gurugram - Process, Fees & FoSCoS">
    <meta name="twitter:description" content="CA-assisted FSSAI registration in Gurugram. Basic, state, central food licence via FOSCOS. Serving Cyber Hub, Sohna Road, Manesar food businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FSSAI Registration in Gurugram",
      "description": "CA-assisted FSSAI registration in Gurugram. Basic, state, central food licence via FOSCOS. Serving Cyber Hub, Sohna Road, Manesar food businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/fssai-registration/gurugram",
      "serviceType": "FSSAI Registration in Gurugram",
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
        "url": "https://www.patronaccounting.com/fssai-registration/gurugram",
        "price": "2999"
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
          "name": "FSSAI Registration in India: Process, Fees and Types",
          "item": "https://www.patronaccounting.com/fssai-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FSSAI Registration in Gurugram",
          "item": "https://www.patronaccounting.com/fssai-registration/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which FSSAI licence for a Gurugram restaurant?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most Gurugram restaurants exceed Rs 12 lakh turnover requiring State Licence. Filed on FOSCOS, processed by Haryana Food Safety Dept with premises inspection. Multi-outlet QSR chains need Central Licence. Patron determines category and preps for inspection."
          }
        },
        {
          "@type": "Question",
          "name": "Is FSSAI mandatory for cloud kitchens?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Since 2026, Zomato and Swiggy require State Licence even for low-turnover cloud kitchens. Each brand in a shared kitchen needs a separate licence. Patron manages multi-brand filings with correct geo-tagging and shared premises documentation."
          }
        },
        {
          "@type": "Question",
          "name": "How much does FSSAI cost in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Through Patron: Basic from Rs 2,999, State from Rs 5,999, Central from Rs 9,999. All-inclusive with govt fees, FOSCOS filing, bundled GST and Shop Act. Government fees alone: Rs 100/yr Basic, Rs 2,000-5,000 State, Rs 7,500 Central."
          }
        },
        {
          "@type": "Question",
          "name": "How long does FSSAI take in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Basic 7-10 days (no inspection). State 15-30 days (with Haryana Food Safety Dept inspection). Central 30-60 days. Water test runs parallel at 5-10 days. Patron coordinates all simultaneously to minimise total time."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty without FSSAI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 5 lakh fine under Section 63 and imprisonment up to 6 months under Section 64 of FSS Act 2006. Zomato, Swiggy, Amazon will not list without valid FSSAI. Haryana Food Safety Dept can order closure."
          }
        },
        {
          "@type": "Question",
          "name": "Can I sell on Zomato without FSSAI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Both Zomato and Swiggy mandate valid FSSAI. Since 2026, State Licence is required even for low-turnover cloud kitchens. The 14-digit FSSAI number must be displayed on the platform listing."
          }
        },
        {
          "@type": "Question",
          "name": "Do home bakers need FSSAI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Minimum Basic Registration at Rs 100/yr government fee. If selling online via Instagram, WhatsApp, or platforms, FSSAI is mandatory. Patron handles Basic Registration in 7-10 days from Rs 2,999 all-inclusive."
          }
        },
        {
          "@type": "Question",
          "name": "What documents for State FSSAI in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN, Aadhaar, business proof, Gurugram premises proof with DHBVN electricity bill, food product list, NABL water test report, FSMS plan, premises layout, machinery list, raw material sources, geo-tagged photos (mandatory 2026, GPS within 50m). Patron coordinates everything. Quick Answers FSSAI licence kitne din mein milta hai? Basic 7-10 din. State 15-30 din inspection ke saath. Central 30-60 din. Cloud kitchen ke liye konsa FSSAI? State Licence. 2026 mein Zomato/Swiggy dono State maangte hain. Bina FSSAI ke kya hoga? Rs 5 lakh fine + 6 months jail. Zomato/Swiggy listing bhi nahi hogi."
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
                        FSSAI Registration in Gurugram: CA-Assisted Food Licence Online
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business proof, address proof, food product list, water test report</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> FSSAI registration starts from Rs 2,999 (all-inclusive)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every FBO - restaurants, cloud kitchens, manufacturers, caterers, home food businesses</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Basic 7-10 days | State 15-30 days | Central 30-60 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Registration%20in%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FSSAI Registration in Gurugram',
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
    'ctaText'    => 'Patron has helped 10,000+ businesses with food licensing, FSSAI compliance, and food business setup. Gurugram food operators trust us for CA-managed FSSAI with inspection readiness.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Basic vs State vs Central</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Registration in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FSSAI Registration in Gurugram Services at a Glance</strong></p>
                    <p>FSSAI registration is the mandatory food safety licence under the Food Safety and Standards Act, 2006 for every food business operator. Gurugram's food ecosystem - from DLF Cyber Hub restaurants and Sector 29 to Sohna Road cloud kitchens and Manesar IMT manufacturers - requires the correct FSSAI licence to operate legally. Three categories: Basic (< Rs 12 lakh), State (Rs 12L-20 crore), Central (> Rs 20 crore). Filed on FOSCOS portal. Penalty without FSSAI: Rs 5 lakh fine + 6 months imprisonment.</p>
                </div>
                <p>Gurugram is NCR's most vibrant F&B market. DLF Cyber Hub has 50+ restaurants. Sector 29 is a landmark food market. Sohna Road hosts hundreds of cloud kitchens serving Zomato/Swiggy. Manesar IMT supplies food products across North India. Every one of these FBOs needs FSSAI - operating without one risks Rs 5 lakh fine under Section 63 of FSS Act. Learn more about <a href="/fssai-registration">FSSAI Registration across India</a>.</p>
                <p>State Licences for Gurugram are processed by Haryana Food Safety Department. Patron's Gurugram office on Golf Course Extension Road manages the complete process via FOSCOS and bundles it with <a href="/gst-registration/gurugram">GST Registration</a> and Haryana Shop Act - because a food business needs all three to operate legally. Also see <a href="/accounting-services/gurugram">Accounting Services in Gurugram</a> for food business bookkeeping.</p>
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
                <h2 class="section-title">What Is FSSAI Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>FSSAI registration is the mandatory food safety certification under the Food Safety and Standards Act, 2006 that issues a 14-digit licence number to food business operators, certifying that their manufacturing, processing, storage, distribution, or sale of food meets safety and quality standards prescribed by FSSAI.</p>
                    <p>For Gurugram food businesses, the 14-digit FSSAI number must be printed on all food packaging and displayed at premises. Cloud kitchens on Sohna Road cannot list on Zomato or Swiggy without valid FSSAI. Restaurants in DLF Cyber Hub must display it. Manufacturers in Manesar must print it on every label. Caterers serving Cyber City corporates must hold a valid licence.</p>
                    <p>When a CA firm manages your FSSAI, the correct licence category is determined from the start - avoiding costly upgrades, rejections, or non-compliance penalties. Filed on the <a href="https://foscos.fssai.gov.in/" target="_blank" rel="noopener">FOSCOS portal</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FSSAI Registration in Gurugram:</strong></p>
                    <p><strong>FBO:</strong> Food Business Operator - any person/entity in manufacturing, processing, packaging, storage, transport, distribution, or sale of food.</p>
                    <p><strong>FOSCOS:</strong> Food Safety Compliance System - online portal (foscos.fssai.gov.in) for all FSSAI filings.</p>
                    <p><strong>Basic Registration (Form A):</strong> Turnover below Rs 12 lakh. Home bakers, hawkers, small stalls. No inspection. Rs 100/year.</p>
                    <p><strong>State Licence (Form B):</strong> Rs 12 lakh to Rs 20 crore. Restaurants, cloud kitchens, mid-size manufacturers. Haryana Food Safety Dept.</p>
                    <p><strong>Central Licence (Form B):</strong> Above Rs 20 crore or multi-state/import-export. FSSAI HQ. Rs 7,500/year.</p>
                    <p><strong>Section 63 FSS Act:</strong> Penalty for operating without FSSAI: Rs 5 lakh fine + 6 months imprisonment.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Registration in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Gurugram F&B Hub</span>
                        <strong>FSSAI Licensed</strong>
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
            <h2 class="section-title">Who Needs FSSAI Registration in Gurugram?</h2>
            <div class="content-text">
                
                <p><strong>Restaurants/Cafes/Bars (Cyber Hub, Sector 29, Ambience Mall):</strong> State FSSAI Licence - virtually all exceed Rs 12 lakh. Multi-outlet QSR chains need Central. Inspection by Haryana Food Safety Dept.</p>
                <p><strong>Cloud Kitchens (Sohna Road, Golf Course Ext, Sector 46):</strong> State Licence mandatory from day one - since 2026 Zomato/Swiggy require it even for low turnover. Each brand in shared kitchen needs separate licence.</p>
                <p><strong>Manufacturers (Manesar IMT, Udyog Vihar):</strong> State or Central Licence. Production above 2 MT/day or turnover > Rs 20 crore = Central. Must print 14-digit number on every label.</p>
                <p><strong>Home Bakers/Tiffin/Pickle (DLF, Sushant Lok, South City):</strong> Minimum Basic Registration (Rs 100/yr). Selling online via Instagram/WhatsApp/platforms makes FSSAI mandatory.</p>
                <p><strong>Caterers, Food Delivery Startups, Importers/Exporters:</strong> State or Central based on scale and geography. Under Section 31(1) FSS Act, no person shall carry on food business without licence.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Registration Services Included by Patron in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Licence Category Assessment</td><td>CA determines correct FSSAI category based on turnover, capacity, business type, and platform requirements (Zomato/Swiggy State mandate)</td></tr>
                        <tr><td>FOSCOS Filing (Form A/B)</td><td>Complete filing on <a href="https://foscos.fssai.gov.in/" target="_blank" rel="noopener">FOSCOS</a> with all documents, declarations, and fee payment. Geo-tagged photos ensured</td></tr>
                        <tr><td>Document Preparation</td><td>FSMS plan (CA-drafted), water test coordination (NABL lab), premises blueprint, equipment list, food product list, raw material sources</td></tr>
                        <tr><td>Haryana Food Safety Liaison</td><td>Coordination for State Licence inspection. Pre-inspection checklist covering hygiene, equipment, storage, water, pest control, employee health</td></tr>
                        <tr><td>GST Registration (Bundled)</td><td>Filed with <a href="/gst-registration/gurugram">GST Commissionerate Gurugram</a> as part of FSSAI package</td></tr>
                        <tr><td>Haryana Shop Act (Bundled)</td><td>Under Haryana Shops and Commercial Establishments Act, 1958</td></tr>
                        <tr><td>Renewal and Modification</td><td>Timely renewal (Rs 100/day late penalty avoidance). Address/product modifications on FOSCOS</td></tr>
                        <tr><td>Food Business Accounting</td><td>Setup on <a href="/zoho-books-accounting">Zoho Books</a> or Tally with food-specific chart of accounts and GST-compliant invoicing</td></tr>

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
            <h2 class="section-title">FSSAI Registration Process in Gurugram - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete FSSAI lifecycle - from category assessment to post-registration compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Correct FSSAI Licence Category</h3><p class="step-description">CA reviews business type, turnover, capacity, geography. Home baker in Sushant Lok under Rs 12L = Basic. Restaurant in Cyber Hub at Rs 50L = State. Multi-state QSR at Rs 25 crore = Central. Cloud kitchens: State Licence from day one (platform requirement since 2026).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Category Assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scope Defined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><text x="37" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">B</text><rect x="55" y="25" width="25" height="35" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="67" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S</text><rect x="85" y="25" width="15" height="35" rx="3" fill="#E8EDF4" stroke="#14365F" stroke-width="0.5"/><text x="92" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">C</text></svg></div><span class="illustration-label">Category Set</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Collect and Prepare Documents</h3><p class="step-description">Basic: PAN, Aadhaar, address proof, photo, food list. State/Central: additionally FSMS plan, NABL water test report, premises blueprint, machinery list with capacity, product-wise list, raw material sources, geo-tagged premises photos (mandatory 2026, GPS within 50m). Patron coordinates water testing and blueprints.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs Ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Water Test Done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="10" rx="3" fill="#E8EDF4"/><rect x="30" y="37" width="60" height="10" rx="3" fill="#FFF3E0"/><rect x="30" y="52" width="60" height="10" rx="3" fill="#E8F5E9"/></svg></div><span class="illustration-label">Prepared</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File on FOSCOS Portal</h3><p class="step-description">Form A (Basic) or Form B (State/Central) on foscos.fssai.gov.in. Fees: Rs 100/yr Basic, Rs 2,000-5,000/yr State, Rs 7,500/yr Central. Licence for 1-5 years. Patron ensures geo-tagged photos match Gurugram location correctly.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FOSCOS Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fees Paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Under Processing</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Inspection (State/Central)</h3><p class="step-description">Haryana Food Safety Department schedules premises inspection for State Licence. Food Safety Officer verifies hygiene, equipment, storage, water quality, pest control, employee health records. Patron provides pre-inspection checklist. Basic Registration: no inspection needed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Inspection Clear</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FSO Approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><text x="60" y="35" font-size="10" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">FSSAI</text><text x="60" y="52" font-size="8" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Inspected</text></svg></div><span class="illustration-label">Inspected</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive FSSAI Licence Certificate</h3><p class="step-description">FOSCOS issues certificate with 14-digit number, category, validity, permitted food categories. Basic: 7-10 days. State: 15-30 days (with inspection). Central: 30-60 days. Display at premises and print on all food packaging.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate Ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 14-Digit Number</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="88" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">14-digit</text></svg></div><span class="illustration-label">Licensed</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Registration Compliance</h3><p class="step-description">Annual return on FOSCOS. Renewal 30 days before expiry (Rs 100/day late fee). GST registration + Haryana Shop Act completed. Food business accounting set up on Zoho Books or Tally with food-specific chart of accounts and GST-compliant invoicing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance Active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Renewal Tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Fully Operational</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FSSAI Registration in Gurugram</h2>
            <div class="content-text">
                
                <ul><li>PAN Card of FBO/proprietor/directors</li><li>Aadhaar Card for identity verification</li><li>Business Registration Proof - Partnership deed, COI, GST, Udyam as applicable</li><li>Premises Proof (Gurugram) - Rent agreement + DHBVN electricity bill. Cloud kitchens: sub-lease from kitchen operator</li><li>Food Product List - complete items manufactured/processed/stored/sold</li><li>Water Test Report - NABL-accredited lab (State/Central). Patron coordinates</li><li>FSMS Plan - hygiene, pest control, waste management, employee health (State/Central)</li><li>Premises Layout / Floor Plan (State/Central)</li><li>Geo-tagged Photos - mandatory 2026, GPS within 50m of Gurugram address</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Cloud kitchen tip:</strong> Operators on Sohna Road using shared kitchen space need sub-lease agreement plus kitchen operator's own FSSAI number. Each brand needs a separate FSSAI licence. Patron manages multi-brand filings with correct documentation.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FSSAI Registration Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Incorrect Category for Cloud Kitchens</td><td>Cloud kitchens apply for Basic (Rs 100/yr) but Zomato/Swiggy now require State Licence since 2026</td><td>Patron identifies correct category upfront. State Licence from day one for cloud kitchens</td></tr>
                        <tr><td>Geo-Tagging Rejection</td><td>2026 mandatory geo-tagged photos. GPS mismatch = auto-rejection. Shared spaces and large complexes face this frequently</td><td>Correct geo-tagging verified before filing. GPS within 50m of registered address</td></tr>
                        <tr><td>Water Test Delays</td><td>NABL lab appointment + report = 5-10 days. Starting late delays entire application</td><td>Water testing coordinated as first step, parallel with document preparation</td></tr>
                        <tr><td>Inspection Preparedness</td><td>Haryana Food Safety Dept inspects for State Licence. Many fail first inspection - pest control, employee health, waste disposal</td><td>Pre-inspection checklist provided covering all FSO verification points</td></tr>
                        <tr><td>Multi-Brand Multi-Licence</td><td>Multiple brands from one cloud kitchen each need separate FSSAI. Shared premises must document separate production/storage</td><td>Multi-brand filings managed with separate licence applications and shared premises documentation</td></tr>

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
            <h2 class="section-title">FSSAI Registration Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (FSSAI)</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Basic Registration (Patron all-inclusive)</td><td>From Rs 2,999 (govt fee Rs 100/yr included)</td></tr>
                        <tr><td>State Licence (Patron all-inclusive)</td><td>From Rs 5,999 (govt fee Rs 2,000-5,000/yr included)</td></tr>
                        <tr><td>Central Licence (Patron all-inclusive)</td><td>From Rs 9,999 (govt fee Rs 7,500/yr included)</td></tr>
                        <tr><td>GST Registration</td><td>Bundled with FSSAI package</td></tr>
                        <tr><td>Haryana Shop Act Registration</td><td>Bundled with FSSAI package</td></tr>
                        <tr><td>FSMS Plan (State/Central)</td><td>CA-drafted, included in package</td></tr>
                        <tr><td>Water Test Coordination (State/Central)</td><td>Patron coordinates NABL lab</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FSSAI Registration in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Registration Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Registration</td><td>7-10 days (no inspection)</td></tr><tr><td>State Licence</td><td>15-30 days (with Haryana FSO inspection)</td></tr><tr><td>Central Licence</td><td>30-60 days</td></tr><tr><td>Water Test (parallel)</td><td>5-10 days</td></tr><tr><td>Document Preparation</td><td>1-5 days depending on category</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Every day without FSSAI = legal non-compliance under Section 31(1) FSS Act. Penalty: Rs 5 lakh fine + 6 months imprisonment. Zomato/Swiggy/Amazon will not list without valid FSSAI. Late renewal = Rs 100/day. Cloud kitchens need State Licence from day one (platform requirement 2026). Register before your next delivery order.</p>

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
            <h2 class="section-title">Why Choose Patron for FSSAI Registration in Gurugram</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram F&B Expertise</h3><p class="feature-desc">Golf Course Extension Road office. Cloud kitchen multi-brand licensing, shared kitchen documentation, geo-tagging expertise, Haryana Food Safety inspection readiness.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">CA-Managed, Not Just Form Filling</h3><p class="feature-desc">Correct category assessment, FSMS plan drafted by CA, tax-compliant food business setup. Not generic form filing - proper compliance from a CA who understands Gurugram's food business.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Bundled GST + Shop Act + Accounting</h3><p class="feature-desc">FSSAI + GST + Haryana Shop Act in one package. Food business accounting on Zoho Books/Tally. Because a food business needs all three to operate legally.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Track Record</h3><p class="feature-desc">10,000+ businesses served. 4.9 Google rating. 50,000+ documents filed. 15+ years. Offices in Pune, Mumbai, Delhi, Gurugram. Pre-inspection checklist for every State Licence.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Food Businesses Across Gurugram</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone. Offices in Pune, Mumbai, Delhi, Gurugram.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Basic vs State vs Central FSSAI for Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Basic</th><th>State</th><th>Central</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover</td><td>< Rs 12 lakh</td><td>Rs 12L - Rs 20 crore</td><td>> Rs 20 crore</td></tr>
                        <tr><td>Form</td><td>A</td><td>B</td><td>B</td></tr>
                        <tr><td>Authority</td><td>State Food Safety</td><td>Haryana Food Safety Dept</td><td>FSSAI HQ</td></tr>
                        <tr><td>Inspection</td><td>No</td><td>Yes (Haryana FSO)</td><td>Yes</td></tr>
                        <tr><td>Govt Fee/Year</td><td>Rs 100</td><td>Rs 2,000-5,000</td><td>Rs 7,500</td></tr>
                        <tr><td>Best For Gurugram</td><td>Home bakers (DLF, Sushant Lok)</td><td>Restaurants (Cyber Hub), Cloud kitchens (Sohna Road)</td><td>Multi-state chains, Manesar manufacturers, importers</td></tr>

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
                
                <p>Patron offers complete food business compliance in Gurugram:</p><ul>
                    <li><a href="/fssai-registration">FSSAI Registration in India</a></li>
                    <li><a href="/gst-registration/gurugram">GST Registration in Gurugram</a></li>
                    <li><a href="/accounting-services/gurugram">Accounting Services in Gurugram</a></li>
                    <li><a href="/private-limited-company-registration/gurugram">Pvt Ltd Registration in Gurugram</a></li>
                    <li><a href="/trademark-registration/gurugram">Trademark Registration in Gurugram</a></li>
                    <li><a href="/shop-act-registration">Shop Act Registration</a></li>
                    <li><a href="/zoho-books-accounting">Zoho Books Accounting in Gurugram</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for FSSAI in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>Food Safety and Standards Act, 2006 - Section 31(1) (mandatory licence), Section 63 (Rs 5 lakh fine), Section 64 (6 months imprisonment)</li>
                    <li>FSS (Licensing) Regulations, 2011 - Categories, fees, forms, procedures</li>
                    <li>Schedule 4 - General hygienic and sanitary practices for FBOs</li>
                    <li>Haryana Shops and Commercial Establishments Act, 1958</li></ul>
                <p><strong>Key Portal:</strong></p><ul>
                    <li><a href="https://foscos.fssai.gov.in/" target="_blank" rel="noopener">FOSCOS</a> - foscos.fssai.gov.in - Online portal for all FSSAI filings</li></ul>
                <p><strong>Penalties:</strong> Late renewal = Rs 100/day. Operating without licence = Rs 5 lakh fine + 6 months jail. Annual return mandatory on FOSCOS.</p>

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
                    <h2 class="faq-expanded__title">FAQs - FSSAI Registration in Gurugram</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about FSSAI registration in Gurugram.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FSSAI Registration in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which FSSAI licence for a Gurugram restaurant?</h3>
                        <div class="faq-expanded__a"><p>Most Gurugram restaurants exceed Rs 12 lakh turnover requiring State Licence. Filed on FOSCOS, processed by Haryana Food Safety Dept with premises inspection. Multi-outlet QSR chains need Central Licence. Patron determines category and preps for inspection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is FSSAI mandatory for cloud kitchens?</h3>
                        <div class="faq-expanded__a"><p>Yes. Since 2026, Zomato and Swiggy require State Licence even for low-turnover cloud kitchens. Each brand in a shared kitchen needs a separate licence. Patron manages multi-brand filings with correct geo-tagging and shared premises documentation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does FSSAI cost in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Through Patron: Basic from Rs 2,999, State from Rs 5,999, Central from Rs 9,999. All-inclusive with govt fees, FOSCOS filing, bundled GST and Shop Act. Government fees alone: Rs 100/yr Basic, Rs 2,000-5,000 State, Rs 7,500 Central.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does FSSAI take in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Basic 7-10 days (no inspection). State 15-30 days (with Haryana Food Safety Dept inspection). Central 30-60 days. Water test runs parallel at 5-10 days. Patron coordinates all simultaneously to minimise total time.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty without FSSAI?</h3>
                        <div class="faq-expanded__a"><p>Rs 5 lakh fine under Section 63 and imprisonment up to 6 months under Section 64 of FSS Act 2006. Zomato, Swiggy, Amazon will not list without valid FSSAI. Haryana Food Safety Dept can order closure.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I sell on Zomato without FSSAI?</h3>
                        <div class="faq-expanded__a"><p>No. Both Zomato and Swiggy mandate valid FSSAI. Since 2026, State Licence is required even for low-turnover cloud kitchens. The 14-digit FSSAI number must be displayed on the platform listing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do home bakers need FSSAI?</h3>
                        <div class="faq-expanded__a"><p>Yes. Minimum Basic Registration at Rs 100/yr government fee. If selling online via Instagram, WhatsApp, or platforms, FSSAI is mandatory. Patron handles Basic Registration in 7-10 days from Rs 2,999 all-inclusive.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What documents for State FSSAI in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>PAN, Aadhaar, business proof, Gurugram premises proof with DHBVN electricity bill, food product list, NABL water test report, FSMS plan, premises layout, machinery list, raw material sources, geo-tagged photos (mandatory 2026, GPS within 50m). Patron coordinates everything.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>FSSAI licence kitne din mein milta hai?</strong> Basic 7-10 din. State 15-30 din inspection ke saath. Central 30-60 din.</p><p><strong>Cloud kitchen ke liye konsa FSSAI?</strong> State Licence. 2026 mein Zomato/Swiggy dono State maangte hain.</p><p><strong>Bina FSSAI ke kya hoga?</strong> Rs 5 lakh fine + 6 months jail. Zomato/Swiggy listing bhi nahi hogi.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get FSSAI for Your Gurugram Food Business Before the Next Inspection</h2>
            <div class="content-text">
                
                <p>Every day without FSSAI = legal non-compliance under Section 31(1). Rs 5 lakh fine + 6 months imprisonment. Zomato/Swiggy will not list. Haryana Food Safety Dept conducts regular inspections. Late renewal = Rs 100/day. Cloud kitchens: State Licence mandatory since 2026.</p><p><strong>Register now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get FSSAI Registration in Gurugram with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">FSSAI registration is mandatory for every food business in Gurugram - from home bakers in Sushant Lok to restaurants in DLF Cyber Hub to manufacturers in Manesar. Correct category, proper documentation, and inspection readiness are critical.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-managed FSSAI via FOSCOS, bundled with GST and Haryana Shop Act, plus food business accounting. 15+ years, 10,000+ businesses. Your food business, licensed correctly from day one.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Registration%20in%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FSSAI Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides FSSAI registration in 8 major cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/fssai-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fssai-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fssai-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/fssai-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/fssai-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/fssai-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/fssai-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end food business and compliance registration in Gurugram</div><div class="pa-cross-grid"><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/trademark-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/payroll-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to incorporate FSSAI fee updates, FOSCOS portal changes, Haryana Food Safety Dept inspection requirements, and platform listing mandate changes. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
