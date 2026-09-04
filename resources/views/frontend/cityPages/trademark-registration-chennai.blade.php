
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>Trademark Registration in Chennai – TM-A, Fees &amp; Process</title>
    <meta name="description" content="CA-assisted trademark registration in Chennai via IP India. Rs 4,500/class for startups. TM Registry Chennai filing. Serving OMR, T. Nagar brands. Call +91 945 945 6700.">
    <link rel="canonical" href="/trademark-registration/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Registration in Chennai – TM-A, Fees &amp; Process">
    <meta property="og:description" content="CA-assisted trademark registration in Chennai via IP India. Rs 4,500/class for startups. TM Registry Chennai filing. Serving OMR, T. Nagar brands. Call +91 945 945 6700.">
    <meta property="og:url" content="/trademark-registration/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Registration in Chennai – TM-A, Fees &amp; Process">
    <meta name="twitter:description" content="CA-assisted trademark registration in Chennai via IP India. Rs 4,500/class for startups. TM Registry Chennai filing. Serving OMR, T. Nagar brands. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Trademark Registration in Chennai",
          "description": "CA-assisted trademark registration in Chennai via IP India. Rs 4,500/class for startups. TM Registry Chennai filing. Serving OMR, T. Nagar brands. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/trademark-registration/chennai",
          "serviceType": "Trademark Registration in Chennai",
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
            "url": "https://www.patronaccounting.com/trademark-registration/chennai",
            "price": "2499"
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
              "name": "Trademark Registration",
              "item": "https://www.patronaccounting.com/trademark-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Trademark Registration Chennai",
              "item": "https://www.patronaccounting.com/trademark-registration/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to register a trademark in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Search IP India portal select NICE classes file Form TM-A via e-filing with Rs 4,500 per class for startups or Rs 9,000 for companies. Trademark Registry Chennai examines. Respond to objections within 30 days. After 4-month journal registration certificate issued."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for trademark registration in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Government fee for e-filing Rs 4,500 per class for individuals DPIIT startups and MSMEs with 50 percent concession. Rs 9,000 per class for companies and LLPs. Fees are per class. Patron professional fee from Rs 2,499 per class."
              }
            },
            {
              "@type": "Question",
              "name": "How long does trademark registration take in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Complete process takes 6-18 months: filing 1-2 days examination 1-6 months objection response 30 days plus hearing journal publication 4 months and certificate issuance 1-2 months."
              }
            },
            {
              "@type": "Question",
              "name": "Is trademark valid nationwide from Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Registration from Chennai through any of India 5 Trademark Registries provides exclusive protection across all of India. Trademark Registry Chennai is a national office with same legal effect as Mumbai or Delhi."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        Trademark Registration in Chennai: Protect Your Brand via IP India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Brand name/logo, applicant ID, business proof, MSME/DPIIT certificate (for 50% rebate)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 4,500/class (individuals, startups, MSMEs) | Rs 9,000/class (companies, LLPs)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Individuals, companies, LLPs, partnerships, trusts, proprietorships</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 6-18 months (examination to registration certificate)</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Trademark Registration in Chennai',
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
    'ctaText'    => 'Get expert CA assistance for trademark registration in Chennai. From search to renewal, we handle everything.',
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
            <a href="#overview-section" class="toc-pill">Overview</a><a href="#what-section" class="toc-pill">What Is Trademark</a><a href="#who-section" class="toc-pill">Who Needs It</a><a href="#services-section" class="toc-pill">Services</a><a href="#procedure-section" class="toc-pill">6-Step Process</a><a href="#documents-section" class="toc-pill">Documents</a><a href="#challenges-section" class="toc-pill">Challenges</a><a href="#fees-section" class="toc-pill">Fees</a><a href="#timeline-section" class="toc-pill">Timeline</a><a href="#benefits-section" class="toc-pill">Why Patron</a><a href="#comparison-section" class="toc-pill">Mark Types</a><a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration in Chennai: Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Registration in Chennai Services at a Glance</strong></p>
                    <p>Trademark registration in Chennai protects your brand name, logo, slogan, or sound mark under the Trade Marks Act, 1999. Filed as Form TM-A on the IP India e-filing portal, applications are processed by the Trademark Registry, Chennai - one of only 5 trademark registry offices in India. Government fee starts at Rs 4,500 per class for individuals, DPIIT startups, and MSMEs (50% concession). Registration grants exclusive nationwide rights, the registered symbol, and 10-year protection renewable indefinitely.</p>
                </div>
                <p>Chennai's brand ecosystem spans every industry. OMR's SaaS companies build globally recognised software brands. T. Nagar's textile and jewellery retailers operate iconic local brands. Restaurant chains on Anna Salai expand with branded franchise models. D2C brands from Velachery sell nationwide on Amazon and Flipkart. Every one of these brands needs trademark protection.</p>
                <div class="table-responsive-wrapper" style="margin:20px 0;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
                    <tr><td>Governing Law</td><td>Trade Marks Act, 1999 | Trade Marks Rules, 2017</td></tr>
                    <tr><td>Authority</td><td>Controller General of Patents, Designs and Trade Marks (CGPDTM)</td></tr>
                    <tr><td>Registry</td><td>Trademark Registry, Chennai (1 of 5 national offices)</td></tr>
                    <tr><td>Portal</td><td>ipindiaonline.gov.in (e-filing)</td></tr>
                    <tr><td>Form</td><td>TM-A (new application)</td></tr>
                    <tr><td>Govt Fee (e-filing)</td><td>Rs 4,500/class (individual/startup/MSME) | Rs 9,000/class (company/LLP)</td></tr>
                    <tr><td>Classification</td><td>45 classes (NICE) - Classes 1-34: goods | Classes 35-45: services</td></tr>
                    <tr><td>Validity</td><td>10 years from filing date (renewable for successive 10-year periods)</td></tr>
                    <tr><td>Timeline</td><td>6-18 months (search to registration certificate)</td></tr>
                </tbody></table></div><p</p>
                <p>Chennai hosts one of India's five Trademark Registry offices. DPIIT-recognised startups and Udyam-registered MSMEs get a 50% fee concession. Patron Accounting's CA team handles the complete <a href="/trademark-registration">trademark registration</a> - from availability search on IP India, NICE class selection, Form TM-A e-filing, examination report response (Section 9/11 objections), opposition handling, and registration certificate delivery. Consider <a href="/startup-registration">Startup Registration</a> or <a href="/udyam-registration">MSME Registration</a> to avail the 50% fee concession.</p>
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
                    
                    <p>Trademark registration is the process of legally protecting a brand name, logo, slogan, or sound mark by filing Form TM-A with the Trademark Registry under the Trade Marks Act, 1999, granting exclusive nationwide rights to use the mark in connection with specified goods or services.</p>
                    <p>A trademark can be a word mark (brand name), device mark (logo), combination mark (name + logo), shape mark, colour mark, or sound mark. Registration provides the legal right to use the registered symbol, sue for infringement, and prevent competitors from using confusingly similar marks. India follows the NICE International Classification with 45 classes - Classes 1-34 cover goods and Classes 35-45 cover services.</p>
                    <p>For Chennai, trademark registration is especially critical given the city's competitive brand landscape. T. Nagar has hundreds of textile retailers with similar-sounding names. OMR SaaS companies need trademark protection before raising funding - investors conduct IP due diligence. Restaurant chains expanding from Anna Salai need registered trademarks before franchising. The Trademark Registry, Chennai processes applications for Tamil Nadu, making local hearings accessible.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Registration in Chennai:</strong></p>
                    <ul>
                        <li><strong>Form TM-A:</strong> Application form for new trademark registration filed on IP India e-filing portal.</li>
                        <li><strong>NICE Classification:</strong> International system of 45 classes categorising goods (1-34) and services (35-45).</li>
                        <li><strong>Section 9:</strong> Absolute grounds for refusal - descriptive, generic, or deceptive marks.</li>
                        <li><strong>Section 11:</strong> Relative grounds for refusal - mark similar to an existing registered mark.</li>
                        <li><strong>Trademark Journal:</strong> 4-month publication period where third parties can oppose registration.</li>
                        <li><strong>Madrid Protocol:</strong> International trademark filing system enabling protection in multiple countries from India.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Registration in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>50% Startup Rebate</span>
                        <strong>Nationwide ® Protection</strong>
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
            <h2 class="section-title">Who Needs Trademark Registration in Chennai?</h2>
            <div class="content-text">
                
                <h3>SaaS and Tech Startups on OMR</h3><p>Software brands, app names, and company logos need protection before product launch. VC investors require trademark filing as part of IP due diligence. DPIIT-recognised startups get 50% fee concession.</p>
                <h3>Retail and Textile Brands in T. Nagar</h3><p>Textile shops, jewellery brands, and retail chains with distinctive brand names. With hundreds of retailers in close proximity, trademark registration prevents brand confusion and protects decades of goodwill.</p>
                <h3>Restaurant Chains and Cloud Kitchens</h3><p>Dine-in restaurants on Anna Salai, cloud kitchens on OMR, and QSR brands expanding across Chennai. Trademark is prerequisite for franchising and platform brand protection.</p>
                <h3>D2C and E-Commerce Brands</h3><p>Brands selling on Amazon, Flipkart, and Meesho from Chennai. Marketplace brand registry programmes require trademark registration for brand protection features.</p>
                <h3>Manufacturers and Export Brands</h3><p>Engineering, auto-component, and pharma manufacturers in Ambattur, Guindy, and Sriperumbudur. Madrid Protocol enables international brand protection from Chennai. Consider <a href="/private-limited-company-registration/chennai">Private Limited Company Registration in Chennai</a> alongside trademark.</p>
                <h3>Professional Services Firms</h3><p>CA firms, law practices, IT consulting companies on Anna Salai and Nungambakkam. Service marks (Classes 35-45) protect professional brand identity.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Trademark Availability Search</td><td>Comprehensive search on IP India for identical and similar marks in relevant classes - wordmarks, device marks, phonetic similarities</td></tr>
                        <tr><td>NICE Class Selection</td><td>Correct class selection based on Chennai business activities and future expansion plans - wrong class leaves brand unprotected</td></tr>
                        <tr><td>Form TM-A E-Filing</td><td>Complete application on IP India portal with mark representation, class(es), goods/services specification, and fee payment</td></tr>
                        <tr><td>Examination Report Response</td><td>Response to Section 9 (descriptive) or Section 11 (similar mark) objections within 30-day deadline with legal arguments</td></tr>
                        <tr><td>Opposition Defence</td><td>4-month journal publication monitoring and opposition proceedings handling if any third party opposes</td></tr>
                        <tr><td>Registration Certificate Delivery</td><td>Trademark Registration Certificate with registered symbol rights delivered. Brand usage guidelines provided</td></tr>
                        <tr><td>Renewal Tracking (10-Year Cycle)</td><td>10-year renewal tracked and TM-R filed before expiry to maintain protection indefinitely</td></tr>
                        <tr><td>Madrid Protocol (International)</td><td>International trademark filing from India - single application designating multiple countries for global brands</td></tr>

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
            <h2 class="section-title">Trademark Registration Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Your dedicated CA handles the complete trademark registration via IP India e-filing. Hearings at Trademark Registry, Chennai.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Conduct Trademark Availability Search</h3><p class="step-description">Your CA searches the IP India trademark public search portal for identical and similar marks across relevant NICE classes. The search includes wordmark comparison, phonetic similarity analysis, and device mark visual comparison. If conflicts are found, Patron advises on name modifications before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Conflicts Checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Clear to File</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="82" y1="62" x2="100" y2="80" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><circle cx="55" cy="35" r="8" fill="none" stroke="#F5A623" stroke-width="2"/><text x="55" y="39" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">TM</text></svg></div><span class="illustration-label">Search Complete</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Select NICE Classes and Draft Goods/Services Specification</h3><p class="step-description">Patron selects correct NICE classes for your Chennai business. An OMR SaaS company might need Class 9 + Class 42. A T. Nagar textile retailer might need Class 24 + Class 25 + Class 35. The goods/services specification is drafted with precision - overly broad gets rejected, overly narrow leaves gaps.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Classes Selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Spec Drafted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="37" y="47" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">C9</text><rect x="55" y="25" width="25" height="35" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="67" y="47" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">C42</text><rect x="85" y="25" width="15" height="35" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="92" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+</text></svg></div><span class="illustration-label">Strategy Set</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Form TM-A on IP India E-Filing Portal</h3><p class="step-description">Patron files Form TM-A electronically with applicant details, mark representation (word/logo), class(es), goods/services specification, and fee payment. Rs 4,500/class for individuals/startups/MSMEs; Rs 9,000/class for companies/LLPs. TM Application Number generated. The trademark symbol can be used from this point.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TM-A Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fee Paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="35" y="40" width="50" height="8" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="35" y="75" width="50" height="15" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="86" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TM-A Filed</text></svg></div><span class="illustration-label">Application Submitted</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Trademark Examination and Objection Response</h3><p class="step-description">The Examiner reviews and issues an Examination Report. Common objections: Section 9 (descriptive) or Section 11 (similar mark). Patron prepares detailed response within 30 days with distinctiveness evidence and legal arguments. If needed, a hearing is attended at Trademark Registry, Chennai.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Objection Handled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Hearing Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><rect x="70" y="55" width="28" height="28" rx="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M78 69l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Examination Cleared</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Trademark Journal Publication and Opposition Period</h3><p class="step-description">Once the Examiner is satisfied, the mark is published in the Trademark Journal for 4 months. Any third party can oppose. If no opposition, registration proceeds. If opposition filed, Patron handles counter-statement and evidence filing at Chennai Registry.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Journal Published</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-Month Watch</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">JOURNAL</text><rect x="30" y="38" width="60" height="6" rx="3" fill="#F5A623" opacity="0.5"/><text x="60" y="56" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">4 months</text></svg></div><span class="illustration-label">Opposition Cleared</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Registration Certificate and Registered Symbol Rights</h3><p class="step-description">After the opposition period, the Registrar issues the Trademark Registration Certificate. The registered symbol can now be used. Valid for 10 years from filing date with exclusive nationwide rights. Patron sets up the 10-year renewal tracker and advises on brand usage, licensing, and enforcement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10-Year Protection</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="37" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="41" font-size="14" fill="#25D366" font-weight="900" text-anchor="middle" font-family="Arial">R</text><rect x="30" y="72" width="60" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="84" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTERED</text></svg></div><span class="illustration-label">Brand Protected</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Trademark Registration in Chennai</h2>
            <div class="content-text">
                
                <ul><li><strong>Brand Name/Logo:</strong> Clear representation of the wordmark and/or device mark (logo) in JPEG format.</li><li><strong>Applicant ID Proof:</strong> PAN card or Aadhaar of the individual applicant / directors.</li><li><strong>Business Registration Proof:</strong> Certificate of Incorporation / LLP Agreement / Partnership Deed / GST Certificate.</li><li><strong>DPIIT/MSME Certificate (for 50% rebate):</strong> DPIIT startup recognition or Udyam MSME certificate for Rs 4,500/class rate.</li><li><strong>Address Proof:</strong> Business address in Chennai with utility bill.</li><li><strong>User Affidavit (if claiming prior use):</strong> If mark in use before filing, affidavit with date of first use.</li><li><strong>Power of Attorney (TM-48):</strong> If filed through a trademark agent/attorney.</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Chennai-Specific Tip:</strong> T. Nagar retailers with decades of brand use should file with 'prior use' date claim supported by invoices, signage photographs, and newspaper advertisements. Prior use establishes seniority over later-filed applications. Patron documents prior use evidence systematically.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trademark Registration Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Section 9 Objection (Descriptive)</td><td>Descriptive names rejected for lacking distinctiveness</td><td>Advises on coined or suggestive names with stronger registrability before filing</td></tr><tr><td>Section 11 Objection (Similar Mark)</td><td>Thousands of registered marks create frequent conflicts; 30-day response window</td><td>Pre-filing search + detailed objection response with distinctiveness evidence</td></tr><tr><td>Wrong NICE Class</td><td>SaaS company filing only Class 9 but not Class 42 leaves services unprotected</td><td>Multi-class analysis for comprehensive brand protection</td></tr><tr><td>Opposition by Third Parties</td><td>Missing response deadline during 4-month journal period results in refusal</td><td>Monitors journal and responds to opposition notices promptly</td></tr><tr><td>10-Year Renewal Lapse</td><td>Forgotten renewal loses trademark rights; competitors can claim the mark</td><td>10-year renewal cycle tracked and TM-R filed before expiry</td></tr>

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
            <h2 class="section-title">Trademark Registration Fees in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Individual/Startup/MSME per class, e-filing)</td><td>Rs 4,500</td></tr>
                        <tr><td>Government Fee (Company/LLP per class, e-filing)</td><td>Rs 9,000</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR Govt fee 4,500 + 2,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Expedited Examination</td><td>Rs 20,000 (individual) / Rs 40,000 (company)</td></tr>
                        <tr><td>Opposition Response</td><td>Rs 2,500 (govt) + Rs 9,999 Patron</td></tr>
                        <tr><td>Renewal (10 years)</td><td>Rs 9,000 (individual) / Rs 18,000 (company) + Patron Rs 12,999-19,999</td></tr>
                        <tr><td>Multi-Class Discount</td><td>Bundle pricing available for multiple classes</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Registration in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Trademark Search</td><td>1-2 days</td></tr><tr><td>TM-A Filing</td><td>1-2 days</td></tr><tr><td>Examination</td><td>1-6 months</td></tr><tr><td>Objection Response (if any)</td><td>30 days + hearing time</td></tr><tr><td>Journal Publication</td><td>4 months (opposition period)</td></tr><tr><td>Registration Certificate</td><td>1-2 months post journal</td></tr><tr><td><strong>Total</strong></td><td><strong>6-18 months</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Chennai Processing Note (Group B):</strong> Filing is online via IP India e-filing portal. Trademark Registry, Chennai handles examination and hearings for Tamil Nadu applications. Patron manages all portal filing, examiner responses, and hearing representation digitally.</p>

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
            <h2 class="section-title">Why Choose Patron for Trademark Registration in Chennai?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Led with Business Integration</h3><p>Trademark bundled with company incorporation, GST, and DPIIT recognition - securing the 50% fee concession and complete brand protection from day one.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Trademark Registry Chennai Access</h3><p>Chennai hosts one of 5 national Trademark Registry offices. Your file handled by a CA familiar with Chennai Registry examination patterns and hearing procedures.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-city brands filing in multiple classes get centralised trademark portfolio management.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Objection and Hearing Expertise</h3><p>Section 9/11 objection responses within 30 days and representation at Trademark Registry hearings in Chennai - services most portals do not offer.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;margin:24px 0;"><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">10,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Businesses Served</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">4.9</span><br><span style="color:var(--text-muted);font-size:14px;">Google Rating</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">50,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Documents Filed</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">15+</span><br><span style="color:var(--text-muted);font-size:14px;">Years Experience</span></div></div><p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai brands through a digital-first CA team. We combine trademark registration with search, class selection, objection handling, and 10-year renewal tracking from one team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Wordmark vs Logo vs Combination: Chennai Brand Guide</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Type</th><th>What It Protects</th><th>Best For Chennai</th></tr></thead>
                    <tbody>
                        <tr><td>Wordmark</td><td>Brand name text only</td><td>SaaS company names on OMR, restaurant chain names</td></tr><tr><td>Device Mark (Logo)</td><td>Logo/symbol only</td><td>Distinctive logos, visual brand identities</td></tr><tr><td>Combination</td><td>Name + logo together</td><td>D2C brands, retail stores with logo+name signage</td></tr><tr><td>Sound Mark</td><td>Audio signature</td><td>Tech brands, media companies</td></tr><tr><td>Colour Mark</td><td>Specific colour(s)</td><td>FMCG brands, recognisable colour schemes</td></tr>

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
                
                <ul><li><a href="/trademark-registration">Trademark Registration in India</a> - Parent national service page</li><li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition for 50% trademark fee concession</li><li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Company incorporation with brand setup</li><li><a href="/gst-registration">GST Registration</a> - Tax compliance for branded businesses</li><li><a href="/udyam-registration">MSME Registration</a> - Udyam for 50% trademark fee concession</li><li><a href="/copyright-registration">Copyright Registration</a> - Complementary IP protection for creative works</li></ul>

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
                
                <ul><li>Trade Marks Act, 1999</li><li>Trade Marks Rules, 2017 (First Schedule - fees)</li><li>Section 9 - Absolute grounds for refusal (descriptive, generic, deceptive)</li><li>Section 11 - Relative grounds for refusal (similar to existing mark)</li><li>Section 29 - Infringement of registered trademark</li><li>Section 30 - Limits on effect of registered trademark (fair use)</li><li>NICE International Classification (45 classes)</li><li>Madrid Protocol (international trademark filing from India)</li></ul><h3>Key Compliance</h3><ul><li>Renewal: Every 10 years (file TM-R before expiry)</li><li>Use requirement: Non-use for 5+ years makes mark vulnerable to cancellation</li><li>Assignment/licensing: Must be recorded with Registry</li><li>Infringement monitoring: Mark owner's responsibility</li></ul><p><strong>Authority:</strong> IP India - <a href="https://ipindia.gov.in" target="_blank" rel="noopener">ipindia.gov.in</a> | TM e-filing - <a href="https://ipindiaonline.gov.in" target="_blank" rel="noopener">ipindiaonline.gov.in</a> | TM Public Search - <a href="https://ipindiaonline.gov.in/tmrpublicsearch/" target="_blank" rel="noopener">ipindiaonline.gov.in/tmrpublicsearch</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Trademark Registration in Chennai</h2>
                    <p class="faq-expanded__lead">Answers to common questions about trademark registration in Chennai, covering fees, classes, objections, and the registered symbol.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trademark Registration in Chennai',
                        'city'     => 'Chennai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to register a trademark in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Search IP India portal, select NICE classes, file Form TM-A via e-filing with Rs 4,500/class (individuals/startups) or Rs 9,000/class (companies). Trademark Registry Chennai examines. Respond to objections within 30 days. After 4-month journal without opposition, registration certificate issued.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the fee for trademark registration in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Government fee for e-filing: Rs 4,500 per class for individuals, DPIIT startups, and MSMEs (50% concession). Rs 9,000 per class for companies and LLPs. Fees are per class. Patron all-inclusive from Rs 2,499 per class professional fee plus govt fee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does trademark registration take in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Complete process takes 6-18 months: filing (1-2 days), examination (1-6 months), objection response if any (30 days + hearing), journal publication (4 months), and certificate issuance (1-2 months). Expedited examination available.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is trademark valid nationwide from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. Registration from Chennai through any of India's 5 Trademark Registries provides exclusive protection across all of India. For international protection, the Madrid Protocol enables filing from India.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between the trademark and registered symbols?</h3>
                        <div class="faq-expanded__a"><p>The trademark symbol can be used from the date of filing - it indicates a claim. The registered symbol can only be used after the Registrar issues the certificate - it confirms legal registration. Using the registered symbol without registration is an offence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do startups get trademark fee concession?</h3>
                        <div class="faq-expanded__a"><p>Yes. DPIIT-recognised startups and Udyam MSMEs get 50% concession - Rs 4,500/class instead of Rs 9,000 (same rate as individuals). DPIIT or Udyam certificate must be submitted with the application.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Which NICE classes does my Chennai business need?</h3>
                        <div class="faq-expanded__a"><p>Depends on activities. Software: Class 9 + 42. Restaurants: Class 43. Textiles: Class 24 + 25. Food products: Class 29 + 30. IT services: Class 42. Retail: Class 35. Patron analyses your business for optimal selection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if someone opposes my trademark?</h3>
                        <div class="faq-expanded__a"><p>During 4-month journal period, anyone can file opposition via Form TM-O. You must file counter-statement within 2 months. Evidence exchanged and hearing held at Trademark Registry Chennai. Patron handles opposition defence.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Chennai mein trademark kaise register hota hai?</strong> IP India portal par Form TM-A file karo. Rs 4,500/class (startup/individual) ya Rs 9,000/class (company). 6-18 mahine mein registration certificate milta hai.</p><p><strong>Trademark aur registered symbol mein kya fark hai?</strong> Trademark symbol application file karne ke baad use karo. Registered symbol sirf registration certificate milne ke baad use karo.</p><p><strong>Startup ko discount milta hai kya?</strong> Haan. DPIIT ya MSME certificate ke saath 50% concession milti hai - Rs 4,500/class.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your Trademark Registration in Chennai</h2>
            <div class="content-text">
                
                <p>In India, trademark rights are largely 'first-to-file' - the first person to file gets priority. Every day you delay, a competitor could file a similar mark in your class. Once registered by someone else, removing the mark requires expensive proceedings. Chennai's competitive brand landscape - especially in retail (T. Nagar), food (Anna Salai), and tech (OMR) - means similar names are filed frequently. Filing takes just 1-2 days and costs Rs 4,500/class for startups. Protect your brand now.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Trademark Registration in Chennai with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Trademark registration in Chennai protects your brand name, logo, and identity under the Trade Marks Act, 1999 with exclusive nationwide rights for 10 years (renewable). Filed on the IP India portal and processed by the Trademark Registry, Chennai - one of India's 5 national offices.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting serves Chennai brands through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles trademark search, class selection, TM-A filing, objection response, and 10-year renewal tracking.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trademark%20Registration%20in%20Chennai&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted trademark registration services in major cities across India.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/trademark-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/trademark-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/trademark-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/trademark-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/trademark-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/trademark-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/trademark-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Chennai</div><div class="pa-block-sub">End-to-end support for Trademark Registration in Chennai</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/llp-incorporation/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/income-tax-return/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Chennai</div></div></a><a href="/udyam-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Udyam Registration</div><div class="pa-card-sub">Chennai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed bi-annually. Trademark fees, examination procedures, and IP India portal rules are subject to change via CGPDTM notifications. Freshness Tier 2.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
