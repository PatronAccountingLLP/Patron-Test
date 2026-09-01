
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
    <title>ROC Compliance Filing Services - Annual Return & Forms India</title>
    <meta name="description" content="ROC notice is issued by the Registrar of Companies for non-compliance under Companies Act 2013. Know types, Section 248 strike off, Section 454 penalty and reply process. Starts Rs 4,999.">
    <link rel="canonical" href="/roc-notice">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ROC Compliance Filing Services - Annual Return & Forms India">
    <meta property="og:description" content="ROC notice is issued by the Registrar of Companies for non-compliance under Companies Act 2013. Know types, Section 248 strike off, Section 454 penalty and reply process. Starts Rs 4,999.">
    <meta property="og:url" content="/roc-notice">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ROC Compliance Filing Services - Annual Return & Forms India">
    <meta name="twitter:description" content="ROC notice is issued by the Registrar of Companies for non-compliance under Companies Act 2013. Know types, Section 248 strike off, Section 454 penalty and reply process. Starts Rs 4,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ROC Compliance Filing Services - Annual Return & Forms India",
          "description": "ROC notice is issued by the Registrar of Companies for non-compliance under Companies Act 2013. Know types, Section 248 strike off, Section 454 penalty and reply process. Starts Rs 4,999.",
          "url": "https://www.patronaccounting.com/roc-notice",
          "serviceType": "ROC Compliance Filing Services - Annual Return & Forms India",
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
            "url": "https://www.patronaccounting.com/roc-notice",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "4999",
              "maxPrice": "50000",
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
              "name": "ROC Compliance Filing Services - Annual Return & Forms India",
              "item": "https://www.patronaccounting.com/roc-notice"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a ROC notice and why have I received one?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A ROC notice is an official communication from the Registrar of Companies under the MCA for non-compliance with the Companies Act, 2013. Common reasons: non-filing of AOC-4 or MGT-7 for consecutive years, failure to commence business within one year, non-disclosure of significant beneficial ownership (Section 90), DIN non-compliance, or Secretarial Standards violations. The notice specifies the section, default, and deadline."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I do not reply to a ROC notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Severe consequences. For STK-1 strike off notices, the ROC issues public notice (STK-5) and strikes off the company from the register. For Section 454 penalty notices, an ex-parte penalty order with maximum penalties is passed on the company and each officer. Under Section 454(8), non-payment within 90 days leads to imprisonment up to 6 months or 3x penalty. Directors face disqualification under Section 164/167."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for non-filing of AOC-4 and MGT-7?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "AOC-4: Additional fees of Rs 100/day from due date with no cap - can accumulate to lakhs. Under Section 137, penalty Rs 10,000 on company and up to Rs 1.5 lakh per officer. MGT-7: Rs 100/day on company under Section 92(5), plus Rs 50,000 per officer in default. Non-filing for 2 consecutive years triggers Section 248 strike off proceedings."
              }
            },
            {
              "@type": "Question",
              "name": "What is Section 248 strike off and how to avoid it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 248 empowers ROC to remove a company if: no business for 2 years, or non-filing of AOC-4/MGT-7 for 2 consecutive years. STK-1 notice is issued with 30-day window. To avoid: immediately file all pending returns, reply with evidence of business activity (bank statements, invoices, GST returns), and apply under Companies Compliance Scheme 2026 for 90% fee relief."
              }
            },
            {
              "@type": "Question",
              "name": "What is the Companies Compliance Scheme 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "An MCA amnesty offering 90% relief on additional filing fees for overdue forms (AOC-4, MGT-7, and others). Under the proviso to Section 454(3), filing before notice or within 30 days completely eliminates penalty. The scheme also offers STK-2 (voluntary strike off) at 25% of normal fees and dormant company (MSC-1) applications at 50%. Significant opportunity for companies with years of pending compliance."
              }
            },
            {
              "@type": "Question",
              "name": "Can a struck-off company be restored?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 252 of Companies Act, 2013, any member, creditor, or the company can apply to NCLT for restoration within 20 years of striking off. Must demonstrate the company was carrying on business or that restoration is just and equitable. Upon restoration, the company is deemed to have continued in existence. All pending compliance must be completed."
              }
            },
            {
              "@type": "Question",
              "name": "ROC notice ka jawab kaise dein aur kya documents chahiye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sabse pehle notice mein likha section number aur default identify karein. Agar AOC-4 ya MGT-7 pending hai toh turant MCA portal par file karein - Companies Compliance Scheme 2026 mein 90% chhoot milti hai. 30 din ke andar reply draft karein jismein company ki activity ka proof (bank statement, invoices, GST returns) attach karein. Section 454 notice ke liye e-Adjudication module par reply karein. CA/CS ki madad lein - galat reply se penalty aur strike off dono ho sakte hain. Patron Accounting - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "How to file an appeal against ROC penalty order?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "File appeal to Regional Director in Form ADJ within 60 days of receipt of penalty order, under Section 454(5) and (6). Must include certified copy of the order. The Regional Director may confirm, modify, or set aside the order after hearing. No appeal lies if penalty has not been paid or adequate security not furnished."
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
                        ROC Notice - Types, How to Reply, Penalties and Strike Off Under Companies Act 2013
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>6+ Notice Types:</span> Strike Off (STK-1 under Section 248), Penalty Adjudication (Section 454), Non-filing (AOC-4/MGT-7), DIN Deactivation, INC-22A ACTIVE, and SBO Non-compliance.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>30-Day Window:</span> Most ROC notices allow 30 days to reply. Failure leads to strike off, penalties up to Rs 50,000 per officer, or director disqualification for 5 years.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Compliance Scheme 2026:</span> MCA amnesty: 90% relief on additional filing fees. Filing before or within 30 days of Section 454 notice eliminates penalty entirely.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> ROC notice reply from Rs 4,999. Section 454 penalty reply from Rs 7,999. NCLT restoration from Rs 24,999. Appeal to Regional Director from Rs 14,999.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">300+ ROC notices handled. 95% resolution rate. 4 offices across India. 4.9 Google Rating.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=ROC%20Notice%20Enquiry&body=Hello%2C%0A%0AI%20need%20help%20with%20ROC%20notice%20reply.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20a%20ROC%20Notice.%20Please%20help%20me%20reply." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ROC Notice',
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Received an STK-1 strike off notice for our dormant company. Patron Accounting filed all 3 years of pending AOC-4 and MGT-7 under the Compliance Scheme within 10 days, saving us over Rs 8 lakh in additional fees. The reply was accepted and strike off proceedings were withdrawn.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Pvt Ltd Company, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Had a Section 454 penalty notice for non-filing of MGT-7 for FY 2022-23. Patron Accounting identified we could file within the 30-day window under the proviso and eliminate the penalty entirely. They filed the pending return, submitted the reply on e-Adjudication, and the penalty was dropped.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Patel</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Managing Director, Tech Company, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our company was struck off 3 years ago due to non-filing. Patron Accounting filed the NCLT restoration application under Section 252, prepared all supporting documents, and got the company restored within 4 months. They then filed all pending returns and brought us to full compliance. Exceptional service.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arun Mehra</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Promoter, Struck-Off Company, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Received a disproportionate penalty order of Rs 3.5 lakh for delayed MGT-7 filing. Patron Accounting analysed the computation, identified errors in the default period calculation, and filed an appeal to the Regional Director in Form ADJ. The penalty was reduced by 60% after hearing.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Company Secretary, OPC, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">My DIN was deactivated and I could not file any returns on MCA portal. Patron Accounting first reactivated the DIN by filing DIR-3 KYC with the Rs 5,000 penalty, then filed 4 years of pending AOC-4 and MGT-7 under the Compliance Scheme. Total savings on additional fees: over Rs 12 lakh. Invaluable guidance.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Khanna</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Multiple Companies, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Respond to your ROC notice before the deadline. Strike off reply, penalty adjudication, and compliance scheme application from Rs 4,999.</p>
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
            <a href="#what-section" class="toc-btn">What Is ROC Notice</a>
            <a href="#who-section" class="toc-btn">Who Receives</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Reply</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Professional</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ROC Notice - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ROC Notice Services at a Glance</strong></p>
                    <p>ROC notices are issued for non-compliance under the Companies Act, 2013. Key types: strike off (STK-1 under Section 248) and penalty adjudication (Section 454). Reply within 30 days or face penalties from Rs 10,000 to Rs 50,000 per officer, company strike off, and director disqualification. Companies Compliance Scheme 2026 offers 90% relief on additional fees. CA/CS-assisted response from Rs 4,999.</p>
                </div>
                <p>A ROC notice is an official communication from the Registrar of Companies under the MCA, issued for non-compliance with the Companies Act, 2013. Common triggers include non-filing of AOC-4 and MGT-7 for consecutive years, failure to maintain a registered office, non-disclosure of significant beneficial ownership under Section 90, and DIN non-compliance. The ROC acts as Adjudicating Officer under Section 454 and can impose monetary penalties, initiate strike off proceedings, and refer cases for prosecution.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>What is ROC Notice</td><td>Official communication from Registrar of Companies for non-compliance under Companies Act, 2013</td></tr>
<tr><td>Governing Law</td><td>Companies Act, 2013 - Sections 206, 248, 454; Companies (Adjudication of Penalties) Rules, 2014</td></tr>
<tr><td>Common Triggers</td><td>Non-filing of AOC-4/MGT-7, dormancy strike off, SBO non-disclosure, DIN non-compliance</td></tr>
<tr><td>Reply Window</td><td>30 days from date of notice (21 days for adjudication hearings)</td></tr>
<tr><td>Penalty Range</td><td>Rs 10,000 to Rs 50,000 per officer; Rs 100/day additional fees; up to Rs 10 Cr for deposit violations</td></tr>
<tr><td>Worst Outcome</td><td>Company strike off (Section 248), director disqualification (Section 164/167), bank account attachment</td></tr>
<tr><td>Patron Fee</td><td>Starting Rs 4,999 for ROC notice reply and compliance remediation</td></tr>
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
                <h2 class="section-title">What Is a ROC Notice?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A <strong>ROC notice</strong> is a formal legal communication from the <strong>Registrar of Companies</strong> under the Ministry of Corporate Affairs (MCA), issued to a company and its officers in default for non-compliance with provisions of the <strong>Companies Act, 2013</strong> or rules made thereunder.</p>
<p>The ROC has wide-ranging powers to inspect documents, initiate inquiries, adjudicate penalties, and strike off companies from the register. Consequences of ignoring a ROC notice range from daily additional fees (Rs 100/day for AOC-4/MGT-7) to company strike off, director disqualification, and bank account attachment.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ROC Notice:</strong></p>
                    <p><strong>Section 248 (Strike Off):</strong> ROC can remove company name if no business for 2 years or non-filing of AOC-4 and MGT-7 for 2 consecutive years. STK-1 notice with 30-day reply window.</p>
<p><strong>Section 454 (Penalty Adjudication):</strong> ROC as Adjudicating Officer imposes monetary penalties. Proviso to Section 454(3): no penalty if default rectified before notice or within 30 days.</p>
<p><strong>Form STK-1:</strong> Notice of intent to strike off. Company must reply within 30 days. After STK-5 public notice, company is struck off.</p>
<p><strong>Companies Compliance Scheme 2026:</strong> MCA amnesty - 90% relief on additional filing fees. STK-2 at 25% fees. Dormant company (MSC-1) at 50% fees.</p>
<p><strong>Section 454(8):</strong> Non-payment of penalty within 90 days: imprisonment up to 6 months or penalty up to 3x the original amount.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- ROC Notice -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ROC Notice</text>
                            <!-- Notice document -->
                            <rect x="45" y="48" width="50" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <rect x="50" y="53" width="40" height="3" rx="1" fill="#14365F" opacity="0.3"/>
                            <rect x="50" y="60" width="35" height="3" rx="1" fill="#14365F" opacity="0.2"/>
                            <rect x="50" y="67" width="38" height="3" rx="1" fill="#14365F" opacity="0.2"/>
                            <rect x="50" y="78" width="30" height="8" rx="2" fill="#FF5F56" opacity="0.2"/>
                            <text x="65" y="85" font-size="5" fill="#FF5F56" font-weight="700" text-anchor="middle" font-family="Arial">NOTICE</text>
                            <text x="70" y="98" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">30 Days</text>
                            <!-- Reply card -->
                            <rect x="110" y="48" width="50" height="30" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <text x="135" y="60" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REPLY</text>
                            <text x="135" y="72" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Filed</text>
                            <!-- Scheme badge -->
                            <rect x="110" y="85" width="50" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="135" y="97" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">90% Relief</text>
                            <!-- Labels -->
                            <rect x="35" y="112" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="62" y="122" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 248</text>
                            <rect x="100" y="112" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="130" y="122" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Sec 454</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Companies Act, 2013</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ROC Notice</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Companies Act, 2013</span>
                        <strong>Section 248 | Section 454</strong>
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
            <h2 class="section-title">Who Receives a ROC Notice?</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Non-filing of AOC-4 (Section 137):</strong> Companies failing to file financial statements within 30 days of AGM. Additional fee Rs 100/day with no cap.</li>
<li><strong>Non-filing of MGT-7 (Section 92):</strong> Companies failing to file annual return within 60 days of AGM. Penalty: Rs 100/day on company, Rs 50,000 per officer.</li>
<li><strong>Strike Off for Dormancy (Section 248):</strong> No business for 2 years or non-filing for 2 consecutive years. STK-1 notice issued.</li>
<li><strong>DIN Non-compliance:</strong> Directors failing to file DIR-3 KYC face DIN deactivation and Rs 5,000 penalty.</li>
<li><strong>INC-22A ACTIVE Non-compliance:</strong> Status marked 'ACTIVE non-compliant', restricting further filings.</li>
<li><strong>SBO Non-disclosure (Section 90):</strong> Penalty Rs 50,000 on company and Rs 10 lakh on beneficial owner.</li>
<li><strong>Secretarial Standards Violations (Section 118):</strong> Non-compliance with SS-1 (Board Meetings) and SS-2 (General Meetings).</li>
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
            <h2 class="section-title">6 ROC Notice Response Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ROC Notice Analysis and Strategy</td><td>Review of notice type, section reference, default period, and penalty computation to determine the best response strategy and timeline.</td></tr>
<tr><td>Reply Drafting and Filing</td><td>Legally compliant replies to STK-1, Section 454 show cause notices, and other ROC communications. Filed on MCA portal or e-Adjudication module.</td></tr>
<tr><td>Pending Return Filing</td><td>Filing overdue AOC-4, MGT-7, DIR-3 KYC, DPT-3, MSME-1, and other pending forms to regularise the default before penalty escalation.</td></tr>
<tr><td>Compliance Scheme 2026 Application</td><td>Filing under the Companies Compliance Scheme 2026 for 90% fee relief and penalty waiver where eligible under proviso to Section 454(3).</td></tr>
<tr><td>Appeal to Regional Director</td><td>Appeal against ROC penalty order in Form ADJ within 60 days under Section 454(5). Preparation of submissions and representation.</td></tr>
<tr><td>Company Revival (NCLT Restoration)</td><td>Application to NCLT for restoration of struck-off companies under Section 252 within 20 years. Demonstrate business activity or just cause.</td></tr>

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
            <h2 class="section-title">7-Step ROC Notice Reply Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete ROC notice response - from notice analysis and corrective filings to reply drafting and e-hearing representation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify Notice Type and Section</h3><p class="step-description">Check if it is a strike off notice (STK-1 under Section 248), penalty adjudication (Section 454 show cause), or a compliance notice for specific defaults like AOC-4, MGT-7, DIN, or SBO.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Notice type identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="57" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Section 248 / 454</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Identified</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Note Reply Deadline (30 Days)</h3><p class="step-description">Most ROC notices allow 30 days for response. Adjudication hearings may be scheduled 21 days from notice. STK-1 allows 30 days, after which public notice STK-5 is issued.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deadline noted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Calendar set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">30 Days</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Tracked</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Gather Supporting Documents</h3><p class="step-description">Collect audited financial statements, board resolutions, minutes of meetings, prior filed returns, bank statements, and any correspondence with MCA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents gathered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Evidence compiled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Gathered</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Rectify Default - File Pending Returns</h3><p class="step-description">File pending AOC-4, MGT-7, DIR-3 KYC, or other overdue forms on MCA V3 portal with applicable fees. Under Compliance Scheme 2026, filing before or within 30 days of notice waives the penalty entirely.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Returns filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Default rectified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="28" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="44" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4</text><rect x="63" y="22" width="28" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="77" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7</text><rect x="35" y="45" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="54" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">90% Fee Relief</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Draft Reply with Legal Arguments</h3><p class="step-description">Address each ground of the notice with Act section citations and supporting evidence. For STK-1, explain the company is active. For Section 454, submit reply on e-Adjudication module.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reply drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Arguments cited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><text x="60" y="21" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">REPLY</text><line x1="25" y1="30" x2="90" y2="30" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="25" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="25" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><rect x="30" y="58" width="50" height="10" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.6"/><text x="55" y="66" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">SUBMITTED</text></svg></div><span class="illustration-label">Drafted</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Attend E-Hearing</h3><p class="step-description">Present supporting documents and arguments before the Adjudicating Officer. Failure to appear results in ex-parte penalty orders based on available records - typically maximum penalties.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Hearing attended</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Arguments presented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">E-HEARING</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Represented</text></svg></div><span class="illustration-label">Heard</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Pay Penalty or File Appeal</h3><p class="step-description">If penalty order passed, pay within 90 days and rectify default. If aggrieved, file appeal to Regional Director in Form ADJ within 60 days under Section 454(5). Non-payment within 90 days: imprisonment up to 6 months or 3x penalty.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Order resolved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Appeal filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">RESOLVED</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">or APPEALED</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Done</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ROC Notice Reply</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Copy of the ROC notice</strong> (downloaded from MCA portal or e-Adjudication module)</li>
<li><strong>Company CIN</strong> (Corporate Identification Number) and GSTIN</li>
<li><strong>Audited financial statements</strong> for the default period</li>
<li><strong>Board resolutions</strong> and minutes of board meetings and AGMs</li>
<li><strong>Previously filed AOC-4, MGT-7</strong>, and other annual returns</li>
<li><strong>DIR-3 KYC status</strong> of all directors</li>
<li><strong>Proof of registered office</strong> (utility bills, rent agreement)</li>
<li><strong>Bank statements</strong> showing business activity (for strike off replies)</li>
<li><strong>MCA V3 portal login credentials</strong> (Director DSC required for filing)</li>
<li><strong>Chartered Accountant certificate</strong> for financial statements</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common ROC Notice Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Company Already Struck Off</td><td>Company marked 'Strike Off' or 'Under Process of Striking Off' on MCA portal. No further filings possible</td><td>File NCLT restoration application under Section 252 within 20 years. Demonstrate business was ongoing or just cause for restoration exists.</td></tr>
<tr><td>Multiple Years of Pending Returns</td><td>Cascading additional fees running into lakhs for 3-5 years of AOC-4 and MGT-7 arrears</td><td>Apply under Companies Compliance Scheme 2026 for 90% fee relief. File all returns in chronological order. Rectify within 30 days of Section 454 notice to avoid penalty entirely.</td></tr>
<tr><td>DIN Deactivated</td><td>Director's DIN deactivated due to non-filing of DIR-3 KYC, preventing any further e-filing on MCA portal</td><td>File DIR-3 KYC with Rs 5,000 penalty to reactivate DIN first. Only after reactivation can other pending returns be filed.</td></tr>
<tr><td>Penalty Order Already Passed</td><td>Section 454 penalty order with 90-day payment deadline approaching. Non-payment escalates to imprisonment or 3x penalty</td><td>Pay penalty and rectify default within 90 days. If aggrieved, file appeal to Regional Director in Form ADJ within 60 days of order.</td></tr>

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
            <h2 class="section-title">ROC Notice Response Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ROC Notice Reply (STK-1 Strike Off)</td><td class="table-amount">Rs 4,999</td></tr>
<tr><td>Section 454 Penalty Adjudication Reply</td><td class="table-amount">Rs 7,999</td></tr>
<tr><td>Pending AOC-4 Filing (Per Year)</td><td class="table-amount">Rs 2,999 + govt fees</td></tr>
<tr><td>Pending MGT-7 Filing (Per Year)</td><td class="table-amount">Rs 2,999 + govt fees</td></tr>
<tr><td>DIR-3 KYC Reactivation</td><td class="table-amount">Rs 1,499 + Rs 5,000 govt penalty</td></tr>
<tr><td>Compliance Scheme 2026 Application</td><td class="table-amount">Rs 9,999 (includes all pending filings)</td></tr>
<tr><td>Appeal to Regional Director (Form ADJ)</td><td class="table-amount">Rs 14,999</td></tr>
<tr><td>NCLT Restoration (Section 252)</td><td class="table-amount">Rs 24,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ROC Notice consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20a%20ROC%20Notice.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ROC Notice Response Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>STK-1 (Strike Off) Reply</td><td>30 days from notice | Reply + filings within 15 days</td></tr>
<tr><td>Section 454 Show Cause Reply</td><td>30 days from notice | Reply within 20 days</td></tr>
<tr><td>E-Hearing Attendance</td><td>21 days from scheduling | Preparation within timeline</td></tr>
<tr><td>Appeal to Regional Director</td><td>60 days from penalty order | Form ADJ within 45 days</td></tr>
<tr><td>NCLT Restoration</td><td>Within 20 years of strike off | Application within 30-45 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Under Section 454(3) proviso, no penalty is leviable if the default is rectified before notice issuance or within 30 days. This makes immediate corrective action the most cost-effective strategy. Non-payment of an existing penalty order within 90 days escalates to imprisonment up to 6 months or 3x penalty under Section 454(8). Directors of companies not filing for 3 consecutive years face 5-year disqualification under Section 164/167.</p>

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
            <h2 class="section-title">Benefits of Professional ROC Notice Response</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Precise Section Analysis</h3><p class="feature-text">Correct identification of notice section, default, and penalty computation - avoiding overpayment or unnecessary concessions to the ROC.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">30-Day Corrective Filing</h3><p class="feature-text">Immediate filing of pending returns under Section 454(3) proviso eliminates penalty liability entirely when done within the 30-day window.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Compliance Scheme 2026</h3><p class="feature-text">Eligibility assessment for 90% fee relief can save lakhs for companies with multiple years of pending AOC-4 and MGT-7 returns.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Expert Reply Drafting</h3><p class="feature-text">Well-drafted replies with Act section citations, supporting evidence, and legal arguments that prevent escalation to strike off or prosecution.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">E-Hearing and Appeal</h3><p class="feature-text">Representation before the Adjudicating Officer and appeal strategy against disproportionate or incorrectly computed penalty orders.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Companies Trust Patron Accounting for ROC Notices</h2>
            <div class="content-text">
                
                <p><strong>300+ ROC Notices Handled</strong> across strike off, penalty adjudication, and compliance defaults.</p>
<p><strong>95% Resolution Rate</strong> without escalation to strike off or prosecution.</p>
<p><strong>Direct experience</strong> across ROC Mumbai, ROC Pune, ROC Delhi, and ROC Bangalore.</p>
<p><strong>4.9 Google Rating</strong> based on verified reviews.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional ROC Notice Response</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Response</th><th>CA/CS-Assisted Response</th></tr></thead>
                    <tbody>
                        <tr><td>Section Identification</td><td>Risk of misreading notice type</td><td>Precise section-wise analysis with penalty computation</td></tr>
<tr><td>Corrective Filing</td><td>Often delayed or incomplete</td><td>All pending forms filed before 30-day window closes</td></tr>
<tr><td>Compliance Scheme</td><td>May not know about 2026 scheme</td><td>Automatic eligibility check and application</td></tr>
<tr><td>Reply Quality</td><td>Generic or absent</td><td>Act section citations, evidence, and legal arguments</td></tr>
<tr><td>E-Hearing</td><td>Director appears alone</td><td>CS/CA represents with prepared submissions</td></tr>
<tr><td>Cost</td><td>Rs 0 (but penalty risk is high)</td><td>Rs 4,999 onwards</td></tr>

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
            <h2 class="section-title">Related Company Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/private-limited-company-registration">Company Registration</a></strong> - Private Limited, LLP, OPC incorporation.</li>
<li><strong><a href="/private-limited-company-compliance">ROC Annual Filing</a></strong> - Timely AOC-4, MGT-7, DIR-3 KYC filing.</li>
<li><strong><a href="/company-closure">Company Strike Off</a></strong> - Voluntary strike off via STK-2.</li>
<li><strong><a href="/gst-notice">GST Notice</a></strong> - Expert reply for GST scrutiny and demand notices.</li>
<li><strong><a href="/income-tax-notice">Income Tax Notice</a></strong> - Response to Section 142, 143, 148 notices.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for ROC Notices</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Companies Act, 2013</a>; Companies (Adjudication of Penalties) Rules, 2014.</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 248:</strong> Strike off for no business (2 years) or non-filing (2 consecutive years). STK-1 notice with 30-day reply.</li>
<li><strong>Section 454:</strong> Penalty adjudication by ROC. Proviso to 454(3): no penalty if rectified within 30 days of notice.</li>
<li><strong>Section 454(8):</strong> Non-payment within 90 days: imprisonment up to 6 months or 3x penalty.</li>
<li><strong>Section 454(5):</strong> Appeal to Regional Director in Form ADJ within 60 days.</li>
<li><strong>Section 164/167:</strong> Director disqualification for 5 years if non-filing for 3 consecutive years.</li>
<li><strong>Section 252:</strong> NCLT restoration within 20 years of strike off.</li>
<li><strong>Section 92(5):</strong> MGT-7 penalty - Rs 100/day on company + Rs 50,000 per officer.</li>
<li><strong>Section 137:</strong> AOC-4 additional fees Rs 100/day (no cap) + penalty on directors.</li>
</ul>
<p><strong>Compliance Scheme 2026:</strong> 90% relief on additional fees. STK-2 at 25%. MSC-1 at 50%.</p>
<p><strong>Portals:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a> | <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - ROC Notice</h2>
                    <p class="faq-expanded__lead">Answers about ROC notice types, reply process, penalties, Section 248 strike off, Section 454 adjudication, Compliance Scheme 2026, and NCLT restoration.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ROC Notice',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a ROC notice and why have I received one?</h3>
                        <div class="faq-expanded__a"><p>A ROC notice is an official communication from the Registrar of Companies under the MCA for non-compliance with the Companies Act, 2013. Common reasons: non-filing of AOC-4 or MGT-7 for consecutive years, failure to commence business within one year, non-disclosure of significant beneficial ownership (Section 90), DIN non-compliance, or Secretarial Standards violations. The notice specifies the section, default, and deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What happens if I do not reply to a ROC notice?</h3>
                        <div class="faq-expanded__a"><p>Severe consequences. For STK-1 strike off notices, the ROC issues public notice (STK-5) and strikes off the company from the register. For Section 454 penalty notices, an ex-parte penalty order with maximum penalties is passed on the company and each officer. Under Section 454(8), non-payment within 90 days leads to imprisonment up to 6 months or 3x penalty. Directors face disqualification under Section 164/167.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for non-filing of AOC-4 and MGT-7?</h3>
                        <div class="faq-expanded__a"><p>AOC-4: Additional fees of Rs 100/day from due date with no cap - can accumulate to lakhs. Under Section 137, penalty Rs 10,000 on company and up to Rs 1.5 lakh per officer. MGT-7: Rs 100/day on company under Section 92(5), plus Rs 50,000 per officer in default. Non-filing for 2 consecutive years triggers Section 248 strike off proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Section 248 strike off and how to avoid it?</h3>
                        <div class="faq-expanded__a"><p>Section 248 empowers ROC to remove a company if: no business for 2 years, or non-filing of AOC-4/MGT-7 for 2 consecutive years. STK-1 notice is issued with 30-day window. To avoid: immediately file all pending returns, reply with evidence of business activity (bank statements, invoices, GST returns), and apply under Companies Compliance Scheme 2026 for 90% fee relief.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the Companies Compliance Scheme 2026?</h3>
                        <div class="faq-expanded__a"><p>An MCA amnesty offering 90% relief on additional filing fees for overdue forms (AOC-4, MGT-7, and others). Under the proviso to Section 454(3), filing before notice or within 30 days completely eliminates penalty. The scheme also offers STK-2 (voluntary strike off) at 25% of normal fees and dormant company (MSC-1) applications at 50%. Significant opportunity for companies with years of pending compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a struck-off company be restored?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 252 of Companies Act, 2013, any member, creditor, or the company can apply to NCLT for restoration within 20 years of striking off. Must demonstrate the company was carrying on business or that restoration is just and equitable. Upon restoration, the company is deemed to have continued in existence. All pending compliance must be completed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">ROC notice ka jawab kaise dein aur kya documents chahiye?</h3>
                        <div class="faq-expanded__a"><p>Sabse pehle notice mein likha section number aur default identify karein. Agar AOC-4 ya MGT-7 pending hai toh turant MCA portal par file karein - Companies Compliance Scheme 2026 mein 90% chhoot milti hai. 30 din ke andar reply draft karein jismein company ki activity ka proof (bank statement, invoices, GST returns) attach karein. Section 454 notice ke liye e-Adjudication module par reply karein. CA/CS ki madad lein - galat reply se penalty aur strike off dono ho sakte hain. Patron Accounting - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to file an appeal against ROC penalty order?</h3>
                        <div class="faq-expanded__a"><p>File appeal to Regional Director in Form ADJ within 60 days of receipt of penalty order, under Section 454(5) and (6). Must include certified copy of the order. The Regional Director may confirm, modify, or set aside the order after hearing. No appeal lies if penalty has not been paid or adequate security not furnished.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: What is a ROC notice?</strong> A: Official notice from Registrar of Companies for non-compliance under Companies Act, 2013 - non-filing, strike off, penalty adjudication.</p>
<p><strong>Q: How many days to reply?</strong> A: 30 days for most notices (STK-1, Section 454). Appeals: 60 days from penalty order.</p>
<p><strong>Q: Penalty for not filing MGT-7?</strong> A: Rs 100/day on company (no cap) + Rs 50,000 per officer. 2 consecutive years: strike off.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Companies Compliance Scheme 2026 - Act Now for 90% Fee Relief</h2>
            <div class="content-text">
                
                <p>The Companies Compliance Scheme 2026 offers 90% relief on additional ROC filing fees. Filing pending AOC-4 and MGT-7 before or within 30 days of a Section 454 notice completely eliminates penalty liability. For companies with 3-5 years of pending returns, this can save Rs 5-15 lakh in additional fees alone.</p>
<p>Under Section 454(8), non-payment of an existing penalty order within 90 days escalates to imprisonment up to 6 months or 3x the original penalty. Directors of companies not filing for 3 consecutive years face 5-year disqualification.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20a%20ROC%20Notice.%20Please%20help." target="_blank" rel="noopener">WhatsApp us</a> for a free ROC compliance assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Respond to Your ROC Notice Before the Deadline</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">A ROC notice demands immediate, informed action. Whether it is Section 248 strike off, Section 454 penalty adjudication, or non-filing of AOC-4 and MGT-7, the response must be precise - rectify within 30 days to avoid penalty under Section 454(3) proviso.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">The Companies Compliance Scheme 2026 presents a significant opportunity for defaulting companies to regularise compliance at dramatically reduced costs. Consequences of inaction include strike off, disqualification, and potential imprisonment.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting: 300+ ROC notices handled. 95% resolution rate. 4 offices across India. Starting from Rs 4,999.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20a%20ROC%20Notice.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ROC%20Notice&body=Hello%2C%0A%0AI%20received%20a%20ROC%20notice%20and%20need%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ROC Notice Response Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert ROC notice reply, penalty adjudication, compliance scheme application, and NCLT restoration across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/roc-notice/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/roc-notice/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/roc-notice/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/roc-notice/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Company compliance and notice response</div><div class="pa-cross-grid"><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ROC Annual Filing</div><div class="pa-card-sub">India</div></div></a><a href="/company-closure" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Strike Off</div><div class="pa-card-sub">India</div></div></a><a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Content aligned with Companies Act 2013, MCA circulars, and Companies Compliance Scheme 2026. Next review: June 2026.</p>
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
