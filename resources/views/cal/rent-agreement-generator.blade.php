@extends('layouts.app')
@section('meta')
    <title>Rent Agreement Generator | Leave &amp; Licence Online</title>
    <meta name="description" content="Rent Agreement Generator: create a leave and licence agreement with all standard clauses, stamp duty and TDS guidance. Download a ready draft online, free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/rent-agreement-generator">
    <meta property="og:title" content="Rent Agreement Generator &mdash; Free 2026 | Patron Accounting"><meta property="og:description" content="Generate rent agreement with all clauses. Stamp duty, TDS, registration info.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN"><meta property="og:url" content="/tools/rent-agreement-generator">
    <meta property="og:image" content="/tools/og-rent-agreement.png"><meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Rent Agreement Generator &mdash; Free 2026"><meta name="twitter:description" content="Generate rent agreement with all standard clauses.">
@endsection
@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Rent Agreement Generator India 2026","description":"Free online rent agreement and leave and licence agreement generator for India. Fill in landlord tenant property and rent details to generate a complete agreement draft with all standard clauses including security deposit, maintenance, notice period, escalation, lock-in, and termination terms. Includes stamp duty guidance and TDS on rent information.","url":"/tools/rent-agreement-generator","applicationCategory":"BusinessApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Rent Agreement Generator","item":"/tools/rent-agreement-generator"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Is rent agreement mandatory in India?","acceptedAnswer":{"@type":"Answer","text":"While not legally mandatory for month-to-month tenancy, a written rent agreement is strongly recommended to protect both landlord and tenant. For leave and licence agreements exceeding 12 months, registration with the Sub-Registrar is mandatory under the Registration Act 1908. Most states require registration for agreements above 11 months."}},{"@type":"Question","name":"What is the stamp duty on rent agreement?","acceptedAnswer":{"@type":"Answer","text":"Stamp duty varies by state. In Maharashtra, leave and licence stamp duty is 0.25 percent of total rent for the licence period plus refundable deposit. In Delhi it is typically 2 percent of average annual rent. Most states charge 0.1 to 1 percent. E-stamping is available in most states through SHCIL authorised centres."}},{"@type":"Question","name":"What is the difference between rent and leave and licence?","acceptedAnswer":{"@type":"Answer","text":"A lease or rent agreement creates a tenancy giving the tenant certain rights over the property under the Transfer of Property Act. A leave and licence agreement under the Indian Easements Act 1882 only grants permission to use the property without creating any interest. Leave and licence is preferred by landlords as it is easier to terminate."}},{"@type":"Question","name":"Should rent agreement be for 11 months?","acceptedAnswer":{"@type":"Answer","text":"The 11-month term is popular because agreements of 12 months or more must be compulsorily registered with the Sub-Registrar which involves higher stamp duty and registration charges. An 11-month agreement can be executed on stamp paper without registration though e-registration is recommended even for shorter terms in many states."}},{"@type":"Question","name":"What clauses should a rent agreement include?","acceptedAnswer":{"@type":"Answer","text":"Essential clauses include names and addresses of parties, property description, monthly rent amount, security deposit amount, tenure and renewal terms, notice period for termination, maintenance responsibility, restrictions on use and subletting, annual rent escalation percentage, and lock-in period if any. This generator includes all standard clauses."}},{"@type":"Question","name":"What is the standard security deposit?","acceptedAnswer":{"@type":"Answer","text":"Security deposit varies by city and market practice. In Mumbai and Pune typically 2 to 3 months rent. In Delhi and Bangalore 2 to 10 months rent. In Chennai 3 to 6 months. The deposit is refundable at the end of the agreement after deducting any damages or unpaid rent. Deposit amount should be clearly mentioned in the agreement."}},{"@type":"Question","name":"Can landlord increase rent during agreement period?","acceptedAnswer":{"@type":"Answer","text":"Rent cannot be increased during the agreement period unless a rent escalation clause is included. Standard practice is 5 to 10 percent annual increase on renewal. Any increase must be mutually agreed and documented. In rent-controlled areas, increases are governed by the Rent Control Act of the respective state."}},{"@type":"Question","name":"What is the notice period for terminating rent agreement?","acceptedAnswer":{"@type":"Answer","text":"Standard notice period is 1 to 3 months as specified in the agreement. If not mentioned, 15 days notice is reasonable for month-to-month tenancy. During lock-in period, the party terminating early may need to pay rent for the remaining lock-in months. Notice should be given in writing and acknowledged by the other party."}},{"@type":"Question","name":"Who pays for rent agreement registration?","acceptedAnswer":{"@type":"Answer","text":"By convention the tenant usually bears the cost of stamp duty and registration for rental agreements. However this is negotiable between parties. In some states like Maharashtra the landlord and tenant share costs equally. Professional charges for drafting the agreement are typically 1000 to 3000 rupees paid by tenant."}},{"@type":"Question","name":"Is e-registration available for rent agreements?","acceptedAnswer":{"@type":"Answer","text":"Yes several states including Maharashtra and Karnataka offer e-registration of rent agreements through their respective Sub-Registrar portals. In Maharashtra the IGR portal allows online registration with Aadhaar-based e-sign. E-registration makes the process faster and eliminates the need to visit the Sub-Registrar office physically."}},{"@type":"Question","name":"Can NRI be a landlord in rent agreement?","acceptedAnswer":{"@type":"Answer","text":"Yes NRIs can rent out their Indian properties. The agreement should include the NRI landlord address abroad and an authorised representative or Power of Attorney holder in India. TDS at 30 percent must be deducted by the tenant on rent paid to NRI landlord under Section 195 of the Income Tax Act."}},{"@type":"Question","name":"What is TDS on rent under Section 194-IB?","acceptedAnswer":{"@type":"Answer","text":"Individual tenants paying rent exceeding 50000 rupees per month must deduct TDS at 5 percent under Section 194-IB. TDS is deducted once in the last month of tenancy or last month of the financial year whichever is earlier. Form 26QC must be filed within 30 days and Form 16C issued to the landlord."}},{"@type":"Question","name":"What happens if rent agreement is not registered?","acceptedAnswer":{"@type":"Answer","text":"Unregistered agreements for terms above 12 months are not admissible as evidence in court under Section 49 of the Registration Act. However they can be used as collateral evidence. For agreements of 11 months or less, non-registration does not make them invalid but registration provides better legal protection to both parties."}}]}</script>
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
.tool-box .tb-value{font-size:clamp(1rem,2vw,1.4rem);font-weight:800;margin-top:4px}
.tool-box .tb-sub{font-size:11px;opacity:.8;margin-top:2px}
.tool-box.b1{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.tool-box.b2{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.tool-box.b3{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.gen-output{background:var(--card);border:2px solid var(--border);border-radius:var(--radius);padding:24px;font-size:14px;line-height:1.9;margin:20px 0;max-height:600px;overflow-y:auto;font-family:var(--font-body);color:var(--text)}
.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px}
.form-grid .form-group{margin-bottom:0}
.form-grid .form-group label{font-size:12px;font-weight:600;color:var(--text-secondary);display:block;margin-bottom:4px}
.form-grid .form-group input,.form-grid .form-group select{width:100%;padding:10px 12px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:14px;outline:none;color:var(--text);background:var(--card);transition:border-color 0.2s}
.form-grid .form-group input:focus,.form-grid .form-group select:focus{border-color:var(--primary)}
.section-label{font-size:14px;font-weight:700;color:var(--primary-dark);margin:20px 0 10px;padding-bottom:6px;border-bottom:2px solid var(--border)}
@media(max-width:600px){.tool-hero{grid-template-columns:1fr}.form-grid{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#generator">Generator</a><a href="#how-to-use">How to Use</a><a href="#stamp-duty">Stamp Duty</a><a href="#tds">TDS on Rent</a><a href="#model-act">Model Tenancy Act</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Rent Agreement Generator</nav> --}}
<header class="hero" id="generator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Rent Agreement <span>Generator</span> &mdash; 11-Month Leave &amp; Licence</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Generate a legally formatted 11-month rent agreement (leave &amp; licence) for any Indian city. Fill in landlord/tenant details, property address, rent, deposit, and terms. Get a complete 15-clause agreement ready for printing on e-stamp paper from <a href="https://igr.maharashtra.gov.in/" target="_blank" rel="noopener">IGR Maharashtra</a> or your state portal.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Generate Rent Agreement</h2>
    <noscript><div class="noscript-box">This tool requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="section-label">Landlord (Licensor) Details</div>
    <div class="form-grid">
        <div class="form-group"><label>Full Name *</label><input type="text" id="fLLName" placeholder="e.g., Rajesh Kumar Sharma"></div>
        <div class="form-group"><label>PAN</label><input type="text" id="fLLPan" placeholder="ABCDE1234F" maxlength="10" style="text-transform:uppercase"></div>
        <div class="form-group"><label>Aadhaar (last 4)</label><input type="text" id="fLLAadhaar" placeholder="1234" maxlength="4"></div>
        <div class="form-group"><label>Address</label><input type="text" id="fLLAddr" placeholder="Permanent address"></div>
    </div>
    <div class="section-label">Tenant (Licensee) Details</div>
    <div class="form-grid">
        <div class="form-group"><label>Full Name *</label><input type="text" id="fTNName" placeholder="e.g., Priya Singh"></div>
        <div class="form-group"><label>PAN</label><input type="text" id="fTNPan" placeholder="FGHIJ5678K" maxlength="10" style="text-transform:uppercase"></div>
        <div class="form-group"><label>Aadhaar (last 4)</label><input type="text" id="fTNAadhaar" placeholder="5678" maxlength="4"></div>
        <div class="form-group"><label>Address</label><input type="text" id="fTNAddr" placeholder="Permanent address"></div>
    </div>
    <div class="section-label">Property &amp; Terms</div>
    <div class="form-grid">
        <div class="form-group"><label>Property Address *</label><input type="text" id="fPropAddr" placeholder="Flat No, Building, Street, Area"></div>
        <div class="form-group"><label>City *</label><select id="fCity"><option>Pune</option><option>Mumbai</option><option>Delhi</option><option>Bangalore</option><option>Hyderabad</option><option>Chennai</option><option>Kolkata</option><option>Gurugram</option><option>Other</option></select></div>
        <div class="form-group"><label>Monthly Rent (&#8377;) *</label><input type="number" id="fRent" value="15000"></div>
        <div class="form-group"><label>Security Deposit (&#8377;) *</label><input type="number" id="fDeposit" value="45000"></div>
        <div class="form-group"><label>Start Date *</label><input type="date" id="fStartDate"></div>
        <div class="form-group"><label>Duration</label><select id="fDuration"><option value="11" selected>11 Months</option><option value="6">6 Months</option><option value="12">12 Months</option><option value="24">24 Months</option></select></div>
        <div class="form-group"><label>Notice Period</label><select id="fNotice"><option value="1" selected>1 Month</option><option value="2">2 Months</option><option value="3">3 Months</option></select></div>
        <div class="form-group"><label>Annual Escalation</label><select id="fEsc"><option value="0">None</option><option value="5" selected>5%</option><option value="7">7%</option><option value="10">10%</option></select></div>
    </div>
    <div class="form-group" style="margin-top:14px"><label>Property Type</label><div class="toggle-group" id="fPropType"><button type="button" class="toggle-btn active" data-val="residential" onclick="setTg('fPropType',this)">Residential</button><button type="button" class="toggle-btn" data-val="commercial" onclick="setTg('fPropType',this)">Commercial</button></div></div>
    <button class="btn-calculate" onclick="genAgreement()">Generate Agreement</button>
    <button class="btn-reset" onclick="resetAll()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use</h2><p>Fill all fields marked * and click Generate. The tool creates a complete 15-clause Leave &amp; Licence agreement. Copy or print the output on e-stamp paper. For e-stamps visit <a href="https://igr.maharashtra.gov.in/" target="_blank" rel="noopener">IGR Maharashtra</a> or your state portal.</p><div class="callout"><p><strong>CA Tip:</strong> Agreements of 12+ months must be registered under <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Registration Act 1908</a>. Even 11-month agreements benefit from registration for legal protection. Our <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>-member CAs review agreements for high-value properties.</p></div></section>

<section class="content-section" id="stamp-duty"><h2>Stamp Duty on Rent Agreements</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>State</th><th>Leave &amp; Licence (11 mo)</th><th>Lease (12+ mo)</th><th>Registration</th></tr></thead><tbody>
<tr><td>Maharashtra</td><td>0.25% of (rent+deposit)</td><td>5% of annual rent</td><td>&#8377;1,000</td></tr>
<tr><td>Delhi</td><td>2% of annual rent</td><td>2% of annual rent</td><td>&#8377;1,100</td></tr>
<tr><td>Karnataka</td><td>1% of rent</td><td>1% of rent</td><td>&#8377;500</td></tr>
<tr><td>Tamil Nadu</td><td>1% of rent</td><td>1% of rent+deposit</td><td>1% of annual rent</td></tr>
</tbody></table></div></section>

<section class="content-section" id="tds"><h2>TDS on Rent &mdash; Section 194-IB</h2><p>If monthly rent exceeds &#8377;50,000, tenants must deduct TDS at 5% under <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Section 194-IB</a>. File Form 26QC within 30 days. Issue Form 16C to landlord. Landlord gets credit in Form 26AS. NRI landlords attract 30% TDS under Section 195.</p></section>

<section class="content-section" id="model-act"><h2>Model Tenancy Act 2021</h2><ul><li><strong>Mandatory written agreement</strong> registered with Rent Authority</li><li><strong>Security deposit cap:</strong> 2 months rent (residential), 6 months (commercial)</li><li><strong>Notice period:</strong> 2 months for both parties</li><li><strong>Overstay penalty:</strong> 2&times; rent for 2 months, 4&times; thereafter</li><li><strong>Landlord obligations:</strong> Structural repairs, 24-hour notice before visit</li></ul></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need agreement help?</strong> Our team drafts, stamps, and registers agreements across India. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20rent%20agreement%20drafting%20and%20registration." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>
<section class="content-section" id="faqs"><h2>Frequently Asked Questions</h2><div id="faqList"></div></section>
</div><aside class="sidebar-col"><div class="cta-card"><h3>Need Agreement Help?</h3><p>Our CAs draft rent agreements, handle stamp duty &amp; registration across India.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20rent%20agreement%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div><div class="sidebar-card"><h3>Services</h3><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a><a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a><a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a></div><div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/stamp-duty-calculator" class="sidebar-link">Stamp Duty Calculator <span class="arrow">&rarr;</span></a><a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a><a href="/tools/emi-calculator" class="sidebar-link">EMI Calculator <span class="arrow">&rarr;</span></a><a href="/tools/percentage-calculator" class="sidebar-link">Percentage Calculator <span class="arrow">&rarr;</span></a></div><div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div></aside></div>

<script>
function getVal(id){var g=document.getElementById(id);var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function fmt(n){return'₹'+Math.round(n).toLocaleString('en-IN');}

function resetAll(){
['fLLName','fLLPan','fLLAadhaar','fLLAddr','fTNName','fTNPan','fTNAadhaar','fTNAddr','fPropAddr'].forEach(function(id){document.getElementById(id).value='';});
document.getElementById('fRent').value='15000';document.getElementById('fDeposit').value='45000';document.getElementById('fStartDate').value='';
document.getElementById('fDuration').selectedIndex=0;document.getElementById('fNotice').selectedIndex=0;document.getElementById('fEsc').selectedIndex=1;document.getElementById('fCity').selectedIndex=0;
document.getElementById('fPropType').querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',i===0);});
document.getElementById('resPanel').classList.remove('visible');
}

function numWords(n){if(n===0)return'Zero';var a=['','One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten','Eleven','Twelve','Thirteen','Fourteen','Fifteen','Sixteen','Seventeen','Eighteen','Nineteen'];var b=['','','Twenty','Thirty','Forty','Fifty','Sixty','Seventy','Eighty','Ninety'];if(n<20)return a[n];if(n<100)return b[Math.floor(n/10)]+(n%10?' '+a[n%10]:'');if(n<1000)return a[Math.floor(n/100)]+' Hundred'+(n%100?' and '+numWords(n%100):'');if(n<100000)return numWords(Math.floor(n/1000))+' Thousand'+(n%1000?' '+numWords(n%1000):'');if(n<10000000)return numWords(Math.floor(n/100000))+' Lakh'+(n%100000?' '+numWords(n%100000):'');return numWords(Math.floor(n/10000000))+' Crore'+(n%10000000?' '+numWords(n%10000000):'');}

function genAgreement(){
var ll=document.getElementById('fLLName').value.trim(),tn=document.getElementById('fTNName').value.trim();
var pa=document.getElementById('fPropAddr').value.trim(),city=document.getElementById('fCity').value;
var rent=parseInt(document.getElementById('fRent').value)||0,dep=parseInt(document.getElementById('fDeposit').value)||0;
var sd=document.getElementById('fStartDate').value,dur=parseInt(document.getElementById('fDuration').value);
var notice=parseInt(document.getElementById('fNotice').value),esc=parseInt(document.getElementById('fEsc').value);
var ptype=getVal('fPropType');
if(!ll||!tn||!pa||!rent||!sd){alert('Please fill all required fields (names, property address, rent, start date).');return;}
var d1=new Date(sd),d2=new Date(sd);d2.setMonth(d2.getMonth()+dur);
var llPan=document.getElementById('fLLPan').value.toUpperCase()||'XXXXX0000X';
var tnPan=document.getElementById('fTNPan').value.toUpperCase()||'XXXXX0000X';
var llAa=document.getElementById('fLLAadhaar').value||'XXXX';
var tnAa=document.getElementById('fTNAadhaar').value||'XXXX';
var llAd=document.getElementById('fLLAddr').value||'[Landlord Address]';
var tnAd=document.getElementById('fTNAddr').value||'[Tenant Address]';
var ds=d1.toLocaleDateString('en-IN',{day:'numeric',month:'long',year:'numeric'});
var de=d2.toLocaleDateString('en-IN',{day:'numeric',month:'long',year:'numeric'});
var totalRent=rent*dur;var stampEst=Math.max(100,Math.round((totalRent+dep)*0.0025));

var t='<strong style="text-align:center;display:block;font-size:16px;margin-bottom:16px">LEAVE AND LICENCE AGREEMENT</strong>';
t+='<p>This Agreement of Leave and Licence is made and executed on <strong>'+ds+'</strong> at <strong>'+city+'</strong>.</p>';
t+='<p><strong>BETWEEN</strong></p>';
t+='<p>Mr./Ms. <strong>'+ll+'</strong>, PAN: '+llPan+', Aadhaar: XXXX-XXXX-'+llAa+', residing at '+llAd+'<br>(hereinafter referred to as the <strong>"LICENSOR / LANDLORD"</strong>)</p>';
t+='<p><strong>AND</strong></p>';
t+='<p>Mr./Ms. <strong>'+tn+'</strong>, PAN: '+tnPan+', Aadhaar: XXXX-XXXX-'+tnAa+', residing at '+tnAd+'<br>(hereinafter referred to as the <strong>"LICENSEE / TENANT"</strong>)</p>';
t+='<p><strong>PROPERTY:</strong> '+pa+', '+city+' ('+ptype+')</p>';
t+='<p>WHEREAS the Licensor is the lawful owner of the above property and agrees to grant leave and licence to the Licensee on the following terms:</p>';
t+='<p><strong>1. TERM:</strong> This agreement is for <strong>'+dur+' months</strong> from '+ds+' to '+de+'.</p>';
t+='<p><strong>2. LICENCE FEE:</strong> Monthly licence fee of <strong>'+fmt(rent)+'</strong> (Rupees '+numWords(rent)+' Only) payable by the 5th of each month.</p>';
t+='<p><strong>3. SECURITY DEPOSIT:</strong> Refundable deposit of <strong>'+fmt(dep)+'</strong> (Rupees '+numWords(dep)+' Only), to be returned within 30 days of vacating after deducting outstanding dues or damages.</p>';
t+='<p><strong>4. ESCALATION:</strong> Rent shall increase by '+esc+'% upon renewal after expiry of this agreement.</p>';
t+='<p><strong>5. NOTICE PERIOD:</strong> Either party may terminate by giving '+notice+' month(s) written notice.</p>';
t+='<p><strong>6. MAINTENANCE:</strong> Society maintenance charges borne by Licensee. Structural repairs by Licensor.</p>';
t+='<p><strong>7. USE:</strong> Premises shall be used exclusively for '+ptype+' purposes. Sub-letting prohibited without written consent.</p>';
t+='<p><strong>8. UTILITIES:</strong> Electricity, water, gas, internet charges borne by Licensee per actual consumption.</p>';
t+='<p><strong>9. CONDITION:</strong> Licensee shall maintain premises in good condition, subject to normal wear and tear.</p>';
t+='<p><strong>10. ALTERATIONS:</strong> No structural changes without prior written consent of Licensor.</p>';
t+='<p><strong>11. ACCESS:</strong> Licensor may inspect premises with 24-hour prior notice.</p>';
t+='<p><strong>12. TERMINATION:</strong> Agreement terminates on '+de+'. Early termination per Clause 5.</p>';
t+='<p><strong>13. DISPUTES:</strong> Disputes resolved amicably, failing which in competent court at '+city+'.</p>';
t+='<p><strong>14. PETS / SMOKING:</strong> [As mutually agreed between parties]</p>';
t+='<p><strong>15. GOVERNING LAW:</strong> Governed by laws of India and applicable state tenancy laws.</p>';
t+='<p style="margin-top:24px">IN WITNESS WHEREOF, the parties sign on '+ds+'.</p>';
t+='<br><table style="width:100%;font-size:13px"><tr><td style="width:50%"><strong>LICENSOR:</strong><br><br>Name: '+ll+'<br>Signature: _______________<br>Date: '+ds+'</td><td><strong>LICENSEE:</strong><br><br>Name: '+tn+'<br>Signature: _______________<br>Date: '+ds+'</td></tr></table>';
t+='<br><table style="width:100%;font-size:13px"><tr><td style="width:50%"><strong>WITNESS 1:</strong><br>Name: _______________<br>Sign: _______________</td><td><strong>WITNESS 2:</strong><br>Name: _______________<br>Sign: _______________</td></tr></table>';

var h='<div class="tool-hero"><div class="tool-box b1"><div class="tb-label">Monthly Rent</div><div class="tb-value">'+fmt(rent)+'</div><div class="tb-sub">'+dur+' months = '+fmt(totalRent)+'</div></div><div class="tool-box b2"><div class="tb-label">Deposit</div><div class="tb-value">'+fmt(dep)+'</div><div class="tb-sub">Refundable</div></div><div class="tool-box b3"><div class="tb-label">~Stamp Duty (MH)</div><div class="tb-value">'+fmt(stampEst)+'</div><div class="tb-sub">0.25% of rent+deposit</div></div></div>';
h+='<div class="gen-output" id="agreementText">'+t+'</div>';
h+='<div style="display:flex;gap:8px;flex-wrap:wrap;margin:12px 0"><button class="btn-calculate" style="padding:10px 20px;font-size:14px" onclick="copyDraft()">&#128203; Copy Agreement</button><button class="btn-calculate" style="padding:10px 20px;font-size:14px;background:var(--text)" onclick="printDraft()">&#128424; Print</button></div>';
h+='<div class="callout"><p><strong>Next Steps:</strong> 1) Purchase e-stamp paper of '+fmt(stampEst)+' value. 2) Print agreement on stamp paper. 3) Both parties + 2 witnesses sign. 4) Register at Sub-Registrar (mandatory for 12+ month agreements).</p></div>';
h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20generated%20a%20rent%20agreement.%20I%20need%20registration%20help." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Get Registration Help</a></div>';
document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

function copyDraft(){var el=document.getElementById('agreementText');var r=document.createRange();r.selectNode(el);window.getSelection().removeAllRanges();window.getSelection().addRange(r);document.execCommand('copy');window.getSelection().removeAllRanges();alert('Agreement copied to clipboard!');}

function printDraft(){var c=document.getElementById('agreementText').innerHTML;var w=window.open('','_blank','width=800,height=600');w.document.write('<html><head><title>Rent Agreement</title><style>body{font-family:Georgia,serif;font-size:14px;line-height:1.9;padding:50px 60px;color:#222;max-width:800px;margin:0 auto}strong{color:#000}table{width:100%}@media print{body{padding:30px}}</style></head><body>'+c+'</body></html>');w.document.close();w.focus();setTimeout(function(){w.print();},500);}

document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))genAgreement();});

var FAQS=[
{q:"Is rent agreement mandatory in India?",a:"While not legally mandatory for month-to-month tenancy, a written rent agreement is strongly recommended to protect both landlord and tenant. For leave and licence agreements exceeding 12 months, registration with the Sub-Registrar is mandatory under the Registration Act 1908. Most states require registration for agreements above 11 months."},
{q:"What is the stamp duty on rent agreement?",a:"Stamp duty varies by state. In Maharashtra, leave and licence stamp duty is 0.25 percent of total rent for the licence period plus refundable deposit. In Delhi it is typically 2 percent of average annual rent. Most states charge 0.1 to 1 percent. E-stamping is available in most states through SHCIL authorised centres."},
{q:"What is the difference between rent and leave and licence?",a:"A lease or rent agreement creates a tenancy giving the tenant certain rights over the property under the Transfer of Property Act. A leave and licence agreement under the Indian Easements Act 1882 only grants permission to use the property without creating any interest. Leave and licence is preferred by landlords as it is easier to terminate."},
{q:"Should rent agreement be for 11 months?",a:"The 11-month term is popular because agreements of 12 months or more must be compulsorily registered with the Sub-Registrar which involves higher stamp duty and registration charges. An 11-month agreement can be executed on stamp paper without registration though e-registration is recommended even for shorter terms in many states."},
{q:"What clauses should a rent agreement include?",a:"Essential clauses include names and addresses of parties, property description, monthly rent amount, security deposit amount, tenure and renewal terms, notice period for termination, maintenance responsibility, restrictions on use and subletting, annual rent escalation percentage, and lock-in period if any. This generator includes all standard clauses."},
{q:"What is the standard security deposit?",a:"Security deposit varies by city and market practice. In Mumbai and Pune typically 2 to 3 months rent. In Delhi and Bangalore 2 to 10 months rent. In Chennai 3 to 6 months. The deposit is refundable at the end of the agreement after deducting any damages or unpaid rent. Deposit amount should be clearly mentioned in the agreement."},
{q:"Can landlord increase rent during agreement period?",a:"Rent cannot be increased during the agreement period unless a rent escalation clause is included. Standard practice is 5 to 10 percent annual increase on renewal. Any increase must be mutually agreed and documented. In rent-controlled areas, increases are governed by the Rent Control Act of the respective state."},
{q:"What is the notice period for terminating rent agreement?",a:"Standard notice period is 1 to 3 months as specified in the agreement. If not mentioned, 15 days notice is reasonable for month-to-month tenancy. During lock-in period, the party terminating early may need to pay rent for the remaining lock-in months. Notice should be given in writing and acknowledged by the other party."},
{q:"Who pays for rent agreement registration?",a:"By convention the tenant usually bears the cost of stamp duty and registration for rental agreements. However this is negotiable between parties. In some states like Maharashtra the landlord and tenant share costs equally. Professional charges for drafting the agreement are typically 1000 to 3000 rupees paid by tenant."},
{q:"Is e-registration available for rent agreements?",a:"Yes several states including Maharashtra and Karnataka offer e-registration of rent agreements through their respective Sub-Registrar portals. In Maharashtra the IGR portal allows online registration with Aadhaar-based e-sign. E-registration makes the process faster and eliminates the need to visit the Sub-Registrar office physically."},
{q:"Can NRI be a landlord in rent agreement?",a:"Yes NRIs can rent out their Indian properties. The agreement should include the NRI landlord address abroad and an authorised representative or Power of Attorney holder in India. TDS at 30 percent must be deducted by the tenant on rent paid to NRI landlord under Section 195 of the Income Tax Act."},
{q:"What is TDS on rent under Section 194-IB?",a:"Individual tenants paying rent exceeding 50000 rupees per month must deduct TDS at 5 percent under Section 194-IB. TDS is deducted once in the last month of tenancy or last month of the financial year whichever is earlier. Form 26QC must be filed within 30 days and Form 16C issued to the landlord."},
{q:"What happens if rent agreement is not registered?",a:"Unregistered agreements for terms above 12 months are not admissible as evidence in court under Section 49 of the Registration Act. However they can be used as collateral evidence. For agreements of 11 months or less, non-registration does not make them invalid but registration provides better legal protection to both parties."}
];

function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection