@extends('layouts.app')
@section('meta')
    <title>Depreciation Calculator | Income Tax Act WDV & SLM</title>
    <meta name="description" content="Free depreciation calculator under the Income Tax Act: WDV and SLM methods with asset-wise block rates, year-wise schedule and tax savings. Calculate free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/depreciation-calculator">
    <meta property="og:title" content="Depreciation Calculator — IT Act WDV & SLM 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate depreciation under Income Tax Act. WDV and SLM methods with asset-wise rates and tax savings.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/depreciation-calculator">
    <meta property="og:image" content="/tools/og-depreciation-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Depreciation Calculator — IT Act WDV & SLM 2026">
    <meta name="twitter:description" content="Calculate depreciation. WDV & SLM with asset-wise rates and year-wise schedule.">
    <meta name="twitter:image" content="/tools/og-depreciation-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"Depreciation Calculator - Income Tax Act WDV and SLM India 2026","description":"Free online depreciation calculator under Income Tax Act 1961. Calculate Written Down Value and Straight Line Method depreciation for buildings, plant and machinery, furniture, vehicles, computers, and intangible assets. Shows year-wise depreciation schedule, accumulated depreciation, closing WDV, and tax savings at applicable slab rate.","url":"/tools/depreciation-calculator","applicationCategory":"FinanceApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Depreciation Calculator","item":"/tools/depreciation-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What are the depreciation rates under Income Tax Act?","acceptedAnswer":{"@type":"Answer","text":"Key WDV rates under IT Act: Buildings residential 5 percent, buildings non-residential 10 percent, plant and machinery general 15 percent, motor vehicles 15 percent, computers and software 40 percent, furniture and fittings 10 percent, intangible assets 25 percent. First year gets 50 percent if asset used for less than 180 days."}},{"@type":"Question","name":"What is WDV method of depreciation?","acceptedAnswer":{"@type":"Answer","text":"Written Down Value method calculates depreciation on the reducing balance each year. Year 1 depreciation is applied on cost, year 2 on cost minus year 1 depreciation, and so on. The asset never reaches zero but approaches it. WDV is the mandatory method under Income Tax Act for computing taxable depreciation."}},{"@type":"Question","name":"What is the half-year rule for depreciation?","acceptedAnswer":{"@type":"Answer","text":"If an asset is put to use for less than 180 days in the year of acquisition, only 50 percent of the normal depreciation rate is allowed in that year. For example a computer purchased on 15th October used for only 168 days gets 20 percent depreciation instead of 40 percent in year 1. Full rate applies from year 2."}},{"@type":"Question","name":"What is the depreciation rate for computers?","acceptedAnswer":{"@type":"Answer","text":"Computers and computer software have a depreciation rate of 40 percent per annum under WDV method as per IT Act. This is the highest rate among common asset categories. With half-year rule the first year rate is 20 percent if used less than 180 days. A computer costing 1 lakh depreciates to about 7776 in 5 years."}},{"@type":"Question","name":"Can I claim depreciation on a car used for business?","acceptedAnswer":{"@type":"Answer","text":"Yes motor vehicles used for business qualify for 15 percent WDV depreciation under IT Act. For new vehicles costing above 10 lakh, actual cost is restricted for luxury vehicles. If used partly for personal purposes, proportionate depreciation must be reversed. Maintain a log book documenting business versus personal use."}},{"@type":"Question","name":"What is the difference between IT Act and Companies Act depreciation?","acceptedAnswer":{"@type":"Answer","text":"IT Act uses WDV method with specific rates for tax computation. Companies Act uses both WDV and SLM with useful life based rates per Schedule II for financial statements. IT Act depreciation reduces taxable income while Companies Act depreciation appears in financial statements. Both are calculated independently."}},{"@type":"Question","name":"What is additional depreciation for manufacturing businesses?","acceptedAnswer":{"@type":"Answer","text":"Manufacturing businesses that acquire new plant and machinery can claim additional depreciation of 20 percent of cost in the first year under Section 32(1)(iia). This is over and above normal depreciation. Total first year claim can be 35 percent (15 percent normal plus 20 percent additional) for new manufacturing assets."}},{"@type":"Question","name":"Is depreciation allowed on land?","acceptedAnswer":{"@type":"Answer","text":"No depreciation is not allowed on land under either IT Act or Companies Act. Land is considered a non-depreciating asset with unlimited useful life. Only the building constructed on land qualifies for depreciation. When purchasing property separate the land and building components in the purchase agreement for correct depreciation."}},{"@type":"Question","name":"What happens to depreciation when asset is sold?","acceptedAnswer":{"@type":"Answer","text":"When a depreciable asset is sold: if sale price exceeds WDV of the block the excess is taxable as short-term capital gain under Section 50. If sale price is less than WDV the difference is added back to the block for future depreciation. If the block becomes empty the entire WDV is treated as short-term capital gain or loss."}},{"@type":"Question","name":"Can depreciation create a business loss?","acceptedAnswer":{"@type":"Answer","text":"Yes unabsorbed depreciation can create or increase a business loss. Unabsorbed depreciation can be carried forward indefinitely until fully set off against future business income. This is different from business losses which can only be carried forward for 8 years. Depreciation is set off after current year business income is computed."}},{"@type":"Question","name":"What is block of assets concept?","acceptedAnswer":{"@type":"Answer","text":"Under IT Act, assets with the same depreciation rate are grouped into a block. Depreciation is calculated on the entire block not individual assets. When new assets are added their cost increases the block value. When assets are sold the sale proceeds reduce the block value. This simplifies depreciation computation significantly."}},{"@type":"Question","name":"What are intangible assets for depreciation?","acceptedAnswer":{"@type":"Answer","text":"Intangible assets eligible for 25 percent WDV depreciation include know-how patents copyrights trademarks licenses franchises or any other business or commercial rights of similar nature. Goodwill is no longer depreciable from FY 2020-21 onwards. Software licenses are treated as intangible assets at 25 percent not 40 percent."}},{"@type":"Question","name":"How does depreciation reduce tax liability?","acceptedAnswer":{"@type":"Answer","text":"Depreciation is a non-cash deduction from business income that reduces taxable profit. For a company at 25 percent tax rate every 1 lakh of depreciation saves 25000 in tax. For an individual at 30 percent bracket the saving is 30000 per lakh. This makes capital expenditure effectively cheaper by the tax rate percentage."}}]}
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


/* Tool-specific: Depreciation Calculator */
.dep-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.dep-box{border-radius:var(--radius);padding:20px;text-align:center}
.dep-box.annual{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.dep-box.wdv{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.dep-box.total{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.dep-box .db-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.dep-box .db-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.dep-box .db-sub{font-size:11px;opacity:.8;margin-top:2px}
.asset-chips{display:grid;grid-template-columns:repeat(auto-fill,minmax(150px,1fr));gap:8px;margin-bottom:18px}
.asset-chip{padding:10px 12px;border:2px solid var(--border);border-radius:var(--radius);font-size:13px;font-weight:600;color:var(--text-muted);background:var(--card);cursor:pointer;text-align:center;transition:all 0.25s;line-height:1.3}
.asset-chip:hover{border-color:var(--primary-light);color:var(--primary)}
.asset-chip.active{border-color:var(--primary);color:var(--primary);background:rgba(27,77,62,0.04);box-shadow:var(--shadow-sm)}
.asset-chip small{display:block;font-size:10px;font-weight:400;color:inherit;opacity:0.7;margin-top:2px}
.yr-table{max-height:450px;overflow-y:auto;margin-top:12px;border:1px solid var(--border);border-radius:var(--radius)}
.yr-table table{width:100%;border-collapse:collapse;font-size:13px}
.yr-table th{background:var(--primary-dark);color:#fff;padding:10px 12px;text-align:right;font-weight:600;font-size:11px;text-transform:uppercase;letter-spacing:.3px;position:sticky;top:0}
.yr-table th:first-child{text-align:center}
.yr-table td{padding:8px 12px;border-bottom:1px solid var(--border);text-align:right;font-family:var(--font-mono);font-size:12px}
.yr-table td:first-child{text-align:center;font-family:var(--font-body);font-weight:600}
.yr-table tr:nth-child(even){background:var(--surface)}
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:120px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
@media(max-width:600px){.dep-hero{grid-template-columns:1fr}.asset-chips{grid-template-columns:1fr 1fr}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#rates">Depreciation Rates</a><a href="#rules">Key Rules</a><a href="#tax">Tax Impact</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Depreciation Calculator</nav> --}}
<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Depreciation Calculator — <span>Income Tax Act</span> WDV & SLM Method</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Calculate depreciation under the Income Tax Act 1961 using WDV (Written Down Value) or SLM (Straight Line) method. Select your asset category (buildings, P&M, computers, vehicles, furniture, intangibles) — the tool auto-sets the correct IT Act rate. Get year-wise depreciation schedule, accumulated depreciation, closing WDV/book value, and tax savings. Supports the 180-day half-year rule for first-year assets.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate Depreciation</h2>
    <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="form-group"><label>Asset Category</label></div>
    <div class="asset-chips" id="assetType">
        <div class="asset-chip active" data-val="pm15" onclick="setAsset(this)">Plant & Machinery<small>15% WDV</small></div>
        <div class="asset-chip" data-val="comp40" onclick="setAsset(this)">Computers / Software<small>40% WDV</small></div>
        <div class="asset-chip" data-val="vehicle15" onclick="setAsset(this)">Motor Vehicles<small>15% WDV</small></div>
        <div class="asset-chip" data-val="bldg10" onclick="setAsset(this)">Building (Non-Res)<small>10% WDV</small></div>
        <div class="asset-chip" data-val="bldg5" onclick="setAsset(this)">Building (Residential)<small>5% WDV</small></div>
        <div class="asset-chip" data-val="furn10" onclick="setAsset(this)">Furniture & Fittings<small>10% WDV</small></div>
        <div class="asset-chip" data-val="intang25" onclick="setAsset(this)">Intangible Assets<small>25% WDV</small></div>
        <div class="asset-chip" data-val="custom" onclick="setAsset(this)">Custom Rate<small>Enter manually</small></div>
    </div>
    <div class="slider-group"><label>Asset Cost (&#8377;)</label><div class="slider-row"><input type="range" id="sliderCost" min="10000" max="100000000" step="10000" value="1000000" oninput="syncS('cost')"><input type="text" class="slider-val" id="valCost" value="10,00,000" oninput="syncI('cost')"></div></div>
    <div class="slider-group"><label>Depreciation Rate (% p.a.)</label><div class="slider-row"><input type="range" id="sliderRate" min="1" max="100" step="0.5" value="15" oninput="syncS('rate')"><input type="text" class="slider-val" id="valRate" value="15" style="min-width:80px" oninput="syncI('rate')"></div></div>
    <div class="calc-row">
        <div class="form-group"><label>Method</label><div class="toggle-group" id="method"><button type="button" class="toggle-btn active" data-val="wdv" onclick="setTg('method',this)">WDV<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">IT Act (mandatory)</small></button><button type="button" class="toggle-btn" data-val="slm" onclick="setTg('method',this)">SLM<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Companies Act</small></button></div></div>
        <div class="form-group"><label>Used for 180+ days in Year 1?</label><div class="toggle-group" id="halfYear"><button type="button" class="toggle-btn active" data-val="full" onclick="setTg('halfYear',this)">Yes (Full Rate)<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Used &ge; 180 days</small></button><button type="button" class="toggle-btn" data-val="half" onclick="setTg('halfYear',this)">No (Half Rate)<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Used &lt; 180 days</small></button></div></div>
    </div>
    <div class="form-group"><label>Number of Years</label><input type="number" id="inYears" value="10" min="1" max="50" style="max-width:120px"></div>
    <button class="btn-calculate" onclick="calcDep()">Calculate Depreciation</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use the Depreciation Calculator</h2><p>This tool computes depreciation as per <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Act, 1961</a> Section 32 rules. WDV method is mandatory for income tax purposes. SLM is provided for Companies Act reference.</p><h3>Step 1 — Select Asset Category</h3><p>Choose from 7 pre-set categories (auto-sets IT Act rate) or Custom for any rate. Rates are as per the IT Act depreciation schedule.</p><h3>Step 2 — Enter Cost and Adjust Rate</h3><p>Set asset cost and verify the rate. Adjust if your specific asset has a different rate (e.g., energy-saving devices at 40%).</p><h3>Step 3 — Choose Method and Half-Year Rule</h3><p>Select WDV (mandatory for IT) or SLM. If the asset was used for less than 180 days in year 1, select &ldquo;No&rdquo; for half-rate in the first year.</p><div class="callout"><p><strong>CA Tip:</strong> Under IT Act, assets are grouped into &ldquo;blocks&rdquo; by rate. Depreciation is on the block, not individual assets. When filing ITR, compute block-wise depreciation. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends maintaining a fixed asset register with block-wise tracking for audit-ready compliance.</p></div></section>

<section class="content-section" id="rates"><h2>Depreciation Rates Under Income Tax Act</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Asset Category</th><th>WDV Rate</th><th>Half-Year Rate</th><th>Block</th></tr></thead><tbody>
<tr><td>Building — Residential</td><td>5%</td><td>2.5%</td><td>Block 1</td></tr>
<tr><td>Building — Non-Residential</td><td>10%</td><td>5%</td><td>Block 2</td></tr>
<tr><td>Building — Temporary (wooden)</td><td>40%</td><td>20%</td><td>Block 3</td></tr>
<tr><td>Furniture & Fittings</td><td>10%</td><td>5%</td><td>Block 4</td></tr>
<tr><td>Plant & Machinery (General)</td><td>15%</td><td>7.5%</td><td>Block 5</td></tr>
<tr><td>Motor Vehicles</td><td>15%</td><td>7.5%</td><td>Block 5</td></tr>
<tr><td>Computers & Software</td><td>40%</td><td>20%</td><td>Block 6</td></tr>
<tr><td>Energy-Saving Devices</td><td>40%</td><td>20%</td><td>Block 6</td></tr>
<tr><td>Intangible Assets</td><td>25%</td><td>12.5%</td><td>Block 7</td></tr>
<tr><td>Ships / Vessels</td><td>20%</td><td>10%</td><td>Block 8</td></tr>
</tbody></table></div></section>

<section class="content-section" id="rules"><h2>Key Depreciation Rules</h2><ul><li><strong>Block concept:</strong> Assets with same rate are grouped. Depreciation is on block total, not individual items.</li><li><strong>180-day rule:</strong> If asset used &lt; 180 days in acquisition year, only 50% of rate allowed in year 1.</li><li><strong>Additional depreciation:</strong> Manufacturing businesses get extra 20% on new P&M under Sec 32(1)(iia) in year 1.</li><li><strong>No depreciation on land:</strong> Land is non-depreciable. Separate land and building value in purchase deeds.</li><li><strong>Sale of asset:</strong> Sale price reduces block. If block becomes negative, excess is STCG under Sec 50.</li><li><strong>Unabsorbed depreciation:</strong> Can be carried forward indefinitely (no 8-year limit unlike business losses).</li></ul></section>

<section class="content-section" id="tax"><h2>Tax Savings from Depreciation</h2><div class="formula-box"><span class="label">Tax Saving Formula:</span><br>Tax Saving = Depreciation &times; Tax Rate<br><br><span class="label">Example (&#8377;10L computer, 40%, 25% tax):</span><br>Year 1 Depreciation = &#8377;4,00,000<br>Tax Saving = 4,00,000 &times; 0.25 = <span class="label">&#8377;1,00,000</span><br>Effective cost = &#8377;10L &minus; &#8377;1L = <span class="label">&#8377;9,00,000</span></div><div class="callout green"><p><strong>Expert Tip:</strong> Time your capital expenditure to maximise depreciation. Assets put to use before 1st October get full-year depreciation. After 1st October, only half-year rate applies. This can save significant tax in the year of purchase. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20depreciation%20and%20tax%20planning." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need depreciation help?</strong> Our CAs handle fixed asset register maintenance, block-wise depreciation, ITR filing, and tax audit support. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20depreciation%20calculation%20and%20tax%20filing." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions — Depreciation</h2><div id="faqList"></div></section>
</div>
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need Tax Help?</h3><p>Our CAs handle depreciation, fixed asset registers, ITR filing & tax audit for businesses.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20depreciation%20and%20tax%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting & Bookkeeping <span class="arrow">&rarr;</span></a><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a><a href="/tax-planning-and-advisory" class="sidebar-link">Tax Planning <span class="arrow">&rarr;</span></a><a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a><a href="/tools/business-loan-emi-calculator" class="sidebar-link">Business Loan EMI <span class="arrow">&rarr;</span></a><a href="/tools/roi-calculator" class="sidebar-link">ROI Calculator <span class="arrow">&rarr;</span></a><a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside>
</div>

<script>
var RATES={pm15:15,comp40:40,vehicle15:15,bldg10:10,bldg5:5,furn10:10,intang25:25,custom:15};
function setAsset(el){document.querySelectorAll('.asset-chip').forEach(function(c){c.classList.remove('active');});el.classList.add('active');var v=el.getAttribute('data-val'),r=RATES[v];document.getElementById('sliderRate').value=r;document.getElementById('valRate').value=r;}
function getVal(id){var g=document.getElementById(id);var a=g.querySelector('.toggle-btn.active');return a?a.getAttribute('data-val'):'';}
function setTg(gid,btn){var g=document.getElementById(gid);g.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');});btn.classList.add('active');}
function syncS(t){if(t==='cost'){var v=parseInt(document.getElementById('sliderCost').value);document.getElementById('valCost').value=v.toLocaleString('en-IN');}else{document.getElementById('valRate').value=document.getElementById('sliderRate').value;}}
function syncI(t){if(t==='cost'){var v=parseInt(document.getElementById('valCost').value.replace(/[^0-9]/g,''))||0;document.getElementById('sliderCost').value=v;document.getElementById('valCost').value=v?v.toLocaleString('en-IN'):'';}else{document.getElementById('sliderRate').value=parseFloat(document.getElementById('valRate').value)||0;}}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}

function resetForm(){document.querySelectorAll('.asset-chip').forEach(function(c,i){c.classList.toggle('active',i===0);});document.getElementById('sliderCost').value=1000000;document.getElementById('valCost').value='10,00,000';document.getElementById('sliderRate').value=15;document.getElementById('valRate').value='15';document.getElementById('inYears').value=10;['method','halfYear'].forEach(function(g){document.getElementById(g).querySelectorAll('.toggle-btn').forEach(function(b,i){b.classList.toggle('active',i===0);});});document.getElementById('resPanel').classList.remove('visible');}

function calcDep(){
var cost=parseInt(document.getElementById('valCost').value.replace(/[^0-9]/g,''))||0;
var rate=parseFloat(document.getElementById('valRate').value)||0;
var years=parseInt(document.getElementById('inYears').value)||10;
var isWDV=getVal('method')==='wdv';
var isHalf=getVal('halfYear')==='half';
if(!cost||!rate){alert('Please enter asset cost and depreciation rate.');return;}

var yearData=[];
var wdv=cost,totalDep=0;
for(var y=1;y<=years;y++){
var r=rate;
if(y===1&&isHalf)r=rate/2;
var dep;
if(isWDV){dep=Math.round(wdv*r/100);}
else{dep=Math.round(cost*r/100);if(y===1&&isHalf)dep=Math.round(cost*r/200);}
if(isWDV&&dep>wdv)dep=Math.round(wdv);
if(!isWDV){var remaining=cost-totalDep;if(dep>remaining)dep=Math.round(remaining);}
totalDep+=dep;
var closing=isWDV?(wdv-dep):Math.max(0,cost-totalDep);
yearData.push({year:y,opening:Math.round(isWDV?wdv:(cost-totalDep+dep)),dep:dep,accumulated:Math.round(totalDep),closing:Math.round(closing),rateUsed:r});
if(isWDV)wdv-=dep;
if(closing<=0)break;
}

var yr1Dep=yearData[0]?yearData[0].dep:0;
var finalWDV=yearData.length?yearData[yearData.length-1].closing:cost;

var h='';
h+='<div class="dep-hero"><div class="dep-box annual"><div class="db-label">Year 1 Depreciation</div><div class="db-value">'+fmt(yr1Dep)+'</div><div class="db-sub">'+(isHalf?'Half rate: '+(rate/2)+'%':'Full rate: '+rate+'%')+'</div></div>';
h+='<div class="dep-box total"><div class="db-label">Total Depreciation ('+yearData.length+' yrs)</div><div class="db-value">'+fmtL(totalDep)+'</div><div class="db-sub">'+Math.round(totalDep/cost*100)+'% of cost</div></div>';
h+='<div class="dep-box wdv"><div class="db-label">'+(isWDV?'Closing WDV':'Book Value')+'</div><div class="db-value">'+fmtL(finalWDV)+'</div><div class="db-sub">After '+yearData.length+' years</div></div></div>';

// Tax saving
var taxRate=25;
var yr1Save=Math.round(yr1Dep*taxRate/100);
h+='<div class="callout green" style="margin-top:0"><p style="color:#166534"><strong>Year 1 Tax Saving (at '+taxRate+'% rate):</strong> '+fmt(yr1Dep)+' depreciation saves '+fmt(yr1Save)+' in tax. Effective asset cost in year 1: '+fmt(cost-yr1Save)+'. Total depreciation of '+fmtL(totalDep)+' over '+yearData.length+' years saves ~'+fmtL(Math.round(totalDep*taxRate/100))+' in total tax.</p></div>';

// Summary
h+='<div class="res-card"><div class="res-card-hd"><h3>Depreciation Summary</h3><span class="res-badge info">'+(isWDV?'WDV':'SLM')+'</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Asset Cost</td><td><strong>'+fmt(cost)+'</strong></td></tr>';
h+='<tr><td>Rate</td><td><strong>'+rate+'% '+(isWDV?'WDV':'SLM')+'</strong></td></tr>';
h+='<tr><td>Method</td><td><strong>'+(isWDV?'Written Down Value':'Straight Line')+'</strong></td></tr>';
h+='<tr><td>Half-Year Rule</td><td><strong>'+(isHalf?'Applied (Year 1 at '+rate/2+'%)':'Not applied')+'</strong></td></tr>';
h+='<tr><td>Year 1 Depreciation</td><td class="hi">'+fmt(yr1Dep)+'</td></tr>';
h+='<tr><td>Total Depreciation</td><td>'+fmt(totalDep)+'</td></tr>';
h+='<tr><td>'+(isWDV?'Final WDV':'Final Book Value')+'</td><td><strong>'+fmt(finalWDV)+'</strong></td></tr>';
h+='</table></div></div>';

// Year-wise schedule
h+='<div class="res-card"><div class="res-card-hd"><h3>Year-Wise Depreciation Schedule</h3><span class="res-badge teal">Schedule</span></div><div class="res-card-bd"><div class="yr-table"><table><thead><tr><th>Year</th><th>Opening</th><th>Rate</th><th>Depreciation</th><th>Accumulated</th><th>Closing</th></tr></thead><tbody>';
yearData.forEach(function(d){h+='<tr><td>'+d.year+'</td><td>'+fmt(d.opening)+'</td><td>'+d.rateUsed+'%</td><td class="hi">'+fmt(d.dep)+'</td><td>'+fmt(d.accumulated)+'</td><td style="color:var(--primary);font-weight:700">'+fmt(d.closing)+'</td></tr>';});
h+='</tbody></table></div></div></div>';

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20Depreciation%20Calculator.%20I%20need%20help%20with%20fixed%20asset%20depreciation%20and%20tax." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/income-tax-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> Income Tax Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What are depreciation rates under IT Act?",a:"Key WDV rates: Building residential 5%, non-residential 10%. P&M general 15%. Motor vehicles 15%. Computers/software 40%. Furniture 10%. Intangibles 25%. Half rate in year 1 if used < 180 days."},
{q:"What is WDV method?",a:"Written Down Value calculates depreciation on reducing balance. Year 1 on cost, year 2 on (cost \u2212 year 1 dep), etc. Asset never reaches zero. WDV is mandatory under IT Act for tax depreciation."},
{q:"What is the half-year rule?",a:"If asset used < 180 days in acquisition year, only 50% of normal rate allowed in year 1. E.g., computer at 40% gets 20% in year 1 if bought after 1st October. Full rate from year 2."},
{q:"What is computer depreciation rate?",a:"40% WDV \u2014 highest common rate. With half-year rule: 20% in year 1 if < 180 days. \u20B910L computer depreciates to ~\u20B97,776 in 5 years. Includes hardware, software, peripherals."},
{q:"Can I claim depreciation on business car?",a:"Yes, 15% WDV for motor vehicles used in business. If partly personal, reverse proportionate depreciation. Maintain a log book. Luxury car cost may be restricted."},
{q:"IT Act vs Companies Act depreciation?",a:"IT Act: WDV method, specific rates, for tax. Companies Act: WDV or SLM, useful-life based (Schedule II), for financial statements. Both computed independently."},
{q:"What is additional depreciation?",a:"Manufacturing businesses: extra 20% on new P&M under Sec 32(1)(iia) in year 1. Total: 15% normal + 20% additional = 35% in year 1. Applies only to new manufacturing assets."},
{q:"Is depreciation allowed on land?",a:"No. Land is non-depreciable with unlimited life. Only building qualifies. Separate land and building values in purchase agreement for correct depreciation computation."},
{q:"What happens when asset is sold?",a:"Sale price reduces block WDV. If block goes negative, excess = STCG under Sec 50. If block empty, entire WDV = STCG/loss. Individual asset tracking not needed under block concept."},
{q:"Can depreciation create a loss?",a:"Yes. Unabsorbed depreciation can create/increase business loss and be carried forward indefinitely (no 8-year limit). Set off after computing current year business income."},
{q:"What is block of assets?",a:"Assets with same depreciation rate grouped into one block. Depreciation on entire block total, not individual assets. Additions increase block, sales reduce it. Simplifies computation."},
{q:"What are depreciable intangible assets?",a:"Know-how, patents, copyrights, trademarks, licenses, franchises at 25% WDV. Goodwill is NOT depreciable from FY 2020-21. Software licenses: 25% (not 40% which is for computer hardware)."},
{q:"How does depreciation reduce tax?",a:"Non-cash deduction from business income. At 25% tax rate, every \u20B91L depreciation saves \u20B925K tax. At 30%: \u20B930K saved. Makes capex effectively cheaper by the tax rate percentage."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcDep();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection