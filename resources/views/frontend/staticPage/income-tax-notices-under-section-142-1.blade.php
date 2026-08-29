

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
    <title>Income Tax Notice u/s 142(1) - Inquiry, Reply & Documents</title>
    <meta name="description" content="Received IT Notice under Section 142(1)? Our CAs reply within deadline, submit documents via e-Proceedings, and prevent best judgement assessment. Starting at INR 2,999.">
    <link rel="canonical" href="/income-tax-notices-under-section-142-1">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Notice u/s 142(1) - Inquiry, Reply & Documents">
    <meta property="og:description" content="Received IT Notice under Section 142(1)? Our CAs reply within deadline, submit documents via e-Proceedings, and prevent best judgement assessment. Starting at INR 2,999.">
    <meta property="og:url" content="/income-tax-notices-under-section-142-1">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Notice u/s 142(1) - Inquiry, Reply & Documents">
    <meta name="twitter:description" content="Received IT Notice under Section 142(1)? Our CAs reply within deadline, submit documents via e-Proceedings, and prevent best judgement assessment. Starting at INR 2,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "IT Notice u/s 142(1): CA Reply",
          "description": "Received IT Notice under Section 142(1)? Our CAs reply within deadline, submit documents via e-Proceedings, and prevent best judgement assessment. Starting at INR 2,999.",
          "url": "https://www.patronaccounting.com/income-tax-notices-under-section-142-1",
          "serviceType": "IT Notice u/s 142(1): CA Reply",
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
            "url": "https://www.patronaccounting.com/income-tax-notices-under-section-142-1",
            "price": "10000"
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
              "name": "IT Notice u/s 142(1): CA Reply",
              "item": "https://www.patronaccounting.com/income-tax-notices-under-section-142-1"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a notice under Section 142(1) of the Income Tax Act?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 142(1) empowers the AO to issue an inquiry notice before completing assessment. The notice asks the taxpayer to file an overdue return, produce accounts and documents, or furnish written information about income and assets. It must be answered via the Income Tax e-Proceedings portal within the specified deadline."
              }
            },
            {
              "@type": "Question",
              "name": "Is Section 142(1) a scrutiny notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. A 142(1) notice is a pre-assessment inquiry, not a full scrutiny assessment. Scrutiny is initiated under Section 143(2) after return filing. A complete 142(1) response often closes the matter without scrutiny being invoked."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit to reply to a Section 142(1) notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The deadline is specified in the notice - typically 15 days under Faceless Assessment (NeAC) or up to 30 days in non-faceless cases. Extension can be requested in writing before the deadline. Non-compliance attracts INR 10,000 penalty under Section 271(1)(b)."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I do not respond to a Section 142(1) notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Three progressive consequences: penalty of INR 10,000 under Section 271(1)(b) for each failure; Best Judgement Assessment under Section 144 where AO estimates income; and for wilful non-compliance, prosecution under Section 276D with rigorous imprisonment up to 1 year."
              }
            },
            {
              "@type": "Question",
              "name": "How do I respond to a Section 142(1) notice online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Log in to incometax.gov.in, go to Pending Actions, select e-Proceedings, find the notice, choose Partial or Full Response, upload required documents in PDF/Excel format, and submit. Download the acknowledgement after submission. No physical visit required under Faceless Assessment."
              }
            },
            {
              "@type": "Question",
              "name": "Can a Section 142(1) notice be issued after the Assessment Year ends?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 142(1)(i), the AO can issue a return-filing notice even after the relevant Assessment Year ends. However, under Section 142(1)(ii), the AO cannot demand documents older than 3 years."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for non-compliance with Section 142(1)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "INR 10,000 for each failure under Section 271(1)(b). This applies per notice per failure. Wilful non-compliance additionally leads to prosecution under Section 276D - rigorous imprisonment up to 1 year with fine."
              }
            },
            {
              "@type": "Question",
              "name": "142 ka notice kya hota hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yeh Income Tax Vibhag ka ek inquiry notice hota hai jo return na bharne ya returns mein kuch verify karne ke liye bheja jaata hai. 15-30 din mein incometax.gov.in portal par jakar reply karna zaroori hai. Quick Answers What is 142(1) notice? A pre-assessment inquiry notice requiring a taxpayer to file a return, produce documents, or provide written information to the Assessing Officer. Who issues it? The Assessing Officer (AO) or the National e-Assessment Centre (NeAC) under the Faceless Assessment Scheme. How to respond? Only via e-Proceedings on incometax.gov.in; Partial or Full Response with required documents. Penalty? INR 10,000 per failure under Section 271(1)(b); rigorous imprisonment up to 1 year under Section 276D for wilful non-compliance."
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
                        IT Notice under Section 142(1): Expert CA Reply Service
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pre-Assessment Inquiry:</span> Section 142(1) empowers the AO to issue a formal inquiry notice demanding your return, accounts, documents, or written clarifications</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Not a Penalty Order:</span> A 142(1) notice is an official request for information that must be responded to within 15-30 days exclusively via the Income Tax e-Filing portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Serious Consequences:</span> Non-compliance triggers INR 10,000 penalty under Section 271(1)(b), Best Judgement Assessment under Section 144, and prosecution under Section 276D</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>End-to-End CA Service:</span> Notice review, document compilation, e-Proceedings submission, and follow-up from offices in Pune, Mumbai, Delhi, and Bengaluru</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">1,200+ IT notices handled | 4.8/5 rating | 4 offices across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=142(1)%20Notice%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0AI%20need%20help%20with%20a%20Section%20142(1)%20notice.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20a%20Section%20142(1)%20income%20tax%20notice.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Section 142(1) Notice',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'income-tax-notices-under-section-142-1', 'label' => 'Section 142(1) Notice Reply', 'selected' => true, 'disabled' => false],
                            ['value' => 'income-tax-notice', 'label' => 'Income Tax Notice Assistance', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-notices-under-section-143-3', 'label' => 'Section 143(3) Scrutiny', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-notices-under-section-147', 'label' => 'Section 147 Reassessment', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-audit', 'label' => 'Tax Audit Service', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I received a 142(1) notice on a Friday with a 15-day deadline. Patron's CA reviewed my case the same day, compiled all documents, and submitted the response within 5 days. The matter was closed without further inquiry.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">BO</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Business Owner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">My notice was for AIS mismatches across 3 years. The team reconciled everything, prepared a clean written explanation, and handled the entire e-Proceedings process. Professional and reliable.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HN</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">HNI Client</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting filed the extension request on day 1 and used the extra time to compile all my property transaction documents properly. No penalty, no scrutiny escalation.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NR</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">NRI Client</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Delhi NCR (remote)</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Had ignored a previous 142(1) notice and received a Section 144 SCN. Patron team handled the emergency response, submitted all documentation, and prevented the Best Judgement Assessment from going through.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Salaried Professional</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bengaluru</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Join 1,200+ taxpayers who trust Patron Accounting for income tax notice responses.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is 142(1)</a><a href="#who-section" class="toc-btn">Triggers</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why CA</a><a href="#comparison-section" class="toc-btn">DIY vs CA</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 142(1) Notice - What You Need to Know</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Section 142(1) Notice Services at a Glance</strong></p>
                    <p>Section 142(1) is a pre-assessment inquiry notice issued by the Assessing Officer to non-filers or taxpayers whose returns need additional verification. You must respond via the Income Tax e-Filing portal within 15-30 days. Ignoring it invites a INR 10,000 penalty, Best Judgement Assessment, and possible prosecution. Patron Accounting handles the complete reply starting at INR 2,999.</p>
                </div>
                <p>If you have received a notice under Section 142(1) of the Income Tax Act, 1961, the Income Tax Department is conducting an inquiry before completing your assessment. The notice may ask you to file a return you have not yet submitted, or to produce accounts, documents, and written information relevant to your income.</p>
                <p>The notice is issued by the Assessing Officer (AO) or, under the Faceless Assessment Scheme, the National e-Assessment Centre (NeAC). Responding only through the e-Proceedings portal at incometax.gov.in is mandatory. Physical submission is not accepted under the current faceless framework.</p>
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
                <h2 class="section-title">What is Section 142(1) of the Income Tax Act?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Section 142(1) of the Income Tax Act, 1961</strong> empowers the Assessing Officer to issue an inquiry notice before assessment, requiring a taxpayer to furnish a return, produce accounts and documents, or provide written information about income and assets.</p>
<p>The notice can be issued both when a return has been filed (for verification) and when no return has been filed (to compel filing). Under the current Faceless Assessment Scheme, it is issued by the National e-Assessment Centre (NeAC) and must be responded to electronically through the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">e-Proceedings portal</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Section 142(1) Notice:</strong></p>
                    <p><strong>Assessing Officer (AO)</strong> - The Income Tax authority responsible for assessing your tax liability; under Faceless scheme, the NeAC performs this role.</p>
<p><strong>e-Proceedings</strong> - The online portal function at incometax.gov.in through which all 142(1) responses must be submitted.</p>
<p><strong>Best Judgement Assessment</strong> - Assessment under Section 144 where the AO estimates income from available records when a taxpayer fails to respond.</p>
<p><strong>AIS / Form 26AS</strong> - Annual Information Statement and TDS statement - common sources of data mismatch that trigger 142(1) notices.</p>
<p><strong>NeAC</strong> - National e-Assessment Centre - the faceless authority that issues and processes 142(1) notices.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Notice document -->
<rect x="50" y="35" width="65" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<line x1="58" y1="48" x2="107" y2="48" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
<line x1="58" y1="58" x2="100" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="68" x2="95" y2="68" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="78" x2="100" y2="78" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="88" x2="90" y2="88" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="98" x2="95" y2="98" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
<!-- Section 142(1) badge -->
<rect x="120" y="45" width="40" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="140" y="59" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">142(1)</text>
<!-- INQUIRY badge -->
<rect x="120" y="75" width="40" height="22" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
<text x="140" y="89" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INQUIRY</text>
<!-- e-Proceedings badge -->
<rect x="55" y="118" width="55" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="82" y="130" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">e-PROCEEDINGS</text>
<!-- Verified -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Section 142(1) Notice</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 142(1)</span>
                        <strong>Inquiry Notice</strong>
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
            <h2 class="section-title">When Is Section 142(1) Notice Issued? Reasons and Triggers</h2>
            <div class="content-text">
                
                <p>The Assessing Officer issues a 142(1) notice in three distinct situations:</p>
<ul>
<li><strong>Non-filing of ITR:</strong> If you have not filed your Income Tax Return under Section 139(1), the AO can direct you to file within specified time - even after the Assessment Year ends</li>
<li><strong>Post-filing verification:</strong> If you filed your ITR and the AO requires specific accounts, documents, or records to verify your disclosures</li>
<li><strong>Written information and clarifications:</strong> If the AO needs written notes, workings, or statements including a full statement of assets and liabilities</li>
</ul>
<p><strong>Common triggers in 2025-26:</strong> AIS/Form 26AS mismatch, high-value transactions not reconciled with declared income, random scrutiny selection, tax audit requirement, or discrepancies identified during Section 143(1) processing.</p>
<p><strong>Important:</strong> The AO cannot demand documents older than 3 years under Section 142(1)(ii).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Section 142(1) Reply Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Notice Review and Analysis</td><td>Detailed review of the 142(1) notice to identify exactly what the AO has asked for, applicable deadline, and risk level</td></tr>
<tr><td>Document Compilation and Organisation</td><td>Gathering and indexing all required documents: bank statements, ITR, Form 26AS, AIS, investment proofs, and business records</td></tr>
<tr><td>Response Drafting</td><td>Structured, point-by-point reply with covering letter, numbered responses, and exhibit index</td></tr>
<tr><td>e-Proceedings Submission</td><td>Filing the complete response on incometax.gov.in via e-Proceedings with digital acknowledgement retrieval</td></tr>
<tr><td>Follow-up and Escalation Support</td><td>Tracking post-submission; managing Show Cause Notice or Section 144 proceedings if they follow</td></tr>
<tr><td>Extension Application</td><td>Filing formal request for additional time if the given deadline is insufficient to compile voluminous records</td></tr>

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
            <h2 class="section-title">8-Step Process to Respond to Section 142(1) Notice</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">All responses must be submitted electronically via the Faceless Assessment Scheme. Penalty for non-compliance: INR 10,000 per failure under Section 271(1)(b). Prosecution under Section 276D: rigorous imprisonment up to 1 year.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Read the Notice Carefully</h3><p class="step-description">Identify whether it asks you to (a) file an overdue return, (b) produce accounts and documents, or (c) furnish written information. Each requires a different response strategy.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notice analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Demand identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="60" height="35" rx="4" fill="#FFF" stroke="#F5A623" stroke-width="1"/><line x1="38" y1="35" x2="82" y2="35" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="38" y1="45" x2="75" y2="45" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Notice Read</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Note the Deadline and Request Extension</h3><p class="step-description">The notice specifies a response date, typically 15 days for NeAC-issued notices. If you cannot compile documents in time, file a written extension request to the AO immediately.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deadline tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Extension filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="9" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">15</text><text x="60" y="50" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DAYS</text></svg></div><span class="illustration-label">Deadline Set</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Conduct Pre-Assessment Review</h3><p class="step-description">A CA reviews the specific points raised to identify gaps, mismatches, or potential exposures, and decides whether a revised return under Section 139(5) is appropriate.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Gaps identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Strategy set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M35 42l10-15 15 20 15-10 10 15" stroke="#F5A623" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/><circle cx="85" cy="52" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M81 52l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Reviewed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Compile and Index All Documents</h3><p class="step-description">Gather every document demanded: P&L, balance sheets, bank statements, investment certificates, TDS certificates, sale deeds. Create a paginated index linking each AO query to the relevant exhibit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Index prepared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="85" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="43" x2="80" y2="43" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="51" x2="85" y2="51" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="59" x2="75" y2="59" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="67" x2="80" y2="67" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Indexed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Log in to incometax.gov.in</h3><p class="step-description">Use your PAN and password to access your registered e-Filing account. Navigate to: Pending Actions - e-Proceedings - Response to Notice u/s 142(1).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notice located</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LOGIN</text><text x="60" y="50" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text></svg></div><span class="illustration-label">Logged In</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Choose Partial or Full Response</h3><p class="step-description">If all documents are ready, submit a Full Response. If some are still being gathered, submit a Partial Response immediately as proof of compliance, then file remaining as addendum.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Response type selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance proven</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="40" height="50" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="35" y="42" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PARTIAL</text><rect x="65" y="15" width="40" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="85" y="42" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">FULL</text></svg></div><span class="illustration-label">Mode Selected</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Upload Documents and Submit</h3><p class="step-description">Upload each document in PDF or specified format. Ensure all uploads align with ITR information. Submit and download the acknowledgement reference number.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ACK downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SUBMITTED</text></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">File Revised Return if Required</h3><p class="step-description">If the notice exposed errors in your original ITR, file a revised return under Section 139(5) before the assessment is completed. Only possible if original was filed within due date.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Errors assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Revised if needed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="25" height="35" rx="3" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/><text x="42" y="45" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">OLD</text><path d="M60 42l10 0" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><path d="M67 38l5 4-5 4" stroke="#F5A623" stroke-width="2" fill="none" stroke-linecap="round"/><rect x="75" y="25" width="25" height="35" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="87" y="45" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">NEW</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required to Respond to Section 142(1)</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Where to Obtain</th></tr></thead><tbody>
<tr><td>Income Tax Return (ITR) filed</td><td>Primary tax disclosure document</td><td>e-Filing portal / CA</td></tr>
<tr><td>Form 26AS / AIS</td><td>TDS, advance tax, high-value transaction data</td><td>incometax.gov.in</td></tr>
<tr><td>Bank statements (all accounts)</td><td>Income verification, source of funds</td><td>Net banking / bank branch</td></tr>
<tr><td>Investment proofs (80C, 80D, etc.)</td><td>Validate tax-saving claims</td><td>Insurer / mutual fund / employer</td></tr>
<tr><td>Capital gains statement</td><td>Verify gains from shares, property, MF</td><td>Broker / registrar / sale deed</td></tr>
<tr><td>Business P&L and Balance Sheet</td><td>Income from business/profession verification</td><td>Accountant / CA</td></tr>
<tr><td>Statement of assets and liabilities</td><td>Full financial position disclosure</td><td>Prepared by CA</td></tr>
<tr><td>Sale deeds or property documents</td><td>Verify capital gains or high-value transactions</td><td>Sub-registrar office</td></tr>
<tr><td>Salary slips and Form 16</td><td>Verify salaried income</td><td>Employer</td></tr>
<tr><td>TDS certificates (Form 16A, 16B, 16C)</td><td>Third-party income deductions</td><td>Deductor / TRACES portal</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Challenges in Responding to Section 142(1)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Tight deadline with voluminous records</td><td>15 days insufficient for years of financial records</td><td>Patron Accounting immediately files extension request while simultaneously beginning document collection - ensuring you are never in default</td></tr>
<tr><td>AIS or Form 26AS mismatch</td><td>ITR vs AIS data on high-value transactions</td><td>Our CAs reconcile line by line, prepare written explanation for each variance, and where necessary, file a revised return to close the gap</td></tr>
<tr><td>Notice for undisclosed or inherited assets</td><td>High-value property purchases or large bank deposits</td><td>Detailed source-of-funds narratives with documentary evidence - gift deeds, inheritance records, loan agreements - submitted as structured exhibits</td></tr>
<tr><td>Risk of Best Judgement Assessment</td><td>Previous notice received no response; Section 144 SCN issued</td><td>Emergency response with full documentation; appeal before CIT(A) against adverse assessment orders where needed</td></tr>

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
            <h2 class="section-title">Section 142(1) Notice Reply Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Reply (Individual - straightforward)</td><td>INR 2,999</td></tr>
<tr><td>Standard Reply (Salaried / HNI - AIS reconciliation)</td><td>INR 4,999</td></tr>
<tr><td>Business / Complex Reply (multi-year, P&L-linked)</td><td>INR 7,999 onwards</td></tr>
<tr><td>Emergency Response (deadline within 48-72 hours)</td><td>INR 9,999 onwards</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Section 142(1) Notice consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20responding%20to%20Section%20142(1)%20notice." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does It Take to Respond?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Notice review and assessment</td><td>1 business day</td></tr>
<tr><td>Document compilation (all records available)</td><td>2-3 business days</td></tr>
<tr><td>Document compilation (some records to be gathered)</td><td>4-7 business days</td></tr>
<tr><td>Response drafting (simple notice)</td><td>1 business day</td></tr>
<tr><td>Response drafting (complex / multi-issue)</td><td>2-3 business days</td></tr>
<tr><td>e-Proceedings submission</td><td>Same day after approval</td></tr>
<tr><td>Total - Standard case</td><td>3-5 business days end-to-end</td></tr>
<tr><td>Total - Complex case</td><td>7-10 business days end-to-end</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Emergency priority:</strong> Cases where the deadline is within 48 hours get immediate attention. Contact us on the same day you receive the notice to avoid last-minute risk.</p>

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
            <h2 class="section-title">Why Professional CA Help for Section 142(1) Matters</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3 class="feature-title">Accuracy and Completeness</h3><p class="feature-text">Every document demanded is included, properly indexed, and reconciled with your ITR - reducing risk of follow-up notices.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Avoiding Escalation</h3><p class="feature-text">An incomplete response can trigger Section 143(2) scrutiny. A professionally prepared reply closes the matter at the 142(1) stage.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg></div><h3 class="feature-title">Penalty Prevention</h3><p class="feature-text">Non-compliance costs INR 10,000 under Section 271(1)(b). Professional handling ensures you meet the deadline and avoid this fixed penalty.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Strategic Response</h3><p class="feature-text">Our CAs assess risk level, identify whether a revised return is advisable, and calibrate the response to avoid unnecessary disclosure.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div><h3 class="feature-title">Prosecution Protection</h3><p class="feature-text">Wilful non-compliance can lead to prosecution under Section 276D. A timely, professionally filed response eliminates this risk entirely.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pan-India Coverage</h3><p class="feature-text">Offices in Pune, Mumbai, Delhi NCR, and Bengaluru. Faceless e-Proceedings capability for remote service across India.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Clients Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>1,200+ IT Notices Handled | 4.8/5 Client Rating | 300+ Verified Google Reviews | 48-Hour Response Guarantee | 4 Offices: Pune, Mumbai, Delhi NCR, Bengaluru</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Response vs Professional CA Reply</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>Patron Accounting CA Reply</th><th>DIY (Self-Response)</th></tr></thead>
                    <tbody>
                        <tr><td>Notice Interpretation</td><td>Expert review - every demand identified correctly</td><td>Risk of misreading what AO actually wants</td></tr>
<tr><td>Document Completeness</td><td>Structured index - every document cross-checked</td><td>Common to miss required exhibits</td></tr>
<tr><td>e-Proceedings Navigation</td><td>CAs handle portal submission with correct format</td><td>Confusing portal; errors in upload format</td></tr>
<tr><td>AIS Reconciliation</td><td>Line-by-line reconciliation included</td><td>Difficult without tax expertise</td></tr>
<tr><td>Revised Return Decision</td><td>CA evaluates and advises proactively</td><td>Often missed opportunity</td></tr>
<tr><td>Escalation Risk</td><td>Minimised - response crafted to close at 142(1) stage</td><td>High - incomplete replies invite Section 143(2)</td></tr>
<tr><td>Time Required</td><td>2-5 days with CA; client effort minimal</td><td>15-20 hours self-preparation</td></tr>
<tr><td>Cost</td><td>INR 2,999 - INR 9,999 depending on complexity</td><td>Zero professional fee</td></tr>

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
            <h2 class="section-title">Related Tax Notice and Assessment Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/income-tax-notice">Income Tax Notice - General Assistance</a></li>
<li><a href="/income-tax-notices-under-section-143-3">IT Notice under Section 143(3) - Scrutiny Assessment</a></li>
<li><a href="/income-tax-notices-under-section-147">IT Notice under Section 147 - Reopening of Assessment</a></li>
<li><a href="/income-tax-notices-under-section-148">IT Notice under Section 148 - Income Escaping Assessment</a></li>
<li><a href="/income-tax-demand-under-section-156">Income Tax Demand under Section 156</a></li>
<li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a></li>
<li><a href="/tax-audit">Tax Audit Service</a></li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Section 142 of the Income Tax Act, 1961</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead><tbody>
<tr><td>Section 142(1)(i)</td><td>Power to direct filing of a return if not filed within time under Section 139(1); notice can be issued even after Assessment Year end.</td></tr>
<tr><td>Section 142(1)(ii)</td><td>Power to require production of accounts and documents for assessment; lookback limit of 3 years.</td></tr>
<tr><td>Section 142(1)(iii)</td><td>Power to require written information, notes, or workings - including a full statement of assets and liabilities.</td></tr>
<tr><td>Section 144</td><td>Best Judgement Assessment - AO estimates income from available data if taxpayer fails to comply with 142(1) notice.</td></tr>
<tr><td>Section 271(1)(b)</td><td>Penalty of INR 10,000 for each failure to comply with a notice under Section 142(1) or 143(2).</td></tr>
<tr><td>Section 276D</td><td>Prosecution for wilful failure: rigorous imprisonment up to 1 year and fine.</td></tr>
<tr><td>Section 273B</td><td>Reasonable cause defence - no penalty if taxpayer proves failure was due to reasonable cause.</td></tr>
<tr><td>Faceless Assessment Scheme, 2019</td><td>All 142(1) notices issued by NeAC; response via e-Proceedings; no physical interaction required.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Link:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-filing portal</a> - for e-Proceedings responses.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Section 142(1) Notice</h2>
                    <p class="faq-expanded__lead">Get answers about Section 142(1) inquiry notices, response process, deadlines, penalties, and the e-Proceedings portal.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Section 142(1) Notice'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a notice under Section 142(1) of the Income Tax Act?</h3>
                        <div class="faq-expanded__a"><p>Section 142(1) empowers the AO to issue an inquiry notice before completing assessment. The notice asks the taxpayer to file an overdue return, produce accounts and documents, or furnish written information about income and assets. It must be answered via the Income Tax e-Proceedings portal within the specified deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is Section 142(1) a scrutiny notice?</h3>
                        <div class="faq-expanded__a"><p>No. A 142(1) notice is a pre-assessment inquiry, not a full scrutiny assessment. Scrutiny is initiated under Section 143(2) after return filing. A complete 142(1) response often closes the matter without scrutiny being invoked.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the time limit to reply to a Section 142(1) notice?</h3>
                        <div class="faq-expanded__a"><p>The deadline is specified in the notice - typically 15 days under Faceless Assessment (NeAC) or up to 30 days in non-faceless cases. Extension can be requested in writing before the deadline. Non-compliance attracts INR 10,000 penalty under Section 271(1)(b).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if I do not respond to a Section 142(1) notice?</h3>
                        <div class="faq-expanded__a"><p>Three progressive consequences: penalty of INR 10,000 under Section 271(1)(b) for each failure; Best Judgement Assessment under Section 144 where AO estimates income; and for wilful non-compliance, prosecution under Section 276D with rigorous imprisonment up to 1 year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How do I respond to a Section 142(1) notice online?</h3>
                        <div class="faq-expanded__a"><p>Log in to incometax.gov.in, go to Pending Actions, select e-Proceedings, find the notice, choose Partial or Full Response, upload required documents in PDF/Excel format, and submit. Download the acknowledgement after submission. No physical visit required under Faceless Assessment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a Section 142(1) notice be issued after the Assessment Year ends?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 142(1)(i), the AO can issue a return-filing notice even after the relevant Assessment Year ends. However, under Section 142(1)(ii), the AO cannot demand documents older than 3 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the penalty for non-compliance with Section 142(1)?</h3>
                        <div class="faq-expanded__a"><p>INR 10,000 for each failure under Section 271(1)(b). This applies per notice per failure. Wilful non-compliance additionally leads to prosecution under Section 276D - rigorous imprisonment up to 1 year with fine.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">142 ka notice kya hota hai?</h3>
                        <div class="faq-expanded__a"><p>Yeh Income Tax Vibhag ka ek inquiry notice hota hai jo return na bharne ya returns mein kuch verify karne ke liye bheja jaata hai. 15-30 din mein incometax.gov.in portal par jakar reply karna zaroori hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is 142(1) notice?</strong> A pre-assessment inquiry notice requiring a taxpayer to file a return, produce documents, or provide written information to the Assessing Officer.</p>
<p><strong>Who issues it?</strong> The Assessing Officer (AO) or the National e-Assessment Centre (NeAC) under the Faceless Assessment Scheme.</p>
<p><strong>How to respond?</strong> Only via e-Proceedings on incometax.gov.in; Partial or Full Response with required documents.</p>
<p><strong>Penalty?</strong> INR 10,000 per failure under Section 271(1)(b); rigorous imprisonment up to 1 year under Section 276D for wilful non-compliance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Act Within the Deadline - Consequences of Delay Are Severe</h2>
            <div class="content-text">
                
                <p><strong>Deadline:</strong> As specified in the notice - typically 15 days (NeAC) to 30 days. No automatic extension is granted.</p>
<ul>
<li><strong>Day 1:</strong> Begin document compilation immediately; contact Patron Accounting for expert review</li>
<li><strong>Before deadline:</strong> File extension request in writing if documents cannot be gathered in time; submit Partial Response as proof of compliance</li>
<li><strong>Missed deadline:</strong> INR 10,000 penalty under Section 271(1)(b); Show Cause Notice for Best Judgement Assessment under Section 144</li>
<li><strong>Continued non-compliance:</strong> Prosecution under Section 276D; rigorous imprisonment up to 1 year</li>
</ul>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20142(1)%20notice%20and%20need%20help." target="_blank">WhatsApp us</a> on the same day you receive the notice.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert CA Reply to Your 142(1) Notice - Starting at INR 2,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">A notice under Section 142(1) is a formal inquiry that demands timely, complete, and accurate compliance. Whether you have not filed your return or the department needs additional verification, the response must be submitted via the e-Proceedings portal within the specified deadline.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">With organised documentation and a professionally drafted response, most 142(1) matters are resolved without escalation to scrutiny proceedings. Patron Accounting's CA team handles every step - notice review, document compilation, response drafting, portal submission, and post-filing follow-up.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20responding%20to%20Section%20142(1)%20notice." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Help%20with%20Section%20142(1)%20Notice&body=Hello%20Patron%20Accounting%2C%0A%0AI%20received%20a%20Section%20142(1)%20notice.%20Please%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Section 142(1) Notice Reply Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get expert CA reply to your 142(1) notice from Patron Accounting offices across India.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Section 142(1) Notice Reply by City</div><div class="pa-block-sub">Expert CA reply from Patron Accounting</div><div class="pa-city-grid">
<a href="/income-tax-notices-under-section-142-1/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/income-tax-notices-under-section-142-1/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/income-tax-notices-under-section-142-1/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/income-tax-notices-under-section-142-1/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Income Tax Services</div><div class="pa-block-sub">Comprehensive notice and assessment services</div><div class="pa-cross-grid">
<a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice Hub</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-notices-under-section-143-3" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 143(3) Scrutiny</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-notices-under-section-147" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 147 Reassessment</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-notices-under-section-148" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 148 Notice</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-demand-under-section-156" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 156 Demand</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR Filing</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: Faceless Assessment Scheme updates, IT Act amendments to Section 142 or penalty provisions, or portal UI changes. Freshness Tier 2.</p>
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
