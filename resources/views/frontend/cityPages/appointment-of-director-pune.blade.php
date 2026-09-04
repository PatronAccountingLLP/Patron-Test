

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
    <title>Appointment of Director in Pune - DIN, DIR-12 & Resolution</title>
    <meta name="description" content="CA and CS assisted appointment of director for Pune companies. DIN application, DIR-2 consent, DIR-12 filing, additional director, nominee director. Startup boards, MNC compliance. Call +91 945 945 6700.">
    <link rel="canonical" href="/appointment-of-director/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Appointment of Director in Pune - DIN, DIR-12 & Resolution">
    <meta property="og:description" content="CA and CS assisted appointment of director for Pune companies. DIN application, DIR-2 consent, DIR-12 filing, additional director, nominee director. Startup boards, MNC compliance. Call +91 945 945 6700.">
    <meta property="og:url" content="/appointment-of-director/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Appointment of Director in Pune - DIN, DIR-12 & Resolution">
    <meta name="twitter:description" content="CA and CS assisted appointment of director for Pune companies. DIN application, DIR-2 consent, DIR-12 filing, additional director, nominee director. Startup boards, MNC compliance. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Appointment of Director in Pune | DIN & Filing",
      "description": "CA and CS assisted appointment of director for Pune companies. DIN application, DIR-2 consent, DIR-12 filing, additional director, nominee director. Startup boards, MNC compliance. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/appointment-of-director/pune",
      "serviceType": "Appointment of Director in Pune | DIN & Filing",
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
        "url": "https://www.patronaccounting.com/appointment-of-director/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "500",
          "maxPrice": "15000",
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
          "name": "Appointment of Director",
          "item": "https://www.patronaccounting.com/appointment-of-director"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Appointment of Director in Pune | DIN & Filing",
          "item": "https://www.patronaccounting.com/appointment-of-director/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to appoint a director in a Pune private limited company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The proposed director obtains a DIN (DIR-3 on mca.gov.in) and provides written consent (DIR-2). The company passes a board resolution (for additional director) or shareholder resolution at GM (for regular director). File DIR-12 with ROC Pune within 30 days with resolution, DIR-2, and appointment letter. Update Register of Directors and issue appointment letter."
          }
        },
        {
          "@type": "Question",
          "name": "What is the minimum number of directors for a Pune Pvt Ltd?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Minimum 2 directors at all times. At least 1 must be a resident of India (stayed 182+ days in preceding calendar year under S.149(3)). Maximum 15 (can increase by special resolution). OPC requires only 1 director. Failing to maintain minimum triggers ROC action."
          }
        },
        {
          "@type": "Question",
          "name": "What is the new DIR-3 KYC rule from 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "From 31 March 2026, annual DIR-3 KYC is replaced with filing once every 3 years (DIR-3 KYC-Web). Directors who completed KYC till date will next be due by 30 June 2028. Changes in personal details (mobile, email, address) must still be reported within 30 days. DIN deactivated if KYC not filed; reactivation requires Rs 5,000 fee."
          }
        },
        {
          "@type": "Question",
          "name": "Can a person with deactivated DIN be appointed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. A deactivated DIN (due to non-KYC or S.164(2) disqualification) cannot be used for new appointments. The DIN must be reactivated by filing pending KYC and paying Rs 5,000. If deactivated due to S.164(2) (3-year company non-filing), pending annual returns of the defaulting company must also be filed before reactivation."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late DIR-12 filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Additional fees of Rs 100 per day from the due date until actual filing, with no upper cap. A 6-month delay costs approximately Rs 18,000 in late fees alone. Additionally, company and officers may face penalties under Section 172 for non-compliance with Chapter XI provisions."
          }
        },
        {
          "@type": "Question",
          "name": "Can a foreign national be appointed as director in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. DIN via DIR-3 with passport and apostilled address proof (instead of PAN/Aadhaar). Need DSC. Company must have at least 1 Indian-resident director (182+ days). For remuneration, FEMA guidelines and withholding tax apply. No prior RBI approval needed for directorship (unlike foreign shareholding which may need FDI compliance). Quick Answers Director kaise appoint karte hain? DIN lao (DIR-3) > Consent lo (DIR-2) > Board ya GM mein resolution > DIR-12 file karo ROC pe 30 din mein > Appointment letter do > Register update karo. Minimum kitne directors? Pvt Ltd: 2 (ek resident). Maximum 15 (special resolution se zyada). DIR-3 KYC ab kab? 31 March 2026 se har 3 saal mein. Next due: 30 June 2028."
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
                        Appointment of Director in Pune: DIN, Resolution, File, and Comply
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> DIN application (DIR-3), consent (DIR-2), board/shareholder resolution, Form DIR-12, DSC, appointment letter</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> DIN fee Rs 500 + ROC filing fee (DIR-12) + Professional fee Rs 3,000 - Rs 15,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any individual aged 21+ with valid DIN, not disqualified under Section 164</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3-7 business days from DIN application to ROC filing | DIR-12 within 30 days of appointment</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Director%20Appointment%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Director Appointment in Pune',
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
    'ctaText'    => 'Get expert director appointment for your Pune company today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Types of Directors</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Appoint vs Regularise</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Appointment of Director in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Director Appointment in Pune Services at a Glance</strong></p>
                    <p>Appointment of a director involves adding a new individual to the Board under Section 152. Process: (1) obtain DIN via DIR-3, (2) written consent in DIR-2, (3) board resolution (additional) or shareholder resolution (regular), (4) file DIR-12 with ROC Pune within 30 days, (5) update Register of Directors. Pvt Ltd: minimum 2 directors (1 resident). Maximum 15. From 31 March 2026, DIR-3 KYC is once every 3 years instead of annually.</p>
                </div>
                <p>Pune's business ecosystem drives frequent director appointments. Baner and Kharadi startups appoint investor-nominees after funding. Hinjewadi IT subsidiaries appoint foreign parent-nominated directors. MIDC companies add family members for succession. Companies scaling up appoint independent directors when they meet the threshold. Learn more about <a href="/appointment-of-director">Director Appointment across India</a>.</p>
                <p>Failure to maintain minimum directors triggers ROC action. DIR-12 late filing: Rs 100/day with no cap. File on <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA portal (mca.gov.in)</a>. Related: <a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> and <a href="#">Annual ROC Filing in Pune</a>.</p>
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
                <h2 class="section-title">Types of Directors</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Six types: <strong>Regular Director (S.152)</strong> appointed by shareholders at GM, retires by rotation. <strong>Additional Director (S.161(1))</strong> by board between AGMs, holds office till next AGM. <strong>Independent Director (S.149(6))</strong> for companies meeting threshold. <strong>Nominee Director (S.161(3))</strong> represents investor/institution. <strong>Alternate Director (S.161(2))</strong> acts for absent director. <strong>Managing Director (S.196/197)</strong> for day-to-day management.</p><p><strong>Resident Director (S.149(3)):</strong> Every company must have at least 1 director who stayed in India 182+ days in the preceding calendar year. For Hinjewadi MNCs with all foreign directors, an Indian-resident director is mandatory. Related: <a href="/roc-notice/pune">ROC Notice in Pune</a> and <a href="/issue-of-shares/pune">Issue of Shares in Pune</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Director Appointment in Pune:</strong></p>
                    <ul><li><strong>DIN:</strong> Director Identification Number. Mandatory. Applied via DIR-3. 8-digit, lifetime validity.</li><li><strong>DIR-2:</strong> Written consent before assuming office. Non-disqualification declaration.</li><li><strong>DIR-12:</strong> Filed with ROC within 30 days. Late fee Rs 100/day (no cap).</li><li><strong>Section 164:</strong> Disqualification - insolvent, conviction, 3-year non-filing = 5-year DIN bar.</li><li><strong>Resident Director:</strong> 182+ days in India. Penalty Rs 1L (company) + Rs 25K (officer) if non-compliant.</li><li><strong>DIR-3 KYC (2026):</strong> Once every 3 years from 31 March 2026. Previously annual.</li></ul>

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
                            <!-- DIR tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DIR</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Director Appointment in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>DIN + DIR-12</span>
                        <strong>6 Director Types | ROC Pune</strong>
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
            <h2 class="section-title">Who Needs Director Appointment in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Startups Adding Investor-Nominee (Baner, Kharadi):</strong> SHA/SSA grants lead investor a board seat. Appointed as additional director by board, regularised at next AGM. Related: <a href="/change-in-authorised-capital/pune">Authorised Capital Change in Pune</a>.</p><p><strong>MNC Subsidiaries (Hinjewadi):</strong> Foreign parent nominates directors. DIN with apostilled passport. Resident director compliance. FEMA advisory for remuneration.</p><p><strong>Manufacturing Companies (MIDC, Camp):</strong> Succession planning - adding next generation. Professional CEO as managing director. Related: <a href="/company-closure/pune">Company Closure in Pune</a>.</p><p><strong>Board Vacancies + Independent Directors:</strong> Resignation/removal/disqualification creates vacancy. Growing companies meeting S.149 threshold. Related: <a href="/one-person-company-registration">OPC Registration</a> and <a href="#">LLP Registration in Pune</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Director Appointment Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>End-to-End Director Appointment</td><td>DIN application (DIR-3), DSC procurement, consent (DIR-2), disqualification check (S.164), resolution drafting, DIR-12 filing with ROC Pune, appointment letter, Register of Directors update.</td></tr><tr><td>Investor-Nominee Director (Post-Funding)</td><td>SHA review for board composition, additional director by board resolution, DIR-12, regularisation at next AGM, SHA-compliant board maintenance. For Baner/Kharadi startups.</td></tr><tr><td>Foreign Director Appointment</td><td>DIN with apostilled passport, DSC procurement, resident director check, FEMA advisory on remuneration, DIR-12 filing. For Hinjewadi MNC subsidiaries.</td></tr><tr><td>Independent Director + DIN Reactivation</td><td>S.149(6) eligibility verification, declaration of independence, separate resolution, DIR-12. DIN reactivation for deactivated directors: KYC filing, pending compliance clearance. Related: <a href="/accounting-services">Accounting Services</a>.</td></tr><tr><td>Director Resignation + Removal</td><td>DIR-11 (resignation intimation), DIR-12 (cessation), S.169 removal by shareholders at GM.</td></tr>

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
            <h2 class="section-title">How to Appoint a Director in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune CA+CS team manages the complete appointment - from DIN application to DIR-12 filing and post-appointment compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain DIN for Proposed Director</h3><p class="step-description">Check if the proposed director already has an active DIN on mca.gov.in. If not, apply via Form DIR-3. Required: identity proof (PAN for Indians; passport for foreign nationals), address proof, photograph, and DSC. DIN allotted within 1-3 business days. Also ensure valid Class 3 DSC. Patron handles DIN application and DSC procurement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN obtained/verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC procured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIN</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">DIR-3</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">1-3 Days</text></svg></div><span class="illustration-label">DIN Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Verify Eligibility and Disqualification Check</h3><p class="step-description">Verify not disqualified under Section 164: not undischarged insolvent, not convicted (5 years), has not failed to file financial statements/annual returns for 3 continuous years (S.164(2) DIN deactivation). Does not hold >20 directorships (Section 165). Check MCA master data for DIN status and existing directorships.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.164 check passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN status active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S.164</text><text x="60" y="38" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">DIN Active?</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Max 20 Cos?</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Verify Eligibility</text></svg></div><span class="illustration-label">Eligible</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Obtain Consent (Form DIR-2)</h3><p class="step-description">Proposed director provides written consent in DIR-2, declaring: not disqualified, agrees to act as director, details of existing directorships, DIN. DIR-2 is signed before assuming office. Patron's CS team prepares the form and coordinates execution.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIR-2 signed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Non-disqualification declared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIR-2</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Consent</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Sign + Declare</text></svg></div><span class="illustration-label">Consent Given</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pass Resolution</h3><p class="step-description">For additional director: Board Resolution under S.161(1) - holds office till next AGM. For regular director: Ordinary Resolution at GM under S.152 - each director voted individually (S.162). For independent director: GM resolution with S.149(6) explanatory statement. Patron drafts all resolutions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Minutes recorded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="8" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="32" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Board</text><text x="32" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Res.</text><rect x="65" y="8" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="87" y="28" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">GM</text><text x="87" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">OR</text><text x="60" y="80" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Pass Resolution</text></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Form DIR-12 with ROC Pune (Within 30 Days)</h3><p class="step-description">File DIR-12 on mca.gov.in within 30 days of appointment. Attach: certified resolution, DIR-2 consent, appointment letter. DSC of authorised director/CS required. Pay ROC filing fee based on authorised capital. Late filing: Rs 100/day with no cap.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIR-12 filed on time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents verified by ROC</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIR-12</text><text x="60" y="40" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">30 Days</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ROC Pune</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">File with ROC</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Appointment Compliance</h3><p class="step-description">Issue appointment letter specifying terms, duties and remuneration. Update Register of Directors and KMP (S.170). Ensure new director files DIR-3 KYC (now once every 3 years from 31 March 2026). Update website and annual return (MGT-7A). Patron provides complete documentation package.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Appointment letter issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Register updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Appointed</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Director Appointment in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>DIN Application (DIR-3):</strong> Identity proof (PAN/passport), address proof, photograph, DSC.</li><li><strong>Consent (DIR-2):</strong> Written consent with non-disqualification declaration.</li><li><strong>Board Resolution:</strong> Minutes approving additional director / recommending to shareholders.</li><li><strong>Shareholder Resolution:</strong> Ordinary resolution at GM for regular director. Individual voting per S.162.</li><li><strong>Form DIR-12:</strong> Filed with ROC within 30 days. Attachments: resolution, DIR-2, appointment letter.</li><li><strong>Appointment Letter:</strong> Terms, remuneration, duties, code of conduct.</li><li><strong>Declaration of Independence:</strong> For independent directors under S.149(7).</li><li><strong>DSC of Authorised Signatory:</strong> For filing DIR-12 on MCA portal.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> For foreign director appointments at Hinjewadi MNC subsidiaries, DIN application requires apostilled passport and foreign address proof. Takes 3-5 days longer than Indian DIN. Ensure company has at least one resident director (182 days) before or alongside the foreign appointment.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Director Appointment in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>DIN Already Deactivated</td><td>Directors on inactive defaulting companies have DIN deactivated under S.164(2) - cannot be appointed</td><td>Patron files DIR-3 KYC, clears pending filings, reactivates DIN before appointment</td></tr><tr><td>Investor-Nominee Not Regularised at AGM</td><td>Additional directors cease office at next AGM if not regularised by shareholder resolution</td><td>Patron tracks regularisation timeline and prepares AGM resolution alongside initial appointment</td></tr><tr><td>Resident Director Non-Compliance</td><td>Hinjewadi MNCs with all foreign directors violate S.149(3) - Rs 1L penalty on company</td><td>Patron identifies and facilitates Indian-resident director appointment alongside foreign appointment</td></tr><tr><td>30-Day DIR-12 Deadline Missed</td><td>Late filing: Rs 100/day with NO cap. 6-month delay = Rs 18,000 in late fees alone</td><td>Patron files DIR-12 within 3-5 days of appointment to eliminate late fee risk entirely</td></tr>

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
            <h2 class="section-title">Director Appointment Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Director Appointment (Regular/Additional)</td><td>Patron Rs 3,000-8,000 + DIN Rs 500</td></tr><tr><td>DIN Application + DSC + Appointment</td><td>Patron Rs 5,000-10,000</td></tr><tr><td>Investor-Nominee Director (Post-Funding)</td><td>Patron Rs 5,000-12,000</td></tr><tr><td>Foreign Director (DIN + FEMA)</td><td>Patron Rs 10,000-20,000</td></tr><tr><td>Independent Director Appointment</td><td>Patron Rs 8,000-15,000</td></tr><tr><td>DIN Reactivation + Appointment</td><td>Patron Rs 8,000-15,000</td></tr><tr><td>Director Resignation (DIR-11 + DIR-12)</td><td>Patron Rs 3,000-5,000</td></tr><tr><td>Director Removal (S.169 + DIR-12)</td><td>Patron Rs 10,000-20,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Director Appointment in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Director%20Appointment%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Director Appointment Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DIN application (DIR-3)</td><td>1-3 business days</td></tr><tr><td>DSC procurement (if needed)</td><td>1-2 business days</td></tr><tr><td>Consent (DIR-2)</td><td>1 day</td></tr><tr><td>Board Resolution (additional director)</td><td>Next board meeting (Day 7-10)</td></tr><tr><td>OR Shareholder Resolution (regular)</td><td>AGM/EGM (21-day notice, Day 25-30)</td></tr><tr><td>File DIR-12 with ROC Pune</td><td>Within 30 days of appointment</td></tr><tr><td>Appointment letter + register update</td><td>1-2 days post-filing</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Fast-Track (Additional Director):</strong> If proposed director already has active DIN and DSC, entire process from consent to DIR-12 filing can be completed in 3-5 business days via board resolution. All filings digital via mca.gov.in. Patron manages complete process from RTC Silver, Wagholi.</p>

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
            <h2 class="section-title">Why Choose Patron for Director Appointment in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office + All Types</h3><p class="feature-text">RTC Silver, Wagholi - DSC procurement, DIN verification and board coordination done locally. 40 min from Baner, Kharadi, Hinjewadi, MIDC.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Startup Board Composition</h3><p class="feature-text">SHA-compliant board: investor-nominee appointments, founder seats, observer rights, independent director triggers for Baner/Kharadi startups.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div><h3 class="feature-title">Foreign Director Expertise</h3><p class="feature-text">DIN with apostilled passport, foreign DSC, resident director compliance, FEMA remuneration advisory for Hinjewadi MNC subsidiaries.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">CA + CS Combined Team</h3><p class="feature-text">CS for DIR-2, DIR-3, DIR-12 forms and resolutions. CA for remuneration structuring, perquisite computation and tax advisory. Both in-house.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold." - CFO, Manufacturing, Maharashtra</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves companies across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Appointment vs Additional vs Regularisation</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Regular Director (S.152)</th><th>Additional Director (S.161)</th><th>Regularisation</th></tr></thead>
                    <tbody>
                        <tr><td>Appointed By</td><td>Shareholders at GM</td><td>Board between AGMs</td><td>Shareholders at AGM</td></tr><tr><td>Resolution</td><td>Ordinary Resolution</td><td>Board Resolution</td><td>Ordinary Resolution</td></tr><tr><td>Tenure</td><td>Until rotation / per AOA</td><td>Until next AGM</td><td>Full term as regular</td></tr><tr><td>ROC Filing</td><td>DIR-12 within 30 days</td><td>DIR-12 within 30 days</td><td>DIR-12 for designation change</td></tr><tr><td>Typical Pune Trigger</td><td>Founder, promoter, partner</td><td>Investor-nominee post-funding</td><td>Additional at next AGM</td></tr><tr><td>Risk If Missed</td><td>Vacancy = compliance issue</td><td>Ceases at AGM if not regularised</td><td>Continuing as additional = non-compliant</td></tr>

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
                
                <p>For Pune companies needing related corporate compliance:</p><ul><li><a href="/appointment-of-director">Appointment of Director (India)</a></li><li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a></li><li><a href="#">Annual ROC Filing in Pune</a></li><li><a href="/change-in-authorised-capital/pune">Change in Authorised Capital in Pune</a></li><li><a href="/issue-of-shares/pune">Issue of Shares in Pune</a></li><li><a href="/accounting-services">Accounting Services</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Sections 149-170:</strong> Board requirements, appointment, disqualification, limits, resignation, removal, register.</p><p><strong>DIN (S.153-154):</strong> Via DIR-3. 8-digit, lifetime. Identity, address, photo, DSC required.</p><p><strong>DIR-2 (S.152(5)):</strong> Consent before assuming office. Non-disqualification declaration.</p><p><strong>DIR-12 (S.170):</strong> Within 30 days. Late: Rs 100/day (no cap).</p><p><strong>S.164 Disqualification:</strong> (1) Insolvent, convicted, deposit default. (2) 3-year non-filing = 5-year DIN bar.</p><p><strong>S.149(3) Resident:</strong> 182+ days India. Penalty: Rs 1L company + Rs 25K officer.</p><p><strong>DIR-3 KYC (2025 Amendment):</strong> Once every 3 years from 31 March 2026. DIN deactivated if not filed. Rs 5,000 reactivation.</p><p><strong>S.161 Additional:</strong> By board between AGMs. Holds till next AGM. Regularise by shareholder resolution.</p><p><strong>S.165:</strong> Max 20 companies (max 10 public).</p><p><strong>ROC Pune:</strong> PMT Building, Shivajinagar 411005. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a>. NCLT Mumbai Bench for S.169 disputes.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Appointment of Director in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about director appointment in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Director Appointment in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to appoint a director in a Pune private limited company?</h3>
                        <div class="faq-expanded__a"><p>The proposed director obtains a DIN (DIR-3 on mca.gov.in) and provides written consent (DIR-2). The company passes a board resolution (for additional director) or shareholder resolution at GM (for regular director). File DIR-12 with ROC Pune within 30 days with resolution, DIR-2, and appointment letter. Update Register of Directors and issue appointment letter.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the minimum number of directors for a Pune Pvt Ltd?</h3>
                        <div class="faq-expanded__a"><p>Minimum 2 directors at all times. At least 1 must be a resident of India (stayed 182+ days in preceding calendar year under S.149(3)). Maximum 15 (can increase by special resolution). OPC requires only 1 director. Failing to maintain minimum triggers ROC action.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the new DIR-3 KYC rule from 2026?</h3>
                        <div class="faq-expanded__a"><p>From 31 March 2026, annual DIR-3 KYC is replaced with filing once every 3 years (DIR-3 KYC-Web). Directors who completed KYC till date will next be due by 30 June 2028. Changes in personal details (mobile, email, address) must still be reported within 30 days. DIN deactivated if KYC not filed; reactivation requires Rs 5,000 fee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can a person with deactivated DIN be appointed?</h3>
                        <div class="faq-expanded__a"><p>No. A deactivated DIN (due to non-KYC or S.164(2) disqualification) cannot be used for new appointments. The DIN must be reactivated by filing pending KYC and paying Rs 5,000. If deactivated due to S.164(2) (3-year company non-filing), pending annual returns of the defaulting company must also be filed before reactivation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for late DIR-12 filing?</h3>
                        <div class="faq-expanded__a"><p>Additional fees of Rs 100 per day from the due date until actual filing, with no upper cap. A 6-month delay costs approximately Rs 18,000 in late fees alone. Additionally, company and officers may face penalties under Section 172 for non-compliance with Chapter XI provisions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a foreign national be appointed as director in Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. DIN via DIR-3 with passport and apostilled address proof (instead of PAN/Aadhaar). Need DSC. Company must have at least 1 Indian-resident director (182+ days). For remuneration, FEMA guidelines and withholding tax apply. No prior RBI approval needed for directorship (unlike foreign shareholding which may need FDI compliance).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Director kaise appoint karte hain?</strong> DIN lao (DIR-3) > Consent lo (DIR-2) > Board ya GM mein resolution > DIR-12 file karo ROC pe 30 din mein > Appointment letter do > Register update karo.</p><p><strong>Minimum kitne directors?</strong> Pvt Ltd: 2 (ek resident). Maximum 15 (special resolution se zyada).</p><p><strong>DIR-3 KYC ab kab?</strong> 31 March 2026 se har 3 saal mein. Next due: 30 June 2028.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Need to Add a Director? File DIR-12 Within 30 Days</h2>
            <div class="content-text">
                
                <p>Director vacancies create immediate compliance risk. Fewer than 2 directors = S.149 violation. No resident director = Rs 1L penalty. DIR-12 late filing: <strong>Rs 100/day with NO cap</strong>. For Baner startups, SHA requires investor-nominee within 7-15 days of close. DIN deactivation stops all MCA filings. Professional fee (Rs 3,000-15,000) is a fraction of penalty exposure.</p><p><strong>Appoint your director now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Director%20Appointment%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Appoint Directors in Pune - Properly Resolved, Fully Filed</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Appointment of a director is a foundational governance action - whether a Baner startup adding an investor-nominee, a Hinjewadi MNC appointing a foreign director, an MIDC manufacturer bringing in the next generation, or a growing company appointing its first independent director. Valid DIN, written consent, right resolution and DIR-12 within 30 days are essential.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides dedicated director appointment services - DIN application, DSC, resolution drafting, DIR-12 filing, investor-nominee coordination, foreign director compliance and DIN reactivation.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years experience, 10,000+ businesses served and a 4.9 Google rating, Patron is a trusted CA and CS firm across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Director%20Appointment%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Director%20Appointment%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Director%20Appointment%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Director Appointment Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert director appointment services in all major cities</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/appointment-of-director/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/appointment-of-director/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/appointment-of-director/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end corporate compliance in Pune</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual ROC Filing</div><div class="pa-card-sub">Pune</div></div></a><a href="/issue-of-shares/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">Pune</div></div></a><a href="/change-in-authorised-capital/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Authorised Capital</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly to reflect DIR-3 KYC rule changes, MCA amendment rules, disqualification updates and filing deadline amendments. Last review: March 2026. Next review: June 2026.</p>
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
