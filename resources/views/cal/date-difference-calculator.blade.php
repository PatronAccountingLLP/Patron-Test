@extends('layouts.app')
@section('meta')
    <title>Date Difference Calculator | Days Between Two Dates</title>
    <meta name="description" content="Free date difference calculator: find the exact days, weeks, months and years between any two dates, with working-days estimate and leap-year aware. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/date-difference-calculator">
    <meta property="og:title" content="Date Difference Calculator — Free 2026 | Patron Accounting"><meta property="og:description" content="Calculate days, weeks, months between any two dates. Leap year aware.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN"><meta property="og:url" content="/tools/date-difference-calculator">
    <meta property="og:image" content="/tools/og-date-difference.png"><meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Date Difference Calculator — Free 2026"><meta name="twitter:description" content="Find exact days, weeks, months between two dates.">
@endsection
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Date Difference Calculator Online 2026","description":"Free online calculator to find exact difference between any two dates in years months weeks and days. Shows total calendar days, total weeks, total months, estimated working days, and total hours. Accounts for leap years. Useful for notice periods, compliance deadlines, project timelines, tax residency, and loan tenures.","url":"/tools/date-difference-calculator","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Date Difference Calculator","item":"/tools/date-difference-calculator"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How to calculate days between two dates?","acceptedAnswer":{"@type":"Answer","text":"Enter the start date and end date and the calculator counts total calendar days between them. It also shows the difference in years months and days accounting for leap years and varying month lengths. The calculation follows the standard Gregorian calendar used worldwide and in all Indian official purposes."}},{"@type":"Question","name":"How many working days between two dates?","acceptedAnswer":{"@type":"Answer","text":"This calculator shows total calendar days. For approximate working days multiply total days by 5 and divide by 7 to exclude weekends. India has approximately 250 working days per year after excluding 104 weekend days and about 10 to 15 gazetted holidays. Actual count varies by state and organization."}},{"@type":"Question","name":"How to calculate notice period days?","acceptedAnswer":{"@type":"Answer","text":"Enter your resignation date as start and last working date as end. The result shows total calendar days of notice period. Most Indian IT companies have 60 to 90 day notice periods counted in calendar days not working days. Some companies count from the date resignation is accepted not submitted."}},{"@type":"Question","name":"How to calculate GST filing deadline?","acceptedAnswer":{"@type":"Answer","text":"GSTR-3B is due by 20th of the following month. GSTR-1 by 11th or 13th. Enter the due date and today to see days remaining or days overdue. Late filing attracts 50 rupees per day penalty for GSTR-3B plus 18 percent interest on unpaid tax. This tool helps track exact days to or past deadline."}},{"@type":"Question","name":"How many days in each month?","acceptedAnswer":{"@type":"Answer","text":"January 31, February 28 or 29 in leap year, March 31, April 30, May 31, June 30, July 31, August 31, September 30, October 31, November 30, December 31. Total 365 days in a regular year and 366 in a leap year. This calculator handles all month lengths and leap years automatically."}},{"@type":"Question","name":"What is a leap year and when does it occur?","acceptedAnswer":{"@type":"Answer","text":"A leap year has 366 days with February having 29 days. It occurs every 4 years except century years unless divisible by 400. So 2024 was a leap year, 2100 will not be, but 2000 was. This calculator correctly handles all leap year rules when computing date differences including century exceptions."}},{"@type":"Question","name":"How to calculate EMI start to end duration?","acceptedAnswer":{"@type":"Answer","text":"Enter your loan start date and expected end date. The result shows total months of loan tenure. Most home loans are 15 to 30 years which equals 180 to 360 months. Car loans typically 3 to 7 years. Personal loans 1 to 5 years. This helps verify your loan tenure against the sanction letter."}},{"@type":"Question","name":"How to count days for Section 6 residency?","acceptedAnswer":{"@type":"Answer","text":"Under Income Tax Act Section 6 an individual is resident in India if present for 182 days or more in the financial year or 60 days in the current year plus 365 days in preceding 4 years. Use this calculator to count your days in India between specific travel dates for residency status determination."}},{"@type":"Question","name":"Can I calculate age between any two dates?","acceptedAnswer":{"@type":"Answer","text":"Yes enter the earlier date as start and the later date as end. The result shows years months and days between them which is equivalent to calculating age on the end date. This is useful for computing age on exam cutoff dates, insurance policy dates, or any specific historical or future date."}},{"@type":"Question","name":"How to calculate project timeline in weeks?","acceptedAnswer":{"@type":"Answer","text":"Enter project start and end dates. Total days divided by 7 gives complete weeks and the remainder shows extra days. For example 100 days equals 14 weeks and 2 days. Useful for agile sprint planning, academic semester scheduling, and project management milestone tracking in Indian IT companies."}},{"@type":"Question","name":"How many days until ITR filing deadline?","acceptedAnswer":{"@type":"Answer","text":"Enter today as start and the ITR due date as end. For salaried individuals the due date is July 31. For audit cases September 30. For transfer pricing November 30. Belated return can be filed until December 31 of the assessment year with a penalty of 5000 or 10000 rupees under Section 234F."}},{"@type":"Question","name":"Is the end date included in the count?","acceptedAnswer":{"@type":"Answer","text":"By default this calculator counts days from start to end excluding the end date which is the standard mathematical convention. For inclusive count add 1 to the result. For example January 1 to January 10 gives 9 days exclusive or 10 days inclusive. Choose based on the context of your calculation."}},{"@type":"Question","name":"How to calculate interest period for deposits?","acceptedAnswer":{"@type":"Answer","text":"Enter the deposit date as start and maturity date as end. The result shows exact months and days of the deposit tenure. Banks calculate FD interest on exact days. RD interest compounds quarterly. For PPF the contribution before 5th of the month earns interest for the full month from April 1."}}]}</script>
@endsection
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
body{font-family:'DM Sans',sans-serif;color:#1A1A1A;background:#FAFAF8;line-height:1.7;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
:root{--primary:#1B4D3E;--primary-light:#2A7A5F;--primary-dark:#0F2E25;--accent:#F59E0B;--accent-light:#FCD34D;--surface:#FAFAF8;--surface-alt:#F0EFEB;--card:#FFFFFF;--text:#1A1A1A;--text-secondary:#555555;--text-muted:#888888;--border:#E5E5E0;--success:#059669;--info:#0EA5E9;--danger:#DC2626;--radius:12px;--radius-lg:20px;--shadow-sm:0 1px 3px rgba(0,0,0,0.06);--shadow-md:0 4px 16px rgba(0,0,0,0.08);--shadow-lg:0 8px 32px rgba(0,0,0,0.1);--font-body:'DM Sans',sans-serif;--font-mono:'Space Mono',monospace}
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
.tldr{background:var(--card);border-left:4px solid var(--accent);border-radius:0 var(--radius) var(--radius) 0;padding:20px 24px;margin:0 auto 32px;max-width:1200px;box-shadow:var(--shadow-sm)}
.tldr-label{font-family:var(--font-mono);font-size:12px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px}
.tldr p{font-size:15px;color:var(--text-secondary);line-height:1.7}
.main-layout{max-width:1200px;margin:0 auto;padding:0 20px 40px;display:grid;grid-template-columns:1fr;gap:32px}
@media(min-width:900px){.main-layout{grid-template-columns:1fr 320px;gap:40px}}
.content-col{min-width:0}.sidebar-col{min-width:0}
.calc-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);padding:32px;margin-bottom:40px;border:1px solid var(--border)}
.calc-card h2{font-size:22px;font-weight:700;color:var(--primary-dark);margin-bottom:24px}
.calc-row{display:grid;grid-template-columns:1fr;gap:20px;margin-bottom:20px}
@media(min-width:600px){.calc-row{grid-template-columns:1fr 1fr}}
.form-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:0.5px}
.form-group input,.form-group select{width:100%;padding:12px 16px;border:2px solid var(--border);border-radius:var(--radius);font-family:var(--font-body);font-size:16px;color:var(--text);background:var(--surface);transition:border-color 0.2s;outline:none}
.form-group input:focus,.form-group select:focus{border-color:var(--primary)}
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px}
.toggle-btn{flex:1;padding:10px 16px;border:none;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent}
.toggle-btn *{pointer-events:none}
.toggle-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.btn-calculate{width:100%;padding:14px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s,transform 0.1s;margin-top:8px}
.btn-calculate:hover{background:var(--primary-light)}
.btn-calculate:active{transform:scale(0.98)}
.btn-reset{display:inline-flex;align-items:center;gap:6px;margin-top:16px;padding:8px 16px;border:1px solid var(--border);border-radius:8px;background:var(--card);color:var(--text-muted);font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:all 0.2s}
.btn-reset:hover{border-color:var(--danger);color:var(--danger)}
.content-section{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:32px;margin-bottom:32px;border:1px solid var(--border)}
.content-section h2{font-size:24px;font-weight:700;color:var(--primary-dark);margin-bottom:16px;line-height:1.3}
.content-section h3{font-size:18px;font-weight:700;color:var(--primary-dark);margin:20px 0 10px}
.content-section p{font-size:15px;color:var(--text-secondary);margin-bottom:14px;line-height:1.75}
.content-section a{color:var(--primary-light);text-decoration:underline;text-underline-offset:2px}
.content-section a:hover{color:var(--primary)}
.rate-table{width:100%;border-collapse:collapse;margin:16px 0;font-size:14px}
.rate-table thead th{background:var(--primary);color:#fff;padding:12px 16px;text-align:left;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:0.3px}
.rate-table thead th:first-child{border-radius:var(--radius) 0 0 0}
.rate-table thead th:last-child{border-radius:0 var(--radius) 0 0}
.rate-table tbody td{padding:12px 16px;border-bottom:1px solid var(--border);color:var(--text-secondary)}
.rate-table tbody tr:nth-child(even){background:var(--surface)}
.rate-table tbody tr:hover{background:var(--surface-alt)}
.formula-box{background:var(--primary-dark);color:#fff;border-radius:var(--radius);padding:20px 24px;margin:16px 0;font-family:var(--font-mono);font-size:14px;line-height:1.8;overflow-x:auto}
.formula-box .label{color:var(--accent-light);font-weight:700}
.callout{background:#EFF6FF;border-left:4px solid var(--info);border-radius:0 var(--radius) var(--radius) 0;padding:16px 20px;margin:16px 0}
.callout p{color:#1E40AF;margin-bottom:0;font-size:14px}
.callout strong{color:#1E3A8A}
.callout.warn{background:#FFFBEB;border-left-color:var(--accent)}
.callout.warn p{color:#92400E}
.callout.warn strong{color:#78350F}
.faq-item{background:var(--surface);border-radius:var(--radius);margin-bottom:10px;border:1px solid var(--border);overflow:hidden;transition:box-shadow 0.2s}
.faq-item:hover{box-shadow:var(--shadow-sm)}
.faq-question{display:flex;justify-content:space-between;align-items:center;width:100%;padding:16px 20px;border:none;background:none;font-family:var(--font-body);font-size:15px;font-weight:600;color:var(--text);cursor:pointer;text-align:left;line-height:1.4;gap:12px;-webkit-tap-highlight-color:transparent}
.faq-question *{pointer-events:none}
.faq-icon{flex-shrink:0;width:24px;height:24px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;transition:transform 0.3s}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.35s ease}
.faq-item.open .faq-answer{max-height:500px}
.faq-answer-inner{padding:0 20px 16px;font-size:14px;color:var(--text-secondary);line-height:1.75}
.sidebar-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:24px;margin-bottom:24px;border:1px solid var(--border)}
.sidebar-card h3{font-size:16px;font-weight:700;color:var(--primary-dark);margin-bottom:14px}
.sidebar-link{display:block;padding:10px 14px;border-radius:8px;font-size:14px;font-weight:500;color:var(--text-secondary);text-decoration:none;transition:all 0.2s;margin-bottom:4px}
.sidebar-link:hover{background:var(--surface-alt);color:var(--primary)}
.sidebar-link .arrow{float:right;color:var(--text-muted)}
.cta-card{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;border-radius:var(--radius-lg);padding:28px 24px;margin-bottom:24px;text-align:center}
.cta-card h3{color:#fff;font-size:18px;margin-bottom:10px}
.cta-card p{font-size:14px;color:rgba(255,255,255,0.85);margin-bottom:16px;line-height:1.6}
.cta-btn{display:inline-block;padding:12px 28px;background:var(--accent);color:var(--primary-dark);font-weight:700;font-size:14px;border-radius:8px;text-decoration:none;transition:background 0.2s}
.cta-btn:hover{background:var(--accent-light)}
.noscript-box{background:#FEE2E2;border:2px solid #DC2626;border-radius:var(--radius);padding:20px;text-align:center;color:#991B1B;font-weight:600}
/* Tool-specific */
.due-card{background:var(--card);border:2px solid var(--border);border-radius:var(--radius);padding:16px 20px;margin-bottom:12px;display:flex;justify-content:space-between;align-items:center;gap:16px;transition:border-color 0.2s}
.due-card:hover{border-color:var(--primary-light)}
.due-card.overdue{border-color:var(--danger);background:#FEF2F2}
.due-card.upcoming{border-color:var(--accent);background:#FFFBEB}
.due-card.done{border-color:var(--success);background:#F0FDF4;opacity:0.7}
.due-left{flex:1;min-width:0}
.due-form{font-family:var(--font-mono);font-size:12px;font-weight:700;color:var(--primary);background:var(--surface-alt);padding:2px 8px;border-radius:4px;display:inline-block;margin-bottom:4px}
.due-desc{font-size:14px;font-weight:600;color:var(--text);margin-bottom:2px}
.due-period{font-size:12px;color:var(--text-muted)}
.due-right{text-align:right;flex-shrink:0}
.due-date{font-family:var(--font-mono);font-size:16px;font-weight:700;color:var(--primary-dark)}
.due-status{font-size:11px;font-weight:700;padding:2px 8px;border-radius:10px;display:inline-block;margin-top:4px}
.status-overdue{background:#FEE2E2;color:#DC2626}
.status-upcoming{background:#FEF3C7;color:#B45309}
.status-filed{background:#D1FAE5;color:#059669}
.status-future{background:#F3F4F6;color:#6B7280}
.month-tabs{display:flex;overflow-x:auto;gap:4px;margin-bottom:20px;padding-bottom:4px;-webkit-overflow-scrolling:touch}
.month-tab{padding:8px 14px;border:2px solid var(--border);border-radius:var(--radius);font-size:13px;font-weight:600;color:var(--text-muted);background:var(--card);cursor:pointer;white-space:nowrap;transition:all 0.2s}
.month-tab.active{border-color:var(--primary);color:var(--primary);background:rgba(27,77,62,0.04)}
.month-tab:hover{border-color:var(--primary-light)}
.filter-bar{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:16px}
.filter-chip{padding:6px 14px;border:1px solid var(--border);border-radius:20px;font-size:12px;font-weight:600;color:var(--text-muted);background:var(--card);cursor:pointer;transition:all 0.2s}
.filter-chip.active{border-color:var(--primary);color:#fff;background:var(--primary)}
.filter-chip:hover{border-color:var(--primary-light)}
.legend{display:flex;flex-wrap:wrap;gap:12px;margin-bottom:16px;font-size:12px}
.legend-item{display:flex;align-items:center;gap:4px}
.legend-dot{width:10px;height:10px;border-radius:50%;flex-shrink:0}
/* ====== RESPONSIVE — TABLET (768-1024px) ====== */
@media(max-width:1024px){
.main-layout{padding:0 16px 32px}
.hero{padding:28px 16px 20px}
.tldr{margin-left:16px;margin-right:16px}
.calc-card{padding:28px}
.content-section{padding:28px}
}

/* ====== RESPONSIVE — SMALL TABLET / LARGE PHONE (481-767px) ====== */
@media(max-width:899px){
.hero h1{font-size:26px}
.calc-card{padding:20px}
.content-section{padding:20px}
.toc-nav a{padding:10px 12px;font-size:12px}
.due-card{flex-direction:column;align-items:flex-start;gap:8px}
.due-right{text-align:left}
.toggle-group{flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:0;padding:10px 12px;font-size:13px}
.toggle-btn small{display:none}
.rate-table thead th{padding:10px 12px;font-size:11px}
.rate-table tbody td{padding:10px 12px;font-size:13px}
.result-value{font-size:18px}
.sidebar-col{order:2}
.formula-box{padding:16px 18px;font-size:13px}
.month-tab{padding:6px 10px;font-size:12px}
}

/* ====== RESPONSIVE — MOBILE (max 480px) ====== */
@media(max-width:480px){
.hero{padding:20px 14px 16px}
.hero h1{font-size:22px}
.hero-meta{gap:8px}
.badge-updated{font-size:11px;padding:3px 10px}
.author-byline{font-size:12px}
.tldr{padding:16px 18px;margin-left:14px;margin-right:14px}
.tldr p{font-size:14px}
.main-layout{padding:0 14px 24px;gap:24px}
.calc-card{padding:16px;margin-bottom:24px}
.calc-card h2{font-size:19px;margin-bottom:16px}
.content-section{padding:16px;margin-bottom:24px}
.content-section h2{font-size:20px}
.content-section h3{font-size:16px}
.content-section p{font-size:14px}
.toggle-group{flex-direction:column}
.toggle-btn{padding:12px 14px;font-size:14px;text-align:center}
.toggle-btn small{display:inline}
.calc-row{gap:14px;margin-bottom:14px}
.form-group label{font-size:12px}
.form-group input,.form-group select{padding:10px 14px;font-size:15px}
.form-group input[type="number"]{font-size:16px}
.btn-calculate{padding:12px;font-size:15px}
.rate-table{font-size:12px}
.rate-table thead th{padding:8px 10px;font-size:10px;letter-spacing:0}
.rate-table tbody td{padding:8px 10px;font-size:12px}
.formula-box{padding:14px 16px;font-size:12px;line-height:1.7}
.callout{padding:14px 16px}
.callout p{font-size:13px}
.faq-question{padding:14px 16px;font-size:14px}
.faq-answer-inner{padding:0 16px 14px;font-size:13px}
.faq-icon{width:22px;height:22px;font-size:14px}
.sidebar-card{padding:20px}
.sidebar-card h3{font-size:15px}
.sidebar-link{padding:8px 12px;font-size:13px}
.cta-card{padding:22px 20px}
.cta-card h3{font-size:16px}
.cta-card p{font-size:13px}
.cta-btn{padding:10px 24px;font-size:13px}
.due-card{padding:14px 16px}
.due-form{font-size:11px}
.due-desc{font-size:13px}
.due-date{font-size:14px}
.due-status{font-size:10px}
.month-tabs{gap:3px}
.month-tab{padding:5px 8px;font-size:11px;border-width:1.5px}
.legend{gap:8px;font-size:11px}
.breadcrumb{font-size:12px;padding:12px 14px 0}
.toc-nav a{padding:8px 10px;font-size:11px}
}

/* ====== RESPONSIVE — VERY SMALL (max 360px) ====== */
@media(max-width:360px){
.hero h1{font-size:20px}
.calc-card{padding:14px}
.content-section{padding:14px}
.content-section h2{font-size:18px}
.rate-table thead th{font-size:9px;padding:6px 8px}
.rate-table tbody td{font-size:11px;padding:6px 8px}
.month-tab{padding:4px 6px;font-size:10px}
.toggle-btn{font-size:13px;padding:10px 12px}
}

@media(max-width:899px){.main-layout{grid-template-columns:1fr!important;gap:24px}.sidebar-col{order:2}.content-col{order:1}}

/* Tool-specific: Composition Eligibility */
.yn-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;max-width:200px}
.yn-btn{flex:1;padding:8px 16px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s}
.yn-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.yn-btn.active.sel-yes{color:var(--danger)}
.yn-btn.active.sel-no{color:var(--success)}
.check-row{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:14px 0;border-bottom:1px solid var(--border)}
.check-row:last-child{border-bottom:none}
.check-label{font-size:14px;font-weight:500;color:var(--text);flex:1}
.res-panel{display:none;margin-top:24px}
.res-panel.visible{display:block;animation:fadeUp 0.4s ease}
@keyframes fadeUp{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
.res-hero{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:20px}
.res-box{padding:22px;border-radius:var(--radius);text-align:center}
.res-box.eligible{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.res-box.ineligible{background:linear-gradient(135deg,#dc2626,#ef4444);color:#fff}
.res-box.savings{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.res-box.rate{background:linear-gradient(135deg,#0d9488,#06b6d4);color:#fff}
.res-box .rb-label{font-size:12px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.res-box .rb-value{font-size:clamp(1.4rem,3vw,1.8rem);font-weight:800;margin-top:4px}
.res-box .rb-sub{font-size:12px;opacity:.8;margin-top:2px}
.res-card{background:var(--card);border:1px solid var(--border);border-radius:var(--radius);margin-bottom:16px;overflow:hidden}
.res-card-hd{display:flex;align-items:center;justify-content:space-between;padding:14px 20px;border-bottom:1px solid var(--border);background:var(--surface)}
.res-card-hd h3{font-size:15px;font-weight:700;color:var(--primary-dark)}
.res-badge{font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;text-transform:uppercase;letter-spacing:.5px}
.res-badge.pass{background:#D1FAE5;color:#059669}
.res-badge.fail{background:#FEE2E2;color:#DC2626}
.res-badge.info{background:#DBEAFE;color:#2563EB}
.res-badge.teal{background:#CCFBF1;color:#0D9488}
.res-card-bd{padding:20px}
.chk-list{list-style:none;padding:0;margin:0}
.chk-list li{display:flex;align-items:flex-start;gap:10px;padding:10px 0;border-bottom:1px solid var(--border);font-size:14px;line-height:1.5}
.chk-list li:last-child{border-bottom:none}
.chk-icon{width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;font-size:12px;font-weight:700}
.chk-icon.pass{background:#D1FAE5;color:#059669}
.chk-icon.fail{background:#FEE2E2;color:#DC2626}
.cmp-table{width:100%;border-collapse:collapse;font-size:14px;margin:0}
.cmp-table th{background:var(--primary);color:#fff;padding:12px 16px;text-align:left;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:.3px}
.cmp-table th:first-child{border-radius:var(--radius) 0 0 0}
.cmp-table th:last-child{border-radius:0 var(--radius) 0 0}
.cmp-table td{padding:10px 16px;border-bottom:1px solid var(--border);color:var(--text-secondary)}
.cmp-table tr:nth-child(even){background:var(--surface)}
.cmp-table .hi{font-weight:700;color:var(--success)}
.cmp-table .neg{color:var(--danger);font-weight:600}
.res-actions{display:flex;gap:12px;margin-top:20px;flex-wrap:wrap}
.ra-btn{display:inline-flex;align-items:center;gap:8px;padding:12px 20px;border-radius:8px;font-size:14px;font-weight:600;text-decoration:none;transition:all 0.2s;border:1.5px solid var(--border);color:var(--text);background:var(--card);font-family:var(--font-body)}
.ra-btn:hover{border-color:var(--primary);color:var(--primary);transform:translateY(-1px)}
.ra-btn svg{width:18px;height:18px}
.callout.green{background:#F0FDF4;border-left-color:var(--success)}
.callout.green p{color:#166534}
.callout.green strong{color:#14532D}
@media(max-width:899px){.res-hero{grid-template-columns:1fr}.check-row{flex-direction:column;align-items:flex-start;gap:8px}.yn-group{max-width:100%}}
@media(max-width:480px){.res-hero{grid-template-columns:1fr}.res-actions{flex-direction:column}.ra-btn{width:100%;justify-content:center}.check-row{flex-direction:column;gap:8px}.yn-group{max-width:100%}}


.tool-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.tool-box{border-radius:var(--radius);padding:20px;text-align:center}
.tool-box .tb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.tool-box .tb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.tool-box .tb-sub{font-size:11px;opacity:.8;margin-top:2px}
.tool-box.b1{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.tool-box.b2{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.tool-box.b3{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.stat-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(130px,1fr));gap:12px;margin:16px 0}
.stat-item{background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);padding:14px;text-align:center}
.stat-item .si-val{font-size:20px;font-weight:800;color:var(--primary-dark);font-family:var(--font-mono)}
.stat-item .si-label{font-size:10px;color:var(--text-muted);margin-top:2px;font-weight:600;text-transform:uppercase;letter-spacing:.3px}
.date-input{font-family:var(--font-body);font-size:16px;padding:12px 14px;border:2px solid var(--border);border-radius:8px;width:100%;max-width:280px;outline:none;transition:border-color 0.2s;color:var(--text);background:var(--card)}
.date-input:focus{border-color:var(--primary)}
@media(max-width:600px){.tool-hero{grid-template-columns:1fr}.stat-grid{grid-template-columns:1fr 1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#deadlines">Key Deadlines</a><a href="#residency">Tax Residency</a><a href="#months">Month Days</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Date Difference Calculator</nav> --}}
<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Date Difference Calculator — <span>Days Between Dates</span></h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Find the exact difference between any two dates in years, months, weeks, and days. Also shows total calendar days, estimated working days, and total hours. Leap year aware. Useful for notice periods, compliance deadlines, project timelines, loan tenures, GST filing, ITR due dates, and tax residency calculations.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate Date Difference</h2>
    <noscript><div class="noscript-box">This tool requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="calc-row"><div class="form-group"><label>Start Date</label><input type="date" id="inStart" class="date-input"></div><div class="form-group"><label>End Date</label><input type="date" id="inEnd" class="date-input"></div></div>
    <button class="btn-calculate" onclick="calcDD()">Calculate Difference</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use</h2><p>Select start and end dates. The calculator auto-swaps if end is before start and shows the difference in multiple formats. Works for both past and future dates. Useful for tracking compliance deadlines under <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Act</a> and <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST Act</a> timelines.</p><div class="callout"><p><strong>CA Tip:</strong> Key dates to track: ITR due Jul 31 / Sep 30 / Nov 30. GSTR-9 by Dec 31. Section 6 residency requires 182+ days in India. Rule 37 requires payment within 180 days of invoice for ITC. Use this tool to count exact days for all these compliance requirements.</p></div></section>

<section class="content-section" id="deadlines"><h2>Key Indian Compliance Deadlines</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Filing</th><th>Due Date</th><th>Late Penalty</th></tr></thead><tbody>
<tr><td>ITR (non-audit)</td><td>July 31</td><td>&#8377;5,000 / &#8377;10,000</td></tr>
<tr><td>ITR (audit cases)</td><td>September 30</td><td>&#8377;5,000 / &#8377;10,000</td></tr>
<tr><td>ITR (transfer pricing)</td><td>November 30</td><td>&#8377;5,000 / &#8377;10,000</td></tr>
<tr><td>GSTR-3B</td><td>20th of next month</td><td>&#8377;50/day + 18% interest</td></tr>
<tr><td>GSTR-9</td><td>December 31</td><td>&#8377;200/day (max 0.5% TO)</td></tr>
<tr><td>TDS Return</td><td>Quarterly (31st)</td><td>&#8377;200/day (Sec 234E)</td></tr>
<tr><td>DIR-3 KYC</td><td>September 30</td><td>&#8377;5,000 + DIN deactivation</td></tr>
</tbody></table></div></section>

<section class="content-section" id="residency"><h2>Tax Residency — 182-Day Rule</h2><p>Under Section 6 of the Income Tax Act, an individual is considered resident in India if present for <strong>182 days or more</strong> in the financial year (April 1 to March 31). Alternatively, 60 days in the current year plus 365 days in the preceding 4 years also qualifies (with exceptions for Indian citizens going abroad). Use this calculator to count your exact days in India between travel dates.</p></section>

<section class="content-section" id="months"><h2>Days in Each Month</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Month</th><th>Days</th><th>Month</th><th>Days</th></tr></thead><tbody>
<tr><td>January</td><td>31</td><td>July</td><td>31</td></tr><tr><td>February</td><td>28/29</td><td>August</td><td>31</td></tr><tr><td>March</td><td>31</td><td>September</td><td>30</td></tr><tr><td>April</td><td>30</td><td>October</td><td>31</td></tr><tr><td>May</td><td>31</td><td>November</td><td>30</td></tr><tr><td>June</td><td>30</td><td>December</td><td>31</td></tr>
</tbody></table></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need compliance help?</strong> Our CAs track all filing deadlines for ITR, GST, TDS, and ROC. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20compliance%20deadline%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA &rarr;</a></p></div>
<section class="content-section" id="faqs"><h2>Frequently Asked Questions</h2><div id="faqList"></div></section>
</div><aside class="sidebar-col"><div class="cta-card"><h3>Need Help?</h3><p>Our CAs help with compliance deadlines, tax filing & business advisory.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div><div class="sidebar-card"><h3>Popular Tools</h3><a href="/tools/age-calculator" class="sidebar-link">Age Calculator <span class="arrow">&rarr;</span></a><a href="/tools/percentage-calculator" class="sidebar-link">Percentage Calculator <span class="arrow">&rarr;</span></a><a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a><a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a><a href="/tools/word-character-counter" class="sidebar-link">Word Counter <span class="arrow">&rarr;</span></a></div><div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div></aside></div>
<script>
function resetForm(){document.getElementById('inStart').value='';document.getElementById('inEnd').value='';document.getElementById('resPanel').classList.remove('visible');}
function calcDD(){
var s=document.getElementById('inStart').value,e=document.getElementById('inEnd').value;
if(!s||!e){alert('Please select both dates.');return;}
var d1=new Date(s),d2=new Date(e);if(d1>d2){var tmp=d1;d1=d2;d2=tmp;}
var totalDays=Math.floor((d2-d1)/(1000*60*60*24));
var totalWeeks=Math.floor(totalDays/7),remDays=totalDays%7;
var years=d2.getFullYear()-d1.getFullYear(),months=d2.getMonth()-d1.getMonth(),days=d2.getDate()-d1.getDate();
if(days<0){months--;days+=new Date(d2.getFullYear(),d2.getMonth(),0).getDate();}
if(months<0){years--;months+=12;}
var totalMonths=years*12+months,workDays=Math.round(totalDays*5/7);
var h='<div class="tool-hero"><div class="tool-box b1"><div class="tb-label">Difference</div><div class="tb-value">'+years+'y '+months+'m '+days+'d</div><div class="tb-sub">Years, Months, Days</div></div><div class="tool-box b2"><div class="tb-label">Total Days</div><div class="tb-value">'+totalDays.toLocaleString()+'</div><div class="tb-sub">Calendar days</div></div><div class="tool-box b3"><div class="tb-label">~Working Days</div><div class="tb-value">'+workDays.toLocaleString()+'</div><div class="tb-sub">Excl weekends (approx)</div></div></div>';
h+='<div class="stat-grid"><div class="stat-item"><div class="si-val">'+totalMonths+'</div><div class="si-label">Total Months</div></div><div class="stat-item"><div class="si-val">'+totalWeeks+'</div><div class="si-label">Total Weeks</div></div><div class="stat-item"><div class="si-val">'+totalDays+'</div><div class="si-label">Total Days</div></div><div class="stat-item"><div class="si-val">'+(totalDays*24).toLocaleString()+'</div><div class="si-label">Total Hours</div></div></div>';
h+='<div class="res-card"><div class="res-card-hd"><h3>Details</h3><span class="res-badge info">Result</span></div><div class="res-card-bd"><table class="cmp-table"><tr><td>Start Date</td><td><strong>'+d1.toLocaleDateString('en-IN',{day:'numeric',month:'long',year:'numeric',weekday:'long'})+'</strong></td></tr><tr><td>End Date</td><td><strong>'+d2.toLocaleDateString('en-IN',{day:'numeric',month:'long',year:'numeric',weekday:'long'})+'</strong></td></tr><tr><td>Difference</td><td style="font-size:16px;color:var(--primary)"><strong>'+years+' years, '+months+' months, '+days+' days</strong></td></tr><tr><td>Total Calendar Days</td><td><strong>'+totalDays.toLocaleString()+'</strong></td></tr><tr><td>Total Weeks + Days</td><td>'+totalWeeks+' weeks, '+remDays+' days</td></tr><tr><td>~Working Days (Mon–Fri)</td><td>~'+workDays.toLocaleString()+' (excluding public holidays)</td></tr><tr><td>Total Hours</td><td>'+(totalDays*24).toLocaleString()+'</td></tr></table></div></div>';
document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});}
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcDD();});
var FAQS=[
{q:"How to calculate days between two dates?",a:"Enter the start date and end date and the calculator counts total calendar days between them. It also shows the difference in years months and days accounting for leap years and varying month lengths. The calculation follows the standard Gregorian calendar used worldwide and in all Indian official purposes."},
{q:"How many working days between two dates?",a:"This calculator shows total calendar days. For approximate working days multiply total days by 5 and divide by 7 to exclude weekends. India has approximately 250 working days per year after excluding 104 weekend days and about 10 to 15 gazetted holidays. Actual count varies by state and organization."},
{q:"How to calculate notice period days?",a:"Enter your resignation date as start and last working date as end. The result shows total calendar days of notice period. Most Indian IT companies have 60 to 90 day notice periods counted in calendar days not working days. Some companies count from the date resignation is accepted not submitted."},
{q:"How to calculate GST filing deadline?",a:"GSTR-3B is due by 20th of the following month. GSTR-1 by 11th or 13th. Enter the due date and today to see days remaining or days overdue. Late filing attracts 50 rupees per day penalty for GSTR-3B plus 18 percent interest on unpaid tax. This tool helps track exact days to or past deadline."},
{q:"How many days in each month?",a:"January 31, February 28 or 29 in leap year, March 31, April 30, May 31, June 30, July 31, August 31, September 30, October 31, November 30, December 31. Total 365 days in a regular year and 366 in a leap year. This calculator handles all month lengths and leap years automatically."},
{q:"What is a leap year and when does it occur?",a:"A leap year has 366 days with February having 29 days. It occurs every 4 years except century years unless divisible by 400. So 2024 was a leap year, 2100 will not be, but 2000 was. This calculator correctly handles all leap year rules when computing date differences including century exceptions."},
{q:"How to calculate EMI start to end duration?",a:"Enter your loan start date and expected end date. The result shows total months of loan tenure. Most home loans are 15 to 30 years which equals 180 to 360 months. Car loans typically 3 to 7 years. Personal loans 1 to 5 years. This helps verify your loan tenure against the sanction letter."},
{q:"How to count days for Section 6 residency?",a:"Under Income Tax Act Section 6 an individual is resident in India if present for 182 days or more in the financial year or 60 days in the current year plus 365 days in preceding 4 years. Use this calculator to count your days in India between specific travel dates for residency status determination."},
{q:"Can I calculate age between any two dates?",a:"Yes enter the earlier date as start and the later date as end. The result shows years months and days between them which is equivalent to calculating age on the end date. This is useful for computing age on exam cutoff dates, insurance policy dates, or any specific historical or future date."},
{q:"How to calculate project timeline in weeks?",a:"Enter project start and end dates. Total days divided by 7 gives complete weeks and the remainder shows extra days. For example 100 days equals 14 weeks and 2 days. Useful for agile sprint planning, academic semester scheduling, and project management milestone tracking in Indian IT companies."},
{q:"How many days until ITR filing deadline?",a:"Enter today as start and the ITR due date as end. For salaried individuals the due date is July 31. For audit cases September 30. For transfer pricing November 30. Belated return can be filed until December 31 of the assessment year with a penalty of 5000 or 10000 rupees under Section 234F."},
{q:"Is the end date included in the count?",a:"By default this calculator counts days from start to end excluding the end date which is the standard mathematical convention. For inclusive count add 1 to the result. For example January 1 to January 10 gives 9 days exclusive or 10 days inclusive. Choose based on the context of your calculation."},
{q:"How to calculate interest period for deposits?",a:"Enter the deposit date as start and maturity date as end. The result shows exact months and days of the deposit tenure. Banks calculate FD interest on exact days. RD interest compounds quarterly. For PPF the contribution before 5th of the month earns interest for the full month from April 1."}
];

function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});

</script>
@endsection