
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Registration in Delhi - Online Process, Fees & GSTIN</title>
    <meta name="description" content="CA-assisted GST registration in Delhi. GSTIN, returns filing and compliance for traders, e-commerce and services. Serving Chandni Chowk, CP, Nehru Place. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-registration/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Registration in Delhi - Online Process, Fees & GSTIN">
    <meta property="og:description" content="CA-assisted GST registration in Delhi. GSTIN, returns filing and compliance for traders, e-commerce and services. Serving Chandni Chowk, CP, Nehru Place. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-registration/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Registration in Delhi - Online Process, Fees & GSTIN">
    <meta name="twitter:description" content="CA-assisted GST registration in Delhi. GSTIN, returns filing and compliance for traders, e-commerce and services. Serving Chandni Chowk, CP, Nehru Place. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Registration in Delhi",
      "description": "CA-assisted GST registration in Delhi. GSTIN, returns filing and compliance for traders, e-commerce and services. Serving Chandni Chowk, CP, Nehru Place. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-registration/delhi",
      "serviceType": "GST Registration in Delhi",
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
        "url": "https://www.patronaccounting.com/gst-registration/delhi",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "20",
          "maxPrice": "1499",
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
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Registration in Delhi",
          "item": "https://www.patronaccounting.com/gst-registration/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the turnover limit for GST registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The threshold for mandatory GST registration in Delhi is Rs 40 lakh aggregate annual turnover for businesses supplying goods and Rs 20 lakh for businesses providing services. However, businesses making interstate supplies, e-commerce sellers, casual taxable persons and several other categories must register regardless of turnover. Delhi businesses can also register voluntarily below the threshold to claim ITC and enhance business credibility."
          }
        },
        {
          "@type": "Question",
          "name": "What is Delhi's GST state code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Delhi's GST state code is 07. Every GSTIN issued to a Delhi business starts with 07 followed by the PAN and other identifiers. The state code determines whether a transaction is intra-state (CGST+Delhi SGST) or interstate (IGST). For Delhi businesses supplying to Haryana (06), UP (09) or any other state, the differing state codes trigger IGST instead of CGST+SGST."
          }
        },
        {
          "@type": "Question",
          "name": "How much does GST registration cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no government fee for GST registration on the gst.gov.in portal. Patron's professional fee for GST registration in Delhi starts from Rs 1,499 covering document preparation, Part A and Part B filing, Aadhaar authentication support, GST officer query response and GSTIN certificate download. The GST + monthly return filing bundle starts from Rs 4,999 per year. Call +91 945 945 6700 for a precise quote."
          }
        },
        {
          "@type": "Question",
          "name": "How long does GST registration take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Normal processing with successful Aadhaar authentication takes 3-7 working days from application submission. If Aadhaar authentication fails, physical verification by the GST officer can extend the timeline to 15-30 working days. GST officer queries (GST REG-03) must be responded to within 7 working days. Patron's accurate documentation and proactive response minimise delays for Delhi applicants."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST registration mandatory for e-commerce sellers in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. E-commerce sellers operating from Delhi must register for GST regardless of turnover. Platforms like Amazon, Flipkart, Meesho and others require a valid GSTIN for seller onboarding. The platform deducts TCS (Tax Collected at Source) at 1% under Section 52 of the CGST Act and deposits it against the seller's GSTIN. Without GST registration, a Delhi e-commerce seller cannot list products on any marketplace."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between CGST, SGST and IGST for Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For intra-Delhi transactions (seller and buyer both in Delhi), GST is split equally into CGST (Central) and Delhi SGST (State). For interstate transactions (Delhi seller to Haryana/UP/other state buyer), IGST applies as a single tax. For example, on a Rs 1,000 supply at 18% GST: intra-Delhi = Rs 90 CGST + Rs 90 Delhi SGST; interstate = Rs 180 IGST. The place of supply rules under the IGST Act determine which applies. Quick Answers GST registration kya hai? GST registration se business ko ek 15-digit GSTIN milta hai jo tax collect karne, ITC claim karne aur legal invoices issue karne ke liye zaroori hai. Delhi ka state code 07 hai - har Delhi GSTIN 07 se shuru hota hai. gst.gov.in pe online hota hai. Koi govt fee nahi. Rs 1,499 se shuru. Delhi mein GST ka threshold kya hai? Goods supply ke liye Rs 40 lakh aur services ke liye Rs 20 lakh. Interstate supply, e-commerce sellers aur casual taxable persons ke liye koi threshold nahi - turnover chahe kitna bhi ho, registration zaroori hai. CGST aur SGST mein kya fark hai? Delhi ke andar sale karo to CGST (Central) + Delhi SGST (State) lagta hai. Delhi se bahar (Haryana, UP etc.) supply karo to IGST lagta hai. Rate same rehta hai, bas tax ka split alag hota hai."
          }
        }
      ]
    }
  ]
}</script>
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
                        GST Registration in Delhi: CA-Assisted GSTIN for Traders, E-Commerce and Service Providers
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business address proof, bank details, constitution documents, photographs, DSC (for companies/LLPs)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> No government fee | Patron professional fee from Rs 1,499</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Rs 40 lakh turnover (goods) / Rs 20 lakh (services) | Mandatory for interstate, e-commerce, casual taxable persons</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3-7 working days (normal processing)</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Registration in Delhi',
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
    'ctaText'    => 'Get expert CA-assisted GST registration and compliance for your Delhi business today.',
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
            <a href="#what-section" class="toc-btn">What Is GST</a>
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
            <h2 class="section-title">GST Registration in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Registration in Delhi Services at a Glance</strong></p>
                    <p>GST registration in Delhi is mandatory for businesses supplying goods with annual turnover exceeding Rs 40 lakh or services exceeding Rs 20 lakh. Interstate suppliers, e-commerce sellers and casual taxable persons must register regardless of turnover. Registration is done online through the GST portal (gst.gov.in) and results in a 15-digit GSTIN starting with 07 (Delhi's state code). Intra-Delhi transactions attract CGST plus Delhi SGST. Interstate transactions (Delhi to Haryana, UP or any other state) attract IGST. The Department of Trade and Taxes, GNCTD at Vyapar Bhawan, IP Estate, New Delhi-110002 administers Delhi SGST. There is no government fee. Processing takes 3-7 working days.</p>
                </div>
                <p>Delhi is India's commercial nerve centre - from the wholesale trading empires of Chandni Chowk, Sadar Bazar and Bhagirath Palace to the IT and services hubs at Nehru Place and Connaught Place, manufacturing corridors in Okhla Industrial Area, Narela and Bawana, thousands of retail businesses across Karol Bagh, Lajpat Nagar and every residential colony, e-commerce operations selling nationally through Amazon, Flipkart and Meesho, and the hospitality clusters in Aerocity. Delhi has the highest number of GST registrations in India, reflecting its position as the country's primary trade and commerce hub. Learn more about <a href="/gst-registration">GST Registration across India</a>.</p>
                <p>GST registration provides every Delhi business with a unique 15-digit GSTIN (Goods and Services Tax Identification Number) starting with 07 - Delhi's state code. This number enables the business to legally collect GST from customers, claim Input Tax Credit (ITC) on purchases, issue tax invoices, file GST returns and participate in interstate trade without restrictions. For intra-Delhi transactions, the business collects CGST (Central GST) plus Delhi SGST (State GST). For interstate transactions - critical for Delhi businesses supplying to Haryana, Uttar Pradesh and the broader NCR corridor - IGST (Integrated GST) applies. The Department of Trade and Taxes (DTT), Government of NCT of Delhi, headquartered at Vyapar Bhawan, IP Estate, New Delhi-110002, administers the Delhi SGST Act. Patron Accounting's Delhi office in Rohini provides end-to-end GST registration and compliance services - from GSTIN application on <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">gst.gov.in</a> through return filing, ITC reconciliation, annual return preparation and GST audit support for businesses across Chandni Chowk, Connaught Place, Nehru Place, Okhla and all Delhi zones.</p>
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
                <h2 class="section-title">What Is GST Registration in Delhi?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST registration is the process of enrolling a business under the Goods and Services Tax regime by obtaining a unique 15-digit GSTIN from the GST portal (gst.gov.in), enabling the business to legally collect and remit GST.</p>
                    <p>GST replaced multiple indirect taxes - VAT, Service Tax, Excise Duty, CST and others - with a single unified tax structure from 1 July 2017. For Delhi businesses, this means a single registration replaces the earlier DVAT (Delhi Value Added Tax) and Service Tax registrations. The GSTIN for Delhi always begins with 07 (the state code), followed by the PAN, entity number and check digit. GST operates through four components: CGST (Central GST collected by the Central Government), Delhi SGST (State GST collected by Delhi Government), IGST (Integrated GST on interstate supplies) and Cess (on specific goods like tobacco and luxury items).</p>
                    <p>For Delhi's diverse business ecosystem - where a Chandni Chowk wholesaler supplies goods across North India (IGST), a Connaught Place restaurant serves Delhi customers (CGST+SGST), an e-commerce seller in Rohini ships nationally via Flipkart (IGST), and a Nehru Place IT services company bills clients in Haryana and UP (IGST) - understanding the correct GST structure is critical for compliance, ITC optimisation and cash flow management. The Department of Trade and Taxes at Vyapar Bhawan handles Delhi SGST matters, while the GST Delhi Zone handles Central GST jurisdiction.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Registration in Delhi:</strong></p>
                    <ul>
                        <li><strong>GSTIN:</strong> 15-digit Goods and Services Tax Identification Number starting with 07 for Delhi</li>
                        <li><strong>CGST:</strong> Central Goods and Services Tax collected by the Central Government on intra-state supplies</li>
                        <li><strong>Delhi SGST:</strong> State GST collected by Delhi Government under Delhi SGST Act 2017</li>
                        <li><strong>IGST:</strong> Integrated GST on interstate supplies (e.g., Delhi to Haryana/UP)</li>
                        <li><strong>ITC:</strong> Input Tax Credit - credit on GST paid on purchases used for business</li>
                        <li><strong>GST REG-01:</strong> Application form for new GST registration filed on gst.gov.in</li>
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
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST-07</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Registration in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Delhi State Code</span>
                        <strong>GSTIN starts with 07</strong>
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
            <h2 class="section-title">Who Needs GST Registration in Delhi?</h2>
            <div class="content-text">
                
                <p>Traders and retailers in Delhi whose aggregate annual turnover from goods supply exceeds Rs 40 lakh must register for GST. This covers thousands of shops across Chandni Chowk, Sadar Bazar, Karol Bagh, Lajpat Nagar and every Delhi market. Wholesalers in Bhagirath Palace and Khari Baoli typically cross this threshold within the first month of operations. For businesses dealing exclusively in services, the threshold is Rs 20 lakh.</p>
                <p>Interstate suppliers must register regardless of turnover. Any Delhi business supplying goods or services to customers in Haryana, Uttar Pradesh or any other state must obtain GST registration from day one. This is particularly relevant for Delhi-NCR businesses with customers across the Gurugram-Noida-Ghaziabad corridor. After GST registration, you may also need <a href="/gst-returns">GST Return Filing</a>.</p>
                <p>E-commerce sellers operating from Delhi must register for GST regardless of turnover. Whether selling on Amazon, Flipkart, Meesho, or any other platform, a GSTIN is mandatory for onboarding. The platform deducts TCS (Tax Collected at Source) under Section 52 of the CGST Act and deposits it against the seller's GSTIN.</p>
                <p>Casual taxable persons making occasional supplies in Delhi (such as exhibition stalls at Pragati Maidan, seasonal traders at trade fairs or temporary business operations) must register before commencing business, regardless of turnover. Non-resident taxable persons supplying goods or services in Delhi also require registration.</p>
                <p>Input Service Distributors (ISDs) - Delhi headquarters of companies distributing ITC to branches across India - must register separately. Businesses required to deduct TDS under GST (government departments, local authorities, PSUs) and those required to collect TCS (e-commerce operators) also need specific GST registrations.</p>
                <p>Voluntary registration is available for Delhi businesses below the threshold. Many small retailers in Connaught Place, freelancers in South Delhi and startups in co-working spaces register voluntarily to claim ITC on purchases, issue tax invoices to B2B customers and enhance business credibility with vendors and banks. If you are starting a new business, consider <a href="/private-limited-company-registration/delhi">Private Limited Company Registration in Delhi</a> alongside GST registration.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in GST Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Registration Type Determination</td><td>Assessment of your Delhi business to determine the correct registration type - Regular, Composition, ISD, TDS/TCS, casual taxable person or non-resident. Patron evaluates turnover, supply type, interstate vs intra-Delhi operations and business structure.</td></tr>
                        <tr><td>GST Portal Application (GST REG-01)</td><td>Complete application filing on gst.gov.in. Part A: PAN verification, mobile and email OTP, TRN generation. Part B: Business details, promoter information, authorised signatory, principal place of business (Delhi address), HSN/SAC codes, bank account, document uploads.</td></tr>
                        <tr><td>Document Preparation</td><td>PAN card, Aadhaar, business address proof (Delhi electricity bill/rent agreement/property tax receipt), bank account details, constitution documents, photographs, DSC for companies/LLPs. All documents formatted to portal requirements.</td></tr>
                        <tr><td>Aadhaar Authentication Support</td><td>Aadhaar OTP verification process assistance. If Aadhaar authentication fails (common issue for Delhi applicants), Patron prepares business premises and documents for the officer's physical verification visit.</td></tr>
                        <tr><td>GST Officer Query Response</td><td>If the GST officer raises queries or issues a Show Cause Notice (SCN) during verification, Patron drafts professional responses with supporting documents within the stipulated timeframe.</td></tr>
                        <tr><td>GSTIN Certificate and Compliance Setup</td><td>GSTIN and GST Registration Certificate (GST REG-06) download. Patron configures the GST compliance calendar: GSTR-1, GSTR-3B, annual GSTR-9, and for composition dealers - CMP-08 and GSTR-4.</td></tr>
                        <tr><td>Post-Registration Compliance Bundle</td><td>Same CA team handles monthly return filing, ITC reconciliation (GSTR-2B matching), e-invoicing setup, e-way bill generation, annual return (GSTR-9/9C) and GST audit. Integrated GST + <a href="/income-tax-return">Income Tax Return</a> + TDS from a single partner.</td></tr>

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
            <h2 class="section-title">How GST Registration Works in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Delhi CA team manages the entire GST registration process - from document compilation to GSTIN issuance and compliance setup. Here is the step-by-step process.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Determine Registration Type and Gather Documents</h3>
                    <p class="step-description">Patron's Delhi CA team assesses your business: Regular registration for most traders, retailers and service providers; Composition scheme for small businesses (turnover up to Rs 1.5 crore for goods, Rs 50 lakh for services); ISD for headquarters distributing ITC; or Casual/Non-Resident for temporary operations. Documents are gathered: PAN, Aadhaar, Delhi business address proof, bank details, constitution documents, photographs and DSC if applicable.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registration type assessment</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Document checklist prepared</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="25" y="15" width="40" height="10" rx="3" fill="#F5A623" opacity="0.3"/>
                                <line x1="25" y1="35" x2="85" y2="35" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                                <line x1="25" y1="45" x2="75" y2="45" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                                <line x1="25" y1="55" x2="65" y2="55" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                                <circle cx="90" cy="65" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                                <path d="M83 65l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Documents Ready</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">File Part A on GST Portal - Generate TRN</h3>
                    <p class="step-description">Patron accesses gst.gov.in > Services > Registration > New Registration. Part A is filed with: state (Delhi/07), district, PAN, email and mobile number. OTPs are sent for verification. Upon successful verification, a Temporary Reference Number (TRN) is generated, valid for 15 days for completing Part B.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN and OTP verification</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TRN generated</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="30" y="20" width="60" height="8" rx="4" fill="#E8712C" opacity="0.2"/>
                                <rect x="30" y="35" width="60" height="8" rx="4" fill="#14365F" opacity="0.1"/>
                                <rect x="30" y="50" width="30" height="10" rx="5" fill="#E8712C" opacity="0.8"/>
                                <path d="M55 78l10-10" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="55" cy="78" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Portal Filing</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Complete Part B - Business Details and Document Upload</h3>
                    <p class="step-description">Using the TRN, Patron completes Part B of GST REG-01 covering: business name and trade name, constitution type, date of commencement, principal place of business (Delhi address with proof), additional places of business, promoter/partner/director details with Aadhaar, authorised signatory, HSN codes for goods and SAC codes for services, bank account details and all document uploads.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Full REG-01 completed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All documents uploaded</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="8" width="50" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="55" y="18" width="50" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="23" y1="22" x2="55" y2="22" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="23" y1="32" x2="50" y2="32" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="63" y1="32" x2="95" y2="32" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="63" y1="42" x2="90" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <path d="M75 60l-8 8 4 4 12-12" stroke="#25D366" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Details Submitted</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Aadhaar Authentication and Application Submission</h3>
                    <p class="step-description">The application requires Aadhaar authentication of the primary authorised signatory. An OTP is sent to the Aadhaar-linked mobile number. Upon successful authentication, the application is submitted with DSC (for companies/LLPs) or EVC (for proprietors/partnerships). An Application Reference Number (ARN) is generated. If Aadhaar authentication fails - a frequent issue for Delhi applicants due to mobile number mismatch - the application is flagged for physical verification.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar OTP verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ARN generated</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <path d="M55 35l3 3 7-7" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <rect x="40" y="52" width="40" height="6" rx="3" fill="#E8712C" opacity="0.6"/>
                                <circle cx="85" cy="70" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                                <path d="M81 70l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Auth Complete</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">GST Officer Verification</h3>
                    <p class="step-description">The application is assigned to a GST officer (State or Central jurisdiction). The officer verifies the application within 3 working days for Aadhaar-authenticated applications. If queries arise, a notice in GST REG-03 is issued requesting clarification within 7 working days. Patron responds with professional documentation. For physical verification cases, the officer visits the Delhi premises to verify address, business existence and document authenticity.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Officer review in 3 days</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Query response support</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="40" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M50 40l6 6 14-14" stroke="#14365F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <line x1="78" y1="58" x2="95" y2="75" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                                <rect x="20" y="75" width="80" height="8" rx="4" fill="#E8712C" opacity="0.15"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Verification Done</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Receive GSTIN and Configure Compliance Systems</h3>
                    <p class="step-description">Upon approval, the 15-digit GSTIN (starting with 07 for Delhi) and the GST Registration Certificate (GST REG-06) are available for download. Patron downloads and verifies the certificate, configures invoicing with correct GSTIN and tax rates, sets up the GST return filing calendar (GSTR-1/3B monthly or QRMP quarterly), configures ITC tracking for purchase reconciliation, and establishes e-invoicing and e-way bill systems if applicable. For Delhi businesses with interstate NCR operations, Patron sets up IGST tracking for Delhi-to-Haryana/UP supplies.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTIN certificate issued</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance calendar set up</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="30" y="20" width="60" height="12" rx="3" fill="#E8712C" opacity="0.2"/>
                                <text x="60" y="30" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">07XXXXXXXXXXXXX</text>
                                <circle cx="60" cy="52" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                                <path d="M56 52l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                                <rect x="35" y="72" width="50" height="10" rx="5" fill="#14365F" opacity="0.1"/>
                            </svg>
                        </div>
                        <span class="illustration-label">GSTIN Issued</span>
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
            <h2 class="section-title">Documents Required for GST Registration in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>PAN Card:</strong> PAN of the business entity (company/LLP/firm) or individual (proprietor). PAN must be active and linked to Aadhaar.</li>
                    <li><strong>Aadhaar Card:</strong> Aadhaar of proprietor, all partners or all directors. Required for Aadhaar authentication during application.</li>
                    <li><strong>Business Address Proof (Delhi):</strong> For owned premises: property tax receipt, municipal khata copy or electricity bill. For rented premises: rent agreement (notarised) plus landlord's electricity bill, property tax receipt or municipal khata copy. Plus NOC or consent letter from the premises owner.</li>
                    <li><strong>Photographs:</strong> Passport-size photographs of the proprietor/partners/directors and the authorised signatory.</li>
                    <li><strong>Bank Account Details:</strong> Cancelled cheque, bank statement first page or passbook first page showing account number, IFSC, account holder name and bank branch.</li>
                    <li><strong>Constitution Documents:</strong> Partnership deed (for partnership firms), MOA/AOA and COI (for companies), LLP agreement and COI (for LLPs), registration certificate (for trusts/societies).</li>
                    <li><strong>Digital Signature Certificate:</strong> Class 2 or Class 3 DSC of the authorised signatory for companies and LLPs. Not required for proprietorships and partnership firms (EVC used).</li>
                    <li><strong>Authorisation Letter / Board Resolution:</strong> Letter of authorisation for the authorised signatory (for partnership firms). Board resolution appointing the authorised signatory (for companies/LLPs).</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Delhi-specific tip:</strong> For Delhi businesses operating from shared office spaces or co-working spaces in Connaught Place, Nehru Place or South Delhi, the NOC from the co-working space provider plus the licence agreement and the co-working space's electricity bill are required. Many Delhi GST applications face queries on address proof from shared spaces - Patron ensures the correct documentation combination to avoid rejection.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in GST Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar Authentication Failures</td><td>Failed Aadhaar OTP triggers physical verification, adding 15-30 days to processing</td><td>Patron advises Delhi applicants to verify Aadhaar-mobile linkage before filing and prepares for physical verification if needed</td></tr>
                        <tr><td>Address Proof for Rented/Shared Premises</td><td>Complex rental arrangements in Chandni Chowk, Karol Bagh and CP without formal lease deeds cause rejection</td><td>Patron prepares the correct address proof package - notarised rent agreement + landlord proof + NOC for Delhi premises</td></tr>
                        <tr><td>GST Officer Show Cause Notices</td><td>Delhi GST officers actively scrutinise applications; failure to respond within 7 working days causes automatic rejection</td><td>Patron drafts professional SCN responses with photographs, address proof and business activity evidence</td></tr>
                        <tr><td>Multiple Registrations for Multiple Premises</td><td>Delhi businesses with warehouse in Okhla + showroom in CP + retail in Rohini need optimal registration structure</td><td>Patron advises on optimal registration structure for multi-premises Delhi operations</td></tr>

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
            <h2 class="section-title">GST Registration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (GST Registration)</td><td>NIL - no government fee for GST registration</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>GST Registration (Regular)</td><td>Rs 1,499 - Rs 2,999 | 3-7 working days</td></tr>
                        <tr><td>GST Registration (Composition)</td><td>Rs 1,499 | 3-7 working days</td></tr>
                        <tr><td>GST Registration + Accounting Bundle</td><td>Rs 4,999/year | Registration + monthly compliance</td></tr>
                        <tr><td>GST Return Filing (Monthly)</td><td>Rs 999/month onwards | GSTR-1 + GSTR-3B</td></tr>
                        <tr><td>GST Annual Return (GSTR-9)</td><td>Rs 2,999 onwards | Before 31 December</td></tr>
                        <tr><td>GST Amendment / Cancellation</td><td>Rs 999 | 7-15 days</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Registration in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for GST Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Compilation</td><td>1-2 days</td></tr>
                        <tr><td>Part A Filing (TRN Generation)</td><td>Same day</td></tr>
                        <tr><td>Part B Filing (Application)</td><td>1 day</td></tr>
                        <tr><td>Aadhaar Authentication</td><td>Same day (failure triggers physical verification)</td></tr>
                        <tr><td>GST Officer Verification</td><td>3 working days (normal) | Up to 30 days if queries/physical verification</td></tr>
                        <tr><td>GSTIN Issuance</td><td>Same day as approval</td></tr>
                        <tr><td>Total (Normal)</td><td>3-7 working days (with successful Aadhaar authentication)</td></tr>
                        <tr><td>Total (Physical Verification)</td><td>15-30 working days (if Aadhaar fails or queries raised)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi Processing Note:</strong> GST registration is filed 100% online through gst.gov.in. No visit to the Department of Trade and Taxes at Vyapar Bhawan is required for filing. However, physical verification may be required if Aadhaar authentication fails. The DTT's GST Facilitation Center at 1st Floor, Vyapar Bhawan, IP Estate can assist with state-level GST queries. Central GST helpline: 18001034786 (24x7). Patron's Delhi office in Rohini handles all portal filings and officer coordination.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for GST Registration in Delhi?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <h3 class="feature-title">Delhi Office at Rohini</h3>
                <p class="feature-text">In-person consultations for traders, retailers, e-commerce sellers and service providers. Document verification, Aadhaar troubleshooting and GST officer coordination available on-site.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Zero-Error Application Filing</h3>
                <p class="feature-text">Patron's qualified CAs validate every field of GST REG-01 before submission. Incorrect HSN/SAC codes, address proof mismatches and PAN-Aadhaar discrepancies are the top rejection reasons in Delhi. Our accuracy rate ensures first-time approval.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
                <h3 class="feature-title">Integrated GST + Accounting + Tax</h3>
                <p class="feature-text">Same CA team handles GST registration, monthly return filing (GSTR-1/3B), ITC reconciliation, annual return (GSTR-9), income tax return (ITR), TDS compliance and accounting. Delhi businesses get a single compliance partner.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3 class="feature-title">Delhi-NCR Interstate Advisory</h3>
                <p class="feature-text">For Delhi businesses supplying to Haryana (Gurugram), UP (Noida, Ghaziabad) and beyond, Patron advises on CGST+SGST vs IGST treatment, place of supply rules, e-way bill requirements and multi-state registration needs.</p>
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
                <blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune</blockquote>
                <blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"We were facing ROC non-compliance notices. Patron sorted everything in 2 weeks." - Director, Delhi</blockquote>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Delhi businesses with both in-person and online GST registration and compliance support.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Other GST Registration Providers in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting (Delhi)</th><th>Typical Providers</th></tr></thead>
                    <tbody>
                        <tr><td>Service Model</td><td>CA-managed with Delhi office + officer coordination</td><td>Automated portals, no professional oversight</td></tr>
                        <tr><td>SCN Response</td><td>Professional response drafted by CA within timeline</td><td>Generic templates or no support</td></tr>
                        <tr><td>Return Filing</td><td>Integrated monthly GSTR-1/3B + annual GSTR-9</td><td>Registration only; filing extra</td></tr>
                        <tr><td>ITC Reconciliation</td><td>GSTR-2B matching + vendor follow-up</td><td>Not included</td></tr>
                        <tr><td>Interstate Advisory</td><td>Delhi-NCR CGST/SGST/IGST place of supply guidance</td><td>Not addressed</td></tr>
                        <tr><td>Pricing</td><td>Rs 1,499 onwards (transparent)</td><td>Rs 399-2,999 + hidden return filing charges</td></tr>

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
                
                <p>GST registration is just the first step in your Delhi business compliance journey. Here are related services that complement your GST registration:</p>
                <ul>
                    <li><a href="/gst-registration">GST Registration in India</a> - National-level GST registration services for businesses across all states</li>
                    <li><a href="/gst-returns">GST Return Filing</a> - Monthly GSTR-1, GSTR-3B and annual GSTR-9 filing services</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Start your business entity with full MCA compliance</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing for individuals and businesses</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect your Delhi brand with trademark registration</li>
                    <li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition and startup compliance support</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for GST in Delhi</h2>
            <div class="content-text">
                
                <p><strong>CGST Act, 2017:</strong> Central Goods and Services Tax Act governing CGST collected by the Central Government on intra-state supplies. Administered by CBIC through GST Delhi Zone.</p>
                <p><strong>Delhi SGST Act, 2017:</strong> Delhi Goods and Services Tax Act governing SGST collected by the Delhi Government on intra-state supplies. Administered by Department of Trade and Taxes, GNCTD at Vyapar Bhawan, IP Estate, New Delhi-110002.</p>
                <p><strong>IGST Act, 2017:</strong> Integrated GST on interstate supplies (e.g., Delhi to Haryana/UP). Also applies on imports. IGST is later apportioned between the Central and destination state governments.</p>
                <p><strong>Threshold Limits:</strong> Rs 40 lakh aggregate turnover for goods suppliers. Rs 20 lakh for service providers. NIL threshold for interstate suppliers, e-commerce sellers, casual taxable persons, non-resident taxable persons, TDS/TCS deductors, ISDs and agents.</p>
                <p><strong>GSTIN Structure:</strong> 15-digit number: first 2 digits = state code (07 for Delhi), next 10 = PAN, 13th = entity number, 14th = Z (default), 15th = check digit. Each Delhi GSTIN begins with 07.</p>
                <p><strong>Returns Framework:</strong> GSTR-1 (outward supplies) - monthly by 11th or quarterly under QRMP. GSTR-3B (summary return + tax payment) - monthly by 20th or quarterly. GSTR-9 (annual return) - by 31 December. GSTR-9C (reconciliation statement) for turnover above Rs 5 crore. CMP-08 + GSTR-4 for composition dealers.</p>
                <p><strong>Input Tax Credit (Section 16):</strong> ITC available on inward supplies used for business purposes. GSTR-2B auto-generated from supplier's GSTR-1 is the basis for ITC claims. Mismatches between GSTR-2B and books require vendor reconciliation - critical for Delhi wholesalers with thousands of purchase invoices.</p>
                <p><strong>Penalties for Non-Registration:</strong> Operating without GST registration when mandatory attracts penalty of Rs 10,000 or 10% of the tax due, whichever is higher. For wilful evasion, penalty is 100% of tax due. Non-filing of returns attracts late fees of Rs 50/day (Rs 20/day for nil returns).</p>
                <p><strong>E-Invoicing:</strong> Mandatory for businesses with turnover above Rs 5 crore. Delhi businesses above this threshold must generate e-invoices through the IRP before issuing invoices. Non-compliance results in invoice invalidity and ITC denial to recipients.</p>

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
                    <h2 class="faq-expanded__title">FAQs - GST Registration in Delhi</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about GST registration in Delhi. Our CA team has compiled answers based on real client queries.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Registration in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the turnover limit for GST registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>The threshold for mandatory GST registration in Delhi is Rs 40 lakh aggregate annual turnover for businesses supplying goods and Rs 20 lakh for businesses providing services. However, businesses making interstate supplies, e-commerce sellers, casual taxable persons and several other categories must register regardless of turnover. Delhi businesses can also register voluntarily below the threshold to claim ITC and enhance business credibility.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Delhi's GST state code?</h3>
                        <div class="faq-expanded__a"><p>Delhi's GST state code is 07. Every GSTIN issued to a Delhi business starts with 07 followed by the PAN and other identifiers. The state code determines whether a transaction is intra-state (CGST+Delhi SGST) or interstate (IGST). For Delhi businesses supplying to Haryana (06), UP (09) or any other state, the differing state codes trigger IGST instead of CGST+SGST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does GST registration cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>There is no government fee for GST registration on the gst.gov.in portal. Patron's professional fee for GST registration in Delhi starts from Rs 1,499 covering document preparation, Part A and Part B filing, Aadhaar authentication support, GST officer query response and GSTIN certificate download. The GST + monthly return filing bundle starts from Rs 4,999 per year. Call +91 945 945 6700 for a precise quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does GST registration take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Normal processing with successful Aadhaar authentication takes 3-7 working days from application submission. If Aadhaar authentication fails, physical verification by the GST officer can extend the timeline to 15-30 working days. GST officer queries (GST REG-03) must be responded to within 7 working days. Patron's accurate documentation and proactive response minimise delays for Delhi applicants.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is GST registration mandatory for e-commerce sellers in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. E-commerce sellers operating from Delhi must register for GST regardless of turnover. Platforms like Amazon, Flipkart, Meesho and others require a valid GSTIN for seller onboarding. The platform deducts TCS (Tax Collected at Source) at 1% under Section 52 of the CGST Act and deposits it against the seller's GSTIN. Without GST registration, a Delhi e-commerce seller cannot list products on any marketplace.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between CGST, SGST and IGST for Delhi?</h3>
                        <div class="faq-expanded__a"><p>For intra-Delhi transactions (seller and buyer both in Delhi), GST is split equally into CGST (Central) and Delhi SGST (State). For interstate transactions (Delhi seller to Haryana/UP/other state buyer), IGST applies as a single tax. For example, on a Rs 1,000 supply at 18% GST: intra-Delhi = Rs 90 CGST + Rs 90 Delhi SGST; interstate = Rs 180 IGST. The place of supply rules under the IGST Act determine which applies.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST registration kya hai?</strong> GST registration se business ko ek 15-digit GSTIN milta hai jo tax collect karne, ITC claim karne aur legal invoices issue karne ke liye zaroori hai. Delhi ka state code 07 hai - har Delhi GSTIN 07 se shuru hota hai. gst.gov.in pe online hota hai. Koi govt fee nahi. Rs 1,499 se shuru.</p>
                <p><strong>Delhi mein GST ka threshold kya hai?</strong> Goods supply ke liye Rs 40 lakh aur services ke liye Rs 20 lakh. Interstate supply, e-commerce sellers aur casual taxable persons ke liye koi threshold nahi - turnover chahe kitna bhi ho, registration zaroori hai.</p>
                <p><strong>CGST aur SGST mein kya fark hai?</strong> Delhi ke andar sale karo to CGST (Central) + Delhi SGST (State) lagta hai. Delhi se bahar (Haryana, UP etc.) supply karo to IGST lagta hai. Rate same rehta hai, bas tax ka split alag hota hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your GST Registration in Delhi</h2>
            <div class="content-text">
                
                <p>Every day a Delhi business operates without GST registration when mandatory is a day of exposure to penalties - Rs 10,000 or 10% of tax due, whichever is higher. For wilful evasion, the penalty is 100% of tax due. Without GSTIN, the business cannot issue tax invoices, losing B2B customers who need ITC. E-commerce platforms will not onboard sellers without GSTIN. Interstate supplies without GSTIN attract tax liability plus interest plus penalty. Banks and financial institutions require GSTIN for business loan applications. Government tenders require GSTIN. Delhi's Department of Trade and Taxes and GST Delhi Zone actively conduct audits and inspections. Register now to secure your 07-prefixed GSTIN and unlock Delhi's massive trade and commerce ecosystem.</p>
                <p><strong>Get your GST registration in Delhi - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your GST Registration in Delhi Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">GST registration in Delhi is the foundational tax compliance requirement for every business - from a small trader in Chandni Chowk to a multinational service provider in Connaught Place, an e-commerce seller in Rohini or a manufacturer in Okhla Industrial Area. Delhi's position as India's primary commercial hub - with the highest number of GST registrations nationally - makes timely registration essential for market access, ITC benefits and legal compliance.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Delhi office in Rohini provides end-to-end CA-assisted GST registration - from registration type determination and zero-error portal application through Aadhaar authentication support and GST officer query response to the complete post-registration compliance bundle of monthly return filing, ITC reconciliation, annual returns and Delhi-NCR interstate tax advisory.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">For Delhi businesses seeking GST registration - whether first-time applicants or those needing amendments, additional registrations or composition scheme migration - Patron offers a free consultation to assess your registration needs and provide a transparent timeline and fee quote.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Registration%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert CA-assisted GST registration services available in all major cities</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/gst-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/gst-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/gst-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/gst-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="/gst-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="/gst-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Delhi</div>
                <div class="pa-block-sub">End-to-end support for GST Registration in Delhi</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/llp-incorporation/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/fssai-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Delhi</div></div></a>
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
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect any changes in GST Council decisions, threshold limits, rate changes and portal updates. GST registration rules are updated periodically by CBIC and the Department of Trade and Taxes, GNCTD. Last review: March 2026. Next review: June 2026.</p>
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
