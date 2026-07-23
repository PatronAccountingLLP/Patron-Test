@extends('layouts.app')
@section('meta')
<title>ESOP Perquisite Tax Calculator | Section 17(2)(vi)</title>
<meta name="description" content="ESOP perquisite tax calculator under Section 17(2)(vi): TDS at slab plus surcharge and cess, cash needed to exercise, 80-IAC deferral, foreign flags. Try now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-perquisite-tax-calculator">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-perquisite-tax-calculator">
<meta property="og:title" content="Section 17(2)(vi) Perquisite Tax Calculator — ESOP 2026">
<meta property="og:description" content="Compute ESOP perquisite tax under Section 17(2)(vi): TDS, cash needed, 80-IAC deferral, foreign flags.">
<meta property="og:image" content="/og/esop-perquisite-tax-calculator.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Section 17(2)(vi) Perquisite Tax Calculator — ESOP 2026">
<meta name="twitter:description" content="ESOP perquisite tax under Section 17(2)(vi): TDS, cash needed, 80-IAC deferral.">
<meta name="twitter:image" content="/og/esop-perquisite-tax-calculator.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"Section 17(2)(vi) Perquisite Tax Calculator","description":"Section 17(2)(vi) Perquisite Tax Calculator computes ESOP perquisite tax for Indian employees on exercise of stock options. Takes number of options exercised, Fair Market Value at exercise, exercise price, marginal slab rate, surcharge bracket, Section 80-IAC startup eligibility, and foreign-company flag. Outputs perquisite value, slab tax + surcharge + cess, total TDS, net cash needed to exercise, Section 192(1C) deferral mechanics, and foreign-company Schedule FA + Form 67 implications for FY 2025-26 (AY 2026-27).","url":"/tools/esop-perquisite-tax-calculator","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Section 17(2)(vi) Perquisite Tax Calculator","item":"/tools/esop-perquisite-tax-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"What is Section 17(2)(vi) perquisite tax on ESOPs?","acceptedAnswer":{"@type":"Answer","text":"Section 17(2)(vi) of the Income-tax Act, 1961 taxes the value of any specified security or sweat equity share allotted by an employer to an employee free of cost or at a concessional price. For ESOPs, the perquisite value equals Fair Market Value of the share on the exercise date minus the exercise price paid, multiplied by the number of options exercised. This is added to salary income and taxed at applicable slab rates."}},
{"@type":"Question","name":"How is the FMV determined for ESOP perquisite tax?","acceptedAnswer":{"@type":"Answer","text":"For listed company shares, FMV is the average of the opening and closing price on the exercise date on the recognised stock exchange with highest trading volume. For unlisted shares, FMV must be certified by a SEBI Category I Registered Merchant Banker on the exercise date under Rule 3(8)(iii) of the Income-tax Rules, 1962. The valuation must be dated within 180 days of the exercise event."}},
{"@type":"Question","name":"Who deducts TDS on ESOP perquisite and when?","acceptedAnswer":{"@type":"Answer","text":"The employer deducts TDS under Section 192 of the Income-tax Act, 1961 at the time of exercise. The perquisite is added to the employee's salary for that month or spread across remaining months of the financial year, and TDS is computed on aggregate salary income at the applicable slab rates. The TDS is reflected in Form 16 and Form 24Q, and the employee claims credit in their ITR."}},
{"@type":"Question","name":"What is the Section 192(1C) deferral for startup employees?","acceptedAnswer":{"@type":"Answer","text":"Section 192(1C) of the Income-tax Act, 1961 allows employees of eligible startups to defer the perquisite TDS to the earliest of: 48 months (Budget 2026 proposes extending to five years) from end of relevant assessment year, sale of shares, or cessation of employment. The tax amount remains the same — only the payment timing is deferred. The employer deducts TDS only when the deferral period ends."}},
{"@type":"Question","name":"Which startups qualify for Section 80-IAC ESOP deferral?","acceptedAnswer":{"@type":"Answer","text":"Only startups holding both DPIIT recognition AND an Inter-Ministerial Board (IMB) Certificate under Section 80-IAC qualify for ESOP perquisite tax deferral under Section 192(1C). DPIIT recognition alone is not sufficient. The startup must be a private limited company or LLP, incorporated within the last 10 years, with annual turnover under ₹100 crore, and engaged in innovation, development or improvement of products or services."}},
{"@type":"Question","name":"Does ESOP perquisite tax apply to foreign company ESOPs?","acceptedAnswer":{"@type":"Answer","text":"Yes. If an Indian employee receives ESOPs from a foreign parent company (such as a US-listed parent of an Indian subsidiary), Section 17(2)(vi) perquisite tax applies on the same FMV-minus-exercise-price basis. FMV is the foreign exchange price converted to INR at the SBI TT buying rate on the exercise date. Additionally, the foreign shares must be disclosed in Schedule FA of the ITR every year until disposed of."}},
{"@type":"Question","name":"What is Form 67 and when must it be filed?","acceptedAnswer":{"@type":"Answer","text":"Form 67 is the statement of foreign tax credit (FTC) under Rule 128 of the Income-tax Rules, 1962. If foreign tax is paid on the same foreign-company ESOP income (e.g. US withholding tax), Form 67 must be filed online before the due date of the ITR to claim FTC under the relevant Double Taxation Avoidance Agreement. Without Form 67, the foreign tax credit claim is rejected during processing."}},
{"@type":"Question","name":"What are the surcharge rates on ESOP perquisite?","acceptedAnswer":{"@type":"Answer","text":"Surcharge depends on total taxable income including ESOP perquisite. Under the new regime: 10% if income exceeds ₹50 lakh, 15% above ₹1 crore, and 25% above ₹2 crore (capped — the 37% rate is removed). Old regime adds 37% above ₹5 crore. Health and Education Cess of 4% applies on tax plus surcharge in all cases. The marginal relief provision may apply at slab boundaries."}},
{"@type":"Question","name":"Can the employee pay perquisite tax in instalments?","acceptedAnswer":{"@type":"Answer","text":"The statute does not prescribe instalments — TDS is due at exercise. However, most employers spread the TDS recovery across remaining months of the financial year through payroll, with the employee's consent. If a single-month deduction would make net salary unreasonably low, the employer may seek a written undertaking to recover in instalments. The total tax for the year remains unchanged."}},
{"@type":"Question","name":"What is the cash outflow needed to exercise an ESOP?","acceptedAnswer":{"@type":"Answer","text":"The total cash needed equals the exercise price multiplied by options exercised plus the perquisite TDS (unless Section 192(1C) deferral applies). For example, exercising 1,000 options at ₹10 strike with FMV ₹500 creates a perquisite of ₹4,90,000. At 30% slab plus 4% cess, TDS is ₹1,52,880. Cash needed equals ₹10,000 exercise price plus ₹1,52,880 TDS — ₹1,62,880 total."}},
{"@type":"Question","name":"How is ESOP perquisite reported in the ITR?","acceptedAnswer":{"@type":"Answer","text":"The perquisite value already appears in Form 16 issued by the employer and pre-fills in the salary schedule of ITR-2 or ITR-3. The employee must file ITR-2 or ITR-3, never ITR-1, because ESOP holders typically have capital gains schedule entries. Foreign-company ESOP holders additionally fill Schedule FA (foreign assets) and Schedule TR for foreign tax relief, with Form 67 filed separately online."}},
{"@type":"Question","name":"Are ESOPs taxed at the time of grant or vesting?","acceptedAnswer":{"@type":"Answer","text":"No tax arises at grant or at vesting. Section 17(2)(vi) perquisite tax is triggered only on exercise — when the employee actually pays the exercise price and the company allots shares. Subsequently, when the employee sells the shares, capital gains tax applies on the difference between sale price and FMV at exercise. The tax journey for an ESOP holder has two events: exercise (salary perquisite) and sale (capital gains)."}},
{"@type":"Question","name":"Is this Perquisite Tax Calculator a substitute for a CA opinion?","acceptedAnswer":{"@type":"Answer","text":"No. This calculator gives directional perquisite tax computation under Section 17(2)(vi) using standard slab logic. Real-world ESOP taxation involves slab interaction with other salary income, marginal relief, surcharge thresholds, DTAA relief for foreign ESOPs, Form 67 timing, advance tax under Sections 234B and 234C, and Section 80-IAC verification. Always consult a Chartered Accountant before exercising material ESOP positions."}}
]}
</script>

