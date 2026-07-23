@extends('layouts.app')

@section('meta')
    <title>ROC Fee Calculator | Company Registration Cost by State</title>
    <meta name="description" content="ROC Fee Calculator: estimate company registration ROC fees, state stamp duty, MoA &amp; AoA, INC-20A, ADT-1 and DSC by state for Pvt Ltd, OPC, LLP &amp; Section 8.">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large">
    <link rel="canonical" href="/tools/roc-calculator">

    <meta property="og:title" content="ROC Fee Calculator — Company Registration Cost by State">
    <meta property="og:description" content="Official MCA rates 2026: ROC registration fee, state stamp duty, MoA/AoA, INC-20A, ADT-1, DSC and professional fees — for every Indian state and company type.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/roc-calculator">
    <meta property="og:image" content="/tools/og/roc-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ROC Fee Calculator — Company Registration Cost by State">
    <meta name="twitter:description" content="Official MCA rates 2026: ROC fee, state stamp duty, MoA/AoA, INC-20A, ADT-1, DSC & professional fees by state and company type.">
    <meta name="twitter:image" content="/tools/og/roc-calculator.png">

    <meta name="theme-color" content="#15365f">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    {{-- Schema Standard v2.1 — emitted in <head> via the meta section (layouts.app does not yield 'schema') --}}
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"SoftwareApplication","name":"ROC Fee Calculator","description":"Calculate company registration ROC fees, state stamp duty, MoA and AoA charges, INC-20A, ADT-1, DSC and professional fees by Indian state for Private Limited, OPC, LLP and Section 8 companies.","url":"https://www.patronaccounting.com/tools/roc-calculator","applicationCategory":"BusinessApplication","operatingSystem":"Any","inLanguage":"en-IN","isAccessibleForFree":true,"datePublished":"2026-01-15T08:00:00+05:30","dateModified":"2026-06-30T08:00:00+05:30","offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},"reviewedBy":{"@type":"Person","@id":"https://patronaccounting.com/#founder","name":"CA Sundram Gupta","jobTitle":"Founder & Chartered Accountant","url":"https://www.patronaccounting.com/contact-page","hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India"}}]},"publisher":{"@id":"https://patronaccounting.com/#organization"},"provider":{"@id":"https://patronaccounting.com/#organization"}}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.patronaccounting.com/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"https://www.patronaccounting.com/tools/"},{"@type":"ListItem","position":3,"name":"ROC Fee Calculator","item":"https://www.patronaccounting.com/tools/roc-calculator"}]}</script>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What does the ROC fee for company registration include?","acceptedAnswer":{"@type":"Answer","text":"The total cost has two parts. Reimbursable government fees: the ROC registration (filing) fee on authorised capital, state stamp duty on the INC form, MoA and AoA, the SPICe+/RUN name reservation fee, INC-20A commencement filing fee, ADT-1 auditor appointment fee, and PAN plus TAN. Professional and service fees: the Class 3 DSC cost per signatory, Patron's professional fee, and 18% GST on those service fees."}},{"@type":"Question","name":"How is the ROC registration fee calculated?","acceptedAnswer":{"@type":"Answer","text":"Under the Companies (Registration Offices and Fees) Rules, 2014, the fee is slab-based on authorised capital. For Private and Public companies it starts at Rs 5,000 up to Rs 1 lakh, then adds Rs 400 per Rs 10,000 from Rs 1-5 lakh, Rs 300 per Rs 10,000 from Rs 5-50 lakh, Rs 100 per Rs 10,000 from Rs 50 lakh-1 crore, and Rs 75 per Rs 10,000 above Rs 1 crore. OPCs and small companies have a lower, separate slab."}},{"@type":"Question","name":"Why does the stamp duty change with the state?","acceptedAnswer":{"@type":"Answer","text":"Stamp duty on the INC form, MoA and AoA is levied by the state where the registered office is located, so the rate differs across states and union territories. Some states charge a fixed amount, others a percentage of authorised capital with a minimum and maximum. This calculator uses the MCA eStamp rate schedule for each state."}},{"@type":"Question","name":"Is INC-20A mandatory and what does it cost?","acceptedAnswer":{"@type":"Answer","text":"Yes. Form INC-20A (declaration for commencement of business) must be filed within 180 days of incorporation by every company having share capital. The filing fee follows the normal MCA fee slab on nominal capital, ranging from Rs 200 to Rs 600. Companies without share capital are exempt."}},{"@type":"Question","name":"How many Digital Signature Certificates (DSC) do I need?","acceptedAnswer":{"@type":"Answer","text":"Every proposed director and subscriber must have their own Class 3 DSC to sign the incorporation documents. A person who is both a director and a shareholder needs only one. A Private Limited Company therefore needs a minimum of two DSCs and an OPC needs one."}},{"@type":"Question","name":"Is ADT-1 required at incorporation?","acceptedAnswer":{"@type":"Answer","text":"Every new company must appoint its first statutory auditor within 30 days of incorporation, and Form ADT-1 is filed to record the appointment. The filing fee follows the MCA slab on nominal capital. The calculator includes ADT-1 by default; you can switch it off if you have a specific reason."}},{"@type":"Question","name":"Are the government fees in this calculator reimbursable?","acceptedAnswer":{"@type":"Answer","text":"Yes. Stamp duty, ROC filing fees, name reservation, INC-20A, ADT-1, and PAN/TAN are statutory government charges paid to the MCA and state on your behalf and are billed at actuals. The professional fee and 18% GST are the only service components."}},{"@type":"Question","name":"Does this calculator give an exact, final quote?","acceptedAnswer":{"@type":"Answer","text":"It gives a close, rate-based estimate using the official MCA and state stamp schedules. Final charges can vary with the number of directors, specific state notifications, and case-specific filings. For a fixed-fee written quote, have a Patron Chartered Accountant review your requirement."}}]}</script>
@endsection

@section('content')
<style>
:root {
  /* Patron brand palette */
  --primary: #15365f;
  --primary-light: #1f4a7a;
  --primary-dark: #0a2240;
  --accent: #f26522;
  --accent-light: #ff8347;
  --text: #414042;
  --text-secondary: #555555;
  --text-muted: #888888;

  --bg: #FAFAF8;
  --surface: #ffffff;
  --surface-alt: #F0EFEB;
  --border: #E5E5E0;
  --border-hover: #cbd5e1;

  /* functional state colors — not brand */
  --success: #059669;
  --success-light: #d1fae5;
  --info: #0EA5E9;
  --danger: #DC2626;

  --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
  --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
  --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
  --radius: 12px;
  --radius-lg: 20px;

  --font-body: 'DM Sans', system-ui, -apple-system, sans-serif;
  --font-mono: 'Space Mono', monospace;
}

.roc-wrap *, .roc-wrap *::before, .roc-wrap *::after { box-sizing: border-box; }
.roc-wrap {
  font-family: var(--font-body);
  color: var(--text);
  background: var(--bg);
  line-height: 1.55;
  -webkit-font-smoothing: antialiased;
}
.roc-wrap .inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

