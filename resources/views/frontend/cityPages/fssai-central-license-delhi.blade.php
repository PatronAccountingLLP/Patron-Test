
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
    <title>FSSAI Central License in Delhi - Eligibility & Fees</title>
    <meta name="description" content="Get FSSAI Central License in Delhi. Rs 7,500/year, Form B, FoSCoS portal. Importers, multi-state, Azadpur, IGI Airport. Call +91 945 945 6700.">
    <link rel="canonical" href="/fssai-central-license/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FSSAI Central License in Delhi - Eligibility & Fees">
    <meta property="og:description" content="Get FSSAI Central License in Delhi. Rs 7,500/year, Form B, FoSCoS portal. Importers, multi-state, Azadpur, IGI Airport. Call +91 945 945 6700.">
    <meta property="og:url" content="/fssai-central-license/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FSSAI Central License in Delhi - Eligibility & Fees">
    <meta name="twitter:description" content="Get FSSAI Central License in Delhi. Rs 7,500/year, Form B, FoSCoS portal. Importers, multi-state, Azadpur, IGI Airport. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FSSAI Central License in Delhi",
      "description": "Get FSSAI Central License in Delhi. Rs 7,500/year, Form B, FoSCoS portal. Importers, multi-state, Azadpur, IGI Airport. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/fssai-central-license/delhi",
      "serviceType": "FSSAI Central License in Delhi",
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
        "url": "https://www.patronaccounting.com/fssai-central-license/delhi",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "5",
          "maxPrice": "37500",
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
          "name": "FSSAI Central License: Fees and Process",
          "item": "https://www.patronaccounting.com/fssai-central-license"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FSSAI Central License in Delhi",
          "item": "https://www.patronaccounting.com/fssai-central-license/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who needs an FSSAI Central License in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory for: food businesses above Rs 20 crore turnover (Rs 30 crore for Azadpur Mandi wholesale/transport); multi-state operators (Central License for Delhi HQ); all food importers/exporters regardless of turnover (including IGI Airport cargo); food vendors at Central Govt premises (IGI Airport, Delhi Railway stations, Cantonment canteens); e-commerce food platforms; and large manufacturers above 2 MT/day. Applied via Form B on FoSCoS portal."
          }
        },
        {
          "@type": "Question",
          "name": "What is the fee for FSSAI Central License in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fee is Rs 7,500 per year, regardless of business type or turnover within the Central License tier. Valid 1-5 years - 5-year maximum costs Rs 37,500 upfront and is recommended to reduce renewal frequency. Fee paid online through FoSCoS payment gateway. Renewal fee is the same. Patron's professional fee starts from INR 3,499, including FSMS plan, Form B, and FoSCoS filing."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between FSSAI State and Central License in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "State License (issued by Dept of Food Safety NCT Delhi, Mayur Bhawan) applies to single-state businesses with turnover Rs 12 lakh-20 crore. Central License (issued by FSSAI Northern Region, Indirapuram) is for turnover above Rs 20 crore, multi-state operators, all importers/exporters, and Central Govt premises. Fee: State Rs 2,000-5,000/year; Central Rs 7,500/year. Key difference: they are issued by different offices in Delhi."
          }
        },
        {
          "@type": "Question",
          "name": "How do I apply for FSSAI Central License in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Register on FoSCoS (foscos.fssai.gov.in), select Delhi, choose trade category mapping to Central License eligibility. Complete Form B with all business details, upload FSMS plan, layout plan, equipment list, water test report, IEC for importers. Pay Rs 7,500/year through FoSCoS. FSSAI Northern Regional Office processes in 25-30 working days. Physical inspection may be scheduled."
          }
        },
        {
          "@type": "Question",
          "name": "Is Central License required for food import/export in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - mandatory for ALL food importers and exporters regardless of turnover. For Delhi importers at IGI Airport, the Central License number is required in the Bill of Entry on ICEGATE. Without it, food consignments cannot clear customs and incur demurrage daily. The Central License must be linked to the IEC from DGFT on FoSCoS. Patron coordinates parallel IEC + Central License applications."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for FSSAI Central License in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form B on FoSCoS; layout plan (architect-stamped for manufacturers); equipment list with capacity; FSMS plan; ID/address proofs of all directors (PAN + Aadhaar); Certificate of Incorporation + MOA/AOA; premises proof with geo-matching address (2026 requirement); water test report from NABL lab; Form IX + board resolution; GST certificate; and IEC from DGFT for importers/exporters."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I operate without Central License in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Criminal offence under Section 63 FSS Act 2006 - fine up to Rs 5 lakh. Practically: IGI Airport customs cannot clear food consignments without Central License; e-commerce listings (Amazon, Swiggy, Zomato) suspended when license absent or lapsed; corporate contracts require valid documentation; and FSSAI DOs conducting enforcement sweeps can shut down operations. Rs 100/day late fee for expired licenses. Quick Answers Delhi mein FSSAI Central License kaise milega? foscos.fssai.gov.in par Form B fill karo, Delhi select karo, apna KoB choose karo, documents upload karo, Rs 7,500/year pay karo. FSSAI Northern Region Indirapuram 25-30 days mein process karta hai. FSSAI Central License ki validity? 1-5 years. 5-year recommended: Rs 37,500 upfront. Renewal 30-120 days before expiry. Rs 100/day late fee after expiry. IGI Airport food vendors ko Central License chahiye? Yes - Central Govt premises. Regardless of turnover. All airport/railway food vendors need Central License."
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
                        FSSAI Central License in Delhi: Apply on FoSCoS for Large-Scale and Multi-State Food Businesses
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Turnover Above Rs 20 Crore</strong>:</span> Rs 20 crore for manufacturers/retailers/restaurants; Rs 30 crore for wholesale traders at Azadpur Mandi and food transporters</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Multi-State + Import/Export</strong>:</span> Mandatory for businesses in 2+ states, all food importers/exporters (regardless of turnover), and food vendors at IGI Airport/Delhi Railway stations</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Rs 7,500/Year Government Fee</strong>:</span> Valid 1-5 years (5-year maximum recommended = Rs 37,500 total). Filed via Form B on FoSCoS portal (foscos.fssai.gov.in)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Criminal Penalty for Non-Compliance</strong>:</span> Operating without mandatory Central License is an offence under FSS Act 2006 - fine up to Rs 5 lakh; Rs 100/day late fee for overdue renewals</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Expert FSSAI Central License in Delhi</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Central%20License%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Central%20License%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Central%20License%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FSSAI Central License in Delhi',
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
    'ctaText'    => 'Expert FSSAI Central License in Delhi - importers, multi-state chains, large-scale manufacturers.',
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
            <h2 class="section-title">FSSAI Central License in Delhi - At a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FSSAI Central License in Delhi Services at a Glance</strong></p>
                    <p>FSSAI Central License in Delhi is mandatory for food businesses with turnover above Rs 20 crore (Rs 30 crore for wholesale/transport), multi-state operators, all food importers/exporters, and food vendors at Central Govt premises (IGI Airport, Delhi Railway stations). Rs 7,500/year via Form B on FoSCoS portal. Issued by FSSAI Northern Regional Office, Indirapuram. <a href="/fssai-central-license">Learn more about FSSAI Central License across India</a>.</p>
                </div>
                <p>Delhi is the single most important city for FSSAI Central License. Azadpur Mandi has hundreds of traders above Rs 30 crore threshold. IGI Airport requires Central License for every food vendor. Delhi food importers need Central License for customs clearance.</p>
                <p>Patron Accounting LLP's Rohini office manages the complete workflow - Form B, FSMS plan, FoSCoS filing, IEC coordination for importers, and FSSAI Northern Regional Office follow-up. For State License needs, <a href="/fssai-registration">FSSAI Registration</a> covers the lower tiers. For import/export compliance, <a href="/iec-registration">IEC Registration</a> is coordinated alongside.</p>
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
                <h2 class="section-title">What Is an FSSAI Central License?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An FSSAI Central License is the mandatory food business license issued by FSSAI under the Food Safety and Standards Act, 2006 for large-scale, multi-state, and import/export food businesses, identifying the licensed FBO with a unique 14-digit FSSAI number that must be displayed on all food products and business premises.</p>
                    <p>FSSAI requires three tiers: Basic Registration (turnover below Rs 12 lakh), State License (Rs 12 lakh-20 crore, single state), and Central License (the highest tier). For Delhi FBOs near the Rs 20 crore threshold, correct tier classification changes annually based on audited turnover - making this a compliance-critical assessment.</p>
                    <p>The 14-digit FSSAI number must be printed on all labels, displayed at premises, integrated into delivery platform registrations (Swiggy, Zomato, Amazon Pantry now mandate verification), and quoted in all import/export documentation at IGI Airport Customs. For comprehensive food compliance, <a href="/gst-registration">GST Registration</a> should also be maintained.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FSSAI Central License in Delhi:</strong></p>
                    <p><strong>FSS Act 2006:</strong> Primary food safety legislation. Section 31 makes licensing mandatory. Section 63: penalty up to Rs 5 lakh for operating without license.</p>
                    <p><strong>FoSCoS Portal:</strong> Food Safety Compliance System (foscos.fssai.gov.in). All Central License applications filed here. Integrates with GSTIN, MCA, and geo-tagging in 2026.</p>
                    <p><strong>Form B:</strong> Application form for both State and Central License. For Central License: includes KoB, food products, premises, installed capacity, and FSMS details.</p>
                    <p><strong>Kind of Business (KoB):</strong> FSSAI classification determining eligibility tier and documentation. Wrong KoB selection is the primary cause of application reversion.</p>
                    <p><strong>FSMS Plan:</strong> Food Safety Management System plan - mandatory for Central License. Covers raw material sourcing, production controls, sanitation, pest control, water quality, recall procedures.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Central License in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FSSAI Northern Region</span>
                        <strong>Indirapuram</strong>
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
            <h2 class="section-title">Who Needs an FSSAI Central License in Delhi?</h2>
            <div class="content-text">
                
                <p>Azadpur Mandi - Asia's largest wholesale market - has hundreds of traders exceeding the Rs 30 crore Central License threshold for wholesale/transport businesses. Many still hold State Licenses despite crossing into Central territory. Patron advises Azadpur traders on correct tier assessment and State-to-Central upgrade via FoSCoS.</p>
                <p>IGI Airport food vendors - regardless of turnover - require Central License because IGI is Central Govt premises under Airports Authority of India. The same applies to New Delhi Railway Station, Hazrat Nizamuddin, Anand Vihar Terminal, and Delhi Cantonment food outlets. Every food business at these locations needs Central License.</p>
                <p>Delhi food importers at IGI Airport Cargo Complex need Central License linked to their IEC from DGFT. Without valid Central License, food consignments cannot clear customs - incurring demurrage of Rs 10,000-50,000+ per day. Okhla, Bawana, and Narela food manufacturers with production above 2 MT/day or turnover above Rs 20 crore also require Central License.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Is Included in Patron's FSSAI Central License Service in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Assessment and Tier Determination</td><td>State vs Central tier verification based on audited turnover, KoB, operational scope, and premises type. Prevents under-compliance and unnecessary upgrade</td></tr>
                        <tr><td>FoSCoS Registration and Form B Preparation</td><td>Complete FoSCoS registration and Form B with accurate KoB selection, food product list, installed capacity, and director documentation</td></tr>
                        <tr><td>FSMS Plan Drafting</td><td>Full food safety management system plan for Central License - raw material controls, production safety, sanitation, pest control, water quality, recall procedures</td></tr>
                        <tr><td>IEC Coordination for Importers/Exporters</td><td>Parallel IEC application through DGFT alongside FoSCoS Central License application for Delhi food importers at IGI Airport</td></tr>
                        <tr><td>Geo-Tagging Address Verification (2026)</td><td>Pre-verify electricity bill, rent agreement, and geo-tagged location match exactly on FoSCoS - prevents the most common 2026 reversion trigger</td></tr>
                        <tr><td>DO Inspection Preparation and Accompaniment</td><td>Prepare premises for Designated Officer inspection - FSMS implementation, layout plan accuracy, equipment list verification, water test report currency</td></tr>
                        <tr><td>Annual Return Filing and Renewal Management</td><td>Mandatory Annual Return on FoSCoS by 31 May. Renewal calendar for all Delhi Central License clients to prevent Rs 100/day late fee</td></tr>

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
            <h2 class="section-title">How to Get FSSAI Central License in Delhi - 5 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Expert FSSAI Central License from Patron's Rohini office - Form B, FSMS plan, FoSCoS filing, IEC coordination, and FSSAI Northern Region follow-up.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Central License Eligibility and KoB</h3><p class="step-description">Confirm Central License is needed: turnover above Rs 20 crore (Rs 30 crore for Azadpur wholesale); multi-state operations; import/export; Central Govt premises (IGI Airport, railways). Select correct Kind of Business (KoB) on FoSCoS - wrong KoB is the primary cause of application reversion.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tier Confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KoB Selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CENTRAL?</text><rect x="30" y="42" width="25" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="42" y="54" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rs 20Cr</text><rect x="65" y="42" width="25" height="18" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="78" y="54" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">Rs 30Cr</text></svg></div><span class="illustration-label">Eligibility Verified</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Documents for Central License</h3><p class="step-description">Assemble Form B, layout plan, equipment list with capacity, FSMS plan, director ID/address proofs, premises proof (must geo-match FoSCoS in 2026), water test report (NABL lab), Form IX + board resolution for companies, IEC for importers/exporters, GST certificate.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents Complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Geo-Tag Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="42" x2="85" y2="42" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="54" x2="80" y2="54" stroke="#14365F" stroke-width="2" opacity="0.3"/><path d="M25 30l3 3 5-5" stroke="#10B981" stroke-width="2"/><path d="M25 42l3 3 5-5" stroke="#10B981" stroke-width="2"/><path d="M25 54l3 3 5-5" stroke="#10B981" stroke-width="2"/></svg></div><span class="illustration-label">Ready to File</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Register on FoSCoS and File Form B</h3><p class="step-description">Register on foscos.fssai.gov.in, select Delhi, choose trade category mapping to Central License. Complete Form B, upload documents, pay Rs 7,500/year (up to 5 years). FoSCoS cross-checks GSTIN and MCA records in 2026. Note Application Reference Number.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form B Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 7,500/Year Paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FoSCoS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="3"/><rect x="30" y="45" width="55" height="14" rx="3" fill="#E8712C" opacity="0.15"/><text x="58" y="55" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">FORM B</text></svg></div><span class="illustration-label">Application Submitted</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Respond to NCR / Improvement Notice</h3><p class="step-description">DO reviews Form B and documents. May issue Improvement Notice (additional docs needed) or Non-Conformity Report (inspection findings). Common issues: geo-tag mismatch, outdated water report, incomplete FSMS. Patron prepares clients for inspections and drafts NCR responses.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NCR Resolved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inspection Passed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="40" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="40" y="44" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">NCR</text><circle cx="80" cy="40" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M74 40l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliance Confirmed</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive Form C Certificate and Display 14-Digit Number</h3><p class="step-description">Central License issued as Form C with 14-digit FSSAI number. Display at premises, print on all labels, register with delivery platforms (Zomato/Swiggy/Amazon), file Annual Return by 31 May each year, track renewal 30-120 days before expiry.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>14-Digit Number Active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M50 42l7 7 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round"/><text x="60" y="85" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM C</text></svg></div><span class="illustration-label">License Secured</span><span class="step-number-large">05</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FSSAI Central License in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>Form B</strong> - Central License application on FoSCoS (must match GSTIN and MCA records in 2026)</li><li><strong>Identity and address proof</strong> of all directors/partners/proprietors (PAN + Aadhaar)</li><li><strong>Proof of business premises</strong> - electricity bill or rent agreement (must geo-match FoSCoS registered address in 2026)</li><li><strong>Layout plan/blueprint</strong> - dimensions, equipment placement, production areas, storage, drainage, toilets</li><li><strong>Equipment list</strong> with installed capacity specifications (must match Form B capacity claim)</li><li><strong>FSMS Plan</strong> - food safety management system covering all safety controls</li><li><strong>Water quality test report</strong> from NABL-accredited lab (for processors using water)</li><li><strong>Form IX + Board Resolution</strong> for companies designating authorised signatory</li><li><strong>IEC from DGFT</strong> - mandatory for all food importers/exporters (must be linked to FSSAI profile on FoSCoS)</li><li><strong>GST Registration Certificate</strong> - FoSCoS cross-checks GSTN database in 2026</li><li><strong>Certificate of Incorporation + MOA/AOA</strong> for companies; Partnership Deed for partnerships</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges Delhi Food Businesses Face</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>FoSCoS Geo-Tagging Mismatch (2026)</td><td>Utility bill, rent agreement, and geo-tagged location must match exactly. Minor address variations cause immediate reversion for Okhla/Bawana factories</td><td>Pre-verify all address documentation against FoSCoS geo-tagging before submission. Saves 4-8 weeks of reversion delays</td></tr>
                        <tr><td>State vs Central Tier Confusion</td><td>Delhi FBOs near Rs 20/30 crore threshold hold wrong license tier. FSSAI DOs now cross-check GSTIN turnover data</td><td>Annual turnover vs license tier assessment for all Delhi FBO clients. State-to-Central upgrade managed proactively</td></tr>
                        <tr><td>Dual-Authority Confusion</td><td>FSSAI Northern Region (Indirapuram) issues Central; Dept of Food Safety NCT (Mayur Bhawan) issues State. FBOs approach wrong office</td><td>Direct working relationships with both authorities. Correct office for correct tier from Day 1</td></tr>
                        <tr><td>Importer Delays - Consignment En Route</td><td>Central License needed before IGI Airport customs clearance. Demurrage Rs 10,000-50,000+/day while license processes</td><td>Priority importer workflow: parallel IEC + FoSCoS filing. License obtained before consignment arrives</td></tr>

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
            <h2 class="section-title">FSSAI Central License Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>FSSAI Central License (per year, 1-5 years)</td><td>Rs 7,500/year (govt fee)</td></tr>
                        <tr><td>FSSAI Central License (5-year package)</td><td>Rs 37,500 total (Rs 7,500 x 5)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 3,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>IEC from DGFT (importers/exporters)</td><td>Rs 500 (online)</td></tr>
                        <tr><td>Annual Return Filing on FoSCoS</td><td>Nil (govt fee)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FSSAI Central License in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Central%20License%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for FSSAI Central License in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility assessment + KoB determination</td><td>1 working day</td></tr>
                        <tr><td>Document preparation (FSMS plan, layout, equipment list)</td><td>5-10 working days</td></tr>
                        <tr><td>FoSCoS registration + Form B filing + payment</td><td>1-2 working days</td></tr>
                        <tr><td>DO scrutiny (FSSAI Northern Region, Indirapuram)</td><td>10-15 working days</td></tr>
                        <tr><td>Physical inspection (if required)</td><td>3-5 working days</td></tr>
                        <tr><td>Total (no NCR): FoSCoS to Central License grant</td><td>25-30 working days</td></tr>
                        <tr><td>Total (with NCR/inspection delay)</td><td>45-60 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi dual-authority note:</strong> Central License applications go to FSSAI Northern Regional Office at Indirapuram, Ghaziabad - NOT to the Department of Food Safety NCT Delhi at Mayur Bhawan, Connaught Place (which handles State Licenses). Patron communicates with the correct authority for the correct tier.</p>

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
            <h2 class="section-title">Why Delhi Food Businesses Choose Patron</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Dual-Authority Expertise</h3><p class="feature-text">Direct working relationships with both FSSAI Northern Region (Indirapuram) and Dept of Food Safety NCT Delhi (Mayur Bhawan). Correct authority from Day 1.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">FoSCoS Geo-Tagging Pre-Check</h3><p class="feature-text">Pre-verify address consistency across utility bill, rent agreement, and FoSCoS for every Delhi manufacturing application. Prevents 4-8 week reversion delays.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Importer Urgency Handling</h3><p class="feature-text">Priority workflow for importers with consignments en route to IGI Airport. Parallel IEC + FoSCoS filing. License obtained before consignment arrives.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Azadpur Mandi Expertise</h3><p class="feature-text">Understands the Rs 30 crore threshold for wholesale/transport (not standard Rs 20 crore). Turnover analysis for Azadpur traders in the Rs 25-35 crore band.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">FSMS Plan Drafting</h3><p class="feature-text">Full food safety management system plan - not template-filled. Covers all manufacturing/service safety controls for Central License approval.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Annual Return + Renewal Calendar</h3><p class="feature-text">Automated renewal calendar initiated 120 days in advance. Annual Return filed by 31 May each year. Prevents Rs 100/day late fee and license lapse.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>With offices in Pune, Mumbai, Delhi (Rohini), and Gurugram, Patron serves Azadpur Mandi traders, IGI Airport food vendors, Okhla/Bawana manufacturers, and Delhi import/export food businesses. Trusted by Hyundai, Asian Paints, Bridgestone, and thousands of SMEs.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Central vs State vs Basic Registration - Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>FSSAI Central License</th><th>FSSAI State License</th></tr></thead>
                    <tbody>
                        <tr><td>Who issues in Delhi</td><td>FSSAI Northern Region, Indirapuram</td><td>Dept of Food Safety NCT Delhi, Mayur Bhawan</td></tr>
                        <tr><td>Turnover threshold</td><td>Above Rs 20 crore (Rs 30 crore wholesale)</td><td>Rs 12 lakh to Rs 20 crore</td></tr>
                        <tr><td>Multi-state operations</td><td>Mandatory regardless of turnover</td><td>Single-state only</td></tr>
                        <tr><td>Import/Export</td><td>Mandatory regardless of turnover</td><td>Not applicable</td></tr>
                        <tr><td>Central Govt premises</td><td>Mandatory regardless of turnover</td><td>Not applicable</td></tr>
                        <tr><td>Government Fee</td><td>Rs 7,500/year</td><td>Rs 2,000-5,000/year</td></tr>

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
            <h2 class="section-title">Related Services for Delhi FSSAI Central License Clients</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/fssai-central-license">FSSAI Central License (India page)</a> - National overview</li>
                    <li><a href="/fssai-registration">FSSAI Registration</a> - Basic and State License registration</li>
                    <li><a href="/gst-registration">GST Registration</a> - Mandatory for food businesses above threshold</li>
                    <li><a href="/iec-registration">IEC Registration</a> - Import Export Code from DGFT for food importers/exporters</li>
                    <li><a href="/private-limited-company-registration">Company Registration</a> - Incorporate food business before Central License</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for FSSAI Central License in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Food Safety and Standards Act, 2006:</strong> Section 31 makes licensing mandatory. Section 63: fine up to Rs 5 lakh for operating without license. Section 54: suspension and cancellation powers.</li>
                    <li><strong>FSS (Licensing and Registration) Regulations, 2011:</strong> Three-tier structure, turnover thresholds, Form A/B, KoB classifications, and fee structure. <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS Portal - foscos.fssai.gov.in</a></li>
                    <li><strong>FoSCoS Portal (2026):</strong> Integrates with GSTIN, MCA records, and geo-tagging. Data consistency across all registrations is critical.</li>
                    <li><strong>Rs 7,500/Year Fee:</strong> Fixed across all KoB categories. Maximum 5-year validity (Rs 37,500 total). Non-refundable.</li>
                    <li><strong>Rs 100/Day Late Fee:</strong> From day after license expiry if FBO continues operating without renewal. <a href="https://fssai.gov.in" target="_blank" rel="noopener">FSSAI Official - fssai.gov.in</a></li>
                    <li><strong>Annual Return by 31 May:</strong> Mandatory for all Central License holders. Non-filing affects renewal processing. <a href="https://dgft.gov.in" target="_blank" rel="noopener">DGFT - dgft.gov.in</a></li>
                    <li><strong>FSSAI Northern Regional Office:</strong> Central Licensing Authority for Delhi at National Food Laboratory Building, Indirapuram, Ghaziabad. Covers Delhi + 7 states.</li>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - FSSAI Central License in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers about FSSAI Central License eligibility, fees, FoSCoS portal, and import/export requirements for Delhi food businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FSSAI Central License in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who needs an FSSAI Central License in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Mandatory for: food businesses above Rs 20 crore turnover (Rs 30 crore for Azadpur Mandi wholesale/transport); multi-state operators (Central License for Delhi HQ); all food importers/exporters regardless of turnover (including IGI Airport cargo); food vendors at Central Govt premises (IGI Airport, Delhi Railway stations, Cantonment canteens); e-commerce food platforms; and large manufacturers above 2 MT/day. Applied via Form B on FoSCoS portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the fee for FSSAI Central License in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Government fee is Rs 7,500 per year, regardless of business type or turnover within the Central License tier. Valid 1-5 years - 5-year maximum costs Rs 37,500 upfront and is recommended to reduce renewal frequency. Fee paid online through FoSCoS payment gateway. Renewal fee is the same. Patron's professional fee starts from INR 3,499, including FSMS plan, Form B, and FoSCoS filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between FSSAI State and Central License in Delhi?</h3>
                        <div class="faq-expanded__a"><p>State License (issued by Dept of Food Safety NCT Delhi, Mayur Bhawan) applies to single-state businesses with turnover Rs 12 lakh-20 crore. Central License (issued by FSSAI Northern Region, Indirapuram) is for turnover above Rs 20 crore, multi-state operators, all importers/exporters, and Central Govt premises. Fee: State Rs 2,000-5,000/year; Central Rs 7,500/year. Key difference: they are issued by different offices in Delhi.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How do I apply for FSSAI Central License in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Register on FoSCoS (foscos.fssai.gov.in), select Delhi, choose trade category mapping to Central License eligibility. Complete Form B with all business details, upload FSMS plan, layout plan, equipment list, water test report, IEC for importers. Pay Rs 7,500/year through FoSCoS. FSSAI Northern Regional Office processes in 25-30 working days. Physical inspection may be scheduled.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is Central License required for food import/export in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes - mandatory for ALL food importers and exporters regardless of turnover. For Delhi importers at IGI Airport, the Central License number is required in the Bill of Entry on ICEGATE. Without it, food consignments cannot clear customs and incur demurrage daily. The Central License must be linked to the IEC from DGFT on FoSCoS. Patron coordinates parallel IEC + Central License applications.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What documents are needed for FSSAI Central License in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Form B on FoSCoS; layout plan (architect-stamped for manufacturers); equipment list with capacity; FSMS plan; ID/address proofs of all directors (PAN + Aadhaar); Certificate of Incorporation + MOA/AOA; premises proof with geo-matching address (2026 requirement); water test report from NABL lab; Form IX + board resolution; GST certificate; and IEC from DGFT for importers/exporters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if I operate without Central License in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Criminal offence under Section 63 FSS Act 2006 - fine up to Rs 5 lakh. Practically: IGI Airport customs cannot clear food consignments without Central License; e-commerce listings (Amazon, Swiggy, Zomato) suspended when license absent or lapsed; corporate contracts require valid documentation; and FSSAI DOs conducting enforcement sweeps can shut down operations. Rs 100/day late fee for expired licenses.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Delhi mein FSSAI Central License kaise milega?</strong> foscos.fssai.gov.in par Form B fill karo, Delhi select karo, apna KoB choose karo, documents upload karo, Rs 7,500/year pay karo. FSSAI Northern Region Indirapuram 25-30 days mein process karta hai.</p>
                <p><strong>FSSAI Central License ki validity?</strong> 1-5 years. 5-year recommended: Rs 37,500 upfront. Renewal 30-120 days before expiry. Rs 100/day late fee after expiry.</p>
                <p><strong>IGI Airport food vendors ko Central License chahiye?</strong> Yes - Central Govt premises. Regardless of turnover. All airport/railway food vendors need Central License.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why You Should Apply for FSSAI Central License Today</h2>
            <div class="content-text">
                
                <p><strong>IGI Airport Customs cannot wait:</strong> Food consignments incur demurrage while Central License processes. Start FoSCoS application today - the 25-30 day clock begins when you submit.</p>
                <p><strong>E-commerce de-listing is instant:</strong> Amazon, Swiggy, Zomato cross-check FSSAI validity in real-time. A one-day lapse triggers automatic product suspension.</p>
                <p><strong>Rs 5 lakh penalty vs Rs 7,500 license fee:</strong> The economics are straightforward. Operating without mandatory Central License is 667x the annual license fee in potential penalties.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">FSSAI Central License in Delhi - Partner with Patron</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">FSSAI Central License in Delhi demands precision across multiple dimensions - from correct tier identification to FoSCoS geo-tagging, IEC coordination for IGI Airport importers, and dual-authority navigation between FSSAI Northern Region and Dept of Food Safety NCT Delhi.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting LLP's Rohini office provides end-to-end FSSAI Central License services - Form B, FSMS plan, FoSCoS filing, IEC coordination, DO inspection preparation, Annual Return filing, and renewal management for Delhi's wholesale traders, airport food vendors, manufacturers, and importers.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Central%20License%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Central%20License%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Central%20License%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FSSAI Central License - Available in 4 Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert FSSAI Central License across India's major cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
                        <a href="/fssai-central-license/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/fssai-central-license/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
                        <a href="/fssai-central-license/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    </div></div>
                <div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end food business compliance in Delhi</div><div class="pa-cross-grid">
                        <a href="/fssai-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/iec-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/shop-act-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Shop Act Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 April 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed monthly. Monitor: FSSAI threshold revisions, FoSCoS portal changes, geo-tagging requirements, penalty enforcement circulars. Reviewed by CA & CS Team, Patron Accounting LLP.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
