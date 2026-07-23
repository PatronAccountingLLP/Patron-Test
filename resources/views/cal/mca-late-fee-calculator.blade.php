@extends('layouts.app')
@section('meta')
<title>MCA Late Fee Calculator | AOC-4, MGT-7, DIR-3 KYC 2026</title>
<meta name="description" content="MCA ROC late fee calculator for Pvt Ltd & LLP: AOC-4, MGT-7, DIR-3 KYC, DPT-3, LLP Form 8 & 11. Daily accrual, days overdue, total ₹ payable, condonation.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/mca-late-fee-calculator">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/mca-late-fee-calculator">
<meta property="og:title" content="MCA Late Fee Calculator — Pvt Ltd & LLP 2026">
<meta property="og:description" content="Calculate AOC-4, MGT-7, DIR-3 KYC, DPT-3, LLP Form 8/11 late fees with days overdue, daily accrual, and condonation routing.">
<meta property="og:image" content="/og/mca-late-fee-calculator.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="MCA Late Fee Calculator — Pvt Ltd & LLP 2026">
<meta name="twitter:description" content="Days overdue + daily ROC accrual + total ₹ + condonation flag for AOC-4, MGT-7, DIR-3 KYC, DPT-3, LLP Form 8/11.">
<meta name="twitter:image" content="/og/mca-late-fee-calculator.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"MCA Late Fee Calculator","description":"MCA ROC Late Fee Calculator computes the late filing fee payable to the Ministry of Corporate Affairs for delayed submission of statutory forms by Private Limited Companies and Limited Liability Partnerships. The tool accepts the entity type (Pvt Ltd or LLP), the specific form being filed (AOC-4 Financial Statements, MGT-7 or MGT-7A Annual Return, DIR-3 KYC Director KYC, DPT-3 Return of Deposits, LLP Form 8 Statement of Account and Solvency, LLP Form 11 Annual Return), the original due date of the form, and the expected filing date. For LLP forms it also accepts a small-LLP toggle (turnover up to forty lakh rupees and partner contribution up to twenty-five lakh rupees) which halves the daily accrual rate. For DPT-3 it accepts the nominal share capital band which determines the base filing fee on which the slab multiplier applies. The tool outputs the days of delay, the daily accrual rate, the total late fee payable in rupees, and a four-tier severity flag: LOW for delays up to thirty days suggesting immediate filing, MEDIUM for delays of thirty-one to ninety days, HIGH for delays of ninety-one to one hundred eighty days, and CRITICAL for delays beyond one hundred eighty days where condonation of delay petition under Section 460 of the Companies Act 2013 may be advisable. For delays beyond three hundred sixty-five days the tool flags strike-off risk and recommends evaluation of company restoration through the National Company Law Tribunal. For DIR-3 KYC delays the tool additionally flags the Director Identification Number (DIN) deactivation status that requires the five thousand rupee late fee for reactivation. The calculation methodology follows Section 403 of the Companies Act 2013 (daily one hundred rupee accrual for AOC-4 and MGT-7 with no maximum cap), Rule 12A of the Companies (Appointment and Qualification of Directors) Rules 2014 (fixed five thousand rupee fee for DIR-3 KYC), the Companies (Registration Offices and Fees) Rules 2014 as amended (slab-based multiplier for DPT-3 ranging from two times the normal fee for delays up to thirty days to twelve times the normal fee for delays beyond one hundred eighty days), and the Limited Liability Partnership (Amendment) Rules 2022 (one hundred rupee per day for normal LLPs and fifty rupee per day for small LLPs on Form 8 and Form 11 with no maximum cap).","url":"/tools/mca-late-fee-calculator","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"MCA Late Fee Calculator","item":"/tools/mca-late-fee-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"What is MCA late fee and which forms attract it?","acceptedAnswer":{"@type":"Answer","text":"MCA late fee is the additional fee payable to the Ministry of Corporate Affairs when a statutory form is filed after its prescribed due date. For Private Limited Companies, the forms that attract late fee are AOC-4 (Financial Statements under Section 137), MGT-7 or MGT-7A (Annual Return under Section 92), DIR-3 KYC (Director KYC under Rule 12A), and DPT-3 (Return of Deposits under Rule 16A). For LLPs, the forms are Form 8 (Statement of Account and Solvency) and Form 11 (Annual Return). The late fee calculation varies by form: AOC-4 and MGT-7 attract ₹100 per day from the due date with no maximum cap (Section 403 of the Companies Act 2013); DIR-3 KYC attracts a fixed ₹5,000 late fee; DPT-3 attracts a slab-based multiplier on the normal filing fee; LLP Form 8 and Form 11 attract ₹100 per day for normal LLPs and ₹50 per day for small LLPs."}},
{"@type":"Question","name":"How is AOC-4 late fee calculated?","acceptedAnswer":{"@type":"Answer","text":"AOC-4 is the form for filing Financial Statements under Section 137 of the Companies Act 2013. The due date is 30 days from the date of the Annual General Meeting (AGM). For example, if AGM is held on 30 September 2026, AOC-4 is due by 30 October 2026. Late fee is ₹100 per day from the day after the due date until the actual filing date, with no maximum cap. So a 90-day delay attracts ₹9,000 in late fees; a 365-day delay attracts ₹36,500. This rate was fixed by the Companies (Amendment) Act 2017 and applies to all companies regardless of share capital. The late fee is in addition to the normal filing fee which ranges from ₹200 to ₹600 based on nominal share capital. Companies that fail to file AOC-4 for two consecutive financial years risk being struck off the Register of Companies under Section 248."}},
{"@type":"Question","name":"How is MGT-7 (or MGT-7A) late fee calculated?","acceptedAnswer":{"@type":"Answer","text":"MGT-7 is the Annual Return form under Section 92 for all companies except One Person Companies and Small Companies, which file MGT-7A. The due date is 60 days from the date of the AGM (or in case of OPC, where no AGM is held, 60 days from the completion of six months from the close of financial year). For example, if AGM is on 30 September 2026, MGT-7 is due by 29 November 2026. Late fee under Section 403 is ₹100 per day with no maximum cap. A 60-day delay therefore costs ₹6,000; a 180-day delay costs ₹18,000. Non-filing of MGT-7 for two consecutive years exposes the company to strike-off proceedings under Section 248, mandatory disqualification of directors under Section 164(2)(a), and prosecution under Section 92(5) which can attract a fine of up to ₹5 lakh on the company plus ₹50,000 on each director."}},
{"@type":"Question","name":"What is the DIR-3 KYC late fee?","acceptedAnswer":{"@type":"Answer","text":"DIR-3 KYC is mandatory for every Director Identification Number (DIN) holder under Rule 12A of the Companies (Appointment and Qualification of Directors) Rules 2014. The due date is 30 September every year, covering KYC for the previous financial year. Filing on or before 30 September is free of charge. If filed even one day late, a fixed late fee of ₹5,000 applies — this is not graded by number of days delayed; it is a flat penalty. Additionally, on missing the deadline, the DIN is automatically marked as Deactivated due to Non-filing of DIR-3 KYC. The director cannot sign any e-forms, attend Board Meetings as a director of record, or be reflected as a director on any new filing until the KYC is filed and the ₹5,000 paid. There is no condonation route for DIR-3 KYC — only filing and payment reactivate the DIN."}},
{"@type":"Question","name":"How is DPT-3 late fee calculated?","acceptedAnswer":{"@type":"Answer","text":"DPT-3 is the Return of Deposits filed by every company that has accepted loans, advances, deposits from members, directors or other entities under Rule 16A of the Companies (Acceptance of Deposits) Rules 2014. Due date is 30 June every year (for the position as on 31 March of that year). Late fee follows the standard MCA slab multiplier on the normal filing fee: up to 30 days delay attracts 2x normal fee; 31-60 days attracts 4x; 61-90 days attracts 6x; 91-180 days attracts 10x; beyond 180 days attracts 12x. Normal fee depends on nominal share capital: ₹200 for capital up to ₹1 lakh, ₹300 for ₹1-5 lakh, ₹400 for ₹5-25 lakh, ₹500 for ₹25 lakh-1 crore, and ₹600 above ₹1 crore. So a company with ₹50 lakh capital filing DPT-3 75 days late owes 6 × ₹500 = ₹3,000 in late fee plus the ₹500 normal fee."}},
{"@type":"Question","name":"What is the LLP Form 8 late fee?","acceptedAnswer":{"@type":"Answer","text":"LLP Form 8 (Statement of Account and Solvency) is filed under Section 34 of the Limited Liability Partnership Act 2008. The due date is 30 October every year (for the financial year ended 31 March). Late fee for filing after the due date is ₹100 per day for normal LLPs and ₹50 per day for Small LLPs, with no maximum cap, per the LLP (Amendment) Rules 2022 effective 1 April 2022. A Small LLP is one whose contribution from partners does not exceed ₹25 lakh AND whose turnover in the immediately preceding financial year does not exceed ₹40 lakh. So a normal LLP that files Form 8 90 days late owes ₹9,000 in late fee; a Small LLP for the same delay owes ₹4,500. The accrual continues until actual filing — there is no cap or graded reduction."}},
{"@type":"Question","name":"What is the LLP Form 11 late fee?","acceptedAnswer":{"@type":"Answer","text":"LLP Form 11 (Annual Return) is filed under Section 35 of the Limited Liability Partnership Act 2008. The due date is 30 May every year (for the financial year ended 31 March). Late fee follows the same structure as Form 8: ₹100 per day for normal LLPs, ₹50 per day for Small LLPs, with no maximum cap, per the LLP (Amendment) Rules 2022. Non-filing of Form 11 for two consecutive financial years exposes the LLP to strike-off proceedings under Section 75 of the LLP Act read with the Limited Liability Partnership (Removal of Names from the Register) Rules 2017. So a normal LLP that fails to file Form 11 for two years could accrue late fees of approximately ₹73,000 per form per year, totalling ~₹2.9 lakh just on these two forms before any condonation."}},
{"@type":"Question","name":"Is there a maximum cap on MCA late fees?","acceptedAnswer":{"@type":"Answer","text":"There is NO maximum cap on MCA late fees for AOC-4, MGT-7, LLP Form 8, or LLP Form 11 since the 2018 Section 403 amendment (for Pvt Ltd) and the 2022 LLP Amendment Rules. The daily accrual continues indefinitely. The earlier cap of 12x the normal fee was removed specifically to incentivise timely filing. DIR-3 KYC has a fixed ₹5,000 (which is the cap by design). DPT-3 caps at 12x the normal fee since it still follows the slab structure. The lack of a cap on the daily accrual forms is exactly why backlogs of 2-3 years lead to late fees in lakhs — a Pvt Ltd company with both AOC-4 and MGT-7 unfiled for 2 years would owe approximately ₹73,000 in late fees per form plus normal fees plus consequential exposure under Section 164(2)(a) director disqualification."}},
{"@type":"Question","name":"What happens if I don't file ROC forms for multiple years?","acceptedAnswer":{"@type":"Answer","text":"Multi-year non-filing triggers escalating consequences: (1) Late fees keep accruing daily — a 3-year backlog on AOC-4 + MGT-7 alone exceeds ₹2,19,000 in late fees. (2) Director disqualification under Section 164(2)(a) — if AOC-4 or MGT-7 not filed for 3 consecutive years, ALL directors of the company become disqualified for 5 years across all companies they are associated with; this requires CG-1 application to remove disqualification. (3) Strike-off proceedings under Section 248 — ROC initiates suo-moto strike-off after 2 consecutive years of non-filing; once struck off, the company is dissolved and bank accounts frozen. (4) Restoration requires NCLT petition under Section 252 within 20 years, costs ₹50,000-₹2,00,000 in legal fees plus all accumulated MCA dues. (5) Prosecution under Section 92(5) and 137(3) — fines up to ₹5 lakh on company and ₹50,000 per director. Patron handles complete compliance restoration including condonation, NCLT restoration, and director disqualification removal."}},
{"@type":"Question","name":"Can MCA late fees be waived through condonation?","acceptedAnswer":{"@type":"Answer","text":"Condonation of delay under Section 460 of the Companies Act 2013 allows the Central Government (through Regional Director or MCA HQ) to condone the delay in filing certain forms — but it does NOT waive the late fee. Even after condonation is granted, the company must still pay all accumulated late fees as on the date of filing. What condonation achieves is regularisation of the delayed filing (removing the technical non-compliance status), which is essential when (1) the delay impacts the validity of resolutions or transactions filed via the delayed form, (2) the company is facing strike-off proceedings, or (3) the directors are facing disqualification. The Central Government Companies Settlement Scheme (CFSS) windows occasionally offered waiver of additional fees as one-time amnesty — for example CFSS 2020 covered most pending forms with only normal fee. As of FY 2026-27 no such amnesty scheme is currently active; clients should plan around full late fee payment."}},
{"@type":"Question","name":"When does my company or LLP become liable for strike-off?","acceptedAnswer":{"@type":"Answer","text":"For Pvt Ltd / OPC: ROC may initiate strike-off under Section 248(1)(c) of the Companies Act if (a) the company has failed to file AOC-4 or MGT-7 for two consecutive financial years, OR (b) the company has not commenced business within one year of incorporation, OR (c) the subscriber to MOA has not paid subscription within 180 days. The procedure: ROC issues notice STK-1 to the company and directors, publishes STK-5 inviting objections, and if no satisfactory response is received within 30 days, issues STK-7 striking off the company. Bank accounts get frozen, the company cannot transact, and the directors are personally liable for any outstanding obligations. For LLPs: Strike-off under Section 75 of the LLP Act follows similar two-year non-filing trigger for Form 8 and Form 11. Restoration is via NCLT Section 252 (Pvt Ltd) or Section 75 read with LLP Rules (LLP) within 20 years."}},
{"@type":"Question","name":"How is Small LLP defined for late fee purposes?","acceptedAnswer":{"@type":"Answer","text":"A Small LLP is defined under Section 2(1)(ta) of the LLP Act 2008 (inserted by the LLP (Amendment) Act 2021) as an LLP whose: (a) contribution from partners does not exceed ₹25 lakh (or such higher amount up to ₹5 crore as may be prescribed), AND (b) turnover in the immediately preceding financial year does not exceed ₹40 lakh (or such higher amount up to ₹50 crore as may be prescribed). Both conditions must be satisfied. The Small LLP classification affects multiple compliance areas: lower MCA filing fees, ₹50/day late fee (vs ₹100/day for normal LLPs) on Form 8 and Form 11, simplified compounding of offences, no requirement for audit if turnover is below ₹40 lakh AND contribution below ₹25 lakh, and reduced penalties for procedural defaults. The status must be self-declared at the time of filing and is verifiable from the audited financials filed in the preceding year."}},
{"@type":"Question","name":"Can I get a discount or settlement on a backlog of late fees?","acceptedAnswer":{"@type":"Answer","text":"There is no statutory discount on accrued MCA late fees once they have crystallised. Negotiation with ROC is not permitted. The only legitimate routes to reduce the burden are: (1) Timely filing now — the longer you wait, the more it accrues at ₹100/day per form; the daily clock cannot be stopped except by filing. (2) Condonation of delay under Section 460 — removes technical non-compliance but does NOT waive fees. (3) Amnesty schemes when notified — CFSS 2020 was the last major scheme; the government occasionally announces such schemes during fiscal year-end. (4) Compounding of offences under Section 441 — relevant if prosecution has been launched; the compounding fee replaces the prosecution penalty but does not affect MCA filing fees. (5) Conversion / closure — if the company is dormant and there is no genuine intent to continue, voluntary strike-off under Section 248(2) costs ₹10,000 plus is faster than restoration later. Patron evaluates the optimal strategy case by case."}}
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
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
@media (max-width:560px){.form-row{grid-template-columns:1fr}}
.section-title{font-family:var(--font-mono);font-size:11px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin:24px 0 12px;padding-bottom:6px;border-bottom:1px dashed var(--border);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px}
.section-title small{font-weight:500;color:var(--text-muted);text-transform:none;letter-spacing:0.3px}
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:100px;padding:10px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent;min-height:44px;text-align:center}
.toggle-btn *{pointer-events:none}
.toggle-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.toggle-btn:focus-visible{outline:2px solid var(--primary);outline-offset:2px}
.checkbox-row{display:flex;align-items:flex-start;gap:10px;padding:10px 14px;background:var(--surface);border:1px solid var(--border);border-radius:10px;cursor:pointer;transition:background 0.2s;margin-bottom:8px}
.checkbox-row:hover{background:var(--surface-alt)}
.checkbox-row input[type="checkbox"]{width:18px;height:18px;margin-top:2px;flex-shrink:0;accent-color:var(--primary);cursor:pointer}
.checkbox-row label{margin:0;font-size:13px;color:var(--text);font-weight:500;cursor:pointer;text-transform:none;letter-spacing:0;line-height:1.4}
.checkbox-row label small{display:block;font-size:11.5px;color:var(--text-muted);margin-top:2px;font-weight:400}
.btn-calculate{width:100%;padding:16px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s,transform 0.1s;margin-top:18px;min-height:52px}
.btn-calculate:hover{background:var(--primary-light)}
.btn-calculate:active{transform:scale(0.98)}
.btn-calculate:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.result-section{margin-top:28px;display:none}
.result-section.visible{display:block}
.result-divider{height:1px;background:var(--border);margin-bottom:24px}
.result-headline{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;padding:24px 28px;border-radius:var(--radius);margin-bottom:16px}
.result-headline.low{background:linear-gradient(135deg,#065F46 0%,#047857 100%)}
.result-headline.medium{background:linear-gradient(135deg,#92400E 0%,#B45309 100%)}
.result-headline.high{background:linear-gradient(135deg,#9A3412 0%,#C2410C 100%)}
.result-headline.critical{background:linear-gradient(135deg,#7F1D1D 0%,#991B1B 100%)}
.result-headline .verdict-icon{font-size:32px;margin-bottom:4px;display:block;line-height:1}
.result-headline .label{font-family:var(--font-mono);font-size:11px;text-transform:uppercase;letter-spacing:1.5px;opacity:0.9;margin-bottom:6px}
.result-headline .value{font-family:var(--font-mono);font-size:36px;font-weight:700;line-height:1.1;margin-bottom:6px;letter-spacing:-1px}
.result-headline .value-label{font-family:var(--font-body);font-size:15px;font-weight:500;opacity:0.95;line-height:1.5;margin-top:8px}
.result-headline .meta{font-size:13.5px;opacity:0.92;margin-top:12px;line-height:1.6;font-weight:500;padding-top:12px;border-top:1px solid rgba(255,255,255,0.18)}
.summary-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:14px}
@media (max-width:560px){.summary-grid{grid-template-columns:1fr}}
.summary-card{background:var(--card);border:1px solid var(--border);border-radius:var(--radius);padding:14px 16px;text-align:center}
.summary-card .sc-label{font-family:var(--font-mono);font-size:10px;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.8px;margin-bottom:6px}
.summary-card .sc-value{font-family:var(--font-mono);font-size:22px;font-weight:700;color:var(--primary-dark);line-height:1.1}
.summary-card .sc-sub{font-size:11.5px;color:var(--text-muted);margin-top:4px}
.special-flag{background:#FEF2F2;border:1px solid #FCA5A5;border-left:4px solid var(--danger);border-radius:var(--radius);padding:14px 18px;margin-top:14px;display:none}
.special-flag.visible{display:block}
.special-flag.warn{background:#FFFBEB;border-color:#FCD34D;border-left-color:var(--accent)}
.special-flag h4{font-family:var(--font-mono);font-size:11px;color:var(--danger);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:6px;font-weight:700}
.special-flag.warn h4{color:#78350F}
.special-flag p{font-size:13.5px;color:#991B1B;line-height:1.65;margin-bottom:0}
.special-flag.warn p{color:#78350F}
.special-flag strong{font-weight:700}
.action-list-card{background:var(--surface-alt);border-radius:var(--radius);padding:18px 22px;margin-top:14px}
.action-list-card h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:10px;font-weight:700}
.action-list-card ol{margin:0 0 0 20px}
.action-list-card li{font-size:14px;color:var(--text-secondary);margin-bottom:7px;line-height:1.65}
.action-list-card li strong{color:var(--primary-dark)}
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
.fee-table{width:100%;border-collapse:collapse;margin:16px 0;font-size:14px}
.fee-table thead th{background:var(--primary);color:#fff;padding:12px 16px;text-align:left;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:0.3px}
.fee-table thead th:first-child{border-radius:var(--radius) 0 0 0}
.fee-table thead th:last-child{border-radius:0 var(--radius) 0 0}
.fee-table tbody td{padding:12px 16px;border-bottom:1px solid var(--border);color:var(--text-secondary);vertical-align:top}
.fee-table tbody tr:nth-child(even){background:var(--surface)}
.fee-table tbody tr:hover{background:var(--surface-alt)}
.fee-table code{font-family:var(--font-mono);font-size:12px;background:#fff;padding:2px 6px;border-radius:4px;border:1px solid var(--border);color:var(--primary-dark)}
.callout{background:#F0F5FB;border-left:4px solid var(--primary-light);border-radius:0 var(--radius) var(--radius) 0;padding:16px 20px;margin:16px 0}
.callout p{color:var(--primary-dark);margin-bottom:0;font-size:14px}
.callout strong{color:var(--primary-dark)}
.callout.warn{background:#FFFBEB;border-left-color:var(--accent)}
.callout.warn p{color:#78350F}
.callout.warn strong{color:#78350F}
.callout.danger{background:#FEE2E2;border-left-color:var(--danger)}
.callout.danger p{color:#991B1B}
.callout.danger strong{color:#991B1B}
.faq-item{background:var(--surface);border-radius:var(--radius);margin-bottom:10px;border:1px solid var(--border);overflow:hidden;transition:box-shadow 0.2s}
.faq-item:hover{box-shadow:var(--shadow-sm)}
.faq-question{display:flex;justify-content:space-between;align-items:center;width:100%;padding:16px 20px;border:none;background:none;font-family:var(--font-body);font-size:15px;font-weight:600;color:var(--text);cursor:pointer;text-align:left;line-height:1.4;gap:12px;-webkit-tap-highlight-color:transparent;min-height:52px}
.faq-question *{pointer-events:none}
.faq-question:focus-visible{outline:2px solid var(--primary);outline-offset:-2px}
.faq-icon{flex-shrink:0;width:24px;height:24px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;transition:transform 0.3s}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.4s ease}
.faq-item.open .faq-answer{max-height:1200px}
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
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:18px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}.result-headline .value{font-size:28px}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-calculate,.office-strip,.footer,.breadcrumb{display:none !important}body{background:#fff;color:#000;font-size:11pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:16px;margin-bottom:16px}.result-headline,.summary-card,.special-flag,.action-list-card{-webkit-print-color-adjust:exact;print-color-adjust:exact}.hero h1{font-size:18pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}}

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
<a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#pvtltd-fees">Pvt Ltd Fees</a><a href="#llp-fees">LLP Fees</a><a href="#consequences">Consequences</a><a href="#condonation">Condonation</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>MCA Late Fee Calculator</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>MCA Late Fee Calculator — <span>Pvt Ltd &amp; LLP, FY 2026-27</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">ROC backlog? <strong>Patron files your overdue forms within 48 hours.</strong> Fixed fees from ₹2,500 per form. Condonation, director-disqualification removal, and company restoration also handled.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20overdue%20ROC%20filings%20and%20late%20fees." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ROC%20Backlog%20Help&body=Hi%20Patron%20Accounting%2C%0A%0AWe%20have%20overdue%20MCA%20filings%20and%20need%20help.%0A%0AEntity%20type%20%28Pvt%20Ltd%2FLLP%29%3A%20%0AForm%28s%29%20pending%3A%20%0ALast%20filing%20year%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p><strong>AOC-4 and MGT-7 attract ₹100/day late fee with NO cap (Section 403, Companies Act 2013). DIR-3 KYC is a flat ₹5,000 — and your DIN gets deactivated. DPT-3 follows MCA slab multipliers (2x to 12x normal fee). LLP Form 8 and Form 11: ₹100/day for normal LLPs, ₹50/day for Small LLPs (turnover ≤ ₹40L AND contribution ≤ ₹25L).</strong> A 2-year backlog on AOC-4 + MGT-7 alone exceeds ₹1.46 lakh. Beyond 365 days, strike-off proceedings can begin under Section 248 — restoration via NCLT costs ₹50,000-₹2,00,000 in legal fees plus all accumulated MCA dues. Patron files within 48 hours, handles condonation, removes director disqualification, and restores struck-off companies.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Late Fee Calculator</h2>
<p class="sub">Pick entity → form → enter dates. Calculator returns days overdue, daily accrual, total ₹, and severity routing.</p>
<noscript><div class="noscript-box">This tool requires JavaScript. Please enable JavaScript.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="section-title"><span>Entity Type</span><small>Pick one</small></div>
<div class="toggle-group" role="group" aria-label="Entity type">
<button type="button" class="toggle-btn active" data-entity="pvtltd" onclick="setEntity(this)">Private Limited<br><small style="font-weight:400;font-size:11px;opacity:0.7">Pvt Ltd / OPC</small></button>
<button type="button" class="toggle-btn" data-entity="llp" onclick="setEntity(this)">LLP<br><small style="font-weight:400;font-size:11px;opacity:0.7">Limited Liability Partnership</small></button>
</div>

<div class="form-group" style="margin-top:18px;">
<label for="formSelect">Form / Filing <span class="hint">Pick the MCA form you are late on</span></label>
<select id="formSelect" onchange="onFormChange()" aria-label="Select MCA form"></select>
</div>

<div class="form-row">
<div class="form-group">
<label for="dueDate">Original Due Date</label>
<input type="date" id="dueDate" value="2025-10-30" aria-label="Original due date">
</div>
<div class="form-group">
<label for="filingDate">Expected Filing Date <span class="hint">Defaults to today</span></label>
<input type="date" id="filingDate" value="2026-05-14" aria-label="Expected filing date">
</div>
</div>

<div id="conditionalInputs">
<!-- DPT-3 capital band -->
<div class="form-group" id="dptCapitalRow" style="display:none;">
<label for="dptCapital">Nominal Share Capital Band <span class="hint">Determines DPT-3 normal fee on which multiplier applies</span></label>
<select id="dptCapital" aria-label="Nominal share capital band">
<option value="200">Up to ₹1 lakh (Normal fee ₹200)</option>
<option value="300">₹1 lakh to ₹5 lakh (Normal fee ₹300)</option>
<option value="400" selected>₹5 lakh to ₹25 lakh (Normal fee ₹400)</option>
<option value="500">₹25 lakh to ₹1 crore (Normal fee ₹500)</option>
<option value="600">Above ₹1 crore (Normal fee ₹600)</option>
</select>
</div>

<!-- Small LLP toggle -->
<div class="checkbox-row" id="smallLlpRow" style="display:none;">
<input type="checkbox" id="smallLlp" aria-label="Small LLP">
<label for="smallLlp">This LLP qualifies as a "Small LLP" <small>Turnover ≤ ₹40 lakh AND partner contribution ≤ ₹25 lakh (per Section 2(1)(ta) of LLP Act, 2008). Halves the daily accrual to ₹50/day.</small></label>
</div>
</div>

<button class="btn-calculate" onclick="calculate()" type="button">Calculate Late Fee</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline" id="resultHeadline">
<span class="verdict-icon" id="verdictIcon">⚠</span>
<div class="label">Total Late Fee Payable</div>
<div class="value" id="resTotal">₹0</div>
<div class="value-label" id="resSummary">—</div>
<div class="meta" id="resMeta">—</div>
</div>

<div class="summary-grid">
<div class="summary-card"><div class="sc-label">Days Overdue</div><div class="sc-value" id="resDays">0</div><div class="sc-sub" id="resDaysSub">from due date</div></div>
<div class="summary-card"><div class="sc-label">Daily Accrual</div><div class="sc-value" id="resAccrual">₹0</div><div class="sc-sub" id="resAccrualSub">per day</div></div>
<div class="summary-card"><div class="sc-label">Severity</div><div class="sc-value" id="resSeverity" style="font-size:16px;line-height:1.3;">—</div><div class="sc-sub" id="resSeveritySub">—</div></div>
</div>

<div class="special-flag" id="dinFlag"><h4>⚠ DIN DEACTIVATION TRIGGERED</h4><p>Missing the DIR-3 KYC deadline <strong>automatically deactivates the Director Identification Number (DIN)</strong> on the MCA portal. The director cannot sign any e-forms, be reflected on any new filing, or attend Board Meetings as a director-of-record until DIR-3 KYC is filed AND the ₹5,000 paid. There is NO condonation route — only filing and payment reactivate the DIN.</p></div>

<div class="special-flag" id="strikeOffFlag"><h4>🚨 STRIKE-OFF EXPOSURE</h4><p>Backlog exceeds 365 days. Under <strong>Section 248(1)(c) of the Companies Act</strong> (or Section 75 of LLP Act), the Registrar may initiate suo-moto strike-off after 2 consecutive years of non-filing of annual forms. Once struck off, bank accounts get frozen and restoration requires an NCLT petition under Section 252 (within 20 years) costing ₹50,000-₹2,00,000 in legal fees plus all accumulated MCA dues. <a href="/restore-struck-off-company-mca" style="color:#7F1D1D;font-weight:700;text-decoration:underline;">Patron handles complete restoration →</a></p></div>

<div class="special-flag warn" id="disqFlag"><h4>⚠ DIRECTOR DISQUALIFICATION RISK</h4><p>If AOC-4 OR MGT-7 is unfiled for 3 consecutive financial years, <strong>ALL directors of the company become disqualified for 5 years across every company they are associated with</strong> under Section 164(2)(a). This requires a separate <strong>CG-1 application</strong> to lift disqualification — process takes 60-90 days. File the pending forms before the 3-year mark to avoid this trap.</p></div>

<div class="action-list-card">
<h4>Recommended Next Steps</h4>
<ol id="actionList"></ol>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head" id="postCtaHead">Need help with the filing?</div>
<div class="post-result-cta-sub">Patron files overdue ROC forms within 48 hours — fixed fees from ₹2,500. We also draft condonation petitions, remove director disqualification, and restore struck-off companies. Free 15-min review call.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20checked%20my%20MCA%20late%20fees%20and%20need%20help%20filing." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Late%20Fee%20Filing%20Help&body=Hi%2C%20we%20need%20help%20filing%20overdue%20ROC%20forms.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<p style="font-size:11.5px;color:var(--text-muted);line-height:1.55;margin-top:14px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. MCA late fees are statutory and non-negotiable.</p>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Print Result</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the Calculator</h2>
<ol>
<li><strong>Pick entity — Pvt Ltd / OPC, or LLP.</strong> Form options auto-filter accordingly.</li>
<li><strong>Select the form.</strong> Pvt Ltd: AOC-4, MGT-7 / MGT-7A, DIR-3 KYC, DPT-3. LLP: Form 8 (S&amp;S), Form 11 (Annual Return), DIR-3 KYC.</li>
<li><strong>Enter the original due date</strong> — the statutory deadline by which the form should have been filed. (See the fee tables below for due-date rules per form.)</li>
<li><strong>Enter the expected filing date</strong> — defaults to today. Use a future date if you are planning when to file.</li>
<li><strong>For DPT-3:</strong> Select your nominal share capital band — this determines the base filing fee on which the slab multiplier applies.</li>
<li><strong>For LLP Form 8 / Form 11:</strong> If your LLP qualifies as a Small LLP (turnover ≤ ₹40 lakh AND contribution ≤ ₹25 lakh), check the toggle — daily accrual halves to ₹50/day.</li>
<li><strong>Calculate.</strong> The result shows: total late fee in ₹, days overdue, daily accrual, severity tier (Low/Medium/High/Critical), and any special flags (DIN deactivation, strike-off risk, director disqualification risk).</li>
<li><strong>Print or save.</strong> Use the Print button to save a clean PDF estimate. Engage Patron for actual filing — fixed fees from ₹2,500.</li>
</ol>
<div class="callout warn"><p><strong>What this calculator does NOT cover:</strong> Normal filing fees (these range from ₹200 to ₹600 depending on form and capital), prosecution penalties under Sections 92(5), 137(3), 454, professional fees for filing, condonation petition costs (~₹15,000-₹30,000), or NCLT restoration costs (₹50,000-₹2,00,000). These are quoted separately.</p></div>
</section>

<section class="content-section" id="pvtltd-fees">
<h2>Pvt Ltd / OPC Late Fee Structure</h2>

<h3>AOC-4 — Financial Statements (Section 137)</h3>
<table class="fee-table">
<thead><tr><th>Item</th><th>Value</th></tr></thead>
<tbody>
<tr><td><strong>Due date</strong></td><td>30 days from AGM date</td></tr>
<tr><td><strong>Normal filing fee</strong></td><td>₹200 to ₹600 based on nominal share capital</td></tr>
<tr><td><strong>Late fee</strong></td><td><code>₹100 per day</code> — flat, no cap (Section 403, Companies Act 2013)</td></tr>
<tr><td><strong>Strike-off trigger</strong></td><td>2 consecutive financial years of non-filing → Section 248(1)(c) suo-moto strike-off</td></tr>
<tr><td><strong>Disqualification trigger</strong></td><td>3 consecutive years of non-filing → Section 164(2)(a) director disqualification (5 years)</td></tr>
</tbody>
</table>

<h3>MGT-7 / MGT-7A — Annual Return (Section 92)</h3>
<table class="fee-table">
<thead><tr><th>Item</th><th>Value</th></tr></thead>
<tbody>
<tr><td><strong>Due date</strong></td><td>60 days from AGM (or 60 days from 30 Sept for OPC where no AGM is held)</td></tr>
<tr><td><strong>Normal filing fee</strong></td><td>₹200 to ₹600 based on capital</td></tr>
<tr><td><strong>Late fee</strong></td><td><code>₹100 per day</code> — flat, no cap</td></tr>
<tr><td><strong>Form for OPC / Small Co.</strong></td><td>MGT-7A (simplified format; same late fee structure)</td></tr>
<tr><td><strong>Strike-off + disqualification</strong></td><td>Same triggers as AOC-4</td></tr>
</tbody>
</table>

<h3>DIR-3 KYC — Director KYC (Rule 12A)</h3>
<table class="fee-table">
<thead><tr><th>Item</th><th>Value</th></tr></thead>
<tbody>
<tr><td><strong>Due date</strong></td><td>30 September every year</td></tr>
<tr><td><strong>On-time fee</strong></td><td>NIL (free if filed by 30 Sept)</td></tr>
<tr><td><strong>Late fee</strong></td><td><code>Fixed ₹5,000</code> — applies even for 1-day delay</td></tr>
<tr><td><strong>Consequence</strong></td><td>DIN auto-deactivated; director cannot sign any forms until KYC + ₹5,000 paid</td></tr>
<tr><td><strong>Condonation</strong></td><td>NOT available; only filing reactivates DIN</td></tr>
</tbody>
</table>

<h3>DPT-3 — Return of Deposits (Rule 16A)</h3>
<table class="fee-table">
<thead><tr><th>Delay</th><th>Late Fee Multiplier</th><th>Example (Normal Fee ₹400)</th></tr></thead>
<tbody>
<tr><td>Up to 30 days</td><td><code>2 × Normal Fee</code></td><td>₹800</td></tr>
<tr><td>31 to 60 days</td><td><code>4 × Normal Fee</code></td><td>₹1,600</td></tr>
<tr><td>61 to 90 days</td><td><code>6 × Normal Fee</code></td><td>₹2,400</td></tr>
<tr><td>91 to 180 days</td><td><code>10 × Normal Fee</code></td><td>₹4,000</td></tr>
<tr><td>Beyond 180 days</td><td><code>12 × Normal Fee</code></td><td>₹4,800</td></tr>
</tbody>
</table>
<p><strong>Due date for DPT-3:</strong> 30 June every year (for the position as on 31 March of that year). Normal fee depends on nominal share capital: ₹200 (up to ₹1L), ₹300 (₹1L-5L), ₹400 (₹5L-25L), ₹500 (₹25L-1Cr), ₹600 (above ₹1Cr).</p>
</section>

<section class="content-section" id="llp-fees">
<h2>LLP Late Fee Structure</h2>

<h3>LLP Form 8 — Statement of Account &amp; Solvency (Section 34)</h3>
<table class="fee-table">
<thead><tr><th>Item</th><th>Value</th></tr></thead>
<tbody>
<tr><td><strong>Due date</strong></td><td>30 October every year (for FY ended 31 March)</td></tr>
<tr><td><strong>Late fee — Normal LLP</strong></td><td><code>₹100 per day</code> — no cap (LLP Amendment Rules 2022)</td></tr>
<tr><td><strong>Late fee — Small LLP</strong></td><td><code>₹50 per day</code> — no cap</td></tr>
<tr><td><strong>Small LLP definition</strong></td><td>Contribution ≤ ₹25 lakh AND turnover ≤ ₹40 lakh (Section 2(1)(ta), LLP Act 2008)</td></tr>
<tr><td><strong>Strike-off trigger</strong></td><td>2 consecutive years of non-filing of Form 8 + Form 11 → Section 75 LLP Act</td></tr>
</tbody>
</table>

<h3>LLP Form 11 — Annual Return (Section 35)</h3>
<table class="fee-table">
<thead><tr><th>Item</th><th>Value</th></tr></thead>
<tbody>
<tr><td><strong>Due date</strong></td><td>30 May every year (for FY ended 31 March)</td></tr>
<tr><td><strong>Late fee — Normal LLP</strong></td><td><code>₹100 per day</code> — no cap</td></tr>
<tr><td><strong>Late fee — Small LLP</strong></td><td><code>₹50 per day</code> — no cap</td></tr>
<tr><td><strong>Designated Partner KYC</strong></td><td>Required for every DP via DIR-3 KYC (same as Pvt Ltd directors)</td></tr>
</tbody>
</table>

<div class="callout warn"><p><strong>LLP Form 8 + Form 11 backlog math:</strong> A normal LLP that misses both forms by 365 days each owes 365 × ₹100 × 2 = <strong>₹73,000 per year in late fees alone</strong>, plus normal fees (~₹600-₹800), plus exposure under Section 75 (strike-off). For Small LLPs, the same backlog costs ₹36,500/year. Most LLP backlogs we see are 2-3 years old, costing ₹1.5L-₹2.2L just on these two forms.</p></div>
</section>

<div class="body-cta">
<h3>ROC Backlog Worth ₹50,000+?</h3>
<p>Patron's full-service backlog clearance: form preparation, MCA filing, condonation petition (where needed), director-disqualification removal, and company restoration — all under one roof. Fixed-fee quote within 24 hours.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20a%20fixed-fee%20quote%20for%20ROC%20backlog%20clearance." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ROC%20Backlog%20Clearance%20Quote&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20ROC%20backlog%20clearance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="consequences">
<h2>Consequences of Prolonged Default</h2>

<h3>Stage 1: 0-180 Days — Recoverable</h3>
<p>Late fees accrue daily but there is no escalation. File the pending form with the calculated late fee on MCA portal — process takes 24-48 hours including SRN, payment, e-stamp, and acceptance. Patron's fixed-fee filing service handles this within 48 hours.</p>

<h3>Stage 2: 181-365 Days — Active Risk Zone</h3>
<p>Late fees mount beyond ₹18,000 per form. SRN-related interest may be assessed. Director disqualification clock begins ticking (Section 164(2)(a) trips at 3-year mark). Recommended: file immediately and assess whether <a href="/condonation-of-delay-roc-filings">condonation of delay</a> is needed for the underlying transactions covered by the form.</p>

<h3>Stage 3: 365+ Days — Critical</h3>
<p>Two-year non-filing of AOC-4 + MGT-7 triggers Section 248(1)(c) suo-moto strike-off proceedings. ROC issues STK-1 notice to the company and all directors, publishes STK-5 inviting objections, and issues STK-7 strike-off if no satisfactory response is received within 30 days. Once struck off:</p>
<ul>
<li>Bank accounts frozen</li>
<li>Company cannot transact, sue, or be sued (except through restoration)</li>
<li>Director disqualification under Section 164(2)(a) for 5 years across ALL companies</li>
<li>Restoration via NCLT Section 252 petition within 20 years</li>
<li>Restoration cost: ₹50,000-₹2,00,000 in legal fees + all accumulated MCA dues</li>
</ul>
<p>Patron handles complete restoration: <a href="/restore-struck-off-company-mca">company restoration via NCLT</a> and <a href="/condonation-of-delay-roc-filings">condonation petitions</a> with fixed-fee packages.</p>

<h3>Stage 4: Director-Specific Consequences</h3>
<table class="fee-table">
<thead><tr><th>Trigger</th><th>Consequence</th><th>Recovery</th></tr></thead>
<tbody>
<tr><td>DIR-3 KYC missed (any year)</td><td>DIN deactivated; director cannot sign any e-form</td><td>File DIR-3 KYC + ₹5,000 — DIN reactivates within 24 hours</td></tr>
<tr><td>AOC-4 / MGT-7 missed for 3 consecutive years</td><td>Section 164(2)(a) — director disqualified for 5 years across ALL companies</td><td>CG-1 application to Central Government for de-listing (60-90 days)</td></tr>
<tr><td>Prosecution under Section 92(5) / 137(3)</td><td>Fine up to ₹50,000 per director + criminal proceeding</td><td>Compounding application under Section 441</td></tr>
</tbody>
</table>
</section>

<section class="content-section" id="condonation">
<h2>Condonation of Delay vs Strike-off Restoration — What's the Difference?</h2>

<h3>Condonation of Delay (Section 460)</h3>
<p><strong>What it does:</strong> Regularises a delayed filing — removes the technical non-compliance status. The Central Government (through Regional Director for routine forms or MCA HQ for complex matters) can condone the delay if the company has reasonable cause.</p>
<p><strong>What it does NOT do:</strong> Waive the late fee. All accumulated MCA late fees remain payable.</p>
<p><strong>When to use:</strong> When the delay impacts validity of a corporate action (e.g., a Board Resolution filed via late MGT-14 may be considered invalid without condonation), or when the company is facing strike-off proceedings and needs to regularise quickly.</p>
<p><strong>Cost:</strong> Patron's fixed-fee condonation package starts at ₹15,000 (single form) and includes drafting the petition, board resolution, supporting affidavits, and follow-up with the Regional Director.</p>

<h3>Strike-off Restoration (Section 252)</h3>
<p><strong>What it does:</strong> Restores a company that has been struck off the Register of Companies. Petition filed before NCLT within 20 years of strike-off.</p>
<p><strong>What it does NOT do:</strong> Automatically clear pending filings. After restoration, all pending forms must be filed with accumulated late fees.</p>
<p><strong>When to use:</strong> When the company has already been struck off (status on MCA portal shows "Strike Off" or "Defunct") and you want to revive it — typically because the company has assets, liabilities, ongoing contracts, or pending litigation.</p>
<p><strong>Cost:</strong> NCLT petition costs ₹50,000-₹2,00,000 depending on complexity, plus all accumulated MCA dues. Patron handles the entire restoration: NCLT petition drafting, hearing representation, and post-restoration ROC filings. See <a href="/restore-struck-off-company-mca">strike-off restoration service</a>.</p>

<div class="callout"><p><strong>Self-evaluation framework:</strong> Use this calculator to size up your accumulated MCA dues. If &lt; ₹25,000 → file directly. If ₹25,000-₹75,000 → file + evaluate condonation for any transactional impact. If &gt; ₹75,000 OR strike-off / disqualification triggered → engage Patron for end-to-end resolution.</p></div>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is MCA late fee and which forms attract it?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">MCA late fee is the additional fee payable to the Ministry of Corporate Affairs when a statutory form is filed after its prescribed due date. For Private Limited Companies, the forms that attract late fee are AOC-4 (Financial Statements under Section 137), MGT-7 or MGT-7A (Annual Return under Section 92), DIR-3 KYC (Director KYC under Rule 12A), and DPT-3 (Return of Deposits under Rule 16A). For LLPs, the forms are Form 8 (Statement of Account and Solvency) and Form 11 (Annual Return). The late fee calculation varies by form: AOC-4 and MGT-7 attract ₹100 per day from the due date with no maximum cap (Section 403 of the Companies Act 2013); DIR-3 KYC attracts a fixed ₹5,000 late fee; DPT-3 attracts a slab-based multiplier on the normal filing fee; LLP Form 8 and Form 11 attract ₹100 per day for normal LLPs and ₹50 per day for small LLPs.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is AOC-4 late fee calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">AOC-4 is the form for filing Financial Statements under Section 137 of the Companies Act 2013. The due date is 30 days from the date of the Annual General Meeting (AGM). For example, if AGM is held on 30 September 2026, AOC-4 is due by 30 October 2026. Late fee is ₹100 per day from the day after the due date until the actual filing date, with no maximum cap. So a 90-day delay attracts ₹9,000 in late fees; a 365-day delay attracts ₹36,500. This rate was fixed by the Companies (Amendment) Act 2017 and applies to all companies regardless of share capital. The late fee is in addition to the normal filing fee which ranges from ₹200 to ₹600 based on nominal share capital. Companies that fail to file AOC-4 for two consecutive financial years risk being struck off the Register of Companies under Section 248.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is MGT-7 (or MGT-7A) late fee calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">MGT-7 is the Annual Return form under Section 92 for all companies except One Person Companies and Small Companies, which file MGT-7A. The due date is 60 days from the date of the AGM (or in case of OPC, where no AGM is held, 60 days from the completion of six months from the close of financial year). For example, if AGM is on 30 September 2026, MGT-7 is due by 29 November 2026. Late fee under Section 403 is ₹100 per day with no maximum cap. A 60-day delay therefore costs ₹6,000; a 180-day delay costs ₹18,000. Non-filing of MGT-7 for two consecutive years exposes the company to strike-off proceedings under Section 248, mandatory disqualification of directors under Section 164(2)(a), and prosecution under Section 92(5) which can attract a fine of up to ₹5 lakh on the company plus ₹50,000 on each director.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the DIR-3 KYC late fee?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">DIR-3 KYC is mandatory for every Director Identification Number (DIN) holder under Rule 12A of the Companies (Appointment and Qualification of Directors) Rules 2014. The due date is 30 September every year, covering KYC for the previous financial year. Filing on or before 30 September is free of charge. If filed even one day late, a fixed late fee of ₹5,000 applies — this is not graded by number of days delayed; it is a flat penalty. Additionally, on missing the deadline, the DIN is automatically marked as Deactivated due to Non-filing of DIR-3 KYC. The director cannot sign any e-forms, attend Board Meetings as a director of record, or be reflected as a director on any new filing until the KYC is filed and the ₹5,000 paid. There is no condonation route for DIR-3 KYC — only filing and payment reactivate the DIN.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is DPT-3 late fee calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">DPT-3 is the Return of Deposits filed by every company that has accepted loans, advances, deposits from members, directors or other entities under Rule 16A of the Companies (Acceptance of Deposits) Rules 2014. Due date is 30 June every year (for the position as on 31 March of that year). Late fee follows the standard MCA slab multiplier on the normal filing fee: up to 30 days delay attracts 2x normal fee; 31-60 days attracts 4x; 61-90 days attracts 6x; 91-180 days attracts 10x; beyond 180 days attracts 12x. Normal fee depends on nominal share capital: ₹200 for capital up to ₹1 lakh, ₹300 for ₹1-5 lakh, ₹400 for ₹5-25 lakh, ₹500 for ₹25 lakh-1 crore, and ₹600 above ₹1 crore. So a company with ₹50 lakh capital filing DPT-3 75 days late owes 6 × ₹500 = ₹3,000 in late fee plus the ₹500 normal fee.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the LLP Form 8 late fee?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">LLP Form 8 (Statement of Account and Solvency) is filed under Section 34 of the Limited Liability Partnership Act 2008. The due date is 30 October every year (for the financial year ended 31 March). Late fee for filing after the due date is ₹100 per day for normal LLPs and ₹50 per day for Small LLPs, with no maximum cap, per the LLP (Amendment) Rules 2022 effective 1 April 2022. A Small LLP is one whose contribution from partners does not exceed ₹25 lakh AND whose turnover in the immediately preceding financial year does not exceed ₹40 lakh. So a normal LLP that files Form 8 90 days late owes ₹9,000 in late fee; a Small LLP for the same delay owes ₹4,500. The accrual continues until actual filing — there is no cap or graded reduction.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the LLP Form 11 late fee?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">LLP Form 11 (Annual Return) is filed under Section 35 of the Limited Liability Partnership Act 2008. The due date is 30 May every year (for the financial year ended 31 March). Late fee follows the same structure as Form 8: ₹100 per day for normal LLPs, ₹50 per day for Small LLPs, with no maximum cap, per the LLP (Amendment) Rules 2022. Non-filing of Form 11 for two consecutive financial years exposes the LLP to strike-off proceedings under Section 75 of the LLP Act read with the Limited Liability Partnership (Removal of Names from the Register) Rules 2017. So a normal LLP that fails to file Form 11 for two years could accrue late fees of approximately ₹73,000 per form per year, totalling ~₹2.9 lakh just on these two forms before any condonation.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is there a maximum cap on MCA late fees?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">There is NO maximum cap on MCA late fees for AOC-4, MGT-7, LLP Form 8, or LLP Form 11 since the 2018 Section 403 amendment (for Pvt Ltd) and the 2022 LLP Amendment Rules. The daily accrual continues indefinitely. The earlier cap of 12x the normal fee was removed specifically to incentivise timely filing. DIR-3 KYC has a fixed ₹5,000 (which is the cap by design). DPT-3 caps at 12x the normal fee since it still follows the slab structure. The lack of a cap on the daily accrual forms is exactly why backlogs of 2-3 years lead to late fees in lakhs — a Pvt Ltd company with both AOC-4 and MGT-7 unfiled for 2 years would owe approximately ₹73,000 in late fees per form plus normal fees plus consequential exposure under Section 164(2)(a) director disqualification.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What happens if I don't file ROC forms for multiple years?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Multi-year non-filing triggers escalating consequences: (1) Late fees keep accruing daily — a 3-year backlog on AOC-4 + MGT-7 alone exceeds ₹2,19,000 in late fees. (2) Director disqualification under Section 164(2)(a) — if AOC-4 or MGT-7 not filed for 3 consecutive years, ALL directors of the company become disqualified for 5 years across all companies they are associated with; this requires CG-1 application to remove disqualification. (3) Strike-off proceedings under Section 248 — ROC initiates suo-moto strike-off after 2 consecutive years of non-filing; once struck off, the company is dissolved and bank accounts frozen. (4) Restoration requires NCLT petition under Section 252 within 20 years, costs ₹50,000-₹2,00,000 in legal fees plus all accumulated MCA dues. (5) Prosecution under Section 92(5) and 137(3) — fines up to ₹5 lakh on company and ₹50,000 per director. Patron handles complete compliance restoration including condonation, NCLT restoration, and director disqualification removal.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can MCA late fees be waived through condonation?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Condonation of delay under Section 460 of the Companies Act 2013 allows the Central Government (through Regional Director or MCA HQ) to condone the delay in filing certain forms — but it does NOT waive the late fee. Even after condonation is granted, the company must still pay all accumulated late fees as on the date of filing. What condonation achieves is regularisation of the delayed filing (removing the technical non-compliance status), which is essential when (1) the delay impacts the validity of resolutions or transactions filed via the delayed form, (2) the company is facing strike-off proceedings, or (3) the directors are facing disqualification. The Central Government Companies Settlement Scheme (CFSS) windows occasionally offered waiver of additional fees as one-time amnesty — for example CFSS 2020 covered most pending forms with only normal fee. As of FY 2026-27 no such amnesty scheme is currently active; clients should plan around full late fee payment.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>When does my company or LLP become liable for strike-off?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For Pvt Ltd / OPC: ROC may initiate strike-off under Section 248(1)(c) of the Companies Act if (a) the company has failed to file AOC-4 or MGT-7 for two consecutive financial years, OR (b) the company has not commenced business within one year of incorporation, OR (c) the subscriber to MOA has not paid subscription within 180 days. The procedure: ROC issues notice STK-1 to the company and directors, publishes STK-5 inviting objections, and if no satisfactory response is received within 30 days, issues STK-7 striking off the company. Bank accounts get frozen, the company cannot transact, and the directors are personally liable for any outstanding obligations. For LLPs: Strike-off under Section 75 of the LLP Act follows similar two-year non-filing trigger for Form 8 and Form 11. Restoration is via NCLT Section 252 (Pvt Ltd) or Section 75 read with LLP Rules (LLP) within 20 years.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is Small LLP defined for late fee purposes?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A Small LLP is defined under Section 2(1)(ta) of the LLP Act 2008 (inserted by the LLP (Amendment) Act 2021) as an LLP whose: (a) contribution from partners does not exceed ₹25 lakh (or such higher amount up to ₹5 crore as may be prescribed), AND (b) turnover in the immediately preceding financial year does not exceed ₹40 lakh (or such higher amount up to ₹50 crore as may be prescribed). Both conditions must be satisfied. The Small LLP classification affects multiple compliance areas: lower MCA filing fees, ₹50/day late fee (vs ₹100/day for normal LLPs) on Form 8 and Form 11, simplified compounding of offences, no requirement for audit if turnover is below ₹40 lakh AND contribution below ₹25 lakh, and reduced penalties for procedural defaults. The status must be self-declared at the time of filing and is verifiable from the audited financials filed in the preceding year.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can I get a discount or settlement on a backlog of late fees?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">There is no statutory discount on accrued MCA late fees once they have crystallised. Negotiation with ROC is not permitted. The only legitimate routes to reduce the burden are: (1) Timely filing now — the longer you wait, the more it accrues at ₹100/day per form; the daily clock cannot be stopped except by filing. (2) Condonation of delay under Section 460 — removes technical non-compliance but does NOT waive fees. (3) Amnesty schemes when notified — CFSS 2020 was the last major scheme; the government occasionally announces such schemes during fiscal year-end. (4) Compounding of offences under Section 441 — relevant if prosecution has been launched; the compounding fee replaces the prosecution penalty but does not affect MCA filing fees. (5) Conversion / closure — if the company is dormant and there is no genuine intent to continue, voluntary strike-off under Section 248(2) costs ₹10,000 plus is faster than restoration later. Patron evaluates the optimal strategy case by case.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>ROC Filing Help</h3>
<p>Patron files your overdue MCA forms within 48 hours. Fixed fees from ₹2,500.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20filing%20overdue%20MCA%20forms." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=MCA%20Filing%20Help&body=Hi%2C%20we%20need%20help%20with%20MCA%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<div class="sidebar-card"><h3>Backlog Resolution</h3>
<a href="/condonation-of-delay-roc-filings" class="sidebar-link">Condonation of Delay (Section 460) <span class="arrow">→</span></a>
<a href="/restore-struck-off-company-mca" class="sidebar-link">Restore Struck-off Company <span class="arrow">→</span></a>
<a href="/director-disqualification-removal" class="sidebar-link">Director Disqualification Removal <span class="arrow">→</span></a>
<a href="/compounding-of-offences" class="sidebar-link">Compounding of Offences <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Services</h3>
<a href="/annual-compliance-private-limited" class="sidebar-link">Pvt Ltd Annual Compliance <span class="arrow">→</span></a>
<a href="/annual-compliance-llp" class="sidebar-link">LLP Annual Compliance <span class="arrow">→</span></a>
<a href="/director-kyc" class="sidebar-link">DIR-3 KYC Filing <span class="arrow">→</span></a>
<a href="/dpt-3-filing" class="sidebar-link">DPT-3 Filing <span class="arrow">→</span></a>
<a href="/llp-strike-off" class="sidebar-link">LLP Strike-off <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Tools</h3>
<a href="/tools/annual-compliance-cost-estimator" class="sidebar-link">Annual Compliance Cost Estimator <span class="arrow">→</span></a>
<a href="/tools/notice-section-identifier" class="sidebar-link">Notice Section Identifier <span class="arrow">→</span></a>
<a href="/tools/notice-deadline-tracker" class="sidebar-link">Notice Deadline Tracker <span class="arrow">→</span></a>
<a href="/tools/din-authenticity-verifier" class="sidebar-link">DIN Notice Verifier <span class="arrow">→</span></a>
</div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
function showError(msg){const b=document.getElementById('errorBanner');b.textContent=msg;b.classList.add('visible');setTimeout(()=>b.classList.remove('visible'),6000);}

let currentEntity = 'pvtltd';

const FORMS = {
    pvtltd: [
        {val: 'AOC-4', label: 'AOC-4 — Financial Statements (Sec 137)', daily: 100, mode: 'daily'},
        {val: 'MGT-7', label: 'MGT-7 — Annual Return (Sec 92)', daily: 100, mode: 'daily'},
        {val: 'MGT-7A', label: 'MGT-7A — Annual Return for OPC/Small Co.', daily: 100, mode: 'daily'},
        {val: 'DIR-3-KYC', label: 'DIR-3 KYC — Director KYC (Rule 12A)', daily: 0, mode: 'fixed', fixed: 5000},
        {val: 'DPT-3', label: 'DPT-3 — Return of Deposits (Rule 16A)', daily: 0, mode: 'slab'}
    ],
    llp: [
        {val: 'FORM-8', label: 'Form 8 — Statement of A&S (Sec 34)', daily: 100, dailySmall: 50, mode: 'daily-llp'},
        {val: 'FORM-11', label: 'Form 11 — Annual Return (Sec 35)', daily: 100, dailySmall: 50, mode: 'daily-llp'},
        {val: 'DIR-3-KYC', label: 'DIR-3 KYC — Designated Partner KYC', daily: 0, mode: 'fixed', fixed: 5000}
    ]
};

function setEntity(b){
    const e = b.closest ? (b.closest('.toggle-btn') || b) : b;
    currentEntity = e.dataset.entity;
    e.parentElement.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));
    e.classList.add('active');
    renderFormDropdown();
    onFormChange();
}

function renderFormDropdown(){
    const sel = document.getElementById('formSelect');
    sel.innerHTML = '';
    FORMS[currentEntity].forEach(f => {
        const opt = document.createElement('option');
        opt.value = f.val;
        opt.textContent = f.label;
        sel.appendChild(opt);
    });
}

function getCurrentForm(){
    const val = document.getElementById('formSelect').value;
    return FORMS[currentEntity].find(f => f.val === val);
}

function onFormChange(){
    const f = getCurrentForm();
    if(!f) return;
    document.getElementById('dptCapitalRow').style.display = (f.mode === 'slab') ? 'block' : 'none';
    document.getElementById('smallLlpRow').style.display = (f.mode === 'daily-llp') ? 'flex' : 'none';
}

function daysBetween(d1, d2){
    const a = new Date(d1.getFullYear(), d1.getMonth(), d1.getDate());
    const b = new Date(d2.getFullYear(), d2.getMonth(), d2.getDate());
    return Math.round((b - a) / (1000 * 60 * 60 * 24));
}

function formatINR(n){return '₹' + Math.round(n).toLocaleString('en-IN');}

function formatDate(d){
    const days=['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    const months=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    return days[d.getDay()] + ', ' + d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
}

function calculateLateFee(form, days, isSmallLLP, normalFee){
    if(days <= 0) return {total: 0, daily: 0, basis: 'On time — no late fee'};
    if(form.mode === 'daily'){
        return {total: days * form.daily, daily: form.daily, basis: '₹' + form.daily + '/day × ' + days + ' days (Section 403, no cap)'};
    }
    if(form.mode === 'fixed'){
        return {total: form.fixed, daily: 0, basis: 'Fixed ₹' + form.fixed.toLocaleString('en-IN') + ' (any delay, even 1 day)'};
    }
    if(form.mode === 'daily-llp'){
        const rate = isSmallLLP ? form.dailySmall : form.daily;
        return {total: days * rate, daily: rate, basis: '₹' + rate + '/day × ' + days + ' days (' + (isSmallLLP ? 'Small LLP' : 'Normal LLP') + ', no cap)'};
    }
    if(form.mode === 'slab'){
        // DPT-3 slab multiplier on normal fee
        let mult = 12;
        if(days <= 30) mult = 2;
        else if(days <= 60) mult = 4;
        else if(days <= 90) mult = 6;
        else if(days <= 180) mult = 10;
        return {total: mult * normalFee, daily: 0, basis: mult + 'x × ₹' + normalFee + ' (normal fee) — slab for ' + (days <= 30 ? 'up to 30 days' : days <= 60 ? '31-60 days' : days <= 90 ? '61-90 days' : days <= 180 ? '91-180 days' : 'beyond 180 days')};
    }
    return {total: 0, daily: 0, basis: '—'};
}

function calculate(){
    const dueStr = document.getElementById('dueDate').value;
    const filingStr = document.getElementById('filingDate').value;

    if(!dueStr || !filingStr){
        showError('Please enter both the original due date and the expected filing date.');
        return;
    }

    const dueDate = new Date(dueStr);
    const filingDate = new Date(filingStr);

    if(isNaN(dueDate.getTime()) || isNaN(filingDate.getTime())){
        showError('Invalid date(s). Please re-enter.');
        return;
    }

    const days = daysBetween(dueDate, filingDate);
    const form = getCurrentForm();
    const isSmallLLP = document.getElementById('smallLlp').checked;
    const normalFee = parseInt(document.getElementById('dptCapital').value, 10) || 400;

    const result = calculateLateFee(form, days, isSmallLLP, normalFee);

    // Severity
    let severity, severityLabel, severityDesc, headlineClass, icon;
    if(days <= 0){
        severity = 'low'; severityLabel = 'On Time'; severityDesc = 'No late fee'; headlineClass = 'low'; icon = '✓';
    } else if(form.mode === 'fixed'){
        severity = 'high'; severityLabel = 'DIN Deactivated'; severityDesc = 'Filing required'; headlineClass = 'high'; icon = '⚠';
    } else if(days <= 30){
        severity = 'low'; severityLabel = 'Low'; severityDesc = 'File promptly'; headlineClass = 'medium'; icon = '⚠';
    } else if(days <= 90){
        severity = 'medium'; severityLabel = 'Medium'; severityDesc = '31-90 days delay'; headlineClass = 'medium'; icon = '⚠';
    } else if(days <= 180){
        severity = 'high'; severityLabel = 'High'; severityDesc = '91-180 days delay'; headlineClass = 'high'; icon = '🚩';
    } else {
        severity = 'critical'; severityLabel = 'Critical'; severityDesc = 'Strike-off + condonation risk'; headlineClass = 'critical'; icon = '🚨';
    }

    // Headline
    const rh = document.getElementById('resultHeadline');
    rh.classList.remove('low','medium','high','critical');
    rh.classList.add(headlineClass);
    document.getElementById('verdictIcon').textContent = icon;
    document.getElementById('resTotal').textContent = formatINR(result.total);

    let summaryText;
    if(days <= 0){
        summaryText = 'Filing is on time — no late fee applicable. Normal filing fee (₹200-₹600 based on capital) applies separately.';
    } else if(form.mode === 'fixed'){
        summaryText = form.val + ' is a flat penalty regardless of days. ₹' + form.fixed.toLocaleString('en-IN') + ' payable on filing.';
    } else {
        summaryText = form.val + ' overdue by ' + days + ' days. ' + result.basis + '.';
    }
    document.getElementById('resSummary').textContent = summaryText;

    document.getElementById('resMeta').textContent = 'Due date: ' + formatDate(dueDate) + ' · Filing date: ' + formatDate(filingDate) + (currentEntity === 'llp' && form.mode === 'daily-llp' ? ' · ' + (isSmallLLP ? 'Small LLP' : 'Normal LLP') : '');

    // Summary grid
    document.getElementById('resDays').textContent = Math.max(0, days).toLocaleString('en-IN');
    document.getElementById('resDaysSub').textContent = days <= 0 ? 'on time' : 'past due date';
    document.getElementById('resAccrual').textContent = result.daily > 0 ? '₹' + result.daily : (form.mode === 'fixed' ? 'Flat ₹' + form.fixed.toLocaleString('en-IN') : (form.mode === 'slab' && days > 0 ? 'Slab' : '—'));
    document.getElementById('resAccrualSub').textContent = result.daily > 0 ? 'per day, uncapped' : (form.mode === 'fixed' ? 'one-time' : (form.mode === 'slab' && days > 0 ? 'multiplier on normal fee' : '—'));
    document.getElementById('resSeverity').textContent = severityLabel;
    document.getElementById('resSeveritySub').textContent = severityDesc;

    // Special flags
    document.getElementById('dinFlag').classList.toggle('visible', form.val === 'DIR-3-KYC' && days > 0);
    document.getElementById('strikeOffFlag').classList.toggle('visible', days > 365 && (form.val === 'AOC-4' || form.val === 'MGT-7' || form.val === 'MGT-7A' || form.val === 'FORM-8' || form.val === 'FORM-11'));
    document.getElementById('disqFlag').classList.toggle('visible', days >= 730 && (form.val === 'AOC-4' || form.val === 'MGT-7' || form.val === 'MGT-7A'));

    // Action list
    let actions = [];
    let ctaHead = '';
    if(days <= 0){
        actions = [
            '<strong>You are on time</strong> — proceed with filing on the MCA portal.',
            '<strong>Normal filing fee:</strong> ₹200 to ₹600 depending on nominal share capital / contribution.',
            '<strong>Use Patron filing service</strong> for one-shot filing with all DSC + e-stamp + payment — fixed fee from ₹2,500.'
        ];
        ctaHead = 'Get the filing done — fixed fee from ₹2,500';
    } else if(form.mode === 'fixed'){
        actions = [
            '<strong>File DIR-3 KYC immediately</strong> on MCA portal with the ₹5,000 late fee — your DIN reactivates within 24 hours.',
            '<strong>Cannot sign any other forms</strong> in the meantime — appointments, resolutions, all blocked.',
            '<strong>No condonation route available</strong> — only filing solves this.',
            '<strong>Annual recurring obligation</strong> — set a reminder for next 30 September to avoid ₹5,000 every year.',
            '<strong>Engage Patron</strong> for compliance calendar management — we file all directors\' DIR-3 KYC together.'
        ];
        ctaHead = 'File DIR-3 KYC now — DIN reactivation within 24 hours';
    } else if(severity === 'low' || severity === 'medium'){
        actions = [
            '<strong>File the form on MCA portal</strong> within 7 days to stop further accrual.',
            '<strong>Late fee on filing:</strong> ' + formatINR(result.total) + ' (payable via MCA portal challan).',
            '<strong>Patron fixed-fee filing</strong> at ₹2,500-₹5,000 per form depending on complexity.',
            '<strong>If the underlying transaction needs validation</strong> (e.g., a delayed Board Resolution under MGT-14), consider condonation under Section 460.'
        ];
        ctaHead = 'File this form within 7 days — stop the daily accrual';
    } else if(severity === 'high'){
        actions = [
            '<strong>File the form on MCA portal immediately</strong> — every day costs another ₹' + (result.daily || 100) + '.',
            '<strong>Late fee on filing:</strong> ' + formatINR(result.total) + '.',
            '<strong>Evaluate condonation under Section 460</strong> if the delay impacts validity of an underlying transaction — <a href="/condonation-of-delay-roc-filings" style="color:var(--primary);font-weight:700;">Patron condonation service</a> (fixed-fee from ₹15,000).',
            '<strong>Check sibling forms</strong> — if MGT-7 is overdue, AOC-4 likely is too. File together for combined relief.',
            '<strong>Avoid Section 164(2)(a) trap</strong> — file before the 3-year mark to prevent director disqualification.'
        ];
        ctaHead = 'High-risk backlog — file within 48 hours';
    } else {
        actions = [
            '<strong>CRITICAL: File immediately</strong> — strike-off proceedings may already be in process.',
            '<strong>Late fee on filing:</strong> ' + formatINR(result.total) + '.',
            '<strong>Check MCA portal for company status</strong> — if "Strike Off" or "Defunct", file <a href="/restore-struck-off-company-mca" style="color:var(--primary);font-weight:700;">NCLT restoration petition</a> first (₹50,000-₹2,00,000).',
            '<strong>Director disqualification likely</strong> — file CG-1 application to lift Section 164(2)(a) bar (60-90 days).',
            '<strong>Combined backlog clearance package</strong> — Patron handles filing + condonation + restoration + disqualification removal as a single workflow. Free 15-min triage call.',
            '<strong>Compounding under Section 441</strong> may be needed if prosecution has been launched.'
        ];
        ctaHead = 'CRITICAL — combined backlog clearance required';
    }

    const al = document.getElementById('actionList');
    al.innerHTML = '';
    actions.forEach(a => { const li = document.createElement('li'); li.innerHTML = a; al.appendChild(li); });
    document.getElementById('postCtaHead').textContent = ctaHead;

    const sec = document.getElementById('resultSection');
    sec.classList.add('visible');
    requestAnimationFrame(function(){requestAnimationFrame(function(){sec.scrollIntoView({behavior:'smooth',block:'start'});});});
}

function resetCalc(){
    currentEntity = 'pvtltd';
    document.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));
    document.querySelector('.toggle-btn[data-entity="pvtltd"]').classList.add('active');
    renderFormDropdown();
    document.getElementById('dueDate').value = '2025-10-30';
    document.getElementById('filingDate').value = '2026-05-14';
    document.getElementById('smallLlp').checked = false;
    document.getElementById('dptCapital').value = '400';
    onFormChange();
    document.getElementById('resultSection').classList.remove('visible');
    document.getElementById('errorBanner').classList.remove('visible');
}

function toggleFaq(e){const b=e.closest?(e.closest('.faq-question')||e):e;const it=b.closest('.faq-item');if(!it)return;const o=it.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>{i.classList.remove('open');const q=i.querySelector('.faq-question');if(q)q.setAttribute('aria-expanded','false');});if(!o){it.classList.add('open');b.setAttribute('aria-expanded','true');}}

renderFormDropdown();
onFormChange();

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
