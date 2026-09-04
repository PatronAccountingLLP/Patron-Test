

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Convert Partnership to Pvt Ltd Pune – URC-1 &amp; SPICe+</title>
    <meta name="description" content="CA and CS assisted partnership to Pvt Ltd conversion in Pune. URC-1, SPICe+, newspaper ad, ROC approval, fresh COI, auto-transfer. Family businesses, Camp traders, MIDC manufacturers. Call +91 945 945 6700.">
    <link rel="canonical" href="/partnership-to-private-limited/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Convert Partnership to Pvt Ltd Pune – URC-1 &amp; SPICe+">
    <meta property="og:description" content="CA and CS assisted partnership to Pvt Ltd conversion in Pune. URC-1, SPICe+, newspaper ad, ROC approval, fresh COI, auto-transfer. Family businesses, Camp traders, MIDC manufacturers. Call +91 945 945 6700.">
    <meta property="og:url" content="/partnership-to-private-limited/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Convert Partnership to Pvt Ltd Pune – URC-1 &amp; SPICe+">
    <meta name="twitter:description" content="CA and CS assisted partnership to Pvt Ltd conversion in Pune. URC-1, SPICe+, newspaper ad, ROC approval, fresh COI, auto-transfer. Family businesses, Camp traders, MIDC manufacturers. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    [
    {"@context":"https://schema.org","@type":"AccountingService","@id":"https://www.patronaccounting.com/#office-pune","name":"Patron Accounting LLP - Pune Office","telephone":"+919459456700","url":"https://www.patronaccounting.com/","address":{"@type":"PostalAddress","streetAddress":"RTC Silver, Wagholi","addressLocality":"Pune","addressRegion":"Maharashtra","postalCode":"412207","addressCountry":"IN"},"geo":{"@type":"GeoCoordinates","latitude":"18.5793","longitude":"73.9826"},"openingHoursSpecification":[{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"opens":"10:00","closes":"19:00"}],"parentOrganization":{"@id":"https://www.patronaccounting.com/#organization"}},

    {"@context":"https://schema.org","@type":"Service","@id":"https://www.patronaccounting.com/partnership-to-private-limited/pune/#service","name":"Partnership to Private Limited Conversion in Pune","description":"Professional partnership firm to Pvt Ltd conversion services for Pune businesses. Covers partner consent, capital-to-shareholding structuring, name reservation, newspaper advertisement in Pune English and Marathi dailies, Form URC-1 and SPICe+ filing, MOA and AOA drafting, tax-neutral conversion planning under S.47(xiii), Registrar of Firms dissolution, and post-conversion compliance setup.","provider":{"@id":"https://www.patronaccounting.com/#organization"},"areaServed":{"@type":"City","name":"Pune","sameAs":"https://en.wikipedia.org/wiki/Pune"},"serviceType":"Partnership to Private Limited Conversion","url":"https://www.patronaccounting.com/partnership-to-private-limited/pune"},

    {"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.patronaccounting.com/"},{"@type":"ListItem","position":2,"name":"Partnership to Private Limited","item":"https://www.patronaccounting.com/partnership-to-private-limited"},{"@type":"ListItem","position":3,"name":"Partnership to Pvt Ltd in Pune","item":"https://www.patronaccounting.com/partnership-to-private-limited/pune"}]},

    {"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How to convert a partnership firm to Pvt Ltd in Pune?","acceptedAnswer":{"@type":"Answer","text":"Unanimous partner consent. Reserve name (Private Limited). Newspaper ad in Pune English and Marathi papers (21 days). Creditor NOC. File URC-1 + SPICe+ + MOA/AOA. ROC issues COI. Dissolve firm with Registrar of Firms. Update GST, PAN, bank."}},{"@type":"Question","name":"Can an unregistered partnership convert to Pvt Ltd?","acceptedAnswer":{"@type":"Answer","text":"Yes under Section 366. Additional documentation needed: notarised deed, bank statements, IT returns, GST registration proving firm existence. Registering deed first simplifies process."}},{"@type":"Question","name":"Is the conversion tax-neutral?","acceptedAnswer":{"@type":"Answer","text":"Can be structured as tax-neutral under Section 47(xiii) IT Act. Conditions: all assets/liabilities transferred, former partners hold minimum voting shares for prescribed period, no consideration other than shares."}},{"@type":"Question","name":"How long does conversion take?","acceptedAnswer":{"@type":"Answer","text":"45-65 days for conversion. Post-conversion compliance adds 15-30 days. Total 60-90 days end-to-end."}}]},

    {"@context":"https://schema.org","@type":"WebPage","@id":"https://www.patronaccounting.com/partnership-to-private-limited/pune","name":"Partnership to Private Limited in Pune 2026 | CA & CS | Patron Accounting","description":"CA and CS assisted partnership to Pvt Ltd conversion in Pune. URC-1, SPICe+, newspaper ad, ROC approval, fresh COI, auto-transfer. Family businesses, Camp traders, MIDC manufacturers. Call +91 945 945 6700.","url":"https://www.patronaccounting.com/partnership-to-private-limited/pune","inLanguage":"en-IN","isPartOf":{"@id":"https://www.patronaccounting.com/#website"},"author":{"@id":"https://www.patronaccounting.com/#team"}},

    {"@context":"https://schema.org","@type":"ProfessionalService","@id":"https://www.patronaccounting.com/#organization-rating","name":"Patron Accounting LLP","aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"500","bestRating":"5","worstRating":"1"}},

    {"@context":"https://schema.org","@type":"Claim","claimReviewed":"Section 366 Companies Act 2013 allows partnership firm registration as company; Section 374 auto-transfers assets liabilities contracts; URC-1 + SPICe+ filed with ROC; newspaper ad URC-2 English + vernacular 21 clear days; Section 47(xiii) IT Act conditional capital gains exemption; both registered and unregistered firms eligible; firm dissolved post-conversion","appearance":{"@type":"WebPage","url":"https://www.mca.gov.in"}},

    {"@context":"https://schema.org","@type":"HowTo","@id":"https://www.patronaccounting.com/partnership-to-private-limited/pune/#howto","name":"How to Convert Partnership to Pvt Ltd in Pune","step":[{"@type":"HowToStep","position":1,"name":"Obtain Partner Consent","text":"Unanimous consent of all partners. Resolution approving conversion, name, capital, directors."},{"@type":"HowToStep","position":2,"name":"Obtain DIN and DSC","text":"Apply DIR-3 for DIN and procure Class 3 DSC for all proposed directors."},{"@type":"HowToStep","position":3,"name":"Reserve Company Name","text":"RUN or SPICe+ Part A. Name with Private Limited suffix."},{"@type":"HowToStep","position":4,"name":"Publish Newspaper Advertisement","text":"Form URC-2 in Pune English and Marathi newspapers. 21 clear days for objections."},{"@type":"HowToStep","position":5,"name":"File URC-1 and SPICe+","text":"URC-1 + SPICe+ + e-MOA + e-AOA + AGILE-PRO with ROC. Partnership deed, partner details, creditor NOC attached."},{"@type":"HowToStep","position":6,"name":"Receive COI","text":"ROC issues Certificate of Incorporation. Assets and liabilities auto-transfer. Partnership deemed dissolved."},{"@type":"HowToStep","position":7,"name":"Post-Conversion Compliance","text":"Dissolve firm with Registrar of Firms Pune. Update GST, PAN, bank. Begin Pvt Ltd compliance."}]}
    ]
    </script>


