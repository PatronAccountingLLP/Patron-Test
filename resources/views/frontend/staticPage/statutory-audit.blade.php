
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Statutory Audit Services India - CARO, Process & Compliance</title>
    <meta name="description" content="Statutory audit is mandatory for every company in India under Section 139, Companies Act 2013. Expert CA auditors. Starting at INR 14,999.">
    <link rel="canonical" href="/statutory-audit">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Statutory Audit Services India - CARO, Process & Compliance">
    <meta property="og:description" content="Statutory audit is mandatory for every company in India under Section 139, Companies Act 2013. Expert CA auditors. Starting at INR 14,999.">
    <meta property="og:url" content="/statutory-audit">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Statutory Audit Services India - CARO, Process & Compliance">
    <meta name="twitter:description" content="Statutory audit is mandatory for every company in India under Section 139, Companies Act 2013. Expert CA auditors. Starting at INR 14,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Statutory Audit: Expert CA Firm",
          "description": "Statutory audit is mandatory for every company in India under Section 139, Companies Act 2013. Expert CA auditors. Starting at INR 14,999.",
          "url": "https://www.patronaccounting.com/statutory-audit",
          "serviceType": "Statutory Audit: Expert CA Firm",
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
              "name": "Statutory Audit: Expert CA Firm",
              "item": "https://www.patronaccounting.com/statutory-audit"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is statutory audit mandatory for private limited companies even with zero turnover?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Statutory audit is mandatory for every company registered in India under Section 139 of the Companies Act 2013, regardless of turnover, profit, or operational status. Even a newly incorporated company with zero transactions must appoint a statutory auditor and have its accounts audited. There is no turnover exemption for companies."
              }
            },
            {
              "@type": "Question",
              "name": "Who appoints the statutory auditor of a company in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For the first auditor, the Board of Directors appoints within 30 days of incorporation per Section 139(6). If Board fails, shareholders appoint at EGM within 90 days. Subsequent auditors are appointed by shareholders at AGM for a 5-year term (individual) or 10-year term (firm). Form ADT-1 must be filed with ROC within 15 days."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not conducting statutory audit in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 147 of the Companies Act 2013, the company faces a fine of INR 25,000 to INR 5,00,000. Officers in default face imprisonment up to 1 year, or fine of INR 10,000 to INR 1,00,000, or both. Directors may also face disqualification for continued non-compliance."
              }
            },
            {
              "@type": "Question",
              "name": "What is auditor rotation and does it apply to my company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Auditor rotation under Section 139(2) applies to listed companies and prescribed unlisted public companies. Individual auditors cannot serve more than 5 consecutive years; audit firms cannot serve more than 10 consecutive years. After maximum term, a 5-year cooling-off period applies. Most private limited companies are exempt."
              }
            },
            {
              "@type": "Question",
              "name": "What is CARO 2020 and does it apply to my company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "CARO 2020 requires statutory auditors to report on specific matters including fixed assets, inventory, loans, statutory dues, and fraud. It does NOT apply to OPCs, small companies, and private companies where paid-up capital plus reserves do not exceed INR 1 crore, borrowings do not exceed INR 1 crore, and revenue is below INR 10 crore."
              }
            },
            {
              "@type": "Question",
              "name": "What is the deadline for statutory audit and filing with ROC?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "AGM must be held within 6 months of financial year end (by 30 September for March year-end). Form AOC-4 (audited financials) must be filed with ROC within 30 days of AGM (typically by 30 October). Late AOC-4 filing attracts INR 100 per day per document."
              }
            },
            {
              "@type": "Question",
              "name": "Kya har private company ka statutory audit hona zaroori hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Haan, bilkul. Section 139, Companies Act 2013 ke under India mein registered har company ka har saal statutory audit karna zaroori hai, chahe turnover zero ho. Koi turnover limit nahi hai companies ke liye. Non-compliance par Section 147 ke under INR 25,000 se INR 5,00,000 tak penalty lag sakti hai. Quick Answers What is statutory audit? Mandatory annual examination of a company's financial statements by an independent CA under Section 139, Companies Act 2013, to ensure they present a true and fair view. Is it mandatory for all companies? Yes. Every company registered in India must conduct annual statutory audit, regardless of turnover, profit, or size. What is the penalty? Section 147: INR 25,000 to INR 5,00,000 for company; officers face imprisonment up to 1 year or fine INR 10,000 to INR 1,00,000 or both. Who can conduct it? Only a practicing CA or CA firm where majority of partners are practicing CAs - Section 141, Companies Act 2013."
              }
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
/* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
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
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot - Plan 3.2 */
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
                        Statutory Audit Service in India: Mandatory for Every Company
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Mandatory for All Companies:</span> Required under Section 139, Companies Act 2013 for every company registered in India - regardless of turnover, profit, or size</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>ICAI SA-Compliant Reports:</span> Experienced CA team delivering ICAI Standards on Auditing compliant audit reports with Unique Document Identification Number (UDIN)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>End-to-End Service:</span> Audit execution, CARO 2020 reporting, ADT-1 appointment filing, and AOC-4 financial statement filing with ROC</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pan-India Coverage:</span> Offices in Pune, Mumbai, Delhi, and Bengaluru serving companies across manufacturing, IT, NBFC, retail, healthcare, and e-commerce</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ clients | 1,000+ audit cycles completed | 4 offices across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Statutory%20Audit%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20Statutory%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Statutory%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Statutory Audit',
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
    'ctaText'    => 'Join 500+ companies who trust Patron Accounting for ICAI-compliant statutory audit services.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Applicability</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Audit Service - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Statutory Audit Services at a Glance</strong></p>
                    <p>Statutory audit is mandatory for every company registered in India under Section 139, Companies Act 2013 - there is no turnover exemption for companies. The auditor must be a practicing Chartered Accountant or CA firm. Penalties for non-compliance range from INR 25,000 to INR 5,00,000 for the company under Section 147. The audit must be completed before the AGM, and audited financials filed via Form AOC-4 with ROC within 30 days of the AGM.</p>
                </div>
                <p>Statutory audit is the legally mandated examination of a company's financial statements and accounting records to ensure they present a true and fair view of the company's financial position. Under Section 139 of the Companies Act 2013, every company incorporated in India - private limited, public limited, One Person Company, or listed entity - must appoint a statutory auditor and have its accounts audited annually.</p>
                <p>Patron Accounting's statutory audit team conducts ICAI SA-compliant audits with complete transparency, timely delivery, and UDIN-verified reports that satisfy MCA, ROC, income tax authorities, and financial lenders. Our end-to-end service covers audit execution, CARO 2020 reporting, ADT-1 filing, and AOC-4 financial statement filing with ROC.</p>
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
                <h2 class="section-title">What is Statutory Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Statutory audit</strong> is an independent examination of a company's financial records, transactions, and statements conducted by a qualified external Chartered Accountant, as required by statute. The objective is to determine whether the financial statements present a true and fair view of the company's financial position and comply with applicable accounting standards and the Companies Act 2013.</p>
