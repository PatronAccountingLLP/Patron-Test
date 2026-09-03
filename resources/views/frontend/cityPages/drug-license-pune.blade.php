
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Drug License in Pune - Retail, Wholesale & CDSCO Process</title>
    <meta name="description" content="CA-assisted drug licence in Pune. Retail, wholesale, manufacturing pharmacy licence via FDA Maharashtra. Inspection prep included. Call +91 945 945 6700.">
    <link rel="canonical" href="#">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Drug License in Pune - Retail, Wholesale & CDSCO Process">
    <meta property="og:description" content="CA-assisted drug licence in Pune. Retail, wholesale, manufacturing pharmacy licence via FDA Maharashtra. Inspection prep included. Call +91 945 945 6700.">
    <meta property="og:url" content="/drug-license/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Drug License in Pune - Retail, Wholesale & CDSCO Process">
    <meta name="twitter:description" content="CA-assisted drug licence in Pune. Retail, wholesale, manufacturing pharmacy licence via FDA Maharashtra. Inspection prep included. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Drug License in Pune",
      "description": "CA-assisted drug licence in Pune. Retail, wholesale, manufacturing pharmacy licence via FDA Maharashtra. Inspection prep included. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/drug-license/pune",
      "serviceType": "Drug License in Pune",
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
        "url": "https://www.patronaccounting.com/drug-license/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "3000",
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
          "name": "Drug License in Pune",
          "item": "https://www.patronaccounting.com/drug-license/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does a drug license cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fees are Rs 3,250 for retail and Rs 3,000 for wholesale, paid via GRAS at gras.mahakosh.gov.in. Patron's all-inclusive packages start from Rs 14,999 (retail) and Rs 12,999 (wholesale) covering entity registration, document preparation, Aaple Sarkar application, GRAS payment, pharmacist documentation, premises layout advisory, and FDA inspection preparation."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to get a drug license in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The complete process takes 30-60 working days from application filing to licence grant. This includes document preparation (3-5 days), Aaple Sarkar application filing (1-2 days), FDA Drug Inspector inspection (15-45 days), and licence issuance (5-10 days after inspection). Delays from incomplete pharmacist documentation or premises not meeting FDA specifications."
          }
        },
        {
          "@type": "Question",
          "name": "Which authority issues drug licenses in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Maharashtra Food and Drug Administration (FDA) issues drug licences. For Pune, the Joint Commissioner (Drugs), FDA Pune Division is the licensing authority. The Drug Inspector assigned to the Pune Municipal Corporation area conducts the premises inspection. Applications are filed through the Aaple Sarkar portal with fees via GRAS."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a pharmacist to open a medical store in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under the Drugs and Cosmetics Act 1940 and Pharmacy Act 1948, a retail drug licence requires a registered pharmacist with valid registration from the Maharashtra State Pharmacy Council. The pharmacist must be physically present during operating hours. Prescription drugs (Schedule H/H1) must be sold under the pharmacist's signature."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between retail and wholesale drug licence?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Retail licence (Form 20/21) allows sale to consumers and requires a registered pharmacist. Wholesale licence (Form 20B/21B) allows distribution to retailers, hospitals, and clinics, and requires a competent person with B.Pharm degree and 1 year experience. Retail costs Rs 3,250 and wholesale Rs 3,000 in government fees."
          }
        },
        {
          "@type": "Question",
          "name": "Can I sell medicines online from Pune without a drug licence?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Selling medicines online requires a valid drug licence from the state where the dispensing premises is located. The premises must have a registered pharmacist. Prescription drugs can only be dispensed against valid prescriptions. Operating without licence attracts up to 3 years imprisonment and Rs 5,000 fine under Section 27."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for operating without a drug licence?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 27, first offence: imprisonment up to 3 years and fine up to Rs 5,000. Subsequent offence: up to 5 years and Rs 10,000. Selling adulterated drugs (Section 28): up to 3 years and Rs 5,000. Selling spurious drugs (Section 30): up to life imprisonment. The Maharashtra FDA conducts surprise inspections in Pune."
          }
        },
        {
          "@type": "Question",
          "name": "How do I renew my drug licence in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Drug licences are valid for 5 years. Retention (renewal) must be filed before expiry through the Aaple Sarkar portal with retention fee via GRAS. The fee is the same as the original licence fee. FDA may conduct inspection during renewal. Operating with expired licence is a criminal offence. Patron tracks all expiry dates and files proactively. Quick Answers Medical store kholne ke liye pharmacist chahiye kya? Haan. Maharashtra State Pharmacy Council mein registered pharmacist zaroori hai. Operating hours mein premises pe physically present hona chahiye. Drug licence kitne saal ka hota hai? 5 saal. Expiry se pehle retention (renewal) file karna zaroori hai Aaple Sarkar portal pe. Expired licence pe kaam karna criminal offence hai. Online pharmacy ke liye bhi drug licence chahiye? Haan. Dispensing premises jahan hai wahan ka state drug licence zaroori hai. Registered pharmacist bhi chahiye."
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
                        Drug License in Pune: Retail, Wholesale, and Manufacturing Pharmacy Licence via FDA Maharashtra
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Premises proof, pharmacist registration certificate, firm constitution, layout plan, cold storage invoice</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Retail Rs 3,250 (govt) | Wholesale Rs 3,000 (govt) | Patron all-inclusive from Rs 14,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Proprietorship, partnership, LLP, Pvt Ltd with registered pharmacist (retail) or competent person (wholesale)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30-60 working days from application to licence grant including FDA inspection</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Drug%20License%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Drug License in Pune',
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
    'ctaText'    => 'Patron has helped 10,000+ businesses with licensing, registration, and compliance. Pune pharmacy owners trust us for the complete business launch package.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Compare</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Drug License in Pune Services at a Glance</strong></p>
                    <p>A drug licence is a mandatory legal authorisation under the Drugs and Cosmetics Act, 1940 for any person or entity involved in the sale, distribution, stocking, or manufacturing of pharmaceutical products. In Pune, the Maharashtra FDA issues drug licences through the Aaple Sarkar portal, with premises inspection by FDA Drug Inspectors. Retail licences (Form 20/21) require a registered pharmacist from the Maharashtra State Pharmacy Council. Wholesale licences (Form 20B/21B) require a competent person with B.Pharm and 1 year experience.</p>
                </div>
                <p>Pune is a major pharmaceutical hub. Serum Institute of India at Hadapsar is the world's largest vaccine manufacturer. MIDC Bhosari and Pimpri-Chinchwad house dozens of pharma units. The retail pharmacy market across FC Road, Koregaon Park, Baner, Kharadi, and Wakad serves millions. Learn more about <a href="#">Drug License across India</a>.</p>
                <p>Maharashtra FDA now mandates all new applications through the <a href="https://aaplesarkar.mahaonline.gov.in/" target="_blank" rel="noopener">Aaple Sarkar portal</a> with fees via GRAS. Patron Accounting handles the complete process from our Pune office - entity registration, application, pharmacist documentation, premises layout preparation, FDA inspection coordination, and post-licence <a href="/gst-registration/pune">GST Registration</a> and accounting setup.</p>
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
                    
                    <p>A drug licence is a legal authorisation issued by the state drug licensing authority under the Drugs and Cosmetics Act, 1940 permitting a person or entity to sell, distribute, stock, or manufacture pharmaceutical products including allopathic, homeopathic, ayurvedic, and unani medicines.</p>
                    <p>The Act and Rules 1945 mandate that no person shall manufacture, sell, or distribute drugs except under a valid licence. In Maharashtra, the <a href="https://fda.maharashtra.gov.in/" target="_blank" rel="noopener">Food and Drug Administration (FDA)</a> is the state-level authority. Without a licence, stocking or selling even a single medicine is a criminal offence under Section 18 - attracting imprisonment up to 3 years and fine up to Rs 5,000 for first offence.</p>
                    <p>For Pune's pharmacy entrepreneurs - whether opening a chemist shop on FC Road, a wholesale outlet near Market Yard, or a manufacturing facility in MIDC Bhosari - the drug licence is the foundational legal document. The FDA Drug Inspector conducts a mandatory premises inspection before licence grant, verifying layout, cold storage, pharmacist availability, and record-keeping systems.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Drug License in Pune:</strong></p>
                    <p><strong>Drugs and Cosmetics Act, 1940:</strong> Central Act governing manufacture, sale, and distribution of drugs in India.</p>
                    <p><strong>Maharashtra FDA:</strong> State licensing authority - Joint Commissioner (Drugs), Pune Division.</p>
                    <p><strong>Form 20/21:</strong> Retail drug licence for sale of allopathic and homeopathic medicines to consumers.</p>
                    <p><strong>Aaple Sarkar Portal:</strong> Mandatory Maharashtra online portal for all new drug licence applications.</p>
                    <p><strong>GRAS:</strong> Government Receipt Accounting System at gras.mahakosh.gov.in for fee payment.</p>
                    <p><strong>Registered Pharmacist:</strong> Maharashtra State Pharmacy Council registered pharmacist - mandatory for retail premises.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Drug License in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Pune Pharma Hub</span>
                        <strong>FDA Licensed</strong>
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
            <h2 class="section-title">Who Needs a Drug License in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Retail Pharmacy Owners:</strong> Medical stores and chemist shops across FC Road, Sadashiv Peth, Baner, Wakad, Kharadi, Viman Nagar, Hadapsar. Retail licence (Form 20/21) with registered pharmacist from Maharashtra State Pharmacy Council.</p>
                <p><strong>Wholesale Drug Distributors:</strong> Supplying medicines to retail pharmacies, hospitals, clinics from Market Yard, Bhavani Peth, Pimpri-Chinchwad. Form 20B/21B with competent person (B.Pharm + 1 year experience).</p>
                <p><strong>Pharmaceutical Manufacturers:</strong> MIDC Bhosari, Chakan Industrial Area, Pimpri-Chinchwad, Talegaon. Manufacturing licence (Form 25/28) with GMP inspection. Includes API producers and formulation units.</p>
                <p><strong>Hospital Pharmacies:</strong> Ruby Hall Clinic, Sahyadri Hospital, Deenanath Mangeshkar Hospital, KEM Hospital. Retail licence with hospital pharmacy endorsement.</p>
                <p><strong>Online Pharmacy Operators:</strong> Valid drug licence mandatory from state where dispensing premises is located. Registered pharmacist required. Prescription drugs only against valid prescriptions.</p>
                <p><strong>Ayurvedic/Homeopathic Retailers:</strong> Separate forms: Form 20C/21C for homeopathic, Form 24-D for ayurvedic manufacturing. Significant market in Shaniwar Peth, Sadashiv Peth, Kothrud. Bundle with <a href="/shop-act-registration">Shop Act Registration</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License Services Included by Patron in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Retail Drug Licence (Form 20/21)</td><td>Aaple Sarkar filing, premises layout prep, pharmacist documentation (Maharashtra State Pharmacy Council), cold storage proof, FDA inspection coordination. Govt fee Rs 3,250</td></tr>
                        <tr><td>Wholesale Drug Licence (Form 20B/21B)</td><td>Competent person documentation (B.Pharm + 1yr exp), premises layout, inspection preparation. Govt fee Rs 3,000</td></tr>
                        <tr><td>Manufacturing Drug Licence (Form 25/28)</td><td>GMP documentation, process flow, equipment list, technical staff qualifications, MPCB consent. Separate consultation</td></tr>
                        <tr><td>Entity Registration (if needed)</td><td>Proprietorship/Partnership/LLP (<a href="/llp-incorporation/pune">LLP in Pune</a>)/Pvt Ltd (<a href="/private-limited-company-registration/pune">Pvt Ltd in Pune</a>) + GST + Shop Act</td></tr>
                        <tr><td>Premises Layout Advisory</td><td>FDA-spec layout guidance: minimum area, storage conditions, cold storage, dispensing counter, prescription filing system</td></tr>
                        <tr><td>FDA Inspection Preparation</td><td>Pre-inspection audit, pharmacist availability confirmation, document readiness, on-site accompaniment during Drug Inspector visit</td></tr>
                        <tr><td>Licence Retention (Renewal)</td><td>5-yearly renewal via Aaple Sarkar with GRAS fee. FDA inspection may occur during renewal. Proactive expiry tracking</td></tr>
                        <tr><td>Post-Licence Compliance</td><td>Drug purchase/sale registers, Schedule H/H1 records, temperature logs, pharmacist change filings, accounting setup (Tally/Zoho)</td></tr>

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
            <h2 class="section-title">Drug License Process in Pune - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete pharmacy business launch - from entity registration to FDA inspection and post-licence compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Register the Business Entity</h3><p class="step-description">Register as proprietorship (GST), partnership (deed + Registrar of Firms), LLP (MCA), or Pvt Ltd (SPICe+ with RoC Pune). Maharashtra Shop Act registration via Aaple Sarkar simultaneously. Proprietorship or partnership most common for retail on FC Road/Baner. LLP/Pvt Ltd preferred for wholesale in Pimpri-Chinchwad.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Entity Registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Shop Act Filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="55" height="35" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="57" y="47" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Entity</text><circle cx="90" cy="18" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M86 18L89 21L95 15" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Business Set Up</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Premises and Appoint Pharmacist</h3><p class="step-description">Set up pharmacy per FDA specs: min 10 sq.m. (retail), proper storage, refrigerator for thermolabile drugs, dispensing counter, lighting/ventilation. Appoint registered pharmacist (Maharashtra State Pharmacy Council) for retail or competent person (B.Pharm + 1yr) for wholesale. Complete documentation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Premises Ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pharmacist Hired</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="30" height="35" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="60" y="25" width="35" height="35" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><text x="40" y="47" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Cold</text><text x="77" y="47" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Disp.</text></svg></div><span class="illustration-label">Premises Set</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compile Documents and Create Aaple Sarkar Account</h3><p class="step-description">Firm constitution, premises ownership/rental docs, layout plan (blueprint), pharmacist/competent person credentials, refrigerator invoice, electricity bill, NOC. Create account on aaplesarkar.mahaonline.gov.in. Prepare application form (Form 19/19A/19B/19C).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs Compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal Account</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="90" cy="68" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M84 68L88 72L96 64" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Ready to File</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pay Fees via GRAS and Submit Application</h3><p class="step-description">Fees via GRAS at gras.mahakosh.gov.in: Retail Rs 3,250, Wholesale Rs 3,000, Homeopathic wholesale Rs 250. GRAS challan attached to Aaple Sarkar application. Patron files complete application with all documents and fee challan.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GRAS Paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Application Filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">FDA Drug Inspector Premises Inspection</h3><p class="step-description">Drug Inspector from Pune Municipal Corporation area verifies: premises layout matches submitted plan, cold storage operational, pharmacist present and qualified, drug storage conditions meet standards, dispensing counter and prescription filing in place, hygiene/safety compliance. Patron prepares premises and accompanies inspection.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Inspector Visit</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="39" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FDA</text><path d="M40 72L60 62L80 72" stroke="#10B981" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div><span class="illustration-label">Inspection Done</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive Drug Licence and Set Up Operations</h3><p class="step-description">Joint Commissioner (Drugs), FDA Pune Division grants licence valid for 5 years. Patron sets up: drug purchase/sale registers, Schedule H/H1 records, temperature logs, GST with pharma HSN codes, Tally/Zoho accounting, and licence retention (renewal) calendar.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Licence Granted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance Active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="22" y="47" width="31" height="6" rx="2" fill="#14365F" opacity="0.2"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Licensed</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Drug License in Pune</h2>
            <div class="content-text">
                
                <ul><li>Firm constitution - MOA/AOA (Pvt Ltd), Partnership Deed, LLP Agreement, or proprietorship declaration</li><li>Certificate of Incorporation / Registration receipt / LLP certificate</li><li>List of proprietor/partners/directors with PAN + Aadhaar</li><li>Premises ownership documents - Registry Deed / Lease Deed / POA</li><li>Rental/Lease agreement (if rented) with NOC from landlord</li><li>Electricity bill of premises (recent, not older than 2 months)</li><li>Layout plan (blueprint/key plan) showing storage area, dispensing counter, cold storage</li><li>Invoice/receipt of refrigerator/AC for cold storage</li><li>Pharmacist's registration certificate from Maharashtra State Pharmacy Council + appointment letter + acceptance letter + affidavit (retail)</li><li>Competent person's B.Pharm degree + 1yr experience certificate + appointment letter (wholesale)</li><li>Maharashtra Shop Act registration certificate (if obtained)</li><li>GST registration certificate (if obtained)</li><li>Duly filled application Form 19/19A/19B/19C + GRAS challan</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> FDA Drug Inspector is strict about pharmacist physical presence during inspection. Ensure pharmacist is available with original Maharashtra State Pharmacy Council certificate. For premises in residential buildings (Baner, Wakad, Kothrud), housing society NOC is required. Commercial complexes (FC Road, Market Yard) need commercial lease agreement.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Drug License Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Pharmacist Documentation Issues</td><td>Most common rejection. Maharashtra FDA requires valid Maharashtra State Pharmacy Council registration. Other state registrations must be transferred first</td><td>All pharmacist documentation verified complete before application submission</td></tr>
                        <tr><td>Premises Layout Non-Compliance</td><td>Insufficient area, no dedicated cold storage, dispensing counter too close, improper lighting/ventilation</td><td>Premises layout advisory before application. Blueprint verified against physical premises</td></tr>
                        <tr><td>GRAS/Aaple Sarkar Portal Errors</td><td>Account creation issues, document upload format problems, incorrect payment type selection</td><td>Experienced with Aaple Sarkar portal and GRAS system. Error-free application submission</td></tr>
                        <tr><td>Delayed FDA Inspection</td><td>15-45 days depending on Drug Inspector schedule. Incomplete applications cause further delays</td><td>Application and premises fully compliant before submission to minimise turnaround</td></tr>
                        <tr><td>Licence Retention Lapses</td><td>5-year validity. Operating with expired licence = criminal offence. Many pharmacies miss renewal</td><td>All expiry dates tracked. Retention filed proactively via Aaple Sarkar + GRAS</td></tr>

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
            <h2 class="section-title">Drug License Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Retail Drug Licence (Govt Fee)</td><td>Rs 3,250 (via GRAS)</td></tr>
                        <tr><td>Wholesale Drug Licence (Govt Fee)</td><td>Rs 3,000 (via GRAS)</td></tr>
                        <tr><td>Patron All-Inclusive (Retail)</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron All-Inclusive (Wholesale)</td><td>Starting from INR 12,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Schedule X Retail (Add-on)</td><td>Rs 600 (govt) + Rs 4,999 (Patron)</td></tr>
                        <tr><td>Homeopathic Wholesale</td><td>Rs 250 (govt) + Rs 9,999 (Patron)</td></tr>
                        <tr><td>Licence Retention (5-yearly)</td><td>Same as original fee (govt) + Rs 4,999 (Patron)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Drug License in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Entity Registration (if needed)</td><td>7-15 days</td></tr><tr><td>Premises Setup + Pharmacist Appointment</td><td>5-10 days</td></tr><tr><td>Document Preparation</td><td>3-5 days</td></tr><tr><td>GRAS Payment + Application Filing</td><td>1-2 days</td></tr><tr><td>FDA Drug Inspector Inspection</td><td>15-45 days</td></tr><tr><td>Licence Grant</td><td>5-10 days after inspection</td></tr><tr><td><strong>Total End-to-End</strong></td><td><strong>30-60 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Operating without a drug licence is a criminal offence under Section 27 - up to 3 years imprisonment + Rs 5,000 fine. The Maharashtra FDA conducts surprise inspections in the Pune area. Businesses found operating without valid licence face immediate closure, stock seizure, and prosecution. Selling spurious drugs: up to life imprisonment (Section 30). Apply before stocking a single medicine.</p>

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
            <h2 class="section-title">Why Choose Patron for Drug License in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office with FDA Experience</h3><p class="feature-desc">RTC Silver, Wagholi. Direct experience with Joint Commissioner (Drugs), FDA Pune Division and Drug Inspectors assigned to Pune Municipal Corporation area.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Complete Pharmacy Launch Package</h3><p class="feature-desc">Drug licence + entity registration + GST + Shop Act + premises layout + FDA inspection prep + accounting setup. Legally operational from day one.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">FDA Inspection Preparation</h3><p class="feature-desc">Unlike online portals that leave inspection to you, Patron provides premises audit, layout advisory, pharmacist verification, and on-site accompaniment during Drug Inspector visit.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Track Record</h3><p class="feature-desc">10,000+ businesses served. 4.9 Google rating. 50,000+ documents filed. Experienced with Aaple Sarkar portal quirks and GRAS payment system. Zero suspension orders.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across Pune</h2>
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
            <h2 class="section-title">Retail vs Wholesale vs Manufacturing Drug Licence</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Retail Licence</th><th>Wholesale Licence</th><th>Manufacturing Licence</th></tr></thead>
                    <tbody>
                        <tr><td>Form</td><td>Form 20/21</td><td>Form 20B/21B</td><td>Form 25/28</td></tr>
                        <tr><td>Purpose</td><td>Sale to consumers</td><td>Distribution to retailers/hospitals</td><td>Production of drugs</td></tr>
                        <tr><td>Govt Fee</td><td>Rs 3,250</td><td>Rs 3,000</td><td>Rs 6,000-15,000 (varies)</td></tr>
                        <tr><td>Technical Person</td><td>Registered Pharmacist (Maha. Council)</td><td>Competent Person (B.Pharm + 1yr)</td><td>Qualified staff per Schedule M</td></tr>
                        <tr><td>Premises</td><td>Min 10 sq.m. + cold storage</td><td>Adequate warehouse + cold storage</td><td>Factory with GMP compliance</td></tr>
                        <tr><td>Validity</td><td>5 years</td><td>5 years</td><td>5 years</td></tr>
                        <tr><td>Best For Pune</td><td>Medical stores, chemist shops, hospital pharmacies</td><td>Drug distributors, stockists, C&F agents</td><td>Pharma companies, API producers at MIDC</td></tr>

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
                
                <p>Patron offers comprehensive pharmacy business setup in Pune:</p><ul>
                    <li><a href="#">Drug License in India</a> - National drug licence services</li>
                    <li><a href="/gst-registration/pune">GST Registration in Pune</a> - Mandatory for pharma businesses</li>
                    <li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> - Company incorporation</li>
                    <li><a href="/llp-incorporation/pune">LLP Registration in Pune</a> - LLP for wholesale/distribution</li>
                    <li><a href="/shop-act-registration">Shop Act Registration</a> - Mandatory for pharmacy premises</li>
                    <li><a href="/fssai-registration/pune">FSSAI Registration in Pune</a> - For health supplements</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Brand protection for pharmacy chains</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Drug License in Pune</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>Drugs and Cosmetics Act, 1940 - Section 18 (prohibition), Section 27 (penalty: 3 years + Rs 5,000), Section 30 (spurious drugs: up to life imprisonment)</li>
                    <li>Drugs and Cosmetics Rules, 1945 - Rule 61 (retail conditions), Rule 65 (wholesale), Schedule H/H1/X, Schedule M (GMP)</li>
                    <li>Pharmacy Act, 1948 - Registered pharmacist requirement, Maharashtra State Pharmacy Council</li>
                    <li>Maharashtra Shops and Establishments Act, 2017 - Registration for pharmacy premises</li></ul>
                <p><strong>Key Portals:</strong></p><ul>
                    <li><a href="https://fda.maharashtra.gov.in/" target="_blank" rel="noopener">Maharashtra FDA</a> - fda.maharashtra.gov.in</li>
                    <li><a href="https://aaplesarkar.mahaonline.gov.in/" target="_blank" rel="noopener">Aaple Sarkar</a> - mandatory for new applications</li>
                    <li>GRAS - gras.mahakosh.gov.in (fee payment)</li></ul>
                <p><strong>Penalties:</strong></p><ul>
                    <li>Without licence: Up to 3 years + Rs 5,000 (first offence); 5 years + Rs 10,000 (subsequent)</li>
                    <li>Adulterated drugs: Up to 3 years + Rs 5,000 (Section 28)</li>
                    <li>Spurious drugs: Up to life imprisonment (Section 30)</li></ul>

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
                    <h2 class="faq-expanded__title">FAQs - Drug License in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about drug licence in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Drug License in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does a drug license cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>Government fees are Rs 3,250 for retail and Rs 3,000 for wholesale, paid via GRAS at gras.mahakosh.gov.in. Patron's all-inclusive packages start from Rs 14,999 (retail) and Rs 12,999 (wholesale) covering entity registration, document preparation, Aaple Sarkar application, GRAS payment, pharmacist documentation, premises layout advisory, and FDA inspection preparation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does it take to get a drug license in Pune?</h3>
                        <div class="faq-expanded__a"><p>The complete process takes 30-60 working days from application filing to licence grant. This includes document preparation (3-5 days), Aaple Sarkar application filing (1-2 days), FDA Drug Inspector inspection (15-45 days), and licence issuance (5-10 days after inspection). Delays from incomplete pharmacist documentation or premises not meeting FDA specifications.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which authority issues drug licenses in Pune?</h3>
                        <div class="faq-expanded__a"><p>The Maharashtra Food and Drug Administration (FDA) issues drug licences. For Pune, the Joint Commissioner (Drugs), FDA Pune Division is the licensing authority. The Drug Inspector assigned to the Pune Municipal Corporation area conducts the premises inspection. Applications are filed through the Aaple Sarkar portal with fees via GRAS.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do I need a pharmacist to open a medical store in Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under the Drugs and Cosmetics Act 1940 and Pharmacy Act 1948, a retail drug licence requires a registered pharmacist with valid registration from the Maharashtra State Pharmacy Council. The pharmacist must be physically present during operating hours. Prescription drugs (Schedule H/H1) must be sold under the pharmacist's signature.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between retail and wholesale drug licence?</h3>
                        <div class="faq-expanded__a"><p>Retail licence (Form 20/21) allows sale to consumers and requires a registered pharmacist. Wholesale licence (Form 20B/21B) allows distribution to retailers, hospitals, and clinics, and requires a competent person with B.Pharm degree and 1 year experience. Retail costs Rs 3,250 and wholesale Rs 3,000 in government fees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I sell medicines online from Pune without a drug licence?</h3>
                        <div class="faq-expanded__a"><p>No. Selling medicines online requires a valid drug licence from the state where the dispensing premises is located. The premises must have a registered pharmacist. Prescription drugs can only be dispensed against valid prescriptions. Operating without licence attracts up to 3 years imprisonment and Rs 5,000 fine under Section 27.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the penalty for operating without a drug licence?</h3>
                        <div class="faq-expanded__a"><p>Under Section 27, first offence: imprisonment up to 3 years and fine up to Rs 5,000. Subsequent offence: up to 5 years and Rs 10,000. Selling adulterated drugs (Section 28): up to 3 years and Rs 5,000. Selling spurious drugs (Section 30): up to life imprisonment. The Maharashtra FDA conducts surprise inspections in Pune.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How do I renew my drug licence in Pune?</h3>
                        <div class="faq-expanded__a"><p>Drug licences are valid for 5 years. Retention (renewal) must be filed before expiry through the Aaple Sarkar portal with retention fee via GRAS. The fee is the same as the original licence fee. FDA may conduct inspection during renewal. Operating with expired licence is a criminal offence. Patron tracks all expiry dates and files proactively.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Medical store kholne ke liye pharmacist chahiye kya?</strong> Haan. Maharashtra State Pharmacy Council mein registered pharmacist zaroori hai. Operating hours mein premises pe physically present hona chahiye.</p><p><strong>Drug licence kitne saal ka hota hai?</strong> 5 saal. Expiry se pehle retention (renewal) file karna zaroori hai Aaple Sarkar portal pe. Expired licence pe kaam karna criminal offence hai.</p><p><strong>Online pharmacy ke liye bhi drug licence chahiye?</strong> Haan. Dispensing premises jahan hai wahan ka state drug licence zaroori hai. Registered pharmacist bhi chahiye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Your Drug License in Pune Before Stocking a Single Medicine</h2>
            <div class="content-text">
                
                <p>Operating without a drug licence is a criminal offence - up to 3 years imprisonment + Rs 5,000 fine (Section 27). Maharashtra FDA conducts surprise inspections in Pune. Businesses found without valid licence face immediate closure, stock seizure, and prosecution. Selling spurious drugs: up to life imprisonment.</p><p><strong>Apply now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Drug License in Pune with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">A drug licence in Pune is the mandatory legal authorisation under the Drugs and Cosmetics Act 1940 for any pharmaceutical business - from medical stores on FC Road to wholesale distributors in Market Yard and pharma manufacturers in MIDC Bhosari.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi delivers the complete pharmacy business launch package: entity registration, drug licence via Aaple Sarkar, FDA inspection preparation, GST, Shop Act, and accounting setup. With 10,000+ businesses served and direct Maharashtra FDA experience, Patron ensures your Pune pharmacy is legally operational from day one.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Drug%20License%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Drug%20License%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides drug licence services across major cities.</p>
    
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end pharmacy and business registration in Pune</div><div class="pa-cross-grid"><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/fssai-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Freshness Tier 2) to incorporate FDA Maharashtra regulatory changes, Aaple Sarkar portal updates, GRAS fee revisions, and Drug Inspector inspection parameters. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
