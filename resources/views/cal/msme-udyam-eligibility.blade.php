@extends('layouts.app')
@section('meta')
    <title>MSME Udyam Eligibility Checker | Micro, Small or Medium</title>
    <meta name="description" content="Free MSME Udyam eligibility checker: see if you qualify as Micro, Small or Medium enterprise by investment and turnover limits, with benefits summary. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/msme-udyam-eligibility">
    <meta property="og:title" content="MSME/Udyam Eligibility Checker &mdash; Free 2026 | Patron Accounting">
    <meta property="og:description" content="Check MSME eligibility. Micro, Small, Medium classification by investment and turnover.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/msme-udyam-eligibility">
    <meta property="og:image" content="/tools/og-msme-eligibility.png">
    <meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MSME/Udyam Eligibility Checker &mdash; Free 2026">
    <meta name="twitter:description" content="Check MSME eligibility by investment and turnover criteria.">
@endsection

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"MSME Udyam Registration Eligibility Checker India 2026","description":"Free online tool to check if your business qualifies as Micro Small or Medium Enterprise under MSME Development Act. Enter investment in plant and machinery and annual turnover to get instant classification with benefits summary and registration guidance.","url":"/tools/msme-udyam-eligibility","applicationCategory":"BusinessApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"MSME Eligibility","item":"/tools/msme-udyam-eligibility"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is MSME/Udyam Registration?","acceptedAnswer":{"@type":"Answer","text":"Udyam Registration is the government process to register micro small and medium enterprises under the MSME Development Act 2006. It replaced the earlier Udyog Aadhaar from July 2020. Registration is free on the udyamregistration.gov.in portal and provides access to priority sector lending, subsidies, and government tender benefits."}},{"@type":"Question","name":"What are the MSME classification criteria?","acceptedAnswer":{"@type":"Answer","text":"Micro: investment up to 1 crore and turnover up to 5 crore. Small: investment up to 10 crore and turnover up to 50 crore. Medium: investment up to 50 crore and turnover up to 250 crore. Both investment and turnover criteria must be satisfied. Classification is based on self-declaration linked to ITR and GST data."}},{"@type":"Question","name":"Is Udyam Registration mandatory?","acceptedAnswer":{"@type":"Answer","text":"Not mandatory for all businesses but required to avail MSME benefits like priority sector lending at lower rates, government tender preferences, subsidy schemes like CLCSS and CGTMSE, delayed payment protection under MSMED Act, and lower electricity bills in some states."}},{"@type":"Question","name":"What documents are needed for Udyam?","acceptedAnswer":{"@type":"Answer","text":"Only Aadhaar number of the proprietor or managing partner or director is mandatory. PAN and GST details are auto-validated from government databases. No documents need to be uploaded. The process is entirely online and paperless on the Udyam portal. Registration takes under 15 minutes making it one of the simplest government registrations in India."}},{"@type":"Question","name":"Can a Private Limited Company get Udyam?","acceptedAnswer":{"@type":"Answer","text":"Yes any business entity including Pvt Ltd LLP partnership proprietorship and even trusts and cooperatives can register under Udyam if they meet the investment and turnover criteria for micro small or medium enterprise classification. The entity type does not affect eligibility only the investment in plant and machinery and annual domestic turnover matter."}},{"@type":"Question","name":"What is the investment limit for MSME?","acceptedAnswer":{"@type":"Answer","text":"Investment in plant and machinery or equipment: Micro up to 1 crore, Small up to 10 crore, Medium up to 50 crore. Investment is calculated excluding land and building as per the MSMED Act 2006 notification dated June 2020. For both manufacturing and services the same investment limits apply to equipment and plant."}},{"@type":"Question","name":"What is the turnover limit for MSME?","acceptedAnswer":{"@type":"Answer","text":"Annual turnover: Micro up to 5 crore, Small up to 50 crore, Medium up to 250 crore. Turnover is calculated excluding exports which benefits export-oriented businesses significantly. GST turnover data from GSTN is used for automatic verification. Both investment AND turnover criteria must qualify for the applicable MSME category."}},{"@type":"Question","name":"What benefits does MSME registration provide?","acceptedAnswer":{"@type":"Answer","text":"Key benefits include priority sector lending from banks at lower rates, collateral-free loans under CGTMSE up to 5 crore, preference in government tenders with 25 percent procurement reserved for MSMEs, protection against delayed payments from buyers under MSMED Act, subsidy on patent and trademark registration, and lower industrial electricity tariffs in many states."}},{"@type":"Question","name":"Is Udyam Registration free?","acceptedAnswer":{"@type":"Answer","text":"Yes Udyam Registration on the official portal udyamregistration.gov.in is completely free with zero government charges. Beware of third-party websites charging fees as they are not authorised by the MSME Ministry. The process takes about 10 to 15 minutes if Aadhaar PAN and GST details are ready. No professional assistance is typically needed."}},{"@type":"Question","name":"Can I update my Udyam Registration?","acceptedAnswer":{"@type":"Answer","text":"Yes you can update details like investment turnover bank account and contact information on the Udyam portal anytime without any fee. Re-classification from micro to small or medium happens automatically based on updated ITR and GST data linked from government databases. You receive an updated Udyam Registration certificate after each change."}},{"@type":"Question","name":"What is the validity of Udyam Registration?","acceptedAnswer":{"@type":"Answer","text":"Udyam Registration has no expiry date and is valid for lifetime of the enterprise. However the classification as micro small or medium may change automatically based on annual investment and turnover data linked from ITR and GST databases. If your business grows beyond medium enterprise limits the registration becomes inactive."}},{"@type":"Question","name":"Does export turnover count for MSME?","acceptedAnswer":{"@type":"Answer","text":"No export turnover is excluded from the total turnover calculation for MSME classification purposes under the June 2020 notification. This means export-oriented businesses can have significantly higher total revenue and still qualify as MSME based only on domestic turnover. This provision encourages Indian MSMEs to focus on exports without losing benefits."}},{"@type":"Question","name":"What is the MSMED Act delayed payment protection?","acceptedAnswer":{"@type":"Answer","text":"Under the MSMED Act 2006 buyers must pay MSME suppliers within 45 days. If delayed the buyer must pay compound interest at 3 times the bank rate. MSMEs can file complaints with the MSME Facilitation Council for recovery of delayed payments."}}]}</script>
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
/* ====== RESPONSIVE &mdash; TABLET (768-1024px) ====== */
@media(max-width:1024px){
.main-layout{padding:0 16px 32px}
.hero{padding:28px 16px 20px}
.tldr{margin-left:16px;margin-right:16px}
.calc-card{padding:28px}
.content-section{padding:28px}
}

