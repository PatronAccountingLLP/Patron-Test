
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
    <title>Brand Copyright Registration India - Process, Fees & Docs</title>
    <meta name="description" content="Brand copyright registration in India starts at Rs 500 per work under the Copyright Act, 1957. Know the online process, fees, and documents needed.">
    <link rel="canonical" href="/brand-copyright-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Brand Copyright Registration India - Process, Fees & Docs">
    <meta property="og:description" content="Brand copyright registration in India starts at Rs 500 per work under the Copyright Act, 1957. Know the online process, fees, and documents needed.">
    <meta property="og:url" content="/brand-copyright-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Brand Copyright Registration India - Process, Fees & Docs">
    <meta name="twitter:description" content="Brand copyright registration in India starts at Rs 500 per work under the Copyright Act, 1957. Know the online process, fees, and documents needed.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Brand Copyright Registration: Fees",
          "description": "Brand copyright registration in India starts at Rs 500 per work under the Copyright Act, 1957. Know the online process, fees, and documents needed.",
          "url": "https://www.patronaccounting.com/brand-copyright-registration",
          "serviceType": "Brand Copyright Registration: Fees",
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
            "url": "https://www.patronaccounting.com/brand-copyright-registration",
            "price": "500"
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
              "name": "Brand Copyright Registration: Fees",
              "item": "https://www.patronaccounting.com/brand-copyright-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Can a brand name be copyrighted in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, a brand name alone cannot be copyrighted in India. Brand names are protected through trademark registration under the Trade Marks Act, 1999. However, if your brand logo contains artistic or creative elements, the logo design can be registered as an 'artistic work' under Section 2(c) of the Copyright Act, 1957. For complete brand protection, businesses should pursue both copyright registration for the artistic logo and trademark registration for the brand name."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between copyright and trademark for brand protection?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Copyright protects original creative expressions like artistic logos, written content, and design elements under the Copyright Act, 1957. Trademark protects brand identifiers like names, logos, slogans used in commerce under the Trade Marks Act, 1999. Copyright lasts for the lifetime of the author plus 60 years and does not require renewal. Trademark is valid for 10 years and must be renewed. A brand logo can be protected under both."
              }
            },
            {
              "@type": "Question",
              "name": "How much does brand copyright registration cost in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The government fee for registering copyright in an artistic or literary work is Rs 500 per work as prescribed under Schedule 2 of the Copyright Rules, 2013. For sound recordings, the fee is Rs 2,000, and for films, Rs 5,000. Patron Accounting's brand copyright registration package starts at Rs 4,999 inclusive of government and professional fees."
              }
            },
            {
              "@type": "Question",
              "name": "How long does copyright registration take in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The standard timeline is approximately 2 to 6 months if no objections are raised. This includes the 30-day mandatory waiting period under Rule 70 of the Copyright Rules, 2013, followed by examination and scrutiny by the Registrar. If objections are filed by third parties, the process may extend to 4 to 9 months."
              }
            },
            {
              "@type": "Question",
              "name": "Is copyright registration mandatory in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, copyright registration is not mandatory. Copyright protection arises automatically upon creation of an original work. However, registration is strongly recommended because it provides prima facie evidence of ownership under Section 48 of the Copyright Act, 1957, which significantly strengthens your legal position in infringement disputes."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if someone copies my copyrighted brand logo?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "If someone infringes your copyrighted brand logo, you can pursue both civil and criminal remedies. Civil remedies under Section 55 include injunctions, damages, and accounts of profits. Criminal remedies under Section 63 provide for imprisonment ranging from 6 months to 3 years and fines between Rs 50,000 and Rs 2,00,000. These offences are cognizable and non-bailable."
              }
            },
            {
              "@type": "Question",
              "name": "Can I copyright a logo and trademark it at the same time?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can pursue both copyright and trademark registration simultaneously. This dual protection strategy is recommended for comprehensive brand security. Note that under Section 45(1) of the Copyright Act, you must obtain a TM-60 Search Certificate from the Trademark Registry if the artistic work is used on goods or services."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form XIV for copyright registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form XIV is the prescribed application form under the Copyright Rules, 2013 for registering copyright in any category of work. It requires details including the title and nature of the work, author and applicant information, date of creation or publication, and ownership status. It can be filed online at copyright.gov.in or physically at the Copyright Office in New Delhi. Quick Answers Q: What is brand copyright registration? A: The process of recording ownership of a brand's creative elements - logos, designs, original content - with the Copyright Office under the Copyright Act, 1957. Q: How much does it cost? A: Government fee is Rs 500 per artistic work under Schedule 2 of the Copyright Rules, 2013. Professional fees are additional. Q: How long is copyright valid? A: Lifetime of the author plus 60 years for individuals. 60 years from publication for company-owned works. No renewal required. Q: What penalty for infringement? A: 6 months to 3 years imprisonment and Rs 50,000 to Rs 2,00,000 fine under Section 63. Cognizable and non-bailable offence."
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
                        Brand Copyright Registration in India - Process, Fees, and Documents
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Fees:</span> Starting at Rs 500 per work for artistic and literary works under Schedule 2 of the Copyright Rules, 2013.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Online Filing:</span> Application through the Copyright Office portal (copyright.gov.in) using Form XIV with complete documentation support.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Protection Duration:</span> Lifetime of the author plus 60 years under Section 22 of the Copyright Act, 1957. No renewal required.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Legal Evidence:</span> Registration provides prima facie evidence of ownership in legal disputes under Section 48 of the Copyright Act.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 500+ brands protected through copyright and trademark registration. 4.8/5 Google Rating.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Brand%20Copyright%20Registration&body=Hello%2C%0A%0AI%20need%20copyright%20registration%20for%20my%20brand.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Brand%20Copyright%20Registration.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Brand Copyright Registration',
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting made our brand copyright registration seamless. Their team identified that we needed both copyright and trademark protection for our logo - something we had not considered. The entire process was completed in under 3 months.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Kulkarni</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Startup Founder, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had an objection filed against our copyright application and were unsure how to respond. Patron Accounting's legal team handled the hearing and secured our registration successfully. Very professional throughout.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Menon</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Creative Agency Director, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our fashion brand needed copyright protection for our original textile designs and packaging artwork. Patron Accounting filed 8 copyright applications simultaneously and all were registered without objections. The dual trademark+copyright strategy was excellent advice.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ananya Singh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Fashion Brand Owner, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We discovered someone had copied our brand logo and were using it online. Patron Accounting helped us file both a copyright registration and an infringement notice. Having the registration certificate made the legal process much smoother and the infringer took down the content quickly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VT</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Thakur</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">E-commerce Business Owner, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a publisher, we needed copyright registration for our original book cover designs and editorial illustrations. Patron Accounting handled 15 applications in bulk with a single point of contact. Everything was registered within 4 months. Highly recommended for publishers and media houses.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sanjay Desai</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Publisher, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div>
</div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Protect your brand's creative assets with expert copyright registration - logos, designs, and original content.</p>
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">9-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Pro</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Brand Copyright Registration - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Brand Copyright Registration Services at a Glance</strong></p>
                    <p>Brand copyright registration is the process of registering creative elements associated with your brand - logos, artistic designs, original content, and packaging artwork - with the Copyright Office of India under the Copyright Act, 1957. Government fees start at Rs 500 per work. Registration provides prima facie evidence of ownership under Section 48 and copyright protection lasts for the lifetime of the author plus 60 years. Patron Accounting provides end-to-end registration support starting at Rs 4,999.</p>
                </div>
                <p>Many business owners confuse copyright with trademark registration. A trademark protects brand identifiers like names, logos, and slogans used in commerce under the Trade Marks Act, 1999. Copyright protects original artistic and creative expressions under the Copyright Act, 1957. For comprehensive brand protection, businesses often need both - trademark registration for the brand name and logo as a commercial identifier, and copyright registration for the artistic elements.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>Copyright Act, 1957 and Copyright Rules, 2013</td></tr>
<tr><td>Application Form</td><td>Form XIV (online or physical)</td></tr>
<tr><td>Government Fee</td><td>Rs 500 per work (artistic/literary); Rs 5,000 (films); Rs 2,000 (sound recordings)</td></tr>
<tr><td>Timeline</td><td>2 to 9 months (if no objections raised)</td></tr>
<tr><td>Validity</td><td>Lifetime of author + 60 years (individual); 60 years from publication (company)</td></tr>
<tr><td>Filing Authority</td><td>Registrar of Copyrights, Copyright Office, New Delhi</td></tr>
<tr><td>Infringement Penalty</td><td>6 months to 3 years imprisonment; Rs 50,000 to Rs 2,00,000 fine (Section 63)</td></tr>
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
                <h2 class="section-title">What Is Brand Copyright Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Brand copyright registration is the formal process of recording ownership of a brand's original creative works - including logos, artistic designs, packaging artwork, and marketing content - with the Registrar of Copyrights under the <strong>Copyright Act, 1957</strong>, granting the owner exclusive legal rights over reproduction, distribution, and commercial use.</p>
<p>While copyright protection arises automatically upon creation of an original work, formal registration strengthens your legal position by creating a public record of ownership that serves as <strong>prima facie evidence in courts across India under Section 48</strong>.</p>
<p>The <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office of India</a>, operating under the Department for Promotion of Industry and Internal Trade (DPIIT), administers the registration process. India is also a signatory to the <strong>Berne Convention</strong> and <strong>TRIPS Agreement</strong>, meaning copyright registered in India enjoys protection in over 170 member countries.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Brand Copyright Registration:</strong></p>
                    <p><strong>Copyright:</strong> A legal right under Section 14 of the Copyright Act, 1957, granting creators exclusive rights to reproduce, distribute, perform, and display their original works.</p>
<p><strong>Artistic Work:</strong> Defined under Section 2(c) as paintings, sculptures, drawings, engravings, photographs, and works of artistic craftsmanship - including brand logos.</p>
<p><strong>Form XIV:</strong> The prescribed application form under the Copyright Rules, 2013, for registering copyright in any category of work.</p>
<p><strong>Registrar of Copyrights:</strong> The authority under Section 9 maintaining the Register of Copyrights and processing applications.</p>
<p><strong>Prima Facie Evidence:</strong> Under Section 48, entries in the Register of Copyrights serve as prima facie evidence of ownership in all courts.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Brand Copyright Certificate -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Copyright Certificate</text>
                            <!-- Certificate content -->
                            <circle cx="100" cy="60" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <text x="100" y="57" font-size="16" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">&#169;</text>
                            <text x="100" y="68" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Registered</text>
                            <!-- Lines -->
                            <line x1="50" y1="88" x2="150" y2="88" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <line x1="60" y1="100" x2="140" y2="100" stroke="#14365F" stroke-width="1" opacity="0.2" stroke-linecap="round"/>
                            <line x1="65" y1="110" x2="135" y2="110" stroke="#14365F" stroke-width="1" opacity="0.2" stroke-linecap="round"/>
                            <line x1="70" y1="120" x2="130" y2="120" stroke="#14365F" stroke-width="1" opacity="0.2" stroke-linecap="round"/>
                            <!-- Badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Brand Copyright</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Brand Copyright Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Copyright Act, 1957</span>
                        <strong>Brand IP Protection</strong>
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
            <h2 class="section-title">Who Needs Brand Copyright Registration?</h2>
            <div class="content-text">
                
                <p>Brand copyright registration is relevant for any individual or business creating and using original creative elements as part of their brand identity:</p>
<ul>
<li><strong>Startups and Entrepreneurs:</strong> Unique brand logos with artistic elements need protection from day one to prevent copying.</li>
<li><strong>Companies with Original Packaging:</strong> Packaging designs, product labels, and marketing artwork qualify as artistic works under Section 2(c).</li>
<li><strong>Content Creators and Digital Businesses:</strong> Original website designs, illustrations, and creative copy are copyrightable works.</li>
<li><strong>Fashion Brands and Designers:</strong> Distinctive artistic works forming the brand identity deserve formal protection.</li>
<li><strong>Publishers and Media Houses:</strong> Original branded content, including editorial designs and layouts.</li>
</ul>
<p><strong>Important Distinction:</strong> Brand names themselves cannot be copyrighted in India. A brand name must be protected through <a href="/trademark-registration">trademark registration</a> under the Trade Marks Act, 1999. However, if a brand logo possesses artistic or creative elements, it qualifies for copyright registration as an 'artistic work' under Section 2(c). For complete brand protection, businesses should pursue both.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Brand Copyright Registration Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Copyright Eligibility Assessment</td><td>Evaluate which brand elements qualify for copyright protection versus trademark registration, ensuring the correct IP strategy from day one.</td></tr>
<tr><td>Copyright Search and Clearance</td><td>Thorough search of the Register of Copyrights to confirm your brand's creative elements do not conflict with existing copyrighted works.</td></tr>
<tr><td>Application Drafting and Filing</td><td>Prepare and file Form XIV with the Copyright Office, including Statement of Particulars, Statement of Further Particulars, and all supporting documents.</td></tr>
<tr><td>Objection Handling and Hearing</td><td>Respond to objections raised during the 30-day waiting period (Rule 70, Copyright Rules, 2013) and represent you in hearings before the Registrar.</td></tr>
<tr><td>Certificate Procurement</td><td>Track your application from diary number issuance through to receipt of the Copyright Registration Certificate under Section 45.</td></tr>
<tr><td>Dual Protection Strategy</td><td>Coordinate copyright and trademark registration in parallel for comprehensive brand protection under both the Copyright Act, 1957 and the Trade Marks Act, 1999.</td></tr>

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
            <h2 class="section-title">9-Step Process for Brand Copyright Registration</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The brand copyright registration process is administered by the Copyright Office under DPIIT, Ministry of Commerce and Industry. Follow these steps to register copyright over your brand's creative elements.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Copyright Eligibility</h3><p class="step-description">Verify that your brand element qualifies as an 'original work' under the Copyright Act, 1957. Logos with artistic or creative design elements qualify as 'artistic works' under Section 2(c). Plain text brand names or common shapes generally do not qualify.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Artistic merit verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Eligibility confirmed</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="32" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">&#169;</text><text x="60" y="42" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Check</text><path d="M48 62l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Eligible</span><span class="step-number-large">01</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Conduct Copyright Search</h3><p class="step-description">Search the Register of Copyrights to ensure no substantially similar work is already registered. This step is not mandatory but strongly recommended to avoid objections.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Register searched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> No conflicts found</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><line x1="70" y1="50" x2="88" y2="68" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/><path d="M53 40l5 5 10-10" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Search Clear</span><span class="step-number-large">02</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Form XIV on Copyright Portal</h3><p class="step-description">Visit copyright.gov.in and complete Form XIV in four steps: (a) main application with work, author, and applicant details; (b) Statement of Particulars; (c) Statement of Further Particulars; (d) scanned signature. Must include POA or Vakalatnama.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XIV filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal submission</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><rect x="70" y="60" width="25" height="10" rx="3" fill="#F5A623" opacity="0.6"/><text x="82" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">XIV</text></svg></div><span class="illustration-label">Form Filed</span><span class="step-number-large">03</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pay Government Fee</h3><p class="step-description">Pay Rs 500 per artistic work through the online payment gateway. Payment can also be made via postal order or demand draft payable to 'Registrar of Copyrights, New Delhi'.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 500 per work</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payment confirmed</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 500</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Fee Paid</span><span class="step-number-large">04</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive Diary Number</h3><p class="step-description">Upon successful submission and fee payment, the Copyright Office issues a Diary Number. This serves as official acknowledgment and allows you to track application status.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Diary number issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tracking enabled</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIARY #</text><rect x="30" y="45" width="60" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="6" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">TRACKING</text></svg></div><span class="illustration-label">Acknowledged</span><span class="step-number-large">05</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">30-Day Mandatory Waiting Period</h3><p class="step-description">A mandatory waiting period of 30 days begins after filing under Rule 70 of the Copyright Rules, 2013. Any person may file an objection during this period. If no objection is received, the application proceeds to examination.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 30-day wait</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> No objections = proceed</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="36" font-size="12" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">30</text><text x="60" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">DAYS</text></svg></div><span class="illustration-label">Wait Complete</span><span class="step-number-large">06</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Examination by Registrar</h3><p class="step-description">The Registrar examines the application for completeness and compliance. If objections were filed, a hearing is scheduled. The Registrar may raise queries that must be addressed within the prescribed timeline.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Examination done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Queries resolved</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><rect x="25" y="30" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="40" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="50" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Examined</span><span class="step-number-large">07</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Copyright Registration Certificate Issued</h3><p class="step-description">If approved, the Registrar records the work in the Register of Copyrights under Section 45 and issues a Copyright Registration Certificate. This serves as prima facie evidence of ownership in all courts across India.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 45 recorded</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="32" r="15" fill="#25D366" opacity="0.2"/><text x="60" y="30" font-size="9" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">&#169;</text><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Registered</text></svg></div><span class="illustration-label">Certificate Ready</span><span class="step-number-large">08</span></div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Brand Copyright Registration</h2>
            <div class="content-text">
                
                <p>Gather the following documents before filing your application:</p>
<ul>
<li>Completed Form XIV (Application for Registration of Copyright)</li>
<li>Three copies of the work (brand logo in high-quality image format, or the artistic/literary work in tangible form)</li>
<li>Statement of Particulars and Statement of Further Particulars</li>
<li>Applicant's identity proof (Aadhaar Card, PAN Card, or Passport)</li>
<li>No Objection Certificate (NOC) from the author if the applicant is different from the creator</li>
<li>No Objection Certificate from the publisher (if the work is published and the publisher differs from the applicant)</li>
<li>Power of Attorney (POA) or Vakalatnama if the application is filed through an advocate</li>
<li>Proof of creation date (original design files, timestamps, or other evidence establishing when the work was created)</li>
<li>TM-60 NOC from the Trademark Office - required under Section 45(1) if the artistic work is used or proposed to be used in relation to goods or services</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Brand Copyright Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Confusion Between Copyright and Trademark</td><td>Business owners attempt to copyright their brand name, which is not possible under Indian law</td><td>Patron Accounting conducts an IP audit to identify which brand elements need copyright vs trademark registration, ensuring the correct filing strategy.</td></tr>
<tr><td>Objections During 30-Day Waiting Period</td><td>Third parties may file objections claiming prior ownership or similarity under Rule 70</td><td>Pre-filing copyright search and robust application with comprehensive proof of originality. If objections arise, hearing representation before the Registrar.</td></tr>
<tr><td>Incomplete Documentation</td><td>Missing NOCs, incorrect form details, or wrong file formats cause delays and rejections</td><td>Checklist-driven process ensuring every document is verified and correctly formatted before submission to the Copyright Office.</td></tr>
<tr><td>Establishing Originality</td><td>The Copyright Office may question whether a logo or design is sufficiently original and artistic</td><td>We document the creative process, maintain creation timelines, and present the work demonstrating its originality and artistic merit.</td></tr>

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
            <h2 class="section-title">Brand Copyright Registration Fees in 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Literary, Dramatic, Musical, or Artistic Work (including brand logos)</td><td class="table-amount">Rs 500 per work</td></tr>
<tr><td>Sound Recording</td><td class="table-amount">Rs 2,000 per work</td></tr>
<tr><td>Computer Software / Programme</td><td class="table-amount">Rs 4,000 per work</td></tr>
<tr><td>Cinematograph Film</td><td class="table-amount">Rs 5,000 per work</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Brand Copyright Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20copyright%20for%20my%20brand.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Brand Copyright Registration Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Application Filing and Diary Number</td><td>Immediate (same day)</td></tr>
<tr><td>Mandatory Waiting Period for Objections</td><td>30 days (Rule 70, Copyright Rules, 2013)</td></tr>
<tr><td>Examination and Scrutiny (no objections)</td><td>1 to 3 months</td></tr>
<tr><td>Hearing (if objections raised)</td><td>Additional 2 to 4 months</td></tr>
<tr><td><strong>Total Timeline (standard - no objections)</strong></td><td><strong>2 to 6 months</strong></td></tr>
<tr><td><strong>Total Timeline (with objections)</strong></td><td><strong>4 to 9 months</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Applications prepared with complete documentation and correct formatting move through examination faster. Patron Accounting's checklist-driven process ensures error-free filing, reducing the likelihood of queries or delays from the Registrar.</p>

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
            <h2 class="section-title">Benefits of Professional Brand Copyright Registration</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Correct IP Strategy</h3><p class="feature-text">Our CA and CS team identifies which brand elements need copyright versus trademark protection, avoiding wasted filings and ensuring comprehensive coverage.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Error-Free Filing</h3><p class="feature-text">Incorrectly filled forms, missing NOCs, or wrong fee payments lead to rejection. Professional preparation eliminates these risks entirely.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Objection Management</h3><p class="feature-text">If objections are raised during the 30-day waiting period, our legal team prepares responses and represents you at hearings before the Registrar.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Faster Processing</h3><p class="feature-text">Applications prepared with complete documentation and correct formatting move through examination faster - reducing your typical 2-6 month timeline.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">170+ Country Protection</h3><p class="feature-text">India is a signatory to the Berne Convention and TRIPS Agreement. Your registered copyright enjoys protection in over 170 member countries worldwide.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Ongoing Compliance</h3><p class="feature-text">Advice on proper copyright notice display, licensing strategies, and enforcement options to maximise the value of your registration.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 500+ Brands Trust Patron Accounting for IP Protection</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India with registration and compliance services.</p>
<p><strong>500+ Brands Protected</strong> through copyright and trademark registration - startups, SMEs, and established enterprises.</p>
<p><strong>4.8/5 Google Rating</strong> based on verified client reviews. 98% client retention rate.</p>
<p><strong>15+ Years of Practice</strong> with deep expertise in copyright, trademark, and patent registration.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Bangalore - serving businesses across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Brand Copyright Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>With Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Cost</td><td>Rs 500 govt fee only</td><td>Starting Rs 4,999 (incl. govt fee + professional)</td></tr>
<tr><td>IP Strategy</td><td>Self-assessed - risk of wrong filing type</td><td>Expert copyright + trademark audit for comprehensive brand protection</td></tr>
<tr><td>Error Risk</td><td>High - form errors, missing NOCs, wrong file formats</td><td>Near zero - checklist-driven process</td></tr>
<tr><td>Objection Handling</td><td>Self-representation at hearing</td><td>Professional hearing representation before Registrar</td></tr>
<tr><td>Processing Time</td><td>4 to 9 months (typical with errors)</td><td>2 to 6 months (error-free filing)</td></tr>
<tr><td>Post-Registration Support</td><td>None</td><td>Licensing, enforcement advice, and notice display guidance</td></tr>

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
            <h2 class="section-title">Related Brand Protection Services</h2>
            <div class="content-text">
                
                <p>Brand copyright registration works best as part of a comprehensive intellectual property strategy. Patron Accounting also offers:</p>
<ul>
<li><strong><a href="/trademark-registration">Trademark Registration</a></strong> - Protect your brand name, logo, and tagline under the Trade Marks Act, 1999. Essential companion to copyright registration.</li>
<li><strong><a href="/logo-copyright-registration">Logo Copyright Registration</a></strong> - Dedicated service for registering artistic logos as copyright works under the Copyright Act, 1957.</li>
<li><strong><a href="/copyright-registration">Copyright Registration (General)</a></strong> - Registration for all categories of works including literary, dramatic, musical, and sound recordings.</li>
<li><strong><a href="/patent-registration">Patent Registration</a></strong> - Secure your inventions and innovations with patent protection.</li>
<li><strong><a href="/copyright-objection">Copyright Objection</a></strong> - Expert representation for filing or responding to copyright objections before the Registrar.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Brand Copyright Registration in India</h2>
            <div class="content-text">
                
                <p><strong>Primary Legislation:</strong> The <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Copyright Act, 1957</a> (as amended in 2012) and the Copyright Rules, 2013.</p>
<p><strong>Key Sections:</strong></p>
<ul>
<li><strong>Section 2(c):</strong> Defines 'artistic work' including paintings, sculptures, drawings, engravings, photographs, and works of artistic craftsmanship.</li>
<li><strong>Section 14:</strong> Enumerates exclusive rights of the copyright owner - reproduction, distribution, communication to public, and adaptation.</li>
<li><strong>Section 22:</strong> Term of copyright for published works: lifetime of author plus 60 years.</li>
<li><strong>Section 45:</strong> Registration of copyright by the Registrar of Copyrights.</li>
<li><strong>Section 48:</strong> Register of Copyrights constitutes prima facie evidence of the particulars entered therein.</li>
<li><strong>Section 51:</strong> Defines when copyright is deemed to be infringed.</li>
<li><strong>Section 55:</strong> Civil remedies including injunctions, damages, and accounts of profits.</li>
<li><strong>Section 63:</strong> Criminal penalty: imprisonment of 6 months to 3 years and fine of Rs 50,000 to Rs 2,00,000.</li>
<li><strong>Section 63A:</strong> Enhanced penalty for repeat offenders: minimum 1 year imprisonment and Rs 1,00,000 fine.</li>
</ul>
<p><strong>Section 45(1) Requirement for Logos:</strong> If an artistic work (such as a brand logo) is used or proposed to be used in relation to goods or services, the applicant must obtain a Search Certificate from the <a href="https://ipindia.gov.in" target="_blank" rel="noopener">Trademark Registry</a> (Form TM-60) before filing for copyright registration.</p>
<p><strong>International Treaties:</strong> India is a signatory to the Berne Convention, TRIPS Agreement, and WIPO Copyright Treaty (WCT) - providing protection in 170+ member countries.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Brand Copyright Registration</h2>
                    <p class="faq-expanded__lead">Answers about copyright vs trademark, fees, timeline, eligibility, infringement remedies, and dual protection strategy.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Brand Copyright Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can a brand name be copyrighted in India?</h3>
                        <div class="faq-expanded__a"><p>No, a brand name alone cannot be copyrighted in India. Brand names are protected through trademark registration under the Trade Marks Act, 1999. However, if your brand logo contains artistic or creative elements, the logo design can be registered as an 'artistic work' under Section 2(c) of the Copyright Act, 1957. For complete brand protection, businesses should pursue both copyright registration for the artistic logo and trademark registration for the brand name.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between copyright and trademark for brand protection?</h3>
                        <div class="faq-expanded__a"><p>Copyright protects original creative expressions like artistic logos, written content, and design elements under the Copyright Act, 1957. Trademark protects brand identifiers like names, logos, slogans used in commerce under the Trade Marks Act, 1999. Copyright lasts for the lifetime of the author plus 60 years and does not require renewal. Trademark is valid for 10 years and must be renewed. A brand logo can be protected under both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does brand copyright registration cost in India?</h3>
                        <div class="faq-expanded__a"><p>The government fee for registering copyright in an artistic or literary work is Rs 500 per work as prescribed under Schedule 2 of the Copyright Rules, 2013. For sound recordings, the fee is Rs 2,000, and for films, Rs 5,000. Patron Accounting's brand copyright registration package starts at Rs 4,999 inclusive of government and professional fees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does copyright registration take in India?</h3>
                        <div class="faq-expanded__a"><p>The standard timeline is approximately 2 to 6 months if no objections are raised. This includes the 30-day mandatory waiting period under Rule 70 of the Copyright Rules, 2013, followed by examination and scrutiny by the Registrar. If objections are filed by third parties, the process may extend to 4 to 9 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is copyright registration mandatory in India?</h3>
                        <div class="faq-expanded__a"><p>No, copyright registration is not mandatory. Copyright protection arises automatically upon creation of an original work. However, registration is strongly recommended because it provides prima facie evidence of ownership under Section 48 of the Copyright Act, 1957, which significantly strengthens your legal position in infringement disputes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if someone copies my copyrighted brand logo?</h3>
                        <div class="faq-expanded__a"><p>If someone infringes your copyrighted brand logo, you can pursue both civil and criminal remedies. Civil remedies under Section 55 include injunctions, damages, and accounts of profits. Criminal remedies under Section 63 provide for imprisonment ranging from 6 months to 3 years and fines between Rs 50,000 and Rs 2,00,000. These offences are cognizable and non-bailable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I copyright a logo and trademark it at the same time?</h3>
                        <div class="faq-expanded__a"><p>Yes, you can pursue both copyright and trademark registration simultaneously. This dual protection strategy is recommended for comprehensive brand security. Note that under Section 45(1) of the Copyright Act, you must obtain a TM-60 Search Certificate from the Trademark Registry if the artistic work is used on goods or services.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is Form XIV for copyright registration?</h3>
                        <div class="faq-expanded__a"><p>Form XIV is the prescribed application form under the Copyright Rules, 2013 for registering copyright in any category of work. It requires details including the title and nature of the work, author and applicant information, date of creation or publication, and ownership status. It can be filed online at copyright.gov.in or physically at the Copyright Office in New Delhi.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: What is brand copyright registration?</strong> A: The process of recording ownership of a brand's creative elements - logos, designs, original content - with the Copyright Office under the Copyright Act, 1957.</p>
<p><strong>Q: How much does it cost?</strong> A: Government fee is Rs 500 per artistic work under Schedule 2 of the Copyright Rules, 2013. Professional fees are additional.</p>
<p><strong>Q: How long is copyright valid?</strong> A: Lifetime of the author plus 60 years for individuals. 60 years from publication for company-owned works. No renewal required.</p>
<p><strong>Q: What penalty for infringement?</strong> A: 6 months to 3 years imprisonment and Rs 50,000 to Rs 2,00,000 fine under Section 63. Cognizable and non-bailable offence.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Your Brand's Creative Assets Deserve Legal Protection</h2>
            <div class="content-text">
                
                <p>In India's competitive business environment, brand imitation and design copying are growing concerns. Copyright infringement is a cognizable and non-bailable offence (Supreme Court, 2022), but registration is your strongest evidence of ownership.</p>
<p>The Copyright Office is now fully online, making registration faster and more accessible. The fee of Rs 500 per artistic work is among the lowest IP registration costs globally - the cost of not registering far exceeds the filing fee.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20brand%20copyright%20registration.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation with our IP experts.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Protect Your Brand with Copyright Registration</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Brand copyright registration is a critical step for businesses that invest in original creative assets. While copyright protection arises automatically, formal registration under the Copyright Act, 1957 creates an unassailable public record that serves as prima facie evidence of ownership.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">For brand elements that include artistic logos, original packaging designs, and creative content, copyright registration - combined with trademark registration for the brand name - provides the most comprehensive legal protection available under Indian intellectual property law.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's CA and CS team manages the entire process - from IP audit through application filing, objection handling, and certificate procurement. Starting from Rs 4,999. Contact us for a free consultation.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20copyright%20for%20my%20brand.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Brand%20Copyright%20Registration&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20brand%20copyright%20registration%20services.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Brand Copyright Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert copyright registration with local support from our CA and CS team. Click your city for details.</p>
  
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid">
        <a href="/brand-copyright-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/brand-copyright-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/brand-copyright-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/brand-copyright-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end support for brand IP protection</div>
    <div class="pa-cross-grid">
        <a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/logo-copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Logo Copyright</div><div class="pa-card-sub">India</div></div></a>
        <a href="/copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/patent-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Patent Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/copyright-objection" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">India</div></div></a>
        <a href="/trademark-opposition" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Opposition</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Content aligned with the Copyright Act, 1957, Copyright Rules, 2013, and current Copyright Office procedures. Next review: March 2027 or upon Copyright Act amendment.</p>
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
