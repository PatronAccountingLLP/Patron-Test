
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Proprietorship Registration - Process, Documents, GST & MSME</title>
    <meta name="description" content="Proprietorship registration in India. PAN, Aadhaar, GST, Udyam, Shop Act license. No minimum capital. 10-15 day process. Expert CA and CS team support.">
    <link rel="canonical" href="/proprietorship-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Proprietorship Registration - Process, Documents, GST & MSME">
    <meta property="og:description" content="Proprietorship registration in India. PAN, Aadhaar, GST, Udyam, Shop Act license. No minimum capital. 10-15 day process. Expert CA and CS team support.">
    <meta property="og:url" content="/proprietorship-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Proprietorship Registration - Process, Documents, GST & MSME">
    <meta name="twitter:description" content="Proprietorship registration in India. PAN, Aadhaar, GST, Udyam, Shop Act license. No minimum capital. 10-15 day process. Expert CA and CS team support.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Proprietorship Registration: Process & Documents",
          "description": "Proprietorship registration in India. PAN, Aadhaar, GST, Udyam, Shop Act license. No minimum capital. 10-15 day process. Expert CA and CS team support.",
          "url": "https://www.patronaccounting.com/proprietorship-registration",
          "serviceType": "Proprietorship Registration: Process & Documents",
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
            "url": "https://www.patronaccounting.com/proprietorship-registration",
            "price": "200"
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
              "name": "Proprietorship Registration: Process & Documents",
              "item": "https://www.patronaccounting.com/proprietorship-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is proprietorship registration mandatory in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, there is no mandatory formal registration to start a sole proprietorship in India. However, certain registrations are practically necessary: PAN card for tax filing, GST registration if turnover exceeds Rs 40 lakh for goods or Rs 20 lakh for services under Section 22 of the CGST Act, 2017, Shop and Establishment Act license from the local municipal authority, and a business bank account. Without these registrations, operating the business becomes extremely difficult."
              }
            },
            {
              "@type": "Question",
              "name": "What is the cost of proprietorship registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The total cost of proprietorship registration is minimal. The Shop and Establishment license costs Rs 200-1,000 depending on the state and municipality. GST registration is free on the GST portal. Udyam/MSME registration is free and completely online. PAN application costs Rs 110 if a new PAN is needed. Professional service charges for the complete package vary - contact Patron Accounting for a free quote."
              }
            },
            {
              "@type": "Question",
              "name": "Can a proprietorship firm get a GST number?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, a sole proprietorship firm can obtain a GSTIN by registering on the GST portal (gst.gov.in). GST registration is mandatory if your annual turnover exceeds Rs 40 lakh for goods or Rs 20 lakh for services under Section 22 of the CGST Act, 2017. It is also mandatory for e-commerce sellers and inter-state suppliers regardless of turnover. The GSTIN is issued in the proprietor's name along with the trade name."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between proprietorship and OPC?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A sole proprietorship has no separate legal identity from its owner, offers unlimited liability, and is not registered under any company law. A One Person Company (OPC) under Section 2(62) of the Companies Act, 2013 is a separate legal entity with limited liability, requires a nominee director, and must comply with MCA filing requirements including ROC annual returns and statutory audit. OPC is suitable when you want single ownership with limited liability."
              }
            },
            {
              "@type": "Question",
              "name": "Can a proprietorship firm hire employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, a sole proprietorship firm can hire any number of employees. The proprietor must comply with applicable labour laws including the Shops and Establishment Act for working hours, EPF registration if employing 20+ workers, ESIC registration if applicable, and professional tax registration. TDS on salary must be deducted under Section 192 of the Income Tax Act."
              }
            },
            {
              "@type": "Question",
              "name": "Can a proprietorship be converted to a Pvt Ltd company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, a proprietorship can be converted to a private limited company. This involves incorporating a new Pvt Ltd company via SPICe+ on the MCA portal and then transferring the proprietorship business assets, liabilities, contracts, and employees to the new company. GST migration, bank account changes, and vendor/client communication are handled during the transition."
              }
            },
            {
              "@type": "Question",
              "name": "Do I need to maintain books of accounts for a proprietorship?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "If you opt for presumptive taxation under Section 44AD (business turnover up to Rs 2 crore) or Section 44ADA (professional receipts up to Rs 75 lakh with 95%+ digital receipts), you are not required to maintain detailed books. However, if turnover exceeds these thresholds or you declare income below the presumptive rate, full books per Section 44AA and tax audit under Section 44AB become mandatory. Quick Answers Is there a separate PAN for proprietorship? No. The proprietor's personal PAN card is used for all business transactions and tax filings. Can an NRI start a proprietorship in India? Not without prior government approval. The proprietor must be an Indian citizen and resident of India. Can I operate an e-commerce business as a proprietor? Yes, but GST registration is mandatory for e-commerce sellers regardless of turnover under Section 24 of the CGST Act, 2017. What is the Udyam registration portal? udyamregistration.gov.in - free, Aadhaar-based online MSME registration portal by the Government of India. Can a proprietorship firm take loans? Yes. Banks provide business loans, overdraft facilities, and MUDRA loans (up to Rs 10 lakh under Shishu, Kishore, Tarun categories) to proprietorship firms."
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
                        Proprietorship Registration in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">10 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, address proof, business address proof</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Government fees starting from Rs 200 (Shop Act) + GST registration free</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Single Indian resident aged 18+, no minimum capital required</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 10-15 working days for complete registration package</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Proprietorship%20Registration%20Services&body=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Proprietorship Registration',
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
    'ctaText'    => 'From GST registration to ongoing ITR filing - Patron Accounting handles it all so you can focus on growing your business.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-is-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Compare</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Proprietorship Registration - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Proprietorship Registration Services at a Glance</strong></p>
                    <p><p>Proprietorship registration is the process of legally establishing a sole proprietorship business in India through a combination of tax registrations (PAN, GST), MSME/Udyam registration, Shop and Establishment Act license, and a business bank account. No formal incorporation under the Companies Act is required. A single Indian resident aged 18+ can start with any capital, and the entire setup takes 10-15 working days.</p></p>
                </div>
                <p><div class="table-responsive-wrapper" style="margin:20px 0;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Business Structure</td><td>Sole Proprietorship - owned and managed by one individual</td></tr><tr><td>Governing Laws</td><td>Shops and Establishment Act (state-specific), Income Tax Act 1961, GST Act 2017, MSME Development Act 2006</td></tr><tr><td>Minimum Capital</td><td>No minimum prescribed - start with any amount</td></tr><tr><td>Owner Requirement</td><td>1 person - must be Indian citizen and resident, aged 18+</td></tr><tr><td>Key Registrations</td><td>PAN, GST (if turnover exceeds threshold), Udyam/MSME, Shop Act license</td></tr><tr><td>Liability</td><td>Unlimited - proprietor personally liable for all business debts</td></tr><tr><td>Timeline</td><td>10-15 working days for complete registration package</td></tr></tbody></table></div></p>
                <p><p>Proprietorship registration is the simplest and most cost-effective way to start a business in India. A sole proprietorship has no separate legal identity from its owner - the proprietor and the business are legally the same entity. This structure is ideal for small traders, freelancers, local shop owners, consultants, and home-based businesses that want complete control with minimal compliance. Unlike companies or LLPs, there is no formal incorporation process through the Ministry of Corporate Affairs. Instead, proprietorship identity is established through a combination of tax registrations and government licenses.</p></p>
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
                <h2 class="section-title">What Is Proprietorship Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A sole proprietorship is a business structure owned, managed, and controlled by a single individual, where the owner and the business have no separate legal identity, and the proprietor bears unlimited personal liability for all business obligations.</p><p>Unlike a private limited company registered under the Companies Act, 2013 or an LLP under the LLP Act, 2008, a proprietorship firm has no single governing legislation for incorporation. Its legal existence is established through registrations under various statutes: the Shops and Establishment Act of the respective state for operating license, the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">CGST Act, 2017</a> for GST registration when turnover exceeds Rs 40 lakh for goods (Rs 20 lakh for services, Rs 10 lakh in special category states) under Section 22, the <a href="https://udyamregistration.gov.in" target="_blank" rel="noopener">Udyam Registration</a> portal under the MSME Development Act, 2006 for MSME benefits, and the Income Tax Act, 1961 for PAN and income tax filing.</p><p>The proprietor's PAN serves as the business PAN - no separate PAN is issued to the firm.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Proprietorship Registration:</strong></p>
                    <p><strong>Sole Proprietorship:</strong> A business owned by a single individual with no separate legal entity from the owner. All profits belong to the proprietor, and liability is unlimited.</p><p><strong>Shop and Establishment License (Gumasta):</strong> A registration certificate issued by the local municipal authority under the state-specific Shops and Establishment Act, mandatory for operating any commercial establishment.</p><p><strong>Udyam Registration:</strong> Free online registration on the udyamregistration.gov.in portal under the MSME Development Act, 2006 that classifies the business as Micro, Small, or Medium Enterprise and provides access to government schemes, subsidies, and priority lending.</p><p><strong>GSTIN:</strong> A 15-digit Goods and Services Tax Identification Number issued upon GST registration under the CGST Act, 2017. Mandatory when turnover exceeds the prescribed threshold or for inter-state supply.</p><p><strong>Section 44AD/44ADA:</strong> Presumptive taxation schemes under the Income Tax Act, 1961 allowing eligible proprietorship businesses (turnover up to Rs 2 crore for 44AD, Rs 75 lakh for professionals under 44ADA with digital receipts exceeding 95%) to declare income at a presumed percentage without maintaining detailed books of accounts.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Proprietorship Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GST + Udyam Registered</span>
                        <strong>Sole Proprietorship</strong>
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
            <h2 class="section-title">Who Should Register a Proprietorship Firm?</h2>
            <div class="content-text">
                
                <ul><li><strong>Small Traders and Shop Owners:</strong> Looking for the simplest business structure with minimal compliance</li><li><strong>Freelancers and Consultants:</strong> Designers, writers, accountants, and independent professionals who want a formal business identity</li><li><strong>Home-Based Business Owners:</strong> Selling products online through Amazon, Flipkart, or Meesho (GST registration required for e-commerce sellers)</li><li><strong>Local Service Providers:</strong> Tutors, electricians, plumbers, and event managers</li><li><strong>First-Time Entrepreneurs:</strong> Testing a business idea before scaling to a company or LLP structure</li></ul><p><strong>Eligibility Requirements:</strong></p><ul><li>Must be an Indian citizen and a resident of India</li><li>Must be aged 18 years or above</li><li>Only one person can be the proprietor - cannot have partners or co-owners</li><li>No minimum capital requirement - start with any investment amount</li><li>NRIs and foreign nationals cannot start a sole proprietorship without prior government approval</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Proprietorship Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Complete Registration Package</strong></td><td>End-to-end proprietorship setup including PAN verification, GST registration, Udyam/MSME registration, Shop Act license, and bank account opening assistance</td></tr><tr><td><strong>GST Registration</strong></td><td>Online GST application filing, GSTIN allotment within 3-7 working days, and guidance on GST return filing (GSTR-1, GSTR-3B) under the CGST Act, 2017</td></tr><tr><td><strong>Udyam/MSME Registration</strong></td><td>Free online registration on udyamregistration.gov.in with Aadhaar-based verification for government subsidies and priority lending</td></tr><tr><td><strong>Shop and Establishment Act License</strong></td><td>Application filing with local municipal authority, document preparation, and follow-up for license issuance under state Shops and Establishment Act</td></tr><tr><td><strong>Business Bank Account Opening</strong></td><td>Documentation assistance for opening current account in business trade name using GST certificate and Udyam registration as legal entity proof</td></tr><tr><td><strong>Income Tax and Compliance Advisory</strong></td><td>ITR filing guidance under Section 44AD/44ADA presumptive taxation, TDS compliance, advance tax planning, and ongoing bookkeeping support</td></tr>

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
            <h2 class="section-title">6-Step Proprietorship Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From PAN verification to business bank account opening - our streamlined process takes 10-15 working days with zero hassle.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain PAN Card</h3><p class="step-description">The proprietor's personal PAN card serves as the business PAN. If you do not have a PAN, apply online through the NSDL or UTIITSL portal. PAN is mandatory for all tax filings, bank account opening, and GST registration under the Income Tax Act, 1961. Ensure PAN is linked with Aadhaar as per Section 139AA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Personal PAN = Business PAN</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar linking mandatory</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="32" x2="85" y2="32" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="42" x2="75" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="35" y1="50" x2="65" y2="50" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.2"/></svg></div><span class="illustration-label">PAN Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Choose a Business Name and Address</h3><p class="step-description">Select a unique trade name for your proprietorship firm. Verify the name does not infringe on any existing trademark by searching the IP India trademark database at ipindiaonline.gov.in. Secure a business address - this can be a rented commercial space or your own residential premises.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Trademark search</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Home or commercial address</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 40l8-16h8l8 16" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><line x1="46" y1="48" x2="74" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/></svg></div><span class="illustration-label">Name Selected</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Apply for Shop and Establishment Act License (Gumasta)</h3><p class="step-description">Register your business with the local municipal authority under the respective state's Shops and Establishment Act. Requirements vary by state but typically include application form, PAN, Aadhaar, address proof, and a fee of Rs 200-1,000. This license is usually issued within 7-15 days and serves as primary proof of business existence.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>State-specific process</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Primary business proof</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M56 30l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><line x1="35" y1="50" x2="85" y2="50" stroke="#E8712C" stroke-width="2" opacity="0.4"/></svg></div><span class="illustration-label">Gumasta Issued</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Register for GST (If Applicable)</h3><p class="step-description">Apply for GST registration on the GST portal (gst.gov.in) if your turnover exceeds Rs 40 lakh for goods or Rs 20 lakh for services (Rs 10 lakh in special category states) under Section 22 of the CGST Act, 2017. GST registration is also mandatory for e-commerce sellers, inter-state suppliers, and those making taxable supplies regardless of turnover.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Free on GST portal</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-7 day GSTIN issuance</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="38" y="42" fill="#14365F" font-size="18" font-weight="800" font-family="Barlow">GST</text><line x1="30" y1="52" x2="90" y2="52" stroke="#E8712C" stroke-width="2" opacity="0.4"/></svg></div><span class="illustration-label">GSTIN Allotted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Complete Udyam/MSME Registration</h3><p class="step-description">Register online at udyamregistration.gov.in using your Aadhaar number and PAN. This is a free, paperless, Aadhaar-based self-declaration process under the MSME Development Act, 2006. The Udyam Registration Certificate is generated instantly and provides access to government schemes, subsidies, and priority lending from banks.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Free and instant</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MSME benefits unlocked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 12l30 16v28l-30 16-30-16V28z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 42l5 5 10-12" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="36" y="78" fill="#14365F" font-size="10" font-weight="700" font-family="Barlow">UDYAM</text></svg></div><span class="illustration-label">MSME Registered</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Open a Business Bank Account</h3><p class="step-description">Open a current account in the name of your proprietorship business at any scheduled bank. Banks typically require 2 legal entity proofs such as GST Registration Certificate, Udyam Registration Certificate, Shop and Establishment License, or IEC Code. The proprietor's PAN, Aadhaar, and photographs are also needed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2 entity proofs needed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Current account in trade name</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="20" width="70" height="40" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><circle cx="80" cy="40" r="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><line x1="35" y1="35" x2="60" y2="35" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="45" x2="55" y2="45" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Account Opened</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Proprietorship Registration</h2>
            <div class="content-text">
                
                <ul><li>PAN card of the proprietor (serves as business PAN)</li><li>Aadhaar card of the proprietor (linked with PAN under Section 139AA)</li><li>Passport-size photographs of the proprietor</li><li>Address proof of proprietor (voter ID / driving license / passport / bank statement)</li><li>Business address proof: Rent agreement + NOC from owner (rented) OR utility bill / property tax receipt (owned)</li><li>Cancelled cheque or bank statement of existing savings account</li><li>Mobile number linked with Aadhaar (for Udyam OTP verification)</li><li>Email ID for receiving registration certificates</li><li>Nature of business activity description (for GST and Udyam)</li><li>Photographs of business premises (for GST registration)</li></ul><p><em>Download our free proprietorship registration checklist to ensure complete filing.</em></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Bank Refuses Current Account Without Documentation</strong></td><td>Banks require at least 2 legal entity proofs (GST, Udyam, Shop Act)</td><td>We ensure all registrations are obtained first, then coordinate with the bank for a complete documentation package</td></tr><tr><td><strong>GST Application Rejected - Address Mismatch</strong></td><td>Inconsistencies between Aadhaar address and business address cause rejections</td><td>Our team ensures address proofs are consistent across all documents and handles verification including site inspection coordination</td></tr><tr><td><strong>Voluntary vs Mandatory GST Confusion</strong></td><td>Proprietors unsure whether GST is needed for their turnover/business type</td><td>We assess turnover, business type, and supply chain to determine if registration is mandatory (Section 22) or voluntary (Section 25) under CGST Act</td></tr><tr><td><strong>Missing Out on MSME Benefits</strong></td><td>Skipping Udyam registration means losing government subsidies and priority lending</td><td>Udyam registration completed as part of our standard package at no extra cost for all eligible proprietors</td></tr>

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
            <h2 class="section-title">Proprietorship Registration Fees and Government Charges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Shop and Establishment Act License</td><td class="table-amount">Rs 200 - Rs 1,000 (varies by state and municipality)</td></tr><tr><td>GST Registration</td><td class="table-amount">Free (no government fee on GST portal)</td></tr><tr><td>Udyam/MSME Registration</td><td class="table-amount">Free (online, Aadhaar-based, no charges)</td></tr><tr><td>PAN Application (if new)</td><td class="table-amount">Rs 110 (NSDL/UTIITSL)</td></tr><tr><td>Bank Current Account Opening</td><td class="table-amount">Varies by bank (typically Rs 5,000 - Rs 10,000 initial deposit)</td></tr><tr><td>Trademark Registration (optional)</td><td class="table-amount">Rs 4,500 (government fee for individuals/startups)</td></tr><tr><td><strong>Patron Accounting Professional Fees</strong></td><td class="table-amount"><strong>Starting from INR 1,499 (Exl GST and Govt. Charges)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Proprietorship Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for Proprietorship Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>PAN Card (if new)</td><td>3 - 5 working days</td></tr><tr><td>Shop and Establishment License</td><td>7 - 15 working days (varies by state)</td></tr><tr><td>GST Registration</td><td>3 - 7 working days</td></tr><tr><td>Udyam/MSME Registration</td><td>Instant (online, real-time)</td></tr><tr><td>Business Bank Account Opening</td><td>3 - 5 working days</td></tr><tr><td><strong>Total (Complete Package)</strong></td><td><strong>10 - 15 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Udyam registration is instant and provides immediate access to MSME benefits. GST registration is processed within 3-7 working days. Shop Act license timelines vary significantly by state and municipality. Patron Accounting handles state-specific procedures across all 28 states and 8 union territories.</p>

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
            <h2 class="section-title">Why Choose Professional Proprietorship Registration?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Simplest Business Structure</h3><p>No formal incorporation, no MCA filing, no annual ROC compliance. Start business with minimal paperwork and maintain complete control over all decisions.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Zero Minimum Capital</h3><p>Unlike private limited companies or NBFCs, a proprietorship can start with any amount of investment. No capital contribution requirements or share structure needed.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Tax Advantages</h3><p>Proprietors can avail presumptive taxation under Section 44AD (business) and 44ADA (professionals) of the Income Tax Act, declaring income at 6-8% of turnover without detailed books.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>Easy Conversion Path</h3><p>When your business grows, converting a proprietorship to a <a href="/private-limited-company-registration">Pvt Ltd</a> or <a href="/one-person-company-registration">OPC</a> is straightforward. The proprietorship serves as an ideal proving ground.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>MSME Benefits</h3><p>Udyam-registered proprietorships access priority lending, government subsidies, protection against delayed payments under MSMED Act, and exemption from certain direct tax provisions.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p><p>"Got required documents within 4 hours of request for GST registration." - Google Review</p><p>"Took minimum time, really impressive acumen. And it's not expensive at all." - Rajib Dutta</p><p><strong>Trusted by:</strong> Hyundai, Asian Paints, Bridgestone, and hundreds of SMEs across India.</p><p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Proprietorship vs Pvt Ltd vs OPC vs Partnership Firm</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Proprietorship</th><th>Pvt Ltd Company</th><th>One Person Company</th><th>Partnership Firm</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Law</strong></td><td>No single Act; Shops Act + IT Act + GST Act</td><td>Companies Act, 2013</td><td>Companies Act, 2013</td><td>Indian Partnership Act, 1932</td></tr><tr><td><strong>Owners</strong></td><td>1 person only</td><td>2-200 shareholders</td><td>1 shareholder + 1 nominee</td><td>2-50 partners</td></tr><tr><td><strong>Legal Identity</strong></td><td>No separate entity</td><td>Separate legal entity</td><td>Separate legal entity</td><td>No separate entity</td></tr><tr><td><strong>Liability</strong></td><td>Unlimited</td><td>Limited to shares</td><td>Limited to shares</td><td>Unlimited</td></tr><tr><td><strong>Min Capital</strong></td><td>None</td><td>None</td><td>None</td><td>None</td></tr><tr><td><strong>Registration Cost</strong></td><td>Rs 200 - Rs 1,000</td><td>Rs 5,000 - Rs 15,000+</td><td>Rs 3,000 - Rs 10,000+</td><td>Rs 500 - Rs 2,000</td></tr><tr><td><strong>Compliance</strong></td><td>Minimal (ITR + GST)</td><td>High (audit, AGM, ROC)</td><td>Moderate (audit, ROC)</td><td>Low (ITR + GST)</td></tr><tr><td><strong>Funding Options</strong></td><td>Self + bank loans</td><td>Equity, VCs, angels, FDI</td><td>Limited equity</td><td>Self + partners + bank</td></tr>

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
            <h2 class="section-title">Related Services from Patron Accounting</h2>
            <div class="content-text">
                
                <ul><li><strong><a href="/private-limited-company-registration">Private Limited Company Registration</a></strong> - When you're ready to scale up with limited liability</li><li><strong><a href="/one-person-company-registration">One Person Company Registration</a></strong> - Limited liability with single ownership</li><li><strong><a href="/partnership-firm-registration">Partnership Firm Registration</a></strong> - For businesses with 2+ co-owners</li><li><strong><a href="/gst-registration">GST Registration</a></strong> - Mandatory once turnover threshold is crossed</li><li><strong><a href="/udyam-registration">Udyam Registration</a></strong> - MSME benefits and government schemes</li><li><strong><a href="/shop-act-registration">Shop Act Registration</a></strong> - State-specific operating license</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Proprietorship Firms</h2>
            <div class="content-text">
                
                <p><strong>Key Governing Laws:</strong> Shops and Establishment Act (state-specific) governs operating license, working hours, and employee welfare. Income Tax Act, 1961 provides Section 44AD (presumptive taxation for businesses with turnover up to Rs 2 crore) and Section 44ADA (professionals with gross receipts up to Rs 75 lakh). Central Goods and Services Tax Act, 2017 mandates GST registration under Section 22 when turnover exceeds threshold and Section 25 for voluntary registration. MSME Development Act, 2006 enables <a href="https://udyamregistration.gov.in" target="_blank" rel="noopener">Udyam registration</a> for MSME classification and benefits.</p><p><strong>Tax Filing Obligations:</strong> Income Tax Return (ITR-3 or ITR-4 for presumptive taxation) filed annually by 31 July. GST returns (GSTR-1 and GSTR-3B) monthly or quarterly depending on turnover. Tax audit under Section 44AB mandatory if turnover exceeds Rs 1 crore (or Rs 10 crore with 95%+ digital transactions).</p><p><strong>Penalties for Non-Compliance:</strong> Late filing of ITR: Rs 5,000 (or Rs 1,000 if income below Rs 5 lakh) under Section 234F. Late filing of GST return: Rs 50/day (CGST) + Rs 50/day (SGST) = Rs 100/day, maximum Rs 5,000 per return under Section 47 of the CGST Act. Operating without Shop Act license: Fine up to Rs 25,000 depending on state.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions on Proprietorship Registration</h2>
                    <p class="faq-expanded__lead">Get answers to the most common questions about registering a sole proprietorship business in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Proprietorship Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is proprietorship registration mandatory in India?</h3>
                        <div class="faq-expanded__a"><p>No, there is no mandatory formal registration to start a sole proprietorship in India. However, certain registrations are practically necessary: PAN card for tax filing, GST registration if turnover exceeds Rs 40 lakh for goods or Rs 20 lakh for services under Section 22 of the CGST Act, 2017, Shop and Establishment Act license from the local municipal authority, and a business bank account. Without these registrations, operating the business becomes extremely difficult.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the cost of proprietorship registration?</h3>
                        <div class="faq-expanded__a"><p>The total cost of proprietorship registration is minimal. The Shop and Establishment license costs Rs 200-1,000 depending on the state and municipality. GST registration is free on the GST portal. Udyam/MSME registration is free and completely online. PAN application costs Rs 110 if a new PAN is needed. Professional service charges for the complete package vary - contact Patron Accounting for a free quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can a proprietorship firm get a GST number?</h3>
                        <div class="faq-expanded__a"><p>Yes, a sole proprietorship firm can obtain a GSTIN by registering on the GST portal (gst.gov.in). GST registration is mandatory if your annual turnover exceeds Rs 40 lakh for goods or Rs 20 lakh for services under Section 22 of the CGST Act, 2017. It is also mandatory for e-commerce sellers and inter-state suppliers regardless of turnover. The GSTIN is issued in the proprietor's name along with the trade name.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between proprietorship and OPC?</h3>
                        <div class="faq-expanded__a"><p>A sole proprietorship has no separate legal identity from its owner, offers unlimited liability, and is not registered under any company law. A One Person Company (OPC) under Section 2(62) of the Companies Act, 2013 is a separate legal entity with limited liability, requires a nominee director, and must comply with MCA filing requirements including ROC annual returns and statutory audit. OPC is suitable when you want single ownership with limited liability.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a proprietorship firm hire employees?</h3>
                        <div class="faq-expanded__a"><p>Yes, a sole proprietorship firm can hire any number of employees. The proprietor must comply with applicable labour laws including the Shops and Establishment Act for working hours, EPF registration if employing 20+ workers, ESIC registration if applicable, and professional tax registration. TDS on salary must be deducted under Section 192 of the Income Tax Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a proprietorship be converted to a Pvt Ltd company?</h3>
                        <div class="faq-expanded__a"><p>Yes, a proprietorship can be converted to a private limited company. This involves incorporating a new Pvt Ltd company via SPICe+ on the MCA portal and then transferring the proprietorship business assets, liabilities, contracts, and employees to the new company. GST migration, bank account changes, and vendor/client communication are handled during the transition.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do I need to maintain books of accounts for a proprietorship?</h3>
                        <div class="faq-expanded__a"><p>If you opt for presumptive taxation under Section 44AD (business turnover up to Rs 2 crore) or Section 44ADA (professional receipts up to Rs 75 lakh with 95%+ digital receipts), you are not required to maintain detailed books. However, if turnover exceeds these thresholds or you declare income below the presumptive rate, full books per Section 44AA and tax audit under Section 44AB become mandatory.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Is there a separate PAN for proprietorship?</strong> No. The proprietor's personal PAN card is used for all business transactions and tax filings.</p><p><strong>Can an NRI start a proprietorship in India?</strong> Not without prior government approval. The proprietor must be an Indian citizen and resident of India.</p><p><strong>Can I operate an e-commerce business as a proprietor?</strong> Yes, but GST registration is mandatory for e-commerce sellers regardless of turnover under Section 24 of the CGST Act, 2017.</p><p><strong>What is the Udyam registration portal?</strong> <a href="https://udyamregistration.gov.in" target="_blank" rel="noopener">udyamregistration.gov.in</a> - free, Aadhaar-based online MSME registration portal by the Government of India.</p><p><strong>Can a proprietorship firm take loans?</strong> Yes. Banks provide business loans, overdraft facilities, and MUDRA loans (up to Rs 10 lakh under Shishu, Kishore, Tarun categories) to proprietorship firms.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Register Your Proprietorship Now?</h2>
            <div class="content-text">
                
                <p>Starting your business without proper registration limits your ability to open a business bank account, apply for government tenders, participate in e-commerce marketplaces, access MSME subsidies, and claim tax deductions. Udyam registration provides immediate access to priority sector lending at lower interest rates, and GST registration enables you to claim input tax credit on business purchases.</p><p>The entire registration process takes just 10-15 days - there is no reason to delay formalising your business identity.</p><p><strong>Start today - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Proprietorship Registration Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Proprietorship registration is the fastest, most affordable, and least complex way to establish a business identity in India. While no formal incorporation under the Companies Act is required, a combination of PAN, GST registration, Udyam/MSME registration, Shop and Establishment Act license, and a business bank account provides the legal framework needed to operate professionally, access government benefits, and build credibility.</p><p style="color:rgba(255,255,255,0.9);">Patron Accounting's CA and CS team handles the complete registration package in 10-15 working days, from document preparation to bank account opening. With offices in Pune, Mumbai, Delhi, and Gurugram, we serve sole proprietors across India with both in-person and remote support.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Proprietorship%20Registration%20Services&body=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Proprietorship Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Register your proprietorship firm from anywhere in India with our expert CA and CS team.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
<a href="/proprietorship-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/proprietorship-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/proprietorship-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/proprietorship-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Proprietorship Registration</div><div class="pa-cross-grid">
<a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/one-person-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">OPC Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/partnership-firm-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Partnership Firm Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/udyam-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Udyam Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/shop-act-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Shop Act Registration</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 9 months by our CA and CS team. Review triggers include GST threshold change, Udyam portal update, Shop Act amendment, Income Tax Section 44AD limit change, new MSME classification.</p>
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