/* ── HERO ── */
.hero { background: linear-gradient(135deg, #FFF6F0 0%, #FBFBF9 100%); padding: 38px 0 26px; }
.hero .inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
.hero-meta { display: flex; flex-wrap: wrap; gap: 10px 18px; align-items: center; margin-bottom: 14px; font-size: 13px; }
.badge-updated { display: inline-flex; align-items: center; gap: 7px; background: #fff; border: 1px solid var(--border); border-radius: 100px; padding: 5px 13px; font-size: 12px; font-weight: 600; color: var(--primary); }
.badge-updated::before { content: ''; width: 7px; height: 7px; border-radius: 50%; background: var(--success); }
.author-byline { color: var(--text-secondary); }
.author-byline strong { color: var(--primary); font-weight: 700; }
.hero h1 { font-size: clamp(26px, 4vw, 40px); font-weight: 800; line-height: 1.12; color: var(--primary-dark); letter-spacing: -0.02em; margin: 0 0 10px; }
.hero h1 em { font-style: normal; color: var(--accent); }
.hero .hero-sub { font-size: 15px; color: var(--text-secondary); max-width: 760px; }

/* ── PEACH TOP CTA BAR ── */
.brand-cta-bar { background: #FFEDD5; border-top: 1px solid #FED7AA; border-bottom: 1px solid #FED7AA; padding: 14px 20px; }
.brand-cta-bar-inner { max-width: 1200px; margin: 0 auto; display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
.brand-cta-bar-text { flex: 1 1 320px; font-size: 14px; color: var(--text); line-height: 1.45; }
.brand-cta-bar-text strong { color: var(--text); font-weight: 700; }
.brand-cta-bar-actions { display: flex; gap: 10px; flex-wrap: wrap; }
.brand-cta-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 11px 18px; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 700; text-decoration: none; border: 0; cursor: pointer; transition: transform .15s ease, box-shadow .15s ease, background .2s ease; -webkit-tap-highlight-color: transparent; touch-action: manipulation; white-space: nowrap; line-height: 1.2; min-height: 44px; }
.brand-cta-btn:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.12); }
.brand-cta-btn:active { transform: translateY(0); }
.brand-cta-btn .ico { width: 16px; height: 16px; flex-shrink: 0; }
.brand-cta-btn-call { background: var(--accent); color: #fff; }
.brand-cta-btn-call:hover { background: var(--accent-light); color: #fff; }
.brand-cta-btn-wa { background: #25D366; color: #fff; }
.brand-cta-btn-wa:hover { background: #1FB855; color: #fff; }
.brand-cta-btn-email { background: #fff; color: var(--text); border: 1px solid #E5D6C5; }
.brand-cta-btn-email:hover { background: #FAFAF8; }
.brand-cta-stack { display: flex; flex-direction: column; gap: 8px; }
.brand-cta-stack .brand-cta-btn { width: 100%; }

/* ── TL;DR ── */
.tldr { max-width: 1200px; margin: 22px auto 0; padding: 0 20px; }
.tldr-inner { background: #fff; border: 1px solid var(--border); border-left: 4px solid var(--accent); border-radius: var(--radius); padding: 16px 20px; }
.tldr-label { font-size: 11px; font-weight: 800; letter-spacing: .08em; color: var(--accent); margin-bottom: 6px; }
.tldr p { font-size: 14.5px; color: var(--text-secondary); margin: 0; }
.tldr strong { color: var(--primary); }

/* ── LAYOUT ── */
.main-layout { max-width: 1200px; margin: 26px auto 0; padding: 0 20px; display: grid; grid-template-columns: 1fr 320px; gap: 30px; align-items: start; }
.content-col, .sidebar-col { min-width: 0; }
.sidebar-col { position: sticky; top: 16px; display: flex; flex-direction: column; gap: 18px; }

/* ── CALCULATOR CARD ── */
.calc-card { background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius-lg); box-shadow: var(--shadow-md); padding: 28px; }
.calc-card > h2 { font-size: 22px; font-weight: 800; color: var(--primary-dark); margin: 0 0 6px; }
.calc-sub { font-size: 14px; color: var(--text-secondary); margin: 0 0 22px; }
.calc-grid { display: block; }            /* single column flow — no lopsided blank space */
.calc-results { margin-top: 24px; padding-top: 22px; border-top: 1px solid var(--border); }
.field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
.field-row .field { margin-bottom: 0; }
.calc-inputs .field, .calc-inputs .field-row { margin-bottom: 18px; }
.calc-inputs .field-row:last-child, .calc-inputs > .field:last-child { margin-bottom: 0; }
.panel-title { font-size: 12px; font-weight: 700; letter-spacing: .05em; text-transform: uppercase; color: var(--text-muted); margin-bottom: 14px; display: flex; align-items: center; gap: 8px; }

.field { margin-bottom: 20px; }
.field:last-child { margin-bottom: 0; }
.roc-wrap label { display: block; font-size: 12px; font-weight: 700; text-transform: uppercase; color: var(--text-muted); margin-bottom: 8px; letter-spacing: .05em; }
.roc-wrap select, .roc-wrap input[type=text] { width: 100%; background: #fff; border: 1px solid var(--border); border-radius: 12px; color: var(--text); font-family: var(--font-body); font-size: 15px; font-weight: 500; padding: 12px 16px; transition: border-color .2s, box-shadow .2s; box-shadow: var(--shadow-sm); -webkit-appearance: none; }
.roc-wrap select { background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='7' viewBox='0 0 10 7'%3E%3Cpath d='M1 1l4 4 4-4' stroke='%231f4a7a' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 16px center; padding-right: 40px; cursor: pointer; }
.roc-wrap select:focus, .roc-wrap input:focus { outline: none; border-color: var(--primary-light); box-shadow: 0 0 0 3px rgba(31,74,122,0.15); }
.field-help { font-size: 12px; color: var(--text-muted); margin-top: 6px; font-weight: 400; text-transform: none; letter-spacing: 0; }

.seg { display: grid; gap: 8px; }
.seg.c2 { grid-template-columns: 1fr 1fr; }
.seg.c3 { grid-template-columns: 1fr 1fr 1fr; }
.seg-btn { background: #fff; border: 1px solid var(--border); border-radius: 10px; color: var(--text-secondary); font-family: var(--font-body); font-size: 13px; font-weight: 600; padding: 0 8px; min-height: 44px; cursor: pointer; transition: all .18s; text-align: center; box-shadow: var(--shadow-sm); }
.seg-btn.on { background: var(--primary); border-color: var(--primary); color: #fff; box-shadow: 0 4px 6px -1px rgba(21,54,95,0.3); }
.seg-btn:hover:not(.on) { border-color: var(--border-hover); color: var(--text); }

.stepper { display: flex; align-items: center; gap: 10px; background: #fff; border: 1px solid var(--border); border-radius: 12px; padding: 5px 5px 5px 16px; box-shadow: var(--shadow-sm); }
.stepper span#dscLbl { flex: 1; font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--text); }
.st-btn { width: 44px; height: 44px; background: var(--bg); border: 1px solid var(--border); border-radius: 8px; color: var(--primary); font-size: 22px; cursor: pointer; line-height: 1; display: flex; align-items: center; justify-content: center; transition: all .18s; }
.st-btn:hover { background: var(--surface-alt); }

/* ── RESULTS ── */
.res-head { display: flex; align-items: center; gap: 8px; margin-bottom: 4px; }
.res-state { font-size: 12px; font-weight: 700; letter-spacing: .05em; text-transform: uppercase; color: var(--accent); }
.res-title { font-size: 18px; font-weight: 800; color: var(--primary-dark); margin-bottom: 14px; }
.section-lbl { font-size: 11px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: var(--text-muted); padding: 18px 0 8px; display: flex; align-items: center; gap: 12px; }
.section-lbl::after { content: ''; flex: 1; height: 1px; background: var(--border); }
.fee-row { display: flex; justify-content: space-between; align-items: center; padding: 11px 0; border-bottom: 1px dashed var(--border); gap: 10px; }
.fee-row:last-of-type { border-bottom: none; }
.fee-row .lbl { font-size: 14px; font-weight: 500; color: var(--text); flex: 1; }
.fee-row .tag { font-size: 10px; font-weight: 700; letter-spacing: .04em; border-radius: 6px; padding: 4px 8px; text-transform: uppercase; white-space: nowrap; }
.tag-mca { background: #E6EEF6; color: var(--primary-light); }
.tag-state { background: #FDEAD9; color: #b4501a; }
.tag-prof { background: #f3e8ff; color: #7c3aed; }
.tag-tax { background: #fee2e2; color: var(--danger); }
.fee-row .amt { font-family: var(--font-mono); font-size: 14px; font-weight: 700; color: var(--text); white-space: nowrap; }
.fee-row.dimmed { opacity: .4; text-decoration: line-through; }
.subtotal { display: flex; justify-content: space-between; align-items: center; padding: 14px 16px; margin: 10px 0; background: var(--bg); border: 1px solid var(--border); border-radius: 12px; }
.subtotal .lbl { font-size: 12px; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); }
.subtotal .amt { font-family: var(--font-mono); font-size: 15px; font-weight: 700; color: var(--text); }

.grand { margin: 22px 0 0; padding: 28px; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border-radius: var(--radius-lg); position: relative; overflow: hidden; color: #fff; box-shadow: var(--shadow-lg); }
.grand::before { content: '\20B9'; position: absolute; right: 10px; bottom: -34px; font-family: var(--font-body); font-size: 150px; font-weight: 800; color: rgba(255,255,255,0.08); line-height: 1; pointer-events: none; }
.grand .gt-lbl { font-size: 12px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: rgba(255,255,255,0.75); margin-bottom: 6px; }
.grand .gt-amt { font-family: var(--font-body); font-size: clamp(30px, 6vw, 44px); font-weight: 800; letter-spacing: -.02em; line-height: 1; margin-bottom: 6px; word-break: break-word; }
.grand .gt-note { font-size: 13px; color: rgba(255,255,255,0.8); }
.gt-split { display: flex; gap: 12px; margin-top: 18px; padding-top: 18px; border-top: 1px solid rgba(255,255,255,0.2); }
.gt-part { flex: 1; padding: 12px; background: rgba(0,0,0,0.15); border-radius: 12px; }
.gt-part .p-lbl { font-size: 10px; font-weight: 700; letter-spacing: .05em; text-transform: uppercase; color: rgba(255,255,255,0.7); margin-bottom: 4px; }
.gt-part .p-amt { font-family: var(--font-mono); font-size: 15px; font-weight: 700; color: #fff; }
.aoa-note { margin-top: 14px; padding: 13px 16px; background: #FFFBEB; border-left: 4px solid var(--accent); border-radius: 8px; font-size: 13px; color: #78350F; line-height: 1.5; }
.aoa-note strong { color: #92400e; font-weight: 700; }

/* ── POST-RESULT CTA ── */
.post-result-cta { background: #FFF7ED; border: 1px solid #FED7AA; border-left: 4px solid var(--accent); border-radius: var(--radius); padding: 18px 20px; margin: 20px 0 0; }
.post-result-cta-head { font-size: 15px; font-weight: 700; color: var(--text); margin-bottom: 4px; line-height: 1.4; }
.post-result-cta-sub { font-size: 13px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.55; }
.post-result-cta .brand-cta-bar-actions { gap: 8px; }

/* ── MID-BODY CTA (navy) ── */
.body-cta { margin: 26px 0; padding: 28px; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border-radius: var(--radius-lg); color: #fff; text-align: center; }
.body-cta h3 { font-size: 20px; font-weight: 800; margin: 0 0 8px; }
.body-cta p { font-size: 14px; color: rgba(255,255,255,0.85); margin: 0 0 16px; }
.body-cta .brand-cta-bar-actions { justify-content: center; }
.body-cta .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.body-cta .brand-cta-btn-email:hover { background: #fff; }

/* ── CONTENT SECTIONS ── */
.content-section { margin: 26px 0; }
.content-section h2 { font-size: 22px; font-weight: 800; color: var(--primary-dark); margin: 0 0 12px; }
.content-section h3 { font-size: 16px; font-weight: 700; color: var(--primary); margin: 18px 0 6px; }
.content-section p { font-size: 15px; color: var(--text-secondary); margin: 0 0 12px; }
.content-section ul { margin: 0 0 12px; padding-left: 20px; }
.content-section li { font-size: 15px; color: var(--text-secondary); margin-bottom: 6px; }

/* ── FAQ ── */
.faq-section h2 { font-size: 22px; font-weight: 800; color: var(--primary-dark); margin: 0 0 14px; }
.faq-item { border: 1px solid var(--border); border-radius: var(--radius); margin-bottom: 10px; overflow: hidden; background: #fff; }
.faq-question { width: 100%; text-align: left; background: none; border: 0; padding: 16px 18px; font-family: var(--font-body); font-size: 15px; font-weight: 700; color: var(--primary-dark); cursor: pointer; display: flex; justify-content: space-between; align-items: center; gap: 12px; min-height: 44px; }
.faq-question .chev { transition: transform .2s; color: var(--accent); flex-shrink: 0; }
.faq-item.open .faq-question .chev { transform: rotate(180deg); }
.faq-answer { max-height: 0; overflow: hidden; transition: max-height .25s ease; }
.faq-item.open .faq-answer { max-height: 600px; }
.faq-answer-inner { padding: 0 18px 16px; font-size: 14.5px; color: var(--text-secondary); line-height: 1.65; }

/* ── SIDEBAR ── */
.cta-card { background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border-radius: var(--radius-lg); padding: 22px; color: #fff; }
.cta-card h3 { font-size: 17px; font-weight: 800; margin: 0 0 6px; }
.cta-card p { font-size: 13px; color: rgba(255,255,255,0.82); margin: 0 0 14px; }
.cta-card .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.sidebar-card { background: #fff; border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 20px; }
.sidebar-card h3 { font-size: 13px; font-weight: 800; letter-spacing: .04em; text-transform: uppercase; color: var(--text-muted); margin: 0 0 12px; }
.sidebar-link { display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid var(--border); font-size: 14px; font-weight: 600; color: var(--primary); text-decoration: none; }
.sidebar-link:last-child { border-bottom: none; }
.sidebar-link .arrow { color: var(--accent); }
.sidebar-link:hover { color: var(--accent); }

/* ── OFFICE STRIP ── */
.office-strip { background: var(--primary-dark); color: #fff; margin-top: 32px; padding: 18px 20px; text-align: center; }
.office-strip .offices { font-size: 14px; font-weight: 700; letter-spacing: .02em; }
.office-strip .trust { display: block; margin-top: 4px; font-size: 12px; color: rgba(255,255,255,0.7); }

/* ── FOOTER ── */
.roc-footer { background: var(--primary-dark); color: rgba(255,255,255,0.75); padding: 16px 20px; text-align: center; font-size: 13px; }

/* ── INFO TOOLTIP ── */
.info-wrap { display: inline-flex; align-items: center; gap: 6px; }
.info-btn { display: inline-flex; align-items: center; justify-content: center; width: 18px; height: 18px; border-radius: 50%; background: rgba(242,101,34,0.12); border: 1px solid rgba(242,101,34,0.35); color: var(--accent); font-size: 11px; font-weight: 700; font-style: normal; cursor: pointer; line-height: 1; flex-shrink: 0; transition: background .18s, border-color .18s, color .18s; user-select: none; vertical-align: middle; font-family: serif; }
.info-btn:hover { background: var(--accent); color: #fff; border-color: var(--accent); }
.tooltip-box { display: none; position: fixed; z-index: 9999; width: 300px; background: #fff; border: 1.5px solid rgba(242,101,34,0.22); border-radius: 12px; padding: 14px 16px; box-shadow: 0 8px 32px rgba(0,0,0,0.14); font-family: var(--font-body); }
.tooltip-box.visible { display: block; animation: tooltipIn .15s ease; }
@keyframes tooltipIn { from { opacity: 0; transform: translateY(5px); } to { opacity: 1; transform: translateY(0); } }
.tt-title { font-size: 12px; font-weight: 700; color: var(--accent); margin-bottom: 8px; }
.tt-body { font-size: 12px; color: var(--text-secondary); line-height: 1.7; }
.tt-body b { font-weight: 700; color: var(--text); }
.tt-body ul { margin: 8px 0 0; padding-left: 16px; }
.tt-body ul li { margin-bottom: 5px; }
.tt-alert { margin-top: 10px; padding: 9px 11px; background: #FFF7ED; border-left: 3px solid var(--accent); border-radius: 0 7px 7px 0; font-size: 11.5px; color: #7a3000; line-height: 1.65; }
.tt-alert b { font-weight: 700; color: #c94d02; }

/* ── A11Y: focus-visible ── */
.brand-cta-btn:focus-visible, .seg-btn:focus-visible, .st-btn:focus-visible, .faq-question:focus-visible, .sidebar-link:focus-visible, .info-btn:focus-visible, .roc-wrap select:focus-visible, .roc-wrap input:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }

/* ── RESPONSIVE ── */
@media (max-width: 950px) {
  .main-layout { grid-template-columns: 1fr; gap: 22px; }
  .sidebar-col { position: static; }
}
@media (max-width: 767px) {
  .hero { padding: 28px 0 20px; }
  .calc-card { padding: 20px; }
  .field-row { grid-template-columns: 1fr; gap: 0; }
  .field-row .field { margin-bottom: 18px; }
  .seg.c3 { grid-template-columns: 1fr 1fr; }
  .gt-split { flex-direction: column; gap: 8px; }
  .brand-cta-bar { padding: 12px 14px; }
  .brand-cta-bar-text { font-size: 13px; flex-basis: 100%; }
  .brand-cta-bar-actions { width: 100%; gap: 8px; }
  .brand-cta-bar .brand-cta-btn { flex: 1 1 0; padding: 10px 8px; font-size: 12.5px; min-width: 0; }
  .brand-cta-bar .brand-cta-btn-call { flex: 1 1 100%; }
  .body-cta .brand-cta-bar-actions { flex-direction: column; }
  .body-cta .brand-cta-btn { width: 100%; }
  .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
  .post-result-cta .brand-cta-btn { width: 100%; }
}
@media (min-width: 768px) and (max-width: 950px) {
  .body-cta .brand-cta-bar-actions { flex-direction: column; }
  .body-cta .brand-cta-btn { width: 100%; }
}

/* ── reduced motion ── */
@media (prefers-reduced-motion: reduce) { * { animation-duration: .001ms !important; transition-duration: .001ms !important; } }

/* ── PRINT ── */
@media print {
  .brand-cta-bar, .post-result-cta, .body-cta, .cta-card, .sidebar-col, .office-strip, .roc-footer, .info-btn { display: none !important; }
  .main-layout { grid-template-columns: 1fr; }
  .grand { box-shadow: none; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
}
</style>

<div class="roc-wrap">

<header class="hero" id="calculator">
  <div class="inner">
    <div class="hero-meta">
      <span class="badge-updated">Last Updated: 30 June 2026</span>
      <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ROC <em>Fee Calculator</em> — Company Registration Cost by State</h1>
    <p class="hero-sub">Estimate the full cost to register a company in India — ROC filing fee, state stamp duty (MoA, AoA &amp; INC form), SPICe+/RUN, INC-20A, ADT-1, PAN/TAN, DSC and professional fees. Official MCA rates, every state and company type.</p>
  </div>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
  <div class="brand-cta-bar-inner">
    <div class="brand-cta-bar-text">Registering a company? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
    <div class="brand-cta-bar-actions">
      <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
        <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        +91 945 945 6700
      </a>
      <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20ROC%20Fee%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener">
        <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
        WhatsApp
      </a>
      <a href="mailto:sales@patronaccounting.com?subject=ROC%20Fee%20Calculator%20%E2%80%94%20Company%20Registration%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ROC%20Fee%20Calculator%20and%20would%20like%20help%20registering%20my%20company.%0A%0AState%3A%0ACompany%20type%3A%0AAuthorised%20capital%3A%0A%0APlease%20share%20a%20fixed-fee%20quote." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
        <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        Email
      </a>
    </div>
  </div>
</div>

<div class="tldr">
  <div class="tldr-inner">
    <div class="tldr-label">TL;DR</div>
    <p>Pick your <strong>state</strong> and <strong>company type</strong>, enter <strong>authorised capital</strong>, and this tool totals the full registration cost — <strong>reimbursable government fees</strong> (ROC filing, state stamp duty on INC/MoA/AoA, name reservation, INC-20A, ADT-1, PAN+TAN) plus <strong>professional &amp; service fees</strong> (DSC, professional fee and 18% GST). Rates follow the official MCA schedule; final charges can vary by case.</p>
  </div>
</div>

<div class="main-layout">
  <div class="content-col">

    <div class="calc-card">
      <h2>ROC Fee Calculator</h2>
      <p class="calc-sub">Official MCA rates 2026. Fill in the company details and the breakdown updates instantly.</p>

      <div class="calc-grid">
        <div class="calc-inputs">
          <div class="panel-title">Company Details</div>

          <div class="field">
            <label for="stateSelect">State / Union Territory</label>
            <select id="stateSelect" aria-label="State or Union Territory"></select>
          </div>

          <div class="field">
            <label>Company Type</label>
            <div class="seg c3" role="group" aria-label="Company type">
              <button type="button" class="seg-btn on" data-ct="pvt" onclick="setCT(this)">Private Ltd</button>
              <button type="button" class="seg-btn" data-ct="pub" onclick="setCT(this)">Public Ltd</button>
              <button type="button" class="seg-btn" data-ct="opc" onclick="setCT(this)">OPC</button>
              <button type="button" class="seg-btn" data-ct="small" onclick="setCT(this)">Small Co.</button>
              <button type="button" class="seg-btn" data-ct="sec8" onclick="setCT(this)">Section 8</button>
              <button type="button" class="seg-btn" data-ct="nocap" onclick="setCT(this)">No Share Cap</button>
            </div>
          </div>

          <div class="field-row">
          <div class="field" id="authCapField">
            <label for="authCap">Authorised Capital (₹)</label>
            <input type="text" inputmode="decimal" autocomplete="off" id="authCap" value="1,00,000" oninput="calc()">
            <div class="field-help">Commas allowed — e.g. 10,00,000 = ₹10 lakh.</div>
          </div>

          <div class="field" id="paidCapField">
            <label for="paidCap">Paid-up Capital (₹) <span style="font-weight:400;text-transform:none;color:var(--text-muted);">(for INC-20A)</span></label>
            <input type="text" inputmode="decimal" autocomplete="off" id="paidCap" value="1,00,000" oninput="calc()">
          </div>
          </div>

          <div class="field-row">
          <div class="field">
            <label>
              <span class="info-wrap">Number of DSC Required
                <span class="info-btn" onclick="toggleTip(event,'tip-dsc')" title="What is DSC?" role="button" tabindex="0">i</span>
                <div class="tooltip-box" id="tip-dsc">
                  <div class="tt-title">How many DSCs do I need?</div>
                  <div class="tt-body">Every proposed <b>Director</b> and <b>Shareholder</b> needs their own <b>Class 3 DSC</b> to sign incorporation documents. Someone who is both a Director and Shareholder needs only <b>one</b>.
                    <ul><li><b>Private Limited</b> — minimum 2 DSCs</li><li><b>OPC</b> — minimum 1 DSC</li></ul>
                  </div>
                </div>
              </span>
            </label>
            <div class="stepper">
              <span id="dscLbl">2</span>
              <button type="button" class="st-btn" onclick="dsc(-1)" aria-label="Decrease DSC count">−</button>
              <button type="button" class="st-btn" onclick="dsc(+1)" aria-label="Increase DSC count">+</button>
            </div>
          </div>

          <div class="field">
            <label>
              <span class="info-wrap">ADT-1 — Auditor Appointment
                <span class="info-btn" onclick="toggleTip(event,'tip-adt')" title="What is ADT-1?" role="button" tabindex="0">i</span>
                <div class="tooltip-box" id="tip-adt">
                  <div class="tt-title">Should I include Form ADT-1?</div>
                  <div class="tt-body"><b>Yes — we recommend keeping this "Yes".</b><br><br>Every new company must appoint its first statutory auditor within <b>30 days of incorporation</b>.
                    <div class="tt-alert">⚠️ Form ADT-1 records the appointment; missing the deadline attracts daily penalties.</div>
                  </div>
                </div>
              </span>
            </label>
            <div class="seg c2" role="group" aria-label="ADT-1 required">
              <button type="button" class="seg-btn on" data-adt="yes" onclick="setADT(this)">Yes</button>
              <button type="button" class="seg-btn" data-adt="no" onclick="setADT(this)">No</button>
            </div>
          </div>
          </div>
        </div>

        <div class="calc-results" id="resultBody">
          <div class="res-head"><span class="res-state" id="rs_state">Maharashtra</span></div>
          <div class="res-title">Fee Breakdown</div>

          <div class="section-lbl">Government Fees — Reimbursable</div>
          <div class="fee-row" id="row_inc"><span class="lbl">State Stamp on INC Form</span><span class="tag tag-state">Stamp</span><span class="amt" id="v_inc">—</span></div>
          <div class="fee-row" id="row_moa"><span class="lbl">MoA Stamp Duty</span><span class="tag tag-state">Stamp</span><span class="amt" id="v_moa">—</span></div>
          <div class="fee-row" id="row_aoa"><span class="lbl">AoA Stamp Duty</span><span class="tag tag-state">Stamp</span><span class="amt" id="v_aoa">—</span></div>
          <div class="fee-row" id="row_run"><span class="lbl">Name Reservation (RUN/SPICe+)</span><span class="tag tag-mca">MCA</span><span class="amt" id="v_run">₹1,000.00</span></div>
          <div class="fee-row" id="row_20a"><span class="lbl">INC-20A — Commencement</span><span class="tag tag-mca">MCA</span><span class="amt" id="v_20a">—</span></div>
          <div class="fee-row" id="row_adt"><span class="lbl">ADT-1 — Auditor Appointment</span><span class="tag tag-mca">MCA</span><span class="amt" id="v_adt">—</span></div>
          <div class="fee-row" id="row_pantan"><span class="lbl">PAN + TAN Application</span><span class="tag tag-mca">Govt</span><span class="amt" id="v_pantan">₹143.00</span></div>
          <div class="subtotal"><span class="lbl">Total Reimbursable Govt Fees</span><span class="amt" id="v_subtotal_gov">—</span></div>

          <div class="section-lbl">Professional &amp; Service Fees</div>
          <div class="fee-row"><span class="lbl">DSC (<span id="dsc_lbl2">2</span> unit × ₹1,750)</span><span class="tag tag-prof">DSC</span><span class="amt" id="v_dsc">—</span></div>
          <div class="fee-row"><span class="lbl">Professional Fees</span><span class="tag tag-prof">Prof</span><span class="amt" id="v_prof">—</span></div>
          <div class="fee-row"><span class="lbl">GST on Service Fees (18%)</span><span class="tag tag-tax">Tax</span><span class="amt" id="v_gstonf">—</span></div>
          <div class="subtotal"><span class="lbl">Total Service Fees</span><span class="amt" id="v_subtotal_svc">—</span></div>

          <div class="aoa-note" id="aoaNote" style="display:none"><strong>AoA Stamp Rule:</strong> <span id="aoaRuleText"></span></div>
        </div>
      </div>

      <div class="grand">
            <div class="gt-lbl">Grand Total Cost</div>
            <div class="gt-amt" id="v_grand">₹ 0.00</div>
            <div class="gt-note" id="v_grand_note">Estimate based on official MCA &amp; state rates</div>
            <div class="gt-split">
              <div class="gt-part"><div class="p-lbl">Reimbursable Govt</div><div class="p-amt" id="gt_reimb">—</div></div>
              <div class="gt-part"><div class="p-lbl">Professional &amp; Tax</div><div class="p-amt" id="gt_svc">—</div></div>
            </div>
          </div>

          <div class="post-result-cta" id="postResultCTA">
            <div class="post-result-cta-head">Want a CA to handle the whole registration end-to-end?</div>
            <div class="post-result-cta-sub">Fixed-fee company incorporation by Patron Accounting LLP — name approval, SPICe+, DSC, PAN/TAN, INC-20A and ADT-1, done for you.</div>
            <div class="brand-cta-bar-actions">
              <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
              </a>
              <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20ROC%20Fee%20Calculator.%20Please%20review%20my%20company%20registration%20cost%20estimate%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
              </a>
              <a href="mailto:sales@patronaccounting.com?subject=ROC%20Fee%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ROC%20Fee%20Calculator%20and%20would%20like%20a%20fixed-fee%20quote%20to%20register%20my%20company.%0A%0AState%3A%0ACompany%20type%3A%0AAuthorised%20capital%3A%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
              </a>
            </div>
          </div>
    </div>

    <div class="body-cta">
      <h3>Need Help Registering Your Company?</h3>
      <p>Patron Accounting LLP runs end-to-end company incorporation — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
      <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
          <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ROC%20Fee%20Calculator.%20I%20need%20help%20with%20company%20registration.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener">
          <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
          WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Company%20Registration%20%E2%80%94%20Enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20ROC%20Fee%20Calculator%20and%20need%20help%20registering%20my%20company.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
          <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          Email
        </a>
      </div>
    </div>

    <div class="content-section">
      <h2>How the company registration cost is built up</h2>
      <p>The total you pay to register a company in India is the sum of <strong>statutory government charges</strong> (paid to the MCA and the state) and <strong>professional &amp; service fees</strong>. This calculator separates the two so you can see exactly what is reimbursable at actuals and what is the service component.</p>
      <h3>Reimbursable government fees</h3>
      <ul>
        <li><strong>ROC registration (filing) fee</strong> — slab-based on authorised capital under the Companies (Registration Offices and Fees) Rules, 2014.</li>
        <li><strong>State stamp duty</strong> on the INC form, MoA and AoA — varies by state per the MCA eStamp schedule.</li>
        <li><strong>Name reservation</strong> (RUN / SPICe+) and <strong>PAN + TAN</strong>.</li>
        <li><strong>INC-20A</strong> (commencement of business) and <strong>ADT-1</strong> (first auditor appointment) filing fees.</li>
      </ul>
      <h3>Professional &amp; service fees</h3>
      <ul>
        <li><strong>DSC</strong> — one Class 3 Digital Signature Certificate per signatory.</li>
        <li><strong>Professional fee</strong> for preparing and filing the incorporation forms.</li>
        <li><strong>18% GST</strong> on the service fees (DSC + professional fee).</li>
      </ul>
    </div>

    <div class="faq-section content-section">
      <h2>Frequently asked questions</h2>
      <div class="faq-item"><button type="button" class="faq-question" onclick="toggleFaq(this)">What does the ROC fee for company registration include?<span class="chev">▾</span></button><div class="faq-answer"><div class="faq-answer-inner">The total cost has two parts. Reimbursable government fees: the ROC registration (filing) fee on authorised capital, state stamp duty on the INC form, MoA and AoA, the SPICe+/RUN name reservation fee, INC-20A commencement filing fee, ADT-1 auditor appointment fee, and PAN plus TAN. Professional and service fees: the Class 3 DSC cost per signatory, Patron's professional fee, and 18% GST on those service fees.</div></div></div>
      <div class="faq-item"><button type="button" class="faq-question" onclick="toggleFaq(this)">How is the ROC registration fee calculated?<span class="chev">▾</span></button><div class="faq-answer"><div class="faq-answer-inner">Under the Companies (Registration Offices and Fees) Rules, 2014, the fee is slab-based on authorised capital. For Private and Public companies it starts at Rs 5,000 up to Rs 1 lakh, then adds Rs 400 per Rs 10,000 from Rs 1-5 lakh, Rs 300 per Rs 10,000 from Rs 5-50 lakh, Rs 100 per Rs 10,000 from Rs 50 lakh-1 crore, and Rs 75 per Rs 10,000 above Rs 1 crore. OPCs and small companies have a lower, separate slab.</div></div></div>
      <div class="faq-item"><button type="button" class="faq-question" onclick="toggleFaq(this)">Why does the stamp duty change with the state?<span class="chev">▾</span></button><div class="faq-answer"><div class="faq-answer-inner">Stamp duty on the INC form, MoA and AoA is levied by the state where the registered office is located, so the rate differs across states and union territories. Some states charge a fixed amount, others a percentage of authorised capital with a minimum and maximum. This calculator uses the MCA eStamp rate schedule for each state.</div></div></div>
      <div class="faq-item"><button type="button" class="faq-question" onclick="toggleFaq(this)">Is INC-20A mandatory and what does it cost?<span class="chev">▾</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. Form INC-20A (declaration for commencement of business) must be filed within 180 days of incorporation by every company having share capital. The filing fee follows the normal MCA fee slab on nominal capital, ranging from Rs 200 to Rs 600. Companies without share capital are exempt.</div></div></div>
      <div class="faq-item"><button type="button" class="faq-question" onclick="toggleFaq(this)">How many Digital Signature Certificates (DSC) do I need?<span class="chev">▾</span></button><div class="faq-answer"><div class="faq-answer-inner">Every proposed director and subscriber must have their own Class 3 DSC to sign the incorporation documents. A person who is both a director and a shareholder needs only one. A Private Limited Company therefore needs a minimum of two DSCs and an OPC needs one.</div></div></div>
      <div class="faq-item"><button type="button" class="faq-question" onclick="toggleFaq(this)">Is ADT-1 required at incorporation?<span class="chev">▾</span></button><div class="faq-answer"><div class="faq-answer-inner">Every new company must appoint its first statutory auditor within 30 days of incorporation, and Form ADT-1 is filed to record the appointment. The filing fee follows the MCA slab on nominal capital. The calculator includes ADT-1 by default; you can switch it off if you have a specific reason.</div></div></div>
      <div class="faq-item"><button type="button" class="faq-question" onclick="toggleFaq(this)">Are the government fees in this calculator reimbursable?<span class="chev">▾</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. Stamp duty, ROC filing fees, name reservation, INC-20A, ADT-1, and PAN/TAN are statutory government charges paid to the MCA and state on your behalf and are billed at actuals. The professional fee and 18% GST are the only service components.</div></div></div>
      <div class="faq-item"><button type="button" class="faq-question" onclick="toggleFaq(this)">Does this calculator give an exact, final quote?<span class="chev">▾</span></button><div class="faq-answer"><div class="faq-answer-inner">It gives a close, rate-based estimate using the official MCA and state stamp schedules. Final charges can vary with the number of directors, specific state notifications, and case-specific filings. For a fixed-fee written quote, have a Patron Chartered Accountant review your requirement.</div></div></div>
    </div>

  </div>

  <aside class="sidebar-col">
    <div class="cta-card">
      <h3>Register with Patron</h3>
      <p>End-to-end company incorporation by Chartered Accountants — fixed-fee.</p>
      <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
          <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ROC%20Fee%20Calculator.%20I%20need%20help%20with%20company%20registration.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener">
          <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
          WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Company%20Registration%20%E2%80%94%20Enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20ROC%20Fee%20Calculator%20and%20need%20help%20registering%20my%20company.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
          <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          Email
        </a>
      </div>
    </div>

    <div class="sidebar-card">
      <h3>Related Services</h3>
      <a class="sidebar-link" href="/private-limited-company-registration">Private Limited Registration <span class="arrow">→</span></a>
      <a class="sidebar-link" href="/one-person-company-registration">One Person Company (OPC) <span class="arrow">→</span></a>
      <a class="sidebar-link" href="/llp-incorporation">LLP Incorporation <span class="arrow">→</span></a>
      <a class="sidebar-link" href="/section8-company-registration">Section 8 Company <span class="arrow">→</span></a>
      <a class="sidebar-link" href="/public-company-registration">Public Company Registration <span class="arrow">→</span></a>
      <a class="sidebar-link" href="/dsc-registration">Digital Signature (DSC) <span class="arrow">→</span></a>
    </div>
  </aside>
</div>

<div class="office-strip">
  <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
  <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="roc-footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

</div>

<script>
(function(){
// ── tolerant Indian-currency parser (UPDATE-TOOLS v1) ──
function parseINR(raw){ if(raw===undefined||raw===null) return NaN; var c=String(raw).replace(/[,\s₹]/g,''); if(c==='') return NaN; var n=parseFloat(c); return isFinite(n)?n:NaN; }

// ═══ STATE DATA — MCA eStamp Rate Schedule ═══
const STATES = [
{name:"Andaman & Nicobar",incStamp:20,incStamp_sec8:20,moa:200,moa_sec8:0,moa_nocap:200,aoa_fn:c=>300,aoa_rule:"Fixed ₹300",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>300},
{name:"Andhra Pradesh",incStamp:20,incStamp_sec8:20,moa:500,moa_sec8:500,moa_nocap:500,aoa_fn:c=>Math.min(Math.max(c*0.0015,1000),500000),aoa_rule:"0.15% of authorised capital; min ₹1,000; max ₹5,00,000",aoa_sec8_fn:c=>Math.min(Math.max(c*0.0015,1000),500000),aoa_nocap_fn:c=>1000},
{name:"Arunachal Pradesh",incStamp:10,incStamp_sec8:10,moa:200,moa_sec8:200,moa_nocap:200,aoa_fn:c=>500,aoa_rule:"Fixed ₹500",aoa_sec8_fn:c=>500,aoa_nocap_fn:c=>500},
{name:"Assam",incStamp:15,incStamp_sec8:15,moa:200,moa_sec8:200,moa_nocap:200,aoa_fn:c=>310,aoa_rule:"Fixed ₹310",aoa_sec8_fn:c=>310,aoa_nocap_fn:c=>310},
{name:"Bihar",incStamp:20,incStamp_sec8:20,moa:500,moa_sec8:0,moa_nocap:500,aoa_fn:c=>Math.min(Math.max(c*0.0015,1000),500000),aoa_rule:"0.15% of auth capital or ₹1,000, whichever is more; max ₹5,00,000",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>1000},
{name:"Chandigarh",incStamp:3,incStamp_sec8:3,moa:500,moa_sec8:0,moa_nocap:500,aoa_fn:c=>1000,aoa_rule:"Fixed ₹1,000",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>1000},
{name:"Chhattisgarh",incStamp:10,incStamp_sec8:10,moa:500,moa_sec8:0,moa_nocap:500,aoa_fn:c=>Math.min(Math.max(c*0.0015,1000),500000),aoa_rule:"0.15% of auth capital or ₹1,000, whichever is more; max ₹5,00,000",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>1000},
{name:"Dadra & Nagar Haveli",incStamp:1,incStamp_sec8:1,moa:15,moa_sec8:0,moa_nocap:15,aoa_fn:c=>25,aoa_rule:"Fixed ₹25",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>25},
{name:"Daman & Diu",incStamp:20,incStamp_sec8:20,moa:150,moa_sec8:0,moa_nocap:150,aoa_fn:c=>Math.ceil(c/500000)*1000,aoa_rule:"₹1,000 per every ₹5 Lakhs of authorised capital or part thereof",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>1000},
{name:"Delhi",incStamp:10,incStamp_sec8:10,moa:200,moa_sec8:0,moa_nocap:200,aoa_fn:c=>Math.min(c*0.0015,2500000),aoa_rule:"0.15% of authorised capital; maximum ₹25,00,000",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>200},
{name:"Goa",incStamp:50,incStamp_sec8:50,moa:150,moa_sec8:0,moa_nocap:150,aoa_fn:c=>Math.ceil(c/500000)*1000,aoa_rule:"₹1,000 per every ₹5 Lakhs of authorised capital or part thereof",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>1000},
{name:"Gujarat",incStamp:20,incStamp_sec8:20,moa:100,moa_sec8:0,moa_nocap:100,aoa_fn:c=>Math.min(c*0.005,500000),aoa_rule:"0.5% of authorised capital; maximum ₹5,00,000",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>1000},
{name:"Haryana",incStamp:15,incStamp_sec8:15,moa:60,moa_sec8:0,moa_nocap:60,aoa_fn:c=>c<=100000?60:120,aoa_rule:"₹60 if auth. capital ≤ ₹1 Lakh; ₹120 if auth. capital > ₹1 Lakh",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>60},
{name:"Himachal Pradesh",incStamp:3,incStamp_sec8:3,moa:60,moa_sec8:0,moa_nocap:60,aoa_fn:c=>c<=100000?60:120,aoa_rule:"₹60 if auth. capital ≤ ₹1 Lakh; ₹120 if auth. capital > ₹1 Lakh",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>60},
{name:"Jammu & Kashmir",incStamp:10,incStamp_sec8:10,moa:150,moa_sec8:0,moa_nocap:150,aoa_fn:c=>c<=100000?150:300,aoa_rule:"₹150 if auth. capital ≤ ₹1 Lakh; ₹300 if auth. capital > ₹1 Lakh",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>150},
{name:"Jharkhand",incStamp:5,incStamp_sec8:5,moa:63,moa_sec8:0,moa_nocap:63,aoa_fn:c=>105,aoa_rule:"Fixed ₹105",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>105},
{name:"Karnataka",incStamp:20,incStamp_sec8:20,moa:1000,moa_sec8:0,moa_nocap:1000,aoa_fn:c=>Math.max(Math.ceil(c/1000000)*500,500),aoa_rule:"₹500 per every ₹10 Lakhs of authorised capital or part thereof; minimum ₹500",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>500},
{name:"Kerala",incStamp:25,incStamp_sec8:25,moa:1000,moa_sec8:1000,moa_nocap:1000,aoa_fn:c=>c<=1000000?2000:c<=2500000?5000:c*0.005,aoa_rule:"Auth. cap ≤₹10L → ₹2,000 | ₹10L–₹25L → ₹5,000 | >₹25L → 0.5% of auth. capital",aoa_sec8_fn:c=>c<=1000000?2000:c<=2500000?5000:c*0.005,aoa_nocap_fn:c=>2000},
{name:"Lakshadweep",incStamp:25,incStamp_sec8:25,moa:500,moa_sec8:500,moa_nocap:500,aoa_fn:c=>1000,aoa_rule:"Fixed ₹1,000",aoa_sec8_fn:c=>1000,aoa_nocap_fn:c=>1000},
{name:"Madhya Pradesh",incStamp:50,incStamp_sec8:50,moa:2500,moa_sec8:2500,moa_nocap:2500,aoa_fn:c=>Math.min(Math.max(c*0.0015,5000),2500000),aoa_rule:"0.15% of authorised capital; minimum ₹5,000; maximum ₹25,00,000",aoa_sec8_fn:c=>Math.min(Math.max(c*0.0015,5000),2500000),aoa_nocap_fn:c=>5000},
{name:"Maharashtra",incStamp:100,incStamp_sec8:100,moa:200,moa_sec8:0,moa_nocap:0,aoa_fn:c=>Math.min(Math.ceil(c/500000)*1000,5000000),aoa_rule:"₹1,000 per every ₹5 Lakhs of auth. capital or part thereof; max ₹50 Lakhs",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>0},
{name:"Manipur",incStamp:10,incStamp_sec8:10,moa:100,moa_sec8:100,moa_nocap:100,aoa_fn:c=>150,aoa_rule:"Fixed ₹150",aoa_sec8_fn:c=>150,aoa_nocap_fn:c=>150},
{name:"Meghalaya",incStamp:10,incStamp_sec8:10,moa:100,moa_sec8:100,moa_nocap:100,aoa_fn:c=>300,aoa_rule:"Fixed ₹300",aoa_sec8_fn:c=>300,aoa_nocap_fn:c=>300},
{name:"Mizoram",incStamp:10,incStamp_sec8:10,moa:100,moa_sec8:100,moa_nocap:100,aoa_fn:c=>150,aoa_rule:"Fixed ₹150",aoa_sec8_fn:c=>150,aoa_nocap_fn:c=>150},
{name:"Nagaland",incStamp:10,incStamp_sec8:10,moa:100,moa_sec8:100,moa_nocap:100,aoa_fn:c=>150,aoa_rule:"Fixed ₹150",aoa_sec8_fn:c=>150,aoa_nocap_fn:c=>150},
{name:"Odisha",incStamp:10,incStamp_sec8:10,moa:300,moa_sec8:300,moa_nocap:300,aoa_fn:c=>300,aoa_rule:"Fixed ₹300 (applies to all company types)",aoa_sec8_fn:c=>300,aoa_nocap_fn:c=>300},
{name:"Puducherry",incStamp:10,incStamp_sec8:10,moa:200,moa_sec8:0,moa_nocap:200,aoa_fn:c=>300,aoa_rule:"Fixed ₹300",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>300},
{name:"Punjab",incStamp:25,incStamp_sec8:25,moa:5000,moa_sec8:0,moa_nocap:5000,aoa_fn:c=>c<=100000?5000:10000,aoa_rule:"₹5,000 if auth. capital ≤ ₹1 Lakh; ₹10,000 if auth. capital > ₹1 Lakh",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>5000},
{name:"Rajasthan",incStamp:10,incStamp_sec8:10,moa:500,moa_sec8:500,moa_nocap:500,aoa_fn:c=>c*0.005,aoa_rule:"0.5% of authorised capital (no cap for initial registration)",aoa_sec8_fn:c=>c*0.005,aoa_nocap_fn:c=>500},
{name:"Tamil Nadu",incStamp:20,incStamp_sec8:20,moa:200,moa_sec8:0,moa_nocap:200,aoa_fn:c=>300,aoa_rule:"Fixed ₹300",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>300},
{name:"Telangana",incStamp:20,incStamp_sec8:20,moa:500,moa_sec8:500,moa_nocap:500,aoa_fn:c=>Math.min(Math.max(c*0.0015,1000),500000),aoa_rule:"0.15% of authorised capital; minimum ₹1,000; maximum ₹5,00,000",aoa_sec8_fn:c=>Math.min(Math.max(c*0.0015,1000),500000),aoa_nocap_fn:c=>1000},
{name:"Tripura",incStamp:10,incStamp_sec8:10,moa:100,moa_sec8:100,moa_nocap:100,aoa_fn:c=>150,aoa_rule:"Fixed ₹150",aoa_sec8_fn:c=>150,aoa_nocap_fn:c=>150},
{name:"Uttar Pradesh",incStamp:10,incStamp_sec8:0,moa:500,moa_sec8:0,moa_nocap:500,aoa_fn:c=>500,aoa_rule:"Fixed ₹500 (applies to all incl. Sec8 with share capital)",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>500},
{name:"Uttarakhand",incStamp:10,incStamp_sec8:0,moa:500,moa_sec8:0,moa_nocap:500,aoa_fn:c=>500,aoa_rule:"Fixed ₹500 (applies to all incl. Sec8 with share capital)",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>500},
{name:"West Bengal",incStamp:10,incStamp_sec8:10,moa:60,moa_sec8:0,moa_nocap:60,aoa_fn:c=>300,aoa_rule:"Fixed ₹300",aoa_sec8_fn:c=>0,aoa_nocap_fn:c=>300},
];

// ═══ ROC REGISTRATION FEE — Companies (Registration Offices & Fees) Rules, 2014 ═══
function calcROCFee(authCap, companyType){
  if(companyType==='nocap') return 0;
  const isOPCSmall=(companyType==='opc'||companyType==='small');
  if(isOPCSmall){ if(authCap<=1000000) return 2000; const excess=Math.min(authCap,5000000)-1000000; return 2000+Math.ceil(excess/10000)*200; }
  if(authCap<=100000) return 5000;
  let fee=5000;
  if(authCap>100000){ const s1=Math.min(authCap,500000)-100000; fee+=Math.ceil(s1/10000)*400; }
  if(authCap>500000){ const s2=Math.min(authCap,5000000)-500000; fee+=Math.ceil(s2/10000)*300; }
  if(authCap>5000000){ const s3=Math.min(authCap,10000000)-5000000; fee+=Math.ceil(s3/10000)*100; }
  if(authCap>10000000){ const s4=authCap-10000000; const addlSoFar=fee-5000; const remainCap=25000000-addlSoFar; fee+=Math.min(Math.ceil(s4/10000)*75,remainCap); }
  return fee;
}
function calcSlabFilingFee(nominalCap){ if(nominalCap<100000) return 200; if(nominalCap<500000) return 300; if(nominalCap<2500000) return 400; if(nominalCap<10000000) return 500; return 600; }

// ═══ APP STATE ═══
let dscCount=2, adtReq=true, companyType='pvt';
const DSC_UNIT=1750, PROF=2999, GST_RATE=0.18;

const sel=document.getElementById('stateSelect');
sel.innerHTML='<option value="">— Select a State —</option>';
STATES.forEach(s=>{ const o=document.createElement('option'); o.value=s.name; o.textContent=s.name; sel.appendChild(o); });
sel.value='Maharashtra';
sel.addEventListener('change', calc);

function fmt(n){ if(n===null||isNaN(n)) return '—'; return '₹ '+n.toLocaleString('en-IN',{minimumFractionDigits:2,maximumFractionDigits:2}); }
function fmtShort(n){ if(n===null||isNaN(n)||n===0) return '₹0'; return '₹'+n.toLocaleString('en-IN',{maximumFractionDigits:0}); }

window.setCT=function(btn){ companyType=btn.dataset.ct; document.querySelectorAll('[data-ct]').forEach(b=>b.classList.remove('on')); btn.classList.add('on'); calc(); };
window.setADT=function(btn){ adtReq=btn.dataset.adt==='yes'; document.querySelectorAll('[data-adt]').forEach(b=>b.classList.remove('on')); btn.classList.add('on'); calc(); };
window.dsc=function(d){ dscCount=Math.max(0,Math.min(10,dscCount+d)); document.getElementById('dscLbl').textContent=dscCount; calc(); };

function getStampFees(s,authCap){
  const isSec8=companyType==='sec8', isNoCap=companyType==='nocap';
  const inc=isSec8?s.incStamp_sec8:s.incStamp;
  const moa=isNoCap?s.moa_nocap:isSec8?s.moa_sec8:s.moa;
  const aoa=isNoCap?s.aoa_nocap_fn(authCap):isSec8?s.aoa_sec8_fn(authCap):s.aoa_fn(authCap);
  return {inc,moa,aoa};
}

function calc(){
  const stateName=document.getElementById('stateSelect').value;
  const authCapRaw=parseINR(document.getElementById('authCap').value);
  const authCap=isFinite(authCapRaw)&&authCapRaw>0?authCapRaw:0;
  const s=STATES.find(x=>x.name===stateName);
  document.getElementById('dsc_lbl2').textContent=dscCount;
  const set=(id,v)=>{ const el=document.getElementById(id); if(el) el.textContent=v; };
  const dim=(id,f)=>{ const el=document.getElementById(id); if(el) el.classList.toggle('dimmed',f); };

  if(!s){ set('rs_state','Select a State'); return; }
  set('rs_state',s.name);

  const {inc,moa,aoa}=getStampFees(s,authCap);
  const runFee=1000, pantanFee=143;
  const inc20aFee=companyType!=='nocap'?calcSlabFilingFee(authCap):0;
  const adtFee=adtReq?calcSlabFilingFee(authCap):0;
  const totalGovFees=inc+moa+aoa+runFee+pantanFee+inc20aFee+adtFee;

  const dscFee=dscCount*DSC_UNIT;
  const gstOnFees=GST_RATE*(dscFee+PROF);          // GST recomputed dynamically (18% of DSC + professional fee)
  const totalSvcFees=dscFee+PROF+gstOnFees;
  const grand=totalGovFees+totalSvcFees;

  set('v_inc',inc>0?fmt(inc):'₹ NIL');
  set('v_moa',moa>0?fmt(moa):'₹ NIL');
  set('v_aoa',aoa>0?fmt(aoa):'₹ NIL');
  set('v_run',fmt(runFee));
  set('v_20a',companyType!=='nocap'?fmt(inc20aFee):'₹ NIL');
  set('v_adt',adtReq?fmt(adtFee):'₹ NIL');
  set('v_pantan',fmt(pantanFee));
  set('v_subtotal_gov',fmt(totalGovFees));
  set('v_dsc',fmt(dscFee));
  set('v_prof',fmt(PROF));
  set('v_gstonf',fmt(gstOnFees));
  set('v_subtotal_svc',fmt(totalSvcFees));

  dim('row_20a',companyType==='nocap');
  dim('row_adt',!adtReq);

  set('v_grand',fmt(grand));
  set('v_grand_note',`${s.name} · ₹${(authCap/100000).toFixed(1)}L auth cap · ${dscCount} DSC${companyType!=='nocap'?' · INC-20A':''}`);
  set('gt_reimb',fmtShort(totalGovFees));
  set('gt_svc',fmtShort(totalSvcFees));
  document.getElementById('aoaNote').style.display='block';
  document.getElementById('aoaRuleText').textContent=s.aoa_rule;
}
calc();

// ── FAQ ──
window.toggleFaq=function(btn){ btn.closest('.faq-item').classList.toggle('open'); };

// ── TOOLTIP (fixed-position) ──
function positionTooltip(btn,box){ const r=btn.getBoundingClientRect(); const w=300; let left=r.left; if(left+w>window.innerWidth-12) left=window.innerWidth-w-12; if(left<8) left=8; box.style.left=left+'px'; box.style.top=(r.bottom+8)+'px'; }
window.toggleTip=function(e,id){ e.stopPropagation(); const box=document.getElementById(id), btn=e.currentTarget; const vis=box.classList.contains('visible'); document.querySelectorAll('.tooltip-box.visible').forEach(el=>el.classList.remove('visible')); if(!vis){ positionTooltip(btn,box); box.classList.add('visible'); } };
document.querySelectorAll('.info-btn').forEach(btn=>{
  const id=btn.getAttribute('onclick').match(/'([^']+)'/)[1]; const box=document.getElementById(id);
  btn.addEventListener('mouseenter',()=>{ positionTooltip(btn,box); box.classList.add('visible'); });
  btn.addEventListener('mouseleave',()=>{ setTimeout(()=>{ if(!box.matches(':hover')) box.classList.remove('visible'); },80); });
  box.addEventListener('mouseleave',()=>box.classList.remove('visible'));
  btn.addEventListener('keydown',(ev)=>{ if(ev.key==='Enter'||ev.key===' '){ ev.preventDefault(); btn.click(); } });
});
document.addEventListener('click',()=>document.querySelectorAll('.tooltip-box.visible').forEach(el=>el.classList.remove('visible')));
window.addEventListener('scroll',()=>document.querySelectorAll('.tooltip-box.visible').forEach(el=>el.classList.remove('visible')),true);
})();
</script>
@endsection
