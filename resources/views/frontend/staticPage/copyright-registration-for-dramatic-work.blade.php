
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
    <title>Copyright for Dramatic Work - Script, Play & Choreography</title>
    <meta name="description" content="Register copyright for dramatic works in India from Rs 499. Covers plays, scripts, choreography under Section 2(h) of the Copyright Act, 1957.">
    <link rel="canonical" href="/copyright-registration-for-dramatic-work">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Dramatic Work - Script, Play & Choreography">
    <meta property="og:description" content="Register copyright for dramatic works in India from Rs 499. Covers plays, scripts, choreography under Section 2(h) of the Copyright Act, 1957.">
    <meta property="og:url" content="/copyright-registration-for-dramatic-work">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Dramatic Work - Script, Play & Choreography">
    <meta name="twitter:description" content="Register copyright for dramatic works in India from Rs 499. Covers plays, scripts, choreography under Section 2(h) of the Copyright Act, 1957.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Copyright for Dramatic Work - Script, Play & Choreography",
          "description": "Register copyright for dramatic works in India from Rs 499. Covers plays, scripts, choreography under Section 2(h) of the Copyright Act, 1957.",
          "url": "https://www.patronaccounting.com/copyright-registration-for-dramatic-work",
          "serviceType": "Copyright for Dramatic Work - Script, Play & Choreography",
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
            "url": "https://www.patronaccounting.com/copyright-registration-for-dramatic-work",
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
              "name": "Copyright for Dramatic Work - Script, Play & Choreography",
              "item": "https://www.patronaccounting.com/copyright-registration-for-dramatic-work"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a dramatic work under the Copyright Act, 1957?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 2(h) of the Copyright Act, 1957, a dramatic work includes any piece for recitation, choreographic work or entertainment in dumb show, and the scenic arrangement or acting, the form of which is fixed in writing or otherwise. The definition explicitly excludes cinematograph films. Examples include stage plays, screenplays, scripts, dance compositions, mime performances, and theatrical stage directions."
              }
            },
            {
              "@type": "Question",
              "name": "How do I register copyright for a dramatic work in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "File an application using Form XIV on the Copyright Office portal at copyright.gov.in. Upload the work in PDF format, complete the Statement of Particulars, pay the government fee of Rs 500, and submit hard copies by post. After a 30-day waiting period for objections, the Copyright Office examines the application and issues the registration certificate if satisfied."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for copyright registration of a dramatic work?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The government fee is Rs 500 per work as prescribed under the Second Schedule of the Copyright Rules, 2013. This is the same fee applicable to literary, musical, and artistic works. Payment is online through the Copyright Office portal. Patron Accounting's professional service fee starts at Rs 4,999 in addition to the government fee."
              }
            },
            {
              "@type": "Question",
              "name": "How long does copyright last for dramatic works in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 22 of the Copyright Act, 1957, copyright in a dramatic work lasts for 60 years from the beginning of the calendar year following the year of the author's death. For joint authorship, the 60-year period is counted from the death of the last surviving author. For posthumous works, 60 years from first publication."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between literary work and dramatic work?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A literary work is intended to be read or recited, while a dramatic work is intended to be performed through acting, dancing, or physical expression. A novel is literary; a play script is dramatic. Both are protected under Section 13(1)(a). The Copyright Office distinguishes them based on whether the work allows itself to be read (literary) or forms the text upon which a performance rests (dramatic)."
              }
            },
            {
              "@type": "Question",
              "name": "Can choreography be copyrighted in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Section 2(h) specifically includes choreographic work within the definition of dramatic work. However, the choreography must be fixed in writing or otherwise - meaning it must exist in tangible form such as written notation (Labanotation, Benesh notation), a detailed written description, or a video recording. Improvised or unfixed dance routines may not qualify until documented."
              }
            },
            {
              "@type": "Question",
              "name": "Dramatic work ka copyright kaise kare?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Dramatic work ka copyright lene ke liye copyright.gov.in par Form XIV bharo. Work ka PDF upload karo (10 MB se kam), Rs 500 fee online pay karo, aur hard copies post se Copyright Office, New Delhi bhejo. 30 din ka waiting period hota hai. Uske baad examination aur certificate milta hai. Patron Accounting poora process handle karta hai - call karo +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "Does copyright for dramatic work include cinematograph films?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Section 2(h) explicitly excludes cinematograph films from the definition of dramatic work. A cinematograph film is protected as a separate category under Sections 13(1)(b) and 14(d). However, the script, screenplay, or dialogue written for a film does qualify as a dramatic work and can be registered separately."
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
                        Copyright for Dramatic Work in India - Registration and Protection
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Works Covered:</span> Plays, scripts, screenplays, dialogues, choreographic works, recitation pieces, dumb show, and scenic arrangements under Section 2(h).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Fee:</span> Rs 500 per work as prescribed under the Second Schedule of the Copyright Rules, 2013. Filed via Form XIV.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Protection Duration:</span> Lifetime of author plus 60 years from the beginning of the calendar year following the author's death under Section 22.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 4-8 months without objection. Includes 30-day mandatory waiting period and Copyright Office examination.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ clients served for copyright and IP services. 4.8/5 rating. Offices in Pune, Mumbai, Delhi, Bangalore.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Dramatic%20Work%20Copyright&body=Hello%2C%0A%0AI%20need%20dramatic%20work%20copyright%20registration.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Copyright%20Registration%20for%20a%20Dramatic%20Work.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Dramatic Work Copyright',
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
  
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Registered copyright for three original stage plays. Patron Accounting correctly classified them as dramatic works under Section 2(h) and handled the entire process. Certificate received in 5 months without any objections.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kale</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Playwright, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our dance company needed copyright for 6 original Bharatnatyam choreographies. Patron Accounting guided us on fixation requirements - we recorded each piece on video and created written notation. All registered successfully without issues.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">LN</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Lakshmi Narayan</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Choreographer, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Needed copyright for a web series screenplay before pitching to OTT platforms. Patron Accounting filed it as a dramatic work and the registration certificate gave us strong negotiating leverage during licensing discussions. Very professional team.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Aarav Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Screenwriter, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Someone performed our original play without permission. The copyright registration certificate from Patron Accounting was crucial in sending a cease-and-desist that was immediately effective. They also helped draft the infringement notice under Section 63.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Deshpande</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Theatre Director, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Registered copyright for 10 mime performance scripts for our physical theatre company. Patron Accounting understood the Section 2(h) dumb show classification perfectly and prepared all documentation. The batch filing process was efficient and cost-effective.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Varun Ghosh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mime Artist, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Protect your plays, scripts, choreography, and dramatic works with expert copyright registration from our CA and CS team.</p>
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
            <a href="#procedure-section" class="toc-btn">8-Step Process</a>
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
            <h2 class="section-title">Copyright for Dramatic Work - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Dramatic Work Copyright Services at a Glance</strong></p>
                    <p>Dramatic works - plays, scripts, screenplays, choreography, mime, and scenic arrangements - are specifically protected under the Copyright Act, 1957. Under Section 2(h), a dramatic work is defined as any piece for recitation, choreographic work or entertainment in dumb show, the scenic arrangement or acting, fixed in writing or otherwise. Registration provides prima facie evidence of ownership under Section 48. Government fee is Rs 500 per work. Protection lasts the author's lifetime plus 60 years.</p>
                </div>
                <p>While copyright arises automatically upon creation, registration provides critical advantages - prima facie evidence in court under Section 48, simplified enforcement in infringement cases, and a public record of your creative rights. For playwrights, screenwriters, choreographers, and performing artists, copyright registration is the most effective way to protect the work that forms the foundation of every performance.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>Copyright Act, 1957 read with Copyright Rules, 2013 (amended 2021)</td></tr>
<tr><td>Legal Definition</td><td>Section 2(h) - recitation, choreographic work, dumb show, scenic arrangement; excludes cinematograph films</td></tr>
<tr><td>Registration Authority</td><td>Registrar of Copyrights, Copyright Office, New Delhi (<a href="https://copyright.gov.in" target="_blank" rel="noopener">copyright.gov.in</a>)</td></tr>
<tr><td>Application Form</td><td>Form XIV under Rule 70, Copyright Rules, 2013</td></tr>
<tr><td>Government Fee</td><td>Rs 500 per work (Second Schedule, Copyright Rules, 2013)</td></tr>
<tr><td>Copyright Duration</td><td>Lifetime of author + 60 years (Section 22)</td></tr>
<tr><td>Patron Accounting Fee</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
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
                <h2 class="section-title">What Is Copyright for Dramatic Work?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Copyright for dramatic work is the legal protection granted to original dramatic creations under <strong>Section 13(1)(a) of the Copyright Act, 1957</strong>, giving the author exclusive rights to reproduce, perform, adapt, and translate the work.</p>
<p>Under <strong>Section 2(h)</strong>, a "dramatic work" is defined to include any piece for recitation, choreographic work or entertainment in dumb show, the scenic arrangement or acting, the form of which is fixed in writing or otherwise. The definition explicitly excludes cinematograph films, which are protected as a separate category.</p>
<p>The scope is deliberately broad, covering not just traditional plays and scripts but also choreographic compositions, mime performances, scenic arrangements, and stage directions. The exclusion of cinematograph films means that while a screenplay qualifies as a dramatic work, the film itself does not - it receives protection under a different provision. Registration with the <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a> creates prima facie evidence under Section 48.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Dramatic Work Copyright:</strong></p>
                    <p><strong>Dramatic Work (Section 2(h)):</strong> Any piece for recitation, choreographic work, dumb show entertainment, scenic arrangement or acting fixed in writing or otherwise; excludes cinematograph film.</p>
<p><strong>Choreographic Work:</strong> Dance compositions with fixed sequences of movements, steps, and patterns designed for performance; must be fixed in notation or recording to qualify.</p>
<p><strong>Scenic Arrangement:</strong> The design and direction of stage settings, blocking, lighting cues, and spatial composition for a theatrical performance.</p>
<p><strong>Dumb Show:</strong> Performance conducted entirely through gesture and physical expression without spoken dialogue; includes mime and pantomime.</p>
<p><strong>Fixation:</strong> The requirement under Section 2(h) that the dramatic work be fixed "in writing or otherwise" in a tangible medium to qualify for copyright protection.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Dramatic Work Copyright -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Dramatic Work Copyright</text>
                            <!-- Stage curtains -->
                            <path d="M45 48 Q45 80 60 90" stroke="#F5A623" stroke-width="2" fill="none" stroke-linecap="round"/>
                            <path d="M155 48 Q155 80 140 90" stroke="#F5A623" stroke-width="2" fill="none" stroke-linecap="round"/>
                            <line x1="45" y1="48" x2="155" y2="48" stroke="#F5A623" stroke-width="2.5"/>
                            <!-- Stage spotlight -->
                            <circle cx="100" cy="72" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1" opacity="0.6"/>
                            <!-- Drama masks -->
                            <circle cx="90" cy="72" r="10" fill="#fff" stroke="#14365F" stroke-width="1.2"/>
                            <text x="90" y="76" font-size="10" fill="#14365F" text-anchor="middle" font-family="Arial">&#9786;</text>
                            <circle cx="110" cy="72" r="10" fill="#fff" stroke="#14365F" stroke-width="1.2"/>
                            <text x="110" y="76" font-size="10" fill="#14365F" text-anchor="middle" font-family="Arial">&#9785;</text>
                            <!-- Labels -->
                            <rect x="55" y="100" width="35" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="72" y="110" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 2(h)</text>
                            <rect x="110" y="100" width="35" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="127" y="110" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">60 Yrs</text>
                            <!-- Check badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Dramatic Work</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Dramatic Work Copyright</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Copyright Act, 1957</span>
                        <strong>Section 2(h) - Dramatic Work</strong>
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
            <h2 class="section-title">Who Needs Copyright for Dramatic Work?</h2>
            <div class="content-text">
                
                <p>Copyright registration is relevant to any creator whose work is intended to be performed before an audience:</p>
<ul>
<li><strong>Playwrights and Scriptwriters:</strong> Authors of stage plays, one-act plays, radio plays, television scripts, screenplays, and dialogue writers.</li>
<li><strong>Choreographers:</strong> Creators of original dance compositions - ballet sequences, contemporary dance, classical dance arrangements (Kathak, Bharatnatyam, Odissi), and choreographic works fixed in notation, video, or written form.</li>
<li><strong>Theatre Directors and Production Companies:</strong> Directors creating original scenic arrangements, blocking plans, and stage directions. Production houses commissioning original dramatic works.</li>
<li><strong>Mime Artists and Physical Theatre Performers:</strong> Creators of dumb show entertainment and physical theatre pieces fixed in tangible form.</li>
<li><strong>Entertainment Studios and OTT Platforms:</strong> Companies commissioning original scripts, screenplays, and dramatic content for digital platforms and web series.</li>
<li><strong>Educational Institutions:</strong> Theatre departments and performing arts schools creating original dramatic works for teaching, festivals, or public performance.</li>
</ul>
<p><strong>Eligibility:</strong> The work must be original, fixed in writing or otherwise, and the author must be an Indian citizen/domiciled in India (unpublished) or the work must be first published in India.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Dramatic Work Copyright Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Filing Search</td><td>Verification that no identical or substantially similar dramatic work has been registered, reducing objection risk during examination.</td></tr>
<tr><td>Application Preparation (Form XIV)</td><td>Drafting Form XIV with Statement of Particulars and Statement of Further Particulars specific to dramatic works under Rule 70.</td></tr>
<tr><td>Document Compilation</td><td>Collection and organisation of all required documents - work in PDF, NOC from co-authors, identity proof, Power of Attorney, and Deed of Assignment.</td></tr>
<tr><td>Online Filing and Fee Payment</td><td>Submission through the <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office portal</a> with government fee of Rs 500 per work.</td></tr>
<tr><td>Objection Handling</td><td>Drafting and filing replies to discrepancy letters or objections raised by the Copyright Examiner within the 30-day deadline.</td></tr>
<tr><td>Certificate Follow-Up</td><td>Post-filing monitoring and follow-up with the Copyright Office until the registration certificate is issued and delivered.</td></tr>

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
            <h2 class="section-title">8-Step Dramatic Work Copyright Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles every step from work identification to certificate delivery. The process is governed by Section 45 read with Rule 70 of the Copyright Rules, 2013.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify and Fix the Dramatic Work</h3><p class="step-description">Ensure the work exists in tangible, fixed form as required by Section 2(h). For plays: written manuscript. For choreography: dance notation (Labanotation/Benesh) or video recording. Upload in PDF format (less than 10 MB).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Work fixed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PDF ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="32" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">2(h)</text><text x="60" y="43" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Fixed</text><path d="M48 62l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Work Fixed</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Conduct Prior Art Search</h3><p class="step-description">Before filing, verify that no substantially similar dramatic work has been registered. Reduces objection risk and strengthens the application.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> No conflicts</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Search clear</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><line x1="70" y1="50" x2="88" y2="68" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/><path d="M53 40l5 5 10-10" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Search Clear</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare Form XIV Application</h3><p class="step-description">Complete Form XIV under Rule 70 with type of work (dramatic), title, language, date of creation, author details, applicant details. Include Statement of Particulars and Statement of Further Particulars.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XIV ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Particulars complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><rect x="70" y="60" width="25" height="10" rx="3" fill="#F5A623" opacity="0.6"/><text x="82" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">XIV</text></svg></div><span class="illustration-label">Form Ready</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Upload Documents and Pay Fee</h3><p class="step-description">Upload work in PDF, scanned signature (below 512 KB), NOC, POA, and identity proof. Pay Rs 500 government fee online. Diary number issued upon successful submission.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 500 paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Diary # issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 500</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Fee Paid</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Submit Hard Copies by Post</h3><p class="step-description">Print Acknowledgement Slip and Form. Send hard copies with physical copy of the work by post to: Copyright Division, Boudhik Sampada Bhawan, Plot No. 32, Sector 14, Dwarka, New Delhi - 110078.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Posted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Received by CO</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">New Delhi</text><rect x="30" y="45" width="60" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="6" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">POSTED</text></svg></div><span class="illustration-label">Mailed</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">30-Day Mandatory Waiting Period</h3><p class="step-description">Copyright Office observes mandatory 30-day waiting period under Rule 70 to allow any interested party to raise objections. Notice given to every person claiming interest.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 30-day wait</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> No objections = proceed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="36" font-size="12" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">30</text><text x="60" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">DAYS</text></svg></div><span class="illustration-label">Wait Done</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Examination by Registrar</h3><p class="step-description">If no objection is received and Registrar is satisfied, the work is entered in the Register. If discrepancy found, the examiner issues an objection letter - response within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Examination done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="35" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="45" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Examined</span><span class="step-number-large">07</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Registration Certificate Issued</h3><p class="step-description">Work entered in Register of Copyrights under Section 45. Certificate downloadable from portal. Prima facie evidence of ownership under Section 48. Enables civil (Section 55) and criminal (Section 63) remedies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 45 recorded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="32" r="15" fill="#25D366" opacity="0.2"/><path d="M52 32l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Registered</text></svg></div><span class="illustration-label">Certificate Ready</span><span class="step-number-large">08</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Dramatic Work Copyright Registration</h2>
            <div class="content-text">
                
                <p>Prepare the following before filing:</p>
<ul>
<li><strong>Dramatic work in PDF format (less than 10 MB):</strong> Play script, screenplay, choreographic notation, or stage directions</li>
<li><strong>Form XIV (completed online):</strong> Prescribed application form under Rule 70</li>
<li><strong>Statement of Particulars:</strong> Details about the work, author, publisher, and ownership</li>
<li><strong>Statement of Further Particulars:</strong> Additional details specific to dramatic works</li>
<li><strong>Scanned signature (below 512 KB):</strong> For uploading during online application</li>
<li><strong>Identity proof:</strong> PAN card, Aadhaar, passport, or voter ID</li>
<li><strong>Address proof:</strong> Utility bill, bank statement, or Aadhaar card</li>
<li><strong>No Objection Certificate (NOC):</strong> Required if applicant is not the author; also from employer if work created during employment (conditional)</li>
<li><strong>Power of Attorney:</strong> Required only when filing through an authorised representative (conditional)</li>
<li><strong>Deed of Assignment:</strong> Required if copyright has been assigned by the original author (conditional)</li>
<li><strong>Two physical copies of the work:</strong> For submission by post to the Copyright Office</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Dramatic Work Copyright Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Choreographic Work Not Fixed in Writing</td><td>Section 2(h) requires fixation "in writing or otherwise" - unfixed dance routines may not qualify</td><td>Record via video, create written notation (Labanotation/Benesh), or prepare detailed step-by-step written description to meet fixation requirement.</td></tr>
<tr><td>Confusion Between Dramatic and Literary Work</td><td>Dramatic work is intended to be performed; literary work is intended to be read - misclassification causes delays</td><td>Our team identifies the correct category based on the work's intended use. Scripts for performance are dramatic; novels are literary.</td></tr>
<tr><td>Objection on Grounds of Similarity</td><td>Third parties may claim the work is substantially similar to an existing registered work</td><td>Legally sound reply drafting citing Act provisions and case law, demonstrating originality with supporting evidence of independent creation.</td></tr>
<tr><td>Multiple Authors or Joint Ownership</td><td>Joint authorship requires consent of all authors and clear documentation of each contribution</td><td>We prepare NOCs from all co-authors and clearly document each author's contribution in the application to avoid future disputes.</td></tr>

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
            <h2 class="section-title">Dramatic Work Copyright Registration Fees in 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Dramatic Work (play, script, choreography)</td><td class="table-amount">Rs 500 per work</td></tr>
<tr><td>Literary Work (novel, article, software)</td><td class="table-amount">Rs 500 per work</td></tr>
<tr><td>Musical Work (composition, score)</td><td class="table-amount">Rs 500 per work</td></tr>
<tr><td>Artistic Work (painting, logo, design)</td><td class="table-amount">Rs 500 per work</td></tr>
<tr><td>Sound Recording</td><td class="table-amount">Rs 2,000 per work</td></tr>
<tr><td>Cinematograph Film</td><td class="table-amount">Rs 5,000 per work</td></tr>
<tr><td>Change in Registered Particulars</td><td class="table-amount">Rs 200</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Dramatic Work Copyright consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20copyright%20for%20my%20play%2Fscript.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Dramatic Work Copyright Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Application preparation and filing</td><td>3-5 working days (with Patron Accounting)</td></tr>
<tr><td>Diary number issuance</td><td>Immediate upon successful online submission</td></tr>
<tr><td>30-day mandatory waiting period</td><td>30 days from date of application</td></tr>
<tr><td>Examination by Copyright Office</td><td>1-3 months after waiting period</td></tr>
<tr><td>Discrepancy response (if raised)</td><td>30 days from date of discrepancy letter</td></tr>
<tr><td><strong>Certificate issuance (without objection)</strong></td><td><strong>4-8 months from filing</strong></td></tr>
<tr><td>Certificate issuance (with objection)</td><td>8-18 months from filing</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> The 30-day waiting period is mandatory under Rule 70 and cannot be expedited. Applications with complete documentation and correct category classification move through examination faster. Patron Accounting ensures error-free filing.</p>

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
            <h2 class="section-title">5 Benefits of Registering Copyright for Dramatic Work</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Prima Facie Evidence</h3><p class="feature-text">Under Section 48, the Register of Copyrights is prima facie evidence of the particulars entered therein. A registered certificate significantly strengthens your position in infringement disputes.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Exclusive Rights Protection</h3><p class="feature-text">Section 14 grants exclusive rights to reproduce, perform publicly, make film or sound recording, translate, and adapt. Registration creates a public record of these rights.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Civil and Criminal Remedies</h3><p class="feature-text">Enables civil remedies (injunction, damages, accounts of profits) under Section 55 and criminal remedies (imprisonment up to 3 years, fine Rs 50,000-Rs 2,00,000) under Section 63.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Licensing and Assignment</h3><p class="feature-text">Registered copyright makes it easier to license performance rights, translation rights, and adaptation rights to production houses, theatres, and broadcasting organisations.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Customs Protection</h3><p class="feature-text">A registered copyright can be recorded with Indian Customs under Section 53 to prevent importation of infringing copies of your dramatic work.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">60-Year Protection</h3><p class="feature-text">Copyright in dramatic works lasts for the author's lifetime plus 60 years - one of the longest IP protection periods available under Indian law.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 500+ Clients Trust Patron Accounting for IP Services</h2>
            <div class="content-text">
                
                <p><strong>500+ Clients Served</strong> across India for intellectual property, tax, and compliance services.</p>
<p><strong>4.8/5 Average Client Rating</strong> based on verified reviews for professional service quality.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Bangalore - serving creators and businesses across India.</p>
<p><strong>CA and CS Qualified Team</strong> with dedicated IP consultants handling copyright, trademark, and patent matters.</p>
<p><strong>End-to-End Service</strong> from application preparation to certificate delivery and post-registration enforcement support.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Dramatic Work Copyright Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY (Self-Filing)</th><th>Professional (Patron Accounting)</th></tr></thead>
                    <tbody>
                        <tr><td>Understanding of Copyright Act</td><td>Must self-study Sections 2(h), 13, 14, 22, 45</td><td>Handled by CA and CS team with IP expertise</td></tr>
<tr><td>Category Classification</td><td>Risk of misclassifying dramatic vs literary</td><td>Correct category identification based on work type</td></tr>
<tr><td>Form XIV Completion</td><td>Complex form with Statement of Particulars</td><td>Professionally prepared with accurate details</td></tr>
<tr><td>Document Preparation</td><td>Self-managed; risk of missing NOC or affidavit</td><td>Complete checklist followed; nothing missed</td></tr>
<tr><td>Objection Handling</td><td>Must draft legal reply independently</td><td>Expert reply with Act provisions and case law</td></tr>
<tr><td>Timeline Management</td><td>Must track 30-day deadlines independently</td><td>Tracked and managed throughout the process</td></tr>
<tr><td>Cost</td><td>Government fee Rs 500 only</td><td>Starting Rs 4,999 + government fee Rs 500</td></tr>
<tr><td>Post-Filing Support</td><td>Must follow up independently</td><td>We track until certificate is issued</td></tr>

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
            <h2 class="section-title">Related Copyright and IP Services</h2>
            <div class="content-text">
                
                <p>Patron Accounting offers a full range of intellectual property services:</p>
<ul>
<li><strong><a href="/copyright-registration">Copyright Registration</a></strong> - Registration for literary, artistic, musical works, software, cinematograph films, and sound recordings.</li>
<li><strong><a href="/copyright-objection">Copyright Objection Reply</a></strong> - Expert reply drafting for copyright objections and discrepancy letters.</li>
<li><strong><a href="/trademark-registration">Trademark Registration</a></strong> - Brand protection under the Trade Marks Act, 1999.</li>
<li><strong><a href="#">Trademark Objection Reply</a></strong> - Expert reply drafting for trademark examination reports.</li>
<li><strong><a href="/private-limited-company-registration">Company Registration</a></strong> - Private Limited, LLP, and OPC incorporation for entertainment and creative businesses.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Dramatic Work Copyright in India</h2>
            <div class="content-text">
                
                <p><strong>Primary Legislation:</strong> <a href="https://copyright.gov.in/Documents/Copyright_Act_1957.pdf" target="_blank" rel="noopener">Copyright Act, 1957</a> (as amended 2012); Copyright Rules, 2013 (amended 2021).</p>
<p><strong>Key Sections:</strong></p>
<ul>
<li><strong><a href="https://indiankanoon.org/doc/31552" target="_blank" rel="noopener">Section 2(h)</a>:</strong> Definition - recitation, choreographic work, dumb show, scenic arrangement; excludes cinematograph film.</li>
<li><strong>Section 2(a)(i):</strong> Adaptation of dramatic work includes conversion into a non-dramatic work.</li>
<li><strong>Section 13(1)(a):</strong> Copyright subsists in original literary, dramatic, musical, and artistic works.</li>
<li><strong>Section 14(a):</strong> Exclusive rights - reproduction, public performance, cinematograph film, sound recording, translation, adaptation.</li>
<li><strong>Section 17:</strong> First owner is the author; exceptions for employment and commission.</li>
<li><strong>Section 22:</strong> Term of copyright - lifetime of author plus 60 years.</li>
<li><strong>Section 45:</strong> Entries in the Register of Copyrights.</li>
<li><strong>Section 48:</strong> Register as prima facie evidence.</li>
</ul>
<p><strong>Penalties:</strong></p>
<ul>
<li><strong>Section 55:</strong> Civil remedies - injunction, damages, accounts of profits.</li>
<li><strong>Section 63:</strong> Criminal - imprisonment up to 3 years, fine Rs 50,000 to Rs 2,00,000.</li>
</ul>
<p><strong>Regulatory:</strong> <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office, DPIIT</a>. Appeals to Commercial Court (IPAB abolished 2021).</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Copyright for Dramatic Work</h2>
                    <p class="faq-expanded__lead">Answers about dramatic work definition, registration process, fees, duration, choreography copyright, and the difference between dramatic and literary works.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Dramatic Work Copyright',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a dramatic work under the Copyright Act, 1957?</h3>
                        <div class="faq-expanded__a"><p>Under Section 2(h) of the Copyright Act, 1957, a dramatic work includes any piece for recitation, choreographic work or entertainment in dumb show, and the scenic arrangement or acting, the form of which is fixed in writing or otherwise. The definition explicitly excludes cinematograph films. Examples include stage plays, screenplays, scripts, dance compositions, mime performances, and theatrical stage directions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How do I register copyright for a dramatic work in India?</h3>
                        <div class="faq-expanded__a"><p>File an application using Form XIV on the Copyright Office portal at copyright.gov.in. Upload the work in PDF format, complete the Statement of Particulars, pay the government fee of Rs 500, and submit hard copies by post. After a 30-day waiting period for objections, the Copyright Office examines the application and issues the registration certificate if satisfied.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for copyright registration of a dramatic work?</h3>
                        <div class="faq-expanded__a"><p>The government fee is Rs 500 per work as prescribed under the Second Schedule of the Copyright Rules, 2013. This is the same fee applicable to literary, musical, and artistic works. Payment is online through the Copyright Office portal. Patron Accounting's professional service fee starts at Rs 4,999 in addition to the government fee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does copyright last for dramatic works in India?</h3>
                        <div class="faq-expanded__a"><p>Under Section 22 of the Copyright Act, 1957, copyright in a dramatic work lasts for 60 years from the beginning of the calendar year following the year of the author's death. For joint authorship, the 60-year period is counted from the death of the last surviving author. For posthumous works, 60 years from first publication.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between literary work and dramatic work?</h3>
                        <div class="faq-expanded__a"><p>A literary work is intended to be read or recited, while a dramatic work is intended to be performed through acting, dancing, or physical expression. A novel is literary; a play script is dramatic. Both are protected under Section 13(1)(a). The Copyright Office distinguishes them based on whether the work allows itself to be read (literary) or forms the text upon which a performance rests (dramatic).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can choreography be copyrighted in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 2(h) specifically includes choreographic work within the definition of dramatic work. However, the choreography must be fixed in writing or otherwise - meaning it must exist in tangible form such as written notation (Labanotation, Benesh notation), a detailed written description, or a video recording. Improvised or unfixed dance routines may not qualify until documented.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Dramatic work ka copyright kaise kare?</h3>
                        <div class="faq-expanded__a"><p>Dramatic work ka copyright lene ke liye copyright.gov.in par Form XIV bharo. Work ka PDF upload karo (10 MB se kam), Rs 500 fee online pay karo, aur hard copies post se Copyright Office, New Delhi bhejo. 30 din ka waiting period hota hai. Uske baad examination aur certificate milta hai. Patron Accounting poora process handle karta hai - call karo +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does copyright for dramatic work include cinematograph films?</h3>
                        <div class="faq-expanded__a"><p>No. Section 2(h) explicitly excludes cinematograph films from the definition of dramatic work. A cinematograph film is protected as a separate category under Sections 13(1)(b) and 14(d). However, the script, screenplay, or dialogue written for a film does qualify as a dramatic work and can be registered separately.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: What form is used?</strong> A: Form XIV under Rule 70 of the Copyright Rules, 2013.</p>
<p><strong>Q: How much does it cost?</strong> A: Rs 500 government fee per work + professional service fee starting Rs 4,999.</p>
<p><strong>Q: How long does it take?</strong> A: 4-8 months without objection; 8-18 months with objection.</p>
<p><strong>Q: Is a screenplay a dramatic work?</strong> A: Yes. A screenplay is intended to be performed and qualifies under Section 2(h).</p>
<p><strong>Q: Can I register without professional help?</strong> A: Yes, but professional assistance ensures correct category, complete documentation, and timely filing.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Protect Your Dramatic Work Before It Is Performed or Published</h2>
            <div class="content-text">
                
                <p>While copyright arises automatically upon creation, without registration, proving ownership in court becomes significantly harder. Every day your dramatic work remains unregistered is a day it remains vulnerable to unauthorised reproduction, performance, or adaptation.</p>
<p>The government fee is just Rs 500 with protection lasting 60 years beyond the author's lifetime - one of the most cost-effective intellectual property protections available to creative professionals in India.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20copyright%20registration%20for%20a%20dramatic%20work.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Dramatic Work Copyright with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Copyright registration for dramatic works provides playwrights, scriptwriters, choreographers, and performing artists with the strongest possible legal foundation for protecting their creative expressions. The process under the Copyright Act, 1957 and Copyright Rules, 2013 is straightforward but requires careful attention to category classification, document preparation, and deadline management.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">With a government fee of Rs 500 and protection lasting 60 years beyond the author's lifetime, copyright registration for dramatic works is one of the most cost-effective intellectual property protections available.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's CA and CS team handles every step - from application preparation to certificate delivery. Starting from Rs 4,999. Contact us for a free consultation.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20copyright%20for%20my%20play%2Fscript.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Dramatic%20Work%20Copyright&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20copyright%20registration%20for%20a%20dramatic%20work.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Dramatic Work Copyright Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert copyright registration for plays, scripts, and choreography with local support.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/copyright-registration-for-dramatic-work/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/copyright-registration-for-dramatic-work/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/copyright-registration-for-dramatic-work/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/copyright-registration-for-dramatic-work/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete copyright and IP protection</div><div class="pa-cross-grid"><a href="/copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-registration-for-cinematographic-film" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Film Copyright</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-objection" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-assignment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Content aligned with the Copyright Act, 1957, Copyright Rules, 2013 (amended 2021), and current Copyright Office procedures. Next review: March 2027.</p>
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
