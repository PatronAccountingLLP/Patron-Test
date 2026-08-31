
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
    <title>ITR for Freelancers Gurugram - 44ADA, ITR-4 & TDS</title>
    <meta name="description" content="CA-assisted ITR filing for freelancers in Gurugram. Section 44ADA, 44AD, IT consultants, doctors, lawyers. Upwork income, expense deduction, GST. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-filing-for-freelancers-professionals/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Freelancers Gurugram - 44ADA, ITR-4 & TDS">
    <meta property="og:description" content="CA-assisted ITR filing for freelancers in Gurugram. Section 44ADA, 44AD, IT consultants, doctors, lawyers. Upwork income, expense deduction, GST. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-filing-for-freelancers-professionals/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Freelancers Gurugram - 44ADA, ITR-4 & TDS">
    <meta name="twitter:description" content="CA-assisted ITR filing for freelancers in Gurugram. Section 44ADA, 44AD, IT consultants, doctors, lawyers. Upwork income, expense deduction, GST. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Professionals & Freelancers Gurugram",
      "description": "CA-assisted ITR filing for freelancers in Gurugram. Section 44ADA, 44AD, IT consultants, doctors, lawyers. Upwork income, expense deduction, GST. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-filing-for-freelancers-professionals/gurugram",
      "serviceType": "ITR for Professionals & Freelancers Gurugram",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
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
        "url": "https://www.patronaccounting.com/itr-filing-for-freelancers-professionals/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "3",
          "maxPrice": "75",
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
          "name": "ITR for Professionals: CA Filing",
          "item": "https://www.patronaccounting.com/itr-for-professionals"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Professionals & Freelancers Gurugram",
          "item": "https://www.patronaccounting.com/itr-filing-for-freelancers-professionals/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ITR form should Gurugram freelancers file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-4 (Sugam) if using presumptive taxation under Section 44ADA (specified professionals) or 44AD (non-specified). ITR-3 if maintaining full books and claiming actual expenses. If you have salary income in addition to freelance income, you must use ITR-3. Patron Accounting helps freelancers choose the optimal form based on their expense ratio."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Rs 75 lakh limit for Section 44ADA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "From FY 2023-24, specified professionals with gross receipts up to Rs 75 lakh can use Section 44ADA presumptive taxation, provided at least 95% of receipts are through digital/banking channels. If cash receipts exceed 5%, the limit remains Rs 50 lakh. Under 44ADA, 50% of gross receipts is deemed as taxable profit."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between 44AD and 44ADA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 44ADA is for specified professionals (doctors, lawyers, CAs, engineers, IT consultants) with 50% deemed profit and no 5-year lock-in. Section 44AD is for businesses and non-specified freelancers with 6-8% deemed profit and a 5-year lock-in. Choosing the wrong section can trigger notices."
          }
        },
        {
          "@type": "Question",
          "name": "Can freelancers claim expenses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but only when filing ITR-3 (regular). Under presumptive taxation (ITR-4), expenses are deemed at 50% (44ADA) or 92-94% (44AD) and cannot be claimed separately. Under ITR-3, all genuine business expenses are deductible: coworking rent, internet, software, equipment depreciation, travel, team payments, and professional fees."
          }
        },
        {
          "@type": "Question",
          "name": "How to report Upwork/foreign client income?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Foreign client income through Upwork, Toptal, or Fiverr is taxable in India as professional income under PGBP. Convert to INR using the RBI reference rate on the date of credit to your bank account (Rule 115). Platform fees are deductible only under ITR-3. Export of services may qualify for zero-rated GST with LUT."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST mandatory for Gurugram freelancers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST registration is mandatory when annual turnover from all professional activities exceeds Rs 20 lakh. Professional services attract 18% GST. Services to international clients may qualify as export of services (zero-rated with LUT). Many corporate clients in Gurugram require GST invoices even below the threshold."
          }
        },
        {
          "@type": "Question",
          "name": "When is tax audit mandatory for freelancers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tax audit is mandatory if professional gross receipts exceed Rs 75 lakh (when cash < 5%) or Rs 50 lakh (when cash > 5%). Also triggered if presumptive profit declared is below 50% (44ADA) or 6-8% (44AD) and total income exceeds exemption limit. Most Gurugram freelancers with digital payments under Rs 75 lakh do not need audit."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of freelancer ITR filing in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional fees start from Rs 2,000 for ITR-4 presumptive filing up to Rs 10,000 for ITR-3 with full expense claims and foreign income reporting. Salary + freelance combined ITR-3 starts from Rs 5,000. Classification advisory is Rs 2,000. Government filing fees are nil. Quick Answers Freelancer ka ITR kaunse form mein file hota hai? ITR-4 (presumptive - 44ADA ya 44AD) ya ITR-3 (full accounts with expenses). Salary bhi hai toh ITR-3 mandatory hai. 44ADA mein kitna income dikhana padta hai? Gross receipts ka 50% as minimum profit. Agar actual profit zyada hai toh actual dikhao. Upwork se kamayi ka tax kaise lagta hai? Business income hai. RBI rate se INR mein convert karo. ITR mein PGBP ke under report karo. Platform fees ITR-3 mein deductible hain."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
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
                        ITR for Professionals and Freelancers in Gurugram: Expert Tax Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">03 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Classification:</span> Professional/business income under PGBP - taxed at individual slab rates</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>44ADA Presumptive:</span> 50% deemed profit for specified professionals (doctors, lawyers, CAs, engineers, IT consultants) with receipts up to Rs 75 lakh</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>44AD Presumptive:</span> 6-8% deemed profit for non-specified freelancers with turnover up to Rs 3 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>ITR Form:</span> ITR-3 (regular with expenses) or ITR-4 (presumptive)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">ITR filed for IT consultants, doctors, lawyers, designers, and gig economy workers. Serving Gurugram's professional community.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20freelancer%20ITR%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR for Professionals and Freelancers in Gurugram',
                                            'city'     => 'Gurugram',
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I earn Rs 35 lakh from Upwork as an IT consultant. Patron classified me under 44ADA, computed foreign income correctly, and filed ITR-4 in under a week. Saved me Rs 50,000 compared to my local CA.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT Freelancer, DLF Cyber City</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a doctor with private clinic and hospital consulting income, Patron analysed my expense ratio and recommended ITR-3. My actual profit was only 35%. That decision saved me Rs 1.2 lakh in tax.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Dr. Gupta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Medical Professional, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Working with 22 clients means 22 TDS entries to reconcile. Patron matched every single 194J entry, caught two missing credits, and got them corrected before filing. Thorough and professional service.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Management Consultant, Golf Course Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled my salary plus freelance combined ITR-3. They separated Form 16 TDS from 194J TDS perfectly. Also handled my GST registration when I crossed Rs 20 lakh. One-stop shop for all compliance.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PV</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Verma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Designer, Sohna Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a lawyer with independent practice on Golf Course Road, I was confused between 44ADA and regular filing. Patron analysed my expenses and determined 44ADA was optimal for me. Simple and stress-free filing.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunita Kapoor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Legal Professional, Golf Course Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Freelancer ITR filing with 44ADA/44AD classification, expense optimisation, and expert guidance from Gurugram.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">44ADA vs 44AD</a><a href="#who-section" class="toc-btn">Professions</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Freelancer and Professional ITR Filing in Gurugram: 44ADA, Expenses, and Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Professionals and Freelancers in Gurugram Services at a Glance</strong></p>
                    <p>Every freelancer and professional in Gurugram earning income from consulting, medical practice, legal services, IT development, design, writing, or any professional service must file an ITR under PGBP. Specified professionals (doctors, lawyers, CAs, architects, engineers, technical consultants, interior decorators) can use Section 44ADA to declare 50% of gross receipts as deemed income - no books, no audit required - with receipts up to Rs 75 lakh (if cash under 5%). Non-specified freelancers use Section 44AD (6-8% deemed profit, up to Rs 3 crore). Alternatively, ITR-3 with full expense claims is beneficial when actual expenses exceed 50% of receipts.</p>
                </div>
                <p>Gurugram is India's largest IT freelancing hub after Bengaluru. DLF Cyber City alone houses thousands of IT consultants working independently or through platforms like Upwork, Toptal, and Fiverr. Golf Course Road is a corridor for legal and management consultants serving corporate clients. The Medanta-Fortis healthcare corridor supports hundreds of independent medical practitioners. For a comprehensive overview of freelancer taxation across India, refer to our <a href="/itr-for-professionals">ITR for Professionals and Freelancers</a> national guide.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Income Head</td><td>Profits and Gains from Business or Profession (PGBP)</td></tr>
                        <tr><td>Tax Rate</td><td>Individual slab rates (old or new regime)</td></tr>
                        <tr><td>Section 44ADA</td><td>50% deemed profit | Specified professionals | Up to Rs 75 lakh (digital) / Rs 50 lakh (cash > 5%)</td></tr>
                        <tr><td>Section 44AD</td><td>6% digital / 8% cash deemed profit | Non-specified | Up to Rs 3 crore (digital) / Rs 2 crore (cash > 5%)</td></tr>
                        <tr><td>ITR Form</td><td>ITR-3 (regular) | ITR-4 (presumptive)</td></tr>
                        <tr><td>TDS</td><td>10% under Section 194J by clients</td></tr>
                        <tr><td>GST</td><td>18% if annual turnover > Rs 20 lakh</td></tr>
                        <tr><td>Due Date</td><td>31 Jul (ITR-3 non-audit) | 31 Aug (ITR-4) | 30 Sep (audit)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Haryana does not levy Professional Tax, making income tax the sole direct tax obligation for Gurugram freelancers. This is a significant advantage over Mumbai, Bengaluru, or Chennai-based freelancers who face PT deductions on top of income tax. The simplified tax profile (ITR + GST + TDS credits) allows Gurugram professionals to focus on optimising their ITR strategy between presumptive (44ADA/44AD) and regular (ITR-3) filing based on their actual expense ratio.</p>
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
                <h2 class="section-title">Section 44ADA vs Section 44AD for Freelancers</h2>
                <div class="content-text what-is-definition">
                    
                    <p>The most critical decision for Gurugram freelancers is choosing between Section 44ADA (for specified professionals) and Section 44AD (for businesses/non-specified freelancers). The choice depends on whether your profession is listed under Section 44AA read with Rule 6F of the Income Tax Act. Learn more about <a href="/income-tax-return">Income Tax Return filing</a> for comprehensive guidance.</p>
                    <div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Section 44ADA (Professionals)</th><th>Section 44AD (Business)</th></tr></thead><tbody>
                        <tr><td>Eligible Professions</td><td>Legal, medical, engineering, architecture, accountancy, technical consultancy, interior decoration</td><td>Any business or non-specified freelance activity</td></tr>
                        <tr><td>Deemed Profit</td><td>50% of gross receipts</td><td>8% (cash) or 6% (digital) of turnover</td></tr>
                        <tr><td>Receipts Limit</td><td>Rs 50 lakh (Rs 75 lakh if cash < 5%)</td><td>Rs 2 crore (Rs 3 crore if cash < 5%)</td></tr>
                        <tr><td>Lock-In Period</td><td>NO lock-in - can opt in/out every year</td><td>5-year lock-in: exit triggers audit for next 5 years</td></tr>
                        <tr><td>Advance Tax</td><td>Single instalment by 15 March</td><td>Single instalment by 15 March</td></tr>
                    </tbody></table></div>
                    <p><strong>Key advantage of 44ADA:</strong> No 5-year lock-in. A Gurugram IT consultant earning Rs 40 lakh can use 44ADA one year and switch to regular ITR-3 the next year if expenses are higher. Under 44AD, opting out before 5 years triggers mandatory books and audit for the next 5 years. You may also need <a href="/gst-registration">GST Registration</a> if turnover exceeds Rs 20 lakh.</p>
                    <p><strong>When to choose ITR-3 over presumptive:</strong> If your actual expenses exceed 50% of receipts (for 44ADA) or exceed 92-94% of turnover (for 44AD). A Gurugram freelance developer earning Rs 20 lakh with Rs 12 lakh in actual expenses has an actual profit of Rs 8 lakh (40%). Under 44ADA, deemed profit would be Rs 10 lakh (50%) - meaning ITR-3 saves tax on the Rs 2 lakh difference.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Professionals and Freelancers in Gurugram:</strong></p>
                    <p><strong>Section 44ADA:</strong> Presumptive taxation for specified professionals - 50% of gross receipts deemed as profit. No books, no audit required within limits.</p>
                    <p><strong>Section 44AD:</strong> Presumptive taxation for businesses - 6% (digital) or 8% (cash) of turnover deemed as profit. 5-year lock-in applies.</p>
                    <p><strong>Rule 6F:</strong> Specifies the list of professions eligible for 44ADA: legal, medical, engineering, architecture, accountancy, technical consultancy, interior decoration.</p>
                    <p><strong>Section 194J:</strong> 10% TDS deducted by clients on professional fee payments to freelancers.</p>
                    <p><strong>PGBP:</strong> Profits and Gains from Business or Profession - the income head for freelancer and professional earnings.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Professionals and Freelancers in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Freelancer Tax</span>
                        <strong>Gurugram Filing</strong>
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
            <h2 class="section-title">Specified Professionals in Gurugram - 44ADA Eligibility Guide</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Profession</th><th>44ADA Eligible?</th><th>Gurugram Presence</th><th>Notes</th></tr></thead><tbody>
                        <tr><td>Doctors / Medical</td><td>Yes</td><td>Medanta, Fortis, private clinics</td><td>50% deemed on consultation + surgery fees</td></tr>
                        <tr><td>Lawyers / Legal</td><td>Yes</td><td>Golf Course Road law firms, independent practitioners</td><td>50% deemed on legal advisory fees</td></tr>
                        <tr><td>Chartered Accountants</td><td>Yes</td><td>Across Gurugram, Udyog Vihar</td><td>50% deemed on audit/advisory fees</td></tr>
                        <tr><td>Engineers</td><td>Yes</td><td>DLF Cyber City, Manesar consulting</td><td>Technical engineering consultancy</td></tr>
                        <tr><td>IT Consultants / Developers</td><td>Yes (technical consultancy)</td><td>DLF Cyber City, Upwork/Toptal freelancers</td><td>Classified as technical consultancy</td></tr>
                        <tr><td>Architects</td><td>Yes</td><td>Real estate projects, Golf Course Road</td><td>50% deemed on design fees</td></tr>
                        <tr><td>Interior Decorators</td><td>Yes</td><td>Gurugram real estate/luxury market</td><td>50% deemed on design fees</td></tr>
                        <tr><td>Marketing Consultants</td><td>Debatable (not specified)</td><td>DLF Cyber Hub, brand agencies</td><td>Use 44AD (business) to be safe</td></tr>
                        <tr><td>Content Writers / Designers</td><td>Not specified</td><td>Freelance community across Gurugram</td><td>Use 44AD (business)</td></tr>
                    </tbody></table></div>
                <p><strong>Important:</strong> Just because TDS is deducted under Section 194J (professional fees) does not automatically make you eligible for 44ADA. The eligibility depends on whether your profession is listed under Section 44AA read with Rule 6F - not on the TDS section used by clients. Patron Accounting helps classify correctly.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Freelancer ITR Filing Services in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-4 Filing (Section 44ADA / 44AD)</td><td>Simplified presumptive return for Gurugram freelancers and professionals with receipts within the threshold. 50% (44ADA) or 6-8% (44AD) deemed profit declaration</td></tr>
                        <tr><td>ITR-3 Filing with Full Expense Claims</td><td>Detailed P&L, balance sheet, and expense scheduling for freelancers whose actual expenses exceed the presumptive threshold</td></tr>
                        <tr><td>44ADA vs 44AD vs ITR-3 Decision Advisory</td><td>Cost-benefit analysis comparing presumptive and regular filing based on actual expense ratio, profession classification, and growth trajectory</td></tr>
                        <tr><td>Multi-Client TDS Reconciliation</td><td>Matching 194J TDS credits from 10-30+ clients in Form 26AS against income records</td></tr>
                        <tr><td>Foreign Client Income Reporting</td><td>Upwork, Toptal, Fiverr income: foreign income reporting under Schedule FSI, Rule 115 exchange rate, DTAA credit, Form 10F</td></tr>
                        <tr><td>GST Registration and Returns</td><td>Registration when turnover crosses Rs 20 lakh, 18% GST on professional services, export of services LUT for international clients</td></tr>
                        <tr><td>Expense Deduction Optimisation</td><td>Coworking rent, software subscriptions, internet, equipment depreciation, travel, professional development, team payments</td></tr>
                        <tr><td>Salary + Freelance Combined ITR-3</td><td>Combined ITR-3 with salary under Schedule S and freelance under Schedule BP, with correct TDS reconciliation from Form 16 and 26AS</td></tr>

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
            <h2 class="section-title">Freelancer ITR Filing Process in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows a structured 6-step process for accurate freelancer ITR filing including profession classification, expense optimisation, and multi-client TDS reconciliation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Classify Your Profession and Choose the Scheme</h3><p class="step-description">Determine if you are a specified professional under Section 44AA/Rule 6F (eligible for 44ADA) or a general freelancer (eligible for 44AD or regular ITR-3). Calculate your net profit ratio: if expenses are under 50% of receipts, 44ADA is simpler. If expenses exceed 50%, ITR-3 saves more tax.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Profession classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scheme selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Classification Done</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Consolidate Income from All Clients and Platforms</h3><p class="step-description">Collect invoices, payment receipts, and platform earnings reports from every client and platform: direct corporate clients, Upwork/Toptal payouts, retainer agreements, project-based payments. For Gurugram IT consultants working with 10-20 clients, systematic monthly tracking is essential.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All clients consolidated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Platform income tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="14" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">&#8377;</text><line x1="35" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg></div><span class="illustration-label">Income Ready</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Document Expenses (if filing ITR-3)</h3><p class="step-description">Compile receipts for all deductible expenses: coworking rent (WeWork, 91springboard), internet and mobile, software subscriptions (GitHub, AWS, Adobe, Figma), equipment depreciation (laptop, monitor), travel for client meetings, professional development, team payments, home office allocation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All expenses documented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Depreciation computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="65" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="8" fill="none" stroke="#25D366" stroke-width="1.5"/><path d="M57 40l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Expenses Ready</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Reconcile TDS from Form 26AS</h3><p class="step-description">Download Form 26AS and AIS. Match every 194J TDS entry against your income records. Gurugram freelancers with 15-30 clients will have multiple 26AS entries - ensure none are missing. If a client deducted TDS but the credit is not in 26AS, request correction.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No credits missed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="25" y="33" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="25" y="44" width="60" height="6" rx="2" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">TDS Reconciled</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Compute Tax and File</h3><p class="step-description">For ITR-4: declare 50% (44ADA) or 6-8% (44AD) of gross receipts as income, apply slab rates, deduct advance tax and TDS credits. For ITR-3: compute actual profit after expenses, prepare P&L and balance sheet. File on incometax.gov.in with Aadhaar OTP or DSC. ITR-4 due date is 31 August 2026.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Filing Complete</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Filing: GST, Advance Tax, and Records</h3><p class="step-description">Ensure GST returns are current if registered. Set up quarterly advance tax for the next year (single instalment by 15 March for presumptive; quarterly for regular). Maintain all invoices, expense receipts, and client agreements for 8 years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST compliant</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records maintained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L100 85H20Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 55l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">All Compliant</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Freelancer ITR Filing in Gurugram</h2>
            <div class="content-text">
                
                <ul><li><strong>Client Invoices and Payment Receipts</strong> - From all clients, platforms, and retainer agreements.</li><li><strong>Form 26AS / AIS</strong> - TDS credit statement for 194J reconciliation.</li><li><strong>Bank Statements</strong> - All accounts receiving professional fees (INR and foreign currency).</li><li><strong>Expense Receipts (ITR-3)</strong> - Coworking rent, software subscriptions, internet, equipment, travel, team payments.</li><li><strong>Form 16 (if salaried + freelance)</strong> - Salary TDS certificate from employer.</li><li><strong>Foreign Income Proof</strong> - Upwork/Toptal/Fiverr payout statements, SWIFT receipts, exchange rate records.</li><li><strong>GST Returns</strong> - GSTR-3B/GSTR-1 if registered.</li><li><strong>Advance Tax Challans</strong> - If quarterly payments were made.</li></ul>
                <div class="highlight-box" style="margin-top:20px;"><p><strong>Gurugram-specific tip:</strong> IT freelancers in DLF Cyber City working through Upwork receive payments in USD. Maintain a month-wise exchange rate log using RBI reference rates for income computation under Rule 115. The exchange rate on the date of credit to your bank account determines the INR value - not the Upwork display rate.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Freelancer ITR Filing Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>44ADA vs 44AD Misclassification</td><td>Using wrong section triggers scrutiny notices</td><td>Documented classification rationale based on Rule 6F analysis for each client</td></tr>
                        <tr><td>Foreign Client Income and FEMA</td><td>Upwork USD income conversion, platform fee deductibility, FEMA compliance</td><td>Rule 115 exchange rate computation, Schedule FSI reporting, export of services GST treatment with LUT</td></tr>
                        <tr><td>Salary + Freelance Combined Filing</td><td>Filing ITR-1 ignoring freelance income triggers 194J mismatch notices</td><td>Correct ITR-3 with salary (Schedule S) + freelance (Schedule BP) and combined TDS reconciliation</td></tr>
                        <tr><td>GST Threshold Monitoring</td><td>Crossing Rs 20 lakh mid-year triggers retrospective GST liability</td><td>Monthly cumulative turnover tracking with proactive GST registration before threshold</td></tr>
                        <tr><td>Irregular Income and Advance Tax</td><td>Under-estimation leads to Section 234B/C interest</td><td>Rolling quarterly estimation based on actual client pipeline and payment history</td></tr>

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
            <h2 class="section-title">Freelancer ITR Filing Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-4 (44ADA/44AD Presumptive)</td><td>Starting from INR 2,000-3,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-3 with Full Expense Claims</td><td>Starting from INR 5,000-8,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Salary + Freelance Combined ITR-3</td><td>Starting from INR 5,000-10,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>44ADA vs 44AD Classification Advisory</td><td>Starting from INR 2,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Foreign Income (Upwork/Toptal)</td><td>Starting from INR 3,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Government Filing Fees</td><td>Nil</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Professionals and Freelancers in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20freelancer%20ITR%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Freelancer ITR Filing Timeline - AY 2026-27</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Advance Tax (presumptive) - single instalment</td><td>15 March 2027 - 100% of estimated tax in one payment</td></tr>
                        <tr><td>Advance Tax Q1 (regular)</td><td>15 June 2026 - 15% of estimated tax</td></tr>
                        <tr><td>Advance Tax Q2</td><td>15 September 2026 - 45% cumulative</td></tr>
                        <tr><td>ITR-3 (non-audit)</td><td>31 July 2026 - regular freelancers with expenses</td></tr>
                        <tr><td>ITR-4 (presumptive)</td><td>31 August 2026 - Budget 2026 change from 31 July</td></tr>
                        <tr><td>Tax Audit Report</td><td>30 September 2026 - if receipts exceed threshold</td></tr>
                        <tr><td>Advance Tax Q3</td><td>15 December 2026 - 75% cumulative</td></tr>
                        <tr><td>Belated Return</td><td>31 December 2026 - Rs 5,000 late fee, loses loss carry-forward</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key Change:</strong> ITR-4 due date moved to 31 August 2026 (Budget 2026). Section 44ADA Rs 75 lakh enhanced limit applies for digital-receipt professionals. The 44AD 5-year lock-in continues to apply. Foreign client income must be reported under Rule 115 exchange rates. File on time, classify correctly, and claim all deductions.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Freelancer ITR in Gurugram?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Professional Hub</h3><p class="feature-text">Patron operates from Golf Course Extension Road - at the centre of Gurugram's professional community spanning Cyber City IT, Golf Course Road legal, and the Medanta-Fortis healthcare corridor.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">44ADA/44AD Classification</h3><p class="feature-text">Documented classification rationale based on Rule 6F analysis. 44ADA vs 44AD vs ITR-3 cost-benefit comparison for every freelancer.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Platform Integration</h3><p class="feature-text">Processing income data from Upwork, Toptal, Fiverr, Freelancer.com, direct invoicing, and multiple corporate clients - all consolidated into a single accurate ITR.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">5-Day Turnaround</h3><p class="feature-text">ITR filed within 5 working days. 44ADA classification assessed in 1 day. Multi-client TDS reconciliation completed within 3 days.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Foreign Income Handling</h3><p class="feature-text">Upwork/Toptal Rule 115 exchange rate computation, DTAA credit claims, Form 10F filing, and export of services GST treatment with LUT documentation.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Expense Optimisation</h3><p class="feature-text">Full deduction audit covering coworking rent, software, internet, equipment depreciation, travel, team payments, and home office allocation for ITR-3 filers.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p>
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"I earn Rs 35 lakh from Upwork as an IT consultant. Patron classified me under 44ADA (technical consultancy), computed the foreign income correctly, and filed ITR-4 in under a week. Saved me Rs 50,000 compared to ITR-3 with a local CA."</p><p style="font-weight:700;font-size:14px;margin:0;">- IT Freelancer, DLF Cyber City</p></blockquote>
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"As a doctor with private clinic and hospital consulting income, Patron analysed my expense ratio and recommended ITR-3 instead of 44ADA. That decision saved me Rs 1.2 lakh in tax."</p><p style="font-weight:700;font-size:14px;margin:0;">- Medical Professional, Gurugram</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Local CA Firms for Freelancer ITR in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Local CA</th></tr></thead>
                    <tbody>
                        <tr><td>Freelancer Expertise</td><td>Dedicated team for IT, medical, legal, design freelancers</td><td>General ITR filing</td></tr>
                        <tr><td>44ADA Classification</td><td>Documented rationale for profession classification</td><td>Files whichever client requests</td></tr>
                        <tr><td>Foreign Income</td><td>Upwork/Toptal Rule 115 exchange rate + DTAA</td><td>Limited international experience</td></tr>
                        <tr><td>Expense Optimisation</td><td>Full deduction audit: coworking, software, equipment</td><td>Basic expense claims</td></tr>
                        <tr><td>Pricing</td><td>From Rs 2,000 (presumptive) to Rs 10,000 (full)</td><td>Variable</td></tr>
                        <tr><td>Track Record</td><td>10,000+ businesses, 50,000+ docs</td><td>50-200 clients</td></tr>

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
            <h2 class="section-title">Related Services for Freelancer ITR Filing</h2>
            <div class="content-text">
                
                <ul><li><a href="/itr-for-professionals">ITR for Professionals and Freelancers (National)</a> - Broader overview across India</li><li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Comprehensive ITR filing for all income types</li><li><a href="/gst-registration">GST Registration</a> - For freelancers crossing Rs 20 lakh turnover</li><li><a href="/itr-for-business">ITR for Business</a> - For freelancers operating as business entities</li><li><a href="/accounting-services">Accounting Services</a> - Bookkeeping for freelancers with detailed records</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - For freelancers hiring teams and deducting TDS</li></ul>

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
                
                <p><strong>Governing Law:</strong> Income Tax Act, 1961 | GST Act, 2017 | FEMA (for foreign income)</p>
                <p><strong>Key Sections:</strong> 44AA (books of accounts for specified professions) | 44ADA (presumptive for specified professionals - 50%) | 44AD (presumptive for businesses - 6/8%) | 44AB (tax audit) | 194J (TDS on professional fees - 10%) | Rule 6F (specified professions list)</p>
                <p><strong>Specified Professions (Rule 6F):</strong> Legal | Medical | Engineering | Architectural | Accountancy | Technical Consultancy | Interior Decoration | Other notified professions</p>
                <p><strong>Portal:</strong> <a href="https://incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> | <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></p>
                <p><strong>Penalties:</strong></p>
                <p><strong>Late filing (Section 234F):</strong> Rs 5,000 (Rs 1,000 if income < Rs 5 lakh).</p>
                <p><strong>Non-maintenance of books (Section 271A):</strong> Rs 25,000.</p>
                <p><strong>Tax audit penalty (Section 271B):</strong> Rs 1,50,000 or 0.5% of turnover.</p>
                <p><strong>Haryana State Context:</strong> Haryana does not levy Professional Tax. Gurugram freelancers face only income tax (ITR), GST (if applicable), and TDS credits. This is simpler than Maharashtra, Karnataka, or Tamil Nadu where PT applies.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR for Freelancers in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about freelancer taxation, 44ADA vs 44AD, expense deductions, and filing deadlines for Gurugram professionals.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Professionals and Freelancers in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should Gurugram freelancers file?</h3>
                        <div class="faq-expanded__a"><p>ITR-4 (Sugam) if using presumptive taxation under Section 44ADA (specified professionals) or 44AD (non-specified). ITR-3 if maintaining full books and claiming actual expenses. If you have salary income in addition to freelance income, you must use ITR-3. Patron Accounting helps freelancers choose the optimal form based on their expense ratio.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the Rs 75 lakh limit for Section 44ADA?</h3>
                        <div class="faq-expanded__a"><p>From FY 2023-24, specified professionals with gross receipts up to Rs 75 lakh can use Section 44ADA presumptive taxation, provided at least 95% of receipts are through digital/banking channels. If cash receipts exceed 5%, the limit remains Rs 50 lakh. Under 44ADA, 50% of gross receipts is deemed as taxable profit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between 44AD and 44ADA?</h3>
                        <div class="faq-expanded__a"><p>Section 44ADA is for specified professionals (doctors, lawyers, CAs, engineers, IT consultants) with 50% deemed profit and no 5-year lock-in. Section 44AD is for businesses and non-specified freelancers with 6-8% deemed profit and a 5-year lock-in. Choosing the wrong section can trigger notices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can freelancers claim expenses?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only when filing ITR-3 (regular). Under presumptive taxation (ITR-4), expenses are deemed at 50% (44ADA) or 92-94% (44AD) and cannot be claimed separately. Under ITR-3, all genuine business expenses are deductible: coworking rent, internet, software, equipment depreciation, travel, team payments, and professional fees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How to report Upwork/foreign client income?</h3>
                        <div class="faq-expanded__a"><p>Foreign client income through Upwork, Toptal, or Fiverr is taxable in India as professional income under PGBP. Convert to INR using the RBI reference rate on the date of credit to your bank account (Rule 115). Platform fees are deductible only under ITR-3. Export of services may qualify for zero-rated GST with LUT.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is GST mandatory for Gurugram freelancers?</h3>
                        <div class="faq-expanded__a"><p>GST registration is mandatory when annual turnover from all professional activities exceeds Rs 20 lakh. Professional services attract 18% GST. Services to international clients may qualify as export of services (zero-rated with LUT). Many corporate clients in Gurugram require GST invoices even below the threshold.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When is tax audit mandatory for freelancers?</h3>
                        <div class="faq-expanded__a"><p>Tax audit is mandatory if professional gross receipts exceed Rs 75 lakh (when cash < 5%) or Rs 50 lakh (when cash > 5%). Also triggered if presumptive profit declared is below 50% (44ADA) or 6-8% (44AD) and total income exceeds exemption limit. Most Gurugram freelancers with digital payments under Rs 75 lakh do not need audit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the cost of freelancer ITR filing in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Professional fees start from Rs 2,000 for ITR-4 presumptive filing up to Rs 10,000 for ITR-3 with full expense claims and foreign income reporting. Salary + freelance combined ITR-3 starts from Rs 5,000. Classification advisory is Rs 2,000. Government filing fees are nil.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Freelancer ka ITR kaunse form mein file hota hai?</strong> ITR-4 (presumptive - 44ADA ya 44AD) ya ITR-3 (full accounts with expenses). Salary bhi hai toh ITR-3 mandatory hai.</p>
                <p><strong>44ADA mein kitna income dikhana padta hai?</strong> Gross receipts ka 50% as minimum profit. Agar actual profit zyada hai toh actual dikhao.</p>
                <p><strong>Upwork se kamayi ka tax kaise lagta hai?</strong> Business income hai. RBI rate se INR mein convert karo. ITR mein PGBP ke under report karo. Platform fees ITR-3 mein deductible hain.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Freelancer ITR Accurately - ITR-4 Deadline 31 August 2026</h2>
            <div class="content-text">
                
                <p>AY 2026-27 ITR forms are notified. The ITR-4 due date has changed to 31 August 2026 (Budget 2026). Section 44ADA's Rs 75 lakh enhanced limit applies. The 44AD vs 44ADA classification determines your compliance burden and tax liability. Foreign client income must be correctly reported under Rule 115. GST registration becomes mandatory at Rs 20 lakh. The AIS captures 194J TDS data, making unreported freelance income detectable.</p>
                <p><strong>File on time, classify correctly, and claim all deductions. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20freelancer%20ITR%20filing%20in%20Gurugram." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Freelancer ITR Filing in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">ITR filing for freelancers and professionals in Gurugram requires correct classification between Section 44ADA and 44AD, strategic choice between presumptive and regular filing based on actual expense ratio, accurate foreign income reporting, and timely GST compliance. Whether you are an IT consultant in DLF Cyber City, a doctor near Medanta, a lawyer on Golf Course Road, or a designer working through Upwork, the right filing strategy saves significant tax.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted freelancer ITR filing including 44ADA/44AD classification, expense optimisation, foreign income treatment, multi-client TDS reconciliation, GST advisory, and salary + freelance combined filing.</p>
                <p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted tax compliance partner for freelancers and professionals across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20freelancer%20ITR%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Freelancer%20ITR%20Filing%20Gurugram&body=Hi%2C%20I%20need%20help%20with%20freelancer%20ITR%20filing%20in%20Gurugram." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR for Freelancers - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert freelancer ITR filing services across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Freelancer ITR Filing</div><div class="pa-block-sub">Select your city for localised freelancer ITR services</div><div class="pa-city-grid">
                    <a href="/itr-filingfor-freelancers-professionals/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-filing-for-freelancers-professionals/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-filing-for-freelancers-professionals/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                </div></div>
            <div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end freelancer tax and compliance support in Gurugram</div><div class="pa-cross-grid">
                    <a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-business/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-filing-for-salary/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/tds-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on ITR for Freelancers in Gurugram is reviewed quarterly by our CA team. Section 44ADA/44AD thresholds, Rule 6F specified professions, and presumptive taxation rules are verified against the latest CBDT notifications.</p>
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
    // CONFIGURATION — Update these values
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
            console.log('[Testimonials] No Google API key set — using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API — using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews — using fallback.');
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
        // Static cards already rendered — init Slick immediately
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
