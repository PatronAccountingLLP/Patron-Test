@extends('layouts.app')
@section('meta')

<title>Compliance Calendar Generator | Pvt Ltd & LLP FY 2026-27</title>
<meta name="description" content="Personalised year-ahead compliance calendar for Pvt Ltd, LLP, OPC and Section 8, with 100+ filings across 12 regulators and 30/15/7/1-day reminders. Free PDF.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/compliance-calendar-generator">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/compliance-calendar-generator">
<meta property="og:title" content="Compliance Calendar Generator — Pvt Ltd & LLP 2026">
<meta property="og:description" content="Generate a personalised compliance calendar with MCA + Income Tax + GST + EPFO + ESI + TDS dates and 30/15/7/1-day reminders.">
<meta property="og:image" content="/og/compliance-calendar-generator.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Compliance Calendar Generator — Pvt Ltd & LLP 2026">
<meta name="twitter:description" content="100+ filings, 12 regulators, 30/15/7/1-day reminders. Free PDF + monthly email reminder service.">
<meta name="twitter:image" content="/og/compliance-calendar-generator.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">

@endsection
@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"Compliance Calendar Generator","description":"Compliance Calendar Generator produces a personalised year-ahead statutory compliance calendar for Indian Private Limited Companies, One Person Companies, Limited Liability Partnerships, and Section 8 Companies. The tool accepts the entity type, financial year end date (typically 31 March), Annual General Meeting date (typically within six months of financial year end), GST registration status and filing frequency (monthly or QRMP quarterly), tax audit applicability under Section 44AB, employees-onboard status for Provident Fund and Employees State Insurance compliance, and optional flags for Micro Small and Medium Enterprises registration, listed-entity status, and foreign related party transactions. The tool generates a personalised calendar spanning twelve months from the user-selected start date, covering filings across twelve regulators: the Ministry of Corporate Affairs (AOC-4, MGT-7, MGT-7A, DIR-3 KYC, DPT-3, ADT-1, MSME Form 1, Form 8 and Form 11 for LLPs), Central Board of Direct Taxes (advance tax instalments under Section 211, ITR-6 for companies, ITR-5 for LLPs, ITR-7 for Section 8, tax audit report in Form 3CD, transfer pricing audit in Form 3CEB), Central Board of Indirect Taxes and Customs (GSTR-1 outward supplies, GSTR-3B summary return, GSTR-9 annual return, GSTR-9C reconciliation statement, CMP-08 for composition), Employees Provident Fund Organisation (monthly PF payment and ECR filing), Employees State Insurance Corporation (monthly ESI payment and half-yearly returns), State Tax Department (Professional Tax payment and return), Tax Deducted at Source (TDS payment by 7th and quarterly returns in Form 24Q, 26Q, 27Q), Securities and Exchange Board of India (for listed entities), Reserve Bank of India (FEMA filings for entities with foreign related parties), Food Safety and Standards Authority of India (for food businesses), and Pollution Control Boards (for manufacturing units). For each compliance event the tool computes the due date, four reminder dates (thirty days, fifteen days, seven days, and one day before the due date), the penalty for non-compliance citing specific statutory sections, the responsible authority, and the severity tier. The calendar can be exported as a printable PDF or subscribed to via monthly email reminders. The tool implements the schedule per the Companies Act 2013, the Income Tax Act 2025, the Central Goods and Services Tax Act 2017, the Employees Provident Funds and Miscellaneous Provisions Act 1952, the Employees State Insurance Act 1948, and the Limited Liability Partnership Act 2008 with current amendments as on FY 2026-27.","url":"/tools/compliance-calendar-generator","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Compliance Calendar Generator","item":"/tools/compliance-calendar-generator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"What is a compliance calendar and why do I need one?","acceptedAnswer":{"@type":"Answer","text":"A compliance calendar is a personalised schedule of every statutory filing, payment, and procedural event that your business is required to complete in a financial year. For a typical Indian Pvt Ltd Company with GST and employees, this covers approximately 100-130 events across 12 regulators including the Ministry of Corporate Affairs (AOC-4, MGT-7, DIR-3 KYC, DPT-3, ADT-1, MSME Form 1), Central Board of Direct Taxes (advance tax instalments, ITR-6, Form 3CD tax audit), Central Board of Indirect Taxes and Customs (GSTR-1, GSTR-3B, GSTR-9, GSTR-9C), Employees Provident Fund Organisation (PF monthly), Employees State Insurance Corporation (ESI monthly), State Tax (Professional Tax), and TDS payments and returns. Missing a single filing triggers cascading penalties: ROC late fees accrue at ₹100/day with no cap; GST late fees plus interest at 18% per annum; TDS interest at 1.5% per month plus 234E late fee; PF interest plus damages up to 25% per annum. A calendar with proactive 30/15/7/1-day reminders prevents these penalties entirely and is the single highest-ROI compliance investment a business can make."}},
{"@type":"Question","name":"How many compliance events does a typical Pvt Ltd Company have?","acceptedAnswer":{"@type":"Answer","text":"A typical operational Pvt Ltd Company with GST registration, employees subject to PF and ESI, and audit applicability has approximately 110-130 distinct compliance events in a financial year. The breakdown: MCA filings — 9 to 14 events (AOC-4, MGT-7, DIR-3 KYC for each director, DPT-3, ADT-1, MSME Form 1 half-yearly, board meetings quarterly, AGM); Income Tax — 7 to 10 events (4 advance tax instalments, ITR-6, Form 3CD, Form 3CEB if transfer pricing); GST — 26 events for monthly filer (24 monthly returns plus GSTR-9 annual and GSTR-9C reconciliation if turnover above ₹5 Cr); TDS — 16 events (12 monthly payments plus 4 quarterly returns plus certificates); PF/ESI — 24 events (12 each); Professional Tax — 12 events (monthly). Plus state-specific labour law filings (Shops & Establishment renewal, contract labour reporting), sectoral filings (FSSAI for food businesses, RBI for FDI), and entity-specific filings (FLA return for foreign investment). The exact count varies by entity type, turnover, sector, and state — our tool generates the personalised count for your specific scenario."}},
{"@type":"Question","name":"What are the 12 regulators covered in the calendar?","acceptedAnswer":{"@type":"Answer","text":"The 12 regulators monitored in Patron's compliance calendar framework are: (1) Ministry of Corporate Affairs (MCA) — annual filings under Companies Act 2013 and LLP Act 2008; (2) Central Board of Direct Taxes (CBDT) — income tax under Income Tax Act 2025; (3) Central Board of Indirect Taxes and Customs (CBIC) — GST under CGST Act 2017; (4) Employees Provident Fund Organisation (EPFO) — PF under EPF & MP Act 1952; (5) Employees State Insurance Corporation (ESIC) — medical insurance under ESI Act 1948; (6) State Tax Department — Professional Tax under state-specific PT Acts; (7) State Labour Department — Shops & Establishment, Minimum Wages, Contract Labour Acts; (8) Ministry of MSME — Udyam registration, MSME Form 1 delayed payment reporting; (9) Securities and Exchange Board of India (SEBI) — for listed entities and certain unlisted public companies; (10) Reserve Bank of India (RBI) — FEMA filings (Form FC-GPR, FLA return, Form FC-TRS); (11) Food Safety and Standards Authority of India (FSSAI) — for food businesses; (12) Pollution Control Boards (state and central) — for manufacturing units. Patron's library extends to sector-specific regulators (DGFT, IRDAI, AERA, etc.) on engagement. Not every entity faces all 12; the tool filters based on your inputs."}},
{"@type":"Question","name":"How is my AGM date calculated and why does it matter?","acceptedAnswer":{"@type":"Answer","text":"Under Section 96 of the Companies Act 2013, the Annual General Meeting (AGM) must be held within six months from the close of the financial year — for FY 2025-26 ending 31 March 2026, the AGM must be held on or before 30 September 2026. For the first AGM after incorporation, the period is extended to nine months from FY-end. One Person Companies are exempt from AGM requirement; their MGT-7A is filed within 60 days of the date by which AGM would otherwise have been held (30 September). The AGM date drives multiple downstream compliances: AOC-4 (Financial Statements) is due 30 days from AGM; MGT-7 (Annual Return) is due 60 days from AGM; ADT-1 (Auditor Appointment) is due 15 days from AGM if a reappointment resolution is passed; and board meeting requirements (4 per year, with not more than 120 days between consecutive meetings) are partly governed by AGM timing. If you leave the AGM date field blank, the tool assumes 30 September 2026 as the default and calculates downstream dates accordingly."}},
{"@type":"Question","name":"What are the 30/15/7/1-day reminders and how are they useful?","acceptedAnswer":{"@type":"Answer","text":"For every compliance event, the calendar generates four reminder dates: 30 days before, 15 days before, 7 days before, and 1 day before the due date. The rationale for this cadence comes from operational compliance practice: the 30-day reminder is for resource planning — \"Are the documents ready? Is the data being compiled? Does the CA team have bandwidth?\" The 15-day reminder is for execution — \"Documents being prepared and reviewed.\" The 7-day reminder is for final checks — \"Submitted for DSC, payment ready.\" The 1-day reminder is the final fail-safe — \"Will it be filed today?\" Most compliance failures happen because internal stakeholders confuse \"deadline\" with \"start preparation\" — by then it is already too late for documents, approvals, and DSC. The 30-day buffer accommodates the realistic preparation time for non-trivial filings (audit, AGM, board meetings) and prevents last-minute rushed compliance which often results in errors that compound penalties."}},
{"@type":"Question","name":"How does the tool handle GST monthly vs QRMP filers?","acceptedAnswer":{"@type":"Answer","text":"The GST filing schedule depends on aggregate annual turnover and the filer's election. Taxpayers with turnover up to ₹5 crore can opt into the Quarterly Return Monthly Payment (QRMP) scheme: GSTR-1 is filed quarterly (by 13th of month after quarter-end) and GSTR-3B is filed quarterly (by 22nd/24th of month after quarter-end depending on state). Monthly filers (turnover above ₹5 crore or those who opt for monthly) file GSTR-1 by 11th of every next month and GSTR-3B by 20th of every next month. Tax payments under QRMP are made monthly via PMT-06 by 25th of next month. The annual return GSTR-9 (due 31 December) and the reconciliation statement GSTR-9C (mandatory for turnover above ₹5 crore, due 31 December) apply to both filer types. Our calendar tool generates 24 monthly events for monthly filers, 4 quarterly events + 8 monthly PMT-06 events for QRMP filers, plus the annual returns. The output explicitly labels each event with its return type and due date."}},
{"@type":"Question","name":"What happens if I miss a compliance event?","acceptedAnswer":{"@type":"Answer","text":"Penalties vary by regulator: (1) MCA — AOC-4 and MGT-7 attract ₹100/day late fee with no cap under Section 403; LLP Form 8 and 11 attract ₹100/day for normal LLPs and ₹50/day for Small LLPs; DIR-3 KYC is a flat ₹5,000 plus DIN deactivation; (2) Income Tax — late filing of ITR attracts ₹5,000 fee under Section 234F (₹1,000 if income below ₹5 lakh) plus interest at 1% per month under Section 234A; advance tax shortfall attracts interest under Section 234B and 234C; (3) GST — GSTR-3B late fee is ₹50/day (₹20 for nil return) capped at ₹5,000 plus interest at 18% per annum on tax due; GSTR-1 late fee is ₹200/day capped at ₹5,000; GSTR-9 late fee is ₹200/day capped at 0.25% of turnover; (4) TDS — interest under Section 201(1A) at 1.5% per month for late deposit, plus Section 234E late fee at ₹200/day capped at TDS amount; (5) PF — interest at 12% per annum plus damages 5-25% per annum; (6) ESI — interest at 12% per annum plus damages up to 25%. Annual penalty exposure for a non-compliant Pvt Ltd typically runs ₹1.5L-₹5L+ before consequential issues like director disqualification and strike-off."}},
{"@type":"Question","name":"Is the compliance calendar generated by this tool legally binding?","acceptedAnswer":{"@type":"Answer","text":"No. The calendar is a planning aid, not a legal compliance certificate. It is generated based on the standard schedule applicable to the entity type and inputs you provide; it does not account for entity-specific exemptions, special circumstances (such as conversion, merger, demerger), interim notifications by regulators, sectoral overlays (e.g., listed entity compliance under SEBI LODR), or state-specific variations beyond the broad framework. Always cross-verify with a qualified Chartered Accountant or Company Secretary before relying on the calendar for actual filings, especially for: complex transactions (capital raise, ESOP grants, mergers), sectoral entities (banking, insurance, NBFCs, real estate), foreign-related transactions (FDI, ODI, ECB), and any first-time filings. Patron offers a CA review service that validates the auto-generated calendar against your specific entity, sector, and transaction history — fixed-fee ₹5,000-₹15,000 depending on complexity, completed in 5 working days."}},
{"@type":"Question","name":"How do I get monthly email reminders for these compliances?","acceptedAnswer":{"@type":"Answer","text":"Patron offers a complimentary monthly email reminder service for the auto-generated calendar. Click the \"Subscribe to Monthly Reminders\" button after generating your calendar, fill in your business email, entity type, and FY details — and our compliance team will send you a personalised monthly digest on the 1st of every month covering: (a) events due in the current month with specific due dates; (b) events due in the next 30 days; (c) any regulatory notifications or amendments affecting your sector; (d) preparatory checklist for the most critical event of the month. The reminder service is currently free for the first 12 months for businesses that engage Patron for any compliance service; for standalone subscribers, the service is ₹999 per year (₹83/month). You may also export the calendar as a PDF, ICS file for Google Calendar / Outlook integration, or printable physical wall calendar via Patron's print-on-demand partner."}},
{"@type":"Question","name":"What if my entity has unique compliances beyond what the tool covers?","acceptedAnswer":{"@type":"Answer","text":"The tool covers the standard compliance framework applicable to the four entity types (Pvt Ltd, OPC, LLP, Section 8) for a typical operational business with GST, employees, and audit obligations. It does NOT automatically include: (a) sector-specific compliances such as RBI returns for banking entities, IRDAI returns for insurers, FSSAI annual returns for food businesses (covered as an optional flag), Pollution Control Board returns for manufacturers, SEBI returns for listed entities, DGFT IEC return for importers/exporters; (b) transaction-triggered compliances such as Form FC-GPR for foreign direct investment receipt, Form FC-TRS for share transfer between resident and non-resident, Form FLA annual return for foreign liabilities, Form MGT-14 for filing of resolutions, Form INC-22 for change in registered office, Form DIR-12 for change in directors; (c) special compliances such as CSR Committee compliance under Section 135, related party transactions under Section 188, internal audit under Section 138, secretarial audit under Section 204. Patron's full compliance management service captures all of these — calendar + execution + filing under one engagement."}},
{"@type":"Question","name":"Why is Patron's compliance calendar better than free templates online?","acceptedAnswer":{"@type":"Answer","text":"Most freely available compliance calendars suffer from three common issues: (1) outdated due dates that do not reflect current notifications (for example, several free templates still show old MCA fees from before the 2018 amendment that introduced ₹100/day flat late fee, or outdated GSTR-9 due dates which were extended several times); (2) generic content with no personalisation for entity type, turnover, or sector — they list every conceivable compliance with caveats, leaving you to figure out what applies; (3) no reminder mechanism — a PDF or Excel calendar requires manual diary entries and ongoing maintenance. Patron's calendar generator produces a personalised calendar reflecting current FY 2026-27 schedules, filtered to your specific inputs, with built-in 30/15/7/1-day reminders ready for export to your calendar of choice. The calendar is updated by Patron's compliance team every quarter to reflect new notifications, due-date extensions, and amendments — ensuring you are never working from a stale schedule. Backed by 25,000+ businesses' compliance data."}},
{"@type":"Question","name":"How does the calendar handle Section 8 Companies?","acceptedAnswer":{"@type":"Answer","text":"Section 8 Companies (formed for charitable purposes under Section 8 of the Companies Act 2013) follow the standard Pvt Ltd compliance calendar with the following key additions: (a) ITR-7 instead of ITR-6 — due 31 October if audit applicable, 31 July otherwise; (b) Form 10B / 10BB audit report — due 31 October for entities with 12A registration; (c) Form 10BD — annual statement of donations received, due 31 May; (d) Form 10BE — certificate of donation to donors, due 31 May; (e) 12A registration renewal — every 5 years (10A application); (f) 80G registration renewal — every 5 years (10A application); (g) FCRA returns (if foreign donations received) — annual return Form FC-4 due 31 December. AGM, AOC-4, MGT-7, DIR-3 KYC, DPT-3 follow standard Pvt Ltd schedule. Some compliances such as DPT-3 may be exempt depending on activity. Patron's Section 8 specialist team handles 200+ NGOs/trusts and the tool's Section 8 calendar reflects this specialised workflow."}},
{"@type":"Question","name":"Can I share or print this calendar?","acceptedAnswer":{"@type":"Answer","text":"Yes. After generating your calendar, three export options are available: (1) Print to PDF — use the Print button at the bottom of the result panel; this triggers a print-optimised view with all CTAs and navigation removed, showing only the calendar table for clean PDF export via your browser's Save as PDF function. (2) Share by email — copy the calendar URL with your inputs encoded (the URL updates dynamically as you enter inputs) and share with your team or CA. (3) Subscribe to monthly reminders — opt into the monthly email service which delivers a fresh personalised calendar on the 1st of every month. For more advanced integration (Google Calendar ICS export, Outlook sync, Slack notifications, custom team workflows), Patron offers a paid Compliance Calendar Pro subscription at ₹2,500 per year per entity that includes API access, ICS export, and team collaboration features."}}
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
.toggle-btn{flex:1 1 auto;min-width:80px;padding:10px 12px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent;min-height:44px;text-align:center}
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
.summary-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:10px;margin-bottom:20px}
@media (max-width:680px){.summary-grid{grid-template-columns:repeat(2,1fr)}}
.summary-card{background:var(--card);border:1px solid var(--border);border-radius:var(--radius);padding:14px 16px;text-align:center}
.summary-card.highlight{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);border:none}
.summary-card.highlight .sc-label{color:rgba(255,255,255,0.85)}
.summary-card.highlight .sc-value{color:#fff}
.summary-card.highlight .sc-sub{color:rgba(255,255,255,0.75)}
.summary-card.warn{background:#FEF3C7;border-color:#FCD34D}
.summary-card.warn .sc-label{color:#78350F}
.summary-card.warn .sc-value{color:#78350F}
.summary-card.warn .sc-sub{color:#92400E}
.summary-card.danger{background:#FEE2E2;border-color:#FCA5A5}
.summary-card.danger .sc-label{color:#7F1D1D}
.summary-card.danger .sc-value{color:#7F1D1D}
.summary-card.danger .sc-sub{color:#991B1B}
.summary-card .sc-label{font-family:var(--font-mono);font-size:10px;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.8px;margin-bottom:6px}
.summary-card .sc-value{font-family:var(--font-mono);font-size:24px;font-weight:700;color:var(--primary-dark);line-height:1.1}
.summary-card .sc-sub{font-size:11.5px;color:var(--text-muted);margin-top:4px}
.view-tabs{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;margin-bottom:16px;flex-wrap:wrap}
.view-tab{flex:1 1 100px;padding:10px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent;min-height:44px;text-align:center}
.view-tab.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.view-tab:focus-visible{outline:2px solid var(--primary);outline-offset:2px}
.event-group{margin-bottom:20px}
.event-group-head{font-family:var(--font-mono);font-size:11px;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1.2px;padding:10px 0;border-bottom:2px solid var(--border);margin-bottom:10px;display:flex;justify-content:space-between;align-items:center}
.event-group-head .event-count{background:var(--primary);color:#fff;padding:2px 10px;border-radius:12px;font-size:10px}
.event-card{background:var(--card);border:1px solid var(--border);border-left:4px solid var(--text-muted);border-radius:8px;padding:12px 16px;margin-bottom:8px;transition:border-color 0.2s,box-shadow 0.2s}
.event-card:hover{box-shadow:var(--shadow-sm)}
.event-card.urgent{border-left-color:var(--danger);background:#FEF7F7}
.event-card.warn{border-left-color:var(--accent);background:#FFFBF5}
.event-card.upcoming{border-left-color:var(--info);background:#F0F9FF}
.event-card.future{border-left-color:var(--success)}
.event-row{display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap}
.event-info{flex:1 1 200px;min-width:0}
.event-title{font-size:14.5px;font-weight:600;color:var(--primary-dark);line-height:1.4;margin-bottom:4px}
.event-meta{font-size:12px;color:var(--text-muted);line-height:1.5}
.event-meta strong{color:var(--text-secondary);font-weight:600}
.event-date{font-family:var(--font-mono);font-size:13px;font-weight:700;color:var(--primary);text-align:right;flex-shrink:0;line-height:1.4}
.event-date .days{font-size:11px;color:var(--text-muted);display:block;font-weight:500;margin-top:2px}
.event-date.urgent{color:var(--danger)}
.event-date.urgent .days{color:#991B1B}
.event-pill{display:inline-block;padding:1px 7px;border-radius:8px;font-size:10px;font-family:var(--font-mono);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;margin-right:4px}
.event-pill.mca{background:#DBEAFE;color:#1E40AF}
.event-pill.cbdt{background:#FCE7F3;color:#9F1239}
.event-pill.cbic{background:#FEF3C7;color:#92400E}
.event-pill.epfo{background:#D1FAE5;color:#065F46}
.event-pill.esic{background:#E0E7FF;color:#3730A3}
.event-pill.state{background:#FED7AA;color:#7C2D12}
.event-pill.tds{background:#F3E8FF;color:#6B21A8}
.event-pill.rbi{background:#CCFBF1;color:#0F766E}
.event-pill.sebi{background:#FFE4E6;color:#9F1239}
.event-pill.fssai{background:#ECFCCB;color:#3F6212}
.event-reminders{font-size:11px;color:var(--text-muted);margin-top:6px;padding-top:6px;border-top:1px dashed var(--border);font-family:var(--font-mono)}
.event-reminders strong{color:var(--text-secondary);font-weight:700}
.email-optin{background:linear-gradient(135deg,var(--accent) 0%,#e55c1c 100%);color:#fff;border-radius:var(--radius);padding:22px 24px;margin-top:20px}
.email-optin h3{color:#fff;font-size:18px;margin-bottom:6px;font-weight:700}
.email-optin p{font-size:13.5px;color:rgba(255,255,255,0.95);margin-bottom:14px;line-height:1.55}
.email-optin .ei-row{display:flex;gap:8px;flex-wrap:wrap}
.email-optin input{flex:1 1 200px;min-width:0;padding:11px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:14px;color:var(--text);background:#fff;outline:2px solid transparent;min-height:44px}
.email-optin input:focus-visible{outline-color:#fff}
.email-optin button{padding:11px 18px;background:#fff;color:var(--accent);border:none;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:700;cursor:pointer;min-height:44px;white-space:nowrap}
.email-optin button:hover{background:rgba(255,255,255,0.92)}
.email-optin button:focus-visible{outline:2px solid #fff;outline-offset:2px}
.email-optin small{display:block;margin-top:10px;font-size:11.5px;color:rgba(255,255,255,0.85);font-style:italic}
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
.regulators-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px;margin:18px 0}
.reg-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);padding:14px 16px;border-left:4px solid var(--primary-light)}
.reg-card h4{font-size:14px;font-weight:700;color:var(--primary-dark);margin-bottom:4px;line-height:1.3}
.reg-card p{font-size:12.5px;color:var(--text-muted);margin-bottom:0;line-height:1.5}
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
.compare-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin:18px 0}
@media (max-width:560px){.compare-grid{grid-template-columns:1fr}}
.compare-card{background:var(--surface);border:2px solid var(--border);border-radius:var(--radius);padding:20px}
.compare-card.bad{border-color:#FCA5A5}
.compare-card.good{border-color:#86EFAC;position:relative}
.compare-card.good::before{content:"RECOMMENDED";position:absolute;top:-10px;right:14px;background:var(--success);color:#fff;padding:2px 10px;border-radius:10px;font-size:10px;font-weight:700;letter-spacing:0.6px}
.compare-card h4{font-size:15px;font-weight:700;margin-bottom:10px;color:var(--primary-dark)}
.compare-card.bad h4{color:#7F1D1D}
.compare-card.good h4{color:#065F46}
.compare-card ul{margin:0 0 0 20px}
.compare-card li{font-size:13px;line-height:1.6;margin-bottom:6px;color:var(--text-secondary)}
.compare-card li::marker{color:var(--text-muted)}
.compare-card.bad li::marker{color:#7F1D1D}
.compare-card.good li::marker{color:#065F46}
.faq-item{background:var(--surface);border-radius:var(--radius);margin-bottom:10px;border:1px solid var(--border);overflow:hidden;transition:box-shadow 0.2s}
.faq-item:hover{box-shadow:var(--shadow-sm)}
.faq-question{display:flex;justify-content:space-between;align-items:center;width:100%;padding:16px 20px;border:none;background:none;font-family:var(--font-body);font-size:15px;font-weight:600;color:var(--text);cursor:pointer;text-align:left;line-height:1.4;gap:12px;-webkit-tap-highlight-color:transparent;min-height:52px}
.faq-question *{pointer-events:none}
.faq-question:focus-visible{outline:2px solid var(--primary);outline-offset:-2px}
.faq-icon{flex-shrink:0;width:24px;height:24px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;transition:transform 0.3s}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.4s ease}
.faq-item.open .faq-answer{max-height:1500px}
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
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:18px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-calculate,.email-optin,.office-strip,.footer,.breadcrumb,.view-tabs{display:none !important}body{background:#fff;color:#000;font-size:10pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:14px;margin-bottom:14px}.summary-card,.event-card{-webkit-print-color-adjust:exact;print-color-adjust:exact;page-break-inside:avoid}.hero h1{font-size:16pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}.event-group{break-inside:auto}}

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
<a href="#calculator">Generator</a><a href="#how-to-use">How to Use</a><a href="#regulators">12 Regulators</a><a href="#penalties">Penalties</a><a href="#compare">Vs Templates</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>Compliance Calendar Generator</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>Compliance Calendar Generator — <span>Pvt Ltd, LLP, OPC & Section 8</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">100+ filings across 12 regulators — <strong>missed one means ₹5,000-₹50,000 in penalties.</strong> Patron's compliance team manages 25,000+ businesses' calendars. Engage now or download the calendar free.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20a%20personalised%20compliance%20calendar%20for%20my%20business." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Compliance%20Calendar%20Service&body=Hi%2C%20I%20would%20like%20to%20engage%20Patron%20for%20compliance%20calendar%20management.%0A%0AEntity%20type%3A%20%0AFY%3A%20%0ATurnover%3A%20%0AEmployees%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p><strong>A typical Pvt Ltd Company with GST + employees has 110-130 compliance events per year across 12 regulators.</strong> Missing one event costs ₹5,000-₹50,000 in penalties (and triggers cascading consequences like director disqualification and strike-off). This tool generates your personalised year-ahead calendar in 10 seconds — entity type, FY end, AGM date, GST + audit toggles → 100+ filtered events with 30/15/7/1-day reminders, exportable as PDF. Subscribe to free monthly email reminders from Patron's compliance team (25,000+ businesses use Patron's calendar). All due dates current as on FY 2026-27.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Generate Your Personalised Calendar</h2>
<p class="sub">Inputs below → personalised event list filtered to your entity, GST, audit and employee status. Year-ahead view with 30/15/7/1-day reminders.</p>
<noscript><div class="noscript-box">This tool requires JavaScript. Please enable JavaScript.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="section-title"><span>Entity Type</span><small>Pick one</small></div>
<div class="toggle-group" role="group" aria-label="Entity type">
<button type="button" class="toggle-btn active" data-entity="pvtltd" onclick="setEntity(this)">Pvt Ltd</button>
<button type="button" class="toggle-btn" data-entity="opc" onclick="setEntity(this)">OPC</button>
<button type="button" class="toggle-btn" data-entity="llp" onclick="setEntity(this)">LLP</button>
<button type="button" class="toggle-btn" data-entity="section8" onclick="setEntity(this)">Section 8</button>
</div>

<div class="form-row" style="margin-top:18px;">
<div class="form-group">
<label for="fyEnd">FY End Date <span class="hint">Typically 31 March</span></label>
<input type="date" id="fyEnd" value="2026-03-31" aria-label="Financial year end date">
</div>
<div class="form-group">
<label for="agmDate">AGM Date <span class="hint">Within 6 months of FY-end (default 30 Sept)</span></label>
<input type="date" id="agmDate" value="2026-09-30" aria-label="AGM date">
</div>
</div>

<div class="section-title"><span>GST Status</span><small>Determines GSTR-1, GSTR-3B, GSTR-9 dates</small></div>
<div class="toggle-group" role="group" aria-label="GST registered">
<button type="button" class="toggle-btn active" data-gst="yes" onclick="setGst(this)">GST Registered</button>
<button type="button" class="toggle-btn" data-gst="no" onclick="setGst(this)">Not Registered</button>
</div>

<div class="form-group" id="gstFreqRow" style="margin-top:14px;">
<label for="gstFreq">GST Filing Frequency</label>
<select id="gstFreq" aria-label="GST filing frequency">
<option value="monthly" selected>Monthly (turnover &gt; ₹5 Cr or opted in)</option>
<option value="qrmp">QRMP — Quarterly Returns Monthly Payment</option>
</select>
</div>

<div class="section-title"><span>Other Triggers</span></div>
<div class="checkbox-row">
<input type="checkbox" id="audit" checked aria-label="Audit applicable">
<label for="audit">Statutory or Tax Audit applicable <small>Triggers Form 3CD, statutory audit completion, and ITR extension to 31 October</small></label>
</div>
<div class="checkbox-row">
<input type="checkbox" id="employees" checked aria-label="Has employees">
<label for="employees">Has employees subject to PF / ESI <small>Triggers monthly PF + ESI payments and returns (skip if ≤ 19 employees with no PF coverage)</small></label>
</div>
<div class="checkbox-row">
<input type="checkbox" id="msme" aria-label="MSME registered">
<label for="msme">MSME / Udyam registered <small>Adds MSME Form 1 (half-yearly delayed payment reporting)</small></label>
</div>
<div class="checkbox-row">
<input type="checkbox" id="foreign" aria-label="Foreign related party">
<label for="foreign">Foreign related party transactions <small>Adds Form 3CEB (transfer pricing audit) + FLA return</small></label>
</div>
<div class="checkbox-row">
<input type="checkbox" id="largeGst" aria-label="Turnover above ₹5 crore">
<label for="largeGst">Turnover above ₹5 crore <small>Adds GSTR-9C (reconciliation statement)</small></label>
</div>

<button class="btn-calculate" onclick="generate()" type="button">Generate Compliance Calendar</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="summary-grid">
<div class="summary-card highlight"><div class="sc-label">Total Events</div><div class="sc-value" id="resTotal">0</div><div class="sc-sub" id="resTotalSub">year-ahead</div></div>
<div class="summary-card warn"><div class="sc-label">Next 30 Days</div><div class="sc-value" id="resNext30">0</div><div class="sc-sub">urgent attention</div></div>
<div class="summary-card danger"><div class="sc-label">Critical (≤7d)</div><div class="sc-value" id="resCritical">0</div><div class="sc-sub">action now</div></div>
<div class="summary-card"><div class="sc-label">Regulators</div><div class="sc-value" id="resRegulators">0</div><div class="sc-sub">covered</div></div>
</div>

<div class="view-tabs" role="tablist" aria-label="Calendar views">
<button class="view-tab active" data-view="timeline" onclick="setView(this)" role="tab">Timeline</button>
<button class="view-tab" data-view="authority" onclick="setView(this)" role="tab">By Regulator</button>
<button class="view-tab" data-view="month" onclick="setView(this)" role="tab">By Month</button>
</div>

<div id="eventList"></div>

<div class="email-optin">
<h3>📧 Get Monthly Email Reminders — Free</h3>
<p>Patron's compliance team sends a personalised monthly digest on the 1st of every month: events due this month + next 30 days + regulatory updates affecting your sector. Free for 12 months when you engage any Patron service.</p>
<div class="ei-row">
<input type="email" id="optinEmail" placeholder="your.email@company.com" aria-label="Your email">
<button type="button" onclick="subscribeReminders()">Subscribe</button>
</div>
<small>Opens your email client to send a subscription request — no automatic data submission.</small>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head" id="postCtaHead">Need help executing this calendar?</div>
<div class="post-result-cta-sub">Patron's compliance team manages 25,000+ businesses' calendars end-to-end — calendar generation + execution + filing + reminders, all under one engagement. Fixed annual fee from ₹15,000. Free 15-minute review call.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20generated%20my%20compliance%20calendar%20and%20want%20to%20engage%20Patron%20for%20execution." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Compliance%20Calendar%20Execution&body=Hi%2C%20I%20generated%20my%20compliance%20calendar%20on%20the%20Patron%20tool%20and%20would%20like%20to%20engage%20for%20execution.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<p style="font-size:11.5px;color:var(--text-muted);line-height:1.55;margin-top:14px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. The calendar is a planning aid; please cross-verify with a qualified Chartered Accountant before relying on it for actual filings.</p>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Print Calendar</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the Generator</h2>
<ol>
<li><strong>Pick entity</strong> — Pvt Ltd / OPC / LLP / Section 8. Each entity has a different mix of filings; the tool applies the right schedule.</li>
<li><strong>Confirm FY end date</strong> — defaults to 31 March 2026 (covering FY 2025-26 calendar). Update if your FY ends differently (e.g., calendar-year aligned subsidiaries of foreign parents).</li>
<li><strong>Confirm AGM date</strong> — defaults to 30 September 2026 (six months from FY end, the statutory ceiling under Section 96). Update if your AGM is earlier. For OPC and LLP, AGM does not apply but the date drives downstream filings.</li>
<li><strong>Set GST status</strong> — toggle "Registered" and pick monthly or QRMP. The tool generates 24 monthly events for monthly filers or 12 events for QRMP.</li>
<li><strong>Toggle audit applicable</strong> — extends ITR due date to 31 October and adds Form 3CD tax audit + statutory audit completion event.</li>
<li><strong>Toggle employees</strong> — adds 12 PF + 12 ESI monthly events. Skip if you have ≤19 employees and no voluntary PF coverage.</li>
<li><strong>Optional flags</strong> — MSME (half-yearly MSME-1), Foreign related party (Form 3CEB + FLA), Turnover &gt; ₹5 Cr (GSTR-9C).</li>
<li><strong>Generate</strong> — calendar appears below in 3 views: Timeline (chronological), By Regulator (grouped by MCA/CBDT/CBIC/etc.), By Month.</li>
<li><strong>Print or subscribe</strong> — use Print Calendar for PDF; or subscribe to free monthly email reminders.</li>
</ol>
<div class="callout"><p><strong>Default scenario:</strong> Pvt Ltd, FY ending 31 March 2026, AGM 30 September 2026, GST registered monthly, audit applicable, has employees → generates approximately 95-105 events across 7-8 regulators.</p></div>
</section>

<section class="content-section" id="regulators">
<h2>The 12 Regulators Patron Tracks</h2>
<p>Patron's compliance framework covers 12 distinct regulators that issue periodic filing obligations on Indian businesses. Not every entity faces all 12 — the tool filters based on your inputs. Below is the full universe:</p>
<div class="regulators-grid">
<div class="reg-card"><h4>1. Ministry of Corporate Affairs (MCA)</h4><p>AOC-4, MGT-7/7A, DIR-3 KYC, DPT-3, ADT-1, MSME Form 1, LLP Form 8 + 11. Companies Act 2013, LLP Act 2008.</p></div>
<div class="reg-card"><h4>2. Central Board of Direct Taxes (CBDT)</h4><p>Advance tax, ITR-5/6/7, Form 3CD, Form 3CEB. Income Tax Act 2025.</p></div>
<div class="reg-card"><h4>3. Central Board of Indirect Taxes & Customs (CBIC)</h4><p>GSTR-1, GSTR-3B, GSTR-9, GSTR-9C, CMP-08. CGST Act 2017.</p></div>
<div class="reg-card"><h4>4. Employees Provident Fund Org. (EPFO)</h4><p>PF monthly payment + ECR. EPF & MP Act 1952.</p></div>
<div class="reg-card"><h4>5. Employees State Insurance Corp. (ESIC)</h4><p>ESI monthly payment + half-yearly returns. ESI Act 1948.</p></div>
<div class="reg-card"><h4>6. State Tax Department</h4><p>Professional Tax monthly + annual. State-specific PT Acts.</p></div>
<div class="reg-card"><h4>7. State Labour Department</h4><p>Shops & Establishment, Minimum Wages, Contract Labour. Various Acts.</p></div>
<div class="reg-card"><h4>8. Ministry of MSME</h4><p>Udyam registration, MSME Form 1 (delayed payments).</p></div>
<div class="reg-card"><h4>9. Securities & Exchange Board of India (SEBI)</h4><p>For listed entities — Quarterly Corporate Governance, Annual Report, RPT, ESOPs. SEBI LODR Regulations 2015.</p></div>
<div class="reg-card"><h4>10. Reserve Bank of India (RBI)</h4><p>FEMA filings: FC-GPR, FC-TRS, FLA, ECB returns. FEMA 1999.</p></div>
<div class="reg-card"><h4>11. Food Safety & Standards Authority (FSSAI)</h4><p>Annual return Form D1, license renewal. Food Safety Act 2006.</p></div>
<div class="reg-card"><h4>12. Pollution Control Boards (CPCB / SPCB)</h4><p>Consent renewal, hazardous waste returns, EC compliance. Environment Acts.</p></div>
</div>
<div class="callout"><p><strong>Sector overlays:</strong> Additional regulators apply for specific sectors — IRDAI (insurance), AERA (aviation), TRAI (telecom), CERC (electricity), DGFT (foreign trade), etc. Patron's specialised teams handle these on engagement.</p></div>
</section>

<section class="content-section" id="penalties">
<h2>Penalties for Missed Compliances — A Quick Reference</h2>
<p>The financial cost of missing a single compliance event ranges from a few hundred rupees to several lakhs depending on the form, the days of delay, and consequential exposures. Here is the headline penalty schedule across the 6 most common compliances:</p>
<table class="fee-table">
<thead><tr><th>Filing</th><th>Authority</th><th>Penalty for Missing</th></tr></thead>
<tbody>
<tr><td><strong>AOC-4 / MGT-7</strong></td><td>MCA</td><td><code>₹100/day</code>, no cap (Sec 403, Companies Act 2013) + strike-off after 2 years</td></tr>
<tr><td><strong>DIR-3 KYC</strong></td><td>MCA</td><td>Fixed <code>₹5,000</code> + DIN deactivated (Rule 12A)</td></tr>
<tr><td><strong>ITR (Pvt Ltd / LLP)</strong></td><td>CBDT</td><td><code>₹5,000</code> u/s 234F + interest at 1% pm u/s 234A + possible Section 271F penalty</td></tr>
<tr><td><strong>GSTR-3B</strong></td><td>CBIC</td><td><code>₹50/day</code> capped at ₹5,000 + 18% pa interest on tax due (₹20/day for nil return)</td></tr>
<tr><td><strong>GSTR-1</strong></td><td>CBIC</td><td><code>₹200/day</code> capped at ₹5,000 + ITC restriction for buyers</td></tr>
<tr><td><strong>GSTR-9 / 9C</strong></td><td>CBIC</td><td><code>₹200/day</code> capped at 0.25% of turnover</td></tr>
<tr><td><strong>TDS Payment</strong></td><td>CBDT</td><td>Interest <code>1.5% per month</code> u/s 201(1A) + ₹200/day late fee u/s 234E</td></tr>
<tr><td><strong>TDS Return (24Q/26Q)</strong></td><td>CBDT</td><td><code>₹200/day</code> capped at TDS amount</td></tr>
<tr><td><strong>PF Payment</strong></td><td>EPFO</td><td>Interest 12% pa + damages 5-25% pa (Section 14B)</td></tr>
<tr><td><strong>ESI Payment</strong></td><td>ESIC</td><td>Interest 12% pa + damages up to 25% pa</td></tr>
<tr><td><strong>Advance Tax Shortfall</strong></td><td>CBDT</td><td>Interest u/s 234B (1% pm from 1 April) + Section 234C (deferment interest)</td></tr>
<tr><td><strong>LLP Form 8 / 11</strong></td><td>MCA</td><td><code>₹100/day</code> (normal) or <code>₹50/day</code> (Small LLP) — no cap</td></tr>
</tbody>
</table>
<p><strong>Aggregate exposure:</strong> A non-compliant Pvt Ltd company over a single year typically accumulates ₹1.5L-₹5L+ in penalties, plus consequential exposure — <a href="/director-disqualification-removal">director disqualification</a> (3 years non-filing triggers Section 164(2)(a)), <a href="/restore-struck-off-company-mca">company strike-off</a> (2 years non-filing triggers Section 248), and prosecution under various sections. The annual cost of timely compliance via Patron starts at ₹15,000 — a fraction of the exposure.</p>
<p>Use Patron's <a href="/tools/annual-compliance-cost-estimator">Annual Compliance Cost Estimator</a> to size up your annual fee, and the <a href="/tools/mca-late-fee-calculator">MCA Late Fee Calculator</a> to compute exact accumulated dues if you already have a backlog.</p>
</section>

<div class="body-cta">
<h3>Patron Manages Calendars for 25,000+ Businesses</h3>
<p>From the calendar above to actual execution — Patron's compliance team handles filing, reminders, document management, and escalations end-to-end. Fixed annual fee from ₹15,000. Free 15-minute call to review your current status.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20end-to-end%20compliance%20calendar%20management." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Compliance%20Calendar%20Management&body=Hi%2C%20we%20need%20end-to-end%20compliance%20calendar%20management.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="compare">
<h2>Patron's Calendar vs Free Templates</h2>
<p>Most freely available compliance calendars online are out-of-date Excel spreadsheets or static PDF lists with three structural problems:</p>
<div class="compare-grid">
<div class="compare-card bad">
<h4>Free Templates / Spreadsheets</h4>
<ul>
<li>Often <strong>outdated</strong> — show old MCA fees or pre-2022 LLP late fees</li>
<li>Generic — every conceivable filing listed with caveats; not personalised</li>
<li>No <strong>reminder mechanism</strong> — you set diary entries manually</li>
<li>Static — no updates for mid-year notifications or extensions</li>
<li>No filtering by entity / GST / audit / employees</li>
<li>No CA review for entity-specific exemptions</li>
</ul>
</div>
<div class="compare-card good">
<h4>Patron Compliance Calendar</h4>
<ul>
<li><strong>Current FY 2026-27</strong> schedules verified by qualified CA team</li>
<li>Personalised to your entity type, GST, audit, employees</li>
<li><strong>30/15/7/1-day reminders</strong> built-in; subscribe to monthly email digest</li>
<li>Updated <strong>every quarter</strong> with new notifications</li>
<li>Output: PDF + ICS export + Google Calendar integration (Pro)</li>
<li>Backed by 25,000+ businesses' real compliance data</li>
</ul>
</div>
</div>
<div class="callout warn"><p><strong>Self-evaluation:</strong> If your business has more than 5 employees, GST registration, or annual turnover above ₹50 lakh, the cost of a missed compliance (₹5,000-₹50,000) far exceeds the cost of professional management (₹15,000-₹40,000 per year all-in). Engage Patron — or at minimum, subscribe to the free monthly reminders.</p></div>

<h3>Special Considerations for Small Companies and Startups</h3>
<p>If your entity is a Small Company under <a href="/small-company-compliance-section-2-85-definition">Section 2(85) of the Companies Act</a> (paid-up capital ≤ ₹4 crore AND turnover ≤ ₹40 crore), several compliance reliefs apply: simplified MGT-7A instead of MGT-7, board meetings every 6 months instead of quarterly, no cash flow statement requirement, and reduced filing fees. Our tool applies these automatically when you select OPC. For <a href="/small-company-compliance-startups-pre-revenue">pre-revenue startups</a>, additional reliefs include audit exemption (if turnover ≤ ₹1 crore AND borrowings ≤ ₹10 crore), DPIIT recognition benefits (3-year tax holiday under Section 80-IAC), and exemption from inspector inspection during first 3 years of incorporation.</p>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is a compliance calendar and why do I need one?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A compliance calendar is a personalised schedule of every statutory filing, payment, and procedural event that your business is required to complete in a financial year. For a typical Indian Pvt Ltd Company with GST and employees, this covers approximately 100-130 events across 12 regulators including the Ministry of Corporate Affairs (AOC-4, MGT-7, DIR-3 KYC, DPT-3, ADT-1, MSME Form 1), Central Board of Direct Taxes (advance tax instalments, ITR-6, Form 3CD tax audit), Central Board of Indirect Taxes and Customs (GSTR-1, GSTR-3B, GSTR-9, GSTR-9C), Employees Provident Fund Organisation (PF monthly), Employees State Insurance Corporation (ESI monthly), State Tax (Professional Tax), and TDS payments and returns. Missing a single filing triggers cascading penalties: ROC late fees accrue at ₹100/day with no cap; GST late fees plus interest at 18% per annum; TDS interest at 1.5% per month plus 234E late fee; PF interest plus damages up to 25% per annum. A calendar with proactive 30/15/7/1-day reminders prevents these penalties entirely and is the single highest-ROI compliance investment a business can make.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How many compliance events does a typical Pvt Ltd Company have?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A typical operational Pvt Ltd Company with GST registration, employees subject to PF and ESI, and audit applicability has approximately 110-130 distinct compliance events in a financial year. The breakdown: MCA filings — 9 to 14 events (AOC-4, MGT-7, DIR-3 KYC for each director, DPT-3, ADT-1, MSME Form 1 half-yearly, board meetings quarterly, AGM); Income Tax — 7 to 10 events (4 advance tax instalments, ITR-6, Form 3CD, Form 3CEB if transfer pricing); GST — 26 events for monthly filer (24 monthly returns plus GSTR-9 annual and GSTR-9C reconciliation if turnover above ₹5 Cr); TDS — 16 events (12 monthly payments plus 4 quarterly returns plus certificates); PF/ESI — 24 events (12 each); Professional Tax — 12 events (monthly). Plus state-specific labour law filings (Shops & Establishment renewal, contract labour reporting), sectoral filings (FSSAI for food businesses, RBI for FDI), and entity-specific filings (FLA return for foreign investment). The exact count varies by entity type, turnover, sector, and state — our tool generates the personalised count for your specific scenario.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What are the 12 regulators covered in the calendar?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The 12 regulators monitored in Patron's compliance calendar framework are: (1) Ministry of Corporate Affairs (MCA) — annual filings under Companies Act 2013 and LLP Act 2008; (2) Central Board of Direct Taxes (CBDT) — income tax under Income Tax Act 2025; (3) Central Board of Indirect Taxes and Customs (CBIC) — GST under CGST Act 2017; (4) Employees Provident Fund Organisation (EPFO) — PF under EPF & MP Act 1952; (5) Employees State Insurance Corporation (ESIC) — medical insurance under ESI Act 1948; (6) State Tax Department — Professional Tax under state-specific PT Acts; (7) State Labour Department — Shops & Establishment, Minimum Wages, Contract Labour Acts; (8) Ministry of MSME — Udyam registration, MSME Form 1 delayed payment reporting; (9) Securities and Exchange Board of India (SEBI) — for listed entities and certain unlisted public companies; (10) Reserve Bank of India (RBI) — FEMA filings (Form FC-GPR, FLA return, Form FC-TRS); (11) Food Safety and Standards Authority of India (FSSAI) — for food businesses; (12) Pollution Control Boards (state and central) — for manufacturing units. Patron's library extends to sector-specific regulators (DGFT, IRDAI, AERA, etc.) on engagement. Not every entity faces all 12; the tool filters based on your inputs.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is my AGM date calculated and why does it matter?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Under Section 96 of the Companies Act 2013, the Annual General Meeting (AGM) must be held within six months from the close of the financial year — for FY 2025-26 ending 31 March 2026, the AGM must be held on or before 30 September 2026. For the first AGM after incorporation, the period is extended to nine months from FY-end. One Person Companies are exempt from AGM requirement; their MGT-7A is filed within 60 days of the date by which AGM would otherwise have been held (30 September). The AGM date drives multiple downstream compliances: AOC-4 (Financial Statements) is due 30 days from AGM; MGT-7 (Annual Return) is due 60 days from AGM; ADT-1 (Auditor Appointment) is due 15 days from AGM if a reappointment resolution is passed; and board meeting requirements (4 per year, with not more than 120 days between consecutive meetings) are partly governed by AGM timing. If you leave the AGM date field blank, the tool assumes 30 September 2026 as the default and calculates downstream dates accordingly.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What are the 30/15/7/1-day reminders and how are they useful?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For every compliance event, the calendar generates four reminder dates: 30 days before, 15 days before, 7 days before, and 1 day before the due date. The rationale for this cadence comes from operational compliance practice: the 30-day reminder is for resource planning — "Are the documents ready? Is the data being compiled? Does the CA team have bandwidth?" The 15-day reminder is for execution — "Documents being prepared and reviewed." The 7-day reminder is for final checks — "Submitted for DSC, payment ready." The 1-day reminder is the final fail-safe — "Will it be filed today?" Most compliance failures happen because internal stakeholders confuse "deadline" with "start preparation" — by then it is already too late for documents, approvals, and DSC. The 30-day buffer accommodates the realistic preparation time for non-trivial filings (audit, AGM, board meetings) and prevents last-minute rushed compliance which often results in errors that compound penalties.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How does the tool handle GST monthly vs QRMP filers?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The GST filing schedule depends on aggregate annual turnover and the filer's election. Taxpayers with turnover up to ₹5 crore can opt into the Quarterly Return Monthly Payment (QRMP) scheme: GSTR-1 is filed quarterly (by 13th of month after quarter-end) and GSTR-3B is filed quarterly (by 22nd/24th of month after quarter-end depending on state). Monthly filers (turnover above ₹5 crore or those who opt for monthly) file GSTR-1 by 11th of every next month and GSTR-3B by 20th of every next month. Tax payments under QRMP are made monthly via PMT-06 by 25th of next month. The annual return GSTR-9 (due 31 December) and the reconciliation statement GSTR-9C (mandatory for turnover above ₹5 crore, due 31 December) apply to both filer types. Our calendar tool generates 24 monthly events for monthly filers, 4 quarterly events + 8 monthly PMT-06 events for QRMP filers, plus the annual returns. The output explicitly labels each event with its return type and due date.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What happens if I miss a compliance event?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Penalties vary by regulator: (1) MCA — AOC-4 and MGT-7 attract ₹100/day late fee with no cap under Section 403; LLP Form 8 and 11 attract ₹100/day for normal LLPs and ₹50/day for Small LLPs; DIR-3 KYC is a flat ₹5,000 plus DIN deactivation; (2) Income Tax — late filing of ITR attracts ₹5,000 fee under Section 234F (₹1,000 if income below ₹5 lakh) plus interest at 1% per month under Section 234A; advance tax shortfall attracts interest under Section 234B and 234C; (3) GST — GSTR-3B late fee is ₹50/day (₹20 for nil return) capped at ₹5,000 plus interest at 18% per annum on tax due; GSTR-1 late fee is ₹200/day capped at ₹5,000; GSTR-9 late fee is ₹200/day capped at 0.25% of turnover; (4) TDS — interest under Section 201(1A) at 1.5% per month for late deposit, plus Section 234E late fee at ₹200/day capped at TDS amount; (5) PF — interest at 12% per annum plus damages 5-25% per annum; (6) ESI — interest at 12% per annum plus damages up to 25%. Annual penalty exposure for a non-compliant Pvt Ltd typically runs ₹1.5L-₹5L+ before consequential issues like director disqualification and strike-off.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is the compliance calendar generated by this tool legally binding?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. The calendar is a planning aid, not a legal compliance certificate. It is generated based on the standard schedule applicable to the entity type and inputs you provide; it does not account for entity-specific exemptions, special circumstances (such as conversion, merger, demerger), interim notifications by regulators, sectoral overlays (e.g., listed entity compliance under SEBI LODR), or state-specific variations beyond the broad framework. Always cross-verify with a qualified Chartered Accountant or Company Secretary before relying on the calendar for actual filings, especially for: complex transactions (capital raise, ESOP grants, mergers), sectoral entities (banking, insurance, NBFCs, real estate), foreign-related transactions (FDI, ODI, ECB), and any first-time filings. Patron offers a CA review service that validates the auto-generated calendar against your specific entity, sector, and transaction history — fixed-fee ₹5,000-₹15,000 depending on complexity, completed in 5 working days.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How do I get monthly email reminders for these compliances?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Patron offers a complimentary monthly email reminder service for the auto-generated calendar. Click the "Subscribe to Monthly Reminders" button after generating your calendar, fill in your business email, entity type, and FY details — and our compliance team will send you a personalised monthly digest on the 1st of every month covering: (a) events due in the current month with specific due dates; (b) events due in the next 30 days; (c) any regulatory notifications or amendments affecting your sector; (d) preparatory checklist for the most critical event of the month. The reminder service is currently free for the first 12 months for businesses that engage Patron for any compliance service; for standalone subscribers, the service is ₹999 per year (₹83/month). You may also export the calendar as a PDF, ICS file for Google Calendar / Outlook integration, or printable physical wall calendar via Patron's print-on-demand partner.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What if my entity has unique compliances beyond what the tool covers?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The tool covers the standard compliance framework applicable to the four entity types (Pvt Ltd, OPC, LLP, Section 8) for a typical operational business with GST, employees, and audit obligations. It does NOT automatically include: (a) sector-specific compliances such as RBI returns for banking entities, IRDAI returns for insurers, FSSAI annual returns for food businesses (covered as an optional flag), Pollution Control Board returns for manufacturers, SEBI returns for listed entities, DGFT IEC return for importers/exporters; (b) transaction-triggered compliances such as Form FC-GPR for foreign direct investment receipt, Form FC-TRS for share transfer between resident and non-resident, Form FLA annual return for foreign liabilities, Form MGT-14 for filing of resolutions, Form INC-22 for change in registered office, Form DIR-12 for change in directors; (c) special compliances such as CSR Committee compliance under Section 135, related party transactions under Section 188, internal audit under Section 138, secretarial audit under Section 204. Patron's full compliance management service captures all of these — calendar + execution + filing under one engagement.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Why is Patron's compliance calendar better than free templates online?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Most freely available compliance calendars suffer from three common issues: (1) outdated due dates that do not reflect current notifications (for example, several free templates still show old MCA fees from before the 2018 amendment that introduced ₹100/day flat late fee, or outdated GSTR-9 due dates which were extended several times); (2) generic content with no personalisation for entity type, turnover, or sector — they list every conceivable compliance with caveats, leaving you to figure out what applies; (3) no reminder mechanism — a PDF or Excel calendar requires manual diary entries and ongoing maintenance. Patron's calendar generator produces a personalised calendar reflecting current FY 2026-27 schedules, filtered to your specific inputs, with built-in 30/15/7/1-day reminders ready for export to your calendar of choice. The calendar is updated by Patron's compliance team every quarter to reflect new notifications, due-date extensions, and amendments — ensuring you are never working from a stale schedule. Backed by 25,000+ businesses' compliance data.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How does the calendar handle Section 8 Companies?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 8 Companies (formed for charitable purposes under Section 8 of the Companies Act 2013) follow the standard Pvt Ltd compliance calendar with the following key additions: (a) ITR-7 instead of ITR-6 — due 31 October if audit applicable, 31 July otherwise; (b) Form 10B / 10BB audit report — due 31 October for entities with 12A registration; (c) Form 10BD — annual statement of donations received, due 31 May; (d) Form 10BE — certificate of donation to donors, due 31 May; (e) 12A registration renewal — every 5 years (10A application); (f) 80G registration renewal — every 5 years (10A application); (g) FCRA returns (if foreign donations received) — annual return Form FC-4 due 31 December. AGM, AOC-4, MGT-7, DIR-3 KYC, DPT-3 follow standard Pvt Ltd schedule. Some compliances such as DPT-3 may be exempt depending on activity. Patron's Section 8 specialist team handles 200+ NGOs/trusts and the tool's Section 8 calendar reflects this specialised workflow.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can I share or print this calendar?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. After generating your calendar, three export options are available: (1) Print to PDF — use the Print button at the bottom of the result panel; this triggers a print-optimised view with all CTAs and navigation removed, showing only the calendar table for clean PDF export via your browser's Save as PDF function. (2) Share by email — copy the calendar URL with your inputs encoded (the URL updates dynamically as you enter inputs) and share with your team or CA. (3) Subscribe to monthly reminders — opt into the monthly email service which delivers a fresh personalised calendar on the 1st of every month. For more advanced integration (Google Calendar ICS export, Outlook sync, Slack notifications, custom team workflows), Patron offers a paid Compliance Calendar Pro subscription at ₹2,500 per year per entity that includes API access, ICS export, and team collaboration features.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>Compliance Management</h3>
<p>End-to-end calendar + execution + filing for 25,000+ businesses. Fixed annual fees from ₹15,000.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20full-service%20compliance%20management." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Compliance%20Management%20Quote&body=Hi%2C%20we%20need%20full-service%20compliance%20management.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<div class="sidebar-card"><h3>Small Co. & Startup</h3>
<a href="/small-company-compliance-startups-pre-revenue" class="sidebar-link">Pre-revenue Startup Compliance <span class="arrow">→</span></a>
<a href="/small-company-compliance-section-2-85-definition" class="sidebar-link">Section 2(85) Small Co. Definition <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Services</h3>
<a href="/annual-compliance-private-limited" class="sidebar-link">Pvt Ltd Annual Compliance <span class="arrow">→</span></a>
<a href="/annual-compliance-llp" class="sidebar-link">LLP Annual Compliance <span class="arrow">→</span></a>
<a href="/annual-compliance-opc" class="sidebar-link">OPC Annual Compliance <span class="arrow">→</span></a>
<a href="/section-8-compliance" class="sidebar-link">Section 8 Compliance <span class="arrow">→</span></a>
<a href="/gst-return-filing" class="sidebar-link">GST Return Filing <span class="arrow">→</span></a>
<a href="/income-tax-return-filing" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
<a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Tools</h3>
<a href="/tools/annual-compliance-cost-estimator" class="sidebar-link">Annual Compliance Cost Estimator <span class="arrow">→</span></a>
<a href="/tools/mca-late-fee-calculator" class="sidebar-link">MCA Late Fee Calculator <span class="arrow">→</span></a>
<a href="/tools/notice-section-identifier" class="sidebar-link">Notice Section Identifier <span class="arrow">→</span></a>
<a href="/tools/notice-deadline-tracker" class="sidebar-link">Notice Deadline Tracker <span class="arrow">→</span></a>
</div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
function showError(msg){const b=document.getElementById('errorBanner');b.textContent=msg;b.classList.add('visible');setTimeout(()=>b.classList.remove('visible'),6000);}

let currentEntity = 'pvtltd';
let currentGst = 'yes';
let currentView = 'timeline';
let lastEvents = [];

function setEntity(b){
    const e = b.closest ? (b.closest('.toggle-btn') || b) : b;
    currentEntity = e.dataset.entity;
    e.parentElement.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));
    e.classList.add('active');
}

function setGst(b){
    const e = b.closest ? (b.closest('.toggle-btn') || b) : b;
    currentGst = e.dataset.gst;
    e.parentElement.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));
    e.classList.add('active');
    document.getElementById('gstFreqRow').style.display = (currentGst === 'yes') ? 'block' : 'none';
}

function setView(b){
    const e = b.closest ? (b.closest('.view-tab') || b) : b;
    currentView = e.dataset.view;
    e.parentElement.querySelectorAll('.view-tab').forEach(x => x.classList.remove('active'));
    e.classList.add('active');
    renderEvents(lastEvents);
}

// Date helpers
function parseDate(s){const p=s.split('-');return new Date(parseInt(p[0]),parseInt(p[1])-1,parseInt(p[2]));}
function addDays(d, n){const r=new Date(d.getTime());r.setDate(r.getDate()+n);return r;}
function addMonths(d, n){const r=new Date(d.getTime());r.setMonth(r.getMonth()+n);return r;}
function daysBetween(d1, d2){const a=new Date(d1.getFullYear(),d1.getMonth(),d1.getDate());const b=new Date(d2.getFullYear(),d2.getMonth(),d2.getDate());return Math.round((b-a)/(1000*60*60*24));}
function formatDate(d){const m=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];return d.getDate()+' '+m[d.getMonth()]+' '+d.getFullYear();}
function formatDateShort(d){const m=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];return d.getDate()+' '+m[d.getMonth()];}
function monthName(d){const m=['January','February','March','April','May','June','July','August','September','October','November','December'];return m[d.getMonth()]+' '+d.getFullYear();}

function generateEvents(inputs){
    const events = [];
    const fyEnd = inputs.fyEnd;
    const agm = inputs.agmDate;
    const today = inputs.today;
    // 13-month horizon to capture annual events that fall just past the 12-month edge
    const horizon = addMonths(today, 13);
    const yr = today.getFullYear();
    const nextYr = yr + 1;

    // Returns next occurrence of an annual recurring date (month is 0-indexed)
    // Example: nextAnnualDate(8, 30) returns 30 Sep of yr or nextYr depending on today
    function nextAnnualDate(month, day){
        const thisYear = new Date(yr, month, day);
        if(thisYear < today) return new Date(nextYr, month, day);
        return thisYear;
    }

    function add(e){
        if(!e.date) return;
        // Only include events in horizon (next 13 months from today)
        if(e.date < today || e.date > horizon) return;
        events.push(e);
    }

    // === MCA ===
    if(inputs.entity === 'pvtltd' || inputs.entity === 'opc' || inputs.entity === 'section8'){
        add({title:'AGM — Annual General Meeting',form:'AGM',authority:'MCA',pill:'mca',date:agm,penalty:'₹1L on co. + ₹5k/day per director (Sec 99)',severity:'high',desc:'Within 6 months of FY end (Sec 96, Companies Act 2013).'});
        add({title:'AOC-4 — Financial Statements',form:'AOC-4',authority:'MCA',pill:'mca',date:addDays(agm,30),penalty:'₹100/day, no cap (Sec 403)',severity:'high',desc:'Audited financials filed with ROC. Due 30 days from AGM.'});
        add({title:(inputs.entity==='opc'?'MGT-7A':'MGT-7')+' — Annual Return',form:(inputs.entity==='opc'?'MGT-7A':'MGT-7'),authority:'MCA',pill:'mca',date:addDays(agm,60),penalty:'₹100/day, no cap (Sec 403)',severity:'high',desc:'Annual Return filed with ROC. Due 60 days from AGM.'});
        add({title:'ADT-1 — Auditor Appointment',form:'ADT-1',authority:'MCA',pill:'mca',date:addDays(agm,15),penalty:'₹500 + slab',severity:'medium',desc:'Required if auditor appointed/reappointed at AGM. Due 15 days from AGM.'});
        add({title:'DIR-3 KYC — Director KYC',form:'DIR-3 KYC',authority:'MCA',pill:'mca',date:nextAnnualDate(8,30),penalty:'Flat ₹5,000 + DIN deactivated',severity:'high',desc:'Annual KYC for every DIN holder. Due 30 September.'});
        add({title:'DPT-3 — Return of Deposits',form:'DPT-3',authority:'MCA',pill:'mca',date:nextAnnualDate(5,30),penalty:'2x-12x normal fee (slab)',severity:'medium',desc:'Return of money received not classified as deposits. Due 30 June.'});
        // MSME Form 1 - half yearly
        if(inputs.msme){
            add({title:'MSME Form 1 — H1 (Apr-Sep)',form:'MSME-1',authority:'MCA',pill:'mca',date:nextAnnualDate(9,31),penalty:'₹25k on co. + ₹50k on directors',severity:'medium',desc:'Half-yearly return of dues to MSME suppliers. Due 31 October.'});
            add({title:'MSME Form 1 — H2 (Oct-Mar)',form:'MSME-1',authority:'MCA',pill:'mca',date:nextAnnualDate(3,30),penalty:'₹25k on co. + ₹50k on directors',severity:'medium',desc:'Half-yearly return of dues to MSME suppliers. Due 30 April.'});
        }
        // Board Meetings - 4 per year (for Pvt Ltd; 2 for OPC/Small Co)
        const bmCount = (inputs.entity === 'opc') ? 2 : 4;
        for(let i = 0; i < bmCount; i++){
            const bmDate = addMonths(today, Math.floor((12 / bmCount) * (i + 1)) - 1);
            add({title:'Board Meeting #'+(i+1),form:'Board Meeting',authority:'MCA',pill:'mca',date:bmDate,penalty:'Sec 173 — gap ≤ 120 days',severity:'low',desc:'Quarterly Board Meeting. Gap between meetings ≤ 120 days (Sec 173).'});
        }
    }
    if(inputs.entity === 'llp'){
        add({title:'LLP Form 11 — Annual Return',form:'LLP Form 11',authority:'MCA',pill:'mca',date:nextAnnualDate(4,30),penalty:'₹100/day normal, ₹50/day Small LLP — no cap',severity:'high',desc:'Annual return of LLP. Due 30 May (60 days from FY end).'});
        add({title:'LLP Form 8 — Statement of Account & Solvency',form:'LLP Form 8',authority:'MCA',pill:'mca',date:nextAnnualDate(9,30),penalty:'₹100/day normal, ₹50/day Small LLP — no cap',severity:'high',desc:'Statement of Account & Solvency. Due 30 October.'});
        add({title:'DIR-3 KYC — Designated Partner KYC',form:'DIR-3 KYC',authority:'MCA',pill:'mca',date:nextAnnualDate(8,30),penalty:'Flat ₹5,000 + DIN deactivated',severity:'high',desc:'Annual KYC for every DP. Due 30 September.'});
    }

    // === Income Tax (CBDT) ===
    // Advance tax — 15 Jun (15%), 15 Sep (45%), 15 Dec (75%), 15 Mar (100%)
    add({title:'Advance Tax — 1st Instalment (15%)',form:'Challan 280',authority:'CBDT',pill:'cbdt',date:nextAnnualDate(5,15),penalty:'Interest u/s 234C',severity:'medium',desc:'1st instalment of advance tax (15% of estimated tax). Due 15 June.'});
    add({title:'Advance Tax — 2nd Instalment (45%)',form:'Challan 280',authority:'CBDT',pill:'cbdt',date:nextAnnualDate(8,15),penalty:'Interest u/s 234C',severity:'medium',desc:'2nd cumulative instalment (45% of estimated tax). Due 15 September.'});
    add({title:'Advance Tax — 3rd Instalment (75%)',form:'Challan 280',authority:'CBDT',pill:'cbdt',date:nextAnnualDate(11,15),penalty:'Interest u/s 234C',severity:'medium',desc:'3rd cumulative instalment (75%). Due 15 December.'});
    add({title:'Advance Tax — 4th Instalment (100%)',form:'Challan 280',authority:'CBDT',pill:'cbdt',date:nextAnnualDate(2,15),penalty:'Interest u/s 234B + 234C',severity:'high',desc:'Final instalment (100%). Due 15 March.'});
    // ITR
    const itrDue = inputs.audit ? nextAnnualDate(9,31) : nextAnnualDate(6,31);
    let itrForm = 'ITR-6';
    if(inputs.entity === 'llp') itrForm = 'ITR-5';
    else if(inputs.entity === 'section8') itrForm = 'ITR-7';
    add({title:itrForm+' — Income Tax Return',form:itrForm,authority:'CBDT',pill:'cbdt',date:itrDue,penalty:'₹5,000 u/s 234F + 1% pm u/s 234A',severity:'high',desc:'Income tax return. Due '+(inputs.audit?'31 October':'31 July')+' for FY 2025-26.'});
    if(inputs.audit){
        add({title:'Form 3CD — Tax Audit Report',form:'Form 3CD',authority:'CBDT',pill:'cbdt',date:nextAnnualDate(8,30),penalty:'0.5% of turnover capped at ₹1.5L (Sec 271B)',severity:'high',desc:'Tax audit report u/s 44AB. Due 30 September.'});
    }
    if(inputs.foreign){
        add({title:'Form 3CEB — Transfer Pricing Audit',form:'Form 3CEB',authority:'CBDT',pill:'cbdt',date:nextAnnualDate(9,31),penalty:'₹1L for first failure + ₹5k/day continuing',severity:'high',desc:'Transfer pricing report for international related party transactions. Due 31 October.'});
        add({title:'FLA Return — Foreign Liabilities & Assets',form:'FLA',authority:'RBI',pill:'rbi',date:nextAnnualDate(6,15),penalty:'Up to 3x amount or ₹2L',severity:'medium',desc:'FLA return for entities with foreign investment. Due 15 July.'});
    }
    if(inputs.entity === 'section8'){
        add({title:'Form 10BD — Statement of Donations',form:'Form 10BD',authority:'CBDT',pill:'cbdt',date:nextAnnualDate(4,31),penalty:'₹200/day u/s 234G',severity:'medium',desc:'Annual statement of donations received. Due 31 May.'});
        add({title:'Form 10B — Audit Report for Trust',form:'Form 10B',authority:'CBDT',pill:'cbdt',date:nextAnnualDate(9,31),penalty:'Loss of exemption',severity:'high',desc:'Audit report u/s 10(23C)(iv)/(v)/(vi)/(via) for 12A entities. Due 31 October.'});
    }

    // === GST (CBIC) ===
    if(inputs.gst === 'yes'){
        const startMonth = today.getMonth();
        const startYear = today.getFullYear();
        for(let i = 0; i < 12; i++){
            const m = new Date(startYear, startMonth + i, 1);
            const filingMonth = new Date(startYear, startMonth + i + 1, 1);
            const mLabel = monthName(m);
            if(inputs.gstFreq === 'monthly'){
                add({title:'GSTR-1 — Outward Supplies ('+formatDateShort(m)+')',form:'GSTR-1',authority:'CBIC',pill:'cbic',date:new Date(filingMonth.getFullYear(),filingMonth.getMonth(),11),penalty:'₹200/day capped at ₹5,000',severity:'medium',desc:'Outward supplies for '+mLabel+'. Due 11th of next month.'});
                add({title:'GSTR-3B — Summary Return ('+formatDateShort(m)+')',form:'GSTR-3B',authority:'CBIC',pill:'cbic',date:new Date(filingMonth.getFullYear(),filingMonth.getMonth(),20),penalty:'₹50/day capped at ₹5,000 + 18% pa interest',severity:'high',desc:'Summary return for '+mLabel+'. Due 20th of next month.'});
            } else {
                // QRMP — quarterly
                const monthInQuarter = filingMonth.getMonth() % 3;
                if(monthInQuarter === 0){
                    add({title:'GSTR-1 — Quarterly ('+monthName(m)+')',form:'GSTR-1 QRMP',authority:'CBIC',pill:'cbic',date:new Date(filingMonth.getFullYear(),filingMonth.getMonth(),13),penalty:'₹200/day capped at ₹5,000',severity:'medium',desc:'Quarterly GSTR-1 under QRMP. Due 13th.'});
                    add({title:'GSTR-3B — Quarterly ('+monthName(m)+')',form:'GSTR-3B QRMP',authority:'CBIC',pill:'cbic',date:new Date(filingMonth.getFullYear(),filingMonth.getMonth(),22),penalty:'₹50/day + 18% pa',severity:'high',desc:'Quarterly GSTR-3B under QRMP. Due 22nd/24th.'});
                } else {
                    add({title:'PMT-06 — Monthly Tax Payment ('+formatDateShort(m)+')',form:'PMT-06',authority:'CBIC',pill:'cbic',date:new Date(filingMonth.getFullYear(),filingMonth.getMonth(),25),penalty:'18% pa interest on tax due',severity:'medium',desc:'Monthly tax payment under QRMP. Due 25th.'});
                }
            }
        }
        add({title:'GSTR-9 — Annual Return',form:'GSTR-9',authority:'CBIC',pill:'cbic',date:nextAnnualDate(11,31),penalty:'₹200/day capped at 0.25% turnover',severity:'high',desc:'Annual GST return. Due 31 December.'});
        if(inputs.largeGst){
            add({title:'GSTR-9C — Reconciliation Statement',form:'GSTR-9C',authority:'CBIC',pill:'cbic',date:nextAnnualDate(11,31),penalty:'₹200/day capped at 0.25% turnover',severity:'high',desc:'Reconciliation statement for turnover &gt; ₹5Cr. Due 31 December.'});
        }
    }

    // === TDS ===
    // Monthly TDS payment - 7th of next month
    for(let i = 0; i < 12; i++){
        const m = new Date(today.getFullYear(), today.getMonth() + i, 1);
        const filingMonth = new Date(today.getFullYear(), today.getMonth() + i + 1, 1);
        add({title:'TDS Payment ('+formatDateShort(m)+')',form:'Challan 281',authority:'TDS',pill:'tds',date:new Date(filingMonth.getFullYear(),filingMonth.getMonth(),7),penalty:'1.5% pm u/s 201(1A)',severity:'medium',desc:'TDS deducted in '+monthName(m)+'. Due 7th of next month.'});
    }
    // Quarterly TDS returns - 24Q (salary) and 26Q (others) and 27Q (NR)
    add({title:'TDS Return Q1 (Apr-Jun) — 24Q/26Q',form:'24Q/26Q',authority:'TDS',pill:'tds',date:nextAnnualDate(6,31),penalty:'₹200/day u/s 234E capped at TDS amt',severity:'medium',desc:'Quarterly TDS return for Apr-Jun. Due 31 July.'});
    add({title:'TDS Return Q2 (Jul-Sep) — 24Q/26Q',form:'24Q/26Q',authority:'TDS',pill:'tds',date:nextAnnualDate(9,31),penalty:'₹200/day u/s 234E',severity:'medium',desc:'Quarterly TDS return for Jul-Sep. Due 31 October.'});
    add({title:'TDS Return Q3 (Oct-Dec) — 24Q/26Q',form:'24Q/26Q',authority:'TDS',pill:'tds',date:nextAnnualDate(0,31),penalty:'₹200/day u/s 234E',severity:'medium',desc:'Quarterly TDS return for Oct-Dec. Due 31 January.'});
    add({title:'TDS Return Q4 (Jan-Mar) — 24Q/26Q',form:'24Q/26Q',authority:'TDS',pill:'tds',date:nextAnnualDate(4,31),penalty:'₹200/day u/s 234E',severity:'high',desc:'Quarterly TDS return for Jan-Mar. Due 31 May.'});
    add({title:'Form 16 — TDS Certificate (Salary)',form:'Form 16',authority:'TDS',pill:'tds',date:nextAnnualDate(5,15),penalty:'₹100/day u/s 272A capped at TDS',severity:'medium',desc:'TDS certificate to employees. Due 15 June.'});

    // === PF / ESI ===
    if(inputs.employees){
        for(let i = 0; i < 12; i++){
            const m = new Date(today.getFullYear(), today.getMonth() + i, 1);
            const filingMonth = new Date(today.getFullYear(), today.getMonth() + i + 1, 1);
            add({title:'PF Payment + ECR ('+formatDateShort(m)+')',form:'ECR',authority:'EPFO',pill:'epfo',date:new Date(filingMonth.getFullYear(),filingMonth.getMonth(),15),penalty:'12% pa interest + 5-25% damages (Sec 14B)',severity:'high',desc:'PF contribution for '+monthName(m)+'. Due 15th of next month.'});
            add({title:'ESI Payment ('+formatDateShort(m)+')',form:'ESI Challan',authority:'ESIC',pill:'esic',date:new Date(filingMonth.getFullYear(),filingMonth.getMonth(),15),penalty:'12% pa interest + up to 25% damages',severity:'high',desc:'ESI contribution for '+monthName(m)+'. Due 15th of next month.'});
            // Professional Tax - state-specific (Maharashtra: by 20th)
            add({title:'Professional Tax ('+formatDateShort(m)+')',form:'PT Return',authority:'State Tax',pill:'state',date:new Date(filingMonth.getFullYear(),filingMonth.getMonth(),20),penalty:'State-specific (typ. ₹1k-₹5k)',severity:'low',desc:'Professional Tax for '+monthName(m)+'. Due 20th (state-specific).'});
        }
        // ESI half-yearly returns
        add({title:'ESI Half-Yearly Return (Apr-Sep)',form:'ESI Return',authority:'ESIC',pill:'esic',date:nextAnnualDate(10,11),penalty:'Up to ₹10k',severity:'medium',desc:'Half-yearly ESI return for Apr-Sep. Due 11 November.'});
        add({title:'ESI Half-Yearly Return (Oct-Mar)',form:'ESI Return',authority:'ESIC',pill:'esic',date:nextAnnualDate(4,12),penalty:'Up to ₹10k',severity:'medium',desc:'Half-yearly ESI return for Oct-Mar. Due 12 May.'});
    }

    // Sort by date
    events.sort((a, b) => a.date - b.date);
    // Filter to horizon
    return events.filter(e => e.date >= today && e.date <= horizon);
}

function getUrgency(date, today){
    const days = daysBetween(today, date);
    if(days <= 7) return 'urgent';
    if(days <= 30) return 'warn';
    if(days <= 90) return 'upcoming';
    return 'future';
}

function renderEvents(events){
    const c = document.getElementById('eventList');
    c.innerHTML = '';
    if(events.length === 0){
        c.innerHTML = '<div class="callout warn"><p>No compliance events in the next 12 months with the current selection. Try adjusting GST, employees, or other toggles.</p></div>';
        return;
    }
    const today = new Date(); today.setHours(0,0,0,0);

    if(currentView === 'timeline'){
        events.forEach(e => c.appendChild(buildEventCard(e, today)));
    } else if(currentView === 'authority'){
        const groups = {};
        events.forEach(e => { if(!groups[e.authority]) groups[e.authority] = []; groups[e.authority].push(e); });
        Object.keys(groups).forEach(auth => {
            const g = document.createElement('div'); g.className = 'event-group';
            const h = document.createElement('div'); h.className = 'event-group-head';
            h.innerHTML = '<span>'+auth+'</span><span class="event-count">'+groups[auth].length+'</span>';
            g.appendChild(h);
            groups[auth].forEach(e => g.appendChild(buildEventCard(e, today)));
            c.appendChild(g);
        });
    } else if(currentView === 'month'){
        const groups = {};
        events.forEach(e => { const k = monthName(e.date); if(!groups[k]) groups[k] = []; groups[k].push(e); });
        Object.keys(groups).forEach(mn => {
            const g = document.createElement('div'); g.className = 'event-group';
            const h = document.createElement('div'); h.className = 'event-group-head';
            h.innerHTML = '<span>'+mn+'</span><span class="event-count">'+groups[mn].length+'</span>';
            g.appendChild(h);
            groups[mn].forEach(e => g.appendChild(buildEventCard(e, today)));
            c.appendChild(g);
        });
    }
}

function buildEventCard(e, today){
    const card = document.createElement('div');
    const urg = getUrgency(e.date, today);
    card.className = 'event-card ' + urg;
    const days = daysBetween(today, e.date);
    const reminders = [30,15,7,1].map(d => addDays(e.date, -d));
    card.innerHTML = ''+
        '<div class="event-row">'+
            '<div class="event-info">'+
                '<div class="event-title"><span class="event-pill '+e.pill+'">'+e.authority+'</span>'+e.title+'</div>'+
                '<div class="event-meta"><strong>Form:</strong> '+e.form+' &nbsp;·&nbsp; <strong>Penalty:</strong> '+e.penalty+'</div>'+
                '<div class="event-meta" style="margin-top:4px;">'+e.desc+'</div>'+
                '<div class="event-reminders"><strong>Reminders:</strong> '+formatDateShort(reminders[0])+' (30d) · '+formatDateShort(reminders[1])+' (15d) · '+formatDateShort(reminders[2])+' (7d) · '+formatDateShort(reminders[3])+' (1d)</div>'+
            '</div>'+
            '<div class="event-date '+(urg==='urgent'?'urgent':'')+'">'+formatDate(e.date)+'<span class="days">'+(days===0?'today':(days===1?'tomorrow':'in '+days+' days'))+'</span></div>'+
        '</div>';
    return card;
}

function generate(){
    const fyEndStr = document.getElementById('fyEnd').value;
    const agmStr = document.getElementById('agmDate').value;
    if(!fyEndStr || !agmStr){ showError('Please enter FY end and AGM date.'); return; }
    const fyEnd = parseDate(fyEndStr);
    const agm = parseDate(agmStr);
    if(isNaN(fyEnd.getTime()) || isNaN(agm.getTime())){ showError('Invalid date(s).'); return; }

    const today = new Date(); today.setHours(0,0,0,0);

    const inputs = {
        entity: currentEntity,
        fyEnd: fyEnd,
        agmDate: agm,
        today: today,
        gst: currentGst,
        gstFreq: document.getElementById('gstFreq').value,
        audit: document.getElementById('audit').checked,
        employees: document.getElementById('employees').checked,
        msme: document.getElementById('msme').checked,
        foreign: document.getElementById('foreign').checked,
        largeGst: document.getElementById('largeGst').checked
    };

    const events = generateEvents(inputs);
    lastEvents = events;

    // Summary stats
    const total = events.length;
    const next30 = events.filter(e => daysBetween(today, e.date) <= 30).length;
    const critical = events.filter(e => daysBetween(today, e.date) <= 7).length;
    const authorities = [...new Set(events.map(e => e.authority))];

    document.getElementById('resTotal').textContent = total;
    document.getElementById('resTotalSub').textContent = 'over next 12 months';
    document.getElementById('resNext30').textContent = next30;
    document.getElementById('resCritical').textContent = critical;
    document.getElementById('resRegulators').textContent = authorities.length;

    document.getElementById('postCtaHead').textContent = total + ' events generated — '+ (critical > 0 ? critical + ' critical action(s) needed within 7 days.' : 'plan ahead with Patron\u2019s end-to-end service.');

    renderEvents(events);

    const sec = document.getElementById('resultSection');
    sec.classList.add('visible');
    requestAnimationFrame(function(){requestAnimationFrame(function(){sec.scrollIntoView({behavior:'smooth',block:'start'});});});
}

function subscribeReminders(){
    const email = document.getElementById('optinEmail').value.trim();
    if(!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)){
        showError('Please enter a valid email address.');
        return;
    }
    const entityNames = {pvtltd:'Pvt Ltd',opc:'OPC',llp:'LLP',section8:'Section 8'};
    const subject = 'Subscribe to Patron Compliance Calendar Reminders';
    const body = 'Hi Patron Accounting,%0A%0APlease subscribe me to monthly compliance reminders.%0A%0AEmail: '+encodeURIComponent(email)+'%0AEntity type: '+entityNames[currentEntity]+'%0AFY end: '+document.getElementById('fyEnd').value+'%0AAGM date: '+document.getElementById('agmDate').value+'%0AGST registered: '+(currentGst === 'yes' ? 'Yes ('+document.getElementById('gstFreq').value+')' : 'No')+'%0AAudit applicable: '+(document.getElementById('audit').checked?'Yes':'No')+'%0AEmployees (PF/ESI): '+(document.getElementById('employees').checked?'Yes':'No')+'%0A%0AThank you.';
    window.location.href = 'mailto:sales@patronaccounting.com?subject='+encodeURIComponent(subject)+'&body='+body;
}

function resetCalc(){
    currentEntity = 'pvtltd'; currentGst = 'yes'; currentView = 'timeline';
    document.querySelectorAll('.toggle-group').forEach(g => {
        g.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));
    });
    document.querySelector('.toggle-btn[data-entity="pvtltd"]').classList.add('active');
    document.querySelector('.toggle-btn[data-gst="yes"]').classList.add('active');
    document.querySelectorAll('.view-tab').forEach(x => x.classList.remove('active'));
    document.querySelector('.view-tab[data-view="timeline"]').classList.add('active');
    document.getElementById('fyEnd').value = '2026-03-31';
    document.getElementById('agmDate').value = '2026-09-30';
    document.getElementById('gstFreq').value = 'monthly';
    document.getElementById('gstFreqRow').style.display = 'block';
    document.getElementById('audit').checked = true;
    document.getElementById('employees').checked = true;
    document.getElementById('msme').checked = false;
    document.getElementById('foreign').checked = false;
    document.getElementById('largeGst').checked = false;
    document.getElementById('optinEmail').value = '';
    document.getElementById('resultSection').classList.remove('visible');
    document.getElementById('errorBanner').classList.remove('visible');
    lastEvents = [];
}

function toggleFaq(e){const b=e.closest?(e.closest('.faq-question')||e):e;const it=b.closest('.faq-item');if(!it)return;const o=it.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>{i.classList.remove('open');const q=i.querySelector('.faq-question');if(q)q.setAttribute('aria-expanded','false');});if(!o){it.classList.add('open');b.setAttribute('aria-expanded','true');}}

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
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> — get your taxes filed accurately by CAs.</span>
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