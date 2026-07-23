@extends('layouts.app')
@section('meta')
    <title>RCM Calculator | GST Reverse Charge on GTA &amp; Legal</title>
    <meta name="description" content="RCM Calculator: work out GST payable under the Reverse Charge Mechanism for GTA, legal, security and imports, with CGST/SGST/IGST split. Calculate free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/rcm-calculator">
    <meta property="og:title" content="Reverse Charge (RCM) Calculator &mdash; Free Tool 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate GST under Reverse Charge Mechanism. GTA, legal, security, imports. CGST/SGST/IGST split with ITC guidance.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/rcm-calculator">
    <meta property="og:image" content="/tools/og-rcm-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Reverse Charge (RCM) Calculator &mdash; Free Tool 2026">
    <meta name="twitter:description" content="Calculate GST under RCM. Free tool with CGST/SGST/IGST split and ITC guidance.">
    <meta name="twitter:image" content="/tools/og-rcm-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"Reverse Charge Mechanism (RCM) Calculator FY 2025-26","description":"Free online calculator to compute GST payable under Reverse Charge Mechanism for notified goods and services including GTA, legal services, security services, imports, and purchases from unregistered dealers. Shows CGST SGST IGST split with ITC eligibility and GSTR-3B reporting guidance.","url":"/tools/rcm-calculator","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","sameAs":["https://www.linkedin.com/company/patron-accounting"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"RCM Calculator","item":"/tools/rcm-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is Reverse Charge Mechanism in GST?","acceptedAnswer":{"@type":"Answer","text":"Reverse Charge Mechanism is a provision under GST where the recipient of goods or services pays the tax instead of the supplier. It applies to notified goods and services under Section 9(3) of CGST Act, purchases from unregistered dealers under Section 9(4), and specified e-commerce supplies under Section 9(5). The recipient must pay GST in cash and can claim ITC if used for business."}},{"@type":"Question","name":"Which services fall under RCM in GST?","acceptedAnswer":{"@type":"Answer","text":"Key services under RCM include Goods Transport Agency services, legal services by advocates, security services by individual or proprietorship firms, sponsorship services, services by directors to company, insurance agent services, recovery agent services, import of services, and renting of residential property for business use by registered persons."}},{"@type":"Question","name":"Can ITC be claimed on GST paid under RCM?","acceptedAnswer":{"@type":"Answer","text":"Yes the recipient can claim Input Tax Credit on GST paid under RCM provided the goods or services are used for business purposes and not blocked under Section 17(5). ITC can be claimed in the same tax period in which the RCM liability is paid. The tax must first be paid in cash through the electronic cash ledger not through ITC."}},{"@type":"Question","name":"How is RCM reported in GSTR-3B?","acceptedAnswer":{"@type":"Answer","text":"RCM liability is reported in Table 3.1(d) of GSTR-3B under inward supplies liable to reverse charge. The corresponding ITC claim is reported in Table 4A. Both the liability and ITC should be reported in the same filing period. The net effect is zero if ITC is fully eligible but cash outflow occurs first before ITC credit is available."}},{"@type":"Question","name":"Is GST registration mandatory for RCM?","acceptedAnswer":{"@type":"Answer","text":"Yes under Section 24 of CGST Act any person who is required to pay tax under reverse charge must compulsorily register under GST regardless of their turnover. This applies even if the aggregate turnover is below the threshold limit of 20 lakh or 40 lakh. Failure to register attracts penalties under Section 122."}},{"@type":"Question","name":"What is a self-invoice under RCM?","acceptedAnswer":{"@type":"Answer","text":"When purchasing from an unregistered supplier the recipient must issue a self-invoice within 30 days of supply receipt. This self-invoice serves as the tax document for claiming ITC and must include all details like supplier name and address, value of supply, GST rate and amount, and the recipients own GSTIN. A payment voucher must also be issued."}},{"@type":"Question","name":"What is the time of supply under RCM for goods?","acceptedAnswer":{"@type":"Answer","text":"For goods under RCM the time of supply is the earliest of the date of receipt of goods, date of payment, or 30 days from the date of issue of invoice by the supplier. If the time of supply cannot be determined by these rules the date of entry in the books of accounts of the recipient is considered as the time of supply."}},{"@type":"Question","name":"What is the time of supply under RCM for services?","acceptedAnswer":{"@type":"Answer","text":"For services under RCM the time of supply is the earlier of the date of payment or 60 days from the date of issue of invoice by the supplier. If the time of supply cannot be determined the date of entry in the books of accounts is taken. This 60 day period is important for managing cash flow and timely compliance."}},{"@type":"Question","name":"Can composition dealers pay tax under RCM?","acceptedAnswer":{"@type":"Answer","text":"Yes composition dealers are liable to pay GST under reverse charge at applicable standard rates whenever RCM provisions apply. However composition dealers cannot claim ITC on the reverse charge tax paid. The RCM liability must be discharged through the cash ledger only increasing the effective cost for composition taxpayers."}},{"@type":"Question","name":"Is RCM applicable on GTA services?","acceptedAnswer":{"@type":"Answer","text":"Yes Goods Transport Agency services are one of the most common RCM categories. The recipient pays GST at 5% without ITC or 12% with ITC depending on the GTA option. From January 2022 GTAs can opt to pay GST under forward charge by filing a declaration. If they do not opt the recipient pays under RCM."}},{"@type":"Question","name":"What happens if RCM tax is not paid on time?","acceptedAnswer":{"@type":"Answer","text":"Failure to pay RCM liability on time attracts interest at 18% per annum under Section 50 of CGST Act from the due date until the date of payment. Additionally late fee applies for delayed GSTR-3B filing. The GST officer may also issue a demand notice under Section 73 or 74 if non-payment is detected during scrutiny or audit."}},{"@type":"Question","name":"Is RCM applicable on rent of commercial property?","acceptedAnswer":{"@type":"Answer","text":"RCM on rent depends on the landlord registration status. If the landlord is registered under GST they charge GST normally under forward charge. If the landlord is unregistered the registered tenant must pay GST under RCM. For residential property rented for business use by a registered person RCM applies regardless of landlord status."}},{"@type":"Question","name":"How to calculate RCM on import of services?","acceptedAnswer":{"@type":"Answer","text":"For import of services the Indian recipient pays IGST under RCM at the applicable rate on the invoice value. The time of supply is the date of payment or 60 days from invoice date whichever is earlier. ITC can be claimed if the service is used for business purposes. The liability is reported in Table 3.1(d) of GSTR-3B."}}]}
</script>
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


/* Tool-specific: RCM Calculator */
.rcm-scenario{display:grid;grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:8px;margin-bottom:18px}
.rcm-chip{padding:10px 12px;border:2px solid var(--border);border-radius:var(--radius);font-size:13px;font-weight:600;color:var(--text-muted);background:var(--card);cursor:pointer;text-align:center;transition:all 0.25s;line-height:1.3}
.rcm-chip:hover{border-color:var(--primary-light);color:var(--primary)}
.rcm-chip.active{border-color:var(--primary);color:var(--primary);background:rgba(27,77,62,0.04);box-shadow:var(--shadow-sm)}
.rcm-chip small{display:block;font-size:10px;font-weight:400;color:inherit;opacity:0.7;margin-top:2px}
.split-row{display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;margin:12px 0}
.split-box{background:var(--surface);border-radius:var(--radius);padding:14px;text-align:center;border:1px solid var(--border)}
.split-box .sb-label{font-size:11px;font-weight:600;color:var(--text-muted);text-transform:uppercase;letter-spacing:.5px}
.split-box .sb-val{font-size:20px;font-weight:800;color:var(--primary-dark);margin-top:4px;font-family:var(--font-mono)}
.split-box.igst{border-color:var(--info);background:#EFF6FF}
.split-box.igst .sb-val{color:var(--info)}
.split-box.cgst{border-color:var(--success);background:#F0FDF4}
.split-box.cgst .sb-val{color:var(--success)}
.split-box.sgst{border-color:var(--accent);background:#FFFBEB}
.split-box.sgst .sb-val{color:#B45309}
.step-list{counter-reset:steps;list-style:none;padding:0;margin:16px 0}
.step-list li{counter-increment:steps;display:flex;gap:12px;padding:12px 0;border-bottom:1px solid var(--border);font-size:14px;color:var(--text-secondary);line-height:1.5}
.step-list li:last-child{border-bottom:none}
.step-list li::before{content:counter(steps);width:28px;height:28px;background:var(--primary);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;flex-shrink:0}
@media(max-width:600px){.rcm-scenario{grid-template-columns:1fr 1fr}.split-row{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">RCM Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#about">About RCM</a>
        <a href="#services-list">RCM Services</a>
        <a href="#compliance">Compliance</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>Reverse Charge (RCM) <span>GST Calculator</span> &mdash; Section 9(3) &amp; 9(4)</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Under Reverse Charge Mechanism (RCM), the recipient pays GST instead of the supplier for notified goods and services. This calculator computes your RCM liability with CGST/SGST/IGST split, shows ITC eligibility, GSTR-3B reporting tables, and self-invoice requirements. Covers GTA, legal, security, director fees, imports, unregistered purchases, and more. GST must be paid in cash first &mdash; ITC is claimable in the same period if used for business.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate RCM Liability</h2>
            <noscript><div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or <a href="https://wa.me/919459456700">contact our CA team</a>.</div></noscript>

            <div class="form-group">
                <label>RCM Scenario</label>
                <div class="rcm-scenario" id="rcmType">
                    <div class="rcm-chip active" data-val="gta" onclick="setChip(this)">GTA Services<small>Sec 9(3)</small></div>
                    <div class="rcm-chip" data-val="legal" onclick="setChip(this)">Legal / Advocate<small>Sec 9(3)</small></div>
                    <div class="rcm-chip" data-val="security" onclick="setChip(this)">Security Services<small>Sec 9(3)</small></div>
                    <div class="rcm-chip" data-val="director" onclick="setChip(this)">Director Fees<small>Sec 9(3)</small></div>
                    <div class="rcm-chip" data-val="import" onclick="setChip(this)">Import of Services<small>Sec 5(3) IGST</small></div>
                    <div class="rcm-chip" data-val="unregistered" onclick="setChip(this)">Unregistered Dealer<small>Sec 9(4)</small></div>
                    <div class="rcm-chip" data-val="rent" onclick="setChip(this)">Rent (Residential)<small>Sec 9(3)</small></div>
                    <div class="rcm-chip" data-val="other" onclick="setChip(this)">Other Notified<small>Custom rate</small></div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Supply Type</label>
                    <div class="toggle-group" id="supplyType">
                        <button type="button" class="toggle-btn active" data-val="intra" onclick="setTg('supplyType',this)">Intra-State<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">CGST + SGST</small></button>
                        <button type="button" class="toggle-btn" data-val="inter" onclick="setTg('supplyType',this)">Inter-State<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">IGST only</small></button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Invoice / Supply Value (&#8377;)</label>
                    <input type="text" id="inAmount" placeholder="e.g. 1,00,000" oninput="fmtNum(this)">
                    <div style="font-size:12px;color:var(--text-muted);margin-top:4px">Value before GST (taxable value)</div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>GST Rate (%)</label>
                    <select id="inRate">
                        <option value="5">5%</option>
                        <option value="12">12%</option>
                        <option value="18" selected>18%</option>
                        <option value="28">28%</option>
                    </select>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:4px" id="rateHint">Standard rate for most services under RCM</div>
                </div>
                <div class="form-group">
                    <label>ITC Eligible?</label>
                    <div class="toggle-group" id="itcEligible">
                        <button type="button" class="toggle-btn active" data-val="yes" onclick="setTg('itcEligible',this)">Yes<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Business use</small></button>
                        <button type="button" class="toggle-btn" data-val="no" onclick="setTg('itcEligible',this)">No<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Blocked u/s 17(5)</small></button>
                    </div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calcRCM()">Calculate RCM Liability</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset All</button>

            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Reverse Charge Calculator</h2>
            <p>This free tool calculates your GST liability under the Reverse Charge Mechanism with full CGST/SGST/IGST breakup, ITC guidance, and GSTR-3B reporting instructions.</p>
            <h3>Step 1 &mdash; Select RCM Scenario</h3>
            <p>Choose the type of supply attracting reverse charge. Each scenario has a default GST rate based on <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> notifications. GTA services default to 5%, legal and security to 18%, imports to IGST only, etc.</p>
            <h3>Step 2 &mdash; Choose Supply Type</h3>
            <p>Select Intra-State (CGST + SGST) for supplies within your state, or Inter-State (IGST) for supplies from another state or imports. Import of services always uses IGST regardless of location.</p>
            <h3>Step 3 &mdash; Enter Amount and Rate</h3>
            <p>Enter the taxable value (before GST) and confirm the GST rate. The rate auto-adjusts based on scenario but can be overridden for custom situations.</p>
            <h3>Step 4 &mdash; View Results</h3>
            <p>Get instant results showing total RCM liability, CGST/SGST/IGST split, net cost impact (considering ITC), GSTR-3B table references, and self-invoice requirements.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> RCM tax must be paid in cash through the electronic cash ledger &mdash; you cannot use ITC balance to pay RCM liability. However, once paid, the ITC can be claimed in the same period. This creates a temporary cash flow impact. Plan your working capital accordingly, especially for high-value GTA or import transactions. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends maintaining a separate RCM register.</p>
            </div>
        </section>

        <section class="content-section" id="about">
            <h2>What Is Reverse Charge Mechanism (RCM) Under GST?</h2>
            <p>Under normal GST, the supplier charges and remits tax to the government. Under Reverse Charge Mechanism, this liability shifts to the recipient. RCM was introduced under <a href="https://cbic-gst.gov.in/pdf/cgst-act.pdf" target="_blank" rel="noopener">Section 9(3), 9(4), and 9(5) of the CGST Act</a> to ensure tax compliance in sectors where suppliers are often unorganised, unregistered, or outside India.</p>
            <p>The mechanism operates through three distinct provisions. <strong>Section 9(3)</strong> covers notified goods and services where RCM is mandatory regardless of the supplier&rsquo;s registration status &mdash; these include GTA, legal, security, director services, and more. <strong>Section 9(4)</strong> covers purchases from unregistered dealers by registered persons, currently restricted to the real estate sector. <strong>Section 9(5)</strong> makes e-commerce operators liable for specified services like cab rides and accommodation.</p>
            <p>A critical aspect of RCM is that GST must be paid in cash &mdash; not through Input Tax Credit. The recipient pays from the electronic cash ledger, and can then claim ITC on this payment in the same tax period (provided the supply is for business use and not blocked under Section 17(5)). This creates a cash-neutral position for eligible businesses but requires upfront cash availability.</p>
            <h3>Mandatory GST Registration for RCM</h3>
            <p>Under <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">Section 24 of the CGST Act</a>, any person liable to pay tax under RCM must register under GST regardless of their turnover. This is a compulsory registration requirement &mdash; even if turnover is below &#8377;20 lakh (or &#8377;40 lakh for goods).</p>
        </section>

        <section class="content-section" id="services-list">
            <h2>Goods and Services Under RCM &mdash; Complete List</h2>
            <p>The <a href="https://gstcouncil.gov.in/" target="_blank" rel="noopener">GST Council</a> and <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> have notified specific categories of goods and services where RCM applies. This list is updated periodically via notifications.</p>
            <h3>Services Under Section 9(3)</h3>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Service</th><th>Supplier</th><th>Recipient (Liable)</th><th>Typical Rate</th></tr></thead>
                <tbody>
                    <tr><td>Goods Transport Agency (GTA)</td><td>GTA</td><td>Factory, society, registered person, body corporate</td><td>5% (no ITC) / 12% (with ITC)</td></tr>
                    <tr><td>Legal / Advocate services</td><td>Individual advocate / firm</td><td>Any business entity</td><td>18%</td></tr>
                    <tr><td>Security services</td><td>Individual / proprietorship / partnership</td><td>Registered person</td><td>18%</td></tr>
                    <tr><td>Director services (non-employee)</td><td>Director</td><td>Company / body corporate</td><td>18%</td></tr>
                    <tr><td>Insurance agent services</td><td>Individual agent</td><td>Insurance company</td><td>18%</td></tr>
                    <tr><td>Recovery agent services</td><td>Recovery agent</td><td>Banking / NBFC</td><td>18%</td></tr>
                    <tr><td>Renting of residential property</td><td>Any person</td><td>Registered person (business use)</td><td>18%</td></tr>
                    <tr><td>Import of services</td><td>Foreign supplier</td><td>Indian recipient</td><td>IGST at applicable rate</td></tr>
                </tbody>
            </table>
            </div>
            <div class="callout warn">
                <p><strong>2025 Update:</strong> Sponsorship services have been removed from RCM vide Notification No. 07/2025-Central Tax (Rate). Sponsors no longer pay GST under reverse charge &mdash; the service provider now pays under forward charge. Always verify the latest <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC notifications</a> for current RCM applicability.</p>
            </div>
        </section>

        <section class="content-section" id="compliance">
            <h2>RCM Compliance &mdash; Self-Invoice, Payment, and Filing</h2>
            <h3>Self-Invoice Requirement</h3>
            <p>When purchasing from an unregistered supplier, the recipient must issue a self-invoice within 30 days of supply receipt. This self-invoice acts as the tax document for ITC claims and must include supplier details, taxable value, GST rate, GST amount, and the recipient&rsquo;s own GSTIN. A payment voucher must also be issued at the time of payment.</p>
            <h3>GSTR-3B Reporting</h3>
            <p>RCM liability is reported in <strong>Table 3.1(d)</strong> of GSTR-3B under &ldquo;Inward supplies liable to reverse charge.&rdquo; The corresponding ITC is claimed in <strong>Table 4A</strong>. Both must be reported in the same filing period. The RCM tax amount flows to the electronic cash ledger for payment.</p>
            <h3>Time of Supply Rules</h3>
            <p>For <strong>goods under RCM</strong>: earliest of date of receipt, date of payment, or 30 days from invoice. For <strong>services under RCM</strong>: earlier of date of payment or 60 days from invoice. Understanding these timelines is critical for accurate reporting and avoiding interest charges.</p>
            <div class="callout green">
                <p><strong>Expert Tip:</strong> Maintain a dedicated RCM register tracking all reverse charge transactions with supplier details, invoice/self-invoice numbers, amounts, tax paid dates, and ITC claimed dates. This register is invaluable during GST audits and for preparing GSTR-9. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20RCM%20compliance%20and%20GST%20filing." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p>
            </div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need help with RCM compliance?</strong> Our CAs handle reverse charge calculations, self-invoicing, GSTR-3B filing, and GST audit support for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20RCM%20Calculator.%20I%20need%20help%20with%20reverse%20charge%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; Reverse Charge Mechanism</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need RCM Help?</h3>
            <p>Our CAs handle RCM calculations, self-invoicing, GSTR-3B filing &amp; GST audit for businesses across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20reverse%20charge%20compliance." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-annual-return-filing" class="sidebar-link">GST Annual Return <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-cancellation" class="sidebar-link">GST Cancellation <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gstr-2a-vs-3b-reconciliation" class="sidebar-link">GSTR-2A vs 3B Reconciliation <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-composition-scheme-eligibility" class="sidebar-link">Composition Eligibility <span class="arrow">&rarr;</span></a>
            <a href="/tools/hsn-sac-code-finder" class="sidebar-link">HSN/SAC Code Finder <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-return-due-date-tracker" class="sidebar-link">GST Due Date Tracker <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
        </div>
    </aside>
</div>

<script>
var SCENARIOS={gta:{name:'GTA Services',rate:5,hint:'5% without ITC or 12% with ITC (GTA option)',inter:false},legal:{name:'Legal / Advocate',rate:18,hint:'18% on legal services from individual advocate or firm',inter:false},security:{name:'Security Services',rate:18,hint:'18% on security by individual / proprietorship / partnership',inter:false},director:{name:'Director Fees',rate:18,hint:'18% on non-employee director services to company',inter:false},'import':{name:'Import of Services',rate:18,hint:'IGST at applicable rate on import of services',inter:true},unregistered:{name:'Unregistered Dealer',rate:18,hint:'GST at applicable rate on purchase from unregistered person',inter:false},rent:{name:'Rent (Residential for Business)',rate:18,hint:'18% on residential property rented for business use',inter:false},other:{name:'Other Notified Supply',rate:18,hint:'Select applicable rate manually',inter:false}};

function setChip(el){document.querySelectorAll('.rcm-chip').forEach(function(c){c.classList.remove('active');});el.classList.add('active');var v=el.getAttribute('data-val');var s=SCENARIOS[v];if(s){document.getElementById('inRate').value=s.rate;document.getElementById('rateHint').textContent=s.hint;if(s.inter){var btns=document.getElementById('supplyType').querySelectorAll('.toggle-btn');btns[0].classList.remove('active');btns[1].classList.add('active');}}}
function getChip(){var a=document.querySelector('.rcm-chip.active');return a?a.getAttribute('data-val'):'other';}
function getVal(id){var g=document.getElementById(id);var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function pn(id){var el=document.getElementById(id);return el?parseInt(el.value.replace(/[^0-9]/g,''))||0:0;}
function fmtNum(el){var v=el.value.replace(/[^0-9]/g,'');if(v)el.value=parseInt(v).toLocaleString('en-IN');}
function fmt(n){return'\u20B9'+n.toLocaleString('en-IN');}

function resetForm(){document.getElementById('inAmount').value='';document.getElementById('inRate').value='18';document.querySelectorAll('.rcm-chip').forEach(function(c,i){c.classList.toggle('active',i===0);});['supplyType','itcEligible'].forEach(function(g){var el=document.getElementById(g);el.querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',i===0);});});document.getElementById('rateHint').textContent=SCENARIOS.gta.hint;document.getElementById('resPanel').classList.remove('visible');}

function calcRCM(){
var amt=pn('inAmount'),rate=parseFloat(document.getElementById('inRate').value),supply=getVal('supplyType'),itc=getVal('itcEligible')==='yes',scenario=getChip();
if(!amt){alert('Please enter the supply value.');return;}
var sInfo=SCENARIOS[scenario]||SCENARIOS.other;
var gst=Math.round(amt*rate/100);
var isInter=supply==='inter';
var igst=isInter?gst:0,cgst=isInter?0:Math.round(gst/2),sgst=isInter?0:gst-Math.round(gst/2);
var total=amt+gst;
var netCost=itc?amt:total;

var h='';
// Hero
h+='<div class="res-hero"><div class="res-box rate"><div class="rb-label">RCM GST Liability</div><div class="rb-value">'+fmt(gst)+'</div><div class="rb-sub">'+rate+'% on '+fmt(amt)+'</div></div>';
h+='<div class="res-box '+(itc?'eligible':'ineligible')+'"><div class="rb-label">Net Cost to You</div><div class="rb-value">'+fmt(netCost)+'</div><div class="rb-sub">'+(itc?'ITC claimable \u2014 effective cost = base amount':'No ITC \u2014 GST is additional cost')+'</div></div></div>';

// Tax split
h+='<div class="res-card"><div class="res-card-hd"><h3>Tax Breakup &mdash; '+sInfo.name+'</h3><span class="res-badge info">'+(isInter?'IGST':'CGST+SGST')+'</span></div><div class="res-card-bd">';
if(isInter){
h+='<div class="split-row"><div class="split-box igst" style="grid-column:1/-1"><div class="sb-label">IGST</div><div class="sb-val">'+fmt(igst)+'</div></div></div>';
}else{
h+='<div class="split-row"><div class="split-box cgst"><div class="sb-label">CGST</div><div class="sb-val">'+fmt(cgst)+'</div></div><div class="split-box sgst"><div class="sb-label">SGST</div><div class="sb-val">'+fmt(sgst)+'</div></div><div class="split-box" style="border-color:var(--primary)"><div class="sb-label">Total GST</div><div class="sb-val" style="color:var(--primary-dark)">'+fmt(gst)+'</div></div></div>';
}
// Summary table
h+='<table class="cmp-table" style="margin-top:12px"><tr><th>Item</th><th>Amount</th></tr>';
h+='<tr><td>Taxable Value (Base)</td><td>'+fmt(amt)+'</td></tr>';
if(isInter){h+='<tr><td>IGST @ '+rate+'%</td><td>'+fmt(igst)+'</td></tr>';}
else{h+='<tr><td>CGST @ '+(rate/2)+'%</td><td>'+fmt(cgst)+'</td></tr><tr><td>SGST @ '+(rate/2)+'%</td><td>'+fmt(sgst)+'</td></tr>';}
h+='<tr style="background:var(--surface-alt)"><td><strong>Total Invoice Value</strong></td><td><strong>'+fmt(total)+'</strong></td></tr>';
h+='<tr><td>ITC Claimable</td><td class="'+(itc?'hi':'neg')+'">'+(itc?fmt(gst)+' (same period)':'Not eligible \u2014 Sec 17(5)')+'</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Effective Cost to You</strong></td><td><strong style="color:var(--primary)">'+fmt(netCost)+'</strong></td></tr>';
h+='</table></div></div>';

// GSTR-3B reporting
h+='<div class="res-card"><div class="res-card-hd"><h3>GSTR-3B Reporting Guide</h3><span class="res-badge teal">Filing</span></div><div class="res-card-bd"><ol class="step-list">';
h+='<li>Report RCM liability of <strong>'+fmt(gst)+'</strong> in <strong>Table 3.1(d)</strong> &mdash; Inward supplies liable to reverse charge</li>';
h+='<li>Pay <strong>'+fmt(gst)+'</strong> via Electronic Cash Ledger (cannot use ITC to pay RCM)</li>';
if(itc){h+='<li>Claim ITC of <strong>'+fmt(gst)+'</strong> in <strong>Table 4A</strong> &mdash; ITC on inward supplies</li>';}
h+='<li>Issue '+(scenario==='unregistered'?'<strong>self-invoice</strong> within 30 days + payment voucher':'<strong>payment voucher</strong> to supplier')+'</li>';
h+='</ol></div></div>';

// Actions
h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20RCM%20Calculator.%20I%20need%20help%20with%20reverse%20charge%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/gst-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> GST Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is Reverse Charge Mechanism in GST?",a:"RCM is a provision where the recipient pays GST instead of the supplier. It applies to notified goods/services under Section 9(3), purchases from unregistered dealers under Section 9(4), and e-commerce supplies under Section 9(5). The recipient must pay in cash and can claim ITC if used for business."},
{q:"Which services fall under RCM in GST?",a:"Key services include GTA (goods transport), legal/advocate services, security services by individuals/proprietorships, director fees to companies, insurance agent services, recovery agent services, import of services, and renting of residential property for business use by registered persons."},
{q:"Can ITC be claimed on GST paid under RCM?",a:"Yes, provided the supply is used for business and not blocked under Section 17(5). ITC can be claimed in the same period the RCM is paid. However, the tax must first be paid in cash through the electronic cash ledger \u2014 you cannot use existing ITC to pay RCM liability."},
{q:"How is RCM reported in GSTR-3B?",a:"RCM liability goes in Table 3.1(d) under inward supplies liable to reverse charge. ITC claim goes in Table 4A. Both should be in the same period. Net effect is zero if ITC is eligible, but cash outflow occurs first before ITC credit is available in the ledger."},
{q:"Is GST registration mandatory for RCM?",a:"Yes. Under Section 24 of CGST Act, anyone liable to pay tax under RCM must register under GST regardless of turnover. This applies even if aggregate turnover is below the \u20B920 lakh or \u20B940 lakh threshold. Non-registration attracts penalties under Section 122."},
{q:"What is a self-invoice under RCM?",a:"When buying from an unregistered supplier, the recipient must issue a self-invoice within 30 days of supply. It serves as the tax document for ITC claims and must include supplier details, value, GST rate/amount, and recipient\u2019s GSTIN. A payment voucher is also required."},
{q:"What is the time of supply under RCM for goods?",a:"For goods: earliest of date of receipt, date of payment, or 30 days from invoice date. If none can be determined, the date of entry in books is taken. This determines when the RCM liability arises and must be paid."},
{q:"What is the time of supply under RCM for services?",a:"For services: earlier of date of payment or 60 days from invoice date. If undeterminable, the date of entry in books is used. The 60-day window is important for managing cash flow and ensuring timely RCM compliance."},
{q:"Can composition dealers pay tax under RCM?",a:"Yes. Composition dealers must pay RCM at standard rates when applicable. However, they cannot claim ITC on RCM tax paid \u2014 it is discharged through cash ledger only. This increases the effective cost for composition taxpayers on RCM supplies."},
{q:"Is RCM applicable on GTA services?",a:"Yes. GTA is one of the most common RCM categories. Recipient pays 5% (no ITC) or 12% (with ITC) depending on GTA\u2019s option. From January 2022, GTAs can opt for forward charge via declaration. If not opted, the recipient pays under RCM."},
{q:"What happens if RCM tax is not paid on time?",a:"Interest at 18% p.a. under Section 50 from due date until payment. Late fee also applies for delayed GSTR-3B. The GST officer may issue demand notice under Section 73 or 74 if non-payment is detected during audit or scrutiny proceedings."},
{q:"Is RCM applicable on rent of commercial property?",a:"Depends on landlord status. If landlord is GST-registered, they charge GST normally (forward charge). If unregistered, the registered tenant pays RCM. For residential property rented for business by a registered person, RCM applies regardless of landlord\u2019s status."},
{q:"How to calculate RCM on import of services?",a:"Indian recipient pays IGST at applicable rate on the invoice value. Time of supply is date of payment or 60 days from invoice, whichever is earlier. ITC is claimable if service is for business. Report in Table 3.1(d) of GSTR-3B."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcRCM();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>

@endsection
