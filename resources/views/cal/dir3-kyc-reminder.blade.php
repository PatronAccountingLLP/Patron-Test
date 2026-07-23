@extends('layouts.app')
@section('meta')
    <title>DIR-3 KYC Reminder | Due Date, Penalty & Filing</title>
    <meta name="description" content="Free DIR-3 KYC reminder: check the due date, countdown, late penalty and filing steps for annual DIN/DPIN KYC of directors and LLP partners. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/dir3-kyc-reminder">
    <meta property="og:title" content="DIR-3 KYC Due Date Reminder &mdash; Free 2026 | Patron Accounting">
    <meta property="og:description" content="DIR-3 KYC due date, countdown, penalty calculator. DIN/DPIN annual KYC for directors.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/dir3-kyc-reminder">
    <meta property="og:image" content="/tools/og-dir3-kyc.png">
    <meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="DIR-3 KYC Reminder &mdash; Free 2026">
    <meta name="twitter:description" content="DIR-3 KYC countdown, penalty, and filing steps for directors.">
@endsection

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"DIR-3 KYC Due Date Reminder India 2026","description":"Free online DIR-3 KYC due date reminder and penalty calculator for company directors and LLP designated partners. Shows countdown to September 30 deadline, penalty amount for late filing, DIN deactivation consequences, and step-by-step filing guide for both DIR-3 KYC full form and DIR-3 KYC-WEB.","url":"/tools/dir3-kyc-reminder","applicationCategory":"BusinessApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"DIR-3 KYC Reminder","item":"/tools/dir3-kyc-reminder"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is DIR-3 KYC?","acceptedAnswer":{"@type":"Answer","text":"DIR-3 KYC is the annual Know Your Customer verification mandatory for every person holding a Director Identification Number or Designated Partner Identification Number in India. It is filed through the MCA portal as per Rule 12A of the Companies Incorporation Rules 2014 to keep director details updated in government records."}},{"@type":"Question","name":"What is the due date for DIR-3 KYC?","acceptedAnswer":{"@type":"Answer","text":"The due date is September 30 every year. For FY 2025-26 the deadline is September 30 2026. The KYC must be filed for the financial year ending March 31. Directors must file every year even if there is no change in personal details. Late filing attracts a penalty of 5000 rupees."}},{"@type":"Question","name":"What is the penalty for not filing DIR-3 KYC?","acceptedAnswer":{"@type":"Answer","text":"Non-filing attracts a penalty of 5000 rupees payable before filing the delayed KYC. Additionally the DIN or DPIN is marked as Deactivated on the MCA portal. Deactivated DIN means the director cannot sign any MCA forms or participate in any company filings until KYC is completed and DIN is reactivated."}},{"@type":"Question","name":"What happens when DIN is deactivated?","acceptedAnswer":{"@type":"Answer","text":"When DIN is deactivated the director cannot file any MCA forms, cannot be appointed as director in any new company, and existing company filings requiring that director signature get blocked. The company compliance gets stuck until the director completes DIR-3 KYC and pays the 5000 rupee penalty for reactivation."}},{"@type":"Question","name":"What is the difference between DIR-3 KYC and DIR-3 KYC-WEB?","acceptedAnswer":{"@type":"Answer","text":"DIR-3 KYC is the full form filed for the first time with complete personal details, address proof, PAN, Aadhaar, passport photo, and digital signature. DIR-3 KYC-WEB is a simplified online verification for subsequent years that only requires OTP verification without uploading documents. Both are filed on the MCA portal."}},{"@type":"Question","name":"Who needs to file DIR-3 KYC?","acceptedAnswer":{"@type":"Answer","text":"Every person holding an allotted DIN or DPIN must file DIR-3 KYC annually whether or not they are currently a director in any active company. This includes resigned directors whose DIN is still active, designated partners of LLPs, and directors of struck-off companies whose DIN has not been surrendered."}},{"@type":"Question","name":"Can I file DIR-3 KYC myself?","acceptedAnswer":{"@type":"Answer","text":"Yes DIR-3 KYC-WEB for subsequent years can be filed by the director themselves through the MCA portal using mobile OTP and email OTP. First-time DIR-3 KYC full form requires a practicing professional CA CS or Cost Accountant to certify and file. DSC of the director is required for the full form."}},{"@type":"Question","name":"What documents are needed for DIR-3 KYC?","acceptedAnswer":{"@type":"Answer","text":"For first-time filing: PAN card, Aadhaar card, passport-size photograph, proof of permanent address, proof of present address, mobile number linked to Aadhaar, email address, and Class 3 DSC. For subsequent years via DIR-3 KYC-WEB only mobile OTP and email OTP are needed with no document uploads."}},{"@type":"Question","name":"Is DIR-3 KYC required for LLP partners?","acceptedAnswer":{"@type":"Answer","text":"Yes designated partners of LLPs holding DPIN must file DIR-3 KYC annually by September 30. The process is identical to company directors. DPIN and DIN are functionally the same for KYC purposes. Non-filing leads to DPIN deactivation and 5000 rupee penalty same as for company directors."}},{"@type":"Question","name":"What if I have DIN but no active directorship?","acceptedAnswer":{"@type":"Answer","text":"You must still file DIR-3 KYC every year as long as your DIN is active. If you do not intend to be a director in future you can surrender your DIN by filing DIR-5 form. Until DIN is surrendered the annual KYC obligation continues regardless of whether you hold any active directorship position."}},{"@type":"Question","name":"Can deactivated DIN be reactivated?","acceptedAnswer":{"@type":"Answer","text":"Yes file DIR-3 KYC with the 5000 rupee late fee and the DIN is reactivated within 1 to 3 working days after MCA processing. The reactivation is not automatic and depends on MCA portal processing time. During festive and year-end periods reactivation may take up to 5 to 7 working days."}},{"@type":"Question","name":"Is DIR-3 KYC filing free?","acceptedAnswer":{"@type":"Answer","text":"Filing DIR-3 KYC or DIR-3 KYC-WEB on the MCA portal has no government fee if filed before the September 30 deadline. Only late filing attracts the 5000 rupee penalty. Professional charges from CA or CS for assistance with first-time filing typically range from 500 to 2000 rupees per director."}},{"@type":"Question","name":"How to check DIR-3 KYC filing status?","acceptedAnswer":{"@type":"Answer","text":"Check on the MCA portal under MCA Services then DIN Services then Check DIN Status. Enter your DIN number to see if KYC is approved, pending, or not filed. You can also check via the MCA V3 portal dashboard after logging in. Status shows as Approved if KYC is successfully completed for the current year."}}]}</script>
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


.tool-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.tool-box{border-radius:var(--radius);padding:20px;text-align:center}
.tool-box .tb-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.tool-box .tb-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.tool-box .tb-sub{font-size:11px;opacity:.8;margin-top:2px}
.tool-box.b1{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.tool-box.b2{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.tool-box.b3{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.tool-box.warn{background:linear-gradient(135deg,#dc2626,#ef4444);color:#fff}
.countdown-ring{width:120px;height:120px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-direction:column;margin:20px auto;border:6px solid var(--border)}
.countdown-ring.safe{border-color:var(--success)}
.countdown-ring.warning{border-color:var(--accent)}
.countdown-ring.danger{border-color:var(--danger)}
.countdown-ring .cr-val{font-size:36px;font-weight:800;font-family:var(--font-mono);line-height:1}
.countdown-ring .cr-label{font-size:11px;font-weight:600;text-transform:uppercase;color:var(--text-muted)}
.step-list{counter-reset:steps}
.step-item{counter-increment:steps;padding:16px 18px 16px 60px;background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);margin-bottom:8px;position:relative;font-size:14px;line-height:1.6;color:var(--text-secondary)}
.step-item::before{content:counter(steps);position:absolute;left:18px;top:16px;width:28px;height:28px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700}
@media(max-width:600px){.tool-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#reminder">Reminder</a><a href="#how-to-use">How to Use</a><a href="#steps">Filing Steps</a><a href="#penalty">Penalty</a><a href="#documents">Documents</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>DIR-3 KYC Reminder</nav> --}}
<header class="hero" id="reminder"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>DIR-3 KYC <span>Due Date Reminder</span> &mdash; DIN/DPIN Annual KYC</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>DIR-3 KYC is mandatory annual KYC for all DIN/DPIN holders (company directors and LLP partners). Due date: <strong>September 30, 2026</strong>. Penalty for late filing: &#8377;5,000 + DIN deactivation. First-time: full DIR-3 KYC form with DSC. Subsequent years: simplified DIR-3 KYC-WEB with OTP only. Check your countdown and filing status below.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>DIR-3 KYC Countdown</h2>
    <noscript><div class="noscript-box">This tool requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div id="countdownArea"></div>
    <div class="form-group" style="margin-top:20px"><label>Have you filed DIR-3 KYC for FY 2025-26?</label><div class="toggle-group" id="filedStatus"><button type="button" class="toggle-btn active" data-val="no" onclick="setTg('filedStatus',this);updateUI()">Not Yet</button><button type="button" class="toggle-btn" data-val="yes" onclick="setTg('filedStatus',this);updateUI()">Yes, Filed</button></div></div>
    <div class="form-group"><label>Number of DINs you hold</label><input type="number" id="inDINs" value="1" min="1" max="10" style="max-width:100px" onchange="updateUI()"></div>
    <div id="statusArea"></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use This Reminder</h2><p>The countdown automatically shows days remaining to the DIR-3 KYC deadline of September 30, 2026. If the deadline has passed, it shows days overdue with penalty information. Check your DIN status on the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA portal</a> under DIN Services.</p><div class="callout"><p><strong>CA Tip:</strong> File early &mdash; don't wait until September. The MCA portal often faces heavy traffic in the last week of September causing delays and errors. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends filing DIR-3 KYC by August to avoid portal congestion. Rule 12A of <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Companies (Appointment and Qualification of Directors) Rules 2014</a> mandates this annual filing.</p></div></section>

<section class="content-section" id="steps"><h2>DIR-3 KYC Filing Steps</h2><h3>First-Time Filing (DIR-3 KYC Full Form)</h3><div class="step-list"><div class="step-item">Login to MCA V3 portal (mca.gov.in) with your registered email</div><div class="step-item">Navigate to MCA Services &rarr; DIN Services &rarr; DIR-3 KYC</div><div class="step-item">Enter DIN number &mdash; pre-filled details will appear</div><div class="step-item">Verify/update personal details: name, father's name, DOB, nationality</div><div class="step-item">Upload documents: PAN, Aadhaar, photo, address proof</div><div class="step-item">Verify mobile and email via OTP</div><div class="step-item">Attach DSC (Class 3) of the director and practicing professional (CA/CS)</div><div class="step-item">Submit &mdash; KYC approved within 1&ndash;3 working days</div></div><h3>Subsequent Years (DIR-3 KYC-WEB)</h3><div class="step-list"><div class="step-item">Login to MCA V3 portal</div><div class="step-item">Go to DIN Services &rarr; DIR-3 KYC-WEB</div><div class="step-item">Enter DIN &mdash; verify pre-filled details</div><div class="step-item">Receive OTP on registered mobile and email</div><div class="step-item">Submit OTPs &mdash; KYC approved instantly (no DSC or documents needed)</div></div></section>

<section class="content-section" id="penalty"><h2>Penalty for Late Filing</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Scenario</th><th>Fee</th><th>Consequence</th></tr></thead><tbody>
<tr><td>Filed before Sep 30</td><td>&#8377;0 (Free)</td><td>DIN remains active</td></tr>
<tr><td>Filed after Sep 30</td><td>&#8377;5,000 per DIN</td><td>DIN deactivated until filed</td></tr>
<tr><td>Multiple DINs late</td><td>&#8377;5,000 &times; each DIN</td><td>All DINs deactivated</td></tr>
<tr><td>Not filed at all</td><td>&#8377;5,000 (accrues annually)</td><td>DIN permanently deactivated, cannot sign MCA forms</td></tr>
</tbody></table></div></section>

<section class="content-section" id="documents"><h2>Documents Required</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Document</th><th>First-Time (DIR-3 KYC)</th><th>Subsequent (KYC-WEB)</th></tr></thead><tbody>
<tr><td>PAN Card</td><td>&#10004; Upload</td><td>Auto-verified</td></tr>
<tr><td>Aadhaar Card</td><td>&#10004; Upload</td><td>OTP only</td></tr>
<tr><td>Passport Photo</td><td>&#10004; Upload</td><td>Not needed</td></tr>
<tr><td>Address Proof</td><td>&#10004; Upload</td><td>Not needed</td></tr>
<tr><td>Mobile OTP</td><td>&#10004; Required</td><td>&#10004; Required</td></tr>
<tr><td>Email OTP</td><td>&#10004; Required</td><td>&#10004; Required</td></tr>
<tr><td>DSC (Class 3)</td><td>&#10004; Director + Professional</td><td>Not needed</td></tr>
<tr><td>Professional Certification</td><td>&#10004; CA/CS required</td><td>Not needed</td></tr>
</tbody></table></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need DIR-3 KYC help?</strong> Our CAs handle DIR-3 KYC filing for company directors and LLP partners across India. Same-day filing with DSC. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20DIR-3%20KYC%20filing%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions</h2><div id="faqList"></div></section>
</div>
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need KYC Help?</h3><p>Our CAs file DIR-3 KYC same-day for directors & LLP partners.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20DIR-3%20KYC%20filing%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/annual-roc-filing" class="sidebar-link">Annual ROC Filing <span class="arrow">&rarr;</span></a><a href="/private-limited-company-registration" class="sidebar-link">Pvt Ltd Registration <span class="arrow">&rarr;</span></a><a href="/llp-incorporation" class="sidebar-link">LLP Incorporation <span class="arrow">&rarr;</span></a><a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/roc-filing-due-date-calendar" class="sidebar-link">ROC Filing Calendar <span class="arrow">&rarr;</span></a><a href="/tools/llp-compliance-checklist" class="sidebar-link">LLP Compliance Checklist <span class="arrow">&rarr;</span></a><a href="/tools/company-registration-cost-calculator" class="sidebar-link">Registration Cost Calculator <span class="arrow">&rarr;</span></a><a href="/tools/startup-india-eligibility" class="sidebar-link">Startup India Eligibility <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside>
</div>

<script>
function getVal(id){var g=document.getElementById(id);var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}

function updateUI(){
var now=new Date(),deadline=new Date('2026-09-30T23:59:59');
var diff=Math.ceil((deadline-now)/(1000*60*60*24));
var filed=getVal('filedStatus')==='yes';
var dins=parseInt(document.getElementById('inDINs').value)||1;
var ca=document.getElementById('countdownArea');
var sa=document.getElementById('statusArea');

var ringClass=diff>60?'safe':diff>0?'warning':'danger';
var ringVal=diff>0?diff:Math.abs(diff);
var ringLabel=diff>0?'Days Left':'Days Overdue';

if(filed){
ca.innerHTML='<div class="countdown-ring safe"><div class="cr-val" style="color:var(--success)">\u2714</div><div class="cr-label">Filed</div></div><p style="text-align:center;color:var(--success);font-weight:700;font-size:15px">DIR-3 KYC filed for FY 2025-26. Your DIN is safe!</p>';
sa.innerHTML='<div class="callout green"><p style="color:#166534"><strong>All good!</strong> Your '+dins+' DIN(s) are compliant. Next KYC due: September 30, 2027. Set a reminder for August 2027 to file early.</p></div>';
}else{
ca.innerHTML='<div class="countdown-ring '+ringClass+'"><div class="cr-val" style="color:'+(diff>0?(diff>60?'var(--success)':'var(--accent)'):'var(--danger)')+'">'+ringVal+'</div><div class="cr-label">'+ringLabel+'</div></div><p style="text-align:center;font-weight:600;font-size:15px;color:'+(diff>0?'var(--text)':'var(--danger)')+'">Deadline: September 30, 2026'+(diff<=0?' <strong>\u2014 OVERDUE!</strong>':'')+'</p>';

var h='';
if(diff<=0){
var penalty=dins*5000;
h+='<div class="tool-hero"><div class="tool-box warn"><div class="tb-label">Status</div><div class="tb-value">OVERDUE</div><div class="tb-sub">'+Math.abs(diff)+' days past deadline</div></div><div class="tool-box b2"><div class="tb-label">Penalty</div><div class="tb-value">\u20B9'+penalty.toLocaleString('en-IN')+'</div><div class="tb-sub">'+dins+' DIN(s) \u00D7 \u20B95,000</div></div><div class="tool-box" style="background:linear-gradient(135deg,#991B1B,#dc2626);color:#fff"><div class="tb-label">DIN Status</div><div class="tb-value">Deactivated</div><div class="tb-sub">Cannot sign MCA forms</div></div></div>';
h+='<div class="callout" style="background:#FEF2F2;border-left-color:var(--danger)"><p style="color:#991B1B"><strong>\u26A0 Urgent:</strong> Your '+dins+' DIN(s) are likely deactivated. File DIR-3 KYC immediately with \u20B9'+penalty.toLocaleString('en-IN')+' penalty. DIN reactivation takes 1\u20133 working days after filing. <a href="https://wa.me/919459456700?text=Hi%2C%20my%20DIR-3%20KYC%20is%20overdue.%20I%20need%20urgent%20help." target="_blank" rel="noopener" style="color:#991B1B;font-weight:700;">Get urgent help &rarr;</a></p></div>';
}else if(diff<=30){
h+='<div class="callout" style="background:#FFFBEB;border-left-color:var(--accent)"><p style="color:#92400E"><strong>\u26A0 Due Soon:</strong> Only '+diff+' days left. File now to avoid \u20B95,000 penalty per DIN and DIN deactivation. MCA portal gets congested in the last week of September. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20file%20DIR-3%20KYC%20urgently." target="_blank" rel="noopener" style="color:#92400E;font-weight:700;">File now &rarr;</a></p></div>';
}else{
h+='<div class="callout green"><p style="color:#166534"><strong>'+diff+' days remaining.</strong> You have time but don\u2019t delay. File by August to avoid September portal rush. Filing is free before the deadline. '+dins+' DIN(s) to be filed.</p></div>';
}
sa.innerHTML=h;
}
}

var FAQS=[
{q:"What is DIR-3 KYC?",a:"DIR-3 KYC is the annual Know Your Customer verification mandatory for every person holding a Director Identification Number or Designated Partner Identification Number in India. It is filed through the MCA portal as per Rule 12A of the Companies Incorporation Rules 2014 to keep director details updated in government records."},
{q:"What is the due date for DIR-3 KYC?",a:"The due date is September 30 every year. For FY 2025-26 the deadline is September 30 2026. The KYC must be filed for the financial year ending March 31. Directors must file every year even if there is no change in personal details. Late filing attracts a penalty of 5000 rupees."},
{q:"What is the penalty for not filing DIR-3 KYC?",a:"Non-filing attracts a penalty of 5000 rupees payable before filing the delayed KYC. Additionally the DIN or DPIN is marked as Deactivated on the MCA portal. Deactivated DIN means the director cannot sign any MCA forms or participate in any company filings until KYC is completed and DIN is reactivated."},
{q:"What happens when DIN is deactivated?",a:"When DIN is deactivated the director cannot file any MCA forms, cannot be appointed as director in any new company, and existing company filings requiring that director signature get blocked. The company compliance gets stuck until the director completes DIR-3 KYC and pays the 5000 rupee penalty for reactivation."},
{q:"What is the difference between DIR-3 KYC and DIR-3 KYC-WEB?",a:"DIR-3 KYC is the full form filed for the first time with complete personal details, address proof, PAN, Aadhaar, passport photo, and digital signature. DIR-3 KYC-WEB is a simplified online verification for subsequent years that only requires OTP verification without uploading documents. Both are filed on the MCA portal."},
{q:"Who needs to file DIR-3 KYC?",a:"Every person holding an allotted DIN or DPIN must file DIR-3 KYC annually whether or not they are currently a director in any active company. This includes resigned directors whose DIN is still active, designated partners of LLPs, and directors of struck-off companies whose DIN has not been surrendered."},
{q:"Can I file DIR-3 KYC myself?",a:"Yes DIR-3 KYC-WEB for subsequent years can be filed by the director themselves through the MCA portal using mobile OTP and email OTP. First-time DIR-3 KYC full form requires a practicing professional CA CS or Cost Accountant to certify and file. DSC of the director is required for the full form."},
{q:"What documents are needed for DIR-3 KYC?",a:"For first-time filing: PAN card, Aadhaar card, passport-size photograph, proof of permanent address, proof of present address, mobile number linked to Aadhaar, email address, and Class 3 DSC. For subsequent years via DIR-3 KYC-WEB only mobile OTP and email OTP are needed with no document uploads."},
{q:"Is DIR-3 KYC required for LLP partners?",a:"Yes designated partners of LLPs holding DPIN must file DIR-3 KYC annually by September 30. The process is identical to company directors. DPIN and DIN are functionally the same for KYC purposes. Non-filing leads to DPIN deactivation and 5000 rupee penalty same as for company directors."},
{q:"What if I have DIN but no active directorship?",a:"You must still file DIR-3 KYC every year as long as your DIN is active. If you do not intend to be a director in future you can surrender your DIN by filing DIR-5 form. Until DIN is surrendered the annual KYC obligation continues regardless of whether you hold any active directorship position."},
{q:"Can deactivated DIN be reactivated?",a:"Yes file DIR-3 KYC with the 5000 rupee late fee and the DIN is reactivated within 1 to 3 working days after MCA processing. The reactivation is not automatic and depends on MCA portal processing time. During festive and year-end periods reactivation may take up to 5 to 7 working days."},
{q:"Is DIR-3 KYC filing free?",a:"Filing DIR-3 KYC or DIR-3 KYC-WEB on the MCA portal has no government fee if filed before the September 30 deadline. Only late filing attracts the 5000 rupee penalty. Professional charges from CA or CS for assistance with first-time filing typically range from 500 to 2000 rupees per director."},
{q:"How to check DIR-3 KYC filing status?",a:"Check on the MCA portal under MCA Services then DIN Services then Check DIN Status. Enter your DIN number to see if KYC is approved, pending, or not filed. You can also check via the MCA V3 portal dashboard after logging in. Status shows as Approved if KYC is successfully completed for the current year."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();updateUI();});
</script>
@endsection