<p>Unlike internal audit, which is conducted for management benefit, statutory audit is conducted for shareholders, regulators, and other stakeholders. The statutory auditor is appointed by shareholders at the Annual General Meeting (AGM) and reports to the members of the company, not to management.</p>
<p>The audit is governed by ICAI Standards on Auditing (SA) and, for listed and large companies, overseen by the National Financial Reporting Authority (NFRA).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Statutory Audit:</strong></p>
                    <p><strong>Statutory Audit vs Tax Audit</strong> - Statutory audit (Section 139, Companies Act 2013) is mandatory for all companies regardless of turnover. Tax audit (Section 44AB, Income Tax Act 1961) applies only above turnover thresholds. Both are distinct engagements with separate reports.</p>
<p><strong>CARO 2020</strong> - Companies Auditor's Report Order 2020 requires statutory auditors to report on specific matters including fixed assets, inventory, loans, statutory dues, and fraud. Does not apply to OPCs, small companies, and certain private companies.</p>
<p><strong>UDIN</strong> - Unique Document Identification Number mandatory on every CA-signed statutory audit report. Verifiable by regulators and third parties.</p>
<p><strong>ADT-1</strong> - Form filed with ROC within 15 days of auditor appointment at AGM or Board meeting.</p>
<p><strong>AOC-4</strong> - Form for filing audited financial statements with ROC within 30 days of AGM.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Audit report document -->
<rect x="50" y="35" width="65" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<line x1="58" y1="48" x2="107" y2="48" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
<line x1="58" y1="58" x2="100" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="68" x2="95" y2="68" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="78" x2="100" y2="78" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="88" x2="90" y2="88" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="98" x2="95" y2="98" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
<!-- Section 139 badge -->
<rect x="120" y="45" width="40" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="140" y="59" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">S.139</text>
<!-- UDIN badge -->
<rect x="120" y="75" width="40" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="140" y="89" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UDIN</text>
<!-- AOC-4 badge -->
<rect x="55" y="118" width="40" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="75" y="130" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4</text>
<!-- Verified -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Statutory Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 139</span>
                        <strong>Companies Act 2013</strong>
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
            <h2 class="section-title">Who Must Get a Statutory Audit Done?</h2>
            <div class="content-text">
                
                <p><strong>All Companies Incorporated in India - No Turnover Exemption</strong></p>
<ul>
<li>Private Limited Companies - mandatory every financial year under Section 139</li>
<li>Public Limited Companies - mandatory every financial year</li>
<li>One Person Companies (OPC) - mandatory; auditor rotation rules do not apply</li>
<li>Listed Companies - mandatory; additional NFRA oversight and SEBI requirements</li>
<li>Dormant Companies - mandatory; even companies with zero transactions require annual audit</li>
<li>Foreign Company Subsidiaries in India - mandatory; Indian branch/subsidiary treated as Indian company</li>
</ul>
<p style='margin-top:16px;'><strong>LLPs - Threshold-Based</strong></p>
<ul>
<li>Turnover exceeds INR 40 lakhs OR contribution exceeds INR 25 lakhs under Rule 24(1), LLP Rules 2009</li>
</ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Statutory Audit Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Annual Statutory Audit</td><td>Complete annual audit of financial statements under Section 143, Companies Act 2013 including balance sheet, P&L, cash flow statement, resulting in signed audit report with UDIN</td></tr>
<tr><td>CARO 2020 Reporting</td><td>Detailed CARO 2020 report covering all applicable clauses - fixed assets, inventory, loans, investments, statutory dues, fraud, and other prescribed matters</td></tr>
<tr><td>First-Year Audit</td><td>Stub-period audit for newly incorporated companies; Board-appointed first auditor engagement; ADT-1 filing support within 30 days</td></tr>
<tr><td>Auditor Rotation Compliance</td><td>Identifying rotation requirements under Section 139(2); new auditor appointment process; handover management; ADT-1 filing</td></tr>
<tr><td>LLP Statutory Audit</td><td>Audit of LLP accounts under LLP Rules for partnerships with turnover above INR 40 lakh or contribution above INR 25 lakh</td></tr>
<tr><td>Ind AS Audit</td><td>Audit of financial statements prepared under Indian Accounting Standards for applicable companies; SEBI-regulated entity support</td></tr>

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
            <h2 class="section-title">7-Step Statutory Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From auditor appointment to AOC-4 filing. Section 139 requires written consent and eligibility certificate from auditor before appointment. Section 143(2) requires the report to be presented at AGM. AOC-4 must be filed with ROC within 30 days of AGM.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Auditor Appointment and Engagement</h3><p class="step-description">The company appoints Patron Accounting as statutory auditor through Board resolution (first year) or shareholder resolution at AGM (subsequent years). Engagement letter signed defining scope, fees, and timelines. ADT-1 filed with ROC within 15 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-1 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Engagement signed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ADT-1</text></svg></div><span class="illustration-label">Appointed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Pre-Audit Planning</h3><p class="step-description">Risk assessment of the company's business, industry, and accounting systems. Detailed audit plan with high-risk areas, materiality thresholds, and sampling strategy per SA 300 and SA 320.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Risk assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit plan ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Plan Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Internal Control Assessment</h3><p class="step-description">Review of internal controls over financial reporting including account preparation processes, authorization procedures, and IT general controls per SA 315.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Controls reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Gaps identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M35 42l10-15 15 20 15-10 15 15" stroke="#F5A623" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/><circle cx="85" cy="52" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M81 52l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Controls OK</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Audit Fieldwork and Evidence Collection</h3><p class="step-description">Verify financial transactions, reconcile ledgers, confirm balances with third parties, physically verify fixed assets and inventory, examine contracts, test tax compliance (TDS, GST, PF, ESI), and review related party transactions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fieldwork complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Evidence collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="65" y="20" width="30" height="22" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="25" y="48" width="30" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><rect x="65" y="48" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">CARO 2020 Procedures</h3><p class="step-description">For applicable companies, specific procedures on all CARO 2020 reporting matters: loans, investments, deposits, statutory dues arrears, pending litigations, and fraud indicators.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CARO clauses checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reporting complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CARO</text><text x="60" y="55" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">2020</text><rect x="35" y="72" width="50" height="14" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="82" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">COMPLETE</text></svg></div><span class="illustration-label">CARO Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Draft Report and Management Representation</h3><p class="step-description">Draft audit report shared with management. Management Representation Letter obtained per SA 580. Significant matters discussed with Audit Committee or Board.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Draft reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MRL obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><path d="M62 55l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Final Audit Report with UDIN and AOC-4 Filing</h3><p class="step-description">Final audit report signed by partner, UDIN generated and embedded, report provided for AGM. Patron Accounting supports AOC-4 filing with ROC within 30 days of AGM.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UDIN generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOC-4 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="50" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="50" y="46" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">UDIN</text><rect x="70" y="32" width="25" height="20" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="82" y="45" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">07</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Statutory Audit</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
<tr><td>Trial balance, ledger accounts, schedules</td><td>Core financial data for the audit period</td></tr>
<tr><td>Prior year audited financial statements + audit report</td><td>Continuity verification and opening balance check</td></tr>
<tr><td>Bank statements + bank reconciliation</td><td>Cash and bank balance verification</td></tr>
<tr><td>Fixed asset register + depreciation schedules</td><td>Asset verification and depreciation testing</td></tr>
<tr><td>Inventory / stock register + valuation method</td><td>Inventory existence and valuation</td></tr>
<tr><td>GST returns (GSTR-1, GSTR-3B) + GST reconciliation</td><td>Revenue reconciliation with books</td></tr>
<tr><td>TDS challans + returns (24Q, 26Q) + Form 16A</td><td>Tax compliance verification</td></tr>
<tr><td>Loan agreements + outstanding loan schedules</td><td>Liability verification</td></tr>
<tr><td>Related party transactions list + approvals</td><td>Related party disclosure verification</td></tr>
<tr><td>Board meeting + General Meeting minutes</td><td>Corporate governance compliance</td></tr>
<tr><td>Debtors/creditors ageing + balance confirmations</td><td>Receivable/payable verification</td></tr>
<tr><td>Regulatory notices + pending legal matters</td><td>Contingent liability assessment</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Statutory Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Books of accounts not audit-ready at year-end</td><td>Audit delays and last-minute pressure</td><td>Pre-audit ledger review service offered 60 days before year end to identify and rectify gaps in advance</td></tr>
<tr><td>Late filing penalties for AOC-4 or AGM</td><td>INR 100/day additional fees + Section 147 penalties</td><td>Dedicated compliance calendar with advance reminders for AGM scheduling and AOC-4 filing deadlines</td></tr>
<tr><td>First-time statutory audit with no prior audit trail</td><td>Opening balance verification difficulty</td><td>Structured first-audit onboarding with opening balance verification, prior year reconciliation, and complete documentation</td></tr>
<tr><td>Multiple entity audits across financial year end</td><td>Resource allocation and deadline management</td><td>Multi-city team handles concurrent assignments - dedicated audit managers per entity for on-time delivery</td></tr>

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
            <h2 class="section-title">Statutory Audit Fees in India 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Newly incorporated company (stub period)</td><td>INR 15,000 (below INR 1 crore turnover)</td></tr>
