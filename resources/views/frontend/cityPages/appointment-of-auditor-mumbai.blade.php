
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Appointment of Auditor Mumbai – Section 139 &amp; ADT-1</title>
    <meta name="description" content="CA-assisted auditor appointment in Mumbai. First auditor, ADT-1, rotation, AGM, eligibility Section 141. ROC Everest House. Call +91 945 945 6700.">
    <link rel="canonical" href="/appointment-of-auditor/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Appointment of Auditor Mumbai – Section 139 &amp; ADT-1">
    <meta property="og:description" content="CA-assisted auditor appointment in Mumbai. First auditor, ADT-1, rotation, AGM, eligibility Section 141. ROC Everest House. Call +91 945 945 6700.">
    <meta property="og:url" content="/appointment-of-auditor/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Appointment of Auditor Mumbai – Section 139 &amp; ADT-1">
    <meta name="twitter:description" content="CA-assisted auditor appointment in Mumbai. First auditor, ADT-1, rotation, AGM, eligibility Section 141. ROC Everest House. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Appointment of Auditor in Mumbai",
      "description": "CA-assisted auditor appointment in Mumbai. First auditor, ADT-1, rotation, AGM, eligibility Section 141. ROC Everest House. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/appointment-of-auditor/mumbai",
      "serviceType": "Appointment of Auditor in Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai"
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
        "url": "https://www.patronaccounting.com/appointment-of-auditor/mumbai",
        "price": "2000"
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
          "name": "Appointment of Auditor",
          "item": "https://www.patronaccounting.com/appointment-of-auditor"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Appointment of Auditor in Mumbai",
          "item": "https://www.patronaccounting.com/appointment-of-auditor/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to appoint an auditor in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "First auditor: Board appoints within 30 days of incorporation. ADT-1 filed within 15 days (mandatory from 14.07.2025). Subsequent: Ordinary Resolution at AGM for 5-year term. Auditor must be practicing CA with Section 141 eligibility. ROC Mumbai at Everest House handles ADT-1 filings."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form ADT-1?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MCA form intimating ROC about auditor appointment. Filed within 15 days on MCA V3 portal. From 14.07.2025, mandatory for first auditor appointments too (previously exempt). Captures auditor details, nature of appointment, period, and date. DSC of director required."
          }
        },
        {
          "@type": "Question",
          "name": "What are auditor rotation rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Listed/prescribed companies (capital >= Rs 10 crore, borrowings >= Rs 50 crore): individual auditor max 5 years, firm max 10 years (2 terms of 5). After max term: 5-year cooling-off. OPCs and small companies exempt. Patron plans rotation 12 months in advance."
          }
        },
        {
          "@type": "Question",
          "name": "Who is eligible to be a statutory auditor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Practicing CA with Certificate of Practice from ICAI, or firm where majority partners hold COPs. Section 141 disqualifications: officer/employee, securities > Rs 1 lakh, indebtedness > Rs 5 lakh, guarantee for company debt, related to director/KMP, fraud conviction, exceeded 20-company ceiling."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for non-appointment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 147: company Rs 25,000-5,00,000; officers Rs 10,000-1,00,000. Late ADT-1: progressive additional fees (2x-12x). Non-appointment means no audit, no audited financials, no AOC-4, cascading penalties and potential director disqualification under Section 164(2)."
          }
        },
        {
          "@type": "Question",
          "name": "Can an auditor be removed before term ends?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but stringent: Special Resolution at General Meeting (auditor given opportunity to be heard) + NCLT application for approval. Easier route: don't reappoint at next AGM by appointing different auditor. Patron advises on correct process based on situation."
          }
        },
        {
          "@type": "Question",
          "name": "Is ADT-1 now mandatory for first auditor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Companies (Audit and Auditors) Amendment Rules 2025, effective 14 July 2025, made ADT-1 mandatory for first auditor appointments by Board. Updated form includes 'First auditor by Board' option. All Mumbai companies incorporated on/after 14.07.2025 must file within 15 days."
          }
        },
        {
          "@type": "Question",
          "name": "What if auditor resigns mid-term?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Outgoing auditor files ADT-3 (reasons for resignation) with ROC within 30 days. Board recommends replacement within 30 days. Since vacancy is due to resignation, members must approve at general meeting within 3 months. New auditor holds office till next AGM. ADT-1 filed for new appointment."
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
                        Appointment of Auditor in Mumbai: First Auditor, AGM Appointment, ADT-1 Filing, and Rotation Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">24 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>First Auditor:</span> Board appoints within 30 days of incorporation | ADT-1 mandatory from 14.07.2025</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Subsequent:</span> Appointed at AGM for 5-year term (till 6th AGM) | ADT-1 within 15 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Rotation:</span> Listed/prescribed companies &ndash; individual 5 years, firm 10 years | 5-year cooling-off</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Company Rs 25,000-5,00,000 | Officers Rs 10,000-1,00,000 for non-compliance (Section 147)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Our Mumbai office is adjacent to ROC Everest House &ndash; 10,000+ businesses served with 4.9&#9733; Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20auditor%20appointment%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Appointment of Auditor',
                                            'city'     => 'Mumbai',
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
    'ctaText'    => 'Get your auditor appointed by a CA &amp; CS team adjacent to ROC Mumbai &ndash; from identification to ADT-1 to statutory audit.',
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">When Needed</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Eligibility</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Appointment of Auditor in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Appointment of Auditor Services at a Glance</strong></p>
                    <p>Every company must appoint a statutory auditor &ndash; a practicing CA who audits financial statements. First auditor: Board appoints within 30 days of incorporation; ADT-1 filed within 15 days (mandatory from 14.07.2025). Subsequent auditor: appointed at AGM for 5-year term. Rotation: listed/prescribed companies &ndash; individual max 5 years, firm max 10 years, 5-year cooling-off. Casual vacancy: Board fills within 30 days (if resignation, members approve within 3 months). Penalty for non-appointment: company Rs 25,000-5,00,000; officers Rs 10,000-1,00,000.</p>
                </div>
                <p>Mumbai has the highest volume of auditor appointments &ndash; Powai startups appointing first auditors post-incorporation, BKC listed companies managing rotation, Fort family businesses reappointing at AGMs. The 2025 ADT-1 amendment (mandatory for first auditors from 14.07.2025) adds a critical new step for every newly incorporated Mumbai company. Learn more about <a href="/appointment-of-auditor">Appointment of Auditor across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Everest House &ndash; provides end-to-end auditor appointment: CA identification, Board/AGM documentation, ADT-1 filing, rotation planning, casual vacancy handling, and integrated appointment-to-<a href="/statutory-audit">Statutory Audit</a> continuity. For ongoing compliance, see <a href="/private-limited-company-compliance">Private Limited Company Compliance</a>.</p>
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
                <h2 class="section-title">What Is Appointment of Auditor?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Appointment of auditor is the statutory process of designating a practicing Chartered Accountant as the company's statutory auditor under Section 139 of the Companies Act, 2013. The auditor independently examines financial statements and expresses an opinion on whether they present a true and fair view.</p>
                    <p>The appointment is mandatory for every company &ndash; from a newly incorporated Powai startup to a BKC listed MNC subsidiary. The auditor is appointed by shareholders at AGM for a 5-year term and reports to shareholders (not management), ensuring independence. ADT-1 must be filed with ROC within 15 days. Only a practicing CA with Certificate of Practice from ICAI is eligible.</p>
                    <p>For Mumbai companies, the auditor's report is attached to AOC-4 filed with ROC, banks require audited financials for credit, investors conduct due diligence on audit quality during fundraising, and tax authorities rely on audited accounts. For <a href="/private-limited-company-registration">Private Limited Company Registration</a>, first auditor appointment is a post-incorporation essential.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Appointment of Auditor:</strong></p>
                    <ul>
                        <li><strong>Section 139:</strong> Governs appointment &ndash; first auditor by Board within 30 days, subsequent at AGM for 5 years</li>
                        <li><strong>Form ADT-1:</strong> Intimation to ROC &ndash; filed within 15 days, mandatory for first auditor from 14.07.2025</li>
                        <li><strong>Section 141:</strong> Eligibility and disqualifications &ndash; practicing CA, no officer relationship, securities/debt limits</li>
                        <li><strong>Auditor Rotation:</strong> Prescribed companies &ndash; individual max 5 years, firm max 10 years, 5-year cooling-off</li>
                        <li><strong>ADT-3:</strong> Statement of reasons for auditor resignation &ndash; filed within 30 days</li>
                        <li><strong>Section 147:</strong> Penalties &ndash; company Rs 25,000-5,00,000, officers Rs 10,000-1,00,000</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Appointment of Auditor</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA &amp; CS Managed</span>
                        <strong>Auditor Appointment</strong>
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
            <h2 class="section-title">When Mumbai Companies Need Auditor Appointment</h2>
            <div class="content-text">
                
                <p><strong>Newly incorporated company (First Auditor)</strong> &ndash; Board appoints within 30 days of incorporation. ADT-1 within 15 days (mandatory from 14.07.2025). Holds office till first AGM. For Powai/Andheri startups via SPICe+, this is the most time-sensitive post-incorporation step.</p>
                <p><strong>Annual reappointment at AGM</strong> &ndash; All Mumbai companies: Ordinary Resolution to appoint/reappoint for 5-year term. ADT-1 within 15 days. Part of annual AGM compliance cycle.</p>
                <p><strong>Auditor rotation for prescribed companies</strong> &ndash; Listed companies (BSE/NSE) and large companies (capital &ge; Rs 10 crore, borrowings &ge; Rs 50 crore). Individual max 5 years, firm max 10 years. 5-year cooling-off. BKC listed companies must plan proactively.</p>
                <p><strong>Casual vacancy</strong> &ndash; Resignation/disqualification/death mid-term. Board fills within 30 days. If resignation: Board recommends + members approve within 3 months. Common when auditors resign due to workload or conflict.</p>
                <p><strong>Change of auditor (voluntary)</strong> &ndash; Upgrading from sole practitioner to larger firm during growth phase. Existing auditor resigns (ADT-3) or not reappointed at AGM.</p>
                <p><strong>Converted entity</strong> &ndash; LLP to Pvt Ltd or OPC to Pvt Ltd &ndash; new entity must appoint statutory auditor under Section 139(6).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Auditor Appointment Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Auditor Identification &amp; Recommendation</td><td>Eligible CAs recommended based on company size, industry (IT for Powai, BFSI for BKC, manufacturing for MIDC), ICAI verification, Section 141 check, fee reasonableness. Mumbai CA network maintained</td></tr>
                        <tr><td>First Auditor Appointment</td><td>Board Meeting within 30 days, auditor on agenda, consent + S141 certificate obtained, Board Resolution, ADT-1 within 15 days (mandatory from 14.07.2025). Part of post-incorporation package</td></tr>
                        <tr><td>AGM Auditor Appointment/Reappointment</td><td>Audit committee recommendation (if applicable), Board recommendation, Ordinary Resolution at AGM, consent + certificate, ADT-1. Integrated with full AGM compliance</td></tr>
                        <tr><td>ADT-1 Filing on MCA V3</td><td>Company CIN, auditor details (name, membership, firm number, PAN), appointment nature (first/AGM/casual), period, date. DSC of director. Filed within 15 days</td></tr>
                        <tr><td>Rotation Planning for Prescribed Companies</td><td>Tenure tracking, 12-month advance transition planning, new auditor identification, knowledge transfer management, 5-year cooling-off monitoring. For BKC listed companies</td></tr>
                        <tr><td>Casual Vacancy Handling</td><td>If resignation: Board recommends within 30 days + members approve within 3 months + outgoing auditor files ADT-3. If not resignation: Board fills within 30 days. New consent + eligibility + ADT-1</td></tr>
                        <tr><td>Section 141 Eligibility Verification</td><td>Practicing CA with COP, not officer/employee, securities &le; Rs 1 lakh, indebtedness &le; Rs 5 lakh, no guarantee, not related to director/KMP, audit ceiling (max 20)</td></tr>
                        <tr><td>Auditor Removal (Section 140)</td><td>Special Resolution at EGM, NCLT application for approval, auditor given opportunity to be heard. Documentation and process management</td></tr>

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
            <h2 class="section-title">First Auditor Appointment Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron includes first auditor appointment in the standard post-incorporation package. Effective compliance window: 45 days from incorporation (30 days Board + 15 days ADT-1). Our Marine Lines office is adjacent to ROC Everest House.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify Auditor &amp; Obtain Consent</h3><p class="step-description">Identify practicing CA within 30 days of incorporation. Obtain written consent to act as auditor and Section 141 eligibility certificate (no disqualifications). Verify audit ceiling (max 20 companies). Patron recommends CAs from its Mumbai network based on industry and size.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auditor identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Consent obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">CA Selected</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Board Meeting &amp; Resolution</h3><p class="step-description">Convene first Board Meeting within 30 days of incorporation with auditor appointment on agenda. Pass Board Resolution appointing proposed CA as first statutory auditor till conclusion of first AGM. Record minutes. Patron drafts Board Resolution and minutes for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Minutes recorded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Board Approved</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File ADT-1 within 15 Days</h3><p class="step-description">File Form ADT-1 on MCA V3 portal within 15 days of Board Meeting. Enter company CIN, auditor details (name, membership number, firm number, PAN), nature of appointment (first auditor by Board), period, and date. DSC of director required. Mandatory from 14.07.2025.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-1 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC notified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">ROC Filed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Confirm at First AGM</h3><p class="step-description">First auditor holds office till first AGM. At first AGM, either confirm existing auditor or appoint new auditor for 5-year term (Ordinary Resolution). File fresh ADT-1 for AGM appointment. Patron ensures continuity from first auditor to AGM appointment for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AGM appointment done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fresh ADT-1 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">04</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Auditor Appointment in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Auditor's Written Consent:</strong> Letter confirming willingness to accept appointment as statutory auditor</li>
                    <li><strong>Section 141 Eligibility Certificate:</strong> Confirmation of eligibility and absence of disqualifications</li>
                    <li><strong>Board Resolution (First/Casual):</strong> Certified copy appointing the auditor</li>
                    <li><strong>AGM Resolution (Subsequent):</strong> Certified copy of Ordinary Resolution at AGM</li>
                    <li><strong>Audit Committee Recommendation:</strong> Written recommendation (if company has audit committee)</li>
                    <li><strong>Auditor Details:</strong> ICAI membership number, firm registration number, PAN, address, email</li>
                    <li><strong>Company CIN and DSC:</strong> For ADT-1 filing on MCA V3 portal</li>
                    <li><strong>Intimation Letter:</strong> Copy of letter communicating appointment to the auditor</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> For Powai startups incorporating via SPICe+, the first auditor is often overlooked in the rush of post-incorporation activities. The effective compliance window is 45 days from incorporation (30 days Board + 15 days ADT-1). With ADT-1 now mandatory for first auditors (14.07.2025), Patron includes auditor appointment in the standard post-incorporation checklist for all Mumbai companies.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Auditor Appointment in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing 30-Day First Auditor Deadline</td><td>Powai founders focused on product/fundraising forget the deadline. If Board fails, members at EGM within 90 days &ndash; adding complexity</td><td>First Board Meeting scheduled within 15 days of incorporation. Auditor appointment included on standard agenda</td></tr>
                        <tr><td>ADT-1 2025 Amendment Awareness</td><td>Many Mumbai companies incorporated after 14.07.2025 unaware that ADT-1 is now mandatory for first auditors</td><td>ADT-1 filing for first auditor included as standard in post-incorporation package. Updated form options used</td></tr>
                        <tr><td>Rotation Compliance for Large Companies</td><td>BKC listed companies must track tenure and plan transition. Failure to rotate = deemed vacancy</td><td>12-month advance rotation planning. New auditor identified 6 months before. Knowledge transfer managed</td></tr>
                        <tr><td>Section 141 Disqualification Gaps</td><td>Auditor becomes disqualified mid-term (acquires securities &gt; Rs 1 lakh, becomes indebted). Companies don't monitor post-appointment</td><td>Section 141 compliance reviewed annually during AGM cycle for all Mumbai companies</td></tr>
                        <tr><td>Casual Vacancy from Resignation</td><td>Auditor resigns near AOC-4 deadline. ADT-3 + Board recommendation + member approval within 3 months. Creates compliance crisis</td><td>Resignation and replacement managed urgently. Replacement auditor identified within 7 days. ADT-3 + ADT-1 coordinated</td></tr>

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
            <h2 class="section-title">Auditor Appointment Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Form ADT-1 Filing Fee</td><td>Rs 200 (small company) / Rs 600 (others) &ndash; within 15 days</td></tr>
                        <tr><td>Late Filing ADT-1 Additional Fee</td><td>2x to 12x normal fee (progressive with delay period)</td></tr>
                        <tr><td>Penalty for Non-Appointment (Company)</td><td>Rs 25,000 &ndash; Rs 5,00,000 (Section 147)</td></tr>
                        <tr><td>Penalty for Non-Appointment (Officers)</td><td>Rs 10,000 &ndash; Rs 1,00,000 (officers in default)</td></tr>
                        <tr><td>Patron Fee &ndash; First Auditor Appointment</td><td>Starting Rs 2,000 (auditor identification + Board Resolution + ADT-1)</td></tr>
                        <tr><td>Patron Fee &ndash; AGM Auditor Appointment</td><td>Starting Rs 3,000 (integrated with AGM compliance package)</td></tr>
                        <tr><td>Patron Fee &ndash; Casual Vacancy Handling</td><td>Starting Rs 5,000 (replacement + Board + General Meeting + ADT-1)</td></tr>
                        <tr><td>Patron Fee &ndash; Rotation Advisory + Transition</td><td>Starting Rs 10,000 (12-month planning + new auditor + transition)</td></tr>
                        <tr><td>Patron Fee &ndash; Post-Incorporation Package</td><td>Starting Rs 8,000 (first auditor + INC-22 + all post-incorporation compliance)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Appointment of Auditor consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20auditor%20appointment%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Auditor Appointment Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>First Auditor (Board)</td><td>Within 30 days of incorporation | ADT-1: 15 days after Board Meeting | Window: 45 days</td></tr>
                        <tr><td>First Auditor (EGM &ndash; if Board fails)</td><td>Within 90 days of incorporation | ADT-1: 15 days after EGM</td></tr>
                        <tr><td>Subsequent Auditor (AGM)</td><td>At AGM (within 6 months of FY end) | ADT-1: 15 days after AGM | 5-year term</td></tr>
                        <tr><td>Casual Vacancy (Not resignation)</td><td>Board fills within 30 days | ADT-1: 15 days after Board | Holds till next AGM</td></tr>
                        <tr><td>Casual Vacancy (Resignation)</td><td>Board recommends + members approve within 3 months | Outgoing files ADT-3</td></tr>
                        <tr><td>Rotation (Prescribed)</td><td>At AGM in rotation year | Plan 12 months in advance | ADT-1: 15 days after AGM</td></tr>
                        <tr><td>Patron End-to-End (First Auditor)</td><td>5-7 working days from engagement | Within 15-day ADT-1 deadline</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Non-appointment creates cascading compliance failures.</strong> No auditor &rarr; no audit &rarr; no audited financials &rarr; no AOC-4 filing &rarr; penalties + potential director disqualification under Section 164(2). Patron schedules the first Board Meeting within 15 days of incorporation to prevent this cascade for Mumbai companies.</p>

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
            <h2 class="section-title">Why Choose Patron for Auditor Appointment in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Adjacent to ROC Everest House</h3><p class="feature-text">ADT-1 processed by ROC Mumbai on MCA V3 portal. For urgent first auditor or casual vacancy filings, proximity enables fastest filing and coordination.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">2025 ADT-1 Amendment Compliance</h3><p class="feature-text">Fully updated on the 2025 amendment making ADT-1 mandatory for first auditors. All Mumbai companies incorporated after 14.07.2025 receive ADT-1 as standard in post-incorporation package.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Integrated Appointment + Audit</h3><p class="feature-text">Unlike standalone CS firms that handle only the filing, Patron provides the complete cycle: auditor identification, appointment compliance, and ongoing statutory audit by qualified CAs.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Rotation Advisory</h3><p class="feature-text">12-month advance rotation planning for BKC listed and large Mumbai companies. New auditor identified, transition managed, uninterrupted audit coverage ensured.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Companies</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron appointed our first auditor within 10 days of incorporation, filed ADT-1, and seamlessly transitioned to the first statutory audit. Most startups in our co-working space missed the 30-day deadline.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Founder, D2C Startup, Powai</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving companies with auditor appointment, statutory audit, and corporate compliance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Auditor Eligibility and Disqualification (Section 141)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criteria</th><th>Eligible</th><th>Disqualified</th></tr></thead>
                    <tbody>
                        <tr><td>Professional Qualification</td><td>Practicing CA with Certificate of Practice from ICAI</td><td>Non-CA, CA without COP, retired CA without COP</td></tr>
                        <tr><td>Firm</td><td>Firm where majority partners are practicing CAs</td><td>Firm where majority are not practicing CAs</td></tr>
                        <tr><td>Relationship with Company</td><td>No officer/employee relationship</td><td>Officer or employee of the company</td></tr>
                        <tr><td>Securities Holding</td><td>Face value &le; Rs 1 lakh in the company</td><td>Securities &gt; Rs 1 lakh (self, relative, partner, firm)</td></tr>
                        <tr><td>Indebtedness</td><td>&le; Rs 5 lakh to the company</td><td>&gt; Rs 5 lakh to the company</td></tr>
                        <tr><td>Guarantee</td><td>No guarantee for company debt</td><td>Guarantee for company indebtedness &gt; Rs 1 lakh</td></tr>
                        <tr><td>Business Relationship</td><td>No business relationship with company</td><td>Business relationship with company/directors</td></tr>
                        <tr><td>Audit Ceiling</td><td>&le; 20 companies (individual) / 20 per partner (firm)</td><td>Exceeded 20-company ceiling</td></tr>

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
                    <li><a href="/appointment-of-auditor">Appointment of Auditor (India Overview)</a></li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/accounting-services">Accounting Services</a></li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/roc-notice">ROC Notice</a></li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for Auditor Appointment</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 139(6):</strong> First auditor &ndash; Board within 30 days; if Board fails, members at EGM within 90 days</li>
                    <li><strong>Section 139(1):</strong> Subsequent auditor &ndash; appointed at AGM for 5-year term (till 6th AGM)</li>
                    <li><strong>Section 139(2):</strong> Rotation &ndash; individual max 5 years, firm max 10 years, 5-year cooling-off</li>
                    <li><strong>Section 139(8):</strong> Casual vacancy &ndash; Board within 30 days; if resignation, members within 3 months</li>
                    <li><strong>Section 141:</strong> Eligibility and disqualifications &ndash; practicing CA, securities/debt/relationship limits</li>
                    <li><strong>Section 140:</strong> Removal (Special Resolution + NCLT) and resignation (ADT-3 within 30 days)</li>
                    <li><strong>Section 147:</strong> Penalties &ndash; company Rs 25,000-5,00,000; officers Rs 10,000-1,00,000</li>
                    <li><strong>Form ADT-1:</strong> Intimation to ROC within 15 days &ndash; mandatory for first auditor from 14.07.2025</li>
                    <li><strong>Form ADT-3:</strong> Statement of resignation reasons &ndash; filed within 30 days</li>
                    <li><strong>ROC Mumbai:</strong> Everest House, 100 Marine Lines, Mumbai 400020</li>
                </ul>
                <p><strong>Filing Portal:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> (MCA V3 portal)</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; Appointment of Auditor in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about first auditor, ADT-1, rotation, eligibility, penalties, removal, resignation, and the 2025 amendment for Mumbai companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Appointment of Auditor',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to appoint an auditor in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>First auditor: Board appoints within 30 days of incorporation. ADT-1 within 15 days (mandatory from 14.07.2025). Subsequent: Ordinary Resolution at AGM for 5-year term. Auditor must be practicing CA with Section 141 eligibility. ROC Mumbai at Everest House handles ADT-1 filings on MCA V3 portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Form ADT-1?</h3>
                        <div class="faq-expanded__a"><p>MCA form intimating ROC about auditor appointment. Filed within 15 days on MCA V3 portal. From 14.07.2025, mandatory for first auditor appointments too (previously exempt). Captures auditor details, nature of appointment, period, and date. DSC of director required. Patron files for all Mumbai companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are auditor rotation rules?</h3>
                        <div class="faq-expanded__a"><p>Listed/prescribed companies (capital &ge; Rs 10 crore, borrowings &ge; Rs 50 crore): individual max 5 years, firm max 10 years (2 terms of 5). After max term: 5-year cooling-off. OPCs and small companies exempt. Patron plans rotation 12 months in advance for Mumbai prescribed companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Who is eligible to be a statutory auditor?</h3>
                        <div class="faq-expanded__a"><p>Practicing CA with Certificate of Practice from ICAI, or firm where majority partners hold COPs. Section 141 disqualifications: officer/employee, securities &gt; Rs 1 lakh, indebtedness &gt; Rs 5 lakh, guarantee for company debt, related to director/KMP, fraud conviction, exceeded 20-company ceiling.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not appointing?</h3>
                        <div class="faq-expanded__a"><p>Section 147: company Rs 25,000-5,00,000; officers Rs 10,000-1,00,000. Late ADT-1: progressive additional fees (2x-12x). Non-appointment means no audit, no audited financials, no AOC-4, cascading penalties and potential director disqualification under Section 164(2). Patron prevents this cascade.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can an auditor be removed before term ends?</h3>
                        <div class="faq-expanded__a"><p>Yes, but stringent: Special Resolution at General Meeting (auditor given opportunity to be heard) + NCLT application for approval. Easier route: don't reappoint at next AGM by appointing different auditor. Patron advises on correct process based on Mumbai company's situation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is ADT-1 now mandatory for first auditor?</h3>
                        <div class="faq-expanded__a"><p>Yes. Companies (Audit and Auditors) Amendment Rules 2025, effective 14 July 2025. Updated form includes 'First auditor by Board of directors' option. All Mumbai companies incorporated on/after 14.07.2025 must file within 15 days of Board Meeting. Patron includes this as standard.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What if the auditor resigns mid-term?</h3>
                        <div class="faq-expanded__a"><p>Outgoing auditor files ADT-3 (reasons) with ROC within 30 days. Board recommends replacement within 30 days. Since resignation: members must approve at general meeting within 3 months. New auditor holds office till next AGM. ADT-1 filed. Patron manages the entire process for Mumbai companies.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Auditor kab appoint karna padta hai?</strong> Incorporation ke 30 din mein first auditor (Board Resolution). Phir har AGM pe 5 saal ke liye (Ordinary Resolution). ADT-1 15 din mein file karo ROC ke saath. 14 July 2025 se first auditor ka bhi ADT-1 mandatory hai.</p>
                <p><strong>Kya koi CA auditor ban sakta hai?</strong> Sirf practicing CA (Certificate of Practice ke saath) ya CA firm jismein majority partners practicing CAs hain. Section 141 ke disqualifications check karo: company ka employee nahi, Rs 1 lakh se zyada shares nahi, Rs 5 lakh se zyada loan nahi.</p>
                <p><strong>Auditor change karna hai toh kya kare?</strong> AGM pe naye auditor ko appoint karo (easiest). Current resign kare toh ADT-3 30 din mein. Removal karna hai term ke beech toh Special Resolution + NCLT application chahiye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the 30-Day Deadline &ndash; Appoint Your Auditor Now</h2>
            <div class="content-text">
                
                <p>The first auditor must be appointed within 30 days of incorporation &ndash; missing this shifts power to members at EGM. ADT-1 must be filed within 15 days. Non-appointment cascades: no auditor &rarr; no audit &rarr; no AOC-4 &rarr; penalties + director disqualification. For Mumbai companies approaching AGM, auditor appointment is a mandatory agenda item.</p>
                <p><strong>Appoint your auditor today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20auditor%20appointment%20services%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get End-to-End Auditor Appointment in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Appointment of auditor in Mumbai spans the company's lifecycle &ndash; from first auditor within 30 days for Powai startups to annual AGM reappointment, from mandatory rotation for BKC listed companies to casual vacancy handling. The 2025 ADT-1 amendment adds a critical new step for every newly incorporated Mumbai company.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Everest House &ndash; provides end-to-end services: CA identification, Section 141 verification, Board/AGM documentation, ADT-1 filing, rotation planning, casual vacancy management, and integrated appointment-to-statutory-audit continuity.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers compliant auditor appointments across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20auditor%20appointment%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Auditor Appointment Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles auditor appointments in major cities with ADT-1 filing and ICAI coordination expertise.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">Appointment of Auditor in Other Cities</div>
                        <div class="pa-block-sub">Professional auditor appointment compliance across India</div>
                        <div class="pa-city-grid">
                            <a href="/appointment-of-auditor/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/appointment-of-auditor/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/appointment-of-auditor/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end corporate and audit compliance</div>
                        <div class="pa-cross-grid">
                            <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/income-tax-return/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/startup-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Mumbai</div></div></a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed quarterly for accuracy of ADT-1 amendment 2025, MCA circulars, and audit rules updates. Freshness Tier: 1.</p>
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
