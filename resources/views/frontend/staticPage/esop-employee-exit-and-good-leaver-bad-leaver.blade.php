@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP on Employee Exit 2026: Good vs Bad Leaver | Patron Accounting</title>
    <meta name="description" content="What happens to ESOPs when an employee leaves: good leaver vs bad leaver, vested-option forfeiture, the exercise window and buyback, in India. From Rs 14,999.">
    <link rel="canonical" href="/esop-employee-exit-and-good-leaver-bad-leaver">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP on Employee Exit 2026: Good vs Bad Leaver | Patron Accounting">
    <meta property="og:description" content="What happens to ESOPs when an employee leaves: good leaver vs bad leaver, vested-option forfeiture, the exercise window and buyback, in India. From Rs 14,999.">
    <meta property="og:url" content="/esop-employee-exit-and-good-leaver-bad-leaver">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP on Employee Exit 2026: Good vs Bad Leaver | Patron Accounting">
    <meta name="twitter:description" content="What happens to ESOPs when an employee leaves: good leaver vs bad leaver, vested-option forfeiture, the exercise window and buyback, in India. From Rs 14,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-employee-exit-and-good-leaver-bad-leaver/#service",
        "name": "ESOP on Employee Exit: Good Leaver and Bad Leaver in India",
        "description": "Patron Accounting handles ESOP treatment when an employee exits an Indian company, including good-leaver and bad-leaver classification, the treatment of vested and unvested options, the post-termination exercise window, buyback structuring, perquisite and capital-gains tax, and folding the outcome into the full-and-final settlement, with defensible documentation.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-employee-exit-and-good-leaver-bad-leaver" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Employee stock ownership plan", "sameAs": "https://en.wikipedia.org/wiki/Employee_stock_ownership" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP on Employee Exit Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Employee-Exit ESOP Classification and Settlement" },
                    "price": "14999",
                    "priceCurrency": "INR",
                    "description": "Scheme review, leaver classification and exercise-window administration for an exit. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-employee-exit-and-good-leaver-bad-leaver/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP on Employee Exit", "item": "https://www.patronaccounting.com/esop-employee-exit-and-good-leaver-bad-leaver" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-employee-exit-and-good-leaver-bad-leaver/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the difference between a good leaver and a bad leaver?",
                "acceptedAnswer": { "@type": "Answer", "text": "A good leaver is an employee who leaves under fair circumstances, such as resignation with notice, a layoff, retirement or health reasons, and typically retains their vested options with a defined window to exercise them. A bad leaver is one who leaves under circumstances that harm the company, such as termination for cause, misconduct or joining a competitor, and typically forfeits unvested options and, in some schemes, unexercised vested options too. The scheme sets the exact line." }
            },
            {
                "@type": "Question",
                "name": "What happens to my ESOPs when I resign?",
                "acceptedAnswer": { "@type": "Answer", "text": "Your unvested options are generally forfeited, because they were not yet earned. Your vested options depend on your leaver classification: as a good leaver, you usually keep them and must exercise within the post-termination window, often 30 to 90 days; as a bad leaver, you may lose them or face a discounted buyback. Check your grant letter for the leaver definition, the exercise window and whether resignation counts as a good-leaver event." }
            },
            {
                "@type": "Question",
                "name": "Good leaver aur bad leaver mein kya farq hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Good leaver wo hota hai jo fair tarah se company chhodta hai, jaise notice ke saath resignation, layoff, ya retirement, aur uske vested options reh jaate hain ek exercise window ke saath. Bad leaver wo hai jise cause pe terminate kiya gaya ya jisne misconduct ya competitor join kiya; wo unvested aur kabhi-kabhi vested options bhi kho deta hai. Exact rule scheme mein likha hota hai." }
            },
            {
                "@type": "Question",
                "name": "How long is the ESOP exercise window after leaving?",
                "acceptedAnswer": { "@type": "Answer", "text": "In most Indian startup ESOP plans, the post-termination exercise window is 30 to 90 days, within which a good leaver must exercise vested options or lose them. A 30-day window is considered punitive, 90 days is the common standard, and a year or more is employee-friendly. Crucially, exercising means paying the exercise price and the perquisite tax in cash within that window, so the length of the window directly affects whether an employee can realistically keep their equity." }
            },
            {
                "@type": "Question",
                "name": "Can a company take away vested options?",
                "acceptedAnswer": { "@type": "Answer", "text": "Only if the scheme expressly allows it and the action is legally defensible. Vested options are an earned right, and a company cannot simply erase them; a bad-leaver clause can forfeit them only where the scheme provides for it and the facts support that classification. Bad-leaver labelling cannot be used to punish ordinary resignations. This is why the scheme wording and the exit documentation matter so much, and why disputes often turn on them." }
            },
            {
                "@type": "Question",
                "name": "Is there a buyback when an employee exits?",
                "acceptedAnswer": { "@type": "Answer", "text": "Sometimes. A company may buy back a leaver's vested options or shares for cash, giving the employee liquidity and tidying the cap table. A good leaver is usually bought out at fair value, while a bad leaver may face a discounted price where the scheme permits. A buyback is often the only practical way for a departing employee to realise value before an IPO or acquisition, and we structure the price, transfer and tax." }
            },
            {
                "@type": "Question",
                "name": "Resignation bad leaver count hota hai kya?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yeh scheme pe depend karta hai. Achhi scheme mein normal resignation good-leaver event hota hai. Lekin kuch schemes voluntary resignation ko bhi bad-leaver maante hain, jo ek red flag hai, kyunki isse aap apne earned vested options bhi kho sakte hain. Isliye grant letter mein leaver definition zaroor check karni chahiye. Hum yeh review karte hain." }
            },
            {
                "@type": "Question",
                "name": "How is the exit handled in the full-and-final settlement?",
                "acceptedAnswer": { "@type": "Answer", "text": "The ESOP treatment is part of the overall exit. Once the leaver is classified and the vested options, exercise window and any buyback are settled, the outcome, including any perquisite tax to be deducted, is folded into the employee's full-and-final settlement alongside salary, leave encashment and other dues. Handling the ESOP and the full-and-final settlement together keeps the exit clean and the tax correct, which is how we run it." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-employee-exit-and-good-leaver-bad-leaver",
        "name": "ESOP on Employee Exit: Good Leaver and Bad Leaver in India",
        "description": "What happens to ESOPs when an employee leaves: good leaver vs bad leaver, vested-option forfeiture, the exercise window and buyback, in India. From Rs 14,999.",
        "url": "https://www.patronaccounting.com/esop-employee-exit-and-good-leaver-bad-leaver",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-employee-exit-and-good-leaver-bad-leaver/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-employee-exit-and-good-leaver-bad-leaver/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How ESOP treatment is handled when an employee exits in India",
        "description": "Step-by-step process to review the grant, classify the leaver, calculate vested and unvested options, administer the exercise window or buyback, and settle and file the outcome at an employee exit.",
        "totalTime": "P7D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Review the grant",
                "text": "Read the scheme and grant letter and pull the vesting and exercise terms."
            },
            {
                "@type": "HowToStep",
                "name": "Classify the leaver",
                "text": "Determine good leaver or bad leaver on the facts of the exit, and document it."
            },
            {
                "@type": "HowToStep",
                "name": "Calculate options",
                "text": "Work out vested and unvested options and what each leaver type retains."
            },
            {
                "@type": "HowToStep",
                "name": "Run the window or buyback",
                "text": "Administer the post-termination exercise window, or structure a buyback, with the tax."
            },
            {
                "@type": "HowToStep",
                "name": "Settle and file",
                "text": "Fold it into the full-and-final settlement and complete the SH-6 register and filings."
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
        "name": "ESOP on Employee Exit Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Good leaver",
                "description": "An employee leaving under fair circumstances who typically retains vested options with a defined exercise window."
            },
            {
                "@type": "DefinedTerm",
                "name": "Bad leaver",
                "description": "An employee leaving under circumstances that harm the company, who typically forfeits unvested and sometimes vested options."
            },
            {
                "@type": "DefinedTerm",
                "name": "Exercise window",
                "description": "The post-termination period, often 30 to 90 days, within which a good leaver must exercise vested options or lose them."
            },
            {
                "@type": "DefinedTerm",
                "name": "Forfeiture",
                "description": "The loss of options on exit, which must be expressly permitted by the scheme and legally defensible."
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
                        ESOP on Employee Exit: Good Leaver and Bad Leaver
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Classification:</span> good leaver versus bad leaver, applied correctly and defensibly.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Vested options:</span> retained with an exercise window, or forfeited, per the scheme.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Unvested options:</span> forfeited, with any board-approved exceptions handled.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> exit ESOP handling from Rs 14,999 (Exl GST and Govt. Charges).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on ESOP administration and exits</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP on Employee Exit%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20on%20Employee%20Exit%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20on%20Employee%20Exit%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP on Employee Exit',
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
    'ctaText'    => 'Employers across India trust Patron Accounting to classify leavers, run the exercise window and settle ESOP exits cleanly alongside payroll.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">Good vs Bad Leaver</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Unvested and Buyback</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">The Exercise Window</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Exit Tax</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">GL vs BL Table</button>
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
                    <p><strong>&#128204; TL;DR - ESOP on Employee Exit Services at a Glance</strong></p>
                    <p>On exit, a good leaver keeps vested options with an exercise window, while a bad leaver forfeits options; unvested options are generally forfeited either way. We classify, apply the scheme and handle the buyback and filings.</p>
                </div>
                <p>When an employee leaves, their ESOPs do not just disappear, and getting the treatment wrong can mean a dispute or a lost claim. Patron Accounting handles ESOP treatment on exit: good-leaver versus bad-leaver classification, what happens to vested and unvested options, the exercise window, and any buyback, all in line with your scheme and Indian law.</p>
                <p>Most ESOP disputes do not start over the idea of options; they start at exit, when nobody reads the scheme's leaver and exercise clauses carefully. Whether you are an employer processing a separation or an HR team running attrition, getting the classification and the window right, and documenting them, is what keeps an exit clean.</p>
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
                <h2 class="section-title">Good Leaver vs Bad Leaver</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Almost every ESOP scheme splits departing employees into two categories, and the category decides what happens to their options. The line is drawn by how, and why, the person leaves.</p>
                    <p><strong>Good leaver:</strong> an employee leaving under fair circumstances, such as resignation with notice, mutual separation, layoff, retirement, disability or health, who typically retains vested options with a defined exercise window.</p>
                    <p><strong>Bad leaver:</strong> an employee leaving under circumstances that harm the company, such as termination for cause, misconduct, breach of confidentiality or joining a competitor, who typically forfeits unvested options and, in some plans, unexercised vested options too.</p>
                    <p><strong>A red flag to check:</strong> some schemes define even a normal voluntary resignation as a bad-leaver event, which can strip vested options from someone who simply moves on. A fair scheme treats ordinary resignation as a good-leaver exit. We review the scheme so the classification is both correct and defensible.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP on Employee Exit:</strong></p>
                    <ul>
                        <li><strong>Vested options:</strong> options the employee has already earned under the vesting schedule.</li>
                        <li><strong>Unvested options:</strong> options not yet earned, generally forfeited on exit.</li>
                        <li><strong>Exercise window:</strong> the post-termination period to exercise vested options before they lapse.</li>
                        <li><strong>Forfeiture:</strong> the loss of options on exit, only where the scheme permits and it is defensible.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP on Employee Exit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Handled per</span>
                        <strong>Scheme and Indian Law</strong>
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
            <h2 class="section-title">Unvested Options and Buyback</h2>
            <div class="content-text">
                
                <p><strong>Unvested options:</strong> unvested options are generally forfeited on exit, for both good and bad leavers, because they were never earned. Some schemes allow the board to accelerate or pro-rate a portion for a good leaver, but this is discretionary, not automatic.</p>
                <p><strong>Buyback on exit:</strong> a company may buy back a leaver's vested options or shares for cash, which both gives the employee liquidity and cleans up the cap table. A good leaver is typically bought out at fair value, while a bad leaver may face a discounted price where the scheme allows. We structure the buyback, the valuation and the paperwork.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The Exercise Window</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>30 days</td><td>Punitive; little time to arrange exercise cost and tax.</td></tr>
                        <tr><td>90 days</td><td>The common standard in Indian startups.</td></tr>
                        <tr><td>1 year or more</td><td>Employee-friendly; best-practice schemes.</td></tr>
                        <tr><td>The exercise-cost trap</td><td>Exercising means paying the exercise price plus the perquisite tax, in cash, within the window. Without a liquidity event or buyback, many employees cannot fund it and walk away from vested options they earned.</td></tr>

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
            <h2 class="section-title">How the Exit Is Processed</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From reviewing the grant to settling and filing, we move in step with the exit so the ESOP treatment is settled when the employee leaves.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Review the grant</h3>
        <p class="step-description">We read the scheme and grant letter and pull the vesting and exercise terms.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scheme + grant</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Vesting terms</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="10" width="60" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="26" x2="78" y2="26" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="42" y1="40" x2="72" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="42" y1="52" x2="72" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div>
            <span class="illustration-label">Grant Reviewed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Classify the leaver</h3>
        <p class="step-description">We determine good leaver or bad leaver on the facts of the exit, and document it.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>On the facts</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documented</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 16 v22" stroke="#14365F" stroke-width="2"/><path d="M60 38 L36 64 M60 38 L84 64" stroke="#14365F" stroke-width="2"/><circle cx="36" cy="70" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="84" cy="70" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/></svg></div>
            <span class="illustration-label">Leaver Classified</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Calculate options</h3>
        <p class="step-description">We work out vested and unvested options and what each leaver type retains.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Vested vs unvested</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per leaver type</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="38" y="14" width="44" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="46" y="22" width="28" height="14" rx="3" fill="#fff" stroke="#14365F" stroke-width="1"/><rect x="46" y="44" width="9" height="9" rx="2" fill="#E8712C"/><rect x="57" y="44" width="9" height="9" rx="2" fill="#D4DCE8"/><rect x="68" y="44" width="9" height="9" rx="2" fill="#F5A623"/></svg></div>
            <span class="illustration-label">Options Calculated</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Run the window or buyback</h3>
        <p class="step-description">We administer the exercise window, or structure a buyback, with the tax.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exercise window</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Buyback option</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 32 v18 l12 8" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" fill="none"/></svg></div>
            <span class="illustration-label">Window Run</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Settle and file</h3>
        <p class="step-description">We fold it into the full-and-final settlement and complete the SH-6 register and filings.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FnF settlement</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-6 register</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="60" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="30" x2="78" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="60" cy="62" r="13" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 62l5 5 9-9" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Settled and Filed</span>
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
            <h2 class="section-title">How an Exit Exercise Is Taxed in India</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>At vesting:</strong> no tax; vesting alone is not a taxable event.</li>
                    <li><strong>On exercise:</strong> the spread between fair market value and the exercise price is taxed as a salary perquisite.</li>
                    <li><strong>On sale or buyback:</strong> the gain over the value taxed at exercise is taxed as capital gains.</li>
                    <li><strong>The cash crunch:</strong> the perquisite tax falls due on exercise, often before any liquidity, which is the core exit problem.</li>
                </ul>
                <p>For the employee's filing, see our <a href="/itr-for-capital-gains">ITR for capital gains</a> and <a href="/itr-for-salary">ITR for salary</a> services.</p>

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
                        <tr><td>Disputed good-leaver or bad-leaver status</td><td>Risk of a costly dispute</td><td>Apply the scheme to the facts and document a defensible basis.</td></tr>
                        <tr><td>Employee cannot fund exercise in the window</td><td>Earned vested options lost</td><td>Advise on the window, tax and a possible buyback for liquidity.</td></tr>
                        <tr><td>Resignation wrongly treated as bad leaver</td><td>Unfair loss of vested options</td><td>Check the clause and correct an unfair classification.</td></tr>
                        <tr><td>Vested options removed without authority</td><td>Legally indefensible forfeiture</td><td>Confirm what the scheme actually permits before any forfeiture.</td></tr>

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
            <h2 class="section-title">Exit ESOP Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 14,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Scheme review, leaver classification and exercise-window administration for an exit</td></tr>
                        <tr><td>Buyback, valuation and share transfer</td><td>Scoped on top</td></tr>
                        <tr><td>Filings</td><td>Billed at actuals</td></tr>
                        <tr><td>Ongoing attrition</td><td>Exits handled on an ongoing basis alongside payroll and full-and-final settlement</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP on Employee Exit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20on%20Employee%20Exit%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Single exit: scheme review, classification, exercise-window administration</td><td>3 to 7 working days, in step with notice and full-and-final settlement</td></tr>
                        <tr><td>Buyback with valuation and share transfer</td><td>Adds 2 to 3 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>We move in time with the exit so the ESOP treatment is settled when the employee leaves, not months later.</strong> The exercise window starts running immediately, so the classification and communication must happen at separation.</p>

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
            <h2 class="section-title">Why Handle It With a Specialist</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
            <h3 class="feature-title">Defensible classification</h3>
            <p class="feature-text">A correct, defensible leaver classification that holds up if challenged.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <h3 class="feature-title">Window and tax explained</h3>
            <p class="feature-text">The exercise window and tax explained clearly to the departing employee.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
            <h3 class="feature-title">Clean buyback</h3>
            <p class="feature-text">A clean buyback and settlement that closes the equity cleanly.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 00-6 0v4M5 9h14l1 12H4L5 9z"/></svg></div>
            <h3 class="feature-title">Fewer disputes</h3>
            <p class="feature-text">Fewer disputes, because the treatment follows the scheme and is documented.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employers Managing Exits</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years on ESOP administration, exits and full-and-final settlements for Indian companies.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Good Leaver vs Bad Leaver at a Glance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Good leaver</th><th>Bad leaver</th></tr></thead>
                    <tbody>
                        <tr><td>Typical cause</td><td>Resignation with notice, layoff, retirement, health</td><td>Termination for cause, misconduct, breach, competing</td></tr>
                        <tr><td>Vested options</td><td>Retained, with an exercise window</td><td>May be forfeited or bought back at a discount</td></tr>
                        <tr><td>Unvested options</td><td>Forfeited, sometimes partly accelerated</td><td>Forfeited</td></tr>
                        <tr><td>Exercise price</td><td>Unchanged</td><td>Sometimes adjusted upward</td></tr>

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
                
                <p>This scenario builds on our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>, and the exit usually runs alongside our <a href="/payroll-services">payroll services</a> and the full-and-final settlement.</p>
                <p>A buyback runs through <a href="/transfer-of-shares">transfer of shares</a>, and for the employee's tax, see <a href="/itr-for-capital-gains">ITR for capital gains</a>, <a href="/itr-for-salary">ITR for salary</a> and <a href="/itr-for-esop-employees">ITR for ESOP employees</a>. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Tax Framework</h2>
            <div class="content-text">
                
                <p><strong>Leaver provisions:</strong> good-leaver and bad-leaver treatment is set by the ESOP scheme and the grant letter; forfeiture of vested options must be expressly permitted by the scheme and be legally defensible, not applied arbitrarily.</p>
                <p><strong>Exercise window:</strong> vested options must be exercised within the post-termination window in the scheme, after which they lapse; the company must give the leaver the means and information to exercise.</p>
                <p><strong>Perquisite tax:</strong> on exercise, the spread between fair market value and the exercise price is a salary perquisite under Section 17(2)(vi) of the Income-tax Act, with fair market value under Rule 3 and the related valuation rules.</p>
                <p><strong>Capital gains and buyback:</strong> a later sale or buyback of the shares is taxed as capital gains over the perquisite-taxed value, with the rate driven by the holding period.</p>
                <p>Authoritative sources: the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (Section 17(2)(vi), Rule 3 perquisite, capital gains), the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Section 62, SH-6 register), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Rules</a>, and the <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">Income-tax Act and Rules</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on good leaver vs bad leaver, the exercise window, forfeiture and buyback on an ESOP exit.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP on Employee Exit',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the difference between a good leaver and a bad leaver?</h3>
                        <div class="faq-expanded__a"><p>A good leaver is an employee who leaves under fair circumstances, such as resignation with notice, a layoff, retirement or health reasons, and typically retains their vested options with a defined window to exercise them. A bad leaver is one who leaves under circumstances that harm the company, such as termination for cause, misconduct or joining a competitor, and typically forfeits unvested options and, in some schemes, unexercised vested options too. The scheme sets the exact line.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What happens to my ESOPs when I resign?</h3>
                        <div class="faq-expanded__a"><p>Your unvested options are generally forfeited, because they were not yet earned. Your vested options depend on your leaver classification: as a good leaver, you usually keep them and must exercise within the post-termination window, often 30 to 90 days; as a bad leaver, you may lose them or face a discounted buyback. Check your grant letter for the leaver definition, the exercise window and whether resignation counts as a good-leaver event.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Good leaver aur bad leaver mein kya farq hai?</h3>
                        <div class="faq-expanded__a"><p>Good leaver wo hota hai jo fair tarah se company chhodta hai, jaise notice ke saath resignation, layoff, ya retirement, aur uske vested options reh jaate hain ek exercise window ke saath. Bad leaver wo hai jise cause pe terminate kiya gaya ya jisne misconduct ya competitor join kiya; wo unvested aur kabhi-kabhi vested options bhi kho deta hai. Exact rule scheme mein likha hota hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long is the ESOP exercise window after leaving?</h3>
                        <div class="faq-expanded__a"><p>In most Indian startup ESOP plans, the post-termination exercise window is 30 to 90 days, within which a good leaver must exercise vested options or lose them. A 30-day window is considered punitive, 90 days is the common standard, and a year or more is employee-friendly. Crucially, exercising means paying the exercise price and the perquisite tax in cash within that window, so the length of the window directly affects whether an employee can realistically keep their equity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a company take away vested options?</h3>
                        <div class="faq-expanded__a"><p>Only if the scheme expressly allows it and the action is legally defensible. Vested options are an earned right, and a company cannot simply erase them; a bad-leaver clause can forfeit them only where the scheme provides for it and the facts support that classification. Bad-leaver labelling cannot be used to punish ordinary resignations. This is why the scheme wording and the exit documentation matter so much, and why disputes often turn on them.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is there a buyback when an employee exits?</h3>
                        <div class="faq-expanded__a"><p>Sometimes. A company may buy back a leaver's vested options or shares for cash, giving the employee liquidity and tidying the cap table. A good leaver is usually bought out at fair value, while a bad leaver may face a discounted price where the scheme permits. A buyback is often the only practical way for a departing employee to realise value before an IPO or acquisition, and we structure the price, transfer and tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Resignation bad leaver count hota hai kya?</h3>
                        <div class="faq-expanded__a"><p>Yeh scheme pe depend karta hai. Achhi scheme mein normal resignation good-leaver event hota hai. Lekin kuch schemes voluntary resignation ko bhi bad-leaver maante hain, jo ek red flag hai, kyunki isse aap apne earned vested options bhi kho sakte hain. Isliye grant letter mein leaver definition zaroor check karni chahiye. Hum yeh review karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How is the exit handled in the full-and-final settlement?</h3>
                        <div class="faq-expanded__a"><p>The ESOP treatment is part of the overall exit. Once the leaver is classified and the vested options, exercise window and any buyback are settled, the outcome, including any perquisite tax to be deducted, is folded into the employee's full-and-final settlement alongside salary, leave encashment and other dues. Handling the ESOP and the full-and-final settlement together keeps the exit clean and the tax correct, which is how we run it.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Good leaver?</strong> Keeps vested options plus a window.</li>
                    <li><strong>Bad leaver?</strong> Forfeits options, maybe vested too.</li>
                    <li><strong>Unvested?</strong> Generally forfeited for both.</li>
                    <li><strong>Window?</strong> Usually 30 to 90 days.</li>
                    <li><strong>Tax?</strong> Perquisite on exercise, capital gains on sale.</li>
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
                
                <p>At an exit, the exercise window starts running immediately, and a good leaver who misses it loses earned options for good. The classification and the communication need to happen at separation, not weeks later, so the employee has real time to act and the employer has a documented, defensible record. Handling the ESOP at the same time as the full-and-final settlement is what keeps the whole exit clean and dispute-free.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Handle Every ESOP Exit Cleanly</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">An employee exit is where ESOPs are most often mishandled and most often disputed: the good-leaver or bad-leaver line, the fate of vested and unvested options, the exercise window and the buyback all have to be applied correctly and documented.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of ESOP and payroll experience, classifies the leaver, administers the window or buyback, computes the tax and folds it into the full-and-final settlement, so every exit is clean for both sides.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20on%20Employee%20Exit%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP on Employee Exit%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20on%20Employee%20Exit%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESOP Exit Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote handling of leaver classification, exercise windows and buyback for your exits.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We serve employers and HR teams nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The leaver classification, exercise-window administration and buyback is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for ESOP exits</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/transfer-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Transfer of Shares</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-esop-employees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for ESOP Employees</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every six months for changes to ESOP perquisite or capital-gains taxation, Section 17(2)(vi) or Rule 3 valuation, buyback rules, and notable Indian case law on leaver-provision and forfeiture disputes (Tier 2 freshness).</p>
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
