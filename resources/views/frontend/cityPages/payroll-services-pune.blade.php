
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Payroll Services in Pune - Salary, PF, ESI & TDS | Patron</title>
    <meta name="description" content="CA-managed payroll services in Pune. EPF, ESIC, TDS, PTRC compliance included. Serving Hinjewadi, Kharadi, Chakan MIDC businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Payroll Services in Pune - Salary, PF, ESI & TDS | Patron">
    <meta property="og:description" content="CA-managed payroll services in Pune. EPF, ESIC, TDS, PTRC compliance included. Serving Hinjewadi, Kharadi, Chakan MIDC businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payroll Services in Pune - Salary, PF, ESI & TDS | Patron">
    <meta name="twitter:description" content="CA-managed payroll services in Pune. EPF, ESIC, TDS, PTRC compliance included. Serving Hinjewadi, Kharadi, Chakan MIDC businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Payroll Services in Pune",
      "description": "CA-managed payroll services in Pune. EPF, ESIC, TDS, PTRC compliance included. Serving Hinjewadi, Kharadi, Chakan MIDC businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services/pune",
      "serviceType": "Payroll Services in Pune",
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
        "url": "https://www.patronaccounting.com/payroll-services/pune",
        "price": "1499"
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
          "name": "Payroll Services in India",
          "item": "https://www.patronaccounting.com/payroll-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Payroll Services in Pune",
          "item": "https://www.patronaccounting.com/payroll-services/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles EPF and ESIC compliance in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Regional PF Commissioner, Pune handles all EPF matters including registration, contribution filing, and grievance resolution. The ESIC Regional Office, Pune manages ESI registration, contribution processing, and benefit claims. Patron files all EPF ECR and ESIC challans electronically from our Pune office - no physical visits required."
          }
        },
        {
          "@type": "Question",
          "name": "What is the fee for payroll services in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's CA-managed payroll starts from Rs 1,499 per month for up to 10 employees, covering salary processing, EPF/ESIC/TDS/PT compliance, and payslip generation. For 11-50 employees: Rs 3,999/month. 51-200 employees: Rs 7,999/month. Custom pricing for larger teams. One-time setup: Rs 4,999 to Rs 9,999."
          }
        },
        {
          "@type": "Question",
          "name": "How long does payroll setup take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "3-5 working days, including employee data onboarding, EPF/ESIC registration (if not already registered), PTRC setup on mahagst.gov.in, salary structure configuration, and bank advice file format setup. The first payroll run is typically processed in the same month as onboarding."
          }
        },
        {
          "@type": "Question",
          "name": "Is EPF mandatory for companies with fewer than 20 employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the EPF Act 1952, EPF registration is mandatory for establishments with 20 or more employees. Establishments below 20 can voluntarily register. Once registered, the obligation continues even if employee count drops below 20. Patron advises Pune startups to plan for EPF registration proactively."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ESIC wage ceiling in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 21,000 gross salary per month (Rs 25,000 for employees with disabilities). Employer contributes 3.25% and employee 0.75%. ESIC provides medical, maternity, disability, and dependent benefits. Patron tracks ESIC eligibility monthly as employee salaries change."
          }
        },
        {
          "@type": "Question",
          "name": "Does payroll service include Maharashtra Professional Tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron includes PT deduction from employee salaries, PTRC return filing on mahagst.gov.in, and PTEC payment tracking for the business entity. Maximum PT Rs 2,500 per person per year under PT Act 1975. PTRC returns for FY 2025-26 are due by 15 March 2026."
          }
        },
        {
          "@type": "Question",
          "name": "Can payroll services handle Form 16 generation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron generates Form 16 (Part A from TRACES portal + Part B computed from payroll data) for all employees and distributes it by 15 June. This requires accurate quarterly Form 24Q filing throughout the year. Our CA team ensures zero mismatches between Form 16, Form 26AS, and actual TDS deduction."
          }
        },
        {
          "@type": "Question",
          "name": "What statutory compliances are covered in payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EPF (12%+12%), ESIC (0.75%+3.25%), TDS under Section 192, Maharashtra PT (PTRC/PTEC), Maharashtra LWF (Rs 12 employer + Rs 6 employee, June and December), and Form 16 generation. All compliances are included in the monthly payroll fee with no separate charges. Quick Answers Payroll outsource karna chahiye ya in-house rakhein? Agar 10+ employees hain aur dedicated HR/payroll person nahi hai, toh outsource cost-effective. EPF, ESIC, TDS, PT sab ka compliance automatic. EPF ka paisa kab jama karna hota hai? Har mahine ki 15 tareekh tak. Late deposit pe Section 14B ke under 5% se 100% tak damages. Maharashtra mein Professional Tax kitna lagta hai? Male: Rs 7,500/month se zyada salary pe. Max Rs 2,500/year. Female: Rs 25,000/month threshold."
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
                        Payroll Services in Pune: CA-Managed Salary Processing and Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Employee master data, PAN, Aadhaar, bank details, salary structure, attendance records</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 1,499/month (up to 10 employees, all statutory compliances included)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All employers - IT companies, manufacturers, startups, MSMEs in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Payroll setup in 3-5 working days; salary processing by 1st of every month</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Services%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20payroll%20services%20in%20Pune.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Payroll%20Services%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Payroll Services in Pune',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">In-House vs Outsource</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Payroll Services in Pune Services at a Glance</strong></p>
                    <p>Payroll services cover end-to-end salary processing, statutory deductions (EPF, ESIC, TDS, PT), compliance filing, and employee payslip generation. Every employer with 20+ employees must register under EPF; those with 10+ employees earning up to Rs 21,000/month under ESIC. Under the Code on Wages (effective Nov 2025), basic pay must be at least 50% of CTC - directly increasing EPF/ESIC bases for Pune employers.</p>
                </div>
                <p>Pune employs over 2 million people across IT parks in Hinjewadi and Kharadi, automotive plants in Chakan, and manufacturing units in MIDC Bhosari. Every employer must process salaries accurately, deduct contributions on time, and file monthly returns. Learn more about <a href="/payroll-services">Payroll Services across India</a>.</p>
                <p>Maharashtra PT Act 1975 adds another layer - PTRC is mandatory for every employer. The Income Tax Act 2025 (effective 1 April 2026) introduces revised TDS rules. Patron Accounting manages payroll from our Pune office at RTC Silver, Wagholi - handling salary processing, EPF/ESIC/PT/TDS compliance, Form 16, and integration with <a href="/accounting-services/pune">Accounting Services</a> and <a href="/zoho-books-accounting">Zoho Books</a>.</p>
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
                <h2 class="section-title">What Are Payroll Services?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll services refer to the end-to-end management of employee salary processing, statutory deductions, compliance filings, and payslip generation for businesses, governed by the EPF Act 1952, the ESI Act 1948, and the Income Tax Act.</p>
                    <p>For Pune's IT sector - companies in Hinjewadi employing thousands with complex salary structures - accurate payroll is critical. A single EPF calculation error triggers penalty notices under Section 14B with damages from 5% to 100% of arrears. When managed by a CA firm, payroll integrates with TDS compliance, Form 16, <a href="/statutory-audit">statutory audit</a>, and complete books of account maintenance.</p>
                    <p>Coordination with the Regional PF Commissioner, Pune and <a href="https://epfindia.gov.in/" target="_blank" rel="noopener">EPFO portal</a>, ESIC Regional Office, Pune, and Maharashtra GST Department for PTRC ensures your Pune business meets every statutory deadline without penalty risk.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Payroll Services in Pune:</strong></p>
                    <p><strong>EPF:</strong> 12% employee + 12% employer on basic + DA. Mandatory for 20+ employees. Deposit by 15th. Section 14B damages for late payment.</p>
                    <p><strong>ESIC:</strong> 0.75% employee + 3.25% employer for salary up to Rs 21,000/month. 10+ employees in Maharashtra.</p>
                    <p><strong>Code on Wages 2019:</strong> Basic pay must be at least 50% of CTC (effective Nov 2025). Increases EPF/ESIC contribution bases.</p>
                    <p><strong>Maharashtra PT Act 1975:</strong> PTRC for employers, PTEC for entities. Male threshold Rs 7,500/month. Max Rs 2,500/year.</p>
                    <p><strong>Form 24Q:</strong> Quarterly TDS return for salary deductions filed with Income Tax Department.</p>
                    <p><strong>Section 14B:</strong> EPF penalty for late deposit - 5% to 100% of arrears depending on delay period.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payroll Services in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Pune Payroll Hub</span>
                        <strong>Compliant</strong>
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
            <h2 class="section-title">Who Needs Payroll Services in Pune?</h2>
            <div class="content-text">
                
                <p><strong>IT Companies (Hinjewadi, Kharadi, Magarpatta):</strong> Large engineering teams with variable compensation. EPF mandatory for 20+ employees. ESIC for salary up to Rs 21,000. Complex TDS with old/new regime choices. Bundle with <a href="/gst-registration/pune">GST Registration in Pune</a>.</p>
                <p><strong>Manufacturers (Chakan, MIDC Bhosari):</strong> Permanent, contract, and temporary workers across shifts. Payment of Wages Act: salary by 7th/10th. Factories Act overtime at 2x wage rate. EPF on basic + DA.</p>
                <p><strong>Startups (Magarpatta, Baner):</strong> Cross 10/20-employee thresholds during growth. Early EPF/ESIC registration prevents backdated liabilities. Code on Wages: 50% basic of CTC impacts PF calculations.</p>
                <p><strong>Professional Services (Koregaon Park, Wakad, Viman Nagar):</strong> Small-mid teams where each employee's tax regime choice (old vs new Section 115BAC) affects TDS computation. Investment proof verification during Jan-Mar.</p>
                <p><strong>Contract Labour Employers:</strong> Principal employer liable for contractor default under Contract Labour Act 1970. Separate compliance reports per contractor required.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services Included by Patron in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Salary Processing</td><td>Monthly computation: basic, HRA, allowances, incentives, overtime, arrears. Bank advice file for bulk transfer across Pune bank branches</td></tr>
                        <tr><td>EPF Administration</td><td>12%+12% calculation, ECR generation, <a href="https://epfindia.gov.in/" target="_blank" rel="noopener">EPFO portal</a> filing, UAN activation, Aadhaar-KYC linking. Coordination with Regional PF Commissioner, Pune</td></tr>
                        <tr><td>ESIC Compliance</td><td>0.75%+3.25% calculation for employees up to Rs 21,000/month. Monthly challan, IP number generation, half-yearly returns with ESIC Regional Office, Pune</td></tr>
                        <tr><td>TDS on Salary (Section 192)</td><td>Monthly TDS per declared regime and investments. Quarterly Form 24Q filing. Annual Form 16 by 15 June. TDS deposit by 7th</td></tr>
                        <tr><td>Maharashtra PT (PTRC/PTEC)</td><td>Monthly PT deduction per Maharashtra PT Act 1975 slabs. PTRC return on mahagst.gov.in. PTEC payment tracking. Due 15 March 2026 for FY 2025-26</td></tr>
                        <tr><td>Maharashtra LWF</td><td>Employer Rs 12 + Employee Rs 6. June and December contribution periods under LWF Act 1953</td></tr>
                        <tr><td>Full and Final Settlement</td><td>Separation salary, leave encashment, bonus pro-rata, gratuity (5+ years under Payment of Gratuity Act 1972), PF transfer guidance</td></tr>
                        <tr><td>Statutory Audit Support</td><td>Year-end reconciliation with books, EPF/ESIC certificates, PT receipts, TDS computation sheets for <a href="/statutory-audit">statutory auditor</a></td></tr>

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
            <h2 class="section-title">How Payroll Services Work in Pune - 6-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete payroll cycle - from onboarding to annual compliance and statutory audit support.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Onboard and Configure Payroll</h3><p class="step-description">Collect employee master data (PAN, Aadhaar, bank, salary structure). Register with Regional PF Commissioner Pune (20+ employees) and ESIC Regional Office Pune. PTRC on mahagst.gov.in. Configure CTC with basic pay at 50% per Code on Wages.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EPF/ESIC Registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PTRC Setup</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="22" width="70" height="10" rx="3" fill="#E8EDF4"/><rect x="25" y="37" width="70" height="10" rx="3" fill="#FFF3E0"/><rect x="25" y="52" width="70" height="10" rx="3" fill="#E8F5E9"/><circle cx="95" cy="68" r="10" fill="#10B981" opacity="0.2"/></svg></div><span class="illustration-label">Onboarded</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Collect Monthly Attendance and Inputs</h3><p class="step-description">Attendance, leave records, overtime (Chakan manufacturing under Factories Act), new joiners, separations, salary revisions, reimbursements. IT companies: variable pay, project bonuses, stock option perquisite valuations.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Attendance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Inputs Received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="30" height="35" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="60" y="25" width="35" height="35" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Salary and Statutory Deductions</h3><p class="step-description">Gross salary, EPF (12%+12% of basic+DA), ESIC (0.75%+3.25% for eligible), TDS Section 192 per regime and investments, Maharashtra PT per slab, LWF (June/December). Net salary computed after all deductions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deductions Applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="90" cy="68" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M84 68L88 72L96 64" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Salary Ready</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Process Payment and File Returns</h3><p class="step-description">Bank advice for bulk salary transfer. EPF ECR on EPFO Unified Portal. ESIC challan by 15th. TDS deposit by 7th under Section 194. PTRC return on mahagst.gov.in by last day of month (monthly) or 31 March (annual). FY 2025-26 revised due: 15 March 2026.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Salary Paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Returns Filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Processed</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Generate Payslips and Compliance Reports</h3><p class="step-description">Digital payslips with CTC breakdown distributed to employees. Monthly reports: EPF contribution summary, ESIC eligibility tracker, TDS computation sheet, PT deduction register. For manufacturers with contract labour: separate reports per contractor.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips Sent</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MIS Reports</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="32" y="25" width="25" height="30" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="62" y="25" width="25" height="30" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/></svg></div><span class="illustration-label">Reports Done</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Quarterly Returns and Annual Compliance</h3><p class="step-description">Form 24Q quarterly. Annual PF reconciliation. ESIC half-yearly returns. Form 16 by 15 June. Year-end payroll reconciliation for statutory audit ensuring P&L salary expense matches EPF/ESIC/TDS records. Gratuity provision computed under Payment of Gratuity Act 1972.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 Done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audit Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Cycle Complete</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Payroll Setup in Pune</h2>
            <div class="content-text">
                
                <ul><li>Company PAN Card and Certificate of Incorporation / Partnership Deed</li><li>EPF registration certificate (if already registered with Regional PF Commissioner, Pune)</li><li>ESIC registration certificate (if already registered with ESIC Regional Office, Pune)</li><li>PTRC certificate from Maharashtra GST Department (mahagst.gov.in)</li><li>Maharashtra Shops & Establishments registration certificate</li><li>Employee master list with PAN, Aadhaar, bank account details, and date of joining</li><li>CTC structure and salary breakup for each employee</li><li>Attendance and leave policy document</li><li>Previous months' payroll data (if migrating from another provider)</li><li>TAN (Tax Deduction Account Number) for TDS compliance</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> Manufacturing units in Chakan MIDC and Bhosari under Factories Act 1948 should provide factory licence and overtime register. IT companies in Hinjewadi SEZ units should confirm if they have separate PF establishment codes for SEZ and DTA operations.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Payroll Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Labour Code Wage Restructuring</td><td>Code on Wages mandates basic pay at 50%+ of CTC. Increases EPF/ESIC bases. Many Hinjewadi IT firms still on pre-2025 non-compliant structures</td><td>Patron restructures salary components to meet 50% basic requirement while optimising take-home pay</td></tr>
                        <tr><td>PTRC Filing Complexity</td><td>Multi-location employers need separate PTRC returns per city on mahagst.gov.in. FY 2025-26 due 15 March 2026</td><td>PTRC returns filed for all Maharashtra locations. Deadline tracked and met without penalty</td></tr>
                        <tr><td>EPF Compliance for Growing Startups</td><td>Crossing 20-employee threshold triggers retrospective contributions + 12% interest + Section 14B damages</td><td>Proactive EPF registration before threshold. Zero backdated liability risk</td></tr>
                        <tr><td>Overtime Errors in Manufacturing</td><td>Factories Act 1948: overtime at 2x ordinary rate. Chakan/Bhosari units with multiple shifts prone to errors</td><td>Accurate overtime computation per Factories Act for all shift patterns</td></tr>
                        <tr><td>Form 16 Delays and TDS Mismatches</td><td>Delayed Form 24Q or TDS computation errors create Form 26AS mismatches triggering IT scrutiny notices</td><td>Form 24Q filed quarterly on time. Form 16 by 15 June. Zero mismatches between Form 16 and Form 26AS</td></tr>

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
            <h2 class="section-title">Payroll Service Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (Payroll Services)</td><td>Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Payroll Setup + Onboarding (one-time)</td><td>Rs 4,999 - Rs 9,999</td></tr>
                        <tr><td>Monthly Payroll (up to 10 employees)</td><td>Rs 1,499/month (all statutory compliances included)</td></tr>
                        <tr><td>Monthly Payroll (11-50 employees)</td><td>Rs 3,999/month</td></tr>
                        <tr><td>Monthly Payroll (51-200 employees)</td><td>Rs 7,999/month</td></tr>
                        <tr><td>TDS Filing (Form 24Q)</td><td>Rs 999/quarter</td></tr>
                        <tr><td>Form 16 Generation</td><td>Rs 99/employee (annual, by 15 June)</td></tr>
                        <tr><td>Full & Final Settlement</td><td>Rs 499/employee</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Payroll Services in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Payroll%20Services%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Service Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Initial Assessment</td><td>1 working day</td></tr><tr><td>Payroll Setup + Configuration</td><td>2-3 working days</td></tr><tr><td>Data Migration (if switching)</td><td>2-3 working days</td></tr><tr><td>First Payroll Run</td><td>By 1st of following month</td></tr><tr><td>First Compliance Filing</td><td>By 15th of following month</td></tr><tr><td><strong>Total Setup</strong></td><td><strong>3-5 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> EPF deposit by 15th - late payment triggers 12% interest + Section 14B damages (5-100% of arrears). ESIC by 15th. TDS by 7th. PTRC for FY 2025-26 by 15 March 2026. Code on Wages: 50% basic of CTC - non-compliant structures risk backdated recalculation. Every missed deadline compounds into larger penalties.</p>

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
            <h2 class="section-title">Why Choose Patron for Payroll Services in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office with EPFO/ESIC Experience</h3><p class="feature-desc">RTC Silver, Wagholi - within 30 minutes of Hinjewadi, Kharadi, Chakan MIDC. Walk-in for salary structure design, compliance reviews, and payroll audit support.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">CA-Backed Processing</h3><p class="feature-desc">Every payroll run verified by CA team. Integrates with Tally/Zoho Books accounting, TDS returns, and statutory audit. Not just software-driven - audit-integrated.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">All Compliance Included</h3><p class="feature-desc">EPF + ESIC + TDS + PT + LWF all in one monthly fee. No separate charges per compliance. Salary by 1st, EPF/ESIC by 15th, TDS by 7th, Form 16 by June 1st.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Track Record</h3><p class="feature-desc">10,000+ businesses served. 4.9 Google rating. 50,000+ documents filed. Zero late filing penalties guaranteed. 200+ employee payrolls handled monthly without errors.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employers Across Pune</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>"Patron's payroll team handles 200+ employees without a single error month on month." - HR Head, IT Company, Gurugram</p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Payroll vs Patron CA-Managed Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>In-House Payroll</th><th>Patron CA-Managed</th></tr></thead>
                    <tbody>
                        <tr><td>Staff Required</td><td>Dedicated payroll executive (Rs 25,000-40,000/month)</td><td>No additional hire needed</td></tr>
                        <tr><td>Compliance Accuracy</td><td>Dependent on individual's knowledge</td><td>CA-verified every month</td></tr>
                        <tr><td>EPF/ESIC Filing</td><td>Manual; risk of late filing penalties</td><td>Filed by 15th without fail</td></tr>
                        <tr><td>TDS/Form 16</td><td>Often delayed; mismatch risk</td><td>Form 16 by 1 June; zero mismatches</td></tr>
                        <tr><td>Audit Readiness</td><td>Year-end scramble to compile records</td><td>Audit-ready data maintained throughout year</td></tr>
                        <tr><td>Cost (50 employees)</td><td>Rs 40,000+/month (salary + software + penalties)</td><td>Rs 3,999/month (all-inclusive)</td></tr>

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
                
                <p>Patron offers integrated payroll and business compliance in Pune:</p><ul>
                    <li><a href="/payroll-services">Payroll Services in India</a></li>
                    <li><a href="/accounting-services/pune">Accounting Services in Pune</a></li>
                    <li><a href="/gst-registration/pune">GST Registration in Pune</a></li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a></li>
                    <li><a href="#">Professional Tax Registration</a> - PTRC/PTEC</li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
                    <li><a href="/income-tax-return">Income Tax Return</a></li>
                    <li><a href="/zoho-books-accounting">Zoho Books Accounting in Pune</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Payroll in Pune</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>EPF Act, 1952 - 12%+12% on basic+DA. 20+ employees. Section 14B damages (5-100%)</li>
                    <li>ESI Act, 1948 - 0.75%+3.25%. Salary up to Rs 21,000. 10+ employees in Maharashtra</li>
                    <li>Income Tax Act - Section 192 TDS on salary. Form 24Q quarterly. Form 16 by 15 June</li>
                    <li>Maharashtra PT Act 1975 - PTRC/PTEC mandatory. Male Rs 7,500/month. Max Rs 2,500/year</li>
                    <li>Code on Wages 2019 (Nov 2025) - Basic pay at least 50% of CTC</li>
                    <li>Payment of Gratuity Act 1972 - 5 years continuous service. Last drawn salary x 15/26 x years</li></ul>
                <p><strong>Key Portals:</strong></p><ul>
                    <li><a href="https://epfindia.gov.in/" target="_blank" rel="noopener">EPFO</a> - epfindia.gov.in</li>
                    <li>ESIC - esic.gov.in</li>
                    <li>Maharashtra PT/LWF - mahagst.gov.in</li></ul>

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
                    <h2 class="faq-expanded__title">FAQs - Payroll Services in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about payroll services in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Payroll Services in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles EPF and ESIC compliance in Pune?</h3>
                        <div class="faq-expanded__a"><p>The Regional PF Commissioner, Pune handles all EPF matters including registration, contribution filing, and grievance resolution. The ESIC Regional Office, Pune manages ESI registration, contribution processing, and benefit claims. Patron files all EPF ECR and ESIC challans electronically from our Pune office - no physical visits required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the fee for payroll services in Pune?</h3>
                        <div class="faq-expanded__a"><p>Patron's CA-managed payroll starts from Rs 1,499 per month for up to 10 employees, covering salary processing, EPF/ESIC/TDS/PT compliance, and payslip generation. For 11-50 employees: Rs 3,999/month. 51-200 employees: Rs 7,999/month. Custom pricing for larger teams. One-time setup: Rs 4,999 to Rs 9,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does payroll setup take in Pune?</h3>
                        <div class="faq-expanded__a"><p>3-5 working days, including employee data onboarding, EPF/ESIC registration (if not already registered), PTRC setup on mahagst.gov.in, salary structure configuration, and bank advice file format setup. The first payroll run is typically processed in the same month as onboarding.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is EPF mandatory for companies with fewer than 20 employees?</h3>
                        <div class="faq-expanded__a"><p>Under the EPF Act 1952, EPF registration is mandatory for establishments with 20 or more employees. Establishments below 20 can voluntarily register. Once registered, the obligation continues even if employee count drops below 20. Patron advises Pune startups to plan for EPF registration proactively.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the ESIC wage ceiling in 2026?</h3>
                        <div class="faq-expanded__a"><p>Rs 21,000 gross salary per month (Rs 25,000 for employees with disabilities). Employer contributes 3.25% and employee 0.75%. ESIC provides medical, maternity, disability, and dependent benefits. Patron tracks ESIC eligibility monthly as employee salaries change.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does payroll service include Maharashtra Professional Tax?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron includes PT deduction from employee salaries, PTRC return filing on mahagst.gov.in, and PTEC payment tracking for the business entity. Maximum PT Rs 2,500 per person per year under PT Act 1975. PTRC returns for FY 2025-26 are due by 15 March 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can payroll services handle Form 16 generation?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron generates Form 16 (Part A from TRACES portal + Part B computed from payroll data) for all employees and distributes it by 15 June. This requires accurate quarterly Form 24Q filing throughout the year. Our CA team ensures zero mismatches between Form 16, Form 26AS, and actual TDS deduction.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What statutory compliances are covered in payroll?</h3>
                        <div class="faq-expanded__a"><p>EPF (12%+12%), ESIC (0.75%+3.25%), TDS under Section 192, Maharashtra PT (PTRC/PTEC), Maharashtra LWF (Rs 12 employer + Rs 6 employee, June and December), and Form 16 generation. All compliances are included in the monthly payroll fee with no separate charges.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Payroll outsource karna chahiye ya in-house rakhein?</strong> Agar 10+ employees hain aur dedicated HR/payroll person nahi hai, toh outsource cost-effective. EPF, ESIC, TDS, PT sab ka compliance automatic.</p><p><strong>EPF ka paisa kab jama karna hota hai?</strong> Har mahine ki 15 tareekh tak. Late deposit pe Section 14B ke under 5% se 100% tak damages.</p><p><strong>Maharashtra mein Professional Tax kitna lagta hai?</strong> Male: Rs 7,500/month se zyada salary pe. Max Rs 2,500/year. Female: Rs 25,000/month threshold.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Payroll Compliant in Pune Before the Next Cycle</h2>
            <div class="content-text">
                
                <p>EPF by 15th - late = 12% interest + 5-100% damages. ESIC by 15th. TDS by 7th. PTRC for FY 2025-26 by 15 March 2026. Code on Wages: 50% basic of CTC - non-compliant structures risk backdated recalculation. Every missed deadline compounds into larger penalties.</p><p><strong>Start now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Payroll%20Services%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Payroll Services in Pune with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Payroll services in Pune cover end-to-end salary processing, EPF/ESIC/TDS/PT statutory compliance, payslip generation, and Form 16 delivery for IT companies, manufacturers, startups, and professional services firms.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi delivers CA-managed payroll integrating with accounting, tax filing, and statutory audit. With 10,000+ businesses served and direct experience at Regional PF Commissioner and ESIC Regional Office Pune, your business meets every statutory deadline without penalty risk.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Payroll%20Services%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Services%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20payroll%20services%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides payroll services in 8 major cities.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/payroll-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/payroll-services/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/payroll-services/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/payroll-services/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/payroll-services/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end business compliance in Pune</div><div class="pa-cross-grid"><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Drug License</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to incorporate labour code changes, EPF/ESIC rate revisions, TDS computation updates, and Maharashtra PT deadline notifications. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
