
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Trademark Registration in Pune - TM-A, Fees & Process</title>
    <meta name="description" content="CA-assisted trademark registration in Pune. Brand, logo, name filing via IP India. Rs 4,500/class for startups. Serving Hinjewadi, Kharadi brands. Call +91 945 945 6700.">
    <link rel="canonical" href="/trademark-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Registration in Pune - TM-A, Fees & Process">
    <meta property="og:description" content="CA-assisted trademark registration in Pune. Brand, logo, name filing via IP India. Rs 4,500/class for startups. Serving Hinjewadi, Kharadi brands. Call +91 945 945 6700.">
    <meta property="og:url" content="/trademark-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Registration in Pune - TM-A, Fees & Process">
    <meta name="twitter:description" content="CA-assisted trademark registration in Pune. Brand, logo, name filing via IP India. Rs 4,500/class for startups. Serving Hinjewadi, Kharadi brands. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Trademark Registration in Pune",
      "description": "CA-assisted trademark registration in Pune. Brand, logo, name filing via IP India. Rs 4,500/class for startups. Serving Hinjewadi, Kharadi brands. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/trademark-registration/pune",
      "serviceType": "Trademark Registration in Pune",
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
        "url": "https://www.patronaccounting.com/trademark-registration/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "4500",
          "maxPrice": "9000",
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
          "name": "Trademark Registration in India: Online Process & Fees",
          "item": "https://www.patronaccounting.com/trademark-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Trademark Registration in Pune",
          "item": "https://www.patronaccounting.com/trademark-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does trademark registration cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fee is Rs 4,500/class for individuals, DPIIT startups, and MSMEs, or Rs 9,000/class for companies/LLPs (e-filing). Patron's all-inclusive starts from Rs 6,999 (1 class, individual/startup) covering search, class mapping, Form TM-A filing, and monitoring. Multi-class filings attract proportional additional fees."
          }
        },
        {
          "@type": "Question",
          "name": "How long does trademark registration take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "From filing to registration: 9-12 months if no opposition. Filing 1-2 days. Examiner review 3-6 months. After acceptance, published for 4-month opposition period. Registration certificate 1-2 months after opposition. If opposition is filed, proceedings extend to 18-36 months."
          }
        },
        {
          "@type": "Question",
          "name": "Can I register a trademark online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Entire process is electronic via the IP India e-filing portal (ipindiaservices.gov.in). Pune falls under Trademark Registry, Mumbai jurisdiction. No physical visit to Mumbai required. Filing, fee payment, examination response, and certificate download all handled online."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between TM and R symbol?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TM indicates a trademark application has been filed or the mark is being claimed, but registration has not been granted. (R) indicates officially registered with exclusive legal rights. Using (R) without registration is illegal. Use TM after filing and switch to (R) upon registration."
          }
        },
        {
          "@type": "Question",
          "name": "How many classes do I need for my trademark?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Depends on your products and services. Single-product business may need one class. Diversified brand may need 3-5. A Pune restaurant chain selling packaged food online needs Class 43 (food services) + Class 30 (food products) + Class 35 (online retail). Each class has separate government fee."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if someone opposes my trademark?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "After publication, any person has 4 months to file Notice of Opposition. Applicant must file counter-statement within 2 months. Both parties submit evidence and may attend hearing before Registrar. Proceedings take 12-24 months. Patron handles complete opposition defence."
          }
        },
        {
          "@type": "Question",
          "name": "Do startups get a discount on trademark fees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. DPIIT-recognised startups receive 50% concession - Rs 4,500/class instead of Rs 9,000 (same rate as individuals). Udyam-registered MSMEs also qualify. Patron files DPIIT recognition before trademark if startup is not yet recognised."
          }
        },
        {
          "@type": "Question",
          "name": "Can I trademark a logo and name together?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, as a composite mark in a single application per class. However, filing word mark and logo separately provides broader protection - word mark protects the name regardless of design changes. Separate filings cost more but give better coverage. Patron advises optimal strategy based on usage and budget. Quick Answers Trademark registration mein kitna time lagta hai? Filing 1-2 din. Certificate 9-12 mahine (no opposition). Opposition ho to 18-36 mahine. TM aur R mein kya fark hai? TM = claim kiya hai, registered nahi. R = officially registered. Bina registration ke R use karna illegal. Startup ko trademark mein discount milta hai? Haan. DPIIT recognised startups ko 50% - Rs 9,000 ki jagah Rs 4,500/class. Udyam MSMEs ko bhi same."
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
                        Trademark Registration in Pune: Protect Your Brand Name, Logo, and Tagline
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Brand name/logo, applicant identity proof, business registration certificate, user affidavit (if prior use)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 4,500/class (individuals/startups/MSMEs) | Rs 9,000/class (companies/LLPs) | Patron from Rs 6,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Individuals, proprietors, partnerships, LLPs, companies, trusts, startups - anyone with a brand</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Filing 1-2 days | Examination 3-6 months | Registration 9-12 months (if no opposition)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trademark%20Registration%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20trademark%20registration%20in%20Pune.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Trademark%20Registration%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Trademark Registration in Pune',
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
    'ctaText'    => 'Patron has helped 10,000+ businesses with trademark registration, brand protection, and IP strategy. Pune brands trust us for comprehensive search and zero abandoned applications.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Classes by Industry</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Registration in Pune Services at a Glance</strong></p>
                    <p>Trademark registration protects your brand name, logo, tagline, or symbol by granting exclusive legal rights under the Trade Marks Act, 1999. In Pune, applications are filed via Form TM-A on the IP India e-filing portal (ipindiaservices.gov.in), processed by the Trademark Registry, Mumbai. Government fee: Rs 4,500/class for individuals, DPIIT startups, and MSMEs, or Rs 9,000/class for companies/LLPs. Registration takes 9-12 months, valid 10 years, renewable indefinitely. India follows Nice Classification with 45 classes.</p>
                </div>
                <p>Pune's brand ecosystem is expanding - SaaS products from Hinjewadi (Class 9+42), D2C brands from Kharadi (Class 25+35), restaurant chains on FC Road (Class 43+30), auto components from Chakan (Class 12+7), and pharma brands from MIDC Bhosari (Class 5). An unregistered trademark is an unprotected brand. Learn more about <a href="/trademark-registration">Trademark Registration across India</a>.</p>
                <p>Patron Accounting handles trademark registration from our Pune office - comprehensive pre-filing search, Form TM-A filing on <a href="https://ipindia.gov.in/" target="_blank" rel="noopener">IP India portal</a>, examination report response, opposition defence, and 10-year renewal tracking. We also bundle <a href="/startup-registration/pune">DPIIT startup recognition</a> for the 50% trademark fee concession.</p>
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
                <h2 class="section-title">What Is Trademark Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Trademark registration is the process of legally protecting a brand name, logo, tagline, symbol, or combination thereof by filing Form TM-A under the Trade Marks Act, 1999 with the Trademark Registry, granting the owner exclusive rights to use the mark and prevent others from using identical or deceptively similar marks.</p>
                    <p>A registered trademark (R) provides statutory legal protection across India. Without it, a brand can only claim common law rights (TM symbol), which are harder to enforce and geographically limited. For Pune businesses competing nationally, registered trademarks are essential for Amazon Brand Registry, Flipkart Brand Protection, investor due diligence, and franchise agreements.</p>
                    <p>India follows the Nice Classification with 45 classes (1-34 goods, 35-45 services). Each class requires separate filing. A SaaS company in Hinjewadi may need Class 9 + 42. A restaurant on FC Road may need Class 43 + 30. Strategic class selection is critical - too few leaves gaps, too many increases costs. Bundle with <a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> for complete brand launch.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Registration in Pune:</strong></p>
                    <p><strong>Trade Marks Act, 1999:</strong> Principal legislation governing trademark registration, rights, and enforcement in India.</p>
                    <p><strong>Nice Classification:</strong> International system with 45 classes (1-34 goods, 35-45 services). Each class = separate filing + fee.</p>
                    <p><strong>Form TM-A:</strong> Application form filed electronically on ipindiaservices.gov.in.</p>
                    <p><strong>Examination Report:</strong> Examiner's objections (absolute or relative grounds) requiring response within 30 days.</p>
                    <p><strong>Trademark Registry Mumbai:</strong> Jurisdictional office for Pune applications.</p>
                    <p><strong>DPIIT Concession:</strong> 50% fee reduction for DPIIT startups and Udyam MSMEs (Rs 4,500 vs Rs 9,000/class).</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Pune Brand Hub</span>
                        <strong>TM Protected</strong>
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
            <h2 class="section-title">Who Needs Trademark Registration in Pune?</h2>
            <div class="content-text">
                
                <p><strong>SaaS/IT Product Companies (Hinjewadi, Kharadi):</strong> Class 9 (software), Class 42 (SaaS), Class 35 (business services). Required for platform listings, investor terms, international expansion.</p>
                <p><strong>D2C E-Commerce Brands (Magarpatta, Pune-wide):</strong> Class 25 (clothing), Class 3 (cosmetics), Class 35 (online retail). Amazon Brand Registry and Flipkart Brand Protection require trademark.</p>
                <p><strong>Restaurants/Food Brands (FC Road, Koregaon Park, Baner):</strong> Class 43 (food services), Class 30 (food products), Class 32 (beverages). Prevents competitors copying brand on delivery platforms.</p>
                <p><strong>Auto Component Manufacturers (Chakan, Pimpri-Chinchwad):</strong> Class 12 (vehicles/parts), Class 7 (machinery), Class 6 (metals). OEM supply chain and aftermarket branding.</p>
                <p><strong>Pharma Companies (MIDC Bhosari):</strong> Class 5 (pharma), Class 10 (medical devices), Class 44 (medical services). Drug brand clearance essential before CDSCO approval.</p>
                <p><strong>Startups/Freelancers/Professionals:</strong> DPIIT-recognised startups get 50% fee concession. <a href="/udyam-registration/pune">Udyam-registered MSMEs</a> also qualify. Personal brands and service marks.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration Services Included by Patron in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Comprehensive Trademark Search</td><td>IP India database: exact match, phonetic, visual, prior mark analysis across all 45 classes. Identifies conflicts before filing</td></tr>
                        <tr><td>Nice Classification Strategy</td><td>Map brand to correct classes. Advise on minimum-essential vs broader protection based on current ops and growth plans</td></tr>
                        <tr><td>Form TM-A Filing</td><td>E-filing on <a href="https://ipindiaservices.gov.in/" target="_blank" rel="noopener">ipindiaservices.gov.in</a>. Applicant details, mark type, class specs, goods/services description, fee payment. Receipt with application number generated immediately</td></tr>
                        <tr><td>DPIIT Fee Concession</td><td>Advisory on obtaining <a href="/startup-registration/pune">DPIIT recognition</a> for 50% fee reduction before trademark filing</td></tr>
                        <tr><td>Examination Report Response</td><td>Written response within 30 days to Examiner objections (absolute/relative grounds). Hearing representation before Registrar if required</td></tr>
                        <tr><td>Opposition Defence/Filing</td><td>Counter-statement, evidence filing during 4-month opposition period. Also file opposition against conflicting third-party marks</td></tr>
                        <tr><td>Trademark Renewal (10-yearly)</td><td>Filing 6 months before expiry to maintain protection. Late renewal attracts surcharge. All expiry dates tracked</td></tr>
                        <tr><td>International Filing Advisory</td><td>Madrid Protocol advisory for Pune exporters seeking protection in 130+ countries via single WIPO application</td></tr>

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
            <h2 class="section-title">Trademark Registration Process in Pune - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete brand-protection chain - from search to registration to renewal.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Conduct Comprehensive Trademark Search</h3><p class="step-description">Thorough search on IP India database: exact matches, phonetically similar marks, visually similar logos across all relevant Nice classes. For Hinjewadi SaaS: Classes 9, 35, 42. For FC Road restaurant: Classes 43, 30, 32. Search report identifies conflicts and recommends proceed/modify/choose different name.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Search Complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Conflicts Checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="82" y1="67" x2="100" y2="85" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><path d="M50 45L55 50L70 35" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Search Done</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Select Nice Classes and Draft Specifications</h3><p class="step-description">Map brand to correct Nice Classification classes. Draft goods/services specifications - broad enough for protection, specific to avoid Examiner objection. Pune D2C brands: Class 25 (clothing) + Class 35 (online retail). Each class = separate government fee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Classes Mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Specs Drafted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="55" y="25" width="25" height="35" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><rect x="85" y="25" width="10" height="35" rx="2" fill="#E8EDF4" stroke="#14365F" stroke-width="0.5"/></svg></div><span class="illustration-label">Strategy Set</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Form TM-A on IP India e-Filing Portal</h3><p class="step-description">E-file on ipindiaservices.gov.in: applicant details, mark type (word/device/composite), representation, class and specification, date of first use (if any), government fee (Rs 4,500 individual/startup/MSME or Rs 9,000 company/LLP per class). Filing receipt with application number generated immediately.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TM-A Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> App Number</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Respond to Examination Report (If Objected)</h3><p class="step-description">Trademark Registry Mumbai Examiner reviews in 3-6 months. If objections (absolute grounds: descriptive/generic; relative grounds: conflict with existing mark) - Patron drafts written response within 30-day deadline with legal arguments, distinctiveness evidence, differentiation. Hearing representation if needed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Response Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Arguments Made</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="39" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TM</text><path d="M40 72L60 62L80 72" stroke="#10B981" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div><span class="illustration-label">Under Examination</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Publication in Trademark Journal + Opposition Period</h3><p class="step-description">Upon Examiner acceptance, mark published in Trademark Journal for 4-month opposition period. Any person can file Notice of Opposition. If no opposition: proceeds to registration. If opposition filed: Patron files counter-statement, evidence, and represents at hearing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Published</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 4-Month Watch</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><rect x="35" y="38" width="50" height="8" rx="3" fill="#E8F5E9" opacity="0.5"/><text x="60" y="65" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">4 months</text></svg></div><span class="illustration-label">Opposition Window</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive Registration Certificate + Set Up Protection</h3><p class="step-description">Trademark Registry issues Registration Certificate. Owner uses (R) symbol with exclusive legal rights. Patron sets up: trademark monitoring in Journal for conflicting marks, 10-year renewal reminder, Amazon Brand Registry/Flipkart enrolment (e-commerce brands), and licensing/assignment documentation (franchise brands).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> (R) Registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Monitoring Active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><text x="37" y="42" font-size="16" fill="#10B981" font-weight="900" text-anchor="middle" font-family="Arial">(R)</text><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Brand Protected</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Trademark Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li>Brand name / logo / tagline to be registered (JPEG format for device/logo marks)</li><li>PAN and Aadhaar of applicant (individual) or authorised signatory (company/LLP)</li><li>Business registration certificate - COI (Pvt Ltd), LLP Agreement, Partnership Deed, or MSME/Udyam certificate</li><li>DPIIT Recognition Certificate (for 50% fee concession for startups)</li><li>Address proof of the applicant</li><li>Signed Form TM-48 (Power of Attorney) authorising Patron to file</li><li>User affidavit (if claiming prior use of the mark before filing date)</li><li>Description of goods/services per Nice Classification class</li><li>Priority document (if claiming convention priority from foreign filing)</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> For DPIIT-recognised startups in Hinjewadi/Kharadi, attaching the DPIIT certificate reduces govt fee from Rs 9,000 to Rs 4,500/class. If not yet DPIIT-recognised, Patron can file DPIIT recognition (free, 2-7 days) before trademark to unlock the 50% concession. Udyam-registered MSMEs also qualify for same concession.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trademark Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Filing Without Proper Search</td><td>Most common and costliest mistake. Examiner finds conflict, application objected. Govt fee non-refundable</td><td>Comprehensive phonetic + visual + prior mark search across all 45 classes before filing</td></tr>
                        <tr><td>Wrong Nice Classification</td><td>Filing in wrong class = no protection. SaaS in Class 42 only but not Class 9 = gap. Restaurant in Class 43 but not 30 = gap</td><td>All relevant classes mapped before filing based on actual and planned business activities</td></tr>
                        <tr><td>Missing 30-Day Examination Response</td><td>Failure to respond = application abandoned. Govt fee lost. DIY filers miss monitoring deadline</td><td>All applications monitored. Examination Reports responded to within 7 days of receipt</td></tr>
                        <tr><td>Descriptive/Generic Marks</td><td>'Fresh Juice' for juice or 'Cloud Software' for SaaS refused on absolute grounds Section 9</td><td>Mark distinctiveness advisory before finalising brand name. Avoid descriptive names</td></tr>
                        <tr><td>Missing 10-Year Renewal</td><td>Mark removed from register if renewal missed. Restoration within 1 year with extra fees</td><td>All expiry dates tracked. Renewal filed 6 months before expiry. Zero abandoned marks</td></tr>

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
            <h2 class="section-title">Trademark Registration Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Individual/Startup/MSME, per class)</td><td>Rs 4,500 (e-filing)</td></tr>
                        <tr><td>Government Fee (Company/LLP, per class)</td><td>Rs 9,000 (e-filing)</td></tr>
                        <tr><td>Patron All-Inclusive (1 class, Individual/Startup)</td><td>Rs 6,999 (search + filing + monitoring)</td></tr>
                        <tr><td>Patron All-Inclusive (1 class, Company/LLP)</td><td>Rs 9,999</td></tr>
                        <tr><td>Patron (2 classes)</td><td>Rs 11,999 (Individual) / Rs 17,999 (Company)</td></tr>
                        <tr><td>Examination Report Response</td><td>Rs 2,999</td></tr>
                        <tr><td>Opposition Filing/Defence</td><td>Rs 4,999</td></tr>
                        <tr><td>Trademark Renewal (10-yearly)</td><td>Rs 4,500/9,000 (govt) + Rs 1,999 (Patron)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Trademark%20Registration%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Trademark Search</td><td>1-2 days</td></tr><tr><td>Form TM-A Filing</td><td>1-2 days</td></tr><tr><td>Examination by Registrar</td><td>3-6 months</td></tr><tr><td>Examination Report Response (if objected)</td><td>Within 30 days</td></tr><tr><td>Publication in Trademark Journal</td><td>1-2 months post-acceptance</td></tr><tr><td>Opposition Period</td><td>4 months</td></tr><tr><td>Registration Certificate</td><td>1-2 months post-opposition</td></tr><tr><td><strong>Total (No Opposition)</strong></td><td><strong>9-12 months</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> First-to-file principle - the first applicant in a class generally prevails. Every day without filing = a day a competitor can claim your brand. Govt fees non-refundable if refused due to prior conflict. Proper search saves Rs 4,500-9,000 per class. 9-12 month timeline means earlier filing = earlier protection. For D2C brands: Amazon Brand Registry requires filed/registered trademark.</p>

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
            <h2 class="section-title">Why Choose Patron for Trademark Registration in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Brand Ecosystem Expertise</h3><p class="feature-desc">RTC Silver, Wagholi. Experience with SaaS brands (Hinjewadi), restaurant brands (FC Road), D2C labels (Kharadi), pharma names (MIDC Bhosari), and auto brands (Chakan).</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Comprehensive Pre-Filing Search</h3><p class="feature-desc">Unlike portals that file and hope, Patron searches phonetic, visual, and prior mark conflicts across all 45 classes. Saves non-refundable govt fee from wasted applications.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Complete Brand-Protection Chain</h3><p class="feature-desc">Search + class strategy + TM-A filing + examination response + opposition defence + renewal tracking + DPIIT concession advisory. Zero abandoned applications.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Track Record</h3><p class="feature-desc">10,000+ businesses served. 4.9 Google rating. 50,000+ documents filed. Search in 1-2 days. Filing in 1-2 days. Examination response within 7 days. Renewal 6 months early.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Brands Across Pune</h2>
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
            <h2 class="section-title">Trademark Classes by Pune Industry</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Pune Industry</th><th>Common Nice Classes</th><th>Examples</th></tr></thead>
                    <tbody>
                        <tr><td>SaaS / IT Products (Hinjewadi)</td><td>Class 9, 42, 35</td><td>Software products, mobile apps, cloud platforms</td></tr>
                        <tr><td>D2C E-Commerce (Kharadi, Pune-wide)</td><td>Class 25, 3, 35</td><td>Fashion brands, beauty brands, home goods</td></tr>
                        <tr><td>Restaurants / Food (FC Road, KP)</td><td>Class 43, 30, 32</td><td>Restaurant chains, cloud kitchens, packaged food</td></tr>
                        <tr><td>Auto Components (Chakan, PCMC)</td><td>Class 12, 7, 6</td><td>Branded auto parts, machine components</td></tr>
                        <tr><td>Pharmaceuticals (MIDC Bhosari)</td><td>Class 5, 10, 44</td><td>Drug brands, medical equipment brands</td></tr>
                        <tr><td>Professional Services</td><td>Class 35, 36, 45</td><td>CA firms, law firms, consulting brands</td></tr>

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
                
                <p>Patron offers complete brand and business registration in Pune:</p><ul>
                    <li><a href="/trademark-registration">Trademark Registration in India</a></li>
                    <li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a></li>
                    <li><a href="/llp-incorporation/pune">LLP Registration in Pune</a></li>
                    <li><a href="/startup-registration/pune">Startup Registration in Pune</a> - DPIIT for 50% TM concession</li>
                    <li><a href="/gst-registration/pune">GST Registration in Pune</a></li>
                    <li><a href="/udyam-registration/pune">Udyam Registration in Pune</a> - MSME for 50% concession</li>
                    <li><a href="/accounting-services/pune">Accounting Services in Pune</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Trademark Registration in Pune</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>Trade Marks Act, 1999 - Section 9 (absolute grounds), 11 (relative grounds), 18 (application), 25 (10-year validity/renewal), 29 (infringement)</li>
                    <li>Trade Marks Rules, 2017 - Form TM-A, fee schedule, examination, opposition, renewal procedures</li>
                    <li>Nice Classification - 45 classes (1-34 goods, 35-45 services)</li>
                    <li>Madrid Protocol - International filing for 130+ countries</li></ul>
                <p><strong>Key Portals:</strong></p><ul>
                    <li><a href="https://ipindia.gov.in/" target="_blank" rel="noopener">IP India</a> - ipindia.gov.in</li>
                    <li>E-Filing: ipindiaservices.gov.in</li>
                    <li>Jurisdiction: Trademark Registry, Mumbai</li></ul>
                <p><strong>Penalties:</strong></p><ul>
                    <li>Infringement (Section 29): Criminal penalties under Sections 103-104</li>
                    <li>Imprisonment: 6 months to 3 years + Fine: Rs 50,000 to Rs 2 lakh</li></ul>

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
                    <h2 class="faq-expanded__title">FAQs - Trademark Registration in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about trademark registration in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trademark Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does trademark registration cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>Government fee is Rs 4,500/class for individuals, DPIIT startups, and MSMEs, or Rs 9,000/class for companies/LLPs (e-filing). Patron's all-inclusive starts from Rs 6,999 (1 class, individual/startup) covering search, class mapping, Form TM-A filing, and monitoring. Multi-class filings attract proportional additional fees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does trademark registration take?</h3>
                        <div class="faq-expanded__a"><p>From filing to registration: 9-12 months if no opposition. Filing 1-2 days. Examiner review 3-6 months. After acceptance, published for 4-month opposition period. Registration certificate 1-2 months after opposition. If opposition is filed, proceedings extend to 18-36 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can I register a trademark online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Entire process is electronic via the IP India e-filing portal (ipindiaservices.gov.in). Pune falls under Trademark Registry, Mumbai jurisdiction. No physical visit to Mumbai required. Filing, fee payment, examination response, and certificate download all handled online.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between TM and R symbol?</h3>
                        <div class="faq-expanded__a"><p>TM indicates a trademark application has been filed or the mark is being claimed, but registration has not been granted. (R) indicates officially registered with exclusive legal rights. Using (R) without registration is illegal. Use TM after filing and switch to (R) upon registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How many classes do I need for my trademark?</h3>
                        <div class="faq-expanded__a"><p>Depends on your products and services. Single-product business may need one class. Diversified brand may need 3-5. A Pune restaurant chain selling packaged food online needs Class 43 (food services) + Class 30 (food products) + Class 35 (online retail). Each class has separate government fee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if someone opposes my trademark?</h3>
                        <div class="faq-expanded__a"><p>After publication, any person has 4 months to file Notice of Opposition. Applicant must file counter-statement within 2 months. Both parties submit evidence and may attend hearing before Registrar. Proceedings take 12-24 months. Patron handles complete opposition defence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do startups get a discount on trademark fees?</h3>
                        <div class="faq-expanded__a"><p>Yes. DPIIT-recognised startups receive 50% concession - Rs 4,500/class instead of Rs 9,000 (same rate as individuals). Udyam-registered MSMEs also qualify. Patron files DPIIT recognition before trademark if startup is not yet recognised.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I trademark a logo and name together?</h3>
                        <div class="faq-expanded__a"><p>Yes, as a composite mark in a single application per class. However, filing word mark and logo separately provides broader protection - word mark protects the name regardless of design changes. Separate filings cost more but give better coverage. Patron advises optimal strategy based on usage and budget.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Trademark registration mein kitna time lagta hai?</strong> Filing 1-2 din. Certificate 9-12 mahine (no opposition). Opposition ho to 18-36 mahine.</p><p><strong>TM aur R mein kya fark hai?</strong> TM = claim kiya hai, registered nahi. R = officially registered. Bina registration ke R use karna illegal.</p><p><strong>Startup ko trademark mein discount milta hai?</strong> Haan. DPIIT recognised startups ko 50% - Rs 9,000 ki jagah Rs 4,500/class. Udyam MSMEs ko bhi same.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Register Your Pune Brand Before a Competitor Claims It</h2>
            <div class="content-text">
                
                <p>First-to-file principle - the first applicant in a class prevails. Every day without filing = a day your brand is unprotected. 9-12 month registration timeline means earlier filing = earlier protection. Govt fees non-refundable if refused. D2C brands: Amazon Brand Registry needs trademark. DPIIT startups get 50% fee concession.</p><p><strong>Protect now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Trademark%20Registration%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Trademark in Pune with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Trademark registration in Pune protects brand names, logos, and taglines under the Trade Marks Act 1999 - from SaaS products in Hinjewadi and restaurant brands on FC Road to D2C labels in Kharadi and pharma names in MIDC Bhosari - filed via IP India under Trademark Registry Mumbai jurisdiction.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi delivers the complete brand-protection chain: comprehensive search, Nice Classification strategy, Form TM-A filing, examination response, opposition defence, and 10-year renewal tracking. With 10,000+ businesses served, your Pune brand is searched, filed, and protected from day one.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Trademark%20Registration%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trademark%20Registration%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20trademark%20registration%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trademark Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides trademark registration in 8 major cities.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/trademark-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/trademark-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/trademark-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/trademark-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/trademark-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/trademark-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/trademark-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end brand and business registration in Pune</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Drug License</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Freshness Tier 2) to incorporate IP India fee updates, Trade Marks Rules amendments, Nice Classification changes, and DPIIT startup concession updates. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
