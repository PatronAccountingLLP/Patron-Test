@extends('layouts.app')

@section('title', 'Refer & Earn | Earn Up to ₹2,000 Per Referral | Patron Accounting')

@push('styles')
<meta name="robots" content="index, follow">
<meta name="description" content="Refer a friend or business to Patron Accounting and earn up to ₹2,000 per successful referral. Share our CA, tax, GST, and compliance services — earn rewards every time someone signs up through your referral. Our fully digital, value-for-money services make it easy for your referrals to get started.">
<link rel="canonical" href="/refer-and-earn">
<meta property="og:title" content="Refer & Earn | Earn Up to ₹2,000 Per Referral | Patron Accounting">
<meta property="og:description" content="Refer a friend or business to Patron Accounting and earn up to ₹2,000 per successful referral. No limits on referrals.">
<meta property="og:url" content="/refer-and-earn">
<meta property="og:type" content="website">
<meta property="og:image" content="/images/site-logo.svg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Refer &amp; Earn | Earn Up to ₹2,000 | Patron Accounting">
<meta name="twitter:description" content="Refer a friend or business and earn up to ₹2,000 per successful referral.">
<meta name="twitter:image" content="/images/site-logo.svg">
<meta http-equiv="content-language" content="en-IN">
@endpush

@push('scripts-head')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Patron Accounting",
        "url": "/",
        "logo": "/images/site-logo.svg",
        "founder": { "@type": "Person", "name": "CA Sundram Gupta", "jobTitle": "Chartered Accountant" }
    }
    </script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Refer & Earn", "item": "/refer-and-earn" }
        ]
    }
    </script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            { "@type": "Question", "name": "How much can I earn per referral?", "acceptedAnswer": { "@type": "Answer", "text": "You can earn up to ₹2,000 per successful referral depending on the service the referred person purchases. Rewards range from ₹200 to ₹2,000 based on the service value." } },
            { "@type": "Question", "name": "Who can participate in the referral program?", "acceptedAnswer": { "@type": "Answer", "text": "Anyone can participate — existing clients, business owners, CAs, CSs, lawyers, freelancers, students, or anyone who knows someone in need of accounting, tax, or compliance services." } },
            { "@type": "Question", "name": "When do I receive my referral reward?", "acceptedAnswer": { "@type": "Answer", "text": "Referral rewards are credited within 7 business days after the referred person completes payment and the service engagement begins." } },
            { "@type": "Question", "name": "Is there a limit on how many people I can refer?", "acceptedAnswer": { "@type": "Answer", "text": "No, there is no limit. You can refer as many people as you want and earn rewards for each successful referral." } },
            { "@type": "Question", "name": "How do I track my referrals?", "acceptedAnswer": { "@type": "Answer", "text": "Once you submit a referral, our team confirms receipt via WhatsApp or email. You will be notified when the referred person makes a payment and your reward is processed." } }
        ]
    }
    </script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebPage","name":"Refer and Earn — Patron Accounting","url":"/refer-and-earn","description":"Earn up to Rs 2,000 per referral.","dateModified":"2026-02-28","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","name":"Patron Accounting","url":"/"}}
</script>
@endpush

@section('content')
<main>

<!-- ========================================
     BREADCRUMB NAVIGATION
     ======================================== -->


<!-- ========================================
     HERO SECTION
     ======================================== -->
