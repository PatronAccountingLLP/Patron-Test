@extends('layouts.app')
@section('meta')

<title>ESOP Valuation Calculator | DCF & Comparables FMV Tool</title>
<meta name="description" content="ESOP valuation calculator: find FMV per share by DCF, EV/Revenue comparables or hybrid weighting, with a growth and WACC sensitivity table. Rule 11UA aware.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-valuation-calculator">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-valuation-calculator">
<meta property="og:title" content="ESOP Valuation Calculator — DCF + Comparables Tool 2026">
<meta property="og:description" content="DCF, Comparables, or Hybrid weighted FMV per share. 5-year FCF, terminal value, sensitivity table. Rule 11UA aware.">
<meta property="og:image" content="/og/esop-valuation-calculator.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP Valuation Calculator — DCF + Comparables Tool 2026">
<meta name="twitter:description" content="DCF + Comparables FMV per share. 5-year FCF, terminal value, sensitivity table.">
<meta name="twitter:image" content="/og/esop-valuation-calculator.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')

<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"ESOP Valuation Calculator (DCF + Comparables)","description":"ESOP Valuation Calculator computes indicative fair market value (FMV) per share for Indian unlisted companies using Discounted Cash Flow (DCF), EV/Revenue comparables, or a hybrid weighted approach. Takes revenue, growth rate, FCF margin, WACC, terminal growth, comparable multiples, net debt, and shares outstanding. Outputs DCF enterprise value, comparables enterprise value, hybrid FMV per share, 5-year free cash flow projection, terminal value, and a sensitivity table for revenue growth versus discount rate. Issues mandatory Rule 11UA disclaimer that final ESOP valuation requires a SEBI Category I Registered Merchant Banker certificate.","url":"/tools/esop-valuation-calculator","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"ESOP Valuation Calculator (DCF + Comparables)","item":"/tools/esop-valuation-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"What is the difference between DCF and Comparables valuation for ESOPs?","acceptedAnswer":{"@type":"Answer","text":"DCF (Discounted Cash Flow) values a company by projecting its future free cash flows over 5 years plus a terminal value, then discounting them to present value using a Weighted Average Cost of Capital (WACC). It is intrinsic, business-fundamentals driven. Comparables values the company against similar listed or private peers using EV/Revenue or EV/EBITDA multiples. DCF reflects cash generation potential; Comparables reflects what the market pays for similar businesses today. Indian Rule 11UA accepts both methods for ESOP FMV under prescribed conditions."}},
{"@type":"Question","name":"Does this calculator produce a Rule 11UA compliant ESOP valuation?","acceptedAnswer":{"@type":"Answer","text":"No. This calculator produces a directional FMV estimate suitable for internal cap table modelling and board discussions. Rule 11UA of the Income-tax Rules, 1962 requires the FMV for ESOP perquisite tax and Section 56(2)(viib) angel tax to be certified by a SEBI Category I Registered Merchant Banker using prescribed methods (NAV or DCF). Patron Accounting provides this certified valuation as a separate professional service through registered valuer partners."}},
{"@type":"Question","name":"What is WACC and how is it calculated for Indian startups?","acceptedAnswer":{"@type":"Answer","text":"WACC (Weighted Average Cost of Capital) is the blended return investors demand for the risk of the business. For Indian unlisted startups, WACC is typically 15 to 25 percent — substantially higher than for listed companies because investors require compensation for illiquidity, execution risk, and early-stage uncertainty. The formula is WACC equals (Equity weight × Cost of equity) plus (Debt weight × Cost of debt × (1 minus Tax rate)). For pre-revenue or pre-profit startups, build-up methods like CAPM plus size premium plus startup-stage premium are common."}},
{"@type":"Question","name":"What is a typical EV/Revenue multiple for Indian SaaS and tech startups?","acceptedAnswer":{"@type":"Answer","text":"As of 2026, EV/Revenue multiples for Indian growth-stage tech companies range from 4x to 12x for SaaS, 1.5x to 4x for consumer internet, 6x to 15x for AI-first startups, 0.8x to 2x for e-commerce, and 8x to 18x for fintech. Listed peers like Zomato, PB Fintech, Nazara, and Mamaearth offer public benchmarks. Private deal multiples are typically lower than these listed multiples because of illiquidity discount. Always use at least 5 to 8 comparable companies, not a single peer."}},
{"@type":"Question","name":"What terminal growth rate should I use in a DCF?","acceptedAnswer":{"@type":"Answer","text":"Terminal growth rate represents the long-run sustainable growth of the business beyond the explicit forecast period. For Indian companies, 3 to 5 percent is conservative and defensible — aligned with long-run GDP plus inflation. Using higher numbers like 7 to 10 percent makes the terminal value dominate the DCF and is generally not defensible in tax-court scrutiny. The terminal growth must always be less than WACC otherwise the formula explodes. Most Registered Valuers anchor terminal growth to India's long-run real GDP plus 2 percent inflation."}},
{"@type":"Question","name":"How does the sensitivity table help with ESOP valuation?","acceptedAnswer":{"@type":"Answer","text":"The sensitivity table shows how FMV per share changes across combinations of revenue growth rate and WACC. A central case may yield FMV of ₹500 but a plus/minus 5 percentage points in growth and discount rate can move the result to a range of ₹350 to ₹720. This range is the realistic uncertainty band. Boards, auditors, and tax officers expect to see this range — a single point estimate is rarely accepted in scrutiny. Always present DCF outputs as ranges, not single numbers."}},
{"@type":"Question","name":"What is Section 56(2)(viib) angel tax and how does it interact with ESOP valuation?","acceptedAnswer":{"@type":"Answer","text":"Section 56(2)(viib) of the Income-tax Act, 1961 taxes any share issuance at a premium above the Rule 11UA FMV as Income from Other Sources at 30 percent slab in the company's hands. ESOP grants at exercise prices below FMV create a perquisite under Section 17(2)(vi), and share issues at funding rounds above FMV trigger angel tax in the company. DPIIT recognised startups holding the Inter-Ministerial Board approval enjoy exemption from angel tax — but the exemption requires the FMV-vs-issue-price gap to be reasonable and documented."}},
{"@type":"Question","name":"What method does the SEBI Registered Merchant Banker typically use?","acceptedAnswer":{"@type":"Answer","text":"For unlisted Indian companies under Rule 11UA, the Merchant Banker can use either the Net Asset Value (NAV) method, the Discounted Cash Flow (DCF) method, or a combination. For early-stage and revenue-stage startups, DCF is the default — applied with detailed assumptions on revenue projection, EBITDA progression, FCF conversion, and a build-up WACC. Comparable company analysis is presented as a corroborative cross-check, not the primary method. The certificate must be dated within 180 days of the valuation event such as grant or exercise."}},
{"@type":"Question","name":"Can I use this calculator to set the ESOP exercise price?","acceptedAnswer":{"@type":"Answer","text":"For directional planning, yes. To grant ESOPs at a tax-efficient exercise price, the price should be at or above FMV at the date of grant — that way there is no perquisite at grant. To bind this for tax purposes, get a SEBI Registered Merchant Banker certificate dated within 180 days of the grant. The certificate becomes the legal anchor for both the exercise price and the perquisite tax computation at exercise."}},
{"@type":"Question","name":"What is the FCF margin and how do I estimate it?","acceptedAnswer":{"@type":"Answer","text":"Free Cash Flow (FCF) margin is the percentage of revenue that becomes operating cash flow after capex and working capital changes. For Indian SaaS and tech businesses, mature FCF margins of 15 to 25 percent are normal. For early-stage companies that are not yet FCF positive, project the path: -20 percent FCF margin today, breakeven year 3, plus 18 percent by year 5. Use industry benchmarks: Salesforce 20-25 percent FCF, Adobe 35 percent, mature B2B SaaS 25-30 percent."}},
{"@type":"Question","name":"How frequently must ESOP FMV be re-determined for tax purposes?","acceptedAnswer":{"@type":"Answer","text":"Rule 11UA requires a valuation certificate dated within 180 days of any relevant tax event — grant, exercise, or share issue at a premium. For companies running ESOP exercises regularly, this typically means a fresh Registered Valuer certificate at the start of each financial year, with refreshes after material funding rounds or business changes. Buyback transactions and secondary share transfers also require fresh valuations under Section 56(2)(x) and FEMA rules."}},
{"@type":"Question","name":"What is the difference between DCF for ESOP and DCF for fund-raising?","acceptedAnswer":{"@type":"Answer","text":"DCF for ESOP under Rule 11UA tends to be conservative — using lower revenue growth, higher WACC, and lower terminal growth than the optimistic DCF used to justify a fund-raising valuation. This is because the tax authorities prefer documented, conservative assumptions. A startup may pitch investors at a ₹500 Cr valuation while its Rule 11UA FMV certificate sits at ₹250 Cr — both can be defensible because they serve different purposes and use different assumption ranges."}},
{"@type":"Question","name":"Is this ESOP Valuation Calculator a substitute for a Registered Valuer certificate?","acceptedAnswer":{"@type":"Answer","text":"No. This calculator gives directional FMV computation using DCF, Comparables, and Hybrid methods for internal planning, board discussions, and term sheet modelling. For any tax-triggered event — ESOP grant, exercise, share issue at premium, buyback, secondary transfer — a SEBI Category I Registered Merchant Banker certificate under Rule 11UA is legally required. Patron Accounting provides the certified valuation as a separate paid service. Always consult a Chartered Accountant before relying on this calculator's output for any tax filing."}}
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
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;flex-wrap:wrap}
.toggle-btn{flex:1 1 28%;padding:10px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent;min-height:44px}
.toggle-btn *{pointer-events:none}
.toggle-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.toggle-btn:focus-visible{outline:2px solid var(--primary);outline-offset:2px}
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
@media (min-width:600px){.summary-grid{grid-template-columns:1fr 1fr}.summary-grid.three-col{grid-template-columns:1fr 1fr 1fr}}
.summary-card{background:var(--surface);border-radius:var(--radius);padding:16px 18px;border:1px solid var(--border)}
.summary-card.highlight{background:#FFF7ED;border-color:var(--accent)}
.summary-card .v-label{font-family:var(--font-mono);font-size:10px;color:var(--accent);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:4px}
.summary-card .v-val{font-family:var(--font-mono);font-size:20px;font-weight:700;color:var(--primary-dark);word-break:break-word}
.summary-card .v-desc{font-size:12px;color:var(--text-secondary);margin-top:4px;line-height:1.5}
.dcf-block,.sensitivity-block{background:var(--surface-alt);border-radius:var(--radius);padding:18px 22px;margin-top:16px;overflow-x:auto}
.dcf-block h4,.sensitivity-block h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:12px;font-weight:700}
.dcf-tbl,.sens-tbl{width:100%;border-collapse:collapse;font-size:13px}
.dcf-tbl th,.sens-tbl th{background:var(--primary);color:#fff;padding:10px 12px;text-align:right;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;font-weight:600}
.dcf-tbl th:first-child,.sens-tbl th:first-child{text-align:left;border-radius:6px 0 0 0}
.dcf-tbl th:last-child,.sens-tbl th:last-child{border-radius:0 6px 0 0}
.dcf-tbl td,.sens-tbl td{padding:10px 12px;border-bottom:1px solid var(--border);font-family:var(--font-mono);font-weight:600;text-align:right;color:var(--primary-dark)}
.dcf-tbl td:first-child,.sens-tbl td:first-child{text-align:left;color:var(--text);font-family:var(--font-body);font-weight:500}
.dcf-tbl tr:last-child td,.sens-tbl tr:last-child td{border-bottom:none}
.dcf-tbl tr.total td{font-weight:700;color:var(--primary-dark);background:#F0F5FB;border-top:2px solid var(--primary-light)}
.sens-tbl td.center{background:#FFF7ED;color:var(--accent);font-weight:700;outline:1.5px solid var(--accent)}
.sens-tbl td.high{background:#ECFDF5;color:#065F46}
.sens-tbl td.low{background:#FEE2E2;color:#991B1B}
.disclaimer-block{background:#FEF3C7;border:1px solid #FCD34D;border-left:4px solid #D97706;border-radius:var(--radius);padding:16px 20px;margin-top:14px;font-size:13px;line-height:1.7;color:#78350F}
.disclaimer-block strong{color:#78350F;font-weight:700}
.disclaimer-block a{color:#92400E;text-decoration:underline;font-weight:600}
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
.formula-box{background:var(--primary-dark);color:#E8EEF5;border-radius:var(--radius);padding:20px 24px;margin:16px 0;font-family:var(--font-mono);font-size:13px;line-height:1.8;overflow-x:auto}
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
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:22px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}.result-headline .value{font-size:22px}.dcf-block,.sensitivity-block{padding:14px 10px}.dcf-tbl th,.dcf-tbl td,.sens-tbl th,.sens-tbl td{padding:7px 5px;font-size:11px}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-calculate,.office-strip,.footer,.breadcrumb{display:none !important}body{background:#fff;color:#000;font-size:11pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:16px;margin-bottom:16px}.result-headline{background:#15365f !important;-webkit-print-color-adjust:exact;print-color-adjust:exact}.hero h1{font-size:18pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}}

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
<a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#dcf-method">DCF Method</a><a href="#comparables">Comparables</a><a href="#rule-11ua">Rule 11UA</a><a href="#sensitivity">Sensitivity</a><a href="#angel-tax">Angel Tax</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>ESOP Valuation Calculator</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>ESOP Valuation Calculator — <span>DCF + Comparables FMV Estimator</span> for Indian Startups</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Need a <strong>Rule 11UA Registered Valuer certificate?</strong> Patron's empanelled SEBI Cat-I Merchant Bankers turn it around in 7–10 days.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Valuation%20Calculator%20and%20need%20a%20Rule%2011UA%20Registered%20Valuer%20certificate." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Rule%2011UA%20Registered%20Valuer%20Certificate&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Valuation%20Calculator%20and%20need%3A%0A%0A-%20SEBI%20Cat-I%20Merchant%20Banker%20valuation%20certificate%0A-%20Rule%2011UA%20compliant%20DCF%20%2F%20NAV%20report%0A%0ALatest%20revenue%3A%20%0ACompany%20stage%3A%20%0AGrant%20date%2Fexercise%20date%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>This calculator estimates indicative FMV per share for an Indian unlisted startup using <strong>DCF</strong> (5-year free cash flow + terminal value), <strong>EV/Revenue comparables</strong>, or a <strong>hybrid</strong> weighted of the two. Includes a 5×5 sensitivity table varying revenue growth and WACC. <strong>Important:</strong> this is for directional planning only. Any ESOP grant, exercise, share issue, or buyback that triggers Income Tax Act consequences requires a SEBI Category I Registered Merchant Banker certificate under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener" style="color:var(--accent);text-decoration:underline">Rule 11UA</a> of the Income-tax Rules, 1962. Patron Accounting issues this certificate as a separate professional service.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>ESOP Valuation Calculator (DCF + Comparables + Hybrid)</h2>
<p class="sub">Estimates FMV per share using three methods. Outputs 5-year FCF projection, terminal value, EV, equity value, per-share FMV, and a sensitivity table for growth × WACC.</p>
<noscript><div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="section-title">Valuation Method</div>
<div class="form-group" style="margin-bottom:20px;">
<label>Choose primary method (Hybrid = 50/50 weighted)</label>
<div class="toggle-group" role="group" aria-label="Valuation method">
<button type="button" class="toggle-btn" data-method="dcf" onclick="setMethod(this)">DCF<br><small style="font-weight:400;font-size:11px;opacity:0.7">Cash-flow intrinsic</small></button>
<button type="button" class="toggle-btn" data-method="comparables" onclick="setMethod(this)">Comparables<br><small style="font-weight:400;font-size:11px;opacity:0.7">EV/Revenue multiple</small></button>
<button type="button" class="toggle-btn active" data-method="hybrid" onclick="setMethod(this)">Hybrid<br><small style="font-weight:400;font-size:11px;opacity:0.7">50% DCF + 50% Comp</small></button>
</div></div>

<div class="section-title">Financial Inputs</div>
<div class="calc-row three-col">
<div class="form-group"><label for="revenue">Latest Annual Revenue (₹ Cr)</label><input type="text" id="revenue" inputmode="decimal" placeholder="50" autocomplete="off" value="50"></div>
<div class="form-group"><label for="growthRate">5-Year Revenue Growth (%)<span class="hint">Annual CAGR</span></label><input type="text" id="growthRate" inputmode="decimal" placeholder="30" autocomplete="off" value="30"></div>
<div class="form-group"><label for="fcfMargin">FCF Margin (%) <span class="hint">Free Cash Flow / Revenue</span></label><input type="text" id="fcfMargin" inputmode="decimal" placeholder="18" autocomplete="off" value="18"></div>
</div>
<div class="calc-row three-col">
<div class="form-group"><label for="wacc">Discount Rate / WACC (%)</label><input type="text" id="wacc" inputmode="decimal" placeholder="20" autocomplete="off" value="20"></div>
<div class="form-group"><label for="terminalGrowth">Terminal Growth (%) <span class="hint">Must be less than WACC</span></label><input type="text" id="terminalGrowth" inputmode="decimal" placeholder="4" autocomplete="off" value="4"></div>
<div class="form-group"><label for="netDebt">Net Debt (₹ Cr) <span class="hint">Negative if net cash</span></label><input type="text" id="netDebt" inputmode="decimal" placeholder="-10" autocomplete="off" value="-10"></div>
</div>

<div class="section-title">Comparables &amp; Share Count</div>
<div class="calc-row three-col">
<div class="form-group"><label for="evRev">EV / Revenue Multiple (x) <span class="hint">From peer median</span></label><input type="text" id="evRev" inputmode="decimal" placeholder="8" autocomplete="off" value="8"></div>
<div class="form-group"><label for="illiquidityDisc">Illiquidity Discount (%) <span class="hint">Applied to comparables</span></label><input type="text" id="illiquidityDisc" inputmode="decimal" placeholder="25" autocomplete="off" value="25"></div>
<div class="form-group"><label for="sharesOutstanding">Shares Outstanding (fully diluted)</label><input type="text" id="sharesOutstanding" inputmode="decimal" placeholder="10,00,000" autocomplete="off" value="1000000"></div>
</div>

<button class="btn-calculate" onclick="calculate()" type="button">Calculate FMV per Share</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline">
<div class="label">Indicative FMV per Share (<span id="methodLabel">Hybrid</span>)</div>
<div class="value"><span class="accent" id="resHeadline">—</span></div>
<div class="meta" id="resHeadlineMeta">—</div>
</div>

<div class="summary-grid three-col">
<div class="summary-card"><div class="v-label">DCF — EV</div><div class="v-val" id="resDcfEV">—</div><div class="v-desc" id="resDcfEVDesc">PV of FCF + PV of TV</div></div>
<div class="summary-card"><div class="v-label">Comparables — EV</div><div class="v-val" id="resCompEV">—</div><div class="v-desc" id="resCompEVDesc">Revenue × multiple × (1-disc)</div></div>
<div class="summary-card highlight"><div class="v-label">Chosen FMV per Share</div><div class="v-val" id="resPerShare">—</div><div class="v-desc" id="resPerShareDesc">After equity value ÷ shares</div></div>
<div class="summary-card"><div class="v-label">DCF FMV per Share</div><div class="v-val" id="resDcfPerShare">—</div><div class="v-desc">Intrinsic valuation</div></div>
<div class="summary-card"><div class="v-label">Comparables FMV per Share</div><div class="v-val" id="resCompPerShare">—</div><div class="v-desc">Market multiple basis</div></div>
<div class="summary-card"><div class="v-label">Spread (DCF vs Comp)</div><div class="v-val" id="resSpread">—</div><div class="v-desc">Wide spread = high uncertainty</div></div>
</div>

<div class="dcf-block"><h4>DCF Working — 5-Year Free Cash Flow Projection</h4>
<table class="dcf-tbl">
<thead><tr><th>Year</th><th>Revenue (₹ Cr)</th><th>FCF (₹ Cr)</th><th>Discount Factor</th><th>PV of FCF (₹ Cr)</th></tr></thead>
<tbody id="dcfTableBody"></tbody>
<tfoot>
<tr class="total"><td>Sum PV of FCF</td><td>—</td><td>—</td><td>—</td><td id="sumPVFCF">—</td></tr>
<tr class="total"><td>Terminal Value (Y5)</td><td>—</td><td>—</td><td>—</td><td id="termVal">—</td></tr>
<tr class="total"><td>PV of Terminal Value</td><td>—</td><td>—</td><td>—</td><td id="pvTermVal">—</td></tr>
<tr class="total"><td><strong>Enterprise Value (DCF)</strong></td><td>—</td><td>—</td><td>—</td><td id="evDCF"><strong>—</strong></td></tr>
<tr class="total"><td>Less: Net Debt</td><td>—</td><td>—</td><td>—</td><td id="netDebtRow">—</td></tr>
<tr class="total"><td><strong>Equity Value (DCF)</strong></td><td>—</td><td>—</td><td>—</td><td id="eqValDCF"><strong>—</strong></td></tr>
</tfoot>
</table>
</div>

<div class="sensitivity-block"><h4>Sensitivity Table — FMV per Share (₹) at varying Growth × WACC</h4>
<table class="sens-tbl">
<thead><tr><th>Growth ↓ / WACC →</th><th id="sensW1">—</th><th id="sensW2">—</th><th id="sensW3">—</th><th id="sensW4">—</th><th id="sensW5">—</th></tr></thead>
<tbody id="sensTableBody"></tbody>
</table>
<p style="font-size:12px;color:var(--text-muted);margin-top:10px;margin-bottom:0;font-style:italic;">Orange = central case · Green = higher valuation · Red = lower valuation. Realistic uncertainty band is the full range shown here.</p>
</div>

<div class="disclaimer-block">
<strong>⚠ Mandatory Disclaimer — Rule 11UA Compliance.</strong> This calculator produces a directional FMV estimate for internal cap-table modelling and board discussion only. For any of the following tax-triggered events, a <strong>SEBI Category I Registered Merchant Banker</strong> certificate dated within 180 days is legally required under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Rule 11UA</a> of the Income-tax Rules, 1962:
<ul style="margin:8px 0 8px 22px;">
<li>ESOP <strong>grant</strong> — to fix the exercise price at or above FMV (avoids perquisite at grant)</li>
<li>ESOP <strong>exercise</strong> — to compute the Section 17(2)(vi) perquisite tax base</li>
<li>Share issue at premium — for Section 56(2)(viib) angel tax determination</li>
<li>Share <strong>buyback</strong> or secondary transfer — for Section 56(2)(x) and capital gains</li>
<li>FEMA-regulated share transfers with non-residents</li>
</ul>
<strong>Patron Accounting provides this certificate as a separate paid service through empanelled SEBI Cat-I Merchant Bankers.</strong> 7–10 working day turnaround, fixed-fee pricing. <a href="/esop-valuation-services">Request a quote →</a>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head">Need a Rule 11UA Registered Valuer certificate?</div>
<div class="post-result-cta-sub">Free 15-min scoping call — assumptions defence, comparables curation, FCF projection methodology, Merchant Banker engagement. Fixed-fee. No obligation.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20used%20the%20ESOP%20Valuation%20Calculator%20and%20need%20a%20Rule%2011UA%20Registered%20Valuer%20certificate." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Registered%20Valuer%20Quote&body=Hi%2C%0A%0AI%20just%20ran%20the%20ESOP%20Valuation%20Calculator%20and%20need%20a%20Rule%2011UA%20Registered%20Valuer%20certificate.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print Valuation Working</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the ESOP Valuation Calculator</h2>
<ol>
<li><strong>Choose the primary method.</strong> DCF for cash-generative or near-profit businesses where projections are credible. Comparables for early-revenue startups where peer benchmarks dominate. Hybrid (50/50 weighted average) when both methods are reasonable and you want a balanced view.</li>
<li><strong>Enter the latest annual revenue.</strong> Use audited financials where available. For pre-revenue startups, use forward-12-month revenue with a clearly identified assumption — and lean Comparables-heavy or wait for revenue traction before relying on DCF.</li>
<li><strong>Set the 5-year revenue growth (CAGR).</strong> Most Indian SaaS Series A/B operates at 50 to 80 percent CAGR; consumer internet at 30 to 50 percent; mature B2B at 15 to 25 percent. Use a number you can defend with current contract pipeline plus reasonable scale-up.</li>
<li><strong>Set the FCF margin.</strong> For mature businesses, FCF margin equals roughly EBITDA margin minus capex and working capital changes — typically 15 to 25 percent for software, 5 to 10 percent for hardware, 8 to 15 percent for services.</li>
<li><strong>Enter the WACC (discount rate).</strong> Indian unlisted startups: 18 to 25 percent is the standard range. Listed-stock comparable WACC plus illiquidity premium (5 to 8 percentage points) plus startup-stage premium (3 to 5 percentage points).</li>
<li><strong>Set the terminal growth rate.</strong> 3 to 5 percent is conservative and defensible — aligned with long-run Indian GDP plus inflation. Must be less than WACC.</li>
<li><strong>Enter EV/Revenue multiple, net debt, and shares.</strong> Comparables multiple from at least 5 peers (listed or recent private deals). Net debt is debt minus cash — negative if you hold net cash. Shares outstanding is fully diluted (including the entire ESOP pool).</li>
<li><strong>Click Calculate.</strong> You'll get DCF EV, Comparables EV, equity value, per-share FMV under each method, and a sensitivity table across growth × WACC. Print or save the working for your records.</li>
</ol>
</section>

<section class="content-section" id="dcf-method">
<h2>The Discounted Cash Flow (DCF) Method</h2>
<p>DCF values a business as the present value of all future free cash flows. The intuition is simple: a business is worth what it can pay you (the owner) over its lifetime, discounted back to today's rupees.</p>

<h3>The Two-Stage DCF Formula</h3>
<div class="formula-box">
<span class="label">PV of FCF (Year n)</span> = FCF_n ÷ (1 + WACC)^n &nbsp;&nbsp; <span style="opacity:0.6">[n = 1 to 5]</span><br>
<span class="label">Terminal Value (Y5)</span> = FCF_5 × (1 + g) ÷ (WACC − g) &nbsp;&nbsp; <span style="opacity:0.6">[g = terminal growth]</span><br>
<span class="label">PV of Terminal Value</span> = TV ÷ (1 + WACC)^5<br>
<span class="label">Enterprise Value</span> = Σ PV(FCF) + PV(TV)<br>
<span class="label">Equity Value</span> = Enterprise Value − Net Debt<br>
<span class="label">FMV per Share</span> = Equity Value ÷ Shares Outstanding (fully diluted)
</div>

<h3>Worked Example — Indian SaaS at ₹50 Cr ARR</h3>
<p>Latest revenue ₹50 Cr, 30% growth, 18% FCF margin, WACC 20%, terminal growth 4%, net debt minus ₹10 Cr (net cash), 10,00,000 shares.</p>

<table class="rate-table">
<thead><tr><th>Year</th><th>Revenue (₹ Cr)</th><th>FCF (₹ Cr)</th><th>Discount Factor</th><th>PV of FCF (₹ Cr)</th></tr></thead>
<tbody>
<tr><td>Y1</td><td>65.00</td><td>11.70</td><td>0.8333</td><td>9.75</td></tr>
<tr><td>Y2</td><td>84.50</td><td>15.21</td><td>0.6944</td><td>10.56</td></tr>
<tr><td>Y3</td><td>109.85</td><td>19.77</td><td>0.5787</td><td>11.44</td></tr>
<tr><td>Y4</td><td>142.81</td><td>25.71</td><td>0.4823</td><td>12.40</td></tr>
<tr><td>Y5</td><td>185.65</td><td>33.42</td><td>0.4019</td><td>13.43</td></tr>
</tbody>
</table>

<ul>
<li>Sum of PV(FCF) = ₹57.58 Cr</li>
<li>Terminal Value (Y5) = 33.42 × 1.04 ÷ (0.20 − 0.04) = <strong>₹217.24 Cr</strong></li>
<li>PV of Terminal Value = 217.24 × 0.4019 = <strong>₹87.30 Cr</strong></li>
<li>Enterprise Value = 57.58 + 87.30 = <strong>₹144.88 Cr</strong></li>
<li>Equity Value = 144.88 − (−10) = <strong>₹154.88 Cr</strong></li>
<li>FMV per share = 154.88 Cr ÷ 10,00,000 = <strong>₹1,548.80 per share</strong></li>
</ul>

<div class="callout"><p><strong>CA Tip:</strong> The terminal value dominates DCF — typically 50 to 70 percent of total enterprise value. This is by design (a going concern has value beyond year 5) but it also means small changes in WACC or terminal growth massively swing the result. Always present the sensitivity table alongside the central case.</p></div>
</section>

<section class="content-section" id="comparables">
<h2>The Comparables Method (EV / Revenue Multiple)</h2>
<p>The Comparables method values a business at the median multiple paid for similar businesses. The intuition: what the market pays for one rupee of revenue at peer companies tells you what a rupee of your revenue is worth.</p>

<h3>The Formula</h3>
<div class="formula-box">
<span class="label">Enterprise Value</span> = Latest Revenue × Peer Median EV/Revenue Multiple<br>
<span class="label">Equity Value</span> = Enterprise Value − Net Debt<br>
<span class="label">Adjusted Equity Value</span> = Equity Value × (1 − Illiquidity Discount)<br>
<span class="label">FMV per Share</span> = Adjusted Equity Value ÷ Shares Outstanding
</div>

<h3>Choosing Comparables — The Five Filters</h3>
<ol>
<li><strong>Industry match</strong> — same business model (SaaS, consumer, fintech, etc.)</li>
<li><strong>Stage match</strong> — comparable growth rate and gross margin profile</li>
<li><strong>Geography</strong> — Indian peers preferred for Indian valuations; if using global peers apply a India discount of 20 to 30%</li>
<li><strong>Listing status</strong> — listed peers have liquidity premium; apply illiquidity discount of 20 to 30% to your private valuation</li>
<li><strong>Recency</strong> — use multiples from the last 12 months only; older multiples may not reflect current market conditions</li>
</ol>

<h3>2026 Indian Sector Multiples (Indicative)</h3>
<table class="rate-table">
<thead><tr><th>Sector</th><th>EV/Revenue Range</th><th>EV/EBITDA Range</th></tr></thead>
<tbody>
<tr><td>SaaS / Enterprise Software</td><td>4x – 12x</td><td>20x – 40x</td></tr>
<tr><td>Consumer Internet</td><td>1.5x – 4x</td><td>15x – 30x</td></tr>
<tr><td>Fintech (lending, payments)</td><td>8x – 18x</td><td>25x – 50x</td></tr>
<tr><td>AI-first / GenAI startups</td><td>6x – 15x</td><td>Not meaningful (pre-EBITDA)</td></tr>
<tr><td>E-commerce</td><td>0.8x – 2x</td><td>30x – 80x</td></tr>
<tr><td>EdTech</td><td>1x – 4x</td><td>15x – 30x</td></tr>
<tr><td>HealthTech</td><td>2x – 6x</td><td>20x – 40x</td></tr>
<tr><td>Hardware / IoT</td><td>0.8x – 2.5x</td><td>10x – 20x</td></tr>
</tbody>
</table>

<div class="callout warn"><p><strong>Illiquidity discount.</strong> Listed comparable multiples reflect daily liquidity. For unlisted ESOP valuation, apply 20 to 30% illiquidity discount. Tax courts have accepted 25% as a defensible default. Going below 15% or above 35% requires specific justification.</p></div>
</section>

<div class="body-cta">
<h3>Need a Rule 11UA Compliant Valuation Certificate?</h3>
<p>Patron Accounting issues SEBI Cat-I Registered Merchant Banker certificates for ESOP grants, exercise events, share issues at premium, and buybacks. 7–10 day turnaround, fixed-fee pricing, full assumptions defence pack. Pune, Mumbai, Delhi, Gurugram and pan-India.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20a%20Rule%2011UA%20valuation%20certificate." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Rule%2011UA%20Valuation%20Quote&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20Rule%2011UA%20Registered%20Valuer%20certificate.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="rule-11ua">
<h2>Rule 11UA — What the Tax Law Requires</h2>
<p><a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Rule 11UA</a> of the Income-tax Rules, 1962 prescribes the methods for determining the Fair Market Value of unquoted equity shares for tax purposes. The rule directly affects ESOP perquisite tax, angel tax, share buybacks, and several other transactions.</p>

<h3>The Two Permitted Methods</h3>
<ul>
<li><strong>Method 1 — Net Asset Value (NAV)</strong> — Equity value equals book value of assets minus book value of liabilities minus paid-up preference share capital, with adjustments for revaluation of immovable property and intangible assets at FMV. Conservative; mostly used for asset-heavy businesses</li>
<li><strong>Method 2 — Discounted Cash Flow (DCF)</strong> — As described above. The default for service businesses, SaaS, and growth-stage startups. Must be certified by a SEBI Category I Registered Merchant Banker</li>
</ul>

<h3>Who Can Issue the Certificate</h3>
<p>Rule 11UA requires the DCF certificate to be issued by a SEBI Category I Registered Merchant Banker. A Chartered Accountant alone cannot issue this certificate for tax purposes — though a CA typically prepares the underlying valuation working and the Merchant Banker reviews and signs. Patron Accounting works with empanelled Merchant Banker partners to deliver Rule 11UA certificates.</p>

<h3>Certificate Validity Window</h3>
<p>The certificate must be dated within <strong>180 days</strong> of the relevant tax event:</p>
<ul>
<li><strong>ESOP grant</strong> — within 180 days of the grant date</li>
<li><strong>ESOP exercise</strong> — within 180 days of exercise</li>
<li><strong>Share issue at premium</strong> — within 180 days of issue (Section 56(2)(viib))</li>
<li><strong>Buyback or secondary transfer</strong> — within 180 days of the transaction</li>
</ul>

<div class="callout warn"><p><strong>Common compliance gap.</strong> Founders frequently miss the 180-day rule when running monthly ESOP grants. A single annual valuation certificate covers events for 180 days, then a refresh is needed. Most growth-stage startups end up with 2 to 3 Registered Valuer certificates per financial year.</p></div>
</section>

<section class="content-section" id="sensitivity">
<h2>The Sensitivity Table — Reading the Range</h2>
<p>A single point estimate from a DCF is never the right answer for an ESOP valuation. Small swings in growth rate or WACC produce large swings in FMV. The sensitivity table above shows this uncertainty band explicitly.</p>

<h3>How to Read the Sensitivity Table</h3>
<ul>
<li><strong>Central case</strong> (orange-highlighted) = your input assumptions</li>
<li><strong>High corner (top-left)</strong> = optimistic: higher growth, lower WACC — bullish outlier</li>
<li><strong>Low corner (bottom-right)</strong> = pessimistic: lower growth, higher WACC — bearish outlier</li>
<li><strong>Defensible range</strong> = central ± 1 cell in each direction (most likely band)</li>
</ul>

<h3>What Auditors and Tax Officers Expect</h3>
<p>A defensible Rule 11UA valuation report should:</p>
<ul>
<li>Present a central FMV from the DCF working</li>
<li>Cross-check against a Comparables-based FMV</li>
<li>Present sensitivity bands ±5 percentage points around growth and WACC</li>
<li>Justify each major assumption (growth, FCF margin, WACC build-up, terminal growth, illiquidity discount) with cited sources</li>
<li>Reconcile any large gap between DCF and Comparables FMV (typically due to growth-stage difference)</li>
</ul>

<div class="callout"><p><strong>CA Tip:</strong> If the DCF FMV and Comparables FMV differ by more than 2x, one of the two methods has an unrealistic assumption. Most often it's an aggressive Comparables multiple imported from a non-Indian peer set. Re-check peer selection and apply a higher illiquidity discount.</p></div>
</section>

<section class="content-section" id="angel-tax">
<h2>Section 56(2)(viib) Angel Tax — The Other Side of FMV</h2>
<p>The same FMV that anchors ESOP perquisite tax also drives the angel tax computation under <strong>Section 56(2)(viib)</strong> of the Income-tax Act, 1961. If a company issues shares at a price above Rule 11UA FMV, the excess is taxed as <em>Income from Other Sources</em> in the company's hands at 30% slab.</p>

<h3>How Angel Tax Interacts with ESOP Valuation</h3>
<ul>
<li><strong>Investment round at high valuation</strong> — Investor pays a premium above book value. If issue price exceeds Rule 11UA FMV, the differential is taxed in the company</li>
<li><strong>DPIIT recognised startups</strong> are exempt from angel tax — but the exemption requires DPIIT recognition certificate, valuation by Registered Valuer, and aggregate investment cap of ₹25 Cr</li>
<li><strong>Documentation discipline</strong> — Always pair the funding round with a Rule 11UA certificate dated within 180 days, with FMV supporting the issue price</li>
</ul>

<h3>The Two-FMV Dilemma</h3>
<p>Founders often run into a paradox: investors demand a high pre-money valuation for the round (₹500 Cr) while tax authorities expect a conservative Rule 11UA FMV (₹250 Cr). Both can be defensible because they serve different purposes:</p>

<ul>
<li><strong>Investor-facing valuation</strong> uses optimistic growth, aggressive comparables, and lower WACC. Justified by negotiation context and forward-looking strategy</li>
<li><strong>Rule 11UA tax valuation</strong> uses defensible growth, conservative comparables, and higher WACC. Justified by tax-court precedent and ICAI Guidance</li>
<li>The gap is reconciled by documenting both with assumption rationale, and by securing DPIIT exemption where eligible</li>
</ul>

<div class="callout warn"><p><strong>Note:</strong> Section 56(2)(viib) was originally repealed for non-resident investors in 2023 and substantially scaled back for resident investors. Verify current applicability with your CA based on investor type, residency, and DPIIT status — angel tax compliance has evolved rapidly through 2024-2026.</p></div>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions About ESOP Valuation</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the difference between DCF and Comparables valuation for ESOPs?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">DCF (Discounted Cash Flow) values a company by projecting its future free cash flows over 5 years plus a terminal value, then discounting them to present value using a Weighted Average Cost of Capital (WACC). It is intrinsic, business-fundamentals driven. Comparables values the company against similar listed or private peers using EV/Revenue or EV/EBITDA multiples. DCF reflects cash generation potential; Comparables reflects what the market pays for similar businesses today. Indian Rule 11UA accepts both methods for ESOP FMV under prescribed conditions.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Does this calculator produce a Rule 11UA compliant ESOP valuation?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. This calculator produces a directional FMV estimate suitable for internal cap table modelling and board discussions. Rule 11UA of the Income-tax Rules, 1962 requires the FMV for ESOP perquisite tax and Section 56(2)(viib) angel tax to be certified by a SEBI Category I Registered Merchant Banker using prescribed methods (NAV or DCF). Patron Accounting provides this certified valuation as a separate professional service through registered valuer partners.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is WACC and how is it calculated for Indian startups?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">WACC (Weighted Average Cost of Capital) is the blended return investors demand for the risk of the business. For Indian unlisted startups, WACC is typically 15 to 25 percent — substantially higher than for listed companies because investors require compensation for illiquidity, execution risk, and early-stage uncertainty. The formula is WACC equals (Equity weight × Cost of equity) plus (Debt weight × Cost of debt × (1 minus Tax rate)). For pre-revenue or pre-profit startups, build-up methods like CAPM plus size premium plus startup-stage premium are common.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is a typical EV/Revenue multiple for Indian SaaS and tech startups?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">As of 2026, EV/Revenue multiples for Indian growth-stage tech companies range from 4x to 12x for SaaS, 1.5x to 4x for consumer internet, 6x to 15x for AI-first startups, 0.8x to 2x for e-commerce, and 8x to 18x for fintech. Listed peers like Zomato, PB Fintech, Nazara, and Mamaearth offer public benchmarks. Private deal multiples are typically lower than these listed multiples because of illiquidity discount. Always use at least 5 to 8 comparable companies, not a single peer.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What terminal growth rate should I use in a DCF?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Terminal growth rate represents the long-run sustainable growth of the business beyond the explicit forecast period. For Indian companies, 3 to 5 percent is conservative and defensible — aligned with long-run GDP plus inflation. Using higher numbers like 7 to 10 percent makes the terminal value dominate the DCF and is generally not defensible in tax-court scrutiny. The terminal growth must always be less than WACC otherwise the formula explodes. Most Registered Valuers anchor terminal growth to India's long-run real GDP plus 2 percent inflation.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How does the sensitivity table help with ESOP valuation?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The sensitivity table shows how FMV per share changes across combinations of revenue growth rate and WACC. A central case may yield FMV of ₹500 but a plus/minus 5 percentage points in growth and discount rate can move the result to a range of ₹350 to ₹720. This range is the realistic uncertainty band. Boards, auditors, and tax officers expect to see this range — a single point estimate is rarely accepted in scrutiny. Always present DCF outputs as ranges, not single numbers.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is Section 56(2)(viib) angel tax and how does it interact with ESOP valuation?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 56(2)(viib) of the Income-tax Act, 1961 taxes any share issuance at a premium above the Rule 11UA FMV as Income from Other Sources at 30 percent slab in the company's hands. ESOP grants at exercise prices below FMV create a perquisite under Section 17(2)(vi), and share issues at funding rounds above FMV trigger angel tax in the company. DPIIT recognised startups holding the Inter-Ministerial Board approval enjoy exemption from angel tax — but the exemption requires the FMV-vs-issue-price gap to be reasonable and documented.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What method does the SEBI Registered Merchant Banker typically use?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For unlisted Indian companies under Rule 11UA, the Merchant Banker can use either the Net Asset Value (NAV) method, the Discounted Cash Flow (DCF) method, or a combination. For early-stage and revenue-stage startups, DCF is the default — applied with detailed assumptions on revenue projection, EBITDA progression, FCF conversion, and a build-up WACC. Comparable company analysis is presented as a corroborative cross-check, not the primary method. The certificate must be dated within 180 days of the valuation event such as grant or exercise.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can I use this calculator to set the ESOP exercise price?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For directional planning, yes. To grant ESOPs at a tax-efficient exercise price, the price should be at or above FMV at the date of grant — that way there is no perquisite at grant. To bind this for tax purposes, get a SEBI Registered Merchant Banker certificate dated within 180 days of the grant. The certificate becomes the legal anchor for both the exercise price and the perquisite tax computation at exercise.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the FCF margin and how do I estimate it?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Free Cash Flow (FCF) margin is the percentage of revenue that becomes operating cash flow after capex and working capital changes. For Indian SaaS and tech businesses, mature FCF margins of 15 to 25 percent are normal. For early-stage companies that are not yet FCF positive, project the path: -20 percent FCF margin today, breakeven year 3, plus 18 percent by year 5. Use industry benchmarks: Salesforce 20-25 percent FCF, Adobe 35 percent, mature B2B SaaS 25-30 percent.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How frequently must ESOP FMV be re-determined for tax purposes?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Rule 11UA requires a valuation certificate dated within 180 days of any relevant tax event — grant, exercise, or share issue at a premium. For companies running ESOP exercises regularly, this typically means a fresh Registered Valuer certificate at the start of each financial year, with refreshes after material funding rounds or business changes. Buyback transactions and secondary share transfers also require fresh valuations under Section 56(2)(x) and FEMA rules.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the difference between DCF for ESOP and DCF for fund-raising?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">DCF for ESOP under Rule 11UA tends to be conservative — using lower revenue growth, higher WACC, and lower terminal growth than the optimistic DCF used to justify a fund-raising valuation. This is because the tax authorities prefer documented, conservative assumptions. A startup may pitch investors at a ₹500 Cr valuation while its Rule 11UA FMV certificate sits at ₹250 Cr — both can be defensible because they serve different purposes and use different assumption ranges.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is this ESOP Valuation Calculator a substitute for a Registered Valuer certificate?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. This calculator gives directional FMV computation using DCF, Comparables, and Hybrid methods for internal planning, board discussions, and term sheet modelling. For any tax-triggered event — ESOP grant, exercise, share issue at premium, buyback, secondary transfer — a SEBI Category I Registered Merchant Banker certificate under Rule 11UA is legally required. Patron Accounting provides the certified valuation as a separate paid service. Always consult a Chartered Accountant before relying on this calculator's output for any tax filing.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>Need Rule 11UA Valuation?</h3>
<p>SEBI Cat-I Registered Merchant Banker certificates, fixed-fee, 7-10 day turnaround. Empanelled partners across PAN India.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20a%20Rule%2011UA%20Registered%20Valuer%20certificate." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Registered%20Valuer%20Quote&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20Rule%2011UA%20valuation.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<div class="sidebar-card"><h3>Related Services</h3>
<a href="/esop-valuation-services" class="sidebar-link">ESOP Valuation Services <span class="arrow">→</span></a>
<a href="/esop-services" class="sidebar-link">ESOP Services Hub <span class="arrow">→</span></a>
<a href="/esop-management-and-compliance-services" class="sidebar-link">ESOP Management &amp; Compliance <span class="arrow">→</span></a>
<a href="/business-valuation-services" class="sidebar-link">Business Valuation Services <span class="arrow">→</span></a>
<a href="/actuarial-valuation-services-for-employee-benefits" class="sidebar-link">Actuarial Valuation <span class="arrow">→</span></a>
<a href="/startup-registration" class="sidebar-link">Startup India Registration <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Tools</h3>
<a href="/tools/esop-pool-size-calculator" class="sidebar-link">ESOP Pool Size Calculator <span class="arrow">→</span></a>
<a href="/tools/esop-cost-to-company-calculator" class="sidebar-link">ESOP Cost to Company <span class="arrow">→</span></a>
<a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">ESOP Perquisite Tax Calculator <span class="arrow">→</span></a>
<a href="/tools/esop-dilution-calculator" class="sidebar-link">Dilution Impact Calculator <span class="arrow">→</span></a>
<a href="/tools/business-structure-comparison" class="sidebar-link">Business Structure Comparison <span class="arrow">→</span></a>
<a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator <span class="arrow">→</span></a>
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
function parseINR(raw){if(raw===undefined||raw===null)return NaN;const c=String(raw).replace(/[,\s₹%x]/g,'');if(c==='')return NaN;const n=parseFloat(c);return isFinite(n)?n:NaN;}
function showError(msg){const b=document.getElementById('errorBanner');b.textContent=msg;b.classList.add('visible');setTimeout(()=>b.classList.remove('visible'),6000);}
function fmtCr(n){if(!isFinite(n))return '—';return '₹'+n.toLocaleString('en-IN',{maximumFractionDigits:2})+' Cr';}
function fmtINR(n){if(!isFinite(n))return '—';return '₹'+n.toLocaleString('en-IN',{maximumFractionDigits:0});}
function fmtNum(n,d){if(!isFinite(n))return '—';return n.toLocaleString('en-IN',{maximumFractionDigits:d||2,minimumFractionDigits:d||2});}

let currentMethod = 'hybrid';
function setMethod(b){const e=b.closest?(b.closest('.toggle-btn')||b):b;currentMethod=e.dataset.method;e.parentElement.querySelectorAll('.toggle-btn').forEach(x=>x.classList.remove('active'));e.classList.add('active');if(document.getElementById('resultSection').classList.contains('visible'))calculate(true);}

// Core DCF compute
function dcfCompute(revenue, growth, fcfMargin, wacc, terminalGrowth, netDebt){
    if(wacc <= terminalGrowth) return null;  // Formula explodes
    const g = growth / 100;
    const w = wacc / 100;
    const tg = terminalGrowth / 100;
    const m = fcfMargin / 100;
    const years = [];
    let rev = revenue;
    let sumPV = 0;
    for(let y = 1; y <= 5; y++){
        rev = rev * (1 + g);
        const fcf = rev * m;
        const df = 1 / Math.pow(1 + w, y);
        const pv = fcf * df;
        sumPV += pv;
        years.push({year: y, revenue: rev, fcf: fcf, df: df, pv: pv});
    }
    const fcf5 = years[4].fcf;
    const tv = fcf5 * (1 + tg) / (w - tg);
    const pvTV = tv / Math.pow(1 + w, 5);
    const ev = sumPV + pvTV;
    const equity = ev - netDebt;
    return {years, sumPV, tv, pvTV, ev, equity, netDebt};
}

// Comparables compute
function compCompute(revenue, multiple, netDebt, illiquidityDisc){
    const ev = revenue * multiple;
    const equityRaw = ev - netDebt;
    const equity = equityRaw * (1 - illiquidityDisc / 100);
    return {ev, equity};
}

function calculate(silent){
    const revenue = parseINR(document.getElementById('revenue').value);
    const growth = parseINR(document.getElementById('growthRate').value);
    const fcfMargin = parseINR(document.getElementById('fcfMargin').value);
    const wacc = parseINR(document.getElementById('wacc').value);
    const terminalGrowth = parseINR(document.getElementById('terminalGrowth').value);
    const netDebt = parseINR(document.getElementById('netDebt').value);
    const evRev = parseINR(document.getElementById('evRev').value);
    const illiquidityDisc = parseINR(document.getElementById('illiquidityDisc').value);
    const shares = parseINR(document.getElementById('sharesOutstanding').value);

    if(!isFinite(revenue) || revenue <= 0){showError('Enter a valid annual revenue (greater than 0).');return;}
    if(!isFinite(growth) || growth < -50 || growth > 200){showError('Enter a valid growth rate (-50 to 200%).');return;}
    if(!isFinite(fcfMargin) || fcfMargin < -100 || fcfMargin > 60){showError('Enter a valid FCF margin (-100 to 60%).');return;}
    if(!isFinite(wacc) || wacc <= 0 || wacc > 50){showError('Enter a valid WACC (0 to 50%).');return;}
    if(!isFinite(terminalGrowth) || terminalGrowth < 0 || terminalGrowth >= wacc){showError('Terminal growth must be ≥ 0 and STRICTLY less than WACC.');return;}
    if(!isFinite(netDebt)){showError('Enter a valid net debt (use negative for net cash).');return;}
    if(!isFinite(evRev) || evRev <= 0){showError('Enter a valid EV/Revenue multiple (greater than 0).');return;}
    if(!isFinite(illiquidityDisc) || illiquidityDisc < 0 || illiquidityDisc > 60){showError('Illiquidity discount must be 0-60%.');return;}
    if(!isFinite(shares) || shares <= 0){showError('Enter a valid share count (greater than 0).');return;}

    const dcf = dcfCompute(revenue, growth, fcfMargin, wacc, terminalGrowth, netDebt);
    if(!dcf){showError('DCF cannot compute — WACC must exceed terminal growth.');return;}
    const comp = compCompute(revenue, evRev, netDebt, illiquidityDisc);

    const dcfPerShare = dcf.equity * 1e7 / shares;  // Cr to ₹
    const compPerShare = comp.equity * 1e7 / shares;
    const hybridPerShare = (dcfPerShare + compPerShare) / 2;

    let chosenPerShare, chosenLabel, chosenEquity;
    if(currentMethod === 'dcf'){chosenPerShare = dcfPerShare; chosenLabel = 'DCF'; chosenEquity = dcf.equity;}
    else if(currentMethod === 'comparables'){chosenPerShare = compPerShare; chosenLabel = 'Comparables'; chosenEquity = comp.equity;}
    else {chosenPerShare = hybridPerShare; chosenLabel = 'Hybrid (50/50)'; chosenEquity = (dcf.equity + comp.equity) / 2;}

    document.getElementById('methodLabel').textContent = chosenLabel;
    document.getElementById('resHeadline').textContent = fmtINR(chosenPerShare);
    document.getElementById('resHeadlineMeta').textContent = 'Equity value of ' + fmtCr(chosenEquity) + ' ÷ ' + shares.toLocaleString('en-IN') + ' shares (fully diluted)';

    document.getElementById('resDcfEV').textContent = fmtCr(dcf.ev);
    document.getElementById('resDcfEVDesc').textContent = 'PV(FCF) ' + fmtCr(dcf.sumPV) + ' + PV(TV) ' + fmtCr(dcf.pvTV);
    document.getElementById('resCompEV').textContent = fmtCr(comp.ev);
    document.getElementById('resCompEVDesc').textContent = fmtCr(revenue) + ' × ' + evRev + 'x';
    document.getElementById('resPerShare').textContent = fmtINR(chosenPerShare);
    document.getElementById('resPerShareDesc').textContent = chosenLabel + ' method • ' + fmtCr(chosenEquity) + ' equity';
    document.getElementById('resDcfPerShare').textContent = fmtINR(dcfPerShare);
    document.getElementById('resCompPerShare').textContent = fmtINR(compPerShare);
    const spread = Math.abs(dcfPerShare - compPerShare);
    const spreadPct = ((spread / Math.min(dcfPerShare, compPerShare)) * 100);
    document.getElementById('resSpread').textContent = fmtINR(spread) + ' (' + spreadPct.toFixed(0) + '%)';

    // DCF table
    const tbody = document.getElementById('dcfTableBody');
    tbody.innerHTML = '';
    dcf.years.forEach(y => {
        const tr = document.createElement('tr');
        tr.innerHTML = '<td>Y' + y.year + '</td><td>' + fmtNum(y.revenue) + '</td><td>' + fmtNum(y.fcf) + '</td><td>' + fmtNum(y.df, 4) + '</td><td>' + fmtNum(y.pv) + '</td>';
        tbody.appendChild(tr);
    });
    document.getElementById('sumPVFCF').innerHTML = '<strong>' + fmtCr(dcf.sumPV) + '</strong>';
    document.getElementById('termVal').textContent = fmtCr(dcf.tv);
    document.getElementById('pvTermVal').textContent = fmtCr(dcf.pvTV);
    document.getElementById('evDCF').innerHTML = '<strong>' + fmtCr(dcf.ev) + '</strong>';
    document.getElementById('netDebtRow').textContent = fmtCr(netDebt);
    document.getElementById('eqValDCF').innerHTML = '<strong>' + fmtCr(dcf.equity) + '</strong>';

    // Sensitivity table 5×5: growth ±10pp (steps 5), WACC ±4pp (steps 2)
    const growthValues = [growth - 10, growth - 5, growth, growth + 5, growth + 10];
    const waccValues = [wacc - 4, wacc - 2, wacc, wacc + 2, wacc + 4];
    document.getElementById('sensW1').textContent = waccValues[0].toFixed(0) + '%';
    document.getElementById('sensW2').textContent = waccValues[1].toFixed(0) + '%';
    document.getElementById('sensW3').textContent = waccValues[2].toFixed(0) + '%';
    document.getElementById('sensW4').textContent = waccValues[3].toFixed(0) + '%';
    document.getElementById('sensW5').textContent = waccValues[4].toFixed(0) + '%';

    const sensBody = document.getElementById('sensTableBody');
    sensBody.innerHTML = '';
    for(let i = 0; i < 5; i++){
        const g = growthValues[i];
        const tr = document.createElement('tr');
        let row = '<td><strong>' + g.toFixed(0) + '%</strong></td>';
        for(let j = 0; j < 5; j++){
            const w = waccValues[j];
            let cellPS = '—', cellClass = '';
            if(w > terminalGrowth && w > 0 && g > -50){
                const tempDcf = dcfCompute(revenue, g, fcfMargin, w, terminalGrowth, netDebt);
                if(tempDcf){
                    const tempPS = tempDcf.equity * 1e7 / shares;
                    cellPS = fmtINR(tempPS);
                    if(i === 2 && j === 2) cellClass = ' class="center"';
                    else if(tempPS > dcfPerShare * 1.2) cellClass = ' class="high"';
                    else if(tempPS < dcfPerShare * 0.8) cellClass = ' class="low"';
                }
            }
            row += '<td' + cellClass + '>' + cellPS + '</td>';
        }
        tr.innerHTML = row;
        sensBody.appendChild(tr);
    }

    const section = document.getElementById('resultSection');
    section.classList.add('visible');
    if(!silent) requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
}

function resetCalc(){
    document.getElementById('revenue').value = '50';
    document.getElementById('growthRate').value = '30';
    document.getElementById('fcfMargin').value = '18';
    document.getElementById('wacc').value = '20';
    document.getElementById('terminalGrowth').value = '4';
    document.getElementById('netDebt').value = '-10';
    document.getElementById('evRev').value = '8';
    document.getElementById('illiquidityDisc').value = '25';
    document.getElementById('sharesOutstanding').value = '1000000';
    document.querySelectorAll('.toggle-group').forEach(g=>{g.querySelectorAll('.toggle-btn').forEach(x=>x.classList.remove('active'));});
    document.querySelector('.toggle-btn[data-method="hybrid"]').classList.add('active');
    currentMethod = 'hybrid';
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
@endsection
