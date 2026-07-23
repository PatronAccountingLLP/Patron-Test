@extends('layouts.app')
@section('meta')
<title>ESOP Dilution Calculator | Cap Table &amp; Funding Impact</title>
<meta name="description" content="ESOP dilution calculator: model pool dilution across 2 funding rounds, pre-money vs post-money pool expansion, founder dilution, investor split &amp; cap table.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-dilution-calculator">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-dilution-calculator">
<meta property="og:title" content="Dilution Impact Calculator — ESOP Cap Table Tool 2026">
<meta property="og:description" content="Model ESOP pool dilution across 2 funding rounds. Pre-money vs post-money pool expansion, founder dilution, full cap table.">
<meta property="og:image" content="/og/esop-dilution-calculator.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Dilution Impact Calculator — ESOP Cap Table Tool 2026">
<meta name="twitter:description" content="Model ESOP pool dilution across 2 funding rounds. Pre-money vs post-money expansion side-by-side.">
<meta name="twitter:image" content="/og/esop-dilution-calculator.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"Dilution Impact Calculator","description":"Dilution Impact Calculator simulates ESOP pool dilution and founder ownership across two funding rounds for Indian startups. Takes current cap table (founder %, existing investor %, ESOP pool %), proposed pool top-up target, and planned funding rounds (raise + pre-money valuation). Outputs side-by-side pre-money pool expansion vs post-money pool expansion, founder dilution per scenario in percentage points and relative terms, investor-vs-founder dilution split, full 2-round cap table simulation, and the rupee cost of the option pool shuffle at current valuation.","url":"/tools/esop-dilution-calculator","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Dilution Impact Calculator","item":"/tools/esop-dilution-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"What is the option pool shuffle and how does it dilute founders?","acceptedAnswer":{"@type":"Answer","text":"The option pool shuffle is the standard investor practice of requiring the ESOP pool to be created or topped up before the new investment closes. Because the pool is carved out of the pre-money valuation, only the founders and prior investors absorb the dilution from the pool expansion — the new investor's percentage is calculated on the post-money valuation that already includes the enlarged pool. This typically costs founders 3 to 8 additional percentage points compared to a post-money pool expansion."}},
{"@type":"Question","name":"What is the difference between pre-money and post-money pool expansion?","acceptedAnswer":{"@type":"Answer","text":"In pre-money pool expansion the option pool is enlarged before the new investor's money comes in, so existing shareholders (founders and prior investors) bear the entire dilution. In post-money pool expansion the pool is enlarged after the round, so the dilution is shared by all shareholders including the new investor. Pre-money is investor-friendly and the default in most term sheets. Post-money is founder-friendly and must be specifically negotiated."}},
{"@type":"Question","name":"How is post-money valuation calculated?","acceptedAnswer":{"@type":"Answer","text":"Post-money valuation equals pre-money valuation plus the new investment. If pre-money is ₹100 crore and the investor injects ₹25 crore, post-money is ₹125 crore. The new investor's ownership equals investment divided by post-money, which is ₹25 crore divided by ₹125 crore equals 20 percent. This figure assumes a fully-diluted basis including the ESOP pool."}},
{"@type":"Question","name":"What is a typical ESOP pool size at Seed and Series A in India?","acceptedAnswer":{"@type":"Answer","text":"In the Indian startup ecosystem, typical ESOP pool sizes are 8 to 12 percent at Seed stage, 10 to 15 percent at Series A, and 12 to 18 percent at Series B. Larger pools are sometimes demanded by investors who plan aggressive hiring, but founders should push back with a documented 18 to 24 month hiring plan that justifies the pool size based on actual offers rather than rule of thumb."}},
{"@type":"Question","name":"How much dilution is normal per funding round?","acceptedAnswer":{"@type":"Answer","text":"Indian benchmarks: Angel and Pre-Seed rounds 5 to 15 percent investor stake, Seed rounds 15 to 25 percent, Series A rounds 20 to 30 percent, Series B rounds 15 to 20 percent, and Series C rounds 10 to 15 percent. Add 3 to 8 percentage points of additional founder dilution for the option pool shuffle if the pool is pre-money. Negotiating leverage from multiple competing term sheets remains the strongest lever to reduce dilution."}},
{"@type":"Question","name":"Does the new investor benefit when the ESOP pool is expanded pre-money?","acceptedAnswer":{"@type":"Answer","text":"Yes, indirectly. By insisting the pool sits in the pre-money valuation, the new investor effectively buys at a lower share price than the headline pre-money implies. The pool absorbs a slice of the pre-money that the investor would otherwise have paid for. This is why the structure is sometimes called a hidden valuation reduction — the term sheet's pre-money figure overstates the founders' real economic worth."}},
{"@type":"Question","name":"Can founders negotiate post-money pool expansion?","acceptedAnswer":{"@type":"Answer","text":"Yes. Founders can negotiate either a post-money pool, a smaller pre-money pool backed by a 12-month hiring plan, or a higher headline pre-money valuation that offsets the option pool shuffle dilution. The strength of this negotiation depends on the number of competing term sheets, the company's traction, and the investor's eagerness to close. Always model both scenarios in cap table form before signing the term sheet."}},
{"@type":"Question","name":"What is anti-dilution protection and how does it interact with pool expansion?","acceptedAnswer":{"@type":"Answer","text":"Anti-dilution clauses protect investors from down rounds — situations where a future round closes at a lower valuation than they paid. Broad-based weighted average is the most founder-friendly variant. Full ratchet is the most punitive, resetting the prior investor's effective price to the new lower round price and massively diluting founders. Anti-dilution applies to the price per share, not pool expansion directly, but combines with the option pool shuffle in down rounds to amplify founder pain."}},
{"@type":"Question","name":"How does pool expansion affect existing investors?","acceptedAnswer":{"@type":"Answer","text":"In pre-money pool expansion, existing investors are diluted in proportion to their ownership before the round — though usually less than the founders because the dilution is split between founders and prior investors. In post-money expansion, all shareholders including the new investor share the pool dilution. Existing investors typically prefer pre-money because it preserves their post-round percentage at the new investor's expense."}},
{"@type":"Question","name":"Should the ESOP pool be at the right size before or after a round?","acceptedAnswer":{"@type":"Answer","text":"The pool should be sized based on the actual 18 to 24 month hiring plan, not investor rules of thumb. Build a hiring plan: number of hires by role, equity grant per role, total options needed. Multiply by 1.25 for buffer. If existing pool is short of this number, top up only the shortfall — not the full investor request. This single discipline often saves founders 2 to 4 percentage points of dilution per round."}},
{"@type":"Question","name":"What is fully-diluted ownership in cap table calculations?","acceptedAnswer":{"@type":"Answer","text":"Fully-diluted ownership assumes all outstanding shares, granted options, unvested options, convertible notes, SAFEs, and the entire ESOP pool have been converted to common stock. It is the basis on which investors calculate dilution and valuation. Issued-only or vested-only metrics understate dilution. Always present fully-diluted percentages in cap table discussions to align with how investors compute their stake."}},
{"@type":"Question","name":"How does the Dilution Impact Calculator handle convertible notes or SAFEs?","acceptedAnswer":{"@type":"Answer","text":"This calculator handles straight equity rounds — pre-money valuation, raise size, and pool expansion. It does not model convertible notes, SAFEs with discount or cap, MFN clauses, or anti-dilution adjustments. Real-world rounds often involve these instruments and a CA or VC lawyer must compute fully-diluted ownership before signing. Use this calculator for first-pass directional analysis only."}},
{"@type":"Question","name":"Is this Dilution Impact Calculator a substitute for a CA opinion?","acceptedAnswer":{"@type":"Answer","text":"No. This calculator provides directional cap table modelling for pre-money and post-money ESOP pool expansion across two rounds. Actual investment closings involve liquidation preferences, participation rights, anti-dilution provisions, pro-rata rights, convertible securities, SAFE conversions, FEMA pricing rules, and Section 56(2)(viib) angel tax considerations that materially affect the cap table. Always consult a Chartered Accountant and a VC lawyer before signing any term sheet."}}
]}
</script>
@endsection
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
:root{--primary:#15365f;--primary-light:#1f4a7a;--primary-dark:#0a2240;--accent:#f26522;--accent-light:#ff8347;--surface:#FAFAF8;--surface-alt:#F0EFEB;--card:#FFFFFF;--text:#414042;--text-secondary:#555555;--text-muted:#888888;--border:#E5E5E0;--success:#059669;--info:#0EA5E9;--danger:#DC2626;--radius:12px;--radius-lg:20px;--shadow-sm:0 1px 3px rgba(0,0,0,0.06);--shadow-md:0 4px 16px rgba(0,0,0,0.08);--shadow-lg:0 8px 32px rgba(0,0,0,0.1);--font-body:'DM Sans',sans-serif;--font-mono:'Space Mono',monospace}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:var(--font-body);background:var(--surface);color:var(--text);line-height:1.65;-webkit-font-smoothing:antialiased}
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
.brand-cta-bar{background:#FFEDD5;border-top:1px solid #FED7AA;border-bottom:1px solid #FED7AA;padding:14px 20px}
.brand-cta-bar-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:16px;flex-wrap:wrap}
.brand-cta-bar-text{flex:1 1 320px;font-size:14px;color:var(--text);line-height:1.45}
.brand-cta-bar-text strong{color:var(--text);font-weight:700}
.brand-cta-bar-actions{display:flex;gap:10px;flex-wrap:wrap}
.brand-cta-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 18px;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:700;text-decoration:none;border:0;cursor:pointer;transition:transform 0.15s ease,box-shadow 0.15s ease,background 0.2s ease;-webkit-tap-highlight-color:transparent;touch-action:manipulation;white-space:nowrap;line-height:1.2;min-height:44px}
.brand-cta-btn:hover{transform:translateY(-1px);box-shadow:0 4px 12px rgba(0,0,0,0.12)}
.brand-cta-btn:active{transform:translateY(0)}
.brand-cta-btn .ico{width:16px;height:16px;flex-shrink:0}
.brand-cta-btn-call{background:var(--accent);color:#fff}
.brand-cta-btn-call:hover{background:var(--accent-light);color:#fff}
.brand-cta-btn-wa{background:#25D366;color:#fff}
.brand-cta-btn-wa:hover{background:#1FB855;color:#fff}
.brand-cta-btn-email{background:#fff;color:var(--text);border:1px solid #E5D6C5}
.brand-cta-btn-email:hover{background:#FAFAF8;color:var(--text)}
.brand-cta-stack{display:flex;flex-direction:column;gap:8px}
.brand-cta-stack .brand-cta-btn{width:100%}
.body-cta .brand-cta-bar-actions{justify-content:center;margin-top:4px}
.body-cta .brand-cta-btn-email{background:rgba(255,255,255,0.95);border-color:rgba(255,255,255,0.95)}
.body-cta .brand-cta-btn-email:hover{background:#fff;border-color:#fff}
.cta-card .brand-cta-btn-email{background:rgba(255,255,255,0.95);border-color:rgba(255,255,255,0.95)}
.cta-card .brand-cta-btn-email:hover{background:#fff;border-color:#fff}
.post-result-cta{background:#FFF7ED;border:1px solid #FED7AA;border-left:4px solid var(--accent);border-radius:var(--radius);padding:18px 20px;margin:20px 0 4px}
.post-result-cta-head{font-size:15px;font-weight:700;color:var(--text);margin-bottom:4px;line-height:1.4}
.post-result-cta-sub{font-size:13px;color:var(--text-secondary);margin-bottom:14px;line-height:1.55}
.post-result-cta .brand-cta-bar-actions{gap:8px}
.body-cta{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;border-radius:var(--radius-lg);padding:28px 32px;margin:24px 0 32px;text-align:center}
.body-cta h3{color:#fff;font-size:22px;margin-bottom:8px;font-weight:700}
.body-cta p{color:rgba(255,255,255,0.85);margin-bottom:18px;line-height:1.6;font-size:14px}
.tldr{background:var(--card);border-left:4px solid var(--accent);border-radius:0 var(--radius) var(--radius) 0;padding:20px 24px;margin:0 auto 32px;max-width:1200px;box-shadow:var(--shadow-sm)}
.tldr-label{font-family:var(--font-mono);font-size:12px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px}
.tldr p{font-size:15px;color:var(--text-secondary);line-height:1.7}
.main-layout{max-width:1200px;margin:0 auto;padding:0 20px 40px;display:grid;grid-template-columns:1fr;gap:32px}
@media (min-width:768px){.main-layout{grid-template-columns:1fr 320px;gap:40px}}
.content-col{min-width:0}.sidebar-col{min-width:0}
.calc-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);padding:32px;margin-bottom:40px;border:1px solid var(--border)}
.calc-card h2{font-size:22px;font-weight:700;color:var(--primary-dark);margin-bottom:8px}
.calc-card .sub{font-size:13px;color:var(--text-muted);margin-bottom:22px}
.calc-row{display:grid;grid-template-columns:1fr;gap:20px;margin-bottom:20px}
@media (min-width:600px){.calc-row{grid-template-columns:1fr 1fr}.calc-row.three-col{grid-template-columns:1fr 1fr 1fr}}
.form-group label{display:block;font-size:12px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:0.5px}
.form-group label .hint{display:block;font-size:11px;color:var(--text-muted);font-weight:500;text-transform:none;letter-spacing:0;margin-top:2px}
.form-group input,.form-group select{width:100%;padding:12px 16px;border:2px solid var(--border);border-radius:var(--radius);font-family:var(--font-body);font-size:16px;color:var(--text);background:var(--surface);outline:2px solid transparent;outline-offset:1px;transition:border-color 0.2s}
.form-group input:focus-visible,.form-group select:focus-visible{border-color:var(--primary);outline-color:var(--primary)}
.form-group input[type="number"],.form-group input[type="text"]{font-family:var(--font-mono);font-size:17px;font-weight:700}
.section-title{font-family:var(--font-mono);font-size:11px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin:24px 0 12px;padding-bottom:6px;border-bottom:1px dashed var(--border)}
.btn-calculate{width:100%;padding:16px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s,transform 0.1s;margin-top:12px;min-height:52px}
.btn-calculate:hover{background:var(--primary-light)}
.btn-calculate:active{transform:scale(0.98)}
.btn-calculate:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.result-section{margin-top:28px;display:none}
.result-section.visible{display:block}
.result-divider{height:1px;background:var(--border);margin-bottom:24px}
.result-headline{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;padding:24px 28px;border-radius:var(--radius);margin-bottom:16px}
.result-headline .label{font-family:var(--font-mono);font-size:11px;text-transform:uppercase;letter-spacing:1.5px;opacity:0.85;margin-bottom:6px}
.result-headline .value{font-family:var(--font-mono);font-size:32px;font-weight:700;line-height:1.1;margin-bottom:6px;word-break:break-word}
.result-headline .accent{color:var(--accent-light)}
.result-headline .meta{font-size:13px;opacity:0.9;margin-top:6px}
.summary-grid{display:grid;grid-template-columns:1fr;gap:12px;margin-bottom:16px}
@media (min-width:600px){.summary-grid{grid-template-columns:1fr 1fr}}
.summary-card{background:var(--surface);border-radius:var(--radius);padding:16px 18px;border:1px solid var(--border)}
.summary-card.highlight{background:#FFF7ED;border-color:var(--accent)}
.summary-card .v-label{font-family:var(--font-mono);font-size:10px;color:var(--accent);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:4px}
.summary-card .v-val{font-family:var(--font-mono);font-size:22px;font-weight:700;color:var(--primary-dark);word-break:break-word}
.summary-card .v-desc{font-size:12px;color:var(--text-secondary);margin-top:4px;line-height:1.5}
.captable-block{background:var(--surface-alt);border-radius:var(--radius);padding:18px 22px;margin-top:16px;overflow-x:auto}
.captable-block h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:12px;font-weight:700}
.captable-block h4 .badge{display:inline-block;margin-left:8px;padding:2px 8px;border-radius:4px;font-size:9px;font-family:var(--font-body);letter-spacing:0.5px}
.captable-block h4 .badge-pre{background:#FEE2E2;color:#991B1B}
.captable-block h4 .badge-post{background:#ECFDF5;color:#065F46}
.captable-tbl{width:100%;border-collapse:collapse;font-size:13px;font-family:var(--font-body)}
.captable-tbl th{background:var(--primary);color:#fff;padding:10px 12px;text-align:left;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;font-weight:600}
.captable-tbl th:first-child{border-radius:6px 0 0 0}
.captable-tbl th:last-child{border-radius:0 6px 0 0;text-align:right}
.captable-tbl td{padding:10px 12px;border-bottom:1px solid var(--border);color:var(--text-secondary);font-family:var(--font-mono);font-weight:600}
.captable-tbl td:first-child{color:var(--text);font-family:var(--font-body)}
.captable-tbl td:last-child{text-align:right;color:var(--primary-dark)}
.captable-tbl tr:last-child td{border-bottom:none}
.captable-tbl tr.total td{font-weight:700;color:var(--primary-dark);background:#F0F5FB;border-top:2px solid var(--primary-light)}
.captable-tbl tr.founder td:first-child::before{content:'■';color:#15365f;margin-right:6px}
.captable-tbl tr.investor-old td:first-child::before{content:'■';color:#1f4a7a;margin-right:6px}
.captable-tbl tr.pool td:first-child::before{content:'■';color:#f26522;margin-right:6px}
.captable-tbl tr.investor-r1 td:first-child::before{content:'■';color:#059669;margin-right:6px}
.captable-tbl tr.investor-r2 td:first-child::before{content:'■';color:#0EA5E9;margin-right:6px}
.captable-side{display:grid;grid-template-columns:1fr;gap:16px;margin-top:16px}
@media (min-width:880px){.captable-side{grid-template-columns:1fr 1fr}}
.alert-flag{padding:14px 18px;border-radius:var(--radius);margin-top:14px;font-size:13px;line-height:1.6}
.alert-flag.shuffle{background:#FFFBEB;border-left:4px solid var(--accent);color:#78350F}
.alert-flag.shuffle strong{color:#78350F}
.alert-flag.shuffle ul{margin:6px 0 0 18px}
.alert-flag.shuffle li{margin-bottom:4px}
.btn-reset{display:inline-flex;align-items:center;gap:6px;margin-top:14px;padding:10px 18px;border:1px solid var(--border);border-radius:8px;background:var(--card);color:var(--text-muted);font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:all 0.2s;min-height:44px}
.btn-reset:hover{border-color:var(--danger);color:var(--danger)}
.btn-reset:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.btn-print{display:inline-flex;align-items:center;gap:6px;margin-top:14px;margin-left:8px;padding:10px 18px;border:1px solid var(--primary);border-radius:8px;background:var(--card);color:var(--primary);font-family:var(--font-body);font-size:13px;font-weight:600;cursor:pointer;transition:all 0.2s;min-height:44px}
.btn-print:hover{background:var(--primary);color:#fff}
.btn-print:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.error-banner{display:none;background:#FEE2E2;border-left:4px solid var(--danger);border-radius:0 var(--radius) var(--radius) 0;padding:12px 16px;margin-bottom:16px;color:#991B1B;font-size:13px;font-weight:600}
.error-banner.visible{display:block}
.content-section{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:32px;margin-bottom:32px;border:1px solid var(--border)}
.content-section h2{font-size:24px;font-weight:700;color:var(--primary-dark);margin-bottom:16px;line-height:1.3}
.content-section h3{font-size:18px;font-weight:700;color:var(--primary-dark);margin:20px 0 10px}
.content-section p{font-size:15px;color:var(--text-secondary);margin-bottom:14px;line-height:1.75}
.content-section ul,.content-section ol{margin:0 0 14px 20px}
.content-section li{font-size:15px;color:var(--text-secondary);margin-bottom:8px;line-height:1.7}
.content-section a{color:var(--primary-light);text-decoration:underline;text-underline-offset:2px}
.content-section a:hover{color:var(--primary)}
.rate-table{width:100%;border-collapse:collapse;margin:16px 0;font-size:14px}
.rate-table thead th{background:var(--primary);color:#fff;padding:12px 16px;text-align:left;font-weight:600;font-size:13px;text-transform:uppercase;letter-spacing:0.3px}
.rate-table thead th:first-child{border-radius:var(--radius) 0 0 0}
.rate-table thead th:last-child{border-radius:0 var(--radius) 0 0}
.rate-table tbody td{padding:12px 16px;border-bottom:1px solid var(--border);color:var(--text-secondary)}
.rate-table tbody tr:nth-child(even){background:var(--surface)}
.rate-table tbody tr:hover{background:var(--surface-alt)}
.formula-box{background:var(--primary-dark);color:#E8EEF5;border-radius:var(--radius);padding:20px 24px;margin:16px 0;font-family:var(--font-mono);font-size:14px;line-height:1.8;overflow-x:auto}
.formula-box .label{color:var(--accent-light);font-weight:700}
.callout{background:#F0F5FB;border-left:4px solid var(--primary-light);border-radius:0 var(--radius) var(--radius) 0;padding:16px 20px;margin:16px 0}
.callout p{color:var(--primary-dark);margin-bottom:0;font-size:14px}
.callout strong{color:var(--primary-dark)}
.callout.warn{background:#FFFBEB;border-left-color:var(--accent)}
.callout.warn p{color:#78350F}
.callout.warn strong{color:#78350F}
.faq-item{background:var(--surface);border-radius:var(--radius);margin-bottom:10px;border:1px solid var(--border);overflow:hidden;transition:box-shadow 0.2s}
.faq-item:hover{box-shadow:var(--shadow-sm)}
.faq-question{display:flex;justify-content:space-between;align-items:center;width:100%;padding:16px 20px;border:none;background:none;font-family:var(--font-body);font-size:15px;font-weight:600;color:var(--text);cursor:pointer;text-align:left;line-height:1.4;gap:12px;-webkit-tap-highlight-color:transparent;min-height:52px}
.faq-question *{pointer-events:none}
.faq-question:focus-visible{outline:2px solid var(--primary);outline-offset:-2px}
.faq-icon{flex-shrink:0;width:24px;height:24px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;transition:transform 0.3s}
.faq-item.open .faq-icon{transform:rotate(45deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.4s ease}
.faq-item.open .faq-answer{max-height:800px}
.faq-answer-inner{padding:0 20px 16px;font-size:14px;color:var(--text-secondary);line-height:1.75}
.sidebar-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:24px;margin-bottom:24px;border:1px solid var(--border)}
.sidebar-card h3{font-size:16px;font-weight:700;color:var(--primary-dark);margin-bottom:14px}
.sidebar-link{display:block;padding:10px 14px;border-radius:8px;font-size:14px;font-weight:500;color:var(--text-secondary);text-decoration:none;transition:all 0.2s;margin-bottom:4px;-webkit-tap-highlight-color:rgba(0,0,0,0.05);touch-action:manipulation;min-height:44px}
.sidebar-link:hover{background:var(--surface-alt);color:var(--primary)}
.sidebar-link:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.sidebar-link .arrow{float:right;color:var(--text-muted)}
.cta-card{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;border-radius:var(--radius-lg);padding:24px;margin-bottom:24px}
.cta-card h3{color:#fff;font-size:18px;margin-bottom:8px;font-weight:700}
.cta-card p{font-size:14px;color:rgba(255,255,255,0.85);margin-bottom:16px;line-height:1.55}
.office-strip{background:var(--primary-dark);text-align:center;padding:20px;color:rgba(255,255,255,0.7);font-size:14px}
.office-strip .offices{font-weight:600;color:#fff;margin-bottom:4px}
.office-strip .trust{color:var(--accent);font-weight:600}
.footer{background:var(--primary-dark);border-top:1px solid rgba(255,255,255,0.1);text-align:center;padding:16px 20px;font-size:13px;color:rgba(255,255,255,0.5)}
.noscript-box{background:#FEE2E2;border:2px solid #DC2626;border-radius:var(--radius);padding:20px;text-align:center;color:#991B1B;font-weight:600}
a:focus-visible,button:focus-visible{outline:2px solid var(--accent);outline-offset:2px;border-radius:4px}
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:22px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}.result-headline .value{font-size:22px}.captable-block{padding:14px 12px}.captable-tbl th,.captable-tbl td{padding:8px 6px;font-size:11.5px}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-calculate,.office-strip,.footer,.breadcrumb{display:none !important}body{background:#fff;color:#000;font-size:11pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:16px;margin-bottom:16px}.result-headline{background:#15365f !important;-webkit-print-color-adjust:exact;print-color-adjust:exact}.captable-side{grid-template-columns:1fr 1fr !important}.hero h1{font-size:18pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}}

/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
}
</style>
@section('content')

<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner">
<a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#pre-vs-post">Pre vs Post-money</a><a href="#shuffle">Option Pool Shuffle</a><a href="#benchmarks">Dilution Benchmarks</a><a href="#negotiation">Negotiation Levers</a><a href="#anti-dilution">Anti-Dilution</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>Dilution Impact Calculator</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>Dilution Impact Calculator — <span>ESOP Pool Expansion &amp; Cap Table</span> Simulator for Indian Startups</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Raising a round and unsure how the ESOP top-up dilutes you? <strong>Talk to a CA in 30 seconds.</strong> Free term-sheet review.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Dilution%20Impact%20Calculator%20and%20need%20help%20with%20term%20sheet%20review%20and%20cap%20table%20planning." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Dilution%20Impact%20%26%20Term%20Sheet%20Review&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Dilution%20Impact%20Calculator%20and%20need%20help%20with%3A%0A%0A-%20Term%20sheet%20review%20before%20signing%0A-%20ESOP%20pool%20negotiation%0A-%20Cap%20table%20modelling%0A%0ARound%20size%3A%20%0APre-money%20valuation%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>This calculator models how an ESOP pool top-up and the next two funding rounds dilute your cap table. The critical distinction is whether the pool expansion sits in the pre-money valuation (investor-friendly, founders absorb all the dilution) or post-money (founder-friendly, dilution shared with the new investor). The difference typically costs founders 3 to 8 percentage points per round — at a ₹100 crore valuation, that's ₹3 to ₹8 crore of founder economic value transferred to investors. Always model both before signing a term sheet, then negotiate either a smaller pre-money pool backed by a hiring plan or a higher headline pre-money valuation to offset the option pool shuffle.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Dilution Impact Calculator (Pre-Money vs Post-Money Pool)</h2>
<p class="sub">Simulates ESOP pool expansion + two funding rounds. Side-by-side cap table for pre-money vs post-money pool expansion. Shows founder dilution and the ₹ cost of the option pool shuffle.</p>
<noscript><div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="section-title">Current Cap Table (must sum to 100%)</div>
<div class="calc-row three-col">
<div class="form-group"><label for="founderPct">Founder %</label><input type="text" id="founderPct" inputmode="decimal" placeholder="70" autocomplete="off" value="70"></div>
<div class="form-group"><label for="investorPct">Existing Investor %</label><input type="text" id="investorPct" inputmode="decimal" placeholder="20" autocomplete="off" value="20"></div>
<div class="form-group"><label for="poolPct">ESOP Pool %</label><input type="text" id="poolPct" inputmode="decimal" placeholder="10" autocomplete="off" value="10"></div>
</div>

<div class="section-title">Round 1 — Next Funding Round</div>
<div class="calc-row three-col">
<div class="form-group"><label for="r1Raise">Round 1 Raise (₹ Cr)</label><input type="text" id="r1Raise" inputmode="decimal" placeholder="25" autocomplete="off" value="25"></div>
<div class="form-group"><label for="r1PreMoney">Pre-Money Valuation (₹ Cr)</label><input type="text" id="r1PreMoney" inputmode="decimal" placeholder="100" autocomplete="off" value="100"></div>
<div class="form-group"><label for="poolTarget1">Pool Target Post-Round 1 (%)</label><input type="text" id="poolTarget1" inputmode="decimal" placeholder="15" autocomplete="off" value="15"></div>
</div>

<div class="section-title">Round 2 — Subsequent Round (Optional)</div>
<div class="calc-row three-col">
<div class="form-group"><label for="r2Raise">Round 2 Raise (₹ Cr) <span class="hint">Leave blank to skip</span></label><input type="text" id="r2Raise" inputmode="decimal" placeholder="50" autocomplete="off" value="50"></div>
<div class="form-group"><label for="r2PreMoney">Pre-Money Valuation (₹ Cr)</label><input type="text" id="r2PreMoney" inputmode="decimal" placeholder="250" autocomplete="off" value="250"></div>
<div class="form-group"><label for="poolTarget2">Pool Target Post-Round 2 (%)</label><input type="text" id="poolTarget2" inputmode="decimal" placeholder="18" autocomplete="off" value="18"></div>
</div>

<button class="btn-calculate" onclick="calculate()" type="button">Simulate Dilution &amp; Cap Table</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline">
<div class="label">Founder Dilution Cost — Pre-money vs Post-money Pool</div>
<div class="value"><span class="accent" id="resHeadline">—</span></div>
<div class="meta" id="resHeadlineMeta">—</div>
</div>

<div class="summary-grid">
<div class="summary-card"><div class="v-label">Founder Start</div><div class="v-val" id="resFounderStart">—</div><div class="v-desc">Today's ownership</div></div>
<div class="summary-card highlight"><div class="v-label">Founder After Round 2 (Pre-money pool)</div><div class="v-val" id="resFounderPreR2">—</div><div class="v-desc">Investor-friendly path</div></div>
<div class="summary-card"><div class="v-label">Founder After Round 2 (Post-money pool)</div><div class="v-val" id="resFounderPostR2">—</div><div class="v-desc">Founder-friendly path</div></div>
<div class="summary-card"><div class="v-label">Option Pool Shuffle Cost</div><div class="v-val" id="resShuffleCost">—</div><div class="v-desc" id="resShuffleCostDesc">In percentage points + ₹ value</div></div>
</div>

<div class="captable-side">
<div class="captable-block"><h4>Round 1 Cap Table <span class="badge badge-pre">PRE-MONEY POOL</span></h4>
<table class="captable-tbl">
<thead><tr><th>Shareholder</th><th>%</th></tr></thead>
<tbody>
<tr class="founder"><td>Founders</td><td id="preR1Founder">—</td></tr>
<tr class="investor-old"><td>Existing investors</td><td id="preR1InvOld">—</td></tr>
<tr class="pool"><td>ESOP pool</td><td id="preR1Pool">—</td></tr>
<tr class="investor-r1"><td>Round 1 investor</td><td id="preR1InvNew">—</td></tr>
<tr class="total"><td>Total</td><td>100.00%</td></tr>
</tbody></table>
</div>
<div class="captable-block"><h4>Round 1 Cap Table <span class="badge badge-post">POST-MONEY POOL</span></h4>
<table class="captable-tbl">
<thead><tr><th>Shareholder</th><th>%</th></tr></thead>
<tbody>
<tr class="founder"><td>Founders</td><td id="postR1Founder">—</td></tr>
<tr class="investor-old"><td>Existing investors</td><td id="postR1InvOld">—</td></tr>
<tr class="pool"><td>ESOP pool</td><td id="postR1Pool">—</td></tr>
<tr class="investor-r1"><td>Round 1 investor</td><td id="postR1InvNew">—</td></tr>
<tr class="total"><td>Total</td><td>100.00%</td></tr>
</tbody></table>
</div>
</div>

<div class="captable-side" id="r2Container">
<div class="captable-block"><h4>Round 2 Cap Table <span class="badge badge-pre">PRE-MONEY POOL</span></h4>
<table class="captable-tbl">
<thead><tr><th>Shareholder</th><th>%</th></tr></thead>
<tbody>
<tr class="founder"><td>Founders</td><td id="preR2Founder">—</td></tr>
<tr class="investor-old"><td>Existing investors</td><td id="preR2InvOld">—</td></tr>
<tr class="pool"><td>ESOP pool</td><td id="preR2Pool">—</td></tr>
<tr class="investor-r1"><td>Round 1 investor</td><td id="preR2InvR1">—</td></tr>
<tr class="investor-r2"><td>Round 2 investor</td><td id="preR2InvR2">—</td></tr>
<tr class="total"><td>Total</td><td>100.00%</td></tr>
</tbody></table>
</div>
<div class="captable-block"><h4>Round 2 Cap Table <span class="badge badge-post">POST-MONEY POOL</span></h4>
<table class="captable-tbl">
<thead><tr><th>Shareholder</th><th>%</th></tr></thead>
<tbody>
<tr class="founder"><td>Founders</td><td id="postR2Founder">—</td></tr>
<tr class="investor-old"><td>Existing investors</td><td id="postR2InvOld">—</td></tr>
<tr class="pool"><td>ESOP pool</td><td id="postR2Pool">—</td></tr>
<tr class="investor-r1"><td>Round 1 investor</td><td id="postR2InvR1">—</td></tr>
<tr class="investor-r2"><td>Round 2 investor</td><td id="postR2InvR2">—</td></tr>
<tr class="total"><td>Total</td><td>100.00%</td></tr>
</tbody></table>
</div>
</div>

<div class="alert-flag shuffle">
<strong>⚠ The Option Pool Shuffle — what your term sheet really costs you.</strong>
<p style="margin:6px 0 0 0;">Comparing the two scenarios above:</p>
<ul>
<li><strong>Pre-money pool expansion</strong> — Founders dilute from <span id="shuffleFounderStart">—</span> to <span id="shuffleFounderPre">—</span>, losing <strong id="shuffleFounderPreLoss">—</strong> percentage points</li>
<li><strong>Post-money pool expansion</strong> — Founders dilute from <span id="shuffleFounderStart2">—</span> to <span id="shuffleFounderPost">—</span>, losing <strong id="shuffleFounderPostLoss">—</strong> percentage points</li>
<li><strong>Differential (the shuffle cost):</strong> <span id="shuffleDiffPp">—</span> percentage points of additional founder dilution</li>
<li><strong>₹ value at Round 2 post-money:</strong> <span id="shuffleDiffRupees">—</span> of founder economic value transferred to the new investor</li>
</ul>
<p style="margin:8px 0 0 0;"><strong>Action:</strong> Push for post-money pool expansion, a smaller pre-money pool backed by a 12-month hiring plan, or a higher headline pre-money valuation that offsets the shuffle.</p>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head">Want a CA to model your actual term sheet before signing?</div>
<div class="post-result-cta-sub">Free 15-min review — pre-money vs post-money pool, anti-dilution clauses, FEMA pricing rules, Section 56(2)(viib) angel tax. No obligation.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20used%20the%20Dilution%20Impact%20Calculator%20and%20need%20CA%20review%20of%20my%20term%20sheet%20and%20cap%20table." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Cap%20Table%20%26%20Term%20Sheet%20Review&body=Hi%2C%0A%0AI%20just%20ran%20the%20Dilution%20Impact%20Calculator%20and%20need%20CA%20review%20of%20my%20term%20sheet.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print Cap Table</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the Dilution Impact Calculator</h2>
<ol>
<li><strong>Enter your current cap table.</strong> Founder %, existing investor %, and existing ESOP pool % must together equal 100%. Use fully-diluted percentages — assume all granted options are exercised and the entire pool is allocated.</li>
<li><strong>Enter Round 1 details.</strong> The raise amount (in ₹ Cr), the pre-money valuation that the investor has agreed (in ₹ Cr), and your target ESOP pool size after Round 1 closes (typically 12 to 18 percent at Series A).</li>
<li><strong>Optionally model Round 2.</strong> Set the next round's raise, pre-money valuation, and pool top-up target. Leave Round 2 inputs blank if you only want a one-round view. Round 2 lets you see compound dilution.</li>
<li><strong>Click Simulate.</strong> You'll get two complete cap tables — one assuming the pool expansion sits in the pre-money valuation (the investor-friendly default), and one assuming post-money expansion (the founder-friendly alternative).</li>
<li><strong>Read the option pool shuffle cost.</strong> The differential between the two scenarios is shown in percentage points and in rupees at the Round 2 post-money valuation. This is the economic value transferred from you to the new investor in a pre-money structure.</li>
<li><strong>Print or save the cap table.</strong> The browser print function produces a clean PDF you can take to your CA, lawyer, or co-founders.</li>
</ol>
</section>

<section class="content-section" id="pre-vs-post">
<h2>Pre-Money vs Post-Money Pool Expansion — The Core Mechanic</h2>
<p>Every Series A or B term sheet in India includes a clause requiring the ESOP pool to be created or topped up to a target percentage. The seemingly small word "pre-money" or "post-money" in this clause changes who absorbs the dilution.</p>

<h3>Pre-Money Pool Expansion (Investor-Friendly Default)</h3>
<p>The pool is enlarged <em>before</em> the new investor's money comes in. The investor's percentage is calculated on the post-money valuation that already includes the enlarged pool. Result: existing shareholders (founders and prior investors) absorb 100% of the pool dilution. The new investor walks in to a cap table that already has the larger pool.</p>

<div class="formula-box">
<span class="label">Investor stake</span> = Raise ÷ Post-money<br>
<span class="label">Pool target</span> = Set % of post-money (carved from pre-money only)<br>
<span class="label">Existing combined</span> = 1 − Investor − Pool (proportionally split between founders &amp; prior investors)
</div>

<h3>Post-Money Pool Expansion (Founder-Friendly Alternative)</h3>
<p>The pool is enlarged <em>after</em> the round closes. Step one: the new investor buys in, diluting everyone proportionally. Step two: the pool is then expanded to the target percentage, diluting all shareholders including the new investor proportionally.</p>

<div class="formula-box">
<span class="label">Step 1 — Round close</span> Investor stake = Raise ÷ Post-money<br>
&nbsp;&nbsp;All existing × (1 − Investor stake)<br>
<span class="label">Step 2 — Pool expansion</span> All shareholders compress to (1 − Pool target gap)<br>
&nbsp;&nbsp;Pool grows to target; everyone else dilutes proportionally
</div>

<h3>Why Investors Insist on Pre-Money</h3>
<ul>
<li>The pool dilution sits inside the pre-money valuation, so the investor effectively buys at a lower per-share price than the headline pre-money implies</li>
<li>The investor preserves their full target percentage (e.g. 20%) regardless of pool size</li>
<li>Existing common stock holders pay for new options that benefit future hires — many of whom will join post-investment and don't yet exist</li>
<li>The term sheet's pre-money figure overstates the founders' real economic worth</li>
</ul>

<h3>Worked Example — 70% Founder, 20% Investor, 10% Pool</h3>
<p>Raise ₹25 Cr at ₹100 Cr pre-money (post-money ₹125 Cr, new investor 20%). Pool target after round = 15%.</p>

<table class="rate-table">
<thead><tr><th>Shareholder</th><th>Pre-money pool</th><th>Post-money pool</th><th>Differential</th></tr></thead>
<tbody>
<tr><td>Founders</td><td>50.56%</td><td>51.74%</td><td>−1.18pp</td></tr>
<tr><td>Existing investors</td><td>14.44%</td><td>14.78%</td><td>−0.34pp</td></tr>
<tr><td>ESOP pool</td><td>15.00%</td><td>15.00%</td><td>0pp</td></tr>
<tr><td>New investor</td><td>20.00%</td><td>18.48%</td><td>+1.52pp</td></tr>
</tbody></table>

<div class="callout warn"><p><strong>The shuffle cost:</strong> By insisting on pre-money pool expansion, the new investor gains 1.52 percentage points at the founders' (and to a lesser extent existing investors') expense. At a ₹125 crore post-money valuation, that's ₹1.9 crore of economic value transferred. Across two rounds, the compound effect can exceed ₹5 to ₹10 crore for a successful startup.</p></div>
</section>

<section class="content-section" id="shuffle">
<h2>The Option Pool Shuffle — Why You Must Negotiate</h2>
<p>The term "option pool shuffle" was coined by Babak Nivi and Naval Ravikant on Venture Hacks in 2007 and describes the standard investor practice of demanding a pool top-up inside the pre-money valuation. The mechanic is simple in math but invisible in conversation — and that's why founders miss it.</p>

<h3>Three Hidden Costs of the Pre-Money Pool</h3>
<ol>
<li><strong>Double dilution at this round.</strong> Founders dilute first to create the new pool, then again when the investor buys in. The headline "20% to investor" actually translates to 25-30% combined founder loss</li>
<li><strong>Effective valuation reduction.</strong> A ₹100 Cr pre-money with a 10 percentage point pool top-up is economically equivalent to a ₹90 Cr pre-money without the pool — founders accept a stealth discount</li>
<li><strong>Unused pool benefits everyone but founders.</strong> If the pool is not fully granted before the next round, unallocated options carry over and dilute founders proportionally — while existing investors avoid the dilution at the next pool top-up</li>
</ol>

<h3>How to Right-Size the Pool</h3>
<ul>
<li>Build an 18 to 24 month hiring plan with specific roles and equity grants per role</li>
<li>Sum the total options required and multiply by 1.25 for buffer</li>
<li>Compare this number against the investor's pool ask — most investors default to 12 to 15% without checking your plan</li>
<li>If the gap is large, present your plan, ask for the smaller pool, and offer to top up at Round 2 if hiring exceeds plan</li>
</ul>

<div class="callout"><p><strong>CA Tip:</strong> The hiring plan is the single most effective negotiation lever against a pre-money pool. Investors typically have weak ground to insist on 15% if your data-backed plan supports 9%. Bring it as an appendix to the term sheet negotiation, not after.</p></div>
</section>

<section class="content-section" id="benchmarks">
<h2>Dilution Benchmarks in the Indian Startup Ecosystem</h2>
<p>Typical investor stake by round, based on benchmarks from <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a>, Tracxn, and YourStory aggregations:</p>

<table class="rate-table">
<thead><tr><th>Round</th><th>Typical Investor %</th><th>Typical Pool %</th><th>Typical Pre-money</th></tr></thead>
<tbody>
<tr><td>Angel / Pre-Seed</td><td>5 – 15%</td><td>5 – 8%</td><td>₹2 – 10 Cr</td></tr>
<tr><td>Seed</td><td>15 – 25%</td><td>8 – 12%</td><td>₹10 – 50 Cr</td></tr>
<tr><td>Series A</td><td>20 – 30%</td><td>10 – 15%</td><td>₹50 – 200 Cr</td></tr>
<tr><td>Series B</td><td>15 – 20%</td><td>12 – 18%</td><td>₹200 – 800 Cr</td></tr>
<tr><td>Series C+</td><td>10 – 15%</td><td>15 – 20%</td><td>₹800 Cr +</td></tr>
</tbody></table>

<h3>Founder Dilution by Stage — Survivor Bias Warning</h3>
<p>Median founder ownership at exit is roughly 15 to 25 percent of the company, down from 100 percent at incorporation. Most of this dilution comes from the option pool shuffle across three to four rounds — not from the headline investor stakes alone. Successful unicorns often see founders at 8 to 12 percent at exit. Bootstrapped or angel-only companies preserve 50 to 70 percent founder ownership but rarely reach unicorn scale.</p>

<div class="callout warn"><p><strong>Note:</strong> Benchmarks describe the median deal — not necessarily the right deal for your company. A defensible pre-money valuation, a small data-backed pool, and multiple competing term sheets routinely beat these benchmarks by 5 to 10 percentage points of founder ownership preserved.</p></div>
</section>

<div class="body-cta">
<h3>Need a CA to Model Your Real Term Sheet?</h3>
<p>Patron Accounting supports Indian startups across the full fund-raising journey — pre-money valuation defence, ESOP pool negotiation, anti-dilution clause review, FEMA pricing compliance, and Section 56(2)(viib) angel tax structuring. Pune, Mumbai, Delhi, Gurugram and pan-India.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20help%20with%20term%20sheet%20review%20and%20cap%20table%20modelling." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Term%20Sheet%20Review&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20term%20sheet%20review%20and%20cap%20table%20modelling.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="negotiation">
<h2>Negotiation Levers Against Pre-Money Pool</h2>
<p>Most term sheets default to pre-money pool expansion. Three levers consistently move investors:</p>

<h3>Lever 1 — The Hiring Plan</h3>
<p>Build a roles-and-grants spreadsheet: list every hire planned in the next 12 to 18 months, the role's typical equity grant (1.5% for VP Engineering, 0.5% for senior engineer, 0.1% for junior engineer at Series A scale), and total the options needed. Add 25% buffer. If the total comes to 8%, push back on a 15% investor ask. Most investors back down to 10 to 11% when shown a credible plan.</p>

<h3>Lever 2 — Higher Pre-Money Offset</h3>
<p>If the investor insists on a large pool inside the pre-money, ask for a proportionally higher pre-money. A 5 percentage point larger pool is equivalent to a 5% lower pre-money. Quantify this and demand the offset in writing.</p>

<h3>Lever 3 — Post-Money Pool Structure</h3>
<p>Some investors will agree to post-money pool expansion if the pool size is large or the round is competitive. Frame it as "we'll do the bigger pool you want, but post-money so we share the dilution." Many term sheets allow this with one redrafted clause.</p>

<h3>Lever 4 — Competing Term Sheets</h3>
<p>The single strongest lever is a second term sheet. Even one credible competing offer typically moves the pool by 3 to 5 percentage points and the pre-money by 10 to 20 percent. Founder time spent on parallel investor outreach has the highest return per hour of any startup activity in the fund-raising window.</p>
</section>

<section class="content-section" id="anti-dilution">
<h2>Anti-Dilution &amp; Other Cap Table Risks</h2>
<p>The option pool shuffle is the largest predictable dilution event. Several other clauses compound the impact in adverse scenarios:</p>

<h3>Anti-Dilution Protection</h3>
<p>Anti-dilution clauses protect investors from down rounds (a future round at lower valuation). Three flavours:</p>
<ul>
<li><strong>Broad-based weighted average</strong> — most founder-friendly. The investor's price adjusts down based on a weighted average of all shares issued in the down round, factoring in the entire cap table</li>
<li><strong>Narrow-based weighted average</strong> — moderate. Same formula but only factors in preferred shares</li>
<li><strong>Full ratchet</strong> — most punitive. The investor's effective price resets to the new lower round price. A founder with 50% before a down round can fall to under 20% with a full ratchet investor</li>
</ul>

<h3>Pro-Rata Rights</h3>
<p>Pro-rata rights allow existing investors to maintain their percentage by buying in at future rounds. Reasonable for top-tier funds, but can cap founder ownership when too many investors hold them. Negotiate a sunset clause (e.g. lapses after Series B).</p>

<h3>Liquidation Preferences</h3>
<p>Liquidation preferences affect exit proceeds, not cap table percentages — but combine with dilution to determine who actually gets paid at exit. Standard is 1x non-participating preferred. Anything above 1.5x or "participating" should be aggressively negotiated.</p>

<h3>Indian Specific — Section 56(2)(viib) Angel Tax</h3>
<p>If the share price in your round exceeds the fair market value per Rule 11UA, the excess premium is taxable as "Income from Other Sources" in the company's hands at 30% slab. Eligible Section 80-IAC startups are exempt, but compliance is documentation-heavy. Get a Merchant Banker valuation under DCF or NAV method dated within 180 days of the round.</p>

<div class="callout"><p><strong>CA Tip:</strong> Always pair the cap table model with a 5-year exit waterfall under multiple exit scenarios. Numbers that look attractive at signing can collapse under 1.5x participating preferred liquidation preferences in a down exit. Model both.</p></div>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions About ESOP Dilution &amp; Cap Tables</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the option pool shuffle and how does it dilute founders?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The option pool shuffle is the standard investor practice of requiring the ESOP pool to be created or topped up before the new investment closes. Because the pool is carved out of the pre-money valuation, only the founders and prior investors absorb the dilution from the pool expansion — the new investor's percentage is calculated on the post-money valuation that already includes the enlarged pool. This typically costs founders 3 to 8 additional percentage points compared to a post-money pool expansion.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the difference between pre-money and post-money pool expansion?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">In pre-money pool expansion the option pool is enlarged before the new investor's money comes in, so existing shareholders (founders and prior investors) bear the entire dilution. In post-money pool expansion the pool is enlarged after the round, so the dilution is shared by all shareholders including the new investor. Pre-money is investor-friendly and the default in most term sheets. Post-money is founder-friendly and must be specifically negotiated.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is post-money valuation calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Post-money valuation equals pre-money valuation plus the new investment. If pre-money is ₹100 crore and the investor injects ₹25 crore, post-money is ₹125 crore. The new investor's ownership equals investment divided by post-money, which is ₹25 crore divided by ₹125 crore equals 20 percent. This figure assumes a fully-diluted basis including the ESOP pool.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is a typical ESOP pool size at Seed and Series A in India?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">In the Indian startup ecosystem, typical ESOP pool sizes are 8 to 12 percent at Seed stage, 10 to 15 percent at Series A, and 12 to 18 percent at Series B. Larger pools are sometimes demanded by investors who plan aggressive hiring, but founders should push back with a documented 18 to 24 month hiring plan that justifies the pool size based on actual offers rather than rule of thumb.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How much dilution is normal per funding round?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Indian benchmarks: Angel and Pre-Seed rounds 5 to 15 percent investor stake, Seed rounds 15 to 25 percent, Series A rounds 20 to 30 percent, Series B rounds 15 to 20 percent, and Series C rounds 10 to 15 percent. Add 3 to 8 percentage points of additional founder dilution for the option pool shuffle if the pool is pre-money. Negotiating leverage from multiple competing term sheets remains the strongest lever to reduce dilution.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Does the new investor benefit when the ESOP pool is expanded pre-money?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes, indirectly. By insisting the pool sits in the pre-money valuation, the new investor effectively buys at a lower share price than the headline pre-money implies. The pool absorbs a slice of the pre-money that the investor would otherwise have paid for. This is why the structure is sometimes called a hidden valuation reduction — the term sheet's pre-money figure overstates the founders' real economic worth.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can founders negotiate post-money pool expansion?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. Founders can negotiate either a post-money pool, a smaller pre-money pool backed by a 12-month hiring plan, or a higher headline pre-money valuation that offsets the option pool shuffle dilution. The strength of this negotiation depends on the number of competing term sheets, the company's traction, and the investor's eagerness to close. Always model both scenarios in cap table form before signing the term sheet.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is anti-dilution protection and how does it interact with pool expansion?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Anti-dilution clauses protect investors from down rounds — situations where a future round closes at a lower valuation than they paid. Broad-based weighted average is the most founder-friendly variant. Full ratchet is the most punitive, resetting the prior investor's effective price to the new lower round price and massively diluting founders. Anti-dilution applies to the price per share, not pool expansion directly, but combines with the option pool shuffle in down rounds to amplify founder pain.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How does pool expansion affect existing investors?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">In pre-money pool expansion, existing investors are diluted in proportion to their ownership before the round — though usually less than the founders because the dilution is split between founders and prior investors. In post-money expansion, all shareholders including the new investor share the pool dilution. Existing investors typically prefer pre-money because it preserves their post-round percentage at the new investor's expense.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Should the ESOP pool be at the right size before or after a round?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The pool should be sized based on the actual 18 to 24 month hiring plan, not investor rules of thumb. Build a hiring plan: number of hires by role, equity grant per role, total options needed. Multiply by 1.25 for buffer. If existing pool is short of this number, top up only the shortfall — not the full investor request. This single discipline often saves founders 2 to 4 percentage points of dilution per round.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is fully-diluted ownership in cap table calculations?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Fully-diluted ownership assumes all outstanding shares, granted options, unvested options, convertible notes, SAFEs, and the entire ESOP pool have been converted to common stock. It is the basis on which investors calculate dilution and valuation. Issued-only or vested-only metrics understate dilution. Always present fully-diluted percentages in cap table discussions to align with how investors compute their stake.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How does the Dilution Impact Calculator handle convertible notes or SAFEs?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">This calculator handles straight equity rounds — pre-money valuation, raise size, and pool expansion. It does not model convertible notes, SAFEs with discount or cap, MFN clauses, or anti-dilution adjustments. Real-world rounds often involve these instruments and a CA or VC lawyer must compute fully-diluted ownership before signing. Use this calculator for first-pass directional analysis only.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is this Dilution Impact Calculator a substitute for a CA opinion?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. This calculator provides directional cap table modelling for pre-money and post-money ESOP pool expansion across two rounds. Actual investment closings involve liquidation preferences, participation rights, anti-dilution provisions, pro-rata rights, convertible securities, SAFE conversions, FEMA pricing rules, and Section 56(2)(viib) angel tax considerations that materially affect the cap table. Always consult a Chartered Accountant and a VC lawyer before signing any term sheet.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>Need Term Sheet Review?</h3>
<p>Cap table modelling, pool negotiation, anti-dilution review, FEMA pricing, Section 56(2)(viib) angel tax — handled by chartered accountants.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20cap%20table%20modelling%20and%20term%20sheet%20review." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Cap%20Table%20Help&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20cap%20table%20modelling.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<div class="sidebar-card"><h3>Related Services</h3>
<a href="/esop-services" class="sidebar-link">ESOP Services Hub <span class="arrow">→</span></a>
<a href="/esop-valuation-services" class="sidebar-link">ESOP Valuation Services <span class="arrow">→</span></a>
<a href="/esop-management-and-compliance-services" class="sidebar-link">ESOP Management &amp; Compliance <span class="arrow">→</span></a>
<a href="/issue-of-shares" class="sidebar-link">Issue of Shares <span class="arrow">→</span></a>
<a href="/private-limited-company-registration-in-india" class="sidebar-link">Pvt Ltd Registration <span class="arrow">→</span></a>
<a href="/startup-registration" class="sidebar-link">Startup India Registration <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Tools</h3>
<a href="/tools/esop-pool-size-calculator" class="sidebar-link">ESOP Pool Size Calculator <span class="arrow">→</span></a>
<a href="/tools/esop-cost-to-company-calculator" class="sidebar-link">ESOP Cost to Company <span class="arrow">→</span></a>
<a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">ESOP Perquisite Tax Calculator <span class="arrow">→</span></a>
<a href="/tools/company-registration-cost-calculator" class="sidebar-link">Company Registration Cost <span class="arrow">→</span></a>
<a href="/tools/business-structure-comparison" class="sidebar-link">Business Structure Comparison <span class="arrow">→</span></a>
<a href="/tools/payroll-cost-calculator" class="sidebar-link">Payroll Cost Calculator <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>From the Blog</h3>
<a href="/blog/share-transfer-procedure-in-private-limited-company-a-complete-guide" class="sidebar-link">Share Transfer &amp; ESOPs <span class="arrow">→</span></a>
<a href="/blog/authorized-vs-paid-up-capital-everything-startups-must-know" class="sidebar-link">Authorized vs Paid-Up Capital <span class="arrow">→</span></a>
<a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
</div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
function parseINR(raw){if(raw===undefined||raw===null)return NaN;const c=String(raw).replace(/[,\s₹%]/g,'');if(c==='')return NaN;const n=parseFloat(c);return isFinite(n)?n:NaN;}
function showError(msg){const b=document.getElementById('errorBanner');b.textContent=msg;b.classList.add('visible');setTimeout(()=>b.classList.remove('visible'),6000);}
function fmtPct(n){if(!isFinite(n))return '—';return n.toFixed(2)+'%';}
function fmtCr(n){if(!isFinite(n))return '—';if(Math.abs(n)>=100)return '₹'+n.toLocaleString('en-IN',{maximumFractionDigits:1})+' Cr';return '₹'+n.toLocaleString('en-IN',{maximumFractionDigits:2})+' Cr';}

// Pre-money pool expansion logic
function preMoneyRound(state, raise, preMoney, poolTarget){
    // poolTarget is target pool % of post-money
    const postMoney = preMoney + raise;
    const invPct = (raise / postMoney) * 100;
    const remainingPct = 100 - invPct - poolTarget;
    if(remainingPct < 0) return null;
    // Existing shareholders (founder, investor_old, prev_round_investors, pool) compress to remainingPct
    // BUT pool gets replaced by poolTarget — so non-pool existing get remainingPct
    const nonPoolOld = state.founder + state.investorOld + (state.investorR1 || 0);
    if(nonPoolOld <= 0) return null;
    const scale = remainingPct / nonPoolOld;
    return {
        founder: state.founder * scale,
        investorOld: state.investorOld * scale,
        investorR1: (state.investorR1 || 0) * scale,
        pool: poolTarget,
        investorNew: invPct,
        postMoney: postMoney
    };
}

// Post-money pool expansion logic
function postMoneyRound(state, raise, preMoney, poolTarget){
    const postMoney = preMoney + raise;
    const invPct = (raise / postMoney) * 100;
    // Step 1: investor in, all existing dilute proportionally
    const dilFactor = 1 - invPct/100;
    const afterStep1 = {
        founder: state.founder * dilFactor,
        investorOld: state.investorOld * dilFactor,
        investorR1: (state.investorR1 || 0) * dilFactor,
        pool: state.pool * dilFactor,
        investorNew: invPct
    };
    // Step 2: expand pool from afterStep1.pool to poolTarget by adding new shares
    // Want: (afterStep1.pool + addedPp) / (100 + addedPp) = poolTarget/100  (where addedPp is in pp of original total of 100)
    // Solve: afterStep1.pool + x = poolTarget/100 * (100 + x)
    // afterStep1.pool + x = poolTarget + poolTarget*x/100
    // x - poolTarget*x/100 = poolTarget - afterStep1.pool
    // x * (1 - poolTarget/100) = poolTarget - afterStep1.pool
    // x = (poolTarget - afterStep1.pool) / (1 - poolTarget/100)
    if(afterStep1.pool >= poolTarget){
        // No expansion needed; pool already exceeds target (rare)
        return {
            founder: afterStep1.founder,
            investorOld: afterStep1.investorOld,
            investorR1: afterStep1.investorR1,
            pool: afterStep1.pool,
            investorNew: afterStep1.investorNew,
            postMoney: postMoney
        };
    }
    const x = (poolTarget - afterStep1.pool) / (1 - poolTarget/100);
    const newTotal = 100 + x;
    return {
        founder: afterStep1.founder * 100 / newTotal,
        investorOld: afterStep1.investorOld * 100 / newTotal,
        investorR1: afterStep1.investorR1 * 100 / newTotal,
        pool: (afterStep1.pool + x) * 100 / newTotal,
        investorNew: afterStep1.investorNew * 100 / newTotal,
        postMoney: postMoney
    };
}

function calculate(){
    const founderPct = parseINR(document.getElementById('founderPct').value);
    const investorPct = parseINR(document.getElementById('investorPct').value);
    const poolPct = parseINR(document.getElementById('poolPct').value);
    const r1Raise = parseINR(document.getElementById('r1Raise').value);
    const r1PreMoney = parseINR(document.getElementById('r1PreMoney').value);
    const poolTarget1 = parseINR(document.getElementById('poolTarget1').value);
    const r2RaiseRaw = document.getElementById('r2Raise').value.trim();
    const r2PreMoneyRaw = document.getElementById('r2PreMoney').value.trim();
    const poolTarget2Raw = document.getElementById('poolTarget2').value.trim();
    const r2Raise = parseINR(r2RaiseRaw);
    const r2PreMoney = parseINR(r2PreMoneyRaw);
    const poolTarget2 = parseINR(poolTarget2Raw);
    const includeR2 = (r2RaiseRaw && r2PreMoneyRaw && isFinite(r2Raise) && isFinite(r2PreMoney) && r2Raise > 0 && r2PreMoney > 0);

    // Validations
    if(!isFinite(founderPct) || !isFinite(investorPct) || !isFinite(poolPct)){showError('Enter valid founder, investor, and pool percentages.');return;}
    if(founderPct < 0 || investorPct < 0 || poolPct < 0){showError('Cap table percentages cannot be negative.');return;}
    const sum = founderPct + investorPct + poolPct;
    if(Math.abs(sum - 100) > 0.5){showError('Current cap table must sum to 100% (currently ' + sum.toFixed(1) + '%).');return;}
    if(!isFinite(r1Raise) || r1Raise <= 0){showError('Enter a valid Round 1 raise (greater than 0).');return;}
    if(!isFinite(r1PreMoney) || r1PreMoney <= 0){showError('Enter a valid Round 1 pre-money valuation (greater than 0).');return;}
    if(!isFinite(poolTarget1) || poolTarget1 < 0 || poolTarget1 > 50){showError('Pool target Round 1 must be between 0 and 50%.');return;}
    if(includeR2){
        if(!isFinite(poolTarget2) || poolTarget2 < 0 || poolTarget2 > 50){showError('Pool target Round 2 must be between 0 and 50%.');return;}
    }

    const startState = {founder: founderPct, investorOld: investorPct, pool: poolPct, investorR1: 0};

    // Round 1 — both scenarios
    const preR1 = preMoneyRound(startState, r1Raise, r1PreMoney, poolTarget1);
    const postR1 = postMoneyRound(startState, r1Raise, r1PreMoney, poolTarget1);
    if(!preR1){showError('Round 1 pool target leaves no room for existing shareholders. Reduce pool target.');return;}

    // Map Round 1 investor into investorR1 for Round 2 carry-forward
    const preR1State = {founder: preR1.founder, investorOld: preR1.investorOld, pool: preR1.pool, investorR1: preR1.investorNew};
    const postR1State = {founder: postR1.founder, investorOld: postR1.investorOld, pool: postR1.pool, investorR1: postR1.investorNew};

    let preR2 = null, postR2 = null;
    if(includeR2){
        preR2 = preMoneyRound(preR1State, r2Raise, r2PreMoney, poolTarget2);
        postR2 = postMoneyRound(postR1State, r2Raise, r2PreMoney, poolTarget2);
        if(!preR2){showError('Round 2 pool target leaves no room for existing shareholders. Reduce pool target.');return;}
    }

    // Display Round 1 results
    document.getElementById('preR1Founder').textContent = fmtPct(preR1.founder);
    document.getElementById('preR1InvOld').textContent = fmtPct(preR1.investorOld);
    document.getElementById('preR1Pool').textContent = fmtPct(preR1.pool);
    document.getElementById('preR1InvNew').textContent = fmtPct(preR1.investorNew);
    document.getElementById('postR1Founder').textContent = fmtPct(postR1.founder);
    document.getElementById('postR1InvOld').textContent = fmtPct(postR1.investorOld);
    document.getElementById('postR1Pool').textContent = fmtPct(postR1.pool);
    document.getElementById('postR1InvNew').textContent = fmtPct(postR1.investorNew);

    const r2Container = document.getElementById('r2Container');
    let finalPreFounder, finalPostFounder, finalPostMoney;
    if(includeR2 && preR2 && postR2){
        r2Container.style.display = '';
        document.getElementById('preR2Founder').textContent = fmtPct(preR2.founder);
        document.getElementById('preR2InvOld').textContent = fmtPct(preR2.investorOld);
        document.getElementById('preR2Pool').textContent = fmtPct(preR2.pool);
        document.getElementById('preR2InvR1').textContent = fmtPct(preR2.investorR1);
        document.getElementById('preR2InvR2').textContent = fmtPct(preR2.investorNew);
        document.getElementById('postR2Founder').textContent = fmtPct(postR2.founder);
        document.getElementById('postR2InvOld').textContent = fmtPct(postR2.investorOld);
        document.getElementById('postR2Pool').textContent = fmtPct(postR2.pool);
        document.getElementById('postR2InvR1').textContent = fmtPct(postR2.investorR1);
        document.getElementById('postR2InvR2').textContent = fmtPct(postR2.investorNew);
        finalPreFounder = preR2.founder;
        finalPostFounder = postR2.founder;
        finalPostMoney = preR2.postMoney;
    } else {
        r2Container.style.display = 'none';
        finalPreFounder = preR1.founder;
        finalPostFounder = postR1.founder;
        finalPostMoney = preR1.postMoney;
    }

    // Summary
    const shuffleDiff = finalPostFounder - finalPreFounder;
    const shuffleRupees = (shuffleDiff / 100) * finalPostMoney;

    document.getElementById('resHeadline').textContent = shuffleDiff.toFixed(2) + ' pp';
    document.getElementById('resHeadlineMeta').textContent = 'Founder loses ' + shuffleDiff.toFixed(2) + ' additional percentage points under pre-money expansion vs post-money — worth ' + fmtCr(shuffleRupees) + ' at the final post-money valuation';

    document.getElementById('resFounderStart').textContent = fmtPct(founderPct);
    document.getElementById('resFounderPreR2').textContent = fmtPct(finalPreFounder);
    document.getElementById('resFounderPostR2').textContent = fmtPct(finalPostFounder);
    document.getElementById('resShuffleCost').textContent = shuffleDiff.toFixed(2) + ' pp';
    document.getElementById('resShuffleCostDesc').textContent = 'Equivalent to ' + fmtCr(shuffleRupees) + ' transferred to investors';

    // Shuffle flag detail
    const founderPreLoss = founderPct - finalPreFounder;
    const founderPostLoss = founderPct - finalPostFounder;
    document.getElementById('shuffleFounderStart').textContent = fmtPct(founderPct);
    document.getElementById('shuffleFounderStart2').textContent = fmtPct(founderPct);
    document.getElementById('shuffleFounderPre').textContent = fmtPct(finalPreFounder);
    document.getElementById('shuffleFounderPost').textContent = fmtPct(finalPostFounder);
    document.getElementById('shuffleFounderPreLoss').textContent = founderPreLoss.toFixed(2);
    document.getElementById('shuffleFounderPostLoss').textContent = founderPostLoss.toFixed(2);
    document.getElementById('shuffleDiffPp').textContent = shuffleDiff.toFixed(2);
    document.getElementById('shuffleDiffRupees').textContent = fmtCr(shuffleRupees);

    const section = document.getElementById('resultSection');
    section.classList.add('visible');
    requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
}

function resetCalc(){
    document.getElementById('founderPct').value = '70';
    document.getElementById('investorPct').value = '20';
    document.getElementById('poolPct').value = '10';
    document.getElementById('r1Raise').value = '25';
    document.getElementById('r1PreMoney').value = '100';
    document.getElementById('poolTarget1').value = '15';
    document.getElementById('r2Raise').value = '50';
    document.getElementById('r2PreMoney').value = '250';
    document.getElementById('poolTarget2').value = '18';
    document.getElementById('resultSection').classList.remove('visible');
    document.getElementById('errorBanner').classList.remove('visible');
}

function toggleFaq(e){const b=e.closest?(e.closest('.faq-question')||e):e;const it=b.closest('.faq-item');if(!it)return;const o=it.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>{i.classList.remove('open');const q=i.querySelector('.faq-question');if(q)q.setAttribute('aria-expanded','false');});if(!o){it.classList.add('open');b.setAttribute('aria-expanded','true');}}

document.querySelectorAll('input[type="number"], input[type="text"]').forEach(i=>{i.addEventListener('keydown',function(e){if(e.key==='Enter'){e.preventDefault();calculate();}});});

const navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',()=>{const s=document.querySelectorAll('section[id], header[id]');let c='';s.forEach(x=>{const t=x.offsetTop-100;if(window.pageYOffset>=t)c=x.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});
</script>


<style>
/* ============================================
       STICKY WHATSAPP BAR
       ============================================ */
    .wa-sticky-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #0F6E56;
        z-index: 9999;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        box-shadow: 0 -4px 20px rgba(0,0,0,0.15);
        transition: transform 0.35s ease;
    }
    .wa-sticky-bar.hidden { transform: translateY(100%); }
    .wa-sticky-bar-content {
        display: flex;
        align-items: center;
        gap: 12px;
        max-width: 1320px;
        width: 100%;
        justify-content: center;
    }
    .wa-sticky-bar-icon {
        width: 36px; height: 36px; flex-shrink: 0;
        display: flex; align-items: center; justify-content: center;
        background: rgba(255,255,255,0.2); border-radius: 50%;
    }
    .wa-sticky-bar-icon svg { width: 20px; height: 20px; color: #fff; fill: #fff; }
    .wa-sticky-bar-text {
        font-family: 'Barlow', sans-serif;
        font-size: 15px; color: #fff; font-weight: 500;
    }
    .wa-sticky-bar-text strong { font-weight: 700; }
    .wa-sticky-bar-btn {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 22px; background: #fff; color: #0F6E56;
        font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
        border: none; border-radius: 50px; cursor: pointer;
        text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
    }
    .wa-sticky-bar-btn:hover { background: #E1F5EE; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
    .wa-sticky-bar-close {
        background: none; border: none; cursor: pointer;
        color: rgba(255,255,255,0.7); font-size: 22px; line-height: 1;
        padding: 4px 8px; transition: color 0.2s; flex-shrink: 0;
        font-family: 'Barlow', sans-serif; font-weight: 300;
    }
    .wa-sticky-bar-close:hover { color: #fff; }
    @media (max-width: 768px) {
        .wa-sticky-bar { padding: 8px 12px; gap: 8px; }
        .wa-sticky-bar-text { font-size: 13px; }
        .wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
        .wa-sticky-bar-icon { width: 30px; height: 30px; }
        .wa-sticky-bar-icon svg { width: 16px; height: 16px; }
    }
    @media (max-width: 480px) {
        .wa-sticky-bar-text { display: none; }
        .wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
        .wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
        .wa-sticky-bar-btn span { display: none; }
    }
</style>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> &mdash; get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

<!-- WhatsApp Sticky Bar Script -->
<script>
(function() {
    var waBar = document.getElementById('waBar');
    var waClose = document.getElementById('waBarClose');
    var dismissed = false;

    // Initially hidden, show after scrolling 300px
    waBar.classList.add('hidden');

    window.addEventListener('scroll', function() {
        if (dismissed) return;
        if (window.scrollY > 300) {
            waBar.classList.remove('hidden');
        } else {
            waBar.classList.add('hidden');
        }
    });

    // Close button
    waClose.addEventListener('click', function() {
        dismissed = true;
        waBar.classList.add('hidden');
        // Remember dismissal for this session
        try { sessionStorage.setItem('wa_bar_dismissed', '1'); } catch(e) {}
    });

    // Check if already dismissed this session
    try {
        if (sessionStorage.getItem('wa_bar_dismissed') === '1') {
            dismissed = true;
            waBar.classList.add('hidden');
            waBar.style.display = 'none';
        }
    } catch(e) {}
})();
</script>
endsection
