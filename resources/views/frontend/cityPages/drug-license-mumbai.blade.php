
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Drug License in Mumbai - Retail, Wholesale & CDSCO</title>
    <meta name="description" content="CA-assisted drug licence in Mumbai. Retail, wholesale, manufacturing. FDA Maharashtra inspection support. Pharmacy compliance. Call +91 945 945 6700.">
    <link rel="canonical" href="#">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Drug License in Mumbai - Retail, Wholesale & CDSCO">
    <meta property="og:description" content="CA-assisted drug licence in Mumbai. Retail, wholesale, manufacturing. FDA Maharashtra inspection support. Pharmacy compliance. Call +91 945 945 6700.">
    <meta property="og:url" content="/drug-license/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Drug License in Mumbai - Retail, Wholesale & CDSCO">
    <meta name="twitter:description" content="CA-assisted drug licence in Mumbai. Retail, wholesale, manufacturing. FDA Maharashtra inspection support. Pharmacy compliance. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Drug License in Mumbai",
      "description": "CA-assisted drug licence in Mumbai. Retail, wholesale, manufacturing. FDA Maharashtra inspection support. Pharmacy compliance. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/drug-license/mumbai",
      "serviceType": "Drug License in Mumbai",
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
        "url": "https://www.patronaccounting.com/drug-license/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "4999",
          "maxPrice": "14999",
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
          "name": "Drug License in India: Types, Process, Fees and Forms",
          "item": "https://www.patronaccounting.com/drug-license"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Drug License in Mumbai",
          "item": "https://www.patronaccounting.com/drug-license/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which authority issues drug licence in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Drug licences in Mumbai are issued by the Food and Drug Administration (FDA) Maharashtra. The FDA headquarters is at 2nd Floor, Survey No. 341, Bandra Kurla Complex, Bandra (East), Mumbai 400051. Applications are filed online through the Aaple Sarkar / XLNIndia portal. The local Drugs Inspector conducts premises inspection before licence grant. Patron's Marine Lines team handles the complete filing and coordinates with the Inspector."
          }
        },
        {
          "@type": "Question",
          "name": "What is the minimum area for a pharmacy in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A retail or wholesale drug store in Mumbai requires a minimum carpet area of 10 square meters with a separate and exclusive entrance. A combined retail and wholesale outlet needs minimum 15 square meters. The premises must be commercially classified - drug licences are not granted for residential areas. The premises must also include a refrigerator for vaccine storage, cupboards and racks for drug storage, and proper ventilation."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of drug licence in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fees in Maharashtra are Rs 3,250 for retail allopathic and homeopathic, Rs 3,000 for wholesale, Rs 250 for wholesale homeopathic, Rs 600 for Schedule X retail, and Rs 1,200 for Schedule X wholesale. Through Patron, all-inclusive professional fees start from Rs 4,999 for retail or wholesale, covering document preparation, application filing, and Drugs Inspector coordination. Manufacturing licence starts from Rs 14,999. All fees exclusive of GST."
          }
        },
        {
          "@type": "Question",
          "name": "Is a registered pharmacist required for drug licence in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, for retail drug licence. A Registered Pharmacist must be appointed and physically present during the operating hours of the retail pharmacy. The pharmacist must hold a valid degree and be registered with the Maharashtra State Pharmacy Council. For wholesale licence, either a Registered Pharmacist or a competent person with a graduate degree and minimum one year of drug dealing experience is required."
          }
        },
        {
          "@type": "Question",
          "name": "Can I open a pharmacy in a residential area in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Drug licences in Mumbai are granted only for commercial premises or mixed-use premises. Residential areas do not qualify. The premises must have a separate and exclusive entrance and meet the minimum carpet area requirement of 10 square meters. Mumbai's zoning regulations under MCGM must be verified before selecting a location. Patron checks premises classification from MCGM records as part of the pre-filing assessment."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to get drug licence in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Drug licence in Mumbai typically takes 30 to 60 days from application filing to licence issuance. This includes 5-7 days for document preparation, 2-3 days for online filing, 15-30 days for Drugs Inspector review and premises inspection, and 7-15 days for post-inspection processing. Manufacturing licences may take longer due to Schedule M compliance verification."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need separate licences for different drug types?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A Mumbai pharmacy typically needs multiple licences: retail allopathic (Form 19/20), retail homeopathic (Form 19B) if selling homeopathic medicines, and Schedule X (Form 20F) if dispensing narcotic or psychotropic substances. Each requires a separate application and government fee. Patron files all required licences as a bundle to ensure complete compliance."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I operate without a drug licence in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Operating a pharmaceutical business without a valid drug licence is a criminal offence under the Drugs and Cosmetics Act 1940. Penalties include imprisonment of up to 3 years and fines under Section 27. For sale of spurious drugs, penalties extend to life imprisonment and fines up to Rs 10 lakh. FDA Maharashtra conducts regular enforcement drives across Mumbai. Patron ensures all Mumbai clients maintain valid and compliant drug licences. Quick Answers Drug licence kaise le Mumbai mein? Premises ready karo (min 10 sq.m., commercial). Pharmacist appoint karo. Aaple Sarkar portal par apply karo. GRAS se fee pay karo. Drugs Inspector inspection. Licence milti hai 30-60 din mein. Patron handles end-to-end. Mumbai mein drug licence ka kharcha? Govt fee: Rs 3,250 (retail), Rs 3,000 (wholesale). Patron fee: Rs 4,999 onwards all-inclusive. Manufacturing: Rs 14,999 onwards. Kya pharmacy residential area mein khol sakte hain? Nahi. Sirf commercial ya mixed-use premises par drug licence milti hai. Residential mein reject hoti hai."
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
                        Drug License in Mumbai: CA-Managed Pharmacy and Pharmaceutical Licensing Under Drugs &amp; Cosmetics Act
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Firm constitution, pharmacist certificates, premises proof, layout plan, refrigerator invoice</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Retail drug licence from Rs 4,999 | Wholesale from Rs 4,999 | Manufacturing from Rs 14,999 (all-inclusive Patron fee)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Pharmacy/medical stores, drug wholesalers, pharmaceutical manufacturers, cosmetic sellers, ayurvedic/homeopathic shops</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30-60 days including Drugs Inspector inspection</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Trusted by pharmacies across Mumbai</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Drug%20License%20in%20Mumbai%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Drug%20License%20in%20Mumbai%20services.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Drug%20License%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Drug License in Mumbai',
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Compare</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Drug License in Mumbai Services at a Glance</strong></p>
                    <p>A drug licence is the mandatory permission under the Drugs and Cosmetics Act 1940 and Rules 1945 required by every business involved in the retail sale, wholesale distribution, or manufacturing of drugs, medicines, cosmetics, ayurvedic, homeopathic, Siddha, and Unani products in India. In Mumbai, drug licences are issued by the Food and Drug Administration (FDA) Maharashtra, headquartered at Bandra Kurla Complex, Bandra (East), Mumbai 400051. The local Drugs Inspector conducts premises inspection before licence grant. Applications are filed online through the Aaple Sarkar / XLNIndia portal with fees paid via the GRAS system.</p>
                </div>
                <p>Mumbai is India's pharmaceutical nerve centre. The city houses the registered offices of India's largest pharma companies at Nariman Point and BKC, a sprawling pharmaceutical wholesale market at Masjid Bunder and Crawford Market, thousands of retail pharmacies across every ward, drug manufacturing facilities at Andheri MIDC and Thane-Belapur Industrial Area, and hospital pharmacy operations at every major medical institution. Every one of these operations requires a drug licence from FDA Maharashtra. Learn more about <a href="#">Drug License services across India</a>.</p>
                <p>The Drugs Inspector assigned to the Mumbai zone conducts premises inspection before licence grant - verifying minimum area, pharmacist presence, refrigeration, storage conditions, and compliance with Good Manufacturing Practices (Schedule M) or sale conditions (Schedule N). Patron Accounting's Marine Lines office provides CA-managed drug licence services covering application filing, premises compliance advisory, Drugs Inspector coordination, and bundled <a href="/gst-registration">GST Registration</a> and <a href="/shop-act-registration">Shop Act Registration</a> for Mumbai's pharmaceutical businesses.</p>
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
                    
                    <p>A drug licence is the permission granted by the drug controlling authority under the <a href="https://fda.maharashtra.gov.in/" target="_blank" rel="noopener">Drugs and Cosmetics Act 1940</a> that allows an enterprise or individual to engage in the manufacture, sale, distribution, or storage of drugs, medicines, and cosmetics. No person or entity can operate a business dealing in drugs without a valid drug licence in India.</p>
                    <p>The Drugs and Cosmetics Act 1940 covers allopathic, homoeopathic, ayurvedic, Siddha, and Unani drugs, as well as cosmetics. Section 3(b) of the Act defines 'drug' broadly to include all medicines for internal or external use, substances for diagnosis, treatment, or prevention of disease, and preparations applied for repelling insects. The Act is enforced through the Drugs and Cosmetics Rules 1945, which prescribe specific forms, fees, and conditions for each licence type. In Maharashtra, the Food and Drug Administration (FDA) headquartered at BKC, Mumbai administers the entire drug licensing framework.</p>
                    <p>For Mumbai's pharmaceutical ecosystem, the drug licence is the foundational compliance document. Retail pharmacies at every neighbourhood from Colaba to Borivali, wholesale distributors at Masjid Bunder and Parel, hospital pharmacies at Lilavati, Hinduja, and Kokilaben Dhirubhai Ambani, e-pharmacy operators, and drug manufacturers at Andheri MIDC all operate under licences issued by FDA Maharashtra. The licence must be renewed periodically, and the premises remain subject to inspection by the Drugs Inspector at any time. Operating without a licence or violating licence conditions can result in prosecution, imprisonment, and closure of the business under the Drugs and Cosmetics Act.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Drug License in Mumbai:</strong></p>
                    <p><strong>Drug License:</strong> Permission under the Drugs and Cosmetics Act 1940 to deal in drugs and medicines.</p>
                    <p><strong>FDA Maharashtra:</strong> Food and Drug Administration - the state authority issuing drug licences in Mumbai.</p>
                    <p><strong>Registered Pharmacist:</strong> A pharmacist registered with the Maharashtra State Pharmacy Council, mandatory for retail.</p>
                    <p><strong>Aaple Sarkar Portal:</strong> Maharashtra government portal for online drug licence applications.</p>
                    <p><strong>GRAS:</strong> Government Receipt Accounting System for fee payment (mahagst.gov.in).</p>
                    <p><strong>Schedule M:</strong> Good Manufacturing Practices requirements under the Drugs and Cosmetics Rules 1945.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Drug License in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Mumbai Pharma Hub</span>
                        <strong>FDA Maharashtra Licensed</strong>
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
            <h2 class="section-title">Who Needs a Drug License in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Retail Pharmacy / Medical Store Owners:</strong> Anyone opening a retail chemist shop, pharmacy, or medical store in Mumbai for selling allopathic medicines to consumers needs a retail drug licence in Form 19/20. This includes standalone pharmacies, pharmacy chains, and hospital-attached dispensaries. A Registered Pharmacist must be employed and present during operating hours.</p>
                <p><strong>Wholesale Drug Distributors:</strong> Businesses distributing drugs to retailers, hospitals, or other wholesalers need a wholesale drug licence in Form 21/20B. Mumbai's pharmaceutical wholesale market at Masjid Bunder, Crawford Market, and Parel houses hundreds of wholesale distributors who must hold valid licences.</p>
                <p><strong>Drug Manufacturers:</strong> Pharmaceutical companies manufacturing drugs at facilities in Andheri MIDC, Thane-Belapur Industrial Area, and other Mumbai/MMR locations need a manufacturing drug licence in Form 25/28. Manufacturing must comply with Good Manufacturing Practices (Schedule M).</p>
                <p><strong>Homeopathic and Ayurvedic Medicine Shops:</strong> Retail and wholesale dealers of homeopathic medicines need Form 19B (retail) and Form 20C/20D (wholesale). Ayurvedic, Siddha, and Unani drug businesses need licences under the respective rules. Mumbai has a significant ayurvedic pharmacy sector at Dadar, Girgaon, and Thane.</p>
                <p><strong>Schedule X Drug Dealers:</strong> Businesses dealing in Schedule X drugs (narcotic and psychotropic substances) need additional licences - Form 20F for retail and Form 20G for wholesale.</p>
                <p><strong>Cosmetic Sellers and Manufacturers:</strong> Businesses manufacturing or selling cosmetics fall under the Drugs and Cosmetics Act and need the appropriate licence from FDA Maharashtra.</p>
                <p>After obtaining your drug licence, you may also need <a href="/fssai-registration">FSSAI Registration</a> if your pharmacy sells food supplements or nutraceuticals.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License Services Included by Patron in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Licence Type Determination</td><td>Assess your Mumbai pharmaceutical business to determine the correct licence type - Retail (Form 19/20), Wholesale (Form 21/20B), Homeopathic (Form 19B/20C/20D), Schedule X (Form 20F/20G), or Manufacturing (Form 25/28)</td></tr>
                        <tr><td>Premises Compliance Advisory</td><td>Verify minimum carpet area (10 sq.m. retail/wholesale, 15 sq.m. combined), separate entrance, refrigeration, storage, ventilation. Manufacturing: Schedule M GMP compliance</td></tr>
                        <tr><td>Pharmacist/Competent Person Documentation</td><td>Compile appointment letter, acceptance letter, degree certificate, experience certificate, Maharashtra State Pharmacy Council registration, residential proof, and self-declaration</td></tr>
                        <tr><td>Online Application Filing</td><td>Complete application via Aaple Sarkar / XLNIndia portal with document uploads and GRAS fee payment</td></tr>
                        <tr><td>Drugs Inspector Inspection Support</td><td>Prepare premises documentation, hygiene checklist, ensure pharmacist presence. Coordinate inspection schedule with Mumbai zone Inspector</td></tr>
                        <tr><td>GST Registration (Bundled)</td><td>Bundled <a href="/gst-registration/mumbai">GST Registration in Mumbai</a> for pharmaceutical businesses above the GST threshold</td></tr>
                        <tr><td>Shop Act Registration (Bundled)</td><td>Maharashtra Shops and Establishments Act 2017 registration from MCGM included in the drug licence package</td></tr>
                        <tr><td>Licence Renewal and Compliance</td><td>Track renewal dates, prepare renewal documentation, and file through the online portal before expiry</td></tr>

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
            <h2 class="section-title">Drug License Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the end-to-end drug licence process for Mumbai businesses - from licence type determination to Drugs Inspector coordination and licence issuance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Determine Licence Type and Verify Premises</h3>
                    <p class="step-description">Patron identifies the correct licence form based on your Mumbai business - retail pharmacy (Form 19/20), wholesale distribution (Form 21/20B), homeopathic (Form 19B/20C/20D), Schedule X (Form 20F/20G), or manufacturing (Form 25/28). We verify the premises meets FDA requirements: minimum 10 sq.m. carpet area for retail or wholesale (15 sq.m. for combined), separate and exclusive entrance, refrigerator for vaccine storage, cupboards and racks, proper ventilation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Premises Inspection</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form Selection</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Area Verification</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="20" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="25" y="35" width="30" height="30" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                <path d="M35 50L40 55L50 42" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/>
                                <line x1="70" y1="40" x2="100" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/>
                                <line x1="70" y1="50" x2="95" y2="50" stroke="#14365F" stroke-width="2" opacity="0.3"/>
                                <line x1="70" y1="60" x2="90" y2="60" stroke="#14365F" stroke-width="2" opacity="0.3"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Premises Check</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Appoint Registered Pharmacist or Competent Person</h3>
                    <p class="step-description">For a retail drug licence, a Registered Pharmacist must be appointed and present during operating hours. For wholesale, either a Registered Pharmacist or a competent person (graduate with 1+ year experience) is required. Patron verifies the pharmacist's Maharashtra State Pharmacy Council registration, degree certificate, and all documentation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pharmacist Verification</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Council Registration</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="35" r="18" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="60" cy="30" r="8" fill="#E8F5E9" stroke="#14365F" stroke-width="1"/>
                                <path d="M45 70C45 58 52 50 60 50C68 50 75 58 75 70" stroke="#14365F" stroke-width="1.5" fill="#F0F4F8"/>
                                <rect x="50" y="72" width="20" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                <text x="60" y="81" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RPH</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Pharmacist Ready</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Compile Documents and Prepare Application</h3>
                    <p class="step-description">Patron compiles: firm constitution (MOA/AOA for companies, partnership deed for LLP/firms), property documents (registry deed, lease deed), key plan and site plan of premises, pharmacist documentation, affidavit, invoice copy of refrigerator and air conditioner, electricity bill, PAN card, and identity proof of proprietor/partners/directors.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Document Collection</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 150 DPI Scanning</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                                <line x1="35" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <line x1="35" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <line x1="35" y1="60" x2="75" y2="60" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <circle cx="90" cy="70" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                                <path d="M84 70L88 74L96 66" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Docs Compiled</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">File Online Application via Aaple Sarkar Portal</h3>
                    <p class="step-description">Create login credentials on the Aaple Sarkar / XLNIndia portal. Fill out the application form completely and accurately. Upload all scanned documents in the specified format. Generate the fee challan through the GRAS portal (mahagst.gov.in) and make payment. Patron handles the complete online filing and fee payment process.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal Filing</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GRAS Payment</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="25" y="25" width="70" height="8" rx="4" fill="#E8EDF4"/>
                                <rect x="25" y="40" width="30" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                                <rect x="62" y="40" width="30" height="20" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
                                <path d="M55 80L65 70L75 80" stroke="#14365F" stroke-width="2" fill="none" stroke-linecap="round" transform="rotate(180,65,75)"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Application Filed</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Drugs Inspector Premises Inspection</h3>
                    <p class="step-description">The Drugs Inspector assigned to the Mumbai zone reviews submitted documents and schedules a premises inspection. The Inspector visits to verify: carpet area, separate entrance, refrigeration, storage facilities, pharmacist presence, labelling compliance. Patron prepares the premises for inspection and coordinates with the Inspector for first-time clearance.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Inspector Visit</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pre-Inspection Prep</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="45" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="82" y1="67" x2="100" y2="85" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                                <path d="M50 45L55 50L70 35" stroke="#10B981" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Inspection Done</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Drug Licence Approval and Issuance</h3>
                    <p class="step-description">Upon successful inspection, the Drugs Inspector submits the report to the licensing authority. The licence is granted with an authorised seal and valid electronic signature. Patron tracks the approval status and ensures the licence is received. The licensee must display the licence prominently at the premises. Patron sets up renewal tracking and ongoing compliance.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Licence Issued</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Renewal Tracking</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                                <path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/>
                                <rect x="35" y="75" width="50" height="8" rx="4" fill="#F5A623" opacity="0.6"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Licence Granted</span>
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
            <h2 class="section-title">Documents Required for Drug License in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li>Application form (Form 19 for Retail / Form 21 for Wholesale / Form 19B for Retail Homeopathic / Form 20C for Wholesale Homeopathic)</li>
                    <li>Firm constitution - MOA &amp; AOA (company), Partnership Deed (firm/LLP), or Proprietorship Declaration</li>
                    <li>Certificate of Incorporation / Registration receipt from RoC or Registrar of Firms</li>
                    <li>Property documents - Registry Deed, Lease Deed, or POA for owned property</li>
                    <li>Key plan and site plan of premises (blueprint with measurements showing carpet area)</li>
                    <li>Registered Pharmacist documentation - Degree certificate, Maharashtra State Pharmacy Council registration, appointment letter, acceptance letter, self-declaration, biodata, residential proof</li>
                    <li>Competent person documentation (for wholesale) - Degree certificate, experience certificate (1+ year), appointment letter, acceptance letter, biodata</li>
                    <li>Affidavit from the Registered Pharmacist / Competent Person</li>
                    <li>Invoice copy of refrigerator purchased for the premises</li>
                    <li>Latest electricity bill of the premises</li>
                    <li>PAN card and identity proof of proprietor/partners/directors</li>
                    <li>Board Resolution and List of Directors (for companies)</li>
                    <li>NOC from premises owner (if rented/leased)</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-specific tip:</strong> FDA Maharashtra requires all documents to be scanned at 150 DPI in black and white background for upload. The premises address on the electricity bill must match the application address exactly. For pharmacies in Mumbai's commercial complexes, ensure the lease agreement explicitly permits pharmaceutical retail/wholesale operations. Patron verifies all document specifications before upload.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Drug License Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Premises Non-Compliance</td><td>Licence delay due to not meeting 10 sq.m. minimum or lacking separate entrance. Mumbai's high real estate costs push applicants into smaller spaces.</td><td>Pre-filing premises assessment to identify and resolve compliance gaps before application</td></tr>
                        <tr><td>Pharmacist Documentation Gaps</td><td>Incomplete State Pharmacy Council registration, expired certificates, missing appointment letters delay the licence</td><td>Patron verifies all pharmacist documents against FDA Maharashtra's checklist before filing</td></tr>
                        <tr><td>Residential Premises Rejection</td><td>Drug licences are not granted for residential areas in Mumbai. Many first-time applicants face rejection</td><td>Verify premises classification (commercial/mixed-use) from MCGM records before filing</td></tr>
                        <tr><td>Drugs Inspector Observations</td><td>Inadequate refrigeration, missing storage racks, poor ventilation, non-compliant layout noted during inspection</td><td>Prepare compliant layout plan and conduct pre-inspection walkthrough</td></tr>
                        <tr><td>Multiple Licence Requirements</td><td>A pharmacy often needs retail allopathic (Form 19/20), homeopathic (Form 19B), and Schedule X (Form 20F) - each separate</td><td>Patron files all required licences as a bundle for complete compliance</td></tr>

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
            <h2 class="section-title">Drug License Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Retail Allopathic + Homeopathic (Govt Fee)</td><td>Rs 3,250</td></tr>
                        <tr><td>Wholesale Allopathic (Govt Fee)</td><td>Rs 3,000</td></tr>
                        <tr><td>Wholesale Homeopathic (Govt Fee)</td><td>Rs 250</td></tr>
                        <tr><td>Schedule X Retail (Govt Fee - Additional)</td><td>Rs 600</td></tr>
                        <tr><td>Schedule X Wholesale (Govt Fee - Additional)</td><td>Rs 1,200</td></tr>
                        <tr><td>Patron Accounting Professional Fees (Retail/Wholesale)</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Accounting Professional Fees (Manufacturing)</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Drug License in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Drug%20License%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License Timeline in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Premises Assessment + Document Prep</td><td>5-7 days</td></tr>
                        <tr><td>Online Application Filing + Fee Payment</td><td>2-3 days</td></tr>
                        <tr><td>Drugs Inspector Review + Premises Inspection</td><td>15-30 days</td></tr>
                        <tr><td>Licence Approval + Issuance</td><td>7-15 days</td></tr>
                        <tr><td><strong>Total Estimated Timeline</strong></td><td><strong>30-60 days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Manufacturing licences may take longer due to Schedule M Good Manufacturing Practices compliance verification. Patron expedites the process through complete documentation and proactive Drugs Inspector coordination from the Mumbai office.</p>

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
            <h2 class="section-title">Why Choose Patron for Drug License in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <h3 class="feature-title">Mumbai Office Near Pharma Hubs</h3>
                <p class="feature-desc">Patron's Marine Lines office is centrally located with access to Mumbai's pharmacy clusters at Masjid Bunder, Fort, Dadar, and proximity to FDA Maharashtra HQ at BKC.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <h3 class="feature-title">Premises Pre-Assessment</h3>
                <p class="feature-desc">Before filing, Patron conducts a premises compliance check - carpet area measurement, entrance verification, refrigeration, storage, and layout. This prevents Drugs Inspector rejections.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                <h3 class="feature-title">Integrated Business Compliance</h3>
                <p class="feature-desc">Drug licence is one piece of the pharmacy compliance puzzle. Patron bundles GST registration, Maharashtra Shop Act registration, income tax return filing, and annual compliance as an integrated CA-managed service.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">10,000+ Businesses Served</h3>
                <p class="feature-desc">4.9 Google rating. 15+ years of CA practice. Experience with FDA Maharashtra's application portal, GRAS payment system, and Drugs Inspector processes.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
                <p>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune</p>
                <p><strong>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Retail vs Wholesale vs Manufacturing Drug Licence in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Retail</th><th>Wholesale</th><th>Manufacturing</th></tr></thead>
                    <tbody>
                        <tr><td>Form</td><td>Form 19/20</td><td>Form 21/20B</td><td>Form 25/28</td></tr>
                        <tr><td>Min Area</td><td>10 sq.m.</td><td>10 sq.m.</td><td>As per Schedule M</td></tr>
                        <tr><td>Personnel</td><td>Registered Pharmacist (mandatory)</td><td>Competent Person or Reg. Pharmacist</td><td>Competent Technical Person</td></tr>
                        <tr><td>Inspection</td><td>Drugs Inspector</td><td>Drugs Inspector</td><td>Drugs Inspector + GMP compliance</td></tr>
                        <tr><td>Mumbai Relevance</td><td>Neighbourhood pharmacies, hospital dispensaries</td><td>Masjid Bunder, Parel distributors</td><td>Andheri MIDC, Thane-Belapur plants</td></tr>

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
                
                <p>Patron offers a comprehensive range of registration and compliance services for Mumbai businesses:</p>
                <ul>
                    <li><a href="#">Drug License in India</a> - National drug licence services across all states</li>
                    <li><a href="/gst-registration">GST Registration</a> - Mandatory for pharmaceutical businesses above GST threshold</li>
                    <li><a href="/fssai-registration">FSSAI Registration</a> - For pharmacies selling food supplements and nutraceuticals</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect your pharmacy brand and product names</li>
                    <li><a href="/iec-registration">Import Export Code (IEC) Registration</a> - For pharmaceutical importers and exporters</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Full-service accounting for pharmaceutical businesses</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Drug License in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p>
                <ul>
                    <li>Drugs and Cosmetics Act, 1940 - Sections 18 (prohibition of manufacture/sale without licence), 27 (penalties), 28 (offences by companies)</li>
                    <li>Drugs and Cosmetics Rules, 1945 - Part V (Sale of Drugs), Part VI (Manufacture), Schedule M (GMP), Schedule N (Sale conditions)</li>
                    <li>Drugs and Magic Remedies (Objectionable Advertisements) Act, 1954</li>
                    <li>Drug Price Control Order, 2013 (DPCO) - price regulation of essential medicines</li>
                    <li>Maharashtra Shops and Establishments Act, 2017 - shop registration prerequisite</li>
                </ul>
                <p><strong>Key Portals:</strong></p>
                <ul>
                    <li><a href="https://fda.maharashtra.gov.in/" target="_blank" rel="noopener">FDA Maharashtra</a> - fda.maharashtra.gov.in</li>
                    <li>Aaple Sarkar / XLNIndia - Application portal for drug licences</li>
                    <li><a href="https://mahagst.gov.in/" target="_blank" rel="noopener">GRAS Portal</a> - Government Receipt Accounting System for fee payment</li>
                </ul>
                <p><strong>Penalties:</strong></p>
                <ul>
                    <li>Operating without drug licence: Imprisonment up to 3 years and/or fine under Section 27</li>
                    <li>Sale of substandard drugs: Fine up to Rs 5 lakh under Section 27(d)</li>
                    <li>Sale of spurious drugs: Imprisonment up to life and fine up to Rs 10 lakh or three times the value of drugs</li>
                    <li>Absence of pharmacist during sale: Licence cancellation by FDA Maharashtra</li>
                </ul>

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
                    <h2 class="faq-expanded__title">FAQs - Drug License in Mumbai</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about obtaining a drug licence in Mumbai from FDA Maharashtra.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Drug License in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which authority issues drug licence in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Drug licences in Mumbai are issued by the Food and Drug Administration (FDA) Maharashtra. The FDA headquarters is at 2nd Floor, Survey No. 341, Bandra Kurla Complex, Bandra (East), Mumbai 400051. Applications are filed online through the Aaple Sarkar / XLNIndia portal. The local Drugs Inspector conducts premises inspection before licence grant. Patron's Marine Lines team handles the complete filing and coordinates with the Inspector.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the minimum area for a pharmacy in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>A retail or wholesale drug store in Mumbai requires a minimum carpet area of 10 square meters with a separate and exclusive entrance. A combined retail and wholesale outlet needs minimum 15 square meters. The premises must be commercially classified - drug licences are not granted for residential areas. The premises must also include a refrigerator for vaccine storage, cupboards and racks for drug storage, and proper ventilation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of drug licence in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Government fees in Maharashtra are Rs 3,250 for retail allopathic and homeopathic, Rs 3,000 for wholesale, Rs 250 for wholesale homeopathic, Rs 600 for Schedule X retail, and Rs 1,200 for Schedule X wholesale. Through Patron, all-inclusive professional fees start from Rs 4,999 for retail or wholesale, covering document preparation, application filing, and Drugs Inspector coordination. Manufacturing licence starts from Rs 14,999. All fees exclusive of GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is a registered pharmacist required for drug licence in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes, for retail drug licence. A Registered Pharmacist must be appointed and physically present during the operating hours of the retail pharmacy. The pharmacist must hold a valid degree and be registered with the Maharashtra State Pharmacy Council. For wholesale licence, either a Registered Pharmacist or a competent person with a graduate degree and minimum one year of drug dealing experience is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I open a pharmacy in a residential area in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>No. Drug licences in Mumbai are granted only for commercial premises or mixed-use premises. Residential areas do not qualify. The premises must have a separate and exclusive entrance and meet the minimum carpet area requirement of 10 square meters. Mumbai's zoning regulations under MCGM must be verified before selecting a location. Patron checks premises classification from MCGM records as part of the pre-filing assessment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does it take to get drug licence in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Drug licence in Mumbai typically takes 30 to 60 days from application filing to licence issuance. This includes 5-7 days for document preparation, 2-3 days for online filing, 15-30 days for Drugs Inspector review and premises inspection, and 7-15 days for post-inspection processing. Manufacturing licences may take longer due to Schedule M compliance verification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do I need separate licences for different drug types?</h3>
                        <div class="faq-expanded__a"><p>Yes. A Mumbai pharmacy typically needs multiple licences: retail allopathic (Form 19/20), retail homeopathic (Form 19B) if selling homeopathic medicines, and Schedule X (Form 20F) if dispensing narcotic or psychotropic substances. Each requires a separate application and government fee. Patron files all required licences as a bundle to ensure complete compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if I operate without a drug licence in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Operating a pharmaceutical business without a valid drug licence is a criminal offence under the Drugs and Cosmetics Act 1940. Penalties include imprisonment of up to 3 years and fines under Section 27. For sale of spurious drugs, penalties extend to life imprisonment and fines up to Rs 10 lakh. FDA Maharashtra conducts regular enforcement drives across Mumbai. Patron ensures all Mumbai clients maintain valid and compliant drug licences.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Drug licence kaise le Mumbai mein?</strong> Premises ready karo (min 10 sq.m., commercial). Pharmacist appoint karo. Aaple Sarkar portal par apply karo. GRAS se fee pay karo. Drugs Inspector inspection. Licence milti hai 30-60 din mein. Patron handles end-to-end.</p>
                <p><strong>Mumbai mein drug licence ka kharcha?</strong> Govt fee: Rs 3,250 (retail), Rs 3,000 (wholesale). Patron fee: Rs 4,999 onwards all-inclusive. Manufacturing: Rs 14,999 onwards.</p>
                <p><strong>Kya pharmacy residential area mein khol sakte hain?</strong> Nahi. Sirf commercial ya mixed-use premises par drug licence milti hai. Residential mein reject hoti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Risk Operating Without a Drug License in Mumbai</h2>
            <div class="content-text">
                
                <p>Operating any pharmaceutical business in Mumbai without a valid drug licence is a criminal offence carrying imprisonment of up to 3 years under the Drugs and Cosmetics Act 1940. FDA Maharashtra conducts enforcement drives and inspections across Mumbai. Online pharmacy platforms verify drug licence before onboarding. Retail pharmacies without a pharmacist during operating hours face licence cancellation. Licence renewal must be filed before expiry to avoid operation stoppage.</p>
                <p><strong>Every day without a drug licence is a day of legal risk and lost business. Get started now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Drug%20License%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Drug License in Mumbai with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">A drug licence in Mumbai is mandatory for every business involved in the retail sale, wholesale distribution, or manufacturing of drugs, medicines, cosmetics, and related products under the Drugs and Cosmetics Act 1940. FDA Maharashtra, headquartered at BKC, administers the licensing framework through online applications via the Aaple Sarkar portal and physical premises inspection by Drugs Inspectors across Mumbai zones.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Mumbai office at Marine Lines provides CA-managed drug licence services covering licence type determination, premises compliance advisory, pharmacist documentation, Aaple Sarkar portal filing, GRAS fee payment, Drugs Inspector coordination, and bundled GST and Shop Act registration. With 15+ years of CA practice and 10,000+ businesses served, Patron delivers integrated pharmaceutical business compliance for retail pharmacies, wholesale distributors, and manufacturing units across Mumbai and the Mumbai Metropolitan Region.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Drug%20License%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Drug%20License%20in%20Mumbai%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Drug%20License%20in%20Mumbai%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Drug License Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides drug licence services in 8 major cities. Select your city below.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
                    <div class="pa-city-grid">
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                    </div>
                </div>
                <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for Drug License in Mumbai</div>
                    <div class="pa-cross-grid">
                        <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/fssai-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/startup-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                        <a href="/iec-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Import Export Code (IEC)</div><div class="pa-card-sub">Mumbai</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Freshness Tier 2) to incorporate FDA Maharashtra policy updates, fee changes, portal updates, and any amendments to the Drugs and Cosmetics Act/Rules. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
