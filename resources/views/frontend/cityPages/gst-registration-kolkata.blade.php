@extends('layouts.service-app')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">@section('meta')
    <title>GST Registration in Kolkata – Online Process, Fees &amp; GSTIN</title>
    <meta name="description" content="CA-assisted GST registration in Kolkata. 15-digit GSTIN via gst.gov.in. CGST/WBGST Act. No govt fee. Rs 2,999. 3-7 days. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-registration/kolkata">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Registration in Kolkata – Online Process, Fees &amp; GSTIN"><meta property="og:description" content="GST Kolkata. GSTIN. No govt fee. Rs 2,999. 3-7 days. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-registration/kolkata"><meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on"><meta name="twitter:card" content="summary_large_image">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Registration in Kolkata",
          "description": "CA-assisted GST registration in Kolkata. 15-digit GSTIN via gst.gov.in. CGST/WBGST Act. No govt fee. Rs 2,999. 3-7 days. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/gst-registration/kolkata",
          "serviceType": "GST Registration in Kolkata",
          "areaServed": {
            "@type": "City",
            "name": "Kolkata"
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
            "url": "https://www.patronaccounting.com/gst-registration/kolkata",
            "price": "2999"
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
              "name": "GST Registration",
              "item": "https://www.patronaccounting.com/gst-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "GST Kolkata",
              "item": "https://www.patronaccounting.com/gst-registration/kolkata"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is GST mandatory for all Kolkata businesses?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Mandatory if turnover exceeds Rs 40L goods or Rs 20L services. E-commerce and interstate suppliers must register regardless."
              }
            },
            {
              "@type": "Question",
              "name": "Can it be done online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes 100% online via gst.gov.in. Aadhaar biometric at designated centre. CA handles complete filing."
              }
            },
            {
              "@type": "Question",
              "name": "Fee?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No government fee. CA professional fee from Rs 2,999. DSC Rs 800-1,500 for companies."
              }
            },
            {
              "@type": "Question",
              "name": "Timeline?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "3-7 working days standard. Up to 30 days if physical verification triggered."
              }
            },
            {
              "@type": "Question",
              "name": "GSTIN format?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "15-digit number starting with 19 for West Bengal followed by PAN entity code and check digit."
              }
            },
            {
              "@type": "Question",
              "name": "Interstate without GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Interstate supply requires mandatory registration regardless of turnover under Section 24 CGST."
              }
            },
            {
              "@type": "Question",
              "name": "Composition scheme?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Up to Rs 1.5 Cr goods or Rs 50L services. Lower rates but no ITC and no interstate. Small retailers and local restaurants."
              }
            },
            {
              "@type": "Question",
              "name": "Penalty?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rs 10,000 or tax evaded whichever higher under Section 122. Late returns Rs 50 per day. 6 months non-filing leads to cancellation."
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
                        GST Registration in Kolkata: CA-Assisted GSTIN for Every Business
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents::</span> PAN, Aadhaar, business proof, address proof, bank details</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees::</span> No govt fee | CA from Rs 2,999 | Timeline: 3-7 working days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility::</span> Turnover > Rs 40L goods / Rs 20L services | Mandatory for e-commerce/interstate</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Authority::</span> GST portal (gst.gov.in) | CGST Kolkata | WB Commercial Taxes | State code: 19</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20registration%20in%20Kolkata.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'GST Registration',
                                            'city'     => 'Kolkata',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
<a href="#what-section" class="toc-btn">What Is GST</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">Regular vs Composition</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration in Kolkata: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Registration Services at a Glance</strong></p>
                    <p>GST registration in Kolkata obtains a 15-digit GSTIN via gst.gov.in under CGST Act 2017 and WBGST Act 2017. Mandatory when turnover exceeds Rs 40L (goods) or Rs 20L (services). E-commerce, interstate, and reverse charge must register regardless. No govt fee. Aadhaar biometric verification mandatory. State code 19 (West Bengal).</p>
                </div>
                <p>Kolkata is eastern India's commercial capital - Burrabazar wholesale trading, Salt Lake IT, New Town startups, Dalhousie BFSI, Park Street hospitality, Taratala manufacturing, and Netaji Subhas Dock exports. Every business reaching the threshold needs GSTIN. Learn more about <a href="/gst-registration">GST Registration across India</a>.</p>
                <p>GST filed on gst.gov.in using REG-01. CGST Commissionerates (North/South/Central) handle central tax. WB Commercial Taxes handles SGST. CA ensures Aadhaar biometric, HSN/SAC mapping, and return setup. Same CA handles <a href="/private-limited-company-registration/kolkata">Pvt Ltd</a>, <a href="/llp-incorporation/kolkata">LLP</a>, and <a href="/zoho-books-accounting">accounting</a>.</p>
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
                    
                    <p>GST registration is the process of obtaining a 15-digit GSTIN from the GST portal under the CGST Act, 2017 and WBGST Act, 2017, enabling a business to collect tax, claim input tax credit, file returns, and conduct interstate trade.</p>
<p>Regular registration or Composition Scheme (up to Rs 1.5 Cr goods / Rs 50L services with lower rates but no ITC). Filed via gst.gov.in with Aadhaar biometric verification. No government fee.</p>
<p>For Kolkata: Burrabazar wholesale traders, Salt Lake IT companies, Park Street restaurants, Taratala manufacturers, Kolkata Port exporters, and e-commerce sellers all need GSTIN with correct HSN/SAC codes mapped to their product/service categories.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Registration:</strong></p>
                    <ul>
<li><strong>GSTIN:</strong> 15-digit GST Identification Number starting with 19 (WB)</li>
<li><strong>REG-01:</strong> GST registration application form on gst.gov.in</li>
<li><strong>HSN/SAC:</strong> Product codes (HSN) and service codes (SAC) with GST rates</li>
<li><strong>GSTR-1:</strong> Outward supply return (monthly/quarterly)</li>
<li><strong>GSTR-3B:</strong> Summary return with tax payment (monthly/quarterly)</li>
<li><strong>ITC:</strong> Input Tax Credit on purchases - claimed via GSTR-2B reconciliation</li>
<li><strong>Composition:</strong> Lower rates (1%/5%/6%) but no ITC, no interstate</li>
<li><strong>WB PT:</strong> Professional Tax (Rs 110-200/month) via wbcomtax.gov.in</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- GST/Tax illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- GST badge -->
                            <circle cx="100" cy="60" r="22" fill="#fff" stroke="#14365F" stroke-width="2"/>
                            <text x="100" y="57" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST</text>
                            <text x="100" y="70" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">19XXXXX</text>
                            <!-- ITC arrow -->
                            <rect x="45" y="85" width="110" height="18" rx="4" fill="#fff" stroke="#14365F" stroke-width="1"/>
                            <text x="100" y="97" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-1 | 3B | ITC</text>
                            <!-- Tag -->
                            <rect x="30" y="112" width="55" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="57" y="122" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CGST+WBGST</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CGST + WBGST 2017</span>
                        <strong>GST Registration</strong>
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
            <h2 class="section-title">Who Needs GST Registration in Kolkata?</h2>
            <div class="content-text">
                
                <p><strong>Wholesale Traders (Burrabazar):</strong> Grains, spices, textiles, FMCG. Cross Rs 40L quickly. HSN mapping critical. E-way bills for goods movement.</p>
<p><strong>IT/SaaS (Salt Lake / New Town):</strong> Register once services > Rs 20L. Many register voluntarily for ITC on rent, cloud, equipment. SAC 998314. Interstate.</p>
<p><strong>Restaurants/Hotels (Park Street / Esplanade):</strong> Register if > Rs 20L. Regular (18% with ITC) or Composition (5% no ITC). KMC Trade License parallel.</p>
<p><strong>Manufacturers (Taratala / Howrah):</strong> > Rs 40L goods. HSN per product. ITC on raw materials. E-way bills for dispatch.</p>
<p><strong>Exporters (Kolkata Port / Netaji Subhas Dock):</strong> Mandatory interstate registration. Zero-rated exports. LUT filing. IGST refund or bond.</p>
<p><strong>E-Commerce Sellers:</strong> Mandatory regardless of turnover. Amazon, Flipkart, Meesho. TCS compliance. Registration before listing.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GST Type Assessment</td><td>Regular vs Composition based on turnover, supply type, interstate/intrastate operations</td></tr>
<tr><td>REG-01 Filing</td><td>Complete application on gst.gov.in. Business, promoter, premises, HSN/SAC, bank details. DSC/EVC signing</td></tr>
<tr><td>Aadhaar Biometric Coordination</td><td>Post-2025 mandatory. Appointment at designated Kolkata centre. CA coordinates scheduling</td></tr>
<tr><td>HSN/SAC Code Mapping</td><td>Every product/service mapped to correct code and GST rate. Critical for Burrabazar multi-commodity traders</td></tr>
<tr><td>GSTIN Certificate Download</td><td>REG-06 with 15-digit GSTIN (19XXXXX). Displayed at Kolkata premises as required</td></tr>
<tr><td>WB Professional Tax Advisory</td><td>PTRC/PTEC registration via wbcomtax.gov.in GRIPS. Rs 110-200/month slab</td></tr>
<tr><td>Return Filing Setup</td><td>GSTR-1, GSTR-3B, GSTR-9 calendar. E-way bill. IGST refund for exporters. QRMP option</td></tr>
<tr><td>ITC Optimisation</td><td>Maximum eligible ITC on rent, utilities, equipment. GSTR-2B reconciliation configured</td></tr>

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
            <h2 class="section-title">GST Registration Process in Kolkata</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From type assessment to REG-01 filing, biometric verification, and GSTIN - here's how Patron registers your Kolkata business.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine GST Registration Type</h3><p class="step-description">CA assesses turnover, supply type, and interstate operations. Regular vs Composition (1% mfg, 5% restaurants, 6% services). Composition: no ITC, no interstate. CA advises optimal scheme for Kolkata business.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Type determined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scheme selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">REGULAR</text><text x="60" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">COMPOSITION</text><text x="60" y="52" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">ASSESS</text></svg></div><span class="illustration-label">Type Selected</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Collect Documents and Prepare Application</h3><p class="step-description">PAN, Aadhaar, photographs, business proof (COI/partnership deed), Kolkata premises proof (KMC tax/rent+NOC+electricity), bank details. HSN/SAC codes mapped to products/services with correct rates.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> HSN/SAC mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">HSN / SAC</text><text x="60" y="38" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">5% 12% 18% 28%</text><circle cx="85" cy="62" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 62l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Application Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File GST REG-01 on Portal</h3><p class="step-description">CA files on gst.gov.in. TRN generated. Part B completed: business details, promoter details, Kolkata premises, goods/services with codes, bank account. Documents uploaded. DSC/EVC signed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> REG-01 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TRN generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">REG-01</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">gst.gov.in</text><text x="60" y="56" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">FILED</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Aadhaar Biometric Verification</h3><p class="step-description">Mandatory post-2025. Applicant visits designated Kolkata centre. CA coordinates appointment scheduling. Timely completion critical for ARN generation and approval.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Biometric done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ARN active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AADHAAR</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">BIOMETRIC</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">VERIFIED</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">GSTIN Issuance (REG-06)</h3><p class="step-description">GST officer processes in 3-7 days. Physical verification if triggered (rented premises). CA ensures originals available. 15-digit GSTIN (19XXXXX) issued. Certificate downloaded and displayed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTIN issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTIN</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">19XXXXX</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">15-DIGIT</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Registration: Bank, Returns, ITC</h3><p class="step-description">Bank details updated within 30 days (mandatory). GSTR-1/3B calendar set. E-way bill configured. WB PT registered. ITC reconciliation. For exporters: LUT filed before first shipment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Returns setup</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITC optimised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-1 ✓</text><text x="60" y="38" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-3B ✓</text><text x="60" y="50" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITC ✓</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">E-WAY ✓</text></svg></div><span class="illustration-label">Fully Operational</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <ul>
<li><strong>PAN:</strong> Of business entity (company/LLP/partnership/individual)</li>
<li><strong>Aadhaar:</strong> Of all promoters/partners/directors (biometric verification)</li>
<li><strong>Photographs:</strong> Of promoters/partners/directors</li>
<li><strong>Business Proof:</strong> COI, partnership deed, LLP agreement</li>
<li><strong>Address Proof:</strong> KMC property tax receipt or rent agreement + NOC + electricity bill</li>
<li><strong>Bank Details:</strong> Statement or cancelled cheque (update within 30 days of GSTIN)</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Kolkata-Specific Tip:</strong> Rented premises in Burrabazar and Park Street may trigger physical verification by GST officer. Ensure rent agreement address exactly matches utility bill. Patron's CA verifies address consistency before filing to minimise verification triggers.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Biometric Verification Delays</td><td>Limited appointment slots during peak periods</td><td>CA schedules biometric immediately after application</td></tr>
<tr><td>Physical Verification (Rented)</td><td>Address mismatch, absent proprietor during visit</td><td>CA ensures address consistency and coordinates presence</td></tr>
<tr><td>HSN/SAC Code Errors</td><td>Wrong codes = wrong GST rate = notices during scrutiny</td><td>CA maps every product/service to correct code before filing</td></tr>
<tr><td>Bank Non-Updation (30 Days)</td><td>Non-updation triggers GST suspension - no returns, no e-way</td><td>CA updates bank details immediately after GSTIN issuance</td></tr>
<tr><td>Multi-State Registration Confusion</td><td>Unnecessary registrations in other states</td><td>CA advises correct strategy - single WB GSTIN for intra-state</td></tr>

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
            <h2 class="section-title">GST Registration Fees in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee</td><td>NIL (no govt charge for GST registration)</td></tr>
<tr><td>Professional Fee (Patron CA)</td><td>Rs 2,999-5,999 (REG-01, HSN/SAC, biometric coordination)</td></tr>
<tr><td>DSC (for companies/LLPs)</td><td>Rs 800-1,500 (Class 2/3 for authorised signatory)</td></tr>
<tr><td>WB Professional Tax</td><td>Included in advisory (separate govt fee via GRIPS)</td></tr>
<tr><td>GST Return Filing (ongoing)</td><td>Rs 1,500-5,000/month (GSTR-1, GSTR-3B, GSTR-9)</td></tr>
<tr><td>Total (Registration)</td><td>Rs 2,999-7,500 one-time estimated</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20registration%20in%20Kolkata.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Collection</td><td>Day 1-3 (CA verifies all documents)</td></tr>
<tr><td>REG-01 Filing on gst.gov.in</td><td>Day 3-4 (TRN generated, Part B completed)</td></tr>
<tr><td>Aadhaar Biometric Verification</td><td>Day 4-7 (appointment at designated centre)</td></tr>
<tr><td>GST Officer Processing</td><td>Day 7-14 (3-7 days; physical verification if triggered)</td></tr>
<tr><td>GSTIN Issuance (REG-06)</td><td>Day 7-14 (certificate downloaded)</td></tr>
<tr><td>Bank Update + Returns Setup</td><td>Day 14-20 (within 30 days mandatory)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Kolkata Processing Note:</strong> GST registration is 100% online via gst.gov.in. Aadhaar biometric requires one centre visit. Physical verification may apply for rented premises. CA files query-proof applications and coordinates biometric promptly for fastest GSTIN issuance.</p>

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
            <h2 class="section-title">Why Choose Patron for GST in Kolkata?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>HSN/SAC Code Expertise</h3><p>Every product and service mapped to correct code and GST rate. Critical for Burrabazar multi-commodity traders and Salt Lake IT companies.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Biometric + Verification</h3><p>Aadhaar biometric coordinated promptly. Premises verification managed - address consistency ensured. Fastest GSTIN issuance.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-state businesses get coordinated GST across all locations.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Returns + ITC from Day 1</h3><p>GSTR-1/3B/9 calendar set. E-way bill. ITC optimisation. WB PT registered. Exporters: LUT filed. Zero compliance gaps.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Kolkata Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Patron got our GSTIN in 5 days. HSN codes for 50+ product categories mapped correctly. Monthly GSTR-1 and 3B filed on time. ITC reconciliation saves us lakhs every year."</p><p style="font-weight:700;color:var(--blue);margin:0;">- Wholesale Trader, Burrabazar</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Kolkata through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Regular vs Composition GST for Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Regular GST</th><th>Composition Scheme</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover Limit</td><td>No upper limit</td><td>Rs 1.5 Cr goods / Rs 50L services</td></tr>
<tr><td>Tax Rate</td><td>5%/12%/18%/28% per HSN/SAC</td><td>1% mfg, 5% restaurants, 6% services</td></tr>
<tr><td>Input Tax Credit</td><td>Can claim ITC</td><td>Cannot claim ITC</td></tr>
<tr><td>Interstate Supply</td><td>Allowed</td><td>Not allowed - intrastate only</td></tr>
<tr><td>Returns</td><td>GSTR-1 + GSTR-3B (monthly/quarterly)</td><td>CMP-08 quarterly + GSTR-4 annual</td></tr>
<tr><td>Tax Invoice</td><td>Full tax invoice with GST breakup</td><td>Bill of supply only</td></tr>
<tr><td>Ideal For Kolkata</td><td>Burrabazar exporters, Salt Lake IT, interstate manufacturers</td><td>Small retailers, local restaurants, neighbourhood services</td></tr>

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
                
                <ul>
<li><a href="/gst-registration">GST Registration in India</a> - National services</li>
<li><a href="/private-limited-company-registration/kolkata">Pvt Ltd Registration in Kolkata</a> - Company incorporation</li>
<li><a href="/llp-incorporation/kolkata">LLP Registration in Kolkata</a> - Partnership</li>
<li><a href="/trademark-registration/kolkata">Trademark in Kolkata</a> - Brand protection</li>
<li><a href="/zoho-books-accounting">Zoho Books Accounting in Kolkata</a> - Cloud bookkeeping</li>
<li><a href="/income-tax-return/kolkata">ITR in Kolkata</a> - Business income tax</li>
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
                
                <ul>
<li>CGST Act, 2017 | WBGST Act, 2017 | IGST Act, 2017</li>
<li>Section 22 - registration | Section 24 - compulsory | Section 25 - procedure</li>
<li>Section 10 - Composition | Section 29 - cancellation | Section 122 - penalties</li>
<li>GST portal: gst.gov.in | WB Commercial Taxes: wbcomtax.gov.in</li>
<li>CGST Commissionerates: Kolkata North, South, Central</li>
</ul>
<p><strong>Key Forms:</strong> REG-01 (application) | REG-06 (certificate) | GSTR-1 | GSTR-3B | GSTR-9 | CMP-08 | RFD-11 (LUT exporters)</p>
<p><strong>Penalties:</strong> No registration when mandatory: Rs 10,000 or tax evaded | Late returns: Rs 50/day | 6 months non-filing: cancellation</p>

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
                    <h2 class="faq-expanded__title">FAQs - GST Registration in Kolkata</h2>
                    <p class="faq-expanded__lead">Common questions about GSTIN, turnover threshold, biometric, HSN/SAC, Composition, and returns for Kolkata businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Registration',
                        'city'     => 'Kolkata',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is GST mandatory for all Kolkata businesses?</h3>
                        <div class="faq-expanded__a"><p>Mandatory when turnover > Rs 40L goods or Rs 20L services. E-commerce sellers, interstate suppliers, reverse charge, casual taxable persons must register regardless. Voluntary registration available for ITC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can GST be registered online?</h3>
                        <div class="faq-expanded__a"><p>Yes, 100% online via gst.gov.in (REG-01). Aadhaar biometric at designated centre. CA handles complete filing including biometric coordination.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the GST registration fee?</h3>
                        <div class="faq-expanded__a"><p>No government fee. CA professional fee from Rs 2,999 for application, HSN/SAC mapping, and compliance setup. DSC Rs 800-1,500 for companies/LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does it take?</h3>
                        <div class="faq-expanded__a"><p>3-7 working days standard after biometric. Up to 30 days if physical verification triggered for rented premises.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the GSTIN format for Kolkata?</h3>
                        <div class="faq-expanded__a"><p>15-digit number starting with 19 (West Bengal) followed by PAN digits, entity code, and check digit. Must be on all invoices and e-way bills.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I do interstate business without GST?</h3>
                        <div class="faq-expanded__a"><p>No. Interstate supply requires mandatory registration regardless of turnover under Section 24. Applies to Burrabazar distributors and Salt Lake IT companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Should I choose Composition scheme?</h3>
                        <div class="faq-expanded__a"><p>Composition: lower rates (1%/5%/6%), simpler returns, but no ITC and no interstate. Good for small retailers and local restaurants. CA advises based on your model.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens without GST when required?</h3>
                        <div class="faq-expanded__a"><p>Penalty Rs 10,000 or tax evaded (whichever higher) under Section 122. Late returns Rs 50/day. 6 months non-filing leads to cancellation by officer.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST registration kya hai?</strong> GSTIN - 15-digit number. Tax invoice, returns, interstate trade ke liye zaroori. Kolkata state code 19.</p>
<p><strong>Kolkata mein GST kaise banwayein?</strong> Patron se call karein +91 945 945 6700. CA gst.gov.in pe REG-01 file karta hai. 3-7 din mein GSTIN.</p>
<p><strong>Turnover limit?</strong> Goods Rs 40L. Services Rs 20L. E-commerce aur interstate mandatory.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Get Your GSTIN Today</h2>
            <div class="content-text">
                
                <p>Operating without GST when mandatory = Rs 10,000+ penalty under Section 122. Bank details must be updated within 30 days of registration. GSTR-3B non-filing for 6 months = cancellation. E-commerce sellers must register before listing. Start with CA-managed registration today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with GST Registration in Kolkata</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">GST registration in Kolkata provides GSTIN for tax collection, ITC, returns, and interstate trade under CGST/WBGST Act 2017. Filed online at gst.gov.in with Aadhaar biometric verification.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Kolkata businesses across Salt Lake, Burrabazar, Dalhousie, Park Street, Taratala, Howrah, and Netaji Subhas Dock benefit from CA-managed HSN/SAC mapping, biometric coordination, and integrated WB PT, return filing, and ITC optimisation.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20registration%20in%20Kolkata.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Registration&body=Hello%20Patron%20Team%2C%0AI%20need%20GST%20registration%20in%20Kolkata.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-assisted GSTIN in 8 cities.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gst-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/gst-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/gst-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/gst-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/gst-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<a href="/gst-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/gst-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Kolkata</div><div class="pa-block-sub">End-to-end business registration and tax compliance</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/llp-incorporation/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/trademark-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/fssai-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/income-tax-return/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Kolkata</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers GST registration in Kolkata including CGST/WBGST Act 2017, gst.gov.in, HSN/SAC, Aadhaar biometric, Regular vs Composition, WB PT, and return filing. Reviewed semi-annually. Freshness Tier 2.</p>
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
