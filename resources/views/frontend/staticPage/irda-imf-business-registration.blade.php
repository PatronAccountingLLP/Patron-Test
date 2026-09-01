
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>IRDAI Insurance Agent Registration - IMF, Process & Docs</title>
    <meta name="description" content="IRDA-IMF business registration under IRDAI Regulations 2015. Net worth Rs 5-10 lakh. Application fee Rs 5,000. 7-10 week process. Expert CA and CS team support.">
    <link rel="canonical" href="/irda-imf-business-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IRDAI Insurance Agent Registration - IMF, Process & Docs">
    <meta property="og:description" content="IRDA-IMF business registration under IRDAI Regulations 2015. Net worth Rs 5-10 lakh. Application fee Rs 5,000. 7-10 week process. Expert CA and CS team support.">
    <meta property="og:url" content="/irda-imf-business-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IRDAI Insurance Agent Registration - IMF, Process & Docs">
    <meta name="twitter:description" content="IRDA-IMF business registration under IRDAI Regulations 2015. Net worth Rs 5-10 lakh. Application fee Rs 5,000. 7-10 week process. Expert CA and CS team support.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "IRDA-IMF Business Registration: Process and Fees",
          "description": "IRDA-IMF business registration under IRDAI Regulations 2015. Net worth Rs 5-10 lakh. Application fee Rs 5,000. 7-10 week process. Expert CA and CS team support.",
          "url": "https://www.patronaccounting.com/irda-imf-business-registration",
          "serviceType": "IRDA-IMF Business Registration: Process and Fees",
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
            "url": "https://www.patronaccounting.com/irda-imf-business-registration",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "5",
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
              "name": "IRDA-IMF Business Registration: Process and Fees",
              "item": "https://www.patronaccounting.com/irda-imf-business-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is IRDA-IMF business registration and why is it mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "IRDA-IMF business registration is the process of obtaining a license from IRDAI to operate as an Insurance Marketing Firm in India under the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015. It is mandatory because Section 42D of the Insurance Act, 1938 prohibits any entity from acting as an insurance intermediary without a valid license issued by IRDAI. Without registration, the entity cannot legally solicit, procure, or distribute insurance products."
              }
            },
            {
              "@type": "Question",
              "name": "What is the minimum net worth required for IMF registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The minimum net worth requirement under Regulation 6 of the IRDAI IMF Regulations, 2015 is Rs 5 lakh for an IMF operating in a single district and Rs 10 lakh for IMFs operating in multiple districts (maximum three districts within a state). This net worth must be maintained throughout the operational life of the IMF and certified annually by a Chartered Accountant within three months from the close of the financial year."
              }
            },
            {
              "@type": "Question",
              "name": "How many insurance companies can an IMF tie up with?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Regulation 3(a) of the IRDAI IMF Regulations, 2015 (as amended in 2019), an IMF can solicit and procure insurance products of a maximum of two Life insurance companies, two General insurance companies, and two Health insurance companies at any point of time. In addition, IMFs can tie up with Agriculture Insurance Company of India Ltd. (AIC) and Export Credit Guarantee Corporation Ltd. (ECGC)."
              }
            },
            {
              "@type": "Question",
              "name": "How long does the IRDA-IMF registration process take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The entire IRDA-IMF registration process typically takes 7 to 10 weeks from the initial NOC application to the issuance of the registration certificate by IRDAI. Document preparation takes 2-4 weeks, the IRDAI application review takes 1-2 weeks, and final verification and approval takes another 2-4 weeks. Delays commonly occur due to incomplete documentation or pending PO examination clearance."
              }
            },
            {
              "@type": "Question",
              "name": "What is the validity period of an IMF registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The IMF registration certificate issued by IRDAI is valid for 3 years from the date of issue under Section 42D(3) of the Insurance Act, 1938. The renewal application must be submitted to IRDAI at least 30 days before the expiry date per Chapter III of the IMF Regulations, 2015. An IMF cannot conduct business during the interim period between expiry and renewal."
              }
            },
            {
              "@type": "Question",
              "name": "Can an LLP register as an Insurance Marketing Firm?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, a Limited Liability Partnership registered under the LLP Act, 2008 is eligible for IMF registration with IRDAI. The LLP Agreement, partner details, and Fit and Proper declarations of all designated partners must be submitted along with the application. The LLP must meet the same net worth and compliance requirements as a company under Regulation 6 of the IMF Regulations, 2015."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if you operate an IMF without IRDAI registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Operating as an insurance intermediary without a valid license from IRDAI is punishable with fine under Section 42D(8) of the Insurance Act, 1938. Additionally, contravention of IRDAI regulations may attract penalties up to Rs 1 crore under Section 102 of the Insurance Act, 1938 (as substituted by the IRDA Act, 1999). IRDAI may also initiate action against the entity and its promoters."
              }
            },
            {
              "@type": "Question",
              "name": "Can IMFs distribute mutual funds and other financial products?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Regulation 3(c) of the IRDAI IMF Regulations, 2015, IMFs can distribute other financial products as permitted by RBI (banking products), SEBI (mutual funds), PFRDA (pension products), and the Department of Posts, after obtaining due approvals from the respective authorities through licensed Financial Service Executives (FSEs). Quick Answers What is IMF full form in insurance? IMF stands for Insurance Marketing Firm, an entity registered with IRDAI under the IMF Regulations, 2015 to distribute insurance and financial products. What is the application fee for IMF registration? Rs 5,000 (non-refundable), paid from the IMF's State Bank of India account as mandated by IRDAI. Can IMFs distribute mutual funds? Yes, IMFs can distribute SEBI-regulated mutual funds through licensed Financial Service Executives under Regulation 3(c). What is the IRDAI IMF portal URL? The official IMF registration portal is imf.irda.gov.in How many districts can an IMF operate in? A maximum of three districts within a state, with at least one being an aspirational district if opting for multiple districts."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@php(config(['pa.testimonials_rendered' => true])) {{-- this page builds its own testimonials; the layout stands down --}}
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
                        IRDA-IMF Business Registration in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form A, NOC from IRDAI, Net Worth Certificate from CA - complete documentation package prepared by our team</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Application fee Rs 5,000 (non-refundable) + professional charges - transparent pricing with no hidden costs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Company, LLP, or Cooperative Society with Rs 5-10 lakh net worth under Regulation 6 of IMF Regulations 2015</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-10 weeks from application to registration certificate - faster than industry average with our pre-screening process</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India for registration and compliance services</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IRDA-IMF%20Registration%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20IRDA-IMF%20Registration%20services.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20IRDA-IMF%20Business%20Registration.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'IRDA-IMF Registration',
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

<!-- TESTIMONIALS (self-contained auto-scroll carousel, vanilla JS, no Slick) -->
<section class="imf-testi-sec">
    <style>
        .imf-testi-sec { padding: 24px 32px 8px; background: var(--white,#fff); overflow: hidden; }
        .imf-testi-sec .imf-testi-inner { max-width: 1320px; margin: 0 auto; }
        .imf-testi-sec .imf-testi-head { text-align: center; margin-bottom: 20px; }
        .imf-testi-sec .imf-testi-head h2 { font-size: clamp(26px,3.5vw,34px); font-weight: 800; color: var(--blue,#152238); margin: 0 0 8px; }
        .imf-testi-sec .imf-testi-head p { font-size: 15px; color: var(--text-muted,#6B7280); margin: 0; }
        .imf-testi-viewport { overflow: hidden; }
        .imf-testi-track { display: flex; gap: 20px; align-items: stretch; }
        .imf-testi-track > div { flex: 0 0 calc((100% - 60px) / 4); min-width: 0; }
        @media (max-width:1024px){ .imf-testi-track > div { flex: 0 0 calc((100% - 20px) / 2); } }
        @media (max-width:600px){ .imf-testi-track > div { flex: 0 0 100%; } }
        .imf-testi-sec .testi-video-card { background: var(--white,#fff); border: 1px solid var(--gray-200,#E5E7EB); border-radius: var(--radius-lg,12px); overflow: hidden; height: 340px; display: flex; flex-direction: column; transition: all .25s ease; }
        .imf-testi-sec .testi-video-card:hover { border-color: var(--orange,#E8712C); box-shadow: var(--shadow-md,0 4px 12px rgba(0,0,0,.08)); }
        .imf-testi-sec .testi-video-area { position: relative; height: 230px; overflow: hidden; cursor: pointer; flex-shrink: 0; }
        .imf-testi-sec .testi-video-area video { width: 100%; height: 100%; object-fit: cover; display: block; }
        .imf-testi-sec .testi-play-overlay { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,.25); transition: opacity .3s; pointer-events: none; }
        .imf-testi-sec .testi-video-area.playing .testi-play-overlay { opacity: 0; }
        .imf-testi-sec .testi-play-btn { width: 56px; height: 56px; background: rgba(232,113,44,.85); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,.3); }
        .imf-testi-sec .testi-play-btn svg { width: 22px; height: 22px; color: #fff; margin-left: 3px; }
        .imf-testi-sec .testi-star-badge { position: absolute; bottom: 12px; left: 12px; display: flex; gap: 2px; }
        .imf-testi-sec .testi-star-badge svg { width: 16px; height: 16px; fill: #FFC107; color: #FFC107; }
        .imf-testi-sec .testi-quote-card { background: var(--white,#fff); border: 1px solid var(--gray-200,#E5E7EB); border-radius: var(--radius-lg,12px); padding: 24px; height: 340px; display: flex; flex-direction: column; justify-content: space-between; transition: all .25s ease; }
        .imf-testi-sec .testi-quote-card:hover { border-color: var(--orange,#E8712C); box-shadow: var(--shadow-md,0 4px 12px rgba(0,0,0,.08)); }
        .imf-testi-sec .testi-quote-icon { color: var(--orange,#E8712C); opacity: .25; margin-bottom: 8px; }
        .imf-testi-sec .testi-quote-icon svg { width: 24px; height: 24px; }
        .imf-testi-sec .testi-quote-text { font-size: 14px; line-height: 1.65; color: var(--text-secondary,#374151); flex: 1; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical; overflow: hidden; margin: 0; }
        .imf-testi-sec .testi-footer { display: flex; flex-direction: column; gap: 8px; padding-top: 16px; border-top: 1px solid var(--gray-100,#F3F4F6); }
        .imf-testi-sec .testi-author { display: flex; align-items: center; gap: 10px; }
        .imf-testi-sec .testi-avatar { width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700; color: #fff; flex-shrink: 0; overflow: hidden; background: var(--orange,#E8712C); }
        .imf-testi-sec .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .imf-testi-sec .testi-avatar.blue { background: var(--blue,#152238); }
        .imf-testi-sec .testi-avatar.teal { background: #0D9488; }
        .imf-testi-sec .testi-avatar.purple { background: #7C3AED; }
        .imf-testi-sec .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary,#111827); line-height: 1.2; }
        .imf-testi-sec .testi-role { font-size: 12px; color: var(--text-muted,#6B7280); }
        .imf-testi-sec .testi-rating-row { display: flex; align-items: center; justify-content: space-between; }
        .imf-testi-sec .testi-stars { display: flex; gap: 1px; }
        .imf-testi-sec .testi-stars svg { width: 12px; height: 12px; fill: #FFC107; color: #FFC107; }
        .imf-testi-sec .testi-google-badge { width: 22px; height: 22px; }
        .imf-testi-sec .testi-google-badge img { width: 100%; height: 100%; }
        .imf-testi-cta { margin-top: 20px; background: var(--blue,#152238); border-radius: 12px; padding: 22px 26px; display: flex; align-items: center; justify-content: space-between; gap: 18px; flex-wrap: wrap; }
        .imf-testi-cta h3 { color: #fff; margin: 0 0 6px; font-size: 20px; font-weight: 800; }
        .imf-testi-cta p { color: rgba(255,255,255,.85); margin: 0; font-size: 14px; max-width: 760px; }
        .imf-testi-cta a { background: var(--orange,#E8712C); color: #fff; padding: 12px 26px; border-radius: 50px; font-weight: 700; text-decoration: none; white-space: nowrap; flex-shrink: 0; }
        @media (max-width:768px){ .imf-testi-sec { padding: 16px 16px 8px; } .imf-testi-cta { flex-direction: column; text-align: center; } }
    </style>
    <div class="imf-testi-inner">
        <div class="imf-testi-head">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, and stay in control.</p>
        </div>
        <div class="imf-testi-viewport">
            <div class="imf-testi-track" id="imfTestiTrack">
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar teal">S</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">2 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-video-card">
                        <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                            <video preload="metadata" poster="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"><source src="/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4"></video>
                            <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
                            <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        </div>
                        <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                            <div class="testi-avatar"><img src="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal"></div>
                            <div><div class="testi-name">Sunny Ashpal</div><div class="testi-role">Director - Demandify Media</div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">Really a fantastic experience with Patron Accounting especially Shubham. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar purple">N</div><div><div class="testi-name">Nishikant Gurav</div><div class="testi-role">1 month ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">Very proficient and professional staff. Do a fantastic job with instant response. Strongly recommended for all accounting needs, especially for startups and growing businesses.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar ">A</div><div><div class="testi-name">Anita Gaur</div><div class="testi-role">5 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-video-card">
                        <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                            <video preload="metadata" poster="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"><source src="/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4"></video>
                            <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
                            <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        </div>
                        <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                            <div class="testi-avatar"><img src="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava"></div>
                            <div><div class="testi-name">Anjanay Srivastava</div><div class="testi-role">Founder - Hunarsource Consulting</div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional, giving prompt responses. Highly recommend them for tax and compliance work.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar blue">P</div><div><div class="testi-name">Pankaj Arvikar</div><div class="testi-role">1 month ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">From the very beginning their approach has been highly professional, prompt and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar teal">P</div><div><div class="testi-name">Preeti Singh Rathor</div><div class="testi-role">3 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I called Patron to file ITR for my family members. I worked with Shubham and Amin Jain and it was a smooth process. They understand the basics very well and respond promptly.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar purple">S</div><div><div class="testi-name">Sameer Mehta</div><div class="testi-role">2 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="imf-testi-cta">
            <div>
                <h3>Join 10,000+ Satisfied Businesses</h3>
                <p>From SEBI RIAs to mutual fund distributors and corporate agents, businesses across India trust Patron for compliant IMF setup and IRDAI registration.</p>
            </div>
            <a href="tel:+919459456700">Talk to an Expert &rarr;</a>
        </div>
    </div>
</section>
<script>
function toggleTestiVideo(area){
    var v=area.querySelector('video'); if(!v) return;
    if(v.paused){ document.querySelectorAll('.testi-video-area video').forEach(function(x){ x.pause(); x.closest('.testi-video-area').classList.remove('playing'); }); v.play(); area.classList.add('playing'); }
    else { v.pause(); area.classList.remove('playing'); }
}
(function(){
    var track=document.getElementById('imfTestiTrack'); if(!track) return;
    var vp=track.parentElement, paused=false, animating=false;
    vp.addEventListener('mouseenter',function(){ paused=true; });
    vp.addEventListener('mouseleave',function(){ paused=false; });
    function step(){
        if(paused||animating||track.children.length<2) return;
        if(track.querySelector('.testi-video-area.playing')) return;
        var first=track.children[0];
        var w=first.getBoundingClientRect().width+20;
        animating=true;
        track.style.transition='transform .6s ease';
        track.style.transform='translateX(-'+w+'px)';
        window.setTimeout(function(){
            track.style.transition='none';
            track.appendChild(first);
            track.style.transform='translateX(0)';
            animating=false;
        },640);
    }
    window.setInterval(step,3000);
})();
</script>

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
            <a class="toc-btn" href="#overview-section">Overview</a>
            <a class="toc-btn" href="#what-section">What Is IMF</a>
            <a class="toc-btn" href="#who-section">Who Needs It</a>
            <a class="toc-btn" href="#services-section">Our Services</a>
            <a class="toc-btn" href="#procedure-section">8-Step Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#timeline-section">Timeline</a>
            <a class="toc-btn" href="#benefits-section">Benefits</a>
            <a class="toc-btn" href="#comparison-section">Compare</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>















<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IRDA-IMF Business Registration - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IRDA-IMF Registration Services at a Glance</strong></p>
                    <p>IRDA-IMF business registration is mandatory for entities seeking to market and distribute insurance products in India under the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015. Applicants must be a company, LLP, or cooperative society with a minimum net worth of Rs 5 lakh (single district) or Rs 10 lakh (multiple districts). The process involves obtaining an NOC from IRDAI, company incorporation with ROC, and submitting Form A with a non-refundable fee of Rs 5,000 on the <a href="https://imf.irda.gov.in/" target="_blank" rel="noopener">IRDAI IMF portal</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Regulation</td><td>IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015</td></tr>
                        <tr><td>Governing Act</td><td>Insurance Regulatory and Development Authority Act, 1999</td></tr>
                        <tr><td>Applicable To</td><td>Companies, LLPs, Cooperative Societies seeking to distribute insurance products</td></tr>
                        <tr><td>Net Worth Requirement</td><td>Rs 5 lakh (1 district) / Rs 10 lakh (multiple districts) - Regulation 6</td></tr>
                        <tr><td>Application Fee</td><td>Rs 5,000 (non-refundable) - paid from IMF bank account</td></tr>
                        <tr><td>Timeline</td><td>7-10 weeks from application submission to certificate issuance</td></tr>
                        <tr><td>Validity</td><td>3 years from date of issue; renewal required 30 days before expiry</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:0;</p>
                </div>
                <p>IRDA-IMF business registration is the gateway for entrepreneurs and financial service providers to enter India's growing insurance distribution market. Under the <a href="https://irdai.gov.in/requirements-for-license-as-a-imf" target="_blank" rel="noopener">IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015</a>, an Insurance Marketing Firm (IMF) is an entity registered with IRDAI to solicit insurance products, undertake insurance service activities, and distribute other financial products regulated by SEBI, RBI, PFRDA, and the Department of Posts. India's insurance penetration stood at approximately 4% of GDP in 2024, and the IRDAI's IMF model aims to bridge this gap by enabling professional entities to offer a one-stop-shop for financial protection.</p>
                <p>The IMF model follows the concept of open architecture, allowing registered firms to tie up with a maximum of two Life, two General, and two Health insurance companies under Regulation 3(a). Additionally, IMFs can distribute mutual funds, pension products, and banking products through licensed Financial Service Executives under Regulation 3(c). Patron Accounting's CA and CS team provides end-to-end support from IRDAI NOC procurement to post-registration compliance, ensuring a smooth and compliant registration process.</p>
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
                <h2 class="section-title">What is IRDA-IMF Business Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>IRDA-IMF business registration is the process of obtaining a license from the <a href="https://irdai.gov.in/requirements-for-license-as-a-imf" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India (IRDAI)</a> to operate as an Insurance Marketing Firm under the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015.</p>
                    <p>An Insurance Marketing Firm (IMF) is a distribution channel introduced by IRDAI in 2015, envisaged as a one-stop-shop offering financial products required at various stages of an individual's life. IMFs follow the concept of open architecture, allowing them to solicit and procure insurance products of a maximum of two Life, two General, and two Health insurance companies at any point of time under Regulation 3(a). In addition, IMFs may also collaborate with Agriculture Insurance Company of India Ltd. (AIC) and Export Credit Guarantee Corporation Ltd. (ECGC).</p>
                    <p>IMFs can also distribute other financial products as permitted by RBI, SEBI, PFRDA, and the Department of Posts, after obtaining due approvals from the respective authorities under Regulation 3(c). The registration is district-wise, and IMFs may opt for a maximum of three districts within a state under the current regulations.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IRDA-IMF Registration:</strong></p>
                    <p><strong>Insurance Marketing Firm (IMF)</strong> - An entity registered with IRDAI under the IMF Regulations, 2015 to solicit insurance products, provide insurance service activities, and distribute financial products through licensed personnel.</p>
                    <p><strong>Insurance Sales Person (ISP)</strong> - An individual employed by the IMF, certified by IRDAI-approved examination body, licensed to solicit and procure insurance products on behalf of the IMF.</p>
                    <p><strong>Principal Officer (PO)</strong> - The designated head of the IMF who must meet IRDAI's Fit and Proper criteria, hold prescribed qualifications, and pass the IMF examination conducted by the Insurance Institute of India.</p>
                    <p><strong>No Objection Certificate (NOC)</strong> - A certificate issued by IRDAI to an IMF applicant enabling them to incorporate the firm name with the Registrar of Companies. The NOC is valid for six months from the date of issue.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Insurance Shield -->
                            <path d="M100 15L45 42V95C45 135 100 165 100 165C100 165 155 135 155 95V42L100 15Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- IRDAI text -->
                            <text x="100" y="55" font-size="14" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">IRDAI</text>
                            <!-- Document icon -->
                            <rect x="78" y="65" width="44" height="55" rx="4" fill="#fff" stroke="#14365F" stroke-width="1.2"/>
                            <line x1="86" y1="78" x2="114" y2="78" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <line x1="86" y1="88" x2="110" y2="88" stroke="#14365F" stroke-width="1.2" opacity="0.3" stroke-linecap="round"/>
                            <line x1="86" y1="96" x2="106" y2="96" stroke="#14365F" stroke-width="1.2" opacity="0.3" stroke-linecap="round"/>
                            <line x1="86" y1="104" x2="108" y2="104" stroke="#14365F" stroke-width="1.2" opacity="0.3" stroke-linecap="round"/>
                            <!-- Green check badge -->
                            <circle cx="145" cy="35" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M138 35l4 4 9-9" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- IMF tag -->
                            <rect x="30" y="125" width="40" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="50" y="137.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IMF</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IRDA-IMF Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IRDAI Registered</span>
                        <strong>Insurance Marketing Firm</strong>
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
            <h2 class="section-title">Who Needs IRDA-IMF Registration?</h2>
            <div class="content-text">
                
                <p>Any entity seeking to solicit, procure, or distribute insurance products in India as an intermediary through the IMF channel must obtain IRDA-IMF registration. This includes:</p>
                <ul>
                    <li>Companies incorporated under the Companies Act, 2013 (Private Limited, One Person Company, or Public Limited) that intend to market insurance and financial products</li>
                    <li>Limited Liability Partnerships (LLPs) registered under the LLP Act, 2008 seeking to enter the insurance distribution space</li>
                    <li>Cooperative Societies registered under the Co-operative Societies Act, 1912</li>
                    <li>Any other entity as may be recognised by IRDAI from time to time under the regulations</li>
                </ul>
                <p><strong>Eligibility Thresholds under Regulation 6:</strong> The applicant's net worth must not be less than Rs 10 lakh. For IMFs applying to operate in a single district, the minimum net worth requirement is Rs 5 lakh. The name of the proposed entity must include the words 'Insurance Marketing' or 'IMF' as mandated by IRDAI. Promoters, directors, and key management personnel must satisfy the Fit and Proper criteria prescribed in the IMF Regulations.</p>
                <p><strong>Key Deadline:</strong> The applicant must submit the IMF registration application within one year of incorporation with ROC. Failure to apply within this window requires fresh NOC processing from IRDAI.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's IRDA-IMF Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>End-to-End Registration Management</td><td>From obtaining the IRDAI NOC to final certificate issuance, our CA and CS team handles the complete registration lifecycle including company incorporation, documentation, and portal submissions</td></tr>
                        <tr><td>NOC and Name Approval Assistance</td><td>We prepare and submit the NOC application to IRDAI, coordinate name reservation via SPICe+ Form Part A on the MCA portal, and ensure compliance with IRDAI naming requirements</td></tr>
                        <tr><td>Documentation and Compliance Package</td><td>Preparation of Form A, business plan, net worth certificate, Fit and Proper declarations, organisation chart, and all supporting documents per IRDAI checklist</td></tr>
                        <tr><td>PO and ISP Certification Support</td><td>Guidance on IMF examination requirements, qualification mapping, and training coordination with IRDAI-approved examination bodies</td></tr>
                        <tr><td>Post-Registration Compliance Advisory</td><td>Ongoing support for annual compliance, renewal applications (30 days before expiry per Chapter III), insurer tie-up management, and IRDAI reporting obligations</td></tr>
                        <tr><td>Company Incorporation Services</td><td>Complete incorporation of Private Limited Company, LLP, or OPC with DSC procurement, DIN application, SPICe+ filing, and PAN/TAN registration - all prerequisites for IMF registration</td></tr>

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
            <h2 class="section-title">8-Step IRDA-IMF Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting follows a structured 8-step process for IRDA-IMF registration - from IRDAI NOC procurement to certificate issuance, ensuring compliance with the IMF Regulations, 2015 at every stage.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Apply for NOC from IRDAI</h3>
        <p class="step-description">Submit a request to IRDAI via email at imf@irdai.gov.in for a No Objection Certificate. The proposed firm name must include the words 'Insurance Marketing' or 'IMF' per IRDAI naming requirements. The NOC remains valid for six months from the date of issue under Regulation 4.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IRDAI NOC obtained</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Name pre-screened</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><rect x="70" y="58" width="28" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="84" y="67" font-size="6" fill="#1B7A3A" font-weight="700" text-anchor="middle" font-family="Arial">NOC</text></svg>
            </div>
            <span class="illustration-label">NOC Received</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Incorporate the IMF Entity with ROC</h3>
        <p class="step-description">Reserve the company name by filing SPICe+ Part A on the MCA portal along with the IRDAI NOC. Obtain Digital Signature Certificates (DSC) for all proposed directors. Complete incorporation via SPICe+ Part B to receive the Certificate of Incorporation from the Registrar of Companies.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SPICe+ filing done</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> COI received from ROC</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="5" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="5" width="80" height="18" rx="6" fill="#14365F"/><text x="60" y="18" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ROC - MCA</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="47" x2="75" y2="47" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">Company Incorporated</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Open Bank Account with State Bank of India</h3>
        <p class="step-description">The applicant must open a bank account with State Bank of India as mandated by IRDAI. All fee payments and net worth verifications are processed through this SBI account. The account must be in the name of the incorporated entity.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SBI account opened</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fee payment ready</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="20" width="90" height="15" rx="6" fill="#14365F"/><text x="60" y="31" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">STATE BANK OF INDIA</text><line x1="25" y1="48" x2="95" y2="48" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="25" y1="58" x2="70" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">SBI Account Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Obtain PAN and Complete Tax Registrations</h3>
        <p class="step-description">Apply for PAN in the name of the incorporated entity. Complete GST registration if the projected turnover exceeds the threshold limit of Rs 20 lakh under Section 22 of the CGST Act, 2017. TAN registration may also be required for TDS compliance.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN obtained</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GST registration done</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="32" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text><text x="32" y="55" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">AAAAA0000A</text><rect x="65" y="15" width="45" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="87" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GST</text><text x="87" y="55" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">22AAAAA...</text></svg>
            </div>
            <span class="illustration-label">Tax IDs Registered</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Principal Officer and ISP Training</h3>
        <p class="step-description">The Principal Officer must complete 50 hours of mandatory IMF training and pass the IMF examination conducted by the Insurance Institute of India. Insurance Sales Persons (ISPs) must similarly complete prescribed training and certification. At least one ISP per office is mandatory.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 50-hour PO training</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ISP certification cleared</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L20 30V50C20 70 60 85 60 85C60 85 100 70 100 50V30L60 10Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M55 40l3 3 7-7" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><text x="60" y="70" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CERTIFIED</text></svg>
            </div>
            <span class="illustration-label">Exam Cleared</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Obtain Consent Letters from Insurance Companies</h3>
        <p class="step-description">Secure at least one consent letter from an insurance company the IMF proposes to work with. IMFs can tie up with a maximum of two Life, two General, and two Health insurance companies under Regulation 3(a) of the IMF Regulations, 2015.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Insurer consent secured</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tie-up documented</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="40" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="30" y="38" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">LIFE</text><text x="30" y="50" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">x2</text><rect x="65" y="15" width="40" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="85" y="38" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GENERAL</text><text x="85" y="50" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">x2</text><path d="M50 82 L60 77 L70 82" stroke="#25D366" stroke-width="2" fill="none" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">Consent Obtained</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Submit Form A on IRDAI IMF Portal</h3>
        <p class="step-description">Register on the IMF portal at imf.irda.gov.in. Complete Form A by filling all relevant fields and uploading documents. Remit the non-refundable application fee of Rs 5,000 from the IMF's SBI bank account. Submit all supporting documents including net worth certificate and business plan.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form A submitted</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 5,000 fee paid</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><rect x="60" y="55" width="35" height="14" rx="4" fill="#14365F"/><text x="77" y="65" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">SUBMIT</text></svg>
            </div>
            <span class="illustration-label">Application Filed</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">IRDAI Verification and Certificate Issuance</h3>
        <p class="step-description">IRDAI reviews the application, verifies submitted documents, conducts background checks, and may schedule an interview with the Principal Officer. Upon successful verification, IRDAI issues the Certificate of Registration valid for 3 years, allowing the IMF to commence operations.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued for 3 years</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Operations can begin</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 35l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="65" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IRDAI REGISTERED</text><circle cx="85" cy="10" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="85" y="13" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">3Y</text></svg>
            </div>
            <span class="illustration-label">IMF Registered</span>
            <span class="step-number-large">08</span>
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
            <h2 class="section-title">Documents Required for IRDA-IMF Registration</h2>
            <div class="content-text">
                
                <p>The following documents must be arranged and submitted for a complete IRDA-IMF registration application:</p>
                <ul>
                    <li>Duly completed Form A with all fields filled on the IRDAI IMF portal</li>
                    <li>No Objection Certificate (NOC) from IRDAI for company name</li>
                    <li>Certificate of Incorporation from ROC (must include 'Insurance Marketing' or 'IMF' in name)</li>
                    <li>Memorandum of Association (MoA) and Articles of Association (AoA), or LLP Agreement for LLPs</li>
                    <li>PAN card of the IMF entity</li>
                    <li>Bank account statement from State Bank of India</li>
                    <li>Net Worth Certificate from a Chartered Accountant (minimum Rs 5 lakh / Rs 10 lakh per Regulation 6)</li>
                    <li>IMF Examination Pass Certificate of the Principal Officer</li>
                    <li>Qualification and experience certificates of the Principal Officer</li>
                    <li>Qualification certificates and address proof of proposed ISPs (within the state of registration)</li>
                    <li>Fit and Proper declaration from Principal Officer, Directors, and Managing Partners</li>
                    <li>Three-year business plan with projected volume of activities and income</li>
                    <li>Organisation chart showing functional responsibilities</li>
                    <li>Infrastructure details: office space (rent agreement or sale deed), equipment, and manpower photographs</li>
                    <li>Consent letter from at least one insurance company</li>
                    <li>Board Resolution authorising the IMF registration application</li>
                    <li>Undertaking by the Principal Officer in IRDAI-prescribed format</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IRDA-IMF Registration Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>NOC Delays from IRDAI</td><td>Incomplete submissions or name conflicts cause processing delays, potentially exceeding the 6-month NOC validity window</td><td>We pre-screen the proposed name against IRDAI and MCA databases, ensure all documents are error-free, and follow up with the IRDAI IMF department to expedite processing</td></tr>
                        <tr><td>Complex Documentation</td><td>IRDAI requires over 15 different documents including a 3-year business plan, infrastructure proof, and CA-certified net worth certificates - missing any single document triggers rejection</td><td>Our team prepares every document to IRDAI specifications using our proven checklist, reducing rejection risk to near zero</td></tr>
                        <tr><td>PO Qualification and Examination</td><td>Applicants struggle with mapping the Principal Officer's qualifications to IRDAI eligibility criteria and navigating the 50-hour training requirement</td><td>We provide a clear roadmap for examination preparation, coordinate with IRDAI-approved training institutions, and verify all certifications before submission</td></tr>
                        <tr><td>Post-Registration Compliance Gaps</td><td>After obtaining the certificate, IMFs must maintain net worth, file annual returns, renew every 3 years, and comply with IRDAI's code of conduct - non-compliance risks licence cancellation</td><td>Patron Accounting provides a dedicated compliance calendar and ongoing advisory to ensure uninterrupted operations and timely renewal under Chapter III</td></tr>

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
            <h2 class="section-title">IRDA-IMF Registration Fees and Costs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>IRDAI Application Fee (Form A)</td><td>Rs 5,000 (non-refundable, paid from IMF's SBI account)</td></tr>
                        <tr><td>Company/LLP Incorporation</td><td>Varies based on authorised capital - typically Rs 5,000 to Rs 15,000 in government fees</td></tr>
                        <tr><td>DSC for Directors</td><td>Rs 500 to Rs 2,000 per director</td></tr>
                        <tr><td>IMF Examination Fee</td><td>As prescribed by the Insurance Institute of India</td></tr>
                        <tr><td>Minimum Net Worth Required</td><td>Rs 5 lakh (single district) / Rs 10 lakh (multiple districts) per Regulation 6</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 24,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IRDA-IMF Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20IRDA-IMF%20Registration.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IRDA-IMF Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>NOC Application to IRDAI</td><td>2-3 weeks</td></tr>
                        <tr><td>Company/LLP Incorporation with ROC</td><td>7-15 days (via SPICe+ process)</td></tr>
                        <tr><td>PAN, Bank Account, Tax Registrations</td><td>1-2 weeks</td></tr>
                        <tr><td>PO/ISP Training and Examination</td><td>2-4 weeks (includes 50 hours training)</td></tr>
                        <tr><td>Form A Submission and Document Upload</td><td>1-2 weeks</td></tr>
                        <tr><td>IRDAI Verification and Certificate Issuance</td><td>2-4 weeks</td></tr>
                        <tr><td>Total Estimated Timeline</td><td>7-10 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> The IRDAI NOC is valid for 6 months. The IMF registration application must be submitted within 1 year of company incorporation with ROC. Delayed submissions require a fresh NOC application. Starting early and preparing documents in parallel significantly reduces the overall timeline.</p>

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
            <h2 class="section-title">Why Choose Professional IRDA-IMF Registration Support</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Error-Free Documentation</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Our CA and CS team has deep expertise in IRDAI regulatory filings, ensuring zero rejections due to documentation errors or missing attachments</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Faster Processing</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">With pre-screened applications, structured business plans, and proactive follow-ups, we reduce the average registration timeline by 2-3 weeks compared to self-filing</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">End-to-End Incorporation</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">We handle everything from IRDAI NOC to ROC incorporation to IMF portal submission - a single point of contact eliminates coordination delays</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Regulatory Expertise</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Navigating the intersection of the Companies Act 2013, LLP Act 2008, IRDA Act 1999, and the IMF Regulations 2015 requires specialised knowledge from 15+ years of practice</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Post-Registration Compliance</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Unlike most providers, we offer ongoing compliance support including annual net worth certification, renewal management, and IRDAI reporting</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Risk Mitigation</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Operating without IRDAI registration is punishable with fine under Section 42D(8) read with Section 102 of the Insurance Act, 1938. We ensure you are fully compliant from day one</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> across India trust Patron Accounting for registration and compliance services. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong> from 500+ verified reviews, and <strong>50,000+ documents filed</strong>, our CA and CS team delivers a <strong>98% first-attempt approval rate</strong> for IRDAI registration applications.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely. Our expert team handles the entire registration process so you can focus on building your insurance distribution business.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional IRDA-IMF Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Registration</th><th>With Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Average Timeline</td><td>12-16 weeks</td><td>7-10 weeks</td></tr>
                        <tr><td>Documentation Errors</td><td>High - common cause of IRDAI rejection</td><td>Near zero - pre-verified by CA and CS team</td></tr>
                        <tr><td>NOC Name Screening</td><td>Self-research; risk of conflicts</td><td>Pre-screened against IRDAI and MCA databases</td></tr>
                        <tr><td>Business Plan Quality</td><td>Generic template</td><td>Customised 3-year plan aligned to IRDAI expectations</td></tr>
                        <tr><td>Post-Registration Support</td><td>None</td><td>Ongoing compliance calendar and renewal management</td></tr>
                        <tr><td>Cost of Errors/Resubmission</td><td>Significant (time + opportunity cost)</td><td>Included in service - no extra charges for revisions</td></tr>
                        <tr><td>Company Incorporation</td><td>Separate engagement needed</td><td>Bundled - single point of contact</td></tr>

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
            <h2 class="section-title">Related Registration Services</h2>
            <div class="content-text">
                
                <p>If you are exploring IRDA-IMF business registration, you may also need the following services from Patron Accounting:</p>
                <ul>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Incorporate your entity under the Companies Act, 2013 with end-to-end support</li>
                    <li><a href="/llp-incorporation">LLP Registration</a> - Register your Limited Liability Partnership under the LLP Act, 2008</li>
                    <li><a href="/gst-registration">GST Registration</a> - Mandatory if your IMF's turnover exceeds the threshold limit under Section 22 of the CGST Act</li>
                    <li><a href="/dsc-registration">DSC Registration</a> - Digital Signature Certificates required for all directors and MCA filings</li>
                    <li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition for insurance-tech startups</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Framework for IRDA-IMF Registration</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Regulation / Act</th><th>Relevance</th></tr></thead>
                    <tbody>
                        <tr><td><a href="https://irdai.gov.in/requirements-for-license-as-a-imf" target="_blank" rel="noopener">IRDAI (Registration of IMF) Regulations, 2015</a></td><td>Primary regulation governing IMF registration, eligibility, operations, and compliance</td></tr>
                        <tr><td>IRDAI (Registration of IMF) (Amendment) Regulations, 2019</td><td>Key amendments expanding operational scope and commission structures</td></tr>
                        <tr><td><a href="https://www.indiacode.nic.in/bitstream/123456789/1893/1/A1999_41.pdf" target="_blank" rel="noopener">IRDA Act, 1999</a></td><td>Parent Act establishing IRDAI's authority to regulate insurance intermediaries</td></tr>
                        <tr><td>Insurance Act, 1938 (as amended)</td><td>Section 42D - licensing of intermediaries; Section 102 - penalties up to Rs 1 crore for non-compliance</td></tr>
                        <tr><td>Companies Act, 2013</td><td>Governs incorporation of IMF entity as Private Limited Company or OPC</td></tr>
                        <tr><td>LLP Act, 2008</td><td>Governs registration of IMF entity as Limited Liability Partnership</td></tr>
                        <tr><td>Co-operative Societies Act, 1912</td><td>Governs registration of IMF entity as Cooperative Society</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Penalty Provisions:</strong> Operating as an insurance intermediary without IRDAI registration is punishable with fine under Section 42D(8) of the Insurance Act, 1938. Contravention of IRDAI regulations may attract penalties up to Rs 1 crore under Section 102 of the Insurance Act. IRDAI may also suspend or cancel the registration for non-compliance with the IMF Regulations.</p>
                <p><strong>Renewal Requirement:</strong> The IMF registration certificate is valid for 3 years under Section 42D(3). The renewal application must be filed at least 30 days before expiry per Chapter III of the IMF Regulations, 2015.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - IRDA-IMF Registration</h2>
                    <p class="faq-expanded__lead">Expert answers to the most common questions about registering an Insurance Marketing Firm with IRDAI in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IRDA-IMF Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is IRDA-IMF business registration and why is it mandatory?</h3>
                        <div class="faq-expanded__a"><p>IRDA-IMF business registration is the process of obtaining a license from IRDAI to operate as an Insurance Marketing Firm in India under the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015. It is mandatory because Section 42D of the Insurance Act, 1938 prohibits any entity from acting as an insurance intermediary without a valid license issued by IRDAI. Without registration, the entity cannot legally solicit, procure, or distribute insurance products.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the minimum net worth required for IMF registration?</h3>
                        <div class="faq-expanded__a"><p>The minimum net worth requirement under Regulation 6 of the IRDAI IMF Regulations, 2015 is Rs 5 lakh for an IMF operating in a single district and Rs 10 lakh for IMFs operating in multiple districts (maximum three districts within a state). This net worth must be maintained throughout the operational life of the IMF and certified annually by a Chartered Accountant within three months from the close of the financial year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How many insurance companies can an IMF tie up with?</h3>
                        <div class="faq-expanded__a"><p>Under Regulation 3(a) of the IRDAI IMF Regulations, 2015 (as amended in 2019), an IMF can solicit and procure insurance products of a maximum of two Life insurance companies, two General insurance companies, and two Health insurance companies at any point of time. In addition, IMFs can tie up with Agriculture Insurance Company of India Ltd. (AIC) and Export Credit Guarantee Corporation Ltd. (ECGC).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does the IRDA-IMF registration process take?</h3>
                        <div class="faq-expanded__a"><p>The entire IRDA-IMF registration process typically takes 7 to 10 weeks from the initial NOC application to the issuance of the registration certificate by IRDAI. Document preparation takes 2-4 weeks, the IRDAI application review takes 1-2 weeks, and final verification and approval takes another 2-4 weeks. Delays commonly occur due to incomplete documentation or pending PO examination clearance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the validity period of an IMF registration?</h3>
                        <div class="faq-expanded__a"><p>The IMF registration certificate issued by IRDAI is valid for 3 years from the date of issue under Section 42D(3) of the Insurance Act, 1938. The renewal application must be submitted to IRDAI at least 30 days before the expiry date per Chapter III of the IMF Regulations, 2015. An IMF cannot conduct business during the interim period between expiry and renewal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can an LLP register as an Insurance Marketing Firm?</h3>
                        <div class="faq-expanded__a"><p>Yes, a Limited Liability Partnership registered under the LLP Act, 2008 is eligible for IMF registration with IRDAI. The LLP Agreement, partner details, and Fit and Proper declarations of all designated partners must be submitted along with the application. The LLP must meet the same net worth and compliance requirements as a company under Regulation 6 of the IMF Regulations, 2015.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if you operate an IMF without IRDAI registration?</h3>
                        <div class="faq-expanded__a"><p>Operating as an insurance intermediary without a valid license from IRDAI is punishable with fine under Section 42D(8) of the Insurance Act, 1938. Additionally, contravention of IRDAI regulations may attract penalties up to Rs 1 crore under Section 102 of the Insurance Act, 1938 (as substituted by the IRDA Act, 1999). IRDAI may also initiate action against the entity and its promoters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can IMFs distribute mutual funds and other financial products?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Regulation 3(c) of the IRDAI IMF Regulations, 2015, IMFs can distribute other financial products as permitted by RBI (banking products), SEBI (mutual funds), PFRDA (pension products), and the Department of Posts, after obtaining due approvals from the respective authorities through licensed Financial Service Executives (FSEs).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is IMF full form in insurance?</strong> IMF stands for Insurance Marketing Firm, an entity registered with IRDAI under the IMF Regulations, 2015 to distribute insurance and financial products.</p>
                <p><strong>What is the application fee for IMF registration?</strong> Rs 5,000 (non-refundable), paid from the IMF's State Bank of India account as mandated by IRDAI.</p>
                <p><strong>Can IMFs distribute mutual funds?</strong> Yes, IMFs can distribute SEBI-regulated mutual funds through licensed Financial Service Executives under Regulation 3(c).</p>
                <p><strong>What is the IRDAI IMF portal URL?</strong> The official IMF registration portal is <a href="https://imf.irda.gov.in/" target="_blank" rel="noopener">imf.irda.gov.in</a></p>
                <p><strong>How many districts can an IMF operate in?</strong> A maximum of three districts within a state, with at least one being an aspirational district if opting for multiple districts.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Act Now - Secure Your IMF Registration</h2>
            <div class="content-text">
                
                <p>India's insurance market is projected to grow significantly, with IRDAI actively promoting financial inclusion through intermediary channels like IMFs. The number of registered IMFs has been growing steadily since 2015, with increasing competition for district-level registrations. Early registration secures your preferred operating districts, establishes insurer tie-ups, and positions your firm ahead of new entrants.</p>
                <p><strong>Remember:</strong> The NOC validity is only 6 months and company incorporation must precede the IMF application - delays in any step can reset the entire timeline. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20IRDA-IMF%20Registration.%20Please%20call%20me." target="_blank">WhatsApp us</a> to start today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your IRDA-IMF Business Registration Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">IRDA-IMF business registration is a strategic entry point for entrepreneurs and financial service providers seeking to participate in India's expanding insurance distribution ecosystem. Governed by the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015 and the IRDA Act, 1999, the registration process requires careful navigation of regulatory requirements including NOC procurement, entity incorporation, Principal Officer certification, and comprehensive documentation.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting's CA and CS team brings 15+ years of regulatory expertise, a 98% first-attempt approval rate, and end-to-end support from incorporation to post-registration compliance. With offices in Pune, Mumbai, Delhi, and Gurugram, we serve clients across India with both in-person and remote engagement.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20IRDA-IMF%20Registration.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IRDA-IMF%20Registration%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20IRDA-IMF%20Registration%20services.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IRDA-IMF Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides IRDA-IMF business registration support in major cities across India with expert CA and CS team guidance.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;">
                <p class="pa-block-title">IRDA-IMF Registration by City</p>
                <p class="pa-block-sub">Expert CA and CS team support for Insurance Marketing Firm registration</p>
                <div class="pa-city-grid">
                    <a href="/irda-imf-business-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/irda-imf-business-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/irda-imf-business-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/irda-imf-business-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <p class="pa-block-title">Related Registration Services Across India</p>
                <p class="pa-block-sub">Comprehensive business registration and compliance services</p>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/dsc-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">DSC Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/one-person-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">OPC Registration</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months - aligned to IRDAI regulation amendments, new IMF circulars, changes in net worth requirements, and portal updates. Next review: September 2026.</p>
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








<!-- Google Maps Places Library (for GMB reviews) -->




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
