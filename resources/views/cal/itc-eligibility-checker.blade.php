@extends('layouts.app')
@section('meta')
    <title>ITC Eligibility Checker | GST Section 16 &amp; 17(5)</title>
    <meta name="description" content="Free ITC eligibility checker: see if your GST purchase qualifies for Input Tax Credit under Section 16 conditions, with the 17(5) blocked credits list. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/itc-eligibility-checker">
    <meta property="og:title" content="ITC Eligibility Checker &mdash; Free GST Tool 2026 | Patron Accounting">
    <meta property="og:description" content="Check if your purchase qualifies for GST Input Tax Credit. Section 16 conditions and 17(5) blocked credits.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/itc-eligibility-checker">
    <meta property="og:image" content="/tools/og-itc-eligibility-checker.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITC Eligibility Checker &mdash; Free GST Tool 2026">
    <meta name="twitter:description" content="Check ITC eligibility for GST purchases. Section 16 and 17(5) checks.">
    <meta name="twitter:image" content="/tools/og-itc-eligibility-checker.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"Input Tax Credit (ITC) Eligibility Checker FY 2025-26","description":"Free online tool to check whether a purchase qualifies for GST Input Tax Credit. Verifies all conditions under Section 16 of CGST Act including registration, valid invoice, receipt of goods, supplier compliance, and GSTR-2B reflection. Also checks blocked credit categories under Section 17(5) and calculates eligible ITC amount.","url":"/tools/itc-eligibility-checker","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"ITC Eligibility Checker","item":"/tools/itc-eligibility-checker"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What are the conditions to claim ITC under GST?","acceptedAnswer":{"@type":"Answer","text":"Under Section 16 of CGST Act you must be GST registered, possess a valid tax invoice or debit note, have actually received the goods or services, the supplier must have paid GST to the government, the invoice must appear in your GSTR-2B, and the goods or services must be used for business purposes. All conditions must be met simultaneously."}},{"@type":"Question","name":"What is blocked credit under Section 17(5)?","acceptedAnswer":{"@type":"Answer","text":"Section 17(5) lists specific goods and services where ITC cannot be claimed regardless of business use. These include motor vehicles for personal use, food and beverages, outdoor catering, beauty treatments, health services, club memberships, life and health insurance unless mandated, construction of immovable property, and goods lost stolen destroyed or given as gifts."}},{"@type":"Question","name":"Can ITC be claimed on motor vehicles under GST?","acceptedAnswer":{"@type":"Answer","text":"ITC on motor vehicles is blocked for personal use. However exceptions exist for vehicles used for transportation of persons with seating up to 13 including driver, vehicles used for making taxable supply of transportation, vehicles used for imparting training on driving, and motor vehicles purchased for further supply or resale."}},{"@type":"Question","name":"What is the time limit to claim ITC?","acceptedAnswer":{"@type":"Answer","text":"ITC must be claimed by the earlier of the due date of filing GSTR-3B for September of the following financial year or the date of filing the annual return GSTR-9. For FY 2025-26 the deadline would be the September 2026 GSTR-3B due date. Missing this deadline means the ITC is permanently lost and cannot be recovered."}},{"@type":"Question","name":"Can ITC be claimed if invoice is not in GSTR-2B?","acceptedAnswer":{"@type":"Answer","text":"No. From January 2022 ITC can only be claimed on invoices appearing in GSTR-2B as per Rule 36(4) of CGST Rules. No provisional ITC is allowed. If an invoice does not appear in GSTR-2B you must follow up with the supplier to file their GSTR-1 correctly so the invoice reflects in the next GSTR-2B cycle."}},{"@type":"Question","name":"Is ITC available on construction of immovable property?","acceptedAnswer":{"@type":"Answer","text":"No ITC is blocked on goods and services used for construction of immovable property on own account under Section 17(5)(d). This includes both commercial and residential construction. However ITC is available for construction businesses who construct for sale to others as this is considered supply of construction services."}},{"@type":"Question","name":"What happens if supplier does not pay GST to government?","acceptedAnswer":{"@type":"Answer","text":"If the supplier does not pay collected GST to the government the ITC claimed by the recipient is not affected immediately. However under Rule 37A if the supplier fails to pay tax the recipient must reverse ITC proportionally. The GSTR-2B now flags such invoices and the recipient must monitor supplier compliance regularly."}},{"@type":"Question","name":"Can composition dealers claim ITC?","acceptedAnswer":{"@type":"Answer","text":"No composition dealers under Section 10 cannot claim Input Tax Credit on any purchases. All tax must be paid from the cash ledger only. This is a fundamental restriction of the composition scheme. When transitioning from composition to regular scheme ITC on closing stock can be claimed via Form GST ITC-01 within 30 days."}},{"@type":"Question","name":"Is ITC available on employee related expenses?","acceptedAnswer":{"@type":"Answer","text":"ITC on food and beverages, outdoor catering, beauty treatment, health services, and life or health insurance for employees is blocked under Section 17(5). However ITC is available if these services are obligatory for the employer under any law or if the same category of supply is an outward taxable supply of the business."}},{"@type":"Question","name":"What is the 180-day payment rule for ITC?","acceptedAnswer":{"@type":"Answer","text":"Under Rule 37 of CGST Rules if the recipient does not pay the supplier within 180 days from the invoice date the ITC claimed must be reversed along with interest at 18 percent. The reversed ITC can be reclaimed once the payment is made to the supplier. This rule ensures genuine business transactions for ITC claims."}},{"@type":"Question","name":"How is ITC reversed for exempt supplies?","acceptedAnswer":{"@type":"Answer","text":"Under Rule 42 of CGST Rules if inputs or input services are used partly for taxable and partly for exempt supplies the common credit must be apportioned. ITC attributable to exempt supplies must be reversed monthly. The formula is Common ITC multiplied by exempt turnover divided by total turnover for the month."}},{"@type":"Question","name":"Can ITC be claimed on gifts and free samples?","acceptedAnswer":{"@type":"Answer","text":"No ITC cannot be claimed on goods lost stolen destroyed written off or disposed of by way of gift or free samples as per Section 17(5)(h). If ITC was already claimed on such goods it must be reversed. However promotional items given as part of a supply where consideration is received may be eligible for ITC."}},{"@type":"Question","name":"What documents are required to claim ITC?","acceptedAnswer":{"@type":"Answer","text":"Required documents include tax invoice from supplier with valid GSTIN, debit note if applicable, bill of entry for imports, ISD invoice for credit distributed by Input Service Distributor, and self-invoice for reverse charge supplies. The invoice must contain all mandatory fields prescribed under Rule 46 of CGST Rules."}}]}
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


