
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
    <title>IEC Registration in Chennai – DGFT Process, Fees &amp; Export</title>
    <meta name="description" content="CA-assisted IEC import export code registration in Chennai via DGFT. Lifetime validity. Serving MEPZ, Chennai Port, OMR exporters. Call +91 945 945 6700.">
    <link rel="canonical" href="/iec-registration/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IEC Registration in Chennai – DGFT Process, Fees &amp; Export">
    <meta property="og:description" content="CA-assisted IEC import export code registration in Chennai via DGFT. Lifetime validity. Serving MEPZ, Chennai Port, OMR exporters. Call +91 945 945 6700.">
    <meta property="og:url" content="/iec-registration/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IEC Registration in Chennai – DGFT Process, Fees &amp; Export">
    <meta name="twitter:description" content="CA-assisted IEC import export code registration in Chennai via DGFT. Lifetime validity. Serving MEPZ, Chennai Port, OMR exporters. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "IEC Registration in Chennai",
          "description": "CA-assisted IEC import export code registration in Chennai via DGFT. Lifetime validity. Serving MEPZ, Chennai Port, OMR exporters. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/iec-registration/chennai",
          "serviceType": "IEC Registration in Chennai",
          "areaServed": {
            "@type": "City",
            "name": "Chennai"
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
            "url": "https://www.patronaccounting.com/iec-registration/chennai",
            "price": "1499"
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
              "name": "Import Export Code",
              "item": "https://www.patronaccounting.com/iec-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "IEC Registration Chennai",
              "item": "https://www.patronaccounting.com/iec-registration/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which authority issues IEC in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "IEC is issued by DGFT through the online portal dgft.gov.in. The DGFT Regional Authority Chennai handles Tamil Nadu jurisdiction. The entire process is online with no physical visit required."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for IEC registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Government fee is Rs 500 one-time paid online. No annual renewal fee. Patron all-inclusive professional fee starts from Rs 1,499 covering DGFT portal filing document preparation and IEC certificate delivery."
              }
            },
            {
              "@type": "Question",
              "name": "How long does IEC registration take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "IEC is processed within 2-3 working days from submission on DGFT portal. In many cases certificate is issued immediately. AD Code registration with bank takes additional 3-5 days."
              }
            },
            {
              "@type": "Question",
              "name": "Does IEC expire or need renewal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "IEC has lifetime validity and does not expire. However DGFT mandates annual KYC update between April and June on dgft.gov.in. Failure results in IEC suspension and customs clearance block."
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
                        IEC Registration in Chennai: CA-Assisted Import Export Code via DGFT
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business proof, address proof, bank account, cancelled cheque</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> IEC registration govt fee Rs 500. Patron all-inclusive from Rs 1,499</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any business entity - proprietorship, partnership, LLP, company, trust</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 2-3 working days for IEC certificate from DGFT</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20IEC%20Registration%20in%20Chennai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'IEC Registration in Chennai',
                                            'city'     => 'Chennai',
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled our IEC registration and AD Code setup in under a week. The CA also filed our GST LUT immediately - we were export-ready before our first shipment date. Highly professional team.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MK</div>
                    <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Mahesh Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Auto Components Exporter</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We needed IEC urgently for a seafood export order. Patron got the certificate in 2 days and coordinated AD Code with our bank. They also handle our annual KYC update now - one less thing to worry about.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div>
                    <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ravi Shankar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Seafood Processing Unit</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As an IT company on OMR, we were confused about whether we needed IEC. Patron's CA clarified the FIRC requirements and got us registered. Now they manage our FEMA compliance and foreign remittances too.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#7c3aed;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AP</div>
                    <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Anitha Priya</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, IT Services Company</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
                </div>
            </div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Got our IEC, AD Code, and LUT all done together. The CA understood MEPZ documentation requirements perfectly. Export incentive claims under RoDTEP are now streamlined. Excellent service.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#0891b2;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VR</div>
                    <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Venkatesh R</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manager, MEPZ Export Unit</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
                </div>
            </div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron helped us link our old pre-GST IEC to the new PAN-based system. No other consultant could figure this out. They also set up our RCMC and annual compliance tracking. Very knowledgeable.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SK</div>
                    <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Suresh Krishnan</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Partner, Trading House</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get expert CA assistance for IEC registration in Chennai. From DGFT filing to annual KYC, we handle everything.</p>
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
            <a href="#overview-section" class="toc-pill">Overview</a>
            <a href="#what-section" class="toc-pill">What Is IEC</a>
            <a href="#who-section" class="toc-pill">Who Needs It</a>
            <a href="#services-section" class="toc-pill">Services Included</a>
            <a href="#procedure-section" class="toc-pill">6-Step Process</a>
            <a href="#documents-section" class="toc-pill">Documents Required</a>
            <a href="#challenges-section" class="toc-pill">Common Challenges</a>
            <a href="#fees-section" class="toc-pill">Fees</a>
            <a href="#timeline-section" class="toc-pill">Timeline</a>
            <a href="#benefits-section" class="toc-pill">Why Patron</a>
            <a href="#comparison-section" class="toc-pill">IEC vs GST for Exports</a>
            <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Registration in Chennai: Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IEC Registration in Chennai Services at a Glance</strong></p>
                    <p>The Import Export Code (IEC) is a mandatory 10-digit identification number issued by the Directorate General of Foreign Trade (DGFT) for any business engaged in importing or exporting goods from India. Without IEC, customs authorities will not allow goods clearance, and banks will not process foreign trade remittances. IEC has lifetime validity with no renewal - only annual KYC update (April-June) required. Since GST, IEC is PAN-based.</p>
                </div>
                <p>Chennai is Tamil Nadu's international trade gateway. The Chennai Port Trust handles over 50 million tonnes of cargo annually, making it one of India's busiest container ports. Kamarajar Port (Ennore) specialises in coal, iron ore, and liquid cargo. Chennai Airport's cargo complex processes electronics, auto parts, and pharma shipments. MEPZ (Madras Export Processing Zone) houses 100+ export-oriented units. Sriperumbudur's auto corridor exports components to global OEMs. OMR's IT companies export software services worth billions annually.</p>
                <div class="table-responsive-wrapper" style="margin:20px 0;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Foreign Trade (Development & Regulation) Act, 1992</td></tr>
                        <tr><td>Policy</td><td>Foreign Trade Policy (FTP) 2023</td></tr>
                        <tr><td>Authority</td><td>DGFT - Directorate General of Foreign Trade</td></tr>
                        <tr><td>Portal</td><td>dgft.gov.in</td></tr>
                        <tr><td>IEC Format</td><td>10-digit code (same as PAN since GST implementation)</td></tr>
                        <tr><td>Validity</td><td>Lifetime - no renewal required</td></tr>
                        <tr><td>Annual Update</td><td>KYC update mandatory April-June every year</td></tr>
                        <tr><td>Govt Fee</td><td>Rs 500 (one-time)</td></tr>
                        <tr><td>Timeline</td><td>2-3 working days (immediate in many cases)</td></tr>
                        <tr><td>Exemption</td><td>Service exporters not taking FTP benefits are exempt</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Every business shipping goods through Chennai Port, Kamarajar Port, or Chennai Airport cargo needs a valid IEC. Customs will not clear shipments without it. Banks processing letters of credit, foreign remittances, and export proceeds require IEC verification. Patron Accounting's CA team handles the complete <a href="/iec-registration">IEC registration</a> on dgft.gov.in - from PAN verification and document upload to DGFT processing and IEC certificate delivery with QR code. Post-registration, the same CA manages GST LUT filing (for zero-rated exports), AD Code registration with banks, RCMC for export scheme benefits, and FEMA compliance for foreign remittances.</p>
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
                <h2 class="section-title">What Is IEC Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>IEC registration is the process of obtaining an Import Export Code - a 10-digit identification number from the Directorate General of Foreign Trade (DGFT) - enabling a business to legally import goods into India or export goods from India.</p>
                    <p>The IEC is issued under the Foreign Trade (Development and Regulation) Act, 1992 and is the primary identification for all international trade transactions. Since GST implementation, the IEC is PAN-based - meaning the IEC number is the same as your business PAN. However, a separate IEC must still be obtained from DGFT through the online application process. The IEC is required at every stage of international trade: customs clearance at ports and airports, bank processing of foreign currency transactions, claiming export incentives under RoDTEP/MEIS/SEIS, and filing shipping bills. One IEC covers both import and export activities.</p>
                    <p>For Chennai, the IEC unlocks access to three major trade infrastructure points: Chennai Port Trust (containerised cargo), Kamarajar Port at Ennore (bulk cargo), and Chennai Airport Cargo Complex (air freight). MEPZ units, Sriperumbudur manufacturers, and OMR IT companies all use IEC for their export operations. Chennai Customs processes thousands of bills of entry and shipping bills daily - each requiring a valid IEC. The DGFT Regional Authority (RA), Chennai handles IEC-related matters for the Tamil Nadu jurisdiction.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IEC Registration in Chennai:</strong></p>
                    <ul>
                        <li><strong>IEC:</strong> Import Export Code - 10-digit identification number from DGFT, same as business PAN since GST.</li>
                        <li><strong>DGFT:</strong> Directorate General of Foreign Trade - the authority issuing IEC and administering Foreign Trade Policy.</li>
                        <li><strong>AD Code:</strong> Authorised Dealer Code - 14-digit bank branch code registered with customs for trade remittances.</li>
                        <li><strong>GST LUT:</strong> Letter of Undertaking filed on GST portal enabling zero-rated export supply without IGST payment.</li>
                        <li><strong>RCMC:</strong> Registration Cum Membership Certificate from Export Promotion Council for DGFT scheme benefits.</li>
                        <li><strong>RoDTEP:</strong> Remission of Duties and Taxes on Exported Products - export incentive scheme.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IEC Registration in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Lifetime Validity</span>
                        <strong>IEC in 2-3 Days</strong>
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
            <h2 class="section-title">Who Needs IEC Registration in Chennai?</h2>
            <div class="content-text">
                
                <h3>Manufacturers Exporting from Sriperumbudur and Ambattur</h3>
                <p>Auto-component manufacturers, electronics assemblers, and engineering goods producers exporting through Chennai Port need IEC. Companies in Sriperumbudur's vendor network require each supplier to have IEC for direct export or deemed export transactions.</p>
                <h3>MEPZ Export-Oriented Units</h3>
                <p>All units in the Madras Export Processing Zone exporting processed foods, electronics, leather goods, and garments need IEC for customs clearance and export incentive claims. MEPZ units benefit from additional DGFT schemes like Advance Authorization and EPCG.</p>
                <h3>IT and ITES Companies on OMR</h3>
                <p>Software services companies exporting to international clients. While service exporters not availing FTP benefits are exempt from IEC, most OMR IT companies obtain IEC to access RoDTEP/SEIS benefits and facilitate smooth FEMA-compliant foreign remittance processing through banks.</p>
                <h3>Importers and Trading Houses</h3>
                <p>Raw material importers, consumer electronics traders, and wholesale distributors in Parry's Corner and Broadway importing goods through Chennai Port or Airport. IEC is mandatory for customs clearance on bills of entry and for banks to process import payments.</p>
                <h3>Seafood and Agri-Product Exporters</h3>
                <p>Seafood processors in Kasimedu and Royapuram, spice exporters, and agricultural product traders exporting through Chennai Port and Airport. These exporters also need APEDA registration alongside IEC.</p>
                <h3>Textile and Leather Exporters</h3>
                <p>Chennai's textile industry exports garments, fabrics, and home furnishings globally. Leather goods from the Ambur-Vaniyambadi corridor are processed and exported through Chennai. IEC enables customs clearance and access to Duty Drawback and RoDTEP schemes. Consider <a href="/gst-registration/chennai">GST Registration in Chennai</a> alongside IEC for complete export compliance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>DGFT Portal Registration and IEC Application</td><td>Complete application filing on dgft.gov.in including PAN verification, business details submission, document upload, and fee payment</td></tr>
                        <tr><td>Document Preparation</td><td>PAN card, Aadhaar, business registration proof, address proof (TNEB bill + rent agreement for Chennai premises), cancelled cheque/bank certificate, photographs</td></tr>
                        <tr><td>IEC Certificate Delivery</td><td>Digital IEC certificate with QR code for verification. Certificate valid at all ports, airports, and ICDs across India</td></tr>
                        <tr><td>AD Code Registration with Bank</td><td>Authorised Dealer Code registration with your Chennai bank branch for processing export proceeds and import payments</td></tr>
                        <tr><td>GST LUT Filing (Zero-Rated Exports)</td><td>GST LUT filed on GST portal enabling zero-rated export supply without payment of IGST. LUT filed annually</td></tr>
                        <tr><td>RCMC Assistance</td><td>Registration Cum Membership Certificate from relevant Export Promotion Council for availing DGFT export schemes like RoDTEP, Advance Authorization, and EPCG</td></tr>
                        <tr><td>Annual KYC Update</td><td>Mandatory annual KYC update on DGFT portal between April and June. Failure leads to IEC suspension. Patron tracks and files annually</td></tr>
                        <tr><td>FEMA Compliance</td><td>Foreign Exchange Management Act compliance for export proceeds realisation, import payments, and foreign currency account management</td></tr>

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
            <h2 class="section-title">IEC Registration Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Your dedicated CA from Patron's pan-India team handles the complete IEC registration process online via dgft.gov.in. No DGFT office visit required.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Verify PAN and Gather Business Documents</h3>
        <p class="step-description">Your dedicated CA verifies your business PAN (since IEC is PAN-based, one IEC per PAN). Documents collected: PAN card, Aadhaar of proprietor/partners/directors, business registration proof, Chennai address proof (TNEB electricity bill + rent agreement or property deed), cancelled cheque or bank certificate, and passport-size photographs. For companies and LLPs, the board resolution is also prepared.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN Verification</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Document Checklist</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><rect x="70" y="55" width="28" height="28" rx="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M78 69l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Documents Ready</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Register on DGFT Portal and Apply for IEC</h3>
        <p class="step-description">Patron's CA registers on dgft.gov.in using the applicant's PAN, mobile number, and email. OTP verification is completed on both mobile and email. The CA navigates to Services > Apply for IEC and fills the application with business details: entity name, type, establishment date, Chennai registered address, PAN, and bank account details.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DGFT Portal Access</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP Verified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="35" y="40" width="50" height="8" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M60 72v12" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="88" r="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/></svg></div>
            <span class="illustration-label">Portal Filing</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Upload Documents and Pay Government Fee</h3>
        <p class="step-description">Scanned copies of all required documents are uploaded in PDF format (max 5 MB each): proof of establishment/incorporation, PAN card, address proof, cancelled cheque, and photographs. The government fee of Rs 500 is paid online via net banking or debit card. An Ecom Reference Number is generated upon successful submission and payment.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents Uploaded</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 500 Paid</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 25v20" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><path d="M50 35l10-10 10 10" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="75" width="50" height="15" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="86" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 500</text></svg></div>
            <span class="illustration-label">Fee Paid</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">DGFT Processing and IEC Certificate Issuance</h3>
        <p class="step-description">The DGFT processes the application and verifies submitted documents. In most cases, the IEC certificate is issued immediately or within 2-3 working days. The certificate is issued digitally with a QR code for online verification. The IEC number is now active for use across all Indian ports, airports, and ICDs - including Chennai Port Trust, Kamarajar Port, and Chennai Airport Cargo Complex.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IEC Issued</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>QR Code Certificate</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="37" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M52 37l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="40" y="72" width="40" height="20" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><rect x="45" y="76" width="12" height="12" fill="#14365F" opacity="0.15"/><rect x="60" y="76" width="12" height="12" fill="#14365F" opacity="0.15"/></svg></div>
            <span class="illustration-label">Certificate Ready</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Register AD Code with Bank and File GST LUT</h3>
        <p class="step-description">With the IEC certificate, Patron's CA registers the Authorised Dealer (AD) Code with your Chennai bank branch (SBI, HDFC, ICICI, Indian Bank, Axis Bank). This enables the bank to process export proceeds and import payments linked to your IEC. For Chennai exporters, Patron files the GST LUT on the GST portal enabling zero-rated export supply without IGST payment.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AD Code Registered</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT Filed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="20" width="45" height="40" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="32" y="45" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BANK</text><rect x="65" y="20" width="45" height="40" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="87" y="45" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LUT</text><path d="M55 40h10" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><path d="M62 37l3 3-3 3" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Export Ready</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Set Up Export Compliance and Track Annual KYC</h3>
        <p class="step-description">Patron establishes your export compliance framework: AD Code with bank, GST LUT annual filing, RCMC application with the relevant Export Promotion Council, shipping bill documentation standards, and FEMA compliance for foreign currency realisation (within 9 months for goods exports). The critical annual IEC KYC update (April-June on dgft.gov.in) is tracked and filed by Patron's CA to prevent IEC suspension.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FEMA Compliance</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC Tracked</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="30" x2="85" y2="30" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="35" y1="42" x2="85" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="35" y1="54" x2="85" y2="54" stroke="#14365F" stroke-width="1" opacity="0.2"/><circle cx="42" cy="36" r="4" fill="#F5A623"/><circle cx="60" cy="48" r="4" fill="#25D366"/><circle cx="78" cy="24" r="4" fill="#E8712C"/><path d="M30 80l20-8 20 12 20-15 10 5" stroke="#25D366" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Compliance Active</span>
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
            <h2 class="section-title">Documents Required for IEC Registration in Chennai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>PAN Card:</strong> Business PAN (for company/LLP) or individual PAN (for proprietorship). IEC number = PAN number.</li>
                    <li><strong>Aadhaar Card:</strong> Of proprietor/all partners/all directors for identity verification.</li>
                    <li><strong>Business Registration Proof:</strong> Certificate of Incorporation (company/LLP), Partnership Deed, or GST Registration Certificate (proprietorship).</li>
                    <li><strong>Address Proof of Chennai Premises:</strong> TNEB electricity bill + rent agreement or property deed for the Chennai office.</li>
                    <li><strong>Bank Account Details:</strong> Cancelled cheque or bank certificate showing account number, IFSC, and account holder name.</li>
                    <li><strong>Passport-Size Photographs:</strong> Of proprietor/partners/directors.</li>
                    <li><strong>Board Resolution (Companies/LLPs):</strong> Authorising application for IEC with designated signatory.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Chennai-Specific Tip:</strong> MEPZ exporters must ensure their IEC address matches their MEPZ unit address. DGFT may flag applications where the registered office is in the city but the export activity is from MEPZ. Patron coordinates address details to match customs documentation for seamless shipping bill processing at Chennai Customs.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IEC Registration Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>IEC-PAN Mismatch After GST</td><td>Pre-GST IEC with different number causes mismatch during customs clearance</td><td>Links old IEC to the new PAN-based system on the DGFT portal</td></tr>
                        <tr><td>Annual KYC Update Missed (April-June)</td><td>IEC suspension - customs will not clear shipments until updated</td><td>Tracks and files KYC annually on dgft.gov.in</td></tr>
                        <tr><td>AD Code Not Registered with Bank</td><td>Bank cannot process export proceeds or foreign remittances</td><td>Registers AD Code immediately after IEC issuance</td></tr>
                        <tr><td>GST LUT Not Filed for Exports</td><td>Must pay IGST and claim refund later - blocking working capital</td><td>Files LUT alongside IEC for zero-rated supply without IGST</td></tr>
                        <tr><td>Service Export IEC Confusion</td><td>OMR IT companies confused about whether IEC is needed for software services</td><td>Advises based on specific banking and FTP benefit requirements</td></tr>

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
            <h2 class="section-title">IEC Registration Fees in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (IEC Registration via DGFT)</td><td>Rs 500 (one-time)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 1,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>IEC + AD Code Registration</td><td>Rs 2,999</td></tr>
                        <tr><td>IEC + AD Code + GST LUT</td><td>Rs 4,999</td></tr>
                        <tr><td>IEC + Full Export Compliance Setup (AD Code + LUT + RCMC guidance)</td><td>Rs 7,999</td></tr>
                        <tr><td>Annual KYC Update</td><td>Rs 999</td></tr>
                        <tr><td>IEC Modification</td><td>Rs 999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IEC Registration in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20IEC%20Registration%20in%20Chennai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC Registration Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Collection</td><td>1-2 days</td></tr>
                        <tr><td>DGFT Portal Registration + Filing</td><td>1 day</td></tr>
                        <tr><td>DGFT Processing</td><td>Immediate to 2-3 days</td></tr>
                        <tr><td>IEC Certificate (Digital with QR code)</td><td>Included above</td></tr>
                        <tr><td>AD Code Registration with Bank</td><td>3-5 days</td></tr>
                        <tr><td>GST LUT Filing</td><td>1-2 days</td></tr>
                        <tr><td><strong>Total (Export Readiness)</strong></td><td><strong>2-7 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Chennai Processing Note (Group B):</strong> The entire IEC registration is online on dgft.gov.in. No visit to any DGFT office required. The IEC certificate is issued digitally. Patron handles all portal filing, document upload, and post-registration compliance digitally.</p>

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
            <h2 class="section-title">Why Choose Patron for IEC Registration in Chennai?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Led Export Compliance</h3><p>IEC is just the entry ticket. Patron's CA sets up the complete export compliance chain: IEC -> AD Code -> GST LUT -> RCMC -> FEMA compliance -> shipping bill standards.</p></article>
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-location exporters get centralised IEC, GST, and FEMA compliance across all offices.</p></article>
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Chennai Trade Infrastructure Knowledge</h3><p>Your file is handled by a CA familiar with Chennai Port Trust customs procedures, Kamarajar Port documentation, Chennai Airport cargo requirements, and MEPZ export compliance.</p></article>
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Annual KYC Tracking</h3><p>The critical April-June annual KYC update is tracked and filed by Patron's CA. No IEC suspension risk. Never miss the annual update window again.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;margin:24px 0;">
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">10,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Businesses Served</span></div>
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">4.9</span><br><span style="color:var(--text-muted);font-size:14px;">Google Rating</span></div>
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">50,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Documents Filed</span></div>
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">15+</span><br><span style="color:var(--text-muted);font-size:14px;">Years Experience</span></div>
                </div>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai through a digital-first CA team. We combine IEC registration with AD Code, GST LUT, RCMC, and FEMA compliance from one team - registration portals deliver IEC and stop.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IEC vs GST for Exports: Chennai Guide</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>IEC (Import Export Code)</th><th>GST for Exports</th></tr></thead>
                    <tbody>
                        <tr><td>Purpose</td><td>Identity for customs clearance and DGFT schemes</td><td>Tax compliance for zero-rated supply</td></tr>
                        <tr><td>Authority</td><td>DGFT (dgft.gov.in)</td><td>GST portal (gst.gov.in)</td></tr>
                        <tr><td>Number</td><td>10-digit (= PAN)</td><td>15-digit GSTIN</td></tr>
                        <tr><td>Validity</td><td>Lifetime (annual KYC update)</td><td>Active as long as returns filed</td></tr>
                        <tr><td>Required For</td><td>Customs clearance, shipping bills, bank foreign trade</td><td>Tax invoices, ITC claims, IGST refunds</td></tr>
                        <tr><td>Export Requirement</td><td>Mandatory for goods export</td><td>GST LUT for zero-rated supply without IGST</td></tr>
                        <tr><td>Refunds</td><td>Export incentives via DGFT (RoDTEP, Duty Drawback)</td><td>IGST refund or ITC refund on inputs</td></tr>
                        <tr><td>Chennai Example</td><td>MEPZ unit clearing goods at Chennai Port</td><td>Same unit filing GSTR-1 with zero-rated supply details</td></tr>

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
                
                <ul>
                    <li><a href="/iec-registration">Import Export Code (IEC) Registration in India</a> - Parent national service page for IEC registration across all states</li>
                    <li><a href="/gst-registration">GST Registration</a> - GSTIN required alongside IEC for export compliance</li>
                    <li><a href="/gst-returns">GST Return Filing</a> - Monthly GSTR-1, GSTR-3B with zero-rated supply details</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Company incorporation for export businesses</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Brand protection for export products</li>
                    <li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Tax compliance for exporters and importers</li>
                </ul>

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
                
                <ul>
                    <li>Foreign Trade (Development & Regulation) Act, 1992 - primary legislation governing IEC and foreign trade</li>
                    <li>Foreign Trade Policy (FTP) 2023 - current policy framework for export incentives and schemes</li>
                    <li>Customs Act, 1962 - customs clearance procedures at ports and airports</li>
                    <li>FEMA, 1999 - Foreign Exchange Management Act for foreign currency transactions</li>
                    <li>CGST Act, 2017 Section 16 (zero-rated supply), Section 54 (refunds) - GST compliance for exporters</li>
                    <li>DGFT Notification on IEC and Annual Update requirements</li>
                </ul>
                <h3>Key Compliance Deadlines</h3>
                <ul>
                    <li>Annual IEC KYC update: April-June on dgft.gov.in (mandatory)</li>
                    <li>GST LUT: Annual filing before 31 March for zero-rated exports</li>
                    <li>Export proceeds realisation: Within 9 months under FEMA</li>
                    <li>Shipping bill filing: With customs at port/airport for every export consignment</li>
                    <li>RCMC: Required for availing DGFT export schemes</li>
                </ul>
                <h3>Penalties</h3>
                <ul>
                    <li>Export/import without IEC: Customs will not clear goods; penalty under Customs Act</li>
                    <li>Missed annual KYC: IEC suspension - no customs clearance until updated</li>
                    <li>Non-realisation of export proceeds: FEMA violation; RBI reporting; potential DEL (Denied Entity List)</li>
                </ul>
                <p><strong>Authority:</strong> DGFT - <a href="https://dgft.gov.in" target="_blank" rel="noopener">dgft.gov.in</a> | ICEGATE - <a href="https://www.icegate.gov.in" target="_blank" rel="noopener">icegate.gov.in</a> | RBI (FEMA) - <a href="https://www.rbi.org.in" target="_blank" rel="noopener">rbi.org.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: IEC Registration in Chennai</h2>
                    <p class="faq-expanded__lead">Answers to common questions about Import Export Code registration in Chennai, covering DGFT process, fees, documents, and export compliance.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IEC Registration in Chennai',
                        'city'     => 'Chennai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which authority issues IEC in Chennai?</h3>
                        <div class="faq-expanded__a"><p>IEC is issued by the Directorate General of Foreign Trade (DGFT) through the online portal dgft.gov.in. The DGFT Regional Authority (RA), Chennai handles Tamil Nadu jurisdiction matters. The entire application and issuance process is online - no physical visit to any DGFT office is required. Patron files the application on the DGFT portal digitally.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get IEC registration online from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. The entire IEC registration process is 100% online on dgft.gov.in. You register, fill the application, upload documents, pay the Rs 500 fee, and receive the IEC certificate digitally with a QR code. The IEC is valid at all Indian ports, airports, and ICDs including Chennai Port, Kamarajar Port, and Chennai Airport.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for IEC registration?</h3>
                        <div class="faq-expanded__a"><p>The government fee for IEC registration is Rs 500 (one-time, paid online via net banking or debit card). There is no annual renewal fee. Patron's all-inclusive professional fee starts from Rs 1,499 covering DGFT portal filing, document preparation, and IEC certificate delivery.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does IEC registration take?</h3>
                        <div class="faq-expanded__a"><p>IEC registration is processed within 2-3 working days from application submission on the DGFT portal. In many cases, the IEC certificate is issued immediately after successful submission and payment. AD Code registration with the bank takes an additional 3-5 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does IEC expire or need renewal?</h3>
                        <div class="faq-expanded__a"><p>No. IEC has lifetime validity - it does not expire and does not need renewal. However, DGFT mandates an annual KYC update between April and June every year on dgft.gov.in. Failure to update KYC results in IEC suspension - customs will not clear your shipments.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is IEC mandatory for IT services export from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Service exporters not availing benefits under the Foreign Trade Policy are technically exempt from IEC. However, most Chennai banks require IEC for processing Foreign Inward Remittance Certificates (FIRC). OMR IT companies should obtain IEC if they plan to claim RoDTEP/SEIS benefits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I import without IEC in Chennai?</h3>
                        <div class="faq-expanded__a"><p>No. IEC is mandatory for importing goods into India. Chennai Customs will not process your bill of entry without a valid IEC. The IEC number must appear on every bill of entry filed at Chennai Port, Kamarajar Port, or Chennai Airport cargo.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is AD Code and why do I need it?</h3>
                        <div class="faq-expanded__a"><p>AD Code (Authorised Dealer Code) is a 14-digit code assigned to your bank branch, registered with customs against your IEC. It enables the bank to process export proceeds and import payments. Without AD Code registration, your bank cannot process foreign trade remittances even with a valid IEC.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>IEC registration Chennai mein kaise hota hai?</strong> dgft.gov.in par online apply karo. PAN, Aadhaar, bank details upload karo, Rs 500 fee pay karo. 2-3 din mein IEC certificate mil jaata hai.</p>
                <p><strong>IEC ka renewal karna padta hai kya?</strong> Nahi. IEC lifetime valid hai. Lekin har saal April-June mein KYC update karna zaroori hai dgft.gov.in par.</p>
                <p><strong>IT company ko IEC chahiye kya?</strong> Agar FTP benefits nahi le rahe toh technically exempt hai. Lekin bank FIRC ke liye IEC maangta hai - isliye lena better hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your IEC Registration in Chennai</h2>
            <div class="content-text">
                
                <p>Without IEC, Chennai Customs will not clear your goods at Chennai Port, Kamarajar Port, or Chennai Airport. Banks will not process export proceeds or import payments. You cannot access RoDTEP, Advance Authorization, EPCG, or Duty Drawback export incentives. Every shipment delayed is revenue lost and customer trust damaged. IEC registration takes just 2-3 days and costs Rs 500 government fee. There is no reason to delay - start the process now and be export-ready within a week.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get IEC Registration in Chennai with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">IEC registration in Chennai is the mandatory first step for any business engaged in international trade - from MEPZ export units and Sriperumbudur auto manufacturers to Kasimedu seafood exporters and OMR IT companies. The 10-digit IEC from DGFT has lifetime validity, costs just Rs 500, and is processed within 2-3 working days entirely online.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting serves Chennai exporters and importers through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles DGFT filing, AD Code registration, GST LUT, RCMC guidance, and annual KYC compliance.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20IEC%20Registration%20in%20Chennai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IEC%20Registration%20in%20Chennai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20IEC%20Registration%20services%20in%20Chennai.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IEC Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted IEC import export code registration services in major cities across India.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/iec-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/iec-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/iec-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/iec-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/iec-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/iec-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/iec-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Chennai</div>
                <div class="pa-block-sub">End-to-end support for IEC Registration in Chennai</div>
                <div class="pa-cross-grid">
                    <a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/private-limited-company-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/llp-incorporation/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/income-tax-return/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/fssai-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed bi-annually for accuracy. IEC registration requirements, DGFT policies, and export compliance rules are subject to change via DGFT notifications and FTP amendments. Freshness Tier 2.</p>
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
