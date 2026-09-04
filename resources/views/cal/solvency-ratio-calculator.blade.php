@extends('layouts.app')

@section('meta')
<title>Solvency and Liquidity Ratio Calculator for Bidders</title>
<meta name="description" content="Enter your assets and liabilities to see the solvency and liquidity ratios a tender committee or a lender computes, with a plain reading of what each signals.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="https://www.patronaccounting.com/tools/solvency-ratio-calculator">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.patronaccounting.com/tools/solvency-ratio-calculator">
<meta property="og:title" content="See the Ratios a Tender Committee Will Read">
<meta property="og:description" content="A free calculator for solvency and liquidity ratios, with plain language verdicts.">
<meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="1200">
<meta property="og:image:type" content="image/png">
<meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
<meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="See the Ratios a Tender Committee Will Read">
<meta name="twitter:description" content="A free calculator for solvency and liquidity ratios, with plain language verdicts.">
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
<a href="#calculator">Calculator</a><a href="#which-ratios">Which Ratios</a><a href="#signals">What Each Signals</a><a href="#vs-certificate">Ratio vs Certificate</a><a href="#certify">Get It Certified</a><a href="#service-pages">Where It Is Used</a><a href="#faqs">FAQs</a>
</div></nav>


<header class="hero" id="calculator">
<div class="hero-meta"><span class="badge-updated">Updated: 4 August 2026</span><span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> &middot; Founder, Patron Accounting LLP</span></div>
<h1>Solvency and Liquidity <span>Ratio Calculator</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner">
<div class="brand-cta-bar-text">Tender asking for a <strong>solvency certificate</strong> rather than a ratio? Patron certifies the sum and date your condition names, with charges verified against the registry and a UDIN.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Solvency%20Ratio%20Calculator%20page.%20I%20would%20like%20to%20know%20more%20about%20it." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Solvency%20Certificate&amp;body=Hello%2C%20I%20just%20visited%20your%20Solvency%20Ratio%20Calculator%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
</div></div></div>

<div class="tldr"><div class="tldr-label">TL;DR</div><p>This calculator returns <strong>three figures from the same inputs</strong>, because &ldquo;solvency&rdquo; covers more than one measure. The solvency ratio divides total assets by total liabilities, which is what tender conditions most often mean. The current ratio divides current assets by current liabilities, testing whether obligations falling due in the next year can be met. The quick ratio does the same without inventory, because stock is the slowest current asset to realise. A bidder who passes the current ratio and fails the quick one is carrying liquidity in inventory. None of the three replaces reading the condition, which frequently names <strong>a sum rather than a ratio at all</strong>. This is an estimate from figures you enter and carries no UDIN.</p></div>

<div class="main-layout">
<div class="content-col">

<div class="calc-card">
<h2>Solvency and Liquidity Ratios</h2>
<p class="sub">Three measures from one set of inputs, because &ldquo;solvency&rdquo; covers more than one. Enter the balance sheet&rsquo;s own classification of current and non-current wherever it has one &mdash; that is what the reader will use.</p>
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
<div class="section-title"><span>CURRENT ASSETS</span><small>Expected to be realised within twelve months</small></div>
<div class="calc-row three-col">
<div class="form-group"><label for="inventory">Inventory <span class="hint">Removed from the quick ratio</span></label><input type="text" id="inventory" inputmode="decimal" placeholder="45,00,000" autocomplete="off" value="4500000"></div>
<div class="form-group"><label for="receivables">Trade receivables</label><input type="text" id="receivables" inputmode="decimal" placeholder="60,00,000" autocomplete="off" value="6000000"></div>
<div class="form-group"><label for="cash">Cash and bank balances</label><input type="text" id="cash" inputmode="decimal" placeholder="25,00,000" autocomplete="off" value="2500000"></div>
</div>
<div class="calc-row">
<div class="form-group"><label for="shortInv">Short-term investments</label><input type="text" id="shortInv" inputmode="decimal" placeholder="10,00,000" autocomplete="off" value="1000000"></div>
<div class="form-group"><label for="otherCA">Other current assets <span class="hint">Short-term loans and advances</span></label><input type="text" id="otherCA" inputmode="decimal" placeholder="5,00,000" autocomplete="off" value="500000"></div>
</div>
</div>

<div class="section-pref-bg">
<div class="section-title"><span>NON-CURRENT ASSETS</span><small>Counted in the solvency ratio only</small></div>
<div class="calc-row">
<div class="form-group"><label for="fixedAssets">Property, plant and equipment <span class="hint">Net book value</span></label><input type="text" id="fixedAssets" inputmode="decimal" placeholder="1,80,00,000" autocomplete="off" value="18000000"></div>
<div class="form-group"><label for="otherNCA">Other non-current assets <span class="hint">Long-term investments, deposits</span></label><input type="text" id="otherNCA" inputmode="decimal" placeholder="20,00,000" autocomplete="off" value="2000000"></div>
</div>
</div>

<div class="section-liab-bg">
<div class="section-title"><span>LIABILITIES</span><small>Enter as positive figures</small></div>
<div class="calc-row three-col">
<div class="form-group"><label for="payables">Trade payables</label><input type="text" id="payables" inputmode="decimal" placeholder="40,00,000" autocomplete="off" value="4000000"></div>
<div class="form-group"><label for="shortBorrow">Short-term borrowings <span class="hint">Including current portion of long-term debt</span></label><input type="text" id="shortBorrow" inputmode="decimal" placeholder="30,00,000" autocomplete="off" value="3000000"></div>
<div class="form-group"><label for="otherCL">Other current liabilities <span class="hint">Provisions, statutory dues</span></label><input type="text" id="otherCL" inputmode="decimal" placeholder="12,00,000" autocomplete="off" value="1200000"></div>
</div>
<div class="calc-row">
<div class="form-group"><label for="longBorrow">Long-term borrowings</label><input type="text" id="longBorrow" inputmode="decimal" placeholder="70,00,000" autocomplete="off" value="7000000"></div>
<div class="form-group"><label for="otherNCL">Other non-current liabilities</label><input type="text" id="otherNCL" inputmode="decimal" placeholder="8,00,000" autocomplete="off" value="800000"></div>
</div>
</div>

<button type="button" class="btn-calculate" id="btnCalculate">Compute Ratios</button>

<div class="result-section" id="resultSection" aria-live="polite">
<div class="result-divider"></div>

<div class="result-headline" id="resHeadlineBox">
<div class="label">Solvency ratio &mdash; total assets to total liabilities</div>
<div class="value"><span class="accent" id="resHeadline">&mdash;</span></div>
<div class="meta" id="resHeadlineMeta">&mdash;</div>
</div>

<div class="ratio-grid">
<div class="ratio-card">
<div class="r-name">Solvency Ratio</div>
<div class="r-val" id="rSolvency">&mdash;</div>
<div class="r-formula">total assets &divide; total liabilities</div>
<div id="vSolvency"></div>
<div class="r-read" id="readSolvency">&mdash;</div>
</div>
<div class="ratio-card">
<div class="r-name">Current Ratio</div>
<div class="r-val" id="rCurrent">&mdash;</div>
<div class="r-formula">current assets &divide; current liabilities</div>
<div id="vCurrent"></div>
<div class="r-read" id="readCurrent">&mdash;</div>
</div>
<div class="ratio-card">
<div class="r-name">Quick Ratio</div>
<div class="r-val" id="rQuick">&mdash;</div>
<div class="r-formula">(current assets &minus; inventory) &divide; current liabilities</div>
<div id="vQuick"></div>
<div class="r-read" id="readQuick">&mdash;</div>
</div>
</div>

<div class="certificate-block">
<h4>SUMMARY OF POSITION</h4>
<div class="cert-sub">As on <span id="certDate">&mdash;</span> &middot; from the figures entered above</div>
<table class="cert-tbl">
<thead><tr><th>Particulars</th><th>Amount (&#8377;)</th></tr></thead>
<tbody id="certBody"></tbody>
</table>
<div class="cert-footnote">Preview only. These ratios are computed from figures you entered. Nothing here has been verified, no charge on any asset has been checked against the registry, and the output carries no UDIN. A tender committee, court or bank will require a certificate from a practising chartered accountant.</div>
</div>

<div class="recon-note" id="reconNote">&mdash;</div>

<div class="callout warn">
<p><strong>The bands above are orientation, not a pass mark.</strong> No universal level exists. The condition that governs you is the one written in the tender document, the court direction or the bank&rsquo;s letter &mdash; and it frequently names a rupee sum rather than a ratio at all. Read it before treating any of these as a target.</p>
</div>

<div class="post-result-cta">
<div class="post-result-cta-head">A ratio describes your position. A certificate answers the question you were asked.</div>
<div class="post-result-cta-sub">Patron works from the document that set the requirement &mdash; the sum, the date, the recency &mdash; evidences the holdings, verifies charges against the registry and discloses them beside the assets they burden, and signs with a UDIN.</div>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call">Call +91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Solvency%20Ratio%20Calculator%20page.%20I%20would%20like%20to%20know%20more%20about%20it." class="brand-cta-btn brand-cta-btn-wa" rel="noopener">WhatsApp</a>
</div>
</div>

<div class="calc-actions">
<button type="button" class="btn-reset" id="btnReset">Reset all fields</button>
<button type="button" class="btn-print" id="btnPrint">Print / Save as PDF</button>
</div>

</div><!-- /result-section -->
</div><!-- /calc-card -->

<section class="content-section" id="which-ratios">
<h2>Which Ratios This Calculator Returns</h2>
<p>This calculator returns three figures from the same inputs. The first divides total assets by total liabilities, which is the form tender conditions most often mean when they use the word solvency. The second is the current ratio, dividing current assets by current liabilities, which tests whether obligations falling due in the next year can be met. The third is the quick ratio, which removes stock from the numerator because inventory is the slowest current asset to realise. Three numbers rather than one, because the word covers more than a single measure.</p>
<div class="table-scroll"><table class="rate-table">
<thead><tr><th>Ratio</th><th>Formula</th><th>What it tests</th></tr></thead>
<tbody>
<tr><td>Solvency ratio</td><td>Total assets &divide; total liabilities</td><td>Whether the business is solvent at all</td></tr>
<tr><td>Current ratio</td><td>Current assets &divide; current liabilities</td><td>Whether the next twelve months can be met</td></tr>
<tr><td>Quick ratio</td><td>(Current assets &minus; inventory) &divide; current liabilities</td><td>The same, without relying on stock being sold</td></tr>
</tbody>
</table></div>
</section>

<section class="content-section" id="signals">
<h2>What Each Ratio Signals to a Tender Committee</h2>
<p>Each signals something different to a committee. A comfortable assets-to-liabilities ratio says the bidder is not insolvent, which is a low bar and is treated as such. The current ratio says the bidder can meet what falls due while the contract runs, which matters more for work paid in arrears. The quick ratio says the same thing without relying on stock being sold, and a bidder who passes the current ratio and fails the quick one is carrying liquidity in inventory. Committees rarely publish which they will apply, so a bidder is better placed knowing all three. None of the three is a substitute for reading the tender condition, which frequently names a sum rather than a ratio at all.</p>
</section>

<section class="content-section" id="vs-certificate">
<h2>Where a Ratio Result and a Solvency Certificate Differ</h2>
<p>A ratio result and a solvency certificate answer different questions, and this is the distinction worth taking from the tool. A ratio describes a general condition: assets against liabilities on the date the figures were drawn. A certificate answers a specific one: whether a stated sum can be met on a stated date, after anything already charged has been set aside. A bidder can present excellent ratios and still fail the certificate, because the property they were relying on is mortgaged to somebody else. The reverse also happens. A bidder with modest ratios can hold one clean unencumbered property that answers the sum comfortably, and a certificate says so where a ratio would have understated them.</p>
</section>

<section class="content-section" id="certify">
<h2>Ask a CA to Certify Your Position</h2>
<p>Asking a chartered accountant to certify the position means starting from the document that set the requirement. The sum and the date come from the tender condition, the court direction or the bank&rsquo;s letter rather than from an assumption. Holdings are evidenced, charges are verified against the registry and disclosed beside the assets they burden, and the undertaking is drafted for the body that will actually read it. The certificate carries a UDIN the recipient can verify without contacting anybody. Where the condition names a recency requirement as well as a sum, that is read off the tender document the day it arrives. A certificate obtained too early is as useless as one obtained too late, and both are avoidable.</p>
<div class="body-cta">
<h3>Get the position certified to your condition</h3>
<p>Send us the tender clause, the court direction or the bank&rsquo;s letter. We work backwards from the sum, the date and the recency it names, verify charges against the registry, and issue with a UDIN.</p>
<div class="brand-cta-bar-actions">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call">Call +91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Solvency%20Ratio%20Calculator%20page.%20I%20would%20like%20to%20know%20more%20about%20it." class="brand-cta-btn brand-cta-btn-wa" rel="noopener">WhatsApp</a>
<a href="mailto:sales@patronaccounting.com?subject=Solvency%20Certificate" class="brand-cta-btn brand-cta-btn-email">Email</a>
</div>
</div>
</section>

<section class="content-section" id="service-pages">
<h2>How This Tool Is Used on Our Service Pages</h2>
<p>This calculator sits inline on the <a href="https://www.patronaccounting.com/solvency-certificate">solvency certificate</a> page, which is where a reader arrives with a tender condition in hand. That page carries what the tool does not: how charged assets are presented, what recency the condition may impose, and the difference between a bank&rsquo;s solvency letter and a chartered accountant&rsquo;s certificate. That distinction is one tender conditions specify and bidders routinely confuse. The solvency certificate page carries the engagement itself, including how the sum and the date are taken from the document that set them.</p>
<div class="callout"><p><strong>Adjacent to this computation.</strong> Where the condition names net worth rather than solvency, the <a href="https://www.patronaccounting.com/tools/net-worth-calculator">net worth calculator</a> and the <a href="https://www.patronaccounting.com/net-worth-certificate">net worth certificate</a> page cover that measure, and a company bidding in its own name should read the <a href="https://www.patronaccounting.com/tools/company-net-worth-calculator">company net worth calculator</a> instead, which applies the section 2(57) definition.</p></div>
</section>

<section class="content-section" id="faqs">
<h2>Frequently Asked Questions About Solvency and Liquidity Ratios</h2>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Which ratio does a tender mean when it says solvency?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Most often total assets divided by total liabilities, which is the plain solvency ratio. But tender conditions are inconsistent: some mean the current ratio, some name a minimum net worth, and a great many name a rupee sum rather than a ratio at all. The calculator returns all three common measures so you are not guessing which one the committee will apply, but none of them substitutes for reading the condition itself.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>What is the difference between the current ratio and the quick ratio?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Both test whether obligations falling due within a year can be met. The current ratio divides current assets by current liabilities. The quick ratio removes inventory from the numerator, because stock is the slowest current asset to turn into cash. A bidder who passes the current ratio and fails the quick one is carrying its liquidity in inventory, which matters on a contract paid in arrears.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Can a bidder show good ratios and still fail a solvency certificate?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes, and it happens regularly. A ratio describes a general condition on the date the figures were drawn. A certificate answers a specific question: whether a stated sum can be met on a stated date, after anything already charged has been set aside. A bidder relying on a property that is mortgaged to somebody else can present excellent ratios and still fail. The reverse also happens, where modest ratios sit alongside one clean unencumbered property that answers the sum comfortably.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>What ratio level is considered acceptable?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">There is no universal level, which is why this tool bands the result rather than passing or failing it. The condition that governs you is the one in the tender document, the court direction or the bank's letter. As a broad orientation only, an assets-to-liabilities ratio above 2 and a current ratio above 1.5 are read as comfortable by most committees, and anything at or below 1 signals that liabilities have caught up with assets. Read your own condition before treating any of that as a target.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Should charged or mortgaged assets be included?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">They belong in the ratio, because the ratio describes the whole balance sheet. They are treated very differently in a certificate: a charge is verified against the registry and disclosed beside the asset it burdens, because the recipient wants to know what is actually available to meet the sum. This is the single largest reason a ratio and a certificate tell different stories about the same business.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Is a bank solvency letter the same as a CA solvency certificate?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No, and tender conditions specify which they want. A bank's letter speaks to the account relationship and the balances the bank can see. A chartered accountant's certificate speaks to the whole position, is drawn from evidenced holdings with charges verified, and carries a UDIN the recipient can check independently. Bidders routinely supply one where the other was asked for, and the file is returned.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>What figures should I enter for current assets and current liabilities?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Current assets are those expected to be realised within twelve months: inventory, trade receivables, short-term investments, cash and bank balances, and short-term loans and advances. Current liabilities are those falling due within twelve months: trade payables, short-term borrowings, the current portion of long-term debt, provisions and other current dues. Use the audited balance sheet's own classification wherever one exists, because that is what the reader will use.</div></div></div>
<div class="faq-item"><button class="faq-question" aria-expanded="false"><span>Can this calculator's output go into a tender file?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. It is an estimate from figures you type in, with no verification behind it and no UDIN. A tender wants a certificate from a practising chartered accountant, drawn from evidenced holdings, addressing the sum and the date the condition names, and drafted for the body that will read it.</div></div></div>
</section>

<script>
(function(){
'use strict';

var CURRENT_ASSETS = [['inventory','Inventory'],['receivables','Trade receivables'],
                      ['cash','Cash and bank balances'],['shortInv','Short-term investments'],
                      ['otherCA','Other current assets']];
var NONCURRENT_ASSETS = [['fixedAssets','Property, plant and equipment'],
                         ['otherNCA','Other non-current assets']];
var CURRENT_LIABS = [['payables','Trade payables'],['shortBorrow','Short-term borrowings'],
                     ['otherCL','Other current liabilities']];
var NONCURRENT_LIABS = [['longBorrow','Long-term borrowings'],
                        ['otherNCL','Other non-current liabilities']];
var ALL_IDS = [].concat(CURRENT_ASSETS, NONCURRENT_ASSETS, CURRENT_LIABS, NONCURRENT_LIABS)
                .map(function(f){ return f[0]; });

var unit = 1;
function $(id){ return document.getElementById(id); }

function parseNum(raw){
  if (raw === undefined || raw === null) return NaN;
  var c = String(raw).replace(/[,\s₹]/g, '');
  if (c === '') return 0;
  var n = parseFloat(c);
  return isFinite(n) ? n : NaN;
}
function val(id){ var n = parseNum($(id).value); return isFinite(n) ? n * unit : NaN; }
function fmtINR(n){
  if (!isFinite(n)) return '—';
  return (n < 0 ? '−₹' : '₹') + Math.abs(Math.round(n)).toLocaleString('en-IN');
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
  var klass = cls || (amount === 0 ? 'zero-row' : '');
  return '<tr' + (klass ? ' class="' + klass + '"' : '') + '><td>' + label + '</td><td>' + fmtINR(amount) + '</td></tr>';
}
function today(){
  var d = new Date();
  var m = ['January','February','March','April','May','June','July','August','September','October','November','December'];
  return d.getDate() + ' ' + m[d.getMonth()] + ' ' + d.getFullYear();
}

// Bands, not pass/fail. The condition sets the level, never the tool -- these
// are the levels most committees read as comfortable, and the copy says so.
function band(v, strong, fair){
  if (!isFinite(v)) return ['', '—'];
  if (v >= strong) return ['strong', 'Comfortable'];
  if (v >= fair)   return ['fair',   'Adequate'];
  return ['weak', 'Thin'];
}
function chip(id, cls, label){
  $(id).innerHTML = cls ? '<span class="verdict ' + cls + '">' + label + '</span>' : '';
}
function fmtRatio(v){
  if (!isFinite(v)) return '—';
  return v.toFixed(2) + ' : 1';
}

function calculate(silent){
  for (var i = 0; i < ALL_IDS.length; i++){
    if (!isFinite(parseNum($(ALL_IDS[i]).value))){
      showError('Enter numbers only. Commas and the rupee sign are fine; letters are not.', silent);
      return;
    }
  }
  var ca  = sumOf(CURRENT_ASSETS), nca = sumOf(NONCURRENT_ASSETS);
  var cl  = sumOf(CURRENT_LIABS),  ncl = sumOf(NONCURRENT_LIABS);
  var inv = val('inventory');
  var totalAssets = ca + nca, totalLiabs = cl + ncl;

  if (totalAssets === 0 && totalLiabs === 0){
    showError('Enter at least one figure from the balance sheet before computing.', silent);
    return;
  }
  if (totalLiabs === 0 || cl === 0){
    showError('Liabilities cannot all be zero — a ratio needs a denominator. Enter what the business owes.', silent);
    return;
  }

  var solvency = totalAssets / totalLiabs;
  var current  = ca / cl;
  var quick    = (ca - inv) / cl;
  var netWorth = totalAssets - totalLiabs;

  $('resHeadline').textContent = fmtRatio(solvency);
  $('resHeadlineBox').classList.toggle('negative', solvency < 1);
  $('resHeadlineMeta').textContent = solvency < 1
    ? 'Liabilities of ' + fmtL(totalLiabs) + ' exceed assets of ' + fmtL(totalAssets) + '. On these figures the business is not solvent.'
    : 'Assets ' + fmtL(totalAssets) + ' against liabilities ' + fmtL(totalLiabs) + ' · net worth ' + fmtL(netWorth);

  $('rSolvency').textContent = fmtRatio(solvency);
  $('rCurrent').textContent  = fmtRatio(current);
  $('rQuick').textContent    = fmtRatio(quick);

  var bs = band(solvency, 2, 1), bc = band(current, 1.5, 1), bq = band(quick, 1, 0.75);
  chip('vSolvency', bs[0], bs[1]);
  chip('vCurrent',  bc[0], bc[1]);
  chip('vQuick',    bq[0], bq[1]);

  $('readSolvency').textContent = solvency < 1
    ? 'Below 1:1 — liabilities have overtaken assets.'
    : 'Says the bidder is not insolvent. A low bar, and committees treat it as one.';
  $('readCurrent').textContent = current < 1
    ? 'Below 1:1 — obligations falling due within the year exceed the assets meant to meet them.'
    : 'Says what falls due while the contract runs can be met. Matters most for work paid in arrears.';
  $('readQuick').textContent = (isFinite(current) && isFinite(quick) && current >= 1.5 && quick < 1)
    ? 'Passes on the current ratio but not without stock — liquidity is sitting in inventory.'
    : 'The same test without relying on stock being sold.';

  $('certDate').textContent = today();
  var html = '';
  for (var a = 0; a < CURRENT_ASSETS.length; a++) html += rowHtml(CURRENT_ASSETS[a][1], val(CURRENT_ASSETS[a][0]));
  html += '<tr class="subtotal"><td><strong>Current assets</strong></td><td><strong>' + fmtINR(ca) + '</strong></td></tr>';
  for (var b = 0; b < NONCURRENT_ASSETS.length; b++) html += rowHtml(NONCURRENT_ASSETS[b][1], val(NONCURRENT_ASSETS[b][0]));
  html += '<tr class="step"><td><strong>TOTAL ASSETS</strong></td><td><strong>' + fmtINR(totalAssets) + '</strong></td></tr>';
  for (var c = 0; c < CURRENT_LIABS.length; c++) html += rowHtml(CURRENT_LIABS[c][1], val(CURRENT_LIABS[c][0]));
  html += '<tr class="subtotal"><td><strong>Current liabilities</strong></td><td><strong>' + fmtINR(cl) + '</strong></td></tr>';
  for (var d = 0; d < NONCURRENT_LIABS.length; d++) html += rowHtml(NONCURRENT_LIABS[d][1], val(NONCURRENT_LIABS[d][0]));
  html += '<tr class="step"><td><strong>TOTAL LIABILITIES</strong></td><td><strong>' + fmtINR(totalLiabs) + '</strong></td></tr>';
  html += '<tr class="networth"><td><strong>NET WORTH (assets &minus; liabilities)</strong></td><td><strong>' + fmtINR(netWorth) + '</strong></td></tr>';
  $('certBody').innerHTML = html;

  var note;
  if (isFinite(current) && isFinite(quick) && current >= 1.5 && quick < 1){
    note = '<strong>Your liquidity is in inventory.</strong> The current ratio of ' + fmtRatio(current) +
           ' clears comfortably, but removing stock of ' + fmtL(inv) + ' takes the quick ratio to ' +
           fmtRatio(quick) + '. A committee applying the quick ratio will read this very differently from one applying the current ratio.';
  } else if (solvency >= 2 && current >= 1.5){
    note = '<strong>All three measures are comfortable</strong> on these figures. That still says nothing about whether a specific sum can be met on a specific date once charged assets are set aside — which is the question a solvency certificate actually answers.';
  } else {
    note = '<strong>Read these against your own condition.</strong> Solvency ' + fmtRatio(solvency) +
           ', current ' + fmtRatio(current) + ', quick ' + fmtRatio(quick) +
           '. A bidder with modest ratios holding one clean unencumbered property can still answer the sum comfortably, which is why the certificate and the ratio can disagree.';
  }
  $('reconNote').innerHTML = note;

  $('resultSection').classList.add('visible');
  if (!silent) $('resultSection').scrollIntoView({behavior:'smooth', block:'start'});
}

$('btnCalculate').addEventListener('click', function(){ calculate(); });

ALL_IDS.forEach(function(id){
  $(id).addEventListener('input', function(){
    if ($('resultSection').classList.contains('visible')) calculate(true);
  });
});

Array.prototype.forEach.call(document.querySelectorAll('.unit-row .toggle-btn'), function(btn){
  btn.addEventListener('click', function(){
    Array.prototype.forEach.call(document.querySelectorAll('.unit-row .toggle-btn'), function(b){ b.classList.remove('active'); });
    btn.classList.add('active');
    unit = parseFloat(btn.dataset.unit);
    if ($('resultSection').classList.contains('visible')) calculate(true);
  });
});

$('btnReset').addEventListener('click', function(){
  ALL_IDS.forEach(function(id){ $(id).value = '0'; });
  unit = 1;
  Array.prototype.forEach.call(document.querySelectorAll('.unit-row .toggle-btn'), function(b){ b.classList.remove('active'); });
  $('unitRupees').classList.add('active');
  $('resultSection').classList.remove('visible');
  $('inventory').focus();
});

$('btnPrint').addEventListener('click', function(){ window.print(); });

Array.prototype.forEach.call(document.querySelectorAll('.faq-question'), function(q){
  q.addEventListener('click', function(){
    var item = q.parentElement;
    var open = item.classList.toggle('open');
    q.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
});

var tocLinks = Array.prototype.slice.call(document.querySelectorAll('.toc-nav a'));
window.addEventListener('scroll', function(){
  var y = window.scrollY + 160, current = null;
  tocLinks.forEach(function(a){
    var t = document.querySelector(a.getAttribute('href'));
    if (t && t.offsetTop <= y) current = a;
  });
  tocLinks.forEach(function(a){ a.classList.toggle('active', a === current); });
}, {passive:true});
})();
</script>

</div><!-- /content-col -->

<aside class="sidebar-col">
<div class="sidebar-sticky">

<div class="cta-card">
<h3>Solvency Certificate</h3>
<p>Drafted to the sum and date your condition names, with charges verified and a UDIN the recipient can check.</p>
<div class="brand-cta-stack">
<a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call">Call +91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Solvency%20Ratio%20Calculator%20page.%20I%20would%20like%20to%20know%20more%20about%20it." class="brand-cta-btn brand-cta-btn-wa" rel="noopener">WhatsApp</a>
</div>
</div>

<div class="sidebar-card"><h3>Related</h3>
<a href="https://www.patronaccounting.com/solvency-certificate" class="sidebar-link">Solvency Certificate <span class="arrow">&rarr;</span></a>
<a href="https://www.patronaccounting.com/net-worth-certificate" class="sidebar-link">Net Worth Certificate <span class="arrow">&rarr;</span></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-company" class="sidebar-link">Net Worth Certificate for Company <span class="arrow">&rarr;</span></a>
<a href="/net-worth-certificate-by-ca" class="sidebar-link">All CA Certified Services <span class="arrow">&rarr;</span></a>
<a href="https://www.patronaccounting.com/tools/net-worth-calculator" class="sidebar-link">Net Worth Calculator <span class="arrow">&rarr;</span></a>
<a href="https://www.patronaccounting.com/tools/company-net-worth-calculator" class="sidebar-link">Company Net Worth Calculator <span class="arrow">&rarr;</span></a>
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
@endsection