/* Tool-specific: ITC Eligibility */
.elig-grid{display:grid;grid-template-columns:1fr;gap:12px;margin-bottom:18px}
.elig-item{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 18px;background:var(--surface);border:1.5px solid var(--border);border-radius:var(--radius);transition:all 0.2s}
.elig-item.pass{border-color:var(--success);background:#F0FDF4}
.elig-item.fail{border-color:var(--danger);background:#FEF2F2}
.elig-label{font-size:14px;font-weight:500;color:var(--text);flex:1;line-height:1.4}
.elig-label .ref{font-family:var(--font-mono);font-size:11px;background:var(--surface-alt);padding:1px 6px;border-radius:4px;color:var(--primary);font-weight:600;margin-right:4px}
.blocked-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:18px}
.blk-chip{padding:10px 14px;border:1.5px solid var(--border);border-radius:var(--radius);font-size:13px;color:var(--text-secondary);background:var(--card);cursor:pointer;transition:all 0.2s;line-height:1.3;text-align:left}
.blk-chip:hover{border-color:var(--danger)}
.blk-chip.active{border-color:var(--danger);background:#FEF2F2;color:var(--danger)}
.blk-chip small{display:block;font-size:10px;opacity:0.7;margin-top:2px}
.elig-yn{display:flex;background:var(--surface-alt);border-radius:8px;padding:3px;gap:3px;min-width:130px}
.elig-yn button{flex:1;padding:6px 12px;border:none;border-radius:6px;font-family:var(--font-body);font-size:12px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.2s}
.elig-yn button.active{background:var(--card);box-shadow:var(--shadow-sm)}
.elig-yn button.active.y{color:var(--success)}
.elig-yn button.active.n{color:var(--danger)}
@media(max-width:600px){.blocked-grid{grid-template-columns:1fr}.elig-item{flex-direction:column;align-items:flex-start;gap:8px}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#checker">ITC Checker</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#conditions">Conditions</a>
        <a href="#blocked">Blocked Credits</a>
        <a href="#compliance">Compliance</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<header class="hero" id="checker">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>Input Tax Credit (ITC) <span>Eligibility Checker</span> &mdash; Section 16 &amp; 17(5)</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free tool checks whether your purchase qualifies for GST Input Tax Credit by verifying all conditions under Section 16 of the CGST Act (registration, valid invoice, receipt, supplier compliance, GSTR-2B reflection, business use) and checking against the blocked credit list under Section 17(5). Enter the GST amount, answer 6 eligibility questions, select any blocked categories &mdash; get an instant verdict with eligible ITC amount and GSTR-3B reporting guidance.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Check ITC Eligibility for Your Purchase</h2>
            <noscript><div class="noscript-box">This tool requires JavaScript. Please enable JavaScript or <a href="https://wa.me/919459456700">contact our CA team</a>.</div></noscript>

            <div class="calc-row">
                <div class="form-group">
                    <label>GST Paid on This Purchase (&#8377;)</label>
                    <input type="text" id="inGst" placeholder="e.g. 18,000" oninput="fmtNum(this)">
                    <div style="font-size:12px;color:var(--text-muted);margin-top:4px">Total GST amount (IGST or CGST+SGST)</div>
                </div>
                <div class="form-group">
                    <label>Purchase Category</label>
                    <select id="inCategory" onchange="onCatChange()">
                        <option value="goods">Raw Materials / Goods</option>
                        <option value="services">Input Services</option>
                        <option value="capital">Capital Goods</option>
                        <option value="import_goods">Import of Goods</option>
                        <option value="import_services">Import of Services</option>
                    </select>
                </div>
            </div>

            <div class="form-group"><label>Section 16 &mdash; Eligibility Conditions</label></div>
            <div class="elig-grid" id="eligGrid">
                <div class="elig-item" id="e0"><span class="elig-label"><span class="ref">Sec 16(a)</span> Are you registered under GST?</span><div class="elig-yn" data-idx="0"><button class="y active" onclick="setElig(0,'y',this)">Yes</button><button class="n" onclick="setElig(0,'n',this)">No</button></div></div>
                <div class="elig-item" id="e1"><span class="elig-label"><span class="ref">Sec 16(a)</span> Do you have a valid tax invoice or debit note?</span><div class="elig-yn" data-idx="1"><button class="y active" onclick="setElig(1,'y',this)">Yes</button><button class="n" onclick="setElig(1,'n',this)">No</button></div></div>
                <div class="elig-item" id="e2"><span class="elig-label"><span class="ref">Sec 16(b)</span> Have you received the goods or services?</span><div class="elig-yn" data-idx="2"><button class="y active" onclick="setElig(2,'y',this)">Yes</button><button class="n" onclick="setElig(2,'n',this)">No</button></div></div>
                <div class="elig-item" id="e3"><span class="elig-label"><span class="ref">Rule 36(4)</span> Does the invoice appear in your GSTR-2B?</span><div class="elig-yn" data-idx="3"><button class="y active" onclick="setElig(3,'y',this)">Yes</button><button class="n" onclick="setElig(3,'n',this)">No</button></div></div>
                <div class="elig-item" id="e4"><span class="elig-label"><span class="ref">Sec 16(c)</span> Are the goods/services used for business purposes?</span><div class="elig-yn" data-idx="4"><button class="y active" onclick="setElig(4,'y',this)">Yes</button><button class="n" onclick="setElig(4,'n',this)">No</button></div></div>
                <div class="elig-item" id="e5"><span class="elig-label"><span class="ref">Rule 37</span> Has payment been made to supplier within 180 days?</span><div class="elig-yn" data-idx="5"><button class="y active" onclick="setElig(5,'y',this)">Yes</button><button class="n" onclick="setElig(5,'n',this)">No</button></div></div>
            </div>

            <div class="form-group"><label>Section 17(5) &mdash; Is This Purchase Blocked?</label></div>
            <div class="form-group" style="font-size:13px;color:var(--text-muted);margin-top:-12px;margin-bottom:12px">Select any categories that apply to this purchase (ITC is blocked on these)</div>
            <div class="blocked-grid" id="blockedGrid">
                <div class="blk-chip" data-val="motor" onclick="toggleBlk(this)">Motor Vehicles<small>Personal use (exceptions apply)</small></div>
                <div class="blk-chip" data-val="food" onclick="toggleBlk(this)">Food &amp; Beverages<small>Catering, outdoor catering</small></div>
                <div class="blk-chip" data-val="beauty" onclick="toggleBlk(this)">Beauty / Health Services<small>Cosmetic, plastic surgery</small></div>
                <div class="blk-chip" data-val="club" onclick="toggleBlk(this)">Club / Gym Membership<small>Fitness, social clubs</small></div>
                <div class="blk-chip" data-val="insurance" onclick="toggleBlk(this)">Life / Health Insurance<small>Unless govt mandated</small></div>
                <div class="blk-chip" data-val="construction" onclick="toggleBlk(this)">Construction (Own Account)<small>Immovable property</small></div>
                <div class="blk-chip" data-val="gift" onclick="toggleBlk(this)">Gifts / Free Samples<small>Lost, destroyed, written off</small></div>
                <div class="blk-chip" data-val="composition" onclick="toggleBlk(this)">Composition Scheme<small>No ITC for composition dealers</small></div>
                <div class="blk-chip" data-val="personal" onclick="toggleBlk(this)">Personal Use<small>Non-business expenses</small></div>
                <div class="blk-chip" data-val="none" onclick="clearBlk(this)">None of the Above<small>Not a blocked category</small></div>
            </div>

            <button class="btn-calculate" onclick="checkITC()">Check ITC Eligibility</button>
            <button class="btn-reset" onclick="resetForm()">&#8634; Reset All</button>

            <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the ITC Eligibility Checker</h2>
            <p>This tool performs a comprehensive eligibility check for claiming Input Tax Credit on any GST purchase. It verifies all conditions under <a href="https://cbic-gst.gov.in/pdf/cgst-act.pdf" target="_blank" rel="noopener">Section 16 of the CGST Act</a> and checks against the blocked credit list under Section 17(5).</p>
            <h3>Step 1 &mdash; Enter Purchase Details</h3>
            <p>Enter the GST amount paid on the purchase and select the category (raw materials, services, capital goods, or imports). This determines any category-specific rules that apply.</p>
            <h3>Step 2 &mdash; Answer Section 16 Questions</h3>
            <p>Answer 6 Yes/No questions covering the mandatory conditions: GST registration, valid invoice, receipt of goods/services, GSTR-2B reflection, business use, and 180-day payment rule. All must be &ldquo;Yes&rdquo; for ITC eligibility.</p>
            <h3>Step 3 &mdash; Check Blocked Categories</h3>
            <p>Select any blocked credit categories under Section 17(5) that apply to this purchase. If any blocked category is selected, the ITC is fully disallowed regardless of Section 16 compliance.</p>
            <h3>Step 4 &mdash; View Results</h3>
            <p>Get an instant verdict showing eligible ITC amount, failed conditions (if any), blocked credit flags, and GSTR-3B reporting guidance for Table 4A.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Maintain a monthly ITC register categorising each purchase as eligible, blocked, or partially eligible. This makes GSTR-3B filing accurate and simplifies annual reconciliation for GSTR-9. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends documenting the business purpose for each capital goods ITC claim to defend during audits.</p>
            </div>
        </section>

        <section class="content-section" id="conditions">
            <h2>Section 16 &mdash; Conditions to Claim ITC</h2>
            <p>Under <a href="https://cbic-gst.gov.in/pdf/cgst-act.pdf" target="_blank" rel="noopener">Section 16 of the CGST Act</a>, ALL of the following conditions must be satisfied simultaneously to claim Input Tax Credit:</p>
            <ul>
                <li><strong>GST Registration:</strong> Only a registered person under GST can claim ITC. Unregistered persons have no ITC facility.</li>
                <li><strong>Valid Tax Invoice:</strong> Must possess a tax invoice, debit note, or bill of entry with all mandatory fields per Rule 46 of CGST Rules.</li>
                <li><strong>Receipt of Goods/Services:</strong> Goods must be actually received (or deemed received for bill-to-ship-to). For services, the service must have been provided.</li>
                <li><strong>GSTR-2B Reflection:</strong> From January 2022, ITC is linked 100% to GSTR-2B per Rule 36(4). No provisional ITC is allowed beyond GSTR-2B.</li>
                <li><strong>Business Purpose:</strong> Goods/services must be used in the course or furtherance of business. Personal use items are ineligible.</li>
                <li><strong>180-Day Payment Rule:</strong> Under Rule 37, if payment is not made to supplier within 180 days, ITC must be reversed with 18% interest. ITC can be reclaimed upon payment.</li>
            </ul>
            <p>Additionally, ITC must be claimed within the prescribed time limit: earlier of the GSTR-3B due date for September of the following financial year, or the date of filing GSTR-9.</p>
        </section>

        <section class="content-section" id="blocked">
            <h2>Section 17(5) &mdash; Blocked Credits (Complete List)</h2>
            <p>Regardless of meeting Section 16 conditions, ITC cannot be claimed on these items under <a href="https://cbic-gst.gov.in/pdf/cgst-act.pdf" target="_blank" rel="noopener">Section 17(5) of the CGST Act</a>:</p>
            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Blocked Category</th><th>Section</th><th>Exceptions</th></tr></thead>
                <tbody>
                    <tr><td>Motor vehicles (seating &le; 13 persons)</td><td>17(5)(a)</td><td>Resale, commercial transport, driving training</td></tr>
                    <tr><td>Food, beverages, outdoor catering</td><td>17(5)(b)</td><td>Obligatory under law, or same is outward supply</td></tr>
                    <tr><td>Beauty treatment, cosmetic surgery</td><td>17(5)(b)</td><td>Obligatory under law, or same is outward supply</td></tr>
                    <tr><td>Health services, fitness</td><td>17(5)(b)</td><td>Obligatory under law, or same is outward supply</td></tr>
                    <tr><td>Club/gym membership</td><td>17(5)(b)</td><td>None</td></tr>
                    <tr><td>Life/health insurance</td><td>17(5)(b)</td><td>Govt mandated, or same is outward supply</td></tr>
                    <tr><td>Rent-a-cab, life insurance (employees)</td><td>17(5)(b)</td><td>Obligatory under law</td></tr>
                    <tr><td>Construction of immovable property (own)</td><td>17(5)(d)</td><td>Plant &amp; machinery excluded from block</td></tr>
                    <tr><td>Goods lost, stolen, destroyed, written off</td><td>17(5)(h)</td><td>None</td></tr>
                    <tr><td>Gifts, free samples</td><td>17(5)(h)</td><td>None</td></tr>
                    <tr><td>Goods/services for personal consumption</td><td>17(5)(g)</td><td>None</td></tr>
                    <tr><td>Tax paid under composition scheme</td><td>17(5)(e)</td><td>None</td></tr>
                </tbody>
            </table>
            </div>
            <div class="callout warn">
                <p><strong>Important:</strong> &ldquo;Plant and machinery&rdquo; is explicitly excluded from the construction block. ITC is available on plant and machinery even when installed in a building under construction. This includes pipes, electrical fittings, and equipment embedded in the building but classified as plant and machinery under GST law.</p>
            </div>
        </section>

        <section class="content-section" id="compliance">
            <h2>ITC Compliance Best Practices</h2>
            <p>Proper ITC management is critical for GST compliance. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> and <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> recommend these practices:</p>
            <h3>Monthly ITC Reconciliation</h3>
            <p>Download GSTR-2B on the 14th of each month and reconcile with your purchase register before filing GSTR-3B. Use the <a href="/tools/gstr-2a-vs-3b-reconciliation">GSTR-2A vs 3B Reconciliation Tool</a> to identify mismatches. Follow up with suppliers for missing invoices immediately.</p>
            <h3>ITC Reversal Tracking</h3>
            <p>Maintain a reversal register tracking Rule 37 (180-day non-payment), Rule 42 (exempt supply apportionment), and Rule 43 (capital goods reversal). Report reversals in GSTR-3B Table 4(B) and in GSTR-9 Table 7.</p>
            <h3>Documentation</h3>
            <p>Retain all tax invoices, debit notes, bills of entry, ISD invoices, and self-invoices for 6 years from the date of filing annual return. Ensure every invoice has a valid GSTIN, correct HSN/SAC code, and all mandatory fields under Rule 46.</p>
            <div class="callout green">
                <p><strong>Expert Tip:</strong> Create a &ldquo;blocked credit checklist&rdquo; for your accounts team listing all Section 17(5) categories specific to your industry. Flag these at the time of invoice booking itself &mdash; not at the time of return filing. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITC%20management%20and%20GST%20compliance." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p>
            </div>
        </section>

        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need help with ITC claims?</strong> Our CAs handle ITC reconciliation, reversal calculations, GSTR-3B filing, and respond to ITC mismatch notices across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ITC%20Eligibility%20Checker.%20I%20need%20help%20with%20ITC%20management.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions &mdash; Input Tax Credit</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need ITC Help?</h3>
            <p>Our CAs handle ITC reconciliation, reversal calculations, and GSTR-3B filing for businesses across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20ITC%20management." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-annual-return-filing" class="sidebar-link">GST Annual Return <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-cancellation" class="sidebar-link">GST Cancellation <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gstr-2a-vs-3b-reconciliation" class="sidebar-link">GSTR-2A vs 3B Reconciliation <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/rcm-calculator" class="sidebar-link">RCM Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-penalty-calculator" class="sidebar-link">GST Penalty Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-composition-scheme-eligibility" class="sidebar-link">Composition Eligibility <span class="arrow">&rarr;</span></a>
            <a href="/tools/hsn-sac-code-finder" class="sidebar-link">HSN/SAC Code Finder <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
        </div>
    </aside>
</div>

<script>
var eligAnswers=[true,true,true,true,true,true];
function setElig(idx,val,btn){
eligAnswers[idx]=val==='y';
var grp=btn.parentElement;
grp.querySelectorAll('button').forEach(function(b){b.classList.remove('active','y','n');});
btn.classList.add('active',val);
var item=document.getElementById('e'+idx);
item.className='elig-item'+(val==='y'?' pass':' fail');
}

function toggleBlk(el){el.classList.toggle('active');var none=document.querySelector('.blk-chip[data-val="none"]');if(el.getAttribute('data-val')!=='none'&&none)none.classList.remove('active');}
function clearBlk(el){document.querySelectorAll('.blk-chip').forEach(function(c){c.classList.remove('active');});el.classList.add('active');}

function getVal(id){var g=document.getElementById(id);var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function pn(id){var el=document.getElementById(id);return el?parseInt(el.value.replace(/[^0-9]/g,''))||0:0;}
function fmtNum(el){var v=el.value.replace(/[^0-9]/g,'');if(v)el.value=parseInt(v).toLocaleString('en-IN');}
function fmt(n){return'\u20B9'+n.toLocaleString('en-IN');}
function onCatChange(){}

function resetForm(){
document.getElementById('inGst').value='';
document.getElementById('inCategory').value='goods';
eligAnswers=[true,true,true,true,true,true];
for(var i=0;i<6;i++){var item=document.getElementById('e'+i);item.className='elig-item pass';var grp=item.querySelector('.elig-yn');grp.querySelectorAll('button').forEach(function(b,j){b.classList.remove('active','y','n');if(j===0)b.classList.add('active','y');});}
document.querySelectorAll('.blk-chip').forEach(function(c){c.classList.remove('active');});
document.getElementById('resPanel').classList.remove('visible');
}

function checkITC(){
var gst=pn('inGst');
if(!gst){alert('Please enter the GST amount paid on the purchase.');return;}
var cat=document.getElementById('inCategory').value;

var failedConds=[];
var condLabels=['GST Registration','Valid Tax Invoice','Receipt of Goods/Services','Invoice in GSTR-2B','Business Purpose Use','180-Day Payment Rule'];
eligAnswers.forEach(function(v,i){if(!v)failedConds.push(condLabels[i]);});

var blockedItems=[];
document.querySelectorAll('.blk-chip.active').forEach(function(c){var v=c.getAttribute('data-val');if(v!=='none')blockedItems.push(c.textContent.split('\n')[0].trim());});

var allPass=failedConds.length===0;
var noBlock=blockedItems.length===0;
var eligible=allPass&&noBlock;
var eligibleAmt=eligible?gst:0;

var h='';
// Hero
if(eligible){
h+='<div class="res-hero"><div class="res-box eligible"><div class="rb-label">ITC Eligibility</div><div class="rb-value">\u2714 ELIGIBLE</div><div class="rb-sub">All conditions met, no blocked credits</div></div><div class="res-box rate"><div class="rb-label">Claimable ITC</div><div class="rb-value">'+fmt(gst)+'</div><div class="rb-sub">Claim in GSTR-3B Table 4A</div></div></div>';
}else{
h+='<div class="res-hero"><div class="res-box ineligible"><div class="rb-label">ITC Eligibility</div><div class="rb-value">\u2718 NOT ELIGIBLE</div><div class="rb-sub">'+(failedConds.length>0?failedConds.length+' condition(s) failed':'')+(failedConds.length>0&&blockedItems.length>0?' + ':'')+(blockedItems.length>0?'Blocked under Sec 17(5)':'')+'</div></div><div class="res-box" style="background:linear-gradient(135deg,#dc2626,#ef4444);color:#fff"><div class="rb-label">ITC Lost</div><div class="rb-value">'+fmt(gst)+'</div><div class="rb-sub">Cannot be claimed or carried forward</div></div></div>';
}

// Conditions checklist
h+='<div class="res-card"><div class="res-card-hd"><h3>Section 16 Conditions</h3><span class="res-badge '+(allPass?'pass':'fail')+'">'+(allPass?'All Passed':failedConds.length+' Failed')+'</span></div><div class="res-card-bd"><ul class="chk-list">';
condLabels.forEach(function(l,i){
var p=eligAnswers[i];
h+='<li><span class="chk-icon '+(p?'pass':'fail')+'">'+(p?'\u2714':'\u2718')+'</span><div><strong>'+l+'</strong>'+(p?'':' \u2014 <span style="color:var(--danger)">Not met</span>')+'</div></li>';
});
h+='</ul></div></div>';

// Blocked credits
h+='<div class="res-card"><div class="res-card-hd"><h3>Section 17(5) Blocked Credits</h3><span class="res-badge '+(noBlock?'pass':'fail')+'">'+(noBlock?'No Block':blockedItems.length+' Blocked')+'</span></div><div class="res-card-bd">';
if(noBlock){h+='<div style="color:var(--success);font-size:14px;font-weight:600">\u2714 This purchase is not in any blocked credit category.</div>';}
else{h+='<ul class="chk-list">';blockedItems.forEach(function(b){h+='<li><span class="chk-icon fail">\u2718</span><div><strong>'+b+'</strong> \u2014 <span style="color:var(--danger)">ITC blocked under Section 17(5)</span></div></li>';});h+='</ul>';}
h+='</div></div>';

// Recommendation
if(eligible){
h+='<div class="callout green"><p><strong>Action:</strong> Claim '+fmt(gst)+' as ITC in <strong>GSTR-3B Table 4A(5)</strong> for the relevant tax period. Ensure the invoice continues to appear in GSTR-2B. If using IGST credit, utilise in the order: IGST liability \u2192 CGST \u2192 SGST as per Section 49.</p></div>';
}else{
if(!allPass&&eligAnswers[3]===false){
h+='<div class="callout warn"><p><strong>Fixable:</strong> Invoice not in GSTR-2B. Follow up with your supplier to file their GSTR-1 for this period. Once filed, the invoice will appear in your next GSTR-2B and you can claim ITC then (within the time limit).</p></div>';
}
if(!allPass&&eligAnswers[5]===false){
h+='<div class="callout warn"><p><strong>Fixable:</strong> Payment not made within 180 days. Pay the supplier immediately. Once paid, the reversed ITC can be reclaimed in the GSTR-3B of the month in which payment is made.</p></div>';
}
if(!noBlock){
h+='<div class="callout" style="background:#FEF2F2;border-left-color:var(--danger)"><p style="color:#991B1B"><strong>Not Fixable:</strong> This purchase falls under Section 17(5) blocked credits. ITC of '+fmt(gst)+' cannot be claimed under any circumstance. Treat the full GST amount as a business cost.</p></div>';
}
}

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20ITC%20Eligibility%20Checker.%20I%20need%20help%20with%20ITC%20claims.%20Please%20connect%20me%20with%20a%20CA." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/gstr-2a-vs-3b-reconciliation" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg> Reconciliation Tool</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What are the conditions to claim ITC under GST?",a:"Under Section 16: GST registered, valid tax invoice, goods/services received, invoice in GSTR-2B, business purpose use, and payment within 180 days. All must be met simultaneously."},
{q:"What is blocked credit under Section 17(5)?",a:"Specific items where ITC is permanently blocked: motor vehicles (personal), food/beverages, beauty/health services, club memberships, life/health insurance (unless mandated), construction of immovable property (own account), and goods lost/destroyed/gifted."},
{q:"Can ITC be claimed on motor vehicles?",a:"Blocked for personal use. Exceptions: vehicles for resale, commercial transport (seating \u226413), driving training, and vehicles used for taxable supply of transportation services."},
{q:"What is the time limit to claim ITC?",a:"Earlier of GSTR-3B due date for September of next FY, or GSTR-9 filing date. For FY 2025-26, deadline is September 2026 GSTR-3B. Missing this = permanent ITC loss."},
{q:"Can ITC be claimed if invoice is not in GSTR-2B?",a:"No. From January 2022, ITC is 100% linked to GSTR-2B per Rule 36(4). No provisional ITC allowed. Follow up with suppliers to file GSTR-1 so invoices appear in next GSTR-2B."},
{q:"Is ITC available on construction?",a:"Blocked for construction of immovable property on own account. However, ITC is available for construction businesses building for sale. Plant and machinery is explicitly excluded from the block."},
{q:"What if supplier doesn\u2019t pay GST to government?",a:"Under Rule 37A, if supplier fails to pay, recipient must reverse ITC proportionally. GSTR-2B flags such invoices. Monitor supplier compliance regularly."},
{q:"Can composition dealers claim ITC?",a:"No. Composition dealers cannot claim any ITC. All tax is paid from cash ledger only. When transitioning to regular scheme, ITC on closing stock can be claimed via GST ITC-01."},
{q:"Is ITC available on employee expenses?",a:"Food, catering, beauty, health, insurance for employees is blocked unless obligatory under law or the same is an outward taxable supply. Travel expenses (GTA) may be eligible if for business."},
{q:"What is the 180-day payment rule?",a:"Under Rule 37, if supplier is not paid within 180 days, ITC must be reversed with 18% interest. Reversed ITC can be reclaimed once payment is made."},
{q:"How is ITC reversed for exempt supplies?",a:"Rule 42: common credit is apportioned. ITC for exempt supplies = Common ITC \u00D7 (exempt turnover / total turnover). Must be reversed monthly."},
{q:"Can ITC be claimed on gifts?",a:"No. Goods lost, stolen, destroyed, or given as gifts/free samples are blocked under Sec 17(5)(h). If ITC was claimed, it must be reversed."},
{q:"What documents are required for ITC?",a:"Tax invoice with valid GSTIN, debit note, bill of entry (imports), ISD invoice, self-invoice (RCM). Must contain all fields per Rule 46 of CGST Rules."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))checkITC();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>

@endsection