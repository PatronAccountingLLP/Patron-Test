
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
    <title>Udyam Registration in Bangalore – MSME Certificate</title>
    <meta name="description" content="CA-assisted Udyam MSME registration in Bangalore. Free, instant, Aadhaar-based. CGTMSE loans, tender preference, Karnataka incentives. Call +91 945 945 6700.">
    <link rel="canonical" href="/udyam-registration/bangalore">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Udyam Registration in Bangalore – MSME Certificate">
    <meta property="og:description" content="CA-assisted Udyam MSME registration in Bangalore. Free, instant, Aadhaar-based. CGTMSE loans, tender preference, Karnataka incentives. Call +91 945 945 6700.">
    <meta property="og:url" content="/udyam-registration/bangalore">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Udyam Registration in Bangalore – MSME Certificate">
    <meta name="twitter:description" content="CA-assisted Udyam MSME registration in Bangalore. Free, instant, Aadhaar-based. CGTMSE loans, tender preference, Karnataka incentives. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Udyam Registration in Bangalore",
          "description": "CA-assisted Udyam MSME registration in Bangalore. Free, instant, Aadhaar-based. CGTMSE loans, tender preference, Karnataka incentives. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/udyam-registration/bangalore",
          "serviceType": "Udyam Registration in Bangalore",
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
            "url": "https://www.patronaccounting.com/udyam-registration/bangalore",
            "price": "499"
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
              "name": "Udyam Registration",
              "item": "https://www.patronaccounting.com/udyam-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Udyam Registration Bangalore",
              "item": "https://www.patronaccounting.com/udyam-registration/bangalore"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Can IT companies in Bangalore register as MSME?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. IT SaaS BPO companies qualify as service enterprises under Udyam. Investment is measured in equipment such as computers and servers not plant and machinery. A SaaS startup with Rs 50 lakh equipment and Rs 4 crore turnover qualifies as Micro enterprise."
              }
            },
            {
              "@type": "Question",
              "name": "What is the Udyam registration fee in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Completely free. Zero government fee on official portal. Patron professional assistance for correct classification NIC code and benefit activation starts from Rs 499."
              }
            },
            {
              "@type": "Question",
              "name": "How long does Udyam registration take in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "URN allotted instantly on submission. Certificate with dynamic QR code issued within 1 to 3 working days after back-end processing of PAN and GST data."
              }
            },
            {
              "@type": "Question",
              "name": "What are the benefits of Udyam Registration in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "CGTMSE collateral-free loans up to Rs 2 crore, priority sector lending, GeM tender preference, 45-day payment protection under MSMED Act, 3 percent interest subvention for exporters, and Karnataka Industrial Policy zone-based incentives."
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
                        Udyam Registration in Bangalore: MSME Certificate for Every Enterprise
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Aadhaar of proprietor/partner/director, PAN, GSTIN (if available) - self-declaration, no upload</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Zero government fee - completely free on the official portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Manufacturing and service enterprises with investment up to Rs 50 crore and turnover up to Rs 250 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Instant - URN allotted immediately on submission</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20MSME%20Registration%20in%20Bangalore.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Udyam Registration in Bangalore',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'udyam-registration/bangalore', 'label' => 'Udyam Registration in Bangalore', 'selected' => true, 'disabled' => false],
                            ['value' => 'gst-registration/bengaluru', 'label' => 'GST Registration in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration/bengaluru', 'label' => 'Pvt Ltd Registration in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return/bengaluru', 'label' => 'Income Tax Return in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration/bengaluru', 'label' => 'Startup Registration in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-registration/bengaluru', 'label' => 'Trademark Registration in Bangalore', 'selected' => false, 'disabled' => false],
                            ['value' => 'payroll-services/bengaluru', 'label' => 'Payroll Services in Bangalore', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron classified our SaaS company as Micro service enterprise - we had been filing as Small manufacturing. The reclassification unlocked CGTMSE loan that we could not access before. Game changer.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arun Prasad</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">SaaS Founder, Koramangala</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our Peenya engineering unit had old UAM from 2018. Patron migrated to Udyam, corrected the NIC code, and we immediately applied for KIADB plot allotment with the new certificate.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Engineering Works Peenya</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's team explained that our equipment investment (laptops + servers) was only Rs 40 lakh, making us Micro even with Rs 3 crore revenue. The CGTMSE loan came through in 4 weeks.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7c3aed;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Murthy</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, IT Services Whitefield</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The GeM registration after Udyam opened government contract opportunities we never knew existed. Won our first Karnataka state department order within 2 months. Patron handled everything.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0891b2;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VN</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vijay Narayanan</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Packaging Manufacturer Bommasandra</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">A large buyer was delaying payment by 90 days. With Udyam certificate, Patron helped us invoke MSMED Act Section 15. The buyer settled within 2 weeks of the notice. Powerful protection.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Ganesh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Auto Components Jigani</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get expert CA assistance for Udyam MSME registration in Bangalore. From classification advisory to CGTMSE activation, we handle everything.</p>
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
            <a href="#overview-section" class="toc-pill">Overview</a><a href="#what-section" class="toc-pill">What Is Udyam</a><a href="#who-section" class="toc-pill">Who Needs It</a><a href="#services-section" class="toc-pill">Services</a><a href="#procedure-section" class="toc-pill">6-Step Process</a><a href="#documents-section" class="toc-pill">Documents</a><a href="#challenges-section" class="toc-pill">Challenges</a><a href="#fees-section" class="toc-pill">Fees</a><a href="#timeline-section" class="toc-pill">Timeline</a><a href="#benefits-section" class="toc-pill">Why Patron</a><a href="#comparison-section" class="toc-pill">MSME Classification</a><a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration in Bangalore: Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Udyam Registration in Bangalore Services at a Glance</strong></p>
                    <p>Udyam Registration is the official MSME registration under the MSMED Act, 2006, replacing Udyog Aadhaar since 01 July 2020. Free, fully online, paperless, and based on self-declaration at udyamregistration.gov.in. Every manufacturing and service enterprise in Bangalore - from IT startups in Koramangala to engineering units in Peenya Industrial Area - can register as Micro, Small, or Medium based on investment and turnover thresholds.</p>
                </div>
                <p>Bangalore is home to one of India's densest MSME ecosystems. Peenya Industrial Area houses thousands of manufacturing MSMEs. Electronic City and Whitefield host IT/SaaS companies that qualify as service enterprises. Koramangala and HSR Layout generate hundreds of new enterprises monthly.</p>
                <div class="table-responsive-wrapper" style="margin:20px 0;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
                    <tr><td>Governing Law</td><td>MSMED Act, 2006</td></tr>
                    <tr><td>Registration Portal</td><td>udyamregistration.gov.in - official Government of India portal</td></tr>
                    <tr><td>Fee</td><td>Zero - completely free</td></tr>
                    <tr><td>Classification</td><td>Micro: ≤Rs 1 Cr invest + ≤Rs 5 Cr TO | Small: ≤Rs 10 Cr + ≤Rs 50 Cr | Medium: ≤Rs 50 Cr + ≤Rs 250 Cr</td></tr>
                    <tr><td>Validity</td><td>Lifetime - no renewal required. Dynamic QR code on certificate</td></tr>
                    <tr><td>Key Benefits</td><td>CGTMSE loans, priority lending, tender preference, delayed payment protection</td></tr>
                    <tr><td>State Support</td><td>Karnataka Industrial Policy 2020-2025. KIADB land. KSSIDC plots. DIC Bangalore</td></tr>
                </tbody></table></div><p</p>
                <p>The MSME-DI Bangalore provides technical consultancy and scheme implementation. The DIC Bangalore administers state-level MSME schemes. Karnataka Industrial Policy 2020-2025 offers zone-based incentives for <a href="/udyam-registration">Udyam-registered</a> enterprises. Patron's CA team handles classification, NIC code mapping, and benefit activation including <a href="/gst-registration/bangalore">GST Registration in Bangalore</a> and <a href="/iec-registration">Import Export Code</a> for exporters.</p>
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
                <h2 class="section-title">What Is Udyam Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Udyam Registration is the official process of registering a micro, small, or medium enterprise with the Ministry of MSME under the MSMED Act, 2006, through the self-declaration based portal at udyamregistration.gov.in, generating a permanent Udyam Registration Number and digital certificate with lifetime validity.</p>
                    <p>The registration replaced Udyog Aadhaar from 01 July 2020. It is linked to PAN and GSTIN, with data auto-fetched from IT and GST databases. No documents uploaded - entirely paperless self-declaration. One enterprise gets one Udyam number.</p>
                    <p>For Bangalore, IT companies in Electronic City often have turnover exceeding Rs 5 crore but equipment investment below Rs 1 crore - qualifying as Small service enterprises rather than Medium, maximising MSME benefits. This classification distinction is Patron's competitive moat for Bangalore tech companies.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Udyam Registration in Bangalore:</strong></p>
                    <ul><li><strong>Udyam:</strong> Enterprise registered under MSMED Act. URN format: UDYAM-KA-XX-XXXXXXX for Karnataka.</li><li><strong>Service Enterprise:</strong> Investment measured in 'equipment' (not plant & machinery). Critical for Bangalore IT/SaaS companies.</li><li><strong>CGTMSE:</strong> Collateral-free loans up to Rs 2 crore for Udyam-registered enterprises. Major benefit for startups.</li><li><strong>MSMED Act Sections 15-16:</strong> Buyers must pay MSMEs within 45 days. Interest at 3x bank rate for delayed payment.</li><li><strong>NIC Code:</strong> National Industrial Classification code determining scheme eligibility. Manufacturing and service codes differ.</li><li><strong>Karnataka Industrial Policy 2020-2025:</strong> Zone-based incentives including investment subsidies and stamp duty exemption for Udyam-registered enterprises.</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Udyam Registration in Bangalore</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FREE Registration</span>
                        <strong>Instant URN Certificate</strong>
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
            <h2 class="section-title">Who Needs Udyam Registration in Bangalore?</h2>
            <div class="content-text">
                
                <h3>IT and SaaS Startups in Koramangala, HSR Layout, Whitefield</h3><p>Largest untapped segment. These qualify as service enterprises - investment measured in 'equipment' (computers, servers) not 'plant & machinery'. A SaaS startup with Rs 50 lakh equipment and Rs 4 crore turnover = Micro enterprise, unlocking CGTMSE and tender preference.</p>
                <h3>Manufacturing Units in Peenya and Bommasandra</h3><p>Engineering, auto parts, electronics, packaging manufacturers. Benefit from KIADB land priority, KSSIDC sheds, and Karnataka Industrial Policy subsidies. <a href="/gst-registration/bangalore">GST Registration</a> needed alongside Udyam.</p>
                <h3>D2C Brands and E-Commerce Sellers</h3><p>Food brands, cosmetics startups shipping from Bangalore warehouses qualify as Micro/Small service enterprises. Access priority lending and GeM registration.</p>
                <h3>Exporters in Bangalore</h3><p>Benefit from 3% interest subvention on pre/post-shipment credit. <a href="/iec-registration">Import Export Code</a> needed alongside Udyam for export benefits.</p>
                <h3>Freelancers and Consultants</h3><p>IT freelancers, designers, management consultants qualify as Micro service enterprises. Access MSME-tagged bank accounts and credit facilities.</p>
                <h3>Enterprises with Old UAM Registration</h3><p>Old Udyog Aadhaar numbers no longer valid. Must migrate to Udyam for scheme benefits, CGTMSE eligibility, and tender preference.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Udyam Registration Filing</td><td>Complete registration on udyamregistration.gov.in with correct classification, NIC code, and investment/turnover declaration</td></tr><tr><td>MSME Classification Advisory</td><td>Determining Micro/Small/Medium based on composite criteria. Service enterprise classification for IT/SaaS companies</td></tr><tr><td>NIC Code Mapping</td><td>Correct 5-digit NIC 2008 code for enterprise activity. Manufacturing and service codes differ - affects scheme eligibility</td></tr><tr><td>UAM to Udyam Migration</td><td>Transferring old Udyog Aadhaar registrations to new Udyam system. Old UAM numbers no longer valid</td></tr><tr><td>CGTMSE Loan Facilitation</td><td>Collateral-free loan applications up to Rs 2 crore through partner banks. Udyam certificate mandatory</td></tr><tr><td>GeM Registration</td><td>Government e-Marketplace registration for supplying goods/services to government departments in Karnataka</td></tr><tr><td>Karnataka Scheme Advisory</td><td>Karnataka Industrial Policy 2020-2025 incentives, KIADB land, KSSIDC sheds, DIC Bangalore schemes</td></tr><tr><td>Udyam Certificate Update</td><td>Modifying details, adding activities, updating investment/turnover figures on the portal</td></tr>

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
            <h2 class="section-title">Udyam Registration Process in Bangalore: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Your dedicated CA handles the complete Udyam registration online. Free, instant, and paperless - no government office visit required.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Enterprise Classification</h3><p class="step-description">Assess manufacturing vs service, and Micro/Small/Medium. For IT/SaaS in Electronic City and Whitefield, service enterprise investment = 'equipment' not 'plant & machinery'. A SaaS startup with Rs 30 lakh equipment + Rs 3 crore turnover = Micro. MSME-DI Bangalore Helpline: 1800-180-6763.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Classification Set</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Service vs Mfg</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="35" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="40" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">M</text><circle cx="60" cy="35" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S</text><circle cx="80" cy="35" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="80" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Md</text></svg></div><span class="illustration-label">Category Determined</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Gather Aadhaar, PAN, and GSTIN Details</h3><p class="step-description">Aadhaar of proprietor/managing partner/director. PAN and GSTIN for auto-fetching investment and turnover from IT and GST databases. No documents uploaded. Patron verifies all details before submission to avoid auto-fetch mismatches.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data Verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auto-Fetch Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="70" y="55" width="28" height="28" rx="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M78 69l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Details Compiled</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Register on Udyam Portal</h3><p class="step-description">Visit udyamregistration.gov.in. Enter Aadhaar and verify via OTP. Fill enterprise details: name, type, Bangalore address, NIC code, employees. Select Karnataka as state and Bangalore Urban/Rural as district.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UDYAM</text><rect x="30" y="38" width="60" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="30" y="50" width="60" height="8" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/></svg></div><span class="illustration-label">Form Complete</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Declare Investment and Turnover</h3><p class="step-description">Enter investment in P&M (manufacturing) or equipment (service) and annual turnover. GST-registered businesses get auto-fetched turnover. For IT companies, declare 'investment in equipment' correctly. Portal auto-classifies Micro/Small/Medium.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Investment Declared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Turnover Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INVEST</text><rect x="25" y="38" width="35" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="65" y="38" width="35" height="20" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="42" y="51" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">P&M</text><text x="82" y="51" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EQUIP</text></svg></div><span class="illustration-label">Classification Set</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Submit and Receive URN</h3><p class="step-description">Portal immediately generates permanent UDYAM-KA-XX-XXXXXXX. Certificate with dynamic QR code issued after back-end processing (1-3 days). Lifetime validity, no renewal. QR links to real-time data for bank/govt verification.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>URN Allotted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="37" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M52 37l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="25" y="72" width="70" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="84" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UDYAM-KA</text></svg></div><span class="illustration-label">MSME Registered</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Activate MSME Benefits</h3><p class="step-description">Apply for CGTMSE collateral-free loans. Register on GeM for government tenders. Apply for Karnataka Industrial Policy incentives via Udyog Mitra or DIC Bangalore. Invoke delayed payment protection under MSMED Act Sections 15-16.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Benefits Active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schemes Applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="25" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="42" y="34" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CGTMSE</text><rect x="60" y="22" width="25" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="72" y="34" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GeM</text><rect x="30" y="46" width="55" height="15" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="57" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">KA POLICY</text></svg></div><span class="illustration-label">Fully Activated</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Udyam Registration in Bangalore</h2>
            <div class="content-text">
                
                <ul><li><strong>Aadhaar Card:</strong> Of proprietor, managing partner, or authorised director. Used for OTP verification.</li><li><strong>PAN of Enterprise:</strong> Linked for auto-fetching investment data from IT database. Personal PAN for proprietorships.</li><li><strong>GSTIN (if registered):</strong> For auto-fetching turnover from GST portal. Not required if below GST threshold.</li><li><strong>Enterprise Details:</strong> Name, type, Bangalore address, date of commencement, NIC code, bank account, employee count.</li></ul><p><strong>No documents are uploaded.</strong> Udyam Registration is entirely self-declaration based with automatic data verification.</p>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Bangalore-Specific Tip:</strong> For IT/SaaS companies in Electronic City and Whitefield, ensure enterprise type is selected as 'Service' (not 'Manufacturing'). This changes the investment criterion from 'plant & machinery' to 'equipment' - typically resulting in lower classification and access to more benefits.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Udyam Registration Challenges in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Service Enterprise Misclassification</td><td>IT/SaaS companies classify as manufacturing instead of service, measuring wrong investment type</td><td>Ensures 'equipment' investment declared for service enterprises - correct Micro/Small classification</td></tr><tr><td>Turnover Auto-Fetch Discrepancies</td><td>Multiple GSTINs or filing delays cause data mismatch with actual turnover</td><td>Reviews GST return data before filing to match auto-fetched figures</td></tr><tr><td>Old UAM Not Migrated</td><td>Pre-July 2020 UAM numbers no longer valid for CGTMSE, tenders, or schemes</td><td>Identifies old registrations and migrates to valid Udyam number</td></tr><tr><td>NIC Code Selection Errors</td><td>Generic code misses sector-specific schemes for Peenya engineering firms</td><td>Maps correct 5-digit NIC 2008 code for every enterprise activity</td></tr><tr><td>Exceeding MSME Limits Without Update</td><td>Growing startups cross Rs 250 crore turnover threshold - risk Section 27 penalty</td><td>Monitors thresholds and updates registration proactively</td></tr>

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
            <h2 class="section-title">Udyam Registration Fees in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Udyam Registration)</td><td>Completely FREE - Rs 0</td></tr><tr><td>Patron Accounting Professional Fees</td><td>INR 499 (Exl GST and Govt. Charges)</td></tr><tr><td>UAM to Udyam Migration</td><td>From Rs 999</td></tr><tr><td>Udyam Certificate Update</td><td>From Rs 999</td></tr><tr><td>MSME Classification Advisory</td><td>From Rs 999</td></tr><tr><td>CGTMSE Loan Facilitation</td><td>From Rs 4,999</td></tr><tr><td>GeM Registration</td><td>From Rs 1,499</td></tr><tr><td>Karnataka Scheme Advisory</td><td>Included in Udyam package</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Udyam Registration in Bangalore consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20MSME%20Registration%20in%20Bangalore.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration Timeline in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Classification Assessment</td><td>1 working day</td></tr><tr><td>Detail Verification</td><td>1 working day</td></tr><tr><td>Portal Submission</td><td>10 minutes</td></tr><tr><td>URN Allotment</td><td>Instant</td></tr><tr><td>Certificate Issuance</td><td>1-3 working days</td></tr><tr><td>Benefit Activation</td><td>1-4 weeks (CGTMSE, GeM, Karnataka schemes)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Bangalore Processing Note (Group B):</strong> No visit to MSME-DI Bangalore, DIC, or any government office required. Udyam Registration is 100% online. Your dedicated CA handles complete portal filing remotely.</p>

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
            <h2 class="section-title">Why Choose Patron for Udyam Registration in Bangalore?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Digital-First Service</h3><p>Complete portal filing handled remotely. Classification verified, NIC code mapped, auto-fetched data cross-checked.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-state enterprises get single Udyam covering all activities correctly.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Service Enterprise Expertise</h3><p>Bangalore IT/SaaS companies classified correctly as service enterprises. Equipment vs P&M distinction maximises benefits.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>End-to-End Benefit Activation</h3><p>CGTMSE loans, GeM registration, Karnataka Industrial Policy incentives, and delayed payment recovery all facilitated post-registration.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;margin:24px 0;"><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">10,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Businesses Served</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">4.9</span><br><span style="color:var(--text-muted);font-size:14px;">Google Rating</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">50,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Documents Filed</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">15+</span><br><span style="color:var(--text-muted);font-size:14px;">Years Experience</span></div></div><p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Bangalore MSMEs with classification advisory, CGTMSE facilitation, and Karnataka scheme guidance from one CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MSME Classification Table: Revised Criteria</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Category</th><th>Investment (P&M / Equipment)</th><th>Annual Turnover</th><th>Bangalore Example</th></tr></thead>
                    <tbody>
                        <tr><td>Micro</td><td>Up to Rs 1 crore</td><td>Up to Rs 5 crore</td><td>IT freelancer, small workshop in Peenya</td></tr><tr><td>Small</td><td>Up to Rs 10 crore</td><td>Up to Rs 50 crore</td><td>SaaS startup Koramangala, mid-size manufacturer Bommasandra</td></tr><tr><td>Medium</td><td>Up to Rs 50 crore</td><td>Up to Rs 250 crore</td><td>Established IT firm Electronic City, large manufacturer Jigani</td></tr>

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
                
                <ul><li><a href="/udyam-registration">Udyam Registration in India</a> - Parent national service page</li><li><a href="/udyam-registration">MSME Registration</a> - Alternative registration page</li><li><a href="/gst-registration">GST Registration</a> - Tax compliance for MSMEs</li><li><a href="/iec-registration">Import Export Code</a> - For MSME exporters</li><li><a href="/trademark-registration">Trademark Registration</a> - Brand protection for MSMEs</li><li><a href="/income-tax-return">Income Tax Return</a> - Annual filing for MSME entities</li></ul>

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
                
                <ul><li>MSMED Act, 2006 - Sections 7-8 (classification), Sections 15-16 (delayed payment, 45 days, 3x bank rate interest), Section 17 (Facilitation Council recovery), Section 27 (penalty for false information)</li><li>Notification dated 26 June 2020 - Revised composite criteria (investment + turnover). Udyam replacing UAM</li><li>CGTMSE Scheme - Collateral-free credit up to Rs 2 crore. Udyam mandatory</li><li>Karnataka Industrial Policy 2020-2025 - Zone-based incentives, investment subsidies, stamp duty exemption, interest subvention</li><li>KIADB - Land allotment for MSMEs. Udyam certificate preferred</li></ul><h3>Penalties</h3><ul><li>False information: Punishable under Section 27 MSMED Act</li><li>Exceeding limits without update: Loss of benefits and potential recovery</li></ul><p><strong>Authority:</strong> Udyam Portal - <a href="https://udyamregistration.gov.in" target="_blank" rel="noopener">udyamregistration.gov.in</a> | MSME-DI Bangalore (Helpline: 1800-180-6763) | DIC Bangalore</p>

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
                    <h2 class="faq-expanded__title">FAQs: Udyam Registration in Bangalore</h2>
                    <p class="faq-expanded__lead">Answers to common questions about Udyam MSME registration in Bangalore, covering classification, fees, IT company eligibility, and benefits.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Bangalore', 'enquiryService' => 'Udyam Registration in Bangalore'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles Udyam registration in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Entirely online at udyamregistration.gov.in. No office visit required. MSME-DI Bangalore provides guidance via Helpline 1800-180-6763. DIC Bangalore administers state MSME schemes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get Udyam registration done online from Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Yes. 100% online, paperless, self-declaration. No document uploads. Aadhaar OTP verification, PAN/GST auto-fetch. Patron's CA handles complete filing remotely.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the Udyam registration fee in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Completely free - zero government fee. Patron's professional fee for correct classification, NIC code, and benefit activation starts from Rs 499.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does Udyam registration take in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>URN allotted instantly on submission. Certificate with QR code issued within 1-3 working days after back-end processing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can IT companies in Bangalore register as MSME?</h3>
                        <div class="faq-expanded__a"><p>Yes. IT, SaaS, BPO qualify as service enterprises. Investment in 'equipment' (computers, servers) - not 'plant & machinery'. A SaaS startup with Rs 50 lakh equipment + Rs 4 crore turnover = Micro enterprise.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the benefits of Udyam in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>CGTMSE collateral-free loans up to Rs 2 crore, priority lending, GeM tender preference, 45-day payment protection under MSMED Act, 3% interest subvention for exporters, Karnataka Industrial Policy incentives.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is renewal required for Udyam?</h3>
                        <div class="faq-expanded__a"><p>No. Lifetime validity. Dynamic QR code on certificate. Must update if enterprise details change - address, activity, investment, turnover, or constitution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the difference between Udyam and Udyog Aadhaar?</h3>
                        <div class="faq-expanded__a"><p>Udyam replaced UAM from 01 July 2020. Uses composite criteria (investment + turnover) vs UAM (investment only). Auto-fetches from PAN/GST. Dynamic QR code. Old UAM numbers no longer valid.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Bangalore mein Udyam registration kaise karein?</strong> udyamregistration.gov.in pe Aadhaar OTP se register karo. Free hai. Patron sahi classification select karta hai.</p><p><strong>IT company MSME mein register ho sakti hai kya?</strong> Haan. Service enterprise ke roop mein. Equipment investment count hota hai - plant & machinery nahi. Bahut saari Bangalore IT companies Micro ya Small mein aati hain.</p><p><strong>Udyam ke kya fayde hain?</strong> Collateral-free loan Rs 2 crore tak, government tender preference, delayed payment protection, 3% interest subvention for exporters.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your Udyam Registration in Bangalore</h2>
            <div class="content-text">
                
                <p>Every day without Udyam is a day of missed benefits. CGTMSE collateral-free loans up to Rs 2 crore, GeM tender preference (20% purchase preference), delayed payment protection under Sections 15-16 of MSMED Act, and Karnataka Industrial Policy incentives all require valid Udyam. Old Udyog Aadhaar numbers are no longer valid. Registration is free and instant.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Udyam Registration in Bangalore with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Udyam Registration in Bangalore is the free, instant, lifetime-valid MSME certification unlocking collateral-free loans, tender preference, delayed payment protection, and Karnataka state incentives for enterprises across Electronic City, Whitefield, Peenya, Koramangala, and HSR Layout.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's CA team provides digital-first registration with correct service enterprise classification for IT/SaaS, NIC code mapping, and benefit activation including CGTMSE and GeM. Backed by offices in Pune, Mumbai, Delhi, and Gurugram.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP. 10,000+ businesses served. 15+ years. 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Udyam%20MSME%20Registration%20in%20Bangalore.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Udyam%20Registration%20in%20Bangalore&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20Udyam%20MSME%20Registration%20in%20Bangalore.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Udyam Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted Udyam MSME registration in major cities across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/udyam-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/udyam-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/udyam-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/udyam-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/udyam-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/udyam-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/udyam-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Bangalore</div><div class="pa-block-sub">End-to-end MSME and business support in Bangalore</div><div class="pa-cross-grid"><a href="/gst-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/private-limited-company-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/income-tax-return/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/startup-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/payroll-services/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Bangalore</div></div></a><a href="/trademark-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Bangalore</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. MSME classification limits, CGTMSE thresholds, and Karnataka Industrial Policy subject to change. Freshness Tier 2.</p>
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
