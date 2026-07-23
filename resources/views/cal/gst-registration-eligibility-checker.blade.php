
@extends('layouts.app')
@section('meta')
    <title>GST Registration Eligibility Checker | FY 2025-26</title>
    <meta name="description" content="GST registration eligibility checker: answer 5 questions to see if your business must register for GST, with turnover threshold limits for FY 2025-26. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-registration-eligibility-checker">
    <meta property="og:title" content="GST Registration Eligibility Checker &mdash; Free 2026">
    <meta property="og:description" content="Check if your business needs GST registration. Instant eligibility result for FY 2025-26.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gst-registration-eligibility-checker">
    <meta property="og:image" content="/tools/og-gst-registration-eligibility-checker.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Registration Eligibility Checker &mdash; Free 2026">
    <meta name="twitter:description" content="Check if your business needs GST registration for FY 2025-26.">
    <meta name="twitter:image" content="/tools/og-gst-registration-eligibility-checker.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"GST Registration Eligibility Checker","description":"GST Registration Eligibility Checker determines whether a business needs mandatory GST registration based on turnover, supply type, state category, and special conditions under Section 22 and Section 24 of the CGST Act 2017 for FY 2025-26.","url":"/tools/gst-registration-eligibility-checker","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","sameAs":["https://www.linkedin.com/company/patron-accounting"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"GST Registration Eligibility Checker","item":"/tools/gst-registration-eligibility-checker"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is the GST registration limit for goods in India?","acceptedAnswer":{"@type":"Answer","text":"The GST registration threshold for businesses dealing in goods is \u20B940 lakh aggregate annual turnover in normal category states. In special category states like Manipur, Mizoram, Nagaland, and Tripura, the threshold is \u20B920 lakh. Once turnover exceeds these limits in a financial year, registration becomes mandatory within 30 days under Section 22 of the CGST Act."}},{"@type":"Question","name":"What is the GST registration limit for services?","acceptedAnswer":{"@type":"Answer","text":"Service providers must register for GST when aggregate turnover exceeds \u20B920 lakh per year in normal category states. In special category states the threshold is \u20B910 lakh. This applies to all types of services including consulting, IT, legal, accounting, and professional services. The threshold is calculated on a PAN-India basis across all business verticals."}},{"@type":"Question","name":"Which states are special category states for GST registration?","acceptedAnswer":{"@type":"Answer","text":"Special category states with lower GST registration thresholds include Manipur, Mizoram, Nagaland, and Tripura where the limit is \u20B910 lakh for services and \u20B920 lakh for goods. Other northeastern states like Arunachal Pradesh, Meghalaya, Sikkim, and Assam along with Himachal Pradesh, Uttarakhand, and Jammu and Kashmir follow the normal category thresholds."}},{"@type":"Question","name":"When is GST registration compulsory regardless of turnover?","acceptedAnswer":{"@type":"Answer","text":"GST registration is mandatory regardless of turnover for interstate suppliers, e-commerce sellers, casual taxable persons, non-resident taxable persons, persons liable to pay tax under reverse charge, agents and principals, Input Service Distributors, TDS deductors under GST, and online service providers supplying from outside India to persons in India."}},{"@type":"Question","name":"Do I need GST registration for selling on Amazon or Flipkart?","acceptedAnswer":{"@type":"Answer","text":"Yes, GST registration is mandatory for all sellers on e-commerce platforms like Amazon, Flipkart, Meesho, and Myntra regardless of turnover. This requirement is under Section 24(ix) of the CGST Act. Even if your annual sales are below \u20B940 lakh, you must obtain GST registration before listing products on any e-commerce marketplace in India."}},{"@type":"Question","name":"What is aggregate turnover for GST registration purposes?","acceptedAnswer":{"@type":"Answer","text":"Aggregate turnover includes the total value of all taxable supplies, exempt supplies, exports, and interstate supplies made by a person with the same PAN across India. It excludes inward supplies under reverse charge, GST taxes, and cess. The calculation is done on a PAN-India basis not state-wise, meaning all business verticals under one PAN are combined."}},{"@type":"Question","name":"What is the penalty for not registering under GST?","acceptedAnswer":{"@type":"Answer","text":"If a business fails to register under GST despite being liable, a penalty of 10 percent of the tax due or \u20B910,000 whichever is higher is imposed under Section 122 of the CGST Act. If tax evasion is established, the penalty can be 100 percent of the tax amount. Additionally, the business cannot claim Input Tax Credit and any tax collected without registration is illegal."}},{"@type":"Question","name":"Can I voluntarily register for GST below the threshold limit?","acceptedAnswer":{"@type":"Answer","text":"Yes, any business can voluntarily register for GST under Section 25(3) of the CGST Act even if turnover is below the threshold. Benefits include claiming Input Tax Credit on purchases, enhanced business credibility with clients and vendors, eligibility to supply to government departments, and ability to make interstate supplies without threshold concerns."}},{"@type":"Question","name":"What is the GST composition scheme eligibility?","acceptedAnswer":{"@type":"Answer","text":"The composition scheme is available for businesses with aggregate turnover up to \u20B91.5 crore for goods manufacturers and traders. Service providers with turnover up to \u20B950 lakh can opt for the composition scheme at 6 percent tax rate. Composition dealers pay tax at reduced rates quarterly via CMP-08 and file annual return GSTR-4. They cannot collect GST from customers."}},{"@type":"Question","name":"Is interstate supply automatically requiring GST registration?","acceptedAnswer":{"@type":"Answer","text":"Yes, any person making interstate supply of goods or services must mandatorily register for GST under Section 24(i) of the CGST Act regardless of turnover. This includes selling goods or services to customers in another state or union territory. The only exception is for handicraft suppliers who are notified by the government and fall below the turnover threshold."}},{"@type":"Question","name":"How do I calculate if my turnover crosses the GST threshold?","acceptedAnswer":{"@type":"Answer","text":"Add all taxable supplies, exempt supplies, exports, and interstate supplies under the same PAN for the current financial year. Exclude GST taxes, cess, and inward supplies under reverse charge. If the total exceeds \u20B940 lakh for goods or \u20B920 lakh for services in normal states, registration is mandatory. Track turnover monthly to identify when the threshold is crossed."}},{"@type":"Question","name":"Do freelancers need GST registration in India?","acceptedAnswer":{"@type":"Answer","text":"Freelancers providing services must register for GST when their aggregate annual turnover exceeds \u20B920 lakh in normal category states or \u20B910 lakh in special category states. This applies to all freelance services including IT consulting, design, writing, and professional services. If a freelancer sells on e-commerce platforms, registration is mandatory regardless of turnover."}},{"@type":"Question","name":"What documents are required for GST registration?","acceptedAnswer":{"@type":"Answer","text":"Documents required include PAN card of the business or proprietor, Aadhaar card, business registration proof such as partnership deed or incorporation certificate, address proof of principal place of business like rent agreement or electricity bill, bank account details with cancelled cheque, and photograph of the authorized signatory. Digital Signature Certificate is needed for companies and LLPs."}}]}
