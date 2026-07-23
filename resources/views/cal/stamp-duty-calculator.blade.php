@extends('layouts.app')
@section('meta')
    <title>Stamp Duty Calculator | State-Wise Property Charges</title>
    <meta name="description" content="Free stamp duty calculator: compute property stamp duty and registration charges state-wise in India, with women buyer concession and 80C deduction. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/stamp-duty-calculator">
    <meta property="og:title" content="Stamp Duty Calculator &mdash; Free 2026 | Patron Accounting"><meta property="og:description" content="Calculate stamp duty by state. Property value, women concession, registration charges.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN"><meta property="og:url" content="/tools/stamp-duty-calculator">
    <meta property="og:image" content="/tools/og-stamp-duty.png"><meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Stamp Duty Calculator &mdash; Free 2026"><meta name="twitter:description" content="Stamp duty by state with women concession.">
@endsection
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Stamp Duty Calculator India 2026","description":"Free online stamp duty calculator for property transactions in India. Select state, property value, buyer gender, and property type to get stamp duty amount, registration charges, and total cost. Covers all major Indian states with women buyer concessions and Section 80C deduction guidance.","url":"/tools/stamp-duty-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Stamp Duty Calculator","item":"/tools/stamp-duty-calculator"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is stamp duty on property?","acceptedAnswer":{"@type":"Answer","text":"Stamp duty is a state government tax paid on property transactions including sale purchase gift and mortgage. It is mandatory under the Indian Stamp Act 1899 and varies by state from 3 to 10 percent of property value. Stamp duty makes the transaction legally valid and the document admissible in court as evidence."}},{"@type":"Question","name":"How is stamp duty calculated?","acceptedAnswer":{"@type":"Answer","text":"Stamp duty is calculated as a percentage of the property value which is the higher of the actual transaction value or the government circle rate or ready reckoner rate for the area. In Maharashtra for example it is 5 percent in municipal areas plus 1 percent metro cess in Mumbai. Registration charges are additional."}},{"@type":"Question","name":"What are stamp duty rates by state?","acceptedAnswer":{"@type":"Answer","text":"Maharashtra 5 to 6 percent, Delhi 4 to 6 percent, Karnataka 5 percent, Tamil Nadu 7 percent, Uttar Pradesh 5 to 7 percent, Gujarat 4.9 percent, West Bengal 5 to 7 percent, Rajasthan 5 to 6 percent, Telangana 5 percent. Rates vary by area type rural or urban and property type residential or commercial."}},{"@type":"Question","name":"Is there stamp duty concession for women?","acceptedAnswer":{"@type":"Answer","text":"Yes several states offer reduced stamp duty for women buyers. Maharashtra offers 1 percent concession for women in municipal areas. Delhi charges 4 percent for women versus 6 percent for men. Karnataka and Rajasthan also offer concessions. Joint registration with a woman as first holder can reduce total stamp duty significantly."}},{"@type":"Question","name":"What is registration charge separate from stamp duty?","acceptedAnswer":{"@type":"Answer","text":"Registration charge is a separate fee paid to the Sub-Registrar office for registering the sale deed. It is typically 1 percent of property value across most states, capped at 30000 rupees in some states. Registration is mandatory under the Registration Act 1908 for all property transactions above 100 rupees in value."}},{"@type":"Question","name":"What is circle rate or ready reckoner rate?","acceptedAnswer":{"@type":"Answer","text":"Circle rate is the minimum property value set by the state government for each locality used as the base for stamp duty calculation. In Maharashtra it is called ready reckoner rate, in Delhi circle rate, and in other states guideline value. If the actual sale price is lower than circle rate, stamp duty is still calculated on the circle rate."}},{"@type":"Question","name":"Can stamp duty be claimed as tax deduction?","acceptedAnswer":{"@type":"Answer","text":"Yes stamp duty and registration charges paid for a residential property can be claimed under Section 80C of the Income Tax Act up to the overall limit of 1.5 lakh rupees in the year of purchase. This is part of the 80C basket along with PPF ELSS insurance and other eligible investments."}},{"@type":"Question","name":"What happens if stamp duty is not paid?","acceptedAnswer":{"@type":"Answer","text":"Documents without proper stamp duty are inadmissible as evidence in court. If discovered later the buyer must pay the deficit amount plus penalty of 2 to 10 percent per month depending on the state. In Maharashtra penalty can reach up to 4 times the deficit stamp duty. Always pay correct stamp duty at the time of registration."}},{"@type":"Question","name":"What is stamp duty on gift deed?","acceptedAnswer":{"@type":"Answer","text":"Gift deed stamp duty varies by state and relationship. In Maharashtra gifts between blood relatives like parent to child or between spouses attract only 200 rupees stamp duty. Gifts to non-relatives attract the same stamp duty as a sale transaction. Delhi has similar concessions for family transfers."}},{"@type":"Question","name":"What is e-stamping?","acceptedAnswer":{"@type":"Answer","text":"E-stamping is the electronic method of paying stamp duty through the Stock Holding Corporation of India SHCIL authorized centres or online portals. It replaced physical stamp paper in most states. E-stamp certificates are more secure, verifiable online, and eliminate the risk of fraudulent or invalid stamp papers."}},{"@type":"Question","name":"What is stamp duty on rental agreement?","acceptedAnswer":{"@type":"Answer","text":"Stamp duty on rental agreements is typically 0.25 to 1 percent of total rent for the lease period plus deposit amount depending on the state. In Maharashtra leave and licence agreement stamp duty is 0.25 percent of total rent plus deposit. Registration is mandatory for leases above 12 months in most states."}},{"@type":"Question","name":"Is stamp duty refundable?","acceptedAnswer":{"@type":"Answer","text":"Stamp duty is generally non-refundable once paid. However if the transaction is cancelled before registration the stamp paper or e-stamp value can be adjusted against future transactions in some states within 6 months. Maharashtra allows refund application within 6 months if the document was not executed. Rules vary by state."}},{"@type":"Question","name":"What is stamp duty on loan agreement?","acceptedAnswer":{"@type":"Answer","text":"Home loan agreements attract stamp duty of 0.1 to 0.5 percent of loan amount depending on the state. In Maharashtra it is 0.1 percent capped at certain amounts. This is in addition to property stamp duty. Banks typically include loan agreement stamp duty in closing costs. The charge applies to both new loans and refinancing."}}]}</script>
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
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:120px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
@media(max-width:600px){.tool-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#state-rates">State Rates</a><a href="#women">Women Concession</a><a href="#80c">80C Deduction</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Stamp Duty Calculator</nav> --}}
<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Stamp Duty Calculator &mdash; <span>All Indian States</span> 2026</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Calculate stamp duty and registration charges for property purchase in any Indian state. Select state, enter property value, choose buyer gender (women get concessions in many states), and property type. Get stamp duty, registration fee, total cost, and Section 80C deduction eligibility under the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Indian Stamp Act 1899</a>.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate Stamp Duty</h2>
    <noscript><div class="noscript-box">This tool requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="slider-group"><label>Property Value / Agreement Value (&#8377;)</label><div class="slider-row"><input type="range" id="sliderVal" min="500000" max="100000000" step="100000" value="5000000" oninput="syncS()"><input type="text" class="slider-val" id="valProp" value="50,00,000" oninput="syncI()"></div></div>
    <div class="calc-row">
        <div class="form-group"><label>State</label><select id="inState"><option value="MH" selected>Maharashtra</option><option value="DL">Delhi</option><option value="KA">Karnataka</option><option value="TN">Tamil Nadu</option><option value="UP">Uttar Pradesh</option><option value="GJ">Gujarat</option><option value="HR">Haryana</option><option value="RJ">Rajasthan</option><option value="WB">West Bengal</option><option value="TS">Telangana</option><option value="AP">Andhra Pradesh</option><option value="KL">Kerala</option><option value="MP">Madhya Pradesh</option><option value="PB">Punjab</option></select></div>
        <div class="form-group"><label>Buyer Gender</label><div class="toggle-group" id="gender"><button type="button" class="toggle-btn active" data-val="male" onclick="setTg('gender',this)">Male</button><button type="button" class="toggle-btn" data-val="female" onclick="setTg('gender',this)">Female</button><button type="button" class="toggle-btn" data-val="joint" onclick="setTg('gender',this)">Joint (M+F)</button></div></div>
    </div>
    <div class="form-group"><label>Property Type</label><div class="toggle-group" id="propType"><button type="button" class="toggle-btn active" data-val="res" onclick="setTg('propType',this)">Residential</button><button type="button" class="toggle-btn" data-val="com" onclick="setTg('propType',this)">Commercial</button><button type="button" class="toggle-btn" data-val="agri" onclick="setTg('propType',this)">Agricultural</button></div></div>
    <button class="btn-calculate" onclick="calcSD()">Calculate Stamp Duty</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use</h2><p>Enter property value (or circle rate whichever is higher), select state, buyer gender, and property type. The calculator applies state-specific rates including women buyer concessions where applicable. Rates are as per <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Indian Stamp Act 1899</a> and respective state amendments.</p><div class="callout"><p><strong>CA Tip:</strong> Always check the <a href="https://igr.maharashtra.gov.in/" target="_blank" rel="noopener">IGR Maharashtra</a> or equivalent state portal for the latest ready reckoner / circle rates. Stamp duty + registration charges are eligible for Section 80C deduction up to &#8377;1.5L in the year of purchase. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends maintaining all property documents for capital gains computation on future sale.</p></div></section>

<section class="content-section" id="state-rates"><h2>Stamp Duty Rates by State &mdash; 2026</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>State</th><th>Male</th><th>Female</th><th>Registration</th></tr></thead><tbody>
<tr><td>Maharashtra</td><td>6%</td><td>5%</td><td>1% (max &#8377;30K)</td></tr><tr><td>Delhi</td><td>6%</td><td>4%</td><td>1%</td></tr><tr><td>Karnataka</td><td>5%</td><td>5%</td><td>1%</td></tr><tr><td>Tamil Nadu</td><td>7%</td><td>7%</td><td>1%</td></tr><tr><td>Uttar Pradesh</td><td>7%</td><td>6%</td><td>1%</td></tr><tr><td>Gujarat</td><td>4.9%</td><td>4.9%</td><td>1%</td></tr><tr><td>Haryana</td><td>7%</td><td>5%</td><td>Variable</td></tr><tr><td>Rajasthan</td><td>6%</td><td>5%</td><td>1%</td></tr><tr><td>West Bengal</td><td>6%</td><td>6%</td><td>1%</td></tr><tr><td>Telangana</td><td>5%</td><td>5%</td><td>0.5%</td></tr>
</tbody></table></div></section>

<section class="content-section" id="women"><h2>Women Buyer Stamp Duty Concessions</h2><p>Several Indian states offer reduced stamp duty for women property buyers as part of gender equality initiatives. Key concessions include Maharashtra (1% less for women in municipal areas), Delhi (2% less for women), Haryana (2% less), Rajasthan (1% less), and Uttar Pradesh (1% less). Joint registration with a woman as first holder can also avail the concession in most states.</p></section>

<section class="content-section" id="80c"><h2>Section 80C Deduction on Stamp Duty</h2><p>Under <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Section 80C</a> of the Income Tax Act, stamp duty and registration charges paid for purchase of a new residential house property are eligible for deduction up to &#8377;1,50,000 in the financial year of payment. This is part of the overall 80C limit shared with PPF, ELSS, insurance premiums, and other qualifying investments. The deduction is available only in the old tax regime.</p></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need property tax help?</strong> Our CAs handle stamp duty advisory, property registration, capital gains tax, and ITR filing for property transactions. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20stamp%20duty%20and%20property%20tax%20help." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>
<section class="content-section" id="faqs"><h2>Frequently Asked Questions</h2><div id="faqList"></div></section>
</div><aside class="sidebar-col"><div class="cta-card"><h3>Need Property Help?</h3><p>Our CAs help with property tax, stamp duty advisory, and registration assistance.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20stamp%20duty%20and%20property%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div><div class="sidebar-card"><h3>Services</h3><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a><a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a></div><div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator <span class="arrow">&rarr;</span></a><a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a><a href="/tools/rent-agreement-generator" class="sidebar-link">Rent Agreement Generator <span class="arrow">&rarr;</span></a><a href="/tools/roi-calculator" class="sidebar-link">ROI Calculator <span class="arrow">&rarr;</span></a></div><div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div></aside></div>
<script>
var SD_RATES={MH:{m:6,f:5,reg:1,regCap:30000},DL:{m:6,f:4,reg:1,regCap:0},KA:{m:5,f:5,reg:1,regCap:0},TN:{m:7,f:7,reg:1,regCap:0},UP:{m:7,f:6,reg:1,regCap:0},GJ:{m:4.9,f:4.9,reg:1,regCap:0},HR:{m:7,f:5,reg:1.5,regCap:0},RJ:{m:6,f:5,reg:1,regCap:0},WB:{m:6,f:6,reg:1,regCap:0},TS:{m:5,f:5,reg:0.5,regCap:0},AP:{m:5,f:5,reg:0.5,regCap:0},KL:{m:8,f:8,reg:2,regCap:0},MP:{m:7.5,f:7.5,reg:1,regCap:0},PB:{m:7,f:5,reg:1,regCap:0}};
function getVal(id){var g=document.getElementById(id);var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function syncS(){document.getElementById('valProp').value=parseInt(document.getElementById('sliderVal').value).toLocaleString('en-IN');}
function syncI(){var v=parseInt(document.getElementById('valProp').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderVal').value=v;document.getElementById('valProp').value=v?v.toLocaleString('en-IN'):'';}
function fmt(n){return'₹'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'₹'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'₹'+(n/100000).toFixed(2)+' L';return fmt(n);}
function resetForm(){document.getElementById('sliderVal').value=5000000;document.getElementById('valProp').value='50,00,000';document.getElementById('inState').value='MH';['gender','propType'].forEach(function(g){document.getElementById(g).querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',i===0);});});document.getElementById('resPanel').classList.remove('visible');}

function calcSD(){
var val=parseInt(document.getElementById('valProp').value.replace(/[^0-9]/g,''))||0;
var state=document.getElementById('inState').value;
var gender=getVal('gender');
var propType=getVal('propType');
if(!val){alert('Please enter property value.');return;}
var r=SD_RATES[state]||SD_RATES['MH'];
var sdRate=gender==='female'?r.f:(gender==='joint'?((r.m+r.f)/2):r.m);
if(propType==='com')sdRate+=1;
if(propType==='agri')sdRate=Math.max(sdRate-1,1);
var sdAmt=Math.round(val*sdRate/100);
var regAmt=Math.round(val*r.reg/100);
if(r.regCap>0&&regAmt>r.regCap)regAmt=r.regCap;
var total=sdAmt+regAmt;
var saving80c=Math.min(total,150000);

var h='<div class="tool-hero"><div class="tool-box b1"><div class="tb-label">Stamp Duty</div><div class="tb-value">'+fmtL(sdAmt)+'</div><div class="tb-sub">'+sdRate+'% of property value</div></div><div class="tool-box b2"><div class="tb-label">Registration</div><div class="tb-value">'+fmt(regAmt)+'</div><div class="tb-sub">'+r.reg+'%'+(r.regCap>0?' (capped)':'')+'</div></div><div class="tool-box b3"><div class="tb-label">Total Cost</div><div class="tb-value">'+fmtL(total)+'</div><div class="tb-sub">SD + Registration</div></div></div>';
h+='<div class="res-card"><div class="res-card-hd"><h3>Stamp Duty Breakup</h3><span class="res-badge info">'+state+'</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Property Value</td><td><strong>'+fmtL(val)+'</strong></td></tr>';
h+='<tr><td>State</td><td><strong>'+state+'</strong></td></tr>';
h+='<tr><td>Buyer</td><td><strong>'+(gender==='female'?'Female (concession applied)':gender==='joint'?'Joint (M+F, avg rate)':'Male')+'</strong></td></tr>';
h+='<tr><td>Property Type</td><td><strong>'+(propType==='res'?'Residential':propType==='com'?'Commercial':'Agricultural')+'</strong></td></tr>';
h+='<tr><td>Stamp Duty @ '+sdRate+'%</td><td class="hi">'+fmtL(sdAmt)+'</td></tr>';
h+='<tr><td>Registration Charge @ '+r.reg+'%</td><td>'+fmt(regAmt)+(r.regCap>0?' (max '+fmt(r.regCap)+')':'')+'</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Total Payable</strong></td><td style="font-size:18px;color:var(--primary)"><strong>'+fmtL(total)+'</strong></td></tr>';
h+='<tr><td>Section 80C Deduction</td><td class="hi">'+fmt(saving80c)+' (in year of purchase)</td></tr>';
h+='<tr><td>Effective Cost After 80C (at 30%)</td><td>'+fmtL(Math.round(total-saving80c*0.3))+'</td></tr>';
h+='</table></div></div>';
if(gender==='male'){h+='<div class="callout"><p><strong>Save with women buyer:</strong> If a woman family member is registered as first buyer, stamp duty drops from '+r.m+'% to '+r.f+'%, saving '+fmt(Math.round(val*(r.m-r.f)/100))+' on this property.</p></div>';}
h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20stamp%20duty%20and%20registration%20help%20in%20'+state+'." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Get Help</a></div>';
document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcSD();});
var FAQS=[
{q:"What is stamp duty on property?",a:"Stamp duty is a state government tax paid on property transactions including sale purchase gift and mortgage. It is mandatory under the Indian Stamp Act 1899 and varies by state from 3 to 10 percent of property value. Stamp duty makes the transaction legally valid and the document admissible in court as evidence."},
{q:"How is stamp duty calculated?",a:"Stamp duty is calculated as a percentage of the property value which is the higher of the actual transaction value or the government circle rate or ready reckoner rate for the area. In Maharashtra for example it is 5 percent in municipal areas plus 1 percent metro cess in Mumbai. Registration charges are additional."},
{q:"What are stamp duty rates by state?",a:"Maharashtra 5 to 6 percent, Delhi 4 to 6 percent, Karnataka 5 percent, Tamil Nadu 7 percent, Uttar Pradesh 5 to 7 percent, Gujarat 4.9 percent, West Bengal 5 to 7 percent, Rajasthan 5 to 6 percent, Telangana 5 percent. Rates vary by area type rural or urban and property type residential or commercial."},
{q:"Is there stamp duty concession for women?",a:"Yes several states offer reduced stamp duty for women buyers. Maharashtra offers 1 percent concession for women in municipal areas. Delhi charges 4 percent for women versus 6 percent for men. Karnataka and Rajasthan also offer concessions. Joint registration with a woman as first holder can reduce total stamp duty significantly."},
{q:"What is registration charge separate from stamp duty?",a:"Registration charge is a separate fee paid to the Sub-Registrar office for registering the sale deed. It is typically 1 percent of property value across most states, capped at 30000 rupees in some states. Registration is mandatory under the Registration Act 1908 for all property transactions above 100 rupees in value."},
{q:"What is circle rate or ready reckoner rate?",a:"Circle rate is the minimum property value set by the state government for each locality used as the base for stamp duty calculation. In Maharashtra it is called ready reckoner rate, in Delhi circle rate, and in other states guideline value. If the actual sale price is lower than circle rate, stamp duty is still calculated on the circle rate."},
{q:"Can stamp duty be claimed as tax deduction?",a:"Yes stamp duty and registration charges paid for a residential property can be claimed under Section 80C of the Income Tax Act up to the overall limit of 1.5 lakh rupees in the year of purchase. This is part of the 80C basket along with PPF ELSS insurance and other eligible investments."},
{q:"What happens if stamp duty is not paid?",a:"Documents without proper stamp duty are inadmissible as evidence in court. If discovered later the buyer must pay the deficit amount plus penalty of 2 to 10 percent per month depending on the state. In Maharashtra penalty can reach up to 4 times the deficit stamp duty. Always pay correct stamp duty at the time of registration."},
{q:"What is stamp duty on gift deed?",a:"Gift deed stamp duty varies by state and relationship. In Maharashtra gifts between blood relatives like parent to child or between spouses attract only 200 rupees stamp duty. Gifts to non-relatives attract the same stamp duty as a sale transaction. Delhi has similar concessions for family transfers."},
{q:"What is e-stamping?",a:"E-stamping is the electronic method of paying stamp duty through the Stock Holding Corporation of India SHCIL authorized centres or online portals. It replaced physical stamp paper in most states. E-stamp certificates are more secure, verifiable online, and eliminate the risk of fraudulent or invalid stamp papers."},
{q:"What is stamp duty on rental agreement?",a:"Stamp duty on rental agreements is typically 0.25 to 1 percent of total rent for the lease period plus deposit amount depending on the state. In Maharashtra leave and licence agreement stamp duty is 0.25 percent of total rent plus deposit. Registration is mandatory for leases above 12 months in most states."},
{q:"Is stamp duty refundable?",a:"Stamp duty is generally non-refundable once paid. However if the transaction is cancelled before registration the stamp paper or e-stamp value can be adjusted against future transactions in some states within 6 months. Maharashtra allows refund application within 6 months if the document was not executed. Rules vary by state."},
{q:"What is stamp duty on loan agreement?",a:"Home loan agreements attract stamp duty of 0.1 to 0.5 percent of loan amount depending on the state. In Maharashtra it is 0.1 percent capped at certain amounts. This is in addition to property stamp duty. Banks typically include loan agreement stamp duty in closing costs. The charge applies to both new loans and refinancing."}
];

function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});

</script>
@endsection