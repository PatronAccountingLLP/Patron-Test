
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Registration in Mumbai - Online Process, Fees & GSTIN</title>
    <meta name="description" content="CA-assisted GST registration in Mumbai. GSTIN in 7-10 days. ITC, return filing, biometric support. Serving BKC, Andheri, JNPT. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-registration/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Registration in Mumbai - Online Process, Fees & GSTIN">
    <meta property="og:description" content="CA-assisted GST registration in Mumbai. GSTIN in 7-10 days. ITC, return filing, biometric support. Serving BKC, Andheri, JNPT. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-registration/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Registration in Mumbai - Online Process, Fees & GSTIN">
    <meta name="twitter:description" content="CA-assisted GST registration in Mumbai. GSTIN in 7-10 days. ITC, return filing, biometric support. Serving BKC, Andheri, JNPT. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Registration in Mumbai",
      "description": "CA-assisted GST registration in Mumbai. GSTIN in 7-10 days. ITC, return filing, biometric support. Serving BKC, Andheri, JNPT. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-registration/mumbai",
      "serviceType": "GST Registration in Mumbai",
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
        "url": "https://www.patronaccounting.com/gst-registration/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "20",
          "maxPrice": "999",
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
          "name": "GST Registration in Mumbai",
          "item": "https://www.patronaccounting.com/gst-registration/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is GST registration free in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. GST registration is completely free on the government portal (gst.gov.in). There is no government fee for obtaining GSTIN. The only cost is professional service charges if you engage a CA to manage the application. Through Patron, CA-managed GST registration starts from Rs 999 covering application filing, Aadhaar/biometric coordination, document verification, and GSTIN certificate delivery."
          }
        },
        {
          "@type": "Question",
          "name": "What is the GST registration threshold in Maharashtra?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For businesses supplying goods in Maharashtra, GST registration is mandatory when aggregate annual turnover exceeds Rs 40 lakh. For service providers, the threshold is Rs 20 lakh. Maharashtra is a normal category state under GST. However, interstate suppliers, e-commerce sellers, casual taxable persons, and those liable under reverse charge must register regardless of turnover. Mumbai businesses can also register voluntarily below the threshold to claim ITC."
          }
        },
        {
          "@type": "Question",
          "name": "How long does GST registration take in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST registration in Mumbai typically takes 7 to 10 working days from Form REG-01 submission to GSTIN issuance. This includes 1-2 days for document preparation, 1 day for online filing, 1-3 days for Aadhaar authentication or biometric verification at a GST Suvidha Kendra, and 3-7 days for GST officer verification. If the officer issues a REG-03 query, response must be filed within 7 working days."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST mandatory for small businesses in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST is mandatory only if the business exceeds the turnover threshold (Rs 40 lakh for goods, Rs 20 lakh for services in Maharashtra) or falls under compulsory registration categories. Small businesses below the threshold are not required to register but can do so voluntarily to claim ITC, list on e-commerce platforms, and conduct interstate trade."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I don't register for GST in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Operating a business in Mumbai without GST registration when mandatory attracts a penalty of Rs 10,000 or the tax amount due, whichever is higher, under Section 122 of the CGST Act. The business cannot collect GST, claim ITC, issue tax invoices, and is barred from interstate trade and e-commerce platforms. The GST Department can initiate proceedings for tax recovery with interest and penalties."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need GST for selling on Amazon/Flipkart from Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every seller on Amazon, Flipkart, Meesho, and other e-commerce platforms must have a valid GSTIN, regardless of turnover. This is a mandatory requirement under Section 24 of the CGST Act for persons supplying through e-commerce aggregators. Mumbai's large e-commerce seller base at Andheri, Goregaon, and Navi Mumbai must register. Patron helps with registration, HSN classification, and monthly return filing."
          }
        },
        {
          "@type": "Question",
          "name": "Can I use a co-working space address for GST in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but with specific documentation. The rent agreement must be in the business entity's name (not personal). An NOC from the co-working provider is required. The electricity bill name should match the property owner on the NOC. Per CBIC's 2025 place of business verification instruction, the GST officer may physically verify the premises - ensure the business name is visible at the co-working location."
          }
        },
        {
          "@type": "Question",
          "name": "What is the GSTIN format for Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Mumbai GSTIN is a 15-digit number starting with '27' (Maharashtra state code), followed by the 10-digit PAN of the entity, a digit for the number of registrations within the state, 'Z' as a default character, and a check digit. For example: 27AABCT1234E1Z5. The GSTIN is allotted upon registration and must be displayed at the principal place of business and quoted on all tax invoices. Quick Answers GST registration kaise kare Mumbai mein? gst.gov.in par Form REG-01 file karo. Aadhaar OTP/biometric complete karo. 7-10 din mein GSTIN milta hai. Patron handles end-to-end. Mumbai mein GST registration ka kharcha? Govt fee: NIL (free on portal). Patron CA-managed fee: Rs 999 onwards. Returns filing bundle: Rs 9,999/year onwards. Kya chota business ko GST lena zaroori hai? Sirf tab zaroori hai jab turnover Rs 40 lakh (goods) ya Rs 20 lakh (services) se upar ho. Niche wale voluntarily le sakte hain ITC aur e-commerce ke liye."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        GST Registration in Mumbai: CA-Managed GSTIN for Every Business
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, photo, business address proof, bank details, incorporation certificate</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> GST registration is FREE on govt portal. Patron's CA-managed service from Rs 999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Goods turnover > Rs 40 lakh | Services > Rs 20 lakh | Interstate supply | E-commerce | Voluntary</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> GSTIN in 7-10 working days from application submission</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Mumbai's highest GST revenue city</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Registration%20in%20Mumbai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20GST%20Registration%20in%20Mumbai.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Registration%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'GST Registration in Mumbai',
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
    'ctaText'    => 'Patron Accounting has helped 10,000+ businesses with GST registration, return filing, and compliance. Mumbai businesses trust us for end-to-end GST and tax support.',
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Compare</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Registration in Mumbai Services at a Glance</strong></p>
                    <p>GST registration is the process of obtaining a 15-digit GSTIN (Goods and Services Tax Identification Number) under the CGST Act 2017 and MGST Act 2017 for your Mumbai business. It is mandatory for businesses with goods turnover exceeding Rs 40 lakh or services turnover exceeding Rs 20 lakh in Maharashtra, as well as interstate suppliers, e-commerce sellers, and casual taxable persons regardless of turnover. Registration is free on the GST portal (gst.gov.in). Aadhaar authentication with biometric verification at GST Suvidha Kendras in Mumbai is required per the 2025 GSTN advisory. Bank account details must be furnished within 30 days of registration.</p>
                </div>
                <p>Mumbai is India's commercial capital - contributing the highest GST revenue among all cities. From financial services at BKC and Nariman Point to IT and media at Andheri and Powai, wholesale trade at Crawford Market and Masjid Bunder, manufacturing at Andheri MIDC and Thane-Belapur, and international trade through JNPT Nhava Sheva, every business sector in Mumbai depends on GST compliance. Learn more about <a href="/gst-registration">GST Registration services across India</a>.</p>
                <p>A valid GSTIN enables your business to collect GST, claim Input Tax Credit (ITC) on purchases, conduct interstate trade, list on e-commerce platforms like Amazon and Flipkart, and participate in government tenders. Patron Accounting's Marine Lines office provides CA-managed GST registration covering portal filing, Aadhaar biometric coordination, GSTIN procurement, and bundled monthly/quarterly <a href="/gst-returns">GST Return Filing</a> for Mumbai businesses across every sector.</p>
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
                    
                    <p>GST registration is the process of enrolling a business under the Goods and Services Tax regime by filing Form REG-01 on the <a href="https://gst.gov.in/" target="_blank" rel="noopener">GST portal (gst.gov.in)</a> to obtain a unique 15-digit GSTIN. This number is mandatory for collecting GST from customers, claiming Input Tax Credit on business purchases, filing GST returns, and conducting interstate trade.</p>
                    <p>GST replaced multiple indirect taxes (VAT, Service Tax, Excise) with a unified tax structure from 1 July 2017. Under the CGST Act 2017 and the Maharashtra GST (MGST) Act 2017, every business in Mumbai with aggregate turnover exceeding Rs 40 lakh (goods) or Rs 20 lakh (services) must register. Certain categories - interstate suppliers, e-commerce operators, casual taxable persons, non-resident taxable persons, and those liable under reverse charge - must register regardless of turnover. The GSTIN's first two digits denote the state code (27 for Maharashtra), followed by the PAN and other identifiers.</p>
                    <p>For Mumbai businesses, GST registration is not just a compliance checkbox - it is a business enabler. Without GSTIN, a Mumbai trader at Crawford Market cannot issue tax invoices to buyers in other states. An IT company at Powai cannot claim ITC on office rent, software, and equipment. A manufacturer at Andheri MIDC cannot supply to government entities or large corporates that mandate GSTIN. E-commerce sellers on Amazon, Flipkart, and Meesho require GSTIN for onboarding. Exporters at JNPT need GSTIN for claiming refunds on exported goods.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Registration in Mumbai:</strong></p>
                    <p><strong>GSTIN:</strong> 15-digit Goods and Services Tax Identification Number starting with 27 for Maharashtra.</p>
                    <p><strong>Form REG-01:</strong> Application form filed on gst.gov.in for new GST registration.</p>
                    <p><strong>ITC:</strong> Input Tax Credit - credit for GST paid on purchases, set off against output GST liability.</p>
                    <p><strong>CGST/MGST:</strong> Central GST and Maharashtra State GST applicable on intra-state supplies.</p>
                    <p><strong>GST Suvidha Kendra:</strong> Designated centres in Mumbai for Aadhaar biometric verification.</p>
                    <p><strong>HSN/SAC:</strong> Harmonised System Nomenclature (goods) and Services Accounting Code (services) for tax classification.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Registration in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Mumbai Business Hub</span>
                        <strong>GSTIN Registered</strong>
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
            <h2 class="section-title">Who Needs GST Registration in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Businesses Exceeding Turnover Threshold:</strong> Goods suppliers in Mumbai with aggregate annual turnover exceeding Rs 40 lakh and service providers exceeding Rs 20 lakh must register. This covers retail shops, restaurants, consulting firms, IT companies, manufacturers, and professional service providers across Mumbai.</p>
                <p><strong>Interstate Suppliers:</strong> Any Mumbai business making interstate supply of goods or services must register regardless of turnover. A Nariman Point consulting firm billing clients in Delhi needs GSTIN even if turnover is below Rs 20 lakh.</p>
                <p><strong>E-Commerce Sellers and Operators:</strong> Businesses selling through Amazon, Flipkart, Meesho, or any e-commerce aggregator must register under GST irrespective of turnover. Mumbai's large e-commerce seller base across Andheri, Goregaon, and Navi Mumbai is covered.</p>
                <p><strong>Casual and Non-Resident Taxable Persons:</strong> Businesses occasionally supplying goods or services in Mumbai without a fixed place of business need casual taxable person registration.</p>
                <p><strong>Reverse Charge Liable Persons:</strong> Recipients of services from unregistered persons above specified limits and importers of services must register.</p>
                <p><strong>Voluntary Registration:</strong> Mumbai startups and small businesses below the threshold can voluntarily register to claim ITC, enhance business credibility, list on e-commerce platforms, and participate in government tenders. Common among BKC fintech startups and Powai tech companies. After GST, consider <a href="/udyam-registration">Udyam Registration</a> for MSME benefits.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration Services Included by Patron in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Assessment and Classification</td><td>Determine mandatory vs voluntary registration, regular vs composition scheme, and HSN/SAC code classification for your Mumbai business</td></tr>
                        <tr><td>GST Portal Application (Form REG-01)</td><td>Complete filing on <a href="https://gst.gov.in/" target="_blank" rel="noopener">gst.gov.in</a> including business details, principal place of business, promoter details, bank account, and authorised signatory</td></tr>
                        <tr><td>Aadhaar Authentication and Biometric</td><td>Guide through Aadhaar OTP/biometric process per 2025 GSTN advisory. Coordinate GST Suvidha Kendra visits when required</td></tr>
                        <tr><td>Place of Business Verification</td><td>Document preparation per CBIC Instruction 03/2025-GST. Co-working space and virtual office documentation support</td></tr>
                        <tr><td>Bank Account Linking</td><td>Timely furnishing of bank details within 30 days per Nov 2025 GSTN advisory to prevent GSTIN suspension</td></tr>
                        <tr><td>GSTIN Certificate and Compliance Setup</td><td>Certificate delivery, return filing calendar setup (GSTR-1, GSTR-3B), and ITC tracking configuration</td></tr>
                        <tr><td>Bundled Return Filing</td><td>Monthly GSTR-1, GSTR-3B, quarterly QRMP, annual GSTR-9, and ITC reconciliation as ongoing service</td></tr>
                        <tr><td>Company/LLP Registration Integration</td><td>Bundled <a href="/private-limited-company-registration/mumbai">Pvt Ltd Registration in Mumbai</a> or <a href="/llp-incorporation/mumbai">LLP Registration in Mumbai</a> with GST, PAN, TAN, Shop Act, and MSME</td></tr>

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
            <h2 class="section-title">GST Registration Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the end-to-end GST registration process for Mumbai businesses - from eligibility assessment to GSTIN issuance and return filing setup.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Eligibility and Gather Documents</h3><p class="step-description">Patron's CA team assesses whether your Mumbai business triggers mandatory registration (turnover threshold, interstate supply, e-commerce) or benefits from voluntary registration. We gather PAN, Aadhaar, photographs, proof of principal place of business (electricity bill + rent agreement), bank details, and incorporation documents.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Eligibility Check</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Document Prep</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="95" cy="68" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M89 68L93 72L101 64" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">File Form REG-01 on gst.gov.in</h3><p class="step-description">Visit gst.gov.in. Part A collects PAN, email, mobile - OTP verification generates TRN. Part B: business details, trade name, constitution, Mumbai address, additional places, promoter/director details, HSN/SAC codes, bank account, and authorised signatory. Upload documents. Select Maharashtra (code 27).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal Filing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TRN Generation</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="8" rx="4" fill="#E8EDF4"/><rect x="25" y="38" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="60" y="38" width="30" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/></svg></div><span class="illustration-label">REG-01 Filed</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Aadhaar Authentication and Biometric Verification</h3><p class="step-description">After submission, Aadhaar authentication is triggered. OTP-based: sent to Aadhaar-linked mobile. For biometric (per GSTN advisory Feb 2025), visit a designated GST Suvidha Kendra in Mumbai. Patron coordinates the appointment and ensures ARN is generated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Aadhaar OTP</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Suvidha Kendra</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="48" y="30" width="24" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="44" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ID</text><path d="M40 75L50 65L60 75L70 65L80 75" stroke="#10B981" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div><span class="illustration-label">ARN Generated</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">GST Officer Verification</h3><p class="step-description">The GST officer reviews the application. Per CBIC Instruction 03/2025-GST, the officer verifies the principal place of business. May issue SCN via Form REG-03 requesting clarification. Patron responds within prescribed timeline via Form REG-04.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Officer Review</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> REG-03 Response</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="82" y1="67" x2="100" y2="85" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><path d="M50 45L55 50L70 35" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">GSTIN Issuance</h3><p class="step-description">Upon successful verification, the GST officer approves via Form REG-06 and issues the GSTIN. The 15-digit GSTIN starting with '27' (Maharashtra) is generated on gst.gov.in. Patron downloads the certificate and delivers it. GSTIN must be displayed at the business premises.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTIN Certificate</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> REG-06 Approval</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/><rect x="35" y="75" width="50" height="8" rx="4" fill="#F5A623" opacity="0.6"/></svg></div><span class="illustration-label">GSTIN Issued</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Link Bank Account and Set Up Return Filing</h3><p class="step-description">Within 30 days of registration (GSTN advisory Nov 2025), furnish bank account details on the GST portal. Patron links the account and sets up the return filing schedule: GSTR-1, GSTR-3B monthly/quarterly, GSTR-9 annual. For exporters at JNPT, we configure LUT for zero-rated supplies. ITC reconciliation from first filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank Linking</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Return Calendar</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="22" y="47" width="31" height="6" rx="2" fill="#14365F" opacity="0.2"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliance Ready</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Registration in Mumbai</h2>
            <div class="content-text">
                
                <ul><li>PAN card of the business entity (or individual for proprietorship)</li><li>Aadhaar card of all promoters/partners/directors (mandatory for authentication)</li><li>Passport-size photograph of the authorised signatory and all promoters/partners/directors</li><li>Proof of principal place of business in Mumbai - Electricity bill (not older than 2 months) + Rent agreement or Property tax receipt or Ownership deed</li><li>NOC from property owner (if rented/leased premises)</li><li>Bank account details - Cancelled cheque or first page of bank passbook (can be linked within 30 days post-registration)</li><li>Incorporation certificate (for Pvt Ltd/LLP/Section 8) or Partnership deed or Proprietorship declaration</li><li>Board Resolution appointing authorised signatory (for companies/LLPs)</li><li>Digital Signature Certificate (for companies/LLPs filing through DSC)</li><li>HSN/SAC codes for products and services to be supplied</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Mumbai-specific tip:</strong> For businesses operating from co-working spaces, the rent agreement must be in the business entity's name (not the individual's). Virtual office addresses require a valid lease and NOC. The electricity bill name should match the property owner on the NOC. Per CBIC's 2025 verification instruction, the GST officer may physically verify the Mumbai premises - ensure signage and business presence are visible.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Registration Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar Biometric Delays</td><td>Long queues and limited appointments at GST Suvidha Kendras in Mumbai per 2025 GSTN advisory</td><td>Patron coordinates appointment and ensures all documents are carried for first-time clearance</td></tr>
                        <tr><td>Place of Business Rejection</td><td>Enhanced scrutiny for co-working, shared offices, virtual addresses. Mismatched names trigger REG-03</td><td>Verification-ready document set with matching names across rent agreement, electricity bill, and NOC</td></tr>
                        <tr><td>Bank Account Suspension</td><td>30-day deadline per Nov 2025 GSTN advisory. Startups delaying bank opening risk GSTIN suspension</td><td>Track the 30-day deadline and link bank account promptly on GST portal</td></tr>
                        <tr><td>Multi-Location GSTIN Structure</td><td>Businesses with premises in Mumbai and other states need separate GSTINs per state</td><td>Patron advises on optimal GSTIN structure for multi-location Mumbai businesses</td></tr>
                        <tr><td>HSN/SAC Misclassification</td><td>Incorrect codes lead to wrong tax rates, ITC mismatches, and scrutiny notices</td><td>CA team classifies each product/service against the latest GST tariff schedule</td></tr>

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
            <h2 class="section-title">GST Registration Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee for GST Registration</td><td>NIL - Completely FREE on gst.gov.in</td></tr>
                        <tr><td>Patron Accounting Professional Fees (GST Registration)</td><td>Starting from INR 999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>GST + Monthly Return Filing (Annual Bundle)</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>GST + Company/LLP Registration Bundle</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>GST Registration + MSME + Shop Act</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>GST Amendment / Additional GSTIN</td><td>Starting from INR 999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Registration in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Registration%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration Timeline in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Collection + Review</td><td>1-2 days</td></tr>
                        <tr><td>Form REG-01 Filing</td><td>1 day</td></tr>
                        <tr><td>Aadhaar OTP / Biometric Verification</td><td>1-3 days</td></tr>
                        <tr><td>GST Officer Verification</td><td>3-7 days</td></tr>
                        <tr><td>GSTIN Issuance</td><td>Same day post-approval</td></tr>
                        <tr><td><strong>Total Estimated Timeline</strong></td><td><strong>7-10 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Bank account details must be furnished within 30 days of registration per the November 2025 GSTN advisory. Failure results in GSTIN suspension. Patron tracks the deadline and links your bank account promptly.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Registration in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Mumbai Office Serving All Business Zones</h3><p class="feature-desc">Marine Lines office serves startups at BKC and Powai, traders at Crawford Market, IT firms at Andheri, manufacturers at MIDC, and exporters at JNPT. Walk-in consultations available.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">CA-Managed with ITC Optimisation</h3><p class="feature-desc">Correct HSN/SAC classification, ITC-ready return filing from day one, and regular vs composition scheme advisory. Saves lakhs in misclassified tax over the years.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">2025-26 Compliance Current</h3><p class="feature-desc">Updated on all GSTN advisories - biometric verification mandate, bank account 30-day rule, CBIC place of business verification instruction, and return filing deadline changes.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Integrated Startup Package</h3><p class="feature-desc">Bundles Pvt Ltd / LLP registration + GST + PAN + TAN + MSME + Shop Act + bank account opening as a single Mumbai startup compliance package. One CA, one invoice.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune</p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Regular vs Composition Scheme for Mumbai Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Regular Scheme</th><th>Composition Scheme</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover Limit</td><td>No upper limit</td><td>Rs 1.5 crore (goods) / Rs 50 lakh (services)</td></tr>
                        <tr><td>ITC</td><td>Full Input Tax Credit available</td><td>No ITC available</td></tr>
                        <tr><td>Tax Rate</td><td>Standard rates (5%, 12%, 18%, 28%)</td><td>1% (manufacturers), 5% (restaurants), 6% (services)</td></tr>
                        <tr><td>Returns</td><td>GSTR-1 + GSTR-3B monthly/quarterly</td><td>CMP-08 quarterly + GSTR-4 annually</td></tr>
                        <tr><td>Interstate Supply</td><td>Allowed</td><td>Not allowed</td></tr>
                        <tr><td>Best For Mumbai</td><td>IT firms (BKC/Powai), exporters (JNPT), manufacturers (MIDC), consultants (Nariman Point)</td><td>Small retail shops, local restaurants, neighbourhood traders</td></tr>

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
                
                <p>Patron offers a comprehensive range of registration and compliance services for Mumbai businesses:</p><ul>
                    <li><a href="/gst-registration">GST Registration in India</a> - National GST registration services across all states</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Incorporate your business before GST registration</li>
                    <li><a href="/llp-incorporation">LLP Registration</a> - Flexible business structure with GST bundled</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect your brand alongside business registration</li>
                    <li><a href="/iec-registration">Import Export Code (IEC)</a> - For Mumbai exporters and importers at JNPT</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Full-service accounting for GST-registered businesses</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for GST Registration in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>Central Goods and Services Tax (CGST) Act, 2017 - Section 22 (mandatory registration), Section 24 (compulsory regardless of threshold), Section 25 (procedure)</li>
                    <li>Maharashtra Goods and Services Tax (MGST) Act, 2017 - mirrors CGST for state GST</li>
                    <li>Integrated Goods and Services Tax (IGST) Act, 2017 - interstate supply</li>
                    <li>GSTN Advisory Nov 2025: Bank account within 30 days or before GSTR-1/IFF filing</li>
                    <li>GSTN Advisory Feb 2025: Aadhaar authentication and biometric verification</li>
                    <li>CBIC Instruction 03/2025-GST: Place of business verification</li></ul>
                <p><strong>Key Portals:</strong></p><ul>
                    <li><a href="https://gst.gov.in/" target="_blank" rel="noopener">GST Portal</a> - gst.gov.in (registration, returns, ITC, e-way bills)</li>
                    <li><a href="https://mahagst.gov.in/" target="_blank" rel="noopener">Maharashtra GST</a> - mahagst.gov.in</li>
                    <li><a href="https://cbic.gov.in/" target="_blank" rel="noopener">CBIC</a> - cbic.gov.in (circulars, instructions, notifications)</li></ul>
                <p><strong>Penalties:</strong></p><ul>
                    <li>Operating without mandatory GST registration: Penalty of Rs 10,000 or tax due, whichever is higher (Section 122)</li>
                    <li>Late filing of returns: Rs 50/day (Rs 20/day for nil returns) per return</li>
                    <li>Non-furnishing bank account within 30 days: GSTIN suspension</li>
                    <li>Fraudulent registration: Cancellation + penalty up to 100% of tax due</li></ul>

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
                    <h2 class="faq-expanded__title">FAQs - GST Registration in Mumbai</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about GST registration in Mumbai under CGST and MGST Acts.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Registration in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is GST registration free in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes. GST registration is completely free on the government portal (gst.gov.in). There is no government fee for obtaining GSTIN. The only cost is professional service charges if you engage a CA to manage the application. Through Patron, CA-managed GST registration starts from Rs 999 covering application filing, Aadhaar/biometric coordination, document verification, and GSTIN certificate delivery.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the GST registration threshold in Maharashtra?</h3>
                        <div class="faq-expanded__a"><p>For businesses supplying goods in Maharashtra, GST registration is mandatory when aggregate annual turnover exceeds Rs 40 lakh. For service providers, the threshold is Rs 20 lakh. Maharashtra is a normal category state under GST. However, interstate suppliers, e-commerce sellers, casual taxable persons, and those liable under reverse charge must register regardless of turnover. Mumbai businesses can also register voluntarily below the threshold to claim ITC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does GST registration take in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>GST registration in Mumbai typically takes 7 to 10 working days from Form REG-01 submission to GSTIN issuance. This includes 1-2 days for document preparation, 1 day for online filing, 1-3 days for Aadhaar authentication or biometric verification at a GST Suvidha Kendra, and 3-7 days for GST officer verification. If the officer issues a REG-03 query, response must be filed within 7 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is GST mandatory for small businesses in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>GST is mandatory only if the business exceeds the turnover threshold (Rs 40 lakh for goods, Rs 20 lakh for services in Maharashtra) or falls under compulsory registration categories. Small businesses below the threshold are not required to register but can do so voluntarily to claim ITC, list on e-commerce platforms, and conduct interstate trade.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if I don't register for GST in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Operating a business in Mumbai without GST registration when mandatory attracts a penalty of Rs 10,000 or the tax amount due, whichever is higher, under Section 122 of the CGST Act. The business cannot collect GST, claim ITC, issue tax invoices, and is barred from interstate trade and e-commerce platforms. The GST Department can initiate proceedings for tax recovery with interest and penalties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need GST for selling on Amazon/Flipkart from Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every seller on Amazon, Flipkart, Meesho, and other e-commerce platforms must have a valid GSTIN, regardless of turnover. This is a mandatory requirement under Section 24 of the CGST Act for persons supplying through e-commerce aggregators. Mumbai's large e-commerce seller base at Andheri, Goregaon, and Navi Mumbai must register. Patron helps with registration, HSN classification, and monthly return filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I use a co-working space address for GST in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes, but with specific documentation. The rent agreement must be in the business entity's name (not personal). An NOC from the co-working provider is required. The electricity bill name should match the property owner on the NOC. Per CBIC's 2025 place of business verification instruction, the GST officer may physically verify the premises - ensure the business name is visible at the co-working location.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the GSTIN format for Mumbai?</h3>
                        <div class="faq-expanded__a"><p>A Mumbai GSTIN is a 15-digit number starting with '27' (Maharashtra state code), followed by the 10-digit PAN of the entity, a digit for the number of registrations within the state, 'Z' as a default character, and a check digit. For example: 27AABCT1234E1Z5. The GSTIN is allotted upon registration and must be displayed at the principal place of business and quoted on all tax invoices.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST registration kaise kare Mumbai mein?</strong> gst.gov.in par Form REG-01 file karo. Aadhaar OTP/biometric complete karo. 7-10 din mein GSTIN milta hai. Patron handles end-to-end.</p>
                <p><strong>Mumbai mein GST registration ka kharcha?</strong> Govt fee: NIL (free on portal). Patron CA-managed fee: Rs 999 onwards. Returns filing bundle: Rs 9,999/year onwards.</p>
                <p><strong>Kya chota business ko GST lena zaroori hai?</strong> Sirf tab zaroori hai jab turnover Rs 40 lakh (goods) ya Rs 20 lakh (services) se upar ho. Niche wale voluntarily le sakte hain ITC aur e-commerce ke liye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your GST Registration in Mumbai</h2>
            <div class="content-text">
                
                <p>Operating a business in Mumbai without GST registration when mandatory attracts a penalty of Rs 10,000 or the tax amount due. Without GSTIN, your business cannot issue tax invoices, claim Input Tax Credit, make interstate supplies, or list on e-commerce platforms. The 2025 GSTN advisory mandates bank account linking within 30 days - delayed linkage results in GSTIN suspension. Every month without GSTIN is a month of lost ITC, rejected purchase orders from GST-compliant buyers, and e-commerce delisting risk.</p>
                <p><strong>Register now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Registration%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your GST Registration in Mumbai with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">GST registration in Mumbai is the foundational tax compliance for every business in India's commercial capital - from startups at BKC and Powai to wholesalers at Crawford Market, manufacturers at Andheri MIDC, IT firms across the western suburbs, and exporters at JNPT. The CGST Act 2017 and MGST Act 2017 mandate registration for businesses exceeding the turnover threshold, while e-commerce sellers, interstate suppliers, and other specified categories must register regardless of turnover.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Mumbai office at Marine Lines provides CA-managed GST registration covering Form REG-01 filing, Aadhaar biometric coordination, place of business verification readiness, bank account linking, and integrated return filing setup. With 15+ years of CA practice, 10,000+ businesses served, and deep expertise in the GST Commissionerate Mumbai zones, Patron delivers GST registration that is accurate, current with 2025-26 GSTN advisories, and optimised for ITC from day one.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Registration%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Registration%20in%20Mumbai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20Registration%20in%20Mumbai%20services.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides GST registration services in 8 major cities. Select your city below.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
                        <a href="/gst-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                        <a href="/gst-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                        <a href="/gst-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        <a href="/gst-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                        <a href="/gst-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                        <a href="/gst-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                        <a href="/gst-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                    </div></div>
                <div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for GST Registration in Mumbai</div><div class="pa-cross-grid">
                        <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/llp-incorporation/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/startup-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/fssai-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/iec-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Import Export Code (IEC)</div><div class="pa-card-sub">Mumbai</div></div></a>
                    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually (Freshness Tier 1) to incorporate GST Council updates, GSTN advisory changes, portal updates, biometric/Aadhaar requirement changes, and threshold revisions. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
