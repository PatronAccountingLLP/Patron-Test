
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Hospital & Clinic Payroll Gurugram - PF, ESI & Shifts</title>
    <meta name="description" content="CA-led payroll for hospitals and clinics in Gurugram. Doctor retainer TDS, nurse shifts, PF/ESI, NABH norms. Medanta, Fortis corridor. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-processing-for-the-healthcare-industry/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Hospital & Clinic Payroll Gurugram - PF, ESI & Shifts">
    <meta property="og:description" content="CA-led payroll for hospitals and clinics in Gurugram. Doctor retainer TDS, nurse shifts, PF/ESI, NABH norms. Medanta, Fortis corridor. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-processing-for-the-healthcare-industry/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hospital & Clinic Payroll Gurugram - PF, ESI & Shifts">
    <meta name="twitter:description" content="CA-led payroll for hospitals and clinics in Gurugram. Doctor retainer TDS, nurse shifts, PF/ESI, NABH norms. Medanta, Fortis corridor. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Healthcare Payroll Services in Gurugram | Hospitals Clinics",
      "description": "CA-led payroll for hospitals and clinics in Gurugram. Doctor retainer TDS, nurse shifts, PF/ESI, NABH norms. Medanta, Fortis corridor. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-processing-for-the-healthcare-industry/gurugram",
      "serviceType": "Healthcare Payroll Services in Gurugram | Hospitals Clinics",
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
        "url": "https://www.patronaccounting.com/payroll-processing-for-the-healthcare-industry/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "12000",
          "maxPrice": "60000",
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
          "name": "Payroll Services for Healthcare in India",
          "item": "https://www.patronaccounting.com/payroll-processing-for-the-healthcare-industry"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Healthcare Payroll Services in Gurugram | Hospitals Clinics",
          "item": "https://www.patronaccounting.com/payroll-processing-for-the-healthcare-industry/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Doctor classification for TDS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Exclusive + hospital hours + infrastructure = employee S192 + PF/ESI. Independent + multiple hospitals + own schedule = consultant S194J 10%. Misclassification = retrospective PF + TDS mismatch."
          }
        },
        {
          "@type": "Question",
          "name": "Professional Tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Haryana has no PT. 1,000-employee hospital saves Rs 25L/year vs Mumbai. Both deduction and filing eliminated."
          }
        },
        {
          "@type": "Question",
          "name": "How much?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Clinic (30): Rs 12K-18K. Nursing home (100): Rs 20K-30K. Hospital (500): Rs 35K-60K. Large (500+): Rs 60K-1L. Diagnostic: Rs 12K-20K."
          }
        },
        {
          "@type": "Question",
          "name": "Nurse overtime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "2x beyond scheduled shift per Code on Wages. Night differential 10-25%. Weekly off premium. Total counts toward PF under 50% wage rule."
          }
        },
        {
          "@type": "Question",
          "name": "Maternity benefit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "26 weeks paid. Average daily wages x 182 days. 60%+ nursing female. 200-nurse hospital = 10-15 on leave anytime. Rs 15-25L liability. Creche for 50+."
          }
        },
        {
          "@type": "Question",
          "name": "NABH requirements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nurse-to-patient ratios. Qualification tracking (GNM/BSc/MSc) alongside payroll. Staff registers for accreditation inspections."
          }
        },
        {
          "@type": "Question",
          "name": "50% wage rule impact?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Basic min 50% CTC. Nurse Rs 25K with Rs 8K basic restructured to Rs 12.5K. PF increases. 200 nurses = Rs 1.3L/month added cost. Quick Answers Doctor employee hai ya consultant? Hospital hours, exclusively kaam, infrastructure use = employee S192 + PF. Independent, multiple hospitals = consultant S194J 10%. Nurse ki overtime? 8 ghante se zyada = 2x wages. Night shift pe 10-25% extra. Weekly off pe duty = premium. Total PF mein count hota hai. Maternity leave kitni? 26 weeks (182 din) paid. Average daily wages se. 50+ staff toh creche bhi zaroori."
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
                        Healthcare Payroll in Gurugram: Doctors, Nurses, and Clinical Staff Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Doctor Classification:</span> Employee S192 TDS + PF/ESI vs Consultant S194J 10% | Wrong classification = retrospective PF demand in crores</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>24/7 Nurse Shifts:</span> 3 shifts x 365 days | Night differential 10-25% | Overtime 2x | Weekly off rotation | Festival premium | PF on total</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Maternity &amp; NABH:</span> 26 weeks paid leave | 60%+ female nursing | Creche for 50+ staff | NABH nurse-to-patient ratios | Qualification tracking</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>From Rs 12,000/mo:</span> Clinic Rs 12,000 | Nursing home Rs 20,000 | Hospital Rs 35,000 | Large Rs 60,000 | Diagnostic Rs 12,000</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Our Gurugram office on Golf Course Extension Road serves hospitals along the Sector 38-44 corridor &ndash; 10,000+ businesses with 4.9&#9733; rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Processing%20for%20the%20Healthcare%20Industry%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Healthcare Payroll',
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
    'ctaText'    => 'Get doctor classification, nurse shift payroll, maternity benefit, and NABH compliance for your Gurugram hospital or clinic.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Staff Categories</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Why Patron</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Healthcare Payroll in Gurugram &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Healthcare Payroll Services at a Glance</strong></p>
                    <p>Healthcare payroll manages the widest pay spectrum: employed doctors (S192 + PF/ESI) vs consultant doctors (S194J 10%), nurses on 24/7 three-shift rotation (night differential 10-25%, OT 2x), paramedical shifts, admin CTC, support at Haryana min wage with ESI. Maternity 26 weeks (60%+ nursing female). NABH staff norms. EPF/ESI EPFO/ESIC Gurugram. No PT. Medanta/Fortis/Artemis/Max/Paras. Sector 38-44 corridor. From Rs 12,000/month.</p>
                </div>
                <p>Gurugram is NCR's healthcare capital: Medanta, Fortis, Artemis, Max, Paras + hundreds of clinics across Sector 38-44, Sohna Road, New Gurugram. Each employs 1,000-5,000+ staff. Doctor classification (employee vs consultant) is the highest-risk payroll decision. Learn more about <a href="/payroll-processing-for-the-healthcare-industry">Healthcare Payroll across India</a>.</p>
                <p>Patron's Golf Course Extension Road office provides healthcare-specific payroll with doctor classification, nurse shift computation, and NABH tracking. For healthcare accounting, see <a href="/healthcare-sector-accounting-services">Healthcare Accounting</a>. For general, see <a href="/payroll-services">Payroll Services</a>.</p>
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
                <h2 class="section-title">What Is Healthcare Payroll?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Multi-category payroll for clinical and non-clinical hospital workforce: employed doctor salary (PF/TDS), consultant retainer (S194J), 24/7 nurse shift scheduling with overtime and night differential, paramedical shifts, admin CTC, support at minimum wages with ESI. For <a href="/tds-return-filing-24q">TDS Return Filing</a>, see our page.</p>
                    <p>For Gurugram hospitals: widest pay spectrum in any sector (support min wage to super-specialist Rs 5-10L/month), 24/7 operational requirement, and doctor classification with massive TDS/PF implications. For <a href="#">Actuarial Valuation</a>, see our page.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Healthcare Payroll:</strong></p>
                    <ul><li><strong>Doctor Classification:</strong> Employee (S192 + PF/ESI) vs Consultant (S194J 10%). Control, exclusivity, infrastructure test</li><li><strong>24/7 Nurse Shifts:</strong> 3 shifts x 365 days. Night differential 10-25%. OT 2x. Weekly off rotation</li><li><strong>Maternity Benefit:</strong> 26 weeks paid. 60%+ nursing female. Average daily wages x 182 days. Creche for 50+</li><li><strong>NABH Norms:</strong> Nurse-to-patient ratios. Qualification tracking. Staff registers for accreditation</li><li><strong>50% Wage Rule:</strong> Basic min 50% CTC. Restructuring increases PF base significantly with shift allowances</li><li><strong>No PT:</strong> Haryana advantage &ndash; Rs 25L/year saved for 1,000-employee hospital vs Mumbai</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Healthcare Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>NABH Ready</span>
                        <strong>Healthcare</strong>
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
            <h2 class="section-title">Who Needs Healthcare Payroll in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Super-specialty hospitals (Medanta, Fortis, Artemis, Max, Paras)</strong> &ndash; 1,000-5,000+ staff. Multiple consultant arrangements. 200-1,000+ nurses on shifts. For <a href="/gst-registration/gurugram">GST Registration Gurugram</a>, see our page.</p>
                <p><strong>Nursing homes and smaller hospitals (50-200 beds)</strong> &ndash; Dual-role doctors (employed + external consulting). Nurse shifts. Tight budgets.</p>
                <p><strong>Clinics and polyclinics (Sohna Road, Golf Course Road)</strong> &ndash; 10-50 staff. Retainer doctors S194J + employed nurses S192. For <a href="/income-tax-return">ITR Filing</a>, see our page.</p>
                <p><strong>Diagnostic centres (SRL, Dr Lal PathLabs, standalone)</strong> &ndash; Lab technicians, radiographers on shifts. Paramedical pay scales. ESI for junior staff.</p>
                <p><strong>Dental, IVF, specialty centres</strong> &ndash; Small teams (5-30). Compliant from start to avoid back-demands at scale. For <a href="/statutory-audit">Statutory Audit</a>, see our page.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Healthcare Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Doctor Classification + TDS</td><td>Employee S192 (CTC + PF + ESI + TDS) vs Consultant S194J 10% (&gt;Rs 50K/yr). Classification based on control/exclusivity/infrastructure test</td></tr><tr><td>24/7 Nurse Shift Payroll</td><td>3-shift rotation (morning/evening/night). Night differential 10-25%. OT 2x. Weekly off. Festival premium. PF on total</td></tr><tr><td>EPF for All Staff</td><td>12%+12% on basic. EPFO Gurugram ECR by 15th. UAN generation. Transfer claims (25-40% nursing attrition)</td></tr><tr><td>ESI for Junior Staff</td><td>3.25%+0.75% gross &le;Rs 21K. Support, junior nurses, trainee paramedical. ESIC Gurugram. Medical benefits</td></tr><tr><td>Maternity Benefit</td><td>26 weeks paid. Average daily wages x 182 days. 60%+ nursing female. Creche for 50+ establishments. Accrual planning</td></tr><tr><td>Paramedical Payroll</td><td>Lab techs, radiographers, pharmacists, physiotherapists, OT techs. Shift or fixed. PF all; ESI if &lt;21K</td></tr><tr><td>Support at Haryana Min Wage</td><td>Housekeeping, security, laundry, kitchen, ambulance drivers. ESI applicable. Weekly off, OT, festival compliance</td></tr><tr><td>TDS Multi-Section</td><td>S192 employees. S194J 10% consultant doctors. S194C 1-2% outsourced services. Form 24Q + 26Q + 16/16A</td></tr>

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
            <h2 class="section-title">How Healthcare Payroll Works in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron delivers payroll by 7th, PF/ESI by 15th, with doctor classification, nurse shift computation, and NABH staff tracking for Gurugram hospitals.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Classify Workforce &amp; Configure</h3><p class="step-description">Every doctor classified: employee (S192 + PF/ESI) vs consultant (S194J 10%). Nurses/paramedical/admin/support mapped. PF/ESI registrations verified with EPFO/ESIC Gurugram. NABH norms cross-referenced. Payroll configured: employed doctor CTC, consultant retainer, nurse 3-shift with night differential and OT, paramedical shift, admin CTC, support at Haryana minimum wage.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Doctors classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>System configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Onboarded</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Process Payroll &amp; Deposit Statutory</h3><p class="step-description">Employed doctors: CTC + PF + TDS. Consultants: retainer + S194J 10%. Nurses: shift hours x rate + night differential (10-25%) + OT at 2x + holiday premium. Paramedical: shift computation. Admin: standard CTC. Support: Haryana min wage + ESI. EPF by 15th, ESI by 15th, TDS by 7th. Maternity 26 weeks computed for female staff.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payroll processed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All deposited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Monthly Close</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Returns &amp; NABH Compliance</h3><p class="step-description">Monthly ECR/ESI returns. Quarterly Form 24Q (salary) and 26Q (consultant) on TRACES. Form 16 for employees. Form 16A for consultant doctors. NABH staff registers maintained: qualifications (MBBS/MD/GNM/BSc), nurse-to-patient ratios, certification status. Compliance calendar tracks all deadlines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Returns filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NABH registers ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Reports &amp; Analytics</h3><p class="step-description">Cost per bed, nursing cost per patient-day, consultant fee analysis, department-wise payroll. Shift cost analytics. Attrition and hiring cost tracking (25-40% nursing attrition). Haryana min wage revision monitoring. Actuarial valuation coordination for gratuity provision. Annual compliance review.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Analytics delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Costs optimized</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Year-End Ready</span><span class="step-number-large">04</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <ul><li><strong>PF/ESI Registration:</strong> Establishment codes EPFO/ESIC Gurugram</li><li><strong>Doctor Agreements:</strong> Employment contracts or retainer/consulting agreements</li><li><strong>Staff Data:</strong> Name, qualification (MBBS/MD/GNM/BSc), DOB, DOJ, salary, PAN, Aadhaar, UAN</li><li><strong>Shift Rosters:</strong> Nursing and paramedical duty schedules</li><li><strong>NABH Accreditation:</strong> Staff norms if applicable</li><li><strong>Previous Payroll:</strong> Salary registers, PF/ESI challans</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Healthcare Payroll Challenges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Doctor Misclassification</td><td>Consultant who functions as employee (controlled hours, exclusivity). EPFO audits. 50 doctors x 3 years = Rs 1 Cr+ back-demand</td><td>Patron classifies every doctor per control/exclusivity/infrastructure test. Correct S192 vs S194J from day one</td></tr><tr><td>24/7 Shift Complexity</td><td>3 shifts x 365 days. Weekly offs, sick leave, maternity, staff shortages. OT computation. Night premium. Shift swaps</td><td>Shift roster integration. Night differential computed. OT at 2x tracked. Weekly off compliance per Code on Wages</td></tr><tr><td>Maternity Liability</td><td>60%+ nursing female. 200 nurses = 10-15 on maternity anytime. Rs 15-25L liability. Replacement staffing costs</td><td>Patron accrues maternity benefit. Monthly provisioning. Return-to-work tracked. Creche compliance for 50+ staff</td></tr><tr><td>NABH vs Payroll</td><td>Nurse-to-patient ratios. Qualification standards. Understaffing = accreditation risk. Staff registers must match</td><td>Qualification-linked staff registers integrated with payroll. NABH inspection-ready at all times</td></tr><tr><td>25-40% Nursing Attrition</td><td>Continuous onboarding/offboarding. PF registration, UAN, transfer claims. F&amp;F. Processing volume</td><td>Streamlined onboarding/offboarding. Batch PF processing. F&amp;F including gratuity (if eligible), leave encashment</td></tr>

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
            <h2 class="section-title">Healthcare Payroll Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Clinic (up to 30 staff)</td><td>Rs 12,000 &ndash; Rs 18,000/month (doctor classification + staff payroll + PF/ESI + TDS S192/S194J)</td></tr><tr><td>Nursing Home (30-100)</td><td>Rs 20,000 &ndash; Rs 30,000/month (+ nurse shift payroll + overtime + maternity + ESI claims)</td></tr><tr><td>Hospital (100-500)</td><td>Rs 35,000 &ndash; Rs 60,000/month (full multi-category + NABH tracking + cost analytics + compliance calendar)</td></tr><tr><td>Large Hospital (500+)</td><td>Rs 60,000 &ndash; Rs 1,00,000/month (+ consultant management + shift analytics + actuarial valuation)</td></tr><tr><td>Diagnostic Centre</td><td>Rs 12,000 &ndash; Rs 20,000/month (technician shifts + PF/ESI + TDS + Haryana min wage)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Healthcare Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Processing%20for%20the%20Healthcare%20Industry%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Healthcare Staff Categories</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Employed Doctor</td><td>Monthly CTC | S192 TDS | PF yes | ESI if &lt;21K | Classification is highest-risk decision</td></tr><tr><td>Consultant Doctor</td><td>Retainer/Fee | S194J 10% | No PF | No ESI | Rs 50K/yr threshold for TDS</td></tr><tr><td>Nurse</td><td>Shift + night diff | S192 | PF yes | ESI if &lt;21K | 24/7 3-shift rotation, OT 2x</td></tr><tr><td>Paramedical</td><td>Shift/Fixed | S192 | PF yes | ESI if &lt;21K | Qualification-based pay</td></tr><tr><td>Admin</td><td>Monthly CTC | S192 | PF yes | ESI if &lt;21K | Standard processing</td></tr><tr><td>Support</td><td>Haryana min wage | S192 | PF yes | ESI yes (most) | Medical benefits via ESIC</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>50 misclassified doctors x 3 years = Rs 1 Cr+ retrospective PF demand.</strong> Late PF/ESI = support staff lose medical. Incorrect nurse OT = Labour Dept complaints. Maternity non-compliance = financial penalties + reputation damage. 25-40% nursing attrition = continuous processing. Healthcare payroll is the most complex in any sector.</p>

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
            <h2 class="section-title">Why Choose Patron for Healthcare Payroll</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Doctor Classification</h3><p class="feature-text">Control/exclusivity/infrastructure test applied. S192 vs S194J correct from day one. No retrospective PF back-demand risk.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">24/7 Shift Expertise</h3><p class="feature-text">3-shift nurse rotation with night differential, OT 2x, weekly off, holiday premium. Shift roster integrated with payroll.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Maternity + NABH</h3><p class="feature-text">26-week maternity accrual for 60%+ female nursing workforce. NABH qualification registers integrated with payroll.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Healthcare Corridor</h3><p class="feature-text">Golf Course Extension Road serving Sector 38-44 hospitals, Sohna Road clinics, and medical facilities across Gurugram.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Gurugram Healthcare</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents | 15+ Years</p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone, and healthcare institutions across Gurugram.</strong></p><p>Offices in Pune, Mumbai, Delhi, and Gurugram serving hospitals, nursing homes, clinics, and diagnostic centres.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Standard Payroll Providers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Standard Payroll Provider</th></tr></thead>
                    <tbody>
                        <tr><td>Doctor Classification</td><td>S192 vs S194J per control/exclusivity test</td><td>Generic processing, classification errors common</td></tr><tr><td>Shift Payroll</td><td>24/7 nurse shifts with night diff, OT, rotation</td><td>Monthly salary only, shift computation manual</td></tr><tr><td>Maternity Accrual</td><td>26-week provisioning for female-majority workforce</td><td>Basic leave tracking, no financial provisioning</td></tr><tr><td>NABH Compliance</td><td>Qualification registers integrated with payroll</td><td>No healthcare regulation awareness</td></tr>

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
                
                <p>Explore related services:</p><ul><li><a href="/payroll-processing-for-the-healthcare-industry">Healthcare Payroll (India)</a></li><li><a href="/accounting-services/gurugram">Accounting Services Gurugram</a></li><li><a href="/payroll-services">Payroll Services</a></li><li><a href="/healthcare-sector-accounting-services">Healthcare Accounting</a></li><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="#">Actuarial Valuation</a></li><li><a href="#">Bookkeeping Services</a></li></ul>

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
                
                <ul><li><strong>EPF:</strong> 12%+12% on basic. 20+ staff. EPFO Gurugram ECR by 15th. 1%/month late interest. Principal employer for outsourced</li><li><strong>ESI:</strong> 3.25%+0.75% gross &le;Rs 21K. ESIC Gurugram. Medical, injury, maternity. Support + junior staff</li><li><strong>TDS S192/S194J/S194C:</strong> S192 employed. S194J 10% consultant doctors. S194C outsourced services. 24Q/26Q/16/16A</li><li><strong>Code on Wages:</strong> 50% basic. OT 2x. Weekly off. Night shift provisions. Applies to all categories</li><li><strong>Maternity Benefit Act:</strong> 26 weeks. Creche for 50+. 60%+ female workforce in nursing</li><li><strong>No PT:</strong> Haryana advantage for large hospital workforces</li></ul><p><strong>Authority:</strong> <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">epfindia.gov.in</a> (EPFO)</p>

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
                    <h2 class="faq-expanded__title">FAQs &ndash; Healthcare Payroll in Gurugram</h2>
                    <p class="faq-expanded__lead">Get answers about doctor classification, Professional Tax, cost, nurse overtime, maternity benefit, NABH norms, and 50% wage rule.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Healthcare Payroll',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Doctor classification for TDS?</h3>
                        <div class="faq-expanded__a"><p>Exclusive + hospital hours + infrastructure = employee S192 + PF/ESI. Independent + multiple hospitals + own schedule = consultant S194J 10%. Misclassification = retrospective PF + TDS mismatch.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Professional Tax?</h3>
                        <div class="faq-expanded__a"><p>No. Haryana has no PT. 1,000-employee hospital saves Rs 25L/year vs Mumbai. Both deduction and filing eliminated.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much?</h3>
                        <div class="faq-expanded__a"><p>Clinic (30): Rs 12K-18K. Nursing home (100): Rs 20K-30K. Hospital (500): Rs 35K-60K. Large (500+): Rs 60K-1L. Diagnostic: Rs 12K-20K.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Nurse overtime?</h3>
                        <div class="faq-expanded__a"><p>2x beyond scheduled shift per Code on Wages. Night differential 10-25%. Weekly off premium. Total counts toward PF under 50% wage rule.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Maternity benefit?</h3>
                        <div class="faq-expanded__a"><p>26 weeks paid. Average daily wages x 182 days. 60%+ nursing female. 200-nurse hospital = 10-15 on leave anytime. Rs 15-25L liability. Creche for 50+.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">NABH requirements?</h3>
                        <div class="faq-expanded__a"><p>Nurse-to-patient ratios. Qualification tracking (GNM/BSc/MSc) alongside payroll. Staff registers for accreditation inspections.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">50% wage rule impact?</h3>
                        <div class="faq-expanded__a"><p>Basic min 50% CTC. Nurse Rs 25K with Rs 8K basic restructured to Rs 12.5K. PF increases. 200 nurses = Rs 1.3L/month added cost.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Doctor employee hai ya consultant?</strong> Hospital hours, exclusively kaam, infrastructure use = employee S192 + PF. Independent, multiple hospitals = consultant S194J 10%.</p><p><strong>Nurse ki overtime?</strong> 8 ghante se zyada = 2x wages. Night shift pe 10-25% extra. Weekly off pe duty = premium. Total PF mein count hota hai.</p><p><strong>Maternity leave kitni?</strong> 26 weeks (182 din) paid. Average daily wages se. 50+ staff toh creche bhi zaroori.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Doctor Classification Wrong? Fix It Before EPFO Audit</h2>
            <div class="content-text">
                
                <p>50 misclassified doctors x 3 years = Rs 1 Cr+ retrospective PF demand. Late PF/ESI = support staff lose medical. Incorrect nurse OT = Labour Dept complaints. Maternity non-compliance = penalties + reputation. 25-40% nursing attrition = continuous processing volume. Healthcare payroll needs specialist expertise.</p><p><strong>Get started &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Processing%20for%20the%20Healthcare%20Industry%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Healthcare Payroll in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Healthcare payroll in Gurugram addresses NCR's premier medical hub &ndash; doctor classification, 24/7 nurse shift scheduling, maternity benefit for a female-majority workforce, and NABH staff compliance tracking.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron's Golf Course Extension Road office serves hospitals along the Sector 38-44 corridor, clinics on Sohna Road, and diagnostic centres across Gurugram with healthcare-specific payroll expertise.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron delivers doctor classification, nurse shift computation, and multi-category compliance that general providers cannot match.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Processing%20for%20the%20Healthcare%20Industry%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Healthcare Payroll Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides doctor classification, nurse shift payroll, and NABH-compliant healthcare payroll in major cities.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Healthcare Payroll in Other Cities</div><div class="pa-block-sub">Doctor, nurse, and clinical staff compliance across India</div><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-processing-for-the-healthcare-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-healthcare/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end healthcare compliance</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/trademark-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/payroll-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 02 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">02 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 02 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed quarterly for Haryana minimum wage revisions, healthcare compliance updates, and NABH norm changes. Freshness Tier: 2.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
