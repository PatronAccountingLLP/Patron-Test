
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST for OIDAR in Pune - Foreign Digital & GSTR-5A</title>
    <meta name="description" content="CA-assisted GST returns for OIDAR services in Pune. GSTR-5A for foreign providers, reverse charge for Pune IT companies. Serving Hinjewadi, Kharadi SaaS firms. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-returns-for-oidar/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST for OIDAR in Pune - Foreign Digital & GSTR-5A">
    <meta property="og:description" content="CA-assisted GST returns for OIDAR services in Pune. GSTR-5A for foreign providers, reverse charge for Pune IT companies. Serving Hinjewadi, Kharadi SaaS firms. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-returns-for-oidar/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST for OIDAR in Pune - Foreign Digital & GSTR-5A">
    <meta name="twitter:description" content="CA-assisted GST returns for OIDAR services in Pune. GSTR-5A for foreign providers, reverse charge for Pune IT companies. Serving Hinjewadi, Kharadi SaaS firms. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST for OIDAR in Pune - Foreign Digital & GSTR-5A",
      "description": "CA-assisted GST returns for OIDAR services in Pune. GSTR-5A for foreign providers, reverse charge for Pune IT companies. Serving Hinjewadi, Kharadi SaaS firms. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-returns-for-oidar/pune",
      "serviceType": "GST for OIDAR in Pune - Foreign Digital & GSTR-5A",
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
          "name": "GST for OIDAR Services - Registration, Returns & Compliance",
          "item": "https://www.patronaccounting.com/gst-returns-for-oidar"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST for OIDAR in Pune - Foreign Digital & GSTR-5A",
          "item": "https://www.patronaccounting.com/gst-returns-for-oidar/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office handles OIDAR compliance in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For Indian OIDAR providers registered in Pune, the CGST Commissionerate Pune-I or Pune-II and Maharashtra GST Pune District handle compliance. Foreign OIDAR providers register centrally via GST REG-10 on the national GST portal. Patron Accounting manages all OIDAR filings from its Pune office at Wagholi."
          }
        },
        {
          "@type": "Question",
          "name": "What is the GST rate on OIDAR services?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "OIDAR services are taxed at 18% GST (18% IGST for inter-state/cross-border, or 9% CGST + 9% SGST for intra-state). This applies uniformly whether the supply is B2B or B2C, domestic or cross-border. Foreign providers pay IGST at 18% on B2C supplies via GSTR-5A. Indian recipients of foreign OIDAR pay 18% under RCM in GSTR-3B."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for GSTR-5A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-5A must be filed by the 20th of the month following the tax period. Nil GSTR-5A must also be filed if no supplies were made during the month. Currently no late fee is charged for delayed GSTR-5A filing, but interest applies on delayed tax payment."
          }
        },
        {
          "@type": "Question",
          "name": "Is reverse charge applicable on OIDAR services received from abroad?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. When a GST-registered Pune business (B2B) receives OIDAR services from a foreign provider like AWS, Google Cloud or Salesforce, Reverse Charge Mechanism applies under Section 5(3) of the IGST Act. The Indian recipient must self-assess and pay IGST at 18% in GSTR-3B. ITC on this RCM payment is available for set-off."
          }
        },
        {
          "@type": "Question",
          "name": "Can a foreign OIDAR provider appoint an agent in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Rule 64 of the CGST Rules, foreign OIDAR providers may appoint an authorised representative in India to handle GST registration (REG-10), GSTR-5A filing, tax payment and compliance correspondence. Patron Accounting acts as the Indian authorised representative for foreign digital service providers."
          }
        },
        {
          "@type": "Question",
          "name": "How did Finance Act 2023 change OIDAR definition?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Finance Act 2023 removed the qualifiers \"essentially automated\" and \"minimal human intervention\" from Section 2(17) of the IGST Act. This expanded the scope to include digital services with significant human involvement - such as online tutoring, virtual consulting and human-assisted digital platforms. Pune EdTech companies should assess whether their services now fall under OIDAR."
          }
        },
        {
          "@type": "Question",
          "name": "Do Pune SaaS companies exporting OIDAR need to pay GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Export of OIDAR services from India qualifies as zero-rated supply under the IGST Act. Pune SaaS companies can export without paying IGST by filing a Letter of Undertaking (LUT) and claim ITC refund via Form RFD-01. Alternatively, they can pay IGST on export and claim a refund. Patron manages the complete export compliance."
          }
        },
        {
          "@type": "Question",
          "name": "Is ITC available on GSTR-5A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Foreign OIDAR providers filing GSTR-5A cannot claim any Input Tax Credit. No electronic credit ledger is maintained for GSTR-5A filers. The full tax liability must be paid through the electronic cash ledger."
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
                        GST Returns for OIDAR Services in Pune: Expert CA-Assisted Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>OIDAR:</span> Online Information and Database Access or Retrieval services - cloud, SaaS, streaming, e-books, online ads</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Foreign Providers:</span> File GSTR-5A monthly by 20th; register via GST REG-10; GST rate 18%</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Indian Providers:</span> File regular GSTR-1/GSTR-3B; treat as normal taxable supply at 18%</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Indian Recipients (B2B):</span> Pay GST under Reverse Charge Mechanism in GSTR-3B</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20OIDAR%20GST%20Returns%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Returns for OIDAR in Pune',
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
    'ctaText'    => 'Get expert OIDAR GST compliance for your Pune SaaS or IT business today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is OIDAR</a><a href="#who-section" class="toc-btn">Who Needs Compliance</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Compliance Matrix</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Returns for OIDAR Services in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Returns for OIDAR in Pune Services at a Glance</strong></p>
                    <p>OIDAR (Online Information and Database Access or Retrieval) services under GST in Pune involve two compliance streams: foreign providers supplying digital services to Indian consumers must file GSTR-5A by the 20th of each month under Section 14 of the IGST Act, while Pune-based IT companies in Hinjewadi and Kharadi receiving OIDAR services from overseas must pay GST under Reverse Charge Mechanism (RCM) in GSTR-3B. Indian SaaS and digital service providers file regular GSTR-1/GSTR-3B returns.</p>
                </div>
                <p>Pune is one of India's leading technology hubs with SaaS companies in Hinjewadi IT Park and Kharadi providing cloud computing, online advertising, streaming and software-as-a-service globally - making them OIDAR service providers under GST. Simultaneously, thousands of Pune businesses consume OIDAR services from foreign providers like AWS, Google Cloud, Adobe, Salesforce and Netflix - triggering Reverse Charge obligations. The CGST Commissionerate Pune-I and Pune-II and Maharashtra GST Pune District oversee compliance. Learn more about <a href="/gst-returns">GST Returns across India</a>.</p>
                <p>The Finance Act 2023 expanded the OIDAR definition by removing the "essentially automated" and "minimal human intervention" qualifiers, significantly widening the scope of taxable digital services. For related GST services, see <a href="/gst-returns/pune">GST Returns in Pune</a>, <a href="/gst-registration/pune">GST Registration in Pune</a> and file returns on the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a>.</p>
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
                <h2 class="section-title">What Are OIDAR Services Under GST?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>OIDAR services, defined under Section 2(17) of the IGST Act, 2017, are services whose delivery is mediated by information technology over the internet or an electronic network, and the nature of which renders their supply impossible without information technology.</p><p>Examples include cloud computing (AWS, Azure, Google Cloud), online advertising (Google Ads, Meta Ads), SaaS platforms, e-books, streaming services (Netflix, Spotify), online gaming, software downloads, online data storage and digital content distribution. The Finance Act 2023 expanded this definition by removing the requirements of "essentially automated" and "minimal human intervention" - meaning digital services with significant human involvement are now also covered.</p><p>For Pune's IT ecosystem in Hinjewadi and Kharadi, this has two-sided implications: SaaS companies providing services globally are domestic OIDAR providers filing regular GSTR-1/GSTR-3B, while those consuming AWS, Salesforce or Adobe services are recipients paying GST under Reverse Charge in GSTR-3B. Related: <a href="/gst-audit">GST Audit</a> and <a href="/gst-notice">GST Notice handling</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Returns for OIDAR in Pune:</strong></p>
                    <ul><li><strong>OIDAR:</strong> Online Information and Database Access or Retrieval services - delivery mediated by IT over internet</li><li><strong>GSTR-5A:</strong> Monthly return for non-resident OIDAR providers, due by 20th. No ITC available.</li><li><strong>GST REG-10:</strong> Simplified registration for foreign OIDAR providers</li><li><strong>Section 14 IGST Act:</strong> Special provision requiring foreign suppliers to pay IGST on B2C OIDAR supplies</li><li><strong>Reverse Charge (RCM):</strong> B2B OIDAR from foreign supplier - Indian registered recipient pays GST</li><li><strong>Finance Act 2023:</strong> Expanded OIDAR definition by removing automation qualifiers</li></ul>

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
                            <!-- OIDAR tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">OIDAR</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Returns for OIDAR in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>18% IGST</span>
                        <strong>GSTR-5A / RCM / GSTR-1</strong>
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
            <h2 class="section-title">Who Needs OIDAR GST Compliance in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Foreign OIDAR Providers (B2C to India):</strong> Any entity outside India providing OIDAR to unregistered individuals must register via Form GST REG-10 and file GSTR-5A monthly. No threshold exemption. Includes Netflix, Spotify, Adobe etc serving Pune consumers.</p><p><strong>Indian SaaS Companies (Providers):</strong> IT companies in Hinjewadi, Kharadi and Rajiv Gandhi Infotech Park providing cloud services, SaaS or digital content file regular GSTR-1 and GSTR-3B. Exports qualify as zero-rated supply. Related: <a href="#">Import Export Code</a>.</p><p><strong>Indian Businesses Receiving Foreign OIDAR (B2B RCM):</strong> Registered Pune businesses subscribing to AWS, Google Cloud, Salesforce or Adobe must pay GST at 18% under Reverse Charge in GSTR-3B. Major compliance requirement for Hinjewadi, Kharadi and Magarpatta City IT companies with significant cloud spend.</p><p><strong>Intermediaries/Aggregators:</strong> Platforms facilitating OIDAR services are treated as suppliers under Section 14 (first proviso) of the IGST Act and must ensure GST compliance on behalf of actual providers.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OIDAR GST Return Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-5A Filing for Foreign Providers</td><td>Monthly return preparation and filing for non-resident OIDAR providers supplying to Indian consumers, due by the 20th. Including Nil returns.</td></tr><tr><td>GST REG-10 Registration</td><td>Simplified registration for foreign OIDAR providers including appointment of Indian authorised representative. Patron acts as Indian representative.</td></tr><tr><td>Reverse Charge Compliance (B2B)</td><td>Computing and reporting RCM liability on foreign OIDAR consumed by Pune IT companies in GSTR-3B Table 3.1(d). ITC set-off managed.</td></tr><tr><td>Indian Provider GSTR-1/GSTR-3B</td><td>Regular return filing for Pune SaaS and digital service companies providing OIDAR domestically and globally.</td></tr><tr><td>Export OIDAR Compliance</td><td>LUT management, zero-rated supply reporting in GSTR-1 Table 6A, and ITC refund via RFD-01 for Pune SaaS exporters.</td></tr><tr><td>Finance Act 2023 Impact Assessment</td><td>Reviewing expanded OIDAR definition and assessing compliance impact on Pune digital service providers. Bundled with <a href="/accounting-services">Accounting Services</a> and <a href="/statutory-audit">Statutory Audit</a>.</td></tr>

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
            <h2 class="section-title">OIDAR GST Return Filing Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune CA team manages the full OIDAR GST compliance spectrum - foreign provider GSTR-5A, Indian provider GSTR-1/3B, and recipient RCM reporting.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine OIDAR Classification and Compliance Stream</h3><p class="step-description">Identify whether your business is a foreign OIDAR provider (GSTR-5A), an Indian OIDAR provider (GSTR-1/3B), or an Indian recipient of foreign OIDAR (RCM in GSTR-3B). For Pune SaaS companies in Hinjewadi providing services globally while consuming AWS/Azure, both provider and recipient compliance may apply simultaneously. Patron's Pune office analyses the full OIDAR profile for each client.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stream identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dual compliance assessed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="32" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="45" y="36" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">5A</text><circle cx="75" cy="32" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="75" y="36" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RCM</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Classify Stream</text></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Register on the GST Portal (Foreign Providers)</h3><p class="step-description">Foreign OIDAR providers register via Form GST REG-10 at least 5 days before commencing business in India. Submit self-attested passport copy, tax ID from home country, and appoint an authorised representative in India. Patron serves as the Indian representative for foreign OIDAR providers. Registration under the Simplified Registration Scheme with no threshold exemption.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>REG-10 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Indian rep appointed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REG-10</text><rect x="35" y="38" width="50" height="10" rx="5" fill="#E8712C" opacity="0.5"/><text x="60" y="46" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">Register</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute IGST Liability on OIDAR Supplies</h3><p class="step-description">For foreign providers (B2C): Compute IGST at 18% on the value of OIDAR to unregistered Indians. Place of supply per Section 13(12) IGST Act. For Indian providers: GST at 18% domestic, exports as zero-rated. For Pune IT companies receiving foreign OIDAR (B2B): self-assess IGST at 18% under RCM on the invoice value. Convert foreign currency at RBI rate under Rule 34.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IGST computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Currency converted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">18%</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">IGST on OIDAR</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Compute</text></svg></div><span class="illustration-label">Calculated</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File GSTR-5A by the 20th (Foreign Providers)</h3><p class="step-description">Log in to gst.gov.in and navigate to GSTR-5A. Enter details in Table 5 (taxable outward supplies with Place of Supply and IGST), Table 5A (amendments) and Table 6 (interest/penalty). Table 7 auto-populates tax liability. Pay full tax through electronic cash ledger (no ITC available for GSTR-5A). File using EVC. Nil GSTR-5A must also be filed if no supplies were made.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-5A filed by 20th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax paid via cash ledger</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-5A</text><rect x="35" y="35" width="50" height="10" rx="5" fill="#E8712C" opacity="0.7"/><text x="60" y="43" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">By 20th</text></svg></div><span class="illustration-label">5A Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Report RCM in GSTR-3B (Indian Recipients)</h3><p class="step-description">Pune IT companies receiving foreign OIDAR report RCM liability in GSTR-3B Table 3.1(d) (inward supplies liable to reverse charge). Pay IGST at 18% on the foreign invoice value. ITC on this RCM payment is available for set-off against output tax liability in the same GSTR-3B, making it cash-neutral for most Pune businesses.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RCM reported in 3.1(d)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC set-off claimed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Table 3.1(d)</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">RCM Reported</text></svg></div><span class="illustration-label">RCM Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Regular Returns for Indian OIDAR Providers</h3><p class="step-description">Pune SaaS companies file GSTR-1 (outward supply details) and GSTR-3B on regular monthly/quarterly schedules. Export of OIDAR reported in GSTR-1 Table 6A (exports with IGST) or as zero-rated under LUT. ITC refund on export OIDAR via Form RFD-01. Patron files all returns from its Wagholi, Pune office.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-1/3B filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Export compliance met</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Indian Provider</text></svg></div><span class="illustration-label">All Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for OIDAR GST Compliance in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Form GST REG-10:</strong> For foreign OIDAR provider registration (self-attested passport + tax ID).</li><li><strong>OIDAR Service Agreement/Contract:</strong> Defining the nature of digital services provided.</li><li><strong>Foreign Invoices:</strong> For Indian recipients computing RCM - with service description, value and currency.</li><li><strong>Exchange Rate Records:</strong> INR conversion at applicable RBI rate under Rule 34, CGST Rules.</li><li><strong>Place of Supply Evidence:</strong> Recipient address, credit card country code, or SIM card data under Section 13(12).</li><li><strong>LUT (Letter of Undertaking):</strong> For Indian OIDAR providers exporting services without IGST payment.</li><li><strong>BRC/FIRC:</strong> Bank Realisation Certificate for OIDAR service export proceeds.</li><li><strong>Record of Supplies under Rule 56:</strong> Detailed record of services, consideration received and taxes paid.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> For Hinjewadi SaaS companies with both inbound (consuming AWS/Azure) and outbound (providing SaaS globally) OIDAR flows, maintain separate registers for RCM liability computation and export zero-rated supply tracking to avoid cross-contamination during GST audit by CGST Audit Commissionerate, Pune.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common OIDAR GST Compliance Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>B2B vs B2C Misclassification</td><td>Incorrect classification of OIDAR recipients leads to double taxation or non-payment</td><td>Patron advises on correct classification per Section 14 IGST Act for each recipient</td></tr><tr><td>Finance Act 2023 Definition Expansion</td><td>EdTech and professional services in Baner/Koregaon Park haven't assessed impact of removed automation qualifiers</td><td>Patron provides one-time impact assessment identifying newly covered services</td></tr><tr><td>RCM on Cloud Infrastructure Costs</td><td>Hinjewadi IT companies under-report or miss RCM on AWS/Azure/Google Cloud subscriptions</td><td>Patron computes RCM on all foreign OIDAR invoices with correct exchange rate conversion</td></tr><tr><td>Dual Role Complexity</td><td>Pune SaaS companies providing OIDAR globally while consuming foreign OIDAR must manage two distinct streams</td><td>Patron manages export zero-rated + inbound RCM in the same GSTR-3B seamlessly</td></tr>

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
            <h2 class="section-title">OIDAR GST Return Filing Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-5A Monthly Filing (foreign provider)</td><td>Patron Rs 5,000-15,000/month (incl. Nil returns)</td></tr><tr><td>GST REG-10 Registration (foreign provider)</td><td>Patron Rs 10,000-25,000 (one-time)</td></tr><tr><td>RCM Computation + GSTR-3B Reporting</td><td>Patron Rs 3,000-10,000/month</td></tr><tr><td>Indian OIDAR Provider (GSTR-1/3B)</td><td>Patron Rs 3,000-10,000/month</td></tr><tr><td>Export OIDAR ITC Refund (RFD-01)</td><td>Patron Rs 7,000-20,000/claim</td></tr><tr><td>Authorised Representative Service</td><td>Patron Rs 10,000-30,000/year</td></tr><tr><td>Finance Act 2023 Impact Assessment</td><td>Patron Rs 5,000-15,000 (one-time)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Returns for OIDAR in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20OIDAR%20GST%20Returns%20in%20Pune.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OIDAR GST Return Filing Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-5A (monthly)</td><td>20th of the following month</td></tr><tr><td>GSTR-1 (monthly, Indian providers)</td><td>11th of the following month</td></tr><tr><td>GSTR-3B (monthly, Indian providers + RCM)</td><td>20th of the following month</td></tr><tr><td>GST REG-10 (foreign providers)</td><td>5 days before commencing business</td></tr><tr><td>Nil GSTR-5A</td><td>20th of following month (mandatory even if no supplies)</td></tr><tr><td>ITC Refund (RFD-01, Indian exporters)</td><td>Within 2 years from relevant date</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> No visit to the CGST Commissionerate Pune is required - Patron's Pune office at RTC Silver, Wagholi handles all OIDAR GST compliance online. The CGST Audit Commissionerate, Pune is actively issuing notices for missed RCM on foreign OIDAR subscriptions - proactive filing avoids scrutiny.</p>

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
            <h2 class="section-title">Why Choose Patron for OIDAR GST Returns in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office Presence</h3><p class="feature-text">RTC Silver, Wagholi - serving SaaS companies, IT firms and digital service providers across Hinjewadi, Kharadi, Baner and Magarpatta.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Dual OIDAR Expertise</h3><p class="feature-text">Manages both provider-side (GSTR-1/3B, export LUT) and recipient-side (RCM in GSTR-3B) OIDAR compliance from a single service point.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Indian Representative Service</h3><p class="feature-text">Acts as authorised Indian representative for foreign OIDAR providers requiring GST REG-10 registration and GSTR-5A filing.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Finance Act 2023 Ready</h3><p class="feature-text">Expanded OIDAR definition impact assessed and communicated. Pune EdTech and professional services firms covered proactively.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold." - CFO, Manufacturing, Maharashtra</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves IT companies and digital service providers across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OIDAR GST Compliance Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Scenario</th><th>Who Pays GST</th><th>Return Form</th></tr></thead>
                    <tbody>
                        <tr><td>Foreign to Indian B2C (unregistered)</td><td>Foreign supplier (IGST 18%)</td><td>GSTR-5A</td></tr><tr><td>Foreign to Indian B2B (registered)</td><td>Indian recipient (RCM 18%)</td><td>GSTR-3B</td></tr><tr><td>Indian to Indian</td><td>Indian supplier (forward charge)</td><td>GSTR-1/3B</td></tr><tr><td>Indian to Foreign (Export)</td><td>Zero-rated (LUT/IGST refund)</td><td>GSTR-1/3B</td></tr><tr><td>Via Intermediary (B2C)</td><td>Intermediary pays IGST</td><td>GSTR-5A</td></tr>

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
                
                <p>For Pune businesses needing related GST and compliance services:</p><ul><li><a href="/gst-returns/pune">GST Returns in Pune</a></li><li><a href="/gst-registration/pune">GST Registration in Pune</a></li><li><a href="/gst-refund">GST Refund</a></li><li><a href="#">Import Export Code</a></li><li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a></li><li><a href="/accounting-services">Accounting Services</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for OIDAR GST</h2>
            <div class="content-text">
                
                <p><strong>Section 2(17), IGST Act 2017:</strong> Defines OIDAR services. Finance Act 2023 removed "essentially automated" and "minimal human intervention" qualifiers.</p><p><strong>Section 14, IGST Act:</strong> Special provisions for OIDAR - foreign supplier to non-taxable online recipient must pay IGST. Intermediaries treated as suppliers.</p><p><strong>Section 13(12), IGST Act:</strong> Place of supply - determined by recipient address, credit card country code, SIM card country code or billing address.</p><p><strong>Rule 64, CGST Rules:</strong> Appointment of authorised representative by foreign OIDAR providers.</p><p><strong>Rule 56, CGST Rules:</strong> Record-keeping requirements for foreign OIDAR providers.</p><p><strong>Form GST REG-10:</strong> Simplified registration. Must be filed 5 days before commencing business.</p><p><strong>Form GSTR-5A:</strong> Monthly return for non-resident OIDAR. Due 20th. No ITC. Nil mandatory.</p><p><strong>GST Rate:</strong> 18% on OIDAR (SAC 998431/998432).</p><p><strong>Portal:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a> | <strong>CGST Pune:</strong> Commissionerate Pune-I/II (punecgstcus.gov.in).</p>

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
                    <h2 class="faq-expanded__title">FAQs - GST Returns for OIDAR Services in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about OIDAR GST compliance in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Returns for OIDAR in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles OIDAR compliance in Pune?</h3>
                        <div class="faq-expanded__a"><p>For Indian OIDAR providers registered in Pune, the CGST Commissionerate Pune-I or Pune-II and Maharashtra GST Pune District handle compliance. Foreign OIDAR providers register centrally via GST REG-10 on the national GST portal. Patron Accounting manages all OIDAR filings from its Pune office at Wagholi.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the GST rate on OIDAR services?</h3>
                        <div class="faq-expanded__a"><p>OIDAR services are taxed at 18% GST (18% IGST for inter-state/cross-border, or 9% CGST + 9% SGST for intra-state). This applies uniformly whether the supply is B2B or B2C, domestic or cross-border. Foreign providers pay IGST at 18% on B2C supplies via GSTR-5A. Indian recipients of foreign OIDAR pay 18% under RCM in GSTR-3B.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the due date for GSTR-5A?</h3>
                        <div class="faq-expanded__a"><p>GSTR-5A must be filed by the 20th of the month following the tax period. Nil GSTR-5A must also be filed if no supplies were made during the month. Currently no late fee is charged for delayed GSTR-5A filing, but interest applies on delayed tax payment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is reverse charge applicable on OIDAR services received from abroad?</h3>
                        <div class="faq-expanded__a"><p>Yes. When a GST-registered Pune business (B2B) receives OIDAR services from a foreign provider like AWS, Google Cloud or Salesforce, Reverse Charge Mechanism applies under Section 5(3) of the IGST Act. The Indian recipient must self-assess and pay IGST at 18% in GSTR-3B. ITC on this RCM payment is available for set-off.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a foreign OIDAR provider appoint an agent in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Rule 64 of the CGST Rules, foreign OIDAR providers may appoint an authorised representative in India to handle GST registration (REG-10), GSTR-5A filing, tax payment and compliance correspondence. Patron Accounting acts as the Indian authorised representative for foreign digital service providers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How did Finance Act 2023 change OIDAR definition?</h3>
                        <div class="faq-expanded__a"><p>The Finance Act 2023 removed the qualifiers "essentially automated" and "minimal human intervention" from Section 2(17) of the IGST Act. This expanded the scope to include digital services with significant human involvement - such as online tutoring, virtual consulting and human-assisted digital platforms. Pune EdTech companies should assess whether their services now fall under OIDAR.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do Pune SaaS companies exporting OIDAR need to pay GST?</h3>
                        <div class="faq-expanded__a"><p>Export of OIDAR services from India qualifies as zero-rated supply under the IGST Act. Pune SaaS companies can export without paying IGST by filing a Letter of Undertaking (LUT) and claim ITC refund via Form RFD-01. Alternatively, they can pay IGST on export and claim a refund. Patron manages the complete export compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is ITC available on GSTR-5A?</h3>
                        <div class="faq-expanded__a"><p>No. Foreign OIDAR providers filing GSTR-5A cannot claim any Input Tax Credit. No electronic credit ledger is maintained for GSTR-5A filers. The full tax liability must be paid through the electronic cash ledger.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>OIDAR kya hai GST mein?</strong> Online Information and Database Access or Retrieval services - cloud, SaaS, streaming, e-books, online ads - Section 2(17) IGST Act. 18% GST lagta hai.</p><p><strong>Pune mein OIDAR ka GST kaise file karein?</strong> Foreign provider: GSTR-5A 20 tarikh tak. Indian provider: regular GSTR-1/3B. Indian recipient (B2B): RCM 18% GSTR-3B mein. Patron Pune se sab handle karta hai.</p><p><strong>GSTR-5A mein ITC milta hai?</strong> Nahi. Foreign OIDAR providers ko koi ITC nahi milta. Poora tax cash ledger se pay karna hota hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Ignore OIDAR GST Compliance - CGST Pune Is Watching</h2>
            <div class="content-text">
                
                <p>GSTR-5A is due by the <strong>20th of every month</strong> including Nil returns. The Finance Act 2023 expanded the OIDAR definition, potentially bringing new Pune digital service providers under coverage. For Pune IT companies, <strong>RCM at 18%</strong> on AWS/Azure/Google Cloud must be self-assessed in every GSTR-3B - the CGST Audit Commissionerate, Pune is actively issuing notices for missed RCM. Section 14 imposes <strong>no threshold exemption</strong> for foreign OIDAR registration.</p><p><strong>Get OIDAR GST compliant now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20OIDAR%20GST%20Returns%20in%20Pune.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. Free compliance assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get OIDAR GST Compliance Right in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">GST returns for OIDAR services in Pune involve multiple compliance streams - GSTR-5A for foreign providers, regular GSTR-1/GSTR-3B for Indian SaaS companies, and RCM reporting for businesses consuming foreign digital services. Whether you provide cloud services from Hinjewadi, operate a SaaS platform from Kharadi, or consume AWS and Salesforce from Magarpatta, accurate compliance is critical.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides end-to-end OIDAR GST services - from foreign provider registration and GSTR-5A filing to RCM computation, export compliance and ITC refund management.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years GST practice, 10,000+ businesses served, and a 4.9 Google rating, Patron serves as authorised Indian representative for foreign OIDAR providers across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20OIDAR%20GST%20Returns%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20OIDAR%20GST%20Returns%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20OIDAR%20GST%20return%20filing%20services%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">OIDAR GST Returns Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert OIDAR GST compliance in all major cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/gst-returns-for-oidar/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-oidar/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/gst-returns-for-oidar/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end GST and digital services compliance in Pune</div><div class="pa-cross-grid"><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-refund/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect OIDAR definition changes, GSTR-5A portal updates, Finance Act amendments and CGST circular updates. Last review: March 2026. Next review: September 2026.</p>
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
