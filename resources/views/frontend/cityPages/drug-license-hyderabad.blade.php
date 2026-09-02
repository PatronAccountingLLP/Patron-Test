@extends('layouts.service-app')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@section('meta')
    <title>Drug License in Hyderabad – Retail, Wholesale &amp; CDSCO</title>
    <meta name="description" content="CA-assisted drug license in Hyderabad. Retail, wholesale, manufacturing. DCA Telangana, ONDLS portal. Genome Valley, pharmacies. Call +91 945 945 6700.">
    <link rel="canonical" href="#">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Drug License in Hyderabad – Retail, Wholesale &amp; CDSCO">
    <meta property="og:description" content="CA-assisted drug license in Hyderabad. Retail, wholesale, manufacturing. DCA Telangana, ONDLS portal. Call +91 945 945 6700.">
    <meta property="og:url" content="/drug-license/hyderabad">
    <meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Drug License in Hyderabad – Retail, Wholesale &amp; CDSCO">
    <meta name="twitter:description" content="CA-assisted drug license in Hyderabad. Retail, wholesale, manufacturing. DCA Telangana, ONDLS portal. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Drug License in Hyderabad",
          "description": "CA-assisted drug license in Hyderabad. Retail, wholesale, manufacturing. DCA Telangana, ONDLS portal. Genome Valley, pharmacies. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/drug-license/hyderabad",
          "serviceType": "Drug License in Hyderabad",
          "areaServed": {
            "@type": "City",
            "name": "Hyderabad"
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
            "url": "https://www.patronaccounting.com/drug-license/hyderabad",
            "price": "9999"
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
              "name": "Drug License",
              "item": "https://www.patronaccounting.com/drug-license"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Drug License Hyderabad",
              "item": "https://www.patronaccounting.com/drug-license/hyderabad"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to get drug license in Hyderabad?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Prepare 10 sqm premises with refrigerator. Engage registered pharmacist. File on ONDLS portal. Pass drug inspector inspection. License in 14-30 days."
              }
            },
            {
              "@type": "Question",
              "name": "What are the types of drug license?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Retail Form 20/21 for medical shops. Wholesale Form 20B/21B for distributors. Manufacturing for pharma companies. Combined needs 15 sqm."
              }
            },
            {
              "@type": "Question",
              "name": "What is minimum area required?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "10 sqm carpet area for retail or wholesale separately. 15 sqm for combined. Refrigerator mandatory. Drug inspector measures precisely."
              }
            },
            {
              "@type": "Question",
              "name": "Is registered pharmacist mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes for retail. Telangana Pharmacy Council registered pharmacist present during all working hours. One pharmacy per pharmacist only."
              }
            },
            {
              "@type": "Question",
              "name": "How much does drug license cost?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Govt fee Rs 3,000-10,000 for 5 years. Patron all-inclusive from Rs 9,999. Combined with GST Rs 14,999-19,999."
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "14-30 working days. ONDLS filing 1-2 days, DCA verification 5-7 days, inspector visit 7-14 days, approval 7-14 days."
              }
            },
            {
              "@type": "Question",
              "name": "What is penalty without drug license?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Cognizable offence under D&C Act. Fine plus imprisonment. DCA Telangana conducts active raids. Spurious drugs up to life imprisonment."
              }
            },
            {
              "@type": "Question",
              "name": "What is ONDLS portal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "One Nation One Drug Licensing System at statedrugs.gov.in. Unified national portal for drug license applications renewals and tracking."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        Drug License in Hyderabad: Retail, Wholesale, and Manufacturing Licence
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Law::</span> Drugs and Cosmetics Act, 1940 | DCA Telangana (state) | CDSCO (national)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Types::</span> Retail (Form 20/21) | Wholesale (Form 20B/21B) | Manufacturing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Requirements::</span> Minimum 10 sqm premises | Registered pharmacist | Refrigerator | Drug inspector approval</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Validity::</span> 5 years | Renewal 3 months before expiry via ONDLS portal</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20drug%20license%20in%20Hyderabad.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Drug License',
                                            'city'     => 'Hyderabad',
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
    'ctaText'    => 'Hyderabad pharmacies trust Patron for drug license, GST, and ongoing compliance management.',
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
<a href="#what-section" class="toc-btn">What Is Drug License</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">Retail vs Wholesale vs Mfg</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License in Hyderabad: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Drug License Services at a Glance</strong></p>
                    <p>A drug license in Hyderabad is a mandatory legal document issued by the Drugs Control Administration (DCA), Telangana under the Drugs and Cosmetics Act, 1940 for any business involved in retail sale, wholesale distribution, or manufacturing of drugs, medicines, and cosmetics. Hyderabad - India's pharmaceutical capital with Genome Valley, Jeedimetla, and hundreds of pharma companies - requires drug licenses for medical shops, wholesale distributors, hospital pharmacies, and manufacturing units. Application is filed online through the ONDLS portal with a drug inspector premises inspection. The license is valid for 5 years.</p>
                </div>
                <p>Hyderabad is India's pharmaceutical capital. Genome Valley hosts major biotech and pharma R&D companies. Jeedimetla, Nacharam, Bollaram, and Pashamylaram are dense pharma manufacturing hubs. The city has thousands of retail pharmacies. Wholesale distributors operate from Begum Bazaar, Afzalgunj, and Secunderabad. DCA Telangana actively monitors compliance - conducting raids on unlicensed operations and Schedule H1 violation drives. Learn more about <a href="#">Drug License across India</a>.</p>
                <p>Patron Accounting's CA team assists Hyderabad entrepreneurs in obtaining drug licenses - from determining the correct type, preparing documentation, filing on the ONDLS portal, coordinating the drug inspector inspection, and managing 5-year renewal. The same CA handles <a href="/gst-registration/hyderabad">GST registration</a>, Shops Act compliance, business incorporation, and ongoing accounting for your pharmacy or pharma business.</p>
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
                <h2 class="section-title">What Is a Drug License?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A drug license is a legal permission granted by the Drugs Control Administration under the D&C Act, 1940 authorising a business to engage in the retail sale, wholesale distribution, or manufacturing of drugs, medicines, and cosmetics - ensuring all pharmaceutical operations meet safety, quality, and storage standards.</p>
<p>The license contains rules for the licensee, premises details, permitted drug categories, and the registered pharmacist's name. It must be displayed at the premises during working hours. Every pharmaceutical transaction - from a single strip sold at a medical shop to bulk API manufacturing at Jeedimetla - requires a valid drug license. CDSCO sets national standards while DCA Telangana handles state-level licensing.</p>
<p>DCA Telangana has strengthened enforcement with the Bulk SMS Alert System for substandard drugs (March 2026) and mandatory PvPI QR code display at retail pharmacies (November 2025). The DCA also met USFDA officials (December 2025), reflecting Hyderabad's global pharma significance.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Drug License:</strong></p>
                    <ul>
<li><strong>DCA Telangana:</strong> Drugs Control Administration - state authority for drug licensing and enforcement</li>
<li><strong>ONDLS:</strong> One Nation One Drug Licensing System portal at statedrugs.gov.in</li>
<li><strong>Form 20/21:</strong> Retail drug license forms for medical shops</li>
<li><strong>Form 20B/21B:</strong> Wholesale drug license forms for distributors</li>
<li><strong>Registered Pharmacist:</strong> Telangana Pharmacy Council registered, mandatory for retail</li>
<li><strong>Schedule H1:</strong> Drug category requiring prescription records and special compliance</li>
<li><strong>PvPI QR Code:</strong> Pharmacovigilance QR code mandatory at retail pharmacies since Nov 2025</li>
<li><strong>CDSCO:</strong> Central Drugs Standard Control Organization - national authority</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Pharmacy/Medical illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Rx symbol -->
                            <circle cx="80" cy="70" r="25" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                            <text x="80" y="76" font-size="20" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="serif">Rx</text>
                            <!-- Medicine bottle -->
                            <rect x="120" y="50" width="25" height="40" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <rect x="120" y="50" width="25" height="12" rx="4" fill="#F5A623"/>
                            <line x1="125" y1="72" x2="140" y2="72" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <line x1="125" y1="80" x2="138" y2="80" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <!-- Shield/check -->
                            <circle cx="145" cy="45" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M139 45l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- DCA tag -->
                            <rect x="30" y="112" width="50" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="55" y="122" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DCA TELANGANA</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Drug License</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>D&C Act, 1940</span>
                        <strong>Drug License</strong>
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
            <h2 class="section-title">Who Needs Drug License in Hyderabad?</h2>
            <div class="content-text">
                
                <p><strong>Retail Pharmacy / Medical Shop Owners:</strong> Every chemist shop and pharmacy in Hyderabad needs Retail Drug License (Form 20/21). From standalone pharmacies in Ameerpet to chains in Madhapur - registered pharmacist is mandatory.</p>
<p><strong>Wholesale Drug Distributors:</strong> Businesses supplying medicines to pharmacies and hospitals. Distributors in Begum Bazaar, Afzalgunj, and Secunderabad need Wholesale License (Form 20B/21B).</p>
<p><strong>Hospital Pharmacy Operators:</strong> In-house pharmacies within Apollo, KIMS, Yashoda, Continental require drug licenses. Both retail and wholesale may be needed.</p>
<p><strong>Pharma Manufacturers in Genome Valley:</strong> Drug manufacturers, API producers, formulation companies need Manufacturing Drug Licenses with state DCA and CDSCO approvals. GMP compliance mandatory.</p>
<p><strong>Online Pharmacy and E-Commerce:</strong> Online pharmacies delivering in Hyderabad need valid drug licenses. Registered pharmacist must verify prescriptions before dispatch.</p>
<p><strong>Ayurvedic, Homeopathic, and Cosmetic Businesses:</strong> The D&C Act covers allopathic, ayurvedic, siddha, unani, homeopathic drugs plus cosmetics. Appropriate licenses needed for Hyderabad's growing wellness industry.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>License Type Determination</td><td>CA analyses business (retail, wholesale, manufacturing, combined) to determine correct license and forms</td></tr>
<tr><td>Premises Compliance Advisory</td><td>Guidance on 10 sqm minimum, storage, refrigeration, AC, and layout plan for drug inspector approval</td></tr>
<tr><td>Pharmacist Coordination</td><td>Verify Telangana Pharmacy Council registration, prepare pharmacist affidavit and declaration on stamp paper</td></tr>
<tr><td>ONDLS Portal Filing</td><td>Application on statedrugs.gov.in with forms, documents, and fee payment. Tracking code generated</td></tr>
<tr><td>Drug Inspector Preparation</td><td>Pre-inspection checklist: area, storage, refrigerator, pharmacist presence, drug registers. Premises made inspection-ready</td></tr>
<tr><td>License Delivery and Display</td><td>Certificate delivered. Mandatory display guidance + PvPI QR code compliance</td></tr>
<tr><td>5-Year Renewal Management</td><td>Expiry tracked. Renewal filed 3 months before on ONDLS. Zero lapses</td></tr>
<tr><td>GST and Business Bundle</td><td>Drug license + GST + Shops Act + business formation. One CA team for all compliance</td></tr>

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
            <h2 class="section-title">Drug License Process in Hyderabad</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From premises preparation to ONDLS filing, inspector visit, and license approval - here's how Patron gets your Hyderabad pharmacy licensed.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine License Type and Prepare Premises</h3><p class="step-description">Retail (Form 20/21), wholesale (Form 20B/21B), combined, or manufacturing. Premises: 10 sqm minimum (15 sqm combined). Refrigerator for temperature-sensitive drugs. Layout plan with carpet area prepared.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Correct type selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Premises ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RETAIL</text><text x="60" y="46" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">WHOLESALE</text><text x="60" y="58" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">10 SQM</text></svg></div><span class="illustration-label">Type Determined</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Engage Registered Pharmacist</h3><p class="step-description">For retail, registered pharmacist from Telangana Pharmacy Council mandatory during all working hours. One pharmacy per pharmacist. Patron verifies registration, prepares declaration on Rs 20 stamp paper.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pharmacist verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Declaration prepared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="35" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PHARMA</text><text x="60" y="44" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">CIST</text><rect x="30" y="62" width="60" height="16" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="73" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">REGISTERED</text></svg></div><span class="illustration-label">Pharmacist Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Collect Documents and Prepare Application</h3><p class="step-description">Form 19, identity proofs, business registration, premises proof/rent agreement, NOC from owner, layout plan, refrigerator invoice, pharmacist certificate and affidavit, building owner photograph.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All documents compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CA-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="75" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="48" x2="80" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="61" x2="70" y2="61" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Documents Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Application on ONDLS Portal</h3><p class="step-description">Application filed on statedrugs.gov.in: Telangana/Hyderabad jurisdiction selected, details entered, documents uploaded, government fee paid. Reference number generated for tracking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Online filing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fee paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ONDLS</text><text x="60" y="45" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">PORTAL</text><circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M80 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Application Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Drug Inspector Premises Inspection</h3><p class="step-description">DCA Telangana drug inspector visits Hyderabad premises to verify: area meets minimum, storage adequate, refrigerator functional, pharmacist present and registered, drug registers in place. Patron prepares pre-inspection checklist.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Inspection prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Premises verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="16" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M52 35l5 5 10-10" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="62" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">INSPECTOR</text></svg></div><span class="illustration-label">Inspection Passed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">License Approval and Compliance Setup</h3><p class="step-description">DCA Telangana issues drug license. Must be displayed at premises. PvPI QR code displayed. 5-year renewal tracked. GST compliance set up. Schedule H1 records maintained if applicable.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 5-year license issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PvPI QR displayed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DRUG LICENSE</text><text x="60" y="42" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">5 YEARS</text><text x="60" y="55" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">DCA APPROVED</text></svg></div><span class="illustration-label">Fully Licensed</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Form 19:</strong> Application form for drug license</li>
<li><strong>Identity Proof:</strong> PAN/Aadhaar of proprietor/partners/directors</li>
<li><strong>Residential Address Proof:</strong> Of proprietor/partners/directors and pharmacist</li>
<li><strong>Business Constitution:</strong> Partnership deed / Company directors list / Proprietorship declaration</li>
<li><strong>Premises Proof:</strong> Rent agreement or ownership document for Hyderabad premises</li>
<li><strong>Layout Plan:</strong> Floor plan with carpet area (L x B in meters, area in sqm) signed by owner and applicant</li>
<li><strong>Building Owner NOC and Photograph:</strong> No Objection Certificate + self-attested photograph</li>
<li><strong>Pharmacist Certificate:</strong> Telangana Pharmacy Council registration (up to date) with photograph</li>
<li><strong>Pharmacist Declaration:</strong> On Rs 20 non-judicial stamp paper</li>
<li><strong>Refrigerator Invoice:</strong> Purchase proof for refrigerator at premises</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Hyderabad-Specific Tip:</strong> DCA Telangana drug inspectors are thorough. Ensure the pharmacist is physically present, refrigerator plugged in and operational, area measurement matches layout plan exactly, and all drug registers in place before inspection. Patron provides a detailed pre-inspection checklist.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Hyderabad</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Premises Rejected (Area < 10 sqm)</td><td>Many medical shops in congested areas fall below minimum</td><td>Patron verifies premises compliance before filing to avoid rejection</td></tr>
<tr><td>Pharmacist Not Available During Hours</td><td>DCA conducts surprise checks - license suspension risk</td><td>Patron verifies pharmacist availability and single-registration compliance</td></tr>
<tr><td>Renewal Missed (Expired = Illegal)</td><td>5-year validity. DCA raids on expired-license pharmacies reported 2025-2026</td><td>Patron tracks expiry and files renewal 3 months early on ONDLS</td></tr>
<tr><td>Wrong License Type Applied</td><td>Applying retail when wholesale needed causes rejection</td><td>Patron assesses complete business model and applies correct combination</td></tr>
<tr><td>Schedule H1 Compliance Violations</td><td>DCA special drive on H1 drug sales (Nov 2025) with penalties</td><td>Patron advises on Schedule H1 register maintenance and documentation</td></tr>

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
            <h2 class="section-title">Drug License Fees in Hyderabad</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Retail Drug License (Form 20/21)</td><td>Rs 3,000-6,000 govt (5 years) | Patron Rs 9,999-14,999</td></tr>
<tr><td>Wholesale Drug License (Form 20B/21B)</td><td>Rs 3,000-6,000 govt (5 years) | Patron Rs 9,999-14,999</td></tr>
<tr><td>Combined Retail + Wholesale</td><td>Rs 5,000-10,000 govt | Patron Rs 14,999-19,999</td></tr>
<tr><td>Manufacturing Drug License</td><td>Varies by category | On consultation</td></tr>
<tr><td>Drug License Renewal (5 Year)</td><td>Rs 3,000-6,000 | Patron Rs 7,999-12,999</td></tr>
<tr><td>Drug License + GST + Shops Act Bundle</td><td>Govt fees applicable | Patron Rs 14,999-19,999</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 7,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Drug License consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20drug%20license%20in%20Hyderabad.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Premises Preparation</td><td>1-2 weeks (area, refrigerator, pharmacist engagement)</td></tr>
<tr><td>Document Collection</td><td>3-5 days (forms, proofs, pharmacist certificate)</td></tr>
<tr><td>ONDLS Portal Filing</td><td>1-2 days (online application + fee payment)</td></tr>
<tr><td>Drug Inspector Inspection</td><td>7-14 days (scheduled after application processing)</td></tr>
<tr><td>License Approval</td><td>7-14 days (post-inspection approval by DCA)</td></tr>
<tr><td>Total</td><td>14-30 working days (all documents complete + premises ready)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Hyderabad Processing Note (Group B):</strong> Application is online via ONDLS portal. Drug inspector physically visits the Hyderabad premises. Patron handles all portal filing remotely and prepares premises for inspection. No visit to DCA office required for application.</p>

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
            <h2 class="section-title">Why Choose Patron for Drug License in Hyderabad?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Led with Pharma Integration</h3><p>Drug license + GST + Shops Act + business incorporation + accounting as one package. No separate vendors for each compliance.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>DCA Telangana Process Knowledge</h3><p>Familiar with DCA inspection patterns, ONDLS requirements, and document standards. Pre-inspection preparation minimises rejection.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-city pharmacy chains get consistent drug license management across states.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>5-Year Renewal Guarantee</h3><p>Every expiry tracked. Renewal filed 3 months early. Zero expired licenses, zero DCA raids, zero business disruption.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Hyderabad Pharma Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Patron helped us get our retail + wholesale drug license in 25 days. They prepared our premises for the drug inspector visit - approved on first inspection. Now they manage our GST and accounting too."</p><p style="font-weight:700;color:var(--blue);margin:0;">- Pharmacy Owner, Ameerpet</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Hyderabad through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Retail vs Wholesale vs Manufacturing - Hyderabad Guide</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Retail License</th><th>Wholesale License</th><th>Manufacturing</th></tr></thead>
                    <tbody>
                        <tr><td>Purpose</td><td>Sell medicines to consumers</td><td>Supply to shops/hospitals</td><td>Manufacture drugs</td></tr>
<tr><td>Forms</td><td>Form 20 + Form 21</td><td>Form 20B + Form 21B</td><td>State DCA + CDSCO</td></tr>
<tr><td>Personnel</td><td>Registered Pharmacist (mandatory)</td><td>Pharmacist or Competent Person</td><td>Qualified person + GMP</td></tr>
<tr><td>Area</td><td>10 sqm minimum</td><td>10 sqm minimum</td><td>Per GMP standards</td></tr>
<tr><td>Best For Hyderabad</td><td>Medical shops, pharmacy chains, hospital pharmacies</td><td>Distributors (Begum Bazaar, Secunderabad)</td><td>Genome Valley, Jeedimetla units</td></tr>
<tr><td>Timeline</td><td>14-30 days</td><td>14-30 days</td><td>60-120 days</td></tr>
<tr><td>Govt Fee (5 years)</td><td>Rs 3,000-6,000</td><td>Rs 3,000-6,000</td><td>Varies</td></tr>

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
                
                <ul>
<li><a href="#">Drug License in India</a> - National drug license services</li>
<li><a href="/gst-registration/hyderabad">GST Registration in Hyderabad</a> - Mandatory for pharma businesses</li>
<li><a href="/private-limited-company-registration/hyderabad">Pvt Ltd Registration in Hyderabad</a> - Company formation for pharma</li>

<li><a href="/trademark-registration">Trademark Registration</a> - Brand protection for pharma</li>
<li><a href="/fssai-registration/hyderabad">FSSAI Registration in Hyderabad</a> - For food-related products</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <ul>
<li>Drugs and Cosmetics Act, 1940</li>
<li>Drugs and Cosmetics Rules (as amended)</li>
<li>CDSCO (Central Drugs Standard Control Organization)</li>
<li>DCA Telangana - <a href="https://dca.telangana.gov.in" target="_blank" rel="noopener">dca.telangana.gov.in</a></li>
<li>ONDLS Portal: <a href="https://statedrugs.gov.in" target="_blank" rel="noopener">statedrugs.gov.in</a></li>
<li>Telangana State Pharmacy Council (pharmacist registration)</li>
<li>Drug Price Control Order, 2013 (DPCO)</li>
</ul>
<p><strong>Recent DCA Telangana Enforcement (2025-2026):</strong></p>
<ul>
<li>PvPI QR Code mandatory at retail pharmacies (Nov 2025)</li>
<li>Schedule H1 special drive (Nov 2025)</li>
<li>Bulk SMS Alert System for substandard drugs (Mar 2026)</li>
<li>Multiple raids on unlicensed operations</li>
<li>USFDA officials meeting with DCA Telangana (Dec 2025)</li>
</ul>
<p><strong>Penalties:</strong> Operating without license = cognizable offence (fine + imprisonment). Spurious drugs = up to life imprisonment. Adulterated drugs = up to 3 years.</p>
<p><strong>Authority:</strong> DCA Telangana | <a href="https://cdsco.gov.in" target="_blank" rel="noopener">CDSCO</a> | <a href="https://statedrugs.gov.in" target="_blank" rel="noopener">ONDLS</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Drug License in Hyderabad</h2>
                    <p class="faq-expanded__lead">Common questions about drug license types, premises, pharmacist, fees, ONDLS portal, and DCA Telangana compliance.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Drug License',
                        'city'     => 'Hyderabad',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to get drug license in Hyderabad?</h3>
                        <div class="faq-expanded__a"><p>Prepare 10 sqm premises with refrigerator. Engage registered pharmacist from Telangana Pharmacy Council. Collect documents. File on ONDLS portal (statedrugs.gov.in). Pass drug inspector inspection. License in 14-30 days. Patron handles the complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the types of drug license?</h3>
                        <div class="faq-expanded__a"><p>Retail (Form 20/21) for medical shops. Wholesale (Form 20B/21B) for distributors. Manufacturing for pharma companies. Combined retail + wholesale needs 15 sqm. Patron determines correct type for your business.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the minimum area required?</h3>
                        <div class="faq-expanded__a"><p>10 sqm carpet area for retail or wholesale separately. 15 sqm for combined. Refrigerator mandatory. Drug inspector measures precisely. Patron verifies area before filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is registered pharmacist mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes for retail. Telangana Pharmacy Council registered pharmacist present during all working hours. One pharmacy per pharmacist. For wholesale, pharmacist or competent person required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How much does drug license cost?</h3>
                        <div class="faq-expanded__a"><p>Govt fee Rs 3,000-10,000 for 5 years depending on type. Patron all-inclusive from Rs 9,999. Combined with GST and Shops Act: Rs 14,999-19,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does it take?</h3>
                        <div class="faq-expanded__a"><p>14-30 working days: ONDLS filing 1-2 days, DCA verification 5-7 days, inspector visit 7-14 days, approval 7-14 days. Complete documents and ready premises ensure fastest processing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is penalty for no drug license?</h3>
                        <div class="faq-expanded__a"><p>Cognizable offence under D&C Act - fine plus imprisonment. DCA Telangana conducts active raids in Hyderabad. Spurious drugs attract up to life imprisonment. Drug license is non-negotiable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the ONDLS portal?</h3>
                        <div class="faq-expanded__a"><p>One Nation One Drug Licensing System at statedrugs.gov.in. Unified national portal for drug license applications, renewals, and tracking across all states including Telangana. Patron files all applications through ONDLS.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Hyderabad mein drug license kaise le?</strong> 10 sqm premises + pharmacist + documents + ONDLS portal par apply karo + drug inspector inspection pass karo. Patron 14-30 din mein complete karta hai.</p>
<p><strong>Pharmacist zaroori hai kya?</strong> Haan, retail ke liye registered pharmacist Telangana Pharmacy Council se mandatory hai. Working hours mein hamesha present hona chahiye.</p>
<p><strong>License kitne saal ka hota hai?</strong> 5 saal. Renewal 3 months pehle karo ONDLS portal par. Expired license par business karna cognizable offence hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Get Your Drug License Today</h2>
            <div class="content-text">
                
                <p>Operating a pharmacy without a valid license in Hyderabad is a cognizable offence - DCA Telangana conducted multiple raids in 2025-2026. Every day without a drug license exposes you to criminal prosecution, drug seizure, and business closure. The ONDLS portal has streamlined the process to 14-30 days. Premises preparation can be done in 1-2 weeks. Start your drug license application today and operate legally in India's pharmaceutical capital.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Drug License in Hyderabad</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Drug license in Hyderabad is mandatory for every pharmaceutical business - from retail medical shops to wholesale distributors, hospital pharmacies, and manufacturing units in Genome Valley and Jeedimetla. DCA Telangana issues licenses via the ONDLS portal with drug inspector inspection and 5-year validity.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting serves Hyderabad pharma businesses through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles license type determination, ONDLS filing, inspector preparation, renewal tracking, and bundled GST/Shops Act compliance.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20drug%20license%20in%20Hyderabad.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Drug%20License&body=Hello%20Patron%20Team%2C%0AI%20need%20a%20drug%20license%20in%20Hyderabad.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Drug License Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-assisted drug license registration in 8 cities. Select your city.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
<a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Hyderabad</div><div class="pa-block-sub">End-to-end pharma business registration and compliance</div><div class="pa-cross-grid"><a href="/gst-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/private-limited-company-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Hyderabad</div></div>
<a href="/trademark-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/fssai-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/income-tax-return/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Hyderabad</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers drug license in Hyderabad including retail, wholesale, manufacturing, DCA Telangana, ONDLS portal, pharmacist compliance, and 5-year renewal. Reviewed semi-annually. Freshness Tier 2.</p>
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
