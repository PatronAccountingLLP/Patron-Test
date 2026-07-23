@extends('layouts.app')
@section('meta')
    <title>Break-Even Calculator | Units, Revenue & Margin of Safety</title>
    <meta name="description" content="Free break-even calculator: find break-even units, revenue and months to profit from fixed costs, variable costs and selling price. Chart included. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/break-even-calculator">
    <meta property="og:title" content="Break-Even Calculator — Free Business Analysis Tool 2026 | Patron Accounting">
    <meta property="og:description" content="Calculate break-even point in units and revenue. Fixed costs, variable costs, contribution margin analysis.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/break-even-calculator">
    <meta property="og:image" content="/tools/og-break-even-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Break-Even Calculator — Free Analysis Tool 2026">
    <meta name="twitter:description" content="Find your break-even point. Units, revenue, and months to profitability.">
    <meta name="twitter:image" content="/tools/og-break-even-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"Break-Even Analysis Calculator 2026","description":"Free online break-even calculator for businesses. Enter fixed costs, variable cost per unit, and selling price per unit to calculate break-even point in units and revenue, contribution margin, margin of safety, and months to break even. Includes visual revenue vs cost chart and what-if scenario table for different price and volume combinations.","url":"/tools/break-even-calculator","applicationCategory":"BusinessApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Break-Even Calculator","item":"/tools/break-even-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is break-even point?","acceptedAnswer":{"@type":"Answer","text":"Break-even point is the level of sales at which total revenue equals total costs resulting in zero profit or loss. It can be expressed in units or revenue. Below break-even you make a loss and above it you make a profit. It is a critical metric for pricing decisions, cost control, and business planning."}},{"@type":"Question","name":"How to calculate break-even point in units?","acceptedAnswer":{"@type":"Answer","text":"Break-even units equals fixed costs divided by contribution margin per unit. Contribution margin per unit equals selling price minus variable cost per unit. For example if fixed costs are 5 lakh, selling price is 1000, and variable cost is 600, then contribution is 400 and break-even is 5 lakh divided by 400 equals 1250 units."}},{"@type":"Question","name":"What is contribution margin?","acceptedAnswer":{"@type":"Answer","text":"Contribution margin is the amount each unit sold contributes towards covering fixed costs and generating profit. It equals selling price minus variable cost per unit. The contribution margin ratio equals contribution margin divided by selling price. A higher contribution margin means fewer units needed to break even and faster path to profitability."}},{"@type":"Question","name":"What are fixed costs and variable costs?","acceptedAnswer":{"@type":"Answer","text":"Fixed costs remain constant regardless of production volume such as rent, salaries, insurance, depreciation, and loan EMIs. Variable costs change proportionally with production like raw materials, packaging, shipping, and sales commissions. Some costs are semi-variable like electricity which has a fixed base plus usage-based component."}},{"@type":"Question","name":"How does break-even help in pricing decisions?","acceptedAnswer":{"@type":"Answer","text":"Break-even analysis shows the minimum units needed at different price points. Lowering price increases break-even units required while raising price reduces them. You can test scenarios to find the optimal price that balances volume and margin. It also helps evaluate discount offers by showing how many additional units are needed to compensate."}},{"@type":"Question","name":"What is margin of safety?","acceptedAnswer":{"@type":"Answer","text":"Margin of safety is the difference between actual or expected sales and break-even sales expressed as a percentage. It measures how much sales can drop before the business starts making a loss. Formula: margin of safety equals actual sales minus break-even sales divided by actual sales times 100. Higher margin means lower business risk."}},{"@type":"Question","name":"Can break-even analysis work for service businesses?","acceptedAnswer":{"@type":"Answer","text":"Yes. For service businesses replace units with billable hours or client projects. Fixed costs include rent, salaries, and software subscriptions. Variable costs per unit include per-project expenses, subcontractor fees, or commissions. The break-even formula works the same way calculating how many billable hours or projects are needed to cover all costs."}},{"@type":"Question","name":"What are the limitations of break-even analysis?","acceptedAnswer":{"@type":"Answer","text":"Break-even assumes linear relationships between cost and volume, constant selling price, fixed costs remaining truly fixed, and all units produced being sold. It ignores market demand, competition, seasonality, and non-financial factors. It works best as a starting point for analysis combined with market research and cash flow projections."}},{"@type":"Question","name":"How to reduce break-even point?","acceptedAnswer":{"@type":"Answer","text":"Three strategies: reduce fixed costs by negotiating rent or moving to smaller premises. Increase selling price if market allows. Reduce variable costs through better supplier terms, bulk purchasing, or process efficiency. Even small improvements in each area compound significantly. A 10 percent improvement in all three can reduce break-even by 30 percent."}},{"@type":"Question","name":"What is break-even in revenue terms?","acceptedAnswer":{"@type":"Answer","text":"Break-even revenue equals fixed costs divided by contribution margin ratio. Contribution margin ratio equals contribution margin per unit divided by selling price. For example with 5 lakh fixed costs and 40 percent contribution ratio the break-even revenue is 12.5 lakh. This is useful when a business sells multiple products at different prices."}},{"@type":"Question","name":"How many months does it take to break even?","acceptedAnswer":{"@type":"Answer","text":"Months to break-even equals break-even units divided by expected monthly sales volume. If break-even is 1250 units and you sell 200 units per month it takes about 6.3 months. For startups this metric is crucial for cash flow planning and determining how much funding or working capital is needed before reaching profitability."}},{"@type":"Question","name":"Is GST included in break-even calculation?","acceptedAnswer":{"@type":"Answer","text":"For GST-registered businesses, use GST-exclusive figures for selling price and costs since GST is a pass-through tax. Input GST on purchases is claimed as ITC and output GST on sales is remitted to the government. For composition scheme dealers who cannot claim ITC, include GST as part of variable cost in the break-even calculation."}},{"@type":"Question","name":"What is operating leverage and break-even?","acceptedAnswer":{"@type":"Answer","text":"Operating leverage measures the proportion of fixed costs in total costs. High fixed cost businesses like manufacturing and SaaS have high operating leverage meaning higher break-even but greater profit acceleration beyond break-even. Low fixed cost businesses like trading break even faster but profits grow linearly. Understanding this helps in business model decisions."}}]}
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


