@extends('layouts.app')
@section('meta')
    <title>Import Duty Calculator | India Customs Duty &amp; BCD</title>
    <meta name="description" content="Import duty calculator for India: compute BCD, Social Welfare Surcharge, IGST and total landed cost on imports using HSN-based rates. Free, instant. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/import-duty-calculator">
    <meta property="og:title" content="Import Duty Calculator &mdash; Customs Duty Tool 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate import duty to India. BCD, Social Welfare Surcharge, IGST, and landed cost.">
    <meta property="og:type" content="website"><meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/import-duty-calculator">
    <meta property="og:image" content="/tools/og-import-duty-calculator.png">
    <meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Import Duty Calculator &mdash; Free Customs Duty 2026">
    <meta name="twitter:description" content="Calculate BCD, SWS, IGST and total landed cost for India imports.">
@endsection

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Import Duty Customs Duty Calculator India 2026","description":"Free online calculator to compute total import duty for goods imported into India. Enter CIF value, BCD rate, and IGST rate to get Basic Customs Duty, Social Welfare Surcharge, IGST, total duty, and landed cost. Supports common product categories with pre-set BCD rates.","url":"/tools/import-duty-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-07","dateModified":"2026-03-07","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Import Duty Calculator","item":"/tools/import-duty-calculator"}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is customs duty in India?","acceptedAnswer":{"@type":"Answer","text":"Customs duty is a tax levied by the Indian government on goods imported into or exported from the country. It is governed by the Customs Act 1962 and administered by the Central Board of Indirect Taxes and Customs (CBIC). Import duty includes Basic Customs Duty (BCD), Social Welfare Surcharge, IGST, and sometimes Anti-Dumping or Safeguard duties."}},{"@type":"Question","name":"How is import duty calculated?","acceptedAnswer":{"@type":"Answer","text":"Import duty is calculated on the assessable value which is CIF value (Cost Insurance Freight) in Indian Rupees. BCD is applied first, then Social Welfare Surcharge at 10 percent of BCD, then IGST on the total of assessable value plus BCD plus SWS. The landed cost equals assessable value plus all duties combined."}},{"@type":"Question","name":"What is Basic Customs Duty (BCD)?","acceptedAnswer":{"@type":"Answer","text":"Basic Customs Duty is the primary import tax specified in the Customs Tariff Act 1975 based on HSN classification. Rates range from 0 to 150 percent depending on the product. Most industrial goods attract 7.5 to 15 percent BCD. Electronics and machinery often have reduced rates under IT Agreement concessions."}},{"@type":"Question","name":"What is Social Welfare Surcharge?","acceptedAnswer":{"@type":"Answer","text":"Social Welfare Surcharge (SWS) is levied at 10 percent of the Basic Customs Duty amount. It replaced the earlier Education Cess and Secondary Higher Education Cess from February 2018. SWS applies to all imported goods regardless of BCD rate. It is a non-creditable tax that adds to the import cost."}},{"@type":"Question","name":"What is IGST on imports?","acceptedAnswer":{"@type":"Answer","text":"Integrated GST is levied on imports under Section 3(7) of the Customs Tariff Act. IGST rate is same as applicable GST rate for the goods domestically, typically 5, 12, 18, or 28 percent. IGST is calculated on assessable value plus BCD plus SWS. IGST paid on imports can be claimed as Input Tax Credit."}},{"@type":"Question","name":"What is assessable value for customs?","acceptedAnswer":{"@type":"Answer","text":"Assessable value is typically the CIF value converted to Indian Rupees at the exchange rate notified by CBIC. CIF includes product cost, insurance (actual or 1.125 percent of FOB), and freight charges. If CIF is not available, customs may determine value under Valuation Rules using transaction value method."}},{"@type":"Question","name":"What is the HSN code for customs?","acceptedAnswer":{"@type":"Answer","text":"HSN (Harmonized System of Nomenclature) is an internationally standardized system of names and numbers to classify traded products. India uses 8-digit HSN codes for customs classification. The first 6 digits are international, last 2 are India-specific. Correct HSN determines the applicable BCD rate."}},{"@type":"Question","name":"Are there any duty exemptions?","acceptedAnswer":{"@type":"Answer","text":"Yes. Goods under Free Trade Agreements (FTA) may attract reduced or zero BCD. Advance Authorisation and EPCG schemes allow duty-free imports for exporters. Goods for SEZ units are exempt. Certain essential commodities like life-saving drugs and fertilisers have zero or reduced BCD. Check CBIC notifications for current exemptions."}},{"@type":"Question","name":"What is Anti-Dumping Duty?","acceptedAnswer":{"@type":"Answer","text":"Anti-Dumping Duty is an additional levy on imported goods sold at prices below their normal value in the exporting country. It protects domestic industries from unfair trade practices. DGTR investigates and recommends duties which can be significant, sometimes 20 to 200 percent of CIF value for specific products."}},{"@type":"Question","name":"Can I claim ITC on IGST paid on imports?","acceptedAnswer":{"@type":"Answer","text":"Yes IGST paid on imports is fully eligible as Input Tax Credit under GST law. The Bill of Entry serves as the document for claiming ITC. Credit appears in GSTR-2B after customs data is transmitted. This makes IGST a pass-through cost for GST-registered businesses, unlike BCD which is a permanent cost."}},{"@type":"Question","name":"What is the difference between FOB and CIF?","acceptedAnswer":{"@type":"Answer","text":"FOB (Free on Board) includes only the cost of goods and loading at the origin port. CIF (Cost Insurance Freight) includes FOB plus insurance and shipping freight to the Indian port. Indian customs uses CIF value as the assessable value. If only FOB is known add insurance at 1.125 percent and freight at 20 percent of FOB."}},{"@type":"Question","name":"What are the customs duty payment methods?","acceptedAnswer":{"@type":"Answer","text":"Customs duty is paid electronically through ICEGATE portal using net banking, NEFT, or RTGS. Payment is made at the time of filing the Bill of Entry before goods are released. Authorized Economic Operators get deferred payment facility. Late payment attracts interest at 15 percent per annum from the due date."}},{"@type":"Question","name":"What is the current customs duty on electronics?","acceptedAnswer":{"@type":"Answer","text":"Most electronics like laptops and mobile phones attract 0 to 15 percent BCD under the IT Agreement. Mobile phones have 20 percent BCD since 2018 under the Phased Manufacturing Programme. Fully built computers attract 0 percent BCD. Components and parts often have lower rates to encourage domestic assembly."}}]}</script>
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


.tool-hero{display:grid;grid-template-columns:1fr 1fr 1fr 1fr;gap:14px;margin:20px 0}
.tool-box{border-radius:var(--radius);padding:18px;text-align:center}
.tool-box .tb-label{font-size:10px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.tool-box .tb-value{font-size:clamp(1rem,2vw,1.5rem);font-weight:800;margin-top:4px}
.tool-box .tb-sub{font-size:10px;opacity:.8;margin-top:2px}
.tool-box.b1{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.tool-box.b2{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.tool-box.b3{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.tool-box.b4{background:linear-gradient(135deg,#B45309,#F59E0B);color:#fff}
.entity-chips{display:grid;grid-template-columns:repeat(auto-fill,minmax(130px,1fr));gap:8px;margin-bottom:18px}
.entity-chip{padding:10px 12px;border:2px solid var(--border);border-radius:var(--radius);font-size:13px;font-weight:600;color:var(--text-muted);background:var(--card);cursor:pointer;text-align:center;transition:all 0.25s;line-height:1.3}
.entity-chip:hover{border-color:var(--primary-light);color:var(--primary)}
.entity-chip.active{border-color:var(--primary);color:var(--primary);background:rgba(27,77,62,0.04);box-shadow:var(--shadow-sm)}
.entity-chip small{display:block;font-size:10px;font-weight:400;color:inherit;opacity:0.7;margin-top:2px}
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:120px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
@media(max-width:700px){.tool-hero{grid-template-columns:1fr 1fr}}
@media(max-width:480px){.tool-hero{grid-template-columns:1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">Duty Calculator</a><a href="#how-to-use">How to Use</a><a href="#formula">Formula</a><a href="#rates">Common Rates</a><a href="#exemptions">Exemptions</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Import Duty Calculator</nav> --}}
<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Import Duty Calculator &mdash; <span>Customs Duty</span> BCD, SWS &amp; IGST</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Calculate the total customs duty and landed cost for goods imported into India. Enter CIF value, select product category (auto-sets BCD rate) or enter custom BCD rate, choose IGST rate. Get breakup of Basic Customs Duty, Social Welfare Surcharge (10% of BCD), IGST, total duty payable, and final landed cost. IGST is claimable as ITC for GST-registered importers.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate Import Duty</h2>
    <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="form-group"><label>Product Category</label></div>
    <div class="entity-chips" id="prodCat">
        <div class="entity-chip active" data-val="general" data-bcd="10" onclick="setCat(this)">General Goods<small>10% BCD</small></div>
        <div class="entity-chip" data-val="mobile" data-bcd="20" onclick="setCat(this)">Mobile Phones<small>20% BCD</small></div>
        <div class="entity-chip" data-val="electronics" data-bcd="0" onclick="setCat(this)">Laptops / PCs<small>0% BCD (ITA)</small></div>
        <div class="entity-chip" data-val="machinery" data-bcd="7.5" onclick="setCat(this)">Machinery<small>7.5% BCD</small></div>
        <div class="entity-chip" data-val="auto" data-bcd="60" onclick="setCat(this)">Automobiles<small>60% BCD</small></div>
        <div class="entity-chip" data-val="gold" data-bcd="15" onclick="setCat(this)">Gold / Silver<small>15% BCD</small></div>
        <div class="entity-chip" data-val="textile" data-bcd="20" onclick="setCat(this)">Textiles<small>20% BCD</small></div>
        <div class="entity-chip" data-val="custom" data-bcd="" onclick="setCat(this)">Custom Rate<small>Enter manually</small></div>
    </div>
    <div class="slider-group"><label>CIF Value (&#8377;)</label><div class="slider-row"><input type="range" id="sliderCIF" min="1000" max="50000000" step="1000" value="500000" oninput="syncS('cif')"><input type="text" class="slider-val" id="valCIF" value="5,00,000" oninput="syncI('cif')"></div><div style="font-size:12px;color:var(--text-muted);margin-top:4px">Cost + Insurance + Freight in INR</div></div>
    <div class="calc-row">
        <div class="form-group"><label>BCD Rate (%)</label><input type="number" id="inBCD" value="10" min="0" max="150" step="0.5" style="max-width:120px"></div>
        <div class="form-group"><label>IGST Rate (%)</label><select id="inIGST"><option value="0">0%</option><option value="5">5%</option><option value="12">12%</option><option value="18" selected>18%</option><option value="28">28%</option></select></div>
    </div>
    <div class="form-group"><label>Anti-Dumping / Safeguard Duty (&#8377;, if any)</label><input type="number" id="inADD" value="0" min="0" style="max-width:160px"></div>
    <button class="btn-calculate" onclick="calcDuty()">Calculate Import Duty</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use the Import Duty Calculator</h2><p>This tool computes customs duty as per the <a href="https://www.cbic.gov.in/" target="_blank" rel="noopener">Customs Act 1962</a> administered by CBIC. All duty calculations follow the standard assessment method used at Indian ports.</p><h3>Step 1 &mdash; Select Product Category</h3><p>Choose from 7 pre-set categories that auto-fill the BCD rate, or select Custom to enter any rate. Categories cover the most common import items. For exact HSN-specific rates, check the <a href="https://www.icegate.gov.in/" target="_blank" rel="noopener">ICEGATE</a> portal.</p><h3>Step 2 &mdash; Enter CIF Value</h3><p>Enter the CIF (Cost + Insurance + Freight) value in Indian Rupees. If you have FOB value, add insurance (1.125% of FOB) and freight (20% of FOB for sea, actual for air) to get CIF.</p><h3>Step 3 &mdash; Set IGST and Anti-Dumping</h3><p>Select the applicable IGST rate (same as domestic GST rate for the goods). Add Anti-Dumping or Safeguard Duty if applicable to your product.</p><div class="callout"><p><strong>CA Tip:</strong> IGST paid on imports is fully claimable as ITC under GST. This makes IGST a pass-through cost for registered importers. Only BCD and SWS are permanent import costs. Always verify HSN classification with the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> or a customs specialist before importing.</p></div></section>

<section class="content-section" id="formula"><h2>Import Duty Calculation Formula</h2><div class="formula-box"><span class="label">Step-by-step calculation:</span><br>1. Basic Customs Duty (BCD) = CIF Value &times; BCD Rate%<br>2. Social Welfare Surcharge (SWS) = BCD &times; 10%<br>3. Value for IGST = CIF + BCD + SWS + Anti-Dumping<br>4. IGST = Value for IGST &times; IGST Rate%<br>5. Total Duty = BCD + SWS + IGST + Anti-Dumping<br>6. Landed Cost = CIF Value + Total Duty<br><br><span class="label">Example (&#8377;5L machinery, 7.5% BCD, 18% IGST):</span><br>BCD = 5,00,000 &times; 7.5% = &#8377;37,500<br>SWS = 37,500 &times; 10% = &#8377;3,750<br>IGST base = 5,00,000 + 37,500 + 3,750 = &#8377;5,41,250<br>IGST = 5,41,250 &times; 18% = &#8377;97,425<br>Total Duty = &#8377;1,38,675 | Landed Cost = <span class="label">&#8377;6,38,675</span></div></section>

<section class="content-section" id="rates"><h2>Common BCD Rates in India &mdash; 2026</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Product Category</th><th>BCD Rate</th><th>IGST Rate</th><th>Notes</th></tr></thead><tbody>
<tr><td>Laptops / PCs</td><td>0%</td><td>18%</td><td>ITA concession</td></tr>
<tr><td>Mobile Phones</td><td>20%</td><td>18%</td><td>Phased Manufacturing</td></tr>
<tr><td>Machinery (General)</td><td>7.5%</td><td>18%</td><td>Capital goods</td></tr>
<tr><td>Automobiles (CBU)</td><td>60&ndash;100%</td><td>28%+cess</td><td>Highest duty category</td></tr>
<tr><td>Gold / Silver</td><td>15%</td><td>3%</td><td>Bullion rate</td></tr>
<tr><td>Textiles / Garments</td><td>20%</td><td>5&ndash;12%</td><td>Varies by product</td></tr>
<tr><td>Chemicals (Industrial)</td><td>7.5&ndash;10%</td><td>18%</td><td>HSN-specific</td></tr>
<tr><td>Medical Devices</td><td>0&ndash;7.5%</td><td>12%</td><td>Exemption for life-saving</td></tr>
<tr><td>Solar Panels</td><td>40%</td><td>12%</td><td>DCR incentive</td></tr>
<tr><td>Food / Agri Products</td><td>30&ndash;50%</td><td>5&ndash;18%</td><td>Protected sector</td></tr>
</tbody></table></div></section>

<section class="content-section" id="exemptions"><h2>Duty Exemptions &amp; Concessions</h2><ul><li><strong>Free Trade Agreements (FTA):</strong> Reduced or zero BCD for imports from ASEAN, Japan, South Korea, and other FTA partners with valid Certificate of Origin.</li><li><strong>Advance Authorisation:</strong> Duty-free import of raw materials for exporters under DGFT scheme. Must export finished goods within 18 months.</li><li><strong>EPCG Scheme:</strong> Zero BCD on capital goods import with export obligation of 6x duty saved over 6 years.</li><li><strong>SEZ / EOU:</strong> Full duty exemption for units in Special Economic Zones and Export Oriented Units.</li><li><strong>Essential goods:</strong> Life-saving drugs, fertilisers, and defence equipment often have reduced or zero BCD via CBIC notifications.</li></ul><div class="callout green"><p><strong>Expert Tip:</strong> Always check the latest <a href="https://www.cbic.gov.in/" target="_blank" rel="noopener">CBIC notifications</a> before importing. Budget announcements frequently change BCD rates. FTA benefits require proper Certificate of Origin &mdash; without it, full duty applies. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20import%20duty%20and%20customs%20clearance." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need import/export help?</strong> Our CAs handle customs duty advisory, IEC registration, IGST ITC on imports, and GST compliance for importers. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20import%20duty%20and%20customs." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions &mdash; Import Duty</h2><div id="faqList"></div></section>
</div>
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need Import Help?</h3><p>Our CAs handle customs duty, IEC registration, IGST ITC &amp; import compliance.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20import%20duty%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a><a href="/gst-return-filing" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting <span class="arrow">&rarr;</span></a><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a><a href="/tools/hsn-sac-finder" class="sidebar-link">HSN/SAC Finder <span class="arrow">&rarr;</span></a><a href="/tools/tds-rate-finder" class="sidebar-link">TDS Rate Finder <span class="arrow">&rarr;</span></a><a href="/tools/gst-rate-finder" class="sidebar-link">GST Rate Finder <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside>
</div>

<script>
function setCat(el){document.querySelectorAll('.entity-chip').forEach(function(c){c.classList.remove('active');});el.classList.add('active');var bcd=el.getAttribute('data-bcd');if(bcd)document.getElementById('inBCD').value=bcd;}
function syncS(t){if(t==='cif'){document.getElementById('valCIF').value=parseInt(document.getElementById('sliderCIF').value).toLocaleString('en-IN');}}
function syncI(t){if(t==='cif'){var v=parseInt(document.getElementById('valCIF').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderCIF').value=v;document.getElementById('valCIF').value=v?v.toLocaleString('en-IN'):'';}}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}
function resetForm(){document.querySelectorAll('.entity-chip').forEach(function(c,i){c.classList.toggle('active',i===0);});document.getElementById('sliderCIF').value=500000;document.getElementById('valCIF').value='5,00,000';document.getElementById('inBCD').value=10;document.getElementById('inIGST').value='18';document.getElementById('inADD').value=0;document.getElementById('resPanel').classList.remove('visible');}
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcDuty();});

function calcDuty(){
var cif=parseInt(document.getElementById('valCIF').value.replace(/[^0-9]/g,''))||0;
var bcdRate=parseFloat(document.getElementById('inBCD').value)||0;
var igstRate=parseFloat(document.getElementById('inIGST').value)||0;
var addDuty=parseFloat(document.getElementById('inADD').value)||0;
if(!cif){alert('Please enter CIF value.');return;}

var bcd=Math.round(cif*bcdRate/100);
var sws=Math.round(bcd*0.10);
var igstBase=cif+bcd+sws+addDuty;
var igst=Math.round(igstBase*igstRate/100);
var totalDuty=bcd+sws+igst+Math.round(addDuty);
var landedCost=cif+totalDuty;
var dutyPct=cif>0?((totalDuty/cif)*100).toFixed(1):0;

var h='<div class="tool-hero"><div class="tool-box b1"><div class="tb-label">Total Duty</div><div class="tb-value">'+fmtL(totalDuty)+'</div><div class="tb-sub">'+dutyPct+'% of CIF</div></div><div class="tool-box b2"><div class="tb-label">Landed Cost</div><div class="tb-value">'+fmtL(landedCost)+'</div><div class="tb-sub">CIF + All Duties</div></div><div class="tool-box b3"><div class="tb-label">IGST (ITC eligible)</div><div class="tb-value">'+fmtL(igst)+'</div><div class="tb-sub">Claimable as credit</div></div><div class="tool-box b4"><div class="tb-label">Permanent Cost</div><div class="tb-value">'+fmtL(bcd+sws+Math.round(addDuty))+'</div><div class="tb-sub">BCD + SWS + ADD</div></div></div>';

h+='<div class="res-card"><div class="res-card-hd"><h3>Duty Breakup</h3><span class="res-badge info">Step-by-step</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>CIF Value (Assessable Value)</td><td><strong>'+fmt(cif)+'</strong></td><td></td></tr>';
h+='<tr><td>Basic Customs Duty (BCD) @ '+bcdRate+'%</td><td>'+fmt(bcd)+'</td><td style="font-size:12px;color:var(--text-muted)">'+fmt(cif)+' \u00D7 '+bcdRate+'%</td></tr>';
h+='<tr><td>Social Welfare Surcharge @ 10% of BCD</td><td>'+fmt(sws)+'</td><td style="font-size:12px;color:var(--text-muted)">'+fmt(bcd)+' \u00D7 10%</td></tr>';
if(addDuty>0)h+='<tr><td>Anti-Dumping / Safeguard Duty</td><td>'+fmt(addDuty)+'</td><td></td></tr>';
h+='<tr style="background:var(--surface)"><td>Value for IGST</td><td>'+fmt(igstBase)+'</td><td style="font-size:12px;color:var(--text-muted)">CIF+BCD+SWS'+(addDuty>0?'+ADD':'')+'</td></tr>';
h+='<tr><td>IGST @ '+igstRate+'%</td><td>'+fmt(igst)+'</td><td style="font-size:12px;color:var(--text-muted)">'+fmt(igstBase)+' \u00D7 '+igstRate+'%</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Total Duty Payable</strong></td><td style="font-size:16px;color:var(--primary)"><strong>'+fmtL(totalDuty)+'</strong></td><td></td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Landed Cost (CIF + Duty)</strong></td><td style="font-size:16px;color:var(--primary)"><strong>'+fmtL(landedCost)+'</strong></td><td></td></tr>';
h+='</table></div></div>';

// ITC callout
if(igst>0){h+='<div class="callout green"><p style="color:#166534"><strong>ITC Benefit:</strong> IGST of '+fmt(igst)+' is fully claimable as Input Tax Credit under GST. Your effective permanent import cost is only '+fmt(bcd+sws+Math.round(addDuty))+' (BCD + SWS'+(addDuty>0?' + Anti-Dumping':'')+'), which is '+((bcd+sws+Math.round(addDuty))/cif*100).toFixed(1)+'% of CIF value.</p></div>';}
else{h+='<div class="callout"><p><strong>No IGST:</strong> At 0% IGST, total duty is '+fmt(totalDuty)+' (all permanent cost, no ITC benefit).</p></div>';}

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20Import%20Duty%20Calculator.%20I%20need%20help%20with%20customs%20and%20import%20compliance." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/gst-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> GST Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is customs duty in India?",a:"Customs duty is a tax levied by the Indian government on goods imported into or exported from the country. It is governed by the Customs Act 1962 and administered by the Central Board of Indirect Taxes and Customs (CBIC). Import duty includes Basic Customs Duty (BCD), Social Welfare Surcharge, IGST, and sometimes Anti-Dumping or Safeguard duties."},
{q:"How is import duty calculated?",a:"Import duty is calculated on the assessable value which is CIF value (Cost Insurance Freight) in Indian Rupees. BCD is applied first, then Social Welfare Surcharge at 10 percent of BCD, then IGST on the total of assessable value plus BCD plus SWS. The landed cost equals assessable value plus all duties combined."},
{q:"What is Basic Customs Duty (BCD)?",a:"Basic Customs Duty is the primary import tax specified in the Customs Tariff Act 1975 based on HSN classification. Rates range from 0 to 150 percent depending on the product. Most industrial goods attract 7.5 to 15 percent BCD. Electronics and machinery often have reduced rates under IT Agreement concessions."},
{q:"What is Social Welfare Surcharge?",a:"Social Welfare Surcharge (SWS) is levied at 10 percent of the Basic Customs Duty amount. It replaced the earlier Education Cess and Secondary Higher Education Cess from February 2018. SWS applies to all imported goods regardless of BCD rate. It is a non-creditable tax that adds to the import cost."},
{q:"What is IGST on imports?",a:"Integrated GST is levied on imports under Section 3(7) of the Customs Tariff Act. IGST rate is same as applicable GST rate for the goods domestically, typically 5, 12, 18, or 28 percent. IGST is calculated on assessable value plus BCD plus SWS. IGST paid on imports can be claimed as Input Tax Credit."},
{q:"What is assessable value for customs?",a:"Assessable value is typically the CIF value converted to Indian Rupees at the exchange rate notified by CBIC. CIF includes product cost, insurance (actual or 1.125 percent of FOB), and freight charges. If CIF is not available, customs may determine value under Valuation Rules using transaction value method."},
{q:"What is the HSN code for customs?",a:"HSN (Harmonized System of Nomenclature) is an internationally standardized system of names and numbers to classify traded products. India uses 8-digit HSN codes for customs classification. The first 6 digits are international, last 2 are India-specific. Correct HSN determines the applicable BCD rate."},
{q:"Are there any duty exemptions?",a:"Yes. Goods under Free Trade Agreements (FTA) may attract reduced or zero BCD. Advance Authorisation and EPCG schemes allow duty-free imports for exporters. Goods for SEZ units are exempt. Certain essential commodities like life-saving drugs and fertilisers have zero or reduced BCD. Check CBIC notifications for current exemptions."},
{q:"What is Anti-Dumping Duty?",a:"Anti-Dumping Duty is an additional levy on imported goods sold at prices below their normal value in the exporting country. It protects domestic industries from unfair trade practices. DGTR investigates and recommends duties which can be significant, sometimes 20 to 200 percent of CIF value for specific products."},
{q:"Can I claim ITC on IGST paid on imports?",a:"Yes IGST paid on imports is fully eligible as Input Tax Credit under GST law. The Bill of Entry serves as the document for claiming ITC. Credit appears in GSTR-2B after customs data is transmitted. This makes IGST a pass-through cost for GST-registered businesses, unlike BCD which is a permanent cost."},
{q:"What is the difference between FOB and CIF?",a:"FOB (Free on Board) includes only the cost of goods and loading at the origin port. CIF (Cost Insurance Freight) includes FOB plus insurance and shipping freight to the Indian port. Indian customs uses CIF value as the assessable value. If only FOB is known add insurance at 1.125 percent and freight at 20 percent of FOB."},
{q:"What are the customs duty payment methods?",a:"Customs duty is paid electronically through ICEGATE portal using net banking, NEFT, or RTGS. Payment is made at the time of filing the Bill of Entry before goods are released. Authorized Economic Operators get deferred payment facility. Late payment attracts interest at 15 percent per annum from the due date."},
{q:"What is the current customs duty on electronics?",a:"Most electronics like laptops and mobile phones attract 0 to 15 percent BCD under the IT Agreement. Mobile phones have 20 percent BCD since 2018 under the Phased Manufacturing Programme. Fully built computers attract 0 percent BCD. Components and parts often have lower rates to encourage domestic assembly."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>

@endsection