@endsection
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
:root{--primary:#15365f;--primary-light:#1f4a7a;--primary-dark:#0a2240;--accent:#f26522;--accent-light:#ff8347;--surface:#FAFAF8;--surface-alt:#F0EFEB;--card:#FFFFFF;--text:#414042;--text-secondary:#555555;--text-muted:#888888;--border:#E5E5E0;--success:#059669;--info:#0EA5E9;--danger:#DC2626;--radius:12px;--radius-lg:20px;--shadow-sm:0 1px 3px rgba(0,0,0,0.06);--shadow-md:0 4px 16px rgba(0,0,0,0.08);--shadow-lg:0 8px 32px rgba(0,0,0,0.1);--font-body:'DM Sans',sans-serif;--font-mono:'Space Mono',monospace}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:var(--font-body);background:var(--surface);color:var(--text);line-height:1.65;-webkit-font-smoothing:antialiased}
.toc-nav{background:var(--primary-dark);position:sticky;top:0;z-index:100;overflow-x:auto;white-space:nowrap;-webkit-overflow-scrolling:touch;box-shadow:0 2px 8px rgba(0,0,0,0.15)}
.toc-nav-inner{max-width:1200px;margin:0 auto;padding:0 20px;display:flex;gap:0}
.toc-nav a{color:rgba(255,255,255,0.75);text-decoration:none;font-size:13px;font-weight:500;padding:12px 16px;transition:all 0.2s;border-bottom:2px solid transparent;display:inline-block}
.toc-nav a:hover,.toc-nav a.active{color:#fff;border-bottom-color:var(--accent)}
.breadcrumb{max-width:1200px;margin:0 auto;padding:16px 20px 0;font-size:13px;color:var(--text-muted)}
.breadcrumb a{color:var(--primary-light);text-decoration:none}
.breadcrumb a:hover{text-decoration:underline}
.breadcrumb span{margin:0 6px}
.hero{max-width:1200px;margin:0 auto;padding:32px 20px 24px}
.hero-meta{display:flex;flex-wrap:wrap;align-items:center;gap:12px;margin-bottom:16px}
.badge-updated{background:var(--primary);color:#fff;font-size:12px;font-weight:600;padding:4px 12px;border-radius:20px;letter-spacing:0.3px}
.author-byline{font-size:13px;color:var(--text-secondary)}
.author-byline strong{color:var(--primary);font-weight:600}
.hero h1{font-size:clamp(28px,5vw,42px);font-weight:700;color:var(--primary-dark);line-height:1.2;margin-bottom:16px}
.hero h1 span{color:var(--accent);display:inline}
.brand-cta-bar{background:#FFEDD5;border-top:1px solid #FED7AA;border-bottom:1px solid #FED7AA;padding:14px 20px}
.brand-cta-bar-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:16px;flex-wrap:wrap}
.brand-cta-bar-text{flex:1 1 320px;font-size:14px;color:var(--text);line-height:1.45}
.brand-cta-bar-text strong{color:var(--text);font-weight:700}
.brand-cta-bar-actions{display:flex;gap:10px;flex-wrap:wrap}
.brand-cta-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 18px;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:700;text-decoration:none;border:0;cursor:pointer;transition:transform 0.15s ease,box-shadow 0.15s ease,background 0.2s ease;-webkit-tap-highlight-color:transparent;touch-action:manipulation;white-space:nowrap;line-height:1.2;min-height:44px}
.brand-cta-btn:hover{transform:translateY(-1px);box-shadow:0 4px 12px rgba(0,0,0,0.12)}
.brand-cta-btn:active{transform:translateY(0)}
.brand-cta-btn .ico{width:16px;height:16px;flex-shrink:0}
.brand-cta-btn-call{background:var(--accent);color:#fff}
.brand-cta-btn-call:hover{background:var(--accent-light);color:#fff}
.brand-cta-btn-wa{background:#25D366;color:#fff}
.brand-cta-btn-wa:hover{background:#1FB855;color:#fff}
.brand-cta-btn-email{background:#fff;color:var(--text);border:1px solid #E5D6C5}
.brand-cta-btn-email:hover{background:#FAFAF8;color:var(--text)}
.brand-cta-stack{display:flex;flex-direction:column;gap:8px}
.brand-cta-stack .brand-cta-btn{width:100%}
.body-cta .brand-cta-bar-actions{justify-content:center;margin-top:4px}
.body-cta .brand-cta-btn-email{background:rgba(255,255,255,0.95);border-color:rgba(255,255,255,0.95)}
.body-cta .brand-cta-btn-email:hover{background:#fff;border-color:#fff}
.cta-card .brand-cta-btn-email{background:rgba(255,255,255,0.95);border-color:rgba(255,255,255,0.95)}
.cta-card .brand-cta-btn-email:hover{background:#fff;border-color:#fff}
.post-result-cta{background:#FFF7ED;border:1px solid #FED7AA;border-left:4px solid var(--accent);border-radius:var(--radius);padding:18px 20px;margin:20px 0 4px}
.post-result-cta-head{font-size:15px;font-weight:700;color:var(--text);margin-bottom:4px;line-height:1.4}
.post-result-cta-sub{font-size:13px;color:var(--text-secondary);margin-bottom:14px;line-height:1.55}
.post-result-cta .brand-cta-bar-actions{gap:8px}
.body-cta{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;border-radius:var(--radius-lg);padding:28px 32px;margin:24px 0 32px;text-align:center}
.body-cta h3{color:#fff;font-size:22px;margin-bottom:8px;font-weight:700}
.body-cta p{color:rgba(255,255,255,0.85);margin-bottom:18px;line-height:1.6;font-size:14px}
.tldr{background:var(--card);border-left:4px solid var(--accent);border-radius:0 var(--radius) var(--radius) 0;padding:20px 24px;margin:0 auto 32px;max-width:1200px;box-shadow:var(--shadow-sm)}
.tldr-label{font-family:var(--font-mono);font-size:12px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px}
.tldr p{font-size:15px;color:var(--text-secondary);line-height:1.7}
.main-layout{max-width:1200px;margin:0 auto;padding:0 20px 40px;display:grid;grid-template-columns:1fr;gap:32px}
@media (min-width:768px){.main-layout{grid-template-columns:1fr 320px;gap:40px}}
.content-col{min-width:0}.sidebar-col{min-width:0}
.calc-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);padding:32px;margin-bottom:40px;border:1px solid var(--border)}
.calc-card h2{font-size:22px;font-weight:700;color:var(--primary-dark);margin-bottom:8px}
.calc-card .sub{font-size:13px;color:var(--text-muted);margin-bottom:22px}
.calc-row{display:grid;grid-template-columns:1fr;gap:20px;margin-bottom:20px}
@media (min-width:600px){.calc-row{grid-template-columns:1fr 1fr}}
.form-group label{display:block;font-size:12px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:0.5px}
.form-group label .hint{display:block;font-size:11px;color:var(--text-muted);font-weight:500;text-transform:none;letter-spacing:0;margin-top:2px}
.form-group input,.form-group select{width:100%;padding:12px 16px;border:2px solid var(--border);border-radius:var(--radius);font-family:var(--font-body);font-size:16px;color:var(--text);background:var(--surface);outline:2px solid transparent;outline-offset:1px;transition:border-color 0.2s}
.form-group input:focus-visible,.form-group select:focus-visible{border-color:var(--primary);outline-color:var(--primary)}
.form-group input[type="number"],.form-group input[type="text"]{font-family:var(--font-mono);font-size:17px;font-weight:700}
.section-title{font-family:var(--font-mono);font-size:11px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin:24px 0 12px;padding-bottom:6px;border-bottom:1px dashed var(--border)}
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;flex-wrap:wrap}
.toggle-btn{flex:1 1 40%;padding:10px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent;min-height:44px}
.toggle-btn *{pointer-events:none}
.toggle-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.toggle-btn:focus-visible{outline:2px solid var(--primary);outline-offset:2px}
.btn-calculate{width:100%;padding:16px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s,transform 0.1s;margin-top:12px;min-height:52px}
.btn-calculate:hover{background:var(--primary-light)}
.btn-calculate:active{transform:scale(0.98)}
.btn-calculate:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.result-section{margin-top:28px;display:none}
.result-section.visible{display:block}
.result-divider{height:1px;background:var(--border);margin-bottom:24px}
.result-headline{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;padding:24px 28px;border-radius:var(--radius);margin-bottom:16px}
.result-headline .label{font-family:var(--font-mono);font-size:11px;text-transform:uppercase;letter-spacing:1.5px;opacity:0.85;margin-bottom:6px}
.result-headline .value{font-family:var(--font-mono);font-size:32px;font-weight:700;line-height:1.1;margin-bottom:6px;word-break:break-word}
.result-headline .accent{color:var(--accent-light)}
.result-headline .meta{font-size:13px;opacity:0.9;margin-top:6px}
.summary-grid{display:grid;grid-template-columns:1fr;gap:12px;margin-bottom:16px}
@media (min-width:600px){.summary-grid{grid-template-columns:1fr 1fr}}
.summary-card{background:var(--surface);border-radius:var(--radius);padding:16px 18px;border:1px solid var(--border)}
.summary-card.highlight{background:#FFF7ED;border-color:var(--accent)}
.summary-card .v-label{font-family:var(--font-mono);font-size:10px;color:var(--accent);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:4px}
.summary-card .v-val{font-family:var(--font-mono);font-size:22px;font-weight:700;color:var(--primary-dark);word-break:break-word}
.summary-card .v-desc{font-size:12px;color:var(--text-secondary);margin-top:4px;line-height:1.5}
.breakdown-block{background:var(--surface-alt);border-radius:var(--radius);padding:18px 22px;margin-top:16px}
.breakdown-block h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:12px;font-weight:700}
.breakdown-row{display:flex;justify-content:space-between;align-items:center;padding:8px 0;font-size:14px;gap:12px}
.breakdown-row:not(:last-child){border-bottom:1px dashed var(--border)}
.breakdown-label{color:var(--text-secondary)}
.breakdown-value{font-family:var(--font-mono);font-weight:700;color:var(--primary-dark);white-space:nowrap}
.alert-flag{padding:14px 18px;border-radius:var(--radius);margin-top:14px;font-size:13px;line-height:1.6}
.alert-flag.deferral{background:#ECFDF5;border-left:4px solid var(--success);color:#065F46}
.alert-flag.deferral strong{color:#064E3B}
.alert-flag.foreign{background:#EFF6FF;border-left:4px solid var(--info);color:#1E3A8A}
.alert-flag.foreign strong{color:#1E40AF}
.alert-flag ul{margin:6px 0 0 18px}
.alert-flag li{margin-bottom:4px}
.btn-reset{display:inline-flex;align-items:center;gap:6px;margin-top:14px;padding:10px 18px;border:1px solid var(--border);border-radius:8px;background:var(--card);color:var(--text-muted);font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:all 0.2s;min-height:44px}
.btn-reset:hover{border-color:var(--danger);color:var(--danger)}
.btn-reset:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.btn-print{display:inline-flex;align-items:center;gap:6px;margin-top:14px;margin-left:8px;padding:10px 18px;border:1px solid var(--primary);border-radius:8px;background:var(--card);color:var(--primary);font-family:var(--font-body);font-size:13px;font-weight:600;cursor:pointer;transition:all 0.2s;min-height:44px}
.btn-print:hover{background:var(--primary);color:#fff}
.btn-print:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.error-banner{display:none;background:#FEE2E2;border-left:4px solid var(--danger);border-radius:0 var(--radius) var(--radius) 0;padding:12px 16px;margin-bottom:16px;color:#991B1B;font-size:13px;font-weight:600}
.error-banner.visible{display:block}
.content-section{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:32px;margin-bottom:32px;border:1px solid var(--border)}
.content-section h2{font-size:24px;font-weight:700;color:var(--primary-dark);margin-bottom:16px;line-height:1.3}
.content-section h3{font-size:18px;font-weight:700;color:var(--primary-dark);margin:20px 0 10px}
.content-section p{font-size:15px;color:var(--text-secondary);margin-bottom:14px;line-height:1.75}
.content-section ul,.content-section ol{margin:0 0 14px 20px}
.content-section li{font-size:15px;color:var(--text-secondary);margin-bottom:8px;line-height:1.7}
.content-section a{color:var(--primary-light);text-decoration:underline;text-underline-offset:2px}
.content-section a:hover{color:var(--primary)}
.rate-table{width:100%;border-collapse:collapse;margin:16px 0;font-size:14px}
.rate-table thead th{background:var(--primary);color:#fff;padding:12px 16px;text-align:left;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:0.3px}
.rate-table thead th:first-child{border-radius:var(--radius) 0 0 0}
.rate-table thead th:last-child{border-radius:0 var(--radius) 0 0}
.rate-table tbody td{padding:12px 16px;border-bottom:1px solid var(--border);color:var(--text-secondary)}
.rate-table tbody tr:nth-child(even){background:var(--surface)}
.rate-table tbody tr:hover{background:var(--surface-alt)}
.formula-box{background:var(--primary-dark);color:#E8EEF5;border-radius:var(--radius);padding:20px 24px;margin:16px 0;font-family:var(--font-mono);font-size:14px;line-height:1.8;overflow-x:auto}
.formula-box .label{color:var(--accent-light);font-weight:700}
.callout{background:#F0F5FB;border-left:4px solid var(--primary-light);border-radius:0 var(--radius) var(--radius) 0;padding:16px 20px;margin:16px 0}
.callout p{color:var(--primary-dark);margin-bottom:0;font-size:14px}
.callout strong{color:var(--primary-dark)}
.callout.warn{background:#FFFBEB;border-left-color:var(--accent)}
.callout.warn p{color:#78350F}
.callout.warn strong{color:#78350F}
.faq-item{background:var(--surface);border-radius:var(--radius);margin-bottom:10px;border:1px solid var(--border);overflow:hidden;transition:box-shadow 0.2s}
.faq-item:hover{box-shadow:var(--shadow-sm)}
.faq-question{display:flex;justify-content:space-between;align-items:center;width:100%;padding:16px 20px;border:none;background:none;font-family:var(--font-body);font-size:15px;font-weight:600;color:var(--text);cursor:pointer;text-align:left;line-height:1.4;gap:12px;-webkit-tap-highlight-color:transparent;min-height:52px}
.faq-question *{pointer-events:none}
.faq-question:focus-visible{outline:2px solid var(--primary);outline-offset:-2px}
.faq-icon{flex-shrink:0;width:24px;height:24px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;transition:transform 0.3s}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.4s ease}
.faq-item.open .faq-answer{max-height:800px}
.faq-answer-inner{padding:0 20px 16px;font-size:14px;color:var(--text-secondary);line-height:1.75}
.sidebar-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:24px;margin-bottom:24px;border:1px solid var(--border)}
.sidebar-card h3{font-size:16px;font-weight:700;color:var(--primary-dark);margin-bottom:14px}
.sidebar-link{display:block;padding:10px 14px;border-radius:8px;font-size:14px;font-weight:500;color:var(--text-secondary);text-decoration:none;transition:all 0.2s;margin-bottom:4px;-webkit-tap-highlight-color:rgba(0,0,0,0.05);touch-action:manipulation;min-height:44px}
.sidebar-link:hover{background:var(--surface-alt);color:var(--primary)}
.sidebar-link:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.sidebar-link .arrow{float:right;color:var(--text-muted)}
.cta-card{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;border-radius:var(--radius-lg);padding:24px;margin-bottom:24px}
.cta-card h3{color:#fff;font-size:18px;margin-bottom:8px;font-weight:700}
.cta-card p{font-size:14px;color:rgba(255,255,255,0.85);margin-bottom:16px;line-height:1.55}
.office-strip{background:var(--primary-dark);text-align:center;padding:20px;color:rgba(255,255,255,0.7);font-size:14px}
.office-strip .offices{font-weight:600;color:#fff;margin-bottom:4px}
.office-strip .trust{color:var(--accent);font-weight:600}
.footer{background:var(--primary-dark);border-top:1px solid rgba(255,255,255,0.1);text-align:center;padding:16px 20px;font-size:13px;color:rgba(255,255,255,0.5)}
.noscript-box{background:#FEE2E2;border:2px solid #DC2626;border-radius:var(--radius);padding:20px;text-align:center;color:#991B1B;font-weight:600}
a:focus-visible,button:focus-visible{outline:2px solid var(--accent);outline-offset:2px;border-radius:4px}
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:22px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}.result-headline .value{font-size:24px}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-calculate,.office-strip,.footer,.breadcrumb{display:none !important}body{background:#fff;color:#000;font-size:11pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:16px;margin-bottom:16px}.result-headline{background:#15365f !important;-webkit-print-color-adjust:exact;print-color-adjust:exact}.hero h1{font-size:18pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}}

/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
}
</style>
@section('content')

<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner">
<a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#section-17">Section 17(2)(vi)</a><a href="#slabs">FY 2025-26 Slabs</a><a href="#deferral">80-IAC Deferral</a><a href="#foreign">Foreign ESOPs</a><a href="#tds">TDS Mechanics</a><a href="#capital-gains">After Exercise</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>Section 17(2)(vi) Perquisite Tax Calculator</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>Section 17(2)(vi) Perquisite Tax Calculator — <span>ESOP Exercise Tax</span> for FY 2025-26</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Exercising ESOPs and unsure about TDS? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Section%2017(2)(vi)%20Perquisite%20Tax%20Calculator%20and%20need%20help%20with%20ESOP%20exercise%20tax%20planning." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ESOP%20Perquisite%20Tax%20Planning&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Section%2017(2)(vi)%20Perquisite%20Tax%20Calculator%20and%20need%20help%20with%20ESOP%20exercise%20tax%20planning.%0A%0AOptions%20to%20exercise%3A%20%0AFMV%20at%20exercise%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>Under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener" style="color:var(--accent);text-decoration:underline">Section 17(2)(vi)</a> of the Income-tax Act, 1961, ESOPs are taxed as a salary perquisite on exercise. Perquisite value equals (FMV at exercise − exercise price) × options exercised, taxed at slab + surcharge + 4% cess. The employer deducts TDS under Section 192. Employees of Section 80-IAC eligible startups can defer this TDS by up to 48–60 months under Section 192(1C). Foreign company ESOPs trigger additional Schedule FA disclosure and Form 67 for foreign tax credit. This calculator does all five computations and flags the post-exercise compliance steps.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Section 17(2)(vi) Perquisite Tax Calculator (FY 2025-26)</h2>
<p class="sub">Computes ESOP perquisite tax, surcharge, cess, total TDS, and net cash needed for exercise. Flags Section 80-IAC deferral and foreign-company compliance.</p>
<noscript><div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="section-title">Exercise Details</div>
<div class="calc-row">
<div class="form-group"><label for="options">Number of Options Exercised</label><input type="text" id="options" inputmode="decimal" placeholder="e.g. 1,000" autocomplete="off" value="1000"></div>
<div class="form-group"><label for="fmv">FMV at Exercise (₹ per share) <span class="hint">From valuer or stock exchange</span></label><input type="text" id="fmv" inputmode="decimal" placeholder="e.g. 500" autocomplete="off" value="500"></div>
</div>
<div class="calc-row">
<div class="form-group"><label for="exercisePrice">Exercise Price (₹ per share) <span class="hint">Strike price you pay to company</span></label><input type="text" id="exercisePrice" inputmode="decimal" placeholder="e.g. 10" autocomplete="off" value="10"></div>
<div class="form-group"><label for="slabRate">Marginal Slab Rate (%) <span class="hint">Your top income tax slab</span></label><select id="slabRate" autocomplete="off">
<option value="0">0% (Income up to ₹3L new / ₹2.5L old)</option>
<option value="5">5% (₹3L–₹7L new / ₹2.5L–₹5L old)</option>
<option value="10">10% (₹7L–₹10L new regime)</option>
<option value="15">15% (₹10L–₹12L new regime)</option>
<option value="20">20% (₹12L–₹15L new / ₹5L–₹10L old)</option>
<option value="30" selected>30% (Above ₹15L new / ₹10L old)</option>
</select></div>
</div>

<div class="section-title">Surcharge Bracket</div>
<div class="form-group" style="margin-bottom:20px;"><label>Total Taxable Income (incl. ESOP perquisite)</label>
<div class="toggle-group" role="group" aria-label="Surcharge bracket">
<button type="button" class="toggle-btn active" data-surcharge="0" onclick="setSurcharge(this)">≤ ₹50L<br><small style="font-weight:400;font-size:11px;opacity:0.7">No surcharge</small></button>
<button type="button" class="toggle-btn" data-surcharge="10" onclick="setSurcharge(this)">₹50L–₹1Cr<br><small style="font-weight:400;font-size:11px;opacity:0.7">10% surcharge</small></button>
<button type="button" class="toggle-btn" data-surcharge="15" onclick="setSurcharge(this)">₹1Cr–₹2Cr<br><small style="font-weight:400;font-size:11px;opacity:0.7">15% surcharge</small></button>
<button type="button" class="toggle-btn" data-surcharge="25" onclick="setSurcharge(this)">Above ₹2Cr<br><small style="font-weight:400;font-size:11px;opacity:0.7">25% surcharge</small></button>
</div></div>

<div class="section-title">Compliance Flags</div>
<div class="calc-row">
<div class="form-group"><label>Section 80-IAC Eligible Startup? <span class="hint">DPIIT recognition + IMB Certificate, both required</span></label>
<div class="toggle-group" role="group" aria-label="80-IAC eligibility">
<button type="button" class="toggle-btn active" data-iac="no" onclick="setIAC(this)">No<br><small style="font-weight:400;font-size:11px;opacity:0.7">TDS at exercise</small></button>
<button type="button" class="toggle-btn" data-iac="yes" onclick="setIAC(this)">Yes<br><small style="font-weight:400;font-size:11px;opacity:0.7">Sec 192(1C) defer</small></button>
</div></div>
<div class="form-group"><label>Foreign Company ESOP? <span class="hint">Parent listed/incorporated outside India</span></label>
<div class="toggle-group" role="group" aria-label="Foreign company">
<button type="button" class="toggle-btn active" data-foreign="no" onclick="setForeign(this)">No<br><small style="font-weight:400;font-size:11px;opacity:0.7">Indian company</small></button>
<button type="button" class="toggle-btn" data-foreign="yes" onclick="setForeign(this)">Yes<br><small style="font-weight:400;font-size:11px;opacity:0.7">Schedule FA + Form 67</small></button>
</div></div>
</div>

<button class="btn-calculate" onclick="calculate()" type="button">Calculate Perquisite Tax</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>
<div class="result-headline"><div class="label">Total TDS (Perquisite Tax)</div><div class="value"><span class="accent" id="resHeadline">—</span></div><div class="meta" id="resHeadlineMeta">—</div></div>

<div class="summary-grid">
<div class="summary-card"><div class="v-label">Perquisite Value</div><div class="v-val" id="resPerq">—</div><div class="v-desc">(FMV − Exercise Price) × Options</div></div>
<div class="summary-card"><div class="v-label">Tax @ Slab</div><div class="v-val" id="resSlab">—</div><div class="v-desc" id="resSlabDesc">—</div></div>
<div class="summary-card"><div class="v-label">Surcharge</div><div class="v-val" id="resSurch">—</div><div class="v-desc" id="resSurchDesc">—</div></div>
<div class="summary-card"><div class="v-label">Health &amp; Education Cess (4%)</div><div class="v-val" id="resCess">—</div><div class="v-desc">On (Tax + Surcharge)</div></div>
<div class="summary-card highlight"><div class="v-label">Cash Needed to Exercise</div><div class="v-val" id="resCash">—</div><div class="v-desc" id="resCashDesc">Exercise price + TDS (if not deferred)</div></div>
<div class="summary-card"><div class="v-label">Effective Tax Rate on Perquisite</div><div class="v-val" id="resEffective">—</div><div class="v-desc">Total TDS ÷ Perquisite Value</div></div>
</div>

<div class="breakdown-block"><h4>Working — Section 17(2)(vi) Computation</h4>
<div class="breakdown-row"><span class="breakdown-label">Options exercised</span><span class="breakdown-value" id="wOpts">—</span></div>
<div class="breakdown-row"><span class="breakdown-label">FMV at exercise (per share)</span><span class="breakdown-value" id="wFMV">—</span></div>
<div class="breakdown-row"><span class="breakdown-label">Less: Exercise price (per share)</span><span class="breakdown-value" id="wEP">—</span></div>
<div class="breakdown-row"><span class="breakdown-label">Per-share perquisite</span><span class="breakdown-value" id="wPerShare">—</span></div>
<div class="breakdown-row"><span class="breakdown-label">Total perquisite value</span><span class="breakdown-value" id="wTotalPerq">—</span></div>
<div class="breakdown-row"><span class="breakdown-label">Tax at slab rate</span><span class="breakdown-value" id="wTax">—</span></div>
<div class="breakdown-row"><span class="breakdown-label">Add: Surcharge</span><span class="breakdown-value" id="wSurch">—</span></div>
<div class="breakdown-row"><span class="breakdown-label">Add: Cess (4%)</span><span class="breakdown-value" id="wCess">—</span></div>
<div class="breakdown-row"><span class="breakdown-label"><strong>Total TDS payable</strong></span><span class="breakdown-value" id="wTotal">—</span></div>
<div class="breakdown-row"><span class="breakdown-label">Exercise price outflow (to company)</span><span class="breakdown-value" id="wExCash">—</span></div>
<div class="breakdown-row"><span class="breakdown-label"><strong>Total cash needed</strong></span><span class="breakdown-value" id="wTotalCash">—</span></div>
</div>

<div class="alert-flag deferral" id="deferralFlag" style="display:none;">
<strong>✓ Section 192(1C) deferral applies.</strong>
<p style="margin:6px 0 0 0;">As an employee of a Section 80-IAC eligible startup, TDS of <strong id="defAmt">—</strong> is <em>deferred</em> until the earliest of:</p>
<ul>
<li><strong>48 months</strong> from end of the relevant assessment year (i.e. by approximately <strong id="defDate">—</strong>; Budget 2026 proposes extending to 60 months)</li>
<li>Date of <strong>sale</strong> of the allotted shares</li>
<li>Date of <strong>cessation</strong> of employment with the startup</li>
</ul>
<p style="margin:8px 0 0 0;">Cash needed at exercise reduces to just the exercise price of <strong id="defExCash">—</strong>. Tax amount remains the same — only the payment timing is postponed.</p>
</div>

<div class="alert-flag foreign" id="foreignFlag" style="display:none;">
<strong>ℹ Foreign company ESOP — additional compliance required.</strong>
<p style="margin:6px 0 0 0;">Beyond the Section 17(2)(vi) perquisite tax computed above, foreign-company ESOPs trigger:</p>
<ul>
<li><strong>Schedule FA (Foreign Assets)</strong> — disclose the foreign shares in your ITR every year until disposed of. Non-disclosure attracts ₹10 lakh penalty per year under the Black Money Act, 2015</li>
<li><strong>Form 67</strong> — file online before the ITR due date to claim Foreign Tax Credit (FTC) on any tax already withheld by the foreign jurisdiction (e.g. US W-2 withholding)</li>
<li><strong>ITR-2 or ITR-3</strong> — never ITR-1. Schedule TR for tax relief under the relevant DTAA</li>
<li><strong>Section 80-IAC deferral NOT available</strong> — applicable only to Indian eligible startups</li>
<li><strong>FEMA reporting</strong> — if shares are remitted abroad or sold, follow LRS and authorised dealer reporting</li>
</ul>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head">Want a CA to validate this perquisite TDS computation before exercise?</div>
<div class="post-result-cta-sub">Free 15-min review — slab interaction with other salary, 80-IAC deferral eligibility, advance tax planning, Form 67 / Schedule FA support. No obligation.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20used%20the%20Section%2017(2)(vi)%20Perquisite%20Tax%20Calculator%20and%20need%20CA%20review%20before%20I%20exercise%20my%20ESOPs." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ESOP%20Perquisite%20Tax%20Review&body=Hi%2C%0A%0AI%20just%20ran%20the%20Section%2017(2)(vi)%20Perquisite%20Tax%20Calculator%20and%20need%20CA%20review%20before%20exercise.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print Working</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the Perquisite Tax Calculator</h2>
<ol>
<li><strong>Enter the number of options you plan to exercise.</strong> This is the actual count of vested options you intend to convert into shares, not the total grant.</li>
<li><strong>Enter the FMV per share on the exercise date.</strong> For listed company shares, this is the average of opening and closing market price. For unlisted shares, it must be certified by a SEBI Category I Registered Merchant Banker.</li>
<li><strong>Enter the exercise price per share.</strong> This is the strike price defined in your ESOP grant letter — what you actually pay the company per share.</li>
<li><strong>Pick your marginal slab rate.</strong> The top tax slab applicable to your salary income for FY 2025-26. Most senior professionals exercising ESOPs fall in the 30% slab once the perquisite is added.</li>
<li><strong>Pick your surcharge bracket.</strong> Based on your total taxable income for the year including the ESOP perquisite. Surcharge kicks in above ₹50 lakh.</li>
<li><strong>Mark the compliance flags.</strong> Set Section 80-IAC to "Yes" only if your employer holds an IMB Certificate (DPIIT recognition alone is not sufficient). Set Foreign Company to "Yes" if the ESOP is in a parent listed/incorporated outside India.</li>
<li><strong>Click Calculate.</strong> You'll get the perquisite value, slab tax, surcharge, cess, total TDS, cash needed to exercise, deferral mechanics if applicable, and foreign-company compliance flags. A printable working sheet is available for your records.</li>
</ol>
</section>

<section class="content-section" id="section-17">
<h2>What Section 17(2)(vi) Says About ESOP Perquisite</h2>
<p>Section 17(2)(vi) of the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income-tax Act, 1961</a> defines "perquisite" to include the value of any specified security or sweat equity share allotted or transferred, directly or indirectly, by any person to an employee (whether free of cost or at a concessional rate). The provision was introduced to bring ESOPs into the salary perquisite net after earlier favourable treatment under the Fringe Benefit Tax regime.</p>
<p>The Income Tax Act, 2025 (effective from 1 April 2026 for income earned in FY 2026-27 onwards) renumbers Section 17(2)(vi) but does not change the substantive rules. The tax trigger, the FMV formula, the TDS obligation under Section 192, and the deferral mechanics under Section 192(1C) all carry forward unchanged.</p>
<h3>The Perquisite Formula</h3>
<div class="formula-box">
<span class="label">Perquisite Value</span> = (FMV on exercise date − Exercise Price) × Number of options exercised<br>
<span class="label">Total Tax</span> = [(Perquisite × Slab Rate) × (1 + Surcharge)] × 1.04<br>
<span class="label">Cash Needed</span> = (Options × Exercise Price) + Total Tax [unless Section 192(1C) defers]
</div>
<h3>Worked Example: 1,000 Options at ₹500 FMV vs ₹10 Exercise (30% slab, no surcharge)</h3>
<ul>
<li>Perquisite per share = ₹500 − ₹10 = <strong>₹490</strong></li>
<li>Total perquisite = 1,000 × ₹490 = <strong>₹4,90,000</strong></li>
<li>Tax at 30% slab = <strong>₹1,47,000</strong></li>
<li>Cess at 4% on tax = <strong>₹5,880</strong></li>
<li>Total TDS = <strong>₹1,52,880</strong></li>
<li>Exercise price cash to company = 1,000 × ₹10 = <strong>₹10,000</strong></li>
<li>Total cash outflow at exercise = <strong>₹1,62,880</strong></li>
</ul>
<div class="callout"><p><strong>CA Tip:</strong> The perquisite is taxed even though the employee receives no cash. They simply now own shares whose value is ₹4,90,000 above what they paid. Many employees are caught off-guard by needing ₹1,62,880 in liquid cash to exercise ₹4,90,000 of paper wealth — particularly painful when the shares are unlisted and not liquid.</p></div>
</section>

<section class="content-section" id="slabs">
<h2>FY 2025-26 Income Tax Slabs &amp; Surcharge</h2>
<p>The ESOP perquisite is added to your salary income and taxed at applicable slab rates. Under the New Regime (default from FY 2023-24 onwards), the slabs are:</p>
<table class="rate-table">
<thead><tr><th>Total Income (₹)</th><th>New Regime Rate</th><th>Old Regime Rate</th></tr></thead>
<tbody>
<tr><td>Up to ₹2,50,000</td><td>Nil</td><td>Nil</td></tr>
<tr><td>₹2,50,001 – ₹3,00,000</td><td>Nil</td><td>5%</td></tr>
<tr><td>₹3,00,001 – ₹5,00,000</td><td>5%</td><td>5%</td></tr>
<tr><td>₹5,00,001 – ₹7,00,000</td><td>5%</td><td>20%</td></tr>
<tr><td>₹7,00,001 – ₹10,00,000</td><td>10%</td><td>20%</td></tr>
<tr><td>₹10,00,001 – ₹12,00,000</td><td>15%</td><td>30%</td></tr>
<tr><td>₹12,00,001 – ₹15,00,000</td><td>20%</td><td>30%</td></tr>
<tr><td>Above ₹15,00,000</td><td>30%</td><td>30%</td></tr>
</tbody></table>
<p>Rebate under Section 87A is available for resident individuals: nil tax up to ₹7 lakh income under the new regime (₹5 lakh under the old regime). However, ESOP perquisite typically pushes total income well above the rebate threshold, so the calculator does not apply rebate logic.</p>
<h3>Surcharge on Tax (Both Regimes)</h3>
<table class="rate-table">
<thead><tr><th>Total Income</th><th>Surcharge Rate</th><th>Marginal Relief</th></tr></thead>
<tbody>
<tr><td>Up to ₹50 lakh</td><td>Nil</td><td>—</td></tr>
<tr><td>₹50 lakh – ₹1 crore</td><td>10%</td><td>Available</td></tr>
<tr><td>₹1 crore – ₹2 crore</td><td>15%</td><td>Available</td></tr>
<tr><td>₹2 crore – ₹5 crore</td><td>25% (new) / 25% (old)</td><td>Available</td></tr>
<tr><td>Above ₹5 crore</td><td>25% (new) / 37% (old)</td><td>Available</td></tr>
</tbody></table>
<p>Health and Education Cess of 4% applies on tax + surcharge in all cases. Marginal relief ensures that the additional tax due to surcharge does not exceed the income above the threshold — a critical adjustment near slab boundaries.</p>
</section>

<div class="body-cta">
<h3>Need Help Planning Your ESOP Exercise Tax?</h3>
<p>Patron Accounting supports Indian employees and global mobility hires with ESOP exercise tax planning — TDS estimation, 80-IAC deferral, Form 67 foreign tax credit, Schedule FA disclosure, advance tax computation. Pune, Mumbai, Delhi, Gurugram and pan-India.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20help%20with%20ESOP%20exercise%20tax%20planning." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ESOP%20Exercise%20Tax%20Planning&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20ESOP%20exercise%20tax%20planning.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="deferral">
<h2>Section 80-IAC &amp; 192(1C) Deferral for Startup Employees</h2>
<p>Recognising that startup employees often hold paper wealth in illiquid unlisted shares, the Finance Act, 2020 introduced Section 192(1C) of the Income-tax Act, 1961. This allows employees of eligible startups to defer the perquisite TDS until the earliest of three trigger events.</p>
<h3>The Three Deferral Trigger Events</h3>
<ol>
<li><strong>48 months</strong> from the end of the relevant assessment year in which shares are allotted. For example, shares allotted in FY 2025-26 → AY 2026-27 ends 31 March 2027 → TDS due by 31 March 2031. Budget 2026 proposals extend this to 60 months</li>
<li><strong>Sale</strong> of the allotted shares (full or partial)</li>
<li><strong>Cessation</strong> of employment with the eligible startup (resignation, termination, end of contract)</li>
</ol>
<h3>Eligibility — Both Conditions Required</h3>
<p>This deferral applies only to employees of an "eligible startup" as defined under Section 80-IAC of the Income-tax Act, 1961. Two conditions must both be satisfied:</p>
<ul>
<li><strong>DPIIT recognition</strong> — the company must hold a valid certificate of recognition from the Department for Promotion of Industry and Internal Trade under the <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> programme</li>
<li><strong>Inter-Ministerial Board (IMB) Certificate under Section 80-IAC</strong> — the IMB additionally certifies eligibility for the 100% tax holiday under Section 80-IAC after assessing innovation, scalability, and employment potential</li>
</ul>
<div class="callout warn"><p><strong>Note:</strong> DPIIT recognition alone is <em>not sufficient</em> for ESOP perquisite tax deferral. Only about 3,700 of India's 1.9 lakh+ DPIIT-recognised startups currently hold the IMB Certificate. Verify with your employer's payroll team whether the IMB Certificate is held before assuming deferral will apply.</p></div>
<h3>What Deferral Does and Does Not Do</h3>
<p>Section 192(1C) is a <strong>timing</strong> benefit, not a quantum reduction:</p>
<ul>
<li>✓ <strong>What it does:</strong> Postpones TDS payment to align with actual liquidity (typically share sale). Reduces cash needed at exercise to just the exercise price</li>
<li>✗ <strong>What it does NOT do:</strong> Reduce the amount of tax payable. The employee still pays the same perquisite tax computed at FMV-at-exercise rates — only later. Capital gains continues to be calculated using FMV-at-exercise as cost of acquisition</li>
<li>The employee must still <strong>disclose</strong> the perquisite value in the ITR of the year of allotment, even though no tax is paid in that year</li>
</ul>
</section>

<section class="content-section" id="foreign">
<h2>Foreign Company ESOPs — Schedule FA &amp; Form 67</h2>
<p>Many Indian employees of multinational subsidiaries receive ESOPs in the foreign parent company (typically US, UK, or Singapore listed). The Section 17(2)(vi) perquisite tax computation is identical — but several additional compliance obligations apply.</p>
<h3>FMV Determination for Foreign Shares</h3>
<p>For listed foreign shares (NYSE, NASDAQ, LSE), FMV is the exchange-traded price on the exercise date converted to INR at the SBI TT buying rate. For unlisted foreign shares, a SEBI Category I Registered Merchant Banker certifies FMV after considering foreign valuations. The employer reports the perquisite in Form 16 in INR.</p>
<h3>Schedule FA — Foreign Asset Disclosure</h3>
<p>Under Rule 12 of the Income-tax Rules, 1962, every resident Indian holding foreign assets at any time during the financial year must disclose them in Schedule FA of ITR-2 or ITR-3. For foreign-company ESOPs:</p>
<ul>
<li>Vested but unexercised options — disclosable as foreign assets</li>
<li>Exercised shares held abroad — disclosed every year until disposed of</li>
<li>Foreign bank account holding share-sale proceeds — separately disclosed</li>
<li>Failure attracts ₹10 lakh penalty per year under the Black Money (Undisclosed Foreign Income and Assets) and Imposition of Tax Act, 2015 — irrespective of asset value</li>
</ul>
<h3>Form 67 — Foreign Tax Credit Claim</h3>
<p>If the foreign jurisdiction has already withheld tax on the perquisite (such as US W-2 withholding on RSU vesting), the Indian employee can claim Foreign Tax Credit under the relevant Double Taxation Avoidance Agreement. The mechanics:</p>
<ul>
<li>File <strong>Form 67</strong> online before the ITR due date — Rule 128 of the Income-tax Rules, 1962</li>
<li>Attach foreign tax certificates (1099, equivalent statement) and computation of FTC</li>
<li>FTC is restricted to the Indian tax on the same income — excess foreign tax is not refundable</li>
<li>FTC is claimed in Schedule TR of ITR-2 / ITR-3 alongside Form 67</li>
</ul>
<div class="callout warn"><p><strong>Note:</strong> The Section 80-IAC / 192(1C) deferral is <em>not</em> available for foreign-company ESOPs. The deferral applies only to Indian eligible startups. Employees of Indian subsidiaries with US-listed parents pay perquisite tax at exercise in full, even if the Indian subsidiary itself qualifies for DPIIT recognition.</p></div>
</section>

<section class="content-section" id="tds">
<h2>How Employer TDS Works on ESOP Perquisite</h2>
<p>Section 192 of the Income-tax Act, 1961 obliges the employer to deduct tax at source on all salary income including the ESOP perquisite. The Income Tax Act, 2025 renumbers this provision as Section 392 from 1 April 2026, with mechanics unchanged.</p>
<h3>TDS Mechanics</h3>
<ol>
<li>At exercise, the employer computes the perquisite value using the formula in this calculator</li>
<li>The perquisite is added to the employee's total estimated salary income for the financial year</li>
<li>TDS for the year is recomputed on aggregate income at applicable slab rates</li>
<li>The incremental TDS attributable to the ESOP perquisite is recovered from the employee — usually in the month of exercise, sometimes spread across remaining months</li>
<li>The employer reports the perquisite and TDS in <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Form 24Q</a> (quarterly TDS return) and Form 16 (annual)</li>
<li>The employee claims credit for the TDS in their annual ITR</li>
</ol>
<h3>Practical Recovery Mechanics</h3>
<p>Most employers offer one of three TDS recovery options for ESOP exercises:</p>
<ul>
<li><strong>Single-month deduction</strong> — full TDS deducted in the month of exercise. Simplest, but can result in net-zero or negative salary that month</li>
<li><strong>Spread across remaining months</strong> — TDS divided across all remaining months of the financial year. Requires written undertaking from the employee</li>
<li><strong>Sell-to-cover</strong> — for listed shares, employer sells a portion of newly-exercised shares on the open market to fund TDS. Common for US-listed parent ESOPs</li>
</ul>
<h3>Advance Tax Considerations</h3>
<p>If the ESOP perquisite is large and TDS-spread across months falls short of advance tax thresholds, the employee may owe additional advance tax under Sections 234B and 234C. Interest at 1% per month is charged on shortfalls. Plan exercise events with quarterly advance tax dates (15 June, 15 September, 15 December, 15 March) in mind.</p>
</section>

<section class="content-section" id="capital-gains">
<h2>After Exercise — Capital Gains on Sale</h2>
<p>The perquisite tax under Section 17(2)(vi) is only the first tax event. When the employee subsequently sells the shares, capital gains tax applies on the difference between sale price and FMV at exercise — not the original exercise price.</p>
<h3>Cost of Acquisition for Capital Gains</h3>
<div class="formula-box">
<span class="label">Cost of Acquisition</span> = FMV on date of allotment (already taxed as perquisite)<br>
<span class="label">Capital Gain</span> = Sale Price − Cost of Acquisition − Transfer Costs<br>
<span class="label">Period of Holding</span> = From date of allotment to date of sale
</div>
<h3>Capital Gains Rates (FY 2025-26)</h3>
<table class="rate-table">
<thead><tr><th>Share Type &amp; Holding</th><th>Tax Rate</th><th>Exemption</th></tr></thead>
<tbody>
<tr><td>Listed shares (STT paid), held &gt; 12 months — LTCG</td><td>12.5%</td><td>First ₹1,25,000 of LTCG exempt per Section 112A</td></tr>
<tr><td>Listed shares (STT paid), held ≤ 12 months — STCG</td><td>20%</td><td>—</td></tr>
<tr><td>Unlisted shares, held &gt; 24 months — LTCG</td><td>12.5% (no indexation)</td><td>—</td></tr>
<tr><td>Unlisted shares, held ≤ 24 months — STCG</td><td>Slab rate</td><td>—</td></tr>
</tbody></table>
<p>The Finance (No. 2) Act, 2024 brought significant changes — LTCG on listed and unlisted equity shares unified at 12.5%, the ₹1 lakh exemption on listed equity raised to ₹1.25 lakh, and indexation benefit removed for LTCG on unlisted shares. These rates apply to transfers from 23 July 2024 onwards.</p>
<div class="callout"><p><strong>CA Tip:</strong> Holding shares past the LTCG threshold (12 months listed, 24 months unlisted) significantly reduces effective tax — from 20%/30% STCG to 12.5% LTCG. Plan share sales with this hold period in mind, especially when the perquisite tax has already been paid at exercise.</p></div>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions About ESOP Perquisite Tax</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is Section 17(2)(vi) perquisite tax on ESOPs?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 17(2)(vi) of the Income-tax Act, 1961 taxes the value of any specified security or sweat equity share allotted by an employer to an employee free of cost or at a concessional price. For ESOPs, the perquisite value equals Fair Market Value of the share on the exercise date minus the exercise price paid, multiplied by the number of options exercised. This is added to salary income and taxed at applicable slab rates.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is the FMV determined for ESOP perquisite tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For listed company shares, FMV is the average of the opening and closing price on the exercise date on the recognised stock exchange with highest trading volume. For unlisted shares, FMV must be certified by a SEBI Category I Registered Merchant Banker on the exercise date under Rule 3(8)(iii) of the Income-tax Rules, 1962. The valuation must be dated within 180 days of the exercise event.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Who deducts TDS on ESOP perquisite and when?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The employer deducts TDS under Section 192 of the Income-tax Act, 1961 at the time of exercise. The perquisite is added to the employee's salary for that month or spread across remaining months of the financial year, and TDS is computed on aggregate salary income at the applicable slab rates. The TDS is reflected in Form 16 and Form 24Q, and the employee claims credit in their ITR.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the Section 192(1C) deferral for startup employees?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 192(1C) of the Income-tax Act, 1961 allows employees of eligible startups to defer the perquisite TDS to the earliest of: 48 months (Budget 2026 proposes extending to five years) from end of relevant assessment year, sale of shares, or cessation of employment. The tax amount remains the same — only the payment timing is deferred. The employer deducts TDS only when the deferral period ends.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Which startups qualify for Section 80-IAC ESOP deferral?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Only startups holding both DPIIT recognition AND an Inter-Ministerial Board (IMB) Certificate under Section 80-IAC qualify for ESOP perquisite tax deferral under Section 192(1C). DPIIT recognition alone is not sufficient. The startup must be a private limited company or LLP, incorporated within the last 10 years, with annual turnover under ₹100 crore, and engaged in innovation, development or improvement of products or services.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Does ESOP perquisite tax apply to foreign company ESOPs?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. If an Indian employee receives ESOPs from a foreign parent company (such as a US-listed parent of an Indian subsidiary), Section 17(2)(vi) perquisite tax applies on the same FMV-minus-exercise-price basis. FMV is the foreign exchange price converted to INR at the SBI TT buying rate on the exercise date. Additionally, the foreign shares must be disclosed in Schedule FA of the ITR every year until disposed of.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is Form 67 and when must it be filed?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Form 67 is the statement of foreign tax credit (FTC) under Rule 128 of the Income-tax Rules, 1962. If foreign tax is paid on the same foreign-company ESOP income (e.g. US withholding tax), Form 67 must be filed online before the due date of the ITR to claim FTC under the relevant Double Taxation Avoidance Agreement. Without Form 67, the foreign tax credit claim is rejected during processing.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What are the surcharge rates on ESOP perquisite?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Surcharge depends on total taxable income including ESOP perquisite. Under the new regime: 10% if income exceeds ₹50 lakh, 15% above ₹1 crore, and 25% above ₹2 crore (capped — the 37% rate is removed). Old regime adds 37% above ₹5 crore. Health and Education Cess of 4% applies on tax plus surcharge in all cases. The marginal relief provision may apply at slab boundaries.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can the employee pay perquisite tax in instalments?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The statute does not prescribe instalments — TDS is due at exercise. However, most employers spread the TDS recovery across remaining months of the financial year through payroll, with the employee's consent. If a single-month deduction would make net salary unreasonably low, the employer may seek a written undertaking to recover in instalments. The total tax for the year remains unchanged.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the cash outflow needed to exercise an ESOP?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The total cash needed equals the exercise price multiplied by options exercised plus the perquisite TDS (unless Section 192(1C) deferral applies). For example, exercising 1,000 options at ₹10 strike with FMV ₹500 creates a perquisite of ₹4,90,000. At 30% slab plus 4% cess, TDS is ₹1,52,880. Cash needed equals ₹10,000 exercise price plus ₹1,52,880 TDS — ₹1,62,880 total.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is ESOP perquisite reported in the ITR?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The perquisite value already appears in Form 16 issued by the employer and pre-fills in the salary schedule of ITR-2 or ITR-3. The employee must file ITR-2 or ITR-3, never ITR-1, because ESOP holders typically have capital gains schedule entries. Foreign-company ESOP holders additionally fill Schedule FA (foreign assets) and Schedule TR for foreign tax relief, with Form 67 filed separately online.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Are ESOPs taxed at the time of grant or vesting?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No tax arises at grant or at vesting. Section 17(2)(vi) perquisite tax is triggered only on exercise — when the employee actually pays the exercise price and the company allots shares. Subsequently, when the employee sells the shares, capital gains tax applies on the difference between sale price and FMV at exercise. The tax journey for an ESOP holder has two events: exercise (salary perquisite) and sale (capital gains).</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is this Perquisite Tax Calculator a substitute for a CA opinion?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. This calculator gives directional perquisite tax computation under Section 17(2)(vi) using standard slab logic. Real-world ESOP taxation involves slab interaction with other salary income, marginal relief, surcharge thresholds, DTAA relief for foreign ESOPs, Form 67 timing, advance tax under Sections 234B and 234C, and Section 80-IAC verification. Always consult a Chartered Accountant before exercising material ESOP positions.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>Need ESOP Tax Planning?</h3>
<p>Exercise-date TDS, 80-IAC deferral verification, Form 67 + Schedule FA, advance tax — handled by chartered accountants.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20planning%20ESOP%20exercise%20tax%20and%20Form%2067%20%2F%20Schedule%20FA." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ESOP%20Tax%20Planning%20Help&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20ESOP%20exercise%20tax%20planning.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<div class="sidebar-card"><h3>Related Services</h3>
<a href="/esop-services" class="sidebar-link">ESOP Services Hub <span class="arrow">→</span></a>
<a href="/esop-valuation-services" class="sidebar-link">ESOP Valuation Services <span class="arrow">→</span></a>
<a href="/esop-management-and-compliance-services" class="sidebar-link">ESOP Management &amp; Compliance <span class="arrow">→</span></a>
<a href="/itr-filing-for-salary" class="sidebar-link">ITR Filing for Salary <span class="arrow">→</span></a>
<a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
<a href="/startup-registration" class="sidebar-link">Startup India Registration <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Tools</h3>
<a href="/tools/esop-pool-size-calculator" class="sidebar-link">ESOP Pool Size Calculator <span class="arrow">→</span></a>
<a href="/tools/esop-cost-to-company-calculator" class="sidebar-link">ESOP Cost to Company <span class="arrow">→</span></a>
<a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
<a href="/tools/tds-on-salary-calculator" class="sidebar-link">TDS on Salary Calculator <span class="arrow">→</span></a>
<a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Salary <span class="arrow">→</span></a>
<a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>From the Blog</h3>
<a href="/blog/share-transfer-procedure-in-private-limited-company-a-complete-guide" class="sidebar-link">ESOP in Private Limited Company <span class="arrow">→</span></a>
<a href="/blog/income-tax-scrutiny-and-assessment-representation-sections-1432-1433-and-144-explained" class="sidebar-link">Income Tax Scrutiny &amp; Assessment <span class="arrow">→</span></a>
<a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
</div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
function parseINR(raw){if(raw===undefined||raw===null)return NaN;const c=String(raw).replace(/[,\s₹%]/g,'');if(c==='')return NaN;const n=parseFloat(c);return isFinite(n)?n:NaN;}
let currentSurcharge=0,currentIAC='no',currentForeign='no';
function setSurcharge(b){const e=b.closest?(b.closest('.toggle-btn')||b):b;currentSurcharge=parseFloat(e.dataset.surcharge);e.parentElement.querySelectorAll('.toggle-btn').forEach(x=>x.classList.remove('active'));e.classList.add('active');if(document.getElementById('resultSection').classList.contains('visible'))calculate(true);}
function setIAC(b){const e=b.closest?(b.closest('.toggle-btn')||b):b;currentIAC=e.dataset.iac;e.parentElement.querySelectorAll('.toggle-btn').forEach(x=>x.classList.remove('active'));e.classList.add('active');if(document.getElementById('resultSection').classList.contains('visible'))calculate(true);}
function setForeign(b){const e=b.closest?(b.closest('.toggle-btn')||b):b;currentForeign=e.dataset.foreign;e.parentElement.querySelectorAll('.toggle-btn').forEach(x=>x.classList.remove('active'));e.classList.add('active');if(document.getElementById('resultSection').classList.contains('visible'))calculate(true);}
function showError(msg){const b=document.getElementById('errorBanner');b.textContent=msg;b.classList.add('visible');setTimeout(()=>b.classList.remove('visible'),6000);}
function fmtINR(n){if(!isFinite(n))return '—';if(Math.abs(n)>=1e7)return '₹'+(n/1e7).toLocaleString('en-IN',{maximumFractionDigits:2})+' Cr';if(Math.abs(n)>=1e5)return '₹'+(n/1e5).toLocaleString('en-IN',{maximumFractionDigits:2})+' L';return '₹'+n.toLocaleString('en-IN',{maximumFractionDigits:0});}
function fmtINRFull(n){if(!isFinite(n))return '—';return '₹'+n.toLocaleString('en-IN',{maximumFractionDigits:0});}

function calculate(silent){
const options=parseINR(document.getElementById('options').value);
const fmv=parseINR(document.getElementById('fmv').value);
const ep=parseINR(document.getElementById('exercisePrice').value);
const slab=parseFloat(document.getElementById('slabRate').value);

if(!isFinite(options)||options<=0||options>1e9){showError('Enter a valid number of options (1 to 1,000,000,000).');return;}
if(!isFinite(fmv)||fmv<=0){showError('Enter a valid FMV at exercise (greater than 0).');return;}
if(!isFinite(ep)||ep<0){showError('Enter a valid exercise price (0 or higher).');return;}
if(ep>fmv){showError('Exercise price exceeds FMV — no perquisite. Verify your inputs.');return;}
if(!isFinite(slab)||slab<0||slab>50){showError('Select a valid slab rate.');return;}

if(currentIAC==='yes'&&currentForeign==='yes'){showError('Note: Section 80-IAC deferral is not available for foreign-company ESOPs. Foreign-company rules apply.');}

const perqPerShare=fmv-ep;
const totalPerq=options*perqPerShare;
const tax=totalPerq*(slab/100);
const surcharge=tax*(currentSurcharge/100);
const cess=(tax+surcharge)*0.04;
const totalTDS=tax+surcharge+cess;
const exerciseCash=options*ep;
const totalCash=exerciseCash+totalTDS;
const effectiveRate=totalPerq>0?(totalTDS/totalPerq*100):0;
const deferralApplies=(currentIAC==='yes'&&currentForeign==='no');
const cashAtExercise=deferralApplies?exerciseCash:totalCash;

document.getElementById('resHeadline').textContent=fmtINR(totalTDS);
document.getElementById('resHeadlineMeta').textContent=options.toLocaleString('en-IN')+' options × ₹'+perqPerShare.toFixed(2)+' per-share perquisite • '+slab+'% slab + '+currentSurcharge+'% surcharge + 4% cess';

document.getElementById('resPerq').textContent=fmtINR(totalPerq);
document.getElementById('resSlab').textContent=fmtINR(tax);
document.getElementById('resSlabDesc').textContent=slab+'% on ₹'+totalPerq.toLocaleString('en-IN');
document.getElementById('resSurch').textContent=fmtINR(surcharge);
document.getElementById('resSurchDesc').textContent=currentSurcharge===0?'No surcharge':currentSurcharge+'% of tax';
document.getElementById('resCess').textContent=fmtINR(cess);
document.getElementById('resCash').textContent=fmtINR(cashAtExercise);
document.getElementById('resCashDesc').textContent=deferralApplies?'Only exercise price (TDS deferred under Sec 192(1C))':'Exercise price + TDS';
document.getElementById('resEffective').textContent=effectiveRate.toFixed(2)+'%';

document.getElementById('wOpts').textContent=options.toLocaleString('en-IN');
document.getElementById('wFMV').textContent='₹'+fmv.toLocaleString('en-IN');
document.getElementById('wEP').textContent='₹'+ep.toLocaleString('en-IN');
document.getElementById('wPerShare').textContent='₹'+perqPerShare.toFixed(2);
document.getElementById('wTotalPerq').textContent=fmtINRFull(totalPerq);
document.getElementById('wTax').textContent=fmtINRFull(tax);
document.getElementById('wSurch').textContent=fmtINRFull(surcharge);
document.getElementById('wCess').textContent=fmtINRFull(cess);
document.getElementById('wTotal').textContent=fmtINRFull(totalTDS);
document.getElementById('wExCash').textContent=fmtINRFull(exerciseCash);
document.getElementById('wTotalCash').textContent=fmtINRFull(totalCash);

const defFlag=document.getElementById('deferralFlag');
if(deferralApplies){defFlag.style.display='';document.getElementById('defAmt').textContent=fmtINR(totalTDS);document.getElementById('defDate').textContent='31 March 2031';document.getElementById('defExCash').textContent=fmtINR(exerciseCash);}else{defFlag.style.display='none';}

const fFlag=document.getElementById('foreignFlag');
fFlag.style.display=(currentForeign==='yes')?'':'none';

const section=document.getElementById('resultSection');
section.classList.add('visible');
if(!silent){requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});}); }
}

function resetCalc(){
document.getElementById('options').value='1000';
document.getElementById('fmv').value='500';
document.getElementById('exercisePrice').value='10';
document.getElementById('slabRate').value='30';
document.querySelectorAll('.toggle-group').forEach(g=>{g.querySelectorAll('.toggle-btn').forEach(x=>x.classList.remove('active'));const f=g.querySelector('.toggle-btn');if(f)f.classList.add('active');});
currentSurcharge=0;currentIAC='no';currentForeign='no';
document.getElementById('resultSection').classList.remove('visible');
document.getElementById('errorBanner').classList.remove('visible');
}

function toggleFaq(e){const b=e.closest?(e.closest('.faq-question')||e):e;const it=b.closest('.faq-item');if(!it)return;const o=it.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>{i.classList.remove('open');const q=i.querySelector('.faq-question');if(q)q.setAttribute('aria-expanded','false');});if(!o){it.classList.add('open');b.setAttribute('aria-expanded','true');}}

document.querySelectorAll('input[type="number"], input[type="text"]').forEach(i=>{i.addEventListener('keydown',function(e){if(e.key==='Enter'){e.preventDefault();calculate();}});});

const navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',()=>{const s=document.querySelectorAll('section[id], header[id]');let c='';s.forEach(x=>{const t=x.offsetTop-100;if(window.pageYOffset>=t)c=x.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});
</script>


<style>
/* ============================================
       STICKY WHATSAPP BAR
       ============================================ */
    .wa-sticky-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #0F6E56;
        z-index: 9999;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        box-shadow: 0 -4px 20px rgba(0,0,0,0.15);
        transition: transform 0.35s ease;
    }
    .wa-sticky-bar.hidden { transform: translateY(100%); }
    .wa-sticky-bar-content {
        display: flex;
        align-items: center;
        gap: 12px;
        max-width: 1320px;
        width: 100%;
        justify-content: center;
    }
    .wa-sticky-bar-icon {
        width: 36px; height: 36px; flex-shrink: 0;
        display: flex; align-items: center; justify-content: center;
        background: rgba(255,255,255,0.2); border-radius: 50%;
    }
    .wa-sticky-bar-icon svg { width: 20px; height: 20px; color: #fff; fill: #fff; }
    .wa-sticky-bar-text {
        font-family: 'Barlow', sans-serif;
        font-size: 15px; color: #fff; font-weight: 500;
    }
    .wa-sticky-bar-text strong { font-weight: 700; }
    .wa-sticky-bar-btn {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 22px; background: #fff; color: #0F6E56;
        font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
        border: none; border-radius: 50px; cursor: pointer;
        text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
    }
    .wa-sticky-bar-btn:hover { background: #E1F5EE; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
    .wa-sticky-bar-close {
        background: none; border: none; cursor: pointer;
        color: rgba(255,255,255,0.7); font-size: 22px; line-height: 1;
        padding: 4px 8px; transition: color 0.2s; flex-shrink: 0;
        font-family: 'Barlow', sans-serif; font-weight: 300;
    }
    .wa-sticky-bar-close:hover { color: #fff; }
    @media (max-width: 768px) {
        .wa-sticky-bar { padding: 8px 12px; gap: 8px; }
        .wa-sticky-bar-text { font-size: 13px; }
        .wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
        .wa-sticky-bar-icon { width: 30px; height: 30px; }
        .wa-sticky-bar-icon svg { width: 16px; height: 16px; }
    }
    @media (max-width: 480px) {
        .wa-sticky-bar-text { display: none; }
        .wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
        .wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
        .wa-sticky-bar-btn span { display: none; }
    }
</style>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> &mdash; get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

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


@endsection
