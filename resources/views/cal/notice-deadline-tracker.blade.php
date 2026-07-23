
@extends('layouts.app')
@section('meta')
<title>Notice Reply Deadline Tracker | Income Tax & GST</title>
<meta name="description" content="Notice reply deadline tracker for Income Tax & GST: get exact reply due date, days remaining, urgency and milestone timeline with Calendar/iCal export. Free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/notice-deadline-tracker">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/notice-deadline-tracker">
<meta property="og:title" content="Notice Reply Deadline Tracker — Tax IT/GST 2026">
<meta property="og:description" content="Exact reply deadline calculator with Google Calendar / iCal reminder export. Free.">
<meta property="og:image" content="/og/notice-deadline-tracker.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Notice Reply Deadline Tracker — Tax IT/GST 2026">
<meta name="twitter:description" content="Days remaining, urgency, milestone timeline + calendar export.">
<meta name="twitter:image" content="/og/notice-deadline-tracker.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"Notice Reply Deadline Tracker","description":"Notice Reply Deadline Tracker computes the exact reply deadline for a tax notice received from the Income-tax Department or the GST Department, based on the notice issuance date and the statutory reply window prescribed under the relevant section. Inputs include the notice type (Income Tax or GST), the specific section or form name (Section 142(1), 143(2), 148, 148A(b), 156, 270A, or 271 for Income Tax; ASMT-10, DRC-01A, DRC-01 Section 73, DRC-01 Section 74, DRC-07, GSTR-3A, or Section 76 for GST — with statutory reply windows auto-populated), the date the notice was received, and the option to manually override the reply window if the notice specifies a non-standard period. The tool outputs the calculated deadline date displayed in Indian Standard Time (IST), the number of days remaining until the deadline, an urgency rating (Critical, High, Medium, or Low based on days remaining), a milestone-based recommended action timeline showing key dates for CA engagement, document compilation, response drafting, review, and filing, along with calendar export options including a one-click Google Calendar event URL and a downloadable iCalendar (.ics) file with multiple advance reminders at 14 days, 7 days, 3 days, and 1 day before the deadline. The tool helps Indian taxpayers and businesses avoid missing tax notice deadlines which trigger consequences such as best-judgment assessment under Section 144 of the Income-tax Act, ex-parte reassessment orders under Section 148, recovery proceedings under Section 226, and final DRC-07 orders under GST with limited mitigation options.","url":"/tools/notice-deadline-tracker","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Notice Reply Deadline Tracker","item":"/tools/notice-deadline-tracker"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"How is the reply deadline for an Income Tax notice calculated?","acceptedAnswer":{"@type":"Answer","text":"The reply deadline equals the notice issuance date plus the statutory reply window specified in the notice. For most Income Tax notices the standard window is 30 days from the date of service of the notice. Some sections have shorter windows: Section 148A(b) show-cause notice is typically 7 to 15 days as specified, and certain rectification or summary procedures may have 15 days. The notice itself states the exact reply deadline — always verify the deadline from the notice text rather than relying solely on calculated estimates. If the deadline falls on a Saturday, Sunday, or public holiday, it generally extends to the next working day, but this varies by department practice."}},
{"@type":"Question","name":"What is the reply window for a Section 143(2) scrutiny notice?","acceptedAnswer":{"@type":"Answer","text":"Section 143(2) scrutiny notices have a 30-day reply window from the date of service. The first reply on the e-Proceedings portal acknowledges the notice and begins the formal scrutiny process. Subsequent rounds of questions and document requests are typically given 7 to 15 days each, but these are managed within the overall faceless assessment timeline. The entire scrutiny assessment must be completed within 12 months from the end of the assessment year, so taxpayers should expect multiple interactions within the year. Missing any deadline can trigger best-judgment assessment under Section 144."}},
{"@type":"Question","name":"What is the reply window for a GST DRC-01 show-cause notice?","acceptedAnswer":{"@type":"Answer","text":"GST DRC-01 show-cause notices issued under Section 73 (non-fraud) or Section 74 (fraud) typically allow 30 days for reply from the date of service. The reply must be filed in form DRC-06 on the GST portal under Returns greater than User Services greater than Notice and Demand. The 30-day period is statutorily prescribed under Rule 142 of the CGST Rules. After receiving the reply, the proper officer must pass the final order in DRC-07 within 3 years (for Section 73) or 5 years (for Section 74) from the due date of annual return. Missing the 30-day window leads to ex-parte order in DRC-07 with full demand and 100 percent penalty under Section 74."}},
{"@type":"Question","name":"Can I get an extension on the tax notice reply deadline?","acceptedAnswer":{"@type":"Answer","text":"Yes — extensions are routinely granted upon written request showing reasonable cause. For Income Tax notices, file an extension request on the e-Proceedings portal explaining the cause (medical emergency, complex documentation, CA unavailability). For GST notices, file the extension request on the GST portal. Typical extensions granted are 7 to 15 days; longer extensions require stronger justification. Always file the extension request BEFORE the original deadline expires — post-expiry requests are often denied. Patron drafts and files extension applications with appropriate supporting documents."}},
{"@type":"Question","name":"What happens if I miss the tax notice reply deadline?","acceptedAnswer":{"@type":"Answer","text":"Income Tax consequences: missing Section 143(2) reply triggers best-judgment assessment under Section 144 with adverse computation and 50 percent under-reporting penalty. Missing Section 148 reply leads to ex-parte reassessment with full income addition. Missing Section 156 demand notice deadline starts Section 220(2) interest at 1 percent per month and recovery proceedings under Section 226 (bank attachment, third-party recovery). GST consequences: missing DRC-01 reply leads to ex-parte DRC-07 order which becomes recoverable. Missing DRC-07 appeal deadline (3 months) makes the order final and unappealable except in limited circumstances. Always reply on time, even with an interim reply requesting extension."}},
{"@type":"Question","name":"How do I add a tax notice deadline to my Google Calendar?","acceptedAnswer":{"@type":"Answer","text":"This tool generates a one-click Google Calendar event URL after you enter the notice details. Click the Google Calendar button after calculation; a pre-filled event opens in a new tab with the deadline date, time, and description. Click Save in Google Calendar to add it. The event includes default reminders at 14, 7, 3, and 1 days before the deadline. For other calendar apps, use the iCalendar (.ics) download option which works with Apple Calendar, Outlook, Thunderbird, Yahoo Calendar, and most other calendar applications. Both options include the four advance reminders."}},
{"@type":"Question","name":"What is the iCalendar (.ics) file format and how do I use it?","acceptedAnswer":{"@type":"Answer","text":"iCalendar (.ics) is a standard calendar file format supported by all major calendar applications (Apple Calendar, Microsoft Outlook, Mozilla Thunderbird, Yahoo Calendar, ProtonMail Calendar, etc.). After clicking the Download .ics button, the file downloads to your device. Open it by double-clicking — your default calendar app will prompt to import the event. The .ics file generated by this tool includes the event title, deadline date, full notice description, and four advance reminders (14 days, 7 days, 3 days, and 1 day before). Once imported, you can edit the event in your calendar app like any other event."}},
{"@type":"Question","name":"How urgent is a 7-day notice reply window?","acceptedAnswer":{"@type":"Answer","text":"A 7-day reply window — typically seen in Section 148A(b) show-cause notices, certain GSTR-3A non-filing notices, and rectification proceedings — is critical urgency. Begin work immediately: (1) Day 1 — verify DIN, read notice, engage CA, identify documents required; (2) Days 2 to 4 — compile documents, reconcile data, draft response; (3) Days 5 to 6 — review with CA, finalise; (4) Day 7 — file response, take acknowledgement. Most 7-day notices cannot accommodate extension requests — the response must be filed within the original window. For Section 148A(b), failure to respond within 7 to 15 days leads directly to Section 148 reassessment notice without further opportunity."}},
{"@type":"Question","name":"What is Section 220(2) interest accrual and when does it start?","acceptedAnswer":{"@type":"Answer","text":"Section 220(2) interest at 1 percent per month accrues on tax demand under Section 156 that remains unpaid after 30 days from the date of demand notice. The interest is simple interest, calculated on the principal demand (tax plus 234A/B/C interest), and continues until full payment. For example, ₹10 lakh demand unpaid for 90 days attracts approximately ₹20,000 additional interest (2 months times 1 percent times ₹10 lakh). The interest does not compound. Patron Accounting files Section 220(6) stay applications along with appeals to stop the accrual clock during legitimate disputes."}},
{"@type":"Question","name":"How do public holidays and weekends affect the deadline?","acceptedAnswer":{"@type":"Answer","text":"In general, if the deadline falls on a Saturday, Sunday, or notified public holiday, it is extended to the next working day under the General Clauses Act, 1897. However, this is not automatic on the e-Proceedings or GST portal — the system may still show the deadline as expired. Best practice: file the response one to two working days before the calculated deadline to avoid any portal-related issues. If you must file on the deadline day, file before 6 PM IST to allow for technical glitches. Patron handles all deadline-day filings with backup paper submission via registered post for critical cases."}},
{"@type":"Question","name":"Can I track multiple tax notice deadlines using this tool?","acceptedAnswer":{"@type":"Answer","text":"This tool calculates one deadline per use. For multiple notices, run the tool separately for each notice and add each calendar event to your calendar app. The Google Calendar and iCal exports use unique event IDs, so adding multiple events does not overwrite earlier ones. Each event includes the notice section and demand amount in the title, making them easy to distinguish in your calendar. Patron offers a deadline management service for businesses with multiple ongoing notices — we maintain a master tracker and send weekly reminders."}},
{"@type":"Question","name":"What time zone does the tool use for deadline calculation?","acceptedAnswer":{"@type":"Answer","text":"All deadlines are computed using Indian Standard Time (IST, UTC plus 5:30) at the day level. The Income Tax e-Proceedings portal and GST portal both operate on IST. A deadline date such as 15 June 2026 means 11:59 PM IST on that date is the cutoff. The Google Calendar event URL uses your local time zone for display, but the underlying date is set as an all-day event so it appears correctly regardless of viewer timezone. The .ics file uses VALUE=DATE for the deadline, ensuring the all-day event appears on the correct calendar date for any timezone."}},
{"@type":"Question","name":"Is this Notice Reply Deadline Tracker legally binding?","acceptedAnswer":{"@type":"Answer","text":"No. The tool's output is advisory only — it computes the deadline based on standard statutory reply windows. The actual deadline applicable to your notice is what is stated in the notice itself, considering any specific deviation, extension granted, or service-of-notice issues. Always verify the deadline from the notice text and engage a Chartered Accountant for the final calculation. Patron Accounting offers free 15-minute notice review calls and end-to-end notice representation including deadline management, response drafting, filing, and hearing representation across Pune, Mumbai, Delhi, Gurugram, Hyderabad, Chennai, Bangalore, Kolkata and pan-India digitally."}}
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
.form-group input[type="date"]{font-family:var(--font-mono)}
.section-title{font-family:var(--font-mono);font-size:11px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin:24px 0 12px;padding-bottom:6px;border-bottom:1px dashed var(--border);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px}
.section-title small{font-weight:500;color:var(--text-muted);text-transform:none;letter-spacing:0.3px}
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:80px;padding:10px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent;min-height:44px;text-align:center}
.toggle-btn *{pointer-events:none}
.toggle-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.toggle-btn:focus-visible{outline:2px solid var(--primary);outline-offset:2px}
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
.result-headline.critical{background:linear-gradient(135deg,#7F1D1D 0%,#991B1B 100%)}
.result-headline.high{background:linear-gradient(135deg,#9A3412 0%,#C2410C 100%)}
.result-headline.medium{background:linear-gradient(135deg,#92400E 0%,#B45309 100%)}
.result-headline.low{background:linear-gradient(135deg,#065F46 0%,#047857 100%)}
.result-headline .label{font-family:var(--font-mono);font-size:11px;text-transform:uppercase;letter-spacing:1.5px;opacity:0.85;margin-bottom:6px}
.result-headline .value{font-family:var(--font-mono);font-size:36px;font-weight:700;line-height:1.1;margin-bottom:6px;word-break:break-word}
.result-headline .accent{color:var(--accent-light)}
.result-headline .meta{font-size:14px;opacity:0.95;margin-top:8px;line-height:1.55}
.summary-grid{display:grid;grid-template-columns:1fr;gap:14px;margin-bottom:16px}
@media (min-width:600px){.summary-grid{grid-template-columns:1fr 1fr 1fr}}
.summary-card{background:var(--surface);border-radius:var(--radius);padding:16px 18px;border:1px solid var(--border)}
.summary-card.highlight{background:#FFF7ED;border-color:var(--accent)}
.summary-card.danger{background:#FEE2E2;border-color:var(--danger)}
.summary-card.warning{background:#FEF3C7;border-color:var(--warning)}
.summary-card.success{background:#ECFDF5;border-color:var(--success)}
.summary-card .v-label{font-family:var(--font-mono);font-size:10px;text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:4px;color:var(--accent)}
.summary-card.success .v-label{color:var(--success)}
.summary-card.warning .v-label{color:var(--warning)}
.summary-card.danger .v-label{color:var(--danger)}
.summary-card .v-val{font-family:var(--font-mono);font-size:20px;font-weight:700;color:var(--primary-dark);word-break:break-word;line-height:1.2}
.summary-card.danger .v-val{color:#991B1B}
.summary-card.warning .v-val{color:#78350F}
.summary-card .v-desc{font-size:12px;color:var(--text-secondary);margin-top:6px;line-height:1.5}
.urgency-banner{padding:14px 18px;border-radius:var(--radius);margin-top:14px;font-size:13px;line-height:1.65;font-weight:600;display:flex;align-items:center;gap:10px;flex-wrap:wrap}
.urgency-banner .u-icon{font-size:22px;flex-shrink:0}
.urgency-banner.critical{background:#FEE2E2;color:#7F1D1D;border:2px solid #DC2626}
.urgency-banner.high{background:#FFEDD5;color:#9A3412;border:2px solid #EA580C}
.urgency-banner.medium{background:#FEF3C7;color:#78350F;border:2px solid #D97706}
.urgency-banner.low{background:#ECFDF5;color:#065F46;border:2px solid #059669}
.urgency-banner .u-meta{flex:1 1 200px;font-weight:500;font-size:12.5px}
.urgency-banner .u-meta strong{font-weight:700}
.timeline-section{background:var(--surface-alt);border-radius:var(--radius);padding:22px 24px;margin-top:18px}
.timeline-section h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:16px;font-weight:700}
.timeline-list{display:flex;flex-direction:column;gap:12px;position:relative}
.timeline-list::before{content:'';position:absolute;left:14px;top:14px;bottom:14px;width:2px;background:var(--border);z-index:0}
.timeline-item{display:flex;gap:14px;align-items:flex-start;position:relative;z-index:1}
.timeline-dot{flex-shrink:0;width:30px;height:30px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-size:11px;font-weight:700;border:3px solid var(--surface-alt);box-shadow:0 0 0 2px var(--border)}
.timeline-item.today .timeline-dot{background:var(--success);box-shadow:0 0 0 2px var(--success)}
.timeline-item.past .timeline-dot{background:#94A3B8;box-shadow:0 0 0 2px #94A3B8}
.timeline-item.deadline .timeline-dot{background:var(--danger);box-shadow:0 0 0 2px var(--danger)}
.timeline-content{flex:1 1 0;min-width:0;padding-top:2px}
.timeline-date{font-family:var(--font-mono);font-size:12px;font-weight:700;color:var(--primary-dark);margin-bottom:2px}
.timeline-date .ddmmyyyy{color:var(--accent)}
.timeline-title{font-size:14px;font-weight:600;color:var(--text);margin-bottom:2px}
.timeline-desc{font-size:12.5px;color:var(--text-secondary);line-height:1.5}
.timeline-item.deadline .timeline-title{color:var(--danger);font-weight:700}
.timeline-item.today .timeline-title{color:var(--success);font-weight:700}
.calendar-export{background:#F0F5FB;border:1px solid #BFDBFE;border-radius:var(--radius);padding:18px 20px;margin-top:18px}
.calendar-export h4{font-family:var(--font-mono);font-size:11px;color:var(--primary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:6px;font-weight:700}
.calendar-export p{font-size:13px;color:var(--text-secondary);margin-bottom:12px;line-height:1.55}
.calendar-buttons{display:flex;gap:10px;flex-wrap:wrap}
.cal-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:10px 16px;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:700;text-decoration:none;border:1.5px solid var(--primary);background:#fff;color:var(--primary);cursor:pointer;transition:all 0.2s;-webkit-tap-highlight-color:transparent;min-height:44px}
.cal-btn:hover{background:var(--primary);color:#fff}
.cal-btn:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.cal-btn .ico{width:16px;height:16px;flex-shrink:0}
.cal-btn-primary{background:var(--primary);color:#fff}
.cal-btn-primary:hover{background:var(--primary-light)}
.section-detail{background:var(--surface-alt);border-radius:var(--radius);padding:20px 24px;margin-top:16px}
.section-detail h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:12px;font-weight:700}
.section-detail p{font-size:14px;color:var(--text-secondary);line-height:1.7;margin-bottom:10px}
.section-detail p strong{color:var(--primary-dark);font-weight:700}
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
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:18px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}.result-headline .value{font-size:26px}.timeline-section{padding:16px 18px}.calendar-buttons{flex-direction:column}.cal-btn{width:100%}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-calculate,.office-strip,.footer,.breadcrumb,.calendar-buttons{display:none !important}body{background:#fff;color:#000;font-size:11pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:16px;margin-bottom:16px}.result-headline,.urgency-banner,.timeline-section,.summary-card{-webkit-print-color-adjust:exact;print-color-adjust:exact}.hero h1{font-size:18pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}.timeline-item{break-inside:avoid}}
</style>

@section('content')

<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner">
<a href="#calculator">Tracker</a><a href="#how-to-use">How to Use</a><a href="#reply-windows">Reply Windows</a><a href="#consequences">Missing Deadlines</a><a href="#extension">Getting Extension</a><a href="#calendar">Calendar Export</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>Notice Reply Deadline Tracker</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>Notice Reply Deadline Tracker — <span>Exact IST Deadline</span> with Calendar Export</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Tax notice deadline approaching? <strong>Free 15-min CA review.</strong> End-to-end response drafting, filing, and hearing representation. Never miss a deadline again.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20have%20a%20tax%20notice%20with%20approaching%20deadline%20and%20need%20a%20free%20review." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Tax%20Notice%20Deadline%20Help&body=Hi%20Patron%20Accounting%2C%0A%0AI%20have%20a%20tax%20notice%20with%20an%20approaching%20deadline%20and%20need%20a%20free%2015-min%20review.%0A%0ANotice%20type%20%28IT%2FGST%29%3A%20%0ASection%3A%20%0ANotice%20date%3A%20%0AReply%20deadline%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>This tracker calculates the <strong>exact reply deadline in IST</strong> for any Income Tax or GST notice. Pick notice type, section/form (reply window auto-populates), enter the date you received the notice — get back the deadline date, <strong>days remaining, urgency rating</strong>, a <strong>milestone-by-milestone action timeline</strong>, and one-click <strong>Google Calendar event + iCalendar (.ics) reminder export</strong> with 14-day, 7-day, 3-day, and 1-day advance alarms. Built for 13 notice types across both regimes. <strong>Missing a deadline can trigger Section 144 best-judgment assessment (IT), DRC-07 ex-parte order (GST), and recovery proceedings — set the reminder now.</strong></p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Notice Reply Deadline Tracker</h2>
<p class="sub">Pick notice type + section. Enter the notice date. Get exact deadline, urgency, milestone timeline, and calendar reminders.</p>
<noscript><div class="noscript-box">This tracker requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="section-title"><span>Notice Type</span><small>Pick one</small></div>
<div class="toggle-group" role="group" aria-label="Notice type">
<button type="button" class="toggle-btn active" data-type="IT" onclick="setNoticeType(this)">Income Tax<br><small style="font-weight:400;font-size:11px;opacity:0.7">CBDT / AO</small></button>
<button type="button" class="toggle-btn" data-type="GST" onclick="setNoticeType(this)">GST<br><small style="font-weight:400;font-size:11px;opacity:0.7">CBIC / SGST</small></button>
</div>

<div class="form-group" style="margin-top:18px;">
<label for="sectionSelect">Section / Form <span class="hint">Reply window auto-populates</span></label>
<select id="sectionSelect" onchange="onSectionChange()" aria-label="Notice section or form"></select>
</div>

<div class="input-grid-2">
<div class="form-group">
<label for="noticeDate">Notice Received Date <span class="hint">Date you got the notice</span></label>
<input type="date" id="noticeDate" autocomplete="off" aria-label="Notice received date">
</div>
<div class="form-group">
<label for="replyWindow">Reply Window (Days) <span class="hint">Override if notice specifies different</span></label>
<input type="number" id="replyWindow" min="1" max="365" value="30" autocomplete="off" aria-label="Reply window in days">
</div>
</div>

<button class="btn-calculate" onclick="calculate()" type="button">Calculate Deadline &amp; Get Reminders</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline" id="resultHeadline">
<div class="label" id="resHeadlineLabel">Reply Deadline</div>
<div class="value"><span class="accent" id="resDeadlineDate">—</span></div>
<div class="meta" id="resDeadlineMeta">—</div>
</div>

<div class="urgency-banner" id="urgencyBanner">
<span class="u-icon" id="urgencyIcon">⚠</span>
<div class="u-meta" id="urgencyMeta">—</div>
</div>

<div class="summary-grid" style="margin-top:16px;">
<div class="summary-card highlight"><div class="v-label">Days Remaining</div><div class="v-val" id="resDaysRemaining">—</div><div class="v-desc" id="resDaysDesc">From today</div></div>
<div class="summary-card"><div class="v-label">Deadline (IST)</div><div class="v-val" id="resDeadlineFull">—</div><div class="v-desc" id="resDeadlineWeekday">—</div></div>
<div class="summary-card success"><div class="v-label">Reply Window</div><div class="v-val" id="resReplyWindow">—</div><div class="v-desc">Statutory period</div></div>
</div>

<div class="timeline-section">
<h4>Recommended Action Timeline</h4>
<div class="timeline-list" id="timelineList"></div>
</div>

<div class="calendar-export">
<h4>📅 Set Reminders</h4>
<p>Add the deadline to your calendar with automatic reminders at 14, 7, 3, and 1 day(s) before. Pick your calendar app:</p>
<div class="calendar-buttons">
<a href="#" id="googleCalLink" class="cal-btn cal-btn-primary" target="_blank" rel="noopener" aria-label="Add to Google Calendar"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7 11h5v5H7v-5zm12 7H5V8h14v10zm0-15h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>Add to Google Calendar</a>
<button type="button" id="icalBtn" class="cal-btn" onclick="downloadICalFile()" aria-label="Download iCal file"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>Download .ics (Apple/Outlook)</button>
</div>
</div>

<div class="section-detail">
<h4>What This Notice Means</h4>
<p id="sectionExplain">—</p>
<h4 style="margin-top:14px;">Consequences of Missing This Deadline</h4>
<p id="sectionConsequences">—</p>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head" id="postCtaHead">Need help responding before the deadline?</div>
<div class="post-result-cta-sub">Patron drafts, reviews, and files end-to-end. Free 15-min review call to confirm strategy. Fixed-fee response packages start at ₹2,500.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20used%20the%20Notice%20Deadline%20Tracker%20and%20need%20help%20with%20my%20reply." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Notice%20Reply%20Help&body=Hi%2C%20I%20need%20help%20with%20my%20notice%20reply.%0A%0ASection%3A%20%0ADeadline%3A%20%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the Deadline Tracker</h2>
<ol>
<li><strong>Pick notice type — Income Tax or GST.</strong> The section dropdown filters accordingly.</li>
<li><strong>Select the section / form.</strong> The reply window auto-populates based on statutory norms (30 days for most, 7-15 days for Section 148A(b) and certain GST forms). If you don't know the section, use the <a href="/tools/notice-section-identifier">Notice Section Identifier tool</a> first.</li>
<li><strong>Enter notice received date.</strong> Defaults to today. If you received the notice earlier, set the actual receipt date — the deadline is computed from this.</li>
<li><strong>Override the reply window if needed.</strong> The notice itself states the exact reply window — if it differs from the statutory default, enter the actual window from the notice.</li>
<li><strong>Click Calculate.</strong> Get the exact deadline date, urgency rating, days remaining, milestone timeline, and calendar export options.</li>
<li><strong>Add to your calendar.</strong> One-click Google Calendar URL, or download the .ics file for Apple Calendar / Outlook / other apps. Four advance reminders (14, 7, 3, 1 day) are built in.</li>
<li><strong>Engage Patron.</strong> Free 15-min review call to validate the deadline + plan the response strategy.</li>
</ol>

<div class="callout warn"><p><strong>Important:</strong> The deadline shown by this tool is a statutory default estimate. The actual deadline applicable to your notice is what is stated in the notice itself. Always verify the exact deadline from the notice text and engage a CA for confirmation.</p></div>
</section>

<section class="content-section" id="reply-windows">
<h2>Reply Windows by Section / Form</h2>

<h3>Income Tax Reply Windows</h3>
<table class="rate-table">
<thead><tr><th>Section</th><th>Purpose</th><th>Standard Reply Window</th><th>Urgency</th></tr></thead>
<tbody>
<tr><td><strong>Section 142(1)</strong></td><td>Information notice / Notice to file return</td><td>15-30 days (as specified)</td><td>Medium</td></tr>
<tr><td><strong>Section 143(2)</strong></td><td>Scrutiny notice — return selected for verification</td><td>30 days</td><td>High</td></tr>
<tr><td><strong>Section 148A(b)</strong></td><td>Show-cause notice before reassessment</td><td>7-15 days (as specified)</td><td>Critical</td></tr>
<tr><td><strong>Section 148</strong></td><td>Reassessment notice — file return for relevant AY</td><td>30 days</td><td>High</td></tr>
<tr><td><strong>Section 156</strong></td><td>Notice of demand — tax payable</td><td>30 days to pay</td><td>High</td></tr>
<tr><td><strong>Section 270A / 270AA</strong></td><td>Penalty proceedings / waiver application (Form 68)</td><td>30 days / 1 month for Form 68</td><td>High</td></tr>
<tr><td><strong>Section 271 / 271(1)(c)</strong></td><td>Concealment penalty (legacy regime)</td><td>30 days</td><td>High</td></tr>
<tr><td><strong>Section 245</strong></td><td>Adjustment of refund against demand</td><td>15-30 days</td><td>Medium</td></tr>
<tr><td><strong>Section 226(3)</strong></td><td>Recovery notice to third party (bank, debtor)</td><td>Immediate compliance</td><td>Critical</td></tr>
</tbody>
</table>

<h3>GST Reply Windows</h3>
<table class="rate-table">
<thead><tr><th>Form / Section</th><th>Purpose</th><th>Standard Reply Window</th><th>Urgency</th></tr></thead>
<tbody>
<tr><td><strong>ASMT-10 / Section 61</strong></td><td>Scrutiny of returns — explain discrepancy</td><td>30 days</td><td>Medium</td></tr>
<tr><td><strong>DRC-01A</strong></td><td>Pre-show-cause intimation (Section 74)</td><td>15 days</td><td>Medium</td></tr>
<tr><td><strong>DRC-01 (Section 73)</strong></td><td>Show-cause notice — non-fraud demand</td><td>30 days</td><td>High</td></tr>
<tr><td><strong>DRC-01 (Section 74)</strong></td><td>Show-cause notice — fraud / suppression</td><td>30 days</td><td>High</td></tr>
<tr><td><strong>DRC-07</strong></td><td>Final order — appeal window</td><td>3 months for appeal</td><td>Critical</td></tr>
<tr><td><strong>GSTR-3A</strong></td><td>Non-filing of returns notice</td><td>15 days to file</td><td>High</td></tr>
<tr><td><strong>Section 76</strong></td><td>Tax collected, not paid — pay + reply</td><td>30 days</td><td>High</td></tr>
<tr><td><strong>DRC-13</strong></td><td>Recovery from third party</td><td>Immediate compliance</td><td>Critical</td></tr>
</tbody>
</table>

<div class="callout"><p><strong>Note on Sundays and Holidays:</strong> Under the General Clauses Act, 1897, if the last day for response falls on a Sunday or notified public holiday, the deadline extends to the next working day. However, the e-Proceedings / GST portal does not always auto-adjust — best practice is to file 1-2 working days before the calculated deadline.</p></div>
</section>

<section class="content-section" id="consequences">
<h2>What Happens If You Miss the Deadline</h2>

<h3>Income Tax Consequences</h3>
<ul>
<li><strong>Section 142(1) non-response:</strong> Escalation to Section 143(2) scrutiny; eventual Section 144 best-judgment assessment with 270A penalty</li>
<li><strong>Section 143(2) non-response:</strong> Section 144 best-judgment assessment — AO makes adverse computation; 50 percent under-reporting penalty likely</li>
<li><strong>Section 148A(b) non-response:</strong> Direct Section 148 reassessment without further opportunity; ex-parte reassessment risk</li>
<li><strong>Section 148 non-response:</strong> Ex-parte reassessment with full income addition; Section 271(1)(c) / 270A penalty</li>
<li><strong>Section 156 non-payment:</strong> Section 220(2) interest at 1 percent per month starts (after 30 days); recovery proceedings under Section 226 (bank attachment, third-party recovery)</li>
<li><strong>Section 270A non-response:</strong> Ex-parte penalty order at maximum 50 percent or 200 percent rate; Section 270AA waiver becomes unavailable</li>
</ul>

<h3>GST Consequences</h3>
<ul>
<li><strong>ASMT-10 non-response:</strong> Escalation to DRC-01 under Section 73 / 74; 10 percent / 100 percent penalty exposure begins</li>
<li><strong>DRC-01A non-response:</strong> Direct DRC-01 SCN under Section 74; 15 percent early-payment benefit lost</li>
<li><strong>DRC-01 non-response:</strong> Ex-parte DRC-07 order with full demand + penalty (10 percent for Section 73, 100 percent for Section 74)</li>
<li><strong>DRC-07 non-appeal within 3 months:</strong> Order becomes final and unappealable except in limited circumstances; recovery proceedings under Section 79 (bank attachment, property attachment)</li>
<li><strong>GSTR-3A non-compliance:</strong> Suspension or cancellation of GST registration; reversal of ITC for buyers</li>
<li><strong>Section 76 non-payment:</strong> 18 percent p.a. interest accrual continues; recovery action under Section 79</li>
</ul>

<div class="callout danger"><p><strong>Recovery Proceedings.</strong> Once recovery starts under Section 226 (IT) or Section 79 (GST), the department can attach bank accounts, recover from debtors, and even arrest in extreme cases. Always reply on time, even with an interim reply requesting extension — silence is the worst response.</p></div>
</section>

<div class="body-cta">
<h3>Free 15-Min Deadline Review</h3>
<p>Send us the notice; we'll confirm the deadline, recommend response strategy, and provide a fee estimate in 15 minutes. Free, no commitment.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20a%20free%20deadline%20review%20on%20my%20tax%20notice." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Deadline%20Review&body=Hi%2C%20we%27d%20like%20a%20free%2015-min%20notice%20deadline%20review.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="extension">
<h2>How to Request a Deadline Extension</h2>
<p>Extensions on tax notice reply deadlines are routinely granted upon written request showing reasonable cause. Critical rule: <strong>always file the extension request before the original deadline expires</strong>. Post-expiry requests are typically denied.</p>

<h3>Income Tax — Extension Procedure</h3>
<ol>
<li>Login to incometax.gov.in &rarr; e-Proceedings &rarr; Find the relevant notice</li>
<li>Click View Notice &rarr; Reply &rarr; Select Request for Adjournment / Extension</li>
<li>Enter the reason: medical emergency / complex documentation / CA unavailability / festival season / personal travel</li>
<li>Attach supporting documents (medical certificate, travel proof, etc.)</li>
<li>Specify the additional time requested (typically 7-15 days)</li>
<li>Submit and take screenshot of acknowledgement</li>
</ol>

<h3>GST — Extension Procedure</h3>
<ol>
<li>Login to gst.gov.in &rarr; Services &rarr; User Services &rarr; View Notices and Orders</li>
<li>Find the relevant notice &rarr; Reply</li>
<li>Select Adjournment Request as the reply type</li>
<li>Enter reason and supporting details</li>
<li>Submit on portal and follow up with the proper officer if response not received in 3 days</li>
</ol>

<div class="callout success"><p><strong>Patron's Track Record:</strong> 90 percent of properly justified extension requests are approved. Patron drafts and files extension applications with the appropriate cause + documents, increasing approval probability significantly.</p></div>
</section>

<section class="content-section" id="calendar">
<h2>Calendar Reminder Export — Google Calendar &amp; iCalendar</h2>
<p>This tool generates two calendar export options after deadline calculation:</p>

<h3>Google Calendar (One-Click)</h3>
<ol>
<li>Click <strong>Add to Google Calendar</strong> button after calculation</li>
<li>A pre-filled event opens in a new browser tab in your Google Calendar</li>
<li>Click <strong>Save</strong> in Google Calendar — the event is added with the deadline as an all-day event</li>
<li>Default reminders at 14 days, 7 days, 3 days, and 1 day before the deadline are included</li>
<li>You can edit the event in Google Calendar after saving (add attendees, change reminders, etc.)</li>
</ol>

<h3>iCalendar (.ics) File — Apple / Outlook / Other Apps</h3>
<ol>
<li>Click <strong>Download .ics</strong> button after calculation</li>
<li>The .ics file downloads to your device (typically Downloads folder)</li>
<li>Double-click the file — your default calendar app prompts to import</li>
<li>Compatible with: Apple Calendar (Mac, iPhone, iPad), Microsoft Outlook (Windows, Mac, web), Mozilla Thunderbird, Yahoo Calendar, ProtonMail Calendar, and most other calendar apps</li>
<li>The same 14/7/3/1 day reminders are included in the .ics format</li>
</ol>

<div class="callout"><p><strong>Multi-Device Tip:</strong> If you use both Google Calendar and Apple Calendar, add the event via Google Calendar — it will sync to your iPhone / iPad via Google account, while iCal-imported events stay local to one device.</p></div>

<h3>What the Calendar Event Contains</h3>
<ul>
<li><strong>Event title:</strong> Tax Notice Reply Deadline — [Section] (e.g., "Tax Notice Reply Deadline — Section 143(2)")</li>
<li><strong>Event date:</strong> The calculated deadline date as an all-day event in IST</li>
<li><strong>Description:</strong> Notice section, original notice date, reply window, action items, and Patron contact info</li>
<li><strong>Reminders:</strong> 14 days, 7 days, 3 days, and 1 day before deadline (configurable after import)</li>
<li><strong>Location:</strong> India (online portal filing)</li>
</ul>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is the reply deadline for an Income Tax notice calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The reply deadline equals the notice issuance date plus the statutory reply window specified in the notice. For most Income Tax notices the standard window is 30 days from the date of service of the notice. Some sections have shorter windows: Section 148A(b) show-cause notice is typically 7 to 15 days as specified, and certain rectification or summary procedures may have 15 days. The notice itself states the exact reply deadline — always verify the deadline from the notice text rather than relying solely on calculated estimates. If the deadline falls on a Saturday, Sunday, or public holiday, it generally extends to the next working day, but this varies by department practice.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the reply window for a Section 143(2) scrutiny notice?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 143(2) scrutiny notices have a 30-day reply window from the date of service. The first reply on the e-Proceedings portal acknowledges the notice and begins the formal scrutiny process. Subsequent rounds of questions and document requests are typically given 7 to 15 days each, but these are managed within the overall faceless assessment timeline. The entire scrutiny assessment must be completed within 12 months from the end of the assessment year, so taxpayers should expect multiple interactions within the year. Missing any deadline can trigger best-judgment assessment under Section 144.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the reply window for a GST DRC-01 show-cause notice?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">GST DRC-01 show-cause notices issued under Section 73 (non-fraud) or Section 74 (fraud) typically allow 30 days for reply from the date of service. The reply must be filed in form DRC-06 on the GST portal under Returns greater than User Services greater than Notice and Demand. The 30-day period is statutorily prescribed under Rule 142 of the CGST Rules. After receiving the reply, the proper officer must pass the final order in DRC-07 within 3 years (for Section 73) or 5 years (for Section 74) from the due date of annual return. Missing the 30-day window leads to ex-parte order in DRC-07 with full demand and 100 percent penalty under Section 74.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can I get an extension on the tax notice reply deadline?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes — extensions are routinely granted upon written request showing reasonable cause. For Income Tax notices, file an extension request on the e-Proceedings portal explaining the cause (medical emergency, complex documentation, CA unavailability). For GST notices, file the extension request on the GST portal. Typical extensions granted are 7 to 15 days; longer extensions require stronger justification. Always file the extension request BEFORE the original deadline expires — post-expiry requests are often denied. Patron drafts and files extension applications with appropriate supporting documents.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What happens if I miss the tax notice reply deadline?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Income Tax consequences: missing Section 143(2) reply triggers best-judgment assessment under Section 144 with adverse computation and 50 percent under-reporting penalty. Missing Section 148 reply leads to ex-parte reassessment with full income addition. Missing Section 156 demand notice deadline starts Section 220(2) interest at 1 percent per month and recovery proceedings under Section 226 (bank attachment, third-party recovery). GST consequences: missing DRC-01 reply leads to ex-parte DRC-07 order which becomes recoverable. Missing DRC-07 appeal deadline (3 months) makes the order final and unappealable except in limited circumstances. Always reply on time, even with an interim reply requesting extension.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How do I add a tax notice deadline to my Google Calendar?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">This tool generates a one-click Google Calendar event URL after you enter the notice details. Click the Google Calendar button after calculation; a pre-filled event opens in a new tab with the deadline date, time, and description. Click Save in Google Calendar to add it. The event includes default reminders at 14, 7, 3, and 1 days before the deadline. For other calendar apps, use the iCalendar (.ics) download option which works with Apple Calendar, Outlook, Thunderbird, Yahoo Calendar, and most other calendar applications. Both options include the four advance reminders.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the iCalendar (.ics) file format and how do I use it?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">iCalendar (.ics) is a standard calendar file format supported by all major calendar applications (Apple Calendar, Microsoft Outlook, Mozilla Thunderbird, Yahoo Calendar, ProtonMail Calendar, etc.). After clicking the Download .ics button, the file downloads to your device. Open it by double-clicking — your default calendar app will prompt to import the event. The .ics file generated by this tool includes the event title, deadline date, full notice description, and four advance reminders (14 days, 7 days, 3 days, and 1 day before). Once imported, you can edit the event in your calendar app like any other event.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How urgent is a 7-day notice reply window?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A 7-day reply window — typically seen in Section 148A(b) show-cause notices, certain GSTR-3A non-filing notices, and rectification proceedings — is critical urgency. Begin work immediately: (1) Day 1 — verify DIN, read notice, engage CA, identify documents required; (2) Days 2 to 4 — compile documents, reconcile data, draft response; (3) Days 5 to 6 — review with CA, finalise; (4) Day 7 — file response, take acknowledgement. Most 7-day notices cannot accommodate extension requests — the response must be filed within the original window. For Section 148A(b), failure to respond within 7 to 15 days leads directly to Section 148 reassessment notice without further opportunity.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is Section 220(2) interest accrual and when does it start?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 220(2) interest at 1 percent per month accrues on tax demand under Section 156 that remains unpaid after 30 days from the date of demand notice. The interest is simple interest, calculated on the principal demand (tax plus 234A/B/C interest), and continues until full payment. For example, ₹10 lakh demand unpaid for 90 days attracts approximately ₹20,000 additional interest (2 months times 1 percent times ₹10 lakh). The interest does not compound. Patron Accounting files Section 220(6) stay applications along with appeals to stop the accrual clock during legitimate disputes.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How do public holidays and weekends affect the deadline?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">In general, if the deadline falls on a Saturday, Sunday, or notified public holiday, it is extended to the next working day under the General Clauses Act, 1897. However, this is not automatic on the e-Proceedings or GST portal — the system may still show the deadline as expired. Best practice: file the response one to two working days before the calculated deadline to avoid any portal-related issues. If you must file on the deadline day, file before 6 PM IST to allow for technical glitches. Patron handles all deadline-day filings with backup paper submission via registered post for critical cases.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can I track multiple tax notice deadlines using this tool?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">This tool calculates one deadline per use. For multiple notices, run the tool separately for each notice and add each calendar event to your calendar app. The Google Calendar and iCal exports use unique event IDs, so adding multiple events does not overwrite earlier ones. Each event includes the notice section and demand amount in the title, making them easy to distinguish in your calendar. Patron offers a deadline management service for businesses with multiple ongoing notices — we maintain a master tracker and send weekly reminders.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What time zone does the tool use for deadline calculation?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">All deadlines are computed using Indian Standard Time (IST, UTC plus 5:30) at the day level. The Income Tax e-Proceedings portal and GST portal both operate on IST. A deadline date such as 15 June 2026 means 11:59 PM IST on that date is the cutoff. The Google Calendar event URL uses your local time zone for display, but the underlying date is set as an all-day event so it appears correctly regardless of viewer timezone. The .ics file uses VALUE=DATE for the deadline, ensuring the all-day event appears on the correct calendar date for any timezone.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is this Notice Reply Deadline Tracker legally binding?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. The tool's output is advisory only — it computes the deadline based on standard statutory reply windows. The actual deadline applicable to your notice is what is stated in the notice itself, considering any specific deviation, extension granted, or service-of-notice issues. Always verify the deadline from the notice text and engage a Chartered Accountant for the final calculation. Patron Accounting offers free 15-minute notice review calls and end-to-end notice representation including deadline management, response drafting, filing, and hearing representation across Pune, Mumbai, Delhi, Gurugram, Hyderabad, Chennai, Bangalore, Kolkata and pan-India digitally.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>Free Deadline Review</h3>
<p>15-min review call. Confirm deadline + response strategy + fee estimate. Never miss a tax deadline.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20a%20free%2015-min%20deadline%20review." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Notice%20Deadline%20Review&body=Hi%2C%20we%27d%20like%20a%20free%20deadline%20review.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
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
<a href="/tools/notice-penalty-calculator" class="sidebar-link">Notice Penalty Calculator <span class="arrow">→</span></a>
<a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
<a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator <span class="arrow">→</span></a>
</div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
function showError(msg){const b=document.getElementById('errorBanner');b.textContent=msg;b.classList.add('visible');setTimeout(()=>b.classList.remove('visible'),6000);}

let currentType = 'IT';

const SECTIONS = {
    IT: [
        {val: '142_1', label: 'Section 142(1) — Information / Return notice', days: 30, explain: 'A preliminary information notice asking for documents, accounts, or explanations, or to file a return. The AO may proceed to scrutiny under Section 143(2) if not satisfied with the response.', miss: 'Escalation to Section 143(2) scrutiny, eventual Section 144 best-judgment assessment with 270A penalty up to 50% of tax.'},
        {val: '143_2', label: 'Section 143(2) — Scrutiny notice', days: 30, explain: 'Scrutiny notice — your filed return has been selected for detailed verification. Must be served within 3 months from the end of FY in which return was filed.', miss: 'Section 144 best-judgment assessment with adverse computation and 50% under-reporting penalty under Section 270A. Substantial demand likely.'},
        {val: '148A_b', label: 'Section 148A(b) — Show-cause before reassessment', days: 7, explain: 'Show-cause notice that the AO must issue BEFORE issuing a Section 148 reassessment notice. Mandatory since Finance Act 2021.', miss: 'AO proceeds to issue Section 148 reassessment notice. Critical procedural opportunity is lost.'},
        {val: '148', label: 'Section 148 — Reassessment notice', days: 30, explain: 'Reassessment of income that has allegedly escaped assessment. File return for the relevant AY within 30 days. Procedural challenges (148A defects) available.', miss: 'Ex-parte reassessment with full income addition; Section 271(1)(c) / 270A penalty up to 200% of tax.'},
        {val: '156', label: 'Section 156 — Notice of demand', days: 30, explain: 'Formal demand notice following assessment / reassessment order. Pay within 30 days or appeal with stay application under Section 220(6).', miss: 'Section 220(2) interest at 1% per month starts accruing; recovery proceedings under Section 226 (bank attachment, third-party recovery, property attachment).'},
        {val: '270A', label: 'Section 270A — Penalty proceedings', days: 30, explain: 'Penalty proceedings for under-reporting (50%) or misreporting (200%) of income. Section 270AA provides full waiver if conditions met.', miss: 'Ex-parte penalty order at maximum rate (50% or 200%); Section 270AA waiver becomes unavailable; appeal becomes the only remedy.'},
        {val: '271', label: 'Section 271(1)(c) — Concealment penalty (legacy)', days: 30, explain: 'Legacy concealment penalty (100% to 300% of tax) for assessment years prior to FY 2017-18. Now superseded by Section 270A.', miss: 'Ex-parte penalty order at maximum rate (up to 300%); Reliance Petroproducts and MAK Data defences become unavailable; appeal becomes the only remedy.'}
    ],
    GST: [
        {val: 'asmt10', label: 'ASMT-10 — Scrutiny of returns (Section 61)', days: 30, explain: 'Scrutiny notice for discrepancy in returns (GSTR-1 vs 3B vs 2B mismatch). Satisfactory response often prevents DRC-01 escalation.', miss: 'Escalation to DRC-01 under Section 73 or 74; 10% to 100% penalty exposure begins.'},
        {val: 'drc01a', label: 'DRC-01A — Pre-show-cause intimation', days: 15, explain: 'Pre-show-cause intimation under Rule 142(1A) for Section 74 cases. Pay tax + interest + 15% penalty to close proceedings without formal SCN.', miss: 'Direct DRC-01 SCN under Section 74; 15% early-payment benefit lost; penalty exposure jumps to 25% (pre-order) or 100% (post-order).'},
        {val: 'drc01_73', label: 'DRC-01 — SCN under Section 73 (non-fraud)', days: 30, explain: 'Show-cause notice for tax not paid/short paid (non-fraud). Penalty 10% of tax or ₹10,000 min. Pay before order = NIL penalty.', miss: 'Ex-parte DRC-07 order with full demand + 10% penalty + 18% p.a. interest from due date.'},
        {val: 'drc01_74', label: 'DRC-01 — SCN under Section 74 (fraud)', days: 30, explain: 'Show-cause notice for fraud / willful misstatement / suppression cases. 100% penalty post-order. Pre-order payment caps penalty at 25%.', miss: 'Ex-parte DRC-07 order with 100% penalty + 18% p.a. interest. Section 73 re-categorisation defence becomes harder post-order.'},
        {val: 'drc07', label: 'DRC-07 — Final order (appeal window)', days: 90, explain: 'Final adjudication order. Appeal lies with First Appellate Authority within 3 months. 10% pre-deposit of disputed tax required.', miss: 'Order becomes final and unappealable except in limited circumstances; recovery proceedings under Section 79 (bank attachment, property attachment).'},
        {val: 'gstr3a', label: 'GSTR-3A — Non-filing of returns notice', days: 15, explain: 'Notice for non-filing of GSTR-1 / GSTR-3B for one or more periods. File all pending returns with late fee + interest within 15 days.', miss: 'Suspension or cancellation of GST registration; reversal of ITC for buyers; loss of business credibility.'},
        {val: 's76', label: 'Section 76 — Tax collected, not paid', days: 30, explain: 'Tax collected from customers but not deposited with government — strict-liability provision. 100% penalty mandatory. Pay immediately to limit cumulative exposure.', miss: '18% p.a. interest accrual continues; recovery action under Section 79; criminal prosecution risk under Section 132 for amounts above thresholds.'}
    ]
};

function renderSectionDropdown(){
    const sel = document.getElementById('sectionSelect');
    sel.innerHTML = '';
    SECTIONS[currentType].forEach(s => {
        const opt = document.createElement('option');
        opt.value = s.val;
        opt.textContent = s.label;
        sel.appendChild(opt);
    });
    onSectionChange();
}

function onSectionChange(){
    const val = document.getElementById('sectionSelect').value;
    const s = SECTIONS[currentType].find(x => x.val === val);
    if(s) document.getElementById('replyWindow').value = s.days;
}

function setNoticeType(b){
    const e = b.closest ? (b.closest('.toggle-btn') || b) : b;
    currentType = e.dataset.type;
    e.parentElement.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));
    e.classList.add('active');
    renderSectionDropdown();
}

function daysBetween(d1, d2){
    const oneDay = 24*60*60*1000;
    const a = new Date(d1.getFullYear(), d1.getMonth(), d1.getDate());
    const b = new Date(d2.getFullYear(), d2.getMonth(), d2.getDate());
    return Math.round((b - a) / oneDay);
}

function formatDate(d){
    const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
}

function formatDateShort(d){
    const dd = String(d.getDate()).padStart(2,'0');
    const mm = String(d.getMonth()+1).padStart(2,'0');
    const yyyy = d.getFullYear();
    return dd + '/' + mm + '/' + yyyy;
}

function getWeekday(d){
    const days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    return days[d.getDay()];
}

function formatYMD(d){
    const yyyy = d.getFullYear();
    const mm = String(d.getMonth()+1).padStart(2,'0');
    const dd = String(d.getDate()).padStart(2,'0');
    return yyyy + mm + dd;
}

function addDays(d, n){
    const r = new Date(d.getTime());
    r.setDate(r.getDate() + n);
    return r;
}

let currentDeadline = null;
let currentSection = null;
let currentNoticeDate = null;

function calculate(){
    const noticeDateStr = document.getElementById('noticeDate').value;
    const sectionVal = document.getElementById('sectionSelect').value;
    const replyWindow = parseInt(document.getElementById('replyWindow').value) || 0;

    if(!noticeDateStr){ showError('Please enter the notice received date.'); return; }
    if(replyWindow < 1 || replyWindow > 365){ showError('Reply window must be between 1 and 365 days.'); return; }

    const noticeDate = new Date(noticeDateStr + 'T00:00:00');
    if(isNaN(noticeDate.getTime())){ showError('Invalid notice date. Please pick a valid date.'); return; }
    const today = new Date();
    const deadlineDate = addDays(noticeDate, replyWindow);

    const daysRemaining = daysBetween(today, deadlineDate);
    const section = SECTIONS[currentType].find(s => s.val === sectionVal);

    currentDeadline = deadlineDate;
    currentSection = section;
    currentNoticeDate = noticeDate;

    // Determine urgency
    let urgency, urgencyLabel, urgencyDesc, urgencyIcon;
    if(daysRemaining < 0){
        urgency = 'critical'; urgencyLabel = 'OVERDUE'; urgencyIcon = '🚨';
        urgencyDesc = '<strong>Deadline expired ' + Math.abs(daysRemaining) + ' day(s) ago.</strong> Immediate action — file an interim reply with extension request TODAY to limit consequences.';
    } else if(daysRemaining === 0){
        urgency = 'critical'; urgencyLabel = 'DUE TODAY'; urgencyIcon = '🚨';
        urgencyDesc = '<strong>Deadline is TODAY.</strong> File response before 6 PM IST. Engage Patron immediately for emergency filing.';
    } else if(daysRemaining <= 3){
        urgency = 'critical'; urgencyLabel = 'CRITICAL'; urgencyIcon = '🚨';
        urgencyDesc = '<strong>Only ' + daysRemaining + ' day(s) left.</strong> Engage CA immediately for accelerated response.';
    } else if(daysRemaining <= 10){
        urgency = 'high'; urgencyLabel = 'HIGH URGENCY'; urgencyIcon = '⚠';
        urgencyDesc = '<strong>' + daysRemaining + ' day(s) remaining.</strong> Begin drafting today — typical response takes 7-10 days with full documentation.';
    } else if(daysRemaining <= 20){
        urgency = 'medium'; urgencyLabel = 'MEDIUM URGENCY'; urgencyIcon = '⚡';
        urgencyDesc = '<strong>' + daysRemaining + ' day(s) remaining.</strong> Engage CA within next 5 days; plan documentation and drafting now.';
    } else {
        urgency = 'low'; urgencyLabel = 'COMFORTABLE WINDOW'; urgencyIcon = '✓';
        urgencyDesc = '<strong>' + daysRemaining + ' day(s) remaining.</strong> Comfortable timeline — engage CA within 2 weeks to plan thorough response.';
    }

    // Populate result
    const rh = document.getElementById('resultHeadline');
    rh.classList.remove('critical','high','medium','low');
    rh.classList.add(urgency);
    document.getElementById('resHeadlineLabel').textContent = daysRemaining < 0 ? 'Deadline Expired On' : 'Reply Deadline (IST)';
    document.getElementById('resDeadlineDate').textContent = formatDate(deadlineDate);
    document.getElementById('resDeadlineMeta').textContent = section.label + ' · Notice received ' + formatDate(noticeDate);

    const ub = document.getElementById('urgencyBanner');
    ub.classList.remove('critical','high','medium','low');
    ub.classList.add(urgency);
    document.getElementById('urgencyIcon').textContent = urgencyIcon;
    document.getElementById('urgencyMeta').innerHTML = '<strong>' + urgencyLabel + '</strong> — ' + urgencyDesc;

    document.getElementById('resDaysRemaining').textContent = daysRemaining < 0 ? 'OVERDUE by ' + Math.abs(daysRemaining) : daysRemaining;
    document.getElementById('resDaysDesc').textContent = daysRemaining < 0 ? 'Days past deadline' : (daysRemaining === 0 ? 'Due today' : 'Days from today');
    document.getElementById('resDeadlineFull').textContent = formatDateShort(deadlineDate);
    document.getElementById('resDeadlineWeekday').textContent = getWeekday(deadlineDate) + ' · 11:59 PM IST';
    document.getElementById('resReplyWindow').textContent = replyWindow + ' days';

    // Generate timeline
    generateTimeline(noticeDate, deadlineDate, today, replyWindow);

    // Generate calendar URLs
    setupCalendarExports(section, noticeDate, deadlineDate, replyWindow);

    document.getElementById('sectionExplain').textContent = section.explain;
    document.getElementById('sectionConsequences').textContent = section.miss;

    document.getElementById('postCtaHead').textContent = daysRemaining < 0 ? 'Deadline expired — get help filing extension request' : (urgency === 'critical' ? 'URGENT — get a CA on the case today' : 'Get expert help before the deadline');

    const sec = document.getElementById('resultSection');
    sec.classList.add('visible');
    requestAnimationFrame(function(){requestAnimationFrame(function(){sec.scrollIntoView({behavior:'smooth',block:'start'});});});
}

function generateTimeline(noticeDate, deadlineDate, today, replyWindow){
    const list = document.getElementById('timelineList');
    list.innerHTML = '';

    // Compute milestones based on reply window
    const m1Days = 1; // CA engagement
    const m2Days = Math.max(2, Math.floor(replyWindow * 0.3)); // Docs complete
    const m3Days = Math.max(m2Days + 1, Math.floor(replyWindow * 0.65)); // Draft complete
    const m4Days = Math.max(m3Days + 1, replyWindow - 2); // Review complete (2-day buffer)

    const milestones = [
        {date: noticeDate, title: 'Notice Received', desc: 'Document Identification Number (DIN) verification, read full notice text, log into e-Proceedings / GST portal'},
        {date: addDays(noticeDate, m1Days), title: 'Day ' + m1Days + ' — Engage CA', desc: 'Free 15-min review call with Patron. Identify section, build response strategy, list documents required.'},
        {date: addDays(noticeDate, m2Days), title: 'Day ' + m2Days + ' — Documentation Complete', desc: 'All supporting documents compiled, reconciliations done (GSTR-1/3B/2B for GST; 26AS/AIS/TIS for IT), discrepancies addressed.'},
        {date: addDays(noticeDate, m3Days), title: 'Day ' + m3Days + ' — Response Draft Complete', desc: 'Full response drafted with annexures, case law citations, procedural defences, and merit defences.'},
        {date: addDays(noticeDate, m4Days), title: 'Day ' + m4Days + ' — Review &amp; Finalisation', desc: 'CA review, client sign-off, final formatting. 2-day buffer for filing-day issues.'},
        {date: deadlineDate, title: 'DEADLINE — File Response', desc: 'File on e-Proceedings (IT) or GST portal. Take screenshot of acknowledgement / ARN. Send hard copy if served by post.', deadline: true}
    ];

    milestones.forEach((m, idx) => {
        const item = document.createElement('div');
        item.className = 'timeline-item';
        const dt = m.date;
        const dayDiff = daysBetween(today, dt);
        if(m.deadline) item.classList.add('deadline');
        else if(dayDiff < 0) item.classList.add('past');
        else if(dayDiff === 0) item.classList.add('today');

        const dotLabel = idx === 0 ? '★' : (m.deadline ? '⚑' : idx);

        item.innerHTML = '<div class="timeline-dot">' + dotLabel + '</div>' +
            '<div class="timeline-content">' +
            '<div class="timeline-date">' + formatDate(dt) + ' · <span class="ddmmyyyy">' + getWeekday(dt) + '</span></div>' +
            '<div class="timeline-title">' + m.title + '</div>' +
            '<div class="timeline-desc">' + m.desc + '</div>' +
            '</div>';
        list.appendChild(item);
    });
}

function setupCalendarExports(section, noticeDate, deadlineDate, replyWindow){
    const title = 'Tax Notice Reply Deadline — ' + section.label.split(' — ')[0];
    const desc = 'Reply deadline for ' + section.label + '\n' +
        'Notice received: ' + formatDate(noticeDate) + '\n' +
        'Reply window: ' + replyWindow + ' days\n' +
        'Deadline: ' + formatDate(deadlineDate) + ' (11:59 PM IST)\n\n' +
        'Action items:\n' +
        '- Verify DIN on the notice\n' +
        '- Compile supporting documents\n' +
        '- Draft response with CA\n' +
        '- File on portal before deadline\n' +
        '- Take acknowledgement screenshot\n\n' +
        'Free 15-min CA review: +91 945 945 6700 / sales@patronaccounting.com\n' +
        'Patron Accounting LLP — /';

    // Google Calendar URL
    const ymd = formatYMD(deadlineDate);
    const ymdNext = formatYMD(addDays(deadlineDate, 1));
    const gcalUrl = 'https://calendar.google.com/calendar/render?action=TEMPLATE' +
        '&text=' + encodeURIComponent(title) +
        '&dates=' + ymd + '/' + ymdNext +
        '&details=' + encodeURIComponent(desc) +
        '&location=' + encodeURIComponent('India (Online portal filing)');
    document.getElementById('googleCalLink').href = gcalUrl;
}

function downloadICalFile(){
    if(!currentDeadline || !currentSection || !currentNoticeDate){ showError('Please calculate the deadline first.'); return; }

    const title = 'Tax Notice Reply Deadline - ' + currentSection.label.split(' — ')[0];
    const ymd = formatYMD(currentDeadline);
    const ymdNext = formatYMD(addDays(currentDeadline, 1));
    const now = new Date();
    const dtstamp = formatYMD(now) + 'T' + String(now.getUTCHours()).padStart(2,'0') + String(now.getUTCMinutes()).padStart(2,'0') + String(now.getUTCSeconds()).padStart(2,'0') + 'Z';
    const uid = 'patron-notice-deadline-' + Date.now() + '@patronaccounting.com';

    const replyWindow = parseInt(document.getElementById('replyWindow').value) || 30;
    const descLines = [
        'Reply deadline for ' + currentSection.label,
        'Notice received: ' + formatDate(currentNoticeDate),
        'Reply window: ' + replyWindow + ' days',
        'Deadline: ' + formatDate(currentDeadline) + ' (11:59 PM IST)',
        '',
        'Action items:',
        '- Verify DIN on notice',
        '- Compile documents',
        '- Draft response with CA',
        '- File on portal before deadline',
        '',
        'Free CA review: +91 945 945 6700',
        'Patron Accounting LLP'
    ];
    const desc = descLines.join('\\n');

    const ics = [
        'BEGIN:VCALENDAR',
        'VERSION:2.0',
        'PRODID:-//Patron Accounting LLP//Notice Deadline Tracker//EN',
        'CALSCALE:GREGORIAN',
        'METHOD:PUBLISH',
        'BEGIN:VEVENT',
        'UID:' + uid,
        'DTSTAMP:' + dtstamp,
        'DTSTART;VALUE=DATE:' + ymd,
        'DTEND;VALUE=DATE:' + ymdNext,
        'SUMMARY:' + title,
        'DESCRIPTION:' + desc,
        'LOCATION:India (Online portal filing)',
        'STATUS:CONFIRMED',
        'BEGIN:VALARM',
        'TRIGGER:-P14D',
        'ACTION:DISPLAY',
        'DESCRIPTION:14 days until tax notice deadline',
        'END:VALARM',
        'BEGIN:VALARM',
        'TRIGGER:-P7D',
        'ACTION:DISPLAY',
        'DESCRIPTION:7 days until tax notice deadline',
        'END:VALARM',
        'BEGIN:VALARM',
        'TRIGGER:-P3D',
        'ACTION:DISPLAY',
        'DESCRIPTION:3 days until tax notice deadline',
        'END:VALARM',
        'BEGIN:VALARM',
        'TRIGGER:-P1D',
        'ACTION:DISPLAY',
        'DESCRIPTION:Tomorrow is your tax notice deadline',
        'END:VALARM',
        'END:VEVENT',
        'END:VCALENDAR'
    ].join('\r\n');

    const blob = new Blob([ics], {type: 'text/calendar;charset=utf-8'});
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'notice-deadline-' + ymd + '.ics';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    setTimeout(() => URL.revokeObjectURL(url), 1000);
}

function resetCalc(){
    currentType = 'IT';
    document.querySelectorAll('.toggle-group').forEach(g => {g.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));});
    document.querySelector('.toggle-btn[data-type="IT"]').classList.add('active');
    const today = new Date();
    document.getElementById('noticeDate').value = today.toISOString().split('T')[0];
    renderSectionDropdown();
    document.getElementById('resultSection').classList.remove('visible');
    document.getElementById('errorBanner').classList.remove('visible');
    currentDeadline = null; currentSection = null; currentNoticeDate = null;
}

function toggleFaq(e){const b=e.closest?(e.closest('.faq-question')||e):e;const it=b.closest('.faq-item');if(!it)return;const o=it.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>{i.classList.remove('open');const q=i.querySelector('.faq-question');if(q)q.setAttribute('aria-expanded','false');});if(!o){it.classList.add('open');b.setAttribute('aria-expanded','true');}}

// Initialize
(function init(){
    const today = new Date();
    document.getElementById('noticeDate').value = today.toISOString().split('T')[0];
    renderSectionDropdown();
})();

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