<tr><td>Small private limited company</td><td>INR 15,000 - INR 30,000 (below INR 1 crore)</td></tr>
<tr><td>Mid-size private limited company</td><td>INR 30,000 - INR 75,000 (INR 1-10 crore)</td></tr>
<tr><td>Growing private / public company</td><td>INR 75,000 - INR 2,00,000 (INR 10-50 crore)</td></tr>
<tr><td>Large company / listed entity</td><td>Custom quote (INR 50 crore+)</td></tr>
<tr><td>LLP statutory audit</td><td>INR 15,000 onwards (above threshold)</td></tr>
<tr><td>Ind AS audit (applicable companies)</td><td>Custom quote - premium engagement</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Statutory Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Statutory%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Statutory Audit Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Newly incorporated / small company (low transactions)</td><td>5-10 business days</td></tr>
<tr><td>Mid-size private limited (INR 1-10 crore turnover)</td><td>2-4 weeks</td></tr>
<tr><td>Large company (INR 10-50 crore turnover)</td><td>4-8 weeks</td></tr>
<tr><td>Listed company / NFRA-applicable</td><td>6-12 weeks</td></tr>
<tr><td>LLP audit</td><td>5-10 business days</td></tr>
<tr><td>ADT-1 filing with ROC</td><td>1-2 business days after appointment</td></tr>
<tr><td>AOC-4 filing after audit completion</td><td>1-3 business days after report sign-off</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Engage Patron Accounting ideally 2-3 months before the AGM deadline. Early engagement ensures on-time delivery and avoids late filing penalties. AOC-4 must be filed within 30 days of AGM - late filing attracts INR 100 per day per document.</p>

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
            <h2 class="section-title">Why Appoint Patron Accounting as Your Statutory Auditor?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Regulatory Compliance</h3><p class="feature-text">Meet mandatory Section 139 requirements and avoid penalties under Section 147 (INR 25,000 to INR 5,00,000 for company; INR 10,000 to INR 1,00,000 for officer).</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">UDIN-Verified Reports</h3><p class="feature-text">Every audit report carries valid UDIN, making it acceptable to MCA, income tax authorities, banks, investors, and ROC.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Timely Delivery</h3><p class="feature-text">Structured engagement timelines ensure audit completion before AGM and AOC-4 filing within the 30-day ROC deadline.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">CARO 2020 Expertise</h3><p class="feature-text">Detailed CARO clause reporting with clear observations and no unnecessary qualifications on well-managed companies.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><h3 class="feature-title">Cross-Industry Depth</h3><p class="feature-text">Experience across manufacturing, IT/ITES, NBFC, retail, healthcare, construction, e-commerce, and NGO sectors.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Nationwide Service</h3><p class="feature-text">CA teams in Pune, Mumbai, Delhi, and Bengaluru. Multi-entity coordination for groups with multiple Indian subsidiaries.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>500+ Clients | 1,000+ Audit Cycles Completed | UDIN-Verified Reports | 4 Offices: Pune, Mumbai, Delhi, Bengaluru | 4.8/5 Client Rating | 15+ Years Experience</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Audit vs Tax Audit vs Internal Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Statutory Audit</th><th>Tax Audit</th><th>Internal Audit</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Section 139, Companies Act 2013</td><td>Section 44AB, Income Tax Act 1961</td><td>Section 138, Companies Act 2013</td></tr>
<tr><td>Mandatory For</td><td>ALL companies (no turnover limit)</td><td>Businesses above INR 1 Cr / Professionals above INR 50 lakh</td><td>Prescribed classes (turnover INR 200 Cr+)</td></tr>
<tr><td>Conducted By</td><td>Practicing CA / CA firm only</td><td>Practicing CA only</td><td>CA, CMA, or Board-approved professional</td></tr>
<tr><td>Reports To</td><td>Shareholders at AGM</td><td>Income Tax Department (portal)</td><td>Board / Audit Committee</td></tr>
<tr><td>Objective</td><td>True and fair view of financial statements</td><td>Verify tax compliance</td><td>Evaluate internal controls and risk</td></tr>
<tr><td>Filing Required</td><td>Form AOC-4 with ROC</td><td>Form 3CA/3CD with IT return</td><td>Report to Board (no ROC filing)</td></tr>
<tr><td>CARO Applicable</td><td>YES (for applicable companies)</td><td>NO</td><td>NO</td></tr>

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
            <h2 class="section-title">Related Audit and Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/tax-audit">Tax Audit Services</a> - mandatory under Section 44AB for businesses above turnover thresholds. Patron coordinates statutory and tax audit for Form 3CA/3CD delivery.</li>
