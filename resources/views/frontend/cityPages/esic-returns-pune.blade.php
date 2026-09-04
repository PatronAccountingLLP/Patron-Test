
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>ESIC Return Filing in Pune - Process, Due Date & Fees</title>
    <meta name="description" content="CA-assisted ESIC return filing in Pune. Monthly contributions by 15th, half-yearly returns on time. Serving Hinjewadi, Kharadi, Chakan MIDC businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/esic-returns/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESIC Return Filing in Pune - Process, Due Date & Fees">
    <meta property="og:description" content="CA-assisted ESIC return filing in Pune. Monthly contributions by 15th, half-yearly returns on time. Serving Hinjewadi, Kharadi, Chakan MIDC businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/esic-returns/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESIC Return Filing in Pune - Process, Due Date & Fees">
    <meta name="twitter:description" content="CA-assisted ESIC return filing in Pune. Monthly contributions by 15th, half-yearly returns on time. Serving Hinjewadi, Kharadi, Chakan MIDC businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ESIC Return Filing in Pune - Process, Due Date & Fees",
      "description": "CA-assisted ESIC return filing in Pune. Monthly contributions by 15th, half-yearly returns on time. Serving Hinjewadi, Kharadi, Chakan MIDC businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/esic-returns/pune",
      "serviceType": "ESIC Return Filing in Pune - Process, Due Date & Fees",
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
          "name": "Esic Returns",
          "item": "https://www.patronaccounting.com/esic-returns"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESIC Return Filing in Pune - Process, Due Date & Fees",
          "item": "https://www.patronaccounting.com/esic-returns/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ESIC office handles return filing for Pune businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The ESIC Sub Regional Office, Pune (sropune.esic.gov.in) oversees ESIC compliance for Pune and surrounding areas, operating under the Regional Office Mumbai. However, all return filings are done online through the ESIC portal (www.esic.gov.in) using the 17-digit employer code. No physical visit to the ESIC office is required. Patron Accounting manages the entire process from its Pune office."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file ESIC returns online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All ESIC returns - monthly contributions, half-yearly returns, and NIL declarations - are filed online through the ESIC portal. Patron Accounting handles the complete filing cycle from its Pune office at Wagholi, including challan generation, payment, self-certification, and CA certificate upload for employers with 40+ employees."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for ESIC return filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Monthly returns must be filed by the 15th of the following month (e.g., March returns by 15th April). Half-yearly returns are due by 12th November (for April-September) and 12th May (for October-March). Late filing attracts 12% simple interest per annum, damages of 5-25%, and potential prosecution under Section 85 of the ESI Act."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late ESIC return filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late ESIC returns attract 12% simple interest per annum on delayed contributions (Regulation 31-A), damages of 5% to 25% depending on the delay period (Regulation 31-C), imprisonment up to 2 years and fine up to Rs 5,000 under Section 85-A for repeat offenders, and criminal breach of trust charges under IPC Section 406 if employee contributions are not deposited."
          }
        },
        {
          "@type": "Question",
          "name": "Is a NIL return required if no ESI contributions were made?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Even if no employee contributions arose during a month, the employer must submit a NIL Declaration on the ESIC portal by the 15th of the following month. Non-filing of a NIL return is treated as non-compliance under Section 85 and can attract the same penalties as failing to file a regular return. Many Pune startups are unaware of this requirement."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a CA certificate for ESIC return filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Chartered Accountant certificate is mandatory for establishments employing 40 or more employees. The CA certificate must be uploaded on the ESIC portal along with the self-certification during the monthly return filing process. It certifies the accuracy of wage data and contribution calculations. Patron's in-house CA team prepares this for qualifying Pune businesses."
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
                        ESIC Returns in Pune: Timely Filing with Expert CA Support
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Monthly Return:</span> File contribution + return by 15th of the following month on ESIC portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Half-Yearly:</span> Apr-Sep due 12th Nov; Oct-Mar due 12th May</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicability:</span> All ESIC-registered establishments with 10+ employees</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> 12% interest p.a. + 5-25% damages + imprisonment up to 2 years under Section 85</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESIC Returns in Pune',
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
    'ctaText'    => 'Get expert ESIC return filing and payroll compliance for your Pune business today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Are ESIC Returns</a><a href="#who-section" class="toc-btn">Who Must File</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Penalties</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Returns in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESIC Returns in Pune Services at a Glance</strong></p>
                    <p>ESIC return filing in Pune is the mandatory process of reporting employee ESI contributions to the ESIC portal. Employers must file monthly returns by the 15th of the following month and half-yearly returns by 12th November (Apr-Sep) and 12th May (Oct-Mar). IT companies in Hinjewadi, manufacturers at Chakan MIDC, and BPOs in Magarpatta must file on time or face 12% interest, 5-25% damages, and imprisonment up to 2 years.</p>
                </div>
                <p>Pune is one of Maharashtra's largest employment hubs with thousands of ESIC-registered establishments across Hinjewadi IT Park, Kharadi, Chakan MIDC, MIDC Bhosari, and Pimpri-Chinchwad. The ESIC Sub Regional Office, Pune (sropune.esic.gov.in), operating under the Regional Office Mumbai, handles registrations, inspections, and benefit administration. Every ESIC-registered employer must file monthly and half-yearly returns through the <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESIC portal</a>. Learn more about <a href="/payroll-services">Payroll Services across India</a>.</p>
                <p>Failure to file attracts penalties under Section 85 of the ESI Act, 1948, including imprisonment up to 2 years and fines up to Rs 5,000. For Pune businesses with 40 or more employees, a Chartered Accountant certificate must be uploaded along with the return. Patron Accounting's Pune office handles the entire ESIC return filing cycle including contribution computation, challan generation, CA certificate preparation and inspection support. See also <a href="/payroll-processing-and-management-services/pune">Payroll Processing in Pune</a> and <a href="#">Professional Tax Registration in Pune</a>.</p>
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
                <h2 class="section-title">What Are ESIC Returns?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESIC returns are the statutory filings under the Employees' State Insurance Act, 1948 through which employers report employee wages, ESI contributions (0.75% employee + 3.25% employer), and workforce details to the ESIC portal on a monthly and half-yearly basis.</p><p>There are two types: the <strong>monthly contribution return</strong> (filed by the 15th of the following month along with challan payment) and the <strong>half-yearly return</strong> (filed by 12th November for April-September and 12th May for October-March). Even if no employee contributions were made, the employer must submit a <strong>NIL Declaration</strong>.</p><p>For Pune-based IT companies in Hinjewadi and Kharadi with 40+ employees, the monthly return requires uploading a <strong>CA certificate</strong>. Manufacturing units at Chakan MIDC and MIDC Bhosari with contract workers must ensure the principal employer files returns covering all contract labour ESI contributions under Section 40 of the ESI Act - a requirement many Pune factories overlook during ESIC inspections.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESIC Returns in Pune:</strong></p>
                    <ul><li><strong>ESI Contribution:</strong> Employee 0.75% + Employer 3.25% of gross wages deposited monthly</li><li><strong>Section 85:</strong> Penalty provision for failure to pay contributions or file returns</li><li><strong>Regulation 31-A:</strong> 12% simple interest per annum on each day of delay</li><li><strong>NIL Declaration:</strong> Mandatory filing even when no ESI contributions arise</li><li><strong>Section 40:</strong> Principal employer responsible for contract labour ESI compliance</li><li><strong>CA Certificate:</strong> Mandatory for employers with 40+ employees confirming wage data accuracy</li></ul>

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
                            <!-- ESI tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESI</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESIC Returns in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ESIC SRO</span>
                        <strong>Pune (under RO Mumbai)</strong>
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
            <h2 class="section-title">Who Must File ESIC Returns in Pune?</h2>
            <div class="content-text">
                
                <p>Every establishment registered under the ESI Act, 1948 in Pune must file returns, regardless of business type or current employee strength. Once registered, the obligation continues even if employee count drops below 10.</p><p><strong>IT companies and BPOs</strong> in Hinjewadi IT Park, Kharadi, and Magarpatta City with large workforces must file returns covering ESI-eligible employees (earning up to Rs 21,000/month) and submit NIL returns for zero-contribution months. Companies with <strong>40+ employees</strong> must upload a CA certificate.</p><p><strong>Manufacturing units</strong> at Chakan MIDC, MIDC Bhosari, and Talegaon with contract workers bear dual filing responsibility - the principal employer must file returns covering all contract labour ESI contributions under Section 40.</p><p><strong>Startups and SMEs</strong> in Baner, Koregaon Park and Pimpri-Chinchwad that registered for ESIC upon crossing 10 employees must maintain continuous filing even during lean periods. See also <a href="/shop-act-registration">Shop Act Registration</a> and <a href="#">MSME Registration</a> for related compliance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Return Filing Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Return Preparation</td><td>Computing employee and employer ESI contributions (0.75% + 3.25%) on gross wages and preparing the return for filing on the ESIC portal.</td></tr><tr><td>Challan Generation & Payment</td><td>Generating the ESIC challan and ensuring timely payment by the 15th of the following month. Supplementary challans for short payments.</td></tr><tr><td>Half-Yearly Return Filing</td><td>Preparing and submitting half-yearly returns for Apr-Sep (due 12th Nov) and Oct-Mar (due 12th May) consolidating all monthly filings.</td></tr><tr><td>NIL Return Filing</td><td>Submitting NIL declarations for months with no ESI-eligible employees to maintain continuous compliance and avoid Section 85 penalties.</td></tr><tr><td>CA Certificate Upload</td><td>Preparing and uploading the mandatory Chartered Accountant certificate for Pune establishments with 40+ employees.</td></tr><tr><td>Contract Labour Return Management</td><td>Managing ESI returns for principal employers with contract workers at Chakan MIDC and industrial zones under Section 40.</td></tr><tr><td>Inspection Record Preparation</td><td>Maintaining wage registers, attendance records and challan receipts for ESIC SRO Pune inspections.</td></tr><tr><td>Bundled Statutory Returns</td><td>Combined ESIC + PF (ECR) + <a href="#">PT</a> + MLWF return filing as a single service.</td></tr>

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
            <h2 class="section-title">ESIC Return Filing Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune team manages the entire ESIC return filing cycle - from monthly contribution computation to half-yearly return and inspection support.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Log In to the ESIC Portal</h3><p class="step-description">Access the ESIC employer portal at www.esic.gov.in using your 17-digit employer registration code and password. The portal is the single window for all return filings, employee management and challan generation. For Pune establishments registered under the ESIC Sub Regional Office, Pune, the same national portal applies. Patron's Pune office maintains portal credentials for all managed clients.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Credentials secured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="8" rx="4" fill="#E8712C" opacity="0.3"/><rect x="30" y="35" width="40" height="8" rx="4" fill="#14365F" opacity="0.1"/><circle cx="90" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M87 55l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Portal Login</text></svg></div><span class="illustration-label">Logged In</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Verify Employee Details and Update Records</h3><p class="step-description">Before filing, verify all employee records - wages, joining dates, exit dates and Aadhaar-linked details. For Hinjewadi IT companies with mid-year appraisals, ensure wage changes are reflected. Add new employees (enrolment within 10 days of joining). Remove exited employees from the active list.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New joinees added</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="30" r="10" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="30" r="10" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="80" cy="30" r="10" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="25" y="50" width="70" height="25" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="66" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Verify Staff</text></svg></div><span class="illustration-label">Updated</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Monthly ESI Contributions</h3><p class="step-description">Calculate ESI for each eligible employee: Employee share = 0.75% of gross wages, Employer share = 3.25% of gross wages. Gross wages include basic + DA + HRA + city compensatory allowance + regular allowances. Exclude annual bonus, gratuity, leave encashment. For Chakan MIDC factories with daily-wage workers, compute on actual wages earned.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Contributions computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wage mapping done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">0.75%</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">+</text><text x="60" y="55" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">3.25%</text></svg></div><span class="illustration-label">Calculated</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Generate Challan and Make Payment by the 15th</h3><p class="step-description">Select 'File Monthly Returns', enter bank details and submit. Navigate to 'Generate Challan' and pay the combined employee + employer contribution online by the 15th of the following month. Download and preserve the challan for ESIC SRO Pune inspections. Generate supplementary challan for any short payments.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challan generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payment by 15th confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="15" rx="5" fill="#E8712C" opacity="0.7"/><text x="60" y="36" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">CHALLAN</text><text x="60" y="58" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Pay by 15th</text></svg></div><span class="illustration-label">Paid</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Complete Self-Certification and CA Certificate</h3><p class="step-description">Under 'Monthly Contribution', select 'Self-certification', tick the checkbox and submit. For Pune establishments with 40+ employees, upload the CA certificate before submitting. Patron's in-house CA team prepares this certificate for all qualifying Pune clients.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Self-cert submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA cert uploaded (40+)</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="37" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Self-Cert</text><rect x="65" y="8" width="45" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="87" y="30" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CA Cert</text><text x="87" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">40+</text></svg></div><span class="illustration-label">Certified</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Half-Yearly Return and Download Records</h3><p class="step-description">At period end, file half-yearly return: Apr-Sep (due 12th November) and Oct-Mar (due 12th May). The return consolidates all monthly filings. Download filed returns and challan receipts. Patron maintains digital archives for Pune clients, ready for ESIC SRO inspections.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Half-yearly filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records archived</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Half-Yearly Filed</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ESIC Return Filing in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>17-digit ESIC Employer Code:</strong> Unique registration number issued at ESIC registration.</li><li><strong>Wage Register:</strong> Monthly wage details for all employees including basic, DA, HRA and other allowances.</li><li><strong>Attendance Register (Muster Roll):</strong> Daily attendance records, particularly important for Chakan MIDC factory workers.</li><li><strong>Employee Details:</strong> Aadhaar-linked details, insurance number, family details, joining/exit dates.</li><li><strong>Bank Account Details:</strong> For online challan generation and ESI contribution payment.</li><li><strong>Contribution Statement:</strong> Monthly ESI calculation worksheet showing employee (0.75%) and employer (3.25%) shares.</li><li><strong>CA Certificate:</strong> Mandatory for 40+ employee establishments - certifying accuracy of wage data.</li><li><strong>Accident Register:</strong> Record of any workplace accidents reported during the period.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> For manufacturing units at Chakan MIDC with contract labour, maintain separate wage registers and attendance records for direct and contract workers. The principal employer must have access to contractor records for ESIC filing and inspections.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ESIC Return Filing Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>CA Certificate for IT Companies</td><td>Hinjewadi and Kharadi IT companies with 40+ employees discover requirement at the last minute</td><td>Patron prepares the CA certificate proactively as part of monthly return process</td></tr><tr><td>Contract Labour Returns at MIDC</td><td>Chakan MIDC factories confused about principal employer obligation under Section 40</td><td>Patron manages contract labour ESI filings ensuring principal employer compliance</td></tr><tr><td>NIL Return Awareness</td><td>Pune startups that reduced headcount assume no filing needed - NIL Declaration is mandatory</td><td>Patron files NIL returns automatically every month for all managed clients</td></tr><tr><td>Supplementary Challan Errors</td><td>Mid-year increments and variable pay cause short payments at Magarpatta BPOs</td><td>Patron's automated wage mapping catches discrepancies before filing</td></tr>

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
            <h2 class="section-title">ESIC Return Filing Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Return Filing</td><td>Patron Rs 1,500 - Rs 5,000/month</td></tr><tr><td>Challan Generation & Payment</td><td>Included in monthly filing</td></tr><tr><td>Half-Yearly Return Filing</td><td>Patron Rs 1,500 - Rs 3,000 (twice a year)</td></tr><tr><td>CA Certificate (40+ employees)</td><td>Patron Rs 2,000 - Rs 5,000/month</td></tr><tr><td>NIL Return Filing</td><td>Patron Rs 500 - Rs 1,000</td></tr><tr><td>ESIC Inspection Support</td><td>Patron Rs 5,000 - Rs 15,000 per inspection</td></tr><tr><td>Bundled: ESI+PF+PT+MLWF Returns</td><td>Patron Rs 5,000 - Rs 15,000/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESIC Returns in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Return Filing Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly contribution + return</td><td>15th of the following month</td></tr><tr><td>CA certificate upload</td><td>Along with monthly return (40+ employees)</td></tr><tr><td>Half-yearly return (Apr-Sep)</td><td>12th November</td></tr><tr><td>Half-yearly return (Oct-Mar)</td><td>12th May</td></tr><tr><td>NIL declaration</td><td>15th of the following month (mandatory)</td></tr><tr><td>New employee enrolment</td><td>Within 10 days of joining</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> No visit to the ESIC Sub Regional Office, Pune is required for return filing - Patron's Pune office at RTC Silver, Wagholi handles all online filings from the ESIC portal. Patron files by the 10th and generates challans by the 14th to ensure zero late filings for Pune clients.</p>

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
            <h2 class="section-title">Why Choose Patron for ESIC Returns in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office Presence</h3><p class="feature-text">RTC Silver, Wagholi - serving businesses across Hinjewadi, Kharadi, Wakad, Baner, Chakan MIDC, MIDC Bhosari and Pimpri-Chinchwad.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">CA Certificate In-House</h3><p class="feature-text">In-house Chartered Accountants prepare the mandatory CA certificate for 40+ employee establishments - no external coordination needed.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Bundled Filing</h3><p class="feature-text">ESIC + PF (ECR) + PT (Maharashtra Professional Tax) + MLWF returns as a single bundled service, reducing cost and eliminating missed deadlines.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Zero Penalty Record</h3><p class="feature-text">10,000+ businesses served. Patron files by the 10th and generates challans by the 14th - zero penalty record for Pune ESIC clients.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Patron's payroll team handles 200+ employees without a single error month on month." - HR Head, IT Company, Pune</blockquote><p>Trusted by Hyundai, Asian Paints, Bridgestone and growing startups across Maharashtra. With offices in Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Return Filing Penalty Structure</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Delay Period</th><th>Damages Rate</th><th>Additional Consequences</th></tr></thead>
                    <tbody>
                        <tr><td>Up to 2 months</td><td>5% per annum</td><td>12% simple interest on delayed contribution (Reg 31-A)</td></tr><tr><td>2-4 months</td><td>10% per annum</td><td>12% interest + ESIC SRO notice</td></tr><tr><td>4-6 months</td><td>15% per annum</td><td>12% interest + possible prosecution under Section 85</td></tr><tr><td>Above 6 months</td><td>25% per annum</td><td>12% interest + imprisonment up to 2 years + fine Rs 5,000</td></tr><tr><td>Non-filing of return</td><td>Section 85 offence</td><td>Imprisonment up to 1 year + fine Rs 4,000 (first); 2 years + Rs 5,000 (repeat)</td></tr><tr><td>Non-deposit of employee ESI</td><td>IPC 406 - Criminal Breach of Trust</td><td>Imprisonment up to 3 years under IPC</td></tr>

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
                
                <p>For Pune businesses needing related payroll and compliance services:</p><ul><li><a href="/payroll-services">Payroll Services (India)</a> - National payroll management</li><li><a href="/payroll-processing-and-management-services/pune">Payroll Processing in Pune</a> - End-to-end payroll</li><li><a href="#">Professional Tax Registration in Pune</a></li><li><a href="/gst-returns/pune">GST Returns in Pune</a></li><li><a href="/shop-act-registration">Shop Act Registration</a></li><li><a href="/private-limited-company-compliance">Pvt Ltd Company Compliance</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for ESIC Returns</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Employees' State Insurance Act, 1948.</p><p><strong>Section 44:</strong> Employer to furnish returns and maintain registers as prescribed.</p><p><strong>Section 85(a):</strong> Penalty for failure to pay contribution or file returns - imprisonment up to 1 year, fine up to Rs 4,000.</p><p><strong>Section 85-A:</strong> Enhanced punishment for repeat offenders - imprisonment up to 2 years, fine Rs 5,000.</p><p><strong>Section 85-B:</strong> ESIC power to levy damages (5-25%) for delayed/non-payment.</p><p><strong>Regulation 31:</strong> Monthly contribution to be paid by the 15th of the following month.</p><p><strong>Regulation 31-A:</strong> 12% simple interest per annum for each day of delay.</p><p><strong>IPC Section 406:</strong> Non-deposit of employee-deducted ESI contribution is criminal breach of trust.</p><p><strong>Portal:</strong> <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESIC - www.esic.gov.in</a></p><p><strong>ESIC SRO Pune:</strong> sropune.esic.gov.in (under Regional Office Mumbai). CA certificate mandatory for 40+ employee establishments.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ESIC Returns in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about ESIC return filing in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESIC Returns in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ESIC office handles return filing for Pune businesses?</h3>
                        <div class="faq-expanded__a"><p>The ESIC Sub Regional Office, Pune (sropune.esic.gov.in) oversees ESIC compliance for Pune and surrounding areas, operating under the Regional Office Mumbai. However, all return filings are done online through the ESIC portal (www.esic.gov.in) using the 17-digit employer code. No physical visit to the ESIC office is required. Patron Accounting manages the entire process from its Pune office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I file ESIC returns online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. All ESIC returns - monthly contributions, half-yearly returns, and NIL declarations - are filed online through the ESIC portal. Patron Accounting handles the complete filing cycle from its Pune office at Wagholi, including challan generation, payment, self-certification, and CA certificate upload for employers with 40+ employees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the due date for ESIC return filing?</h3>
                        <div class="faq-expanded__a"><p>Monthly returns must be filed by the 15th of the following month (e.g., March returns by 15th April). Half-yearly returns are due by 12th November (for April-September) and 12th May (for October-March). Late filing attracts 12% simple interest per annum, damages of 5-25%, and potential prosecution under Section 85 of the ESI Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late ESIC return filing?</h3>
                        <div class="faq-expanded__a"><p>Late ESIC returns attract 12% simple interest per annum on delayed contributions (Regulation 31-A), damages of 5% to 25% depending on the delay period (Regulation 31-C), imprisonment up to 2 years and fine up to Rs 5,000 under Section 85-A for repeat offenders, and criminal breach of trust charges under IPC Section 406 if employee contributions are not deposited.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is a NIL return required if no ESI contributions were made?</h3>
                        <div class="faq-expanded__a"><p>Yes. Even if no employee contributions arose during a month, the employer must submit a NIL Declaration on the ESIC portal by the 15th of the following month. Non-filing of a NIL return is treated as non-compliance under Section 85 and can attract the same penalties as failing to file a regular return. Many Pune startups are unaware of this requirement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need a CA certificate for ESIC return filing?</h3>
                        <div class="faq-expanded__a"><p>A Chartered Accountant certificate is mandatory for establishments employing 40 or more employees. The CA certificate must be uploaded on the ESIC portal along with the self-certification during the monthly return filing process. It certifies the accuracy of wage data and contribution calculations. Patron's in-house CA team prepares this for qualifying Pune businesses.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>ESIC return kya hai?</strong> ESIC portal par employee wages aur ESI contributions (0.75% employee + 3.25% employer) report karna - monthly 15th tak aur half-yearly 12th Nov/12th May tak.</p><p><strong>Pune mein ESIC return kaise file karein?</strong> ESIC portal par login karein, employee details verify karein, contribution pay karein, challan generate karein, self-certification submit karein - sab online hota hai.</p><p><strong>Is NIL return mandatory?</strong> Haan. Zero ESI-eligible employees hone par bhi NIL Declaration file karna zaroori hai 15th tak. Section 85 penalty lag sakti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the 15th - File Your ESIC Returns on Time</h2>
            <div class="content-text">
                
                <p>ESIC monthly returns are due by the <strong>15th of every month</strong> - missing this triggers 12% interest plus damages. Half-yearly returns by <strong>12th November</strong> and <strong>12th May</strong>. Non-filing is a Section 85 offence carrying imprisonment up to 2 years. Non-deposit of employee-deducted ESI contributions is criminal breach of trust under IPC 406. Pune businesses with 40+ employees face additional risk if the CA certificate is not uploaded.</p><p><strong>Get expert ESIC return filing - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your ESIC Returns in Pune on Time</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">ESIC return filing in Pune is a monthly and half-yearly compliance obligation for every ESIC-registered establishment. Whether you operate from Hinjewadi IT Park, manufacture at Chakan MIDC, run a BPO at Magarpatta, or are a growing startup in Baner, timely filing by the 15th and 12th Nov/12th May is non-negotiable.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides end-to-end ESIC return filing - from contribution computation and challan generation to CA certificate preparation and inspection support. Bundled ESI+PF+PT+MLWF returns from a single team.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years payroll compliance experience, 10,000+ businesses served and a 4.9 Google rating, Patron serves Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESIC%20Returns%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20ESIC%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESIC Returns Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert ESIC return filing services in all major cities</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/esic-return/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esic-return/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/esic-return/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end payroll and compliance support in Pune</div><div class="pa-cross-grid"><a href="/payroll-processing-and-management-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Professional Tax</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect ESI rate changes, portal updates and deadline amendments. Last review: March 2026. Next review: September 2026.</p>
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
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
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
