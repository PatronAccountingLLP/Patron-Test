@extends('layouts.app')
@section('meta')
<title>Net Worth Calculator | Visa &amp; Immigration in INR/USD</title>
<meta name="description" content="Net worth calculator for visa &amp; immigration: get net worth in INR plus USD/CAD/GBP/EUR/AUD, with itemised assets, liabilities &amp; CA-certified preview. Free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/net-worth-calculator">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/net-worth-calculator">
<meta property="og:title" content="Net Worth Calculator — Visa &amp; Immigration Tool 2026">
<meta property="og:description" content="Compute net worth in INR + 5-currency FX. Visa-ready preview with 5 critical adjustments.">
<meta property="og:image" content="/og/net-worth-calculator.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Net Worth Calculator — Visa &amp; Immigration Tool 2026">
<meta name="twitter:description" content="Personal net worth statement with INR + USD/CAD/GBP/EUR/AUD conversion. CA-certified upgrade path.">
<meta name="twitter:image" content="/og/net-worth-calculator.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"Net Worth Calculator","description":"Net Worth Calculator computes personal net worth for Indian residents using an itemised asset and liability schedule, formatted in the same structure that a Chartered Accountant uses to issue a Net Worth Certificate for US, UK, Canada, Australia, and Schengen visa applications. Assets are captured across 11 categories: bank balances, fixed deposits, mutual funds, listed shares, unlisted shares, real estate with joint-property share, vehicles with auto-depreciation by purchase year, gold, business capital, retirement funds, and other assets. Liabilities across 6 categories: home loans, personal loans, vehicle loans, credit card dues, business borrowings, and other liabilities. Outputs total net worth in INR and converted to USD, CAD, GBP, EUR, or AUD at user-overridable conversion rates. Includes 5 critical adjustment warnings (joint property share, vehicle depreciation, FD accrued interest, insurance surrender value, mutual fund NAV) and a CA-certified upgrade path for visa and immigration submissions.","url":"/tools/net-worth-calculator","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"Net Worth Calculator","item":"/tools/net-worth-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"What is a Net Worth Certificate and when is it required?","acceptedAnswer":{"@type":"Answer","text":"A Net Worth Certificate is a Chartered Accountant-certified statement showing an individual's total assets, total liabilities, and net worth as on a specific date. It is required for: US B1/B2 visa applications, UK Standard Visitor and Tier 4 student visas, Canada visitor and study visas, Australian student and visitor visas, Schengen visas, scholarship applications to foreign universities, NRI account opening with foreign banks, large business loans, and high-value real estate transactions. The certificate must be issued by a practising Chartered Accountant with UDIN (Unique Document Identification Number) verification."}},
{"@type":"Question","name":"How is net worth computed?","acceptedAnswer":{"@type":"Answer","text":"Net worth equals total assets minus total liabilities. Total assets include bank balances, fixed deposits at face value plus accrued interest, mutual funds at latest Net Asset Value (NAV), listed shares at market price, unlisted shares at fair value, real estate at market value (only the owner's share if jointly held), vehicles at depreciated written-down value, gold and jewellery at current market price, retirement funds (PPF, EPF, NPS) at latest balance, and business capital. Total liabilities include home loans, personal loans, vehicle loans, credit card dues, business borrowings, and any other outstanding obligations."}},
{"@type":"Question","name":"What are the 5 critical adjustments most people get wrong?","acceptedAnswer":{"@type":"Answer","text":"Five common mistakes: (1) Joint property — only the owner's percentage share counts, not the full property value; husband-wife joint ownership typically means 50 percent each. (2) Vehicle valuation — must be at depreciated written-down value, not purchase price; a 3-year-old car is typically valued at 55-65 percent of original cost. (3) FD accrued interest — interest accrued but not yet credited must be added to the FD value. (4) Insurance surrender value — life insurance policies should be at the current surrender value, not the cumulative premiums paid. (5) Mutual fund NAV — use the latest Net Asset Value, not the original invested amount. These five adjustments often differ by ₹3 to ₹15 lakh from a naive estimate."}},
{"@type":"Question","name":"Why is a CA-certified Net Worth Certificate needed for visa applications?","acceptedAnswer":{"@type":"Answer","text":"Foreign embassies and consulates require an independent verification of the applicant's financial standing — they cannot rely on self-declared figures. A Chartered Accountant-issued certificate with UDIN serves as that independent verification because the CA is professionally regulated by ICAI and is legally accountable for the accuracy of the certificate. Self-prepared net worth statements are not accepted by US Consulate Mumbai, UK VFS Centres, Canada CHC, or Australian VFS. The CA certificate must be on letterhead with ICAI membership number, firm registration number, and UDIN."}},
{"@type":"Question","name":"How much does a CA Net Worth Certificate cost in India?","acceptedAnswer":{"@type":"Answer","text":"Patron Accounting issues Net Worth Certificates for ₹3,500 to ₹7,500 depending on complexity. Simple cases (1 to 2 properties, standard financial assets) start at ₹3,500. Complex cases involving multiple jointly-owned properties, business interests in private companies, foreign assets, or NRI status, run up to ₹7,500. Turnaround time is 2 to 5 working days from receipt of complete documentation. The certificate is issued on Patron's CA firm letterhead with ICAI registration, UDIN, and digital signature."}},
{"@type":"Question","name":"What documents are needed for a CA Net Worth Certificate?","acceptedAnswer":{"@type":"Answer","text":"Standard documentation: PAN card, Aadhaar, latest bank statements (3 to 6 months), FD certificates, mutual fund consolidated account statement (CAS), demat holding statement, latest property valuation or registered sale deed for real estate, vehicle registration certificates, gold valuation certificate from a registered valuer if relevant, ITR and Form 16 (last 2 years), insurance surrender value letters, loan account statements showing outstanding balances, and credit card statements. Patron provides a digital intake checklist after the scoping call."}},
{"@type":"Question","name":"What is the correct way to value real estate?","acceptedAnswer":{"@type":"Answer","text":"Real estate must be valued at fair market value as on the certificate date — not the cost of acquisition or stamp duty value. For visa applications, two acceptable approaches: (1) state government's circle rate or ready-reckoner rate of the locality multiplied by carpet area, or (2) a registered valuer's report (preferred for high-value properties). Joint property must be apportioned by the actual ownership share recorded in the sale deed — typically 50/50 for spouses but verify from the registered document. Mortgaged property is shown at full market value as asset and the outstanding loan as liability."}},
{"@type":"Question","name":"How are vehicles valued for net worth purposes?","acceptedAnswer":{"@type":"Answer","text":"Vehicles must be valued at depreciated written-down value. The standard depreciation schedule used by Indian Chartered Accountants for net worth certificates: Year 1 — 90 percent of cost (10 percent depreciation); Year 2 — 80 percent; Year 3 — 65 percent; Year 4 — 55 percent; Year 5 and beyond — 45 percent of cost. So a ₹15 lakh car purchased 3 years ago is valued at ₹9.75 lakh for net worth purposes. Insurance IDV (Insured Declared Value) from the latest motor policy is another acceptable proxy. Never use the purchase price for cars older than 6 months."}},
{"@type":"Question","name":"Can the Net Worth Certificate include foreign assets?","acceptedAnswer":{"@type":"Answer","text":"Yes, foreign assets must be included if you are an Indian resident under FEMA and the Income-tax Act. Foreign bank accounts, foreign mutual funds, foreign real estate, foreign company shares, and similar assets must be disclosed in the Net Worth Certificate. The values are converted to INR at the State Bank of India reference rate on the certificate date. Failure to disclose foreign assets can have legal consequences under the Black Money (Undisclosed Foreign Income and Assets) Act 2015. NRIs preparing a net worth statement for re-entry to India should also disclose Indian assets."}},
{"@type":"Question","name":"What foreign currency conversion rate should be used?","acceptedAnswer":{"@type":"Answer","text":"For visa purposes, use the State Bank of India TT Buying or Selling reference rate as on the certificate date, available from sbi.co.in. As approximate guidance for 2026: USD ₹85, GBP ₹105, EUR ₹92, CAD ₹62, AUD ₹56. These vary daily — confirm exact rate on the day the CA signs the certificate. Some embassies (notably US Consulates) accept conversion using rates from the day of visa interview. Always include the conversion rate and date as a footnote on the certificate."}},
{"@type":"Question","name":"Is this Net Worth Calculator accepted by US/UK visa offices?","acceptedAnswer":{"@type":"Answer","text":"No. This calculator produces a directional preview only — it is NOT accepted by any visa office. Visa offices require a Chartered Accountant-certified statement on the CA firm's letterhead with ICAI membership number, firm registration number, and UDIN (Unique Document Identification Number). The CA must also issue the certificate after verifying source documents (bank statements, property documents, demat holdings, etc.). Use this calculator to draft the figures, then engage Patron Accounting to issue the certified version. UDIN can be verified by the embassy on udin.icai.org."}},
{"@type":"Question","name":"How long is a Net Worth Certificate valid?","acceptedAnswer":{"@type":"Answer","text":"A Net Worth Certificate is typically valid for 3 to 6 months from the date of issue, depending on the requesting authority. Most embassies require a certificate dated within 3 months of the visa application submission date. Bank loan applications and business transactions usually accept up to 6 months. For high-value transactions like NRI account opening or large foreign remittances, the certificate may need to be refreshed within 30 days. Always check the specific requirement of the receiving authority before generating the certificate."}},
{"@type":"Question","name":"Is this Net Worth Calculator a substitute for a CA certificate?","acceptedAnswer":{"@type":"Answer","text":"No. This calculator gives a directional preview that mimics the format of a real Net Worth Certificate but it does NOT have any legal or evidentiary value. Visa offices, embassies, banks, and other authorities will not accept the output of this calculator. To produce a legally valid certificate accepted by US, UK, Canada, Australia, Schengen and Indian banks, you must engage a practising Chartered Accountant who issues the certificate on their firm letterhead with ICAI membership details and UDIN. Patron Accounting issues CA-certified Net Worth Certificates in 2-5 working days with fixed-fee pricing."}}
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
.calc-row{display:grid;grid-template-columns:1fr;gap:16px;margin-bottom:16px}
@media (min-width:600px){.calc-row{grid-template-columns:1fr 1fr}.calc-row.three-col{grid-template-columns:1fr 1fr 1fr}}
.form-group label{display:block;font-size:12px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:0.5px}
.form-group label .hint{display:block;font-size:11px;color:var(--text-muted);font-weight:500;text-transform:none;letter-spacing:0;margin-top:2px}
.form-group input,.form-group select{width:100%;padding:11px 14px;border:2px solid var(--border);border-radius:10px;font-family:var(--font-body);font-size:15px;color:var(--text);background:var(--surface);outline:2px solid transparent;outline-offset:1px;transition:border-color 0.2s}
.form-group input:focus-visible,.form-group select:focus-visible{border-color:var(--primary);outline-color:var(--primary)}
.form-group input[type="number"],.form-group input[type="text"]{font-family:var(--font-mono);font-size:15px;font-weight:600}
.section-title{font-family:var(--font-mono);font-size:11px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin:24px 0 12px;padding-bottom:6px;border-bottom:1px dashed var(--border);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px}
.section-title small{font-weight:500;color:var(--text-muted);text-transform:none;letter-spacing:0.3px}
.section-asset-bg{background:#F0F5FB;padding:18px;border-radius:var(--radius);margin-bottom:18px;border-left:3px solid var(--primary-light)}
.section-liab-bg{background:#FFFBEB;padding:18px;border-radius:var(--radius);margin-bottom:18px;border-left:3px solid var(--accent)}
.section-pref-bg{background:#ECFDF5;padding:18px;border-radius:var(--radius);margin-bottom:18px;border-left:3px solid var(--success)}
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:3px;gap:3px;flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:60px;padding:8px 12px;border:none;border-radius:7px;font-family:var(--font-body);font-size:12px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.2s;-webkit-tap-highlight-color:transparent;min-height:40px}
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
.result-headline .meta{font-size:13px;opacity:0.9;margin-top:6px;line-height:1.55}
.result-headline.negative{background:linear-gradient(135deg,#7F1D1D 0%,#DC2626 100%)}
.summary-grid{display:grid;grid-template-columns:1fr;gap:12px;margin-bottom:16px}
@media (min-width:600px){.summary-grid{grid-template-columns:1fr 1fr 1fr}.summary-grid.two-col{grid-template-columns:1fr 1fr}}
.summary-card{background:var(--surface);border-radius:var(--radius);padding:16px 18px;border:1px solid var(--border)}
.summary-card.highlight{background:#FFF7ED;border-color:var(--accent)}
.summary-card.success{background:#ECFDF5;border-color:var(--success)}
.summary-card .v-label{font-family:var(--font-mono);font-size:10px;color:var(--accent);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:4px}
.summary-card.success .v-label{color:var(--success)}
.summary-card .v-val{font-family:var(--font-mono);font-size:22px;font-weight:700;color:var(--primary-dark);word-break:break-word}
.summary-card .v-desc{font-size:12px;color:var(--text-secondary);margin-top:4px;line-height:1.5}
.certificate-block{background:#FFFFFF;border:2px solid var(--primary);border-radius:var(--radius);padding:24px;margin-top:16px;overflow-x:auto;box-shadow:var(--shadow-md);position:relative}
.certificate-block::before{content:"PREVIEW — NOT CERTIFIED";position:absolute;top:8px;right:14px;font-family:var(--font-mono);font-size:10px;font-weight:700;color:var(--danger);background:#FEE2E2;padding:3px 8px;border-radius:4px;letter-spacing:1px}
.certificate-block h4{font-family:var(--font-body);font-size:18px;color:var(--primary-dark);text-align:center;margin-bottom:6px;font-weight:700;letter-spacing:0.5px}
.certificate-block .cert-sub{font-size:12px;color:var(--text-muted);text-align:center;margin-bottom:18px;font-style:italic}
.cert-tbl{width:100%;border-collapse:collapse;font-size:13px;margin-bottom:14px}
.cert-tbl th{background:var(--primary-dark);color:#fff;padding:10px 12px;text-align:left;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;font-weight:600}
.cert-tbl th:last-child{text-align:right}
.cert-tbl td{padding:8px 12px;border-bottom:1px solid var(--border);font-size:13px;color:var(--primary-dark)}
.cert-tbl td:last-child{text-align:right;font-family:var(--font-mono);font-weight:600}
.cert-tbl tr.subtotal td{background:#F0F5FB;font-weight:700;border-top:2px solid var(--primary-light)}
.cert-tbl tr.networth td{background:var(--primary);color:#fff;font-weight:700;font-size:14px;border:none}
.cert-tbl tr.zero-row td{color:var(--text-muted);font-style:italic;font-size:12px}
.cert-tbl tr.zero-row td:last-child{color:var(--text-muted)}
.cert-footnote{font-size:11px;color:var(--text-muted);margin-top:12px;line-height:1.6;font-style:italic;padding-top:10px;border-top:1px dashed var(--border)}
.adj-warning{background:#FEF3C7;border:1px solid #FCD34D;border-left:4px solid #D97706;border-radius:var(--radius);padding:18px 22px;margin-top:14px}
.adj-warning h4{font-family:var(--font-body);font-size:15px;color:#78350F;font-weight:700;margin-bottom:10px;display:flex;align-items:center;gap:8px}
.adj-warning ol{margin:0 0 0 22px}
.adj-warning li{font-size:13px;color:#78350F;line-height:1.65;margin-bottom:6px}
.adj-warning li strong{color:#78350F;font-weight:700}
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
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:18px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}.result-headline .value{font-size:22px}.certificate-block{padding:14px}.cert-tbl th,.cert-tbl td{padding:6px 8px;font-size:11px}.section-asset-bg,.section-liab-bg,.section-pref-bg{padding:14px}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-calculate,.office-strip,.footer,.breadcrumb,.section-asset-bg form,.section-liab-bg form{display:none !important}body{background:#fff;color:#000;font-size:11pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:16px;margin-bottom:16px}.result-headline,.certificate-block{-webkit-print-color-adjust:exact;print-color-adjust:exact}.hero h1{font-size:18pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}}

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
<a href="#calculator">Calculator</a><a href="#how-to-use">How to Use</a><a href="#adjustments">5 Adjustments</a><a href="#certificate">Certificate Format</a><a href="#visa-use">Visa Use Cases</a><a href="#fx-rates">FX Rates</a><a href="#documents">Documents</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>Net Worth Calculator</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>Net Worth Calculator — <span>Visa &amp; Immigration</span> Certificate Preview for India</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Need a <strong>CA-certified Net Worth Certificate</strong> for US / UK / Canada visa? Patron issues UDIN-verified certificates in 2-5 days. ₹3,500 onwards.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Net%20Worth%20Calculator%20and%20need%20a%20CA-certified%20Net%20Worth%20Certificate." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Net%20Worth%20Certificate&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Net%20Worth%20Calculator%20and%20need%20a%20CA-certified%20Net%20Worth%20Certificate%20for%3A%0A%0A-%20Purpose%20%28US%20visa%2FUK%20visa%2FCanada%2Fother%29%3A%20%0A-%20Required%20by%20date%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>This calculator builds a directional Net Worth statement in the same format that a Chartered Accountant uses to issue a <strong>UDIN-verified Net Worth Certificate</strong> for US / UK / Canada / Australia / Schengen visa applications, NRI account opening, bank loans, and large transactions. Enter assets across 11 categories (bank, FDs, MFs, shares, real estate, vehicles, gold, retirement, business) and liabilities across 6 categories. Get total assets, total liabilities, net worth in INR plus conversion to <strong>USD / CAD / GBP / EUR / AUD</strong>. <strong>This is a preview only</strong> — visa offices require a CA-issued certificate on letterhead with ICAI registration and UDIN. Patron issues certified versions in 2-5 days for ₹3,500 to ₹7,500.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Net Worth Calculator</h2>
<p class="sub">Builds an itemised asset-liability schedule that mimics a CA Net Worth Certificate. Includes vehicle auto-depreciation, joint-property share, 5-currency FX conversion, and the 5 critical adjustments most people miss.</p>
<noscript><div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="section-asset-bg">
<div class="section-title"><span>📊 ASSETS</span><small>Enter current/market values, not historical cost</small></div>

<div class="calc-row">
<div class="form-group"><label for="bankBalance">Bank Balances (₹) <span class="hint">Savings + current accounts</span></label><input type="text" id="bankBalance" inputmode="decimal" placeholder="2,50,000" autocomplete="off" value="250000"></div>
<div class="form-group"><label for="fdValue">Fixed Deposits + accrued interest (₹)</label><input type="text" id="fdValue" inputmode="decimal" placeholder="5,00,000" autocomplete="off" value="500000"></div>
</div>

<div class="calc-row">
<div class="form-group"><label for="mfValue">Mutual Funds at latest NAV (₹) <span class="hint">From CAS, not invested amount</span></label><input type="text" id="mfValue" inputmode="decimal" placeholder="8,00,000" autocomplete="off" value="800000"></div>
<div class="form-group"><label for="sharesListed">Listed Shares at market price (₹)</label><input type="text" id="sharesListed" inputmode="decimal" placeholder="3,00,000" autocomplete="off" value="300000"></div>
</div>

<div class="calc-row">
<div class="form-group"><label for="sharesUnlisted">Unlisted Shares / ESOPs at fair value (₹)</label><input type="text" id="sharesUnlisted" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
<div class="form-group"><label for="gold">Gold + Jewellery at current value (₹)</label><input type="text" id="gold" inputmode="decimal" placeholder="6,00,000" autocomplete="off" value="600000"></div>
</div>

<div class="section-title" style="margin-top:18px;"><span>🏠 Real Estate (with joint-share adjustment)</span></div>
<div class="calc-row three-col">
<div class="form-group"><label for="realEstate">Property Market Value (₹) <span class="hint">Full property, not your share</span></label><input type="text" id="realEstate" inputmode="decimal" placeholder="80,00,000" autocomplete="off" value="8000000"></div>
<div class="form-group"><label for="reShare">Your Ownership Share (%) <span class="hint">50% for typical spouse-joint</span></label><input type="text" id="reShare" inputmode="decimal" placeholder="100" autocomplete="off" value="100"></div>
<div class="form-group"><label>Adjusted Value</label><div style="padding:11px 14px;background:#FFF7ED;border:1px solid #FED7AA;border-radius:10px;font-family:var(--font-mono);font-size:15px;font-weight:700;color:var(--accent);min-height:42px;display:flex;align-items:center;" id="reAdjustedDisplay">—</div></div>
</div>

<div class="section-title" style="margin-top:18px;"><span>🚗 Vehicles (with auto-depreciation)</span></div>
<div class="calc-row three-col">
<div class="form-group"><label for="vehiclePrice">Vehicle Purchase Price (₹) <span class="hint">Original cost</span></label><input type="text" id="vehiclePrice" inputmode="decimal" placeholder="15,00,000" autocomplete="off" value="1500000"></div>
<div class="form-group"><label for="vehicleAge">Vehicle Age (years) <span class="hint">From purchase</span></label><input type="text" id="vehicleAge" inputmode="decimal" placeholder="3" autocomplete="off" value="3"></div>
<div class="form-group"><label>Depreciated Value</label><div style="padding:11px 14px;background:#FFF7ED;border:1px solid #FED7AA;border-radius:10px;font-family:var(--font-mono);font-size:15px;font-weight:700;color:var(--accent);min-height:42px;display:flex;align-items:center;" id="vehDepreciatedDisplay">—</div></div>
</div>

<div class="calc-row">
<div class="form-group"><label for="retirement">Retirement Funds (₹) <span class="hint">PPF + EPF + NPS combined</span></label><input type="text" id="retirement" inputmode="decimal" placeholder="12,00,000" autocomplete="off" value="1200000"></div>
<div class="form-group"><label for="businessCapital">Business Capital (₹) <span class="hint">Net of business liabilities</span></label><input type="text" id="businessCapital" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
</div>

<div class="calc-row">
<div class="form-group"><label for="insSurrender">Insurance Surrender Value (₹) <span class="hint">Not premiums paid</span></label><input type="text" id="insSurrender" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
<div class="form-group"><label for="otherAssets">Other Assets (₹) <span class="hint">Bonds, debentures, etc.</span></label><input type="text" id="otherAssets" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
</div>
</div>

<div class="section-liab-bg">
<div class="section-title"><span>💳 LIABILITIES</span><small>Outstanding balances as of today</small></div>
<div class="calc-row">
<div class="form-group"><label for="homeLoan">Home Loan Outstanding (₹)</label><input type="text" id="homeLoan" inputmode="decimal" placeholder="25,00,000" autocomplete="off" value="2500000"></div>
<div class="form-group"><label for="personalLoan">Personal Loans (₹)</label><input type="text" id="personalLoan" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
</div>
<div class="calc-row">
<div class="form-group"><label for="carLoan">Vehicle Loans (₹)</label><input type="text" id="carLoan" inputmode="decimal" placeholder="3,00,000" autocomplete="off" value="300000"></div>
<div class="form-group"><label for="creditCard">Credit Card Dues (₹) <span class="hint">Outstanding, not credit limit</span></label><input type="text" id="creditCard" inputmode="decimal" placeholder="50,000" autocomplete="off" value="50000"></div>
</div>
<div class="calc-row">
<div class="form-group"><label for="businessLoans">Business Borrowings (₹)</label><input type="text" id="businessLoans" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
<div class="form-group"><label for="otherLiab">Other Liabilities (₹) <span class="hint">Family loans, etc.</span></label><input type="text" id="otherLiab" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
</div>
</div>

<div class="section-pref-bg">
<div class="section-title"><span>💱 PREFERENCES</span><small>FX conversion for visa applications</small></div>
<div class="calc-row">
<div class="form-group"><label>Convert Net Worth to</label>
<div class="toggle-group" role="group" aria-label="Foreign currency">
<button type="button" class="toggle-btn active" data-fx="USD" onclick="setFx(this)">USD</button>
<button type="button" class="toggle-btn" data-fx="GBP" onclick="setFx(this)">GBP</button>
<button type="button" class="toggle-btn" data-fx="EUR" onclick="setFx(this)">EUR</button>
<button type="button" class="toggle-btn" data-fx="CAD" onclick="setFx(this)">CAD</button>
<button type="button" class="toggle-btn" data-fx="AUD" onclick="setFx(this)">AUD</button>
</div></div>
<div class="form-group"><label for="fxRate">FX Rate (₹ per unit) <span class="hint">Override if needed</span></label><input type="text" id="fxRate" inputmode="decimal" placeholder="85" autocomplete="off" value="85"></div>
</div>
</div>

<button class="btn-calculate" onclick="calculate()" type="button">Compute Net Worth</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline" id="resHeadlineBox">
<div class="label">Estimated Net Worth</div>
<div class="value"><span class="accent" id="resHeadline">—</span></div>
<div class="meta" id="resHeadlineMeta">—</div>
</div>

<div class="summary-grid">
<div class="summary-card success"><div class="v-label">Total Assets</div><div class="v-val" id="resAssets">—</div><div class="v-desc">All 11 categories combined</div></div>
<div class="summary-card highlight"><div class="v-label">Total Liabilities</div><div class="v-val" id="resLiab">—</div><div class="v-desc">All 6 categories combined</div></div>
<div class="summary-card"><div class="v-label" id="fxLabel">USD Equivalent</div><div class="v-val" id="resFx">—</div><div class="v-desc" id="resFxDesc">At ₹85 per USD</div></div>
</div>

<div class="certificate-block">
<h4>Statement of Net Worth</h4>
<div class="cert-sub">As on <span id="certDate">—</span> · Format mimics Indian CA Net Worth Certificate</div>

<table class="cert-tbl">
<thead><tr><th>Asset Category</th><th>Amount (₹)</th></tr></thead>
<tbody id="certAssetBody"></tbody>
<tfoot>
<tr class="subtotal"><td><strong>Total Assets (A)</strong></td><td id="certAssetTotal"><strong>—</strong></td></tr>
</tfoot>
</table>

<table class="cert-tbl">
<thead><tr><th>Liability Category</th><th>Amount (₹)</th></tr></thead>
<tbody id="certLiabBody"></tbody>
<tfoot>
<tr class="subtotal"><td><strong>Total Liabilities (B)</strong></td><td id="certLiabTotal"><strong>—</strong></td></tr>
<tr class="networth"><td><strong>NET WORTH (A − B)</strong></td><td id="certNetWorth"><strong>—</strong></td></tr>
</tfoot>
</table>

<div class="cert-footnote">
This is a directional preview generated by an automated calculator. It is <strong>not</strong> a Chartered Accountant-certified Net Worth Certificate and has no legal or evidentiary value. For visa applications, NRI account opening, bank loans, or any third-party submission, a CA-certified version on firm letterhead with ICAI membership number and UDIN is mandatory. Visit <a href="https://udin.icai.org/" target="_blank" rel="noopener">udin.icai.org</a> for UDIN verification process.
</div>
</div>

<div class="adj-warning">
<h4>⚠ 5 Critical Adjustments You Must Apply Before Submitting</h4>
<ol>
<li><strong>Joint property share.</strong> Only include your ownership percentage from the registered sale deed. Husband-wife joint ownership typically means 50% each — not 100% in each spouse's statement.</li>
<li><strong>Vehicle depreciation.</strong> Cars must be at written-down value, not purchase price. Apply 10% Year 1, 20% Year 2, 35% Year 3, 45% Year 4, 55% Year 5+ depreciation. Or use the IDV from your latest motor insurance policy.</li>
<li><strong>FD accrued interest.</strong> Interest accrued from the last interest credit date to today must be added to the FD face value. For a ₹5 lakh FD at 7% from past 4 months, add roughly ₹11,667 of accrued interest.</li>
<li><strong>Insurance surrender value, not premiums.</strong> Life insurance must be at the policy's current surrender value (obtain from insurer's customer service). Cumulative premiums paid is the wrong number.</li>
<li><strong>Mutual fund NAV.</strong> Use the latest published NAV from the AMC, not the original invested amount. Get this from your Consolidated Account Statement (CAS) — free monthly download from CAMS / KFintech.</li>
</ol>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head">Need a UDIN-verified CA Net Worth Certificate?</div>
<div class="post-result-cta-sub">Patron Accounting issues certified certificates in 2-5 working days, ₹3,500 to ₹7,500. UDIN-verified, on CA firm letterhead, accepted by US/UK/Canada/Australia/Schengen embassies and Indian banks.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20used%20the%20Net%20Worth%20Calculator%20and%20need%20a%20CA-certified%20Net%20Worth%20Certificate." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Net%20Worth%20Certificate&body=Hi%2C%0A%0AI%20just%20ran%20the%20Net%20Worth%20Calculator%20and%20need%20a%20CA-certified%20Net%20Worth%20Certificate.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print Preview</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the Net Worth Calculator</h2>
<ol>
<li><strong>Enter assets at current market value.</strong> Not the historical cost — what would you receive if you liquidated today. For mutual funds, use latest NAV from your Consolidated Account Statement.</li>
<li><strong>Apply joint-property share for real estate.</strong> Enter the full property market value, then set your ownership percentage (50% for typical spouse joint, 33% for three-way, etc.). The calculator applies the share automatically.</li>
<li><strong>Use the vehicle auto-depreciation.</strong> Enter the original purchase price and the age in years. The calculator applies the standard 10/20/35/45/55% depreciation schedule used by Indian CAs.</li>
<li><strong>Insurance at surrender value.</strong> Call your insurer customer service or check the insurer's app for surrender value. Premiums paid is NOT the right figure.</li>
<li><strong>Enter liabilities at outstanding balance.</strong> Loan account statements show this. Credit card outstanding (not credit limit).</li>
<li><strong>Pick foreign currency for visa context.</strong> US/UK/Canada/Australia/Schengen embassies usually want a USD/GBP equivalent. Override the FX rate field with the actual SBI TT rate on your certificate date.</li>
<li><strong>Click Compute.</strong> You get the certificate-style preview with assets, liabilities, and net worth in INR + your chosen currency. Print or save for your records.</li>
</ol>
</section>

<section class="content-section" id="adjustments">
<h2>The 5 Critical Adjustments — Detailed Explainer</h2>
<p>These are the five adjustments that distinguish a defensible Net Worth Certificate from a naive estimate. Visa officers and bankers are trained to spot these and routinely query certificates that miss them.</p>

<h3>1. Joint Property Share</h3>
<p>The single most common mistake. If a property worth ₹1 crore is owned 50/50 with your spouse, only ₹50 lakh counts in your statement. If you and your spouse both file Net Worth statements (e.g., both applying for visas), each statement shows ₹50 lakh — never double-count.</p>
<ul>
<li>Check the registered sale deed for the actual ownership ratio</li>
<li>Some properties may be in the name of one spouse only — verify before assuming 50/50</li>
<li>Ancestral property: each legal heir's share per Hindu Succession Act</li>
<li>HUF property: all co-parceners share equally unless documented otherwise</li>
</ul>

<h3>2. Vehicle Depreciation</h3>
<p>Cars and motorcycles depreciate sharply in the first 3 years. Use this standard schedule:</p>
<table class="rate-table">
<thead><tr><th>Vehicle Age</th><th>Value as % of cost</th><th>Depreciation %</th></tr></thead>
<tbody>
<tr><td>0–1 year</td><td>90%</td><td>10%</td></tr>
<tr><td>1–2 years</td><td>80%</td><td>20%</td></tr>
<tr><td>2–3 years</td><td>65%</td><td>35%</td></tr>
<tr><td>3–4 years</td><td>55%</td><td>45%</td></tr>
<tr><td>4–5 years</td><td>45%</td><td>55%</td></tr>
<tr><td>5+ years</td><td>45% (floor)</td><td>55%</td></tr>
</tbody>
</table>
<p>Alternative: use the Insured Declared Value (IDV) from your latest motor insurance policy. The IDV is the insurer's computed market value — already depreciated and defensible.</p>

<h3>3. Fixed Deposit Accrued Interest</h3>
<p>FDs earn interest continuously but credit only at maturity or quarterly intervals. Between two credit dates, interest accrues but doesn't appear in your bank balance. For Net Worth purposes, this accrued interest must be added.</p>
<p>Formula: <strong>Accrued Interest = FD Principal × Annual Rate × (Days since last credit ÷ 365)</strong>. For a ₹5 lakh FD at 7% with last interest credit 120 days ago: ₹5,00,000 × 7% × 120/365 = ₹11,507 to be added.</p>

<h3>4. Insurance Surrender Value (not premiums)</h3>
<p>Cumulative premiums paid is not the asset value of a life insurance policy. The correct figure is the <strong>surrender value</strong> — what the insurer would pay you today if you cancelled the policy. Term insurance has zero surrender value (it's pure protection, no investment). ULIPs have surrender value approximately equal to the fund value minus exit penalties. Endowment policies have surrender value based on a formula prescribed by IRDAI.</p>
<p>Get the surrender value from: insurer's customer portal, customer service helpline, or annual policy statement. For visa-grade documentation, request a written surrender value letter from the insurer dated within 30 days of the certificate.</p>

<h3>5. Mutual Fund NAV</h3>
<p>For mutual funds, the correct asset value is units × current NAV — not the amount you invested. NAV moves daily; use the latest published NAV from the AMC website or your Consolidated Account Statement.</p>
<p>Get this from: <strong>CAMS / KFintech monthly CAS</strong> (free email service; subscribe at <a href="https://www.camsonline.com/" target="_blank" rel="noopener">camsonline.com</a> or <a href="https://www.kfintech.com/" target="_blank" rel="noopener">kfintech.com</a>). The CAS shows latest NAV-based valuation for every fund holding across AMCs.</p>

<div class="callout warn"><p><strong>Why this matters.</strong> Embassies scrutinise Net Worth Certificates closely. A statement that shows real estate at full value (when jointly owned) or cars at purchase price is a red flag and can lead to visa rejection. A CA-issued certificate applies all 5 adjustments correctly — that's why CA certification matters beyond just the signature.</p></div>
</section>

<section class="content-section" id="certificate">
<h2>What a CA Net Worth Certificate Looks Like</h2>
<p>A CA-issued Net Worth Certificate follows a standardised format prescribed by ICAI:</p>

<h3>Mandatory Components</h3>
<ul>
<li><strong>CA firm letterhead</strong> — name, address, firm registration number (FRN)</li>
<li><strong>Certificate title</strong> — "Net Worth Certificate" or "Statement of Net Worth"</li>
<li><strong>Applicant details</strong> — full name, PAN, address as per Aadhaar</li>
<li><strong>"As on" date</strong> — the certificate date</li>
<li><strong>Asset schedule</strong> — itemised by category with values</li>
<li><strong>Liability schedule</strong> — itemised by category</li>
<li><strong>Net Worth statement</strong> — Assets minus Liabilities</li>
<li><strong>Currency conversion</strong> — INR equivalent in foreign currency (optional, depending on use)</li>
<li><strong>CA signature</strong> with name, membership number, designation</li>
<li><strong>UDIN</strong> (Unique Document Identification Number) — printed on certificate; verifiable at udin.icai.org</li>
<li><strong>Date and place</strong> of issue</li>
</ul>

<h3>What the Embassy Looks For</h3>
<ul>
<li>UDIN must be present and verifiable online</li>
<li>Certificate must be dated within 3 months of visa application submission</li>
<li>CA's ICAI membership number must be valid (verified at <a href="https://www.icai.org/" target="_blank" rel="noopener">icai.org</a>)</li>
<li>Schedule of assets and liabilities must be itemised, not lumped together</li>
<li>Joint property share must be explicit (footnote)</li>
<li>Foreign currency conversion rate and source must be disclosed</li>
</ul>
</section>

<div class="body-cta">
<h3>Need a UDIN-Verified CA Net Worth Certificate?</h3>
<p>Patron Accounting issues UDIN-verified Net Worth Certificates accepted by US Consulate, UK VFS, Canada CHC, Australia VFS, Schengen consulates, and Indian banks. 2-5 day turnaround, fixed fee ₹3,500 to ₹7,500. Pune, Mumbai, Delhi, Gurugram and pan-India digital delivery.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20a%20CA-certified%20Net%20Worth%20Certificate." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Net%20Worth%20Certificate&body=Hi%2C%20we%27d%20like%20a%20CA-certified%20Net%20Worth%20Certificate.%0A%0APurpose%3A%20%0ARequired%20by%3A%20%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="visa-use">
<h2>Common Visa Use Cases for Net Worth Certificate</h2>

<table class="rate-table">
<thead><tr><th>Visa Type</th><th>Typical Net Worth Threshold</th><th>Validity Required</th></tr></thead>
<tbody>
<tr><td>US B1/B2 (visitor)</td><td>No minimum, but ₹15-25 L+ preferred</td><td>3 months</td></tr>
<tr><td>US F1 (student)</td><td>~₹40-60 L (covers 1-2 yr tuition)</td><td>3 months</td></tr>
<tr><td>UK Standard Visitor</td><td>No minimum, but ₹10-20 L+ preferred</td><td>3 months</td></tr>
<tr><td>UK Tier 4 (student)</td><td>~₹30-50 L (covers tuition + living)</td><td>3 months</td></tr>
<tr><td>Canada Visitor / Study</td><td>No minimum, but GIC ₹13 L + total ~₹30 L+ preferred</td><td>3 months</td></tr>
<tr><td>Australia Tourist / Student</td><td>~AUD 75K liquid for student; ~₹15 L+ for visitor</td><td>3 months</td></tr>
<tr><td>Schengen Visa</td><td>~€100/day × travel days + ₹5-10 L liquid</td><td>3 months</td></tr>
<tr><td>NRI Account / Foreign Bank</td><td>Varies by bank, often ₹25 L+</td><td>30 days</td></tr>
<tr><td>Indian Business Loan</td><td>Bank-specific; usually 1.5× loan amount</td><td>3-6 months</td></tr>
</tbody>
</table>

<h3>Specialised Net Worth Certificates Patron Issues</h3>
<ul>
<li><a href="/net-worth-certificate-for-us-visa">US Visa Net Worth Certificate</a></li>
<li><a href="/net-worth-certificate-for-uk-visa">UK Visa Net Worth Certificate</a></li>
<li><a href="/net-worth-certificate-for-canada-visa">Canada Visa Net Worth Certificate</a></li>
<li><a href="/net-worth-certificate-for-schengen-visa">Schengen Visa Net Worth Certificate</a></li>
<li><a href="/net-worth-certificate-for-australia-visa">Australia Visa Net Worth Certificate</a></li>
</ul>
</section>

<section class="content-section" id="fx-rates">
<h2>Foreign Currency Conversion Rates (Reference 2026)</h2>
<p>For visa applications, use the State Bank of India TT Buying or Selling reference rate as on the certificate date. The calculator defaults to indicative 2026 rates — override the FX Rate input with the exact SBI rate on your certificate date.</p>

<table class="rate-table">
<thead><tr><th>Currency</th><th>Indicative ₹ Rate (2026)</th><th>SBI Reference</th></tr></thead>
<tbody>
<tr><td>US Dollar (USD)</td><td>₹85</td><td>SBI TT Buying / Selling</td></tr>
<tr><td>British Pound (GBP)</td><td>₹105</td><td>SBI TT Buying / Selling</td></tr>
<tr><td>Euro (EUR)</td><td>₹92</td><td>SBI TT Buying / Selling</td></tr>
<tr><td>Canadian Dollar (CAD)</td><td>₹62</td><td>SBI TT Buying / Selling</td></tr>
<tr><td>Australian Dollar (AUD)</td><td>₹56</td><td>SBI TT Buying / Selling</td></tr>
<tr><td>Singapore Dollar (SGD)</td><td>₹63</td><td>SBI TT Buying / Selling</td></tr>
<tr><td>UAE Dirham (AED)</td><td>₹23.15</td><td>SBI TT Buying / Selling</td></tr>
</tbody>
</table>

<div class="callout warn"><p><strong>Always disclose the conversion rate</strong> as a footnote on the certificate, with the source (SBI TT, RBI reference rate, etc.) and date. Embassies cross-verify the rate. Using outdated or inflated rates is a common rejection cause.</p></div>
</section>

<section class="content-section" id="documents">
<h2>Documents Required for CA Net Worth Certificate</h2>
<p>Patron Accounting collects the following documents (digital scans acceptable) before issuing a UDIN-verified certificate:</p>

<h3>Identity &amp; Address</h3>
<ul>
<li>PAN card</li>
<li>Aadhaar card (front + back)</li>
<li>Latest address proof (utility bill, voter ID, passport)</li>
</ul>

<h3>Bank Accounts</h3>
<ul>
<li>Latest 3-6 months bank statements (savings + current accounts)</li>
<li>Fixed deposit certificates with accrued interest details</li>
</ul>

<h3>Investments</h3>
<ul>
<li>Mutual fund Consolidated Account Statement (CAS) — latest month</li>
<li>Demat account holding statement (latest)</li>
<li>Insurance policy surrender value letters (within 30 days)</li>
<li>PPF / EPF / NPS latest balance statements</li>
</ul>

<h3>Real Estate</h3>
<ul>
<li>Registered sale deed (for ownership share verification)</li>
<li>Latest property valuation report from registered valuer (high-value properties)</li>
<li>Loan account statement showing outstanding balance (for mortgaged properties)</li>
</ul>

<h3>Vehicles, Gold &amp; Other</h3>
<ul>
<li>Vehicle Registration Certificates (RC books)</li>
<li>Motor insurance policy showing IDV</li>
<li>Gold valuation certificate from registered valuer (for high gold holdings)</li>
<li>Sovereign Gold Bond (SGB) statements</li>
</ul>

<h3>Income Tax Records</h3>
<ul>
<li>Last 2 years ITR-V acknowledgements</li>
<li>Form 26AS / Annual Information Statement (AIS)</li>
<li>Form 16 (salaried) or P&amp;L + Balance Sheet (business owners)</li>
</ul>

<div class="callout"><p><strong>CA Tip:</strong> Submit complete documentation upfront. Incomplete documents cause back-and-forth that delays the 2-5 day turnaround. Patron provides a digital intake checklist after the scoping call; once all documents are received the certificate is typically ready within 48 hours.</p></div>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions About Net Worth Certificate</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is a Net Worth Certificate and when is it required?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A Net Worth Certificate is a Chartered Accountant-certified statement showing an individual's total assets, total liabilities, and net worth as on a specific date. It is required for: US B1/B2 visa applications, UK Standard Visitor and Tier 4 student visas, Canada visitor and study visas, Australian student and visitor visas, Schengen visas, scholarship applications to foreign universities, NRI account opening with foreign banks, large business loans, and high-value real estate transactions. The certificate must be issued by a practising Chartered Accountant with UDIN (Unique Document Identification Number) verification.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How is net worth computed?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Net worth equals total assets minus total liabilities. Total assets include bank balances, fixed deposits at face value plus accrued interest, mutual funds at latest Net Asset Value (NAV), listed shares at market price, unlisted shares at fair value, real estate at market value (only the owner's share if jointly held), vehicles at depreciated written-down value, gold and jewellery at current market price, retirement funds (PPF, EPF, NPS) at latest balance, and business capital. Total liabilities include home loans, personal loans, vehicle loans, credit card dues, business borrowings, and any other outstanding obligations.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What are the 5 critical adjustments most people get wrong?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Five common mistakes: (1) Joint property — only the owner's percentage share counts, not the full property value; husband-wife joint ownership typically means 50 percent each. (2) Vehicle valuation — must be at depreciated written-down value, not purchase price; a 3-year-old car is typically valued at 55-65 percent of original cost. (3) FD accrued interest — interest accrued but not yet credited must be added to the FD value. (4) Insurance surrender value — life insurance policies should be at the current surrender value, not the cumulative premiums paid. (5) Mutual fund NAV — use the latest Net Asset Value, not the original invested amount. These five adjustments often differ by ₹3 to ₹15 lakh from a naive estimate.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Why is a CA-certified Net Worth Certificate needed for visa applications?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Foreign embassies and consulates require an independent verification of the applicant's financial standing — they cannot rely on self-declared figures. A Chartered Accountant-issued certificate with UDIN serves as that independent verification because the CA is professionally regulated by ICAI and is legally accountable for the accuracy of the certificate. Self-prepared net worth statements are not accepted by US Consulate Mumbai, UK VFS Centres, Canada CHC, or Australian VFS. The CA certificate must be on letterhead with ICAI membership number, firm registration number, and UDIN.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How much does a CA Net Worth Certificate cost in India?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Patron Accounting issues Net Worth Certificates for ₹3,500 to ₹7,500 depending on complexity. Simple cases (1 to 2 properties, standard financial assets) start at ₹3,500. Complex cases involving multiple jointly-owned properties, business interests in private companies, foreign assets, or NRI status, run up to ₹7,500. Turnaround time is 2 to 5 working days from receipt of complete documentation. The certificate is issued on Patron's CA firm letterhead with ICAI registration, UDIN, and digital signature.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What documents are needed for a CA Net Worth Certificate?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Standard documentation: PAN card, Aadhaar, latest bank statements (3 to 6 months), FD certificates, mutual fund consolidated account statement (CAS), demat holding statement, latest property valuation or registered sale deed for real estate, vehicle registration certificates, gold valuation certificate from a registered valuer if relevant, ITR and Form 16 (last 2 years), insurance surrender value letters, loan account statements showing outstanding balances, and credit card statements. Patron provides a digital intake checklist after the scoping call.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the correct way to value real estate?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Real estate must be valued at fair market value as on the certificate date — not the cost of acquisition or stamp duty value. For visa applications, two acceptable approaches: (1) state government's circle rate or ready-reckoner rate of the locality multiplied by carpet area, or (2) a registered valuer's report (preferred for high-value properties). Joint property must be apportioned by the actual ownership share recorded in the sale deed — typically 50/50 for spouses but verify from the registered document. Mortgaged property is shown at full market value as asset and the outstanding loan as liability.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How are vehicles valued for net worth purposes?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Vehicles must be valued at depreciated written-down value. The standard depreciation schedule used by Indian Chartered Accountants for net worth certificates: Year 1 — 90 percent of cost (10 percent depreciation); Year 2 — 80 percent; Year 3 — 65 percent; Year 4 — 55 percent; Year 5 and beyond — 45 percent of cost. So a ₹15 lakh car purchased 3 years ago is valued at ₹9.75 lakh for net worth purposes. Insurance IDV (Insured Declared Value) from the latest motor policy is another acceptable proxy. Never use the purchase price for cars older than 6 months.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can the Net Worth Certificate include foreign assets?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes, foreign assets must be included if you are an Indian resident under FEMA and the Income-tax Act. Foreign bank accounts, foreign mutual funds, foreign real estate, foreign company shares, and similar assets must be disclosed in the Net Worth Certificate. The values are converted to INR at the State Bank of India reference rate on the certificate date. Failure to disclose foreign assets can have legal consequences under the Black Money (Undisclosed Foreign Income and Assets) Act 2015. NRIs preparing a net worth statement for re-entry to India should also disclose Indian assets.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What foreign currency conversion rate should be used?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For visa purposes, use the State Bank of India TT Buying or Selling reference rate as on the certificate date, available from sbi.co.in. As approximate guidance for 2026: USD ₹85, GBP ₹105, EUR ₹92, CAD ₹62, AUD ₹56. These vary daily — confirm exact rate on the day the CA signs the certificate. Some embassies (notably US Consulates) accept conversion using rates from the day of visa interview. Always include the conversion rate and date as a footnote on the certificate.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is this Net Worth Calculator accepted by US/UK visa offices?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. This calculator produces a directional preview only — it is NOT accepted by any visa office. Visa offices require a Chartered Accountant-certified statement on the CA firm's letterhead with ICAI membership number, firm registration number, and UDIN (Unique Document Identification Number). The CA must also issue the certificate after verifying source documents (bank statements, property documents, demat holdings, etc.). Use this calculator to draft the figures, then engage Patron Accounting to issue the certified version. UDIN can be verified by the embassy on udin.icai.org.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How long is a Net Worth Certificate valid?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A Net Worth Certificate is typically valid for 3 to 6 months from the date of issue, depending on the requesting authority. Most embassies require a certificate dated within 3 months of the visa application submission date. Bank loan applications and business transactions usually accept up to 6 months. For high-value transactions like NRI account opening or large foreign remittances, the certificate may need to be refreshed within 30 days. Always check the specific requirement of the receiving authority before generating the certificate.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is this Net Worth Calculator a substitute for a CA certificate?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. This calculator gives a directional preview that mimics the format of a real Net Worth Certificate but it does NOT have any legal or evidentiary value. Visa offices, embassies, banks, and other authorities will not accept the output of this calculator. To produce a legally valid certificate accepted by US, UK, Canada, Australia, Schengen and Indian banks, you must engage a practising Chartered Accountant who issues the certificate on their firm letterhead with ICAI membership details and UDIN. Patron Accounting issues CA-certified Net Worth Certificates in 2-5 working days with fixed-fee pricing.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>Need a CA Certificate?</h3>
<p>UDIN-verified Net Worth Certificates for US/UK/Canada/Australia visa. ₹3,500–₹7,500. 2-5 day turnaround.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20a%20CA%20Net%20Worth%20Certificate." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Net%20Worth%20Certificate&body=Hi%2C%20we%27d%20like%20a%20Net%20Worth%20Certificate.%0A%0APurpose%3A%20%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<div class="sidebar-card"><h3>Visa-Specific Certificates</h3>
<a href="/net-worth-certificate-for-us-visa" class="sidebar-link">US Visa Net Worth <span class="arrow">→</span></a>
<a href="/net-worth-certificate-for-uk-visa" class="sidebar-link">UK Visa Net Worth <span class="arrow">→</span></a>
<a href="/net-worth-certificate-for-canada-visa" class="sidebar-link">Canada Visa Net Worth <span class="arrow">→</span></a>
<a href="/net-worth-certificate-for-schengen-visa" class="sidebar-link">Schengen Visa Net Worth <span class="arrow">→</span></a>
<a href="/net-worth-certificate-for-australia-visa" class="sidebar-link">Australia Visa Net Worth <span class="arrow">→</span></a>
<a href="/ca-certified-services" class="sidebar-link">All CA Certified Services <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Tools</h3>
<a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
<a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
<a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">→</span></a>
<a href="/tools/sip-calculator" class="sidebar-link">SIP Calculator <span class="arrow">→</span></a>
<a href="/tools/fd-calculator" class="sidebar-link">FD Calculator <span class="arrow">→</span></a>
<a href="/tools/ppf-calculator" class="sidebar-link">PPF Calculator <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>From the Blog</h3>
<a href="/blog/net-worth-certificate-process-and-requirements" class="sidebar-link">Net Worth Certificate Guide <span class="arrow">→</span></a>
<a href="/blog/tax-implications-of-investing-abroad" class="sidebar-link">Foreign Asset Disclosure <span class="arrow">→</span></a>
<a href="/blog/nri-tax-compliance-guide" class="sidebar-link">NRI Tax Compliance Guide <span class="arrow">→</span></a>
</div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
function parseINR(raw){if(raw===undefined||raw===null)return NaN;const c=String(raw).replace(/[,\s₹%]/g,'');if(c==='')return 0;const n=parseFloat(c);return isFinite(n)?n:NaN;}
function showError(msg){const b=document.getElementById('errorBanner');b.textContent=msg;b.classList.add('visible');setTimeout(()=>b.classList.remove('visible'),6000);}
function fmtINR(n){if(!isFinite(n))return '—';return '₹'+Math.round(n).toLocaleString('en-IN');}
function fmtL(n){if(!isFinite(n))return '—';const abs = Math.abs(n);if(abs >= 10000000)return '₹'+(n/10000000).toFixed(2)+' Cr';if(abs >= 100000)return '₹'+(n/100000).toFixed(2)+' L';return fmtINR(n);}
function fmtFx(n, sym){if(!isFinite(n))return '—';return sym+Math.round(n).toLocaleString('en-US');}

let currentFx = 'USD';
const fxDefaults = {USD: 85, GBP: 105, EUR: 92, CAD: 62, AUD: 56};
const fxSymbols = {USD: '$', GBP: '£', EUR: '€', CAD: 'C$', AUD: 'A$'};

function setFx(b){
    const e = b.closest ? (b.closest('.toggle-btn') || b) : b;
    currentFx = e.dataset.fx;
    e.parentElement.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));
    e.classList.add('active');
    document.getElementById('fxRate').value = fxDefaults[currentFx];
    if(document.getElementById('resultSection').classList.contains('visible')) calculate(true);
}

// Vehicle depreciation lookup
function vehDepFactor(age){
    if(age < 1) return 0.90;
    if(age < 2) return 0.80;
    if(age < 3) return 0.65;
    if(age < 4) return 0.55;
    return 0.45;
}

// Live update of derived fields
function updateDerived(){
    const re = parseINR(document.getElementById('realEstate').value);
    const shareRaw = parseINR(document.getElementById('reShare').value);
    const share = Math.max(0, Math.min(100, isFinite(shareRaw) ? shareRaw : 100));
    const adjusted = isFinite(re) ? re * share/100 : NaN;
    document.getElementById('reAdjustedDisplay').textContent = isFinite(adjusted) ? fmtL(adjusted) : '—';

    const vp = parseINR(document.getElementById('vehiclePrice').value);
    const va = parseINR(document.getElementById('vehicleAge').value);
    const factor = isFinite(va) ? vehDepFactor(va) : 1;
    const vehDep = isFinite(vp) ? vp * factor : NaN;
    document.getElementById('vehDepreciatedDisplay').textContent = isFinite(vehDep) ? fmtL(vehDep) + ' (' + ((1-factor)*100).toFixed(0) + '% dep)' : '—';
}

['realEstate','reShare','vehiclePrice','vehicleAge'].forEach(id => {
    document.getElementById(id).addEventListener('input', updateDerived);
});
updateDerived();

function calculate(silent){
    const inputs = {
        bankBalance: parseINR(document.getElementById('bankBalance').value),
        fdValue: parseINR(document.getElementById('fdValue').value),
        mfValue: parseINR(document.getElementById('mfValue').value),
        sharesListed: parseINR(document.getElementById('sharesListed').value),
        sharesUnlisted: parseINR(document.getElementById('sharesUnlisted').value),
        gold: parseINR(document.getElementById('gold').value),
        realEstate: parseINR(document.getElementById('realEstate').value),
        reShare: parseINR(document.getElementById('reShare').value),
        vehiclePrice: parseINR(document.getElementById('vehiclePrice').value),
        vehicleAge: parseINR(document.getElementById('vehicleAge').value),
        retirement: parseINR(document.getElementById('retirement').value),
        businessCapital: parseINR(document.getElementById('businessCapital').value),
        insSurrender: parseINR(document.getElementById('insSurrender').value),
        otherAssets: parseINR(document.getElementById('otherAssets').value),
        homeLoan: parseINR(document.getElementById('homeLoan').value),
        personalLoan: parseINR(document.getElementById('personalLoan').value),
        carLoan: parseINR(document.getElementById('carLoan').value),
        creditCard: parseINR(document.getElementById('creditCard').value),
        businessLoans: parseINR(document.getElementById('businessLoans').value),
        otherLiab: parseINR(document.getElementById('otherLiab').value),
        fxRate: parseINR(document.getElementById('fxRate').value)
    };

    for(const k in inputs){
        if(!isFinite(inputs[k])){showError('Invalid input in ' + k + '. Use only numbers.');return;}
    }
    if(inputs.reShare < 0 || inputs.reShare > 100){showError('Ownership share must be 0-100%.');return;}
    if(inputs.vehicleAge < 0 || inputs.vehicleAge > 30){showError('Vehicle age must be 0-30 years.');return;}
    if(inputs.fxRate <= 0){showError('FX rate must be greater than 0.');return;}

    const reAdjusted = inputs.realEstate * inputs.reShare / 100;
    const vehDep = inputs.vehiclePrice * vehDepFactor(inputs.vehicleAge);

    // Assets schedule
    const assets = [
        {label: 'Bank Balances', amt: inputs.bankBalance},
        {label: 'Fixed Deposits (+ accrued interest)', amt: inputs.fdValue},
        {label: 'Mutual Funds (at latest NAV)', amt: inputs.mfValue},
        {label: 'Listed Shares (at market price)', amt: inputs.sharesListed},
        {label: 'Unlisted Shares / ESOPs (at fair value)', amt: inputs.sharesUnlisted},
        {label: 'Gold &amp; Jewellery (at current value)', amt: inputs.gold},
        {label: 'Real Estate' + (inputs.reShare < 100 ? ' (' + inputs.reShare + '% share)' : ''), amt: reAdjusted},
        {label: 'Vehicle (depreciated, age ' + inputs.vehicleAge + 'yr)', amt: vehDep},
        {label: 'Retirement Funds (PPF/EPF/NPS)', amt: inputs.retirement},
        {label: 'Business Capital', amt: inputs.businessCapital},
        {label: 'Insurance Surrender Value', amt: inputs.insSurrender},
        {label: 'Other Assets', amt: inputs.otherAssets}
    ];

    const liabilities = [
        {label: 'Home Loan Outstanding', amt: inputs.homeLoan},
        {label: 'Personal Loans', amt: inputs.personalLoan},
        {label: 'Vehicle Loans', amt: inputs.carLoan},
        {label: 'Credit Card Dues', amt: inputs.creditCard},
        {label: 'Business Borrowings', amt: inputs.businessLoans},
        {label: 'Other Liabilities', amt: inputs.otherLiab}
    ];

    const totalAssets = assets.reduce((s, a) => s + a.amt, 0);
    const totalLiab = liabilities.reduce((s, l) => s + l.amt, 0);
    const netWorth = totalAssets - totalLiab;
    const fxAmount = netWorth / inputs.fxRate;

    // Update headline
    document.getElementById('resHeadlineBox').classList.remove('negative');
    if(netWorth < 0) document.getElementById('resHeadlineBox').classList.add('negative');
    document.getElementById('resHeadline').textContent = fmtL(netWorth);
    document.getElementById('resHeadlineMeta').textContent = 'Assets ' + fmtL(totalAssets) + ' minus Liabilities ' + fmtL(totalLiab) + ' · ' + fmtFx(fxAmount, fxSymbols[currentFx]) + ' ' + currentFx;
    document.getElementById('resAssets').textContent = fmtL(totalAssets);
    document.getElementById('resLiab').textContent = fmtL(totalLiab);
    document.getElementById('resFx').textContent = fmtFx(fxAmount, fxSymbols[currentFx]) + ' ' + currentFx;
    document.getElementById('fxLabel').textContent = currentFx + ' Equivalent';
    document.getElementById('resFxDesc').textContent = 'At ₹' + inputs.fxRate + ' per ' + currentFx + ' (SBI TT reference)';

    // Certificate date
    const today = new Date();
    const dateStr = today.getDate() + ' ' + ['January','February','March','April','May','June','July','August','September','October','November','December'][today.getMonth()] + ' ' + today.getFullYear();
    document.getElementById('certDate').textContent = dateStr;

    // Asset table
    const assetBody = document.getElementById('certAssetBody');
    assetBody.innerHTML = '';
    assets.forEach(a => {
        const tr = document.createElement('tr');
        if(a.amt === 0) tr.className = 'zero-row';
        tr.innerHTML = '<td>' + a.label + '</td><td>' + fmtINR(a.amt) + '</td>';
        assetBody.appendChild(tr);
    });
    document.getElementById('certAssetTotal').innerHTML = '<strong>' + fmtINR(totalAssets) + '</strong>';

    // Liability table
    const liabBody = document.getElementById('certLiabBody');
    liabBody.innerHTML = '';
    liabilities.forEach(l => {
        const tr = document.createElement('tr');
        if(l.amt === 0) tr.className = 'zero-row';
        tr.innerHTML = '<td>' + l.label + '</td><td>' + fmtINR(l.amt) + '</td>';
        liabBody.appendChild(tr);
    });
    document.getElementById('certLiabTotal').innerHTML = '<strong>' + fmtINR(totalLiab) + '</strong>';
    document.getElementById('certNetWorth').innerHTML = '<strong>' + fmtINR(netWorth) + ' (' + fmtFx(fxAmount, fxSymbols[currentFx]) + ' ' + currentFx + ')</strong>';

    const section = document.getElementById('resultSection');
    section.classList.add('visible');
    if(!silent) requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
}

function resetCalc(){
    document.getElementById('bankBalance').value = '250000';
    document.getElementById('fdValue').value = '500000';
    document.getElementById('mfValue').value = '800000';
    document.getElementById('sharesListed').value = '300000';
    document.getElementById('sharesUnlisted').value = '0';
    document.getElementById('gold').value = '600000';
    document.getElementById('realEstate').value = '8000000';
    document.getElementById('reShare').value = '100';
    document.getElementById('vehiclePrice').value = '1500000';
    document.getElementById('vehicleAge').value = '3';
    document.getElementById('retirement').value = '1200000';
    document.getElementById('businessCapital').value = '0';
    document.getElementById('insSurrender').value = '0';
    document.getElementById('otherAssets').value = '0';
    document.getElementById('homeLoan').value = '2500000';
    document.getElementById('personalLoan').value = '0';
    document.getElementById('carLoan').value = '300000';
    document.getElementById('creditCard').value = '50000';
    document.getElementById('businessLoans').value = '0';
    document.getElementById('otherLiab').value = '0';
    document.getElementById('fxRate').value = '85';
    document.querySelectorAll('.toggle-group').forEach(g => {g.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active'));});
    document.querySelector('.toggle-btn[data-fx="USD"]').classList.add('active');
    currentFx = 'USD';
    updateDerived();
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

</body>
</html>
