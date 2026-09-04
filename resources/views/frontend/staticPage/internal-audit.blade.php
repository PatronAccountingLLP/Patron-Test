

@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush








@section('meta')
    <title>Internal Audit Services India - Process, Scope & Reporting</title>
    <meta name="description" content="Internal audit under Section 138 of Companies Act 2013. Mandatory for companies with INR 200 Cr+ turnover. Expert CA team. Starting at INR 9,999.">
    <link rel="canonical" href="/internal-audit">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Internal Audit Services India - Process, Scope & Reporting">
    <meta property="og:description" content="Internal audit under Section 138 of Companies Act 2013. Mandatory for companies with INR 200 Cr+ turnover. Expert CA team. Starting at INR 9,999.">
    <meta property="og:url" content="/internal-audit">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Internal Audit Services India - Process, Scope & Reporting">
    <meta name="twitter:description" content="Internal audit under Section 138 of Companies Act 2013. Mandatory for companies with INR 200 Cr+ turnover. Expert CA team. Starting at INR 9,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Internal Audit Service in India",
          "description": "Internal audit under Section 138 of Companies Act 2013. Mandatory for companies with INR 200 Cr+ turnover. Expert CA team. Starting at INR 9,999.",
          "url": "https://www.patronaccounting.com/internal-audit",
          "serviceType": "Internal Audit Service in India",
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
              "name": "Internal Audit Service in India",
              "item": "https://www.patronaccounting.com/internal-audit"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is internal audit mandatory for private limited companies in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Internal audit is mandatory for private companies under Section 138 if turnover is INR 200 crore or more, or outstanding bank borrowings exceed INR 100 crore in the preceding financial year per Rule 13, Companies (Accounts) Rules 2014. Companies below these thresholds may conduct internal audit voluntarily."
              }
            },
            {
              "@type": "Question",
              "name": "Who can be appointed as internal auditor in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 138(1), the internal auditor must be a Chartered Accountant (CA), Cost and Management Accountant (CMA), or other professional as decided by the Board. Section 144(b) prohibits the statutory auditor from being appointed as internal auditor. The auditor may be an employee or external firm."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not conducting mandatory internal audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 450, non-compliance attracts a fine up to INR 10,000 initially, plus INR 1,000 per day for continuing default. The offence is compoundable - the company can approach the Registrar of Companies to settle without court proceedings."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between internal audit and statutory audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Internal audit evaluates internal controls and risk management for management, mandated under Section 138. Statutory audit is mandatory for all companies under Section 143 and results in an external auditor's opinion on financial statements. Section 144(b) prohibits the same person from performing both."
              }
            },
            {
              "@type": "Question",
              "name": "Can a company outsource its internal audit to a CA firm?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Rule 13 allows the internal auditor to be external to the company. Outsourcing to an external CA firm is fully permissible under the Companies Act 2013, providing independence, specialised expertise, and cost efficiency compared to maintaining an in-house team."
              }
            },
            {
              "@type": "Question",
              "name": "How often should internal audit be conducted?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 138 and Rule 13 do not prescribe a fixed frequency. The Audit Committee or Board determines frequency based on size and risk profile. Most companies conduct quarterly, half-yearly, or annual audits. Listed companies typically do quarterly audits aligned with Audit Committee meetings."
              }
            },
            {
              "@type": "Question",
              "name": "Kya har private company ko internal audit karna zaroori hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Nahi. Section 138 ke under private companies ke liye internal audit tabhi mandatory hai jab turnover INR 200 crore ya usse zyada ho, ya banks se outstanding loans INR 100 crore se zyada ho preceding financial year mein. Baaki private companies ke liye voluntary hai. Quick Answers What is internal audit? Independent assurance activity evaluating internal controls, risk management, and governance to help management improve operations. Under which section is it required? Section 138, Companies Act 2013, read with Rule 13, Companies (Accounts) Rules 2014. Turnover limit for private companies? INR 200 crore or more, or bank borrowings exceeding INR 100 crore. Can statutory auditor do internal audit? No. Section 144(b) prohibits this to maintain independence. Patron Accounting starting fee? INR 9,999 (Exl GST and Govt. Charges)."
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
                        Internal Audit Service in India: Mandate, Process and Expert CA Support
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 138 Mandatory:</span> Mandatory under Section 138, Companies Act 2013 for listed companies and prescribed private and public companies</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Risk-Based Approach:</span> Covering financial controls, operational efficiency, compliance, and fraud detection using risk-prioritised methodology</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Expert CA-Led Team:</span> Cross-industry experience across manufacturing, IT, NBFC, retail, healthcare, and e-commerce sectors</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pan-India Coverage:</span> Four offices in Pune, Mumbai, Delhi, and Bengaluru delivering outsourced and co-sourced internal audit solutions</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ clients | 1,000+ audit cycles completed | 4 offices across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Internal%20Audit%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Internal Audit',
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
    'ctaText'    => 'Join 500+ companies who trust Patron Accounting for risk-based internal audit services.',
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
            <h2 class="section-title">Internal Audit Service - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Internal Audit Services at a Glance</strong></p>
                    <p>Internal audit under Section 138, Companies Act 2013 is mandatory for listed companies, unlisted public companies meeting prescribed thresholds, and private companies with turnover of INR 200 crore or more or borrowings exceeding INR 100 crore. The internal auditor must be a CA, CMA, or other professional approved by the Board. Non-compliance attracts penalty under Section 450. Patron Accounting provides risk-based internal audit starting at INR 9,999.</p>
                </div>
                <p>Internal audit is an independent, objective assurance and consulting activity that helps organisations improve operations, manage risk, and maintain strong governance. Under Section 138 of the Companies Act 2013, specific classes of companies are legally required to appoint a qualified internal auditor. For many others, internal audit is a strategic choice that protects assets and drives efficiency.</p>
                <p>Patron Accounting's internal audit team combines regulatory expertise with a risk-based methodology to deliver findings that are practical, actionable, and directly aligned with your business objectives. Our engagement includes Charter preparation, Audit Committee-ready reports, and Management Action Plan tracking.</p>
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
                <h2 class="section-title">What is Internal Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Internal audit</strong> is a risk management and governance function independently performed to provide management and the board with objective assurance that internal controls, compliance systems, and operational processes are working effectively. It is performed at the direction of management and is distinct from statutory or external audit.</p>
<p>Under ICAI Standards on Internal Audit (SIA), internal audit encompasses evaluation of financial controls, operational procedures, compliance with laws and regulations, and safeguarding of assets. The internal auditor reports findings to the Audit Committee or Board and recommends improvements without being responsible for implementing them.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Internal Audit:</strong></p>
                    <p><strong>Internal Audit vs Statutory Audit</strong> - Internal audit is voluntary or mandated by Section 138, focuses on risk and operational controls, and is conducted for management. Statutory audit is mandatory for all companies, focuses on financial statement accuracy, and the auditor issues an opinion for stakeholders.</p>
<p><strong>Co-sourced vs Outsourced</strong> - Co-sourced means a CA firm supplements the in-house team. Outsourced means the entire function is conducted by an external firm. Both are permissible under Rule 13.</p>
<p><strong>Risk-Based Audit</strong> - Prioritises audit resources on areas of highest business risk rather than following a fixed checklist. Aligned with ICAI SIA and IIA framework.</p>
<p><strong>Section 144(b)</strong> - Statutory auditor cannot be appointed as internal auditor - independence must be maintained.</p>
<p><strong>Section 450</strong> - Penalty for non-compliance: INR 10,000 initial + INR 1,000 per day continuing default.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Risk chart -->
<rect x="50" y="40" width="25" height="60" rx="3" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="62" y="75" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">HIGH</text>
<rect x="85" y="55" width="25" height="45" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="97" y="82" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">MED</text>
<rect x="120" y="70" width="25" height="30" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="132" y="89" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">LOW</text>
<!-- Section 138 badge -->
<rect x="50" y="108" width="40" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="70" y="120" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">S.138</text>
<!-- Verified -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Internal Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 138</span>
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
            <h2 class="section-title">Who Must Get Internal Audit Done - Section 138 Applicability</h2>
            <div class="content-text">
                
                <p><strong>1. All Listed Companies</strong> - Every company listed on any recognised stock exchange must appoint an internal auditor. No threshold criteria.</p>
<p><strong>2. Unlisted Public Companies - Any One Criterion:</strong></p>
<ul>
<li>Turnover of INR 200 crore or more in preceding FY</li>
<li>Paid-up share capital of INR 50 crore or more</li>
<li>Outstanding bank loans/borrowings exceeding INR 100 crore at any point</li>
<li>Outstanding deposits of INR 25 crore or more</li>
</ul>
<p><strong>3. Private Companies - Either Criterion:</strong></p>
<ul>
<li>Turnover of INR 200 crore or more in preceding FY</li>
<li>Outstanding bank loans/borrowings exceeding INR 100 crore</li>
</ul>
<p><strong>Exemptions:</strong> OPCs, small companies (paid-up capital below INR 50 lakhs and turnover below INR 2 crores), and dormant companies are exempt. Companies below thresholds may voluntarily commission internal audit.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Internal Audit Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Risk-Based Internal Audit</td><td>Comprehensive audit of financial controls, operational processes, IT systems, and compliance using risk-prioritised approach aligned with ICAI SIA standards</td></tr>
<tr><td>Section 138 Compliance Audit</td><td>Structured annual or periodic engagement specifically to meet mandatory Section 138 requirements with complete Audit Committee reporting</td></tr>
<tr><td>Outsourced Internal Audit Function</td><td>End-to-end management of the internal audit function for companies preferring full outsourcing to an external CA firm</td></tr>
<tr><td>Co-sourced Internal Audit</td><td>Supplementary audit support for companies with in-house teams needing specialised expertise in IT audit, fraud investigation, or regulatory compliance</td></tr>
<tr><td>Process and Operational Audit</td><td>Focused review of specific business processes - procurement, inventory, payroll, accounts payable/receivable - to identify inefficiencies</td></tr>
<tr><td>Fraud Risk Assessment</td><td>Identification of fraud risks, investigation of red flags, and development of preventive controls to protect company assets</td></tr>

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
            <h2 class="section-title">7-Step Internal Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Aligned with ICAI SIA Standards and IIA Global Standards. Section 138 mandates reporting to the Board. Rule 13, Companies (Accounts) Rules 2014 specifies scope formulation by Audit Committee in consultation with internal auditor.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Scope and Objective Setting</h3><p class="step-description">The Audit Committee or Board defines audit scope, areas, frequency (quarterly, half-yearly, or annual), and reporting lines. Documented in a formal Internal Audit Charter.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Charter prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scope defined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Charter Set</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Risk Assessment and Audit Planning</h3><p class="step-description">Comprehensive risk assessment identifies business risks by function - finance, operations, HR, IT, procurement, compliance. Risk-ranked audit plan prepared prioritising high-risk areas.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Risks ranked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Plan approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="20" height="35" rx="3" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/><text x="35" y="45" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">HIGH</text><rect x="50" y="30" width="20" height="30" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="48" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">MED</text><rect x="75" y="38" width="20" height="22" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="85" y="52" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">LOW</text></svg></div><span class="illustration-label">Risk Mapped</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Audit Fieldwork and Evidence Collection</h3><p class="step-description">Review records, test controls, conduct process walkthroughs, interview staff, sample transactions, and verify compliance with Section 138 and applicable regulations.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fieldwork complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Evidence collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="65" y="20" width="30" height="22" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="25" y="48" width="30" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><rect x="65" y="48" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Observation and Gap Analysis</h3><p class="step-description">Findings documented with risk ratings (High/Medium/Low), root cause analysis, and potential financial or compliance impact. Each observation benchmarked against applicable law and best practice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Gaps identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Impact assessed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="42" r="14" fill="#FEE2E2" stroke="#EF4444" stroke-width="1.2"/><text x="45" y="46" font-size="8" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">H</text><circle cx="75" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="75" y="46" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">M</text><path d="M35 72l15-10 15 15 15-8 15 10" stroke="#14365F" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div><span class="illustration-label">Analyzed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Draft Report and Management Response</h3><p class="step-description">Draft internal audit report shared with management for response. Management's corrective action commitments recorded against each observation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Draft reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Responses recorded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><path d="M62 55l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Final Report to Audit Committee</h3><p class="step-description">Finalised report with management responses presented to Audit Committee or Board as required under Section 138, Companies Act 2013.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Report submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board informed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">AC</text><rect x="35" y="72" width="50" height="14" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="82" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SUBMITTED</text></svg></div><span class="illustration-label">Reported</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Follow-Up and Closure</h3><p class="step-description">Track implementation of recommendations in the MAP Tracker across subsequent audit cycles. Ensure agreed corrective actions completed on schedule.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MAP tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Actions closed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M36 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="65" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M61 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="90" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M86 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Closed</span><span class="step-number-large">07</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Internal Audit</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
<tr><td>Incorporation documents + most recent financial statements</td><td>Entity background and financial overview</td></tr>
<tr><td>Board resolutions appointing internal auditor and defining scope</td><td>Mandate and authority documentation</td></tr>
<tr><td>Previous internal audit reports + management action plans</td><td>Continuity and follow-up verification</td></tr>
<tr><td>Organisational chart + list of key processes</td><td>Audit universe and risk mapping</td></tr>
<tr><td>ERP / accounting system access</td><td>Transaction testing and data analytics</td></tr>
<tr><td>Significant contracts, vendor/customer agreements</td><td>Commercial risk and compliance review</td></tr>
<tr><td>GST returns, TDS challans, income tax filings</td><td>Tax compliance verification</td></tr>
<tr><td>Bank statements + loan schedules</td><td>Financial exposure assessment</td></tr>
<tr><td>HR records: payroll data, attendance, employee registers</td><td>Payroll audit and HR compliance</td></tr>
<tr><td>Fixed asset register + inventory records</td><td>Asset verification and stock audit</td></tr>
<tr><td>Internal policies, SOPs, process manuals</td><td>Control framework assessment</td></tr>
<tr><td>Regulatory notices, pending legal matters</td><td>Contingent liability and compliance risk</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Internal Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Management resistance or limited cooperation</td><td>Audit seen as adversarial</td><td>Structured onboarding, clear communication of audit value, and confidential management feedback channels ensure cooperation at all levels</td></tr>
<tr><td>Rapidly changing regulatory environment</td><td>Audit scope becomes outdated</td><td>Dedicated compliance team tracks amendments to Companies Act, SEBI regulations, GST laws, and ICAI standards continuously</td></tr>
<tr><td>Limited in-house audit expertise</td><td>Cannot build team cost-effectively</td><td>Full outsourcing model provides CA-qualified team with no in-house investment in staffing, training, or audit software</td></tr>
<tr><td>Audit findings not acted upon</td><td>Recommendations remain on paper</td><td>Management Action Plan (MAP) Tracker with defined timelines and follow-up audit rounds ensures implementation</td></tr>

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
            <h2 class="section-title">Internal Audit Fees in India 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>SME Annual Internal Audit (single cycle, 2-3 areas)</td><td>INR 25,000 per cycle</td></tr>
<tr><td>Mid-Size Quarterly Audit (4 cycles/year, 5-8 areas)</td><td>INR 75,000 per quarter</td></tr>
<tr><td>Outsourced Internal Audit Function (complete)</td><td>Custom quote based on scope</td></tr>
<tr><td>Fraud Risk Investigation</td><td>INR 50,000 onwards</td></tr>
<tr><td>IT / Systems Audit</td><td>INR 40,000 per engagement</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Internal Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Internal Audit Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>SME single-cycle annual audit (basic scope)</td><td>5-10 business days</td></tr>
<tr><td>Mid-size company quarterly cycle</td><td>10-15 business days per cycle</td></tr>
<tr><td>Large company comprehensive risk-based audit</td><td>3-6 weeks per cycle</td></tr>
<tr><td>Fraud investigation (targeted)</td><td>2-4 weeks</td></tr>
<tr><td>IT / Systems audit</td><td>1-2 weeks per engagement</td></tr>
<tr><td>Internal Audit Charter setup (first engagement)</td><td>5-7 additional business days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> First engagements require additional time for Charter preparation and risk assessment setup. Patron Accounting uses a project management approach to minimise disruption to day-to-day operations.</p>

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
            <h2 class="section-title">Why Outsource Internal Audit to Patron Accounting?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Section 138 Compliance</h3><p class="feature-text">Fulfil mandatory obligations and avoid Section 450 penalties (up to INR 10,000 initial + INR 1,000/day continuing default).</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Independent Findings</h3><p class="feature-text">External CA firm delivers bias-free observations unlike in-house staff who may face organisational pressure.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Cost Efficiency</h3><p class="feature-text">Eliminates cost of hiring, training, and retaining dedicated audit staff, software licences, and infrastructure.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg></div><h3 class="feature-title">Fraud Prevention</h3><p class="feature-text">Risk-based methodology identifies fraud red flags before they escalate, protecting shareholders and management.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div><h3 class="feature-title">Operational Improvement</h3><p class="feature-text">Process audits uncover inefficiencies, cost leakages, and control gaps that translate directly into bottom-line savings.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><h3 class="feature-title">Cross-Industry Expertise</h3><p class="feature-text">Experience across manufacturing, IT/ITES, NBFC, retail, healthcare, construction, e-commerce, and NGO sectors.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>500+ Clients | 1,000+ Audit Cycles | 15+ Years Experience | Offices in Pune, Mumbai, Delhi, Bengaluru | 4.8/5 Client Rating | 10+ Industries Served</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Internal Audit vs Outsourced to Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>In-House Internal Audit</th><th>Outsourced to Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Cost</td><td>High - salary, benefits, training, software</td><td>Cost-effective - pay per scope, no fixed overhead</td></tr>
<tr><td>Independence</td><td>Risk of management influence on findings</td><td>Fully independent CA firm - objective reporting</td></tr>
<tr><td>Expertise Depth</td><td>Limited to individual auditor's background</td><td>Cross-industry CA team with specialist expertise</td></tr>
<tr><td>Regulatory Currency</td><td>Dependent on individual's continuing education</td><td>Team tracks regulatory changes continuously</td></tr>
<tr><td>Scalability</td><td>Fixed capacity - cannot scale for complex audits</td><td>Flexible team size based on audit scope</td></tr>
<tr><td>Section 138 Compliance</td><td>Meets requirements if auditor is qualified</td><td>Full Charter, reporting, MAP Tracker included</td></tr>
<tr><td>Board/Audit Committee Reporting</td><td>Variable quality</td><td>Standardised Audit Committee-ready reports</td></tr>

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
<li><a href="/statutory-audit">Statutory Audit Services</a> - mandatory external audit for all companies under Companies Act 2013. Independent from internal audit per Section 144(b).</li>
<li><a href="/tax-audit">Tax Audit Services</a> - Section 44AB audit for businesses above turnover thresholds. Coordinated with internal audit.</li>
<li><a href="/gst-audit">GST Audit Services</a> - GST compliance review and GSTR-9C reconciliation. Often bundled with internal audit scope.</li>
<li><a href="/secretarial-audit">Secretarial Audit Services</a> - Section 204 company law compliance audit. Complements internal audit governance scope.</li>
<li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - comprehensive annual compliance including MCA filings and board meetings.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Internal Audit in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Law / Standard</th><th>Section</th><th>Provision</th></tr></thead><tbody>
<tr><td>Companies Act 2013</td><td>Section 138(1)</td><td>Mandates appointment of internal auditor for prescribed classes. Auditor may be CA, CMA, or other professional as decided by Board.</td></tr>
<tr><td>Companies Act 2013</td><td>Section 144(b)</td><td>Statutory auditor cannot be appointed as internal auditor - maintains independence of external audit.</td></tr>
<tr><td>Companies Act 2013</td><td>Section 450</td><td>Penalty: INR 10,000 initial + INR 1,000 per day for continuing default. Compoundable offence.</td></tr>
<tr><td>Companies (Accounts) Rules 2014</td><td>Rule 13</td><td>Specifies classes of companies requiring internal audit. Scope and methodology formulated by Audit Committee/Board in consultation with internal auditor. Effective 1 April 2014.</td></tr>
<tr><td>ICAI SIA Standards</td><td>SIA 1-20</td><td>Standards on Internal Audit governing scope, methodology, documentation, and reporting.</td></tr>
<tr><td>SEBI LODR 2015</td><td>Regulation 18</td><td>Audit Committee of listed companies to review internal audit findings. Reports submitted to Audit Committee.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Link:</strong> <a href="https://ca2013.com/138-internal-audit/" target="_blank" rel="noopener">Companies Act 2013 - Section 138 (CAIRR)</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions About Internal Audit</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about internal audit applicability, auditor eligibility, penalties, and the audit process under Section 138.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Internal Audit',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is internal audit mandatory for private limited companies in India?</h3>
                        <div class="faq-expanded__a"><p>Internal audit is mandatory for private companies under Section 138 if turnover is INR 200 crore or more, or outstanding bank borrowings exceed INR 100 crore in the preceding financial year per Rule 13, Companies (Accounts) Rules 2014. Companies below these thresholds may conduct internal audit voluntarily.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who can be appointed as internal auditor in India?</h3>
                        <div class="faq-expanded__a"><p>Under Section 138(1), the internal auditor must be a Chartered Accountant (CA), Cost and Management Accountant (CMA), or other professional as decided by the Board. Section 144(b) prohibits the statutory auditor from being appointed as internal auditor. The auditor may be an employee or external firm.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for not conducting mandatory internal audit?</h3>
                        <div class="faq-expanded__a"><p>Under Section 450, non-compliance attracts a fine up to INR 10,000 initially, plus INR 1,000 per day for continuing default. The offence is compoundable - the company can approach the Registrar of Companies to settle without court proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between internal audit and statutory audit?</h3>
                        <div class="faq-expanded__a"><p>Internal audit evaluates internal controls and risk management for management, mandated under Section 138. Statutory audit is mandatory for all companies under Section 143 and results in an external auditor's opinion on financial statements. Section 144(b) prohibits the same person from performing both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a company outsource its internal audit to a CA firm?</h3>
                        <div class="faq-expanded__a"><p>Yes. Rule 13 allows the internal auditor to be external to the company. Outsourcing to an external CA firm is fully permissible under the Companies Act 2013, providing independence, specialised expertise, and cost efficiency compared to maintaining an in-house team.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How often should internal audit be conducted?</h3>
                        <div class="faq-expanded__a"><p>Section 138 and Rule 13 do not prescribe a fixed frequency. The Audit Committee or Board determines frequency based on size and risk profile. Most companies conduct quarterly, half-yearly, or annual audits. Listed companies typically do quarterly audits aligned with Audit Committee meetings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Kya har private company ko internal audit karna zaroori hai?</h3>
                        <div class="faq-expanded__a"><p>Nahi. Section 138 ke under private companies ke liye internal audit tabhi mandatory hai jab turnover INR 200 crore ya usse zyada ho, ya banks se outstanding loans INR 100 crore se zyada ho preceding financial year mein. Baaki private companies ke liye voluntary hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is internal audit?</strong> Independent assurance activity evaluating internal controls, risk management, and governance to help management improve operations.</p>
<p><strong>Under which section is it required?</strong> Section 138, Companies Act 2013, read with Rule 13, Companies (Accounts) Rules 2014.</p>
<p><strong>Turnover limit for private companies?</strong> INR 200 crore or more, or bank borrowings exceeding INR 100 crore.</p>
<p><strong>Can statutory auditor do internal audit?</strong> No. Section 144(b) prohibits this to maintain independence.</p>
<p><strong>Patron Accounting starting fee?</strong> INR 9,999 (Exl GST and Govt. Charges).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Crossed the Section 138 Threshold? Act Now</h2>
            <div class="content-text">
                
                <p><strong>If your company meets any Section 138 mandatory criteria based on the preceding financial year, compliance is required immediately.</strong></p>
<ul>
<li><strong>Turnover crossed INR 200 crore:</strong> Internal auditor appointment mandatory</li>
<li><strong>Bank borrowings exceeded INR 100 crore:</strong> Compliance triggered immediately</li>
<li><strong>IPO or listing on stock exchange:</strong> Internal audit required from listing date</li>
<li><strong>Section 450 penalty:</strong> INR 10,000 initial + INR 1,000 per day for continuing non-compliance</li>
</ul>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free compliance review.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Internal Audit Engagement - Starting at INR 9,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Internal audit is no longer just a statutory box to tick. For businesses operating in India's compliance-sensitive environment, a well-structured internal audit function is a competitive advantage. It prevents fraud, identifies cost leakages, strengthens governance, and builds credibility that investors and lenders demand.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's internal audit team brings CA-qualified expertise, cross-industry experience, and a risk-based methodology that goes beyond compliance to deliver measurable business value. Whether you need to meet mandatory Section 138 requirements or elevate an existing audit function, we provide the Charter, the reports, and the follow-through your Audit Committee can rely on.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Internal%20Audit%20Service&body=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Internal Audit Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get your mandatory Section 138 internal audit done by expert CAs at Patron Accounting offices across India.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Internal Audit Service by City</div><div class="pa-block-sub">Expert Section 138 compliance from Patron Accounting</div><div class="pa-city-grid">
<a href="/internal-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/internal-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/internal-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/internal-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/internal-audit/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<a href="/internal-audit/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<a href="/internal-audit/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/internal-audit/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end audit and compliance services</div><div class="pa-cross-grid">
<a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit Service</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed annually to reflect amendments to Section 138, Rule 13, ICAI SIA revisions, SEBI LODR changes, and MCA notification updates. Freshness Tier 2 - Annual Review.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
