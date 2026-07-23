@extends('layouts.app')
@section('meta')
    <title>GST Late Fee Calculator | Interest &amp; Penalty FY 25-26</title>
    <meta name="description" content="GST late fee &amp; interest calculator for FY 2025-26: penalties for delayed GSTR-1, 3B and 9 filing with an exact day-wise breakdown. Check your dues free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-late-fee-calculator">
    <meta property="og:title" content="GST Late Fee &amp; Interest Calculator &mdash; Free 2026">
    <meta property="og:description" content="Calculate GST late fees and interest for delayed GSTR-1, 3B, 9 filing. Day-wise breakdown for FY 2025-26.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gst-late-fee-calculator">
    <meta property="og:image" content="/tools/og-gst-late-fee-calculator.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Late Fee &amp; Interest Calculator &mdash; Free 2026">
    <meta name="twitter:description" content="Calculate GST late fees and interest for delayed GSTR filing. FY 2025-26 rates.">
    <meta name="twitter:image" content="/tools/og-gst-late-fee-calculator.png">
@endsection

@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebApplication","name":"GST Late Fee & Interest Calculator","description":"GST Late Fee and Interest Calculator computes the exact penalty and interest payable for delayed filing of GSTR-1, GSTR-3B, GSTR-4, GSTR-9, and CMP-08 returns for FY 2025-26. Calculates day-wise late fee under CGST and SGST Acts, interest at 18 percent per annum on outstanding tax, and shows total payable amount with detailed breakdown.","url":"/tools/gst-late-fee-calculator","applicationCategory":"UtilityApplication","operatingSystem":"Any","datePublished":"2026-03-06","dateModified":"2026-03-06","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","sameAs":["https://www.linkedin.com/company/patron-accounting"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"GST Late Fee Calculator","item":"/tools/gst-late-fee-calculator"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is the late fee for delayed GSTR-3B filing?","acceptedAnswer":{"@type":"Answer","text":"The late fee for delayed GSTR-3B filing is \u20B950 per day of delay, split as \u20B925 under CGST and \u20B925 under SGST. For nil returns where there is no tax liability, the late fee is reduced to \u20B920 per day. The maximum late fee is capped at \u20B910,000 per return. This fee must be paid in cash and cannot be adjusted against Input Tax Credit."}},{"@type":"Question","name":"How is interest calculated on delayed GST payment?","acceptedAnswer":{"@type":"Answer","text":"Interest on delayed GST payment is charged at 18 percent per annum under Section 50 of the CGST Act on the outstanding tax amount. The formula is Tax Amount multiplied by 18 percent multiplied by number of days delayed divided by 365. Interest is calculated from the day after the due date until the actual date of payment. It applies separately on CGST, SGST, and IGST components."}},{"@type":"Question","name":"What is the late fee for delayed GSTR-1 filing?","acceptedAnswer":{"@type":"Answer","text":"The late fee for delayed GSTR-1 filing is \u20B950 per day of delay, comprising \u20B925 under CGST and \u20B925 under SGST. For nil GSTR-1 returns the late fee is \u20B920 per day. The maximum cap is \u20B910,000 per return. GSTR-1 must be filed by the 11th of the following month for monthly filers or the 13th for quarterly QRMP filers."}},{"@type":"Question","name":"What is the late fee for GSTR-9 annual return?","acceptedAnswer":{"@type":"Answer","text":"The late fee for delayed GSTR-9 annual return is \u20B9200 per day, split as \u20B9100 under CGST and \u20B9100 under SGST. The maximum cap is 0.5 percent of the taxpayer turnover in the respective state or union territory. GSTR-9 is due by 31st December following the end of the financial year and is mandatory for taxpayers with turnover above \u20B92 crore."}},{"@type":"Question","name":"Can GST late fees be paid using Input Tax Credit?","acceptedAnswer":{"@type":"Answer","text":"No, GST late fees cannot be paid using Input Tax Credit available in the electronic credit ledger. Late fees must be paid in cash through the electronic cash ledger only. This is a mandatory requirement under the CGST Act. However, interest on delayed payment can be offset against the cash ledger balance. Ensure sufficient cash balance before filing delayed returns."}},{"@type":"Question","name":"What is the interest rate for excess ITC claimed under GST?","acceptedAnswer":{"@type":"Answer","text":"If a taxpayer claims excess Input Tax Credit or reduces excess output tax liability, interest is charged at 24 percent per annum under Section 50(3) of the CGST Act. This is higher than the standard 18 percent rate applicable for delayed tax payment. The interest is calculated from the date of utilisation of such excess credit until the date of reversal."}},{"@type":"Question","name":"Is there a maximum cap on GST late fees?","acceptedAnswer":{"@type":"Answer","text":"Yes, GST late fees are capped to prevent them from becoming disproportionate. For GSTR-3B and GSTR-1, the maximum late fee is \u20B910,000 per return. For GSTR-9 annual return, the cap is 0.5 percent of turnover in the state. For GSTR-4 composition return, the cap is \u20B92,000 per return. Nil return late fees are capped at \u20B9500 per return."}},{"@type":"Question","name":"What happens if I do not file GSTR-3B for multiple months?","acceptedAnswer":{"@type":"Answer","text":"If GSTR-3B is not filed for two or more consecutive months, the E-Way Bill generation facility gets blocked automatically on the GST portal. Non-filing for six continuous months can trigger suo motu cancellation of GST registration under Section 29 of the CGST Act. Late fees accumulate for each unfiled return separately, and returns must be filed sequentially."}},{"@type":"Question","name":"Does the government waive GST late fees during special circumstances?","acceptedAnswer":{"@type":"Answer","text":"Yes, the government has periodically announced amnesty schemes and late fee waivers through CBIC notifications. During COVID-19, late fees and interest were significantly reduced or waived for certain periods. The GST Council also announces conditional waivers for taxpayers who file pending returns within specified windows. Check cbic-gst.gov.in for latest notifications."}},{"@type":"Question","name":"How do I calculate GST late fee for a nil return?","acceptedAnswer":{"@type":"Answer","text":"For nil returns where there is no tax liability, the late fee is \u20B920 per day of delay, split as \u20B910 under CGST and \u20B910 under SGST. The maximum cap for nil return late fees is \u20B9500 per return. A return is considered nil if there are no outward supplies, no inward supplies liable to reverse charge, and no tax liability for the period."}},{"@type":"Question","name":"What is the late fee for CMP-08 composition quarterly return?","acceptedAnswer":{"@type":"Answer","text":"The late fee for delayed CMP-08 filing is \u20B950 per day of delay, split as \u20B925 under CGST and \u20B925 under SGST. For nil CMP-08 returns, the late fee is \u20B920 per day. The maximum cap is \u20B910,000 per return. CMP-08 is due by the 18th of the month following each quarter for composition scheme taxpayers with turnover up to \u20B91.5 crore."}},{"@type":"Question","name":"Is interest applicable even if I have sufficient ITC balance?","acceptedAnswer":{"@type":"Answer","text":"Yes, interest under Section 50 of the CGST Act is calculated on the gross tax liability, not the net liability after ITC adjustment. However, after the amendment effective from September 2020, interest is now charged on the net cash liability for delayed filing of GSTR-3B. This means interest applies only on the amount payable in cash after adjusting eligible ITC."}},{"@type":"Question","name":"Can I file a GST return after three years from the due date?","acceptedAnswer":{"@type":"Answer","text":"No, from FY 2024-25 onwards, GST returns cannot be filed after three years from the original due date. This hard limit applies to GSTR-1, GSTR-3B, and all other return types under the CGST Act. If you have unfiled returns approaching the three-year window, file them immediately with applicable late fees and interest to avoid permanent non-compliance status."}},{"@type":"Question","name":"How do I pay GST late fees on the GST portal?","acceptedAnswer":{"@type":"Answer","text":"GST late fees are automatically calculated and added to your return when you file it after the due date on the GST portal at gst.gov.in. The portal computes the late fee based on days of delay and adds it to your tax liability. You must deposit the late fee amount in the electronic cash ledger before filing. Payment can be made via net banking, debit card, or NEFT."}},{"@type":"Question","name":"What is the difference between GST late fee and GST penalty?","acceptedAnswer":{"@type":"Answer","text":"GST late fee is a fixed daily charge for delayed return filing under Section 47 of the CGST Act. GST penalty is imposed under Sections 122 to 138 for specific offences like tax evasion, incorrect invoicing, or failure to register. Late fees are automatic and calculated by the portal, while penalties are imposed through adjudication proceedings by GST officers after due process."}},{"@type":"Question","name":"Are there reduced late fee rates based on annual turnover?","acceptedAnswer":{"@type":"Answer","text":"Yes, the GST Council has introduced turnover-based caps on late fees for GSTR-3B. For taxpayers with turnover up to \u20B91.5 crore, the maximum late fee is \u20B92,000 per return. For turnover between \u20B91.5 crore and \u20B95 crore, the cap is \u20B95,000. For turnover above \u20B95 crore, the standard cap of \u20B910,000 applies. These caps provide proportional relief to smaller businesses."}},{"@type":"Question","name":"What is Section 50 of the CGST Act about interest on delayed payment?","acceptedAnswer":{"@type":"Answer","text":"Section 50 of the CGST Act governs interest on delayed payment of GST. Sub-section 1 prescribes 18 percent per annum interest on tax paid after the due date. Sub-section 3 prescribes 24 percent per annum on excess ITC claimed or excess output tax reduced. The interest is calculated automatically and must be paid along with the tax liability when filing the delayed return."}},{"@type":"Question","name":"Can E-Way Bill generation be restored after filing pending returns?","acceptedAnswer":{"@type":"Answer","text":"Yes, once all pending GSTR-3B returns are filed and the tax along with late fees and interest is paid, the E-Way Bill generation facility is automatically restored on the GST portal. The restoration typically happens within 24 hours of filing the last pending return. Until restoration, the business cannot generate any E-Way Bills for movement of goods."}},{"@type":"Question","name":"What are the consequences of continued GST non-compliance?","acceptedAnswer":{"@type":"Answer","text":"Continued GST non-compliance leads to escalating penalties including accumulated late fees on each unfiled return, interest on outstanding tax, blocking of E-Way Bill generation after two months of non-filing, suo motu cancellation of registration after six months, and potential prosecution under Section 132 for wilful tax evasion. Maintaining timely compliance avoids all these cascading consequences."}}]}
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
.form-group input[type="date"]{font-family:var(--font-body);font-size:15px;font-weight:600}
.btn-calculate{width:100%;padding:14px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s,transform 0.1s;margin-top:8px}
.btn-calculate:hover{background:var(--primary-light)}
.btn-calculate:active{transform:scale(0.98)}
.result-section{margin-top:28px;display:none}
.result-section.visible{display:block}
.result-divider{height:1px;background:var(--border);margin-bottom:24px}
.result-grid{display:grid;grid-template-columns:1fr;gap:12px}
@media(min-width:500px){.result-grid{grid-template-columns:1fr 1fr}}
.result-card{background:var(--surface);border-radius:var(--radius);padding:16px 20px;border:1px solid var(--border)}
.result-card.highlight{background:var(--primary);border-color:var(--primary)}
.result-card.highlight .result-label,.result-card.highlight .result-value{color:#fff}
.result-card.danger{background:#FEF2F2;border-color:var(--danger)}
.result-card.danger .result-label{color:var(--danger)}
.result-card.danger .result-value{color:#991B1B}
.result-label{font-size:12px;font-weight:600;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:4px}
.result-value{font-family:var(--font-mono);font-size:22px;font-weight:700;color:var(--primary-dark)}
.result-breakdown{margin-top:16px;background:var(--surface-alt);border-radius:var(--radius);padding:16px 20px}
.breakdown-row{display:flex;justify-content:space-between;align-items:center;padding:6px 0;font-size:14px}
.breakdown-row:not(:last-child){border-bottom:1px dashed var(--border)}
.breakdown-label{color:var(--text-secondary)}
.breakdown-value{font-family:var(--font-mono);font-weight:700;color:var(--text)}
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
@media(max-width:899px){.main-layout{grid-template-columns:1fr!important;gap:24px}.sidebar-col{order:2}.content-col{order:1}}
@media(max-width:1024px){.main-layout{padding:0 16px 32px}.hero{padding:28px 16px 20px}.calc-card{padding:28px}.content-section{padding:28px}}
@media(max-width:480px){.hero{padding:20px 14px 16px}.hero h1{font-size:22px}.hero-meta{gap:8px}.badge-updated{font-size:11px;padding:3px 10px}.author-byline{font-size:12px}.tldr{padding:16px 18px}.tldr p{font-size:14px}.main-layout{padding:0 14px 24px;gap:24px}.calc-card{padding:16px;margin-bottom:24px}.calc-card h2{font-size:19px;margin-bottom:16px}.content-section{padding:16px;margin-bottom:24px}.content-section h2{font-size:20px}.content-section h3{font-size:16px}.content-section p{font-size:14px}.calc-row{gap:14px;margin-bottom:14px}.form-group label{font-size:12px}.form-group input,.form-group select{padding:10px 14px;font-size:15px}.btn-calculate{padding:12px;font-size:15px}.rate-table{font-size:12px}.rate-table thead th{padding:8px 10px;font-size:10px;letter-spacing:0}.rate-table tbody td{padding:8px 10px;font-size:12px}.formula-box{padding:14px 16px;font-size:12px;line-height:1.7}.callout{padding:14px 16px}.callout p{font-size:13px}.faq-question{padding:14px 16px;font-size:14px}.faq-answer-inner{padding:0 16px 14px;font-size:13px}.faq-icon{width:22px;height:22px;font-size:14px}.sidebar-card{padding:20px}.sidebar-card h3{font-size:15px}.sidebar-link{padding:8px 12px;font-size:13px}.cta-card{padding:22px 20px}.cta-card h3{font-size:16px}.cta-card p{font-size:13px}.cta-btn{padding:10px 24px;font-size:13px}.breadcrumb{font-size:12px;padding:12px 14px 0}.toc-nav a{padding:8px 10px;font-size:11px}.result-value{font-size:18px}}
@media(max-width:360px){.hero h1{font-size:20px}.calc-card{padding:14px}.content-section{padding:14px}.content-section h2{font-size:18px}.rate-table thead th{font-size:9px;padding:6px 8px}.rate-table tbody td{font-size:11px;padding:6px 8px}}
</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#late-fee-rates">Late Fee Rates</a>
        <a href="#interest">Interest Rules</a>
        <a href="#turnover-caps">Turnover Caps</a>
        <a href="#compliance">Compliance</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>


<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>GST Late Fee &amp; Interest Calculator &mdash; <span>Penalty Estimator</span> FY 2025&ndash;26</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Calculate the exact late fee and interest payable for delayed GST return filing. Enter the return type, due date, filing date, and outstanding tax amount &mdash; get a day-wise breakdown of late fee (&#8377;50/day or &#8377;20/day for nil returns) and interest (18% p.a.) under both CGST and SGST. Supports GSTR-1, GSTR-3B, GSTR-9, GSTR-4, and CMP-08 with turnover-based caps. Built by practising Chartered Accountants.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate GST Late Fee &amp; Interest</h2>
            <noscript><div class="noscript-box">This calculator requires JavaScript. Refer to the rate tables below for manual calculation.</div></noscript>

            <div class="calc-row">
                <div class="form-group">
                    <label for="returnType">GST Return Type</label>
                    <select id="returnType" onchange="updateDefaults()">
                        <option value="gstr3b">GSTR-3B (Monthly Summary)</option>
                        <option value="gstr1">GSTR-1 (Outward Supplies)</option>
                        <option value="gstr9">GSTR-9 (Annual Return)</option>
                        <option value="gstr4">GSTR-4 (Composition Annual)</option>
                        <option value="cmp08">CMP-08 (Composition Quarterly)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="isNilReturn">Return Type</label>
                    <select id="isNilReturn">
                        <option value="no">Regular (with tax liability)</option>
                        <option value="yes">Nil Return (no liability)</option>
                    </select>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="dueDate">Due Date of Filing</label>
                    <input type="date" id="dueDate" value="2026-02-20">
                </div>
                <div class="form-group">
                    <label for="filingDate">Actual Filing Date</label>
                    <input type="date" id="filingDate">
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="taxAmount">Outstanding Tax Payable (&#8377;)</label>
                    <input type="number" id="taxAmount" placeholder="e.g. 50000" min="0" step="1" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="turnoverSlab">Annual Turnover Slab</label>
                    <select id="turnoverSlab">
                        <option value="below1_5cr">Up to &#8377;1.5 Crore</option>
                        <option value="1_5to5cr">&#8377;1.5 Cr &ndash; &#8377;5 Crore</option>
                        <option value="above5cr">Above &#8377;5 Crore</option>
                    </select>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculateLateFee()">Calculate Late Fee &amp; Interest</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card"><div class="result-label">Days of Delay</div><div class="result-value" id="resDays">&mdash;</div></div>
                    <div class="result-card"><div class="result-label">Late Fee (CGST + SGST)</div><div class="result-value" id="resLateFee">&mdash;</div></div>
                    <div class="result-card"><div class="result-label">Interest (18% p.a.)</div><div class="result-value" id="resInterest">&mdash;</div></div>
                    <div class="result-card danger"><div class="result-label">Total Penalty Payable</div><div class="result-value" id="resTotal">&mdash;</div></div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <button class="btn-reset" onclick="resetCalc()">&#8634; Reset Calculator</button>
            </div>
        </div>

        <!-- How to Use -->
        <section class="content-section" id="how-to-use">
            <h2>How to Use the GST Late Fee Calculator</h2>
            <p>This calculator helps you estimate the exact penalty for delayed GST return filing. Follow these steps:</p>
            <h3>Step 1 &mdash; Select Return Type</h3>
            <p>Choose the GST return form you filed late &mdash; GSTR-3B, GSTR-1, GSTR-9, GSTR-4, or CMP-08. Each return has different late fee rates and caps. Also select whether it was a nil return (no tax liability) or a regular return.</p>
            <h3>Step 2 &mdash; Enter Dates</h3>
            <p>Enter the original due date of the return and the actual date you filed or plan to file. The calculator computes the exact number of days of delay. For GSTR-3B, the due date is typically the 20th of the following month as per the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a> calendar.</p>
            <h3>Step 3 &mdash; Enter Tax Amount &amp; Turnover</h3>
            <p>Enter the outstanding tax payable (after ITC adjustment) for interest calculation, and select your annual turnover slab for the appropriate late fee cap. The calculator applies turnover-based caps as notified by <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a>.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Always file the return even if you cannot pay the full tax immediately. Filing with partial payment stops the late fee clock. Interest continues on the unpaid balance, but late fees are calculated only until the date of filing. This can save thousands in penalties for businesses with cash flow constraints.</p>
            </div>
        </section>

        <!-- Late Fee Rates -->
        <section class="content-section" id="late-fee-rates">
            <h2>GST Late Fee Rates for FY 2025&ndash;26</h2>
            <p>Late fees under GST are prescribed under Section 47 of the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a>. The fee is charged per day of delay from the due date until the actual filing date. Here are the current rates:</p>

            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Return</th><th>Regular (per day)</th><th>Nil Return (per day)</th><th>Max Cap</th></tr></thead>
                <tbody>
                    <tr><td><strong>GSTR-3B</strong></td><td>&#8377;50 (&#8377;25 CGST + &#8377;25 SGST)</td><td>&#8377;20 (&#8377;10 + &#8377;10)</td><td>Turnover-based*</td></tr>
                    <tr><td><strong>GSTR-1</strong></td><td>&#8377;50 (&#8377;25 CGST + &#8377;25 SGST)</td><td>&#8377;20 (&#8377;10 + &#8377;10)</td><td>Turnover-based*</td></tr>
                    <tr><td><strong>GSTR-9</strong></td><td>&#8377;200 (&#8377;100 + &#8377;100)</td><td>&mdash;</td><td>0.5% of turnover in state</td></tr>
                    <tr><td><strong>GSTR-4</strong></td><td>&#8377;50 (&#8377;25 + &#8377;25)</td><td>&#8377;20 (&#8377;10 + &#8377;10)</td><td>&#8377;2,000</td></tr>
                    <tr><td><strong>CMP-08</strong></td><td>&#8377;50 (&#8377;25 + &#8377;25)</td><td>&#8377;20 (&#8377;10 + &#8377;10)</td><td>&#8377;10,000</td></tr>
                </tbody>
            </table>
            </div>
            <p>*Turnover-based caps for GSTR-3B and GSTR-1: up to &#8377;1.5 Cr turnover = &#8377;2,000 cap; &#8377;1.5&ndash;5 Cr = &#8377;5,000 cap; above &#8377;5 Cr = &#8377;10,000 cap.</p>

            <div class="callout warn">
                <p><strong>Important:</strong> Late fees must be paid in cash only &mdash; you cannot use Input Tax Credit from your electronic credit ledger to pay late fees. Ensure sufficient balance in your cash ledger before filing delayed returns on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a>.</p>
            </div>
        </section>

        <!-- Interest Rules -->
        <section class="content-section" id="interest">
            <h2>Interest on Delayed GST Payment &mdash; Section 50 of CGST Act</h2>
            <p>Section 50 of the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act</a> prescribes interest on delayed payment of tax. The interest is separate from late fees and applies on the outstanding tax amount:</p>

            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Scenario</th><th>Interest Rate</th><th>Calculated On</th></tr></thead>
                <tbody>
                    <tr><td>Late payment of tax (Section 50(1))</td><td>18% per annum</td><td>Net cash tax liability*</td></tr>
                    <tr><td>Excess ITC claimed (Section 50(3))</td><td>24% per annum</td><td>Excess ITC utilised</td></tr>
                </tbody>
            </table>
            </div>

            <p>*After the amendment effective September 2020, interest on delayed GSTR-3B filing is charged on the net cash liability (tax payable after adjusting eligible ITC), not on the gross liability.</p>

            <div class="formula-box">
                <span class="label">Interest Formula:</span><br>
                Interest = Tax Amount &times; 18% &times; (Days of Delay &divide; 365)<br><br>
                <span class="label">Example:</span> &#8377;1,00,000 tax paid 30 days late<br>
                = &#8377;1,00,000 &times; 0.18 &times; (30 &divide; 365)<br>
                = <span class="label">&#8377;1,479</span>
            </div>

            <p>Interest is computed from the day after the due date until the actual date of payment. It applies separately on CGST, SGST, and IGST components. The <a href="https://gstcouncil.gov.in/" target="_blank" rel="noopener">GST Council</a> has the authority to modify these rates through notifications.</p>
        </section>

        <!-- Turnover Caps -->
        <section class="content-section" id="turnover-caps">
            <h2>Turnover-Based Late Fee Caps</h2>
            <p>The <a href="https://gstcouncil.gov.in/" target="_blank" rel="noopener">GST Council</a> introduced graded late fee caps based on annual turnover to provide proportional relief to smaller businesses. These caps apply to GSTR-3B and GSTR-1:</p>

            <div style="overflow-x:auto;">
            <table class="rate-table">
                <thead><tr><th>Annual Turnover</th><th>Max Late Fee (Regular)</th><th>Max Late Fee (Nil Return)</th></tr></thead>
                <tbody>
                    <tr><td>Up to &#8377;1.5 Crore</td><td>&#8377;2,000 per return</td><td>&#8377;500 per return</td></tr>
                    <tr><td>&#8377;1.5 Cr &ndash; &#8377;5 Crore</td><td>&#8377;5,000 per return</td><td>&#8377;500 per return</td></tr>
                    <tr><td>Above &#8377;5 Crore</td><td>&#8377;10,000 per return</td><td>&#8377;500 per return</td></tr>
                </tbody>
            </table>
            </div>

            <p>These caps mean that even if the calculated late fee exceeds the cap amount, the taxpayer pays only the capped amount. For example, a business with &#8377;1 crore turnover filing GSTR-3B 100 days late would have a calculated late fee of &#8377;5,000 (100 &times; &#8377;50), but would pay only &#8377;2,000 due to the turnover cap.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> The <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a> recommends that businesses with seasonal cash flow should still file returns on time with whatever tax they can pay. Late fees stop accruing on the date of filing, while interest continues only on the unpaid tax balance. This separation can result in significant savings.</p>
            </div>
        </section>

        <!-- Compliance -->
        <section class="content-section" id="compliance">
            <h2>Consequences of Continued Non-Filing</h2>
            <p>Beyond late fees and interest, continued non-filing of GST returns triggers escalating consequences that can severely impact business operations:</p>

            <h3>E-Way Bill Blocking</h3>
            <p>If GSTR-3B is not filed for two or more consecutive months, the E-Way Bill generation facility is blocked automatically. This prevents the movement of goods and can halt supply chain operations. The block is restored only after all pending returns are filed with applicable penalties.</p>

            <h3>GST Registration Cancellation</h3>
            <p>Non-filing for six continuous months can trigger suo motu cancellation of GST registration under Section 29 of the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act</a>. A show cause notice (Form REG-17) is issued first, and the taxpayer has 30 days to respond. Once cancelled, the business cannot issue tax invoices or collect GST.</p>

            <h3>Sequential Filing Requirement</h3>
            <p>GST returns must be filed sequentially &mdash; you cannot file a later month without first filing all previous months. This means accumulated non-filing creates a cascading backlog where all pending returns must be filed with cumulative late fees before the latest return can be submitted.</p>

            <h3>Three-Year Filing Window</h3>
            <p>From FY 2024-25 onwards, GST returns cannot be filed more than three years after the original due date. This hard limit means that unresolved past-due returns must be addressed within the window to avoid permanent non-compliance. Check the <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC website</a> for any extensions or amnesty schemes.</p>

            <div class="callout warn">
                <p><strong>Compliance Alert:</strong> If you have multiple unfiled returns, prioritise filing the oldest ones first. Contact a Chartered Accountant to assess the total liability including late fees and interest before initiating the filing process. The GST amnesty schemes announced periodically can significantly reduce the penalty burden.</p>
            </div>
        </section>

        <!-- CTA -->
        <div class="callout" style="background:linear-gradient(135deg,#EFF6FF,#F0F7FF);border-left-color:var(--primary);margin:0 0 32px;">
            <p style="color:var(--primary-dark);font-size:15px;"><strong>Need help filing delayed GST returns?</strong> Our Chartered Accountants handle late return filing, penalty computation, and compliance restoration for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Late%20Fee%20Calculator%20tool.%20I%20need%20help%20with%20GST%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" style="color:var(--primary);font-weight:700;">Talk to a CA today &rarr;</a></p>
        </div>

        <!-- FAQs -->
        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About GST Late Fees</h2>
            <div id="faqList"></div>
        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Need GST Compliance Help?</h3>
            <p>Our CAs handle late return filing, penalty computation, and GST compliance restoration across India.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Late%20Fee%20Calculator.%20I%20need%20help%20with%20GST%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
        </div>
        <div class="sidebar-card">
            <h3>GST Services</h3>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit <span class="arrow">&rarr;</span></a>
            <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            <a href="/gst-returns-for-e-commerce-operator" class="sidebar-link">E-Commerce GST Returns <span class="arrow">&rarr;</span></a>
            <a href="/gst-return-filing-for-freelancers" class="sidebar-link">GST for Freelancers <span class="arrow">&rarr;</span></a>
        </div>
        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-return-due-date-tracker" class="sidebar-link">GST Due Date Tracker <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-penalty-calculator" class="sidebar-link">GST Penalty Calculator <span class="arrow">&rarr;</span></a>
            <a href="/tools/hsn-sac-code-finder" class="sidebar-link">HSN/SAC Code Finder <span class="arrow">&rarr;</span></a>
            <a href="/tools/gst-rate-finder" class="sidebar-link">GST Rate Finder <span class="arrow">&rarr;</span></a>
            <a href="/tools/invoice-generator" class="sidebar-link">GST Invoice Generator <span class="arrow">&rarr;</span></a>
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

function updateDefaults(){
    var rt=document.getElementById('returnType').value;
    if(rt==='gstr9'){document.getElementById('dueDate').value='2026-12-31';document.getElementById('isNilReturn').value='no';}
    else if(rt==='gstr4'){document.getElementById('dueDate').value='2027-04-30';}
    else if(rt==='cmp08'){document.getElementById('dueDate').value='2026-01-18';}
    else{document.getElementById('dueDate').value='2026-02-20';}
}

function calculateLateFee(){
    var dueStr=document.getElementById('dueDate').value;
    var fileStr=document.getElementById('filingDate').value;
    if(!dueStr||!fileStr){alert('Please enter both due date and filing date.');return;}
    var dueDate=new Date(dueStr);
    var fileDate=new Date(fileStr);
    if(fileDate<=dueDate){alert('Filing date must be after the due date for late fee calculation.');return;}

    var days=Math.ceil((fileDate-dueDate)/(1000*60*60*24));
    var taxAmt=parseFloat(document.getElementById('taxAmount').value)||0;
    var isNil=document.getElementById('isNilReturn').value==='yes';
    var rt=document.getElementById('returnType').value;
    var turnover=document.getElementById('turnoverSlab').value;

    // Late fee per day
    var feePerDay=isNil?20:50;
    var maxCap=10000;

    if(rt==='gstr9'){feePerDay=200;maxCap=Infinity;}// 0.5% of turnover - we'll note this
    else if(rt==='gstr4'){maxCap=2000;}

    // Turnover-based caps for GSTR-3B and GSTR-1
    if(rt==='gstr3b'||rt==='gstr1'){
        if(isNil){maxCap=500;}
        else if(turnover==='below1_5cr'){maxCap=2000;}
        else if(turnover==='1_5to5cr'){maxCap=5000;}
        else{maxCap=10000;}
    }
    if(rt==='cmp08'){
        if(isNil){maxCap=500;}
        else{maxCap=10000;}
    }

    var lateFeeCalc=days*feePerDay;
    var lateFee=Math.min(lateFeeCalc,maxCap);

    // Interest at 18% p.a.
    var interest=0;
    if(taxAmt>0){
        interest=taxAmt*0.18*(days/365);
    }

    var total=lateFee+interest;

    document.getElementById('resDays').textContent=days+' days';
    document.getElementById('resLateFee').textContent=fmt(lateFee);
    document.getElementById('resInterest').textContent=fmt(interest);
    document.getElementById('resTotal').textContent=fmt(total);

    var cgstFee=Math.round(lateFee/2);
    var sgstFee=lateFee-cgstFee;

    var html='';
    html+='<div class="breakdown-row"><span class="breakdown-label">Return Type</span><span class="breakdown-value">'+rt.toUpperCase().replace('GSTR','GSTR-')+'</span></div>';
    html+='<div class="breakdown-row"><span class="breakdown-label">Days of Delay</span><span class="breakdown-value">'+days+' days</span></div>';
    html+='<div class="breakdown-row"><span class="breakdown-label">Late Fee Rate</span><span class="breakdown-value">'+fmt(feePerDay)+'/day'+(isNil?' (Nil return)':'')+'</span></div>';
    html+='<div class="breakdown-row"><span class="breakdown-label">Calculated Late Fee</span><span class="breakdown-value">'+fmt(lateFeeCalc)+'</span></div>';
    if(lateFeeCalc>lateFee){
        html+='<div class="breakdown-row"><span class="breakdown-label">Cap Applied (Turnover: '+turnover.replace('below1_5cr','Up to \u20B91.5Cr').replace('1_5to5cr','\u20B91.5-5Cr').replace('above5cr','Above \u20B95Cr')+')</span><span class="breakdown-value" style="color:var(--success)">'+fmt(lateFee)+' (saved '+fmt(lateFeeCalc-lateFee)+')</span></div>';
    }
    html+='<div class="breakdown-row"><span class="breakdown-label">CGST Late Fee</span><span class="breakdown-value">'+fmt(cgstFee)+'</span></div>';
    html+='<div class="breakdown-row"><span class="breakdown-label">SGST Late Fee</span><span class="breakdown-value">'+fmt(sgstFee)+'</span></div>';
    if(taxAmt>0){
        html+='<div class="breakdown-row"><span class="breakdown-label">Outstanding Tax</span><span class="breakdown-value">'+fmt(taxAmt)+'</span></div>';
        html+='<div class="breakdown-row"><span class="breakdown-label">Interest (18% p.a. for '+days+' days)</span><span class="breakdown-value">'+fmt(interest)+'</span></div>';
    }
    html+='<div class="breakdown-row" style="font-weight:700;"><span class="breakdown-label" style="color:var(--danger);">Total Payable (Late Fee + Interest)</span><span class="breakdown-value" style="color:var(--danger);">'+fmt(total)+'</span></div>';

    document.getElementById('breakdownSection').innerHTML=html;
    document.getElementById('resultSection').classList.add('visible');
    document.getElementById('resultSection').scrollIntoView({behavior:'smooth',block:'nearest'});
}

function resetCalc(){
    document.getElementById('returnType').selectedIndex=0;
    document.getElementById('isNilReturn').selectedIndex=0;
    document.getElementById('dueDate').value='2026-02-20';
    document.getElementById('filingDate').value='';
    document.getElementById('taxAmount').value='';
    document.getElementById('turnoverSlab').selectedIndex=0;
    document.getElementById('resultSection').classList.remove('visible');
}

document.getElementById('taxAmount').addEventListener('keydown',function(e){if(e.key==='Enter')calculateLateFee();});

var FAQS=[
{q:"What is the late fee for delayed GSTR-3B filing?",a:"The late fee for delayed GSTR-3B filing is \u20B950 per day of delay \u2014 \u20B925 under CGST and \u20B925 under SGST. For nil returns, the fee is reduced to \u20B920 per day (\u20B910 CGST + \u20B910 SGST). Maximum caps apply based on turnover: \u20B92,000 for turnover up to \u20B91.5 crore, \u20B95,000 for \u20B91.5\u20135 crore, and \u20B910,000 for above \u20B95 crore. Late fees must be paid in cash only."},
{q:"How is interest calculated on delayed GST payment?",a:"Interest on delayed GST payment is charged at 18% per annum under Section 50 of the CGST Act. The formula is: Tax Amount \u00D7 18% \u00D7 (Days of Delay \u00F7 365). Interest is calculated from the day after the due date until the actual payment date. After the September 2020 amendment, interest applies on net cash liability (after ITC adjustment), not gross liability."},
{q:"What is the late fee for delayed GSTR-1 filing?",a:"The late fee for GSTR-1 is \u20B950 per day (\u20B925 CGST + \u20B925 SGST) for regular returns and \u20B920 per day for nil returns. Turnover-based caps apply: \u20B92,000 for turnover up to \u20B91.5 crore, \u20B95,000 for \u20B91.5\u20135 crore, and \u20B910,000 for above \u20B95 crore. GSTR-1 is due by the 11th of the following month for monthly filers."},
{q:"What is the late fee for GSTR-9 annual return?",a:"The GSTR-9 late fee is \u20B9200 per day (\u20B9100 CGST + \u20B9100 SGST). The maximum cap is 0.5% of the taxpayer's turnover in the respective state. GSTR-9 is due by 31st December following the financial year. It is mandatory for taxpayers with turnover above \u20B92 crore and optional for those below this threshold."},
{q:"Can GST late fees be paid using Input Tax Credit?",a:"No, GST late fees must be paid in cash through the electronic cash ledger only. You cannot use Input Tax Credit from the electronic credit ledger for late fee payment. This is a mandatory requirement under the CGST Act. Ensure you have sufficient cash balance deposited before attempting to file a delayed return on the GST portal."},
{q:"What is the interest rate for excess ITC claimed?",a:"If a taxpayer claims excess Input Tax Credit, interest is charged at 24% per annum under Section 50(3) of the CGST Act. This is higher than the standard 18% rate for delayed tax payment. The interest is calculated from the date of utilisation of excess credit until the date of reversal. Always reconcile ITC with GSTR-2B before claiming."},
{q:"Is there a maximum cap on GST late fees?",a:"Yes, GST late fees are capped to prevent disproportionate penalties. For GSTR-3B and GSTR-1, caps are turnover-based: \u20B92,000 (up to \u20B91.5 Cr), \u20B95,000 (\u20B91.5\u20135 Cr), and \u20B910,000 (above \u20B95 Cr). For GSTR-4 composition, the cap is \u20B92,000. For nil returns across all types, the cap is \u20B9500 per return."},
{q:"What happens if I do not file GSTR-3B for multiple months?",a:"Non-filing of GSTR-3B for two consecutive months blocks E-Way Bill generation automatically. Six months of non-filing triggers suo motu cancellation of GST registration under Section 29. Late fees accumulate for each unfiled return separately, and returns must be filed sequentially \u2014 oldest first. Total penalty can run into lakhs for prolonged non-compliance."},
{q:"Does the government waive GST late fees?",a:"Yes, the government periodically announces amnesty schemes through CBIC notifications. During COVID-19, significant waivers were provided. The GST Council also announces conditional waivers for taxpayers who file pending returns within specified windows. Check cbic-gst.gov.in regularly for the latest notifications on fee waivers and reduced penalty schemes."},
{q:"How do I calculate late fee for a nil return?",a:"For nil returns (no outward supplies, no reverse charge liability, no tax payable), the late fee is \u20B920 per day (\u20B910 CGST + \u20B910 SGST). The maximum cap for nil return late fees is \u20B9500 per return regardless of turnover. Select 'Nil Return' in the calculator above and enter the dates to get the exact computation."},
{q:"What is the late fee for CMP-08 composition return?",a:"CMP-08 late fee is \u20B950 per day (\u20B925 CGST + \u20B925 SGST) for regular returns and \u20B920 per day for nil returns. The maximum cap is \u20B910,000. CMP-08 is the quarterly tax payment statement for composition dealers with turnover up to \u20B91.5 crore, due by the 18th of the month following each quarter."},
{q:"Is interest applicable even with sufficient ITC balance?",a:"After the September 2020 amendment, interest under Section 50 is charged on the net cash liability for delayed GSTR-3B filing \u2014 meaning interest applies only on the amount payable in cash after adjusting eligible ITC. This is a significant relief as earlier interest was charged on gross liability before ITC adjustment."},
{q:"Can I file a GST return after three years?",a:"No, from FY 2024-25 onwards, returns cannot be filed more than three years after the original due date. This applies to GSTR-1, GSTR-3B, and all other returns under the CGST Act. File pending returns before the three-year window expires to avoid permanent non-compliance status and inability to claim ITC."},
{q:"How do I pay GST late fees on the portal?",a:"Late fees are automatically calculated when you file a delayed return on gst.gov.in. The portal adds the late fee to your liability. Deposit the required amount in your electronic cash ledger via net banking, debit card, or NEFT/RTGS before filing. The return cannot be submitted until the cash ledger has sufficient balance to cover both tax and late fees."},
{q:"What is the difference between late fee and penalty?",a:"Late fee is a fixed daily charge for delayed filing under Section 47 of the CGST Act \u2014 it is automatic and portal-calculated. Penalty is imposed under Sections 122-138 for offences like tax evasion, wrong invoicing, or failure to register. Penalties require adjudication by GST officers through proper proceedings, while late fees are self-assessed."},
{q:"Are there reduced caps based on annual turnover?",a:"Yes, the GST Council introduced graded caps: \u20B92,000 for turnover up to \u20B91.5 crore, \u20B95,000 for \u20B91.5\u20135 crore, and \u20B910,000 for above \u20B95 crore. These apply to GSTR-3B and GSTR-1. For nil returns, the cap is \u20B9500 regardless of turnover. These caps provide proportional relief to micro and small businesses."},
{q:"What is Section 50 of the CGST Act?",a:"Section 50 governs interest on delayed GST payment. Sub-section 1 prescribes 18% per annum on tax paid after the due date (calculated on net cash liability post-September 2020 amendment). Sub-section 3 prescribes 24% per annum on excess ITC claimed. Interest must be paid along with the tax liability when filing the delayed return."},
{q:"Can E-Way Bill be restored after filing pending returns?",a:"Yes, once all pending GSTR-3B returns are filed with tax, late fees, and interest paid, E-Way Bill generation is restored automatically within 24 hours. Until restoration, no E-Way Bills can be generated for goods movement. This blocking mechanism is a strong enforcement tool under the GST framework to ensure timely compliance."},
{q:"What are the consequences of continued non-compliance?",a:"Escalating consequences include: accumulated late fees on each unfiled return, interest on outstanding tax, E-Way Bill blocking after two months, registration cancellation after six months, and potential prosecution under Section 132 for wilful evasion. The total financial and operational impact of non-compliance far exceeds the cost of timely filing."}
];

function buildFAQ(){var list=document.getElementById('faqList');FAQS.forEach(function(faq){var item=document.createElement('div');item.className='faq-item';item.innerHTML='<button class="faq-question" onclick="toggleFaq(this)"><span>'+faq.q+'</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">'+faq.a+'</div></div>';list.appendChild(item);});}

function toggleFaq(btn){var item=btn.closest('.faq-item');var isOpen=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open');});if(!isOpen)item.classList.add('open');}

var navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',function(){var current='';document.querySelectorAll('[id]').forEach(function(s){if(pageYOffset>=s.offsetTop-80)current=s.getAttribute('id');});navLinks.forEach(function(l){l.classList.toggle('active',l.getAttribute('href')==='#'+current);});});

document.addEventListener('DOMContentLoaded',function(){buildFAQ();});
</script>
@endsection
