
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
    <title>Convert LLP to Pvt Ltd - Process, Documents & ROC Filing</title>
    <meta name="description" content="Convert LLP to Pvt Ltd via Section 366 and URC-1. Capital gains exempt under Section 47 IT Act. CA and CS support. Starting INR 4,999.">
    <link rel="canonical" href="/convert-llp-to-private-limited-company">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Convert LLP to Pvt Ltd - Process, Documents & ROC Filing">
    <meta property="og:description" content="Convert LLP to Pvt Ltd via Section 366 and URC-1. Capital gains exempt under Section 47 IT Act. CA and CS support. Starting INR 4,999.">
    <meta property="og:url" content="/convert-llp-to-private-limited-company">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Convert LLP to Pvt Ltd - Process, Documents & ROC Filing">
    <meta name="twitter:description" content="Convert LLP to Pvt Ltd via Section 366 and URC-1. Capital gains exempt under Section 47 IT Act. CA and CS support. Starting INR 4,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Convert LLP to Private Limited Company",
          "description": "Convert LLP to Pvt Ltd via Section 366 and URC-1. Capital gains exempt under Section 47 IT Act. CA and CS support. Starting INR 4,999.",
          "url": "https://www.patronaccounting.com/convert-llp-to-private-limited-company",
          "serviceType": "Convert LLP to Private Limited Company",
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
            "url": "https://www.patronaccounting.com/convert-llp-to-private-limited-company",
            "price": "4999"
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
              "name": "Convert LLP to Private Limited Company",
              "item": "https://www.patronaccounting.com/convert-llp-to-private-limited-company"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Can an LLP be directly converted to a Private Limited Company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No direct provision under LLP Act 2008. Conversion done under Section 366 of Companies Act 2013 read with Companies (Authorised to Register) Rules 2014. LLP deemed dissolved only on issuance of Certificate of Incorporation."
              }
            },
            {
              "@type": "Question",
              "name": "Is capital gains tax applicable on LLP to Pvt Ltd conversion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Exempt under Section 47 IT Act if all 5 conditions met: all assets vest in company, all partners become shareholders, proportionate share allotment, no other consideration, and partners' combined shareholding not below 50% for 5 years."
              }
            },
            {
              "@type": "Question",
              "name": "What forms are required for LLP to Pvt Ltd conversion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SPICe+ Part A (name), URC-1 (conversion application under Section 366), SPICe+ Part B (incorporation), INC-33 (e-MOA), INC-34 (e-AOA), and Agile-Pro (PAN/TAN/GST). URC-2 is the newspaper advertisement format."
              }
            },
            {
              "@type": "Question",
              "name": "How long does LLP to Pvt Ltd conversion take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "45 to 60 business days. The 21-day newspaper notice period and up to 30-day ROC review are the main time drivers."
              }
            },
            {
              "@type": "Question",
              "name": "What happens to the LLP's assets after conversion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "All assets, liabilities, contracts, and employment agreements vest automatically in the new Pvt Ltd on the date of Certificate of Incorporation. Pending proceedings continue against the new company."
              }
            },
            {
              "@type": "Question",
              "name": "Can LLP business losses be carried forward to the new company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes under Section 72A IT Act. However, as of 2026 there are practical filing difficulties as IT return forms don't have dedicated columns for brought-forward losses from converted LLPs. Professional CA guidance recommended."
              }
            },
            {
              "@type": "Question",
              "name": "What is the minimum number of partners for conversion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Minimum 2 partners. All must consent and become shareholders. LLP with fewer than 7 members registers as Private Limited Company."
              }
            },
            {
              "@type": "Question",
              "name": "LLP ko Private Limited mein convert karne ka process kya hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 366 Companies Act 2013 ke under: sabhi partners ki consent, SPICe+ Part A se naam approval, URC-2 newspaper ad (21 din wait), phir URC-1 + SPICe+ Part B file karein MCA portal par. ROC 30 din mein Certificate of Incorporation issue karta hai. Section 47 IT Act ke tahat capital gains exempt. Quick Answers Governing section? Section 366, Companies Act 2013. No LLP Act provision. Main form? URC-1 linked with SPICe+ Part B, INC-33, INC-34, Agile-Pro. Newspaper notice? URC-2 - English + vernacular, 21 clear days before URC-1. Capital gains exempt? Yes, if all 5 Section 47 IT Act conditions are met. What confirms conversion? Form INC-11 Certificate of Incorporation by ROC."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-2.css') }}?v=1">
@endpush
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
                        LLP to Private Limited Company Conversion in India: Convert Your LLP the Right Way
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 366, Companies Act:</span> Convert your LLP via URC-1 and SPICe+ filing on MCA V3 Portal - no dissolution required. LLP deemed dissolved on Certificate.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Capital Gains Exempt:</span> Tax exemption under Section 47 of Income Tax Act 1961 subject to 5 specific conditions being met.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Unlock Equity and FDI:</span> Equity fundraising, FDI eligibility, ESOP issuance, and higher credibility with banks and investors.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>From INR 4,999:</span> Expert CA and CS-assisted end-to-end conversion service. 45-60 business days typical timeline.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ business matters | 4.8/5 rating | Offices in Pune, Mumbai, Delhi, Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=LLP%20to%20Pvt%20Ltd%20Conversion%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0APlease%20share%20details%20for%20LLP%20to%20Pvt%20Ltd%20conversion.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20convert%20my%20LLP%20to%20a%20Private%20Limited%20Company.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - LLP to Private Limited Conversion',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'convert-llp-to-private-limited-company', 'label' => 'LLP to Pvt Ltd Conversion', 'selected' => true, 'disabled' => false],
                            ['value' => 'llp-incorporation', 'label' => 'LLP Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration', 'label' => 'Pvt Ltd Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'pvt-llp-compliance', 'label' => 'LLP Compliance', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Converted our 3-year-old LLP to Pvt Ltd ahead of our first fundraising round. CA team ensured all Section 47 conditions were met. CS team handled complete MCA filing and post-conversion GST amendment.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Founding Partner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Technology Services LLP, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Needed to convert for FDI from a Singapore-based investor. Patron coordinated the 21-day newspaper notice, URC-1 filing, and post-conversion FEMA compliance. Certificate received in 52 days.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Designated Partner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">E-commerce LLP, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our CA flagged that our share allotment ratio was wrong for Section 47 compliance. They restructured it before filing - saved us from a massive capital gains tax liability. Invaluable tax guidance.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Managing Partner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Consulting LLP, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Converted our CA practice LLP to a Private Limited for ESOP issuance to our team. Patron handled the entire process including LLP backlog clearance before conversion. Very smooth.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Senior Partner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Professional Services LLP, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Join businesses that trust Patron Accounting for LLP to Pvt Ltd conversions and corporate structuring.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Why Convert</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">LLP vs Pvt Ltd</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP to Private Limited Conversion - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP to Private Limited Conversion Services at a Glance</strong></p>
                    <p>An LLP converts to a Private Limited Company under Section 366 Companies Act 2013 via URC-1 + SPICe+ on MCA V3 Portal. No direct provision under LLP Act 2008. Capital gains exempt under Section 47 IT Act (5 conditions). 21-day newspaper notice required. LLP deemed dissolved on Certificate of Incorporation. Starting at INR 4,999.</p>
                </div>
                <p>An LLP is excellent for professionals and small businesses, but as your business scales - attracting investors, seeking foreign capital, building ESOPs - staying as an LLP can hold you back. The good news: you can convert your existing LLP directly into a Private Limited Company without dissolving it, under Section 366 of the Companies Act, 2013.</p>
                <p>When the 5 conditions under Section 47 of the Income Tax Act 1961 are satisfied, the conversion is exempt from capital gains tax. The process involves partner consent, name approval via SPICe+ Part A, newspaper notice (21-day window), filing of URC-1 and SPICe+, and receipt of Certificate of Incorporation. The LLP is deemed dissolved and all assets vest in the new company.</p>
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
                <h2 class="section-title">What is LLP to Private Limited Conversion?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>LLP to Private Limited Conversion</strong> is the legal process by which a registered LLP restructures as a Private Limited Company under Section 366 of the Companies Act 2013. The LLP Act 2008 has no direct provision for this - the Companies Act steps in.</p>
<p>On conversion, the LLP is <strong>deemed dissolved</strong> and simultaneously reborn as a Pvt Ltd. All assets, liabilities, contracts, employment agreements, and pending proceedings vest automatically in the new company. This continuity of legal identity is a key advantage over dissolution + fresh incorporation.</p>
<p><strong>External authority:</strong> <a href="https://www.indiacode.nic.in/handle/123456789/2050" target="_blank" rel="noopener">Companies Act 2013 - India Code</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Portal</a></p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP to Private Limited Conversion:</strong></p>
                    <p><strong>Section 366</strong> - Companies Act 2013 provision authorizing LLP to register as a company.</p>
<p><strong>URC-1</strong> - Primary conversion form filed on MCA V3, linked with SPICe+.</p>
<p><strong>SPICe+</strong> - Integrated MCA form: Part A (name approval) + Part B (incorporation).</p>
<p><strong>URC-2</strong> - Newspaper advertisement format. English + vernacular, 21 clear days before URC-1.</p>
<p><strong>Section 47, IT Act</strong> - Capital gains exemption on conversion if 5 conditions met.</p>
<p><strong>Form INC-11</strong> - Certificate of Incorporation issued by ROC confirming conversion.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- LLP box -->
<rect x="45" y="40" width="45" height="30" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="67" y="58" font-size="8" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">LLP</text>
<!-- Arrow -->
<path d="M95 55l15 0" stroke="#14365F" stroke-width="2.5" stroke-linecap="round" marker-end="url(#arrowhead)"/>
<defs><marker id="arrowhead" markerWidth="8" markerHeight="6" refX="8" refY="3" orient="auto"><polygon points="0 0, 8 3, 0 6" fill="#14365F"/></marker></defs>
<!-- Pvt Ltd box -->
<rect x="112" y="40" width="48" height="30" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<text x="136" y="52" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PVT</text>
<text x="136" y="62" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">LTD</text>
<!-- URC-1 badge -->
<rect x="45" y="85" width="40" height="20" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="65" y="98" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">URC-1</text>
<!-- S.47 badge -->
<rect x="95" y="85" width="40" height="20" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="115" y="98" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S.47</text>
<!-- INC-11 badge -->
<rect x="55" y="118" width="50" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
<text x="80" y="130" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INC-11</text>
<!-- Verified -->
<circle cx="152" cy="118" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M146 118l4 4 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP to Private Limited Conversion</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 366</span>
                        <strong>URC-1 + SPICe+</strong>
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
            <h2 class="section-title">Why Convert LLP to Private Limited Company?</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Equity Fundraising:</strong> Issue equity shares to angel investors, VCs, HNIs. LLPs cannot issue shares.</li>
<li><strong>FDI Eligibility:</strong> Broader FDI access under automatic route in most sectors.</li>
<li><strong>ESOP Issuance:</strong> Employee Stock Option Plans not available in LLPs - crucial for talent retention.</li>
<li><strong>Enhanced Credibility:</strong> Banks, NBFCs, corporates, and government tenders prefer companies over LLPs.</li>
<li><strong>Tax Optimisation:</strong> Corporate tax 25% (turnover up to INR 400 crore) vs LLP flat 30%.</li>
<li><strong>Future IPO:</strong> Only companies can list on stock exchanges.</li>
<li><strong>Simpler Share Transfers:</strong> Share transfer via SH-4 is simpler than LLP Agreement amendment.</li>
</ul>
<p><strong>Eligibility:</strong> Min 2 partners (all must consent and become shareholders). All LLP filings up to date. No pending compliance violations. LLP with fewer than 7 members registers as Private Limited.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's LLP to Pvt Ltd Conversion Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Conversion Review</td><td>Assess compliance status, statutory filings, and eligibility for Section 47 tax-exempt conversion</td></tr>
<tr><td>Partner Consent and Resolution</td><td>Draft and facilitate unanimous partner resolution for conversion under Section 366</td></tr>
<tr><td>SPICe+ Part A Name Approval</td><td>File name reservation on MCA portal (LLP name + 'Private Limited')</td></tr>
<tr><td>Newspaper Advertisement (URC-2)</td><td>Draft and coordinate publication in English + vernacular newspaper; manage 21-day notice period</td></tr>
<tr><td>URC-1 + SPICe+ + INC-33/34 Filing</td><td>Complete linked form filing on MCA V3 with CA-certified Statement of Assets and Liabilities</td></tr>
<tr><td>Post-Conversion Compliance</td><td>GST amendment, PAN/TAN surrender, bank conversion, trademark assignment, contract novation</td></tr>

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
            <h2 class="section-title">9-Step Procedure for LLP to Pvt Ltd Conversion</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Under Section 366 Companies Act 2013. 21-day newspaper notice mandatory. ROC has 30 days to decide. Capital gains exempt under Section 47 IT Act if 5 conditions met.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Partner Meeting and Consent Resolution</h3><p class="step-description">Convene meeting of all partners. Pass unanimous consent resolution to convert under Section 366. Authorize partners to sign all documents and forms.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All partners consent</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">CONSENT</text></svg></div><span class="illustration-label">Consent Done</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Pre-Conversion Compliance Check</h3><p class="step-description">Verify all LLP Annual Returns, Financial Statements, and MCA filings are up to date. Any pending compliance must be cleared first. Obtain latest ITR.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filings verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M42 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M68 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Compliance OK</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">DSC and DIN for Proposed Directors</h3><p class="step-description">Ensure all partners becoming directors have valid DSC and DIN. DIN can be obtained via SPICe+ if not already held.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC valid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="42" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="45" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text><circle cx="80" cy="42" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="80" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIN</text></svg></div><span class="illustration-label">IDs Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Name Approval via SPICe+ Part A</h3><p class="step-description">File SPICe+ Part A selecting 'Conversion of LLP into Company'. LLP name with 'Private Limited' replacing 'LLP'. Name valid 20 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20-day validity</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SPICe+</text><text x="60" y="48" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PART A</text></svg></div><span class="illustration-label">Name OK</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Publish Newspaper Advertisement (URC-2)</h3><p class="step-description">Publish in English + vernacular newspaper in LLP's district. 21 clear days must pass before URC-1 can be filed. Prepare all URC-1 documents during this period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ad published</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>21-day clock started</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="30" width="50" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">21 DAYS</text></svg></div><span class="illustration-label">Ad Published</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Prepare URC-1 Documents</h3><p class="step-description">During 21-day period: partner list, director list with DIN, CA-certified Statement of A&L (not older than 15 days), creditor NOC, director affidavits, LLP Agreement copy, newspaper copies, ITR copy.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>A&L certified by CA</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="64" x2="80" y2="64" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File URC-1 + SPICe+ on MCA V3</h3><p class="step-description">After 21 days, file URC-1 linked with SPICe+ Part B, INC-33 (e-MOA), INC-34 (e-AOA), and Agile-Pro. Attach MOA, AOA, and all supporting documents. Pay government fees.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>URC-1 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All forms linked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">URC-1 FILED</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">ROC Review and Certificate of Incorporation</h3><p class="step-description">ROC has 30 days to decide. On approval, Certificate of Incorporation (Form INC-11) issued with CIN, PAN, TAN. LLP deemed dissolved. All assets and liabilities vest in new company.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>COI issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LLP dissolved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="38" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INC-11</text><text x="60" y="52" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">PVT LTD</text></svg></div><span class="illustration-label">Converted</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for LLP to Pvt Ltd Conversion</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
<tr><td>Partner consent resolution</td><td>Unanimous approval for conversion</td></tr>
<tr><td>DSC + DIN of all proposed directors</td><td>For SPICe+ and URC-1 filing on MCA portal</td></tr>
<tr><td>SPICe+ Part A name approval</td><td>LLP name + 'Private Limited'</td></tr>
<tr><td>Form URC-2 newspaper advertisement</td><td>English + vernacular, 21-day notice</td></tr>
<tr><td>Statement of Assets and Liabilities</td><td>CA-certified, not older than 15 days from URC-1 filing</td></tr>
<tr><td>NOC from secured creditors</td><td>Or declaration of no secured debt</td></tr>
<tr><td>Director affidavits (non-disqualification)</td><td>Under Section 164, Companies Act 2013</td></tr>
<tr><td>LLP Agreement + Certificate of Incorporation</td><td>Certified copies for ROC records</td></tr>
<tr><td>Latest Income Tax Return of LLP</td><td>Proof of compliance and filing status</td></tr>
<tr><td>Draft MOA (INC-33) and AOA (INC-34)</td><td>For new Private Limited Company</td></tr>
<tr><td>Proof of Registered Office</td><td>Rent agreement + utility bill + owner NOC</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Complex multi-form linked filing on MCA V3</td><td>URC-1, SPICe+, INC-33, INC-34, Agile-Pro all linked</td><td>Our CS team handles the complete MCA V3 filing sequence, preventing errors in linked form submission</td></tr>
<tr><td>21-day newspaper notice causing delay</td><td>Mandatory statutory wait period</td><td>We publish URC-2 immediately and pre-prepare all URC-1 documents during the notice period</td></tr>
<tr><td>Statement of A&L - 15-day currency</td><td>Expires quickly if filing delayed</td><td>We time the CA certification to align precisely with URC-1 filing date</td></tr>
<tr><td>Section 47 tax conditions - risk of missing one</td><td>Single misstep makes entire conversion taxable</td><td>CA team conducts pre-conversion tax structuring review to ensure all 5 conditions are met</td></tr>

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
            <h2 class="section-title">LLP to Pvt Ltd Conversion Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Professional Fees - Patron Accounting (end-to-end)</td><td>Starting at INR 4,999 + GST</td></tr>
<tr><td>Newspaper Advertisement (URC-2 - English + Vernacular)</td><td>INR 2,000 to INR 8,000 (varies by city)</td></tr>
<tr><td>Statement of A&L - CA Certification</td><td>INR 1,500 to INR 3,000 (included in Patron package or separately)</td></tr>
<tr><td>Government Fee - URC-1 + SPICe+ Filing</td><td>INR 2,000 to INR 10,000 (based on authorised capital)</td></tr>
<tr><td>Stamp Duty on MOA, AOA, Incorporation</td><td>State Stamp Act rates (varies by state)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST, Govt. Fees and Stamp Duty)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP to Private Limited Conversion consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20to%20Pvt%20Ltd%20conversion%20service." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP to Pvt Ltd Conversion Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-conversion compliance check and documents</td><td>3-5 business days</td></tr>
<tr><td>SPICe+ Part A - Name Approval</td><td>1-3 business days</td></tr>
<tr><td>Newspaper advertisement + 21-day notice</td><td>21 clear days (mandatory)</td></tr>
<tr><td>URC-1 + SPICe+ filing preparation</td><td>2-3 business days (during notice period)</td></tr>
<tr><td>ROC review and Certificate of Incorporation</td><td>Up to 30 business days from URC-1 filing</td></tr>
<tr><td>Post-conversion compliance (GST, PAN, bank)</td><td>5-10 business days after Certificate</td></tr>
<tr><td>Total end-to-end (Patron Accounting)</td><td>45-60 business days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key Timeline Drivers:</strong> The 21-day newspaper notice period and 30-day ROC review are the two biggest time components. We pre-prepare all documents during the notice period to minimize total elapsed time.</p>

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
            <h2 class="section-title">Why Choose Professional Help for LLP to Pvt Ltd Conversion?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Tax Structuring</h3><p class="feature-text">Section 47 has 5 strict conditions. A single misstep (e.g., disproportionate shares) makes the entire conversion taxable. CA oversight essential.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Multi-Form MCA Filing</h3><p class="feature-text">URC-1, SPICe+ Part B, INC-33, INC-34, and Agile-Pro must all be filed as linked forms. Errors cause rejection.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Document Precision</h3><p class="feature-text">Statement of A&L has 15-day validity. Any delay wastes the certificate. Newspaper format must comply with URC-2.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Post-Conversion Cascade</h3><p class="feature-text">GST amendment, PAN surrender, bank conversion, trademark assignment, contracts - all coordinated.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">LLP Backlog Clearance</h3><p class="feature-text">Any pending LLP filings must be cleared before conversion. We identify and resolve this proactively.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pan-India Coverage</h3><p class="feature-text">Offices in Pune, Mumbai, Delhi, Gurugram. Starting at INR 4,999 + GST with no hidden charges.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>500+ Business Matters | 4.8/5 Client Rating | 45-60 Day Turnaround | CA and CS Experts | Offices in Pune, Mumbai, Delhi, Gurugram</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP vs Private Limited Company - Key Differences</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Aspect</th><th>LLP (Before)</th><th>Private Limited (After)</th></tr></thead>
                    <tbody>
                        <tr><td>Equity Fundraising</td><td>Not possible (partners only)</td><td>Equity shares to investors</td></tr>
<tr><td>FDI Eligibility</td><td>Limited (sector-specific)</td><td>Broad under automatic route</td></tr>
<tr><td>ESOPs</td><td>Not available</td><td>ESOP schemes available</td></tr>
<tr><td>Corporate Tax Rate</td><td>30% (flat)</td><td>25% (turnover up to INR 400 crore)</td></tr>
<tr><td>Audit Requirement</td><td>Only if turnover > INR 40 lakh</td><td>Mandatory every year</td></tr>
<tr><td>Annual Compliance</td><td>Form 8 + Form 11 (lighter)</td><td>AOC-4 + MGT-7 + Board Meetings</td></tr>
<tr><td>Share Transfer</td><td>LLP Agreement amendment needed</td><td>SH-4 form (simpler)</td></tr>
<tr><td>IPO Potential</td><td>Not possible</td><td>Future IPO/PE exit possible</td></tr>

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
<li><a href="/llp-incorporation">LLP Registration in India</a> - incorporate a new LLP</li>
<li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - new Pvt Ltd incorporation</li>
<li><a href="/pvt-llp-compliance">LLP Annual Compliance</a> - Form 8 + Form 11 filings</li>
<li><a href="/llp-agreement-change">LLP Agreement Change</a> - amend LLP Agreement clauses</li>
<li><a href="/llp-name-change">LLP Name Change</a> - change your LLP name</li>
<li><a href="/private-limited-company-compliance">Company Annual Compliance</a> - post-conversion Pvt Ltd compliance</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - LLP to Private Limited Conversion</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Details</th></tr></thead><tbody>
<tr><td>Section 366, Companies Act 2013</td><td>Permits LLP to register as a company (including Private Limited). Primary governing provision.</td></tr>
<tr><td>Companies (Authorised to Register) Rules 2014</td><td>Detailed rules: URC-1, URC-2 newspaper notice, documents, 21-day period, 30-day ROC processing.</td></tr>
<tr><td>Section 47, Income Tax Act 1961</td><td>Capital gains exempt if all 5 conditions met: all assets vest, all partners become shareholders, proportionate shares, no other consideration, 50% holding for 5 years.</td></tr>
<tr><td>Section 72A, Income Tax Act 1961</td><td>New company can carry forward LLP's business losses and unabsorbed depreciation.</td></tr>
<tr><td>Section 164, Companies Act 2013</td><td>Each proposed director must file non-disqualification affidavit.</td></tr>
<tr><td>LLP Dissolution on Conversion</td><td>LLP deemed dissolved from date of Certificate of Incorporation. All assets and liabilities vest in new company.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://www.indiacode.nic.in/handle/123456789/2050" target="_blank" rel="noopener">Companies Act 2013 - India Code</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Portal</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - LLP to Pvt Ltd Conversion</h2>
                    <p class="faq-expanded__lead">Get answers about Section 366 procedure, capital gains exemption, forms, timelines, and post-conversion compliance.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'LLP to Pvt Ltd Conversion'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can an LLP be directly converted to a Private Limited Company?</h3>
                        <div class="faq-expanded__a"><p>No direct provision under LLP Act 2008. Conversion done under Section 366 of Companies Act 2013 read with Companies (Authorised to Register) Rules 2014. LLP deemed dissolved only on issuance of Certificate of Incorporation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is capital gains tax applicable on LLP to Pvt Ltd conversion?</h3>
                        <div class="faq-expanded__a"><p>Exempt under Section 47 IT Act if all 5 conditions met: all assets vest in company, all partners become shareholders, proportionate share allotment, no other consideration, and partners' combined shareholding not below 50% for 5 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What forms are required for LLP to Pvt Ltd conversion?</h3>
                        <div class="faq-expanded__a"><p>SPICe+ Part A (name), URC-1 (conversion application under Section 366), SPICe+ Part B (incorporation), INC-33 (e-MOA), INC-34 (e-AOA), and Agile-Pro (PAN/TAN/GST). URC-2 is the newspaper advertisement format.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does LLP to Pvt Ltd conversion take?</h3>
                        <div class="faq-expanded__a"><p>45 to 60 business days. The 21-day newspaper notice period and up to 30-day ROC review are the main time drivers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens to the LLP's assets after conversion?</h3>
                        <div class="faq-expanded__a"><p>All assets, liabilities, contracts, and employment agreements vest automatically in the new Pvt Ltd on the date of Certificate of Incorporation. Pending proceedings continue against the new company.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can LLP business losses be carried forward to the new company?</h3>
                        <div class="faq-expanded__a"><p>Yes under Section 72A IT Act. However, as of 2026 there are practical filing difficulties as IT return forms don't have dedicated columns for brought-forward losses from converted LLPs. Professional CA guidance recommended.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the minimum number of partners for conversion?</h3>
                        <div class="faq-expanded__a"><p>Minimum 2 partners. All must consent and become shareholders. LLP with fewer than 7 members registers as Private Limited Company.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">LLP ko Private Limited mein convert karne ka process kya hai?</h3>
                        <div class="faq-expanded__a"><p>Section 366 Companies Act 2013 ke under: sabhi partners ki consent, SPICe+ Part A se naam approval, URC-2 newspaper ad (21 din wait), phir URC-1 + SPICe+ Part B file karein MCA portal par. ROC 30 din mein Certificate of Incorporation issue karta hai. Section 47 IT Act ke tahat capital gains exempt.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Governing section?</strong> Section 366, Companies Act 2013. No LLP Act provision.</p>
<p><strong>Main form?</strong> URC-1 linked with SPICe+ Part B, INC-33, INC-34, Agile-Pro.</p>
<p><strong>Newspaper notice?</strong> URC-2 - English + vernacular, 21 clear days before URC-1.</p>
<p><strong>Capital gains exempt?</strong> Yes, if all 5 Section 47 IT Act conditions are met.</p>
<p><strong>What confirms conversion?</strong> Form INC-11 Certificate of Incorporation by ROC.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Planning to Fundraise? Convert Before Approaching Investors</h2>
            <div class="content-text">
                
                <p><strong>Most angel investors and VCs will not invest in an LLP.</strong> Convert to Private Limited before starting fundraising conversations.</p>
<ul>
<li><strong>Equity shares:</strong> Only Pvt Ltd companies can issue equity to investors</li>
<li><strong>FDI eligibility:</strong> Broader automatic route access for Pvt Ltd</li>
<li><strong>ESOP capability:</strong> Employee stock options not available in LLPs</li>
<li><strong>Tax benefit:</strong> 25% corporate tax vs LLP's 30% flat rate</li>
<li><strong>Capital gains exempt:</strong> Section 47 IT Act - if structured correctly with CA oversight</li>
</ul>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20convert%20my%20LLP%20to%20Private%20Limited.%20Please%20help." target="_blank">WhatsApp us</a> for a free pre-conversion review.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Convert Your LLP to Pvt Ltd - Starting at INR 4,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">LLP to Private Limited conversion under Section 366 is a powerful restructuring tool that unlocks equity fundraising, FDI eligibility, ESOPs, and lower corporate tax rates - with capital gains exemption under Section 47 if structured correctly.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's cross-functional CA and CS team manages the full complexity - from pre-conversion tax reviews and multi-form MCA filings to post-Certificate company compliance kick-offs. 45-60 day typical turnaround.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20to%20Pvt%20Ltd%20conversion%20service." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=LLP%20to%20Pvt%20Ltd%20Conversion&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20convert%20my%20LLP%20to%20a%20Private%20Limited%20Company.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP to Pvt Ltd Conversion Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Convert your LLP to Private Limited from Patron Accounting offices across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">LLP to Pvt Ltd Conversion by City</div><div class="pa-block-sub">URC-1 and SPICe+ filing from Patron Accounting</div><div class="pa-city-grid">
<a href="/convert-llp-to-private-limited-company/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/convert-llp-to-private-limited-company/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/convert-llp-to-private-limited-company/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/convert-llp-to-private-limited-company/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">LLP, company registration, and compliance</div><div class="pa-cross-grid">
<a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/pvt-llp-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-agreement-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Agreement Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-name-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Name Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Annual Compliance</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: Companies Act 2013 amendments, Companies (Authorised to Register) Rules changes, Section 47 IT Act updates, or MCA V3 form changes.</p>
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