<section class="refer-hero">
    <div class="refer-hero-inner">
        <div class="hero-badge">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            Referral Program
        </div>

        <h1>Refer a Friend.<br>Earn <span>Up to ₹2,000.</span></h1>

        <p class="hero-subtitle">
            Know someone who needs accounting, tax, registration, or compliance help? Refer them to Patron Accounting and earn real rewards — no limits on how many people you can refer.
        </p>

        <div class="hero-stats">
            <div class="hero-stat">
                <div class="hero-stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <div class="hero-stat-text">
                    <strong>Up to ₹2,000</strong>
                    <span>Per Referral</span>
                </div>
            </div>
            <div class="hero-stat">
                <div class="hero-stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <div class="hero-stat-text">
                    <strong>No Limit</strong>
                    <span>On Referrals</span>
                </div>
            </div>
            <div class="hero-stat">
                <div class="hero-stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <div class="hero-stat-text">
                    <strong>7 Days</strong>
                    <span>Reward Payout</span>
                </div>
            </div>
        </div>

        <div class="hero-cta-row">
            <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20refer%20someone%20to%20Patron%20Accounting.%20Please%20share%20the%20referral%20details." target="_blank" class="btn-hero-primary">
                <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                Refer on WhatsApp
            </a>
            <a href="tel:+919459456700" class="btn-hero-secondary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                Call +91 945 945 6700
            </a>
        </div>
    </div>
</section>

<!-- ========================================
     HOW IT WORKS
     ======================================== -->
<section class="content-section" id="how-it-works">
    <div class="content-container">
        
        <div style="background:linear-gradient(135deg,#FEF3C7,#FFF9F0);border:1px solid #F59E0B;border-radius:var(--radius-md,12px);padding:16px 20px;margin-bottom:24px;text-align:center;">
            <p style="font-size:14px;font-weight:700;color:#92400E;margin:0;">🔥 ITR Season Bonus: Refer someone for ITR filing (Jan–Jul) and earn rewards faster — most ITR filings are completed same day!</p>
        </div>
        <span class="section-eyebrow">Simple Process</span>
        <h2 class="section-title">How It Works</h2>
        <p class="content-text" style="margin-bottom:8px;">Earning referral rewards is simple. No sign-ups, no apps, no tracking codes — just share and earn.</p>

        <div class="steps-row">
            <div class="step-card-v2">
                <div class="step-num">1</div>
                <h4>Share the Contact</h4>
                <p>Tell your friend, family member, or business associate about Patron Accounting. Share our phone number, WhatsApp, or website link.</p>
                <div class="step-connector"></div>
            </div>
            <div class="step-card-v2">
                <div class="step-num">2</div>
                <h4>They Avail a Service</h4>
                <p>When the person you referred contacts us and completes a service purchase worth ₹1,000 or more, your referral is confirmed.</p>
                <div class="step-connector"></div>
            </div>
            <div class="step-card-v2">
                <div class="step-num">3</div>
                <h4>You Get Rewarded</h4>
                <p>Your referral reward is credited to your bank account or UPI within 7 business days of the referred person's payment.</p>
            </div>
        </div>

        <div class="highlight-box">
            <p><strong>Pro Tip:</strong> When referring someone, ask them to mention your name and mobile number while making the enquiry. This ensures your referral is tracked and your reward is credited correctly.</p>
        </div>
    </div>
</section>

<!-- ========================================
     REWARD STRUCTURE
     ======================================== -->
<section class="content-section" id="rewards-section">
    <div class="content-container">
        <span class="section-eyebrow">Reward Tiers</span>
        <h2 class="section-title">How Much Can You Earn?</h2>
        <div class="content-text">
            <p>Your referral reward depends on the value of the service the referred person purchases. The higher the service value, the higher your reward.</p>
        </div>

        
        <div style="background:var(--green,#10B981);color:#fff;padding:14px 20px;border-radius:var(--radius-md,12px);margin-bottom:20px;font-size:15px;font-weight:600;text-align:center;">
            💰 Earn ₹200 to ₹2,000 per referral depending on service value, plus a ₹1,000 quarterly bonus for 5+ referrals.
        </div>

        <div class="table-responsive-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Service Purchased by Referral</th>
                        <th>Service Value (Min.)</th>
                        <th>Your Referral Reward</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ITR Filing (Individual/Family), PAN/TAN Registration, GST Registration</td>
                        <td>₹1,000 – ₹2,999</td>
                        <td><strong style="color:var(--green);">₹200</strong></td>
                    </tr>
                    <tr>
                        <td>Trademark Registration, FSSAI, IEC, MSME</td>
                        <td>₹3,000 – ₹6,999</td>
                        <td><strong style="color:var(--green);">₹500</strong></td>
                    </tr>
                    <tr>
                        <td>Company Registration, LLP Incorporation, GST Returns (Annual)</td>
                        <td>₹7,000 – ₹14,999</td>
                        <td><strong style="color:var(--green);">₹1,000</strong></td>
                    </tr>
                    <tr>
                        <td>Accounting Retainer, Payroll, Audit, ROC Compliance, GST Cancellation Recovery</td>
                        <td>₹15,000+</td>
                        <td><strong style="color:var(--green);">₹2,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="highlight-box" style="background:#ECFDF5;border-color:var(--green);">
            <p><strong>Bonus:</strong> Refer <strong>5 or more successful clients</strong> in a calendar quarter, and earn an additional <strong>₹1,000 bonus</strong> on top of your individual referral rewards.</p>
        </div>
    </div>
