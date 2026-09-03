
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Copyright Registration in Pune - Form XIV, Fees & Process</title>
    <meta name="description" content="CA-assisted copyright registration in Pune. Software, literary, artistic, musical works - all protected via Form XIV. Serving Hinjewadi, Kharadi, Baner. Call +91 945 945 6700.">
    <link rel="canonical" href="/copyright-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright Registration in Pune - Form XIV, Fees & Process">
    <meta property="og:description" content="CA-assisted copyright registration in Pune. Software, literary, artistic, musical works - all protected via Form XIV. Serving Hinjewadi, Kharadi, Baner. Call +91 945 945 6700.">
    <meta property="og:url" content="/copyright-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright Registration in Pune - Form XIV, Fees & Process">
    <meta name="twitter:description" content="CA-assisted copyright registration in Pune. Software, literary, artistic, musical works - all protected via Form XIV. Serving Hinjewadi, Kharadi, Baner. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Copyright Registration in Pune",
      "description": "CA-assisted copyright registration in Pune. Software, literary, artistic, musical works - all protected via Form XIV. Serving Hinjewadi, Kharadi, Baner. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/copyright-registration/pune",
      "serviceType": "Copyright Registration in Pune",
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
        "url": "https://www.patronaccounting.com/copyright-registration/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "500",
          "maxPrice": "5000",
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
          "name": "Copyright Registration in India: Online Process and Fees",
          "item": "https://www.patronaccounting.com/copyright-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Copyright Registration in Pune",
          "item": "https://www.patronaccounting.com/copyright-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is copyright registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Copyright registration is the process of filing Form XIV with the Registrar of Copyrights under Section 45 of the Copyright Act 1957 to create an official ownership record. The registration certificate serves as prima facie evidence in all Indian courts under Section 48."
          }
        },
        {
          "@type": "Question",
          "name": "How to register copyright in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Classify the work, prepare Form XIV, file online on copyright.gov.in with fee payment, wait 30 days mandatory objection period, respond to examination queries, receive certificate in approximately 6 months. Entirely online from Pune. Patron handles the complete process."
          }
        },
        {
          "@type": "Question",
          "name": "What is the fee for copyright registration in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Literary artistic musical works Rs 500 per work individual or Rs 2,000 per work company. Sound recordings Rs 2,000 per work. Cinematographic films Rs 5,000 per work. Software Rs 500 individual or Rs 2,000 company. Professional fees from Rs 3,999 per work."
          }
        },
        {
          "@type": "Question",
          "name": "Is copyright registration mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Copyright protection is automatic upon creation. Registration is not mandatory but provides prima facie evidence under Section 48, simplifies enforcement, strengthens IP valuation for investors, and enables statutory damages claims in infringement proceedings."
          }
        },
        {
          "@type": "Question",
          "name": "How long does copyright registration take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Copyright Office has expedited processing. Certificates now typically issued within approximately 6 months of filing, assuming no objections during the 30-day waiting period. If objections require hearing the timeline may extend. Patron monitors every application."
          }
        },
        {
          "@type": "Question",
          "name": "What works can be copyrighted in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Literary works including books, articles, software code, and website content. Artistic works including paintings, photographs, logos, and designs. Musical works, dramatic works, cinematographic films, and sound recordings. Ideas, titles, names, and short phrases cannot be copyrighted."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between copyright and trademark?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Copyright protects creative expression including content, code, designs, music, and videos under the Copyright Act 1957. Trademark protects brand identifiers including names, logos as commercial marks, and slogans under the Trade Marks Act 1999. A logo often needs both protections."
          }
        },
        {
          "@type": "Question",
          "name": "How long does copyright protection last in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Literary, dramatic, musical, and artistic works: author lifetime plus 60 years after death. Photographs, cinematographic films, sound recordings, and posthumous publications: 60 years from year of publication. Copyright is one of the longest-lasting IP protections available. Quick Answers Pune mein copyright registration kaise hota hai? copyright.gov.in pe Form XIV file karo. Fee Rs 500 (individual) ya Rs 2,000 (company) per work. 30 din waiting. ~6 mahine mein certificate. Patron Pune office se sab handle karta hai. Copyright aur trademark mein kya fark hai? Copyright creative kaam protect karta hai - content, code, design, music, video. Trademark brand naam aur logo (as brand mark) protect karta hai. Ek logo ko dono chahiye. Patron dono file karta hai. Software ka copyright India mein hota hai kya? Haan. Software code literary work hai Copyright Act mein (Section 2(o)). Source code aur object code dono copyrightable hain. SaaS companies ke liye bahut zaroori."
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
                        Copyright Registration in Pune: CA-Assisted IP Filing and Protection
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Works Covered:</span> Literary works (books, software code, website content), artistic works (logos, designs, illustrations), musical works, sound recordings, cinematographic films, dramatic works</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Government fee from Rs 500/work (individual) to Rs 5,000/work (films) + professional fees from Rs 3,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Process:</span> Online via Form XIV on copyright.gov.in; 30-day mandatory objection period; certificate within ~6 months (expedited)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Protection:</span> Author's lifetime + 60 years (literary/dramatic/musical/artistic); 60 years from publication (photos/films/sound recordings)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Copyright%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Copyright Registration',
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
    'ctaText'    => 'From SaaS companies in Hinjewadi to filmmakers at FTII - Pune creators trust Patron for copyright registration and IP protection.',
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
            <a href="#comparison-section" class="toc-btn">CR vs TM vs Patent</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Registration in Pune: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Copyright Registration Services at a Glance</strong></p>
                    <p>Copyright registration is the process of filing Form XIV with the Registrar of Copyrights under Section 45 of the Copyright Act 1957 to create an official ownership record. While copyright is automatic, registration provides prima facie evidence (Section 48) admissible in all Indian courts, simplifies enforcement, and strengthens IP valuation. Filed online on copyright.gov.in with a 30-day waiting period. Certificate in ~6 months (expedited). Pune's 1,752 SaaS companies, FTII, and thriving creator base generate vast IP benefiting from formal registration.</p>
                </div>
                <p>Pune generates copyrightable IP at extraordinary pace. The city's 1,752 SaaS companies ($2.75B funding) produce proprietary software, UIs, and documentation. FTII produces films and dramatic works. Content creators in Baner and Koregaon Park publish original content daily. Academic publishers at Symbiosis and SPPU contribute literary works. Learn more about <a href="/copyright-registration">copyright registration across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Legal Framework</td><td>Copyright Act 1957 (amended 2012); Copyright Rules 2013; Section 45; Form XIV</td></tr>
                        <tr><td>Filing Portal</td><td>copyright.gov.in (centralised online; Copyright Office, New Delhi)</td></tr>
                        <tr><td>Works Eligible</td><td>Literary (incl. software), dramatic, musical, artistic, cinematographic films, sound recordings</td></tr>
                        <tr><td>Fee - Individual</td><td>Rs 500/work (literary/artistic/musical); Rs 2,000 (sound); Rs 5,000 (film)</td></tr>
                        <tr><td>Fee - Company</td><td>Rs 2,000/work (literary/artistic/musical); Rs 2,000 (sound); Rs 5,000 (film)</td></tr>
                        <tr><td>Timeline</td><td>~6 months (expedited; previously 2-9 months)</td></tr>
                        <tr><td>Duration</td><td>Author's lifetime + 60 years; 60 years from publication (photos/films/sound)</td></tr>
                        <tr><td>International</td><td>Protected in 180+ countries under Berne Convention</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>For Pune businesses, registration transforms automatic ownership into documented, enforceable ownership. A registration certificate enables swift enforcement - cease-and-desist backed by prima facie evidence, court injunctions without proving ownership separately, and criminal prosecution under Section 63. Patron Accounting's Pune office at RTC Silver, Wagholi provides copyright registration alongside <a href="/trademark-registration">trademark</a> and <a href="/brand-copyright-registration">brand copyright</a> services.</p>
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
                <h2 class="section-title">What Is Copyright Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Copyright registration is the formal process of recording ownership of an original creative work with the Registrar of Copyrights under Section 45 of the Copyright Act 1957, read with Rule 70 of the Copyright Rules 2013. Filed via Form XIV on copyright.gov.in. The certificate (Extracts of Register of Copyrights) serves as prima facie evidence under Section 48.</p>
                    <p>Copyright protects original works including literary works (books, articles, software code, databases), artistic works (paintings, photographs, logos, architectural designs), musical works, dramatic works, cinematographic films, and sound recordings. It protects expression, not ideas. Names, titles, and short phrases are protected by trademark instead.</p>
                    <p>The Copyright Amendment Act 2012 extended protection to digital environments and aligned with WIPO treaties. India's Berne Convention membership means works copyrighted in India are protected in 180+ countries. Patron provides <a href="/copyright-registration">copyright registration</a> with integrated IP advisory for Pune creators and businesses.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright Registration:</strong></p>
                    <ul>
                        <li><strong>Section 45:</strong> Governs registration process with Registrar of Copyrights via Form XIV on copyright.gov.in.</li>
                        <li><strong>Section 48 - Prima Facie:</strong> Registration certificate = proof of ownership admissible in all Indian courts without further evidence.</li>
                        <li><strong>Form XIV:</strong> Prescribed application with statement of particulars, work details, author info, and fee payment.</li>
                        <li><strong>Section 63:</strong> Criminal infringement: 6 months to 3 years imprisonment + Rs 50,000 to Rs 2 lakh fine.</li>
                        <li><strong>Berne Convention:</strong> Works registered in India automatically protected in 180+ member countries.</li>
                        <li><strong>Section 18 Assignment:</strong> Written transfer of copyright from creator to business. Must be signed. Essential for commissioned work.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Copyright Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Copyright</span>
                        <strong>Pune IP</strong>
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
            <h2 class="section-title">Who Needs Copyright Registration in Pune?</h2>
            <div class="content-text">
                
                <p><strong>SaaS and Software Companies (Hinjewadi, Kharadi):</strong> Proprietary source code (literary work under Section 2(o)), UIs, APIs, and documentation. During investor due diligence, VCs expect registered copyrights on core technology. Register before fundraising rounds.</p>
                <p><strong>Authors, Researchers, Publishers (Symbiosis, SPPU):</strong> Literary works from academic publishing and independent publishing houses. Musicians, composers, and lyricists in Pune's growing music scene need registration for compositions and sound recordings.</p>
                <p><strong>Content Creators (Baner, Koregaon Park, Magarpatta):</strong> Blogs, videos, podcasts routinely duplicated online. Registration enables takedown notices and infringement claims. <a href="/brand-copyright-registration">Brand copyright</a> covers complete brand assets.</p>
                <p><strong>Filmmakers and Media (FTII):</strong> Cinematographic and dramatic works requiring protection. Graphic designers and branding agencies creating artistic works (logos, packaging, visual identities).</p>
                <p><strong>E-commerce and EdTech:</strong> Product photos, descriptions, catalogue content. Courseware, study materials, assessment questions. <a href="/private-limited-company-registration/pune">Company registration</a> paired with IP from Day 1.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Assessment</td><td>Evaluation confirming the work qualifies under Section 13 - original, fixed in tangible form, within eligible categories</td></tr>
                        <tr><td>Form XIV Preparation and E-Filing</td><td>Complete application on copyright.gov.in with statement of particulars, work details, author info, and fee payment. Diary number issued</td></tr>
                        <tr><td>30-Day Objection Monitoring</td><td>Active monitoring during mandatory waiting period; immediate response preparation if third-party objections raised</td></tr>
                        <tr><td>Examination Coordination</td><td>Liaison with Copyright Office during scrutiny; response to queries, deficiency notices, and hearing coordination</td></tr>
                        <tr><td>Registration Certificate</td><td>Procurement of Extracts of Register of Copyrights - prima facie evidence of ownership under Section 48</td></tr>
                        <tr><td>Copyright Assignment Deeds</td><td>Written agreements under Section 18 transferring copyright from creators (employees, contractors, agencies) to business</td></tr>
                        <tr><td>Trademark Advisory</td><td>Assessment of whether work also needs <a href="/trademark-registration">trademark protection</a> - logos and brand names frequently need both</td></tr>
                        <tr><td>Infringement Advisory</td><td>Cease-and-desist notices, online takedown requests, coordination with legal counsel for Bombay HC (Pune Bench)</td></tr>
                        <tr><td>IP Portfolio Management</td><td>Ongoing tracking of all registered copyrights - registration details, duration, assignment records, renewal monitoring</td></tr>

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
            <h2 class="section-title">How Copyright Registration Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers the complete copyright registration lifecycle - from work classification through Form XIV filing, 30-day waiting period, examination, certificate issuance, and post-registration enforcement.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Identify and Classify the Work</h3>
        <p class="step-description">Patron works with the Pune applicant to identify and classify the work - literary (including software), artistic, musical, dramatic, cinematographic, or sound recording. Classification determines fees, documentation, and protection duration. Author(s), creation date, publication status, and ownership chain documented.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Work category classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Author/ownership documented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fee structure determined</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CLASSIFY</text><rect x="25" y="34" width="28" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="57" y="34" width="28" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><rect x="25" y="54" width="28" height="14" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><text x="39" y="44" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Literary</text><text x="71" y="44" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Artistic</text><text x="39" y="64" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Musical</text></svg></div>
            <span class="illustration-label">Work Classified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Prepare Form XIV and Supporting Documents</h3>
        <p class="step-description">Application prepared with complete particulars: work details (title, nature, category), author details, applicant details (with NOC or assignment deed if different from author), publication details, and statement describing the work. Two copies of the work prepared for submission.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form XIV completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statement of particulars drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Two work copies prepared</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM XIV</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Statement of</text><text x="60" y="62" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Particulars</text></svg></div>
            <span class="illustration-label">Application Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">File Online on copyright.gov.in</h3>
        <p class="step-description">Patron files on the Copyright Office e-filing portal. Form XIV fields completed, work copies and documents uploaded, government fee paid online. Fees: Rs 500/work individuals, Rs 2,000/work companies (literary/artistic/musical); Rs 5,000/work (films). Diary number issued for tracking upon successful submission.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed on copyright.gov.in</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Government fee paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Diary number received</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">E-FILE</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">copyright.gov.in</text><text x="60" y="65" font-size="6" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">Fee Paid Online</text></svg></div>
            <span class="illustration-label">Application Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">30-Day Mandatory Waiting Period</h3>
        <p class="step-description">The Copyright Office mandates a 30-day period for objections. Patron monitors application status daily. If an objection is filed, Patron prepares immediate response with evidence of authorship and ownership, and coordinates the hearing between parties at the Copyright Office.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Daily monitoring active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Objection response ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Hearing coordinated if needed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">30</text><text x="60" y="48" font-size="7" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">DAYS</text><text x="60" y="62" font-size="6" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Waiting Period</text></svg></div>
            <span class="illustration-label">Waiting Complete</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Examination and Scrutiny</h3>
        <p class="step-description">After 30 days (if no objections), the scrutineer examines the application, verifies the work, and checks for discrepancies. Query letters are responded to promptly by Patron on behalf of the Pune applicant, ensuring the application moves forward without delays.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scrutiny in progress</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Queries responded promptly</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deficiencies addressed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SCRUTINY</text><circle cx="45" cy="50" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="75" cy="50" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="45" y="53" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Review</text><text x="75" y="53" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Pass</text></svg></div>
            <span class="illustration-label">Examination Passed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Registration Certificate Issued</h3>
        <p class="step-description">The Copyright Office issues the Extracts of Register of Copyrights - prima facie evidence of ownership under Section 48, admissible in all Indian courts. Certificate includes registration number, work details, author/owner info, and date. Expedited processing: approximately 6 months (previously 2-9 months).</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Prima facie evidence secured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>180+ country protection (Berne)</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="18" width="50" height="28" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Extracts of</text><text x="60" y="39" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Register</text><circle cx="60" cy="62" r="9" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M55 62l3 3 6-6" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Copyright Registered</span>
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
            <h2 class="section-title">Documents Required for Copyright Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Two Copies of the Work:</strong> Manuscript, code printout, design files, audio/video files as applicable.</li><li><strong>Applicant Identity Proof:</strong> PAN, Aadhaar - individual or authorised signatory of company.</li><li><strong>NOC from Author:</strong> If applicant is different from the author.</li><li><strong>Copyright Assignment Deed:</strong> If copyright transferred from author to company (Section 18).</li><li><strong>Power of Attorney:</strong> If filing through representative.</li><li><strong>Publication Details:</strong> Date, place, publisher (if published).</li><li><strong>Author Details:</strong> Name, nationality, address.</li><li><strong>Company Documents:</strong> Incorporation certificate and board resolution (if company applicant).</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Tip for Pune SaaS Companies:</strong> For software copyright, submit representative source code portions (first 25 and last 25 pages, or complete code if under 50 pages). Trade secrets can be redacted. The Copyright Office accepts partial submissions for registration.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Copyright Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Not Understanding Registration Value</td><td>Creators assume automatic copyright is sufficient; lose infringement cases without prima facie evidence</td><td>Patron educates on Section 48 enforcement value. Registration transforms ownership into documented, enforceable ownership</td></tr>
                        <tr><td>Confusing Copyright with Trademark</td><td>Attempting to copyright brand names (needs TM) or trademark website content (needs copyright)</td><td>Each work assessed for correct protection. Dual filing where needed. Logo typically needs both copyright and trademark</td></tr>
                        <tr><td>No Written Assignment from Freelancers</td><td>Section 17: creator owns copyright, not the business that paid. Gap surfaces during due diligence</td><td>Assignment agreements under Section 18 drafted as standard practice for all commissioned work</td></tr>
                        <tr><td>Missing 30-Day Objection Response</td><td>DIY filers miss objection notification; application rejected for non-response</td><td>Every application monitored daily; immediate response prepared if objections filed</td></tr>
                        <tr><td>Software Code Not Registered</td><td>1,752 SaaS companies with unregistered proprietary code; vulnerability during fundraising and acquisition</td><td>Software copyright registration with code submission guidance. Critical for investor due diligence</td></tr>

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
            <h2 class="section-title">Copyright Registration Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Literary Work - Individual</td><td>Rs 500 govt + Rs 3,999-7,999 professional</td></tr>
                        <tr><td>Literary Work - Company</td><td>Rs 2,000 govt + Rs 3,999-7,999 professional</td></tr>
                        <tr><td>Software/Computer Programme</td><td>Rs 500/2,000 govt + Rs 5,999-9,999 professional</td></tr>
                        <tr><td>Artistic Work (logos, designs, photos)</td><td>Rs 500/2,000 govt + Rs 3,999-7,999 professional</td></tr>
                        <tr><td>Musical/Dramatic Work</td><td>Rs 500/2,000 govt + Rs 3,999-7,999 professional</td></tr>
                        <tr><td>Sound Recording</td><td>Rs 2,000 govt + Rs 3,999-7,999 professional</td></tr>
                        <tr><td>Cinematographic Film</td><td>Rs 5,000 govt + Rs 5,999-12,999 professional</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Work Classification and Documentation</td><td>1-3 days</td></tr>
                        <tr><td>Form XIV Preparation</td><td>1-2 days</td></tr>
                        <tr><td>E-Filing on copyright.gov.in</td><td>1 day</td></tr>
                        <tr><td>30-Day Mandatory Waiting Period</td><td>30 days</td></tr>
                        <tr><td>Examination and Scrutiny</td><td>2-5 months</td></tr>
                        <tr><td>Registration Certificate</td><td>~6 months total (expedited)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Copyright registration is centralised at the Copyright Office in New Delhi. All Pune applications filed online through copyright.gov.in - no Delhi visit required. Infringement disputes heard at Bombay High Court (Pune Bench). The Copyright Office has expedited processing to approximately 6 months. Patron's Pune office at RTC Silver, Wagholi handles the complete process digitally.</p>

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
            <h2 class="section-title">Why Choose Patron for Copyright Registration in Pune</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office Presence</h3><p>RTC Silver, Wagholi - serves SaaS companies in Hinjewadi/Kharadi, creators in Baner/Koregaon Park, FTII filmmakers, agencies, EdTech. Walk-in available.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Copyright + Trademark Strategy</h3><p>Only Pune CA firm assessing each work for both copyright and <a href="/trademark-registration">trademark</a>. Dual filing where needed. No IP platform offers integrated strategy.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>SaaS Software Copyright</h3><p>Specialised for Pune's 1,752 SaaS companies. Code submission guidance, IP valuation for funding rounds, assignment deeds for developer-company relationships.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>15+ years, 50,000+ documents, 4.9 Google rating. Copyright registration from Rs 3,999 with IP portfolio management and enforcement advisory.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves creators and businesses with CA expertise in IP registration, compliance, tax advisory, and business integration.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright vs Trademark vs Patent</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Copyright</th><th>Trademark</th><th>Patent</th></tr></thead>
                    <tbody>
                        <tr><td>Protects</td><td>Creative expression (content, code, designs, music, videos)</td><td>Brand identifiers (name, logo mark, slogan, sound)</td><td>Inventions (processes, machines, compositions)</td></tr>
                        <tr><td>Law</td><td>Copyright Act 1957</td><td>Trade Marks Act 1999</td><td>Patents Act 1970</td></tr>
                        <tr><td>Duration</td><td>Author's lifetime + 60 years</td><td>10 years (renewable indefinitely)</td><td>20 years (non-renewable)</td></tr>
                        <tr><td>Automatic?</td><td>Yes (registration adds evidence)</td><td>No (must register)</td><td>No (must file and get granted)</td></tr>
                        <tr><td>Cost</td><td>Rs 500-5,000 govt/work</td><td>Rs 4,500-9,000 govt/class</td><td>Rs 1,600-8,000 govt + drafting</td></tr>
                        <tr><td>Best For Pune</td><td>SaaS code, website content, videos, music</td><td>Brand names, logos, taglines</td><td>Software algorithms, manufacturing processes</td></tr>

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
            <h2 class="section-title">Related Services for Pune Businesses and Creators</h2>
            <div class="content-text">
                
                <p>Pune businesses and creators often need complementary services:</p>
                <ul><li><a href="/copyright-registration">Copyright Registration (India)</a> - National overview.</li>
                    <li><a href="/brand-copyright-registration">Brand Copyright Registration</a> - Complete brand asset protection.</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect brand name and logo.</li>
                    <li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> - Company incorporation with IP from Day 1.</li>
                    <li><a href="/gst-registration">GST Registration</a> - For businesses with taxable supplies.</li>
                    <li><a href="/income-tax-return">Income Tax Return</a> - ITR with IP asset treatment.</li>
                    <li><a href="/zoho-books-accounting">Zoho Books Accounting</a> - Cloud accounting with intangible asset tracking.</li>
                    <li><a href="/posh-compliance-services">Compliance Services</a> - Annual business compliance.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Copyright Registration in India</h2>
            <div class="content-text">
                
                <p><strong>Primary Legislation:</strong></p>
                <ul><li><strong>Copyright Act 1957 (amended 2012):</strong> Section 13 (eligible works); Section 14 (copyright meaning); Section 17 (first owner); Section 18 (assignment); Section 45 (registration); Section 48 (prima facie evidence); Section 51 (infringement); Section 52 (fair dealing); Section 63 (criminal penalty).</li>
                    <li><strong>Copyright Rules 2013:</strong> Rule 70 (procedure); Form XIV (application); Schedule 2 (fees).</li>
                    <li><strong>Copyright Amendment Act 2012:</strong> Digital protection; online enforcement penalties; WIPO treaty compliance.</li>
                    <li><strong>Berne Convention:</strong> India member; works protected in 180+ countries without separate registration.</li></ul>
                <p style="margin-top:16px;"><strong>Key Provisions:</strong></p>
                <ul><li>Section 17: First owner is author; employer owns if created under employment</li>
                    <li>Section 18: Assignment must be <strong>in writing and signed</strong></li>
                    <li>Section 48: Certificate = <strong>prima facie evidence</strong> in all Indian courts</li>
                    <li>Section 63: Criminal penalty - <strong>6 months to 3 years + Rs 50,000-2 lakh fine</strong></li>
                    <li>Section 55: Civil remedies - <strong>injunction, damages, accounts of profits</strong></li></ul>
                <p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office India</a> | <a href="https://bombayhighcourt.nic.in" target="_blank" rel="noopener">Bombay High Court</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions: Copyright Registration in Pune</h2>
                    <p class="faq-expanded__lead">Get answers about copyright registration, fees, timeline, eligible works, copyright vs trademark, and IP protection for Pune businesses and creators.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Copyright Registration',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is copyright registration?</h3>
                        <div class="faq-expanded__a"><p>Copyright registration is the process of filing Form XIV with the Registrar of Copyrights under Section 45 of the Copyright Act 1957 to create an official ownership record. The registration certificate serves as prima facie evidence in all Indian courts under Section 48.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to register copyright in Pune?</h3>
                        <div class="faq-expanded__a"><p>Classify the work, prepare Form XIV, file online on copyright.gov.in with fee payment, wait 30 days mandatory objection period, respond to examination queries, receive certificate in approximately 6 months. Entirely online from Pune. Patron handles the complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for copyright registration in India?</h3>
                        <div class="faq-expanded__a"><p>Literary artistic musical works Rs 500 per work individual or Rs 2,000 per work company. Sound recordings Rs 2,000 per work. Cinematographic films Rs 5,000 per work. Software Rs 500 individual or Rs 2,000 company. Professional fees from Rs 3,999 per work.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is copyright registration mandatory?</h3>
                        <div class="faq-expanded__a"><p>No. Copyright protection is automatic upon creation. Registration is not mandatory but provides prima facie evidence under Section 48, simplifies enforcement, strengthens IP valuation for investors, and enables statutory damages claims in infringement proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does copyright registration take?</h3>
                        <div class="faq-expanded__a"><p>The Copyright Office has expedited processing. Certificates now typically issued within approximately 6 months of filing, assuming no objections during the 30-day waiting period. If objections require hearing the timeline may extend. Patron monitors every application.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What works can be copyrighted in India?</h3>
                        <div class="faq-expanded__a"><p>Literary works including books, articles, software code, and website content. Artistic works including paintings, photographs, logos, and designs. Musical works, dramatic works, cinematographic films, and sound recordings. Ideas, titles, names, and short phrases cannot be copyrighted.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between copyright and trademark?</h3>
                        <div class="faq-expanded__a"><p>Copyright protects creative expression including content, code, designs, music, and videos under the Copyright Act 1957. Trademark protects brand identifiers including names, logos as commercial marks, and slogans under the Trade Marks Act 1999. A logo often needs both protections.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long does copyright protection last in India?</h3>
                        <div class="faq-expanded__a"><p>Literary, dramatic, musical, and artistic works: author lifetime plus 60 years after death. Photographs, cinematographic films, sound recordings, and posthumous publications: 60 years from year of publication. Copyright is one of the longest-lasting IP protections available.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pune mein copyright registration kaise hota hai?</strong> copyright.gov.in pe Form XIV file karo. Fee Rs 500 (individual) ya Rs 2,000 (company) per work. 30 din waiting. ~6 mahine mein certificate. Patron Pune office se sab handle karta hai.</p>
                <p><strong>Copyright aur trademark mein kya fark hai?</strong> Copyright creative kaam protect karta hai - content, code, design, music, video. Trademark brand naam aur logo (as brand mark) protect karta hai. Ek logo ko dono chahiye. Patron dono file karta hai.</p>
                <p><strong>Software ka copyright India mein hota hai kya?</strong> Haan. Software code literary work hai Copyright Act mein (Section 2(o)). Source code aur object code dono copyrightable hain. SaaS companies ke liye bahut zaroori.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Office Now Expedited - Register Today</h2>
            <div class="content-text">
                
                <p>Copyright infringement carries both civil and criminal consequences. Section 63: 6 months to 3 years imprisonment + Rs 50,000 to Rs 2 lakh fine. Section 55: injunction, damages, accounts of profits. Without registration, proving ownership requires extensive additional evidence. With the Copyright Office now processing in ~6 months (expedited), the time to register is now. If your Pune business has unregistered creative assets at risk, file today.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Copyright Registration in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Copyright registration in Pune provides businesses and creators with prima facie evidence of ownership for original works - software code, website content, logos, marketing materials, music, and videos. With Pune's 1,752 SaaS companies, FTII's film graduates, and a thriving creator base, copyright registration is essential IP hygiene.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Pune office serves SaaS companies in Hinjewadi/Kharadi, content creators in Baner/Koregaon Park, musicians, authors, filmmakers, and branding agencies - handling the complete lifecycle from Form XIV to certificate to enforcement advisory.</p>
                <p style="color:rgba(255,255,255,0.9);">With 15+ years, 10,000+ businesses, and 4.9 Google rating, Patron is the only CA firm in Pune bundling copyright registration with trademark advisory, assignment deeds, IP portfolio management, and business compliance.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Copyright%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Copyright%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Copyright Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides copyright registration and IP protection services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Copyright registration and IP protection</div>
                <div class="pa-city-grid">
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/copyright-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/copyright-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/copyright-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Pune</div>
                <div class="pa-block-sub">End-to-end brand and IP protection</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/statutory-audit/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers copyright registration in Pune. Content reviewed bi-annually (Freshness Tier 2) reflecting Copyright Act amendments, Copyright Office fee revisions, processing timeline updates, and digital IP enforcement developments.</p>
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
