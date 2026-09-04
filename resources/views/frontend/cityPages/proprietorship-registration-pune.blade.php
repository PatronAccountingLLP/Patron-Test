
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
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>Proprietorship Registration in Pune - GST, MSME & Docs</title>
    <meta name="description" content="Register your proprietorship in Pune. Gumasta licence, MSME Udyam, GST, PAN, PT, and bank account opening. CA-assisted. Freelancers to retailers, Hinjewadi to Market Yard. Start from Rs 2,999. Call +91 945 945 6700.">
    <link rel="canonical" href="/proprietorship-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Proprietorship Registration in Pune - GST, MSME & Docs">
    <meta property="og:description" content="Register your proprietorship in Pune. Gumasta licence, MSME Udyam, GST, PAN, PT, and bank account opening. CA-assisted. Freelancers to retailers, Hinjewadi to Market Yard. Start from Rs 2,999. Call +91 945 945 6700.">
    <meta property="og:url" content="/proprietorship-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Proprietorship Registration in Pune - GST, MSME & Docs">
    <meta name="twitter:description" content="Register your proprietorship in Pune. Gumasta licence, MSME Udyam, GST, PAN, PT, and bank account opening. CA-assisted. Freelancers to retailers, Hinjewadi to Market Yard. Start from Rs 2,999. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Proprietorship Registration in Pune",
      "description": "Register your proprietorship in Pune. Gumasta licence, MSME Udyam, GST, PAN, PT, and bank account opening. CA-assisted. Freelancers to retailers, Hinjewadi to Market Yard. Start from Rs 2,999. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/proprietorship-registration/pune",
      "serviceType": "Proprietorship Registration in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
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
        "url": "https://www.patronaccounting.com/proprietorship-registration/pune",
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
          "name": "Proprietorship Registration: Process & Documents",
          "item": "https://www.patronaccounting.com/proprietorship-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Proprietorship Registration in Pune",
          "item": "https://www.patronaccounting.com/proprietorship-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles proprietorship registration in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No single office - it involves multiple registrations. Gumasta licence from Pune Municipal Corporation (PMC). MSME Udyam from the Udyam portal (Ministry of MSME). GST from the GST portal. Professional Tax from the GRAS portal (Maharashtra). Patron's Pune office at Wagholi coordinates all registrations under one engagement."
          }
        },
        {
          "@type": "Question",
          "name": "Can I register a proprietorship online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All required registrations are available online. Gumasta through PMC portal. MSME Udyam through udyamregistration.gov.in. GST through the GST portal. PT through GRAS portal. No physical visit to any government office is required. Walk-in at Patron's Wagholi office for document verification."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of proprietorship registration in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's bundled registration starts from Rs 2,999 for Gumasta + MSME + Professional Tax. Adding GST costs Rs 1,999-3,499. Full bundle (Gumasta + MSME + GST + PT) ranges Rs 4,999-8,999. Government fees minimal - Udyam is free, GST is free, Gumasta fees vary, PTEC Rs 2,500/year."
          }
        },
        {
          "@type": "Question",
          "name": "How long does proprietorship registration take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "7-10 working days for complete bundle. MSME Udyam is often instant. Gumasta takes 3-7 working days. GST takes 3-7 working days. PT takes 2-5 working days. Multiple registrations filed simultaneously. Bank current account adds 3-5 days after registrations."
          }
        },
        {
          "@type": "Question",
          "name": "Is proprietorship registration mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No single mandatory incorporation. However, Gumasta is mandatory for physical establishments under Maharashtra Shops Act (penalty Rs 50,000). GST is mandatory above turnover threshold or for e-commerce sellers. PT is mandatory in Maharashtra. MSME is voluntary but recommended. At least 2 registrations needed for bank account."
          }
        },
        {
          "@type": "Question",
          "name": "Can a proprietorship get GST registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Proprietorship can register for GST if turnover exceeds Rs 40 lakh (goods) or Rs 20 lakh (services). For Pune proprietors selling on e-commerce platforms (Amazon, Flipkart, Meesho), GST is mandatory regardless of turnover. Registered under proprietor's personal PAN."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between proprietorship and private limited?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Proprietorship has no separate legal entity - owner and business are the same. Unlimited liability. Personal PAN. Minimal compliance. Private limited company is a separate legal entity with limited liability, separate PAN, and higher compliance requirements. Proprietorship ideal for small businesses; Pvt Ltd for scalable ventures."
          }
        },
        {
          "@type": "Question",
          "name": "How to open a bank account for a proprietorship in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "RBI mandates minimum 2 forms of business registration (any combination of GST, MSME Udyam, Gumasta, or PT certificate) along with proprietor's PAN, Aadhaar, and cancelled cheque from personal account. Patron ensures you have the required 2+ registrations before approaching the bank. Quick Answers Pune mein proprietorship register karne mein kitna kharcha aata hai? Rs 2,999 se start hota hai Gumasta + MSME + PT ke liye. GST add karein toh Rs 4,999-8,999. Udyam free hai, GST free hai. Kya proprietorship ke liye alag PAN lena padta hai? Nahi. Aapka personal PAN hi business PAN hai. Alag se company PAN nahi banta. Bank account kholne ke liye kya chahiye? RBI ke rule ke hisaab se minimum 2 business registrations chahiye - jaise GST + MSME ya Gumasta + GST."
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
                        Proprietorship Registration in Pune: Gumasta, MSME, GST, and Bank Account Setup
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">18 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN card, Aadhaar card, passport-size photograph, address proof, business premises proof, NOC from landlord, electricity bill</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 2,999 for bundled registration (Gumasta + MSME Udyam + Professional Tax)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any Indian citizen aged 18+ with valid PAN and Aadhaar. One person, one business. Proprietor and business are same entity.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-10 working days for complete registration bundle (Gumasta + MSME + GST + PT + bank account)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - Call +91 945 945 6700</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Proprietorship Registration in Pune',
                                            'city'     => 'Pune',
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
    'ctaText'    => 'Get CA-assisted proprietorship registration with Gumasta, MSME Udyam, GST, and bank account setup from Patron\'s Pune office.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Choose Us</a><a href="#comparison-section" class="toc-btn">Prop vs Pvt Ltd vs LLP</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Proprietorship Registration in Pune</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Proprietorship Registration in Pune Services at a Glance</strong></p>
                    <p>Proprietorship (sole proprietorship) is the simplest business structure in India - owned, managed, and controlled by one person. No specific law governs its formation. Legal identity is established through a combination of registrations: Gumasta licence (Maharashtra Shop Act), MSME Udyam certificate, GST registration, and PAN. A current bank account requires at least 2 forms of registration per RBI norms.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Framework</td><td>Maharashtra Shops &amp; Est Act 2017 (Gumasta), MSME Dev Act 2006 (Udyam), GST Act, Income Tax Act, Maharashtra PT Act</td></tr><tr><td>Applicable To</td><td>Freelancers, retailers, food vendors, home-based businesses, tuition operators, salon owners, kirana stores in Pune</td></tr><tr><td>Timeline</td><td>7-10 working days for bundled registrations</td></tr><tr><td>Cost Starting From</td><td>Rs 2,999 (Gumasta + MSME + PT). GST additional. Govt fees minimal</td></tr><tr><td>Key Registrations</td><td>Gumasta (PMC), MSME Udyam, GST (if threshold), Professional Tax (GRAS), PAN (personal)</td></tr><tr><td>Bank Account</td><td>RBI requires minimum 2 business registrations for current account</td></tr><tr><td>Jurisdictional Office</td><td>PMC (Gumasta), Udyam portal, GST Commissionerate Pune, GRAS (PT)</td></tr></tbody></table></div></p>
                </div>
                <p>Pune is home to lakhs of sole proprietorship businesses - from kirana stores in Kothrud and vegetable vendors near Mandai to freelance software developers in Hinjewadi and home-based bakers in Baner. The peth trading districts house thousands of single-owner retail shops. APMC Market Yard has individual traders operating as proprietors. Salons, tuition classes, photography studios, and auto repair workshops across Pune operate as proprietorships. Learn more about <a href="/proprietorship-registration">Proprietorship Registration across India</a>.</p>
                <p>Despite being the most common business structure, most Pune proprietors operate informally without proper registrations. Without Gumasta, the shop risks PMC inspection penalties (Rs 50,000). Without MSME Udyam, government scheme benefits are missed. Without GST (when above threshold), retrospective tax liability with interest. Without a current bank account, personal and business finances are mixed. Patron's Pune office bundles all essential registrations into a single engagement within 7-10 working days.</p>
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
                    
                    <p>Proprietorship registration is the process of establishing the legal identity of a sole proprietorship business through a combination of statutory registrations - Gumasta licence, MSME Udyam certificate, GST registration, and Professional Tax registration - since no single law governs sole proprietorship formation in India.</p><p>A sole proprietorship is a business owned, managed, and controlled by one person. There is no legal distinction between owner and business. The proprietor's personal PAN serves as business PAN, and the proprietor is personally liable for all business debts. No incorporation is required with MCA or any central authority.</p><p>In Maharashtra, the key registrations are: Gumasta licence from PMC for physical locations; MSME Udyam from udyamregistration.gov.in; GST if turnover exceeds Rs 40 lakh (goods) or Rs 20 lakh (services); Professional Tax on GRAS portal; and a current bank account with at least 2 registrations per RBI norms.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Proprietorship Registration in Pune:</strong></p>
                    <ul><li><strong>Gumasta Licence:</strong> Maharashtra Shops and Establishments Act registration from PMC. Mandatory for all physical business locations in Pune</li><li><strong>MSME Udyam:</strong> Free registration on udyamregistration.gov.in enabling priority lending, scheme benefits, and tender participation</li><li><strong>RBI 2-Registration Norm:</strong> Banks require minimum 2 business registrations to open a current account for proprietorships</li><li><strong>ITR-4 Presumptive:</strong> Income tax return for proprietors with turnover up to Rs 3 crore declaring 8%/6% deemed profit under Section 44AD</li><li><strong>PTEC:</strong> Professional Tax Enrolment Certificate at Rs 2,500/year mandatory for all Maharashtra proprietors</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Proprietorship Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Gumasta + MSME + GST + Bank</span>
                        <strong>Proprietorship Bundle</strong>
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
            <h2 class="section-title">Who Needs Proprietorship Registration in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Local Retailers:</strong> Kirana stores in Kothrud, electronics shops in Hong Kong Lane, hardware in Nana Peth, cloth merchants in Tulshibaug. Need Gumasta + GST. Related: <a href="/gst-registration">GST Registration</a>.</p><p><strong>Food and Beverage:</strong> Street food vendors near FC Road, tiffin services in Hinjewadi, restaurants, bakeries, caterers. Need Gumasta + FSSAI + GST.</p><p><strong>Freelancers and Professionals:</strong> Software developers in Hinjewadi, content writers, digital marketers, tutors, photographers, CA sole practitioners. Need GST (if applicable) + MSME + PT. Related: <a href="#">Income Tax Filing in Pune</a>.</p><p><strong>Home-Based Businesses:</strong> Bakers in Baner, handcraft sellers on Etsy/Amazon, yoga instructors. Need MSME + GST (mandatory for e-commerce regardless of turnover). For scaling, consider <a href="#">Company Registration in Pune</a> or <a href="#">LLP Registration in Pune</a>.</p><p><strong>Service Providers:</strong> Auto repair workshops in PCMC, plumbing/electrical contractors, courier operators, real estate brokers. Need full registration bundle for legal operation and bank access.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Proprietorship Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Gumasta Licence (PMC)</td><td>Online application through PMC portal for physical locations. Covers working hours, employee records, establishment compliance</td></tr><tr><td>MSME Udyam Registration</td><td>Free on udyamregistration.gov.in using Aadhaar and PAN. Enables priority lending, scheme benefits, tender participation</td></tr><tr><td>GST Registration</td><td>If turnover exceeds Rs 40 lakh (goods) or Rs 20 lakh (services). Mandatory for e-commerce. Under proprietor's PAN</td></tr><tr><td>Professional Tax (PTEC/PTRC)</td><td>PTEC Rs 2,500/year for proprietor on GRAS portal. PTRC if employees hired for monthly PT deduction</td></tr><tr><td>PAN-Based ITR Setup</td><td>Configuring ITR-3 (business income) or ITR-4 (presumptive under Section 44AD/44ADA). Books of accounts if applicable</td></tr><tr><td>Bank Account Opening</td><td>Current account with 2+ registrations per RBI norms at Pune bank. Documentation package prepared</td></tr><tr><td>FSSAI Licence (food businesses)</td><td>Basic registration for turnover up to Rs 12 lakh. State licence for above Rs 12 lakh</td></tr><tr><td>Import Export Code (if applicable)</td><td>IEC registration through DGFT portal under proprietor's PAN</td></tr><tr><td>Annual Compliance</td><td>ITR-3/4 filing, GST returns (GSTR-1, GSTR-3B), PT payment, MSME update, Gumasta renewal</td></tr>

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
            <h2 class="section-title">How Proprietorship Registration Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">All registrations processed online - Gumasta (PMC), MSME (Udyam portal), GST (GST portal), PT (GRAS). No physical visit to any government office required. Walk-in at Patron's Wagholi office for all Pune zones.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Consultation and Registration Planning</h3><p class="step-description">Meet Patron's CA team at Wagholi office or contact us online. Discuss your business type, location (physical shop, home-based, or service-based), expected turnover, and whether you need GST from day one. Patron recommends the optimal registration bundle - at minimum Gumasta + MSME + PT for physical businesses, or MSME + GST for online/e-commerce sellers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bundle Selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Business Assessed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="39" font-size="10" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="700">?</text><rect x="30" y="58" width="60" height="12" rx="3" fill="#E8712C" opacity="0.15"/><text x="60" y="67" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">Bundle Selected</text></svg></div><span class="illustration-label">Planning Done</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Document Collection and PAN Verification</h3><p class="step-description">Patron collects PAN card, Aadhaar card, passport-size photograph, address proof, and business premises proof (rent agreement/ownership deed, NOC from landlord, electricity bill). Your personal PAN serves as business PAN - no separate PAN for proprietorships. Aadhaar-PAN linking verified.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN Verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs Collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="22" width="30" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="40" y="35" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">PAN</text><rect x="65" y="22" width="30" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="80" y="35" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Aadhaar</text><rect x="35" y="52" width="50" height="15" rx="3" fill="#10B981" opacity="0.15"/><text x="60" y="62" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Linked &amp; Verified</text></svg></div><span class="illustration-label">Ready to File</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Gumasta Licence Application (PMC)</h3><p class="step-description">For proprietorships operating from a physical location in Pune, Patron files the Gumasta licence application with Pune Municipal Corporation online portal. Includes business name, address, nature of business, number of employees. Issued within 3-7 working days. This is your Shop Act registration - mandatory for all physical establishments. Related: <a href="/shop-act-registration">Shop Act Registration</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PMC Filed Online</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shop Act Done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="100" height="85" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">PMC Gumasta</text><line x1="20" y1="30" x2="100" y2="30" stroke="#14365F" stroke-width="0.8"/><rect x="20" y="36" width="80" height="10" rx="3" fill="#14365F" opacity="0.1"/><text x="60" y="43" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Online Application Filed</text><rect x="20" y="52" width="80" height="10" rx="3" fill="#14365F" opacity="0.1"/><text x="60" y="59" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Shop Act Licence</text><rect x="40" y="70" width="40" height="10" rx="4" fill="#10B981" opacity="0.2"/><text x="60" y="77" font-size="6" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="700">Issued</text></svg></div><span class="illustration-label">Gumasta Issued</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">MSME Udyam Registration</h3><p class="step-description">Patron registers the proprietorship on the Udyam portal (udyamregistration.gov.in) using your Aadhaar and PAN. Udyam Registration Number (URN) and certificate issued instantly or within 1-2 working days. Classification as micro, small, or medium based on investment and turnover. Related: <a href="#">MSME Registration</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>URN Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MSME Benefits Unlocked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="22" width="70" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="32" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">MSME Udyam</text><text x="60" y="52" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">udyamregistration.gov.in</text><rect x="40" y="60" width="40" height="10" rx="4" fill="#10B981" opacity="0.2"/><text x="60" y="67" font-size="6" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="700">Instant</text></svg></div><span class="illustration-label">Udyam Done</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">GST and Professional Tax Registration</h3><p class="step-description">If turnover exceeds Rs 40 lakh (goods) or Rs 20 lakh (services) - or if you sell on e-commerce platforms - Patron files GST registration on the GST portal. GSTIN issued within 3-7 working days. Simultaneously, Patron registers you on the GRAS portal for Maharashtra Professional Tax (PTEC at Rs 2,500/year).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTIN Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PTEC Registered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="50" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="65" y="15" width="50" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="30" y="32" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">GST</text><text x="90" y="32" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">PT</text><path d="M24 44l4 4 8-8" stroke="#10B981" stroke-width="1.5"/><path d="M84 44l4 4 8-8" stroke="#10B981" stroke-width="1.5"/><text x="30" y="60" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">GSTIN</text><text x="90" y="60" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">PTEC</text></svg></div><span class="illustration-label">Tax Ready</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Bank Account Opening and Compliance Setup</h3><p class="step-description">With at least 2 registrations in hand (meeting RBI requirement), Patron assists in opening a current bank account in your business name at a Pune bank. Annual compliance calendar set up - ITR filing (ITR-4 presumptive or ITR-3 regular), GST returns (if registered), PT payment, and Gumasta renewal tracking. Related: <a href="#">Income Tax Filing in Pune</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank Account Open</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance Set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="35" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="25" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="700">Bank Account</text><text x="60" y="38" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">2+ Registrations (RBI)</text><rect x="25" y="55" width="70" height="25" rx="4" fill="#E8712C" opacity="0.15"/><text x="60" y="70" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">ITR-4 Ready</text></svg></div><span class="illustration-label">Fully Operational</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Proprietorship Registration</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card of Proprietor:</strong> Personal PAN serves as business PAN. No separate business PAN for proprietorships</li><li><strong>Aadhaar Card:</strong> Required for Udyam, GST, and Aadhaar-PAN linking</li><li><strong>Passport-Size Photograph:</strong> Recent, white background</li><li><strong>Address Proof:</strong> Aadhaar, passport, voter ID, driving licence</li><li><strong>Business Premises Proof:</strong> Rent agreement (registered or notarised) or ownership deed. Electricity bill of premises</li><li><strong>NOC from Landlord:</strong> No-objection certificate for business operation from premises. Required for Gumasta and GST</li><li><strong>Bank Statement/Cancelled Cheque:</strong> From proprietor's savings account (for initial registration)</li><li><strong>Business Name Declaration:</strong> Chosen name (no formal registration required, should be unique)</li></ul><p style="margin-top:16px;"><strong>Pune tip:</strong> For home-based proprietors (bakers in Baner, freelancers in Hinjewadi, tutors in Kothrud), your residential electricity bill and a self-declaration NOC serve as business premises proof. Patron prepares the documentation format accepted by banks and registration portals.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Proprietorship Registration in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Bank Account Rejection</td><td>RBI mandates 2+ registrations for current account. Proprietors approach with only 1 and face rejection</td><td>Patron ensures 2+ registrations before bank application - eliminating the most common rejection reason</td></tr><tr><td>No Gumasta - PMC Penalties</td><td>Physical businesses without Gumasta face penalties up to Rs 50,000 under Maharashtra Shops Act 2017</td><td>Gumasta application filed within 24 hours of document submission</td></tr><tr><td>Missed GST Threshold</td><td>Crossing Rs 40L/20L without GST triggers retrospective liability with 18% interest</td><td>Turnover monitored; GST registration triggered before threshold breach</td></tr><tr><td>No MSME Registration</td><td>Missing priority lending, collateral-free loans, government tender benefits</td><td>Udyam included in every bundle. Free registration, instant certificate</td></tr><tr><td>Wrong ITR Form</td><td>Filing ITR-1 instead of ITR-3/4 creates defective return flagged by Income Tax Dept</td><td>Correct ITR form (ITR-4 presumptive or ITR-3 regular) configured from setup</td></tr>

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
            <h2 class="section-title">Fees for Proprietorship Registration in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Gumasta + MSME + PT Bundle</td><td>Rs 2,999 - Rs 5,999</td></tr><tr><td>GST Registration (add-on)</td><td>Rs 1,999 - Rs 3,499</td></tr><tr><td>Full Bundle (Gumasta + MSME + GST + PT)</td><td>Rs 4,999 - Rs 8,999</td></tr><tr><td>FSSAI Basic (food businesses)</td><td>Rs 2,499 - Rs 3,999</td></tr><tr><td>IEC (Import Export Code)</td><td>Rs 2,999 - Rs 4,999</td></tr><tr><td>Annual Compliance (ITR + GST)</td><td>Rs 3,999 - Rs 9,999/year</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Proprietorship Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Proprietorship Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Consultation and Document Collection</td><td>Day 1-2</td></tr><tr><td>Gumasta Licence (PMC)</td><td>Day 3-7</td></tr><tr><td>MSME Udyam Registration</td><td>Day 3 (same day - often instant)</td></tr><tr><td>GST Registration</td><td>Day 3-10</td></tr><tr><td>Professional Tax (PTEC)</td><td>Day 3-5</td></tr><tr><td>Bank Current Account</td><td>Day 8-12 (with 2+ registrations)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Note:</strong> MSME Udyam is often instant. Multiple registrations filed simultaneously. Total 7-10 working days for complete bundle including bank account.</p>

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
            <h2 class="section-title">Why Choose Patron for Proprietorship Registration in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Near All Pune Zones</h3><p class="feature-text">RTC Silver, Wagholi - walk-in for proprietors from Hinjewadi, Kothrud, Baner, Market Yard, PCMC, Camp, peth districts, and all Pune zones.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Complete Bundle</h3><p class="feature-text">Gumasta + MSME + GST + PT + bank account + annual compliance - single engagement, zero gaps. No running to multiple portals.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">RBI Bank Compliance</h3><p class="feature-text">2+ registrations ensured before bank application - eliminating the most common current account rejection reason in Pune.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">GST Threshold Watch</h3><p class="feature-text">Turnover monitored. GST registration triggered before you cross Rs 40 lakh (goods) or Rs 20 lakh (services). No retrospective liability.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">10,000+ Businesses, 4 Offices</h3><p class="feature-text">15+ years. 50,000+ documents filed. Pune, Mumbai, Delhi, Gurugram. 4.9 Google rating.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="feature-title">From Rs 2,999</h3><p class="feature-text">Gumasta + MSME + PT included. GST available as add-on. Government fees at actuals. Cheapest comprehensive bundle in Pune.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune's Micro-Entrepreneurs</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p><em>"We were facing ROC non-compliance notices. Patron sorted everything in 2 weeks."</em> - Director, Delhi</p><p>Trusted by Hyundai, Asian Paints, Bridgestone, and thousands of Pune micro-entrepreneurs and small businesses.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Proprietorship vs Other Business Structures</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Sole Proprietorship</th><th>Private Limited Company</th></tr></thead>
                    <tbody>
                        <tr><td>Formation</td><td>No incorporation; registrations only</td><td>MCA incorporation (SPICE+)</td></tr><tr><td>Governing Law</td><td>No specific statute</td><td>Companies Act 2013</td></tr><tr><td>Liability</td><td>Unlimited - proprietor personally liable</td><td>Limited to shareholding</td></tr><tr><td>PAN</td><td>Proprietor's personal PAN</td><td>Separate company PAN</td></tr><tr><td>Compliance</td><td>ITR + GST returns (minimal)</td><td>Board meetings, AGM, AOC-4, MGT-7, ITR-6</td></tr><tr><td>Setup Cost</td><td>Rs 2,999-8,999 (lowest)</td><td>Rs 15,000-30,000</td></tr>

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
                
                <p><strong>Parent India Page:</strong></p><ul><li><a href="/proprietorship-registration">Proprietorship Registration in India</a></li></ul><p><strong>Same-City Pune Pages:</strong></p><ul><li><a href="#">Company Registration in Pune</a></li><li><a href="#">LLP Registration in Pune</a></li><li><a href="/accounting-services/pune">Accounting Services in Pune</a></li><li><a href="#">Income Tax Filing in Pune</a></li></ul><p><strong>Related India Pages:</strong></p><ul><li><a href="/gst-registration">GST Registration</a></li><li><a href="/shop-act-registration">Shop Act Registration</a></li><li><a href="#">MSME Registration</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Proprietorship in Pune</h2>
            <div class="content-text">
                
                <p><strong>Maharashtra Shops &amp; Establishments Act 2017:</strong> Gumasta licence mandatory for all physical businesses. 2025 Amendment raised threshold from 10 to 20 workers. Penalty Rs 50,000 for operating without registration.</p><p><strong>MSME Development Act 2006:</strong> Voluntary Udyam registration on udyamregistration.gov.in. Free. Enables priority lending, CGTMSE loans, tender preference, delayed payment protection. Source: <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">udyamregistration.gov.in</a></p><p><strong>GST Act:</strong> Mandatory if turnover exceeds Rs 40 lakh (goods) or Rs 20 lakh (services). Mandatory for e-commerce sellers. Under proprietor's personal PAN. GSTIN within 3-7 working days.</p><p><strong>Income Tax Act 1961:</strong> Proprietorship income taxed as individual. ITR-4 for presumptive (Section 44AD/44ADA). ITR-3 for regular. Tax audit if turnover exceeds Rs 1 crore. Due: 31 July (non-audit) or 31 October.</p><p><strong>Maharashtra PT Act 1975:</strong> PTEC Rs 2,500/year mandatory. PTRC if employees hired. Due 15th per Feb 2026 notification.</p><p><strong>RBI Guidelines:</strong> Minimum 2 forms of business registration required for current account in proprietorship name.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Proprietorship Registration in Pune</h2>
                    <p class="faq-expanded__lead">Answers about Gumasta, MSME Udyam, GST, bank account opening, costs, timeline, and proprietorship vs other structures.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Proprietorship Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles proprietorship registration in Pune?</h3>
                        <div class="faq-expanded__a"><p>No single office - it involves multiple registrations. Gumasta licence from Pune Municipal Corporation (PMC). MSME Udyam from the Udyam portal (Ministry of MSME). GST from the GST portal. Professional Tax from the GRAS portal (Maharashtra). Patron's Pune office at Wagholi coordinates all registrations under one engagement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I register a proprietorship online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. All required registrations are available online. Gumasta through PMC portal. MSME Udyam through udyamregistration.gov.in. GST through the GST portal. PT through GRAS portal. No physical visit to any government office is required. Walk-in at Patron's Wagholi office for document verification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of proprietorship registration in Pune?</h3>
                        <div class="faq-expanded__a"><p>Patron's bundled registration starts from Rs 2,999 for Gumasta + MSME + Professional Tax. Adding GST costs Rs 1,999-3,499. Full bundle (Gumasta + MSME + GST + PT) ranges Rs 4,999-8,999. Government fees minimal - Udyam is free, GST is free, Gumasta fees vary, PTEC Rs 2,500/year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does proprietorship registration take in Pune?</h3>
                        <div class="faq-expanded__a"><p>7-10 working days for complete bundle. MSME Udyam is often instant. Gumasta takes 3-7 working days. GST takes 3-7 working days. PT takes 2-5 working days. Multiple registrations filed simultaneously. Bank current account adds 3-5 days after registrations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is proprietorship registration mandatory?</h3>
                        <div class="faq-expanded__a"><p>No single mandatory incorporation. However, Gumasta is mandatory for physical establishments under Maharashtra Shops Act (penalty Rs 50,000). GST is mandatory above turnover threshold or for e-commerce sellers. PT is mandatory in Maharashtra. MSME is voluntary but recommended. At least 2 registrations needed for bank account.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a proprietorship get GST registration?</h3>
                        <div class="faq-expanded__a"><p>Yes. Proprietorship can register for GST if turnover exceeds Rs 40 lakh (goods) or Rs 20 lakh (services). For Pune proprietors selling on e-commerce platforms (Amazon, Flipkart, Meesho), GST is mandatory regardless of turnover. Registered under proprietor's personal PAN.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between proprietorship and private limited?</h3>
                        <div class="faq-expanded__a"><p>Proprietorship has no separate legal entity - owner and business are the same. Unlimited liability. Personal PAN. Minimal compliance. Private limited company is a separate legal entity with limited liability, separate PAN, and higher compliance requirements. Proprietorship ideal for small businesses; Pvt Ltd for scalable ventures.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to open a bank account for a proprietorship in Pune?</h3>
                        <div class="faq-expanded__a"><p>RBI mandates minimum 2 forms of business registration (any combination of GST, MSME Udyam, Gumasta, or PT certificate) along with proprietor's PAN, Aadhaar, and cancelled cheque from personal account. Patron ensures you have the required 2+ registrations before approaching the bank.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pune mein proprietorship register karne mein kitna kharcha aata hai?</strong> Rs 2,999 se start hota hai Gumasta + MSME + PT ke liye. GST add karein toh Rs 4,999-8,999. Udyam free hai, GST free hai.</p><p><strong>Kya proprietorship ke liye alag PAN lena padta hai?</strong> Nahi. Aapka personal PAN hi business PAN hai. Alag se company PAN nahi banta.</p><p><strong>Bank account kholne ke liye kya chahiye?</strong> RBI ke rule ke hisaab se minimum 2 business registrations chahiye - jaise GST + MSME ya Gumasta + GST.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Operate Informally - Register Your Proprietorship Today</h2>
            <div class="content-text">
                
                <p>Operating without Gumasta risks Rs 50,000 PMC penalty. Crossing GST threshold without registration triggers retrospective tax with 18% interest. Without MSME Udyam, you miss priority lending and government schemes. Without a current bank account, personal and business finances are mixed creating tax complications. Patron's bundled registration takes 7-10 days and establishes your complete legal identity.</p><p><strong>Call +91 945 945 6700 today or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Proprietorship Registered in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Proprietorship registration in Pune is not a single filing but a bundle of registrations - Gumasta, MSME Udyam, GST, Professional Tax, and bank account - that collectively establish your business identity.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi delivers the complete proprietorship bundle as a single engagement for freelancers, retailers, food operators, home-based businesses, and micro-entrepreneurs across all Pune zones.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">15+ years. 10,000+ businesses. 4.9 Google rating. From Rs 2,999. Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Proprietorship%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Proprietorship%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides proprietorship registration in major cities. Select your city.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available in These Cities</div><div class="pa-block-sub">Select your city for local proprietorship registration</div><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/proprietorship-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/proprietorship-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/proprietorship-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">Complete business setup and compliance in Pune</div><div class="pa-cross-grid"><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Filing</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers proprietorship registration in Pune. Maharashtra Shop Act, Udyam portal, GST thresholds, and RBI bank account norms verified against latest updates. Freshness Tier 1.</p>
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