</section>

<!-- ========================================
     WHO CAN REFER
     ======================================== -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <span class="section-eyebrow">Open to Everyone</span>
        <h2 class="section-title">Who Can Participate?</h2>
        <div class="content-text" style="margin-bottom:8px;">
            <p>Our referral program is open to everyone — you don't need to be an existing client to participate.</p>
        </div>

        <div class="who-grid">
            <div class="who-card">
                <div class="who-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <div>
                    <h4>Existing Clients</h4>
                    <p>Already using our services? Refer other businesses or individuals and earn on every successful conversion.</p>
                </div>
            </div>
            <div class="who-card">
                <div class="who-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
                </div>
                <div>
                    <h4>Business Owners</h4>
                    <p>Recommend us to fellow entrepreneurs, vendors, or partners who need registration, compliance, or accounting help.</p>
                </div>
            </div>
            <div class="who-card">
                <div class="who-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9.75 3 12 0v-5"/></svg>
                </div>
                <div>
                    <h4>Students & Freshers</h4>
                    <p>Commerce students, CA/CS aspirants — earn side income by referring businesses in your network.</p>
                </div>
            </div>
            <div class="who-card">
                <div class="who-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                </div>
                <div>
                    <h4>Freelancers & Consultants</h4>
                    <p>Lawyers, web developers, marketing consultants — your clients often need CA services. Refer and earn.</p>
                </div>
            </div>
            <div class="who-card">
                <div class="who-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <div>
                    <h4>CAs, CSs & Professionals</h4>
                    <p>Practicing professionals can refer overflow clients or services outside their scope. We handle it, you earn.</p>
                </div>
            </div>
            <div class="who-card">
                <div class="who-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </div>
                <div>
                    <h4>Friends & Family</h4>
                    <p>Anyone in your circle starting a business, filing taxes, or needing compliance support is a potential referral.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SERVICES YOU CAN REFER
     ======================================== -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <span class="section-eyebrow">100+ Services</span>
        <h2 class="section-title">What Can You Refer?</h2>
        <div class="content-text">
            <p>Every business and individual needs at least one of these services — which means every person in your network is a potential referral.</p>
        </div>

        
        <div style="background:var(--green,#10B981);color:#fff;padding:14px 20px;border-radius:var(--radius-md,12px);margin-bottom:20px;font-size:15px;font-weight:600;text-align:center;">
            💰 Earn ₹200 to ₹2,000 per referral depending on service value, plus a ₹1,000 quarterly bonus for 5+ referrals.
        </div>

        <div class="table-responsive-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Popular Services</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Business Registration</td>
                        <td>Private Limited Company, LLP, OPC, Partnership Firm, Proprietorship, Section 8 Company</td>
                    </tr>
                    <tr>
                        <td>Government Registration</td>
                        <td>GST Registration, PAN, TAN, IEC, FSSAI, PF/ESI, Udyam/MSME, Shop Act, DSC</td>
                    </tr>
                    <tr>
                        <td>Trademark & IPR</td>
                        <td>Trademark Registration, Trademark Search, Copyright, Patent</td>
                    </tr>
                    <tr>
                        <td>Tax Returns</td>
                        <td>Income Tax (ITR), GST Returns, TDS Returns, Tax Audit</td>
                    </tr>
                    <tr>
                        <td>Accounting & Payroll</td>
                        <td>Monthly Bookkeeping, Zoho Books Setup, Payroll Management, MIS Reports</td>
                    </tr>
                    <tr>
                        <td>Compliance & ROC</td>
                        <td>Annual Filing (AOC-4, MGT-7), Director KYC, Auditor Appointment, LLP Compliance</td>
                    </tr>
                    <tr>
                        <td>Audit & Advisory</td>
                        <td>Internal Audit, Stock Audit, Statutory Audit, Due Diligence</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ========================================


