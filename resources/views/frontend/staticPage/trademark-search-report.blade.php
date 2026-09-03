
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Trademark Search Report - Availability Check & Class Search</title>
    <meta name="description" content="Trademark search report before filing. IP India public search, wordmark, phonetic, Vienna Code. NICE 45 classes. Form TM-C search certificate. Expert CA team.">
    <link rel="canonical" href="/trademark-search-report">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Search Report - Availability Check & Class Search">
    <meta property="og:description" content="Trademark search report before filing. IP India public search, wordmark, phonetic, Vienna Code. NICE 45 classes. Form TM-C search certificate. Expert CA team.">
    <meta property="og:url" content="/trademark-search-report">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Search Report - Availability Check & Class Search">
    <meta name="twitter:description" content="Trademark search report before filing. IP India public search, wordmark, phonetic, Vienna Code. NICE 45 classes. Form TM-C search certificate. Expert CA team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Trademark Search Report: Process and Cost",
          "description": "Trademark search report before filing. IP India public search, wordmark, phonetic, Vienna Code. NICE 45 classes. Form TM-C search certificate. Expert CA team.",
          "url": "https://www.patronaccounting.com/trademark-search-report",
          "serviceType": "Trademark Search Report: Process and Cost",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
            "url": "https://www.patronaccounting.com/trademark-search-report",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "9000",
              "maxPrice": "30000",
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
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is trademark search mandatory before filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trademark search is not legally mandatory but strongly recommended. Filing without a search risks rejection under Section 11(1), opposition under Section 21, and potential infringement liability under Section 29. A comprehensive search saves time, money, and legal complications by identifying conflicts before they become problems. Patron Accounting provides professional reports within 2-5 days."
              }
            },
            {
              "@type": "Question",
              "name": "How to search for a trademark on the IP India portal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Visit tmrsearch.ipindia.gov.in. Select the search type (wordmark, phonetic, Vienna Code). Enter the proposed trademark in the search field, select the relevant NICE class, and click search. Results display matching trademarks with application numbers, proprietor names, classes, statuses, and filing dates. The portal is free and accessible without registration."
              }
            },
            {
              "@type": "Question",
              "name": "What are the 45 trademark classes?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trademarks are classified into 45 classes under NICE Classification. Classes 1-34 cover goods (chemicals, cosmetics, machinery, electronics, textiles, clothing, food, beverages). Classes 35-45 cover services (advertising, insurance, telecommunications, education, food services). Each class has a heading indicating covered goods/services, but final classification depends on the specific description."
              }
            },
            {
              "@type": "Question",
              "name": "Trademark search kaise kare?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trademark search karne ke liye tmrsearch.ipindia.gov.in portal par jao. Wordmark search select karo. Apna proposed brand name type karo aur NICE class select karo. Results mein dekhoge ki similar trademarks pehle se registered ya pending hain. Phonetic search bhi karo (jo naam sunne mein similar lage). Conflicts hain toh professional report lo Patron Accounting se - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form TM-C and when is it needed?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form TM-C under Rule 22 of the TM Rules, 2017 requests the Registrar to conduct an official search and issue a certificate. Standard takes up to 30 working days. Expedited under Rule 22(3) is issued within 7 working days at Rs 30,000 (e-filing). Useful when an official Registrar-issued certificate is needed for legal proceedings, due diligence, or formal confirmation."
              }
            },
            {
              "@type": "Question",
              "name": "Brand name available hai ya nahi kaise check kare?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Brand name available hai ya nahi check karne ke liye IP India ki public search website tmrsearch.ipindia.gov.in par jao. Wordmark search mein apna brand name dalo aur class select karo. Agar koi exact ya similar naam pehle se registered hai toh conflict ho sakta hai. Final decision ke liye professional search report lo - usme phonetic search, similarity analysis, aur legal opinion milta hai."
              }
            },
            {
              "@type": "Question",
              "name": "Can I search for a logo trademark?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Logo trademarks are searched using the Vienna Code classification system, which categorizes figurative elements (shapes, animals, human figures, geometric designs) into specific codes. The IP India portal supports Vienna Code searches. Professional logo search identifies relevant codes, searches the database, and analyzes visual similarity. More complex than wordmark searches."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if a similar trademark already exists?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Options include: modifying the proposed mark for sufficient distinction (different spelling, additional elements), selecting a different class if goods don't overlap, proceeding if the existing mark is abandoned or sufficiently different, or choosing an entirely new mark. A professional search report provides the analysis needed for this decision based on similarity level, status, and goods involved. Quick Answers Q: Is IP India public search free? A: Yes. tmrsearch.ipindia.gov.in is completely free and accessible without registration. Q: How many classes to search? A: All classes relevant to current and planned goods/services. Most businesses need 1-3; complex businesses may need 5+. Q: Multiple classes at once? A: IP India allows one class at a time. Professional reports cover multiple classes in a single analysis. Q: Govt fee for official certificate? A: Rs 9,000 (standard, Form TM-C e-filing) and Rs 30,000 (expedited, 7 working days). Q: Does clean search guarantee registration? A: No. It significantly reduces risk but the Registrar may raise Section 9 objections or identify additional conflicts."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
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
                        Trademark Search Report in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">10 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Purpose:</span> Verify trademark availability before filing to avoid rejection, opposition, and infringement. The essential first step for brand protection.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Free Search:</span> IP India Public Search portal (tmrsearch.ipindia.gov.in). Official certificate: Form TM-C under Rule 22 (Rs 9,000 standard / Rs 30,000 expedited).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Classification:</span> 45 classes under NICE Classification (34 goods + 11 services). Search across all relevant classes for complete coverage.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Search Types:</span> Wordmark, phonetic, Vienna Code (logo), similarity, owner/applicant. Professional report delivered in 2-5 business days.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Trademark%20Search%20Report%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Trademark Search Report',
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
    'ctaText'    => 'Get your trademark search report before filing. Wordmark, phonetic, and Vienna Code searches across all relevant NICE classes.',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Search Types</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Report Contents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">6 Reasons</a>
            <a href="#comparison-section" class="toc-btn">Pro vs Free Search</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Search Report - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Search Report Services at a Glance</strong></p>
                    <p>A Trademark Search Report is a comprehensive analysis of existing registered and pending trademarks in India to determine whether a proposed mark is available for registration and use. It covers the IP India database across relevant NICE Classification classes, identifying identical, similar, and phonetically similar marks. An official search certificate can be obtained via Form TM-C under Rule 22 of the Trade Marks Rules, 2017.</p>
                </div>
                <p>A thorough trademark search before filing can save your business from costly rejection, opposition proceedings, infringement disputes, and rebranding expenses. The Indian Trademark Registry examines every application against existing registrations and pending applications. If a similar or identical mark exists, the Registrar will raise an objection or the existing proprietor may file an opposition. A comprehensive search identifies these risks upfront.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Purpose</td><td>Verify availability of a proposed trademark before filing</td></tr>
<tr><td>Free Public Search</td><td><a href="https://tmrsearch.ipindia.gov.in/tmrpublicsearch/" target="_blank" rel="noopener">tmrsearch.ipindia.gov.in</a> (IP India Public Search)</td></tr>
<tr><td>Official Certificate</td><td>Form TM-C under Rule 22 of TM Rules, 2017</td></tr>
<tr><td>Classification</td><td>NICE Classification: 45 classes (1-34 Goods, 35-45 Services)</td></tr>
<tr><td>Search Types</td><td>Wordmark, Phonetic, Vienna Code (Logo), Similarity, Owner/Applicant</td></tr>
<tr><td>Database</td><td>Indian Trademark Registry database maintained by CGPDTM</td></tr>
<tr><td>Report Delivery</td><td>Professional search report within 2-5 business days</td></tr>
</tbody></table></div></p>
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
                    
                    <p>A Trademark Search Report is a detailed analysis examining the <strong>Indian Trademark Registry database</strong> to identify existing registered and pending trademarks that are identical, similar, or phonetically similar to a proposed trademark across relevant <strong>NICE Classification classes</strong>.</p>
<p>The Registry, administered by <strong>CGPDTM</strong>, is searchable through the <a href="https://tmrsearch.ipindia.gov.in/tmrpublicsearch/" target="_blank" rel="noopener">IP India Public Search portal</a> (free access for wordmark, phonetic, Vienna Code, applicant, and status searches). For an official certificate, file <strong>Form TM-C</strong> under <a href="https://ipindia.gov.in/form-and-fees-tm.htm" target="_blank" rel="noopener">Rule 22</a> of TM Rules, 2017.</p>
<p>A professional report goes beyond database matching to include expert analysis of <strong>deceptive similarity</strong>, phonetic confusion, visual resemblance, conceptual overlap, and class-wise conflict assessment with a registrability opinion.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Search Report:</strong></p>
                    <p><strong>NICE Classification:</strong> International Classification of Goods and Services (WIPO). 45 classes - Classes 1-34 for goods, Classes 35-45 for services. India uses NICE for all trademark applications.</p>
<p><strong>Wordmark Search:</strong> Search for textually identical or similar brand names, words, or phrases. The most fundamental type of search.</p>
<p><strong>Phonetic Search:</strong> Search for marks that sound similar regardless of spelling (e.g., 'Lite' vs 'Light', 'Kool' vs 'Cool'). Key ground for refusal.</p>
<p><strong>Vienna Code:</strong> Classification system for figurative elements of trademarks (logos, symbols, designs). Enables search for logos with similar design features.</p>
<p><strong>Form TM-C:</strong> Prescribed form under Rule 22 for requesting the Registrar to issue an official search certificate. Standard: up to 30 days. Expedited: 7 days (Rs 30,000).</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Trademark Search Report -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TM Search</text>
                            <!-- Search magnifying glass -->
                            <circle cx="85" cy="62" r="20" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <circle cx="80" cy="58" r="10" fill="none" stroke="#14365F" stroke-width="2"/>
                            <line x1="87" y1="65" x2="97" y2="75" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/>
                            <!-- Report check -->
                            <rect x="115" y="48" width="40" height="35" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <path d="M128 60l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="122" y1="72" x2="148" y2="72" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                            <line x1="122" y1="77" x2="142" y2="77" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                            <!-- Labels -->
                            <rect x="35" y="100" width="50" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="60" y="110" font-size="5.5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rule 22</text>
                            <rect x="95" y="100" width="65" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="127" y="110" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">45 NICE Classes</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TM Rules, 2017</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Search Report</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>TM Rules, 2017</span>
                        <strong>Rule 22 | NICE 45 Classes</strong>
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
            <h2 class="section-title">Types of Trademark Search</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Wordmark Search:</strong> Textually identical or similar brand names across specified classes. Identifies exact matches and close variants that could cause refusal or opposition.</li>
<li><strong>Phonetic Search:</strong> Marks that sound similar regardless of spelling. Critical because Section 29(9) recognizes spoken use as infringement. Often leads to objections.</li>
<li><strong>Vienna Code (Logo/Device) Search:</strong> Logo and design searches based on Vienna Classification for figurative elements. Identifies logos with similar visual features.</li>
<li><strong>Similarity/Comprehensive Search:</strong> Combined analysis covering visual, phonetic, conceptual, and structural similarity. Most thorough type - basis of professional reports.</li>
<li><strong>Owner/Applicant Search:</strong> Trademarks filed under a specific entity's name. Useful for M&A due diligence, brand acquisition, and competitive intelligence.</li>
<li><strong>Status Search:</strong> Current status of a specific trademark (filed, examined, published, registered, opposed, abandoned) using application or registration number.</li>
</ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Trademark Search Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Comprehensive Search Report</td><td>Multi-layered search covering wordmark, phonetic, and similarity analysis across all relevant NICE classes. Detailed report with risk assessment, conflict analysis, and registrability opinion.</td></tr>
<tr><td>Logo/Device Search (Vienna Code)</td><td>Specialized search for logo and design trademarks using Vienna Classification codes. Identifies visually similar logos and design elements that could conflict.</td></tr>
<tr><td>Official Search Certificate (Form TM-C)</td><td>Filing Form TM-C with the Registrar under Rule 22 for an official certificate. Standard (30 days) and expedited (7 days, Rs 30,000) options available.</td></tr>
<tr><td>Multi-Class Search</td><td>Search across multiple NICE classes for businesses spanning several categories. Critical for accurate multi-class trademark applications.</td></tr>
<tr><td>Trademark Watch and Monitoring</td><td>Ongoing monitoring for new conflicting applications. Early detection enables timely <a href="/trademark-opposition">opposition filing</a>.</td></tr>
<tr><td>Pre-Acquisition Due Diligence</td><td>Comprehensive portfolio analysis for M&A, brand acquisition, and IP valuation. Ownership verification, validity check, and conflict assessment. See <a href="/trademark-assignment">TM Assignment</a>.</td></tr>

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
            <h2 class="section-title">7-Step Trademark Search Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting delivers comprehensive search reports within 2-5 business days covering all search types and relevant NICE classes.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Define Proposed Trademark and Business Scope</h3><p class="step-description">Clearly identify the proposed trademark (word mark, logo, or combination), goods or services, and target market. This determines the NICE classes to search. Patron Accounting helps identify all relevant classes for comprehensive coverage.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scope defined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Classes mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Word</text><rect x="57" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="72" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Logo</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Defined</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Identify Relevant NICE Classes</h3><p class="step-description">Map goods and services to correct NICE classes (1-45). Use the TMclass tool to verify. Incorrect class selection leads to incomplete results and protection gaps. Classes 1-34: goods; 35-45: services.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Classes identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TMclass verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">45 NICE</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="6" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Classes</text></svg></div><span class="illustration-label">Mapped</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Conduct IP India Public Search</h3><p class="step-description">Search the Registry at tmrsearch.ipindia.gov.in. Perform wordmark (exact and fuzzy), phonetic, and Vienna Code (logo) searches across all identified classes. This free portal provides initial results from the official CGPDTM database.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Database searched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All types run</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IP India</text><rect x="30" y="50" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.6"/><text x="55" y="59" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">SEARCHED</text></svg></div><span class="illustration-label">Searched</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Perform Advanced Similarity Analysis</h3><p class="step-description">Go beyond basic matching to analyze visual, phonetic, conceptual, and structural similarity. Apply the 'average consumer with imperfect recollection' test used by the Registrar and courts.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Analysis complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All dimensions</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Analyzed</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Assess Risk and Registrability</h3><p class="step-description">For each conflict: High (identical/very similar in same class, active), Medium (similar in related class, pending), or Low (different class, abandoned). Provide registrability opinion based on overall findings.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Risk classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Opinion formed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="20" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="32" y="34" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Low</text><rect x="47" y="25" width="20" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="57" y="34" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Med</text><rect x="72" y="25" width="20" height="12" rx="3" fill="#FECACA" stroke="#EF4444" stroke-width="0.8"/><text x="82" y="34" font-size="5" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">High</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Prepare the Trademark Search Report</h3><p class="step-description">Structured report with: search parameters, methodology, list of conflicts with details, similarity analysis, risk classification, registrability recommendation, and next step guidance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Report compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PDF delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REPORT</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Report Ready</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Deliver Report and Advise on Next Steps</h3><p class="step-description">Clear recommendations: proceed with filing (low risk), modify the mark (medium risk), or choose a different mark (high risk). If filing recommended, proceed to trademark registration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Advice given</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Decision made</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CLEAR</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">TO FILE</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Advised</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What the Trademark Search Report Includes</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Search Parameters:</strong> Proposed trademark, goods/services description, NICE class(es) searched</li>
<li><strong>Methodology:</strong> Databases searched, search types conducted (wordmark, phonetic, Vienna Code, similarity)</li>
<li><strong>Conflict List:</strong> All conflicting marks with trademark number, word mark/device, class, goods/services, proprietor, filing date, and current status</li>
<li><strong>Similarity Analysis:</strong> Visual, phonetic, conceptual, and structural comparison for each conflict</li>
<li><strong>Risk Classification:</strong> High / Medium / Low for each identified conflict</li>
<li><strong>Registrability Opinion:</strong> Recommended to proceed / Proceed with caution / Not recommended</li>
<li><strong>Recommendations:</strong> Modifications to reduce conflict, alternative class strategies, or suggested mark changes</li>
<li><strong>Legal References:</strong> Relevant provisions and examination guidelines</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Trademark Search Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Incomplete Class Coverage</td><td>Searching only one class misses conflicts in related classes (e.g., food brand searching Class 30 but missing Class 29, 32, or 43)</td><td>We map your complete business scope to all relevant NICE classes for exhaustive coverage - current and planned goods/services.</td></tr>
<tr><td>Missing Phonetic Conflicts</td><td>Basic wordmark searches miss phonetically similar marks (e.g., 'Kure' vs 'Cure', 'Fone' vs 'Phone') - a major ground for refusal under Section 11(1)</td><td>Systematic phonetic analysis in every search methodology to catch all sound-alike conflicts across all searched classes.</td></tr>
<tr><td>Interpreting Results Without Legal Context</td><td>IP India returns raw results without analysis. A matching mark may be abandoned, expired, or in a different class - not automatically a problem</td><td>Expert interpretation with registrability opinion and risk assessment - not just data but actionable legal analysis.</td></tr>
<tr><td>Logo Search Complexity (Vienna Code)</td><td>Logo searches require knowledge of the Vienna Classification system. Many applicants skip logo searches entirely</td><td>Design-aware search team uses Vienna Codes to systematically identify conflicting logo elements and visual similarities.</td></tr>

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
                        <tr><td>Comprehensive Search Report (per class)</td><td class="table-amount">Professional fees vary. Call +91 945 945 6700</td></tr>
<tr><td>Multi-Class Search (additional classes)</td><td class="table-amount">Incremental per-class fee</td></tr>
<tr><td>Logo/Vienna Code Search</td><td class="table-amount">Additional fee for device search</td></tr>
<tr><td>Official Search Certificate (Form TM-C, e-filing)</td><td class="table-amount">Rs 9,000 government fee</td></tr>
<tr><td>Expedited Search Certificate (Form TM-C, e-filing)</td><td class="table-amount">Rs 30,000 government fee (7 working days)</td></tr>
<tr><td>Trademark Watch/Monitoring (annual)</td><td class="table-amount">Subscription fee. Contact for quote</td></tr>
<tr><td>IP India Public Search</td><td class="table-amount">Free (self-service at tmrsearch.ipindia.gov.in)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Search Report consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Scope Definition and Class Identification</td><td>1 day</td></tr>
<tr><td>IP India Database Search (all types)</td><td>1-2 days</td></tr>
<tr><td>Similarity and Phonetic Analysis</td><td>1-2 days</td></tr>
<tr><td>Report Preparation</td><td>1-2 days</td></tr>
<tr><td><strong>Total (Professional Report)</strong></td><td><strong>2-5 business days</strong></td></tr>
<tr><td>Official Certificate (Form TM-C, standard)</td><td>7-30 working days</td></tr>
<tr><td>Expedited Certificate (Form TM-C)</td><td>7 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Conduct the search as close to your filing date as possible - ideally within 30 days. New applications are filed daily and the report's accuracy diminishes over time. For longer planning cycles, a follow-up search just before filing catches new conflicts. Patron Accounting delivers professional reports within 2-5 business days.</p>

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
            <h2 class="section-title">6 Reasons Why Trademark Search Is Essential</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Avoid Application Rejection</h3><p class="feature-text">The Registrar examines every application against existing marks. Identical or similar marks in the same class face objection under Section 11(1). A pre-filing search identifies this risk.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Prevent Opposition Proceedings</h3><p class="feature-text">Even if the Registrar allows the application, existing proprietors can file opposition under Section 21 after Journal publication. A search reveals potential opposers in advance.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Avoid Infringement Liability</h3><p class="feature-text">Using a mark similar to an existing registration constitutes infringement under Section 29, attracting civil and criminal penalties. A search prevents unknowing infringement.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Save Rebranding Costs</h3><p class="feature-text">Discovering a conflict after launching - packaging, website, advertising - means expensive rebranding. A search before investment prevents this waste entirely.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Inform Filing Strategy</h3><p class="feature-text">Results inform whether to file as-is, modify the mark, choose different classes, or select an entirely new mark. Strategic insight maximizes registration chances.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">M&A and Investment Due Diligence</h3><p class="feature-text">Trademark portfolio searches validate ownership, identify conflicts, and assess strength and enforceability of brand assets for mergers, acquisitions, and investment rounds.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India.</p>
<p><strong>50,000+ Documents Filed</strong> on government and IP portals.</p>
<p><strong>4.9 Google Rating</strong> based on verified reviews.</p>
<p><strong>15+ Years of Practice.</strong></p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Professional Search Report vs Free Public Search</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>IP India Free Public Search</th><th>Professional Search Report</th></tr></thead>
                    <tbody>
                        <tr><td>Cost</td><td>Free</td><td>Professional fee (per class)</td></tr>
<tr><td>Database</td><td>IP India Registry database</td><td>IP India + extended analysis</td></tr>
<tr><td>Search Types</td><td>Wordmark, phonetic (basic), status</td><td>Wordmark, phonetic, Vienna Code, similarity, conceptual</td></tr>
<tr><td>Analysis</td><td>Raw results only (no interpretation)</td><td>Expert similarity analysis + risk assessment + registrability opinion</td></tr>
<tr><td>Report Format</td><td>On-screen results (no download)</td><td>Structured PDF with conflict details, risk levels, recommendations</td></tr>
<tr><td>Class Guidance</td><td>User must select class themselves</td><td>Expert class mapping based on business description</td></tr>
<tr><td>Legal Context</td><td>None</td><td>References to Sections 11, 29, examination guidelines</td></tr>
<tr><td>Turnaround</td><td>Instant (self-service)</td><td>2-5 business days</td></tr>
<tr><td>Use Case</td><td>Preliminary check</td><td>Pre-filing decision, due diligence, opposition strategy</td></tr>

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
            <h2 class="section-title">Related Trademark and IP Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/trademark-registration">Trademark Registration</a></strong> - File after search confirms availability.</li>
<li><strong><a href="/trademark-opposition">Trademark Opposition</a></strong> - Oppose conflicting applications within 4-month window.</li>
<li><strong><a href="/trademark-infringement">Trademark Infringement</a></strong> - Enforce your trademark rights against infringers.</li>
<li><strong><a href="/trademark-rectification">Trademark Rectification</a></strong> - Cancel conflicting registrations.</li>
<li><strong><a href="/trademark-renewal">Trademark Renewal</a></strong> - Renew before 10-year expiry.</li>
<li><strong><a href="/trademark-assignment">Trademark Assignment</a></strong> - Transfer trademark ownership.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Context for Trademark Search</h2>
            <div class="content-text">
                
                <p><strong>Governing Framework:</strong> Trade Marks Act, 1999; <a href="https://www.ipindia.gov.in/Trademarks/TM_Rules_2017" target="_blank" rel="noopener">Trade Marks Rules, 2017</a> (Rule 20: NICE Classification, Rule 22: Search and Certificate); NICE Classification (WIPO).</p>
<p><strong>Key Legal Provisions:</strong></p>
<ul>
<li><strong>Section 11(1):</strong> Relative grounds for refusal - identical/similar mark for same/similar goods causing confusion.</li>
<li><strong>Section 9:</strong> Absolute grounds for refusal - lack of distinctiveness, descriptive, customary marks.</li>
<li><strong>Section 29:</strong> Infringement - unauthorized use of identical/similar mark in trade.</li>
<li><strong>Section 133:</strong> Preliminary advice by Registrar on distinctiveness (Form TM-M).</li>
<li><strong>Rule 22(1):</strong> Any person may request search and certificate via Form TM-C.</li>
<li><strong>Rule 22(3):</strong> Expedited search certificate within 7 working days at higher fee.</li>
</ul>
<p><strong>Portals:</strong> <a href="https://tmrsearch.ipindia.gov.in/tmrpublicsearch/" target="_blank" rel="noopener">IP India Public Search</a> | <a href="https://ipindia.gov.in/form-and-fees-tm.htm" target="_blank" rel="noopener">Forms & Fees</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Trademark Search Report</h2>
                    <p class="faq-expanded__lead">Answers about trademark search process, IP India portal, NICE classes, Form TM-C, search types, logo searches, and conflict resolution.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trademark Search Report',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is trademark search mandatory before filing?</h3>
                        <div class="faq-expanded__a"><p>Trademark search is not legally mandatory but strongly recommended. Filing without a search risks rejection under Section 11(1), opposition under Section 21, and potential infringement liability under Section 29. A comprehensive search saves time, money, and legal complications by identifying conflicts before they become problems. Patron Accounting provides professional reports within 2-5 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to search for a trademark on the IP India portal?</h3>
                        <div class="faq-expanded__a"><p>Visit tmrsearch.ipindia.gov.in. Select the search type (wordmark, phonetic, Vienna Code). Enter the proposed trademark in the search field, select the relevant NICE class, and click search. Results display matching trademarks with application numbers, proprietor names, classes, statuses, and filing dates. The portal is free and accessible without registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are the 45 trademark classes?</h3>
                        <div class="faq-expanded__a"><p>Trademarks are classified into 45 classes under NICE Classification. Classes 1-34 cover goods (chemicals, cosmetics, machinery, electronics, textiles, clothing, food, beverages). Classes 35-45 cover services (advertising, insurance, telecommunications, education, food services). Each class has a heading indicating covered goods/services, but final classification depends on the specific description.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Trademark search kaise kare?</h3>
                        <div class="faq-expanded__a"><p>Trademark search karne ke liye tmrsearch.ipindia.gov.in portal par jao. Wordmark search select karo. Apna proposed brand name type karo aur NICE class select karo. Results mein dekhoge ki similar trademarks pehle se registered ya pending hain. Phonetic search bhi karo (jo naam sunne mein similar lage). Conflicts hain toh professional report lo Patron Accounting se - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Form TM-C and when is it needed?</h3>
                        <div class="faq-expanded__a"><p>Form TM-C under Rule 22 of the TM Rules, 2017 requests the Registrar to conduct an official search and issue a certificate. Standard takes up to 30 working days. Expedited under Rule 22(3) is issued within 7 working days at Rs 30,000 (e-filing). Useful when an official Registrar-issued certificate is needed for legal proceedings, due diligence, or formal confirmation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Brand name available hai ya nahi kaise check kare?</h3>
                        <div class="faq-expanded__a"><p>Brand name available hai ya nahi check karne ke liye IP India ki public search website tmrsearch.ipindia.gov.in par jao. Wordmark search mein apna brand name dalo aur class select karo. Agar koi exact ya similar naam pehle se registered hai toh conflict ho sakta hai. Final decision ke liye professional search report lo - usme phonetic search, similarity analysis, aur legal opinion milta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I search for a logo trademark?</h3>
                        <div class="faq-expanded__a"><p>Yes. Logo trademarks are searched using the Vienna Code classification system, which categorizes figurative elements (shapes, animals, human figures, geometric designs) into specific codes. The IP India portal supports Vienna Code searches. Professional logo search identifies relevant codes, searches the database, and analyzes visual similarity. More complex than wordmark searches.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if a similar trademark already exists?</h3>
                        <div class="faq-expanded__a"><p>Options include: modifying the proposed mark for sufficient distinction (different spelling, additional elements), selecting a different class if goods don't overlap, proceeding if the existing mark is abandoned or sufficiently different, or choosing an entirely new mark. A professional search report provides the analysis needed for this decision based on similarity level, status, and goods involved.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Is IP India public search free?</strong> A: Yes. tmrsearch.ipindia.gov.in is completely free and accessible without registration.</p>
<p><strong>Q: How many classes to search?</strong> A: All classes relevant to current and planned goods/services. Most businesses need 1-3; complex businesses may need 5+.</p>
<p><strong>Q: Multiple classes at once?</strong> A: IP India allows one class at a time. Professional reports cover multiple classes in a single analysis.</p>
<p><strong>Q: Govt fee for official certificate?</strong> A: Rs 9,000 (standard, Form TM-C e-filing) and Rs 30,000 (expedited, 7 working days).</p>
<p><strong>Q: Does clean search guarantee registration?</strong> A: No. It significantly reduces risk but the Registrar may raise Section 9 objections or identify additional conflicts.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Search Before You File - Avoid Costly Conflicts</h2>
            <div class="content-text">
                
                <p>Filing a trademark without a search risks rejection under Section 11(1), opposition under Section 21, and infringement liability under Section 29. Rebranding after launch can cost lakhs in wasted packaging, marketing, and brand building.</p>
<p>A professional search report takes 2-5 business days and provides the clarity needed to make an informed filing decision. The IP India public search is free for preliminary checks.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Trademark Search Report Before Filing</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">A Trademark Search Report is the essential first step before filing any trademark application. It examines the IP India database through wordmark, phonetic, Vienna Code, and similarity searches across relevant NICE classes to identify potential conflicts.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">The free IP India Public Search portal provides preliminary checks. Professional reports add expert analysis with risk assessment and registrability opinions. Official certificates via Form TM-C under Rule 22.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting delivers comprehensive reports within 2-5 days. 15+ years. 10,000+ businesses. Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trademark%20Search%20Report&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trademark Search Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert trademark search reports for brand owners, startups, and businesses with comprehensive NICE class coverage and registrability opinions.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/trademark-search-report/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/trademark-search-report/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/trademark-search-report/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/trademark-search-report/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete trademark protection</div><div class="pa-cross-grid"><a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TM Registration</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-opposition" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TM Opposition</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-infringement" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TM Infringement</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-rectification" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TM Rectification</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-renewal" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TM Renewal</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-assignment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TM Assignment</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Content aligned with the Trade Marks Act 1999, TM Rules 2017, and current IP India portal procedures. Next review: September 2026.</p>
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
