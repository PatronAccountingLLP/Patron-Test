
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
    <title>FSSAI Registration Online - Process, Documents & FoSCoS</title>
    <meta name="description" content="Apply for FSSAI Registration online. Basic Registration Rs 100/year, State Licence Rs 2,000-5,000, Central Licence Rs 7,500. 14-digit food licence number.">
    <link rel="canonical" href="/fssai-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FSSAI Registration Online - Process, Documents & FoSCoS">
    <meta property="og:description" content="Apply for FSSAI Registration online. Basic Registration Rs 100/year, State Licence Rs 2,000-5,000, Central Licence Rs 7,500. 14-digit food licence number.">
    <meta property="og:url" content="/fssai-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FSSAI Registration Online - Process, Documents & FoSCoS">
    <meta name="twitter:description" content="Apply for FSSAI Registration online. Basic Registration Rs 100/year, State Licence Rs 2,000-5,000, Central Licence Rs 7,500. 14-digit food licence number.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "FSSAI Registration in India: Process, Fees and Types",
          "description": "Apply for FSSAI Registration online. Basic Registration Rs 100/year, State Licence Rs 2,000-5,000, Central Licence Rs 7,500. 14-digit food licence number.",
          "url": "https://www.patronaccounting.com/fssai-registration",
          "serviceType": "FSSAI Registration in India: Process, Fees and Types",
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
            "url": "https://www.patronaccounting.com/fssai-registration",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "12",
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
              "name": "FSSAI Registration in India: Process, Fees and Types",
              "item": "https://www.patronaccounting.com/fssai-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is FSSAI registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "FSSAI Registration is the mandatory food safety licence required for every Food Business Operator (FBO) in India under Section 31 of the Food Safety and Standards Act, 2006. It covers all food-related activities - manufacturing, processing, storage, distribution, sale, and import. Upon registration, the FBO receives a unique 14-digit licence number through the FoSCoS portal. Three tiers: Basic Registration (up to Rs 12 lakh), State Licence (Rs 12 lakh to Rs 20 crore), and Central Licence (above Rs 20 crore)."
              }
            },
            {
              "@type": "Question",
              "name": "How to apply for FSSAI registration online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Register on the FoSCoS portal (foscos.fssai.gov.in), create login credentials, select your business type, fill Form A (Basic) or Form B (State/Central), upload documents (identity proof, business registration, address proof, food product list), pay the government fee online, and submit. Basic Registration is typically issued within 7 days. State and Central Licences take 30-60 days including inspection."
              }
            },
            {
              "@type": "Question",
              "name": "FSSAI registration kaise karaye - food licence kaise banaye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "FSSAI registration ke liye foscos.fssai.gov.in par jaaye aur account banaye. Apna business type select karo - restaurant, manufacturer, home food business, ya importer. Form A (Basic, Rs 12 lakh se kam turnover) ya Form B (State/Central, Rs 12 lakh se zyada turnover) bharo. Documents upload karo - Aadhaar, PAN, business proof, food product list. Government fee Rs 100/year (Basic) ya Rs 2,000-7,500 (State/Central) pay karo. Patron Accounting poora process handle karta hai - call karo +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between FSSAI registration and FSSAI licence?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "'FSSAI Registration' refers to the Basic Registration for small FBOs with turnover up to Rs 12 lakh using Form A - simpler process without inspection. 'FSSAI Licence' refers to State Licence and Central Licence for medium and large FBOs using Form B with detailed documentation and premises inspection. In common usage, 'FSSAI registration' is an umbrella term covering all three tiers."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not having FSSAI licence?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 63 of the FSS Act, 2006, any person who operates a food business without a valid FSSAI licence faces up to 6 months imprisonment and a fine of up to Rs 5 lakh. E-commerce platforms (Swiggy, Zomato, Amazon) also delist or suspend food businesses without a valid 14-digit FSSAI number. Late renewal attracts a penalty of Rs 100 per day of delay."
              }
            },
            {
              "@type": "Question",
              "name": "Is FSSAI registration mandatory for home food business?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Any food business in India - including home kitchens, home bakers, tiffin services, and homemade pickle/snack sellers - must obtain at minimum Basic FSSAI Registration under Section 31. If annual turnover is under Rs 12 lakh, Basic Registration (Form A, Rs 100/year govt fee) is sufficient. Once turnover exceeds Rs 12 lakh, you must upgrade to a State Licence."
              }
            },
            {
              "@type": "Question",
              "name": "Ghar se food business start karne ke liye FSSAI zaruri hai kya?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Haan, bilkul zaruri hai. Ghar se cake, pickle, snack, tiffin, ya koi bhi food product bechne ke liye Basic FSSAI Registration chahiye. Agar aapka annual turnover Rs 12 lakh se kam hai toh Form A bharo aur Rs 100/year govt fee do. Yeh foscos.fssai.gov.in par online hota hai. Bina FSSAI ke Swiggy, Zomato, Amazon par listing nahi hogi aur Section 63 ke tahat Rs 5 lakh tak fine aur 6 mahine ki jail ho sakti hai."
              }
            },
            {
              "@type": "Question",
              "name": "How long does FSSAI registration take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Basic Registration is typically issued within 7 working days of application on FoSCoS - no inspection required. State Licence takes 30-60 days including document scrutiny and premises inspection by the Food Safety Officer. Central Licence also takes 30-60 days including inspection by the FSSAI regional office. Patron Accounting prepares and files within 2-3 working days of receiving your documents. Quick Answers Q: Can I apply for 5-year FSSAI at once? A: Yes. FSSAI allows 1-5 year validity. Government fee is multiplied by years chosen. 5-year licence reduces annual renewal hassle. Q: Separate FSSAI for each location? A: Yes. Each food premises needs a separate FSSAI. Multi-location businesses need one per location plus a Central Licence for the head office. Q: Can I upgrade from Basic to State? A: Yes. As turnover grows beyond Rs 12 lakh, upgrade through FoSCoS portal. Patron Accounting handles the upgrade process. Q: What is the annual return deadline? A: Form D-1 by 31 May each year. See FSSAI Returns ."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
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
                        FSSAI Registration in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>3 Tiers:</span> Basic Registration (up to Rs 12L), State Licence (Rs 12L-20Cr), and Central Licence (Rs 20Cr+). All filed through the FoSCoS portal.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Fees:</span> Rs 100/year (Basic), Rs 2,000-5,000/year (State), Rs 7,500/year (Central). Validity 1 to 5 years.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 days for Basic Registration. 30-60 days for State and Central Licences including inspection.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>14-Digit Licence:</span> Unique FSSAI number required on all food labels, packages, and premises. Mandatory for Swiggy, Zomato, and Amazon listings.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Registration&body=Hello%2C%0A%0AI%20need%20FSSAI%20food%20licence.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20FSSAI%20Registration.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FSSAI Registration',
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
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Got our FSSAI State Licence for our restaurant in just 25 days. Patron Accounting prepared us for the inspection perfectly - the Food Safety Officer had zero issues. Also helped set up our Swiggy and Zomato listings with the 14-digit number.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kulkarni</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Restaurant Owner, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Started a home baking business and had no idea about FSSAI requirements. Patron Accounting explained the Basic Registration process, filed Form A on FoSCoS, and got my licence in 5 days. Now I can sell on Instagram and WhatsApp legally.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Agarwal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Home Baker, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our food export company needed a Central FSSAI Licence urgently for customs clearance. Patron Accounting coordinated with the FSSAI regional office and got our licence in 35 days. They also helped with the IE Code coordination. Excellent end-to-end support.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Manoj Khanna</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Food Exporter, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We operate 3 cloud kitchens in Bangalore and needed separate FSSAI licences for each location. Patron Accounting handled all 3 applications simultaneously and coordinated inspections for each premises. All licences received within 40 days. Very efficient.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SN</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sanjay Nair</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Cloud Kitchen Operator, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our D2C snack brand needed FSSAI for Amazon and our own website. Patron Accounting identified that we needed State Licence (not Basic) based on our projected turnover. They also handled the water test report coordination and FSMS plan preparation. Complete solution.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ananya Deshmukh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">D2C Food Brand Founder, Hyderabad</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get your FSSAI registration for restaurants, cloud kitchens, food startups, manufacturers, and home food businesses.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is FSSAI</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">6-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Basic vs State vs Central</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Registration - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FSSAI Registration Services at a Glance</strong></p>
                    <p>FSSAI Registration is mandatory for every Food Business Operator (FBO) in India under Section 31 of the Food Safety and Standards Act, 2006. FSSAI issues a unique 14-digit licence number through the FoSCoS portal (foscos.fssai.gov.in). Three tiers: Basic Registration (turnover up to Rs 12 lakh, Rs 100/year, Form A), State Licence (Rs 12 lakh to Rs 20 crore, Rs 2,000-5,000/year, Form B), Central Licence (above Rs 20 crore, Rs 7,500/year, Form B). Operating without FSSAI attracts up to 6 months imprisonment and Rs 5 lakh fine.</p>
                </div>
                <p>Every food business in India - from a home kitchen selling cakes on Instagram to a multi-state food manufacturing company - needs FSSAI registration or licensing. The Food Safety and Standards Authority of India (FSSAI), under the Ministry of Health and Family Welfare, regulates food safety across the entire supply chain. With cloud kitchens, D2C food brands, Swiggy/Zomato listings, and online marketplaces, FSSAI compliance is the gateway to doing business.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>Food Safety and Standards Act, 2006; FSS (L&R) Regulations, 2011</td></tr>
<tr><td>3 Tiers</td><td>Basic (up to Rs 12L) | State (Rs 12L-20Cr) | Central (Rs 20Cr+)</td></tr>
<tr><td>Application Forms</td><td>Form A (Basic) | Form B (State and Central)</td></tr>
<tr><td>Govt Fee Range</td><td>Rs 100/year (Basic) to Rs 7,500/year (Central)</td></tr>
<tr><td>Filing Portal</td><td><a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS - foscos.fssai.gov.in</a></td></tr>
<tr><td>Validity</td><td>1 to 5 years (chosen by FBO at application)</td></tr>
<tr><td>Penalty (No Licence)</td><td>Section 63: Up to 6 months imprisonment + up to Rs 5 lakh fine</td></tr>
</tbody></table></div></p>
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
                <h2 class="section-title">What Is FSSAI Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>FSSAI Registration is the process by which Food Business Operators (FBOs) obtain a food safety licence from the <a href="https://fssai.gov.in" target="_blank" rel="noopener">Food Safety and Standards Authority of India (FSSAI)</a> as mandated by <strong>Section 31 of the Food Safety and Standards Act, 2006</strong>.</p>
<p>Section 31(1) states that no person shall commence or carry on any food business except under a licence or registration. The FSS (Licensing and Registration) Regulations, 2011 specify who needs Basic Registration, State Licence, or Central Licence based on annual turnover, production capacity, and business nature.</p>
<p>Upon successful registration, the FBO receives a <strong>unique 14-digit FSSAI licence number</strong> that must be displayed on all food packages, labels, and at the business premises. The <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS (Food Safety Compliance System)</a> portal is the single online platform for all FSSAI applications.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FSSAI Registration:</strong></p>
                    <p><strong>Food Business Operator (FBO):</strong> Any person carrying on a food business - manufacturing, processing, packaging, storage, transportation, distribution, sale, and import. [Section 3(n)]</p>
<p><strong>Basic Registration:</strong> For small FBOs with turnover up to Rs 12 lakh. Covers home food businesses, hawkers, petty retailers, small manufacturers (1-100 kg/day). Form A on FoSCoS.</p>
<p><strong>State Licence:</strong> For FBOs with turnover Rs 12 lakh to Rs 20 crore. Covers restaurants, medium manufacturers, storage units, single-state distributors. Form B on FoSCoS.</p>
<p><strong>Central Licence:</strong> For FBOs with turnover above Rs 20 crore. Also mandatory for importers, exporters, multi-state operators, airports, seaports, and railways. Form B on FoSCoS.</p>
<p><strong>14-Digit Licence Number:</strong> Unique identification issued upon registration. Must be displayed on food labels, packages, and premises. Required by Swiggy, Zomato, Amazon for listing.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- FSSAI Registration -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Registration</text>
                            <!-- FSSAI Logo placeholder -->
                            <circle cx="100" cy="62" r="20" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <text x="100" y="58" font-size="9" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">FSSAI</text>
                            <text x="100" y="70" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">14-Digit</text>
                            <!-- 3 tier badges -->
                            <rect x="40" y="95" width="35" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="57" y="106" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Basic</text>
                            <rect x="82" y="95" width="35" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="99" y="106" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">State</text>
                            <rect x="124" y="95" width="35" height="16" rx="4" fill="#F5A623" opacity="0.6"/>
                            <text x="141" y="106" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Central</text>
                            <!-- Check badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Food Licence</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FSS Act, 2006</span>
                        <strong>14-Digit Food Licence</strong>
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
            <h2 class="section-title">Who Needs FSSAI Registration?</h2>
            <div class="content-text">
                
                <p>Every food business in India needs FSSAI registration or licensing:</p>
<ul>
<li><strong>Restaurants and Hotels:</strong> Every restaurant, dhaba, fast food outlet, and hotel serving food needs at minimum a State FSSAI Licence based on turnover.</li>
<li><strong>Cloud Kitchens:</strong> Delivery-only kitchens on Swiggy, Zomato need FSSAI. Each kitchen location requires a separate licence.</li>
<li><strong>Home Food Businesses:</strong> Home chefs selling cakes, pickles, snacks, tiffin via Instagram, WhatsApp need Basic Registration if turnover under Rs 12 lakh.</li>
<li><strong>Food Manufacturers:</strong> Entities manufacturing packaged snacks, beverages, dairy, bakery, frozen foods. Licence type depends on capacity and turnover.</li>
<li><strong>Food Importers and Exporters:</strong> Mandatory Central Licence regardless of turnover. Required for customs clearance of every import consignment.</li>
<li><strong>Caterers:</strong> Companies serving food at weddings, corporate events, and institutional canteens.</li>
<li><strong>Food Distributors, Transporters, Wholesalers:</strong> Businesses in storage, transportation, and wholesale distribution of food products.</li>
<li><strong>Street Food Vendors and Hawkers:</strong> Petty vendors, food carts, juice stalls need Basic Registration.</li>
<li><strong>E-Commerce Food Sellers:</strong> Online food businesses on Amazon, Flipkart, or D2C platforms. FSSAI number mandatory for product listing.</li>
</ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 FSSAI Registration Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Basic FSSAI Registration (Form A)</td><td>Complete application drafting and filing on <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS</a> for home food businesses, small manufacturers, hawkers, and petty retailers with turnover under Rs 12 lakh.</td></tr>
<tr><td>State FSSAI Licence (Form B)</td><td>End-to-end filing for restaurants, medium manufacturers, distributors, and storage units (Rs 12L-20Cr turnover). Includes document preparation, FoSCoS submission, and inspection coordination.</td></tr>
<tr><td>Central FSSAI Licence (Form B)</td><td>Filing for large manufacturers, importers, exporters, and multi-state operators (Rs 20Cr+). Includes IE Code coordination and FSSAI regional office liaison. See <a href="/fssai-central-license">Central Licence</a>.</td></tr>
<tr><td>FSSAI Modification and Upgrade</td><td>Modifying licence details (address, products, capacity) and upgrading from Basic to State or State to Central as business grows.</td></tr>
<tr><td>FSSAI Renewal</td><td>Timely renewal before expiry - preventing Rs 100/day late fee and licence cancellation. See <a href="/fssai-renewal">FSSAI Renewal</a>.</td></tr>
<tr><td>FSSAI Annual Returns (Form D-1)</td><td>Filing of mandatory annual returns by 31 May each year. See <a href="/fssai-returns">FSSAI Returns</a>.</td></tr>

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
            <h2 class="section-title">6-Step Process for FSSAI Registration</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete FSSAI registration process - from category assessment to 14-digit licence number issuance. Wrong category selection is the #1 rejection reason.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine the Correct FSSAI Licence Type</h3><p class="step-description">Identify whether your business needs Basic Registration, State Licence, or Central Licence based on annual turnover, production capacity, and business nature. This is the most critical step - wrong category is the #1 rejection reason (60%+ of FoSCoS applications face issues due to this).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Category assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Correct tier selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="25" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="34" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Basic</text><rect x="52" y="22" width="25" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="64" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">State</text><rect x="82" y="22" width="25" height="12" rx="3" fill="#F5A623" opacity="0.6"/><text x="94" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Central</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Tier Selected</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Create Account on FoSCoS Portal</h3><p class="step-description">Register on foscos.fssai.gov.in with a valid email ID, mobile number, and PAN. You will receive login credentials to access the application dashboard.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FoSCoS account</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">foscos.fssai.gov.in</text><rect x="25" y="48" width="40" height="8" rx="2" fill="#14365F" opacity="0.1"/><rect x="25" y="60" width="50" height="8" rx="2" fill="#F5A623" opacity="0.3"/></svg></div><span class="illustration-label">Account Ready</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Fill the Application Form</h3><p class="step-description">For Basic: Fill Form A with business details, food category, premises info. For State/Central: Fill Form B with detailed food products, manufacturing process, production capacity, machinery, water source, waste disposal, and food safety plan.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form A or B filled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All details complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Form Filed</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Upload Documents and Pay Fee</h3><p class="step-description">Upload all required documents. Pay government fee online: Rs 100/year (Basic), Rs 2,000-5,000/year (State), Rs 7,500/year (Central). Fee depends on licence type and validity period (1-5 years).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fee paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 100-7,500</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Fee Paid</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Inspection (State and Central Only)</h3><p class="step-description">Food Safety Officer may inspect food premises to verify hygiene, equipment, storage, and compliance with Schedule 4 (GMP and GHP requirements). Basic Registration typically does not require inspection.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Inspection passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GMP/GHP compliant</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="35" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="45" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Inspection Done</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">14-Digit Licence Number Issued</h3><p class="step-description">FSSAI issues the registration certificate with unique 14-digit licence number. Certificate sent to registered email. Number must be displayed on all food labels, packages, invoices, and at business premises.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 14-digit number</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="30" y="25" width="60" height="18" rx="4" fill="#25D366" opacity="0.15"/><text x="60" y="37" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">FSSAI</text><rect x="30" y="48" width="60" height="12" rx="3" fill="#FFF3E0"/><text x="60" y="57" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">14-DIGIT LICENCE</text><path d="M52 68l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Licence Issued</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FSSAI Registration</h2>
            <div class="content-text">
                
                <p><strong>For Basic Registration (Form A):</strong></p>
<ul>
<li>Aadhaar Card of the FBO/proprietor</li>
<li>PAN Card</li>
<li>Passport-size photograph</li>
<li>Business address proof (utility bill, rent agreement, or property documents)</li>
<li>List of food products to be manufactured/sold</li>
</ul>
<p><strong>For State and Central Licence (Form B) - all above plus:</strong></p>
<ul>
<li>Business entity registration (Incorporation Certificate / LLP Agreement / Partnership Deed / GST Registration)</li>
<li>MOA and AOA (for companies) or Partnership Deed (for firms)</li>
<li>Food Safety Management System plan (FSMS) or declaration</li>
<li>Layout plan of food processing unit with equipment details</li>
<li>Water test report from a recognised laboratory</li>
<li>List of machinery and equipment used</li>
<li>List of food products with brand name(s)</li>
<li>IE Code (for importers and exporters)</li>
<li>Authority letter on company letterhead for the authorised signatory</li>
<li>NOC from local body (municipality/panchayat) if applicable</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FSSAI Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Wrong Category Selection</td><td>Choosing Basic vs State vs Central incorrectly is the #1 rejection reason (60%+ of FoSCoS applications)</td><td>Detailed turnover and business-nature assessment before filing. We consider current turnover AND projected growth to recommend the right tier.</td></tr>
<tr><td>Document Mismatch</td><td>Application details (name, address, entity type) not matching supporting documents causes rejection</td><td>We cross-verify every detail across Aadhaar, PAN, GST, and rent agreement before submission.</td></tr>
<tr><td>Inspection Delays</td><td>Food Safety Officer may schedule inspection at a later date, delaying State and Central Licences</td><td>We prepare the premises checklist in advance - GMP, GHP, equipment hygiene, water testing, pest control, waste disposal documentation.</td></tr>
<tr><td>E-Commerce Platform Delisting</td><td>Swiggy, Zomato, Amazon suspend listings for expired/invalid FSSAI numbers</td><td>Renewal tracking 60 days before expiry. Seamless renewal process to prevent any business disruption on platforms.</td></tr>

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
            <h2 class="section-title">FSSAI Registration and Licence Fees in 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Registration (1 year)</td><td class="table-amount">Rs 100/year govt fee | Rs 2,899 service fee</td></tr>
<tr><td>Basic Registration (5 years)</td><td class="table-amount">Rs 500 total govt fee | Rs 2,899 service fee</td></tr>
<tr><td>State Licence (1 year)</td><td class="table-amount">Rs 2,000-5,000/year govt fee | Rs 4,999-7,999 service fee</td></tr>
<tr><td>State Licence (5 years)</td><td class="table-amount">Rs 10,000-25,000 total govt fee | Rs 4,999-7,999 service fee</td></tr>
<tr><td>Central Licence (1 year)</td><td class="table-amount">Rs 7,500/year govt fee | Rs 7,999-14,999 service fee</td></tr>
<tr><td>FSSAI Modification</td><td class="table-amount">Nil to Rs 1,000 govt fee | Rs 2,499 service fee</td></tr>
<tr><td>FSSAI Renewal</td><td class="table-amount">Same as original licence | Rs 2,499-4,999 service fee</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FSSAI Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20FSSAI%20food%20licence.%20Please%20call%20me%20back." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does FSSAI Registration Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Application preparation by Patron Accounting</td><td>2-3 working days</td></tr>
<tr><td>Basic Registration (FoSCoS processing)</td><td>7 working days (no inspection)</td></tr>
<tr><td>State Licence (scrutiny + inspection)</td><td>30-60 days</td></tr>
<tr><td>Central Licence (scrutiny + inspection)</td><td>30-60 days</td></tr>
<tr><td><strong>Patron Accounting target: Basic</strong></td><td><strong>7 days from document receipt</strong></td></tr>
<tr><td><strong>Patron Accounting target: State/Central</strong></td><td><strong>30 days from document receipt</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Basic Registration typically does not require inspection and is issued within 7 working days. State and Central Licences require premises inspection by a Food Safety Officer. Delays may occur if the officer schedules inspection at a later date. Patron Accounting prepares the premises checklist in advance for smooth first-time inspection.</p>

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
            <h2 class="section-title">5 Benefits of FSSAI Registration</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Legal Compliance</h3><p class="feature-text">FSSAI is mandatory under Section 31. Operating without it attracts up to 6 months imprisonment and Rs 5 lakh fine under Section 63. Registration eliminates this risk.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">E-Commerce and Marketplace Access</h3><p class="feature-text">Swiggy, Zomato, Amazon, Flipkart, and BigBasket mandate a valid 14-digit FSSAI number. Without it, your food products cannot be listed on any major platform.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Consumer Trust and Brand Building</h3><p class="feature-text">The FSSAI logo and 14-digit number on packaging signals government-verified food safety compliance, building consumer confidence and differentiating your brand.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Loan and Investor Readiness</h3><p class="feature-text">Banks and investors require FSSAI as a basic compliance document for food business loans and funding. MUDRA, PMEGP, and other government schemes mandate FSSAI.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Legal Protection Against Claims</h3><p class="feature-text">A valid FSSAI licence demonstrates your food business meets prescribed safety standards - providing legal defence against false adulteration or quality complaints.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Business Growth Enabler</h3><p class="feature-text">FSSAI is the gateway to food business growth - enabling online sales, government tenders, institutional contracts, and multi-state expansion. Required for export IE Code.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India with FSSAI, GST, and compliance services.</p>
<p><strong>50,000+ Documents Filed</strong> on government portals including FoSCoS, MCA, Income Tax, and GST.</p>
<p><strong>4.9 Google Rating</strong> based on verified client reviews for professional service quality.</p>
<p><strong>15+ Years of Practice</strong> with deep expertise in food business compliance, FSSAI, and regulatory requirements.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram - serving food businesses across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Basic Registration vs State Licence vs Central Licence</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Basic Registration</th><th>State Licence</th><th>Central Licence</th></tr></thead>
                    <tbody>
                        <tr><td>Annual Turnover</td><td>Up to Rs 12 lakh</td><td>Rs 12 lakh to Rs 20 crore</td><td>Above Rs 20 crore</td></tr>
<tr><td>Application Form</td><td>Form A</td><td>Form B</td><td>Form B</td></tr>
<tr><td>Issuing Authority</td><td>District Food Safety Officer</td><td>State Food Safety Authority</td><td>FSSAI Regional Office</td></tr>
<tr><td>Government Fee</td><td>Rs 100/year</td><td>Rs 2,000-5,000/year</td><td>Rs 7,500/year</td></tr>
<tr><td>Inspection Required</td><td>No (typically)</td><td>Yes</td><td>Yes</td></tr>
<tr><td>Processing Time</td><td>7 days</td><td>30-60 days</td><td>30-60 days</td></tr>
<tr><td>Who Needs It</td><td>Home food, hawkers, petty retailers, small mfrs (1-100 kg/day)</td><td>Restaurants, medium mfrs, storage, single-state distributors</td><td>Large mfrs, importers, exporters, multi-state, airports/seaports</td></tr>
<tr><td>Annual Return</td><td>Form D-1 by 31 May</td><td>Form D-1 by 31 May</td><td>Form D-1 by 31 May</td></tr>

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
            <h2 class="section-title">Related FSSAI and Business Registration Services</h2>
            <div class="content-text">
                
                <p>FSSAI registration works best as part of your complete business compliance setup:</p>
<ul>
<li><strong><a href="/fssai-central-license">FSSAI Central License</a></strong> - For large manufacturers, importers, exporters, and multi-state food businesses.</li>
<li><strong><a href="/fssai-state-license">FSSAI State License</a></strong> - For restaurants, medium manufacturers, and single-state food businesses.</li>
<li><strong><a href="/fssai-renewal">FSSAI Renewal</a></strong> - Timely renewal to prevent Rs 100/day late fee and platform delisting.</li>
<li><strong><a href="/fssai-returns">FSSAI Returns (Form D-1)</a></strong> - Mandatory annual return filing by 31 May each year.</li>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - Mandatory for food businesses with turnover above Rs 40 lakh (Rs 20 lakh for services).</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for FSSAI Registration in India</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Food Safety and Standards Act, 2006; FSS (Licensing and Registration of Food Businesses) Regulations, 2011.</p>
<p><strong>Key Sections:</strong></p>
<ul>
<li><strong>Section 3(n):</strong> Defines 'food business' - any food-related undertaking (manufacture, processing, packaging, storage, transport, distribution, sale, import).</li>
<li><strong>Section 31(1):</strong> No person shall commence or carry on food business except under licence or registration.</li>
<li><strong>Section 32:</strong> Power of <a href="https://fssai.gov.in" target="_blank" rel="noopener">FSSAI</a> to issue food safety standards, regulations, and guidelines.</li>
</ul>
<p><strong>Penalty Provisions:</strong></p>
<ul>
<li><strong>Section 59:</strong> Unsafe food - (a) no injury: 6 months + Rs 1 lakh; (b) non-grievous injury: 1 year + Rs 3 lakh; (c) grievous injury: 6 years + Rs 5 lakh; (d) death: minimum 7 years (up to life imprisonment) + minimum Rs 10 lakh.</li>
<li><strong>Section 63:</strong> Operating without licence - up to 6 months imprisonment + up to Rs 5 lakh fine.</li>
<li><strong>Section 64:</strong> Repeat offences - double punishment; up to Rs 1 lakh per day for continuing offence.</li>
<li><strong>Section 66:</strong> Company offences - directors/officers personally liable.</li>
</ul>
<p><strong>Additional Penalties:</strong> Section 50 (food not of demanded quality - up to Rs 5 lakh), Section 51 (sub-standard - up to Rs 5 lakh), Section 52 (misbranded - up to Rs 3 lakh), Section 53 (misleading ads - up to Rs 10 lakh).</p>
<p><strong>Regulatory:</strong> <a href="https://fssai.gov.in" target="_blank" rel="noopener">FSSAI</a>, Ministry of Health and Family Welfare. Portal: <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS</a>. Full Act: <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a>.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - FSSAI Registration</h2>
                    <p class="faq-expanded__lead">Answers about FSSAI registration process, fees, licence types, penalties, home food business requirements, and online application.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FSSAI Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is FSSAI registration?</h3>
                        <div class="faq-expanded__a"><p>FSSAI Registration is the mandatory food safety licence required for every Food Business Operator (FBO) in India under Section 31 of the Food Safety and Standards Act, 2006. It covers all food-related activities - manufacturing, processing, storage, distribution, sale, and import. Upon registration, the FBO receives a unique 14-digit licence number through the FoSCoS portal. Three tiers: Basic Registration (up to Rs 12 lakh), State Licence (Rs 12 lakh to Rs 20 crore), and Central Licence (above Rs 20 crore).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to apply for FSSAI registration online?</h3>
                        <div class="faq-expanded__a"><p>Register on the FoSCoS portal (foscos.fssai.gov.in), create login credentials, select your business type, fill Form A (Basic) or Form B (State/Central), upload documents (identity proof, business registration, address proof, food product list), pay the government fee online, and submit. Basic Registration is typically issued within 7 days. State and Central Licences take 30-60 days including inspection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">FSSAI registration kaise karaye - food licence kaise banaye?</h3>
                        <div class="faq-expanded__a"><p>FSSAI registration ke liye foscos.fssai.gov.in par jaaye aur account banaye. Apna business type select karo - restaurant, manufacturer, home food business, ya importer. Form A (Basic, Rs 12 lakh se kam turnover) ya Form B (State/Central, Rs 12 lakh se zyada turnover) bharo. Documents upload karo - Aadhaar, PAN, business proof, food product list. Government fee Rs 100/year (Basic) ya Rs 2,000-7,500 (State/Central) pay karo. Patron Accounting poora process handle karta hai - call karo +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between FSSAI registration and FSSAI licence?</h3>
                        <div class="faq-expanded__a"><p>'FSSAI Registration' refers to the Basic Registration for small FBOs with turnover up to Rs 12 lakh using Form A - simpler process without inspection. 'FSSAI Licence' refers to State Licence and Central Licence for medium and large FBOs using Form B with detailed documentation and premises inspection. In common usage, 'FSSAI registration' is an umbrella term covering all three tiers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not having FSSAI licence?</h3>
                        <div class="faq-expanded__a"><p>Under Section 63 of the FSS Act, 2006, any person who operates a food business without a valid FSSAI licence faces up to 6 months imprisonment and a fine of up to Rs 5 lakh. E-commerce platforms (Swiggy, Zomato, Amazon) also delist or suspend food businesses without a valid 14-digit FSSAI number. Late renewal attracts a penalty of Rs 100 per day of delay.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is FSSAI registration mandatory for home food business?</h3>
                        <div class="faq-expanded__a"><p>Yes. Any food business in India - including home kitchens, home bakers, tiffin services, and homemade pickle/snack sellers - must obtain at minimum Basic FSSAI Registration under Section 31. If annual turnover is under Rs 12 lakh, Basic Registration (Form A, Rs 100/year govt fee) is sufficient. Once turnover exceeds Rs 12 lakh, you must upgrade to a State Licence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Ghar se food business start karne ke liye FSSAI zaruri hai kya?</h3>
                        <div class="faq-expanded__a"><p>Haan, bilkul zaruri hai. Ghar se cake, pickle, snack, tiffin, ya koi bhi food product bechne ke liye Basic FSSAI Registration chahiye. Agar aapka annual turnover Rs 12 lakh se kam hai toh Form A bharo aur Rs 100/year govt fee do. Yeh foscos.fssai.gov.in par online hota hai. Bina FSSAI ke Swiggy, Zomato, Amazon par listing nahi hogi aur Section 63 ke tahat Rs 5 lakh tak fine aur 6 mahine ki jail ho sakti hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long does FSSAI registration take?</h3>
                        <div class="faq-expanded__a"><p>Basic Registration is typically issued within 7 working days of application on FoSCoS - no inspection required. State Licence takes 30-60 days including document scrutiny and premises inspection by the Food Safety Officer. Central Licence also takes 30-60 days including inspection by the FSSAI regional office. Patron Accounting prepares and files within 2-3 working days of receiving your documents.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Can I apply for 5-year FSSAI at once?</strong> A: Yes. FSSAI allows 1-5 year validity. Government fee is multiplied by years chosen. 5-year licence reduces annual renewal hassle.</p>
<p><strong>Q: Separate FSSAI for each location?</strong> A: Yes. Each food premises needs a separate FSSAI. Multi-location businesses need one per location plus a Central Licence for the head office.</p>
<p><strong>Q: Can I upgrade from Basic to State?</strong> A: Yes. As turnover grows beyond Rs 12 lakh, upgrade through FoSCoS portal. Patron Accounting handles the upgrade process.</p>
<p><strong>Q: What is the annual return deadline?</strong> A: Form D-1 by 31 May each year. See <a href="/fssai-returns">FSSAI Returns</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">No FSSAI = No Food Business - Register Today</h2>
            <div class="content-text">
                
                <p>Section 63 of the FSS Act makes operating without FSSAI punishable with up to 6 months imprisonment and Rs 5 lakh fine. Swiggy, Zomato, and Amazon will not list your food products without a valid 14-digit FSSAI number. Late renewal attracts Rs 100/day penalty.</p>
<p>Basic Registration costs just Rs 100/year in government fee. There is no reason to delay - register before you start selling.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20FSSAI%20registration.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation on which FSSAI tier you need.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your FSSAI Registration with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">FSSAI Registration is the foundational compliance requirement for every food business in India. Under Section 31 of the FSS Act, 2006, no food business can operate without it. The three-tier system ensures businesses of every size are covered - from home kitchens to multinational manufacturers.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting provides end-to-end FSSAI registration covering category assessment, FoSCoS application (Form A and Form B), document preparation, inspection coordination, licence issuance, modification, renewal, and annual return filing.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">15+ years of practice. 10,000+ businesses served. Offices in Pune, Mumbai, Delhi, and Gurugram. Starting from Rs 2,999. Contact us for a free consultation.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20FSSAI%20food%20licence.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Registration&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20FSSAI%20registration%20for%20my%20food%20business.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FSSAI Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert FSSAI registration for restaurants, cloud kitchens, food manufacturers, and home food businesses with local support.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/fssai-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fssai-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fssai-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/fssai-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/fssai-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/fssai-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/fssai-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/fssai-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete food business compliance</div><div class="pa-cross-grid"><a href="/fssai-central-license" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Central License</div><div class="pa-card-sub">India</div></div></a><a href="/fssai-state-license" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI State License</div><div class="pa-card-sub">India</div></div></a><a href="/fssai-renewal" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Renewal</div><div class="pa-card-sub">India</div></div></a><a href="/fssai-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Returns</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Content aligned with the Food Safety and Standards Act, 2006, FSS (L&R) Regulations, 2011, and current FoSCoS procedures. Next review: September 2026.</p>
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
    // CONFIGURATION  -  Update these values
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
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
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
        // Static cards already rendered  -  init Slick immediately
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