<!-- WHY CLIENTS RECOMMEND US -->
<section class="content-section" style="background:var(--gray-50,#F9FAFB);">
    <div class="content-container">
        <span class="section-eyebrow">Trusted by Businesses</span>
        <h2 class="section-title" style="text-align:center;">Why Clients Recommend Us</h2>
        <div class="quotes-grid">
            <div class="quote-card">
                <div class="quote-stars" style="display:flex;gap:1px;margin-bottom:8px;"><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                <p>They made the entire process of incorporation smooth and hassle-free. The team was very professional, knowledgeable, and always ready to assist me.</p>
                <div class="quote-author"><strong>Shahriar</strong> <span>· Google Review, Gurugram</span></div>
            </div>
            <div class="quote-card">
                <div class="quote-stars" style="display:flex;gap:1px;margin-bottom:8px;"><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="12" height="12" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                <p>Their professionalism, attention to detail, and timely communication made the entire process smooth and stress-free. Highly recommended!</p>
                <div class="quote-author"><strong>Subhendu Mishra</strong> <span>· Google Review, Pune</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     TERMS & CONDITIONS
     ======================================== -->
<section class="content-section" id="terms-section">
    <div class="content-container">
        <h2 class="section-title">Terms & Conditions</h2>
        <div class="content-text">
            <p><strong>1. Eligibility:</strong> The referral program is open to Indian residents aged 18 and above. Both existing and non-existing clients can participate.</p>

            <p><strong>2. Valid Referral:</strong> A referral is considered successful only when the referred person (a) contacts Patron Accounting mentioning the referrer's name, (b) purchases a service worth ₹1,000 or more, and (c) completes payment in full.</p>

            <p><strong>3. Self-Referrals:</strong> The referrer and the referred person cannot be the same individual. Referrals from the same household are allowed but subject to verification.</p>

            <p><strong>4. New Customers Only:</strong> The referred person must be a new customer of Patron Accounting who has not previously availed any of our services.</p>

            <p><strong>5. Reward Payout:</strong> Referral rewards are credited via UPI or bank transfer within 7 business days of the referred person's payment confirmation. PAN is required for payouts exceeding ₹5,000 (cumulative per financial year) as per the <a href="https://incometaxindia.gov.in/pages/acts/income-tax-act.aspx" target="_blank" rel="noopener" style="color:inherit;text-decoration:underline dotted;">Income Tax Act, 1961</a>.</p>

            <p><strong>6. No Limit:</strong> There is no cap on the number of referrals. You can refer unlimited people and earn for each successful conversion.</p>

            <p><strong>7. Reward Value:</strong> Patron Accounting reserves the right to modify the referral reward amounts at any time. Changes will be updated on this page and apply to referrals made after the modification date.</p>

            <p><strong>8. Abuse & Fraud:</strong> Patron Accounting reserves the right to disqualify any referral obtained through misleading, fraudulent, or spam-like methods. Rewards earned through such referrals will be forfeited.</p>

            <p><strong>9. Tax Liability:</strong> Referral income is taxable under Indian tax laws. The referrer is responsible for reporting referral earnings in their income tax return.</p>

            <p><strong>10. Program Termination:</strong> Patron Accounting may modify or discontinue the referral program at any time without prior notice. Pending qualified referrals at the time of termination will be honoured.</p>
