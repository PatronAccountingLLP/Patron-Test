@extends('layouts.service-app')

@section('meta')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>India Compliance Calendar 2025-26 | Free | Patron Accounting</title>
<meta name="description" content="India Compliance Calendar FY 2025-26 — 109 compliances across GST, TDS, MCA, SEBI & FEMA. Filter by entity, turnover & industry. Free by Patron Accounting CAs.">
<meta name="robots" content="index, follow">
<meta name="keywords" content="India compliance calendar, GST due dates 2025-26, income tax filing last date, TDS due dates India, MCA filing deadlines, ROC annual compliance, compliance checklist India, SEBI LODR deadlines, FEMA compliance, EPF ESI due dates, company compliance India, FY 2025-26 compliance">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="alternate" hreflang="en-IN" href="/compliance-calendar">
<link rel="alternate" hreflang="en" href="/compliance-calendar">
<link rel="canonical" href="/compliance-calendar">
<meta property="og:title" content="India Compliance Calendar 2025-26 | Free | Patron Accounting">
<meta property="og:description" content="109 compliances across 12 regulators. Filter by industry, turnover, employees & entity type. Built by practising CAs.">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_IN">
<meta property="og:url" content="/compliance-calendar">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:image" content="/compliance-calendar/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="India Compliance Calendar 2025-26 | Free | Patron Accounting">
<meta name="twitter:description" content="109 compliances across GST, Income Tax, TDS, MCA, SEBI, FEMA. Filter by industry, turnover, employees.">
<meta name="twitter:image" content="/compliance-calendar/og-image.png">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "India Compliance Calendar | Free",
          "description": "India Compliance Calendar FY 2025-26 — 109 compliances across GST, TDS, MCA, SEBI & FEMA. Filter by entity, turnover & industry. Free by Patron Accounting CAs.",
          "url": "/compliance-calendar",
          "serviceType": "India Compliance Calendar | Free",
          "areaServed": {
            "@type": "Country",
            "name": "India"
          },
          "provider": {
            "@type": "Organization",
            "name": "Patron Accounting LLP",
            "url": "/",
            "logo": "/images/site-logo.svg"
          }
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "India Compliance Calendar | Free",
              "item": "/compliance-calendar"
            }
          ]
        }
      ]
    }
    </script>
@endsection
@section('content')
<style>
:root{
  --primary:#1B2B4B;--primary-light:#2A3F6F;--primary-dark:#111E35;
  --accent:#E8622A;--accent-light:#F5A07A;
  --surface:#F5F0E8;--surface-alt:#EDE8DE;--card:#FFFFFF;
  --text:#1B2B4B;--text-secondary:#4A5568;--text-muted:#718096;
  --border:#E2E8F0;--success:#16A34A;--info:#0EA5E9;--danger:#DC2626;
  --radius:12px;--radius-lg:20px;
  --shadow-sm:0 1px 2px rgba(0,0,0,0.04);
  --shadow-md:0 2px 8px rgba(0,0,0,0.06);
  --shadow-lg:0 4px 16px rgba(0,0,0,0.08);
  --font-body:'Inter',sans-serif;--font-mono:'Space Mono',monospace
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:var(--font-body);background:var(--surface);color:var(--text);padding-bottom:72px;-webkit-font-smoothing:antialiased}
@media(max-width:600px){body{padding-bottom:90px}}

