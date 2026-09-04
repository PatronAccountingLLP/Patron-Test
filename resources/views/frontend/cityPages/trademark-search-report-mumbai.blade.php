
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>Trademark Search in Mumbai - Availability & Class Check</title>
    <meta name="description" content="CA-assisted trademark search report in Mumbai. Wordmark, phonetic, Vienna Code clearance. Serving BKC, SEEPZ, Powai businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/trademark-search-report/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Search in Mumbai - Availability & Class Check">
    <meta property="og:description" content="CA-assisted trademark search report in Mumbai. Wordmark, phonetic, Vienna Code clearance. Serving BKC, SEEPZ, Powai businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/trademark-search-report/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Search in Mumbai - Availability & Class Check">
    <meta name="twitter:description" content="CA-assisted trademark search report in Mumbai. Wordmark, phonetic, Vienna Code clearance. Serving BKC, SEEPZ, Powai businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Trademark Search Report in Mumbai",
      "description": "CA-assisted trademark search report in Mumbai. Wordmark, phonetic, Vienna Code clearance. Serving BKC, SEEPZ, Powai businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/trademark-search-report/mumbai",
      "serviceType": "Trademark Search Report in Mumbai",
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
        "url": "https://www.patronaccounting.com/trademark-search-report/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "1500",
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
          "name": "Trademark Search Report: Process and Cost",
          "item": "https://www.patronaccounting.com/trademark-search-report"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Trademark Search Report in Mumbai",
          "item": "https://www.patronaccounting.com/trademark-search-report/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles trademark search in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Trade Marks Registry at Bouddhik Sampada Bhawan S.M. Road Antop Hill Mumbai 400037 is the TMR head office. Searches can be done online via tmrsearch.ipindia.gov.in without visiting. Patron Accounting Marine Lines office provides professional search reports using this portal and additional databases covering wordmark phonetic Vienna Code MCA and Madrid Protocol."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get a trademark search report online from Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes entirely online. The IP India public search portal is free and accessible to all. Patron Accounting conducts comprehensive searches covering wordmark phonetic Vienna Code MCA and Madrid Protocol databases delivering reports digitally within 1-2 business days from the Mumbai office at Marine Lines."
          }
        },
        {
          "@type": "Question",
          "name": "What is the fee for a trademark search report in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Basic IP India public search is free. Patron knockout report starts from Rs 1,500 per class with same-day delivery. Comprehensive clearance starts from Rs 3,000 per class covering all 4 search types plus MCA plus Madrid. Official Form TM-60 search costs Rs 5,000 per class e-filing under Trade Marks Rules 2017. Rs 5,500 for physical filing."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a trademark search report take in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Knockout search same day delivery. Comprehensive clearance report 1-2 business days covering all four search types plus MCA and Madrid Protocol cross-referencing. Patron Marine Lines office provides walk-in consultations with digital report delivery. Follow-up consultation same day as delivery."
          }
        },
        {
          "@type": "Question",
          "name": "Is a trademark search mandatory before registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not legally mandatory but strongly recommended. Approximately 75 percent of Indian trademark applications receive objections and many from conflicts a pre-filing search would have caught. For Mumbai where brand density is among India highest skipping the search significantly increases objection risk under Section 9 or opposition under Section 11."
          }
        },
        {
          "@type": "Question",
          "name": "What types of trademark searches does Patron offer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Four types: wordmark for exact and partial text matches, phonetic for pronunciation similarity critical for Hindi and Marathi origin names, Vienna Code for logo and device marks, and common law for domains social media and marketplace presence. Plus MCA company and LLP name cross-referencing and Madrid Protocol international designation searches in comprehensive clearance."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form TM-60?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form TM-60 is the official application for copyright search and certificate from the Trade Marks Registry. Government fee Rs 5,000 per class for e-filing and Rs 5,500 for physical filing. Unlike the free public search it produces an official TMR certificate usable as due diligence evidence. Filed at TMR head office Antop Hill Mumbai."
          }
        },
        {
          "@type": "Question",
          "name": "What if the search finds a conflicting mark?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron provides risk assessment and recommends options: modify the mark for distinctiveness, file in a different class if goods are unrelated, or select a new mark entirely. Follow-up consultation at Marine Lines covers all options and brand strategy implications including multi-class filing strategies for Mumbai businesses. Quick Answers Trademark search kaise kare Mumbai mein? IP India portal pe tmrsearch.ipindia.gov.in pe wordmark search karo (free). Professional report ke liye Patron ke Marine Lines office se contact karo - Rs 1,500/class se start. TM search ka kharcha kitna hai? IP India pe free hai. Professional report Rs 1,500/class (knockout). Comprehensive Rs 3,000/class. Form TM-60 official: Rs 5,000/class. Kya search zaroori hai? Legally mandatory nahi, but 75% apps ko objection aata hai. Rs 1,500 ka search Rs 9,000 ka filing fee waste hone se bachata hai."
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
                        Trademark Search Report in Mumbai: Verify Before You Register
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Search Types:</span> Wordmark, Phonetic, Vienna Code (Device), Common Law - all 4 types in one comprehensive clearance report</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Delivery:</span> Professional search report within 1-2 business days. Knockout search: same day. Walk-in at Marine Lines or digital delivery</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any individual, startup, company, LLP, or foreign entity planning trademark registration in India</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Basic knockout: same day | Comprehensive clearance: 1-2 business days | Starting Rs 1,500/class | Form TM-60 official: Rs 5,000/class</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=TM%20Search%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Trademark Search Report',
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
    'ctaText'    => 'From BKC fintech brands to SEEPZ export marks to Powai D2C startups - Mumbai businesses trust Patron for trademark search reports before filing.',
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
            <a href="#comparison-section" class="toc-btn">Search Types</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Search Report in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Search Report Services at a Glance</strong></p>
                    <p>Pre-filing investigation checking whether proposed brand name conflicts with existing trademarks. 4 search types: wordmark, phonetic, Vienna Code, common law. Plus MCA + Madrid Protocol. Knockout: same day. Comprehensive: 1-2 days. Starting Rs 1,500/class. Form TM-60 official: Rs 5,000/class. Mumbai = highest filing volume = highest conflict risk. TMR Head Office at Antop Hill. 75% of applications get objections - search prevents most.</p>
                </div>
                <p>Mumbai generates one of the highest volumes of trademark applications in India. The TMR head office at Antop Hill processes filings from Maharashtra, MP, Chhattisgarh, and Goa. With 950+ consultants and thousands of brands registered annually, conflict probability is significantly higher. Learn more about <a href="/trademark-search-report">trademark search reports across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Purpose</td><td>Identify conflicts before filing to reduce objection risk</td></tr>
                        <tr><td>Search Database</td><td>IP India (tmrsearch.ipindia.gov.in) + MCA + Madrid Protocol</td></tr>
                        <tr><td>Delivery</td><td>Same day (knockout) to 2 business days (comprehensive)</td></tr>
                        <tr><td>Professional Fee</td><td>Starting Rs 1,500/class (knockout) | Rs 3,000/class (comprehensive)</td></tr>
                        <tr><td>Official Search</td><td>Form TM-60 - Rs 5,000/class (e-filing) for TMR certificate</td></tr>
                        <tr><td>TMR Office</td><td>Trade Marks Registry Mumbai (Head Office) - Antop Hill</td></tr>
                        <tr><td>Search Portal</td><td>tmrsearch.ipindia.gov.in (free, no account required)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>A search report is the essential first step before <a href="/trademark-registration/mumbai">trademark registration</a>. Related: <a href="/trademark-opposition/mumbai">opposition</a>, <a href="/trademark-hearing/mumbai">hearing</a>, <a href="/trademark-formality-check-fail/mumbai">formality check fail</a>, <a href="/brand-copyright-registration">brand copyright</a>.</p>
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
                <h2 class="section-title">What Is a Trademark Search Report?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A trademark search report is a documented investigation confirming whether a proposed brand name, logo, or slogan can be registered without conflicting with existing trademarks under The Trade Marks Act, 1999. It covers the IP India registry, phonetic variations, and common law usage.</p>
                    <p>The report analyses the proposed mark against all registered and pending trademarks in relevant NICE Classification classes. It identifies identical marks, deceptively similar marks under Section 11(1), and marks attracting objection under Section 9.</p>
                    <p>Search on <a href="https://tmrsearch.ipindia.gov.in" target="_blank" rel="noopener">tmrsearch.ipindia.gov.in</a> (free). Professional report from <a href="/trademark-search-report">Patron's national practice</a>. TMR Mumbai: Antop Hill.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Search Report:</strong></p>
                    <ul>
                        <li><strong>Knockout Search:</strong> Preliminary identical mark check in target class. Same-day delivery. Quick initial filter before comprehensive clearance.</li>
                        <li><strong>Clearance Search:</strong> All 4 types (wordmark + phonetic + Vienna Code + common law) + MCA + Madrid. Detailed risk opinion report.</li>
                        <li><strong>Phonetic Search:</strong> Sound-alike marks even if spelled differently. Critical for Marathi/Hindi-origin Mumbai brand names.</li>
                        <li><strong>Vienna Code:</strong> Logo/device mark search using international classification. Required when trademark includes visual element.</li>
                        <li><strong>Form TM-60:</strong> Official TMR search certificate. Rs 5,000/class e-filing. Due diligence evidence for M&A and investment.</li>
                        <li><strong>Risk Opinion:</strong> High/medium/low rating with conflict list, class analysis, and filing strategy recommendation.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Search Report</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Search</span>
                        <strong>Clear</strong>
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
            <h2 class="section-title">Who Needs a Trademark Search Report in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Startup Founders (Powai, Lower Parel):</strong> New brands in tech, fintech, D2C. Hundreds of new names annually. Pre-filing search prevents costly Section 9/11 objections. <a href="/trademark-registration/mumbai">Registration</a>.</p>
                <p><strong>BFSI Firms (BKC, Nariman Point):</strong> Sub-brands for financial products. Classes 35, 36, 42 densely registered. Multi-class clearance essential. <a href="/trademark-opposition/mumbai">Opposition</a> protection.</p>
                <p><strong>Manufacturers (Andheri MIDC, Thane-Belapur):</strong> New product lines with distinct brand names. Classes 1-34. Indian + international designation clearance. <a href="/trademark-hearing/mumbai">Hearing</a>.</p>
                <p><strong>Export Units (SEEPZ):</strong> Indian registration as base for Madrid Protocol international filings. Conflict at India stage blocks global protection. <a href="#">Objection handling</a>.</p>
                <p><strong>Entertainment/Media (Goregaon Film City):</strong> Production house names, OTT show titles, music labels in Classes 9, 38, 41. <a href="/brand-copyright-registration">Copyright registration</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Search Report Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Knockout (Preliminary) Search</td><td>Rapid identical mark search in IP India database within target NICE class. Same-day delivery for Mumbai clients. Quick initial filter before comprehensive investment</td></tr>
                        <tr><td>Wordmark Search</td><td>Full database search using starts-with, contains, and match-with filters. Identifies direct conflicts and partial overlaps across all relevant classes</td></tr>
                        <tr><td>Phonetic Search</td><td>Pronunciation-based conflict analysis. Critical for Mumbai brands using Marathi, Hindi, or transliterated names where sound-alike conflicts are common</td></tr>
                        <tr><td>Vienna Code (Device) Search</td><td>Visual element search for logos using international Vienna Classification. Required when trademark includes logo, symbol, or design element</td></tr>
                        <tr><td>MCA + Madrid Protocol Search</td><td>Cross-reference Ministry of Corporate Affairs for company/LLP name conflicts. WIPO Romarin for international designations affecting India. Essential for SEEPZ exporters</td></tr>
                        <tr><td>Common Law + Online Check</td><td>Domain registrations, social media handles, marketplace presence. Identifies unregistered but actively used marks that could trigger passing off claims</td></tr>
                        <tr><td>Risk Opinion Report</td><td>Consolidated report: high/medium/low risk rating, complete conflict list, class-by-class analysis, and filing strategy recommendation. PDF delivery within 1-2 days</td></tr>
                        <tr><td>Official Search (Form TM-60)</td><td>Official TMR search certificate. Rs 5,000/class e-filing. Usable as due diligence evidence in M&A, PE/VC investment, and franchise agreements</td></tr>

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
            <h2 class="section-title">Trademark Search Report Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete trademark clearance from parameter definition through database searches, cross-referencing, risk analysis, to report delivery with filing strategy.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Define Search Parameters and Class Selection</h3>
        <p class="step-description">Identify proposed trademark and determine applicable NICE Classification classes. For BKC BFSI: typically Classes 35, 36, 42. Pharma: Class 5. IT: Classes 9, 42. Patron assists with class identification during initial consultation at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mark identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Classes selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scope defined</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DEFINE</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Mark + Classes</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">NICE Selected</text></svg></div>
            <span class="illustration-label">Parameters Set</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">IP India Public Database Search</h3>
        <p class="step-description">Access tmrsearch.ipindia.gov.in. Execute wordmark search using all three filters (starts-with, contains, match-with) in each target class. TMR Mumbai (Antop Hill) database covers Maharashtra, MP, Chhattisgarh, Goa plus national applications.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wordmark searched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3 filter types used</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All classes covered</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IP INDIA</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Wordmark Search</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">3 Filter Types</text></svg></div>
            <span class="illustration-label">Database Searched</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Phonetic and Device Searches</h3>
        <p class="step-description">Run phonetic search on IP India for sound-alike marks. For Mumbai brands using Hindi/Marathi origin words, phonetic conflicts are more common than exact matches. Conduct Vienna Code search if mark includes a logo or design element.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Phonetic conflicts checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Hindi/Marathi variations covered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Logo/device searched</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PHONETIC</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Sound-Alike</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">+ Vienna Code</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Logo/Device</text></svg></div>
            <span class="illustration-label">Sound + Visual Clear</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Cross-Reference MCA and International</h3>
        <p class="step-description">Search MCA database for company/LLP name conflicts. For RoC Mumbai entities, check CIN records. Search WIPO Romarin for Madrid Protocol designations into India - relevant for SEEPZ exporters and BKC multinational subsidiaries.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MCA names checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CIN cross-referenced</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Madrid Protocol covered</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CROSS-REF</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">MCA Names</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">WIPO Romarin</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Madrid Protocol</text></svg></div>
            <span class="illustration-label">All Databases Clear</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Analyse Results and Prepare Risk Assessment</h3>
        <p class="step-description">Categorise conflicts by severity. Assess objection likelihood under Section 9 (absolute grounds) or Section 11 (relative grounds - similarity). For Mumbai: factor in high density of marks in BFSI, pharma, and entertainment classes.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Conflicts categorised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.9/S.11 risk assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>High/Medium/Low rated</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANALYSE</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">S.9 / S.11</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Risk Rating</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">H / M / L</text></svg></div>
            <span class="illustration-label">Risk Assessed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Deliver Report with Filing Strategy</h3>
        <p class="step-description">Compile comprehensive report: full conflict list, risk rating per class, class-by-class analysis, and recommended filing strategy. Patron delivers within 1-2 business days with follow-up consultation at Marine Lines or via video call.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Report compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Strategy recommended</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Consultation provided</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">REPORT</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">File with Confidence</text></svg></div>
            <span class="illustration-label">Ready to File</span>
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
            <h2 class="section-title">Documents Required for Trademark Search Report</h2>
            <div class="content-text">
                
                <ul><li><strong>Proposed Trademark Details:</strong> Exact wordmark, logo, or combination mark to be searched.</li><li><strong>NICE Classification:</strong> Class or classes of goods/services. Patron assists with class identification.</li><li><strong>Applicant Details:</strong> Name, address, entity type. CIN for Mumbai companies helps MCA cross-reference.</li><li><strong>Business Description:</strong> Brief description of goods/services for accurate class selection.</li><li><strong>Logo File (if applicable):</strong> High-resolution image for Vienna Code search.</li><li><strong>Prior Use Details:</strong> Date of first use for priority claim assessment (if applicable).</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai Tip:</strong> For DPIIT-recognised startups, provide your recognition number. While it doesn't affect the search, it informs filing strategy since recognised startups get 50% fee concession on Form TM-A (Rs 4,500 vs Rs 9,000 per class).</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Trademark Search in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>BFSI Name Density</td><td>BKC/Nariman Point: thousands of service marks in Classes 35, 36, 42. Fintech startups from Powai find preferred names already taken</td><td>Multi-class comprehensive search. Alternative name suggestions. Filing strategy that avoids congested sub-categories</td></tr>
                        <tr><td>Phonetic Marathi/Hindi Conflicts</td><td>Mumbai brands using local language names face higher phonetic conflict rates. Basic wordmark search misses these</td><td>Dedicated phonetic search catches sound-alike conflicts. IP India phonetic filter plus manual analysis by team familiar with Mumbai linguistic landscape</td></tr>
                        <tr><td>Multi-Class SEEPZ Complexity</td><td>Export units need marks across 3-5 product and service classes. Each additional class multiplies conflict landscape</td><td>Comprehensive multi-class package with conflict mapping across all classes. Madrid Protocol cross-reference for international designations</td></tr>
                        <tr><td>International Designation Conflicts</td><td>Foreign brands entering India via Madrid Protocol may not appear in basic wordmark searches</td><td>WIPO Romarin database search included in comprehensive clearance. Catches international designations affecting India</td></tr>
                        <tr><td>False Confidence from Basic Search</td><td>Quick IP India search misses phonetic variants, device marks, pending apps, common law usage. Wasted filing fees Rs 4,500-9,000/class</td><td>All 4 search types in one report. No gaps. Professional risk opinion prevents costly filing mistakes</td></tr>

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
            <h2 class="section-title">Trademark Search Report Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Public Search (IP India)</td><td>Free (self-service)</td></tr>
                        <tr><td>Knockout Report (Patron)</td><td>Starting Rs 1,500/class</td></tr>
                        <tr><td>Comprehensive Clearance Report</td><td>Starting Rs 3,000/class</td></tr>
                        <tr><td>Official Search (Form TM-60 e-filing)</td><td>Rs 5,000/class</td></tr>
                        <tr><td>Official Search (Physical)</td><td>Rs 5,500/class</td></tr>
                        <tr><td>Multi-Class Package (3+ classes)</td><td>Custom quote (discounted)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Search Report consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Search Report Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Initial Consultation</td><td>Same day</td></tr>
                        <tr><td>Knockout Search</td><td>2-4 hours (same day)</td></tr>
                        <tr><td>Comprehensive Clearance</td><td>1-2 business days</td></tr>
                        <tr><td>Risk Opinion Report</td><td>1-2 business days</td></tr>
                        <tr><td>Follow-Up Consultation</td><td>Same day as delivery</td></tr>
                        <tr><td>Total Comprehensive</td><td>2-3 business days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> No visit to TMR Antop Hill required. Patron's Marine Lines office handles all searches digitally. Walk-in consultations available from BKC, Nariman Point, Lower Parel, Powai, and Andheri. Same-day knockout for urgent Mumbai clients. A Rs 1,500-3,000 search can prevent Rs 4,500-9,000 in wasted filing fees plus months of objection/opposition delays.</p>

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
            <h2 class="section-title">Why Choose Patron for Trademark Search Report in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Mumbai Office at Marine Lines</h3><p>Walk-in consultations accessible from BKC, Nariman Point, Lower Parel, Powai, and Andheri. Same-day knockout delivery. Digital report delivery within 1-2 days.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>All 4 Search Types</h3><p>Wordmark + phonetic + Vienna Code + common law in one report. Plus MCA and Madrid Protocol. No gaps. Complete clearance picture for filing confidence.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>TMR Head Office Familiarity</h3><p>Understanding of TMR Mumbai examination patterns, class-specific density, and common objection grounds. Every risk opinion informed by real filing experience at Antop Hill.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Track Record in Maharashtra</h3><p>10,000+ businesses assisted. BFSI, pharma, IT, entertainment, manufacturing conflict landscape expertise. 4.9 Google rating. 15+ years. 4 offices nationwide.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram. Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses. Serving Mumbai businesses with in-person and digital trademark search services.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Types of Trademark Search Reports</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Report Type</th><th>Typical Mumbai Client</th><th>Key Feature</th></tr></thead>
                    <tbody>
                        <tr><td>Knockout Search</td><td>Startups at Powai/Lower Parel</td><td>Same-day identical mark check</td></tr>
                        <tr><td>Full Clearance</td><td>BFSI at BKC, pharma companies</td><td>All 4 types + multi-class + risk opinion</td></tr>
                        <tr><td>International Clearance</td><td>SEEPZ exporters, MNC subsidiaries</td><td>Includes Madrid Protocol / Romarin</td></tr>
                        <tr><td>Pre-Acquisition Due Diligence</td><td>M&A teams, PE/VC investors</td><td>Portfolio-level across all marks</td></tr>
                        <tr><td>Official TM-60 Certificate</td><td>Legal/compliance teams</td><td>Official TMR certificate for records</td></tr>

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
                
                <p>After your trademark search report, you may need:</p>
                <ul><li><a href="/trademark-registration/mumbai">Trademark Registration in Mumbai</a> - File Form TM-A after clearance.</li>
                    <li><a href="/trademark-search-report">Trademark Search Report (India)</a> - National process overview.</li>
                    <li><a href="/trademark-opposition/mumbai">Trademark Opposition in Mumbai</a> - Protect against similar marks.</li>
                    <li><a href="/trademark-hearing/mumbai">Trademark Hearing in Mumbai</a> - If objection leads to hearing.</li>
                    <li><a href="/trademark-formality-check-fail/mumbai">Formality Check Fail in Mumbai</a> - Application deficiency fix.</li>
                    <li><a href="/brand-copyright-registration">Brand Copyright Registration</a> - Creative IP protection.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Trademark Search</h2>
            <div class="content-text">
                
                <p><strong>Section 9 - Absolute Grounds:</strong></p>
                <ul><li>Non-distinctive, descriptive, or contrary marks refused. Search identifies S.9 risk before filing.</li></ul>
                <p style="margin-top:16px;"><strong>Section 11(1) - Relative Grounds:</strong></p>
                <ul><li>Identical or deceptively similar to existing registered marks. Primary search objective.</li></ul>
                <p style="margin-top:16px;"><strong>Section 11(2) - Well-Known Marks:</strong></p>
                <ul><li>Similar to well-known trademarks regardless of class. Cross-class risk assessment.</li></ul>
                <p style="margin-top:16px;"><strong>Form TM-60:</strong> Official search certificate. Rs 5,000/class. <strong>NICE:</strong> 45 classes (1-34 goods, 35-45 services).</p>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://tmrsearch.ipindia.gov.in" target="_blank" rel="noopener">IP India Search</a> | <a href="https://ipindia.gov.in" target="_blank" rel="noopener">IP India</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Trademark Search Report in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about trademark search office, online search, fees, timeline, mandatory requirement, search types, Form TM-60, and what to do if conflicts are found.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trademark Search Report',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles trademark search in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>The Trade Marks Registry at Bouddhik Sampada Bhawan S.M. Road Antop Hill Mumbai 400037 is the TMR head office. Searches can be done online via tmrsearch.ipindia.gov.in without visiting. Patron Accounting Marine Lines office provides professional search reports using this portal and additional databases covering wordmark phonetic Vienna Code MCA and Madrid Protocol.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get a trademark search report online from Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes entirely online. The IP India public search portal is free and accessible to all. Patron Accounting conducts comprehensive searches covering wordmark phonetic Vienna Code MCA and Madrid Protocol databases delivering reports digitally within 1-2 business days from the Mumbai office at Marine Lines.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for a trademark search report in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Basic IP India public search is free. Patron knockout report starts from Rs 1,500 per class with same-day delivery. Comprehensive clearance starts from Rs 3,000 per class covering all 4 search types plus MCA plus Madrid. Official Form TM-60 search costs Rs 5,000 per class e-filing under Trade Marks Rules 2017. Rs 5,500 for physical filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does a trademark search report take in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Knockout search same day delivery. Comprehensive clearance report 1-2 business days covering all four search types plus MCA and Madrid Protocol cross-referencing. Patron Marine Lines office provides walk-in consultations with digital report delivery. Follow-up consultation same day as delivery.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is a trademark search mandatory before registration?</h3>
                        <div class="faq-expanded__a"><p>Not legally mandatory but strongly recommended. Approximately 75 percent of Indian trademark applications receive objections and many from conflicts a pre-filing search would have caught. For Mumbai where brand density is among India highest skipping the search significantly increases objection risk under Section 9 or opposition under Section 11.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What types of trademark searches does Patron offer?</h3>
                        <div class="faq-expanded__a"><p>Four types: wordmark for exact and partial text matches, phonetic for pronunciation similarity critical for Hindi and Marathi origin names, Vienna Code for logo and device marks, and common law for domains social media and marketplace presence. Plus MCA company and LLP name cross-referencing and Madrid Protocol international designation searches in comprehensive clearance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is Form TM-60?</h3>
                        <div class="faq-expanded__a"><p>Form TM-60 is the official application for copyright search and certificate from the Trade Marks Registry. Government fee Rs 5,000 per class for e-filing and Rs 5,500 for physical filing. Unlike the free public search it produces an official TMR certificate usable as due diligence evidence. Filed at TMR head office Antop Hill Mumbai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What if the search finds a conflicting mark?</h3>
                        <div class="faq-expanded__a"><p>Patron provides risk assessment and recommends options: modify the mark for distinctiveness, file in a different class if goods are unrelated, or select a new mark entirely. Follow-up consultation at Marine Lines covers all options and brand strategy implications including multi-class filing strategies for Mumbai businesses.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Trademark search kaise kare Mumbai mein?</strong> IP India portal pe tmrsearch.ipindia.gov.in pe wordmark search karo (free). Professional report ke liye Patron ke Marine Lines office se contact karo - Rs 1,500/class se start.</p>
                <p><strong>TM search ka kharcha kitna hai?</strong> IP India pe free hai. Professional report Rs 1,500/class (knockout). Comprehensive Rs 3,000/class. Form TM-60 official: Rs 5,000/class.</p>
                <p><strong>Kya search zaroori hai?</strong> Legally mandatory nahi, but 75% apps ko objection aata hai. Rs 1,500 ka search Rs 9,000 ka filing fee waste hone se bachata hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Search Before You File</h2>
            <div class="content-text">
                
                <p>Filing without a search risks Rs 4,500-9,000 per class in application fees. An examiner objection under Section 9 or 11 means months of delays. An opposition after publication leads to lengthy hearings. For Mumbai businesses in BFSI, pharma, and entertainment, a search at Rs 1,500-3,000 per class is a fraction of the cost of a failed registration.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Verify First - Then File with Confidence</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">A trademark search report is the essential first step before filing with the TMR. Mumbai hosts the TMR head office at Antop Hill and generates among the highest filing volumes in India. Conflict risk is elevated across BKC BFSI, Andheri MIDC manufacturing, SEEPZ exports, Powai startups.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron delivers comprehensive search reports covering all 4 types (wordmark, phonetic, Vienna Code, common law) plus MCA and Madrid Protocol within 1-2 business days. TMR Mumbai examination pattern familiarity ensures every risk opinion is grounded in real filing experience.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting LLP - offices in Pune, Mumbai, Delhi, and Gurugram. 10,000+ businesses, 50,000+ documents, 15+ years, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=TM%20Search%20Report%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trademark Search Report Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides trademark search reports and clearance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Trademark search and clearance</div>
                <div class="pa-city-grid">
                    <a href="/trademark-search-report/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/trademark-search-report/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/trademark-search-report/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">Complete trademark lifecycle</div>
                <div class="pa-cross-grid">
                    <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-opposition/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Opposition</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-hearing/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Hearing</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-infringement/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Infringement</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-renewal/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Renewal</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-formality-check-fail/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Formality Check Fail</div><div class="pa-card-sub">Mumbai</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers trademark search report in Mumbai. Content reviewed annually (Freshness Tier 2) as fees and search tools may change.</p>
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
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
