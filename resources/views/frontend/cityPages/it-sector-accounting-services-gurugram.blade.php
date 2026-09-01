
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>IT & Software Accounting in Gurugram - GST, TDS & LUT</title>
    <meta name="description" content="CA-led accounting for IT and software companies in Gurugram. Export LUT, SOFTEX, transfer pricing, SaaS revenue, ESOP. Serving Cyber City, Udyog Vihar, Sohna Road. Call +91 945 945 6700.">
    <link rel="canonical" href="/it-sector-accounting-services/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IT & Software Accounting in Gurugram - GST, TDS & LUT">
    <meta property="og:description" content="CA-led accounting for IT and software companies in Gurugram. Export LUT, SOFTEX, transfer pricing, SaaS revenue, ESOP. Serving Cyber City, Udyog Vihar, Sohna Road. Call +91 945 945 6700.">
    <meta property="og:url" content="/it-sector-accounting-services/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IT & Software Accounting in Gurugram - GST, TDS & LUT">
    <meta name="twitter:description" content="CA-led accounting for IT and software companies in Gurugram. Export LUT, SOFTEX, transfer pricing, SaaS revenue, ESOP. Serving Cyber City, Udyog Vihar, Sohna Road. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "IT & Software Accounting Services in Gurugram",
      "description": "CA-led accounting for IT and software companies in Gurugram. Export LUT, SOFTEX, transfer pricing, SaaS revenue, ESOP. Serving Cyber City, Udyog Vihar, Sohna Road. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/it-sector-accounting-services/gurugram",
      "serviceType": "IT & Software Accounting Services in Gurugram",
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
        "url": "https://www.patronaccounting.com/it-sector-accounting-services/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "10000",
          "maxPrice": "35000",
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
          "name": "IT Software Accounting Services India",
          "item": "https://www.patronaccounting.com/it-sector-accounting-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "IT & Software Accounting Services in Gurugram",
          "item": "https://www.patronaccounting.com/it-sector-accounting-services/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which authority handles IT export compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST Commissionerate Gurugram for LUT exports. STPI-Gurugram (Sector 18) for SOFTEX. Income Tax Commissionerate Gurugram for Form 3CEB transfer pricing. Three jurisdictions managed."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get IT accounting online?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Fully digital. SOFTEX and LUT filing handled digitally. Walk-in at Golf Course Extension Road for Cyber City, Udyog Vihar, Sohna Road IT companies."
          }
        },
        {
          "@type": "Question",
          "name": "What does it cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Startup/freelancer: Rs 10,000-15,000/month. Mid-size: Rs 20,000-30,000. SaaS funded: Rs 25,000-40,000. MNC with TP: Rs 35,000-50,000. Call +91 945 945 6700."
          }
        },
        {
          "@type": "Question",
          "name": "How long for monthly book closure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "7 working days. Multi-currency reconciliation, export/domestic GST, ITC, project cost allocation, forex gain/loss. SaaS: deferred revenue unwinding included."
          }
        },
        {
          "@type": "Question",
          "name": "What is LUT for IT exporters?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form RFD-11: zero-rated export without IGST. Renewed annually by 31 March via GST portal. Without LUT: must pay IGST and claim refund – blocks working capital."
          }
        },
        {
          "@type": "Question",
          "name": "Is SOFTEX mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All software exporters file with STPI-Gurugram post-export. Banks match forex against exports via EDPMS. Without certified SOFTEX: remittances treated as general services."
          }
        },
        {
          "@type": "Question",
          "name": "When is Form 3CEB due?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "30 November. MNC subsidiaries and entities with international transactions. Contemporaneous TP documentation. Safe harbour 18% margin IT/ITES per Notification 21/2025. Quick Answers IT company ka GST kaise lagta hai? Domestic IT pe 18% GST. Export services zero-rated LUT ke under – GST nahi lagta lekin ITC claim kar sakte hain. LUT kab renew karna hota hai? Har saal 31 March se pehle Form RFD-11 GST portal pe file karke renew karo. Transfer pricing kab apply hota hai? Related party abroad ke saath transaction ho toh Form 3CEB 30 November tak file karna hota hai."
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
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
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
                        IT and Software Accounting in Gurugram: Export, Transfer Pricing, and SaaS Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">02 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Export LUT:</span> Zero-rated under LUT (Form RFD-11) | GSTR-1 Table 6A | FIRC/e-FIRA tracking | SOFTEX with STPI-Gurugram</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Transfer Pricing:</span> S92D documentation | Form 3CEB by 30 Nov | Safe harbour 18% IT/ITES, 24% R&amp;D (Notification 21/2025)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>SaaS &amp; ESOP:</span> Ind AS 115 subscription revenue | Ind AS 102 ESOP | Angel tax S56(2)(viib) | MRR, ARR, burn rate metrics</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>From Rs 10,000/mo:</span> Startup/freelancer Rs 10,000 | Mid-size Rs 20,000 | SaaS funded Rs 25,000 | MNC subsidiary Rs 35,000</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Our Gurugram office on Golf Course Extension Road serves IT companies across Cyber City, Udyog Vihar, Sohna Road &ndash; 10,000+ businesses with 4.9&#9733; rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20software%20accounting%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'IT &amp; Software Accounting',
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Entity Types</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Patron vs Others</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT &amp; Software Accounting in Gurugram &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IT &amp; Software Accounting Services at a Glance</strong></p>
                    <p>IT accounting in Gurugram covers export zero-rating under LUT, SOFTEX with STPI-Gurugram (Rs 25,017 Cr exports FY21), transfer pricing S92D/Form 3CEB (safe harbour 18% IT/ITES per Notification 21/2025), SaaS revenue Ind AS 115, ESOP Ind AS 102, and 18% domestic GST (SAC 9983). GST Commissionerate Gurugram + STPI-Gurugram + Income Tax jointly. DLF Cyber City (Google, Microsoft, SAP). No Professional Tax. From Rs 10,000/month. 7-day book closure.</p>
                </div>
                <p>Gurugram is India's IT powerhouse &ndash; DLF Cyber City (Google, Microsoft, SAP, Accenture), Udyog Vihar BPOs, Sohna Road SaaS startups. STPI-Gurugram reported Rs 25,017 Cr IT exports. Safe harbour 18% margin per Notification 21/2025. Learn more about <a href="/it-sector-accounting-services">IT/Software Accounting across India</a>.</p>
                <p>Patron's Golf Course Extension Road office provides LUT compliance, SOFTEX filing, transfer pricing, SaaS revenue recognition, and startup financials. For general accounting, see <a href="/accounting-services/gurugram">Accounting Services Gurugram</a>. For GST, see <a href="/gst-registration/gurugram">GST Registration Gurugram</a>.</p>
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
                <h2 class="section-title">What Is IT &amp; Software Accounting?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Specialized financial management of technology companies: service export zero-rating under GST, STPI/SEZ compliance, transfer pricing for cross-border related-party transactions under S92, SaaS subscription revenue per Ind AS 115, and ESOP accounting per Ind AS 102. For <a href="/gst-returns">GST Returns</a>, see our page.</p>
                    <p>For Gurugram IT &ndash; 10,000-employee MNC in Cyber City, SaaS startup on Sohna Road billing via Stripe, freelancer exporting code &ndash; every transaction must be domestic (18% GST) or export (LUT zero-rated), with SOFTEX for STPI-Gurugram and financials satisfying Indian GAAP/Ind AS + parent/investor requirements. For <a href="/statutory-audit">Statutory Audit</a>, see our page.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IT &amp; Software Accounting:</strong></p>
                    <ul>
                        <li><strong>LUT (Form RFD-11):</strong> Zero-rated export without IGST. Annual renewal by 31 March</li>
                        <li><strong>SOFTEX:</strong> Post-facto export valuation with STPI-Gurugram for RBI EDPMS</li>
                        <li><strong>Transfer Pricing S92:</strong> Form 3CEB by 30 Nov. 2% penalty for non-documentation</li>
                        <li><strong>Safe Harbour:</strong> IT/ITES 18% margin, R&amp;D 24% (Notification 21/2025)</li>
                        <li><strong>Ind AS 115 (SaaS):</strong> Subscription revenue over time. Multi-element allocation</li>
                        <li><strong>Ind AS 102 (ESOP):</strong> Fair value at grant. Expense over vesting. Angel tax S56(2)(viib)</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IT &amp; Software Accounting</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Export Ready</span>
                        <strong>IT Accounting</strong>
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
            <h2 class="section-title">Who Needs IT/Software Accounting in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>MNC subsidiaries (Cyber City, Udyog Vihar)</strong> &ndash; Google, Microsoft, SAP, Accenture, Wipro. Consolidated reporting, TP S92D, Form 3CEB, Ind AS, SOFTEX, safe harbour. For <a href="/private-limited-company-compliance">Pvt Ltd Compliance</a>, see our page.</p>
                <p><strong>IT services and BPO companies</strong> &ndash; Export under LUT, FIRC tracking, GSTR-1 Table 6A, SOFTEX with STPI-Gurugram. Domestic at 18% SAC 9983.</p>
                <p><strong>SaaS and product startups (Sohna Road, Golf Course Extension)</strong> &ndash; Ind AS 115 subscription revenue, ESOP Ind AS 102, angel tax, investor MRR/ARR/burn metrics. For <a href="/payroll-services">Payroll Services</a>, see our page.</p>
                <p><strong>Freelance developers and consultants</strong> &ndash; GST registration for exports, LUT zero-rating, SOFTEX, FIRC, professional income S44ADA/regular books. For <a href="/tds-return-filing-24q">TDS Return Filing</a>, see our page.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT/Software Accounting Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Export Revenue &amp; LUT</td><td>LUT filing/renewal (Form RFD-11). Zero-rated invoicing. GSTR-1 Table 6A, GSTR-3B 3.1(d). FIRC/e-FIRA tracking for forex realization</td></tr>
                        <tr><td>SOFTEX with STPI-Gurugram</td><td>Post-export SOFTEX filing. STPI certification. EDPMS reconciliation. Annual Performance Certificate for STP units</td></tr>
                        <tr><td>Transfer Pricing (S92)</td><td>Contemporaneous documentation S92D. Benchmarking analysis. Form 3CEB by 30 Nov. Safe harbour 18% IT/ITES (Notification 21/2025)</td></tr>
                        <tr><td>Domestic GST (18%)</td><td>SAC 9983 for IT services. Full ITC on rent, internet, cloud, subcontractors. GSTR-1/3B with GST Commissionerate Gurugram</td></tr>
                        <tr><td>SaaS Revenue (Ind AS 115)</td><td>Performance obligation determination. Over-time vs point-in-time. Multi-element allocation for SaaS + implementation bundles</td></tr>
                        <tr><td>ESOP Accounting (Ind AS 102)</td><td>Fair value at grant. Expense over vesting. Exercise and lapse. S17(2)(vi) perquisite. Angel tax S56(2)(viib)</td></tr>
                        <tr><td>Multi-Currency Reconciliation</td><td>USD/EUR/GBP invoices vs INR deposits. Ind AS 21 exchange gains/losses. RBI reference rates. Hedge accounting Ind AS 109</td></tr>
                        <tr><td>Startup Financial Reporting</td><td>Investor P&amp;L: MRR, ARR, burn rate, runway, CAC, LTV. Board packs. Due diligence readiness. Angel tax valuation</td></tr>

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
            <h2 class="section-title">How IT/Software Accounting Works in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron delivers 7-day book closure with export compliance, TP documentation, and SaaS metrics. Golf Course Extension Road &ndash; centre of Gurugram's IT corridor.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Assess IT Model &amp; Configure</h3><p class="step-description">Map revenue: domestic 18% GST (SAC 9983) or export zero-rated (LUT). Verify STPI registration for SOFTEX. Check TP applicability for MNCs. Configure Tally/QuickBooks/Xero with multi-currency, project cost centres, deferred revenue (SaaS), ESOP registers, intercompany ledgers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Model assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>System configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Onboarded</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Record Revenue &amp; Track Exports</h3><p class="step-description">Client invoices: domestic (18% GST) or export (LUT ARN reference). Multi-currency via RBI rates. FIRC/e-FIRA matched against invoices. SOFTEX prepared for STPI-Gurugram. SaaS subscription billing with deferred revenue per Ind AS 115. Books closed within 7 working days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Revenue recorded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exports tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Monthly Close</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Returns &amp; Maintain LUT</h3><p class="step-description">GSTR-1 Table 6A (exports) + domestic. GSTR-3B Table 3.1(d). LUT renewed by 31 March. TDS via TRACES. No Professional Tax (Haryana). For MNCs: TP documentation contemporaneously under S92D. Form 3CEB filed by 30 November. Safe harbour 18% margin option.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Returns filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT maintained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Financial Statements &amp; Monitoring</h3><p class="step-description">Ind AS or GAAP financials. SaaS: Ind AS 115 deferred revenue. ESOP: Ind AS 102 expense. Forex: Ind AS 21 gains/losses. RoC Delhi filings. Compliance calendar: LUT (31 Mar), GSTR-9, Form 3CEB (30 Nov), STPI APC, ITR. Board packs with MRR/ARR/burn for funded startups.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Financials ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All deadlines tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Year-End Ready</span><span class="step-number-large">04</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>GST Registration:</strong> Each GSTIN with GST Commissionerate Gurugram</li>
                    <li><strong>LUT Certificate (RFD-11):</strong> Annual LUT for zero-rated export</li>
                    <li><strong>STPI Registration:</strong> STP or Non-STP unit with STPI-Gurugram</li>
                    <li><strong>Client Contracts/SOWs:</strong> Service agreements and statements of work</li>
                    <li><strong>FIRC/e-FIRA:</strong> Foreign Inward Remittance Certificates from bank</li>
                    <li><strong>Intercompany Agreements (MNCs):</strong> Service, cost allocation, IP licence agreements</li>
                    <li><strong>Bank Statements:</strong> Including forex accounts for reconciliation</li>
                    <li><strong>ESOP Documents:</strong> Board resolutions, plan, grant letters, valuation reports</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Gurugram-Specific Tip:</strong> STPI-registered IT companies should maintain Annual Performance Certificate (APC) showing positive net foreign exchange earnings for continued STP status. STPI-Gurugram is at Sector 18, Electronic City.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IT/Software Accounting Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Transfer Pricing for MNCs</td><td>500+ captive units in Cyber City. S92D documentation, annual benchmarking, Form 3CEB by 30 Nov. Safe harbour 18% margin. 2% penalty S271AA</td><td>Patron prepares TP documentation contemporaneously. Benchmarking per most appropriate method. Form 3CEB well before deadline</td></tr>
                        <tr><td>LUT Renewal &amp; SOFTEX Delays</td><td>Missing 31 March LUT = IGST on exports blocking capital. SOFTEX delays cause EDPMS mismatches at bank level</td><td>Patron tracks LUT renewal proactively. SOFTEX filed post-export. FIRC matched against invoices systematically</td></tr>
                        <tr><td>SaaS Revenue Recognition</td><td>Annual subscriptions: over-time vs point-in-time. Multi-element (SaaS + implementation + support) allocation complex</td><td>Pre-built Ind AS 115 frameworks for SaaS. Deferred revenue schedules. Performance obligation mapping per contract</td></tr>
                        <tr><td>ESOP &amp; Angel Tax</td><td>Ind AS 102 valuation + expense. S17(2)(vi) perquisite on exercise. S56(2)(viib) angel tax on premium shares</td><td>Patron handles ESOP valuation, vesting expense, exercise accounting, and maintains valuation reports for angel tax defense</td></tr>
                        <tr><td>Multi-Currency Forex</td><td>USD/EUR/GBP fluctuations between invoice, FIRC, and bank credit. Unrealized gains/losses per Ind AS 21 at each reporting date</td><td>RBI reference rates applied. Unrealized differences recognized. Hedge accounting Ind AS 109 for forward contracts</td></tr>

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
            <h2 class="section-title">IT/Software Accounting Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>IT Startup / Freelancer</td><td>Rs 10,000 &ndash; Rs 15,000/month (bookkeeping + GST + LUT + TDS + ITR)</td></tr>
                        <tr><td>Mid-Size IT Company</td><td>Rs 20,000 &ndash; Rs 30,000/month (+ SOFTEX + multi-currency + project P&amp;L + audit prep)</td></tr>
                        <tr><td>SaaS Company (Funded)</td><td>Rs 25,000 &ndash; Rs 40,000/month (+ Ind AS 115 + ESOP + investor reporting + board packs)</td></tr>
                        <tr><td>MNC Subsidiary (with TP)</td><td>Rs 35,000 &ndash; Rs 50,000/month (+ TP documentation + Form 3CEB + intercompany + Ind AS)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IT &amp; Software Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20software%20accounting%20in%20Gurugram.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Gurugram IT Entity Types</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>MNC Subsidiary</td><td>Very High: TP, Ind AS, multi-currency, SOFTEX | Form 3CEB, safe harbour, consolidated reporting</td></tr>
                        <tr><td>IT Services Company</td><td>High: exports, LUT, SOFTEX, project accounting | LUT zero-rating, STPI SOFTEX, FIRC tracking</td></tr>
                        <tr><td>SaaS Startup</td><td>High: subscription revenue, ESOP, investor reporting | Ind AS 115, Ind AS 102, angel tax, board packs</td></tr>
                        <tr><td>Freelancer / Consultant</td><td>Medium: export GST, professional income, forex | LUT, SOFTEX, S44ADA/regular books, FIRC</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>CBDT Notification 21/2025</strong> updated safe harbour margins: IT/ITES 18% operating margin, R&amp;D 24%, value limit raised to Rs 3 billion. Missing LUT renewal by 31 March = IGST on all exports blocking working capital. Late Form 3CEB (30 November) = Rs 1,00,000 penalty S271BA. Non-documentation of TP = 2% of transaction value S271AA. For Gurugram IT companies with crores in export revenue, multi-jurisdiction compliance is year-round.</p>

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
            <h2 class="section-title">Why Choose Patron for IT Accounting in Gurugram</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Export + TP Expertise</h3><p class="feature-text">LUT management, SOFTEX with STPI-Gurugram, FIRC tracking. Transfer pricing documentation, benchmarking, Form 3CEB. Safe harbour compliance.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">SaaS + Startup Ready</h3><p class="feature-text">Ind AS 115 subscription revenue. Ind AS 102 ESOP. Angel tax defense. Investor metrics: MRR, ARR, burn rate, runway. Board pack preparation.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">7-Day Book Closure</h3><p class="feature-text">Multi-currency reconciliation, export/domestic GST, ITC, project P&amp;L, forex gain/loss. GST filed 48 hours before deadline. Zero missed filings.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">IT Corridor Location</h3><p class="feature-text">Golf Course Extension Road &ndash; between DLF Cyber City, Udyog Vihar, Golf Course Road, and Sohna Road startup cluster. Walk-in for IT teams.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Gurugram IT Companies</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron's payroll team handles 200+ employees without a single error month on month. Their export compliance and LUT management saved us significant time.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; HR Head, IT Company, Gurugram</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving IT companies from startups to MNC subsidiaries.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Local CA for IT Accounting in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Gurugram CA</th></tr></thead>
                    <tbody>
                        <tr><td>Export/LUT</td><td>Dedicated LUT renewal, SOFTEX, FIRC tracking</td><td>May not understand zero-rating mechanics</td></tr>
                        <tr><td>Transfer Pricing</td><td>TP documentation, benchmarking, Form 3CEB</td><td>Often outsourced or unfamiliar with 3CEB</td></tr>
                        <tr><td>SaaS/Ind AS 115</td><td>Subscription revenue recognition frameworks</td><td>Standard approach &ndash; may miss deferred revenue</td></tr>
                        <tr><td>Pricing</td><td>Transparent from Rs 10,000/month</td><td>Unclear, hourly billing common</td></tr>

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
                
                <p>Explore related services:</p>
                <ul>
                    <li><a href="/it-sector-accounting-services">IT/Software Accounting (India)</a></li>
                    <li><a href="/accounting-services/gurugram">Accounting Services Gurugram</a></li>
                    <li><a href="/gst-registration/gurugram">GST Registration Gurugram</a></li>
                    <li><a href="/gst-returns">GST Returns</a></li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a></li>
                    <li><a href="/payroll-services">Payroll Services</a></li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
                    <li><a href="/tally-accounting">Tally Accounting</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>GST SAC 9983:</strong> IT services at 18% domestic with full ITC. Export zero-rated under LUT (Form RFD-11)</li>
                    <li><strong>IGST S2(6):</strong> 5 conditions for export of services. LUT annual. GSTR-1 Table 6A exports</li>
                    <li><strong>STPI/SOFTEX:</strong> STPI-Gurugram (Sector 18). Rs 25,017 Cr exports FY21. Post-facto certification for RBI EDPMS</li>
                    <li><strong>TP S92A-F:</strong> Form 3CEB by 30 Nov. Safe harbour: 18% IT/ITES, 24% R&amp;D (Notification 21/2025). S271AA 2% penalty</li>
                    <li><strong>Ind AS 115/102:</strong> SaaS revenue over subscription period. ESOP fair value at grant. Angel tax S56(2)(viib)</li>
                    <li><strong>No Professional Tax:</strong> Haryana advantage for large IT workforce. Simplified payroll compliance</li>
                </ul>
                <p><strong>Authority Portal:</strong> <a href="https://stpi.in" target="_blank" rel="noopener">stpi.in</a> (Software Technology Parks of India)</p>

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
                    <h2 class="faq-expanded__title">FAQs &ndash; IT/Software Accounting in Gurugram</h2>
                    <p class="faq-expanded__lead">Get answers about IT export authority, online availability, cost, book closure, LUT, SOFTEX, and Form 3CEB for Gurugram IT companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IT &amp; Software Accounting',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which authority handles IT export compliance?</h3>
                        <div class="faq-expanded__a"><p>GST Commissionerate Gurugram for LUT exports. STPI-Gurugram (Sector 18) for SOFTEX. Income Tax Commissionerate Gurugram for Form 3CEB transfer pricing. Three jurisdictions managed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get IT accounting online?</h3>
                        <div class="faq-expanded__a"><p>Yes. Fully digital. SOFTEX and LUT filing handled digitally. Walk-in at Golf Course Extension Road for Cyber City, Udyog Vihar, Sohna Road IT companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What does it cost?</h3>
                        <div class="faq-expanded__a"><p>Startup/freelancer: Rs 10,000-15,000/month. Mid-size: Rs 20,000-30,000. SaaS funded: Rs 25,000-40,000. MNC with TP: Rs 35,000-50,000. Call +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long for monthly book closure?</h3>
                        <div class="faq-expanded__a"><p>7 working days. Multi-currency reconciliation, export/domestic GST, ITC, project cost allocation, forex gain/loss. SaaS: deferred revenue unwinding included.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is LUT for IT exporters?</h3>
                        <div class="faq-expanded__a"><p>Form RFD-11: zero-rated export without IGST. Renewed annually by 31 March via GST portal. Without LUT: must pay IGST and claim refund &ndash; blocks working capital.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is SOFTEX mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes. All software exporters file with STPI-Gurugram post-export. Banks match forex against exports via EDPMS. Without certified SOFTEX: remittances treated as general services.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When is Form 3CEB due?</h3>
                        <div class="faq-expanded__a"><p>30 November. MNC subsidiaries and entities with international transactions. Contemporaneous TP documentation. Safe harbour 18% margin IT/ITES per Notification 21/2025.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>IT company ka GST kaise lagta hai?</strong> Domestic IT pe 18% GST. Export services zero-rated LUT ke under &ndash; GST nahi lagta lekin ITC claim kar sakte hain.</p>
                <p><strong>LUT kab renew karna hota hai?</strong> Har saal 31 March se pehle Form RFD-11 GST portal pe file karke renew karo.</p>
                <p><strong>Transfer pricing kab apply hota hai?</strong> Related party abroad ke saath transaction ho toh Form 3CEB 30 November tak file karna hota hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LUT Renewal or Form 3CEB Due? Act Now</h2>
            <div class="content-text">
                
                <p>Missing LUT (31 March) = IGST on all exports blocking capital. Late Form 3CEB (30 Nov) = Rs 1,00,000 penalty. TP non-documentation = 2% of transaction value. SOFTEX delays cause EDPMS bank mismatches. Get multi-jurisdiction compliance right with Patron's IT accounting team.</p>
                <p><strong>Get started today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20software%20accounting%20in%20Gurugram." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert IT &amp; Software Accounting in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">IT and software accounting in Gurugram addresses India's largest IT hub &ndash; export LUT zero-rating, SOFTEX with STPI-Gurugram, transfer pricing for MNC subsidiaries, SaaS revenue recognition, and ESOP accounting. From DLF Cyber City MNCs to Sohna Road startups to freelance developers.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron's Golf Course Extension Road office provides deep IT sector expertise &ndash; LUT management, SOFTEX certification, Form 3CEB filing, Ind AS 115/102, and investor-ready financials with 7-day book closure.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron delivers IT accounting from first export to IPO-ready compliance.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20software%20accounting%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IT/Software Accounting Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides export, transfer pricing, and SaaS-compliant IT accounting in major cities with STPI and LUT expertise.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">IT/Software Accounting in Other Cities</div>
                        <div class="pa-block-sub">Export and transfer pricing compliance across India</div>
                        <div class="pa-city-grid">
                            <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Gurugram</div>
                        <div class="pa-block-sub">End-to-end IT compliance</div>
                        <div class="pa-cross-grid">
                            <a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                            <a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Gurugram</div></div></a>
                            <a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                            <a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                            <a href="/trademark-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                            <a href="/payroll-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Gurugram</div></div></a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 02 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">02 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 02 May 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed monthly for GST export changes, CBDT transfer pricing updates, and STPI compliance developments. Freshness Tier: 1.</p>
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