<li><a href="/internal-audit">Internal Audit Services</a> - mandatory under Section 138 for prescribed classes (turnover INR 200 Cr+ or borrowings INR 100 Cr+).</li>
<li><a href="/gst-audit">GST Audit Services</a> - GST returns vs books reconciliation for GSTR-9C compliance.</li>
<li><a href="/secretarial-audit">Secretarial Audit Services</a> - mandatory under Section 204 for listed and large unlisted companies.</li>
<li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - year-round ROC compliance, annual filings, and board meeting support.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Statutory Audit in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Law / Rule</th><th>Section</th><th>Provision</th></tr></thead><tbody>
<tr><td>Companies Act 2013</td><td>Section 139(1)</td><td>Every company to appoint an auditor at first AGM; term till conclusion of 6th AGM. Written consent and eligibility certificate required.</td></tr>
<tr><td>Companies Act 2013</td><td>Section 139(2)</td><td>Auditor rotation: individual max 5 consecutive years; firm max 10 years (2 x 5-year terms). 5-year cooling-off period.</td></tr>
<tr><td>Companies Act 2013</td><td>Section 139(6)</td><td>First auditor: Board within 30 days of incorporation. If Board fails, shareholders at EGM within 90 days.</td></tr>
<tr><td>Companies Act 2013</td><td>Section 141</td><td>Eligibility: only practicing CA or CA firm (majority partners practicing CAs). Independence requirements.</td></tr>
<tr><td>Companies Act 2013</td><td>Section 143</td><td>Powers and duties: access to all records, CARO 2020 reporting, fraud reporting to Central Government.</td></tr>
<tr><td>Companies Act 2013</td><td>Section 147(1)</td><td>Penalty for company: INR 25,000 to INR 5,00,000. Officer in default: imprisonment up to 1 year OR fine INR 10,000 to INR 1,00,000 OR both.</td></tr>
<tr><td>Companies Rules 2014</td><td>Rule 3</td><td>ADT-1 to be filed with ROC within 15 days of appointment at AGM or Board meeting.</td></tr>
<tr><td>CARO 2020</td><td>MCA Notification</td><td>Statutory auditors to report on fixed assets, inventory, loans, statutory dues, fraud for applicable companies.</td></tr>
<tr><td>ICAI SAs</td><td>SA 200-800 series</td><td>Standards on Auditing governing conduct, documentation, reporting, and ethics for statutory auditors.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Link:</strong> <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code - Companies Act 2013</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions About Statutory Audit</h2>
                    <p class="faq-expanded__lead">Get answers to the most common questions about mandatory statutory audit, auditor appointment, penalties, CARO 2020, and the audit process.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Statutory Audit',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for private limited companies even with zero turnover?</h3>
                        <div class="faq-expanded__a"><p>Yes. Statutory audit is mandatory for every company registered in India under Section 139 of the Companies Act 2013, regardless of turnover, profit, or operational status. Even a newly incorporated company with zero transactions must appoint a statutory auditor and have its accounts audited. There is no turnover exemption for companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who appoints the statutory auditor of a company in India?</h3>
                        <div class="faq-expanded__a"><p>For the first auditor, the Board of Directors appoints within 30 days of incorporation per Section 139(6). If Board fails, shareholders appoint at EGM within 90 days. Subsequent auditors are appointed by shareholders at AGM for a 5-year term (individual) or 10-year term (firm). Form ADT-1 must be filed with ROC within 15 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for not conducting statutory audit in India?</h3>
                        <div class="faq-expanded__a"><p>Under Section 147 of the Companies Act 2013, the company faces a fine of INR 25,000 to INR 5,00,000. Officers in default face imprisonment up to 1 year, or fine of INR 10,000 to INR 1,00,000, or both. Directors may also face disqualification for continued non-compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is auditor rotation and does it apply to my company?</h3>
                        <div class="faq-expanded__a"><p>Auditor rotation under Section 139(2) applies to listed companies and prescribed unlisted public companies. Individual auditors cannot serve more than 5 consecutive years; audit firms cannot serve more than 10 consecutive years. After maximum term, a 5-year cooling-off period applies. Most private limited companies are exempt.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is CARO 2020 and does it apply to my company?</h3>
                        <div class="faq-expanded__a"><p>CARO 2020 requires statutory auditors to report on specific matters including fixed assets, inventory, loans, statutory dues, and fraud. It does NOT apply to OPCs, small companies, and private companies where paid-up capital plus reserves do not exceed INR 1 crore, borrowings do not exceed INR 1 crore, and revenue is below INR 10 crore.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the deadline for statutory audit and filing with ROC?</h3>
                        <div class="faq-expanded__a"><p>AGM must be held within 6 months of financial year end (by 30 September for March year-end). Form AOC-4 (audited financials) must be filed with ROC within 30 days of AGM (typically by 30 October). Late AOC-4 filing attracts INR 100 per day per document.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Kya har private company ka statutory audit hona zaroori hai?</h3>
                        <div class="faq-expanded__a"><p>Haan, bilkul. Section 139, Companies Act 2013 ke under India mein registered har company ka har saal statutory audit karna zaroori hai, chahe turnover zero ho. Koi turnover limit nahi hai companies ke liye. Non-compliance par Section 147 ke under INR 25,000 se INR 5,00,000 tak penalty lag sakti hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is statutory audit?</strong> Mandatory annual examination of a company's financial statements by an independent CA under Section 139, Companies Act 2013, to ensure they present a true and fair view.</p>
