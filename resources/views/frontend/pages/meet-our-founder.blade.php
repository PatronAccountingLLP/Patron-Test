@extends('layouts.app')

@section('title', 'Meet Our Founder — CA Sundram Gupta | Patron Accounting LLP')

@push('styles')
<meta name="robots" content="index, follow">
<meta name="description" content="Meet CA Sundram Gupta — Founder of Patron Accounting LLP. A Chartered Accountant & ACCA with 15+ years of experience across equity research, insurance finance, and SME accounting. Based in Pune, serving businesses across India.">
<link rel="canonical" href="/meet-our-founder">
<meta property="og:title" content="Meet Our Founder — CA Sundram Gupta | Patron Accounting LLP">
<meta property="og:description" content="Meet CA Sundram Gupta — Founder of Patron Accounting LLP. A Chartered Accountant & ACCA with 15+ years of experience across equity research, insurance finance, and SME accounting.">
<meta property="og:url" content="/meet-our-founder">
<meta property="og:type" content="website">
<meta property="og:image" content="/images/site-logo.svg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Meet Our Founder — CA Sundram Gupta | Patron Accounting LLP">
<meta name="twitter:description" content="Meet CA Sundram Gupta — Founder of Patron Accounting LLP. A Chartered Accountant &amp; ACCA with 15+ years of experience across equity research, insurance finance, and SME accounting.">
<meta name="twitter:image" content="/images/site-logo.svg">
<meta http-equiv="content-language" content="en-IN">
@endpush

