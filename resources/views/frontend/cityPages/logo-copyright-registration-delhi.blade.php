
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Logo Copyright Registration in Delhi - Form XIV & Fees</title>
    <meta name="description" content="Register logo copyright in Delhi. Artistic work Section 2(c), TM-60 from Dwarka. Serving Connaught Place, Aerocity, Nehru Place. Call +91 945 945 6700.">
    <link rel="canonical" href="/logo-copyright-registration/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Logo Copyright Registration in Delhi - Form XIV & Fees">
    <meta property="og:description" content="Register logo copyright in Delhi. Artistic work Section 2(c), TM-60 from Dwarka. Serving Connaught Place, Aerocity, Nehru Place. Call +91 945 945 6700.">
    <meta property="og:url" content="/logo-copyright-registration/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Logo Copyright Registration in Delhi - Form XIV & Fees">
    <meta name="twitter:description" content="Register logo copyright in Delhi. Artistic work Section 2(c), TM-60 from Dwarka. Serving Connaught Place, Aerocity, Nehru Place. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Logo Copyright Registration in Delhi",
      "description": "Register logo copyright in Delhi. Artistic work Section 2(c), TM-60 from Dwarka. Serving Connaught Place, Aerocity, Nehru Place. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/logo-copyright-registration/delhi",
      "serviceType": "Logo Copyright Registration in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/logo-copyright-registration/delhi",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "500",
          "maxPrice": "4500",
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
          "name": "Logo Copyright Registration in India: Process and Fees",
          "item": "https://www.patronaccounting.com/logo-copyright-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Logo Copyright Registration in Delhi",
          "item": "https://www.patronaccounting.com/logo-copyright-registration/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Can I copyright a logo in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A logo qualifies as an artistic work (drawing) under Section 2(c)(i) of the Copyright Act 1957 - 'whether or not possessing artistic quality.' Copyright is automatic from creation, but formal registration at the Copyright Office, Dwarka, New Delhi 110078 provides prima facie evidence. Note: a TM-60 Trademark Search Certificate from CGPDTM (same Dwarka complex) is mandatory before Form XIV can succeed. Logo copyright costs Rs 500 (individual) / Rs 2,000 (company)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between logo copyright and trademark?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Copyright (Copyright Act 1957) protects artistic expression of the logo design for Life + 60 years - preventing visual copying. Trademark (Trade Marks Act 1999) protects the logo as a brand identifier for 10 years renewable - preventing confusingly similar marks. Both recommended for Delhi brands. Copyright first (Rs 500 with TM-60 from CGPDTM Dwarka), then trademark (Rs 4,500 for DPIIT startups with 50% concession at same Dwarka CGPDTM)."
          }
        },
        {
          "@type": "Question",
          "name": "How much does it cost to copyright a logo in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 500 per work for individual applicants; Rs 2,000 for company/LLP/organisation. Payable to Registrar of Copyrights, New Delhi at copyright.gov.in. TM-60 Trademark Search Certificate from CGPDTM (also at Dwarka) must be obtained before Form XIV. Patron's professional fee for complete logo copyright including TM-60 coordination starts from INR 3,999."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a TM-60 certificate for logo copyright?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - mandatory. Under Rule 70(6) Copyright Rules 2013, TM-60 from CGPDTM is required for any artistic work used on goods/services. Since logos are used in commerce, TM-60 is needed for every logo copyright application. Delhi's advantage: CGPDTM (Boudhik Sampada Bhawan, Dwarka 110075) and Copyright Office (110078) are in the same complex. Patron initiates TM-60 simultaneously with Form XIV."
          }
        },
        {
          "@type": "Question",
          "name": "How long does logo copyright protection last?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Life of designer + 60 years from the year following death (Section 22 Copyright Act 1957). For company-owned logos: 60 years from first publication. Compare to trademark: 10 years renewable indefinitely. Copyright provides longer protection at lower cost. Together, copyright and trademark give Delhi brands the fullest logo IP shield."
          }
        },
        {
          "@type": "Question",
          "name": "Where do I register copyright for my logo in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Register at the Copyright Office, Boudhik Sampada Bhawan, Plot No. 32, Sector 14, Dwarka, New Delhi 110078. Before Form XIV, obtain TM-60 from CGPDTM at the same complex (110075). File online at copyright.gov.in with logo file (PNG/JPG/PDF, less than 5 MB), Form XIV, SoFP, and TM-60 certificate. Rs 500 (individual) or Rs 2,000 (company). Diary Number issued immediately."
          }
        },
        {
          "@type": "Question",
          "name": "Should I register both copyright and trademark for my logo?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - for most Delhi brands. Copyright (Rs 500 individual / Rs 2,000 company) protects artistic design for Life + 60 years. Trademark (Rs 9,000/class or Rs 4,500 for DPIIT startups) protects brand identity for 10 years renewable. For Aerocity DPIIT startups, combined government fees can be as low as Rs 6,500 (Rs 2,000 copyright + Rs 4,500 trademark) - the most cost-effective dual logo IP in India. Quick Answers Delhi mein logo ka copyright kaise register karein? Pehle CGPDTM Dwarka (110075) se TM-60 certificate lo. Phir copyright.gov.in par Form XIV + SoFP file karo, logo PNG/JPG/PDF upload karo, Rs 500 (individual) ya Rs 2,000 (company) pay karo. Diary Number turant milti hai. Patron ka Rohini office dono CGPDTM aur Copyright Office Dwarka handle karta hai. Is a simple wordmark eligible for logo copyright? Yes, if it involves original artistic styling. Most commercially created wordmark logos for Delhi brands involve sufficient creative expression to qualify under Section 2(c)(i). What happens if I file without TM-60? Copyright Examiner will issue a discrepancy letter requiring TM-60 within 30 days. Adds 3-6 months. Patron prevents this by obtaining TM-60 before Form XIV is filed."
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
                        Logo Copyright Registration in Delhi: Protect Your Brand Design Today
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Logo = Artistic Work</strong>:</span> Your logo qualifies under Section 2(c)(i) of the Copyright Act, 1957 - "whether or not possessing artistic quality." Even simple wordmark logos qualify</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>TM-60 Certificate - Critical Step</strong>:</span> Trademark Search Certificate from CGPDTM is MANDATORY before Form XIV can succeed - Rule 70(6) Copyright Rules 2013. Both offices in same Dwarka complex</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Dual Protection Recommended</strong>:</span> Copyright (Rs 500/Rs 2,000) protects artistic expression for Life + 60 years. Trademark (from Rs 4,500 for DPIIT startups) protects brand identity for 10 years renewable</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Rs 500 Individual / Rs 2,000 Company</strong>:</span> Online at copyright.gov.in or physical at Copyright Office, Boudhik Sampada Bhawan, Dwarka, New Delhi 110078</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Expert Logo Copyright in Delhi</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Logo%20Copyright%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Logo%20Copyright%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Logo%20Copyright%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Logo Copyright Registration in Delhi',
                                            'city'     => 'Delhi',
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
    'ctaText'    => 'Expert logo copyright + TM-60 coordination + dual IP protection for Delhi brands.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Logo Copyright Registration in Delhi - At a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Logo Copyright Registration in Delhi Services at a Glance</strong></p>
                    <p>Logo copyright registration in Delhi is the formal registration of your original logo design as an artistic work under Section 2(c)(i) of the Copyright Act, 1957. A TM-60 Trademark Search Certificate from CGPDTM is mandatory (Rule 70(6)). Both Copyright Office and CGPDTM are in the same Dwarka complex. Rs 500 (individual) / Rs 2,000 (company). Life + 60 years protection. <a href="/logo-copyright-registration">Learn more about Logo Copyright Registration across India</a>.</p>
                </div>
                <p>Delhi is India's brand creation capital. Connaught Place houses hundreds of advertising agencies. Aerocity is one of India's most active startup ecosystems with DPIIT-registered startups qualifying for 50% trademark fee concessions. The Copyright Office and CGPDTM are co-located in the same Boudhik Sampada Bhawan complex in Dwarka.</p>
                <p>Patron Accounting LLP's Rohini office coordinates TM-60 at CGPDTM and Form XIV at the Copyright Office in a single Dwarka workflow. For complete brand protection, <a href="/trademark-registration">Trademark Registration</a> complements copyright, and <a href="/copyright-registration-for-artistic-work">Copyright for Artistic Work</a> covers broader artistic designs.</p>
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
                <h2 class="section-title">What Is Logo Copyright Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Logo copyright registration is the formal registration of copyright in an original logo design as an artistic work under Section 2(c)(i) of the Copyright Act, 1957 - which defines a drawing as an artistic work "whether or not any such work possesses artistic quality" - giving the creator exclusive rights to reproduce, display, adapt, and assign the design for Life + 60 years.</p>
                    <p><strong>What copyright protects vs what it does not:</strong> Copyright protects the specific artistic expression of the logo design - the unique combination of shapes, lines, curves, and colours. It does NOT protect the name, word, or brand identity function. For that, <a href="/trademark-registration">Trademark Registration</a> is needed. Both together provide complete logo IP protection.</p>
                    <p><strong>The TM-60 requirement:</strong> Because a logo is used on goods/services, Rule 70(6) of the Copyright Rules, 2013 makes the TM-60 Trademark Search Certificate from CGPDTM mandatory before Form XIV can be accepted. In Delhi, both agencies are in the same Dwarka complex - Patron coordinates both in one workflow.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Logo Copyright Registration in Delhi:</strong></p>
                    <p><strong>Section 2(c)(i) - Artistic Work:</strong> A logo qualifies as a "drawing" - "whether or not possessing artistic quality." Even simple geometric logos qualify.</p>
                    <p><strong>TM-60 - Trademark Search Certificate:</strong> Mandatory certificate from CGPDTM confirming no identical trademark registered. Required under Rule 70(6) before Form XIV can succeed.</p>
                    <p><strong>Copyright vs Trademark:</strong> Copyright (Life + 60 years) protects artistic expression. Trademark (10 years renewable) protects brand identity in commerce. Both needed for complete logo IP.</p>
                    <p><strong>Section 17 - Logo Ownership:</strong> Designer is first owner by default. Section 17(b) exception for commissioned designs. Section 17(c) for employee-designed logos.</p>
                    <p><strong>DPIIT Startup 50% Concession:</strong> DPIIT-registered startups get Rs 4,500/class instead of Rs 9,000 for trademark. Aerocity startups benefit directly.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Logo Copyright Registration in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Copyright Office + CGPDTM</span>
                        <strong>Dwarka, Same Complex</strong>
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
            <h2 class="section-title">Who Needs Logo Copyright Registration in Delhi?</h2>
            <div class="content-text">
                
                <p>Connaught Place advertising agencies and brand design studios create thousands of logos yearly. Copyright vests in the studio by default under Section 17 - NOT in the client who paid for it - unless a written assignment deed exists. This creates frequent commercial disputes. Patron advises both studios and clients on proper ownership structuring.</p>
                <p>Aerocity DPIIT-registered startups need logo IP from Day 1. The 50% trademark fee concession (Rs 4,500/class vs Rs 9,000) makes dual protection especially affordable. Combined with copyright at Rs 500 (individual) / Rs 2,000 (company), the total government fees are the lowest of any applicant category.</p>
                <p>Nehru Place IT companies have a specific dual-IP need: their logo appears on software products (copyright need) AND serves as a brand identifier (trademark need). Both registrations are increasingly required for government and enterprise contract due diligence. Lajpat Nagar craft and textile brand designers create original logos for export products where copyright provides automatic international protection through the Berne Convention in 170+ countries.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Is Included in Patron's Logo Copyright Service in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Logo Copyright Eligibility Assessment</td><td>Confirm Section 2(c)(i) qualification, TM-60 requirement, and correct applicant identity (designer vs company under Section 17)</td></tr>
                        <tr><td>TM-60 Application at CGPDTM Dwarka</td><td>Initiated simultaneously with Form XIV preparation - both agencies in same Dwarka complex. Prevents the common 2-4 week delay</td></tr>
                        <tr><td>Form XIV + SOP + SoFP Preparation</td><td>All three mandatory components for logo artistic work. SoFP describes nature, medium, publication status, TM-60 confirmation</td></tr>
                        <tr><td>Designer vs Company Ownership Advisory</td><td>Section 17 assessment - resolving freelance designer, employed designer, or commissioned design ownership. Assignment deed drafting if needed</td></tr>
                        <tr><td>DPIIT Startup Trademark Concession Advisory</td><td>Verifying DPIIT status, confirming 50% concession eligibility (Rs 4,500/class), filing Form TM-A with DPIIT certificate for Aerocity startups</td></tr>
                        <tr><td>Online or Physical Filing at Dwarka</td><td>Complete e-filing at copyright.gov.in with logo file (PNG/JPG/PDF, less than 5MB) or physical submission at Copyright Office Dwarka</td></tr>
                        <tr><td>Dual Copyright + Trademark Package</td><td>Coordinated logo copyright + trademark registration from same Dwarka complex in one engagement</td></tr>

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
            <h2 class="section-title">How to Register Logo Copyright in Delhi - 5 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Expert logo copyright from Patron's Rohini office - TM-60 at CGPDTM + Form XIV at Copyright Office, both in same Dwarka complex.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Confirm Logo Eligibility and Identify Owner</h3><p class="step-description">Confirm the logo qualifies under Section 2(c)(i) - almost every logo design qualifies since "artistic quality" is not required. Resolve ownership: in-house designer = company owns (Section 17(c)); freelance designer = designer owns unless written assignment exists; commissioned design = Section 17(b) assessment needed. Patron drafts any missing assignment deeds.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 2(c)(i) Eligible</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ownership Confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="45" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="49" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">2(c)(i)</text></svg></div><span class="illustration-label">Logo Verified</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Apply for TM-60 at CGPDTM Dwarka</h3><p class="step-description">Because logos are used on goods/services, Rule 70(6) makes TM-60 mandatory. Apply at CGPDTM, Boudhik Sampada Bhawan, Dwarka 110075 - the SAME complex as the Copyright Office (110078). Processing: 2-4 weeks. Patron initiates TM-60 simultaneously with Form XIV preparation to eliminate serial delay.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TM-60 Initiated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Same Dwarka Complex</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="45" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="37" y="45" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TM-60</text><text x="87" y="45" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM XIV</text><path d="M55 42h15" stroke="#E8712C" stroke-width="2" stroke-dasharray="3 2"/></svg></div><span class="illustration-label">TM-60 Applied</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare Form XIV + SoFP + Logo File</h3><p class="step-description">Prepare Form XIV (Artistic Work/Drawing), Statement of Further Particulars (SoFP - mandatory for artistic works), and logo file in PNG/JPG/PDF under 5 MB. SoFP describes logo nature, medium, publication status, and TM-60 confirmation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SoFP Complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Logo File Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3"/><line x1="30" y1="36" x2="80" y2="36" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="30" y="50" width="50" height="12" rx="3" fill="#E8712C" opacity="0.15"/><text x="55" y="59" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">XIV+SoFP</text></svg></div><span class="illustration-label">Application Ready</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File at copyright.gov.in with TM-60 Attached</h3><p class="step-description">File online: upload logo file, Form XIV, SoFP, attach TM-60 certificate. Pay Rs 500 (individual) or Rs 2,000 (company). Diary Number issued immediately. Post Acknowledgement Slip to Copyright Office, Dwarka, New Delhi 110078. Physical submission also available.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Diary Number Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 500/Rs 2,000 Paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M15 30l45 25 45-25" stroke="#14365F" stroke-width="1.5" fill="none"/><circle cx="90" cy="25" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M83 25l5 5 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed Successfully</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Track, Respond to Discrepancy, Receive Certificate</h3><p class="step-description">30-day mandatory waiting period. Common discrepancies: missing TM-60 (most frequent), SoFP incomplete, logo file too small, ownership documentation gap. Patron monitors and responds within 48 hours. Certificate issued in 4-8 months for well-prepared applications.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Life + 60 Years</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M50 42l7 7 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round"/><rect x="35" y="80" width="50" height="10" rx="5" fill="#F5A623" opacity="0.3"/><text x="60" y="88" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTERED</text></svg></div><span class="illustration-label">Copyright Secured</span><span class="step-number-large">05</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Logo Copyright Registration in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>Form XIV</strong> - All columns completed: Artistic Work/Drawing (Column 4), Author/Owner (Column 7)</li><li><strong>Statement of Further Particulars (SoFP) - MANDATORY:</strong> Describes logo as artistic work - nature, medium, publication status, TM-60 confirmation</li><li><strong>Logo File - PNG/JPG/PDF, less than 5 MB:</strong> Clear, high-resolution reproduction of the logo design</li><li><strong>TM-60 Trademark Search Certificate - MANDATORY:</strong> From CGPDTM Dwarka (110075). Required under Rule 70(6) before Form XIV can succeed</li><li><strong>Copyright Assignment Deed:</strong> If designer is different from company applicant. Written deed signed by designer required under Section 19(1)</li><li><strong>PAN Card and Identity/Address Proof:</strong> For both author and applicant</li><li><strong>DPIIT Certificate:</strong> If Aerocity/Delhi startup claiming 50% trademark concession</li><li><strong>Power of Attorney:</strong> If filing through Patron Accounting LLP</li></ul>
                <div class="highlight-box"><p><strong>Delhi tip for Connaught Place agencies:</strong> A contractual clause saying "all IP belongs to client" without a specific copyright assignment deed signed by the designer may not transfer copyright under Section 19(1) of the Copyright Act. Explicit written assignment deeds are mandatory.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges Delhi Brand Owners Face</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing TM-60 Certificate</td><td>Discrepancy letter with 30-day deadline; adds 3-6 months to timeline</td><td>TM-60 initiated Day 1 simultaneously with Form XIV. Both agencies in same Dwarka complex - same-visit coordination</td></tr>
                        <tr><td>Designer vs Brand Owner Ownership Confusion</td><td>Copyright registered in wrong entity's name; costly retroactive assignments needed</td><td>Section 17 assessment at intake for every logo engagement. Assignment deed drafted alongside Form XIV if needed</td></tr>
                        <tr><td>DPIIT 50% Concession Window Missed</td><td>Aerocity startups delay past DPIIT recognition expiry; pay standard Rs 9,000 instead of Rs 4,500</td><td>Tracks DPIIT expiry dates; initiates dual copyright + trademark within concession window</td></tr>
                        <tr><td>Logo Variants Not Separately Filed</td><td>Assumes one application covers all versions. Each variant is a separate artistic work</td><td>Advises on variant prioritisation; primary colour + B&W versions filed first</td></tr>
                        <tr><td>SoFP Omitted for Logo</td><td>SoFP is mandatory for artistic works including logos; omission causes immediate discrepancy</td><td>SoFP is a mandatory non-optional step in every artistic work filing including logos</td></tr>

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
            <h2 class="section-title">Logo Copyright and Trademark Registration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Logo Copyright (individual)</td><td>Rs 500 per work</td></tr>
                        <tr><td>Logo Copyright (company/LLP)</td><td>Rs 2,000 per work</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 3,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Logo Trademark (standard applicant)</td><td>Rs 9,000 per class</td></tr>
                        <tr><td>Logo Trademark (DPIIT startup - 50% concession)</td><td>Rs 4,500 per class</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Logo Copyright Registration in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Logo%20Copyright%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Logo Copyright Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Ownership assessment + designer assignment audit</td><td>1 working day</td></tr>
                        <tr><td>TM-60 application to CGPDTM Dwarka (parallel with Form XIV)</td><td>2-4 weeks</td></tr>
                        <tr><td>Form XIV + SoFP preparation + logo file</td><td>2-3 working days</td></tr>
                        <tr><td>Online filing + payment</td><td>1 working day (Diary Number immediately)</td></tr>
                        <tr><td>30-day mandatory waiting period</td><td>30 days</td></tr>
                        <tr><td>Copyright Examiner review</td><td>1-3 months</td></tr>
                        <tr><td>Total (no objection)</td><td>4-8 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi advantage:</strong> Copyright Office (110078) and CGPDTM (110075) in same Dwarka complex. Patron files TM-60 and Form XIV in parallel - saving 2-4 weeks vs applicants who discover TM-60 requirement only at discrepancy stage.</p>

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
            <h2 class="section-title">Why Delhi Brand Owners Choose Patron for Logo Copyright</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">TM-60 + Form XIV Same Visit</h3><p class="feature-text">Both CGPDTM and Copyright Office in same Dwarka complex. Patron coordinates TM-60 and Form XIV simultaneously - eliminating the 3-6 month delay from TM-60 discrepancy.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Section 17 Ownership Expertise</h3><p class="feature-text">Resolves the designer vs company copyright trap for every Connaught Place agency client. Assignment deeds drafted before Form XIV is filed.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">DPIIT 50% Concession Timing</h3><p class="feature-text">Tracks DPIIT recognition expiry for Aerocity startups. Initiates dual copyright + trademark within concession window - saving up to Rs 4,500 per class.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">SoFP for Artistic Work</h3><p class="feature-text">SoFP templates specifically for logo copyright. Mandatory for artistic works. Eliminates the most common discrepancy letter for Delhi brand logo applications.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">Dual Copyright + Trademark Package</h3><p class="feature-text">Copyright (artistic expression) + trademark (brand identity) coordinated in one Dwarka engagement. The fullest logo IP protection available.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Logo Variant Guidance</h3><p class="feature-text">Advises on which logo variants to prioritise for copyright registration. Primary colour + B&W versions filed first for maximum commercial protection.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>With offices in Pune, Mumbai, Delhi (Rohini), and Gurugram, Patron serves Connaught Place ad agencies, Aerocity startups, Nehru Place IT companies, and Lajpat Nagar brand designers with in-person TM-60 + Form XIV coordination at the Dwarka complex.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Logo Copyright vs Logo Trademark vs Design Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Logo Copyright (Copyright Act 1957)</th><th>Logo Trademark (Trade Marks Act 1999)</th></tr></thead>
                    <tbody>
                        <tr><td>What it protects</td><td>Artistic expression of logo design - prevents visual copying</td><td>Logo as brand identifier in commerce - prevents confusingly similar marks</td></tr>
                        <tr><td>Duration</td><td>Life + 60 years - no renewal needed</td><td>10 years - renewable indefinitely every 10 years</td></tr>
                        <tr><td>Govt Fee (individual)</td><td>Rs 500/work</td><td>Rs 9,000/class (Rs 4,500 for DPIIT startups)</td></tr>
                        <tr><td>Govt Fee (company)</td><td>Rs 2,000/work</td><td>Rs 9,000/class</td></tr>
                        <tr><td>TM-60 Required?</td><td>YES - mandatory before Form XIV</td><td>N/A - trademark IS the registration</td></tr>
                        <tr><td>Recommended?</td><td>YES - for all Delhi brands</td><td>YES - for brands in active commerce</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Logo Copyright Clients</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/logo-copyright-registration">Logo Copyright Registration (India page)</a> - National overview</li>
                    <li><a href="/copyright-registration-for-artistic-work">Copyright for Artistic Work</a> - Broader artistic design protection</li>
                    <li><a href="/copyright-registration">Copyright Registration</a> - General copyright across all categories</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Brand identity protection in commerce</li>
                    <li><a href="/copyright-assignment">Copyright Assignment</a> - Transfer of logo copyright from designer to company</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Logo Copyright in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 2(c)(i) - Logo as Artistic Work:</strong> Drawing "whether or not possessing artistic quality." Even simple geometric logos qualify.</li>
                    <li><strong>Rule 70(6) - TM-60 Mandatory:</strong> Trademark Search Certificate required for any artistic work used on goods/services. Every logo copyright needs TM-60.</li>
                    <li><strong>Section 17 - First Ownership:</strong> Designer is default first owner. Section 17(b) for commissioned designs, 17(c) for employee designs.</li>
                    <li><strong>Section 19(1) - Assignment Must Be Written:</strong> No verbal or email assignment is valid. Explicit written deed signed by assignor required.</li>
                    <li><strong>Section 22 - Copyright Term:</strong> Life of designer + 60 years. Company-owned logos: 60 years from first publication.</li>
                    <li><strong>Trade Marks Act 1999 - Trademark:</strong> Logo as brand identifier. 10 years renewable. Rs 9,000/class (Rs 4,500 DPIIT startups). CGPDTM Delhi at Dwarka. <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office - copyright.gov.in</a></li>
                    <li><strong>DPIIT Startup India Concession:</strong> 50% trademark fee concession for DPIIT-registered startups. Rs 4,500/class vs Rs 9,000. Active recognition required at filing time.</li>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Logo Copyright Registration in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers about copyrighting logos, TM-60 certificates, dual protection, and DPIIT startup concessions in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Logo Copyright Registration in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can I copyright a logo in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. A logo qualifies as an artistic work (drawing) under Section 2(c)(i) of the Copyright Act 1957 - 'whether or not possessing artistic quality.' Copyright is automatic from creation, but formal registration at the Copyright Office, Dwarka, New Delhi 110078 provides prima facie evidence. Note: a TM-60 Trademark Search Certificate from CGPDTM (same Dwarka complex) is mandatory before Form XIV can succeed. Logo copyright costs Rs 500 (individual) / Rs 2,000 (company).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between logo copyright and trademark?</h3>
                        <div class="faq-expanded__a"><p>Copyright (Copyright Act 1957) protects artistic expression of the logo design for Life + 60 years - preventing visual copying. Trademark (Trade Marks Act 1999) protects the logo as a brand identifier for 10 years renewable - preventing confusingly similar marks. Both recommended for Delhi brands. Copyright first (Rs 500 with TM-60 from CGPDTM Dwarka), then trademark (Rs 4,500 for DPIIT startups with 50% concession at same Dwarka CGPDTM).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does it cost to copyright a logo in India?</h3>
                        <div class="faq-expanded__a"><p>Rs 500 per work for individual applicants; Rs 2,000 for company/LLP/organisation. Payable to Registrar of Copyrights, New Delhi at copyright.gov.in. TM-60 Trademark Search Certificate from CGPDTM (also at Dwarka) must be obtained before Form XIV. Patron's professional fee for complete logo copyright including TM-60 coordination starts from INR 3,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do I need a TM-60 certificate for logo copyright?</h3>
                        <div class="faq-expanded__a"><p>Yes - mandatory. Under Rule 70(6) Copyright Rules 2013, TM-60 from CGPDTM is required for any artistic work used on goods/services. Since logos are used in commerce, TM-60 is needed for every logo copyright application. Delhi's advantage: CGPDTM (Boudhik Sampada Bhawan, Dwarka 110075) and Copyright Office (110078) are in the same complex. Patron initiates TM-60 simultaneously with Form XIV.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does logo copyright protection last?</h3>
                        <div class="faq-expanded__a"><p>Life of designer + 60 years from the year following death (Section 22 Copyright Act 1957). For company-owned logos: 60 years from first publication. Compare to trademark: 10 years renewable indefinitely. Copyright provides longer protection at lower cost. Together, copyright and trademark give Delhi brands the fullest logo IP shield.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Where do I register copyright for my logo in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Register at the Copyright Office, Boudhik Sampada Bhawan, Plot No. 32, Sector 14, Dwarka, New Delhi 110078. Before Form XIV, obtain TM-60 from CGPDTM at the same complex (110075). File online at copyright.gov.in with logo file (PNG/JPG/PDF, less than 5 MB), Form XIV, SoFP, and TM-60 certificate. Rs 500 (individual) or Rs 2,000 (company). Diary Number issued immediately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Should I register both copyright and trademark for my logo?</h3>
                        <div class="faq-expanded__a"><p>Yes - for most Delhi brands. Copyright (Rs 500 individual / Rs 2,000 company) protects artistic design for Life + 60 years. Trademark (Rs 9,000/class or Rs 4,500 for DPIIT startups) protects brand identity for 10 years renewable. For Aerocity DPIIT startups, combined government fees can be as low as Rs 6,500 (Rs 2,000 copyright + Rs 4,500 trademark) - the most cost-effective dual logo IP in India.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Delhi mein logo ka copyright kaise register karein?</strong> Pehle CGPDTM Dwarka (110075) se TM-60 certificate lo. Phir copyright.gov.in par Form XIV + SoFP file karo, logo PNG/JPG/PDF upload karo, Rs 500 (individual) ya Rs 2,000 (company) pay karo. Diary Number turant milti hai. Patron ka Rohini office dono CGPDTM aur Copyright Office Dwarka handle karta hai.</p>
                <p><strong>Is a simple wordmark eligible for logo copyright?</strong> Yes, if it involves original artistic styling. Most commercially created wordmark logos for Delhi brands involve sufficient creative expression to qualify under Section 2(c)(i).</p>
                <p><strong>What happens if I file without TM-60?</strong> Copyright Examiner will issue a discrepancy letter requiring TM-60 within 30 days. Adds 3-6 months. Patron prevents this by obtaining TM-60 before Form XIV is filed.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why You Should Register Your Logo Copyright Today</h2>
            <div class="content-text">
                
                <p><strong>No TM-60 = Discrepancy Letter:</strong> Filing Form XIV without TM-60 guarantees a 3-6 month delay. Start TM-60 today - Patron initiates it in parallel with Form XIV.</p>
                <p><strong>DPIIT Concession Has Expiry:</strong> Aerocity startups with active DPIIT recognition have a limited window for 50% trademark fee concession. Don't lose it.</p>
                <p><strong>Section 17 Ownership Gap Compounds:</strong> If your logo was designed by a freelancer without a written assignment deed, that designer holds copyright in your brand identity. Fix it now.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Logo Copyright Registration in Delhi - Partner with Patron</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Logo copyright registration in Delhi requires two parallel filings at two government agencies in the same Dwarka complex - TM-60 at CGPDTM (110075) and Form XIV at the Copyright Office (110078). Getting this dual-agency coordination right from Day 1 is the difference between a smooth 4-8 month registration and a 12+ month process derailed by TM-60 discrepancies.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting LLP's Rohini office provides logo copyright as a dual-agency service - TM-60 at CGPDTM and Form XIV at Copyright Office in one coordinated workflow, Section 17 designer ownership assessments, Aerocity DPIIT startup 50% trademark concession timing, and complete dual copyright + trademark logo IP package. 15+ years of experience, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Logo%20Copyright%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Logo%20Copyright%20Registration%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Logo%20Copyright%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Logo Copyright Registration - Available in 4 Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert logo copyright registration across India's major cities.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
                        <a href="/logo-copyright-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/logo-copyright-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
                        <a href="/logo-copyright-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    </div></div>
                <div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Logo Copyright Registration in Delhi</div><div class="pa-cross-grid">
                        <a href="/copyright-registration-for-artistic-work/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright for Artistic Work</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/copyright-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/copyright-assignment/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/brand-copyright-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Brand Copyright Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Monitor: Copyright Office fees, DPIIT Startup India trademark concession policy, Delhi HC logo IP cases. Reviewed by CA & CS Team, Patron Accounting LLP.</p>
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
