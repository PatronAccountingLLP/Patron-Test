
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Copyright for Musical Work - Composition, Lyrics & Tune</title>
    <meta name="description" content="Copyright registration for musical work under Section 2(p), Copyright Act 1957. Lifetime + 60 years protection. Composer is first owner. Expert CA team.">
    <link rel="canonical" href="/copyright-registration-for-musical-work">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Musical Work - Composition, Lyrics & Tune">
    <meta property="og:description" content="Copyright registration for musical work under Section 2(p), Copyright Act 1957. Lifetime + 60 years protection. Composer is first owner. Expert CA team.">
    <meta property="og:url" content="/copyright-registration-for-musical-work">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Musical Work - Composition, Lyrics & Tune">
    <meta name="twitter:description" content="Copyright registration for musical work under Section 2(p), Copyright Act 1957. Lifetime + 60 years protection. Composer is first owner. Expert CA team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Copyright for Musical Work: Registration Guide",
          "description": "Copyright registration for musical work under Section 2(p), Copyright Act 1957. Lifetime + 60 years protection. Composer is first owner. Expert CA team.",
          "url": "https://www.patronaccounting.com/copyright-registration-for-musical-work",
          "serviceType": "Copyright for Musical Work: Registration Guide",
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
            "url": "https://www.patronaccounting.com/copyright-registration-for-musical-work",
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
              "name": "Copyright for Musical Work: Registration Guide",
              "item": "https://www.patronaccounting.com/copyright-registration-for-musical-work"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a musical work under the Copyright Act, 1957?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 2(p), a musical work means a work consisting of music and includes graphical notation but does not include words or actions intended to be sung, spoken, or performed with the music. The melody, harmony, rhythm, arrangement, and sheet music are protected as a musical work, while lyrics are protected separately as literary work under Section 2(o). A single song contains multiple layered copyrights."
              }
            },
            {
              "@type": "Question",
              "name": "Who owns the copyright in a musical composition?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The composer is the first owner under Section 17(a). If created during employment, the employer is the first owner under Section 17(c). The Copyright (Amendment) Act, 2012 added a proviso to Section 18 mandating that the author of a musical work in a sound recording cannot assign or waive the right to receive equal royalties."
              }
            },
            {
              "@type": "Question",
              "name": "How long does copyright in a musical work last?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 22, copyright subsists for 60 years from the beginning of the calendar year following the year of the author's death. For joint authorship, 60 years from the death of the last surviving author. A composition by a composer who passes away in 2026 will be protected until 31 December 2086."
              }
            },
            {
              "@type": "Question",
              "name": "Gaane ka copyright kaise le?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Gaane ka copyright lene ke liye copyright.gov.in portal par Form XIV file karo, apni musical composition ki audio file ya sheet music upload karo, Statement of Particulars bharo, aur Rs 500 registration fee pay karo. 30 din ka notice period hota hai, phir Registrar certificate issue karta hai. Patron Accounting pura process handle karta hai - call karo +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between musical work and sound recording copyright?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Musical work copyright (Section 14(a)) protects the composition itself - melody, harmony, arrangement. Sound recording copyright (Section 14(e)) protects the specific recorded version - owned by the producer. These are independent rights under Section 13(4) with different owners, durations, and exclusive rights. Both co-exist in a single song."
              }
            },
            {
              "@type": "Question",
              "name": "Can someone make a cover version of my copyrighted musical work?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, under Section 31C, any person can make a cover version after 2 calendar years from the first recording. Conditions: prior notice to copyright owner, royalty payment at Appellate Board rates, no alteration to original composition (except as technically necessary), and due credits and attribution. Violation constitutes infringement."
              }
            },
            {
              "@type": "Question",
              "name": "Music copyright registration kitne mein hota hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Music copyright registration ka government fee Rs 500 hai per musical work (Second Schedule, Copyright Rules, 2013). Professional charges alag hote hain - Patron Accounting ka fee Rs 4,999 se shuru hota hai. Process 2-4 mahine lagta hai. Free quote ke liye call karein +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "What are moral rights and do they apply to musical works?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 57, the composer has the right to claim authorship (right of paternity) and to restrain distortion, mutilation, or modification prejudicial to honour or reputation (right of integrity). Moral rights exist independently of economic rights, cannot be assigned or waived, and persist even after the composer transfers the copyright. Quick Answers Q: Are ringtones copyrightable? A: If original, yes. A ringtone consisting of original music qualifies as a musical work under Section 2(p). Q: Does humming create copyright? A: Copyright arises upon fixation in any material form. An unfixed melody is not protected - recording or notating it creates copyright. Q: Is background score separate from songs in a film? A: Yes. Background score and individual songs are separate musical works, each with its own copyright. Q: Can I use a copyrighted song at a wedding? A: Section 52(1)(za) exempts performance in bona fide religious ceremonies including marriage processions. Q: Is IPRS the same as copyright registration? A: No. IPRS collects royalties. Copyright Office registration provides prima facie evidence. Both recommended."
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
                        Copyright Registration for Musical Work in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Protection:</span> Lifetime of the composer plus 60 years after death under Section 22. One of the longest IP protection periods available.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Definition:</span> Music and graphical notation - excludes words/lyrics which are protected separately as literary work under Section 2(p).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Exclusive Rights:</span> Reproduce, perform publicly, make recordings, translate, and adapt your musical composition under Section 14(a).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Registration:</span> Filed with Registrar of Copyrights at copyright.gov.in via Form XIV. Rs 500 government fee per work.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Musical%20Work%20Copyright&body=Hello%2C%0A%0AI%20need%20music%20copyright%20registration.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Copyright%20Registration%20for%20Musical%20Work.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Musical Work Copyright',
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
    'ctaText'    => 'Protect your musical compositions with expert copyright registration - melodies, scores, arrangements, and notation.',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">6-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Musical vs Recording vs Lyrics</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright Registration for Musical Work - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Musical Work Copyright Services at a Glance</strong></p>
                    <p>Copyright registration for musical work protects the composer's exclusive rights over original musical compositions under the Copyright Act, 1957. A musical work is defined under Section 2(p) as a work consisting of music and graphical notation, excluding words/lyrics. The composer is the first owner. Protection lasts the composer's lifetime plus 60 years after death under Section 22. The 2012 Amendment strengthened royalty rights with equal sharing mandates.</p>
                </div>
                <p>Copyright registration for musical work is essential for music composers, songwriters, independent artists, film score creators, jingle producers, and music production houses. With digital music platforms and streaming services, unauthorized use is rampant. Registration provides prima facie evidence under Section 48 and enables enforcement through civil remedies (Section 55) and criminal prosecution (Section 63 - imprisonment up to 3 years).</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Definition</td><td>Section 2(p): Work consisting of music + graphical notation; excludes words/lyrics</td></tr>
<tr><td>First Owner</td><td>Composer (Section 17(a)); employer if created during employment (Section 17(c))</td></tr>
<tr><td>Copyright Duration</td><td>Lifetime + 60 years from year following death (Section 22)</td></tr>
<tr><td>Exclusive Rights</td><td>Reproduce, perform, record, adapt, translate (Section 14(a))</td></tr>
<tr><td>Registration Authority</td><td>Registrar of Copyrights (<a href="https://copyright.gov.in" target="_blank" rel="noopener">copyright.gov.in</a>)</td></tr>
<tr><td>Application Form</td><td>Form XIV + Statement of Particulars + Statement of Further Particulars</td></tr>
<tr><td>Infringement Penalty</td><td>6 months to 3 years imprisonment + Rs 50,000 to Rs 2 lakh (Section 63)</td></tr>
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
                <h2 class="section-title">What Is Copyright for Musical Work?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A musical work under <strong>Section 2(p) of the Copyright Act, 1957</strong> means a work consisting of music and includes any graphical notation of such work, but does not include any words or any action intended to be sung, spoken, or performed with the music.</p>
<p>This is a critical distinction - the musical composition (melody, harmony, rhythm, arrangement) is protected separately from the lyrics (literary work under Section 2(o)) and the sound recording (Section 2(xx)). A single song therefore contains <strong>multiple layered copyrights</strong>: the musical work copyright (owned by the composer), the literary work copyright in lyrics (owned by the lyricist), and the sound recording copyright (owned by the producer).</p>
<p>The Copyright (Amendment) Act, 2012 significantly strengthened composers' rights, particularly by mandating equal royalty sharing under the proviso to Section 18 and introducing statutory licensing under <strong>Section 31D</strong> for broadcasting. Registration with the <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a> creates prima facie evidence under Section 48.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Musical Work Copyright:</strong></p>
                    <p><strong>Musical Work (Section 2(p)):</strong> A work consisting of music and graphical notation thereof, excluding words or actions intended to be performed with the music. Covers melody, harmony, rhythm, arrangement, and sheet music.</p>
<p><strong>Sound Recording (Section 2(xx)):</strong> A recording of sounds from which sounds may be produced. Sound recording copyright is separate from and independent of musical work copyright.</p>
<p><strong>Cover Version (Section 31C):</strong> A sound recording made of a musical work where recordings already exist. Subject to notice, royalty payment, and attribution conditions after 2 calendar years.</p>
<p><strong>Statutory Licence (Section 31D):</strong> Any broadcasting organisation can communicate a published musical work subject to prior notice and royalty at Appellate Board rates. Introduced by the 2012 Amendment.</p>
<p><strong>Moral Rights (Section 57):</strong> The composer's right to claim authorship and restrain distortion of the work. Cannot be assigned or waived - persists even after copyright transfer.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Musical Work Copyright -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Musical Work Copyright</text>
                            <!-- Musical staff lines -->
                            <line x1="50" y1="52" x2="150" y2="52" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                            <line x1="50" y1="60" x2="150" y2="60" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                            <line x1="50" y1="68" x2="150" y2="68" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                            <line x1="50" y1="76" x2="150" y2="76" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                            <line x1="50" y1="84" x2="150" y2="84" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                            <!-- Music notes -->
                            <circle cx="65" cy="68" r="4" fill="#F5A623"/>
                            <line x1="69" y1="68" x2="69" y2="50" stroke="#F5A623" stroke-width="1.5"/>
                            <circle cx="85" cy="60" r="4" fill="#F5A623"/>
                            <line x1="89" y1="60" x2="89" y2="42" stroke="#F5A623" stroke-width="1.5"/>
                            <circle cx="105" cy="76" r="4" fill="#14365F"/>
                            <line x1="109" y1="76" x2="109" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            <circle cx="125" cy="64" r="4" fill="#F5A623"/>
                            <line x1="129" y1="64" x2="129" y2="46" stroke="#F5A623" stroke-width="1.5"/>
                            <circle cx="140" cy="72" r="4" fill="#14365F"/>
                            <line x1="144" y1="72" x2="144" y2="54" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Labels -->
                            <rect x="55" y="100" width="35" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="72" y="110" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 2(p)</text>
                            <rect x="110" y="100" width="35" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="127" y="110" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">60 Yrs</text>
                            <!-- Check badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Musical Work</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Musical Work Copyright</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Copyright Act, 1957</span>
                        <strong>Section 2(p) - Musical Work</strong>
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
            <h2 class="section-title">Who Needs Musical Work Copyright Registration?</h2>
            <div class="content-text">
                
                <p>Musical work copyright registration is essential for any creator of original compositions:</p>
<ul>
<li><strong>Independent Music Composers:</strong> Creating original melodies, harmonies, and arrangements for albums, singles, or EPs.</li>
<li><strong>Film Score Composers:</strong> Creating background scores and song compositions for Bollywood, Tollywood, and regional cinema.</li>
<li><strong>Jingle and Advertising Music Producers:</strong> Creating original compositions for brands and commercials.</li>
<li><strong>Classical Music Composers:</strong> Documenting original ragas, compositions, and arrangements (Kathak, Bharatnatyam, Hindustani, Carnatic).</li>
<li><strong>Electronic Music Producers and DJs:</strong> Creating original beats, tracks, and remixes.</li>
<li><strong>Music Production Houses and Labels:</strong> Owning rights to original compositions and managing catalogues.</li>
<li><strong>Songwriters:</strong> Contributing musical composition (separate from lyrics) to collaborative works.</li>
<li><strong>Devotional and Folk Music Artists:</strong> Creating original compositions in devotional, religious, and folk genres.</li>
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
            <h2 class="section-title">6 Musical Work Copyright Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Complete Musical Work Registration</td><td>End-to-end registration including Form XIV, Statement of Particulars, documentation, and filing on <a href="https://copyright.gov.in" target="_blank" rel="noopener">copyright.gov.in</a>.</td></tr>
<tr><td>Layered Copyright Analysis</td><td>Identification and mapping of all copyright layers - musical work (Section 14(a)), lyrics as literary work, and sound recording (Section 14(e)) - for comprehensive protection.</td></tr>
<tr><td>Copyright Assignment and Licensing</td><td>Drafting assignment deeds and licensing agreements for synchronisation, mechanical reproduction, streaming, and public performance. See <a href="/copyright-assignment">copyright assignment</a>.</td></tr>
<tr><td>Royalty Advisory and IPRS Support</td><td>Guidance on royalty rights under the 2012 Amendment (proviso to Section 18), registration with IPRS (Indian Performing Right Society), and royalty collection strategy.</td></tr>
<tr><td>Objection Handling</td><td>Professional reply to Registrar discrepancy letters within 30-day deadline. See <a href="/copyright-objection">copyright objection</a>.</td></tr>
<tr><td>Anti-Piracy and Enforcement</td><td>Cease-and-desist notices, takedown requests to streaming platforms, and infringement documentation for Section 63 prosecution.</td></tr>

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
            <h2 class="section-title">6-Step Musical Work Copyright Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete registration process for musical compositions - from rights identification to certificate issuance and royalty advisory.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify Musical Work and Ownership</h3><p class="step-description">Confirm the work qualifies under Section 2(p) - original composition (melody, harmony, rhythm, arrangement). Identify the composer as first owner under Section 17(a). If created during employment, employer is first owner under Section 17(c).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 2(p) confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Ownership verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="30" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">&#9835;</text><text x="60" y="43" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">2(p)</text><path d="M48 62l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Identified</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Documentation</h3><p class="step-description">Complete Form XIV under Copyright Rules, 2013. Prepare Statement of Particulars with composition details. Compile the musical work in recordable format - sheet music (notation), audio recording, or digital file.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XIV ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audio/notation compiled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Application on copyright.gov.in</h3><p class="step-description">Submit online with Form XIV, Statement of Particulars, copy of musical work (audio file or sheet music), and all supporting documents. Pay Rs 500 per work.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed online</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 500 paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">copyright.gov.in</text><rect x="55" y="52" width="30" height="12" rx="3" fill="#F5A623" opacity="0.6"/><text x="70" y="61" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 500</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">30-Day Notice Period</h3><p class="step-description">Application published in the Copyright Journal for a 30-day notice period under Rule 70. Any person may file an objection regarding ownership or originality of the musical work.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 30-day wait</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Journal published</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="36" font-size="12" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">30</text><text x="60" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">DAYS</text></svg></div><span class="illustration-label">Notice Done</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Examination by Registrar</h3><p class="step-description">The Registrar examines the application and documents. Discrepancy letter issued if needed - response within 30 days. Enquiry held if objection filed during notice period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Examination done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Queries resolved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="35" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="45" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Examined</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Registration Certificate Issued</h3><p class="step-description">Registrar enters the musical work in the Register of Copyrights under Section 44 and issues the Certificate. Prima facie evidence under Section 48. Enables enforcement under Sections 55 and 63.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 44 recorded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="32" r="15" fill="#25D366" opacity="0.2"/><text x="60" y="30" font-size="12" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">&#9835;</text><path d="M52 42l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Registered</text></svg></div><span class="illustration-label">Certificate Ready</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Musical Work Copyright Registration</h2>
            <div class="content-text">
                
                <p>Prepare the following before filing:</p>
<ul>
<li>Form XIV (copyright registration application under Copyright Rules, 2013)</li>
<li>Statement of Particulars (SOP) signed by the applicant/composer</li>
<li>Statement of Further Particulars (specific to musical works)</li>
<li>Copy of the musical work (audio recording, sheet music, or digital notation file)</li>
<li>Identity proof of the composer (PAN, Aadhaar, passport)</li>
<li>Address proof of the composer</li>
<li>NOC from the lyricist (if the composition accompanies lyrics by a different author)</li>
<li>Assignment deed or licence agreement (if ownership was transferred to the applicant)</li>
<li>Affidavit affirming originality and authorship of the musical composition</li>
<li>Power of Attorney (if filing through an authorized representative)</li>
<li>Registration fee: Rs 500 per musical work</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Musical Work Copyright Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Distinguishing Musical Work from Sound Recording</td><td>Many musicians confuse the composition copyright (Section 14(a)) with the recording copyright (Section 14(e)) - these are separate, independent rights</td><td>Our IP team identifies and registers both copyrights separately for complete protection. Different owners, durations, and exclusive rights.</td></tr>
<tr><td>Establishing Originality</td><td>With millions of compositions existing, proving originality is crucial for registration</td><td>We document the creation process (timestamps, drafts, studio recordings) and prepare comparison analyses to demonstrate original elements.</td></tr>
<tr><td>Protecting Royalty Rights After Assignment</td><td>Composers may unknowingly waive royalty rights when assigning to producers or labels</td><td>The 2012 Amendment (proviso to Section 18) mandates equal royalties. We ensure composers understand and preserve their statutory royalty rights during negotiations.</td></tr>
<tr><td>Unauthorized Cover Versions and Streaming</td><td>Section 31C permits cover versions but many violate notice, attribution, and royalty conditions</td><td>We enforce Section 31C conditions and pursue action against non-compliant covers and unauthorized streaming with cease-and-desist notices.</td></tr>

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
            <h2 class="section-title">Musical Work Copyright Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Registration Fee (per musical work)</td><td class="table-amount">Rs 500</td></tr>
<tr><td>Sound Recording Registration (per work)</td><td class="table-amount">Rs 2,000</td></tr>
<tr><td>Cinematograph Film Registration (per work)</td><td class="table-amount">Rs 5,000</td></tr>
<tr><td>Objection Reply (if applicable)</td><td class="table-amount">Additional charges based on complexity</td></tr>
<tr><td>Assignment/Licensing Agreement Drafting</td><td class="table-amount">Custom pricing based on scope</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Musical Work Copyright consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20copyright%20for%20my%20music.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Musical Work Copyright Registration Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Documentation and Form Preparation</td><td>3-5 days</td></tr>
<tr><td>Filing on copyright.gov.in</td><td>1-2 days</td></tr>
<tr><td>Copyright Journal Notice Period</td><td>30 days (mandatory)</td></tr>
<tr><td>Registrar Examination</td><td>30-90 days post notice</td></tr>
<tr><td>Certificate Issuance</td><td>Upon approval</td></tr>
<tr><td><strong>Total Timeline</strong></td><td><strong>2-4 months</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> The 30-day notice period is mandatory under Rule 70 of the Copyright Rules, 2013. Applications with complete documentation move through examination faster. We also recommend registering with IPRS (Indian Performing Right Society) for royalty collection alongside Copyright Office registration.</p>

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
            <h2 class="section-title">5 Benefits of Musical Work Copyright Registration</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Lifetime + 60 Years Protection</h3><p class="feature-text">Section 22 grants copyright for the composer's lifetime plus 60 years after death - ensuring your compositions are protected for generations.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Royalty Rights Preserved by Law</h3><p class="feature-text">The 2012 Amendment (proviso to Section 18) mandates that composers cannot assign or waive the right to receive equal royalties for utilization in sound recordings.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Criminal Enforcement</h3><p class="feature-text">Section 63 prescribes 6 months to 3 years imprisonment and Rs 50,000 to Rs 2 lakh fine. Section 63A enhances penalties for repeat offenders.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Prima Facie Evidence</h3><p class="feature-text">The Registration Certificate under Section 48 is prima facie evidence of ownership in court, strengthening your position in infringement litigation and licensing disputes.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Global Protection via Berne Convention</h3><p class="feature-text">India is a signatory to the Berne Convention. Registered Indian musical works enjoy automatic protection in all 181+ member countries.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Moral Rights Protection</h3><p class="feature-text">Section 57 grants the right to claim authorship and restrain distortion. Moral rights persist even after assignment and cannot be waived.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India with IP, copyright, and compliance services.</p>
<p><strong>50,000+ Documents Filed</strong> on government portals including copyright.gov.in, MCA, and Income Tax.</p>
<p><strong>4.9 Google Rating</strong> based on verified client reviews.</p>
<p><strong>15+ Years of Practice</strong> with deep expertise in copyright, trademark, and IP law for music and entertainment.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram - serving musicians and music companies across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Musical Work vs Sound Recording vs Literary Work (Lyrics)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Musical Work</th><th>Sound Recording</th><th>Literary Work (Lyrics)</th></tr></thead>
                    <tbody>
                        <tr><td>Section</td><td>Section 2(p)</td><td>Section 2(xx)</td><td>Section 2(o)</td></tr>
<tr><td>What It Covers</td><td>Melody, harmony, rhythm, arrangement, notation</td><td>Recording of sounds on any medium</td><td>Words, lyrics, text intended to be sung/spoken</td></tr>
<tr><td>First Owner</td><td>Composer</td><td>Producer of the recording</td><td>Lyricist / Author</td></tr>
<tr><td>Duration</td><td>Lifetime + 60 years (Section 22)</td><td>60 years from publication (Section 27)</td><td>Lifetime + 60 years (Section 22)</td></tr>
<tr><td>Key Rights</td><td>Reproduce, perform, record, adapt (Section 14(a))</td><td>Copy, sell/rent, communicate (Section 14(e))</td><td>Reproduce, perform, record, adapt (Section 14(a))</td></tr>
<tr><td>Cover Version</td><td>Subject to Section 31C conditions</td><td>Separate copyright - new recording needed</td><td>Lyrics may be used in cover per Section 31C</td></tr>
<tr><td>Moral Rights</td><td>Yes - Section 57</td><td>No</td><td>Yes - Section 57</td></tr>

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
            <h2 class="section-title">Related Copyright and Music Services</h2>
            <div class="content-text">
                
                <p>Musical work copyright works best as part of a comprehensive music rights strategy:</p>
<ul>
<li><strong><a href="/copyright-registration">Copyright Registration</a></strong> - General copyright registration for all work categories.</li>
<li><strong><a href="/copyright-registration-for-sound-recording">Copyright for Sound Recording</a></strong> - Protect the recorded version of your music separately from the composition.</li>
<li><strong><a href="/copyright-registration-for-literary-work">Copyright for Literary Work</a></strong> - Protect lyrics as a separate literary copyright.</li>
<li><strong><a href="/copyright-objection">Copyright Objection</a></strong> - Handle Registrar objections and third-party opposition.</li>
<li><strong><a href="/copyright-assignment">Copyright Assignment</a></strong> - Transfer musical work rights with proper documentation.</li>
<li><strong><a href="/trademark-registration">Trademark Registration</a></strong> - Protect your band name, artist name, or label as a commercial identifier.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Musical Work Copyright in India</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Copyright Act, 1957 (amended up to Act 27 of 2012) + Copyright Rules, 2013.</p>
<p><strong>Key Sections:</strong></p>
<ul>
<li><strong><a href="https://indiankanoon.org/doc/1129646/" target="_blank" rel="noopener">Section 2(p)</a>:</strong> Defines musical work - music + graphical notation, excludes words/actions.</li>
<li><strong>Section 13(1)(a):</strong> Copyright subsists in original musical works.</li>
<li><strong>Section 14(a):</strong> Exclusive rights - reproduce, perform publicly, make films/recordings, translate, adapt.</li>
<li><strong>Section 17(a):</strong> Composer is first owner. Section 17(c): Employer for employment works.</li>
<li><strong>Section 18 (proviso):</strong> Author cannot assign/waive right to equal royalties for sound recording utilization.</li>
<li><strong>Section 22:</strong> Term - lifetime + 60 years after death.</li>
<li><strong>Section 31C:</strong> Cover version licence - conditions: 2 years after first recording, notice, royalty, no alteration.</li>
<li><strong>Section 31D:</strong> Statutory broadcasting licence - prior notice + Appellate Board royalty rates.</li>
<li><strong>Section 57:</strong> Moral rights - paternity and integrity. Cannot be waived.</li>
</ul>
<p><strong>Penalties:</strong> Section 63: 6 months to 3 years + Rs 50,000 to Rs 2 lakh. Section 63A: enhanced for repeat offenders.</p>
<p><strong>Copyright Societies:</strong> IPRS (Indian Performing Right Society) registered under Section 33 for royalty collection.</p>
<p><strong>Regulatory:</strong> <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office, DPIIT</a>. International: <a href="https://www.wipo.int/wipolex/en/legislation/details/15814" target="_blank" rel="noopener">Berne Convention</a> (181+ countries).</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Musical Work Copyright</h2>
                    <p class="faq-expanded__lead">Answers about musical work definition, ownership, duration, cover versions, moral rights, IPRS, and the difference between composition and recording copyright.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Musical Work Copyright',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a musical work under the Copyright Act, 1957?</h3>
                        <div class="faq-expanded__a"><p>Under Section 2(p), a musical work means a work consisting of music and includes graphical notation but does not include words or actions intended to be sung, spoken, or performed with the music. The melody, harmony, rhythm, arrangement, and sheet music are protected as a musical work, while lyrics are protected separately as literary work under Section 2(o). A single song contains multiple layered copyrights.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who owns the copyright in a musical composition?</h3>
                        <div class="faq-expanded__a"><p>The composer is the first owner under Section 17(a). If created during employment, the employer is the first owner under Section 17(c). The Copyright (Amendment) Act, 2012 added a proviso to Section 18 mandating that the author of a musical work in a sound recording cannot assign or waive the right to receive equal royalties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does copyright in a musical work last?</h3>
                        <div class="faq-expanded__a"><p>Under Section 22, copyright subsists for 60 years from the beginning of the calendar year following the year of the author's death. For joint authorship, 60 years from the death of the last surviving author. A composition by a composer who passes away in 2026 will be protected until 31 December 2086.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Gaane ka copyright kaise le?</h3>
                        <div class="faq-expanded__a"><p>Gaane ka copyright lene ke liye copyright.gov.in portal par Form XIV file karo, apni musical composition ki audio file ya sheet music upload karo, Statement of Particulars bharo, aur Rs 500 registration fee pay karo. 30 din ka notice period hota hai, phir Registrar certificate issue karta hai. Patron Accounting pura process handle karta hai - call karo +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between musical work and sound recording copyright?</h3>
                        <div class="faq-expanded__a"><p>Musical work copyright (Section 14(a)) protects the composition itself - melody, harmony, arrangement. Sound recording copyright (Section 14(e)) protects the specific recorded version - owned by the producer. These are independent rights under Section 13(4) with different owners, durations, and exclusive rights. Both co-exist in a single song.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can someone make a cover version of my copyrighted musical work?</h3>
                        <div class="faq-expanded__a"><p>Yes, under Section 31C, any person can make a cover version after 2 calendar years from the first recording. Conditions: prior notice to copyright owner, royalty payment at Appellate Board rates, no alteration to original composition (except as technically necessary), and due credits and attribution. Violation constitutes infringement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Music copyright registration kitne mein hota hai?</h3>
                        <div class="faq-expanded__a"><p>Music copyright registration ka government fee Rs 500 hai per musical work (Second Schedule, Copyright Rules, 2013). Professional charges alag hote hain - Patron Accounting ka fee Rs 4,999 se shuru hota hai. Process 2-4 mahine lagta hai. Free quote ke liye call karein +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What are moral rights and do they apply to musical works?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 57, the composer has the right to claim authorship (right of paternity) and to restrain distortion, mutilation, or modification prejudicial to honour or reputation (right of integrity). Moral rights exist independently of economic rights, cannot be assigned or waived, and persist even after the composer transfers the copyright.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Are ringtones copyrightable?</strong> A: If original, yes. A ringtone consisting of original music qualifies as a musical work under Section 2(p).</p>
<p><strong>Q: Does humming create copyright?</strong> A: Copyright arises upon fixation in any material form. An unfixed melody is not protected - recording or notating it creates copyright.</p>
<p><strong>Q: Is background score separate from songs in a film?</strong> A: Yes. Background score and individual songs are separate musical works, each with its own copyright.</p>
<p><strong>Q: Can I use a copyrighted song at a wedding?</strong> A: Section 52(1)(za) exempts performance in bona fide religious ceremonies including marriage processions.</p>
<p><strong>Q: Is IPRS the same as copyright registration?</strong> A: No. IPRS collects royalties. Copyright Office registration provides prima facie evidence. Both recommended.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Your Music Deserves Legal Protection - Register Before It Spreads</h2>
            <div class="content-text">
                
                <p>With digital platforms making music instantly accessible worldwide, unauthorized use of compositions is rampant. Without registration, proving ownership in takedown requests and infringement cases becomes significantly harder.</p>
<p>The government fee is just Rs 500 with lifetime-plus-60-years protection and statutory royalty rights preserved by law. Registration also enables criminal prosecution under Section 63 with imprisonment up to 3 years.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20musical%20work%20copyright%20registration.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Musical Work Copyright with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Copyright registration for musical work provides composers with lifetime-plus-60-years protection over their original compositions, enforceable through both civil and criminal remedies. With the 2012 Amendment strengthening royalty rights and digital music distribution growing rapidly, registration is more critical than ever.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's IP and CA team handles the complete process - from Form XIV preparation to Registrar filing, royalty advisory, and IPRS coordination. We also assist with layered copyright analysis, licensing agreements, and anti-piracy enforcement.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">15+ years of practice. 10,000+ businesses served. Offices in Pune, Mumbai, Delhi, and Gurugram. Starting from Rs 4,999. Contact us for a free consultation.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20copyright%20for%20my%20music.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Musical%20Work%20Copyright&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20copyright%20registration%20for%20musical%20work.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Musical Work Copyright Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert music copyright registration with local support from our CA and CS team.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/copyright-registration-for-musical-work/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/copyright-registration-for-musical-work/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/copyright-registration-for-musical-work/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/copyright-registration-for-musical-work/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete music and IP rights protection</div><div class="pa-cross-grid"><a href="/copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-registration-for-sound-recording" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Sound Recording</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-registration-for-literary-work" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Literary Work (Lyrics)</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-objection" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Objection</div><div class="pa-card-sub">India</div></div></a><a href="/copyright-assignment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 9 months. Content aligned with the Copyright Act, 1957 (amended 2012), Copyright Rules, 2013, and IPRS regulations. Next review: December 2026.</p>
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