<p><strong>Is it mandatory for all companies?</strong> Yes. Every company registered in India must conduct annual statutory audit, regardless of turnover, profit, or size.</p>
<p><strong>What is the penalty?</strong> Section 147: INR 25,000 to INR 5,00,000 for company; officers face imprisonment up to 1 year or fine INR 10,000 to INR 1,00,000 or both.</p>
<p><strong>Who can conduct it?</strong> Only a practicing CA or CA firm where majority of partners are practicing CAs - Section 141, Companies Act 2013.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AGM Deadline Approaching - Appoint Your Auditor Now</h2>
            <div class="content-text">
                
                <p><strong>Key statutory audit deadlines for companies with April-March financial year:</strong></p>
<ul>
<li><strong>30 days from incorporation:</strong> Board must appoint first statutory auditor; ADT-1 to be filed with ROC</li>
<li><strong>30 September:</strong> AGM must be held (6 months from 31 March); statutory audit must be complete before AGM</li>
<li><strong>Within 30 days of AGM (by ~30 October):</strong> Form AOC-4 to be filed with ROC</li>
<li><strong>Within 15 days of AGM appointment:</strong> Form ADT-1 to be filed confirming auditor</li>
</ul>
<p>Late AOC-4 filing attracts INR 100 per day. Failure to conduct statutory audit attracts Section 147 penalties of INR 25,000 to INR 5,00,000.</p>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Statutory%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> - contact Patron Accounting at least 2-3 months before your AGM.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Appoint Patron Accounting as Your Statutory Auditor - Starting at INR 14,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Statutory audit is the foundation of financial credibility for every company in India. Whether you are a newly incorporated startup conducting your first audit, a growing mid-size company navigating CARO 2020 reporting, or a large entity managing auditor rotation compliance, the quality of your statutory audit directly affects your regulatory standing, investor confidence, and access to banking and credit.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting brings ICAI SA-compliant audit methodology, UDIN-verified reports, sector expertise, and a service model built around your deadlines. We go beyond sign-off - our engagement includes management letters, proactive ROC filing support, and advisory depth that transforms compliance into better governance.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Statutory%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20Service&body=Hello%2C%20I%20just%20visited%20your%20Statutory%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Statutory Audit Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get your mandatory statutory audit done by expert CAs at Patron Accounting offices across India.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Statutory Audit Service by City</div><div class="pa-block-sub">Expert CA audit from Patron Accounting</div><div class="pa-city-grid">
<a href="/statutory-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/statutory-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/statutory-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/statutory-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end audit and compliance services</div><div class="pa-cross-grid">
<a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit Service</div><div class="pa-card-sub">India</div></div></a>
<a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit Service</div><div class="pa-card-sub">India</div></div></a>
<a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit Service</div><div class="pa-card-sub">India</div></div></a>
<a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually to reflect changes in Companies Act 2013 amendments, CARO notification updates, NFRA rules, ICAI SA revisions, and auditor rotation rule changes. Freshness Tier 2 - Annual Review.</p>
        </div>
    </div>
</section>


</main>






<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
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
