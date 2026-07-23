
@extends('layouts.app')
@section('meta')

<title>ISMP Eligibility Checker | IRDAI ISP under an IMF</title>
<meta name="description" content="ISMP eligibility checker: see if you qualify as an Insurance Sales Person (ISP) under an Insurance Marketing Firm. 12-question IRDAI decision tree. Check free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/ismp-eligibility-checker">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/ismp-eligibility-checker">
<meta property="og:title" content="ISMP Eligibility Checker — IRDAI ISP / IMF Tool 2026">
<meta property="og:description" content="12-question decision tree for ISP eligibility under IRDAI Insurance Marketing Firm Regulations 2015.">
<meta property="og:image" content="/og/ismp-eligibility-checker.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ISMP Eligibility Checker — IRDAI ISP / IMF Tool 2026">
<meta name="twitter:description" content="12-question IRDAI decision tree for ISP eligibility, ISMP training, fit-and-proper.">
<meta name="twitter:image" content="/og/ismp-eligibility-checker.jpg">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"ISMP Eligibility Checker","description":"ISMP Eligibility Checker is a 12-question decision tree for individuals planning to become Insurance Sales Persons (ISPs) or Financial Services Executives (FSEs) employed by an Insurance Marketing Firm (IMF) registered with the Insurance Regulatory and Development Authority of India. Walks through educational qualifications, age, residence, prior IRDAI agent licence, current employment status, fit-and-proper criteria, past convictions or disqualifications, and willingness to undergo the 50-hour Insurance Sales Management Programme training. Outputs an Eligible / Partial / Not Eligible verdict, flagged concerns, recommended next steps, and links to IMF incorporation and ISP certification services.","url":"/tools/ismp-eligibility-checker","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-05-14T08:00:00+05:30","dateModified":"2026-05-14T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"/contact-page","sameAs":["https://www.linkedin.com/in/ca-sundram-gupta"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Fellow Chartered Accountant (FCA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},"publisher":{"@id":"/#organization"},"provider":{"@id":"/#organization"}}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"ISMP Eligibility Checker","item":"/tools/ismp-eligibility-checker"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
{"@type":"Question","name":"What is an ISMP and who needs it?","acceptedAnswer":{"@type":"Answer","text":"ISMP stands for Insurance Sales Management Programme — the 50-hour prescribed training that every Insurance Sales Person (ISP) employed by an Insurance Marketing Firm must complete before sitting the certification examination conducted by the Insurance Institute of India (III). The training covers insurance principles, life and general insurance products, regulatory framework, ethics, and customer service. It is mandatory under the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015."}},
{"@type":"Question","name":"What is the difference between an ISP and an FSE under an IMF?","acceptedAnswer":{"@type":"Answer","text":"An Insurance Sales Person (ISP) is an individual employed by an Insurance Marketing Firm to solicit or procure insurance products. A Financial Services Executive (FSE) is an individual employed by an IMF holding a valid licence issued by another financial sector regulator (SEBI, RBI, PFRDA, Department of Posts) to market mutual funds, pension funds, banking products, or other financial products. The same person can act as both ISP and FSE if they meet the qualification criteria of both roles."}},
{"@type":"Question","name":"What are the minimum educational qualifications for an ISP?","acceptedAnswer":{"@type":"Answer","text":"The IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015 require an ISP to have passed Class 12 (or equivalent) from a recognised Board or Institution. There is no graduation requirement for the ISP role itself. The FSE role may require additional qualifications such as those prescribed by AMFI for mutual fund distribution or PFRDA for pension product distribution. The Principal Officer of an IMF has stricter requirements including a Bachelor's degree."}},
{"@type":"Question","name":"How long is the ISMP training and where can it be done?","acceptedAnswer":{"@type":"Answer","text":"The Insurance Sales Management Programme prescribed by IRDAI is a 50-hour training programme delivered by approved training institutes. After successful completion of training, the candidate must pass the certification examination conducted by the Insurance Institute of India. Approved institutes include the Insurance Institute of India campuses, designated training centres of insurance companies, and IRDAI-recognised insurance institutes across India."}},
{"@type":"Question","name":"Can I be an ISP while employed elsewhere full-time?","acceptedAnswer":{"@type":"Answer","text":"No. The IRDAI IMF Regulations require an ISP to be employed full-time by the IMF. A person who is full-time employed elsewhere typically cannot be registered as an ISP. Part-time engagements may be possible in some cases but are generally not preferred by IRDAI. Persons who are already exclusive agents of an insurance company cannot simultaneously serve as ISPs of an IMF — the agency must be surrendered or assigned before ISP registration."}},
{"@type":"Question","name":"What is the fit-and-proper criteria for an ISP?","acceptedAnswer":{"@type":"Answer","text":"Fit and Proper is the IRDAI's suitability criterion for any person being licensed as an insurance intermediary. It requires the applicant to have no past convictions involving moral turpitude, fraud, breach of trust, or financial offences. The applicant must not have been disqualified by IRDAI, SEBI, RBI, PFRDA, or any other financial regulator in the past 5 years. Pending insolvency proceedings, civil disputes of large value, or criminal cases must be disclosed during the application."}},
{"@type":"Question","name":"What is the minimum paid-up capital for setting up an IMF?","acceptedAnswer":{"@type":"Answer","text":"Under the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015 as amended, the minimum net worth requirement for an IMF is ₹10 lakh for areas falling under the local self-government, district headquarters, or municipal corporations of cities with population below 10 lakh, and ₹50 lakh for other areas. Minimum paid-up capital is typically ₹5 lakh. The Net Worth Certificate must be issued by a Chartered Accountant. The IMF can be set up as a private limited company, an LLP, a co-operative society, or any other entity recognised by the Authority."}},
{"@type":"Question","name":"How many insurance companies can an IMF tie up with?","acceptedAnswer":{"@type":"Answer","text":"Under IMF Regulations, an Insurance Marketing Firm is allowed to deal with a maximum of two insurance companies each in three different lines of business: Life Insurance, General Insurance, and Health Insurance. This means up to 6 insurance company tie-ups in total (2 life + 2 general + 2 health). The IMF can also distribute approved financial products from SEBI-regulated mutual funds, PFRDA pension products, and Post Office banking products through its Financial Services Executives."}},
{"@type":"Question","name":"How long does IMF registration take with IRDAI?","acceptedAnswer":{"@type":"Answer","text":"The typical end-to-end timeline is 4 to 6 months from initiating the application. Steps include: company incorporation with appropriate MOA/AOA objects (1 month), IRDAI online application with documentation (1 month), IRDAI review and personal presentation (1 to 2 months), Principal Officer training and examination (1 to 2 months), and final approval issuance. The non-refundable registration fee is ₹5,000. Net worth certification, infrastructure proof, and insurer consent letters are mandatory at filing stage."}},
{"@type":"Question","name":"What is the Principal Officer of an IMF and what are the qualifications?","acceptedAnswer":{"@type":"Answer","text":"The Principal Officer is the individual who is exclusively responsible for the activities of the IMF. The PO must hold a Bachelor's or Master's degree in Arts, Science, Social Sciences, Commerce, Engineering, Law, or Management from a recognised institution, have completed the specified insurance training from an IRDAI-recognised institute, and passed the relevant examination. The PO is also subject to fit-and-proper criteria and must declare KYC, PAN, and address proof."}},
{"@type":"Question","name":"Can a current IRDAI agent become an ISP?","acceptedAnswer":{"@type":"Answer","text":"Yes, but with surrender mechanics. A current IRDAI exclusive agent of an insurance company must first surrender or assign that agency before being employed as an ISP under an IMF. The ISP role is structured differently from the exclusive agent role — ISPs work for the IMF (the intermediary) and earn salary or commission through the IMF, whereas exclusive agents work directly for the insurer. The existing IRDAI examination certificate may count towards the ISMP training requirement, subject to IRDAI verification."}},
{"@type":"Question","name":"What documents are needed for the ISP / ISMP application?","acceptedAnswer":{"@type":"Answer","text":"Standard ISP application documents include: Class 12 certificate or higher educational certificate, age proof (Aadhaar or passport), PAN card, residence proof matching the state of IMF registration, fit-and-proper declaration, ISMP training completion certificate, III examination pass certificate, employment letter from the IMF, and KYC documentation as per IMF Regulations and Prevention of Money Laundering Act, 2002. Additional documents may apply for FSE roles handling mutual funds, pension products, or other regulated financial products."}},
{"@type":"Question","name":"Is this ISMP Eligibility Checker a substitute for a CA opinion?","acceptedAnswer":{"@type":"Answer","text":"No. This checker provides a directional assessment of ISP eligibility based on the 12-point IRDAI decision tree for internal planning and recruiter screening. Actual ISP registration involves verification by the IMF, fit-and-proper review by IRDAI, training and examination by the Insurance Institute of India, and ongoing compliance under the IRDAI (Registration of Insurance Marketing Firm) Regulations 2015. Always consult a Chartered Accountant or compliance professional before submitting any IMF or ISP application."}}
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
.progress-bar{height:6px;background:var(--surface-alt);border-radius:3px;margin-bottom:24px;overflow:hidden}
.progress-bar-fill{height:100%;background:linear-gradient(90deg,var(--accent),var(--accent-light));transition:width 0.4s ease;border-radius:3px}
.question-block{margin-bottom:22px;padding-bottom:18px;border-bottom:1px solid var(--border)}
.question-block:last-of-type{border-bottom:none}
.question-num{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;font-weight:700;margin-bottom:6px}
.question-text{font-size:15px;font-weight:600;color:var(--primary-dark);margin-bottom:4px;line-height:1.4}
.question-hint{font-size:12.5px;color:var(--text-muted);margin-bottom:10px;line-height:1.55}
.toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:80px;padding:10px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all 0.25s;-webkit-tap-highlight-color:transparent;min-height:44px}
.toggle-btn *{pointer-events:none}
.toggle-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}
.toggle-btn:focus-visible{outline:2px solid var(--primary);outline-offset:2px}
.toggle-btn.active.hard-fail{color:var(--danger)}
.toggle-btn.active.soft-fail{color:#D97706}
.toggle-btn.active.pass{color:var(--success)}
.btn-calculate{width:100%;padding:16px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s,transform 0.1s;margin-top:12px;min-height:52px}
.btn-calculate:hover{background:var(--primary-light)}
.btn-calculate:active{transform:scale(0.98)}
.btn-calculate:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.result-section{margin-top:28px;display:none}
.result-section.visible{display:block}
.result-divider{height:1px;background:var(--border);margin-bottom:24px}
.result-headline{padding:24px 28px;border-radius:var(--radius);margin-bottom:16px;color:#fff}
.result-headline.eligible{background:linear-gradient(135deg,#065F46 0%,#059669 100%)}
.result-headline.partial{background:linear-gradient(135deg,#92400E 0%,#D97706 100%)}
.result-headline.notEligible{background:linear-gradient(135deg,#7F1D1D 0%,#DC2626 100%)}
.result-headline .label{font-family:var(--font-mono);font-size:11px;text-transform:uppercase;letter-spacing:1.5px;opacity:0.85;margin-bottom:6px}
.result-headline .value{font-family:var(--font-body);font-size:30px;font-weight:700;line-height:1.15;margin-bottom:6px;word-break:break-word}
.result-headline .meta{font-size:14px;opacity:0.95;margin-top:8px;line-height:1.55}
.summary-grid{display:grid;grid-template-columns:1fr;gap:12px;margin-bottom:16px}
@media (min-width:600px){.summary-grid{grid-template-columns:1fr 1fr 1fr}}
.summary-card{background:var(--surface);border-radius:var(--radius);padding:16px 18px;border:1px solid var(--border);text-align:center}
.summary-card .v-label{font-family:var(--font-mono);font-size:10px;color:var(--accent);text-transform:uppercase;letter-spacing:1px;font-weight:700;margin-bottom:4px}
.summary-card .v-val{font-family:var(--font-mono);font-size:30px;font-weight:700;color:var(--primary-dark)}
.summary-card .v-desc{font-size:12px;color:var(--text-secondary);margin-top:4px;line-height:1.5}
.flags-block{background:var(--surface-alt);border-radius:var(--radius);padding:18px 22px;margin-top:16px}
.flags-block h4{font-family:var(--font-mono);font-size:11px;color:var(--accent);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:12px;font-weight:700}
.flag-item{display:flex;align-items:flex-start;gap:10px;padding:9px 0;font-size:13.5px;line-height:1.55;border-bottom:1px dashed var(--border)}
.flag-item:last-child{border-bottom:none}
.flag-item .icon{flex-shrink:0;width:22px;height:22px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;color:#fff;margin-top:1px}
.flag-item.pass .icon{background:var(--success)}
.flag-item.soft-fail .icon{background:#D97706}
.flag-item.hard-fail .icon{background:var(--danger)}
.flag-item .txt{flex:1;color:var(--text-secondary)}
.flag-item .txt strong{color:var(--primary-dark)}
.next-steps-block{background:#F0F5FB;border-left:4px solid var(--primary-light);border-radius:0 var(--radius) var(--radius) 0;padding:18px 22px;margin-top:16px}
.next-steps-block h4{font-family:var(--font-mono);font-size:11px;color:var(--primary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:10px;font-weight:700}
.next-steps-block ol{margin:0 0 0 22px}
.next-steps-block li{font-size:14px;color:var(--primary-dark);margin-bottom:8px;line-height:1.65}
.next-steps-block strong{color:var(--primary-dark);font-weight:700}
.next-steps-block a{color:var(--accent);text-decoration:underline;font-weight:600}
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
@media (max-width:767px){.hero h1{font-size:26px}.calc-card{padding:22px}.content-section{padding:22px}.toc-nav a{padding:10px 12px;font-size:12px}.brand-cta-bar{padding:12px 14px}.brand-cta-bar-text{font-size:13px;flex-basis:100%}.brand-cta-bar-actions{width:100%;gap:8px}.brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0}.brand-cta-bar .brand-cta-btn-call{flex:1 1 100%}.body-cta{padding:22px 18px}.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta{padding:16px}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}.result-headline .value{font-size:22px}}
@media (min-width:768px) and (max-width:950px){.body-cta .brand-cta-bar-actions{flex-direction:column}.body-cta .brand-cta-btn{width:100%}.post-result-cta .brand-cta-bar-actions{flex-direction:column}.post-result-cta .brand-cta-btn{width:100%}}
@media (prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important}}
@media print{.toc-nav,.brand-cta-bar,.post-result-cta,.body-cta,.cta-card,.sidebar-col,.btn-reset,.btn-print,.btn-calculate,.office-strip,.footer,.breadcrumb,.progress-bar{display:none !important}body{background:#fff;color:#000;font-size:11pt}.main-layout{grid-template-columns:1fr;padding:0;max-width:100%}.calc-card,.content-section{box-shadow:none;border:1px solid #ccc;page-break-inside:avoid;padding:16px;margin-bottom:16px}.result-headline{-webkit-print-color-adjust:exact;print-color-adjust:exact}.hero h1{font-size:18pt}a{color:#15365f}.faq-answer{max-height:none !important}.faq-item{break-inside:avoid}}

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
<a href="#calculator">Checker</a><a href="#how-to-use">How to Use</a><a href="#what-is-isp">ISP / FSE Roles</a><a href="#imf-setup">IMF Setup</a><a href="#training">ISMP Training</a><a href="#fit-proper">Fit &amp; Proper</a><a href="#timeline">Timeline &amp; Fees</a><a href="#faqs">FAQs</a>
</div></nav>

<nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><a href="/tools/">Free Tools</a><span>›</span>ISMP Eligibility Checker</nav>

<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 14 May 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span></div>
<h1>ISMP Eligibility Checker — <span>12-Question IRDAI ISP / IMF</span> Decision Tree</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Planning to set up an Insurance Marketing Firm? <strong>Talk to a CA in 30 seconds.</strong> End-to-end IRDAI registration in 4-6 months. Fixed fee.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ISMP%20Eligibility%20Checker%20and%20need%20help%20with%20IMF%20registration%20and%20ISP%20appointment." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=IMF%20Registration%20Help&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ISMP%20Eligibility%20Checker%20and%20need%20help%20with%3A%0A%0A-%20Insurance%20Marketing%20Firm%20%28IMF%29%20registration%0A-%20ISP%20%2F%20FSE%20appointment%0A-%20IRDAI%20compliance%0A%0AState%20of%20operation%3A%20%0AEntity%20type%20%28company%2FLLP%29%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>This checker walks through a 12-question decision tree to assess your eligibility to become an <strong>Insurance Sales Person (ISP)</strong> employed by an Insurance Marketing Firm (IMF) registered with the <a href="https://irdai.gov.in/" target="_blank" rel="noopener" style="color:var(--accent);text-decoration:underline">Insurance Regulatory and Development Authority of India (IRDAI)</a> under the <em>IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015</em>. The eligibility outcome (Eligible / Partial / Not Eligible) is determined by hard requirements (age, 12th class, fit-and-proper) and soft requirements (degree, experience, full-time employment elsewhere). After clearing the checker, the next step is the 50-hour <strong>ISMP (Insurance Sales Management Programme) training</strong> followed by the <strong>Insurance Institute of India</strong> certification examination.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>ISMP Eligibility Checker — 12 Questions</h2>
<p class="sub">Answer all 12 questions to receive your IRDAI ISP eligibility assessment. Each toggle is colour-coded — green = pass, amber = soft concern, red = hard fail.</p>
<noscript><div class="noscript-box">This checker requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>
<div class="progress-bar"><div class="progress-bar-fill" id="progressFill" style="width:0%"></div></div>

<div class="question-block">
<div class="question-num">Question 1 of 12 · Age</div>
<div class="question-text">Are you 18 years of age or older?</div>
<div class="question-hint">Minimum age for IRDAI insurance intermediary registration. Hard requirement.</div>
<div class="toggle-group" role="group" aria-label="Question 1"><button type="button" class="toggle-btn" data-q="q1" data-v="yes" onclick="setAns(this)">Yes</button><button type="button" class="toggle-btn" data-q="q1" data-v="no" onclick="setAns(this)">No</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 2 of 12 · Residency</div>
<div class="question-text">Are you a resident of the Indian state where the IMF is (or will be) registered?</div>
<div class="question-hint">IMF Regulations 2015 require the ISP to be a resident of the state of IMF registration.</div>
<div class="toggle-group" role="group" aria-label="Question 2"><button type="button" class="toggle-btn" data-q="q2" data-v="yes" onclick="setAns(this)">Yes</button><button type="button" class="toggle-btn" data-q="q2" data-v="no" onclick="setAns(this)">No</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 3 of 12 · Education</div>
<div class="question-text">Have you passed Class 12 (or equivalent) from a recognised Board or Institution?</div>
<div class="question-hint">Minimum educational qualification for ISP role per IRDAI IMF Regulations 2015.</div>
<div class="toggle-group" role="group" aria-label="Question 3"><button type="button" class="toggle-btn" data-q="q3" data-v="yes" onclick="setAns(this)">Yes</button><button type="button" class="toggle-btn" data-q="q3" data-v="no" onclick="setAns(this)">No</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 4 of 12 · Higher Education (preferred)</div>
<div class="question-text">Do you hold a Bachelor's degree (or higher) from a recognised institution?</div>
<div class="question-hint">Soft preference. Required only for the FSE role distributing mutual funds / pension products and for the Principal Officer.</div>
<div class="toggle-group" role="group" aria-label="Question 4"><button type="button" class="toggle-btn" data-q="q4" data-v="yes" onclick="setAns(this)">Yes</button><button type="button" class="toggle-btn" data-q="q4" data-v="no" onclick="setAns(this)">No</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 5 of 12 · Work Experience</div>
<div class="question-text">Do you have work experience in insurance, banking, or financial services?</div>
<div class="question-hint">Soft preference. No minimum experience is required for the ISP role itself, but experience helps with III examination preparation and customer credibility.</div>
<div class="toggle-group" role="group" aria-label="Question 5"><button type="button" class="toggle-btn" data-q="q5" data-v="yes" onclick="setAns(this)">Yes</button><button type="button" class="toggle-btn" data-q="q5" data-v="some" onclick="setAns(this)">Some (&lt;1 yr)</button><button type="button" class="toggle-btn" data-q="q5" data-v="no" onclick="setAns(this)">No</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 6 of 12 · Prior IRDAI Agent Licence</div>
<div class="question-text">Do you currently hold an active IRDAI insurance agent licence with another insurance company?</div>
<div class="question-hint">Existing exclusive-agent licences must be surrendered or assigned before joining as an ISP under an IMF. ISP and exclusive agent are mutually exclusive roles.</div>
<div class="toggle-group" role="group" aria-label="Question 6"><button type="button" class="toggle-btn" data-q="q6" data-v="yes" onclick="setAns(this)">Yes (active)</button><button type="button" class="toggle-btn" data-q="q6" data-v="surrender" onclick="setAns(this)">Willing to surrender</button><button type="button" class="toggle-btn" data-q="q6" data-v="no" onclick="setAns(this)">No</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 7 of 12 · Other Financial Regulator Licence</div>
<div class="question-text">Do you hold a SEBI Investment Advisor / AMFI / PFRDA / Department of Posts licence for distributing other financial products?</div>
<div class="question-hint">Required if planning to serve as a Financial Services Executive (FSE) for distributing mutual funds, pension products, etc. Optional for pure ISP role.</div>
<div class="toggle-group" role="group" aria-label="Question 7"><button type="button" class="toggle-btn" data-q="q7" data-v="yes" onclick="setAns(this)">Yes</button><button type="button" class="toggle-btn" data-q="q7" data-v="willing" onclick="setAns(this)">No, but willing to obtain</button><button type="button" class="toggle-btn" data-q="q7" data-v="no" onclick="setAns(this)">No, pure ISP only</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 8 of 12 · Current Employment</div>
<div class="question-text">Are you currently employed elsewhere?</div>
<div class="question-hint">IRDAI requires ISPs to be employed by the IMF. Full-time employment elsewhere typically disqualifies. Part-time may be permitted in some cases.</div>
<div class="toggle-group" role="group" aria-label="Question 8"><button type="button" class="toggle-btn" data-q="q8" data-v="fulltime" onclick="setAns(this)">Full-time elsewhere</button><button type="button" class="toggle-btn" data-q="q8" data-v="parttime" onclick="setAns(this)">Part-time / freelance</button><button type="button" class="toggle-btn" data-q="q8" data-v="none" onclick="setAns(this)">Not currently employed</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 9 of 12 · Convictions</div>
<div class="question-text">Have you been convicted in the past for an offence involving moral turpitude, fraud, breach of trust, or financial offences?</div>
<div class="question-hint">Hard disqualifier under the Fit-and-Proper criterion. Pending criminal cases must also be disclosed.</div>
<div class="toggle-group" role="group" aria-label="Question 9"><button type="button" class="toggle-btn" data-q="q9" data-v="no" onclick="setAns(this)">No, clean record</button><button type="button" class="toggle-btn" data-q="q9" data-v="pending" onclick="setAns(this)">Pending case</button><button type="button" class="toggle-btn" data-q="q9" data-v="yes" onclick="setAns(this)">Yes, prior conviction</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 10 of 12 · Regulatory Disqualification</div>
<div class="question-text">Have you been disqualified or barred by IRDAI, SEBI, RBI, PFRDA, or any other financial regulator in the past 5 years?</div>
<div class="question-hint">Hard disqualifier. Past regulatory bars are an automatic Fit-and-Proper failure.</div>
<div class="toggle-group" role="group" aria-label="Question 10"><button type="button" class="toggle-btn" data-q="q10" data-v="no" onclick="setAns(this)">No</button><button type="button" class="toggle-btn" data-q="q10" data-v="yes" onclick="setAns(this)">Yes</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 11 of 12 · ISMP Training</div>
<div class="question-text">Are you willing to undergo the 50-hour Insurance Sales Management Programme (ISMP) training?</div>
<div class="question-hint">Mandatory IRDAI-prescribed training. Must be completed at an approved institution before sitting the III examination. Hard requirement.</div>
<div class="toggle-group" role="group" aria-label="Question 11"><button type="button" class="toggle-btn" data-q="q11" data-v="yes" onclick="setAns(this)">Yes</button><button type="button" class="toggle-btn" data-q="q11" data-v="done" onclick="setAns(this)">Already completed</button><button type="button" class="toggle-btn" data-q="q11" data-v="no" onclick="setAns(this)">No</button></div>
</div>

<div class="question-block">
<div class="question-num">Question 12 of 12 · III Examination</div>
<div class="question-text">Are you willing to appear for and pass the Insurance Institute of India (III) certification examination?</div>
<div class="question-hint">Mandatory examination after ISMP training. Hard requirement under IMF Regulations 2015.</div>
<div class="toggle-group" role="group" aria-label="Question 12"><button type="button" class="toggle-btn" data-q="q12" data-v="yes" onclick="setAns(this)">Yes</button><button type="button" class="toggle-btn" data-q="q12" data-v="done" onclick="setAns(this)">Already passed</button><button type="button" class="toggle-btn" data-q="q12" data-v="no" onclick="setAns(this)">No</button></div>
</div>

<button class="btn-calculate" onclick="calculate()" type="button">Check My Eligibility</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline" id="resHeadlineBox">
<div class="label">Eligibility Verdict</div>
<div class="value" id="resHeadline">—</div>
<div class="meta" id="resHeadlineMeta">—</div>
</div>

<div class="summary-grid">
<div class="summary-card"><div class="v-label">Pass</div><div class="v-val" style="color:#059669;" id="resPassCount">—</div><div class="v-desc">Met requirements</div></div>
<div class="summary-card"><div class="v-label">Soft Concerns</div><div class="v-val" style="color:#D97706;" id="resSoftCount">—</div><div class="v-desc">Preferred items</div></div>
<div class="summary-card"><div class="v-label">Hard Fails</div><div class="v-val" style="color:#DC2626;" id="resHardCount">—</div><div class="v-desc">Disqualifiers</div></div>
</div>

<div class="flags-block"><h4>Question-by-Question Assessment</h4>
<div id="flagsContainer"></div>
</div>

<div class="next-steps-block"><h4>Recommended Next Steps</h4>
<ol id="nextStepsList"></ol>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head">Want a CA to handle the IMF registration end-to-end?</div>
<div class="post-result-cta-sub">Company incorporation, IRDAI online application, Principal Officer training coordination, insurer tie-up letters, net worth certification, infrastructure documentation. Fixed-fee 4-6 month turnaround.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20used%20the%20ISMP%20Eligibility%20Checker%20and%20need%20help%20with%20IMF%20registration." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=IMF%20Registration%20Quote&body=Hi%2C%0A%0AI%20just%20ran%20the%20ISMP%20Eligibility%20Checker%20and%20need%20a%20fixed-fee%20quote%20for%20IMF%20registration.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
<button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print Assessment</button>
</div>
</div>

<section class="content-section" id="how-to-use">
<h2>How to Use the ISMP Eligibility Checker</h2>
<ol>
<li><strong>Answer all 12 questions.</strong> Each question reflects a real eligibility criterion from the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015 or the Fit-and-Proper test for insurance intermediaries.</li>
<li><strong>Click the relevant toggle.</strong> Toggle colours indicate the answer's impact — green for pass, amber for soft concern, red for hard fail. The progress bar at the top updates as you complete each question.</li>
<li><strong>Click "Check My Eligibility".</strong> The checker tallies pass / soft / hard counts and returns one of three verdicts: Eligible, Partial (with conditions), or Not Eligible.</li>
<li><strong>Read the per-question assessment.</strong> Each question is colour-coded so you can see exactly which requirements you meet, which need attention, and which are disqualifiers.</li>
<li><strong>Review the next-steps list.</strong> The checker generates a specific action plan based on your answers — including links to IMF incorporation services and ISP certification training where relevant.</li>
<li><strong>Print or save the assessment.</strong> The browser print function produces a clean PDF you can share with your CA, the IMF Principal Officer, or your prospective employer.</li>
</ol>
</section>

<section class="content-section" id="what-is-isp">
<h2>What is an ISP / FSE Under an Insurance Marketing Firm?</h2>
<p>An <strong>Insurance Marketing Firm (IMF)</strong> is an entity registered by the <a href="https://irdai.gov.in/" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India (IRDAI)</a> to solicit, procure, and service insurance products and distribute other regulated financial products through salaried employees. The IMF Regulations 2015 define two key salaried roles:</p>

<h3>Insurance Sales Person (ISP)</h3>
<ul>
<li>An individual employed by an IMF to <strong>solicit or procure insurance products</strong> from up to 2 insurance companies in each of 3 lines of business (Life, General, Health) — up to 6 insurer tie-ups</li>
<li>Must have passed <strong>Class 12 or equivalent</strong>, completed the IRDAI-prescribed <strong>50-hour ISMP training</strong>, and passed the <a href="https://www.insuranceinstituteofindia.com/" target="_blank" rel="noopener">Insurance Institute of India</a> examination</li>
<li>Must be a <strong>resident of the state</strong> where the IMF is registered</li>
<li>Cannot simultaneously be an exclusive agent of an insurance company</li>
<li>Subject to the IRDAI <strong>Fit-and-Proper</strong> test</li>
</ul>

<h3>Financial Services Executive (FSE)</h3>
<ul>
<li>An individual employed by an IMF who additionally holds a licence from a non-insurance financial regulator (SEBI, RBI, PFRDA, Department of Posts) to <strong>market other financial products</strong></li>
<li>Permitted products: SEBI-regulated mutual funds, PFRDA pension funds, products distributed by SEBI Investment Advisors, banking/financial products of Department of Posts</li>
<li>Same person can serve as both ISP and FSE if they meet both qualification sets</li>
</ul>

<h3>Principal Officer (PO)</h3>
<p>The Principal Officer is the individual exclusively responsible for the activities of the IMF. The PO must hold a <strong>Bachelor's or Master's degree</strong> in Arts, Science, Social Sciences, Commerce, Engineering, Law, or Management, have completed the specified IRDAI insurance training, and passed the recognised examination.</p>

<div class="callout"><p><strong>CA Tip:</strong> Most IMFs start by training the Principal Officer first (since PO approval is a prerequisite for IMF registration), then bring in ISPs and FSEs after the IMF certificate is issued. Plan the training timeline to coincide with the company incorporation phase.</p></div>
</section>

<section class="content-section" id="imf-setup">
<h2>Setting Up an Insurance Marketing Firm — Entity &amp; Capital</h2>
<p>The IMF must be set up as a recognised entity before applying for IRDAI registration. Under the IMF Regulations 2015, the following entity forms are permitted:</p>

<table class="rate-table">
<thead><tr><th>Entity Type</th><th>Suitability</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Private Limited Company</td><td>Most common</td><td>Easier capital infusion, professional structure, single Director can also be PO</td></tr>
<tr><td>Limited Liability Partnership (LLP)</td><td>Common</td><td>Lower compliance burden than Pvt Ltd; allowed under 2019 amendment</td></tr>
<tr><td>Co-operative Society</td><td>Niche</td><td>Registered under Co-operative Society Act 1912; useful for regional setups</td></tr>
<tr><td>Other entities recognised by IRDAI</td><td>Case-by-case</td><td>Discretionary approval by the Authority</td></tr>
</tbody>
</table>

<h3>Net Worth Requirement</h3>
<p>The IMF Regulations prescribe minimum net worth based on operational location:</p>
<ul>
<li><strong>₹10 lakh</strong> for IMFs operating in areas falling under district headquarters or municipal corporations of cities with population below 10 lakh</li>
<li><strong>₹50 lakh</strong> for IMFs operating in larger urban areas</li>
<li>The net worth must be certified by a <strong>Chartered Accountant</strong> via a Net Worth Certificate</li>
<li>Bank account statement of the IMF must support the Net Worth Certificate</li>
<li>Minimum paid-up capital is typically <strong>₹5 lakh</strong>, but state-level practice varies</li>
</ul>

<h3>MOA Object Clauses</h3>
<p>The company's Memorandum of Association (or LLP Agreement) must clearly specify objects relating to insurance solicitation, procurement, servicing, and distribution of other regulated financial products. Generic "general trading" or "investment" MOA clauses will not be accepted. Patron Accounting drafts customised MOA/LLP agreements that pre-align with IRDAI expectations.</p>

<h3>Registration Fee</h3>
<p>The IRDAI registration fee is <strong>₹5,000</strong>, payable online only. The applicant must open an account with the State Bank of India for fee payment.</p>

<div class="callout warn"><p><strong>Common gotcha — Generic MOA.</strong> Many CA firms incorporate IMF applicants with generic MOA clauses and add the insurance objects later. IRDAI rejects such applications. Get the MOA right at incorporation. Patron Accounting's IMF incorporation service uses a pre-vetted MOA template.</p></div>
</section>

<div class="body-cta">
<h3>Need End-to-End IMF Registration?</h3>
<p>Patron Accounting handles the complete IMF registration journey: entity incorporation with pre-vetted MOA, IRDAI online application, Principal Officer training coordination, insurer consent letters, net worth certification, infrastructure documentation, and personal presentation support. Fixed-fee, 4–6 month turnaround. Pune, Mumbai, Delhi, Gurugram and pan-India.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20end-to-end%20IMF%20registration%20support." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=IMF%20Registration%20Quote&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20end-to-end%20IMF%20registration.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<section class="content-section" id="training">
<h2>ISMP — Insurance Sales Management Programme Training</h2>
<p>The ISMP is the IRDAI-prescribed <strong>50-hour training programme</strong> that every prospective ISP must complete at an approved training institute before sitting the certification examination. The training is the practical bridge between basic educational eligibility and the regulatory standard required to solicit insurance products from the public.</p>

<h3>Training Curriculum Structure</h3>
<ul>
<li><strong>Principles of Insurance</strong> — basic concepts, types of insurance, fundamental principles like utmost good faith, insurable interest, indemnity</li>
<li><strong>Life Insurance products</strong> — endowment, term, whole life, ULIPs, annuities, riders, taxation</li>
<li><strong>General Insurance products</strong> — motor, health, fire, marine, liability, miscellaneous</li>
<li><strong>Health Insurance products</strong> — individual and family floater, top-up, super top-up, critical illness</li>
<li><strong>Regulatory framework</strong> — Insurance Act 1938, IRDA Act 1999, IMF Regulations 2015, claim settlement guidelines</li>
<li><strong>Ethics and code of conduct</strong> — fair dealing, suitability, disclosure, grievance redressal</li>
<li><strong>Customer service and KYC</strong> — Prevention of Money Laundering Act, anti-fraud, customer protection</li>
</ul>

<h3>Approved Training Institutes</h3>
<p>The Insurance Institute of India runs the canonical ISMP training and the certification examination through its Mumbai and regional campuses. Additional IRDAI-approved institutes include designated training centres of major insurance companies and accredited insurance institutes across India.</p>

<h3>Examination &amp; Validity</h3>
<ul>
<li>Examination is conducted by the Insurance Institute of India after completion of training</li>
<li>Passing mark is typically 50% (verify with IRDAI/III at the time of registration)</li>
<li>Certificate is valid for <strong>3 years</strong> — must be refreshed via continuing education before expiry</li>
<li>Re-examination is permitted on failure, subject to a cooling-off period</li>
</ul>

<div class="callout"><p><strong>CA Tip:</strong> Block 6–8 weeks for the full ISMP cycle — 50 hours of structured training plus self-study plus examination scheduling. Most candidates pass at the first attempt if they treat the training seriously and complete the recommended past-paper revision.</p></div>
</section>

<section class="content-section" id="fit-proper">
<h2>Fit-and-Proper Criteria — The IRDAI Test</h2>
<p>"Fit and Proper" is the criterion used by IRDAI to determine whether an applicant is suitable to be licensed as an insurance intermediary. The criterion applies to the Principal Officer of the IMF, the directors and partners of the IMF entity, and to all ISPs and FSEs employed by the IMF.</p>

<h3>Hard Disqualifiers</h3>
<p>The following are automatic disqualifications:</p>
<ul>
<li>Conviction in the past for an offence involving <strong>moral turpitude, fraud, breach of trust, or financial offences</strong></li>
<li>Past <strong>disqualification or bar</strong> by IRDAI, SEBI, RBI, PFRDA, or any other financial sector regulator in the past 5 years</li>
<li>Being declared <strong>insolvent</strong> or being subject to ongoing insolvency proceedings</li>
<li>Existing <strong>exclusive agent licence</strong> with another insurance company (must be surrendered or assigned before joining as ISP)</li>
<li>Adverse action by any disciplinary committee of a recognised professional body (ICAI, ICSI, ICMAI, Bar Council, etc.)</li>
</ul>

<h3>Soft Concerns (Disclosure Required)</h3>
<ul>
<li>Pending criminal cases (require disclosure but not automatic disqualification)</li>
<li>Pending civil disputes of large value</li>
<li>Past financial difficulties that have been resolved</li>
<li>Past complaints from clients or counterparties</li>
</ul>

<h3>Documentation Required</h3>
<p>Each applicant must submit a <strong>signed Fit-and-Proper declaration</strong> attached to the IMF registration application. The declaration covers KYC documents (Aadhaar, PAN, address proof), educational certificates, training and examination certificates, no-objection from current employer (if applicable), and self-declaration regarding the hard disqualifiers above.</p>

<div class="callout warn"><p><strong>Note:</strong> Misleading declarations are themselves grounds for rejection or cancellation. Always disclose adverse history honestly — IRDAI's verification process catches misrepresentations and treats them more severely than the original concern.</p></div>
</section>

<section class="content-section" id="timeline">
<h2>Timeline, Fees &amp; Compliance</h2>
<p>The end-to-end IMF registration and ISP appointment journey typically takes 4 to 6 months. Below is the typical timeline and fee structure:</p>

<table class="rate-table">
<thead><tr><th>Phase</th><th>Duration</th><th>Key Activities</th><th>Approximate Fee</th></tr></thead>
<tbody>
<tr><td>1. Entity Incorporation</td><td>30 days</td><td>Pvt Ltd or LLP incorporation with pre-vetted MOA, PAN, TAN, GST, MSME</td><td>₹15,000–₹40,000</td></tr>
<tr><td>2. PO Training &amp; Exam</td><td>30–45 days</td><td>Principal Officer completes IRDAI training, passes III exam</td><td>₹10,000–₹15,000</td></tr>
<tr><td>3. Net Worth &amp; Infrastructure</td><td>15 days</td><td>CA certifies net worth, lease office space, set up infrastructure</td><td>₹5,000–₹15,000</td></tr>
<tr><td>4. Insurer Consent Letters</td><td>30 days</td><td>Obtain at least 1 (preferably 2–6) insurer consent letters</td><td>Variable</td></tr>
<tr><td>5. IRDAI Online Application</td><td>15 days</td><td>FORM A submission, fee payment, document upload</td><td>₹5,000 (IRDAI fee)</td></tr>
<tr><td>6. IRDAI Review &amp; Approval</td><td>30–60 days</td><td>IRDAI review, personal presentation, conditional approval</td><td>—</td></tr>
<tr><td>7. ISP Recruitment &amp; ISMP</td><td>45–60 days</td><td>Recruit ISPs, 50-hour ISMP training, III examination</td><td>₹3,000–₹5,000 per ISP</td></tr>
<tr><td><strong>Total</strong></td><td><strong>4–6 months</strong></td><td>—</td><td><strong>₹50,000–₹1,50,000 + professional fees</strong></td></tr>
</tbody>
</table>

<h3>Post-Registration Compliance</h3>
<ul>
<li><strong>Professional Indemnity Insurance</strong> — mandatory PI cover from date of registration; limit equals 2× preceding-year remuneration or minimum equal to net worth, whichever is higher; new IMFs must obtain within 12 months</li>
<li><strong>Annual Renewal</strong> — IMF registration renewal application must be submitted to IRDAI 30 to 90 days before expiry</li>
<li><strong>Record-keeping</strong> — KYC records, client mandate, proposal forms, complaints register, policy register; all to be retained per IRDAI guidelines</li>
<li><strong>Reporting</strong> — periodic returns and disclosures to IRDAI on business volumes, complaint redressal, remuneration breakups</li>
<li><strong>ISP/FSE Renewal</strong> — III certification renewable every 3 years through continuing education</li>
</ul>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions About ISP / IMF Eligibility</h2>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is an ISMP and who needs it?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">ISMP stands for Insurance Sales Management Programme — the 50-hour prescribed training that every Insurance Sales Person (ISP) employed by an Insurance Marketing Firm must complete before sitting the certification examination conducted by the Insurance Institute of India (III). The training covers insurance principles, life and general insurance products, regulatory framework, ethics, and customer service. It is mandatory under the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the difference between an ISP and an FSE under an IMF?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">An Insurance Sales Person (ISP) is an individual employed by an Insurance Marketing Firm to solicit or procure insurance products. A Financial Services Executive (FSE) is an individual employed by an IMF holding a valid licence issued by another financial sector regulator (SEBI, RBI, PFRDA, Department of Posts) to market mutual funds, pension funds, banking products, or other financial products. The same person can act as both ISP and FSE if they meet the qualification criteria of both roles.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What are the minimum educational qualifications for an ISP?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015 require an ISP to have passed Class 12 (or equivalent) from a recognised Board or Institution. There is no graduation requirement for the ISP role itself. The FSE role may require additional qualifications such as those prescribed by AMFI for mutual fund distribution or PFRDA for pension product distribution. The Principal Officer of an IMF has stricter requirements including a Bachelor's degree.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How long is the ISMP training and where can it be done?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The Insurance Sales Management Programme prescribed by IRDAI is a 50-hour training programme delivered by approved training institutes. After successful completion of training, the candidate must pass the certification examination conducted by the Insurance Institute of India. Approved institutes include the Insurance Institute of India campuses, designated training centres of insurance companies, and IRDAI-recognised insurance institutes across India.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can I be an ISP while employed elsewhere full-time?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. The IRDAI IMF Regulations require an ISP to be employed full-time by the IMF. A person who is full-time employed elsewhere typically cannot be registered as an ISP. Part-time engagements may be possible in some cases but are generally not preferred by IRDAI. Persons who are already exclusive agents of an insurance company cannot simultaneously serve as ISPs of an IMF — the agency must be surrendered or assigned before ISP registration.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the fit-and-proper criteria for an ISP?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Fit and Proper is the IRDAI's suitability criterion for any person being licensed as an insurance intermediary. It requires the applicant to have no past convictions involving moral turpitude, fraud, breach of trust, or financial offences. The applicant must not have been disqualified by IRDAI, SEBI, RBI, PFRDA, or any other financial regulator in the past 5 years. Pending insolvency proceedings, civil disputes of large value, or criminal cases must be disclosed during the application.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the minimum paid-up capital for setting up an IMF?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Under the IRDAI (Registration of Insurance Marketing Firm) Regulations, 2015 as amended, the minimum net worth requirement for an IMF is ₹10 lakh for areas falling under the local self-government, district headquarters, or municipal corporations of cities with population below 10 lakh, and ₹50 lakh for other areas. Minimum paid-up capital is typically ₹5 lakh. The Net Worth Certificate must be issued by a Chartered Accountant. The IMF can be set up as a private limited company, an LLP, a co-operative society, or any other entity recognised by the Authority.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How many insurance companies can an IMF tie up with?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Under IMF Regulations, an Insurance Marketing Firm is allowed to deal with a maximum of two insurance companies each in three different lines of business: Life Insurance, General Insurance, and Health Insurance. This means up to 6 insurance company tie-ups in total (2 life + 2 general + 2 health). The IMF can also distribute approved financial products from SEBI-regulated mutual funds, PFRDA pension products, and Post Office banking products through its Financial Services Executives.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How long does IMF registration take with IRDAI?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The typical end-to-end timeline is 4 to 6 months from initiating the application. Steps include: company incorporation with appropriate MOA/AOA objects (1 month), IRDAI online application with documentation (1 month), IRDAI review and personal presentation (1 to 2 months), Principal Officer training and examination (1 to 2 months), and final approval issuance. The non-refundable registration fee is ₹5,000. Net worth certification, infrastructure proof, and insurer consent letters are mandatory at filing stage.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the Principal Officer of an IMF and what are the qualifications?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The Principal Officer is the individual who is exclusively responsible for the activities of the IMF. The PO must hold a Bachelor's or Master's degree in Arts, Science, Social Sciences, Commerce, Engineering, Law, or Management from a recognised institution, have completed the specified insurance training from an IRDAI-recognised institute, and passed the relevant examination. The PO is also subject to fit-and-proper criteria and must declare KYC, PAN, and address proof.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Can a current IRDAI agent become an ISP?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes, but with surrender mechanics. A current IRDAI exclusive agent of an insurance company must first surrender or assign that agency before being employed as an ISP under an IMF. The ISP role is structured differently from the exclusive agent role — ISPs work for the IMF (the intermediary) and earn salary or commission through the IMF, whereas exclusive agents work directly for the insurer. The existing IRDAI examination certificate may count towards the ISMP training requirement, subject to IRDAI verification.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What documents are needed for the ISP / ISMP application?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Standard ISP application documents include: Class 12 certificate or higher educational certificate, age proof (Aadhaar or passport), PAN card, residence proof matching the state of IMF registration, fit-and-proper declaration, ISMP training completion certificate, III examination pass certificate, employment letter from the IMF, and KYC documentation as per IMF Regulations and Prevention of Money Laundering Act, 2002. Additional documents may apply for FSE roles handling mutual funds, pension products, or other regulated financial products.</div></div></div>

<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is this ISMP Eligibility Checker a substitute for a CA opinion?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. This checker provides a directional assessment of ISP eligibility based on the 12-point IRDAI decision tree for internal planning and recruiter screening. Actual ISP registration involves verification by the IMF, fit-and-proper review by IRDAI, training and examination by the Insurance Institute of India, and ongoing compliance under the IRDAI (Registration of Insurance Marketing Firm) Regulations 2015. Always consult a Chartered Accountant or compliance professional before submitting any IMF or ISP application.</div></div></div>

</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="cta-card">
<h3>Need IMF Registration?</h3>
<p>End-to-end IRDAI Insurance Marketing Firm registration. Fixed-fee, 4–6 month turnaround, pre-vetted MOA + insurer consent letter coordination.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20IMF%20registration." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=IMF%20Registration%20Help&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20IMF%20registration.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div>

<div class="sidebar-card"><h3>Related Services</h3>
<a href="/imf-incorporation-services" class="sidebar-link">IMF Incorporation Services <span class="arrow">→</span></a>
<a href="/ismp-certification-isp-appointment" class="sidebar-link">ISMP Certification &amp; ISP Appointment <span class="arrow">→</span></a>
<a href="/private-limited-company-registration-in-india" class="sidebar-link">Private Limited Company Registration <span class="arrow">→</span></a>
<a href="/llp-registration" class="sidebar-link">LLP Registration <span class="arrow">→</span></a>
<a href="/secretarial-services" class="sidebar-link">Company Secretarial Services <span class="arrow">→</span></a>
<a href="/startup-registration" class="sidebar-link">Startup India Registration <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>Related Tools</h3>
<a href="/tools/company-registration-cost-calculator" class="sidebar-link">Company Registration Cost <span class="arrow">→</span></a>
<a href="/tools/business-structure-comparison" class="sidebar-link">Business Structure Comparison <span class="arrow">→</span></a>
<a href="/tools/payroll-cost-calculator" class="sidebar-link">Payroll Cost Calculator <span class="arrow">→</span></a>
<a href="/tools/professional-tax-calculator" class="sidebar-link">Professional Tax Calculator <span class="arrow">→</span></a>
<a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
<a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator <span class="arrow">→</span></a>
</div>

<div class="sidebar-card"><h3>From the Blog</h3>
<a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
<a href="/blog/authorized-vs-paid-up-capital-everything-startups-must-know" class="sidebar-link">Authorized vs Paid-Up Capital <span class="arrow">→</span></a>
<a href="/blog/private-limited-company-vs-llp-which-is-right-for-your-startup" class="sidebar-link">Pvt Ltd vs LLP <span class="arrow">→</span></a>
</div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
const answers = {};
const totalQs = 12;

// Classification map: each answer mapped to pass / soft / hard
const ansClass = {
    q1: {yes:'pass', no:'hard'},
    q2: {yes:'pass', no:'hard'},
    q3: {yes:'pass', no:'hard'},
    q4: {yes:'pass', no:'soft'},
    q5: {yes:'pass', some:'soft', no:'soft'},
    q6: {yes:'hard', surrender:'soft', no:'pass'},
    q7: {yes:'pass', willing:'pass', no:'pass'},
    q8: {fulltime:'hard', parttime:'soft', none:'pass'},
    q9: {no:'pass', pending:'soft', yes:'hard'},
    q10: {no:'pass', yes:'hard'},
    q11: {yes:'pass', done:'pass', no:'hard'},
    q12: {yes:'pass', done:'pass', no:'hard'}
};

const qLabels = {
    q1:'Age 18+', q2:'State residency', q3:'Class 12 minimum', q4:'Bachelor\'s degree',
    q5:'Insurance/finance experience', q6:'Current IRDAI agent licence', q7:'Other financial regulator licence',
    q8:'Current employment status', q9:'Past convictions', q10:'Regulatory disqualification',
    q11:'ISMP training willingness', q12:'III examination willingness'
};

const qPassNote = {
    q1:'Meets minimum age requirement',
    q2:'Meets state-residency requirement',
    q3:'Meets Class 12 minimum',
    q4:'Holds Bachelor\'s degree — also qualifies for FSE role',
    q5:'Has relevant work experience — strengthens III examination prep',
    q6:'No existing IRDAI agent licence (or willing to surrender)',
    q7:'Compliance with FSE licensing requirement',
    q8:'Available full-time for IMF employment',
    q9:'Clean record — passes Fit-and-Proper',
    q10:'No regulatory disqualification — passes Fit-and-Proper',
    q11:'Willing to complete ISMP training',
    q12:'Willing to pass III examination'
};

const qFailNote = {
    q1:'Below 18 — IRDAI minimum age not met',
    q2:'Not a resident of the IMF\'s state — IMF Regulations 2015 violation',
    q3:'Below Class 12 — fails minimum educational qualification',
    q4:'No Bachelor\'s degree — limits to ISP role only (no FSE)',
    q5:'No insurance / finance / banking experience — preferred but not mandatory',
    q6:'Currently holds active IRDAI agent licence — must surrender before ISP appointment',
    q7:'Awareness — FSE role requires additional licence',
    q8:'Full-time employed elsewhere — IRDAI typically rejects part-time ISP appointments',
    q9:'Prior conviction or pending case — Fit-and-Proper concern',
    q10:'Past regulatory bar in last 5 years — automatic Fit-and-Proper failure',
    q11:'Not willing to undergo ISMP training — mandatory under IMF Regulations',
    q12:'Not willing to pass III examination — mandatory under IMF Regulations'
};

function setAns(b){
    const e = b.closest ? (b.closest('.toggle-btn') || b) : b;
    const q = e.dataset.q;
    const v = e.dataset.v;
    answers[q] = v;
    e.parentElement.querySelectorAll('.toggle-btn').forEach(x => {x.classList.remove('active','pass','soft-fail','hard-fail');});
    e.classList.add('active');
    const cls = ansClass[q][v];
    if(cls === 'pass') e.classList.add('pass');
    else if(cls === 'soft') e.classList.add('soft-fail');
    else if(cls === 'hard') e.classList.add('hard-fail');
    updateProgress();
}

function updateProgress(){
    const done = Object.keys(answers).length;
    document.getElementById('progressFill').style.width = (done/totalQs*100) + '%';
}

function calculate(){
    if(Object.keys(answers).length < totalQs){
        const missing = [];
        for(let i = 1; i <= totalQs; i++){if(!answers['q'+i]) missing.push(i);}
        const err = document.getElementById('errorBanner');
        err.textContent = 'Please answer all 12 questions. Missing: Q' + missing.join(', Q');
        err.classList.add('visible');
        setTimeout(()=>err.classList.remove('visible'),6000);
        return;
    }

    let passCount = 0, softCount = 0, hardCount = 0;
    const flagItems = [];
    for(let i = 1; i <= totalQs; i++){
        const q = 'q' + i;
        const v = answers[q];
        const cls = ansClass[q][v];
        let icon = '✓', note = qPassNote[q];
        if(cls === 'pass'){passCount++;}
        else if(cls === 'soft'){softCount++; icon = '!'; note = qFailNote[q];}
        else{hardCount++; icon = '✗'; note = qFailNote[q];}
        flagItems.push({cls: cls === 'hard' ? 'hard-fail' : (cls === 'soft' ? 'soft-fail' : 'pass'), icon, qNum: i, label: qLabels[q], note});
    }

    // Determine verdict
    let verdict, verdictClass, verdictHeadline, verdictMeta, nextSteps;
    if(hardCount > 0){
        verdict = 'NOT ELIGIBLE'; verdictClass = 'notEligible';
        verdictHeadline = 'Not Eligible — ' + hardCount + ' Hard Disqualifier' + (hardCount > 1 ? 's' : '') + ' Found';
        verdictMeta = 'You currently fail one or more IRDAI hard requirements. Address the items flagged in red before re-applying.';
        nextSteps = [
            'Review every red-flagged question above. These are mandatory IRDAI requirements that cannot be waived.',
            '<strong>Age / education / residency</strong> issues can be resolved over time. If you are under 18 or below Class 12, complete the qualifying milestone first.',
            'For <strong>Fit-and-Proper</strong> concerns (past convictions or regulatory bars), wait out the 5-year cooling period and seek legal counsel on rehabilitation certificates.',
            'If you currently hold an <strong>exclusive insurance agent licence</strong>, surrender it through your insurance company\'s back office. Once surrendered, you can immediately become eligible for ISP appointment.',
            'For full-time employment elsewhere — most IRDAI ISP appointments require <strong>full-time engagement</strong> with the IMF. Plan to transition employment before the IMF registration phase.',
            'Once the hard items are cleared, <a href="/ismp-certification-isp-appointment">contact Patron Accounting</a> for ISMP training coordination and ISP appointment.'
        ];
    } else if(softCount > 2){
        verdict = 'PARTIAL'; verdictClass = 'partial';
        verdictHeadline = 'Partial Eligibility — ' + softCount + ' Soft Concerns to Address';
        verdictMeta = 'You meet all hard requirements but have multiple soft concerns. Strengthen these to improve approval odds and FSE eligibility.';
        nextSteps = [
            'Review the amber-flagged questions above. These are not deal-breakers but they affect role flexibility and approval speed.',
            'If you lack a <strong>Bachelor\'s degree</strong>, you can still register as an ISP — but the FSE role (mutual funds, pensions) will be unavailable until you complete higher education.',
            'If you lack <strong>insurance / finance experience</strong>, allocate extra prep time for the ISMP training and III examination. Most successful candidates spend 60–80 hours in self-study beyond the 50-hour training.',
            'If you have <strong>pending civil/criminal cases</strong>, prepare clear disclosure documentation and seek legal review before submitting the Fit-and-Proper declaration.',
            'Once concerns are addressed (or accepted as soft items), schedule your <strong>50-hour ISMP training</strong> at an IRDAI-approved institute and book your III examination.',
            '<a href="/imf-incorporation-services">Engage Patron Accounting</a> for end-to-end IMF registration support — we coordinate training, examination, insurer tie-ups, and IRDAI filing.'
        ];
    } else if(softCount > 0){
        verdict = 'ELIGIBLE'; verdictClass = 'eligible';
        verdictHeadline = 'Eligible — Conditional on Minor Items';
        verdictMeta = 'You meet all hard IRDAI requirements. Address the ' + softCount + ' soft concern' + (softCount > 1 ? 's' : '') + ' for the best application experience.';
        nextSteps = [
            'Congratulations — you meet the IRDAI hard eligibility criteria for ISP appointment.',
            'Review the amber-flagged items above. They will not block your application but may affect role scope (e.g., no Bachelor\'s = no FSE).',
            'Schedule the <strong>50-hour ISMP training</strong> at an IRDAI-approved institute (Insurance Institute of India or designated insurance company training centres).',
            'After training, book the <strong>Insurance Institute of India</strong> certification examination. Allow 6–8 weeks for the full training + examination cycle.',
            'Coordinate with the IMF you plan to join — they will issue the employment letter and KYC, then file the ISP appointment with IRDAI.',
            '<a href="/ismp-certification-isp-appointment">Contact Patron Accounting</a> for ISMP training coordination, examination preparation, and ISP appointment support.',
            'If you are setting up your own IMF, also see <a href="/imf-incorporation-services">IMF Incorporation Services</a> — we handle company formation through IRDAI registration in 4–6 months.'
        ];
    } else {
        verdict = 'ELIGIBLE'; verdictClass = 'eligible';
        verdictHeadline = 'Eligible — Clear to Apply';
        verdictMeta = 'You meet every IRDAI requirement for ISP appointment with no concerns flagged. Proceed to ISMP training.';
        nextSteps = [
            'Excellent — you pass every question on the IRDAI eligibility decision tree.',
            'Schedule the <strong>50-hour ISMP training</strong> at an IRDAI-approved institute (Insurance Institute of India campuses, designated insurance company training centres, or other approved institutes).',
            'After training completion, book the <strong>Insurance Institute of India</strong> certification examination. Most candidates clear it on first attempt with focused preparation.',
            'Coordinate with the IMF you plan to join (or set up). They issue the employment letter and KYC, then file the ISP appointment with IRDAI.',
            'Maintain documentation for periodic compliance — III certificates expire every 3 years and require continuing education for renewal.',
            '<a href="/ismp-certification-isp-appointment">Contact Patron Accounting</a> for ISMP training coordination, examination preparation, ISP appointment, and ongoing compliance support.',
            'Planning to set up your own IMF? <a href="/imf-incorporation-services">IMF Incorporation Services</a> — end-to-end registration in 4–6 months, fixed-fee.'
        ];
    }

    // Apply verdict UI
    const head = document.getElementById('resHeadlineBox');
    head.classList.remove('eligible','partial','notEligible');
    head.classList.add(verdictClass);
    document.getElementById('resHeadline').textContent = verdictHeadline;
    document.getElementById('resHeadlineMeta').textContent = verdictMeta;
    document.getElementById('resPassCount').textContent = passCount;
    document.getElementById('resSoftCount').textContent = softCount;
    document.getElementById('resHardCount').textContent = hardCount;

    // Render flag items
    const flagsContainer = document.getElementById('flagsContainer');
    flagsContainer.innerHTML = '';
    flagItems.forEach(f => {
        const div = document.createElement('div');
        div.className = 'flag-item ' + f.cls;
        div.innerHTML = '<div class="icon">' + f.icon + '</div><div class="txt"><strong>Q' + f.qNum + ' · ' + f.label + ':</strong> ' + f.note + '</div>';
        flagsContainer.appendChild(div);
    });

    // Render next steps
    const nextStepsList = document.getElementById('nextStepsList');
    nextStepsList.innerHTML = '';
    nextSteps.forEach(s => {
        const li = document.createElement('li');
        li.innerHTML = s;
        nextStepsList.appendChild(li);
    });

    const section = document.getElementById('resultSection');
    section.classList.add('visible');
    requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
}

function resetCalc(){
    Object.keys(answers).forEach(k => delete answers[k]);
    document.querySelectorAll('.toggle-btn').forEach(x => x.classList.remove('active','pass','soft-fail','hard-fail'));
    document.getElementById('progressFill').style.width = '0%';
    document.getElementById('resultSection').classList.remove('visible');
    document.getElementById('errorBanner').classList.remove('visible');
}

function toggleFaq(e){const b=e.closest?(e.closest('.faq-question')||e):e;const it=b.closest('.faq-item');if(!it)return;const o=it.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>{i.classList.remove('open');const q=i.querySelector('.faq-question');if(q)q.setAttribute('aria-expanded','false');});if(!o){it.classList.add('open');b.setAttribute('aria-expanded','true');}}

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
