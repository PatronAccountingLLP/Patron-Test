@extends('layouts.app')
@section('meta')
<title>Tax Notice Penalty Calculator | Income Tax & GST</title>
<meta name="description" content="Tax notice penalty calculator for Income Tax & GST: estimate total exposure (tax + interest + penalty) and compare worst-case vs mitigated outcome. Try now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/notice-penalty-calculator">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/notice-penalty-calculator">
<meta property="og:title" content="Notice Penalty Exposure Calculator — IT/GST 2026">
<meta property="og:description" content="Compute total exposure (tax + interest + penalty) for IT or GST notices with mitigation comparison.">
<meta property="og:image" content="/og/notice-penalty-calculator.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Notice Penalty Exposure Calculator — IT/GST 2026">
<meta name="twitter:description" content="Compute tax + interest + penalty exposure for IT or GST notices with mitigation impact.">
<meta name="twitter:image" content="/og/notice-penalty-calculator.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"Notice Penalty Exposure Calculator","description":"Notice Penalty Exposure Calculator computes the total financial exposure on a tax notice received from the Income-tax Department or the GST Department. Inputs include the notice type (Income Tax or GST), the specific section or stage of the notice (Section 142(1), 143(2), 148, 156, 270A under-reporting, 270A misreporting, or 271 for Income Tax; ASMT-10, DRC-01A pre-show-cause, DRC-01 Section 73, DRC-01 Section 74, DRC-07 Section 73 order, DRC-07 Section 74 order, or Section 76 for GST), the disputed tax amount mentioned in the notice in Indian Rupees, the number of days since the notice was received (which drives Section 220(2) interest accrual for Income Tax), and the approximate number of months for which the tax has been outstanding (which drives Section 50 interest accrual at 18 percent per annum for GST). The output is a breakdown of total exposure (worst case versus Patron-mitigated case) showing tax component, accrued interest component, and penalty component, along with the potential savings from prompt and professional response. The tool also highlights specific mitigation pathways such as Section 270AA waiver for under-reporting penalty, payment before show-cause notice for GST Section 74 (reducing penalty from 100 percent to 15 percent), and payment within 30 days of DRC-07 order (reducing penalty from 100 percent to 50 percent).","url":"/tools/notice-penalty-calculator","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Notice Penalty Exposure Calculator","item":"/tools/notice-penalty-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"How is penalty under Section 270A of the Income-tax Act calculated?","acceptedAnswer":{"@type":"Answer","text":"Section 270A levies penalty for under-reporting and misreporting of income. For under-reporting (e.g., bona fide errors in computation), the penalty is 50 percent of the tax payable on the under-reported income. For misreporting (concealment, false claims, willful misstatement), the penalty escalates to 200 percent of the tax payable. Both penalties can be waived entirely under Section 270AA if the taxpayer pays the tax and interest in full within the time specified in the assessment order and does not file an appeal. Patron Accounting evaluates 270AA eligibility for every penalty case."}},
{"@type":"Question","name":"What is Section 220(2) interest on tax demand and how is it computed?","acceptedAnswer":{"@type":"Answer","text":"Section 220(2) of the Income-tax Act imposes simple interest at 1 percent per month (or part of a month) on tax demand that remains unpaid after 30 days from the date of demand notice under Section 156. The interest starts accruing from the 31st day after the demand notice and continues until the date of full payment. For example, if a demand of ₹10 lakh remains unpaid for 90 days, the additional interest is approximately ₹20,000 (2 months × 1 percent × ₹10 lakh). Patron negotiates payment plans and stay applications under Section 220(6) to manage cash flow during disputes."}},
{"@type":"Question","name":"How does GST Section 50 interest at 18 percent per annum work?","acceptedAnswer":{"@type":"Answer","text":"Section 50 of the CGST Act, 2017 imposes interest at 18 percent per annum on tax not paid or short paid. The interest is calculated from the due date of payment (typically the 20th of the month following the tax period) until actual payment. For tax disputes spanning multiple years, the interest can equal or exceed the original tax amount. For example, a ₹5 lakh GST demand from FY 2021-22 with a 4-year delay accrues approximately ₹3.6 lakh in interest alone. Reduced rate of 9 percent applies in specific cases under Rule 88B for partial credit in electronic credit ledger."}},
{"@type":"Question","name":"How much penalty does Section 73 of the CGST Act impose?","acceptedAnswer":{"@type":"Answer","text":"Section 73 (non-fraud cases) imposes penalty at 10 percent of the tax amount or ₹10,000, whichever is higher. Key mitigation: if you pay the tax and interest before the show-cause notice is issued, no penalty applies. If you pay before the final order is passed, the penalty is capped at 10 percent. If you pay within 30 days of the order, no additional penalty applies beyond the 10 percent already imposed. The total exposure for Section 73 is substantially lower than Section 74 — many cases can be re-categorised from Section 74 to Section 73 with skilled CA representation, dramatically reducing penalty."}},
{"@type":"Question","name":"How much penalty does Section 74 of the CGST Act impose and how can it be reduced?","acceptedAnswer":{"@type":"Answer","text":"Section 74 (fraud cases) imposes penalty equal to 100 percent of the tax amount in addition to the tax and interest. Mitigation pathways: (a) if you pay tax + interest + 15 percent penalty before the show-cause notice (DRC-01A stage), proceedings end; (b) if you pay tax + interest + 25 percent penalty before the final order, proceedings end; (c) if you pay within 30 days of the final order, the penalty is reduced to 50 percent; (d) after 30 days post-order, the full 100 percent penalty plus recovery proceedings apply. Strategic timing of payment can save up to 85 percent of the penalty exposure."}},
{"@type":"Question","name":"Can the calculator's worst-case figures be challenged in actual notice proceedings?","acceptedAnswer":{"@type":"Answer","text":"Yes — the calculator shows the maximum exposure under each section's penalty regime. In actual proceedings, multiple defences can reduce the final liability: (1) limitation defence (Section 73 demands beyond 3 years, Section 74 beyond 5 years are time-barred), (2) lack of fraud / suppression element for Section 74 cases (re-categorisation to Section 73), (3) bona fide mistake defence for Section 270A misreporting (re-categorisation to under-reporting), (4) procedural defects (missing DIN, jurisdiction, natural justice violations), (5) merit defences on the underlying issue. Patron Accounting's litigation team builds the full defence stack."}},
{"@type":"Question","name":"What is Section 270AA waiver and when can I claim it?","acceptedAnswer":{"@type":"Answer","text":"Section 270AA of the Income-tax Act allows complete waiver of penalty under Section 270A (under-reporting and misreporting) if three conditions are met: (1) the taxpayer pays the tax and interest payable as per the assessment order within the time specified in the notice of demand, (2) the taxpayer does not file an appeal against the assessment order, and (3) the taxpayer submits an application in Form 68 within one month from end of the month in which the order is received. Section 270AA waiver is not available for cases falling under Section 270A(9) — i.e., cases involving misreporting through false evidence, willful concealment of records, or claim of bogus expenditure. Patron Accounting evaluates and files 270AA applications strategically."}},
{"@type":"Question","name":"How long does interest under Section 220(2) keep accruing?","acceptedAnswer":{"@type":"Answer","text":"Interest under Section 220(2) at 1 percent per month continues to accrue until the demand is fully paid or the assessment is set aside on appeal. There is no upper cap on the accrual period. Practically, an unpaid demand of ₹10 lakh can attract ₹1.2 lakh in additional interest per year. The interest is calculated on the principal demand (tax + originally-imposed interest under 234A/B/C); the 220(2) interest itself does not compound. Patron negotiates instalment plans and stay applications under Section 220(6) to stop the accrual clock during legitimate disputes."}},
{"@type":"Question","name":"What is the difference between under-reporting and misreporting for IT penalty?","acceptedAnswer":{"@type":"Answer","text":"Under-reporting (Section 270A(2)) covers bona fide computation errors, deduction disallowances on technical grounds, transfer pricing adjustments — penalty is 50 percent of tax payable on the under-reported income. Misreporting (Section 270A(9)) covers more serious infractions: false claims, willful suppression, claims based on bogus invoices, undisclosed foreign income — penalty escalates to 200 percent. The categorisation depends on facts: did the taxpayer intentionally mislead the AO? Strong representation can often re-categorise misreporting cases as under-reporting, saving 150 percent of penalty. Patron's litigation team handles this re-categorisation routinely."}},
{"@type":"Question","name":"Does GST Section 76 (tax collected but not paid) have a mitigation path?","acceptedAnswer":{"@type":"Answer","text":"Section 76 has limited mitigation paths because the offence is collecting GST from customers and not depositing it with the government — a strict-liability provision. The penalty equals the tax not deposited, plus interest at 18 percent per annum from the date of collection. The only meaningful mitigation is timely full payment of tax + interest, which may result in reduced or no additional penalty under Section 76(11). There is no equivalent of Section 73/74 pre-SCN payment benefit. Section 76 cases should be settled with immediate full payment under CA guidance to limit cumulative exposure."}},
{"@type":"Question","name":"Can the calculator handle multi-year notices with cumulative interest?","acceptedAnswer":{"@type":"Answer","text":"The calculator estimates total exposure based on the tax amount and the months for which interest has been accruing (default 12 months). For multi-year notices, enter the most recent assessment year and the approximate months from the original due date of tax payment to the notice date. For a more precise computation involving multiple assessment years, multiple stages of accrual, or partial payments already made, request a free 15-min CA consultation. Patron computes the exact reconciled exposure for litigation strategy purposes."}},
{"@type":"Question","name":"Is the calculator output legally binding or advisory only?","acceptedAnswer":{"@type":"Answer","text":"The calculator output is advisory and educational only. It provides a directional estimate of penalty exposure based on the section's statutory penalty regime. The actual penalty levied by the Assessing Officer or GST Officer depends on facts, evidence, applicable case law, and the officer's discretion within the prescribed range. For actionable liability assessment and response strategy, engage a Chartered Accountant. Patron Accounting offers free 15-min review calls and end-to-end notice representation across Pune, Mumbai, Delhi, Gurugram, Hyderabad, Chennai, Bangalore, Kolkata and pan-India digitally."}},
{"@type":"Question","name":"How can Patron Accounting reduce my notice penalty exposure?","acceptedAnswer":{"@type":"Answer","text":"Patron's notice mitigation toolkit includes: (1) Procedural challenges — invalid DIN, missing 148A procedure, limitation defence, natural justice violations can quash notices entirely; (2) Re-categorisation — misreporting (200 percent) → under-reporting (50 percent); Section 74 (100 percent) → Section 73 (10 percent); (3) Statutory waivers — Section 270AA for IT under-reporting penalty; pre-SCN payment for GST Section 74; (4) Reduced rate of interest — Rule 88B for GST credit-ledger cases; (5) Appeal strategy — CIT(A), ITAT, GST Tribunal, High Court writ as appropriate; (6) Settlement options — Vivad se Vishwas, GST Amnesty schemes when notified. Average penalty reduction in handled cases is 40-70 percent."}}
]}
</script>
@endsection
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
:root{--primary:#15365f;--primary-light:#1f4a7a;--primary-dark:#0a2240;--accent:#f26522;--accent-light:#ff8347;--surface:#FAFAF8;--surface-alt:#F0EFEB;--card:#FFFFFF;--text:#414042;--text-secondary:#555555;--text-muted:#888888;--border:#E5E5E0;--success:#059669;--success-light:#10B981;--info:#0EA5E9;--warning:#D97706;--danger:#DC2626;--danger-light:#EF4444;--radius:12px;--radius-lg:20px;--shadow-sm:0 1px 3px rgba(0,0,0,0.06);--shadow-md:0 4px 16px rgba(0,0,0,0.08);--shadow-lg:0 8px 32px rgba(0,0,0,0.1);--font-body:'DM Sans',sans-serif;--font-mono:'Space Mono',monospace}
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
.form-group{margin-bottom:14px}
.form-group label{display:block;font-size:12px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:0.5px}
.form-group label .hint{display:block;font-size:11px;color:var(--text-muted);font-weight:500;text-transform:none;letter-spacing:0;margin-top:2px}
.form-group input,.form-group select{width:100%;padding:12px 14px;border:2px solid var(--border);border-radius:10px;font-family:var(--font-mono);font-size:15px;color:var(--text);background:var(--surface);outline:2px solid transparent;outline-offset:1px;transition:border-color 0.2s}
.form-group select{font-family:var(--font-body)}
.form-group input:focus-visible,.form-group select:focus-visible{border-color:var(--primary);outline-color:var(--primary)}
.form-group input.input-currency{padding-left:34px;background-image:linear-gradient(var(--surface),var(--surface)),linear-gradient(transparent,transparent);background-repeat:no-repeat;background-position:left 12px center;background-size:auto}
.input-wrap{position:relative}
.input-wrap::before{content:'₹';position:absolute;left:14px;top:50%;transform:translateY(-50%);color:var(--text-muted);font-family:var(--font-mono);font-size:15px;pointer-events:none;z-index:1}
.input-wrap input{padding-left:34px}
.section-title{font-family:var(--font-mono);font-size:11px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin:24px 0 12px;padding-bottom:6px;border-bottom:1px dashed var(--border);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px}
.section-title small{font-weight:500;color:var(--text-muted);text-transform:none;letter-spacing:0.3px}
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:80px;padding:10px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent;min-height:44px;text-align:center}
.toggle-btn *{pointer-events:none}
.toggle-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.toggle-btn:focus-visible{outline:2px solid var(--primary);outline-offset:2px}
.allegation-row{display:none}
.allegation-row.visible{display:block}
.input-grid-2{display:grid;grid-template-columns:1fr 1fr;gap:12px}
@media (max-width:480px){.input-grid-2{grid-template-columns:1fr}}
.btn-calculate{width:100%;padding:16px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s,transform 0.1s;margin-top:18px;min-height:52px}
.btn-calculate:hover{background:var(--primary-light)}
.btn-calculate:active{transform:scale(0.98)}
.btn-calculate:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.result-section{margin-top:28px;display:none}
.result-section.visible{display:block}
.result-divider{height:1px;background:var(--border);margin-bottom:24px}
.result-headline{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;padding:24px 28px;border-radius:var(--radius);margin-bottom:16px}
.result-headline .label{font-family:var(--font-mono);font-size:11px;text-transform:uppercase;letter-spacing:1.5px;opacity:0.85;margin-bottom:6px}
.result-headline .value{font-family:var(--font-mono);font-size:30px;font-weight:700;line-height:1.1;margin-bottom:6px;word-break:break-word}
.result-headline .accent{color:var(--accent-light)}
.result-headline .meta{font-size:13px;opacity:0.92;margin-top:8px;line-height:1.55}
.compare-grid{display:grid;grid-template-columns:1fr;gap:14px;margin-bottom:16px}
@media (min-width:640px){.compare-grid{grid-template-columns:1fr 1fr 1fr}}
.compare-card{padding:18px 20px;border-radius:var(--radius);border:2px solid var(--border);background:var(--surface)}
.compare-card.worst{background:#FEF2F2;border-color:var(--danger);position:relative}
.compare-card.worst::before{content:'WORST CASE';position:absolute;top:-9px;left:14px;background:var(--danger);color:#fff;font-family:var(--font-mono);font-size:9px;font-weight:700;padding:3px 8px;border-radius:4px;letter-spacing:1px}
.compare-card.mitigated{background:#ECFDF5;border-color:var(--success);position:relative}
.compare-card.mitigated::before{content:'WITH PATRON';position:absolute;top:-9px;left:14px;background:var(--success);color:#fff;font-family:var(--font-mono);font-size:9px;font-weight:700;padding:3px 8px;border-radius:4px;letter-spacing:1px}
.compare-card.savings{background:#FFF7ED;border-color:var(--accent);position:relative}
.compare-card.savings::before{content:'SAVINGS';position:absolute;top:-9px;left:14px;background:var(--accent);color:#fff;font-family:var(--font-mono);font-size:9px;font-weight:700;padding:3px 8px;border-radius:4px;letter-spacing:1px}
.compare-card .c-label{font-family:var(--font-mono);font-size:10px;text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:6px;margin-top:4px}
.compare-card.worst .c-label{color:var(--danger)}
.compare-card.mitigated .c-label{color:var(--success)}
.compare-card.savings .c-label{color:var(--accent)}
.compare-card .c-val{font-family:var(--font-mono);font-size:26px;font-weight:700;line-height:1.1;word-break:break-word;margin-bottom:4px}
.compare-card.worst .c-val{color:#991B1B}
.compare-card.mitigated .c-val{color:#065F46}
.compare-card.savings .c-val{color:#9A3412}
.compare-card .c-desc{font-size:12px;color:var(--text-secondary);line-height:1.45;margin-top:6px}
.breakdown-table{background:var(--surface);border-radius:var(--radius);padding:0;overflow:hidden;border:1px solid var(--border);margin-top:14px}
.breakdown-row{display:grid;grid-template-columns:1fr auto auto;gap:12px;padding:11px 18px;border-bottom:1px solid var(--border);font-size:14px;align-items:center}
.breakdown-row:last-child{border-bottom:none}
.breakdown-row.head{background:var(--primary);color:#fff;font-family:var(--font-mono);font-size:11px;text-transform:uppercase;letter-spacing:1px;font-weight:700;padding:10px 18px}
.breakdown-row .b-label{font-weight:500;color:var(--text)}
.breakdown-row .b-worst{font-family:var(--font-mono);font-weight:600;color:#991B1B;text-align:right;min-width:120px}
.breakdown-row .b-mitigated{font-family:var(--font-mono);font-weight:600;color:#065F46;text-align:right;min-width:120px}
.breakdown-row.total{background:var(--surface-alt);font-weight:700}
.breakdown-row.total .b-label{font-weight:700;color:var(--primary-dark)}
.breakdown-row.total .b-worst,.breakdown-row.total .b-mitigated{font-size:15px}
.section-detail{background:var(--surface-alt);border-radius:var(--radius);padding:20px 24px;margin-top:16px}
.section-detail h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:12px;font-weight:700}
.section-detail p{font-size:14px;color:var(--text-secondary);line-height:1.7;margin-bottom:10px}
.section-detail p strong{color:var(--primary-dark);font-weight:700}
.section-detail .formula{background:#fff;border:1px dashed var(--border);border-radius:8px;padding:10px 14px;font-family:var(--font-mono);font-size:12.5px;color:var(--primary-dark);margin:8px 0;line-height:1.6;word-break:break-word}
.section-detail ul{margin:8px 0 0 20px}
.section-detail li{font-size:13.5px;color:var(--text-secondary);margin-bottom:6px;line-height:1.6}
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
.rate-table tbody td{padding:12px 16px;border-bottom:1px solid var(--border);color:var(--text-secondary);vertical-align:top}
.rate-table tbody tr:nth-child(even){background:var(--surface)}
.rate-table tbody tr:hover{background:var(--surface-alt)}
.callout{background:#F0F5FB;border-left:4px solid var(--primary-light);border-radius:0 var(--radius) var(--radius) 0;padding:16px 20px;margin:16px 0}
.callout p{color:var(--primary-dark);margin-bottom:0;font-size:14px}
.callout strong{color:var(--primary-dark)}
.callout.warn{background:#FFFBEB;border-left-color:var(--accent)}
.callout.warn p{color:#78350F}
.callout.warn strong{color:#78350F}
.callout.danger{background:#FEE2E2;border-left-color:var(--danger)}
.callout.danger p{color:#991B1B}
.callout.danger strong{color:#991B1B}
.callout.success{background:#ECFDF5;border-left-color:var(--success)}
.callout.success p{color:#065F46}
.callout.success strong{color:#065F46}
.faq-item{background:var(--surface);border-radius:var(--radius);margin-bottom:10px;border:1px solid var(--border);overflow:hidden;transition:box-shadow 0.2s}
.faq-item:hover{box-shadow:var(--shadow-sm)}
.faq-question{display:flex;justify-content:space-between;align-items:center;width:100%;padding:16px 20px;border:none;background:none;font-family:var(--font-body);font-size:15px;font-weight:600;color:var(--text);cursor:pointer;text-align:left;line-height:1.4;gap:12px;-webkit-tap-highlight-color:transparent;min-height:52px}
.faq-question *{pointer-events:none}
.faq-question:focus-visible{outline:2px solid var(--primary);outline-offset:-2px}
.faq-icon{flex-shrink:0;width:24px;height:24px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;transition:transform 0.3s}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.4s ease}
.faq-item.open .faq-answer{max-height:900px}
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
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:18px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}.result-headline .value{font-size:22px}.compare-card .c-val{font-size:21px}.breakdown-row{grid-template-columns:1fr auto;gap:8px;padding:10px 14px}.breakdown-row .b-worst,.breakdown-row .b-mitigated{min-width:90px;font-size:13px}.breakdown-row.head .b-mitigated::before{content:'/ With CA'}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-calculate,.office-strip,.footer,.breadcrumb{display:none !important}body{background:#fff;color:#000;font-size:11pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:16px;margin-bottom:16px}.result-headline,.compare-card{-webkit-print-color-adjust:exact;print-color-adjust:exact}.hero h1{font-size:18pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}}
</style>

@section('content')

<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner">
<a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#it-rates">IT Penalty Rates</a><a href="#gst-rates">GST Penalty Rates</a><a href="#mitigation">Mitigation Paths</a><a href="#worked-example">Worked Examples</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>Notice Penalty Exposure Calculator</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>Notice Penalty Exposure Calculator — <span>Tax + Interest + Penalty</span> with Mitigation Impact</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Received an IT or GST notice with demand? <strong>Free 15-min CA review.</strong> Average penalty reduction in handled cases: 40-70%. End-to-end representation across India.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20received%20a%20tax%20notice%20with%20demand%20and%20need%20a%20free%20review." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Tax%20Notice%20Penalty%20Review&body=Hi%20Patron%20Accounting%2C%0A%0AI%20received%20a%20tax%20notice%20with%20demand%20and%20need%20a%20penalty%20exposure%20review.%0A%0ANotice%20type%20%28IT%2FGST%29%3A%20%0ASection%3A%20%0ADemand%20amount%3A%20%0ANotice%20date%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>This calculator estimates your <strong>total exposure</strong> on an Income Tax or GST notice — tax + interest + penalty — and shows the <strong>mitigation impact</strong> of prompt, professional response. Pick notice type, stage/section, demand amount, and days/months overdue; get a side-by-side comparison of <strong>worst-case vs Patron-mitigated outcome</strong> with potential savings highlighted. Built-in mitigation pathways: Section 270AA waiver for IT under-reporting, pre-SCN payment for GST Section 74 (15% vs 100% penalty), re-categorisation defences. <strong>Average penalty reduction in Patron-handled cases: 40-70%</strong>. Free 15-min CA review available.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Penalty Exposure Calculator</h2>
<p class="sub">Estimates worst-case vs mitigated total exposure for IT/GST notices based on section, demand amount, and elapsed time.</p>
<noscript><div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="section-title"><span>Notice Type</span><small>Pick one</small></div>
<div class="toggle-group" role="group" aria-label="Notice type">
<button type="button" class="toggle-btn active" data-type="IT" onclick="setNoticeType(this)">Income Tax<br><small style="font-weight:400;font-size:11px;opacity:0.7">CBDT / AO</small></button>
<button type="button" class="toggle-btn" data-type="GST" onclick="setNoticeType(this)">GST<br><small style="font-weight:400;font-size:11px;opacity:0.7">CBIC / SGST</small></button>
</div>

<div class="form-group" style="margin-top:18px;">
<label for="stageSelect">Stage / Section <span class="hint">As mentioned in the notice</span></label>
<select id="stageSelect" onchange="onStageChange()" aria-label="Notice stage or section"></select>
</div>

<div class="allegation-row" id="allegationRow">
<div class="section-title" style="margin-top:18px;"><span>Allegation Type</span><small>For Section 270A only</small></div>
<div class="toggle-group" role="group" aria-label="Allegation type">
<button type="button" class="toggle-btn active" data-alleg="under" onclick="setAllegation(this)">Under-reporting<br><small style="font-weight:400;font-size:11px;opacity:0.7">50% penalty</small></button>
<button type="button" class="toggle-btn" data-alleg="mis" onclick="setAllegation(this)">Misreporting<br><small style="font-weight:400;font-size:11px;opacity:0.7">200% penalty</small></button>
</div>
</div>

<div class="section-title" style="margin-top:18px;"><span>Amount &amp; Timing</span><small>Tax amount in ₹</small></div>
<div class="form-group">
<label for="demandAmount">Tax / Demand Amount in Notice <span class="hint">Pre-interest tax component</span></label>
<div class="input-wrap"><input type="text" id="demandAmount" inputmode="numeric" autocomplete="off" placeholder="10,00,000" oninput="formatINR(this)" aria-label="Tax demand amount"></div>
</div>

<div class="input-grid-2">
<div class="form-group">
<label for="daysSinceNotice">Days Since Notice <span class="hint">For 220(2) interest accrual</span></label>
<input type="number" id="daysSinceNotice" min="0" max="3650" value="15" autocomplete="off" aria-label="Days since notice">
</div>
<div class="form-group">
<label for="monthsOverdue">Months Tax Has Been Overdue <span class="hint">For 18% p.a. GST interest</span></label>
<input type="number" id="monthsOverdue" min="0" max="120" value="12" autocomplete="off" aria-label="Months overdue">
</div>
</div>

<button class="btn-calculate" onclick="calculate()" type="button">Calculate Penalty Exposure</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline">
<div class="label">Total Exposure (Worst Case)</div>
<div class="value">₹<span class="accent" id="resWorstTotal">—</span></div>
<div class="meta" id="resHeadlineMeta">—</div>
</div>

<div class="compare-grid">
<div class="compare-card worst"><div class="c-label">If You Delay / Ignore</div><div class="c-val" id="resWorstTotal2">₹—</div><div class="c-desc" id="resWorstDesc">Tax + Interest + Maximum Penalty</div></div>
<div class="compare-card mitigated"><div class="c-label">With Professional Reply</div><div class="c-val" id="resMitigatedTotal">₹—</div><div class="c-desc" id="resMitigatedDesc">Tax + Interest + Reduced/Waived Penalty</div></div>
<div class="compare-card savings"><div class="c-label">Potential Savings</div><div class="c-val" id="resSavings">₹—</div><div class="c-desc" id="resSavingsDesc">By acting promptly with Patron</div></div>
</div>

<div class="breakdown-table">
<div class="breakdown-row head"><div class="b-label">Component</div><div class="b-worst">Worst Case</div><div class="b-mitigated">With CA Help</div></div>
<div class="breakdown-row"><div class="b-label">Tax (principal)</div><div class="b-worst" id="resWorstTax">₹—</div><div class="b-mitigated" id="resMitigatedTax">₹—</div></div>
<div class="breakdown-row"><div class="b-label" id="interestLabel">Interest</div><div class="b-worst" id="resWorstInterest">₹—</div><div class="b-mitigated" id="resMitigatedInterest">₹—</div></div>
<div class="breakdown-row"><div class="b-label" id="penaltyLabel">Penalty</div><div class="b-worst" id="resWorstPenalty">₹—</div><div class="b-mitigated" id="resMitigatedPenalty">₹—</div></div>
<div class="breakdown-row total"><div class="b-label">TOTAL EXPOSURE</div><div class="b-worst" id="resWorstTotalRow">₹—</div><div class="b-mitigated" id="resMitigatedTotalRow">₹—</div></div>
</div>

<div class="section-detail">
<h4>How This Was Calculated</h4>
<p id="resExplanation">—</p>
<div class="formula" id="resFormula">—</div>
<h4 style="margin-top:14px;">Mitigation Pathway</h4>
<p id="resMitigationPath">—</p>
<h4 style="margin-top:14px;">Recommended Action</h4>
<ul id="resActionList"></ul>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head" id="postCtaHead">Want to capture this saving?</div>
<div class="post-result-cta-sub">The mitigation paths shown above require timely, well-drafted response. Free 15-min CA review to validate strategy. End-to-end response drafting, filing, and hearing representation at fixed-fee rates.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20calculated%20penalty%20exposure%20and%20need%20a%20free%2015-min%20review." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Notice%20Penalty%20Mitigation&body=Hi%2C%20I%20just%20calculated%20penalty%20exposure%20on%20a%20notice%20and%20need%20a%20free%2015-min%20review.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print Result</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the Penalty Exposure Calculator</h2>
<ol>
<li><strong>Pick notice type — Income Tax or GST.</strong> The penalty regime differs significantly between the two.</li>
<li><strong>Select the stage / section.</strong> If you don't know the section, use our <a href="/tools/notice-section-identifier">Notice Section Identifier tool</a> first to identify it from the notice content.</li>
<li><strong>Enter the tax demand amount.</strong> This should be the principal tax demanded (pre-interest, pre-penalty). Most notices state this clearly. If the notice shows total (tax + interest + penalty), enter only the tax component.</li>
<li><strong>Enter days since the notice was received.</strong> This drives Section 220(2) interest accrual for IT (1% per month after 30 days) and helps determine which mitigation window is still open for GST.</li>
<li><strong>Enter months the tax has been overdue.</strong> For GST, interest under Section 50 (18% per annum) is calculated from the original due date of payment. If the notice is for FY 2024-25, the months overdue could be 12-24 already.</li>
<li><strong>For IT Section 270A only:</strong> Pick under-reporting or misreporting. Under-reporting attracts 50% penalty; misreporting (concealment, false claims) attracts 200%.</li>
<li><strong>Click Calculate.</strong> See worst-case exposure vs mitigated exposure side-by-side, with detailed component breakdown.</li>
<li><strong>Engage Patron to capture the saving.</strong> The mitigated outcome assumes a competent CA response. Free 15-min call to validate the strategy.</li>
</ol>

<div class="callout warn"><p><strong>Important:</strong> The output is a directional estimate based on statutory penalty rates and standard mitigation pathways. Actual penalty levied depends on facts, evidence, applicable case law, and officer's discretion. Always engage a CA before responding.</p></div>
</section>

<section class="content-section" id="it-rates">
<h2>Income Tax Penalty Rates by Section</h2>

<table class="rate-table">
<thead><tr><th>Section</th><th>Penalty Rate (Worst Case)</th><th>Mitigated Rate</th><th>Mitigation Path</th></tr></thead>
<tbody>
<tr><td><strong>270A — Under-reporting</strong></td><td>50% of tax</td><td>0%</td><td>Section 270AA waiver (pay tax + interest, no appeal)</td></tr>
<tr><td><strong>270A — Misreporting</strong></td><td>200% of tax</td><td>50%</td><td>Re-categorise as under-reporting; or 270AA waiver</td></tr>
<tr><td><strong>271(1)(c) — Concealment (legacy)</strong></td><td>100% to 300%</td><td>50%</td><td>Reliance Petroproducts, MAK Data defences</td></tr>
<tr><td><strong>156 — Demand notice</strong></td><td>1% p.m. interest post-30 days</td><td>0% if paid in 30 days</td><td>Pay or stay under Section 220(6)</td></tr>
<tr><td><strong>234A/B/C — Interest</strong></td><td>1% p.m. on tax</td><td>Reduced via revision</td><td>Rectification under Section 154</td></tr>
<tr><td><strong>143(2) Scrutiny</strong></td><td>50% potential 270A</td><td>0%</td><td>Strong reply prevents penalty initiation</td></tr>
<tr><td><strong>148 Reassessment</strong></td><td>50% potential 270A</td><td>0%</td><td>Procedural challenges (148A); 270AA</td></tr>
</tbody>
</table>

<h3>Section 270AA Waiver — The Most Powerful Mitigation Tool</h3>
<p>Section 270AA (introduced by Finance Act 2016) allows complete penalty waiver under Section 270A if three conditions are satisfied:</p>
<ol>
<li>The taxpayer pays the tax and interest payable as per the assessment order within the time specified in the demand notice (typically 30 days)</li>
<li>The taxpayer does not file an appeal against the assessment order</li>
<li>The taxpayer files an application in Form 68 within one month from the end of the month in which the assessment order is received</li>
</ol>

<div class="callout success"><p><strong>Strategic Use:</strong> Section 270AA is ideal when the underlying tax demand is acceptable but you want to avoid the 50% penalty. It's not available for misreporting under Section 270A(9), i.e., cases involving false evidence, willful concealment, or claim of bogus expenditure. Patron evaluates 270AA eligibility for every assessment-completion case.</p></div>
</section>

<section class="content-section" id="gst-rates">
<h2>GST Penalty Rates by Section / Stage</h2>

<table class="rate-table">
<thead><tr><th>Stage / Section</th><th>Penalty (Worst Case)</th><th>Mitigated</th><th>Mitigation Path</th></tr></thead>
<tbody>
<tr><td><strong>ASMT-10 / Section 61</strong></td><td>10% potential 73</td><td>0%</td><td>Clean reconciliation prevents DRC-01</td></tr>
<tr><td><strong>DRC-01A — Pre-SCN (Section 74)</strong></td><td>100% post-order</td><td>15%</td><td>Pay before SCN → 15% only</td></tr>
<tr><td><strong>DRC-01 SCN — Section 73</strong></td><td>10% of tax (₹10K min)</td><td>0%</td><td>Pay before order → no penalty</td></tr>
<tr><td><strong>DRC-01 SCN — Section 74</strong></td><td>100% of tax</td><td>25%</td><td>Pay before order → 25%</td></tr>
<tr><td><strong>DRC-07 Order — Section 73</strong></td><td>10% (fixed)</td><td>10%</td><td>Pay within 30 days, no additional</td></tr>
<tr><td><strong>DRC-07 Order — Section 74</strong></td><td>100% (after 30 days)</td><td>50%</td><td>Pay within 30 days of order</td></tr>
<tr><td><strong>Section 76</strong></td><td>100% (mandatory)</td><td>100%</td><td>Limited mitigation — pay tax + interest fast</td></tr>
<tr><td><strong>Section 50 — Interest</strong></td><td>18% p.a.</td><td>9% (Rule 88B cases)</td><td>Credit ledger reversal cases</td></tr>
</tbody>
</table>

<h3>Section 74 Mitigation Waterfall — Where Most Money Is Saved</h3>
<p>Section 74 of the CGST Act imposes 100% penalty in fraud cases. The penalty reduces dramatically based on when you pay:</p>

<table class="rate-table">
<thead><tr><th>Stage of Payment</th><th>Penalty</th><th>Savings vs Worst</th></tr></thead>
<tbody>
<tr><td>Before DRC-01A pre-SCN issued</td><td>0% (under Section 73, voluntary)</td><td>100% of tax</td></tr>
<tr><td>After DRC-01A, before DRC-01 SCN</td><td>15% of tax</td><td>85% of tax</td></tr>
<tr><td>After DRC-01, before DRC-07 order</td><td>25% of tax</td><td>75% of tax</td></tr>
<tr><td>Within 30 days of DRC-07 order</td><td>50% of tax</td><td>50% of tax</td></tr>
<tr><td>After 30 days of DRC-07 order</td><td>100% of tax</td><td>0%</td></tr>
</tbody>
</table>

<div class="callout warn"><p><strong>For a ₹10 lakh GST Section 74 dispute, pre-SCN payment saves ₹8.5 lakh in penalty alone</strong> compared to letting it escalate to a final order. Strategic timing of payment requires a CA's judgement on the strength of the underlying defence.</p></div>
</section>

<div class="body-cta">
<h3>Free 15-Min Penalty Mitigation Review</h3>
<p>Send us the notice; we'll confirm the section, compute the actual exposure, and recommend the optimal mitigation strategy in 15 minutes. Free, no commitment.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20a%20free%20notice%20penalty%20mitigation%20review." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Penalty%20Mitigation%20Review&body=Hi%2C%20we%27d%20like%20a%20free%20penalty%20mitigation%20review.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="mitigation">
<h2>Patron's Mitigation Toolkit</h2>

<h3>1. Procedural Challenges</h3>
<ul>
<li><strong>DIN defect:</strong> Notices without a valid Document Identification Number are non-est. Both CBDT (Circular 19/2019) and CBIC (Circular 122/41/2019) mandate DIN since 2019.</li>
<li><strong>Missing 148A procedure:</strong> Section 148 reassessment notices without prior 148A(b) show-cause and 148A(d) order are procedurally defective and quashable in writ.</li>
<li><strong>Limitation defence:</strong> Section 73 GST cases beyond 3 years and Section 74 beyond 5 years from due date of annual return are time-barred. IT reassessment under Section 148 has 4 / 10-year limits based on amount.</li>
<li><strong>Jurisdiction:</strong> Notices issued by an officer without territorial or pecuniary jurisdiction are bad in law.</li>
<li><strong>Natural justice:</strong> Orders passed without adequate hearing, without recording reasons, or in violation of audi alteram partem can be set aside.</li>
</ul>

<h3>2. Re-categorisation Defences</h3>
<ul>
<li><strong>Misreporting (200%) → Under-reporting (50%):</strong> Demonstrating bona fide computation error, technical disallowance, or reliance on professional advice can save 150% of penalty</li>
<li><strong>Section 74 (100%) → Section 73 (10%):</strong> Showing absence of fraud, willful misstatement, or suppression of facts can re-categorise GST notices and save 90% of penalty</li>
<li><strong>Concealment penalty (Section 271(1)(c)) → No penalty:</strong> Reliance Petroproducts (Supreme Court) and MAK Data defences for technical disallowances</li>
</ul>

<h3>3. Statutory Waivers</h3>
<ul>
<li><strong>Section 270AA (IT):</strong> Full waiver of 270A penalty if tax + interest paid in time and no appeal filed. Patron files Form 68 application.</li>
<li><strong>Section 73(8) GST:</strong> No penalty if tax + interest paid before SCN issued. Patron computes optimal payment route.</li>
<li><strong>Section 74(8) GST:</strong> 15% penalty if tax + interest + penalty paid before SCN. Strategic election based on dispute strength.</li>
<li><strong>Rule 88B GST:</strong> Reduced interest at 9% (vs 18%) for credit-ledger reversal cases. Often missed by self-represented taxpayers.</li>
</ul>

<h3>4. Appeal Strategy</h3>
<ul>
<li><strong>CIT(A) / GST First Appellate:</strong> Within 30 days / 3 months of order. 7.5% / 10% pre-deposit. Patron drafts and represents.</li>
<li><strong>ITAT / GST Tribunal:</strong> Next stage with 20% / 20% pre-deposit. Counsel coordination through Patron's panel.</li>
<li><strong>High Court / Supreme Court:</strong> For pure questions of law or fundamental rights. Patron coordinates with senior counsels.</li>
<li><strong>Writ jurisdiction:</strong> For procedural challenges (DIN, 148A, limitation, jurisdiction) — faster relief without appellate process.</li>
</ul>
</section>

<section class="content-section" id="worked-example">
<h2>Worked Examples — Real-Case Mitigation</h2>

<h3>Example 1 — GST Section 74 Notice (₹10 Lakh Tax)</h3>
<p>Client received DRC-01 SCN under Section 74 for ₹10,00,000 alleging wrong ITC availment with willful suppression. Tax period: FY 2023-24 (15 months overdue at notice date).</p>

<table class="rate-table">
<thead><tr><th>Component</th><th>Worst Case (Ignore Notice)</th><th>Patron Mitigated (Pay Before Order)</th></tr></thead>
<tbody>
<tr><td>Tax (principal)</td><td>₹10,00,000</td><td>₹10,00,000</td></tr>
<tr><td>Interest @ 18% p.a. × 15 months</td><td>₹2,25,000</td><td>₹2,25,000</td></tr>
<tr><td>Penalty</td><td>₹10,00,000 (100%)</td><td>₹2,50,000 (25%)</td></tr>
<tr><td><strong>Total Exposure</strong></td><td><strong>₹22,25,000</strong></td><td><strong>₹14,75,000</strong></td></tr>
<tr><td><strong>Savings</strong></td><td>—</td><td><strong>₹7,50,000 (33.7%)</strong></td></tr>
</tbody>
</table>

<p>Patron's strategy: Filed reply contesting fraud allegation while paying tax + interest + 25% penalty before DRC-07 order. Re-categorisation attempt to Section 73 simultaneously argued — if successful, further saving of ₹1.5 lakh.</p>

<h3>Example 2 — IT Section 270A Misreporting (₹5 Lakh Tax)</h3>
<p>Client received Section 270A penalty notice for misreporting (200%) on ₹5,00,000 tax — disallowance of expenses under Section 14A. Tax demand under Section 156 already paid.</p>

<table class="rate-table">
<thead><tr><th>Component</th><th>Worst Case (Pay 200% Penalty)</th><th>Patron Mitigated (Re-categorisation + 270AA)</th></tr></thead>
<tbody>
<tr><td>Tax (already paid)</td><td>₹5,00,000</td><td>₹5,00,000</td></tr>
<tr><td>Section 220(2) interest (60 days)</td><td>₹5,000</td><td>₹5,000</td></tr>
<tr><td>Penalty</td><td>₹10,00,000 (200%)</td><td>₹0 (waiver via 270AA)</td></tr>
<tr><td><strong>Total Exposure</strong></td><td><strong>₹15,05,000</strong></td><td><strong>₹5,05,000</strong></td></tr>
<tr><td><strong>Savings</strong></td><td>—</td><td><strong>₹10,00,000 (66.4%)</strong></td></tr>
</tbody>
</table>

<p>Patron's strategy: Argued that Section 14A disallowance is a technical adjustment, not misreporting (no false evidence or willful concealment). Filed Form 68 for 270AA waiver simultaneously. Result: penalty waived entirely.</p>

<h3>Example 3 — GST Section 73 ASMT-10 Scrutiny (₹2 Lakh ITC Mismatch)</h3>
<p>Client received ASMT-10 notice for ITC mismatch of ₹2,00,000 between GSTR-3B and GSTR-2B.</p>

<table class="rate-table">
<thead><tr><th>Component</th><th>Worst Case (DRC-01 Escalation)</th><th>Patron Mitigated (ASMT-10 Reply)</th></tr></thead>
<tbody>
<tr><td>Tax (after reconciliation)</td><td>₹2,00,000</td><td>₹50,000 (only genuine mismatch)</td></tr>
<tr><td>Interest</td><td>₹36,000</td><td>₹9,000</td></tr>
<tr><td>Penalty</td><td>₹20,000 (10%)</td><td>₹0</td></tr>
<tr><td><strong>Total Exposure</strong></td><td><strong>₹2,56,000</strong></td><td><strong>₹59,000</strong></td></tr>
<tr><td><strong>Savings</strong></td><td>—</td><td><strong>₹1,97,000 (76.9%)</strong></td></tr>
</tbody>
</table>

<p>Patron's strategy: Reconciled GSTR-3B / 2B item-by-item. Identified that ₹1.5 lakh of the alleged mismatch was suppliers' delay in filing GSTR-1 — not real ITC ineligibility. Filed detailed reply with supplier compliance evidence. ASMT-10 closed without DRC-01 escalation.</p>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is penalty under Section 270A of the Income-tax Act calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 270A levies penalty for under-reporting and misreporting of income. For under-reporting (e.g., bona fide errors in computation), the penalty is 50 percent of the tax payable on the under-reported income. For misreporting (concealment, false claims, willful misstatement), the penalty escalates to 200 percent of the tax payable. Both penalties can be waived entirely under Section 270AA if the taxpayer pays the tax and interest in full within the time specified in the assessment order and does not file an appeal. Patron Accounting evaluates 270AA eligibility for every penalty case.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is Section 220(2) interest on tax demand and how is it computed?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 220(2) of the Income-tax Act imposes simple interest at 1 percent per month (or part of a month) on tax demand that remains unpaid after 30 days from the date of demand notice under Section 156. The interest starts accruing from the 31st day after the demand notice and continues until the date of full payment. For example, if a demand of ₹10 lakh remains unpaid for 90 days, the additional interest is approximately ₹20,000 (2 months × 1 percent × ₹10 lakh). Patron negotiates payment plans and stay applications under Section 220(6) to manage cash flow during disputes.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How does GST Section 50 interest at 18 percent per annum work?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 50 of the CGST Act, 2017 imposes interest at 18 percent per annum on tax not paid or short paid. The interest is calculated from the due date of payment (typically the 20th of the month following the tax period) until actual payment. For tax disputes spanning multiple years, the interest can equal or exceed the original tax amount. For example, a ₹5 lakh GST demand from FY 2021-22 with a 4-year delay accrues approximately ₹3.6 lakh in interest alone. Reduced rate of 9 percent applies in specific cases under Rule 88B for partial credit in electronic credit ledger.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How much penalty does Section 73 of the CGST Act impose?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 73 (non-fraud cases) imposes penalty at 10 percent of the tax amount or ₹10,000, whichever is higher. Key mitigation: if you pay the tax and interest before the show-cause notice is issued, no penalty applies. If you pay before the final order is passed, the penalty is capped at 10 percent. If you pay within 30 days of the order, no additional penalty applies beyond the 10 percent already imposed. The total exposure for Section 73 is substantially lower than Section 74 — many cases can be re-categorised from Section 74 to Section 73 with skilled CA representation, dramatically reducing penalty.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How much penalty does Section 74 of the CGST Act impose and how can it be reduced?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 74 (fraud cases) imposes penalty equal to 100 percent of the tax amount in addition to the tax and interest. Mitigation pathways: (a) if you pay tax + interest + 15 percent penalty before the show-cause notice (DRC-01A stage), proceedings end; (b) if you pay tax + interest + 25 percent penalty before the final order, proceedings end; (c) if you pay within 30 days of the final order, the penalty is reduced to 50 percent; (d) after 30 days post-order, the full 100 percent penalty plus recovery proceedings apply. Strategic timing of payment can save up to 85 percent of the penalty exposure.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can the calculator's worst-case figures be challenged in actual notice proceedings?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes — the calculator shows the maximum exposure under each section's penalty regime. In actual proceedings, multiple defences can reduce the final liability: (1) limitation defence (Section 73 demands beyond 3 years, Section 74 beyond 5 years are time-barred), (2) lack of fraud / suppression element for Section 74 cases (re-categorisation to Section 73), (3) bona fide mistake defence for Section 270A misreporting (re-categorisation to under-reporting), (4) procedural defects (missing DIN, jurisdiction, natural justice violations), (5) merit defences on the underlying issue. Patron Accounting's litigation team builds the full defence stack.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is Section 270AA waiver and when can I claim it?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 270AA of the Income-tax Act allows complete waiver of penalty under Section 270A (under-reporting and misreporting) if three conditions are met: (1) the taxpayer pays the tax and interest payable as per the assessment order within the time specified in the notice of demand, (2) the taxpayer does not file an appeal against the assessment order, and (3) the taxpayer submits an application in Form 68 within one month from end of the month in which the order is received. Section 270AA waiver is not available for cases falling under Section 270A(9) — i.e., cases involving misreporting through false evidence, willful concealment of records, or claim of bogus expenditure. Patron Accounting evaluates and files 270AA applications strategically.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How long does interest under Section 220(2) keep accruing?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Interest under Section 220(2) at 1 percent per month continues to accrue until the demand is fully paid or the assessment is set aside on appeal. There is no upper cap on the accrual period. Practically, an unpaid demand of ₹10 lakh can attract ₹1.2 lakh in additional interest per year. The interest is calculated on the principal demand (tax + originally-imposed interest under 234A/B/C); the 220(2) interest itself does not compound. Patron negotiates instalment plans and stay applications under Section 220(6) to stop the accrual clock during legitimate disputes.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the difference between under-reporting and misreporting for IT penalty?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Under-reporting (Section 270A(2)) covers bona fide computation errors, deduction disallowances on technical grounds, transfer pricing adjustments — penalty is 50 percent of tax payable on the under-reported income. Misreporting (Section 270A(9)) covers more serious infractions: false claims, willful suppression, claims based on bogus invoices, undisclosed foreign income — penalty escalates to 200 percent. The categorisation depends on facts: did the taxpayer intentionally mislead the AO? Strong representation can often re-categorise misreporting cases as under-reporting, saving 150 percent of penalty. Patron's litigation team handles this re-categorisation routinely.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Does GST Section 76 (tax collected but not paid) have a mitigation path?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 76 has limited mitigation paths because the offence is collecting GST from customers and not depositing it with the government — a strict-liability provision. The penalty equals the tax not deposited, plus interest at 18 percent per annum from the date of collection. The only meaningful mitigation is timely full payment of tax + interest, which may result in reduced or no additional penalty under Section 76(11). There is no equivalent of Section 73/74 pre-SCN payment benefit. Section 76 cases should be settled with immediate full payment under CA guidance to limit cumulative exposure.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can the calculator handle multi-year notices with cumulative interest?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The calculator estimates total exposure based on the tax amount and the months for which interest has been accruing (default 12 months). For multi-year notices, enter the most recent assessment year and the approximate months from the original due date of tax payment to the notice date. For a more precise computation involving multiple assessment years, multiple stages of accrual, or partial payments already made, request a free 15-min CA consultation. Patron computes the exact reconciled exposure for litigation strategy purposes.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is the calculator output legally binding or advisory only?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The calculator output is advisory and educational only. It provides a directional estimate of penalty exposure based on the section's statutory penalty regime. The actual penalty levied by the Assessing Officer or GST Officer depends on facts, evidence, applicable case law, and the officer's discretion within the prescribed range. For actionable liability assessment and response strategy, engage a Chartered Accountant. Patron Accounting offers free 15-min review calls and end-to-end notice representation across Pune, Mumbai, Delhi, Gurugram, Hyderabad, Chennai, Bangalore, Kolkata and pan-India digitally.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How can Patron Accounting reduce my notice penalty exposure?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Patron's notice mitigation toolkit includes: (1) Procedural challenges — invalid DIN, missing 148A procedure, limitation defence, natural justice violations can quash notices entirely; (2) Re-categorisation — misreporting (200 percent) → under-reporting (50 percent); Section 74 (100 percent) → Section 73 (10 percent); (3) Statutory waivers — Section 270AA for IT under-reporting penalty; pre-SCN payment for GST Section 74; (4) Reduced rate of interest — Rule 88B for GST credit-ledger cases; (5) Appeal strategy — CIT(A), ITAT, GST Tribunal, High Court writ as appropriate; (6) Settlement options — Vivad se Vishwas, GST Amnesty schemes when notified. Average penalty reduction in handled cases is 40-70 percent.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>Free 15-Min Review</h3>
<p>Send notice — get section confirmation, exposure computation, and mitigation strategy in 15 minutes. Free.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20a%20free%2015-min%20penalty%20review." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Penalty%20Review&body=Hi%2C%20we%27d%20like%20a%20free%2015-min%20penalty%20review.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<div class="sidebar-card"><h3>City Service Pages</h3>
<a href="/income-tax-notice/hyderabad" class="sidebar-link">IT Notice CA in Hyderabad <span class="arrow">→</span></a>
<a href="/income-tax-notice/chennai" class="sidebar-link">IT Notice CA in Chennai <span class="arrow">→</span></a>
<a href="/income-tax-notice/pune" class="sidebar-link">IT Notice CA in Pune <span class="arrow">→</span></a>
<a href="/income-tax-notice/mumbai" class="sidebar-link">IT Notice CA in Mumbai <span class="arrow">→</span></a>
<a href="/income-tax-notice/delhi" class="sidebar-link">IT Notice CA in Delhi <span class="arrow">→</span></a>
<a href="/income-tax-notice/bangalore" class="sidebar-link">IT Notice CA in Bangalore <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Services</h3>
<a href="/income-tax-notice-response" class="sidebar-link">IT Notice Response <span class="arrow">→</span></a>
<a href="/gst-notice-reply" class="sidebar-link">GST Notice Reply <span class="arrow">→</span></a>
<a href="/scrutiny-assessment" class="sidebar-link">Scrutiny Assessment <span class="arrow">→</span></a>
<a href="/income-tax-litigation" class="sidebar-link">IT Litigation &amp; Appeals <span class="arrow">→</span></a>
<a href="/gst-litigation" class="sidebar-link">GST Litigation &amp; Appeals <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Tools</h3>
<a href="/tools/notice-section-identifier" class="sidebar-link">Notice Section Identifier <span class="arrow">→</span></a>
<a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
<a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator <span class="arrow">→</span></a>
<a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
</div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
function showError(msg){const b=document.getElementById('errorBanner');b.textContent=msg;b.classList.add('visible');setTimeout(()=>b.classList.remove('visible'),6000);}
function parseINR(v){if(typeof v!=='string')return Number(v)||0;const c=v.replace(/[₹,\s]/g,'').trim();const n=parseFloat(c);return isFinite(n)?n:0;}
function formatINR(el){const v=parseINR(el.value);if(v===0&&el.value===''){return;}el.value=v.toLocaleString('en-IN');}
function fmt(n){if(!isFinite(n))return '0';return Math.round(n).toLocaleString('en-IN');}
function fmtCr(n){const c=n/10000000;if(Math.abs(c)>=1)return '₹'+c.toFixed(2)+' Cr';const l=n/100000;if(Math.abs(l)>=1)return '₹'+l.toFixed(2)+' L';return '₹'+fmt(n);}

let currentType = 'IT';
let currentAllegation = 'under';

const STAGES = {
    IT: [
        {val: '142_1', label: 'Section 142(1) — Information / Return notice', basePenalty: 0, mitPenalty: 0, baseInterest: 'none', mitInterest: 'none', interestRate: 0},
        {val: '143_2', label: 'Section 143(2) — Scrutiny notice', basePenalty: 0.50, mitPenalty: 0, baseInterest: 'none', mitInterest: 'none', interestRate: 0},
        {val: '148', label: 'Section 148 / 148A — Reassessment', basePenalty: 0.50, mitPenalty: 0, baseInterest: 'none', mitInterest: 'none', interestRate: 0},
        {val: '156', label: 'Section 156 — Demand notice', basePenalty: 0, mitPenalty: 0, baseInterest: '220_2', mitInterest: 'none', interestRate: 0.01},
        {val: '270A', label: 'Section 270A — Penalty proceedings', basePenalty: 0.50, mitPenalty: 0, baseInterest: '220_2', mitInterest: '220_2', interestRate: 0.01},
        {val: '271', label: 'Section 271(1)(c) — Concealment (legacy)', basePenalty: 1.00, mitPenalty: 0.50, baseInterest: '220_2', mitInterest: '220_2', interestRate: 0.01}
    ],
    GST: [
        {val: 'asmt10', label: 'ASMT-10 / Section 61 — Scrutiny', basePenalty: 0.10, mitPenalty: 0, baseInterest: 'gst', mitInterest: 'gst', interestRate: 0.015},
        {val: 'drc01a', label: 'DRC-01A — Pre-SCN intimation (Sec 74)', basePenalty: 1.00, mitPenalty: 0.15, baseInterest: 'gst', mitInterest: 'gst', interestRate: 0.015},
        {val: 'drc01_73', label: 'DRC-01 SCN — Section 73 (non-fraud)', basePenalty: 0.10, mitPenalty: 0, baseInterest: 'gst', mitInterest: 'gst', interestRate: 0.015},
        {val: 'drc01_74', label: 'DRC-01 SCN — Section 74 (fraud)', basePenalty: 1.00, mitPenalty: 0.25, baseInterest: 'gst', mitInterest: 'gst', interestRate: 0.015},
        {val: 'drc07_73', label: 'DRC-07 Order — Section 73', basePenalty: 0.10, mitPenalty: 0.10, baseInterest: 'gst', mitInterest: 'gst', interestRate: 0.015},
        {val: 'drc07_74', label: 'DRC-07 Order — Section 74', basePenalty: 1.00, mitPenalty: 0.50, baseInterest: 'gst', mitInterest: 'gst', interestRate: 0.015},
        {val: 's76', label: 'Section 76 — Tax collected, not paid', basePenalty: 1.00, mitPenalty: 1.00, baseInterest: 'gst', mitInterest: 'gst', interestRate: 0.015}
    ]
};

const STAGE_EXPLAIN = {
    '142_1': {explain: 'Section 142(1) is an information notice — no direct penalty. However, if you fail to comply, the AO may proceed to best-judgment assessment under Section 144 with potential 270A penalty.', mitPath: 'Respond fully and on time. Even partial compliance can avoid escalation. Patron drafts compliant responses that close the proceedings at this stage.'},
    '143_2': {explain: 'Section 143(2) scrutiny may lead to assessment with under-reporting penalty at 50% under 270A. Strong reply with documentation can result in no addition and no penalty.', mitPath: 'Comprehensive documentation, prompt reply, and bona fide explanation can prevent 270A initiation. If assessment goes against you, Section 270AA provides full waiver subject to conditions.'},
    '148': {explain: 'Section 148 reassessment can lead to 50% penalty under 270A if income escapement is confirmed. Procedural defects (missing 148A) are powerful defences.', mitPath: 'Challenge procedural defects (Section 148A(b) show-cause, 148A(d) order, limitation, jurisdiction) via writ petition. On merits, demonstrate no escapement. Section 270AA available as fallback.'},
    '156': {explain: 'Section 156 is the formal demand notice. Section 220(2) interest at 1% per month starts accruing after 30 days. No separate penalty under 156 itself.', mitPath: 'Pay within 30 days, or file stay application under Section 220(6) along with appeal to CIT(A). Negotiate instalment plan if cash-flow constrained.'},
    '270A': {explain: 'Section 270A is the penalty itself — 50% (under-reporting) or 200% (misreporting). Section 220(2) interest on demanded penalty applies after 30 days.', mitPath: 'Section 270AA waiver — pay tax + interest, do not appeal, file Form 68. Or re-categorise misreporting as under-reporting. Or challenge the underlying assessment.'},
    '271': {explain: 'Section 271(1)(c) is the legacy concealment penalty (pre-FY 2017-18 assessment years) — 100% to 300% of tax. Now superseded by 270A for newer years.', mitPath: 'Reliance Petroproducts (no penalty for technical disallowances), MAK Data (good faith defence), and other established case-law defences typically reduce penalty significantly.'},
    'asmt10': {explain: 'ASMT-10 is scrutiny only — no penalty yet. If the officer is not satisfied, DRC-01 under Section 73 follows with 10% penalty exposure.', mitPath: 'Clean reconciliation reply with supplier compliance evidence and amendment of any errors via subsequent returns. Patron prevents 95% of ASMT-10 cases from escalating to DRC-01.'},
    'drc01a': {explain: 'DRC-01A is the pre-show-cause intimation for Section 74 cases. Pay now with 15% penalty vs 100% later. Highly leveraged decision point.', mitPath: 'Evaluate strength of defence vs settlement value. If defence weak — pay tax + interest + 15% penalty under Section 74(5). If strong — contest, but be ready for DRC-01.'},
    'drc01_73': {explain: 'DRC-01 under Section 73 (non-fraud) — 10% penalty or ₹10K minimum. Payment before order eliminates penalty entirely.', mitPath: 'Reconcile demand. If part is genuine — pay tax + interest before DRC-07 order to avoid the 10%. Contest the remainder on merits. Re-categorisation rarely available since 73 is already the lower regime.'},
    'drc01_74': {explain: 'DRC-01 under Section 74 (fraud) — 100% penalty if escalated to order. Pre-order payment caps at 25%. Re-categorisation to Section 73 saves 90% of penalty.', mitPath: '1. Contest fraud allegation — re-categorise to Section 73 (10% penalty). 2. If unsuccessful, pay tax + interest + 25% penalty under Section 74(5) before order. 3. Procedural defences (DIN, DRC-01A, limitation).'},
    'drc07_73': {explain: 'DRC-07 order under Section 73 — final order with 10% penalty. Appeal lies within 3 months with 10% pre-deposit.', mitPath: 'Pay within 30 days to close. Or file appeal to First Appellate Authority (10% pre-deposit) if disputing. Higher appeals at ITAT/Tribunal stage with additional pre-deposits.'},
    'drc07_74': {explain: 'DRC-07 order under Section 74 — 100% penalty if not paid in 30 days. Pay within 30 days to limit to 50%. Appeal viable if defence is strong.', mitPath: 'Critical timing — pay within 30 days for 50% cap, OR file appeal with stay application. Re-categorisation to Section 73 still available in appeal. Procedural challenges via writ.'},
    's76': {explain: 'Section 76 — 100% penalty mandatory. Limited mitigation. Pay tax + interest immediately to limit additional penalty under 76(11).', mitPath: 'Pay full tax + 18% interest immediately. Limited room to negotiate penalty. Strong procedural and computational defences may help marginally. Engage CA before responding.'}
};

const STAGE_ACTIONS = {
    '142_1': ['Read notice and identify all documents requested', 'File complete reply on e-Proceedings within deadline', 'Maintain working papers for audit trail', 'Engage CA if scrutiny escalation likely'],
    '143_2': ['Comprehensive documentation for all heads of income', 'Reconcile with Form 26AS, AIS, TIS', 'Reply via e-Proceedings within 30 days', 'Prepare for video conference hearing', 'Plan for 270AA waiver if assessment goes adverse'],
    '148': ['Check whether 148A procedure was followed (else file writ)', 'File the reassessment return within 30 days', 'Reconcile income for relevant AY', 'Litigation strategy for limitation defence', 'Engage Patron for end-to-end representation'],
    '156': ['Verify demand against assessment order', 'File appeal within 30 days if disputing', 'File Section 220(6) stay application along with appeal', 'Or pay within 30 days to stop 220(2) interest', 'Negotiate instalment plan with AO if needed'],
    '270A': ['Evaluate Section 270AA eligibility (Form 68 within 1 month)', 'Decide: pay + waiver vs contest + appeal', 'If contesting: build defence on under-reporting vs misreporting', 'Cite favourable case law (Reliance Petroproducts, MAK Data)'],
    '271': ['Identify which sub-section is invoked', 'Cite Reliance Petroproducts for technical disallowance', 'Demonstrate bona fide explanation', 'Prepare for personal hearing', 'Plan appeal to CIT(A) if penalty confirmed'],
    'asmt10': ['Item-wise reconciliation of GSTR-1, 3B, 2B', 'Supplier compliance evidence for ITC disputes', 'Reply on portal within 30 days', 'File rectification of any genuine errors', 'Prevent DRC-01 escalation'],
    'drc01a': ['Evaluate defence strength on fraud allegation', 'Compute exact tax + interest + 15% if paying', 'File DRC-03 if paying; reply contesting if not', 'Engage Patron for strategic decision call'],
    'drc01_73': ['Reconcile demand item by item', 'Pay tax + interest before order to avoid penalty', 'Reply on portal with annexures within 30 days', 'Prepare for personal hearing'],
    'drc01_74': ['Build defence against fraud allegation (re-categorisation to Section 73)', 'Compute 25% pre-order payment route', 'File DRC-03 for any settled component', 'Reply contesting fraud on merits', 'Plan for appeal if order goes adverse'],
    'drc07_73': ['Pay within 30 days if accepting', 'File appeal in APL-01 with 10% pre-deposit if disputing', 'Stay application during appeal pendency'],
    'drc07_74': ['Critical — pay within 30 days for 50% cap', 'Or file appeal with 10% pre-deposit + stay', 'Re-categorisation arguments still available in appeal', 'Engage GST litigator immediately'],
    's76': ['Compute exact tax + 18% interest from collection date', 'File DRC-03 for immediate payment', 'Reply contesting any computational errors', 'Limit penalty exposure by prompt action']
};

function renderStageDropdown(){
    const sel = document.getElementById('stageSelect');
    sel.innerHTML = '';
    STAGES[currentType].forEach(s => {
        const opt = document.createElement('option');
        opt.value = s.val;
        opt.textContent = s.label;
        sel.appendChild(opt);
    });
    onStageChange();
}

function onStageChange(){
    const val = document.getElementById('stageSelect').value;
    const ar = document.getElementById('allegationRow');
    if(val === '270A'){
        ar.classList.add('visible');
    } else {
        ar.classList.remove('visible');
    }
}

function setNoticeType(b){
    const e = b.closest ? (b.closest('.toggle-btn') || b) : b;
    currentType = e.dataset.type;
    e.parentElement.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));
    e.classList.add('active');
    renderStageDropdown();
}

function setAllegation(b){
    const e = b.closest ? (b.closest('.toggle-btn') || b) : b;
    currentAllegation = e.dataset.alleg;
    e.parentElement.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));
    e.classList.add('active');
}

function calculate(){
    const tax = parseINR(document.getElementById('demandAmount').value);
    const days = parseInt(document.getElementById('daysSinceNotice').value) || 0;
    const monthsOverdue = parseInt(document.getElementById('monthsOverdue').value) || 0;
    const stageVal = document.getElementById('stageSelect').value;

    if(tax <= 0){ showError('Please enter the tax demand amount in the notice.'); return; }
    if(tax > 100000000000){ showError('Demand amount exceeds the calculator\'s reasonable range. Please enter a value ≤ ₹1,000 Cr.'); return; }
    if(days < 0 || days > 3650){ showError('Days since notice must be between 0 and 3650.'); return; }
    if(monthsOverdue < 0 || monthsOverdue > 120){ showError('Months overdue must be between 0 and 120.'); return; }

    const stage = STAGES[currentType].find(s => s.val === stageVal);
    if(!stage){ showError('Stage not found.'); return; }

    // Apply allegation override for 270A
    let basePenaltyRate = stage.basePenalty;
    let mitPenaltyRate = stage.mitPenalty;
    if(stageVal === '270A' && currentAllegation === 'mis'){
        basePenaltyRate = 2.00;
        mitPenaltyRate = 0.50; // mitigated to under-reporting
    }

    // Compute interest
    let interest = 0;
    let mitInterest = 0;
    let interestLabel = 'Interest';
    let interestFormula = '';
    if(stage.baseInterest === '220_2'){
        const daysOverdue = Math.max(0, days - 30);
        const monthsAccrued = Math.ceil(daysOverdue / 30);
        interest = tax * 0.01 * monthsAccrued;
        mitInterest = interest; // same
        interestLabel = 'Section 220(2) Interest';
        interestFormula = '₹' + fmt(tax) + ' × 1% × ' + monthsAccrued + ' months = ₹' + fmt(interest);
    } else if(stage.baseInterest === 'gst'){
        interest = tax * 0.015 * monthsOverdue;
        mitInterest = interest;
        interestLabel = 'Section 50 Interest @ 18% p.a.';
        interestFormula = '₹' + fmt(tax) + ' × 1.5% × ' + monthsOverdue + ' months = ₹' + fmt(interest);
    } else {
        interestLabel = 'Pre-notice interest (already in demand)';
        interestFormula = 'Interest already included in demand or not yet applicable at this stage';
    }

    // Compute penalty
    const worstPenalty = tax * basePenaltyRate;
    const mitPenalty = tax * mitPenaltyRate;

    // Totals
    const worstTotal = tax + interest + worstPenalty;
    const mitTotal = tax + mitInterest + mitPenalty;
    const savings = worstTotal - mitTotal;

    // Penalty label
    let penaltyLabel = 'Penalty';
    if(stageVal === '270A' && currentAllegation === 'mis'){ penaltyLabel = 'Section 270A Penalty (misreporting 200%)'; }
    else if(stageVal === '270A'){ penaltyLabel = 'Section 270A Penalty (under-reporting 50%)'; }
    else if(stageVal === '271'){ penaltyLabel = 'Section 271(1)(c) Penalty (100%)'; }
    else if(stageVal === 'drc01_74' || stageVal === 'drc07_74'){ penaltyLabel = 'Section 74 Penalty (100% / mitigated)'; }
    else if(stageVal === 'drc01_73' || stageVal === 'drc07_73'){ penaltyLabel = 'Section 73 Penalty (10%)'; }
    else if(stageVal === 's76'){ penaltyLabel = 'Section 76 Penalty (100% mandatory)'; }

    document.getElementById('interestLabel').textContent = interestLabel;
    document.getElementById('penaltyLabel').textContent = penaltyLabel;

    document.getElementById('resWorstTotal').textContent = fmt(worstTotal);
    document.getElementById('resWorstTotal2').textContent = '₹' + fmt(worstTotal);
    document.getElementById('resMitigatedTotal').textContent = '₹' + fmt(mitTotal);
    document.getElementById('resSavings').textContent = '₹' + fmt(savings);
    const savPct = worstTotal > 0 ? (savings / worstTotal * 100).toFixed(1) : 0;
    document.getElementById('resSavingsDesc').innerHTML = 'By acting promptly with Patron · <strong>' + savPct + '% reduction</strong>';

    document.getElementById('resHeadlineMeta').textContent = stage.label + ' · Tax ₹' + fmt(tax) + ' · ' + days + ' days since notice';

    document.getElementById('resWorstTax').textContent = '₹' + fmt(tax);
    document.getElementById('resMitigatedTax').textContent = '₹' + fmt(tax);
    document.getElementById('resWorstInterest').textContent = '₹' + fmt(interest);
    document.getElementById('resMitigatedInterest').textContent = '₹' + fmt(mitInterest);
    document.getElementById('resWorstPenalty').textContent = '₹' + fmt(worstPenalty);
    document.getElementById('resMitigatedPenalty').textContent = '₹' + fmt(mitPenalty);
    document.getElementById('resWorstTotalRow').textContent = '₹' + fmt(worstTotal);
    document.getElementById('resMitigatedTotalRow').textContent = '₹' + fmt(mitTotal);

    const ex = STAGE_EXPLAIN[stageVal];
    document.getElementById('resExplanation').textContent = ex.explain;
    document.getElementById('resFormula').innerHTML = 'Interest: ' + interestFormula + '<br>Worst-case Penalty: ₹' + fmt(tax) + ' × ' + (basePenaltyRate * 100).toFixed(0) + '% = ₹' + fmt(worstPenalty) + '<br>Mitigated Penalty: ₹' + fmt(tax) + ' × ' + (mitPenaltyRate * 100).toFixed(0) + '% = ₹' + fmt(mitPenalty);
    document.getElementById('resMitigationPath').textContent = ex.mitPath;

    const ul = document.getElementById('resActionList');
    ul.innerHTML = '';
    STAGE_ACTIONS[stageVal].forEach(a => {
        const li = document.createElement('li');
        li.textContent = a;
        ul.appendChild(li);
    });

    document.getElementById('postCtaHead').textContent = savings > 0 ? 'Capture ₹' + fmt(savings) + ' in potential savings' : 'Get help with this notice';

    const section = document.getElementById('resultSection');
    section.classList.add('visible');
    requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
}

function resetCalc(){
    currentType = 'IT'; currentAllegation = 'under';
    document.querySelectorAll('.toggle-group').forEach(g => {g.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));});
    document.querySelector('.toggle-btn[data-type="IT"]').classList.add('active');
    document.querySelector('.toggle-btn[data-alleg="under"]').classList.add('active');
    document.getElementById('demandAmount').value = '';
    document.getElementById('daysSinceNotice').value = '15';
    document.getElementById('monthsOverdue').value = '12';
    renderStageDropdown();
    document.getElementById('resultSection').classList.remove('visible');
    document.getElementById('errorBanner').classList.remove('visible');
}

function toggleFaq(e){const b=e.closest?(e.closest('.faq-question')||e):e;const it=b.closest('.faq-item');if(!it)return;const o=it.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>{i.classList.remove('open');const q=i.querySelector('.faq-question');if(q)q.setAttribute('aria-expanded','false');});if(!o){it.classList.add('open');b.setAttribute('aria-expanded','true');}}

renderStageDropdown();

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
