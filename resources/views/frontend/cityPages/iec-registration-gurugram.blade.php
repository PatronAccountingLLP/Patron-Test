
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>IEC Registration Gurugram - DGFT, Fees & Export Code</title>
    <meta name="description" content="CA-assisted IEC registration in Gurugram. Import export code from DGFT. Rs 500 govt fee. 1-3 days. Manufacturers, IT exporters, traders. Call +91 945 945 6700.">
    <link rel="canonical" href="/iec-registration/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IEC Registration Gurugram - DGFT, Fees & Export Code">
    <meta property="og:description" content="CA-assisted IEC registration in Gurugram. Import export code from DGFT. Rs 500 govt fee. 1-3 days. Manufacturers, IT exporters, traders. Call +91 945 945 6700.">
    <meta property="og:url" content="/iec-registration/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IEC Registration Gurugram - DGFT, Fees & Export Code">
    <meta name="twitter:description" content="CA-assisted IEC registration in Gurugram. Import export code from DGFT. Rs 500 govt fee. 1-3 days. Manufacturers, IT exporters, traders. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "IEC Registration in Gurugram",
      "description": "CA-assisted IEC registration in Gurugram. Import export code from DGFT. Rs 500 govt fee. 1-3 days. Manufacturers, IT exporters, traders. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/iec-registration/gurugram",
      "serviceType": "IEC Registration in Gurugram",
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
        "url": "https://www.patronaccounting.com/iec-registration/gurugram",
        "price": "500"
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
          "name": "IEC Registration in Gurugram",
          "item": "https://www.patronaccounting.com/iec-registration/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I get IEC in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Register on dgft.gov.in, file Form ANF-2A with PAN, Aadhaar, business proof, Gurugram address, and bank details. Pay Rs 500 govt fee. IEC issued 1-3 working days. Patron's Gurugram office handles complete filing plus post-IEC AD Code and ICEGATE registration."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of IEC registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fee Rs 500 (one-time, lifetime). Patron IEC-only from Rs 1,999. Export-readiness package from Rs 7,999 including IEC + AD Code + ICEGATE + GST LUT + RCMC guidance - recommended for businesses planning active import or export."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for IEC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN card of entity, Aadhaar of proprietor/directors, business registration proof, Gurugram address proof (rent agreement + electricity bill), cancelled cheque or bank certificate, passport photo, and DSC for companies/LLPs. Patron prepares to DGFT specifications."
          }
        },
        {
          "@type": "Question",
          "name": "How long does IEC registration take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IEC issued 1-3 working days from DGFT submission. Complete export-readiness with AD Code, ICEGATE, and LUT takes 7-15 working days. Start at least 3 weeks before first planned shipment to account for AD Code and ICEGATE registration time."
          }
        },
        {
          "@type": "Question",
          "name": "Is IEC mandatory for IT services export?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not mandatory for all services exports but required for Foreign Trade Policy benefits like export incentive schemes. Banks processing large inward remittances may request IEC. For Gurugram IT companies regularly receiving foreign payments, Patron recommends obtaining IEC proactively."
          }
        },
        {
          "@type": "Question",
          "name": "What is the annual IEC update?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every IEC holder must update details on DGFT portal between April 1 and June 30 every year - even if nothing has changed. Failure results in IEC deactivation and Denied Entity List (DEL) status. No import, export, or DGFT benefits possible until reactivated."
          }
        },
        {
          "@type": "Question",
          "name": "What is AD Code registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AD Code is your bank's unique code registered at each customs port for import/export. Links bank account to customs system for duty payments and export proceeds. Without AD Code, shipment cannot be processed even with valid IEC. Patron registers at ICD Garhi Harsaru and Delhi Air Cargo."
          }
        },
        {
          "@type": "Question",
          "name": "Does IEC have lifetime validity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. IEC is valid for the lifetime of the entity and does not need renewal. However, the mandatory annual update (Apr 1 - Jun 30) must be completed every year to keep IEC active. Missed update leads to deactivation but can be reversed upon successful update. Quick Answers IEC registration kitne mein hota hai? Govt fee Rs 500, one-time. Patron Rs 1,999 se start. Export readiness package Rs 7,999 se (AD Code, ICEGATE, LUT sab included). IEC kitne din mein milta hai? 1-3 working days DGFT se. Pura export-ready setup 7-15 days. Kya har saal IEC renew karna padta hai? Renew nahi, lekin annual update April-June DGFT portal par zaruri hai. Nahi kiya toh deactivate ho jayega."
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
                        IEC Registration in Gurugram: Import Export Code for Manufacturers, IT Exporters and Traders
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business proof, address proof, bank account details, cancelled cheque</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 500 government fee (one-time, lifetime validity)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any entity - proprietorship, partnership, LLP, company, trust, HUF, society</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 1-3 working days (IEC) | 7-15 days (complete export-readiness package)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IEC%20Registration%20in%20Gurugram&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20IEC%20registration%20in%20Gurugram.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20IEC%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'IEC Registration in Gurugram',
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
    'ctaText'    => 'Patron has helped 10,000+ businesses with IEC registration, export compliance, and international trade readiness. Gurugram exporters and importers trust us for the complete trade-readiness package.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">IEC vs GST</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Registration in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IEC Registration in Gurugram Services at a Glance</strong></p>
                    <p>An Import Export Code (IEC) is a mandatory 10-digit number from DGFT for any business importing or exporting goods or services. Without IEC, customs will not clear shipments and banks will not process forex transactions. Post-GST, IEC = PAN of the firm. Filed on dgft.gov.in using Form ANF-2A with Rs 500 one-time fee. Lifetime validity but mandatory annual update (Apr-Jun) - failure to update = deactivation. Patron bundles IEC with AD Code, ICEGATE, GST LUT, and RCMC for complete export readiness.</p>
                </div>
                <p>Gurugram is a major international trade hub. Manesar IMT exports auto-components to Europe, USA, and Asia. DLF Cyber City exports IT/ITES services globally. Udyog Vihar imports machinery and electronics. ICD Garhi Harsaru provides direct customs clearance. Every one needs IEC. Learn more about <a href="/iec-registration">IEC Registration across India</a>.</p>
                <p>Most businesses stop at IEC and miss critical post-registration steps: AD Code at customs ports, ICEGATE e-filing, and GST LUT for zero-rated exports. Without these, your IEC is just a number. Patron's Gurugram office on Golf Course Extension Road provides the complete export-readiness package. Also bundle with <a href="/gst-registration/gurugram">GST Registration in Gurugram</a> and <a href="/accounting-services/gurugram">Accounting Services</a>.</p>
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
                    
                    <p>IEC (Import Export Code) registration is the process of obtaining a 10-digit unique business identification number from the DGFT under the Foreign Trade (Development and Regulation) Act, 1992, that legally authorises a business to engage in importing or exporting goods and services from India.</p>
                    <p>Required by customs for clearance at ports, airports, and ICDs. Banks require it for processing forex remittances. DGFT requires it for export promotion benefits under the Foreign Trade Policy. Post-GST, IEC = PAN of entity, but separate DGFT application still required. Filed on <a href="https://dgft.gov.in/" target="_blank" rel="noopener">dgft.gov.in</a>.</p>
                    <p>Lifetime validity, no renewal - but mandatory annual update (Apr 1 - Jun 30) on DGFT portal. Failure to update results in deactivation and Denied Entity List (DEL) status. For Gurugram manufacturers at ICD Garhi Harsaru and IT exporters in Cyber City, IEC is the first step into international trade.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IEC Registration in Gurugram:</strong></p>
                    <p><strong>IEC:</strong> Import Export Code - 10-digit number = PAN post-GST. Required for all import-export transactions. Lifetime validity.</p>
                    <p><strong>DGFT:</strong> Directorate General of Foreign Trade - issues IEC and administers Foreign Trade Policy via dgft.gov.in.</p>
                    <p><strong>AD Code:</strong> Authorised Dealer Code from bank, registered at customs ports. Links bank to customs system. Critical post-IEC step.</p>
                    <p><strong>ICEGATE:</strong> Indian Customs Electronic Gateway (icegate.gov.in) - e-filing portal for bills of entry (imports) and shipping bills (exports).</p>
                    <p><strong>GST LUT:</strong> Letter of Undertaking for zero-rated exports without IGST payment. Avoids refund delays.</p>
                    <p><strong>Annual IEC Update:</strong> Mandatory Apr 1 - Jun 30 on DGFT portal. Non-update = deactivation + DEL status.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IEC Registration in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Gurugram Trade Hub</span>
                        <strong>IEC Registered</strong>
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
            <h2 class="section-title">Who Needs IEC Registration in Gurugram?</h2>
            <div class="content-text">
                
                <p><strong>Manufacturers Exporting Goods (Manesar IMT):</strong> Auto-components to Europe/USA/Asia, textiles, pharma, engineering goods. IEC + AD Code at ICD Garhi Harsaru for container handling.</p>
                <p><strong>IT/ITES Services Exporters (DLF Cyber City):</strong> IEC required for Foreign Trade Policy benefits (SEIS/successor schemes). Banks may request for large inward remittances. GST LUT for zero-rated supply essential.</p>
                <p><strong>Importers and Trading Companies (Udyog Vihar):</strong> Machinery, electronics, raw materials. IEC mandatory for customs clearance - without it, bill of entry cannot be filed on ICEGATE. Demurrage charges for delays.</p>
                <p><strong>E-Commerce Exporters (Sohna Road, Sector 48-67):</strong> D2C brands selling globally via Amazon Global, eBay, Etsy. IEC + AD Code + courier/postal export route at Delhi Air Cargo.</p>
                <p><strong>Startups Going Global:</strong> SaaS, fintech, deeptech expanding internationally. IEC needed when foreign revenue flows begin. Patron recommends obtaining during <a href="/startup-registration/gurugram">company registration</a> to be export-ready from day one.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Registration Services Included by Patron in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>IEC Application (Form ANF-2A)</td><td>Complete online filing on <a href="https://dgft.gov.in/" target="_blank" rel="noopener">dgft.gov.in</a> - entity type, PAN verification, bank info, address proof, DSC/Aadhaar auth, Rs 500 fee payment</td></tr>
                        <tr><td>AD Code Registration (Bundled)</td><td>Obtain AD Code letter from bank and register at ICD Garhi Harsaru, Delhi Air Cargo, or Tughlakabad ICD. Critical post-IEC step most businesses miss</td></tr>
                        <tr><td>ICEGATE Registration (Bundled)</td><td>Registration on icegate.gov.in for electronic customs filing. Bills of entry (imports) and shipping bills (exports). Requires IEC + DSC</td></tr>
                        <tr><td>GST LUT Filing (Bundled)</td><td>Letter of Undertaking on GST portal for zero-rated exports - supply without IGST payment, avoiding refund delays</td></tr>
                        <tr><td>RCMC Guidance</td><td>Advice on relevant Export Promotion Council membership based on product/service category. Assistance with RCMC application for DGFT scheme benefits</td></tr>
                        <tr><td>Annual IEC Update Setup</td><td>Calendar reminder for mandatory Apr-Jun update on DGFT portal. First update handled. Annual reminders to prevent deactivation</td></tr>
                        <tr><td>DGFT Verification Support</td><td>DGFT may physically verify Gurugram address. Patron ensures premises and signage are ready for verification</td></tr>
                        <tr><td>IEC Modification</td><td>Address, bank, or partner changes filed on DGFT portal when needed</td></tr>

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
            <h2 class="section-title">IEC Registration Process in Gurugram - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete export-readiness chain - from IEC application to your first shipment clearance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Register on DGFT Portal</h3><p class="step-description">Patron creates account on dgft.gov.in using email, mobile, and PAN. OTP verification. Username and password generated for DGFT dashboard.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Account Created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DGFT</text><circle cx="85" cy="22" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M81 22L84 25L90 19" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">File Form ANF-2A</h3><p class="step-description">Entity type, legal name as per PAN, PAN number, date of incorporation, registered Gurugram address, contact details, bank account (name, branch, IFSC, account number), and all partners/directors with Aadhaar.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Details Submitted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="8" rx="4" fill="#E8EDF4"/><rect x="25" y="38" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="60" y="38" width="30" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/></svg></div><span class="illustration-label">Application In</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Upload Documents and Authenticate</h3><p class="step-description">PAN, Aadhaar, address proof (Gurugram premises), cancelled cheque/bank certificate, photograph. DSC for companies/LLPs or Aadhaar OTP for proprietors/partnerships.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs Uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Authenticated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pay Government Fee and Receive IEC</h3><p class="step-description">Rs 500 one-time via DGFT payment gateway. DGFT cross-verifies PAN with Income Tax Department. IEC issued 1-3 working days. Certificate with QR code via email and DGFT portal download. IEC = PAN of firm.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fee Paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IEC Issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><text x="60" y="35" font-size="10" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">IEC</text><text x="60" y="52" font-size="8" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Issued</text></svg></div><span class="illustration-label">IEC Active</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Post-IEC Export Readiness (Critical)</h3><p class="step-description">Most businesses stop at IEC. Patron completes: (a) AD Code from bank, registered at ICD Garhi Harsaru/Delhi Air Cargo/Tughlakabad. (b) ICEGATE on icegate.gov.in for e-customs filing. (c) GST LUT for zero-rated exports. (d) RCMC guidance for Export Promotion Council. Without these, IEC is operationally useless.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AD Code Done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ICEGATE + LUT</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="25" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="27" y="47" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">AD</text><rect x="43" y="15" width="25" height="55" rx="4" fill="#E8EDF4" stroke="#14365F" stroke-width="0.8"/><text x="55" y="47" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ICE</text><rect x="71" y="15" width="25" height="55" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><text x="83" y="47" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">LUT</text></svg></div><span class="illustration-label">Export Ready</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Annual Update Compliance Setup</h3><p class="step-description">Calendar reminder for mandatory Apr 1 - Jun 30 annual update on DGFT portal. Patron handles first update and sets annual reminders. Non-update = deactivation + DEL status. No import/export possible with deactivated IEC.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Update Tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance Active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Trade Ready</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for IEC Registration in Gurugram</h2>
            <div class="content-text">
                
                <ul><li>PAN Card of entity (IEC will be the same as PAN post-GST)</li><li>Aadhaar Card of proprietor/all partners/directors</li><li>Business Registration Proof - COI+MOA/AOA (companies), LLP Agreement+COI, Partnership Deed, or proprietorship declaration</li><li>Address Proof (Gurugram premises) - rent agreement + electricity bill. DGFT may physically verify</li><li>Bank Account Details - cancelled cheque or bank certificate showing account number, IFSC, holder name</li><li>Passport-size photograph of authorised signatory</li><li>DSC for companies/LLPs (Aadhaar OTP for proprietors/partnerships)</li><li>Board Resolution / Authorisation Letter (if signatory is not proprietor/all partners)</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Gurugram exporter tip:</strong> If you plan to use ICD Garhi Harsaru for cargo, keep ICD registration documents ready alongside IEC. Patron handles AD Code registration at Garhi Harsaru ICD as part of the export-readiness package.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IEC Registration Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing Annual Update (Apr-Jun)</td><td>Most overlooked compliance. Non-update = IEC deactivation + DEL status. Shipments blocked at customs. Discovered only when a shipment fails</td><td>Annual update reminders set up. First update handled by Patron. Deactivation prevention guaranteed</td></tr>
                        <tr><td>Stopping at IEC Without Post-Steps</td><td>No AD Code at customs port, no ICEGATE, no GST LUT. IEC is operationally useless without these. First shipment gets stuck</td><td>Complete export-readiness: AD Code at ICD Garhi Harsaru + ICEGATE + LUT bundled in one package</td></tr>
                        <tr><td>PAN Mismatch</td><td>IEC = PAN post-GST. Name mismatch between PAN and business registration = rejection. Common with newly incorporated companies</td><td>Pre-filing PAN-entity name alignment verification before DGFT submission</td></tr>
                        <tr><td>Address Verification Failure</td><td>DGFT may verify by post. Wrong address, no signage, or postal delivery failure = IEC flagged</td><td>Gurugram premises address verified and entity name displayed before filing</td></tr>
                        <tr><td>No GST LUT for Exports</td><td>Exporters pay IGST upfront without LUT, then struggle with delayed refunds. Working capital trapped</td><td>GST LUT filed simultaneously with IEC setup. Zero-rated supply from day one</td></tr>

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
            <h2 class="section-title">IEC Registration Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (DGFT)</td><td>Rs 500 (one-time, lifetime validity)</td></tr>
                        <tr><td>Patron Fee (IEC Only)</td><td>From Rs 1,999 (Form ANF-2A + filing + certificate)</td></tr>
                        <tr><td>Patron Fee (Export Readiness Package)</td><td>From Rs 7,999 (IEC + AD Code + ICEGATE + GST LUT + RCMC guidance)</td></tr>
                        <tr><td>AD Code Registration</td><td>Included in package (ICD Garhi Harsaru / Delhi Air Cargo)</td></tr>
                        <tr><td>ICEGATE Registration</td><td>Included in package (customs e-filing setup)</td></tr>
                        <tr><td>GST LUT Filing</td><td>Included in package (zero-rated export compliance)</td></tr>
                        <tr><td>Annual IEC Update (First Year)</td><td>Included</td></tr>
                        <tr><td>IEC Modification</td><td>From Rs 999 (address, bank, or partner changes)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IEC Registration in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20IEC%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Registration Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Preparation</td><td>1-2 days</td></tr><tr><td>DGFT Portal Filing (ANF-2A)</td><td>1 day</td></tr><tr><td>DGFT Verification + IEC Issuance</td><td>1-3 working days</td></tr><tr><td>AD Code Registration</td><td>3-5 working days</td></tr><tr><td>ICEGATE Registration</td><td>2-3 working days</td></tr><tr><td>GST LUT Filing</td><td>1-2 working days</td></tr><tr><td><strong>Total Export Readiness</strong></td><td><strong>7-15 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Without IEC, customs will not clear a single shipment. Banks will not process forex. Every day without IEC = lost import/export capability. If existing IEC deactivated (missed annual update), all trade blocked until reactivation. For Manesar manufacturers with pending export orders, IT companies with international invoices, importers with cargo at ICD - delay means demurrage charges, missed deadlines, and lost client confidence. Start 3 weeks before first planned shipment.</p>

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
            <h2 class="section-title">Why Choose Patron for IEC Registration in Gurugram</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Complete Export Readiness Package</h3><p class="feature-desc">IEC + AD Code at ICD Garhi Harsaru + ICEGATE + GST LUT + RCMC. No other Gurugram provider bundles all five. One engagement, fully operational for international trade.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Annual Update Compliance</h3><p class="feature-desc">Calendar reminders and handling of mandatory Apr-Jun DGFT update. The compliance step that catches most businesses off guard. Deactivation prevention guaranteed.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Gurugram Trade Corridor Expertise</h3><p class="feature-desc">Manesar auto-component exports, Cyber City IT services, Udyog Vihar imports. ICD Garhi Harsaru workflow. PAN-IEC alignment pre-verification. GST LUT for zero-rated supply.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Gurugram Office + Track Record</h3><p class="feature-desc">Golf Course Extension Road. Walk-in for export compliance consultations. 10,000+ businesses, 4.9 Google rating, 50,000+ documents filed, 15+ years.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Exporters and Importers Across Gurugram</h2>
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
            <h2 class="section-title">IEC vs GST - When Do You Need What?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>IEC (Import Export Code)</th><th>GST Registration</th></tr></thead>
                    <tbody>
                        <tr><td>Issued By</td><td>DGFT (Ministry of Commerce)</td><td>GST Department (Ministry of Finance)</td></tr>
                        <tr><td>Purpose</td><td>Authorise import/export transactions</td><td>Collect and remit GST on supplies</td></tr>
                        <tr><td>Number</td><td>10-digit (= PAN of entity)</td><td>15-digit GSTIN (state code + PAN + entity code)</td></tr>
                        <tr><td>Fee</td><td>Rs 500 one-time</td><td>NIL</td></tr>
                        <tr><td>Validity</td><td>Lifetime (annual update Apr-Jun)</td><td>Active until cancelled</td></tr>
                        <tr><td>Export Use</td><td>Customs clearance + bank remittances</td><td>LUT filing + IGST refund</td></tr>
                        <tr><td>Gurugram Context</td><td>Manesar manufacturers, IT exporters, Udyog Vihar importers</td><td>All businesses above threshold</td></tr>

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
                
                <p>Patron offers complete trade and business registration in Gurugram:</p><ul>
                    <li><a href="/iec-registration">IEC Registration in India</a></li>
                    <li><a href="/gst-registration/gurugram">GST Registration in Gurugram</a></li>
                    <li><a href="/private-limited-company-registration/gurugram">Pvt Ltd Registration in Gurugram</a></li>
                    <li><a href="/llp-incorporation/gurugram">LLP Registration in Gurugram</a></li>
                    <li><a href="/trademark-registration/gurugram">Trademark Registration in Gurugram</a></li>
                    <li><a href="/accounting-services/gurugram">Accounting Services in Gurugram</a></li>
                    <li><a href="/startup-registration/gurugram">Startup Registration in Gurugram</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for IEC Registration in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>Foreign Trade (Development and Regulation) Act, 1992 - Section 7 (no import/export without IEC unless exempted)</li>
                    <li>Foreign Trade Policy (FTP) - Export promotion benefits (MEIS/RoDTEP, SEIS, EPCG, Advance Authorisation) require valid IEC</li>
                    <li>Form ANF-2A on dgft.gov.in - Rs 500 fee, DSC or Aadhaar authentication</li></ul>
                <p><strong>Key Portal:</strong></p><ul>
                    <li><a href="https://dgft.gov.in/" target="_blank" rel="noopener">dgft.gov.in</a> - DGFT portal for IEC application and annual update</li>
                    <li>icegate.gov.in - Customs e-filing for bills of entry and shipping bills</li></ul>
                <p><strong>Critical Compliance:</strong> Annual IEC update Apr 1 - Jun 30 mandatory. Non-update = deactivation + DEL status. AD Code required at each customs port. GST LUT for zero-rated exports.</p>

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
                    <h2 class="faq-expanded__title">FAQs - IEC Registration in Gurugram</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about IEC registration in Gurugram.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IEC Registration in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I get IEC in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Register on dgft.gov.in, file Form ANF-2A with PAN, Aadhaar, business proof, Gurugram address, and bank details. Pay Rs 500 govt fee. IEC issued 1-3 working days. Patron's Gurugram office handles complete filing plus post-IEC AD Code and ICEGATE registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the cost of IEC registration?</h3>
                        <div class="faq-expanded__a"><p>Government fee Rs 500 (one-time, lifetime). Patron IEC-only from Rs 1,999. Export-readiness package from Rs 7,999 including IEC + AD Code + ICEGATE + GST LUT + RCMC guidance - recommended for businesses planning active import or export.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What documents are needed for IEC?</h3>
                        <div class="faq-expanded__a"><p>PAN card of entity, Aadhaar of proprietor/directors, business registration proof, Gurugram address proof (rent agreement + electricity bill), cancelled cheque or bank certificate, passport photo, and DSC for companies/LLPs. Patron prepares to DGFT specifications.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does IEC registration take?</h3>
                        <div class="faq-expanded__a"><p>IEC issued 1-3 working days from DGFT submission. Complete export-readiness with AD Code, ICEGATE, and LUT takes 7-15 working days. Start at least 3 weeks before first planned shipment to account for AD Code and ICEGATE registration time.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is IEC mandatory for IT services export?</h3>
                        <div class="faq-expanded__a"><p>Not mandatory for all services exports but required for Foreign Trade Policy benefits like export incentive schemes. Banks processing large inward remittances may request IEC. For Gurugram IT companies regularly receiving foreign payments, Patron recommends obtaining IEC proactively.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the annual IEC update?</h3>
                        <div class="faq-expanded__a"><p>Every IEC holder must update details on DGFT portal between April 1 and June 30 every year - even if nothing has changed. Failure results in IEC deactivation and Denied Entity List (DEL) status. No import, export, or DGFT benefits possible until reactivated.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is AD Code registration?</h3>
                        <div class="faq-expanded__a"><p>AD Code is your bank's unique code registered at each customs port for import/export. Links bank account to customs system for duty payments and export proceeds. Without AD Code, shipment cannot be processed even with valid IEC. Patron registers at ICD Garhi Harsaru and Delhi Air Cargo.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does IEC have lifetime validity?</h3>
                        <div class="faq-expanded__a"><p>Yes. IEC is valid for the lifetime of the entity and does not need renewal. However, the mandatory annual update (Apr 1 - Jun 30) must be completed every year to keep IEC active. Missed update leads to deactivation but can be reversed upon successful update.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>IEC registration kitne mein hota hai?</strong> Govt fee Rs 500, one-time. Patron Rs 1,999 se start. Export readiness package Rs 7,999 se (AD Code, ICEGATE, LUT sab included).</p><p><strong>IEC kitne din mein milta hai?</strong> 1-3 working days DGFT se. Pura export-ready setup 7-15 days.</p><p><strong>Kya har saal IEC renew karna padta hai?</strong> Renew nahi, lekin annual update April-June DGFT portal par zaruri hai. Nahi kiya toh deactivate ho jayega.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get IEC for Your Gurugram Business Before the Next Shipment</h2>
            <div class="content-text">
                
                <p>Without IEC, customs will not clear a single shipment. Banks will not process forex. If existing IEC deactivated (missed annual update), all trade blocked. Demurrage charges, missed deadlines, lost client confidence. Start at least 3 weeks before your first planned shipment.</p><p><strong>Register now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20IEC%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get IEC Registration in Gurugram with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">IEC registration is the gateway to international trade for every Gurugram business - Manesar auto-component exporters, Cyber City IT services companies, Udyog Vihar importers. The 10-digit code (= PAN) takes 1-3 days for Rs 500, but the real value lies in what comes after: AD Code, ICEGATE, GST LUT, and RCMC.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Gurugram office on Golf Course Extension Road provides the complete export-readiness package: IEC + AD Code at ICD Garhi Harsaru + ICEGATE + GST LUT + RCMC + annual update compliance. One engagement, trade-ready from day one. 15+ years, 10,000+ businesses served.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20IEC%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IEC%20Registration%20in%20Gurugram&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20IEC%20registration%20in%20Gurugram.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides IEC registration in 8 major cities.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/iec-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/iec-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/iec-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/iec-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/iec-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/iec-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/iec-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end trade and business registration in Gurugram</div><div class="pa-cross-grid"><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/trademark-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/fssai-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Freshness Tier 2) to incorporate DGFT fee updates, Foreign Trade Policy changes, annual update deadline reminders, and customs port procedural changes. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