/* Tool-specific: Break-Even Calculator */
.be-hero{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin:20px 0}
.be-box{border-radius:var(--radius);padding:20px;text-align:center}
.be-box.units{background:linear-gradient(135deg,var(--primary),var(--primary-light));color:#fff}
.be-box.revenue{background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#fff}
.be-box.margin{background:linear-gradient(135deg,#059669,#10b981);color:#fff}
.be-box .bx-label{font-size:11px;font-weight:600;opacity:.85;text-transform:uppercase;letter-spacing:.5px}
.be-box .bx-value{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;margin-top:4px}
.be-box .bx-sub{font-size:11px;opacity:.8;margin-top:2px}
.chart-wrap{margin:20px 0;background:var(--surface);border-radius:var(--radius);padding:20px;border:1px solid var(--border)}
.chart-bar{display:flex;align-items:flex-end;gap:4px;height:200px;padding:0 10px}
.chart-col{display:flex;flex-direction:column;align-items:center;flex:1;gap:4px}
.chart-col .bar{width:100%;border-radius:6px 6px 0 0;min-height:2px;transition:height 0.5s}
.chart-col .bar.rev{background:var(--primary)}
.chart-col .bar.cost{background:#dc2626}
.chart-col .lbl{font-size:10px;color:var(--text-muted);font-weight:600;text-align:center;white-space:nowrap;overflow:hidden}
.chart-legend{display:flex;justify-content:center;gap:20px;margin-top:12px;font-size:12px}
.chart-legend span{display:flex;align-items:center;gap:6px}
.chart-legend .dot{width:12px;height:12px;border-radius:3px}
.slider-group{margin-bottom:20px}
.slider-group label{display:block;font-size:13px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px}
.slider-row{display:flex;align-items:center;gap:12px}
.slider-row input[type="range"]{flex:1;-webkit-appearance:none;height:6px;border-radius:3px;background:var(--border);outline:none}
.slider-row input[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--primary);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,0.2)}
.slider-row .slider-val{min-width:120px;padding:10px 14px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--card);text-align:right;outline:none;transition:border-color 0.2s}
.slider-row .slider-val:focus{border-color:var(--primary)}
@media(max-width:600px){.be-hero{grid-template-columns:1fr}.chart-bar{height:150px}}

</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner"><a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#formula">Formulas</a><a href="#examples">Examples</a><a href="#tips">Tips</a><a href="#faqs">FAQs</a></div></nav>
{{-- <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>&rsaquo;</span><a href="/tools/">Free Tools</a><span>&rsaquo;</span>Break-Even Calculator</nav> --}}
<header class="hero" id="calculator"><div class="hero-meta"><span class="badge-updated">Last Updated: March 2026</span><span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span></div><h1>Break-Even Analysis <span>Calculator</span> — Units, Revenue & Months</h1></header>
<div class="tldr"><div class="tldr-label">TL;DR</div><p>Find your break-even point — the exact number of units (or revenue) where your business starts making profit. Enter monthly fixed costs, variable cost per unit, and selling price per unit. Get break-even in units and revenue, contribution margin, contribution ratio, margin of safety, months to break even, and a visual chart comparing revenue vs total cost at different volumes.</p></div>
<div class="main-layout"><div class="content-col">
<div class="calc-card">
    <h2>Calculate Break-Even Point</h2>
    <noscript><div class="noscript-box">This calculator requires JavaScript. <a href="https://wa.me/919459456700">Contact our CA team</a>.</div></noscript>
    <div class="slider-group"><label>Monthly Fixed Costs (&#8377;)</label><div class="slider-row"><input type="range" id="sliderFixed" min="10000" max="10000000" step="10000" value="500000" oninput="syncS('fixed')"><input type="text" class="slider-val" id="valFixed" value="5,00,000" oninput="syncI('fixed')"></div><div style="font-size:12px;color:var(--text-muted);margin-top:4px">Rent, salaries, EMIs, insurance, depreciation, subscriptions</div></div>
    <div class="slider-group"><label>Selling Price Per Unit (&#8377;)</label><div class="slider-row"><input type="range" id="sliderPrice" min="10" max="100000" step="10" value="1000" oninput="syncS('price')"><input type="text" class="slider-val" id="valPrice" value="1,000" oninput="syncI('price')"></div></div>
    <div class="slider-group"><label>Variable Cost Per Unit (&#8377;)</label><div class="slider-row"><input type="range" id="sliderVar" min="0" max="100000" step="10" value="600" oninput="syncS('var')"><input type="text" class="slider-val" id="valVar" value="600" oninput="syncI('var')"></div><div style="font-size:12px;color:var(--text-muted);margin-top:4px">Raw materials, packaging, shipping, commissions per unit</div></div>
    <div class="form-group"><label>Expected Monthly Sales (units) — for margin of safety</label><input type="number" id="inExpected" value="2000" min="0" style="max-width:160px"></div>
    <button class="btn-calculate" onclick="calcBE()">Calculate Break-Even</button>
    <button class="btn-reset" onclick="resetForm()">&#8634; Reset</button>
    <div class="res-panel" id="resPanel"><div id="resBody"></div></div>
</div>

<section class="content-section" id="how-to-use"><h2>How to Use the Break-Even Calculator</h2><p>This tool helps entrepreneurs, startups, and established businesses find the exact point where revenue covers all costs — the foundation of sound business planning.</p><h3>Step 1 — Enter Fixed Costs</h3><p>Enter your total monthly fixed costs including rent, salaries, loan EMIs, insurance premiums, depreciation, and recurring subscriptions. These remain constant regardless of sales volume.</p><h3>Step 2 — Enter Price and Variable Cost</h3><p>Set your selling price per unit and variable cost per unit. Variable costs include raw materials, packaging, shipping, sales commissions, and any cost that changes with each unit produced or sold.</p><h3>Step 3 — View Analysis</h3><p>Get break-even units, break-even revenue, contribution margin, contribution ratio, margin of safety, and months to profitability. The visual chart shows revenue vs cost curves at different volumes.</p><div class="callout"><p><strong>CA Tip:</strong> For GST-registered businesses, use GST-exclusive figures since GST is a pass-through. For composition dealers, include GST as variable cost since ITC is not available. Review your break-even monthly as costs and prices change. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends break-even analysis as part of annual business planning.</p></div></section>

<section class="content-section" id="formula"><h2>Break-Even Formulas</h2><div class="formula-box"><span class="label">Break-Even Units:</span><br>BE Units = Fixed Costs &divide; (Selling Price &minus; Variable Cost)<br><br><span class="label">Break-Even Revenue:</span><br>BE Revenue = Fixed Costs &divide; Contribution Margin Ratio<br><br><span class="label">Contribution Margin:</span><br>CM per Unit = Selling Price &minus; Variable Cost<br>CM Ratio = CM per Unit &divide; Selling Price &times; 100<br><br><span class="label">Example (&#8377;5L fixed, &#8377;1,000 price, &#8377;600 variable):</span><br>CM = 1,000 &minus; 600 = <span class="label">&#8377;400/unit</span><br>CM Ratio = 400/1,000 = <span class="label">40%</span><br>BE Units = 5,00,000 &divide; 400 = <span class="label">1,250 units</span><br>BE Revenue = 5,00,000 &divide; 0.40 = <span class="label">&#8377;12,50,000</span></div></section>

<section class="content-section" id="examples"><h2>Break-Even Examples by Business Type</h2><div style="overflow-x:auto;"><table class="rate-table"><thead><tr><th>Business</th><th>Fixed Costs/mo</th><th>Price</th><th>Variable</th><th>CM</th><th>BE Units</th></tr></thead><tbody>
<tr><td>Restaurant</td><td>&#8377;3L</td><td>&#8377;300</td><td>&#8377;120</td><td>&#8377;180</td><td>1,667</td></tr>
<tr><td>E-commerce (apparel)</td><td>&#8377;2L</td><td>&#8377;800</td><td>&#8377;400</td><td>&#8377;400</td><td>500</td></tr>
<tr><td>SaaS startup</td><td>&#8377;10L</td><td>&#8377;2,000</td><td>&#8377;200</td><td>&#8377;1,800</td><td>556</td></tr>
<tr><td>Manufacturing</td><td>&#8377;8L</td><td>&#8377;500</td><td>&#8377;300</td><td>&#8377;200</td><td>4,000</td></tr>
<tr><td>Consulting firm</td><td>&#8377;5L</td><td>&#8377;5,000/hr</td><td>&#8377;500</td><td>&#8377;4,500</td><td>111 hrs</td></tr>
</tbody></table></div></section>

<section class="content-section" id="tips"><h2>Tips to Reach Break-Even Faster</h2><ul><li><strong>Cut fixed costs:</strong> Negotiate rent, use co-working spaces initially, outsource non-core functions, use cloud tools instead of full-time hires.</li><li><strong>Increase contribution margin:</strong> Negotiate better supplier rates, reduce packaging costs, optimise logistics. Every &#8377;10 improvement per unit compounds across all sales.</li><li><strong>Focus on high-margin products:</strong> If you sell multiple products, push the ones with higher contribution margins to reach break-even faster.</li><li><strong>Price strategically:</strong> Don&rsquo;t just compete on price. A 10% price increase with 5% volume drop can improve profits significantly if contribution margin is high.</li><li><strong>Track weekly:</strong> Monitor actual vs break-even weekly, not just monthly. Early detection of shortfalls allows quick corrective action.</li></ul><div class="callout green"><p><strong>Expert Tip:</strong> For startups, calculate &ldquo;cash break-even&rdquo; separately from accounting break-even. Cash break-even excludes non-cash charges like depreciation but includes loan principal repayments and capex. This tells you when you stop burning cash. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20business%20financial%20planning." target="_blank" rel="noopener" style="color:inherit;font-weight:700;">Talk to our CA team &rarr;</a></p></div></section>

<div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;"><p style="color:var(--primary-dark);font-size:15px;"><strong>Need business planning help?</strong> Our CAs assist with financial projections, break-even analysis, startup advisory, and business loan preparation. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20business%20financial%20planning." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p></div>

<section class="content-section" id="faqs"><h2>Frequently Asked Questions — Break-Even</h2><div id="faqList"></div></section>
</div>
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need Business Help?</h3><p>Our CAs help with financial projections, break-even analysis & startup advisory.</p><a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20business%20planning%20help." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Services</h3><a href="/startup-registration" class="sidebar-link">Startup Registration <span class="arrow">&rarr;</span></a><a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting & Bookkeeping <span class="arrow">&rarr;</span></a><a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a><a href="/income-tax-return-filing" class="sidebar-link">ITR Filing <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>Related Tools</h3><a href="/tools/roi-calculator" class="sidebar-link">ROI Calculator <span class="arrow">&rarr;</span></a><a href="/tools/business-loan-emi-calculator" class="sidebar-link">Business Loan EMI <span class="arrow">&rarr;</span></a><a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a><a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator <span class="arrow">&rarr;</span></a><a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a></div>
    <div class="sidebar-card"><h3>From the Blog</h3><a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a><a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a></div>
</aside>
</div>

<script>
function syncS(t){if(t==='fixed'){var v=parseInt(document.getElementById('sliderFixed').value);document.getElementById('valFixed').value=v.toLocaleString('en-IN');}else if(t==='price'){var v=parseInt(document.getElementById('sliderPrice').value);document.getElementById('valPrice').value=v.toLocaleString('en-IN');}else{var v=parseInt(document.getElementById('sliderVar').value);document.getElementById('valVar').value=v.toLocaleString('en-IN');}}
function syncI(t){var ids={fixed:'sliderFixed',price:'sliderPrice','var':'sliderVar'};var vids={fixed:'valFixed',price:'valPrice','var':'valVar'};var v=parseInt(document.getElementById(vids[t]).value.replace(/[^0-9]/g,''))||0;document.getElementById(ids[t]).value=v;document.getElementById(vids[t]).value=v?v.toLocaleString('en-IN'):'';}
function fmt(n){return'\u20B9'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(n>=10000000)return'\u20B9'+(n/10000000).toFixed(2)+' Cr';if(n>=100000)return'\u20B9'+(n/100000).toFixed(2)+' L';return fmt(n);}
function resetForm(){document.getElementById('sliderFixed').value=500000;document.getElementById('valFixed').value='5,00,000';document.getElementById('sliderPrice').value=1000;document.getElementById('valPrice').value='1,000';document.getElementById('sliderVar').value=600;document.getElementById('valVar').value='600';document.getElementById('inExpected').value=2000;document.getElementById('resPanel').classList.remove('visible');}

function calcBE(){
var fixed=parseInt(document.getElementById('valFixed').value.replace(/[^0-9]/g,''))||0;
var price=parseInt(document.getElementById('valPrice').value.replace(/[^0-9]/g,''))||0;
var vc=parseInt(document.getElementById('valVar').value.replace(/[^0-9]/g,''))||0;
var expected=parseInt(document.getElementById('inExpected').value)||0;
if(!fixed||!price){alert('Please enter fixed costs and selling price.');return;}
if(price<=vc){alert('Selling price must be greater than variable cost per unit.');return;}

var cm=price-vc;
var cmRatio=(cm/price*100);
var beUnits=Math.ceil(fixed/cm);
var beRev=Math.round(fixed/(cm/price));
var mosUnits=expected>beUnits?(expected-beUnits):0;
var mosPct=expected>0?((expected-beUnits)/expected*100):0;
var monthsToBE=expected>0?(beUnits/expected):0;

// Profit at expected volume
var profitAtExpected=(expected*cm)-fixed;

var h='';
h+='<div class="be-hero"><div class="be-box units"><div class="bx-label">Break-Even Units</div><div class="bx-value">'+beUnits.toLocaleString('en-IN')+'</div><div class="bx-sub">units per month</div></div>';
h+='<div class="be-box revenue"><div class="bx-label">Break-Even Revenue</div><div class="bx-value">'+fmtL(beRev)+'</div><div class="bx-sub">monthly revenue needed</div></div>';
h+='<div class="be-box margin"><div class="bx-label">Contribution Margin</div><div class="bx-value">'+fmt(cm)+'</div><div class="bx-sub">'+cmRatio.toFixed(1)+'% per unit</div></div></div>';

// Visual chart: Revenue vs Total Cost at 5 volume levels
var volumes=[0,Math.round(beUnits*0.5),beUnits,Math.round(beUnits*1.5),expected>beUnits?expected:Math.round(beUnits*2)];
var maxVal=0;volumes.forEach(function(v){maxVal=Math.max(maxVal,v*price,fixed+v*vc);});
h+='<div class="chart-wrap"><div style="font-size:13px;font-weight:700;color:var(--primary-dark);margin-bottom:12px">Revenue vs Total Cost</div><div class="chart-bar">';
volumes.forEach(function(v){
var rev=v*price,cost=fixed+v*vc;
var revH=maxVal>0?(rev/maxVal*180):0,costH=maxVal>0?(cost/maxVal*180):0;
var isBE=v===beUnits;
h+='<div class="chart-col"><div class="bar rev" style="height:'+revH+'px"></div><div class="bar cost" style="height:'+costH+'px"></div><div class="lbl"'+(isBE?' style="color:var(--primary);font-weight:800"':'')+'>'+v.toLocaleString('en-IN')+(isBE?' \u2605':'')+'</div></div>';
});
h+='</div><div class="chart-legend"><span><span class="dot" style="background:var(--primary)"></span> Revenue</span><span><span class="dot" style="background:#dc2626"></span> Total Cost</span><span style="color:var(--primary);font-weight:700">\u2605 = Break-Even</span></div></div>';

// Summary table
h+='<div class="res-card"><div class="res-card-hd"><h3>Break-Even Analysis</h3><span class="res-badge info">Summary</span></div><div class="res-card-bd"><table class="cmp-table">';
h+='<tr><td>Monthly Fixed Costs</td><td><strong>'+fmt(fixed)+'</strong></td></tr>';
h+='<tr><td>Selling Price per Unit</td><td><strong>'+fmt(price)+'</strong></td></tr>';
h+='<tr><td>Variable Cost per Unit</td><td><strong>'+fmt(vc)+'</strong></td></tr>';
h+='<tr><td>Contribution Margin per Unit</td><td class="hi">'+fmt(cm)+' ('+cmRatio.toFixed(1)+'%)</td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Break-Even Units</strong></td><td style="font-size:18px;color:var(--primary)"><strong>'+beUnits.toLocaleString('en-IN')+' units/month</strong></td></tr>';
h+='<tr style="background:var(--surface-alt)"><td><strong>Break-Even Revenue</strong></td><td style="font-size:16px;color:var(--primary)"><strong>'+fmtL(beRev)+'/month</strong></td></tr>';
if(expected>0){
h+='<tr><td>Expected Monthly Sales</td><td>'+expected.toLocaleString('en-IN')+' units</td></tr>';
h+='<tr><td>Months to Break-Even</td><td><strong>'+monthsToBE.toFixed(1)+' months</strong></td></tr>';
h+='<tr><td>Margin of Safety</td><td><strong>'+(mosPct>0?mosPct.toFixed(1)+'% ('+mosUnits.toLocaleString('en-IN')+' units)':'Below break-even')+'</strong></td></tr>';
h+='<tr><td>'+(profitAtExpected>=0?'Monthly Profit':'Monthly Loss')+' at Expected Volume</td><td class="'+(profitAtExpected>=0?'hi':'neg')+'">'+fmt(Math.abs(profitAtExpected))+(profitAtExpected>=0?'':' (loss)')+'</td></tr>';
}
h+='</table></div></div>';

// What-if scenarios
h+='<div class="res-card"><div class="res-card-hd"><h3>What-If Scenarios</h3><span class="res-badge teal">Scenarios</span></div><div class="res-card-bd"><table class="cmp-table"><tr><th>Scenario</th><th>BE Units</th><th>BE Revenue</th></tr>';
var scenarios=[{n:'Current',f:fixed,p:price,v:vc},{n:'Price +10%',f:fixed,p:Math.round(price*1.1),v:vc},{n:'Price -10%',f:fixed,p:Math.round(price*0.9),v:vc},{n:'Variable Cost -10%',f:fixed,p:price,v:Math.round(vc*0.9)},{n:'Fixed Cost -20%',f:Math.round(fixed*0.8),p:price,v:vc}];
scenarios.forEach(function(s){var c=s.p-s.v;if(c>0){var bu=Math.ceil(s.f/c),br=Math.round(s.f/(c/s.p));h+='<tr><td>'+s.n+'</td><td>'+bu.toLocaleString('en-IN')+'</td><td>'+fmtL(br)+'</td></tr>';}});
h+='</table></div></div>';

// Advice
if(profitAtExpected>=0){h+='<div class="callout green"><p style="color:#166534"><strong>Profitable!</strong> At '+expected.toLocaleString('en-IN')+' units/month you exceed break-even by '+mosUnits.toLocaleString('en-IN')+' units, generating '+fmt(profitAtExpected)+' monthly profit. Margin of safety of '+mosPct.toFixed(1)+'% means sales can drop by that much before hitting a loss.</p></div>';}
else{h+='<div class="callout warn"><p><strong>Below Break-Even.</strong> At '+expected.toLocaleString('en-IN')+' units/month you fall short by '+(beUnits-expected).toLocaleString('en-IN')+' units, resulting in '+fmt(Math.abs(profitAtExpected))+' monthly loss. Increase volume, raise prices, or cut costs to reach profitability. See What-If scenarios above.</p></div>';}

h+='<div class="res-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20Break-Even%20Calculator.%20I%20need%20help%20with%20business%20financial%20planning." target="_blank" class="ra-btn"><svg viewBox="0 0 24 24" fill="#25D366" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/roi-calculator" class="ra-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg> ROI Calculator</a></div>';

document.getElementById('resBody').innerHTML=h;document.getElementById('resPanel').classList.add('visible');document.getElementById('resPanel').scrollIntoView({behavior:'smooth',block:'start'});
}

var FAQS=[
{q:"What is break-even point?",a:"The sales level where total revenue = total costs (zero profit/loss). Expressed in units or revenue. Below = loss, above = profit. Critical for pricing, cost control, and business planning."},
{q:"How to calculate break-even in units?",a:"BE Units = Fixed Costs \u00F7 (Selling Price \u2212 Variable Cost). Example: \u20B95L fixed, \u20B91,000 price, \u20B9600 variable. CM = \u20B9400. BE = 5,00,000 \u00F7 400 = 1,250 units."},
{q:"What is contribution margin?",a:"Amount each unit contributes to covering fixed costs. CM = Selling Price \u2212 Variable Cost. CM Ratio = CM \u00F7 Price. Higher CM = fewer units to break even, faster profitability."},
{q:"What are fixed vs variable costs?",a:"Fixed: constant regardless of volume (rent, salaries, EMIs, insurance). Variable: change per unit (raw materials, packaging, shipping, commissions). Some costs are semi-variable (electricity)."},
{q:"How does break-even help pricing?",a:"Shows minimum units at different prices. Price increase reduces BE units; decrease raises them. Test scenarios to find optimal price balancing volume and margin. Evaluate discount offers."},
{q:"What is margin of safety?",a:"(Actual Sales \u2212 BE Sales) \u00F7 Actual Sales \u00D7 100. Measures how much sales can drop before loss. Higher % = lower risk. Aim for 20%+ margin of safety."},
{q:"Does break-even work for services?",a:"Yes. Replace units with billable hours or projects. Fixed: rent, salaries, software. Variable: per-project costs, subcontractor fees. Same formula applies. Calculate hours needed to cover all costs."},
{q:"What are break-even limitations?",a:"Assumes linear cost-volume relationship, constant prices, all units sold. Ignores demand, competition, seasonality. Best as starting point combined with market research and cash flow projections."},
{q:"How to reduce break-even?",a:"Three levers: cut fixed costs (negotiate rent), increase price (if market allows), reduce variable costs (better supplier terms). 10% improvement in all three can reduce BE by ~30%."},
{q:"What is break-even revenue?",a:"BE Revenue = Fixed Costs \u00F7 CM Ratio. Example: \u20B95L fixed, 40% CM ratio = \u20B912.5L revenue needed. Useful for multi-product businesses where unit-level analysis is complex."},
{q:"How many months to break even?",a:"BE Months = BE Units \u00F7 Monthly Sales Volume. 1,250 BE units, 200 units/month = 6.25 months. Critical for startup cash flow planning and funding requirements."},
{q:"Is GST included in break-even?",a:"For GST-registered: use GST-exclusive figures (GST is pass-through). For composition dealers: include GST as variable cost since no ITC available. Keep calculations consistent."},
{q:"What is operating leverage?",a:"Proportion of fixed costs in total costs. High fixed cost businesses (manufacturing, SaaS) have high leverage = higher BE but greater profit acceleration beyond BE. Low fixed cost (trading) = lower BE but linear profit growth."}
];
function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}
function toggleFaq(btn){var item=btn.closest('.faq-item');var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!o)item.classList.add('open');}
var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var cur='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)cur=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+cur);});});
document.addEventListener('keydown',function(e){if(e.key==='Enter'&&document.activeElement&&document.activeElement.closest('.calc-card'))calcBE();});
document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection
