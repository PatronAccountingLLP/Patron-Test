
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>FSSAI Registration in Pune - Process, Fees & FoSCoS</title>
    <meta name="description" content="CA-assisted FSSAI registration in Pune. Basic, State, Central food licence via FoSCoS. Serving FC Road, Koregaon Park, Hinjewadi food businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/fssai-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FSSAI Registration in Pune - Process, Fees & FoSCoS">
    <meta property="og:description" content="CA-assisted FSSAI registration in Pune. Basic, State, Central food licence via FoSCoS. Serving FC Road, Koregaon Park, Hinjewadi food businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/fssai-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FSSAI Registration in Pune - Process, Fees & FoSCoS">
    <meta name="twitter:description" content="CA-assisted FSSAI registration in Pune. Basic, State, Central food licence via FoSCoS. Serving FC Road, Koregaon Park, Hinjewadi food businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FSSAI Registration in Pune",
      "description": "CA-assisted FSSAI registration in Pune. Basic, State, Central food licence via FoSCoS. Serving FC Road, Koregaon Park, Hinjewadi food businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/fssai-registration/pune",
      "serviceType": "FSSAI Registration in Pune",
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
        "url": "https://www.patronaccounting.com/fssai-registration/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "2499",
          "maxPrice": "9999",
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
          "name": "FSSAI Registration in Pune",
          "item": "https://www.patronaccounting.com/fssai-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which authority handles FSSAI registration in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FSSAI registration is filed online through the FoSCoS portal (foscos.fssai.gov.in). For State Licences, the Maharashtra Food and Drug Administration (FDA) assigns Food Safety Officers from the Pune Municipal Corporation area to conduct premises inspections. The Designated Officer, Pune District oversees licence approvals. Patron handles all FoSCoS filings and FDA coordination from our Pune office."
          }
        },
        {
          "@type": "Question",
          "name": "How much does FSSAI registration cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fees are Rs 100/year for Basic Registration, Rs 2,000-5,000/year for State Licence, and Rs 7,500/year for Central Licence. Patron's all-inclusive packages start from Rs 2,499 (Basic), Rs 4,999 (State), and Rs 9,999 (Central) covering document preparation, FoSCoS filing, inspection coordination, and CA professional charges."
          }
        },
        {
          "@type": "Question",
          "name": "How long does FSSAI registration take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Basic Registration takes approximately 7 working days. State Licence takes 15-30 working days including Maharashtra FDA inspection. Central Licence takes 30-60 working days. Delays typically occur due to incomplete documents, incorrect licence category selection, or geo-tagged photo mismatches."
          }
        },
        {
          "@type": "Question",
          "name": "Is FSSAI mandatory for home-based food businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under the Food Safety and Standards Act, 2006, every food business operator - including home-based kitchens, home bakers, tiffin services, and weekend food stall operators - must obtain at least FSSAI Basic Registration before commencing operations. The Basic Registration costs only Rs 100/year in government fees and does not require a premises inspection."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for not having FSSAI licence?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 58 of the Food Safety and Standards Act, operating without FSSAI registration attracts a penalty of up to Rs 5 lakh. Under Section 63, manufacturing or selling unsafe food can lead to imprisonment of up to 6 months along with a fine of up to Rs 1 lakh. Late renewal attracts Rs 100/day penalty."
          }
        },
        {
          "@type": "Question",
          "name": "Can I sell on Swiggy/Zomato without FSSAI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. All food delivery platforms require a valid FSSAI licence number for onboarding. In 2026, the minimum requirement for food delivery platform sellers is a State Licence - Basic Registration is no longer accepted even if your turnover is below Rs 12 lakh. Patron ensures you have the correct licence category before platform onboarding."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between FSSAI registration and licence?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FSSAI registration (Basic) is for small food businesses with turnover below Rs 12 lakh - simpler, cheaper (Rs 100/year), no inspection. FSSAI licence (State or Central) is for larger businesses with detailed documentation, premises inspection, and FSMS compliance. The 14-digit number starts with '2' for registration and '1' for licences."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get FSSAI registration online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The entire FSSAI registration process is online through the FoSCoS portal. Basic Registration is fully digital with no inspection. State and Central Licences are filed online but require a physical premises inspection by a Food Safety Officer. Patron handles online filing and coordinates the inspection. Quick Answers Ghar se food business ke liye FSSAI chahiye kya? Haan. Home kitchen, tiffin service, cake business - sabke liye Basic FSSAI Registration zaroori hai. Government fee sirf Rs 100/year hai. Swiggy/Zomato pe bechne ke liye kaunsa licence chahiye? 2026 se State Licence zaroori hai Swiggy/Zomato pe list hone ke liye. Basic Registration se ab platform onboarding nahi hoti. FSSAI licence kitne saal ke liye milta hai? 1 se 5 saal tak. Hamesha 5 saal ka lo - renewal ka jhanjhat nahi rahta aur per-year cost kam padti hai."
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
                        FSSAI Registration in Pune: Food Licence for Restaurants, Manufacturers, and Cloud Kitchens
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, food business address proof, photo, product list, water test report (for manufacturing)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Basic Rs 2,499 | State Licence Rs 4,999 | Central Licence Rs 9,999 (all-inclusive with CA charges)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All food businesses - restaurants, cloud kitchens, manufacturers, caterers, vendors, home kitchens</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Basic 7 days | State Licence 15-30 days | Central Licence 30-60 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Visit our Pune office or get started online</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FSSAI Registration in Pune',
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
    'ctaText'    => 'CA-managed FSSAI registration with Maharashtra FDA coordination and ongoing compliance for Pune food businesses.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is FSSAI</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Licence Types</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Registration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FSSAI Registration in Pune Services at a Glance</strong></p>
                    <p>FSSAI registration is a mandatory food safety certification under the Food Safety and Standards Act, 2006 for every food business operator (FBO) in India. In Pune, all food businesses - from misal pav outlets on FC Road to cloud kitchens in Magarpatta, IT park canteens in Hinjewadi, and food manufacturers in MIDC Bhosari - must obtain a 14-digit FSSAI number through the FoSCoS portal (foscos.fssai.gov.in). The licence type depends on annual turnover: Basic Registration (under Rs 12 lakh), State Licence (Rs 12 lakh to Rs 20 crore), or Central Licence (above Rs 20 crore).</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Act</td><td>Food Safety and Standards Act, 2006</td></tr><tr><td>Applicable To</td><td>All food businesses - restaurants, cloud kitchens, manufacturers, caterers, vendors, home kitchens</td></tr><tr><td>Licence Types</td><td>Basic (< Rs 12L) | State (Rs 12L-20Cr) | Central (> Rs 20Cr)</td></tr><tr><td>Timeline</td><td>Basic: 7 days | State: 15-30 days | Central: 30-60 days</td></tr><tr><td>Cost (Govt Fee)</td><td>Basic: Rs 100/year | State: Rs 2,000-5,000/year | Central: Rs 7,500/year</td></tr><tr><td>Authority</td><td>FSSAI via FoSCoS portal | Maharashtra FDA for State licence inspections</td></tr><tr><td>Penalty</td><td>Up to Rs 5 lakh fine + 6 months imprisonment for operating without licence</td></tr></tbody></table></div></p>
                </div>
                <p>Pune's food industry spans from heritage eateries on FC Road and Sadashiv Peth to modern cloud kitchens in Kharadi and Magarpatta, artisanal bakeries in Koregaon Park and Baner, large-scale food processing units in MIDC Bhosari and Chakan, and IT park canteens serving thousands of employees in Hinjewadi IT Park. The Maharashtra Food and Drug Administration (FDA) acts as the State food safety authority. The 2026 FoSCoS portal updates now require geo-tagged premises photos, installed capacity verification for manufacturers, and a mandatory State licence for Swiggy/Zomato sellers. Learn more about <a href="/fssai-registration">FSSAI Registration across India</a>.</p>
                <p>Patron Accounting handles FSSAI registration from our Pune office at RTC Silver, Wagholi - from FoSCoS application filing to Maharashtra FDA coordination, inspection preparation, and ongoing annual return filing. After FSSAI, you may also need <a href="/gst-registration">GST Registration</a> and <a href="/shop-act-registration">Shop Act Registration</a> for a complete food business launch.</p>
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
                <h2 class="section-title">What Is FSSAI Registration</h2>
                <div class="content-text what-is-definition">
                    
                    <p>FSSAI registration is a mandatory food safety certification issued by the Food Safety and Standards Authority of India under the Food Safety and Standards Act, 2006, assigning a 14-digit identification number to every food business operator for manufacturing, processing, storage, distribution, or sale of food.</p><p>For Pune's diverse food economy - where FC Road serves lakhs of students and professionals daily, Koregaon Park's restaurants attract a cosmopolitan clientele, and Hinjewadi's IT parks operate multi-thousand-employee canteens - FSSAI registration is the baseline legal requirement. The 14-digit number confirms that the food business meets safety standards set by FSSAI and is subject to periodic inspection by the Maharashtra FDA's Food Safety Officers.</p><p>FSSAI operates through the FoSCoS (Food Safety Compliance System) portal at <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">foscos.fssai.gov.in</a>, where all applications, renewals, and annual returns are filed electronically. In 2026, FSSAI introduced stricter compliance checks including geo-tagged premises photos, installed capacity verification for manufacturing units, mandatory FSMS documentation for State and Central licensees, and a requirement for all businesses selling through food delivery platforms to hold at least a State licence.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FSSAI Registration in Pune:</strong></p>
                    <p><strong>FoSCoS:</strong> Food Safety Compliance System - the official FSSAI portal (foscos.fssai.gov.in) for all food licence applications, renewals, and annual returns.</p><p><strong>Maharashtra FDA:</strong> Food and Drug Administration - the State food safety authority overseeing State licence approvals and inspections through Food Safety Officers assigned to Pune Municipal Corporation area.</p><p><strong>Basic Registration (Form A):</strong> For food businesses with turnover below Rs 12 lakh. Government fee Rs 100/year. No inspection required.</p><p><strong>State Licence (Form B):</strong> For businesses with turnover Rs 12 lakh to Rs 20 crore. Requires FDA inspection. Mandatory for Swiggy/Zomato sellers from 2026.</p><p><strong>Central Licence (Form B):</strong> For businesses with turnover above Rs 20 crore or multi-state operations. Requires FSSAI Central inspection.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Food Safety</span>
                        <strong>FSSAI Licence</strong>
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
            <h2 class="section-title">Who Needs FSSAI Registration in Pune</h2>
            <div class="content-text">
                
                <p><strong>Restaurant and Cafe Owners (FC Road, Koregaon Park, Baner, Viman Nagar):</strong> Whether a small misal pav outlet on Sadashiv Peth or a fine-dining restaurant in Koregaon Park, FSSAI registration or licence is mandatory. Under the 2026 updates, any restaurant listed on Swiggy or Zomato must hold at least a State Licence regardless of turnover.</p><p><strong>Cloud Kitchen Operators (Magarpatta, Kharadi, Wakad):</strong> Cloud kitchens preparing food exclusively for online delivery through Swiggy, Zomato, or own platforms. Require FSSAI State Licence with valid layout plan, equipment list, and water testing report. FoSCoS now mandates geo-tagged photos.</p><p><strong>Food Manufacturers (MIDC Bhosari, Chakan, Pimpri-Chinchwad):</strong> Packaged food, dairy, bakery, spices, or beverages. Units exceeding 100 kg/day production need State or Central Licence. Central Licence mandatory for turnover above Rs 20 crore or import/export.</p><p><strong>IT Park Canteens (Hinjewadi, Rajiv Gandhi Infotech Park, Kharadi):</strong> Multi-thousand-employee canteens requiring State Licence with FSMS documentation, food handler training certificates, and water analysis reports.</p><p><strong>Home-Based Food Businesses:</strong> Home bakers, tiffin services, and weekend food stall operators across Pune must obtain FSSAI Basic Registration (Form A) before commencing operations. Government fee only Rs 100/year.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">10 FSSAI Registration Services Included in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>FSSAI Basic Registration (Form A)</td><td>Complete FoSCoS filing for small food businesses with turnover below Rs 12 lakh. Document preparation, FBO self-declaration, certificate download. Govt fee: Rs 100/year.</td></tr><tr><td>FSSAI State Licence (Form B)</td><td>Application with layout plan, equipment list, FSMS documentation, and Maharashtra FDA coordination for FSO inspection. Govt fee: Rs 2,000-5,000/year.</td></tr><tr><td>FSSAI Central Licence (Form B)</td><td>Comprehensive FSMS plan, water testing, food testing lab report, and FSSAI head office liaison. Govt fee: Rs 7,500/year.</td></tr><tr><td>Maharashtra Shop Act Registration</td><td>Maharashtra Shops & Establishments registration for food business premises - required as supporting document for State and Central licences.</td></tr><tr><td>GST Registration (if applicable)</td><td>GST filing with Commissionerate Pune for food businesses exceeding turnover threshold. FSSAI number linked with GST profile.</td></tr><tr><td>Water Testing Coordination</td><td>Liaison with NABL-accredited Pune laboratories for water analysis reports required for manufacturing and processing units.</td></tr><tr><td>Food Handler Training (FoSTaC)</td><td>Guidance on FSSAI Training and Certification for food handlers - mandatory for State and Central licence holders.</td></tr><tr><td>FSSAI Annual Return Filing</td><td>Annual returns on FoSCoS portal for State and Central licence holders.</td></tr><tr><td>FSSAI Licence Renewal</td><td>Timely renewal filing 30 days before expiry to avoid Rs 100/day late penalty. Licence valid 1-5 years.</td></tr><tr><td>Post-Registration Compliance</td><td>Inspection preparation, documentation maintenance, product label review (FSSAI logo + 14-digit number), and regulatory update advisories.</td></tr>

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
            <h2 class="section-title">6-Step FSSAI Registration Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete FSSAI registration from licence type assessment to FoSCoS filing, Maharashtra FDA inspection coordination, and ongoing compliance. Applications are filed online at foscos.fssai.gov.in. Food Safety Officers under Pune Municipal Corporation conduct State licence inspections.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine the Correct Licence Type</h3><p class="step-description">Patron's CA team assesses your food business type, annual turnover, production capacity, and operational scope. FC Road restaurants with turnover above Rs 12 lakh need State Licence. Home bakeries below Rs 12 lakh need Basic Registration. MIDC Bhosari manufacturers above Rs 20 crore need Central Licence. In 2026, Swiggy/Zomato sellers require at least State Licence.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Turnover assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2026 rules applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="18" width="25" height="20" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="38" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Basic</text><rect x="55" y="18" width="25" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="68" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">State</text><rect x="25" y="45" width="55" height="18" rx="3" fill="#14365F" opacity="0.08"/><text x="52" y="57" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Central</text></svg></div><span class="illustration-label">Type Selected</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Documents and Premises</h3><p class="step-description">Compile PAN, Aadhaar, food business address proof (rent agreement + utility bill), food product list, layout plan (for State/Central), equipment list with installed capacity (for manufacturers), water analysis report from NABL lab, geo-tagged premises photographs (mandatory 2026), and FSMS documentation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Geo-tagged photos</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Water test done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="48" x2="72" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="60" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 60l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Application on FoSCoS Portal</h3><p class="step-description">Submit application on foscos.fssai.gov.in. Basic Registration uses Form A - self-declaration based, no inspection. State and Central Licence use Form B with full supporting documents, layout plan, water test report, and FSMS plan. Pay government fee online. Application receives a tracking number for status monitoring.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FoSCoS filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tracking number</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">foscos.fssai.gov.in</text><line x1="25" y1="35" x2="85" y2="35" stroke="#F5A623" stroke-width="2"/><line x1="25" y1="48" x2="78" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Maharashtra FDA Inspection (State/Central)</h3><p class="step-description">For State Licence, the Maharashtra FDA assigns a Food Safety Officer from the Pune Municipal Corporation area to inspect your premises. The FSO checks hygiene standards, water quality, storage conditions, FSMS implementation, and food handler training. Patron prepares your premises and documentation before the FSO visit to minimise query-based delays.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Premises prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FDA coordination</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="32" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M53 32l5 5 9-9" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FDA Inspection</text></svg></div><span class="illustration-label">Inspected</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive FSSAI Certificate</h3><p class="step-description">14-digit FSSAI number issued on the FoSCoS portal. Download digital certificate. The FSSAI number must be displayed prominently on premises and printed on all food packaging. Number starting with '2' for Basic, '1' for State/Central licence. Patron delivers the certificate with a compliance checklist.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>14-digit FSSAI number</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Display + packaging</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">FSSAI</text><rect x="25" y="32" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="44" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">14-Digit Number</text><text x="60" y="62" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Certificate Ready</text></svg></div><span class="illustration-label">Certified</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Ongoing Compliance and Renewal</h3><p class="step-description">Annual return filing on FoSCoS for State and Central licence holders. Licence renewal filed 30 days before expiry to avoid Rs 100/day late penalty. Inspection preparation for surprise FDA visits. Product label compliance review. Regulatory update advisories for 2026 FoSCoS changes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual returns filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Renewal tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="10" width="35" height="30" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="22" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Returns</text><rect x="45" y="10" width="30" height="30" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Renew</text><rect x="80" y="10" width="35" height="30" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="98" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Label</text><rect x="20" y="50" width="80" height="20" rx="3" fill="#14365F" opacity="0.06"/><text x="60" y="63" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Compliance Active</text></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FSSAI Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li>PAN card and Aadhaar card of the Food Business Operator / proprietor / authorised signatory</li><li>Passport-size photograph</li><li>Business address proof: rent agreement + utility bill (electricity/water) for the Pune premises</li><li>Food product list with categories</li><li>Layout plan of premises showing kitchen area, storage, preparation zone (State/Central licence)</li><li>Equipment and machinery list with installed production capacity (for manufacturers)</li><li>Water analysis report from NABL-accredited laboratory (for manufacturing and processing units)</li><li>Geo-tagged photographs of premises showing entrance, kitchen, storage areas (mandatory 2026)</li><li>FSMS (Food Safety Management System) documentation (State/Central licence)</li><li>Food handler training certificates - FoSTaC (for State/Central licence)</li><li>Partnership deed / Certificate of Incorporation / LLP deed (as applicable)</li><li>Maharashtra Shop Act Registration (for food premises)</li><li>GST Registration Certificate (if applicable)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Pune-Specific Tip:</strong> Restaurants on FC Road and Koregaon Park must provide the PMC trade licence or NOC alongside FSSAI documents. Food manufacturers in MIDC Bhosari and Chakan must include the MIDC allotment letter or factory licence. Cloud kitchens must provide commercial kitchen lease agreement (residential addresses not accepted for State licence). Home-based businesses need only a self-declaration confirming the home address as place of business for Basic Registration.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common FSSAI Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Wrong Licence Category Selection</td><td>Applying for Basic Registration when turnover or capacity requires State Licence. 2026 rules require State Licence for Swiggy/Zomato sellers.</td><td>CA assesses turnover, installed capacity, and 2026 rules to determine correct category before filing</td></tr><tr><td>FDA Inspection Delays</td><td>Maharashtra FDA Food Safety Officers may take 15-30 days. Queries on hygiene, water quality, or FSMS documentation cause further delays.</td><td>Prepare premises and documentation before inspection. Coordinate with FSO to minimise query-based delays.</td></tr><tr><td>Geo-Tagged Photo Rejections (2026)</td><td>GPS coordinates must match declared address within 50-metre radius. Affects cloud kitchens in co-working spaces.</td><td>Ensure geo-tagged photos are captured correctly at actual premises before filing on FoSCoS</td></tr><tr><td>Licence Renewal Lapses</td><td>Late renewal attracts Rs 100/day penalty. Many FC Road and Koregaon Park restaurants miss deadlines.</td><td>Automated renewal reminders and proactive renewal filing 45 days before expiry. Zero late penalties.</td></tr><tr><td>Missing Annual Return Filing</td><td>State and Central licence holders must file annual returns. Non-filing leads to licence suspension.</td><td>File annual returns as part of ongoing registration package. Proactive deadline tracking.</td></tr>

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
            <h2 class="section-title">FSSAI Registration Fees in Pune - 2026 Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>FSSAI Basic Registration</td><td>Govt: Rs 100/year | Patron: Rs 2,499 (all-inclusive)</td></tr><tr><td>FSSAI State Licence</td><td>Govt: Rs 2,000-5,000/year | Patron: Rs 4,999-7,999</td></tr><tr><td>FSSAI Central Licence</td><td>Govt: Rs 7,500/year | Patron: Rs 9,999-14,999</td></tr><tr><td>Annual Return Filing (State/Central)</td><td>Patron: Rs 999-1,999/year</td></tr><tr><td>Shop Act Registration (add-on)</td><td>Patron: Rs 1,999</td></tr><tr><td>GST Registration (add-on)</td><td>Patron: Rs 1,999</td></tr><tr><td>Water Testing (if needed)</td><td>Rs 2,000-5,000 (lab charges)</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FSSAI Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Registration Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Preparation</td><td>1-5 days (varies by licence type)</td></tr><tr><td>FoSCoS Application Filing</td><td>1-2 days</td></tr><tr><td>Verification/Inspection (Basic: none; State: FDA FSO; Central: FSSAI)</td><td>0-30 days</td></tr><tr><td>Certificate Issuance</td><td>3-20 days</td></tr><tr><td><strong>Total: Basic</strong></td><td><strong>7 working days</strong></td></tr><tr><td><strong>Total: State Licence</strong></td><td><strong>15-30 working days</strong></td></tr><tr><td><strong>Total: Central Licence</strong></td><td><strong>30-60 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Patron's turnaround: Basic Registration in 7 working days. State Licence in 15-25 working days (including FDA inspection). Annual returns filed before deadline. Renewal filed 45 days before expiry. Zero late penalties. We recommend selecting 5-year validity to minimise renewal hassles.</p>

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
            <h2 class="section-title">Why Choose Patron for FSSAI Registration in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office Near All Food Zones</h3><p class="feature-text">Patron operates from RTC Silver, Wagholi - within reach of FC Road, Koregaon Park, Hinjewadi IT Park, and MIDC Bhosari. Our team has direct experience with the Designated Officer, Pune District and the Food Safety Officers under Pune Municipal Corporation.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Complete Food Business Launch Package</h3><p class="feature-text">FSSAI registration bundled with GST registration, Maharashtra Shop Act licence, and accounting setup. Your food business is legally operational from day one. Unlike online portals that stop at the certificate.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Maharashtra FDA Inspection Coordination</h3><p class="feature-text">We prepare your premises and documentation before the Food Safety Officer visits. Hygiene standards, water quality, FSMS implementation, and food handler training verified in advance to minimise query-based delays.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Ongoing Compliance and Renewal</h3><p class="feature-text">Annual return filing, licence renewal 45 days before expiry, food labelling compliance review, and regulatory update advisories for 2026 FoSCoS changes. Zero late penalties.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Pune food businesses with local office presence and a pan-India CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Basic vs State vs Central Licence - Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Basic Registration</th><th>State Licence</th><th>Central Licence</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover</td><td>Below Rs 12 lakh/year</td><td>Rs 12 lakh - Rs 20 crore/year</td><td>Above Rs 20 crore/year</td></tr><tr><td>Government Fee</td><td>Rs 100/year</td><td>Rs 2,000-5,000/year</td><td>Rs 7,500/year</td></tr><tr><td>Form</td><td>Form A</td><td>Form B</td><td>Form B</td></tr><tr><td>Inspection</td><td>Not required</td><td>Maharashtra FDA FSO</td><td>FSSAI Central</td></tr><tr><td>FSMS Plan</td><td>Not required</td><td>Required</td><td>Required</td></tr><tr><td>Swiggy/Zomato (2026)</td><td>Not eligible</td><td>Eligible</td><td>Eligible</td></tr><tr><td>Best For</td><td>Home kitchens, small vendors, tiffin services</td><td>Restaurants, cloud kitchens, mid-size manufacturers</td><td>Large manufacturers, importers, exporters, multi-state operators</td></tr>

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
            <h2 class="section-title">Related Food Business Services in Pune</h2>
            <div class="content-text">
                
                <ul><li><a href="/fssai-registration">FSSAI Registration in India</a> - Our national FSSAI registration service</li><li><a href="/gst-registration">GST Registration</a> - Mandatory for food businesses above turnover threshold</li><li><a href="/shop-act-registration">Shop Act Registration</a> - Maharashtra Shops & Establishments registration for food premises</li><li><a href="/trademark-registration">Trademark Registration</a> - Brand protection for food products and restaurant names</li><li><a href="/gst-returns">GST Return Filing</a> - Monthly and annual GST compliance for food businesses</li><li><a href="/accounting-services">Accounting Services</a> - Complete accounting for restaurants and food businesses</li></ul><p>Patron recommends selecting 5-year validity at the time of FSSAI application to reduce per-year cost and avoid annual renewal hassles. Late renewal penalty: Rs 100/day.</p>

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
                
                <p><strong>Governing Provisions:</strong></p><ul><li>Food Safety and Standards Act, 2006 - Section 31 (licence mandatory), Section 58 (penalty: up to Rs 5 lakh), Section 63 (unsafe food: up to Rs 1 lakh + 6 months imprisonment)</li><li>FSS (Licensing and Registration) Regulations, 2011 - Registration requirements, eligibility criteria, cancellation provisions</li><li>FSS (Packaging and Labelling) Regulations, 2011 - Mandatory FSSAI logo and 14-digit number on all packaged food</li><li>Maharashtra FDA - State authority for State licence inspections and enforcement in Pune</li><li>Maharashtra Shops & Establishments Act, 2017 - Registration required for all food premises</li></ul><p><strong>2026 Updates:</strong> Geo-tagged premises photos mandatory | Installed capacity verification for manufacturers | E-commerce mandatory State licence floor (Swiggy/Zomato) | Draft amendment on daily production record-keeping</p><p><strong>Key Portal:</strong> <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS (foscos.fssai.gov.in)</a> | <a href="https://fssai.gov.in" target="_blank" rel="noopener">FSSAI (fssai.gov.in)</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - FSSAI Registration in Pune</h2>
                    <p class="faq-expanded__lead">Answers to common questions about FSSAI food licence registration in Pune. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FSSAI Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which authority handles FSSAI registration in Pune?</h3>
                        <div class="faq-expanded__a"><p>FSSAI registration is filed online through the FoSCoS portal (foscos.fssai.gov.in). For State Licences, the Maharashtra Food and Drug Administration (FDA) assigns Food Safety Officers from the Pune Municipal Corporation area to conduct premises inspections. The Designated Officer, Pune District oversees licence approvals. Patron handles all FoSCoS filings and FDA coordination from our Pune office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does FSSAI registration cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>Government fees are Rs 100/year for Basic Registration, Rs 2,000-5,000/year for State Licence, and Rs 7,500/year for Central Licence. Patron's all-inclusive packages start from Rs 2,499 (Basic), Rs 4,999 (State), and Rs 9,999 (Central) covering document preparation, FoSCoS filing, inspection coordination, and CA professional charges.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does FSSAI registration take in Pune?</h3>
                        <div class="faq-expanded__a"><p>Basic Registration takes approximately 7 working days. State Licence takes 15-30 working days including Maharashtra FDA inspection. Central Licence takes 30-60 working days. Delays typically occur due to incomplete documents, incorrect licence category selection, or geo-tagged photo mismatches.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is FSSAI mandatory for home-based food businesses?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under the Food Safety and Standards Act, 2006, every food business operator - including home-based kitchens, home bakers, tiffin services, and weekend food stall operators - must obtain at least FSSAI Basic Registration before commencing operations. The Basic Registration costs only Rs 100/year in government fees and does not require a premises inspection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not having FSSAI licence?</h3>
                        <div class="faq-expanded__a"><p>Under Section 58 of the Food Safety and Standards Act, operating without FSSAI registration attracts a penalty of up to Rs 5 lakh. Under Section 63, manufacturing or selling unsafe food can lead to imprisonment of up to 6 months along with a fine of up to Rs 1 lakh. Late renewal attracts Rs 100/day penalty.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I sell on Swiggy/Zomato without FSSAI?</h3>
                        <div class="faq-expanded__a"><p>No. All food delivery platforms require a valid FSSAI licence number for onboarding. In 2026, the minimum requirement for food delivery platform sellers is a State Licence - Basic Registration is no longer accepted even if your turnover is below Rs 12 lakh. Patron ensures you have the correct licence category before platform onboarding.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between FSSAI registration and licence?</h3>
                        <div class="faq-expanded__a"><p>FSSAI registration (Basic) is for small food businesses with turnover below Rs 12 lakh - simpler, cheaper (Rs 100/year), no inspection. FSSAI licence (State or Central) is for larger businesses with detailed documentation, premises inspection, and FSMS compliance. The 14-digit number starts with '2' for registration and '1' for licences.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I get FSSAI registration online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. The entire FSSAI registration process is online through the FoSCoS portal. Basic Registration is fully digital with no inspection. State and Central Licences are filed online but require a physical premises inspection by a Food Safety Officer. Patron handles online filing and coordinates the inspection.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Ghar se food business ke liye FSSAI chahiye kya?</strong> Haan. Home kitchen, tiffin service, cake business - sabke liye Basic FSSAI Registration zaroori hai. Government fee sirf Rs 100/year hai.</p><p><strong>Swiggy/Zomato pe bechne ke liye kaunsa licence chahiye?</strong> 2026 se State Licence zaroori hai Swiggy/Zomato pe list hone ke liye. Basic Registration se ab platform onboarding nahi hoti.</p><p><strong>FSSAI licence kitne saal ke liye milta hai?</strong> 1 se 5 saal tak. Hamesha 5 saal ka lo - renewal ka jhanjhat nahi rahta aur per-year cost kam padti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rs 5 Lakh Penalty for Operating Without FSSAI - File Now</h2>
            <div class="content-text">
                
                <p>Operating a food business in Pune without FSSAI registration attracts a penalty of up to Rs 5 lakh and imprisonment of up to 6 months. Late licence renewal attracts Rs 100/day penalty. The 2026 FoSCoS updates now require all Swiggy/Zomato sellers to hold State Licence. Maharashtra FDA conducts surprise inspections in Pune - businesses without valid FSSAI face immediate closure orders.</p><p><strong>Apply for FSSAI registration before your next business day. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your FSSAI Food Licence in Pune Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">FSSAI registration in Pune is the mandatory food safety certification for every food business operator - from misal pav outlets on FC Road to cloud kitchens in Magarpatta, IT park canteens in Hinjewadi, and food manufacturers in MIDC Bhosari - under the Food Safety and Standards Act, 2006.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Pune office at RTC Silver, Wagholi serves restaurants across FC Road and Koregaon Park, cloud kitchens in Kharadi and Magarpatta, food manufacturers in MIDC Bhosari and Chakan, and home-based food businesses across Pune. With 10,000+ businesses served and direct experience in FSSAI FoSCoS filings and Maharashtra FDA coordination, Patron delivers end-to-end food licence registration with GST, Shop Act, and ongoing compliance management from one Pune office.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Registration%20Pune&body=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Registration%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers FSSAI registration in 8 major cities. Select your city below.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/fssai-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fssai-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/fssai-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/fssai-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/fssai-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/fssai-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/fssai-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end food business registration and compliance</div><div class="pa-cross-grid"><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/udyam-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Udyam Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect FSSAI regulation updates, FoSCoS portal changes, Maharashtra FDA policy changes, and fee structure revisions. The next scheduled review is June 2026.</p>
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
