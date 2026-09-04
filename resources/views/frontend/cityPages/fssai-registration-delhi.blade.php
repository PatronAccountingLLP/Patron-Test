
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>FSSAI Registration in Delhi - Process, Fees & FoSCoS</title>
    <meta name="description" content="CA-assisted FSSAI registration in Delhi. Basic, State and Central food licence via FoSCoS. Serving Chandni Chowk, Connaught Place, Okhla FBOs. Call +91 945 945 6700.">
    <link rel="canonical" href="/fssai-registration/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FSSAI Registration in Delhi - Process, Fees & FoSCoS">
    <meta property="og:description" content="CA-assisted FSSAI registration in Delhi. Basic, State and Central food licence via FoSCoS. Serving Chandni Chowk, Connaught Place, Okhla FBOs. Call +91 945 945 6700.">
    <meta property="og:url" content="/fssai-registration/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FSSAI Registration in Delhi - Process, Fees & FoSCoS">
    <meta name="twitter:description" content="CA-assisted FSSAI registration in Delhi. Basic, State and Central food licence via FoSCoS. Serving Chandni Chowk, Connaught Place, Okhla FBOs. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FSSAI Registration in Delhi",
      "description": "CA-assisted FSSAI registration in Delhi. Basic, State and Central food licence via FoSCoS. Serving Chandni Chowk, Connaught Place, Okhla FBOs. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/fssai-registration/delhi",
      "serviceType": "FSSAI Registration in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/fssai-registration/delhi",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "100",
          "maxPrice": "7500",
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
          "name": "FSSAI Registration in India: Process, Fees and Types",
          "item": "https://www.patronaccounting.com/fssai-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FSSAI Registration in Delhi",
          "item": "https://www.patronaccounting.com/fssai-registration/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which department handles FSSAI registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Department of Food Safety, Government of NCT of Delhi, headquartered at 8th Floor, Mayur Bhawan, Connaught Place, New Delhi - 110001, oversees all food safety matters in Delhi. The Food Safety Commissioner heads the department. All applications are filed online through the FoSCoS portal (foscos.fssai.gov.in). Patron's Delhi team handles all filings and Designated Officer coordination."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get FSSAI registration online from Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All FSSAI registrations and licences are filed online through the FoSCoS portal (foscos.fssai.gov.in). No physical visit to the Department of Food Safety at Mayur Bhawan is required for filing. However, State and Central Licence applicants may receive a premises inspection by Food Safety Officers. Patron's Delhi office in Rohini handles the entire online process."
          }
        },
        {
          "@type": "Question",
          "name": "How much does FSSAI registration cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FSSAI government fees: Basic Registration Rs 100/year, State Licence Rs 2,000-5,000/year, Central Licence Rs 7,500/year. Patron's professional fee starts from INR 1,999 for Basic, Rs 4,999 for State and Rs 7,999 for Central - covering document preparation, FoSCoS filing, Designated Officer follow-up and certificate issuance. Call +91 945 945 6700 for a quote."
          }
        },
        {
          "@type": "Question",
          "name": "How long does FSSAI registration take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Basic Registration takes approximately 7 working days. State and Central Licences take 30-60 days, depending on Designated Officer review and whether a premises inspection is required. Processing time can extend during peak periods. Patron's accurate documentation and proactive coordination help minimise delays."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need FSSAI for a home kitchen in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Any person manufacturing, processing, packaging, storing, distributing or selling food - including home kitchens, home bakers and tiffin services - must obtain at least FSSAI Basic Registration under the FSS Act, 2006. This applies to home kitchens selling through Instagram, WhatsApp, Zomato or any channel. Basic Registration costs only Rs 100/year in government fees."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for operating without FSSAI in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Operating without FSSAI is a criminal offence under Section 63 of the FSS Act, 2006. Penalties include fines up to Rs 5 lakh and imprisonment up to 6 months. The Department of Food Safety, Delhi can order immediate closure, confiscate food products and initiate prosecution. Delhi's Food Safety Officers actively conduct raids in food markets and restaurants. Quick Answers FSSAI registration kya hai? FSSAI registration ek mandatory food licence hai jo har food business operator ke liye zaroori hai. Delhi mein FoSCoS portal se online filing hoti hai. Basic Registration Rs 100/year se shuru. 14-digit number milta hai jo packaging pe print karna padta hai. Delhi mein FSSAI ke bina kya penalty hai? Bina FSSAI ke food business chalana criminal offence hai. Rs 5 lakh tak fine aur 6 mahine tak imprisonment ho sakti hai. Delhi ke Food Safety Officers regularly raids karte hain. Zomato pe listing ke liye kya chahiye? Zomato aur Swiggy pe Delhi mein listing ke liye valid FSSAI licence number mandatory hai. Platform verify karta hai FSSAI number before activation."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        FSSAI Registration in Delhi: CA-Assisted Food Licence for Restaurants, Cloud Kitchens and Manufacturers
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">13 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business address proof, food safety plan, photos of premises, NOC from owner, business registration proof</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Basic: Rs 100/year (govt) | State: Rs 2,000-5,000/year | Central: Rs 7,500/year | Patron fee from INR 1,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every food business operator in Delhi - restaurants, manufacturers, vendors, home bakers, cloud kitchens, caterers</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Basic Registration: 7 days | State Licence: 30-60 days | Central Licence: 30-60 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Trusted by Delhi FBOs across Chandni Chowk, Connaught Place and Okhla</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Delhi%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FSSAI Registration in Delhi',
                                            'city'     => 'Delhi',
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
    'ctaText'    => 'Get expert CA-assisted FSSAI registration in Delhi with end-to-end support from licence determination to platform listing.',
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
            <a href="#what-section" class="toc-btn">What Is FSSAI</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Registration in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FSSAI Registration in Delhi Services at a Glance</strong></p>
                    <p>FSSAI registration in Delhi is mandatory for every food business operator (FBO) under the Food Safety and Standards Act, 2006. Delhi's food ecosystem - from iconic street food in Chandni Chowk and Karol Bagh to cloud kitchens in Rohini and Dwarka, restaurants in Connaught Place and food manufacturing units in Okhla Industrial Area - requires a valid 14-digit FSSAI registration or licence number. Three types exist: Basic Registration (turnover up to Rs 12 lakh, Rs 100/year), State Licence (Rs 12 lakh to Rs 20 crore, Rs 2,000-5,000/year) and Central Licence (above Rs 20 crore, Rs 7,500/year). Applications are filed online through the FoSCoS portal (foscos.fssai.gov.in). The Department of Food Safety, GNCTD at Mayur Bhawan, Connaught Place oversees enforcement in Delhi.</p>
                </div>
                <p>Delhi's food industry is among the largest and most diverse in India. The city's culinary landscape ranges from legendary street food stalls in Chandni Chowk's Paranthe Wali Gali and Karol Bagh to fine dining restaurants in Connaught Place and Khan Market, cloud kitchens serving through Zomato and Swiggy in Rohini and Dwarka, food manufacturing and packaging units in Okhla Industrial Area, Narela and Bawana, home bakers selling artisan breads and cakes through Instagram and WhatsApp in South Delhi, and catering and tiffin services operating across the NCR. Learn more about <a href="/fssai-registration">FSSAI Registration across India</a>.</p>
                <p>The Department of Food Safety, Government of NCT of Delhi, headquartered at 8th Floor, Mayur Bhawan, Connaught Place, New Delhi - 110001, is responsible for implementing the Food Safety and Standards Act, 2006 across the NCT of Delhi. Every food business operator in Delhi must obtain FSSAI registration or licence through the FoSCoS portal before commencing operations - operating without FSSAI attracts penalties up to Rs 5 lakh and imprisonment up to 6 months under Section 63 of the FSS Act. After obtaining FSSAI, Delhi food businesses also need <a href="/gst-registration">GST Registration</a> if turnover exceeds Rs 40 lakh or if listed on aggregator platforms.</p>
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
                <h2 class="section-title">What Is FSSAI Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>FSSAI registration is the mandatory licensing process for food business operators under the Food Safety and Standards Act, 2006, administered through the Food Safety Compliance System (FoSCoS) portal by the Food Safety and Standards Authority of India (FSSAI).</p>
                    <p>Upon registration, the FBO receives a 14-digit FSSAI registration or licence number that must be prominently displayed on all food packaging, menus, delivery apps and at the business premises. Three categories exist based on business size: Basic Registration (Form A) for FBOs with annual turnover up to Rs 12 lakh, State Licence (Form B) for turnover between Rs 12 lakh and Rs 20 crore, and Central Licence (Form B) for turnover above Rs 20 crore or businesses involved in import/export.</p>
                    <p>For Delhi's food ecosystem - where a Rs 20 chaat vendor in Chandni Chowk operates alongside a Rs 200 crore food manufacturing plant in Okhla Industrial Area - the correct categorisation is critical. Delhi's Department of Food Safety actively enforces FSSAI compliance, with Food Safety Officers conducting market surveillance, taking food samples for laboratory testing and initiating prosecution for substandard, misbranded or unsafe food. The department's office at Mayur Bhawan, Connaught Place serves as the regulatory hub for all food safety matters in the NCT of Delhi.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FSSAI Registration in Delhi:</strong></p>
                    <p><strong>FSSAI:</strong> Food Safety and Standards Authority of India - the apex regulatory body for food safety under the Ministry of Health and Family Welfare.</p>
                    <p><strong>FoSCoS:</strong> Food Safety Compliance System - the official online portal (foscos.fssai.gov.in) for filing FSSAI applications.</p>
                    <p><strong>Form A:</strong> Application form for Basic FSSAI Registration (turnover up to Rs 12 lakh).</p>
                    <p><strong>Form B:</strong> Application form for State Licence and Central Licence.</p>
                    <p><strong>Form C:</strong> FSSAI Registration Certificate issued upon approval with the 14-digit licence number.</p>
                    <p><strong>Designated Officer:</strong> Officer notified by the Food Safety Commissioner to process State Licence applications in Delhi.</p>
                    <p><strong>FBO:</strong> Food Business Operator - any person who carries on a food business.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Registration in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FSS Act 2006</span>
                        <strong>FSSAI 14-Digit Licence</strong>
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
            <h2 class="section-title">Who Needs FSSAI Registration in Delhi?</h2>
            <div class="content-text">
                
                <p><strong>Restaurants and Eating Establishments:</strong> Restaurants, dhabas and eating establishments across Delhi - from iconic establishments in Chandni Chowk and Karol Bagh to casual dining in Connaught Place and Khan Market - must obtain FSSAI State Licence if their annual turnover exceeds Rs 12 lakh. This covers restaurants, fast food chains, cafes, bars serving food, banquet halls with catering and food courts in malls.</p>
                <p><strong>Cloud Kitchens and Delivery-Only Businesses:</strong> Cloud kitchens operating from Rohini, Dwarka, South Delhi and other residential areas need FSSAI registration to list on Zomato, Swiggy, Amazon Food and other delivery platforms. These platforms mandatorily verify the FSSAI licence number before onboarding any Delhi restaurant or cloud kitchen. A separate FSSAI registration is required for each kitchen premises.</p>
                <p><strong>Street Food Vendors:</strong> Street food vendors, hawkers, temporary stall operators in Lajpat Nagar, Sarojini Nagar, ITO and other Delhi markets must obtain FSSAI Basic Registration if their annual turnover is below Rs 12 lakh. This applies to chaat stalls, momos vendors, juice shops, tea stalls and all small-scale food operators.</p>
                <p><strong>Food Manufacturers:</strong> Food manufacturers, processors and packagers in Okhla Industrial Area, Narela Industrial Estate and Bawana require FSSAI State or Central Licence depending on production capacity and turnover. Central Licence is mandatory for manufacturers with production capacity above 2 metric tonnes per day.</p>
                <p><strong>Home Bakers and Tiffin Services:</strong> Home bakers, tiffin service operators and cottage food producers operating from residential premises in Vasant Kunj, Greater Kailash, Rohini and other Delhi localities must obtain at least FSSAI Basic Registration. The growing trend of home-based food businesses selling through Instagram, WhatsApp and food delivery apps makes FSSAI registration essential.</p>
                <p><strong>Food Importers and Exporters:</strong> Food importers and exporters with operations in Delhi require FSSAI Central Licence regardless of turnover. Businesses needing company formation can also explore <a href="/private-limited-company-registration">Private Limited Company Registration</a> through Patron.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in FSSAI Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Licence Type Determination</td><td>Assessment of your Delhi food business's turnover, production capacity, number of premises and food categories to determine whether Basic Registration, State Licence or Central Licence is required.</td></tr>
                        <tr><td>Document Preparation</td><td>Compilation of identity proof, Delhi premises address proof, business registration proof (GST certificate, partnership deed, company incorporation), food product list, layout plan and FSMS plan for State/Central licences.</td></tr>
                        <tr><td>FoSCoS Portal Filing</td><td>Complete application filing on the official FoSCoS portal (foscos.fssai.gov.in). Form A for Basic or Form B for State/Central Licence. Selection of correct Kind of Business, food categories and government fee payment.</td></tr>
                        <tr><td>Designated Officer Coordination</td><td>For State Licences in Delhi, Patron coordinates with the Designated Officer for queries, inspection scheduling and deficiency rectification to ensure timely approval.</td></tr>
                        <tr><td>14-Digit FSSAI Number Issuance</td><td>FSSAI Registration Certificate (Form C) with 14-digit number issued digitally. Certificate must be prominently displayed at Delhi business premises during operating hours.</td></tr>
                        <tr><td>Zomato/Swiggy Platform Onboarding</td><td>Assistance with FSSAI licence number submission for Zomato, Swiggy, Amazon Food and other delivery platforms. Platforms mandatorily verify FSSAI before activating Delhi listings.</td></tr>
                        <tr><td>Post-Registration Compliance</td><td>FSSAI annual return filing, licence renewal (120-30 days before expiry), licence modification for address/product changes, and Food Safety Supervisor training advisory.</td></tr>
                        <tr><td>Integrated GST + Accounting Setup</td><td>GST registration (mandatory for aggregator-listed restaurants), accounting system setup for FSSAI annual return data, and tax compliance from the same CA team. Also see <a href="/gst-registration/delhi">GST Registration in Delhi</a>.</td></tr>

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
            <h2 class="section-title">How FSSAI Registration Works in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end FSSAI registration for Delhi food businesses - from licence type determination through FoSCoS portal filing to Designated Officer approval and platform listing. FSSAI is filed online through the FoSCoS portal. Patron's Delhi office in Rohini handles all filings and coordination.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Determine the Correct FSSAI Licence Type</h3>
        <p class="step-description">Patron's Delhi CA team assesses your food business to determine the correct category. Basic Registration (Form A) for small Delhi FBOs with turnover up to Rs 12 lakh. State Licence (Form B) for medium-sized FBOs with turnover between Rs 12 lakh and Rs 20 crore. Central Licence (Form B) for large FBOs with turnover above Rs 20 crore, importers/exporters and multi-state operations.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Basic/State/Central assessed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Correct category selected</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="40" y="39" font-size="10" fill="#14365F" text-anchor="middle" font-family="Arial">A</text><circle cx="60" cy="35" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><text x="60" y="39" font-size="10" fill="#14365F" text-anchor="middle" font-family="Arial">B</text><circle cx="80" cy="35" r="12" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="80" y="39" font-size="10" fill="#14365F" text-anchor="middle" font-family="Arial">C</text></svg>
            </div>
            <span class="illustration-label">Type Selected</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Prepare Documents and Premises Proof</h3>
        <p class="step-description">All required documents compiled: photo ID, Delhi premises utility bill/rent agreement with NOC, business registration proof, list of food products, food category selection, and for State/Central - layout plan and FSMS plan. For Delhi cloud kitchens in residential areas, the NOC must specifically permit food preparation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Complete document set</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Premises proof ready</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><rect x="70" y="55" width="30" height="25" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><path d="M79 67l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">Docs Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Register on FoSCoS Portal and File Application</h3>
        <p class="step-description">Application filed on the official FoSCoS portal (foscos.fssai.gov.in). Select Delhi as the state, choose applicable option, fill Form A (Basic) or Form B (State/Central) with business details and Kind of Business selection, upload documents and pay government fee through the online payment gateway.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Online FoSCoS filing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Government fee paid</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="30" y="35" width="40" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="30" y="48" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><path d="M60 70L55 80L65 80Z" fill="#10B981"/><rect x="50" y="80" width="20" height="5" rx="2" fill="#10B981" opacity="0.5"/></svg>
            </div>
            <span class="illustration-label">FoSCoS Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Designated Officer Review and Inspection</h3>
        <p class="step-description">For Basic Registration, the Designated Officer has 7 working days. For State Licences, the Designated Officer reviews the application and may schedule premises inspection. Food Safety Officers may visit the Delhi premises to verify hygiene conditions, food storage and FSMS implementation. Patron prepares the premises and accompanies the FBO.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inspection preparation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DO coordination</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><line x1="69" y1="49" x2="85" y2="65" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><rect x="20" y="75" width="80" height="6" rx="3" fill="#E8712C" opacity="0.2"/></svg>
            </div>
            <span class="illustration-label">Under Review</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Receive FSSAI Registration Certificate (Form C)</h3>
        <p class="step-description">FSSAI Registration Certificate (Form C) with 14-digit FSSAI number issued digitally through FoSCoS portal. Certificate specifies licence type, validity period (1-5 years), FBO details, food categories and Delhi premises address. Must be prominently displayed at business premises.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>14-digit number issued</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate downloaded</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M54 30l4 4 8-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="50" width="50" height="8" rx="2" fill="#F5A623" opacity="0.3"/><path d="M55 75L60 68L65 75Z" fill="#F5A623"/><rect x="50" y="75" width="20" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg>
            </div>
            <span class="illustration-label">FSSAI Issued</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Complete Post-Registration Compliance and Platform Listings</h3>
        <p class="step-description">Post-registration, Patron sets up FSSAI annual return filing, licence renewal tracking (120-30 days before expiry; late renewal attracts Rs 100/day penalty), and modification alerts. For Delhi restaurants and cloud kitchens, the FSSAI licence number is submitted to Zomato, Swiggy and other platforms for listing activation. GST and accounting setup handled by same team.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual return setup</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Platform listings activated</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="45" height="35" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><line x1="25" y1="22" x2="50" y2="22" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><rect x="60" y="25" width="45" height="35" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><line x1="70" y1="37" x2="95" y2="37" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><rect x="35" y="55" width="50" height="30" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M55 67l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">Compliance Set</span>
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
            <h2 class="section-title">Documents Required for FSSAI Registration in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Photo ID of FBO/Proprietor/Partners/Directors:</strong> PAN card, Aadhaar card, Passport or Voter ID. Self-attested copy.</li>
                    <li><strong>Business Address Proof (Delhi Premises):</strong> Utility bill (electricity/water, not older than 2 months) of the food business premises in Delhi. Rent agreement and NOC from property owner if rented.</li>
                    <li><strong>Business Registration Proof:</strong> GST registration certificate, partnership deed, LLP agreement, company incorporation certificate or proprietorship declaration - whichever is applicable.</li>
                    <li><strong>Passport-Size Photographs:</strong> Recent photograph of the applicant/proprietor.</li>
                    <li><strong>List of Food Products:</strong> Detailed list of food products to be manufactured, processed, stored, distributed or sold. Food category selection as per FoSCoS portal classification.</li>
                    <li><strong>Layout Plan/Blueprint (State/Central Only):</strong> Floor plan of the food manufacturing/processing unit showing equipment placement, storage areas, water supply, waste disposal and hygiene zones.</li>
                    <li><strong>Food Safety Management System Plan (State/Central Only):</strong> FSMS document covering food safety procedures, quality control measures, hygiene protocols, staff health monitoring and traceability systems.</li>
                    <li><strong>Water Test Report (for Manufacturers):</strong> Potable water test report from a NABL-accredited laboratory for food manufacturing premises in Delhi.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Delhi-specific tip:</strong> For cloud kitchens operating from residential premises in Rohini, Dwarka or South Delhi, the NOC from the building society/RWA must specifically permit commercial food preparation. Some housing societies restrict cloud kitchen operations - verify this before filing your FSSAI application to avoid inspection complications.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in FSSAI Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Basic vs State Licence Confusion</td><td>Cloud kitchens cross Rs 12 lakh turnover quickly, requiring costly upgrade</td><td>Patron advises correct licence type based on realistic turnover projections from the start</td></tr>
                        <tr><td>Street Vendor Non-Compliance</td><td>Delhi Food Safety Officers conduct raids; penalties up to Rs 5 lakh</td><td>Patron helps small vendors complete Basic Registration quickly through FoSCoS</td></tr>
                        <tr><td>Premises Inspection Delays</td><td>State Licence inspection scheduling delays during peak periods</td><td>Patron coordinates with Designated Officer and prepares premises for compliance verification</td></tr>
                        <tr><td>Annual Return Non-Filing</td><td>Complications during licence renewal and Designated Officer scrutiny</td><td>Patron sets up automated reminders and files annual returns for all Delhi FSSAI clients</td></tr>

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
            <h2 class="section-title">FSSAI Registration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Registration (turnover up to Rs 12 lakh)</td><td class="table-amount">Govt: Rs 100/year | Patron: Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>State Licence - Restaurants/Caterers/Retailers</td><td class="table-amount">Govt: Rs 2,000/year | Patron: Rs 4,999</td></tr>
                        <tr><td>State Licence - Manufacturers (101 kg - 2 MT/day)</td><td class="table-amount">Govt: Rs 3,000-5,000/year | Patron: Rs 4,999</td></tr>
                        <tr><td>State Licence - Hotels (3-4 star)</td><td class="table-amount">Govt: Rs 5,000/year | Patron: Rs 4,999</td></tr>
                        <tr><td>Central Licence (turnover above Rs 20 crore)</td><td class="table-amount">Govt: Rs 7,500/year | Patron: Rs 7,999</td></tr>
                        <tr><td>Licence Renewal</td><td class="table-amount">Govt: Same as above | Patron: Rs 1,999 onwards</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FSSAI Registration in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Delhi%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for FSSAI Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Preparation</td><td>Basic: 1-2 days | State: 3-5 days | Central: 5-7 days</td></tr>
                        <tr><td>FoSCoS Portal Filing</td><td>1 day for all types</td></tr>
                        <tr><td>Designated Officer Review</td><td>Basic: 7 days | State/Central: 15-30 days</td></tr>
                        <tr><td>Premises Inspection</td><td>Basic: Not required | State/Central: May be required</td></tr>
                        <tr><td>Certificate Issuance</td><td>Basic: Within 7 days total | State/Central: 30-60 days total</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi Processing Note:</strong> FSSAI registration is filed online through the FoSCoS portal - no visit to the Department of Food Safety at Mayur Bhawan, Connaught Place is required for filing. However, State Licence applicants may receive a premises inspection from Food Safety Officers. Patron's Delhi office in Rohini handles all portal filings, Designated Officer coordination and inspection preparation for food businesses across all Delhi zones.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for FSSAI Registration in Delhi</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <h3>Delhi Office at Rohini</h3>
                <p>In-person consultations for food business operators. Premises inspection preparation, document coordination and Designated Officer follow-up available on-site.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3>Correct Licence Type Determination</h3>
                <p>Our CA team assesses your Delhi food business's turnover, production capacity and food categories to ensure the correct FSSAI licence type. Incorrect categorisation leads to rejection or penalties.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
                <h3>Integrated Food Business Compliance</h3>
                <p>Same CA team handles FSSAI registration, GST registration, accounting setup, TDS filing and income tax returns. Your Delhi food business gets a single compliance partner.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>Zomato/Swiggy Listing Support</h3>
                <p>For Delhi cloud kitchens and restaurants, Patron assists with FSSAI licence verification on delivery platform dashboards. Without valid FSSAI, platforms will not activate your Delhi listing.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves Delhi food businesses with both in-person and online FSSAI registration support. Our Delhi CA team at Rohini has helped hundreds of restaurants, cloud kitchens, manufacturers and home bakers secure their FSSAI licence through the FoSCoS portal.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Basic Registration vs State Licence vs Central Licence for Delhi FBOs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Basic Registration</th><th>State Licence</th><th>Central Licence</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover</td><td>Up to Rs 12 lakh/year</td><td>Rs 12 lakh - Rs 20 crore/year</td><td>Above Rs 20 crore/year</td></tr>
                        <tr><td>Application Form</td><td>Form A</td><td>Form B</td><td>Form B</td></tr>
                        <tr><td>Govt Fee</td><td>Rs 100/year</td><td>Rs 2,000-5,000/year</td><td>Rs 7,500/year</td></tr>
                        <tr><td>Inspection</td><td>Not required</td><td>May be required</td><td>May be required</td></tr>
                        <tr><td>FSMS Plan</td><td>Not required</td><td>Required</td><td>Required</td></tr>
                        <tr><td>Typical Delhi FBO</td><td>Street vendors, tea stalls, home bakers, small retailers</td><td>Restaurants, cloud kitchens, caterers, hotels, medium manufacturers</td><td>Large manufacturers, importers/exporters, multi-state operations</td></tr>
                        <tr><td>Processing Time</td><td>7 days</td><td>30-60 days</td><td>30-60 days</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Food Businesses</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/fssai-registration">FSSAI Registration in India</a> - Parent service covering all FSSAI registration types across India</li>
                    <li><a href="/gst-registration">GST Registration</a> - Mandatory for Delhi food businesses with turnover above Rs 40 lakh or aggregator-listed</li>
                    <li><a href="/shop-act-registration">Shop Act Registration</a> - Shop and establishment registration for Delhi food businesses</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect your Delhi restaurant or food brand name</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing for food business operators across India</li>
                    <li><a href="/fssai-returns">FSSAI Returns</a> - Annual return filing for FSSAI-registered businesses</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for FSSAI Registration</h2>
            <div class="content-text">
                
                <p><strong>Food Safety and Standards Act, 2006:</strong> The primary legislation governing food safety in India. Established FSSAI as the apex regulatory body under the Ministry of Health and Family Welfare. Mandates FSSAI registration/licence for all food business operators.</p>
                <p><strong>FSS (Licensing and Registration) Regulations, 2011:</strong> Prescribes the procedures, forms (A and B), fees and conditions for FSSAI registration and licensing. Defines the three categories: Basic, State and Central.</p>
                <p><strong>Section 31 - Registration/Licence Requirement:</strong> No person shall commence or carry on any food business except under a licence or registration granted under the Act. Every FBO must obtain registration or licence as applicable.</p>
                <p><strong>Section 63 - Penalty for Non-Compliance:</strong> Manufacturing, storing, selling or distributing food without licence/registration is punishable with imprisonment up to 6 months and fine up to Rs 5 lakh.</p>
                <p><strong>Section 59 - Penalty for Substandard Food:</strong> Manufacture, storage, sale or distribution of substandard food attracts penalty up to Rs 5 lakh.</p>
                <p><strong>Section 52 - Penalty for Misbranded Food:</strong> Misbranded food attracts penalty up to Rs 3 lakh.</p>
                <p><strong>Department of Food Safety, GNCTD:</strong> Constituted by notification dated 21-03-2012, headquartered at 8th Floor, Mayur Bhawan, Connaught Place, New Delhi - 110001. Headed by the Food Safety Commissioner for Delhi. Website: <a href="https://foodsafety.delhi.gov.in/" target="_blank" rel="noopener">foodsafety.delhi.gov.in</a>. Toll-free helpline: 1800-11-3921.</p>
                <p><strong>Annual Return:</strong> Every FBO must file an annual return on the FoSCoS portal. Failure to file may affect licence renewal.</p>
                <p><strong>Renewal:</strong> FSSAI licence must be renewed 120-30 days before expiry. Late renewal attracts Rs 100/day penalty. If licence expires, a fresh application is required.</p>

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
                    <h2 class="faq-expanded__title">FAQs - FSSAI Registration in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about FSSAI food licence for Delhi food businesses answered by our CA team</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FSSAI Registration in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which department handles FSSAI registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>The Department of Food Safety, Government of NCT of Delhi, headquartered at 8th Floor, Mayur Bhawan, Connaught Place, New Delhi - 110001, oversees all food safety matters in Delhi. The Food Safety Commissioner heads the department. All applications are filed online through the FoSCoS portal (foscos.fssai.gov.in). Patron's Delhi team handles all filings and Designated Officer coordination.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get FSSAI registration online from Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. All FSSAI registrations and licences are filed online through the FoSCoS portal (foscos.fssai.gov.in). No physical visit to the Department of Food Safety at Mayur Bhawan is required for filing. However, State and Central Licence applicants may receive a premises inspection by Food Safety Officers. Patron's Delhi office in Rohini handles the entire online process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does FSSAI registration cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>FSSAI government fees: Basic Registration Rs 100/year, State Licence Rs 2,000-5,000/year, Central Licence Rs 7,500/year. Patron's professional fee starts from INR 1,999 for Basic, Rs 4,999 for State and Rs 7,999 for Central - covering document preparation, FoSCoS filing, Designated Officer follow-up and certificate issuance. Call +91 945 945 6700 for a quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does FSSAI registration take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Basic Registration takes approximately 7 working days. State and Central Licences take 30-60 days, depending on Designated Officer review and whether a premises inspection is required. Processing time can extend during peak periods. Patron's accurate documentation and proactive coordination help minimise delays.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do I need FSSAI for a home kitchen in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. Any person manufacturing, processing, packaging, storing, distributing or selling food - including home kitchens, home bakers and tiffin services - must obtain at least FSSAI Basic Registration under the FSS Act, 2006. This applies to home kitchens selling through Instagram, WhatsApp, Zomato or any channel. Basic Registration costs only Rs 100/year in government fees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the penalty for operating without FSSAI in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Operating without FSSAI is a criminal offence under Section 63 of the FSS Act, 2006. Penalties include fines up to Rs 5 lakh and imprisonment up to 6 months. The Department of Food Safety, Delhi can order immediate closure, confiscate food products and initiate prosecution. Delhi's Food Safety Officers actively conduct raids in food markets and restaurants.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>FSSAI registration kya hai?</strong> FSSAI registration ek mandatory food licence hai jo har food business operator ke liye zaroori hai. Delhi mein FoSCoS portal se online filing hoti hai. Basic Registration Rs 100/year se shuru. 14-digit number milta hai jo packaging pe print karna padta hai.</p>
                <p><strong>Delhi mein FSSAI ke bina kya penalty hai?</strong> Bina FSSAI ke food business chalana criminal offence hai. Rs 5 lakh tak fine aur 6 mahine tak imprisonment ho sakti hai. Delhi ke Food Safety Officers regularly raids karte hain.</p>
                <p><strong>Zomato pe listing ke liye kya chahiye?</strong> Zomato aur Swiggy pe Delhi mein listing ke liye valid FSSAI licence number mandatory hai. Platform verify karta hai FSSAI number before activation.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Risk Penalties - Register Your Delhi Food Business Now</h2>
            <div class="content-text">
                
                <p>Every day a Delhi food business operates without FSSAI registration is a day of legal exposure under Section 63 of the FSS Act, 2006. Penalties of up to Rs 5 lakh and 6 months imprisonment apply. Delhi's Department of Food Safety conducts regular market surveillance and raids - Food Safety Officers have the power to collect food samples, seal premises and initiate prosecution.</p>
                <p>Additionally, food delivery platforms like Zomato and Swiggy will not activate listings without valid FSSAI. FSSAI licence renewal must be filed 120-30 days before expiry - late renewal attracts Rs 100/day penalty and licence lapse requires a fresh application. <strong>Register now to secure your 14-digit FSSAI number and commence legally compliant food operations in Delhi.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get FSSAI Registration in Delhi - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">FSSAI registration in Delhi is the foundational legal requirement for every food business - from a street vendor in Chandni Chowk to a food manufacturing plant in Okhla Industrial Area. Delhi's active Department of Food Safety at Mayur Bhawan, Connaught Place enforces compliance through regular inspections and raids, making timely registration essential.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Delhi office in Rohini provides end-to-end FSSAI registration services - from licence type determination and document preparation through FoSCoS portal filing and Designated Officer coordination to post-registration compliance including annual returns, licence renewal and delivery platform listing support.</p>
                <p style="color:rgba(255,255,255,0.9);">For Delhi food business operators seeking FSSAI registration, Patron offers a free consultation to determine the correct licence type, estimate fees and provide a transparent timeline for your specific food business category.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Delhi%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Registration%20in%20Delhi%20Services&body=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20in%20Delhi%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FSSAI Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides FSSAI registration services for food businesses in major cities across India. Select your city below.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/fssai-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/fssai-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/fssai-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/fssai-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/fssai-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="/fssai-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="/fssai-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end food business compliance in Delhi</div>
                <div class="pa-cross-grid">
                    <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/shop-act-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Shop Act Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/udyam-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Udyam Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on FSSAI Registration in Delhi is reviewed quarterly by our CA & CS team. Content accuracy is verified against the latest FSSAI regulations, FSS Act amendments and Department of Food Safety Delhi enforcement updates. Freshness Tier 2.</p>
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
