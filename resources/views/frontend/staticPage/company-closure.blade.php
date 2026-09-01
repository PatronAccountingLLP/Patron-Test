
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Company Closure in India - Strike Off, STK-2 & Winding Up</title>
    <meta name="description" content="Close your company via STK-2 under Section 248 Companies Act 2013. C-PACE now processes strike-off in under 2 months. Nil liabilities required. From INR 4,999.">
    <link rel="canonical" href="/company-closure">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Company Closure in India - Strike Off, STK-2 & Winding Up">
    <meta property="og:description" content="Close your company via STK-2 under Section 248 Companies Act 2013. C-PACE now processes strike-off in under 2 months. Nil liabilities required. From INR 4,999.">
    <meta property="og:url" content="/company-closure">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Company Closure in India - Strike Off, STK-2 & Winding Up">
    <meta name="twitter:description" content="Close your company via STK-2 under Section 248 Companies Act 2013. C-PACE now processes strike-off in under 2 months. Nil liabilities required. From INR 4,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Company Closure: STK-2 Filing",
          "description": "Close your company via STK-2 under Section 248 Companies Act 2013. C-PACE now processes strike-off in under 2 months. Nil liabilities required. From INR 4,999.",
          "url": "https://www.patronaccounting.com/company-closure",
          "serviceType": "Company Closure: STK-2 Filing",
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
            "url": "https://www.patronaccounting.com/company-closure",
            "price": "10000"
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
              "name": "Company Closure: STK-2 Filing",
              "item": "https://www.patronaccounting.com/company-closure"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is company closure in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Company closure (strike-off) is the legal process of removing a company from the Register of Companies under Section 248 of the Companies Act 2013. Once struck off, the company ceases to exist, its Certificate of Incorporation is cancelled, and annual compliance obligations end."
              }
            },
            {
              "@type": "Question",
              "name": "Which form is used for voluntary company closure?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form STK-2 under Section 248(2), filed with C-PACE on MCA V3 portal with a government fee of INR 10,000."
              }
            },
            {
              "@type": "Question",
              "name": "What is C-PACE and why does it matter?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "C-PACE (Centre for Processing Accelerated Corporate Exit) is MCA's pan-India centralized authority, operational since May 2023. It has reduced processing time from over 2 years to under 2 months. As of July 2025, C-PACE had dissolved 38,658 companies."
              }
            },
            {
              "@type": "Question",
              "name": "What are the eligibility criteria for filing STK-2?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No business for 2+ consecutive FYs or never commenced. Nil liabilities. No open bank accounts. All statutory filings cleared. No pending legal proceedings. Not listed. No asset disposal in last 3 months."
              }
            },
            {
              "@type": "Question",
              "name": "How long does company closure take with C-PACE?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "C-PACE processes applications in under 2 months. With Patron Accounting including pre-closure compliance cleanup, total time is 45 to 75 days for a private limited company."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if an inactive company does not close formally?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Annual filing obligations continue. Penalties accumulate. Directors risk disqualification under Section 164(2) for 5 years if returns not filed for 3 consecutive years. ROC may initiate suo moto strike-off."
              }
            },
            {
              "@type": "Question",
              "name": "Are directors still liable after company dissolution?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 251, directors remain personally liable for any past dues, undisclosed liabilities, or fraud as if the company had not been dissolved. The Indemnity Bond (STK-3) is mandatory for this reason. Quick Answers Which form? STK-2 under Section 248(2) with INR 10,000 government fee, filed with C-PACE. How long? C-PACE processes in under 2 months. Total with Patron: 45-75 days. Can company be restored? Yes, via NCLT within 3 years under Section 252. Directors still liable? Yes - Section 251 keeps liability alive post-dissolution for undisclosed liabilities."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-2.css') }}?v=1">
@endpush
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
                        Company Closure in India - Strike Off via STK-2 Under Companies Act 2013
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 248 Compliance:</span> Voluntary strike-off filed via Form STK-2 with government fee of INR 10,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>C-PACE Fast-Track:</span> C-PACE now processes strike-off applications in under 2 months (vs over 2 years earlier)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Nil Liabilities Required:</span> All pending MCA, income tax, and GST filings must be cleared. No outstanding liabilities permitted.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Dissolution in Gazette:</span> Company legally dissolved upon publication of STK-7 in the Official Gazette. Certificate of Incorporation cancelled.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">1,000+ companies served | Avg 45-60 days to dissolution | 100% C-PACE compliant</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Company%20Closure%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0APlease%20share%20details%20for%20company%20closure%20service.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20close%20my%20company.%20Please%20help%20with%20STK-2%20filing." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Company Closure',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Eligibility</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Mistakes</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">STK-2 vs NCLT</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company Closure - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Company Closure Services at a Glance</strong></p>
                    <p>When a company stops operating, remaining on the MCA register creates an ongoing compliance trap. The solution is legal company closure through strike-off under Section 248 via Form STK-2. C-PACE processes applications in under 2 months. Company must have nil liabilities, no open bank accounts, all filings cleared. Government fee: INR 10,000. Professional fee from INR 4,999.</p>
                </div>
                <p>When a company stops operating, remaining on the MCA register creates an ongoing compliance trap. Annual returns, financial statements, director KYC, and audit obligations continue regardless of whether the business is active. Unpaid filings attract escalating penalties and, ultimately, director disqualification under Section 164(2) of the Companies Act, 2013.</p>
                <p>Patron Accounting guides private limited companies, OPCs, and eligible public companies through the complete company closure process - from board resolution and special resolution drafting to STK-2 filing with C-PACE and final dissolution in the Official Gazette.</p>
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
                <h2 class="section-title">What is Company Closure?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Company closure</strong> (also called company strike-off) is the legal process by which a company is removed from the Register of Companies maintained by the ROC. Once struck off and dissolved, the company ceases to exist as a legal entity. Its Certificate of Incorporation is cancelled, PAN and TAN become inactive, and bank accounts must be closed.</p>
<p>Under the Companies Act 2013, closure can happen via: <strong>Voluntary Strike-Off</strong> (company applies via STK-2 under Section 248(2)) or <strong>Compulsory Strike-Off</strong> (ROC initiates under Section 248(1)). For companies with assets or debts, <strong>winding up through NCLT</strong> (Sections 270-303) is required instead.</p>
<p><strong>Filing portal:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Portal (mca.gov.in)</a> - processed by C-PACE.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Company Closure:</strong></p>
                    <p><strong>C-PACE</strong> - Centre for Processing Accelerated Corporate Exit. MCA's pan-India centralized authority (operational since May 2023). Has dissolved 38,658 companies as of July 2025.</p>
<p><strong>STK-2</strong> - Form for voluntary strike-off application under Section 248(2). Government fee INR 10,000.</p>
<p><strong>STK-7</strong> - Dissolution notice published in Official Gazette. Company deemed dissolved from this date.</p>
<p><strong>STK-3</strong> - Indemnity Bond executed by directors and majority shareholders.</p>
<p><strong>STK-4</strong> - Individual affidavit by every director confirming nil liabilities.</p>
<p><strong>STK-8</strong> - Statement of Accounts certified by CA showing nil assets and nil liabilities (not older than 30 days).</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Building with X -->
<rect x="55" y="40" width="55" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<rect x="63" y="50" width="12" height="12" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/>
<rect x="83" y="50" width="12" height="12" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/>
<rect x="63" y="70" width="12" height="12" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/>
<rect x="83" y="70" width="12" height="12" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/>
<rect x="73" y="90" width="18" height="20" rx="2" fill="#14365F" opacity="0.15"/>
<!-- STK-2 badge -->
<rect x="118" y="45" width="42" height="22" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="139" y="59" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">STK-2</text>
<!-- C-PACE badge -->
<rect x="118" y="75" width="42" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="139" y="89" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">C-PACE</text>
<!-- DISSOLVED badge -->
<rect x="50" y="118" width="60" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
<text x="80" y="130" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DISSOLVED</text>
<!-- Checkmark -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Company Closure</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 248</span>
                        <strong>STK-2 Filing</strong>
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
            <h2 class="section-title">Eligibility Criteria for Company Closure via STK-2</h2>
            <div class="content-text">
                
                <p>A company is eligible for voluntary strike-off under Section 248(2) only if ALL conditions are met:</p>
<ul>
<li>No business or operations for <strong>2+ consecutive financial years</strong>, OR never commenced business since incorporation</li>
<li><strong>No outstanding liabilities</strong> - no pending loans, dues, or obligations to creditors</li>
<li><strong>No open bank accounts</strong> - all accounts must be closed before applying</li>
<li>All <strong>pending statutory dues settled</strong> - income tax, GST, PF, ESI</li>
<li>All overdue <strong>AOC-4 and MGT-7 filed</strong> with ROC up to date of cessation</li>
<li>No inspection, investigation, or <strong>prosecution pending</strong></li>
<li>Not a listed company (or delisted within preceding 5 years)</li>
<li>No disposal of property or rights in last <strong>3 months</strong> except for winding down</li>
<li>Not a Section 8, banking, insurance, or special act company</li>
</ul>
<p><strong>Section 249 bars:</strong> Companies that changed name/office within 3 months, altered objects within 3 months, or disposed of assets for value are barred from filing.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Company Closure Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Closure Compliance Cleanup</td><td>File all overdue AOC-4, MGT-7 returns; assist with GST cancellation and bank account closure</td></tr>
<tr><td>Board and Special Resolution</td><td>Draft and execute board resolution approving closure and special resolution from 75% members</td></tr>
<tr><td>Document Preparation</td><td>STK-3 (Indemnity Bond), STK-4 (Director Affidavits), STK-8 (CA-certified Statement of Accounts)</td></tr>
<tr><td>STK-2 Filing with C-PACE</td><td>File Form STK-2 on MCA V3 portal with INR 10,000 government fee and all attachments</td></tr>
<tr><td>C-PACE Follow-Up</td><td>Track application on C-PACE portal; respond to any queries from the authority</td></tr>
<tr><td>Dissolution Confirmation</td><td>Share STK-7 Official Gazette notification confirming dissolution and company cessation</td></tr>

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
            <h2 class="section-title">10-Step Company Closure Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Under Section 248(2) of the Companies Act 2013. Processed by C-PACE in under 2 months. Government fee: INR 10,000. Failing to close inactive company risks Section 164(2) director disqualification.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Clear All Pending Filings and Dues</h3><p class="step-description">File all overdue AOC-4 and MGT-7 with ROC. Clear income tax returns, GST returns, and all statutory dues. MCA mandates fulfilment of all pending returns before STK-2 acceptance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filings cleared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dues settled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><path d="M62 55l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Filings Done</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Close Bank Accounts</h3><p class="step-description">Close all company bank accounts. Obtain bank closure certificate from each bank. This is a mandatory STK-2 attachment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Accounts closed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificates obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="35" x2="85" y2="35" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-dasharray="4,3"/><text x="60" y="55" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">CLOSED</text></svg></div><span class="illustration-label">Banks Closed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Cancel GST Registration</h3><p class="step-description">If GST registered, apply for cancellation on GST portal. Obtain GST cancellation certificate as supporting documentation for STK-2.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST cancelled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">GST</text><text x="60" y="50" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CANCELLED</text></svg></div><span class="illustration-label">GST Done</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pass Board Resolution</h3><p class="step-description">Convene Board Meeting. Pass resolution approving closure and STK-2 filing, confirming nil assets and liabilities, and authorising a director/CS to file.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Director authorised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">BOARD</text></svg></div><span class="illustration-label">Board Done</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare Statement of Accounts (STK-8)</h3><p class="step-description">CA-certified statement confirming nil assets and nil liabilities. Must not be older than 30 days from STK-2 filing date.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>STK-8 certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA signed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STK</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">8</text></svg></div><span class="illustration-label">STK-8 Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Pass Special Resolution / 75% Member Consent</h3><p class="step-description">Obtain shareholder approval via Special Resolution at EGM or written consent of 75%+ paid-up capital holders confirming approval for removal from ROC register.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SR passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>75% consent obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EGM</text><text x="60" y="52" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">75% CONSENT</text></svg></div><span class="illustration-label">Members Approved</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Prepare Affidavits and Indemnity Bond</h3><p class="step-description">STK-4 affidavits from each director (nil liabilities, no proceedings). STK-3 Indemnity Bond from directors and majority shareholders.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>STK-4 signed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>STK-3 executed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="34" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">STK-4</text><rect x="65" y="20" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="80" y="34" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">STK-3</text></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">File STK-2 with C-PACE</h3><p class="step-description">File Form STK-2 on MCA V3 portal. Government fee INR 10,000. Attach all documents: Board Resolution, Special Resolution, STK-3, STK-4, STK-8, bank closure certificate.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>STK-2 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SRN generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STK-2 FILED</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Company Closure</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose / Notes</th></tr></thead><tbody>
<tr><td>Form STK-2</td><td>Voluntary strike-off application under Section 248(2) - filed on MCA V3 portal</td></tr>
<tr><td>Board Resolution</td><td>Approving closure and authorising STK-2 filing</td></tr>
<tr><td>Special Resolution / 75% Member Consent</td><td>Passed at EGM or through written consent; certifies shareholder approval</td></tr>
<tr><td>Affidavit by Directors (STK-4)</td><td>Individual affidavit by every director confirming nil liabilities, no pending proceedings</td></tr>
<tr><td>Indemnity Bond (STK-3)</td><td>Executed by directors and majority shareholders against future liabilities</td></tr>
<tr><td>Statement of Accounts (STK-8)</td><td>CA-certified showing nil assets/liabilities, not older than 30 days</td></tr>
<tr><td>Bank Closure Certificate</td><td>Proof that all company accounts are closed</td></tr>
<tr><td>Latest Filed ITR Acknowledgement</td><td>Income tax compliance evidence</td></tr>
<tr><td>GST Cancellation Certificate (if applicable)</td><td>Proof of GST registration cancellation</td></tr>
<tr><td>DSC of Authorised Director</td><td>Valid Digital Signature for MCA V3 e-filing</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Mistakes to Avoid in Company Closure</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Applying before clearing pending ROC filings</td><td>MCA rejects STK-2 if overdue returns are pending</td><td>Patron Accounting files all overdue AOC-4 and MGT-7 as part of pre-closure cleanup before STK-2</td></tr>
<tr><td>Not closing bank accounts before filing</td><td>Open bank accounts disqualify the application</td><td>We verify all accounts closed and obtain bank closure certificates before proceeding</td></tr>
<tr><td>STK-8 Statement of Accounts older than 30 days</td><td>Must be freshly certified by CA within 30 days of STK-2 filing</td><td>Our CA prepares STK-8 immediately before filing to ensure 30-day compliance</td></tr>
<tr><td>Attempting STK-2 when company has liabilities</td><td>Even small outstanding dues make company ineligible</td><td>Complete pre-filing audit to identify and clear all liabilities before initiating closure</td></tr>

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
            <h2 class="section-title">Company Closure Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Private Limited Company Closure</td><td>INR 4,999 + GST (board resolution, special resolution, STK-3, STK-4, STK-8, STK-2 filing)</td></tr>
<tr><td>OPC Closure</td><td>INR 3,999 + GST (sole member consent, simplified documentation)</td></tr>
<tr><td>Pre-Closure Compliance Cleanup (if filings overdue)</td><td>INR 2,999+ + GST (AOC-4, MGT-7 filing for overdue years) + MCA late fees</td></tr>
<tr><td>GST Registration Cancellation (add-on)</td><td>INR 1,999 + GST</td></tr>
<tr><td>Government Fee - Form STK-2</td><td>INR 10,000 (flat fee under Section 248(2))</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Fee of INR 10,000)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Company Closure consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20closure%20services%20-%20STK-2%20strike-off." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company Closure Timeline and Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-filing: clear pending filings, close bank accounts, cancel GST</td><td>2-4 weeks</td></tr>
<tr><td>Board Meeting + Special Resolution</td><td>1-3 days</td></tr>
<tr><td>Document preparation (STK-3, STK-4, STK-8)</td><td>3-5 days</td></tr>
<tr><td>STK-2 filing on MCA V3 portal</td><td>1 day</td></tr>
<tr><td>C-PACE review, public notice, 30-day objection period</td><td>30-45 days</td></tr>
<tr><td>Dissolution in Official Gazette (STK-7)</td><td>2-4 weeks after no objection</td></tr>
<tr><td>Total with Patron Accounting (end-to-end)</td><td>45-75 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Consequences of NOT closing:</strong> Annual filing obligations continue; INR 100/day late fees accumulate for AOC-4/MGT-7; directors face Section 164(2) disqualification (5-year bar) if returns not filed for 3 consecutive years; ROC may initiate suo moto strike-off without consent.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Company Closure?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Complete Pre-Filing Audit</h3><p class="feature-text">Identify and clear all pending ROC, income tax, and GST dues before STK-2 filing.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">C-PACE Expertise</h3><p class="feature-text">Hands-on MCA V3 portal and C-PACE filing experience. Real-time status tracking with updates at every stage.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Accurate Documentation</h3><p class="feature-text">STK-3 (Indemnity Bond), STK-4 (Affidavits), and STK-8 (Statement of Accounts) drafted to C-PACE standards.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">45-75 Day End-to-End</h3><p class="feature-text">From engagement to dissolution notice in the Official Gazette. Avg 45-60 days for private limited companies.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Transparent Flat Fee</h3><p class="feature-text">Starting at INR 4,999 - no hidden charges. Government fee of INR 10,000 quoted separately.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pan-India Coverage</h3><p class="feature-text">C-PACE has pan-India jurisdiction. Patron Accounting serves companies from Pune, Mumbai, Delhi, and Bangalore offices.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Companies Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>1,000+ Companies Served | Avg 45-60 Days to Dissolution | 100% C-PACE Compliant Process | CA and CS Team with 15+ Years Experience</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">STK-2 Strike-Off vs NCLT Winding Up</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>STK-2 Strike-Off</th><th>NCLT Winding Up</th></tr></thead>
                    <tbody>
                        <tr><td>Outstanding Liabilities</td><td>Not permitted - nil liabilities required</td><td>Suitable - liquidator settles liabilities</td></tr>