@push('scripts-head')
<script type="application/ld+json">
    {"@context":"https://schema.org","@type":"Person","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","worksFor":{"@type":"Organization","name":"Patron Accounting LLP","url":"/"},"alumniOf":[{"@type":"EducationalOrganization","name":"<a href="https://www.icai.org" target="_blank" rel="noopener" style="color:inherit;text-decoration:underline dotted;">The Institute of Chartered Accountants of India (ICAI)</a>"},{"@type":"EducationalOrganization","name":"Association of Chartered Certified Accountants (ACCA)"},{"@type":"EducationalOrganization","name":"Panjab University"}],"knowsAbout":["Chartered Accountancy","Financial Modeling","Equity Research","GST Compliance","Audit","Tax Advisory","SME Finance"],"address":{"@type":"PostalAddress","addressLocality":"Pune","addressRegion":"Maharashtra","addressCountry":"IN"},"sameAs":["https://www.linkedin.com/in/ca-sundram-gupta/","/","/about-us"]}
    </script>
<script type="application/ld+json">
    {"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Meet Our Founder","item":"/meet-our-founder"}]}
    </script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebPage","name":"Meet Our Founder — CA Sundram Gupta","url":"/meet-our-founder","description":"Meet CA Sundram Gupta — Founder of Patron Accounting LLP. A CA and ACCA with 15+ years of experience.","dateModified":"2026-02-28","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","name":"Patron Accounting","url":"/"}}
</script>
@endpush

@section('content')
<main>

<!-- BREADCRUMB -->
{{-- <nav aria-label="Breadcrumb" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
    <div style="max-width:1140px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;">
            <li style="display:flex;align-items:center;gap:8px;"><a href="/" style="color:var(--text-muted);text-decoration:none;font-weight:500;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>Home</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li>
            <li><span style="color:var(--orange);font-weight:600;">Meet Our Founder</span></li>
        </ol>
    </div>
</nav> --}}

<!-- HERO -->
<section class="founder-hero">
    <div class="founder-hero-inner">
        <div class="founder-intro">
            <div class="founder-avatar">
                <span class="founder-avatar-initials"> <img src="{{ asset('images/our-founder-profile.jpeg') }}" width="175px" height="175px" style="border-radius:50%;"> </span>
                <div class="founder-avatar-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></div>
            </div>
            <div class="founder-text">
                <h1>CA <span>Sundram Gupta</span></h1>
                <p class="founder-designation">Founder & Managing Partner, Patron Accounting LLP</p>
                <div class="founder-creds">
                    <span class="founder-cred"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9.75 3 12 0v-5"/></svg>Chartered Accountant (ICAI)</span>
                    <span class="founder-cred"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>ACCA (UK)</span>
                    <span class="founder-cred"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Pune, India</span>
                    <span class="founder-cred"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>15+ Years Experience</span>
                </div>
                <div class="founder-social">
                    <a href="https://www.linkedin.com/in/ca-sundram-gupta/" target="_blank" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                    <a href="mailto:sundram@patronaccounting.com" aria-label="Email"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></a>
                    <a href="https://wa.me/919459456700" target="_blank" aria-label="WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- AT A GLANCE - AEO Extractable Bio -->
<section style="background:var(--orange-lighter,#FFF9F5);padding:24px 32px;border-bottom:1px solid var(--gray-200,#E5E7EB);">
    <div style="max-width:1140px;margin:0 auto;">
        <p style="font-size:13px;font-weight:600;color:var(--orange,#E8712C);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px;">At a Glance</p>
        <p style="font-size:15px;line-height:1.8;color:var(--text-secondary,#4B5563);margin:0;">CA Sundram Gupta is the Founder &amp; Managing Partner of <strong>Patron Accounting LLP</strong>. A Chartered Accountant (ICAI) and ACCA (UK) with <strong>15+ years of experience</strong> across equity research (CRISIL), insurance finance (Bajaj Allianz), and CA practice. Since founding Patron in <strong>July 2019</strong>, the firm has served <strong>25,000+ businesses</strong> from offices in Pune, Mumbai, Delhi, and Gurugram — rated <strong>4.9★ on Google</strong> across 446 reviews.</p>
    </div>
</section>

<!-- ABOUT -->
<section class="content-section" id="about-section">
    <div class="content-container">
        <span class="section-eyebrow">The Story</span>
        <h2 class="section-title">From Corporate Finance to Building India's Most Accessible CA Firm</h2>
        <div class="content-text">
            <p>CA Sundram Gupta didn't start Patron Accounting in a conference room. He started it after seeing the same problem over and over — small business owners in India struggling to find reliable, affordable, and responsive chartered accountants who actually cared about their business.</p>
            <p>Before founding Patron in <strong>July 2019</strong>, Sundram spent over a decade in some of India's most respected financial institutions. He began his career in <strong>equity research at <a href="https://www.crisil.com" target="_blank" rel="noopener" style="color:inherit;text-decoration:underline dotted;">CRISIL</a></strong>, one of India's leading credit rating agencies, where he developed deep analytical skills in financial modelling, market research, and valuation. He then moved to <strong><a href="https://www.bajajallianzlife.com" target="_blank" rel="noopener" style="color:inherit;text-decoration:underline dotted;">Bajaj Allianz Life Insurance</a></strong> as Finance Manager, where he oversaw financial operations, regulatory compliance, and strategic planning for one of India's largest life insurance companies.</p>
            <p>But corporate life, despite its comfort, left him wanting more. He saw that while large corporations had access to the best financial minds, <strong>small and medium businesses — the backbone of India's economy — were left behind</strong>. Business owners were paying too much for too little, dealing with unresponsive accountants, and losing sleep over compliance deadlines they didn't even understand.</p>
            <p>That's what led to Patron. Sundram envisioned a firm that would combine corporate-grade financial expertise with the personal attention of a family accountant. A firm where a first-generation entrepreneur in Pune would get the same quality of service as a listed company in Mumbai.</p>
        </div>

        <div class="founder-quote">
            <p>I believe every business owner in India deserves a CA who picks up the phone, explains things in plain language, and genuinely cares whether their business succeeds or fails. That's not a luxury — it should be the standard.</p>
            <cite>— CA Sundram Gupta, Founder</cite>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="content-section" id="impact-section">
    <div class="content-container">
        <span class="section-eyebrow">Impact</span>
        <h2 class="section-title">Patron by the Numbers</h2>
        <div class="stat-row">
            <div class="stat-card"><div class="stat-number">25,000+</div><div class="stat-label">Businesses Served</div></div>
            <div class="stat-card"><div class="stat-number">50+</div><div class="stat-label">Team Members</div></div>
            <div class="stat-card"><div class="stat-number">4</div><div class="stat-label">Offices Across India</div></div>
            <div class="stat-card"><div class="stat-number">100+</div><div class="stat-label">Services Offered</div></div>
        </div>
    </div>
</section>

<!-- CAREER JOURNEY -->
<section class="content-section" id="journey-section">
    <div class="content-container">
        <span class="section-eyebrow">Career Journey</span>
        <h2 class="section-title">Professional Timeline</h2>

        <div class="timeline">
            <div class="timeline-item current">
                <div class="timeline-dot"></div>
                <div class="timeline-year">July 2019 — Present</div>
                <div class="timeline-role">Founder & Managing Partner</div>
                <div class="timeline-org">Patron Accounting LLP, Pune</div>
                <div class="timeline-desc">Founded and scaled a full-service chartered accountancy firm serving 25,000+ businesses across India. Built a team of 50+ professionals offering registration, tax, audit, accounting, payroll, and compliance services from offices in Pune, Mumbai, Delhi, and Gurugram.</div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">September 2015 — June 2019</div>
                <div class="timeline-role">Finance Manager</div>
                <div class="timeline-org">Bajaj Allianz Life Insurance Co. Ltd.</div>
                <div class="timeline-desc">Managed financial operations, regulatory reporting, and strategic planning for one of India's largest private life insurance companies. Led finance process automation initiatives resulting in significant time savings.</div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">March 2011 — January 2015</div>
                <div class="timeline-role">Equity Research Analyst</div>
                <div class="timeline-org">CRISIL Limited (S&P Global Company)</div>
                <div class="timeline-desc">Conducted in-depth equity research and market analysis at India's premier credit rating agency. Developed expertise in financial modelling, valuation, and sector-specific analysis across multiple industries.</div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">October 2009 — February 2011</div>
                <div class="timeline-role">Assistant Portfolio Manager</div>
                <div class="timeline-org">Jaypee Capital Services Ltd.</div>
                <div class="timeline-desc">Supported portfolio management activities for institutional and HNI clients. Gained hands-on experience in investment analysis, asset allocation, and financial advisory services.</div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">2005 — 2008</div>
                <div class="timeline-role">Chartered Accountancy (CA)</div>
                <div class="timeline-org"><a href="https://www.icai.org" target="_blank" rel="noopener" style="color:inherit;text-decoration:underline dotted;">The Institute of Chartered Accountants of India (ICAI)</a></div>
                <div class="timeline-desc">Completed CA qualification from ICAI — one of the most rigorous professional examinations in the world with a pass rate of under 5%. Later also earned the <a href="https://www.accaglobal.com" target="_blank" rel="noopener" style="color:inherit;text-decoration:underline dotted;">ACCA (UK)</a> qualification in 2015, adding a global perspective to his practice.</div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-year">Education</div>
                <div class="timeline-role">Bachelor's Degree</div>
                <div class="timeline-org">Panjab University | DAV Public School</div>
                <div class="timeline-desc">Completed undergraduate education from Panjab University. Schooled at DAV Public School — building the foundation for a career in finance and accountancy.</div>
            </div>
        </div>
    </div>
</section>

<!-- EXPERTISE -->
<section class="content-section" id="expertise-section">
    <div class="content-container">
        <span class="section-eyebrow">Expertise</span>
        <h2 class="section-title">Areas of Specialisation</h2>
        <div class="expertise-grid">
            <div class="expertise-card"><div class="expertise-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div><h4>Statutory & Tax Audit</h4><p>Audit planning, execution, and reporting under Companies Act, 2013 and Income Tax Act, 1961.</p></div>
            <div class="expertise-card"><div class="expertise-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h4>Tax Advisory & Compliance</h4><p>Income tax planning, ITR filing, TDS/TCS compliance, tax structuring for individuals and businesses.</p></div>
            <div class="expertise-card"><div class="expertise-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg></div><h4>GST Strategy & Returns</h4><p>GST registration, return filing (GSTR-1, 3B, 9, 9C), refund claims, and advisory for complex GST scenarios.</p></div>
            <div class="expertise-card"><div class="expertise-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg></div><h4>Financial Modelling & Valuation</h4><p>DCF analysis, comparable company analysis, and financial forecasting — skills built at CRISIL and refined over 15+ years.</p></div>
            <div class="expertise-card"><div class="expertise-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div><h4>Company Law & ROC</h4><p>Company incorporation, LLP formation, ROC compliance (AOC-4, MGT-7, DIR-3 KYC), and corporate restructuring.</p></div>
            <div class="expertise-card"><div class="expertise-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h4>Virtual CFO for SMEs</h4><p>Cash flow management, MIS dashboards, budgeting, investor readiness, and strategic finance advisory for growing businesses.</p></div>
        </div>
    </div>
</section>

<!-- PHILOSOPHY / VALUES -->
<section class="content-section" id="values-section">
    <div class="content-container">
        <span class="section-eyebrow">What We Stand For</span>
        <h2 class="section-title">The Patron Philosophy</h2>
        <div class="content-text"><p>Every decision at Patron is guided by a simple question: <strong>"Does this make life easier for the business owner?"</strong> Here are the values Sundram built the firm on.</p></div>

        <div class="values-row">
            <div class="value-card"><span class="value-emoji">🎯</span><h4>Kaizen (Continuous Improvement)</h4><p>We adopt the Japanese philosophy of small, positive, incremental changes — in our processes, technology, and client service — every single day.</p></div>
            <div class="value-card"><span class="value-emoji">📞</span><h4>Accessibility First</h4><p>Your CA should pick up the phone. Every client gets a dedicated point of contact who responds within hours, not days.</p></div>
            <div class="value-card"><span class="value-emoji">🔒</span><h4>Trust & Transparency</h4><p>No hidden fees. No surprise invoices. Every engagement comes with a clear scope, timeline, and cost — upfront.</p></div>
        </div>

        <div class="values-row">
            <div class="value-card"><span class="value-emoji">⚡</span><h4>Tech-Powered Compliance</h4><p>We use Zoho Books, Tally Prime, automated workflows, and Python-based analytics to eliminate manual errors and speed up delivery.</p></div>
            <div class="value-card"><span class="value-emoji">🤝</span><h4>Client as Partner</h4><p>We don't just file your returns — we help you understand your numbers, plan your taxes, and grow your business.</p></div>
            <div class="value-card"><span class="value-emoji">🌱</span><h4>SME-First Mindset</h4><p>Every service, pricing model, and process at Patron is designed for small and medium businesses — not afterthought-adapted from large enterprise templates.</p></div>
        </div>
    </div>
</section>


    <div style="text-align:center;padding:12px;font-size:12px;color:var(--text-muted,#6B7280);">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        Last updated: 28 February 2026
    </div>



<!-- CLIENT VOICES - Review Quotes -->
<section class="content-section" id="client-voices">
    <div class="content-container">
        <span class="section-eyebrow">Client Voices</span>
        <h2 class="section-title">What Our Clients Say</h2>
        <div class="quotes-grid">
            <div class="quote-card">
                <div class="quote-stars" style="display:flex;gap:1px;margin-bottom:8px;"><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                <p>I have been taking services of Patron Accounting from 5 years and found them highly professional and the best people for all taxation related work.</p>
                <div class="quote-author"><strong>Ayushi Garg</strong> <span>· Google Review, Gurugram</span></div>
            </div>
            <div class="quote-card">
                <div class="quote-stars" style="display:flex;gap:1px;margin-bottom:8px;"><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                <p>They took minimum time to do the calculations and I was really impressed by their acumen. And it's not expensive at all.</p>
                <div class="quote-author"><strong>Rajib Dutta</strong> <span>· Google Review, Pune</span></div>
            </div>
            <div class="quote-card">
                <div class="quote-stars" style="display:flex;gap:1px;margin-bottom:8px;"><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                <p>The Patron Team and Sai are highly professional, knowledgeable, and prompt in resolving all my queries. They guided me through the entire process with clarity.</p>
                <div class="quote-author"><strong>Gaurav</strong> <span>· Google Review, Pune</span></div>
            </div>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="content-section" style="background:var(--blue)!important;">
    <div class="content-container" style="text-align:center;">
        <h2 style="color:#fff!important;font-size:clamp(26px,3.5vw,36px);font-weight:800;margin-bottom:16px;">Work Directly With CA Sundram Gupta</h2>
        <p style="color:rgba(255,255,255,0.8);font-size:16px;max-width:550px;margin:0 auto 32px;line-height:1.7;">Whether you need a one-time consultation, long-term accounting support, or a trusted advisor for your business — we're here to help.</p>
        <div style="display:flex;gap:14px;flex-wrap:wrap;justify-content:center;">
            <a href="https://wa.me/919459456700?text=Hi%20CA%20Sundram%2C%20I%20would%20like%20to%20discuss%20my%20business%20requirements%20with%20you." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;"><svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>WhatsApp CA Sundram</a>
            <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;border:1.5px solid rgba(255,255,255,0.3);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>Call +91 945 945 6700</a>
            <a href="mailto:sundram@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;border:1.5px solid rgba(255,255,255,0.3);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email Sundram</a>
        </div>
    </div>
</section>

</main>



<!-- Google Rating Badge -->
<div class="google-rating-badge">
    <svg class="grb-icon" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC04" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
    <div>
        <div class="grb-stars" style="display:flex;gap:2px;"><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;opacity:0.7;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="grb-text"><strong>4.8</strong> out of 5 · Based on <strong>446 Google Reviews</strong> across 4 offices</div>
    </div>
</div>


<!-- OFFICE STRIP -->

<!-- OFFICE STRIP -->
<div class="office-locations-strip">
    <div class="ols-container">
        <span class="ols-label">📍 Our Offices</span>
        <div class="ols-offices">
            <a href="https://www.google.com/maps/place/?q=place_id:ChIJV6BM7FnBwjsRyyAfaIsfMqM" target="_blank" class="ols-office active">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Pune
            </a>
            <a href="https://www.google.com/maps/place/?q=place_id:ChIJ83f7WkHP5zsRUEuc4_l1RVw" target="_blank" class="ols-office">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Mumbai
            </a>
            <a href="https://www.google.com/maps/place/?q=place_id:ChIJr804ewcBDTkRBlaNBTnipcY" target="_blank" class="ols-office">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Delhi
            </a>
            <a href="https://www.google.com/maps/place/?q=place_id:ChIJt0L8I5QZDTkRiRCJ6rXQj6g" target="_blank" class="ols-office">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Gurugram
            </a>
        </div>
        <a href="/about-us" class="ols-trust-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Why Trust Us
        </a>
    </div>
</div>

<!-- WHATSAPP BAR -->
<div class="whatsapp-sticky-bar" id="whatsappStickyBar">
    <svg class="wsb-icon" viewBox="0 0 24 24" fill="currentColor">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
    <span class="wsb-text">
        Join 5,000+ business owners. <span>Get compliance due date alerts on WhatsApp.</span>
    </span>
    <a href="https://wa.me/919459456700" target="_blank" class="wsb-btn">Join Free →</a>
    <button class="wsb-close" onclick="document.getElementById('whatsappStickyBar').style.display='none'" aria-label="Close">×</button>
</div>

<script>
/* Accordion — pure JS fallback that always works */
document.addEventListener('DOMContentLoaded', function() {
    /* Initialize collapsed panels */
    document.querySelectorAll('.accordion-collapse').forEach(function(el) {
        if (!el.classList.contains('show')) {
            el.style.display = 'none';
        }
    });
    
    document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function(btn) {
        btn.style.cursor = 'pointer';
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var targetSel = btn.getAttribute('data-bs-target');
            var target = document.querySelector(targetSel);
            if (!target) return;
            
            var parentSel = btn.getAttribute('data-bs-parent') || btn.closest('.accordion');
            var parent = typeof parentSel === 'string' ? document.querySelector(parentSel) : parentSel;
            var icon = btn.querySelector('.accordion-icon');
            var isOpen = target.style.display !== 'none';
            
            /* Close siblings */
            if (parent) {
                parent.querySelectorAll('.accordion-collapse').forEach(function(panel) {
                    if (panel !== target) {
                        panel.style.display = 'none';
                        panel.classList.remove('show');
                        var sib = panel.closest('.accordion-item');
                        if (sib) {
                            var sibBtn = sib.querySelector('[data-bs-toggle="collapse"]');
                            if (sibBtn) {
                                sibBtn.classList.add('collapsed');
                                var si = sibBtn.querySelector('.accordion-icon');
                                if (si) si.style.transform = 'rotate(0deg)';
                            }
                        }
                    }
                });
            }
            
            /* Toggle */
            if (isOpen) {
                target.style.display = 'none';
                target.classList.remove('show');
                btn.classList.add('collapsed');
                if (icon) icon.style.transform = 'rotate(0deg)';
            } else {
                target.style.display = 'block';
                target.classList.add('show');
                btn.classList.remove('collapsed');
                if (icon) icon.style.transform = 'rotate(45deg)';
            }
        });
    });
});
</script>

