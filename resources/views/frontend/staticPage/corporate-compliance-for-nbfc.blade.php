
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
    <title>Corporate Compliance for NBFC, 2026 | Patron Accounting</title>
    <meta name="description" content="Annual compliance for an NBFC, the RBI returns and Net Owned Fund overlay on top of the ROC stack, run by a specialist CA and CS team. From INR 99,999 a year.">
    <link rel="canonical" href="/corporate-compliance-for-nbfc">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Corporate Compliance for NBFC, 2026 | Patron Accounting">
    <meta property="og:description" content="Annual compliance for an NBFC, the RBI returns and Net Owned Fund overlay on top of the ROC stack, run by a specialist CA and CS team. From INR 99,999 a year.">
    <meta property="og:url" content="/corporate-compliance-for-nbfc">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Corporate Compliance for NBFC, 2026 | Patron Accounting">
    <meta name="twitter:description" content="Annual compliance for an NBFC, the RBI returns and Net Owned Fund overlay on top of the ROC stack, run by a specialist CA and CS team. From INR 99,999 a year.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-nbfc/#service",
        "name": "Corporate Compliance for an NBFC",
        "description": "NBFC compliance services from Patron Accounting LLP cover the complete corporate compliance of a non-banking financial company, combining the full Companies Act, 2013 stack (AOC-4, MGT-7 or 7A, statutory audit, AGM, board meetings, ADT-1 and DIR-3 KYC) with the heavy RBI overlay, including the Certificate of Registration under Section 45-IA of the RBI Act, 1934, the Scale Based Regulation layer norms, the Net Owned Fund certified annually by the statutory auditor, the capital adequacy and prudential norms, the Fair Practice Code and KYC and AML policies, and the periodic DNBS and NBS returns filed on the COSMOS and XBRL systems, run as one integrated specialist engagement scoped to the NBFC layer and activity.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/corporate-compliance-for-nbfc" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Non-banking financial company", "sameAs": "https://en.wikipedia.org/wiki/Non-bank_financial_institution" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "NBFC Compliance Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "NBFC Compliance Retainer (annual, starting)",
                    "priceCurrency": "INR",
                    "price": "99999",
                    "description": "Premium annual NBFC compliance retainer covering the company compliance (AOC-4, MGT-7, audit coordination, ADT-1 and KYC) with the RBI overlay of Net Owned Fund tracking and certification support, the DNBS and NBS returns on COSMOS and XBRL, and the Fair Practice Code, KYC and AML policies, exclusive of GST and government charges. This is a starting retainer; the statutory audit and certification fees, the prudential and policy work specific to the Scale Based Regulation layer, and any remediation of past RBI filings are scoped per engagement."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-nbfc/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Company Compliance", "item": "https://www.patronaccounting.com/corporate-compliance-services" },
            { "@type": "ListItem", "position": 3, "name": "NBFC Compliance", "item": "https://www.patronaccounting.com/corporate-compliance-for-nbfc" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-nbfc/#faq",
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-04T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What compliance does an NBFC have to follow?",
                "acceptedAnswer": { "@type": "Answer", "text": "An NBFC follows two layers of compliance. As a company it holds board meetings and an AGM, has its accounts audited, and files AOC-4, MGT-7 or MGT-7A, ADT-1 and DIR-3 KYC, with its income tax return. As an RBI-regulated financial institution it holds a Certificate of Registration under Section 45-IA, falls within a Scale Based Regulation layer, maintains its Net Owned Fund and capital adequacy, follows the Fair Practice Code and KYC and AML norms, and files periodic returns to the RBI through COSMOS and XBRL. The RBI overlay is the heavier part." }
            },
            {
                "@type": "Question",
                "name": "What is the Scale Based Regulation framework?",
                "acceptedAnswer": { "@type": "Answer", "text": "Scale Based Regulation is the RBI's framework for regulating NBFCs in proportion to their size, activity and risk. It places NBFCs into layers, the Base Layer for smaller non-deposit-taking NBFCs, the Middle Layer, the Upper Layer for the largest and most systemically significant NBFCs identified by the RBI, and a Top Layer reserved for any pushed there on supervisory concerns. The higher the layer, the stricter the capital, governance, exposure and disclosure norms, so an NBFC's exact obligations depend on the layer it falls in." }
            },
            {
                "@type": "Question",
                "name": "What is Net Owned Fund for an NBFC?",
                "acceptedAnswer": { "@type": "Answer", "text": "Net Owned Fund, or NOF, is the minimum capital an NBFC must maintain to hold its registration. It is computed broadly as the paid-up equity capital and free reserves, reduced by accumulated losses, deferred revenue expenditure and other intangible assets, and the RBI sets a minimum amount that varies by NBFC category, with glide paths where the requirement has been raised. The statutory auditor certifies the NOF each year, and falling below the minimum is one of the most common reasons the RBI cancels an NBFC's Certificate of Registration." }
            },
            {
                "@type": "Question",
                "name": "What returns does an NBFC file with the RBI?",
                "acceptedAnswer": { "@type": "Answer", "text": "An NBFC files periodic returns to the RBI through its online systems, COSMOS and the XBRL platform, with the exact set depending on the NBFC's layer and activity. These principally include the DNBS family of returns covering matters such as financial position, asset-liability management, capital adequacy and asset classification, the NBS returns including the quarterly return for deposit-taking NBFCs, and an annual return supported by a statutory auditor certificate. The audited returns are generally filed within a month of finalising the accounts, and the schedule is closely monitored." }
            },
            {
                "@type": "Question",
                "name": "Does an NBFC have the same compliance as a normal company?",
                "acceptedAnswer": { "@type": "Answer", "text": "No, it has more. An NBFC is a company, so it carries the full Companies Act compliance, the board meetings, the AGM, the statutory audit and the filing of AOC-4, MGT-7 or 7A, ADT-1 and DIR-3 KYC. On top of that, because it is an RBI-regulated financial institution, it has the entire RBI overlay, the Certificate of Registration, the Scale Based Regulation layer norms, the Net Owned Fund, the capital adequacy and prudential rules, the Fair Practice Code and the periodic returns. This makes its compliance load substantially heavier." }
            },
            {
                "@type": "Question",
                "name": "What happens if an NBFC does not stay compliant?",
                "acceptedAnswer": { "@type": "Answer", "text": "The consequences are severe because the RBI has low tolerance for NBFC non-compliance. Falling below the Net Owned Fund, missing the periodic DNBS or XBRL returns, breaching capital adequacy, or violating the Fair Practice Code or KYC and AML norms can lead to penalties, supervisory action and, in serious cases, cancellation of the Certificate of Registration, without which the NBFC cannot carry on its business. Each year a significant number of NBFCs are removed from the RBI registry for such failures, so disciplined compliance is essential." }
            },
            {
                "@type": "Question",
                "name": "Does a foreign-owned NBFC have extra compliance?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. An NBFC that has foreign investment carries the FEMA reporting overlay in addition to its RBI prudential compliance and its company compliance, so it also reports its foreign investment, filing Form FC-GPR on the issue of shares to a non-resident and the annual FLA return, alongside meeting the sectoral conditions that apply to foreign investment in the NBFC sector. We coordinate the FEMA reporting with the RBI prudential returns and the ROC filings so that the company, RBI and FEMA records stay consistent." }
            },
            {
                "@type": "Question",
                "name": "Can you handle both the RBI and ROC compliance for an NBFC?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. Our NBFC compliance retainer runs both stacks as one engagement, the company side of AOC-4, MGT-7, the statutory audit, ADT-1 and KYC, and the RBI side of the Net Owned Fund tracking and certification, the capital and prudential norms for your Scale Based Regulation layer, the Fair Practice Code, KYC and AML policies, and the DNBS and NBS returns on COSMOS and XBRL. We keep the company and RBI records consistent and track every deadline, with the scope and fee confirmed for your NBFC's layer and activity from a starting retainer of 99,999 rupees a year." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/corporate-compliance-for-nbfc",
        "name": "Corporate Compliance for an NBFC",
        "description": "Annual compliance for an NBFC, the RBI returns and Net Owned Fund overlay on top of the ROC stack, run by a specialist CA and CS team. From INR 99,999 a year.",
        "url": "https://www.patronaccounting.com/corporate-compliance-for-nbfc",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com" },
        "about": { "@id": "https://www.patronaccounting.com/corporate-compliance-for-nbfc/#service" },
        "datePublished": "2026-06-03T08:00:00+05:30",
        "dateModified": "2026-06-04T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/corporate-compliance-for-nbfc/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How NBFC Compliance Runs Through the Year",
        "description": "How a non-banking financial company runs its combined company and RBI compliance across the year, from the Net Owned Fund to the periodic returns.",
        "totalTime": "P365D",
        "step": [
            { "@type": "HowToStep", "name": "Map both stacks", "text": "Identify your Scale Based Regulation layer and build one calendar for the company and RBI obligations." },
            { "@type": "HowToStep", "name": "Maintain the capital", "text": "Track the Net Owned Fund and prudential ratios and arrange the auditor's certification." },
            { "@type": "HowToStep", "name": "Run the company cycle", "text": "Coordinate the audit and file AOC-4, MGT-7, ADT-1 and KYC after the AGM." },
            { "@type": "HowToStep", "name": "File the RBI returns", "text": "Prepare and file the DNBS and NBS returns on COSMOS and XBRL on schedule." },
            { "@type": "HowToStep", "name": "Keep policies current", "text": "Maintain the Fair Practice Code, KYC and AML and governance policies as the RBI updates them." },
            { "@type": "HowToStep", "name": "Handle events", "text": "File the event-based and ad hoc RBI and ROC filings as they arise." }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "https://www.patronaccounting.com/#organization-rating",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com",
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "850", "bestRating": "5", "worstRating": "1" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "DefinedTermSet",
        "name": "NBFC Compliance Key Terms",
        "definedTerm": [
            { "@type": "DefinedTerm", "name": "CoR", "description": "The Certificate of Registration from the RBI under Section 45-IA, without which an NBFC cannot operate." },
            { "@type": "DefinedTerm", "name": "Scale Based Regulation", "description": "The RBI framework placing NBFCs in layers by size, activity and risk." },
            { "@type": "DefinedTerm", "name": "Net Owned Fund", "description": "The minimum capital an NBFC must maintain, certified by its auditor." },
            { "@type": "DefinedTerm", "name": "CRAR", "description": "The capital to risk-weighted assets ratio, a core prudential measure." },
            { "@type": "DefinedTerm", "name": "DNBS and NBS returns", "description": "The families of periodic returns NBFCs file to the RBI." }
        ]
    }
    </script>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-3.css') }}?v=1">
@endpush

@section('content')
<main>

<!-- BREADCRUMB -->

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
                        Corporate Compliance for an NBFC
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Service:</span> End-to-end compliance for an NBFC, the RBI returns and the company filings together.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> NBFC compliance starting from INR 99,999 per year (Exl GST and Govt. Charges).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Covers:</span> AOC-4 and MGT-7, the audit, plus the RBI overlay of NOF, the SBR layer and the returns.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>For:</span> RBI-registered NBFCs that want their company and RBI compliance run as one engagement.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ Businesses  |  4.9 Google Rating  |  Offices in Pune, Mumbai, Delhi and Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NBFC Compliance%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20NBFC Compliance%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20run%20an%20RBI-registered%20NBFC%20and%20need%20the%20RBI%20and%20company%20compliance%20handled.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'NBFC Compliance',
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
            <p>Hear how teams across industries use Patron to save time, cut costs, &amp; stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ">S</div>
                        <div>
                            <div class="testi-name">Subhendu Mishra</div>
                            <div class="testi-role">2 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar blue">R</div>
                        <div>
                            <div class="testi-name">Rajib Dutta</div>
                            <div class="testi-role">3 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar teal">N</div>
                        <div>
                            <div class="testi-name">Nishikant Gurav</div>
                            <div class="testi-role">1 month ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar purple">N</div>
                        <div>
                            <div class="testi-name">Nikhil Nimbhorkar</div>
                            <div class="testi-role">4 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ">S</div>
                        <div>
                            <div class="testi-name">Sameer Mehta</div>
                            <div class="testi-role">2 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar blue">P</div>
                        <div>
                            <div class="testi-name">Preeti Singh Rathor</div>
                            <div class="testi-role">3 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar teal">A</div>
                        <div>
                            <div class="testi-name">Anita Gaur</div>
                            <div class="testi-role">5 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar purple">P</div>
                        <div>
                            <div class="testi-name">Pankaj Arvikar</div>
                            <div class="testi-role">1 month ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg">
                        <source src="/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div>
                    </div>
                    <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar"><img src="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal"></div>
                    <div>
                        <div class="testi-name">Sunny Ashpal</div>
                        <div class="testi-role">Director - Demandify Media</div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg">
                        <source src="/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div>
                    </div>
                    <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar"><img src="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava"></div>
                    <div>
                        <div class="testi-name">Anjanay Srivastava</div>
                        <div class="testi-role">Founder - Hunarsource Consulting</div>
                    </div>
                </div>
            </div>
        </div>
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
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Two Stacks</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Retainer Covers</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Through the Year</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Information Needed</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Compliance Year</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Why a Retainer</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">vs Ordinary Co.</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NBFC Compliance: Overview and Quick Summary</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NBFC Compliance Services at a Glance</strong></p>
                    <p>An NBFC carries two layers of compliance. As a company it files AOC-4, MGT-7 or 7A, holds board meetings and an AGM, and is audited. As an RBI-regulated financial institution it holds a Certificate of Registration under Section 45-IA, falls within a Scale Based Regulation layer, must maintain its Net Owned Fund certified by its auditor, follows prudential norms on capital and asset classification, and files periodic returns to the RBI through the COSMOS and XBRL systems. The RBI overlay is heavy, and lapses can cost the registration itself.</p>
                </div>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Item</th><th>What it means</th></tr></thead>
                    <tbody>
                        <tr><td><strong>CoR, Section 45-IA</strong></td><td>RBI registration to operate as an NBFC</td></tr>
                        <tr><td><strong>Scale Based Regulation</strong></td><td>Base, Middle, Upper, Top layers by size and risk</td></tr>
                        <tr><td><strong>Net Owned Fund</strong></td><td>Minimum capital, auditor-certified each year</td></tr>
                        <tr><td><strong>RBI returns</strong></td><td>DNBS and NBS families on COSMOS and XBRL</td></tr>
                        <tr><td><strong>Prudential norms</strong></td><td>CRAR, asset classification, Fair Practice Code</td></tr>
                        <tr><td><strong>ROC stack</strong></td><td>AOC-4, MGT-7, audit, KYC, as a company</td></tr>
                        <tr><td><strong>Cost</strong></td><td>From INR 99,999 per year</td></tr>
                    </tbody>
                </table>
                </div>
                <p>This page is the complete picture of corporate compliance for an NBFC, the RBI overlay on top of the company stack that makes it a premium, specialist engagement, and it routes you to the component services. Because the obligations are extensive and depend on the NBFC’s layer and activity, the work is scoped to your entity.</p>
                <p>The underlying company filings run through our <a href="https://www.patronaccounting.com/private-limited-company-compliance">private limited company compliance service</a>, and the audit, Net Owned Fund and return certifications through our <a href="https://www.patronaccounting.com/statutory-audit">statutory audit service</a>.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is NBFC Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>NBFC compliance is the full set of obligations a non-banking financial company must meet as both a company and an RBI-regulated financial institution. A non-banking financial company is one whose principal business is financial, mainly holding financial assets and earning financial income, and which is registered with and supervised by the Reserve Bank of India.</p><p>The defining feature is the RBI overlay. On top of the ordinary company compliance, an NBFC must keep its Certificate of Registration in good standing, maintain the capital and prudential standards the RBI sets for its layer, and report regularly to the RBI, all under close and increasingly strict supervision, with the registration itself at stake if compliance slips.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NBFC Compliance:</strong></p>
                    <ul><li><strong>CoR:</strong> The Certificate of Registration from the RBI under Section 45-IA, without which an NBFC cannot operate.</li><li><strong>Scale Based Regulation:</strong> The RBI framework placing NBFCs in layers by size, activity and risk.</li><li><strong>Net Owned Fund:</strong> The minimum capital an NBFC must maintain, certified by its auditor.</li><li><strong>CRAR:</strong> The capital to risk-weighted assets ratio, a core prudential measure.</li><li><strong>DNBS and NBS returns:</strong> The families of periodic returns NBFCs file to the RBI.</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NBFC Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>RBI Registration</span>
                        <strong>45-IA</strong>
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
            <h2 class="section-title">The Two Compliance Stacks</h2>
            <div class="content-text">
                
                <p>NBFC compliance is best seen as two stacks running together.</p><h3>The Company Stack</h3><p>As an Indian company, the NBFC holds its board meetings and AGM, has its accounts audited, and files AOC-4, MGT-7 or MGT-7A, ADT-1 and DIR-3 KYC, alongside its income tax return, like any company.</p><h3>The RBI Stack</h3><p>As an RBI-regulated financial institution, it keeps its Certificate of Registration in good standing, maintains its Net Owned Fund and prudential ratios for its Scale Based Regulation layer, follows the Fair Practice Code and KYC and AML norms, and files its periodic returns to the RBI.</p><p>The two stacks connect, the audited accounts and the auditor’s certificates feed the RBI returns and the NOF certification, so they are run together, not in isolation.</p><h3>The RBI Compliance Map</h3><p>These are the core RBI-side obligations of an NBFC, kept high-level as the detail depends on the layer and activity.</p><ul><li><strong>Certificate of Registration:</strong> Held under Section 45-IA, with Fit and Proper directors and the principal business criteria maintained.</li><li><strong>Scale Based Regulation layer:</strong> Base, Middle, Upper or Top, determining how strict the capital, governance and exposure rules are.</li><li><strong>Net Owned Fund:</strong> Maintained at or above the minimum for the category, certified annually by the statutory auditor.</li><li><strong>Periodic returns:</strong> The DNBS and NBS return families and the annual auditor certificate, filed on COSMOS and XBRL.</li><li><strong>Prudential and conduct norms:</strong> Capital adequacy, asset classification and provisioning, the Fair Practice Code, and KYC and AML.</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What the NBFC Retainer Covers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>ROC Stack</strong></td><td>AOC-4, MGT-7 and the full ROC stack for the company.</td></tr><tr><td><strong>Audit and ITR</strong></td><td>Statutory audit coordination and the income tax return.</td></tr><tr><td><strong>Net Owned Fund</strong></td><td>Net Owned Fund tracking and the annual auditor certification support.</td></tr><tr><td><strong>RBI Returns</strong></td><td>The DNBS and NBS return families filed on the COSMOS and XBRL systems.</td></tr><tr><td><strong>FPC, KYC and AML</strong></td><td>The Fair Practice Code, KYC and AML policies kept aligned to the Master Directions.</td></tr><tr><td><strong>Board and Event Filings</strong></td><td>Board support, statutory registers and the event-based RBI and ROC filings.</td></tr>

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
            <h2 class="section-title">How NBFC Compliance Runs Through the Year</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How Patron runs the company and RBI stacks together on one calendar, from the Net Owned Fund to the periodic returns.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Map Both Stacks</h3>
        <p class="step-description">We identify your Scale Based Regulation layer and build one calendar for the company and RBI obligations.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SBR layer</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>One calendar</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22" y="24" width="34" height="52" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="64" y="24" width="34" height="52" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="39" y="52" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ROC</text><text x="81" y="52" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RBI</text></svg></div>
            <span class="illustration-label">Map</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Maintain the Capital</h3>
        <p class="step-description">We track the Net Owned Fund and prudential ratios and arrange the auditor’s certification.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NOF tracked</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auditor cert</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="40" width="60" height="40" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M40 40V32a20 20 0 0140 0v8" fill="none" stroke="#14365F" stroke-width="2"/><text x="60" y="66" font-size="14" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">&#8377;</text></svg></div>
            <span class="illustration-label">Capital</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Run the Company Cycle</h3>
        <p class="step-description">We coordinate the audit and file AOC-4, MGT-7, ADT-1 and KYC after the AGM.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOC-4 / MGT-7</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Post-AGM</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="28" width="52" height="52" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="44" y1="42" x2="76" y2="42" stroke="#14365F" stroke-width="2" opacity="0.35"/><line x1="44" y1="54" x2="76" y2="54" stroke="#14365F" stroke-width="2" opacity="0.35"/><path d="M44 66l6 6 12-12" stroke="#E8712C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Company</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File the RBI Returns</h3>
        <p class="step-description">We prepare and file the DNBS and NBS returns on COSMOS and XBRL on schedule.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DNBS / NBS</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>On schedule</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="28" y="18" width="64" height="64" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DNBS</text><text x="60" y="60" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">COSMOS</text></svg></div>
            <span class="illustration-label">Returns</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Keep Policies Current</h3>
        <p class="step-description">We maintain the Fair Practice Code, KYC and AML and governance policies as the RBI updates them.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FPC current</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC / AML</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 18l28 10v18c0 16-12 26-28 32-16-6-28-16-28-32V28z" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/><path d="M48 50l8 8 18-18" stroke="#E8712C" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Policies</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Handle Events</h3>
        <p class="step-description">We file the event-based and ad hoc RBI and ROC filings as they arise.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RBI events</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC events</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="20" width="60" height="60" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M42 40h36M42 52h28" stroke="#14365F" stroke-width="2" opacity="0.4" stroke-linecap="round"/><circle cx="78" cy="64" r="10" fill="#E8712C"/><path d="M78 60v8M74 64h8" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Events</span>
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
            <h2 class="section-title">Information Required for the Engagement</h2>
            <div class="content-text">
                
                <ul><li>Certificate of Registration and NBFC category.</li><li>Scale Based Regulation layer and asset size.</li><li>Audited financial statements and books.</li><li>Capital adequacy and NOF computation.</li><li>Loan portfolio and asset classification data.</li><li>Existing policies, FPC, KYC and AML.</li></ul><p><strong>Want a scoped proposal?</strong> Share your CoR and layer and we will map the obligations and quote the engagement.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common NBFC Compliance Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Falling below the Net Owned Fund</strong></td><td>Dropping below the NOF minimum is a leading reason for CoR cancellation. We track the NOF and flag any shortfall early.</td></tr><tr><td><strong>Missing the RBI returns</strong></td><td>Missed DNBS or XBRL returns draw RBI action quickly. We diarise and file every periodic return on time.</td></tr><tr><td><strong>Weak Fair Practice or KYC compliance</strong></td><td>Lending and conduct breaches, or weak KYC and AML, invite penalties. We keep the policies and practice aligned with the Master Directions.</td></tr><tr><td><strong>Running RBI and ROC separately</strong></td><td>Treating the company and RBI sides as unconnected creates gaps. We run both stacks as one engagement.</td></tr>

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
            <h2 class="section-title">NBFC Compliance Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (starting retainer)</td><td class="table-amount">Starting from INR 99,999 per year (Exl GST and Govt. Charges)</td></tr><tr><td>What drives the scope</td><td class="table-amount">The Scale Based Regulation layer, the NBFC category and activity, and the volume of returns</td></tr><tr><td>Statutory audit and certification fees</td><td class="table-amount">Confirmed as part of the engagement scope</td></tr><tr><td>Prudential and policy work, past-filing remediation</td><td class="table-amount">Confirmed as part of the engagement scope</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">The statutory audit and certification fees, the prudential and policy work specific to your layer, and any remediation of past RBI filings are confirmed as part of the engagement scope, since the workload depends on your Scale Based Regulation layer, your NBFC category and activity, and the volume of returns. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NBFC Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20a%20scoped%20NBFC%20compliance%20proposal%2C%20RBI%20and%20ROC.%20Please%20share%20the%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The NBFC Compliance Year</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>RBI, periodic</td><td>DNBS and NBS return families recurring through the year on COSMOS and XBRL</td></tr><tr><td>RBI, after accounts</td><td>Audited returns and the auditor’s NOF certificate, generally within a month of finalisation</td></tr><tr><td>Company, after year end</td><td>AGM within six months; AOC-4 and the annual return after it</td></tr><tr><td>Company, annual</td><td>Director KYC by 30 September and the income tax return in its window</td></tr><tr><td>Both, ongoing</td><td>The audited accounts feed both the RBI returns and the ROC filings, so they are run together</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>An NBFC runs on a dense, year-round calendar across two regulators.</strong> The RBI returns are periodic, with the DNBS and NBS families recurring through the year and the audited returns and the auditor’s NOF certificate due after the accounts are finalised, generally within a month and not later than the year end. The company side follows the usual cycle. Because the two sides overlap and the audited accounts feed both, a single combined calendar is the only reliable way to keep an NBFC compliant.</p>

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
            <h2 class="section-title">Why Use a Specialist NBFC Retainer</h2>
        </div>
        <div class="features-grid"><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18M8 2v4M16 2v4"/></svg></div>
                <h3 class="feature-title">RBI and Company in One Place</h3>
                <p class="feature-text">Both stacks are run together by one team on a single calendar, so the company and RBI sides stay consistent.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 20V10l8-6 8 6v10"/><path d="M9 20v-6h6v6"/></svg></div>
                <h3 class="feature-title">Net Owned Fund Tracked and Certified</h3>
                <p class="feature-text">The Net Owned Fund is tracked through the year and the auditor’s certification is arranged, protecting the registration.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18"/><path d="M8 15h3"/></svg></div>
                <h3 class="feature-title">RBI Returns Filed on Schedule</h3>
                <p class="feature-text">The DNBS and NBS returns are diarised and filed on COSMOS and XBRL on schedule, avoiding RBI action.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg></div>
                <h3 class="feature-title">Policies Aligned to Master Directions</h3>
                <p class="feature-text">The Fair Practice Code, KYC and AML and governance policies are kept aligned to the latest RBI Master Directions.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
                <h3 class="feature-title">Registration Protected</h3>
                <p class="feature-text">Disciplined NOF, returns and conduct compliance protects the Certificate of Registration that the business depends on.</p>
            </article><article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3 class="feature-title">Qualified CA and CS Team</h3>
                <p class="feature-text">Handled by a qualified CA and CS team experienced in the premium, two-regulator NBFC regime.</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Financial Businesses in India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years</strong></p><p>"Patron runs our RBI returns and our ROC filings together, and tracks our Net Owned Fund so we never risk our registration." - Director, NBFC, Mumbai.</p><p>"Their team keeps our Fair Practice Code and KYC aligned with the latest RBI directions, which our board relies on." - Compliance head, NBFC, Delhi.</p><p>Trusted by leading brands including Hyundai, Asian Paints and Bridgestone for accounting and compliance support.</p><p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NBFC Compliance Compared with an Ordinary Company</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>NBFC</th><th>Ordinary Company</th></tr></thead>
                    <tbody>
                        <tr><td>Regulators</td><td>MCA and RBI</td><td>MCA only</td></tr><tr><td>Registration</td><td>CoR under Section 45-IA</td><td>Incorporation only</td></tr><tr><td>Capital norms</td><td>NOF and CRAR</td><td>None specific</td></tr><tr><td>Periodic returns</td><td>DNBS and NBS to RBI</td><td>ROC filings only</td></tr>

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
            <h2 class="section-title">Component Services</h2>
            <div class="content-text">
                
                <p>This hub routes to the services that make up an NBFC compliance engagement.</p><ul><li><a href="https://www.patronaccounting.com/private-limited-company-compliance">Private Limited Company Compliance</a> for the underlying ROC stack.</li><li><a href="https://www.patronaccounting.com/statutory-audit">Statutory Audit</a> for the audit and the NOF and return certifications.</li><li><a href="https://www.patronaccounting.com/director-kyc">Director KYC</a> for the annual director KYC.</li><li><a href="https://www.patronaccounting.com/fdi-compliance">FDI Compliance</a> where the NBFC has foreign investment.</li><li><a href="https://www.patronaccounting.com/fla-returns">FLA Returns</a> for the annual FLA return of a foreign-funded NBFC.</li><li><a href="https://www.patronaccounting.com/compliance-calendar">Compliance Calendar</a> to track the dense NBFC calendar.</li></ul><p>For a related mutual-benefit finance structure that is regulated differently, see our <a href="https://www.patronaccounting.com/nidhi-company-registration">Nidhi company registration service</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Framework</h2>
            <div class="content-text">
                
                <p><strong>Registration and the principal business:</strong> A non-banking financial company is a company whose principal business is financial, broadly where its financial assets and the income from them each exceed half of the total, and it must hold a Certificate of Registration granted by the Reserve Bank of India under Section 45-IA of the Reserve Bank of India Act, 1934, with the RBI applying Fit and Proper criteria to its promoters and directors at registration and on a continuing basis, while a November 2025 RBI direction has introduced a category of NBFCs with no public funds and no customer interface that is exempt from mandatory registration, subject to conditions.</p><p><strong>Scale Based Regulation and capital:</strong> The RBI regulates NBFCs through the Scale Based Regulation framework, which classifies them into the Base, Middle, Upper and Top layers according to size, activity and risk, with the intensity of supervision and the capital, governance and exposure norms increasing up the layers, and every NBFC must maintain a minimum Net Owned Fund, computed broadly as paid-up capital and free reserves less accumulated losses and intangibles and certified by its statutory auditor, along with capital adequacy measured by the CRAR and the prudential norms on asset classification and provisioning.</p><p><strong>Returns and conduct:</strong> An NBFC reports to the RBI through its online systems, COSMOS and the XBRL platform, filing the periodic returns applicable to its layer and activity, principally the DNBS and NBS return families together with the annual statutory auditor certificate, and it must follow the Fair Practice Code and the KYC and anti-money-laundering requirements under the Prevention of Money Laundering Act, 2002 and the RBI Master Direction, with the audited financial returns generally filed within a month of finalisation and not later than the year end.</p><p><strong>Consequences and the company layer:</strong> Non-compliance is treated seriously by the RBI, and falling below the Net Owned Fund, missing the periodic returns, or breaching the conduct norms can lead to cancellation of the Certificate of Registration, while underneath all of this the Companies Act, 2013 continues to apply, with board meetings, the AGM, the statutory audit, AOC-4, the annual return and DIR-3 KYC, so an NBFC’s overall compliance load combines the full company stack with the RBI overlay.</p><p>Refer to the <a href="https://www.rbi.org.in" target="_blank" rel="noopener">RBI website</a> for the NBFC directions and returns, the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA portal</a> for the company forms, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">IndiaCode</a> for the Acts.</p>

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
                    <p class="faq-expanded__lead">Common questions on NBFC compliance, the Scale Based Regulation framework, the Net Owned Fund, the RBI returns, the consequences of non-compliance and foreign-owned NBFCs.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NBFC Compliance',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What compliance does an NBFC have to follow?</h3>
                        <div class="faq-expanded__a"><p>An NBFC follows two layers of compliance. As a company it holds board meetings and an AGM, has its accounts audited, and files AOC-4, MGT-7 or MGT-7A, ADT-1 and DIR-3 KYC, with its income tax return. As an RBI-regulated financial institution it holds a Certificate of Registration under Section 45-IA, falls within a Scale Based Regulation layer, maintains its Net Owned Fund and capital adequacy, follows the Fair Practice Code and KYC and AML norms, and files periodic returns to the RBI through COSMOS and XBRL. The RBI overlay is the heavier part.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the Scale Based Regulation framework?</h3>
                        <div class="faq-expanded__a"><p>Scale Based Regulation is the RBI’s framework for regulating NBFCs in proportion to their size, activity and risk. It places NBFCs into layers, the Base Layer for smaller non-deposit-taking NBFCs, the Middle Layer, the Upper Layer for the largest and most systemically significant NBFCs identified by the RBI, and a Top Layer reserved for any pushed there on supervisory concerns. The higher the layer, the stricter the capital, governance, exposure and disclosure norms, so an NBFC’s exact obligations depend on the layer it falls in.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Net Owned Fund for an NBFC?</h3>
                        <div class="faq-expanded__a"><p>Net Owned Fund, or NOF, is the minimum capital an NBFC must maintain to hold its registration. It is computed broadly as the paid-up equity capital and free reserves, reduced by accumulated losses, deferred revenue expenditure and other intangible assets, and the RBI sets a minimum amount that varies by NBFC category, with glide paths where the requirement has been raised. The statutory auditor certifies the NOF each year, and falling below the minimum is one of the most common reasons the RBI cancels an NBFC’s Certificate of Registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What returns does an NBFC file with the RBI?</h3>
                        <div class="faq-expanded__a"><p>An NBFC files periodic returns to the RBI through its online systems, COSMOS and the XBRL platform, with the exact set depending on the NBFC’s layer and activity. These principally include the DNBS family of returns covering matters such as financial position, asset-liability management, capital adequacy and asset classification, the NBS returns including the quarterly return for deposit-taking NBFCs, and an annual return supported by a statutory auditor certificate. The audited returns are generally filed within a month of finalising the accounts, and the schedule is closely monitored.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does an NBFC have the same compliance as a normal company?</h3>
                        <div class="faq-expanded__a"><p>No, it has more. An NBFC is a company, so it carries the full Companies Act compliance, the board meetings, the AGM, the statutory audit and the filing of AOC-4, MGT-7 or 7A, ADT-1 and DIR-3 KYC. On top of that, because it is an RBI-regulated financial institution, it has the entire RBI overlay, the Certificate of Registration, the Scale Based Regulation layer norms, the Net Owned Fund, the capital adequacy and prudential rules, the Fair Practice Code and the periodic returns. This makes its compliance load substantially heavier.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if an NBFC does not stay compliant?</h3>
                        <div class="faq-expanded__a"><p>The consequences are severe because the RBI has low tolerance for NBFC non-compliance. Falling below the Net Owned Fund, missing the periodic DNBS or XBRL returns, breaching capital adequacy, or violating the Fair Practice Code or KYC and AML norms can lead to penalties, supervisory action and, in serious cases, cancellation of the Certificate of Registration, without which the NBFC cannot carry on its business. Each year a significant number of NBFCs are removed from the RBI registry for such failures, so disciplined compliance is essential.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does a foreign-owned NBFC have extra compliance?</h3>
                        <div class="faq-expanded__a"><p>Yes. An NBFC that has foreign investment carries the FEMA reporting overlay in addition to its RBI prudential compliance and its company compliance, so it also reports its foreign investment, filing Form FC-GPR on the issue of shares to a non-resident and the annual FLA return, alongside meeting the sectoral conditions that apply to foreign investment in the NBFC sector. We coordinate the FEMA reporting with the RBI prudential returns and the ROC filings so that the company, RBI and FEMA records stay consistent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can you handle both the RBI and ROC compliance for an NBFC?</h3>
                        <div class="faq-expanded__a"><p>Yes. Our NBFC compliance retainer runs both stacks as one engagement, the company side of AOC-4, MGT-7, the statutory audit, ADT-1 and KYC, and the RBI side of the Net Owned Fund tracking and certification, the capital and prudential norms for your Scale Based Regulation layer, the Fair Practice Code, KYC and AML policies, and the DNBS and NBS returns on COSMOS and XBRL. We keep the company and RBI records consistent and track every deadline, with the scope and fee confirmed for your NBFC’s layer and activity from a starting retainer of 99,999 rupees a year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">NBFC ki compliance kya hai?</h3>
                        <div class="faq-expanded__a"><p>NBFC ko company ki tarah AOC-4 aur MGT-7 ke saath RBI ka overlay bhi follow karna hota hai, Section 45-IA ki registration, Net Owned Fund, scale based layer aur RBI ko DNBS aur NBS returns.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Net Owned Fund kya hai?</h3>
                        <div class="faq-expanded__a"><p>Net Owned Fund woh minimum capital hai jo NBFC ko rakhna hota hai, paid-up capital aur free reserves me se losses aur intangibles ghata kar, jise auditor har saal certify karta hai.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Registration?</strong> CoR under Section 45-IA, RBI Act.</p><p><strong>Categorisation?</strong> Scale Based Regulation layers.</p><p><strong>Capital?</strong> Net Owned Fund, auditor-certified.</p><p><strong>Returns?</strong> DNBS and NBS on COSMOS and XBRL.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Specialist Support Matters</h2>
            <div class="content-text">
                
                <p><strong>For an NBFC, compliance is existential.</strong> The RBI supervises the sector closely and acts firmly, and a shortfall in the Net Owned Fund, a missed return, or a conduct breach can lead to penalties or the loss of the Certificate of Registration, which ends the business. The obligations span two regulators, depend on the Scale Based Regulation layer, and are updated frequently. A standing, specialist engagement that runs the company and RBI sides together on one tracked calendar is what keeps an NBFC on the right side of the RBI, year after year.</p><p><strong>Get a scoped proposal - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20a%20scoped%20NBFC%20compliance%20proposal%2C%20RBI%20and%20ROC." target="_blank" rel="noopener">WhatsApp us</a>. We respond within 2 hours.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Set Up NBFC Compliance with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">Corporate compliance for an NBFC is two stacks in one, the full Companies Act compliance of a company, and the heavy RBI overlay that comes with being a regulated financial institution, the Certificate of Registration under Section 45-IA, the Scale Based Regulation layer, the Net Owned Fund, the prudential norms and the periodic returns.</p><p style="color:#FFFFFF;">The two must stay consistent, and lapses can cost the registration itself. This page maps the whole picture and routes you to each service. Patron Accounting, with a qualified CA and CS team and offices in Pune, Mumbai, Delhi and Gurugram, runs NBFC compliance as one integrated, specialist engagement from a starting retainer of 99,999 rupees a year.</p><p style="color:#FFFFFF;"><strong>10,000+ Businesses  |  4.9 Rating  |  50,000+ Documents Filed  |  15+ Years.</strong> Book a free consultation today.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20a%20scoped%20NBFC%20compliance%20proposal%2C%20RBI%20and%20ROC.%20Please%20share%20the%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NBFC Compliance%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20NBFC Compliance%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- CITY PAGES + RELATED SERVICES -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
<div class="pa-city-block">
<div class="pa-block-title">Component Services</div>
<div class="pa-block-sub">ROC, audit, FEMA and KYC for NBFCs</div>
<div class="pa-cross-grid">
<a href="https://www.patronaccounting.com/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/director-kyc" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director KYC</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/fdi-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/fla-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FLA Returns</div><div class="pa-card-sub">India</div></div></a>
<a href="https://www.patronaccounting.com/compliance-calendar" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Compliance Calendar</div><div class="pa-card-sub">India</div></div></a>
</div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 3 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 4 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed at least yearly and updated whenever the RBI NBFC directions, the Scale Based Regulation layers, the Net Owned Fund thresholds, the DNBS and NBS return framework, or the underlying Companies Act compliance change. Freshness Tier 1.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026-27 ITR filing is live</strong> - get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

</main>
@endsection

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
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
                        <div class="testi-google-badge"><img src="https://www.patronaccounting.com/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
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
        // Static cards already in DOM — just init Slick if not already done
        if (slider.children.length > 0 && !$(slider).hasClass('slick-initialized')) {
            if (loading) loading.style.display = 'none';
            initSlick(slider);
            return;
        }
        let html = '';

        reviews.forEach(function(review, i) {
            if (review.hasVideo && review.videoUrl) {
                html += buildVideoCard(review);
            } else {
                html += buildQuoteCard(review, i);
            }
        });

        slider.innerHTML = html;
        slider.style.display = 'block';
        loading.style.display = 'none';

        // Init Slick
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
        // Static cards already rendered in the desired order - use them as-is and do NOT
        // fetch/regenerate from fallbackReviews or the Google API (that would overwrite the
        // curated order, e.g. video, text, video, then rest).
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
            return; // static cards are authoritative - stop here
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
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll
const tocBtns = document.querySelectorAll('.toc-btn');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', function() {
    let current = '';
    sections.forEach(function(section) {
        const sectionTop = section.offsetTop - 120;
        if (pageYOffset >= sectionTop) { current = section.getAttribute('id'); }
    });
    tocBtns.forEach(function(btn) {
        btn.classList.remove('active');
        if (btn.getAttribute('href') === '#' + current) { btn.classList.add('active'); }
    });
});
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
// BF-1 (corrected): Last Updated mirrors schema dateModified — STABLE hardcoded date, never live new Date()
(function() {
    var dateStr = '4 June 2026';
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>