<tr><td>Assets to Distribute</td><td>Not permitted - nil assets required</td><td>Suitable - assets distributed post-liquidation</td></tr>
<tr><td>Business Activity</td><td>No operations for 2+ years</td><td>May have ongoing operations</td></tr>
<tr><td>Cost</td><td>INR 10,000 + professional fee</td><td>High - legal and liquidator fees</td></tr>
<tr><td>Time</td><td>45-75 days (C-PACE)</td><td>6 months to 2+ years</td></tr>
<tr><td>NCLT Involvement</td><td>None</td><td>Mandatory - NCLT orders dissolution</td></tr>
<tr><td>Best For</td><td>Dormant startups, inactive entities</td><td>Companies with creditors or assets</td></tr>

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
            <h2 class="section-title">Related Corporate Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="#">LLP Closure</a> - strike-off via Form 24 under C-PACE (from August 2024)</li>
<li><a href="/private-limited-company-compliance">Annual ROC Compliance</a> - MGT-7, AOC-4, director KYC filing</li>
<li><a href="#">Director Disqualification Resolution</a> - DIN restoration and compounding</li>
<li><a href="/change-in-name-of-company">Company Name Change</a> - MOA amendment with ROC approval</li>
<li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - start fresh with new entity</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Sections 248-252 Companies Act 2013</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Requirement / Effect</th></tr></thead><tbody>
<tr><td>Section 248(1)</td><td>ROC-initiated (suo moto) strike-off for non-operational or non-filing companies.</td></tr>
<tr><td>Section 248(2)</td><td>Voluntary strike-off application by company via Form STK-2. Government fee INR 10,000.</td></tr>
<tr><td>Section 248(5)</td><td>ROC publishes dissolution notice in Official Gazette (STK-7); company deemed dissolved.</td></tr>
<tr><td>Section 249</td><td>Bars on application - recent name/office change, asset disposal, pending proceedings.</td></tr>
<tr><td>Section 250</td><td>Company ceases to operate; Certificate of Incorporation cancelled from Gazette date.</td></tr>
<tr><td>Section 251</td><td>Liability of directors continues as if company not dissolved.</td></tr>
<tr><td>Section 252</td><td>Restoration by NCLT within 3 years if unjustly struck off.</td></tr>
<tr><td>Section 164(2)</td><td>Director disqualification (5 years) if company fails to file returns for 3 consecutive years.</td></tr>
<tr><td>C-PACE Notification (March 2023)</td><td>Pan-India centralized authority. Extended to LLPs from August 2024.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Link:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal - Forms and Filing</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Company Closure</h2>
                    <p class="faq-expanded__lead">Get answers about STK-2 filing, C-PACE processing, eligibility, timelines, and post-dissolution liability.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Company Closure',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is company closure in India?</h3>
                        <div class="faq-expanded__a"><p>Company closure (strike-off) is the legal process of removing a company from the Register of Companies under Section 248 of the Companies Act 2013. Once struck off, the company ceases to exist, its Certificate of Incorporation is cancelled, and annual compliance obligations end.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which form is used for voluntary company closure?</h3>
                        <div class="faq-expanded__a"><p>Form STK-2 under Section 248(2), filed with C-PACE on MCA V3 portal with a government fee of INR 10,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is C-PACE and why does it matter?</h3>
                        <div class="faq-expanded__a"><p>C-PACE (Centre for Processing Accelerated Corporate Exit) is MCA's pan-India centralized authority, operational since May 2023. It has reduced processing time from over 2 years to under 2 months. As of July 2025, C-PACE had dissolved 38,658 companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the eligibility criteria for filing STK-2?</h3>
                        <div class="faq-expanded__a"><p>No business for 2+ consecutive FYs or never commenced. Nil liabilities. No open bank accounts. All statutory filings cleared. No pending legal proceedings. Not listed. No asset disposal in last 3 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does company closure take with C-PACE?</h3>
                        <div class="faq-expanded__a"><p>C-PACE processes applications in under 2 months. With Patron Accounting including pre-closure compliance cleanup, total time is 45 to 75 days for a private limited company.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if an inactive company does not close formally?</h3>
                        <div class="faq-expanded__a"><p>Annual filing obligations continue. Penalties accumulate. Directors risk disqualification under Section 164(2) for 5 years if returns not filed for 3 consecutive years. ROC may initiate suo moto strike-off.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Are directors still liable after company dissolution?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 251, directors remain personally liable for any past dues, undisclosed liabilities, or fraud as if the company had not been dissolved. The Indemnity Bond (STK-3) is mandatory for this reason.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Which form?</strong> STK-2 under Section 248(2) with INR 10,000 government fee, filed with C-PACE.</p>
