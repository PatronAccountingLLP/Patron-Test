
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
    <title>GST Returns for Restaurants Mumbai - 5% & Composition</title>
    <meta name="description" content="CA-assisted GST return filing for restaurants in Mumbai. 5% GST, composition scheme, cloud kitchen compliance, Swiggy/Zomato Section 9(5). Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-returns-for-restaurants-food-businesses/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Returns for Restaurants Mumbai - 5% & Composition">
    <meta property="og:description" content="CA-assisted GST return filing for restaurants in Mumbai. 5% GST, composition scheme, cloud kitchen compliance, Swiggy/Zomato Section 9(5). Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-returns-for-restaurants-food-businesses/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Returns for Restaurants Mumbai - 5% & Composition">
    <meta name="twitter:description" content="CA-assisted GST return filing for restaurants in Mumbai. 5% GST, composition scheme, cloud kitchen compliance, Swiggy/Zomato Section 9(5). Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Returns for Restaurants Mumbai - 5% & Composition",
      "description": "CA-assisted GST return filing for restaurants in Mumbai. 5% GST, composition scheme, cloud kitchen compliance, Swiggy/Zomato Section 9(5). Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-returns-for-restaurants-food-businesses/mumbai",
      "serviceType": "GST Returns for Restaurants Mumbai - 5% & Composition",
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
        "url": "https://www.patronaccounting.com/gst-returns-for-restaurants-food-businesses/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "1",
          "maxPrice": "7500",
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
          "name": "GST Returns for Restaurants & Food Business - 5% & ITC Rules",
          "item": "https://www.patronaccounting.com/gst-returns-for-restaurants-food-businesses"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Returns for Restaurants Mumbai - 5% & Composition",
          "item": "https://www.patronaccounting.com/gst-returns-for-restaurants-food-businesses/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office handles restaurant returns in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST returns are filed online at gst.gov.in. The jurisdictional GST Commissionerate East West Central or South is determined by the restaurant registered address. Bandra restaurants typically fall under Mumbai West while Fort and Colaba fall under Mumbai South. Patron Marine Lines office handles filings for restaurants across all four Mumbai zones."
          }
        },
        {
          "@type": "Question",
          "name": "What is the GST rate for restaurants in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most standalone restaurants charge 5 percent GST with 2.5 percent CGST plus 2.5 percent SGST without ITC. Restaurants in hotels with room tariff Rs 7,500 or above charge 18 percent with ITC. Outdoor catering is taxed at 18 percent with ITC. Composition scheme restaurants pay 5 percent flat. These rates apply uniformly across Mumbai regardless of AC or non-AC."
          }
        },
        {
          "@type": "Question",
          "name": "Does Swiggy or Zomato pay GST for my restaurant?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes under Section 9(5) food delivery aggregators like Swiggy and Zomato are deemed the supplier for restaurant services and pay 5 percent GST on orders placed through their platforms. The restaurant does not collect GST on these orders. However for direct orders including walk-in phone and own website the restaurant must charge and collect GST itself."
          }
        },
        {
          "@type": "Question",
          "name": "Can restaurants claim Input Tax Credit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only restaurants charging 18 percent GST which includes hotel restaurants with room tariff Rs 7,500 plus and outdoor caterers can claim ITC on ingredients rent equipment and services. Restaurants charging 5 percent GST cannot claim ITC as the lower rate is conditioned on foregoing ITC. Composition scheme restaurants also cannot claim ITC."
          }
        },
        {
          "@type": "Question",
          "name": "Is composition scheme better for Mumbai restaurants?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Both regular 5 percent and composition 5 percent have the same effective rate. Composition offers simpler quarterly filing CMP-08 plus GSTR-4 instead of monthly returns. However composition restaurants cannot serve alcohol make inter-state supplies or issue tax invoices. For small Mumbai eateries with turnover under Rs 1.5 crore and purely local operations composition reduces compliance burden."
          }
        },
        {
          "@type": "Question",
          "name": "How is GST calculated on a restaurant bill in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST is calculated on the total value of food and non-alcoholic beverages before adding GST. If a restaurant bill for food is Rs 2,000 and the rate is 5 percent then GST is Rs 100 with Rs 50 CGST plus Rs 50 SGST making total Rs 2,100. Alcohol is billed separately under Maharashtra state VAT and excise. Service charge is not part of the GST base."
          }
        },
        {
          "@type": "Question",
          "name": "Does a cloud kitchen in Mumbai need GST registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes if aggregate turnover exceeds Rs 20 lakh. Even if most sales are through Swiggy and Zomato where the aggregator pays GST under Section 9(5) the cloud kitchen must register if total turnover crosses the threshold. Direct sales through own website or app require the kitchen to charge GST itself."
          }
        },
        {
          "@type": "Question",
          "name": "What about GST on takeaway food in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Takeaway food from a restaurant is taxed at the same rate as dine-in food which is 5 percent for standalone restaurants and 18 percent for specified premises hotel restaurants. The mode of consumption dine-in vs takeaway does not change the GST rate for restaurant services. Pre-packaged items like bottled water may attract different rates."
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
                        GST Returns for Restaurants in Mumbai: File Correctly, Grow Your Food Business
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Standalone:</span> 5% GST without ITC. GSTR-1 + GSTR-3B monthly/quarterly. Applies to dine-in, takeaway, and direct delivery orders</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Hotels 18%:</span> Hotels with room tariff Rs 7,500+ charge 18% GST with full ITC on ingredients, rent, equipment, and services</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Composition:</span> 5% flat for turnover up to Rs 1.5 crore. CMP-08 quarterly + GSTR-4 annual. No ITC, no alcohol, no inter-state</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Aggregators:</span> Section 9(5): Swiggy/Zomato pay 5% GST on restaurant orders as deemed supplier. Restaurant does not collect GST on platform orders</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Restaurant%20GST%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20restaurant%20GST.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20restaurant%20GST%20return%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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

                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - Restaurant GST Returns',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'gst-returns-for-restaurants/mumbai', 'label' => 'Restaurant GST Returns Mumbai', 'selected' => true, 'disabled' => false],
                            ['value' => 'gst-returns', 'label' => 'GST Returns', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/mumbai', 'label' => 'GST Registration Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'fssai-registration', 'label' => 'FSSAI Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'fssai-returns', 'label' => 'FSSAI Returns', 'selected' => false, 'disabled' => false],
                            ['value' => 'shop-act-registration', 'label' => 'Shop Act Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
                        ],
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
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron handles GST for all three of our Mumbai restaurants. The aggregator reconciliation alone saves us hours every month. Swiggy/Zomato settlements verified, TCS checked, direct orders correctly separated. Zero compliance issues in 2 years.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arjun Shah</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Restaurant Owner, Bandra</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">BKC hotel restaurant at 18% GST. Patron manages our full ITC - ingredients from Crawford Market, kitchen equipment, rent, utilities. Monthly GSTR-2B matching catches missing credits. Effective tax rate significantly reduced through proper ITC management.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Kapoor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">F&B Director, 5-Star Hotel, BKC</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Andheri cloud kitchen with 90% Zomato orders. Was confused about whether to charge GST or not. Patron clarified Section 9(5) - Zomato pays on platform orders, I charge on direct website orders. Split correctly now. FSSAI + GST bundle saves time.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Desai</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Cloud Kitchen Founder, Andheri</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Startup Founder, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Demandify Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From Bandra fine dining to BKC hotel restaurants to Andheri cloud kitchens to Fort thali shops - Mumbai's food businesses trust Patron for GST compliance.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

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
            <a href="#what-section" class="toc-btn">What Are Returns</a>
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Due Dates</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">GST Rates</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Restaurant GST Returns in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Restaurant GST Returns Services at a Glance</strong></p>
                    <p>Standalone: 5% without ITC. Hotels (room Rs 7,500+): 18% with ITC. Composition: 5% flat (up to Rs 1.5 Cr). Swiggy/Zomato pay GST under S.9(5). Alcohol = Maharashtra excise/VAT (not GST). GSTR-1 by 11th, GSTR-3B by 20th. CMP-08 by 18th. Mumbai = 80,000+ food establishments. Split billing for bars. Cloud kitchens = aggregator pays.</p>
                </div>
                <p>Mumbai is India's restaurant capital with over 80,000 food establishments - fine dining at Colaba and BKC, casual dining across Bandra, Lower Parel, Andheri, cloud kitchens powering Swiggy and Zomato delivery, and small eateries across the city.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Standalone Restaurant</td><td>5% GST (2.5% CGST + 2.5% SGST) without ITC</td></tr>
                        <tr><td>Hotel (Room Rs 7,500+)</td><td>18% GST with full ITC</td></tr>
                        <tr><td>Outdoor Catering</td><td>18% GST with ITC</td></tr>
                        <tr><td>Composition</td><td>5% flat (up to Rs 1.5 Cr). CMP-08 quarterly + GSTR-4 annual</td></tr>
                        <tr><td>Swiggy/Zomato</td><td>Aggregator pays 5% GST under Section 9(5)</td></tr>
                        <tr><td>Alcohol</td><td>Not GST - Maharashtra state excise/VAT. Split billing</td></tr>
                        <tr><td>Late Fee</td><td>Rs 50+50/day (regular) | Rs 20+20/day (nil)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patron's Marine Lines office handles all restaurant formats. Related: <a href="/gst-returns">GST returns</a>, <a href="/gst-registration/mumbai">GST registration</a>, <a href="/fssai-registration">FSSAI registration</a>, <a href="/fssai-returns">FSSAI returns</a>, <a href="/shop-act-registration">Shop Act</a>.</p>
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
                <h2 class="section-title">What Are GST Returns for Restaurants?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST returns for restaurants are periodic filings on the GST portal reporting outward supply of food and beverages, tax collected, Input Tax Credit (where eligible), and net tax payable under HSN Code 9963 (Restaurant Services).</p>
                    <p>Regular scheme: GSTR-1 (invoice-level outward) + GSTR-3B (summary + tax payment). Composition: CMP-08 (quarterly) + GSTR-4 (annual). Section 9(5): aggregator pays on platform orders.</p>
                    <p>Mumbai restaurants must also manage split billing for alcohol (Maharashtra excise/VAT, not GST). Filed on <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>. <a href="/gst-returns">GST returns national</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Restaurant GST Returns:</strong></p>
                    <ul>
                        <li><strong>5% Without ITC:</strong> Standard for standalone restaurants. Dine-in, takeaway, direct delivery. No input credit on purchases. Lower rate = ITC trade-off.</li>
                        <li><strong>18% With ITC:</strong> Hotel restaurants (room Rs 7,500+) and outdoor caterers. Full ITC on ingredients, rent, equipment. Taj, Oberoi, Trident category.</li>
                        <li><strong>Section 9(5):</strong> Swiggy/Zomato = deemed supplier. Pay 5% GST on platform restaurant orders. Restaurant does not collect GST on these. Direct orders = restaurant charges.</li>
                        <li><strong>Composition (5% Flat):</strong> Turnover up to Rs 1.5 Cr. CMP-08 quarterly + GSTR-4 annual. No ITC, no alcohol, no inter-state. Bill of Supply.</li>
                        <li><strong>Split Billing:</strong> Food = GST. Alcohol = Maharashtra excise/VAT. Two streams on same bill. POS must be configured correctly.</li>
                        <li><strong>HSN 9963:</strong> Restaurant services. Outdoor catering = SAC 996335 at 18%. Packaged items (water 18%, snacks 12%) = separate rates.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Restaurant GST Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GST</span>
                        <strong>Filed</strong>
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
            <h2 class="section-title">Which Mumbai Restaurants Need GST Returns?</h2>
            <div class="content-text">
                
                <p><strong>Fine/Casual Dining (Bandra, Colaba, Lower Parel):</strong> Turnover > Rs 20 lakh. 5% GST without ITC. GSTR-1/3B monthly or QRMP quarterly. <a href="/gst-registration/mumbai">GST registration</a>.</p>
                <p><strong>5-Star Hotels (BKC, Juhu, South Mumbai):</strong> Room tariff Rs 7,500+. 18% with ITC. Monthly GSTR-1/3B. Taj, Oberoi, Trident. Full ITC on ingredients, rent, equipment. <a href="/accounting-services">Accounting</a>.</p>
                <p><strong>Cloud Kitchens (Andheri, Powai, Bandra):</strong> Section 9(5) = aggregator pays on platform orders. Direct orders = kitchen charges GST. Register if turnover > Rs 20 lakh. <a href="/fssai-registration">FSSAI registration</a>.</p>
                <p><strong>QSR Chains + Corporate Caterers:</strong> Fast food at 5%. Outdoor catering at 18% with ITC. BKC/Nariman Point corporate meal services. <a href="/payroll-services">Payroll services</a>.</p>
                <p><strong>Small Eateries + Bars (Fort, Dadar, Colaba):</strong> Composition at 5% flat for turnover < Rs 1.5 Cr. Bars = split billing (food GST + alcohol excise/VAT). <a href="/shop-act-registration">Shop Act</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Restaurant GST Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 Filing</td><td>All restaurant sales: dine-in B2B (corporate clients), B2C consolidated (walk-in), takeaway, delivery. POS data extraction from POSist, Petpooja, Torqus. Filed by 8th (3-day buffer)</td></tr>
                        <tr><td>GSTR-3B Filing</td><td>Summary with 5% outward (or 18% for hotels). ITC for 18% restaurants. Net tax payment. For 5% restaurants: straightforward, no ITC offset. Filed by 17th</td></tr>
                        <tr><td>Composition (CMP-08 + GSTR-4)</td><td>Quarterly CMP-08 by 18th with total turnover and 5% tax. Annual GSTR-4 by 30 April. Turnover monitoring against Rs 1.5 crore limit</td></tr>
                        <tr><td>Section 9(5) Reconciliation</td><td>Monthly Swiggy/Zomato payout vs POS reconciliation. Verify aggregator GST payment, TCS deduction, commission charges, non-platform sales GST treatment</td></tr>
                        <tr><td>Split Billing (Alcohol)</td><td>Food revenue (GST) segregated from alcohol revenue (Maharashtra excise/VAT). Correct POS configuration. GST return covers food only</td></tr>
                        <tr><td>ITC Management (18% Hotels)</td><td>Monthly ITC tracking: ingredients (APMC, Crawford Market), kitchen equipment, rentals, utilities. GSTR-2B matching. Supplier compliance verification</td></tr>
                        <tr><td>FSSAI + GST Bundle</td><td>Combined FSSAI Form D1 annual return and monthly GST filing. Data consistency between FSSAI turnover and GST revenue. Prevents cross-compliance discrepancies</td></tr>
                        <tr><td>Multi-Outlet Chain Filing</td><td>Centralised filing for Mumbai restaurant chains with 3+ outlets. POS consolidation across locations. Per-outlet revenue tracking for Commissionerate compliance</td></tr>

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
            <h2 class="section-title">Restaurant GST Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete restaurant GST compliance from scheme determination through POS setup, data compilation, GSTR-1/3B filing, to aggregator reconciliation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Determine GST Scheme and Rate</h3>
        <p class="step-description">Regular 5% without ITC (standalone), 18% with ITC (hotel room Rs 7,500+), or composition 5% flat (turnover < Rs 1.5 Cr). Cloud kitchens via Swiggy/Zomato: Section 9(5). Patron Marine Lines provides free scheme assessment for Mumbai restaurants.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scheme identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rate confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.9(5) applicability checked</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SCHEME</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">5% or 18%</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">or Composition</text></svg></div>
            <span class="illustration-label">Scheme Set</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Set Up POS Billing with GST</h3>
        <p class="step-description">Configure POS (POSist, Petpooja, Torqus) with GST rate (5% or 18%), HSN 9963, split billing for alcohol (VAT separate from GST). Composition: Bill of Supply with 'Composition taxable person' declaration. Patron validates POS GST configuration.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>POS configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN 9963 set</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Split billing enabled</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">POS SETUP</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">HSN 9963</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Split Billing</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Food + Alcohol</text></svg></div>
            <span class="illustration-label">POS Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Compile Monthly Sales and Purchase Data</h3>
        <p class="step-description">Extract POS daily sales: dine-in, takeaway, delivery (direct + aggregator), catering. For 18% hotels: purchase invoices from APMC, Crawford Market, equipment, rent, utilities. Download Swiggy/Zomato monthly settlement reports for Section 9(5) reconciliation.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sales extracted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Purchases compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aggregator reports downloaded</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">COMPILE</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">POS Reports</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Aggregator Data</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Purchases (18%)</text></svg></div>
            <span class="illustration-label">Data Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File GSTR-1 by the 11th (or 13th QRMP)</h3>
        <p class="step-description">Upload B2B invoices (corporate clients), B2C consolidated (walk-in), credit notes. For 18% hotels: invoice-wise HSN summary. Composition: no GSTR-1 (CMP-08 instead). Patron files by 8th - 3-day buffer. POS data directly extracted.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>B2B/B2C uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Food-only revenue</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed by 8th</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">By 8th Monthly</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">B2B + B2C</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Food Sales Only</text></svg></div>
            <span class="illustration-label">GSTR-1 Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File GSTR-3B by 20th (or CMP-08 by 18th)</h3>
        <p class="step-description">Regular: outward supply at 5% (or 18%), ITC (18% only), net tax. 5% restaurants: no ITC, straightforward. Composition: CMP-08 quarterly with total turnover and 5% tax by 18th. Patron files GSTR-3B by 17th, CMP-08 by 15th.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Summary entered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed with buffer</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">By 17th Monthly</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">5% or 18%</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Pay Net Tax</text></svg></div>
            <span class="illustration-label">Tax Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Reconcile Aggregator Payments and Maintain Records</h3>
        <p class="step-description">Monthly Swiggy/Zomato reconciliation: verify GST paid under S.9(5), TCS deducted, commissions, net settlement. Maintain POS reports, purchase invoices, aggregator statements, bank statements for 6 years. FDA Maharashtra + GST Commissionerate may inspect.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aggregator reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inspection-ready</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">RECONCILED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Swiggy/Zomato</text></svg></div>
            <span class="illustration-label">Compliant</span>
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
            <h2 class="section-title">Documents Required for Restaurant GST Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>POS/Billing Reports:</strong> Daily and monthly sales from restaurant POS: dine-in, takeaway, delivery, catering with GST collected.</li><li><strong>Purchase Invoices (18% ITC):</strong> Ingredients (APMC, Crawford Market), kitchen equipment, rental, utility bills with supplier GSTIN.</li><li><strong>Swiggy/Zomato Settlements:</strong> Monthly platform reports: order values, GST paid under S.9(5), TCS deducted, commission charged.</li><li><strong>Alcohol Sales Records:</strong> Separate register for alcohol under Maharashtra excise/VAT. Not in GST returns.</li><li><strong>Bank Statements:</strong> Reconciling cash + card + UPI + aggregator settlements with GST turnover.</li><li><strong>FSSAI Licence:</strong> Cross-reference with GST registration address.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai Tip:</strong> Restaurants buying from Crawford Market, APMC, Vashi wholesale should verify supplier GSTINs before claiming ITC (18% restaurants only). Many wholesalers are under composition and cannot issue tax invoices - those purchases are not ITC-eligible. Patron cross-checks supplier compliance monthly.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Restaurant GST Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>5% vs 18% ITC Decision</td><td>Perpetual debate: 5% without ITC (lower rate, no credit) vs 18% with ITC (higher rate, full credit). For most standalone restaurants 5% is optimal - ingredient ITC at 5% rarely offsets 13% rate gap</td><td>Mumbai cost analysis comparing effective tax under both schemes. For hotels (room 7,500+): 18% mandatory. For standalone: 5% recommended with clear rationale</td></tr>
                        <tr><td>Section 9(5) Reconciliation</td><td>Cloud kitchens and delivery restaurants: aggregator pays GST but deducts TCS + commission. POS vs aggregator value discrepancies. Affects GST and income tax computation</td><td>Monthly automated Swiggy/Zomato reconciliation with POS. Discrepancy identification. Correct GST treatment of platform vs direct sales</td></tr>
                        <tr><td>Split Billing (Alcohol)</td><td>Food = 5% GST. Alcohol = Maharashtra excise/VAT. Many POS systems misconfigured. GST Commissionerate questions returns where turnover doesn't match excise records</td><td>POS split billing configuration. Food-only GST returns. Alcohol separately reported. Excise-GST cross-verification before filing</td></tr>
                        <tr><td>Composition Restrictions</td><td>No alcohol, no inter-state, no tax invoices. Recent S.9(5) relaxation for aggregator sales often unknown. Turnover monitoring against Rs 1.5 Cr limit critical</td><td>Regular vs composition comparison. Turnover monitoring. S.9(5) aggregator eligibility confirmed. Scheme switching guidance when needed</td></tr>
                        <tr><td>Seasonal + Nil Returns</td><td>Tourist/business district restaurants: seasonal variation. Zero-revenue months still require filing. Skipped nil returns = Rs 40-100/day penalty accumulation</td><td>Nil returns auto-filed for zero-revenue months. Calendar-driven compliance regardless of seasonality. Zero penalty risk</td></tr>

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
            <h2 class="section-title">Restaurant GST Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GST Filing (Govt)</td><td>Nil</td></tr>
                        <tr><td>Late Fee (Regular)</td><td>Rs 50+50/day (max Rs 5,000+5,000)</td></tr>
                        <tr><td>Late Fee (Nil)</td><td>Rs 20+20/day (max Rs 500+500)</td></tr>
                        <tr><td>Patron: Regular Scheme</td><td>Starting Rs 2,000/month</td></tr>
                        <tr><td>Patron: Composition</td><td>Starting Rs 1,500/quarter</td></tr>
                        <tr><td>Patron: Hotel 18%</td><td>Starting Rs 3,000/month</td></tr>
                        <tr><td>Patron: FSSAI + GST Bundle</td><td>Starting Rs 3,500/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Restaurant GST Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20restaurant%20GST%20filing%20in%20Mumbai.%20Please%20help." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Restaurant GST Filing Due Dates</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 (Monthly)</td><td>11th of following month</td></tr>
                        <tr><td>GSTR-1 (QRMP Quarterly)</td><td>13th of month after quarter</td></tr>
                        <tr><td>GSTR-3B (Monthly)</td><td>20th of following month</td></tr>
                        <tr><td>GSTR-3B (QRMP Maharashtra)</td><td>22nd of month after quarter</td></tr>
                        <tr><td>CMP-08 (Composition)</td><td>18th of month after quarter</td></tr>
                        <tr><td>GSTR-4 (Composition Annual)</td><td>30 April</td></tr>
                        <tr><td>Patron Buffer</td><td>GSTR-1 by 8th | GSTR-3B by 17th | CMP-08 by 15th</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Missing returns = Rs 100/day late fee + 18% interest. GSTIN suspension after 2 months non-filing = no tax invoices = loss of Swiggy/Zomato eligibility (require active GSTIN) = FDA inspection complications. Patron files with 2-3 day buffer. Nil returns auto-filed for zero-revenue months.</p>

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
            <h2 class="section-title">Why Choose Patron for Restaurant GST in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Restaurant Industry Expertise</h3><p>POS data extraction (POSist, Petpooja, Torqus). Swiggy/Zomato reconciliation. Split billing for alcohol. 5% vs 18% ITC analysis specific to Mumbai restaurant economics.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Section 9(5) Reconciliation</h3><p>Monthly automated Swiggy/Zomato settlement vs POS reconciliation. GST payment verification, TCS shortfalls, commission overcharges identified before they accumulate.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>FSSAI + GST Bundle</h3><p>Combined FSSAI Form D1 and monthly GST filing. Data consistency between FSSAI turnover and GST revenue. Prevents cross-compliance issues during FDA/GST inspections.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>3-Day Buffer Filing</h3><p>GSTR-1 by 8th, GSTR-3B by 17th, CMP-08 by 15th. Zero late filings. 10,000+ businesses, 4.9 rating, 15+ years, 4 offices.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Restaurants Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram. Restaurant GST expertise: POS integration, aggregator reconciliation, split billing, FSSAI+GST bundling.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Rates for Mumbai Restaurant Types</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Restaurant Type</th><th>GST Rate</th><th>ITC</th></tr></thead>
                    <tbody>
                        <tr><td>Standalone (dine-in/takeaway)</td><td>5%</td><td>No</td></tr>
                        <tr><td>Hotel (room < Rs 7,500)</td><td>5%</td><td>No</td></tr>
                        <tr><td>Hotel (room >= Rs 7,500)</td><td>18%</td><td>Yes</td></tr>
                        <tr><td>Outdoor Catering</td><td>18%</td><td>Yes</td></tr>
                        <tr><td>Cloud Kitchen (via aggregator)</td><td>5% (aggregator pays)</td><td>No</td></tr>
                        <tr><td>Composition Scheme</td><td>5% flat</td><td>No</td></tr>

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
                
                <p>Mumbai restaurants filing GST returns often need:</p>
                <ul><li><a href="/gst-returns">GST Returns</a> - General filing guide.</li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a> - New registration.</li>
                    <li><a href="/fssai-registration">FSSAI Registration</a> - Food licence.</li>
                    <li><a href="/fssai-returns">FSSAI Returns</a> - Annual food return.</li>
                    <li><a href="/shop-act-registration">Shop Act Registration</a> - Maharashtra Shops Act.</li>
                    <li><a href="/payroll-services">Payroll Services</a> - Staff compliance.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Restaurant GST</h2>
            <div class="content-text">
                
                <p><strong>CGST Act, 2017:</strong></p>
                <ul><li>S.9(5): Aggregator deemed supplier for restaurant services. S.10: Composition (Rs 1.5 Cr, 5% flat). Notification 11/2017-CT: 5% without ITC.</li></ul>
                <p style="margin-top:16px;"><strong>Rates:</strong></p>
                <ul><li>HSN 9963: 5% without ITC (standalone). 18% with ITC (hotel room Rs 7,500+, outdoor catering SAC 996335). 5% flat (composition).</li></ul>
                <p style="margin-top:16px;"><strong>Alcohol:</strong></p>
                <ul><li>Not under GST. Maharashtra state excise and VAT. Split billing mandatory for restaurants serving both food and alcohol.</li></ul>
                <p style="margin-top:16px;"><strong>Mumbai:</strong> 4 Commissionerate zones. 80,000+ food establishments. <a href="https://gst.gov.in" target="_blank" rel="noopener">GST Portal</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Restaurant GST Returns in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about GST office, restaurant rates, Swiggy/Zomato GST, ITC eligibility, composition scheme, bill calculation, cloud kitchen registration, and takeaway GST.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Mumbai', 'enquiryService' => 'Restaurant GST Returns in Mumbai'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles restaurant returns in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>GST returns are filed online at gst.gov.in. The jurisdictional GST Commissionerate East West Central or South is determined by the restaurant registered address. Bandra restaurants typically fall under Mumbai West while Fort and Colaba fall under Mumbai South. Patron Marine Lines office handles filings for restaurants across all four Mumbai zones.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the GST rate for restaurants in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Most standalone restaurants charge 5 percent GST with 2.5 percent CGST plus 2.5 percent SGST without ITC. Restaurants in hotels with room tariff Rs 7,500 or above charge 18 percent with ITC. Outdoor catering is taxed at 18 percent with ITC. Composition scheme restaurants pay 5 percent flat. These rates apply uniformly across Mumbai regardless of AC or non-AC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Does Swiggy or Zomato pay GST for my restaurant?</h3>
                        <div class="faq-expanded__a"><p>Yes under Section 9(5) food delivery aggregators like Swiggy and Zomato are deemed the supplier for restaurant services and pay 5 percent GST on orders placed through their platforms. The restaurant does not collect GST on these orders. However for direct orders including walk-in phone and own website the restaurant must charge and collect GST itself.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can restaurants claim Input Tax Credit?</h3>
                        <div class="faq-expanded__a"><p>Only restaurants charging 18 percent GST which includes hotel restaurants with room tariff Rs 7,500 plus and outdoor caterers can claim ITC on ingredients rent equipment and services. Restaurants charging 5 percent GST cannot claim ITC as the lower rate is conditioned on foregoing ITC. Composition scheme restaurants also cannot claim ITC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is composition scheme better for Mumbai restaurants?</h3>
                        <div class="faq-expanded__a"><p>Both regular 5 percent and composition 5 percent have the same effective rate. Composition offers simpler quarterly filing CMP-08 plus GSTR-4 instead of monthly returns. However composition restaurants cannot serve alcohol make inter-state supplies or issue tax invoices. For small Mumbai eateries with turnover under Rs 1.5 crore and purely local operations composition reduces compliance burden.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is GST calculated on a restaurant bill in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>GST is calculated on the total value of food and non-alcoholic beverages before adding GST. If a restaurant bill for food is Rs 2,000 and the rate is 5 percent then GST is Rs 100 with Rs 50 CGST plus Rs 50 SGST making total Rs 2,100. Alcohol is billed separately under Maharashtra state VAT and excise. Service charge is not part of the GST base.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does a cloud kitchen in Mumbai need GST registration?</h3>
                        <div class="faq-expanded__a"><p>Yes if aggregate turnover exceeds Rs 20 lakh. Even if most sales are through Swiggy and Zomato where the aggregator pays GST under Section 9(5) the cloud kitchen must register if total turnover crosses the threshold. Direct sales through own website or app require the kitchen to charge GST itself.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What about GST on takeaway food in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Takeaway food from a restaurant is taxed at the same rate as dine-in food which is 5 percent for standalone restaurants and 18 percent for specified premises hotel restaurants. The mode of consumption dine-in vs takeaway does not change the GST rate for restaurant services. Pre-packaged items like bottled water may attract different rates.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Restaurant mein GST kitna lagta hai?</strong> Standalone: 5% (ITC nahi). Hotel (room Rs 7,500+): 18% (ITC milta). Composition: 5% flat. Swiggy/Zomato pe aggregator 5% GST pay karta hai S.9(5) ke under.</p>
                <p><strong>Kaunsa return file karna hota hai?</strong> Regular: GSTR-1 (11th) + GSTR-3B (20th). Composition: CMP-08 (18th quarterly) + GSTR-4 (30 April). Cloud kitchen pe aggregator pays.</p>
                <p><strong>Alcohol pe GST lagta hai kya?</strong> Nahi. Alcohol GST se bahar. Maharashtra excise/VAT lagta hai. Food pe GST + alcohol pe VAT = split billing.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Every Month - Or Lose Your Listing</h2>
            <div class="content-text">
                
                <p>Missing GST returns = Rs 100/day late fee + 18% interest. GSTIN suspension after 2 months = no tax invoices = Swiggy/Zomato de-listing (require active GSTIN) = FDA inspection complications. With POS data analytics and aggregator platform data cross-verification, under-reporting is increasingly detectable. Mumbai's 80,000+ restaurants must file accurately and on time.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20restaurant%20GST%20filing%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Right - Keep Your Kitchen Running</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Restaurant GST in Mumbai covers 5-star hotels at 18% with ITC, standalone dining at 5% without ITC, cloud kitchens under Section 9(5), composition at 5% flat, and split billing for bars. Each format has specific obligations.</p>
                <p style="color:rgba(255,255,255,0.9);">Swiggy/Zomato reconciliation, POS data extraction, alcohol split billing, FSSAI+GST consistency - Mumbai's restaurant compliance requires industry-specific expertise.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron provides scheme selection, POS configuration, monthly filing with 3-day buffer, aggregator reconciliation, and FSSAI+GST bundle from Marine Lines. 10,000+ businesses, 4.9 rating, 15+ years.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20restaurant%20GST%20filing%20in%20Mumbai.%20Please%20help." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Restaurant%20GST%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20restaurant%20GST%20filing%20in%20Mumbai.%0A%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Restaurant GST Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides restaurant GST filing services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Restaurant GST compliance</div>
                <div class="pa-city-grid">
                    <a href="/gst-returns-for-restaurants-food-businesses/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/gst-returns-for-restaurants-food-businesses/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">Food business compliance</div>
                <div class="pa-cross-grid">
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/fssai-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/fssai-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Returns</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/shop-act-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Shop Act</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers GST returns for restaurants in Mumbai. Content reviewed quarterly (Freshness Tier 1) as rates, composition rules, and Section 9(5) provisions evolve.</p>
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


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
     function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
initSlick(slider);


}

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered - init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