/* Skip nav */
.skip-nav{position:absolute;top:-100%;left:16px;background:var(--primary);color:#fff;padding:8px 16px;border-radius:0 0 var(--radius) var(--radius);font-size:14px;font-weight:600;text-decoration:none;z-index:9999;transition:top 0.2s}
.skip-nav:focus{top:0}

/* TOC Nav */
.toc-nav{background:var(--primary-dark);position:sticky;top:0;z-index:100;overflow-x:auto;white-space:nowrap;-webkit-overflow-scrolling:touch;box-shadow:0 2px 8px rgba(0,0,0,0.15);scrollbar-width:none}
.toc-nav::-webkit-scrollbar{display:none}
.toc-nav-inner{max-width:1200px;margin:0 auto;padding:0 20px;display:flex;gap:0}
.toc-nav a{color:rgba(255,255,255,0.75);text-decoration:none;font-size:13px;font-weight:500;padding:12px 16px;transition:all 0.2s;border-bottom:2px solid transparent;display:inline-block;white-space:nowrap}
.toc-nav a:hover,.toc-nav a.active{color:#fff;border-bottom-color:var(--accent)}

/* Breadcrumb */
.breadcrumb{max-width:1200px;margin:0 auto;padding:16px 20px 0;font-size:13px;color:var(--text-muted)}
.breadcrumb a{color:var(--primary-light);text-decoration:none}
.breadcrumb a:hover{text-decoration:underline}
.breadcrumb span{margin:0 6px}

/* Meta strip */
.meta-strip{max-width:1200px;margin:0 auto;padding:8px 20px 0;display:flex;flex-wrap:wrap;align-items:center;gap:12px;font-size:13px;color:var(--text-muted)}
.meta-strip-date{display:flex;align-items:center;gap:5px;font-weight:500;color:var(--text-secondary)}
.meta-strip-date::before{content:'🗓';font-size:12px}
.meta-strip-divider{color:var(--border);font-size:16px}
.meta-strip-author{display:flex;align-items:center;gap:8px}
.author-avatar{width:28px;height:28px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;flex-shrink:0;text-decoration:none}
.author-info{font-size:12px;line-height:1.4}
.author-info strong{color:var(--text-secondary);display:block;font-size:13px}
.author-info span{color:var(--text-muted)}
.author-cred{display:inline-flex;align-items:center;gap:4px;background:rgba(27,43,75,0.07);color:var(--primary);font-size:10px;font-weight:700;padding:2px 7px;border-radius:999px;letter-spacing:0.3px;margin-top:2px}
.share-btn{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;border:1.5px solid var(--border);border-radius:999px;font-size:12px;font-weight:600;color:var(--text-secondary);background:var(--card);cursor:pointer;transition:all 0.2s;text-decoration:none;font-family:var(--font-body)}
.share-btn:hover{border-color:var(--primary);color:var(--primary);background:rgba(27,43,75,0.04)}
.share-btn svg{width:13px;height:13px;flex-shrink:0}
.share-toast{position:fixed;bottom:90px;left:50%;transform:translateX(-50%) translateY(20px);background:var(--primary-dark);color:#fff;font-size:13px;font-weight:600;padding:10px 20px;border-radius:999px;opacity:0;transition:all 0.3s;z-index:3000;pointer-events:none}
.share-toast.show{opacity:1;transform:translateX(-50%) translateY(0)}

/* Section labels */
.section-label{display:flex;align-items:center;gap:6px;font-size:11px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1.2px;margin-bottom:10px}
.section-label::before{content:'';display:inline-block;width:14px;height:2px;background:var(--accent);border-radius:2px;flex-shrink:0}

/* Hero */
.hero{max-width:1200px;margin:0 auto;padding:32px 20px 24px}
.hero-meta{display:flex;flex-wrap:wrap;align-items:center;gap:12px;margin-bottom:16px}
.badge-updated{background:var(--primary);color:#fff;font-size:12px;font-weight:600;padding:4px 12px;border-radius:20px;letter-spacing:0.3px}
.author-byline{font-size:13px;color:var(--text-secondary)}
.author-byline strong{color:var(--primary);font-weight:600}
.hero h1{font-size:clamp(28px,5vw,42px);font-weight:700;color:var(--primary-dark);line-height:1.2;margin-bottom:16px}
.hero h1 em{color:var(--accent);font-style:normal}
.hero p{font-size:15px;color:var(--text-secondary);line-height:1.75;max-width:800px}
.checklist-badge{display:inline-flex;align-items:center;gap:5px;background:rgba(232,98,42,0.1);color:var(--accent);font-size:11px;font-weight:700;padding:3px 10px;border-radius:999px;letter-spacing:0.3px;margin-left:8px;vertical-align:middle;white-space:nowrap}

/* Trust Bar */
.trust-bar{background:var(--primary-dark);padding:16px 0;margin-bottom:0}
.trust-bar-inner{max-width:1200px;margin:0 auto;padding:0 20px;display:flex;flex-wrap:wrap;justify-content:center;gap:0}
.trust-item{display:flex;flex-direction:column;align-items:center;padding:8px 20px;border-right:1px solid rgba(255,255,255,0.12)}
.trust-item:last-child{border-right:none}
.trust-item-icon{font-size:18px;margin-bottom:3px}
.trust-item-value{font-size:15px;font-weight:700;color:#fff}
.trust-item-label{font-size:11px;color:rgba(255,255,255,0.6);white-space:nowrap}
@media(max-width:600px){.trust-item{padding:8px 12px}.trust-item-value{font-size:13px}}

/* What Is */
.what-is-section{max-width:1200px;margin:0 auto;padding:24px 20px 0}
.what-is-inner{background:var(--card);border-radius:var(--radius-lg);border:1px solid var(--border);padding:24px 28px;box-shadow:var(--shadow-sm)}
.what-is-inner h2{font-size:17px;font-weight:700;color:var(--primary-dark);margin-bottom:10px}
.what-is-inner p{font-size:14px;color:var(--text-secondary);line-height:1.75;margin-bottom:8px}
.what-is-inner p:last-child{margin-bottom:0}
.what-is-tags{display:flex;flex-wrap:wrap;gap:6px;margin-top:12px}
.what-is-tag{font-size:11px;font-weight:600;color:var(--primary);background:rgba(27,43,75,0.07);padding:3px 10px;border-radius:999px}

/* TL;DR */
.tldr{background:var(--card);border-left:4px solid var(--accent);border-radius:0 var(--radius) var(--radius) 0;padding:20px 24px;margin:24px auto 0;max-width:1200px;box-shadow:var(--shadow-sm)}
.tldr-label{font-family:var(--font-mono);font-size:12px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px}
.tldr p{font-size:15px;color:var(--text-secondary);line-height:1.7}

/* Main Layout */
.main-layout{max-width:1200px;margin:0 auto;padding:24px 20px 40px;display:grid;grid-template-columns:1fr;gap:32px}
@media(min-width:900px){.main-layout{grid-template-columns:1fr 320px;gap:40px}}
.content-col{min-width:0}.sidebar-col{min-width:0}

/* Calc Card */
.calc-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);padding:28px 32px;margin-bottom:24px;border:1px solid var(--border)}
.calc-card h2{font-size:20px;font-weight:700;color:var(--primary-dark);margin-bottom:20px}
.calc-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px}
.form-group label{display:block;font-size:12px;font-weight:600;color:var(--text-secondary);margin-bottom:6px;text-transform:uppercase;letter-spacing:0.5px}
.form-group select{width:100%;padding:10px 14px;border:2px solid var(--border);border-radius:var(--radius);font-family:var(--font-body);font-size:14px;color:var(--text);background:var(--surface);transition:border-color 0.2s;outline:none;cursor:pointer}
.form-group select:focus{border-color:var(--primary)}

/* FY Bar */
.fy-bar{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:20px}
.fy-chip{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;border:2px solid var(--border);border-radius:999px;font-size:13px;font-weight:600;color:var(--text-secondary);background:var(--card);cursor:pointer;transition:all 0.2s;font-family:var(--font-body);white-space:nowrap}
.fy-chip:hover{border-color:var(--primary);color:var(--primary)}
.fy-chip.active{background:var(--primary);color:#fff;border-color:var(--primary)}
.now-tag{font-size:9px;font-weight:700;background:var(--accent);color:#fff;padding:1px 6px;border-radius:999px;letter-spacing:0.5px}
.change-badge{font-size:10px;font-weight:700;color:#fff;padding:1px 6px;border-radius:999px;letter-spacing:0.3px}

/* Filter Bar */
.filter-bar{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:16px}
.filter-chip{display:inline-flex;align-items:center;padding:7px 14px;border:2px solid var(--border);border-radius:999px;font-size:13px;font-weight:500;color:var(--text-secondary);background:var(--card);cursor:pointer;transition:all 0.2s;font-family:var(--font-body);white-space:nowrap}
.filter-chip:hover{border-color:var(--primary);color:var(--primary)}
.filter-chip.active{background:var(--primary);color:#fff;border-color:var(--primary)}
@media(max-width:899px){
  #industryBar,#catBar{flex-wrap:nowrap!important;overflow-x:auto;-webkit-overflow-scrolling:touch;scrollbar-width:none;padding-bottom:4px;-ms-overflow-style:none}
  #industryBar::-webkit-scrollbar,#catBar::-webkit-scrollbar{display:none}
  #industryBar .filter-chip,#catBar .filter-chip{flex-shrink:0}
}

/* Active Filter Tags */
.active-filter-tags{display:flex;flex-wrap:wrap;gap:6px;margin-bottom:12px}
.active-filter-tag{display:inline-flex;align-items:center;gap:6px;padding:4px 10px;background:rgba(27,43,75,0.08);color:var(--primary);font-size:12px;font-weight:600;border-radius:999px;border:1px solid rgba(27,43,75,0.15)}
.remove-tag{background:none;border:none;color:var(--text-muted);cursor:pointer;font-size:14px;padding:0;line-height:1;font-family:var(--font-body)}
.remove-tag:hover{color:var(--danger)}

/* Search + toolbar */
.search-wrap{position:relative;flex:1;min-width:200px}
.search-wrap input{width:100%;padding:10px 14px 10px 38px;border:2px solid var(--border);border-radius:999px;font-family:var(--font-body);font-size:14px;color:var(--text);background:var(--card);outline:none;transition:border-color 0.2s}
.search-wrap input:focus{border-color:var(--primary)}
.search-wrap::before{content:'🔍';position:absolute;left:12px;top:50%;transform:translateY(-50%);font-size:14px;pointer-events:none}
.toolbar{display:flex;flex-wrap:wrap;align-items:center;gap:10px;margin-bottom:16px}
.view-toggle{display:flex;border:2px solid var(--border);border-radius:999px;overflow:hidden}
.view-btn{padding:7px 14px;font-size:12px;font-weight:600;background:none;border:none;cursor:pointer;color:var(--text-secondary);transition:all 0.2s;font-family:var(--font-body)}
.view-btn.active{background:var(--primary);color:#fff}
.btn-reset{display:none;align-items:center;gap:5px;padding:7px 14px;background:none;border:2px solid var(--border);border-radius:999px;font-size:12px;font-weight:600;color:var(--text-secondary);cursor:pointer;transition:all 0.2s;font-family:var(--font-body)}
.btn-reset:hover{border-color:var(--danger);color:var(--danger)}
#btnChanged{padding:7px 14px;background:none;border:2px solid var(--border);border-radius:999px;font-size:12px;font-weight:600;color:var(--text-secondary);cursor:pointer;transition:all 0.2s;font-family:var(--font-body)}
#btnChanged.accent-active{background:var(--accent);color:#fff;border-color:var(--accent)}
.result-count-bar{font-size:13px;color:var(--text-muted);margin-bottom:12px}
.result-count-bar .count-num{font-weight:700;color:var(--primary);font-size:15px}

/* Compliance Grid */
.comp-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:14px}
.comp-card{background:var(--card);border-radius:var(--radius);border:1px solid var(--border);padding:14px 16px;cursor:pointer;transition:all 0.2s;position:relative;box-shadow:var(--shadow-sm)}
.comp-card:hover{border-color:var(--primary);box-shadow:var(--shadow-md);transform:translateY(-2px)}
.comp-card.has-change{border-left:3px solid var(--accent)}
.change-badges{display:flex;align-items:center;gap:6px;margin-bottom:8px}
.comp-icon{font-size:20px;flex-shrink:0;margin-top:1px}
.comp-name{font-size:14px;font-weight:700;color:var(--primary-dark);line-height:1.35;margin-bottom:3px}
.comp-desc{font-size:12px;color:var(--text-muted);line-height:1.5;margin-bottom:8px}
.card-due{display:inline-flex;align-items:center;gap:4px;margin-bottom:8px}
.due-label{font-size:11px;font-weight:600;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.3px}
.due-val{font-size:12px;font-weight:700;color:var(--accent)}
.comp-tags{display:flex;flex-wrap:wrap;gap:5px;align-items:center}
.tag{font-size:10px;font-weight:600;padding:2px 8px;border-radius:6px}
.tag-freq{background:var(--surface-alt);color:var(--text-secondary)}
.tag-form{font-family:var(--font-mono);font-size:10px;background:rgba(27,43,75,0.07);color:var(--primary-light);padding:2px 7px;border-radius:6px}
.tag-turnover{background:#FEF3C7;color:#92400E;font-size:10px;font-weight:600;padding:2px 8px;border-radius:6px}
.tag-emp{background:#D1FAE5;color:#065F46;font-size:10px;font-weight:600;padding:2px 8px;border-radius:6px}
.pri-badge{display:inline-flex;align-items:center;gap:4px;font-size:10px;font-weight:700;padding:2px 8px;border-radius:6px;text-transform:uppercase;letter-spacing:0.3px}
.pri-dot-sm{width:6px;height:6px;border-radius:50%;flex-shrink:0}
.pri-critical{background:#FEE2E2;color:#991B1B}
.pri-high{background:#FEF3C7;color:#92400E}
.pri-medium{background:#DBEAFE;color:#1E40AF}
.pri-low{background:#F3F4F6;color:#4B5563}
.comp-changes{margin-top:10px;padding-top:10px;border-top:1px solid var(--border)}
.comp-change-line{display:flex;align-items:center;gap:6px;font-size:11px;margin-bottom:4px;min-width:0}
.cdot{width:6px;height:6px;border-radius:50%;flex-shrink:0}

/* Severity Badges */
.sev-badge{display:inline-flex;align-items:center;gap:4px;font-size:10px;font-weight:700;padding:2px 8px;border-radius:6px;text-transform:uppercase;letter-spacing:0.3px}
.sev-badge .dot{width:5px;height:5px;border-radius:50%;flex-shrink:0}
.sev-critical{background:#FEE2E2;color:#991B1B}.sev-critical .dot{background:#DC2626}
.sev-major{background:#FEF3C7;color:#92400E}.sev-major .dot{background:#F59E0B}
.sev-minor{background:#D1FAE5;color:#065F46}.sev-minor .dot{background:#059669}
.sev-info{background:#DBEAFE;color:#1E40AF}.sev-info .dot{background:#3B82F6}
.delta-badge{font-size:10px;font-weight:700;padding:2px 7px;border-radius:6px;background:var(--surface-alt);color:var(--text-muted)}

/* Calendar View */
.cal-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
@media(max-width:899px){.cal-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:480px){.cal-grid{grid-template-columns:1fr}}
.cal-month{background:var(--card);border-radius:var(--radius);border:1px solid var(--border);overflow:hidden}
.cal-month.is-today{border-color:var(--accent);box-shadow:0 0 0 2px rgba(232,98,42,0.15)}
.cal-month-head{display:flex;align-items:center;justify-content:space-between;padding:10px 14px;background:var(--primary-dark);gap:8px}
.cal-month-name{font-size:14px;font-weight:700;color:#fff;display:flex;align-items:center;gap:7px}
.cal-today-tag{font-size:9px;font-weight:700;background:var(--accent);color:#fff;padding:1px 6px;border-radius:999px}
.cal-month-count{font-size:11px;font-weight:700;padding:2px 8px;border-radius:999px;min-width:22px;text-align:center}
.cal-month-body{padding:8px}
.cal-item{padding:7px 9px;margin-bottom:5px;border-radius:8px;background:var(--surface);cursor:pointer;border-left:3px solid #ccc;transition:all 0.15s}
.cal-item:hover{background:var(--surface-alt)}
.cal-item.changed{border-left-color:var(--accent)}
.cal-item-name{font-size:12px;font-weight:600;color:var(--primary-dark);line-height:1.3}
.cal-item-meta{font-size:11px;color:var(--text-muted);margin-top:2px}

/* Empty State */
#emptyState{display:none;text-align:center;padding:48px 20px;background:var(--card);border-radius:var(--radius-lg);border:1px dashed var(--border)}
#emptyState h3{font-size:18px;color:var(--text-secondary);margin-bottom:8px}
#emptyState p{font-size:14px;color:var(--text-muted);margin-bottom:16px}

/* Result grid */
.result-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-bottom:20px}
.result-card{background:var(--card);border-radius:var(--radius);border:1px solid var(--border);padding:14px 16px;text-align:center}
.result-card-value{font-size:28px;font-weight:800;color:var(--primary-dark);font-family:var(--font-mono);line-height:1.1}
.result-card-label{font-size:11px;color:var(--text-muted);margin-top:4px;font-weight:500}

/* Download Bar */
.download-bar{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:20px;align-items:center}
.dl-btn{display:inline-flex;align-items:center;gap:7px;padding:10px 20px;border-radius:999px;font-family:var(--font-body);font-size:13px;font-weight:700;text-decoration:none;cursor:pointer;border:2px solid transparent;transition:all 0.2s;white-space:nowrap}
.dl-btn.primary{background:var(--accent);color:#fff;border-color:var(--accent)}
.dl-btn.primary:hover{background:#d4571f;border-color:#d4571f}
.dl-btn.secondary{background:var(--card);color:var(--primary);border-color:var(--border)}
.dl-btn.secondary:hover{border-color:var(--primary)}
.dl-btn svg{width:15px;height:15px;flex-shrink:0}
.dl-btn.loading{opacity:0.7;pointer-events:none}
@media(max-width:480px){.download-bar{flex-direction:column}.download-bar .dl-btn{width:100%;justify-content:center}.download-bar .dl-btn.primary{order:-1}}

/* WC CTA */
.wc-cta-bar{display:flex;align-items:flex-start;flex-wrap:wrap;gap:10px;padding:14px 16px;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-light) 100%);border-radius:var(--radius);margin-bottom:20px;color:#fff}
.wc-cta-text{flex:1;min-width:0;font-size:13px;color:rgba(255,255,255,0.85);line-height:1.5}
.wc-cta-text strong{color:#fff}
.btn-wc{display:inline-flex;align-items:center;gap:6px;padding:9px 16px;background:var(--accent);color:#fff;border-radius:999px;font-size:12px;font-weight:700;cursor:pointer;border:none;font-family:var(--font-body);transition:all 0.2s;white-space:nowrap}
.btn-wc:hover{background:#d4571f}
#changedCount{font-weight:800;color:#fff}

/* Content Sections */
.content-section{background:var(--card);border-radius:var(--radius-lg);border:1px solid var(--border);padding:24px 28px;margin-bottom:24px;box-shadow:var(--shadow-sm)}
.content-section h2{font-size:20px;font-weight:700;color:var(--primary-dark);margin-bottom:16px}
.content-section h3{font-size:16px;font-weight:700;color:var(--primary-dark);margin:18px 0 10px}
.callout{background:#EFF6FF;border-left:4px solid var(--info);border-radius:0 var(--radius) var(--radius) 0;padding:14px 18px;margin:14px 0}
.callout p{color:#1E40AF;margin-bottom:0;font-size:14px;line-height:1.7}
.callout.warn{background:#FFFBEB;border-left-color:var(--accent)}
.callout.warn p{color:#92400E}
.rate-table{width:100%;border-collapse:collapse;margin:14px 0;font-size:14px}
.rate-table thead th{background:var(--primary);color:#fff;padding:10px 14px;text-align:left;font-weight:600;font-size:12px;text-transform:uppercase;letter-spacing:0.3px}
.rate-table tbody td{padding:10px 14px;border-bottom:1px solid var(--border);color:var(--text-secondary);font-size:13px}
.rate-table tbody tr:nth-child(even){background:var(--surface)}
.rate-table tbody tr:hover{background:var(--surface-alt)}
.geo-prose{background:var(--surface-alt);border-radius:var(--radius);padding:14px 18px;margin-bottom:16px;border-left:3px solid var(--primary)}
.geo-prose p{font-size:13px;color:var(--text-secondary);line-height:1.75;margin:0}

/* Month table */
.month-table-wrap{overflow-x:auto;-webkit-overflow-scrolling:touch}
.month-table{width:100%;border-collapse:collapse;font-size:13px;min-width:700px}
.month-table thead th{background:var(--primary);color:#fff;padding:10px 14px;font-size:12px;font-weight:700;text-align:left;letter-spacing:0.3px}
.month-table tbody td{padding:9px 14px;border-bottom:1px solid var(--border);color:var(--text-secondary);vertical-align:top;line-height:1.6}
.month-table tbody tr:nth-child(even){background:var(--surface)}
.month-table-note{font-size:12px;color:var(--text-muted);margin-top:8px;font-style:italic}
details summary{cursor:pointer;font-weight:600;font-size:15px;color:var(--primary);padding:4px 0;list-style:none}
details summary::marker,details summary::-webkit-details-marker{display:none}
details summary::before{content:'▶';font-size:10px;margin-right:8px;transition:transform 0.2s;display:inline-block}
details[open] summary::before{transform:rotate(90deg)}

/* FAQs */
.faq-item{border-bottom:1px solid var(--border)}
.faq-item:first-of-type{border-top:1px solid var(--border)}
.faq-question{width:100%;background:none;border:none;text-align:left;padding:16px 0;cursor:pointer;display:flex;align-items:center;justify-content:space-between;gap:12px;font-family:var(--font-body)}
.faq-question span:first-child{font-size:15px;font-weight:600;color:var(--primary-dark);line-height:1.4}
.faq-icon{font-size:20px;font-weight:400;color:var(--text-muted);flex-shrink:0;transition:transform 0.2s}
.faq-item.open .faq-icon{transform:rotate(45deg);color:var(--accent)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.35s ease}
.faq-item.open .faq-answer{max-height:400px}
.faq-answer-inner{padding:0 0 16px;font-size:14px;color:var(--text-secondary);line-height:1.75}

/* Sidebar */
.sidebar-card{background:var(--card);border-radius:var(--radius-lg);border:1px solid var(--border);padding:20px;margin-bottom:20px;box-shadow:var(--shadow-sm)}
.sidebar-card-head{font-size:14px;font-weight:700;color:var(--primary-dark);margin-bottom:14px;padding-bottom:10px;border-bottom:1px solid var(--border)}
.sidebar-stat{display:flex;justify-content:space-between;align-items:center;padding:8px 0;border-bottom:1px solid var(--surface)}
.sidebar-stat:last-child{border-bottom:none}
.sidebar-stat-label{font-size:12px;color:var(--text-muted)}
.sidebar-stat-value{font-size:14px;font-weight:700;color:var(--primary-dark);font-family:var(--font-mono)}
.cta-card{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary-light) 100%);border-radius:var(--radius-lg);padding:20px;margin-bottom:20px;color:#fff}
.cta-card h3{font-size:15px;font-weight:700;color:#fff;margin-bottom:6px}
.cta-card p{font-size:12px;color:rgba(255,255,255,0.75);line-height:1.5;margin-bottom:12px}
.contact-cluster{display:flex;gap:8px;flex-wrap:wrap}
.cc-btn{display:inline-flex;align-items:center;justify-content:center;gap:6px;padding:9px 14px;border-radius:999px;font-family:var(--font-body);font-size:12px;font-weight:700;text-decoration:none;transition:all 0.2s;border:2px solid transparent;white-space:nowrap;flex:1;min-width:0}
.cc-btn-wa{background:#25D366;color:#fff;border-color:#25D366}
.cc-btn-wa:hover{background:#22bf5b;border-color:#22bf5b}
.cc-btn-phone{background:rgba(255,255,255,0.10);color:#fff;border-color:rgba(255,255,255,0.50)}
.cc-btn-phone:hover{background:#fff;color:var(--primary-dark);border-color:#fff}
.cc-btn-email{background:rgba(255,255,255,0.10);color:#fff;border-color:rgba(255,255,255,0.50)}
.cc-btn-email:hover{background:#fff;color:var(--primary-dark);border-color:#fff}
.contact-note{font-size:11px;color:rgba(255,255,255,0.55);margin-top:8px;text-align:center;display:block}
@media(max-width:380px){.contact-cluster{flex-direction:column}.cc-btn{flex:none;width:100%}}

/* Drawer */
.drawer-overlay{position:fixed;inset:0;z-index:500;display:flex;align-items:stretch;pointer-events:none;opacity:0;transition:opacity 0.25s}
.drawer-overlay.open{pointer-events:all;opacity:1}
.drawer-backdrop{position:absolute;inset:0;background:rgba(0,0,0,0.4)}
.drawer-panel{position:relative;width:420px;max-width:100%;margin-left:auto;background:var(--card);overflow-y:auto;transform:translateX(100%);transition:transform 0.3s cubic-bezier(0.4,0,0.2,1);height:100%;-webkit-overflow-scrolling:touch}
.drawer-overlay.open .drawer-panel{transform:translateX(0)}
@media(max-width:480px){.drawer-panel{width:100%}}
.drawer-head{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);padding:24px 20px 20px;position:relative}
.drawer-close{position:absolute;top:16px;right:16px;background:rgba(255,255,255,0.15);color:#fff;border:none;width:30px;height:30px;border-radius:50%;cursor:pointer;font-size:16px;display:flex;align-items:center;justify-content:center;transition:background 0.2s;font-family:var(--font-body)}
.drawer-close:hover{background:rgba(255,255,255,0.25)}
.drawer-cat{font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:1px;margin-bottom:6px;opacity:0.8}
.drawer-title{font-size:20px;font-weight:700;color:#fff;line-height:1.3;margin-bottom:6px}
.drawer-desc{font-size:13px;color:rgba(255,255,255,0.75);line-height:1.5}
.drawer-body{padding:20px}
.detail-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:20px}
.detail-cell{background:var(--surface);border-radius:var(--radius);padding:10px 12px}
.detail-cell-label{font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:3px}
.detail-cell-value{font-size:13px;font-weight:600;color:var(--primary-dark)}
.active-rules-box{background:var(--surface);border-radius:var(--radius);padding:14px;margin-bottom:16px}
.rule-key{font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.5px;color:var(--text-muted);margin-bottom:3px}
.rule-val{font-size:14px;font-weight:700;color:var(--primary-dark);margin-bottom:3px}
.rule-desc{font-size:12px;color:var(--text-secondary)}
.change-card{padding:12px;border-radius:var(--radius);margin-bottom:8px}
.change-val{font-size:14px;font-weight:700;margin:4px 0}
.change-desc{font-size:13px;line-height:1.5;color:var(--text-secondary)}
.change-gazette{font-size:11px;color:var(--text-muted);margin-top:4px}
.change-notif{font-size:12px;font-weight:700;margin-top:4px}
.version-box{border:1px solid var(--border);border-radius:var(--radius);overflow:hidden;margin-bottom:16px}
.ver-entry{display:flex;gap:10px;padding:10px 12px;border-bottom:1px solid var(--border)}
.ver-entry:last-child{border-bottom:none}
.ver-entry.current{background:rgba(27,43,75,0.04)}
.ver-entry.past{opacity:0.7}
.ver-fy{font-size:10px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:3px}
.ver-current-tag{background:var(--accent);color:#fff;font-size:9px;font-weight:700;padding:1px 5px;border-radius:999px;margin-left:6px;letter-spacing:0.3px}
.ver-val{font-size:13px;font-weight:600;color:var(--primary-dark);margin-bottom:2px}
.ver-desc{font-size:12px;color:var(--text-secondary)}
.ver-gazette{font-size:11px;color:var(--text-muted);margin-top:3px}
.wa-cta{display:flex;align-items:center;justify-content:center;gap:8px;width:100%;padding:14px;background:#25D366;color:#fff;border-radius:var(--radius);font-size:14px;font-weight:700;text-decoration:none;margin-top:16px;transition:background 0.2s}
.wa-cta:hover{background:#22bf5b}
.drawer-nav{display:flex;align-items:center;justify-content:space-between;padding:12px 20px;border-bottom:1px solid var(--border);background:var(--surface)}
.drawer-nav-btn{padding:7px 14px;border:1.5px solid var(--border);border-radius:999px;font-size:12px;font-weight:600;cursor:pointer;background:var(--card);color:var(--text-secondary);transition:all 0.2s;font-family:var(--font-body)}
.drawer-nav-btn:hover:not(:disabled){border-color:var(--primary);color:var(--primary)}
.drawer-nav-btn:disabled{opacity:0.4;cursor:not-allowed}
.drawer-nav-counter{font-size:12px;color:var(--text-muted);font-weight:600}

/* Modal (What Changed) */
.modal-overlay{position:fixed;inset:0;z-index:500;display:flex;align-items:center;justify-content:center;padding:20px;pointer-events:none;opacity:0;transition:opacity 0.25s}
.modal-overlay.open{pointer-events:all;opacity:1}
.modal-backdrop{position:absolute;inset:0;background:rgba(0,0,0,0.5)}
.modal-panel{position:relative;width:600px;max-width:100%;max-height:85vh;background:var(--card);border-radius:var(--radius-lg);overflow:hidden;display:flex;flex-direction:column;transform:scale(0.95);transition:transform 0.25s;box-shadow:0 20px 60px rgba(0,0,0,0.15)}
.modal-overlay.open .modal-panel{transform:scale(1)}
.modal-head{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);padding:24px 20px 20px;flex-shrink:0;position:relative}
.modal-head h2{font-size:22px;font-weight:700;color:#fff;margin-top:8px}
.modal-body{overflow-y:auto;padding:20px;flex:1}
.wc-cat-head{display:flex;align-items:center;gap:8px;margin-bottom:10px}
.wc-cat-name{font-size:16px;font-weight:700;color:var(--primary-dark)}
.wc-cat-count{font-size:12px;font-weight:700;padding:2px 8px;border-radius:999px;background:var(--surface-alt);color:var(--text-muted)}
.wc-item{padding:12px;border-radius:var(--radius);margin-bottom:8px;cursor:pointer;transition:opacity 0.2s}
.wc-item:hover{opacity:0.85}

/* Phone Gate */
.email-gate-overlay{position:fixed;inset:0;z-index:600;display:flex;align-items:center;justify-content:center;padding:20px;background:rgba(0,0,0,0.55);opacity:0;pointer-events:none;transition:opacity 0.25s}
.email-gate-overlay.open{opacity:1;pointer-events:all}
.email-gate-box{background:var(--card);border-radius:var(--radius-lg);padding:32px 28px;max-width:400px;width:100%;text-align:center;box-shadow:0 20px 60px rgba(0,0,0,0.2);position:relative;max-height:90vh;overflow-y:auto}
.email-gate-close{position:absolute;top:14px;right:14px;background:var(--surface);border:none;width:28px;height:28px;border-radius:50%;cursor:pointer;font-size:14px;display:flex;align-items:center;justify-content:center;color:var(--text-muted);transition:background 0.2s;font-family:var(--font-body)}
.email-gate-close:hover{background:var(--surface-alt)}
.email-gate-box h3{font-size:20px;font-weight:700;color:var(--primary-dark);margin-bottom:8px}
.email-gate-box p{font-size:14px;color:var(--text-secondary);line-height:1.6;margin-bottom:16px}
.email-gate-perks{display:flex;flex-wrap:wrap;justify-content:center;gap:8px;margin-bottom:20px}
.email-gate-perk{font-size:12px;font-weight:600;color:var(--success);background:#D1FAE5;padding:4px 10px;border-radius:999px}

/* Phone gate row */
.phone-gate-row{display:flex;align-items:center;gap:0;border:2px solid var(--border);border-radius:var(--radius);overflow:hidden;margin-bottom:8px;transition:border-color 0.2s}
.phone-gate-row:focus-within{border-color:var(--primary)}
.phone-gate-row.error{border-color:var(--danger)}
.phone-gate-prefix{padding:0 12px;font-size:14px;font-weight:700;color:var(--primary);background:var(--surface);white-space:nowrap;line-height:44px;border-right:1px solid var(--border);flex-shrink:0}
.phone-gate-input{flex:1;border:none!important;outline:none;font-family:var(--font-body);font-size:16px;padding:10px 14px;background:var(--card);color:var(--text);min-width:0}
.phone-gate-hint{font-size:12px;color:var(--danger);min-height:18px;margin-bottom:8px;text-align:left}
.phone-gate-escape{display:block;font-size:12px;color:var(--primary-light);text-decoration:underline;cursor:pointer;background:none;border:none;font-family:var(--font-body);text-align:center;width:100%;margin-bottom:14px}
.phone-gate-escape:hover{color:var(--primary)}
.email-gate-submit{width:100%;padding:14px;background:#25D366;color:#fff;border:none;border-radius:var(--radius);font-size:15px;font-weight:700;cursor:pointer;transition:background 0.2s;font-family:var(--font-body);margin-bottom:10px}
.email-gate-submit:hover{background:#22bf5b}
.email-gate-skip{width:100%;padding:10px;background:none;color:var(--text-muted);border:none;font-size:13px;cursor:pointer;transition:color 0.2s;font-family:var(--font-body);text-decoration:underline}
.email-gate-skip:hover{color:var(--primary)}

/* WhatsApp Strip */
.wa-strip{position:fixed;bottom:0;left:0;right:0;z-index:200;background:#25D366;box-shadow:0 -2px 12px rgba(0,0,0,0.12)}
.wa-strip.hidden{display:none}
.wa-strip-inner{max-width:1200px;margin:0 auto;display:flex;flex-direction:column;padding:7px 14px 9px;gap:6px}
.wa-strip-top{display:flex;align-items:center;gap:10px;min-width:0}
.wa-strip-icon{font-size:18px;flex-shrink:0}
.wa-strip-copy{flex:1;min-width:0}
.wa-strip-copy strong{display:block;font-size:13px;font-weight:700;color:#fff;line-height:1.3}
.wa-strip-copy span{font-size:11px;color:rgba(255,255,255,0.8)}
.wa-strip-close{background:rgba(255,255,255,0.2);border:none;color:#fff;width:24px;height:24px;border-radius:50%;cursor:pointer;font-size:16px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-family:var(--font-body);margin-left:auto}
.wa-strip-bottom{display:flex;justify-content:center}
.wa-strip-btn{display:inline-flex;align-items:center;gap:6px;padding:8px 18px;background:rgba(255,255,255,0.15);color:#fff;border-radius:999px;font-size:13px;font-weight:700;text-decoration:none;border:1.5px solid rgba(255,255,255,0.4);transition:background 0.2s;width:100%;justify-content:center}
.wa-strip-btn:hover{background:rgba(255,255,255,0.25)}
@media(min-width:601px){
  .wa-strip-inner{flex-direction:row;align-items:center;padding:10px 20px;gap:14px}
  .wa-strip-top{flex:1;padding:0}
  .wa-strip-bottom{padding:0;flex-shrink:0;width:auto}
  .wa-strip-btn{width:auto}
  .wa-strip-close{order:3}
  body{padding-bottom:60px}
}

/* CTA Banner */
.cta-banner{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary-light) 100%);padding:28px 32px;max-width:1200px;margin:0 auto 24px;border-radius:var(--radius-lg);display:flex;align-items:center;gap:24px;flex-wrap:wrap}
.cta-banner h3{font-size:20px;font-weight:700;color:#fff;margin-bottom:6px}
.cta-banner p{font-size:13px;color:rgba(255,255,255,0.8);line-height:1.5;margin:0}
.cta-banner-content{flex:1;min-width:0}
.cta-banner-actions{display:flex;flex-direction:column;align-items:flex-end;gap:0;flex-shrink:0;min-width:200px}
@media(max-width:600px){.cta-banner{padding:20px 16px;flex-direction:column}.cta-banner-actions{align-items:stretch;width:100%}.cta-banner-actions .contact-note{text-align:center}}

/* Related Guides */
.related-guides{max-width:1200px;margin:0 auto;padding:0 20px 40px}
.related-guides-head{display:flex;align-items:center;margin-bottom:16px}
.rg-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
.rg-card{background:var(--card);border:1px solid var(--border);border-radius:var(--radius);padding:16px 18px;text-decoration:none;display:flex;flex-direction:column;gap:5px;transition:all 0.2s;box-shadow:var(--shadow-sm)}
.rg-card:hover{border-color:var(--primary);box-shadow:var(--shadow-md);transform:translateY(-2px)}
.rg-card-label{font-size:10px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:0.8px}
.rg-card-title{font-size:14px;font-weight:700;color:var(--primary-dark);line-height:1.4}
.rg-card-desc{font-size:12px;color:var(--text-muted);line-height:1.5}
.rg-card-arrow{font-size:12px;color:var(--accent);font-weight:700;margin-top:auto;padding-top:5px}
@media(max-width:899px){.rg-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:480px){.rg-grid{grid-template-columns:1fr}}

/* Responsive */
@media(max-width:899px){
  .main-layout{grid-template-columns:1fr!important;gap:24px}
  .sidebar-col{order:2}.content-col{order:1}
  .calc-card{padding:18px 20px}
  .calc-row{grid-template-columns:1fr}
  .result-grid{grid-template-columns:1fr 1fr 1fr}
  .comp-grid{grid-template-columns:1fr}
}
@media(max-width:480px){
  .hero{padding:20px 14px 16px}
  .hero h1{font-size:22px}
  .tldr{padding:16px 18px;margin:14px 14px 0}
  .main-layout{padding:16px 14px 24px}
  .calc-card{padding:16px}
  .result-grid{grid-template-columns:1fr}
  .comp-grid{grid-template-columns:1fr}
  .filter-chip{font-size:12px;padding:6px 12px}
  .fy-chip{font-size:12px;padding:6px 12px}
  .what-is-inner{padding:18px 16px}
  .meta-strip{gap:8px}
}

/* Print */
@media print{
  .wa-strip,.cta-banner,.email-gate-overlay,.drawer-overlay,.modal-overlay{display:none!important}
  .toc-nav,.calc-card,.fy-bar,.view-toggle,.filter-bar,.search-wrap,.sidebar-col,.dl-btn,.wc-cta-bar,.download-bar{display:none!important}
  .main-layout{grid-template-columns:1fr!important}
  .comp-grid{grid-template-columns:1fr 1fr!important}
  .comp-card{break-inside:avoid;box-shadow:none!important;border:1px solid #ccc!important}
  body{background:#fff!important}
  @page{margin:1.5cm}
}
</style>

<!-- TOC Nav -->
<nav class="toc-nav" aria-label="Page Navigation">
  <div class="toc-nav-inner">
    <a href="#profile">Profile</a>
    <a href="#calendar">Calendar</a>
    <a href="#gst-deadlines">GST</a>
    <a href="#income-tax-deadlines">Income Tax</a>
    <a href="#tds-tcs">TDS/TCS</a>
    <a href="#mca-roc">MCA/ROC</a>
    <a href="#sebi-compliance">SEBI</a>
    <a href="#fema-rbi">FEMA/RBI</a>
    <a href="#pf-esi">PF/ESI</a>
    <a href="#fy-changes">What Changed</a>
    <a href="#penalties">Penalties</a>
    <a href="#faqs">FAQs</a>
  </div>
</nav>
{{-- 
<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <a href="/">Home</a><span>&rsaquo;</span>
  <a href="#">Free Tools</a><span>&rsaquo;</span>
  India Compliance Calendar
</nav> --}}

<!-- Meta strip -->
<div class="meta-strip">
  <div class="meta-strip-date">Last updated: <strong>March 2026</strong></div>
  <span class="meta-strip-divider">·</span>
  <div class="meta-strip-author">
    <a href="/authorhub/ca-sundaram-gupta" class="author-avatar" aria-label="CA Sundram Gupta profile">SG</a>
    <div class="author-info">
      <strong><a href="/authorhub/ca-sundaram-gupta" style="color:inherit;text-decoration:none">CA Sundram Gupta</a></strong>
      <span>Fellow Chartered Accountant &middot; Patron Accounting LLP</span>
      <div><span class="author-cred">&#10003; ICAI Registered</span> <span class="author-cred">&#10003; FCA</span> <span class="author-cred">&#10003; 15+ Yrs</span></div>
    </div>
  </div>
  <span class="meta-strip-divider">·</span>
  <button class="share-btn" onclick="shareCalendar()" aria-label="Share this page">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
    Share
  </button>
</div>

<main id="main-content">
<!-- Hero -->
<header class="hero" id="profile">
  <div class="section-label">India Compliance Tool &mdash; FY 2025-26</div>
  <div class="hero-meta">
    <span class="badge-updated">Updated March 2026</span>
    <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
  </div>
  <h1>India Compliance Calendar — FY 2025-26</h1>
  <p>Track <strong id="heroCount">–</strong> compliances across 12 regulators including GST, Income Tax, TDS, MCA, SEBI, FEMA &amp; RBI. Filter by industry, turnover, employee count and entity type to see exactly what applies to your business.</p>
</header>

<!-- Trust Bar -->
<div class="trust-bar" role="region" aria-label="Patron Accounting credentials">
  <div class="trust-bar-inner">
    <div class="trust-item"><div class="trust-item-icon">😊</div><div class="trust-item-value">10,000+</div><div class="trust-item-label">Happy Clients</div></div>
    <div class="trust-item"><div class="trust-item-icon">⏳</div><div class="trust-item-value">15+ Yrs</div><div class="trust-item-label">Experience</div></div>
    <div class="trust-item"><div class="trust-item-icon">📑</div><div class="trust-item-value">50,000+</div><div class="trust-item-label">Documents Filed</div></div>
    <div class="trust-item"><div class="trust-item-icon">⭐</div><div class="trust-item-value">4.9★</div><div class="trust-item-label">Client Rating</div></div>
    <div class="trust-item"><div class="trust-item-icon">🏅</div><div class="trust-item-value">ISO</div><div class="trust-item-label">Certified</div></div>
    <div class="trust-item"><div class="trust-item-icon">🔒</div><div class="trust-item-value">SSL</div><div class="trust-item-label">Secure</div></div>
  </div>
</div>

<!-- What Is -->
<div class="what-is-section">
  <div class="what-is-inner">
    <div class="section-label">About This Tool</div>
    <h2>What is a Compliance Calendar?</h2>
    <p>A <strong>compliance calendar</strong> is a structured schedule of all statutory filing deadlines, tax due dates, and regulatory obligations applicable to a business in a given financial year. For Indian businesses, it covers <a href="/gst-returns" style="color:var(--accent);text-decoration:none;font-weight:600">GST returns</a>, <a href="/income-tax-return" style="color:var(--accent);text-decoration:none;font-weight:600">income tax filing</a> last dates, TDS due dates, <a href="/private-limited-company-compliance" style="color:var(--accent);text-decoration:none;font-weight:600">MCA/ROC annual filings</a>, SEBI disclosure deadlines, <a href="/fdi-compliance" style="color:var(--accent);text-decoration:none;font-weight:600">FEMA/RBI compliance</a>, and <a href="/payroll-processing-and-management-services" style="color:var(--accent);text-decoration:none;font-weight:600">payroll and PF/ESI obligations</a> — all in one place.</p>
    <p>This free tool, built and maintained by practising Chartered Accountants at Patron Accounting LLP, lets you filter 109 compliances by entity type, turnover, industry, employee count, and state. It also tracks regulatory changes across five financial years (FY 2023-24 to FY 2027-28) with gazette references — making it India's most comprehensive interactive compliance checklist for SMEs, startups, freelancers, foreign subsidiaries, and listed companies.</p>
    <div class="what-is-tags">
      <span class="what-is-tag">GST Due Dates</span>
      <span class="what-is-tag">Income Tax Filing</span>
      <span class="what-is-tag">TDS Calendar</span>
      <span class="what-is-tag">MCA Deadlines</span>
      <span class="what-is-tag">SEBI LODR</span>
      <span class="what-is-tag">FEMA Compliance</span>
      <span class="what-is-tag">EPF ESI</span>
      <span class="what-is-tag">FY 2025-26</span>
    </div>
  </div>
</div>

<!-- TL;DR -->
<div class="tldr">
  <div class="tldr-label">TL;DR &mdash; FY <span id="tldrFy">2025-26</span></div>
  <p id="tldrText">E-invoicing now mandatory for ALL GST-registered businesses. New tax regime default with nil tax up to ₹12 Lakh. ITR-U window extended to 48 months. Major TDS rationalization under Finance Act 2025. SEBI CSCRF cybersecurity framework mandatory from April 2025. Use filters below to see exactly what applies to your business.</p>
</div>

<!-- Main Layout -->
<div class="main-layout">
<div class="content-col">

<!-- Profile Card -->
<div class="calc-card" id="calendar">
  <div class="section-label">Step 1 — Set Your Business Profile</div>
  <h2>Your Business Profile</h2>

  <!-- FY Bar -->
  <div style="margin-bottom:20px">
    <div style="font-size:12px;font-weight:600;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:8px">Financial Year</div>
    <div class="fy-bar" id="fyBar"></div>
  </div>

  <!-- Dropdowns -->
  <div class="calc-row">
    <div class="form-group">
      <label for="fEntity">Entity Type</label>
      <select id="fEntity"><option value="">All Entities</option></select>
    </div>
    <div class="form-group">
      <label for="fTurnover">Annual Turnover</label>
      <select id="fTurnover"><option value="all">Any Turnover</option></select>
    </div>
  </div>
  <div class="calc-row">
    <div class="form-group">
      <label for="fEmployees">Employees</label>
      <select id="fEmployees"><option value="all">Any Headcount</option></select>
    </div>
    <div class="form-group">
      <label for="fState">State</label>
      <select id="fState"><option value="all">All India</option></select>
    </div>
  </div>

  <!-- Industry -->
  <div style="margin-bottom:16px">
    <div style="font-size:12px;font-weight:600;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:8px">Industry</div>
    <div class="filter-bar" id="industryBar"></div>
  </div>

  <!-- Category -->
  <div>
    <div style="font-size:12px;font-weight:600;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:8px">Category</div>
    <div class="filter-bar" id="catBar"></div>
  </div>
</div>

<!-- Results -->
<div class="result-grid">
  <div class="result-card"><div class="result-card-value" id="rApplicable">–</div><div class="result-card-label">Applicable</div></div>
  <div class="result-card"><div class="result-card-value" id="rChanges">–</div><div class="result-card-label">FY Changes</div></div>
  <div class="result-card"><div class="result-card-value" id="rCritical">–</div><div class="result-card-label">Critical</div></div>
</div>

<!-- Download Bar -->
<div class="download-bar">
  <button class="dl-btn primary" id="btnPDF" onclick="downloadPDF()">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 10v6m0 0l-3-3m3 3l3-3"/><path d="M3 15v4a2 2 0 002 2h14a2 2 0 002-2v-4"/><path d="M3 7V5a2 2 0 012-2h3.5L11 6h8a2 2 0 012 2v3"/></svg>
    Download PDF
  </button>
  <button class="dl-btn secondary" id="btnShare" onclick="shareCalendar()">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
    Share
  </button>
</div>

<!-- WC CTA -->
<div class="wc-cta-bar" id="fy-changes">
  <div class="wc-cta-text"><strong><span id="changedCount">–</span> compliances changed</strong> in FY <span id="wcFy">2025-26</span>. <span id="wcCtaText"></span></div>
  <button class="btn-wc" onclick="openWhatChanged()">See What Changed →</button>
</div>

<!-- Toolbar -->
<div class="toolbar">
  <div class="search-wrap">
    <input type="text" id="fSearch" placeholder="Search compliances…" oninput="applyFilters()" aria-label="Search compliances">
  </div>
  <div class="view-toggle">
    <button class="view-btn active" onclick="setView('grid',this)" aria-label="Grid view">⊞ Grid</button>
    <button class="view-btn" onclick="setView('cal',this)" aria-label="Calendar view">📅 Cal</button>
  </div>
  <button id="btnChanged" onclick="toggleChanged()" title="Show only changed compliances">⚡ Changed</button>
  <button class="btn-reset" id="btnReset" onclick="clearAll()">✕ Clear</button>
</div>

<!-- Active Tags -->
<div class="active-filter-tags" id="activeFilters"></div>

<!-- Result count -->
<div class="result-count-bar" id="resultCountBar"></div>

<!-- Grid / Calendar -->
<div class="comp-grid" id="gridView" style="display:none"></div>
<div class="cal-grid" id="calView" style="display:none"></div>
<div id="emptyState"><h3>No compliances match</h3><p>Try adjusting your filters above.</p><button class="dl-btn secondary" style="margin:0 auto" onclick="clearAll()">Clear All Filters</button></div>

<!-- CONTENT SECTIONS -->

<!-- GST -->
<section class="content-section" id="gst-deadlines">
  <div class="section-label">GST</div>
  <h2>GST Due Dates — FY 2025-26</h2>
  <div class="geo-prose"><p>For FY 2025-26, the most significant GST change is mandatory e-invoicing for all GST-registered businesses regardless of turnover — a landmark expansion from the earlier ₹5 Crore threshold. The Invoice Management System (IMS) is now fully operational, requiring monthly action on inward invoices before the GSTR-2B lock date of the 14th to claim Input Tax Credit correctly. File all GST returns on the <a href="https://gst.gov.in" target="_blank" rel="noopener">official GST portal (gst.gov.in)</a> and generate e-invoices via the <a href="https://einvoice1.gst.gov.in" target="_blank" rel="noopener">IRP at einvoice1.gst.gov.in</a>.</p></div>
  <table class="rate-table"><thead><tr><th>Return</th><th>Frequency</th><th>Due Date</th><th>Applicable</th><th>Penalty</th></tr></thead>
  <tbody>
  <tr><td><strong>GSTR-1</strong></td><td>Monthly</td><td>11th of next month</td><td>Turnover &gt;₹5 Cr</td><td>₹50/day</td></tr>
  <tr><td><strong>GSTR-1 (QRMP)</strong></td><td>Quarterly</td><td>13th of next month</td><td>Turnover ≤₹5 Cr</td><td>₹50/day</td></tr>
  <tr><td><strong>GSTR-3B</strong></td><td>Monthly</td><td>20th of next month</td><td>Turnover &gt;₹5 Cr</td><td>₹50/day + 18% int</td></tr>
  <tr><td><strong>GSTR-3B (QRMP)</strong></td><td>Quarterly</td><td>22nd/24th of next month</td><td>Turnover ≤₹5 Cr</td><td>₹50/day</td></tr>
  <tr><td><strong>PMT-06</strong></td><td>Monthly</td><td>25th of month</td><td>QRMP filers</td><td>18% interest</td></tr>
  <tr><td><strong>GSTR-9</strong></td><td>Annual</td><td>31 December 2025</td><td>Turnover &gt;₹2 Cr</td><td>₹200/day</td></tr>
  <tr><td><strong>GSTR-9C</strong></td><td>Annual</td><td>31 December 2025</td><td>Turnover &gt;₹5 Cr</td><td>₹200/day</td></tr>
  </tbody></table>
  <div class="callout warn"><p><strong>FY 2025-26 Alert:</strong> E-invoicing is now mandatory for <strong>ALL</strong> GST-registered businesses from 1 April 2025 — no turnover exemption. Non-compliance can result in penalty of ₹10,000 per invoice.</p></div>
</section>

<!-- Income Tax -->
<section class="content-section" id="income-tax-deadlines">
  <div class="section-label">Income Tax</div>
  <h2>Income Tax Filing Dates — FY 2025-26 (AY 2026-27)</h2>
  <div class="geo-prose"><p>The new tax regime is now the default with enhanced rebate under Section 87A — nil tax for income up to ₹12 Lakh. Standard deduction under the new regime is ₹75,000. The ITR-U (updated return) window has been extended to 48 months. Capital gains rates were restructured in FY 2024-25 (LTCG 12.5%, STCG 20% on listed equity). File all income tax returns on the <a href="https://incometax.gov.in" target="_blank" rel="noopener">Income Tax e-filing portal (incometax.gov.in)</a>.</p></div>
  <table class="rate-table"><thead><tr><th>Return Type</th><th>Form</th><th>Due Date</th><th>Applicable</th></tr></thead>
  <tbody>
  <tr><td>Individuals &amp; HUF (non-audit)</td><td>ITR-1/2/4</td><td>31 July 2026</td><td>Salaried, freelancers</td></tr>
  <tr><td>Companies (all)</td><td>ITR-6</td><td>31 October 2026</td><td>Pvt Ltd, Public, OPC, Listed</td></tr>
  <tr><td>Partnership, LLP (audit)</td><td>ITR-5</td><td>31 October 2026</td><td>Audit cases</td></tr>
  <tr><td>Transfer Pricing</td><td>ITR-6 + 3CEB</td><td>30 November 2026</td><td>International transactions</td></tr>
  <tr><td>Belated / Revised Return</td><td>Any ITR</td><td>31 December 2026</td><td>All — ₹5,000 penalty</td></tr>
  <tr><td>Tax Audit (44AB)</td><td>3CA/3CB + 3CD</td><td>30 September 2026</td><td>Business &gt;₹1Cr / ₹10Cr (digital)</td></tr>
  </tbody></table>
  <h3>Advance Tax Schedule</h3>
  <table class="rate-table"><thead><tr><th>Quarter</th><th>Due Date</th><th>Cumulative %</th></tr></thead>
  <tbody>
  <tr><td>Q1</td><td>15 June 2025</td><td>15%</td></tr>
  <tr><td>Q2</td><td>15 September 2025</td><td>45%</td></tr>
  <tr><td>Q3</td><td>15 December 2025</td><td>75%</td></tr>
  <tr><td>Q4</td><td>15 March 2026</td><td>100%</td></tr>
  </tbody></table>
</section>

<!-- TDS/TCS -->
<section class="content-section" id="tds-tcs">
  <div class="section-label">TDS / TCS</div>
  <h2>TDS/TCS Due Dates & Key Rates</h2>
  <div class="geo-prose"><p>Finance Act 2025 introduced significant TDS rationalization: Section 194A threshold raised to ₹50,000 (₹1 Lakh for senior citizens), new Section 194T for partner salary/remuneration, Section 194DA reduced to 2%, and rent threshold under Section 194-I raised to ₹50,000/month. Verify TDS compliance and file returns via the <a href="https://www.tdscpc.gov.in" target="_blank" rel="noopener">TRACES portal (tdscpc.gov.in)</a>.</p></div>
  <table class="rate-table"><thead><tr><th>Obligation</th><th>Due Date</th><th>Form</th><th>Penalty</th></tr></thead>
  <tbody>
  <tr><td>TDS Payment (monthly)</td><td>7th of next month (Mar: 30 Apr)</td><td>Challan 281</td><td>1-1.5% per month</td></tr>
  <tr><td>TDS Return Q1 (Apr-Jun)</td><td>31 July 2025</td><td>24Q/26Q/27Q</td><td>₹200/day</td></tr>
  <tr><td>TDS Return Q2 (Jul-Sep)</td><td>31 October 2025</td><td>24Q/26Q/27Q</td><td>₹200/day</td></tr>
  <tr><td>TDS Return Q3 (Oct-Dec)</td><td>31 January 2026</td><td>24Q/26Q/27Q</td><td>₹200/day</td></tr>
  <tr><td>TDS Return Q4 (Jan-Mar)</td><td>31 May 2026</td><td>24Q/26Q/27Q</td><td>₹200/day</td></tr>
  <tr><td>Form 16 (Salary TDS Cert)</td><td>15 June 2026</td><td>Form 16</td><td>₹100/day</td></tr>
  <tr><td>TDS — Crypto/VDA (194S)</td><td>7th of next month</td><td>Challan 281</td><td>1-1.5%</td></tr>
  <tr><td>TCS on LRS Remittances</td><td>7th of next month</td><td>Form 27EQ</td><td>Equal TCS</td></tr>
  </tbody></table>
</section>

<!-- MCA/ROC -->
<section class="content-section" id="mca-roc">
  <div class="section-label">MCA / ROC</div>
  <h2>MCA / ROC Filings & Deadlines</h2>
  <table class="rate-table"><thead><tr><th>Form</th><th>Purpose</th><th>Due Date</th><th>Penalty</th></tr></thead>
  <tbody>
  <tr><td><strong>AOC-4</strong></td><td>Audited financials to ROC</td><td>30 days from AGM</td><td>₹100/day (no cap)</td></tr>
  <tr><td><strong>MGT-7/7A</strong></td><td>Annual Return</td><td>60 days from AGM</td><td>₹100/day (no cap)</td></tr>
  <tr><td><strong>AGM</strong></td><td>Annual General Meeting</td><td>30 September 2025</td><td>₹1 Lakh</td></tr>
  <tr><td><strong>DIR-3 KYC</strong></td><td>Director KYC</td><td>30 September 2025</td><td>₹5,000 + DIN deactivation</td></tr>
  <tr><td><strong>DPT-3</strong></td><td>Deposits Return</td><td>30 June 2025</td><td>₹5K–₹25K</td></tr>
  <tr><td><strong>MSME-1</strong></td><td>MSME Payments &gt;45 days</td><td>Half-Yearly</td><td>₹20,000</td></tr>
  <tr><td><strong>LLP Form 11</strong></td><td>LLP Annual Return</td><td>30 May 2025</td><td>₹100/day (no cap)</td></tr>
  <tr><td><strong>LLP Form 8</strong></td><td>LLP Statement of Accounts</td><td>30 October 2025</td><td>₹100/day (no cap)</td></tr>
  </tbody></table>
  <div class="callout"><p><strong>Note:</strong> AOC-4 and MGT-7 penalties have no maximum cap — three years of non-filing can result in company strike-off under Section 248 and director disqualification for 5 years under Section 164(2).</p></div>
</section>

<!-- SEBI -->
<section class="content-section" id="sebi-compliance">
  <div class="section-label">SEBI</div>
  <h2>SEBI LODR & Listed Company Compliance</h2>
  <div class="geo-prose"><p>FY 2025-26 brings two major new SEBI obligations: the CSCRF cybersecurity framework is now mandatory for all SEBI-registered entities from April 2025, and BRSR Core with third-party assurance is mandatory for the top 150 listed companies. The digital UPSI database under PIT regulations is also mandatory. All SEBI filings are made via the <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI portal (sebi.gov.in)</a> and the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA21 portal (mca.gov.in)</a>.</p></div>
  <table class="rate-table"><thead><tr><th>Compliance</th><th>Regulation</th><th>Frequency</th><th>Deadline</th></tr></thead>
  <tbody>
  <tr><td>Quarterly Financial Results</td><td>LODR Reg 33</td><td>Quarterly</td><td>45 days from quarter end</td></tr>
  <tr><td>Corporate Governance Report</td><td>LODR Reg 27</td><td>Quarterly</td><td>15 days from quarter end</td></tr>
  <tr><td>Shareholding Pattern</td><td>LODR Reg 31</td><td>Quarterly</td><td>21 days from quarter end</td></tr>
  <tr><td>Annual Report + BRSR</td><td>LODR Reg 34</td><td>Annual</td><td>Before AGM</td></tr>
  <tr><td>BRSR Core (Third-party Assurance)</td><td>SEBI Circular Nov 2024</td><td>Annual</td><td>With Annual Report</td></tr>
  <tr><td>CSCRF Cybersecurity</td><td>SEBI CSCRF 2024</td><td>Annual</td><td>Quarterly VAPT, Annual Audit</td></tr>
  <tr><td>PIT — Digital UPSI Database</td><td>SEBI PIT Reg</td><td>Continuous</td><td>Ongoing</td></tr>
  <tr><td>RPT Disclosure</td><td>LODR Reg 23</td><td>Half-Yearly</td><td>30 days from half-year end</td></tr>
  </tbody></table>
</section>

<!-- FEMA/RBI -->
<section class="content-section" id="fema-rbi">
  <div class="section-label">FEMA / RBI</div>
  <h2>FEMA / RBI Compliance for Foreign Subsidiaries</h2>
  <div class="geo-prose"><p>The FLA Return is now filed on the FLAIR portal (replacing the old portal). FC-GPR must be filed within 30 days of FDI allotment and FC-TRS within 60 days of share transfer — both via the RBI FIRMS portal. Form 15CA/15CB is mandatory for foreign remittances above ₹5 Lakh. All FEMA filings are made via the <a href="https://firms.rbi.org.in" target="_blank" rel="noopener">RBI FIRMS portal (firms.rbi.org.in)</a>.</p></div>
  <table class="rate-table"><thead><tr><th>Form</th><th>Purpose</th><th>Due Date</th><th>Portal</th></tr></thead>
  <tbody>
  <tr><td><strong>FC-GPR</strong></td><td>FDI inflow — share allotment</td><td>30 days from allotment</td><td>RBI FIRMS</td></tr>
  <tr><td><strong>FC-TRS</strong></td><td>Share transfer (NR involved)</td><td>60 days from transfer</td><td>RBI FIRMS</td></tr>
  <tr><td><strong>FLA Return</strong></td><td>Annual FDI/ODI disclosure</td><td>15 July 2025</td><td>RBI FLAIR</td></tr>
  <tr><td><strong>Form 15CA/15CB</strong></td><td>Foreign remittances</td><td>Before remittance</td><td>ITD Portal</td></tr>
  <tr><td><strong>APR (ODI)</strong></td><td>Overseas JV/WOS annual</td><td>31 December 2025</td><td>RBI FIRMS</td></tr>
  <tr><td><strong>ECB-2</strong></td><td>External Commercial Borrowing</td><td>7th of every month</td><td>RBI Portal</td></tr>
  </tbody></table>
</section>

<!-- PF/ESI -->
<section class="content-section" id="pf-esi">
  <div class="section-label">PF / ESI</div>
  <h2>EPF, ESI & Professional Tax</h2>
  <table class="rate-table"><thead><tr><th>Compliance</th><th>Threshold</th><th>Rate</th><th>Due Date</th><th>Penalty</th></tr></thead>
  <tbody>
  <tr><td><strong>EPF Payment</strong></td><td>20+ employees</td><td>12% + 12% on basic (cap ₹15K/mo)</td><td>15th of next month</td><td>5-25% damages</td></tr>
  <tr><td><strong>ESI Payment</strong></td><td>10+ employees</td><td>3.25% (employer) + 0.75% (employee) on wages ≤₹21K/mo</td><td>15th of next month</td><td>12-25% damages</td></tr>
  <tr><td><strong>ESI Half-Yearly Return</strong></td><td>10+ employees</td><td>—</td><td>12 May / 12 Nov</td><td>Prosecution</td></tr>
  <tr><td><strong>PT — Maharashtra</strong></td><td>All employers</td><td>₹200–₹2,500/yr per employee</td><td>Monthly (PTRC)</td><td>1.25%/month</td></tr>
  <tr><td><strong>PT — Karnataka</strong></td><td>All employers</td><td>Max ₹2,500/yr</td><td>20th of next month</td><td>1.25%/month</td></tr>
  </tbody></table>
</section>

<!-- Penalties -->
<section class="content-section" id="penalties">
  <div class="section-label">Quick Reference</div>
  <h2>Penalty Quick Reference</h2>
  <div class="geo-prose"><p>Penalties for non-compliance are significant and in several cases have no maximum cap. The following are key penalties that every business must be aware of when managing their compliance calendar for FY 2025-26.</p></div>
  <table class="rate-table"><thead><tr><th>Non-Compliance</th><th>Penalty</th><th>Additional Consequence</th></tr></thead>
  <tbody>
  <tr><td>Late GSTR-3B</td><td>₹50/day (₹20 nil return), max ₹10,000</td><td>18% interest on net tax</td></tr>
  <tr><td>Late GSTR-9 / 9C</td><td>₹200/day, no cap</td><td>Can bar future filings</td></tr>
  <tr><td>Late ITR</td><td>₹5,000</td><td>234B/234C interest</td></tr>
  <tr><td>TDS default</td><td>1-1.5% per month</td><td>Disallowance of expense</td></tr>
  <tr><td>Late TDS Return</td><td>₹200/day</td><td>Penalty u/s 271H up to ₹1L</td></tr>
  <tr><td>Late AOC-4 / MGT-7</td><td>₹100/day, no cap</td><td>Strike-off + director disqualification</td></tr>
  <tr><td>Late DIR-3 KYC</td><td>₹5,000</td><td>DIN deactivation</td></tr>
  <tr><td>Late LLP Form 8/11</td><td>₹100/day, no cap</td><td>LLP dissolution risk</td></tr>
  <tr><td>FC-GPR delay</td><td>Up to 3× the amount</td><td>FEMA compounding required</td></tr>
  <tr><td>Late EPF</td><td>5-25% damages</td><td>Prosecution under EPF Act</td></tr>
  <tr><td>E-invoicing non-compliance</td><td>₹10,000 per invoice</td><td>ITC denial, penalty u/s 122</td></tr>
  </tbody></table>
</section>

<!-- Monthly Calendar Section -->
<section class="content-section">
  <div class="section-label">Month-by-Month</div>
  <h2>FY 2025-26 Month-by-Month Calendar</h2>
  <div class="month-table-wrap">
  <details>
    <summary>Show full month-by-month calendar (Apr 2025 – Mar 2026)</summary>
    <br>
    <table class="month-table">
      <thead><tr><th>Month</th><th>GST</th><th>Income Tax / TDS</th><th>MCA / Other</th></tr></thead>
      <tbody>
        <tr><td><strong>April 2025</strong></td><td>GSTR-1 by 11 Apr; GSTR-3B by 20 Apr; PMT-06 by 25 Apr</td><td>TDS deposit by 7 Apr; Form 16B/16C by 30 Apr</td><td>Annual Bonus payment by 30 Nov deadline (ongoing); PT as per state</td></tr>
        <tr><td><strong>May 2025</strong></td><td>GSTR-1 by 11 May; GSTR-3B by 20 May; PMT-06 by 25 May</td><td>TDS return Q4 (26Q/24Q) by 31 May; TDS deposit by 7 May</td><td>LLP Form 11 (Annual Return) by 30 May; DIR-3 KYC renewal begins</td></tr>
        <tr><td><strong>June 2025</strong></td><td>GSTR-1 by 11 Jun; GSTR-3B by 20 Jun</td><td>Advance Tax Q1 by 15 Jun (15%); Form 16 issue by 15 Jun; TDS deposit by 7 Jun</td><td>DPT-3 by 30 Jun; IEC Annual Update by 30 Jun; PT returns</td></tr>
        <tr><td><strong>July 2025</strong></td><td>GSTR-1 (QRMP Q1) by 13 Jul; GSTR-3B (QRMP) by 22/24 Jul; PMT-06 by 25 Jul; GSTR-1 by 11 Jul</td><td>ITR (individuals) by 31 Jul; TDS return Q1 by 31 Jul; FLA Return by 15 Jul; TDS deposit by 7 Jul</td><td>FLA Return (FEMA) by 15 Jul; SEBI shareholding by 21 Jul</td></tr>
        <tr><td><strong>August 2025</strong></td><td>GSTR-1 by 11 Aug; GSTR-3B by 20 Aug; PMT-06 by 25 Aug</td><td>TDS deposit by 7 Aug</td><td>SEBI financial results (Q1) by 14 Aug; AGM by 30 Sep deadline approaching</td></tr>
        <tr><td><strong>September 2025</strong></td><td>GSTR-1 by 11 Sep; GSTR-3B by 20 Sep</td><td>Advance Tax Q2 by 15 Sep (45%); Tax audit report by 30 Sep; TDS deposit by 7 Sep</td><td>AGM by 30 Sep; DIR-3 KYC by 30 Sep; LLP Audit by 30 Sep</td></tr>
        <tr><td><strong>October 2025</strong></td><td>GSTR-1 (QRMP Q2) by 13 Oct; GSTR-3B (QRMP) by 22/24 Oct; GSTR-1 by 11 Oct</td><td>ITR (companies/audit) by 31 Oct; TDS return Q2 by 31 Oct; TDS deposit by 7 Oct</td><td>LLP Form 8 by 30 Oct; SEBI Q2 results by 14 Nov</td></tr>
        <tr><td><strong>November 2025</strong></td><td>GSTR-1 by 11 Nov; GSTR-3B by 20 Nov; PMT-06 by 25 Nov</td><td>ITR (transfer pricing) by 30 Nov; Form 3CEB by 30 Nov; TDS deposit by 7 Nov</td><td>ESI half-yearly return by 12 Nov; Annual Bonus by 30 Nov</td></tr>
        <tr><td><strong>December 2025</strong></td><td>GSTR-9 annual return by 31 Dec; GSTR-9C by 31 Dec; GSTR-1 (QRMP Q3) by 13 Jan</td><td>Advance Tax Q3 by 15 Dec (75%); TDS deposit by 7 Dec</td><td>APR (ODI) by 31 Dec; CSR-2 by 31 Dec; SEBI Corp Gov report</td></tr>
        <tr><td><strong>January 2026</strong></td><td>GSTR-3B (QRMP Q3) by 22/24 Jan; GSTR-1 by 11 Jan</td><td>TDS return Q3 by 31 Jan; TDS deposit by 7 Jan</td><td>SEBI Q3 results by 14 Feb; shareholding by 21 Jan</td></tr>
        <tr><td><strong>February 2026</strong></td><td>GSTR-1 by 11 Feb; GSTR-3B by 20 Feb; PMT-06 by 25 Feb</td><td>TDS deposit by 7 Feb; advance tax planning for Q4</td><td>SEBI board meeting disclosure; PT annual returns</td></tr>
        <tr><td><strong>March 2026</strong></td><td>GSTR-1 by 11 Mar; GSTR-3B by 20 Mar</td><td>Advance Tax Q4 by 15 Mar (100%); last date for 80C/80D investments; TDS deposit by 7 Mar</td><td>Year-end payroll; PF annual return</td></tr>
      </tbody>
    </table>
    <p class="month-table-note">All dates are indicative. QRMP filers: 22nd (Category A states) or 24th (Category B states). Dates falling on public holidays shift to next working day.</p>
  </details>
  </div>
</section>

<!-- FAQs -->
<section class="content-section" id="faqs">
  <div class="section-label">FAQs</div>
  <h2>Frequently Asked Questions</h2>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What compliances does a Private Limited Company need in India?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A Private Limited Company must file GSTR-1 and GSTR-3B (monthly or quarterly), ITR-6 by 31 October, quarterly TDS returns, AOC-4 and MGT-7 with ROC, DIR-3 KYC by 30 September, hold AGM by September, statutory audit, EPF/ESI if threshold employees are met, advance tax quarterly, and Professional Tax as per state. Additional filings like GSTR-9, GSTR-9C, and tax audit apply based on turnover thresholds.</div></div></div>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the due date for GSTR-3B filing?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">GSTR-3B is due by the 20th of the following month for regular monthly filers (turnover above ₹5 Crore). QRMP taxpayers (turnover up to ₹5 Crore) file quarterly by the 22nd or 24th of the month following the quarter end. Late filing attracts ₹50 per day (₹20 for nil returns) up to ₹10,000 plus 18% interest on net tax liability.</div></div></div>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the last date to file ITR for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For FY 2025-26 (AY 2026-27): 31 July 2026 for individuals and non-audit cases, 31 October 2026 for companies and audit cases, 30 November 2026 for transfer pricing cases. Belated return can be filed until 31 December 2026 with ₹5,000 penalty. Updated return (ITR-U) is available for 48 months from AY end with 25-70% additional tax.</div></div></div>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What SEBI compliances apply to listed companies?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Listed companies must file quarterly financial results (45 days), corporate governance report (15 days), shareholding pattern (21 days), BRSR annually with BRSR Core assurance for top 150, comply with PIT insider trading regulations including digital UPSI database, and from FY 2025-26 the CSCRF cybersecurity framework with quarterly VAPT and annual audit. Penalty for LODR violations starts at ₹5 Lakh plus ₹5,000 per day.</div></div></div>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What FEMA compliances apply to foreign subsidiaries?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Foreign subsidiaries must file FC-GPR (30 days from FDI), FC-TRS (60 days for share transfers), FLA Return via FLAIR portal (15 July), Form 15CA/15CB for foreign remittances, annual FDI compliance certificate, ESOP FEMA reporting, ECB reporting if applicable, and Form 3CEB for transfer pricing audit. All FEMA filings use the RBI FIRMS portal.</div></div></div>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What compliance is needed for crypto or VDA income?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Crypto income requires TDS at 1% under Section 194S on transfers above ₹10,000, flat 30% tax on gains under Section 115BBH with no deductions and no loss set-off, reporting in Schedule VDA of the ITR, quarterly advance tax, and GST registration if trading services exceed ₹20 Lakh. Losses from one VDA cannot offset gains from another.</div></div></div>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What GST compliances apply to freelancers and YouTubers?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Freelancers and YouTubers above ₹20 Lakh turnover need GST registration. Under QRMP (≤₹5 Cr), file GSTR-1 quarterly by the 13th, GSTR-3B quarterly by the 22nd, and PMT-06 monthly by the 25th. E-invoicing is now mandatory for ALL from FY 2025-26. Annual GSTR-9 applies if turnover exceeds ₹2 Crore. TDS under 194R applies on brand perks above ₹20,000.</div></div></div>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How many employees trigger PF and ESI?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">EPF is mandatory at 20+ employees (12% employer + 12% employee on basic up to ₹15,000/month). ESI triggers at 10+ employees in notified areas (3.25% employer + 0.75% employee on wages up to ₹21,000/month). Both are due by the 15th. Once an establishment crosses the threshold, coverage continues even if headcount drops.</div></div></div>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What are penalties for late MCA/ROC filing?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">AOC-4 and MGT-7 attract ₹100/day with no cap. DIR-3 KYC non-filing costs ₹5,000 plus DIN deactivation. Late ADT-1 costs ₹300/day. LLP Form 8 and Form 11 cost ₹100/day with no cap. Three years of non-filing can result in company strike-off and director disqualification for 5 years.</div></div></div>
  <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the difference between GSTR-9 and GSTR-9C?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">GSTR-9 is the annual return consolidating all monthly/quarterly returns, mandatory for businesses with turnover above ₹2 Crore. GSTR-9C is a reconciliation statement comparing GSTR-9 with audited financial statements, mandatory for turnover above ₹5 Crore and now self-certified (no CA certification required). Both are due by 31 December of the following year.</div></div></div>
</section>

</div><!-- /content-col -->

<!-- SIDEBAR -->
<aside class="sidebar-col">
  <!-- Stats -->
  <div class="sidebar-card">
    <div class="sidebar-card-head">📊 Calendar Stats</div>
    <div id="sidebarStats"></div>
  </div>

  <!-- CTA -->
  <div class="cta-card">
    <h3>Need CA/CS Help?</h3>
    <p>Our expert team handles all your compliance filings — GST, MCA, TDS, FEMA, SEBI and more. Never miss a deadline.</p>
    <div class="contact-cluster">
      <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20compliance%20filings%20for%20my%20business." target="_blank" rel="noopener noreferrer" class="cc-btn cc-btn-wa">💬 WhatsApp</a>
      <a href="tel:+919459456700" class="cc-btn cc-btn-phone">📞 Call</a>
    </div>
    <a href="/cdn-cgi/l/email-protection#066f68606946766772746968676565697368726f68612865696b" class="cc-btn cc-btn-email" style="margin-top:8px;flex:none">📧 Email Us</a>
    <span class="contact-note">Responds within 1 working day · Free first consultation</span>
  </div>

  <!-- Key Services -->
  <div class="sidebar-card">
    <div class="sidebar-card-head">🔗 Key Services</div>
    <div style="display:flex;flex-direction:column;gap:6px">
      <a href="/gst-returns" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">📋 GST Return Filing →</a>
      <a href="/income-tax-return" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">📝 Income Tax Return Filing →</a>
      <a href="/private-limited-company-compliance" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">🏢 Pvt Ltd Annual Compliance →</a>
      <a href="/pvt-llp-compliance" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">🤝 LLP Compliance →</a>
      <a href="/fdi-compliance" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">🌐 FEMA/FDI Compliance →</a>
      <a href="/tax-audit" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">🔍 Tax Audit →</a>
      <a href="/payroll-processing-and-management-services" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">💳 Payroll Management →</a>
      <a href="/pf-registration" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0">👷 PF/ESI Registration →</a>
    </div>
  </div>

  <!-- Tools -->
  <div class="sidebar-card">
    <div class="sidebar-card-head">🛠 Free Tools</div>
    <div style="display:flex;flex-direction:column;gap:6px">
      <a href="#" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">⚡ GST Calculator →</a>
      <a href="#" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">💰 TDS Rate Finder →</a>
      <a href="/tools/income-tax-calculator" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">📋 Income Tax Calculator →</a>
      <a href="#" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">🔎 HSN/SAC Finder →</a>
      <a href="#" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0;border-bottom:1px solid var(--surface)">🚚 E-Way Bill Calculator →</a>
      <a href="#" style="font-size:13px;color:var(--primary-light);text-decoration:none;padding:6px 0">📍 Professional Tax Calculator →</a>
    </div>
  </div>
</aside>
</div><!-- /main-layout -->

<!-- CTA Banner -->
<div class="cta-banner">
  <div class="cta-banner-content">
    <h3>Let Patron Accounting Handle Your Compliance</h3>
    <p>10,000+ businesses trust our CA &amp; CS team for GST, MCA, TDS, FEMA, and payroll. Never miss a deadline again.</p>
  </div>
  <div class="cta-banner-actions">
    <div class="contact-cluster">
      <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20compliance%20filings." target="_blank" rel="noopener noreferrer" class="cc-btn cc-btn-wa">💬 WhatsApp Us</a>
      <a href="tel:+919459456700" class="cc-btn cc-btn-phone">📞 +91 945 945 6700</a>
    </div>
    <span class="contact-note">Free first consultation · Responds within 1 working day</span>
  </div>
</div>

</div>
</main>

<!-- Phone Gate Modal (Option C — India +91 default + international escape) -->
<div class="email-gate-overlay" id="emailGate" role="dialog" aria-modal="true" aria-labelledby="gateTitle">
  <div class="email-gate-box">
    <button class="email-gate-close" onclick="closeEmailGate()" aria-label="Close">✕</button>
    <div style="font-size:40px;margin-bottom:12px">📲</div>
    <h3 id="gateTitle">Get the PDF on WhatsApp</h3>
    <p>Enter your WhatsApp number and we'll send the compliance calendar PDF directly to your chat — plus deadline reminders before due dates.</p>
    <div class="email-gate-perks">
      <span class="email-gate-perk">✓ Instant delivery</span>
      <span class="email-gate-perk">✓ Free forever</span>
      <span class="email-gate-perk">✓ CA team on chat</span>
    </div>
    <div class="phone-gate-row" id="phoneGateRow">
      <span class="phone-gate-prefix" id="phonePrefix">🇮🇳 +91</span>
      <input class="phone-gate-input" id="emailGateInput" type="tel" inputmode="numeric" placeholder="98765 43210" autocomplete="tel-national" maxlength="15"
        oninput="this.closest('.phone-gate-row').classList.remove('error');document.getElementById('phoneGateHint').textContent=''"
        onkeydown="if(event.key==='Enter')submitEmailGate()">
    </div>
    <div class="phone-gate-hint" id="phoneGateHint"></div>
    <button class="phone-gate-escape" id="phoneEscape" onclick="toggleInternationalMode()">Outside India? Enter with country code →</button>
    <button class="email-gate-submit" onclick="submitEmailGate()">💬 Send PDF to WhatsApp</button>
    <button class="email-gate-skip" onclick="skipEmailGate()">Skip — download directly instead</button>
  </div>
</div>

<!-- Share toast -->
<div class="share-toast" id="shareToast">Link copied to clipboard!</div>

<!-- WhatsApp Strip -->
<div class="wa-strip" id="waStrip" role="banner" aria-label="WhatsApp contact strip">
  <div class="wa-strip-inner">
    <div class="wa-strip-top">
      <div class="wa-strip-icon" aria-hidden="true">💬</div>
      <div class="wa-strip-copy">
        <strong>Get compliance alerts on WhatsApp — free.</strong>
        <span>CA &amp; CS team · Responds within 1 working day</span>
      </div>
      <button class="wa-strip-close" onclick="dismissWaStrip()" aria-label="Dismiss">×</button>
    </div>
    <div class="wa-strip-bottom">
      <a href="https://wa.me/919459456700?text=Hi%2C%20I%27d%20like%20to%20get%20compliance%20due%20date%20alerts%20for%20my%20business." target="_blank" rel="noopener noreferrer" class="wa-strip-btn">💬 Get Free Alerts →</a>
    </div>
  </div>
</div>

<!-- Drawer -->
<div class="drawer-overlay" id="drawer"><div class="drawer-backdrop" onclick="closeDrawer()"></div><div class="drawer-panel" id="drawerPanel"></div></div>

<!-- Modal (What Changed) -->
<div class="modal-overlay" id="wcModal"><div class="modal-backdrop" onclick="closeWC()"></div><div class="modal-panel" id="wcPanel"></div></div>

<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<style>
/* ── Additional Screen Compatibility Fixes ── */
@media(max-width:360px){
  .hero h1{font-size:19px!important}
  .calc-card{padding:14px}
  .fy-chip,.filter-chip{font-size:11px;padding:5px 10px}
  .result-grid{grid-template-columns:1fr 1fr}
  .dl-btn{font-size:12px;padding:8px 14px}
}
@media(max-width:600px){
  .rg-grid{grid-template-columns:1fr!important}
  .download-bar{flex-direction:column}
  .download-bar .dl-btn{width:100%;justify-content:center}
  .wc-cta-bar{flex-direction:column;gap:8px}
  .content-section{padding:20px 14px}
}
@media(max-width:480px){
  .result-grid{grid-template-columns:1fr 1fr!important}
  .rate-table{font-size:12px}
  .rate-table thead th,.rate-table tbody td{padding:7px 8px}
}
html,body{overflow-x:hidden;max-width:100vw}
@media(max-width:899px){
  .form-group select,.search-wrap input{font-size:16px}
}
@supports(padding:max(0px)){
  .wa-strip-inner{padding-bottom:max(9px,env(safe-area-inset-bottom))}
  body{padding-bottom:max(72px,calc(60px + env(safe-area-inset-bottom)))}
}
#industryBar,#catBar,.fy-bar{-webkit-overflow-scrolling:touch}
@media(max-width:600px){
  .filter-chip,.fy-chip{min-height:40px;display:inline-flex;align-items:center}
  .faq-question{min-height:52px}
  .dl-btn,.btn-wc,.cc-btn{min-height:44px}
}
</style>
<script>
// ── Config ──
const WA_NUMBER = '919459456700';

// ══════════════════════════════════════════════════════
// DATA — 109 compliances, versioned rules
// ══════════════════════════════════════════════════════
const FYS=[{code:"2023-24",label:"FY 2023-24",cur:false},{code:"2024-25",label:"FY 2024-25",cur:false},{code:"2025-26",label:"FY 2025-26",cur:true},{code:"2026-27",label:"FY 2026-27",cur:false},{code:"2027-28",label:"FY 2027-28",cur:false}];
const STATES=[["all","All India"],["MH","Maharashtra"],["DL","Delhi"],["KA","Karnataka"],["TN","Tamil Nadu"],["GJ","Gujarat"],["WB","West Bengal"],["RJ","Rajasthan"],["UP","Uttar Pradesh"],["MP","Madhya Pradesh"],["AP","Andhra Pradesh"],["TS","Telangana"],["KL","Kerala"],["HR","Haryana"],["PB","Punjab"],["BR","Bihar"],["OR","Odisha"],["AS","Assam"],["GA","Goa"],["JH","Jharkhand"],["CG","Chhattisgarh"],["UK","Uttarakhand"],["HP","Himachal Pradesh"]];
const ENTS=[["pvt_ltd","Private Limited","Pvt Ltd"],["public_ltd","Public Limited","Public"],["listed_co","Listed Company","Listed"],["foreign_sub","Foreign Subsidiary (India)","Foreign Sub"],["llp","LLP","LLP"],["partnership","Partnership Firm","Partn."],["proprietorship","Proprietorship","Prop."],["opc","One Person Company","OPC"],["individual_salaried","Individual (Salaried)","Salaried"],["individual_business","Individual (Business)","Business"],["trust","Trust/Society/NGO","Trust"],["huf","HUF","HUF"]];
const TO_SLABS=[["all","Any Turnover",1e15],["0-20","Up to ₹20 Lakh",20],["20-40","₹20L – ₹40 Lakh",40],["40-150","₹40L – ₹1.5 Crore",150],["150-500","₹1.5Cr – ₹5 Crore",500],["500-1000","₹5Cr – ₹10 Crore",1000],["1000-5000","₹10Cr – ₹50 Crore",5000],["5000-25000","₹50Cr – ₹250 Crore",25000],["25000+","₹250 Crore+",1e15]];
const EMP_SLABS=[["all","Any Headcount",1e9],["0","Solo (0)",0],["1-9","1–9",9],["10-19","10–19",19],["20-49","20–49",49],["50-99","50–99",99],["100-499","100–499",499],["500+","500+",1e9]];
const INDS=[["all","All Industries","🌐"],["freelancer","Freelancers","💻"],["crypto","Crypto / VDA","₿"],["youtuber","Creators","🎬"],["ecommerce","E-Commerce","🛒"],["startup","Startups","🚀"],["foreign_sub","Foreign Sub","🏢"],["exporter","Exporters","🚢"],["listed","Listed Co.","📈"],["nbfc","NBFC/Fintech","🏦"],["manufacturing","Manufacturing","🏭"],["professional","Professionals","⚕️"],["ngo","NGO/Trust","🤲"],["real_estate","Real Estate","🏗️"],["salaried","Salaried","👔"]];
const CATS=[["GST","⚡","#dc2626"],["Income Tax","📋","#2563eb"],["TDS/TCS","💰","#ea580c"],["MCA/ROC","🏛️","#7c3aed"],["LLP","🤝","#0d9488"],["PF/ESI","👷","#16a34a"],["Professional Tax","📍","#d97706"],["Payroll","💳","#db2777"],["Audit","🔍","#475569"],["SEBI","📈","#be123c"],["FEMA/RBI","🌐","#0891b2"],["Customs/DGFT","🚢","#78350f"]];
const FREQ={monthly:"Monthly",quarterly:"Quarterly",annual:"Annual",half_yearly:"Half-Yearly",continuous:"Continuous",event:"Event-Based"};
const PRI_C={critical:"#DC2626",high:"#E8622A",medium:"#0EA5E9",low:"#888"};
const SEV_C={critical:["#FEE2E2","#FCA5A5","#991B1B","#DC2626"],major:["#FEF3C7","#FCD34D","#92400E","#F59E0B"],minor:["#D1FAE5","#6EE7B7","#065F46","#059669"],info:["#DBEAFE","#93C5FD","#1E40AF","#3B82F6"]};
const CHG_L={threshold_change:"Threshold",new_requirement:"New Requirement",scope_expansion:"Scope Expanded",rate_change:"Rate Change",exemption_added:"Exemption"};

// ══ Versioned Rules ══
const VR={
"e-invoicing":{turnover_threshold:[
  {f:"2020-21",t:"2020-21",v:"₹500 Cr+",s:"info",y:"new_requirement",d:"Launched Oct 2020 — top 500 Cr businesses",n:"E-inv launched",g:"Notif 61/2020"},
  {f:"2021-22",t:"2021-22",v:"₹100 Cr+",s:"major",y:"scope_expansion",d:"Expanded to ₹100 Cr",n:"₹500Cr → ₹100Cr",g:"Notif 88/2020"},
  {f:"2022-23",t:"2022-23",v:"₹20 Cr+",s:"major",y:"scope_expansion",d:"Further lowered to ₹20 Cr",n:"₹100Cr → ₹20Cr",g:"Notif 01/2022"},
  {f:"2023-24",t:"2024-25",v:"₹5 Cr+",s:"critical",y:"scope_expansion",d:"Lowered to ₹5 Cr",n:"₹20Cr → ₹5Cr",g:"Notif 10/2023"},
  {f:"2025-26",t:null,v:"ALL GST-registered",s:"critical",y:"scope_expansion",d:"Mandatory for all GST registrants from 1 Apr 2025",n:"E-invoicing for ALL",g:"CBIC Notification",c:1}
]},
"gstr-3b-monthly":{interest_calc:[
  {f:"2017-18",t:"2020-21",v:"18% on gross liability",s:"major",y:"rate_change",d:"Interest on gross tax (incl. ITC)",n:"Gross liability basis"},
  {f:"2021-22",t:null,v:"18% on net liability",s:"critical",y:"rate_change",d:"Finance Act 2021 — interest only on net cash",n:"Gross → Net liability",g:"Finance Act 2021",c:1}
]},
"gstr-9c":{threshold:[
  {f:"2017-18",t:"2019-20",v:"₹2 Cr (CA certified)",s:"info",y:"new_requirement",d:"Originally ₹2 Cr with CA cert"},
  {f:"2020-21",t:"2020-21",v:"₹5 Cr (CA certified)",s:"major",y:"threshold_change",d:"Threshold raised to ₹5 Cr",n:"₹2Cr → ₹5Cr"},
  {f:"2021-22",t:null,v:"₹5 Cr self-certified",s:"major",y:"threshold_change",d:"No CA cert needed — self-certification",n:"Self-cert from FY21",g:"Finance Act 2021",c:1}
]},
"gst-ims":{launch:[
  {f:"2024-25",t:null,v:"Invoice Management System live",s:"critical",y:"new_requirement",d:"Accept/reject/pending invoices monthly before GSTR-2B locks on 14th",n:"IMS launched Oct 2024",c:1},
  {f:"2025-26",t:null,v:"IMS fully operational",s:"critical",y:"scope_expansion",d:"GSTR-1A amendment return also introduced",n:"IMS + GSTR-1A",c:1}
]},
"itr-individual-salaried":{new_regime:[
  {f:"2020-21",t:"2022-23",v:"Optional — lower rates, no deductions",s:"info",y:"new_requirement",d:"New regime introduced as optional",n:"New regime optional"},
  {f:"2023-24",t:"2024-25",v:"DEFAULT — nil ≤₹7L",s:"critical",y:"threshold_change",d:"New regime made default; rebate ≤₹7L",n:"New regime DEFAULT"},
  {f:"2025-26",t:null,v:"DEFAULT — nil ≤₹12L",s:"critical",y:"threshold_change",d:"Budget 2025: rebate u/s 87A enhanced to ₹12L",n:"Nil tax ≤₹12L",g:"Finance Act 2025",c:1}
],std_deduction:[
  {f:"2018-19",t:"2018-19",v:"₹40,000",s:"info",y:"new_requirement",d:"Standard deduction reinstated",n:"₹40K reinstated",g:"Finance Act 2018"},
  {f:"2019-20",t:"2023-24",v:"₹50,000",s:"minor",y:"threshold_change",d:"Raised to ₹50K",n:"₹40K → ₹50K"},
  {f:"2024-25",t:null,v:"₹75,000 (new regime)",s:"major",y:"threshold_change",d:"₹75K under new regime; ₹50K old regime",n:"₹50K → ₹75K",g:"Finance Act 2024",c:1}
]},
"itr-company":{corporate_rate:[
  {f:"2019-20",t:null,v:"22% (Sec 115BAA) / 15% (Sec 115BAB)",s:"critical",y:"rate_change",d:"Reduced from 30% — optional concessional rates",n:"30% → 22%/15%",g:"Ordinance Sep 2019",c:1}
],buyback:[
  {f:"2024-25",t:null,v:"Buyback tax on shareholder (not company)",s:"critical",y:"rate_change",d:"Buyback proceeds taxable as dividend in shareholder hands from Oct 2024",n:"Buyback shifted to shareholder",g:"Finance Act 2024",c:1}
]},
"tax-audit-44ab":{threshold:[
  {f:"2017-18",t:"2019-20",v:"₹1 Cr (business) / ₹50L (profession)",s:"info",y:"threshold_change",d:"Standard threshold"},
  {f:"2020-21",t:null,v:"₹10 Cr (≥95% digital) / ₹75L (profession ≥95% digital)",s:"critical",y:"threshold_change",d:"Cash transactions limit: ₹10Cr if digital",n:"₹1Cr → ₹10Cr",g:"Finance Act 2020",c:1}
]},
"updated-return-itr-u":{window:[
  {f:"2022-23",t:"2024-25",v:"24 months from AY end",s:"major",y:"new_requirement",d:"ITR-U introduced with 25-50% additional tax",n:"ITR-U introduced"},
  {f:"2025-26",t:null,v:"48 months from AY end",s:"critical",y:"scope_expansion",d:"Extended to 48 months; 60-70% tax in 3rd/4th year",n:"ITR-U 2yr → 4yr",g:"Finance Act 2025",c:1}
]},
"capital-gains":{rates:[
  {f:"2018-19",t:"2023-24",v:"LTCG 10% (equity >₹1L) / STCG 15%",s:"info",y:"threshold_change",d:"Post-Budget 2018 rates"},
  {f:"2024-25",t:null,v:"LTCG 12.5% / STCG 20% (listed equity)",s:"critical",y:"rate_change",d:"Budget July 2024: new uniform rates, ₹1.25L exemption",n:"LTCG 10%→12.5%; STCG 15%→20%",g:"Finance Act (No.2) 2024",c:1}
]},
"angel-tax":{status:[
  {f:"2012-13",t:"2023-24",v:"Active — premium taxed as income",s:"info",y:"new_requirement",d:"Section 56(2)(viib) applied to unlisted share premium"},
  {f:"2024-25",t:null,v:"ABOLISHED completely",s:"critical",y:"exemption_added",d:"Section 56(2)(viib) removed; no tax on startup share premium",n:"Angel tax SCRAPPED",g:"Finance Act 2024",c:1}
]},
"tds-rationalization-2025":{changes:[
  {f:"2025-26",t:null,v:"194A ₹50K; 194H merged; 194T partners; 194DA 2%",s:"critical",y:"rate_change",d:"Multiple TDS sections rationalised: 194A threshold ₹50K (₹1L seniors), 194T for partner payments, 194DA reduced to 2%, 194-I rent ₹50K/mo",n:"TDS overhaul 2025",g:"Finance Act 2025",c:1}
]},
"tds-194s-crypto":{rule:[
  {f:"2022-23",t:null,v:"1% TDS on VDA transfers >₹10K",s:"critical",y:"new_requirement",d:"Section 194S: 1% TDS on VDA + 30% flat tax under 115BBH",n:"Crypto TDS + tax",g:"Finance Act 2022",c:1}
]},
"tds-194ba-online-gaming":{rule:[
  {f:"2023-24",t:null,v:"30% TDS on net gaming winnings",s:"critical",y:"new_requirement",d:"Section 194BA: TDS at year end or withdrawal, whichever earlier",n:"Gaming TDS 30%",g:"Finance Act 2023",c:1}
]},
"tds-206ab":{higher_tds:[
  {f:"2021-22",t:null,v:"2× rate or 5% (non-filer for 2 yrs)",s:"critical",y:"new_requirement",d:"Section 206AB: Higher TDS for specified non-filers (TDS >₹50K in 2 years)",n:"206AB launched",g:"Finance Act 2021",c:1}
]},
"tcs-lrs":{rates:[
  {f:"2020-21",t:"2022-23",v:"5% TCS above ₹7L LRS",s:"major",y:"new_requirement",d:"TCS on LRS remittances introduced",n:"TCS on LRS 5%"},
  {f:"2023-24",t:null,v:"20% TCS above ₹7L (except education/medical 5%)",s:"critical",y:"rate_change",d:"Rate increased to 20%; education/medical exempted",n:"5% → 20% TCS",g:"Finance Act 2023",c:1}
]},
"esi-payment":{ceiling:[
  {f:"2017-18",t:"2018-19",v:"₹15,000/month wage ceiling",s:"info",y:"threshold_change",d:"Earlier limit"},
  {f:"2019-20",t:null,v:"₹21,000/month wage ceiling",s:"major",y:"threshold_change",d:"Raised from ₹15K to ₹21K",n:"₹15K → ₹21K",g:"MoLE Notification Jan 2017",c:1}
],rates:[
  {f:"2019-20",t:null,v:"Employer 3.25% + Employee 0.75%",s:"minor",y:"rate_change",d:"Reduced from 4.75%+1.75%",n:"Rate reduced",c:1}
]},
"epf-payment":{taxability:[
  {f:"2021-22",t:null,v:"Contributions >₹2.5L/yr taxable (interest on excess)",s:"critical",y:"new_requirement",d:"Finance Act 2021: EPF interest taxable if contribution >₹2.5L (₹5L govt)",n:"EPF tax above ₹2.5L",g:"Finance Act 2021",c:1}
]},
"sebi-brsr":{mandate:[
  {f:"2022-23",t:"2022-23",v:"BRSR (top 1000 listed)",s:"major",y:"new_requirement",d:"SEBI BRSR mandatory — top 1000 by market cap"},
  {f:"2023-24",t:"2024-25",v:"BRSR + BRSR Core (top 250 / top 150 pilot)",s:"major",y:"scope_expansion",d:"BRSR Core with assurance for top 150 (pilot)"},
  {f:"2025-26",t:null,v:"BRSR Core mandatory — top 150",s:"critical",y:"scope_expansion",d:"Third-party assurance on 9 KPIs mandatory for top 150 listed cos",n:"BRSR Core mandatory",g:"SEBI Circular Nov 2024",c:1}
]},
"sebi-cybersecurity":{cscrf:[
  {f:"2025-26",t:null,v:"CSCRF mandatory — all SEBI entities",s:"critical",y:"new_requirement",d:"Quarterly VAPT, annual audit, 6-hr incident reporting for all registered entities",n:"SEBI CSCRF April 2025",g:"SEBI CSCRF Circular 2024",c:1}
]},
"sebi-pit":{upsi_database:[
  {f:"2025-26",t:null,v:"Digital UPSI database mandatory",s:"critical",y:"new_requirement",d:"Structured digital database of UPSI and access logs mandatory from April 2025",n:"Digital UPSI DB",g:"SEBI PIT Amendment 2024",c:1}
]},
"fc-gpr":{firms:[
  {f:"2019-20",t:null,v:"30 days via FIRMS portal",s:"major",y:"new_requirement",d:"All FEMA FDI filings centralised on FIRMS portal",n:"FIRMS portal mandatory",g:"RBI Circular 2019",c:1}
]},
"fla-return":{portal:[
  {f:"2024-25",t:null,v:"FLAIR portal (new)",s:"major",y:"new_requirement",d:"FLA filing migrated to FLAIR portal; old portal discontinued",n:"FLAIR portal launch",c:1}
]},
"gstr-9":{threshold:[
  {f:"2019-20",t:"2022-23",v:"All GST registered (mandatory)",s:"info",y:"threshold_change",d:"Mandatory for all registered taxpayers"},
  {f:"2023-24",t:null,v:"₹2 Cr+ mandatory; optional below",s:"minor",y:"threshold_change",d:"Optional for turnover below ₹2 Cr",n:"₹2Cr threshold",c:1}
]},
"schedule-vda-crypto":{tax_rate:[
  {f:"2022-23",t:null,v:"30% flat + 1% TDS + no set-off",s:"critical",y:"new_requirement",d:"Section 115BBH: 30% flat tax, no deduction, no set-off of VDA losses",n:"Crypto 30% tax",g:"Finance Act 2022",c:1}
]},
"iec-annual-update":{update:[
  {f:"2023-24",t:null,v:"Annual update mandatory by 30 June",s:"major",y:"new_requirement",d:"IEC deactivated if not updated annually; reactivation required",n:"IEC annual update",g:"DGFT PN 12/2023",c:1}
]}
};

// ══ Compliance Data ══
// [slug,name,cat,freq,form,act,priority,penalty,entities[],states[],desc,dueDay,dueMonth,industries[],turnoverMinL,empMin]
const D=[
["gstr-1","GSTR-1 (Monthly)","GST","monthly","GSTR-1","Section 37","high","₹50/day",["pvt_ltd","llp","partnership","proprietorship","public_ltd","listed_co","foreign_sub"],["all"],"Monthly outward supplies — turnover > ₹5 Cr",11,0,["ecommerce","exporter","manufacturing","startup","foreign_sub","listed","nbfc"],500,0],
["gstr-1-quarterly","GSTR-1 (Quarterly)","GST","quarterly","GSTR-1","Section 37","high","₹50/day",["pvt_ltd","llp","partnership","proprietorship"],["all"],"Quarterly — turnover ≤₹5 Cr (QRMP)",13,0,["freelancer","youtuber","professional","ecommerce"],0,0],
["gstr-3b-monthly","GSTR-3B (Monthly)","GST","monthly","GSTR-3B","Section 39","critical","₹50/day + 18% int",["pvt_ltd","llp","partnership","proprietorship","public_ltd","listed_co","foreign_sub"],["all"],"Monthly summary with ITC & tax",20,0,["ecommerce","exporter","manufacturing","startup","foreign_sub","listed","nbfc","freelancer","youtuber"],0,0],
["gstr-3b-quarterly-qrmp","GSTR-3B (Quarterly)","GST","quarterly","GSTR-3B","Section 39","critical","₹50/day",["pvt_ltd","llp","partnership","proprietorship"],["all"],"Quarterly under QRMP (≤₹5 Cr)",22,0,["freelancer","youtuber","professional","ecommerce"],0,0],
["gstr-4","GSTR-4 (Composition)","GST","annual","GSTR-4","Section 10","high","₹50/day",["proprietorship","partnership"],["all"],"Annual composition (≤₹1.5 Cr)",30,4,["manufacturing"],0,0],
["gstr-9","GSTR-9 (Annual)","GST","annual","GSTR-9","Section 44","critical","₹200/day",["pvt_ltd","llp","partnership","proprietorship","public_ltd","listed_co","foreign_sub"],["all"],"Annual consolidated — >₹2 Cr",31,12,["ecommerce","exporter","manufacturing","startup","foreign_sub","listed","nbfc"],200,0],
["gstr-9c","GSTR-9C (Reconciliation)","GST","annual","GSTR-9C","Section 35(5)","critical","₹200/day",["pvt_ltd","llp","public_ltd","listed_co","foreign_sub"],["all"],"Self-certified >₹5 Cr",31,12,["manufacturing","exporter","foreign_sub","listed","nbfc"],500,0],
["e-invoicing","E-Invoicing","GST","continuous","IRN","Rule 48(4)","critical","₹10K/inv",["pvt_ltd","llp","partnership","public_ltd","listed_co","foreign_sub"],["all"],"Mandatory B2B — ALL from FY 25-26",0,0,["ecommerce","exporter","manufacturing","startup","foreign_sub","listed","nbfc","freelancer","youtuber"],0,0],
["gst-ims","GST IMS","GST","monthly","IMS Portal","Rule 60(2A)","high","",["pvt_ltd","llp","partnership","proprietorship","public_ltd","listed_co","foreign_sub"],["all"],"Accept/reject invoices for ITC",0,0,["ecommerce","manufacturing","exporter","foreign_sub","listed","nbfc","startup"],0,0],
["gst-pmt-06","GST PMT-06","GST","monthly","PMT-06","Rule 61A","high","18% int",["pvt_ltd","llp","partnership","proprietorship"],["all"],"Monthly tax for QRMP",25,0,["freelancer","youtuber","professional"],0,0],
["gst-lut","GST LUT","GST","annual","RFD-11","Rule 96A","high","IGST payable",["pvt_ltd","llp","partnership","proprietorship","public_ltd","listed_co","foreign_sub"],["all"],"Annual LUT for exporters",1,4,["exporter","foreign_sub"],0,0],
["itr-individual-salaried","ITR — Salaried","Income Tax","annual","ITR-1/2","Section 139(1)","critical","₹5,000",["individual_salaried"],["all"],"Annual return — 31 Jul",31,7,["salaried","freelancer","youtuber","crypto"],0,0],
["itr-business-non-audit","ITR — Business","Income Tax","annual","ITR-3/4","Section 139(1)","critical","₹5,000",["proprietorship","partnership","individual_business","huf"],["all"],"Non-audit — 31 Jul",31,7,["freelancer","youtuber","professional","ecommerce","crypto"],0,0],
["itr-company","ITR — Company","Income Tax","annual","ITR-6","Section 139(1)","critical","₹5,000",["pvt_ltd","public_ltd","opc","listed_co","foreign_sub"],["all"],"Company — 31 Oct (audit)",31,10,["startup","manufacturing","foreign_sub","listed","nbfc","ecommerce"],0,0],
["itr-trust","ITR — Trust","Income Tax","annual","ITR-7","Section 139(4A)","critical","₹5,000",["trust"],["all"],"Trust/society — 31 Oct",31,10,["ngo"],0,0],
["itr-tp-cases","ITR — Transfer Pricing","Income Tax","annual","ITR-6+3CEB","Section 92E","critical","TP penalty",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub"],["all"],"TP cases — 30 Nov",30,11,["foreign_sub","listed","nbfc"],0,0],
["advance-tax-q1","Advance Tax — Q1","Income Tax","quarterly","Challan 280","Section 208","critical","234C @1%/m",["pvt_ltd","llp","partnership","proprietorship","public_ltd","individual_business","opc","listed_co","foreign_sub"],["all"],"15% by 15 Jun",15,6,["freelancer","youtuber","professional","ecommerce","startup","foreign_sub","listed","crypto","manufacturing","nbfc"],0,0],
["advance-tax-q2","Advance Tax — Q2","Income Tax","quarterly","Challan 280","Section 208","critical","234C int",["pvt_ltd","llp","partnership","proprietorship","public_ltd","individual_business","opc","listed_co","foreign_sub"],["all"],"45% by 15 Sep",15,9,["freelancer","youtuber","professional","ecommerce","startup","foreign_sub","listed","crypto","manufacturing","nbfc"],0,0],
["advance-tax-q3","Advance Tax — Q3","Income Tax","quarterly","Challan 280","Section 208","critical","234C int",["pvt_ltd","llp","partnership","proprietorship","public_ltd","individual_business","opc","listed_co","foreign_sub"],["all"],"75% by 15 Dec",15,12,["freelancer","youtuber","professional","ecommerce","startup","foreign_sub","listed","crypto","manufacturing","nbfc"],0,0],
["advance-tax-q4","Advance Tax — Q4","Income Tax","quarterly","Challan 280","Section 208","critical","234B/C",["pvt_ltd","llp","partnership","proprietorship","public_ltd","individual_business","opc","listed_co","foreign_sub"],["all"],"100% by 15 Mar",15,3,["freelancer","youtuber","professional","ecommerce","startup","foreign_sub","listed","crypto","manufacturing","nbfc"],0,0],
["tax-audit-44ab","Tax Audit (44AB)","Income Tax","annual","3CA/3CB+3CD","Section 44AB","critical","₹1.5L",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc","listed_co","foreign_sub"],["all"],"Business >₹1Cr/₹10Cr",30,9,["ecommerce","manufacturing","startup","foreign_sub","listed","nbfc"],100,0],
["updated-return-itr-u","ITR-U (Updated)","Income Tax","event","ITR-U","Section 139(8A)","medium","25-70%",["individual_salaried","individual_business","pvt_ltd","llp","partnership","proprietorship","public_ltd","opc","huf","trust","listed_co","foreign_sub"],["all"],"Within 48 months",0,0,["salaried","freelancer","crypto","youtuber"],0,0],
["form-3ceb-tp","Form 3CEB (TP)","Income Tax","annual","Form 3CEB","Section 92E","critical","₹1L",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub"],["all"],"TP audit by CA",31,10,["foreign_sub","listed"],0,0],
["crypto-income-itr","Crypto/VDA Income","Income Tax","annual","ITR Sch VDA","Section 115BBH","critical","₹5,000",["individual_salaried","individual_business","pvt_ltd"],["all"],"30% flat — no deductions",31,7,["crypto"],0,0],
["tds-payment","TDS Monthly","TDS/TCS","monthly","Challan 281","Rule 30","critical","1-1.5%/m",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc","listed_co","foreign_sub"],["all"],"By 7th",7,0,["startup","manufacturing","foreign_sub","listed","nbfc","ecommerce","freelancer"],0,0],
["tds-return-q1","TDS Return Q1","TDS/TCS","quarterly","24Q/26Q/27Q","Section 200(3)","critical","₹200/day",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc","listed_co","foreign_sub"],["all"],"Apr-Jun — 31 Jul",31,7,["startup","manufacturing","foreign_sub","listed","nbfc","ecommerce"],0,1],
["tds-return-q2","TDS Return Q2","TDS/TCS","quarterly","24Q/26Q/27Q","Section 200(3)","critical","₹200/day",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc","listed_co","foreign_sub"],["all"],"Jul-Sep — 31 Oct",31,10,["startup","manufacturing","foreign_sub","listed","nbfc","ecommerce"],0,1],
["tds-return-q3","TDS Return Q3","TDS/TCS","quarterly","24Q/26Q/27Q","Section 200(3)","critical","₹200/day",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc","listed_co","foreign_sub"],["all"],"Oct-Dec — 31 Jan",31,1,["startup","manufacturing","foreign_sub","listed","nbfc","ecommerce"],0,1],
["tds-return-q4","TDS Return Q4","TDS/TCS","quarterly","24Q/26Q/27Q","Section 200(3)","critical","₹200/day",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc","listed_co","foreign_sub"],["all"],"Jan-Mar — 31 May",31,5,["startup","manufacturing","foreign_sub","listed","nbfc","ecommerce"],0,1],
["form-16","Form 16","TDS/TCS","annual","Form 16","Section 203","high","₹100/day",["pvt_ltd","llp","partnership","public_ltd","opc","listed_co","foreign_sub"],["all"],"Salary TDS cert — 15 Jun",15,6,["startup","manufacturing","foreign_sub","listed","nbfc"],0,1],
["tds-194s-crypto","TDS Crypto (194S)","TDS/TCS","monthly","Challan 281","Section 194S","high","1-1.5%",["pvt_ltd","individual_business"],["all"],"TDS @1% on crypto",7,0,["crypto"],0,0],
["tds-194ba-online-gaming","TDS Gaming (194BA)","TDS/TCS","monthly","Challan 281","Section 194BA","high","1%",[],["all"],"Net gaming winnings",7,0,["youtuber"],0,0],
["tds-194r-perquisite","TDS Perks (194R)","TDS/TCS","monthly","Challan 281","Section 194R","high","1-1.5%",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub"],["all"],"@10% on perks >₹20K",7,0,["startup","listed","foreign_sub","youtuber"],0,0],
["tds-195-foreign","TDS Foreign (195)","TDS/TCS","event","15CA/15CB","Section 195","critical","Disallowance",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub"],["all"],"Payments to non-residents",0,0,["foreign_sub","exporter","startup","listed"],0,0],
["tds-rationalization-2025","TDS Rationalisation 2025","TDS/TCS","annual","Various","Finance Act 2025","critical","Per section",["pvt_ltd","llp","partnership","proprietorship","public_ltd","listed_co","foreign_sub"],["all"],"194A ₹50K; 194T partners; 194DA 2%",0,0,["manufacturing","startup","listed","foreign_sub","professional"],0,0],
["aoc-4","AOC-4 (Financials)","MCA/ROC","annual","AOC-4/XBRL","Section 137","critical","₹100/day",["pvt_ltd","public_ltd","opc","listed_co","foreign_sub"],["all"],"Audited financials to ROC",0,0,["startup","manufacturing","foreign_sub","listed","nbfc"],0,0],
["mgt-7","MGT-7/7A","MCA/ROC","annual","MGT-7/7A","Section 92","critical","₹100/day",["pvt_ltd","public_ltd","opc","listed_co","foreign_sub"],["all"],"Annual return — 60 days from AGM",0,0,["startup","manufacturing","foreign_sub","listed","nbfc"],0,0],
["agm","AGM","MCA/ROC","annual","","Section 96","critical","₹1L",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"By 30 Sep",30,9,["startup","manufacturing","foreign_sub","listed","nbfc"],0,0],
["dir-3-kyc","DIR-3 KYC","MCA/ROC","annual","DIR-3 KYC","Rule 12A","high","₹5,000",["pvt_ltd","public_ltd","opc","listed_co","foreign_sub"],["all"],"By 30 Sep",30,9,["startup","manufacturing","foreign_sub","listed","nbfc"],0,0],
["msme-1","MSME-1","MCA/ROC","half_yearly","MSME-1","Section 405","high","₹20K",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"MSME payments >45 days",0,0,["manufacturing","foreign_sub","listed"],0,0],
["dpt-3","DPT-3 (Deposits)","MCA/ROC","annual","DPT-3","Section 73","high","₹5K-₹25K",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"Deposits return — 30 Jun",30,6,["startup","manufacturing","foreign_sub","listed","nbfc"],0,0],
["csr-compliance","CSR Filing","MCA/ROC","annual","CSR-1/2","Section 135","high","2x unspent",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"NW ≥500Cr or TO ≥1000Cr",0,0,["foreign_sub","listed","manufacturing"],10000,0],
["fc-1-foreign","FC-1 (Foreign Co)","MCA/ROC","event","FC-1","Section 380","high","₹3L",["foreign_sub"],["all"],"Foreign co establishing in India",0,0,["foreign_sub"],0,0],
["fc-3-annual","FC-3 (Foreign Annual)","MCA/ROC","annual","FC-3","Section 381","high","₹1L-₹5L",["foreign_sub"],["all"],"Foreign co annual filing",0,0,["foreign_sub"],0,0],
["ben-2","BEN-2 (Beneficial Ownership)","MCA/ROC","event","BEN-2","Section 90","high","₹1L-₹10L",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"SBO holding ≥10% — file 30 days",0,0,["startup","listed","foreign_sub"],0,0],
["csr-2","CSR-2 Annual Report","MCA/ROC","annual","CSR-2","Section 135(3A)","high","Penalty",["pvt_ltd","public_ltd","listed_co"],["all"],"CSR annual report — NW≥₹500Cr or TO≥₹1000Cr",31,12,["listed","manufacturing","foreign_sub"],10000,0],
["llp-form-11","LLP Form 11","LLP","annual","LLP Form 11","Section 35","critical","₹100/day",["llp"],["all"],"Annual return by 30 May",30,5,["freelancer","professional","startup"],0,0],
["llp-form-8","LLP Form 8","LLP","annual","LLP Form 8","Section 34","critical","₹100/day",["llp"],["all"],"Accounts by 30 Oct",30,10,["freelancer","professional","startup"],0,0],
["llp-itr","LLP ITR","LLP","annual","ITR-5","Section 139(1)","critical","₹5,000",["llp"],["all"],"31 Jul / 31 Oct (audit)",31,7,["freelancer","professional","startup"],0,0],
["llp-audit","LLP Audit","LLP","annual","","Section 34(4)","high","₹100/day",["llp"],["all"],"If TO >₹40L or contr >₹25L",30,9,["freelancer","professional","startup"],40,0],
["epf-payment","EPF Monthly","PF/ESI","monthly","ECR","EPF Act","critical","5-25% damages",["pvt_ltd","llp","partnership","public_ltd","opc","listed_co","foreign_sub"],["all"],"By 15th — 12%+12%",15,0,["startup","manufacturing","foreign_sub","listed","nbfc"],0,20],
["esi-payment","ESI Monthly","PF/ESI","monthly","","ESI Act","critical","12-25% damages",["pvt_ltd","llp","partnership","public_ltd","opc","listed_co","foreign_sub"],["all"],"By 15th — 3.25%+0.75%",15,0,["startup","manufacturing","foreign_sub","listed","nbfc"],0,10],
["pt-maharashtra","PT — Maharashtra","Professional Tax","monthly","PTRC","MH PT Act","high","1.25%/m",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc","listed_co","foreign_sub"],["MH"],"Monthly PT",0,0,["startup","manufacturing","foreign_sub","freelancer","salaried"],0,0],
["pt-karnataka","PT — Karnataka","Professional Tax","monthly","Form 5","KA PT Act","high","1.25%/m",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc","listed_co","foreign_sub"],["KA"],"By 20th",20,0,["startup","manufacturing","foreign_sub","freelancer","salaried"],0,0],
["pt-gujarat","PT — Gujarat","Professional Tax","monthly","Form 5","GJ PT Act","high","2%/m",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc"],["GJ"],"By 15th",15,0,["manufacturing","salaried"],0,0],
["pt-telangana","PT — Telangana","Professional Tax","monthly","Form V","TS PT Act","high","2%/m",["pvt_ltd","llp","partnership","proprietorship","public_ltd","opc"],["TS"],"By 10th",10,0,["startup","manufacturing","salaried"],0,0],
["payroll","Monthly Payroll","Payroll","monthly","","Wages Act","high","",["pvt_ltd","llp","partnership","public_ltd","opc","listed_co","foreign_sub"],["all"],"Salary, payslip, statutory",0,0,["startup","manufacturing","foreign_sub","listed","nbfc"],0,1],
["gratuity-compliance","Gratuity","Payroll","event","Form I/F/L","Gratuity Act","medium","",["pvt_ltd","llp","partnership","public_ltd","opc","listed_co","foreign_sub"],["all"],"5+ yrs — max ₹20L",0,0,["manufacturing","foreign_sub","listed"],0,10],
["bonus-payment","Annual Bonus","Payroll","annual","Form D","Bonus Act","medium","₹1K-₹5K",["pvt_ltd","llp","partnership","public_ltd","opc","listed_co","foreign_sub"],["all"],"8.33-20% within 8 months",30,11,["manufacturing","foreign_sub","listed"],0,20],
["statutory-audit","Statutory Audit","Audit","annual","","Section 143","critical","₹25K-₹5L",["pvt_ltd","public_ltd","opc","listed_co","foreign_sub"],["all"],"Mandatory annual audit",0,0,["startup","manufacturing","foreign_sub","listed","nbfc"],0,0],
["internal-audit","Internal Audit","Audit","annual","","Section 138","high","",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"TO >₹200Cr or loans >₹100Cr",0,0,["foreign_sub","listed","nbfc","manufacturing"],20000,0],
["secretarial-audit","Secretarial Audit","Audit","annual","MR-3","Section 204","medium","",["public_ltd","listed_co","foreign_sub"],["all"],"By CS — listed/prescribed",0,0,["listed","foreign_sub"],0,0],
["sebi-lodr-quarterly","SEBI LODR — Quarterly","SEBI","quarterly","LODR Reg 33","SEBI LODR","critical","₹5L+₹5K/d",["listed_co"],["all"],"Quarterly financials 45 days",0,0,["listed"],0,0],
["sebi-lodr-annual","SEBI LODR — Annual","SEBI","annual","LODR Reg 34","SEBI LODR","critical","₹5L+₹5K/d",["listed_co"],["all"],"Annual report before AGM",0,0,["listed"],0,0],
["sebi-corp-governance","SEBI — Corp Gov","SEBI","quarterly","LODR Reg 27","SEBI LODR","critical","₹5L+₹5K/d",["listed_co"],["all"],"Governance report 15 days",0,0,["listed"],0,0],
["sebi-shareholding","SEBI — Shareholding","SEBI","quarterly","LODR Reg 31","SEBI LODR","critical","₹5L+₹5K/d",["listed_co"],["all"],"21 days after quarter end",0,0,["listed"],0,0],
["sebi-pit","SEBI PIT — Insider","SEBI","continuous","PIT Reg 3","SEBI PIT","critical","₹25Cr",["listed_co"],["all"],"UPSI framework, trading window",0,0,["listed"],0,0],
["sebi-brsr","SEBI — BRSR","SEBI","annual","BRSR","SEBI Circular","high","",["listed_co"],["all"],"ESG — top 1000 / top 150",0,0,["listed"],0,0],
["sebi-rpt","SEBI — RPT","SEBI","half_yearly","LODR Reg 23","SEBI LODR","high","₹5L",["listed_co","foreign_sub"],["all"],"Related party transactions",0,0,["listed","foreign_sub"],0,0],
["sebi-cybersecurity","SEBI — CSCRF","SEBI","annual","CSCRF","SEBI 2024","critical","",["listed_co"],["all"],"Cybersecurity framework",0,0,["listed","nbfc"],0,0],
["fla-return","FLA Return","FEMA/RBI","annual","FLA Return","FEMA 1999","high","",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub"],["all"],"By 15 Jul",15,7,["foreign_sub","listed","startup"],0,0],
["ecb-reporting","ECB Monthly","FEMA/RBI","monthly","ECB-2","FEMA ECB","medium","",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"ECB reporting to RBI",7,0,["foreign_sub","listed"],0,0],
["fc-gpr","FC-GPR (FDI)","FEMA/RBI","event","FC-GPR","FEMA NDI","critical","3x penalty",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"30 days via FIRMS",0,0,["foreign_sub","startup","listed"],0,0],
["fc-trs","FC-TRS (Transfer)","FEMA/RBI","event","FC-TRS","FEMA NDI","critical","3x penalty",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"60 days via FIRMS",0,0,["foreign_sub","startup","listed"],0,0],
["form-15ca-15cb","Form 15CA/15CB","FEMA/RBI","event","15CA+15CB","Section 195","critical","Disallowance",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub"],["all"],"Foreign remittance — CA cert >₹5L",0,0,["foreign_sub","exporter","startup","listed"],0,0],
["fdi-annual-cert","FDI Compliance Cert","FEMA/RBI","annual","","FEMA NDI","high","",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"Annual CS/CA certificate",0,0,["foreign_sub","startup","listed"],0,0],
["rbi-nbfc-returns","RBI NBFC Returns","FEMA/RBI","monthly","NBS-7/ALM","RBI Dir","critical","CoR cancel",["pvt_ltd","public_ltd"],["all"],"NBS-7, ALM, NBS-1/2/3",0,0,["nbfc"],0,0],
["rbi-kyc-aml","RBI KYC/AML","FEMA/RBI","continuous","","RBI KYC Dir","critical","Penalties",["pvt_ltd","public_ltd"],["all"],"KYC, AML, CFT, STR",0,0,["nbfc","listed"],0,0],
["fema-compounding","FEMA Compounding","FEMA/RBI","event","Compounding","FEMA Sec 15","high","Up to 3x",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub"],["all"],"Voluntary compounding",0,0,["foreign_sub","startup","listed"],0,0],
["esop-fema","ESOP FEMA","FEMA/RBI","event","FC-GPR","FEMA NDI","high","",["pvt_ltd","public_ltd","listed_co","foreign_sub"],["all"],"ESOP to non-residents",0,0,["foreign_sub","startup","listed"],0,0],
["iec-update","IEC Annual Update","Customs/DGFT","annual","","FTP 2023","high","IEC deactivated",["pvt_ltd","public_ltd","llp","partnership","proprietorship","listed_co","foreign_sub"],["all"],"By 30 Jun",30,6,["exporter","manufacturing","foreign_sub"],0,0],
["aeo-renewal","AEO Renewal","Customs/DGFT","event","AEO App","Customs AEO","medium","",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub"],["all"],"AEO cert renewal",0,0,["exporter","manufacturing","foreign_sub"],0,0],
["form-10iea","Form 10-IEA","Income Tax","annual","Form 10-IEA","Section 115BAC(6)","high","",["pvt_ltd","llp","partnership","proprietorship","individual_business","huf"],["all"],"Opt out of new tax regime — business income",31,7,["freelancer","professional","manufacturing","startup"],0,0],
["capital-gains","Capital Gains Tax","Income Tax","annual","Schedule CG","Section 112A/111A","critical","Interest",["pvt_ltd","llp","partnership","proprietorship","public_ltd","listed_co","individual_salaried","individual_business","huf","foreign_sub"],["all"],"LTCG 12.5% / STCG 20% on listed equity",31,7,["crypto","startup","listed","salaried","foreign_sub"],0,0],
["angel-tax","Angel Tax (Abolished)","Income Tax","annual","","Section 56(2)(viib)","info","NIL — abolished",["pvt_ltd"],["all"],"Section 56(2)(viib) removed from FY 2024-25",0,0,["startup"],0,0],
["tds-206ab","Higher TDS 206AB","TDS/TCS","monthly","TRACES Check","Section 206AB","high","2x TDS",["pvt_ltd","public_ltd","llp","partnership","listed_co","foreign_sub"],["all"],"2x TDS if payee didn't file ITR 2 yrs",7,0,["manufacturing","nbfc","startup","foreign_sub","listed"],0,0],
["tcs-lrs","TCS on LRS Remittances","TDS/TCS","event","Form 27EQ","Section 206C(1G)","high","Equal TCS",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub","individual_salaried","individual_business"],["all"],"20% TCS above ₹7L on remittances",7,0,["foreign_sub","salaried","startup"],0,0],
["schedule-vda-crypto","Schedule VDA (Crypto)","Income Tax","annual","ITR-2/ITR-3","Section 115BBH","critical","200% penalty",["pvt_ltd","individual_salaried","individual_business","huf"],["all"],"Mandatory VDA disclosure — 30% flat tax",31,7,["crypto"],0,0],
["schedule-fa-foreign","Schedule FA (Foreign Assets)","Income Tax","annual","ITR-2/3/6","Black Money Act","critical","₹10L penalty",["pvt_ltd","public_ltd","listed_co","foreign_sub","individual_salaried","individual_business"],["all"],"Foreign assets/accounts mandatory disclosure",31,7,["foreign_sub","crypto","listed","salaried"],0,0],
["fla-return","FLA Annual Return","FEMA/RBI","annual","FLA / FLAIR","FEMA 1999","critical","₹10K/yr",["pvt_ltd","public_ltd","llp","listed_co","foreign_sub"],["all"],"All cos with FDI/ODI — by 15 July",15,7,["foreign_sub","startup","listed","nbfc"],0,0],
["apl-odr","APR / ODI Annual","FEMA/RBI","annual","APR via FIRMS","FEMA OI Regs","high","Freeze ODI",["pvt_ltd","public_ltd","listed_co"],["all"],"Annual Performance Report for overseas JV/WOS",31,12,["foreign_sub","startup","listed"],0,0],
["sebi-rpt-half","SEBI RPT Disclosure","SEBI","half_yearly","LODR Reg 23","SEBI LODR","high","₹5L",["listed_co"],["all"],"Related party transactions — half-yearly",0,0,["listed"],0,0],
["iec-annual-update","IEC Annual Update","Customs/DGFT","annual","IEC Portal","FTP 2023-28","high","IEC deactivated",["pvt_ltd","llp","partnership","proprietorship","public_ltd","listed_co","foreign_sub"],["all"],"Mandatory update by 30 June else IEC deactivated",30,6,["exporter","manufacturing","foreign_sub"],0,0]
];

// ── Parse into objects ──
const COMP=(()=>{const seen=new Set();return D.filter(d=>{if(seen.has(d[0]))return false;seen.add(d[0]);return true;}).map(d=>({slug:d[0],name:d[1],cat:d[2],freq:d[3],form:d[4],act:d[5],priority:d[6],penalty:d[7],entities:d[8],states:d[9],desc:d[10],dueDay:d[11],dueMonth:d[12],industries:d[13],toMinL:d[14],empMin:d[15]}));})();
const MO=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
const FY_MO=["Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec","Jan","Feb","Mar"];

// ── Rule helpers ──
function getChanges(slug,fy){const r=VR[slug];if(!r)return[];const c=[];for(const k in r)r[k].forEach(x=>{if(x.f===fy&&x.y!=="no_change")c.push({...x,rk:k});});return c;}
function getAllChanges(fy){const a=[];for(const s in VR){const comp=COMP.find(c=>c.slug===s);for(const k in VR[s])VR[s][k].forEach(x=>{if(x.f===fy&&x.y!=="no_change")a.push({...x,slug:s,rk:k,name:comp?.name||s,cat:comp?.cat||""});});}return a.sort((a,b)=>({"critical":0,"major":1,"minor":2,"info":3}[a.s]||3)-({"critical":0,"major":1,"minor":2,"info":3}[b.s]||3));}
function getActive(slug,fy){const r=VR[slug];if(!r)return{};const a={};for(const k in r){const f=r[k].filter(x=>x.f<=fy&&(!x.t||x.t>=fy));if(f.length)a[k]=f[f.length-1];}return a;}
function sevBadgeHTML(s){return`<span class="sev-badge sev-${s}"><span class="dot"></span>${s.toUpperCase()}</span>`;}
function catColor(cat){return(CATS.find(c=>c[0]===cat)||["","","#888"])[2];}
function catIcon(cat){return(CATS.find(c=>c[0]===cat)||["","📄"])[1];}

// ── State ──
let selFy="2025-26",selCat=null,selInd="all",selTO="all",selEmp="all",selEnt="",selState="all",searchQ="",onlyChanged=false,viewMode="grid";

// ── Phone gate state ──
let intlMode=false;

function toggleInternationalMode(){
  intlMode=!intlMode;
  const prefix=document.getElementById('phonePrefix');
  const input=document.getElementById('emailGateInput');
  const esc=document.getElementById('phoneEscape');
  if(intlMode){
    prefix.textContent='🌍';
    input.placeholder='Country code + number e.g. 447911123456';
    input.maxLength=18;
    esc.textContent='← Back to India (+91)';
  } else {
    prefix.textContent='🇮🇳 +91';
    input.placeholder='98765 43210';
    input.maxLength=10;
    esc.textContent='Outside India? Enter with country code →';
  }
  document.getElementById('emailGateInput').value='';
  document.getElementById('phoneGateHint').textContent='';
  document.getElementById('phoneGateRow').classList.remove('error');
}

// ── Init ──
function init(){
  document.getElementById("heroCount").textContent=COMP.length;
  // Dropdowns
  const fE=document.getElementById("fEntity");ENTS.forEach(e=>{const o=document.createElement("option");o.value=e[0];o.textContent=e[1];fE.appendChild(o);});
  const fT=document.getElementById("fTurnover");TO_SLABS.slice(1).forEach(s=>{const o=document.createElement("option");o.value=s[0];o.textContent=s[1];fT.appendChild(o);});
  const fEm=document.getElementById("fEmployees");EMP_SLABS.slice(1).forEach(s=>{const o=document.createElement("option");o.value=s[0];o.textContent=s[1];fEm.appendChild(o);});
  const fS=document.getElementById("fState");STATES.slice(1).forEach(s=>{const o=document.createElement("option");o.value=s[0];o.textContent=s[1];fS.appendChild(o);});
  // Industry chips
  const ib=document.getElementById("industryBar");INDS.forEach(i=>{const b=document.createElement("button");b.className="filter-chip"+(i[0]==="all"?" active":"");b.textContent=i[2]+" "+i[1];b.onclick=()=>{selInd=i[0];ib.querySelectorAll(".filter-chip").forEach(c=>c.classList.remove("active"));b.classList.add("active");applyFilters();};ib.appendChild(b);});
  // FY bar
  const fb=document.getElementById("fyBar");FYS.forEach(fy=>{const b=document.createElement("button");b.className="fy-chip"+(fy.code===selFy?" active":"");const ch=getAllChanges(fy.code);b.innerHTML=fy.label+(fy.cur?'<span class="now-tag">NOW</span>':"")+(ch.length?`<span class="change-badge" style="background:${ch.some(c=>c.s==="critical")?"#DC2626":"#E8622A"}">${ch.length}</span>`:"");b.onclick=()=>{selFy=fy.code;fb.querySelectorAll(".fy-chip").forEach(c=>c.classList.remove("active"));b.classList.add("active");document.getElementById("heroFy").textContent=fy.code;document.getElementById("tldrFy").textContent=fy.code;document.getElementById("wcFy").textContent=fy.code;applyFilters();};fb.appendChild(b);});
  // Category bar
  const cb=document.getElementById("catBar");const allB=document.createElement("button");allB.className="filter-chip active";allB.textContent="All";allB.onclick=()=>{selCat=null;cb.querySelectorAll(".filter-chip").forEach(c=>c.classList.remove("active"));allB.classList.add("active");applyFilters();};cb.appendChild(allB);
  CATS.forEach(cat=>{const b=document.createElement("button");b.className="filter-chip";b.textContent=cat[1]+" "+cat[0];b.setAttribute("aria-label","Filter by "+cat[0]);b.onclick=()=>{selCat=selCat===cat[0]?null:cat[0];cb.querySelectorAll(".filter-chip").forEach(c=>c.classList.remove("active"));if(selCat)b.classList.add("active");else allB.classList.add("active");applyFilters();};cb.appendChild(b);});
  // Sidebar stats
  const ss=document.getElementById("sidebarStats");[["Total Compliances",COMP.length],["Regulators / Acts",CATS.length],["Versioned Rules",Object.keys(VR).length],["Industries Covered",INDS.length-1],["SEBI Compliances",COMP.filter(c=>c.cat==="SEBI").length],["FEMA/RBI Items",COMP.filter(c=>c.cat==="FEMA/RBI").length],["FY History",FYS.length+" years"]].forEach(([l,v])=>{ss.innerHTML+=`<div class="sidebar-stat"><span class="sidebar-stat-label">${l}</span><span class="sidebar-stat-value">${v}</span></div>`;});
  // WA strip session check
  if(sessionStorage.getItem('pa_wa_strip_dismissed'))document.getElementById('waStrip').classList.add('hidden');
  applyFilters();
}

function getFiltered(){
  const maxTL=TO_SLABS.find(s=>s[0]===selTO)?.[2]??1e15;
  const maxEm=EMP_SLABS.find(s=>s[0]===selEmp)?.[2]??1e9;
  return COMP.filter(c=>{
    if(selCat&&c.cat!==selCat)return false;
    if(selState!=="all"&&!c.states.includes("all")&&!c.states.includes(selState))return false;
    if(selEnt&&!c.entities.includes(selEnt))return false;
    if(selInd!=="all"&&!c.industries.includes(selInd))return false;
    if(selTO!=="all"&&c.toMinL>0&&c.toMinL>maxTL)return false;
    if(selEmp!=="all"&&c.empMin>0&&c.empMin>maxEm)return false;
    if(onlyChanged&&getChanges(c.slug,selFy).length===0)return false;
    if(searchQ&&!c.name.toLowerCase().includes(searchQ)&&!c.desc.toLowerCase().includes(searchQ)&&!c.slug.includes(searchQ)&&!c.form.toLowerCase().includes(searchQ)&&!c.cat.toLowerCase().includes(searchQ))return false;
    return true;
  });
}

function applyFilters(){
  selEnt=document.getElementById("fEntity").value;selTO=document.getElementById("fTurnover").value;selEmp=document.getElementById("fEmployees").value;selState=document.getElementById("fState").value;searchQ=document.getElementById("fSearch").value.toLowerCase();
  const filtered=getFiltered();
  const fyC=getAllChanges(selFy);
  document.getElementById("rApplicable").textContent=filtered.length;
  document.getElementById("rChanges").textContent=fyC.length;
  document.getElementById("rCritical").textContent=fyC.filter(c=>c.s==="critical").length;
  document.getElementById("heroCount").textContent=filtered.length;
  const rcb=document.getElementById("resultCountBar");
  if(rcb){const hasF=selInd!=="all"||selTO!=="all"||selEmp!=="all"||selEnt||selState!=="all"||selCat||onlyChanged||searchQ;rcb.innerHTML=hasF?`Showing <span class="count-num">${filtered.length}</span> of ${COMP.length} compliances`:`<span class="count-num">${filtered.length}</span> compliances tracked`;}
  document.getElementById("changedCount").textContent=COMP.filter(c=>getChanges(c.slug,selFy).length>0).length;
  document.getElementById("wcCtaText").textContent=`${fyC.filter(c=>c.s==="critical").length} critical and ${fyC.filter(c=>c.s==="major").length} major changes tracked in FY ${selFy}.`;
  const hasF=selInd!=="all"||selTO!=="all"||selEmp!=="all"||selEnt||selState!=="all";
  document.getElementById("btnReset").style.display=hasF?"inline-flex":"none";
  renderActiveTags();
  if(viewMode==="grid")renderGrid(filtered);else renderCal(filtered);
  document.getElementById("emptyState").style.display=filtered.length===0?"block":"none";
  document.getElementById("gridView").style.display=viewMode==="grid"&&filtered.length?"grid":"none";
  document.getElementById("calView").style.display=viewMode==="cal"&&filtered.length?"grid":"none";
}

function renderActiveTags(){
  const af=document.getElementById("activeFilters");if(!af)return;af.innerHTML="";
  const add=(label,removeFn)=>{const d=document.createElement("div");d.className="active-filter-tag";d.innerHTML=label+'<button class="remove-tag" title="Remove filter">×</button>';d.querySelector(".remove-tag").onclick=removeFn;af.appendChild(d);};
  if(selEnt){const l=(ENTS.find(e=>e[0]===selEnt)||["","Entity"])[1];add(l,()=>{document.getElementById("fEntity").value="";selEnt="";applyFilters();});}
  if(selTO&&selTO!=="all"){const l=(TO_SLABS.find(s=>s[0]===selTO)||["","Turnover"])[1];add(l,()=>{document.getElementById("fTurnover").value="all";selTO="all";applyFilters();});}
  if(selEmp&&selEmp!=="all"){const l=(EMP_SLABS.find(s=>s[0]===selEmp)||["","Employees"])[1];add(l,()=>{document.getElementById("fEmployees").value="all";selEmp="all";applyFilters();});}
  if(selState&&selState!=="all"){const l=(STATES.find(s=>s[0]===selState)||["","State"])[1];add(l,()=>{document.getElementById("fState").value="all";selState="all";applyFilters();});}
  if(selInd&&selInd!=="all"){const l=(INDS.find(i=>i[0]===selInd)||["","Industry"])[1];add(l,()=>{selInd="all";document.getElementById("industryBar").querySelectorAll(".filter-chip").forEach((b,i)=>b.classList.toggle("active",i===0));applyFilters();});}
  if(selCat){add(selCat,()=>{selCat=null;document.getElementById("catBar").querySelectorAll(".filter-chip").forEach((b,i)=>b.classList.toggle("active",i===0));applyFilters();});}
  if(searchQ){add(`"${searchQ}"`,()=>{searchQ="";document.getElementById("fSearch").value="";applyFilters();});}
  if(onlyChanged){add("Changed only",()=>{onlyChanged=false;document.getElementById("btnChanged").classList.remove("accent-active");applyFilters();});}
}

function renderGrid(items){
  const g=document.getElementById("gridView");g.innerHTML="";
  items.forEach(c=>{
    const ch=getChanges(c.slug,selFy);const hasC=ch.length>0;
    const maxS=hasC?ch.reduce((m,x)=>({"critical":0,"major":1,"minor":2,"info":3}[x.s]||3)<({"critical":0,"major":1,"minor":2,"info":3}[m]||3)?x.s:m,"info"):"";
    const cc=catColor(c.cat);const ci=catIcon(c.cat);
    let html=`<div class="comp-card${hasC?" has-change":""}" onclick="openDetail('${c.slug}')">`;
    if(hasC)html+=`<div class="change-badges">${sevBadgeHTML(maxS)}<span class="delta-badge">${ch.length}Δ</span></div>`;
    const dueTxt=c.dueDay&&c.dueMonth?`${c.dueDay} ${MO[c.dueMonth-1]}`:c.dueDay?`${c.dueDay}th of month`:c.freq==="monthly"?"15th of month":c.freq==="continuous"?"Ongoing":null;
    html+=`<div style="display:flex;align-items:flex-start;gap:14px"><div class="comp-icon">${ci}</div><div style="flex:1;min-width:0"><div class="comp-name">${c.name}</div><div class="comp-desc">${c.desc}</div>${dueTxt?`<div class="card-due"><span class="due-label">Due:</span><span class="due-val">&nbsp;${dueTxt}</span></div>`:""}<div class="comp-tags"><span class="tag tag-cat" style="background:${cc}15;color:${cc}">${c.cat}</span><span class="tag tag-freq">${FREQ[c.freq]}</span>`;
    if(c.form)html+=`<span class="tag-form">${c.form}</span>`;
    if(c.toMinL>0)html+=`<span class="tag tag-turnover">₹${c.toMinL>=100?(c.toMinL/100)+"Cr":c.toMinL+"L"}+</span>`;
    if(c.empMin>0)html+=`<span class="tag tag-emp">${c.empMin}+ emp</span>`;
    const priCls={critical:"pri-critical",high:"pri-high",medium:"pri-medium",low:"pri-low"}[c.priority]||"pri-low";const priLbl={critical:"Critical",high:"High",medium:"Medium",low:"Low"}[c.priority]||c.priority;
    html+=`<span class="pri-badge ${priCls}"><span class="pri-dot-sm" style="background:${PRI_C[c.priority]||"#767676"}"></span>${priLbl}</span></div></div></div>`;
    if(hasC){html+=`<div class="comp-changes">`;ch.slice(0,2).forEach(x=>{const sc=SEV_C[x.s]||SEV_C.info;html+=`<div class="comp-change-line"><span class="cdot" style="background:${sc[3]}"></span><span style="color:${sc[2]};overflow:hidden;text-overflow:ellipsis;white-space:nowrap">${x.n||x.d}</span></div>`;});if(ch.length>2)html+=`<div style="font-size:10px;color:var(--text-muted);margin-top:2px">+${ch.length-2} more</div>`;html+=`</div>`;}
    html+=`</div>`;g.innerHTML+=html;
  });
}

function renderCal(items){
  const g=document.getElementById("calView");g.innerHTML="";
  const nowMo=new Date().getMonth()+1;
  const fyMoNums=[4,5,6,7,8,9,10,11,12,1,2,3];
  const months={};FY_MO.forEach(m=>{months[m]=[];});
  items.forEach(c=>{if(c.dueMonth){const k=MO[c.dueMonth-1];if(months[k])months[k].push(c);}});
  Object.entries(months).forEach(([mo,comps],idx)=>{
    const moNum=fyMoNums[idx];
    const isToday=moNum===nowMo;
    const todayTag=isToday?'<span class="cal-today-tag">TODAY</span>':"";
    let html=`<div class="cal-month${isToday?" is-today":""}" id="cal-mo-${moNum}"><div class="cal-month-head"><span class="cal-month-name">${mo}${todayTag}</span><span class="cal-month-count" style="background:${comps.length?"var(--primary)":"transparent"};color:${comps.length?"#fff":"var(--text-muted)"}">${comps.length}</span></div><div class="cal-month-body">`;
    if(!comps.length)html+=`<div style="font-size:13px;color:var(--text-muted);text-align:center;padding:16px">No deadlines</div>`;
    else comps.forEach(c=>{const ch=getChanges(c.slug,selFy);html+=`<div class="cal-item${ch.length?" changed":""}" style="border-left-color:${PRI_C[c.priority]||"var(--border)"}" onclick="openDetail('${c.slug}')"><div class="cal-item-name">${c.name}</div><div class="cal-item-meta">${c.dueDay?c.dueDay+" "+mo:""}${c.form?" · "+c.form:""}</div></div>`;});
    html+=`</div></div>`;g.innerHTML+=html;
  });
  const todayCard=document.getElementById("cal-mo-"+nowMo);
  if(todayCard)requestAnimationFrame(()=>todayCard.scrollIntoView({behavior:"smooth",block:"nearest"}));
}

function openDetail(slug){
  const c=COMP.find(x=>x.slug===slug);if(!c)return;
  const ch=getChanges(slug,selFy);const active=getActive(slug,selFy);const allR=VR[slug];const cc=catColor(c.cat);
  let h=`<div class="drawer-head"><button class="drawer-close" onclick="closeDrawer()">✕</button><div class="drawer-cat" style="color:rgba(255,255,255,0.7)">${catIcon(c.cat)} ${c.cat}</div><div class="drawer-title">${c.name}</div><div class="drawer-desc">${c.desc}</div>`;
  if(ch.length)h+=`<div style="display:flex;gap:6px;margin-top:10px;flex-wrap:wrap">${ch.map(x=>sevBadgeHTML(x.s)).join("")}<span class="delta-badge" style="background:rgba(255,255,255,0.15);color:#fff">${ch.length} change${ch.length>1?"s":""} in FY ${selFy}</span></div>`;
  h+=`</div><div class="drawer-body"><div class="detail-grid">`;
  [["Form",c.form||"—"],["Act/Section",c.act],["Penalty",c.penalty||"None"],["Priority",c.priority.toUpperCase()],["Frequency",FREQ[c.freq]],["Entities",c.entities.length?c.entities.slice(0,3).map(e=>(ENTS.find(x=>x[0]===e)||["","",""])[2]).join(", ")+(c.entities.length>3?` +${c.entities.length-3}`:""):"Specific"],["Turnover",c.toMinL>0?(c.toMinL>=100?`₹${c.toMinL/100}Cr+`:`₹${c.toMinL}L+`):"Any"],["Employees",c.empMin>0?`${c.empMin}+`:"Any"]].forEach(([l,v])=>{h+=`<div class="detail-cell"><div class="detail-cell-label">${l}</div><div class="detail-cell-value">${v}</div></div>`;});
  h+=`</div>`;
  const inds=c.industries.map(i=>INDS.find(x=>x[0]===i)).filter(Boolean);
  if(inds.length){h+=`<div style="margin-bottom:20px"><div style="font-size:11px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:8px">Industries</div><div style="display:flex;gap:6px;flex-wrap:wrap">${inds.map(i=>`<span style="font-size:12px;padding:4px 10px;border-radius:8px;background:var(--surface-alt);color:var(--text-secondary)">${i[2]} ${i[1]}</span>`).join("")}</div></div>`;}
  if(Object.keys(active).length){h+=`<h3 style="font-size:15px;font-weight:700;color:var(--primary-dark);margin-bottom:10px">Active Rules — FY ${selFy}</h3><div class="active-rules-box">`;for(const k in active){const r=active[k];h+=`<div style="margin-bottom:8px"><div class="rule-key">${k.replace(/_/g," ")}</div><div class="rule-val">${r.v}</div><div class="rule-desc">${r.d}</div></div>`;}h+=`</div>`;}
  if(ch.length){h+=`<h3 style="font-size:15px;font-weight:700;color:var(--primary-dark);margin-bottom:10px">Changes in FY ${selFy}</h3>`;ch.forEach(x=>{const sc=SEV_C[x.s];h+=`<div class="change-card" style="background:${sc[0]};border:1px solid ${sc[1]}">${sevBadgeHTML(x.s)} <span style="font-size:12px;color:var(--text-muted);margin-left:8px">${CHG_L[x.y]||x.y}</span><div class="change-val" style="color:${sc[2]};margin-top:6px">${x.v}</div><div class="change-desc">${x.d}</div>${x.g?`<div class="change-gazette">📜 ${x.g}</div>`:""}${x.n?`<div class="change-notif" style="color:${sc[2]}">${x.n}</div>`:""}</div>`;});}
  if(allR){h+=`<h3 style="font-size:15px;font-weight:700;color:var(--primary-dark);margin-bottom:10px">Version History</h3><div class="version-box">`;for(const k in allR){h+=`<div style="font-size:11px;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.5px;padding:8px 12px 0;background:var(--surface)">${k.replace(/_/g," ")}</div>`;allR[k].forEach(v=>{h+=`<div class="ver-entry ${v.c?"current":"past"}"><div style="flex:1"><div class="ver-fy">FY ${v.f}${v.t&&v.t!==v.f?" – "+v.t:" → Present"}${v.c?`<span class="ver-current-tag">CURRENT</span>`:""}</div><div class="ver-val">${v.v}</div><div class="ver-desc">${v.d}</div>${v.g?`<div class="ver-gazette">📜 ${v.g}</div>`:""}</div></div>`;});}h+=`</div>`;}
  h+=`<a href="https://wa.me/${WA_NUMBER}?text=${encodeURIComponent("Hi, I need help with "+c.name+" for FY "+selFy+".")}" target="_blank" rel="noopener noreferrer" class="wa-cta">💬 Get Expert Help — ${c.name}</a></div>`;
  const allSlugs=getFiltered().map(c=>c.slug);
  const dIdx=allSlugs.indexOf(slug);
  const prevS=dIdx>0?allSlugs[dIdx-1]:null;
  const nextS=dIdx<allSlugs.length-1?allSlugs[dIdx+1]:null;
  const navBar=`<div class="drawer-nav"><button class="drawer-nav-btn" ${prevS?`onclick="openDetail('${prevS}')"`:'disabled'}>← Prev</button><span class="drawer-nav-counter">${dIdx+1} / ${allSlugs.length}</span><button class="drawer-nav-btn" ${nextS?`onclick="openDetail('${nextS}')"`:'disabled'}>Next →</button></div>`;
  document.getElementById("drawerPanel").innerHTML=navBar+h;
  document.getElementById("drawer").classList.add("open");
  document.body.style.overflow="hidden";
}
function closeDrawer(){document.getElementById("drawer").classList.remove("open");document.body.style.overflow="";}

function openWhatChanged(){
  const ch=getAllChanges(selFy);const grouped={};ch.forEach(c=>{if(!grouped[c.cat])grouped[c.cat]=[];grouped[c.cat].push(c);});
  let h=`<div class="modal-head"><button class="drawer-close" onclick="closeWC()">✕</button><div style="font-size:11px;font-weight:700;color:rgba(255,255,255,0.6);text-transform:uppercase;letter-spacing:1px">Regulatory Changes</div><h2>What Changed in FY ${selFy}</h2><div style="display:flex;gap:10px;margin-top:14px">`;
  [{l:"Critical",n:ch.filter(c=>c.s==="critical").length,c:"#FCA5A5"},{l:"Major",n:ch.filter(c=>c.s==="major").length,c:"#FCD34D"},{l:"Total",n:ch.length,c:"#fff"}].forEach(s=>{h+=`<div style="padding:8px 14px;border-radius:8px;background:rgba(255,255,255,0.08);flex:1;text-align:center"><div style="font-size:20px;font-weight:800;color:${s.c};font-family:var(--font-mono)">${s.n}</div><div style="font-size:11px;color:rgba(255,255,255,0.6)">${s.l}</div></div>`;});
  h+=`</div></div><div class="modal-body">`;
  for(const cat in grouped){const items=grouped[cat];h+=`<div style="margin-bottom:24px"><div class="wc-cat-head"><span style="font-size:18px">${catIcon(cat)}</span><span class="wc-cat-name">${cat}</span><span class="wc-cat-count">${items.length}</span></div>`;items.forEach(c=>{const sc=SEV_C[c.s];h+=`<div class="wc-item" style="background:${sc[0]};border:1px solid ${sc[1]}" onclick="closeWC();openDetail('${c.slug}')">${sevBadgeHTML(c.s)} <span style="font-size:14px;font-weight:700;color:var(--text);margin-left:8px">${c.name}</span><span style="font-size:11px;color:var(--text-muted);float:right">${CHG_L[c.y]||""}</span><div style="font-size:13px;color:var(--text-secondary);line-height:1.6;margin-top:4px">${c.d}</div>${c.n?`<div style="font-size:13px;margin-top:4px;color:${sc[2]};font-weight:700">${c.n}</div>`:""}</div>`;});h+=`</div>`;}
  h+=`</div>`;document.getElementById("wcPanel").innerHTML=h;document.getElementById("wcModal").classList.add("open");document.body.style.overflow="hidden";
}
function closeWC(){document.getElementById("wcModal").classList.remove("open");document.body.style.overflow="";}
function setView(mode,btn){viewMode=mode;document.querySelectorAll(".view-btn").forEach(b=>b.classList.remove("active"));btn.classList.add("active");applyFilters();}
function toggleChanged(){onlyChanged=!onlyChanged;document.getElementById("btnChanged").classList.toggle("accent-active",onlyChanged);applyFilters();}
function clearAll(){selInd="all";selTO="all";selEmp="all";selEnt="";selState="all";selCat=null;onlyChanged=false;searchQ="";document.getElementById("fEntity").value="";document.getElementById("fTurnover").value="all";document.getElementById("fEmployees").value="all";document.getElementById("fState").value="all";document.getElementById("fSearch").value="";document.getElementById("industryBar").querySelectorAll(".filter-chip").forEach((b,i)=>b.classList.toggle("active",i===0));document.getElementById("catBar").querySelectorAll(".filter-chip").forEach((b,i)=>b.classList.toggle("active",i===0));document.getElementById("btnChanged").classList.remove("accent-active");applyFilters();}
function toggleFaq(btn){const item=btn.closest('.faq-item');if(!item)return;const isOpen=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>{i.classList.remove('open');const q=i.querySelector('.faq-question');if(q)q.setAttribute('aria-expanded','false');});if(!isOpen){item.classList.add('open');btn.setAttribute('aria-expanded','true');}}

// ── WhatsApp Strip ──
function dismissWaStrip(){document.getElementById('waStrip').classList.add('hidden');sessionStorage.setItem('pa_wa_strip_dismissed','1');}

// ── Phone Gate ──
function closeEmailGate(){document.getElementById('emailGate').classList.remove('open');document.body.style.overflow='';}
function skipEmailGate(){closeEmailGate();sessionStorage.setItem('pa_email_captured','skip');downloadPDF();}
function submitEmailGate(){
  const input=document.getElementById('emailGateInput');
  const hint=document.getElementById('phoneGateHint');
  const row=document.getElementById('phoneGateRow');
  const raw=input.value.replace(/[\s\-\.]/g,'').trim();
  let valid=false;let fullNum='';
  if(intlMode){
    // International: 7-15 digits
    valid=/^[0-9]{7,15}$/.test(raw);
    fullNum=raw;
    if(!valid){row.classList.add('error');hint.textContent='Please enter a valid number (7–15 digits, no spaces).';input.focus();return;}
  } else {
    // India: 10 digits starting 6-9
    valid=/^[6-9][0-9]{9}$/.test(raw);
    fullNum='91'+raw;
    if(!valid){row.classList.add('error');hint.textContent='Please enter a valid 10-digit Indian mobile number.';input.focus();return;}
  }
  row.classList.remove('error');hint.textContent='';
  sessionStorage.setItem('pa_email_captured','wa:'+fullNum);
  // POST to lead capture (standalone HTML version - non-blocking)
  fetch('/api/lead-capture',{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({phone:fullNum,source:'compliance_calendar_pdf_wa',fy:selFy})}).catch(()=>{});
  closeEmailGate();
  const msg=encodeURIComponent('Hi, please send me the India Compliance Calendar PDF for FY '+selFy+'. My details: [Name / Company]');
  window.open('https://wa.me/'+WA_NUMBER+'?text='+msg,'_blank','noopener,noreferrer');
  console.log("Rohit0");
  downloadPDF();
}

// ── PDF — filter-aware month-by-month diary ──
function downloadPDF(){
  const waKey=sessionStorage.getItem('pa_email_captured');
  if(!waKey){document.getElementById('emailGate').classList.add('open');document.body.style.overflow='hidden';return;}
  const btn=document.getElementById('btnPDF');btn.textContent='⏳ Generating…';btn.disabled=true;btn.classList.add('loading');
  const loadScript=(src)=>new Promise((res,rej)=>{if(document.querySelector(`script[src="${src}"]`))return res();const s=document.createElement('script');s.src=src;s.onload=res;s.onerror=rej;document.head.appendChild(s);});
 console.log("TEsting.1111.");
  Promise.all([
    loadScript('https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js'),
    loadScript('https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js')
  ]).then(()=>{
    console.log("TEsting..");
    const{jsPDF}=window.jspdf;
    const doc=new jsPDF({orientation:'portrait',unit:'mm',format:'a4'});
    const filtered=getFiltered();
    const fy=selFy;
    const startYear=parseInt(fy.split('-')[0]);
    const entName=selEnt?(ENTS.find(e=>e[0]===selEnt)?.[1])||"All":"All Entities";
    const indName=selInd!=="all"?(INDS.find(i=>i[0]===selInd)?.[1])||"All":"All Industries";
    const toName=(TO_SLABS.find(s=>s[0]===selTO)?.[1])||"Any";
    const empName=(EMP_SLABS.find(s=>s[0]===selEmp)?.[1])||"Any";
    const stName=(STATES.find(s=>s[0]===selState)?.[1])||"All India";
    const pageW=doc.internal.pageSize.getWidth();
    const pageH=doc.internal.pageSize.getHeight();
    const NAVY=[27,43,75];const ORANGE=[232,98,42];const CREAM=[245,240,232];
    const p2=n=>n<10?'0'+n:''+n;
    // Build event list
    const events=[];
    filtered.forEach(c=>{
      const clamp=(d,yr,mo)=>Math.min(d,new Date(yr,mo+1,0).getDate());
      const addE=(dateObj)=>{if(!dateObj||isNaN(dateObj))return;events.push({date:dateObj,comp:c});};
      if(c.freq==='monthly'){
        for(let m=0;m<12;m++){const moIdx=(m+3)%12;const yr=m<9?startYear:startYear+1;addE(new Date(yr,moIdx,clamp(c.dueDay||15,yr,moIdx)));}
      } else if(c.freq==='quarterly'){
        [[5,c.dueDay||15],[8,c.dueDay||15],[11,c.dueDay||15],[2,c.dueDay||15]].forEach(([moIdx,day])=>{const actualMo=((moIdx%12)+12)%12;const yr=actualMo>=3?startYear:startYear+1;addE(new Date(yr,actualMo,clamp(day,yr,actualMo)));});
      } else if(c.freq==='half_yearly'){
        addE(new Date(startYear,9,clamp(c.dueDay||15,startYear,9)));
        addE(new Date(startYear+1,3,clamp(c.dueDay||15,startYear+1,3)));
      } else if(c.dueDay&&c.dueMonth){
        const moIdx=c.dueMonth-1;const yr=moIdx>=3?startYear:startYear+1;
        addE(new Date(yr,moIdx,clamp(c.dueDay,yr,moIdx)));
      }
    });
    events.sort((a,b)=>a.date-b.date);

    const MONTH_NAMES=['April','May','June','July','August','September','October','November','December','January','February','March'];
    const monthMap={};
    events.forEach(ev=>{const key=ev.date.getFullYear()+'-'+p2(ev.date.getMonth()+1);if(!monthMap[key])monthMap[key]=[];monthMap[key].push(ev);});
    const orderedMonths=[];
    for(let m=0;m<12;m++){const moIdx=(m+3)%12;const yr=m<9?startYear:startYear+1;const key=yr+'-'+p2(moIdx+1);orderedMonths.push({key,label:MONTH_NAMES[m],yr,moIdx});}

    const drawFooter=()=>{doc.setFontSize(7);doc.setTextColor(150,150,150);doc.setFont('helvetica','normal');doc.text('Patron Accounting LLP  |  patronaccounting.com  |  WhatsApp: +91 94594 56700',pageW/2,pageH-5,{align:'center'});doc.text('Pg '+doc.internal.getCurrentPageInfo().pageNumber,pageW-10,pageH-5,{align:'right'});};

    // COVER PAGE
    doc.setFillColor(...NAVY);doc.rect(0,0,pageW,48,'F');
    doc.setFillColor(...ORANGE);doc.rect(0,48,pageW,3,'F');
    doc.setFont('helvetica','bold');doc.setFontSize(22);doc.setTextColor(255,255,255);
    doc.text('India Compliance Calendar',14,20);
    doc.setFontSize(13);doc.setTextColor(232,176,128);
    doc.text('FY '+fy+' — Your Personalised Due Date Diary',14,30);
    doc.setFontSize(8);doc.setFont('helvetica','normal');doc.setTextColor(200,210,230);
    doc.text('Prepared by Patron Accounting LLP  ·  CA Sundram Gupta (FCA)  ·  '+new Date().toLocaleDateString('en-IN',{day:'numeric',month:'long',year:'numeric'}),14,40);

    // Profile card
    doc.setFillColor(...CREAM);doc.roundedRect(10,56,pageW-20,42,3,3,'F');
    doc.setFont('helvetica','bold');doc.setFontSize(9);doc.setTextColor(...NAVY);
    doc.text('YOUR BUSINESS PROFILE',14,64);
    doc.setDrawColor(...ORANGE);doc.setLineWidth(0.5);doc.line(14,66,pageW-14,66);
    [['Entity Type',entName],['Turnover',toName],['Employees',empName],['State',stName],['Industry',indName]].forEach(([l,v],i)=>{
      const col=i<3?14:105;const row=70+(i%3)*8;
      doc.setFont('helvetica','normal');doc.setFontSize(8);doc.setTextColor(100,110,130);doc.text(l+':',col,row);
      doc.setFont('helvetica','bold');doc.setTextColor(...NAVY);doc.text(v,col+30,row);
    });
    doc.setFillColor(...ORANGE);doc.roundedRect(10,102,pageW-20,16,3,3,'F');
    doc.setFont('helvetica','bold');doc.setFontSize(13);doc.setTextColor(255,255,255);
    doc.text('Your '+filtered.length+' compliances for FY '+fy,pageW/2,113,{align:'center'});
    const filterNote=[entName!=="All Entities"?entName:null,stName!=="All India"?stName:null,toName!=="Any"?toName:null,empName!=="Any"?empName+" emp":null,indName!=="All Industries"?indName:null].filter(Boolean).join(' · ')||"No specific filters applied";
    doc.setFont('helvetica','italic');doc.setFontSize(8);doc.setTextColor(60,80,120);
    doc.text('Filtered for: '+filterNote,pageW/2,125,{align:'center'});
    drawFooter();

    // MONTH PAGES
    orderedMonths.forEach(({key,label,yr,moIdx})=>{
      const evs=monthMap[key];if(!evs||!evs.length)return;
      doc.addPage();
      doc.setFillColor(...NAVY);doc.rect(0,0,pageW,18,'F');
      doc.setFillColor(...ORANGE);doc.rect(0,18,pageW,2,'F');
      doc.setFont('helvetica','bold');doc.setFontSize(14);doc.setTextColor(255,255,255);
      doc.text(label+' '+yr,14,13);
      doc.setFontSize(9);doc.setTextColor(180,190,210);
      doc.text(evs.length+' deadline'+(evs.length!==1?'s':''),pageW-14,13,{align:'right'});
      const rows=evs.map(ev=>{
        const c=ev.comp;
        const dueDate=ev.date.getDate()+' '+MO[ev.date.getMonth()]+' '+ev.date.getFullYear();
        const changes=getChanges(c.slug,selFy);
        return[dueDate,c.name,c.cat,c.form||'—',c.priority.toUpperCase()+(changes.length?' ⚡':''),c.penalty||'—'];
      });
      doc.autoTable({startY:24,head:[['Due Date','Compliance','Category','Form','Priority','Penalty']],body:rows,styles:{fontSize:8,cellPadding:3,lineColor:[220,225,235],lineWidth:0.3},headStyles:{fillColor:NAVY,textColor:255,fontStyle:'bold',fontSize:8},alternateRowStyles:{fillColor:[248,246,242]},columnStyles:{0:{cellWidth:26},1:{cellWidth:55},2:{cellWidth:26},3:{cellWidth:22},4:{cellWidth:20},5:{cellWidth:30}},margin:{left:10,right:10},didDrawPage:drawFooter});
    });

    doc.save('Patron-Compliance-Calendar-FY'+fy+'.pdf');
    btn.textContent='⬇ Download PDF';btn.disabled=false;btn.classList.remove('loading');
  }).catch(err=>{console.error(err);btn.textContent='⬇ Download PDF';btn.disabled=false;btn.classList.remove('loading');alert('PDF generation failed. Please try again.');});
}

// ── Share ──
function shareCalendar(){
  const url='/compliance-calendar';
  const title='India Compliance Calendar FY 2025-26 — Free Tool by Patron Accounting';
  if(navigator.share){navigator.share({title,url}).catch(()=>{});}
  else{navigator.clipboard.writeText(url).then(()=>{const t=document.getElementById('shareToast');t.classList.add('show');setTimeout(()=>t.classList.remove('show'),2500);}).catch(()=>{window.open('https://wa.me/?text='+encodeURIComponent(title+' '+url),'_blank');});}
}

// ── TOC scroll spy ──
window.addEventListener("scroll",()=>{const sects=document.querySelectorAll("[id]");const links=document.querySelectorAll(".toc-nav a");let cur="";sects.forEach(s=>{if(s.offsetTop-80<=pageYOffset)cur=s.id;});links.forEach(l=>l.classList.toggle("active",l.getAttribute("href")==="#"+cur));});

// ── Keyboard: close overlays on ──
document.addEventListener('keydown', e => {
  if (e.key === 'Escape') {
    closeDrawer();
    closeWC();
    closeEmailGate();
  }
});

// ── Boot ──
document.addEventListener('DOMContentLoaded', init);
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
