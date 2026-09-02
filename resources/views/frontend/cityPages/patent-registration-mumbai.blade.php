
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Patent Registration in Mumbai - Filing, Fees & Exam</title>
    <meta name="description" content="Patent registration in Mumbai. Patents Act 1970, provisional + complete specification, Patent Office Mumbai, FER response, startup expedited exam, 20-year term. CA-led. Call +91 945 945 6700.">
    <link rel="canonical" href="/patent-registration/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Patent Registration in Mumbai - Filing, Fees & Exam">
    <meta property="og:description" content="Patent registration in Mumbai. Patents Act 1970, provisional + complete specification, Patent Office Mumbai, FER response, startup expedited exam, 20-year term. CA-led. Call +91 945 945 6700.">
    <meta property="og:url" content="/patent-registration/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Patent Registration in Mumbai - Filing, Fees & Exam">
    <meta name="twitter:description" content="Patent registration in Mumbai. Patents Act 1970, provisional + complete specification, Patent Office Mumbai, FER response, startup expedited exam, 20-year term. CA-led. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Patent Registration in Mumbai",
      "description": "Patent registration in Mumbai. Patents Act 1970, provisional + complete specification, Patent Office Mumbai, FER response, startup expedited exam, 20-year term. CA-led. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/patent-registration/mumbai",
      "serviceType": "Patent Registration in Mumbai",
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
        "url": "https://www.patronaccounting.com/patent-registration/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "1600",
          "maxPrice": "15000",
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
          "name": "Patent Registration in India: Process, Fees and Guide",
          "item": "https://www.patronaccounting.com/patent-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Patent Registration in Mumbai",
          "item": "https://www.patronaccounting.com/patent-registration/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to register a patent in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Conduct patentability assessment for novelty inventive step and industrial applicability with prior art search. Draft provisional or complete specification. File at Patent Office Mumbai Antop Hill using Forms 1 2 3 5 26 online at ipindiaonline.gov.in. Published after 18 months. File Request for Examination Form 18 within 48 months. Respond to First Examination Report within 6 months. Patent granted when objections cleared. Total 24-42 months or 3-5 months for DPIIT startups."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of patent registration in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fees Rs 1,600 natural person or startup to Rs 8,000 entity for filing. RFE Rs 4,000 to Rs 20,000. Annual renewal from year 3 Rs 800 to Rs 20,000 per year. DPIIT startups get 80 percent fee reduction. Professional fees Rs 15,000 to Rs 50,000 for specification drafting plus Rs 10,000 to Rs 25,000 for FER response. Total Rs 20,000 to Rs 1,00,000 plus depending on complexity."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to get a patent in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Average 24-42 months from filing to grant. Key milestones: publication at 18 months, examination after RFE filing 1-24 months, FER response window 6 months plus 3 month extension. DPIIT startups with expedited examination 3-5 months from filing to grant. Timeline depends on invention complexity examiner workload specification quality and FER responsiveness."
          }
        },
        {
          "@type": "Question",
          "name": "What inventions can be patented in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Any product or process that is novel involves inventive step and is industrially applicable except Section 3 and 4 exclusions. Key non-patentable: new forms of known substances without enhanced efficacy S.3(d) for pharma, computer programmes per se S.3(k) for software but technical implementations may qualify, methods of medical treatment S.3(i), plants and animals S.3(j), mere discoveries S.3(e), atomic energy S.4."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between provisional and complete patent specification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Provisional S.9 filed when invention in development stage describes nature without detailed claims secures early priority date. Complete specification must follow within 12 months or application abandoned. Complete S.10 is the full document with detailed description best method claims defining protection scope abstract and drawings. Most startups file provisional first to secure priority then convert within 12 months."
          }
        },
        {
          "@type": "Question",
          "name": "Can startups get expedited patent examination?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. DPIIT-recognised startups eligible for expedited examination under Patents Rules. Application examined on priority basis reducing timeline from 24-42 months to 3-5 months. Also receive 80 percent fee reduction. Entity must be recognised by DPIIT under Startup India. Application for expedited examination filed along with Request for Examination. Patron assists with DPIIT recognition and files expedited examination. Quick Answers Patent kaise register hota hai Mumbai mein? Pehle check karo: novel hai, inventive step hai, industrial use hai, aur S.3 mein excluded nahi hai. Prior art search karo. Specification draft karo. Patent Office Mumbai (Antop Hill) mein file karo. 18 mahine mein publish hota hai. Form 18 se examination request (48 mahine ke andar). FER reply 6+3 mahine mein. Grant: 24-42 mahine (startup 3-5 mahine). Software ka patent milta hai? S.3(k): 'computer programme per se' nahi milega. Lekin agar software koi technical effect produce karta hai ya hardware ke saath kaam karta hai toh mil sakta hai - CRI guidelines ke under. Claims device/system/method ke roop mein draft karo. Startup ko fast patent milta hai? Haan! DPIIT-recognised startup ko expedited examination milta hai - 3-5 mahine mein grant (normal 24-42 mahine). 80% fee reduction bhi. Patron DPIIT recognition + expedited filing dono handle karta hai."
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
                        Patent Registration in Mumbai: CA-Led Filing at Patent Office Mumbai, Specification Drafting, Examination Response, and 20-Year Protection Under the Patents Act 1970
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patents Covered:</span> Product patents, process patents, pharma/chemical, software-related (CRI), mechanical, biotech, medical devices, manufacturing, fintech, agricultural innovation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From Rs 15,000 (professional) + Govt from Rs 1,600 (startup) to Rs 8,000 (entity) for filing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Key Provision:</span> 20-year exclusive rights from filing date; novelty + inventive step + industrial applicability required (S.2)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 24-42 months average (filing to grant); 3-5 months for DPIIT startups with expedited examination</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Patent%20Filing%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20patent%20filing%20help.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20patent%20registration%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Patent Registration',
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
    'ctaText'    => 'From pharma innovators to tech startups to IIT Bombay researchers - Mumbai\'s innovation community trusts Patron for patent registration.',
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
            <a href="#comparison-section" class="toc-btn">Application Types</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patent Registration in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Patent Registration Services at a Glance</strong></p>
                    <p>Patent = 20-year exclusive rights for novel, inventive, industrially applicable inventions. Filed at Patent Office Mumbai (Antop Hill). Three requirements: novelty S.2(1)(j), inventive step S.2(1)(ja), industrial applicability S.2(1)(ac). S.3 exclusions critical: pharma S.3(d), software S.3(k), medical S.3(i). Provisional (12-month window) or complete specification. RFE within 48 months. FER response: 6+3 months. Startups: 3-5 months expedited. Mumbai = India's largest patent city.</p>
                </div>
                <p>Mumbai dominates India's patent landscape. Pharma (Cipla, Glenmark, Lupin - 30%+ of Indian filings), tech (Powai/Andheri), IIT Bombay, BARC, biotech, manufacturing (Thane-Belapur). Learn more about <a href="/patent-registration">patent registration across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Patents Act 1970 (as amended 2005); Patents Rules 2003 (as amended 2020); TRIPS</td></tr>
                        <tr><td>Patent Office</td><td>Patent Office Mumbai, Antop Hill, S.M. Road, Mumbai 400037. Jurisdiction: MH, GJ, MP, GA, CG</td></tr>
                        <tr><td>Three Requirements</td><td>Novelty (S.2(1)(j)) + Inventive Step (S.2(1)(ja)) + Industrial Applicability (S.2(1)(ac))</td></tr>
                        <tr><td>S.3 Exclusions</td><td>Pharma S.3(d), Software S.3(k), Medical S.3(i), Biotech S.3(j), Discovery S.3(e)</td></tr>
                        <tr><td>Term</td><td>20 years from filing date. Annual renewal from year 3</td></tr>
                        <tr><td>Timeline</td><td>24-42 months standard. 3-5 months startup expedited. RFE within 48 months</td></tr>
                        <tr><td>Fees</td><td>Govt: Rs 1,600 (startup) to Rs 8,000 (entity). Professional: Rs 15,000-50,000</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patent Office Mumbai at Antop Hill is 15 minutes from Patron's Marine Lines office. Patron integrates patent with <a href="/trademark-registration/mumbai">trademark</a>, <a href="/copyright-registration/mumbai">copyright</a>, <a href="#">design</a>, and <a href="#">company registration</a>.</p>
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
                <h2 class="section-title">What Is Patent Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Patent registration grants the inventor exclusive rights for 20 years to prevent others from making, using, selling, or importing the invention in India. Three requirements: novelty (not anticipated by prior art), inventive step (non-obvious technical advance), industrial applicability (capable of industrial use).</p>
                    <p>S.3 non-patentable inventions are critical for Mumbai: S.3(d) pharma (new form without enhanced efficacy), S.3(k) software per se (but CRI-compliant technical implementations may qualify), S.3(i) medical treatment, S.3(j) plants/animals. S.4: atomic energy.</p>
                    <p>Two paths: provisional specification (S.9 - early priority, 12-month window) or complete specification (S.10 - full description + claims). Filed at <a href="https://ipindiaonline.gov.in" target="_blank" rel="noopener">Patent Office Mumbai</a>. Learn more at <a href="/patent-registration">our national patent practice</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Patent Registration:</strong></p>
                    <ul>
                        <li><strong>Novelty S.2(1)(j):</strong> Not anticipated by prior publication or use worldwide. Any public disclosure before filing destroys novelty.</li>
                        <li><strong>Inventive Step S.2(1)(ja):</strong> Technical advance or economic significance. Not obvious to skilled person. Non-obvious.</li>
                        <li><strong>S.3 Exclusions:</strong> S.3(d) pharma incremental. S.3(k) software per se. S.3(i) medical treatment. S.3(j) biological. S.3(e) discovery.</li>
                        <li><strong>Specification:</strong> Provisional (priority only, 12-month window) or Complete (description + claims + abstract + drawings).</li>
                        <li><strong>FER:</strong> First Examination Report. 6+3 month hard deadline. Missed = deemed abandoned.</li>
                        <li><strong>Startup Expedited:</strong> DPIIT-recognised: 3-5 months vs 24-42. 80% fee reduction. Examined on priority.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Patent Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IP</span>
                        <strong>Patent</strong>
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
            <h2 class="section-title">Who Should File a Patent in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Pharma Companies (Cipla, Glenmark, Lupin, Andheri/Worli):</strong> New drug formulations, delivery systems navigating S.3(d). Enhanced efficacy claims essential. <a href="/trademark-registration/mumbai">Trademark</a> for drug brand names.</p>
                <p><strong>IT/Software Companies (Powai, Andheri, BKC):</strong> Software-hardware integrated innovations. CRI guidelines for S.3(k) navigation. <a href="/copyright-registration/mumbai">Copyright</a> for source code alongside patent.</p>
                <p><strong>Startups (BKC, Powai - DPIIT Recognised):</strong> Expedited examination (3-5 months). 80% fee reduction. Investor-ready patent portfolio. <a href="#">Startup India registration</a> assistance.</p>
                <p><strong>Research Institutions (IIT Bombay, BARC):</strong> Academic innovations, technology transfer, commercialisation. <a href="#">Company registration</a> for spin-offs.</p>
                <p><strong>Manufacturing, Biotech, Medical Devices (Thane-Belapur, citywide):</strong> Process patents, device patents, composition patents. <a href="#">Design registration</a> for product appearance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patent Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Patentability Assessment</td><td>Novelty, inventive step, industrial applicability check. S.3 screening (pharma S.3(d), software S.3(k)/CRI, medical S.3(i), biotech S.3(j)). Prior art search on IPO, USPTO, EPO, WIPO databases. Written opinion</td></tr>
                        <tr><td>Specification Drafting</td><td>Provisional (early priority, 12-month window) or complete (description + claims + abstract + drawings). S.3-navigating claim strategy. Pharma: enhanced efficacy framing. Software: CRI-compliant technical claims</td></tr>
                        <tr><td>Patent Office Mumbai Filing</td><td>Forms 1/2/3/5/26 at Antop Hill or online ipindiaonline.gov.in. Application number and priority date secured. Govt fee paid (Rs 1,600-8,000)</td></tr>
                        <tr><td>Publication + RFE</td><td>18-month publication (or early via Form 9). Request for Examination (Form 18) within 48 months. Without RFE = application never examined. Strategic RFE timing</td></tr>
                        <tr><td>FER Response + Prosecution</td><td>First Examination Report objections: prior art distinction, S.3 arguments, claim amendments. 6+3 month hard deadline. Comprehensive response with legal arguments</td></tr>
                        <tr><td>Opposition Handling</td><td>Pre-grant (S.25(1)) and post-grant (S.25(2) within 12 months). Offensive (filing against competitors) and defensive (responding to challenges)</td></tr>
                        <tr><td>Startup Expedited Examination</td><td>DPIIT recognition assistance + expedited filing + 80% fee reduction. 3-5 months vs 24-42 months. Priority examination at Patent Office Mumbai</td></tr>
                        <tr><td>PCT + Renewal + Enforcement</td><td>PCT national phase entry (31 months). Annual renewal from year 3. Bombay HC S.104 infringement. JNPT customs. Compulsory licence S.84 monitoring</td></tr>

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
            <h2 class="section-title">How Patent Registration Works in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 8-step process covers the complete patent lifecycle - from patentability assessment through specification drafting, Patent Office Mumbai filing, publication, examination, FER response, grant, to renewal and enforcement.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Patentability Assessment + Prior Art Search</h3>
        <p class="step-description">S.2 requirements: novelty, inventive step, industrial applicability. S.3/4 non-patentability screening (pharma S.3(d), software S.3(k)/CRI, medical S.3(i), biotech S.3(j)). Comprehensive prior art search on IPO, USPTO, EPO, WIPO, Google Patents. Written opinion. Walk-in at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Novelty confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.3 cleared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Prior art mapped</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ASSESS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Novel? Inventive?</text><text x="60" y="65" font-size="5" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">S.3 Screening</text></svg></div>
            <span class="illustration-label">Patentable</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Specification Drafting</h3>
        <p class="step-description">Provisional (S.9 - early priority, R&D ongoing) OR complete specification (S.10 - full description, claims, abstract, drawings). Claims maximise scope while navigating S.3. Pharma: enhanced efficacy (S.3(d)). Software: CRI-compliant technical effect claims (S.3(k)).</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Claims drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.3 navigated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Best method disclosed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DRAFT</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Claims + Description</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Abstract + Drawings</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">S.3 Navigation</text></svg></div>
            <span class="illustration-label">Specification Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Filing at Patent Office Mumbai</h3>
        <p class="step-description">Forms 1/2/3/5/26 filed online at ipindiaonline.gov.in or physically at Patent Office Mumbai, Antop Hill (15 min from Marine Lines). Application number and priority date secured. Govt fee: Rs 1,600 (startup) to Rs 8,000 (entity).</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed at Antop Hill</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Priority date secured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Application number issued</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FILE</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Patent Office Mumbai</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Antop Hill</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Priority Secured</text></svg></div>
            <span class="illustration-label">Patent Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Publication</h3>
        <p class="step-description">Automatic at 18 months from filing/priority (S.11A). Early publication via Form 9 if needed. Application visible in Patent Journal and public search. Third parties can now see the application.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Published in Journal</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Application searchable</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Public notification</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PUBLISH</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">18 Months</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Patent Journal</text></svg></div>
            <span class="illustration-label">Published</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Request for Examination (RFE)</h3>
        <p class="step-description">Form 18 filed within 48 months of filing/priority. Without RFE = application NEVER examined = lapses. Fee: Rs 4,000 (startup) to Rs 20,000 (entity). Startups: expedited examination filed simultaneously - examined on priority (3-5 months).</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFE filed in time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Examination triggered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Startup expedited if eligible</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFE</text><text x="60" y="48" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Form 18</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Within 48 Months</text></svg></div>
            <span class="illustration-label">Under Examination</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">FER Response + Prosecution</h3>
        <p class="step-description">Controller issues First Examination Report with objections (prior art, S.3, claim scope, formal). 6-month response window + 3-month extension (HARD deadline - missed = abandoned). Patron prepares comprehensive response with claim amendments and legal arguments.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FER objections addressed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Claims amended</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.3 arguments made</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FER RESPONSE</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">6+3 Month Deadline</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Claim Amendments</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Legal Arguments</text></svg></div>
            <span class="illustration-label">Objections Cleared</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Grant + Certificate</h3>
        <p class="step-description">Patent granted (S.43). Published in Patent Journal. Certificate of Grant issued. 20-year exclusive rights activated (S.48: prevent making, using, selling, importing). Pre/post-grant opposition handled if any.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Patent granted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20-year rights active</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">GRANTED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">20 Years</text></svg></div>
            <span class="illustration-label">Patent Granted</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Renewal + Enforcement</h3>
        <p class="step-description">Annual renewal fees from year 3 (Rs 800-20,000/year). Non-payment = patent lapses. Bombay HC for infringement (S.104). JNPT customs for infringing imports. Compulsory licence monitoring (S.84 - 3 years after grant). Patron manages renewal calendar.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Renewals tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Enforcement ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portfolio managed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MAINTAIN</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Annual Renewal</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Bombay HC</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Enforcement</text></svg></div>
            <span class="illustration-label">Patent Maintained</span>
            <span class="step-number-large">08</span>
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
            <h2 class="section-title">Documents Required for Patent Registration</h2>
            <div class="content-text">
                
                <ul><li><strong>Form 1:</strong> Application for Grant of Patent. Applicant details, inventor details, title, address for service.</li><li><strong>Form 2:</strong> Provisional or Complete Specification. Description, claims, abstract, drawings.</li><li><strong>Form 3:</strong> Statement and Undertaking (S.8). Foreign application details if any.</li><li><strong>Form 5:</strong> Declaration of Inventorship. True and first inventor declaration.</li><li><strong>Form 26:</strong> Power of Attorney. If filed through patent agent.</li><li><strong>Proof of Right:</strong> Assignment deed if applicant is not inventor; employer IP agreement if company filing.</li><li><strong>Priority Document:</strong> If claiming convention priority from foreign filing.</li><li><strong>DPIIT Startup Recognition:</strong> If seeking expedited examination and 80% fee reduction.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Critical Deadlines:</strong> Provisional to complete: 12 months (miss = abandoned). RFE: 48 months (miss = never examined). FER response: 6+3 months (miss = abandoned). Renewal: annual from year 3 (miss = lapsed). Every deadline is hard - Patron tracks all deadlines for every client application.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Patent Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>S.3(d) Pharma Rejections</td><td>New form of known substance without enhanced efficacy. New salts, polymorphs, formulations face S.3(d). Novartis v. UOI 2013 SC: efficacy = therapeutic efficacy</td><td>Claims with enhanced efficacy data built in. Therapeutic outcome demonstrated not just bioavailability. S.3(d)-compliant FER responses. Mumbai pharma expertise</td></tr>
                        <tr><td>S.3(k) Software Challenges</td><td>Computer programmes per se not patentable. Pure algorithms, business methods, mathematical methods rejected</td><td>CRI Guidelines 2017 compliant: technical effect + hardware integration. Claims as method/system/device. Not 'software' or 'algorithm'. Powai/Andheri tech expertise</td></tr>
                        <tr><td>FER Deadline Missed</td><td>6+3 month hard deadline. Missed = deemed abandoned. No revival after window expires. Many individual inventors and startups lose patents this way</td><td>FER deadline tracking for all clients. Responses prepared well within window. Comprehensive objection-by-objection reply with claim amendments</td></tr>
                        <tr><td>RFE Not Filed (48 Months)</td><td>Without Request for Examination the application is NEVER examined and lapses. Some assume examination is automatic (it is not in India)</td><td>RFE tracked and filed at strategically optimal time. Form 18 + fee managed. Startup expedited examination triggered when eligible</td></tr>
                        <tr><td>Provisional Not Completed</td><td>Complete specification must follow provisional within 12 months. Many inventors file provisional then forget or delay. Application deemed abandoned</td><td>12-month deadline tracked. Complete specification prepared well in advance. Smooth provisional-to-complete conversion</td></tr>

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
            <h2 class="section-title">Patent Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Application Filing (Form 1)</td><td>Rs 1,600 (startup) / Rs 4,000 (small) / Rs 8,000 (entity)</td></tr>
                        <tr><td>Request for Examination (Form 18)</td><td>Rs 4,000 / Rs 10,000 / Rs 20,000</td></tr>
                        <tr><td>Early Publication (Form 9)</td><td>Rs 2,500 / Rs 6,250 / Rs 12,500</td></tr>
                        <tr><td>Renewal Year 3-6 (per year)</td><td>Rs 800 / Rs 2,000 / Rs 4,000</td></tr>
                        <tr><td>Patron: Specification Drafting</td><td>Rs 15,000 - Rs 50,000</td></tr>
                        <tr><td>Patron: FER Response</td><td>Rs 10,000 - Rs 25,000</td></tr>
                        <tr><td>Patron: Complete Prosecution</td><td>Rs 30,000 - Rs 1,00,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Patent Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20patent%20filing%20in%20Mumbai.%20Please%20share%20pricing." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patent Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Patentability + Prior Art</td><td>1-2 weeks</td></tr>
                        <tr><td>Specification Drafting</td><td>2-6 weeks</td></tr>
                        <tr><td>Filing at Patent Office Mumbai</td><td>1-3 days</td></tr>
                        <tr><td>Publication</td><td>18 months (or early)</td></tr>
                        <tr><td>RFE + Examination</td><td>Within 48 months</td></tr>
                        <tr><td>FER Response</td><td>6+3 months window</td></tr>
                        <tr><td>Grant (Standard / Startup)</td><td>24-42 months / 3-5 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Walk-in at Patron's Marine Lines, Mumbai office. Patent Office Mumbai at Antop Hill (15 minutes away). DPIIT-recognised startups: file for expedited examination at filing stage for 3-5 month grant. Public disclosure before filing destroys novelty - file provisional BEFORE any publication, conference, investor pitch, or product launch. Every deadline is hard - no extensions beyond statutory limits.</p>

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
            <h2 class="section-title">Why Choose Patron for Patent Registration in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>S.3 Navigation Expertise</h3><p>Pharma S.3(d) enhanced efficacy claims, software S.3(k)/CRI technical effect, medical S.3(i), biotech S.3(j). Mumbai's innovation sectors face these challenges daily. Patron drafts claims that navigate.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Patent Office Mumbai Proximity</h3><p>Marine Lines to Antop Hill: 15 minutes. Physical filing, hearing attendance, controller meetings. For expedited examination hearings, in-person presence matters.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Startup Patent Support</h3><p>DPIIT recognition, 80% fee reduction, expedited 3-5 month examination. Provisional-to-complete conversion. Investor-ready patent portfolio. Mumbai startup ecosystem expertise.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Complete Innovation IP</h3><p>Patent + <a href="/trademark-registration/mumbai">trademark</a> + <a href="/copyright-registration/mumbai">copyright</a> + <a href="#">design</a>. Bombay HC enforcement. JNPT customs. 10,000+ businesses, 4.9 rating.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Innovators Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Four offices: Pune, Mumbai, Delhi, Gurugram. Serving pharma companies, tech startups, biotech firms, manufacturers, research institutions, and individual inventors across Mumbai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patent Application Types Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Type</th><th>When to Use</th><th>Specification</th><th>Priority</th></tr></thead>
                    <tbody>
                        <tr><td>Provisional (S.9)</td><td>Invention in R&D; need early priority</td><td>Nature only; no claims</td><td>Filing date; complete within 12 months</td></tr>
                        <tr><td>Complete (S.10)</td><td>Invention fully developed</td><td>Full description + claims + abstract + drawings</td><td>Filing date</td></tr>
                        <tr><td>Convention (S.135)</td><td>Claiming foreign filing priority</td><td>Complete required</td><td>Foreign filing (within 12 months)</td></tr>
                        <tr><td>PCT National Phase</td><td>International PCT entering India</td><td>Complete (may need amendments)</td><td>International filing (within 31 months)</td></tr>
                        <tr><td>Divisional (S.16)</td><td>Multiple inventions in one application</td><td>Separate specification per invention</td><td>Parent application date</td></tr>

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
            <h2 class="section-title">Related Services for Mumbai Innovators</h2>
            <div class="content-text">
                
                <p>Mumbai's innovators filing patents often need complementary services:</p>
                <ul><li><a href="/patent-registration">Patent Registration (India)</a> - National overview.</li>
                    <li><a href="/trademark-registration/mumbai">Trademark Registration in Mumbai</a> - Brand/product name.</li>
                    <li><a href="/copyright-registration/mumbai">Copyright Registration in Mumbai</a> - Software code, documentation.</li>
                    <li><a href="#">Design Registration in Mumbai</a> - Product appearance.</li>
                    <li><a href="#">Company Registration in Mumbai</a> - Innovation entity.</li>
                    <li><a href="#">Startup India Registration</a> - DPIIT recognition for expedited exam.</li>
                    <li><a href="/copyright-registration-for-literary-work/mumbai">Literary Work Copyright in Mumbai</a> - Software source code.</li>
                    <li><a href="/copyright-registration-for-artistic-work/mumbai">Artistic Work Copyright in Mumbai</a> - Product design artwork.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Patent Registration</h2>
            <div class="content-text">
                
                <p><strong>Section 2 - Patentability Requirements:</strong></p>
                <ul><li>S.2(1)(j) Novelty: not anticipated by prior art worldwide. S.2(1)(ja) Inventive Step: non-obvious technical advance. S.2(1)(ac) Industrial Applicability.</li></ul>
                <p style="margin-top:16px;"><strong>Section 3 - Non-Patentable (Key for Mumbai):</strong></p>
                <ul><li>S.3(d) Pharma: new form without enhanced efficacy (Novartis v. UOI 2013 SC).</li>
                    <li>S.3(k) Software: computer programmes per se (CRI Guidelines 2017 for technical effect).</li>
                    <li>S.3(i) Medical treatment. S.3(j) Plants/animals. S.3(e) Discovery. S.4 Atomic energy.</li></ul>
                <p style="margin-top:16px;"><strong>S.48 Rights / S.53 Term:</strong></p>
                <ul><li>Product: prevent making, using, selling, importing. Process: prevent using process and product thereof. 20 years from filing.</li></ul>
                <p style="margin-top:16px;"><strong>S.84 Compulsory Licence:</strong> After 3 years if not commercially worked. Bayer v. Natco (2012).</p>
                <p style="margin-top:16px;"><strong>Key Cases:</strong> Novartis v. UOI (2013 SC - S.3(d)). Bayer v. Natco (2012 - compulsory licence). Roche v. Cipla (Bombay HC). Ferid Allani (2019 - CRI/software).</p>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://ipindiaonline.gov.in" target="_blank" rel="noopener">IPO India Online</a> | <a href="https://ipindia.gov.in" target="_blank" rel="noopener">IP India</a> | <a href="https://bombayhighcourt.nic.in" target="_blank" rel="noopener">Bombay HC</a> | <a href="https://indiacode.nic.in" target="_blank" rel="noopener">India Code</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Patent Registration in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about patent registration process, costs, timeline, patentable inventions, provisional vs complete specification, and startup expedited examination.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Patent Registration',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to register a patent in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Conduct patentability assessment for novelty inventive step and industrial applicability with prior art search. Draft provisional or complete specification. File at Patent Office Mumbai Antop Hill using Forms 1 2 3 5 26 online at ipindiaonline.gov.in. Published after 18 months. File Request for Examination Form 18 within 48 months. Respond to First Examination Report within 6 months. Patent granted when objections cleared. Total 24-42 months or 3-5 months for DPIIT startups.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the cost of patent registration in India?</h3>
                        <div class="faq-expanded__a"><p>Government fees Rs 1,600 natural person or startup to Rs 8,000 entity for filing. RFE Rs 4,000 to Rs 20,000. Annual renewal from year 3 Rs 800 to Rs 20,000 per year. DPIIT startups get 80 percent fee reduction. Professional fees Rs 15,000 to Rs 50,000 for specification drafting plus Rs 10,000 to Rs 25,000 for FER response. Total Rs 20,000 to Rs 1,00,000 plus depending on complexity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does it take to get a patent in India?</h3>
                        <div class="faq-expanded__a"><p>Average 24-42 months from filing to grant. Key milestones: publication at 18 months, examination after RFE filing 1-24 months, FER response window 6 months plus 3 month extension. DPIIT startups with expedited examination 3-5 months from filing to grant. Timeline depends on invention complexity examiner workload specification quality and FER responsiveness.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What inventions can be patented in India?</h3>
                        <div class="faq-expanded__a"><p>Any product or process that is novel involves inventive step and is industrially applicable except Section 3 and 4 exclusions. Key non-patentable: new forms of known substances without enhanced efficacy S.3(d) for pharma, computer programmes per se S.3(k) for software but technical implementations may qualify, methods of medical treatment S.3(i), plants and animals S.3(j), mere discoveries S.3(e), atomic energy S.4.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between provisional and complete patent specification?</h3>
                        <div class="faq-expanded__a"><p>Provisional S.9 filed when invention in development stage describes nature without detailed claims secures early priority date. Complete specification must follow within 12 months or application abandoned. Complete S.10 is the full document with detailed description best method claims defining protection scope abstract and drawings. Most startups file provisional first to secure priority then convert within 12 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can startups get expedited patent examination?</h3>
                        <div class="faq-expanded__a"><p>Yes. DPIIT-recognised startups eligible for expedited examination under Patents Rules. Application examined on priority basis reducing timeline from 24-42 months to 3-5 months. Also receive 80 percent fee reduction. Entity must be recognised by DPIIT under Startup India. Application for expedited examination filed along with Request for Examination. Patron assists with DPIIT recognition and files expedited examination.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Patent kaise register hota hai Mumbai mein?</strong> Pehle check karo: novel hai, inventive step hai, industrial use hai, aur S.3 mein excluded nahi hai. Prior art search karo. Specification draft karo. Patent Office Mumbai (Antop Hill) mein file karo. 18 mahine mein publish hota hai. Form 18 se examination request (48 mahine ke andar). FER reply 6+3 mahine mein. Grant: 24-42 mahine (startup 3-5 mahine).</p>
                <p><strong>Software ka patent milta hai?</strong> S.3(k): 'computer programme per se' nahi milega. Lekin agar software koi technical effect produce karta hai ya hardware ke saath kaam karta hai toh mil sakta hai - CRI guidelines ke under. Claims device/system/method ke roop mein draft karo.</p>
                <p><strong>Startup ko fast patent milta hai?</strong> Haan! DPIIT-recognised startup ko expedited examination milta hai - 3-5 mahine mein grant (normal 24-42 mahine). 80% fee reduction bhi. Patron DPIIT recognition + expedited filing dono handle karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Before You Disclose - Novelty is Everything</h2>
            <div class="content-text">
                
                <p>Public disclosure (conference, product launch, investor pitch) before filing DESTROYS novelty - your invention becomes unpatentable. Provisional specification secures priority for only 12 months. RFE must be within 48 months. FER response has a hard 6+3 month deadline. Competitors can file the same invention if you delay. Every day without filing is a day your innovation is unprotected.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20patent%20registration%20in%20Mumbai.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Patent Your Innovation in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Patent registration grants 20 years of exclusive rights at Patent Office Mumbai (Antop Hill). Novelty, inventive step, and industrial applicability are the three requirements. S.3 exclusions (pharma S.3(d), software S.3(k)) require specialised claim drafting.</p>
                <p style="color:rgba(255,255,255,0.9);">Mumbai's innovation landscape - pharma, tech, biotech, manufacturing, fintech, IIT Bombay, BARC - generates India's highest patent filing volume. DPIIT startups get 3-5 month expedited examination with 80% fee reduction.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron delivers S.3-navigating specification drafting, Patent Office Mumbai filing, FER prosecution, and Bombay HC enforcement from Marine Lines (15 min from Antop Hill). 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20patent%20filing%20in%20Mumbai.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Patent%20Registration%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20patent%20registration%20in%20Mumbai.%0A%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patent Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides patent registration and innovation IP services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Patent registration and innovation IP</div>
                <div class="pa-city-grid">
                    <a href="/patent-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/patent-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/patent-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">End-to-end innovation IP and compliance</div>
                <div class="pa-cross-grid">
                    <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/copyright-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Design Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup India</div><div class="pa-card-sub">DPIIT Recognition</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
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
            <p>This page covers patent registration in Mumbai. Content reviewed half-yearly (Freshness Tier 2) reflecting Patents Rules amendments, fee changes, CRI guidelines, startup policies, and Patent Office Mumbai processing developments.</p>
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
