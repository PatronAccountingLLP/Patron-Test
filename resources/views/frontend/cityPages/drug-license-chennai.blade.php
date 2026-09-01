
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Drug License in Chennai – Retail, Wholesale &amp; CDSCO Process</title>
    <meta name="description" content="CA-assisted drug license in Chennai. Retail, wholesale, manufacturing pharma licence. ADDC Chennai filing. Serving T. Nagar, Ambattur, Parry's. Call +91 945 945 6700.">
    <link rel="canonical" href="#">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Drug License in Chennai – Retail, Wholesale &amp; CDSCO Process">
    <meta property="og:description" content="CA-assisted drug license in Chennai. Retail, wholesale, manufacturing pharma licence. ADDC Chennai filing. Serving T. Nagar, Ambattur, Parry's. Call +91 945 945 6700.">
    <meta property="og:url" content="/drug-license/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Drug License in Chennai – Retail, Wholesale &amp; CDSCO Process">
    <meta name="twitter:description" content="CA-assisted drug license in Chennai. Retail, wholesale, manufacturing pharma licence. ADDC Chennai filing. Serving T. Nagar, Ambattur, Parry's. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Drug License in Chennai",
          "description": "CA-assisted drug license in Chennai. Retail, wholesale, manufacturing pharma licence. ADDC Chennai filing. Serving T. Nagar, Ambattur, Parry's. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/drug-license/chennai",
          "serviceType": "Drug License in Chennai",
          "areaServed": {
            "@type": "City",
            "name": "Chennai"
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
            "url": "https://www.patronaccounting.com/drug-license/chennai",
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
              "name": "Drug License in Chennai",
              "item": "https://www.patronaccounting.com/drug-license/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which authority issues drug license in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Drug licenses are issued by the Assistant Director of Drugs Control ADDC of the respective Chennai zone under the Tamil Nadu Drugs Control Department headquartered at 258-261 Anna Salai Chennai."
              }
            },
            {
              "@type": "Question",
              "name": "What is the cost of drug license in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Government fee for retail is Rs 1,500. Wholesale Rs 1,500-3,000. Patron all-inclusive fee starts from Rs 9,999 for retail and Rs 14,999 for wholesale."
              }
            },
            {
              "@type": "Question",
              "name": "How long does drug license take in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Approximately 30 working days from application submission including ADDC scrutiny 3-7 days, Drug Inspector inspection within 7 days, and final approval 5-10 days."
              }
            },
            {
              "@type": "Question",
              "name": "Is a pharmacist mandatory for drug license?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Retail drug license requires a B.Pharm or D.Pharm pharmacist registered with Tamil Nadu Pharmacy Council. Wholesale requires a competent person with graduate degree plus 1 year experience."
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
                        Drug License in Chennai: CA-Assisted Pharmacy and Pharma Licensing
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Pharmacist registration, premises layout, ID/address proof, business constitution, refrigerator bill</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Drug license in Chennai starts from Rs 9,999 (all-inclusive with govt fees)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Registered pharmacist (retail), graduate with experience (wholesale), min 10 sq.m premises</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30 working days from application to licence issuance</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Drug%20License%20in%20Chennai&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20a%20drug%20license%20in%20Chennai.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20drug%20license%20in%20Chennai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Drug License in Chennai',
                                            'city'     => 'Chennai',
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
    'ctaText'    => 'Join 10,000+ businesses who trust Patron Accounting',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-is-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License in Chennai: Overview and TL;DR</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Drug License in Chennai Services at a Glance</strong></p>
                    <p><p>A drug license in Chennai is a mandatory legal permit under the Drugs and Cosmetics Act, 1940 to manufacture, sell, wholesale, or distribute pharmaceutical drugs and cosmetics. Issued by the Assistant Director of Drugs Control (ADDC), Chennai after premises inspection by a Drug Inspector. Three main types: Retail (Form 19/20/21), Wholesale (Form 19A/20B/21B), and Manufacturing.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Law</td><td>Drugs and Cosmetics Act, 1940 | D&C Rules, 1945</td></tr><tr><td>Authority</td><td>Drugs Controller, Tamil Nadu - 258-261, Anna Salai, Chennai</td></tr><tr><td>Approving Officer</td><td>Assistant Director of Drugs Control (ADDC), Chennai zone</td></tr><tr><td>Retail License Forms</td><td>Form 19 (application) | Form 20/21 (licence)</td></tr><tr><td>Wholesale License Forms</td><td>Form 19A (application) | Form 20B/21B (licence)</td></tr><tr><td>Minimum Premises</td><td>Retail: 10 sq.m | Wholesale: 10 sq.m | Combined: 15 sq.m</td></tr><tr><td>Pharmacist</td><td>B.Pharm or D.Pharm registered with TN Pharmacy Council</td></tr><tr><td>Timeline</td><td>30 working days</td></tr><tr><td>Govt Fee</td><td>Rs 1,500 for retail licence</td></tr></tbody></table></div></p>
                </div>
                <p>Chennai is one of India's largest pharmaceutical markets. The city houses thousands of retail pharmacies across T. Nagar, Anna Salai, and Mylapore, major drug wholesale hubs in Parry's Corner and Broadway, and pharmaceutical manufacturing units in Ambattur SIDCO and Guindy Industrial Estate. Learn more about <a href="#">Drug License across India</a>.</p>
                <p>Every pharmaceutical business requires a valid drug license from the Tamil Nadu Drugs Control Department. Patron Accounting's CA team handles the complete drug license process - from pharmacist registration coordination with the Tamil Nadu Pharmacy Council, premises layout preparation, Form 19/19A filing with ADDC, Drug Inspector inspection coordination, and licence delivery.</p>
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
                    
                    <p>A drug license is a legal permit issued by the state Drugs Control Department under the Drugs and Cosmetics Act, 1940 authorising an individual or business to manufacture, sell, stock, distribute, or exhibit for sale any drug or cosmetic product.</p><p>The license is region-specific and location-specific - each premises requires a separate license. Operating without a license is an offence under Section 27 of the D&C Act 1940, attracting imprisonment up to 3 years and fines.</p><p>For Chennai, the drug license is issued by the ADDC of the respective zone under the Tamil Nadu Drugs Control Department headquartered at Anna Salai. From single-counter medical shops in Velachery to multi-brand wholesale distributors in Parry's Corner, each type requires the correct license form, qualified pharmacist, and premises meeting D&C Rules specifications.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Drug License in Chennai:</strong></p>
                    <p><strong>ADDC:</strong> Assistant Director of Drugs Control - the approving officer for drug license applications in Chennai zones.</p><p><strong>Form 19/19A:</strong> Application forms for retail (Form 19) and wholesale (Form 19A) drug licenses.</p><p><strong>Form 20/21:</strong> Retail drug license issued by ADDC authorising sale of drugs to consumers.</p><p><strong>D&C Act 1940:</strong> Drugs and Cosmetics Act 1940 - central legislation governing drug manufacture, sale, and distribution.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Drug License in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Pharmaceutical Licensing</span>
                        <strong>Drug License Chennai</strong>
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
            <h2 class="section-title">Who Needs a Drug License in Chennai?</h2>
            <div class="content-text">
                
                <p><strong>Retail Pharmacy Shops in T. Nagar and Mylapore:</strong> Every medical shop selling allopathic, homoeopathic, or ayurvedic medicines needs a retail drug license (Form 20/21). A B.Pharm or D.Pharm pharmacist registered with the Tamil Nadu Pharmacy Council must be present.</p><p><strong>Wholesale Drug Distributors in Parry's Corner:</strong> Wholesale distributors supplying to retailers, hospitals, and clinics need a wholesale drug license (Form 20B/21B). A competent person (graduate with 1 year experience) is required.</p><p><strong>Pharmaceutical Manufacturers in Ambattur and Guindy:</strong> Companies manufacturing drugs and cosmetics need a manufacturing drug license under Form 25/26.</p><p><strong>Hospital and Clinical Pharmacies:</strong> Hospitals like Apollo, MIOT, Kauvery operate in-house pharmacies requiring retail drug licenses. Multi-location chains need separate licenses per premises.</p><p><strong>Online Pharmacy Operators:</strong> E-pharmacy businesses need drug licenses for each storage and dispatch location. For <a href="/gst-registration">GST Registration</a> alongside drug license, Patron handles both.</p><p><strong>Ayurvedic, Siddha, and Unani Medicine Sellers:</strong> Traditional medicine shops in Mylapore and Triplicane need specific licenses under the Ayurvedic/Siddha/Unani sections of the D&C Act.</p>

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
                        <tr><td>License Type Assessment</td><td>CA evaluates retail, wholesale, manufacturing, or combined licence and determines correct forms</td></tr><tr><td>Pharmacist/Competent Person Coordination</td><td>Verification of pharmacist registration with TN Pharmacy Council. Appointment and joining letter preparation.</td></tr><tr><td>Premises Layout Preparation</td><td>Blueprint signed by licensed engineer showing carpet area (min 10 sq.m), storage racks, refrigerator, A/C placement per D&C Rules 1945</td></tr><tr><td>Application Filing (Form 19/19A)</td><td>Complete filing on drugscontrol.tn.gov.in, TN Single Window Portal, or e-Sevai centre with all documents</td></tr><tr><td>Drug Inspector Coordination</td><td>Pre-inspection checklist, premises preparation, and inspection scheduling with Drug Inspector</td></tr><tr><td>License Delivery</td><td>Collection and delivery of drug license (Form 20/21 retail, Form 20B/21B wholesale) upon ADDC approval</td></tr><tr><td>GST Registration (Bundled)</td><td>Pharmaceutical businesses require GST. Patron handles <a href="/gst-registration">GST Registration</a> alongside drug license.</td></tr><tr><td>Renewal Management</td><td>Drug license renewal filed before expiry with same documentation. Patron tracks validity dates.</td></tr>

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
            <h2 class="section-title">Drug License Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Application is filed online through drugscontrol.tn.gov.in or e-Sevai centres. The only physical step is the Drug Inspector's premises visit at your Chennai location.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Assess License Type and Verify Pharmacist Eligibility</h3><p class="step-description">Your CA determines the correct license type: retail pharmacy in T. Nagar - Form 19. Wholesale distribution from Parry's Corner - Form 19A. Combined requires 15 sq.m. The CA verifies pharmacist holds valid B.Pharm/D.Pharm with current Tamil Nadu Pharmacy Council registration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Correct form selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pharmacist verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="30" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="45" y="15" width="30" height="45" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="80" y="15" width="30" height="45" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="25" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Retail</text><text x="60" y="42" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Wholesale</text><text x="95" y="42" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Mfg</text></svg></div><span class="illustration-label">Type Confirmed</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Premises and Documentation</h3><p class="step-description">Premises layout signed by licensed engineer showing carpet area (min 10 sq.m), storage racks, refrigerator, A/C. Documents compiled: pharmacist certificates, TN Pharmacy Council registration, appointment letter, ID/address proof, premises proof, refrigerator/A/C bills, and Rule 62B affidavit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Layout prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All docs compiled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="35" rx="3" fill="#FFF" stroke="#F5A623" stroke-width="1"/><line x1="42" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="42" y1="43" x2="70" y2="43" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="82" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">10 sq.m</text></svg></div><span class="illustration-label">Premises Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Register on Portal and File Application</h3><p class="step-description">Patron's CA registers on drugscontrol.tn.gov.in, fills Form 19 (retail) or Form 19A (wholesale) with all details and documents, pays government fee (Rs 1,500 for retail) online. Application reference number generated for tracking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Online portal filing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fee paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 19</text><text x="60" y="50" font-size="7" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">ADDC Chennai</text></svg></div><span class="illustration-label">Application Filed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">ADDC Scrutiny and Drug Inspector Premises Inspection</h3><p class="step-description">ADDC scrutinises application within 3 working days and forwards to Drug Inspector. The Inspector visits your Chennai pharmacy to verify: carpet area, storage racks, refrigerator (2-8°C for Schedule C/C1 drugs), A/C, pharmacist presence, and document compliance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pre-inspection checklist</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Premises prepared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="50" cy="35" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M60 45l10 10" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><circle cx="85" cy="20" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 20l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Inspection Passed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Drug Inspector Report and ADDC Approval</h3><p class="step-description">Drug Inspector uploads satisfactory inspection report. ADDC processes and issues the drug license - Form 20/21 for retail, Form 20B/21B for wholesale. If deficiencies are noted, Patron's CA addresses them promptly for re-inspection.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deficiencies addressed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>License approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="30" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 20</text><text x="60" y="48" font-size="7" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Drug License</text></svg></div><span class="illustration-label">License Issued</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-License Setup and Compliance</h3><p class="step-description">Drug license displayed at premises (mandatory). Patron assists with GST registration, Shops and Establishments Act registration with Greater Chennai Corporation, drug purchase/sale records setup, and platform onboarding (PharmEasy, Netmeds). Renewal tracked.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST + Shop Act done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Renewal tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#E8F5E9"/><rect x="55" y="20" width="25" height="40" rx="3" fill="#FFF3E0"/><text x="37" y="48" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GST</text><text x="67" y="45" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Shop Act</text></svg></div><span class="illustration-label">Fully Operational</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Drug License in Chennai</h2>
            <div class="content-text">
                
                <ul><li><strong>Pharmacist Registration Certificate</strong> - valid registration with Tamil Nadu Pharmacy Council for B.Pharm or D.Pharm holder</li><li><strong>Educational Certificates</strong> - attested copies of pharmacist's degree certificates</li><li><strong>Appointment Letter</strong> - letter appointing pharmacist/competent person with joining confirmation</li><li><strong>Premises Layout Plan</strong> - blueprint signed by licensed engineer showing area dimensions (min 10 sq.m retail)</li><li><strong>Premises Proof</strong> - rent agreement or sale deed + TNEB electricity bill</li><li><strong>Applicant ID and Address Proof</strong> - PAN, Aadhaar, photographs</li><li><strong>Business Constitution Proof</strong> - proprietorship declaration / partnership deed / company certificate</li><li><strong>Refrigerator and A/C Purchase Bills</strong> - with working condition/installation certificate</li><li><strong>Affidavit under Rule 62B</strong> - duly attested for lawful operations and compliance</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Chennai-Specific Tip:</strong> The Drug Inspector verifies that the refrigerator maintains 2-8°C for Schedule C/C1 drugs. Many Chennai pharmacies fail inspection because they use domestic refrigerators without temperature monitoring. Patron advises on pharmaceutical-grade refrigerators with temperature logs before inspection.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Drug License Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Premises Area Below Minimum</td><td>Many shops in congested areas below 10 sq.m carpet area</td><td>CA verifies premises dimensions before filing to prevent rejection</td></tr><tr><td>Pharmacist Registration Not Current</td><td>ADDC rejects applications with lapsed TN Pharmacy Council registration</td><td>Pharmacist credentials verified before filing</td></tr><tr><td>Wrong Form Selection</td><td>Confusing Form 19 (retail) with Form 19A (wholesale) causes rejection</td><td>Correct form selected based on business model</td></tr><tr><td>Drug Inspector Inspection Failures</td><td>Inadequate storage, missing temperature log, pharmacist absent</td><td>Pre-inspection checklist and pharmacist availability coordinated</td></tr><tr><td>Delayed Renewal Leading to Lapse</td><td>Operating with lapsed license is offence under Section 27</td><td>Renewal dates tracked and timely applications filed</td></tr>

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
            <h2 class="section-title">Drug License Fees in Chennai: 2026 Cost Breakdown</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Retail Drug License (Form 20/21)</td><td>Govt fee Rs 1,500 | Patron all-inclusive Rs 9,999</td></tr><tr><td>Wholesale Drug License (Form 20B/21B)</td><td>Govt fee Rs 1,500-3,000 | Patron all-inclusive Rs 14,999</td></tr><tr><td>Combined Retail + Wholesale</td><td>Govt fee Rs 3,000-5,000 | Patron all-inclusive Rs 19,999</td></tr><tr><td>Manufacturing Drug License</td><td>Govt fee Rs 3,500-6,000 | Patron all-inclusive Rs 29,999-49,999</td></tr><tr><td>License Renewal (any type)</td><td>Same as fresh | Patron Rs 7,999-14,999</td></tr><tr><td>GST Registration (additional)</td><td>Govt fee Rs 0 | Patron Rs 2,999 additional</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Drug License in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20drug%20license%20in%20Chennai.%20Please%20share%20a%20free%20consultation." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Pharmacist Verification</td><td>1-3 days - TN Pharmacy Council registration confirmed</td></tr><tr><td>Premises + Document Preparation</td><td>5-7 days - layout plan, document compilation</td></tr><tr><td>Application Filing</td><td>1-2 days - Form 19/19A on drugscontrol.tn.gov.in</td></tr><tr><td>ADDC Scrutiny</td><td>3-7 working days - application review</td></tr><tr><td>Drug Inspector Inspection</td><td>Within 7 working days - premises visit</td></tr><tr><td>ADDC Approval + License Issuance</td><td>5-10 working days - after satisfactory inspection</td></tr><tr><td>Total</td><td>~30 working days from application to licence</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Operating a pharmacy without a drug license is a criminal offence under Section 27 of the D&C Act 1940 - imprisonment up to 3 years. Start the licensing process before opening your Chennai pharmacy.</p>

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
            <h2 class="section-title">Why Choose Patron for Drug License in Chennai?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div><h3 class="feature-title">CA-Led with Integrated Compliance</h3><p class="feature-text">Patron integrates drug license with GST registration, accounting setup, and Shops Act registration. Your pharmacy gets a complete legal and financial foundation.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4z"/></svg></div><h3 class="feature-title">4-Office Pan-India Reach</h3><p class="feature-text">Offices in Pune, Mumbai, Delhi, Gurugram. Pharmacy chains with multi-city operations get centralised drug licensing and compliance.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">TN Drugs Control Familiarity</h3><p class="feature-text">Your file is handled by a CA/expert familiar with the ADDC Chennai zones, Drug Inspector inspection standards, and drugscontrol.tn.gov.in portal via Patron's pan-India team.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Pre-Inspection Expertise</h3><p class="feature-text">Detailed pre-inspection checklist covering D&C Rules storage conditions, temperature monitoring, pest control, and hygiene standards. Maximises first-time inspection success.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p><p><strong>4-Office Signal:</strong> Offices in Pune, Mumbai, Delhi, Gurugram serving Chennai pharmaceutical businesses through digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Retail vs Wholesale vs Manufacturing Drug License</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Retail License</th><th>Wholesale License</th><th>Manufacturing License</th></tr></thead>
                    <tbody>
                        <tr><td>Application Form</td><td>Form 19</td><td>Form 19A</td><td>Form 24/24A</td></tr><tr><td>License Form</td><td>Form 20/21</td><td>Form 20B/21B</td><td>Form 25/26</td></tr><tr><td>Minimum Area</td><td>10 sq.m</td><td>10 sq.m</td><td>Per GMP guidelines</td></tr><tr><td>Personnel</td><td>B.Pharm/D.Pharm pharmacist</td><td>Graduate with 1yr experience</td><td>Qualified technical staff</td></tr><tr><td>Govt Fee</td><td>Rs 1,500</td><td>Rs 1,500-3,000</td><td>Rs 3,500-6,000</td></tr><tr><td>Patron Fee</td><td>Rs 9,999</td><td>Rs 14,999</td><td>Rs 29,999-49,999</td></tr><tr><td>Who in Chennai</td><td>Medical shops, hospital pharmacies</td><td>Parry's Corner distributors</td><td>Ambattur/Guindy units</td></tr>

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
            <h2 class="section-title">Related Services for Chennai Pharma Businesses</h2>
            <div class="content-text">
                
                <p>If you need a drug license in Chennai, you may also benefit from:</p><ul><li><a href="#">Drug License (India)</a> - national service page</li><li><a href="/gst-registration">GST Registration</a> - mandatory for pharmaceutical businesses</li><li><a href="/shop-act-registration">Shop Act Registration</a> - Chennai municipal licence</li><li><a href="/accounting-services">Accounting Services</a> - CA-managed accounting</li><li><a href="/trademark-registration">Trademark Registration</a> - brand protection for pharma</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Drug License in Chennai</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul><li>Drugs and Cosmetics Act, 1940 (D&C Act)</li><li>Drugs and Cosmetics Rules, 1945 (D&C Rules)</li><li>Pharmacy Act, 1948 (pharmacist registration)</li><li>D&C Act Section 18 - prohibition of manufacture/sale without license</li><li>D&C Act Section 27 - penalty for contravention</li><li>D&C Rules Rule 62B (declaration requirements)</li><li>Tamil Nadu Shops and Establishments Act, 1947</li></ul><p><strong>Penalties:</strong></p><ul><li>Operating without drug license: imprisonment up to 3 years + fine under Section 27</li><li>Sale of adulterated drugs: imprisonment up to 3 years + Rs 5,000 fine</li><li>Sale of spurious drugs: imprisonment up to life + fine under Section 27(a)</li><li>Pharmacist absence during hours: license suspension risk</li></ul><p><strong>Authority:</strong> Drugs Controller, TN - 258-261 Anna Salai, Chennai | <a href="https://drugscontrol.tn.gov.in" target="_blank" rel="noopener">drugscontrol.tn.gov.in</a> | CDSCO - <a href="https://cdsco.gov.in" target="_blank" rel="noopener">cdsco.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Drug License in Chennai</h2>
                    <p class="faq-expanded__lead">Answers to common questions about drug license types, fees, premises requirements, and pharmacist eligibility in Chennai.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Drug License in Chennai',
                        'city'     => 'Chennai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which authority issues drug license in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Drug licenses are issued by the Assistant Director of Drugs Control (ADDC) of the respective Chennai zone under the Tamil Nadu Drugs Control Department headquartered at 258-261, Anna Salai. Applications are filed on drugscontrol.tn.gov.in, TN Single Window Portal, or e-Sevai centres.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I apply for drug license online from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. The application is filed online through drugscontrol.tn.gov.in or e-Sevai centres. Documents are uploaded digitally and fees paid online. The only physical step is the Drug Inspector's premises inspection. Patron handles all portal filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of drug license in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Government fee for retail is Rs 1,500. Wholesale Rs 1,500-3,000. Combined Rs 3,000-5,000. Patron's all-inclusive fee starts from Rs 9,999 for retail and Rs 14,999 for wholesale, covering all documentation, layout, affidavit, and filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does drug license take in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Approximately 30 working days from application submission. ADDC scrutiny 3-7 days, Drug Inspector inspection within 7 days of forwarding, and final approval 5-10 days. Patron ensures complete documentation to prevent deficiency delays.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is a pharmacist mandatory for drug license?</h3>
                        <div class="faq-expanded__a"><p>Yes. Retail drug license requires a B.Pharm or D.Pharm pharmacist registered with Tamil Nadu Pharmacy Council, present during operating hours. Wholesale requires a competent person with graduate degree plus 1 year drug dealing experience.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the minimum area for a pharmacy in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Minimum carpet area: retail 10 sq.m, wholesale 10 sq.m, combined retail+wholesale 15 sq.m. The Drug Inspector measures carpet area during inspection - corridors and toilets are excluded.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if I operate without a drug license?</h3>
                        <div class="faq-expanded__a"><p>Operating without a valid drug license violates Section 18 read with Section 27 of the D&C Act 1940. Penalties include imprisonment up to 3 years and fine. For spurious drugs, penalties can extend to life imprisonment. Drug Inspectors conduct regular raids.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I get both retail and wholesale drug license together?</h3>
                        <div class="faq-expanded__a"><p>Yes. Both Form 19 and Form 19A can be filed simultaneously. Combined license requires 15 sq.m premises instead of 10. Both pharmacist (retail) and competent person (wholesale) must be appointed, though one person can serve both roles if qualified.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Chennai mein drug license kaise milta hai?</strong> drugscontrol.tn.gov.in portal par Form 19 ya 19A file karna hota hai. ADDC Chennai scrutiny ke baad Drug Inspector premises inspect karta hai. 30 din mein licence milta hai.</p><p><strong>Pharmacy shop ke liye minimum area kitna chahiye?</strong> Retail pharmacy ke liye minimum 10 sq.m carpet area chahiye. Retail + wholesale combined ke liye 15 sq.m.</p><p><strong>Pharmacist zaroori hai kya?</strong> Haan. B.Pharm ya D.Pharm with TN Pharmacy Council registration mandatory hai retail drug license ke liye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Do Not Delay Your Drug License in Chennai</h2>
            <div class="content-text">
                
                <p>Operating a pharmacy without a drug license is a criminal offence under Section 27 of the D&C Act 1940 - imprisonment up to 3 years. Drug Inspectors conduct regular surprise inspections across Chennai zones. Platforms like PharmEasy and Netmeds require valid drug license numbers for onboarding. Every day your pharmacy operates without a license is a day of criminal liability and lost platform revenue.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20drug%20license%20in%20Chennai." target="_blank" rel="noopener">WhatsApp us</a> to start your drug license application today.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Drug License Application in Chennai Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">A drug license in Chennai is mandatory for every pharmaceutical business - from retail pharmacies in T. Nagar to wholesale distributors in Parry's Corner and manufacturers in Ambattur. Issued by ADDC Chennai after Drug Inspector inspection, the license ensures legal compliance with the Drugs and Cosmetics Act 1940.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting serves Chennai pharmaceutical businesses through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles drug license application, inspection coordination, and post-license compliance.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20drug%20license%20in%20Chennai.%20Please%20share%20a%20free%20consultation." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Drug%20License%20in%20Chennai&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20a%20drug%20license%20in%20Chennai.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert drug license services across major Indian cities</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available Cities</div><div class="pa-block-sub">Drug license with local regulatory expertise</div><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Chennai</div><div class="pa-block-sub">End-to-end support for pharmaceutical businesses in Chennai</div><div class="pa-cross-grid"><a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/fssai-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Chennai</div></div><a href="/income-tax-return/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Chennai</div></div></a><a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect changes in D&C Act amendments, TN Drugs Control Department procedures, and licensing fee revisions. Next review: October 2026.</p>
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
