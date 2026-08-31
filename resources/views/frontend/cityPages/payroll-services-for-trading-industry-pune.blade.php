
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
    <title>Trading Business Payroll in Pune - PF, ESIC & TDS</title>
    <meta name="description" content="CA-assisted payroll for trading companies in Pune. Shops Act, bonus, PF, ESIC, PT, LWF, and seasonal staff compliance for wholesalers, retailers, and commodity brokers. Market Yard to peth shops. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-trading-industry/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trading Business Payroll in Pune - PF, ESIC & TDS">
    <meta property="og:description" content="CA-assisted payroll for trading companies in Pune. Shops Act, bonus, PF, ESIC, PT, LWF, and seasonal staff compliance for wholesalers, retailers, and commodity brokers. Market Yard to peth shops. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-trading-industry/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trading Business Payroll in Pune - PF, ESIC & TDS">
    <meta name="twitter:description" content="CA-assisted payroll for trading companies in Pune. Shops Act, bonus, PF, ESIC, PT, LWF, and seasonal staff compliance for wholesalers, retailers, and commodity brokers. Market Yard to peth shops. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Payroll Services for Trading Companies in Pune",
      "description": "CA-assisted payroll for trading companies in Pune. Shops Act, bonus, PF, ESIC, PT, LWF, and seasonal staff compliance for wholesalers, retailers, and commodity brokers. Market Yard to peth shops. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-trading-industry/pune",
      "serviceType": "Payroll Services for Trading Companies in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
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
        "url": "https://www.patronaccounting.com/payroll-services-for-trading-industry/pune",
        "price": "2999"
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
          "name": "Trading Payroll in India | Commission & Multi-Branch Payroll",
          "item": "https://www.patronaccounting.com/payroll-services-for-trading-industry"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Payroll Services for Trading Companies in Pune",
          "item": "https://www.patronaccounting.com/payroll-services-for-trading-industry/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles trading company payroll compliance in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Labour Commissioner Pune oversees Shops Act and Bonus Act compliance. EPFO Regional Office Pune handles PF. ESIC Regional Office Pune manages ESI. GRAS portal handles Maharashtra PT. PMC handles Gumasta licences. Patron Pune office coordinates with all authorities."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get trading company payroll services done online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron provides fully digital payroll processing for Pune trading companies. Attendance data uploaded via secure portal or Excel. All statutory filings completed online. Walk-in consultations at Wagholi office available."
          }
        },
        {
          "@type": "Question",
          "name": "What is the trading company payroll fee in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Fees start from Rs 2,999 per month for up to 25 employees including salary processing and statutory compliance. Multi-location firms with 75 plus employees pay Rs 12,000 to Rs 25,000. Annual bonus computation available separately from Rs 3,000."
          }
        },
        {
          "@type": "Question",
          "name": "How long does trading company payroll setup take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard setup takes 5 to 8 working days including Gumasta verification, employee onboarding, CTC restructuring for Code on Wages, and PF ESIC PT setup. First payroll cycle processes within 3 working days of attendance finalisation."
          }
        },
        {
          "@type": "Question",
          "name": "Is Gumasta licence required for payroll compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every trading establishment in Maharashtra must hold a valid Gumasta licence under the Shops and Establishments Act. It is the legal basis for employer-employee relationship and required for EPF ESIC and PT registration. Available through PMC online portal."
          }
        },
        {
          "@type": "Question",
          "name": "What are minimum wages for shop employees in Maharashtra 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra revised minimum wages on 4 February 2026 effective 1 January 2026 for 60 scheduled employments. Pune falls under Zone I with highest rates. Rates differ by skill category. Trading firms must ensure all employees receive at least the prescribed minimum."
          }
        },
        {
          "@type": "Question",
          "name": "What is the LWF contribution for trading companies in Maharashtra?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Employee contribution Rs 25 plus employer Rs 75 per employee totalling Rs 100. Filed semi-annually on public.mlwb.in portal. Due dates July 15 and January 15. Applicable to establishments with 5 or more employees. Late filing attracts interest charges."
          }
        },
        {
          "@type": "Question",
          "name": "How to handle seasonal staff payroll for trading businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron provides a seasonal workforce module for Pune trading firms. Daily-wage labourers onboarded within 24 hours with Aadhaar-based records. Daily wages computed per attendance with overtime at double rate. Full Payment of Wages Act compliance maintained. Quick Answers Pune mein trading company ka payroll kitne mein hota hai? Rs 2,999 per month se start hota hai 25 employees tak. Multi-location firms ke liye Rs 12,000-25,000. Trading firm ko bonus dena zaroori hai kya? Haan. 20 se zyada employees hain toh Payment of Bonus Act ke under 8.33% to 20% bonus mandatory hai. 8 mahine mein disburse karna padta hai. Seasonal staff ko PF dena padta hai kya? Agar firm mein total 20+ employees hain aur seasonal worker bhi regular basis pe kaam karta hai, toh PF applicable ho sakta hai."
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
                        Payroll Services for Trading Companies in Pune: Shops Act-Compliant Salary Processing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">18 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Gumasta licence (Shop Act registration), employee master data, PAN, Aadhaar, attendance records, salary structure, PF/ESIC registration, PTRC certificate</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 2,999 per month for up to 25 employees (payroll + statutory compliance)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Wholesale and retail trading firms, commodity brokers, import-export companies, APMC Market Yard traders, and peth-district shop owners in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Monthly payroll processed within 3 working days of attendance finalisation; statutory filings by prescribed deadlines</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trading%20Payroll%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20need%20trading%20payroll%20in%20Pune.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20company%20payroll%20services%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Trading Payroll',
                                            'city'     => 'Pune',
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
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron handles payroll across our Market Yard wholesale counter, Narayan Peth shop, and Hadapsar godown seamlessly. Multi-location PT and PF codes managed automatically. Zero hassle.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kulkarni</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Wholesale Trading, APMC Market Yard</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron's payroll team handles 200+ employees without a single error month on month. The Bonus Act computation saved us from a potential imprisonment risk we didn't even know about.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Shah</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Partner, Textile Wholesaler, Kasba Peth</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">We hire 40 temporary workers during mango season. Patron onboards them within 24 hours with proper attendance records and minimum wage compliance. Labour Inspector had zero findings.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Patil</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trader, Fruit Market, Gultekdi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">The overtime tracking during Diwali was critical - our shop extended hours for 3 weeks. Patron auto-computed double-rate overtime and maintained the register. No penalties.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Electronics Retail, Shukrawar Peth</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Demandify Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From APMC Market Yard wholesalers to peth-district retailers - Pune trading firms trust Patron for compliant, accurate payroll.</p>
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
            <h2 class="section-title">Payroll Services for Trading Companies in Pune: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trading Payroll Services at a Glance</strong></p>
                    <p>Payroll services for trading companies in Pune cover salary computation, statutory deductions (PF, ESIC, Maharashtra PT, TDS), Payment of Bonus Act compliance, Maharashtra LWF filings, Gumasta licence maintenance, and seasonal workforce payroll management. Mandatory for all trading establishments - wholesale, retail, commodity broking, and import-export - registered under the Maharashtra Shops and Establishments Act, 2017.</p>
                </div>
                <p>Pune is one of Maharashtra's most active trading hubs, with the APMC Market Yard at Gultekdi serving as the wholesale nerve centre. The peth trading districts - Shukrawar Peth, Narayan Peth, Kasba Peth, and Budhwar Peth - house thousands of shops. Pimpri-Chinchwad forms the auto parts trading corridor. Commodity brokers operate from JM Road and Erandwane. Learn more about <a href="/payroll-services-for-trading-industry">payroll services for trading companies across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Acts</td><td>Maharashtra Shops Act 2017 (amended 2025), Bonus Act 1965, EPF Act 1952, ESIC Act 1948, Maharashtra PT Act 1975, Code on Wages 2019, LWF Act</td></tr>
                        <tr><td>Applicable To</td><td>Wholesale traders, retail shops, commodity brokers, import-export firms, APMC Market Yard merchants, peth-district shops in Pune</td></tr>
                        <tr><td>Timeline</td><td>Payroll within 3 days; PF/ESIC by 15th; TDS by 7th; LWF by Jul 15 and Jan 15; Bonus within 8 months</td></tr>
                        <tr><td>Cost Starting From</td><td>Rs 2,999/month for up to 25 employees</td></tr>
                        <tr><td>Penalties</td><td>EPF: damages up to 100%; Bonus Act: imprisonment up to 6 months; Shops Act: Rs 50,000 first offence</td></tr>
                        <tr><td>Key Portals</td><td>EPFO Portal, ESIC, mahagst.gov.in (PT), public.mlwb.in (LWF), PMC portal (Gumasta)</td></tr>
                        <tr><td>Jurisdictional Office</td><td>Labour Commissioner Pune; EPFO Regional Office Pune; Shops Inspector PMC; Gumasta Office PMC</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Every trading establishment must register under the Maharashtra Shops Act 2017 and hold a Gumasta licence. The 2025 Amendment raised the registration threshold to 20 workers and increased the quarterly overtime limit to 144 hours. Trading firms with 20+ employees must comply with the Payment of Bonus Act (8.33%-20%). The Code on Wages (effective November 2025) requires 50% basic pay. Maharashtra minimum wages were revised effective 1 January 2026 with Pune in Zone I. Patron Accounting's Pune office at RTC Silver, Wagholi handles the complete trading company payroll lifecycle.</p>
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
                <h2 class="section-title">What Is Payroll Services for Trading Companies?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll services for trading companies is the end-to-end processing of employee salaries, statutory deductions, bonus computation, seasonal workforce management, and Shops Act compliance for wholesale, retail, and commodity trading establishments, governed by the Maharashtra Shops and Establishments Act, 2017 and applicable labour laws.</p>
                    <p>Trading company payroll carries unique complexity. A wholesale grain merchant at APMC Market Yard may employ 5 permanent staff and hire 15-20 daily-wage labourers during harvest peak. A retail electronics shop in Narayan Peth may have 8 employees with commission structures. A commodity broking firm on JM Road may have salaried analysts and contract support staff. Each requires different payroll treatment.</p>
                    <p>The Maharashtra Shops Act defines a shop as any premises where goods are sold, including connected offices, store-rooms, godowns, and warehouses. A trading firm's Market Yard counter, Hadapsar godown, and Shivaji Nagar retail outlet are all covered. Patron's CA team structures trading company payroll to handle multi-location operations, seasonal scaling, and the full statutory compliance stack under one engagement.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trading Payroll:</strong></p>
                    <ul>
                        <li><strong>Gumasta Licence:</strong> Shop Act registration mandatory for all trading premises in Maharashtra. Issued by Pune Municipal Corporation.</li>
                        <li><strong>Payment of Bonus Act 1965:</strong> 8.33%-20% annual bonus for establishments with 20+ employees. Allocable surplus-based. Disbursement within 8 months.</li>
                        <li><strong>Maharashtra LWF:</strong> Employee Rs 25 + employer Rs 75 per employee. Semi-annual on public.mlwb.in. Due July 15 and January 15.</li>
                        <li><strong>Zone I Minimum Wages:</strong> Highest Maharashtra rates applicable to Pune PMR. Revised 4 February 2026 effective 1 January 2026.</li>
                        <li><strong>Code on Wages 2019:</strong> Basic pay minimum 50% of total wages. Effective November 2025. Impacts CTC structuring for trading firms.</li>
                        <li><strong>Shops Act 2025 Amendment:</strong> Registration threshold raised to 20 workers. Quarterly overtime limit increased to 144 hours.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trading Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Trading</span>
                        <strong>Pune Traders</strong>
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
            <h2 class="section-title">Who Needs Trading Company Payroll Services in Pune?</h2>
            <div class="content-text">
                
                <p><strong>APMC Market Yard Traders (Gultekdi):</strong> Permanent staff year-round plus daily-wage labourers during mango season, onion harvest, and flower market peaks. Payroll must handle both permanent and casual labour seamlessly with <a href="/shop-act-registration">Shop Act registration</a> compliance.</p>
                <p><strong>Peth-District Retailers (Shukrawar, Narayan, Kasba, Budhwar Peth):</strong> Traditional establishments with 5-50 employees. Many have operated for generations but need payroll formalisation. <a href="#">Maharashtra PT</a> and Gumasta mandatory.</p>
                <p><strong>Commodity Brokers (JM Road, Erandwane, KK Market):</strong> MCX/NCDEX operations with salaried analysts and back-office staff. PF, ESIC, PT, TDS compliance plus SEBI record-keeping requirements.</p>
                <p><strong>Auto Parts Traders (PCMC, Bhosari):</strong> Warehouse staff, sales teams, and logistics across multiple locations. Multi-location PF and PT code management essential.</p>
                <p><strong>Import-Export Firms:</strong> Foreign remittance-linked compensation, multi-currency adjustments, and FEMA compliance alongside standard statutory obligations. <a href="/payroll-services/pune">Payroll services in Pune</a> cover all employer requirements.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trading Company Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Salary Processing</td><td>Gross pay (basic, DA, HRA, conveyance, special allowance), net salary after deductions, bank advice, payslips. Fixed-salary and commission-based sales staff</td></tr>
                        <tr><td>Payment of Bonus Act Compliance</td><td>Annual bonus 8.33%-20% for 20+ employee firms. Allocable surplus calculation. Set-on/set-off tracking. Bonus registers. Disbursement within 8 months</td></tr>
                        <tr><td>EPF and ESIC Compliance</td><td>Monthly ECR by 15th. ESIC for employees up to Rs 21,000/month. PF for godown workers and salaried staff. Transfer and withdrawal support</td></tr>
                        <tr><td>Maharashtra Professional Tax</td><td>Monthly PTRC deduction per Maharashtra slabs on GRAS portal by 15th per Feb 2026 notification. PTEC Rs 2,500/year for proprietors/partners/directors</td></tr>
                        <tr><td>Maharashtra Labour Welfare Fund</td><td>Semi-annual LWF: employee Rs 25 + employer Rs 75. Filed on public.mlwb.in by July 15 and January 15. For 5+ employee establishments</td></tr>
                        <tr><td>TDS on Salaries (Section 192)</td><td>Monthly TDS, quarterly Form 24Q, year-end Form 16. TDS on commission under Section 194H where applicable</td></tr>
                        <tr><td>Minimum Wage Monitoring</td><td>Zone I (Pune PMR) rates tracked per Maharashtra notifications. Skill-based mapping. Auto-update within 48 hours of notification</td></tr>
                        <tr><td>Seasonal and Daily-Wage Payroll</td><td>Temporary staff during harvest peaks, festive and wedding seasons. Daily rate computation. Attendance-based pay with Payment of Wages Act compliance</td></tr>
                        <tr><td>Gumasta and Shops Act Compliance</td><td>Employee registers, wage registers, attendance and overtime registers per Maharashtra Shops Act. Gumasta renewal tracking with PMC</td></tr>

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
            <h2 class="section-title">How Trading Company Payroll Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers the complete trading company payroll lifecycle - from data collection through salary configuration, monthly processing, statutory filing, bonus computation, and year-end compliance with Gumasta renewal.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Share Trading Firm Data with Patron's Pune Office</h3>
        <p class="step-description">Submit Gumasta licence, PAN, GSTIN, employee master data, EPF and ESIC registrations, and PTRC certificate. For multi-location firms across APMC Market Yard, peth shops, and godowns, share site-wise employee allocation. Walk-in at Patron's Wagholi office or upload via secure portal.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Gumasta verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-site staff mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PF/ESIC/PT codes confirmed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="30" y="38" width="60" height="12" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><rect x="30" y="54" width="40" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><text x="60" y="31" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Gumasta</text><text x="60" y="47" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Employee Data</text></svg></div>
            <span class="illustration-label">Data Onboarded</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Configure Salary Structures and Compliance Parameters</h3>
        <p class="step-description">Verify CTC against Code on Wages 50% basic rule and Maharashtra Zone I minimum wages. Commission-based pay mapped with TDS treatment under Section 194H. Bonus eligibility flagged for 20+ employee firms. PF, ESIC, PT, and LWF configured. Daily-wage templates set up for APMC seasonal labour.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>50% basic verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zone I min wages applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bonus eligibility flagged</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CTC</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="40" y="48" font-size="6" fill="#10B981" font-weight="600" text-anchor="start" font-family="Arial">50% Basic</text><text x="40" y="58" font-size="6" fill="#E8712C" font-weight="600" text-anchor="start" font-family="Arial">Zone I Min</text><text x="40" y="68" font-size="6" fill="#14365F" font-weight="600" text-anchor="start" font-family="Arial">Commission</text></svg></div>
            <span class="illustration-label">CTC Configured</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Process Monthly Payroll from Attendance Data</h3>
        <p class="step-description">Compute gross wages, deduct EPF (12%+12%), ESIC (0.75%+3.25% for eligible staff), Maharashtra PT per slabs, TDS Section 192, and LWF. Overtime beyond 9 hours/day or 48 hours/week at double rate per Shops Act. Net salary computed and bank advice files generated for all Pune trading locations.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Overtime at 2x computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All deductions applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank advice generated</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAYROLL</text><line x1="35" y1="38" x2="85" y2="38" stroke="#F5A623" stroke-width="1.5"/><text x="42" y="52" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">PF</text><text x="53" y="52" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">ESI</text><text x="64" y="52" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">PT</text><text x="75" y="52" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">TDS</text></svg></div>
            <span class="illustration-label">Payroll Processed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File Statutory Returns and Deposit Contributions</h3>
        <p class="step-description">EPF ECR by 15th via EPFO Unified Portal. ESIC by 15th. Maharashtra PTRC on GRAS portal by 15th per Feb 2026 notification. TDS by 7th. LWF on public.mlwb.in by July 15 and January 15. Challans with employee-wise breakup generated for records and audit trail.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PF/ESIC by 15th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS by 7th, LWF semi-annual</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PTRC by 15th</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M53 35l4 4 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="62" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Filed</text></svg></div>
            <span class="illustration-label">Returns Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Compute and Disburse Annual Bonus</h3>
        <p class="step-description">For 20+ employee trading firms, compute allocable surplus from P&L. Bonus between 8.33% minimum and 20% maximum of qualifying wages. Set-on and set-off from previous years applied. Bonus registers maintained per prescribed format. Disbursement tracked within 8 months of accounting year close.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Allocable surplus calculated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Set-on/set-off applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bonus registers maintained</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BONUS</text><line x1="35" y1="36" x2="85" y2="36" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="7" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">8.33%-20%</text><text x="60" y="65" font-size="6" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Allocable Surplus</text></svg></div>
            <span class="illustration-label">Bonus Computed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Year-End Compliance and Gumasta Renewal</h3>
        <p class="step-description">Form 16 for all employees, annual PF and ESIC returns, bonus registers, LWF annual returns, Shops Act-compliant employee and wage registers. Gumasta licence renewal tracked and filed with Pune Municipal Corporation online portal before expiry.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registers complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Gumasta renewed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="18" width="50" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="35" y="46" width="50" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="60" y="32" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Form 16</text><text x="60" y="60" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Gumasta Renew</text></svg></div>
            <span class="illustration-label">Year Closed</span>
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
            <h2 class="section-title">Documents Required for Trading Company Payroll in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Gumasta Licence:</strong> Valid Shop Act registration from Pune Municipal Corporation. Mandatory for all trading establishments.</li><li><strong>PAN and GSTIN:</strong> Required for TDS filing, bonus computation, and statutory registration.</li><li><strong>Employee Master Data:</strong> Name, Aadhaar, PAN, DOB, DOJ, designation, salary structure, bank account for each employee.</li><li><strong>EPF and ESIC Registration:</strong> Establishment PF code and ESIC number for firms with 20+ employees (EPF) and ESIC-eligible workforce.</li><li><strong>PTRC Registration:</strong> 12-digit TIN from GRAS portal for all trading firms with salaried employees.</li><li><strong>Monthly Attendance Records:</strong> Biometric, manual registers, or digital time-tracking for salary and overtime computation.</li><li><strong>Previous Year P&L Account:</strong> Required for Payment of Bonus Act allocable surplus computation.</li><li><strong>Salary Structure and CTC:</strong> Existing payslips or breakup for Code on Wages 50% basic verification.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Pune-Specific Tip:</strong> For APMC Market Yard traders at Gultekdi hiring daily-wage labour during harvest peaks, Patron provides a daily attendance template with auto-computation of wages, overtime, and Payment of Wages Act compliance. This eliminates informal cash-payment risk that attracts Labour Commissioner scrutiny.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trading Company Payroll Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Seasonal Workforce Scaling</td><td>APMC harvest peaks and Diwali retail rush create hiring spikes; informal cash payments attract Labour Commissioner penalties</td><td>Scalable templates onboarding seasonal staff within 24 hours with full documentation and minimum wage compliance</td></tr>
                        <tr><td>Multi-Location Payroll</td><td>Market Yard + peth shop + godown with different staff, hours, and potentially separate Gumasta registrations</td><td>Consolidated multi-location payroll with location-wise reporting and separate PF/PT codes managed automatically</td></tr>
                        <tr><td>Bonus Act Computation</td><td>Firms crossing 20-employee threshold unaware of mandatory bonus; imprisonment risk for non-payment</td><td>Auto-flagging bonus eligibility; allocable surplus calculation; registers maintained; disbursement tracked</td></tr>
                        <tr><td>Festive Overtime Compliance</td><td>Extended hours during Diwali/wedding season without proper overtime register; underpayment at 1x instead of 2x</td><td>Per-employee overtime tracking with auto-computed double-rate payments; overtime register maintained per Shops Act</td></tr>
                        <tr><td>Informal Cash Payments</td><td>Traditional peth shops paying partly in cash without wage registers; Labour Inspector penalties</td><td>Migration from informal to compliant digital payroll with full documentation for audit readiness</td></tr>

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
            <h2 class="section-title">Fees for Trading Company Payroll Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Payroll + Statutory (up to 25 employees)</td><td>Rs 2,999 - Rs 5,000/month</td></tr>
                        <tr><td>Payroll + Statutory (26-75 employees)</td><td>Rs 5,000 - Rs 12,000/month</td></tr>
                        <tr><td>Payroll + Statutory (76-200 employees)</td><td>Rs 12,000 - Rs 25,000/month</td></tr>
                        <tr><td>Payroll + Statutory (201-500 employees)</td><td>Rs 25,000 - Rs 45,000/month</td></tr>
                        <tr><td>Bonus Computation (annual)</td><td>Rs 3,000 - Rs 8,000</td></tr>
                        <tr><td>Gumasta Renewal (per location)</td><td>Rs 1,500 - Rs 3,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trading Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20payroll%20in%20Pune.%20Please%20share%20details%20and%20pricing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trading Company Payroll Timeline for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Data Collection and Setup</td><td>Day 1-3</td></tr>
                        <tr><td>Salary Structure Configuration</td><td>Day 4-5</td></tr>
                        <tr><td>First Payroll Cycle</td><td>Day 6-8</td></tr>
                        <tr><td>Statutory Filing</td><td>TDS by 7th; PF/ESIC/PTRC by 15th; LWF by Jul 15/Jan 15</td></tr>
                        <tr><td>Bonus Computation</td><td>Annual - within 8 months of accounting year close</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>City Processing Note:</strong> All filings handled digitally - no visit to Labour Commissioner, EPFO, or PMC office required. Patron's Pune office at RTC Silver, Wagholi serves trading firms across APMC Market Yard (Gultekdi), Shukrawar Peth, Narayan Peth, Kasba Peth, Pimpri-Chinchwad, JM Road, and all Pune trading zones. Walk-in consultations available.</p>

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
            <h2 class="section-title">Why Choose Patron for Trading Company Payroll in Pune</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office Presence</h3><p>RTC Silver, Wagholi - serves trading firms across APMC Market Yard, Shukrawar Peth, Narayan Peth, Kasba Peth, PCMC, JM Road. Walk-in and site visits.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Trading-Specific Expertise</h3><p>Only Pune CA firm combining Shops Act payroll, Bonus Act computation, seasonal scaling, multi-location consolidation, and Gumasta maintenance in one engagement.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>24-Hour Seasonal Onboarding</h3><p>APMC daily-wage labour and festive retail staff onboarded within 24 hours with full documentation, minimum wage compliance, and Payment of Wages Act adherence.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>15+ years experience, 50,000+ documents filed, 4.9 Google rating. ISO 9001:2015 certified. Trading payroll from Rs 2,999/month.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Pune's trading community with both in-person support and digital delivery. Trusted by Hyundai, Asian Paints, Bridgestone, and hundreds of Pune trading companies.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Professional Trading Company Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Patron Professional Service</th><th>In-House (Firm Staff)</th></tr></thead>
                    <tbody>
                        <tr><td>Bonus Computation</td><td>Automated allocable surplus + set-on/off + registers</td><td>Manual calculation; errors in surplus</td></tr>
                        <tr><td>Seasonal Scaling</td><td>24-hour onboarding with full compliance</td><td>Cannot onboard quickly; informal hiring</td></tr>
                        <tr><td>Maharashtra LWF</td><td>Semi-annual filing on public.mlwb.in by due date</td><td>Missed deadlines; interest charges</td></tr>
                        <tr><td>Overtime Tracking</td><td>Auto-computed at double rate; register maintained</td><td>No register; penalty exposure</td></tr>
                        <tr><td>Gumasta Renewal</td><td>Tracked and renewed before expiry</td><td>Often missed; shop at risk of closure</td></tr>

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
            <h2 class="section-title">Related Services for Pune Trading Companies</h2>
            <div class="content-text">
                
                <p>Trading companies in Pune often need complementary services:</p>
                <ul><li><a href="/payroll-services-for-trading-industry">Trading Payroll (India)</a> - National overview of trading company payroll services.</li>
                    <li><a href="/payroll-services">Payroll Services</a> - General payroll for all business types.</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Full accounting for trading businesses.</li>
                    <li><a href="#">Professional Tax Registration</a> - Maharashtra PTRC/PTEC.</li>
                    <li><a href="/shop-act-registration">Shop Act Registration</a> - Gumasta licence for trading establishments.</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - Section 44AB audit for trading firms.</li>
                    <li><a href="/gst-registration">GST Registration</a> - GST for traders and wholesalers.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Trading Company Payroll in Pune</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p>
                <ul><li><strong>Maharashtra Shops & Establishments Act 2017:</strong> All trading establishments. Operating hours 7 AM-8:30 PM. Max 9 hrs/day, 48 hrs/week. Overtime at 2x. 2025 Amendment: threshold 20 workers, quarterly OT limit 144 hours. Gumasta mandatory.</li>
                    <li><strong>Payment of Bonus Act 1965:</strong> 20+ employees. Minimum 8.33%, maximum 20%. Allocable surplus-based. Within 8 months. Penalty: imprisonment up to 6 months.</li>
                    <li><strong>EPF Act 1952:</strong> 20+ employees. 12%+12% on basic. ECR by 15th. Covers permanent and regular contract employees.</li>
                    <li><strong>ESIC Act 1948:</strong> Employees up to Rs 21,000/month. Employer 3.25%, employee 0.75%.</li>
                    <li><strong>Payment of Wages Act 1936:</strong> Wages within 7 days for under 1,000 workers. Penalty up to Rs 7,500 for delays.</li>
                    <li><strong>Maharashtra PT Act 1975:</strong> PTRC mandatory. Due 15th per Feb 2026 notification. PTEC Rs 2,500/year.</li>
                    <li><strong>Code on Wages 2019:</strong> Basic pay minimum 50% of total wages. Overtime at double rate. Effective November 2025.</li>
                    <li><strong>Maharashtra LWF Act:</strong> 5+ employees. Rs 25 employee + Rs 75 employer. Semi-annual on public.mlwb.in. July 15 and January 15.</li>
                    <li><strong>Minimum Wages Act 1948:</strong> Maharashtra revision 4 Feb 2026, effective 1 Jan 2026. Pune Zone I (highest rates). Skill-based categories.</li></ul>
                <p style="margin-top:16px;"><strong>Key Penalties:</strong></p>
                <ul><li>Shops Act first offence: <strong>Rs 50,000 fine</strong></li>
                    <li>Bonus Act non-payment: <strong>Imprisonment up to 6 months</strong> and/or Rs 1,000 fine</li>
                    <li>EPF default: <strong>Damages up to 100%</strong> of arrears</li>
                    <li>Payment of Wages delay: <strong>Rs 7,500 penalty</strong></li>
                    <li>Maharashtra LWF late: <strong>Interest charges compounding</strong></li></ul>
                <p style="margin-top:16px;"><strong>External Authority:</strong> <a href="https://www.maharashtra.gov.in/" target="_blank" rel="noopener">Maharashtra Government Labour Department</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions: Trading Company Payroll in Pune</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about trading company payroll, Shops Act, bonus, minimum wages, seasonal staff, and Gumasta compliance for Pune traders.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trading Payroll',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles trading company payroll compliance in Pune?</h3>
                        <div class="faq-expanded__a"><p>Labour Commissioner Pune oversees Shops Act and Bonus Act compliance. EPFO Regional Office Pune handles PF. ESIC Regional Office Pune manages ESI. GRAS portal handles Maharashtra PT. PMC handles Gumasta licences. Patron Pune office coordinates with all authorities.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get trading company payroll services done online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron provides fully digital payroll processing for Pune trading companies. Attendance data uploaded via secure portal or Excel. All statutory filings completed online. Walk-in consultations at Wagholi office available.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the trading company payroll fee in Pune?</h3>
                        <div class="faq-expanded__a"><p>Fees start from Rs 2,999 per month for up to 25 employees including salary processing and statutory compliance. Multi-location firms with 75 plus employees pay Rs 12,000 to Rs 25,000. Annual bonus computation available separately from Rs 3,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does trading company payroll setup take in Pune?</h3>
                        <div class="faq-expanded__a"><p>Standard setup takes 5 to 8 working days including Gumasta verification, employee onboarding, CTC restructuring for Code on Wages, and PF ESIC PT setup. First payroll cycle processes within 3 working days of attendance finalisation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is Gumasta licence required for payroll compliance?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every trading establishment in Maharashtra must hold a valid Gumasta licence under the Shops and Establishments Act. It is the legal basis for employer-employee relationship and required for EPF ESIC and PT registration. Available through PMC online portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are minimum wages for shop employees in Maharashtra 2026?</h3>
                        <div class="faq-expanded__a"><p>Maharashtra revised minimum wages on 4 February 2026 effective 1 January 2026 for 60 scheduled employments. Pune falls under Zone I with highest rates. Rates differ by skill category. Trading firms must ensure all employees receive at least the prescribed minimum.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the LWF contribution for trading companies in Maharashtra?</h3>
                        <div class="faq-expanded__a"><p>Employee contribution Rs 25 plus employer Rs 75 per employee totalling Rs 100. Filed semi-annually on public.mlwb.in portal. Due dates July 15 and January 15. Applicable to establishments with 5 or more employees. Late filing attracts interest charges.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to handle seasonal staff payroll for trading businesses?</h3>
                        <div class="faq-expanded__a"><p>Patron provides a seasonal workforce module for Pune trading firms. Daily-wage labourers onboarded within 24 hours with Aadhaar-based records. Daily wages computed per attendance with overtime at double rate. Full Payment of Wages Act compliance maintained.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pune mein trading company ka payroll kitne mein hota hai?</strong> Rs 2,999 per month se start hota hai 25 employees tak. Multi-location firms ke liye Rs 12,000-25,000.</p>
                <p><strong>Trading firm ko bonus dena zaroori hai kya?</strong> Haan. 20 se zyada employees hain toh Payment of Bonus Act ke under 8.33% to 20% bonus mandatory hai. 8 mahine mein disburse karna padta hai.</p>
                <p><strong>Seasonal staff ko PF dena padta hai kya?</strong> Agar firm mein total 20+ employees hain aur seasonal worker bhi regular basis pe kaam karta hai, toh PF applicable ho sakta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Every Missed Deadline Multiplies Penalty Exposure - Start Now</h2>
            <div class="content-text">
                
                <p>Every trading establishment must maintain Gumasta, pay wages within 7 days, comply with minimum wages, file PF/ESIC by 15th, deposit PTRC by 15th, submit LWF by July 15 and January 15, and compute bonus within 8 months. The 2025 Shops Act Amendment brought stricter overtime tracking. Maharashtra minimum wages revised effective 1 January 2026. Code on Wages 50% basic rule requires CTC restructuring. Bonus Act violations carry imprisonment up to 6 months. For a trading firm with 3 locations and 50 employees, each missed deadline multiplies exposure.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20company%20payroll%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Trading Company Payroll in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Payroll services for trading companies in Pune demand a provider that understands the Maharashtra Shops Act, Bonus Act computation, seasonal workforce scaling, multi-location consolidation, and the full statutory stack. Pune's trading ecosystem - from APMC Market Yard to peth retail corridors to the PCMC auto parts belt - requires payroll built for both permanent employees and seasonal labour.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Pune office at RTC Silver, Wagholi delivers integrated trading company payroll, bonus computation, Gumasta maintenance, and seasonal staff management for firms across every Pune trading zone.</p>
                <p style="color:rgba(255,255,255,0.9);">With 15+ years of experience, 10,000+ businesses served, and ISO 9001:2015 certification, Patron ensures every trading company payroll cycle is accurate, Shops Act-compliant, and audit-ready.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20payroll%20in%20Pune.%20Please%20share%20details%20and%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trading%20Company%20Payroll%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20need%20trading%20company%20payroll%20services%20in%20Pune.%0A%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trading Company Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides trading company payroll and compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Trading company payroll services</div>
                <div class="pa-city-grid">
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/payroll-services-for-trading-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/payroll-services-for-trading-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/payroll-services-for-trading-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Pune</div>
                <div class="pa-block-sub">End-to-end trading compliance</div>
                <div class="pa-cross-grid">
                    <a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/statutory-audit/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers payroll services for trading companies in Pune. Content reviewed annually (Freshness Tier 1) reflecting Maharashtra minimum wage revisions, Shops Act amendments, Code on Wages updates, and Bonus Act changes.</p>
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
