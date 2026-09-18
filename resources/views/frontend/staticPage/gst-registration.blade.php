
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush








@section('meta')
    <title>GST Registration Online India - Process, Documents & GSTIN</title>
    <meta name="description" content="Apply for GST registration online at gst.gov.in. Threshold: Rs 40 lakh (goods) / Rs 20 lakh (services). No govt fee. 15-digit GSTIN. 3-day processing.">
    <link rel="canonical" href="/gst-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Registration Online India - Process, Documents & GSTIN">
    <meta property="og:description" content="Apply for GST registration online at gst.gov.in. Threshold: Rs 40 lakh (goods) / Rs 20 lakh (services). No govt fee. 15-digit GSTIN. 3-day processing.">
    <meta property="og:url" content="/gst-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Registration Online India - Process, Documents & GSTIN">
    <meta name="twitter:description" content="Apply for GST registration online at gst.gov.in. Threshold: Rs 40 lakh (goods) / Rs 20 lakh (services). No govt fee. 15-digit GSTIN. 3-day processing.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Registration in India: Online Process, Fees and Limits",
          "description": "Apply for GST registration online at gst.gov.in. Threshold: Rs 40 lakh (goods) / Rs 20 lakh (services). No govt fee. 15-digit GSTIN. 3-day processing.",
          "url": "https://www.patronaccounting.com/gst-registration",
          "serviceType": "GST Registration in India: Online Process, Fees and Limits",
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
            "url": "https://www.patronaccounting.com/gst-registration",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "20",
              "maxPrice": "40",
              "priceCurrency": "INR"
            }
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
              "name": "GST Registration in India: Online Process, Fees and Limits",
              "item": "https://www.patronaccounting.com/gst-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is GST registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST Registration is the process of obtaining a unique 15-digit GSTIN from the GST portal (gst.gov.in) under the CGST Act, 2017. It enables businesses to collect GST, claim Input Tax Credit, file returns, and participate in the formal tax economy. Mandatory when aggregate turnover exceeds Rs 40 lakh (goods) or Rs 20 lakh (services) in normal states, and for certain categories regardless of turnover under Section 24."
              }
            },
            {
              "@type": "Question",
              "name": "What is the turnover limit for GST registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For supply of goods: Rs 40 lakh in normal states, Rs 20 lakh in special states. For services: Rs 20 lakh in normal states, Rs 10 lakh in special states. Certain categories (inter-state suppliers, e-commerce operators, casual taxable persons, reverse charge, ISD, OIDAR) must register regardless of turnover under Section 24 of the CGST Act."
              }
            },
            {
              "@type": "Question",
              "name": "GST registration kaise kare - GST number kaise banaye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration ke liye gst.gov.in par jaaye. 'New Registration' select karo. State, PAN, email aur mobile number dalo - OTP aayega. TRN milega. Login karke Form REG-01 ka Part B bharo - business details, partner info, address, bank details, HSN/SAC codes. Documents upload karo. DSC ya EVC se verify karo. 3 se 7 din mein GSTIN milega. Government fee nil hai. Patron Accounting poora process handle karta hai - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "Is GST registration free?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. No government fee is charged on the GST portal for registration. The entire process is online and free. Businesses may engage a professional for assistance - Patron Accounting's service fee starts from Rs 1,999 depending on entity type and complexity."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not registering under GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 122, a person who fails to register faces 10% of tax due or Rs 10,000, whichever is higher. For wilful tax evasion, 100% of tax due. Under Section 132, supply without registration where evasion exceeds Rs 5 crore can attract imprisonment up to 5 years. Tax authorities now use UPI data to detect unregistered traders exceeding thresholds."
              }
            },
            {
              "@type": "Question",
              "name": "What is GSTIN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSTIN is a unique 15-digit alphanumeric number assigned to every registered taxpayer. It is PAN-based and state-specific. Structure: 2 digits (state code) + 10 digits (PAN) + 1 digit (entity number) + 'Z' + 1 check digit. A business in multiple states needs a separate GSTIN for each. Must be displayed on all invoices, returns, and business premises."
              }
            },
            {
              "@type": "Question",
              "name": "GST registration ke baad kya karna padta hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration ke baad: (1) Har mahine GSTR-1 (outward supplies) aur GSTR-3B (summary return) file karo. (2) ITC claim karne ke liye purchase invoices match karo. (3) E-invoicing mandatory hai Rs 5 crore se zyada turnover ke liye. (4) Annual return GSTR-9 file karo. (5) GST payment har mahine 20 tarikh tak karo. Patron Accounting GST return filing bhi handle karta hai."
              }
            },
            {
              "@type": "Question",
              "name": "What are the types of GST registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Regular Registration for businesses above threshold. Composition Scheme (Section 10) for small businesses with flat tax rate. Casual Taxable Person for temporary operations. Non-Resident Taxable Person for foreign entities. Input Service Distributor (ISD) for distributing ITC across GSTINs. E-Commerce Operator for platforms facilitating supply. OIDAR for foreign digital service providers. Quick Answers Q: Voluntary registration below threshold? A: Yes. Any person can register under Section 25(3) to claim ITC and enable inter-state supply. Q: Separate GST for each state? A: Yes. GSTIN is state-specific. Multiple states need separate registrations. Q: Can I cancel GST if turnover drops? A: Yes. File Form REG-16 for voluntary cancellation if below threshold and not in compulsory category. Q: Composition scheme limit? A: Rs 1.5 crore for goods (Rs 75 lakh NE), Rs 50 lakh for services. Cannot collect tax or claim ITC."
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
                        GST Registration in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Threshold:</span> Rs 40 Lakh (Goods, Normal States) | Rs 20 Lakh (Services / Special States). Certain categories mandatory regardless of turnover.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Fee:</span> Nil - no fee charged on the GST portal (gst.gov.in). Entire application process is online and free of cost.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3 working days for non-risky Aadhaar-authenticated applications. 7-15 days for physical verification cases.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Output:</span> 15-digit GSTIN (Goods and Services Taxpayer Identification Number) + GST Registration Certificate (Form REG-06).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=GST%20Registration%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Registration',
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
    'ctaText'    => 'Get your GST registration for businesses, startups, freelancers, and e-commerce sellers with expert CA support.',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is GST</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Threshold Limits</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Registration Services at a Glance</strong></p>
                    <p>GST Registration is mandatory for every business whose aggregate turnover exceeds Rs 40 lakh for goods (Rs 20 lakh in special states) or Rs 20 lakh for services (Rs 10 lakh in special states) under Section 22 of the CGST Act, 2017. Certain categories must register regardless of turnover under Section 24. Registration is done online at gst.gov.in via Form GST REG-01. No government fee. Upon approval, a PAN-based 15-digit GSTIN is issued. GST Council approved 3-day processing for non-risky applications.</p>
                </div>
                <p>India's GST, implemented on 1 July 2017, unified the indirect tax structure by replacing 17 central and state taxes into one national tax. GST registration is the gateway to this unified system - enabling businesses to collect tax, claim Input Tax Credit (ITC), and participate in the formal economy. With over 1.4 crore active GSTINs and the launch of GST 2.0 in September 2025, the ecosystem continues to evolve. E-commerce platforms, government tenders, and inter-state trade all require a valid GSTIN.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>CGST Act, 2017 (Sec 22-30); IGST Act, 2017; SGST/UTGST Acts</td></tr>
<tr><td>Threshold - Goods (Normal)</td><td>Rs 40 lakh aggregate turnover</td></tr>
<tr><td>Threshold - Services (Normal)</td><td>Rs 20 lakh aggregate turnover</td></tr>
<tr><td>Threshold - Special States</td><td>Rs 20 lakh (goods) / Rs 10 lakh (services)</td></tr>
<tr><td>Registration Portal</td><td><a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a> (Form GST REG-01)</td></tr>
<tr><td>Government Fee</td><td>Nil</td></tr>
<tr><td>Output</td><td>15-digit GSTIN + GST Registration Certificate</td></tr>
</tbody></table></div></p>
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
                <h2 class="section-title">What Is GST Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST Registration is the process by which a business obtains a unique <strong>15-digit GSTIN</strong> from the <a href="https://gst.gov.in" target="_blank" rel="noopener">GST portal</a>, enabling them to collect GST, claim <strong>Input Tax Credit (ITC)</strong> on purchases, and file GST returns.</p>
<p>Under <strong>Section 22 of the CGST Act, 2017</strong>, every supplier whose aggregate turnover exceeds the threshold must register. 'Aggregate turnover' (Section 2(6)) means the aggregate value of all taxable supplies, exempt supplies, exports, and inter-state supplies under one PAN, computed on an all-India basis.</p>
<p>The GSTIN is PAN-based and state-specific - a business in multiple states needs a separate GSTIN in each. Structure: 2 digits (state code) + 10 digits (PAN) + entity number + 'Z' + check digit. Registration is entirely online with no physical visit. GST 2.0 (September 2025) introduced 3-day processing for non-risky applications.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Registration:</strong></p>
                    <p><strong>GSTIN:</strong> 15-digit alphanumeric identifier. PAN-based, state-specific. Required on all invoices, returns, and correspondence.</p>
<p><strong>Aggregate Turnover (Section 2(6)):</strong> Total taxable + exempt + export + inter-state supplies under one PAN, all-India, excluding GST and cess.</p>
<p><strong>CGST, SGST, IGST:</strong> Central GST (Centre, intra-state), State GST (State, intra-state), Integrated GST (Centre, inter-state/imports). Intra-state: CGST + SGST. Inter-state: IGST.</p>
<p><strong>Input Tax Credit (ITC):</strong> Credit of GST paid on purchases against GST payable on sales. Available only to registered persons. Primary incentive for voluntary registration.</p>
<p><strong>Composition Scheme (Section 10):</strong> For small businesses up to Rs 1.5 crore (goods) or Rs 50 lakh (services). Flat rate (1-6%). Cannot collect tax or claim ITC.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- GST Registration -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Registration</text>
                            <!-- GST badge -->
                            <circle cx="100" cy="62" r="22" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <text x="100" y="58" font-size="12" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">GST</text>
                            <text x="100" y="72" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">15-Digit</text>
                            <!-- Threshold badges -->
                            <rect x="40" y="95" width="50" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="65" y="105" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 40L Goods</text>
                            <rect x="110" y="95" width="50" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="135" y="105" font-size="5.5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 20L Services</text>
                            <!-- Nil fee badge -->
                            <rect x="70" y="115" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="100" y="125" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Govt Fee: NIL</text>
                            <!-- Check badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CGST Act, 2017</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CGST Act, 2017</span>
                        <strong>15-Digit GSTIN</strong>
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
            <h2 class="section-title">Who Needs GST Registration?</h2>
            <div class="content-text">
                
                <p><strong>Mandatory Registration (Turnover-Based - Section 22):</strong></p>
<ul>
<li>Goods suppliers exceeding Rs 40 lakh (Rs 20 lakh in special states)</li>
<li>Service providers exceeding Rs 20 lakh (Rs 10 lakh in special states)</li>
</ul>
<p><strong>Compulsory Regardless of Turnover (Section 24):</strong></p>
<ul>
<li><strong>Inter-state suppliers</strong> of goods or services</li>
<li><strong>Casual taxable persons</strong> making taxable supply</li>
<li><strong>Non-resident taxable persons</strong> making taxable supply</li>
<li><strong>Reverse charge</strong> mechanism (Section 9(3) and 9(4))</li>
<li><strong>E-commerce operators</strong> collecting TCS (Section 52)</li>
<li><strong>Sellers through e-commerce</strong> operators (except Section 9(5) notification)</li>
<li><strong>Input Service Distributors (ISD)</strong> - mandatory from 1 April 2025</li>
<li><strong>OIDAR service providers</strong> from outside India</li>
</ul>
<p><strong>Voluntary Registration:</strong> Below-threshold businesses can register to claim ITC, issue tax invoices, and build B2B credibility. Common for startups, freelancers, and exporters.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 GST Registration Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>New GST Registration (Form REG-01)</td><td>End-to-end registration on <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a> including application, document verification, DSC integration, and Aadhaar authentication.</td></tr>
<tr><td>Composition Scheme Registration</td><td>Registration under Section 10 for eligible small businesses with turnover up to Rs 1.5 crore (goods) or Rs 50 lakh (services).</td></tr>
<tr><td>Casual/Non-Resident Registration</td><td>Special registration with advance tax deposit for temporary businesses and foreign suppliers operating in India.</td></tr>
<tr><td>GST Registration Amendment</td><td>Modification of core and non-core fields through Form GST REG-14 (business name, address, constitution changes).</td></tr>
<tr><td>GST Return Filing</td><td>Monthly/quarterly GSTR-1, GSTR-3B, annual GSTR-9 filing and ITC reconciliation. See <a href="/gst-returns">GST Returns</a>.</td></tr>
<tr><td>GST Cancellation and Revocation</td><td>Voluntary cancellation (REG-16) when turnover drops below threshold, and revocation of suo-motu cancellation (REG-21).</td></tr>

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
            <h2 class="section-title">7-Step GST Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete GST registration - from threshold assessment to GSTIN issuance. 3-day processing for non-risky applications under GST 2.0.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Registration Requirement</h3><p class="step-description">Check if aggregate turnover exceeds Rs 40 lakh (goods) / Rs 20 lakh (services), or if you fall under Section 24 compulsory categories. Patron Accounting provides a free assessment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Threshold checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Category confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="28" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="36" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 40L</text><rect x="55" y="22" width="28" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="69" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 20L</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Gather Documents</h3><p class="step-description">PAN of business, Aadhaar of authorised signatory, business registration proof, address proof (rent agreement + NOC + utility bill), bank details (cancelled cheque/passbook), and photographs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Access GST Portal</h3><p class="step-description">Visit gst.gov.in. Navigate to Services > Registration > New Registration. Select 'Taxpayer' and enter state, district, business name, PAN, email, and mobile number. Receive OTP on both.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> OTP verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">gst.gov.in</text><rect x="40" y="50" width="40" height="12" rx="3" fill="#F5A623" opacity="0.4"/><text x="60" y="59" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REG-01</text></svg></div><span class="illustration-label">Portal Ready</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Fill Form REG-01 Part B</h3><p class="step-description">Using TRN received, complete Part B: business details, promoter/partner info with Aadhaar, authorised signatory, principal and additional places of business, HSN/SAC codes, and bank account.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All details filled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="23" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GST REG-01</text><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><path d="M75 62l5 5 10-10" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Form Filed</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Upload Documents and Verify</h3><p class="step-description">Upload all documents in PDF/JPEG. Verify via DSC (companies/LLPs) or EVC/Aadhaar OTP (others). Submit the application. You receive an Application Reference Number (ARN).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ARN received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC / EVC</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Processing and Verification</h3><p class="step-description">GST officer verifies. Non-risky applications: 3 working days. If additional info needed, Form REG-03 issued (response in 7 days via REG-04). Aadhaar-authenticated applications get faster processing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Verification done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 3-day track</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="35" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="45" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Processed</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">GSTIN and Registration Certificate</h3><p class="step-description">Form GST REG-06 issued with 15-digit GSTIN. Certificate downloadable on the GST portal. Display GSTIN and certificate at the principal place of business.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 15-digit GSTIN</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GSTIN</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">15-DIGIT</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="72" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Registered</text></svg></div><span class="illustration-label">GSTIN Issued</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Registration</h2>
            <div class="content-text">
                
                <ul>
<li>PAN Card of the business (or proprietor for proprietorship)</li>
<li>Aadhaar Card of all promoters/partners/directors and authorised signatory</li>
<li>Proof of business registration: Certificate of Incorporation (company), LLP Agreement, Partnership Deed, or Proprietorship declaration</li>
<li>Address proof: Rent agreement + NOC from landlord, or ownership document + latest electricity/water bill</li>
<li>Bank account proof: Cancelled cheque or first page of passbook/statement (with name, account number, IFSC, branch)</li>
<li>Photographs: Passport-size photo of all promoters/partners/directors</li>
<li>Digital Signature Certificate (DSC): Mandatory for companies and LLPs</li>
<li>Letter of Authorisation or Board Resolution for authorised signatory</li>
<li>HSN/SAC codes for goods/services to be supplied</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar Authentication Failure</td><td>Mobile number linked to Aadhaar may be inactive, causing OTP failure and routing to physical verification (7-15 days extra)</td><td>We verify Aadhaar details before filing. Ensure linked mobile is active for same-day authentication.</td></tr>
<tr><td>Address Proof Mismatch</td><td>Rent agreement not in business/proprietor name, or NOC from landlord missing, causing rejection</td><td>We review all documents for consistency before upload - rent agreement, NOC, and utility bill must all match.</td></tr>
<tr><td>REG-03 Additional Information Notice</td><td>GST officer requests additional documents - response due in 7 working days</td><td>Prompt response via REG-04 with detailed supporting documents. We draft and resubmit within 3 days.</td></tr>
<tr><td>Suo-Motu GSTIN Cancellation</td><td>Non-filing of returns for prescribed period triggers automatic cancellation</td><td>We assist with revocation (REG-21) and filing of pending returns to restore GSTIN.</td></tr>

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
            <h2 class="section-title">GST Registration Fees in 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (GST Portal)</td><td class="table-amount">Nil (no fee for registration)</td></tr>
<tr><td>Patron Accounting - GST Registration</td><td class="table-amount">Rs 1,999 - Rs 4,999</td></tr>
<tr><td>GST Registration for Company/LLP (with DSC)</td><td class="table-amount">Rs 2,999 - Rs 5,999</td></tr>
<tr><td>Composition Scheme Registration</td><td class="table-amount">Rs 1,999 - Rs 3,999</td></tr>
<tr><td>GST Registration Amendment</td><td class="table-amount">Rs 999 - Rs 2,999</td></tr>
<tr><td>GST Cancellation</td><td class="table-amount">Rs 999 - Rs 2,999</td></tr>
<tr><td>Revocation of Cancellation</td><td class="table-amount">Rs 2,999 - Rs 5,999</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does GST Registration Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document preparation by Patron Accounting</td><td>1-2 working days</td></tr>
<tr><td>Non-risky Aadhaar-authenticated applications</td><td>3 working days (GST 2.0 fast-track)</td></tr>
<tr><td>Applications requiring physical verification</td><td>7-15 working days</td></tr>
<tr><td>If REG-03 (additional info) issued</td><td>Add 7 working days for response</td></tr>
<tr><td><strong>Overall range</strong></td><td><strong>3-15 working days</strong></td></tr>
<tr><td><strong>Patron Accounting target</strong></td><td><strong>7 working days for most applications</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> GST 2.0 (September 2025) introduced 3-day processing for non-risky applications with Aadhaar authentication. If Aadhaar authentication fails, the application routes to physical verification (7-15 days). Patron Accounting ensures Aadhaar details are verified before filing for fastest processing.</p>

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
            <h2 class="section-title">6 Benefits of GST Registration</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Legal Authority to Collect Tax</h3><p class="feature-text">Only registered persons can collect GST from customers. Without GSTIN, you cannot issue a tax invoice or charge GST.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Input Tax Credit (ITC)</h3><p class="feature-text">Claim credit of GST paid on purchases against GST payable on sales. Reduces effective tax cost and prevents cascading taxes.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Inter-State Business</h3><p class="feature-text">GSTIN is mandatory for any inter-state supply. Without registration, you cannot sell to customers in other states or make inter-state supplies.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">E-Commerce Platform Access</h3><p class="feature-text">Amazon, Flipkart, Meesho, and all major marketplaces require a valid GSTIN for seller registration. Without GST, you cannot sell online.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Government Tenders and B2B Credibility</h3><p class="feature-text">Government departments and corporates mandate GSTIN for vendor registration. GST signals formal business status and tax compliance.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Loan and Credit Access</h3><p class="feature-text">Banks and fintech use GST return data for credit assessment. A GSTIN with regular filing history improves loan eligibility through GST Sahay framework.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India with GST, registration, and compliance.</p>
<p><strong>50,000+ Documents Filed</strong> on government portals including gst.gov.in, MCA, and Income Tax.</p>
<p><strong>4.9 Google Rating</strong> based on verified client reviews.</p>
<p><strong>15+ Years of Practice.</strong></p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration Threshold Limits</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Category</th><th>Normal Category States</th><th>Special Category States</th></tr></thead>
                    <tbody>
                        <tr><td>Supply of Goods Only</td><td>Rs 40 lakh</td><td>Rs 20 lakh</td></tr>
<tr><td>Supply of Services Only</td><td>Rs 20 lakh</td><td>Rs 10 lakh</td></tr>
<tr><td>Mixed Supply (Goods + Services)</td><td>Rs 20 lakh (lower threshold applies)</td><td>Rs 10 lakh</td></tr>
<tr><td>Composition Scheme - Goods</td><td>Rs 1.5 crore (Rs 75 lakh NE states)</td><td>Rs 75 lakh</td></tr>
<tr><td>Composition Scheme - Services</td><td>Rs 50 lakh</td><td>Rs 50 lakh</td></tr>
<tr><td>Section 24 Compulsory Categories</td><td>No threshold - mandatory regardless</td><td>No threshold - mandatory regardless</td></tr>

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
            <h2 class="section-title">Related GST and Business Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/gst-returns">GST Returns</a></strong> - Monthly/quarterly GSTR-1, GSTR-3B, annual GSTR-9 filing.</li>
<li><strong><a href="/gst-audit">GST Audit</a></strong> - Reconciliation audit and GSTR-9C compliance.</li>
<li><strong><a href="/gst-notice">GST Notice</a></strong> - Response to scrutiny, demand, and assessment notices.</li>
<li><strong><a href="/private-limited-company-registration">Private Limited Company Registration</a></strong> - Company incorporation with GST as post-incorporation compliance.</li>
<li><strong><a href="/llp-incorporation">LLP Registration</a></strong> - LLP formation with integrated GST setup.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for GST Registration in India</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong> Central Goods and Services Tax Act, 2017; IGST Act, 2017; SGST/UTGST Acts; CGST Rules, 2017.</p>
<p><strong>Key Sections (CGST Act):</strong></p>
<ul>
<li><strong>Section 2(6):</strong> Aggregate turnover definition.</li>
<li><strong>Section 9:</strong> Levy and collection of CGST.</li>
<li><strong>Section 10:</strong> Composition levy (1-6% flat rate for small businesses).</li>
<li><strong>Section 22:</strong> Persons liable for registration (threshold-based).</li>
<li><strong>Section 24:</strong> Compulsory registration regardless of turnover.</li>
<li><strong>Section 25:</strong> Procedure - PAN mandatory, Aadhaar authentication, state-wise.</li>
<li><strong>Sections 29-30:</strong> Cancellation and revocation of registration.</li>
</ul>
<p><strong>Penalties:</strong></p>
<ul>
<li><strong>Section 122(1)(xi):</strong> Failure to register - Rs 10,000 or tax evaded, whichever higher.</li>
<li><strong>Section 132:</strong> Supply without registration (tax evasion above Rs 5 crore) - up to 5 years imprisonment.</li>
</ul>
<p><strong>GST 2.0 (September 2025):</strong> Simplified rates, 3-day processing, enhanced fake registration crackdown, mandatory ISD from April 2025.</p>
<p><strong>Regulatory:</strong> GST Council, <a href="https://cbic.gov.in" target="_blank" rel="noopener">CBIC</a>. Portal: <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>. Act: <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a>.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - GST Registration</h2>
                    <p class="faq-expanded__lead">Answers about GST registration process, turnover limits, fees, penalties, GSTIN structure, and types of registration.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is GST registration?</h3>
                        <div class="faq-expanded__a"><p>GST Registration is the process of obtaining a unique 15-digit GSTIN from the GST portal (gst.gov.in) under the CGST Act, 2017. It enables businesses to collect GST, claim Input Tax Credit, file returns, and participate in the formal tax economy. Mandatory when aggregate turnover exceeds Rs 40 lakh (goods) or Rs 20 lakh (services) in normal states, and for certain categories regardless of turnover under Section 24.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the turnover limit for GST registration?</h3>
                        <div class="faq-expanded__a"><p>For supply of goods: Rs 40 lakh in normal states, Rs 20 lakh in special states. For services: Rs 20 lakh in normal states, Rs 10 lakh in special states. Certain categories (inter-state suppliers, e-commerce operators, casual taxable persons, reverse charge, ISD, OIDAR) must register regardless of turnover under Section 24 of the CGST Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">GST registration kaise kare - GST number kaise banaye?</h3>
                        <div class="faq-expanded__a"><p>GST registration ke liye gst.gov.in par jaaye. 'New Registration' select karo. State, PAN, email aur mobile number dalo - OTP aayega. TRN milega. Login karke Form REG-01 ka Part B bharo - business details, partner info, address, bank details, HSN/SAC codes. Documents upload karo. DSC ya EVC se verify karo. 3 se 7 din mein GSTIN milega. Government fee nil hai. Patron Accounting poora process handle karta hai - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is GST registration free?</h3>
                        <div class="faq-expanded__a"><p>Yes. No government fee is charged on the GST portal for registration. The entire process is online and free. Businesses may engage a professional for assistance - Patron Accounting's service fee starts from Rs 1,999 depending on entity type and complexity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not registering under GST?</h3>
                        <div class="faq-expanded__a"><p>Under Section 122, a person who fails to register faces 10% of tax due or Rs 10,000, whichever is higher. For wilful tax evasion, 100% of tax due. Under Section 132, supply without registration where evasion exceeds Rs 5 crore can attract imprisonment up to 5 years. Tax authorities now use UPI data to detect unregistered traders exceeding thresholds.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is GSTIN?</h3>
                        <div class="faq-expanded__a"><p>GSTIN is a unique 15-digit alphanumeric number assigned to every registered taxpayer. It is PAN-based and state-specific. Structure: 2 digits (state code) + 10 digits (PAN) + 1 digit (entity number) + 'Z' + 1 check digit. A business in multiple states needs a separate GSTIN for each. Must be displayed on all invoices, returns, and business premises.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">GST registration ke baad kya karna padta hai?</h3>
                        <div class="faq-expanded__a"><p>GST registration ke baad: (1) Har mahine GSTR-1 (outward supplies) aur GSTR-3B (summary return) file karo. (2) ITC claim karne ke liye purchase invoices match karo. (3) E-invoicing mandatory hai Rs 5 crore se zyada turnover ke liye. (4) Annual return GSTR-9 file karo. (5) GST payment har mahine 20 tarikh tak karo. Patron Accounting GST return filing bhi handle karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What are the types of GST registration?</h3>
                        <div class="faq-expanded__a"><p>Regular Registration for businesses above threshold. Composition Scheme (Section 10) for small businesses with flat tax rate. Casual Taxable Person for temporary operations. Non-Resident Taxable Person for foreign entities. Input Service Distributor (ISD) for distributing ITC across GSTINs. E-Commerce Operator for platforms facilitating supply. OIDAR for foreign digital service providers.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Voluntary registration below threshold?</strong> A: Yes. Any person can register under Section 25(3) to claim ITC and enable inter-state supply.</p>
<p><strong>Q: Separate GST for each state?</strong> A: Yes. GSTIN is state-specific. Multiple states need separate registrations.</p>
<p><strong>Q: Can I cancel GST if turnover drops?</strong> A: Yes. File Form REG-16 for voluntary cancellation if below threshold and not in compulsory category.</p>
<p><strong>Q: Composition scheme limit?</strong> A: Rs 1.5 crore for goods (Rs 75 lakh NE), Rs 50 lakh for services. Cannot collect tax or claim ITC.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">No GSTIN = No Business Growth - Register Today</h2>
            <div class="content-text">
                
                <p>Section 122 imposes penalties of 10% of tax due or Rs 10,000 (whichever higher) for non-registration. Wilful default: 100% penalty. E-commerce platforms, inter-state trade, and government tenders all require a valid GSTIN. Tax authorities now use UPI transaction data to detect unregistered traders.</p>
<p>Government fee is nil. Registration takes just 3 days for non-risky applications under GST 2.0.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your GST Registration with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">GST Registration under the CGST Act, 2017 is the foundational compliance step for every business meeting the turnover threshold. The 15-digit GSTIN is your key to collecting tax, claiming ITC, selling on e-commerce platforms, inter-state trade, government tenders, and formal business credibility.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">No government fee. 3-day processing under GST 2.0. Penalties up to 100% for non-compliance. Every reason to register promptly and correctly.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting handles the complete process. 15+ years. 10,000+ businesses. Offices in Pune, Mumbai, Delhi, and Gurugram. Starting from Rs 1,999.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Registration&body=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert GST registration for businesses, startups, freelancers, and exporters with local CA and CS support.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gst-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/gst-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/gst-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/gst-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/gst-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/gst-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete GST and business compliance</div><div class="pa-cross-grid"><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a><a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a><a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Content aligned with the CGST Act 2017, GST 2.0 updates (September 2025), and current GST portal procedures. Next review: September 2026.</p>
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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
