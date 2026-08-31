
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
    <title>IT & Software Accounting in Delhi - GST, TDS & LUT</title>
    <meta name="description" content="CA-led IT and software accounting in Delhi. GST export LUT filing, Section 194J TDS, ESOP taxation, SaaS startup compliance. Serving Nehru Place, Okhla, Rohini. Call +91 945 945 6700.">
    <link rel="canonical" href="/it-sector-accounting-services/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IT & Software Accounting in Delhi - GST, TDS & LUT">
    <meta property="og:description" content="CA-led IT and software accounting in Delhi. GST export LUT filing, Section 194J TDS, ESOP taxation, SaaS startup compliance. Serving Nehru Place, Okhla, Rohini. Call +91 945 945 6700.">
    <meta property="og:url" content="/it-sector-accounting-services/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IT & Software Accounting in Delhi - GST, TDS & LUT">
    <meta name="twitter:description" content="CA-led IT and software accounting in Delhi. GST export LUT filing, Section 194J TDS, ESOP taxation, SaaS startup compliance. Serving Nehru Place, Okhla, Rohini. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "IT Software Accounting Services in Delhi",
      "description": "CA-led IT and software accounting in Delhi. GST export LUT filing, Section 194J TDS, ESOP taxation, SaaS startup compliance. Serving Nehru Place, Okhla, Rohini. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/it-sector-accounting-services/delhi",
      "serviceType": "IT Software Accounting Services in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/it-sector-accounting-services/delhi",
        "price": "5000"
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
          "name": "IT Software Accounting Services India",
          "item": "https://www.patronaccounting.com/it-sector-accounting-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "IT Software Accounting Services in Delhi",
          "item": "https://www.patronaccounting.com/it-sector-accounting-services/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office handles IT compliance in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "5 zones. Nehru Place = South/East. CP = Central. Rohini = North. Patron files IT sector returns for all 5 zones from Rohini office."
          }
        },
        {
          "@type": "Question",
          "name": "Do software exporters need to pay GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Zero-rated under LUT (Rule 96A) if 5 conditions met (S.2(6) IGST). Without valid LUT: must pay IGST and claim refund. LUT must be filed before April 1 annually."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 194J TDS for IT?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Technical services (coding, testing): 2% TDS. Professional consulting: 10% TDS. Threshold Rs 30,000/year. CBDT Oct 2024 clarified classification. Correct deduction avoids S.40(a)(ia) disallowance."
          }
        },
        {
          "@type": "Question",
          "name": "Can Delhi IT startups claim S.80-IAC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. DPIIT-recognised startups incorporated after April 2016. 100% tax exemption for 3 consecutive years out of 10. Turnover ≤Rs 100Cr in claim year. Patron tracks eligibility windows."
          }
        },
        {
          "@type": "Question",
          "name": "What is the IT accounting fee?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Freelancer from Rs 5,000/month. Small IT firm Rs 10,000-18,000. Mid-size/SaaS Rs 20,000-35,000. GCC Rs 50,000+. Transfer pricing from Rs 75,000/year."
          }
        },
        {
          "@type": "Question",
          "name": "Do IT freelancers need GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If aggregate turnover >Rs 20L. For IT: S.44ADA presumptive up to Rs 75L (95% digital). No PT in Delhi = simpler than Maharashtra/Karnataka."
          }
        },
        {
          "@type": "Question",
          "name": "What about ESOP taxation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Grant (no tax), vesting (no tax), exercise (perquisite tax S.17(2)(vi) on FMV minus exercise price). S.80-IAC startups can defer 5 years. Patron tracks for all holders."
          }
        },
        {
          "@type": "Question",
          "name": "How fast is onboarding?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "48 hours. Month 1: LUT verification, FIRC audit, data migration, software config. Full monthly reporting with export classification from Month 2. Quick Answers IT company ke liye GST kitna? Domestic: 18% (SAC 9983). Export: zero-rated agar LUT file kiya ho. Freelancer ko ITR kaise file kare? Rs 75L tak S.44ADA se 50% profit. Usse zyada par full books + audit. Transfer pricing kab applicable? Jab international related-party transactions hon. Form 3CEB mandatory."
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
                        IT Software Accounting Services in Delhi: CA-Led Financial Management for Technology Companies
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">06 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, GST certificate, STPI registration (if applicable), bank statements, FIRC copies, previous ITR</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000/month for IT freelancers and small software firms in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> IT services, SaaS companies, software exporters, GCCs, STPI units, IT freelancers in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding within 48 hours; monthly books by 5th; GST by 20th; LUT before April 1</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">IT accounting for software exporters, SaaS startups, GCCs, and freelancers across Delhi.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20software%20accounting%20in%20Delhi." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'IT Software Accounting Services in Delhi',
                                            'city'     => 'Delhi',
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">IT exporter Nehru Place. LUT on time, FIRCs matched, S.194J correct. Zero GST demands. Export compliance sorted from Day 1.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, IT Services, Nehru Place</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">SaaS startup CP. Ind AS 115 subscription revenue. ESOP for 60 employees. S.80-IAC claimed. Series A due diligence passed cleanly.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CEO, SaaS Startup, CP</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">GCC Aerocity. Transfer pricing Form 3CEB done correctly. Intercompany reconciled. RCM on AWS/Azure tracked. Fortune 500 parent satisfied.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Singh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head, GCC, Aerocity</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">IT freelancer Rohini. S.44ADA ITR filed. GST handled. No PT hassle (Delhi advantage). Simple, clean, affordable at Rs 5K/month.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Gupta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Freelance Developer, Rohini</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>IT accounting with LUT export compliance, TDS management, and ESOP taxation from Delhi.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Challenges</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Fee Tiers</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Why Patron</a><a href="#benefits-section" class="toc-btn">Quality</a><a href="#comparison-section" class="toc-btn">Patron vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Software Accounting in Delhi: LUT, TDS, and Tech Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IT Software Accounting Services in Delhi Services at a Glance</strong></p>
                    <p>IT accounting = GST export LUT (Rule 96A zero-rated) + domestic 18% (SAC 9983) + S.194J TDS (2% technical / 10% professional) + Ind AS 115 (SaaS revenue) + ESOP taxation + transfer pricing (Form 3CEB for GCCs) + S.80-IAC startup holiday. STPI HQ in Delhi. HCL, Wipro, Tech Mahindra + thousands of SaaS startups. No PT. From Rs 5,000/month. 400+ IT clients.</p>
                </div>
                <p>Delhi NCR is one of India's largest IT ecosystems. For a comprehensive overview, see our <a href="/it-sector-accounting-services">IT Accounting</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>GST on IT</td><td>Domestic: 18% (SAC 9983). Export: zero-rated under LUT (Rule 96A)</td></tr><tr><td>Key Compliance</td><td>LUT filing, FIRC docs, S.194J TDS (2%/10%), ESOP tax, TP (Form 3CEB)</td></tr><tr><td>Cost From</td><td>Rs 5,000/month (freelancer); Rs 15,000 (mid-size IT)</td></tr><tr><td>Penalty Risk</td><td>Rs 25,000 no books; Rs 50/day late GST; 2% of intl txn value for no TP</td></tr><tr><td>Jurisdictions</td><td>5 Delhi GST zones; STPI HQ New Delhi; RoC Delhi</td></tr></tbody></table></div><p</p>
                <p>STPI HQ in East Kidwai Nagar. HCL, Wipro, Tech Mahindra in Nehru Place/CP. STPI units exported Rs 10.64L Cr in FY25. SaaS startups in Rohini, Dwarka, co-working spaces. No PT in Delhi. 5 GST zones. Patron Rohini office with 400+ IT clients and 20+ specialist CAs.</p>
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
                <h2 class="section-title">What Are IT Software Accounting Services?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Definition:</strong> Specialised financial recording, tax compliance, and reporting for technology companies under CGST Act 2017 (SAC 9983), IT Act 1961 (S.194J, 80-IAC, 92E), and Ind AS 115.</p><p><strong>Key differences from general accounting:</strong> Milestone/subscription revenue (Ind AS 115), technical vs professional TDS classification (2% vs 10%), forex receipts for exports, ESOP grant/vest/exercise accounting, and transfer pricing for cross-border related-party transactions.</p><p><strong>Delhi context:</strong> 5 GST zones. STPI HQ. LUT for exports. Reverse charge on AWS/Azure/Google Cloud (S.9(3) CGST). Co-working S&E registration.</p><p>See <a href="/accounting-services">Accounting Services</a> for general business accounting.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IT Software Accounting Services in Delhi:</strong></p>
                    <p><strong>LUT (Rule 96A):</strong> Letter of Undertaking filed annually on GST portal. Enables zero-rated exports without paying IGST. Must file before April 1.</p><p><strong>SAC 9983:</strong> Service Accounting Code for IT services. Domestic: 18% GST. Export: zero-rated under LUT.</p><p><strong>Section 194J:</strong> TDS on IT payments. 2% for technical services (coding, testing). 10% for professional consulting. CBDT Oct 2024 clarification.</p><p><strong>Section 80-IAC:</strong> 100% tax exemption for 3 consecutive years for DPIIT-recognised startups. Turnover ≤Rs 100Cr in claim year.</p><p><strong>Form 3CEB:</strong> Transfer pricing report for international related-party transactions. Due 31 October. Mandatory for GCCs.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IT Software Accounting Services in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IT / SaaS</span>
                        <strong>LUT + 194J</strong>
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
            <h2 class="section-title">Who Needs IT Accounting in Delhi</h2>
            <div class="content-text">
                
                <p><strong>IT Services Firms (Nehru Place, CP, Jasola):</strong> 18% GST domestic, zero-rated exports under LUT. S.194J at 2% on technical services. Monthly GST + TDS + Ind AS 115.</p><p><strong>SaaS Startups (Rohini, Dwarka, Okhla):</strong> Subscription revenue deferral, ESOP grants, Angel Tax (S.56(2)(viib)), DPIIT recognition, S.80-IAC tax holiday. Investor-ready from Day 1.</p><p><strong>GCCs (Aerocity, Jasola, Nehru Place):</strong> Transfer pricing (S.92E, Form 3CEB), intercompany invoicing, reverse charge GST on imported services (S.9(3)), Ind AS compliance.</p><p><strong>STPI Units:</strong> Softex filing, FIRC tracking, export turnover computation for LUT. Single-window clearance benefits.</p><p><strong>IT Freelancers:</strong> S.44ADA presumptive (50% of receipts, up to Rs 75L with 95% digital). GST if >Rs 20L. No PT in Delhi.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IT Accounting Challenges in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>LUT Filing + Export Compliance</td><td>Must file before April 1 annually. Missing = pay IGST on exports, lock working capital. 5 conditions under S.2(6) IGST must be continuously met</td></tr><tr><td>S.194J TDS Confusion (2% vs 10%)</td><td>Technical services = 2%. Professional consulting = 10%. Clients often deduct wrong rate. Form 26AS/AIS mismatches before ITR</td></tr><tr><td>ESOP Taxation (3 Stages)</td><td>Grant (no tax), vesting (no tax), exercise (perquisite S.17(2)(vi)). S.80-IAC startups can defer 5 years. Tracking 50-100 holders needs systems</td></tr><tr><td>Reverse Charge on Cloud Services</td><td>AWS, Azure, Google Cloud, GitHub, Slack = GST under S.9(3) RCM. Many startups miss entirely until audit</td></tr><tr><td>Finding IT-Specialist CAs</td><td>17,000+ providers, few know SAC 9983, LUT, FIRC, Ind AS 115 subscription, ESOP, transfer pricing. Series B needs investor-grade CA</td></tr>

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
            <h2 class="section-title">How Patron Onboards IT Companies in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">6-step process from LUT verification to audit-ready IT financials.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1-2</span><h3 class="step-title">Assessment + Accounting Design</h3><p class="step-description">Map business model (IT services/SaaS/GCC/freelance), revenue (domestic vs export), client geography, GST zone. Verify LUT and FIRC docs. Configure project-wise cost centres, export/domestic ledgers, S.194J TDS tracking, ESOP accounts, Ind AS 115 deferred revenue.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Designed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">LUT</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3-4</span><h3 class="step-title">Software Config + Monthly Compliance</h3><p class="step-description">Configure Zoho/Tally with SAC 9983, LUT indicators, TDS categories. Monthly: bank recon by 5th, GSTR-1 by 11th (Table 6A exports), GSTR-3B by 20th. RCM on imported cloud services computed. S.194J TDS tracked.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed monthly</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SAC 9983</text></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5-6</span><h3 class="step-title">TDS/Payroll/Export + Year-End Audit</h3><p class="step-description">S.194J TDS monthly. Payroll with ESOP perquisites. FIRCs matched to exports. LUT renewed annually. Year-end: S.44AB audit with export reconciliation, FIRC summary, Ind AS 115, ESOP charge, Form 3CEB for GCCs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exports matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Notes</th></tr></thead><tbody><tr><td>PAN Card</td><td>ITR + TDS</td><td>Entity + directors</td></tr><tr><td>GST Certificate (GSTIN)</td><td>Delhi zone + LUT filing</td><td>Active GSTIN needed for LUT</td></tr><tr><td>STPI Registration</td><td>Export unit status</td><td>If applicable</td></tr><tr><td>Bank + EEFC Statements</td><td>Revenue + forex reconciliation</td><td>Including foreign currency accounts</td></tr><tr><td>FIRCs</td><td>Export payment proof</td><td>For every export receipt. LUT compliance</td></tr><tr><td>Previous ITR + Financials</td><td>Opening balances, loss carry-forward</td><td>For continuity</td></tr><tr><td>ESOP Plan Document</td><td>Grant/vest/exercise accounting</td><td>Grant letter, vesting schedule, exercise price</td></tr><tr><td>Client Contracts / SOWs</td><td>Ind AS 115 + export classification</td><td>Revenue recognition assessment</td></tr><tr><td>Delhi S&E Registration</td><td>IT office compliance</td><td>Including co-working addresses</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Delhi tip:</strong> IT companies in co-working spaces (CP, Rohini) need their own S&E registration at the co-working address. The operator's GST does not substitute for yours. See <a href="/gst-registration">GST Registration</a>.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Accounting Fee Tiers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Freelancer / Solo Developer</td><td>Rs 5,000-8,000/month</td><td>Bookkeeping, ITR (S.44ADA), GST if applicable, bank recon</td></tr><tr><td>Small IT Firm (up to 25 emp)</td><td>Rs 10,000-18,000/month</td><td>Full accounting, GST, TDS, payroll, LUT, export docs</td></tr><tr><td>Mid-Size IT / SaaS Company</td><td>Rs 20,000-35,000/month</td><td>Ind AS 115, ESOP, multi-project, MIS, audit support</td></tr><tr><td>GCC / MNC Captive Centre</td><td>Rs 50,000+/month</td><td>Transfer pricing (3CEB), intercompany, virtual CFO, statutory audit</td></tr>

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
            <h2 class="section-title">IT Software Accounting Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Freelancer / Solo Developer</td><td>Rs 5,000 - Rs 8,000/month | Bookkeeping + ITR (S.44ADA) + GST</td></tr><tr><td>Small IT Firm (up to 25 employees)</td><td>Rs 10,000 - Rs 18,000/month | Full accounting + GST + TDS + LUT + payroll</td></tr><tr><td>Mid-Size IT / SaaS Company</td><td>Rs 20,000 - Rs 35,000/month | Ind AS 115 + ESOP + multi-project + MIS + audit</td></tr><tr><td>GCC / MNC Captive Centre</td><td>Rs 50,000+/month | Transfer pricing + intercompany + virtual CFO + statutory audit</td></tr><tr><td>GST Filing (Standalone)</td><td>From Rs 3,000/month | GSTR-1 + GSTR-3B with Table 6A exports</td></tr><tr><td>Transfer Pricing (Form 3CEB)</td><td>From Rs 75,000/year | Arm's length documentation + benchmarking</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IT Software Accounting Services in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20accounting%20in%20Delhi." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron for IT Accounting in Delhi?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Delhi Office (Rohini)</td><td>Serves Nehru Place, CP, Jasola, Okhla, Rohini. Walk-in + online. 400+ IT clients nationally</td></tr><tr><td>IT Sector Specialist</td><td>SAC 9983, LUT, FIRC, Ind AS 115, ESOP, S.194J (2%/10%), transfer pricing. 20+ specialist CAs</td></tr><tr><td>Export Compliance</td><td>LUT filed before April 1. 5 conditions (S.2(6) IGST) continuously verified. FIRC matched to invoices</td></tr><tr><td>Startup Ready</td><td>S.80-IAC tracking, DPIIT recognition, Angel Tax (S.56(2)(viib)), investor-grade financials</td></tr><tr><td>From Rs 5,000/Month</td><td>Freelancer to GCC. Scales with growth. No PT in Delhi. CA-reviewed quality at outsourced pricing</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> LUT must be filed before April 1 (miss it = pay IGST on exports). GST monthly (Rs 50/day late). S.194J TDS on every IT payment >Rs 30K. Form 3CEB due 31 October for GCCs. S.80-IAC windows expire. Every month of delay costs money.</p>

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
            <h2 class="section-title">Patron vs General CAs</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: LUT + Export</h3><p class="feature-text">LUT filed annually. 5 IGST conditions verified. FIRC matched. Table 6A correct. Zero-rated exports handled end-to-end.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Others: LUT Missed</h3><p class="feature-text">LUT not filed = IGST on exports. FIRCs not tracked. Working capital locked in refund claims for months.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: S.194J Correct</h3><p class="feature-text">2% technical vs 10% professional classified correctly. Form 26AS reconciled. No S.40(a)(ia) disallowance risk.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: ESOP + TP</h3><p class="feature-text">ESOP 3-stage taxation tracked. S.80-IAC deferral. Transfer pricing Form 3CEB for GCCs. Investor-ready.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 400+ IT Clients | 5,000+ GST Returns/Year</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"IT services exporter Nehru Place. Patron filed LUT on time, matched FIRCs, handled S.194J correctly. Zero GST demands. Export compliance sorted."</p><p style="font-weight:700;font-size:14px;margin:0;">- Director, IT Services, Nehru Place</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"SaaS startup CP. Patron handled Ind AS 115 subscription revenue, ESOP accounting for 60 employees, S.80-IAC claim. Series A investor due diligence passed cleanly."</p><p style="font-weight:700;font-size:14px;margin:0;">- CEO, SaaS Startup, Connaught Place</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Others Detailed</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron</th><th>General CA</th></tr></thead>
                    <tbody>
                        <tr><td>LUT/Export</td><td>Filed annually, FIRC tracked, Table 6A</td><td>Often missed, IGST paid on exports</td></tr><tr><td>S.194J TDS</td><td>2% vs 10% correctly classified</td><td>Applies wrong rate, 26AS mismatches</td></tr><tr><td>Ind AS 115</td><td>Milestone/subscription/T&M revenue</td><td>Simple accrual (incorrect for IT)</td></tr><tr><td>ESOP</td><td>3-stage tracking, S.80-IAC deferral</td><td>No ESOP capability</td></tr><tr><td>Transfer Pricing</td><td>Form 3CEB, arm's length, benchmarking</td><td>Not offered</td></tr><tr><td>Pricing</td><td>From Rs 5,000/month (specialist)</td><td>Similar but generalist</td></tr>

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
                
                <ul><li><a href="/it-sector-accounting-services">IT Accounting (National)</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="/gst-registration">GST Registration</a></li><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="/income-tax-return">Income Tax Return</a></li></ul>

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
                
                <p><strong>CGST Act 2017:</strong> SAC 9983 (IT services 18%); Rule 96A (LUT exports); S.9(3) (RCM on imported cloud services)</p><p><strong>IGST Act 2017:</strong> S.2(6) (5 conditions for export of services); zero-rating under LUT</p><p><strong>IT Act 1961:</strong> S.194J (2%/10% TDS); S.80-IAC (startup holiday); S.92E (transfer pricing); S.44ADA (presumptive); S.56(2)(viib) (Angel Tax); S.17(2)(vi) (ESOP perquisite)</p><p><strong>Penalties:</strong> S.271A: Rs 25K no books. S.271BA: Rs 1L no TP report. S.271G: 2% of intl txn value. S.47 CGST: Rs 50/day late.</p><p><strong>Delhi:</strong> No PT. S&E Act for IT offices. STPI HQ East Kidwai Nagar.</p>

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
                    <h2 class="faq-expanded__title">FAQs - IT Software Accounting in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about IT accounting, GST export LUT, Section 194J TDS, ESOP, and startup compliance in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IT Software Accounting Services in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles IT compliance in Delhi?</h3>
                        <div class="faq-expanded__a"><p>5 zones. Nehru Place = South/East. CP = Central. Rohini = North. Patron files IT sector returns for all 5 zones from Rohini office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Do software exporters need to pay GST?</h3>
                        <div class="faq-expanded__a"><p>Zero-rated under LUT (Rule 96A) if 5 conditions met (S.2(6) IGST). Without valid LUT: must pay IGST and claim refund. LUT must be filed before April 1 annually.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Section 194J TDS for IT?</h3>
                        <div class="faq-expanded__a"><p>Technical services (coding, testing): 2% TDS. Professional consulting: 10% TDS. Threshold Rs 30,000/year. CBDT Oct 2024 clarified classification. Correct deduction avoids S.40(a)(ia) disallowance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can Delhi IT startups claim S.80-IAC?</h3>
                        <div class="faq-expanded__a"><p>Yes. DPIIT-recognised startups incorporated after April 2016. 100% tax exemption for 3 consecutive years out of 10. Turnover ≤Rs 100Cr in claim year. Patron tracks eligibility windows.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the IT accounting fee?</h3>
                        <div class="faq-expanded__a"><p>Freelancer from Rs 5,000/month. Small IT firm Rs 10,000-18,000. Mid-size/SaaS Rs 20,000-35,000. GCC Rs 50,000+. Transfer pricing from Rs 75,000/year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do IT freelancers need GST?</h3>
                        <div class="faq-expanded__a"><p>If aggregate turnover >Rs 20L. For IT: S.44ADA presumptive up to Rs 75L (95% digital). No PT in Delhi = simpler than Maharashtra/Karnataka.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What about ESOP taxation?</h3>
                        <div class="faq-expanded__a"><p>Grant (no tax), vesting (no tax), exercise (perquisite tax S.17(2)(vi) on FMV minus exercise price). S.80-IAC startups can defer 5 years. Patron tracks for all holders.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How fast is onboarding?</h3>
                        <div class="faq-expanded__a"><p>48 hours. Month 1: LUT verification, FIRC audit, data migration, software config. Full monthly reporting with export classification from Month 2.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>IT company ke liye GST kitna?</strong> Domestic: 18% (SAC 9983). Export: zero-rated agar LUT file kiya ho.</p><p><strong>Freelancer ko ITR kaise file kare?</strong> Rs 75L tak S.44ADA se 50% profit. Usse zyada par full books + audit.</p><p><strong>Transfer pricing kab applicable?</strong> Jab international related-party transactions hon. Form 3CEB mandatory.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LUT Due Before April 1 - Don't Pay IGST on Exports</h2>
            <div class="content-text">
                
                <p>LUT missed = IGST on every export invoice. GST monthly (Rs 50/day late). S.194J on every IT payment >Rs 30K. Form 3CEB due 31 Oct for GCCs. S.80-IAC windows expire. 48-hour onboarding. From Rs 5,000/month.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20software%20accounting%20in%20Delhi." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert IT Software Accounting in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">IT accounting in Delhi covers GST export LUT, S.194J TDS, Ind AS 115, ESOP taxation, transfer pricing, and startup tax holidays for Delhi's thriving tech ecosystem.</p><p style="color:rgba(255,255,255,0.85);">Patron's Rohini office serves software exporters, SaaS startups, GCCs, and freelancers with 400+ IT clients, 20+ specialist CAs, and a 4.9 Google rating.</p><p style="color:rgba(255,255,255,0.85);">Whether exporting from Nehru Place, building SaaS in CP, managing a GCC in Aerocity, or freelancing from Rohini - Patron ensures IT finances are classified, compliant, and investor-ready.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20accounting%20in%20Delhi." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=IT%20Accounting%20Delhi&body=Hi%2C%20I%20need%20IT%20software%20accounting%20in%20Delhi." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IT Accounting - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert IT software accounting across major Indian cities</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise IT Accounting</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/it-sector-accounting-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/it-sector-accounting-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/it-sector-accounting-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">IT compliance</div><div class="pa-cross-grid"><a href="/accounting-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/statutory-audit/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Delhi</div></div></a><a href="/tax-audit/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">Delhi</div></div></a><a href="/tax-planning/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. SAC 9983, LUT Rule 96A, Section 194J (2%/10%), ESOP perquisite rules, and S.80-IAC eligibility are verified.</p>
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