@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column — right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
           ============================================ */
        .expert-attribution-box {
            background: #F9F9F9;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
/* ============================================
           TOC NAVIGATION — Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
@section('content')
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
                        Partnership to Private Limited Conversion in Pune - Formalise, Incorporate, and Grow
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Partnership deed, partner consent, Form URC-1, SPICe+ (INC-32), e-MOA (INC-33), e-AOA (INC-34), AGILE-PRO, URC-2 newspaper ad, creditor NOC, DSC/DIN</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Govt fee (based on authorised capital) + Stamp duty (MOA/AOA) + Newspaper ad + Professional fee Rs 15,000 - Rs 50,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All partnership firms (registered or unregistered) with minimum 2 partners and consent of all partners</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30-60 business days from partner consent to Certificate of Incorporation</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Partnership%20to%20Pvt%20Ltd%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'Partnership to Private Limited in Pune',
                                            'city'     => 'Pune',
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
    'ctaText'    => 'From Camp trading families to MIDC manufacturers, Pune partnerships trust Patron for seamless Pvt Ltd conversion.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">Why Convert</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#process-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">S.366 vs Fresh Inc</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Partnership to Private Limited in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Partnership to Private Limited in Pune Services at a Glance</strong></p>
                    <p>Converting a partnership firm to a private limited company involves registering the existing partnership as a company under Section 366 of the Companies Act, 2013, read with the Companies (Authorised to Register) Rules, 2014. The process requires unanimous partner consent, name reservation, newspaper advertisement in Form URC-2 (English + Marathi, 21 clear days for objections), filing Form URC-1 along with SPICe+ (INC-32), e-MOA, e-AOA, AGILE-PRO, and supporting documents. Upon conversion, all assets, liabilities, contracts, and legal proceedings automatically transfer to the new Pvt Ltd company under Section 374. Both registered and unregistered firms can convert.</p>
                </div>
                <p>Pune has a deep-rooted tradition of partnership businesses - from <strong>Camp and Deccan trading firms</strong> to <strong>MIDC Bhosari and Chakan manufacturing partnerships</strong>, <strong>Koregaon Park professional practices</strong>, and <strong>multi-generational family businesses</strong>. Many have outgrown the partnership structure. The Section 366 conversion provides a clean mechanism to transform the partnership into a Pvt Ltd without disrupting ongoing business. The <strong>ROC Pune</strong> processes URC-1 and SPICe+ filings, while the <strong>Registrar of Firms, Pune</strong> handles post-conversion dissolution. Learn more about Partnership to Private Limited across India.</p>
                <p>The conversion is potentially <strong>tax-neutral under Section 47(xiii)</strong> of the Income Tax Act if conditions are met. After conversion, companies benefit from <a href="/private-limited-company-compliance/pune">Pvt Ltd Company Compliance in Pune</a> and <a href="/accounting-services">Accounting Services</a>.</p>
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
                <h2 class="section-title">Why Convert Partnership to Private Limited</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Limited Liability Protection:</strong> Partnership = unlimited personal liability (home, savings at risk). Pvt Ltd = liability limited to share capital. Critical for Camp traders, MIDC manufacturers, and professional firms handling large engagements.</p>
<p><strong>Bank Finance & Credibility:</strong> Banks offer better rates and project finance to Pvt Ltd companies. Government tenders require company registration. MNC clients at Hinjewadi prefer vendor companies over partnership firms.</p>
<p><strong>Family Succession Planning:</strong> Shares can be transferred, gifted, or inherited without disrupting business - unlike partnership interests which require deed amendment and may trigger dissolution.</p>
<p><strong>Investor Access:</strong> Partnership firms cannot issue equity shares. Conversion to Pvt Ltd is mandatory before any external investment (angels, PE, VC) can be structured.</p>
<p><strong>Lower Tax Rate:</strong> Pvt Ltd companies can opt for Section 115BAA (25.17% effective) vs partnership's 30%+ rate. At Rs 50 lakh profit, this saves Rs 2.5-4 lakh annually.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Partnership to Private Limited in Pune:</strong></p>
                    <p><strong>Section 366:</strong> Allows entities with 2+ members to register as a company. Both registered and unregistered partnership firms eligible.</p>
<p><strong>Section 374 (Auto-Transfer):</strong> All property, assets, liabilities, contracts, and legal proceedings automatically transfer to the new company by operation of law. No separate transfer deeds needed.</p>
<p><strong>Form URC-1:</strong> Conversion application filed with ROC. Attachments: partnership deed, partner consent, CA-certified A&L statement, creditor NOC, newspaper ad copies.</p>
<p><strong>URC-2 (Newspaper Ad):</strong> Published in English + Marathi Pune newspapers. 21 clear days for objections. Mandatory under Section 374(b).</p>
<p><strong>Section 47(xiii) IT Act:</strong> Conditional capital gains exemption if all assets/liabilities transferred, partners hold minimum voting shares, and no consideration other than shares.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Partnership to Private Limited in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Auto-Transfer</span>
                        <strong>Section 374</strong>
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
            <h2 class="section-title">Who Needs This Conversion in Pune</h2>
            <div class="content-text">
                
                <p><strong>Camp and Deccan Trading Firms</strong> - Multi-decade trading partnerships in textiles, electronics, FMCG needing limited liability, better bank terms, and succession planning. See <a href="/private-limited-company-registration/pune">Private Limited Company Registration in Pune</a> for fresh incorporations.</p>
<p><strong>MIDC Manufacturing Partnerships (Bhosari, Chakan)</strong> - Auto component, engineering, and chemical manufacturers needing company structure for OEM vendor registration, ISO certification, and institutional contracts.</p>
<p><strong>Professional Partnerships (Koregaon Park, Deccan)</strong> - CA/CS/legal/medical practices wanting better governance, partner exit management, and liability protection.</p>
<p><strong>Multi-Generational Family Businesses</strong> - Formalising governance, bringing next generation as shareholders/directors, creating a framework that survives individual partners.</p>
<p><strong>Firms Seeking External Investment</strong> - Partnership firms attracting investor interest (angels, family offices, PE) needing Pvt Ltd structure to issue equity/CCPS.</p>
<p><strong>Unregistered Partnerships Formalising</strong> - Businesses on unregistered deeds wanting to leapfrog directly to Pvt Ltd via Section 366.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Partnership to Pvt Ltd Conversion Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>End-to-End Conversion</td><td>Partner consent, deed review, DIN/DSC, name reservation, newspaper ad (URC-2 in Pune English + Marathi), creditor NOC, URC-1 + SPICe+ + MOA/AOA + AGILE-PRO, ROC follow-up, COI, Registrar of Firms dissolution</td></tr>
<tr><td>Capital Structuring Advisory</td><td>Mapping partner capital contributions to shareholding. Fair value allocation, tax compliance, voting rights and dividend alignment</td></tr>
<tr><td>MOA and AOA Drafting</td><td>Object clause covering all existing and planned activities, capital clause, management provisions, share transfer restrictions, board composition</td></tr>
<tr><td>Tax Planning (Section 47(xiii))</td><td>Structuring for tax-neutral transfer. Capital gains analysis on goodwill, revalued assets, partner accounts. Advance ruling if conversion value is significant</td></tr>
<tr><td>Post-Conversion Compliance Setup</td><td>Auditor appointment, board meeting schedule, AGM planning, AOC-4/MGT-7 timeline, GST migration, PAN update, bank mandate change, Registrar of Firms dissolution</td></tr>
<tr><td>Unregistered Firm Conversion</td><td>Evidence compilation (bank, IT returns, GST, contracts), partnership deed preparation, simultaneous conversion via Section 366</td></tr>

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
            <h2 class="section-title">How to Convert Partnership to Pvt Ltd in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">7-step guide for Section 366 conversion with Patron Accounting</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain Unanimous Partner Consent</h3><p class="step-description">All partners must unanimously consent. Pass a resolution approving: conversion to Pvt Ltd under Section 366, proposed company name, authorised and paid-up share capital, allocation of shares to each partner (reflecting capital contribution), proposed directors (minimum 2), and authorisation to execute all documents. Document the consent in writing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All Partners Consented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution Passed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><path d="M52 35l5 5 11-11" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Consent Obtained</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Obtain DIN and DSC for Proposed Directors</h3><p class="step-description">All proposed directors must have valid DIN and DSC. Apply via DIR-3 on mca.gov.in. Minimum 2 directors required, at least 1 Indian resident (182+ days). Procure Class 3 DSC for all proposed directors and subscribers. For large Pune family partnerships with 5-10 partners, coordinate all DIN/DSC applications simultaneously.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN Obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC Procured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="45" y="39" text-anchor="middle" fill="#E8712C" font-size="6" font-weight="bold">DIN</text><circle cx="75" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="75" y="39" text-anchor="middle" fill="#E8712C" font-size="6" font-weight="bold">DSC</text></svg></div><span class="illustration-label">Directors Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reserve Company Name</h3><p class="step-description">File via RUN (60-day validity) or SPICe+ Part A (20-day validity) on mca.gov.in. Name must end with 'Private Limited' and comply with Companies Act naming guidelines. Can retain existing firm name plus 'Private Limited'. Patron recommends RUN for 60-day validity to accommodate the 21-day newspaper objection period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name Reserved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>60-Day Validity</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="60" height="12" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><text x="60" y="34" text-anchor="middle" fill="#E8712C" font-size="7" font-weight="bold">RUN</text><rect x="30" y="45" width="60" height="12" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/></svg></div><span class="illustration-label">Name Approved</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Publish Newspaper Advertisement (URC-2)</h3><p class="step-description">Publish Form URC-2 in at least two Pune-district newspapers: one in English (Times of India, Indian Express) and one in Marathi (Sakal, Loksatta, Maharashtra Times). The advertisement invites objections within 21 clear days from publication. Submit a copy to ROC simultaneously. This mandatory step cannot be shortened.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>English + Marathi Published</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>21 Clear Days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="36" x2="80" y2="36" stroke="#14365F" stroke-width="2" opacity="0.3"/><text x="60" y="55" text-anchor="middle" fill="#14365F" font-size="7" opacity="0.5">21 DAYS</text></svg></div><span class="illustration-label">Ad Published</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File URC-1 + SPICe+ with ROC Pune</h3><p class="step-description">After 21 clear days from newspaper publication, file: Form URC-1 (conversion application) with attachments: registered partnership deed, partner list, director list with DIN, CA-certified statement of assets & liabilities (within 30 days), partner consent, creditor NOC, newspaper ad copies, director affidavits. SPICe+ (INC-32) with e-MOA (INC-33), e-AOA (INC-34), AGILE-PRO. All digitally signed by proposed directors.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>URC-1 Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SPICe+ Filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="30" r="8" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="40" y="34" text-anchor="middle" fill="#E8712C" font-size="5" font-weight="bold">URC</text><circle cx="70" cy="30" r="8" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="70" y="34" text-anchor="middle" fill="#E8712C" font-size="4" font-weight="bold">SPICe+</text></svg></div><span class="illustration-label">Application Complete</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">ROC Issues Certificate of Incorporation</h3><p class="step-description">ROC/CRC reviews all documents, addresses any objections from the 21-day notice period, and issues Certificate of Incorporation with CIN, PAN, and TAN. Upon issuance: all assets, liabilities, contracts, and legal proceedings automatically transfer to the new Pvt Ltd under Section 374. The partnership firm ceases to exist.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>COI Received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auto-Transfer Complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FEF4EE" stroke="#10B981" stroke-width="2"/><text x="60" y="40" text-anchor="middle" fill="#10B981" font-size="8" font-weight="bold">COI</text></svg></div><span class="illustration-label">Company Incorporated</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Post-Conversion: Dissolve Firm and Begin Pvt Ltd Compliance</h3><p class="step-description">File dissolution with Registrar of Firms, Pune. Update GST registration (GSTIN migration or fresh). Update PAN (new PAN via SPICe+ or update). Change bank account mandates with fresh COI. Update all licences, contracts, vendor/customer records. Begin Pvt Ltd compliance: appoint auditor (ADT-1), hold board meetings (min 4/year), plan first AGM, prepare for AOC-4/MGT-7.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Firm Dissolved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance Started</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L95 30V55C95 75 60 90 60 90S25 75 25 55V30L60 10Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Conversion Complete</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Partnership to Pvt Ltd Conversion</h2>
            <div class="content-text">
                
                <p><strong>Partnership Deed:</strong> Registered deed preferred; unregistered firms need supporting evidence of existence.</p>
<p><strong>Partner Consent / Resolution:</strong> Written unanimous consent of all partners approving conversion.</p>
<p><strong>CA-Certified Statement of Assets & Liabilities:</strong> Not older than 30 days before URC-1 filing.</p>
<p><strong>Creditor NOC:</strong> From all secured creditors; or no-liability statement signed by all partners.</p>
<p><strong>Newspaper Advertisement (URC-2):</strong> Published copies from English and Marathi Pune newspapers.</p>
<p><strong>DIN + DSC:</strong> For all proposed directors (minimum 2, at least 1 Indian resident).</p>
<p><strong>Form URC-1 + SPICe+ + e-MOA + e-AOA + AGILE-PRO:</strong> Complete filing package on mca.gov.in.</p>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-Specific Tip:</strong> Pune partnership firms registered under the Maharashtra Partnership Act should obtain an NOC from the Registrar of Firms, Pune before filing URC-1. For unregistered firms, prepare a notarised partnership deed along with bank statements, IT returns, GST registration, and contracts establishing the firm's existence.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Conversion Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Partnership Deed Not Registered</td><td>Many Pune trading and family businesses operate on unregistered deeds or oral agreements; additional evidence needed to prove existence</td><td>Notarised deed preparation + supporting evidence (bank, IT returns, GST, contracts); or register deed first at sub-registrar before conversion</td></tr>
<tr><td>Capital to Shareholding Mapping</td><td>Partner capital accounts include contributions, profits, goodwill, current accounts; mapping to clean shareholding structure requires valuation</td><td>Professional capital structuring: fair value allocation, goodwill valuation, partner expectations alignment for voting and dividend rights</td></tr>
<tr><td>Newspaper Ad Timing (21 Days)</td><td>21-day objection period mandatory; tight with name reservation validity (20 days SPICe+ Part A); planning critical for bank/investor deadlines</td><td>Use RUN (60-day validity) instead of SPICe+ Part A; backwards planning from external deadlines; ad published immediately after name approval</td></tr>
<tr><td>Tax Implications Not Planned</td><td>Section 47(xiii) conditions not met triggers capital gains on goodwill, revalued assets, accumulated reserves</td><td>Pre-conversion tax planning by CA team; Section 47(xiii) structuring; advance ruling for significant conversion values</td></tr>
<tr><td>Post-Conversion Compliance Shock</td><td>Partnership has minimal compliance; Pvt Ltd requires statutory audit, AGM, AOC-4, MGT-7, ADT-1, board meetings, TDS returns</td><td>Compliance budget and calendar established from Day 1; first-year compliance package included; no surprises</td></tr>

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
            <h2 class="section-title">Partnership to Pvt Ltd Conversion Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (Partnership to Pvt Ltd)</td><td>Starting from INR 999/mo (Exl GST and Govt. Charges)</td></tr>
<tr><td>End-to-End Conversion</td><td>Rs 15,000 - Rs 30,000 (all forms + newspaper ad coordination + ROC follow-up)</td></tr>
<tr><td>Conversion + Capital Structuring + Tax Planning</td><td>Rs 25,000 - Rs 50,000 (includes Section 47(xiii) structuring)</td></tr>
<tr><td>Unregistered Firm Conversion (Additional)</td><td>Rs 20,000 - Rs 40,000 (deed preparation + evidence compilation)</td></tr>
<tr><td>Post-Conversion Compliance Setup (First Year)</td><td>Rs 25,000 - Rs 50,000 (audit + AGM + ROC + ITR + GST + TDS + PT)</td></tr>
<tr><td>Newspaper Advertisement (English + Marathi)</td><td>Rs 5,000 - Rs 15,000 (Pune-district dailies)</td></tr>
<tr><td>Government Fees</td><td>URC-1/SPICe+ filing fee (based on authorised capital Rs 2,000-50,000) + Maharashtra stamp duty on MOA/AOA + DIN Rs 500/director</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Partnership to Private Limited in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Partnership%20to%20Pvt%20Ltd%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Conversion Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Partner Consent + Resolution</td><td>1-3 days</td></tr>
<tr><td>DIN/DSC Procurement (All Partners)</td><td>3-5 days (parallel)</td></tr>
<tr><td>Name Reservation (RUN)</td><td>1-3 days</td></tr>
<tr><td>Newspaper Publication (URC-2) + 21 Clear Days</td><td>1 day to publish + 21 days objection period</td></tr>
<tr><td>Creditor NOC</td><td>5-15 days (parallel with newspaper period)</td></tr>
<tr><td>File URC-1 + SPICe+ + All Forms</td><td>Within 30 days of name reservation</td></tr>
<tr><td>ROC/CRC Processing + Certificate of Incorporation</td><td>15-25 business days</td></tr>
<tr><td>Registrar of Firms Dissolution</td><td>7-15 days post-COI</td></tr>
<tr><td>Post-Conversion (GST, PAN, Bank, Compliance)</td><td>15-30 days post-COI</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> URC-1 and SPICe+ are processed by CRC/ROC Pune on mca.gov.in. Newspaper ad must be in Pune-district English daily and Marathi newspaper. The 21-day objection period is mandatory and cannot be shortened. Post-conversion dissolution filed with Registrar of Firms, Pune (physical filing). Total: 45-65 days for conversion + 15-30 days for post-conversion = 60-90 days end-to-end. Plan backwards from any external deadline (bank loan, investor, contract).</p>

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
            <h2 class="section-title">Why Choose Patron for Partnership to Pvt Ltd in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office at Wagholi</h3><p>Newspaper coordination (Pune English + Marathi dailies), Registrar of Firms liaison, stamp paper procurement done locally. 40 min from Camp, Deccan, MIDC, Koregaon Park.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3>Family Business Expertise</h3><p>We understand Pune family partnership dynamics: capital account complexities, goodwill valuation, succession considerations, and structuring that preserves family harmony.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Tax-Neutral Conversion</h3><p>CA team structures every conversion to comply with Section 47(xiii) conditions, minimising capital gains on goodwill, revalued assets, and accumulated profits.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>CA + CS Combined Team</h3><p>CS for URC-1, SPICe+, MOA/AOA, ROC filings. CA for tax planning, capital structuring, valuation, compliance transition. Both in Pune under one roof.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
<p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses. From Camp trading families to MIDC manufacturers, Patron manages partnership-to-company conversions with tax planning and compliance setup. Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 366 Conversion vs Fresh Incorporation</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Section 366 Conversion</th><th>Fresh Incorporation + Transfer</th></tr></thead>
                    <tbody>
                        <tr><td>Asset Transfer</td><td>Automatic by operation of law (S.374)</td><td>Manual via business transfer agreement; stamp duty</td></tr>
<tr><td>Contracts</td><td>Continue automatically in company name</td><td>Require assignment/novation for each contract</td></tr>
<tr><td>GST</td><td>GSTIN can be migrated</td><td>New GSTIN; old cancelled</td></tr>
<tr><td>Tax Treatment</td><td>Conditional exemption under S.47(xiii)</td><td>Stamp duty + capital gains (unless slump sale)</td></tr>
<tr><td>Timeline</td><td>45-65 days</td><td>15-20 days (incorporation) + weeks for transfer</td></tr>
<tr><td>Business Continuity</td><td>Seamless - no disruption</td><td>Gap period during transfer</td></tr>

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
            <h2 class="section-title">Related Services for Pune Businesses</h2>
            <div class="content-text">
                
                <p>Pune businesses converting from partnership often need:</p>
<ul style="list-style:disc;padding-left:20px;"><li style="margin-bottom:12px;padding:8px 0;"><a href="/private-limited-company-compliance/pune">Pvt Ltd Company Compliance in Pune</a> - Post-conversion annual compliance</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/private-limited-company-registration/pune">Private Limited Company Registration in Pune</a> - Fresh incorporations</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/issue-of-shares/pune">Issue of Shares in Pune</a> - Post-conversion share allotments</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/accounting-services">Accounting Services</a> - Year-round compliance</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Section 366:</strong> Entities with 2+ members can register as a company. Partnership firms eligible. Fewer than 7 members = private company.</p>
<p><strong>Section 374:</strong> Auto-transfer of all property, assets, liabilities, contracts, legal proceedings by operation of law. Firm deemed dissolved.</p>
<p><strong>Form URC-1:</strong> Conversion application. CA-certified A&L statement (within 30 days), partner consent, creditor NOC, newspaper ad copies.</p>
<p><strong>URC-2:</strong> Newspaper ad in English + Marathi. 21 clear days for objections. Mandatory.</p>
<p><strong>Section 47(xiii) IT Act:</strong> Conditional capital gains exemption: all assets/liabilities transferred, partners hold minimum voting shares, no consideration other than shares.</p>
<p><strong>Portals:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3</a> | <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax</a></p>
<p><strong>ROC Pune:</strong> PMT Building, Shivaji Nagar, Pune 411005. <strong>Registrar of Firms:</strong> Pune.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Partnership to Private Limited in Pune</h2>
                    <p class="faq-expanded__lead">Common questions about converting partnership firms to Pvt Ltd companies, Section 366, tax implications, and post-conversion compliance</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Partnership to Private Limited in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to convert a partnership firm to Pvt Ltd in Pune?</h3>
                        <div class="faq-expanded__a"><p>Obtain unanimous partner consent. Reserve name via RUN (Private Limited suffix). Publish newspaper ad (URC-2) in English and Marathi Pune newspapers; wait 21 clear days. Obtain creditor NOC. File URC-1 with SPICe+, e-MOA, e-AOA, AGILE-PRO, and supporting documents. ROC issues Certificate of Incorporation. Dissolve firm with Registrar of Firms, Pune. Update GST, PAN, bank.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can an unregistered partnership firm convert to Pvt Ltd?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 366 allows any entity with 2+ members to register as a company. Unregistered firms submit notarised deed, financial records, and evidence of existence (bank statements, IT returns, GST registration, contracts). Documentation requirements are more extensive. Registering the deed before conversion simplifies the process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happens to existing contracts and licences?</h3>
                        <div class="faq-expanded__a"><p>Under Section 374, all contracts, legal proceedings, rights, and obligations automatically transfer to the new Pvt Ltd by operation of law. No separate assignment or novation needed. However, GST, PAN, bank mandates, and government licences must be updated with the new company name and CIN. Clients and vendors should be formally notified.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is the conversion tax-neutral?</h3>
                        <div class="faq-expanded__a"><p>Can be structured as tax-neutral under Section 47(xiii) of the Income Tax Act. Conditions: all assets and liabilities transferred, former partners hold minimum percentage of voting power for prescribed period, no consideration other than shares received. Professional tax planning before conversion is essential to ensure compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does the conversion take?</h3>
                        <div class="faq-expanded__a"><p>45-65 business days for conversion: 1-3 days name reservation, 21 clear days newspaper objection period, 15-25 days ROC processing. Post-conversion compliance (GST, PAN, bank, Registrar of Firms dissolution) adds 15-30 days. Total end-to-end: 60-90 days. Start at least 90 days before any external deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What compliance changes after conversion?</h3>
                        <div class="faq-expanded__a"><p>Partnership compliance (IT return, GST if registered, minimal formalities) is replaced by Pvt Ltd compliance: mandatory statutory audit, AGM, AOC-4/MGT-7 filing, ADT-1, DIR-3 KYC, minimum 4 board meetings/year, ITR-6, quarterly TDS returns, Maharashtra PT. Annual cost increases from Rs 5,000-15,000 to Rs 25,000-1,00,000 - offset by limited liability and growth opportunities.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Partnership firm ko Pvt Ltd mein kaise convert karein?</strong> Sab partners ki consent lo > Naam reserve karo (Private Limited lagao) > Newspaper ad do (English + Marathi, 21 din wait) > Creditor NOC > URC-1 + SPICe+ file karo > ROC se COI milega > Registrar of Firms pe firm dissolve karo > GST, PAN, bank update karo.</p>
<p><strong>Kitna time lagta hai?</strong> 45-65 din conversion + 15-30 din post-conversion = total 60-90 din.</p>
<p><strong>Unlimited liability se limited liability kaise milegi?</strong> Partnership mein sab personal assets exposed hain. Pvt Ltd mein liability sirf share capital tak limited hai. Conversion ke baad personal assets safe.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Convert Before Unlimited Liability Costs You Everything</h2>
            <div class="content-text">
                
                <p>Every day your Pune partnership operates, every partner's <strong>personal assets - home, savings, investments</strong> - are exposed to business risks. A single large contract dispute or loan default can result in personal bankruptcy.</p>
<p><strong>The conversion cost (Rs 15,000-50,000) is a one-time investment that permanently limits liability. Additionally, the 25.17% Pvt Ltd tax rate vs 30%+ partnership rate saves Rs 2.5-4 lakh annually at Rs 50 lakh profit. Over 5 years, tax savings alone exceed conversion cost many times. Convert now - every year of delay costs money and exposes personal wealth.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Partnership to Pvt Ltd Conversion in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Partnership to Private Limited conversion is a transformative corporate action for Pune businesses - whether it is a Camp trading family formalising governance, an MIDC manufacturer gaining institutional credibility, a Deccan professional partnership structuring succession, or a family business attracting its first external investor.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi provides dedicated conversion services - from partner consent and capital structuring to newspaper coordination, URC-1 + SPICe+ filing, tax planning, Registrar of Firms dissolution, and first-year Pvt Ltd compliance setup.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">With 15+ years of experience, 10,000+ businesses served, and a 4.9 Google rating, Patron Accounting LLP is a trusted CA and CS firm for corporate compliance across Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Partnership%20to%20Pvt%20Ltd%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Partnership%20to%20Pvt%20Ltd%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Partnership%20to%20Pvt%20Ltd%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Partnership to Pvt Ltd Conversion Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides partnership to Pvt Ltd conversion in 4 major cities.</p>
        
       <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
    </div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end business compliance for Pune</div><div class="pa-cross-grid">
        <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a>
    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on Partnership to Private Limited in Pune is reviewed semi-annually. Content covers Companies Act 2013 Sections 366-374, Companies (Authorised to Register) Rules 2014, Form URC-1, SPICe+ (INC-32), URC-2 newspaper advertisement (English + Marathi, 21 clear days), Section 47(xiii) IT Act tax neutrality, Section 374 auto-transfer, Registrar of Firms Pune dissolution, and ROC Pune jurisdiction. Freshness Tier 2.</p>
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






<!-- ============================================
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

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
