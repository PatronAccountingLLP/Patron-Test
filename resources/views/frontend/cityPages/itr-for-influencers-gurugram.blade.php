
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
    <title>ITR for Influencers Gurugram - Brand Deals & TDS 194R</title>
    <meta name="description" content="CA-assisted ITR filing for influencers in Gurugram. YouTube, Instagram income tax. Profession Code 16021, Section 194R, brand deal TDS, GST. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-influencers/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Influencers Gurugram - Brand Deals & TDS 194R">
    <meta property="og:description" content="CA-assisted ITR filing for influencers in Gurugram. YouTube, Instagram income tax. Profession Code 16021, Section 194R, brand deal TDS, GST. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-influencers/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Influencers Gurugram - Brand Deals & TDS 194R">
    <meta name="twitter:description" content="CA-assisted ITR filing for influencers in Gurugram. YouTube, Instagram income tax. Profession Code 16021, Section 194R, brand deal TDS, GST. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Influencers in Gurugram",
      "description": "CA-assisted ITR filing for influencers in Gurugram. YouTube, Instagram income tax. Profession Code 16021, Section 194R, brand deal TDS, GST. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-influencers/gurugram",
      "serviceType": "ITR for Influencers in Gurugram",
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
          "name": "ITR for Influencers: CA Filing",
          "item": "https://www.patronaccounting.com/itr-for-influencers"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Influencers in Gurugram",
          "item": "https://www.patronaccounting.com/itr-for-influencers/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ITR form should Gurugram influencers file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-3 if maintaining detailed accounts and claiming expenses, or ITR-4 under Section 44AD presumptive taxation (6% of digital receipts as deemed income). From FY 2024-25, select Profession Code 16021 (Social Media Influencer). ITR-3 is recommended for creators with significant equipment and travel expenses, ITR-4 for smaller creators seeking simplified compliance."
          }
        },
        {
          "@type": "Question",
          "name": "What is Profession Code 16021?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Income Tax Department introduced Profession Code 16021 specifically for social media influencers from FY 2024-25 (AY 2025-26). This code must be selected under 'Nature of Business or Profession' in ITR-3 or ITR-4. It covers income from promoting products and services online through YouTube, Instagram, and other digital platforms."
          }
        },
        {
          "@type": "Question",
          "name": "Are freebies from brands taxable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Section 194R (effective July 2022), if the aggregate value of benefits and perquisites from a single brand exceeds Rs 20,000 in a financial year, the brand must deduct TDS at 10% on the estimated value. The influencer must report this value as income in the ITR. Many Gurugram influencers receive products worth lakhs annually without realising the tax implication."
          }
        },
        {
          "@type": "Question",
          "name": "What expenses can influencers deduct?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Camera equipment (depreciation), editing software subscriptions, internet and mobile bills (proportionate), travel for brand shoots, studio or coworking rent, team payments (editor, photographer, manager), props and wardrobe, professional fees (CA, legal), and marketing spend. These expenses reduce taxable income when filing ITR-3."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST required for influencers in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST registration is mandatory if your annual turnover from all influencer activities exceeds Rs 20 lakh. Influencer marketing services attract 18% GST. Brands may require GST-compliant invoices even before the threshold. If you work with international clients (Google/YouTube), the income may qualify as export of services with zero-rated GST."
          }
        },
        {
          "@type": "Question",
          "name": "How is YouTube AdSense income taxed in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "YouTube AdSense income from Google is taxable in India as business income under PGBP. Google may withhold US tax (15% under India-US DTAA). This US tax can be claimed as foreign tax credit under Section 90/91 by filing Form 10F with a Tax Residency Certificate. Without claiming this credit, you effectively pay tax twice."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of influencer ITR filing in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional fees start from Rs 3,000 for ITR-4 presumptive filing up to Rs 10,000 for ITR-3 with full expense claims and multi-platform consolidation. Foreign income (AdSense + DTAA) adds Rs 3,000-5,000. GST registration is Rs 3,000 one-time. Government filing fees are nil."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to pay advance tax as an influencer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, if your total tax liability (after TDS credits) exceeds Rs 10,000 in a financial year. Advance tax must be paid in quarterly instalments (15 Jun, 15 Sep, 15 Dec, 15 Mar). Since influencer income is often seasonal (higher during festive months), quarterly estimation requires careful projection. Quick Answers Influencer ka ITR kaunse form mein file hota hai? ITR-3 (full accounts) ya ITR-4 (presumptive 44AD). Profession Code 16021 select karo. Brand se free products mile toh tax lagta hai? Haan, Rs 20,000 se zyada freebies par Section 194R ke under TDS lagta hai. Income mein report karna zaroori hai. YouTube income par tax kaise lagta hai? Business income ke under slab rates par. Google US tax kaata hai toh Section 90/91 se credit milta hai."
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
                        ITR for Influencers in Gurugram: Content Creator Tax Filing by CA Experts
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Classification:</span> Business/professional income under PGBP - taxed at individual slab rates</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Profession Code:</span> 16021 (Social Media Influencer) - mandatory from FY 2024-25</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>ITR Form:</span> ITR-3 (regular) or ITR-4 (presumptive under Section 44AD)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deductible:</span> Camera, equipment, internet, editing software, travel, studio rent, team payments</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">ITR filed for YouTube creators, Instagram influencers, and content creators. Serving Gurugram's brand partnership hub.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20influencer%20ITR%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR for Influencers in Gurugram',
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I earn from YouTube, Instagram, and two affiliate platforms. Patron consolidated everything, claimed Rs 3.5 lakh in expenses, and reduced my tax by Rs 1 lakh. They also caught a missing 194R entry.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Kapoor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Lifestyle Influencer, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a tech reviewer, I receive products worth lakhs from brands. Patron helped me understand Section 194R, properly value the freebies, and report everything correctly. Clean filing, zero stress.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AT</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arjun Tiwari</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Tech Creator, DLF Cyber City</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron helped me claim the foreign tax credit on my YouTube AdSense US withholding. Without their Form 10F filing, I would have paid tax twice on the same income. Saved Rs 45,000.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ravi Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">YouTuber, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a food blogger covering Cyber Hub and Sector 29 restaurants, I had income from 15 different brand deals. Patron consolidated everything, filed under Code 16021, and even handled my GST registration.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Singh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Food Creator, Sector 29</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron advised me to use ITR-3 instead of ITR-4 because my equipment and travel expenses were over 40% of income. The switch saved me Rs 80,000 in tax. Professional and detail-oriented team.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Manish Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Fitness Creator, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Influencer ITR filing with expense optimisation, 194R compliance, and expert guidance from Gurugram.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Income Tax Rules</a><a href="#who-section" class="toc-btn">ITR Form</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Influencer Tax Filing in Gurugram: From Brand Deals to YouTube AdSense</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Influencers in Gurugram Services at a Glance</strong></p>
                    <p>Every content creator and social media influencer in Gurugram earning income from YouTube AdSense, Instagram brand collaborations, sponsored posts, affiliate marketing, online coaching, or merchandise must file an income tax return. The Income Tax Department has introduced Profession Code 16021 specifically for social media influencers from FY 2024-25. Income is classified under PGBP (business/profession) and taxed at slab rates. Brands deduct 10% TDS on payments, and freebies/gifted products exceeding Rs 20,000 attract TDS under Section 194R. GST registration is mandatory if annual turnover exceeds Rs 20 lakh. Business expenses including camera equipment, internet, editing software, travel, and team payments are fully deductible.</p>
                </div>
                <p>Gurugram is one of India's largest influencer marketing hubs. The city's proximity to corporate headquarters along Golf Course Road and NH-48 makes it a preferred base for creators who work with brands directly. DLF Cyber Hub and Sector 29's restaurant scene drive food and lifestyle content. The DLF Cyber City tech corridor fuels tech review creators. Gurugram's gym and fitness culture supports a large fitness creator community. For a comprehensive overview of influencer taxation across India, refer to our <a href="/itr-for-influencers">ITR for Influencers</a> national guide.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Income Head</td><td>Profits and Gains from Business or Profession (PGBP)</td></tr>
                        <tr><td>Tax Rate</td><td>Individual slab rates (old or new regime)</td></tr>
                        <tr><td>Profession Code</td><td>16021 - Social Media Influencer (from FY 2024-25)</td></tr>
                        <tr><td>ITR Form</td><td>ITR-3 (regular) | ITR-4 (Section 44AD presumptive)</td></tr>
                        <tr><td>TDS by Brands</td><td>10% on payments to influencers</td></tr>
                        <tr><td>Freebies TDS</td><td>Section 194R - TDS on benefits/perks exceeding Rs 20,000/year</td></tr>
                        <tr><td>GST</td><td>18% if annual turnover > Rs 20 lakh</td></tr>
                        <tr><td>Due Date</td><td>31 July 2026 (non-audit) | 31 August 2026 (ITR-4) | 30 September 2026 (audit)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Haryana does not levy Professional Tax, meaning influencer income in Gurugram is subject only to central income tax, GST (if applicable), and TDS by brands. The Income Tax Department now receives data from platforms, brand agencies, and bank transactions via AIS - making unreported influencer income increasingly detectable. Timely and accurate ITR filing protects creators from notices while enabling them to claim substantial business expense deductions that reduce their tax liability.</p>
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
                <h2 class="section-title">How Is Influencer Income Taxed?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>All income earned by content creators and social media influencers is classified as <strong>business or professional income</strong> under PGBP when the activity is regular and conducted with a profit motive. This includes revenue from YouTube AdSense, Instagram Reels bonuses, brand collaborations, sponsored posts, affiliate commissions, online courses, coaching sessions, merchandise sales, subscription income, and Super Chats/donations. Learn more about <a href="/income-tax-return">Income Tax Return filing</a> for comprehensive guidance.</p>
                    <p>The income is taxed at <strong>individual slab rates</strong> under either the old or new tax regime. Under the new regime, rates range from nil (up to Rs 3 lakh) to 30% (above Rs 15 lakh). For Gurugram influencers earning Rs 10-50 lakh annually from brand deals and AdSense, the effective tax rate after expense deductions can be significantly lower than the headline slab rates.</p>
                    <p><strong>YouTube/Google AdSense income</strong> from abroad requires special attention. Google pays creators from its US/Ireland entity. India has a DTAA with the US. Creators should file Form 10F and obtain a Tax Residency Certificate (TRC) to claim DTAA benefits. US tax withheld (typically 15% under DTAA) can be claimed as credit under Section 90/91. You may also need <a href="/gst-registration">GST Registration</a> if turnover exceeds Rs 20 lakh.</p>
                    <div class="table-responsive-wrapper"><table><thead><tr><th>Income Source</th><th>Classification</th><th>TDS Applicable</th><th>Gurugram Relevance</th></tr></thead><tbody>
                        <tr><td>YouTube AdSense</td><td>Business income (PGBP)</td><td>US withholding (DTAA)</td><td>Tech reviewers, vloggers</td></tr>
                        <tr><td>Instagram brand deals</td><td>Business income (PGBP)</td><td>10% by brands</td><td>Lifestyle, fashion, food creators</td></tr>
                        <tr><td>Sponsored posts/reels</td><td>Business income (PGBP)</td><td>10% by brands</td><td>All influencers</td></tr>
                        <tr><td>Affiliate marketing</td><td>Business income (PGBP)</td><td>Varies by platform</td><td>Tech, finance, lifestyle</td></tr>
                        <tr><td>Online courses/coaching</td><td>Business income (PGBP)</td><td>Nil (self-collected)</td><td>Finance, fitness, skill creators</td></tr>
                        <tr><td>Freebies/gifted products</td><td>PGBP / Other sources</td><td>Section 194R (> Rs 20,000)</td><td>Brand collaborations in Gurugram</td></tr>
                    </tbody></table></div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Influencers in Gurugram:</strong></p>
                    <p><strong>Profession Code 16021:</strong> Social Media Influencer - mandatory classification from FY 2024-25 in ITR-3/ITR-4.</p>
                    <p><strong>Section 194R:</strong> TDS on benefits/perquisites (freebies, gifted products, sponsored trips) exceeding Rs 20,000/year from a single brand.</p>
                    <p><strong>Section 44AD:</strong> Presumptive taxation declaring 6% of digital receipts as deemed profit - simplified filing without detailed accounts.</p>
                    <p><strong>PGBP:</strong> Profits and Gains from Business or Profession - the income head for influencer earnings.</p>
                    <p><strong>Form 10F:</strong> Required for claiming foreign tax credit on YouTube AdSense US withholding under DTAA.</p>
                    <p><strong>GST:</strong> 18% GST on influencer marketing services mandatory if turnover exceeds Rs 20 lakh.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Influencers in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Creator Tax</span>
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
            <h2 class="section-title">ITR Form and Presumptive Taxation for Influencers</h2>
            <div class="content-text">
                
                <p><strong>ITR-3:</strong> This is the primary form for influencers who maintain detailed books of accounts and want to claim all business expenses. It allows reporting income under PGBP with a complete profit and loss account, balance sheet, and expense schedule. From FY 2024-25, select Profession Code 16021 (Social Media Influencer).</p>
                <p><strong>ITR-4 (Sugam) with Section 44AD:</strong> Influencers with turnover up to Rs 2 crore (Rs 3 crore if cash receipts under 5%) can opt for presumptive taxation under Section 44AD, declaring 6% of digital receipts as deemed profit. This eliminates the need for detailed books and tax audit. However, actual expenses cannot be claimed separately.</p>
                <p><strong>The 44AD vs 44ADA debate:</strong> The new Profession Code 16021 places influencers under the 'profession' category, but social media influencing is NOT listed as a 'specified profession' under Rule 6F. This creates ambiguity about whether influencers can use Section 44ADA (50% deemed profit) or should stick to Section 44AD (6-8% for businesses). Until the government clarifies, Patron Accounting recommends using <strong>Section 44AD</strong> (business route) as the safer position.</p>
                <p><strong>Decision framework for Gurugram influencers:</strong> If your total expenses (equipment, team, travel, studio, editing) exceed 50% of your income, use ITR-3 with full expense claims - you will pay less tax. If expenses are less than 50% and turnover is under Rs 2 crore, Section 44AD with ITR-4 (declaring only 6% as income) may be more beneficial.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Influencer ITR Filing Services in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-3 Filing with Full Expense Claims</td><td>Complete income tax return with P&L account, balance sheet, expense scheduling, and TDS reconciliation for Gurugram influencers maintaining detailed records</td></tr>
                        <tr><td>ITR-4 Presumptive Filing (44AD)</td><td>Simplified filing for influencers opting for presumptive taxation with turnover under Rs 2 crore. 6% of digital receipts declared as income</td></tr>
                        <tr><td>Multi-Platform Income Consolidation</td><td>Consolidating income from YouTube AdSense, Instagram, brand agencies, affiliate platforms, course platforms, and direct brand payments into a single ITR</td></tr>
                        <tr><td>Section 194R Freebies Compliance</td><td>Advising on tax treatment of gifted products, sponsored trips, complimentary stays, and non-cash benefits exceeding Rs 20,000 from brands</td></tr>
                        <tr><td>Foreign Income and DTAA Advisory</td><td>YouTube/Google AdSense income from US/Ireland, Form 10F filing, TRC, and foreign tax credit claim under Section 90/91</td></tr>
                        <tr><td>GST Registration and Returns</td><td>GST registration for creators crossing Rs 20 lakh turnover, 18% GST on services, and periodic return filing</td></tr>
                        <tr><td>Expense Deduction Optimisation</td><td>Camera depreciation, editing software, internet, travel for shoots, studio rent, team payments, professional fees, props and wardrobe</td></tr>
                        <tr><td>Advance Tax Computation</td><td>Quarterly advance tax estimation for influencers with tax liability exceeding Rs 10,000, especially for Q4 festive season payments</td></tr>

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
            <h2 class="section-title">Influencer ITR Filing Process in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows a structured 6-step process for accurate influencer ITR filing including multi-platform consolidation, expense optimisation, and 194R compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Consolidate All Income Sources</h3><p class="step-description">Collect income records from every platform and brand: YouTube AdSense statements, Instagram/brand agency payment receipts, affiliate platform earnings, course platform payouts, direct brand deal invoices, and merchandise sales records. For Gurugram influencers working with 10-20 brands per year, this requires systematic tracking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All platforms consolidated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Brand payments tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Income Consolidated</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Document All Business Expenses</h3><p class="step-description">Compile receipts for every deductible expense: camera and equipment purchases (depreciation), editing software subscriptions, internet and mobile bills, travel for brand shoots, studio/coworking rent, team payments (editor, photographer, manager), professional fees, props, and wardrobe.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Equipment depreciation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All expenses documented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="14" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">&#8377;</text><line x1="35" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg></div><span class="illustration-label">Expenses Ready</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reconcile TDS from Brands and Platforms</h3><p class="step-description">Download Form 26AS and AIS. Match every TDS credit against your income records. Brands typically deduct 10% TDS. Check for Section 194R TDS on freebies exceeding Rs 20,000. For YouTube AdSense, check US withholding tax for DTAA credit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>194R checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="65" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="8" fill="none" stroke="#25D366" stroke-width="1.5"/><path d="M57 40l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">TDS Reconciled</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Choose ITR Form and Prepare Return</h3><p class="step-description">Select ITR-3 (with P&L, balance sheet, expense claims) or ITR-4 (44AD presumptive). Select Profession Code 16021 - Social Media Influencer. Compute total income after expenses (ITR-3) or deemed income at 6% (ITR-4). Apply slab rates under chosen tax regime.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Code 16021 selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR prepared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="25" y="33" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="25" y="44" width="60" height="6" rx="2" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">Form Selected</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File on incometax.gov.in</h3><p class="step-description">Upload the prepared ITR on the income tax portal. Authenticate using Aadhaar OTP, net banking, or DSC. The portal auto-calculates tax liability and applies TDS/advance tax credits. Pay any self-assessment tax due. E-verify within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Filing Complete</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">GST and Ongoing Compliance</h3><p class="step-description">If turnover exceeds Rs 20 lakh, ensure GST registration is active and returns are filed. Set up quarterly advance tax payment schedule for the next financial year. Maintain all expense receipts and brand agreements for at least 8 years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST compliant</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Advance tax set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L100 85H20Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 55l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">All Compliant</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Influencer ITR Filing in Gurugram</h2>
            <div class="content-text">
                
                <ul><li><strong>Platform Earnings Statements</strong> - YouTube AdSense reports, Instagram creator earnings, podcast platform payouts.</li><li><strong>Brand Deal Invoices and Agreements</strong> - Contracts and payment receipts from every brand collaboration.</li><li><strong>Form 26AS / AIS</strong> - TDS credit statement for brand TDS and foreign tax verification.</li><li><strong>Equipment Purchase Receipts</strong> - Camera, phone, laptop, lighting, microphone invoices for depreciation.</li><li><strong>Expense Receipts</strong> - Internet bills, editing software subscriptions, travel receipts, studio rent, team payments.</li><li><strong>Bank Statements</strong> - All accounts receiving platform and brand payments.</li><li><strong>Foreign Income Proof</strong> - Google/YouTube payment receipts, US withholding certificate.</li><li><strong>GST Returns</strong> - If registered under GST, GSTR-3B and GSTR-1 filed during the year.</li></ul>
                <div class="highlight-box" style="margin-top:20px;"><p><strong>Gurugram-specific tip:</strong> Lifestyle and fashion influencers in Gurugram frequently receive gifted products (phones, cosmetics, clothing, gadgets) from brands without cash payment. If the aggregate value exceeds Rs 20,000 in a financial year, the brand must deduct TDS under Section 194R. Keep a log of all gifted items with estimated market value - your CA will need this for accurate ITR reporting.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Influencer ITR Filing Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>44AD vs 44ADA Ambiguity with Code 16021</td><td>Using wrong section could trigger scrutiny</td><td>Section 44AD recommended as safer position until government clarification. Cost-benefit comparison provided for each client</td></tr>
                        <tr><td>Section 194R Compliance on Freebies</td><td>Gifted products not reported create compliance gaps detectable via AIS</td><td>Freebie log with market valuation, 194R TDS verification, and accurate income reporting in ITR</td></tr>
                        <tr><td>YouTube AdSense Foreign Income</td><td>US tax withheld without DTAA credit means double taxation</td><td>Form 10F filing, TRC procurement, and Section 90/91 foreign tax credit claim in ITR</td></tr>
                        <tr><td>Irregular Income and Advance Tax</td><td>Seasonal brand deals create under/over-estimation of quarterly advance tax</td><td>Dynamic quarterly estimation with rolling projection based on actual brand deal pipeline</td></tr>
                        <tr><td>Multiple Income Stream Consolidation</td><td>10+ platforms and brands with different TDS, timing, and documentation</td><td>Systematic multi-platform consolidation with dedicated tracking throughout the year</td></tr>

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
            <h2 class="section-title">Influencer ITR Filing Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-4 Presumptive (44AD)</td><td>Starting from INR 3,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-3 with Expense Claims</td><td>Starting from INR 5,000-10,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Foreign Income (AdSense) + DTAA</td><td>Starting from INR 3,000-5,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Multi-Platform Consolidation</td><td>Starting from INR 3,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 194R Advisory</td><td>Starting from INR 2,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Government Filing Fees</td><td>Nil</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Influencers in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20influencer%20ITR%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Influencer ITR Filing Timeline 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Advance Tax Q1</td><td>15 June 2026 - 15% of estimated annual tax</td></tr>
                        <tr><td>Advance Tax Q2</td><td>15 September 2026 - 45% cumulative</td></tr>
                        <tr><td>ITR-3 Filing (non-audit)</td><td>31 July 2026 - most Gurugram influencers</td></tr>
                        <tr><td>ITR-4 (44AD presumptive)</td><td>31 August 2026 - Budget 2026 change</td></tr>
                        <tr><td>Tax Audit Report</td><td>30 September 2026 - if turnover exceeds threshold</td></tr>
                        <tr><td>Advance Tax Q3</td><td>15 December 2026 - 75% cumulative</td></tr>
                        <tr><td>Advance Tax Q4</td><td>15 March 2027 - 100%</td></tr>
                        <tr><td>GST Returns</td><td>Monthly/Quarterly - GSTR-1 and GSTR-3B</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Profession Code 16021 is now mandatory. Section 194R requires reporting freebies exceeding Rs 20,000. YouTube AdSense foreign tax credit requires Form 10F filing. GST registration is mandatory above Rs 20 lakh. File accurately, claim all deductions, and stay compliant.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Influencer ITR in Gurugram?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Brand Hub</h3><p class="feature-text">Patron operates from Golf Course Extension Road - in the heart of Gurugram's brand partnership ecosystem. We understand creator economy structures from brand deals to platform monetisation.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">Creator Economy Expertise</h3><p class="feature-text">Filing ITRs for YouTube creators, Instagram influencers, podcast hosts, and UGC specialists. Understanding 194R freebies, AdSense foreign income, 44AD vs 44ADA, and GST for creators.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Expense Optimisation</h3><p class="feature-text">Identifying every deductible expense: equipment depreciation, editing software, internet, travel, studio rent, team payments, and home office allocation. Reducing taxable income by 30-60%.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">7-Day Turnaround</h3><p class="feature-text">ITR filed within 7 working days of receiving complete income and expense data. Multi-platform consolidation completed in 3 days. Advance tax computed quarterly.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">194R and DTAA Handling</h3><p class="feature-text">Section 194R freebies compliance, YouTube AdSense DTAA credit via Form 10F, and accurate foreign income reporting under Schedule FSI.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">GST Integration</h3><p class="feature-text">GST registration, 18% compliance on influencer services, return filing, and integrated ITR + GST management for creators above Rs 20 lakh turnover.</p></article>
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
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"I earn from YouTube, Instagram, and two affiliate platforms. Patron consolidated everything, claimed Rs 3.5 lakh in equipment and travel expenses, and reduced my tax by Rs 1 lakh. They also caught a missing 194R entry."</p><p style="font-weight:700;font-size:14px;margin:0;">- Lifestyle Influencer, Gurugram</p></blockquote>
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"As a tech reviewer, I receive products worth lakhs from brands. Patron helped me understand Section 194R, properly value the freebies, and report everything correctly. Clean filing, zero stress."</p><p style="font-weight:700;font-size:14px;margin:0;">- Tech Creator, Gurugram</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting vs Local CA Firms for Influencer ITR in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Local CA</th></tr></thead>
                    <tbody>
                        <tr><td>Creator Economy</td><td>Dedicated influencer tax team</td><td>No creator-specific experience</td></tr>
                        <tr><td>194R Compliance</td><td>Freebie valuation and reporting</td><td>Unaware of 194R obligations</td></tr>
                        <tr><td>Foreign Income</td><td>AdSense DTAA + Form 10F + TRC</td><td>Misses foreign tax credit</td></tr>
                        <tr><td>Expense Claims</td><td>Full equipment depreciation + travel + team</td><td>Basic expense claims only</td></tr>
                        <tr><td>Pricing</td><td>From Rs 3,000 (presumptive) to Rs 10,000 (full)</td><td>Variable</td></tr>
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
            <h2 class="section-title">Related Services for Influencer ITR Filing</h2>
            <div class="content-text">
                
                <ul><li><a href="/itr-for-influencers">ITR for Influencers (National)</a> - Broader overview of influencer taxation across India</li><li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Comprehensive ITR filing for all income types</li><li><a href="/gst-registration">GST Registration</a> - For creators crossing Rs 20 lakh turnover threshold</li><li><a href="/itr-for-business">ITR for Business</a> - For creators operating as business entities</li><li><a href="/itr-for-salary">ITR for Salary</a> - For salaried professionals with creator side income</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - For creators hiring teams and deducting TDS</li></ul>

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
                <p><strong>Key Sections:</strong> Profession Code 16021 (Social Media Influencer) | Section 44AD (presumptive business) | Section 44ADA (presumptive profession - debated applicability) | Section 194R (TDS on freebies) | Section 194J (professional fees TDS) | Section 90/91 (foreign tax credit) | Section 44AB (tax audit)</p>
                <p><strong>ITR Forms:</strong> ITR-3 (regular) | ITR-4 (presumptive)</p>
                <p><strong>GST:</strong> 18% on influencer marketing services if turnover > Rs 20 lakh</p>
                <p><strong>Portal:</strong> <a href="https://incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> | <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></p>
                <p><strong>Penalties:</strong></p>
                <p><strong>Late filing (Section 234F):</strong> Rs 5,000 (Rs 1,000 if income < Rs 5 lakh).</p>
                <p><strong>Non-reporting of income:</strong> Under-reporting penalty 50-200% (Section 270A).</p>
                <p><strong>Section 194R non-compliance:</strong> Brand liable for non-deduction; influencer must still report income.</p>
                <p><strong>Haryana State Context:</strong> Haryana does not levy Professional Tax. Gurugram influencers have a simpler tax profile than those in Maharashtra or Karnataka. Income tax (ITR), GST (if applicable), and TDS credits form the complete compliance framework. The AIS now captures platform payment data, making non-reporting increasingly risky.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR for Influencers in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about influencer taxation, Profession Code 16021, Section 194R, and filing deadlines for Gurugram content creators.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Influencers in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should Gurugram influencers file?</h3>
                        <div class="faq-expanded__a"><p>ITR-3 if maintaining detailed accounts and claiming expenses, or ITR-4 under Section 44AD presumptive taxation (6% of digital receipts as deemed income). From FY 2024-25, select Profession Code 16021 (Social Media Influencer). ITR-3 is recommended for creators with significant equipment and travel expenses, ITR-4 for smaller creators seeking simplified compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Profession Code 16021?</h3>
                        <div class="faq-expanded__a"><p>The Income Tax Department introduced Profession Code 16021 specifically for social media influencers from FY 2024-25 (AY 2025-26). This code must be selected under 'Nature of Business or Profession' in ITR-3 or ITR-4. It covers income from promoting products and services online through YouTube, Instagram, and other digital platforms.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Are freebies from brands taxable?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 194R (effective July 2022), if the aggregate value of benefits and perquisites from a single brand exceeds Rs 20,000 in a financial year, the brand must deduct TDS at 10% on the estimated value. The influencer must report this value as income in the ITR. Many Gurugram influencers receive products worth lakhs annually without realising the tax implication.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What expenses can influencers deduct?</h3>
                        <div class="faq-expanded__a"><p>Camera equipment (depreciation), editing software subscriptions, internet and mobile bills (proportionate), travel for brand shoots, studio or coworking rent, team payments (editor, photographer, manager), props and wardrobe, professional fees (CA, legal), and marketing spend. These expenses reduce taxable income when filing ITR-3.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is GST required for influencers in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>GST registration is mandatory if your annual turnover from all influencer activities exceeds Rs 20 lakh. Influencer marketing services attract 18% GST. Brands may require GST-compliant invoices even before the threshold. If you work with international clients (Google/YouTube), the income may qualify as export of services with zero-rated GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is YouTube AdSense income taxed in India?</h3>
                        <div class="faq-expanded__a"><p>YouTube AdSense income from Google is taxable in India as business income under PGBP. Google may withhold US tax (15% under India-US DTAA). This US tax can be claimed as foreign tax credit under Section 90/91 by filing Form 10F with a Tax Residency Certificate. Without claiming this credit, you effectively pay tax twice.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the cost of influencer ITR filing in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Professional fees start from Rs 3,000 for ITR-4 presumptive filing up to Rs 10,000 for ITR-3 with full expense claims and multi-platform consolidation. Foreign income (AdSense + DTAA) adds Rs 3,000-5,000. GST registration is Rs 3,000 one-time. Government filing fees are nil.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do I need to pay advance tax as an influencer?</h3>
                        <div class="faq-expanded__a"><p>Yes, if your total tax liability (after TDS credits) exceeds Rs 10,000 in a financial year. Advance tax must be paid in quarterly instalments (15 Jun, 15 Sep, 15 Dec, 15 Mar). Since influencer income is often seasonal (higher during festive months), quarterly estimation requires careful projection.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Influencer ka ITR kaunse form mein file hota hai?</strong> ITR-3 (full accounts) ya ITR-4 (presumptive 44AD). Profession Code 16021 select karo.</p>
                <p><strong>Brand se free products mile toh tax lagta hai?</strong> Haan, Rs 20,000 se zyada freebies par Section 194R ke under TDS lagta hai. Income mein report karna zaroori hai.</p>
                <p><strong>YouTube income par tax kaise lagta hai?</strong> Business income ke under slab rates par. Google US tax kaata hai toh Section 90/91 se credit milta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Influencer ITR Accurately - Code 16021 Now Mandatory</h2>
            <div class="content-text">
                
                <p>Profession Code 16021 is now mandatory for influencer ITR filing. Section 194R requires reporting of freebies exceeding Rs 20,000. YouTube AdSense foreign tax credit under DTAA reduces double taxation but requires Form 10F. GST registration is mandatory above Rs 20 lakh turnover. The AIS captures platform payment data, making unreported income detectable. Business expense deductions can reduce tax by Rs 1-5 lakh for active creators.</p>
                <p><strong>File accurately, claim all deductions, and stay compliant. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20influencer%20ITR%20filing%20in%20Gurugram." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Influencer ITR Filing in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">ITR filing for influencers in Gurugram covers income from YouTube AdSense, Instagram brand collaborations, affiliate marketing, online coaching, and merchandise - all classified as business income under PGBP. With Profession Code 16021, Section 194R on freebies, and increasing AIS data capture, the Income Tax Department has brought the creator economy firmly into the compliance framework.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted influencer ITR filing including multi-platform consolidation, full expense deduction claims, Section 194R compliance, AdSense foreign income treatment, GST advisory, and advance tax planning.</p>
                <p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted tax compliance partner for content creators across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20influencer%20ITR%20filing%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Influencer%20ITR%20Filing%20Gurugram&body=Hi%2C%20I%20need%20help%20with%20influencer%20ITR%20filing%20in%20Gurugram." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR for Influencers - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert influencer ITR filing services across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Influencer ITR Filing</div><div class="pa-block-sub">Select your city for localised influencer ITR services</div><div class="pa-city-grid">
                    <a href="/itr-for-influencers/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-influencers/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-influencers/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                </div></div>
            <div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end creator tax and compliance support in Gurugram</div><div class="pa-cross-grid">
                    <a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-business/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-filing-for-salary/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/tds-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a>
                </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on ITR for Influencers in Gurugram is reviewed quarterly by our CA team. Profession Code 16021, Section 194R rules, and presumptive taxation provisions are verified against the latest CBDT notifications.</p>
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
