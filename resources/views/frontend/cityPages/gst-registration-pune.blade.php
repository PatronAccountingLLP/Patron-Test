
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>GST Registration in Pune - Online Process, Fees & GSTIN</title>
    <meta name="description" content="CA-assisted GST registration in Pune. GSTIN in 3-7 days. PTRC/PTEC, Shop Act, accounting included. Serving Hinjewadi, Kharadi, MIDC businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Registration in Pune - Online Process, Fees & GSTIN">
    <meta property="og:description" content="CA-assisted GST registration in Pune. GSTIN in 3-7 days. PTRC/PTEC, Shop Act, accounting included. Serving Hinjewadi, Kharadi, MIDC businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Registration in Pune - Online Process, Fees & GSTIN">
    <meta name="twitter:description" content="CA-assisted GST registration in Pune. GSTIN in 3-7 days. PTRC/PTEC, Shop Act, accounting included. Serving Hinjewadi, Kharadi, MIDC businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Registration in Pune",
      "description": "CA-assisted GST registration in Pune. GSTIN in 3-7 days. PTRC/PTEC, Shop Act, accounting included. Serving Hinjewadi, Kharadi, MIDC businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-registration/pune",
      "serviceType": "GST Registration in Pune",
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
        "url": "https://www.patronaccounting.com/gst-registration/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "20",
          "maxPrice": "1999",
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
          "name": "GST Registration in India: Online Process, Fees and Limits",
          "item": "https://www.patronaccounting.com/gst-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Registration in Pune",
          "item": "https://www.patronaccounting.com/gst-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does GST registration cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No government fee on services.gst.gov.in. Patron's all-inclusive registration starts from Rs 1,999 covering application filing, Aadhaar authentication coordination, and document preparation. The GST + PTRC/PTEC bundle costs Rs 3,999. The complete business launch package (GST + PTRC/PTEC + Shop Act + Tally/Zoho setup) costs Rs 7,999."
          }
        },
        {
          "@type": "Question",
          "name": "How long does GST registration take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For non-risky applications with successful Aadhaar authentication, 3-7 working days. The GST Council has approved 3-day processing for straightforward applications. Physical verification of Pune premises may extend to 21 days. Common delays from incomplete biometric authentication or co-working address proof issues."
          }
        },
        {
          "@type": "Question",
          "name": "What is the GST registration threshold for Maharashtra?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 40 lakh annual turnover for goods and Rs 20 lakh for services. Certain categories register regardless: inter-state suppliers, e-commerce sellers (including Amazon/Flipkart), casual taxable persons, reverse charge liable persons, and importers. Turnover calculated on aggregate PAN basis across all branches."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST registration mandatory for e-commerce sellers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Section 24 of the CGST Act, persons supplying through e-commerce platforms like Amazon, Flipkart, Meesho must register regardless of turnover. The operator collects TCS at 1% under Section 52. Even a Pune home seller with Rs 5,000 monthly sales needs GST registration for platform onboarding."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for not registering under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 122(1), penalty of 10% of tax due, minimum Rs 10,000. Intentional evasion: 100% of tax due. Tax authorities in Pune are leveraging UPI transaction data to detect unregistered traders crossing thresholds. Operating without registration can result in goods seizure and prosecution."
          }
        },
        {
          "@type": "Question",
          "name": "What is the composition scheme under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 10 allows small businesses to pay at reduced rates: 1% (manufacturers), 5% (restaurants not serving alcohol), 6% (services). Turnover ceiling Rs 1.5 crore (goods/restaurants) and Rs 50 lakh (services). Cannot claim ITC, cannot make inter-state supplies, cannot sell on e-commerce platforms."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get GST registration without a physical office in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, with conditions. Virtual office addresses are accepted but may trigger physical verification. Co-working spaces in Hinjewadi, Magarpatta, Kharadi are accepted with valid agreement and NOC from provider. Home-based businesses: electricity bill + property owner NOC is sufficient."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need PTRC/PTEC along with GST in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Maharashtra requires PTRC for employers deducting professional tax from salaries and PTEC for all professionals and business owners. These are separate from GST and filed on mahagst.gov.in. Non-registration attracts penalties under the Maharashtra PT Act 1975. Patron bundles PTRC/PTEC with every GST registration. Quick Answers GST registration mein government fee kitni hai? Zero. GST portal pe koi fee nahi lagti. Sirf CA professional fees for application preparation. E-commerce seller ko GST zaroori hai kya? Haan. Amazon, Flipkart, Meesho pe bechne ke liye turnover chahe kitna bhi ho, GST registration mandatory hai Section 24 ke under. Composition Scheme mein ITC milti hai kya? Nahi. ITC nahi milti. Inter-state supply aur e-commerce supply bhi nahi kar sakte. Sirf local retail aur small manufacturing ke liye."
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
                        GST Registration in Pune: GSTIN for Startups, Manufacturers, E-Commerce, and Service Providers
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business address proof, bank statement, entity registration certificate, photograph</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Government fee NIL | Patron all-inclusive from Rs 1,999 (with PTRC/PTEC + Shop Act + accounting)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Goods turnover > Rs 40 lakh | Services > Rs 20 lakh | Mandatory for inter-state, e-commerce, casual taxable</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3-7 working days for non-risky applications | Up to 21 days with physical verification</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Registration in Pune',
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
    'ctaText'    => 'Patron has helped 10,000+ businesses with GST registration, return filing, and ITC reconciliation. Pune businesses trust us for the complete tax-compliant launch.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Regular vs Composition</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Registration in Pune Services at a Glance</strong></p>
                    <p>GST registration is the process of obtaining a 15-digit GSTIN on the GST portal (services.gst.gov.in) that legally authorises a business to collect GST, claim Input Tax Credit (ITC), and make inter-state supplies. In Pune, Maharashtra, businesses supplying goods with turnover above Rs 40 lakh or services above Rs 20 lakh must register. E-commerce sellers, inter-state suppliers, and casual taxable persons register regardless of turnover. Government fee is NIL. Aadhaar/biometric authentication is now required per the GSTN advisory of February 2025.</p>
                </div>
                <p>Pune is Maharashtra's second-largest commercial centre. Over 50,000 IT companies operate from Hinjewadi IT Park, Kharadi IT Park, and Magarpatta Cybercity. Thousands of manufacturers produce from MIDC Bhosari, Chakan, and Pimpri-Chinchwad. For all these businesses, GST registration is either mandatory or strategically essential. Learn more about <a href="/gst-registration">GST Registration across India</a>.</p>
                <p>Maharashtra businesses also need PTRC (Professional Tax Registration Certificate) for employers and PTEC for professionals. Patron Accounting bundles GST with PTRC/PTEC, <a href="/shop-act-registration">Maharashtra Shop Act</a>, and <a href="/zoho-books-accounting">Zoho Books Accounting</a> from our Pune office at RTC Silver, Wagholi - tax-compliant from day one with ongoing GSTR-1/3B/9 return filing.</p>
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
                <h2 class="section-title">What Is GST Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST registration is the process of obtaining a unique 15-digit GSTIN from the <a href="https://services.gst.gov.in/" target="_blank" rel="noopener">Goods and Services Tax portal</a> that identifies a business as a registered supplier authorised to collect GST, claim Input Tax Credit, and issue tax invoices under the CGST Act, 2017.</p>
                    <p>GST replaced multiple indirect taxes (VAT, Service Tax, Excise, Entry Tax, Octroi) with a single destination-based framework. For Pune businesses, one registration replaces old VAT and Service Tax. The GSTIN is PAN-based (first 2 digits '27' for Maharashtra). The GST Council set thresholds at Rs 40 lakh (goods) and Rs 20 lakh (services) in Maharashtra, with compulsory registration for inter-state suppliers, e-commerce operators, and importers.</p>
                    <p>The GST 2.0 reform launched on 22 September 2025 simplified the tax structure, and the GST Council approved 3-day processing for non-risky applications. Aadhaar/biometric authentication is now mandatory per the GSTN advisory of February 2025. Bank account must be furnished within 30 days per November 2025 advisory.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Registration in Pune:</strong></p>
                    <p><strong>GSTIN:</strong> 15-digit identification number starting with '27' for Maharashtra - unique identifier for every registered business.</p>
                    <p><strong>CGST Act, 2017:</strong> Central legislation governing GST registration, levy, collection, and compliance.</p>
                    <p><strong>Composition Scheme:</strong> Section 10 - reduced fixed rates: 1% (manufacturers), 5% (restaurants), 6% (services). No ITC, no inter-state supply.</p>
                    <p><strong>Input Tax Credit (ITC):</strong> Credit for GST paid on purchases, set off against GST liability on sales. Regular registration only.</p>
                    <p><strong>PTRC:</strong> Professional Tax Registration Certificate - mandatory in Maharashtra for employers under PT Act 1975.</p>
                    <p><strong>GST 2.0:</strong> Reform launched 22 September 2025 simplifying structure with 3-day processing for non-risky applications.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Pune GST Compliant</span>
                        <strong>GSTIN Active</strong>
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
            <h2 class="section-title">Who Needs GST Registration in Pune?</h2>
            <div class="content-text">
                
                <p><strong>IT and Software Companies (Hinjewadi, Kharadi, Magarpatta):</strong> Services turnover above Rs 20 lakh. Inter-state suppliers must register regardless of turnover. SAC code registration. Bundle with <a href="/accounting-services/pune">Accounting Services in Pune</a>.</p>
                <p><strong>Manufacturers (MIDC Bhosari, Chakan, Pimpri-Chinchwad):</strong> Goods turnover above Rs 40 lakh. HSN code registration. ISD registration from April 2025 for multiple GSTINs under same PAN.</p>
                <p><strong>E-Commerce Sellers:</strong> Mandatory under Section 24 regardless of turnover - Amazon, Flipkart, Meesho platforms. TCS at 1% collected by operator. Even home sellers need GSTIN for platform onboarding.</p>
                <p><strong>Restaurants and Hospitality (FC Road, Koregaon Park, Baner):</strong> Composition Scheme at 5% available if turnover below Rs 1.5 crore. Regular registration if above Rs 40 lakh.</p>
                <p><strong>Freelancers and Consultants:</strong> Service income above Rs 20 lakh. CAs, lawyers, architects, designers, content writers - even home-based in Kothrud, Hadapsar, or Baner.</p>
                <p><strong>Importers and Exporters:</strong> Compulsory registration regardless of turnover. Exporters claim IGST refund on inputs (zero-rated supply under Section 16 IGST Act). Start with <a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> if needed.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration Services Included by Patron in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GST Registration (Regular)</td><td>Complete filing on <a href="https://services.gst.gov.in/" target="_blank" rel="noopener">services.gst.gov.in</a>. PAN verification, Aadhaar/biometric auth, HSN/SAC mapping, bank linking, DSC. Govt fee NIL</td></tr>
                        <tr><td>GST Registration (Composition)</td><td>Section 10 for turnover below Rs 1.5 crore (goods) or Rs 50 lakh (services). Fixed rates: 1%/5%/6%. Quarterly payment, annual return</td></tr>
                        <tr><td>Maharashtra PTRC</td><td>Employer PT registration on <a href="https://mahagst.gov.in/" target="_blank" rel="noopener">mahagst.gov.in</a>. Male threshold Rs 7,500/month; female Rs 25,000/month. Max Rs 2,500/year</td></tr>
                        <tr><td>Maharashtra PTEC</td><td>Professional/business owner PT enrolment. Annual payment of Rs 2,500</td></tr>
                        <tr><td>Entity Registration (if needed)</td><td>Proprietorship/Partnership/LLP (<a href="/llp-incorporation/pune">LLP in Pune</a>)/Pvt Ltd (SPICe+ includes GST)</td></tr>
                        <tr><td>Tally/Zoho Books Setup</td><td>Chart of accounts with GST tax codes, HSN/SAC mapping, GSTR-1/3B auto-preparation, ITC reconciliation</td></tr>
                        <tr><td>Ongoing GSTR Filing</td><td>GSTR-1 (11th/13th), GSTR-3B (20th), GSTR-9/9C (31 Dec). Monthly ITC reconciliation with GSTR-2B</td></tr>
                        <tr><td>ITC Reconciliation</td><td>Monthly matching of purchase invoices with GSTR-2B auto-populated data. Maximise credit, identify mismatches</td></tr>

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
            <h2 class="section-title">GST Registration Process in Pune - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete GST registration and ongoing compliance from threshold assessment to annual return filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Registration Requirement and Scheme</h3><p class="step-description">Patron assesses business type, turnover, supply chain (intra vs inter-state), and client profile. For Hinjewadi IT companies serving clients outside Maharashtra: mandatory (inter-state). For new FC Road restaurant under Rs 1.5 crore: Composition Scheme at 5% may be optimal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Threshold Checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scheme Selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="82" y1="67" x2="100" y2="85" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><path d="M50 45L55 50L70 35" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Register the Business Entity</h3><p class="step-description">Business must be legally constituted before GST. Patron registers proprietorships (PAN-based), partnerships (deed + RoF Pune), LLPs (MCA), or Pvt Ltd (SPICe+ with RoC Pune - includes GST in single-window). For existing entities, verify PAN status and documentation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Entity Ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="8" rx="4" fill="#E8EDF4"/><rect x="25" y="38" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="60" y="38" width="30" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/></svg></div><span class="illustration-label">Entity Set</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare Documents and Complete Aadhaar Authentication</h3><p class="step-description">Compile PAN, Aadhaar, address proof (rental agreement + electricity bill for Pune premises), bank details, photograph, entity certificate, board resolution. Aadhaar/biometric verification at designated GST Suvidha Kendra in Pune per GSTN advisory Feb 2025.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs Compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Biometric Done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="90" cy="68" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M84 68L88 72L96 64" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Auth Complete</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Application on GST Portal</h3><p class="step-description">File GST REG-01 on services.gst.gov.in. Part A: TRN via PAN/email/mobile OTP. Part B: business info, HSN/SAC codes, principal place of business in Pune, bank details, document uploads. Verified via DSC (companies/LLPs) or EVC. ARN generated for tracking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> REG-01 Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ARN Generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">GST Officer Processes Application</h3><p class="step-description">GST Commissionerate Pune (CGST) or Joint Commissioner State Tax Pune (SGST) processes. 3-day processing for non-risky with Aadhaar auth. Physical verification of Pune premises may occur. If query (REG-03), Patron responds within 7 days via REG-04. Bank account within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Processing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Queries Answered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="39" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GST</text><path d="M40 72L60 62L80 72" stroke="#10B981" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div><span class="illustration-label">Under Review</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive GSTIN and Configure Compliance</h3><p class="step-description">GST REG-06 certificate with 15-digit GSTIN ('27' for Maharashtra). Patron sets up: Tally/Zoho with GST codes and HSN/SAC, GSTR-1 calendar (11th/13th), GSTR-3B (20th), ITC reconciliation with GSTR-2B, GSTR-9 tracker, PTRC/PTEC on mahagst.gov.in, and Shop Act filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTIN Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance Active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="22" y="47" width="31" height="6" rx="2" fill="#14365F" opacity="0.2"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">GST Live</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li>PAN Card of the business (company/LLP/firm) or proprietor</li><li>Aadhaar Card of authorised signatory (mandatory for biometric authentication)</li><li>Passport-size photograph of proprietor/partners/directors</li><li>Business address proof - rental agreement + electricity bill (rented) OR property tax receipt + ownership docs (owned)</li><li>NOC from property owner (if rented)</li><li>Bank account proof - cancelled cheque or bank statement (first page with details)</li><li>Certificate of Incorporation / Partnership Deed / LLP Agreement</li><li>Board Resolution or Authorisation Letter (companies/LLPs)</li><li>Digital Signature Certificate (DSC) for companies/LLPs</li><li>HSN codes for goods / SAC codes for services (Patron maps these based on catalogue)</li><li>Details of additional place of business (warehouse in MIDC Bhosari, branch in Hinjewadi)</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> Co-working space agreements from Hinjewadi, Magarpatta, or Kharadi are accepted with NOC from provider and utility bill in provider's name. Home-based businesses in Baner, Kothrud, Wakad: electricity bill + property owner NOC sufficient. Virtual office addresses accepted but may trigger physical verification by GST officer.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar/Biometric Authentication Delays</td><td>Must visit GST Suvidha Kendra for biometric capture. Pune appointment availability causes 3-7 day delays</td><td>Patron schedules biometric appointments proactively and coordinates verification</td></tr>
                        <tr><td>Address Proof Rejection for Co-Working</td><td>GST officers occasionally reject co-working addresses when NOC/agreement unclear on desk allocation</td><td>Co-working agreement and NOC drafted per GST officer expectations before filing</td></tr>
                        <tr><td>Bank Account Linking (30 Days)</td><td>Must furnish bank details within 30 days or before first GSTR-1. Failure = GSTIN suspension</td><td>Bank account opening coordinated simultaneously with GST application</td></tr>
                        <tr><td>Incorrect HSN/SAC Code Selection</td><td>Wrong codes create downstream issues: incorrect tax rates, ITC mismatches, GSTR-9 failures</td><td>CA team maps HSN/SAC codes based on actual product/service catalogue</td></tr>
                        <tr><td>Missing PTRC/PTEC Registration</td><td>Many Pune businesses register GST but miss mandatory Maharashtra Professional Tax</td><td>PTRC/PTEC bundled with every GST registration. Non-registration = PT Act penalties</td></tr>

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
            <h2 class="section-title">GST Registration Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GST Registration (Government Fee)</td><td>NIL - no charge on services.gst.gov.in</td></tr>
                        <tr><td>Patron GST Registration</td><td>Starting from INR 999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>GST + PTRC/PTEC Bundle</td><td>Rs 3,999 (GST + Maharashtra Professional Tax)</td></tr>
                        <tr><td>Complete Business Launch</td><td>Rs 7,999 (GST + PTRC/PTEC + Shop Act + Tally/Zoho setup)</td></tr>
                        <tr><td>GSTR-1 + GSTR-3B Monthly Filing</td><td>Rs 1,999/month (ongoing returns by CA team)</td></tr>
                        <tr><td>GSTR-9/9C Annual Return</td><td>Rs 4,999/year</td></tr>
                        <tr><td>ITC Reconciliation (Monthly)</td><td>Rs 999/month (GSTR-2B matching + mismatch resolution)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Preparation</td><td>1-2 days</td></tr><tr><td>Aadhaar/Biometric Authentication</td><td>1-3 days</td></tr><tr><td>Application Filing (REG-01)</td><td>1 day</td></tr><tr><td>GST Officer Processing</td><td>3-7 days</td></tr><tr><td>Bank Account Linking</td><td>Within 30 days</td></tr><tr><td>PTRC/PTEC Registration</td><td>1-3 days (simultaneous)</td></tr><tr><td><strong>Total End-to-End</strong></td><td><strong>3-7 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Not registering when liable: minimum Rs 10,000 penalty (Section 122). Intentional evasion: 100% of tax due. Tax authorities leveraging UPI data to detect unregistered Pune traders. Bank account must be linked within 30 days or GSTIN suspended. E-commerce sellers: every day without GST = lost sales as platforms require GSTIN. PTRC/PTEC non-registration = separate penalties under Maharashtra PT Act 1975.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Registration in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office with GST Expertise</h3><p class="feature-desc">RTC Silver, Wagholi. Direct experience with GST Commissionerate Pune, biometric Suvidha Kendras, and physical verification protocols.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Complete Tax-Compliant Launch</h3><p class="feature-desc">GST + PTRC/PTEC + Shop Act + Tally/Zoho accounting with HSN/SAC mapping + ongoing GSTR-1/3B/9 returns + monthly ITC reconciliation. Fully compliant from first invoice.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Ongoing Return Filing</h3><p class="feature-desc">Unlike portals that stop at registration, Patron manages GSTR-1 by 11th, GSTR-3B by 20th, GSTR-9 by 31 Dec, with monthly ITC reconciliation. Zero late filing penalties.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Track Record</h3><p class="feature-desc">10,000+ businesses served. 4.9 Google rating. 50,000+ documents filed. GSTIN in 3-7 days. PTRC/PTEC within 3 days. Tally/Zoho configured within 2 days of GSTIN.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across Pune</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold." - CFO, Manufacturing, Maharashtra</p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Regular GST vs Composition Scheme</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Regular Registration</th><th>Composition Scheme</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover Limit</td><td>No upper limit</td><td>Rs 1.5 crore (goods) / Rs 50 lakh (services)</td></tr>
                        <tr><td>Tax Rate</td><td>As per HSN/SAC (5%/12%/18%/28%)</td><td>1% (mfg), 5% (restaurants), 6% (services)</td></tr>
                        <tr><td>Input Tax Credit</td><td>Available</td><td>NOT available</td></tr>
                        <tr><td>Inter-State Supply</td><td>Allowed</td><td>NOT allowed</td></tr>
                        <tr><td>E-Commerce Supply</td><td>Allowed</td><td>NOT allowed</td></tr>
                        <tr><td>Returns</td><td>GSTR-1 + GSTR-3B (monthly/quarterly) + GSTR-9</td><td>CMP-08 (quarterly) + GSTR-4 (annual)</td></tr>
                        <tr><td>Best For Pune</td><td>IT companies, manufacturers, exporters, B2B</td><td>Small retailers, local restaurants, neighbourhood services</td></tr>

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
                
                <p>Patron offers complete tax registration and compliance in Pune:</p><ul>
                    <li><a href="/gst-registration">GST Registration in India</a> - National GST services</li>
                    <li><a href="/gst-returns">GST Returns Filing</a> - GSTR-1, GSTR-3B, GSTR-9</li>
                    <li><a href="#">Professional Tax Registration</a> - PTRC/PTEC</li>
                    <li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> - SPICe+ with GST</li>
                    <li><a href="/llp-incorporation/pune">LLP Registration in Pune</a></li>
                    <li><a href="/accounting-services/pune">Accounting Services in Pune</a></li>
                    <li><a href="/zoho-books-accounting">Zoho Books Accounting in Pune</a></li>
                    <li><a href="/income-tax-return">Income Tax Return</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for GST Registration in Pune</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>CGST Act, 2017 - Section 22 (liable persons), Section 24 (compulsory), Section 25 (procedure), Section 10 (composition), Section 16 (ITC)</li>
                    <li>Maharashtra GST Act, 2017 (MGST) - State GST mirror legislation</li>
                    <li>IGST Act, 2017 - Inter-state supply, zero-rated exports</li>
                    <li>Maharashtra PT Act 1975 - PTRC/PTEC mandatory alongside GST</li></ul>
                <p><strong>Key Updates (2025-2026):</strong></p><ul>
                    <li>GSTN Advisory Feb 2025: Aadhaar/biometric authentication mandatory</li>
                    <li>GSTN Advisory Nov 2025: Bank account within 30 days of registration</li>
                    <li>GST 2.0: Launched 22 September 2025 - simplified structure</li>
                    <li>Mandatory ISD Registration from April 2025 for multi-GSTIN businesses</li></ul>
                <p><strong>Penalties:</strong></p><ul>
                    <li>Not registering when liable: 10% of tax due, min Rs 10,000 (Section 122)</li>
                    <li>Intentional evasion: 100% of tax due</li>
                    <li>Operating without registration: goods seizure + prosecution</li></ul>

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
                    <h2 class="faq-expanded__title">FAQs - GST Registration in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about GST registration in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does GST registration cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>No government fee on services.gst.gov.in. Patron's all-inclusive registration starts from Rs 1,999 covering application filing, Aadhaar authentication coordination, and document preparation. The GST + PTRC/PTEC bundle costs Rs 3,999. The complete business launch package (GST + PTRC/PTEC + Shop Act + Tally/Zoho setup) costs Rs 7,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does GST registration take in Pune?</h3>
                        <div class="faq-expanded__a"><p>For non-risky applications with successful Aadhaar authentication, 3-7 working days. The GST Council has approved 3-day processing for straightforward applications. Physical verification of Pune premises may extend to 21 days. Common delays from incomplete biometric authentication or co-working address proof issues.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the GST registration threshold for Maharashtra?</h3>
                        <div class="faq-expanded__a"><p>Rs 40 lakh annual turnover for goods and Rs 20 lakh for services. Certain categories register regardless: inter-state suppliers, e-commerce sellers (including Amazon/Flipkart), casual taxable persons, reverse charge liable persons, and importers. Turnover calculated on aggregate PAN basis across all branches.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is GST registration mandatory for e-commerce sellers?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 24 of the CGST Act, persons supplying through e-commerce platforms like Amazon, Flipkart, Meesho must register regardless of turnover. The operator collects TCS at 1% under Section 52. Even a Pune home seller with Rs 5,000 monthly sales needs GST registration for platform onboarding.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not registering under GST?</h3>
                        <div class="faq-expanded__a"><p>Under Section 122(1), penalty of 10% of tax due, minimum Rs 10,000. Intentional evasion: 100% of tax due. Tax authorities in Pune are leveraging UPI transaction data to detect unregistered traders crossing thresholds. Operating without registration can result in goods seizure and prosecution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the composition scheme under GST?</h3>
                        <div class="faq-expanded__a"><p>Section 10 allows small businesses to pay at reduced rates: 1% (manufacturers), 5% (restaurants not serving alcohol), 6% (services). Turnover ceiling Rs 1.5 crore (goods/restaurants) and Rs 50 lakh (services). Cannot claim ITC, cannot make inter-state supplies, cannot sell on e-commerce platforms.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I get GST registration without a physical office in Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes, with conditions. Virtual office addresses are accepted but may trigger physical verification. Co-working spaces in Hinjewadi, Magarpatta, Kharadi are accepted with valid agreement and NOC from provider. Home-based businesses: electricity bill + property owner NOC is sufficient.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do I need PTRC/PTEC along with GST in Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Maharashtra requires PTRC for employers deducting professional tax from salaries and PTEC for all professionals and business owners. These are separate from GST and filed on mahagst.gov.in. Non-registration attracts penalties under the Maharashtra PT Act 1975. Patron bundles PTRC/PTEC with every GST registration.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST registration mein government fee kitni hai?</strong> Zero. GST portal pe koi fee nahi lagti. Sirf CA professional fees for application preparation.</p><p><strong>E-commerce seller ko GST zaroori hai kya?</strong> Haan. Amazon, Flipkart, Meesho pe bechne ke liye turnover chahe kitna bhi ho, GST registration mandatory hai Section 24 ke under.</p><p><strong>Composition Scheme mein ITC milti hai kya?</strong> Nahi. ITC nahi milti. Inter-state supply aur e-commerce supply bhi nahi kar sakte. Sirf local retail aur small manufacturing ke liye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Your GST Registration in Pune Before the Next Invoice</h2>
            <div class="content-text">
                
                <p>Operating above threshold without GST: minimum Rs 10,000 penalty. Intentional evasion: 100% of tax due. Tax authorities using UPI data to detect unregistered Pune traders. Bank account must be linked within 30 days. E-commerce sellers: platforms require GSTIN for onboarding. PTRC/PTEC non-registration = separate penalties.</p><p><strong>Register now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get GST Registration in Pune with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">GST registration in Pune is the foundational tax compliance for every business - from IT companies in Hinjewadi to manufacturers in MIDC Bhosari, e-commerce sellers, restaurants on FC Road, and freelancers in Baner - under the CGST Act 2017 and Maharashtra GST Act 2017.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi delivers the complete tax-compliant business launch: GST registration, PTRC/PTEC, Shop Act, Tally/Zoho accounting, and ongoing GSTR-1/3B/9 return filing with monthly ITC reconciliation. With 10,000+ businesses served and direct GST Commissionerate Pune experience, your business is GST-compliant from the first invoice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides GST registration services in 8 major cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/gst-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/gst-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/gst-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/gst-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/gst-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/gst-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end business registration in Pune</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Drug License</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to incorporate GST Council updates, CBIC instructions, GSTN advisories, threshold changes, and Maharashtra PT rate revisions. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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
// very bottom of the page (the old version scanned ALL section[id], so the
// highlight was lost once you scrolled into non-TOC sections).
(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-btn'));
    var wrapper = document.getElementById('tocWrapper');
    if (!tocBtns.length) return;

    var entries = tocBtns.map(function (btn) {
        var id = (btn.getAttribute('href') || '').replace('#', '');
        return { btn: btn, section: document.getElementById(id) };
    }).filter(function (e) { return e.section; });
    if (!entries.length) return;

    var OFFSET = 200; // clears the fixed navbar + sticky TOC bar
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
