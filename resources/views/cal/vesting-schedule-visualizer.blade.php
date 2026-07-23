@extends('layouts.app')
@section('meta')

<title>Vesting Schedule Visualiser | ESOP Cliff &amp; Timeline</title>
<meta name="description" content="Free ESOP vesting schedule visualiser: chart your vesting timeline with cliff, monthly/quarterly/annual frequency, leave events and acceleration. Try now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/vesting-schedule-visualizer">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/vesting-schedule-visualizer">
<meta property="og:title" content="Vesting Schedule Visualiser — ESOP Cliff &amp; Timeline Tool 2026">
<meta property="og:description" content="Visualise ESOP vesting with cliff, frequency, leave events, and acceleration. PNG export for HR.">
<meta property="og:image" content="/og/vesting-schedule-visualizer.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Vesting Schedule Visualiser — ESOP Cliff &amp; Timeline Tool 2026">
<meta name="twitter:description" content="ESOP vesting timeline with cliff, frequency, leave events, acceleration. PNG export.">
<meta name="twitter:image" content="/og/vesting-schedule-visualizer.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">

@endsection
@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"Vesting Schedule Visualiser","description":"Vesting Schedule Visualiser draws the month-by-month ESOP vesting timeline for Indian startup employees and HR teams. Takes total options granted, vesting period in years, cliff in months, vesting frequency (monthly, quarterly, or annual), simulated leave-date event, and accelerated-vesting trigger setting (none, single-trigger, or double-trigger). Outputs an SVG timeline chart, per-event vested-options table, cliff handling visualisation, forfeiture impact at the leave date, and acceleration boost. PNG export for HR communications and offer-letter appendices.","url":"/tools/vesting-schedule-visualizer","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Vesting Schedule Visualiser","item":"/tools/vesting-schedule-visualizer"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"What is the standard ESOP vesting schedule in India?","acceptedAnswer":{"@type":"Answer","text":"The standard ESOP vesting schedule in Indian startups follows the Silicon Valley template: 4-year total vesting period with a 1-year cliff and monthly vesting thereafter. This means no options vest in the first 12 months, then 25 percent vests at the 12-month cliff in a single tranche, and the remaining 75 percent vests in equal monthly portions over the next 36 months. SEBI SBEB Regulations require a minimum vesting period of 1 year between grant and first vest for listed companies."}},
{"@type":"Question","name":"What is a vesting cliff and why is it used?","acceptedAnswer":{"@type":"Answer","text":"A vesting cliff is the minimum period an employee must serve before any options vest. The standard 1-year cliff means employees who leave within 12 months get nothing — protecting the company from giving equity to short-tenure hires. After the cliff, vesting becomes incremental (monthly, quarterly, or annual) for the remainder of the schedule. SEBI SBEB Regulations 2021 mandate a minimum 1-year cliff between option grant and first vest for listed companies."}},
{"@type":"Question","name":"What is the difference between monthly, quarterly, and annual vesting?","acceptedAnswer":{"@type":"Answer","text":"Monthly vesting releases options every month after the cliff — the most employee-friendly. Quarterly vesting batches three months into a single vest event, simplifying record-keeping. Annual vesting only releases options once a year — least employee-friendly because employees forfeit nearly a year of accrued options if they leave just before the anniversary. Most Indian startups use monthly vesting post-cliff for tech roles, quarterly for non-tech, and annual is rare except in early-stage founder-restricted shares."}},
{"@type":"Question","name":"What happens to unvested options when an employee leaves?","acceptedAnswer":{"@type":"Answer","text":"Unvested options are forfeited and returned to the ESOP pool. The vested options that the employee has accumulated up to the leave date typically have a defined exercise window — commonly 30, 60, or 90 days after the last working day. Unexercised vested options after this window lapse and also return to the pool. The exact mechanics depend on the company's ESOP scheme document and the SBEB regulations."}},
{"@type":"Question","name":"What is single-trigger versus double-trigger acceleration?","acceptedAnswer":{"@type":"Answer","text":"Single-trigger acceleration vests all unvested options on a single event — typically a change of control like acquisition or IPO. Double-trigger requires two events: change of control AND the employee being terminated without cause (or constructively dismissed) within a window (usually 12 months) after the change. Investors strongly prefer double-trigger because single-trigger can give departing employees a windfall in M&A. Senior executives commonly negotiate double-trigger; most rank-and-file get no acceleration."}},
{"@type":"Question","name":"Can vesting schedules differ between employees?","acceptedAnswer":{"@type":"Answer","text":"Yes. While the standard 4-year monthly with 1-year cliff is common, schedules can vary by seniority, role criticality, and offer negotiation. Founders sometimes have 5 to 6 year vesting with longer cliffs. Senior hires may negotiate front-loaded vesting (more options vesting in year 1) or shorter cliffs. Critical retention hires may have back-loaded vesting (more in years 3-4). All schedules must be documented in the ESOP scheme and individual grant letters."}},
{"@type":"Question","name":"Does the cliff vest one large tranche or each month catches up?","acceptedAnswer":{"@type":"Answer","text":"At the cliff, the employee vests in one tranche equal to the proportion of the vesting period covered by the cliff. For a 4-year vest with 1-year cliff, 25 percent (12 months / 48 months) vests at the cliff in a single event. After this, monthly vesting begins on the standard schedule. The cliff is a single one-time vest event, not a gradual catch-up. SEBI SBEB Regulations require this minimum 1-year cliff between grant and first vest."}},
{"@type":"Question","name":"What is back-loaded vesting and when is it used?","acceptedAnswer":{"@type":"Answer","text":"Back-loaded vesting (also called retention-weighted) puts more options in later years: e.g., 10 percent year 1, 20 percent year 2, 30 percent year 3, 40 percent year 4. The intent is to maximise retention near the end of the vesting period, often used for critical engineering or product hires whose departure mid-tenure would harm the company. Founder-friendly variants are rare in India because most investors push back-loaded structures to align long-term incentives."}},
{"@type":"Question","name":"How are ESOPs taxed at vesting in India?","acceptedAnswer":{"@type":"Answer","text":"No tax arises at vesting in India. ESOPs are taxed at two events: at exercise (Section 17(2)(vi) perquisite — FMV at exercise minus exercise price, taxed as salary) and at sale (capital gains on sale price minus FMV at exercise). Vesting only converts the option from unvested to exercisable status — it is not a taxable event. The Income-tax Act, 1961 and the Income Tax Act, 2025 (effective 1 April 2026) both treat vesting as tax-neutral."}},
{"@type":"Question","name":"What is the exercise window after vesting?","acceptedAnswer":{"@type":"Answer","text":"The exercise window is the time period during which an employee can exercise vested options. Most Indian ESOP schemes allow exercise at any time during employment plus a window after separation. The typical post-separation window is 30 to 90 days, though some companies offer longer (1 to 10 years) to be employee-friendly. SEBI SBEB Regulations cap the exercise period at 10 years from vesting for listed company ESOPs. The window must be documented in the ESOP scheme."}},
{"@type":"Question","name":"Can ESOP vesting be paused during a leave of absence?","acceptedAnswer":{"@type":"Answer","text":"Yes, most ESOP schemes pause vesting during unpaid leave of absence, sabbatical, or maternity beyond statutory entitlement. Paid leave (vacation, casual leave, sick leave) does not pause vesting. The exact mechanics must be defined in the ESOP scheme document — including which leave types pause, the maximum pause allowed, and whether vesting resumes from the pause point or extends the overall schedule. Indian companies should align this with the Maternity Benefit Act provisions for 26-week paid leave."}},
{"@type":"Question","name":"What is the difference between time-based and milestone-based vesting?","acceptedAnswer":{"@type":"Answer","text":"Time-based vesting (the standard) releases options based purely on continued employment. Milestone-based vesting requires achievement of specific business or performance milestones — revenue targets, product launches, or KPIs. Milestone vesting is more common for founders, senior executives, and key hires. Hybrid structures combine both: half time-based, half milestone-based. Milestone vesting is harder to administer and requires clear measurable triggers in the grant letter."}},
{"@type":"Question","name":"Is this Vesting Schedule Visualiser a substitute for a CA opinion?","acceptedAnswer":{"@type":"Answer","text":"No. This visualiser produces a directional timeline based on standard vesting math for HR planning, employee communications, and ESOP scheme design discussions. Actual ESOP schemes must comply with Companies Act 2013, SEBI SBEB Regulations 2021 (for listed companies), Income-tax Act, FEMA pricing rules, and the company's individual scheme document. Always consult a Chartered Accountant and a corporate lawyer before finalising the vesting schedule in your ESOP scheme."}}
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
@media (min-width:600px){.calc-row{grid-template-columns:1fr 1fr}.calc-row.three-col{grid-template-columns:1fr 1fr 1fr}}
.form-group label{display:block;font-size:12px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:0.5px}
.form-group label .hint{display:block;font-size:11px;color:var(--text-muted);font-weight:500;text-transform:none;letter-spacing:0;margin-top:2px}
.form-group input,.form-group select{width:100%;padding:12px 16px;border:2px solid var(--border);border-radius:var(--radius);font-family:var(--font-body);font-size:16px;color:var(--text);background:var(--surface);outline:2px solid transparent;outline-offset:1px;transition:border-color 0.2s}
.form-group input:focus-visible,.form-group select:focus-visible{border-color:var(--primary);outline-color:var(--primary)}
.form-group input[type="number"],.form-group input[type="text"]{font-family:var(--font-mono);font-size:17px;font-weight:700}
.section-title{font-family:var(--font-mono);font-size:11px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin:24px 0 12px;padding-bottom:6px;border-bottom:1px dashed var(--border)}
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;flex-wrap:wrap}
.toggle-btn{flex:1 1 28%;padding:10px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent;min-height:44px}
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
@media (min-width:600px){.summary-grid{grid-template-columns:1fr 1fr}.summary-grid.three-col{grid-template-columns:1fr 1fr 1fr}}
.summary-card{background:var(--surface);border-radius:var(--radius);padding:16px 18px;border:1px solid var(--border)}
.summary-card.highlight{background:#FFF7ED;border-color:var(--accent)}
.summary-card .v-label{font-family:var(--font-mono);font-size:10px;color:var(--accent);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:4px}
.summary-card .v-val{font-family:var(--font-mono);font-size:22px;font-weight:700;color:var(--primary-dark);word-break:break-word}
.summary-card .v-desc{font-size:12px;color:var(--text-secondary);margin-top:4px;line-height:1.5}
.timeline-block{background:#FFFFFF;border:1px solid var(--border);border-radius:var(--radius);padding:18px;margin-top:16px}
.timeline-block h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:12px;font-weight:700;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px}
.timeline-svg{width:100%;height:auto;display:block;max-width:100%}
.timeline-legend{display:flex;flex-wrap:wrap;gap:14px;margin-top:12px;font-size:12px;color:var(--text-secondary)}
.timeline-legend .swatch{display:inline-block;width:14px;height:14px;border-radius:3px;margin-right:6px;vertical-align:middle}
.btn-export{display:inline-flex;align-items:center;gap:6px;padding:8px 14px;border:1px solid var(--accent);border-radius:6px;background:var(--accent);color:#fff;font-family:var(--font-body);font-size:12px;font-weight:600;cursor:pointer;transition:all 0.2s;min-height:36px}
.btn-export:hover{background:var(--accent-light);border-color:var(--accent-light)}
.btn-export:focus-visible{outline:2px solid var(--primary);outline-offset:2px}
.schedule-block{background:var(--surface-alt);border-radius:var(--radius);padding:18px 22px;margin-top:16px;overflow-x:auto}
.schedule-block h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:12px;font-weight:700}
.schedule-tbl{width:100%;border-collapse:collapse;font-size:13px}
.schedule-tbl th{background:var(--primary);color:#fff;padding:10px 12px;text-align:right;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;font-weight:600}
.schedule-tbl th:first-child{text-align:left;border-radius:6px 0 0 0}
.schedule-tbl th:last-child{border-radius:0 6px 0 0}
.schedule-tbl td{padding:9px 12px;border-bottom:1px solid var(--border);font-family:var(--font-mono);font-weight:600;text-align:right;color:var(--primary-dark)}
.schedule-tbl td:first-child{text-align:left;color:var(--text);font-family:var(--font-body);font-weight:500}
.schedule-tbl tr.cliff td{background:#FFF7ED;color:var(--accent);font-weight:700}
.schedule-tbl tr.leave td{background:#FEE2E2;color:#991B1B}
.schedule-tbl tr.accel td{background:#ECFDF5;color:#065F46;font-weight:700}
.schedule-tbl tr:last-child td{border-bottom:none}
.alert-flag{padding:14px 18px;border-radius:var(--radius);margin-top:14px;font-size:13px;line-height:1.6}
.alert-flag.leave{background:#FEE2E2;border-left:4px solid var(--danger);color:#991B1B}
.alert-flag.leave strong{color:#991B1B}
.alert-flag.accel{background:#ECFDF5;border-left:4px solid var(--success);color:#065F46}
.alert-flag.accel strong{color:#065F46}
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
.formula-box{background:var(--primary-dark);color:#E8EEF5;border-radius:var(--radius);padding:20px 24px;margin:16px 0;font-family:var(--font-mono);font-size:13px;line-height:1.8;overflow-x:auto}
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
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:22px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}.result-headline .value{font-size:22px}.timeline-block,.schedule-block{padding:12px}.schedule-tbl th,.schedule-tbl td{padding:7px 6px;font-size:11px}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-export,.btn-calculate,.office-strip,.footer,.breadcrumb{display:none !important}body{background:#fff;color:#000;font-size:11pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:16px;margin-bottom:16px}.result-headline{background:#15365f !important;-webkit-print-color-adjust:exact;print-color-adjust:exact}.hero h1{font-size:18pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}.timeline-svg{max-width:100%}}

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
<a href="#calculator">Visualiser</a><a href="#how-to-use">How to Use</a><a href="#standard">Standard Schedules</a><a href="#cliff">Cliff Mechanics</a><a href="#frequency">Frequency Comparison</a><a href="#acceleration">Acceleration</a><a href="#sebi">SEBI &amp; Tax</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>Vesting Schedule Visualiser</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>Vesting Schedule Visualiser — <span>ESOP Cliff &amp; Timeline</span> Chart for HR &amp; Founders</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Designing your ESOP scheme? <strong>Talk to a CA in 30 seconds.</strong> Scheme drafting, SEBI SBEB compliance, board resolutions. Fixed fee.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Vesting%20Schedule%20Visualiser%20and%20need%20help%20with%20ESOP%20scheme%20design." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ESOP%20Scheme%20Design&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Vesting%20Schedule%20Visualiser%20and%20need%20help%20with%3A%0A%0A-%20ESOP%20scheme%20drafting%0A-%20SEBI%20SBEB%20Regulations%20compliance%0A-%20Board%20resolutions%20and%20grant%20letters%0A%0AGrant%20size%3A%20%0AVesting%20period%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>Visualise your ESOP vesting schedule month-by-month. The standard 4-year vest with 1-year cliff and monthly post-cliff vesting means 0% vests in months 1–11, then 25% vests as a single cliff tranche at month 12, then ~2.08% (about 1/48th of grant) per month from months 13 to 48. Simulate leave events, see forfeiture, model single-trigger or double-trigger acceleration on acquisition. Export the timeline as PNG for HR communications, offer-letter appendices, or board reports. Compliant with <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener" style="color:var(--accent);text-decoration:underline">SEBI SBEB Regulations 2021</a> minimum 1-year cliff for listed companies.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Vesting Schedule Visualiser</h2>
<p class="sub">Plots month-by-month cumulative vested options. Handles cliff, monthly/quarterly/annual vesting, leave events, and acceleration. Exports timeline as PNG.</p>
<noscript><div class="noscript-box">This visualiser requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="section-title">Grant Details</div>
<div class="calc-row three-col">
<div class="form-group"><label for="totalOptions">Total Options Granted</label><input type="text" id="totalOptions" inputmode="decimal" placeholder="4,800" autocomplete="off" value="4800"></div>
<div class="form-group"><label for="vestingYears">Vesting Period (Years)</label><input type="text" id="vestingYears" inputmode="decimal" placeholder="4" autocomplete="off" value="4"></div>
<div class="form-group"><label for="cliffMonths">Cliff (Months) <span class="hint">SEBI SBEB min 12 for listed</span></label><input type="text" id="cliffMonths" inputmode="decimal" placeholder="12" autocomplete="off" value="12"></div>
</div>

<div class="section-title">Vesting Frequency (Post-Cliff)</div>
<div class="form-group" style="margin-bottom:20px;">
<label>How often vesting events occur after the cliff</label>
<div class="toggle-group" role="group" aria-label="Vesting frequency">
<button type="button" class="toggle-btn active" data-freq="monthly" onclick="setFreq(this)">Monthly<br><small style="font-weight:400;font-size:11px;opacity:0.7">Most common</small></button>
<button type="button" class="toggle-btn" data-freq="quarterly" onclick="setFreq(this)">Quarterly<br><small style="font-weight:400;font-size:11px;opacity:0.7">Every 3 months</small></button>
<button type="button" class="toggle-btn" data-freq="annual" onclick="setFreq(this)">Annual<br><small style="font-weight:400;font-size:11px;opacity:0.7">Once a year</small></button>
</div></div>

<div class="section-title">Optional — Leave Event Simulation</div>
<div class="calc-row">
<div class="form-group"><label for="leaveMonth">Leave Month (from grant) <span class="hint">Leave blank for full schedule</span></label><input type="text" id="leaveMonth" inputmode="decimal" placeholder="e.g. 30" autocomplete="off" value=""></div>
<div class="form-group"><label>Accelerated Vesting Trigger</label>
<div class="toggle-group" role="group" aria-label="Acceleration trigger">
<button type="button" class="toggle-btn active" data-accel="none" onclick="setAccel(this)">None<br><small style="font-weight:400;font-size:11px;opacity:0.7">Standard</small></button>
<button type="button" class="toggle-btn" data-accel="single" onclick="setAccel(this)">Single<br><small style="font-weight:400;font-size:11px;opacity:0.7">On acquisition</small></button>
<button type="button" class="toggle-btn" data-accel="double" onclick="setAccel(this)">Double<br><small style="font-weight:400;font-size:11px;opacity:0.7">Acquisition + term.</small></button>
</div></div>
</div>

<button class="btn-calculate" onclick="calculate()" type="button">Visualise Schedule</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline">
<div class="label">Vested at <span id="reportMonth">Month 12 (Cliff)</span></div>
<div class="value"><span class="accent" id="resHeadline">—</span> <span style="font-size:18px;opacity:0.8;" id="resHeadlinePct">—</span></div>
<div class="meta" id="resHeadlineMeta">—</div>
</div>

<div class="summary-grid three-col">
<div class="summary-card"><div class="v-label">At Cliff Month</div><div class="v-val" id="resAtCliff">—</div><div class="v-desc" id="resAtCliffDesc">First vesting event</div></div>
<div class="summary-card"><div class="v-label">Per-Event Vesting (Post-Cliff)</div><div class="v-val" id="resPerEvent">—</div><div class="v-desc" id="resPerEventDesc">After cliff</div></div>
<div class="summary-card highlight"><div class="v-label">Total at End of Schedule</div><div class="v-val" id="resTotal">—</div><div class="v-desc">100% vested</div></div>
</div>

<div class="timeline-block"><h4><span>Visual Timeline — Cumulative Vested Options</span><button type="button" class="btn-export" onclick="exportPNG()">⬇ Save as PNG</button></h4>
<div id="svgContainer">
<svg id="timelineSVG" class="timeline-svg" viewBox="0 0 800 360" xmlns="http://www.w3.org/2000/svg"></svg>
</div>
<div class="timeline-legend">
<span><span class="swatch" style="background:#15365f;"></span>Vested</span>
<span><span class="swatch" style="background:#E5E5E0;"></span>Unvested</span>
<span><span class="swatch" style="background:#f26522;"></span>Cliff event</span>
<span id="legendLeave" style="display:none;"><span class="swatch" style="background:#DC2626;"></span>Leave event (forfeit)</span>
<span id="legendAccel" style="display:none;"><span class="swatch" style="background:#059669;"></span>Acceleration</span>
</div>
</div>

<div class="schedule-block"><h4>Month-by-Month Vesting Schedule</h4>
<table class="schedule-tbl">
<thead><tr><th>Event</th><th>Month</th><th>This Event</th><th>Cumulative Vested</th><th>% of Total</th></tr></thead>
<tbody id="scheduleTableBody"></tbody>
</table>
</div>

<div class="alert-flag leave" id="leaveAlert" style="display:none;">
<strong>⚠ Leave Event Impact at Month <span id="leaveAlertMonth">—</span>.</strong>
<ul>
<li><strong>Vested options retained:</strong> <span id="leaveVested">—</span> (the employee can exercise these within the post-separation window — typically 30–90 days)</li>
<li><strong>Unvested options forfeited:</strong> <span id="leaveForfeit">—</span> (returned to the company's ESOP pool)</li>
<li><strong>Forfeiture percentage:</strong> <span id="leaveForfeitPct">—</span> of the original grant</li>
<li>If leave is <strong>before the cliff</strong>, all options are forfeited — including any that would have vested at the cliff</li>
</ul>
</div>

<div class="alert-flag accel" id="accelAlert" style="display:none;">
<strong>✓ Acceleration Triggered — <span id="accelType">—</span>.</strong>
<ul>
<li><strong>Pre-acceleration vested:</strong> <span id="accelBefore">—</span> options</li>
<li><strong>Acceleration boost:</strong> <span id="accelBoost">—</span> options vest immediately</li>
<li><strong>Total vested after acceleration:</strong> <span id="accelTotal">—</span> options (100% of grant)</li>
<li id="accelDoubleDesc" style="display:none;"><strong>Double-trigger requirement:</strong> Acquisition or change-of-control event AND employee terminated without cause (or constructively dismissed) within 12 months</li>
</ul>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head">Need a CA to draft your ESOP scheme document?</div>
<div class="post-result-cta-sub">Vesting design, SBEB compliance, board resolutions, grant letters, FEMA + tax structuring. Fixed-fee, 7–10 day turnaround.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20used%20the%20Vesting%20Schedule%20Visualiser%20and%20need%20help%20with%20ESOP%20scheme%20drafting." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ESOP%20Scheme%20Drafting&body=Hi%2C%0A%0AI%20just%20ran%20the%20Vesting%20Schedule%20Visualiser%20and%20need%20help%20drafting%20our%20ESOP%20scheme.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print Schedule</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the Vesting Schedule Visualiser</h2>
<ol>
<li><strong>Enter total options granted.</strong> Use the gross number from the grant letter — not the number after any prior partial vesting or forfeiture.</li>
<li><strong>Set the vesting period.</strong> Most Indian startups use 4 years; founders sometimes use 5 or 6 years; non-tech grants may use 3 years. The visualiser supports any value from 1 to 10 years.</li>
<li><strong>Set the cliff in months.</strong> The standard is 12 months. SEBI SBEB Regulations require a minimum 1-year cliff between grant and first vest for listed companies. For unlisted private companies you can use shorter cliffs, but most ESOP advisors still recommend 12 months for retention reasons.</li>
<li><strong>Pick the post-cliff frequency.</strong> Monthly is most common and most employee-friendly. Quarterly batches three months of vesting into a single tranche, simplifying record-keeping. Annual is rare except for non-tech roles or founder-restricted shares.</li>
<li><strong>(Optional) Simulate a leave event.</strong> Enter the month from grant when the employee leaves. The tool shows vested-vs-forfeited split. Leaving before the cliff forfeits everything.</li>
<li><strong>(Optional) Set acceleration trigger.</strong> Single-trigger vests 100% on acquisition or change of control. Double-trigger requires both the change-of-control AND termination of the employee within typically 12 months.</li>
<li><strong>Click Visualise.</strong> You get a cumulative-vested timeline chart, a month-by-month schedule table, leave-impact analysis, and acceleration boost. Export the timeline as PNG for HR letters or board reports.</li>
</ol>
</section>

<section class="content-section" id="standard">
<h2>Standard ESOP Vesting Schedules in India</h2>
<p>The "standard" Silicon Valley vesting schedule has been almost universally adopted in Indian startup ESOP schemes: <strong>4 years total, 1-year cliff, monthly thereafter</strong>. Below are the variations used by stage and role:</p>

<table class="rate-table">
<thead><tr><th>Stage / Role</th><th>Period</th><th>Cliff</th><th>Frequency</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Early employees (Seed/A)</td><td>4 years</td><td>1 year</td><td>Monthly</td><td>Standard default</td></tr>
<tr><td>Senior executives (CXO)</td><td>4 years</td><td>1 year</td><td>Monthly</td><td>Often with double-trigger acceleration</td></tr>
<tr><td>Founders (post-Series A)</td><td>4–6 years</td><td>1 year</td><td>Monthly</td><td>Restricted to investor protection; reverse vesting</td></tr>
<tr><td>Non-tech roles</td><td>4 years</td><td>1 year</td><td>Quarterly</td><td>Simpler administration</td></tr>
<tr><td>Independent directors</td><td>3 years</td><td>Nil or 6 mo</td><td>Annual</td><td>Tied to service period</td></tr>
<tr><td>Advisors / consultants</td><td>2 years</td><td>Nil</td><td>Monthly / Milestone</td><td>Often shorter and milestone-based</td></tr>
<tr><td>Performance retention</td><td>4 years</td><td>1 year</td><td>Back-loaded</td><td>10/20/30/40% by year</td></tr>
</tbody>
</table>

<div class="formula-box">
<span class="label">Pre-Cliff (months 1 to cliff − 1)</span>: 0 vested<br>
<span class="label">At Cliff (month = cliff)</span>: Total × (Cliff months / Total months)<br>
<span class="label">Post-Cliff (Monthly)</span>: Each subsequent month adds Total ÷ Total months<br>
<span class="label">Post-Cliff (Quarterly)</span>: Each quarter adds 3 × (Total ÷ Total months)<br>
<span class="label">Post-Cliff (Annual)</span>: Each year adds 12 × (Total ÷ Total months)
</div>
</section>

<section class="content-section" id="cliff">
<h2>How the Cliff Works</h2>
<p>The vesting cliff is the minimum service period required before <em>any</em> options vest. If an employee leaves before the cliff date, they get nothing. If they survive past the cliff, the entire cliff portion vests in a single tranche, then incremental vesting begins.</p>

<h3>Why Cliffs Exist</h3>
<ul>
<li>Protect the company from giving equity to short-tenure hires who don't work out</li>
<li>Align the equity grant with a meaningful productive contribution period</li>
<li>Simplify administration — no need to issue tiny vesting events for the first 12 months</li>
<li>Investor-preferred — most VC term sheets require a minimum 1-year cliff in the ESOP scheme</li>
</ul>

<h3>The 1-Year Cliff Math</h3>
<p>For a 4-year grant with 1-year cliff, 12 out of 48 months are covered by the cliff = 25% of total options. So 25% of the grant vests in one tranche at month 12. The remaining 75% vests across months 13 to 48 (36 months) — at 1/48th of total grant per month.</p>

<h3>SEBI SBEB Regulations Requirement</h3>
<p>The <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI (Share-Based Employee Benefits and Sweat Equity) Regulations 2021</a> mandate a minimum 1-year cliff between option grant and first vest for listed companies. Private unlisted companies are not bound by this rule but most institutional investors require the same standard in their portfolio companies.</p>

<div class="callout warn"><p><strong>Common gotcha — Leave just before the cliff.</strong> Employees who leave on month 11 (one month short of the cliff) receive nothing, even though they've served almost a year. The cliff is a hard threshold, not a gradual phase-in. HR teams should communicate this clearly at offer stage to avoid surprises.</p></div>
</section>

<section class="content-section" id="frequency">
<h2>Monthly vs Quarterly vs Annual — When to Use Each</h2>
<p>The post-cliff vesting frequency affects employee-friendliness, administrative load, and exit-timing optionality.</p>

<table class="rate-table">
<thead><tr><th>Frequency</th><th>Employee-friendliness</th><th>Admin load</th><th>Use case</th></tr></thead>
<tbody>
<tr><td>Monthly</td><td>★★★★★</td><td>Higher</td><td>Standard for tech roles; small forfeiture on early departure</td></tr>
<tr><td>Quarterly</td><td>★★★★</td><td>Medium</td><td>Common for non-tech, simpler payroll integration</td></tr>
<tr><td>Annual</td><td>★★</td><td>Lowest</td><td>Rare; founder-restricted shares; advisor grants</td></tr>
</tbody>
</table>

<h3>Why Frequency Matters at Exit</h3>
<p>Consider an employee on a 4-year vest leaving at month 35 (after 2 years and 11 months):</p>
<ul>
<li><strong>Monthly vesting:</strong> 35/48 = 72.9% vested. Employee keeps 72.9% of grant</li>
<li><strong>Quarterly vesting:</strong> Last vesting event was month 33 (Q11 since grant). 33/48 = 68.75% vested. Two months of accrual lost</li>
<li><strong>Annual vesting:</strong> Last vesting event was month 24 (year 2 anniversary). 50% vested. Eleven months of accrual lost — the employee forfeits nearly a year of options</li>
</ul>

<div class="callout"><p><strong>CA Tip:</strong> Monthly vesting reduces "trapped equity" — situations where an employee delays resignation by weeks just to clear a vesting cliff. Trapped equity creates payroll-overhang costs and can demotivate top performers. Companies running modern HRIS / equity tools (Vega, Carta, Trace) increasingly default to monthly.</p></div>
</section>

<div class="body-cta">
<h3>Need Help Designing Your ESOP Scheme?</h3>
<p>Patron Accounting drafts and files ESOP schemes for Indian private and public companies. Vesting design, SBEB compliance, board and shareholder resolutions, grant letters, FEMA + tax structuring. Pune, Mumbai, Delhi, Gurugram and pan-India.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20help%20with%20ESOP%20scheme%20design%20and%20drafting." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ESOP%20Scheme%20Drafting&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20ESOP%20scheme%20design%20and%20drafting.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="acceleration">
<h2>Acceleration — Single-Trigger vs Double-Trigger</h2>
<p>Accelerated vesting fast-forwards a portion (often 100%) of unvested options on a defined trigger event. It is most commonly negotiated by senior executives and key technical hires.</p>

<h3>Single-Trigger Acceleration</h3>
<p>One event causes immediate acceleration. The trigger is almost always a change of control — acquisition, merger, or IPO. On the trigger date, all unvested options vest instantly. This is the most employee-friendly form of acceleration but causes problems in M&A:</p>
<ul>
<li>An acquirer typically wants employees to stick around for the integration; full-acceleration removes the retention hook</li>
<li>Departing employees may leave the day after closing, taking with them options they haven't fully earned</li>
<li>The acquirer may demand re-negotiation of the deal price to fund top-up retention grants</li>
</ul>

<h3>Double-Trigger Acceleration</h3>
<p>Two events must occur for acceleration: <strong>(1) change of control AND (2) termination of the employee without cause (or constructive dismissal) within a defined window after the trigger, typically 12 months</strong>. This is the industry-standard for senior executive ESOP grants.</p>

<ul>
<li>Aligns interests — acquirer retains incentive to keep the employee; employee gets protection if let go</li>
<li>Investor-preferred — preserves M&A optionality without windfall risk</li>
<li>Best-practice for CEO, CTO, CFO and other top-team grants</li>
</ul>

<h3>Other Acceleration Variants</h3>
<ul>
<li><strong>Partial acceleration</strong> — only 50% or 75% of unvested options accelerate (a compromise between full and none)</li>
<li><strong>Time-based acceleration</strong> — acceleration equivalent to a specific number of months (e.g., 12 months) of additional vesting</li>
<li><strong>Performance milestone acceleration</strong> — tied to business milestones (revenue, exit-valuation thresholds)</li>
</ul>

<div class="callout warn"><p><strong>Investor pushback.</strong> Most VCs strongly resist single-trigger acceleration in standard hires, accepting it only for the CEO and possibly one other C-level. Founders should reserve their negotiating capital for double-trigger across the top 5–10 executives rather than spreading single-trigger thinly.</p></div>
</section>

<section class="content-section" id="sebi">
<h2>SEBI SBEB Regulations &amp; Tax Treatment</h2>
<p>ESOP vesting in India is governed by overlapping laws — the Companies Act 2013, SEBI SBEB Regulations 2021 (for listed companies), and the Income-tax Act 1961 / Income Tax Act 2025.</p>

<h3>Key SEBI SBEB Regulations 2021 Requirements (Listed Companies)</h3>
<ul>
<li><strong>Minimum 1-year cliff</strong> between grant and first vest</li>
<li><strong>Maximum 10-year exercise period</strong> from vesting</li>
<li>ESOP scheme must be approved by special resolution of shareholders</li>
<li>Cap of 1% of paid-up capital per employee grant without separate shareholder approval</li>
<li>Cap on independent director ESOPs to prevent governance conflicts</li>
<li>Mandatory disclosure in the annual report and to the stock exchange</li>
</ul>

<h3>Companies Act 2013 — Section 62(1)(b)</h3>
<p>For private unlisted companies, ESOPs are governed by Section 62(1)(b) of the Companies Act 2013 read with Rule 12 of the Companies (Share Capital and Debentures) Rules 2014. Requirements include:</p>
<ul>
<li>Special resolution of shareholders approving the ESOP scheme</li>
<li>Separate special resolution for any grant exceeding 1% of paid-up capital to any one employee in a financial year</li>
<li>Independent directors and promoters cannot receive ESOPs (except for one-person companies or DPIIT-recognised startups under specific conditions)</li>
<li>Disclosure in the Director's Report</li>
</ul>

<h3>Tax Treatment at Each Stage</h3>
<table class="rate-table">
<thead><tr><th>Stage</th><th>Tax Event</th><th>Provision</th></tr></thead>
<tbody>
<tr><td>Grant</td><td>None</td><td>Vesting does not trigger tax</td></tr>
<tr><td>Vesting</td><td>None</td><td>Just changes status from unvested to exercisable</td></tr>
<tr><td>Exercise</td><td>Perquisite tax (salary)</td><td>Section 17(2)(vi); FMV at exercise − exercise price; TDS by employer under Section 192</td></tr>
<tr><td>Sale of shares</td><td>Capital gains</td><td>Sale price − FMV at exercise; 12.5% LTCG above ₹1.25L (listed) or full 12.5% LTCG (unlisted); slab STCG</td></tr>
<tr><td>Buyback by company</td><td>Section 115QA (in company)</td><td>Buyback tax at 23.296% on the difference; recipient receives net</td></tr>
</tbody>
</table>

<div class="callout"><p><strong>Cross-link:</strong> See the <a href="/tools/esop-perquisite-tax-calculator">ESOP Perquisite Tax Calculator</a> for Section 17(2)(vi) tax computation at exercise, and the <a href="/tools/esop-cost-to-company-calculator">ESOP Cost-to-Company Calculator</a> for Ind AS 102 P&amp;L impact.</p></div>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions About ESOP Vesting</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the standard ESOP vesting schedule in India?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The standard ESOP vesting schedule in Indian startups follows the Silicon Valley template: 4-year total vesting period with a 1-year cliff and monthly vesting thereafter. This means no options vest in the first 12 months, then 25 percent vests at the 12-month cliff in a single tranche, and the remaining 75 percent vests in equal monthly portions over the next 36 months. SEBI SBEB Regulations require a minimum vesting period of 1 year between grant and first vest for listed companies.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is a vesting cliff and why is it used?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A vesting cliff is the minimum period an employee must serve before any options vest. The standard 1-year cliff means employees who leave within 12 months get nothing — protecting the company from giving equity to short-tenure hires. After the cliff, vesting becomes incremental (monthly, quarterly, or annual) for the remainder of the schedule. SEBI SBEB Regulations 2021 mandate a minimum 1-year cliff between option grant and first vest for listed companies.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the difference between monthly, quarterly, and annual vesting?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Monthly vesting releases options every month after the cliff — the most employee-friendly. Quarterly vesting batches three months into a single vest event, simplifying record-keeping. Annual vesting only releases options once a year — least employee-friendly because employees forfeit nearly a year of accrued options if they leave just before the anniversary. Most Indian startups use monthly vesting post-cliff for tech roles, quarterly for non-tech, and annual is rare except in early-stage founder-restricted shares.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What happens to unvested options when an employee leaves?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Unvested options are forfeited and returned to the ESOP pool. The vested options that the employee has accumulated up to the leave date typically have a defined exercise window — commonly 30, 60, or 90 days after the last working day. Unexercised vested options after this window lapse and also return to the pool. The exact mechanics depend on the company's ESOP scheme document and the SBEB regulations.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is single-trigger versus double-trigger acceleration?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Single-trigger acceleration vests all unvested options on a single event — typically a change of control like acquisition or IPO. Double-trigger requires two events: change of control AND the employee being terminated without cause (or constructively dismissed) within a window (usually 12 months) after the change. Investors strongly prefer double-trigger because single-trigger can give departing employees a windfall in M&A. Senior executives commonly negotiate double-trigger; most rank-and-file get no acceleration.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can vesting schedules differ between employees?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. While the standard 4-year monthly with 1-year cliff is common, schedules can vary by seniority, role criticality, and offer negotiation. Founders sometimes have 5 to 6 year vesting with longer cliffs. Senior hires may negotiate front-loaded vesting (more options vesting in year 1) or shorter cliffs. Critical retention hires may have back-loaded vesting (more in years 3-4). All schedules must be documented in the ESOP scheme and individual grant letters.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Does the cliff vest one large tranche or each month catches up?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">At the cliff, the employee vests in one tranche equal to the proportion of the vesting period covered by the cliff. For a 4-year vest with 1-year cliff, 25 percent (12 months / 48 months) vests at the cliff in a single event. After this, monthly vesting begins on the standard schedule. The cliff is a single one-time vest event, not a gradual catch-up. SEBI SBEB Regulations require this minimum 1-year cliff between grant and first vest.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is back-loaded vesting and when is it used?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Back-loaded vesting (also called retention-weighted) puts more options in later years: e.g., 10 percent year 1, 20 percent year 2, 30 percent year 3, 40 percent year 4. The intent is to maximise retention near the end of the vesting period, often used for critical engineering or product hires whose departure mid-tenure would harm the company. Founder-friendly variants are rare in India because most investors push back-loaded structures to align long-term incentives.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How are ESOPs taxed at vesting in India?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No tax arises at vesting in India. ESOPs are taxed at two events: at exercise (Section 17(2)(vi) perquisite — FMV at exercise minus exercise price, taxed as salary) and at sale (capital gains on sale price minus FMV at exercise). Vesting only converts the option from unvested to exercisable status — it is not a taxable event. The Income-tax Act, 1961 and the Income Tax Act, 2025 (effective 1 April 2026) both treat vesting as tax-neutral.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the exercise window after vesting?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The exercise window is the time period during which an employee can exercise vested options. Most Indian ESOP schemes allow exercise at any time during employment plus a window after separation. The typical post-separation window is 30 to 90 days, though some companies offer longer (1 to 10 years) to be employee-friendly. SEBI SBEB Regulations cap the exercise period at 10 years from vesting for listed company ESOPs. The window must be documented in the ESOP scheme.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can ESOP vesting be paused during a leave of absence?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes, most ESOP schemes pause vesting during unpaid leave of absence, sabbatical, or maternity beyond statutory entitlement. Paid leave (vacation, casual leave, sick leave) does not pause vesting. The exact mechanics must be defined in the ESOP scheme document — including which leave types pause, the maximum pause allowed, and whether vesting resumes from the pause point or extends the overall schedule. Indian companies should align this with the Maternity Benefit Act provisions for 26-week paid leave.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the difference between time-based and milestone-based vesting?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Time-based vesting (the standard) releases options based purely on continued employment. Milestone-based vesting requires achievement of specific business or performance milestones — revenue targets, product launches, or KPIs. Milestone vesting is more common for founders, senior executives, and key hires. Hybrid structures combine both: half time-based, half milestone-based. Milestone vesting is harder to administer and requires clear measurable triggers in the grant letter.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is this Vesting Schedule Visualiser a substitute for a CA opinion?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. This visualiser produces a directional timeline based on standard vesting math for HR planning, employee communications, and ESOP scheme design discussions. Actual ESOP schemes must comply with Companies Act 2013, SEBI SBEB Regulations 2021 (for listed companies), Income-tax Act, FEMA pricing rules, and the company's individual scheme document. Always consult a Chartered Accountant and a corporate lawyer before finalising the vesting schedule in your ESOP scheme.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>Need ESOP Scheme Drafting?</h3>
<p>SBEB compliance, board resolutions, vesting schedule design, grant letters — Patron Accounting handles end-to-end ESOP scheme setup.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20drafting%20our%20ESOP%20scheme." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=ESOP%20Scheme%20Help&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20ESOP%20scheme%20drafting.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<div class="sidebar-card"><h3>Related Services</h3>
<a href="/esop-services" class="sidebar-link">ESOP Services Hub <span class="arrow">→</span></a>
<a href="/esop-management-and-compliance-services" class="sidebar-link">ESOP Management &amp; Compliance <span class="arrow">→</span></a>
<a href="/esop-valuation-services" class="sidebar-link">ESOP Valuation Services <span class="arrow">→</span></a>
<a href="/payroll-services" class="sidebar-link">Payroll Services <span class="arrow">→</span></a>
<a href="/secretarial-services" class="sidebar-link">Company Secretarial Services <span class="arrow">→</span></a>
<a href="/startup-registration" class="sidebar-link">Startup India Registration <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Tools</h3>
<a href="/tools/esop-pool-size-calculator" class="sidebar-link">ESOP Pool Size Calculator <span class="arrow">→</span></a>
<a href="/tools/esop-cost-to-company-calculator" class="sidebar-link">ESOP Cost to Company <span class="arrow">→</span></a>
<a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">ESOP Perquisite Tax Calculator <span class="arrow">→</span></a>
<a href="/tools/esop-dilution-calculator" class="sidebar-link">Dilution Impact Calculator <span class="arrow">→</span></a>
<a href="/tools/esop-valuation-calculator" class="sidebar-link">ESOP Valuation Calculator <span class="arrow">→</span></a>
<a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Salary <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>From the Blog</h3>
<a href="/blog/share-transfer-procedure-in-private-limited-company-a-complete-guide" class="sidebar-link">Share Transfer &amp; ESOPs <span class="arrow">→</span></a>
<a href="/blog/authorized-vs-paid-up-capital-everything-startups-must-know" class="sidebar-link">Authorized vs Paid-Up Capital <span class="arrow">→</span></a>
<a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
</div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
function parseINR(raw){if(raw===undefined||raw===null)return NaN;const c=String(raw).replace(/[,\s₹%]/g,'');if(c==='')return NaN;const n=parseFloat(c);return isFinite(n)?n:NaN;}
function showError(msg){const b=document.getElementById('errorBanner');b.textContent=msg;b.classList.add('visible');setTimeout(()=>b.classList.remove('visible'),6000);}
function fmtNum(n){if(!isFinite(n))return '—';return n.toLocaleString('en-IN',{maximumFractionDigits:0});}
function fmtPct(n){if(!isFinite(n))return '—';return n.toFixed(2)+'%';}

let currentFreq = 'monthly';
let currentAccel = 'none';
function setFreq(b){const e=b.closest?(b.closest('.toggle-btn')||b):b;currentFreq=e.dataset.freq;e.parentElement.querySelectorAll('.toggle-btn').forEach(x=>x.classList.remove('active'));e.classList.add('active');if(document.getElementById('resultSection').classList.contains('visible'))calculate(true);}
function setAccel(b){const e=b.closest?(b.closest('.toggle-btn')||b):b;currentAccel=e.dataset.accel;e.parentElement.querySelectorAll('.toggle-btn').forEach(x=>x.classList.remove('active'));e.classList.add('active');if(document.getElementById('resultSection').classList.contains('visible'))calculate(true);}

// Build full vesting schedule
function buildSchedule(total, years, cliffMo, freq){
    const totalMo = years * 12;
    const events = [];
    const cliffAmt = total * cliffMo / totalMo;
    let cumulative = 0;
    // Pre-cliff: month 0 baseline
    events.push({month: 0, event: 'Grant', this: 0, cum: 0, pct: 0});
    // At cliff
    cumulative = cliffAmt;
    events.push({month: cliffMo, event: 'Cliff (' + cliffMo + ' mo)', this: cliffAmt, cum: cumulative, pct: cumulative/total*100, isCliff: true});
    // Post-cliff vesting
    const remaining = total - cliffAmt;
    const remainingMo = totalMo - cliffMo;
    let stepMo;
    if(freq === 'monthly') stepMo = 1;
    else if(freq === 'quarterly') stepMo = 3;
    else stepMo = 12;  // annual
    const perStep = (total / totalMo) * stepMo;
    let m = cliffMo + stepMo;
    while(m <= totalMo){
        cumulative += perStep;
        // Adjust to total at final event
        if(m === totalMo || (m + stepMo > totalMo && Math.abs(cumulative - total) < 0.5)) cumulative = total;
        events.push({month: m, event: freq === 'monthly' ? 'Month ' + m : (freq === 'quarterly' ? 'Q' + Math.round((m-cliffMo)/3) + ' (M' + m + ')' : 'Year ' + (m/12) + ' (M' + m + ')'), this: perStep, cum: cumulative, pct: cumulative/total*100});
        m += stepMo;
    }
    // Ensure last event is at totalMo with cumulative=total
    if(events[events.length-1].month !== totalMo){
        events.push({month: totalMo, event: 'Final', this: total - cumulative, cum: total, pct: 100});
    } else {
        events[events.length-1].cum = total;
        events[events.length-1].pct = 100;
    }
    return events;
}

function vestedAtMonth(events, targetMo){
    let v = 0;
    for(const e of events){
        if(e.month <= targetMo) v = e.cum;
        else break;
    }
    return v;
}

function calculate(silent){
    const total = parseINR(document.getElementById('totalOptions').value);
    const years = parseINR(document.getElementById('vestingYears').value);
    const cliffMo = parseINR(document.getElementById('cliffMonths').value);
    const leaveRaw = document.getElementById('leaveMonth').value.trim();
    const leaveMo = leaveRaw ? parseINR(leaveRaw) : NaN;

    if(!isFinite(total) || total <= 0){showError('Enter a valid total options (greater than 0).');return;}
    if(!isFinite(years) || years <= 0 || years > 10){showError('Vesting period must be 1-10 years.');return;}
    if(!isFinite(cliffMo) || cliffMo < 0){showError('Cliff must be 0 or more months.');return;}
    const totalMo = years * 12;
    if(cliffMo > totalMo){showError('Cliff cannot exceed total vesting period (' + totalMo + ' months).');return;}
    if(leaveRaw && (!isFinite(leaveMo) || leaveMo < 0)){showError('Leave month must be 0 or greater.');return;}

    const events = buildSchedule(total, years, cliffMo, currentFreq);

    // Headline: pick interesting month
    let reportMo, reportVested, reportLabel;
    if(isFinite(leaveMo)){
        reportMo = leaveMo;
        reportLabel = 'Month ' + leaveMo + ' (Leave Event)';
    } else {
        reportMo = cliffMo;
        reportLabel = 'Month ' + cliffMo + ' (Cliff)';
    }
    reportVested = vestedAtMonth(events, reportMo);
    if(isFinite(leaveMo) && leaveMo < cliffMo) reportVested = 0;

    document.getElementById('reportMonth').textContent = reportLabel;
    document.getElementById('resHeadline').textContent = fmtNum(reportVested);
    document.getElementById('resHeadlinePct').textContent = '(' + fmtPct(reportVested/total*100) + ')';
    document.getElementById('resHeadlineMeta').textContent = total.toLocaleString('en-IN') + ' total grant • ' + years + ' year vest • ' + cliffMo + '-month cliff • ' + currentFreq + ' post-cliff';

    // Summary cards
    const atCliff = events.find(e => e.isCliff);
    document.getElementById('resAtCliff').textContent = fmtNum(atCliff ? atCliff.cum : 0);
    document.getElementById('resAtCliffDesc').textContent = atCliff ? fmtPct(atCliff.cum/total*100) + ' at month ' + cliffMo : 'No cliff';
    const perStep = currentFreq === 'monthly' ? total/totalMo : (currentFreq === 'quarterly' ? 3*total/totalMo : 12*total/totalMo);
    document.getElementById('resPerEvent').textContent = fmtNum(perStep);
    document.getElementById('resPerEventDesc').textContent = currentFreq === 'monthly' ? 'Per month' : (currentFreq === 'quarterly' ? 'Per quarter (every 3 mo)' : 'Per year (every 12 mo)');
    document.getElementById('resTotal').textContent = fmtNum(total);

    // Schedule table
    const tbody = document.getElementById('scheduleTableBody');
    tbody.innerHTML = '';
    events.forEach(e => {
        const tr = document.createElement('tr');
        if(e.isCliff) tr.className = 'cliff';
        tr.innerHTML = '<td>' + e.event + '</td><td>' + e.month + '</td><td>' + fmtNum(e.this) + '</td><td>' + fmtNum(e.cum) + '</td><td>' + fmtPct(e.pct) + '</td>';
        tbody.appendChild(tr);
    });
    // Add leave event row if applicable
    if(isFinite(leaveMo) && leaveMo >= 0 && leaveMo <= totalMo){
        const leaveVested = leaveMo < cliffMo ? 0 : vestedAtMonth(events, leaveMo);
        const leaveTr = document.createElement('tr');
        leaveTr.className = 'leave';
        leaveTr.innerHTML = '<td><strong>⚠ Leave Event</strong></td><td>' + leaveMo + '</td><td>—</td><td>' + fmtNum(leaveVested) + ' (kept)</td><td>' + fmtPct(leaveVested/total*100) + '</td>';
        tbody.appendChild(leaveTr);
        // Forfeit row
        const forfeitTr = document.createElement('tr');
        forfeitTr.className = 'leave';
        const forfeit = total - leaveVested;
        forfeitTr.innerHTML = '<td>Forfeited (returned to pool)</td><td>' + leaveMo + '</td><td>—</td><td>' + fmtNum(forfeit) + '</td><td>' + fmtPct(forfeit/total*100) + '</td>';
        tbody.appendChild(forfeitTr);
    }
    // Add acceleration row
    if(currentAccel !== 'none'){
        const accelTr = document.createElement('tr');
        accelTr.className = 'accel';
        accelTr.innerHTML = '<td><strong>✓ Acceleration (' + currentAccel + '-trigger)</strong></td><td>—</td><td>+' + fmtNum(total - (isFinite(leaveMo) ? (leaveMo < cliffMo ? 0 : vestedAtMonth(events, leaveMo)) : vestedAtMonth(events, reportMo))) + '</td><td>' + fmtNum(total) + '</td><td>100.00%</td>';
        tbody.appendChild(accelTr);
    }

    // Leave alert
    const leaveAlert = document.getElementById('leaveAlert');
    if(isFinite(leaveMo) && leaveMo >= 0){
        leaveAlert.style.display = '';
        const leaveVested = leaveMo < cliffMo ? 0 : vestedAtMonth(events, leaveMo);
        const forfeit = total - leaveVested;
        document.getElementById('leaveAlertMonth').textContent = leaveMo;
        document.getElementById('leaveVested').textContent = fmtNum(leaveVested);
        document.getElementById('leaveForfeit').textContent = fmtNum(forfeit);
        document.getElementById('leaveForfeitPct').textContent = fmtPct(forfeit/total*100);
        document.getElementById('legendLeave').style.display = 'inline';
    } else {
        leaveAlert.style.display = 'none';
        document.getElementById('legendLeave').style.display = 'none';
    }

    // Acceleration alert
    const accelAlert = document.getElementById('accelAlert');
    if(currentAccel !== 'none'){
        accelAlert.style.display = '';
        const beforeAccel = isFinite(leaveMo) ? (leaveMo < cliffMo ? 0 : vestedAtMonth(events, leaveMo)) : vestedAtMonth(events, reportMo);
        const boost = total - beforeAccel;
        document.getElementById('accelType').textContent = currentAccel === 'single' ? 'Single-Trigger (acquisition)' : 'Double-Trigger (acquisition + termination)';
        document.getElementById('accelBefore').textContent = fmtNum(beforeAccel);
        document.getElementById('accelBoost').textContent = fmtNum(boost);
        document.getElementById('accelTotal').textContent = fmtNum(total);
        document.getElementById('accelDoubleDesc').style.display = currentAccel === 'double' ? 'list-item' : 'none';
        document.getElementById('legendAccel').style.display = 'inline';
    } else {
        accelAlert.style.display = 'none';
        document.getElementById('legendAccel').style.display = 'none';
    }

    // Render SVG
    renderSVG(events, total, totalMo, cliffMo, isFinite(leaveMo) ? leaveMo : null);

    const section = document.getElementById('resultSection');
    section.classList.add('visible');
    if(!silent) requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
}

function renderSVG(events, total, totalMo, cliffMo, leaveMo){
    const svg = document.getElementById('timelineSVG');
    const W = 800, H = 360, padL = 70, padR = 30, padT = 30, padB = 60;
    const chartW = W - padL - padR;
    const chartH = H - padT - padB;
    const xScale = m => padL + (m / totalMo) * chartW;
    const yScale = v => padT + chartH - (v / total) * chartH;

    let svgInner = '';
    // Background
    svgInner += '<rect x="0" y="0" width="' + W + '" height="' + H + '" fill="#FFFFFF"/>';
    // Grid lines (horizontal at 0/25/50/75/100%)
    for(let p = 0; p <= 100; p += 25){
        const y = yScale(total * p / 100);
        svgInner += '<line x1="' + padL + '" y1="' + y + '" x2="' + (W - padR) + '" y2="' + y + '" stroke="#E5E5E0" stroke-width="1" stroke-dasharray="3,3"/>';
        svgInner += '<text x="' + (padL - 10) + '" y="' + (y + 4) + '" font-family="DM Sans, sans-serif" font-size="11" fill="#888" text-anchor="end">' + p + '%</text>';
    }
    // X-axis labels (years)
    for(let y = 0; y <= totalMo; y += 12){
        const x = xScale(y);
        svgInner += '<line x1="' + x + '" y1="' + (padT + chartH) + '" x2="' + x + '" y2="' + (padT + chartH + 4) + '" stroke="#888" stroke-width="1"/>';
        svgInner += '<text x="' + x + '" y="' + (padT + chartH + 18) + '" font-family="DM Sans, sans-serif" font-size="11" fill="#555" text-anchor="middle">Y' + (y/12) + ' (M' + y + ')</text>';
    }
    // Vested area (step)
    let pathD = 'M ' + xScale(0) + ' ' + yScale(0);
    let lastCum = 0;
    for(const e of events){
        pathD += ' L ' + xScale(e.month) + ' ' + yScale(lastCum);
        pathD += ' L ' + xScale(e.month) + ' ' + yScale(e.cum);
        lastCum = e.cum;
    }
    pathD += ' L ' + xScale(totalMo) + ' ' + yScale(lastCum);
    // Fill area below the step line
    const areaD = pathD + ' L ' + xScale(totalMo) + ' ' + yScale(0) + ' L ' + xScale(0) + ' ' + yScale(0) + ' Z';
    svgInner += '<path d="' + areaD + '" fill="#15365f" fill-opacity="0.15"/>';
    svgInner += '<path d="' + pathD + '" fill="none" stroke="#15365f" stroke-width="2.5"/>';
    // Cliff marker
    if(cliffMo > 0){
        const cx = xScale(cliffMo);
        svgInner += '<line x1="' + cx + '" y1="' + padT + '" x2="' + cx + '" y2="' + (padT + chartH) + '" stroke="#f26522" stroke-width="2" stroke-dasharray="5,3"/>';
        const cliffCum = events.find(e => e.isCliff).cum;
        svgInner += '<circle cx="' + cx + '" cy="' + yScale(cliffCum) + '" r="6" fill="#f26522" stroke="#fff" stroke-width="2"/>';
        svgInner += '<text x="' + cx + '" y="' + (padT - 8) + '" font-family="DM Sans, sans-serif" font-size="11" font-weight="700" fill="#f26522" text-anchor="middle">Cliff: ' + fmtNum(cliffCum) + ' (' + (cliffCum/total*100).toFixed(0) + '%)</text>';
    }
    // Leave marker
    if(leaveMo !== null && leaveMo >= 0 && leaveMo <= totalMo){
        const lx = xScale(leaveMo);
        const lv = leaveMo < cliffMo ? 0 : vestedAtMonth(events, leaveMo);
        svgInner += '<line x1="' + lx + '" y1="' + padT + '" x2="' + lx + '" y2="' + (padT + chartH) + '" stroke="#DC2626" stroke-width="2" stroke-dasharray="5,3"/>';
        svgInner += '<circle cx="' + lx + '" cy="' + yScale(lv) + '" r="6" fill="#DC2626" stroke="#fff" stroke-width="2"/>';
        svgInner += '<text x="' + lx + '" y="' + (padT - 8) + '" font-family="DM Sans, sans-serif" font-size="11" font-weight="700" fill="#DC2626" text-anchor="middle">Leave: ' + fmtNum(lv) + ' kept</text>';
    }
    // Acceleration marker
    if(currentAccel !== 'none'){
        const ax = xScale(totalMo);
        svgInner += '<circle cx="' + ax + '" cy="' + yScale(total) + '" r="7" fill="#059669" stroke="#fff" stroke-width="2"/>';
        svgInner += '<text x="' + (ax - 10) + '" y="' + (yScale(total) - 12) + '" font-family="DM Sans, sans-serif" font-size="11" font-weight="700" fill="#059669" text-anchor="end">100% via acceleration</text>';
    }
    // Y-axis title
    svgInner += '<text x="20" y="' + (padT + chartH/2) + '" font-family="DM Sans, sans-serif" font-size="12" font-weight="700" fill="#15365f" text-anchor="middle" transform="rotate(-90, 20, ' + (padT + chartH/2) + ')">Cumulative Vested Options</text>';
    // X-axis title
    svgInner += '<text x="' + (padL + chartW/2) + '" y="' + (H - 12) + '" font-family="DM Sans, sans-serif" font-size="12" font-weight="700" fill="#15365f" text-anchor="middle">Months from Grant Date</text>';

    svg.innerHTML = svgInner;
}

function exportPNG(){
    const svg = document.getElementById('timelineSVG');
    if(!svg){showError('No timeline to export.');return;}
    const svgData = new XMLSerializer().serializeToString(svg);
    const canvas = document.createElement('canvas');
    const dpr = 2;
    canvas.width = 800 * dpr;
    canvas.height = 360 * dpr;
    const ctx = canvas.getContext('2d');
    ctx.scale(dpr, dpr);
    const img = new Image();
    const svg64 = btoa(unescape(encodeURIComponent(svgData)));
    img.onload = function(){
        ctx.fillStyle = '#FFFFFF';
        ctx.fillRect(0, 0, 800, 360);
        ctx.drawImage(img, 0, 0, 800, 360);
        try {
            const link = document.createElement('a');
            link.download = 'vesting-schedule-timeline.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
        } catch(err){
            showError('PNG export blocked by browser. Use the Print button instead.');
        }
    };
    img.onerror = function(){showError('Could not export PNG. Try Print or download the page.');};
    img.src = 'data:image/svg+xml;base64,' + svg64;
}

function resetCalc(){
    document.getElementById('totalOptions').value = '4800';
    document.getElementById('vestingYears').value = '4';
    document.getElementById('cliffMonths').value = '12';
    document.getElementById('leaveMonth').value = '';
    document.querySelectorAll('.toggle-group').forEach(g=>{g.querySelectorAll('.toggle-btn').forEach(x=>x.classList.remove('active'));});
    document.querySelector('.toggle-btn[data-freq="monthly"]').classList.add('active');
    document.querySelector('.toggle-btn[data-accel="none"]').classList.add('active');
    currentFreq = 'monthly';
    currentAccel = 'none';
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