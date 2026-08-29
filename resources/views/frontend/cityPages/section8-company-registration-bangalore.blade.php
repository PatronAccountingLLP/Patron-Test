
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
    <title>Section 8 Company Registration in Bangalore – MOA, AOA</title>
    <meta name="description" content="CA-assisted Section 8 company registration in Bangalore. NGO incorporation with 12A, 80G, CSR-1 support. Serving Electronic City, Whitefield, Manyata nonprofits. Call +91 945 945 6700.">
    <link rel="canonical" href="/section8-company-registration/bangalore">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Section 8 Company Registration in Bangalore – MOA, AOA">
    <meta property="og:description" content="CA-assisted Section 8 company registration in Bangalore. NGO incorporation with 12A, 80G, CSR-1 support. Serving Electronic City, Whitefield, Manyata nonprofits. Call +91 945 945 6700.">
    <meta property="og:url" content="/section8-company-registration/bangalore">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Section 8 Company Registration in Bangalore – MOA, AOA">
    <meta name="twitter:description" content="CA-assisted Section 8 company registration in Bangalore. NGO incorporation with 12A, 80G, CSR-1 support. Serving Electronic City, Whitefield, Manyata nonprofits. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Section 8 Company Registration in Bangalore",
          "description": "CA-assisted Section 8 company registration in Bangalore. NGO incorporation with 12A, 80G, CSR-1 support. Serving Electronic City, Whitefield, Manyata nonprofits. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/section8-company-registration/bangalore",
          "serviceType": "Section 8 Company Registration in Bangalore",
          "areaServed": {
            "@type": "City",
            "name": "Bangalore"
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
            "url": "https://www.patronaccounting.com/section8-company-registration/bangalore",
            "price": "15000"
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
              "name": "Section 8 Company Registration",
              "item": "https://www.patronaccounting.com/section8-company-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Section 8 Registration Bangalore",
              "item": "https://www.patronaccounting.com/section8-company-registration/bangalore"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which office handles Section 8 registration in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "RoC Bangalore handles incorporation while CRC Manesar issues the Section 8 license. Since 2019 license and Certificate of Incorporation are issued simultaneously through SPICe+. All filings done online via MCA portal."
              }
            },
            {
              "@type": "Question",
              "name": "What is the Section 8 registration fee in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Professional fees start from Rs 15,000. Government stamp duty on MOA and AOA is nil for Section 8 companies. Additional costs include DSC Rs 1,000-1,500 per director and post-incorporation 12AB 80G CSR-1 registrations."
              }
            },
            {
              "@type": "Question",
              "name": "How long does Section 8 registration take in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "15-25 working days from document submission including DSC 1-2 days name reservation 2-3 days MOA AOA drafting 2-3 days and SPICe+ with CRC license 10-15 days. Post-incorporation 12AB and 80G adds 7-15 working days."
              }
            },
            {
              "@type": "Question",
              "name": "Can Section 8 company receive CSR funds in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. With valid 12AB and 80G register on MCA CSR portal using Form CSR-1. This is mandatory for receiving CSR funds under Section 135. Bangalore IT companies generate over Rs 5,000 crore in annual CSR spending."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        Section 8 Company Registration in Bangalore: Build a Credible NGO
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">15 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, address proof of directors; registered office proof in Bangalore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Government fee Rs 0 (no stamp duty on MOA/AOA) + professional fees from Rs 15,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Minimum 2 directors and 2 members; at least 1 resident Indian director</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 15-25 working days (including CRC license approval)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Section%208%20Company%20Registration%20in%20Bangalore.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Section 8 Company Registration in Bangalore',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'section8-company-registration/bengaluru', 'label' => 'Section 8 Company Registration in Bangalore', 'selected' => true, 'disabled' => false],
                            ['value' => 'ngo-registration/bengaluru', 'label' => 'NGO Registration in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/bengaluru', 'label' => 'GST Registration in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration/bengaluru', 'label' => 'Pvt Ltd Registration in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return/bengaluru', 'label' => 'Income Tax Return in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration/bengaluru', 'label' => 'Startup Registration in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-registration/bengaluru', 'label' => 'Trademark Registration in Bangalore', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Professional and prompt responses throughout. They handled our Section 8 incorporation, 12A, 80G, and FCRA application. The MOA was drafted perfectly for CRC approval on first attempt.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RN</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ramesh Naidu</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">NGO Founder, Koramangala</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron got our education foundation registered as Section 8 and immediately filed CSR-1. We received our first CSR allocation from an Electronic City IT company within 4 months of incorporation.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Murthy</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Education Foundation Director</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We were confused between trust and Section 8. Patron explained the CSR-1 and limited liability advantages clearly. Section 8 was the right call - we now have 80G and receive regular donations.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7c3aed;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arun Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Healthcare Nonprofit Founder</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The co-working address issue at HSR Layout was handled proactively. Patron pre-formatted the sub-lease agreement and NOC. RoC Bangalore accepted without any queries. Smooth process.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0891b2;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Ganesh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Social Enterprise Founder</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron delivered everything - incorporation, 12AB, 80G, NGO Darpan, and CSR-1 - in under 5 weeks. Our environmental nonprofit was funding-ready before the CSR allocation season started.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vijay Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Environmental NGO Founder</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get expert CA and CS assistance for Section 8 company registration in Bangalore. From SPICe+ filing to 12AB, 80G, and CSR-1 registration, we handle everything.</p>
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
            <a href="#overview-section" class="toc-pill">Overview</a><a href="#what-section" class="toc-pill">What Is Section 8</a><a href="#who-section" class="toc-pill">Who Should Register</a><a href="#services-section" class="toc-pill">Services</a><a href="#procedure-section" class="toc-pill">6-Step Process</a><a href="#documents-section" class="toc-pill">Documents</a><a href="#challenges-section" class="toc-pill">Challenges</a><a href="#fees-section" class="toc-pill">Fees</a><a href="#timeline-section" class="toc-pill">Timeline</a><a href="#benefits-section" class="toc-pill">Why Patron</a><a href="#comparison-section" class="toc-pill">S8 vs Trust vs Society</a><a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 8 Company Registration in Bangalore: Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Section 8 Company Registration in Bangalore Services at a Glance</strong></p>
                    <p>Section 8 company registration in Bangalore provides the most credible non-profit structure under the Companies Act, 2013 for NGOs, social enterprises, and charitable foundations. With no minimum capital requirement, zero stamp duty, and eligibility for 12AB, 80G, CSR-1, and FCRA registrations, it is the preferred vehicle for organisations seeking domestic and international funding in Bangalore's active CSR ecosystem.</p>
                </div>
                <p>Bangalore is home to over 67,000 IT companies across Electronic City, Whitefield, and Manyata Tech Park. Under Section 135 of the Companies Act, companies with net profit exceeding Rs 5 crore must spend 2% on CSR - making Bangalore one of the largest CSR spending markets in India.</p>
                <div class="table-responsive-wrapper" style="margin:20px 0;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
                    <tr><td>Governing Law</td><td>Companies Act, 2013 - Section 8</td></tr>
                    <tr><td>Applicable To</td><td>NGOs, social enterprises, charitable foundations, educational institutions</td></tr>
                    <tr><td>Timeline</td><td>15-25 working days (including CRC license)</td></tr>
                    <tr><td>Cost Starting From</td><td>Rs 15,000 (professional fees; govt stamp duty nil)</td></tr>
                    <tr><td>Penalty for Non-Compliance</td><td>Rs 100/day late filing; director disqualification risk</td></tr>
                    <tr><td>Key Portal</td><td>MCA Portal (mca.gov.in), SPICe+ Form</td></tr>
                    <tr><td>Jurisdictional Office</td><td>RoC Bangalore; CRC Manesar (Section 8 license)</td></tr>
                </tbody></table></div><p</p>
                <p>The RoC Bangalore handles incorporation, while the CRC Manesar issues the Section 8 license. For social entrepreneurs in Koramangala and HSR Layout building nonprofits, Section 8 provides the structured governance framework that donors and CSR committees require. Patron Accounting's CA and CS team handles the complete <a href="/section8-company-registration">Section 8 company registration</a> - from SPICe+ filing to 12AB and 80G registration, CSR-1 filing, and NGO Darpan registration. Integrated with <a href="/statutory-audit">statutory audit</a> and <a href="/accounting-services">accounting services</a>.</p>
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
                <h2 class="section-title">What Is a Section 8 Company?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A Section 8 company is a non-profit entity registered under Section 8 of the Companies Act, 2013 for promoting commerce, art, science, education, sports, social welfare, charity, religion, or environmental protection, where all profits are applied to these objectives and no dividend is paid to members.</p>
                    <p>Unlike a trust or society, a Section 8 company operates under the Companies Act governance framework - with a board of directors, statutory auditor, mandatory annual filings (AOC-4 and MGT-7), and ROC oversight. This corporate structure gives it higher credibility with institutional donors, CSR committees, and international grant-makers.</p>
                    <p>For Bangalore's nonprofit ecosystem - from ed-tech foundations in Koramangala to environmental organisations working in the Western Ghats - Section 8 registration provides pan-India operational authority without requiring separate state registrations, unlike societies under the Karnataka Societies Registration Act, 1860.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Section 8 Company Registration in Bangalore:</strong></p>
                    <ul>
                        <li><strong>SPICe+ (INC-32):</strong> Unified MCA form for incorporation, PAN, TAN, and EPFO/ESIC registration.</li>
                        <li><strong>CRC (Central Registration Centre):</strong> Located in Manesar - the single authority issuing Section 8 licenses for all states since 2019.</li>
                        <li><strong>12AB Registration:</strong> Income tax exemption registration under Section 12AB of the Income Tax Act, 1961.</li>
                        <li><strong>80G Registration:</strong> Enables donors to claim 50% tax deduction on donations under Section 80G.</li>
                        <li><strong>CSR-1:</strong> MCA portal registration mandatory for receiving CSR funds under Section 135.</li>
                        <li><strong>FCRA:</strong> Foreign Contribution Regulation Act, 2010 - registration for receiving foreign donations (requires 3 years of operations).</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Section 8 Company Registration in Bangalore</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Zero Stamp Duty</span>
                        <strong>CSR + 12A + 80G Ready</strong>
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
            <h2 class="section-title">Who Should Register a Section 8 Company in Bangalore?</h2>
            <div class="content-text">
                
                <h3>Social Entrepreneurs in Koramangala and HSR Layout</h3><p>Ed-tech, skill development, and mental health nonprofits benefit from Section 8 credibility. The structured governance framework attracts CSR funding from Electronic City and Whitefield IT companies.</p>
                <h3>Education and Skill Development Foundations</h3><p>Schools, vocational training centres in Bangalore. MOA aligned with Schedule VII(ii) of Companies Act enables CSR funding from IT companies. Consider <a href="/ngo-registration/bangalore">NGO Registration in Bangalore</a> for comparison.</p>
                <h3>Healthcare and Public Health Nonprofits</h3><p>Hospitals, community clinics, mental health organisations. Can access both CSR funds and government health scheme grants via NGO Darpan.</p>
                <h3>Environmental and Sustainability Organisations</h3><p>Lake restoration, waste management, and urban green space initiatives. Schedule VII(iv) CSR eligibility applies. Section 8 structure provides transparency for donors.</p>
                <h3>CSR Implementing Agencies</h3><p>Under Section 135, companies with net profit above Rs 5 crore must spend 2% on CSR. CSR-1 registration on MCA portal is mandatory for receiving funds. Section 8 with 12AB + 80G + CSR-1 is the preferred structure.</p>
                <h3>Organisations Seeking Foreign Funding</h3><p>Must register as Section 8 before applying for FCRA under Section 12 of FCRA Act, 2010. Requires 3 years operational history. <a href="/private-limited-company-registration/bangalore">Pvt Ltd Registration in Bangalore</a> is the for-profit alternative.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in Section 8 Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>DSC and DIN Procurement</td><td>Digital Signature Certificate and Director Identification Number for all proposed directors</td></tr>
                        <tr><td>Name Reservation (SPICe+ Part A)</td><td>Unique name with terms like Foundation, Association, Council, Academy - no 'Limited' suffix required</td></tr>
                        <tr><td>MOA and AOA Drafting</td><td>CS-drafted with Section 8 objects clauses qualifying for 12AB, CSR-1, and FCRA eligibility</td></tr>
                        <tr><td>Section 8 License and Incorporation</td><td>SPICe+ filing with CRC Manesar for simultaneous license and Certificate of Incorporation (INC-16)</td></tr>
                        <tr><td>PAN and TAN Registration</td><td>Auto-allotted through SPICe+ process for all tax filings</td></tr>
                        <tr><td>12AB and 80G Registration</td><td>Form 10A filing for income tax exemption and donor tax deduction eligibility</td></tr>
                        <tr><td>CSR-1 and NGO Darpan Registration</td><td>MCA CSR portal registration + NITI Aayog NGO Darpan for government grants access</td></tr>
                        <tr><td>Bank Account Opening Support</td><td>Zero-balance current account facilitation at Bangalore branch using CIN, PAN, and board resolution</td></tr>

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
            <h2 class="section-title">Section 8 Company Registration in Bangalore: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Your dedicated CA and CS team handles the complete Section 8 registration via MCA portal. No visit to RoC Bangalore or CRC Manesar required.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain DSC and DIN for Proposed Directors</h3><p class="step-description">Each director obtains a Class 3 DSC online in 1-2 working days. DIN allotted through SPICe+ form. Patron verifies PAN-Aadhaar linkage and KYC compliance - the most common DIN rejection reason at RoC Bangalore.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="10" width="60" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="39" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text></svg></div><span class="illustration-label">Identity Verified</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Reserve the Company Name via SPICe+ Part A</h3><p class="step-description">File SPICe+ Part A with two name options. Section 8 names must include Foundation, Association, Council, Academy, or Federation. CRC Manesar processes approvals in 2-3 working days. Avoid names resembling existing Karnataka-registered societies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name Approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2-3 Days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="82" y1="62" x2="100" y2="80" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><text x="60" y="44" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">NGO</text></svg></div><span class="illustration-label">Name Reserved</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Draft MOA and AOA Aligned with Section 8 Objectives</h3><p class="step-description">CS team drafts MOA with objects under Section 8(1)(a), (b), and (c). Objects state all income applied to promote objectives, no dividend paid. For Bangalore nonprofits targeting CSR, objects aligned with Schedule VII of Companies Act.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MOA Drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CSR-Aligned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="35" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MOA</text><rect x="65" y="10" width="40" height="55" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="85" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOA</text></svg></div><span class="illustration-label">Objects Set</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File SPICe+ Part B with Supporting Documents</h3><p class="step-description">Complete SPICe+ Part B (INC-32) with MOA (INC-33), AOA (INC-34), affidavit INC-15, declarations, director KYC, and Bangalore registered office proof. Patron ensures every attachment meets MCA formatting to avoid CRC rejection.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SPICe+ Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All Attached</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SPICe+</text><rect x="30" y="38" width="60" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="30" y="50" width="60" height="8" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/></svg></div><span class="illustration-label">Application Submitted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">CRC License Issuance and Certificate of Incorporation</h3><p class="step-description">CRC Manesar reviews application, verifies charitable activities, and issues Section 8 license simultaneously with Certificate of Incorporation (INC-16). Processing 10-15 working days. No visit required - entirely online.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>License Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CIN Allotted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="37" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M52 37l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="25" y="72" width="70" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="84" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LICENSE+CIN</text></svg></div><span class="illustration-label">Incorporated</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Incorporation: 12AB, 80G, CSR-1, NGO Darpan</h3><p class="step-description">12AB registration (Form 10A) for income tax exemption. 80G registration for donor deductions. CSR-1 on MCA portal for CSR funding eligibility. NGO Darpan with NITI Aayog. Statutory auditor appointed (ADT-1 within 15 days). First board meeting within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax Exempt</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Funding Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="25" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="42" y="35" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12AB</text><rect x="60" y="22" width="25" height="20" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="72" y="35" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">80G</text><rect x="30" y="48" width="55" height="15" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="57" y="58" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CSR-1</text></svg></div><span class="illustration-label">Fully Registered</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Section 8 Registration in Bangalore</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card:</strong> Of all proposed directors and members - mandatory identity document.</li><li><strong>Aadhaar Card:</strong> Of all directors - OTP-based eKYC verification on MCA portal.</li><li><strong>Passport (Foreign/NRI Directors):</strong> At least one director must be Indian resident.</li><li><strong>Address Proof:</strong> Bank statement, electricity bill, or telephone bill not older than 2 months.</li><li><strong>Passport-Size Photograph:</strong> Of all directors and members.</li><li><strong>Registered Office Proof:</strong> Rent agreement/lease deed + NOC from landlord + utility bill for Bangalore premises.</li><li><strong>Draft MOA and AOA:</strong> Prepared by Patron's CS team with Section 8-compliant objects clauses.</li><li><strong>Declaration INC-15:</strong> By each subscriber and director.</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Bangalore-Specific Tip:</strong> If your Section 8 company's registered office is at a co-working space in Koramangala or HSR Layout, ensure the operator provides a sub-lease agreement and NOC specifically naming your proposed company. RoC Bangalore raises queries when co-working NOCs use generic formats.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Section 8 Registration Challenges in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>CRC License Delays Due to MOA Errors</td><td>Vague objects or commercial language causes CRC Manesar rejection</td><td>CS-drafted MOA with precise charitable language balancing CRC approval and CSR-1 eligibility</td></tr><tr><td>Section 8 vs Trust vs Society Confusion</td><td>First-time NGO founders default to trust/society without understanding trade-offs</td><td>Structured comparison highlighting limited liability, pan-India validity, and CSR-1 eligibility of Section 8</td></tr><tr><td>12AB and 80G Registration Delays</td><td>Delays affect donor confidence and CSR fund eligibility for Bangalore IT CSR allocations</td><td>Initiates Form 10A immediately post-incorporation with complete documentation</td></tr><tr><td>FCRA 3-Year Wait Period</td><td>Must be operational 3 years before FCRA application for foreign funding</td><td>Plans FCRA timeline from incorporation; assists with prior permission for specific projects</td></tr><tr><td>Annual Compliance Load</td><td>Same ROC requirements as Pvt Ltd - AOC-4, MGT-7, audit, AGM, director KYC</td><td>Full annual compliance management preventing Rs 100/day penalties and director disqualification</td></tr>

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
            <h2 class="section-title">Section 8 Company Registration Fees in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Stamp Duty on MOA/AOA</td><td>Rs 0 (Section 8 companies exempt)</td></tr><tr><td>DSC (per director)</td><td>Rs 1,000-1,500</td></tr><tr><td>Name Reservation (SPICe+ Part A)</td><td>Rs 1,000</td></tr><tr><td>SPICe+ Part B Filing</td><td>Rs 0 (no filing fee for Section 8)</td></tr><tr><td>Patron Professional Fees (MOA/AOA drafting, filing)</td><td>Rs 15,000-25,000</td></tr><tr><td>12AB Registration (Form 10A)</td><td>Rs 2,500-5,000</td></tr><tr><td>80G Registration (Form 10A)</td><td>Rs 2,500-5,000</td></tr><tr><td>CSR-1 Registration</td><td>Rs 1,000-2,000</td></tr><tr><td>NGO Darpan Registration</td><td>Free (NITI Aayog portal)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Section 8 Company Registration in Bangalore consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Section%208%20Company%20Registration%20in%20Bangalore.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 8 Registration Timeline in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DSC Procurement</td><td>1-2 working days</td></tr><tr><td>Name Reservation (SPICe+ Part A)</td><td>2-3 working days</td></tr><tr><td>MOA/AOA Drafting</td><td>2-3 working days</td></tr><tr><td>SPICe+ Part B Filing + CRC License</td><td>10-15 working days</td></tr><tr><td>Certificate of Incorporation</td><td>Simultaneous with license</td></tr><tr><td>12AB Registration (Form 10A)</td><td>7-15 working days</td></tr><tr><td>80G Registration (Form 10A)</td><td>7-15 working days</td></tr><tr><td>CSR-1 Registration</td><td>3-5 working days</td></tr><tr><td><strong>Total (Incorporation only)</strong></td><td><strong>15-25 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Bangalore Processing Note (Group B):</strong> No visit to RoC Bangalore or CRC Manesar required. Your dedicated CA/CS from Patron's pan-India team handles all filings online. CRC processing has improved since 2019 centralisation.</p>

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
            <h2 class="section-title">Why Choose Patron for Section 8 Registration in Bangalore?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Digital-First Incorporation</h3><p>100% online workflow. DSC, SPICe+, CRC license tracking, and 12AB/80G applications all managed digitally. No office visit needed.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>4-Office Pan-India CS Expertise</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-state Section 8 experience with CRC scrutiny patterns and MOA drafting requirements.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>RoC Bangalore Familiarity</h3><p>Understands RoC filing requirements, common query patterns, and response timelines. Reduces CRC rejection risk for Bangalore applicants.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Incorporation to Funding Readiness</h3><p>Not just registration - delivers funding-ready nonprofit with 12AB, 80G, CSR-1, NGO Darpan, and FCRA support. Complete post-incorporation compliance.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;margin:24px 0;"><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">10,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Businesses Served</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">4.9</span><br><span style="color:var(--text-muted);font-size:14px;">Google Rating</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">50,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Documents Filed</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">15+</span><br><span style="color:var(--text-muted);font-size:14px;">Years Experience</span></div></div><p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Bangalore nonprofits with CA and CS expertise covering Section 8 incorporation, statutory audit, 12AB/80G, and CSR-1 compliance from one team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 8 Company vs Trust vs Society in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Section 8 Company</th><th>Trust (Indian Trusts Act)</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Companies Act, 2013</td><td>Indian Trusts Act, 1882</td></tr><tr><td>Jurisdiction</td><td>Central (MCA) - pan-India</td><td>State-specific</td></tr><tr><td>Minimum Members</td><td>2 directors + 2 members</td><td>2 (settlor + trustee)</td></tr><tr><td>Liability</td><td>Limited</td><td>Unlimited for trustees</td></tr><tr><td>Credibility with Donors</td><td>Highest (statutory audit, ROC oversight)</td><td>Moderate</td></tr><tr><td>CSR Funding Eligibility</td><td>Yes (CSR-1 registration)</td><td>Possible but less preferred</td></tr><tr><td>FCRA Eligibility</td><td>Yes (after 3 years)</td><td>Yes (after 3 years)</td></tr><tr><td>Amendment of Objects</td><td>Board resolution + ROC approval</td><td>Court order required</td></tr><tr><td>Annual Compliance</td><td>Higher (AOC-4, MGT-7, audit)</td><td>Lower (IT returns only)</td></tr>

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
                
                <ul><li><a href="/section8-company-registration">Section 8 Company Registration in India</a> - Parent national service page</li><li><a href="/ngo-registration">NGO Registration</a> - Complete NGO setup advisory</li><li><a href="/statutory-audit">Statutory Audit</a> - Mandatory for all Section 8 companies</li><li><a href="/accounting-services">Accounting Services</a> - Bookkeeping for nonprofits</li><li>Society Registration - Alternative NGO structure comparison</li></ul>

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
                
                <ul><li>Companies Act, 2013 - Section 8: Formation, governance, and compliance of non-profit companies</li><li>Companies (Incorporation) Rules, 2014 (amended 2019): SPICe+ simultaneous license and incorporation</li><li>Income Tax Act, 1961 - Section 12AB: Income tax exemption for charitable organisations</li><li>Income Tax Act, 1961 - Section 80G: Donor tax deduction registration</li><li>FCRA, 2010 - Section 12: Foreign donation registration (requires 3 years operations)</li><li>Companies Act, 2013 - Section 135 and Schedule VII: CSR eligibility and activities</li><li>Karnataka Societies Registration Act, 1860: Alternative state-level NGO path</li></ul><h3>Annual Compliance</h3><ul><li>AOC-4 (financial statements) within 30 days of AGM</li><li>MGT-7 (annual return) within 60 days of AGM</li><li>Statutory audit mandatory (ADT-1 within 15 days)</li><li>Minimum 2 board meetings per year; AGM within 6 months of FY-end</li><li>Director KYC (DIR-3 KYC annually); ITR-7 filed annually</li></ul><h3>Penalties</h3><ul><li>Late AOC-4/MGT-7: Rs 100/day per form, no cap</li><li>Director disqualification: Section 164(2) for 3+ years non-filing</li><li>License cancellation: Section 8(6) for contravening objects</li></ul><p><strong>Authorities:</strong> RoC Bangalore | CRC Manesar | MCA - <a href="https://mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> | NGO Darpan - <a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">ngodarpan.gov.in</a> | FCRA - <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">fcraonline.nic.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Section 8 Company Registration in Bangalore</h2>
                    <p class="faq-expanded__lead">Answers to common questions about Section 8 company registration in Bangalore, covering NGO structure, fees, CSR funding, and compliance.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Bangalore', 'enquiryService' => 'Section 8 Company Registration in Bangalore'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles Section 8 registration in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>RoC Bangalore handles incorporation, while CRC Manesar issues the Section 8 license. Since 2019, license and Certificate of Incorporation are issued simultaneously through SPICe+. All filings done online via MCA portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get Section 8 registration done online from Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Yes. The entire process - DSC, name reservation, SPICe+ filing, CRC license, and Certificate of Incorporation - is completed online. Patron's CA and CS team handles all filings digitally without any office visit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the Section 8 registration fee in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Professional fees start from Rs 15,000. Government stamp duty on MOA/AOA is nil for Section 8. Additional costs: DSC (Rs 1,000-1,500 per director) and post-incorporation 12AB, 80G, CSR-1 registrations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does Section 8 registration take in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>15-25 working days from document submission. Includes DSC (1-2 days), name reservation (2-3 days), MOA/AOA drafting (2-3 days), and SPICe+ with CRC license (10-15 days). Post-incorporation 12AB/80G adds 7-15 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between Section 8 and trust or society?</h3>
                        <div class="faq-expanded__a"><p>Section 8 is registered under Companies Act with MCA - pan-India validity, limited liability, highest donor credibility, CSR-1 eligible. Trust has unlimited liability and needs court order to amend. Society is state-level under Karnataka Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can Section 8 company receive CSR funds in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Yes. With valid 12AB and 80G, register on MCA CSR portal using CSR-1. Mandatory for receiving CSR funds under Section 135. Bangalore IT companies generate over Rs 5,000 crore in annual CSR spending.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can NRIs be directors in a Bangalore Section 8 company?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs and foreign nationals can be directors provided at least one director is an Indian resident (182+ days in India). Foreign directors need valid DIN and DSC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is GST registration required for Section 8 companies?</h3>
                        <div class="faq-expanded__a"><p>Required only if annual turnover exceeds Rs 20 lakh (services) or Rs 40 lakh (goods). Most Section 8 companies receiving only donations and grants are not required to register for GST.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Section 8 company register kaise karein Bangalore mein?</strong> MCA portal par SPICe+ file karo with DSC, DIN, name approval, MOA, AOA. CRC Manesar se license aur Certificate ek saath milta hai. Patron sab online handle karta hai.</p><p><strong>Section 8 company mein kitna paisa lagta hai?</strong> Govt stamp duty nil. Professional fees Rs 15,000 se start. Total cost including DSC, filing, 12AB/80G typically Rs 20,000-35,000.</p><p><strong>NGO ke liye Section 8 best hai ya trust?</strong> Section 8 offers higher credibility, limited liability, pan-India validity, and CSR-1 eligibility. Trust has lower compliance but unlimited liability.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your Section 8 Registration in Bangalore</h2>
            <div class="content-text">
                
                <p>Section 8 companies must appoint a statutory auditor within 15 days (Form ADT-1), hold the first board meeting within 30 days, and file annual returns within prescribed timelines. Missing deadlines triggers Rs 100/day penalties with no cap, and 3 consecutive years of non-filing leads to director disqualification under Section 164(2). For Bangalore nonprofits planning to apply for CSR funds, 12AB and 80G registration must be initiated promptly - CSR committees require both before releasing allocations.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Section 8 Registration in Bangalore with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Section 8 company registration in Bangalore provides the most structured, credible, and funding-ready nonprofit framework. For a city where IT companies generate thousands of crores in annual CSR obligations, Section 8 delivers what donors and government agencies require: corporate governance, statutory audit, and MCA oversight.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's CA and CS team handles Section 8 registration digitally - from SPICe+ filing to 12AB, 80G, CSR-1, and NGO Darpan. With offices in Pune, Mumbai, Delhi, and Gurugram, and 15+ years serving 10,000+ businesses.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP is a multi-disciplinary professional services firm specialising in company registration, tax compliance, statutory audit, and nonprofit advisory.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Section%208%20Company%20Registration%20in%20Bangalore.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Section%208%20Company%20Registration%20in%20Bangalore&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20Section%208%20Company%20Registration%20in%20Bangalore.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Section 8 Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA and CS-assisted Section 8 company registration in major cities across India.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/section-8-company-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/section8-company-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/section8-company-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/section8-company-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/section8-company-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/section8-company-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/section8-company-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Bangalore</div><div class="pa-block-sub">End-to-end nonprofit and compliance support in Bangalore</div><div class="pa-cross-grid"><a href="/ngo-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/gst-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/private-limited-company-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/income-tax-return/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/trademark-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Bangalore</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Section 8 registration rules, 12AB renewal, and FCRA amendments subject to change. Freshness Tier 2.</p>
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
