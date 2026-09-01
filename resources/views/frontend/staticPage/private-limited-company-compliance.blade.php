
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Private Limited Company Compliance - ROC Filing & Due Dates</title>
    <meta name="description" content="Annual ROC compliance for private limited companies - AOC-4, MGT-7, board meetings, AGM. Avoid INR 100/day penalty. Starting at INR 9,999. CA and CS team.">
    <link rel="canonical" href="/private-limited-company-compliance">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Private Limited Company Compliance - ROC Filing & Due Dates">
    <meta property="og:description" content="Annual ROC compliance for private limited companies - AOC-4, MGT-7, board meetings, AGM. Avoid INR 100/day penalty. Starting at INR 9,999. CA and CS team.">
    <meta property="og:url" content="/private-limited-company-compliance">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Private Limited Company Compliance - ROC Filing & Due Dates">
    <meta name="twitter:description" content="Annual ROC compliance for private limited companies - AOC-4, MGT-7, board meetings, AGM. Avoid INR 100/day penalty. Starting at INR 9,999. CA and CS team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Private Limited Company Compliance",
          "description": "Annual ROC compliance for private limited companies - AOC-4, MGT-7, board meetings, AGM. Avoid INR 100/day penalty. Starting at INR 9,999. CA and CS team.",
          "url": "https://www.patronaccounting.com/private-limited-company-compliance",
          "serviceType": "Private Limited Company Compliance",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
            "url": "https://www.patronaccounting.com/private-limited-company-compliance",
            "price": "100"
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
              "name": "Private Limited Company Compliance",
              "item": "https://www.patronaccounting.com/private-limited-company-compliance"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is annual compliance for a private limited company in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Annual compliance includes mandatory filings under the Companies Act 2013: Form AOC-4 (financial statements within 30 days of AGM), Form MGT-7 (annual return within 60 days of AGM), minimum 4 board meetings per year under Section 173, and AGM by 30 September under Section 96."
              }
            },
            {
              "@type": "Question",
              "name": "Is annual compliance mandatory even if the company has no turnover?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Every registered private limited company must comply regardless of revenue or business activity. Nil-return AOC-4 and MGT-7 are mandatory even for zero-turnover companies. Non-filing attracts INR 100 per day penalty under Sections 137 and 92."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late filing of AOC-4 and MGT-7?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "INR 100 per day with no maximum cap under Sections 137 and 92 of the Companies Act 2013. Non-filing for 3 consecutive years triggers director disqualification under Section 164(2) for 5 years from any directorship."
              }
            },
            {
              "@type": "Question",
              "name": "How many board meetings are required per year?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Minimum 4 board meetings per year under Section 173(1), with not more than 120 days between consecutive meetings. First meeting within 30 days of incorporation. Penalty under Section 450 for non-compliance."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between AOC-4 and MGT-7?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "AOC-4 is for filing audited financial statements under Section 137, due within 30 days of AGM. MGT-7 is the Annual Return under Section 92 containing shareholding and director details, due within 60 days of AGM."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if a company does not file for 3 years?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Non-filing of AOC-4 and MGT-7 for 3 consecutive years triggers automatic director disqualification under Section 164(2) for 5 years. The ROC may also initiate strike-off proceedings under Section 248."
              }
            },
            {
              "@type": "Question",
              "name": "What is the new MCA V3 requirement for AOC-4 and MGT-7 from 2025?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "From July 14, 2025, MCA V3 requires submission of registered office photographs with at least one director visibly present in the frame as part of AOC-4 and MGT-7 filing. The company display board must comply with Section 12 requirements. Quick Answers When is AGM due? By 30 September each year under Section 96, within 6 months of financial year-end. Can AGM be held virtually? Video conferencing permitted for board meetings under Section 173(2). MCA periodically allows virtual AGMs via specific circulars. What is MGT-7A? Simplified annual return form for small companies and OPCs. Less information than standard MGT-7. Filed within 60 days of AGM due date. What is Section 164 disqualification? Non-filing of AOC-4 or MGT-7 for 3 consecutive years disqualifies directors from any directorship for 5 years."
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
                        Private Limited Company Compliance - Annual ROC and Tax Guide 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Key Forms:</span> AOC-4 (within 30 days of AGM), MGT-7 (within 60 days of AGM), ADT-1, DIR-3 KYC, DPT-3</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Filing Penalty:</span> INR 100 per day with no maximum cap for AOC-4 and MGT-7 under Sections 137 and 92</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>All Companies Must Comply:</span> Every registered private limited company in India - including zero-turnover companies - must comply annually</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Annual Calendar:</span> AGM by 30 September, AOC-4 by 29 October, MGT-7 by 29 November every year</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">1,000+ Pvt Ltd companies served | 4.9 Google Rating | 100% on-time filing | 15+ years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Pvt%20Ltd%20Compliance%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0APlease%20share%20annual%20compliance%20details.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20annual%20compliance%20services%20for%20my%20private%20limited%20company.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Pvt Ltd Compliance',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Calendar</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">DIY vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Private Limited Company Compliance - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Pvt Ltd Compliance Services at a Glance</strong></p>
                    <p>Every private limited company registered in India must complete annual ROC and tax compliance regardless of turnover or business activity. Key filings include Form AOC-4 (financial statements, within 30 days of AGM), Form MGT-7 (annual return, within 60 days of AGM), and minimum 4 board meetings per year. Missing deadlines attracts INR 100 per day late fee under Sections 137 and 92 with no maximum cap. Non-filing for 3 consecutive years disqualifies directors under Section 164(2).</p>
                </div>
                <p>Private Limited Company compliance in India covers a structured set of annual, event-based, and ongoing obligations under the Companies Act 2013. Every company incorporated under the Act - regardless of whether it has commenced business or posted any revenue - is legally required to file audited financial statements, annual returns, and maintain statutory records with the Registrar of Companies (ROC) every year.</p>
                <p>Failure to comply does not just attract penalties. A company that fails to file AOC-4 and MGT-7 for three consecutive years faces disqualification of its directors from holding directorship in any company in India for five years under Section 164(2). The ROC may also initiate strike-off proceedings. Patron Accounting's CA and CS team provides complete annual compliance management.</p>
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
                <h2 class="section-title">What is Private Limited Company Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Private Limited Company Compliance</strong> is the annual set of statutory obligations under the Companies Act 2013 requiring every registered private limited company to file audited financial statements (Form AOC-4), annual returns (Form MGT-7), hold a minimum of 4 board meetings and 1 AGM, appoint a statutory auditor, and file Director KYC by specified deadlines each financial year.</p>
<p>The compliance framework applies universally. A company with no employees, no revenue, and no transactions must still complete all annual filings. The law does not distinguish between active and inactive companies - only between companies that are registered and those formally struck off.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Pvt Ltd Compliance:</strong></p>
                    <p><strong>AOC-4</strong> - MCA form for filing audited financial statements with ROC within 30 days of AGM under Section 137.</p>
<p><strong>MGT-7 / MGT-7A</strong> - Annual Return form containing shareholding, director details, capital structure. Filed within 60 days of AGM under Section 92. MGT-7A is the simplified version for small companies and OPCs.</p>
<p><strong>ADT-1</strong> - MCA form for auditor appointment/re-appointment, filed within 15 days of AGM under Section 139.</p>
<p><strong>AGM</strong> - Annual General Meeting to approve financial statements, appoint auditors, and pass statutory resolutions. Must be held by 30 September under Section 96.</p>
<p><strong>DPT-3</strong> - Return of Deposits filed annually by 30 June for all outstanding loans, advances, and deposits.</p>
<p><strong>DIR-3 KYC</strong> - Annual Director KYC by 30 September to keep DINs active.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Calendar/compliance document -->
<rect x="50" y="35" width="65" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<rect x="50" y="35" width="65" height="18" rx="4" fill="#14365F"/>
<text x="82" y="47" font-size="7" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">FY 2025-26</text>
<line x1="58" y1="62" x2="107" y2="62" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
<line x1="58" y1="72" x2="100" y2="72" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="82" x2="95" y2="82" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="92" x2="100" y2="92" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="102" x2="90" y2="102" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
<!-- AOC-4 badge -->
<rect x="120" y="45" width="40" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="140" y="59" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4</text>
<!-- MGT-7 badge -->
<rect x="120" y="75" width="40" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="140" y="89" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7</text>
<!-- 100/DAY penalty warning -->
<rect x="55" y="118" width="55" height="18" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="82" y="130" font-size="6" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">INR 100/DAY</text>
<!-- Verified -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Pvt Ltd Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Companies Act 2013</span>
                        <strong>AOC-4 + MGT-7</strong>
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
            <h2 class="section-title">Who Must Comply and Annual Compliance Calendar</h2>
            <div class="content-text">
                
                <p>Every private limited company incorporated under the Companies Act 2013 must comply - newly incorporated, active, dormant, zero-turnover, startups (DPIIT recognition does not exempt).</p>
<p><strong>Annual Compliance Calendar for FY 2025-26:</strong></p>
<div class="table-responsive-wrapper"><table><thead><tr><th>Form / Obligation</th><th>Deadline</th></tr></thead><tbody>
<tr><td>DPT-3 (Return of Deposits/Loans)</td><td>30 June each year</td></tr>
<tr><td>DIR-3 KYC (all directors)</td><td>30 September each year</td></tr>
<tr><td>AGM (Annual General Meeting)</td><td>30 September (within 6 months of FY-end)</td></tr>
<tr><td>ADT-1 (Auditor Appointment)</td><td>Within 15 days of AGM</td></tr>
<tr><td>AOC-4 (Financial Statements)</td><td>Within 30 days of AGM (typically 29 October)</td></tr>
<tr><td>MGT-7/MGT-7A (Annual Return)</td><td>Within 60 days of AGM (typically 29 November)</td></tr>
<tr><td>Board Meetings (minimum 4/year)</td><td>Quarterly - max 120-day gap between meetings</td></tr>
</tbody></table></div>
<p style='margin-top:12px;'><strong>MCA V3 Update (July 2025):</strong> Registered office photographs with director visibly present now required for AOC-4 and MGT-7 filings.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Annual Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Bookkeeping and Financial Statements</td><td>Monthly/quarterly ledger maintenance, reconciliation, and preparation of audit-ready balance sheet and P&L</td></tr>
<tr><td>Statutory Audit Coordination</td><td>Coordination with appointed statutory auditor for audit completion, report finalisation, and board report drafting under Section 134</td></tr>
<tr><td>AGM Conduct and Documentation</td><td>Notice drafting (21-clear-days rule), agenda, minutes, resolutions for AGM approval of financials and auditor appointment</td></tr>
<tr><td>ROC Annual Filing</td><td>AOC-4, MGT-7/MGT-7A, ADT-1 filing on MCA V3 portal including registered office photograph requirements</td></tr>
<tr><td>Board Meeting Compliance</td><td>Quarterly board meeting notices, agenda, and minutes management under Section 173 - minimum 4 meetings, max 120-day gap</td></tr>
<tr><td>Director KYC and DPT-3</td><td>Annual DIR-3 KYC by 30 September for all directors; DPT-3 return by 30 June for outstanding director loans and deposits</td></tr>

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
            <h2 class="section-title">8-Step Annual Compliance Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Under the Companies Act 2013. Late filing of AOC-4/MGT-7 attracts INR 100 per day with no maximum cap. Non-filing for 3 consecutive years triggers director disqualification under Section 164(2).</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Close Books and Financial Year</h3><p class="step-description">Complete bookkeeping for April 2025 to March 2026. Reconcile bank accounts, vendor ledgers, and GST returns. Prepare trial balance. Patron Accounting handles this monthly or quarterly.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Books closed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Trial balance ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Books Closed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Complete Statutory Audit</h3><p class="step-description">Appoint statutory auditor under Section 139 (5-year tenure). Provide books. Auditor issues Form 3CA/3CB + 3CD. Mandatory for ALL private limited companies regardless of turnover.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Report issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="46" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">AUDIT</text></svg></div><span class="illustration-label">Audit Done</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Board Report and Financial Statement Approval</h3><p class="step-description">Directors approve and sign audited financial statements. Board report under Section 134 includes CSR, related party, and directors' responsibility disclosures.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Report signed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statements approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 40l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare and Issue AGM Notice</h3><p class="step-description">Issue notice to all shareholders with at least 21 clear days' notice under Section 101. Include agenda: approval of financials, dividend, auditor ratification.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notice issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>21-day clock started</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><rect x="35" y="42" width="50" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="54" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">21 DAYS</text></svg></div><span class="illustration-label">Notice Sent</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Conduct AGM by 30 September</h3><p class="step-description">Hold Annual General Meeting. Pass resolutions for financials, auditor appointment, director reappointment. Maintain certified minutes within 30 days under Section 118.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AGM held</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolutions passed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AGM</text><text x="60" y="52" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">30 SEP</text></svg></div><span class="illustration-label">AGM Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File ADT-1 Within 15 Days of AGM</h3><p class="step-description">File auditor appointment confirmation on MCA V3 portal under Section 139. For first 5-year block, ADT-1 filed once; thereafter on new block start.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-1 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SRN confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ADT-1</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">15 DAYS</text></svg></div><span class="illustration-label">ADT-1 Filed</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File AOC-4 Within 30 Days of AGM</h3><p class="step-description">File audited financial statements on MCA V3 with registered office photos (July 2025 requirement). Standard deadline: 29 October. Late fee: INR 100/day with no cap under Section 137.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOC-4 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Financials on record</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">4</text></svg></div><span class="illustration-label">AOC-4 Filed</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">File MGT-7 Within 60 Days of AGM</h3><p class="step-description">File Annual Return on MCA V3 with shareholding pattern, director details, and charges. Standard deadline: 29 November. For large companies, MGT-8 CS certification required. Late fee: INR 100/day.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MGT-7 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual return on record</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">7</text></svg></div><span class="illustration-label">MGT-7 Filed</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Annual Compliance</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
<tr><td>Audited financial statements (signed by auditor + director)</td><td>AOC-4 filing</td></tr>
<tr><td>Auditor's report (qualified/unqualified opinion)</td><td>AOC-4 attachment</td></tr>
<tr><td>Board report with Section 134 mandatory disclosures</td><td>AGM presentation and AOC-4</td></tr>
<tr><td>AGM notice, attendance register, certified minutes</td><td>AGM compliance record</td></tr>
<tr><td>Shareholder register (Form MGT-1) and share transfer records</td><td>MGT-7 filing</td></tr>
<tr><td>List of directors and changes during the year</td><td>MGT-7 and DIR-12 filings</td></tr>
<tr><td>Registered office photographs (director in frame)</td><td>MCA V3 requirement from July 2025</td></tr>
<tr><td>DSC of at least one director</td><td>Digital signature for MCA form signing</td></tr>
<tr><td>DIN and personal details of all directors</td><td>DIR-3 KYC filing</td></tr>
<tr><td>Outstanding loan and deposit schedule</td><td>DPT-3 filing (director loans, third-party loans)</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Compliance Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing the September AGM deadline</td><td>AOC-4 and MGT-7 cannot be filed; INR 100/day penalty accumulates</td><td>Patron Accounting starts the compliance cycle in April-May with bookkeeping closure and audit scheduling. AGM held in August with all documents ready.</td></tr>
<tr><td>MCA V3 portal errors and form rejections</td><td>New photo requirements and XBRL validation rules cause failures</td><td>Our CS team is trained on MCA V3 including registered office photograph standards and new form fields. End-to-end form preparation and resubmission.</td></tr>
<tr><td>Director DIN deactivated before filing</td><td>Missed DIR-3 KYC blocks all company filings</td><td>Proactively file DIR-3 KYC for all directors before 30 September. If reactivation needed, coordinate INR 5,000 penalty and re-filing.</td></tr>
<tr><td>Zero-turnover companies skipping compliance</td><td>Penalties accumulate; Section 164(2) disqualification after 3 years</td><td>Nil-filer compliance package at INR 9,999+GST covers Nil statements, Nil AOC-4, Nil MGT-7, and director KYC.</td></tr>

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
            <h2 class="section-title">Annual Compliance Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Nil-Filer Package (zero turnover, no transactions)</td><td>INR 9,999 + GST (Nil financials, Nil AOC-4, Nil MGT-7, ADT-1, DIR-3 KYC for 2 directors)</td></tr>
<tr><td>Starter Package (turnover up to INR 20 Lakhs)</td><td>INR 14,999 + GST (bookkeeping up to 100 txns, audit coordination, all ROC filings)</td></tr>
<tr><td>Growth Package (turnover INR 20 Lakhs - INR 1 Crore)</td><td>INR 22,999 + GST (bookkeeping up to 300 txns, statutory audit, DPT-3, all filings)</td></tr>
<tr><td>Scale Package (turnover above INR 1 Crore)</td><td>INR 34,999+ + GST (full bookkeeping, Tax Audit, XBRL, MSME-1, all filings)</td></tr>
<tr><td>Additional Directors (beyond 2)</td><td>INR 499 per director per year for DIR-3 KYC</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Pvt Ltd Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Pvt%20Ltd%20annual%20compliance%20from%20Patron%20Accounting." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Annual Compliance Cycle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Bookkeeping and financial closure</td><td>2-4 weeks (depends on transaction volume)</td></tr>
<tr><td>Statutory audit completion</td><td>2-3 weeks after books handed to auditor</td></tr>
<tr><td>Board report and AGM documentation</td><td>3-5 working days after audit</td></tr>
<tr><td>AGM conduct</td><td>1 day; 21 clear days notice period before AGM</td></tr>
<tr><td>AOC-4 filing (after AGM)</td><td>1-2 working days; statutory deadline 30 days from AGM</td></tr>
<tr><td>MGT-7 filing (after AGM)</td><td>1-2 working days; statutory deadline 60 days from AGM</td></tr>
<tr><td>DIR-3 KYC (all directors)</td><td>Same day to 1 working day; deadline 30 September</td></tr>
<tr><td>Total cycle (April to November)</td><td>Approximately 4-6 months - start early to avoid bottlenecks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Best Practice:</strong> Begin bookkeeping closure in April, target audit completion by July, hold AGM in August, and file AOC-4/MGT-7 by September - 2 months ahead of statutory deadlines.</p>

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
            <h2 class="section-title">Why Use Professional Annual Compliance Service?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Zero Penalty Risk</h3><p class="feature-text">Files before every statutory deadline - AOC-4, MGT-7, ADT-1, DIR-3 KYC. Clients have not incurred a single late-filing penalty.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Director Disqualification Prevention</h3><p class="feature-text">3 years of non-filing triggers Section 164(2) disqualification. Our proactive annual system eliminates this risk completely.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">MCA V3 Expertise</h3><p class="feature-text">Handles all portal requirements including registered office photographs (July 2025), XBRL filing, and updated form versions.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div><h3 class="feature-title">Investor and Bank Ready</h3><p class="feature-text">Clean ROC records with on-time filings build investor confidence and are required for bank loans, fundraising due diligence, and tenders.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Single Point of Accountability</h3><p class="feature-text">CA and CS team handles bookkeeping, audit coordination, AGM, ROC filing, and director KYC - no need to coordinate multiple professionals.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pan-India Coverage</h3><p class="feature-text">Offices in Pune, Mumbai, Delhi, and Gurugram. Personalised compliance calendar with deadline alerts and document checklists.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Companies Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>1,000+ Pvt Ltd Companies Served Annually | 100% On-Time Filing Record | 4.9 Google Rating from 500+ Reviews | 50,000+ Compliance Documents Filed | 15+ Years</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Annual Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Patron Accounting</th><th>DIY / Multiple Professionals</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory Audit</td><td>In-house CA coordinates with your auditor</td><td>Hire independently; coordination burden on founders</td></tr>
<tr><td>MCA V3 Photo Requirement</td><td>Pre-filing checklist includes photo requirements</td><td>Often overlooked - causes form rejection</td></tr>
<tr><td>AOC-4/MGT-7 Deadline Tracking</td><td>Automated system with August-September alerts</td><td>Director's responsibility; often missed</td></tr>
<tr><td>Director KYC (DIR-3)</td><td>Filed proactively before 30 September</td><td>Easily forgotten; INR 5,000 DIN deactivation penalty</td></tr>
<tr><td>Board Meeting Documentation</td><td>CS-drafted notices, agenda, certified minutes quarterly</td><td>Minutes often informal or missing</td></tr>
<tr><td>Section 164 Disqualification Risk</td><td>ZERO - 100% on-time filing record</td><td>HIGH - if any year missed</td></tr>
<tr><td>Total Annual Cost</td><td>All-inclusive starting at INR 9,999 + GST</td><td>CA + Auditor + CS separately = INR 30,000-80,000</td></tr>

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
            <h2 class="section-title">Related Company and Director Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - incorporation, SPICe+ filing, MoA/AoA</li>
<li><a href="/appointment-of-director">Appointment of Director</a> - DIN, DIR-2, DIR-12 filing</li>
<li><a href="/director-kyc">Director KYC (DIR-3 KYC)</a> - annual DIN KYC filing</li>
<li><a href="/secretarial-audit">Secretarial Audit</a> - Section 204 audit for applicable companies</li>
<li><a href="/pvt-llp-compliance">LLP Compliance</a> - annual Form 11 and Form 8 for LLPs</li>
<li><a href="/removal-of-director">Removal of Director</a> - board resolution and DIR-12 filing</li>
</ul>

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
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Relevance and Penalty</th></tr></thead><tbody>
<tr><td>Section 92, Companies Act 2013</td><td>Annual Return (MGT-7) within 60 days of AGM. MGT-7A for small companies and OPCs.</td></tr>
<tr><td>Section 96</td><td>AGM within 6 months of FY-end (by 30 September).</td></tr>
<tr><td>Section 137</td><td>Financial Statement Filing (AOC-4) within 30 days of AGM. Late fee INR 100/day, no cap.</td></tr>
<tr><td>Section 139</td><td>Auditor Appointment - statutory audit mandatory; 5-year tenure; ADT-1 within 15 days of AGM.</td></tr>
<tr><td>Section 164(2)</td><td>Director Disqualification - non-filing for 3 consecutive years triggers automatic 5-year disqualification.</td></tr>
<tr><td>Section 173</td><td>Board Meetings - minimum 4/year; max 120-day gap; first meeting within 30 days of incorporation.</td></tr>
<tr><td>Section 450</td><td>General penalty: INR 10,000 first contravention + INR 1,000/day continuing; max INR 2 lakh (company).</td></tr>
<tr><td>MCA Circular 06/2025</td><td>Extended AOC-4/MGT-7 deadline for FY 2024-25 to 31 December 2025. One-time extension.</td></tr>
<tr><td>MCA V3 Update (July 2025)</td><td>Registered office photographs with director visible mandatory for AOC-4 and MGT-7.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a> | <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code - Companies Act 2013</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Pvt Ltd Compliance</h2>
                    <p class="faq-expanded__lead">Get answers about annual ROC filings, AOC-4, MGT-7, AGM, board meetings, penalties, and director disqualification.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Pvt Ltd Compliance',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is annual compliance for a private limited company in India?</h3>
                        <div class="faq-expanded__a"><p>Annual compliance includes mandatory filings under the Companies Act 2013: Form AOC-4 (financial statements within 30 days of AGM), Form MGT-7 (annual return within 60 days of AGM), minimum 4 board meetings per year under Section 173, and AGM by 30 September under Section 96.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is annual compliance mandatory even if the company has no turnover?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every registered private limited company must comply regardless of revenue or business activity. Nil-return AOC-4 and MGT-7 are mandatory even for zero-turnover companies. Non-filing attracts INR 100 per day penalty under Sections 137 and 92.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for late filing of AOC-4 and MGT-7?</h3>
                        <div class="faq-expanded__a"><p>INR 100 per day with no maximum cap under Sections 137 and 92 of the Companies Act 2013. Non-filing for 3 consecutive years triggers director disqualification under Section 164(2) for 5 years from any directorship.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How many board meetings are required per year?</h3>
                        <div class="faq-expanded__a"><p>Minimum 4 board meetings per year under Section 173(1), with not more than 120 days between consecutive meetings. First meeting within 30 days of incorporation. Penalty under Section 450 for non-compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between AOC-4 and MGT-7?</h3>
                        <div class="faq-expanded__a"><p>AOC-4 is for filing audited financial statements under Section 137, due within 30 days of AGM. MGT-7 is the Annual Return under Section 92 containing shareholding and director details, due within 60 days of AGM.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if a company does not file for 3 years?</h3>
                        <div class="faq-expanded__a"><p>Non-filing of AOC-4 and MGT-7 for 3 consecutive years triggers automatic director disqualification under Section 164(2) for 5 years. The ROC may also initiate strike-off proceedings under Section 248.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the new MCA V3 requirement for AOC-4 and MGT-7 from 2025?</h3>
                        <div class="faq-expanded__a"><p>From July 14, 2025, MCA V3 requires submission of registered office photographs with at least one director visibly present in the frame as part of AOC-4 and MGT-7 filing. The company display board must comply with Section 12 requirements.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>When is AGM due?</strong> By 30 September each year under Section 96, within 6 months of financial year-end.</p>
<p><strong>Can AGM be held virtually?</strong> Video conferencing permitted for board meetings under Section 173(2). MCA periodically allows virtual AGMs via specific circulars.</p>
<p><strong>What is MGT-7A?</strong> Simplified annual return form for small companies and OPCs. Less information than standard MGT-7. Filed within 60 days of AGM due date.</p>
<p><strong>What is Section 164 disqualification?</strong> Non-filing of AOC-4 or MGT-7 for 3 consecutive years disqualifies directors from any directorship for 5 years.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ROC Deadline Approaching - Start Compliance Now</h2>
            <div class="content-text">
                
                <p><strong>CRITICAL:</strong> AOC-4 is due within 30 days of AGM (typically 29 October). MGT-7 is due within 60 days (typically 29 November). Late filing: INR 100 per day per form with NO maximum cap. 3 consecutive years of non-filing = DIRECTOR DISQUALIFICATION under Section 164(2).</p>
<ul>
<li><strong>April-June:</strong> Close books and complete bookkeeping</li>
<li><strong>July-August:</strong> Complete statutory audit and prepare AGM documentation</li>
<li><strong>September:</strong> Hold AGM by 30 September; file DIR-3 KYC</li>
<li><strong>October:</strong> File AOC-4 within 30 days of AGM</li>
<li><strong>November:</strong> File MGT-7 within 60 days of AGM</li>
</ul>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20annual%20compliance%20for%20my%20Pvt%20Ltd%20company." target="_blank">WhatsApp us</a> to start your compliance cycle now.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Annual Compliance - Starting at INR 9,999 | Beat ROC Deadlines</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Private Limited Company Compliance is a year-round commitment. The penalty structure is unforgiving - INR 100 per day with no cap, and the ultimate consequence of disqualification under Section 164(2) - making professional compliance management not just convenient but essential.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's CA and CS team has handled annual compliance for over 1,000 private limited companies - from zero-turnover startups to INR 100 crore+ businesses. With offices in Pune, Mumbai, Delhi, and Gurugram, our team ensures every deadline is met and every director remains qualified and active.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Pvt%20Ltd%20annual%20compliance%20from%20Patron%20Accounting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Pvt%20Ltd%20Annual%20Compliance&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20annual%20compliance%20for%20my%20private%20limited%20company.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pvt Ltd Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Annual ROC and tax compliance from Patron Accounting offices across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Pvt Ltd Compliance by City</div><div class="pa-block-sub">Annual ROC filing from Patron Accounting</div><div class="pa-city-grid">
<a href="/private-limited-company-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/private-limited-company-compliance/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/private-limited-company-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/private-limited-company-compliance/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>




</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Company and director compliance services</div><div class="pa-cross-grid">
<a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/appointment-of-director" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Director</div><div class="pa-card-sub">India</div></div></a>
<a href="/director-kyc" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director KYC (DIR-3)</div><div class="pa-card-sub">India</div></div></a>
<a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="/pvt-llp-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Trigger: MCA circular changing AOC-4/MGT-7 due dates, MCA V3 form changes, Finance Act amendments, or Section 164/173 amendments.</p>
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
