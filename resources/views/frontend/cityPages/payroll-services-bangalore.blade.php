
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Payroll Services in Bangalore – Salary, PF, ESI &amp; TDS</title>
    <meta name="description" content="CA-assisted payroll services in Bangalore. PF, ESI, PT compliance for IT and startup firms. Serving Electronic City, Whitefield, Manyata businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services/bangalore">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Payroll Services in Bangalore – Salary, PF, ESI &amp; TDS">
    <meta property="og:description" content="CA-assisted payroll services in Bangalore. PF, ESI, PT compliance for IT and startup firms. Serving Electronic City, Whitefield, Manyata businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services/bangalore">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payroll Services in Bangalore – Salary, PF, ESI &amp; TDS">
    <meta name="twitter:description" content="CA-assisted payroll services in Bangalore. PF, ESI, PT compliance for IT and startup firms. Serving Electronic City, Whitefield, Manyata businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Payroll Services in Bangalore",
          "description": "CA-assisted payroll services in Bangalore. PF, ESI, PT compliance for IT and startup firms. Serving Electronic City, Whitefield, Manyata businesses. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/payroll-services/bangalore",
          "serviceType": "Payroll Services in Bangalore",
          "areaServed": {
            "@type": "City",
            "name": "Bangalore"
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
            "url": "https://www.patronaccounting.com/payroll-services/bangalore",
            "price": "1500"
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
              "name": "Payroll Services",
              "item": "https://www.patronaccounting.com/payroll-services"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Payroll Services in Bangalore",
              "item": "https://www.patronaccounting.com/payroll-services/bangalore"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which office handles payroll compliance in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Regional Provident Fund Commissioner at the EPFO Regional Office Bangalore handles PF compliance. The Commercial Taxes Department Karnataka manages Professional Tax through the e-Prerana portal. ESI matters are handled by the ESI Regional Office Bangalore. Patron Accounting manages all filings with these authorities on behalf of Bangalore clients."
              }
            },
            {
              "@type": "Question",
              "name": "Can I get payroll services done online from Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Patron Accounting delivers payroll services to Bangalore businesses fully online. All payroll processing statutory filings including PF via EPFO Unified Portal ESI via esic.gov.in and PT via e-Prerana and payslip delivery happen digitally. Your dedicated CA manages your Bangalore payroll without any in-person visits."
              }
            },
            {
              "@type": "Question",
              "name": "What is the payroll service fee in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Payroll service fees start from Rs 1500 per month for companies with up to 10 employees. For larger teams fees scale based on employee count and compliance complexity. This includes salary processing Karnataka PT deduction PF and ESI challan preparation and payslip generation."
              }
            },
            {
              "@type": "Question",
              "name": "How long does payroll setup take in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Initial payroll setup takes 3 to 5 working days from the date all company documents including PAN TAN PF registration ESI code and Karnataka PTRC along with employee data are submitted. Monthly payroll is processed within 2 to 3 working days of receiving attendance inputs."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        Payroll Services in Bangalore: Accurate Salaries, Full Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">15 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, TAN, PF/ESI registration certificate, salary structure</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 1,500/month for up to 10 employees</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All businesses registered in Bangalore with 1 or more employees</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Payroll setup in 3-5 working days; monthly processing by 28th of each month</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20in%20Bangalore%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Payroll Services in Bangalore',
                                            'city'     => 'Bangalore',
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
    'ctaText'    => 'Get expert CA-assisted payroll services in Bangalore. From salary processing to statutory compliance, we handle everything.',
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
            <a href="#overview-section" class="toc-pill">Overview</a><a href="#what-section" class="toc-pill">What Is Payroll</a><a href="#who-section" class="toc-pill">Who Needs It</a><a href="#services-section" class="toc-pill">Services</a><a href="#procedure-section" class="toc-pill">6-Step Process</a><a href="#documents-section" class="toc-pill">Documents</a><a href="#challenges-section" class="toc-pill">Challenges</a><a href="#fees-section" class="toc-pill">Fees</a><a href="#timeline-section" class="toc-pill">Timeline</a><a href="#benefits-section" class="toc-pill">Why Patron</a><a href="#comparison-section" class="toc-pill">In-House vs Outsourced</a><a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services in Bangalore: Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Payroll Services in Bangalore Services at a Glance</strong></p>
                    <p>Payroll services in Bangalore cover end-to-end salary processing, PF/ESI filing, Karnataka Professional Tax deduction, TDS computation, and statutory return submission for businesses across Electronic City, Whitefield, and Manyata Tech Park. Outsourcing payroll to a CA firm reduces compliance risk and frees your HR team to focus on hiring and retention.</p>
                </div>
                <p>Bangalore is India's technology capital, home to over 67,000 IT companies, 35,000+ startups, and thousands of manufacturing units spread across Electronic City, Whitefield, Manyata Tech Park, and Peenya Industrial Area. For every business employing even a single person, payroll compliance is a legal obligation.</p>
                <div class="table-responsive-wrapper" style="margin:20px 0;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
                    <tr><td>Governing Acts</td><td>EPF Act 1952, ESI Act 1948, Karnataka PT Act 1976, Payment of Wages Act 1936</td></tr>
                    <tr><td>Applicable To</td><td>All employers in Bangalore with 1+ employees</td></tr>
                    <tr><td>Timeline</td><td>Monthly processing; PF/ESI due by 15th; PT by 20th</td></tr>
                    <tr><td>Cost Starting From</td><td>Rs 1,500/month (up to 10 employees)</td></tr>
                    <tr><td>Penalty for Non-Compliance</td><td>PF: 12% to 100% damages; ESI: Rs 5,000 first offence; PT: 1.25%/month interest</td></tr>
                    <tr><td>Key Portal</td><td>e-Prerana (Karnataka PT), EPFO Unified Portal, ESIC Portal</td></tr>
                    <tr><td>Jurisdictional Office</td><td>EPFO Regional Office, Bangalore; Commercial Taxes Dept, Karnataka</td></tr>
                </tbody></table></div><p</p>
                <p>The Regional Provident Fund Commissioner, Bangalore and the Commercial Taxes Department, Karnataka are the primary authorities overseeing payroll compliance. Late PF filing attracts damages from 5% to 100% under Section 14B of the EPF Act. Patron Accounting's CA team handles <a href="/payroll-services">payroll services</a> for all Bangalore businesses - from salary processing and PF/ESI compliance to Karnataka PT via the e-Prerana portal, TDS computation, and year-end Form 16 generation. Integrated with <a href="/accounting-services">accounting</a> and professional tax registration.</p>
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
                <h2 class="section-title">What Is Payroll Processing?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll processing is the systematic computation and disbursement of employee salaries, statutory deductions, and employer contributions as mandated under the Income Tax Act 1961, EPF Act 1952, and ESI Act 1948.</p>
                    <p>It covers gross-to-net salary calculation, TDS under Section 192, PF and ESI remittance, professional tax deduction, bonus computation, and full and final settlement.</p>
                    <p>For Bangalore-based businesses - from early-stage startups in Koramangala scaling their engineering teams to established IT services firms in Electronic City managing 500+ headcounts - payroll accuracy directly impacts employee retention and regulatory standing. A single miscalculation in Karnataka Professional Tax or a missed PF challan can trigger notices from the EPFO Regional Office, Bangalore.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Payroll Services in Bangalore:</strong></p>
                    <ul>
                        <li><strong>Karnataka PT:</strong> Professional Tax under Karnataka PT Act 1976 - Rs 200/month (Rs 300 in Feb) for salary above Rs 25,000/month (2025 amendment). Filed via e-Prerana portal.</li>
                        <li><strong>EPF:</strong> Employees' Provident Fund - 12% employer + 12% employee of basic + DA. Mandatory for 20+ employees under Section 2(f).</li>
                        <li><strong>ESI:</strong> Employees' State Insurance - 3.25% employer + 0.75% employee for wages up to Rs 21,000/month under Section 2(12).</li>
                        <li><strong>Section 192:</strong> TDS on salaries under Income Tax Act 1961.</li>
                        <li><strong>Karnataka LWF:</strong> Labour Welfare Fund under Karnataka LWF Act 1965 - annual contribution for establishments with 50+ employees.</li>
                        <li><strong>Form 24Q:</strong> Quarterly TDS return for salary payments filed with Income Tax Department.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payroll Services in Bangalore</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Karnataka PT Compliant</span>
                        <strong>PF + ESI + TDS</strong>
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
            <h2 class="section-title">Who Needs Payroll Services in Bangalore?</h2>
            <div class="content-text">
                
                <h3>IT Companies in Electronic City and Manyata Tech Park</h3><p>Complex salary structures with variable pay, ESOPs, and flexi-benefit plans. Must comply with Karnataka Shops and Commercial Establishments Act 1961 including overtime at 2x wages under Section 8.</p>
                <h3>Startups in Koramangala and HSR Layout</h3><p>Often grow from 10 to 100 employees within two quarters. PF registration becomes mandatory when headcount crosses 20 under Section 2(f) of EPF Act. Retroactive non-compliance is penalised.</p>
                <h3>Manufacturing Units in Peenya Industrial Area</h3><p>Additional compliance under Karnataka Factories Rules and Payment of Wages Act 1936. Wages due by 7th or 10th of month depending on headcount. Consider <a href="/gst-registration/bangalore">GST Registration in Bangalore</a> alongside payroll.</p>
                <h3>Aerospace Firms near KIADB Aerospace Park</h3><p>Mix of regular and contract workers requiring separate payroll streams and ESI applicability checks under the Rs 21,000/month wage ceiling.</p>
                <h3>MNCs in Whitefield with Multi-State Employees</h3><p>Companies with Bangalore HQ and remote employees across states need different PT slabs per state. Karnataka PT follows Rs 200/month plus Rs 300 in February; other states differ significantly.</p>
                <h3>All Registered Employers</h3><p>Every employer with even one employee must maintain accurate payroll records and remit statutory contributions. <a href="/private-limited-company-registration/bangalore">Pvt Ltd companies in Bangalore</a> need payroll from day one of hiring.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Salary Processing</td><td>End-to-end gross-to-net computation covering basic pay, HRA, allowances, overtime, and incentives for all Bangalore employees</td></tr>
                        <tr><td>PF and ESI Compliance</td><td>Monthly PF ECR generation and remittance to EPFO Regional Office, Bangalore. ESI for employees earning up to Rs 21,000/month</td></tr>
                        <tr><td>Karnataka Professional Tax</td><td>Rs 200/month (Rs 300 in Feb) for employees above Rs 25,000/month. PTRC/PTEC registration and filing via e-Prerana portal</td></tr>
                        <tr><td>TDS Computation and Filing</td><td>Monthly TDS under Section 192, investment proof verification, Form 24Q quarterly filing, Form 16 generation</td></tr>
                        <tr><td>Full and Final Settlement</td><td>Earned leave encashment, gratuity under Section 4, notice period adjustment, bonus under Payment of Bonus Act 1965</td></tr>
                        <tr><td>Payslip and ESS Portal</td><td>Cloud-based payslip delivery and employee self-service portal for pay details and investment declarations</td></tr>
                        <tr><td>Karnataka Labour Welfare Fund</td><td>Annual LWF contribution for establishments with 50+ employees under Karnataka LWF Act 1965. Due by 31 December</td></tr>
                        <tr><td>Statutory Return Filing</td><td>PF ECR, ESI contribution, PT monthly returns, TDS quarterly, annual bonus/gratuity registers per Karnataka labour laws</td></tr>

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
            <h2 class="section-title">Payroll Processing in Bangalore: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Your dedicated CA handles end-to-end payroll processing with Karnataka-specific compliance. No office visit required.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Gather Company and Employee Data</h3><p class="step-description">Submit PAN, TAN, PF registration number (EPFO Regional Office, Bangalore), ESI code, Karnataka PTRC, and Shops & Establishments registration. Provide employee details: Aadhaar, PAN, bank account, salary structure. For IT companies with variable pay, share CTC breakup and flexi-benefit rules.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data Collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registrations Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="70" y="55" width="28" height="28" rx="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M78 69l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Setup Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Configure Salary Structure and Compliance Rules</h3><p class="step-description">CA configures salary structure compliant with Karnataka labour laws. Maps PF-eligible components (basic + DA minimum 50% of gross), applies Karnataka PT slab (nil below Rs 25,000/month; Rs 200/month above under 2025 amendment), sets ESI applicability for employees up to Rs 21,000/month.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Structure Set</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PT Slab Applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CTC</text><rect x="30" y="38" width="60" height="10" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="46" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PT SLAB</text></svg></div><span class="illustration-label">Compliance Mapped</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Monthly Attendance and Input Collection</h3><p class="step-description">By the 25th of each month, share attendance data, leave records, overtime hours, reimbursements, and ad hoc adjustments. For Peenya manufacturing firms with shift-based payroll, Patron integrates attendance to compute overtime at 2x wages per Karnataka Shops Act Section 8.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inputs Received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Overtime Computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="15" width="60" height="45" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="41" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">25th</text></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Process Payroll and Generate Challans</h3><p class="step-description">Patron processes gross-to-net salary, generates PF ECR for EPFO Unified Portal, computes ESI for ESIC Portal, calculates Karnataka PT for e-Prerana portal, and prepares TDS workings under Section 192. Monthly PT return filed by the 20th of the following month.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payroll Processed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challans Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAYROLL</text><rect x="25" y="38" width="30" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="60" y="38" width="30" height="8" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="25" y="50" width="65" height="8" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/></svg></div><span class="illustration-label">All Computed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Disburse Salaries and File Returns</h3><p class="step-description">After approval, bank advice generated for salary credit. PF contributions remitted by 15th. ESI filed by same deadline. Quarterly Form 24Q filed with IT Department. For KIADB/Manyata companies with contract staff, separate registers maintained.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Salaries Credited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Returns Filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="37" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="41" font-size="10" fill="#25D366" font-weight="900" text-anchor="middle" font-family="Arial">Rs</text><rect x="30" y="72" width="60" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="84" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CREDITED</text></svg></div><span class="illustration-label">Compliance Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Payslip Distribution and Year-End Compliance</h3><p class="step-description">Payslips delivered via cloud portal. Year-end: Form 16 generation, investment proof verification, annual PF/ESI returns, Karnataka PT annual return, bonus computation under Section 10 of Payment of Bonus Act, gratuity provisioning, and Karnataka LWF contribution for 50+ staff by 31 December.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Year-End Done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><text x="60" y="45" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM 16</text><rect x="35" y="52" width="50" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/></svg></div><span class="illustration-label">Cycle Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Payroll Setup in Bangalore</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card of Company:</strong> Required for TDS deduction and filing under Income Tax Act 1961.</li><li><strong>TAN:</strong> Mandatory for remitting TDS on salaries under Section 192.</li><li><strong>PF Registration Certificate:</strong> Issued by EPFO Regional Office, Bangalore upon registration under EPF Act 1952.</li><li><strong>ESI Registration Code:</strong> For establishments with 10+ employees with wages up to Rs 21,000/month.</li><li><strong>Karnataka PT Registration (PTRC):</strong> Obtained via e-Prerana portal for employers deducting PT.</li><li><strong>Shops & Establishments Certificate:</strong> Under Karnataka Shops and Commercial Establishments Act 1961 via e-Karmika portal.</li><li><strong>Employee Master Data:</strong> Aadhaar, PAN, bank account, UAN, salary structure, date of joining, designation.</li><li><strong>Attendance and Leave Policy:</strong> Company-specific rules for leave, overtime, and loss of pay.</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Bangalore-Specific Tip:</strong> For IT companies registered at co-working spaces in Koramangala or HSR Layout, ensure your Shops & Establishments certificate reflects the correct address. The Commercial Taxes Department links your PTRC to this registered address - a mismatch can delay PT return processing.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Payroll Challenges in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Rapid Headcount Scaling in IT Startups</td><td>Crossing 20-employee PF threshold triggers retroactive registration and contribution</td><td>Monitors headcount and triggers PF registration before threshold is crossed</td></tr><tr><td>Multi-State Payroll</td><td>Different PT slabs per state for companies with remote employees across India</td><td>Applies correct PT, PF, and labour law provisions per jurisdiction from one team</td></tr><tr><td>Contract Worker Payroll in Peenya/KIADB</td><td>Separate PF codes, ESI sub-codes, and wage registers required for contract staff</td><td>Maintains separate payroll streams for regular and contract employees</td></tr><tr><td>Karnataka LWF Compliance Gap</td><td>Most payroll tools do not include LWF - annual contribution missed by 50+ employee firms</td><td>Karnataka LWF Act 1965 included in standard scope with 31 December deadline tracking</td></tr><tr><td>Year-End TDS for Variable Pay</td><td>Complex TDS for ESOPs, retention bonuses, and mid-year regime switching under Section 115BAC</td><td>Handles complex TDS scenarios with accurate Form 16 generation</td></tr>

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
            <h2 class="section-title">Payroll Service Fees in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Payroll Processing (up to 10 employees)</td><td>Rs 1,500/month</td></tr><tr><td>Monthly Payroll Processing (11-50 employees)</td><td>Rs 3,000-5,000/month</td></tr><tr><td>Monthly Payroll Processing (51-200 employees)</td><td>Rs 5,000-12,000/month</td></tr><tr><td>PF & ESI Compliance (add-on)</td><td>Rs 500-2,000/month</td></tr><tr><td>Karnataka PT Return Filing</td><td>Included in base package</td></tr><tr><td>TDS Return Filing (Form 24Q)</td><td>Rs 1,000/quarter</td></tr><tr><td>Form 16 Generation</td><td>Rs 500-1,500/year-end</td></tr><tr><td>Full & Final Settlement (per exit)</td><td>Rs 500-1,000/employee</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Payroll Services in Bangalore consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20in%20Bangalore%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Processing Timeline in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Initial Setup (data collection, configuration)</td><td>3-5 working days</td></tr><tr><td>First Month Payroll Processing</td><td>2-3 working days after inputs</td></tr><tr><td>Monthly PF/ESI Challan Filing</td><td>By 15th of following month</td></tr><tr><td>Monthly Karnataka PT Filing</td><td>By 20th of following month</td></tr><tr><td>TDS Return (Quarterly)</td><td>By 31st of month following quarter end</td></tr><tr><td>Form 16 Generation (Annual)</td><td>By 15 June</td></tr><tr><td>Karnataka LWF Contribution (Annual)</td><td>By 31 December</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Bangalore Processing Note (Group B):</strong> No visit to the Regional PF Commissioner's office or Commercial Taxes Department required. Your dedicated CA from Patron's pan-India team handles all filings online.</p>

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
            <h2 class="section-title">Why Choose Patron for Payroll in Bangalore?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Digital-First Payroll Delivery</h3><p>Fully online workflow for Bangalore IT companies and startups. Every input, approval, payslip, and statutory filing handled digitally - no office visit required.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>4-Office Multi-State Expertise</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-state payroll with correct PT, PF, and labour law provisions per jurisdiction from one team.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Karnataka Compliance Familiarity</h3><p>Familiar with EPFO Regional Office Bangalore, Commercial Taxes Department Karnataka, e-Prerana portal for PT, and Karnataka Shops & Establishments Act requirements.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3>Dedicated CA for Your Payroll</h3><p>Named CA who understands your salary structure, compliance history, and growth trajectory. Not chat-only support - actual CA oversight.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;margin:24px 0;"><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">10,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Businesses Served</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">4.9</span><br><span style="color:var(--text-muted);font-size:14px;">Google Rating</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">50,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Documents Filed</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">15+</span><br><span style="color:var(--text-muted);font-size:14px;">Years Experience</span></div></div><p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Bangalore businesses with the same rigour as its office cities - combining payroll with accounting, GST, TDS, and statutory compliance from one team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Payroll vs Outsourced Payroll in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>In-House Payroll</th><th>Outsourced to Patron</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Cost (50 employees)</td><td>Rs 30,000-50,000 (HR salary + software)</td><td>Rs 3,000-5,000/month all-inclusive</td></tr><tr><td>Compliance Risk</td><td>High - depends on HR's knowledge of Karnataka PT, PF, ESI</td><td>Low - CA-managed with statutory calendar tracking</td></tr><tr><td>Karnataka PT Updates</td><td>Manual tracking; 2025 amendment often missed</td><td>Auto-updated; e-Prerana filing included</td></tr><tr><td>Scalability</td><td>Requires additional HR hires as headcount grows</td><td>Scales from 1 to 500+ with same team</td></tr><tr><td>Error Rate</td><td>3-5% typical for manual processing</td><td>Under 0.1% with CA-verified 3-layer review</td></tr>

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
                
                <ul><li><a href="/payroll-services">Payroll Services in India</a> - Parent national service page</li><li><a href="/payroll-processing-and-management-services">Payroll Processing and Management</a> - Comprehensive payroll management</li><li><a href="/accounting-services">Accounting Services</a> - Bookkeeping integrated with payroll</li><li><a href="/gst-registration">GST Registration</a> - Tax compliance for Bangalore businesses</li><li><a href="/income-tax-return">Income Tax Return</a> - ITR filing for employers and employees</li></ul>

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
                
                <ul><li>Employees' Provident Funds and Miscellaneous Provisions Act, 1952 - PF contributions (12% + 12% of basic + DA)</li><li>Employees' State Insurance Act, 1948 - ESI (3.25% employer + 0.75% employee) for wages up to Rs 21,000/month</li><li>Karnataka Tax on Professions, Trades, Callings and Employments Act, 1976 - PT up to Rs 2,500/year. Amendment Act 2025 raised exemption to Rs 25,000/month</li><li>Payment of Wages Act, 1936 - Wages by 7th (under 1,000 employees) or 10th (1,000+)</li><li>Payment of Bonus Act, 1965 - Minimum 8.33%, maximum 20% for employees up to Rs 21,000/month</li><li>Payment of Gratuity Act, 1972 - After 5 years continuous service</li><li>Karnataka Labour Welfare Fund Act, 1965 - Annual contribution for 50+ employee establishments</li><li>Karnataka Shops and Commercial Establishments Act, 1961 - Registration, working hours, leave, overtime</li></ul><h3>Penalties</h3><ul><li>PF: Damages 5%-100% under Section 14B + interest 12% p.a. under Section 7Q</li><li>ESI: First default Rs 5,000; subsequent up to 2 years imprisonment + Rs 25,000</li><li>Karnataka PT: Interest 1.25%/month for late payment; max 50% of outstanding</li><li>TDS: Late fee Rs 200/day (Section 234E) + penalty up to Rs 1 lakh (Section 271H)</li></ul><p><strong>Authorities:</strong> EPFO - <a href="https://unifiedportal-mem.epfindia.gov.in" target="_blank" rel="noopener">EPFO Unified Portal</a> | ESIC - <a href="https://esic.gov.in" target="_blank" rel="noopener">esic.gov.in</a> | Karnataka PT - <a href="https://e-prerana.kar.nic.in" target="_blank" rel="noopener">e-Prerana Portal</a> | TDS - <a href="https://www.tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Payroll Services in Bangalore</h2>
                    <p class="faq-expanded__lead">Answers to common questions about payroll services in Bangalore, covering Karnataka PT, PF/ESI compliance, fees, and labour laws.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Payroll Services in Bangalore',
                        'city'     => 'Bangalore',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles payroll compliance in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>EPFO Regional Office Bangalore handles PF compliance. Commercial Taxes Department Karnataka manages Professional Tax through the e-Prerana portal. ESI Regional Office Bangalore handles ESI. Labour Department Karnataka operates the e-Karmika portal for Shops & Establishments. Patron manages all filings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get payroll services done online from Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron delivers payroll fully online. All processing, statutory filings (PF via EPFO Portal, ESI via esic.gov.in, PT via e-Prerana), and payslip delivery happen digitally. Your dedicated CA manages everything without in-person visits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the payroll service fee in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Starting from Rs 1,500 per month for up to 10 employees. Includes salary processing, Karnataka PT deduction, PF/ESI challan preparation, and payslip generation. Scales based on employee count and complexity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does payroll setup take in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>3-5 working days from submission of all documents (PAN, TAN, PF registration, ESI code, Karnataka PTRC) and employee data. Monthly payroll processed within 2-3 working days of attendance inputs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is Professional Tax mandatory for Bangalore employees?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Karnataka PT Act 1976, employers must deduct PT from employees earning Rs 25,000 or more per month. Rs 200/month for April-January, Rs 300 for February, totalling Rs 2,500/year maximum. The 2025 amendment raised the exemption threshold from Rs 15,000 to Rs 25,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if PF is not deposited on time in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Damages from 5% (delays up to 2 months) to 100% (beyond 6 months) under Section 14B of EPF Act. Interest at 12% per annum under Section 7Q. EPFO Regional Office Bangalore issues notices and can initiate recovery proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does the Karnataka Labour Welfare Fund apply to IT companies?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Karnataka LWF Act 1965, every establishment with 50+ employees must contribute. IT companies in Electronic City, Whitefield, and Manyata Tech Park are covered. Annual contribution due by 31 December.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How is ESI calculated for Bangalore employees?</h3>
                        <div class="faq-expanded__a"><p>ESI applies to employees earning up to Rs 21,000/month. Employer contributes 3.25% and employee 0.75% of gross wages. For startups where most employees earn above Rs 21,000, ESI typically applies only to support staff and junior hires.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Bangalore mein payroll outsource kaise karein?</strong> PAN, TAN, PF registration, aur employee data submit karo CA-managed firm ko. Monthly processing, statutory filings (PF, ESI, Karnataka PT), aur payslips online handle hote hain.</p><p><strong>Payroll services ka kharcha kitna hota hai?</strong> Rs 1,500/month se start for 10 employees tak. Salary processing, Karnataka PT, aur basic statutory compliance included.</p><p><strong>Professional Tax Bangalore mein kitna katega?</strong> Rs 200/month for employees earning Rs 25,000+. February mein Rs 300. Total Rs 2,500/year maximum under Karnataka PT Act 1976.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your Payroll Compliance in Bangalore</h2>
            <div class="content-text">
                
                <p>PF contributions must be deposited by the 15th of the following month - delays attract damages up to 100% under Section 14B of the EPF Act. Karnataka PT returns are due by the 20th, with 1.25% monthly interest for late payment. TDS returns filed late attract Rs 200/day under Section 234E. Bangalore employers processing payroll in-house risk compounding penalties across multiple statutes every month they delay.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Payroll Services in Bangalore with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Payroll services in Bangalore demand accuracy across PF, ESI, Karnataka Professional Tax, TDS, and Karnataka Labour Welfare Fund compliance - each governed by different Acts, different portals, and different filing deadlines.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting delivers CA-managed payroll to Bangalore businesses through a fully digital model backed by offices in Pune, Mumbai, Delhi, and Gurugram. Every filing with the EPFO Regional Office, the Commercial Taxes Department, and the Income Tax Department is handled by a named CA who knows your business.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20in%20Bangalore%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Services%20in%20Bangalore&body=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20in%20Bangalore%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted payroll services with multi-state compliance in major cities across India.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/payroll-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/payroll-services/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/payroll-services/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Bangalore</div><div class="pa-block-sub">End-to-end compliance support for Bangalore businesses</div><div class="pa-cross-grid"><a href="/gst-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/private-limited-company-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/income-tax-return/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/startup-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/trademark-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/udyam-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Udyam Registration</div><div class="pa-card-sub">Bangalore</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Karnataka PT slabs, PF/ESI rates, and minimum wages update yearly. Freshness Tier 2.</p>
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
