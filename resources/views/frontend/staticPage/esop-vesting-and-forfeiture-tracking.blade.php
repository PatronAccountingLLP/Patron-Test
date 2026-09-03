@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP Vesting and Forfeiture Tracking 2026 | Patron Accounting</title>
    <meta name="description" content="Ongoing ESOP vesting milestone tracking, forfeiture recording in SH-6, vesting alerts and employee notifications by a CA and CS firm. From Rs 9,999 per year.">
    <link rel="canonical" href="/esop-vesting-and-forfeiture-tracking">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Vesting and Forfeiture Tracking 2026 | Patron Accounting">
    <meta property="og:description" content="Ongoing ESOP vesting milestone tracking, forfeiture recording in SH-6, vesting alerts and employee notifications by a CA and CS firm. From Rs 9,999 per year.">
    <meta property="og:url" content="/esop-vesting-and-forfeiture-tracking">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Vesting and Forfeiture Tracking 2026 | Patron Accounting">
    <meta name="twitter:description" content="Ongoing ESOP vesting milestone tracking, forfeiture recording in SH-6, vesting alerts and employee notifications by a CA and CS firm. From Rs 9,999 per year.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-vesting-and-forfeiture-tracking/#service",
        "name": "ESOP Vesting and Forfeiture Tracking",
        "description": "Patron Accounting provides an annual subscription service tracking ESOP vesting milestones, recording forfeiture events in the Form SH-6 register with dates and causes under Rule 12(10), notifying employees of vested options and sending automated upcoming-vesting alerts, keeping the option pool reconciled and records audit-ready for Indian companies.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-vesting-and-forfeiture-tracking" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Vesting", "sameAs": "https://en.wikipedia.org/wiki/Vesting" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP Vesting Tracking Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "ESOP Vesting and Forfeiture Tracking Subscription" },
                    "priceSpecification": { "@type": "UnitPriceSpecification", "price": "9999", "priceCurrency": "INR", "unitText": "per year" },
                    "description": "Annual subscription covering vesting tracking, forfeiture recording in SH-6, alerts, employee notifications and periodic reporting. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-vesting-and-forfeiture-tracking/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP Vesting Tracking", "item": "https://www.patronaccounting.com/esop-vesting-and-forfeiture-tracking" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-vesting-and-forfeiture-tracking/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What happens to unvested options when an employee leaves?",
                "acceptedAnswer": { "@type": "Answer", "text": "Unvested options are forfeited automatically when an employee leaves before they vest, and they return to the ESOP pool, unless the scheme specifically provides otherwise. Vested options are different: they can usually be exercised within a defined post-termination window, commonly 30 to 90 days, after which even the vested options may lapse. On death or permanent incapacity, most schemes accelerate or preserve vesting for the employee's heirs or nominees. Each of these events needs to be tracked and recorded against the scheme terms." }
            },
            {
                "@type": "Question",
                "name": "Why do we need to record forfeitures in SH-6?",
                "acceptedAnswer": { "@type": "Answer", "text": "Because Rule 12(10) of the Share Capital Rules requires the Form SH-6 register to record every grant, vesting, exercise, lapse and forfeiture, with dates and causes. Recording forfeitures keeps a clean audit trail and ensures the option pool reconciles, with forfeited options returned to it. The register is not filed with the MCA but must be available for inspection during audits and diligence, and missing forfeiture entries are exactly the kind of gap that surfaces at the worst time, in a funding round." }
            },
            {
                "@type": "Question",
                "name": "ESOP vesting track karna kyun zaroori hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Kyunki options har mahine vest hote hain aur jab koi employee chhodta hai to unvested options forfeit ho jaate hain. Agar yeh events time pe track aur SH-6 mein record na hon, to vested aur unvested ka hisaab galat ho jaata hai aur pool reconcile nahi hota. Yeh gap baad mein audit ya funding round mein pakda jaata hai. Hum monthly vesting track karte hain, forfeitures record karte hain, aur employees ko notify karte hain." }
            },
            {
                "@type": "Question",
                "name": "Do you pay tax when options vest?",
                "acceptedAnswer": { "@type": "Answer", "text": "No. Vesting itself is not a taxable event. ESOPs are taxed at two later stages: as a salary perquisite at exercise, on the difference between the fair market value and the exercise price, and as capital gains when the shares are eventually sold. So vesting tracking is purely a compliance and record-keeping matter, not a tax trigger. The tax arises only when the employee exercises, which is handled through payroll and tax processes, separate from this tracking service." }
            },
            {
                "@type": "Question",
                "name": "How is this different from SH-6 register administration?",
                "acceptedAnswer": { "@type": "Answer", "text": "They are complementary. SH-6 register administration is about maintaining the statutory register itself as the official book of record. This service is the ongoing event tracking that feeds that register: we monitor vesting milestones month by month, capture forfeiture events as people leave, send alerts and employee notifications, and ensure each event is reflected in SH-6. Many companies take both, so the tracking and the register stay perfectly in step; we can provide them together." }
            },
            {
                "@type": "Question",
                "name": "What alerts and notifications do you send?",
                "acceptedAnswer": { "@type": "Answer", "text": "We send upcoming-vesting alerts to the company ahead of each vesting date and any exercise deadline, vesting notifications to employees when their options vest so they know what they hold, and leaver-window flags when a departing employee's exercise window is running. These keep the company on top of its obligations and ensure employees do not unknowingly lose options by missing a deadline, which is a common and avoidable cause of disputes." }
            },
            {
                "@type": "Question",
                "name": "Can you track for a company with a complex vesting schedule?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. We handle time-based, graded, milestone and performance-based vesting, including cliffs and mixed schedules across different grant tranches and employee groups. Complex schedules are exactly where manual tracking breaks down and errors creep in, so they benefit most from a managed service. We model your specific schedules and track each tranche accurately; heavier complexity simply sits in a higher tier of the subscription." }
            },
            {
                "@type": "Question",
                "name": "Is this a one-time service or ongoing?",
                "acceptedAnswer": { "@type": "Answer", "text": "It is an ongoing, subscription-style service, renewed annually, because vesting and forfeiture are continuous. Each month options vest and employees may leave, so the value is in keeping the record current all year rather than reconstructing it once. This differs from our one-time deliverables like scheme drafting or a templates pack. Many companies start with a deliverable and then move onto this subscription to keep everything maintained." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-vesting-and-forfeiture-tracking",
        "name": "ESOP Vesting and Forfeiture Tracking",
        "description": "Ongoing ESOP vesting milestone tracking, forfeiture recording in SH-6, vesting alerts and employee notifications by a CA and CS firm. From Rs 9,999 per year.",
        "url": "https://www.patronaccounting.com/esop-vesting-and-forfeiture-tracking",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-vesting-and-forfeiture-tracking/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-vesting-and-forfeiture-tracking/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How the ESOP vesting and forfeiture tracking subscription runs",
        "description": "Step-by-step process to onboard the data, track each month, record events, alert and notify, and report and reconcile.",
        "totalTime": "P30D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Onboard the data",
                "text": "We load your grants, vesting schedules and current SH-6 position."
            },
            {
                "@type": "HowToStep",
                "name": "Track each month",
                "text": "We update vesting milestones and the vested and unvested split."
            },
            {
                "@type": "HowToStep",
                "name": "Record events",
                "text": "We post forfeitures and exercises to SH-6 as they happen."
            },
            {
                "@type": "HowToStep",
                "name": "Alert and notify",
                "text": "We send vesting alerts and employee notifications."
            },
            {
                "@type": "HowToStep",
                "name": "Report and reconcile",
                "text": "We provide periodic reports tying everything back to the pool."
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
        "name": "ESOP Vesting Tracking Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Vesting",
                "description": "The point at which options become exercisable on a schedule, often monthly or quarterly after a cliff."
            },
            {
                "@type": "DefinedTerm",
                "name": "Forfeiture",
                "description": "Loss of unvested options on separation, returned to the ESOP pool unless the scheme provides otherwise."
            },
            {
                "@type": "DefinedTerm",
                "name": "Exercise window",
                "description": "The post-termination period in which vested options can be exercised before they lapse."
            },
            {
                "@type": "DefinedTerm",
                "name": "Pool reconciliation",
                "description": "Keeping granted, vested, exercised and forfeited options tied back to the authorised option pool."
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
                        ESOP Vesting and Forfeiture Tracking
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Vesting tracking:</span> every milestone tracked, month by month.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Forfeiture recording:</span> leaver forfeitures recorded in SH-6 with dates and causes.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Alerts and notifications:</span> upcoming-vesting alerts and employee notices.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> tracking from Rs 9,999 per year (Exl GST and Govt. Charges).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years tracking ESOP vesting</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP Vesting Tracking%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20Vesting%20Tracking%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Vesting%20Tracking%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP Vesting Tracking',
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
    'ctaText'    => 'Companies running live ESOPs trust Patron Accounting to track vesting, record forfeitures in SH-6 and keep the option pool reconciled all year round.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">Why Track</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">What We Track</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Subscription Includes</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">How It Runs</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Forfeiture</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Cadence</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Why Subscribe</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Tax Note</button>
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
                    <p><strong>&#128204; TL;DR - ESOP Vesting Tracking Services at a Glance</strong></p>
                    <p>We track your ESOP vesting milestones month by month, record forfeiture events in the SH-6 register with dates and causes, notify employees of vested options, and send automated alerts for upcoming vesting, as an ongoing subscription. Your records stay current and audit-ready.</p>
                </div>
                <p>Options vest every month, employees come and go, and each event has to be recorded, notified and reflected in your SH-6 register, or your cap table quietly drifts out of truth. Patron Accounting tracks it for you on a subscription basis: monthly vesting milestones, forfeiture events recorded in SH-6, employee notifications, and automated alerts for upcoming vesting.</p>
                <p>An ESOP is not a one-time event; it is a living schedule. Every month options vest, and every time someone leaves, options are forfeited. If those events are not tracked and recorded as they happen, the gap is discovered later, in an audit or a funding round, when reconstructing it is painful. This service keeps the schedule and the register accurate continuously.</p>
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
                <h2 class="section-title">Why Vesting and Forfeiture Need Active Tracking</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Vesting and forfeiture are constant, dated events, and records that live in scattered spreadsheets and emails drift out of truth fast.</p>
                    <ul>
                        <li><strong>Vesting is continuous:</strong> options vest on a schedule, often monthly or quarterly, so the vested and unvested split changes all the time.</li>
                        <li><strong>Forfeitures are event-driven:</strong> every leaver triggers a forfeiture of unvested options that must be recorded and returned to the pool.</li>
                        <li><strong>The pool must reconcile:</strong> granted, vested, exercised and forfeited options must always tie back to the authorised pool.</li>
                        <li><strong>Records are examined:</strong> auditors and investors check vested and unvested balances and the SH-6 register closely.</li>
                    </ul>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Vesting Tracking:</strong></p>
                    <ul>
                        <li><strong>Vesting:</strong> options becoming exercisable on a schedule, often after a one-year cliff.</li>
                        <li><strong>Forfeiture:</strong> unvested options lost on separation, returned to the pool.</li>
                        <li><strong>Exercise window:</strong> the post-termination period to exercise vested options before they lapse.</li>
                        <li><strong>Pool reconciliation:</strong> keeping granted, vested and forfeited tied to the authorised pool.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Vesting Tracking</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Recorded under</span>
                        <strong>Rule 12(10), Form SH-6</strong>
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
            <h2 class="section-title">What We Track and Record</h2>
            <div class="content-text">
                
                <p>Every event we track is reflected in your SH-6 register, so the statutory record and the live schedule never diverge:</p>
                <ul>
                    <li><strong>Monthly vesting milestones:</strong> we track each tranche as it vests, employee by employee.</li>
                    <li><strong>Forfeiture events:</strong> we record unvested options forfeited on each leaver.</li>
                    <li><strong>SH-6 entries:</strong> we post grants, vesting, exercise and forfeiture with dates and causes.</li>
                    <li><strong>Employee notifications:</strong> we notify employees when their options vest.</li>
                    <li><strong>Upcoming-vesting alerts:</strong> we send reminders ahead of vesting and exercise dates.</li>
                    <li><strong>Pool reconciliation:</strong> we keep granted, vested and forfeited tied to the pool.</li>
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
            <h2 class="section-title">What the Subscription Includes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Vesting Milestone Tracking</td><td>We maintain each employee's vesting schedule and track every tranche as it vests, keeping a live vested and unvested position.</td></tr>
                        <tr><td>Forfeiture Event Management</td><td>We capture each leaver, apply the scheme's leaver terms, record the forfeiture in SH-6 and return the options to the pool.</td></tr>
                        <tr><td>SH-6 Upkeep</td><td>We post grants, vesting, exercise and forfeiture to the SH-6 register with dates and causes, keeping it audit-ready.</td></tr>
                        <tr><td>Alerts and Notifications</td><td>We send upcoming-vesting alerts to the company and vesting notices to employees, plus leaver-window flags.</td></tr>
                        <tr><td>Periodic Reporting</td><td>We provide a regular vesting and forfeiture report, with the pool reconciliation, so you always have a clear picture.</td></tr>

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
            <h2 class="section-title">How the Subscription Runs</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A continuous monthly cadence keeps your vesting and forfeiture record live, reconciled and audit-ready all year.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Onboard the data</h3>
        <p class="step-description">We load your grants, vesting schedules and current SH-6 position.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grants + schedules</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Current SH-6</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="16" width="52" height="68" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 30 v22 M52 44 l8 8 8 -8" stroke="#E8712C" stroke-width="2.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/><line x1="44" y1="66" x2="76" y2="66" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div>
            <span class="illustration-label">Onboarded</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Track each month</h3>
        <p class="step-description">We update vesting milestones and the vested and unvested split.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Milestones</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Vested split</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="22" width="60" height="56" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="36" x2="90" y2="36" stroke="#14365F" stroke-width="1.5"/><circle cx="44" cy="50" r="3" fill="#25D366"/><circle cx="60" cy="50" r="3" fill="#25D366"/><circle cx="76" cy="50" r="3" fill="#F5A623"/><circle cx="44" cy="64" r="3" fill="#14365F" opacity="0.3"/><circle cx="60" cy="64" r="3" fill="#14365F" opacity="0.3"/></svg></div>
            <span class="illustration-label">Tracked</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Record events</h3>
        <p class="step-description">We post forfeitures and exercises to SH-6 as they happen.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Forfeitures</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exercises</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="16" width="52" height="68" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SH-6</text><path d="M50 56 l8 8 14 -14" stroke="#25D366" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
            <span class="illustration-label">Recorded</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Alert and notify</h3>
        <p class="step-description">We send vesting alerts to the company and notifications to employees.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Vesting alerts</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Employee notices</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 24 a18 18 0 0118 18 v10 l5 8 h-46 l5 -8 v-10 a18 18 0 0118 -18z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="60" cy="74" r="5" fill="#E8712C"/><circle cx="60" cy="22" r="3" fill="#14365F"/></svg></div>
            <span class="illustration-label">Notified</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Report and reconcile</h3>
        <p class="step-description">We provide periodic reports tying everything back to the pool.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Periodic report</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pool reconciled</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="32" y="20" width="56" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="42" y="56" width="8" height="14" fill="#F5A623"/><rect x="56" y="48" width="8" height="22" fill="#E8712C"/><rect x="70" y="40" width="8" height="30" fill="#14365F" opacity="0.6"/></svg></div>
            <span class="illustration-label">Reported</span>
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
            <h2 class="section-title">How Forfeiture Works, and Why It Must Be Recorded</h2>
            <div class="content-text">
                
                <p>Forfeiture is where most tracking errors happen, because it is triggered by people leaving rather than by the calendar.</p>
                <div style="overflow-x:auto;margin:16px 0;">
                <table style="width:100%;border-collapse:collapse;">
                    <thead><tr><th style="text-align:left;padding:10px;border-bottom:2px solid var(--blue);">Leaver type</th><th style="text-align:left;padding:10px;border-bottom:2px solid var(--blue);">Unvested options</th><th style="text-align:left;padding:10px;border-bottom:2px solid var(--blue);">Vested options</th></tr></thead>
                    <tbody>
                        <tr><td style="padding:10px;border-bottom:1px solid #e5e7eb;">Resignation</td><td style="padding:10px;border-bottom:1px solid #e5e7eb;">Forfeited, return to pool</td><td style="padding:10px;border-bottom:1px solid #e5e7eb;">Exercisable within the window, then lapse</td></tr>
                        <tr><td style="padding:10px;border-bottom:1px solid #e5e7eb;">Termination for cause</td><td style="padding:10px;border-bottom:1px solid #e5e7eb;">Forfeited</td><td style="padding:10px;border-bottom:1px solid #e5e7eb;">Often forfeited too, per the scheme</td></tr>
                        <tr><td style="padding:10px;border-bottom:1px solid #e5e7eb;">Death or incapacity</td><td style="padding:10px;border-bottom:1px solid #e5e7eb;">Often accelerated or preserved for heirs</td><td style="padding:10px;border-bottom:1px solid #e5e7eb;">Exercisable by heirs or nominees</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Each forfeiture must be recorded in SH-6 with the date and cause,</strong> and the forfeited options returned to the pool so it reconciles. We capture the leaver event, apply the scheme's good-leaver or bad-leaver terms, and post the entry, so nothing is missed and the pool is always correct.</p>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Alerts and employee notifications</strong></p>
                    <p>We send upcoming-vesting alerts to the company ahead of each vesting date and exercise deadline, vesting notices to employees when their options vest, and leaver-window flags when a leaver's exercise window is running, so no one is caught out.</p>
                </div>

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
                        <tr><td>Vesting tracked in stale spreadsheets</td><td>Records drift out of truth</td><td>Maintain a live, reconciled vesting position.</td></tr>
                        <tr><td>Forfeitures not recorded on exit</td><td>Pool overstated</td><td>Capture each leaver and post the SH-6 entry.</td></tr>
                        <tr><td>Pool no longer reconciles</td><td>Diligence red flag</td><td>Tie granted, vested and forfeited back to the pool.</td></tr>
                        <tr><td>Employees unaware of vested options</td><td>Disputes and lapses</td><td>Send vesting notifications and window flags.</td></tr>

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
            <h2 class="section-title">Tracking Subscription Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 9,999 per year (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the annual subscription</td><td>Ongoing vesting tracking, forfeiture recording in SH-6, alerts, employee notifications and periodic reporting for a standard option base</td></tr>
                        <tr><td>Larger employee counts, complex schedules and listed-company tracking</td><td>Scoped on top</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Vesting Tracking consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Vesting%20Tracking%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time and Cadence</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding your grants and current SH-6 position</td><td>A few days</td></tr>
                        <tr><td>Ongoing service</td><td>Monthly cadence: update vesting, record forfeitures, alert, notify and report</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Because it is continuous, your records never fall behind</strong>, and there is no year-end scramble to reconstruct a year of vesting and exits before an audit or a fundraise.</p>

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
            <h2 class="section-title">Why Subscribe to Tracking</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
            <h3 class="feature-title">Live vesting position</h3>
            <p class="feature-text">A live, reconciled vesting position, not a stale spreadsheet.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18"/><path d="M7 15h3"/></svg></div>
            <h3 class="feature-title">Every forfeiture recorded</h3>
            <p class="feature-text">Every forfeiture recorded in SH-6 with its date and cause.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8a6 6 0 00-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.7 21a2 2 0 01-3.4 0"/></svg></div>
            <h3 class="feature-title">Employees informed</h3>
            <p class="feature-text">Employees kept informed, so equity stays motivating and disputes are rare.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Always diligence-ready</h3>
            <p class="feature-text">Audit and diligence-ready records all year round, with no reconstruction.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Companies Running Live ESOPs</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years tracking ESOP vesting, forfeitures and SH-6 records for Indian companies.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">A Note on Tax: Vesting Is Not a Taxable Event</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Event</th><th>Tax treatment</th></tr></thead>
                    <tbody>
                        <tr><td>Vesting</td><td>Not a taxable event; a compliance and record task only</td></tr>
                        <tr><td>Exercise</td><td>Taxed as a salary perquisite on FMV minus exercise price</td></tr>
                        <tr><td>Sale</td><td>Taxed as capital gains on the eventual disposal</td></tr>
                        <tr><td>This service</td><td>Keeps the vesting and forfeiture record straight; the tax at exercise is handled by payroll and tax services</td></tr>

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
                
                <p>This works hand in hand with our ESOP SH-6 register administration service: tracking feeds the events, the register administration maintains the statutory book. Both sit within our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>.</p>
                <p>Exercises run through <a href="/issue-of-shares">issue of shares</a>, the perquisite TDS through <a href="/payroll-services">payroll services</a>, and the records support your <a href="/secretarial-audit">secretarial audit</a> and <a href="/statutory-audit">statutory audit</a>. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

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
                
                <p><strong>Vesting:</strong> under Rule 12 of the Companies (Share Capital and Debentures) Rules, 2014, there must be a minimum of one year between grant and vesting; the scheme sets the full vesting schedule and the treatment of options on separation.</p>
                <p><strong>Forfeiture:</strong> unvested options lapse or are forfeited on separation as the scheme provides, and vested options are exercisable only within the scheme's post-termination window, after which they may lapse.</p>
                <p><strong>SH-6 register:</strong> Rule 12(10) requires the company to maintain the Form SH-6 register recording all grants, vesting, exercise, lapse and forfeiture; it is not filed with the MCA but must be available for inspection in audits and diligence.</p>
                <p><strong>Non-compliance:</strong> failure to maintain the register or comply with Rule 12 can attract penalties under the Companies Act, alongside the reputational and trust cost of inaccurate records.</p>
                <p>Authoritative sources: the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Rule 12, SH-6, Section 450), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Share Capital Rules</a>, and the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (perquisite at exercise, capital gains).</p>

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
                    <p class="faq-expanded__lead">Common questions on what happens to options on leaving, forfeiture recording in SH-6, vesting tax, and how the tracking subscription works.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP Vesting Tracking',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What happens to unvested options when an employee leaves?</h3>
                        <div class="faq-expanded__a"><p>Unvested options are forfeited automatically when an employee leaves before they vest, and they return to the ESOP pool, unless the scheme specifically provides otherwise. Vested options are different: they can usually be exercised within a defined post-termination window, commonly 30 to 90 days, after which even the vested options may lapse. On death or permanent incapacity, most schemes accelerate or preserve vesting for the employee's heirs or nominees. Each of these events needs to be tracked and recorded against the scheme terms.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Why do we need to record forfeitures in SH-6?</h3>
                        <div class="faq-expanded__a"><p>Because Rule 12(10) of the Share Capital Rules requires the Form SH-6 register to record every grant, vesting, exercise, lapse and forfeiture, with dates and causes. Recording forfeitures keeps a clean audit trail and ensures the option pool reconciles, with forfeited options returned to it. The register is not filed with the MCA but must be available for inspection during audits and diligence, and missing forfeiture entries are exactly the kind of gap that surfaces at the worst time, in a funding round.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">ESOP vesting track karna kyun zaroori hai?</h3>
                        <div class="faq-expanded__a"><p>Kyunki options har mahine vest hote hain aur jab koi employee chhodta hai to unvested options forfeit ho jaate hain. Agar yeh events time pe track aur SH-6 mein record na hon, to vested aur unvested ka hisaab galat ho jaata hai aur pool reconcile nahi hota. Yeh gap baad mein audit ya funding round mein pakda jaata hai. Hum monthly vesting track karte hain, forfeitures record karte hain, aur employees ko notify karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do you pay tax when options vest?</h3>
                        <div class="faq-expanded__a"><p>No. Vesting itself is not a taxable event. ESOPs are taxed at two later stages: as a salary perquisite at exercise, on the difference between the fair market value and the exercise price, and as capital gains when the shares are eventually sold. So vesting tracking is purely a compliance and record-keeping matter, not a tax trigger. The tax arises only when the employee exercises, which is handled through payroll and tax processes, separate from this tracking service.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is this different from SH-6 register administration?</h3>
                        <div class="faq-expanded__a"><p>They are complementary. SH-6 register administration is about maintaining the statutory register itself as the official book of record. This service is the ongoing event tracking that feeds that register: we monitor vesting milestones month by month, capture forfeiture events as people leave, send alerts and employee notifications, and ensure each event is reflected in SH-6. Many companies take both, so the tracking and the register stay perfectly in step; we can provide them together.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What alerts and notifications do you send?</h3>
                        <div class="faq-expanded__a"><p>We send upcoming-vesting alerts to the company ahead of each vesting date and any exercise deadline, vesting notifications to employees when their options vest so they know what they hold, and leaver-window flags when a departing employee's exercise window is running. These keep the company on top of its obligations and ensure employees do not unknowingly lose options by missing a deadline, which is a common and avoidable cause of disputes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can you track for a company with a complex vesting schedule?</h3>
                        <div class="faq-expanded__a"><p>Yes. We handle time-based, graded, milestone and performance-based vesting, including cliffs and mixed schedules across different grant tranches and employee groups. Complex schedules are exactly where manual tracking breaks down and errors creep in, so they benefit most from a managed service. We model your specific schedules and track each tranche accurately; heavier complexity simply sits in a higher tier of the subscription.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is this a one-time service or ongoing?</h3>
                        <div class="faq-expanded__a"><p>It is an ongoing, subscription-style service, renewed annually, because vesting and forfeiture are continuous. Each month options vest and employees may leave, so the value is in keeping the record current all year rather than reconstructing it once. This differs from our one-time deliverables like scheme drafting or a templates pack. Many companies start with a deliverable and then move onto this subscription to keep everything maintained.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Unvested on exit?</strong> Forfeited, back to the pool.</li>
                    <li><strong>Vested on exit?</strong> Exercise within the window, then lapse.</li>
                    <li><strong>Record where?</strong> SH-6, with date and cause.</li>
                    <li><strong>Tax at vesting?</strong> No, tax is at exercise and sale.</li>
                    <li><strong>Engagement?</strong> Annual subscription.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Track Continuously</h2>
            <div class="content-text">
                
                <p>The cost of not tracking is invisible until it is not: a year of unrecorded vesting and forfeitures surfaces in an audit or a due-diligence exercise, where reconstructing it is slow, expensive and reputationally awkward, and where a pool that does not reconcile raises real questions. Tracking continuously, for a modest annual fee, means the record is always right and there is never a reconstruction to do. Keep the schedule and register live, not retrospective.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Keep Your ESOP Records Live</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">Vesting and forfeiture are the moving parts of every ESOP, and keeping them tracked, recorded and communicated is what keeps the scheme accurate, compliant and trusted.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of ESOP experience, runs this as an affordable annual subscription, tracking vesting milestones, recording forfeitures in SH-6, alerting the company and notifying employees, so your records stay live and audit-ready, and pairs it with full register administration and management whenever you need more.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Vesting%20Tracking%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP Vesting Tracking%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20Vesting%20Tracking%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESOP Vesting Tracking Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote vesting milestone tracking, forfeiture recording and SH-6 upkeep for companies running live ESOPs.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We track vesting and forfeitures for companies nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The monthly tracking, forfeiture recording and SH-6 upkeep is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for live ESOP records</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/issue-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every six months for changes to Rule 12 vesting or SH-6 requirements, leaver and forfeiture treatment norms, exercise-window conventions, and the perquisite and capital-gains tax treatment of ESOPs (Tier 2 freshness).</p>
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
