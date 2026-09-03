
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Trading Industry Payroll Services - PF, ESIC & TDS India</title>
    <meta name="description" content="Patron Accounting offers payroll services for trading companies in India starting at Rs 1,500 per month. PF, ESI, TDS, PT compliance with zero errors.">
    <link rel="canonical" href="/payroll-services-for-trading-industry">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trading Industry Payroll Services - PF, ESIC & TDS India">
    <meta property="og:description" content="Patron Accounting offers payroll services for trading companies in India starting at Rs 1,500 per month. PF, ESI, TDS, PT compliance with zero errors.">
    <meta property="og:url" content="/payroll-services-for-trading-industry">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trading Industry Payroll Services - PF, ESIC & TDS India">
    <meta name="twitter:description" content="Patron Accounting offers payroll services for trading companies in India starting at Rs 1,500 per month. PF, ESI, TDS, PT compliance with zero errors.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Trading Payroll in India | Commission & Multi-Branch Payroll",
          "description": "Learn how payroll for trading companies handles sales commissions, branch-wise staff, statutory compliance & variable pay structures.",
          "url": "https://www.patronaccounting.com/payroll-services-for-trading-industry",
          "serviceType": "Trading Payroll in India | Commission & Multi-Branch Payroll",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
              "name": "Trading Payroll in India | Commission & Multi-Branch Payroll",
              "item": "https://www.patronaccounting.com/payroll-services-for-trading-industry"
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
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
                        Payroll Services for Trading Companies in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> Salary computation, payslip generation, and bank disbursement for wholesale, retail, and import-export trading businesses</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Compliance:</span> Complete statutory: EPF (12%), ESI (3.25% + 0.75%), TDS under Section 192, state-wise Professional Tax, and Shops Act</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Multi-State:</span> Multi-state payroll for trading companies with godowns, warehouses, and outlets across different Shop and Establishment Act jurisdictions</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> From Rs 1,500/month (up to 10 employees). 100+ trading companies served. Dedicated CA-led payroll team.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">100+ trading companies served across wholesale, retail, and import-export sectors with 10,000+ payslips processed monthly</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Trading%20Payroll%20Help&body=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Trading%20Industry%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Trading%20Industry%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Payroll for Trading Companies',
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
    'ctaText'    => 'Expert payroll for trading companies - salary processing, PF/ESI/TDS compliance, Form 16, and multi-state Shops Act management.',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Needs It</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">8-Step Process</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Pricing</a><a class="toc-btn" href="#timeline-section">Timelines</a><a class="toc-btn" href="#benefits-section">Benefits</a><a class="toc-btn" href="#comparison-section">DIY vs Professional</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll for Trading Companies - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Payroll for Trading Companies Services at a Glance</strong></p>
                    <p>Payroll for trading companies covers salary processing, PF (12%), ESI (3.25% employer + 0.75% employee), TDS under Section 192, Professional Tax, and Shops Act compliance. Starting at Rs 1,500/month. Payroll processed by the 28th each month. Zero-error statutory filing with a dedicated CA team.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Service</td><td>Payroll processing and compliance for trading companies</td></tr><tr><td>Covers</td><td>PF, ESI, TDS, PT, LWF, Bonus, Gratuity, Shops Act compliance</td></tr><tr><td>Starting Price</td><td>Rs 1,500 per month (up to 10 employees)</td></tr><tr><td>Timeline</td><td>Payroll processed by 28th of each month</td></tr><tr><td>Key Benefit</td><td>Zero-error statutory filing with dedicated CA team</td></tr><tr><td>Applicable Laws</td><td>EPF Act 1952, ESI Act 1948, Payment of Wages Act 1936, IT Act 1961, state Shop Acts</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>Trading companies in India - wholesale distribution, retail operations, or import-export - face unique payroll challenges. From managing variable workforces across multiple godowns and branches to complying with state-specific Shops and Establishment Acts, payroll in the trading sector requires specialised attention. Errors in PF, ESI, or TDS filing can attract penalties of up to Rs 1 lakh or more.</p>
                <p>Patron Accounting's payroll services simplify this complexity. Our CA-led team handles everything from CTC structuring and salary computation to statutory filing and employee self-service - ensuring 100% compliance with the Payment of Wages Act 1936, Minimum Wages Act 1948, EPF Act 1952, ESI Act 1948, and applicable state Shop Acts. Offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is Payroll for Trading Companies?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll for trading companies is the process of calculating salaries, deducting statutory contributions such as PF, ESI, TDS, and Professional Tax, and disbursing net pay to employees of wholesale, retail, and import-export businesses while maintaining compliance with applicable central and state labour laws.</p><p>Trading companies must comply with the <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF Act 1952</a> (20+ employees), <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESI Act 1948</a> (10+ employees earning up to Rs 21,000), Income Tax Act 1961 (TDS on salary under Section 192), and state-specific Shops and Establishment Acts.</p><p>The employer must process salary by the 28th, deposit PF by the 15th, TDS by the 7th, and ESI by the 15th of the following month.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Payroll for Trading Companies:</strong></p>
                    <p><strong>CTC (Cost to Company)</strong> - Total annual cost including salary, PF, ESI, bonus, and gratuity borne by the employer.</p><p><strong>ECR (Electronic Challan cum Return)</strong> - Monthly PF payment file uploaded to the EPFO portal with employee-wise contribution details.</p><p><strong>Gross Salary</strong> - Monthly salary before statutory deductions (PF, ESI, TDS, PT).</p><p><strong>Net Pay (Take-Home)</strong> - Amount credited to employee bank account after all deductions.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="25" width="140" height="85" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="140" height="22" rx="8" fill="#14365F"/><text x="100" y="40" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAYROLL</text><rect x="45" y="55" width="40" height="16" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="65" y="66" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PF 12%</text><rect x="95" y="55" width="40" height="16" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="115" y="66" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ESI 4%</text><rect x="55" y="80" width="90" height="16" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="91" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TDS + PT + SHOP ACT</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TRADING</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">100+</text><text x="100" y="168" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trading Company Payroll</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>EPF + ESI + TDS</span>
                        <strong>Trading Payroll</strong>
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
            <h2 class="section-title">Who Needs Payroll Services for Trading?</h2>
            <div class="content-text">
                
                <ul><li><strong>Wholesale Distributors:</strong> Godown staff, delivery personnel, and sales teams across multiple locations</li><li><strong>Retail Trading Businesses:</strong> Shops, showrooms complying with state-wise Shops and Establishment Acts</li><li><strong>Import-Export Trading Firms:</strong> Employees in customs, logistics, and documentation departments</li><li><strong>20+ Employee Companies:</strong> EPF registration mandatory under Section 1(3) of EPF Act 1952</li><li><strong>10+ Employee Companies:</strong> ESI mandatory for employees earning up to Rs 21,000/month under ESI Act 1948</li><li><strong>Any Trading Business:</strong> TDS on salary exceeding basic exemption limit under Section 192 of IT Act 1961</li></ul><p><strong>Key:</strong> Even a single-employee trading shop must register under the applicable state Shop and Establishment Act, typically within 30 days of commencement.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Payroll Services for Trading Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Salary Processing</td><td>CTC structuring, gross-to-net computation, payslip generation, and bank file preparation for salary disbursement by 28th each month</td></tr><tr><td>PF Compliance</td><td><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF</a> registration, monthly ECR generation, challan payment, annual return filing, and UAN activation for all employees</td></tr><tr><td>ESI Compliance</td><td><a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESIC</a> registration, monthly contribution challan, half-yearly return filing, and IP number generation</td></tr><tr><td>TDS on Salary</td><td>Section 192 TDS computation (old/new regime), quarterly Form 24Q filing, and annual Form 16 generation</td></tr><tr><td>Professional Tax and LWF</td><td>State-wise PT registration, monthly/half-yearly deduction and payment, and Labour Welfare Fund contribution management</td></tr><tr><td>Shops and Establishment Act</td><td>Shop Act registration, renewal, attendance registers, leave records, and wage registers as required under state Acts</td></tr>

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
            <h2 class="section-title">8-Step Payroll Process for Trading Companies</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our step-by-step payroll procedure ensures accuracy and statutory compliance at every stage for trading businesses.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Employee Onboarding Data</h3><p class="step-description">Collect PAN, Aadhaar, bank details, UAN, ESIC IP number, and tax investment declarations from each employee under Section 192(2D) of the Income Tax Act 1961.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN/Aadhaar collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> UAN/ESIC verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="40" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="30" y="42" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text><text x="60" y="47" font-size="4" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">AADHAAR</text><text x="90" y="42" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BANK</text></svg></div><span class="illustration-label">Data Collected</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">CTC Structuring</h3><p class="step-description">Design CTC with basic salary (minimum 50% per Code on Wages 2019), HRA, special allowance, PF employer contribution, ESI employer, bonus provision, and gratuity provision.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CTC designed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliant structure</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">CTC</text><text x="60" y="40" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">BASIC + HRA + PF</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">ESI + BONUS</text></svg></div><span class="illustration-label">CTC Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Monthly Input Collection</h3><p class="step-description">Collect attendance data, leave records, overtime hours, incentives, reimbursements, and salary revisions by the 20th of each month from all trading locations.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Attendance compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> By 20th each month</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="28" width="50" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="35" y="40" width="50" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="35" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ATTENDANCE</text><text x="60" y="47" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LEAVE</text></svg></div><span class="illustration-label">Inputs Collected</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Gross-to-Net Computation</h3><p class="step-description">Calculate gross salary, apply PF (employee 12% of basic+DA), ESI (0.75% of gross up to Rs 21,000), TDS per applicable slab, Professional Tax per state schedule. Arrive at net pay.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All deductions applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Net pay calculated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GROSS</text><text x="60" y="48" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">- PF ESI TDS</text><text x="60" y="64" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">= NET PAY</text></svg></div><span class="illustration-label">Salary Computed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Employer Contributions</h3><p class="step-description">Calculate employer PF (12% split 3.67% EPF + 8.33% EPS capped at Rs 1,250/month), employer ESI (3.25% of gross), and EDLI (0.50% of basic).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Employer share computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EPS/EDLI calculated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EPF: 3.67% + 8.33%</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">ESI: 3.25%</text><text x="60" y="64" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">EDLI: 0.50%</text></svg></div><span class="illustration-label">Contributions Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Approval and Disbursement</h3><p class="step-description">Share payroll summary for employer approval. Generate bank file and process salary credits by the 28th as mandated under Section 5 of the Payment of Wages Act 1936.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Employer approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Salary credited by 28th</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="42" font-size="8" fill="#25D366" font-weight="800" text-anchor="middle" font-family="Arial">Rs</text><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BY 28TH</text></svg></div><span class="illustration-label">Salaries Paid</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Statutory Filing</h3><p class="step-description">File PF ECR by 15th, pay ESI by 15th, deposit TDS by 7th of the following month. Pay Professional Tax per state deadline. File quarterly Form 24Q.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All challans filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deadlines met</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="40" y="32" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PF: 15th</text><text x="40" y="48" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">ESI: 15th</text><text x="85" y="32" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TDS: 7th</text><text x="85" y="48" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">PT: state</text></svg></div><span class="illustration-label">Compliance Done</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Reporting and Reconciliation</h3><p class="step-description">Generate monthly MIS reports, reconcile PF and ESI challans with bank statements, prepare quarterly Form 24Q, and maintain digital records for audit readiness.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MIS generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audit-ready records</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MIS READY</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Payroll Setup</h2>
            <div class="content-text">
                
                <ul><li><strong>Company PAN card and TAN</strong> (Tax Deduction Account Number)</li><li><strong>GST registration certificate</strong></li><li><strong>Shop and Establishment registration</strong></li><li><strong>EPF establishment code</strong> (if already registered with EPFO)</li><li><strong>ESIC employer code</strong> (if already registered)</li><li><strong>Employee PAN, Aadhaar, and bank details</strong></li><li><strong>Existing salary structure or offer letters</strong></li><li><strong>Attendance and leave records</strong></li><li><strong>Previous month payroll data</strong> (if transitioning)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Payroll Challenges for Trading Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Location Compliance</td><td>Godowns, warehouses, and outlets across states face different PT rates, LWF rules, and Shop Act regulations</td><td>Patron maintains state-wise compliance calendars and applies location-specific deduction rules for each employee based on place of work</td></tr><tr><td>Variable and Seasonal Workforce</td><td>Temporary staff during festivals and financial year-end adds PF/ESI complexity for short-term employees</td><td>Our system supports onboarding and exit within the same month including pro-rata calculations and F&F settlement</td></tr><tr><td>Frequent Regulatory Changes</td><td>EPF wage ceiling revision (currently Rs 15,000, SC directed review Jan 2026), ESI threshold changes, TDS slab updates</td><td>Our CA team monitors all updates from EPFO, ESIC, CBDT, and state labour departments and applies changes proactively</td></tr><tr><td>Employee Misclassification</td><td>Classifying employees as contractors to avoid PF/ESI triggers retrospective penalties, 12% interest, and prosecution</td><td>We audit workforce classification and ensure correct categorisation from day one, reducing legal exposure</td></tr>

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
            <h2 class="section-title">Payroll Service Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Basic (Up to 10 employees)</td><td>Starting from INR 1,500/month</td></tr><tr><td>Standard (11 to 50 employees)</td><td>Rs 100 per employee per month</td></tr><tr><td>Premium (51 to 200 employees)</td><td>Rs 75 per employee per month</td></tr><tr><td>Enterprise (200+ employees)</td><td>Custom quote based on complexity</td></tr><tr><td>One-Time Setup Fee</td><td>Rs 2,000 (CTC structuring, configuration, onboarding)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Payroll for Trading Companies consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Trading%20Industry%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Processing Timelines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Initial Payroll Setup</td><td>3-5 working days</td></tr><tr><td>Monthly Payroll Processing</td><td>By 28th of each month</td></tr><tr><td>PF ECR Filing</td><td>By 15th of following month</td></tr><tr><td>ESI Challan Payment</td><td>By 15th of following month</td></tr><tr><td>TDS Deposit</td><td>By 7th of following month</td></tr><tr><td>Form 24Q Quarterly Filing</td><td>Within 15 days of quarter-end</td></tr><tr><td>Form 16 Annual Issuance</td><td>By 15th June each year</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical deadlines:</strong> PF by 15th (12% interest + 100% damages for delay). TDS by 7th (1.5% interest/month + Section 234E penalty Rs 200/day). ESI by 15th (12% interest + 25% damages). Non-registration under Shop Act: fines up to Rs 25,000 depending on state.</p>

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
            <h2 class="section-title">Benefits of Professional Payroll Services</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Zero-Error Compliance</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">CA-led team ensures 100% accuracy in PF, ESI, TDS, and PT calculations, eliminating penalty risk across all trading locations</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Cost Savings</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Outsourcing saves 40-60% compared to maintaining in-house payroll team, software licences, and compliance staff</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Time Savings</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Business owners and HR teams save 20-30 hours per month by delegating payroll computation and statutory filing</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Regulatory Updates</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Proactive updates on EPF rate changes, ESI threshold revisions, TDS slab modifications, and Shop Act amendments applied automatically</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Audit Readiness</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Properly maintained wage registers, attendance records, and statutory challans ensure your trading company is inspection-ready at all times</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Trading Companies Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>100+ trading companies</strong> served across wholesale, retail, and import-export sectors. <strong>10,000+ payslips processed monthly</strong>. Every payroll is reviewed by a qualified Chartered Accountant. Clients include wholesale FMCG distributors, retail chain operators, agricultural commodity traders, electronics trading firms, and import-export houses across Maharashtra, Karnataka, Delhi-NCR, and Tamil Nadu.</p><p>Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Payroll vs Professional Service</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY / In-House</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Setup Cost</td><td>Rs 50,000-2,00,000 (software + training)</td><td>Rs 2,000 one-time setup</td></tr><tr><td>Monthly Cost (50 employees)</td><td>Rs 25,000-40,000 (staff + software)</td><td>Rs 5,000 (Rs 100/employee)</td></tr><tr><td>Error Risk</td><td>High - manual calculations</td><td>Near zero - automated with CA review</td></tr><tr><td>Compliance Expertise</td><td>Limited - depends on staff knowledge</td><td>Deep - CA and CS with multi-state expertise</td></tr><tr><td>Regulatory Updates</td><td>Self-monitored - risk of missing changes</td><td>Proactive - applied automatically each cycle</td></tr><tr><td>Audit Readiness</td><td>Requires manual record-keeping</td><td>Always audit-ready with digital records</td></tr>

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
            <h2 class="section-title">Related Services for Trading Companies</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-returns">GST Filing</a> - Monthly GSTR-1/GSTR-3B with ITC reconciliation</li><li><a href="/income-tax-return">Income Tax Return</a> - ITR for proprietors, partners, and directors</li><li><a href="/private-limited-company-registration">Company Registration</a> - Pvt Ltd, LLP, OPC for new trading ventures</li><li><a href="/accounting-services">Accounting and Bookkeeping</a> - Monthly books and financial statements</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Quarterly TDS including Section 194C, 194H, 194J</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Regulatory Framework and Penalties</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Regulation</th><th>Key Requirement</th></tr></thead><tbody><tr><td><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF Act 1952</a></td><td>Mandatory for 20+ employees. Both employer and employee contribute 12% of basic + DA. ECR by 15th.</td></tr><tr><td><a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESI Act 1948</a></td><td>10+ employees earning up to Rs 21,000/month. Employer 3.25%, Employee 0.75%. By 15th.</td></tr><tr><td><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">IT Act 1961 (Sec 192)</a></td><td>TDS on salary exceeding exemption limit. New regime default from AY 2024-25. TDS by 7th.</td></tr><tr><td>Payment of Wages Act 1936</td><td>Wages by 7th (under 1,000 employees) or 10th (1,000+) of following month.</td></tr><tr><td>Shops and Establishment Act</td><td>State-specific. Working hours, leave, overtime, records. Register within 30 days.</td></tr></tbody></table></div><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Violation</th><th>Penalty</th></tr></thead><tbody><tr><td>Late PF (Sec 14B)</td><td>12% interest + damages up to 100% of arrears</td></tr><tr><td>Non-deduction TDS (Sec 201)</td><td>1% interest/month + penalty equal to TDS amount</td></tr><tr><td>Late ESI</td><td>12% interest + damages up to 25%</td></tr><tr><td>Non-registration Shop Act</td><td>Fine up to Rs 25,000 (varies by state)</td></tr></tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Trading Company Payroll</h2>
                    <p class="faq-expanded__lead">Expert answers about PF, ESI, TDS, and payroll compliance for wholesale, retail, and import-export trading businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Payroll for Trading Companies',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is PF mandatory for trading companies in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 1(3) of the EPF Act 1952, PF is mandatory for trading establishments with 20 or more employees. Both employer and employee contribute 12% of basic salary plus DA. The employer's 12% is split into 3.67% towards EPF and 8.33% towards EPS (capped at Rs 1,250/month). Even establishments with fewer than 20 can voluntarily register.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Do retail and wholesale trading shops need ESI registration?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under the ESI Act 1948, any trading establishment with 10 or more employees earning up to Rs 21,000/month must register with ESIC. Employer contributes 3.25% and employee 0.75% of gross wages. ESI provides medical, sickness, maternity, and employment injury benefits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does payroll outsourcing cost for a trading company?</h3>
                        <div class="faq-expanded__a"><p>At Patron Accounting: Rs 1,500/month for up to 10 employees, Rs 100/employee for 11-50, Rs 75/employee for 51-200. Includes salary processing, PF, ESI, TDS, PT, payslips, and Form 16. One-time setup fee of Rs 2,000. Industry range: Rs 300-2,500 per employee per month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the deadline for PF contributions?</h3>
                        <div class="faq-expanded__a"><p>PF must be deposited by the 15th of the month following the wage month. Late payment attracts interest at 12% per annum under Section 7Q plus damages ranging from 5% to 25% of arrears under Section 14B of the EPF Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Which Shops and Establishment Act applies?</h3>
                        <div class="faq-expanded__a"><p>Each state has its own Act. Maharashtra uses the 2017 Act, Delhi uses the 1954 Act. Trading companies must register within 30 days of commencing operations and comply with working hours, weekly holidays, overtime, and record maintenance provisions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a trading company deduct PF on salary above Rs 15,000?</h3>
                        <div class="faq-expanded__a"><p>Yes. While PF is mandatory on basic+DA up to Rs 15,000, employer and employee can jointly agree to contribute on actual salary above this under Para 26(6) of the EPF Scheme. The Supreme Court has directed EPFO to finalise a decision on increasing the wage ceiling (January 2026).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is payroll for trading companies?</strong> Processing salaries, deducting PF (12%), ESI (3.25%+0.75%), TDS under Section 192, and Professional Tax for employees of wholesale, retail, and import-export businesses.</p><p><strong>Is payroll compliance necessary for small shops?</strong> Yes. Even one employee requires Shop Act registration. 20+ employees triggers PF. 10+ employees under Rs 21,000 triggers ESI.</p><p><strong>Cost?</strong> From Rs 1,500/month for up to 10 employees at Patron Accounting, including all statutory filings.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Start Compliant Payroll for Your Trading Company</h2>
            <div class="content-text">
                
                <p>PF due by 15th (12% interest + 100% damages for delay). TDS due by 7th (1.5% interest/month + Rs 200/day penalty). ESI due by 15th (12% interest + 25% damages). Non-registration under Shop Act: fines up to Rs 25,000. Employee misclassification triggers retrospective penalties. Do not wait for a notice.</p><p><strong>Start today.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Trading%20Industry%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free payroll consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Trading Company Payroll</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Payroll for trading companies is about ensuring complete statutory compliance with PF, ESI, TDS, Professional Tax, and Shops Act requirements. With state-wise variations, multi-location workforces, and changing thresholds, trading businesses need a specialised payroll partner.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting serves 100+ trading companies with zero-error payroll. From Rs 1,500/month. CA-led team, multi-state expertise, and offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Trading%20Industry%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Trading%20Company%20Payroll&body=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Trading%20Industry%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trading Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides payroll services for trading companies in major cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">Payroll for Trading by City</p><p class="pa-block-sub">PF, ESI, TDS, and Shop Act compliance</p><div class="pa-city-grid"><a href="/payroll-services-for-trading-industry/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-trading-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-trading-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/payroll-services-for-trading-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related Trading Company Services</p><p class="pa-block-sub">Complete business compliance</p><div class="pa-cross-grid"><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Filing</div><div class="pa-card-sub">Trading</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ITR Filing</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Bookkeeping</div><div class="pa-card-sub">Monthly</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">TDS Filing</div><div class="pa-card-sub">Quarterly</div></div></a><a href="/esic-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually after Union Budget and EPF/ESI rate announcements. Next review: April 2026.</p>
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
