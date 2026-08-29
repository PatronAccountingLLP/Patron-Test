
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
    <title>Removal of Director - Section 169, Process & ROC Filing</title>
    <meta name="description" content="Remove a director under Section 169 of the Companies Act 2013. File DIR-12 within 30 days of EGM. Starting at INR 1,999.">
    <link rel="canonical" href="/removal-of-director">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Removal of Director - Section 169, Process & ROC Filing">
    <meta property="og:description" content="Remove a director under Section 169 of the Companies Act 2013. File DIR-12 within 30 days of EGM. Starting at INR 1,999.">
    <meta property="og:url" content="/removal-of-director">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Removal of Director - Section 169, Process & ROC Filing">
    <meta name="twitter:description" content="Remove a director under Section 169 of the Companies Act 2013. File DIR-12 within 30 days of EGM. Starting at INR 1,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Removal of Director in India Guide",
          "description": "Remove a director under Section 169 of the Companies Act 2013. File DIR-12 within 30 days of EGM. Starting at INR 1,999.",
          "url": "https://www.patronaccounting.com/removal-of-director",
          "serviceType": "Removal of Director in India Guide",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
              "name": "Removal of Director in India Guide",
              "item": "https://www.patronaccounting.com/removal-of-director"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Can a director be removed without their consent under the Companies Act 2013?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Section 169 of the Companies Act, 2013 expressly empowers shareholders to remove a director before the expiry of their term by passing an ordinary resolution at a general meeting. The director's consent is not required. However, the director must receive the special notice, and must be given a reasonable opportunity to be heard at the meeting and to make written representations under Section 169(4)."
              }
            },
            {
              "@type": "Question",
              "name": "What is the procedure to remove a director under Section 169?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The procedure requires: (1) special notice from members (1% voting or INR 5 lakh paid-up) at least 14 days before the EGM; (2) company immediately forwards notice to the director; (3) director may submit written representations to be circulated; (4) Board convenes EGM with at least 21 days' notice; (5) EGM held with director given chance to be heard; (6) ordinary resolution passed; (7) DIR-12 filed with ROC within 30 days."
              }
            },
            {
              "@type": "Question",
              "name": "Can a director appointed by NCLT be removed by shareholders?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Section 169(1) explicitly excludes directors appointed by the National Company Law Tribunal (NCLT) under Section 242 from shareholder removal. Such directors can only be removed by an order of the NCLT itself. Similarly, directors appointed under the principle of proportional representation under Section 163 cannot be removed under Section 169."
              }
            },
            {
              "@type": "Question",
              "name": "What documents are needed to file DIR-12 for removal of director?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DIR-12 requires: special notice from members, certified true copy of the ordinary resolution passed at EGM, notice sent to the director before the meeting, and evidence that the director was given an opportunity to be heard. The form must be digitally signed by a continuing director or Company Secretary using a Class 3 DSC and filed on MCA V3 portal within 30 days of the EGM date."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not filing DIR-12 on time after removal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DIR-12 must be filed within 30 days of the EGM. Late filing attracts escalating fees: up to 15 days' delay - 1x government fees; beyond 15 days - 2x; beyond 30-60 days - 4x; beyond 60-90 days - 6x; beyond 90-180 days - 10x; and beyond 180-300 days - 12x government fees plus possible compounding offence proceedings."
              }
            },
            {
              "@type": "Question",
              "name": "Can a removed director be reappointed?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 169(7), the director removed at an EGM cannot be reappointed at the same general meeting. Additionally, the removed director cannot be appointed as a casual vacancy director to fill the vacancy created by their own removal. They may, however, be appointed as a director at a future general meeting if shareholders choose to do so."
              }
            },
            {
              "@type": "Question",
              "name": "Director hata sakte hain bina unki marzi ke?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Haan. Companies Act 2013 ki Section 169 ke anusaar, shareholders ordinary resolution pass karke director ko unki marzi ke bina hata sakte hain. Director ko sirf special notice, sunne ka mauka, aur likhit representation ka adhikar milta hai - unki marzi ki zarurat nahi. Patron Accounting yeh poori prakriya kanuni roop se manage karta hai."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if the director submits a written representation before the EGM?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 169(4), the company must enclose the director's written representation with the EGM notice if received in time, or send it separately to all members if received after the notice is dispatched. The director also has the right to speak at the EGM. The company cannot suppress the representation unless the NCLT finds it is being used to publicise defamatory content. Quick Answers Section 169 removal requires: Ordinary resolution - no special resolution needed (except for independent director in second term). Special notice period: At least 14 days before the general meeting - under Section 115, Companies Act 2013. DIR-12 filing deadline: Within 30 days of the date of passing the ordinary resolution at EGM. Section 167 vacation: Automatic - no resolution needed - if director absent from all board meetings for 12 continuous months without Board leave. NCLT-appointed directors: Cannot be removed by shareholders under Section 169 - only by NCLT order under Section 242. Reappointment bar: Removed director cannot fill casual vacancy created by their own removal or be reappointed at the same EGM."
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
                        Removal of Director in India: 3 Legal Routes Under Section 169
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Route A - Shareholder Removal (Section 169)</strong>:</span> Ordinary resolution via EGM/AGM - applies to all directors except those appointed by NCLT under Section 242 or under proportional representation (Section 163).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Route B - Automatic Vacation (Section 167)</strong>:</span> Director deemed to have vacated if absent from all board meetings for 12 consecutive months without leave of absence from the Board.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Route C - NCLT Order (Section 241/242)</strong>:</span> Tribunal-directed removal in cases of oppression or mismanagement - directors appointed by NCLT can only be removed by NCLT.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Post-Removal Filing: DIR-12 within 30 Days</strong>:</span> DIR-12 to ROC within 30 days of EGM date - mandatory under Rule 18, Companies (Appointment and Qualification of Directors) Rules 2014. Late filing: up to 12x govt fees.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 100+ Director Change Assignments Annually | Zero DIR-12 Penalties | 4.9/5 Rating (350+ Reviews) | Pune, Mumbai, Delhi, Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Removal%20of%20Director%20Enquiry&body=Hello%2C%0AI%20need%20help%20removing%20a%20director.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20remove%20a%20director%20from%20my%20company.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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


                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - Removal of Director',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'removal-of-director', 'label' => 'Removal of Director', 'selected' => true, 'disabled' => false],
                            ['value' => 'resignation-of-director', 'label' => 'Resignation of Director', 'selected' => false, 'disabled' => false],
                            ['value' => 'appointment-of-director', 'label' => 'Appointment of Director', 'selected' => false, 'disabled' => false],
                            ['value' => 'director-kyc', 'label' => 'Director KYC', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-compliance', 'label' => 'Pvt Ltd Compliance', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Professionalism, attention to detail, and timely communication made the process smooth. Our director removal was completed and DIR-12 filed within 12 days.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu M.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Pvt Ltd, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Co-founder dispute required careful handling. Patron managed the entire Section 169 procedure including the contested director's representation rights. Clean removal, no NCLT challenge.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ashish K.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Promoter, Tech Startup, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Director had been absent for over a year. Patron guided us through the Section 167 vacation route and filed DIR-12. Simple and efficient.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya D.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CS, Manufacturing, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Listed company director removal with MGT-14 filing. Patron's CS team handled the entire regulatory compliance seamlessly. Board was impressed with the documentation.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul G.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Listed Company, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Emergency DIR-12 filing needed within 48 hours of EGM. Patron delivered - form was filed the next morning. Their preparation during the EGM process made this possible.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Meera J.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Pvt Ltd, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Remove a director legally and without risk. Starting at INR 1,999. Complete Section 169 procedure with DIR-12 filing.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">When Applied</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">8-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">DIY vs CS</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Removal of Director in India - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Removal of Director Services at a Glance</strong></p>
                    <p>Director removal is one of the most legally sensitive secretarial actions a company can take. Get the special notice period wrong, skip the director's right to make written representations, or miss the DIR-12 filing window - and the entire removal can be challenged in the NCLT or High Court. Section 169 of the Companies Act, 2013 governs the standard shareholder-driven removal route. Patron Accounting starting at INR 1,999 (Exl GST and Govt. Charges).</p>
                </div>
                <p>Section 169 requires: (1) special notice from members holding at least 1% voting power or INR 5 lakh paid-up value, at least 14 days before the meeting; (2) the director must be notified and given the right to make written representations; (3) an ordinary resolution (simple majority) at an EGM/AGM; and (4) DIR-12 filing with ROC within 30 days.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Key Fact</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Law</strong></td><td>Section 169 (shareholder removal) + Section 167 (vacation) + Section 241/242 (NCLT) - Companies Act 2013</td></tr>
                        <tr><td><strong>Who Can Remove</strong></td><td>Shareholders by ordinary resolution (Section 169); automatic by law (Section 167); NCLT order (Section 241/242)</td></tr>
                        <tr><td><strong>Special Notice Requirement</strong></td><td>Members holding at least 1% voting power or INR 5 lakh paid-up value (Section 115)</td></tr>
                        <tr><td><strong>Notice Period to Director</strong></td><td>At least 14 days before the general meeting at which removal is proposed</td></tr>
                        <tr><td><strong>Resolution Required</strong></td><td>Ordinary resolution (simple majority) - no special resolution needed for Section 169</td></tr>
                        <tr><td><strong>Right to Be Heard</strong></td><td>Director must receive notice and may make written representation (Section 169(4))</td></tr>
                        <tr><td><strong>Form to File</strong></td><td>DIR-12 with ROC within 30 days of passing the ordinary resolution</td></tr>
                        <tr><td><strong>Exceptions</strong></td><td>NCLT-appointed directors (Section 242) and proportional representation directors (Section 163)</td></tr>
                        <tr><td><strong>Penalty - Section 169 Violation</strong></td><td>INR 50,000 for company + INR 500/day continuing default (max INR 3,00,000 company / INR 1,00,000 officer)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Director ko kaise hatayein company se? Companies Act 2013 ki Section 169 ke anusaar, shareholders ordinary resolution pass karke director ko hata sakte hain. Patron Accounting yeh poori prakriya kanuni roop se manage karta hai - special notice se lekar DIR-12 filing tak.</p>
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
                <h2 class="section-title">What is Removal of Director?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Removal of a director</strong> is the involuntary termination of a director's office before the expiry of their term, effected by shareholders through an ordinary resolution under Section 169 of the Companies Act, 2013, by automatic vacation of office under Section 167, or by order of the National Company Law Tribunal under Sections 241 and 242.</p>
                    <p>Unlike <a href="/resignation-of-director">resignation of a director</a> (which is voluntary), removal is initiated by shareholders or by operation of law. The process involves mandatory procedural safeguards including special notice, the director's right to be heard, and written representation rights - any of which, if skipped, can invalidate the entire removal.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Removal of Director:</strong></p>
                    <p><strong>Section 169 Removal:</strong> Shareholder-driven removal by ordinary resolution at a general meeting. Requires special notice under Section 115. The most common removal route.</p>
                    <p><strong>Section 167 Vacation:</strong> Automatic vacation of office if a director fails to attend all board meetings over a 12-month period without obtaining leave of absence from the Board.</p>
                    <p><strong>Special Notice (Section 115):</strong> Notice given by members holding at least 1% voting power or shares with paid-up value of at least INR 5 lakh, at least 14 days before the general meeting.</p>
                    <p><strong>DIR-12:</strong> MCA e-form to notify the ROC of change in board composition. Filed within 30 days of the triggering event on the MCA V3 portal.</p>
                    <p><strong>Right of Representation (Section 169(4)):</strong> Director proposed to be removed has the right to submit written representations to be circulated to all members. Cannot be suppressed unless NCLT finds it defamatory.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Director removal document -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SECTION 169 REMOVAL</text>
                            <text x="100" y="52" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">3 LEGAL ROUTES</text>
                            <line x1="45" y1="58" x2="155" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <rect x="40" y="65" width="40" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="60" y="77" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">S.169</text>
                            <rect x="85" y="65" width="30" height="18" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                            <text x="100" y="77" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">S.167</text>
                            <rect x="120" y="65" width="35" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
                            <text x="137" y="77" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">NCLT</text>
                            <rect x="55" y="92" width="90" height="16" rx="4" fill="#14365F"/>
                            <text x="100" y="103" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DIR-12 WITHIN 30 DAYS</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Legally Compliant Removal</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 169</span>
                        <strong>Director Removal</strong>
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
            <h2 class="section-title">When Can a Director Be Removed?</h2>
            <div class="content-text">
                
                <p>Section 169 applies to all directors of all company types - private limited, public limited, listed - <strong>EXCEPT</strong> directors appointed by NCLT under Section 242 and directors under proportional representation (Section 163).</p>
                <p><strong>Common grounds for removal include:</strong></p>
                <ul>
                    <li>Misconduct, breach of fiduciary duty, or misappropriation of company funds</li>
                    <li>Conflict of interest or violation of Section 184 (disclosure of interest)</li>
                    <li>Persistent failure to attend board meetings (triggering Section 167 automatic vacation after 12 months)</li>
                    <li>Disqualification under Section 164 - conviction, default in filing financial statements</li>
                    <li>Loss of shareholder confidence in director's performance or strategic alignment</li>
                    <li>Founder/co-founder disputes in closely held companies</li>
                </ul>
                <p style="margin-top:16px;"><strong>Independent Directors:</strong> Can be removed under Section 169, but a special resolution (75% majority) is required for removal of an independent director re-appointed for a second term under Section 149(10).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Deliverables for Director Removal</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Special Notice Drafting (Section 115)</strong></td><td>Drafting and delivery of special notice to the director proposed to be removed, with proof of service</td></tr>
                        <tr><td><strong>Board Meeting and EGM Management</strong></td><td>Board resolution to convene EGM, EGM notice preparation with director's representation enclosed</td></tr>
                        <tr><td><strong>Ordinary Resolution Facilitation</strong></td><td>EGM management, voting mechanics analysis, resolution passing and documentation</td></tr>
                        <tr><td><strong>DIR-12 Filing on MCA V3 Portal</strong></td><td>E-filing within 30 days of EGM with all required attachments and digital signatures</td></tr>
                        <tr><td><strong>Register of Directors Update</strong></td><td>Update company's Register of Directors and KMP post-removal</td></tr>
                        <tr><td><strong>Representation Rights Compliance</strong></td><td>Ensuring director's written representation is properly circulated per Section 169(4)</td></tr>

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
            <h2 class="section-title">Step-by-Step Procedure for Removal of Director (Route A: Section 169)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Section 169 shareholder removal procedure involves 8 mandatory steps. Skipping any step can invalidate the entire removal.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify Members and Issue Special Notice (Section 115)</h3><p class="step-description">Members holding not less than 1% of total voting power, or shares with aggregate paid-up value of at least INR 5 lakh, give special notice of their intention to move a resolution for removal. Must be received by the company at least 14 days before the general meeting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Qualifying members identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Special notice served</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="30" height="8" rx="2" fill="#F5A623"/><text x="45" y="26" font-size="5" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">S.115</text><line x1="30" y1="36" x2="90" y2="36" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="46" x2="85" y2="46" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><text x="60" y="60" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">14 DAYS</text></svg></div><span class="illustration-label">Notice Issued</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Company Sends Notice to Director (Section 169(2))</h3><p class="step-description">On receiving the special notice, the company must immediately send a copy to the director proposed to be removed. Failure to notify the director is sufficient to invalidate the entire removal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Director notified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Proof of delivery obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="40" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="45" y="30" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">NOTICE</text><path d="M72 27l10 0" stroke="#14365F" stroke-width="1.5" stroke-linecap="round"/><circle cx="90" cy="27" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="90" y="30" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DIR</text></svg></div><span class="illustration-label">Director Notified</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Director Submits Written Representation (Section 169(4))</h3><p class="step-description">The director has the right to make written representations of reasonable length and to request the company to notify all members. Must be enclosed with EGM notice if received in time.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Representation received (if any)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Circulated to members</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">REPRESENTATION</text><line x1="25" y1="34" x2="95" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="25" y1="46" x2="85" y2="46" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="25" y1="56" x2="80" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><text x="60" y="70" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Section 169(4)</text></svg></div><span class="illustration-label">Rep Handled</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Board Meeting - Fix EGM Date and Approve Notice</h3><p class="step-description">Hold a Board Meeting (7 days' notice). Pass Board Resolution to fix EGM date, time, venue, and approve EGM notice. EGM must be held after the 14-day special notice period has elapsed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EGM date fixed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="14" rx="3" fill="#14365F"/><text x="60" y="30" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">BOARD MEETING</text><line x1="25" y1="42" x2="95" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="30" y="48" width="60" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="58" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">EGM DATE SET</text></svg></div><span class="illustration-label">EGM Scheduled</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Issue EGM Notice to All Members</h3><p class="step-description">EGM notice sent to all shareholders with: (a) copy of special notice from proposing members; (b) director's written representation, if received in time. Minimum 21 days' notice (or shorter with 95% written consent).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EGM notice dispatched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Representation enclosed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="50" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="60" y="10" width="50" height="60" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="35" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">EGM</text><text x="35" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">NOTICE</text><text x="85" y="35" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Special</text><text x="85" y="47" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Notice +</text><text x="85" y="59" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Repn</text></svg></div><span class="illustration-label">Notice Sent</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Convene EGM and Give Director Opportunity to Be Heard</h3><p class="step-description">At the EGM, the director must be given a reasonable opportunity to be heard orally in addition to written representation. This is a mandatory statutory safeguard under Section 169(1). Skipping this renders the removal void.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Director heard at EGM</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Natural justice complied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">EGM</text><line x1="25" y1="32" x2="95" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><circle cx="40" cy="50" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="53" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DIR</text><circle cx="80" cy="50" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="80" y="53" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SH</text></svg></div><span class="illustration-label">Director Heard</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Pass Ordinary Resolution for Removal</h3><p class="step-description">Ordinary resolution (simple majority - more than 50% of votes cast) is sufficient. Exception: Independent director in second term requires special resolution (75%). Removed director cannot be reappointed at the same meeting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Removal effective</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ORDINARY RES.</text><line x1="30" y1="32" x2="90" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><rect x="30" y="40" width="60" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><text x="60" y="51" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">PASSED > 50%</text></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">07</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">File DIR-12 and Update MCA Records</h3><p class="step-description">File e-form DIR-12 on MCA V3 portal within 30 days. Attach: special notice, certified resolution, notice to director, evidence of hearing. On approval, director's name is removed from MCA master data.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DIR-12 filed within 30 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MCA records updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DIR-12 FILED</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="60" cy="52" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M56 52l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Checklist for Removal of Director</h2>
            <div class="content-text">
                
                <ul>
                    <li>Special notice from member(s) with proof of 1% voting power or INR 5 lakh paid-up value</li>
                    <li>PAN and DIN of the director to be removed</li>
                    <li>Copy of MoA/AoA (for checking any additional removal provisions)</li>
                    <li>Board resolution convening EGM and approving EGM notice</li>
                    <li>EGM notice issued to all shareholders (with proof of delivery)</li>
                    <li>Director's written representation, if submitted (Section 169(4))</li>
                    <li>Certified true copy of ordinary resolution passed at EGM</li>
                    <li>Attendance register / proceedings of EGM confirming director had opportunity to be heard</li>
                    <li>DIR-12 filing fee (government fee at actuals based on paid-up capital)</li>
                    <li>DSC (Class 3) of a continuing director or Company Secretary for DIR-12 signing</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Director Removal and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Director-Shareholder Blocking Resolution</strong></td><td>Director who is also a shareholder tries to block the removal vote</td><td>Section 169 does not allow the director being removed to vote on the removal resolution as a member. We prepare voting mechanics and quorum analysis in advance.</td></tr>
                        <tr><td><strong>Special Notice Not Served 14 Days Before Meeting</strong></td><td>Removal challenged and voided</td><td>We calculate notice period from actual service date (not dispatch), excluding both end-dates. Registered post + email with read receipts for proof.</td></tr>
                        <tr><td><strong>Director's Representation Suppressed</strong></td><td>NCLT challenge for suppression</td><td>Every representation is enclosed with EGM notices or sent separately to all shareholders. If genuinely defamatory, we advise seeking NCLT direction under Section 169(4) proviso.</td></tr>
                        <tr><td><strong>DIR-12 Missed 30-Day Deadline</strong></td><td>Up to 12x government fees penalty</td><td>We initiate DIR-12 preparation simultaneously with EGM, so the form is ready to file the next business day after EGM. Zero DIR-12 penalties for any client.</td></tr>

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
            <h2 class="section-title">Professional Fees for Removal of Director</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Standard Removal (Section 169 - Private Limited)</td><td class="table-amount">Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Removal with Contested Director (representation management)</td><td class="table-amount">Starting at INR 7,999</td></tr>
                        <tr><td>Section 167 Vacation of Office + DIR-12 Filing</td><td class="table-amount">Starting at INR 2,999</td></tr>
                        <tr><td>Listed / Public Company Removal (Section 169 + MGT-14)</td><td class="table-amount">Starting at INR 9,999</td></tr>
                        <tr><td>Emergency Filing (DIR-12 within 72 hours of EGM)</td><td class="table-amount">Starting at INR 6,999</td></tr>
                        <tr><td>Government Fees (DIR-12)</td><td class="table-amount">At actuals - MCA fee based on paid-up capital</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Removal of Director consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20director%20removal.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Removal of Director</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Special notice drafting and dispatch</td><td>Day 1</td></tr>
                        <tr><td>Company forwards notice to concerned director</td><td>Immediately on receipt (Section 169(2))</td></tr>
                        <tr><td>Minimum notice period before EGM</td><td>14 days from date of special notice service</td></tr>
                        <tr><td>Board meeting to convene EGM</td><td>Within 2-3 days of receiving special notice</td></tr>
                        <tr><td>EGM notice to shareholders</td><td>Minimum 21 days before EGM (or shorter with 95% consent)</td></tr>
                        <tr><td>EGM held and ordinary resolution passed</td><td>After 14-day special notice period has elapsed</td></tr>
                        <tr><td>DIR-12 filing with ROC</td><td>Within 30 days of passing ordinary resolution</td></tr>
                        <tr><td>MCA master data update</td><td>3-7 business days after DIR-12 approval</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Patron Turnaround:</strong> Full Route A (Section 169) procedure from instruction to DIR-12 filing: 10-15 working days. We prepare DIR-12 simultaneously with the EGM to ensure filing within 1-2 business days of the resolution.</p>

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
            <h2 class="section-title">Why Professional Assistance Matters for Director Removal</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Prevents Removal Being Voided</h3><p>A procedural error in notice period, representation rights, or voting mechanics is sufficient for an NCLT to declare the removal invalid.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg></div><h3>Avoids Costly Litigation</h3><p>Improperly removed directors routinely file for injunctive relief at NCLT. Professional process management eliminates the procedural angles for challenge.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>Protects Against DIR-12 Penalties</h3><p>Late or incorrect DIR-12 attracts up to 12x government fees and risks compounding offence. We file within 1-2 days of EGM.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>Governance Continuity</h3><p>We manage successor appointment simultaneously so the board never falls below minimum director requirements under the Companies Act.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Reduces Founder Dispute Escalation</h3><p>In co-founder removal scenarios, a documented, legally compliant process provides a defensible record that withstands scrutiny.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Pan-India Coverage</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. 100+ director change assignments handled annually with zero DIR-12 penalties.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">100+ Director Change Assignments Annually - Zero DIR-12 Penalties</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 4.9/5 Rating | 350+ Reviews | 100+ Director Changes Annually | Zero DIR-12 Penalties | Pune, Mumbai, Delhi, Gurugram</p>
                <div class="highlight-box" style="margin-top:16px;"><p>"Professionalism, attention to detail, and timely communication made the process smooth. Our director removal was completed and DIR-12 filed within 12 days." - <strong>Subhendu Mishra, Director, Pune</strong></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Patron Accounting - Director Removal</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Approach</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Special Notice Compliance</strong></td><td>Risk of wrong notice period calculation</td><td>Calculated precisely with proof of delivery</td></tr>
                        <tr><td><strong>Director's Representation Rights</strong></td><td>Often overlooked, creating NCLT challenge risk</td><td>Mandatory - enclosed with EGM notice or sent separately</td></tr>
                        <tr><td><strong>EGM Notice Period</strong></td><td>Often confused with special notice period</td><td>Managed as parallel tracks with distinct deadlines</td></tr>
                        <tr><td><strong>Voting Mechanics</strong></td><td>Director-shareholder voting confusion is common</td><td>Pre-EGM voting mechanics analysis provided</td></tr>
                        <tr><td><strong>DIR-12 Filing Speed</strong></td><td>Average 10-20 days post-EGM; risk of missing 30-day window</td><td>Filed within 1-2 business days of EGM</td></tr>
                        <tr><td><strong>Penalty Risk</strong></td><td>High - multiple points of failure</td><td>Zero - compliance guaranteed</td></tr>

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
            <h2 class="section-title">Related Secretarial Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/resignation-of-director">Resignation of Director in India</a> - voluntary cessation and DIR-12 filing</li>
                    <li><a href="/appointment-of-director">Appointment of Director in India</a> - new director appointment and DIN application</li>
                    <li><a href="/director-kyc">Director KYC in India</a> - annual DIR-3 KYC compliance</li>
                    <li><a href="/private-limited-company-compliance">Compliance for Private Limited Companies</a> - annual ROC filings and board meetings</li>
                    <li><a href="/roc-notice">Registrar of Companies (ROC) Notice</a> - ROC notice response and compliance</li>
                    <li><a href="/change-of-auditor">Change of Auditor in India</a> - auditor change procedure and ADT-1 filing</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Removal of Director in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Legal Provision</th><th>Details</th></tr></thead><tbody>
                        <tr><td><strong>Section 169(1) - Companies Act 2013</strong></td><td>Company may by ordinary resolution remove a director (not appointed by NCLT) before expiry of term after giving reasonable opportunity of being heard. Source: <a href="https://www.indiacode.nic.in/show-data?actid=AC_CEN_22_29_00008_201318_1517807327856&sectionId=1360&sectionno=169" target="_blank" rel="noopener">India Code - Section 169</a></td></tr>
                        <tr><td><strong>Section 169(2)</strong></td><td>Company must immediately send copy of special notice to the concerned director</td></tr>
                        <tr><td><strong>Section 169(4)</strong></td><td>Director has statutory right to make written representations. Company must circulate to all members. NCLT can exempt if defamatory.</td></tr>
                        <tr><td><strong>Section 115 - Special Notice</strong></td><td>Members holding 1% voting power or INR 5 lakh paid-up. Must reach company at least 14 days before meeting.</td></tr>
                        <tr><td><strong>Section 167 - Vacation of Office</strong></td><td>Director's office automatically vacates if absent from all board meetings for 12 months without Board leave.</td></tr>
                        <tr><td><strong>Section 163 - Proportional Rep</strong></td><td>Exception: Directors appointed under proportional representation cannot be removed under Section 169.</td></tr>
                        <tr><td><strong>Penalty - Section 169</strong></td><td>INR 50,000 for company + INR 500/day continuing default up to INR 3,00,000 for company and INR 1,00,000 per officer.</td></tr>
                        <tr><td><strong>DIR-12 Late Filing Penalty</strong></td><td>1x to 12x government fees based on delay. Beyond 300 days: 12x fees plus compounding offence. Source: <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a></td></tr>
                </tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Removal of Director in India</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about removing a director under Section 169, DIR-12 filing, representation rights, and penalties.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Removal of Director in India'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can a director be removed without their consent under the Companies Act 2013?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 169 of the Companies Act, 2013 expressly empowers shareholders to remove a director before the expiry of their term by passing an ordinary resolution at a general meeting. The director's consent is not required. However, the director must receive the special notice, and must be given a reasonable opportunity to be heard at the meeting and to make written representations under Section 169(4).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the procedure to remove a director under Section 169?</h3>
                        <div class="faq-expanded__a"><p>The procedure requires: (1) special notice from members (1% voting or INR 5 lakh paid-up) at least 14 days before the EGM; (2) company immediately forwards notice to the director; (3) director may submit written representations to be circulated; (4) Board convenes EGM with at least 21 days' notice; (5) EGM held with director given chance to be heard; (6) ordinary resolution passed; (7) DIR-12 filed with ROC within 30 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can a director appointed by NCLT be removed by shareholders?</h3>
                        <div class="faq-expanded__a"><p>No. Section 169(1) explicitly excludes directors appointed by the National Company Law Tribunal (NCLT) under Section 242 from shareholder removal. Such directors can only be removed by an order of the NCLT itself. Similarly, directors appointed under the principle of proportional representation under Section 163 cannot be removed under Section 169.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What documents are needed to file DIR-12 for removal of director?</h3>
                        <div class="faq-expanded__a"><p>DIR-12 requires: special notice from members, certified true copy of the ordinary resolution passed at EGM, notice sent to the director before the meeting, and evidence that the director was given an opportunity to be heard. The form must be digitally signed by a continuing director or Company Secretary using a Class 3 DSC and filed on MCA V3 portal within 30 days of the EGM date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not filing DIR-12 on time after removal?</h3>
                        <div class="faq-expanded__a"><p>DIR-12 must be filed within 30 days of the EGM. Late filing attracts escalating fees: up to 15 days' delay - 1x government fees; beyond 15 days - 2x; beyond 30-60 days - 4x; beyond 60-90 days - 6x; beyond 90-180 days - 10x; and beyond 180-300 days - 12x government fees plus possible compounding offence proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a removed director be reappointed?</h3>
                        <div class="faq-expanded__a"><p>Under Section 169(7), the director removed at an EGM cannot be reappointed at the same general meeting. Additionally, the removed director cannot be appointed as a casual vacancy director to fill the vacancy created by their own removal. They may, however, be appointed as a director at a future general meeting if shareholders choose to do so.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Director hata sakte hain bina unki marzi ke?</h3>
                        <div class="faq-expanded__a"><p>Haan. Companies Act 2013 ki Section 169 ke anusaar, shareholders ordinary resolution pass karke director ko unki marzi ke bina hata sakte hain. Director ko sirf special notice, sunne ka mauka, aur likhit representation ka adhikar milta hai - unki marzi ki zarurat nahi. Patron Accounting yeh poori prakriya kanuni roop se manage karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if the director submits a written representation before the EGM?</h3>
                        <div class="faq-expanded__a"><p>Under Section 169(4), the company must enclose the director's written representation with the EGM notice if received in time, or send it separately to all members if received after the notice is dispatched. The director also has the right to speak at the EGM. The company cannot suppress the representation unless the NCLT finds it is being used to publicise defamatory content.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Section 169 removal requires:</strong> Ordinary resolution - no special resolution needed (except for independent director in second term).</p>
                <p><strong>Special notice period:</strong> At least 14 days before the general meeting - under Section 115, Companies Act 2013.</p>
                <p><strong>DIR-12 filing deadline:</strong> Within 30 days of the date of passing the ordinary resolution at EGM.</p>
                <p><strong>Section 167 vacation:</strong> Automatic - no resolution needed - if director absent from all board meetings for 12 continuous months without Board leave.</p>
                <p><strong>NCLT-appointed directors:</strong> Cannot be removed by shareholders under Section 169 - only by NCLT order under Section 242.</p>
                <p><strong>Reappointment bar:</strong> Removed director cannot fill casual vacancy created by their own removal or be reappointed at the same EGM.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIR-12 Must Be Filed Within 30 Days - Penalties Escalate Rapidly</h2>
            <div class="content-text">
                
                <p><strong>A procedurally defective director removal exposes the company to NCLT challenge, potential reinstatement, and INR 50,000 base penalty under Section 169.</strong></p>
                <ul>
                    <li><strong>DIR-12 late filing:</strong> Up to 15 days - 1x fees; beyond 30 days - 4x; beyond 90 days - 10x; beyond 180-300 days - 12x government fees plus compounding</li>
                    <li><strong>Section 169 penalty:</strong> INR 50,000 for company + INR 500/day of continuing default</li>
                    <li><strong>NCLT challenge risk:</strong> Improperly removed directors routinely file for reinstatement</li>
                    <li><strong>Reputational cost:</strong> A publicised NCLT challenge for improper removal far exceeds the INR 1,999 professional fee for a properly managed process</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Remove a Director Legally and Without Risk - Starting at INR 1,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Removal of a director in India is not merely a shareholder vote - it is a multi-step statutory process under Section 169 of the Companies Act, 2013 with mandatory notice periods, representation rights, and post-removal ROC filings. Any misstep can be challenged in the NCLT or High Court.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's company secretarial team manages the complete removal process - from special notice drafting and EGM management to DIR-12 filing and MCA master data update - ensuring the removal is legally sound and professionally documented.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 1,999 (Exl GST and Govt. Charges) | 100+ Director Changes Annually | Zero DIR-12 Penalties | 10-15 Working Days</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20director%20removal.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Removal%20of%20Director&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20remove%20a%20director.%20Please%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Removal of Director Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert company secretarial services for director removal across major cities in India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/removal-of-director/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/removal-of-director/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/removal-of-director/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/removal-of-director/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Secretarial Services</div><div class="pa-block-sub">Complete company secretarial and compliance support</div><div class="pa-cross-grid"><a href="/resignation-of-director" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Resignation of Director</div><div class="pa-card-sub">India</div></div></a><a href="/appointment-of-director" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Director</div><div class="pa-card-sub">India</div></div></a><a href="/director-kyc" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director KYC</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/roc-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ROC Notice Response</div><div class="pa-card-sub">India</div></div></a><a href="/change-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers Removal of Director in India under Section 169 of the Companies Act, 2013. Content reviewed every 6 months. All statutory references verified as of March 2026.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
