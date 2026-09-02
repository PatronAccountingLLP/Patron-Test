
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Secretarial Audit - MR-3 Report, Process & Companies Act</title>
    <meta name="description" content="Expert secretarial audit services under Section 204, Companies Act 2013. We handle Form MR-3, SEBI LODR Reg. 24A. Starting at INR 9,999.">
    <link rel="canonical" href="/secretarial-audit">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Secretarial Audit - MR-3 Report, Process & Companies Act">
    <meta property="og:description" content="Expert secretarial audit services under Section 204, Companies Act 2013. We handle Form MR-3, SEBI LODR Reg. 24A. Starting at INR 9,999.">
    <meta property="og:url" content="/secretarial-audit">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Secretarial Audit - MR-3 Report, Process & Companies Act">
    <meta name="twitter:description" content="Expert secretarial audit services under Section 204, Companies Act 2013. We handle Form MR-3, SEBI LODR Reg. 24A. Starting at INR 9,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Secretarial Audit in India Guide",
          "description": "Expert secretarial audit services under Section 204, Companies Act 2013. We handle Form MR-3, SEBI LODR Reg. 24A. Starting at INR 9,999.",
          "url": "https://www.patronaccounting.com/secretarial-audit",
          "serviceType": "Secretarial Audit in India Guide",
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
              "name": "Secretarial Audit in India Guide",
              "item": "https://www.patronaccounting.com/secretarial-audit"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is secretarial audit and who needs to conduct it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Secretarial Audit is an independent compliance audit of non-financial aspects of a company's operations - verifying adherence to Companies Act, SEBI regulations, FEMA, and other applicable laws - conducted by a Company Secretary in Practice and reported in Form MR-3 under Section 204 of the Companies Act, 2013. It is mandatory for all listed companies, public companies with paid-up capital above INR 50 crore or turnover above INR 250 crore or outstanding loans above INR 100 crore, and prescribed private companies."
              }
            },
            {
              "@type": "Question",
              "name": "Who can conduct secretarial audit in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Only a Company Secretary in Practice (PCS) - a member of ICSI holding a valid Certificate of Practice - can conduct Secretarial Audit and issue Form MR-3. For listed entities from April 1, 2025 (SEBI LODR Third Amendment Regulations, 2024), the Secretarial Auditor must additionally be a Peer Reviewed Company Secretary with a valid peer review certificate from ICSI."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form MR-3 and when must it be submitted?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form MR-3 is the prescribed format for the Secretarial Audit Report under Rule 9(2) of the Companies (Appointment and Remuneration of Managerial Personnel) Rules, 2014. It must be prepared by a CS in Practice and annexed to the company's Board's Report (under Section 134). The Board's Report is typically presented at the AGM. There is no separate due date for MR-3 - it follows the Board's Report timeline."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between secretarial audit and statutory audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Statutory Audit (under Companies Act and Income Tax Act) is a financial audit conducted by a Chartered Accountant to verify financial statements. Secretarial Audit is a non-financial compliance audit conducted by a CS in Practice to verify legal and procedural compliance - board meetings, ROC filings, secretarial standards, SEBI regulations, and applicable laws. Both reports are annexed to the Board's Report."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not conducting secretarial audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "If a company or its officers default on Section 204, each defaulter - the company and every officer in default - is liable to a penalty of INR 2 lakh [Section 204(4) as amended by Companies (Amendment) Act, 2020, effective 21.12.2020 via S.O. 4646(E)]. For listed companies, SEBI may additionally impose penalties for non-submission of ASCR under Regulation 24A."
              }
            },
            {
              "@type": "Question",
              "name": "What does the SEBI LODR 2024 amendment mean for secretarial audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SEBI (LODR) Third Amendment Regulations, 2024 (dated 12.12.2024, effective April 1, 2025) significantly strengthened secretarial audit for listed companies: (1) Only Peer Reviewed CS can be appointed; (2) Appointment requires AGM shareholder approval; (3) 5-year cooling-off period before reappointment; (4) Service restrictions to prevent conflict of interest."
              }
            },
            {
              "@type": "Question",
              "name": "Secretarial audit meri company ke liye zaroori hai kya?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Agar aapki company listed hai, ya public company hai jiska paid-up capital INR 50 crore se zyada hai, ya turnover INR 250 crore se zyada hai, ya outstanding loans INR 100 crore se zyada hain, to Section 204 ke under secretarial audit mandatory hai. Sirf Company Secretary in Practice hi Form MR-3 issue kar sakta hai. Patron Accounting ki CS team se baat karein - hum aapki company ki applicability check karte hain. Quick Answers What is secretarial audit? Independent compliance audit under Section 204, Companies Act 2013, conducted by a CS in Practice to verify a company's adherence to applicable laws. Report issued in Form MR-3. Who conducts secretarial audit? Only a Company Secretary in Practice (PCS) with ICSI Certificate of Practice. For listed entities from April 1, 2025, the PCS must hold a valid ICSI peer review certificate. Is secretarial audit mandatory? Yes, for listed companies, public companies (paid-up capital above INR 50 crore or turnover above INR 250 crore or loans above INR 100 crore), and certain private companies. What is Form MR-3? Prescribed format for Secretarial Audit Report under Rule 9 of Companies (Appointment and Remuneration) Rules, 2014. Annexed to Board's Report under Section 134(3). Secretarial audit penalty amount? INR 2 lakh per defaulter under Section 204(4), as amended by Companies (Amendment) Act, 2020, effective December 21, 2020."
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
                        Secretarial Audit Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Form MR-3 Secretarial Audit Report</strong>:</span> Under Section 204, Companies Act, 2013 for listed companies, public companies, and prescribed private companies - complete compliance review and report.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>SEBI LODR Regulation 24A Compliance</strong>:</span> Annual Secretarial Compliance Report (ASCR) for listed entities and material subsidiaries - updated for SEBI (LODR) Third Amendment Regulations 2024, effective April 1, 2025.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Comprehensive Governance Review</strong>:</span> Companies Act compliance, board procedures, secretarial standards SS-1 and SS-2, SEBI regulations, FEMA, and applicable industry laws - all covered.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Experienced CS and CA Team</strong>:</span> Offices in Pune, Mumbai, Bangalore, and Delhi - serving companies across India through qualified Company Secretaries in Practice.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 500+ Secretarial Audit Reports | 15+ Years CA & CS Experience | 4.8/5 Rating | Pune, Mumbai, Bangalore, Delhi</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Secretarial%20Audit&body=Hello%2C%0AI%20need%20a%20Secretarial%20Audit.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Secretarial%20Audit%20services%20for%20my%20company.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Secretarial Audit',
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
    'ctaText'    => 'Get expert Secretarial Audit support - Form MR-3, SEBI LODR Reg. 24A ASCR, corporate governance review. Starting at INR 9,999.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Applicability</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">7-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">DIY vs CS</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secretarial Audit Services in India - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Secretarial Audit Services at a Glance</strong></p>
                    <p>Secretarial Audit is a non-financial compliance audit conducted by an independent Company Secretary in Practice (PCS) under Section 204 of the Companies Act, 2013. It verifies compliance with Companies Act, SEBI regulations, FEMA, secretarial standards, and applicable laws. Report is issued in Form MR-3. Mandatory for listed companies, public companies (turnover INR 250 cr+ or paid-up capital INR 50 cr+ or loans INR 100 cr+), and prescribed private companies. Penalty for non-compliance: INR 2 lakh per defaulter. SEBI 2024 update: Peer Reviewed CS mandatory from April 1, 2025. Patron Accounting starting at INR 9,999 (Exl GST and Govt. Charges).</p>
                </div>
                <p>Secretarial Audit is a critical corporate governance tool that enables the board of directors to identify compliance gaps before they become costly penalties or regulatory actions. With the SEBI (LODR) Third Amendment Regulations, 2024 (effective April 1, 2025) introducing new requirements - including mandatory Peer Reviewed CS appointment, AGM-based auditor approval, and 5-year cooling-off periods - listed companies face significantly enhanced secretarial audit obligations.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Key Detail</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Law</strong></td><td>Section 204, Companies Act, 2013 + Rule 9 of Companies (Appointment & Remuneration) Rules, 2014</td></tr>
                        <tr><td><strong>Who Conducts It</strong></td><td>Only a Company Secretary in Practice (PCS) - member of ICSI holding Certificate of Practice</td></tr>
                        <tr><td><strong>Report Format</strong></td><td>Form MR-3 (Companies Act) | ASCR format (SEBI LODR Reg. 24A for listed entities)</td></tr>
                        <tr><td><strong>Applicability</strong></td><td>All listed companies, public co. (turnover INR 250 cr+ or paid-up capital INR 50 cr+ or loans INR 100 cr+), prescribed private companies</td></tr>
                        <tr><td><strong>Due Date</strong></td><td>Annexed to Board's Report before AGM; ASCR within 60 days of FY-end for listed entities</td></tr>
                        <tr><td><strong>Penalty (Section 204(4))</strong></td><td>INR 2 lakh per defaulter - company, each officer in default, and/or CS in Practice [Companies Amendment Act 2020]</td></tr>
                        <tr><td><strong>SEBI 2024 Update</strong></td><td>From April 1, 2025: only Peer Reviewed CS can be appointed for listed entities</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patron Accounting's experienced CS team navigates these evolving requirements, delivering accurate and timely Form MR-3 reports and Annual Secretarial Compliance Reports. Secretarial audit kya hota hai aur kaise hoti hai? Patron Accounting ki CS team se sampark karein - hum aapki company ki applicability check karte hain aur poori process manage karte hain.</p>
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
                <h2 class="section-title">What is Secretarial Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Secretarial Audit</strong> is the examination and independent verification of a company's compliance with applicable laws, rules, and regulations - covering non-financial aspects such as board procedures, filings, secretarial standards, and governance practices. It is defined and mandated under Section 204 of the Companies Act, 2013.</p>
                    <p>Unlike <a href="/statutory-audit">Statutory Audit</a> (which examines financial statements) or <a href="/gst-audit">GST Audit</a> (which examines tax records), Secretarial Audit focuses on legal and procedural compliance - including MCA filings, board meeting conduct, shareholder resolutions, SEBI regulations (for listed companies), FEMA compliance, and maintenance of statutory registers.</p>
                    <p>The Secretarial Audit Report is issued in Form MR-3 (prescribed under Rule 9 of the Companies (Appointment and Remuneration of Managerial Personnel) Rules, 2014) and must be annexed to the Board's Report prepared under Section 134(3) of the Companies Act, 2013.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Secretarial Audit:</strong></p>
                    <p><strong>PCS (CS in Practice):</strong> Member of ICSI holding a valid Certificate of Practice. Only a PCS can conduct Secretarial Audit and issue Form MR-3.</p>
                    <p><strong>Form MR-3:</strong> Prescribed format for the Secretarial Audit Report under Rule 9(2) of the Companies (Appointment and Remuneration) Rules, 2014.</p>
                    <p><strong>ASCR:</strong> Annual Secretarial Compliance Report for listed entities under SEBI LODR Regulation 24A, filed with stock exchanges within 60 days of FY-end.</p>
                    <p><strong>Material Subsidiary:</strong> Subsidiary whose income or net worth exceeds 10% of consolidated parent per SEBI LODR definition.</p>
                    <p><strong>Peer Reviewed CS:</strong> PCS holding valid ICSI peer review certificate. Mandatory for listed entities from April 1, 2025 per SEBI (LODR) Third Amendment Regulations, 2024.</p>
                    <p><strong>MGT-14:</strong> MCA form filed within 30 days of board resolution appointing a Secretarial Auditor [Rule 8, Companies (Meeting of Board and its Powers) Rules, 2014].</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Legal compliance document -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM MR-3</text>
                            <line x1="45" y1="48" x2="155" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                            <text x="100" y="45" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">SECRETARIAL AUDIT REPORT</text>
                            <path d="M50 60l5 5 10-10" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><text x="80" y="63" font-size="6" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">Companies Act</text>
                            <path d="M50 75l5 5 10-10" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><text x="80" y="78" font-size="6" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">SEBI LODR</text>
                            <path d="M50 90l5 5 10-10" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><text x="80" y="93" font-size="6" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">FEMA + SS-1/SS-2</text>
                            <rect x="120" y="55" width="40" height="50" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="140" y="75" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Section</text>
                            <text x="140" y="85" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">204</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CS in Practice Certified</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 204</span>
                        <strong>Form MR-3 Compliance</strong>
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
            <h2 class="section-title">Secretarial Audit Applicability - Who Needs It?</h2>
            <div class="content-text">
                
                <p>Section 204 of Companies Act, 2013 read with Rule 9 mandates secretarial audit for:</p>
                <p><strong>Mandatory Under Companies Act, 2013</strong></p>
                <ul>
                    <li><strong>Every Listed Company</strong> - mandatory under Section 204(1) regardless of turnover or capital</li>
                    <li><strong>Public Company - Paid-up Capital INR 50 crore+</strong> - as per latest audited financial statements</li>
                    <li><strong>Public Company - Turnover INR 250 crore+</strong> - aggregate value of sales and services</li>
                    <li><strong>Companies with Outstanding Loans INR 100 crore+</strong> - from banks or public financial institutions [Rule 9, amended 2020]</li>
                    <li><strong>Private Company - Subsidiary</strong> - private companies that are subsidiaries of public companies meeting above thresholds</li>
                </ul>
                <p style="margin-top:16px;"><strong>Mandatory Under SEBI LODR Regulation 24A</strong></p>
                <ul>
                    <li>Every listed entity and its material unlisted subsidiaries incorporated in India</li>
                    <li>ASCR must be submitted to stock exchanges within 60 days of FY-end</li>
                    <li>From April 1, 2025 (SEBI LODR Third Amendment 2024): Secretarial Auditor must be a Peer Reviewed CS</li>
                    <li>Appointment/reappointment/removal requires shareholder approval at AGM; 5-year cooling-off period</li>
                </ul>
                <p style="margin-top:16px;"><strong>Voluntary:</strong> Companies not covered under Section 204 may voluntarily undergo Secretarial Audit to strengthen governance, prepare for fundraising or IPO, or obtain independent compliance assurance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Secretarial Audit Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Form MR-3 Secretarial Audit Report</strong></td><td>End-to-end preparation under Section 204 covering all applicable laws, board procedures, MCA filings, and statutory records</td></tr>
                        <tr><td><strong>Annual Secretarial Compliance Report (ASCR)</strong></td><td>Preparation and submission for listed entities and material subsidiaries under SEBI LODR Regulation 24A</td></tr>
                        <tr><td><strong>Secretarial Compliance Health Check</strong></td><td>Pre-audit review of MCA filings, ROC compliance, board procedures, statutory registers to identify and fix gaps</td></tr>
                        <tr><td><strong>SEBI LODR Compliance Review</strong></td><td>Review of listed company obligations - RPT approvals, insider trading policy, board composition, quarterly/annual disclosures</td></tr>
                        <tr><td><strong>Peer Reviewed CS Appointment Support</strong></td><td>Identifying and appointing Peer Reviewed CS (mandatory for listed entities from April 1, 2025), MGT-14 filing, AGM resolution</td></tr>
                        <tr><td><strong>Qualification and Observation Response</strong></td><td>Drafting the Board's explanation for qualifications or adverse remarks in Form MR-3, as required under Section 204(3)</td></tr>

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
            <h2 class="section-title">Secretarial Audit Procedure - 7-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CS team follows a comprehensive 7-step process for every secretarial audit engagement - from applicability assessment to Form MR-3 issuance and Board Report support.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Applicability Assessment and Appointment</h3><p class="step-description">We assess whether Secretarial Audit is mandatory under Section 204 and/or SEBI LODR Regulation 24A. We prepare the board resolution for appointment and file MGT-14 with MCA within 30 days. For listed entities from April 1, 2025, only a Peer Reviewed CS can be appointed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Applicability confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MGT-14 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="25" height="6" rx="2" fill="#F5A623"/><line x1="30" y1="34" x2="90" y2="34" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="44" x2="85" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><circle cx="80" cy="55" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M76 55l3 3 5-5" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Appointed</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Scope Definition and Document Request</h3><p class="step-description">We issue a detailed document request covering all applicable laws: Companies Act 2013, SEBI LODR Regulations 2015, SEBI Insider Trading Regulations 2015, FEMA, Secretarial Standards SS-1 and SS-2, and industry-specific laws.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Document checklist issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Laws scope defined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="25" y1="25" x2="95" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="25" y1="38" x2="85" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="25" y1="48" x2="80" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="25" y1="58" x2="75" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.2"/></svg></div><span class="illustration-label">Scoped</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Review of MCA Filings and ROC Compliance</h3><p class="step-description">We examine all ROC filings during the audit period - AOC-4, MGT-7/7A, DIR-12, SH-7, CHG-1, INC-22A, and other forms. We verify timely filing and accuracy of all disclosures [Section 92, 117, 137].</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All ROC filings verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Timeliness confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="50" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="60" y="15" width="50" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="35" y="25" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">AOC-4</text><text x="35" y="38" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">MGT-7</text><text x="35" y="51" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">DIR-12</text><text x="85" y="38" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">MCA</text><text x="85" y="50" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Portal</text></svg></div><span class="illustration-label">Filings OK</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Board and General Meeting Compliance Review</h3><p class="step-description">We review board meeting conduct for SS-1 compliance: notice periods, quorum, agenda, voting, resolution recording. AGM compliance with SS-2: timelines, notice, e-voting, resolutions. Section 173 frequency verified.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SS-1/SS-2 compliance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Meeting frequency verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="35" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="42" y="34" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">BOARD</text><rect x="65" y="20" width="35" height="22" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="82" y="34" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">AGM</text><line x1="25" y1="52" x2="95" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="65" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">SS-1 + SS-2</text></svg></div><span class="illustration-label">Meetings OK</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Statutory Registers and Share Capital Review</h3><p class="step-description">We examine maintenance of all mandatory statutory registers: MGT-1, MBP-1, MBP-4, Register of Charges. Share capital transactions - allotments, transfers, buy-backs, ESOPs - verified against applicable sections.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Registers examined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Share capital verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="30" height="65" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="50" y="8" width="30" height="65" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="85" y="8" width="30" height="65" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><text x="30" y="45" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">MGT-1</text><text x="65" y="45" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">MBP-1</text><text x="100" y="45" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">MBP-4</text></svg></div><span class="illustration-label">Registers OK</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Laws Compliance Verification</h3><p class="step-description">We verify compliance across all applicable laws per Form MR-3 scope: Companies Act (Sections 134, 149, 152, 177, 178, 184, 186, 188, 196, 197, 203, 204); SEBI regulations (for listed); FEMA; Labour laws; Environment laws; sector-specific regulations.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All laws reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Non-compliances flagged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">COMPLIANCE</text><line x1="25" y1="34" x2="95" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><path d="M30 45l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><text x="55" y="47" font-size="6" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">Companies Act</text><path d="M30 58l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><text x="55" y="60" font-size="6" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">SEBI + FEMA</text></svg></div><span class="illustration-label">Laws Verified</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Report Preparation, Issuance, and Follow-Up</h3><p class="step-description">We prepare Form MR-3 covering all findings, observations, qualifications, and non-compliances. The report is annexed to the Board's Report [Section 134(3)]. We assist with drafting the Board's response to qualifications and any corrective filings required.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MR-3 issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board response drafted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="34" x2="80" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="30" y1="44" x2="75" y2="44" stroke="#14365F" stroke-width="1" opacity="0.2"/><circle cx="60" cy="56" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M57 56l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/><rect x="75" y="48" width="22" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="86" y="57" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">MR-3</text></svg></div><span class="illustration-label">Report Filed</span><span class="step-number-large">07</span></div></div></div>
            <div class="highlight-box" style="margin-top:32px;"><p><strong>Legal Verification Gate:</strong> All section references and thresholds verified against Companies Act, 2013 and SEBI LODR Regulations as of March 2026.</p></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Secretarial Audit</h2>
            <div class="content-text">
                
                <p><strong>Company Records</strong></p>
                <ul><li>Certificate of Incorporation, MOA, AOA, and amendments</li><li>Register of Members, Directors (MBP-1), Charges, Contracts (MBP-4)</li><li>Statutory registers - Loans, Investments, Transfers</li></ul>
                <p style="margin-top:16px;"><strong>Board and General Meeting Records</strong></p>
                <ul><li>Board meeting notices, attendance registers, and minutes for all meetings during audit period</li><li>AGM notice, proxy register, attendance, minutes, and all board/committee resolutions</li></ul>
                <p style="margin-top:16px;"><strong>MCA/ROC Filings</strong></p>
                <ul><li>AOC-4 (financial statements), MGT-7/7A (annual return) for audit period</li><li>All SH-series, DIR-series, MGT-14, CHG-series forms filed during the period</li><li>Any pending notices or show cause notices from ROC/MCA</li></ul>
                <p style="margin-top:16px;"><strong>SEBI and Regulatory (Listed Companies)</strong></p>
                <ul><li>BSE/NSE correspondence, listing agreement, quarterly/annual compliance reports</li><li>Insider trading policy, code of conduct, UPSI declarations</li><li>RPT disclosures, audit committee and board approvals for related party transactions</li><li>Previously filed ASCR</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Secretarial Audit Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Non-Maintenance of Statutory Registers</strong></td><td>Qualification risk in Form MR-3</td><td>We identify gaps in register maintenance (MGT-1, MBP-1, MBP-4) and help establish proper systems before the audit</td></tr>
                        <tr><td><strong>Board Meeting Procedural Non-compliance</strong></td><td>SS-1/SS-2 violations flagged in audit</td><td>Pre-audit SS-1/SS-2 review - we rectify procedural gaps in notice, quorum, resolutions, and minutes</td></tr>
                        <tr><td><strong>SEBI LODR 2024 Peer Review Requirement</strong></td><td>Non-compliant auditor appointment for listed entities</td><td>We assist in identifying qualified Peer Reviewed PCS, managing the transition, AGM approval, and MGT-14 filings</td></tr>
                        <tr><td><strong>Delayed or Missed MCA Filings</strong></td><td>Non-compliances flagged in MR-3</td><td>Our compliance tracking identifies upcoming deadlines and helps regularize pending filings before the audit closes</td></tr>

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
            <h2 class="section-title">Secretarial Audit Fees in India - 2026 Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Form MR-3 (Private/Public, non-listed)</td><td class="table-amount">Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Form MR-3 - Public Company (turnover INR 250 cr+ or paid-up INR 50 cr+)</td><td class="table-amount">Starting at INR 14,999</td></tr>
                        <tr><td>Form MR-3 - Listed Company (small/mid-cap)</td><td class="table-amount">Starting at INR 24,999</td></tr>
                        <tr><td>ASCR for Listed Entity (SEBI LODR Regulation 24A)</td><td class="table-amount">Starting at INR 19,999</td></tr>
                        <tr><td>Secretarial Compliance Health Check (pre-audit)</td><td class="table-amount">Starting at INR 7,999</td></tr>
                        <tr><td>Material Subsidiary ASCR (bundled with parent)</td><td class="table-amount">Discounted bundled pricing available</td></tr>
                        <tr><td>Voluntary Secretarial Audit (non-mandatory companies)</td><td class="table-amount">Starting at INR 4,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Secretarial Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20Secretarial%20Audit.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secretarial Audit Timeline - How Long Does It Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Form MR-3 (standard private/public company, clean records)</td><td>10-15 working days from document collection</td></tr>
                        <tr><td>Form MR-3 (listed company, SEBI compliance review)</td><td>20-30 working days</td></tr>
                        <tr><td>Annual Secretarial Compliance Report (ASCR)</td><td>15-20 working days (must be filed within 60 days of FY-end)</td></tr>
                        <tr><td>Secretarial Compliance Health Check</td><td>5-7 working days</td></tr>
                        <tr><td>Audit Period Covered</td><td>One full financial year (April 1 to March 31)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Deadline Alert:</strong> Board's Report (to which MR-3 is annexed) must be approved before AGM. ASCR must be submitted to stock exchanges within 60 days of FY-end (by May 31 for March 31 FY-end). Initiate engagement in February-March to ensure timely completion.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Secretarial Audit?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Penalty Prevention</h3><p>Avoid INR 2 lakh penalty per defaulter under Section 204(4) [Companies Amendment Act, 2020]. For listed companies, avoid additional SEBI penalties under Regulation 24A.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></div><h3>Early Non-Compliance Detection</h3><p>Identify and rectify compliance gaps - late filings, register issues, board procedure irregularities - before they attract ROC notices or MCA inspection.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Board Credibility</h3><p>A clean Form MR-3 with no or minimal qualifications strengthens investor and stakeholder confidence in the board's governance standards.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div><h3>IPO and Fundraising Readiness</h3><p>Companies preparing for IPO or PE fundraising undergo enhanced scrutiny. A clean secretarial audit record demonstrates governance maturity to regulators and investors.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>SEBI 2024 Compliance</h3><p>Expert guidance on SEBI LODR Third Amendment Regulations 2024 - Peer Reviewed CS appointment, AGM-based approval, 5-year cooling-off periods for listed entities.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Pan-India Coverage</h3><p>Offices in Pune, Mumbai, Bangalore, Delhi. Serving listed companies, public companies, and growing private companies across all states of India.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">500+ Secretarial Audit Reports Issued Across India</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 4.8/5 Rating | 200+ Reviews | 500+ Secretarial Audit Reports | 15+ Years Experience | Offices: Pune, Mumbai, Bangalore, Delhi</p>
                <div class="highlight-box" style="margin-top:16px;"><p>"Patron's CS team completed our Form MR-3 in 12 working days with zero qualifications. Their pre-audit health check caught 3 pending MGT-14 filings we had missed." - <strong>Company Secretary, Listed FMCG Company, Mumbai</strong></p></div>
                <div class="highlight-box" style="margin-top:12px;"><p>"We received a SEBI LODR compliance notice and needed the ASCR filed urgently. Patron's team managed it within 10 days, including stock exchange submission." - <strong>CFO, Mid-cap Listed Company, Pune</strong></p></div>
                <div class="highlight-box" style="margin-top:12px;"><p>"After the 2024 SEBI amendments, we needed to transition to a Peer Reviewed CS. Patron guided us through the entire process smoothly." - <strong>Director, Listed Manufacturing Company, Delhi</strong></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal CS / DIY vs Professional Secretarial Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Internal CS / DIY</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Qualification</strong></td><td>In-house CS is not independent - independence required under Section 204</td><td>Independent Company Secretary in Practice with ICSI Certificate</td></tr>
                        <tr><td><strong>SEBI 2024 Compliance</strong></td><td>May not be Peer Reviewed - non-compliant for listed entities from April 1, 2025</td><td>Peer Reviewed CS engaged for all listed entity assignments</td></tr>
                        <tr><td><strong>Scope Coverage</strong></td><td>May miss sector-specific laws, FEMA, SEBI insider trading regulations</td><td>Comprehensive review of all applicable laws per Form MR-3 scope</td></tr>
                        <tr><td><strong>Penalty Risk</strong></td><td>High - internal CS cannot certify MR-3 independently</td><td>Low - independent issuance with full liability coverage</td></tr>
                        <tr><td><strong>Turnaround</strong></td><td>Varies - dependent on internal bandwidth</td><td>10-30 working days with dedicated CS team</td></tr>
                        <tr><td><strong>Cost</strong></td><td>Staff time + opportunity cost + penalty risk</td><td>Starting at INR 9,999 - clear governance ROI</td></tr>

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
                    <li><a href="/statutory-audit">Statutory Audit Service</a> - Companies Act, 2013 financial audit by Chartered Accountants</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - annual ROC filings, board meetings, secretarial compliance calendar</li>
                    <li><a href="/appointment-of-auditor">Appointment of Auditor</a> - board and AGM procedures for statutory and secretarial auditor appointment, MGT-14 filing</li>
                    <li><a href="/gst-audit">GST Audit Services</a> - annual GSTR-9C reconciliation and departmental audit representation</li>
                    <li><a href="/internal-audit">Internal Audit Service</a> - process, control, and risk-based internal audit for management assurance</li>
                    <li><a href="/pvt-llp-compliance">LLP Compliance</a> - annual filings, board procedures, and compliance management for LLPs</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Secretarial Audit in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Legal Provision</th><th>Relevance to Secretarial Audit</th></tr></thead><tbody>
                        <tr><td><strong>Section 204, Companies Act, 2013</strong></td><td>Core provision mandating Secretarial Audit for listed and prescribed companies. Report in Form MR-3 by CS in Practice; annexed to Board's Report.</td></tr>
                        <tr><td><strong>Section 204(4) - Penalty (as amended)</strong></td><td>INR 2 lakh each on company, every officer in default, and/or CS in Practice [Companies Amendment Act, 2020, w.e.f. 21.12.2020]. Source: <a href="https://indiacode.nic.in/show-data?actid=AC_CEN_22_29_00008_201318_1517807327856&sectionId=49130" target="_blank" rel="noopener">India Code - Section 204</a></td></tr>
                        <tr><td><strong>Rule 9, Companies (Appointment & Remuneration) Rules, 2014</strong></td><td>Prescribes class of companies (paid-up capital INR 50 cr+ or turnover INR 250 cr+ or loans INR 100 cr+) and Form MR-3 format.</td></tr>
                        <tr><td><strong>SEBI LODR Regulation 24A (amended 2024)</strong></td><td>Listed entities and material subsidiaries must conduct Secretarial Audit; ASCR filed within 60 days of FY-end; Peer Reviewed CS mandatory from April 1, 2025.</td></tr>
                        <tr><td><strong>SEBI (LODR) Third Amendment Regulations, 2024 (12.12.2024)</strong></td><td>Peer Reviewed CS mandatory, AGM-based auditor approval, 5-year cooling-off period, service restrictions for listed entities.</td></tr>
                        <tr><td><strong>Secretarial Standards SS-1 and SS-2 (ICSI)</strong></td><td>SS-1: Board Meetings; SS-2: General Meetings. Mandatory under Section 118(10). Compliance verified during secretarial audit. Source: <a href="https://www.icsi.edu" target="_blank" rel="noopener">ICSI</a></td></tr>
                        <tr><td><strong>Section 134(3), Companies Act, 2013</strong></td><td>Board's Report must include Form MR-3 as annexure; board must explain qualifications.</td></tr>
                        <tr><td><strong>Section 143(12) and 447</strong></td><td>Secretarial Auditor duty to report fraud to Central Government when reason to believe fraud is being committed.</td></tr>
                </tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Secretarial Audit in India</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about secretarial audit under Section 204, Form MR-3, SEBI LODR Regulation 24A, and penalties.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Secretarial Audit',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is secretarial audit and who needs to conduct it?</h3>
                        <div class="faq-expanded__a"><p>Secretarial Audit is an independent compliance audit of non-financial aspects of a company's operations - verifying adherence to Companies Act, SEBI regulations, FEMA, and other applicable laws - conducted by a Company Secretary in Practice and reported in Form MR-3 under Section 204 of the Companies Act, 2013. It is mandatory for all listed companies, public companies with paid-up capital above INR 50 crore or turnover above INR 250 crore or outstanding loans above INR 100 crore, and prescribed private companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who can conduct secretarial audit in India?</h3>
                        <div class="faq-expanded__a"><p>Only a Company Secretary in Practice (PCS) - a member of ICSI holding a valid Certificate of Practice - can conduct Secretarial Audit and issue Form MR-3. For listed entities from April 1, 2025 (SEBI LODR Third Amendment Regulations, 2024), the Secretarial Auditor must additionally be a Peer Reviewed Company Secretary with a valid peer review certificate from ICSI.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Form MR-3 and when must it be submitted?</h3>
                        <div class="faq-expanded__a"><p>Form MR-3 is the prescribed format for the Secretarial Audit Report under Rule 9(2) of the Companies (Appointment and Remuneration of Managerial Personnel) Rules, 2014. It must be prepared by a CS in Practice and annexed to the company's Board's Report (under Section 134). The Board's Report is typically presented at the AGM. There is no separate due date for MR-3 - it follows the Board's Report timeline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between secretarial audit and statutory audit?</h3>
                        <div class="faq-expanded__a"><p>Statutory Audit (under Companies Act and Income Tax Act) is a financial audit conducted by a Chartered Accountant to verify financial statements. Secretarial Audit is a non-financial compliance audit conducted by a CS in Practice to verify legal and procedural compliance - board meetings, ROC filings, secretarial standards, SEBI regulations, and applicable laws. Both reports are annexed to the Board's Report.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not conducting secretarial audit?</h3>
                        <div class="faq-expanded__a"><p>If a company or its officers default on Section 204, each defaulter - the company and every officer in default - is liable to a penalty of INR 2 lakh [Section 204(4) as amended by Companies (Amendment) Act, 2020, effective 21.12.2020 via S.O. 4646(E)]. For listed companies, SEBI may additionally impose penalties for non-submission of ASCR under Regulation 24A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What does the SEBI LODR 2024 amendment mean for secretarial audit?</h3>
                        <div class="faq-expanded__a"><p>SEBI (LODR) Third Amendment Regulations, 2024 (dated 12.12.2024, effective April 1, 2025) significantly strengthened secretarial audit for listed companies: (1) Only Peer Reviewed CS can be appointed; (2) Appointment requires AGM shareholder approval; (3) 5-year cooling-off period before reappointment; (4) Service restrictions to prevent conflict of interest.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Secretarial audit meri company ke liye zaroori hai kya?</h3>
                        <div class="faq-expanded__a"><p>Agar aapki company listed hai, ya public company hai jiska paid-up capital INR 50 crore se zyada hai, ya turnover INR 250 crore se zyada hai, ya outstanding loans INR 100 crore se zyada hain, to Section 204 ke under secretarial audit mandatory hai. Sirf Company Secretary in Practice hi Form MR-3 issue kar sakta hai. Patron Accounting ki CS team se baat karein - hum aapki company ki applicability check karte hain.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is secretarial audit?</strong> Independent compliance audit under Section 204, Companies Act 2013, conducted by a CS in Practice to verify a company's adherence to applicable laws. Report issued in Form MR-3.</p>
                <p><strong>Who conducts secretarial audit?</strong> Only a Company Secretary in Practice (PCS) with ICSI Certificate of Practice. For listed entities from April 1, 2025, the PCS must hold a valid ICSI peer review certificate.</p>
                <p><strong>Is secretarial audit mandatory?</strong> Yes, for listed companies, public companies (paid-up capital above INR 50 crore or turnover above INR 250 crore or loans above INR 100 crore), and certain private companies.</p>
                <p><strong>What is Form MR-3?</strong> Prescribed format for Secretarial Audit Report under Rule 9 of Companies (Appointment and Remuneration) Rules, 2014. Annexed to Board's Report under Section 134(3).</p>
                <p><strong>Secretarial audit penalty amount?</strong> INR 2 lakh per defaulter under Section 204(4), as amended by Companies (Amendment) Act, 2020, effective December 21, 2020.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">SEBI LODR Third Amendment 2024 is EFFECTIVE from April 1, 2025</h2>
            <div class="content-text">
                
                <p><strong>Listed companies must ensure their Secretarial Auditor is a Peer Reviewed CS - non-compliant appointments risk SEBI penalties.</strong></p>
                <ul>
                    <li><strong>ASCR due date:</strong> Within 60 days of FY-end (by May 31 for March 31 FY-end) - file with stock exchanges under SEBI LODR Regulation 24A</li>
                    <li><strong>Form MR-3:</strong> Must be ready before Board's Report approval - initiate audit engagement by February for March FY-end companies</li>
                    <li><strong>MGT-14 filing:</strong> Within 30 days of board resolution appointing Secretarial Auditor</li>
                    <li><strong>Penalty:</strong> INR 2 lakh per defaulter (company + each officer in default) under Section 204(4)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Secretarial Audit Engagement Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Secretarial Audit under Section 204 has evolved from a procedural compliance requirement to a critical corporate governance tool. With the SEBI (LODR) Third Amendment Regulations, 2024 significantly enhancing requirements for listed entities, the complexity and stakes have increased substantially.</p>
                <p style="color:rgba(255,255,255,0.9);">A qualification-free Secretarial Audit Report signals strong governance to regulators, investors, lenders, and stakeholders. Conversely, a penalty of INR 2 lakh per defaulter for non-compliance, or SEBI action for not filing ASCR, carries reputational and financial consequences that far outweigh the cost of professional secretarial audit support.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 9,999 (Exl GST and Govt. Charges) | Form MR-3 + ASCR | Peer Reviewed CS for Listed Entities | Pan-India Coverage</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20Secretarial%20Audit.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Secretarial%20Audit%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20Secretarial%20Audit%20services%20for%20my%20company.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Secretarial Audit Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert Secretarial Audit services including Form MR-3 and SEBI LODR ASCR across major cities in India.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/secretarial-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/secretarial-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/secretarial-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/secretarial-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Compliance Services</div><div class="pa-block-sub">End-to-end audit and corporate governance support</div><div class="pa-cross-grid"><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit Service</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a><a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit Service</div><div class="pa-card-sub">India</div></div></a><a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit Service</div><div class="pa-card-sub">India</div></div></a><a href="/pvt-llp-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers Secretarial Audit Services under Section 204 of the Companies Act, 2013 and SEBI LODR Regulation 24A. Content is reviewed annually. All legal references verified against Companies Act provisions and SEBI circulars as of March 2026.</p>
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
