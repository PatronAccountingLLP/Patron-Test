
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
    <title>Copyright for Sound Recording - Audio, Podcast & Jingle</title>
    <meta name="description" content="Copyright for sound recording in India costs Rs 2,000 per work under the Copyright Act, 1957. Learn the procedure, documents, rights and benefits of registration.">
    <link rel="canonical" href="/copyright-registration-for-sound-recording">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Sound Recording - Audio, Podcast & Jingle">
    <meta property="og:description" content="Copyright for sound recording in India costs Rs 2,000 per work under the Copyright Act, 1957. Learn the procedure, documents, rights and benefits of registration.">
    <meta property="og:url" content="/copyright-registration-for-sound-recording">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Sound Recording - Audio, Podcast & Jingle">
    <meta name="twitter:description" content="Copyright for sound recording in India costs Rs 2,000 per work under the Copyright Act, 1957. Learn the procedure, documents, rights and benefits of registration.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Copyright for Sound Recording - Audio, Podcast & Jingle",
          "description": "Copyright for sound recording in India costs Rs 2,000 per work under the Copyright Act, 1957. Learn the procedure, documents, rights and benefits of registration.",
          "url": "https://www.patronaccounting.com/copyright-registration-for-sound-recording",
          "serviceType": "Copyright for Sound Recording - Audio, Podcast & Jingle",
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
            "url": "https://www.patronaccounting.com/copyright-registration-for-sound-recording",
            "price": "2000"
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
              "name": "Copyright for Sound Recording - Audio, Podcast & Jingle",
              "item": "https://www.patronaccounting.com/copyright-registration-for-sound-recording"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the government fee for copyright registration of a sound recording?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The prescribed fee is Rs 2,000 per work under Schedule II of the Copyright Rules. This fee is payable online through the Non-Tax Receipt Portal (NTRP) on copyright.gov.in or by demand draft to the Registrar of Copyrights, New Delhi. Each track is treated as a separate work, so a 10-track album requires 10 applications with a total fee of Rs 20,000."
              }
            },
            {
              "@type": "Question",
              "name": "Who is considered the author of a sound recording?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 2(d)(v) of the Copyright Act, 1957, the producer of the sound recording is considered the author. Section 2(uu) defines the producer as the person who takes the initiative and responsibility for making the work. This means the music label, production house or individual who funds and organises the recording is typically the first owner of copyright."
              }
            },
            {
              "@type": "Question",
              "name": "How long does copyright protection last for a sound recording?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 27, copyright in a sound recording subsists for 60 years from the beginning of the calendar year following the year in which the recording is first published. A recording published in 2026 would have protection until 31 December 2086. This is different from literary and musical works, where protection lasts for the author's lifetime plus 60 years."
              }
            },
            {
              "@type": "Question",
              "name": "Is copyright registration mandatory for sound recordings?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, copyright registration is not mandatory in India. Copyright protection arises automatically upon creation of an original work. However, registration under Section 45 creates a public record and provides prima facie evidence of ownership under Section 48. This significantly simplifies enforcement and is strongly recommended for commercial recordings."
              }
            },
            {
              "@type": "Question",
              "name": "Can the same song have multiple copyrights?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 13(4), a single song can have up to four layers of rights - the lyricist holds copyright in the literary work (lyrics), the composer holds copyright in the musical work (composition), the producer holds copyright in the sound recording, and the singer holds performer's rights under Section 38."
              }
            },
            {
              "@type": "Question",
              "name": "What is a cover version and how does it relate to sound recording copyright?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 31C, a statutory licence allows any person to make a cover version (new sound recording) of a previously recorded literary or musical work, subject to payment of royalty. The cover version cannot be made until five calendar years after the end of the year in which the first recording was made. The person making the cover version must pay prescribed royalties."
              }
            },
            {
              "@type": "Question",
              "name": "What are the penalties for infringing copyright in a sound recording?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 63, copyright infringement carries a minimum imprisonment of six months (extendable to three years) and a fine of Rs 50,000 to Rs 2,00,000. Under Section 63A, repeat offenders face enhanced penalties of one to three years imprisonment and fines of Rs 1,00,000 to Rs 2,00,000. The Supreme Court has confirmed this is a cognizable and non-bailable offence."
              }
            },
            {
              "@type": "Question",
              "name": "What is the role of PPL in sound recording copyright?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Phonographic Performance Limited (PPL) is the registered copyright society for sound recordings in India. PPL manages and issues licences for the public performance and broadcasting of sound recordings on behalf of its member labels and producers. Membership enables collective management of rights and streamlined royalty collection from commercial establishments, radio stations, and digital platforms."
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
                        Copyright for Sound Recording in India - Online Registration Process
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Fee:</span> Rs 2,000 per work - application filed on Form XIV with the Registrar of Copyrights, New Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>60-Year Protection:</span> From the beginning of the calendar year following publication under Section 27 of the Copyright Act, 1957</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Online Filing:</span> Application filed through the Copyright Office portal at copyright.gov.in using Form XIV with Statement of Particulars</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>End-to-End Support:</span> Document preparation, NOC drafting, application filing, objection handling, and certificate procurement by CA and CS team</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses and music producers across India for copyright and IP services</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Sound%20Recording%20Copyright&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20copyright%20for%20sound%20recording.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20copyright%20registration%20for%20a%20sound%20recording.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Copyright for Sound Recording',
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting handled our entire music catalogue copyright registration - 25 tracks across 3 albums. The team was thorough with NOC preparation for every lyricist and composer. All certificates received within 4 months.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RV</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajan Verma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Music Label Owner, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As an independent artist releasing on Spotify and Apple Music, I had no idea about the copyright process. Patron made it simple - they explained the difference between my song copyright and the sound recording copyright. Very helpful.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ananya Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Independent Artist, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our podcast production company needed copyright for 50+ episodes. Patron set up a streamlined bulk filing process. The per-track application requirement was news to us - glad we had professional help to avoid discrepancy notices.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KM</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Karan Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CEO, AudioVerse Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We faced a third-party objection from someone claiming similar rights to our background score. Patron's team drafted a detailed reply with evidence of our production process and represented us at the hearing. Objection dismissed.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PI</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Iyer</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Music Director, Chennai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron helped us understand the layered copyright structure - lyrics, composition, and recording. We registered all three separately for our original album. Their advisory on PPL membership was a bonus.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AJ</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Producer, Melody Works Studios</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
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
                    <p>Expert sound recording copyright registration - from NOC preparation to certificate issuance under the Copyright Act, 1957.</p>
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
            <a class="toc-btn" href="#overview-section">Overview</a>
            <a class="toc-btn" href="#what-section">What Is It</a>
            <a class="toc-btn" href="#who-section">Who Needs It</a>
            <a class="toc-btn" href="#services-section">Our Services</a>
            <a class="toc-btn" href="#procedure-section">8-Step Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#timeline-section">Timeline</a>
            <a class="toc-btn" href="#benefits-section">Benefits</a>
            <a class="toc-btn" href="#comparison-section">DIY vs Pro</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright for Sound Recording - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Copyright for Sound Recording Services at a Glance</strong></p>
                    <p>Sound recording copyright protects the exclusive rights of the producer or owner of an audio recording under Indian law. Whether you are a music label, an independent artist, or a podcaster, registering your copyright establishes an official public record of ownership that strengthens your legal position against piracy and unauthorised use.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Copyright Act, 1957 and Copyright Rules, 2013</td></tr>
                        <tr><td>Government Fee</td><td>Rs 2,000 per work (sound recording)</td></tr>
                        <tr><td>Application Form</td><td>Form XIV - filed online at <a href="https://copyright.gov.in" target="_blank" rel="noopener">copyright.gov.in</a></td></tr>
                        <tr><td>Duration of Protection</td><td>60 years from the calendar year following publication (Section 27)</td></tr>
                        <tr><td>Author</td><td>Producer of the sound recording - Section 2(d)(v)</td></tr>
                        <tr><td>Mandatory Waiting Period</td><td>30 days for third-party objections</td></tr>
                        <tr><td>Timeline</td><td>2-9 months (depending on objections and backlog)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:0;</p>
                </div>
                <p>The Copyright Act, 1957 - read with the Copyright Rules, 2013 - provides the complete legal framework for sound recording registration in India. Under Section 2(xx), a sound recording means a recording of sounds from which such sounds may be produced, regardless of the medium. This covers songs, music albums, podcast episodes, audiobooks, spoken-word recordings, background scores, and any other audio content captured in a tangible format.</p>
                <p>It is important to understand that a sound recording is treated as a distinct category of work under Section 13(1)(c), separate from the underlying literary work (lyrics) or musical work (composition). Under Section 13(4), the copyright in a sound recording does not affect the separate copyright in the underlying work. Patron Accounting's CA and CS team handles the entire registration process from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is Copyright for Sound Recording?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Copyright for sound recording is a legal right under the Copyright Act, 1957 that grants the owner exclusive control over the reproduction, distribution and public communication of a recorded audio work in India.</p>
                    <p>Under Section 2(xx), a sound recording means a recording of sounds from which such sounds may be produced, regardless of the medium on which it is recorded or the method by which the sounds are produced. This covers songs, music albums, podcast episodes, audiobooks, spoken-word recordings, background scores and any other audio content captured in a tangible format.</p>
                    <p>Under Section 13(4), the copyright in a sound recording does not affect the separate copyright that may exist in the literary, dramatic or musical work from which the recording is made. This means multiple copyrights can co-exist in a single song - one for the lyrics, one for the composition and one for the sound recording itself. The key rights conferred under Section 14(e) include making copies, selling or renting copies, and communicating the recording to the public.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright for Sound Recording:</strong></p>
                    <p><strong>Sound Recording (Section 2(xx))</strong> - A recording of sounds from which sounds may be produced, regardless of medium or method. Does not include audiovisual works or cinematograph films.</p>
                    <p><strong>Producer (Section 2(uu))</strong> - The person who takes the initiative and responsibility for making the sound recording. Deemed author under Section 2(d)(v).</p>
                    <p><strong>Musical Work (Section 2(p))</strong> - A work consisting of music, including graphical notation, but excluding words or actions intended to be performed with the music.</p>
                    <p><strong>Section 31C - Cover Versions</strong> - Statutory licence allowing cover versions of previously recorded works, subject to royalty payment, after five calendar years from the first recording.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Vinyl Record / Sound Wave -->
                            <circle cx="100" cy="70" r="50" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <circle cx="100" cy="70" r="38" fill="none" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                            <circle cx="100" cy="70" r="28" fill="none" stroke="#14365F" stroke-width="0.8" opacity="0.2"/>
                            <circle cx="100" cy="70" r="12" fill="#14365F" opacity="0.15"/>
                            <circle cx="100" cy="70" r="4" fill="#14365F"/>
                            <!-- Sound waves -->
                            <path d="M155 50 Q162 60 155 70 Q148 80 155 90" stroke="#F5A623" stroke-width="2" fill="none" stroke-linecap="round"/>
                            <path d="M165 42 Q175 56 165 70 Q155 84 165 98" stroke="#F5A623" stroke-width="2" fill="none" stroke-linecap="round"/>
                            <!-- Copyright badge -->
                            <circle cx="160" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <text x="160" y="36" font-size="16" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">C</text>
                            <!-- Section tag -->
                            <rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 14(e)</text>
                            <!-- Label -->
                            <text x="100" y="168" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sound Recording Copyright</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 14(e) Protected</span>
                        <strong>Sound Recording Copyright</strong>
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
            <h2 class="section-title">Who Needs Copyright for Sound Recording?</h2>
            <div class="content-text">
                
                <p>Copyright for sound recording is relevant for any individual or entity that creates, produces or owns recorded audio content:</p>
                <ul>
                    <li><strong>Music producers and record labels</strong> releasing songs, albums or singles</li>
                    <li><strong>Independent artists and musicians</strong> self-releasing tracks on Spotify, Apple Music, JioSaavn or YouTube Music</li>
                    <li><strong>Podcasters and audio content creators</strong> building a library of episodes</li>
                    <li><strong>Audiobook publishers</strong> recording literary works in audio format</li>
                    <li><strong>Film production houses</strong> recording background scores and soundtracks</li>
                    <li><strong>Advertising agencies</strong> creating jingles and commercial audio content</li>
                    <li><strong>Educational institutions</strong> producing recorded lectures and course material</li>
                </ul>
                <p>While copyright protection exists automatically upon creation, registration provides prima facie evidence of ownership under Section 48. This is particularly valuable when seeking legal remedies against unauthorised use or piracy, as a certificate simplifies litigation significantly.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Sound Recording Copyright Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Filing Assessment</td><td>Evaluating your sound recording for originality and eligibility under the Copyright Act, including correct classification under Section 13(1)(c)</td></tr>
                        <tr><td>Document Preparation</td><td>Drafting NOC agreements between lyricists, composers, singers, producers and other right-holders as required by Copyright Office guidelines</td></tr>
                        <tr><td>Application Filing (Form XIV)</td><td>Completing Form XIV with Statement of Particulars on the <a href="https://copyright.gov.in" target="_blank" rel="noopener">copyright.gov.in</a> portal and uploading digital copy of the recording</td></tr>
                        <tr><td>Objection Handling</td><td>Responding to third-party objections raised during the 30-day waiting period with evidence-backed replies and hearing representation</td></tr>
                        <tr><td>Certificate Procurement</td><td>Tracking your application through examination and securing the digitally signed registration certificate from the Copyright Office</td></tr>
                        <tr><td>Licensing and Royalty Advisory</td><td>Guidance on licensing, assignment under Section 18/19, royalty structuring, and PPL membership for collective rights management</td></tr>

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
            <h2 class="section-title">8-Step Sound Recording Copyright Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting guides you through the complete copyright registration process for sound recordings - from preliminary search to certificate issuance under the Copyright Act, 1957.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Conduct Preliminary Search</h3>
        <p class="step-description">Check whether any existing registration exists for a similar sound recording through the Copyright Office records to avoid duplicate applications and reduce objection risk.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Existing registrations checked</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> No duplicates found</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="55" cy="40" r="22" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="72" y1="55" x2="90" y2="73" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="42" y1="32" x2="62" y2="32" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="42" y1="42" x2="60" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Search Complete</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Obtain NOC from All Right-Holders</h3>
        <p class="step-description">Secure No Objection Certificates from the lyricist, composer, singer and any other person involved in the creation. The NOC must state awareness of the registration application. Include NOC clauses in production contracts.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All NOCs collected</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Right-holders confirmed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="40" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="30" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NOC 1</text><text x="60" y="45" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NOC 2</text><text x="90" y="40" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">NOC 3</text></svg></div>
            <span class="illustration-label">NOCs Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Prepare and File Form XIV</h3>
        <p class="step-description">Submit the application online through copyright.gov.in. Form XIV includes the Statement of Particulars with details such as the title, name of the producer, name of the applicant, year of publication and details of rights held.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XIV completed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SoP attached</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM XIV</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Application Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Pay Government Fee</h3>
        <p class="step-description">The prescribed fee for sound recording copyright is Rs 2,000 per work, payable online through the Non-Tax Receipt Portal (NTRP) or by demand draft payable to the Registrar of Copyrights, New Delhi.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 2,000 paid per track</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Diary number received</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="20" width="90" height="15" rx="6" fill="#14365F"/><text x="60" y="31" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">Rs 2,000</text><line x1="25" y1="48" x2="95" y2="48" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><circle cx="85" cy="58" r="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M82 58l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Fee Paid</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Upload Copy of the Recording</h3>
        <p class="step-description">Submit a clear digital copy of the sound recording. Each application covers one track only. Multiple tracks in a single CD require separate applications with separate fees for each track as per Copyright Office guidelines.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Digital copy uploaded</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> One track per application</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 55 L60 30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M50 38 L60 28 L70 38" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">1 TRACK = 1 APP</text></svg></div>
            <span class="illustration-label">Recording Submitted</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Mandatory 30-Day Waiting Period</h3>
        <p class="step-description">After receipt of the application and issuance of a diary number, a 30-day cooling-off period begins. During this period, any person may file objections to the grant of copyright.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Objection period monitored</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Third-party claims tracked</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="35" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="60" y1="20" x2="60" y2="45" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/><line x1="60" y1="45" x2="78" y2="55" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><circle cx="60" cy="45" r="3" fill="#14365F"/><text x="60" y="90" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text></svg></div>
            <span class="illustration-label">Period Complete</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Examination by Registrar</h3>
        <p class="step-description">If no objections are received, the Registrar examines the application for compliance with the Act and Rules. If objections are raised, both parties are heard and the Registrar decides based on evidence.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Application examined</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance verified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="38" r="18" fill="none" stroke="#14365F" stroke-width="1.5"/><line x1="68" y1="50" x2="82" y2="64" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/><path d="M48 38l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Review Complete</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Copyright Certificate Issued</h3>
        <p class="step-description">Upon successful examination, the work is entered in the Register of Copyrights under Section 45 and a digitally signed certificate is issued. The entry serves as prima facie evidence under Section 48.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Register entry created</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTERED</text></svg></div>
            <span class="illustration-label">Copyright Registered</span>
            <span class="step-number-large">08</span>
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
            <h2 class="section-title">Documents Required for Sound Recording Copyright</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Completed Form XIV</strong> - Including Statement of Particulars with title, producer, publication details</li>
                    <li><strong>Digital copy of the sound recording</strong> - One track per application in standard audio format</li>
                    <li><strong>NOC from all right-holders</strong> - Lyricist, composer, singer, music director and all persons involved in creation</li>
                    <li><strong>Copy of assignment or licensing agreement</strong> - If applicable, per Section 19 requirements</li>
                    <li><strong>Notarised affidavit</strong> - Mandatory for sound recording and cinematograph film applications</li>
                    <li><strong>Identity proof of applicant</strong> - Aadhaar, PAN or Passport</li>
                    <li><strong>Power of Attorney</strong> - If application is filed through an authorised agent or advocate</li>
                    <li><strong>Details of first publication</strong> - Year and place of first publication (if published)</li>
                    <li><strong>Fee payment receipt</strong> - Rs 2,000 per work via NTRP or demand draft</li>
                </ul>
                <p><strong>Important:</strong> If the applicant is not the author or producer, valid assignment documents must be provided. The name of the original producer must appear in Column 7 of the Statement of Particulars even when copyright has been assigned.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Sound Recording Copyright Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Obtaining NOC from Multiple Right-Holders</td><td>In a typical song, the lyricist, composer, singer and music director all hold distinct rights. Getting all parties to sign NOCs can be time-consuming, especially for older recordings</td><td>We draft comprehensive agreements at the outset, before recording begins. NOC clauses are included in production contracts to avoid delays at filing stage</td></tr>
                        <tr><td>Multiple Tracks as One Application</td><td>The Copyright Office treats each track as a separate work under Section 2(y). Submitting multiple tracks with a single fee results in a discrepancy notice and delays</td><td>We file individual applications with separate fees of Rs 2,000 per track, with each track on a separate digital file as per Copyright Office guidelines</td></tr>
                        <tr><td>Third-Party Objections</td><td>Third parties may file objections claiming prior ownership or similar rights during the 30-day waiting period, potentially blocking registration</td><td>We maintain clear documentation of the creative process, production agreements and chain of title. Our team drafts replies and represents you during hearings</td></tr>
                        <tr><td>Sound Recording vs Musical Work Confusion</td><td>Many applicants confuse the copyright in the recorded version (Section 14(e)) with the copyright in the composition (Section 14(a)), leading to incorrect applications</td><td>We ensure correct classification and advise on registering each component separately if you hold rights in both the recording and the underlying composition</td></tr>

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
            <h2 class="section-title">Copyright for Sound Recording - Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Registration of copyright in sound recording</td><td>Rs 2,000 per work</td></tr>
                        <tr><td>Change in particulars of registered copyright</td><td>Rs 1,000 per work</td></tr>
                        <tr><td>Certified copy or extract from Register</td><td>Rs 500 per copy</td></tr>
                        <tr><td>Registration of literary, musical or artistic work</td><td>Rs 500 per work (for comparison)</td></tr>
                        <tr><td>Registration of cinematograph film</td><td>Rs 5,000 per work (for comparison)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 3,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright for Sound Recording consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20sound%20recording%20copyright.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Sound Recording Copyright Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document preparation and NOC collection</td><td>1-2 weeks</td></tr>
                        <tr><td>Application filing on copyright.gov.in</td><td>1-2 days</td></tr>
                        <tr><td>Mandatory objection period</td><td>30 days</td></tr>
                        <tr><td>Examination and scrutiny by Registrar</td><td>1-3 months</td></tr>
                        <tr><td>Certificate issuance (uncontested)</td><td>2-6 months total</td></tr>
                        <tr><td>Certificate issuance (with objections)</td><td>4-9 months total</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> If objections are filed during the 30-day waiting period, the timeline extends as hearings are scheduled. In practice, uncontested applications are typically processed within 2-6 months. Patron Accounting tracks every application and handles objection responses proactively to minimize delays.</p>

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
            <h2 class="section-title">Benefits of Professional Sound Recording Copyright Registration</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Prima Facie Evidence (Section 48)</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">The registration certificate is admissible as evidence, significantly strengthening your position in infringement proceedings</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Customs Recordation</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Record your copyright with Indian Customs under the IPR (Imported Goods) Enforcement Rules, 2007, helping prevent import of infringing copies</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Licensing and Monetisation</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">A copyright certificate facilitates licensing agreements with streaming platforms, broadcasters and other commercial users</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">International Protection</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">India is a Berne Convention signatory. Registration provides a foundation for enforcing rights in 175+ member countries</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Criminal Enforcement</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Section 63 enables prosecution with imprisonment of 6 months to 3 years. Section 63A enhances penalties for repeat offenders. Infringement is cognizable and non-bailable</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Music Producers Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including music labels, independent artists, and production houses trust Patron Accounting for copyright and IP services. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our CA and CS team provides reliable copyright protection for India's music and audio content industry.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, we serve music producers, podcasters, and audio content creators across India - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Sound Recording Copyright Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Registration</th><th>With Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Time Investment</td><td>10-15 hours of research and filing</td><td>30 minutes (document handover)</td></tr>
                        <tr><td>NOC Preparation</td><td>Self-drafted, risk of rejection</td><td>Legally vetted by CA and CS team</td></tr>
                        <tr><td>Form XIV Accuracy</td><td>High risk of discrepancy notices</td><td>Pre-verified before submission</td></tr>
                        <tr><td>Objection Handling</td><td>Self-representation at hearings</td><td>Professional representation included</td></tr>
                        <tr><td>Success Rate</td><td>Variable</td><td>98%+ first-attempt approval</td></tr>
                        <tr><td>Cost</td><td>Rs 2,000 (govt fee only)</td><td>Starting INR 3,999 (all-inclusive)</td></tr>

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
                
                <p>Explore other intellectual property and compliance services from Patron Accounting:</p>
                <ul>
                    <li><a href="/copyright-registration">Copyright Registration</a> - General copyright registration for all types of works</li>
                    <li><a href="/copyright-registration-for-cinematographic-film">Copyright for Cinematographic Film</a> - Register films, documentaries and video content</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect your brand name, logo and label identity</li>
                    <li><a href="/copyright-assignment">Copyright Assignment</a> - Transfer copyright ownership with compliant assignment deeds</li>
                    <li><a href="/copyright-objection">Copyright Objection</a> - Handle Copyright Office objections during examination</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Sound Recording Copyright in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Provision</th><th>Relevance</th></tr></thead>
                    <tbody>
                        <tr><td>Section 2(d)(v)</td><td>Defines the author of a sound recording as the producer</td></tr>
                        <tr><td>Section 2(uu)</td><td>Defines producer as the person who takes initiative and responsibility for making the work</td></tr>
                        <tr><td><a href="https://copyright.gov.in" target="_blank" rel="noopener">Section 2(xx)</a></td><td>Defines sound recording as a recording of sounds regardless of medium or method</td></tr>
                        <tr><td>Section 13(1)(c)</td><td>Copyright subsists in sound recordings throughout India</td></tr>
                        <tr><td>Section 13(4)</td><td>Copyright in sound recording does not affect separate copyright in underlying work</td></tr>
                        <tr><td>Section 14(e)</td><td>Exclusive rights - make copies, sell/hire, communicate to public</td></tr>
                        <tr><td>Section 27</td><td>Term of copyright - 60 years from calendar year following publication</td></tr>
                        <tr><td>Section 31C</td><td>Statutory licence for cover versions of sound recordings</td></tr>
                        <tr><td>Section 31D</td><td>Statutory licence for broadcasting of literary, musical works and sound recordings</td></tr>
                        <tr><td>Section 52A</td><td>Mandatory particulars on sound recordings (name, address of maker, owner, year)</td></tr>
                        <tr><td>Section 63</td><td>Criminal penalty - 6 months to 3 years imprisonment, Rs 50,000 to Rs 2,00,000 fine</td></tr>
                        <tr><td>Section 63A</td><td>Enhanced penalty for repeat offenders - 1 to 3 years, Rs 1,00,000 to Rs 2,00,000 fine</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Regulatory Authority:</strong> <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a>, DPIIT, Ministry of Commerce and Industry, Government of India.</p>
                <p><strong>International Treaties:</strong> India is a signatory to the Berne Convention. Registration provides a foundation for enforcing rights in 175+ member countries.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Sound Recording Copyright</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about copyright registration for songs, albums, podcasts, and audio content in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Copyright for Sound Recording',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the government fee for copyright registration of a sound recording?</h3>
                        <div class="faq-expanded__a"><p>The prescribed fee is Rs 2,000 per work under Schedule II of the Copyright Rules. This fee is payable online through the Non-Tax Receipt Portal (NTRP) on copyright.gov.in or by demand draft to the Registrar of Copyrights, New Delhi. Each track is treated as a separate work, so a 10-track album requires 10 applications with a total fee of Rs 20,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who is considered the author of a sound recording?</h3>
                        <div class="faq-expanded__a"><p>Under Section 2(d)(v) of the Copyright Act, 1957, the producer of the sound recording is considered the author. Section 2(uu) defines the producer as the person who takes the initiative and responsibility for making the work. This means the music label, production house or individual who funds and organises the recording is typically the first owner of copyright.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does copyright protection last for a sound recording?</h3>
                        <div class="faq-expanded__a"><p>Under Section 27, copyright in a sound recording subsists for 60 years from the beginning of the calendar year following the year in which the recording is first published. A recording published in 2026 would have protection until 31 December 2086. This is different from literary and musical works, where protection lasts for the author's lifetime plus 60 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is copyright registration mandatory for sound recordings?</h3>
                        <div class="faq-expanded__a"><p>No, copyright registration is not mandatory in India. Copyright protection arises automatically upon creation of an original work. However, registration under Section 45 creates a public record and provides prima facie evidence of ownership under Section 48. This significantly simplifies enforcement and is strongly recommended for commercial recordings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can the same song have multiple copyrights?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 13(4), a single song can have up to four layers of rights - the lyricist holds copyright in the literary work (lyrics), the composer holds copyright in the musical work (composition), the producer holds copyright in the sound recording, and the singer holds performer's rights under Section 38.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is a cover version and how does it relate to sound recording copyright?</h3>
                        <div class="faq-expanded__a"><p>Under Section 31C, a statutory licence allows any person to make a cover version (new sound recording) of a previously recorded literary or musical work, subject to payment of royalty. The cover version cannot be made until five calendar years after the end of the year in which the first recording was made. The person making the cover version must pay prescribed royalties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are the penalties for infringing copyright in a sound recording?</h3>
                        <div class="faq-expanded__a"><p>Under Section 63, copyright infringement carries a minimum imprisonment of six months (extendable to three years) and a fine of Rs 50,000 to Rs 2,00,000. Under Section 63A, repeat offenders face enhanced penalties of one to three years imprisonment and fines of Rs 1,00,000 to Rs 2,00,000. The Supreme Court has confirmed this is a cognizable and non-bailable offence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the role of PPL in sound recording copyright?</h3>
                        <div class="faq-expanded__a"><p>Phonographic Performance Limited (PPL) is the registered copyright society for sound recordings in India. PPL manages and issues licences for the public performance and broadcasting of sound recordings on behalf of its member labels and producers. Membership enables collective management of rights and streamlined royalty collection from commercial establishments, radio stations, and digital platforms.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Copyright for sound recording kya hota hai?</strong> Sound recording copyright ek legal right hai jo Copyright Act, 1957 ke Section 14(e) ke under milta hai. Producer ya owner ko apne recorded audio par exclusive control milta hai.</p>
                <p><strong>Sound recording ka copyright kitne saal ka hota hai?</strong> Section 27 ke under, sound recording ka copyright publication ke baad 60 saal tak valid rehta hai.</p>
                <p><strong>Government fee kitni hai?</strong> Rs 2,000 per work. Har ek track ke liye alag application aur alag fee lagti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Protect Your Sound Recording - Act Now</h2>
            <div class="content-text">
                
                <p>With the rise of digital streaming platforms and AI-generated content, the risk of unauthorised reproduction of sound recordings has increased significantly. Copyright infringement in the music industry is rampant - from pirated copies to unauthorised remixes and sampling without permission. Under Section 63, infringement is a cognizable and non-bailable offence carrying imprisonment of up to three years.</p>
                <p><strong>Don't wait for infringement to occur before seeking registration.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20sound%20recording%20copyright.%20Please%20call%20me." target="_blank">WhatsApp us</a> to start your copyright registration today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Protect Your Sound Recording Copyright Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Copyright for sound recording is a fundamental protection for anyone involved in the creation, production or distribution of recorded audio content in India. The Copyright Act, 1957 provides a robust framework granting producers exclusive rights to reproduce, distribute and communicate their recordings. With a government fee of just Rs 2,000 per work and online registration through copyright.gov.in, there is no reason to leave your audio assets unprotected.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Whether you are a major label, an independent artist or a podcast creator, Patron Accounting's CA and CS team provides end-to-end support from NOC preparation to certificate procurement. With 15+ years of experience and offices across India, we deliver reliable copyright protection for your creative investment.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20sound%20recording%20copyright.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Sound%20Recording%20Copyright&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20copyright%20registration%20for%20a%20sound%20recording.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Sound Recording Copyright Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides sound recording copyright registration for music producers, artists, and audio creators in major cities.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;">
                <p class="pa-block-title">Sound Recording Copyright by City</p>
                <p class="pa-block-sub">Expert copyright registration for music, podcasts, and audio content</p>
                <div class="pa-city-grid">
                    <a href="/copyright-registration-for-sound-recording/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/copyright-registration-for-sound-recording/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/copyright-registration-for-sound-recording/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/copyright-registration-for-sound-recording/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <p class="pa-block-title">Related Copyright and IP Services</p>
                <p class="pa-block-sub">Comprehensive intellectual property protection</p>
                <div class="pa-cross-grid">
                    <a href="/copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-registration-for-cinematographic-film" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Film Copyright</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-assignment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-objection" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-registration-for-literary-work" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Literary Work Copyright</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually - aligned to Copyright Act amendments, fee revisions, and Copyright Office procedural changes. Next review: March 2027.</p>
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
