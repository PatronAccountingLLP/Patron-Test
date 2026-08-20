@extends('layouts.service-app')

@section('meta')
<title>Stock Audit Glossary: 70 Terms Auditors Use on Site</title>
<meta name="description" content="Plain-English definitions of the lending, counting, valuation and sector terms that appear in a stock audit report, written for the person being audited.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit">

<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/glossary.css">
<link rel="stylesheet" href="/css/faq.css">
<script src="/js/glossary.js" defer></script>

<style>
/* faq.css sets a font on the components it names and inherits for the rest - which works on
   live because the Blade layout puts Barlow on <body>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
.pa-h,.pa-h *{box-sizing:border-box}
.pa-h{font-family:'Hanken Grotesk',system-ui,-apple-system,sans-serif;position:sticky;top:0;z-index:1000;background:#fff;box-shadow:0 1px 0 rgba(21,54,95,.06);transition:transform .32s ease}
/* mobile: auto-hide on scroll down, reveal on scroll up */
@media(max-width:1120px){.pa-h.pa-h-hide{transform:translateY(-100%)}}
.pa-h-bar{position:relative;display:flex;align-items:center;gap:12px;padding:14px max(20px,calc((100% - 1280px) / 2));transition:padding .25s ease}
.pa-h.pa-scrolled .pa-h-bar{padding-top:10px;padding-bottom:10px}
.pa-h.pa-scrolled{box-shadow:0 8px 26px rgba(21,54,95,.13)}
.pa-h-logo{flex:0 0 auto;display:block}
.pa-h-logo img{height:50px;width:auto;display:block;image-rendering:auto;transition:transform .25s ease}
.pa-h.pa-scrolled .pa-h-logo img{transform:scale(.92)}
.pa-h-nav{flex:1;display:flex;justify-content:center}
.pa-h-menu{display:flex;align-items:center;gap:0;list-style:none;margin:0;padding:0}
.pa-h-tab{display:inline-flex;align-items:center;gap:5px;background:none;border:0;cursor:pointer;font-weight:600;font-size:13.5px;font-family:'Hanken Grotesk',system-ui,-apple-system,sans-serif;color:#1e3a5c;padding:9px 9px;border-radius:8px;white-space:nowrap;transition:color .15s,background .15s}
.pa-h-item:hover .pa-h-tab{color:#f26522;background:#f7f9fc}
.pa-caret{width:5px;height:5px;border-right:1.7px solid #aab6c5;border-bottom:1.7px solid #aab6c5;transform:rotate(45deg);margin-top:-3px;display:inline-block}
.pa-h-sep{width:1px;height:20px;background:#e3e9f1;margin:0 6px;list-style:none}
.pa-h-item.pa-h-more{position:relative}
.pa-h-cta{flex:0 0 auto;background:#f26522;color:#fff;font-weight:700;font-size:13.5px;font-family:'Hanken Grotesk',system-ui,-apple-system,sans-serif;padding:11px 16px;border-radius:9px;text-decoration:none;white-space:nowrap;box-shadow:0 6px 16px rgba(242,101,34,.28);transition:background .15s,transform .15s}
.pa-h-cta:hover{background:#d9531a;transform:translateY(-1px)}
.pa-h-burger{display:none;width:42px;height:42px;border-radius:10px;border:1px solid #e6ebf2;background:#f4f6fa;cursor:pointer;flex-direction:column;align-items:center;justify-content:center;gap:4px;flex:0 0 auto}
.pa-h-burger span{width:18px;height:2px;background:#15365f;border-radius:2px}
.pa-h-item{position:static}
/* standard dropdown size: one fixed width for every tab, centered under the nav */
.pa-h-panel{position:absolute;left:50%;right:auto;top:100%;transform:translateX(-50%);width:1000px;max-width:94vw;background:#fff;border:1px solid #eef1f6;border-top:3px solid #f26522;border-radius:12px;box-shadow:0 14px 36px rgba(21,54,95,.13);padding:26px 30px;display:flex;gap:34px;opacity:0;visibility:hidden;transition:opacity .16s,visibility .16s;z-index:60}
.pa-h-item:hover .pa-h-panel,.pa-h-item:focus-within .pa-h-panel{opacity:1;visibility:visible}
.pa-h-cols{flex:1;display:flex;gap:36px;flex-wrap:nowrap}
.pa-h-col{flex:1 1 0;min-width:0;display:flex;flex-direction:column}
.pa-h-colhead{font-weight:700;font-size:13.5px;color:#15365f;text-decoration:none;padding-bottom:11px;margin-bottom:13px;border-bottom:1px solid #eef1f6}
.pa-h-colhead:hover{color:#f26522}
.pa-h-link{color:#5c6b7e;font-weight:500;font-size:13.5px;text-decoration:none;padding:5px 0;transition:color .15s}
.pa-h-link:hover{color:#f26522}
.pa-h-viewall{font-weight:700;font-size:12px;letter-spacing:.04em;color:#f26522;text-decoration:none;margin-top:11px}
.pa-h-feature{flex:0 0 250px;background:#15365f;border-radius:13px;padding:24px;color:#fff;display:flex;flex-direction:column;justify-content:center}
.pa-h-feature-t{font-weight:800;font-size:17px;margin-bottom:9px}
.pa-h-feature p{font-size:13px;line-height:1.6;color:#b5c2d4;margin:0 0 18px}
.pa-h-feature-btn{align-self:flex-start;background:#f26522;color:#fff;font-weight:700;font-size:13px;padding:11px 17px;border-radius:8px;text-decoration:none}
.pa-h-panel--more{left:auto;right:0;transform:none;width:auto;min-width:208px;flex-direction:column;gap:0;padding:8px;border:1px solid #e6ebf2;border-top:3px solid #f26522;border-radius:11px}
.pa-h-morelink{color:#1e3a5c;font-weight:600;font-size:13.5px;text-decoration:none;padding:8px 12px;border-radius:8px;white-space:nowrap;transition:color .15s,background .15s}
.pa-h-morelink:hover{color:#f26522;background:#f7f9fc}
.pa-h-strip{background:#15365f;display:flex;align-items:center;gap:20px;padding:5px max(20px,calc((100% - 1280px) / 2));max-height:60px;will-change:max-height,opacity;transition:max-height .45s cubic-bezier(.22,.61,.36,1),opacity .3s ease,padding-top .45s cubic-bezier(.22,.61,.36,1),padding-bottom .45s cubic-bezier(.22,.61,.36,1)}
/* non-home pages: blue strip stays until the page's sticky section-nav reaches the bar, then collapses so that nav takes its place */
.pa-h:not(.pa-hero-search).pa-strip-down .pa-h-strip{max-height:0;opacity:0;padding-top:0;padding-bottom:0;overflow:hidden}
/* place the page's sticky section-nav (.toc-section) right under the collapsed nav bar, and offset anchor scrolling for the header+nav stack */
body .toc-section{top:70px;transition:transform .3s ease}
body .content-section[id]{scroll-margin-top:150px}
/* when the mobile header auto-hides, the page section-nav rides up to the very top (and back down when it returns) */
@media(max-width:1120px){html.pa-hh .toc-section{transform:translateY(-70px)}}
.pa-h-search{flex:1 1 auto;min-width:0;display:flex;align-items:center;gap:9px;background:rgba(255,255,255,.09);border:1px solid rgba(255,255,255,.18);border-radius:7px;padding:6px 13px}
.pa-h-searchic{color:#9fb0c6;font-size:14px}
.pa-h-search input{flex:1;border:0;background:none;outline:none;font-weight:500;font-size:13px;font-family:'Hanken Grotesk',system-ui,-apple-system,sans-serif;color:#fff}
.pa-h-search input::placeholder{color:#9fb0c6}
/* rotating placeholder: cross-fade between phrases (replaces the old per-character typewriter) */
.pa-ph-rot::placeholder{transition:opacity .26s ease;opacity:1}
.pa-ph-rot.pa-ph-fade::placeholder{opacity:0}
.pa-h-search,.pa-h-msearch{position:relative}
.pa-h-sresults{display:none;position:absolute;left:0;right:0;top:calc(100% + 8px);background:#fff;border:1px solid #e6ebf2;border-radius:10px;box-shadow:0 18px 40px rgba(21,54,95,.18);padding:6px;max-height:380px;overflow:auto;z-index:1200;text-align:left}
.pa-h-sresults.show{display:block}
.pa-h-sitem{display:flex;align-items:center;gap:8px;width:100%;background:none;border:0;cursor:pointer;text-align:left;font-family:inherit;padding:9px 12px;border-radius:8px;color:#1e3a5c;font-size:13.5px;font-weight:600;text-decoration:none}
.pa-h-sitem:hover{background:#f7f9fc;color:#f26522}
.pa-h-shist{color:#5c6b7e;font-weight:500}
.pa-h-shicon{color:#aab6c5;font-size:13px}
.pa-h-shead{display:flex;align-items:center;justify-content:space-between;padding:6px 12px 4px;font-size:11px;font-weight:700;letter-spacing:.05em;text-transform:uppercase;color:#9aa6b5}
.pa-h-sclear{background:none;border:0;cursor:pointer;font-family:inherit;font-size:11px;font-weight:700;color:#f26522;text-transform:none;letter-spacing:0}
.pa-h-sempty{padding:12px;color:#8a97a8;font-size:13px}
/* home page: header search is hidden at top (hero search is the only one) and animates in on scroll */
.pa-h.pa-hero-search .pa-h-search{opacity:0;transform:translateY(-10px);pointer-events:none;transition:opacity .35s ease,transform .4s cubic-bezier(.22,.61,.36,1)}
.pa-h.pa-hero-search.pa-show-search .pa-h-search{opacity:1;transform:none;pointer-events:auto}
.pa-h-strip-right{display:flex;align-items:center;gap:13px;white-space:nowrap;flex:0 0 auto}
.pa-h-cities{display:flex;align-items:center;gap:8px}
.pa-h-city{color:#e7eef7;font-weight:600;font-size:12px;text-decoration:none}
.pa-h-city:hover{color:#ffb15a}
.pa-dot{color:#3f5a7d}
.pa-h-vline{width:1px;height:16px;background:rgba(255,255,255,.18)}
.pa-h-google{display:inline-flex;align-items:center;gap:7px;background:#fff;border-radius:7px;padding:4px 11px;text-decoration:none}
.pa-goog{font-weight:800;font-size:12px;color:#4285F4}
.pa-stars{color:#f5a623;font-size:11px;letter-spacing:.5px}
.pa-rate{font-weight:800;font-size:12px;color:#15365f}
.pa-h-mobile{display:none;padding:14px 18px 24px;border-top:1px solid #eef1f6}
.pa-h-msearch{display:flex;align-items:center;gap:9px;background:#f4f6fa;border:1px solid #e6ebf2;border-radius:10px;padding:12px 14px;margin-bottom:10px}
.pa-h-msearch span{color:#9aa6b5}
.pa-h-msearch input{flex:1;border:0;background:none;outline:none;font-weight:500;font-size:14px;font-family:'Hanken Grotesk',system-ui,-apple-system,sans-serif;color:#15365f}
.pa-m-acc{border-bottom:1px solid #f0f3f7}
.pa-m-accbtn{width:100%;display:flex;align-items:center;justify-content:space-between;background:none;border:0;cursor:pointer;padding:15px 4px;font-weight:700;font-size:15px;font-family:'Hanken Grotesk',system-ui,-apple-system,sans-serif;color:#15365f;text-align:left}
.pa-m-sign{font-size:16px;color:#f26522;width:16px;text-align:center}
.pa-m-accbody{display:none;padding:0 4px 14px;grid-template-columns:1fr 1fr;gap:6px 16px;align-items:start}
.pa-m-acc.pa-open .pa-m-accbody{display:grid}
.pa-m-colgroup{margin-bottom:14px;min-width:0}
.pa-m-colhead{display:block;font-weight:700;font-size:12px;letter-spacing:.06em;text-transform:uppercase;color:#f26522;text-decoration:none;margin-bottom:9px}
.pa-m-link{display:block;color:#5c6b7e;font-weight:500;font-size:14px;text-decoration:none;padding:6px 0}
.pa-m-morelink{display:flex;align-items:center;justify-content:space-between;color:#5c6b7e;font-weight:600;font-size:14px;text-decoration:none;padding:11px 0}
.pa-m-cta{display:flex;align-items:center;justify-content:center;width:100%;margin-top:18px;text-align:center}
.pa-m-phone{display:block;text-align:center;margin-top:14px;font-weight:700;font-size:13px;color:#15365f;text-decoration:none}
@media(max-width:1120px){
 .pa-h-nav,.pa-h-cta:not(.pa-m-cta),.pa-h-strip{display:none}
 .pa-h-burger{display:flex}
 .pa-h-bar{justify-content:space-between}
 .pa-h.pa-mopen .pa-h-mobile{display:block}
}
</style>
<header class="pa-h" id="paHeader">
  <div class="pa-h-bar">
    <a class="pa-h-logo" href="/" aria-label="Patron Accounting — Home"><img src="/images/patron-logo.webp" onerror="this.onerror=null;this.src='/images/site-logo.svg'" alt="Patron Accounting LLP — Chartered Accountants"></a>
    <nav class="pa-h-nav" aria-label="Primary">
      <ul class="pa-h-menu">
      <li class="pa-h-item">
        <button class="pa-h-tab" type="button">Registrations<i class="pa-caret"></i></button>
        <div class="pa-h-panel">
          <div class="pa-h-cols">
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/private-limited-company-registration">Incorporation</a>
          <a class="pa-h-link" href="/private-limited-company-registration">Private Limited Company</a><a class="pa-h-link" href="/llp-incorporation">LLP Registration</a><a class="pa-h-link" href="/one-person-company-registration">One Person Company</a><a class="pa-h-link" href="/section8-company-registration">Section 8 Company</a><a class="pa-h-link" href="/ngo-registration">NGO Registration</a><a class="pa-h-link" href="/nidhi-company-registration">Nidhi Company</a><a class="pa-h-link" href="/producer-company-registration">Producer Company</a><a class="pa-h-link" href="/startup-registration">Startup India Registration</a>
          <a class="pa-h-viewall" href="/business-registration-services">View all →</a>
        </div>
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/change-in-registered-office">Changes &amp; Closure</a>
          <a class="pa-h-link" href="/appointment-of-director">Appointment of Director</a><a class="pa-h-link" href="/removal-of-director">Removal of Director</a><a class="pa-h-link" href="/change-in-registered-office">Change Registered Office</a><a class="pa-h-link" href="/change-in-authorised-capital">Increase Authorised Capital</a><a class="pa-h-link" href="/convert-partnership-to-llp">Convert Partnership to LLP</a><a class="pa-h-link" href="/convert-llp-to-private-limited-company">Convert LLP to Private Limited Company</a><a class="pa-h-link" href="/convert-partnership-to-pvt-ltd-company">Convert Partnership to Private Limited</a><a class="pa-h-link" href="/company-closure">Company Closure</a>
          <a class="pa-h-viewall" href="/change-in-registered-office">View all →</a>
        </div></div>
          <div class="pa-h-feature">
            <div class="pa-h-feature-t">Registrations — not sure where to start?</div>
            <p>Pick the right structure - Pvt Ltd, LLP, OPC or Section 8 - with expert CA guidance.</p>
            <a class="pa-h-feature-btn" href="/contact-us">Talk to an Expert →</a>
          </div>
        </div>
      </li>
      <li class="pa-h-item">
        <button class="pa-h-tab" type="button">Tax &amp; GST<i class="pa-caret"></i></button>
        <div class="pa-h-panel">
          <div class="pa-h-cols">
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/gst-registration">GST Services</a>
          <a class="pa-h-link" href="/gst-registration">GST Registration</a><a class="pa-h-link" href="/gst-returns">GST Returns</a><a class="pa-h-link" href="/gst-audit">GST Audit</a><a class="pa-h-link" href="/gst-refund-exports-lut">GST Refund — Exports (LUT)</a><a class="pa-h-link" href="/gst-refund-inverted-duty-structure">Inverted Duty Refund</a><a class="pa-h-link" href="/gst-notice">GST Notice</a>
          <a class="pa-h-viewall" href="/gst-registration">View all →</a>
        </div>
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/income-tax-return">Income Tax</a>
          <a class="pa-h-link" href="/income-tax-return">Income Tax Return Filing</a><a class="pa-h-link" href="/itr-for-business">ITR for Business</a><a class="pa-h-link" href="/itr-for-nris">ITR for NRIs</a><a class="pa-h-link" href="/itr-for-capital-gains">ITR for Capital Gains</a><a class="pa-h-link" href="/tax-planning-services">Tax Planning</a><a class="pa-h-link" href="/tds-return">TDS Return Filing</a><a class="pa-h-link" href="/income-tax-notice">Income Tax Notice</a>
          <a class="pa-h-viewall" href="/itr-services">View all →</a>
        </div>
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/pan-registration">Tax Registrations</a>
          <a class="pa-h-link" href="/pan-registration">PAN Registration</a><a class="pa-h-link" href="/tan-registration">TAN Registration</a><a class="pa-h-link" href="/udyam-registration">Udyam / MSME Registration</a><a class="pa-h-link" href="/iec-registration">Import Export Code (IEC)</a><a class="pa-h-link" href="/12a-registration">12A Registration</a><a class="pa-h-link" href="/80g-registration">80G Registration</a>
          <a class="pa-h-viewall" href="/pan-registration">View all →</a>
        </div></div>
          <div class="pa-h-feature">
            <div class="pa-h-feature-t">Tax &amp; GST — not sure where to start?</div>
            <p>GST registration, returns and income-tax filing handled by experienced CAs.</p>
            <a class="pa-h-feature-btn" href="/contact-us">Talk to an Expert →</a>
          </div>
        </div>
      </li>
      <li class="pa-h-item">
        <button class="pa-h-tab" type="button">GSTAT &amp; Audit<i class="pa-caret"></i></button>
        <div class="pa-h-panel">
          <div class="pa-h-cols">
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/gstat-appeal-filing">GSTAT India</a>
          <a class="pa-h-link" href="/gstat-appeal-filing">GSTAT Appeal Filing</a><a class="pa-h-link" href="/gstat-principal-bench-representation">Principal Bench Representation</a><a class="pa-h-link" href="/gstat-state-bench-representation">State Bench Representation</a>
          <a class="pa-h-viewall" href="/gstat-appeal-filing">View all →</a>
        </div>
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/statutory-audit">Audit &amp; Assurance</a>
          <a class="pa-h-link" href="/statutory-audit">Statutory Audit</a><a class="pa-h-link" href="/tax-audit">Tax Audit</a><a class="pa-h-link" href="/internal-audit">Internal Audit</a><a class="pa-h-link" href="/secretarial-audit">Secretarial Audit</a><a class="pa-h-link" href="/stock-audit">Stock Audit</a>
          <a class="pa-h-viewall" href="/statutory-audit">View all →</a>
        </div></div>
          <div class="pa-h-feature">
            <div class="pa-h-feature-t">GSTAT &amp; Audit — not sure where to start?</div>
            <p>Expert GST appeal representation plus statutory, tax and internal audits.</p>
            <a class="pa-h-feature-btn" href="/contact-us">Talk to an Expert →</a>
          </div>
        </div>
      </li>
      <li class="pa-h-item">
        <button class="pa-h-tab" type="button">Licenses &amp; IP<i class="pa-caret"></i></button>
        <div class="pa-h-panel">
          <div class="pa-h-cols">
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/fssai-registration">Licenses</a>
          <a class="pa-h-link" href="/fssai-registration">FSSAI Registration</a><a class="pa-h-link" href="/fssai-state-license">FSSAI State License</a><a class="pa-h-link" href="/fssai-central-license">FSSAI Central License</a><a class="pa-h-link" href="/iec-registration">Import Export Code (IEC)</a><a class="pa-h-link" href="/shop-act-registration">Shop Act Registration</a><a class="pa-h-link" href="/iso-registration-certification-services">ISO Certification</a><a class="pa-h-link" href="/dsc-registration">Digital Signature (DSC)</a>
          <a class="pa-h-viewall" href="/fssai-registration">View all →</a>
        </div>
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/trademark-registration">Trademark &amp; IP</a>
          <a class="pa-h-link" href="/trademark-registration">Trademark Registration</a><a class="pa-h-link" href="/trademark-search-report">Trademark Search Report</a><a class="pa-h-link" href="/trademark-opposition">Trademark Opposition</a><a class="pa-h-link" href="/trademark-renewal">Trademark Renewal</a><a class="pa-h-link" href="/copyright-registration">Copyright Registration</a><a class="pa-h-link" href="/logo-copyright-registration">Logo Copyright</a>
          <a class="pa-h-viewall" href="/trademark-registration">View all →</a>
        </div></div>
          <div class="pa-h-feature">
            <div class="pa-h-feature-t">Licenses &amp; IP — not sure where to start?</div>
            <p>FSSAI, trademark, ISO and other licenses secured end-to-end by our experts.</p>
            <a class="pa-h-feature-btn" href="/contact-us">Talk to an Expert →</a>
          </div>
        </div>
      </li>
      <li class="pa-h-item">
        <button class="pa-h-tab" type="button">Accounting &amp; Payroll<i class="pa-caret"></i></button>
        <div class="pa-h-panel">
          <div class="pa-h-cols">
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/accounting-bookkeeping-services">Accounting</a>
          <a class="pa-h-link" href="/accounting-services">Accounting Services</a><a class="pa-h-link" href="/zoho-books-accounting">Zoho Books Accounting</a><a class="pa-h-link" href="/xero-accounting">Xero Accounting</a><a class="pa-h-link" href="/tally-accounting">Tally Accounting</a><a class="pa-h-link" href="/migration-from-tally-to-zoho">Tally to Zoho Migration</a>
          <a class="pa-h-viewall" href="/accounting-bookkeeping-services">View all →</a>
        </div>
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/payroll-services">Payroll, EOR &amp; ESOP</a>
          <a class="pa-h-link" href="/payroll-services">Payroll Services</a><a class="pa-h-link" href="/payroll-processing-and-management-services">Payroll Processing</a><a class="pa-h-link" href="/eor-india">EOR India</a><a class="pa-h-link" href="/pf-registration">PF Registration</a><a class="pa-h-link" href="/esic-registration">ESIC Registration</a><a class="pa-h-link" href="/gratuity-calculation-and-compliance-services">Gratuity Compliance</a><a class="pa-h-link" href="/esop-management-and-compliance-services">ESOP Management</a>
          <a class="pa-h-viewall" href="/payroll-services">View all →</a>
        </div></div>
          <div class="pa-h-feature">
            <div class="pa-h-feature-t">Accounting &amp; Payroll — not sure where to start?</div>
            <p>Hand off your bookkeeping and payroll to a dedicated team on Zoho Books.</p>
            <a class="pa-h-feature-btn" href="/contact-us">Talk to an Expert →</a>
          </div>
        </div>
      </li>
      <li class="pa-h-item">
        <button class="pa-h-tab" type="button">Compliance<i class="pa-caret"></i></button>
        <div class="pa-h-panel">
          <div class="pa-h-cols">
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/private-limited-company-compliance">Corporate Compliance</a>
          <a class="pa-h-link" href="/private-limited-company-compliance">Pvt Ltd Compliance</a><a class="pa-h-link" href="/pvt-llp-compliance">LLP Compliance</a><a class="pa-h-link" href="/aoc-4-filing-services">Annual ROC Filing (AOC-4)</a><a class="pa-h-link" href="/mgt-7-filing-services">MGT-7 Filing</a><a class="pa-h-link" href="/director-kyc">Director KYC</a><a class="pa-h-link" href="/dpt-3-filing-services">DPT-3 Filing</a><a class="pa-h-link" href="/adt-1-filing-services">ADT-1 Filing</a>
          <a class="pa-h-viewall" href="/private-limited-company-compliance">View all →</a>
        </div>
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/net-worth-certificate-by-ca">Certificates</a>
          <a class="pa-h-link" href="/net-worth-certificate">Net Worth Certificate</a><a class="pa-h-link" href="/net-worth-certificate-for-visa">Net Worth for Visa</a><a class="pa-h-link" href="/turnover-certificate-for-tender">Turnover Certificate (Tender)</a><a class="pa-h-link" href="/turnover-certificate-for-current-account">Turnover (Current A/c)</a>
          <a class="pa-h-viewall" href="/net-worth-certificate-by-ca">View all →</a>
        </div>
        <div class="pa-h-col">
          <a class="pa-h-colhead" href="/fdi-compliance">International &amp; FEMA</a>
          <a class="pa-h-link" href="/fdi-compliance">FDI Compliance</a><a class="pa-h-link" href="/fla-returns">FLA Returns</a><a class="pa-h-link" href="/us-bank-account-opening">US Bank Account Opening</a>
          <a class="pa-h-viewall" href="/fdi-compliance">View all →</a>
        </div></div>
          <div class="pa-h-feature">
            <div class="pa-h-feature-t">Compliance — not sure where to start?</div>
            <p>Stay ROC, FEMA and annual-compliance ready with proactive expert support.</p>
            <a class="pa-h-feature-btn" href="/contact-us">Talk to an Expert →</a>
          </div>
        </div>
      </li>
        <li class="pa-h-sep"></li>
        <li class="pa-h-item pa-h-more">
          <button class="pa-h-tab" type="button">More<i class="pa-caret"></i></button>
          <div class="pa-h-panel pa-h-panel--more"><a class="pa-h-morelink" href="/about-us">About Us</a><a class="pa-h-morelink" href="/meet-our-founder">Meet Our Founder</a><a class="pa-h-morelink" href="/career">Career</a><a class="pa-h-morelink" href="/refer-and-earn">Refer &amp; Earn</a><a class="pa-h-morelink" href="/partner-with-us">Partner With Us</a><a class="pa-h-morelink" href="/tools">Free Tools &amp; Calculators</a><a class="pa-h-morelink" href="/blog">Blogs</a><a class="pa-h-morelink" href="/compliance-calendar">Compliance Calendar</a><a class="pa-h-morelink" href="/contact-us">Contact Us</a></div>
        </li>
      </ul>
    </nav>
    <a class="pa-h-cta" href="/contact-us">Talk to an Expert</a>
    <button class="pa-h-burger" id="paBurger" type="button" aria-label="Menu" aria-expanded="false"><span></span><span></span><span></span></button>
  </div>
  <div class="pa-h-strip">
    <form class="pa-h-search" role="search" data-pa-searchform>
      <span class="pa-h-searchic">⌕</span>
      <input name="q" data-pa-q autocomplete="off" placeholder="Search services — GST, ITR, registration…" aria-label="Search services">
      <div class="pa-h-sresults" data-pa-results></div>
    </form>
    <div class="pa-h-strip-right">
      <div class="pa-h-cities"><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+RTC+Silver+Sai+Satyam+Park+Wagholi+Pune+412207" target="_blank" rel="noopener" class="pa-h-city">Pune</a><span class="pa-dot">·</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+Rajshila+Building+597+JSS+Road+Marine+Lines+Mumbai+400002" target="_blank" rel="noopener" class="pa-h-city">Mumbai</a><span class="pa-dot">·</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+B-6+154-155+Sector+5+Rohini+Delhi+110085" target="_blank" rel="noopener" class="pa-h-city">Delhi</a><span class="pa-dot">·</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+Pioneer+Urban+Square+B109+Golf+Course+Ext+Road+Sector+62+Gurugram+122098" target="_blank" rel="noopener" class="pa-h-city">Gurugram</a><span class="pa-dot">·</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+Phoenix+Tower+1107+Commerce+Six+Road+Drive+In+Road+Navrangpura+Ahmedabad+380009" target="_blank" rel="noopener" class="pa-h-city">Ahmedabad</a></div>
      <span class="pa-h-vline"></span>
      <a class="pa-h-google" href="https://www.google.com/search?q=Patron+Accounting+LLP+reviews" target="_blank" rel="noopener"><span class="pa-goog">G<span style="color:#EA4335">o</span><span style="color:#FBBC05">o</span><span style="color:#4285F4">g</span><span style="color:#34A853">l</span><span style="color:#EA4335">e</span></span><span class="pa-stars">★★★★★</span><span class="pa-rate">4.9</span></a>
    </div>
  </div>

  <div class="pa-h-mobile" id="paMobile">
    <form class="pa-h-msearch" role="search" data-pa-searchform><span>⌕</span><input name="q" data-pa-q autocomplete="off" placeholder="Search services…" aria-label="Search services"><div class="pa-h-sresults" data-pa-results></div></form>
    <div class="pa-m-acc">
      <button class="pa-m-accbtn" type="button">Registrations<span class="pa-m-sign">+</span></button>
      <div class="pa-m-accbody">
        <div class="pa-m-colgroup"><a class="pa-m-colhead" href="/private-limited-company-registration">Incorporation ›</a><a class="pa-m-link" href="/private-limited-company-registration">Private Limited Company</a><a class="pa-m-link" href="/llp-incorporation">LLP Registration</a><a class="pa-m-link" href="/one-person-company-registration">One Person Company</a><a class="pa-m-link" href="/section8-company-registration">Section 8 Company</a><a class="pa-m-link" href="/ngo-registration">NGO Registration</a><a class="pa-m-link" href="/nidhi-company-registration">Nidhi Company</a><a class="pa-m-link" href="/producer-company-registration">Producer Company</a><a class="pa-m-link" href="/startup-registration">Startup India Registration</a></div><div class="pa-m-colgroup"><a class="pa-m-colhead" href="/change-in-registered-office">Changes &amp; Closure ›</a><a class="pa-m-link" href="/appointment-of-director">Appointment of Director</a><a class="pa-m-link" href="/removal-of-director">Removal of Director</a><a class="pa-m-link" href="/change-in-registered-office">Change Registered Office</a><a class="pa-m-link" href="/change-in-authorised-capital">Increase Authorised Capital</a><a class="pa-m-link" href="/convert-partnership-to-llp">Convert Partnership to LLP</a><a class="pa-m-link" href="/convert-llp-to-private-limited-company">Convert LLP to Private Limited Company</a><a class="pa-m-link" href="/convert-partnership-to-pvt-ltd-company">Convert Partnership to Private Limited</a><a class="pa-m-link" href="/company-closure">Company Closure</a></div>
      </div>
    </div>
    <div class="pa-m-acc">
      <button class="pa-m-accbtn" type="button">Tax &amp; GST<span class="pa-m-sign">+</span></button>
      <div class="pa-m-accbody">
        <div class="pa-m-colgroup"><a class="pa-m-colhead" href="/gst-registration">GST Services ›</a><a class="pa-m-link" href="/gst-registration">GST Registration</a><a class="pa-m-link" href="/gst-returns">GST Returns</a><a class="pa-m-link" href="/gst-audit">GST Audit</a><a class="pa-m-link" href="/gst-refund-exports-lut">GST Refund — Exports (LUT)</a><a class="pa-m-link" href="/gst-refund-inverted-duty-structure">Inverted Duty Refund</a><a class="pa-m-link" href="/gst-notice">GST Notice</a></div><div class="pa-m-colgroup"><a class="pa-m-colhead" href="/income-tax-return">Income Tax ›</a><a class="pa-m-link" href="/income-tax-return">Income Tax Return Filing</a><a class="pa-m-link" href="/itr-for-business">ITR for Business</a><a class="pa-m-link" href="/itr-for-nris">ITR for NRIs</a><a class="pa-m-link" href="/itr-for-capital-gains">ITR for Capital Gains</a><a class="pa-m-link" href="/tax-planning-services">Tax Planning</a><a class="pa-m-link" href="/tds-return">TDS Return Filing</a><a class="pa-m-link" href="/income-tax-notice">Income Tax Notice</a></div><div class="pa-m-colgroup"><a class="pa-m-colhead" href="/pan-registration">Tax Registrations ›</a><a class="pa-m-link" href="/pan-registration">PAN Registration</a><a class="pa-m-link" href="/tan-registration">TAN Registration</a><a class="pa-m-link" href="/udyam-registration">Udyam / MSME Registration</a><a class="pa-m-link" href="/iec-registration">Import Export Code (IEC)</a><a class="pa-m-link" href="/12a-registration">12A Registration</a><a class="pa-m-link" href="/80g-registration">80G Registration</a></div>
      </div>
    </div>
    <div class="pa-m-acc">
      <button class="pa-m-accbtn" type="button">GSTAT &amp; Audit<span class="pa-m-sign">+</span></button>
      <div class="pa-m-accbody">
        <div class="pa-m-colgroup"><a class="pa-m-colhead" href="/gstat-appeal-filing">GSTAT India ›</a><a class="pa-m-link" href="/gstat-appeal-filing">GSTAT Appeal Filing</a><a class="pa-m-link" href="/gstat-principal-bench-representation">Principal Bench Representation</a><a class="pa-m-link" href="/gstat-state-bench-representation">State Bench Representation</a></div><div class="pa-m-colgroup"><a class="pa-m-colhead" href="/statutory-audit">Audit &amp; Assurance ›</a><a class="pa-m-link" href="/statutory-audit">Statutory Audit</a><a class="pa-m-link" href="/tax-audit">Tax Audit</a><a class="pa-m-link" href="/internal-audit">Internal Audit</a><a class="pa-m-link" href="/secretarial-audit">Secretarial Audit</a><a class="pa-m-link" href="/stock-audit">Stock Audit</a></div>
      </div>
    </div>
    <div class="pa-m-acc">
      <button class="pa-m-accbtn" type="button">Licenses &amp; IP<span class="pa-m-sign">+</span></button>
      <div class="pa-m-accbody">
        <div class="pa-m-colgroup"><a class="pa-m-colhead" href="/fssai-registration">Licenses ›</a><a class="pa-m-link" href="/fssai-registration">FSSAI Registration</a><a class="pa-m-link" href="/fssai-state-license">FSSAI State License</a><a class="pa-m-link" href="/fssai-central-license">FSSAI Central License</a><a class="pa-m-link" href="/iec-registration">Import Export Code (IEC)</a><a class="pa-m-link" href="/shop-act-registration">Shop Act Registration</a><a class="pa-m-link" href="/iso-registration-certification-services">ISO Certification</a><a class="pa-m-link" href="/dsc-registration">Digital Signature (DSC)</a></div><div class="pa-m-colgroup"><a class="pa-m-colhead" href="/trademark-registration">Trademark &amp; IP ›</a><a class="pa-m-link" href="/trademark-registration">Trademark Registration</a><a class="pa-m-link" href="/trademark-search-report">Trademark Search Report</a><a class="pa-m-link" href="/trademark-opposition">Trademark Opposition</a><a class="pa-m-link" href="/trademark-renewal">Trademark Renewal</a><a class="pa-m-link" href="/copyright-registration">Copyright Registration</a><a class="pa-m-link" href="/logo-copyright-registration">Logo Copyright</a></div>
      </div>
    </div>
    <div class="pa-m-acc">
      <button class="pa-m-accbtn" type="button">Accounting &amp; Payroll<span class="pa-m-sign">+</span></button>
      <div class="pa-m-accbody">
        <div class="pa-m-colgroup"><a class="pa-m-colhead" href="/accounting-bookkeeping-services">Accounting ›</a><a class="pa-m-link" href="/accounting-services">Accounting Services</a><a class="pa-m-link" href="/zoho-books-accounting">Zoho Books Accounting</a><a class="pa-m-link" href="/xero-accounting">Xero Accounting</a><a class="pa-m-link" href="/tally-accounting">Tally Accounting</a><a class="pa-m-link" href="/migration-from-tally-to-zoho">Tally to Zoho Migration</a></div><div class="pa-m-colgroup"><a class="pa-m-colhead" href="/payroll-services">Payroll, EOR &amp; ESOP ›</a><a class="pa-m-link" href="/payroll-services">Payroll Services</a><a class="pa-m-link" href="/payroll-processing-and-management-services">Payroll Processing</a><a class="pa-m-link" href="/eor-india">EOR India</a><a class="pa-m-link" href="/pf-registration">PF Registration</a><a class="pa-m-link" href="/esic-registration">ESIC Registration</a><a class="pa-m-link" href="/gratuity-calculation-and-compliance-services">Gratuity Compliance</a><a class="pa-m-link" href="/esop-management-and-compliance-services">ESOP Management</a></div>
      </div>
    </div>
    <div class="pa-m-acc">
      <button class="pa-m-accbtn" type="button">Compliance<span class="pa-m-sign">+</span></button>
      <div class="pa-m-accbody">
        <div class="pa-m-colgroup"><a class="pa-m-colhead" href="/private-limited-company-compliance">Corporate Compliance ›</a><a class="pa-m-link" href="/private-limited-company-compliance">Pvt Ltd Compliance</a><a class="pa-m-link" href="/pvt-llp-compliance">LLP Compliance</a><a class="pa-m-link" href="/aoc-4-filing-services">Annual ROC Filing (AOC-4)</a><a class="pa-m-link" href="/mgt-7-filing-services">MGT-7 Filing</a><a class="pa-m-link" href="/director-kyc">Director KYC</a><a class="pa-m-link" href="/dpt-3-filing-services">DPT-3 Filing</a><a class="pa-m-link" href="/adt-1-filing-services">ADT-1 Filing</a></div><div class="pa-m-colgroup"><a class="pa-m-colhead" href="/net-worth-certificate-by-ca">Certificates ›</a><a class="pa-m-link" href="/net-worth-certificate">Net Worth Certificate</a><a class="pa-m-link" href="/net-worth-certificate-for-visa">Net Worth for Visa</a><a class="pa-m-link" href="/turnover-certificate-for-tender">Turnover Certificate (Tender)</a><a class="pa-m-link" href="/turnover-certificate-for-current-account">Turnover (Current A/c)</a></div><div class="pa-m-colgroup"><a class="pa-m-colhead" href="/fdi-compliance">International &amp; FEMA ›</a><a class="pa-m-link" href="/fdi-compliance">FDI Compliance</a><a class="pa-m-link" href="/fla-returns">FLA Returns</a><a class="pa-m-link" href="/us-bank-account-opening">US Bank Account Opening</a></div>
      </div>
    </div>
    <div class="pa-m-acc">
      <button class="pa-m-accbtn" type="button">More<span class="pa-m-sign">+</span></button>
      <div class="pa-m-accbody pa-m-morebody">
        <a class="pa-m-morelink" href="/about-us">About Us ›</a><a class="pa-m-morelink" href="/meet-our-founder">Meet Our Founder ›</a><a class="pa-m-morelink" href="/career">Career ›</a><a class="pa-m-morelink" href="/refer-and-earn">Refer &amp; Earn ›</a><a class="pa-m-morelink" href="/partner-with-us">Partner With Us ›</a><a class="pa-m-morelink" href="/tools">Free Tools &amp; Calculators ›</a><a class="pa-m-morelink" href="/blog">Blogs ›</a><a class="pa-m-morelink" href="/compliance-calendar">Compliance Calendar ›</a><a class="pa-m-morelink" href="/contact-us">Contact Us ›</a>
      </div>
    </div>
    <a class="pa-h-cta pa-m-cta" href="/contact-us">Talk to an Expert</a>
    <a class="pa-m-phone" href="tel:+919459456700">✆ +91 945 945 6700</a>
  </div>
</header>
<script>(function(){var h=document.getElementById('paHeader');if(!h)return;
/* header search: copies the homepage hero search (static /search-index.json) + per-user recent-search history */
var PA_HKEY='paSearchHistory';
function paGetHist(){try{return JSON.parse(localStorage.getItem(PA_HKEY)||'[]');}catch(e){return[];}}
function paSaveHist(q){q=(q||'').trim();if(!q)return;var a=paGetHist().filter(function(x){return x.toLowerCase()!==q.toLowerCase();});a.unshift(q);try{localStorage.setItem(PA_HKEY,JSON.stringify(a.slice(0,6)));}catch(e){}}
function paEsc(s){var d=document.createElement('div');d.textContent=s==null?'':s;return d.innerHTML;}
var PA_IDX=null,PA_IDXP=null;
function paLoadIdx(){if(PA_IDX)return Promise.resolve(PA_IDX);if(PA_IDXP)return PA_IDXP;PA_IDXP=fetch('/search-index.json',{headers:{'Accept':'application/json'}}).then(function(r){return r.json();}).then(function(d){PA_IDX=(d&&d.length)?d:[];return PA_IDX;}).catch(function(){PA_IDX=[];return PA_IDX;});return PA_IDXP;}
function paFilter(q){q=q.toLowerCase();var out=[];for(var i=0;i<PA_IDX.length;i++){var t=PA_IDX[i].t.toLowerCase(),pos=t.indexOf(q);if(pos<0)continue;var sc=(pos===0)?0:(t.indexOf(' '+q)>=0?1:2);out.push({e:PA_IDX[i],s:sc,p:pos});}out.sort(function(a,b){return a.s-b.s||a.p-b.p||a.e.t.length-b.e.t.length;});return out.slice(0,8).map(function(x){return x.e;});}
h.querySelectorAll('[data-pa-searchform]').forEach(function(form){var input=form.querySelector('[data-pa-q]');var box=form.querySelector('[data-pa-results]');if(!input||!box)return;var t;
function hist(){var a=paGetHist();if(!a.length){box.classList.remove('show');box.innerHTML='';return;}var html='<div class="pa-h-shead">Recent searches<button type="button" class="pa-h-sclear" data-pa-clear>Clear</button></div>';a.forEach(function(q){html+='<button type="button" class="pa-h-sitem pa-h-shist" data-pa-h="'+paEsc(q)+'"><span class="pa-h-shicon">↺</span>'+paEsc(q)+'</button>';});box.innerHTML=html;box.classList.add('show');}
function res(items){if(!items||!items.length){box.innerHTML='<div class="pa-h-sempty">No results found</div>';box.classList.add('show');return;}var html='';items.forEach(function(p){var u=p.u||'#';if(u!=='#'&&!/^https?:\/\//.test(u)&&u.charAt(0)!=='/')u='/'+u;html+='<a class="pa-h-sitem" href="'+paEsc(u)+'" data-pa-pick="'+paEsc(p.t)+'">'+paEsc(p.t)+'</a>';});box.innerHTML=html;box.classList.add('show');}
function run(q){paLoadIdx().then(function(){res(paFilter(q));});}
input.addEventListener('input',function(){var q=input.value.trim();clearTimeout(t);if(!q){hist();return;}t=setTimeout(function(){run(q);},300);});
input.addEventListener('focus',function(){if(!input.value.trim()){hist();}else if(box.innerHTML){box.classList.add('show');}});
form.addEventListener('submit',function(e){e.preventDefault();var q=input.value.trim();if(!q)return;paSaveHist(q);var f=box.querySelector('a.pa-h-sitem');if(f){window.location.href=f.getAttribute('href');}else{run(q);}});
box.addEventListener('click',function(e){var c=e.target.closest('[data-pa-clear]');if(c){try{localStorage.removeItem(PA_HKEY);}catch(e2){}box.innerHTML='';box.classList.remove('show');input.focus();return;}var hi=e.target.closest('[data-pa-h]');if(hi){var hv=hi.getAttribute('data-pa-h');input.value=hv;run(hv);input.focus();return;}var pk=e.target.closest('[data-pa-pick]');if(pk){paSaveHist(pk.getAttribute('data-pa-pick'));}});
document.addEventListener('click',function(e){if(!form.contains(e.target))box.classList.remove('show');});
(function(inp){var phr=['GST Registration','Income Tax Return','Private Limited Company','Trademark Registration','Payroll Services','TDS Return Filing','Accounting Services','Startup Registration'];var i=0,paused=false;inp.classList.add('pa-ph-rot');inp.addEventListener('focus',function(){paused=true;inp.placeholder='Type to start search';});inp.addEventListener('blur',function(){if(!inp.value)paused=false;});function rot(){if(!paused&&!inp.value){inp.classList.add('pa-ph-fade');setTimeout(function(){inp.placeholder='Search '+phr[i];i=(i+1)%phr.length;inp.classList.remove('pa-ph-fade');},260);}setTimeout(rot,3000);}inp.placeholder='Search '+phr[0];i=1;setTimeout(rot,3000);})(input);});
var burger=document.getElementById('paBurger');if(burger){burger.addEventListener('click',function(){var o=h.classList.toggle('pa-mopen');burger.setAttribute('aria-expanded',o?'true':'false');});}h.querySelectorAll('.pa-m-accbtn').forEach(function(b){b.addEventListener('click',function(){var acc=b.parentElement,open=acc.classList.toggle('pa-open');var s=b.querySelector('.pa-m-sign');if(s)s.textContent=open?'\u2212':'+';});});h.querySelectorAll('.pa-h-tab').forEach(function(t){t.addEventListener('mousedown',function(e){e.preventDefault();});});h.querySelectorAll('.pa-h-nav .pa-h-item').forEach(function(it){it.addEventListener('mouseleave',function(){var a=document.activeElement;if(a&&it.contains(a)&&a.blur)a.blur();});});document.addEventListener('keydown',function(e){if(e.key==='Escape'){var a=document.activeElement;if(a&&a.classList&&(a.classList.contains('pa-h-tab')||a.classList.contains('pa-h-morelink')||a.classList.contains('pa-h-link'))&&a.blur)a.blur();}});if(location.pathname==='/'){h.classList.add('pa-hero-search');}
var paHeroS=null;
function paSyncSearch(){if(!h.classList.contains('pa-hero-search'))return;if(!paHeroS)paHeroS=document.getElementById('heroSearchInput');var b=paHeroS?paHeroS.getBoundingClientRect().bottom:null;var show=(b!==null)?(b<(h.offsetHeight+4)):(window.scrollY>320);if(show)h.classList.add('pa-show-search');else h.classList.remove('pa-show-search');}
var paTocEl,paTocChecked=false;
function paSyncStrip(){if(h.classList.contains('pa-hero-search')){h.classList.remove('pa-strip-down');return;}if(!paTocChecked){paTocEl=document.querySelector('.toc-section');paTocChecked=true;}var down;if(paTocEl){var bar=h.querySelector('.pa-h-bar');var bh=bar?bar.offsetHeight:70;down=paTocEl.getBoundingClientRect().top<=(bh+2);}else{down=window.scrollY>20;}if(down)h.classList.add('pa-strip-down');else h.classList.remove('pa-strip-down');}
function paInitHero(){if(document.getElementById('heroSearchInput'))h.classList.add('pa-hero-search');paSyncSearch();paSyncStrip();}
function paScrollY(){return window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop||0;}
var paLastY=paScrollY();
function paOnScroll(){var y=paScrollY();if(y>20)h.classList.add('pa-scrolled');else h.classList.remove('pa-scrolled');if(!h.classList.contains('pa-mopen')){if(y>paLastY+4&&y>140){h.classList.add('pa-h-hide');document.documentElement.classList.add('pa-hh');}else if(y<paLastY-4){h.classList.remove('pa-h-hide');document.documentElement.classList.remove('pa-hh');}}paLastY=y;paSyncSearch();paSyncStrip();}
window.addEventListener('scroll',paOnScroll,{passive:true});
document.addEventListener('scroll',paOnScroll,{passive:true,capture:true});
if(document.readyState==='loading'){document.addEventListener('DOMContentLoaded',paInitHero);}else{paInitHero();}})();</script>
. A standalone preview page has no
   layout, so everything faq.css does not name explicitly fell back to the browser default
   serif: list items, answers, and every form control. The font belongs here, not in faq.css. */
body{margin:0;font-family:'Barlow',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,
  sans-serif;color:#1F2937;background:#F8FAFC;-webkit-font-smoothing:antialiased}
input,button,select,textarea{font-family:inherit}
.pa-field{display:inline-block;padding:1px 7px;border-radius:5px;background:#FDEBDD;
  color:#B4530F;font-weight:600;font-size:.94em;white-space:nowrap}
.gloss-table-wrap{overflow-x:auto;margin:18px 0}
.gloss-table{width:100%;border-collapse:collapse;font-size:14.5px}
.gloss-table th,.gloss-table td{border:1px solid #E5E7EB;padding:10px 12px;text-align:left;
  vertical-align:top}
.gloss-table th{background:#F8FAFC;color:#14365F;font-weight:700}
.pa-offsite{text-decoration:underline;text-underline-offset:2px}
.pa-chart{margin:16px 0 22px;padding:16px 4px 6px;background:#F8FAFC;border:1px solid #E5E7EB;
  border-radius:14px}
.pa-chart figcaption{font-size:11.5px;font-weight:800;letter-spacing:.06em;
  text-transform:uppercase;color:#14365F;padding:0 14px 4px}
.pa-chart-scroll{overflow-x:auto}
.pa-chart svg{display:block;min-width:100%;max-width:100%;height:auto}
</style>
@endsection

@section('schema')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.patronaccounting.com/"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Glossary",
            "item": "https://www.patronaccounting.com/glossary"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "Stock Audit",
            "item": "https://www.patronaccounting.com/glossary/stock-audit"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/#breadcrumb"
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
. A standalone preview page has no
   layout, so everything faq.css does not name explicitly fell back to the browser default
   serif: list items, answers, and every form control. The font belongs here, not in faq.css. */
body{margin:0;font-family:'Barlow',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,
  sans-serif;color:#1F2937;background:#F8FAFC;-webkit-font-smoothing:antialiased}
input,button,select,textarea{font-family:inherit}
.pa-field{display:inline-block;padding:1px 7px;border-radius:5px;background:#FDEBDD;
  color:#B4530F;font-weight:600;font-size:.94em;white-space:nowrap}
.gloss-table-wrap{overflow-x:auto;margin:18px 0}
.gloss-table{width:100%;border-collapse:collapse;font-size:14.5px}
.gloss-table th,.gloss-table td{border:1px solid #E5E7EB;padding:10px 12px;text-align:left;
  vertical-align:top}
.gloss-table th{background:#F8FAFC;color:#14365F;font-weight:700}
.pa-offsite{text-decoration:underline;text-underline-offset:2px}
.pa-chart{margin:16px 0 22px;padding:16px 4px 6px;background:#F8FAFC;border:1px solid #E5E7EB;
  border-radius:14px}
.pa-chart figcaption{font-size:11.5px;font-weight:800;letter-spacing:.06em;
  text-transform:uppercase;color:#14365F;padding:0 14px 4px}
.pa-chart-scroll{overflow-x:auto}
.pa-chart svg{display:block;min-width:100%;max-width:100%;height:auto}
</style>



</head><body>
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Glossary</span></nav><div class="gl-cat">70 terms &middot; CA-reviewed definitions</div><h1 class="gl-h1">Stock Audit Glossary</h1><p class="glh2-lead">Seventy terms used in stock audit, fixed asset verification and outlet audit work, each defined once and applied to the situation it belongs to.</p><div class="glh2-search"><span class="ic"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.3-4.3"/></svg></span><input id="glh2-search" type="text" autocomplete="off" placeholder="Search 70 stock audit terms - try &lsquo;drawing power&rsquo;, &lsquo;cut-off&rsquo;&hellip;"></div><div class="gl-herobadges"><span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Defined once, applied on the pages that use it</span><span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA &amp; CS reviewed</span><span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Lender and CARO 2020 context</span><span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Free to use</span></div><div class="gl-popular"><span class="gl-popular__l">Popular</span><a href="/glossary/stock-audit/cut-off-procedure">Cut-Off Procedure</a><a href="/glossary/stock-audit/sma-classification">SMA Classification</a><a href="/glossary/stock-audit/npa-classification">NPA Classification</a><a href="/glossary/stock-audit/book-debt">Book Debt</a></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>Independent stock audits, fixed asset verification and outlet audits across nine cities.</p><a class="gl-herocta__btn" href="/stock-audit">Stock audit services &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="glh2-filterbar"><div class="gl-wrap glh2-filters"><button class="glh2-fpill is-active" data-cat="all">All terms <span class="c">70</span></button><button class="glh2-fpill" data-cat="lending">The Lending Trigger <span class="c">7</span></button><button class="glh2-fpill" data-cat="count">The Count <span class="c">8</span></button><button class="glh2-fpill" data-cat="valuation">Valuation and Provisioning <span class="c">5</span></button><button class="glh2-fpill" data-cat="evidence">Records and Evidence <span class="c">6</span></button><button class="glh2-fpill" data-cat="ownership">Stock That Is Not Yours <span class="c">5</span></button><button class="glh2-fpill" data-cat="assets">Fixed Assets and Tagging <span class="c">9</span></button><button class="glh2-fpill" data-cat="mystery">Mystery Audit <span class="c">4</span></button><button class="glh2-fpill" data-cat="sector">Sector Vocabulary <span class="c">26</span></button></div></div><div class="glh2-body"><div class="gl-wrap"><section class="glh2-group" data-group="lending"><div class="glh2-group__head"><h2>The Lending Trigger</h2><span class="c"><span class="glh2-livecount">7</span> terms</span></div><p class="glh2-blurb">Why a verification is commissioned at all: the account grading, the security, the facility and the returns filed against it.</p><div class="glh2-grid"><a href="/glossary/stock-audit/book-debt" class="glh2-card" data-term="book debt"><span class="glh2-card__t">Book Debt</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/cash-credit-limit" class="glh2-card" data-term="cash credit limit"><span class="glh2-card__t">Cash Credit Limit</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/consortium-banking" class="glh2-card" data-term="consortium banking"><span class="glh2-card__t">Consortium Banking</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/npa-classification" class="glh2-card" data-term="npa classification"><span class="glh2-card__t">NPA Classification</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/primary-security" class="glh2-card" data-term="primary security"><span class="glh2-card__t">Primary Security</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/qis-statement" class="glh2-card" data-term="qis statement"><span class="glh2-card__t">QIS Statement</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/sma-classification" class="glh2-card" data-term="sma classification"><span class="glh2-card__t">SMA Classification</span><span class="glh2-card__v">View definition &rarr;</span></a></div></section><section class="glh2-group" data-group="count"><div class="glh2-group__head"><h2>The Count</h2><span class="c"><span class="glh2-livecount">8</span> terms</span></div><p class="glh2-blurb">The mechanics of counting, from cut-off through to tag control and what a negative balance means.</p><div class="glh2-grid"><a href="/glossary/stock-audit/count-tag-control" class="glh2-card" data-term="count tag control"><span class="glh2-card__t">Count Tag Control</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/cut-off-procedure" class="glh2-card" data-term="cut-off procedure"><span class="glh2-card__t">Cut-Off Procedure</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/cycle-count" class="glh2-card" data-term="cycle count"><span class="glh2-card__t">Cycle Count</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/negative-stock" class="glh2-card" data-term="negative stock"><span class="glh2-card__t">Negative Stock</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/physical-verification" class="glh2-card" data-term="physical verification"><span class="glh2-card__t">Physical Verification</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/stock-ageing" class="glh2-card" data-term="stock ageing"><span class="glh2-card__t">Stock Ageing</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/test-count" class="glh2-card" data-term="test count"><span class="glh2-card__t">Test Count</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/wall-to-wall-count" class="glh2-card" data-term="wall-to-wall count"><span class="glh2-card__t">Wall-to-Wall Count</span><span class="glh2-card__v">View definition &rarr;</span></a></div></section><section class="glh2-group" data-group="valuation"><div class="glh2-group__head"><h2>Valuation and Provisioning</h2><span class="c"><span class="glh2-livecount">5</span> terms</span></div><p class="glh2-blurb">What the goods are carried at once they have been counted.</p><div class="glh2-grid"><a href="/glossary/stock-audit/duty-paid-stock-valuation" class="glh2-card" data-term="excise / duty-paid stock valuation"><span class="glh2-card__t">Excise / Duty-Paid Stock Valuation</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/net-realisable-value" class="glh2-card" data-term="net realisable value (nrv)"><span class="glh2-card__t">Net Realisable Value (NRV)</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/slob-stock" class="glh2-card" data-term="slow-moving and obsolete stock (slob)"><span class="glh2-card__t">Slow-Moving and Obsolete Stock (SLOB)</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/stock-write-down" class="glh2-card" data-term="stock write-down"><span class="glh2-card__t">Stock Write-Down</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/stock-write-off" class="glh2-card" data-term="stock write-off"><span class="glh2-card__t">Stock Write-Off</span><span class="glh2-card__v">View definition &rarr;</span></a></div></section><section class="glh2-group" data-group="evidence"><div class="glh2-group__head"><h2>Records and Evidence</h2><span class="c"><span class="glh2-livecount">6</span> terms</span></div><p class="glh2-blurb">The documents behind the figures, and what an auditor will accept.</p><div class="glh2-grid"><a href="/glossary/stock-audit/audit-evidence" class="glh2-card" data-term="audit evidence"><span class="glh2-card__t">Audit Evidence</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/audit-sampling" class="glh2-card" data-term="audit sampling"><span class="glh2-card__t">Audit Sampling</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/bin-card" class="glh2-card" data-term="bin card"><span class="glh2-card__t">Bin Card</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/qualified-opinion" class="glh2-card" data-term="qualified opinion"><span class="glh2-card__t">Qualified Opinion</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/stores-ledger" class="glh2-card" data-term="stores ledger"><span class="glh2-card__t">Stores Ledger</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/weighbridge-verification" class="glh2-card" data-term="weighbridge verification"><span class="glh2-card__t">Weighbridge Verification</span><span class="glh2-card__v">View definition &rarr;</span></a></div></section><section class="glh2-group" data-group="ownership"><div class="glh2-group__head"><h2>Stock That Is Not Yours</h2><span class="c"><span class="glh2-livecount">5</span> terms</span></div><p class="glh2-blurb">Goods that are present and belong to somebody else, or absent and belong to you.</p><div class="glh2-grid"><a href="/glossary/stock-audit/bonded-stock" class="glh2-card" data-term="bonded stock"><span class="glh2-card__t">Bonded Stock</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/consignment-stock" class="glh2-card" data-term="consignment stock"><span class="glh2-card__t">Consignment Stock</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/goods-in-transit" class="glh2-card" data-term="goods-in-transit"><span class="glh2-card__t">Goods-in-Transit</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/job-work-stock" class="glh2-card" data-term="job work stock"><span class="glh2-card__t">Job Work Stock</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/third-party-held-stock" class="glh2-card" data-term="third-party / 3pl held stock"><span class="glh2-card__t">Third-Party / 3PL Held Stock</span><span class="glh2-card__v">View definition &rarr;</span></a></div></section><section class="glh2-group" data-group="assets"><div class="glh2-group__head"><h2>Fixed Assets and Tagging</h2><span class="c"><span class="glh2-livecount">9</span> terms</span></div><p class="glh2-blurb">The register and the identifiers that make it testable.</p><div class="glh2-grid"><a href="/glossary/stock-audit/asset-tag-number" class="glh2-card" data-term="asset tag number"><span class="glh2-card__t">Asset Tag Number</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/capital-work-in-progress" class="glh2-card" data-term="capital work-in-progress (cwip)"><span class="glh2-card__t">Capital Work-in-Progress (CWIP)</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/componentisation" class="glh2-card" data-term="componentisation"><span class="glh2-card__t">Componentisation</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/fixed-asset-register" class="glh2-card" data-term="fixed asset register"><span class="glh2-card__t">Fixed Asset Register</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/handheld-terminal" class="glh2-card" data-term="handheld terminal (hht)"><span class="glh2-card__t">Handheld Terminal (HHT)</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/impairment-testing" class="glh2-card" data-term="impairment testing"><span class="glh2-card__t">Impairment Testing</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/rfid-tag" class="glh2-card" data-term="rfid tag"><span class="glh2-card__t">RFID Tag</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/tagging-coverage-rate" class="glh2-card" data-term="tagging coverage rate"><span class="glh2-card__t">Tagging Coverage Rate</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/useful-life" class="glh2-card" data-term="useful life"><span class="glh2-card__t">Useful Life</span><span class="glh2-card__v">View definition &rarr;</span></a></div></section><section class="glh2-group" data-group="mystery"><div class="glh2-group__head"><h2>Mystery Audit</h2><span class="c"><span class="glh2-livecount">4</span> terms</span></div><p class="glh2-blurb">Measuring an outlet rather than its stock.</p><div class="glh2-grid"><a href="/glossary/stock-audit/audit-scorecard" class="glh2-card" data-term="audit scorecard"><span class="glh2-card__t">Audit Scorecard</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/mystery-shopper" class="glh2-card" data-term="mystery shopper"><span class="glh2-card__t">Mystery Shopper</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/service-level-compliance" class="glh2-card" data-term="service level compliance"><span class="glh2-card__t">Service Level Compliance</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/visit-scenario" class="glh2-card" data-term="visit scenario"><span class="glh2-card__t">Visit Scenario</span><span class="glh2-card__v">View definition &rarr;</span></a></div></section><section class="glh2-group" data-group="sector"><div class="glh2-group__head"><h2>Sector Vocabulary</h2><span class="c"><span class="glh2-livecount">26</span> terms</span></div><p class="glh2-blurb">Terms that mean something exact in one trade and nothing in the next.</p><div class="glh2-grid"><a href="/glossary/stock-audit/active-pharmaceutical-ingredient" class="glh2-card" data-term="active pharmaceutical ingredient (api)"><span class="glh2-card__t">Active Pharmaceutical Ingredient (API)</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/bin-location" class="glh2-card" data-term="bin location"><span class="glh2-card__t">Bin Location</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/cf-agent-stock" class="glh2-card" data-term="cf agent stock"><span class="glh2-card__t">CF Agent Stock</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/cross-docking" class="glh2-card" data-term="cross-docking"><span class="glh2-card__t">Cross-Docking</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/fefo" class="glh2-card" data-term="fefo (first expired, first out)"><span class="glh2-card__t">FEFO (First Expired, First Out)</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/gsm-fabric-weight" class="glh2-card" data-term="gsm fabric weight"><span class="glh2-card__t">GSM Fabric Weight</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/germination-loss" class="glh2-card" data-term="germination loss"><span class="glh2-card__t">Germination Loss</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/greige-fabric" class="glh2-card" data-term="greige fabric"><span class="glh2-card__t">Greige Fabric</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/kharif-and-rabi-seasons" class="glh2-card" data-term="kharif and rabi seasons"><span class="glh2-card__t">Kharif and Rabi Seasons</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/mark-down" class="glh2-card" data-term="mark-down"><span class="glh2-card__t">Mark-Down</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/micro-fulfilment-centre" class="glh2-card" data-term="micro-fulfilment centre (mfc)"><span class="glh2-card__t">Micro-Fulfilment Centre (MFC)</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/order-fill-rate" class="glh2-card" data-term="order fill rate"><span class="glh2-card__t">Order Fill Rate</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/pick-accuracy" class="glh2-card" data-term="pick accuracy"><span class="glh2-card__t">Pick Accuracy</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/planogram-compliance" class="glh2-card" data-term="planogram compliance"><span class="glh2-card__t">Planogram Compliance</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/put-away" class="glh2-card" data-term="put-away"><span class="glh2-card__t">Put-Away</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/quarantine-stock" class="glh2-card" data-term="quarantine stock"><span class="glh2-card__t">Quarantine Stock</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/refurbished-stock" class="glh2-card" data-term="refurbished stock"><span class="glh2-card__t">Refurbished Stock</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/retest-date" class="glh2-card" data-term="retest date"><span class="glh2-card__t">Retest Date</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/saleable-returns" class="glh2-card" data-term="saleable returns"><span class="glh2-card__t">Saleable Returns</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/secondary-sales" class="glh2-card" data-term="secondary sales"><span class="glh2-card__t">Secondary Sales</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/seconds-and-rejects" class="glh2-card" data-term="seconds and rejects"><span class="glh2-card__t">Seconds and Rejects</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/sell-through-rate" class="glh2-card" data-term="sell-through rate"><span class="glh2-card__t">Sell-Through Rate</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/serial-number-tracking" class="glh2-card" data-term="serial number tracking"><span class="glh2-card__t">Serial Number Tracking</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/shade-lot" class="glh2-card" data-term="shade lot"><span class="glh2-card__t">Shade Lot</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/sub-assembly-stock" class="glh2-card" data-term="sub-assembly stock"><span class="glh2-card__t">Sub-Assembly Stock</span><span class="glh2-card__v">View definition &rarr;</span></a><a href="/glossary/stock-audit/tool-crib" class="glh2-card" data-term="tool crib"><span class="glh2-card__t">Tool Crib</span><span class="glh2-card__v">View definition &rarr;</span></a></div></section><p class="glh2-noresults" style="display:none">No term matches that search.</p></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="overview" class="gl-sec"><h2>The Vocabulary a Stock Audit Actually Uses</h2><p>The language around inventory verification is borrowed from several places at once, which is why it causes so much confusion. Some of it comes from lending, where a sanction letter sets out what may be drawn against stock. Some comes from auditing standards, which govern what evidence is sufficient. Some is accounting, deciding what inventory is carried at. And a great deal is operational vocabulary from whichever trade the goods belong to, where a shade lot, a bin card and a tool crib each mean something precise to the people handling them and nothing at all to anybody else.</p><p>This glossary keeps those strands apart. Every term carries one canonical definition, then explains what it means where it is actually encountered: in a sanction clause, on a counting floor, against a fixed asset register, or on a mystery visit.</p></section><section id="how-to-use" class="gl-sec"><h2>How to Use This Glossary</h2><p>Each entry opens with a short definition written to stand alone, so a reader who needs only that can stop there. Beneath it the same term is expanded, the mechanism is set out as numbered steps, and the errors people actually make are listed with their consequence and their fix.</p><ul class="gloss-bullets"><li>Where a term belongs to a particular situation, a further section covers it: where it appears in a sanction letter, what the counting team does about it on site, how it applies to a fixed asset register, who owns the stock under it, or how it is scored on a visit.</li><li>Terms are grouped by the part of the work they belong to rather than alphabetically, because somebody reaching for one of them usually wants the others around it as well. Every entry links to a sibling term and back to the full index.</li></ul></section><section id="most-searched" class="gl-sec"><h2>The Terms People Look Up First</h2><p>A few entries account for most of the traffic here, and they cluster where the consequences are largest.</p><ul class="gloss-bullets"><li>The account grading terms, looked up by borrowers who have received a letter using language nobody explained.</li><li>Drawing power and the facility terms around it, because the gap between what was sanctioned and what may actually be drawn surprises people every quarter.</li><li>Net realisable value and the write-down terms, which is where the accounting question gets asked once stock has been found to be old.</li><li>The count vocabulary, particularly cut-off and cycle counting, reached by people preparing for a visit rather than recovering from one.</li><li>The ownership terms, because goods on somebody else's floor produce more accounting errors than any other position in inventory.</li><li>If a term brought you here, the entries around it in the same category are usually the ones you needed next.</li></ul></section><section id="services" class="gl-sec"><h2>Where These Terms Are Applied</h2><p>The vocabulary here is not academic. Every term on these pages describes something that has to be established at a location, on a date, by somebody who was not involved in creating the records.</p><ul class="gloss-bullets"><li>The lending terms are settled by counting stock and receivables against what was reported to a bank. The count vocabulary describes what happens on the floor during that exercise. The register terms belong to fixed asset verification, and the visit terms to outlet audits, which measure behaviour rather than inventory.</li><li><a href="/pan-india-stock-audit-services">PAN India Stock Audit Services</a> sets out those engagements, grouped by service, by sector and by city, so a term looked up here can be followed through to the work it belongs to.</li></ul></section></div></div></div></div></div>
@endverbatim
@endsection