<p><strong>11. Tax Responsibility:</strong> Referral rewards may be subject to TDS under Section 194R of the Income Tax Act if aggregate rewards exceed ₹20,000 in a financial year. The referrer is responsible for declaring referral income in their ITR. PAN details may be collected for compliance purposes.</p>
        </div>
    </div>
</section>

<!-- ========================================
     FAQ SECTION
     ======================================== -->
@php
    $faqExpandedItems = [
        ['question' => 'How much can I earn per referral?', 'answer' => 'You can earn between ₹200 and ₹2,000 per successful referral, depending on the service the referred person purchases. Higher-value services like company registration, accounting retainers, and audit services earn the highest rewards.'],
        ['question' => 'Who can participate in the referral program?', 'answer' => 'Anyone can participate — existing clients, business owners, CAs, company secretaries, lawyers, freelancers, students, or anyone who knows someone in need of accounting, tax, registration, or compliance services. You don\'t need to be an existing client.'],
        ['question' => 'When do I receive my referral reward?', 'answer' => 'Referral rewards are credited to your UPI or bank account within 7 business days after the referred person completes payment and the service engagement formally begins.'],
        ['question' => 'Is there a limit on how many people I can refer?', 'answer' => 'No, there is absolutely no limit. You can refer as many people as you want and earn rewards for each successful referral. The more you refer, the more you earn.'],
        ['question' => 'How do I track my referrals?', 'answer' => 'Once you submit a referral (via WhatsApp, phone, or email), our team confirms receipt. You will be notified via WhatsApp or SMS when the referred person makes a payment and when your reward is processed.'],
        ['question' => 'Does the referred person get any benefit?', 'answer' => 'Yes! The referred person receives a <strong>complimentary initial consultation</strong> and priority onboarding when they mention a referral. They get the same quality service and transparent pricing as all Patron clients.']
    ];
@endphp
@include('partials.faq-section', ['faqs' => $faqExpandedItems, 'heading' => 'Frequently Asked Questions', 'lead' => 'Common questions about the Patron referral program.', 'includeSchema' => true, 'showForm' => false])

<!-- ========================================
     CTA SECTION
     ======================================== -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div style="text-align:center;">
            <h2 style="color:#FFFFFF !important;font-size:clamp(26px,3.5vw,36px);font-weight:800;margin-bottom:16px;">Start Referring Today</h2>
            <p style="color:rgba(255,255,255,0.8);font-size:16px;max-width:550px;margin:0 auto 32px;line-height:1.7;">Share Patron Accounting with your network and earn real rewards. No sign-up required — just share, and earn when they pay.</p>

            <div style="display:flex;gap:14px;flex-wrap:wrap;justify-content:center;">
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20refer%20someone%20to%20Patron%20Accounting.%20Please%20share%20the%20referral%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">
                    <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                    Refer via WhatsApp
                </a>
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;border:1.5px solid rgba(255,255,255,0.3);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    Call +91 945 945 6700
                </a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;border:1.5px solid rgba(255,255,255,0.3);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    Email Us
                </a>
            </div>
        </div>
    </div>
</section>

</main>

<!-- ========================================
     GOOGLE BADGE

<div style="text-align:center;padding:12px;font-size:12px;color:var(--text-muted,#6B7280);">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
    Last updated: 28 February 2026
</div>
<div class="google-rating-badge">
    <svg class="grb-icon" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC04" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
    <div>
        <div class="grb-stars" style="display:flex;gap:2px;"><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;opacity:0.7;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="grb-text"><strong>4.9</strong> out of 5 · Based on <strong>446 Google Reviews</strong> across 4 offices</div>
    </div>