/* ====== RESPONSIVE &mdash; SMALL TABLET / LARGE PHONE (481-767px) ====== */
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

/* ====== RESPONSIVE &mdash; MOBILE (max 480px) ====== */
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

/* ====== RESPONSIVE &mdash; VERY SMALL (max 360px) ====== */
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


.elig-item{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 18px;background:var(--surface);border:1.5px solid var(--border);border-radius:var(--radius);transition:all 0.2s;margin-bottom:8px}
.elig-item.pass{border-color:var(--success);background:#F0FDF4}
.elig-item.fail{border-color:var(--danger);background:#FEF2F2}
.elig-label{font-size:14px;font-weight:500;color:var(--text);flex:1;line-height:1.4}
.elig-yn{display:flex;background:var(--surface-alt);border-radius:8px;padding:3px;gap:3px;min-width:130px}
.elig-yn button{flex:1;padding:6px 12px;border:none;border-radius:6px;font-family:var(--font-body);font-size:12px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.2s}
.elig-yn button.active{background:var(--card);box-shadow:var(--shadow-sm)}
.elig-yn button.active.y{color:var(--success)}
.elig-yn button.active.n{color:var(--danger)}
.tool-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.tool-box{border-radius:var(--radius);padding:20px;text-align:center}
.tool-box .tb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.tool-box .tb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.tool-box .tb-sub{font-size:11px;opacity:.8;margin-top:2px}
.tool-box.b1{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.tool-box.b2{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.tool-box.b3{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
@media(max-width:600px){.tool-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#checker">Eligibility Checker</a><a href="#how-to-use">How to Use</a><a href="#criteria">Criteria</a><a href="#benefits">Benefits</a><a href="#process">Registration Process</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>MSME Eligibility</nav> --}}
<header class="hero" id="checker"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>MSME/Udyam Registration <span>Eligibility Checker</span></h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Check if your business qualifies as Micro, Small, or Medium Enterprise under the <a href="https://msme.gov.in/" target="_blank" rel="noopener">MSME Development Act</a>. Enter your investment in plant &amp; machinery and annual turnover (excluding exports). Get instant classification, benefits you can avail, and registration guidance. Udyam Registration is free on the <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">official portal</a>.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Check MSME Eligibility</h2>
    <noscript><div class="noscript-box">This tool requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="form-group"><label>Investment in Plant &amp; Machinery (&#8377;)</label><select id="inInvest"><option value="5000000">Up to &#8377;50 Lakh</option><option value="10000000" selected>Up to &#8377;1 Crore</option><option value="50000000">&#8377;1&ndash;5 Crore</option><option value="100000000">&#8377;5&ndash;10 Crore</option><option value="250000000">&#8377;10&ndash;25 Crore</option><option value="500000000">&#8377;25&ndash;50 Crore</option><option value="500000001">Above &#8377;50 Crore</option></select><div style="font-size:12px;color:var(--text-muted);margin-top:4px">Excluding land and building</div></div>
    <div class="form-group"><label>Annual Turnover (&#8377;) &mdash; Excluding Exports</label><select id="inTurnover"><option value="2500000">Up to &#8377;25 Lakh</option><option value="50000000" selected>Up to &#8377;5 Crore</option><option value="250000000">&#8377;5&ndash;25 Crore</option><option value="500000000">&#8377;25&ndash;50 Crore</option><option value="1000000000">&#8377;50&ndash;100 Crore</option><option value="2500000000">&#8377;100&ndash;250 Crore</option><option value="2500000001">Above &#8377;250 Crore</option></select></div>
    <div class="form-group"><label>Business Type</label><div class="toggle-group" id="bizType"><button type="button" class="toggle-btn active" data-val="mfg" onclick="setTg('bizType',this)">Manufacturing</button><button type="button" class="toggle-btn" data-val="svc" onclick="setTg('bizType',this)">Services</button><button type="button" class="toggle-btn" data-val="trade" onclick="setTg('bizType',this)">Trading</button></div></div>
    <button class="btn-calculate" onclick="checkMSME()">Check Eligibility</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use</h2><p>Enter your investment in plant and machinery (excluding land/building) and annual domestic turnover (excluding exports). The tool classifies your business as Micro, Small, Medium, or Not Eligible based on <a href="https://msme.gov.in/" target="_blank" rel="noopener">MSME Ministry</a> criteria updated June 2020.</p><div class="callout"><p><strong>CA Tip:</strong> Register on <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">udyamregistration.gov.in</a> (free). Benefits include CGTMSE collateral-free loans up to &#8377;5 Cr, priority sector lending, and govt tender preferences. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends all eligible businesses register.</p></div></section>

<section class="content-section" id="criteria"><h2>MSME Classification Criteria</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Category</th><th>Investment (P&amp;M)</th><th>Turnover (excl exports)</th></tr></thead><tbody>
<tr><td><strong>Micro</strong></td><td>&le; &#8377;1 Crore</td><td>&le; &#8377;5 Crore</td></tr>
<tr><td><strong>Small</strong></td><td>&le; &#8377;10 Crore</td><td>&le; &#8377;50 Crore</td></tr>
<tr><td><strong>Medium</strong></td><td>&le; &#8377;50 Crore</td><td>&le; &#8377;250 Crore</td></tr>
</tbody></table></div><p>Both criteria must be met. If investment qualifies for one category but turnover for another, the higher category applies (composite criteria). Same limits for manufacturing, services, and trading.</p></section>

<section class="content-section" id="benefits"><h2>Key Benefits of MSME Registration</h2><ul><li><strong>CGTMSE:</strong> Collateral-free credit guarantee up to &#8377;5 Cr from banks</li><li><strong>Priority sector lending:</strong> Banks must allocate credit to MSMEs at competitive rates</li><li><strong>Govt tender preference:</strong> 25% procurement reserved for MSMEs, 3% for women-owned</li><li><strong>Delayed payment protection:</strong> Buyers must pay within 45 days under MSMED Act</li><li><strong>Subsidy schemes:</strong> CLCSS (technology upgrade), ZED certification, patent/trademark subsidies</li><li><strong>Lower electricity tariff:</strong> Industrial rates in many states for registered MSMEs</li></ul></section>

<section class="content-section" id="process"><h2>Udyam Registration Process &mdash; Step by Step</h2><p>The registration process under the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">MSMED Act 2006</a> has been fully digitised since July 2020. Here is the complete step-by-step process:</p><ul><li><strong>Step 1 &mdash; Visit the portal:</strong> Go to <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">udyamregistration.gov.in</a>. Click &ldquo;For New Entrepreneurs who are not Registered yet as MSME&rdquo; or &ldquo;For those already having registration as EM-II or UAM&rdquo; for migration.</li><li><strong>Step 2 &mdash; Aadhaar verification:</strong> Enter the Aadhaar number of the proprietor, managing partner, or authorised director. OTP is sent to Aadhaar-linked mobile for verification.</li><li><strong>Step 3 &mdash; PAN &amp; GST validation:</strong> Enter PAN (mandatory for Pvt Ltd, LLP, partnership). GSTIN details are auto-fetched from GSTN. For businesses without PAN, Aadhaar alone is sufficient.</li><li><strong>Step 4 &mdash; Fill enterprise details:</strong> Enter business name, type (manufacturing/services/trading), NIC code, number of employees, investment in plant &amp; machinery, and annual turnover.</li><li><strong>Step 5 &mdash; Submit &amp; get certificate:</strong> On submission, the Udyam Registration Number (URN) is generated instantly along with a downloadable e-certificate. The URN format is UDYAM-XX-00-0000000.</li></ul><div class="callout"><p><strong>Important:</strong> Only one Udyam Registration is allowed per enterprise. Multiple registrations for the same business attract penalties. If you have multiple business units, each needs separate registration only if they operate as independent entities with different PANs.</p></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need MSME registration help?</strong> Our CAs handle Udyam Registration, MSME loans, and compliance for businesses across India. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20MSME%20Udyam%20Registration." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions</h2><div id="faqList"></div></section>
</div>
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need MSME Help?</h3><p>Our CAs handle Udyam Registration, MSME loans &amp; compliance.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Udyam%20registration%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/udyam-registration" class="sidebar-link">Udyam Registration <span class="arrow">&rarr;</span></a><a href="/startup-registration" class="sidebar-link">Startup Registration <span class="arrow">&rarr;</span></a><a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a><a href="/private-limited-company-registration" class="sidebar-link">Pvt Ltd Registration <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/company-registration-cost-calculator" class="sidebar-link">Registration Cost Calculator <span class="arrow">&rarr;</span></a><a href="/tools/business-structure-comparison" class="sidebar-link">Structure Comparison <span class="arrow">&rarr;</span></a><a href="/tools/startup-india-eligibility" class="sidebar-link">Startup India Eligibility <span class="arrow">&rarr;</span></a><a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside>
</div>

<script>
function getVal(id){var g=document.getElementById(id);if(!g)return'';var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtCr(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(0)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(0)+' L';return fmt(n);}
function resetForm(){document.getElementById('inInvest').value='10000000';document.getElementById('inTurnover').value='50000000';document.getElementById('bizType').querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',i===0);});document.getElementById('resPanel').classList.remove('visible');}

function checkMSME(){
var inv=parseInt(document.getElementById('inInvest').value);
var to=parseInt(document.getElementById('inTurnover').value);
var biz=getVal('bizType');
var invCat='none',toCat='none';
if(inv<=10000000)invCat='micro';else if(inv<=100000000)invCat='small';else if(inv<=500000000)invCat='medium';
if(to<=50000000)toCat='micro';else if(to<=500000000)toCat='small';else if(to<=2500000000)toCat='medium';
var cats=['micro','small','medium','none'];
var finalCat=cats[Math.max(cats.indexOf(invCat),cats.indexOf(toCat))];
var eligible=finalCat!=='none';
var labels={micro:'Micro Enterprise',small:'Small Enterprise',medium:'Medium Enterprise',none:'Not Eligible (Above MSME Limits)'};
var colors={micro:'var(--success)',small:'var(--primary)',medium:'#4f46e5',none:'var(--danger)'};

var h='';
if(eligible){
h+='<div class="tool-hero"><div class="tool-box b1"><div class="tb-label">Classification</div><div class="tb-value">'+labels[finalCat]+'</div><div class="tb-sub">'+(biz==='mfg'?'Manufacturing':biz==='svc'?'Services':'Trading')+'</div></div><div class="tool-box b2"><div class="tb-label">Investment Category</div><div class="tb-value">'+labels[invCat]+'</div><div class="tb-sub">\u2264 '+fmtCr(inv)+'</div></div><div class="tool-box b3"><div class="tb-label">Turnover Category</div><div class="tb-value">'+labels[toCat]+'</div><div class="tb-sub">\u2264 '+fmtCr(to)+'</div></div></div>';
h+='<div class="callout green"><p><strong>\u2714 Eligible for Udyam Registration as '+labels[finalCat]+'!</strong> Register free at <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">udyamregistration.gov.in</a>. Benefits: CGTMSE loans up to \u20B95 Cr, priority sector lending, govt tender preference, delayed payment protection.</p></div>';
}else{
h+='<div class="res-hero"><div class="res-box ineligible"><div class="rb-label">Classification</div><div class="rb-value">\u2718 Not Eligible</div><div class="rb-sub">Investment or turnover exceeds MSME limits</div></div></div>';
h+='<div class="callout" style="background:#FEF2F2;border-left-color:var(--danger)"><p style="color:#991B1B"><strong>Above MSME Limits.</strong> Your investment ('+fmtCr(inv)+') or turnover ('+fmtCr(to)+') exceeds the Medium enterprise ceiling of \u20B950 Cr investment and \u20B9250 Cr turnover. You may still benefit from other government schemes for large enterprises.</p></div>';
}
h+='<div class="res-card"><div class="res-card-hd"><h3>Eligibility Details</h3><span class="res-badge '+(eligible?'pass':'fail')+'">'+(eligible?'Eligible':'Not Eligible')+'</span></div><div class="res-card-bd"><table class="cmp-table"><tr><td>Investment in P&M</td><td>'+fmtCr(inv)+'</td></tr><tr><td>Annual Turnover (excl exports)</td><td>'+fmtCr(to)+'</td></tr><tr><td>Business Type</td><td>'+(biz==='mfg'?'Manufacturing':biz==='svc'?'Services':'Trading')+'</td></tr><tr><td>Investment Category</td><td><strong>'+labels[invCat]+'</strong></td></tr><tr><td>Turnover Category</td><td><strong>'+labels[toCat]+'</strong></td></tr><tr style="background:var(--surface-alt)"><td><strong>Final Classification</strong></td><td style="color:'+colors[finalCat]+';font-size:16px"><strong>'+labels[finalCat]+'</strong></td></tr></table></div></div>';
h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20checked%20MSME%20eligibility.%20I%20need%20help%20with%20Udyam%20registration." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Register Now</a></div>';
document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is MSME/Udyam Registration?",a:"Government process to register micro, small, and medium enterprises under MSMED Act 2006. Replaced Udyog Aadhaar from July 2020. Free on udyamregistration.gov.in. Provides priority lending, subsidies, and govt tender benefits."},
{q:"What are the classification criteria?",a:"Micro: investment \u22641Cr, turnover \u22645Cr. Small: \u226410Cr, \u226450Cr. Medium: \u226450Cr, \u2264250Cr. Both criteria must be met. Based on self-declaration linked to ITR and GST data. Same for manufacturing and services."},
{q:"Is Udyam Registration mandatory?",a:"Not mandatory for all but required for MSME benefits: priority lending, CGTMSE loans, govt tender preference, delayed payment protection under MSMED Act, lower electricity, CLCSS subsidy."},
{q:"What documents are needed?",a:"Only Aadhaar of proprietor/partner/director. PAN and GST auto-validated from govt databases. No uploads needed. Fully online, paperless. Takes under 15 minutes \u2014 one of the simplest govt registrations in India."},
{q:"Can Pvt Ltd get Udyam?",a:"Yes. Any entity: Pvt Ltd, LLP, partnership, proprietorship, trusts, cooperatives. Only investment and turnover matter, not entity type. Many large companies register subsidiaries as MSMEs when they qualify."},
{q:"What is the investment limit?",a:"Plant & machinery: Micro \u22641Cr, Small \u226410Cr, Medium \u226450Cr. Excludes land and building per MSMED Act 2006 notification (June 2020). Same limits for manufacturing and services."},
{q:"What is the turnover limit?",a:"Micro \u22645Cr, Small \u226450Cr, Medium \u2264250Cr (excluding exports). GST data used for verification. Both investment AND turnover must qualify. Export exclusion benefits export-oriented businesses significantly."},
{q:"What benefits does registration provide?",a:"Priority lending, CGTMSE collateral-free loans up to \u20B95Cr, 25% govt procurement reserved for MSMEs, delayed payment protection (45-day rule), patent/trademark subsidy, lower electricity tariffs in many states."},
{q:"Is registration free?",a:"Yes, completely free on udyamregistration.gov.in. Zero govt charges. Beware of third-party sites charging fees \u2014 not authorised by MSME Ministry. Takes 10\u201315 minutes. No professional help usually needed."},
{q:"Can I update my registration?",a:"Yes, update investment, turnover, bank, contacts anytime for free. Re-classification (micro\u2192small\u2192medium) happens automatically from ITR/GST data. Updated certificate issued after each change."},
{q:"What is the validity?",a:"Lifetime validity, no expiry. But classification may change automatically based on annual ITR and GST data. If business grows beyond medium limits, registration becomes inactive."},
{q:"Does export turnover count?",a:"No \u2014 exports excluded from turnover calculation per June 2020 notification. Export-heavy businesses can have high total revenue but still qualify as MSME on domestic turnover only. Encourages export focus."},
{q:"What is delayed payment protection?",a:"MSMED Act 2006: buyers must pay MSMEs within 45 days. Delayed = compound interest at 3\u00D7 bank rate. File complaints with MSME Facilitation Council for recovery. Powerful tool for small suppliers."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection