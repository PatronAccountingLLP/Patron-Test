
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Security Agency Payroll in Delhi - ESIC, PF & Wage Register</title>
    <meta name="description" content="CA-led security agency payroll in Delhi. Guard wages, PF/ESI, site-wise tracking, VDA, PSARA compliance. Serving CP, Aerocity, Dwarka, Rohini. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-security-agencies/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Security Agency Payroll in Delhi - ESIC, PF & Wage Register">
    <meta property="og:description" content="CA-led security agency payroll in Delhi. Guard wages, PF/ESI, site-wise tracking, VDA, PSARA compliance. Serving CP, Aerocity, Dwarka, Rohini. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-security-agencies/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Security Agency Payroll in Delhi - ESIC, PF & Wage Register">
    <meta name="twitter:description" content="CA-led security agency payroll in Delhi. Guard wages, PF/ESI, site-wise tracking, VDA, PSARA compliance. Serving CP, Aerocity, Dwarka, Rohini. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Security Agency Payroll Services Delhi",
      "description": "CA-led security agency payroll in Delhi. Guard wages, PF/ESI, site-wise tracking, VDA, PSARA compliance. Serving CP, Aerocity, Dwarka, Rohini. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-security-agencies/delhi",
      "serviceType": "Security Agency Payroll Services Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/payroll-services-for-security-agencies/delhi",
        "price": "8000"
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
          "name": "Security Agency Payroll Services in India",
          "item": "https://www.patronaccounting.com/payroll-services-for-security-agencies"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Security Agency Payroll Services Delhi",
          "item": "https://www.patronaccounting.com/payroll-services-for-security-agencies/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which CA firm handles security agency payroll in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron Rohini office. Site-wise guard tracking, Delhi VDA compliance, PF/ESI for all guards, client billing reconciliation, PSARA/CLRA inspection-ready. No generic provider handles multi-site security payroll."
          }
        },
        {
          "@type": "Question",
          "name": "How much does security payroll cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Small Rs 8,000-15,000. Mid Rs 18,000-35,000. Large Rs 40,000-75,000. Enterprise 1000+ Rs 80,000+. VDA revision included."
          }
        },
        {
          "@type": "Question",
          "name": "Is PF/ESI mandatory for security guards?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. PF mandatory 20+ employees. ESI mandatory 10+ with ≤Rs 21K. Virtually all Delhi guards qualify for both. Non-deposit = backdated + 100% damages. Principal employers verify monthly."
          }
        },
        {
          "@type": "Question",
          "name": "What is Delhi minimum wage for guards?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unskilled ~Rs 18,066/month (Basic+VDA). Semi-skilled ~Rs 19,929. Skilled ~Rs 21,917. All-inclusive compliant cost ~Rs 24,000-26,000. Revised April + October via VDA."
          }
        },
        {
          "@type": "Question",
          "name": "How is site-wise payroll managed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Each client site = cost centre. Guards assigned via deployment register. Duty rosters capture shift/site/hours. Reliever tracked separately. Site-wise summaries for client billing + CLRA registers."
          }
        },
        {
          "@type": "Question",
          "name": "How does Labour Code affect guard payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "(1) Basic ≥50% (most Delhi min wage complies). (2) Overtime 2x beyond 8-hour shift. (3) Fixed-term event guards = full PF/ESI/bonus/gratuity from Day 1."
          }
        },
        {
          "@type": "Question",
          "name": "What about principal employer liability?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under CLRA, if agency doesn't pay min wage or PF/ESI, principal employer (client) is also liable. Clients now demand monthly PF challan verification. Patron provides compliance packs."
          }
        },
        {
          "@type": "Question",
          "name": "How fast is VDA revision applied?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Within 5 days of Delhi notification. Wage library updated. Arrears from effective date computed. Client rate revision letters prepared. Zero accumulation of back-wages. Quick Answers Delhi mein guard ki minimum salary? Unskilled ~Rs 18,066/month (Basic+VDA). All-inclusive compliant cost ~Rs 24,000-26,000 with PF/ESI/bonus. VDA kab revise hota hai? April aur October mein. Turant update mandatory - delay se arrears accumulate. Principal employer ki liability? CLRA ke under agar agency ne min wage ya PF/ESI nahi diya toh client bhi liable hai."
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
                        Security Agency Payroll Services in Delhi: CA-Led Guard Wage Processing with Site-Wise Tracking and PSARA Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">06 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Guard master data, site deployment registers, duty rosters, PSARA license, PF/ESI, min wage notification</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 8,000/month for small security agencies in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> PSARA-licensed agencies, facility management, cash logistics, event security, corporate security in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Payroll setup 5-7 days; first salary run from following month; VDA revision within 5 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Security payroll for PSARA-licensed agencies across all Delhi deployment zones.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Security%20Agencies%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Security Payroll in Delhi',
                                            'city'     => 'Delhi',
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
    'ctaText'    => 'Security payroll with site-wise tracking, VDA auto-revision, and PSARA/CLRA inspection-ready documentation.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Challenges</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Guard Types</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Why Patron</a><a href="#benefits-section" class="toc-btn">Quality</a><a href="#comparison-section" class="toc-btn">Patron vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Security Agency Payroll in Delhi: Guard Wages, VDA, and Site-Wise Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Security Payroll in Delhi Services at a Glance</strong></p>
                    <p>Security payroll = site-wise guard wage processing + Delhi min wage VDA (April + October auto-revision) + PF ~13% employer + ESI 3.25%+0.75% (virtually all guards qualify) + overtime 2x + night differential + reliever tracking + armed vs unarmed differentials + client billing reconciliation + PSARA/CLRA inspection-ready. Unskilled guard ~Rs 18,066/month, all-inclusive ~Rs 24,000-26,000. No PT. From Rs 8,000/month.</p>
                </div>
                <p>Delhi's private security industry is among India's largest. For a comprehensive overview, see our <a href="/payroll-services-for-security-agencies">Security Agency Payroll</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Guard Wage</td><td>Unskilled ~Rs 18,066 (Basic+VDA). Semi-skilled ~Rs 19,929. Skilled ~Rs 21,917. All-inclusive ~Rs 24K-26K</td></tr><tr><td>VDA Revision</td><td>April + October. Auto-updated by Patron within days. Arrears computed. Client rate letters prepared</td></tr><tr><td>Statutory</td><td>PF ~13% employer. ESI 3.25%+0.75%. Bonus 8.33%. Gratuity after 5 years. No PT</td></tr><tr><td>Site-Wise</td><td>Per-site deployment tracking. Shift/overtime/reliever. Client billing reconciliation. CLRA registers</td></tr><tr><td>Cost From</td><td>Rs 8,000/month (small agency); Rs 18,000-75,000+ (mid/large)</td></tr></tbody></table></div><p</p>
                <p>Corporate CP/Aerocity, residential Dwarka/Rohini/Vasant Kunj, diplomatic Chanakyapuri, industrial Okhla/Narela, malls Saket, events Pragati Maidan. PSARA from Delhi Police Commissioner. Guards across 24/7 posts with 3-shift rotation + reliever. Armed/unarmed/DGR. VDA biannual. Principal employer liability under CLRA. Compliant cost ~Rs 24K-26K all-inclusive. Agencies below = non-compliant. Patron Rohini office.</p>
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
                <h2 class="section-title">What Are Security Agency Payroll Services?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Definition:</strong> Specialised guard wage processing for PSARA-licensed agencies covering site-wise deployment tracking, Delhi min wage with VDA, PF/ESI/bonus/gratuity, overtime/night shift, reliever management, armed vs unarmed differentials, client billing reconciliation, and PSARA/CLRA documentation.</p><p><strong>Key complexity:</strong> 500-guard agency across 30 sites: which guard, which shift, which site, regular or reliever, overtime hours, wage rate (unskilled/semi/skilled/armed), correct PF/ESI. Payroll must reconcile with client invoices - mismatch = underpayment or under-billing.</p><p>See <a href="/payroll-processing-and-management-services">Payroll Services</a> for general payroll.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Security Payroll in Delhi:</strong></p>
                    <p><strong>Site-Wise Tracking:</strong> Guard deployment per client site. Duty hours, overtime, night, weekly off, reliever days. Cost centre per site. CLRA registers per site.</p><p><strong>VDA (Variable Dearness Allowance):</strong> Delhi min wage component revised April + October. Patron updates within days. Arrears from effective date. Client rate revision letters prepared.</p><p><strong>PSARA:</strong> License from Delhi Police Commissioner. Mandatory for all security agencies. 100% guard police verification. Training records required.</p><p><strong>Reliever Guard:</strong> Fills post when regular guard takes weekly off/leave. ~1/6th of 24/7 post cost. Must be in billing. Without = overtime violation or unmanned post.</p><p><strong>All-Inclusive Cost:</strong> Guard wage + PF (~13%) + ESI (3.25%) + Bonus (8.33%) + Gratuity + Agency charge = ~Rs 24K-26K for unskilled.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Security Payroll in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Security</span>
                        <strong>Site-Wise</strong>
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
            <h2 class="section-title">Who Needs Security Agency Payroll in Delhi</h2>
            <div class="content-text">
                
                <p><strong>Large Agencies (500+ guards):</strong> SIS, Topsgrup, G4S, Securitas, Quess + regional. Corporate/industrial/residential. Armed + DGR. Multi-site rotation.</p><p><strong>Mid Agencies (100-500 guards):</strong> Corporate CP/Aerocity, residential Dwarka/Rohini/Vasant Kunj, industrial Okhla/Narela. Full payroll complexity. Principal employer compliance demands.</p><p><strong>Small/Startup Agencies (20-100 guards):</strong> Ex-armed forces. 5-15 sites. Often informal payroll. Clients demand PF/ESI challan copies. Patron establishes compliance Day 1.</p><p><strong>Facility Management Companies:</strong> Integrated security + housekeeping. Guards on agency payroll. CLRA wage registers per deployment site.</p><p><strong>Event Security (Pragati Maidan, Yashobhoomi):</strong> 50-500 guards for 1-7 day events. Labour Code: fixed-term = PF + benefits Day 1. Rapid onboard/offboard.</p><p><strong>Cash Logistics (CMS, SIS Prosegur, Brink's):</strong> Armed guards, cash van crews. Skilled category wages. Weapons license tracking.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Security Payroll Challenges in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Below Delhi Minimum Wage</td><td>Agencies quote below Rs 24K-26K compliant cost by underpaying guards. Min Wages Act: imprisonment 6 months. Principal employer also liable under CLRA</td></tr><tr><td>VDA Not Applied Timely</td><td>April/October revision delayed months. 500 guards × Rs 500 × 2 months = Rs 5L arrears + PF/ESI on shortfall. Patron applies within days</td></tr><tr><td>PF/ESI Not for All Guards</td><td>Agency registered but doesn't deposit for all deployed guards. EPFO cross-checks ECR vs site deployment register. Backdated + 100% damages</td></tr><tr><td>No Reliever in Client Billing</td><td>24/7 post = 3 guards + 1/6th reliever. Without = overtime violation or unmanned on weekly offs. Both violate labour laws</td></tr><tr><td>CLRA Registers Not Site-Wise</td><td>Form XIII/XIV/XVI required at each deployment site. Most agencies centralize only. CLRA inspector at client site expects site-wise records</td></tr>

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
            <h2 class="section-title">6-Step Security Payroll for Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From agency assessment to VDA auto-revision and PSARA inspection readiness.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1-2</span><h3 class="step-title">Assessment + Wage/Site Config</h3><p class="step-description">Review PSARA status, guard count, deployment sites, categories (unskilled/semi/skilled/armed), shifts, PF/ESI, client contracts. Delhi min wage per category. Armed premium. Night differential. Reliever rate. Client billing structured: wage + PF + ESI + bonus + gratuity + service charge.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">GUARD</text></svg></div><span class="illustration-label">Setup</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3-4</span><h3 class="step-title">Site Setup + Monthly Payroll</h3><p class="step-description">Each client site = cost centre. Guard master linked. Shift patterns per site. Muster roll integrated. Monthly: site-wise duty processed, regular/reliever computed, overtime/night calculated, Delhi min wage applied, PF/ESI/bonus computed, wages by 7th, PF/ESI by 15th. CLRA registers updated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Running</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PF/ESI</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5-6</span><h3 class="step-title">VDA Revision + Annual Compliance</h3><p class="step-description">VDA notification (April/October): wage library updated within days, arrears computed, client rate revision letters prepared. Annual: Form 16, bonus by November, gratuity provision, CLRA registers (XIII/XIV/XVI), PSARA inspection documentation, site-wise deployment cost report.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>VDA updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inspection-ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Notes</th></tr></thead><tbody><tr><td>PSARA License</td><td>Agency verification</td><td>Valid from Delhi Police</td></tr><tr><td>Guard Master Data</td><td>PAN, Aadhaar, bank, police verification</td><td>Designation + category</td></tr><tr><td>Site Deployment Register</td><td>Guard allocation per site</td><td>Posts, shifts, guard count</td></tr><tr><td>Duty Rosters/Muster Rolls</td><td>Site-wise daily attendance</td><td>Shift, overtime, reliever, weekly off</td></tr><tr><td>PF/ESI Registration</td><td>Statutory</td><td>Patron assists if new</td></tr><tr><td>Delhi Min Wage Notification</td><td>VDA rates</td><td>Latest notification</td></tr><tr><td>Client Contracts</td><td>Billing reconciliation</td><td>Rates, man-day terms, statutory pass-through</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Delhi tip:</strong> Cost per 24/7 post = 3 guards × 8 hours + 1/6th reliever. Quoting without reliever = overtime violation or unmanned post on weekly offs. Patron structures every 24/7 post quotation with reliever cost built in. See <a href="/accounting-services">Accounting Services</a>.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Security Staff Categories & Payroll Treatment</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Unskilled Guard</td><td>~Rs 18,066/month (Basic+VDA). PF 12%+12%. ESI 3.25%+0.75%. Bonus 8.33%. All-inclusive ~Rs 24K-26K</td><td>Standard deployment</td></tr><tr><td>Semi-Skilled (PSARA trained)</td><td>~Rs 19,929/month. PF + ESI. Bonus 8.33%. PSARA training certificate required</td><td>Trained guards</td></tr><tr><td>Skilled (Armed/Supervisor)</td><td>~Rs 21,917/month. PF + ESI if ≤Rs 21K. Weapons license. Higher client billing</td><td>Premium sites</td></tr><tr><td>Ex-Servicemen (DGR)</td><td>Per DGR rate card. PF + ESI if applicable. Premium corporate/embassy deployments</td><td>DGR coordination</td></tr><tr><td>Event Security (Fixed-term)</td><td>Daily rate at Delhi min wage. PF from Day 1 (Labour Code). Full benefits. Settlement post-event</td><td>Rapid onboard/offboard</td></tr><tr><td>Supervisor/ASO</td><td>CTC (50% basic). PF yes. ESI no if above Rs 21K. Management cadre</td><td>Operations oversight</td></tr>

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
            <h2 class="section-title">Security Agency Payroll Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Agency (20-75 guards, 3-10 sites)</td><td>Rs 8,000 - Rs 15,000/month | Guard wages + site-wise tracking + PF/ESI + TDS + CLRA registers</td></tr><tr><td>Mid Agency (75-300 guards, 10-30 sites)</td><td>Rs 18,000 - Rs 35,000/month | VDA auto-revision + client billing reconciliation + reliever tracking + MIS</td></tr><tr><td>Large Agency (300-1000 guards, 30+ sites)</td><td>Rs 40,000 - Rs 75,000/month | Multi-state NCR + armed guard + event security + PSARA inspection support</td></tr><tr><td>Enterprise (1000+ guards)</td><td>Rs 80,000+/month | Dedicated team + multi-city + DGR + comprehensive compliance audit</td></tr><tr><td>VDA Revision Processing</td><td>Included | Auto-update within days + arrears computation + client rate revision letters</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Security Payroll in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Security%20Agencies%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron for Security Payroll in Delhi?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Delhi Security Coverage</td><td>Corporate CP/Aerocity, residential Dwarka/Rohini, diplomatic Chanakyapuri, industrial Okhla/Narela, events Pragati Maidan</td></tr><tr><td>Site-Wise Expert</td><td>Per-site deployment tracking, shift/overtime/reliever, client billing reconciliation, site-wise cost reports. Generic payroll cannot do this</td></tr><tr><td>VDA Auto-Revision</td><td>Delhi notification (April/October) updated within days. Arrears computed. Client rate letters prepared. Zero lag</td></tr><tr><td>PSARA + CLRA Ready</td><td>Form XIII/XIV/XVI per site from payroll data. PSARA inspection documentation. Principal employer compliance packs</td></tr><tr><td>From Rs 8,000/Month</td><td>Small agency to enterprise. Site-wise. VDA auto. Reliever tracked. No PT in Delhi</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> PF/ESI by 15th (12% interest + 100% damages). Min wage violation = imprisonment 6 months. VDA delay = arrears (500 guards × Rs 500 × 2 months = Rs 5L). Principal employer liability. CLRA inspection at any client site. PSARA renewal requires clean records. From Rs 8,000/month.</p>

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
            <h2 class="section-title">Patron vs General Payroll Providers</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: Site-Wise Tracking</h3><p class="feature-text">Per-site guard deployment. Shift/overtime/reliever. Client billing reconciliation. CLRA registers per site. Not flat headcount payroll.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Generic: No Site Awareness</h3><p class="feature-text">Standard headcount payroll. No deployment tracking. No client reconciliation. No CLRA site registers.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: VDA Auto-Revised</h3><p class="feature-text">Delhi VDA notification updated within days. Arrears computed. Client rate revision letters. Zero back-wage accumulation.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: PSARA/CLRA Ready</h3><p class="feature-text">Form XIII/XIV/XVI generated from payroll. PSARA inspection docs. Principal employer compliance packs. Inspection-ready always.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"600 guards across 40 Delhi sites. Patron tracks every guard per site, applies VDA within days, reconciles client billing. CLRA inspection at Aerocity client - records perfect. Zero findings."</p><p style="font-weight:700;font-size:14px;margin:0;">- MD, Security Agency, Delhi</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Startup agency. 40 guards, 8 residential sites. Patron set up compliant payroll from scratch. PF/ESI registered. VDA applied. Clients verify challans monthly - zero issues."</p><p style="font-weight:700;font-size:14px;margin:0;">- Owner, Security Agency, Rohini</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Others Detailed</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron</th><th>General Payroll Provider</th></tr></thead>
                    <tbody>
                        <tr><td>Site-Wise Tracking</td><td>Per-site deployment, shift, reliever, billing reconciliation</td><td>Flat headcount, no site awareness</td></tr><tr><td>VDA Revision</td><td>Auto-updated within days of Delhi notification</td><td>Manual, often months delayed</td></tr><tr><td>CLRA Registers</td><td>Form XIII/XIV/XVI generated per site</td><td>Not available</td></tr><tr><td>Client Billing</td><td>Payroll-to-invoice reconciliation per site</td><td>Not tracked</td></tr><tr><td>PSARA</td><td>Inspection documentation maintained</td><td>No awareness</td></tr><tr><td>Pricing</td><td>From Rs 8,000/month (security specialist)</td><td>Similar but missing security features</td></tr>

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
                
                <ul><li><a href="/payroll-services-for-security-agencies">Security Agency Payroll (National)</a></li><li><a href="/payroll-processing-and-management-services">Payroll Processing</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="/gst-registration">GST Registration</a></li><li><a href="/statutory-audit">Statutory Audit</a></li></ul>

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
                
                <p><strong>PSARA 2005:</strong> License from Delhi Police Commissioner. 100% guard police verification. Training records. Suspension/cancellation for non-compliance.</p><p><strong>CLRA 1970:</strong> Principal employer Form I (20+ contract workers). Form XIII/XIV/XVI per site. Agency responsible for wages + statutory.</p><p><strong>EPF/ESI:</strong> PF 12%+12%. ESI 3.25%+0.75% (virtually all guards qualify). ECR by 15th. Late = 12% + 100% damages.</p><p><strong>Min Wages Act:</strong> Delhi VDA biannual. Underpayment = criminal offence, imprisonment 6 months. Principal employer also liable.</p><p><strong>Bonus Act:</strong> 8.33% for guards ≤Rs 21K. By 30 November. Non-payment = imprisonment 6 months.</p><p><strong>Labour Codes 2025:</strong> 50% basic (most Delhi min wage structures comply). Overtime 2x. Fixed-term event guards = full benefits Day 1. No PT in Delhi.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Security Agency Payroll in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about guard payroll, site-wise tracking, VDA, PSARA, and principal employer compliance in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Security Payroll in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which CA firm handles security agency payroll in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Patron Rohini office. Site-wise guard tracking, Delhi VDA compliance, PF/ESI for all guards, client billing reconciliation, PSARA/CLRA inspection-ready. No generic provider handles multi-site security payroll.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does security payroll cost?</h3>
                        <div class="faq-expanded__a"><p>Small Rs 8,000-15,000. Mid Rs 18,000-35,000. Large Rs 40,000-75,000. Enterprise 1000+ Rs 80,000+. VDA revision included.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is PF/ESI mandatory for security guards?</h3>
                        <div class="faq-expanded__a"><p>Yes. PF mandatory 20+ employees. ESI mandatory 10+ with ≤Rs 21K. Virtually all Delhi guards qualify for both. Non-deposit = backdated + 100% damages. Principal employers verify monthly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Delhi minimum wage for guards?</h3>
                        <div class="faq-expanded__a"><p>Unskilled ~Rs 18,066/month (Basic+VDA). Semi-skilled ~Rs 19,929. Skilled ~Rs 21,917. All-inclusive compliant cost ~Rs 24,000-26,000. Revised April + October via VDA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is site-wise payroll managed?</h3>
                        <div class="faq-expanded__a"><p>Each client site = cost centre. Guards assigned via deployment register. Duty rosters capture shift/site/hours. Reliever tracked separately. Site-wise summaries for client billing + CLRA registers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How does Labour Code affect guard payroll?</h3>
                        <div class="faq-expanded__a"><p>(1) Basic ≥50% (most Delhi min wage complies). (2) Overtime 2x beyond 8-hour shift. (3) Fixed-term event guards = full PF/ESI/bonus/gratuity from Day 1.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What about principal employer liability?</h3>
                        <div class="faq-expanded__a"><p>Under CLRA, if agency doesn't pay min wage or PF/ESI, principal employer (client) is also liable. Clients now demand monthly PF challan verification. Patron provides compliance packs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How fast is VDA revision applied?</h3>
                        <div class="faq-expanded__a"><p>Within 5 days of Delhi notification. Wage library updated. Arrears from effective date computed. Client rate revision letters prepared. Zero accumulation of back-wages.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Delhi mein guard ki minimum salary?</strong> Unskilled ~Rs 18,066/month (Basic+VDA). All-inclusive compliant cost ~Rs 24,000-26,000 with PF/ESI/bonus.</p><p><strong>VDA kab revise hota hai?</strong> April aur October mein. Turant update mandatory - delay se arrears accumulate.</p><p><strong>Principal employer ki liability?</strong> CLRA ke under agar agency ne min wage ya PF/ESI nahi diya toh client bhi liable hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">VDA Revised - Guards Paid Updated Rate?</h2>
            <div class="content-text">
                
                <p>PF/ESI by 15th (12% + 100% damages). Min wage violation = imprisonment 6 months. VDA delay = arrears (500 guards × Rs 500 × 2 months = Rs 5L). Principal employer liable. CLRA inspection anytime. PSARA renewal needs clean records. From Rs 8,000/month.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Security%20Agencies%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Security Agency Payroll in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Security payroll in Delhi covers site-wise guard wages, VDA compliance, PF/ESI for all guards, reliever tracking, client billing reconciliation, and PSARA/CLRA inspection documentation for the capital's massive private security sector.</p><p style="color:rgba(255,255,255,0.85);">Patron's Rohini office provides CA-led security payroll with site-wise tracking and VDA auto-revision that generic providers cannot match.</p><p style="color:rgba(255,255,255,0.85);">With 15+ years, 10,000+ businesses, and a 4.9 Google rating, Patron ensures every guard is paid at Delhi minimum wage and every site-wise record is inspection-ready.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Security%20Agencies%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Security%20Payroll%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Security%20Agencies%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Security Payroll - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert security agency payroll across major Indian cities</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Security Payroll</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/payroll-services-for-security-agencies/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-security-agencies/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services-for-security-agencies/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Security compliance</div><div class="pa-cross-grid"><a href="/payroll-processing-and-management-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">Delhi</div></div></a><a href="/accounting-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Delhi</div></div></a><a href="/statutory-audit/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Delhi</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Return Filing</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Delhi VDA notifications, PSARA requirements, CLRA registers, PF/ESI rates, and Labour Code 2025 are verified.</p>
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
