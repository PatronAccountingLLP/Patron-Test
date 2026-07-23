@extends('layouts.app')

@section('meta')
    <title>Age Calculator | Calculate Exact Age from Date of Birth</title>
    <meta name="description" content="Free online age calculator: find exact age in years, months & days from your date of birth. Birthday countdown, total days lived, zodiac sign. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/age-calculator">
    <meta property="og:title" content="Age Calculator — Free Online 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate exact age from date of birth. Years, months, days with birthday countdown.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/age-calculator">
    <meta property="og:image" content="/tools/og-age-calculator.png">
    <meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Age Calculator — Free 2026">
    <meta name="twitter:description" content="Calculate exact age in years, months, and days from DOB.">
@endsection

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Age Calculator Online Free 2026","description":"Free online age calculator to compute exact age in years months and days from date of birth. Shows total months weeks days hours and minutes lived, next birthday countdown, zodiac sign. Useful for government documents, school admissions, senior citizen verification, legal age requirements, and exam eligibility.","url":"/tools/age-calculator","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Age Calculator","item":"/tools/age-calculator"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How does the age calculator work?","acceptedAnswer":{"@type":"Answer","text":"Enter your date of birth and the calculator computes your exact age in years months and days as of today. It accounts for leap years and varying month lengths of 28 to 31 days. Results include total months weeks days hours and minutes lived plus your next birthday countdown with zodiac sign."}},{"@type":"Question","name":"How to calculate age for government documents?","acceptedAnswer":{"@type":"Answer","text":"For Indian government documents like passport Aadhaar voter ID and PAN card age is calculated as completed years from date of birth to current date. This is the standard Western method used worldwide. Courts accept birth certificate as primary proof of age for all official purposes in India."}},{"@type":"Question","name":"How is age calculated for school admission?","acceptedAnswer":{"@type":"Answer","text":"Most Indian schools follow age cutoff of March 31 or September 30 depending on the state. A child must be 6 years old by the cutoff date for Class 1 admission under the Right to Education Act 2009. Some CBSE affiliated schools use March 31 while state boards may vary. Check state specific rules."}},{"@type":"Question","name":"What is chronological vs biological age?","acceptedAnswer":{"@type":"Answer","text":"Chronological age is your actual age from birth date which this calculator computes accurately. Biological age reflects body health and fitness and can differ from chronological age. For all legal financial tax and official purposes in India only chronological age calculated from date of birth is relevant."}},{"@type":"Question","name":"How to check senior citizen eligibility?","acceptedAnswer":{"@type":"Answer","text":"In India senior citizen status begins at 60 years for income tax benefits higher FD rates railway concessions and health insurance. Super senior citizen is 80 years and above with even higher tax exemption limits. Enter your birth date here to check exact age and eligibility for these age-based benefits."}},{"@type":"Question","name":"What is the legal age for various purposes in India?","acceptedAnswer":{"@type":"Answer","text":"Voting 18 years. Driving with gear 18. Marriage 21 for men 18 for women. Drinking 21 to 25 by state. Employment minimum 14 years and 18 for hazardous work. Senior citizen tax benefit 60 years. Super senior 80 years. PAN card application has no minimum age. Aadhaar can be obtained at any age."}},{"@type":"Question","name":"How to calculate age in months for infants?","acceptedAnswer":{"@type":"Answer","text":"For infants age is typically expressed in months until 24 months then in years. This calculator shows total months lived which is useful for pediatric milestones vaccination schedules and childcare planning. Indian immunization schedule uses age in weeks and months for scheduling doses accurately."}},{"@type":"Question","name":"Is age calculated differently in different countries?","acceptedAnswer":{"@type":"Answer","text":"Most countries including India use the Western system counting completed years from birth date. Some East Asian countries like South Korea traditionally count age differently where you are 1 at birth. This calculator uses the standard international and Indian method of completed years months and days."}},{"@type":"Question","name":"How to calculate retirement age?","acceptedAnswer":{"@type":"Answer","text":"Indian government retirement age is 60 for central employees and varies by state from 58 to 62. Private sector retirement is typically 58 to 60 per company policy. Enter your birth date and this calculator shows your exact current age and how many years months and days remain until any target retirement age."}},{"@type":"Question","name":"Can I calculate age on a specific date?","acceptedAnswer":{"@type":"Answer","text":"This calculator computes age as of today. For age on a specific past or future date use our Date Difference Calculator tool which lets you enter any two dates. This is useful for calculating age on exam dates admission cutoff dates or any historical date for legal or official purposes."}},{"@type":"Question","name":"How is age verified officially in India?","acceptedAnswer":{"@type":"Answer","text":"Primary documents for age verification include birth certificate issued by municipal authority school leaving certificate passport and Aadhaar card. In absence of birth certificate courts accept school records as evidence. Affidavit is accepted as last resort. PAN card date of birth is verified against income tax records."}},{"@type":"Question","name":"What is the age limit for various government exams?","acceptedAnswer":{"@type":"Answer","text":"UPSC Civil Services 21 to 32 years with relaxation for reserved categories. SSC CGL 18 to 32. Banking PO 20 to 30. NEET no upper limit since 2024. JEE no age limit. Age relaxation of 3 to 5 years is available for SC ST OBC and differently abled candidates in most government examinations."}},{"@type":"Question","name":"How accurate is this age calculator?","acceptedAnswer":{"@type":"Answer","text":"The calculator accounts for all leap years including century leap year rules and varying month lengths from 28 to 31 days. It gives accuracy to the exact day. For precise legal purposes always verify the date of birth from official documents like birth certificate or school leaving certificate."}}]}</script>
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
.tool-box.b4{background:linear-gradient(135deg,#B45309,#F59E0B);color:#fff}
.stat-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(130px,1fr));gap:12px;margin:16px 0}
.stat-item{background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);padding:14px;text-align:center}
.stat-item .si-val{font-size:20px;font-weight:800;color:var(--primary-dark);font-family:var(--font-mono)}
.stat-item .si-label{font-size:10px;color:var(--text-muted);margin-top:2px;font-weight:600;text-transform:uppercase;letter-spacing:.3px}
.date-input{font-family:var(--font-body);font-size:16px;padding:12px 14px;border:2px solid var(--border);border-radius:8px;width:100%;max-width:280px;outline:none;transition:border-color 0.2s;color:var(--text);background:var(--card)}
.date-input:focus{border-color:var(--primary)}
@media(max-width:600px){.tool-hero{grid-template-columns:1fr}.stat-grid{grid-template-columns:1fr 1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">Age Calculator</a><a href="#how-to-use">How to Use</a><a href="#legal-ages">Legal Ages</a><a href="#senior">Senior Citizen</a><a href="#exams">Exam Age Limits</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Age Calculator</nav> --}}

<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Age Calculator — <span>Exact Age</span> in Years, Months & Days</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Calculate your exact age from date of birth in years, months, and days. Also shows total months, weeks, days, hours, and minutes lived, next birthday countdown with day of week, and zodiac sign. Useful for government documents, school admissions, senior citizen verification, exam eligibility, and retirement planning.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate Your Age</h2>
    <noscript><div class="noscript-box">This tool requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="form-group"><label>Date of Birth</label><input type="date" id="inDob" class="date-input"></div>
    <button class="btn-calculate" onclick="calcAge()">Calculate Age</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use</h2><p>Enter your date of birth and click Calculate. The tool computes your exact age as of today, accounting for leap years and varying month lengths. Results include age breakup, total time lived stats, next birthday countdown, and zodiac sign.</p><div class="callout"><p><strong>Tip:</strong> For senior citizen tax benefits in India you need 60+ years (higher exemption limit) and 80+ for super senior (even higher limit). Check eligibility at <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a>. Senior citizens also get 0.5% extra FD rates at most banks regulated by <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a>.</p></div></section>

<section class="content-section" id="legal-ages"><h2>Legal Ages in India</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Purpose</th><th>Age Required</th><th>Authority</th></tr></thead><tbody>
<tr><td>Voting</td><td>18 years</td><td>Election Commission</td></tr>
<tr><td>Driving (with gear)</td><td>18 years</td><td>RTO</td></tr>
<tr><td>Driving (without gear)</td><td>16 years</td><td>RTO</td></tr>
<tr><td>Marriage (Men)</td><td>21 years</td><td>Special Marriage Act</td></tr>
<tr><td>Marriage (Women)</td><td>18 years</td><td>Special Marriage Act</td></tr>
<tr><td>PAN Card</td><td>No minimum</td><td>Income Tax Dept</td></tr>
<tr><td>Aadhaar Card</td><td>No minimum</td><td>UIDAI</td></tr>
<tr><td>Employment (general)</td><td>14 years</td><td>Child Labour Act</td></tr>
<tr><td>Employment (hazardous)</td><td>18 years</td><td>Factories Act</td></tr>
</tbody></table></div></section>

<section class="content-section" id="senior"><h2>Senior Citizen Age Benefits</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Category</th><th>Age</th><th>IT Exemption (Old Regime)</th><th>Other Benefits</th></tr></thead><tbody>
<tr><td>General</td><td>Below 60</td><td>&#8377;2.5 Lakh</td><td>Standard rates</td></tr>
<tr><td>Senior Citizen</td><td>60&ndash;79</td><td>&#8377;3 Lakh</td><td>+0.5% FD, 80TTB &#8377;50K, priority queue</td></tr>
<tr><td>Super Senior</td><td>80+</td><td>&#8377;5 Lakh</td><td>All senior benefits + higher exemption</td></tr>
</tbody></table></div></section>

<section class="content-section" id="exams"><h2>Government Exam Age Limits</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Exam</th><th>Min Age</th><th>Max Age (General)</th><th>Relaxation</th></tr></thead><tbody>
<tr><td>UPSC Civil Services</td><td>21</td><td>32</td><td>OBC +3, SC/ST +5</td></tr>
<tr><td>SSC CGL</td><td>18</td><td>32</td><td>OBC +3, SC/ST +5</td></tr>
<tr><td>Bank PO (IBPS)</td><td>20</td><td>30</td><td>OBC +3, SC/ST +5</td></tr>
<tr><td>NEET</td><td>17</td><td>No limit</td><td>N/A</td></tr>
<tr><td>JEE Main</td><td>17</td><td>No limit</td><td>N/A</td></tr>
<tr><td>SSC CHSL</td><td>18</td><td>27</td><td>OBC +3, SC/ST +5</td></tr>
</tbody></table></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need tax planning based on age?</strong> Senior citizens get higher exemptions, 80TTB deduction, and better FD rates. Our CAs optimize your tax based on age bracket. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20age-based%20tax%20planning%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions</h2><div id="faqList"></div></section>
</div><aside class="sidebar-col">
    <div class="cta-card"><h3>Need Tax Help?</h3><p>Our CAs help with tax planning, ITR filing & compliance across India.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20tax%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a><a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a><a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Popular Tools</h3><a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a><a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a><a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator <span class="arrow">&rarr;</span></a><a href="/tools/sip-calculator" class="sidebar-link">SIP Calculator <span class="arrow">&rarr;</span></a><a href="/tools/percentage-calculator" class="sidebar-link">Percentage Calculator <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside></div>

<script>
function resetForm(){document.getElementById('inDob').value='';document.getElementById('resPanel').classList.remove('visible');}
function calcAge(){
var dob=document.getElementById('inDob').value;if(!dob){alert('Please enter date of birth.');return;}
var bd=new Date(dob),now=new Date();if(bd>now){alert('Date of birth cannot be in the future.');return;}
var years=now.getFullYear()-bd.getFullYear(),months=now.getMonth()-bd.getMonth(),days=now.getDate()-bd.getDate();
if(days<0){months--;days+=new Date(now.getFullYear(),now.getMonth(),0).getDate();}
if(months<0){years--;months+=12;}
var totalDays=Math.floor((now-bd)/(1000*60*60*24));
var totalWeeks=Math.floor(totalDays/7),totalMonths=years*12+months,totalHours=totalDays*24,totalMin=totalHours*60;
var nextBd=new Date(now.getFullYear(),bd.getMonth(),bd.getDate());
if(nextBd<=now)nextBd=new Date(now.getFullYear()+1,bd.getMonth(),bd.getDate());
var daysToNext=Math.ceil((nextBd-now)/(1000*60*60*24));
var dayNames=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var zodiac=[{n:'Capricorn',s:'Dec 22 – Jan 19'},{n:'Aquarius',s:'Jan 20 – Feb 18'},{n:'Pisces',s:'Feb 19 – Mar 20'},{n:'Aries',s:'Mar 21 – Apr 19'},{n:'Taurus',s:'Apr 20 – May 20'},{n:'Gemini',s:'May 21 – Jun 20'},{n:'Cancer',s:'Jun 21 – Jul 22'},{n:'Leo',s:'Jul 23 – Aug 22'},{n:'Virgo',s:'Aug 23 – Sep 22'},{n:'Libra',s:'Sep 23 – Oct 22'},{n:'Scorpio',s:'Oct 23 – Nov 21'},{n:'Sagittarius',s:'Nov 22 – Dec 21'}];
var m=bd.getMonth()+1,d=bd.getDate(),zi=0;
if((m==1&&d>=20)||(m==2&&d<=18))zi=1;else if((m==2&&d>=19)||(m==3&&d<=20))zi=2;else if((m==3&&d>=21)||(m==4&&d<=19))zi=3;else if((m==4&&d>=20)||(m==5&&d<=20))zi=4;else if((m==5&&d>=21)||(m==6&&d<=20))zi=5;else if((m==6&&d>=21)||(m==7&&d<=22))zi=6;else if((m==7&&d>=23)||(m==8&&d<=22))zi=7;else if((m==8&&d>=23)||(m==9&&d<=22))zi=8;else if((m==9&&d>=23)||(m==10&&d<=22))zi=9;else if((m==10&&d>=23)||(m==11&&d<=21))zi=10;else if((m==11&&d>=22)||(m==12&&d<=21))zi=11;

var h='<div class="tool-hero"><div class="tool-box b1"><div class="tb-label">Your Age</div><div class="tb-value">'+years+' Years</div><div class="tb-sub">'+months+' months, '+days+' days</div></div><div class="tool-box b2"><div class="tb-label">Next Birthday</div><div class="tb-value">'+daysToNext+' Days</div><div class="tb-sub">'+nextBd.toLocaleDateString('en-IN',{day:'numeric',month:'short',year:'numeric'})+' ('+dayNames[nextBd.getDay()]+')</div></div><div class="tool-box b3"><div class="tb-label">Zodiac</div><div class="tb-value">'+zodiac[zi].n+'</div><div class="tb-sub">'+zodiac[zi].s+'</div></div></div>';
h+='<div class="stat-grid"><div class="stat-item"><div class="si-val">'+totalMonths.toLocaleString()+'</div><div class="si-label">Total Months</div></div><div class="stat-item"><div class="si-val">'+totalWeeks.toLocaleString()+'</div><div class="si-label">Total Weeks</div></div><div class="stat-item"><div class="si-val">'+totalDays.toLocaleString()+'</div><div class="si-label">Total Days</div></div><div class="stat-item"><div class="si-val">'+totalHours.toLocaleString()+'</div><div class="si-label">Total Hours</div></div><div class="stat-item"><div class="si-val">'+totalMin.toLocaleString()+'</div><div class="si-label">Total Minutes</div></div></div>';
h+='<div class="res-card"><div class="res-card-hd"><h3>Age Details</h3><span class="res-badge info">As of Today</span></div><div class="res-card-bd"><table class="cmp-table"><tr><td>Date of Birth</td><td><strong>'+bd.toLocaleDateString('en-IN',{day:'numeric',month:'long',year:'numeric'})+' ('+dayNames[bd.getDay()]+')</strong></td></tr><tr><td>Exact Age</td><td style="font-size:16px;color:var(--primary)"><strong>'+years+' years, '+months+' months, '+days+' days</strong></td></tr><tr><td>Next Birthday</td><td>'+daysToNext+' days ('+nextBd.toLocaleDateString('en-IN',{day:'numeric',month:'short',year:'numeric'})+')</td></tr><tr><td>Zodiac Sign</td><td>'+zodiac[zi].n+' ('+zodiac[zi].s+')</td></tr><tr><td>Senior Citizen (60+)?</td><td>'+(years>=60?'<strong style="color:var(--success)">✔ Yes'+(years>=80?' (Super Senior 80+)':'')+' — eligible for higher tax exemption</strong>':'<strong>No — '+(60-years)+' years to go</strong>')+'</td></tr></table></div></div>';
h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20age-based%20tax%20planning." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a></div>';
document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcAge();});
var FAQS=[
{q:"How does the age calculator work?",a:"Enter your date of birth and the calculator computes your exact age in years months and days as of today. It accounts for leap years and varying month lengths of 28 to 31 days. Results include total months weeks days hours and minutes lived plus your next birthday countdown with zodiac sign."},
{q:"How to calculate age for government documents?",a:"For Indian government documents like passport Aadhaar voter ID and PAN card age is calculated as completed years from date of birth to current date. This is the standard Western method used worldwide. Courts accept birth certificate as primary proof of age for all official purposes in India."},
{q:"How is age calculated for school admission?",a:"Most Indian schools follow age cutoff of March 31 or September 30 depending on the state. A child must be 6 years old by the cutoff date for Class 1 admission under the Right to Education Act 2009. Some CBSE affiliated schools use March 31 while state boards may vary. Check state specific rules."},
{q:"What is chronological vs biological age?",a:"Chronological age is your actual age from birth date which this calculator computes accurately. Biological age reflects body health and fitness and can differ from chronological age. For all legal financial tax and official purposes in India only chronological age calculated from date of birth is relevant."},
{q:"How to check senior citizen eligibility?",a:"In India senior citizen status begins at 60 years for income tax benefits higher FD rates railway concessions and health insurance. Super senior citizen is 80 years and above with even higher tax exemption limits. Enter your birth date here to check exact age and eligibility for these age-based benefits."},
{q:"What is the legal age for various purposes in India?",a:"Voting 18 years. Driving with gear 18. Marriage 21 for men 18 for women. Drinking 21 to 25 by state. Employment minimum 14 years and 18 for hazardous work. Senior citizen tax benefit 60 years. Super senior 80 years. PAN card application has no minimum age. Aadhaar can be obtained at any age."},
{q:"How to calculate age in months for infants?",a:"For infants age is typically expressed in months until 24 months then in years. This calculator shows total months lived which is useful for pediatric milestones vaccination schedules and childcare planning. Indian immunization schedule uses age in weeks and months for scheduling doses accurately."},
{q:"Is age calculated differently in different countries?",a:"Most countries including India use the Western system counting completed years from birth date. Some East Asian countries like South Korea traditionally count age differently where you are 1 at birth. This calculator uses the standard international and Indian method of completed years months and days."},
{q:"How to calculate retirement age?",a:"Indian government retirement age is 60 for central employees and varies by state from 58 to 62. Private sector retirement is typically 58 to 60 per company policy. Enter your birth date and this calculator shows your exact current age and how many years months and days remain until any target retirement age."},
{q:"Can I calculate age on a specific date?",a:"This calculator computes age as of today. For age on a specific past or future date use our Date Difference Calculator tool which lets you enter any two dates. This is useful for calculating age on exam dates admission cutoff dates or any historical date for legal or official purposes."},
{q:"How is age verified officially in India?",a:"Primary documents for age verification include birth certificate issued by municipal authority school leaving certificate passport and Aadhaar card. In absence of birth certificate courts accept school records as evidence. Affidavit is accepted as last resort. PAN card date of birth is verified against income tax records."},
{q:"What is the age limit for various government exams?",a:"UPSC Civil Services 21 to 32 years with relaxation for reserved categories. SSC CGL 18 to 32. Banking PO 20 to 30. NEET no upper limit since 2024. JEE no age limit. Age relaxation of 3 to 5 years is available for SC ST OBC and differently abled candidates in most government examinations."},
{q:"How accurate is this age calculator?",a:"The calculator accounts for all leap years including century leap year rules and varying month lengths from 28 to 31 days. It gives accuracy to the exact day. For precise legal purposes always verify the date of birth from official documents like birth certificate or school leaving certificate."}
];

function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});

</script>
@endsection