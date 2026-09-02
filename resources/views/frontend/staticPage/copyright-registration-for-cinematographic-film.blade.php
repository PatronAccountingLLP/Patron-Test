
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Copyright for Cinematograph Film - Process, Fees & Filing</title>
    <meta name="description" content="Copyright registration for cinematographic film under Section 2(f), Copyright Act 1957. 60-year protection. Producer is first owner. Expert CA and CS team.">
    <link rel="canonical" href="/copyright-registration-for-cinematographic-film">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Cinematograph Film - Process, Fees & Filing">
    <meta property="og:description" content="Copyright registration for cinematographic film under Section 2(f), Copyright Act 1957. 60-year protection. Producer is first owner. Expert CA and CS team.">
    <meta property="og:url" content="/copyright-registration-for-cinematographic-film">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Cinematograph Film - Process, Fees & Filing">
    <meta name="twitter:description" content="Copyright registration for cinematographic film under Section 2(f), Copyright Act 1957. 60-year protection. Producer is first owner. Expert CA and CS team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Copyright for Cinematographic Film: Registration",
          "description": "Copyright registration for cinematographic film under Section 2(f), Copyright Act 1957. 60-year protection. Producer is first owner. Expert CA and CS team.",
          "url": "https://www.patronaccounting.com/copyright-registration-for-cinematographic-film",
          "serviceType": "Copyright for Cinematographic Film: Registration",
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
              "name": "Copyright for Cinematographic Film: Registration",
              "item": "https://www.patronaccounting.com/copyright-registration-for-cinematographic-film"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Who is the owner of copyright in a cinematographic film?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the Copyright Act, 1957, the producer is the first owner. Section 17(b) provides that when a film is made for valuable consideration at the instance of any person (commissioned), that person is the first owner. Section 17(c) provides that when made during employment, the employer is the first owner. However, the underlying literary, dramatic, musical, and artistic works retain separate copyrights owned by their respective authors."
              }
            },
            {
              "@type": "Question",
              "name": "How long does copyright in a cinematographic film last?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 26, copyright in a cinematograph film subsists for 60 years from the beginning of the calendar year next following the year in which the film is published. For example, a film published in 2026 is protected until 31 December 2086. This is different from literary and artistic works, where copyright lasts for the lifetime of the author plus 60 years."
              }
            },
            {
              "@type": "Question",
              "name": "Does copyright in a film cover the script, music, and performances separately?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 13(4), the copyright in a cinematograph film does not affect the separate copyright in any literary (script, dialogue), dramatic (screenplay), musical (background score, songs), or artistic work incorporated in the film. Multiple copyrights co-exist - the producer owns the film copyright under Section 14(d), while writers, composers, and artists retain their respective copyrights."
              }
            },
            {
              "@type": "Question",
              "name": "Are web series, OTT content, and YouTube videos covered as cinematographic films?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 2(f), the definition includes any work of visual recording and any work produced by any process analogous to cinematography including video films. This covers web series, OTT original content, YouTube videos, Instagram reels, documentary films, corporate videos, advertisement films, and any other form of visual recording."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for pirating a film in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 63, knowing infringement is punishable with imprisonment of 6 months to 3 years and fine of Rs 50,000 to Rs 2 lakh. Section 63A prescribes enhanced penalties for repeat convictions - imprisonment of 1 to 3 years and fine of Rs 1 lakh to Rs 2 lakh. Under Section 64, police can seize infringing copies without a warrant."
              }
            },
            {
              "@type": "Question",
              "name": "Can I register copyright for an unpublished film?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 45, both published and unpublished works can be registered in the Register of Copyrights. For unpublished films, two copies must be submitted with the application. The 60-year copyright term under Section 26 begins from the calendar year following the year the film is eventually published."
              }
            },
            {
              "@type": "Question",
              "name": "Is a Statement of Further Particulars needed for film copyright?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Under the Copyright Rules, 2013, a Statement of Further Particulars is not required for cinematographic films. The applicant submits Form XIV and Statement of Particulars (SOP) signed by the applicant, along with supporting documents and a copy of the film. This is a distinction from literary and artistic works."
              }
            },
            {
              "@type": "Question",
              "name": "Does the director own film copyright?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. The producer is the first owner under Section 17, not the director. The director may hold separate creative rights depending on the employment or commissioning contract. However, performers including the director have performer's rights under Section 38, and the 2012 amendment ensures royalty rights for certain contributions. Quick Answers Does the director own film copyright? No. The producer is the first owner under Section 17. The director may hold separate creative rights depending on the contract. Can film copyright be assigned? Yes. Under Section 18, copyright can be assigned wholly or partially through a written agreement. Is the Cinematograph Act, 1952 the same as copyright? No. The Cinematograph Act governs film certification (CBFC) and exhibition, not copyright. Do performers have rights in a film? Yes, under Section 38. Once a performer consents to incorporation in a film, Section 38(4) limits further application of performer's right, though royalties apply per the 2012 amendment. Is international protection available? Yes. India is a signatory to the Berne Convention, so copyright in Indian films is recognized in all member countries."
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
                        Copyright Registration for Cinematographic Film in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Protection:</span> 60 years from the calendar year following publication under Section 26 of the Copyright Act, 1957</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Ownership:</span> Producer is the first owner of copyright under Section 17(b)/(c) of the Copyright Act, 1957</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> Visual recording, sound recording, video films, OTT content, web series, documentaries, music videos, and advertisement films</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Registration:</span> Filed with the Registrar of Copyrights via copyright.gov.in using Form XIV under the Copyright Rules, 2013</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses and filmmakers across India for copyright and IP services</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Film%20Copyright%20Registration&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20copyright%20registration%20for%20a%20cinematographic%20film.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20copyright%20registration%20for%20a%20cinematographic%20film.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Copyright for Cinematographic Film',
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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Expert film copyright registration - Form XIV filing, rights assessment, anti-piracy support, and assignment drafting under the Copyright Act, 1957.',
])

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
            <a class="toc-btn" href="#procedure-section">6-Step Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#timeline-section">Timeline</a>
            <a class="toc-btn" href="#benefits-section">Benefits</a>
            <a class="toc-btn" href="#comparison-section">Film vs Sound vs Broadcast</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Registration for Cinematographic Film - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Copyright for Cinematographic Film Services at a Glance</strong></p>
                    <p>Copyright registration for cinematographic film protects the producer's exclusive rights over visual recordings (including accompanying sound) under Section 2(f) of the Copyright Act, 1957. The producer is the first owner of copyright under Section 17(b)/(c). Protection lasts 60 years from the calendar year following publication under Section 26. Registration provides prima facie evidence of ownership under Section 48 and enables criminal prosecution under Section 63.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Definition</td><td>Section 2(f): Any work of visual recording including sound recording and works produced by process analogous to cinematography including video films</td></tr>
                        <tr><td>First Owner</td><td>Producer of the film under Section 17(b) (commissioned) and Section 17(c) (employment)</td></tr>
                        <tr><td>Copyright Duration</td><td>60 years from beginning of calendar year following year of publication (Section 26)</td></tr>
                        <tr><td>Exclusive Rights</td><td>Reproduce, sell/rent copies, communicate to public (Section 14(d))</td></tr>
                        <tr><td>Registration Authority</td><td>Registrar of Copyrights, Copyright Office, New Delhi (<a href="https://copyright.gov.in" target="_blank" rel="noopener">copyright.gov.in</a>)</td></tr>
                        <tr><td>Application Form</td><td>Form XIV under Copyright Rules, 2013</td></tr>
                        <tr><td>Infringement Penalty</td><td>Imprisonment 6 months to 3 years + fine Rs 50,000 to Rs 2 lakh (Section 63)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:0;</p>
                </div>
                <p>Copyright registration for cinematographic film is essential for film producers, production houses, OTT platforms, documentary makers, and content creators seeking legal protection for their visual recordings in India. Under the Copyright Act, 1957, cinematographic films enjoy a distinct copyright status - the producer is the first owner of the copyright, and the protection extends for 60 years from publication.</p>
                <p>With digital piracy, unauthorized streaming, and content theft becoming increasingly prevalent, registering your film with the <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a> provides the strongest legal foundation for enforcement. Patron Accounting's CA, CS, and IP team handles the complete registration process from Form XIV preparation to anti-piracy enforcement support.</p>
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
                <h2 class="section-title">What Is Copyright for Cinematographic Film?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A cinematograph film is defined under Section 2(f) of the Copyright Act, 1957 as any work of visual recording that includes an accompanying sound recording, with 'cinematograph' construed to include any work produced by any process analogous to cinematography including video films.</p>
                    <p>This broad definition encompasses feature films, short films, documentaries, web series, OTT original content, music videos, advertisement films, corporate videos, educational videos, and any other form of visual recording. The Copyright (Amendment) Act, 1994 expanded the definition to explicitly include video films and works produced by processes analogous to cinematography - meaning digital recordings, streaming content, and modern video formats all qualify.</p>
                    <p>Under Section 13(1)(b), copyright subsists in cinematograph films throughout India, provided the film is first published in India or the producer is an Indian citizen or domiciled in India at the time of making the film. Importantly, under Section 13(3)(a) and Section 13(4), film copyright does not affect the separate copyright in any underlying literary, dramatic, musical, or artistic work incorporated in the film - multiple copyrights co-exist in a single film.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright for Cinematographic Film:</strong></p>
                    <p><strong>Producer (Section 2(uu))</strong> - The person who takes the initiative and responsibility for making the film. The producer is the first owner of copyright under Section 17(b)/(c).</p>
                    <p><strong>Section 14(d) - Film Copyright Rights</strong> - Exclusive rights to make copies of the film, sell or rent copies, and communicate the film to the public.</p>
                    <p><strong>Section 13(3)(a) - Layered Copyright</strong> - Film copyright does not affect separate copyright in underlying literary, dramatic, musical, or artistic works. Multiple copyrights co-exist.</p>
                    <p><strong>Section 52A - Mandatory Particulars</strong> - Every video film or sound recording must display the producer's name, copyright owner name, and year of first publication on all copies.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Film Reel -->
                            <circle cx="100" cy="70" r="50" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <circle cx="100" cy="70" r="35" fill="none" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <circle cx="100" cy="70" r="12" fill="#14365F" opacity="0.15"/>
                            <circle cx="100" cy="70" r="4" fill="#14365F"/>
                            <!-- Film holes -->
                            <circle cx="100" cy="35" r="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <circle cx="100" cy="105" r="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <circle cx="65" cy="70" r="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <circle cx="135" cy="70" r="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <!-- Copyright badge -->
                            <circle cx="160" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <text x="160" y="36" font-size="16" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">C</text>
                            <!-- Section tag -->
                            <rect x="25" y="130" width="52" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 2(f)</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Cinematographic Film Copyright</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 2(f) Protected</span>
                        <strong>Cinematographic Film Copyright</strong>
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
            <h2 class="section-title">Who Needs Film Copyright Registration?</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Film Producers and Production Houses:</strong> Creating feature films, short films, or independent films for theatrical, OTT, or television release</li>
                    <li><strong>OTT Platforms:</strong> Netflix, Amazon Prime, Disney+, JioCinema producing original content, web series, and documentaries</li>
                    <li><strong>Documentary Filmmakers:</strong> Creating non-fiction visual content for educational, social, or commercial purposes</li>
                    <li><strong>Advertising Agencies and Brands:</strong> Producing commercial advertisement films and corporate videos</li>
                    <li><strong>Music Video Producers:</strong> Creating visual recordings accompanying musical compositions</li>
                    <li><strong>Educational Content Creators:</strong> Producing video courses, tutorials, and e-learning material</li>
                    <li><strong>Independent Filmmakers and YouTubers:</strong> Vloggers and YouTube creators producing original visual content</li>
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
            <h2 class="section-title">Patron Accounting's Film Copyright Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Complete Film Copyright Registration</td><td>End-to-end registration with the Registrar of Copyrights including Form XIV preparation, SOP drafting, documentation compilation, and filing on copyright.gov.in</td></tr>
                        <tr><td>Rights Assessment and Advisory</td><td>Analysis of all copyright layers - producer's film copyright (Section 14(d)), underlying literary/dramatic work copyright, musical work copyright, and performer's rights (Section 38)</td></tr>
                        <tr><td>Copyright Assignment and Licensing</td><td>Drafting assignment deeds for transfer of film copyright and licensing agreements for distribution, streaming, and theatrical rights. <a href="/copyright-assignment">Learn more</a></td></tr>
                        <tr><td>Anti-Piracy and Enforcement Support</td><td>Preparation of infringement documentation, cease-and-desist notices, and coordination with legal counsel for prosecution under Section 63</td></tr>
                        <tr><td>Objection Handling</td><td>If the Registrar raises objections during examination, we draft comprehensive replies within the 30-day deadline. <a href="/copyright-objection">Learn more</a></td></tr>
                        <tr><td>International Copyright Advisory</td><td>Guidance on protecting your film in international markets through the Berne Convention, bilateral treaties, and international registration strategies</td></tr>

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
            <h2 class="section-title">6-Step Film Copyright Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting follows a structured 6-step process for cinematographic film copyright registration - from ownership verification to Registration Certificate issuance under the Copyright Act, 1957.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Identify the Work and Ownership</h3>
        <p class="step-description">Confirm the cinematograph film qualifies under Section 2(f). Identify the producer as the first owner under Section 17(b)/(c). If produced under a commissioning agreement, the commissioner is the first owner under Section 17(b). If produced during employment, the employer is the first owner under Section 17(c).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 2(f) confirmed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Producer ownership established</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="30" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="65" y="25" width="30" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="40" cy="58" r="5" fill="#14365F" opacity="0.2"/><circle cx="80" cy="58" r="5" fill="#14365F" opacity="0.2"/><rect x="55" y="48" width="10" height="16" rx="2" fill="#F5A623" opacity="0.5"/></svg></div>
            <span class="illustration-label">Work Identified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Prepare Application and Documentation</h3>
        <p class="step-description">Complete Form XIV under the Copyright Rules, 2013. Prepare the Statement of Particulars (SOP) with details of the film, producer, director, year of publication, and format. Compile supporting documents including production agreements, underlying rights NOCs, and a copy of the film.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XIV + SOP prepared</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All documents compiled</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM XIV + SOP</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Documents Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">File Application on copyright.gov.in</h3>
        <p class="step-description">Submit the application online through the Copyright Office portal. Upload all supporting documents, Form XIV, and SOP. Pay the prescribed registration fee of Rs 5,000 per cinematographic film. Note: Statement of Further Particulars is not required for films.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Application filed online</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 5,000 fee paid</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 55 L60 30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M50 38 L60 28 L70 38" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/><rect x="35" y="58" width="50" height="5" rx="2" fill="#14365F" opacity="0.15"/><text x="60" y="82" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">copyright.gov.in</text></svg></div>
            <span class="illustration-label">Application Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Mandatory 30-Day Notice Period</h3>
        <p class="step-description">Upon filing, the application is published in the Copyright Journal for a 30-day notice period under Rule 70 of the Copyright Rules, 2013. During this period, any person may file an objection or claim against the registration.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Notice period monitored</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Objections tracked</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="35" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="60" y1="20" x2="60" y2="45" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/><line x1="60" y1="45" x2="78" y2="55" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><circle cx="60" cy="45" r="3" fill="#14365F"/><text x="60" y="90" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text></svg></div>
            <span class="illustration-label">Notice Period Active</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Examination by Registrar</h3>
        <p class="step-description">The Registrar of Copyrights examines the application, documents, and any objections received. If discrepancies are found, a discrepancy letter is issued and the applicant must respond within 30 days. If no objections or discrepancies, the Registrar proceeds to registration.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Examination complete</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Discrepancies resolved</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="38" r="18" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="68" y1="50" x2="82" y2="64" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="45" y1="32" x2="60" y2="32" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="45" y1="42" x2="58" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Review Complete</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Registration Certificate Issued</h3>
        <p class="step-description">Upon satisfaction, the Registrar enters the film in the Register of Copyrights under Section 44 and issues the Copyright Registration Certificate. This certificate is prima facie evidence of ownership under Section 48, strengthening enforcement in infringement proceedings.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 48 evidence created</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTERED</text></svg></div>
            <span class="illustration-label">Film Registered</span>
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
            <h2 class="section-title">Documents Required for Film Copyright Registration</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Form XIV</strong> - Application for copyright registration under Copyright Rules, 2013</li>
                    <li><strong>Statement of Particulars (SOP)</strong> - Signed by the applicant with film details, producer, director, year of publication</li>
                    <li><strong>Copy or sample of the film</strong> - DVD, digital link, or physical medium</li>
                    <li><strong>Identity proof of the producer/applicant</strong> - PAN, Aadhaar, passport</li>
                    <li><strong>Address proof</strong> of the producer/applicant</li>
                    <li><strong>Proof of production</strong> - Production agreement, investment receipts, production schedule</li>
                    <li><strong>NOC from underlying rights holders</strong> - Script writer, music composer, lyricist (if applicable)</li>
                    <li><strong>Assignment deed or license agreement</strong> - If copyright was transferred to the applicant</li>
                    <li><strong>Affidavit</strong> - Affirming originality and ownership</li>
                    <li><strong>Power of Attorney</strong> - If filing through authorized representative</li>
                    <li><strong>Registration fee</strong> - Rs 5,000 per cinematographic film as prescribed under Copyright Rules, 2013</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Film Copyright Challenges and Our Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multiple Layered Copyrights</td><td>A single film contains the producer's copyright, script writer's literary copyright, music composer's copyright, lyricist's copyright, and performer's rights (Section 38) - creating complex ownership layers</td><td>We map all rights layers and ensure the producer's registration does not conflict with underlying rights per Section 13(3)(a) and Section 13(4)</td></tr>
                        <tr><td>Establishing Producer Ownership</td><td>When films are produced under commission or work-for-hire, ownership disputes arise between the producer, director, and commissioning party</td><td>We ensure proper documentation of commissioning agreements per Section 17(b) and employment contracts per Section 17(c), establishing clear chain of title</td></tr>
                        <tr><td>Digital Piracy and Unauthorized Streaming</td><td>Films are widely pirated on torrent sites, telegram channels, and unauthorized streaming platforms - causing significant revenue loss</td><td>Our infringement documentation package supports takedown notices, John Doe orders, and criminal prosecution under Section 63 with penalties up to 3 years imprisonment</td></tr>
                        <tr><td>Registrar Objection Due to Incomplete Documentation</td><td>Film copyright applications often face objections for missing NOCs from underlying rights holders or unclear ownership chains</td><td>Our team pre-verifies all documentation against the Copyright Office requirements and handles objection replies within the 30-day deadline</td></tr>

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
            <h2 class="section-title">Film Copyright Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Copyright Registration Fee (Cinematograph Film)</td><td>Rs 5,000 per work (as per Copyright Rules, 2013)</td></tr>
                        <tr><td>Application Processing</td><td>As prescribed by the Copyright Office</td></tr>
                        <tr><td>Legal and Professional Drafting</td><td>Fees vary based on complexity. Call +91 945 945 6700 for a free quote.</td></tr>
                        <tr><td>Objection Reply (if applicable)</td><td>Additional charges for reply drafting and hearing representation</td></tr>
                        <tr><td>Assignment/Licensing Agreement</td><td>Custom pricing based on scope and number of agreements</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 3,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright for Cinematographic Film consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20film%20copyright%20registration.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Film Copyright Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Documentation and Form Preparation</td><td>3-7 days</td></tr>
                        <tr><td>Filing on copyright.gov.in</td><td>1-2 days</td></tr>
                        <tr><td>Copyright Journal Notice Period</td><td>30 days</td></tr>
                        <tr><td>Registrar Examination</td><td>30-90 days post notice</td></tr>
                        <tr><td>Certificate Issuance</td><td>Upon Registrar approval</td></tr>
                        <tr><td>Total End-to-End</td><td>2-5 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> The 30-day notice period in the Copyright Journal is mandatory and cannot be shortened. If the Registrar raises discrepancies, the applicant must respond within 30 days or the application may be rejected. Patron Accounting tracks every application and handles objection replies proactively to minimize delays.</p>

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
            <h2 class="section-title">Benefits of Film Copyright Registration</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">60-Year Protection</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Section 26 grants copyright for 60 years from the calendar year following publication - protecting your investment across theatrical, digital, and future distribution formats</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Prima Facie Evidence</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">The Registration Certificate under Section 48 serves as prima facie evidence in court, significantly strengthening infringement claims and licensing disputes</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Criminal Enforcement</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Section 63 enables criminal prosecution with imprisonment of 6 months to 3 years and fine of Rs 50,000 to Rs 2 lakh. Section 63A enhances penalties for repeat offenders</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Revenue Protection</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Registration underpins licensing deals with OTT platforms, satellite channels, theatrical distributors, and international buyers - all require proof of clear copyright title</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Anti-Piracy Legal Standing</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Registered copyright enables John Doe orders, website blocking, and ISP takedown notices against piracy - essential in the digital distribution era</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including film producers, production houses, and media companies trust Patron Accounting for IP and compliance services. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our CA, CS, and IP team delivers reliable copyright protection for India's film and entertainment industry.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, we serve filmmakers and content creators across all formats - theatrical, OTT, and digital.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Cinematographic Film vs Sound Recording vs Broadcast Copyright</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Cinematographic Film</th><th>Sound Recording</th><th>Broadcast</th></tr></thead>
                    <tbody>
                        <tr><td>Definition Section</td><td>Section 2(f)</td><td>Section 2(xx)</td><td>Section 2(dd)</td></tr>
                        <tr><td>First Owner</td><td>Producer (Section 17)</td><td>Producer (Section 17)</td><td>Broadcasting organization</td></tr>
                        <tr><td>Duration</td><td>60 years from publication (Section 26)</td><td>60 years from publication (Section 27)</td><td>25 years from broadcast (Section 37)</td></tr>
                        <tr><td>Key Rights</td><td>Copy, sell/rent, communicate to public (Section 14(d))</td><td>Copy, sell/rent, communicate to public (Section 14(e))</td><td>Re-broadcast, record, reproduce (Section 37(3))</td></tr>
                        <tr><td>Layered Copyright</td><td>Yes - underlying works retain separate copyright</td><td>Yes - underlying works retain copyright</td><td>Yes - content copyright separate from broadcast right</td></tr>
                        <tr><td>Registration Form</td><td>Form XIV + SOP</td><td>Form XIV + SOP</td><td>Form XIV + SOP</td></tr>

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
                
                <p>Patron Accounting offers a comprehensive suite of copyright and IP services for the film and entertainment industry:</p>
                <ul>
                    <li><a href="/copyright-registration">Copyright Registration</a> - General copyright registration for all types of works</li>
                    <li><a href="/copyright-registration-for-sound-recording">Copyright for Sound Recording</a> - Audio content protection under Section 2(xx)</li>
                    <li><a href="/copyright-registration-for-broadcast">Copyright for Broadcast</a> - Broadcasting rights protection</li>
                    <li><a href="/copyright-objection">Copyright Objection</a> - Handle Registrar objections during examination</li>
                    <li><a href="/copyright-assignment">Copyright Assignment</a> - Transfer film rights with legally compliant deeds</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Protect film titles and brand elements</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Film Copyright in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Section</th><th>Key Provision</th></tr></thead>
                    <tbody>
                        <tr><td><a href="https://copyright.gov.in" target="_blank" rel="noopener">Section 2(f)</a></td><td>Defines 'cinematograph film' - any work of visual recording including accompanying sound recording and works by analogous process including video films</td></tr>
                        <tr><td>Section 2(uu)</td><td>Defines 'producer' - the person who takes initiative and responsibility for making the work</td></tr>
                        <tr><td>Section 13(1)(b)</td><td>Copyright subsists in cinematograph films throughout India</td></tr>
                        <tr><td>Section 13(3)(a) / 13(4)</td><td>Film copyright does not affect separate copyright in underlying literary, dramatic, musical, artistic works</td></tr>
                        <tr><td>Section 14(d)</td><td>Exclusive rights in film - reproduce, sell/rent, communicate to public</td></tr>
                        <tr><td>Section 17(b)/(c)</td><td>Producer is first owner (commissioned or employment)</td></tr>
                        <tr><td>Section 26</td><td>Term of 60 years from calendar year following publication</td></tr>
                        <tr><td>Section 52A</td><td>Mandatory display of producer name, copyright owner, and year of publication on all copies</td></tr>
                        <tr><td>Section 63</td><td>Infringement penalty - 6 months to 3 years imprisonment + Rs 50,000 to Rs 2 lakh fine</td></tr>
                        <tr><td>Section 64</td><td>Police may seize infringing copies without warrant</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Regulatory Authority:</strong> <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a>, DPIIT, Ministry of Commerce and Industry, Government of India.</p>
                <p><strong>Related Legislation:</strong> Cinematograph Act, 1952 (governs film certification by CBFC and exhibition, not copyright).</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Film Copyright Registration</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about copyright registration for cinematographic films, web series, and video content in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Copyright for Cinematographic Film',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who is the owner of copyright in a cinematographic film?</h3>
                        <div class="faq-expanded__a"><p>Under the Copyright Act, 1957, the producer is the first owner. Section 17(b) provides that when a film is made for valuable consideration at the instance of any person (commissioned), that person is the first owner. Section 17(c) provides that when made during employment, the employer is the first owner. However, the underlying literary, dramatic, musical, and artistic works retain separate copyrights owned by their respective authors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does copyright in a cinematographic film last?</h3>
                        <div class="faq-expanded__a"><p>Under Section 26, copyright in a cinematograph film subsists for 60 years from the beginning of the calendar year next following the year in which the film is published. For example, a film published in 2026 is protected until 31 December 2086. This is different from literary and artistic works, where copyright lasts for the lifetime of the author plus 60 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Does copyright in a film cover the script, music, and performances separately?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 13(4), the copyright in a cinematograph film does not affect the separate copyright in any literary (script, dialogue), dramatic (screenplay), musical (background score, songs), or artistic work incorporated in the film. Multiple copyrights co-exist - the producer owns the film copyright under Section 14(d), while writers, composers, and artists retain their respective copyrights.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Are web series, OTT content, and YouTube videos covered as cinematographic films?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 2(f), the definition includes any work of visual recording and any work produced by any process analogous to cinematography including video films. This covers web series, OTT original content, YouTube videos, Instagram reels, documentary films, corporate videos, advertisement films, and any other form of visual recording.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for pirating a film in India?</h3>
                        <div class="faq-expanded__a"><p>Under Section 63, knowing infringement is punishable with imprisonment of 6 months to 3 years and fine of Rs 50,000 to Rs 2 lakh. Section 63A prescribes enhanced penalties for repeat convictions - imprisonment of 1 to 3 years and fine of Rs 1 lakh to Rs 2 lakh. Under Section 64, police can seize infringing copies without a warrant.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I register copyright for an unpublished film?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 45, both published and unpublished works can be registered in the Register of Copyrights. For unpublished films, two copies must be submitted with the application. The 60-year copyright term under Section 26 begins from the calendar year following the year the film is eventually published.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is a Statement of Further Particulars needed for film copyright?</h3>
                        <div class="faq-expanded__a"><p>No. Under the Copyright Rules, 2013, a Statement of Further Particulars is not required for cinematographic films. The applicant submits Form XIV and Statement of Particulars (SOP) signed by the applicant, along with supporting documents and a copy of the film. This is a distinction from literary and artistic works.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does the director own film copyright?</h3>
                        <div class="faq-expanded__a"><p>No. The producer is the first owner under Section 17, not the director. The director may hold separate creative rights depending on the employment or commissioning contract. However, performers including the director have performer's rights under Section 38, and the 2012 amendment ensures royalty rights for certain contributions.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Does the director own film copyright?</strong> No. The producer is the first owner under Section 17. The director may hold separate creative rights depending on the contract.</p>
                <p><strong>Can film copyright be assigned?</strong> Yes. Under Section 18, copyright can be assigned wholly or partially through a written agreement.</p>
                <p><strong>Is the Cinematograph Act, 1952 the same as copyright?</strong> No. The Cinematograph Act governs film certification (CBFC) and exhibition, not copyright.</p>
                <p><strong>Do performers have rights in a film?</strong> Yes, under Section 38. Once a performer consents to incorporation in a film, Section 38(4) limits further application of performer's right, though royalties apply per the 2012 amendment.</p>
                <p><strong>Is international protection available?</strong> Yes. India is a signatory to the Berne Convention, so copyright in Indian films is recognized in all member countries.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Protect Your Film - Act Before Piracy Strikes</h2>
            <div class="content-text">
                
                <p>Every day your film remains unregistered is a day you lack the strongest legal weapon against piracy. Without the Registration Certificate (Section 48), enforcing your rights through criminal prosecution (Section 63) or John Doe orders becomes significantly harder. Digital piracy on torrent sites and unauthorized streaming platforms causes irreversible revenue loss.</p>
                <p><strong>Don't wait for infringement to happen.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20film%20copyright%20registration.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> to start your film copyright registration today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Protect Your Film's Copyright Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Copyright registration for cinematographic film under the Copyright Act, 1957 provides filmmakers, production houses, and digital content creators with 60 years of exclusive legal protection over their visual recordings. With the producer as the first owner, clear rights to reproduce, distribute, and communicate the film to the public, and criminal penalties of up to 3 years imprisonment for infringement, registration is the strongest tool against piracy.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting's IP and CA team handles the complete registration process - from Form XIV preparation to Registrar filing to anti-piracy enforcement support. With offices in Pune, Mumbai, Delhi, and Gurugram, we serve the Indian film and entertainment industry across all formats - theatrical, OTT, and digital.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20film%20copyright%20registration.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Film%20Copyright%20Registration&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20copyright%20registration%20for%20a%20cinematographic%20film.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Film Copyright Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides film copyright registration for producers and content creators in major cities across India.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                <p class="pa-block-title">Film Copyright Registration by City</p>
                <p class="pa-block-sub">Expert copyright registration for films, web series, and video content</p>
                <div class="pa-city-grid">
                    <a href="/copyright-registration-for-cinematographic-film/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/copyright-registration-for-cinematographic-film/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/copyright-registration-for-cinematographic-film/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/copyright-registration-for-cinematographic-film/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <p class="pa-block-title">Related Copyright and IP Services</p>
                <p class="pa-block-sub">Comprehensive copyright protection for the entertainment industry</p>
                <div class="pa-cross-grid">
                    <a href="/copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-registration-for-sound-recording" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Sound Recording Copyright</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-registration-for-broadcast" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Broadcast Copyright</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-objection" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-assignment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 9 months - aligned to Copyright Act amendments, Cinematograph Act changes, piracy case law, and OTT regulation updates. Next review: December 2026.</p>
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