<p><strong>How long?</strong> C-PACE processes in under 2 months. Total with Patron: 45-75 days.</p>
<p><strong>Can company be restored?</strong> Yes, via NCLT within 3 years under Section 252.</p>
<p><strong>Directors still liable?</strong> Yes - Section 251 keeps liability alive post-dissolution for undisclosed liabilities.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Close Your Inactive Company - Avoid Director Disqualification</h2>
            <div class="content-text">
                
                <p><strong>Risk of NOT closing:</strong></p>
<ul>
<li><strong>Annual filing trap:</strong> AOC-4 and MGT-7 must be filed even with no business - INR 100/day late fee accumulates</li>
<li><strong>Director disqualification:</strong> Section 164(2) - 5-year DIN disqualification if returns not filed for 3 consecutive years</li>
<li><strong>Compulsory strike-off:</strong> ROC may initiate suo moto under Section 248(1) without your consent</li>
<li><strong>Continuing costs:</strong> Statutory audit, DIR-3 KYC, and compliance costs every year</li>
</ul>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20close%20my%20inactive%20company.%20Please%20help." target="_blank">WhatsApp us</a> for a free consultation on company closure.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Close Your Company Legally - Starting at INR 4,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">An inactive company on the MCA register is a compliance liability - attracting annual filings, penalties, and director disqualification risk. C-PACE has made voluntary closure faster than ever, processing STK-2 applications in under 2 months.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's CA and CS team handles the entire process from pre-closure compliance cleanup to STK-7 dissolution notice in the Official Gazette. 1,000+ companies served with 100% C-PACE compliant process.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20closure%20services%20-%20STK-2%20strike-off." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Company%20Closure%20-%20STK-2%20Filing&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20company%20closure%20and%20STK-2%20filing.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Company Closure Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Close your inactive company legally from Patron Accounting offices across India.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Company Closure by City</div><div class="pa-block-sub">STK-2 filing and C-PACE processing from Patron Accounting</div><div class="pa-city-grid">
<a href="/company-closure/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/company-closure/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/company-closure/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>

</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Company and director compliance services</div><div class="pa-cross-grid">
<a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Closure</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual ROC Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director Disqualification</div><div class="pa-card-sub">India</div></div></a>
<a href="/change-in-name-of-company" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Name Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: MCA amending Companies (Removal of Names) Rules 2016, C-PACE operational updates, or Section 248-252 amendments.</p>
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
