
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
    <title>ITR for Property Sale - Capital Gains, Sec 54 & TDS 194IA</title>
    <meta name="description" content="File ITR for property sale in India. LTCG at 12.5% or 20% with indexation, Section 54 and 54EC exemptions, TDS under Section 194IA. CA help from Rs. 1,499.">
    <link rel="canonical" href="/itr-for-property-sale">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Property Sale - Capital Gains, Sec 54 & TDS 194IA">
    <meta property="og:description" content="File ITR for property sale in India. LTCG at 12.5% or 20% with indexation, Section 54 and 54EC exemptions, TDS under Section 194IA. CA help from Rs. 1,499.">
    <meta property="og:url" content="/itr-for-property-sale">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Property Sale - Capital Gains, Sec 54 & TDS 194IA">
    <meta name="twitter:description" content="File ITR for property sale in India. LTCG at 12.5% or 20% with indexation, Section 54 and 54EC exemptions, TDS under Section 194IA. CA help from Rs. 1,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ITR for Property Sale: CA Filing",
          "description": "File ITR for property sale in India. LTCG at 12.5% or 20% with indexation, Section 54 and 54EC exemptions, TDS under Section 194IA. CA help from Rs. 1,499.",
          "url": "https://www.patronaccounting.com/itr-for-property-sale",
          "serviceType": "ITR for Property Sale: CA Filing",
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
            "url": "https://www.patronaccounting.com/itr-for-property-sale",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "10",
              "maxPrice": "1499",
              "priceCurrency": "INR"
            }
          }
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Property Sale", "item": "https://www.patronaccounting.com/itr-for-property-sale" }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which ITR form for property sale?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ITR-2 for individuals and HUFs with capital gains from immovable property. ITR-1 cannot be used if you have any property capital gains. Use ITR-3 if you also have business income. Due date: 31 July 2026 for non-audit cases."
              }
            },
            {
              "@type": "Question",
              "name": "What is the LTCG tax rate on property sale FY 2025-26?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For property held more than 24 months: 12.5% flat without indexation for transfers on/after July 23, 2024 under Section 112. Resident individuals/HUFs with property acquired before July 23, 2024 can choose 20% with CII 363 indexation if it results in lower tax. STCG: slab rates."
              }
            },
            {
              "@type": "Question",
              "name": "How can I save capital gains tax on property sale?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Three legal routes: Section 54 - reinvest in residential house within 1yr before/2yr after sale or construct within 3yr (Rs 10 Cr cap). Section 54EC - invest in NHAI/REC/IRFC/PFC bonds within 6 months (Rs 50 lakh cap). Deposit in CGAS before July 31, 2026 if reinvestment pending."
              }
            },
            {
              "@type": "Question",
              "name": "What is TDS on property sale under Section 194IA?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Buyer deducts 1% TDS on property consideration above Rs 50 lakh. Filed via Form 26QB. Seller gets Form 16B. TDS appears in Form 26AS and must be claimed as credit in ITR-2 Schedule TDS2. Missing this credit causes excess tax payment. Refund available if TDS exceeds liability."
              }
            },
            {
              "@type": "Question",
              "name": "Can Section 54 be claimed if new house not yet purchased?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Deposit capital gains amount in a Capital Gains Account Scheme (CGAS) with a public sector bank before July 31, 2026 (ITR due date). Then complete purchase within 2 years or construction within 3 years. If funds not utilised in time, deposited amount becomes taxable LTCG."
              }
            },
            {
              "@type": "Question",
              "name": "How is inherited property taxed on sale?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Cost of acquisition = cost to previous owner. If acquired before April 1, 2001, use FMV on that date (capped at stamp duty value). Holding period includes time held by previous owner for LTCG classification. Same Section 54/54EC exemptions available. Budget 2024 dual-rate choice applies if pre-July 23, 2024 acquisition. Quick Answers LTCG rate? 12.5% without indexation (post July 23, 2024). Pre-July 23 acquisitions: residents can choose 20% with CII 363 if lower. Section 54 cap? Rs 10 crore from AY 2024-25. Section 54EC: Rs 50 lakh in NHAI/REC bonds within 6 months. TDS on sale? Buyer deducts 1% under Section 194IA above Rs 50 lakh. Claim credit in ITR-2. CGAS deadline? Before July 31, 2026. Missing forfeits Section 54 exemption entirely."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')

<div class="breadcrumb-wrap" style="max-width:1200px;margin:0 auto;padding:6px 20px 0;">
@include('partials.breadcrumbs', ['items' => [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Income Tax Return Filing', 'url' => '/income-tax-return'],
    ['name' => 'ITR for Property Sale', 'url' => '/itr-for-property-sale'],
]])
</div>

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
                        ITR for Property Sale - Expert CA Filing for LTCG and STCG on House, Land and Commercial Property India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Budget 2024:</span> LTCG at 12.5% without indexation for post-July 23, 2024 transfers. Pre-July 23 acquisitions: choose 12.5% or 20% with indexation - whichever is lower.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 194IA:</span> Buyer deducts 1% TDS on property above Rs 50 lakh. Must be reconciled in Form 26AS and claimed as credit in ITR-2. Failure causes excess tax payment.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Exemptions:</span> Section 54: reinvest in house (Rs 10 Cr cap). Section 54EC: NHAI/REC bonds within 6 months (Rs 50 lakh cap). CGAS deposit before ITR due date if pending.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> From Rs 1,499 for property sale ITR. 5,000+ clients annually. NRI Section 195 TDS, inherited property FMV, and CGAS advisory included.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">5,000+ clients annually including NRIs, inherited property sellers, and homeowners with 4.9/5 Google rating from 1,200+ reviews</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Property%20Sale%20ITR%20Help&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20property%20sale%20ITR%20help.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20ITR%20filing%20for%20property%20sale.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ITR for Property Sale',
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Sold our family home bought in 2008. Patron computed tax under both 12.5% and 20% with indexation - the 20% option saved us Rs 4.2 lakh. Also handled CGAS deposit and Section 54 claim flawlessly.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Homeowner, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">NRI in Dubai selling apartment in Mumbai. Buyer deducted 12.5% TDS on full Rs 1.8 crore. Patron computed actual LTCG at Rs 32 lakh, filed ITR-2, and helped me claim Rs 14 lakh TDS refund.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Patel</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">NRI, Dubai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Inherited ancestral property. Patron obtained registered valuer FMV for April 1, 2001, applied correct indexation from grandfather's acquisition year, and reduced taxable gain by Rs 28 lakh.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Inherited Property Seller, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Sold commercial shop and invested Rs 50 lakh in REC bonds under Section 54EC. Patron ensured bond purchase within the 6-month window and claimed exemption correctly in ITR-2. Zero tax on that portion.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PR</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Reddy</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Commercial Property Seller, Hyderabad</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron caught that our stamp duty value was Rs 12 lakh higher than sale price. They used the SDV as consideration to avoid a future demand notice. Attention to detail that DIY filing would never catch.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Karan Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Land Seller, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Expert property sale ITR - Budget 2024 dual-rate analysis, Section 54/54EC exemptions, 194IA TDS reconciliation, NRI compliance, and CGAS advisory.</p>
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">Capital Gains</a><a class="toc-btn" href="#who-section">Who Must File</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">9-Step Process</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Deadlines</a><a class="toc-btn" href="#benefits-section">Why CA Filing</a><a class="toc-btn" href="#comparison-section">DIY vs Patron</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Property Sale - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Property Sale Services at a Glance</strong></p>
                    <p>Property sale generates capital gains declared in ITR-2 under Schedule CG. Budget 2024 changed LTCG: 12.5% without indexation for post-July 23, 2024 transfers; grandfathering option for pre-July 23 acquisitions (choose 12.5% or 20% with indexation). STCG at slab rates. CII FY 2025-26 = 363. Section 54 cap Rs 10 crore. Section 194IA: 1% TDS by buyer above Rs 50 lakh. From Rs 1,499.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>LTCG Rate (post July 23, 2024)</td><td>12.5% flat without indexation (Section 112)</td></tr><tr><td>Grandfathering (pre-July 23, 2024)</td><td>Residents: choose 12.5% or 20% with indexation - whichever is lower</td></tr><tr><td>STCG Rate (held 24 months or less)</td><td>Individual slab rates</td></tr><tr><td>Section 194IA TDS</td><td>1% by buyer on property above Rs 50 lakh. Form 26QB. Credit in ITR-2.</td></tr><tr><td>Section 54 Exemption</td><td>Reinvest in house within 1yr before/2yr after. Rs 10 Cr cap from AY 2024-25.</td></tr><tr><td>Section 54EC Exemption</td><td>NHAI/REC/IRFC/PFC bonds within 6 months. Rs 50 lakh cap. 5-year lock-in.</td></tr><tr><td>ITR Form and Due Date</td><td>ITR-2. Due 31 Jul 2026 (non-audit). 31 Oct 2026 (audit). From Rs 1,499.</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>The Union Budget 2024 materially changed property capital gains taxation: LTCG is now 12.5% without indexation for transfers on/after July 23, 2024. For properties acquired before that date, resident individuals and HUFs may elect 20% with indexation if it results in lower tax. CII for FY 2025-26 is 363. STCG (held 24 months or less) continues at slab rates. Section 54/54F exemption is capped at Rs 10 crore from AY 2024-25.</p>
                <p>Filing requires ITR-2 with Schedule Capital Gains. Section 194IA TDS by buyer must be reconciled in Form 26AS. CGAS deposit is mandatory before July 31, 2026 if Section 54 reinvestment is pending. NRIs face Section 195 TDS at 12.5% on full consideration. Patron Accounting handles the entire process from offices in Pune, Mumbai, Delhi, and Hyderabad.</p>
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
                <h2 class="section-title">What Is ITR for Property Sale?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR for property sale is the process of computing capital gains on residential or commercial property sold during the financial year, claiming applicable exemptions under Sections 54, 54EC, or 54F, and reporting the net taxable gain in Schedule Capital Gains of ITR-2 filed on <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a>.</p><p>Capital gains are governed by Sections 45 and 48 of the Income Tax Act, 1961. The Budget 2024 dual-rate regime requires computing tax under both 12.5% (no indexation) and 20% (with indexation using CII 363) for pre-July 23, 2024 acquisitions and selecting the lower-tax option.</p><p>Section 194IA requires buyers to deduct 1% TDS on property above Rs 50 lakh - this must be claimed as credit in ITR-2. CGAS deposit before the ITR due date preserves Section 54/54F exemption when reinvestment is pending.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Property Sale:</strong></p>
                    <p><strong>Section 54</strong> - LTCG on residential house reinvested in new house. Purchase within 1yr before/2yr after sale, construction within 3yr. Capped at Rs 10 crore from AY 2024-25.</p><p><strong>Section 54EC</strong> - LTCG from any property invested in NHAI/REC/IRFC/PFC bonds within 6 months. Rs 50 lakh cap. 5-year lock-in.</p><p><strong>Section 194IA</strong> - Buyer deducts 1% TDS on property above Rs 50 lakh. Form 26QB filed by buyer. Form 16B issued to seller. Credit in ITR-2 Schedule TDS2.</p><p><strong>CGAS</strong> - Capital Gains Account Scheme. Deposit gains in public sector bank before July 31, 2026 to preserve Section 54/54F exemption while reinvestment is pending.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="20" width="140" height="90" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="140" height="22" rx="8" fill="#14365F"/><text x="100" y="35" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PROPERTY SALE</text><rect x="42" y="52" width="35" height="16" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12.5%</text><rect x="83" y="52" width="35" height="16" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="100" y="63" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">20%</text><rect x="124" y="52" width="35" height="16" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="142" y="63" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CII 363</text><rect x="55" y="78" width="90" height="16" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="100" y="89" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 54 + 54EC + CGAS</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Budget 2024</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">5K+</text><text x="100" y="168" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Property Sale ITR</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 54/54EC</span>
                        <strong>Property ITR</strong>
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
            <h2 class="section-title">Who Must File ITR for Property Sale?</h2>
            <div class="content-text">
                
                <ul><li><strong>Residential House/Flat:</strong> Including ancestral, jointly-owned, or inherited residential property</li><li><strong>Land/Plot:</strong> Urban agricultural land within specified limits (rural agricultural land is not a capital asset)</li><li><strong>Commercial Property:</strong> Shops, offices, warehouses, industrial buildings</li><li><strong>Under-Construction:</strong> Where possession received and transfer registered in FY 2025-26</li><li><strong>Inherited/Gifted Property:</strong> Cost and holding period of previous owner carried forward. Pre-2001: use FMV as of April 1, 2001.</li><li><strong>NRI/OCI:</strong> Buyer deducts TDS at 12.5% under Section 195 (not 1%). NRI can apply Form 13 for lower TDS. Must file ITR-2 in India.</li></ul><p><strong>Key:</strong> Even if no tax is payable after exemptions, property sale must be reported in ITR-2 Schedule Capital Gains. Section 50C applies if stamp duty value exceeds actual consideration.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Property Sale ITR Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Capital Gains Computation</td><td>Full computation under Sections 45 and 48. Sale consideration vs indexed/actual cost. Cost of improvement. Transfer expenses (brokerage, stamp duty, legal).</td></tr><tr><td>Budget 2024 Dual-Rate Analysis</td><td>For pre-July 23, 2024 acquisitions: compute at both 12.5% (no indexation) and 20% (with CII 363). Recommend lower-tax option. Document for ITD reference.</td></tr><tr><td>Section 54/54F/54EC Planning</td><td>Eligible exemption computation. Reinvestment timeline verification. CGAS deposit guidance when reinvestment pending at ITR filing. Rs 10 Cr / Rs 50 lakh caps.</td></tr><tr><td>Section 194IA TDS Reconciliation</td><td>Form 16B reconciled against Form 26AS. Credit claimed in ITR-2 Schedule TDS2. Prevents excess tax payment and refund delays.</td></tr><tr><td>NRI Property Sale</td><td>Section 195 TDS computation. Lower deduction certificate (Form 13). DTAA analysis. ITR-2 filing for refund claim. Repatriation guidance.</td></tr><tr><td>Inherited/Gifted Property</td><td>Cost of previous owner determined. FMV as of April 1, 2001 via registered valuer. Stamp duty value cap applied. Correct indexation from original acquisition year.</td></tr>

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
            <h2 class="section-title">How to File ITR for Property Sale - 9 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Structured process covering cost computation, Budget 2024 dual-rate analysis, exemption planning, 194IA TDS reconciliation, and ITR-2 filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Gather Sale Documents and Verify SDV</h3><p class="step-description">Collect registered sale deed, buyer payment details, brokerage and legal invoices, Form 26QB TDS confirmation. Verify sale consideration against Stamp Duty Value under Section 50C - if SDV exceeds actual price, SDV may be used as consideration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Sale deed verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 50C checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="40" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/></svg></div><span class="illustration-label">Docs Collected</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Determine Cost of Acquisition</h3><p class="step-description">Original purchase price or FMV as of April 1, 2001 for pre-2001 property (via registered valuer, capped at stamp duty value). For inherited/gifted: cost and holding period of previous owner carried forward.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Cost determined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Indexation base set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">COST</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">CII = 363</text></svg></div><span class="illustration-label">Cost Computed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Classify as LTCG or STCG</h3><p class="step-description">Held more than 24 months = LTCG (12.5% or 20% with indexation). 24 months or less = STCG at slab rates. For inherited property, include the previous owner's holding period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> LTCG/STCG classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Holding period verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="40" y="35" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">LTCG</text><text x="80" y="35" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">STCG</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">24 months</text></svg></div><span class="illustration-label">Gain Classified</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Budget 2024 Dual-Rate Analysis</h3><p class="step-description">For pre-July 23, 2024 acquisitions by resident individuals/HUFs: compute tax at both 12.5% (no indexation) and 20% (with CII 363 indexation). Select the option with lower total tax. Irrevocable once filed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Both options computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Lower-tax selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="40" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12.5%</text><text x="80" y="28" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">20%</text><text x="60" y="50" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CHOOSE LOWER</text></svg></div><span class="illustration-label">Rate Decided</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Evaluate and Apply Exemptions</h3><p class="step-description">Section 54: reinvest in residential house (Rs 10 Cr cap). Section 54EC: NHAI/REC bonds within 6 months (Rs 50 lakh). Section 54F for non-residential property. Deposit in CGAS before July 31, 2026 if reinvestment pending.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Exemptions applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CGAS confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 54</text><text x="60" y="45" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Sec 54EC</text><text x="60" y="60" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CGAS before Jul 31</text></svg></div><span class="illustration-label">Tax Minimised</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Reconcile TDS, File ITR-2, E-Verify</h3><p class="step-description">Download Form 26AS and match all Section 194IA TDS. Claim credits in Schedule TDS2. File ITR-2 with Schedule Capital Gains on incometax.gov.in. E-verify within 30 days. Retain documents 8 years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS credited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR-2 e-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-2 FILED</text></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Property Sale ITR</h2>
            <div class="content-text">
                
                <ul><li><strong>Registered sale deed</strong> with sub-registrar confirming consideration, buyer, and transfer date</li><li><strong>Original purchase deed</strong> or allotment letter establishing cost and purchase date</li><li><strong>Improvement invoices</strong> - capital expenditure on structural additions after April 1, 2001</li><li><strong>Brokerage, stamp duty, registration, legal fee</strong> invoices (transfer expenses)</li><li><strong>Form 16B</strong> from buyer (Section 194IA TDS certificate)</li><li><strong>Form 26AS and AIS</strong> from incometax.gov.in</li><li><strong>Section 54EC bond purchase receipt</strong> (NHAI/REC/IRFC/PFC) if applicable</li><li><strong>New property purchase agreement</strong> (for Section 54 claim) or CGAS deposit receipt</li><li><strong>Registered valuer FMV report</strong> for pre-2001 properties or inherited property</li><li><strong>NRI documents:</strong> Passport, PAN, NRE/NRO bank details, Form 13 (if applicable)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Property Sale ITR Challenges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing Budget 2024 Dual-Rate Choice</td><td>Self-filers automatically apply 12.5% without checking if 20% with indexation is lower for older properties</td><td>Patron computes both options for all pre-July 23, 2024 acquisitions. Files the lower-tax option with documented computation.</td></tr><tr><td>Section 50C SDV Trap</td><td>Actual contract price declared when stamp duty value is higher. ITD raises demand after matching sub-registrar data.</td><td>Cross-check SDV before filing. Use correct consideration value to prevent demand notices.</td></tr><tr><td>CGAS Deadline Missed</td><td>Seller intends Section 54 reinvestment but does not deposit in CGAS before July 31, 2026. Exemption forfeited entirely.</td><td>CGAS advisory as soon as sale documents submitted. Deposit confirmed before ITR due date.</td></tr><tr><td>Section 194IA TDS Not Credited</td><td>Buyer deducted TDS but seller missed claiming in Schedule TDS2. Results in excess tax payment and delayed refund.</td><td>Mandatory Form 26AS reconciliation. All TDS credits matched and claimed in first filing.</td></tr>

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
            <h2 class="section-title">Property Sale ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-2 - Single Property, No Exemptions</td><td>Starting from INR 1,499</td></tr><tr><td>ITR-2 + Section 54 Exemption</td><td>Rs 2,499</td></tr><tr><td>ITR-2 + Section 54EC or CGAS Advisory</td><td>Rs 2,499</td></tr><tr><td>Budget 2024 Dual-Rate Analysis + Exemptions</td><td>Rs 2,999</td></tr><tr><td>NRI Property Sale (Sec 195, DTAA, Refund)</td><td>Rs 3,999</td></tr><tr><td>Inherited/Gifted Property (FMV, Valuer)</td><td>Rs 2,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Property Sale consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20property%20sale%20ITR%20help.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Key Deadlines for Property Sellers FY 2025-26</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-2 Due Date (Non-Audit)</td><td>31 July 2026 - also last date for CGAS deposit</td></tr><tr><td>ITR-2 Due Date (Audit Cases)</td><td>31 October 2026</td></tr><tr><td>Section 54EC Bond Investment</td><td>Within 6 months of sale date (hard deadline, no extension)</td></tr><tr><td>Section 54 Purchase Window</td><td>1 year before or 2 years after sale</td></tr><tr><td>Section 54 Construction Window</td><td>3 years from date of sale</td></tr><tr><td>Belated Return</td><td>31 December 2026 (penalty + loss of benefits)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> CGAS deposit must be made before July 31, 2026 even if ITR is filed later. Missing this deadline forfeits Section 54/54F exemption entirely. Section 54EC bond investment has a hard 6-month window from sale date. Advance tax on capital gains must be paid by quarterly due dates to avoid 1% monthly interest.</p>

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
            <h2 class="section-title">Why Professional CA Filing Matters for Property Sellers</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Budget 2024 Dual-Rate Optimisation</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Compute both 12.5% (no indexation) and 20% (with CII 363) for every pre-July 23, 2024 acquisition. File the lower-tax option.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Triple Exemption Planning</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Section 54 (Rs 10 Cr house), Section 54EC (Rs 50 lakh bonds), Section 54F (non-residential) - all evaluated for optimal combination.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Section 194IA TDS Recovery</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Mandatory Form 26AS reconciliation ensures buyer TDS credit is claimed. Prevents excess tax payment and secures refunds.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">NRI Property Sale Expertise</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Section 195 TDS, Form 13 lower deduction, DTAA analysis, ITR-2 filing for refund, and repatriation guidance.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">CGAS Compliance Assurance</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Advisory on deposit amount, bank, and timeline before July 31, 2026 to preserve Section 54/54F exemption.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Property Sellers Choose Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>4.9/5 from 1,200+ verified Google reviews.</strong> 5,000+ clients annually from Pune, Mumbai, Delhi, and Hyderabad. Expertise in Budget 2024 indexation analysis, Section 54/54EC/54F planning, NRI compliance, and inherited property valuation. Covering residential houses, land, commercial property, and NRI transactions across all price points.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Filing vs Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Budget 2024 Dual-Rate</td><td>Apply 12.5% flat without checking 20% indexation option</td><td>Both options computed; lower-tax filed with documentation</td></tr><tr><td>Section 50C SDV</td><td>Contract price used; SDV mismatch triggers demand notice</td><td>SDV cross-checked before filing; correct value used</td></tr><tr><td>Cost for Pre-2001/Inherited</td><td>Generic FMV used without valuation; inflated taxable gain</td><td>Registered valuer FMV; stamp duty cap applied; correct indexation</td></tr><tr><td>Section 54/54EC/54F</td><td>Not claimed or incorrectly computed; CGAS missed</td><td>All 3 evaluated; optimal combination; CGAS confirmed before due date</td></tr><tr><td>Section 194IA TDS</td><td>Not claimed in Schedule TDS2; excess tax paid</td><td>Mandatory Form 26AS reconciliation; all credits claimed first filing</td></tr><tr><td>NRI TDS Refund</td><td>NRI does not file Indian ITR; large TDS not recovered</td><td>ITR-2 filed; actual LTCG computed; excess TDS claimed as refund</td></tr><tr><td>Advance Tax</td><td>Not paid on capital gains; large interest demand</td><td>Checked and paid before each due date; interest minimised</td></tr>

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
            <h2 class="section-title">Related Tax Filing Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/income-tax-return">Income Tax Return</a> - Complete ITR for all income heads</li><li><a href="/itr-for-capital-gains">ITR for Capital Gains</a> - Shares, mutual funds, and other capital assets</li><li><a href="/income-tax-notice">Income Tax Notice</a> - Response to demand notices and SDV mismatches</li><li><a href="/tax-planning-services">Tax Planning</a> - Pre-sale exemption strategy and CGAS planning</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Property Sale Capital Gains</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Details</th></tr></thead><tbody><tr><td><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Section 112</a></td><td>LTCG on property: 12.5% without indexation (post July 23, 2024). Pre-July 23: 20% with indexation option for residents.</td></tr><tr><td>Section 54</td><td>Residential house reinvestment. 1yr before/2yr after/3yr construction. Rs 10 Cr cap from AY 2024-25.</td></tr><tr><td>Section 54EC</td><td>NHAI/REC/IRFC/PFC bonds within 6 months. Rs 50 lakh cap. 5-year lock-in.</td></tr><tr><td>Section 194IA</td><td>Buyer deducts 1% TDS on property above Rs 50 lakh. Form 26QB within 30 days. Form 16B to seller.</td></tr><tr><td>Section 50C</td><td>Stamp duty value as consideration if SDV exceeds actual price.</td></tr><tr><td>Section 195</td><td>NRI property sale: TDS at 12.5% (LTCG) on full consideration. Form 13 for lower rate.</td></tr></tbody></table></div><p><strong>CII FY 2025-26 = 363.</strong> Indexation formula: Original cost x (CII of sale year / CII of acquisition year). For pre-2001 property: FMV as of April 1, 2001 used as cost (capped at stamp duty value).</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Property Sale ITR</h2>
                    <p class="faq-expanded__lead">Expert answers about property capital gains, Budget 2024 rates, exemptions, TDS, CGAS, NRI compliance, and inherited property.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Property Sale',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form for property sale?</h3>
                        <div class="faq-expanded__a"><p>ITR-2 for individuals and HUFs with capital gains from immovable property. ITR-1 cannot be used if you have any property capital gains. Use ITR-3 if you also have business income. Due date: 31 July 2026 for non-audit cases.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the LTCG tax rate on property sale FY 2025-26?</h3>
                        <div class="faq-expanded__a"><p>For property held more than 24 months: 12.5% flat without indexation for transfers on/after July 23, 2024 under Section 112. Resident individuals/HUFs with property acquired before July 23, 2024 can choose 20% with CII 363 indexation if it results in lower tax. STCG: slab rates.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How can I save capital gains tax on property sale?</h3>
                        <div class="faq-expanded__a"><p>Three legal routes: Section 54 - reinvest in residential house within 1yr before/2yr after sale or construct within 3yr (Rs 10 Cr cap). Section 54EC - invest in NHAI/REC/IRFC/PFC bonds within 6 months (Rs 50 lakh cap). Deposit in CGAS before July 31, 2026 if reinvestment pending.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is TDS on property sale under Section 194IA?</h3>
                        <div class="faq-expanded__a"><p>Buyer deducts 1% TDS on property consideration above Rs 50 lakh. Filed via Form 26QB. Seller gets Form 16B. TDS appears in Form 26AS and must be claimed as credit in ITR-2 Schedule TDS2. Missing this credit causes excess tax payment. Refund available if TDS exceeds liability.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can Section 54 be claimed if new house not yet purchased?</h3>
                        <div class="faq-expanded__a"><p>Yes. Deposit capital gains amount in a Capital Gains Account Scheme (CGAS) with a public sector bank before July 31, 2026 (ITR due date). Then complete purchase within 2 years or construction within 3 years. If funds not utilised in time, deposited amount becomes taxable LTCG.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is inherited property taxed on sale?</h3>
                        <div class="faq-expanded__a"><p>Cost of acquisition = cost to previous owner. If acquired before April 1, 2001, use FMV on that date (capped at stamp duty value). Holding period includes time held by previous owner for LTCG classification. Same Section 54/54EC exemptions available. Budget 2024 dual-rate choice applies if pre-July 23, 2024 acquisition.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>LTCG rate?</strong> 12.5% without indexation (post July 23, 2024). Pre-July 23 acquisitions: residents can choose 20% with CII 363 if lower.</p><p><strong>Section 54 cap?</strong> Rs 10 crore from AY 2024-25. Section 54EC: Rs 50 lakh in NHAI/REC bonds within 6 months.</p><p><strong>TDS on sale?</strong> Buyer deducts 1% under Section 194IA above Rs 50 lakh. Claim credit in ITR-2.</p><p><strong>CGAS deadline?</strong> Before July 31, 2026. Missing forfeits Section 54 exemption entirely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Your Property Sale ITR Before July 31, 2026</h2>
            <div class="content-text">
                
                <p>July 31, 2026 is both the ITR due date AND the last date for CGAS deposit. Missing it forfeits Section 54/54F exemption entirely even if you buy a new house later. Section 54EC bonds must be purchased within 6 months of sale - this deadline cannot be extended. Section 194IA TDS unclaimed means excess tax paid. Budget 2024 dual-rate choice is irrevocable once filed.</p><p><strong>Start now.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20property%20sale%20ITR%20help.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for expert property sale ITR from Rs 1,499.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Property Sale ITR with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Property sale ITR involves the Budget 2024 dual-rate regime, Section 50C stamp duty adjustments, three distinct exemption routes with caps and deadlines, and the non-negotiable CGAS deposit timeline. NRIs face additional Section 195 TDS and DTAA layers. Professional CA assistance prevents demand notices, recovers TDS credits, and ensures exemptions are claimed correctly.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting serves 5,000+ clients annually with property capital gains expertise. From Rs 1,499. Offices in Pune, Mumbai, Delhi, and Hyderabad.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20property%20sale%20ITR%20help.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Property%20Sale%20ITR&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20ITR%20filing%20for%20property%20sale.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Property Sale ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting files property sale ITR for homeowners, NRIs, and inherited property sellers.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">Property Sale ITR by City</p><p class="pa-block-sub">Budget 2024 dual-rate analysis and exemption planning</p><div class="pa-city-grid"><a href="/itr-for-property-sale/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-for-property-sale/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-for-property-sale/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/itr-for-property-sale/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related Tax Services</p><p class="pa-block-sub">Complete property and capital gains compliance</p><div class="pa-cross-grid"><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">All Categories</div></div></a><a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ITR Capital Gains</div><div class="pa-card-sub">Shares/MF</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Tax Notice</div><div class="pa-card-sub">Response</div></div></a><a href="/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Tax Planning</div><div class="pa-card-sub">Pre-Sale</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed before each filing season. Budget 2024 LTCG rates, CII, Section 54 caps, and 194IA thresholds updated per CBDT notifications. Next review: July 2026.</p>
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
