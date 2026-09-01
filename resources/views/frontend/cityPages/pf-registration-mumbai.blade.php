
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
    <title>PF Registration in Mumbai - EPFO Process & 20-Employee Rule</title>
    <meta name="description" content="PF registration in Mumbai. EPF & MP Act 1952, 20+ employees, employer 12% + employee 12%, Rs 15,000 ceiling, EPFO portal, UAN, ECR, EDLI. CA-led. Call +91 945 945 6700.">
    <link rel="canonical" href="/pf-registration/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PF Registration in Mumbai - EPFO Process & 20-Employee Rule">
    <meta property="og:description" content="PF registration in Mumbai. EPF & MP Act 1952, 20+ employees, employer 12% + employee 12%, Rs 15,000 ceiling, EPFO portal, UAN, ECR, EDLI. CA-led. Call +91 945 945 6700.">
    <meta property="og:url" content="/pf-registration/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PF Registration in Mumbai - EPFO Process & 20-Employee Rule">
    <meta name="twitter:description" content="PF registration in Mumbai. EPF & MP Act 1952, 20+ employees, employer 12% + employee 12%, Rs 15,000 ceiling, EPFO portal, UAN, ECR, EDLI. CA-led. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "PF Registration in Mumbai",
      "description": "PF registration in Mumbai. EPF & MP Act 1952, 20+ employees, employer 12% + employee 12%, Rs 15,000 ceiling, EPFO portal, UAN, ECR, EDLI. CA-led. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/pf-registration/mumbai",
      "serviceType": "PF Registration in Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
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
        "url": "https://www.patronaccounting.com/pf-registration/mumbai",
        "price": "7"
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
          "name": "PF Registration: Process and Compliance",
          "item": "https://www.patronaccounting.com/pf-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "PF Registration in Mumbai",
          "item": "https://www.patronaccounting.com/pf-registration/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is PF registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF or Provident Fund registration is the mandatory process of enrolling an establishment with EPFO under the EPF and MP Act 1952. Applies to all establishments employing 20 or more persons. Creates obligation for employer and employees to contribute to three schemes: EPF retirement savings at 12 percent each, EPS pension at 8.33 percent from employer share, and EDLI life insurance at 0.50 percent employer. Registration done online through USSP portal shramsuvidha.gov.in. Establishment receives unique code for all PF transactions."
          }
        },
        {
          "@type": "Question",
          "name": "Who needs PF registration in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every establishment in Mumbai employing 20 or more persons on any single day including corporate offices in BKC and Nariman Point, IT companies in Powai and Andheri, manufacturing units in Thane-Belapur and Andheri MIDC, restaurants and hotels with 20 plus staff, construction companies, security agencies, hospitals, schools, logistics companies in Bhiwandi, and retail chains. All employee categories count: permanent contract temporary casual daily-wage part-time. Once covered always covered even if headcount drops. Register within one month."
          }
        },
        {
          "@type": "Question",
          "name": "What is the PF contribution rate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Total employer cost 13 percent of basic wages plus DA per employee: 12 percent contribution split as EPF 3.67 percent plus EPS 8.33 percent, plus EDLI 0.50 percent, plus admin charges 0.50 percent. Employee cost 12 percent of basic plus DA deducted from salary entirely to EPF account. Grand total 25 percent of basic plus DA per employee per month. Mandatory on wages up to Rs 15,000. Above Rs 15,000 mandatory PF on Rs 15,000 and voluntary on actual wages with mutual consent."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Rs 15,000 wage ceiling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Statutory wage ceiling for EPF is Rs 15,000 per month basic wages plus dearness allowance. Employees earning up to Rs 15,000 mandatorily covered with contributions on full wages. Employees above Rs 15,000 also covered but mandatory contribution calculated on Rs 15,000 not actual wages. Voluntary contributions on higher wages with mutual consent. EPS pension applies ONLY to employees earning up to Rs 15,000. Those joining above Rs 15,000 contribute only to EPF not EPS."
          }
        },
        {
          "@type": "Question",
          "name": "What are the penalties for PF non-compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Severe and multi-layered: damages under S.14B from 5 percent to 100 percent of arrears depending on delay duration. Interest under S.7Q at notified rate on all delayed payments. Prosecution under S.14 imprisonment up to 3 years plus fine Rs 10,000 first offence and up to 5 years plus Rs 25,000 repeat. Recovery as arrears of land revenue with property attachment. Bank account attachment by EPFO. Employees Enrolment Campaign 2025 ending April 2026 offers reduced penalties."
          }
        },
        {
          "@type": "Question",
          "name": "What is UAN and why is it important?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "UAN or Universal Account Number is unique lifetime 12-digit number assigned to every EPF member. Stays with employee throughout career across employers. When changing jobs same UAN carries forward with contributions from new employer linked to same account. Linked to Aadhaar PAN and bank account for KYC. With activated UAN employees can check PF balance online, download e-passbook, file transfer claims Form 13, file withdrawal claims Form 19, and receive SMS alerts on contributions. Quick Answers PF registration kisko karni padti hai? 20+ employees on any day = mandatory. Sab count hote hain: permanent, contract, temporary, daily-wage. USSP portal pe 1 mahine mein register karo. Ek baar cover = hamesha cover. Mumbai mein: BKC offices, Powai IT, Thane factories, restaurants (20+ staff), construction, security - sab ko. EPFO Regional Office BKC mein hai. PF ka contribution kitna? Employee: 12% of basic + DA (salary se katega). Employer: 12% (3.67% EPF + 8.33% EPS) + 0.50% EDLI + 0.50% admin = 13%. Total: 25%. Example: Rs 12,000 basic pe employee ka Rs 1,440, employer ka Rs 1,560 = Rs 3,000/month per person. 15 tareekh tak deposit. Late pe damages 5-100%. Rs 15,000 ceiling ka matlab? Basic + DA Rs 15,000 tak mandatory PF. Usse zyada pe Rs 15,000 pe mandatory, baaki optional (dono ki consent chahiye). EPS pension SIRF Rs 15,000 tak. Bahut IT companies basic low rakhti hain - abhi legal hai lekin Code on Wages 50% rule se badlega."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        PF Registration in Mumbai: CA-Led EPF Employer Registration, Employee Enrollment, Contribution Management, and Compliance Under the EPF & MP Act 1952
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Who Must Register:</span> Establishments employing 20+ persons. Register within 1 month of crossing threshold. Once covered, always covered</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Contribution:</span> Employer 12% (EPF 3.67% + EPS 8.33%) + EDLI 0.50% + Admin 0.50% = 13%. Employee 12%. Total 25% of basic + DA</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Three Schemes:</span> EPF (retirement savings) + EPS (monthly pension post-retirement) + EDLI (life insurance Rs 7 lakh on death during service)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> Deposit by 15th of following month. Late: damages 5%-100% + interest + prosecution (up to 3 years)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=PF%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20PF%20registration.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PF%20registration%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'PF Registration',
                                            'city'     => 'Mumbai',
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
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">IT company in Powai, 85 employees, salaries Rs 12,000 to Rs 2,00,000. Patron registered us, enrolled all 85 with UAN and KYC, correctly calculated PF on Rs 15,000 for those above ceiling and actual for those below, structured salary breakup for 50% rule. Monthly ECR by 15th. EPFO inspection - every record perfect.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arjun Shah</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, IT Company, Powai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">6 restaurants, 120 staff. Crossed 20 employees 3 years ago but never registered PF. Patron used the Enrolment Campaign 2025 to regularise with reduced penalties, registered on USSP, enrolled all staff, and now manages monthly ECR for all 6 outlets.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Kapoor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Restaurant Chain, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Manufacturing unit in Thane, 200 workers. All below Rs 15,000 ceiling - maximum PF exposure. Patron handles monthly ECR, manages new enrollments for high-turnover workforce, and coordinates with EPFO BKC. Also handles ESIC and Professional Tax.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Desai</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Manager, Manufacturing, Thane</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Security agency deploying 300 guards. Patron explained principal employer liability clearly, registered us, enrolled all guards with UAN, and manages monthly PF across rotating headcount. When a guard's family needed death claim, Patron handled the entire EDLI process.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Security Agency, Andheri</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Demandify Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From BKC corporates to Powai IT to Thane manufacturing to restaurants - Mumbai's employers trust Patron for PF registration and compliance.</p>
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Contribution</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Registration in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PF Registration Services at a Glance</strong></p>
                    <p>PF registration MANDATORY for 20+ employees. Employer 13% (EPF 3.67% + EPS 8.33% + EDLI 0.50% + admin 0.50%) + Employee 12% = 25% of basic + DA. Three schemes: EPF (savings), EPS (pension), EDLI (insurance). Deposit by 15th. Late = damages 5-100% + prosecution. Rs 15,000 wage ceiling. UAN for every employee. Once covered = always covered. Mumbai = India's largest employer base. Enrolment Campaign 2025 ending April 2026.</p>
                </div>
                <p>Mumbai is India's largest employer base - BKC corporates, Powai/Andheri IT, Thane-Belapur manufacturing, 80,000+ restaurants, construction, security. All with 20+ employees must register. Learn more about <a href="/pf-registration">PF registration across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>EPF & MP Act 1952. EPF Scheme 1952. EPS 1995. EDLI 1976. Code on Social Security 2020</td></tr>
                        <tr><td>Applicability</td><td>20+ employees (any day, all categories). Register within 1 month. Once covered = always covered</td></tr>
                        <tr><td>Employer Cost</td><td>12% contribution (EPF 3.67% + EPS 8.33%) + EDLI 0.50% + Admin 0.50% = 13% of basic + DA</td></tr>
                        <tr><td>Employee Cost</td><td>12% of basic + DA (deducted from salary, entirely to EPF account)</td></tr>
                        <tr><td>Wage Ceiling</td><td>Rs 15,000/month basic + DA. Mandatory up to ceiling. Voluntary above with consent</td></tr>
                        <tr><td>Deposit</td><td>By 15th of following month via ECR on EPFO Unified Portal. Late = damages 5-100%</td></tr>
                        <tr><td>Authority</td><td>EPFO Regional Office Mumbai, BKC, Bandra East. Portal: epfindia.gov.in. USSP: shramsuvidha.gov.in</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>PF registration coincides with ESIC and Professional Tax. Patron integrates with <a href="/esic-registration/mumbai">ESIC registration</a>, <a href="#">Professional Tax</a>, <a href="/payroll-services/mumbai">payroll services</a>, and <a href="#">company registration</a>.</p>
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
                <h2 class="section-title">What Is PF Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>PF registration is the mandatory process of enrolling an establishment with EPFO under the EPF & MP Act 1952, creating the obligation for employer and employees to contribute to three social security schemes: EPF (retirement savings), EPS (pension), and EDLI (life insurance).</p>
                    <p>The 20-employee threshold includes ALL categories: permanent, contract, temporary, casual, daily-wage. Triggered on any day. Once covered = always covered. Register within ONE month. PF is separate from ESIC (different thresholds: PF at 20, ESI at 10).</p>
                    <p>EPFO Regional Office Mumbai: BKC, Bandra East. USSP: <a href="https://shramsuvidha.gov.in" target="_blank" rel="noopener">shramsuvidha.gov.in</a>. Learn more at <a href="/pf-registration">our national PF practice</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PF Registration:</strong></p>
                    <ul>
                        <li><strong>20-Employee Trigger:</strong> Any day, ALL categories. Register within 1 month. Once covered = always covered. Cannot de-register even if count drops.</li>
                        <li><strong>25% Total Contribution:</strong> Employer 13% (12% PF/EPS + 0.50% EDLI + 0.50% admin) + Employee 12%. On basic + DA up to Rs 15,000.</li>
                        <li><strong>Three Schemes:</strong> EPF (retirement savings, 8.25% interest), EPS (pension after 10 years + age 58), EDLI (Rs 7 lakh life insurance).</li>
                        <li><strong>Rs 15,000 Ceiling:</strong> Mandatory on basic + DA up to Rs 15,000. Voluntary above with consent. EPS only up to Rs 15,000.</li>
                        <li><strong>UAN:</strong> Universal Account Number. Lifetime. Portable across employers. Aadhaar/PAN/bank linked. Online claims and balance check.</li>
                        <li><strong>Deposit by 15th:</strong> Monthly ECR on EPFO portal. Late = damages 5-100% + interest + prosecution (up to 3 years).</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PF Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Labour</span>
                        <strong>EPF Covered</strong>
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
            <h2 class="section-title">Who Needs PF Registration in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Corporate Offices (BKC, Nariman Point, Worli):</strong> Banks, MNCs, consulting firms with hundreds to thousands of employees. Complex salary structures with mixed PF coverage. <a href="#">Company registration</a>.</p>
                <p><strong>IT/BPO (Powai, Andheri, BKC):</strong> Mixed salary ranges - employees below and above Rs 15,000 ceiling. CTC-based pay structuring. <a href="/payroll-services/mumbai">Payroll services</a> integration.</p>
                <p><strong>Manufacturing (Thane-Belapur, Andheri MIDC):</strong> Blue-collar workforce almost entirely below ceiling = maximum PF exposure. <a href="/esic-registration/mumbai">ESIC</a> alongside PF.</p>
                <p><strong>Restaurants, Construction, Security:</strong> 80,000+ restaurants with 20+ staff. Construction with massive project-based workforce. Security agencies - principal employer liability. <a href="#">Professional Tax</a>.</p>
                <p><strong>Startups (Powai, BKC):</strong> Cross 20 employees without registering. PF threshold is 20 (not 10 like ESI). Many assume it doesn't apply. It does. <a href="/gst-registration/mumbai">GST registration</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability Assessment</td><td>20+ employees any day? Which establishment class (187 notified)? All categories counted. Once-covered-always-covered check. Voluntary S.1(4) eligibility. Complex structures: parent vs subsidiary threshold</td></tr>
                        <tr><td>USSP Portal Registration</td><td>File on shramsuvidha.gov.in: establishment details, PAN, address, employee strength, NIC code, DSC. Establishment code issued. Within 1 month of crossing 20</td></tr>
                        <tr><td>Employee Enrollment + UAN</td><td>All eligible employees on EPFO Unified Portal. UAN generated. Aadhaar/PAN/bank KYC seeded and approved. Bulk enrollment for large workforces. Within 1 month of joining</td></tr>
                        <tr><td>Salary Structuring Advisory</td><td>Basic + DA structure for PF compliance. Code on Wages 2019 50% rule readiness. Balance employee take-home with PF compliance. Future-proof salary design</td></tr>
                        <tr><td>Monthly ECR + Deposit</td><td>Calculate employer 13% + employee 12% per covered employee. File ECR on Unified Portal. Generate challan. Deposit by 15th. Late = damages 5-100%</td></tr>
                        <tr><td>EPFO Inspection Coordination</td><td>EPFO enforcement officers from BKC Regional Office. Wage registers, attendance, ECR copies, challans, enrollment records all maintained and ready</td></tr>
                        <tr><td>Transfer + Withdrawal Claims</td><td>PF transfer (Form 13), withdrawal (Form 19), pension (Form 10C). KYC verification. Online settlement via UAN. Employer and employee assisted</td></tr>
                        <tr><td>Integrated Employer Compliance</td><td>EPF + <a href="/esic-registration/mumbai">ESIC</a> + <a href="#">Professional Tax</a> + <a href="/payroll-services/mumbai">payroll</a>. Consistent employee data across all portals. No duplication</td></tr>

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
            <h2 class="section-title">How PF Registration Works in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 7-step process covers complete EPF lifecycle - from applicability assessment through USSP registration, employee enrollment, salary structuring, monthly ECR filing, annual compliance, to ongoing management.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Applicability Assessment</h3>
        <p class="step-description">CA determines: 20+ employees on any day? Which establishment class (187 notified)? All categories counted (permanent, contract, temporary, casual, daily-wage). Once-covered-always-covered applies? Voluntary coverage S.1(4) eligible? Walk-in at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Headcount analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Category confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Obligation determined</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ASSESS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">20+ Employees?</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">187 Classes?</text></svg></div>
            <span class="illustration-label">Applicable</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">USSP Registration</h3>
        <p class="step-description">Register on Unified Shram Suvidha Portal (shramsuvidha.gov.in): establishment details, PAN, address, employee strength, NIC code, DSC. Establishment code issued within 1-3 days. Must register within 1 month of crossing 20.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>USSP filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Establishment code issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registration active</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">USSP REGISTER</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">shramsuvidha.gov.in</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Est. Code Issued</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Within 1 Month</text></svg></div>
            <span class="illustration-label">Registered</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Employee Enrollment + UAN</h3>
        <p class="step-description">Every eligible employee enrolled on EPFO Unified Portal: Aadhaar, PAN, bank account, DOB, wages. UAN (Universal Account Number) generated - lifetime, portable. KYC seeded (Aadhaar/PAN/bank linked and approved). Bulk enrollment for large workforces.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All employees enrolled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UANs generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC seeded and approved</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ENROLL</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">UAN Generated</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">KYC Seeded</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Aadhaar + PAN</text></svg></div>
            <span class="illustration-label">Employees Enrolled</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Salary Structuring Review</h3>
        <p class="step-description">Review basic + DA structure for PF calculation compliance. Advise on Code on Wages 2019 50% rule readiness. Ensure compliant wage breakup balancing employee take-home with PF obligations. Mixed workforce (below/above Rs 15,000) correctly classified.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Salary structure reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>50% rule assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wage breakup compliant</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SALARY REVIEW</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Basic + DA</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">50% Rule Ready</text></svg></div>
            <span class="illustration-label">Structure Optimised</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Monthly ECR + Deposit</h3>
        <p class="step-description">Calculate employer contribution (12% + 0.50% EDLI + 0.50% admin = 13%) and employee contribution (12%) per covered employee. File ECR on EPFO Unified Portal. Generate challan. Deposit by 15th. Late = damages 5-100% + interest.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Contributions calculated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ECR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deposited by 15th</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ECR + DEPOSIT</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">13% + 12%</text><text x="60" y="55" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">By 15th Monthly</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">EPFO Portal</text></svg></div>
            <span class="illustration-label">Monthly Compliant</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Annual Compliance</h3>
        <p class="step-description">Annual return filed. EPFO inspection readiness maintained (wage registers, attendance, ECR copies, challans). Employee claim facilitation (transfers, withdrawals). KYC updation for new employees.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual return filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inspection ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Claims facilitated</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANNUAL</text><text x="60" y="45" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Return Filed</text><text x="60" y="58" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Inspection Ready</text><text x="60" y="71" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Claims Assisted</text></svg></div>
            <span class="illustration-label">Annually Compliant</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Ongoing Management</h3>
        <p class="step-description">New employee enrollment (UAN + KYC within 1 month). Monthly ECR and deposits. Transfer/withdrawal claims. Interest rate updates. Regulatory changes (Code on Social Security 2020). Enrolment Campaign advisory. Continuous obligation.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New enrollments managed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monthly cycle maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Regulatory updates tracked</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">COMPLIANT</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Ongoing</text></svg></div>
            <span class="illustration-label">Fully Compliant</span>
            <span class="step-number-large">07</span>
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
            <h2 class="section-title">Documents Required for PF Registration</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN of Entity:</strong> Company/LLP/Firm PAN + Aadhaar/PAN of all directors/partners/proprietor.</li><li><strong>Business Registration:</strong> CIN, LLP Certificate, Partnership Deed, Gumasta, GST Certificate.</li><li><strong>Address Proof:</strong> Rent agreement, utility bill, property documents.</li><li><strong>Bank Details:</strong> Cancelled cheque or bank statement of establishment.</li><li><strong>Employee Details:</strong> Name, DOB, father's/husband's name, gender, wages, date of joining, Aadhaar (mandatory for UAN).</li><li><strong>Wage Records:</strong> Wage register / salary slips (basic + DA breakup).</li><li><strong>DSC:</strong> Class 3 Digital Signature of authorised signatory.</li><li><strong>Factory/MSME Details:</strong> Factory licence, MSME certificate, Startup India registration (if applicable).</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Enrolment Campaign 2025 Ending Soon:</strong> EPFO's 6-month campaign (November 2025 to April 2026) allows voluntary regularisation with REDUCED penalties. Unregistered employers can register, enrol all employees, and regularise past non-compliance without past inspections. Post-April 2026: full exposure to backdated contributions, damages (5-100%), interest, prosecution, and property attachment. Act NOW.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common PF Registration Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>20-Employee Threshold Miscounted</td><td>Triggered on ANY day. Includes contract, temporary, casual, daily-wage, part-time. 15 permanent + 5 contract = 20 = PF applicable. Once covered = always covered</td><td>Historical headcount from payroll analysed. All categories counted. Exact applicability date determined. No inspection surprises</td></tr>
                        <tr><td>Salary Structuring for PF</td><td>IT companies keep basic at Rs 15,000 to minimise PF. Code on Wages 50% rule will change this. Retrospective liability risk</td><td>Future-proof salary structuring. Balance take-home with compliance. 50% rule readiness. No retrospective exposure when Code notified</td></tr>
                        <tr><td>Mixed Workforce Below/Above Ceiling</td><td>BKC company: 10 office boys below Rs 15,000 (mandatory full PF) + 40 executives above (PF on Rs 15,000 mandatory, actual voluntary). Classification errors</td><td>Each employee correctly classified. PF calculated on appropriate wage base. Above-ceiling voluntary PF implications advised</td></tr>
                        <tr><td>Monthly Deposit Deadline Missed</td><td>15th of following month. Late damages: 5% (2 months) to 100% (certain defaults). Plus interest. Plus prosecution up to 3 years</td><td>Monthly calculation, ECR filing, and deposit managed by Patron. Calendar-driven process. Zero late payments. <a href="/payroll-services/mumbai">Payroll</a> integrated</td></tr>
                        <tr><td>KYC Not Seeded - Claims Rejected</td><td>Employees enrolled but Aadhaar/PAN/bank not seeded to UAN. Withdrawal and transfer claims rejected. Employee grievances against employer</td><td>KYC seeding completed at enrollment time for every employee. Approved before first contribution. Zero claim rejections from KYC gaps</td></tr>

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
            <h2 class="section-title">PF Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>EPFO Registration (Govt Fee)</td><td>FREE</td></tr>
                        <tr><td>Monthly Employer Contribution</td><td>13% of basic + DA (12% PF/EPS + 0.50% EDLI + 0.50% admin)</td></tr>
                        <tr><td>Monthly Employee Contribution</td><td>12% of basic + DA (deducted from salary)</td></tr>
                        <tr><td>Patron: Registration + Setup</td><td>Rs 5,000 - Rs 15,000</td></tr>
                        <tr><td>Patron: Monthly Compliance</td><td>Rs 3,000 - Rs 10,000/month</td></tr>
                        <tr><td>Late Deposit Damages (S.14B)</td><td>5% - 100% of arrears</td></tr>
                        <tr><td>Total First Month (20 emp, Rs 12K basic)</td><td>Rs 60,000 contribution + Rs 5,000-15,000 professional</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PF Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20PF%20registration%20in%20Mumbai.%20Please%20share%20pricing." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability Assessment</td><td>1 day</td></tr>
                        <tr><td>USSP Registration</td><td>1-3 days</td></tr>
                        <tr><td>Employee Enrollment + UAN</td><td>Within 1 month of joining</td></tr>
                        <tr><td>Salary Structuring Review</td><td>1-2 days</td></tr>
                        <tr><td>First ECR + Deposit</td><td>By 15th of following month</td></tr>
                        <tr><td>Total Setup</td><td>3-7 days</td></tr>
                        <tr><td>Ongoing</td><td>Monthly ECR + annual return</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Walk-in at Patron's Marine Lines, Mumbai office. EPFO Regional Office at BKC, Bandra East (Bhavishya Nidhi Bhawan). USSP: shramsuvidha.gov.in. EPFO Unified Portal for ECR/UAN. Employees' Enrolment Campaign 2025 (Nov 2025-Apr 2026) - voluntary regularisation window with reduced penalties ending soon. Post-campaign: full backdated exposure. Register NOW.</p>

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
            <h2 class="section-title">Why Choose Patron for PF Registration in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Complete EPF Lifecycle</h3><p>Not just registration: enrollment (UAN+KYC), monthly ECR, deposits, annual return, inspection prep, claims. Month-to-month compliance where Mumbai employers fail.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Salary Structuring Advisory</h3><p>Compliant PF wage structures for IT and corporate Mumbai. Balance take-home with compliance. Code on Wages 50% rule readiness. Future-proof salary design.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>EPF + ESIC + PT Integrated</h3><p>All three registered simultaneously. Consistent employee data across EPFO, ESIC, and PT portals. No duplication. <a href="/payroll-services/mumbai">Payroll</a> integrated.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Enrolment Campaign 2025</h3><p>Reduced-penalty window ending April 2026. Patron manages regularisation: register, enrol, comply with no past inspections. Post-campaign: full exposure. 10,000+ businesses, 4.9 rating.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employers Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Four offices: Pune, Mumbai, Delhi, Gurugram. Serving corporates, IT companies, manufacturers, restaurants, construction, security agencies, and startups across Mumbai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Contribution Breakup</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Component</th><th>Rate</th><th>Example (Rs 12,000 basic)</th></tr></thead>
                    <tbody>
                        <tr><td>EPF (Employee Share)</td><td>12% of basic + DA</td><td>Rs 1,440/month</td></tr>
                        <tr><td>EPF (Employer Share)</td><td>3.67% of basic + DA</td><td>Rs 440/month</td></tr>
                        <tr><td>EPS (Employer Share)</td><td>8.33% of basic + DA</td><td>Rs 1,000/month</td></tr>
                        <tr><td>EDLI (Employer)</td><td>0.50%</td><td>Rs 60/month</td></tr>
                        <tr><td>Admin (Employer)</td><td>0.50%</td><td>Rs 60/month</td></tr>
                        <tr><td>Total Employer</td><td>13%</td><td>Rs 1,560/month</td></tr>
                        <tr><td>Grand Total per Employee</td><td>25%</td><td>Rs 3,000/month</td></tr>

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
            <h2 class="section-title">Related Services for Mumbai Employers</h2>
            <div class="content-text">
                
                <p>Mumbai employers registering PF often need:</p>
                <ul><li><a href="/pf-registration">PF Registration (India)</a> - National overview.</li>
                    <li><a href="/esic-registration/mumbai">ESIC Registration in Mumbai</a> - Employee insurance (10+ employees).</li>
                    <li><a href="#">Professional Tax in Mumbai</a> - Maharashtra PTRC/PTEC.</li>
                    <li><a href="/payroll-services/mumbai">Payroll Services in Mumbai</a> - Complete payroll management.</li>
                    <li><a href="#">Company Registration in Mumbai</a> - Business entity.</li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a> - Tax compliance.</li>
                    <li><a href="/posh-compliance-services/mumbai">POSH Compliance in Mumbai</a> - Workplace safety.</li>
                    <li><a href="/trademark-registration/mumbai">Trademark Registration in Mumbai</a> - Brand protection.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for PF Registration</h2>
            <div class="content-text">
                
                <p><strong>EPF & MP Act 1952 - Section 1(3):</strong></p>
                <ul><li>Applies to 20+ employees in 187 notified classes. Once covered = always covered. Register within 1 month.</li></ul>
                <p style="margin-top:16px;"><strong>Section 6 (Contributions):</strong></p>
                <ul><li>Employer and employee each 12% of basic + DA. Plus EDLI 0.50% + admin 0.50% from employer.</li></ul>
                <p style="margin-top:16px;"><strong>Sections 7Q, 14, 14B (Penalties):</strong></p>
                <ul><li>S.7Q: interest on delays. S.14: prosecution up to 3 years + fine. S.14B: damages 5-100%. Recovery as land revenue. Bank attachment.</li></ul>
                <p style="margin-top:16px;"><strong>Enrolment Campaign 2025:</strong> Nov 2025-Apr 2026. Voluntary regularisation with reduced penalties. Post-campaign: full exposure.</p>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> | <a href="https://shramsuvidha.gov.in" target="_blank" rel="noopener">USSP</a> | <a href="https://unifiedportal-emp.epfindia.gov.in" target="_blank" rel="noopener">Unified Portal</a> | <a href="https://indiacode.nic.in" target="_blank" rel="noopener">India Code</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: PF Registration in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about PF registration, who needs it, contribution rates, Rs 15,000 wage ceiling, penalties, and UAN for Mumbai employers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PF Registration',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is PF registration?</h3>
                        <div class="faq-expanded__a"><p>PF or Provident Fund registration is the mandatory process of enrolling an establishment with EPFO under the EPF and MP Act 1952. Applies to all establishments employing 20 or more persons. Creates obligation for employer and employees to contribute to three schemes: EPF retirement savings at 12 percent each, EPS pension at 8.33 percent from employer share, and EDLI life insurance at 0.50 percent employer. Registration done online through USSP portal shramsuvidha.gov.in. Establishment receives unique code for all PF transactions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who needs PF registration in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Every establishment in Mumbai employing 20 or more persons on any single day including corporate offices in BKC and Nariman Point, IT companies in Powai and Andheri, manufacturing units in Thane-Belapur and Andheri MIDC, restaurants and hotels with 20 plus staff, construction companies, security agencies, hospitals, schools, logistics companies in Bhiwandi, and retail chains. All employee categories count: permanent contract temporary casual daily-wage part-time. Once covered always covered even if headcount drops. Register within one month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the PF contribution rate?</h3>
                        <div class="faq-expanded__a"><p>Total employer cost 13 percent of basic wages plus DA per employee: 12 percent contribution split as EPF 3.67 percent plus EPS 8.33 percent, plus EDLI 0.50 percent, plus admin charges 0.50 percent. Employee cost 12 percent of basic plus DA deducted from salary entirely to EPF account. Grand total 25 percent of basic plus DA per employee per month. Mandatory on wages up to Rs 15,000. Above Rs 15,000 mandatory PF on Rs 15,000 and voluntary on actual wages with mutual consent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the Rs 15,000 wage ceiling?</h3>
                        <div class="faq-expanded__a"><p>Statutory wage ceiling for EPF is Rs 15,000 per month basic wages plus dearness allowance. Employees earning up to Rs 15,000 mandatorily covered with contributions on full wages. Employees above Rs 15,000 also covered but mandatory contribution calculated on Rs 15,000 not actual wages. Voluntary contributions on higher wages with mutual consent. EPS pension applies ONLY to employees earning up to Rs 15,000. Those joining above Rs 15,000 contribute only to EPF not EPS.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the penalties for PF non-compliance?</h3>
                        <div class="faq-expanded__a"><p>Severe and multi-layered: damages under S.14B from 5 percent to 100 percent of arrears depending on delay duration. Interest under S.7Q at notified rate on all delayed payments. Prosecution under S.14 imprisonment up to 3 years plus fine Rs 10,000 first offence and up to 5 years plus Rs 25,000 repeat. Recovery as arrears of land revenue with property attachment. Bank account attachment by EPFO. Employees Enrolment Campaign 2025 ending April 2026 offers reduced penalties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is UAN and why is it important?</h3>
                        <div class="faq-expanded__a"><p>UAN or Universal Account Number is unique lifetime 12-digit number assigned to every EPF member. Stays with employee throughout career across employers. When changing jobs same UAN carries forward with contributions from new employer linked to same account. Linked to Aadhaar PAN and bank account for KYC. With activated UAN employees can check PF balance online, download e-passbook, file transfer claims Form 13, file withdrawal claims Form 19, and receive SMS alerts on contributions.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>PF registration kisko karni padti hai?</strong> 20+ employees on any day = mandatory. Sab count hote hain: permanent, contract, temporary, daily-wage. USSP portal pe 1 mahine mein register karo. Ek baar cover = hamesha cover. Mumbai mein: BKC offices, Powai IT, Thane factories, restaurants (20+ staff), construction, security - sab ko. EPFO Regional Office BKC mein hai.</p>
                <p><strong>PF ka contribution kitna?</strong> Employee: 12% of basic + DA (salary se katega). Employer: 12% (3.67% EPF + 8.33% EPS) + 0.50% EDLI + 0.50% admin = 13%. Total: 25%. Example: Rs 12,000 basic pe employee ka Rs 1,440, employer ka Rs 1,560 = Rs 3,000/month per person. 15 tareekh tak deposit. Late pe damages 5-100%.</p>
                <p><strong>Rs 15,000 ceiling ka matlab?</strong> Basic + DA Rs 15,000 tak mandatory PF. Usse zyada pe Rs 15,000 pe mandatory, baaki optional (dono ki consent chahiye). EPS pension SIRF Rs 15,000 tak. Bahut IT companies basic low rakhti hain - abhi legal hai lekin Code on Wages 50% rule se badlega.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Enrolment Campaign 2025 Ending April 2026</h2>
            <div class="content-text">
                
                <p>EPFO's voluntary regularisation window with REDUCED penalties is closing. Post-April 2026: full backdated contributions, damages 5-100%, interest, prosecution (up to 3 years), bank account and property attachment. Every month of delay increases exposure. EPFO inspectors from BKC Regional Office actively target restaurants, construction, security, startups. Once-covered-always-covered means you cannot escape. Register NOW.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PF%20registration%20in%20Mumbai.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Establishment with EPFO Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">PF registration is mandatory for 20+ employees under the EPF & MP Act 1952. Employer 13% + Employee 12% = 25% of basic + DA funds retirement savings (EPF), pension (EPS), and life insurance (EDLI). Deposit by 15th monthly via ECR.</p>
                <p style="color:rgba(255,255,255,0.9);">Mumbai is India's largest employer base: BKC corporates, Powai IT, Thane manufacturing, 80,000+ restaurants, construction, security. All with 20+ must register. Enrolment Campaign 2025 ending April 2026 - reduced penalty window closing.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron delivers applicability assessment, USSP registration, employee enrollment (UAN+KYC), monthly ECR, salary structuring, inspection prep, and integrated EPF+ESIC+PT compliance from Marine Lines. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20PF%20registration%20in%20Mumbai.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=PF%20Registration%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20PF%20registration%20in%20Mumbai.%0A%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">PF Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides PF registration and employer compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">PF registration and employer compliance</div>
                <div class="pa-city-grid">
                    <a href="/pf-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/pf-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">End-to-end employer compliance</div>
                <div class="pa-cross-grid">
                    <a href="/esic-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Professional Tax</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/posh-compliance-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">POSH Compliance</div><div class="pa-card-sub">Mumbai</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers PF registration in Mumbai. Content reviewed half-yearly (Freshness Tier 2) reflecting EPF interest rate, Code on Social Security 2020 implementation, EPFO campaigns, and wage ceiling revisions.</p>
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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