</div>


 ========================================
     OFFICE LOCATIONS STRIP
     ======================================== -->

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

        /* ============================================
           CSS VARIABLES
           ============================================ */
        :root {
            --orange: #E8712C;
            --orange-dark: #D4621F;
            --orange-light: #FEF4EE;
            --orange-lighter: #FFF9F5;
            --blue: #1B365D;
            --blue-light: #2A4A7A;
            --blue-lighter: #F4F7FB;
            --white: #FFFFFF;
            --cream: #FDFCFB;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --text-primary: #1F2937;
            --text-secondary: #4B5563;
            --text-muted: #6B7280;
            --green: #10B981;
            --gold: #F59E0B;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }
        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px; line-height: 1.6; color: var(--text-primary); background: var(--white);
        }
        h2 { font-size: clamp(26px, 3vw, 32px); font-weight: 800; color: var(--blue); margin-bottom: 24px; line-height: 1.25; }
        h3 { color: var(--blue); font-size: 1.35rem; font-weight: 700; }
        p { color: var(--text-secondary); }
        a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        a:hover { color: var(--orange-dark); }

        /* ============================================
           HERO SECTION
           ============================================ */
        .refer-hero {
            background: linear-gradient(135deg, var(--blue) 0%, #0F2440 100%);
            padding: 64px 32px 56px;
            position: relative; overflow: hidden;
        }
        .refer-hero::before {
            content: ''; position: absolute; top: -40%; right: -10%;
            width: 500px; height: 500px; border-radius: 50%;
            background: radial-gradient(circle, rgba(232,113,44,0.15) 0%, transparent 70%);
        }
        .refer-hero-inner { max-width: 1140px; margin: 0 auto; position: relative; z-index: 1; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(232,113,44,0.2); padding: 8px 16px;
            border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px;
            border: 1px solid rgba(232,113,44,0.3);
        }
        .hero-badge svg { width: 14px; height: 14px; }
        .refer-hero h1 {
            font-family: 'Barlow', sans-serif; font-weight: 800;
            font-size: clamp(34px, 5vw, 52px); line-height: 1.1;
            color: #FFFFFF; margin-bottom: 16px;
        }
        .refer-hero h1 span { color: var(--orange); }
        .refer-hero .hero-subtitle { font-size: 17px; color: rgba(255,255,255,0.8); line-height: 1.7; max-width: 650px; margin-bottom: 32px; }

        .hero-stats {
            display: flex; gap: 32px; flex-wrap: wrap; margin-bottom: 32px;
        }
        .hero-stat {
            display: flex; align-items: center; gap: 10px;
        }
        .hero-stat-icon {
            width: 44px; height: 44px; border-radius: var(--radius-md);
            background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center;
        }
        .hero-stat-icon svg { width: 22px; height: 22px; color: var(--orange); }
        .hero-stat-text strong { display: block; font-size: 20px; font-weight: 800; color: #FFFFFF; line-height: 1.2; }
        .hero-stat-text span { font-size: 12px; color: rgba(255,255,255,0.6); }

        .hero-cta-row { display: flex; gap: 14px; flex-wrap: wrap; }
        .btn-hero-primary {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 14px 28px; background: var(--orange); color: #fff;
            border-radius: 50px; font-weight: 700; font-size: 15px; text-decoration: none;
            transition: all 0.25s; border: none; cursor: pointer;
        }
        .btn-hero-primary:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); color: #fff; }
        .btn-hero-secondary {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 14px 28px; background: transparent; border: 1.5px solid rgba(255,255,255,0.3);
            color: #fff; border-radius: 50px; font-weight: 700; font-size: 15px; text-decoration: none;
            transition: all 0.25s; cursor: pointer;
        }
        .btn-hero-secondary:hover { border-color: var(--orange); background: rgba(232,113,44,0.1); color: #fff; }

        /* ============================================
           CONTENT SECTIONS
           ============================================ */
        .content-section { padding: 64px 32px; background: var(--white); }
        .content-section:nth-child(even) { background: var(--gray-50); }
        .content-container { max-width: 1140px; margin: 0 auto; }
        .section-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;
        }
        .section-title { font-size: clamp(24px, 3vw, 30px); font-weight: 800; color: var(--blue); margin-bottom: 20px; line-height: 1.25; }
        .content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); text-align: justify; }
        .content-text p { margin-bottom: 16px; text-align: justify; }
        .content-text strong { color: var(--text-primary); font-weight: 600; }

        .highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
        .highlight-box p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: justify; }
        .highlight-box p:last-child { margin-bottom: 0; }

        /* ============================================
           HOW IT WORKS STEPS
           ============================================ */
        .steps-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin: 32px 0; }
        .step-card-v2 {
            background: var(--white); border: 1px solid var(--gray-200); border-radius: var(--radius-xl);
            padding: 32px 24px; text-align: center; transition: all 0.25s ease; position: relative;
        }
        .step-card-v2:hover { box-shadow: var(--shadow-lg); border-color: var(--orange); transform: translateY(-4px); }
        .step-num {
            width: 52px; height: 52px; background: linear-gradient(135deg, var(--orange), var(--orange-dark));
            color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-size: 22px; font-weight: 800; margin: 0 auto 18px; box-shadow: 0 6px 20px rgba(232,113,44,0.3);
        }
        .step-card-v2 h4 { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; }
        .step-card-v2 p { font-size: 14px; color: var(--text-muted); line-height: 1.65; margin: 0; }
        .step-connector {
            position: absolute; top: 50%; right: -28px; width: 28px; height: 2px;
            background: var(--gray-300); z-index: 1;
        }
        .step-connector::after {
            content: '→'; position: absolute; right: -4px; top: -10px;
            color: var(--orange); font-size: 16px; font-weight: 700;
        }

        /* ============================================
           REWARD TIERS TABLE
           ============================================ */
        .table-responsive-wrapper {
            width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 24px 0;
            border-radius: var(--radius-md); border: 1px solid var(--gray-200);
        }
        .table-responsive-wrapper table { width: 100%; font-family: 'Barlow', sans-serif; border-collapse: collapse; margin: 0; border: none; }
        .table-responsive-wrapper table thead tr th {
            border: 1px solid #14365F; color: #fff; font-size: 14px; font-weight: 700;
            background-color: #14365F; padding: 14px 18px; text-align: left;
        }
        .table-responsive-wrapper table tbody tr td {
            border: 1px solid var(--gray-200); padding: 12px 18px; font-size: 14px;
            color: var(--text-secondary); background: var(--white);
        }
        .table-responsive-wrapper table tbody tr:nth-child(even) td { background: var(--gray-50); }
        .table-responsive-wrapper table tbody tr:hover td { background: var(--orange-lighter); }
        .table-responsive-wrapper table tbody tr td:first-child { font-weight: 600; color: var(--text-primary); }
        .table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }

        /* ============================================
           WHO CAN REFER — ICON CARDS
           ============================================ */
        .who-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 28px 0; }
        .who-card {
            background: var(--white); border: 1px solid var(--gray-200); border-radius: var(--radius-lg);
            padding: 24px; transition: all 0.25s; display: flex; align-items: flex-start; gap: 14px;
        }
        .who-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
        .who-icon {
            width: 48px; height: 48px; background: var(--orange-light); border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
        }
        .who-icon svg { width: 24px; height: 24px; color: var(--orange); }
        .who-card h4 { font-size: 15px; font-weight: 700; color: var(--blue); margin-bottom: 4px; }
        .who-card p { font-size: 13px; color: var(--text-muted); line-height: 1.55; margin: 0; }

        /* ============================================
           FAQ ACCORDION
           ============================================ */
        .accordion-button:not(.collapsed)::after, .accordion-button::after { display: none !important; }
        .accordion-button, .accordion-button:hover, .accordion-button:active { color: #14365F !important; font-size: 15px !important; text-decoration: none !important; }
        .accordion-button:focus { border-color: transparent !important; box-shadow: none !important; color: #14365F !important; }
        .accordion-button:not(.collapsed) { background-color: transparent !important; color: #14365F !important; }
        .accordion-button:not(.collapsed) .accordion-icon { transform: rotate(45deg); }
        .accordion-button.collapsed { color: #14365F !important; }
        .accordion-item { border: 1px solid var(--gray-200) !important; }

        /* ============================================
           OFFICE LOCATIONS FOOTER STRIP
           ============================================ */
        .office-locations-strip { background: var(--blue); padding: 20px 32px; border-top: 3px solid var(--orange); }
        .office-locations-strip .ols-container { max-width: 1320px; margin: 0 auto; display: flex; align-items: center; justify-content: center; gap: 16px; flex-wrap: wrap; }
        .office-locations-strip .ols-label { font-size: 13px; font-weight: 700; color: white; text-transform: uppercase; letter-spacing: 0.5px; flex-shrink: 0; }
        .office-locations-strip .ols-offices { display: flex; align-items: center; gap: 24px; flex-wrap: wrap; }
        .office-locations-strip .ols-office { display: flex; align-items: center; gap: 6px; color: rgba(255,255,255,0.85); font-size: 13px; font-weight: 500; cursor: pointer; transition: color 0.2s; text-decoration: none; }
        .office-locations-strip .ols-office:hover { color: var(--orange); }
        .office-locations-strip .ols-office svg { width: 14px; height: 14px; color: var(--orange); flex-shrink: 0; }
        .office-locations-strip .ols-office.active { color: white; font-weight: 700; }
        .office-locations-strip .ols-trust-link { margin-left: auto; display: flex; align-items: center; gap: 6px; color: var(--orange); font-size: 13px; font-weight: 600; text-decoration: none; transition: all 0.2s; }
        .office-locations-strip .ols-trust-link:hover { color: white; }
        .office-locations-strip .ols-trust-link svg { width: 14px; height: 14px; }

        /* ============================================
           WHATSAPP STICKY BAR
           ============================================ */
        .whatsapp-sticky-bar { position: fixed; bottom: 0; left: 0; right: 0; background: #25D366; color: white; padding: 10px 20px; display: flex; align-items: center; justify-content: center; gap: 12px; z-index: 999; box-shadow: 0 -4px 16px rgba(0,0,0,0.15); transform: translateY(100%); animation: slideUpBar 0.5s ease 2s forwards; }
        @keyframes slideUpBar { to { transform: translateY(0); } }
        .whatsapp-sticky-bar .wsb-icon { width: 24px; height: 24px; flex-shrink: 0; }
        .whatsapp-sticky-bar .wsb-text { font-size: 14px; font-weight: 600; }
        .whatsapp-sticky-bar .wsb-text span { font-weight: 400; opacity: 0.9; }
        .whatsapp-sticky-bar .wsb-btn { background: white; color: #25D366; border: none; padding: 6px 18px; border-radius: 50px; font-size: 13px; font-weight: 700; cursor: pointer; transition: all 0.2s; text-decoration: none; }
        .whatsapp-sticky-bar .wsb-btn:hover { background: #f0f0f0; }
        .whatsapp-sticky-bar .wsb-close { background: none; border: none; color: white; font-size: 20px; cursor: pointer; padding: 0 4px; opacity: 0.7; transition: opacity 0.2s; }
        .whatsapp-sticky-bar .wsb-close:hover { opacity: 1; }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 768px) {
            .content-section { padding: 40px 16px; }
            .refer-hero { padding: 40px 16px 36px; }
            .refer-hero h1 { font-size: 30px; }
            .hero-stats { gap: 16px; }
            .steps-row { grid-template-columns: 1fr; }
            .step-connector { display: none; }
            .who-grid { grid-template-columns: 1fr; }
            .hero-cta-row { flex-direction: column; }
            .btn-hero-primary, .btn-hero-secondary { width: 100%; justify-content: center; }
            .office-locations-strip .ols-container { flex-direction: column; gap: 10px; }
            .office-locations-strip .ols-trust-link { margin-left: 0; }
            .whatsapp-sticky-bar { padding: 8px 12px; gap: 8px; }
            .whatsapp-sticky-bar .wsb-text { font-size: 12px; }
            .whatsapp-sticky-bar .wsb-text span { display: none; }
        }
        @media (max-width: 480px) {
            .hero-stats { flex-direction: column; gap: 12px; }
        }

        .content-section[id] { scroll-margin-top: 80px; }
    

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
.client-quotes,.trust-reviews{margin-top:32px}
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