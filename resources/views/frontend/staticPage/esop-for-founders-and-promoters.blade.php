@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP for Founders and Promoters 2026: Rules | Patron Accounting</title>
    <meta name="description" content="Can founders and promoters get ESOPs in India? The Rule 12 bar, the DPIIT-startup 10-year exemption, SEBI Reg 9A for IPOs, and sweat equity. From Rs 49,999.">
    <link rel="canonical" href="/esop-for-founders-and-promoters">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP for Founders and Promoters 2026: Rules | Patron Accounting">
    <meta property="og:description" content="Can founders and promoters get ESOPs in India? The Rule 12 bar, the DPIIT-startup 10-year exemption, SEBI Reg 9A for IPOs, and sweat equity. From Rs 49,999.">
    <meta property="og:url" content="/esop-for-founders-and-promoters">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP for Founders and Promoters 2026: Rules | Patron Accounting">
    <meta name="twitter:description" content="Can founders and promoters get ESOPs in India? The Rule 12 bar, the DPIIT-startup 10-year exemption, SEBI Reg 9A for IPOs, and sweat equity. From Rs 49,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-for-founders-and-promoters/#service",
        "name": "ESOP for Founders and Promoters in India",
        "description": "Patron Accounting advises founders and promoters on ESOP eligibility in India, including the Rule 12 exclusion of promoters and over-10-percent directors, the DPIIT-recognised-startup exemption for up to 10 years, SEBI Regulation 9A for IPO-bound founders, and sweat equity under Section 54 as the alternative, with eligibility opinions, structuring, valuation and governance.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-for-founders-and-promoters" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Promoter (business)", "sameAs": "https://en.wikipedia.org/wiki/Promoter_(business)" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP for Founders and Promoters Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Founder and Promoter ESOP Eligibility and Structuring" },
                    "price": "49999",
                    "priceCurrency": "INR",
                    "description": "Eligibility opinion, instrument choice and scheme and grant structuring. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-for-founders-and-promoters/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP for Founders and Promoters", "item": "https://www.patronaccounting.com/esop-for-founders-and-promoters" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-for-founders-and-promoters/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Can founders get ESOPs in India?",
                "acceptedAnswer": { "@type": "Answer", "text": "By default, no. Under Section 62(1)(b) read with Rule 12 of the Share Capital Rules, a promoter or promoter-group member, and a director holding more than 10 percent of the equity, are excluded from the definition of employee and cannot be granted ESOPs. The major exception is a DPIIT-recognised startup, which can grant ESOPs to its founders for up to 10 years from incorporation. So a founder of a recognised startup can hold ESOPs, while most other founders cannot without using sweat equity." }
            },
            {
                "@type": "Question",
                "name": "Can a promoter holding more than 10 percent get ESOPs?",
                "acceptedAnswer": { "@type": "Answer", "text": "Normally no. Rule 12 specifically bars a director who holds more than 10 percent of the equity, directly or indirectly, as well as anyone in the promoter group, from receiving ESOPs. The exception is a DPIIT-recognised startup within 10 years of incorporation, where this bar does not apply. Outside that exemption, such a promoter would need to look at sweat equity shares under Section 54 instead, which are open to promoters." }
            },
            {
                "@type": "Question",
                "name": "Kya founders ko India mein ESOP mil sakta hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Default rule mein nahi. Rule 12 ke tahat promoter aur 10 percent se zyada equity wale director ESOP ke liye eligible nahi hain. Lekin DPIIT-recognised startup ek badi exception hai: aise startup apne founders ko incorporation ke 10 saal tak ESOP de sakte hain. Iske bahar, founder sweat equity (Section 54) ka route le sakta hai. Hum eligibility check karke sahi instrument suggest karte hain." }
            },
            {
                "@type": "Question",
                "name": "What is the DPIIT-startup ESOP exemption?",
                "acceptedAnswer": { "@type": "Answer", "text": "It is a proviso to Rule 12 that disapplies the promoter and over-10-percent-director exclusion for companies recognised as startups by the DPIIT. Introduced in 2016 and later extended, it lets such a startup grant ESOPs to its promoters and founder-directors for up to 10 years from the date of incorporation or registration. After 10 years, or once the company ceases to be a recognised startup, the standard exclusion returns for fresh grants. Securing DPIIT recognition early is therefore key for founders." }
            },
            {
                "@type": "Question",
                "name": "Do founders lose their ESOPs when the company goes for an IPO?",
                "acceptedAnswer": { "@type": "Answer", "text": "Not anymore, if structured correctly. Earlier, founders classified as promoters in the IPO documents risked losing options granted while they were employees. SEBI's Regulation 9A, notified in September 2025, now lets a founder identified as a promoter in the draft red herring prospectus continue to hold and exercise options or SAR granted at least one year before the DRHP filing, after listing, covering both vested and unvested options. Fresh grants to promoters remain barred, so the timing of the original grant matters." }
            },
            {
                "@type": "Question",
                "name": "What can a promoter do if ESOPs are not allowed?",
                "acceptedAnswer": { "@type": "Answer", "text": "They can use sweat equity shares under Section 54 of the Companies Act, which is expressly open to promoters and directors and has no 10 percent bar. Sweat equity rewards know-how, intellectual property or value the person has added to the company, rather than future service through options. For a founder of a non-startup company, or one past the 10-year DPIIT window, sweat equity is usually the right route, and we structure it correctly." }
            },
            {
                "@type": "Question",
                "name": "Is a founder's ESOP taxed differently?",
                "acceptedAnswer": { "@type": "Answer", "text": "No. Once a founder is eligible to hold ESOPs, whether through the DPIIT exemption or otherwise, the tax is the same as for any employee: the spread between fair market value and the exercise price is a salary perquisite at exercise, and the later gain on sale is capital gains. Founders of DPIIT-recognised startups may also use the startup deferral of perquisite TDS. The eligibility question is separate from, and comes before, the tax question." }
            },
            {
                "@type": "Question",
                "name": "How do we make sure a founder grant is valid?",
                "acceptedAnswer": { "@type": "Answer", "text": "By confirming eligibility before granting. We check whether the founder is a promoter or an over-10-percent director, whether the company is a DPIIT-recognised startup and within the 10-year window, and, for IPO-bound companies, whether the grant qualifies under Reg 9A. If the ESOP route is closed, we move to sweat equity. Getting this opinion first avoids invalid grants that cause cap-table and diligence problems later, which is the most common founder mistake." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-for-founders-and-promoters",
        "name": "ESOP for Founders and Promoters in India",
        "description": "Can founders and promoters get ESOPs in India? The Rule 12 bar, the DPIIT-startup 10-year exemption, SEBI Reg 9A for IPOs, and sweat equity. From Rs 49,999.",
        "url": "https://www.patronaccounting.com/esop-for-founders-and-promoters",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-for-founders-and-promoters/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-for-founders-and-promoters/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to structure ESOPs for founders and promoters in India",
        "description": "Step-by-step process to classify the founder, test the DPIIT exemption, choose ESOP or sweat equity with Reg 9A for IPOs, pass approvals and valuation, and document and register the grant.",
        "totalTime": "P21D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Classify the founder",
                "text": "Determine promoter status and the shareholding against the 10-percent line."
            },
            {
                "@type": "HowToStep",
                "name": "Test the exemption",
                "text": "Check DPIIT recognition and the years since incorporation."
            },
            {
                "@type": "HowToStep",
                "name": "Choose the instrument",
                "text": "ESOP within the window, sweat equity outside it, with Reg 9A for IPO."
            },
            {
                "@type": "HowToStep",
                "name": "Approve and value",
                "text": "Pass the resolutions and obtain the valuation."
            },
            {
                "@type": "HowToStep",
                "name": "Document and register",
                "text": "Paper the grant and update the SH-6 register."
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "https://www.patronaccounting.com/#organization-rating",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com/",
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "850", "bestRating": "5", "worstRating": "1" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "DefinedTermSet",
        "name": "ESOP for Founders and Promoters Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Promoter",
                "description": "A person or promoter-group member who controls the company, excluded from ESOPs under Rule 12 unless a DPIIT exemption applies."
            },
            {
                "@type": "DefinedTerm",
                "name": "DPIIT-startup exemption",
                "description": "A proviso to Rule 12 letting a recognised startup grant ESOPs to founders for up to 10 years from incorporation."
            },
            {
                "@type": "DefinedTerm",
                "name": "Regulation 9A",
                "description": "A SEBI provision preserving founder options granted at least a year before the DRHP through an IPO."
            },
            {
                "@type": "DefinedTerm",
                "name": "Sweat equity",
                "description": "Shares issued under Section 54 of the Companies Act, expressly open to promoters, as the founder alternative to ESOPs."
            }
        ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages.css') }}?v=1">
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
                        ESOP for Founders and Promoters
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>The rule:</span> promoters and over-10-percent directors are normally barred from ESOPs.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>The exemption:</span> DPIIT-recognised startups can grant to founders for 10 years.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>At IPO:</span> Reg 9A lets founders keep pre-existing options post-listing.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> founder ESOP advisory from Rs 49,999 (Exl GST and Govt. Charges).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on founder equity and DPIIT startups</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP for Founders and Promoters%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP for Founders and Promoters%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20am%20a%20founder%2Fpromoter%20and%20want%20to%20check%20whether%20I%20can%20be%20granted%20ESOPs%2C%20the%20DPIIT%20exemption%20and%20Reg%209A.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP for Founders and Promoters',
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
    'ctaText'    => 'Founders and promoters across India trust Patron Accounting for eligibility opinions, the right instrument and clean founder-equity governance.',
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
            
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">The Default Rule</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">DPIIT Exemption</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">At IPO: Reg 9A</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Founder ESOP Tax</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">ESOP vs Sweat Equity</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What This Service Covers</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP for Founders and Promoters Services at a Glance</strong></p>
                    <p>Promoters and over-10-percent directors normally cannot get ESOPs, but DPIIT-recognised startups can grant to founders for 10 years, and Reg 9A lets IPO-bound founders keep earlier options. Sweat equity is the fallback.</p>
                </div>
                <p>Can founders and promoters actually get ESOPs in India? The default answer is no, but there are two important exceptions, and getting it right protects your cap table and your IPO. Patron Accounting advises founders and promoters on ESOP eligibility: the Rule 12 bar, the DPIIT-startup exemption, the new SEBI Reg 9A treatment for IPO-bound founders, and sweat equity as the alternative.</p>
                <p>Many founders assume they can simply allocate ESOPs to themselves, and most cannot, at least not by default. Getting this wrong creates invalid grants, cap-table confusion and problems in diligence or at IPO. This page sets out exactly when a founder or promoter can hold ESOPs, and what to do when they cannot.</p>
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
                <h2 class="section-title">The Default Rule: Promoters Are Barred</h2>
                <div class="content-text what-is-definition">
                    
                    <p>The Companies Act is designed so ESOPs benefit employees, not the people who control the company. Section 62(1)(b) read with Rule 12 of the Share Capital Rules excludes two groups from the definition of 'employee':</p>
                    <p><strong>Promoters:</strong> a promoter or any member of the promoter group.</p>
                    <p><strong>Large directors:</strong> a director holding, directly or indirectly, alone or with relatives or a body corporate, more than 10 percent of the equity.</p>
                    <p><strong>The effect:</strong> a founder who is a promoter, or a director above the 10 percent threshold, is not an 'employee' for ESOP purposes, so a grant to them is invalid unless an exemption applies. The same exclusion is mirrored for listed companies under the SEBI SBEB and Sweat Equity Regulations.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP for Founders and Promoters:</strong></p>
                    <ul>
                        <li><strong>Promoter:</strong> a person or promoter-group member who controls the company.</li>
                        <li><strong>10 percent bar:</strong> directors above this equity threshold are excluded.</li>
                        <li><strong>DPIIT exemption:</strong> recognised startups can grant to founders for 10 years.</li>
                        <li><strong>Reg 9A:</strong> preserves founder options through an IPO.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP for Founders and Promoters</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Governed by</span>
                        <strong>Rule 12 and Reg 9A</strong>
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
            <h2 class="section-title">The DPIIT-Startup Exemption: Founders Can, For 10 Years</h2>
            <div class="content-text">
                
                <p>Recognising that in startups the founder is often also the hardest-working employee, the law carves out an exemption.</p>
                <p><strong>The 10-year window:</strong> a proviso to Rule 12, introduced in 2016 and later extended, lets a DPIIT-recognised startup grant ESOPs to promoters and to directors holding more than 10 percent, for up to 10 years from the date of incorporation or registration. Within that window, the standard exclusion simply does not apply, so founders of a recognised startup can hold ESOPs like any employee.</p>
                <p><strong>When it ends:</strong> the relaxation falls away on completion of 10 years from incorporation, or earlier if the company stops being a recognised startup, after which the standard bar returns for any fresh grants. So the practical step for most founders is to secure DPIIT recognition early and grant within the window.</p>
                <p><strong>The prerequisite:</strong> the company must hold DPIIT startup recognition, which itself depends on meeting the startup criteria, including the turnover limit. We help obtain recognition and time the grants.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">At IPO: Regulation 9A and the Founder Paradox</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>The old paradox</td><td>Options granted while a founder was an employee could be lost once they were classified as a promoter in the IPO documents.</td></tr>
                        <tr><td>What Reg 9A allows</td><td>A founder identified as a promoter in the DRHP may continue to hold and exercise options or SAR granted at least one year before the DRHP filing, after listing.</td></tr>
                        <tr><td>Coverage</td><td>Both vested and unvested options granted in time.</td></tr>
                        <tr><td>Still barred</td><td>Fresh grants to promoters remain barred.</td></tr>
                        <tr><td>The planning point</td><td>Plan founder grants at least one year before the DRHP, and they survive through listing.</td></tr>

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
            <h2 class="section-title">How the Engagement Runs</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From classifying the founder to documenting the grant, we confirm eligibility first and pick the right instrument for your stage.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Classify the founder</h3>
        <p class="step-description">We determine promoter status and the shareholding against the 10-percent line.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Promoter status</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10pc line</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="36" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M34 80 a26 22 0 0152 0z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/></svg></div>
            <span class="illustration-label">Founder Classified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Test the exemption</h3>
        <p class="step-description">We check DPIIT recognition and the years since incorporation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DPIIT check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10-year window</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="60" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="44" cy="34" r="3" fill="#25D366"/><line x1="54" y1="34" x2="78" y2="34" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="44" cy="50" r="3" fill="#F5A623"/><line x1="54" y1="50" x2="78" y2="50" stroke="#14365F" stroke-width="2" opacity="0.3"/><text x="60" y="74" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">10 yrs</text></svg></div>
            <span class="illustration-label">Exemption Tested</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Choose the instrument</h3>
        <p class="step-description">ESOP within the window, sweat equity outside it, with Reg 9A for IPO.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ESOP or sweat</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reg 9A for IPO</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="26" r="9" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M60 35 v12 M60 47 L36 64 M60 47 L84 64" stroke="#14365F" stroke-width="2"/><circle cx="36" cy="72" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="84" cy="72" r="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/></svg></div>
            <span class="illustration-label">Instrument Chosen</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Approve and value</h3>
        <p class="step-description">We pass the resolutions and obtain the valuation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolutions</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Valuation</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="60" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="30" x2="78" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="60" cy="62" r="13" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 62l5 5 9-9" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Approved</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Document and register</h3>
        <p class="step-description">We paper the grant and update the SH-6 register.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grant papered</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-6 register</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="26" y="14" width="68" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="38" y1="32" x2="82" y2="32" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="38" y1="46" x2="82" y2="46" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="38" y1="60" x2="66" y2="60" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="78" cy="72" r="6" fill="#E8712C"/></svg></div>
            <span class="illustration-label">Registered</span>
            <span class="step-number-large">05</span>
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
            <h2 class="section-title">How a Founder's ESOP Is Taxed</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>At exercise:</strong> the spread between fair market value and the exercise price is taxed as a salary perquisite.</li>
                    <li><strong>On sale:</strong> the gain over the value taxed at exercise is taxed as capital gains.</li>
                    <li><strong>Startup deferral:</strong> DPIIT-startup employees, including eligible founders, may defer the perquisite TDS under the startup deferral provisions.</li>
                    <li><strong>Same as employees:</strong> once eligible, a founder's ESOP is taxed on the same basis as any other employee's.</li>
                </ul>

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
                        <tr><td>Founder granted ESOPs despite the bar</td><td>Invalid grant, diligence risk</td><td>Test eligibility and correct invalid grants before they harm diligence.</td></tr>
                        <tr><td>Past the 10-year DPIIT window</td><td>ESOP route closed</td><td>Use sweat equity under Section 54 instead.</td></tr>
                        <tr><td>Founder options at risk at IPO</td><td>Options lost on promoter classification</td><td>Structure grants to qualify under Reg 9A.</td></tr>
                        <tr><td>Not a DPIIT startup yet</td><td>Exemption unavailable</td><td>Secure recognition, then grant within the window.</td></tr>

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
            <h2 class="section-title">Founder ESOP Advisory Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 49,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Eligibility opinion, instrument choice and scheme and grant structuring</td></tr>
                        <tr><td>DPIIT recognition, sweat-equity issuance, valuation, Reg 9A IPO work</td><td>Scoped on top</td></tr>
                        <tr><td>Filings</td><td>At actuals</td></tr>
                        <tr><td>Basis of quote</td><td>The company's stage and the number of founders</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP for Founders and Promoters consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20an%20eligibility%20opinion%20on%20founder%2Fpromoter%20ESOPs%20and%20the%20right%20instrument%20for%20my%20stage.%20Please%20share%20how%20it%20works%20and%20your%20fees." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility opinion and instrument recommendation</td><td>3 to 5 working days</td></tr>
                        <tr><td>Structuring and documenting a founder ESOP (resolutions, valuation, register)</td><td>A further 2 to 3 weeks</td></tr>
                        <tr><td>DPIIT recognition first, or sweat-equity issuance</td><td>Adds its own timeline</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>For IPO-bound companies we align the founder grants with the DRHP schedule well in advance.</strong> Reg 9A only protects options granted at least a year before the DRHP, so the grant timing is planned against the listing calendar.</p>

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
            <h2 class="section-title">Why Get Specialist Advice</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Certainty before granting</h3>
            <p class="feature-text">Certainty on whether a founder can legally hold ESOPs, before granting.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <h3 class="feature-title">Right instrument, right stage</h3>
            <p class="feature-text">The DPIIT 10-year window used, and the right instrument chosen for your stage.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
            <h3 class="feature-title">Survives an IPO</h3>
            <p class="feature-text">Founder equity that survives an IPO under Reg 9A.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3 class="feature-title">Clean cap table</h3>
            <p class="feature-text">Clean governance and a correct cap table that stands up in diligence.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders and Promoters</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years on founder equity, DPIIT startups, SEBI listing and ESOP governance.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP vs Sweat Equity for Promoters</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>ESOP (Rule 12)</th><th>Sweat equity (Section 54)</th></tr></thead>
                    <tbody>
                        <tr><td>Promoters eligible?</td><td>No, unless DPIIT startup</td><td>Yes, expressly</td></tr>
                        <tr><td>Over-10% directors?</td><td>No, unless DPIIT startup</td><td>Yes</td></tr>
                        <tr><td>What it rewards</td><td>Future service via options</td><td>Know-how, IP or value added</td></tr>

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
                
                <p>Founder grants build on our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>, and the DPIIT route runs through <a href="/startup-registration">startup registration</a>. Designing the plan? See our <a href="/esop-scheme-design">ESOP scheme design</a> and <a href="/esop-valuation-services">ESOP valuation services</a>.</p>
                <p>Grants are issued via <a href="/issue-of-shares">issue of shares</a>, with <a href="/appointment-of-director">appointment of director</a> and <a href="/private-limited-company-compliance">private limited company compliance</a> supporting the governance. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework</h2>
            <div class="content-text">
                
                <p><strong>The exclusion:</strong> Section 62(1)(b) of the Companies Act, read with Rule 12 of the Companies (Share Capital and Debentures) Rules, 2014, excludes a promoter, promoter-group member, and a director holding more than 10 percent of the equity from the definition of 'employee' for ESOP purposes.</p>
                <p><strong>The startup proviso:</strong> a proviso to Rule 12, introduced by the 2016 amendment and extended, disapplies that exclusion for a DPIIT-recognised startup for up to 10 years from incorporation or registration.</p>
                <p><strong>Listed companies:</strong> the SEBI SBEB and Sweat Equity Regulations 2021 mirror the promoter exclusion, and Regulation 9A, notified in September 2025, preserves founder options granted at least a year before the DRHP through listing.</p>
                <p><strong>Sweat equity:</strong> Section 54 of the Companies Act permits sweat equity shares to directors and employees, expressly including promoters, as an alternative route for founders.</p>
                <p>Authoritative sources: the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Section 62, Rule 12, Section 54), <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India / DPIIT</a> (startup recognition and exemption), <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a> (SBEB and Sweat Equity Regulations, Reg 9A), and the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Rules</a>.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Common questions on whether founders and promoters can get ESOPs, the DPIIT exemption, Reg 9A and sweat equity.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP for Founders and Promoters',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can founders get ESOPs in India?</h3>
                        <div class="faq-expanded__a"><p>By default, no. Under Section 62(1)(b) read with Rule 12 of the Share Capital Rules, a promoter or promoter-group member, and a director holding more than 10 percent of the equity, are excluded from the definition of employee and cannot be granted ESOPs. The major exception is a DPIIT-recognised startup, which can grant ESOPs to its founders for up to 10 years from incorporation. So a founder of a recognised startup can hold ESOPs, while most other founders cannot without using sweat equity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can a promoter holding more than 10 percent get ESOPs?</h3>
                        <div class="faq-expanded__a"><p>Normally no. Rule 12 specifically bars a director who holds more than 10 percent of the equity, directly or indirectly, as well as anyone in the promoter group, from receiving ESOPs. The exception is a DPIIT-recognised startup within 10 years of incorporation, where this bar does not apply. Outside that exemption, such a promoter would need to look at sweat equity shares under Section 54 instead, which are open to promoters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Kya founders ko India mein ESOP mil sakta hai?</h3>
                        <div class="faq-expanded__a"><p>Default rule mein nahi. Rule 12 ke tahat promoter aur 10 percent se zyada equity wale director ESOP ke liye eligible nahi hain. Lekin DPIIT-recognised startup ek badi exception hai: aise startup apne founders ko incorporation ke 10 saal tak ESOP de sakte hain. Iske bahar, founder sweat equity (Section 54) ka route le sakta hai. Hum eligibility check karke sahi instrument suggest karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the DPIIT-startup ESOP exemption?</h3>
                        <div class="faq-expanded__a"><p>It is a proviso to Rule 12 that disapplies the promoter and over-10-percent-director exclusion for companies recognised as startups by the DPIIT. Introduced in 2016 and later extended, it lets such a startup grant ESOPs to its promoters and founder-directors for up to 10 years from the date of incorporation or registration. After 10 years, or once the company ceases to be a recognised startup, the standard exclusion returns for fresh grants. Securing DPIIT recognition early is therefore key for founders.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do founders lose their ESOPs when the company goes for an IPO?</h3>
                        <div class="faq-expanded__a"><p>Not anymore, if structured correctly. Earlier, founders classified as promoters in the IPO documents risked losing options granted while they were employees. SEBI's Regulation 9A, notified in September 2025, now lets a founder identified as a promoter in the draft red herring prospectus continue to hold and exercise options or SAR granted at least one year before the DRHP filing, after listing, covering both vested and unvested options. Fresh grants to promoters remain barred, so the timing of the original grant matters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What can a promoter do if ESOPs are not allowed?</h3>
                        <div class="faq-expanded__a"><p>They can use sweat equity shares under Section 54 of the Companies Act, which is expressly open to promoters and directors and has no 10 percent bar. Sweat equity rewards know-how, intellectual property or value the person has added to the company, rather than future service through options. For a founder of a non-startup company, or one past the 10-year DPIIT window, sweat equity is usually the right route, and we structure it correctly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is a founder's ESOP taxed differently?</h3>
                        <div class="faq-expanded__a"><p>No. Once a founder is eligible to hold ESOPs, whether through the DPIIT exemption or otherwise, the tax is the same as for any employee: the spread between fair market value and the exercise price is a salary perquisite at exercise, and the later gain on sale is capital gains. Founders of DPIIT-recognised startups may also use the startup deferral of perquisite TDS. The eligibility question is separate from, and comes before, the tax question.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How do we make sure a founder grant is valid?</h3>
                        <div class="faq-expanded__a"><p>By confirming eligibility before granting. We check whether the founder is a promoter or an over-10-percent director, whether the company is a DPIIT-recognised startup and within the 10-year window, and, for IPO-bound companies, whether the grant qualifies under Reg 9A. If the ESOP route is closed, we move to sweat equity. Getting this opinion first avoids invalid grants that cause cap-table and diligence problems later, which is the most common founder mistake.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Default?</strong> Promoters barred from ESOPs.</li>
                    <li><strong>Threshold?</strong> Directors above 10 percent excluded.</li>
                    <li><strong>Exemption?</strong> DPIIT startups, 10 years.</li>
                    <li><strong>At IPO?</strong> Reg 9A preserves earlier grants.</li>
                    <li><strong>Alternative?</strong> Sweat equity, Section 54.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Timing Matters</h2>
            <div class="content-text">
                
                <p>For founders, timing drives eligibility. The DPIIT exemption runs only for 10 years from incorporation, so grants are best made early in that window; and Reg 9A only protects options granted at least a year before the DRHP, so IPO-bound founders must plan grants well ahead of filing. Decide and document founder equity early, while the exemptions are open, rather than discovering at diligence or at IPO that a grant was never valid.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Founder Equity Right</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">Whether a founder or promoter can hold ESOPs is one of the most misunderstood questions in Indian equity: barred by default under Rule 12, allowed for DPIIT startups for 10 years, protected at IPO by Reg 9A, and replaced by sweat equity where none of that fits.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of founder-equity experience, gives the eligibility opinion, picks the right instrument, and structures and documents it cleanly, so your founder equity is valid, tax-efficient and IPO-ready.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20an%20eligibility%20opinion%20on%20founder%2Fpromoter%20ESOPs%20and%20the%20right%20instrument%20for%20my%20stage.%20Please%20share%20how%20it%20works%20and%20your%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP for Founders and Promoters%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP for Founders and Promoters%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Founder ESOP Advisory Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote eligibility opinions and founder-equity structuring for startups and IPO-bound companies.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We advise founders and promoters nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The eligibility opinion, instrument choice and founder-grant structuring is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for founder equity</div>
                <div class="pa-cross-grid"><a href="/esop-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-scheme-design" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Scheme Design</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/issue-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/appointment-of-director" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Director</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Compliance</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 2 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 2 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every six months for changes to Rule 12 or the DPIIT startup exemption period, SEBI Reg 9A or the SBEB Regulations, Section 54 sweat-equity rules, ESOP perquisite taxation, and the startup deferral provisions (Tier 2 freshness).</p>
        </div>
    </div>
</section>



</main>






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

<script>
// BF-1: Last Updated mirrors schema dateModified (frozen, NOT live new Date())
(function() {
    var dateStr = "2 June 2026";
    var el1 = document.getElementById('lastUpdated');
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el1) el1.textContent = dateStr;
    if (el2) el2.textContent = dateStr;
})();
</script>
<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