</script>
@endsection

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
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
.form-group input[type="number"]{font-family:var(--font-mono);font-size:18px;font-weight:700}
.btn-calculate{width:100%;padding:14px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s,transform 0.1s;margin-top:8px}
.btn-calculate:hover{background:var(--primary-light)}
.btn-calculate:active{transform:scale(0.98)}
.btn-reset{display:inline-flex;align-items:center;gap:6px;margin-top:16px;padding:8px 16px;border:1px solid var(--border);border-radius:8px;background:var(--card);color:var(--text-muted);font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:all 0.2s}
.btn-reset:hover{border-color:var(--danger);color:var(--danger)}
.result-section{margin-top:28px;display:none}
.result-section.visible{display:block}
.result-divider{height:1px;background:var(--border);margin-bottom:24px}
.result-box{padding:24px;border-radius:var(--radius-lg);text-align:center;margin-bottom:16px}
.result-box.must-register{background:#FEF2F2;border:2px solid var(--danger)}
.result-box.must-register .result-icon{color:var(--danger);font-size:48px}
.result-box.must-register .result-title{color:#991B1B;font-size:20px;font-weight:700;margin:12px 0 8px}
.result-box.must-register .result-desc{color:#B91C1C;font-size:14px;line-height:1.6}
.result-box.not-required{background:#F0FDF4;border:2px solid var(--success)}
.result-box.not-required .result-icon{color:var(--success);font-size:48px}
.result-box.not-required .result-title{color:#065F46;font-size:20px;font-weight:700;margin:12px 0 8px}
.result-box.not-required .result-desc{color:#047857;font-size:14px;line-height:1.6}
.result-box.voluntary{background:#EFF6FF;border:2px solid var(--info)}
.result-box.voluntary .result-icon{color:var(--info);font-size:48px}
.result-box.voluntary .result-title{color:#1E40AF;font-size:20px;font-weight:700;margin:12px 0 8px}
.result-box.voluntary .result-desc{color:#1D4ED8;font-size:14px;line-height:1.6}
.reason-list{text-align:left;margin:16px auto;max-width:500px;font-size:14px;color:var(--text-secondary);line-height:1.8}
.reason-list li{margin-bottom:6px}
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
.faq-item.open .faq-answer{max-height:600px}
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
.check-item{display:flex;align-items:flex-start;gap:10px;padding:10px 0;border-bottom:1px dashed var(--border);font-size:14px;color:var(--text-secondary)}
.check-item:last-child{border-bottom:none}
.check-icon{flex-shrink:0;width:20px;height:20px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;margin-top:2px}
.check-icon.yes{background:var(--danger)}
.check-icon.no{background:var(--success)}
@media(max-width:899px){.main-layout{grid-template-columns:1fr!important;gap:24px}.sidebar-col{order:2}.content-col{order:1}}
@media(max-width:1024px){.main-layout{padding:0 16px 32px}.hero{padding:28px 16px 20px}.calc-card{padding:28px}.content-section{padding:28px}}
@media(max-width:480px){.hero{padding:20px 14px 16px}.hero h1{font-size:22px}.hero-meta{gap:8px}.badge-updated{font-size:11px;padding:3px 10px}.author-byline{font-size:12px}.tldr{padding:16px 18px}.tldr p{font-size:14px}.main-layout{padding:0 14px 24px;gap:24px}.calc-card{padding:16px;margin-bottom:24px}.calc-card h2{font-size:19px;margin-bottom:16px}.content-section{padding:16px;margin-bottom:24px}.content-section h2{font-size:20px}.content-section h3{font-size:16px}.content-section p{font-size:14px}.calc-row{gap:14px;margin-bottom:14px}.form-group label{font-size:12px}.form-group input,.form-group select{padding:10px 14px;font-size:15px}.btn-calculate{padding:12px;font-size:15px}.rate-table{font-size:12px}.rate-table thead th{padding:8px 10px;font-size:10px;letter-spacing:0}.rate-table tbody td{padding:8px 10px;font-size:12px}.formula-box{padding:14px 16px;font-size:12px;line-height:1.7}.callout{padding:14px 16px}.callout p{font-size:13px}.faq-question{padding:14px 16px;font-size:14px}.faq-answer-inner{padding:0 16px 14px;font-size:13px}.faq-icon{width:22px;height:22px;font-size:14px}.sidebar-card{padding:20px}.sidebar-card h3{font-size:15px}.sidebar-link{padding:8px 12px;font-size:13px}.cta-card{padding:22px 20px}.cta-card h3{font-size:16px}.cta-card p{font-size:13px}.cta-btn{padding:10px 24px;font-size:13px}.breadcrumb{font-size:12px;padding:12px 14px 0}.toc-nav a{padding:8px 10px;font-size:11px}.result-box .result-title{font-size:18px}.result-box .result-desc{font-size:13px}}
@media(max-width:360px){.hero h1{font-size:20px}.calc-card{padding:14px}.content-section{padding:14px}.content-section h2{font-size:18px}.rate-table thead th{font-size:9px;padding:6px 8px}.rate-table tbody td{font-size:11px;padding:6px 8px}}
</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#checker">Checker</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#thresholds">Thresholds</a>
        <a href="#compulsory">Compulsory Cases</a>
        <a href="#composition">Composition</a>
        <a href="#process">Process</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

{{-- <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>&rsaquo;</span>
    <a href="/tools/">Free Tools</a>
    <span>&rsaquo;</span>
    GST Registration Eligibility Checker
</nav> --}}

<header class="hero" id="checker">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>GST Registration Eligibility Checker &mdash; <span>Do I Need GST?</span></h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Answer 5 simple questions to find out if your business needs GST registration. The tool checks your turnover against threshold limits (&#8377;40L for goods, &#8377;20L for services), identifies compulsory registration triggers (interstate supply, e-commerce, reverse charge), and tells you whether registration is mandatory, not required, or recommended. Based on Sections 22 and 24 of the CGST Act, 2017 for FY 2025-26.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Check Your GST Registration Eligibility</h2>
            <noscript><div class="noscript-box">This checker requires JavaScript. Refer to the threshold tables below.</div></noscript>

            <div class="calc-row">
                <div class="form-group">
                    <label for="supplyType">What do you supply?</label>
                    <select id="supplyType">
                        <option value="goods">Goods only</option>
                        <option value="services">Services only</option>
                        <option value="both">Both Goods &amp; Services</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="stateCategory">Business state category</label>
                    <select id="stateCategory">
                        <option value="normal">Normal State (Maharashtra, Karnataka, TN, etc.)</option>
                        <option value="special">Special Category (Manipur, Mizoram, Nagaland, Tripura)</option>
                    </select>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="annualTurnover">Annual aggregate turnover (&#8377;)</label>
                    <input type="number" id="annualTurnover" placeholder="e.g. 3500000" min="0" step="1" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="interState">Do you make interstate supplies?</label>
                    <select id="interState">
                        <option value="no">No &mdash; only within my state</option>
                        <option value="yes">Yes &mdash; I sell to other states</option>
                    </select>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ecommerce">Do you sell on e-commerce platforms?</label>
                    <select id="ecommerce">
                        <option value="no">No</option>
                        <option value="yes">Yes (Amazon, Flipkart, Meesho, etc.)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="specialCase">Any special conditions?</label>
                    <select id="specialCase">
                        <option value="none">None of the below</option>
                        <option value="rcm">I receive supplies under Reverse Charge</option>
                        <option value="casual">I am a Casual Taxable Person</option>
                        <option value="nri">I am a Non-Resident Taxable Person</option>
                        <option value="agent">I act as Agent / Principal for others</option>
                        <option value="isd">I am an Input Service Distributor</option>
                        <option value="tds">I deduct TDS under GST</option>
                    </select>
                </div>
            </div>

            <button class="btn-calculate" onclick="checkEligibility()">Check GST Registration Eligibility</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div id="resultOutput"></div>
                <button class="btn-reset" onclick="resetChecker()">&#8634; Check Again</button>
            </div>
        </div>

        <!-- How to Use -->
        <section class="content-section" id="how-to-use">
            <h2>How to Use the GST Registration Eligibility Checker</h2>
            <p>This tool evaluates your business against the GST registration rules under <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">Sections 22 and 24 of the CGST Act, 2017</a>. Follow these steps:</p>
            <h3>Step 1 &mdash; Select Supply Type</h3>
            <p>Choose whether your business deals in goods, services, or both. This determines which turnover threshold applies &mdash; &#8377;40 lakh for goods or &#8377;20 lakh for services in normal states.</p>
            <h3>Step 2 &mdash; Enter Turnover &amp; State</h3>
            <p>Enter your aggregate annual turnover and select whether your business is in a normal category state or a special category state (Manipur, Mizoram, Nagaland, Tripura). Special category states have lower thresholds.</p>
            <h3>Step 3 &mdash; Check Special Conditions</h3>
            <p>Indicate if you make interstate supplies, sell on e-commerce platforms, or fall under any compulsory registration category. These conditions override turnover thresholds &mdash; registration becomes mandatory regardless of how much you earn.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Even if your turnover is below the threshold, consider voluntary GST registration if you supply to other registered businesses. Without GST, your B2B customers cannot claim Input Tax Credit on purchases from you, which makes you less competitive. Many businesses register voluntarily for this reason alone.</p>
            </div>
        </section>

        <!-- Thresholds -->
        <section class="content-section" id="thresholds">
            <h2>GST Registration Threshold Limits for FY 2025&ndash;26</h2>
            <p>The <a href="https://gstcouncil.gov.in/" target="_blank" rel="noopener">GST Council</a> has set different turnover thresholds based on supply type and state category. These limits were revised at the 32nd GST Council Meeting effective from April 2019 and remain unchanged for FY 2025-26:</p>

            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Supply Type</th><th>Normal States</th><th>Special Category States</th></tr></thead>
                <tbody>
                    <tr><td><strong>Goods only</strong></td><td>&#8377;40 lakh</td><td>&#8377;20 lakh</td></tr>
                    <tr><td><strong>Services only</strong></td><td>&#8377;20 lakh</td><td>&#8377;10 lakh</td></tr>
                    <tr><td><strong>Both Goods &amp; Services</strong></td><td>&#8377;20 lakh (lower limit applies)</td><td>&#8377;10 lakh</td></tr>
                </tbody>
            </table>
            </div>

            <p>Normal category states include Maharashtra, Karnataka, Tamil Nadu, Gujarat, Delhi, Uttar Pradesh, Rajasthan, West Bengal, Andhra Pradesh, Telangana, Kerala, Punjab, Haryana, Bihar, Jharkhand, Chhattisgarh, Madhya Pradesh, Odisha, Goa, Himachal Pradesh, Uttarakhand, Assam, Jammu &amp; Kashmir, Ladakh, and all Union Territories except those in special category.</p>

            <p>Special category states with the lowest thresholds are Manipur, Mizoram, Nagaland, and Tripura. Other northeastern states (Arunachal Pradesh, Meghalaya, Sikkim) follow normal category limits as per the latest <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC notifications</a>.</p>

            <div class="formula-box">
                <span class="label">Aggregate Turnover Includes:</span><br>
                Taxable supplies + Exempt supplies + Exports + Interstate supplies<br><br>
                <span class="label">Excludes:</span><br>
                GST taxes &amp; cess + Inward supplies under Reverse Charge + Non-GST supplies<br><br>
                <span class="label">Important:</span> Calculated on PAN-India basis (not state-wise)
            </div>
        </section>

        <!-- Compulsory Registration -->
        <section class="content-section" id="compulsory">
            <h2>When is GST Registration Compulsory Regardless of Turnover?</h2>
            <p>Section 24 of the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act</a> lists categories of persons who must register for GST irrespective of their aggregate turnover. If you fall under any of these, the threshold limits do not apply:</p>

            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Category</th><th>Section</th><th>Who It Covers</th></tr></thead>
                <tbody>
                    <tr><td>Interstate suppliers</td><td>24(i)</td><td>Anyone selling goods or services to another state/UT</td></tr>
                    <tr><td>Casual taxable persons</td><td>24(ii)</td><td>Temporary business in a state where they have no fixed place</td></tr>
                    <tr><td>Reverse charge recipients</td><td>24(iii)</td><td>Persons required to pay tax under reverse charge mechanism</td></tr>
                    <tr><td>E-commerce sellers</td><td>24(ix)</td><td>Suppliers selling through Amazon, Flipkart, Meesho, etc.</td></tr>
                    <tr><td>E-commerce operators</td><td>24(x)</td><td>Platforms like Amazon, Swiggy, Zomato that collect TCS</td></tr>
                    <tr><td>Non-resident taxable persons</td><td>24(v)</td><td>Foreign persons doing business in India</td></tr>
                    <tr><td>Agents / Principals</td><td>24(vii)</td><td>Persons selling on behalf of others</td></tr>
                    <tr><td>Input Service Distributors</td><td>24(viii)</td><td>Businesses distributing ITC across multiple GSTINs</td></tr>
                    <tr><td>TDS deductors</td><td>24(vi)</td><td>Government departments and specified persons deducting TDS under GST</td></tr>
                    <tr><td>Online gaming operators</td><td>24(xia)</td><td>Persons supplying online money gaming from outside India</td></tr>
                </tbody>
            </table>
            </div>

            <div class="callout warn">
                <p><strong>Important:</strong> The penalty for not registering when required is 10% of the tax due or &#8377;10,000 whichever is higher under Section 122 of the CGST Act. If tax evasion is proved, the penalty can go up to 100% of the tax amount. Register within 30 days of becoming liable on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a>.</p>
            </div>
        </section>

        <!-- Composition Scheme -->
        <section class="content-section" id="composition">
            <h2>GST Composition Scheme &mdash; Alternative for Small Businesses</h2>
            <p>If your turnover is above the registration threshold but below &#8377;1.5 crore (for goods) or &#8377;50 lakh (for services), you may opt for the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST Composition Scheme</a> which offers simplified compliance:</p>

            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Business Type</th><th>Turnover Limit</th><th>Tax Rate</th></tr></thead>
                <tbody>
                    <tr><td>Manufacturers</td><td>Up to &#8377;1.5 Crore</td><td>1% (0.5% CGST + 0.5% SGST)</td></tr>
                    <tr><td>Traders</td><td>Up to &#8377;1.5 Crore</td><td>1% (0.5% CGST + 0.5% SGST)</td></tr>
                    <tr><td>Restaurants (no alcohol)</td><td>Up to &#8377;1.5 Crore</td><td>5% (2.5% CGST + 2.5% SGST)</td></tr>
                    <tr><td>Service providers</td><td>Up to &#8377;50 Lakh</td><td>6% (3% CGST + 3% SGST)</td></tr>
                </tbody>
            </table>
            </div>
            <p>Composition dealers cannot make interstate supplies, cannot collect GST from customers, cannot claim Input Tax Credit, and must file only CMP-08 quarterly and GSTR-4 annually. This scheme is ideal for small businesses selling locally to end consumers.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> The composition scheme works best for B2C businesses with minimal input costs. If your business has significant purchases on which GST is paid, you will lose the ITC benefit under composition. The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> recommends running both calculations before opting for composition to ensure it actually saves money versus regular registration.</p>
            </div>
        </section>

        <!-- Process -->
        <section class="content-section" id="process">
            <h2>GST Registration Process &mdash; Step by Step</h2>
            <p>GST registration is entirely online through the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal (gst.gov.in)</a>. The process is free of government charges. Here is the step-by-step procedure:</p>

            <h3>Documents Required</h3>
            <p>PAN card (mandatory), Aadhaar card, business registration proof (partnership deed, incorporation certificate, or shop act licence), address proof of business premises (rent agreement or electricity bill), bank account details with cancelled cheque, photographs of authorised signatory, and Digital Signature Certificate for companies and LLPs.</p>

            <h3>Registration Timeline</h3>
            <p>Once applied, GST registration is typically processed within 3&ndash;7 working days. Aadhaar-authenticated applications are processed faster. If the officer raises a query, you have 7 days to respond. After approval, a 15-digit GSTIN is issued and you can begin issuing tax invoices and collecting GST immediately.</p>

            <h3>After Registration</h3>
            <p>Once registered, you must file GSTR-1 (outward supplies) and GSTR-3B (summary return) monthly or quarterly depending on turnover. You must also maintain proper books of account as per Section 35 of the CGST Act. Non-filing of returns for 6 months can lead to registration cancellation. Learn more about GST return due dates using our <a href="/tools/gst-return-due-date-tracker">GST Return Due Date Tracker</a>.</p>

            <div class="callout warn">
                <p><strong>Compliance Note:</strong> From April 2025, mandatory Input Service Distributor (ISD) registration is required for businesses operating multiple GSTINs under the same PAN. This is a significant change introduced by the <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> that affects multi-state businesses.</p>
            </div>
        </section>

        <!-- CTA -->
        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need help with GST registration?</strong> Our Chartered Accountants handle the complete registration process &mdash; document preparation, portal filing, and post-registration compliance setup. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Registration%20Eligibility%20Checker.%20I%20need%20help%20with%20GST%20registration.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <!-- FAQs -->
        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About GST Registration</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need GST Registration?</h3>
            <p>Our CAs handle the complete GST registration process &mdash; documents, filing, and compliance setup across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20GST%20registration.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-returns-for-e-commerce-operator" class="sidebar-link">E-Commerce GST Returns <span class="arrow">&rarr;</span></a>
            <a href="/gst-return-filing-for-freelancers" class="sidebar-link">GST for Freelancers <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-return-due-date-tracker" class="sidebar-link">GST Due Date Tracker <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
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
function fmt(n){return '\u20B9'+Math.round(n).toLocaleString('en-IN');}

function checkEligibility(){
    var supply=document.getElementById('supplyType').value;
    var state=document.getElementById('stateCategory').value;
    var turnover=parseFloat(document.getElementById('annualTurnover').value)||0;
    var interstate=document.getElementById('interState').value;
    var ecom=document.getElementById('ecommerce').value;
    var special=document.getElementById('specialCase').value;

    var reasons=[];
    var mustRegister=false;

    // Check compulsory conditions first
    if(interstate==='yes'){mustRegister=true;reasons.push('You make interstate supplies (Section 24(i))');}
    if(ecom==='yes'){mustRegister=true;reasons.push('You sell on e-commerce platforms (Section 24(ix))');}
    if(special==='rcm'){mustRegister=true;reasons.push('You receive supplies under Reverse Charge Mechanism (Section 24(iii))');}
    if(special==='casual'){mustRegister=true;reasons.push('You are a Casual Taxable Person (Section 24(ii))');}
    if(special==='nri'){mustRegister=true;reasons.push('You are a Non-Resident Taxable Person (Section 24(v))');}
    if(special==='agent'){mustRegister=true;reasons.push('You act as Agent/Principal (Section 24(vii))');}
    if(special==='isd'){mustRegister=true;reasons.push('You are an Input Service Distributor (Section 24(viii))');}
    if(special==='tds'){mustRegister=true;reasons.push('You deduct TDS under GST (Section 24(vi))');}

    // Check turnover threshold
    var threshold=0;
    if(supply==='goods'){threshold=state==='normal'?4000000:2000000;}
    else{threshold=state==='normal'?2000000:1000000;}// services or both

    if(turnover>threshold){
        mustRegister=true;
        reasons.push('Your turnover ('+fmt(turnover)+') exceeds the threshold of '+fmt(threshold)+' for '+(supply==='goods'?'goods':'services')+' in '+(state==='normal'?'normal':'special category')+' states (Section 22)');
    }

    var html='';
    if(mustRegister){
        html='<div class="result-box must-register">';
        html+='<div class="result-icon">\u26A0\uFE0F</div>';
        html+='<div class="result-title">GST Registration is MANDATORY</div>';
        html+='<div class="result-desc">Based on your inputs, you are required to register under GST. Apply within 30 days on gst.gov.in.</div>';
        html+='<ul class="reason-list">';
        reasons.forEach(function(r){html+='<li>\u2022 '+r+'</li>';});
        html+='</ul>';
        html+='</div>';
    } else if(turnover>0 && turnover<=threshold){
        var pct=Math.round((turnover/threshold)*100);
        html='<div class="result-box not-required">';
        html+='<div class="result-icon">\u2705</div>';
        html+='<div class="result-title">GST Registration is NOT Required</div>';
        html+='<div class="result-desc">Your turnover ('+fmt(turnover)+') is below the threshold of '+fmt(threshold)+'. You are at '+pct+'% of the limit.</div>';
        if(pct>=75){
            html+='<div style="margin-top:12px;padding:12px;background:#FFFBEB;border-radius:8px;font-size:13px;color:#92400E;"><strong>\u26A0 Approaching threshold!</strong> Your turnover is at '+pct+'% of the limit. Consider registering proactively to avoid last-minute compliance rush.</div>';
        }
        html+='<ul class="reason-list">';
        html+='<li>\u2022 Threshold for '+(supply==='goods'?'goods':'services')+' in '+(state==='normal'?'normal':'special category')+' states: '+fmt(threshold)+'</li>';
        html+='<li>\u2022 Your current turnover: '+fmt(turnover)+' ('+pct+'% of limit)</li>';
        html+='<li>\u2022 You can still register voluntarily under Section 25(3)</li>';
        html+='</ul>';
        html+='</div>';
    } else {
        html='<div class="result-box voluntary">';
        html+='<div class="result-icon">\u2139\uFE0F</div>';
        html+='<div class="result-title">Enter Your Turnover to Check</div>';
        html+='<div class="result-desc">Please enter your annual aggregate turnover to check threshold eligibility. If you have a compulsory registration condition, the result will show above regardless of turnover.</div>';
        html+='</div>';
    }

    document.getElementById('resultOutput').innerHTML=html;
    document.getElementById('resultSection').classList.add('visible');
    document.getElementById('resultSection').scrollIntoView({behavior:'smooth',block:'nearest'});
}

function resetChecker(){
    document.getElementById('supplyType').selectedIndex=0;
    document.getElementById('stateCategory').selectedIndex=0;
    document.getElementById('annualTurnover').value='';
    document.getElementById('interState').selectedIndex=0;
    document.getElementById('ecommerce').selectedIndex=0;
    document.getElementById('specialCase').selectedIndex=0;
    document.getElementById('resultSection').classList.remove('visible');
}

document.getElementById('annualTurnover').addEventListener('keydown',function(e){if(e.key==='Enter')checkEligibility();});

var FAQS=[
{q:"What is the GST registration limit for goods in India?",a:"The threshold for goods is \u20B940 lakh annual turnover in normal category states and \u20B920 lakh in special category states (Manipur, Mizoram, Nagaland, Tripura). Once your aggregate turnover exceeds this limit during a financial year, you must apply for GST registration within 30 days under Section 22 of the CGST Act."},
{q:"What is the GST registration limit for services?",a:"Service providers must register when aggregate turnover exceeds \u20B920 lakh in normal states and \u20B910 lakh in special category states. This covers all services including consulting, IT, legal, design, and professional services. If you supply both goods and services, the lower services threshold (\u20B920 lakh / \u20B910 lakh) applies."},
{q:"Which states are special category states for GST?",a:"Special category states with the lowest thresholds (\u20B910 lakh for services, \u20B920 lakh for goods) are Manipur, Mizoram, Nagaland, and Tripura. Other northeastern states like Arunachal Pradesh, Meghalaya, Sikkim, and Assam now follow normal category thresholds (\u20B920 lakh for services, \u20B940 lakh for goods) as per the latest CBIC notifications."},
{q:"When is GST registration compulsory regardless of turnover?",a:"Compulsory registration applies for interstate suppliers, e-commerce sellers, casual taxable persons, non-resident taxable persons, reverse charge recipients, agents and principals, Input Service Distributors, TDS deductors under GST, and online service providers from outside India. Section 24 of the CGST Act overrides all turnover thresholds for these categories."},
{q:"Do I need GST for selling on Amazon or Flipkart?",a:"Yes, GST registration is mandatory for all e-commerce sellers under Section 24(ix) regardless of turnover. Even if your annual sales are below \u20B940 lakh, you must register before listing on any marketplace. This applies to Amazon, Flipkart, Meesho, Myntra, Shopify-based stores selling via aggregators, and all similar platforms."},
{q:"What is aggregate turnover for GST purposes?",a:"Aggregate turnover is the total of taxable supplies, exempt supplies, exports, and interstate supplies calculated on a PAN-India basis. It excludes GST taxes, cess, inward supplies under reverse charge, and non-GST supplies. All business verticals under one PAN are combined regardless of how many states you operate in."},
{q:"What is the penalty for not registering under GST?",a:"The penalty is 10% of tax due or \u20B910,000 whichever is higher under Section 122 of the CGST Act. For tax evasion, it can be 100% of tax amount. Additionally, unregistered businesses cannot claim Input Tax Credit, and any GST collected without registration is considered illegal. Register within 30 days of becoming liable to avoid penalties."},
{q:"Can I voluntarily register for GST below the threshold?",a:"Yes, Section 25(3) of the CGST Act allows voluntary registration regardless of turnover. Benefits include claiming Input Tax Credit on purchases, enhanced credibility with B2B clients, eligibility for government contracts requiring GSTIN, and ability to make interstate supplies without threshold concerns. Once registered, all GST compliance requirements apply."},
{q:"What is the GST composition scheme eligibility?",a:"The composition scheme is available for goods manufacturers and traders with turnover up to \u20B91.5 crore, and service providers up to \u20B950 lakh. Tax rates are 1% for manufacturers and traders, 5% for restaurants, and 6% for services. Composition dealers cannot make interstate supplies, collect GST, or claim ITC. They file CMP-08 quarterly and GSTR-4 annually."},
{q:"Is interstate supply automatically requiring registration?",a:"Yes, making any interstate supply of goods or services requires mandatory GST registration under Section 24(i) regardless of turnover. This includes selling to customers in other states or union territories. The only exception is notified handicraft suppliers below the threshold. All other interstate suppliers must register before commencing such supplies."},
{q:"How do I calculate if my turnover crosses the threshold?",a:"Add all taxable supplies, exempt supplies, exports, and interstate supplies under the same PAN for the current financial year. Exclude GST taxes, cess, and reverse charge inward supplies. Compare the total against \u20B940 lakh for goods or \u20B920 lakh for services in normal states. Monitor turnover monthly to identify when the threshold is approaching."},
{q:"Do freelancers need GST registration?",a:"Freelancers providing services must register when turnover exceeds \u20B920 lakh in normal states or \u20B910 lakh in special states. This covers IT consulting, design, writing, coaching, and all professional services. If you sell through e-commerce platforms or provide services to clients in other states, registration is mandatory regardless of turnover amount."},
{q:"What documents are required for GST registration?",a:"Key documents include PAN card, Aadhaar card, business registration proof (partnership deed, incorporation certificate, or shop licence), address proof of premises (rent agreement or utility bill), bank account details with cancelled cheque, photograph of authorised signatory, and Digital Signature Certificate for companies and LLPs. The application is filed free on gst.gov.in."}
];

function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}

function toggleFaq(btn){var item=btn.closest('.faq-item');var isOpen=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!isOpen)item.classList.add('open');}

var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var current='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)current=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+current);});});

document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection
