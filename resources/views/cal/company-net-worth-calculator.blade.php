@extends('layouts.app')

@section('meta')
<title>Company Net Worth Calculator for Section 2(57) Filings</title>
<meta name="description" content="Add paid up capital and free reserves, strip out revaluation gains and accumulated losses, and see the company figure the Companies Act actually recognises.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="https://www.patronaccounting.com/tools/company-net-worth-calculator">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.patronaccounting.com/tools/company-net-worth-calculator">
<meta property="og:title" content="Compute Your Company&#39;s Net Worth Correctly">
<meta property="og:description" content="A free calculator applying the Section 2(57) inclusions and exclusions for you.">
<meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="1200">
<meta property="og:image:type" content="image/png">
<meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
<meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Compute Your Company&#39;s Net Worth Correctly">
<meta name="twitter:description" content="A free calculator applying the Section 2(57) inclusions and exclusions for you.">
<meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
<link rel="icon" type="image/x-icon" href="https://www.patronaccounting.com/favicon.ico">
<link rel="icon" type="image/svg+xml" href="https://www.patronaccounting.com/favicon.svg">

{{-- JSON-LD lives here, not in @section('schema'): layouts.app has no @yield('schema'). --}}
@endsection

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
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

/* ============================================================================
   Shared additions on top of the verbatim estate stylesheet. Everything here
   fixes a defect in the estate CSS or supports a widget the estate lacks, and
   applies to every networth tool page.
   ========================================================================= */

/* --- one typeface across the whole tool -------------------------------------
   The estate stylesheet runs DM Sans for prose and Space Mono for labels and
   figures, and the sticky WhatsApp bar hardcodes Barlow (which the tool pages
   never load, so it fell back to a system face). Three fonts on one page.
   Point --font-mono at DM Sans rather than dropping the variable, so every rule
   that referenced it keeps its uppercase tracking and only changes family.
   Figures keep tabular numerals so money columns still line up. */
:root{--font-mono:'DM Sans',sans-serif}
.wa-sticky-bar-text,.wa-sticky-bar-btn,.wa-sticky-bar-close{font-family:var(--font-body)}
.cert-tbl td:last-child,.summary-card .v-val,.result-headline .value,.derived-box,
.form-group input,.form-group select,.rate-table td,.rate-table th{
  font-variant-numeric:tabular-nums;font-feature-settings:"tnum" 1}

/* --- sticky sidebar ---------------------------------------------------------
   Plain CSS sticky, no JS. Two JS attempts moved the sidebar relative to the
   page and read as jumping: a capped column with its own scrollbar, then a
   direction-aware one. Direction-aware sticky *inherently* swings the sidebar
   between its top- and bottom-pinned positions on every scroll reversal; that
   swing is the pattern, not a bug to tune out. position:sticky is resolved by
   the compositor and cannot lag or swing.

   No min-height guard either: an earlier build only stuck above 780px of
   viewport height so the stack would always fit, which meant it silently did
   not stick at all on a shorter window. Not sticking is worse than sticking
   with the tail below the fold. The stack is trimmed to ~690px so it fits most
   screens outright. */
@media (min-width:768px){
  .sidebar-sticky{position:sticky;top:133px}
  .sidebar-card .sidebar-link{min-height:40px;padding:8px 14px}
}
.sidebar-sticky>*:last-child{margin-bottom:0}
@media (pointer:coarse){
  .sidebar-card .sidebar-link{min-height:44px;padding:10px 14px}
}

/* --- stacking the three sticky layers ---------------------------------------
   layouts.app renders a sticky site header (.pa-h, z-index 1000): 125px tall at
   rest, 70px once scrolled. The estate tool CSS pins .toc-nav at top:0 with
   z-index 100, so the moment the page scrolls the nav is painted underneath the
   header and disappears entirely - confirmed with elementFromPoint at the nav's
   own coordinates returning the header logo. Only the real Laravel render shows
   this; a standalone preview has no header to collide with.
   Order: header 0-70, toc-nav 70-117, sidebar from 133, anchors clear of both. */
.toc-nav{top:70px}
.hero[id],.content-section[id],.calc-card[id]{scroll-margin-top:133px}

/* --- CTA card inside a content section ---------------------------------------
   .content-section h3 / p / a are all 0-1-1. That ties .body-cta h3 and
   .body-cta p (also 0-1-1) and beats .brand-cta-btn (0-1-0) - and the
   content-section rules come later in the sheet, so they win. A CTA card
   dropped inside a section therefore paints its heading rgb(10,34,64) on a
   rgb(10,34,64) gradient (invisible), its body copy grey on navy, and its
   buttons as underlined blue links. Restate the card's colours at descendant
   specificity. */
.content-section .body-cta h3{color:#fff}
.content-section .body-cta p{color:rgba(255,255,255,0.85)}
.content-section .brand-cta-btn{text-decoration:none}
.content-section .brand-cta-btn-call,.content-section .brand-cta-btn-call:hover,
.content-section .brand-cta-btn-wa,.content-section .brand-cta-btn-wa:hover{color:#fff}
.content-section .brand-cta-btn-email,.content-section .brand-cta-btn-email:hover{color:var(--text)}

/* estate .sidebar-link floats its arrow right, which drops onto a second line
   as soon as the label wraps. Lay the row out instead of floating. */
.sidebar-link{display:flex;align-items:center;justify-content:space-between;gap:10px}
.sidebar-link .arrow{float:none;flex:0 0 auto}

/* estate .rate-table has no scroll wrapper and overflows the page below ~380px */
.table-scroll{overflow-x:auto;-webkit-overflow-scrolling:touch;margin:16px 0;border-radius:var(--radius)}
.table-scroll .rate-table{margin:0;min-width:540px}

/* --- widgets the estate stylesheet has no classes for ----------------------- */
.section-memo-bg{background:#F5F3FF;padding:18px;border-radius:var(--radius);margin-bottom:18px;border-left:3px solid #7C3AED}
.section-memo-bg .section-title{color:#7C3AED}
.unit-row{display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap;margin-bottom:18px;padding:12px 16px;background:var(--surface-alt);border-radius:var(--radius)}
.unit-row .unit-label{font-family:var(--font-mono);font-size:11px;font-weight:700;color:var(--text-secondary);text-transform:uppercase;letter-spacing:1px}
.unit-row .toggle-group{flex:0 1 320px;background:var(--card)}
.cert-tbl tr.memo-head td{background:#F5F3FF;color:#5B21B6;font-weight:700;font-size:11px;text-transform:uppercase;letter-spacing:0.6px;border-top:2px solid #DDD6FE}
.cert-tbl tr.memo td{color:#5B21B6}
.cert-tbl tr.recon td{background:#F0F5FB;font-weight:700}
.cert-tbl tr.tangible td{background:#FFF7ED;font-weight:700;border-top:2px solid var(--accent)}
.cert-tbl tr.step td{background:#F0F5FB;font-weight:700;border-top:2px solid var(--primary-light)}
.recon-note{background:#F0F5FB;border-left:4px solid var(--primary-light);border-radius:0 var(--radius) var(--radius) 0;padding:14px 18px;margin-top:14px;font-size:13px;color:var(--primary-dark);line-height:1.65}
.recon-note strong{color:var(--primary-dark)}
.calc-actions{display:flex;flex-wrap:wrap;gap:8px;align-items:center}
.derived-box{padding:11px 14px;background:#FFF7ED;border:1px solid #FED7AA;border-radius:10px;font-family:var(--font-mono);font-size:15px;font-weight:700;color:var(--accent);min-height:44px;display:flex;align-items:center}
/* verdict chips for the ratio tool: a ratio is read against a band, never a
   pass/fail, because the tender condition sets the level, not the tool */
.verdict{display:inline-flex;align-items:center;gap:6px;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700;letter-spacing:0.4px;text-transform:uppercase}
.verdict.strong{background:#ECFDF5;color:#065F46}
.verdict.fair{background:#FFFBEB;color:#92400E}
.verdict.weak{background:#FEE2E2;color:#991B1B}
.ratio-grid{display:grid;grid-template-columns:1fr;gap:12px;margin-bottom:16px}
@media (min-width:600px){.ratio-grid{grid-template-columns:1fr 1fr 1fr}}
.ratio-card{background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);padding:18px}
.ratio-card .r-name{font-family:var(--font-mono);font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--accent);margin-bottom:6px}
.ratio-card .r-val{font-family:var(--font-mono);font-size:28px;font-weight:700;color:var(--primary-dark);line-height:1.1}
.ratio-card .r-formula{font-size:11px;color:var(--text-muted);margin:4px 0 8px}
.ratio-card .r-read{font-size:12px;color:var(--text-secondary);line-height:1.55;margin-top:8px}
</style>
@endpush

@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner">
<a href="#calculator">Calculator</a><a href="#what-it-computes">What It Computes</a><a href="#reserves">Reserves In &amp;amp; Out</a><a href="#reading-result">Reading the Result</a><a href="#certificate">Get It Certified</a><a href="#service-pages">Where It Is Used</a><a href="#faqs">FAQs</a>
</div></nav>


<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 4 August 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> &middot; Founder, Patron Accounting LLP</span></div>
<h1>Company Net Worth Calculator <span>(Section 2(57))</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Need the figure <strong>certified from audited accounts</strong> for a lender, a tender or a RERA filing? Patron issues UDIN-verified company net worth certificates with the reserve schedule worked through line by line.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Company%20Net%20Worth%20Calculator%20and%20need%20a%20section%202%2857%29%20net%20worth%20certificate." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Company%20Net%20Worth%20Certificate%20%28Section%202%2857%29%29&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Company%20Net%20Worth%20Calculator%20and%20need%20a%20certified%20section%202%2857%29%20computation%20for%3A%0A%0A-%20Company%20name%20and%20CIN%3A%20%0A-%20Balance%20sheet%20date%3A%20%0A-%20Who%20is%20asking%20for%20it%20%28lender/tender/RERA/other%29%3A%20%0A-%20Are%20the%20accounts%20for%20the%20year%20signed%3F%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>This calculator computes a company&rsquo;s net worth on the <strong>section 2(57) definition</strong> in the Companies Act 2013, not on shareholders&rsquo; funds. It adds paid-up share capital, the securities premium account and reserves created out of profits, then deducts accumulated losses, deferred expenditure and miscellaneous expenditure not written off. Reserves the statute excludes &mdash; <strong>revaluation, write-back of depreciation, and reserves arising on amalgamation</strong> &mdash; are entered separately, totalled, and never added to the figure, so you can see the reconciliation between the statutory number and the balance sheet. It also reports <strong>tangible net worth</strong>, which is what most tender conditions actually specify. This is an estimate from figures you enter: it carries no UDIN and is not a certified computation.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Section 2(57) Net Worth Computation</h2>
<p class="sub">Classify each reserve by how it arose, not by what it is called. The tool applies the statutory additions and deductions, keeps the excluded reserves visible as a memo, and reconciles the result back to shareholders&rsquo; funds.</p>
<noscript><div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>
<div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

<div class="unit-row">
<span class="unit-label">Enter figures in</span>
<div class="toggle-group" role="group" aria-label="Input unit">
<button type="button" class="toggle-btn active" data-unit="1" id="unitRupees">Rupees</button>
<button type="button" class="toggle-btn" data-unit="100000">&#8377; Lakh</button>
<button type="button" class="toggle-btn" data-unit="10000000">&#8377; Crore</button>
</div>
</div>

<div class="section-asset-bg">
<div class="section-title"><span>&#43; WHAT THE DEFINITION ADDS</span><small>From the audited balance sheet</small></div>
<div class="calc-row">
<div class="form-group"><label for="paidUpCapital">Paid-up share capital <span class="hint">Equity and preference, as per accounts</span></label><input type="text" id="paidUpCapital" inputmode="decimal" placeholder="1,00,00,000" autocomplete="off" value="10000000"></div>
<div class="form-group"><label for="secPremium">Securities premium account <span class="hint">Balance after any section 52 utilisation</span></label><input type="text" id="secPremium" inputmode="decimal" placeholder="2,50,00,000" autocomplete="off" value="25000000"></div>
</div>
<div class="calc-row">
<div class="form-group"><label for="generalReserve">General reserve <span class="hint">Built from profits the company earned</span></label><input type="text" id="generalReserve" inputmode="decimal" placeholder="75,00,000" autocomplete="off" value="7500000"></div>
<div class="form-group"><label for="retainedEarnings">Retained earnings / surplus in P&amp;L <span class="hint">Enter a negative figure if it is a debit balance</span></label><input type="text" id="retainedEarnings" inputmode="decimal" placeholder="1,20,00,000" autocomplete="off" value="12000000"></div>
</div>
<div class="calc-row">
<div class="form-group"><label for="otherFreeReserves">Other free reserves out of profits <span class="hint">Debenture redemption reserve, capital redemption reserve, etc.</span></label><input type="text" id="otherFreeReserves" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
<div class="form-group"><label>Total additions (A)</label><div class="derived-box" id="addTotalDisplay">&mdash;</div></div>
</div>
</div>

<div class="section-liab-bg">
<div class="section-title"><span>&minus; WHAT THE DEFINITION DEDUCTS</span><small>Enter as positive figures</small></div>
<div class="calc-row three-col">
<div class="form-group"><label for="accumLosses">Accumulated losses <span class="hint">Debit balance carried in reserves</span></label><input type="text" id="accumLosses" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
<div class="form-group"><label for="deferredExp">Deferred expenditure <span class="hint">Deferred revenue expenditure</span></label><input type="text" id="deferredExp" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
<div class="form-group"><label for="miscExp">Misc. expenditure not written off <span class="hint">Preliminary expenses, share issue expenses</span></label><input type="text" id="miscExp" inputmode="decimal" placeholder="5,00,000" autocomplete="off" value="500000"></div>
</div>
</div>

<div class="section-memo-bg">
<div class="section-title"><span>&#9888; EXCLUDED BY THE STATUTE</span><small>Entered, totalled, never counted in the figure</small></div>
<div class="calc-row three-col">
<div class="form-group"><label for="revalReserve">Revaluation reserve <span class="hint">Asset written up without a sale</span></label><input type="text" id="revalReserve" inputmode="decimal" placeholder="40,00,000" autocomplete="off" value="4000000"></div>
<div class="form-group"><label for="deprWriteBack">Reserve from write-back of depreciation <span class="hint">Depreciation reversed to reserves</span></label><input type="text" id="deprWriteBack" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
<div class="form-group"><label for="amalgReserve">Reserve arising on amalgamation <span class="hint">Amalgamation / scheme reserve</span></label><input type="text" id="amalgReserve" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
</div>
</div>

<div class="section-pref-bg">
<div class="section-title"><span>&#9432; TANGIBLE NET WORTH (OPTIONAL)</span><small>Deducted only from the tangible figure, not from the section 2(57) figure</small></div>
<div class="calc-row">
<div class="form-group"><label for="goodwill">Goodwill <span class="hint">Carrying amount in the balance sheet</span></label><input type="text" id="goodwill" inputmode="decimal" placeholder="0" autocomplete="off" value="0"></div>
<div class="form-group"><label for="otherIntangibles">Other intangible assets <span class="hint">Brands, software, licences, development costs</span></label><input type="text" id="otherIntangibles" inputmode="decimal" placeholder="15,00,000" autocomplete="off" value="1500000"></div>
</div>
</div>

<button type="button" class="btn-calculate" id="btnCalculate">Compute Net Worth</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline" id="resHeadlineBox">
<div class="label">Net worth under section 2(57)</div>
<div class="value"><span class="accent" id="resHeadline">&mdash;</span></div>
<div class="meta" id="resHeadlineMeta">&mdash;</div>
</div>

<div class="summary-grid">
<div class="summary-card success"><div class="v-label">Total Additions (A)</div><div class="v-val" id="resAdditions">&mdash;</div><div class="v-desc">Capital, premium and free reserves</div></div>
<div class="summary-card highlight"><div class="v-label">Total Deductions (B)</div><div class="v-val" id="resDeductions">&mdash;</div><div class="v-desc">Losses and unwritten-off expenditure</div></div>
<div class="summary-card"><div class="v-label">Tangible Net Worth</div><div class="v-val" id="resTangible">&mdash;</div><div class="v-desc" id="resTangibleDesc">After goodwill and intangibles</div></div>
</div>

<div class="certificate-block">
<h4>COMPUTATION OF NET WORTH</h4>
<div class="cert-sub">Section 2(57), Companies Act 2013 &middot; as on <span id="certDate">&mdash;</span> &middot; format mirrors a CA computation schedule</div>

<table class="cert-tbl">
<thead><tr><th>Particulars</th><th>Amount (&#8377;)</th></tr></thead>
<tbody id="certAddBody"></tbody>
<tbody><tr class="subtotal"><td><strong>Total additions (A)</strong></td><td id="certAddTotal"><strong>&mdash;</strong></td></tr></tbody>
</table>

<table class="cert-tbl">
<thead><tr><th>Less: deductions under section 2(57)</th><th>Amount (&#8377;)</th></tr></thead>
<tbody id="certDedBody"></tbody>
<tbody>
<tr class="subtotal"><td><strong>Total deductions (B)</strong></td><td id="certDedTotal"><strong>&mdash;</strong></td></tr>
<tr class="networth"><td><strong>NET WORTH UNDER SECTION 2(57) (A &minus; B)</strong></td><td id="certNetWorth"><strong>&mdash;</strong></td></tr>
</tbody>
</table>

<table class="cert-tbl">
<tbody id="certMemoBody"></tbody>
</table>

<div class="cert-footnote">Preview only. This computation is an estimate from the figures entered above. It is not drawn from audited accounts, carries no UDIN, and no lender, tender committee or state authority will accept it in place of a certificate issued by a practising chartered accountant.</div>
</div>

<div class="recon-note" id="reconNote">&mdash;</div>

<div class="adj-warning">
<h4>&#9888;&#65039; Four things in-house computations get wrong</h4>
<ol>
<li><strong>Treating shareholders&rsquo; funds as net worth.</strong> Every reserve sits in shareholders&rsquo; funds; section 2(57) excludes three of them. Start from the reserve schedule, not from the total.</li>
<li><strong>Classifying a reserve by its name.</strong> Companies label reserves inconsistently. What decides the treatment is how the reserve arose, which the reserve schedule and the board minutes show.</li>
<li><strong>Netting a revaluation against a loss.</strong> A revaluation reserve is excluded whether or not the company is carrying accumulated losses. It cannot be used to absorb them for this purpose.</li>
<li><strong>Reading net worth where the condition says tangible net worth.</strong> Tender conditions frequently specify the tangible figure. If your number clears a threshold only because an intangible is carried at a substantial value, expect the reader to recompute it without.</li>
</ol>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head">This figure needs a signature before anyone will act on it.</div>
<div class="post-result-cta-sub">Patron traces every addition and deduction back to the audited line it came from, builds the reserve schedule so the exclusions are visible, and issues the certificate with the CIN, the balance sheet date and a UDIN.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call">Call +91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20a%20section%202(57)%20company%20net%20worth%20certificate." class="brand-cta-btn brand-cta-btn-wa" rel="noopener">WhatsApp</a>
</div>
</div>

<div class="calc-actions">
<button type="button" class="btn-reset" id="btnReset">Reset all fields</button>
<button type="button" class="btn-print" id="btnPrint">Print / Save as PDF</button>
</div>

</div><!-- /result-section -->
</div><!-- /calc-card -->

<section class="content-section" id="what-it-computes">
<h2>What This Calculator Computes for a Company</h2>
<p>This calculator computes a company&rsquo;s net worth on the statutory definition rather than on a general one. It starts from paid-up share capital, adds the securities premium account and reserves created out of profits, then deducts accumulated losses, deferred expenditure and miscellaneous expenditure not written off. The result is the figure section 2(57) of the Companies Act 2013 describes. It is not the same as shareholders&rsquo; funds on the face of the balance sheet, and where the two differ it is almost always because a reserve has been included that the definition excludes.</p>
<div class="callout"><p><strong>The formula in one line.</strong> Paid-up share capital + securities premium account + reserves created out of profits &minus; accumulated losses &minus; deferred expenditure &minus; miscellaneous expenditure not written off. Reserves created out of revaluation of assets, out of writing back of depreciation, or arising on amalgamation are excluded from the aggregate.</p></div>
</section>

<section class="content-section" id="reserves">
<h2>Reserves It Includes, and the Ones It Excludes</h2>
<p>The reserves it includes are those built from profits the company actually earned: general reserve, retained earnings, and the securities premium account. The ones it excludes are the ones the statute names. A revaluation reserve arises from writing an asset up without selling it and is excluded. A reserve created by writing back depreciation is excluded. A reserve arising on amalgamation is excluded. The calculator asks you to classify each reserve by how it arose rather than by its name, because companies label them inconsistently and the label is not what decides the treatment.</p>
<div class="table-scroll"><table class="rate-table">
<thead><tr><th>Reserve</th><th>How it arose</th><th>Section 2(57)</th></tr></thead>
<tbody>
<tr><td>General reserve</td><td>Appropriation out of earned profits</td><td>Included</td></tr>
<tr><td>Retained earnings / surplus in P&amp;L</td><td>Undistributed profits carried forward</td><td>Included</td></tr>
<tr><td>Securities premium account</td><td>Premium received on issue of shares</td><td>Included &mdash; named in the definition</td></tr>
<tr><td>Capital redemption reserve</td><td>Created out of profits on redemption</td><td>Included</td></tr>
<tr><td>Revaluation reserve</td><td>Asset written up, nothing realised</td><td><strong>Excluded</strong></td></tr>
<tr><td>Reserve from write-back of depreciation</td><td>Depreciation reversed to reserves</td><td><strong>Excluded</strong></td></tr>
<tr><td>Reserve arising on amalgamation</td><td>Created by a scheme, not by trading</td><td><strong>Excluded</strong></td></tr>
</tbody>
</table></div>
<div class="callout warn"><p><strong>Where the label misleads.</strong> A reserve called &ldquo;general reserve&rdquo; that was in fact credited on a revaluation is still a revaluation reserve for this purpose, and a reserve with a scheme&rsquo;s name on it that was genuinely appropriated out of profits is not. Read the reserve schedule and the board resolution that created it, not the caption.</p></div>
</section>

<section class="content-section" id="reading-result">
<h2>Reading the Result Against a Lender&rsquo;s Expectation</h2>
<p>Read the result against what the recipient will do with it. A lender assessing an unsecured facility reads the statutory figure alongside gearing and cash generation, and a company can meet the first while failing the others. A tender committee frequently specifies tangible net worth, which removes goodwill and other intangibles and produces a lower number again. If your figure clears a threshold only because an intangible is carried at a substantial value, expect the reader to recompute it without. The result is also a snapshot rather than a trend. A lender looks at three years and reads the direction as much as the level, so a single strong figure following two weak ones tells a different story from three steady ones.</p>
</section>

<section class="content-section" id="certificate">
<h2>Convert the Computation Into a Certificate</h2>
<p>Converting the computation into a certificate means starting from signed audited accounts rather than from a trial balance, because the definition reads the figure from the audited balance sheet. Each addition and deduction is traced to the line it came from, the reserve schedule is built so exclusions are visible, and any modification in the auditor&rsquo;s report is disclosed. The certificate then carries the company name as the register holds it, its CIN, the balance sheet date and a UDIN. Where the accounts for the year are not yet signed, the honest options are to wait or to certify on provisional figures with that stated on the face of the document. What is not available is presenting unaudited numbers as though they were audited.</p>
<div class="body-cta">
<h3>Get the section 2(57) figure certified</h3>
<p>Signed audited accounts in, a certificate with the CIN, the balance sheet date, the reserve schedule and a UDIN out. Tell us who is asking for it and we will confirm the format they expect.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call">Call +91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20a%20company%20net%20worth%20certificate%20under%20section%202(57)." class="brand-cta-btn brand-cta-btn-wa" rel="noopener">WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Company%20Net%20Worth%20Certificate" class="brand-cta-btn brand-cta-btn-email">Email</a>
</div>
</div>
</section>

<section class="content-section" id="service-pages">
<h2>How This Tool Is Used on Our Service Pages</h2>
<p>This calculator sits inline on the company net worth page, where the statutory computation is the subject, and on the <a href="https://www.patronaccounting.com/net-worth-certificate-for-rera-registration">RERA page</a>, where a promoter&rsquo;s certified position is read against the estimated project cost. Those pages carry what the tool does not: which set of accounts applies, how a modified audit report is handled, and what the authority&rsquo;s own format requires. Between them those two pages cover the two situations in which a company&rsquo;s statutory figure is most often demanded: a lender assessing the business, and an authority assessing a promoter behind a project. A reader who arrived here from a search rather than from a service page should start with the <a href="https://www.patronaccounting.com/net-worth-certificate-for-company">net worth certificate for company</a> page, which is where the engagement itself is set out.</p>
<div class="callout"><p><strong>Adjacent to this computation.</strong> Where a tender asks for solvency rather than net worth, the <a href="https://www.patronaccounting.com/solvency-certificate">solvency certificate</a> page covers what that certificate states and how charged assets are presented. For the ratios a lender reads alongside the statutory figure, the <a href="https://www.patronaccounting.com/tools/roe-roce-calculator">ROE and ROCE calculator</a>, the <a href="https://www.patronaccounting.com/tools/working-capital-calculator">working capital calculator</a> and the <a href="https://www.patronaccounting.com/tools/turnover-threshold-checker">turnover threshold checker</a> all work from the same audited accounts.</p></div>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions About Company Net Worth Under Section 2(57)</h2>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>How does section 2(57) define net worth?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 2(57) of the Companies Act 2013 defines net worth as the aggregate value of paid-up share capital and all reserves created out of the profits, plus the securities premium account, reduced by the aggregate value of accumulated losses, deferred expenditure and miscellaneous expenditure not written off. The figure is read from the audited balance sheet. The definition expressly excludes reserves created out of revaluation of assets, out of writing back of depreciation, and reserves arising on amalgamation.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Why is my section 2(57) figure lower than shareholders' funds?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Because shareholders' funds on the face of the balance sheet include every reserve, and section 2(57) does not. A revaluation reserve, a reserve created by writing back depreciation and a reserve arising on amalgamation are all part of shareholders' funds and all excluded from the statutory figure. Where the two numbers differ, that difference is almost always one of those three reserves. The calculator shows the reconciliation so you can see which line is responsible.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Is a revaluation reserve really excluded?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. A revaluation reserve arises from writing an asset up without selling it, so no profit has been realised and no cash has come in. The statute names it as an exclusion. This is the single most common error in in-house computations, because the reserve sits in shareholders' funds and looks like any other reserve on the balance sheet. Classify each reserve by how it arose rather than by what it is called.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Does the securities premium account count?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. The definition adds the securities premium account explicitly, alongside paid-up share capital and reserves created out of profits. It is added even though it was not earned from operations, because the statute names it. Note that it is added at the balance sheet amount, after any utilisation permitted under section 52.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>What is tangible net worth, and is it the same thing?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. Tangible net worth removes goodwill and other intangible assets from the statutory figure. Tender conditions and several lenders specify tangible net worth rather than net worth, and it produces a lower number. The calculator reports both, because a figure that clears a threshold only on the strength of an intangible carried at a substantial value will be recomputed by the reader without it.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Can the computation be done on provisional or unaudited accounts?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The definition reads the figure from the audited balance sheet, so a certificate should start from signed audited accounts. Where the accounts for the year are not yet signed, the honest options are to wait, or to certify on provisional figures with that stated on the face of the document. What is not available is presenting unaudited numbers as though they were audited.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Is the output of this calculator acceptable to a bank or a state RERA authority?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. It is an estimate from figures you type in. It carries no UDIN, no reference to audited accounts and no professional responsibility for the numbers. A recipient acting on the figure is relying on the verification behind it, not on the arithmetic. A certificate from a practising chartered accountant traces each addition and deduction to the audited line it came from and carries a UDIN the recipient can verify independently.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>What does a company net worth certificate carry on its face?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The company name as the register holds it, the Corporate Identity Number, the balance sheet date the figure is drawn from, the computation showing each addition and deduction, the reserve schedule with the exclusions visible, disclosure of any modification in the auditor's report, and a UDIN. Patron issues company net worth certificates from signed audited accounts, with the reserve classification worked through line by line.</div></div></div>
</section>

<script>
(function(){
'use strict';

var ADD_FIELDS = [
  ['paidUpCapital',        'Paid-up share capital'],
  ['secPremium',           'Securities premium account'],
  ['generalReserve',       'General reserve (out of profits)'],
  ['retainedEarnings',     'Retained earnings / surplus in P&L'],
  ['otherFreeReserves',    'Other free reserves out of profits']
];
var DED_FIELDS = [
  ['accumLosses', 'Accumulated losses'],
  ['deferredExp', 'Deferred expenditure'],
  ['miscExp',     'Miscellaneous expenditure not written off']
];
var MEMO_FIELDS = [
  ['revalReserve',   'Revaluation reserve'],
  ['deprWriteBack',  'Reserve created by writing back depreciation'],
  ['amalgReserve',   'Reserve arising on amalgamation']
];
var INTANGIBLE_FIELDS = [
  ['goodwill',         'Goodwill'],
  ['otherIntangibles', 'Other intangible assets']
];
var ALL_IDS = [].concat(ADD_FIELDS, DED_FIELDS, MEMO_FIELDS, INTANGIBLE_FIELDS).map(function(f){ return f[0]; });

var unit = 1;

function $(id){ return document.getElementById(id); }

function parseNum(raw){
  if (raw === undefined || raw === null) return NaN;
  var c = String(raw).replace(/[,\s₹]/g, '');
  if (c === '') return 0;
  var n = parseFloat(c);
  return isFinite(n) ? n : NaN;
}

function val(id){
  var n = parseNum($(id).value);
  return isFinite(n) ? n * unit : NaN;
}

function fmtINR(n){
  if (!isFinite(n)) return '—';
  var s = Math.abs(Math.round(n)).toLocaleString('en-IN');
  return (n < 0 ? '−₹' : '₹') + s;
}

function fmtL(n){
  if (!isFinite(n)) return '—';
  var a = Math.abs(n), sign = n < 0 ? '−' : '';
  if (a >= 10000000) return sign + '₹' + (a/10000000).toFixed(2) + ' Cr';
  if (a >= 100000)   return sign + '₹' + (a/100000).toFixed(2) + ' L';
  return fmtINR(n);
}

function showError(msg, silent){
  var b = $('errorBanner');
  b.textContent = msg;
  b.classList.add('visible');
  if (!silent) b.scrollIntoView({block:'nearest'});
  setTimeout(function(){ b.classList.remove('visible'); }, 6000);
}

function sumOf(fields){
  var t = 0;
  for (var i = 0; i < fields.length; i++){
    var v = val(fields[i][0]);
    if (!isFinite(v)) return NaN;
    t += v;
  }
  return t;
}

function rowHtml(label, amount, cls){
  var zero = (amount === 0);
  var klass = cls || (zero ? 'zero-row' : '');
  return '<tr' + (klass ? ' class="' + klass + '"' : '') + '><td>' + label + '</td><td>' + fmtINR(amount) + '</td></tr>';
}

function updateAddPreview(){
  var a = sumOf(ADD_FIELDS);
  $('addTotalDisplay').textContent = isFinite(a) ? fmtL(a) : '—';
}

function today(){
  var d = new Date();
  var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
  return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
}

// `silent` means this run came from the user typing rather than pressing the
// button. It recomputes exactly the same, but must not move the page: yanking
// the view down to the result on every keystroke drags the field being edited
// off screen.
function calculate(silent){
  for (var i = 0; i < ALL_IDS.length; i++){
    if (!isFinite(parseNum($(ALL_IDS[i]).value))){
      showError('Enter numbers only. Commas and the rupee sign are fine; letters are not.', silent);
      return;
    }
  }

  var additions  = sumOf(ADD_FIELDS);
  var deductions = sumOf(DED_FIELDS);
  var excluded   = sumOf(MEMO_FIELDS);
  var intangible = sumOf(INTANGIBLE_FIELDS);

  if (additions === 0 && deductions === 0 && excluded === 0 && intangible === 0){
    showError('Enter at least one figure from the balance sheet before computing.', silent);
    return;
  }

  var netWorth   = additions - deductions;
  var tangible   = netWorth - intangible;
  var sharehold  = netWorth + excluded;

  // headline
  $('resHeadline').textContent = fmtINR(netWorth);
  $('resHeadlineBox').classList.toggle('negative', netWorth < 0);
  $('resHeadlineMeta').textContent = netWorth < 0
    ? 'Negative net worth under section 2(57). Deductions of ' + fmtL(deductions) + ' exceed additions of ' + fmtL(additions) + '.'
    : fmtL(netWorth) + ' · additions ' + fmtL(additions) + ' less deductions ' + fmtL(deductions);

  // summary cards
  $('resAdditions').textContent  = fmtL(additions);
  $('resDeductions').textContent = fmtL(deductions);
  $('resTangible').textContent   = fmtL(tangible);
  $('resTangibleDesc').textContent = intangible > 0
    ? 'After removing ' + fmtL(intangible) + ' of intangibles'
    : 'No intangibles entered — same as the statutory figure';

  // computation schedule
  $('certDate').textContent = today();

  var addHtml = '';
  for (var j = 0; j < ADD_FIELDS.length; j++){
    addHtml += rowHtml(ADD_FIELDS[j][1], val(ADD_FIELDS[j][0]));
  }
  $('certAddBody').innerHTML = addHtml;
  $('certAddTotal').innerHTML = '<strong>' + fmtINR(additions) + '</strong>';

  var dedHtml = '';
  for (var k = 0; k < DED_FIELDS.length; k++){
    dedHtml += rowHtml(DED_FIELDS[k][1], val(DED_FIELDS[k][0]));
  }
  $('certDedBody').innerHTML = dedHtml;
  $('certDedTotal').innerHTML = '<strong>' + fmtINR(deductions) + '</strong>';
  $('certNetWorth').innerHTML = '<strong>' + fmtINR(netWorth) + '</strong>';

  var memoHtml = '<tr class="memo-head"><td colspan="2">Memo &mdash; excluded by section 2(57), not part of the figure above</td></tr>';
  for (var m = 0; m < MEMO_FIELDS.length; m++){
    memoHtml += rowHtml(MEMO_FIELDS[m][1], val(MEMO_FIELDS[m][0]), 'memo');
  }
  memoHtml += '<tr class="recon"><td><strong>Shareholders’ funds indicated by these figures</strong></td><td><strong>' + fmtINR(sharehold) + '</strong></td></tr>';
  memoHtml += '<tr class="memo-head"><td colspan="2">Memo &mdash; tangible net worth</td></tr>';
  for (var n = 0; n < INTANGIBLE_FIELDS.length; n++){
    memoHtml += rowHtml('Less: ' + INTANGIBLE_FIELDS[n][1], val(INTANGIBLE_FIELDS[n][0]), 'memo');
  }
  memoHtml += '<tr class="tangible"><td><strong>Tangible net worth</strong></td><td><strong>' + fmtINR(tangible) + '</strong></td></tr>';
  $('certMemoBody').innerHTML = memoHtml;

  // reconciliation note
  var note;
  if (excluded > 0){
    note = '<strong>Why this differs from the balance sheet.</strong> Shareholders’ funds on these figures come to ' +
           fmtL(sharehold) + ', but ' + fmtL(excluded) + ' of that sits in reserves section 2(57) excludes, so the statutory figure is ' +
           fmtL(netWorth) + '. That gap is the whole reason an in-house computation and a certified one disagree.';
  } else {
    note = '<strong>No excluded reserves entered.</strong> On these figures the section 2(57) net worth and shareholders’ funds are the same, at ' +
           fmtL(netWorth) + '. Check the reserve schedule before relying on that: a revaluation reserve, a write-back of depreciation or an amalgamation reserve would each open a gap between the two.';
  }
  if (intangible > 0){
    note += ' Tangible net worth is ' + fmtL(tangible) + ', which is the figure most tender conditions mean.';
  }
  $('reconNote').innerHTML = note;

  $('resultSection').classList.add('visible');
  if (!silent) $('resultSection').scrollIntoView({behavior:'smooth', block:'start'});
}

// ------------------------------------------------------------ wiring
$('btnCalculate').addEventListener('click', function(){ calculate(); });

ALL_IDS.forEach(function(id){
  $(id).addEventListener('input', function(){
    updateAddPreview();
    if ($('resultSection').classList.contains('visible')) calculate(true);
  });
});

Array.prototype.forEach.call(document.querySelectorAll('.unit-row .toggle-btn'), function(btn){
  btn.addEventListener('click', function(){
    Array.prototype.forEach.call(document.querySelectorAll('.unit-row .toggle-btn'), function(b){ b.classList.remove('active'); });
    btn.classList.add('active');
    unit = parseFloat(btn.dataset.unit);
    updateAddPreview();
    if ($('resultSection').classList.contains('visible')) calculate(true);
  });
});

$('btnReset').addEventListener('click', function(){
  ALL_IDS.forEach(function(id){ $(id).value = '0'; });
  unit = 1;
  Array.prototype.forEach.call(document.querySelectorAll('.unit-row .toggle-btn'), function(b){ b.classList.remove('active'); });
  $('unitRupees').classList.add('active');
  $('resultSection').classList.remove('visible');
  updateAddPreview();
  $('paidUpCapital').focus();
});

$('btnPrint').addEventListener('click', function(){ window.print(); });

// FAQ accordion
Array.prototype.forEach.call(document.querySelectorAll('.faq-question'), function(q){
  q.addEventListener('click', function(){
    var item = q.parentElement;
    var open = item.classList.toggle('open');
    q.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
});

// TOC active state
var tocLinks = Array.prototype.slice.call(document.querySelectorAll('.toc-nav a'));
window.addEventListener('scroll', function(){
  var y = window.scrollY + 120, current = null;
  tocLinks.forEach(function(a){
    var t = document.querySelector(a.getAttribute('href'));
    if (t && t.offsetTop <= y) current = a;
  });
  tocLinks.forEach(function(a){ a.classList.toggle('active', a === current); });
});

// The sidebar is pinned by CSS position:sticky, deliberately with no JS at all.
// Two earlier JS versions moved it relative to the page and read as jumping;
// the compositor cannot do that.

updateAddPreview();
})();
</script>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="sidebar-sticky">

<div class="cta-card">
<h3>Company Net Worth Certificate</h3>
<p>From signed audited accounts, with the reserve schedule, the CIN and a verifiable UDIN.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call">Call +91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Company%20Net%20Worth%20Calculator%20and%20need%20a%20section%202%2857%29%20net%20worth%20certificate." class="brand-cta-btn brand-cta-btn-wa" rel="noopener">WhatsApp</a>
</div>
</div>

<div class="sidebar-card"><h3>Related</h3>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-company" class="sidebar-link">Net Worth Certificate for Company <span class="arrow">&rarr;</span></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-rera-registration" class="sidebar-link">CA Certificate for RERA <span class="arrow">&rarr;</span></a>
<a href="https://www.patronaccounting.com/net-worth-certificate" class="sidebar-link">Net Worth Certificate <span class="arrow">&rarr;</span></a>
<a href="https://www.patronaccounting.com/ca-certified-services" class="sidebar-link">All CA Certified Services <span class="arrow">&rarr;</span></a>
<a href="https://www.patronaccounting.com/tools/net-worth-calculator" class="sidebar-link">Net Worth Calculator <span class="arrow">&rarr;</span></a>
<a href="https://www.patronaccounting.com/tools/nwc-document-checklist" class="sidebar-link">NWC Document Checklist <span class="arrow">&rarr;</span></a>
</div>

</div><!-- /sidebar-sticky -->
</aside>

</div><!-- /main-layout -->

<div class="office-strip"><div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div><span class="trust">25,000+ Businesses Trust Us</span></div>

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
