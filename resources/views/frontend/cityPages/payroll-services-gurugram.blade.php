
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Payroll Services in Gurugram - Salary, PF, ESI & TDS</title>
    <meta name="description" content="CA-managed payroll services in Gurugram. PF, ESI, TDS compliance and salary processing. Serving Cyber City, Udyog Vihar, Manesar businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Payroll Services in Gurugram - Salary, PF, ESI & TDS">
    <meta property="og:description" content="CA-managed payroll services in Gurugram. PF, ESI, TDS compliance and salary processing. Serving Cyber City, Udyog Vihar, Manesar businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payroll Services in Gurugram - Salary, PF, ESI & TDS">
    <meta name="twitter:description" content="CA-managed payroll services in Gurugram. PF, ESI, TDS compliance and salary processing. Serving Cyber City, Udyog Vihar, Manesar businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Payroll Services in Gurugram",
      "description": "CA-managed payroll services in Gurugram. PF, ESI, TDS compliance and salary processing. Serving Cyber City, Udyog Vihar, Manesar businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services/gurugram",
      "serviceType": "Payroll Services in Gurugram",
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
        "url": "https://www.patronaccounting.com/payroll-services/gurugram",
        "price": "50"
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
          "name": "Payroll Services in Gurugram",
          "item": "https://www.patronaccounting.com/payroll-services/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does payroll outsourcing cost in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron starts at Rs 50 per employee per month including salary processing, PF/ESI computation, TDS, payslips, and monthly statutory filings. One-time setup Rs 5,000-10,000. EPFO/ESIC registration Rs 2,500 each if new."
          }
        },
        {
          "@type": "Question",
          "name": "Does Haryana charge Professional Tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Haryana does not levy Professional Tax. This saves Rs 2,500 per employee per year compared to Maharashtra or Karnataka. Gurugram employees have zero PT deduction, and employers have no PT registration or filing obligation. Patron's CTC structuring reflects this advantage."
          }
        },
        {
          "@type": "Question",
          "name": "Which PF and ESI office handles Gurugram businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EPFO Regional Office Gurugram handles provident fund. ESIC Office Gurugram manages employee state insurance. Patron files all monthly ECR returns and ESI contributions with these offices. Your establishment code identifies the Gurugram jurisdiction."
          }
        },
        {
          "@type": "Question",
          "name": "How long does payroll setup take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "3-5 working days for complete setup: employee data collection, CTC structuring, system configuration, and test run. If new EPFO/ESIC registration needed, add 5-7 working days. First live payroll within 2 weeks of engagement."
          }
        },
        {
          "@type": "Question",
          "name": "What are minimum wages in Haryana 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Haryana minimum wages are notified by the state government and vary by category: unskilled, semi-skilled, skilled, and highly skilled. The rates are revised periodically under the Punjab Minimum Wages Rules adopted by Haryana. Patron ensures payroll complies with the latest Haryana notification."
          }
        },
        {
          "@type": "Question",
          "name": "Can Patron handle contract labour payroll for Manesar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron manages payroll for permanent employees and contract labour for Manesar IMT manufacturers. We ensure minimum wage compliance per Haryana notification, PF/ESI contributions for contract workers, and maintain registers under the Contract Labour Act 1970. Principal employer compliance fully managed."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if PF or ESI is deposited late?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late PF attracts 12% per annum interest under Section 7Q of EPF Act plus damages up to 100% of arrears under Section 14B. Late ESI attracts similar interest. Under new labour codes, penalties can reach Rs 3,00,000 with imprisonment for repeat violations. Patron's automated calendar ensures deposits before the 15th."
          }
        },
        {
          "@type": "Question",
          "name": "Can a CA firm manage payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron Accounting is a CA firm that manages payroll with professional oversight. Every payroll run is reviewed by a Chartered Accountant - ensuring TDS accuracy, CTC compliance, and statutory filing correctness. This is the key differentiator versus HR-tech-only providers. Quick Answers Kya Gurugram mein Professional Tax lagta hai? Nahi. Haryana mein Professional Tax nahi hai. Yeh employees ke liye Rs 2,500/year ki bachat hai compared to Maharashtra ya Karnataka. PF ka paisa kab tak jama karna hota hai? Har month ki 15 tarikh tak EPFO ke unified portal pe. Late hone pe 12% interest aur damages lagte hain. Naye labour codes se CTC structure badlega? Haan. Basic + DA kam se kam 50% of gross salary hona chahiye. Isse PF contribution badhega lekin retirement savings bhi badhegi."
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
                        Payroll Services in Gurugram: CA-Managed Salary and Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Employee master data, PAN/Aadhaar, bank account details, CTC breakup, attendance records</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Payroll services in Gurugram start from Rs 50/employee/month</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any business with 1 or more employees in Gurugram</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Payroll setup completed in 3-5 working days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Visit our Gurugram office or get started online</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20in%20Gurugram.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Payroll Services in Gurugram',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Are Payroll Services</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">In-House vs Outsourced</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Payroll Services in Gurugram Services at a Glance</strong></p>
                    <p>Payroll services cover end-to-end salary processing, statutory compliance (PF, ESI, TDS), and employee reporting for businesses in Gurugram. With over 8,000 registered companies and workforce spanning IT, manufacturing, BFSI, and logistics, Gurugram demands payroll accuracy backed by CA oversight. Patron manages payroll for businesses of all sizes - from 5-person startups on Sohna Road to 5,000-employee IT firms in DLF Cyber City.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>EPF & MP Act 1952, ESI Act 1948, Payment of Wages Act 1936, IT Act 1961</td></tr><tr><td>Applicable To</td><td>Every employer with 1+ employees in Gurugram</td></tr><tr><td>Timeline</td><td>Payroll setup in 3-5 working days; monthly processing by 28th</td></tr><tr><td>Cost Starting From</td><td>Rs 50/employee/month</td></tr><tr><td>Key Portals</td><td>EPFO unified portal | esic.gov.in | incometax.gov.in</td></tr><tr><td>Jurisdictional Offices</td><td>EPFO Regional Office Gurugram | ESIC Office Gurugram</td></tr><tr><td>State Rule</td><td>Haryana does NOT levy Professional Tax - zero PT deduction</td></tr></tbody></table></div></p>
                </div>
                <p>Gurugram is India's leading corporate hub after Mumbai. DLF Cyber City alone houses over 100,000 professionals. EPFO Regional Office Gurugram and ESIC Office Gurugram oversee provident fund and employee insurance compliance. Haryana does not levy Professional Tax, saving Rs 2,500/employee/year versus Maharashtra or Karnataka. Learn more about <a href="/payroll-services">Payroll Services across India</a>.</p>
                <p>Patron Accounting's Gurugram office provides CA-managed payroll bundled with <a href="/accounting-services">Accounting Services</a> - payroll journal entries auto-posted to your books. Also see <a href="/payroll-services-for-it-and-software-industry">Payroll for IT & Software Industry</a> for Cyber City-specific solutions.</p>
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
                <h2 class="section-title">What Are Payroll Services</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll services are the end-to-end management of employee compensation - including salary calculation, statutory deductions (PF, ESI, TDS), disbursement, and compliance reporting - governed by the EPF & MP Act 1952, ESI Act 1948, and Income Tax Act 1961. When outsourced to a CA firm, payroll includes professional oversight of every deduction, filing, and payment.</p><p>In Gurugram, payroll carries specific significance: IT/BPO companies in Cyber City process payroll with complex CTC structures, Manesar manufacturers handle factory worker overtime and contract labour, and BFSI firms on Golf Course Road manage expatriate dual-tax obligations. A CA-managed service ensures filings reach EPFO and ESIC Gurugram offices on time.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Payroll Services in Gurugram:</strong></p>
                    <p><strong>CTC:</strong> Cost to Company - total annual cost. Under Code on Wages 2019, basic + DA must be at least 50% of gross salary.</p><p><strong>EPF:</strong> Employee Provident Fund. 12% employer + 12% employee on basic + DA. Mandatory for 20+ employee establishments.</p><p><strong>ESI:</strong> Employee State Insurance. 3.25% employer + 0.75% employee for wages up to Rs 21,000/month. Mandatory for 10+ employees.</p><p><strong>TDS on Salary:</strong> Section 192 of IT Act. Monthly computation based on tax regime choice. Form 24Q quarterly. Form 16 annually by June 15.</p><p><strong>Professional Tax:</strong> Haryana does NOT levy PT - zero deduction for Gurugram employees. Saves Rs 2,500/employee/year vs Maharashtra/Karnataka.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payroll Services in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>EPF + ESI + TDS</span>
                        <strong>Payroll Services</strong>
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
            <h2 class="section-title">Who Needs Payroll Services in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>IT/BPO Companies (Cyber City, Udyog Vihar):</strong> Hundreds to thousands of employees with variable pay, ESOPs, shift allowances. Code on Wages 2019 requires basic + DA at least 50% of CTC - restructuring impacts PF and gratuity calculations.</p><p><strong>Manufacturers (Manesar IMT):</strong> Permanent employees plus contract labour. Contract Labour Act mandates principal employer ensures minimum wages and PF/ESI for contract workers. Haryana Labour Department inspections increasing.</p><p><strong>Startups (Sohna Road, Golf Course Extension):</strong> Start with 5-15 employees on spreadsheets. Becomes risky past 20 employees (mandatory EPF). Risk of misclassifying employees as contractors.</p><p><strong>BFSI/Fintech (Golf Course Road):</strong> Expatriate payroll with dual tax, DTAA, shadow payroll, and Form 16 for expats. Multi-currency processing.</p><p><strong>All Gurugram Employers:</strong> Haryana zero-PT advantage means no Professional Tax deduction or filing - direct payroll cost saving compared to Maharashtra, Karnataka, or West Bengal.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">8 Payroll Services Included in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Salary Processing</td><td>End-to-end calculation: basic, HRA, special allowance, variable pay, overtime. Salary credited by 28th-30th via NEFT/RTGS.</td></tr><tr><td>PF Registration and Monthly Compliance</td><td>EPFO registration for new employers, monthly ECR filing, contribution remittance to EPFO Regional Office Gurugram by 15th of every month.</td></tr><tr><td>ESI Registration and Contribution</td><td>ESIC registration, monthly calculation (3.25% employer + 0.75% employee), online filing via esic.gov.in for 10+ employee establishments.</td></tr><tr><td>TDS on Salary (Section 192)</td><td>Monthly TDS per employee tax regime (old vs new), investment declarations, HRA exemptions. Quarterly Form 24Q. Annual Form 16 by June 15.</td></tr><tr><td>CTC Structuring and Restructuring</td><td>Tax-efficient CTC compliant with Code on Wages 2019 (50% basic rule). Specific designs for IT/Cyber City and manufacturing/Manesar salary components.</td></tr><tr><td>Full and Final Settlement</td><td>Leave encashment, gratuity (Payment of Gratuity Act 1972 - 1 year for fixed-term), notice period adjustment, final TDS.</td></tr><tr><td>Payslip Generation</td><td>Monthly payslips with all statutory and non-statutory deductions. Password-protected digital delivery to employees.</td></tr><tr><td>Statutory Registers and Records</td><td>Wage registers, attendance records, PF/ESI contribution registers, muster rolls per Haryana Shops Act 1958 and applicable labour laws.</td></tr>

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
            <h2 class="section-title">6-Step Payroll Setup Process in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">No visit to EPFO Regional Office or ESIC Office Gurugram required - Patron's Gurugram office on Golf Course Extension Road handles all registrations, filings, and compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Payroll Diagnostic and Compliance Assessment</h3><p class="step-description">Patron's Gurugram CA team reviews your current payroll - Excel, Tally, or software. Verify EPFO and ESIC registrations with Gurugram regional offices. Check TAN for TDS. Assess CTC against Code on Wages 2019 (basic + DA at least 50% of gross). For Manesar manufacturers: Contract Labour Act review.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EPFO/ESIC verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CTC gap identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Employee Master Data Collection</h3><p class="step-description">Collect PAN, Aadhaar, UAN, ESIC IP number, bank account, CTC breakup, and tax regime selection. For new companies: handle establishment registration and UAN generation for each employee through EPFO Regional Office Gurugram.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data validated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UAN generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="12" width="30" height="14" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="40" y="22" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PAN</text><rect x="60" y="12" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="75" y="22" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Aadhaar</text><rect x="25" y="32" width="30" height="14" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><text x="40" y="42" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">UAN</text><rect x="60" y="32" width="30" height="14" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="75" y="42" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Bank</text></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">CTC Structuring and Configuration</h3><p class="step-description">Design compliant CTC: IT firms in Cyber City need variable pay, ESOP, internet allowance. Manesar factory payroll includes DA, overtime, shift allowance. Haryana zero PT means no PT deduction configured - direct saving vs multi-state setups.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CTC compliant</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zero PT configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CTC Structure</text><rect x="25" y="32" width="25" height="15" rx="2" fill="#fff" stroke="#25D366" stroke-width="0.8"/><text x="38" y="42" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Basic 50%</text><rect x="55" y="32" width="25" height="15" rx="2" fill="#fff" stroke="#F5A623" stroke-width="0.8"/><text x="68" y="42" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">PF 12%</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">PT = ZERO</text></svg></div><span class="illustration-label">Configured</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Monthly Payroll Processing</h3><p class="step-description">Process by 25th-28th: gross salary, EPF (12% basic+DA), ESI (0.75% for eligible), TDS (Section 192), loan/advance recoveries. Employer PF (12%) and ESI (3.25%) computed separately. Salary disbursed via NEFT. Multi-state PT handled for remote staff while Gurugram employees get zero PT.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Salary processed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deductions computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Payroll Run</text><rect x="20" y="30" width="80" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="43" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Gross - PF - ESI - TDS = Net</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Disbursed by 28th</text></svg></div><span class="illustration-label">Processed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Statutory Filing and Deposit</h3><p class="step-description">PF via EPFO unified portal by 15th. ESI by 15th. TDS by 7th via ITNS-281. Quarterly Form 24Q filed. All challans and acknowledgements archived. EPFO Regional Office Gurugram receives ECR filings for all Gurugram-registered establishments.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PF/ESI by 15th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS by 7th</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="12" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="20" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EPFO Unified Portal</text><text x="60" y="40" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ECR Filed &#10003;</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">TDS 7th | PF/ESI 15th | 24Q Qtr</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Reporting, Reconciliation and CA Review</h3><p class="step-description">Monthly reports: salary register, PF/ESI registers, TDS working, bank transfer summary. CA at Patron's Gurugram office reviews every payroll run for accuracy and compliance. Annual Form 16 for all employees by June 15, PF annual return, and bonus calculation under Payment of Bonus Act 1965.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">CA Reviewed</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Reports + Form 16</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Audit-Ready Archive</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Payroll Setup in Gurugram</h2>
            <div class="content-text">
                
                <ul><li>Company PAN and TAN - for TDS compliance under Section 192</li><li>EPFO Establishment Code - if registered with EPFO Regional Office Gurugram (new registrations handled by Patron)</li><li>ESIC Employer Code - if registered (new registrations for 10+ employee establishments handled)</li><li>Employee PAN and Aadhaar - for UAN generation, TDS computation, Form 16</li><li>Bank account details of all employees - for NEFT/RTGS salary disbursement</li><li>CTC breakup and offer letters - to configure salary structure in payroll system</li><li>Attendance and leave records - for working days calculation and leave deduction</li><li>Haryana Shops Act Registration Certificate - for commercial establishments under Haryana Shops and Commercial Establishments Act, 1958</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Tip for Manesar manufacturers:</strong> Keep your Factory Licence (Factories Act, 1948) and Contract Labour Licence (if using contract workers) accessible - these determine applicable labour law provisions for payroll.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common Payroll Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>CTC Restructuring Under New Labour Codes</td><td>Code on Wages 2019 (Nov 2025) mandates basic+DA at least 50% of gross. IT firms in Cyber City with 30-35% basic face 15-25% PF increase. Miscalculation common without CA guidance.</td><td>CA-led CTC restructuring compliant with 50% basic rule. Specific designs for IT vs manufacturing salary components.</td></tr><tr><td>Contract Labour Compliance (Manesar)</td><td>Principal employer liable if contractor fails to pay minimum wages or deposit PF/ESI. Surprise Haryana Labour Dept inspections. Penalties up to Rs 3,00,000 under new codes.</td><td>Manage payroll for permanent and contract workers. Minimum wage compliance, PF/ESI contributions, and statutory registers maintained.</td></tr><tr><td>Multi-State PT for Remote Employees</td><td>Gurugram HQ companies with remote staff in Maharashtra, Karnataka, West Bengal need state-specific PT registration and deduction while Gurugram staff gets zero PT.</td><td>Handle Haryana zero-PT plus other state PTs for remote staff. Multi-state compliance in single payroll run.</td></tr><tr><td>Expatriate Payroll (Golf Course Road MNCs)</td><td>Dual payroll: Indian TDS under Section 192 plus home-country tax equalisation. Shadow payroll, DTAA application, expat Form 16.</td><td>CA-level expertise for expatriate payroll computation including DTAA, shadow payroll, and cross-border compliance.</td></tr><tr><td>Startup Non-Compliance (Sohna Road)</td><td>Delayed EPFO/ESIC registration, employee vs contractor misclassification, wages below Haryana minimum. Becomes costly during funding due diligence. Retrospective PF/ESI at 12% interest + 100% damages.</td><td>Proactive EPFO/ESIC registration, proper classification, minimum wage compliance. Clean compliance record for investor due diligence.</td></tr>

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
            <h2 class="section-title">Payroll Services Fees in Gurugram - 2026 Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Payroll Processing</td><td>Rs 50-150/employee/month (based on headcount and complexity)</td></tr><tr><td>EPFO Registration (new)</td><td>Rs 2,500 one-time (establishment registration with EPFO Gurugram)</td></tr><tr><td>ESIC Registration (new)</td><td>Rs 2,500 one-time (for 10+ employee establishments)</td></tr><tr><td>CTC Restructuring (new labour codes)</td><td>Rs 5,000-15,000 one-time (depends on employee count)</td></tr><tr><td>Annual Form 16 Generation</td><td>Included in monthly retainer</td></tr><tr><td>Payroll Setup and Configuration</td><td>Rs 5,000-10,000 one-time (CTC design, system setup, employee master)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Payroll Services in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20in%20Gurugram.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Setup Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Payroll Diagnostic</td><td>1 working day</td></tr><tr><td>Employee Data Collection</td><td>1-2 working days</td></tr><tr><td>CTC Structuring</td><td>1-2 working days (Code on Wages 2019 compliant)</td></tr><tr><td>EPFO/ESIC Registration (if new)</td><td>5-7 working days (online via unified portal)</td></tr><tr><td>System Configuration + Test Run</td><td>1-2 working days</td></tr><tr><td>Go-Live</td><td>1 working day (first month processed)</td></tr><tr><td><strong>Ongoing Monthly Processing</strong></td><td><strong>Salary by 28th | PF/ESI by 15th | TDS by 7th</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Payroll compliance deadlines are fixed and non-negotiable. PF and ESI by the 15th of every month. TDS by the 7th. Form 24Q every quarter. Under new labour codes (Nov 2025), penalties up to Rs 3,00,000 with imprisonment for repeat violations. Late PF deposit attracts 12% interest plus damages up to 100% under Section 14B of EPF Act.</p>

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
            <h2 class="section-title">Why Choose Patron for Payroll Services in Gurugram</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">CA-Led Payroll (Not Just HR-Tech)</h3><p class="feature-text">Every payroll run reviewed by a Chartered Accountant. TDS calculations, CTC restructuring, and compliance filings carry professional liability and accuracy guarantees.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">Jurisdictional Familiarity</h3><p class="feature-text">Regular filings with EPFO Regional Office Gurugram, ESIC Office Gurugram, and Income Tax Department. Understand Haryana zero-PT advantage and optimise CTC accordingly.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Integrated Payroll + Accounting</h3><p class="feature-text">Payroll journal entries auto-posted to your books (Zoho Books, Tally). Eliminates reconciliation gaps between HR and finance. One engagement for both.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Golf Course Extension Road Office</h3><p class="feature-text">Accessible to Cyber City, Udyog Vihar, Sohna Road, and Manesar businesses. In-person payroll consultations, employee data handover, and annual compliance review.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Trusted by Hyundai, Asian Paints, Bridgestone. Offices in Pune, Mumbai, Delhi, Gurugram. Patron's payroll team handles 200+ employees without a single error month on month.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Outsourced Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>In-House Payroll</th><th>Outsourced to Patron</th></tr></thead>
                    <tbody>
                        <tr><td>Compliance Risk</td><td>High - HR team may miss regulatory updates</td><td>Low - CA monitors all compliance changes</td></tr><tr><td>Cost</td><td>Rs 30,000-50,000/month for dedicated staff</td><td>From Rs 50/employee/month - scales with headcount</td></tr><tr><td>Error Rate</td><td>5-8% in manual/Excel payroll (industry avg)</td><td>&lt; 0.1% with CA-reviewed automated processing</td></tr><tr><td>Statutory Filings</td><td>Often delayed - penalties compound at 12% p.a.</td><td>Filed on time every month - zero penalty exposure</td></tr><tr><td>Audit Readiness</td><td>Records scattered across systems</td><td>Complete digital archive - audit-ready on demand</td></tr><tr><td>Scalability</td><td>Breaks at 50+ employees</td><td>Handles 5 to 5,000+ without disruption</td></tr>

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
            <h2 class="section-title">Related Compliance and Business Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/payroll-services">Payroll Services in India</a> - Our national payroll service</li><li><a href="/payroll-processing-and-management-services">Payroll Processing & Management</a> - Detailed payroll processing service</li><li><a href="/payroll-services-for-it-and-software-industry">Payroll for IT & Software</a> - Cyber City-specific payroll solutions</li><li><a href="/gst-registration">GST Registration</a> - Tax compliance for Gurugram businesses</li><li><a href="/income-tax-return">Income Tax Return Filing</a> - Employee and employer ITR filing</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Form 24Q and TDS compliance</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Payroll</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul><li>EPF & MP Act, 1952 - 12% employer + 12% employee on basic + DA. Mandatory for 20+ employees.</li><li>ESI Act, 1948 - 3.25% employer + 0.75% employee for wages up to Rs 21,000/month. 10+ employees.</li><li>Payment of Wages Act, 1936 - salary by 7th (&lt; 1,000 employees) or 10th (1,000+)</li><li>Payment of Bonus Act, 1965 - 8.33% to 20% for 20+ employee establishments</li><li>Payment of Gratuity Act, 1972 - after 5 years (1 year for fixed-term under new codes)</li><li>IT Act 1961 Section 192 - TDS on salary. Form 24Q quarterly. Form 16 annually.</li><li>Code on Wages, 2019 - basic + DA at least 50% of gross. Active Nov 2025.</li><li>Haryana Shops Act, 1958 - working hours, leave, holidays for commercial establishments</li></ul><p><strong>Penalties:</strong> Late PF: 12% interest + 100% damages. Late ESI: 12% interest. Late TDS: 1.5%/month + Rs 1,00,000/day (234E). New codes: up to Rs 3,00,000.</p><p><strong>Key Portal:</strong> <a href="https://unifiedportal-mem.epfindia.gov.in" target="_blank" rel="noopener">EPFO Unified Portal</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Payroll Services in Gurugram</h2>
                    <p class="faq-expanded__lead">Answers to common questions about payroll services in Gurugram. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Payroll Services in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does payroll outsourcing cost in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Patron starts at Rs 50 per employee per month including salary processing, PF/ESI computation, TDS, payslips, and monthly statutory filings. One-time setup Rs 5,000-10,000. EPFO/ESIC registration Rs 2,500 each if new.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Does Haryana charge Professional Tax?</h3>
                        <div class="faq-expanded__a"><p>No. Haryana does not levy Professional Tax. This saves Rs 2,500 per employee per year compared to Maharashtra or Karnataka. Gurugram employees have zero PT deduction, and employers have no PT registration or filing obligation. Patron's CTC structuring reflects this advantage.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which PF and ESI office handles Gurugram businesses?</h3>
                        <div class="faq-expanded__a"><p>EPFO Regional Office Gurugram handles provident fund. ESIC Office Gurugram manages employee state insurance. Patron files all monthly ECR returns and ESI contributions with these offices. Your establishment code identifies the Gurugram jurisdiction.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does payroll setup take?</h3>
                        <div class="faq-expanded__a"><p>3-5 working days for complete setup: employee data collection, CTC structuring, system configuration, and test run. If new EPFO/ESIC registration needed, add 5-7 working days. First live payroll within 2 weeks of engagement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are minimum wages in Haryana 2026?</h3>
                        <div class="faq-expanded__a"><p>Haryana minimum wages are notified by the state government and vary by category: unskilled, semi-skilled, skilled, and highly skilled. The rates are revised periodically under the Punjab Minimum Wages Rules adopted by Haryana. Patron ensures payroll complies with the latest Haryana notification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can Patron handle contract labour payroll for Manesar?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron manages payroll for permanent employees and contract labour for Manesar IMT manufacturers. We ensure minimum wage compliance per Haryana notification, PF/ESI contributions for contract workers, and maintain registers under the Contract Labour Act 1970. Principal employer compliance fully managed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if PF or ESI is deposited late?</h3>
                        <div class="faq-expanded__a"><p>Late PF attracts 12% per annum interest under Section 7Q of EPF Act plus damages up to 100% of arrears under Section 14B. Late ESI attracts similar interest. Under new labour codes, penalties can reach Rs 3,00,000 with imprisonment for repeat violations. Patron's automated calendar ensures deposits before the 15th.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a CA firm manage payroll?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron Accounting is a CA firm that manages payroll with professional oversight. Every payroll run is reviewed by a Chartered Accountant - ensuring TDS accuracy, CTC compliance, and statutory filing correctness. This is the key differentiator versus HR-tech-only providers.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Kya Gurugram mein Professional Tax lagta hai?</strong> Nahi. Haryana mein Professional Tax nahi hai. Yeh employees ke liye Rs 2,500/year ki bachat hai compared to Maharashtra ya Karnataka.</p><p><strong>PF ka paisa kab tak jama karna hota hai?</strong> Har month ki 15 tarikh tak EPFO ke unified portal pe. Late hone pe 12% interest aur damages lagte hain.</p><p><strong>Naye labour codes se CTC structure badlega?</strong> Haan. Basic + DA kam se kam 50% of gross salary hona chahiye. Isse PF contribution badhega lekin retirement savings bhi badhegi.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Deadlines Are Non-Negotiable</h2>
            <div class="content-text">
                
                <p>PF and ESI by the 15th. TDS by the 7th. Form 24Q every quarter. Under new labour codes (Nov 2025), penalties up to Rs 3,00,000 with imprisonment for repeat offences. Late PF attracts 12% interest plus 100% damages. If your payroll runs on spreadsheets without professional oversight, the risk compounds every month.</p><p><strong>Set up CA-managed payroll now. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20in%20Gurugram." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get CA-Managed Payroll for Your Gurugram Business</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Payroll in Gurugram requires precision, compliance knowledge, and consistent execution. From IT companies in Cyber City processing thousands to startups on Sohna Road setting up their first PF registration, every business needs reliable payroll management.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road delivers CA-managed payroll covering salary processing, PF/ESI/TDS compliance, CTC restructuring under new labour codes, and complete statutory reporting. 15+ years, 10,000+ businesses. Your payroll, managed by a Chartered Accountant.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20in%20Gurugram.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Services%20Gurugram&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20payroll%20services%20in%20Gurugram.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers payroll services in 8 major cities. Select your city below.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/payroll-services/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/payroll-services/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/payroll-services/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end business compliance</div><div class="pa-cross-grid"><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/llp-incorporation/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR Filing</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect minimum wage revisions, PF/ESI rate changes, labour code implementations, TDS slab updates, and Haryana labour department notifications. The next scheduled review is June 2026.</p>
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
