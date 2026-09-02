
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>AD Code Registration in Mumbai - Customs & ICEGATE Process</title>
    <meta name="description" content="AD code registration in Mumbai. JNPT Nhava Sheva, Mumbai Air Cargo, ICEGATE portal, 14-digit authorised dealer code, bank letter, shipping bill, EDPMS. CA-led. Call +91 945 945 6700.">
    <link rel="canonical" href="/ad-code-registration/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="AD Code Registration in Mumbai - Customs & ICEGATE Process">
    <meta property="og:description" content="AD code registration in Mumbai. JNPT Nhava Sheva, Mumbai Air Cargo, ICEGATE portal, 14-digit authorised dealer code, bank letter, shipping bill, EDPMS. CA-led. Call +91 945 945 6700.">
    <meta property="og:url" content="/ad-code-registration/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AD Code Registration in Mumbai - Customs & ICEGATE Process">
    <meta name="twitter:description" content="AD code registration in Mumbai. JNPT Nhava Sheva, Mumbai Air Cargo, ICEGATE portal, 14-digit authorised dealer code, bank letter, shipping bill, EDPMS. CA-led. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "AD Code Registration in Mumbai",
      "description": "AD code registration in Mumbai. JNPT Nhava Sheva, Mumbai Air Cargo, ICEGATE portal, 14-digit authorised dealer code, bank letter, shipping bill, EDPMS. CA-led. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/ad-code-registration/mumbai",
      "serviceType": "AD Code Registration in Mumbai",
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
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "https://www.patronaccounting.com/ad-code-registration/mumbai",
        "price": "5000"
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
          "name": "AD Code Registration in India: Process, Docs and ICEGATE",
          "item": "https://www.patronaccounting.com/ad-code-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "AD Code Registration in Mumbai",
          "item": "https://www.patronaccounting.com/ad-code-registration/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is AD code registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AD Code or Authorised Dealer Code registration is the process of obtaining a unique 14-digit code from your RBI-authorised bank and registering it with customs on ICEGATE portal at each port from which you export or import. The code links your bank account to the customs system enabling shipping bill generation, foreign exchange tracking under FEMA, EDPMS reporting to RBI, and export incentive disbursement including GST refund duty drawback and RoDTEP. Mandatory for every exporter and importer. Lifetime validity."
          }
        },
        {
          "@type": "Question",
          "name": "How to register AD code at JNPT Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ensure valid IEC from DGFT and current account with RBI-authorised dealer bank. Request AD code letter from bank taking 1-3 working days. Log in to ICEGATE and add bank account with AD code selecting port code INNSA1 for JNPT Nhava Sheva. Upload scanned AD code letter and submit. JNPT Customs verifies within 1-3 working days. AD code active and shipping bill generation enabled. If also shipping by air repeat for INBOM4 Mumbai Air Cargo. Patron handles end-to-end."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are required for AD code registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IEC certificate from DGFT, bank AD code letter on bank letterhead with 14-digit code and account details signed by authorised officer, PAN card of entity, GST registration certificate, cancelled cheque from current account, company registration document, authorised signatory ID proof Aadhaar plus PAN, and letter of authority if filing through representative. All documents self-attested and company-stamped. For ICEGATE upload scanned copies in PDF under 800 KB."
          }
        },
        {
          "@type": "Question",
          "name": "How long does AD code registration take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bank AD code letter 1-3 working days. ICEGATE port registration 1-3 working days after submission for customs verification. Total single port 3-7 working days. Multiple Mumbai ports JNPT plus Air Cargo plus Mumbai Port Trust 5-10 working days total as registrations can be filed simultaneously after bank letter obtained. If IEC needed as prerequisite add 3-5 working days for DGFT processing. Patron bank coordination typically expedites."
          }
        },
        {
          "@type": "Question",
          "name": "Is AD code required for imports as well as exports?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. While AD code is most commonly associated with exports for shipping bills it is also required for imports. For imports the AD code links your bank account to the bill of entry enabling tracking of foreign exchange payments under FEMA, proper customs clearance, and duty payment routing. Every importer clearing goods through JNPT Mumbai Air Cargo or Mumbai Port Trust needs AD code registered at that port. Same AD code serves both export and import."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need separate AD codes for JNPT and Mumbai airport?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Separate REGISTRATIONS required but same AD code. Bank issues one AD code per exporter. This code must be registered separately on ICEGATE at each port: JNPT Nhava Sheva INNSA1 for sea cargo and Mumbai Air Cargo Complex INBOM4 for air cargo. If also using Mumbai Port Trust INBOM1 register there too. One AD code multiple port registrations each done individually on ICEGATE. Patron registers at all required Mumbai ports simultaneously. Quick Answers AD code kya hota hai? 14-digit ka unique number jo aapka bank deta hai (RBI-authorised bank). Yeh aapke bank account ko customs system se jodta hai. Bina AD code ke shipping bill nahi ban sakta, matlab export NAHI ho sakta. JNPT se container ship karna ho ya Air Cargo se gems bhejne ho - AD code MANDATORY hai. JNPT aur Airport ke liye alag chahiye? AD code ek hi hota hai (bank se ek milta hai). LEKIN ICEGATE pe har port pe SEPARATELY register karna padta hai. JNPT = INNSA1, Air Cargo = INBOM4, Mumbai Port Trust = INBOM1. Patron teeno ports ka registration ek saath kar deta hai. Kitne din mein mil jata hai? Bank se letter: 1-3 din. ICEGATE registration: 1-3 din. Ek port: 3-7 din. Teeno ports: 5-10 din. Lifetime valid hai - renewal nahi. Patron Marine Lines se sab handle karta hai."
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
                        AD Code Registration in Mumbai: CA-Led Authorised Dealer Code Registration at JNPT, Mumbai Airport, and Mumbai Port via ICEGATE for Exporters and Importers
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What Is AD Code:</span> 14-digit unique code from RBI-authorised bank linking export/import bank account to customs - MANDATORY for shipping bills and customs clearance</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Mumbai Ports:</span> JNPT Nhava Sheva (INNSA1 - sea), Mumbai Air Cargo Sahar (INBOM4 - air), Mumbai Port Trust (INBOM1 - break-bulk). SEPARATE registration at each port</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Bank AD code letter Rs 0-2,000 + ICEGATE registration free + Patron professional from Rs 5,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3-7 working days (single port) | 5-10 working days (all 3 Mumbai ports) | Lifetime validity - no renewal</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=AD%20Code%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20AD%20code%20registration.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20AD%20code%20registration%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'AD Code Registration',
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
    'ctaText'    => 'From JNPT containerised exports to Air Cargo gems shipments to Mumbai Port Trust break-bulk - Mumbai\'s exporters trust Patron for AD code registration.',
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Mumbai Ports</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AD Code Registration in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - AD Code Registration Services at a Glance</strong></p>
                    <p>AD Code = 14-digit Authorised Dealer Code from RBI bank linking your account to customs. MANDATORY for shipping bills (no AD code = no export). PORT-SPECIFIC: register separately at JNPT (INNSA1), Air Cargo (INBOM4), Mumbai Port Trust (INBOM1). Enables FEMA compliance, EDPMS, export incentives (GST refund, drawback, RoDTEP). Lifetime validity. 3-7 days per port. Mumbai = India's export-import capital. JNPT handles 50%+ containerised cargo.</p>
                </div>
                <p>Mumbai is the nerve centre of India's export-import trade. JNPT handles 4.6+ million TEUs (50%+ of India's containerised cargo). Air Cargo handles gems, pharma, electronics. Learn more about <a href="/ad-code-registration">AD code registration across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>What Is AD Code</td><td>14-digit code from RBI-authorised bank. Links bank account to customs for shipping bills and FEMA</td></tr>
                        <tr><td>Legal Basis</td><td>FEMA 1999 (S.7/8), RBI Master Direction 2016 (EDPMS), Customs Act 1962, Foreign Trade Policy</td></tr>
                        <tr><td>Mumbai Ports</td><td>JNPT INNSA1 (sea) + Air Cargo INBOM4 (air) + Mumbai Port Trust INBOM1 (break-bulk). SEPARATE registration each</td></tr>
                        <tr><td>Prerequisites</td><td>Valid IEC (DGFT) + Current account with RBI AD bank + Active GST registration</td></tr>
                        <tr><td>Validity</td><td>Lifetime - no renewal. Update only if bank/business details change</td></tr>
                        <tr><td>Timeline</td><td>3-7 days (single port) | 5-10 days (all 3 ports)</td></tr>
                        <tr><td>Cost</td><td>Bank letter Rs 0-2,000 + ICEGATE free + Patron from Rs 5,000</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Every exporter/importer in Mumbai needs AD code at their shipping port. Patron integrates with <a href="/iec-registration/mumbai">IEC registration</a>, <a href="/gst-registration/mumbai">GST registration</a>, <a href="#">company registration</a>, and <a href="/trademark-registration/mumbai">trademark</a> for export brands.</p>
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
                <h2 class="section-title">What Is AD Code Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>AD Code Registration is obtaining a 14-digit Authorised Dealer Code from your RBI-authorised bank and registering it on ICEGATE at each customs port, creating the mandatory link between your bank account, customs system, and RBI's EDPMS for all foreign trade transactions.</p>
                    <p>Without AD code: no shipping bill = no export. The code enables FEMA compliance (9-month realisation tracking), export incentives (GST refund, duty drawback, RoDTEP), and import payment tracking. PORT-SPECIFIC: register separately at each port you use.</p>
                    <p>Mumbai has three customs points: JNPT (INNSA1), <a href="https://icegate.gov.in" target="_blank" rel="noopener">Air Cargo</a> (INBOM4), Mumbai Port Trust (INBOM1). Learn more at <a href="/ad-code-registration">our national AD code practice</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for AD Code Registration:</strong></p>
                    <ul>
                        <li><strong>14-Digit Code:</strong> Bank Code (4) + Branch Code (3) + Unique Exporter ID (7). From RBI-authorised dealer bank. One code per entity per bank.</li>
                        <li><strong>Port-Specific:</strong> Same AD code, SEPARATE ICEGATE registration at each port. JNPT + Air Cargo + MPT = 3 registrations.</li>
                        <li><strong>Shipping Bill Prerequisite:</strong> No AD code at port = no shipping bill = goods stuck at port. Demurrage Rs 5,000-50,000/day.</li>
                        <li><strong>EDPMS Linkage:</strong> RBI monitors export proceeds realisation (9 months under FEMA) through AD code. Bank-customs-RBI connected.</li>
                        <li><strong>Export Incentives:</strong> GST refund, duty drawback, RoDTEP routed to bank account via AD code. Wrong linkage = blocked incentives.</li>
                        <li><strong>Lifetime Validity:</strong> No renewal. Update only if bank, branch, or business details change.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AD Code Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Export</span>
                        <strong>AD Code</strong>
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
            <h2 class="section-title">Who Needs AD Code Registration in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Garment Exporters (Lower Parel/Parel):</strong> India's largest garment export cluster. JNPT for containers + Air Cargo for samples. Need AD code at BOTH ports. <a href="/gst-registration/mumbai">GST registration</a> for export refunds.</p>
                <p><strong>Gems and Jewellery (BKC/Zaveri Bazaar):</strong> Bharat Diamond Bourse. High-value air exports via INBOM4. <a href="/iec-registration/mumbai">IEC registration</a> prerequisite.</p>
                <p><strong>Pharma Exporters (Andheri MIDC/Thane):</strong> 30% of India's pharma exports. JNPT for bulk + Air Cargo for temperature-sensitive. Multi-port AD code essential. <a href="/fssai-central-license/mumbai">FSSAI</a> for food-grade pharma.</p>
                <p><strong>IT Services and Engineering (Powai/BKC/Thane-Belapur):</strong> Software services exports, engineering goods through JNPT and Mumbai Port Trust. <a href="#">Company registration</a> for export entity.</p>
                <p><strong>First-Time Exporters and D2C Brands (BKC/Powai):</strong> Amazon Global Selling, first export consignment. AD code from day one. <a href="/trademark-registration/mumbai">Trademark</a> for export brand.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AD Code Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>IEC Verification (Prerequisite)</td><td>Verify valid IEC from DGFT. IEC-PAN-GSTIN consistency check. If no IEC: <a href="/iec-registration/mumbai">IEC registration</a> handled as prerequisite (DGFT Mumbai, Bandra East)</td></tr>
                        <tr><td>Bank AD Code Letter Procurement</td><td>Coordinate with RBI-authorised dealer bank forex department. 14-digit code on bank letterhead. SBI, HDFC, ICICI, Axis, Kotak. 1-3 working days. Expedited via forex branch coordination</td></tr>
                        <tr><td>ICEGATE Port Registration</td><td>Register AD code on icegate.gov.in. JNPT (INNSA1), Air Cargo (INBOM4), Mumbai Port Trust (INBOM1). Upload bank letter. Customs verification 1-3 days. Shipping bill enabled</td></tr>
                        <tr><td>Multi-Port Registration</td><td>Same AD code registered at ALL required Mumbai ports in single engagement. Garment/pharma exporters often need JNPT + Air Cargo. Engineering may need JNPT + MPT</td></tr>
                        <tr><td>EDPMS Linkage Verification</td><td>Verify export transaction reporting flows correctly: customs to bank to RBI. 9-month realisation tracking active. Prevents FEMA non-compliance notices</td></tr>
                        <tr><td>Export Incentive Linkage</td><td>GST refund, duty drawback, RoDTEP correctly routed to exporter bank account via AD code. Incorrect linkage = blocked incentives. Patron verifies routing</td></tr>
                        <tr><td>AD Code Update/Modification</td><td>Bank change, branch change, business name change, IEC update. New bank letter + ICEGATE update at all registered ports</td></tr>
                        <tr><td>Integrated Export Compliance</td><td>AD code + <a href="/iec-registration/mumbai">IEC</a> + <a href="/gst-registration/mumbai">GST export</a> + RCMC + shipping bill guidance + FEMA advisory. Complete export setup from one firm</td></tr>

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
            <h2 class="section-title">How AD Code Registration Works in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete AD code registration - from IEC verification and bank coordination through ICEGATE port registration, customs activation, to multi-port registration across all Mumbai ports.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">IEC Verification</h3>
        <p class="step-description">Verify valid IEC from DGFT. Check IEC-PAN-GSTIN consistency across all systems (DGFT portal, GST portal, bank records, ICEGATE). If no IEC: obtain from DGFT Mumbai (Bandra East) as prerequisite. Walk-in at Patron's Marine Lines office.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IEC verified active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN-GSTIN consistent</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Prerequisites confirmed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IEC CHECK</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">DGFT Valid?</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">PAN-GSTIN Match</text></svg></div>
            <span class="illustration-label">IEC Ready</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Bank Selection and Current Account</h3>
        <p class="step-description">Ensure current account is with RBI-authorised dealer bank (SBI, HDFC, ICICI, Axis, Kotak, or any AD Category-I bank). If no current account with AD bank: open one. Major forex branches (Fort, Nariman Point, BKC) process faster.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AD bank confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Current account active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Forex branch identified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BANK</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">RBI AD Bank</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Current Account</text></svg></div>
            <span class="illustration-label">Bank Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Bank AD Code Letter</h3>
        <p class="step-description">Submit request to bank's forex/trade finance department. Bank issues 14-digit AD code on official letterhead with account details, IFSC, signed by authorised officer. Processing: 1-3 working days. Patron coordinates directly with forex department for expedited issuance.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Request submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>14-digit code issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank letter obtained</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AD CODE LETTER</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">14-Digit Code</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Bank Letterhead</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">1-3 Days</text></svg></div>
            <span class="illustration-label">AD Code Obtained</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">ICEGATE Port Registration</h3>
        <p class="step-description">Register on icegate.gov.in. Add bank account with AD code. Select port code: INNSA1 (JNPT), INBOM4 (Air Cargo), INBOM1 (Mumbai Port Trust). Upload scanned AD code letter. Submit for customs verification. 1-3 working days activation.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICEGATE filed online</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Port code selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank letter uploaded</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ICEGATE</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">INNSA1 / INBOM4</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Upload + Submit</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Port Selected</text></svg></div>
            <span class="illustration-label">Registration Submitted</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Customs Verification and Activation</h3>
        <p class="step-description">Customs officials verify AD code details against bank records. Activation typically within 1-3 working days. AD code becomes visible on ICEGATE profile. Shipping bill generation enabled for that port. EDPMS linkage activated.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Customs verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AD code activated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shipping bill enabled</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">ACTIVATED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Ship Bill Ready</text></svg></div>
            <span class="illustration-label">Port Active</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Multi-Port Registration (If Needed)</h3>
        <p class="step-description">Repeat Steps 4-5 for each additional Mumbai port. Same AD code from bank, separate ICEGATE registration. JNPT + Air Cargo + Mumbai Port Trust each registered individually. Patron handles all ports simultaneously in single engagement.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All ports registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>JNPT + Air + MPT</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-port complete</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MULTI-PORT</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">JNPT + Air Cargo</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">+ MPT</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">All 3 Ports</text></svg></div>
            <span class="illustration-label">All Ports Active</span>
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
            <h2 class="section-title">Documents Required for AD Code Registration</h2>
            <div class="content-text">
                
                <ul><li><strong>IEC Certificate:</strong> Import Export Code from DGFT (dgft.gov.in) - self-attested + company stamped.</li><li><strong>Bank AD Code Letter:</strong> On bank letterhead with 14-digit code, account details, IFSC, signed by authorised officer.</li><li><strong>PAN Card of Entity:</strong> Company/LLP/Firm/Proprietor PAN - self-attested + stamped.</li><li><strong>GST Registration Certificate:</strong> GSTIN - self-attested + stamped.</li><li><strong>Cancelled Cheque:</strong> From the current account linked to AD code.</li><li><strong>Company Registration:</strong> CIN/Partnership Deed/LLP Agreement.</li><li><strong>Authorised Signatory Details:</strong> Aadhaar + PAN of director/partner/proprietor.</li><li><strong>Letter of Authority:</strong> If filing through authorised representative/CA.</li><li><strong>ICEGATE Login:</strong> User ID and password (if registered; if not, Patron registers).</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>IEC-PAN-GSTIN Must Match:</strong> The AD code, IEC, PAN, and GSTIN must all correspond to the same entity with consistent details. Even minor spelling differences or address mismatches cause ICEGATE rejection or shipping bill errors. Patron verifies consistency across ALL four systems before filing.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common AD Code Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Port Registration Not Done</td><td>Bank AD code letter obtained but NOT registered on ICEGATE at the port. Shipping bill fails at JNPT/Air Cargo. Consignment stuck at port with demurrage</td><td>ICEGATE registration completed at ALL required ports BEFORE first shipment. Bank letter is Step 1; port registration is the critical Step 2</td></tr>
                        <tr><td>IEC-PAN-GSTIN Mismatch</td><td>Minor spelling, address, or constitution differences between IEC, bank records, GST portal, and ICEGATE. Causes rejection or shipping bill errors</td><td>Consistency verified across DGFT (IEC), GST portal, bank records, and ICEGATE BEFORE filing. Mismatches corrected at source</td></tr>
                        <tr><td>Bank Delays in AD Code Letter</td><td>Smaller branches unfamiliar with export docs take 7-10 days instead of 1-3. Delays entire export timeline</td><td>Patron works directly with forex/trade finance department. Major forex branches (Fort, Nariman Point, BKC) prioritised. Expedited processing</td></tr>
                        <tr><td>Multiple Banks - Which AD Code</td><td>Current accounts at multiple banks. Only ONE AD code active per IEC per port. Wrong bank linked = incentives to wrong account</td><td>Strategic bank selection: AD code from bank where export proceeds received. Optimal incentive routing. Single correct linkage per port</td></tr>
                        <tr><td>First-Time Exporter Confusion</td><td>Startups try to ship without AD code. Don't know the sequence: IEC first then bank then AD code then ICEGATE then export. Customs rejection at JNPT</td><td>Complete sequence guidance from day one. IEC + AD code + GST export + first shipment. No surprises at customs</td></tr>

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
            <h2 class="section-title">AD Code Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Bank AD Code Letter</td><td>Rs 0 - Rs 2,000 (varies by bank)</td></tr>
                        <tr><td>ICEGATE Registration</td><td>Free (no government fee)</td></tr>
                        <tr><td>IEC Registration (if needed)</td><td>Rs 500 (DGFT) + Rs 3,000-5,000 (professional)</td></tr>
                        <tr><td>Patron: Single Port</td><td>Rs 5,000 - Rs 8,000</td></tr>
                        <tr><td>Patron: All 3 Mumbai Ports</td><td>Rs 8,000 - Rs 15,000</td></tr>
                        <tr><td>AD Code Update/Modification</td><td>Rs 3,000 - Rs 5,000</td></tr>
                        <tr><td>Total (Single Port, New)</td><td>Rs 5,500 - Rs 10,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free AD Code Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20AD%20code%20registration%20in%20Mumbai.%20Please%20share%20pricing." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AD Code Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>IEC Verification/Procurement</td><td>1 day (existing) / 3-5 days (new)</td></tr>
                        <tr><td>Bank AD Code Letter</td><td>1-3 working days</td></tr>
                        <tr><td>ICEGATE Registration (per port)</td><td>1-3 working days</td></tr>
                        <tr><td>Total (Single Port)</td><td>3-7 working days</td></tr>
                        <tr><td>Total (All 3 Mumbai Ports)</td><td>5-10 working days</td></tr>
                        <tr><td>AD Code Update</td><td>2-5 working days</td></tr>
                        <tr><td>Validity</td><td>Lifetime (no renewal)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Walk-in at Patron's Marine Lines, Mumbai office. Bank coordination across Mumbai branches. ICEGATE online at icegate.gov.in. JNPT Customs House at Nhava Sheva, Navi Mumbai. Air Cargo Complex at Sahar, Andheri East. Mumbai Port Trust at Ballard Estate. Multi-port registrations can be filed simultaneously once bank letter is obtained. IEC from DGFT Mumbai (Bandra East) is prerequisite.</p>

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
            <h2 class="section-title">Why Choose Patron for AD Code Registration in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>All 3 Mumbai Ports</h3><p>JNPT (INNSA1) + Air Cargo (INBOM4) + Mumbai Port Trust (INBOM1) in single engagement. Most firms handle one port; Mumbai exporters often need two or three.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>IEC-PAN-GSTIN Consistency</h3><p>Details verified across DGFT, GST portal, bank records, and ICEGATE BEFORE registration. Prevents rejection and shipping bill errors that cause port delays.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Bank Forex Coordination</h3><p>Direct coordination with major Mumbai bank forex departments (SBI Fort, HDFC Nariman Point, ICICI BKC). Expedited AD code letter. No 7-10 day branch delays.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Integrated Export Compliance</h3><p>AD code + <a href="/iec-registration/mumbai">IEC</a> + <a href="/gst-registration/mumbai">GST export</a> + RCMC + EDPMS + incentive linkage. Complete export setup. 10,000+ businesses, 4.9 rating.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Exporters Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Four offices: Pune, Mumbai, Delhi, Gurugram. Serving garment exporters, gems traders, pharma companies, IT firms, engineering exporters, and trading houses across Mumbai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Mumbai Ports - AD Code Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Port</th><th>Port Code</th><th>Cargo Type</th><th>Key Export Sectors</th></tr></thead>
                    <tbody>
                        <tr><td>JNPT Nhava Sheva</td><td>INNSA1</td><td>Containerised sea cargo</td><td>Garments, pharma, chemicals, engineering, food, consumer goods</td></tr>
                        <tr><td>Mumbai Air Cargo</td><td>INBOM4</td><td>Air cargo</td><td>Gems and jewellery, pharma (temp-sensitive), electronics, samples, urgent</td></tr>
                        <tr><td>Mumbai Port Trust</td><td>INBOM1</td><td>Break-bulk, liquid, project</td><td>Steel, machinery, chemicals, petroleum, project exports</td></tr>
                        <tr><td colspan="4" style="font-style:italic;">Same AD code from bank, separate ICEGATE registration at each port. Most Mumbai exporters need at least two ports registered.</td></tr>

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
            <h2 class="section-title">Related Services for Mumbai Exporters</h2>
            <div class="content-text">
                
                <p>Mumbai exporters obtaining AD code often need:</p>
                <ul><li><a href="/ad-code-registration">AD Code Registration (India)</a> - National overview.</li>
                    <li><a href="/iec-registration/mumbai">IEC Registration in Mumbai</a> - Prerequisite for AD code.</li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a> - Export GST refund.</li>
                    <li><a href="#">Company Registration in Mumbai</a> - Export entity.</li>
                    <li><a href="/fssai-central-license/mumbai">FSSAI Central License in Mumbai</a> - Food exporters.</li>
                    <li><a href="/trademark-registration/mumbai">Trademark Registration in Mumbai</a> - Export brand.</li>
                    <li><a href="#">RCMC Registration</a> - Export promotion council.</li>
                    <li><a href="/gst-registration">GST Registration (India)</a> - National GST.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for AD Code Registration</h2>
            <div class="content-text">
                
                <p><strong>FEMA 1999 - Section 7/8:</strong></p>
                <ul><li>S.7: Export goods declaration to RBI/AD bank. S.8: Realisation within 9 months. AD code is the linking mechanism for FEMA monitoring.</li></ul>
                <p style="margin-top:16px;"><strong>RBI Master Direction 2016:</strong></p>
                <ul><li>EDPMS: all shipping bills reported via AD code linkage. Bank monitors realisation. Non-compliance = RBI notice.</li></ul>
                <p style="margin-top:16px;"><strong>Customs Act 1962 - Shipping Bill:</strong></p>
                <ul><li>S.50: entry of goods for export. AD code is mandatory field. No AD code = no shipping bill = no export clearance.</li></ul>
                <p style="margin-top:16px;"><strong>Lifetime Validity:</strong> No renewal. Update only if bank/branch/business details change.</p>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://icegate.gov.in" target="_blank" rel="noopener">ICEGATE</a> | <a href="https://dgft.gov.in" target="_blank" rel="noopener">DGFT</a> | <a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a> | <a href="https://jawaharlalnehruport.gov.in" target="_blank" rel="noopener">JNPT</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: AD Code Registration in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about AD code registration, JNPT process, documents, timeline, import requirements, and multi-port registration for Mumbai exporters and importers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'AD Code Registration',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is AD code registration?</h3>
                        <div class="faq-expanded__a"><p>AD Code or Authorised Dealer Code registration is the process of obtaining a unique 14-digit code from your RBI-authorised bank and registering it with customs on ICEGATE portal at each port from which you export or import. The code links your bank account to the customs system enabling shipping bill generation, foreign exchange tracking under FEMA, EDPMS reporting to RBI, and export incentive disbursement including GST refund duty drawback and RoDTEP. Mandatory for every exporter and importer. Lifetime validity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to register AD code at JNPT Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Ensure valid IEC from DGFT and current account with RBI-authorised dealer bank. Request AD code letter from bank taking 1-3 working days. Log in to ICEGATE and add bank account with AD code selecting port code INNSA1 for JNPT Nhava Sheva. Upload scanned AD code letter and submit. JNPT Customs verifies within 1-3 working days. AD code active and shipping bill generation enabled. If also shipping by air repeat for INBOM4 Mumbai Air Cargo. Patron handles end-to-end.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What documents are required for AD code registration?</h3>
                        <div class="faq-expanded__a"><p>IEC certificate from DGFT, bank AD code letter on bank letterhead with 14-digit code and account details signed by authorised officer, PAN card of entity, GST registration certificate, cancelled cheque from current account, company registration document, authorised signatory ID proof Aadhaar plus PAN, and letter of authority if filing through representative. All documents self-attested and company-stamped. For ICEGATE upload scanned copies in PDF under 800 KB.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does AD code registration take?</h3>
                        <div class="faq-expanded__a"><p>Bank AD code letter 1-3 working days. ICEGATE port registration 1-3 working days after submission for customs verification. Total single port 3-7 working days. Multiple Mumbai ports JNPT plus Air Cargo plus Mumbai Port Trust 5-10 working days total as registrations can be filed simultaneously after bank letter obtained. If IEC needed as prerequisite add 3-5 working days for DGFT processing. Patron bank coordination typically expedites.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is AD code required for imports as well as exports?</h3>
                        <div class="faq-expanded__a"><p>Yes. While AD code is most commonly associated with exports for shipping bills it is also required for imports. For imports the AD code links your bank account to the bill of entry enabling tracking of foreign exchange payments under FEMA, proper customs clearance, and duty payment routing. Every importer clearing goods through JNPT Mumbai Air Cargo or Mumbai Port Trust needs AD code registered at that port. Same AD code serves both export and import.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need separate AD codes for JNPT and Mumbai airport?</h3>
                        <div class="faq-expanded__a"><p>Separate REGISTRATIONS required but same AD code. Bank issues one AD code per exporter. This code must be registered separately on ICEGATE at each port: JNPT Nhava Sheva INNSA1 for sea cargo and Mumbai Air Cargo Complex INBOM4 for air cargo. If also using Mumbai Port Trust INBOM1 register there too. One AD code multiple port registrations each done individually on ICEGATE. Patron registers at all required Mumbai ports simultaneously.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>AD code kya hota hai?</strong> 14-digit ka unique number jo aapka bank deta hai (RBI-authorised bank). Yeh aapke bank account ko customs system se jodta hai. Bina AD code ke shipping bill nahi ban sakta, matlab export NAHI ho sakta. JNPT se container ship karna ho ya Air Cargo se gems bhejne ho - AD code MANDATORY hai.</p>
                <p><strong>JNPT aur Airport ke liye alag chahiye?</strong> AD code ek hi hota hai (bank se ek milta hai). LEKIN ICEGATE pe har port pe SEPARATELY register karna padta hai. JNPT = INNSA1, Air Cargo = INBOM4, Mumbai Port Trust = INBOM1. Patron teeno ports ka registration ek saath kar deta hai.</p>
                <p><strong>Kitne din mein mil jata hai?</strong> Bank se letter: 1-3 din. ICEGATE registration: 1-3 din. Ek port: 3-7 din. Teeno ports: 5-10 din. Lifetime valid hai - renewal nahi. Patron Marine Lines se sab handle karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">No AD Code = No Export from Mumbai</h2>
            <div class="content-text">
                
                <p>Without AD code at the port: shipping bill CANNOT be generated. Consignment stuck at JNPT/Air Cargo with demurrage Rs 5,000-50,000/day. Export order delayed - buyer may cancel. Export proceeds not tracked - FEMA non-compliance risk. GST refund and duty drawback blocked. In Mumbai's fast-moving export market, even a 2-3 day delay costs business. Register today.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20AD%20code%20registration%20in%20Mumbai.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your AD Code at All Mumbai Ports</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">AD Code Registration is the mandatory gateway to export-import trade from Mumbai. The 14-digit code links your bank account to customs via ICEGATE. Without it: no shipping bill, no customs clearance, no export.</p>
                <p style="color:rgba(255,255,255,0.9);">Mumbai has three ports requiring separate registration: JNPT (INNSA1 - 50%+ containerised cargo), Air Cargo (INBOM4 - gems, pharma, electronics), Mumbai Port Trust (INBOM1 - break-bulk, liquid). Lifetime validity, 3-7 days per port.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron delivers IEC verification, bank coordination, ICEGATE registration at all three ports, EDPMS linkage, and export incentive setup from Marine Lines. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20AD%20code%20registration%20in%20Mumbai.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=AD%20Code%20Registration%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20AD%20code%20registration%20in%20Mumbai.%0A%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">AD Code Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides AD code registration and export compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">AD code registration and export compliance</div>
                <div class="pa-city-grid">
                    <a href="/ad-code-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/ad-code-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/ad-code-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">End-to-end export-import compliance</div>
                <div class="pa-cross-grid">
                    <a href="/iec-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/fssai-central-license/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Central License</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">RCMC Registration</div><div class="pa-card-sub">Export Council</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers AD code registration in Mumbai. Content reviewed half-yearly (Freshness Tier 2) reflecting ICEGATE updates, DGFT policy changes, and port procedure developments.</p>
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
