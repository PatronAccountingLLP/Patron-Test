
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
    <title>Trademark Cease & Desist Notice - Drafting, Reply & Process</title>
    <meta name="description" content="Reply to trademark objection under Section 9 or 11 within 30 days. Examination report response drafted by IP experts. Starting Rs 2,999.">
    <link rel="canonical" href="/trademark-notice">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Cease & Desist Notice - Drafting, Reply & Process">
    <meta property="og:description" content="Reply to trademark objection under Section 9 or 11 within 30 days. Examination report response drafted by IP experts. Starting Rs 2,999.">
    <meta property="og:url" content="/trademark-notice">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/trademark-notice-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Cease & Desist Notice - Drafting, Reply & Process">
    <meta name="twitter:description" content="Reply to trademark objection under Section 9 or 11 within 30 days. Examination report response drafted by IP experts. Starting Rs 2,999.">
    <meta name="twitter:image" content="/images/trademark-notice-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Trademark Notice Reply in India: Objection Reply Process",
          "description": "Reply to trademark objection under Section 9 or 11 within 30 days. Examination report response drafted by IP experts. Starting Rs 2,999.",
          "url": "https://www.patronaccounting.com/trademark-notice",
          "serviceType": "Trademark Notice Reply in India: Objection Reply Process",
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
              "name": "Trademark Notice Reply in India: Objection Reply Process",
              "item": "https://www.patronaccounting.com/trademark-notice"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is trademark objection reply?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A trademark objection reply (also called a counter statement or examination report response) is a legal document filed by the applicant in response to the Examination Report issued by the Trademark Examiner. The Examiner raises objections under Section 9 (absolute grounds - mark is not distinctive or is descriptive) or Section 11 (relative grounds - mark is similar to an existing mark). The reply argues why the mark should be registered despite the objections, supported by evidence and case law."
              }
            },
            {
              "@type": "Question",
              "name": "What is the deadline for trademark objection reply?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Rule 33(4) of the Trade Marks Rules, 2017, the applicant has 30 days (1 month) from the date of receipt of the Examination Report to file a reply. An extension of 30 additional days may be requested. If no reply is filed within this period, the application is treated as abandoned."
              }
            },
            {
              "@type": "Question",
              "name": "Trademark objection ka reply kaise kare?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sabse pehle ipindia.gov.in par apna application number search karo aur Examination Report download karo. Report mein dekho ki objection Section 9 ke tahat hai ya Section 11 ke tahat. Section 9 mein mark ko distinctive ya acquired distinctiveness prove karna hota hai - invoices, ads, sales data ke saath affidavit file karo. Section 11 mein cited mark se apne mark ko visually, phonetically, aur conceptually alag dikhao. Reply draft karo point-by-point, documents attach karo, aur IP India portal par upload karo 30 din ke andar. Patron Accounting expert reply draft karta hai - +91 945 945 6700 ."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I don't reply to trademark objection?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "If no reply is filed within 30 days (or 60 days with extension), the trademark application is treated as abandoned for want of prosecution. The government fee is forfeited, the filing date priority is lost, and the applicant must file a fresh application with new fees if they wish to register the mark. During the gap, competitors may file similar marks."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between trademark objection and trademark opposition?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trademark objection is raised by the Trademark Examiner during the examination stage, before the mark is published. It is based on Section 9 (absolute grounds) and Section 11 (relative grounds). Trademark opposition is raised by a third party (typically an existing trademark owner) after the mark is published in the Trademark Journal. Opposition is filed via Form TM-O within 4 months of publication. Objection is between the applicant and the Registry; opposition is between the applicant and a third party."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for trademark objection reply?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "There is no government fee for filing the counter statement (objection reply) on the IP India portal. If Form TM-M (amendment) is required alongside the reply, the government fee is Rs 900 (individual/startup) or Rs 1,800 (other entities). Patron Accounting's professional fee for drafting and filing the reply starts from INR 3,999."
              }
            },
            {
              "@type": "Question",
              "name": "Trademark objection aur trademark opposition mein kya fark hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trademark objection Examiner raise karta hai examination stage par - Section 9 ya 11 ke grounds par. Reply applicant file karta hai 30 din mein. Trademark opposition koi teesra party (existing trademark owner) raise karta hai mark ke Trademark Journal mein publish hone ke baad. Opposition Form TM-O se 4 mahine mein file hoti hai. Dono ke liye Patron Accounting madad karta hai."
              }
            },
            {
              "@type": "Question",
              "name": "Can a trademark objection be overcome?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Most trademark objections can be overcome with a well-drafted reply supported by evidence. For Section 9 objections, proving acquired distinctiveness through 2-3 years of commercial use with evidence (invoices, advertising, sales data) is the primary strategy. For Section 11 objections, demonstrating visual, phonetic, and conceptual differences from the cited mark, or obtaining a consent letter from the prior mark owner, or invoking Section 12 (honest concurrent use) are effective approaches. Quick Answers Can I file the objection reply myself? Yes. But given the substantive legal nature of objections (Section 9/11 arguments, case law citations), engaging an IP professional significantly improves the chances of acceptance. What if the cited mark under Section 11 is expired or abandoned? If the cited prior mark is expired, cancelled, or abandoned, point this out in the reply with documentary proof from the IP India database. An expired mark cannot block your registration. Can I request a hearing instead of filing a written reply? Yes. Under Rule 33(4), you can request a hearing instead of or in addition to filing a written reply. However, filing a strong written reply first is recommended. What happens after a successful objection reply? The status changes to 'Accepted' or 'Advertised Before Acceptance' (ABA). The mark is then published in the Trademark Journal for 4 months, during which third parties can file opposition."
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
                        Trademark Notice Reply in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Status:</span> Your trademark application shows 'Objected' on IP India portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Grounds:</span> Section 9 (Absolute Grounds) and/or Section 11 (Relative Grounds)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> 30 days from receipt of Examination Report (extendable by 30 days)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Also Called:</span> Trademark Objection Reply | Examination Report Response | Counter Statement</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Starting from INR 3,999</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Trademark%20Objection%20Reply.%20My%20application%20shows%20Objected%20status." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Trademark Notice Reply',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'trademark-notice', 'label' => 'Trademark Notice Reply / Objection Reply', 'selected' => true, 'disabled' => false],
                            ['value' => 'trademark-registration', 'label' => 'Trademark Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-formality-check-fail', 'label' => 'Trademark Formality Check Fail', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-hearing', 'label' => 'Trademark Hearing', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-opposition', 'label' => 'Trademark Opposition', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-search-report', 'label' => 'Trademark Search Report', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-renewal', 'label' => 'Trademark Renewal', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-rectification', 'label' => 'Trademark Rectification', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our trademark was objected under Section 9 as descriptive. Patron Accounting built a strong acquired distinctiveness case with 3 years of invoices and advertising data. The objection was overcome without a hearing. Impressive legal drafting.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SK</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Sanjay Kapoor</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Brand Owner, Mumbai</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Had a Section 11 objection with a cited prior mark. Patron Accounting researched the cited mark, found it was abandoned, and drafted a reply that got our application accepted in 5 weeks. Very efficient.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#1B365D;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PA</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Priyanka Arora</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Tech Startup</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Combined Section 9 and Section 11 objection - seemed complicated. Patron Accounting handled everything, from evidence compilation to counter statement drafting. The reply was accepted first time. Highly recommend.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Deshmukh</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, FMCG Brand</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The team prepared a comprehensive mark comparison document for our Section 11 objection and also got a consent letter from the cited mark owner. Application moved to acceptance smoothly. Great coordination.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MG</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Meera Gupta</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IP Manager, Pharma Company</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our examination report had multiple objections across Section 9(1)(a) and Section 11(1). Patron Accounting addressed each one point-by-point with case law citations. Professional and thorough work.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AJ</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Joshi</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Partner, Law Firm</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
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
                    <p>Get expert trademark objection reply services - from examination report analysis to hearing preparation.</p>
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
            <a href="#what-section" class="toc-btn">What Is It?</a>
            <a href="#who-section" class="toc-btn">Sec 9 vs Sec 11</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">Reply Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Notice Reply - Overview and Objection Reply Guide</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Notice Reply Services at a Glance</strong></p>
                    <p>When a trademark application passes the formality check, the Trademark Registry assigns an Examiner who reviews the mark for registrability. If the Examiner finds grounds for refusal, an Examination Report is issued citing objections under Section 9 (absolute grounds: lack of distinctiveness, descriptive nature, deceptive marks) and/or Section 11 (relative grounds: similarity or identity with an earlier registered mark). The application status changes to 'Objected' on the <a href="https://ipindia.gov.in" target="_blank" rel="noopener">IP India portal</a>. The applicant must file a reply within 30 days under Rule 33(4) of the Trade Marks Rules, 2017. If no reply is filed, the application is treated as abandoned. Patron Accounting's IP team drafts and files trademark objection replies from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
                </div>
                <p>Trademark objection is one of the most critical stages in the registration process. Nearly 30-40% of all trademark applications in India receive some form of objection from the Examiner. This does not mean the mark cannot be registered - it means the Examiner requires the applicant to justify the registrability of the mark with legal arguments and evidence.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Status</td><td>'Objected' on IP India portal</td></tr>
                        <tr><td>Governing Law</td><td>Trade Marks Act, 1999 (Sec 9, 11); Trade Marks Rules, 2017 (Rule 33(4))</td></tr>
                        <tr><td>Objection Types</td><td>Section 9: Absolute grounds (descriptive, non-distinctive, deceptive) | Section 11: Relative grounds (similar/identical to prior mark)</td></tr>
                        <tr><td>Reply Deadline</td><td>30 days from receipt of Examination Report (extendable by 30 days)</td></tr>
                        <tr><td>Reply Mechanism</td><td>Counter Statement filed on IP India portal</td></tr>
                        <tr><td>Next Stage After Reply</td><td>Accepted / Advertised Before Acceptance (ABA) / Hearing</td></tr>
                        <tr><td>Consequence of Non-Reply</td><td>Application treated as ABANDONED</td></tr>
                    </tbody>
                </table>
                </div>
                <p></p>
                <p>A well-drafted reply, citing relevant case law such as <em>Cadila Healthcare v Cadila Pharmaceuticals</em> and supported by commercial evidence, can overcome most objections. Patron Accounting's IP team has handled thousands of trademark objection replies across all Trademark Registry offices - Mumbai, Delhi, Kolkata, Chennai, and Ahmedabad. Keywords: <em>trademark objection reply, TM objection reply, examination report reply, trademark objection kaise reply kare, TM-12 reply</em>.</p>
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
                <h2 class="section-title">What Is a Trademark Notice / Objection?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>After a trademark application is filed under Section 18 of the Trade Marks Act, 1999, and passes the formality check, the application is assigned to a Trademark Examiner for substantive examination. The Examiner reviews the mark against the provisions of Sections 9, 11, and 13 of the Act. If the Examiner finds grounds for refusal, they issue an Examination Report (commonly called a trademark objection notice) to the applicant or their agent.</p>
                    <p>The Examination Report is sent via email to the registered email address and is also available on the <a href="https://ipindia.gov.in" target="_blank" rel="noopener">IP India portal</a> under the application's document history. It specifies the exact sections and sub-sections under which the objection is raised, along with the Examiner's reasoning. The application status changes to 'Objected'. This is a substantive stage - unlike <a href="/trademark-formality-check-fail">formality check fail</a> (which deals with procedural issues), trademark objection deals with the legal registrability of the mark itself.</p>
                    <p>The applicant must file a reply (counter-statement) within 30 days from the date of receipt of the Examination Report, under Rule 33(4) of the Trade Marks Rules, 2017. An extension of 30 additional days may be requested. If no reply is filed, the application is treated as abandoned. If the reply is filed but the Examiner is not fully satisfied, a <a href="/trademark-hearing">show-cause hearing</a> may be scheduled before the Registrar.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Notice Reply:</strong></p>
                    <ul>
                        <li><strong>Examination Report:</strong> The official document issued by the Trademark Examiner citing the specific grounds of objection (Section 9 and/or Section 11) against the trademark application.</li>
                        <li><strong>Section 9 - Absolute Grounds:</strong> The mark is refused on its own merit - it is not distinctive, is descriptive of the goods/services, is customary in trade, is deceptive, or is prohibited by law.</li>
                        <li><strong>Section 11 - Relative Grounds:</strong> The mark is refused because it is identical or deceptively similar to an earlier registered or pending trademark for the same or similar goods/services.</li>
                        <li><strong>Section 12 - Honest Concurrent Use:</strong> A defence against Section 11 objections - if both marks have been honestly and concurrently used without confusion, registration may not be refused.</li>
                        <li><strong>Counter Statement:</strong> The legal response filed by the applicant addressing each objection point-by-point with arguments, evidence, and case law references.</li>
                        <li><strong>Show-Cause Hearing:</strong> If the written reply does not satisfy the Examiner, a hearing is scheduled before the Registrar. See: <a href="/trademark-hearing">Trademark Hearing</a>.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Notice Reply</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Trademark</span>
                        <strong>Objection Reply Service</strong>
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
            <h2 class="section-title">Grounds of Trademark Objection - Section 9 vs Section 11</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Section 9 (Absolute Grounds)</th><th>Section 11 (Relative Grounds)</th></tr></thead>
                    <tbody>
                        <tr><td>Nature</td><td>Mark is refused on its own merit</td><td>Mark is refused due to conflict with prior mark</td></tr>
                        <tr><td>Focus</td><td>Inherent characteristics of the mark</td><td>Comparison with existing marks</td></tr>
                        <tr><td>Sub-sections</td><td>9(1)(a): Not distinctive; 9(1)(b): Descriptive; 9(1)(c): Customary; 9(2)(a): Deceptive; 9(2)(b): Against morality; 9(2)(c): Prohibited by Emblems Act</td><td>11(1): Identical/similar for same/similar goods; 11(2): Identical/similar for different goods (reputation); 11(3): Prohibited by passing off or copyright</td></tr>
                        <tr><td>Reply Strategy</td><td>Prove acquired distinctiveness through use; show secondary meaning; submit evidence of advertising, sales, market recognition</td><td>Differentiate marks visually, phonetically, conceptually; show no likelihood of confusion; argue different goods/services; invoke Section 12; obtain consent letter</td></tr>
                        <tr><td>Key Evidence</td><td>Affidavit of use (2-3 years minimum), invoices, advertisements, website screenshots, social media, customer testimonials</td><td>Side-by-side mark comparison, market survey, letters of consent, evidence of coexistence, differences in trade channels</td></tr>
                        <tr><td>Case Law Reference</td><td>Keystone Knitting Mills (acquired distinctiveness)</td><td>Cadila Healthcare v Cadila Pharmaceuticals (deceptive similarity test)</td></tr>
                    </tbody>
                </table>
                </div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Trademark Notice Reply Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Examination Report Analysis</td><td>Detailed review of the Examination Report to identify every objection ground (Section 9, 11, 13), cited prior marks, and the Examiner's specific concerns</td></tr>
                        <tr><td>Reply Drafting (Counter Statement)</td><td>Point-by-point legal response addressing each objection with arguments, relevant case law (<em>Cadila Healthcare v Cadila Pharma</em>, <em>Keystone Knitting Mills</em>), statutory provisions, and supporting evidence</td></tr>
                        <tr><td>Evidence Compilation</td><td>Preparing and organising evidence: affidavit of use, invoices, sales data, advertising materials, website/social media screenshots, customer declarations, and market recognition proof</td></tr>
                        <tr><td>Filing on IP India Portal</td><td>Uploading the reply and supporting documents on the <a href="https://ipindia.gov.in" target="_blank" rel="noopener">IP India portal</a> within the 30-day deadline</td></tr>
                        <tr><td>Hearing Preparation and Representation</td><td>If the Examiner schedules a show-cause hearing, we prepare the hearing brief and coordinate representation before the Registrar. See: <a href="/trademark-hearing">Trademark Hearing</a></td></tr>
                        <tr><td>Form TM-M Amendment</td><td>If the objection requires amending the goods/services description, class, or other application details, we file Form TM-M alongside the reply</td></tr>

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
            <h2 class="section-title">6-Step Process to Reply to Trademark Objection</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Follow this step-by-step process to reply to a trademark examination report objection. Patron Accounting handles the entire reply process - from report analysis to hearing preparation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Download the Examination Report</h3>
        <p class="step-description">Check your application status on <a href="https://ipindia.gov.in" target="_blank" rel="noopener">ipindia.gov.in</a>. If the status shows 'Objected', download the Examination Report from the document history. The report specifies the sections under which objections are raised and, for Section 11, lists the cited prior marks with their registration numbers.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Visit ipindia.gov.in</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Download Examination Report</span>
                
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><line x1="66" y1="46" x2="80" y2="60" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="60" x2="50" y2="60" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Report Download</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Analyse Each Objection Ground</h3>
        <p class="step-description">For Section 9 objections: identify whether the mark is objected as non-distinctive (9(1)(a)), descriptive (9(1)(b)), customary (9(1)(c)), or deceptive (9(2)(a)). For Section 11 objections: identify the cited prior marks, compare visual, phonetic, and conceptual similarity, and assess the overlap in goods/services.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Identify Section 9 vs 11 grounds</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Research cited prior marks</span>
                
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="5" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="35" x2="75" y2="35" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="35" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="90" cy="60" r="14" fill="#FEE2E2" stroke="#EF4444" stroke-width="1.2"/><path d="M84 54l12 12M96 54l-12 12" stroke="#EF4444" stroke-width="2"/></svg>
            </div>
            <span class="illustration-label">Objection Analysis</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Develop Reply Strategy</h3>
        <p class="step-description">For Section 9: build a case for acquired distinctiveness through use. Prepare an affidavit of use supported by invoices, advertising, and market presence for at least 2-3 years. For Section 11: prepare a mark comparison showing visual, phonetic, and conceptual differences. Consider a consent letter or Section 12 (honest concurrent use).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Strategy for Section 9</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Strategy for Section 11</span>
                
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="35" r="25" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M50 35c0-5.5 4.5-10 10-10s10 4.5 10 10c0 4-2 6-3 8h-14c-1-2-3-4-3-8z" fill="#F5A623" opacity="0.3"/><rect x="53" y="55" width="14" height="4" rx="2" fill="#14365F"/><line x1="60" y1="20" x2="60" y2="10" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="42" y1="22" x2="36" y2="16" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="78" y1="22" x2="84" y2="16" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">Strategy Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Draft the Counter Statement</h3>
        <p class="step-description">Prepare a point-by-point reply: begin with identification (application number, mark, class), restate each objection, provide the legal argument with case law citations (e.g. <em>Cadila Healthcare v Cadila Pharma</em>), attach evidence as annexures, and conclude with the request for acceptance.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Point-by-point rebuttal</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Case law citations included</span>
                
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="70" y2="20" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/><line x1="30" y1="32" x2="65" y2="32" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/><line x1="30" y1="44" x2="60" y2="44" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/><path d="M90 15l10 60-6 2-10-60z" fill="#F5A623" opacity="0.8" stroke="#14365F" stroke-width="1"/></svg>
            </div>
            <span class="illustration-label">Draft Complete</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File the Reply on IP India Portal</h3>
        <p class="step-description">Log in to the IP India portal. Upload the counter statement and all supporting documents (affidavit, invoices, advertisements, mark comparison, consent letter). Ensure all files are in the correct format (PDF, under 5 MB). Submit within 30 days of receipt of the Examination Report.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Counter statement filed</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All evidence uploaded</span>
                
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 55V30M45 40l10-10 10 10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="40" y="58" width="40" height="8" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/></svg>
            </div>
            <span class="illustration-label">Reply Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Track Status and Prepare for Hearing</h3>
        <p class="step-description">After filing, monitor the status. Possible outcomes: (a) Accepted/Advertised Before Acceptance - the mark proceeds to publication; (b) Show-Cause Hearing - the Examiner schedules a hearing; (c) Refused - the application is refused (appealable). Typical status update: 30 to 60 days after reply filing.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Status monitored</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Hearing brief ready if needed</span>
                
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="30" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M45 40l10 10 20-20" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">Status Tracked</span>
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
            <h2 class="section-title">Documents Required for Trademark Objection Reply</h2>
            <div class="content-text">
                
                <ul>
                    <li>Examination Report (downloaded from IP India portal)</li>
                    <li>Counter Statement (drafted reply addressing each objection)</li>
                    <li>Affidavit of use (sworn statement with supporting evidence, especially for Section 9 objections)</li>
                    <li>Invoices/bills showing use of the mark in trade (minimum 2-3 years)</li>
                    <li>Advertising materials: print ads, digital ads, social media posts, brochures</li>
                    <li>Website screenshots showing the mark in commercial use</li>
                    <li>Sales figures and revenue data demonstrating market presence</li>
                    <li>Mark comparison document (for Section 11 - side-by-side visual, phonetic, conceptual analysis)</li>
                    <li>Letter of consent or coexistence agreement from cited prior mark owner (if obtainable)</li>
                    <li>Trademark registrations in other countries (if applicable)</li>
                    <li>Power of Attorney (Form TM-48) if not already filed</li>
                    <li>Form TM-M (if amendment to goods/services description or class is needed)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Mistakes in Trademark Objection Replies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Filing a generic template reply</td><td>Examiner rejects the reply; application remains objected or is abandoned</td><td>Each Examination Report is unique. Patron Accounting drafts tailored legal arguments addressing the exact objections raised with specific evidence and case law.</td></tr>
                        <tr><td>Missing the 30-day deadline</td><td>Application abandoned. Government fee forfeited, filing date lost.</td><td>Set a calendar reminder immediately upon receiving the Examination Report. Patron Accounting tracks deadlines proactively.</td></tr>
                        <tr><td>Not providing evidence for acquired distinctiveness</td><td>Section 9 objection remains unresolved; hearing scheduled or application refused</td><td>Submit concrete evidence: affidavit of use, invoices showing 2-3 years of commercial use, advertising spend, media coverage, and customer declarations.</td></tr>
                        <tr><td>Ignoring the cited prior mark in Section 11 objections</td><td>Examiner finds no differentiation; objection sustained</td><td>Research the cited mark thoroughly. Check if active, expired, or abandoned. Prepare detailed visual, phonetic, conceptual differentiation or seek consent letter.</td></tr>

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
            <h2 class="section-title">Trademark Objection Reply - Government Fees and Professional Charges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee for Objection Reply (Counter Statement)</td><td>NIL - No government fee for filing the counter statement</td></tr>
                        <tr><td>Form TM-M Government Fee (Individual/Startup)</td><td>Rs 900 per amendment</td></tr>
                        <tr><td>Form TM-M Government Fee (Other Entities)</td><td>Rs 1,800 per amendment</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 3,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Notice Reply consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20replying%20to%20trademark%20examination%20report%20objection.%20Please%20guide%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for Trademark Objection Reply Process</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Examination Report Analysis (Patron Accounting)</td><td>1 to 2 working days</td></tr>
                        <tr><td>Reply Drafting and Evidence Compilation</td><td>3 to 5 working days</td></tr>
                        <tr><td>Filing on IP India Portal</td><td>Same day after client approval</td></tr>
                        <tr><td>Trademark Registry Status Update</td><td>30 to 60 days after reply</td></tr>
                        <tr><td>Show-Cause Hearing Notice (if required)</td><td>2 to 4 months after reply</td></tr>
                        <tr><td>Total (Engagement to Acceptance, if no hearing)</td><td>5 to 10 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> The 30-day reply deadline from receipt of the Examination Report is strict under Rule 33(4). An extension of 30 additional days may be requested. Non-reply results in the application being treated as abandoned for want of prosecution.</p>

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
            <h2 class="section-title">5 Benefits of Filing a Strong Trademark Objection Reply</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <h3 class="feature-title">Overcome Objection Without Hearing</h3>
                <p class="feature-text">A well-drafted reply with strong evidence can lead to direct acceptance without the need for a show-cause hearing - saving time, cost, and uncertainty.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
                <h3 class="feature-title">Preserve Filing Date and Priority</h3>
                <p class="feature-text">Filing a timely reply keeps your application alive and preserves the original filing date, which establishes priority over later-filed similar marks.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3 class="feature-title">Protect Filing Fee Investment</h3>
                <p class="feature-text">The government fee (Rs 4,500 or Rs 9,000 per class) is non-refundable if the application is abandoned. A strong reply protects this investment.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
                <h3 class="feature-title">Build Strong Prosecution Record</h3>
                <p class="feature-text">A well-argued reply creates a legal record that strengthens the mark's position even after registration - useful in future enforcement and brand valuation.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Avoid Re-Filing and Brand Vulnerability</h3>
                <p class="feature-text">Abandonment means restarting the process with a new application, new fees, and a new (later) priority date. During this gap, competitors can file similar marks.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p>
                <p><strong>4-Office Presence:</strong> Offices in Pune, Mumbai, Delhi, and Gurugram for in-person and remote trademark support across India.</p>
                <p>Patron Accounting's IP team provides dedicated trademark prosecution support - from application filing through objection reply, hearing representation, and registration. Our team of CAs and trademark professionals ensures every counter statement is comprehensive, deadline-compliant, and evidence-backed.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Objection vs Trademark Opposition vs Formality Check Fail</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Trademark Objection</th><th>Trademark Opposition</th><th>Formality Check Fail</th></tr></thead>
                    <tbody>
                        <tr><td>Stage</td><td>Examination (after formality pass)</td><td>Post-publication (after acceptance)</td><td>Pre-examination (before examination)</td></tr>
                        <tr><td>Raised By</td><td>Trademark Examiner</td><td>Third party (existing TM holder)</td><td>Trademark Registry (administrative)</td></tr>
                        <tr><td>Grounds</td><td>Section 9 (absolute) and Section 11 (relative)</td><td>Section 9, 11 + Section 21 (prior use, bad faith)</td><td>Wrong class, missing POA, incomplete documents</td></tr>
                        <tr><td>Reply Mechanism</td><td>Counter Statement on IP India portal</td><td>Counter Statement (Form TM-O) to opposition</td><td>MIS-F reply on IP India portal + TM-M</td></tr>
                        <tr><td>Deadline</td><td>30 days (extendable by 30)</td><td>2 months from opposition notice</td><td>30 days (no extension)</td></tr>
                        <tr><td>Nature</td><td>Substantive legal objection</td><td>Third-party challenge to registration</td><td>Administrative/procedural deficiency</td></tr>
                        <tr><td>Next Stage if Resolved</td><td>Accepted / Published in Journal</td><td>Registration granted</td><td>Formalities Chk Pass / Marked for Exam</td></tr>
                        <tr><td>Professional Help</td><td>Highly recommended (legal arguments)</td><td>Essential (adversarial proceeding)</td><td>Recommended (simpler corrections)</td></tr>

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
            <h2 class="section-title">Related Trademark Services by Patron Accounting</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Complete trademark filing from search to registration certificate</li>
                    <li><a href="/trademark-formality-check-fail">Trademark Formality Check Fail</a> - Reply to procedural deficiencies before examination stage</li>
                    <li><a href="/trademark-hearing">Trademark Hearing</a> - Representation at show-cause hearing before the Registrar</li>
                    <li><a href="/trademark-opposition">Trademark Opposition</a> - Filing or defending trademark opposition proceedings</li>
                    <li><a href="/trademark-search-report">Trademark Search Report</a> - Comprehensive trademark availability search before filing</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Trademark Notice Reply</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Trade Marks Act, 1999</a>; Trade Marks Rules, 2017</p>
                <p><strong>Key Sections:</strong></p>
                <ul>
                    <li><strong>Section 9(1)(a):</strong> Marks devoid of distinctive character</li>
                    <li><strong>Section 9(1)(b):</strong> Marks consisting exclusively of indications designating kind, quality, quantity, intended purpose, value, geographical origin, or time of production</li>
                    <li><strong>Section 9(1)(c):</strong> Marks consisting exclusively of marks which have become customary in current language or bona fide trade practices</li>
                    <li><strong>Section 9(2)(a):</strong> Marks likely to deceive or cause confusion</li>
                    <li><strong>Section 11(1):</strong> Mark identical/similar to earlier mark for same/similar goods - likelihood of confusion</li>
                    <li><strong>Section 11(2):</strong> Mark identical/similar to earlier mark for different goods - if earlier mark has reputation</li>
                    <li><strong>Section 12:</strong> Defence - honest concurrent use despite Section 11 conflict</li>
                    <li><strong>Section 13:</strong> Chemical elements and International Non-Proprietary Names (INN)</li>
                    <li><strong>Rule 33(4), TM Rules 2017:</strong> Applicant has 1 month from receipt of Examination Report to submit reply or request hearing</li>
                </ul>
                <p><strong>Key Case Law:</strong></p>
                <ul>
                    <li><strong>Cadila Healthcare Ltd v Cadila Pharmaceuticals Ltd (Supreme Court):</strong> Guidelines for deceptive similarity; likelihood of confusion test</li>
                    <li><strong>Keystone Knitting Mills:</strong> Acquired distinctiveness/secondary meaning</li>
                </ul>
                <p><strong>Regulatory Authority:</strong> Controller General of Patents, Designs and Trade Marks; Trademark Registry offices: Mumbai, Delhi, Kolkata, Chennai, Ahmedabad. Portal: <a href="https://ipindia.gov.in" target="_blank" rel="noopener">https://ipindia.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions About Trademark Objection Reply</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about trademark objection notices, reply process, Section 9 vs Section 11 grounds, and deadlines.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'About Trademark Objection Reply'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is trademark objection reply?</h3>
                        <div class="faq-expanded__a"><p>A trademark objection reply (also called a counter statement or examination report response) is a legal document filed by the applicant in response to the Examination Report issued by the Trademark Examiner. The Examiner raises objections under Section 9 (absolute grounds - mark is not distinctive or is descriptive) or Section 11 (relative grounds - mark is similar to an existing mark). The reply argues why the mark should be registered despite the objections, supported by evidence and case law.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the deadline for trademark objection reply?</h3>
                        <div class="faq-expanded__a"><p>Under Rule 33(4) of the Trade Marks Rules, 2017, the applicant has 30 days (1 month) from the date of receipt of the Examination Report to file a reply. An extension of 30 additional days may be requested. If no reply is filed within this period, the application is treated as abandoned.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Trademark objection ka reply kaise kare?</h3>
                        <div class="faq-expanded__a"><p>Sabse pehle ipindia.gov.in par apna application number search karo aur Examination Report download karo. Report mein dekho ki objection Section 9 ke tahat hai ya Section 11 ke tahat. Section 9 mein mark ko distinctive ya acquired distinctiveness prove karna hota hai - invoices, ads, sales data ke saath affidavit file karo. Section 11 mein cited mark se apne mark ko visually, phonetically, aur conceptually alag dikhao. Reply draft karo point-by-point, documents attach karo, aur IP India portal par upload karo 30 din ke andar. Patron Accounting expert reply draft karta hai - <a href="tel:+919459456700">+91 945 945 6700</a>.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if I don't reply to trademark objection?</h3>
                        <div class="faq-expanded__a"><p>If no reply is filed within 30 days (or 60 days with extension), the trademark application is treated as abandoned for want of prosecution. The government fee is forfeited, the filing date priority is lost, and the applicant must file a fresh application with new fees if they wish to register the mark. During the gap, competitors may file similar marks.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between trademark objection and trademark opposition?</h3>
                        <div class="faq-expanded__a"><p>Trademark objection is raised by the Trademark Examiner during the examination stage, before the mark is published. It is based on Section 9 (absolute grounds) and Section 11 (relative grounds). Trademark opposition is raised by a third party (typically an existing trademark owner) after the mark is published in the Trademark Journal. Opposition is filed via Form TM-O within 4 months of publication. Objection is between the applicant and the Registry; opposition is between the applicant and a third party.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the fee for trademark objection reply?</h3>
                        <div class="faq-expanded__a"><p>There is no government fee for filing the counter statement (objection reply) on the IP India portal. If Form TM-M (amendment) is required alongside the reply, the government fee is Rs 900 (individual/startup) or Rs 1,800 (other entities). Patron Accounting's professional fee for drafting and filing the reply starts from INR 3,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Trademark objection aur trademark opposition mein kya fark hai?</h3>
                        <div class="faq-expanded__a"><p>Trademark objection Examiner raise karta hai examination stage par - Section 9 ya 11 ke grounds par. Reply applicant file karta hai 30 din mein. Trademark opposition koi teesra party (existing trademark owner) raise karta hai mark ke Trademark Journal mein publish hone ke baad. Opposition Form TM-O se 4 mahine mein file hoti hai. Dono ke liye Patron Accounting madad karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a trademark objection be overcome?</h3>
                        <div class="faq-expanded__a"><p>Yes. Most trademark objections can be overcome with a well-drafted reply supported by evidence. For Section 9 objections, proving acquired distinctiveness through 2-3 years of commercial use with evidence (invoices, advertising, sales data) is the primary strategy. For Section 11 objections, demonstrating visual, phonetic, and conceptual differences from the cited mark, or obtaining a consent letter from the prior mark owner, or invoking Section 12 (honest concurrent use) are effective approaches.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can I file the objection reply myself?</strong> Yes. But given the substantive legal nature of objections (Section 9/11 arguments, case law citations), engaging an IP professional significantly improves the chances of acceptance.</p>
                <p><strong>What if the cited mark under Section 11 is expired or abandoned?</strong> If the cited prior mark is expired, cancelled, or abandoned, point this out in the reply with documentary proof from the IP India database. An expired mark cannot block your registration.</p>
                <p><strong>Can I request a hearing instead of filing a written reply?</strong> Yes. Under Rule 33(4), you can request a hearing instead of or in addition to filing a written reply. However, filing a strong written reply first is recommended.</p>
                <p><strong>What happens after a successful objection reply?</strong> The status changes to 'Accepted' or 'Advertised Before Acceptance' (ABA). The mark is then published in the Trademark Journal for 4 months, during which third parties can file opposition.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Reply to Your Trademark Objection Before the 30-Day Deadline</h2>
            <div class="content-text">
                
                <p>Nearly 30-40% of trademark applications in India receive objections. A well-drafted reply can overcome the objection and move your application towards registration. But the 30-day deadline is strict - non-reply means abandonment.</p>
                <p><strong>Get your objection reply drafted by IP experts.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20replying%20to%20trademark%20examination%20report%20objection.%20Please%20guide%20me." target="_blank">WhatsApp us</a> for an immediate assessment. No-obligation consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Expert Trademark Objection Reply Services - Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Trademark Notice Reply (Trademark Objection Reply) is one of the most critical stages in securing trademark registration in India. An Examination Report citing Section 9 or Section 11 objections is not a rejection - it is an invitation to justify the registrability of your mark. A well-drafted counter statement, supported by evidence of use, distinctiveness arguments, case law citations, and mark differentiation analysis, can overcome most objections.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's IP team provides end-to-end trademark objection reply services, covering examination report analysis, Section 9 and Section 11 reply strategy, evidence compilation, counter statement drafting, IP India portal filing, Form TM-M amendment, and show-cause hearing preparation. With 15+ years of practice, offices in Pune, Mumbai, Delhi, and Gurugram, and 10,000+ businesses served, we deliver reliable trademark prosecution support.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20replying%20to%20trademark%20examination%20report%20objection.%20Please%20guide%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trademark%20Notice%20Reply%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Trademark%20Notice%20Reply%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trademark Notice Reply Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get expert trademark objection reply assistance in your city. Patron Accounting serves clients across 4 major Indian cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
<div class="pa-block-title">City-Wise Services</div>
<div class="pa-block-sub">Trademark objection reply services in major cities</div>
<div class="pa-city-grid">
<a href="/trademark-notice-reply/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/trademark-notice-reply/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/trademark-notice-reply/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block">
<div class="pa-block-title">Related Services</div>
<div class="pa-block-sub">End-to-end trademark support from Patron Accounting</div>
<div class="pa-cross-grid">
<a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-formality-check-fail" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Formality Check Fail</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-hearing" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Hearing</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-opposition" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Opposition</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-search-report" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Search Report</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-renewal" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Renewal</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed on a 9-monthly cycle (Tier 3 freshness). Review triggers include: Trade Marks Act amendment, TM Rules revision, new case law on Section 9/11, IP India portal update, NICE Classification update, Trademark Registry procedural circular.</p>
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

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneVal = phoneInput.value.trim();
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