<style>

        :root{--orange:#E8712C;--orange-dark:#D4621F;--orange-light:#FEF4EE;--orange-lighter:#FFF9F5;--blue:#1B365D;--blue-light:#2A4A7A;--blue-lighter:#F4F7FB;--white:#FFFFFF;--cream:#FDFCFB;--gray-50:#F9FAFB;--gray-100:#F3F4F6;--gray-200:#E5E7EB;--gray-300:#D1D5DB;--gray-400:#9CA3AF;--gray-500:#6B7280;--gray-600:#4B5563;--gray-700:#374151;--text-primary:#1F2937;--text-secondary:#4B5563;--text-muted:#6B7280;--green:#10B981;--gold:#F59E0B;--shadow-sm:0 1px 2px rgba(0,0,0,0.04);--shadow-md:0 4px 12px rgba(0,0,0,0.06);--shadow-lg:0 12px 32px rgba(0,0,0,0.08);--radius-sm:8px;--radius-md:12px;--radius-lg:16px;--radius-xl:24px}
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        html{scroll-behavior:smooth;-webkit-font-smoothing:antialiased}
        body{font-family:'Barlow',-apple-system,BlinkMacSystemFont,sans-serif;font-size:16px;line-height:1.6;color:var(--text-primary);background:var(--white)}
        h2{font-size:clamp(26px,3vw,32px);font-weight:800;color:var(--blue);margin-bottom:24px;line-height:1.25}
        h3{color:var(--blue);font-size:1.35rem;font-weight:700}
        p{color:var(--text-secondary)}
        a{color:var(--orange);text-decoration:none;font-weight:500;transition:color 0.2s}a:hover{color:var(--orange-dark)}

        /* HERO */
        .founder-hero{background:linear-gradient(135deg,var(--blue) 0%,#0F2440 100%);padding:64px 32px 56px;position:relative;overflow:hidden}
        .founder-hero::before{content:'';position:absolute;top:-25%;right:-10%;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,rgba(232,113,44,0.1) 0%,transparent 70%)}
        .founder-hero::after{content:'';position:absolute;bottom:-30%;left:-5%;width:400px;height:400px;border-radius:50%;background:radial-gradient(circle,rgba(16,185,129,0.06) 0%,transparent 70%)}
        .founder-hero-inner{max-width:1140px;margin:0 auto;position:relative;z-index:1}

        /* FOUNDER CARD */
        .founder-intro{display:flex;gap:40px;align-items:center}
        .founder-avatar{flex-shrink:0;width:180px;height:180px;border-radius:50%;background:linear-gradient(135deg,var(--orange),var(--orange-dark));display:flex;align-items:center;justify-content:center;box-shadow:0 16px 48px rgba(0,0,0,0.3);border:4px solid rgba(255,255,255,0.15);position:relative}
        .founder-avatar-initials{font-family:'Barlow',sans-serif;font-size:64px;font-weight:800;color:#fff;letter-spacing:2px}
        .founder-avatar-badge{position:absolute;bottom:4px;right:4px;width:44px;height:44px;background:var(--green);border-radius:50%;display:flex;align-items:center;justify-content:center;border:3px solid var(--blue);box-shadow:0 4px 12px rgba(16,185,129,0.4)}
        .founder-avatar-badge svg{width:22px;height:22px;color:#fff}
        .founder-text h1{font-family:'Barlow',sans-serif;font-weight:800;font-size:clamp(30px,4.5vw,44px);line-height:1.15;color:#fff;margin-bottom:8px}
        .founder-text h1 span{color:var(--orange)}
        .founder-designation{font-size:17px;color:rgba(255,255,255,0.7);margin-bottom:20px;font-weight:500}
        .founder-creds{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:24px}
        .founder-cred{display:inline-flex;align-items:center;gap:6px;padding:6px 14px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);border-radius:50px;font-size:12px;font-weight:600;color:rgba(255,255,255,0.85)}
        .founder-cred svg{width:14px;height:14px;color:var(--orange)}
        .founder-social{display:flex;gap:12px}
        .founder-social a{display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.15);color:rgba(255,255,255,0.8);transition:all 0.25s}
        .founder-social a:hover{background:var(--orange);border-color:var(--orange);color:#fff;transform:translateY(-2px)}
        .founder-social a svg{width:18px;height:18px}

        /* SECTIONS */
        .content-section{padding:64px 32px;background:var(--white)}.content-section:nth-child(even){background:var(--gray-50)}
        .content-container{max-width:1140px;margin:0 auto}
        .section-eyebrow{display:inline-flex;align-items:center;gap:8px;font-size:13px;font-weight:600;color:var(--orange);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px}
        .section-title{font-size:clamp(24px,3vw,30px);font-weight:800;color:var(--blue);margin-bottom:20px;line-height:1.25}
        .content-text{font-size:15px;line-height:1.85;color:var(--text-secondary);text-align:justify}
        .content-text p{margin-bottom:16px;text-align:justify}
        .content-text strong{color:var(--text-primary);font-weight:600}

        /* QUOTE */
        .founder-quote{background:var(--blue);border-radius:var(--radius-xl);padding:36px 40px;margin:32px 0;position:relative}
        .founder-quote::before{content:'\201C';position:absolute;top:16px;left:24px;font-size:72px;font-weight:800;color:var(--orange);opacity:0.3;line-height:1;font-family:Georgia,serif}
        .founder-quote p{font-size:18px;font-weight:500;color:rgba(255,255,255,0.92);line-height:1.75;margin:0 0 12px;font-style:italic;padding-left:20px;text-align:left}
        .founder-quote cite{display:block;padding-left:20px;font-size:13px;font-weight:600;color:var(--orange);font-style:normal}

        /* TIMELINE */
        .timeline{position:relative;margin:32px 0;padding-left:44px}
        .timeline::before{content:'';position:absolute;left:16px;top:0;bottom:0;width:2px;background:linear-gradient(to bottom,var(--orange),var(--blue))}
        .timeline-item{position:relative;margin-bottom:32px}
        .timeline-item:last-child{margin-bottom:0}
        .timeline-dot{position:absolute;left:-36px;top:4px;width:14px;height:14px;border-radius:50%;background:var(--orange);border:3px solid var(--white);box-shadow:0 0 0 3px var(--orange-light)}
        .timeline-item.current .timeline-dot{background:var(--green);box-shadow:0 0 0 3px #ECFDF5;width:16px;height:16px;left:-37px}
        .timeline-year{font-size:12px;font-weight:700;color:var(--orange);text-transform:uppercase;letter-spacing:1px;margin-bottom:4px}
        .timeline-role{font-size:16px;font-weight:700;color:var(--blue);margin-bottom:2px}
        .timeline-org{font-size:13px;font-weight:600;color:var(--text-muted);margin-bottom:6px}
        .timeline-desc{font-size:14px;color:var(--text-secondary);line-height:1.65}

        /* STATS ROW */
        .stat-row{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin:32px 0}
        .stat-card{background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:24px;text-align:center;transition:all 0.25s}
        .stat-card:hover{box-shadow:var(--shadow-md);border-color:var(--orange);transform:translateY(-2px)}
        .stat-number{font-size:clamp(28px,3.5vw,36px);font-weight:800;color:var(--orange);line-height:1.2;margin-bottom:4px}
        .stat-label{font-size:13px;font-weight:600;color:var(--text-muted)}

        /* EXPERTISE GRID */
        .expertise-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin:28px 0}
        .expertise-card{background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:22px;transition:all 0.25s}
        .expertise-card:hover{box-shadow:var(--shadow-md);border-color:var(--orange);transform:translateY(-2px)}
        .expertise-icon{width:44px;height:44px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:12px}
        .expertise-icon svg{width:22px;height:22px;color:var(--orange)}
        .expertise-card h4{font-size:14px;font-weight:700;color:var(--blue);margin-bottom:4px}
        .expertise-card p{font-size:12px;color:var(--text-muted);line-height:1.55;margin:0}

        /* VALUES */
        .values-row{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin:28px 0}
        .value-card{background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:24px;text-align:center;transition:all 0.25s}
        .value-card:hover{box-shadow:var(--shadow-md);border-color:var(--orange);transform:translateY(-2px)}
        .value-emoji{font-size:36px;margin-bottom:12px;display:block}
        .value-card h4{font-size:15px;font-weight:700;color:var(--blue);margin-bottom:6px}
        .value-card p{font-size:13px;color:var(--text-muted);line-height:1.6;margin:0}

        /* OFFICE STRIP + WA BAR */
        .office-locations-strip{background:var(--blue);padding:20px 32px;border-top:3px solid var(--orange)}
        .office-locations-strip .ols-container{max-width:1320px;margin:0 auto;display:flex;align-items:center;justify-content:center;gap:16px;flex-wrap:wrap}
        .office-locations-strip .ols-label{font-size:13px;font-weight:700;color:white;text-transform:uppercase;letter-spacing:0.5px}
        .office-locations-strip .ols-offices{display:flex;align-items:center;gap:24px;flex-wrap:wrap}
        .office-locations-strip .ols-office{display:flex;align-items:center;gap:6px;color:rgba(255,255,255,0.85);font-size:13px;font-weight:500;text-decoration:none;transition:color 0.2s}
        .office-locations-strip .ols-office:hover{color:var(--orange)}
        .office-locations-strip .ols-office svg{width:14px;height:14px;color:var(--orange)}
        .office-locations-strip .ols-office.active{color:white;font-weight:700}
        .office-locations-strip .ols-trust-link{margin-left:auto;display:flex;align-items:center;gap:6px;color:var(--orange);font-size:13px;font-weight:600;text-decoration:none}
        .office-locations-strip .ols-trust-link svg{width:14px;height:14px}
        .whatsapp-sticky-bar{position:fixed;bottom:0;left:0;right:0;background:#25D366;color:white;padding:10px 20px;display:flex;align-items:center;justify-content:center;gap:12px;z-index:999;box-shadow:0 -4px 16px rgba(0,0,0,0.15);transform:translateY(100%);animation:slideUpBar 0.5s ease 2s forwards}
        @keyframes slideUpBar{to{transform:translateY(0)}}
        .whatsapp-sticky-bar .wsb-icon{width:24px;height:24px}
        .whatsapp-sticky-bar .wsb-text{font-size:14px;font-weight:600}.whatsapp-sticky-bar .wsb-text span{font-weight:400;opacity:0.9}
        .whatsapp-sticky-bar .wsb-btn{background:white;color:#25D366;border:none;padding:6px 18px;border-radius:50px;font-size:13px;font-weight:700;text-decoration:none}
        .whatsapp-sticky-bar .wsb-close{background:none;border:none;color:white;font-size:20px;cursor:pointer;padding:0 4px;opacity:0.7}

        @media(max-width:768px){
            .content-section{padding:40px 16px}.founder-hero{padding:40px 16px 36px}
            .founder-intro{flex-direction:column;text-align:center;gap:24px}
            .founder-creds{justify-content:center}.founder-social{justify-content:center}
            .founder-avatar{width:140px;height:140px}.founder-avatar-initials{font-size:50px}
            .stat-row{grid-template-columns:repeat(2,1fr)}
            .expertise-grid,.values-row{grid-template-columns:1fr}
            .timeline{padding-left:36px}.timeline-dot{left:-28px}.timeline-item.current .timeline-dot{left:-29px}
            .founder-quote{padding:28px 24px}.founder-quote p{font-size:16px}
            .office-locations-strip .ols-container{flex-direction:column;gap:10px}.office-locations-strip .ols-trust-link{margin-left:0}
            .whatsapp-sticky-bar{padding:8px 12px;gap:8px}.whatsapp-sticky-bar .wsb-text{font-size:12px}.whatsapp-sticky-bar .wsb-text span{display:none}
        }
        @media(max-width:480px){.stat-row{grid-template-columns:1fr 1fr}.founder-hero h1{font-size:28px}}
        .content-section[id]{scroll-margin-top:80px}
    

/* ============================================
   RESPONSIVE FIXES FOR ADDED COMPONENTS
   ============================================ */

/* Google Rating Badge */
.google-rating-badge {
    display: flex; align-items: center; gap: 12px;
    background: #fff; border: 1px solid #E5E7EB; border-radius: 12px;
    padding: 12px 20px; max-width: 420px; margin: 24px auto 0;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
.google-rating-badge .grb-icon { width: 28px; height: 28px; flex-shrink: 0; }
.google-rating-badge .grb-text { font-size: 13px; color: #6B7280; line-height: 1.4; }
.google-rating-badge .grb-text strong { color: #1F2937; font-weight: 700; }

/* Quote Cards */
.quotes-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;
}
.quote-card {
    background: #fff; border: 1px solid #E5E7EB; border-radius: 12px;
    padding: 20px; position: relative; box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
.quote-card::before {
    content: open-quote; position: absolute; top: 8px; left: 16px;
    font-size: 48px; line-height: 1; color: #E8712C; opacity: 0.15; font-family: Georgia, serif;
}
.quote-card p { font-size: 14px; line-height: 1.7; color: #4B5563; margin-bottom: 12px; font-style: italic; padding-top: 8px; }
.quote-card .quote-author { display: flex; align-items: center; gap: 8px; font-size: 13px; flex-wrap: wrap; }
.quote-card .quote-author strong { color: #1F2937; }
.quote-card .quote-author span { color: #6B7280; }

/* Office Strip */
.office-locations-strip { background: #14365F; padding: 20px 32px; border-top: 3px solid #E8712C; }
.office-locations-strip .ols-container { max-width: 1320px; margin: 0 auto; display: flex; align-items: center; justify-content: center; gap: 16px; flex-wrap: wrap; }
.office-locations-strip .ols-label { font-size: 13px; font-weight: 700; color: white; text-transform: uppercase; letter-spacing: 0.5px; flex-shrink: 0; }
.office-locations-strip .ols-offices { display: flex; align-items: center; gap: 24px; flex-wrap: wrap; }
.office-locations-strip .ols-office { display: flex; align-items: center; gap: 6px; color: rgba(255,255,255,0.85); font-size: 13px; font-weight: 500; text-decoration: none; transition: color 0.2s; }
.office-locations-strip .ols-office:hover { color: #E8712C; }
.office-locations-strip .ols-office svg { width: 14px; height: 14px; color: #E8712C; flex-shrink: 0; }
.office-locations-strip .ols-office.active { color: white; font-weight: 700; }
.office-locations-strip .ols-trust-link { margin-left: auto; display: flex; align-items: center; gap: 6px; color: #E8712C; font-size: 13px; font-weight: 600; text-decoration: none; }
.office-locations-strip .ols-trust-link svg { width: 14px; height: 14px; }

/* WhatsApp Bar */
.whatsapp-sticky-bar { position: fixed; bottom: 0; left: 0; right: 0; background: #25D366; display: flex; align-items: center; justify-content: center; gap: 12px; padding: 10px 24px; z-index: 1000; box-shadow: 0 -2px 10px rgba(0,0,0,0.15); }
.whatsapp-sticky-bar .wsb-icon { width: 22px; height: 22px; fill: white; flex-shrink: 0; }
.whatsapp-sticky-bar .wsb-text { color: white; font-size: 13px; font-weight: 500; }
.whatsapp-sticky-bar .wsb-text span { font-weight: 400; }
.whatsapp-sticky-bar .wsb-btn { background: white; color: #25D366; padding: 6px 16px; border-radius: 50px; font-size: 13px; font-weight: 700; text-decoration: none; white-space: nowrap; }
.whatsapp-sticky-bar .wsb-close { background: none; border: none; color: white; font-size: 20px; cursor: pointer; padding: 0 4px; margin-left: 8px; }

/* ---- MOBILE 768px ---- */
@media (max-width: 768px) {
    .google-rating-badge { max-width: 100%; margin: 16px 16px 0; }
    .office-locations-strip { padding: 16px; }
    .office-locations-strip .ols-container { flex-direction: column; gap: 10px; }
    .office-locations-strip .ols-offices { justify-content: center; gap: 16px; }
    .office-locations-strip .ols-trust-link { margin-left: 0; }
    .whatsapp-sticky-bar { padding: 8px 16px; gap: 8px; }
    .whatsapp-sticky-bar .wsb-text span { display: none; }
}

/* ---- MOBILE 480px ---- */
@media (max-width: 480px) {
    .google-rating-badge { flex-direction: column; text-align: center; gap: 8px; padding: 16px; }
    .quotes-grid { grid-template-columns: 1fr; }
    .quote-card { padding: 16px; }
    .office-locations-strip .ols-offices { flex-direction: column; gap: 8px; }
    .whatsapp-sticky-bar .wsb-icon { width: 18px; height: 18px; }
    .whatsapp-sticky-bar .wsb-text { font-size: 12px; }
    .whatsapp-sticky-bar .wsb-btn { padding: 5px 12px; font-size: 12px; }
}


/* Client Review Quotes */
.client-quotes{margin-top:32px}
.client-quotes h3{font-size:clamp(18px,2.5vw,22px);font-weight:700;color:var(--blue,#1B365D);margin-bottom:20px;text-align:center}
.quotes-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px}
.quote-card{background:#fff;border:1px solid var(--gray-200,#E5E7EB);border-radius:var(--radius-md,12px);padding:20px;position:relative;box-shadow:0 2px 8px rgba(0,0,0,0.04)}
.quote-card::before{content:'"';position:absolute;top:8px;left:16px;font-size:48px;line-height:1;color:var(--orange,#E8712C);opacity:0.15;font-family:Georgia,serif}
.quote-card p{font-size:14px;line-height:1.7;color:var(--text-secondary,#4B5563);margin-bottom:12px;font-style:italic;padding-top:8px}
.quote-card .quote-author{display:flex;align-items:center;gap:8px;font-size:13px}
.quote-card .quote-author strong{color:var(--text-primary,#1F2937)}
.quote-card .quote-author span{color:var(--text-muted,#6B7280)}
.quote-card .quote-stars{display:flex;gap:1px;margin-bottom:8px}
.quote-card .quote-stars svg{width:12px;height:12px;fill:#FBBC04}
@media(max-width:640px){.quotes-grid{grid-template-columns:1fr}}


/* Google Rating Badge */
.google-rating-badge{display:flex;align-items:center;gap:12px;background:#fff;border:1px solid var(--gray-200);border-radius:var(--radius-md,12px);padding:12px 20px;max-width:420px;margin:24px auto 0;box-shadow:0 2px 8px rgba(0,0,0,0.04)}
.google-rating-badge .grb-icon{width:28px;height:28px;flex-shrink:0}
.google-rating-badge .grb-stars{display:flex;gap:2px}
.google-rating-badge .grb-stars svg{width:16px;height:16px;fill:#FBBC04}
.google-rating-badge .grb-text{font-size:13px;color:var(--text-muted,#6B7280);line-height:1.4}
.google-rating-badge .grb-text strong{color:var(--text-primary,#1F2937);font-weight:700}
@media(max-width:480px){.google-rating-badge{flex-direction:column;text-align:center;gap:8px;padding:16px}}

</style>
@endsection