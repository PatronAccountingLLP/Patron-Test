
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST for OIDAR in Mumbai - Foreign Digital & GSTR-5A</title>
    <meta name="description" content="CA-assisted OIDAR GST return filing in Mumbai. GSTR-5A for non-resident providers, GSTR-1/3B for Indian OIDAR. Serving Powai SaaS, Andheri AdTech. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-returns-for-oidar/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST for OIDAR in Mumbai - Foreign Digital & GSTR-5A">
    <meta property="og:description" content="CA-assisted OIDAR GST return filing in Mumbai. GSTR-5A for non-resident providers, GSTR-1/3B for Indian OIDAR. Serving Powai SaaS, Andheri AdTech. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-returns-for-oidar/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST for OIDAR in Mumbai - Foreign Digital & GSTR-5A">
    <meta name="twitter:description" content="CA-assisted OIDAR GST return filing in Mumbai. GSTR-5A for non-resident providers, GSTR-1/3B for Indian OIDAR. Serving Powai SaaS, Andheri AdTech. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST for OIDAR in Mumbai - Foreign Digital & GSTR-5A",
      "description": "CA-assisted OIDAR GST return filing in Mumbai. GSTR-5A for non-resident providers, GSTR-1/3B for Indian OIDAR. Serving Powai SaaS, Andheri AdTech. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-returns-for-oidar/mumbai",
      "serviceType": "GST for OIDAR in Mumbai - Foreign Digital & GSTR-5A",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
        }
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
          "name": "GST for OIDAR Services - Registration, Returns & Compliance",
          "item": "https://www.patronaccounting.com/gst-returns-for-oidar"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST for OIDAR in Mumbai - Foreign Digital & GSTR-5A",
          "item": "https://www.patronaccounting.com/gst-returns-for-oidar/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office handles OIDAR returns in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non-resident OIDAR providers have a single national registration via GST REG-10 and file GSTR-5A centrally on the GST portal. India-based OIDAR providers in Mumbai fall under the jurisdictional GST Commissionerate East West Central or South based on their registered address. Patron Marine Lines office handles both non-resident GSTR-5A and India-based GSTR-1 GSTR-3B for Mumbai digital services."
          }
        },
        {
          "@type": "Question",
          "name": "What is OIDAR under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "OIDAR stands for Online Information and Database Access or Retrieval services defined in Section 2(17) of the IGST Act. It covers services delivered via internet whose supply is impossible without information technology including cloud services streaming online advertising e-books software downloads online gaming and digital content. The key test is minimal human intervention and IT-dependent delivery."
          }
        },
        {
          "@type": "Question",
          "name": "What is GSTR-5A and who files it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-5A is the monthly return filed by non-resident OIDAR service providers who supply services to unregistered Indian consumers known as NTOR. It is due by the 20th of the following month. It captures state-wise supply values and IGST payable. No ITC is available. Nil filing is mandatory even for months with zero supplies. India-based OIDAR providers file regular GSTR-1 GSTR-3B instead."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST registration mandatory for OIDAR providers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes under Section 24(xi) of the CGST Act and Section 14 of the IGST Act registration is mandatory for any person supplying OIDAR services from outside India to persons in India other than registered persons. There is no threshold exemption. Non-resident providers register via GST REG-10 under the Simplified Registration Scheme. India-based providers follow standard registration rules."
          }
        },
        {
          "@type": "Question",
          "name": "Can non-resident OIDAR providers claim ITC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No GSTR-5A does not permit Input Tax Credit claims. Non-resident OIDAR providers cannot offset any Indian expenses against their IGST liability. The entire IGST on B2C and NTOR supplies must be paid in full via challan before GSTR-5A can be filed. There is no electronic credit ledger maintained for OIDAR taxpayers on the GST portal."
          }
        },
        {
          "@type": "Question",
          "name": "What happens when a Mumbai business subscribes to foreign OIDAR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When a GST-registered Mumbai business subscribes to foreign OIDAR like AWS or Salesforce the Mumbai business pays GST under Reverse Charge Mechanism in their own GSTR-3B. The foreign provider does not include this B2B transaction in GSTR-5A. The RCM paid by the Mumbai business is available as ITC in their electronic credit ledger."
          }
        },
        {
          "@type": "Question",
          "name": "What is the GST rate for OIDAR services?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The standard rate is 18 percent IGST for most OIDAR services. For online money gaming the rate is 28 percent on the full value of bets placed. Non-resident providers pay IGST only since supply is inter-state by nature. India-based providers charge CGST plus SGST for intra-state or IGST for inter-state both at 18 percent."
          }
        },
        {
          "@type": "Question",
          "name": "Does a Mumbai SaaS company providing services abroad need to file GSTR-5A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No GSTR-5A is only for non-resident providers supplying OIDAR to Indian recipients. A Mumbai SaaS company providing services to foreign clients files regular GSTR-1 GSTR-3B as a normal taxpayer. The export of services is zero-rated under LUT Section 16 of IGST Act. The company reports exports in GSTR-1 Table 6A and claims ITC refund via RFD-01."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        GST Returns for OIDAR Services in Mumbai: Comply with India's Digital Services Tax
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">24 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Non-Resident:</span> File GSTR-5A monthly by 20th. Register via GST REG-10 (Simplified). No ITC available. Pay IGST at 18% directly on B2C/NTOR supplies</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>India-Based:</span> File GSTR-1/GSTR-3B as regular taxpayer. Full ITC available on business inputs. Standard registration with per-state GSTIN</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GST Rate:</span> 18% IGST on OIDAR services to Indian recipients. Online money gaming: 28% on full bet value. No threshold exemption for registration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Registration:</span> Mandatory under Section 24(xi) CGST / Section 14 IGST. No turnover threshold. Non-resident: GST REG-10. India-based: regular registration</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=OIDAR%20GST%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20OIDAR%20GST%20filing.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20OIDAR%20GST%20return%20filing%20help%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'OIDAR GST Returns',
                                            'city'     => 'Mumbai',
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
    'ctaText'    => 'From non-resident streaming platforms to Powai SaaS companies to Andheri AdTech firms to BKC enterprise subscribers - Mumbai\'s digital ecosystem trusts Patron for OIDAR GST.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is OIDAR</a>
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Due Dates</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Non-Res vs India</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OIDAR GST Returns in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - OIDAR GST Returns Services at a Glance</strong></p>
                    <p>OIDAR = digital services via internet (SaaS, streaming, ads, gaming, e-books). Non-resident B2C: GSTR-5A by 20th, GST REG-10, no ITC. India-based: GSTR-1/3B as regular taxpayer, full ITC. B2B: Indian recipient pays RCM. 18% IGST (28% money gaming). No threshold. Mumbai = India's digital capital. Powai SaaS, Andheri AdTech, Lower Parel OTT.</p>
                </div>
                <p>Mumbai is India's digital services capital. Powai and Andheri house SaaS companies. Andheri and Goregaon host AdTech platforms. Lower Parel and BKC have OTT streaming and digital publishers. Gaming at Andheri and Powai. Foreign tech giants (AWS, Netflix, Adobe) serve millions of Mumbai consumers.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Non-Resident (B2C)</td><td>GSTR-5A monthly by 20th. GST REG-10. No ITC. Pay IGST directly</td></tr>
                        <tr><td>Non-Resident (B2B)</td><td>Indian recipient pays RCM in GSTR-3B. No GSTR-5A entry</td></tr>
                        <tr><td>India-Based</td><td>Regular GSTR-1/GSTR-3B. Full ITC. Standard registration</td></tr>
                        <tr><td>GST Rate</td><td>18% IGST (28% for online money gaming on full bet value)</td></tr>
                        <tr><td>Registration</td><td>Mandatory. No threshold. S.24(xi) CGST / S.14 IGST</td></tr>
                        <tr><td>Place of Supply</td><td>S.13(12): billing address, IP, card country, SIM code</td></tr>
                        <tr><td>Authorised Rep</td><td>Required in India for non-resident providers (Rule 64)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patron handles both tracks from Marine Lines. Related: <a href="/gst-returns">GST returns</a>, <a href="/gst-returns-for-freelancers">freelancer GST</a>, <a href="/gst-registration/mumbai">GST registration</a>, <a href="/gst-audit">GST audit</a>, <a href="#">IEC</a>.</p>
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
                <h2 class="section-title">What Are OIDAR Services Under GST?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>OIDAR services are defined under Section 2(17) of the IGST Act, 2017 as services whose delivery is mediated by information technology over the internet and whose nature renders their supply impossible in the absence of information technology.</p>
                    <p>Covers: SaaS/cloud computing, streaming media, online advertising, e-books, software downloads, online gaming, digital content, online databases, EdTech. Key test: IT-dependent delivery with minimal human intervention.</p>
                    <p>Dual-track compliance: GSTR-5A for non-resident B2C, GSTR-1/3B for India-based. B2B = RCM by Indian recipient. Filed on <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>. <a href="/gst-returns">GST returns national</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for OIDAR GST Returns:</strong></p>
                    <ul>
                        <li><strong>OIDAR (S.2(17)):</strong> Online Information and Database Access or Retrieval. Internet-delivered, IT-dependent, minimal human intervention. SaaS, streaming, ads, gaming, e-books.</li>
                        <li><strong>GSTR-5A:</strong> Non-resident OIDAR return. Monthly by 20th. State-wise B2C/NTOR data. No ITC. Nil filing mandatory. IGST via challan before filing.</li>
                        <li><strong>NTOR:</strong> Non-Taxable Online Recipient. Unregistered person receiving OIDAR for non-business purposes. Non-resident provider pays IGST via GSTR-5A on these supplies.</li>
                        <li><strong>GST REG-10:</strong> Simplified Registration for non-resident OIDAR. Single national GSTIN. Passport + tax ID. Authorised representative required in India.</li>
                        <li><strong>B2B RCM:</strong> Registered Indian business receiving OIDAR from abroad pays RCM in own GSTR-3B. Provider excludes from GSTR-5A. RCM = ITC available.</li>
                        <li><strong>S.13(12) Place of Supply:</strong> Location of recipient via billing address, IP address, card country code, or SIM country code. For state-wise GSTR-5A allocation.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">OIDAR GST Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>OIDAR</span>
                        <strong>Filed</strong>
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
            <h2 class="section-title">Who Files OIDAR GST Returns in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Non-Resident OIDAR (Global Platforms):</strong> AWS, Netflix, Spotify, Adobe, Canva serving Mumbai consumers. GSTR-5A for B2C/NTOR. B2B: Indian recipient pays RCM. <a href="/gst-returns">GST returns</a>.</p>
                <p><strong>India-Based SaaS (Powai, Andheri):</strong> Cloud-based software for Indian enterprises. Regular GSTR-1/3B. 18% GST domestic. Exports zero-rated under LUT. <a href="/gst-registration/mumbai">GST registration</a>.</p>
                <p><strong>AdTech/Digital Advertising (Andheri, Goregaon):</strong> Programmatic advertising, digital marketing analytics. 18% on ad revenue. Foreign AdTech (Google Ads, Meta) = RCM by Indian advertiser. <a href="/gst-audit">GST audit</a>.</p>
                <p><strong>OTT/Streaming + Gaming (Lower Parel, Powai):</strong> Subscription video/music content. 18% GST. Money gaming: 28% on full bet value. Gaming-specific SAC codes. <a href="/gst-returns-for-freelancers">Freelancer GST</a>.</p>
                <p><strong>Indian Businesses Receiving Foreign OIDAR:</strong> BKC/Powai enterprises subscribing to AWS, Salesforce, HubSpot. Pay RCM in own GSTR-3B. RCM available as ITC. <a href="/accounting-services">Accounting</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OIDAR GST Return Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-5A Monthly Filing</td><td>Non-resident OIDAR: Table 5 (state-wise NTOR supplies), Table 5A (amendments), Table 6 (interest/penalty), Table 7 (tax payable). Filed by 18th (2-day buffer). Nil filing included</td></tr>
                        <tr><td>GST REG-10 Registration</td><td>Simplified Registration for foreign OIDAR: passport, tax ID, business details, authorised representative appointment. Single national GSTIN. No state-wise registration needed</td></tr>
                        <tr><td>Authorised Representative</td><td>Patron acts as authorised representative in India under Rule 64. Handles registration, monthly GSTR-5A, IGST payment, GST authority correspondence from Mumbai office</td></tr>
                        <tr><td>Regular GSTR-1/3B (India-Based)</td><td>For Powai SaaS, Andheri AdTech, Lower Parel OTT: monthly GSTR-1 with B2B/B2C, GSTR-3B with output liability, ITC, tax payment. Export Table 6A under LUT for foreign clients</td></tr>
                        <tr><td>RCM Advisory (Indian Recipients)</td><td>For BKC/Powai enterprises receiving foreign OIDAR (AWS, Salesforce, Google Ads): identifying RCM triggers, computing IGST, reporting in GSTR-3B, claiming ITC</td></tr>
                        <tr><td>Place of Supply Determination</td><td>Section 13(12) analysis: billing address, IP address, card country code, SIM code. Critical for non-resident providers with millions of Indian subscribers needing state-wise allocation</td></tr>
                        <tr><td>Online Money Gaming Compliance</td><td>For Andheri/Powai gaming platforms: GST at applicable rates, HSN/SAC mapping, GSTR-1/3B with gaming-specific disclosures and valuation rules</td></tr>
                        <tr><td>Nil Return Filing</td><td>GSTR-5A mandatory even for months with zero supplies. Auto-filed by Patron for all non-resident OIDAR clients. Maintains compliance status on GST portal</td></tr>

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
            <h2 class="section-title">OIDAR GST Return Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete OIDAR GST compliance from provider category determination through registration, data compilation, tax deposit, return filing, to record maintenance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Determine Provider Category and Compliance Track</h3>
        <p class="step-description">Non-resident OIDAR: GSTR-5A track with Simplified Registration. India-based (Powai SaaS, Andheri AdTech): regular GSTR-1/3B. Indian businesses receiving foreign OIDAR: RCM in own GSTR-3B. Patron Marine Lines provides free track assessment.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Category identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Track assigned</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>B2B/B2C split determined</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CLASSIFY</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Non-Res or India</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">B2B or B2C</text></svg></div>
            <span class="illustration-label">Classified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Register on the GST Portal</h3>
        <p class="step-description">Non-resident: GST REG-10 at least 5 days before commencing business in India. Passport, tax ID, authorised representative. Single national GSTIN. India-based: regular registration with Powai/Andheri office address, per-state GSTIN.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>REG-10 or regular filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTIN received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auth rep appointed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTER</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">REG-10 or Regular</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Auth Rep Appointed</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">No Threshold</text></svg></div>
            <span class="illustration-label">Registered</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Compile Monthly Supply Data</h3>
        <p class="step-description">Non-resident: extract state-wise supply data for Indian NTOR (Table 5 requires place of supply by state using billing address, IP, card country). India-based: invoice-wise B2B/B2C, export Table 6A. For SaaS: reconcile MRR with GST supply values.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>State-wise data extracted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NTOR vs B2B separated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MRR reconciled</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">COMPILE</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">State-Wise Data</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">NTOR + B2B Split</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">MRR Reconciled</text></svg></div>
            <span class="illustration-label">Data Compiled</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Compute and Deposit Tax</h3>
        <p class="step-description">Non-resident: IGST at 18% on NTOR supplies. Challan via international payment. No ITC offset. Must pay before GSTR-5A. India-based: compute CGST+SGST or IGST, offset ITC, pay net tax before GSTR-3B. Gaming: 28% on bet value.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challan deposited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per-track payment done</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DEPOSIT</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">IGST 18% Challan</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">No ITC Offset</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Before Filing</text></svg></div>
            <span class="illustration-label">Tax Paid</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File GSTR-5A or GSTR-1/GSTR-3B</h3>
        <p class="step-description">Non-resident: GSTR-5A on portal - Table 5 (state-wise), Table 5A (amendments), Table 6 (interest). File by 20th. Patron files by 18th. India-based: GSTR-1 by 11th, GSTR-3B by 20th. Patron files by 8th/17th. Nil returns filed for zero-supply months.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Return filed on time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Nil returns included</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2-day buffer maintained</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FILE RETURN</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">GSTR-5A by 18th</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">or GSTR-1/3B</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Nil Included</text></svg></div>
            <span class="illustration-label">Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Maintain Records and Monitor Compliance</h3>
        <p class="step-description">Non-resident: transaction details, customer location data, payment records for 72 months (Rule 56). India-based: 6 years (Section 36). File previous periods before current. Patron tracks all deadlines for Mumbai OIDAR clients.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>72-month records maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Location data preserved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All periods filed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">COMPLIANT</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">72-Mo Records</text></svg></div>
            <span class="illustration-label">Compliant</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for OIDAR GST Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>Non-Resident: Passport + Tax ID:</strong> Foreign entity identification for GST REG-10.</li><li><strong>REG-10 Certificate:</strong> Single national GSTIN after Simplified Registration.</li><li><strong>State-Wise Supply Data:</strong> Monthly NTOR supply values by Indian state for GSTR-5A Table 5.</li><li><strong>Customer Location Records:</strong> IP address logs, billing address, payment card country code for place of supply.</li><li><strong>India-Based: Service Invoices:</strong> With SAC codes (998431 online content, 998439 IT services, 998361 advertising).</li><li><strong>Subscription/Billing Records:</strong> Platform payment gateway data for MRR reconciliation.</li><li><strong>Purchase Invoices for ITC:</strong> Server costs, bandwidth, software, coworking, equipment (India-based only).</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai Tip:</strong> Powai SaaS companies serving clients across all Indian states must classify each invoice as intra-state (Mumbai client = CGST+SGST) or inter-state (other state = IGST) based on recipient's billing state, not server location. Patron pre-validates supply classification before GSTR-1 filing.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common OIDAR GST Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>State-Wise Allocation</td><td>GSTR-5A requires state-wise NTOR data. Millions of subscribers. Determining state via IP/billing/card. Wrong allocation = wrong IGST distribution to states</td><td>Automated state allocation using billing address and IP data. Place of supply determination per S.13(12). Validated before GSTR-5A filing</td></tr>
                        <tr><td>B2B vs B2C Classification</td><td>Non-resident must identify registered vs unregistered Indian recipients. B2B = RCM by recipient (exclude from GSTR-5A). B2C = include. Misclassification = compliance errors</td><td>Recipient GSTIN validation. B2B excluded from GSTR-5A. B2C/NTOR correctly captured. Clear classification rules applied to all transactions</td></tr>
                        <tr><td>No ITC for Non-Resident</td><td>GSTR-5A permits no ITC. Indian expenses (agents, payment gateways, marketing) cannot offset IGST. Full IGST paid from provider funds</td><td>Full IGST liability computed upfront. Challan managed. No credit ledger complications. Cash flow planning for non-resident clients</td></tr>
                        <tr><td>Money Gaming Rate Complexity</td><td>28% on full bet value (not just commission). High rate + full-value taxation. Distinguishing money vs skill gaming under evolving GST Council decisions</td><td>Gaming-specific valuation rules applied. HSN/SAC mapping. GSTR-1/3B with gaming disclosures. Evolving Council decisions tracked</td></tr>
                        <tr><td>Intermediary vs Principal</td><td>Mumbai entity reselling foreign OIDAR: is it intermediary or principal? Misclassification = wrong return form (GSTR-5A vs GSTR-1/3B) and demand notices</td><td>Classification analysis per IGST Act intermediary definition. Correct return form determined. Documentation maintained for audit defence</td></tr>

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
            <h2 class="section-title">OIDAR GST Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-5A Filing (Govt)</td><td>Nil (no late fee currently)</td></tr>
                        <tr><td>IGST on OIDAR (B2C)</td><td>18% (28% money gaming)</td></tr>
                        <tr><td>Interest on Delayed IGST</td><td>18% p.a.</td></tr>
                        <tr><td>Patron: GSTR-5A Monthly</td><td>Starting Rs 5,000/month</td></tr>
                        <tr><td>Patron: Authorised Rep</td><td>Starting Rs 10,000/month</td></tr>
                        <tr><td>Patron: India-Based Filing</td><td>Starting Rs 3,000/month</td></tr>
                        <tr><td>Patron: REG-10 Registration</td><td>Starting Rs 7,500 one-time</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free OIDAR GST Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20OIDAR%20GST%20compliance%20in%20Mumbai.%20Please%20help." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OIDAR GST Filing Due Dates</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GST REG-10 (Non-Resident)</td><td>5 days before commencing business</td></tr>
                        <tr><td>IGST Challan Deposit</td><td>Before GSTR-5A filing</td></tr>
                        <tr><td>GSTR-5A (Non-Resident)</td><td>20th of following month</td></tr>
                        <tr><td>GSTR-1 (India-Based)</td><td>11th of following month</td></tr>
                        <tr><td>GSTR-3B (India-Based/RCM)</td><td>20th of following month</td></tr>
                        <tr><td>Nil GSTR-5A</td><td>20th (mandatory even if zero supplies)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> GSTR-5A must be filed even for months with zero supplies - nil filing is mandatory. Non-compliance exposes foreign providers to Section 122 penalties and Section 79 recovery proceedings. India-based providers face standard late fees + GSTIN suspension. Patron files GSTR-5A by 18th, GSTR-1 by 8th, GSTR-3B by 17th.</p>

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
            <h2 class="section-title">Why Choose Patron for OIDAR GST in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Authorised Representative</h3><p>Full India compliance from Mumbai office for non-resident OIDAR providers. Registration, monthly GSTR-5A, IGST payment, GST authority correspondence. Rule 64 compliant.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Digital Services Expertise</h3><p>SaaS billing, subscription MRR, AdTech commissions, OTT subscriptions, online gaming valuation. Accurate SAC mapping and return preparation for Mumbai's digital sector.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Dual-Track Compliance</h3><p>GSTR-5A (non-resident) + GSTR-1/3B (India-based) + RCM advisory (Indian recipients). One-stop for the entire Mumbai OIDAR ecosystem. All tracks from one engagement.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>Digital services GST expertise. Powai SaaS, Andheri AdTech, Lower Parel OTT. 4.9 rating, 15+ years, 4 offices. Nil returns auto-filed.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Digital Businesses Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram. Authorised representative services for non-resident OIDAR. Digital services GST expertise.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Non-Resident vs India-Based OIDAR Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Non-Resident Provider</th><th>India-Based Provider (Mumbai)</th></tr></thead>
                    <tbody>
                        <tr><td>Registration</td><td>GST REG-10 (single national GSTIN)</td><td>Regular registration (per-state GSTIN)</td></tr>
                        <tr><td>Return</td><td>GSTR-5A (monthly by 20th)</td><td>GSTR-1 (11th) + GSTR-3B (20th)</td></tr>
                        <tr><td>B2C Supply</td><td>Provider pays IGST directly</td><td>Provider charges CGST+SGST or IGST</td></tr>
                        <tr><td>B2B Supply</td><td>Indian recipient pays RCM</td><td>Provider charges GST; normal invoice</td></tr>
                        <tr><td>ITC</td><td>Not available</td><td>Available on all business inputs</td></tr>
                        <tr><td>Auth Rep Required</td><td>Yes (Rule 64)</td><td>No</td></tr>
                        <tr><td>Mumbai Example</td><td>Netflix, AWS, Adobe to consumers</td><td>Powai SaaS, Andheri AdTech firms</td></tr>

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
                
                <p>Mumbai OIDAR providers and recipients often need:</p>
                <ul><li><a href="/gst-returns">GST Returns</a> - General filing guide.</li>
                    <li><a href="/gst-returns-for-freelancers">Freelancer GST Returns</a> - For independent digital professionals.</li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a> - New registration.</li>
                    <li><a href="/gst-audit">GST Audit</a> - Department audit support.</li>
                    <li><a href="#">Import Export Code</a> - For cross-border services.</li>
                    <li><a href="/private-limited-company-registration">Company Registration</a> - Platform incorporation.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for OIDAR GST</h2>
            <div class="content-text">
                
                <p><strong>IGST Act, 2017:</strong></p>
                <ul><li>S.2(17): OIDAR definition. S.14: Non-resident OIDAR liability. S.13(12): Place of supply. S.24(xi) CGST: Compulsory registration.</li></ul>
                <p style="margin-top:16px;"><strong>Forms and Rules:</strong></p>
                <ul><li>GST REG-10: Simplified Registration. GSTR-5A: Non-resident monthly. Rule 64: Authorised representative. Rule 56: 72-month records.</li></ul>
                <p style="margin-top:16px;"><strong>Rates:</strong></p>
                <ul><li>18% IGST (standard OIDAR). 28% on full bet value (online money gaming). No ITC for non-resident GSTR-5A filers.</li></ul>
                <p style="margin-top:16px;"><strong>Mumbai:</strong> 4 Commissionerate zones for India-based. Single national for non-resident. <a href="https://gst.gov.in" target="_blank" rel="noopener">GST Portal</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: OIDAR GST Returns in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about OIDAR definition, GSTR-5A filing, mandatory registration, ITC availability, B2B RCM, GST rates, and Mumbai SaaS export treatment.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'OIDAR GST Returns',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles OIDAR returns in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Non-resident OIDAR providers have a single national registration via GST REG-10 and file GSTR-5A centrally on the GST portal. India-based OIDAR providers in Mumbai fall under the jurisdictional GST Commissionerate East West Central or South based on their registered address. Patron Marine Lines office handles both non-resident GSTR-5A and India-based GSTR-1 GSTR-3B for Mumbai digital services.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is OIDAR under GST?</h3>
                        <div class="faq-expanded__a"><p>OIDAR stands for Online Information and Database Access or Retrieval services defined in Section 2(17) of the IGST Act. It covers services delivered via internet whose supply is impossible without information technology including cloud services streaming online advertising e-books software downloads online gaming and digital content. The key test is minimal human intervention and IT-dependent delivery.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is GSTR-5A and who files it?</h3>
                        <div class="faq-expanded__a"><p>GSTR-5A is the monthly return filed by non-resident OIDAR service providers who supply services to unregistered Indian consumers known as NTOR. It is due by the 20th of the following month. It captures state-wise supply values and IGST payable. No ITC is available. Nil filing is mandatory even for months with zero supplies. India-based OIDAR providers file regular GSTR-1 GSTR-3B instead.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is GST registration mandatory for OIDAR providers?</h3>
                        <div class="faq-expanded__a"><p>Yes under Section 24(xi) of the CGST Act and Section 14 of the IGST Act registration is mandatory for any person supplying OIDAR services from outside India to persons in India other than registered persons. There is no threshold exemption. Non-resident providers register via GST REG-10 under the Simplified Registration Scheme. India-based providers follow standard registration rules.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can non-resident OIDAR providers claim ITC?</h3>
                        <div class="faq-expanded__a"><p>No GSTR-5A does not permit Input Tax Credit claims. Non-resident OIDAR providers cannot offset any Indian expenses against their IGST liability. The entire IGST on B2C and NTOR supplies must be paid in full via challan before GSTR-5A can be filed. There is no electronic credit ledger maintained for OIDAR taxpayers on the GST portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens when a Mumbai business subscribes to foreign OIDAR?</h3>
                        <div class="faq-expanded__a"><p>When a GST-registered Mumbai business subscribes to foreign OIDAR like AWS or Salesforce the Mumbai business pays GST under Reverse Charge Mechanism in their own GSTR-3B. The foreign provider does not include this B2B transaction in GSTR-5A. The RCM paid by the Mumbai business is available as ITC in their electronic credit ledger.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the GST rate for OIDAR services?</h3>
                        <div class="faq-expanded__a"><p>The standard rate is 18 percent IGST for most OIDAR services. For online money gaming the rate is 28 percent on the full value of bets placed. Non-resident providers pay IGST only since supply is inter-state by nature. India-based providers charge CGST plus SGST for intra-state or IGST for inter-state both at 18 percent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does a Mumbai SaaS company providing services abroad need to file GSTR-5A?</h3>
                        <div class="faq-expanded__a"><p>No GSTR-5A is only for non-resident providers supplying OIDAR to Indian recipients. A Mumbai SaaS company providing services to foreign clients files regular GSTR-1 GSTR-3B as a normal taxpayer. The export of services is zero-rated under LUT Section 16 of IGST Act. The company reports exports in GSTR-1 Table 6A and claims ITC refund via RFD-01.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>OIDAR kya hota hai?</strong> Internet se deliver hone wali digital services - SaaS, streaming, e-books, online gaming, digital ads. Section 2(17) IGST Act. IT ke bina impossible ho supply.</p>
                <p><strong>Non-resident provider ko kaunsa return file karna padta hai?</strong> GSTR-5A monthly 20 tarikh tak. GST REG-10 se register. ITC nahi milta. Nil return bhi mandatory.</p>
                <p><strong>Indian SaaS company ko GSTR-5A lagta hai kya?</strong> Nahi. Indian OIDAR provider regular GSTR-1/3B file karta hai. GSTR-5A sirf non-resident ke liye hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Register and File - No Threshold Exemption</h2>
            <div class="content-text">
                
                <p>OIDAR GST registration is mandatory with no turnover threshold. GSTR-5A must be filed monthly - nil filing mandatory even for zero-supply months. Non-compliance = Section 122 penalties + Section 79 recovery. India-based providers face standard late fees + GSTIN suspension. Indian businesses receiving foreign OIDAR must pay RCM - non-payment = 18% interest + Section 73/74 demand. GST authorities increasingly scrutinise digital transactions.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20OIDAR%20GST%20compliance%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Comply with India's Digital Services Tax</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">OIDAR GST in Mumbai spans non-resident providers (Netflix, AWS, Adobe) filing GSTR-5A, India-based SaaS/AdTech/OTT filing GSTR-1/3B, and enterprises paying RCM on foreign digital subscriptions. Dual-track framework requires precise classification.</p>
                <p style="color:rgba(255,255,255,0.9);">No threshold exemption. 18% IGST (28% money gaming). Non-resident: no ITC, nil filing mandatory, authorised representative required. India-based: full ITC, export zero-rated under LUT.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron provides authorised representative services, GSTR-5A filing, regular return filing, RCM advisory, and place of supply determination from Marine Lines. 10,000+ businesses, 4.9 rating, 15+ years.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20OIDAR%20GST%20compliance%20in%20Mumbai.%20Please%20help." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=OIDAR%20GST%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20OIDAR%20GST%20compliance%20in%20Mumbai.%0A%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">OIDAR GST Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides OIDAR GST registration and return filing services across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">OIDAR GST compliance</div>
                <div class="pa-city-grid">
                    <a href="/gst-returns-for-oidar/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/gst-returns-for-oidar/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/gst-returns-for-oidar/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">Digital services compliance</div>
                <div class="pa-cross-grid">
                    <a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Monthly/Quarterly</div></div></a>
                    <a href="/gst-returns-for-freelancers" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Freelancer GST</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Import Export Code</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers OIDAR GST returns in Mumbai. Content reviewed quarterly (Freshness Tier 1) as OIDAR provisions, rates, and CBIC notifications evolve.</p>
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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
