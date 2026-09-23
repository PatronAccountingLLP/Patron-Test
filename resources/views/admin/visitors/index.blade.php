<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Patron Web Analytics</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap">
<style>
/* =====================================================================
   Patron Web Analytics — real data only.
   Sources: /admin/visitors/live.json (polled), /admin/visitors/sessions.json,
   /admin/visitors/session/{id}.json. Nothing on this page is simulated.
   ===================================================================== */
:root{
  --orange:#E8712C; --orange-dark:#D4621F; --orange-light:#FEF4EE; --orange-lighter:#FFF9F5;
  --navy:#1B365D; --navy-light:#2A4A7A; --navy-lighter:#F4F7FB;
  --white:#FFFFFF;
  --gray-50:#F9FAFB; --gray-100:#F3F4F6; --gray-200:#E5E7EB; --gray-300:#D1D5DB; --gray-400:#9CA3AF; --gray-500:#6B7280; --gray-600:#4B5563; --gray-700:#374151;
  --radius-sm:8px; --radius-md:12px;
  --shadow-sm:0 1px 2px rgba(0,0,0,.04); --shadow-md:0 4px 12px rgba(0,0,0,.06); --shadow-lg:0 12px 32px rgba(0,0,0,.08);

  --bg:var(--white); --surface:var(--white); --surface-2:var(--gray-50);
  --text:#1F2937; --text-2:#4B5563; --text-3:#6B7280;
  --line:var(--gray-200); --line-2:var(--gray-100);
  --accent:var(--orange); --accent-text:#B8541A; --accent-soft:var(--orange-light);
  --good:#047857; --good-dot:#10B981; --good-soft:#D1FAE5;
  --warn:#92400E; --warn-dot:#F59E0B; --warn-soft:#FEF3C7;
  --poor:#B42318; --poor-dot:#DC2626; --poor-soft:#FEE4E2;
  --grey:#4B5563; --grey-dot:#9CA3AF; --grey-soft:var(--gray-100);
  --focus:var(--orange-dark);
  --sans:"Source Sans 3","Segoe UI",system-ui,-apple-system,sans-serif;
  --mono:"IBM Plex Mono",ui-monospace,"Cascadia Mono",Consolas,monospace;
}
*{box-sizing:border-box}
body{margin:0;background:var(--bg);color:var(--text);font-family:var(--sans);font-size:15px;line-height:1.5;-webkit-font-smoothing:antialiased;overflow-x:hidden}
img{max-width:100%}
[hidden]{display:none!important}
button,select,input{font:inherit;color:inherit}
:focus-visible{outline:2px solid var(--focus);outline-offset:2px}
h1,h2,h3,h4{margin:0;color:var(--navy);text-wrap:balance}
p{margin:0}
.mono{font-family:var(--mono);font-size:.93em}

/* ---------- frame ---------- */
.app{display:grid;grid-template-columns:240px minmax(0,1fr);min-height:100vh}
.side{background:var(--surface);border-right:1px solid var(--line);padding:22px 14px;position:sticky;top:0;height:100vh;overflow-y:auto;display:flex;flex-direction:column;gap:22px}
.brand{padding:0 10px}
.brand h1{font-size:17px;font-weight:700}
.brand .site{font-size:13px;color:var(--text-2);margin-top:2px}
.brand .real{display:inline-flex;align-items:center;gap:6px;margin-top:10px;font-size:12.5px;font-weight:600;color:var(--good);background:var(--good-soft);padding:3px 9px;border-radius:999px}
.brand .real::before{content:"";width:6px;height:6px;border-radius:50%;background:var(--good-dot)}
.nav{display:flex;flex-direction:column;gap:2px}
.nav .grp{font-size:11.5px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--text-3);padding:10px 10px 4px}
.nav .badge.poor{background:var(--poor-soft);color:var(--poor)}
.nav button{display:flex;align-items:center;justify-content:space-between;gap:10px;width:100%;background:none;border:0;border-radius:8px;padding:9px 12px;text-align:left;font-size:14.5px;font-weight:600;color:var(--navy-light);cursor:pointer}
.nav button:hover{background:var(--surface-2);color:var(--navy)}
.nav button[aria-current="page"]{background:var(--accent-soft);color:var(--navy);box-shadow:inset 3px 0 0 var(--accent)}
.nav button:focus-visible{outline-offset:-2px}
.nav .badge{font-size:12.5px;font-weight:600;color:var(--text-3);background:var(--grey-soft);padding:1px 8px;border-radius:999px;font-variant-numeric:tabular-nums}
.nav button[aria-current="page"] .badge{background:var(--surface);color:var(--accent-text)}
.nav .sub{font-size:11.5px;font-weight:600;color:var(--text-3);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:110px;font-family:var(--mono)}
.side .foot{margin-top:auto;padding:0 10px;font-size:12.5px;color:var(--text-3);line-height:1.5}
.main{padding:26px 32px 64px;min-width:0;width:100%}
@media (max-width:860px){
  .app{grid-template-columns:1fr}
  .side{position:static;height:auto;border-right:0;border-bottom:1px solid var(--line);padding:14px 16px;gap:12px}
  .side .foot{display:none}
  .nav{flex-direction:row;overflow-x:auto;gap:4px}
  .nav .grp{display:none}
  .nav button{white-space:nowrap;width:auto;padding:7px 12px}
  .main{padding:20px 16px 48px}
}

/* ---------- live bar ---------- */
.livebar{display:flex;align-items:center;justify-content:flex-end;gap:14px;font-size:13.5px;color:var(--text-2);margin-bottom:18px;flex-wrap:wrap}
.livebar .dot{width:8px;height:8px;border-radius:50%;background:var(--good-dot);display:inline-block;margin-right:6px;vertical-align:middle}
.livebar .dot.off{background:var(--gray-400)}
.livebar .dot.err{background:var(--warn-dot)}
.btn{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-sm);padding:7px 14px;font-size:14px;font-weight:600;color:var(--text);cursor:pointer;display:inline-flex;align-items:center;gap:8px}
.btn:hover{border-color:var(--text-3)}
.btn.primary{background:var(--accent);border-color:var(--accent);color:#fff}
.btn.primary:hover{background:var(--orange-dark);border-color:var(--orange-dark)}
.btn.link{border:0;background:none;color:var(--accent-text);padding:4px 0}
.btn.link:hover{text-decoration:underline}
.btn.small{padding:4px 10px;font-size:13px}

/* ---------- screens ---------- */
.screen[hidden]{display:none}
.head{margin-bottom:8px}
.head h2{font-size:24px;font-weight:700;letter-spacing:-.015em}
.head .lead{font-size:16px;color:var(--text-2);margin-top:6px;max-width:70ch}
.head .from{font-size:13.5px;color:var(--text-3);margin-top:8px}
.head .from b{font-weight:600;color:var(--text-2)}
.cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(168px,1fr));gap:16px;margin:22px 0 24px}
.card{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-md);padding:18px 20px;box-shadow:var(--shadow-sm);min-width:0}
.card .n{font-size:30px;font-weight:600;letter-spacing:-.02em;line-height:1;font-variant-numeric:tabular-nums}
.card .l{font-size:14px;color:var(--text-2);margin-top:8px}
.card .s{font-size:12.5px;color:var(--text-3);margin-top:3px}
.card.accent .n{color:var(--accent)}.card.good .n{color:var(--good)}
.controls{display:flex;align-items:center;gap:10px 18px;flex-wrap:wrap;margin-bottom:14px}
.check{display:inline-flex;align-items:center;gap:8px;font-size:14px;color:var(--text-2);cursor:pointer}
.check input{width:16px;height:16px;accent-color:var(--accent);margin:0}
.controls .right{margin-left:auto;font-size:13.5px;color:var(--text-3)}

/* tables */
.tcard{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);overflow:hidden;margin-bottom:26px}
.tcard .th{padding:14px 20px;border-bottom:1px solid var(--line);display:flex;gap:8px 16px;align-items:center;flex-wrap:wrap}
.tcard .th h3{font-size:16px;font-weight:600}
.tcard .th .note{font-size:13.5px;color:var(--text-3)}
.tscroll{overflow-x:auto}
table{width:100%;border-collapse:collapse;font-size:14.5px}
th{text-align:left;font-size:13px;font-weight:600;color:var(--text-2);padding:11px 16px;border-bottom:1px solid var(--line);white-space:nowrap;background:var(--surface-2)}
th:first-child,td:first-child{padding-left:20px}
th:last-child,td:last-child{padding-right:20px}
td{padding:14px 16px;border-bottom:1px solid var(--line-2);vertical-align:middle}
tr:last-child td{border-bottom:0}
.num{text-align:right;font-variant-numeric:tabular-nums}
td .sub{display:block;font-size:12.5px;color:var(--text-3);margin-top:2px;font-family:var(--sans)}
td.path{font-family:var(--mono);font-size:13.5px;max-width:300px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
tr.row{cursor:pointer}
tr.row:hover td{background:var(--surface-2)}
tr.row:focus-visible{outline:2px solid var(--focus);outline-offset:-2px}
tr.row.left td{color:var(--text-3)}
.sort{background:none;border:0;padding:0;font:inherit;color:inherit;cursor:pointer;font-weight:600;display:inline-flex;align-items:center;gap:4px}
.sort::after{content:"↕";font-size:11px;color:var(--text-3);opacity:.7}
th[aria-sort="ascending"] .sort::after{content:"↑";color:var(--accent-text);opacity:1}
th[aria-sort="descending"] .sort::after{content:"↓";color:var(--accent-text);opacity:1}
.ldot{display:inline-block;width:8px;height:8px;border-radius:50%;background:var(--good-dot);margin-right:7px;vertical-align:middle}
.ldot.idle{background:var(--warn-dot)}
.ldot.off{background:var(--gray-300)}
.soon{color:var(--text-3);cursor:help;border-bottom:1px dotted var(--gray-400)}

/* pills */
.pill{display:inline-flex;align-items:center;gap:7px;padding:3px 11px;border-radius:999px;font-size:13px;font-weight:600;white-space:nowrap;line-height:1.4}
.pill::before{content:"";width:6px;height:6px;border-radius:50%;flex:none;background:currentColor}
.pill.good{background:var(--good-soft);color:var(--good)}.pill.good::before{background:var(--good-dot)}
.pill.warn{background:var(--warn-soft);color:var(--warn)}.pill.warn::before{background:var(--warn-dot)}
.pill.grey{background:var(--grey-soft);color:var(--grey)}.pill.grey::before{background:var(--grey-dot)}
.pill.accent{background:var(--accent-soft);color:var(--accent-text)}.pill.accent::before{background:var(--accent)}

/* empty states */
.empty{padding:56px 24px;text-align:center;color:var(--text-2);font-size:15.5px;max-width:52ch;margin:0 auto}
.empty .ring{width:44px;height:44px;border-radius:50%;border:2px dashed var(--gray-300);margin:0 auto 14px;display:flex;align-items:center;justify-content:center}
.empty .ring i{width:8px;height:8px;border-radius:50%;background:var(--gray-300)}
.empty.live .ring{border-color:var(--good-dot)}
.empty.live .ring i{background:var(--good-dot)}
.empty b{color:var(--navy);font-weight:600;display:block;font-size:17px;margin-bottom:6px}
.empty small{display:block;color:var(--text-3);font-size:13.5px;margin-top:8px;line-height:1.5}
.empty kbd{font-family:var(--mono);font-size:12px;border:1px solid var(--gray-300);border-bottom-width:2px;border-radius:4px;padding:0 5px;background:var(--surface-2)}

/* detail */
.dcard{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:20px;overflow:hidden}
.dcard .jt{padding:14px 22px;border-bottom:1px solid var(--line);font-size:16px;font-weight:600;color:var(--navy);display:flex;gap:10px 16px;align-items:center;flex-wrap:wrap}
.dcard .jt .note{font-size:13.5px;color:var(--text-3);font-weight:400}
.dcard .jt .right{margin-left:auto;display:flex;gap:10px;align-items:center;flex-wrap:wrap}
.dcard .jb{padding:20px 22px}
.jhead{display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap;align-items:flex-start}
.jhead .ip{font-family:var(--mono);font-size:22px;font-weight:500;color:var(--navy)}
.jhead .who{font-size:15px;color:var(--text-2);margin-top:4px}
.jhead .when{font-size:14px;color:var(--text-3);margin-top:6px}
.facts{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:14px;margin-top:20px}
.fact{background:var(--surface-2);border:1px solid var(--line-2);border-radius:var(--radius-sm);padding:12px 14px}
.fact .n{font-size:22px;font-weight:600;color:var(--navy);letter-spacing:-.02em;font-variant-numeric:tabular-nums;line-height:1.1}
.fact .l{font-size:13px;color:var(--text-2);margin-top:4px}
.arr{display:grid;grid-template-columns:200px minmax(0,1fr);gap:12px 20px;font-size:15px}
@media (max-width:640px){.arr{grid-template-columns:1fr;gap:4px 0}}
.arr .k{color:var(--text-2);font-weight:600}
.arr .v{min-width:0;overflow-wrap:anywhere}
.arr .v .why{display:block;font-size:14px;color:var(--text-2);margin-top:4px;max-width:60ch}
.step{display:grid;grid-template-columns:96px minmax(0,1fr);gap:20px;padding:18px 22px;border-bottom:1px solid var(--line-2)}
.step:last-child{border-bottom:0}
@media (max-width:640px){.step{grid-template-columns:1fr;gap:6px}}
.step .when{font-size:14px;color:var(--text-3);font-variant-numeric:tabular-nums}
.step .when b{display:block;color:var(--text-2);font-weight:600}
.step .pt{font-size:16px;font-weight:600;color:var(--navy)}
.step .pp{font-family:var(--mono);font-size:13px;color:var(--text-2);margin-top:2px;overflow-wrap:anywhere}
.step .stay{display:flex;align-items:center;gap:12px;margin-top:10px;font-size:14px;color:var(--text-2);flex-wrap:wrap}
.step .stay .bar{width:160px;height:8px;background:var(--line-2);border-radius:4px;overflow:hidden}
.step .stay .bar i{display:block;height:100%;background:var(--accent);border-radius:4px}
.clicks{margin:12px 0 0;padding:0;list-style:none;display:flex;flex-direction:column;gap:6px}
.clicks li{display:grid;grid-template-columns:56px 22px minmax(0,1fr);gap:10px;font-size:14.5px;color:var(--text-2);align-items:baseline}
.clicks .at{font-size:13px;color:var(--text-3);font-variant-numeric:tabular-nums}
.clicks .n{display:inline-flex;width:20px;height:20px;border-radius:50%;background:var(--accent);color:#fff;font-size:11.5px;font-weight:700;align-items:center;justify-content:center;align-self:center}
.clicks .n.form{background:var(--warn-dot)}
.clicks .n.sent{background:var(--good-dot)}
.clicks b{color:var(--text);font-weight:600}
.clicks .el{font-family:var(--mono);font-size:12.5px;color:var(--text-3);margin-left:6px}
.rg{display:inline-block;font-size:11.5px;font-weight:600;letter-spacing:.01em;padding:1px 8px;border-radius:999px;margin-left:8px;vertical-align:middle;white-space:nowrap;background:var(--grey-soft);color:var(--text-2)}
.rg.nav{background:var(--navy-lighter);color:var(--navy)}
.rg.form{background:var(--warn-soft);color:var(--warn)}
.rg.sticky{background:var(--good-soft);color:var(--good)}
.hop{display:grid;grid-template-columns:96px minmax(0,1fr);gap:20px;padding:12px 22px;background:var(--surface-2);border-bottom:1px solid var(--line-2);font-size:14.5px;color:var(--text-2)}
@media (max-width:640px){.hop{grid-template-columns:1fr;gap:4px}}
.hop .arrow{color:var(--accent);font-weight:700;font-size:18px;line-height:1.2}
.hop b{color:var(--text);font-weight:600}
.hop .rg{margin-left:4px}
.hop .to{font-family:var(--mono);font-size:13px;color:var(--navy);font-weight:500}
.hop.none{color:var(--text-3)}
.hop.none .arrow{color:var(--gray-400)}

/* per-visitor click map */
.cm{display:grid;grid-template-columns:minmax(0,1.2fr) minmax(280px,.8fr);gap:0;align-items:start}
@media (max-width:1000px){.cm{grid-template-columns:1fr}}
.cm > div + div{border-left:1px solid var(--line)}
@media (max-width:1000px){.cm > div + div{border-left:0;border-top:1px solid var(--line)}}
.cm-scroll{max-height:760px;overflow:auto;background:var(--gray-100);padding:18px}
.cm-stage{position:relative;overflow:hidden;margin:0 auto;background:var(--white);box-shadow:var(--shadow-md);border:1px solid var(--gray-200)}
.cm-doc{position:absolute;top:0;left:0;transform-origin:0 0}
.cm-doc iframe{display:block;border:0;width:100%;height:100%;background:var(--white)}
.cm-doc .ruled{position:absolute;inset:0;background:repeating-linear-gradient(to bottom,transparent 0 99px,var(--gray-200) 99px 100px);}
.cm-doc .ruled .lbl{position:absolute;top:12px;left:12px;right:12px;font-family:var(--mono);font-size:13px;color:var(--text-3)}
.cm-doc svg{position:absolute;inset:0;width:100%;height:100%;pointer-events:none;overflow:visible}
.cm-list{padding:14px 18px}
.cm-list ol{margin:0;padding:0;list-style:none;display:flex;flex-direction:column;gap:8px}
.cm-list li{display:grid;grid-template-columns:24px minmax(0,1fr) auto;gap:10px;align-items:center;font-size:14.5px;padding:8px 10px;border:1px solid var(--line-2);border-radius:var(--radius-sm)}
.cm-list li .n{display:inline-flex;width:22px;height:22px;border-radius:50%;background:var(--accent);color:#fff;font-size:12px;font-weight:700;align-items:center;justify-content:center}
.cm-list li .n.form{background:var(--warn-dot)}.cm-list li .n.sent{background:var(--good-dot)}
.cm-list li b{font-weight:600;color:var(--text);display:block;overflow-wrap:anywhere}
.cm-list li .el{font-family:var(--mono);font-size:12px;color:var(--text-3)}
.cm-list li .t{font-family:var(--mono);font-size:12.5px;color:var(--text-2);white-space:nowrap}
.cm-cap{padding:10px 20px 14px;font-size:13.5px;color:var(--text-3);line-height:1.5;border-top:1px solid var(--line-2)}
.cm-cap b{color:var(--text-2)}
select.pick{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-sm);padding:6px 10px;font-size:14px;max-width:100%;color:var(--text)}

/* banners, errors, chips */
.banner{display:flex;align-items:center;gap:12px;padding:12px 22px;font-size:15px;border-bottom:1px solid var(--line)}
.banner.good{background:var(--good-soft);color:var(--good)}
.banner.grey{background:var(--grey-soft);color:var(--text-2)}
.banner.poor{background:var(--poor-soft);color:var(--poor)}
.banner b{font-weight:700}
.banner .t{font-family:var(--mono);font-size:13.5px;margin-left:auto;white-space:nowrap}
.errlist{margin:0;padding:0;list-style:none}
.errlist li{display:grid;grid-template-columns:96px minmax(0,1fr);gap:20px;padding:12px 22px;border-bottom:1px solid var(--line-2);font-size:14.5px}
.errlist li:last-child{border-bottom:0}
.errlist .t{font-family:var(--mono);font-size:13px;color:var(--text-3)}
.errlist b{color:var(--poor);font-weight:600}
.errlist .el{font-family:var(--mono);font-size:12.5px;color:var(--text-3);display:block;margin-top:2px;overflow-wrap:anywhere}
.chips{display:inline-flex;gap:6px;flex-wrap:wrap}
.chip{background:var(--surface);border:1px solid var(--line);border-radius:999px;padding:5px 13px;font-size:14px;font-weight:600;color:var(--text-2);cursor:pointer;display:inline-flex;gap:6px;align-items:center}
.chip:hover{border-color:var(--text-3);color:var(--text)}
.chip[aria-pressed="true"]{background:var(--accent-soft);border-color:var(--accent);color:var(--accent-text)}
.chip[disabled]{opacity:.5;cursor:not-allowed}
.cm-doc canvas{position:absolute;inset:0;width:100%;height:100%;pointer-events:none}
.hm-legend{display:inline-flex;align-items:center;gap:8px;font-size:13px;color:var(--text-2)}
.layers{display:flex;gap:6px 20px;flex-wrap:wrap;padding:10px 20px;border-bottom:1px solid var(--line-2);background:var(--surface-2)}
.layers .lay i{display:inline-block;width:14px;height:14px;border-radius:3px;vertical-align:middle}
.layers .lay.reading i{background:linear-gradient(to bottom,#2563EB,#10B981,#F59E0B,#DC2626);opacity:.8}
.layers .lay.mouse i{background:linear-gradient(to right,rgba(14,116,144,.25),#0E7490);height:3px;border-radius:2px;width:22px}
.layers .lay.clicks i{background:var(--accent);border-radius:50%;border:2px solid #fff;box-shadow:0 0 0 1px var(--accent)}
.layers .lay .note{font-size:12.5px;color:var(--text-3);font-weight:400}
.layers .lay input:disabled + i{opacity:.35}
.cm-cap{width:100%;max-width:none;border-top:1px solid var(--line)}
.laykey{margin:8px 0 6px;padding:0;list-style:none;display:flex;flex-direction:column;gap:6px;max-width:90ch}
.laykey li{display:flex;align-items:baseline;gap:8px;color:var(--text-2)}
.laykey li > i{flex:none}
.laykey li .tx{flex:1 1 auto;min-width:0}
.laykey li i{display:inline-block;width:12px;height:12px;border-radius:3px;position:relative;top:2px}
.laykey li.reading i{background:linear-gradient(to bottom,#2563EB,#10B981,#F59E0B,#DC2626)}
.laykey li.mouse i{height:3px;width:16px;border-radius:2px;background:linear-gradient(to right,rgba(14,116,144,.25),#0E7490);top:-1px}
.laykey li.clicks i{border-radius:50%;background:var(--accent);border:2px solid #fff;box-shadow:0 0 0 1px var(--accent)}
.hm-legend i{width:120px;height:8px;border-radius:4px;background:linear-gradient(to right,#2563EB,#10B981,#F59E0B,#DC2626)}

/* daily chart */
.chart{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-md);padding:16px 20px 12px;box-shadow:var(--shadow-sm);margin-bottom:24px}
.chart .t{display:flex;justify-content:space-between;gap:12px;font-size:14px;color:var(--text-2);margin-bottom:10px;flex-wrap:wrap}
.chart .t b{font-weight:600;color:var(--text)}
.bars{display:grid;grid-auto-flow:column;grid-auto-columns:1fr;gap:3px;height:64px;align-items:end}
.bars i{display:block;background:var(--navy-light);opacity:.6;border-radius:2px 2px 0 0;min-height:2px}
.bars i.wk{opacity:.3}
.bars i:last-child{background:var(--accent);opacity:1}
.marks{display:grid;grid-auto-flow:column;grid-auto-columns:1fr;gap:3px;margin-top:6px}
.marks span{display:flex;gap:2px;justify-content:center;height:8px}
.marks em{width:6px;height:6px;border-radius:50%;display:block}
.marks em.e{background:var(--good-dot)}.marks em.x{background:var(--poor-dot)}
.chart .ax{display:flex;justify-content:space-between;font-size:12px;color:var(--text-3);margin-top:6px}
.chart .key{display:flex;gap:16px;font-size:12.5px;color:var(--text-3);margin-top:8px}
.chart .key em{display:inline-block;width:8px;height:8px;border-radius:50%;margin-right:5px;vertical-align:middle}

/* page report: two column groups, expandable rows */
table.pages th.seo,table.pages td.seo{background:rgba(27,54,93,.035)}
table.pages th.dev,table.pages td.dev{background:rgba(232,113,44,.06)}
table.pages tr.grp th{font-size:11.5px;letter-spacing:.08em;text-transform:uppercase;color:var(--navy);padding:8px 16px;border-bottom:1px solid var(--line)}
table.pages tr.grp th.seo{background:rgba(27,54,93,.07)}
table.pages tr.grp th.dev{background:rgba(232,113,44,.12);color:var(--accent-text)}
table.pages tr.row.open td{background:var(--orange-lighter)}
table.pages tr.row td.path::before{content:"▸";display:inline-block;width:14px;color:var(--text-3);font-family:var(--sans)}
table.pages tr.row.open td.path::before{content:"▾";color:var(--accent-text)}
.sbar{display:inline-block;width:90px;height:8px;background:var(--line-2);border-radius:4px;overflow:hidden;vertical-align:middle;margin-right:8px}
.sbar i{display:block;height:100%;background:var(--navy-light);border-radius:4px}
.warnn{color:var(--warn);font-weight:700}.poorn{color:var(--poor);font-weight:700}
tr.xp td{background:var(--surface-2);padding:18px 20px 22px;border-bottom:1px solid var(--line)}
.xpg{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:24px}
.xpg h4{font-size:15px;margin:0 0 8px;display:flex;flex-direction:column;gap:2px}
.xpg h4 .who{font-size:12.5px;font-weight:600;color:var(--text-3);letter-spacing:.02em}
.xpg .fx{font-size:14px;color:var(--text-2);margin:0 0 8px}
.barlist{margin:0;padding:0;list-style:none;display:flex;flex-direction:column;gap:6px}
.barlist li{display:grid;grid-template-columns:minmax(0,1.4fr) minmax(60px,1fr) auto;gap:10px;align-items:center;font-size:14px}
.barlist li .k{color:var(--text);overflow-wrap:anywhere}
.barlist li .b{height:8px;background:var(--line-2);border-radius:4px;overflow:hidden}
.barlist li .b i{display:block;height:100%;background:var(--navy-light);border-radius:4px}
.barlist li .b i.warn{background:var(--warn-dot)}
.barlist li .v{font-variant-numeric:tabular-nums;font-weight:600;color:var(--text-2)}
.barlist.errs li{grid-template-columns:minmax(0,1fr) auto}

/* page analysis: one card per page */
.pcard{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:22px;overflow:hidden}
.pcard > header{padding:16px 22px;border-bottom:1px solid var(--line);display:flex;justify-content:space-between;gap:10px 24px;flex-wrap:wrap;align-items:baseline}
.pcard > header h3{font-size:18px;font-weight:500;color:var(--navy);overflow-wrap:anywhere}
.pcard .kpi{font-size:14px;color:var(--text-2);white-space:nowrap}
.pcard .kpi b{color:var(--text);font-weight:600;font-variant-numeric:tabular-nums}
.pgrid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:0}
@media (max-width:1000px){.pgrid{grid-template-columns:1fr}}
.pgrid > section{padding:18px 22px 20px;border-bottom:1px solid var(--line-2);min-width:0}
.pgrid > section:nth-child(odd){border-right:1px solid var(--line-2)}
@media (max-width:1000px){.pgrid > section:nth-child(odd){border-right:0}}
.pgrid h4{font-size:15px;color:var(--navy);margin:0 0 10px;display:flex;flex-direction:column;gap:2px}
.pgrid h4 .who{font-size:12.5px;font-weight:600;color:var(--text-3);letter-spacing:.02em}
.pgrid .none{font-size:14px;color:var(--text-3);margin:0}
.pgrid .barlist li{grid-template-columns:minmax(0,2fr) minmax(70px,1fr) auto;gap:12px;font-size:14.5px}
.pgrid .barlist li .k{overflow-wrap:anywhere;line-height:1.4}
.pgrid .barlist li .el{font-family:var(--mono);font-size:12px;color:var(--text-3);margin-left:6px}
.barlist li .b i.or{background:var(--accent)}
.barlist li .b i.teal{background:#0E7490}
.flow{margin:0;padding:0;list-style:none;display:flex;flex-direction:column;gap:8px}
.flow li{display:grid;grid-template-columns:auto auto minmax(0,1fr);gap:8px 10px;align-items:baseline;font-size:14.5px}
.flow li .n{font-variant-numeric:tabular-nums;font-weight:600;color:var(--text-2)}
.flow li .arrow{color:var(--accent);font-weight:700}
.flow li .to{color:var(--navy);font-weight:500;overflow-wrap:anywhere}
.flow li .via{grid-column:3;font-size:13.5px;color:var(--text-3);overflow-wrap:anywhere}
.pcard > footer{padding:12px 22px;font-size:14.5px;color:var(--text-2);background:var(--surface-2)}
.pcard > footer b{color:var(--text);font-weight:600}

/* page deep-dive */
.rctl{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-md);padding:16px 20px;box-shadow:var(--shadow-sm);margin:18px 0 22px;display:flex;flex-direction:column;gap:12px}
.rpick{display:flex;align-items:center;gap:12px;flex-wrap:wrap}
.rpick label,.rdates .lbl{font-weight:600;color:var(--navy);font-size:15px}
.pickwrap{position:relative;flex:1 1 360px;max-width:640px}
.pickwrap input{width:100%;border:1px solid var(--line);border-radius:var(--radius-sm);padding:9px 12px;font-size:15px;font-family:var(--mono);background:var(--surface);color:var(--text)}
.picklist{position:absolute;left:0;right:0;top:calc(100% + 4px);background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-sm);box-shadow:var(--shadow-md);max-height:340px;overflow:auto;z-index:8}
.pickrow{display:flex;justify-content:space-between;gap:12px;padding:8px 12px;cursor:pointer;font-size:14px;border-bottom:1px solid var(--line-2)}
.pickrow:last-child{border-bottom:0}
.pickrow:hover,.pickrow.hi{background:var(--accent-soft)}
.pickrow[aria-selected="true"] .mono{color:var(--accent-text);font-weight:500}
.pickrow .pv{color:var(--text-3);white-space:nowrap;font-variant-numeric:tabular-nums}
.pickmore{padding:8px 12px;font-size:13px;color:var(--text-3);background:var(--surface-2)}
.rdates{display:flex;align-items:center;gap:10px 14px;flex-wrap:wrap}
.rdates .dl{display:inline-flex;align-items:center;gap:6px;font-size:14px;color:var(--text-2)}
.rdates input[type=date]{border:1px solid var(--line);border-radius:var(--radius-sm);padding:6px 8px;font-size:14px;background:var(--surface);color:var(--text)}
.rdates .chip .c{font-size:11.5px;font-weight:600;color:var(--warn);background:var(--warn-soft);padding:1px 6px;border-radius:999px}
.rrange{font-size:13.5px;color:var(--text-3);margin:0}
.card.thin .n{color:var(--text-3)}
.card .cmp{margin-top:8px;font-size:13px;display:flex;gap:8px;align-items:baseline;flex-wrap:wrap}
.dlt{font-weight:700}.dlg{color:var(--good)}.dlb{color:var(--poor)}.dl0{color:var(--text-3);font-weight:600}
.prev{color:var(--text-3);font-size:12.5px}
.banner.warn{background:var(--warn-soft);color:var(--warn)}
.funnel{display:flex;align-items:stretch;gap:10px;flex-wrap:wrap}
.fstep{display:flex;gap:12px;align-items:flex-start;background:var(--surface-2);border:1px solid var(--line-2);border-radius:var(--radius-sm);padding:14px 16px;flex:1 1 200px;min-width:0}
.fstep .fn{width:26px;height:26px;border-radius:50%;background:var(--navy);color:#fff;font-weight:700;font-size:13px;display:inline-flex;align-items:center;justify-content:center;flex:none}
.fstep.warn .fn{background:var(--warn-dot)}.fstep.good .fn{background:var(--good-dot)}
.fstep .fl{font-size:14px;color:var(--text-2);font-weight:600}
.fstep .fc{font-size:28px;font-weight:600;color:var(--navy);letter-spacing:-.02em;line-height:1.1;font-variant-numeric:tabular-nums}
.fstep .fp{font-size:13px;color:var(--text-3);margin-top:2px}
.farrow{align-self:center;color:var(--accent);font-size:22px;font-weight:700}
.fdrop{margin-top:16px;padding:14px 16px;background:var(--orange-lighter);border:1px solid #F5D2BC;border-radius:var(--radius-sm);font-size:15.5px;color:var(--text)}
.fdrop b{color:var(--navy)}
.cmpline{font-size:13.5px;color:var(--text-3);margin:10px 0 0}
.seclist{margin:0;padding:6px 22px 14px;list-style:none;display:flex;flex-direction:column;gap:10px}
.seclist li{display:grid;grid-template-columns:28px minmax(120px,1fr) minmax(120px,2fr) 60px minmax(200px,2fr);gap:12px;align-items:center;font-size:14.5px}
@media (max-width:900px){.seclist li{grid-template-columns:28px minmax(0,1fr) 60px;}.seclist .sbarw,.seclist .sreach{grid-column:2/-1}}
.seclist .rank{width:24px;height:24px;border-radius:50%;background:var(--navy-lighter);color:var(--navy);font-weight:700;font-size:12.5px;display:inline-flex;align-items:center;justify-content:center}
.seclist .sname{font-weight:600;color:var(--text);overflow-wrap:anywhere}
.seclist .sbarw{height:10px;background:var(--line-2);border-radius:5px;overflow:hidden}
.seclist .sbarw i{display:block;height:100%;background:var(--accent);border-radius:5px}
.seclist .ssec{font-variant-numeric:tabular-nums;font-weight:600;text-align:right;color:var(--navy)}
.seclist .sreach{position:relative;font-size:13px;color:var(--text-2);padding-left:70px}
.seclist .sreach::before{content:"";position:absolute;left:0;top:50%;transform:translateY(-50%);width:60px;height:6px;background:var(--line-2);border-radius:3px}
.seclist .sreach i{position:absolute;left:0;top:50%;transform:translateY(-50%);height:6px;max-width:60px;background:var(--navy-light);border-radius:3px}
.hmgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:16px;padding:18px 22px}
.hmcell{display:flex;flex-direction:column;gap:6px;min-width:0}
.hmk{display:flex;justify-content:space-between;gap:8px;font-size:12.5px;align-items:baseline}
.hmk .mono{color:var(--navy);overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.hmk .pv{color:var(--text-3);white-space:nowrap}
.hmbox{position:relative;aspect-ratio:5/2;background:var(--surface-2);border:1px dashed var(--gray-300);border-radius:6px;overflow:hidden}
.hmbox i{position:absolute;width:8px;height:8px;margin:-4px 0 0 -4px;border-radius:50%;background:var(--accent);opacity:.45}
.exbar{display:flex;height:14px;border-radius:7px;overflow:hidden;margin:16px 22px 10px;background:var(--line-2)}
.exbar i{display:block;height:100%}
.ex-navigated_away{background:var(--navy-light)}.ex-closed_or_back{background:var(--gray-400)}.ex-idle_timeout{background:var(--warn-dot)}.ex-off_site{background:var(--accent)}
.exdot{display:inline-block;width:10px;height:10px;border-radius:50%;margin-right:8px;vertical-align:middle}
.barlist li .el{font-family:var(--mono);font-size:12px;color:var(--text-3);margin-left:6px}

/* events: GA4-style grouped list */
.evcard{padding:4px 0}
.evgrp{border-bottom:1px solid var(--line-2)}
.evgrp:last-child{border-bottom:0}
.evgrp summary{display:flex;align-items:baseline;gap:8px 14px;flex-wrap:wrap;padding:14px 22px;cursor:pointer;list-style:none;font-size:15px}
.evgrp summary::-webkit-details-marker{display:none}
.evgrp summary::before{content:"▸";color:var(--text-3);width:14px;display:inline-block;font-size:13px}
.evgrp[open] summary::before{content:"▾";color:var(--accent-text)}
.evgrp summary:focus-visible{outline:2px solid var(--focus);outline-offset:-2px}
.evgrp .gname{font-weight:700;color:var(--navy);font-size:15.5px}
.evgrp .gwhy{font-size:13px;color:var(--text-3)}
.evgrp .gsum{margin-left:auto;font-size:13px;color:var(--text-2);font-variant-numeric:tabular-nums}
.evgrp.empty .gname{color:var(--text-3)}
.evgrp.empty .gsum{color:var(--text-3);font-style:italic}
.evgrp .none{font-size:14px;color:var(--text-3);margin:0;padding:0 22px 14px 44px}
.barlist.ev{padding:2px 22px 16px 44px;gap:8px}
.barlist.ev li{grid-template-columns:minmax(180px,1fr) minmax(120px,2fr) auto;font-size:14.5px}
.barlist.ev li .k{color:var(--navy);font-weight:500}
.barlist.ev li .b i{background:var(--navy-light)}

/* export panel */
.head{display:grid;grid-template-columns:minmax(0,1fr) auto;grid-template-areas:"h x" "l x" "f x";gap:0 24px;align-items:start}
.head h2{grid-area:h}.head .lead{grid-area:l}.head .from{grid-area:f}
.export{grid-area:x;position:relative}
.exp-menu{position:absolute;right:0;top:calc(100% + 6px);background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-sm);box-shadow:var(--shadow-md);min-width:230px;padding:6px;z-index:5;display:flex;flex-direction:column;gap:2px}
.exp-menu button{background:none;border:0;border-radius:6px;padding:9px 12px;text-align:left;font-size:14.5px;font-weight:600;color:var(--navy);cursor:pointer;display:flex;justify-content:space-between;gap:12px;width:100%}
.exp-menu button:hover{background:var(--accent-soft)}
.exp-menu button small{font-weight:400;color:var(--text-3);font-family:var(--mono);font-size:12.5px}
.overlay{position:fixed;inset:0;background:rgba(27,54,93,.35);display:flex;align-items:center;justify-content:center;padding:20px;z-index:20}
.panel{background:var(--surface);border-radius:var(--radius-md);box-shadow:var(--shadow-lg);width:min(640px,100%);max-height:90vh;overflow:auto}
.panel .ph{display:flex;justify-content:space-between;align-items:center;gap:12px;padding:16px 22px;border-bottom:1px solid var(--line)}
.panel .ph h3{font-size:18px}
.panel .pb{padding:20px 22px}
.panel .fname{font-family:var(--mono);font-size:15px;background:var(--surface-2);border:1px solid var(--line);border-radius:var(--radius-sm);padding:10px 12px;overflow-wrap:anywhere}
.panel dl{display:grid;grid-template-columns:auto minmax(0,1fr);gap:6px 18px;margin:16px 0;font-size:15px}
.panel dt{color:var(--text-2)}.panel dd{margin:0;font-weight:600;overflow-wrap:anywhere}
.panel .note{margin-top:18px;padding:12px 14px;background:var(--orange-lighter);border:1px solid #F5D2BC;border-radius:var(--radius-sm);font-size:14.5px}

/* how it works */
.prose{max-width:74ch;font-size:16px;line-height:1.6;color:var(--text-2)}
.prose h3{font-size:18px;margin:26px 0 8px}
.prose p{margin:0 0 12px}
.prose ul{margin:0 0 12px;padding-left:22px}
.prose li{margin-bottom:6px}
.prose b{color:var(--text);font-weight:600}
.callout{background:var(--orange-lighter);border:1px solid #F5D2BC;border-radius:var(--radius-md);padding:16px 20px;font-size:15px;color:var(--text);margin:18px 0}
.callout b{color:var(--navy)}

@media (prefers-reduced-motion:reduce){*{transition:none!important;animation:none!important}}
</style>
</head>
<body>
<div class="app">

  <aside class="side">
    <div class="brand">
      <h1>Patron Web Analytics</h1>
      <div class="site">patronaccounting.com</div>
      <span class="real">Live data</span>
    </div>
    <nav class="nav" aria-label="Sections">
      <div class="grp">Report</div>
      <button type="button" data-go="report"><span>Page deep-dive</span><span class="sub" id="navRep">pick a page</span></button>
      <div class="grp">Live</div>
      <button type="button" data-go="live" aria-current="page"><span>Visitors now</span><span class="badge" id="navLive">0</span></button>
      <button type="button" data-go="recent"><span>Recent visits</span></button>
      <button type="button" data-go="errors"><span>Errors</span><span class="badge" id="navErr" hidden>0</span></button>
      <div class="grp">History</div>
      <button type="button" data-go="daily"><span>Daily report</span></button>
      <button type="button" data-go="pages"><span>Page report</span></button>
      <button type="button" data-go="deep"><span>Page analysis</span></button>
      <button type="button" data-go="events"><span>Events</span></button>
      <div class="grp">Visitor</div>
      <button type="button" data-go="detail"><span>Visitor detail</span><span class="sub" id="navSel">none picked</span></button>
      <div class="grp">Help</div>
      <button type="button" data-go="how"><span>How it works</span></button>
    </nav>
    <div class="foot">All times IST. Time on site counts only while the page is open in front of the visitor. Location and the advanced screens are later phases.</div>
  </aside>

  <main class="main">

    <div class="livebar">
      <span><span class="dot" id="liveDot" aria-hidden="true"></span><span id="liveWord">Live</span> · <span id="refreshNote">connecting…</span></span>
      <button type="button" class="btn" id="playToggle" aria-pressed="true">Pause</button>
    </div>

    <!-- 0 · Page deep-dive (the aggregate report) -->
    <section class="screen" id="sc-report" aria-labelledby="h-report" hidden>
      <div class="head">
        <h2 id="h-report">Page deep-dive</h2>
        <p class="lead">Everything the site recorded about one page over a period: visits, how long people stayed and how far they read, the enquiry-form funnel and where it leaks, which sections earn their place, what gets clicked, where people click inside each element, and how they leave.</p>
        <p class="from"><b>Measured from your own visitors</b> · ranges end yesterday (IST) so a half-finished day never dilutes an average · under 30 visits is flagged as unreliable · pick a visitor in Recent visits for the single-session drill-down</p>
      </div>
      <div class="rctl">
        <div class="rpick">
          <label for="rpSearch">Page</label>
          <div class="pickwrap">
            <input type="text" id="rpSearch" placeholder="Type to search pages…" autocomplete="off" role="combobox" aria-expanded="false" aria-controls="rpList" aria-autocomplete="list">
            <div class="picklist" id="rpList" role="listbox" hidden></div>
          </div>
        </div>
        <div class="rdates">
          <span class="lbl">Period</span>
          <div class="chips" role="group" aria-label="Period">
            <button type="button" class="chip" data-rp="today">Today <span class="c">in progress</span></button>
            <button type="button" class="chip" data-rp="10">Last 10 days</button>
            <button type="button" class="chip" data-rp="30" aria-pressed="true">Last 30 days</button>
            <button type="button" class="chip" data-rp="90">Last 90 days</button>
            <button type="button" class="chip" data-rp="180">Last 6 months</button>
            <button type="button" class="chip" data-rp="all">All time</button>
          </div>
          <label class="dl">From <input type="date" id="rpFrom"></label>
          <label class="dl">To <input type="date" id="rpTo"></label>
          <button type="button" class="btn small" id="rpApply">Apply</button>
          <label class="check"><input type="checkbox" id="rpCompare"> Compare with the previous period</label>
        </div>
        <p class="rrange" id="rpRange"></p>
      </div>
      <div id="rpBody"></div>
    </section>

    <!-- 1 · Visitors now -->
    <section class="screen" id="sc-live" aria-labelledby="h-live">
      <div class="head">
        <h2 id="h-live">Visitors on your site now</h2>
        <p class="lead">Everyone with the site open right now and the page they are on. Click a visitor to see everything they did, including where they clicked.</p>
        <p class="from"><b>Recorded by your own site</b> · heartbeat within the last 30 seconds · refreshes every 5 seconds</p>
      </div>
      <div class="cards" id="liveCards"></div>
      <div class="controls">
        <label class="check"><input type="checkbox" id="botToggle"> Show search-engine bots (<span id="cBots">0</span>)</label>
        <span class="right">Use ↑ ↓ and Enter in the list</span>
      </div>
      <div class="tcard"><div class="tscroll"><table id="liveTable"></table></div></div>
    </section>

    <!-- 2 · Recent visits -->
    <section class="screen" id="sc-recent" aria-labelledby="h-recent" hidden>
      <div class="head">
        <h2 id="h-recent">Recent visits</h2>
        <p class="lead">The latest visits, newest first, including people who have already left. Click one to see their journey and click map.</p>
        <p class="from"><b>Recorded by your own site</b> · up to 300 most recent visits · <button type="button" class="btn link" id="recentRefresh">Refresh</button></p>
      </div>
      <div class="controls">
        <label class="check"><input type="checkbox" id="botToggle2"> Show search-engine bots</label>
        <span class="right" id="recentNote"></span>
      </div>
      <div class="tcard"><div class="tscroll"><table id="recentTable"></table></div></div>
    </section>

    <!-- 2b · Errors -->
    <section class="screen" id="sc-errors" aria-labelledby="h-errors" hidden>
      <div class="head">
        <h2 id="h-errors">Problems visitors hit</h2>
        <p class="lead">JavaScript errors and broken pages (404 / 410) that real visitors ran into, with the visit they happened in so you can see what they were doing.</p>
        <p class="from"><b>Recorded by your own site</b> · daily counts from <span class="mono">daily.json</span> · the list checks the most recent visits one by one · <button type="button" class="btn link" id="errRefresh">Refresh</button></p>
      </div>
      <div class="cards" id="errCards"></div>
      <div class="tcard">
        <div class="th"><h3>Errors in recent visits</h3><span class="note" id="errNote"></span></div>
        <div class="tscroll"><table id="errTable"></table></div>
      </div>
    </section>

    <!-- 2c · Daily report -->
    <section class="screen" id="sc-daily" aria-labelledby="h-daily" hidden>
      <div class="head">
        <h2 id="h-daily">Daily report</h2>
        <p class="lead">One row per day: how many people visited, how many sent an enquiry, how many hit an error, and the page that drew the most visits.</p>
        <p class="from"><b>Computed live from your own data</b> · last 30 days · <button type="button" class="btn link" id="dailyRollup">Roll up now</button> freezes today’s and yesterday’s totals into the saved daily report (handy on a server with no nightly job) · <button type="button" class="btn link" id="dailyRefresh">Refresh</button> <span id="dailyRollupMsg" class="mono" style="margin-left:6px;color:var(--text-2)"></span></p>
        <div class="export">
          <button type="button" class="btn primary exp-btn" aria-haspopup="true" aria-expanded="false">Export ▾</button>
          <div class="exp-menu" hidden>
            <button type="button" data-kind="daily" data-fmt="csv">CSV file <small>.csv</small></button>
            <button type="button" data-kind="daily" data-fmt="csv">Excel (opens CSV) <small>.csv</small></button>
          </div>
        </div>
      </div>
      <div class="cards" id="dailyCards"></div>
      <div class="chart" id="dailyChart" hidden>
        <div class="t"><b>Visitors per day</b><span id="dailyPeak"></span></div>
        <div class="bars" id="dailyBars" aria-label="Visitors per day"></div>
        <div class="marks" id="dailyMarks" aria-hidden="true"></div>
        <div class="ax"><span id="dailyFrom"></span><span id="dailyTo"></span></div>
        <div class="key"><span><em style="background:var(--good-dot)"></em>a day with an enquiry</span><span><em style="background:var(--poor-dot)"></em>a day with an error</span><span>weekends lighter</span></div>
      </div>
      <div class="tcard"><div class="tscroll"><table id="dailyTable"></table></div></div>
    </section>

    <div class="overlay" id="expOverlay" hidden>
      <div class="panel" role="dialog" aria-modal="true" aria-labelledby="expTitle">
        <div class="ph"><h3 id="expTitle">Export</h3><button type="button" class="btn" id="expClose">Close</button></div>
        <div class="pb" id="expBody"></div>
      </div>
    </div>

    <!-- 2d · Page report -->
    <section class="screen" id="sc-pages" aria-labelledby="h-pages" hidden>
      <div class="head">
        <h2 id="h-pages">Page report</h2>
        <p class="lead">One row per page. The left columns are for SEO — what pulls visitors and holds them; the right columns are for developers — what’s broken.</p>
        <p class="from"><b>Measured from your own visitors over the last <span id="pagesDaysWord">7</span> days</b> · dead clicks and errors are what a developer should fix; scroll depth and clicks are what SEO should act on · <button type="button" class="btn link" id="pagesRefresh">Refresh</button></p>
        <div class="export">
          <button type="button" class="btn primary exp-btn" aria-haspopup="true" aria-expanded="false">Export ▾</button>
          <div class="exp-menu" hidden>
            <button type="button" data-kind="pages" data-fmt="csv">CSV file <small>.csv</small></button>
            <button type="button" data-kind="pages" data-fmt="csv">Excel (opens CSV) <small>.csv</small></button>
          </div>
        </div>
      </div>
      <div class="controls">
        <div class="chips" role="group" aria-label="Period">
          <button type="button" class="chip" data-pdays="7" aria-pressed="true">Last 7 days</button>
          <button type="button" class="chip" data-pdays="30" aria-pressed="false">Last 30 days</button>
        </div>
        <span class="right">Click a page for its top clicks, dead clicks and errors</span>
      </div>
      <div class="cards" id="pagesCards"></div>
      <div class="tcard"><div class="tscroll"><table id="pagesTable" class="pages"></table></div></div>
    </section>

    <!-- 2e · Page analysis -->
    <section class="screen" id="sc-deep" aria-labelledby="h-deep" hidden>
      <div class="head">
        <h2 id="h-deep">Page analysis</h2>
        <p class="lead">One card per page: which sections held people’s attention, which lines the mouse lingered on, what they clicked, and where they went next — and through which link or card.</p>
        <p class="from"><b>Measured from your own visitors over the last <span id="deepDaysWord">7</span> days</b> — what each page’s visitors read, hovered, clicked and did next · <button type="button" class="btn link" id="deepRefresh">Refresh</button></p>
        <div class="export">
          <button type="button" class="btn primary exp-btn" aria-haspopup="true" aria-expanded="false">Export ▾</button>
          <div class="exp-menu" hidden>
            <button type="button" data-kind="deep" data-fmt="csv">CSV file <small>.csv</small></button>
            <button type="button" data-kind="deep" data-fmt="csv">Excel (opens CSV) <small>.csv</small></button>
          </div>
        </div>
      </div>
      <div class="controls">
        <div class="chips" role="group" aria-label="Period">
          <button type="button" class="chip" data-ddays="7" aria-pressed="true">Last 7 days</button>
          <button type="button" class="chip" data-ddays="30" aria-pressed="false">Last 30 days</button>
        </div>
        <span class="right">Most-viewed page first · hover is a computer-only signal — a rough guide to where the eye lingers</span>
      </div>
      <div class="cards" id="deepCards"></div>
      <div id="deepList"></div>
    </section>

    <!-- 2f · Events -->
    <section class="screen" id="sc-events" aria-labelledby="h-events" hidden>
      <div class="head">
        <h2 id="h-events">Events</h2>
        <p class="lead">Every action on the site counted the way Google Analytics counts it — page views, engagement, clicks, forms and leads — grouped like GA4’s event list.</p>
        <p class="from"><b>The same visits, counted as GA4-style events — so you can read this tool against Google Analytics</b> · last <span id="evDaysWord">7</span> days · <button type="button" class="btn link" id="evRefresh">Refresh</button></p>
        <div class="export">
          <button type="button" class="btn primary exp-btn" aria-haspopup="true" aria-expanded="false">Export ▾</button>
          <div class="exp-menu" hidden>
            <button type="button" data-kind="events" data-fmt="csv">CSV file <small>.csv</small></button>
            <button type="button" data-kind="events" data-fmt="csv">Excel (opens CSV) <small>.csv</small></button>
          </div>
        </div>
      </div>
      <div class="controls">
        <div class="chips" role="group" aria-label="Period">
          <button type="button" class="chip" data-edays="7" aria-pressed="true">Last 7 days</button>
          <button type="button" class="chip" data-edays="30" aria-pressed="false">Last 30 days</button>
        </div>
      </div>
      <div class="cards" id="evCards"></div>
      <div id="evList"></div>
      <div class="callout" id="evNote" hidden>Names like <span class="mono">phone_click</span>, <span class="mono">whatsapp_click</span>, <span class="mono">file_download</span> and <span class="mono">generate_lead</span> are worked out from your own click and form data. <span class="mono">video_*</span> and <span class="mono">first_visit</span> are captured directly. The business conversions (<span class="mono">consultation_booking</span>, <span class="mono">consultation_start</span>, <span class="mono">ads_conversion_Sign_Up_1</span>) appear once they’re defined in the site config — they aren’t guessed.</div>
    </section>

    <!-- 3 · Visitor detail -->
    <section class="screen" id="sc-detail" aria-labelledby="h-detail" hidden>
      <div class="head">
        <h2 id="h-detail">What this visitor did</h2>
        <p class="lead">One person’s visit: how they arrived, every page in order, what they clicked on each, and — for the page they spent longest on — exactly where those clicks landed.</p>
        <p class="from"><b>Recorded by your own site</b> · <span id="detailFrom">pick a visitor from Visitors now or Recent visits</span></p>
      </div>
      <div id="detail"></div>
    </section>

    <!-- 4 · How it works -->
    <section class="screen" id="sc-how" aria-labelledby="h-how" hidden>
      <div class="head">
        <h2 id="h-how">How it works</h2>
        <p class="lead">What this tool records, what it does not, and why you may not see yourself.</p>
      </div>
      <div class="prose">
        <div class="callout"><b>You will not see yourself while logged in to the admin.</b> Logged-in admins are not tracked. To watch a visit appear here, open the website in a normal or incognito window, browse a few pages, and come back to this tab — you will show up within a few seconds.</div>
        <h3>What is recorded</h3>
        <p>Every page on the site now carries a small tracker that sends a heartbeat to Patron’s own database — not to Google. For each visit it records:</p>
        <ul>
          <li><b>Pages</b> — each page opened, in order, with the time.</li>
          <li><b>Time on site</b> — counted only while the tab is open in front of the visitor, not while it sits in the background.</li>
          <li><b>Clicks</b> — what was clicked (the link or button text), and where on the page it landed, so the click map can draw it in the right place.</li>
          <li><b>Scroll depth</b> — how far down each page the visitor got.</li>
          <li><b>Forms</b> — that a field was used and whether the form was sent. <b>Never what was typed.</b></li>
          <li><b>IP address, device, browser and where they came from</b> — read on the server from the request, never from the browser.</li>
        </ul>
        <h3>What is not recorded, or not yet</h3>
        <ul>
          <li><b>Form contents</b> — names, phone numbers and messages typed into a form are not stored by the tracker. Enquiries go through the enquiry form as before.</li>
          <li><b>Location</b> — the city column shows “—” for now. Looking up a city from the IP address is a later phase.</li>
          <li><b>Which Google search brought them</b> — Google has not passed the search term to any website since 2011, so no tool can show it. You see that they came from Google and which page they landed on.</li>
          <li><b>Search-engine bots</b> — Googlebot and the others are recorded but hidden by default; the toggle on each list shows them.</li>
        </ul>
        <h3>Where the numbers come from</h3>
        <p>Nothing on this screen is simulated. “Visitors now” polls <span class="mono">/admin/visitors/live.json</span> every five seconds; “Recent visits” reads <span class="mono">/admin/visitors/sessions.json</span>; a visitor’s detail reads <span class="mono">/admin/visitors/session/{id}.json</span>. If the connection drops, the last good data stays on screen and the bar at the top says “reconnecting”.</p>
        <p>The Daily report reads <span class="mono">/admin/visitors/daily.json</span>; the Errors screen uses the same daily counts and checks the most recent visits one by one for error events.</p>
        <h3>Reading and mouse movement</h3>
        <p>Every 1.5 seconds while the tab is in front of the visitor, the tracker notes which part of the page is on screen. The “Reading” view on a visitor’s map adds those up into how many seconds each strip of the page was visible — the closest honest measure of what they read, and it works on phones as well as computers.</p>
        <p>On a computer the tracker also samples where the mouse moves. The map draws that as a thin line tracing the route the cursor actually took, faint at the start and solid at the end. Where the cursor went is not the same as what they read — the time-on-screen heat is the reliable measure of that — but the line shows the path of their hand across the page. All three layers sit on one map and can be switched on and off.</p>
        <p>Revenue, page speed, SEO health, accessibility, alerts, A/B tests and lead scores need data sources that are not connected yet, so they are not shown rather than shown with made-up numbers.</p>
      </div>
    </section>

  </main>
</div>

<script>
(function(){
  "use strict";

  /* =====================================================================
     DATA — three endpoints, nothing else
     ===================================================================== */
  var API = {
    live: "/admin/visitors/live.json",
    sessions: function(bots){ return "/admin/visitors/sessions.json?bots=" + (bots ? 1 : 0); },
    session: function(id){ return "/admin/visitors/session/" + encodeURIComponent(id) + ".json"; },
    daily: function(days){ return "/admin/visitors/daily.json?days=" + (days || 30); },
    pages: function(days){ return "/admin/visitors/pages.json?days=" + (days || 7); },
    deep: function(days){ return "/admin/visitors/pages-deep.json?days=" + (days || 7); },
    events: function(days){ return "/admin/visitors/events.json?days=" + (days || 7); },
    reportPages: "/admin/visitors/report-pages.json",
    report: function(url, from, to, cmp){ return "/admin/visitors/report.json?url=" + encodeURIComponent(url) + "&from=" + from + "&to=" + to + (cmp ? "&compare=1" : ""); }
  };
  var POLL_MS = 5000;

  var state = {
    screen: "live",
    live: null,            // last good live.json
    sessions: null,        // last good sessions.json
    detail: null,          // last good session/{id}.json
    selected: null,        // session_id
    showBots: false,
    playing: true,
    error: false,
    lastOk: null,          // Date of last successful live fetch
    sort: {recent:{key:"started", dir:"desc"}, daily:{key:"date", dir:"desc"}, pages:{key:"views", dir:"desc"}},
    pages: null,           // last good pages.json
    pagesDays: 7,
    pageOpen: null,        // path expanded in the page report
    deep: null,            // last good pages-deep.json
    deepDays: 7,
    events: null,          // last good events.json
    evDays: 7,
    rp: {pages:null, url:null, preset:"30", from:null, to:null, compare:false, data:null, loading:false, failed:false, dev:"mobile"},
    cmPath: null,          // page chosen in the click map
    cmLayers: {reading:true, mouse:true, clicks:true},   // the three layers of the one map
    daily: null,           // last good daily.json
    errRows: null,         // errors found in recent visits
    errChecked: 0,
    detailCache: {}        // session_id → session/{id}.json (used by the Errors screen)
  };

  var $ = function(id){ return document.getElementById(id); };
  function esc(s){ return String(s == null ? "" : s).replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;"); }
  function pad(n){ return (n<10?"0":"") + n; }
  function mss(sec){ sec = Math.max(0, Math.round(+sec || 0)); return Math.floor(sec/60) + ":" + pad(sec%60); }
  function words(sec){ sec = Math.max(0, Math.round(+sec || 0)); var m = Math.floor(sec/60), r = sec%60; return m ? m + " min " + r + " s" : r + " s"; }
  function fmtN(n){ return String(n == null ? 0 : n).replace(/\B(?=(\d{3})+(?!\d))/g, ","); }
  function ist(iso, withDate){
    if(!iso) return "—";
    var d = new Date(iso); if(isNaN(d)) return String(iso);
    try {
      var o = {timeZone:"Asia/Kolkata", hour:"2-digit", minute:"2-digit", second:"2-digit", hour12:false};
      if(withDate){ o.day = "numeric"; o.month = "short"; }
      return new Intl.DateTimeFormat("en-IN", o).format(d);
    } catch(e){ return d.toISOString().slice(11,19); }
  }
  function ago(iso){
    if(!iso) return "";
    var s = Math.round((Date.now() - new Date(iso).getTime())/1000);
    if(s < 60) return s + " s ago"; if(s < 3600) return Math.floor(s/60) + " min ago"; if(s < 86400) return Math.floor(s/3600) + " h ago";
    return Math.floor(s/86400) + " d ago";
  }
  function pill(cls, text){ return '<span class="pill '+cls+'">'+text+'</span>'; }
  function sourceWord(s){
    var m = {google:"Google Search", direct:"Direct / typed / bookmark", referral:"Another website", social:"Social media", search:"Search engine"};
    return m[s] || (s ? s.charAt(0).toUpperCase() + s.slice(1) : "—");
  }
  function channelWord(r){ return r.channel ? String(r.channel) : sourceWord(r.source); }
  function isGoogleSearch(r){ return /google search/i.test(r.channel || "") || (!r.channel && r.source === "google"); }
  function refHost(r){ return r.referrer ? String(r.referrer).replace(/^https?:\/\//,"").split("/")[0] : ""; }
  function enquiryPill(r){ return r.converted ? ' ' + pill("good", "Enquiry ✓") : ""; }
  function deviceWord(r){
    var d = {mobile:"Phone", desktop:"Computer", tablet:"Tablet", bot:"Bot"}[r.device] || (r.device || "—");
    return d + (r.browser ? " · " + esc(r.browser) : "") + (r.os ? '<span class="sub">'+esc(r.os)+'</span>' : "");
  }
  function locationCell(r){
    var parts = [r.city, r.country].filter(Boolean);
    if(parts.length) return esc(parts.join(", "));
    return '<span class="soon" title="City lookup from the IP address is a later phase">—</span><span class="sub">location coming soon</span>';
  }
  function statusPill(r){
    if(r.is_bot) return pill("grey", "Search bot");
    if(!r.active) return pill("grey", "Left");
    var idle = r.last_seen_at ? (Date.now() - new Date(r.last_seen_at).getTime()) > 15000 : false;
    return pill(idle ? "warn" : "good", idle ? "Idle" : "On site");
  }
  function liveDot(r){ if(!r.active) return '<span class="ldot off"></span>'; var idle = r.last_seen_at ? (Date.now() - new Date(r.last_seen_at).getTime()) > 15000 : false; return '<span class="ldot'+(idle?" idle":"")+'"></span>'; }

  function getJSON(url){
    return fetch(url, {credentials:"same-origin", headers:{"Accept":"application/json"}, cache:"no-store"}).then(function(r){
      if(!r.ok) throw new Error("HTTP " + r.status);
      return r.json();
    });
  }
  /* POST with the page's CSRF token (admin routes run the web middleware). Used
     by the on-demand "Roll up now" trigger; everything else here is read-only. */
  function postJSON(url, body){
    var tok = (document.querySelector('meta[name="csrf-token"]') || {}).content || "";
    return fetch(url, {method:"POST", credentials:"same-origin", cache:"no-store",
      headers:{"Accept":"application/json","Content-Type":"application/json","X-CSRF-TOKEN":tok,"X-Requested-With":"XMLHttpRequest"},
      body: JSON.stringify(body || {})}).then(function(r){
        if(!r.ok) throw new Error("HTTP " + r.status);
        return r.json();
    });
  }

  /* =====================================================================
     NAVIGATION
     ===================================================================== */
  var SCREENS = ["report","live","recent","errors","daily","pages","deep","events","detail","how"];
  function go(name){
    state.screen = name;
    SCREENS.forEach(function(s){ $("sc-"+s).hidden = s !== name; });
    Array.prototype.forEach.call(document.querySelectorAll(".nav [data-go]"), function(b){
      if(b.dataset.go === name) b.setAttribute("aria-current","page"); else b.removeAttribute("aria-current");
    });
    if(name === "recent" && !state.sessions) loadSessions();
    if(name === "errors"){ drawErrors(); if(!state.errRows) loadErrors(); }
    if(name === "daily"){ drawDaily(); if(!state.daily) loadDaily(); }
    if(name === "pages"){ drawPages(); if(!state.pages) loadPages(); }
    if(name === "deep"){ drawDeep(); if(!state.deep) loadDeep(); }
    if(name === "events"){ drawEvents(); if(!state.events) loadEvents(); }
    if(name === "report"){ rpDraw(); if(!state.rp.pages) rpLoadPages(); }
    if(name === "detail") drawDetail();
    window.scrollTo({top:0});
  }
  function open(id){
    state.selected = id; state.cmPath = null; state.cmLayers = {reading:true, mouse:true, clicks:true}; state.detail = null;
    $("navSel").textContent = id ? shortIp(rowById(id)) : "none picked";
    go("detail");
    loadDetail(id);
  }
  function rowById(id){
    var pools = [state.live && state.live.active, state.sessions && state.sessions.sessions, state.detail && [state.detail.session]];
    for(var i=0;i<pools.length;i++){ var p = pools[i] || []; for(var j=0;j<p.length;j++) if(p[j] && p[j].session_id === id) return p[j]; }
    return null;
  }
  function shortIp(r){ return r && r.ip ? r.ip : "…"; }

  /* =====================================================================
     1 · VISITORS NOW
     ===================================================================== */
  function loadLive(){
    return getJSON(API.live).then(function(d){
      state.live = d; state.error = false; state.lastOk = new Date();
      drawLive(); drawBar();
    }).catch(function(){ state.error = true; drawBar(); });
  }
  function tableHead(cols){ return '<thead><tr>' + cols.join("") + '</tr></thead>'; }
  function th(label, cls, key, tbl){
    if(!key) return '<th class="'+(cls||"")+'">'+label+'</th>';
    var s = state.sort[tbl], as = s.key===key ? (s.dir==="asc"?"ascending":"descending") : "none";
    return '<th class="'+(cls||"")+'" aria-sort="'+as+'"><button type="button" class="sort" data-tbl="'+tbl+'" data-key="'+key+'">'+label+'</button></th>';
  }
  function visitorRow(r){
    var here = r.current_path || r.landing_path || "/";
    return '<tr class="row'+(r.active?"":" left")+'" tabindex="0" data-id="'+esc(r.session_id)+'" aria-label="Open '+esc(r.ip)+'">'
      + '<td>'+liveDot(r)+'<span class="mono">'+esc(r.ip || "—")+'</span>'+(r.is_bot ? '<span class="sub">bot</span>' : '')+'</td>'
      + '<td>'+locationCell(r)+'</td>'
      + '<td>'+deviceWord(r)+'</td>'
      + '<td class="path" title="'+esc(here)+'">'+esc(here)+(r.landing_path && r.landing_path !== here ? '<span class="sub">landed on '+esc(r.landing_path)+'</span>' : '')+'</td>'
      + '<td class="num">'+mss(r.engaged)+'</td>'
      + '<td class="num">'+(r.pages || 0)+'</td>'
      + '<td>'+esc(channelWord(r))+(refHost(r) && r.source !== "direct" ? '<span class="sub">'+esc(refHost(r).slice(0,48))+'</span>' : '')+'</td>'
      + '<td>'+statusPill(r)+enquiryPill(r)+'<span class="sub">'+(r.active ? "seen " + ago(r.last_seen_at) : "left " + ago(r.last_seen_at))+'</span></td>'
      + '</tr>';
  }
  var VCOLS = ['<th>Visitor</th>','<th>Location</th>','<th>Device</th>','<th>Page they are on</th>','<th class="num">Time on site</th>','<th class="num">Pages</th>','<th>Came from</th>','<th>Status</th>'];

  function drawLive(){
    var d = state.live, st = (d && d.stats) || {};
    $("liveCards").innerHTML =
      '<div class="card accent"><div class="n">'+fmtN(st.active_humans || 0)+'</div><div class="l">On the site now</div><div class="s">people, not bots</div></div>'
      + '<div class="card"><div class="n">'+fmtN(st.active_bots || 0)+'</div><div class="l">Active bots</div><div class="s">search-engine crawlers</div></div>'
      + '<div class="card"><div class="n">'+fmtN(st.last_30_min || 0)+'</div><div class="l">Visits in the last 30 minutes</div></div>'
      + '<div class="card"><div class="n">'+fmtN(st.today || 0)+'</div><div class="l">Visits today</div></div>'
      + '<div class="card good"><div class="n">'+fmtN(st.today_events || 0)+'</div><div class="l">Events today</div><div class="s">page views, clicks, scrolls, forms</div></div>';
    $("navLive").textContent = st.active_humans || 0;
    var rows = ((d && d.active) || []).filter(function(r){ return state.showBots || !r.is_bot; });
    $("cBots").textContent = ((d && d.active) || []).filter(function(r){ return r.is_bot; }).length;
    var focused = document.activeElement && document.activeElement.dataset ? document.activeElement.dataset.id : null;
    var body = rows.map(visitorRow).join("");
    if(!body){
      body = '<tr><td colspan="8"><div class="empty live"><div class="ring"><i></i></div>'
        + (d ? '<b>No one is on the site right now.</b>Open the website in another tab and you’ll appear here within a few seconds.<small>Browse in a normal or incognito window — logged-in admins are not tracked, so this tab will not see itself.</small>'
             : '<b>Connecting to your site…</b>Waiting for the first reading from <span class="mono">/admin/visitors/live.json</span>.')
        + '</div></td></tr>';
    }
    $("liveTable").innerHTML = tableHead(VCOLS) + '<tbody>' + body + '</tbody>';
    if(focused){ var el = $("liveTable").querySelector('tr[data-id="'+focused+'"]'); if(el) el.focus({preventScroll:true}); }
  }

  /* =====================================================================
     2 · RECENT VISITS
     ===================================================================== */
  function loadSessions(){
    $("recentNote").textContent = "loading…";
    return getJSON(API.sessions(state.showBots)).then(function(d){
      state.sessions = d; state.error = false; drawRecent();
    }).catch(function(){ state.error = true; $("recentNote").textContent = "could not load — showing the last good list"; drawBar(); if(state.sessions) drawRecent(); else drawRecent(true); });
  }
  function drawRecent(failed){
    var list = ((state.sessions && state.sessions.sessions) || []).filter(function(r){ return state.showBots || !r.is_bot; });
    var s = state.sort.recent;
    var val = function(r,k){ return k==="started" ? (r.started_at || "") : k==="engaged" ? (+r.engaged || 0) : k==="pages" ? (+r.pages || 0) : k==="clicks" ? (+r.clicks || 0) : k==="scroll" ? (+r.max_scroll || 0) : 0; };
    list.sort(function(a,b){ var x = val(a,s.key), y = val(b,s.key); if(x===y) return 0; return (x<y?-1:1) * (s.dir==="asc"?1:-1); });
    var cols = ['<th>Visitor</th>','<th>Location</th>','<th>Device</th>', th("Started","",  "started","recent"), '<th>Last page</th>',
                th("Time on site","num","engaged","recent"), th("Pages","num","pages","recent"), th("Clicks","num","clicks","recent"), th("Read","num","scroll","recent"), '<th>Came from</th>','<th>Status</th>'];
    var body = list.map(function(r){
      var here = r.current_path || r.landing_path || "/";
      return '<tr class="row'+(r.active?"":" left")+'" tabindex="0" data-id="'+esc(r.session_id)+'" aria-label="Open '+esc(r.ip)+'">'
        + '<td>'+liveDot(r)+'<span class="mono">'+esc(r.ip || "—")+'</span>'+(r.is_bot ? '<span class="sub">bot</span>' : '')+'</td>'
        + '<td>'+locationCell(r)+'</td><td>'+deviceWord(r)+'</td>'
        + '<td>'+ist(r.started_at, true)+'<span class="sub">'+ago(r.started_at)+'</span></td>'
        + '<td class="path" title="'+esc(here)+'">'+esc(here)+'</td>'
        + '<td class="num">'+mss(r.engaged)+'</td><td class="num">'+(r.pages||0)+'</td><td class="num">'+(r.clicks||0)+'</td><td class="num">'+(r.max_scroll||0)+'%</td>'
        + '<td>'+esc(channelWord(r))+'</td><td>'+statusPill(r)+enquiryPill(r)+'</td></tr>';
    }).join("");
    if(!body){
      body = '<tr><td colspan="11"><div class="empty"><div class="ring"><i></i></div>'
        + (failed ? '<b>Could not reach the site.</b>The list will fill when <span class="mono">/admin/visitors/sessions.json</span> answers. <small>Try Refresh in a moment.</small>'
                  : '<b>No visits recorded yet.</b>Every visit to the website from now on will be listed here, newest first, and stays after the visitor leaves.<small>Open the site in an incognito window to record the first one.</small>')
        + '</div></td></tr>';
    }
    $("recentTable").innerHTML = tableHead(cols) + '<tbody>' + body + '</tbody>';
    $("recentNote").textContent = list.length ? list.length + " visit" + (list.length===1?"":"s") + (state.showBots ? " including bots" : "") : "";
  }

  /* =====================================================================
     3 · VISITOR DETAIL — journey + per-visitor click map
     ===================================================================== */
  function loadDetail(id){
    if(!id) return;
    return getJSON(API.session(id)).then(function(d){
      if(state.selected !== id) return;
      state.detail = d; state.error = false; drawDetail();
    }).catch(function(){ state.error = true; drawBar(); drawDetail(true); });
  }

  /* group events: each page_view owns the clicks / scrolls / form events that follow it, by order */
  function journeyOf(d){
    var ev = (d.events || []).slice().sort(function(a,b){ return new Date(a.at) - new Date(b.at); });
    var pages = [], cur = null, n = 0;
    ev.forEach(function(e){
      if(e.type === "page_view"){
        cur = {path:e.path || "/", title:e.title || "", at:e.at, clicks:[], scroll:0, forms:[], moves:[], views:[], errors:[], end:null};
        pages.push(cur); return;
      }
      if(!cur){ cur = {path:e.path || (d.session && d.session.landing_path) || "/", title:"", at:e.at, clicks:[], scroll:0, forms:[], moves:[], views:[], errors:[], end:null}; pages.push(cur); }
      if(e.type === "move"){ if(e.x != null && e.y != null) cur.moves.push({x:+e.x, y:+e.y, vw:e.vw}); return; }
      // a reading sample: the band [x, x + scroll/100] of the page was on screen at engaged-second `es` (taken only while the tab was visible)
      if(e.type === "view"){ if(e.x != null && e.es != null) cur.views.push({x:+e.x, span:Math.max(0, +e.scroll || 0)/100, es:+e.es, vw:e.vw}); return; }
      if(e.type === "error" || e.type === "page_error"){ cur.errors.push({type:e.type, label:e.label || (e.type==="page_error" ? "Broken page" : "Script error"), element:e.element || "", at:e.at, path:e.path || cur.path}); return; }
      if(e.type === "click"){ n++; cur.clicks.push({n:n, label:e.label || e.href || e.element || "click", element:e.element || "", href:e.href || "", region:e.region || "", x:e.x, y:e.y, vw:e.vw, at:e.at, path:e.path}); }
      else if(e.type === "scroll"){ cur.scroll = Math.max(cur.scroll, +e.scroll || 0); }
      else if(e.type === "form_start" || e.type === "form_submit"){ n++; cur.forms.push({n:n, type:e.type, at:e.at, label:e.label || e.field || ""}); cur.clicks.push({n:n, form:e.type, label:(e.type==="form_submit" ? "Sent the enquiry form" : "Started the enquiry form" + (e.field ? " at " + e.field : "")), element:e.element || "form", region:e.region || "form", x:e.x, y:e.y, vw:e.vw, at:e.at, path:e.path}); }
      else if(e.type === "exit"){ cur.end = e.at; }
    });
    for(var i=0;i<pages.length;i++){
      var next = pages[i+1];
      pages[i].secs = Math.max(0, Math.round((new Date(next ? next.at : (pages[i].end || (d.session && d.session.last_seen_at) || pages[i].at)) - new Date(pages[i].at)) / 1000));
    }
    return pages;
  }
  function rel(iso, startIso){ var s = Math.max(0, Math.round((new Date(iso) - new Date(startIso))/1000)); return "+" + mss(s); }

  /* where on the page a click was, in plain words; the chip class groups navigation regions */
  var REGION = {
    "header":     {words:"the header",               inWords:"in the header",              cls:"nav"},
    "menu":       {words:"the header menu",          inWords:"in the header menu",         cls:"nav"},
    "footer":     {words:"a link in the footer",     inWords:"in the footer",              cls:"nav"},
    "sticky bar": {words:"the sticky WhatsApp bar",  inWords:"in the sticky bar",          cls:"sticky"},
    "form":       {words:"the enquiry form",         inWords:"in the enquiry form",        cls:"form"},
    "sidebar":    {words:"the sidebar",              inWords:"in the sidebar",             cls:""},
    "page content":{words:"an internal link in the page content", inWords:"in the page content", cls:""}
  };
  function regionChip(c){ if(!c.region) return ""; var r = REGION[c.region] || {cls:""}; return '<span class="rg'+(r.cls ? " "+r.cls : "")+'">'+esc(c.region)+'</span>'; }
  function hrefPath(href){
    if(!href) return null;
    href = String(href).trim();
    if(/^(tel:|mailto:|javascript:|#)/i.test(href)) return null;
    try { return stripSlash(new URL(href, location.origin).pathname); } catch(e){ return null; }
  }
  function stripSlash(p){ return (p || "").replace(/\/+$/, "") || "/"; }
  /* the click that took them from page A to page B: the last click on A whose link points at B's path */
  function navigatingClick(a, b){
    var target = stripSlash(b.path);
    for(var i=a.clicks.length-1;i>=0;i--){ var c = a.clicks[i]; if(!c.form && hrefPath(c.href) === target) return c; }
    return null;
  }
  function hopHtml(a, b){
    var c = navigatingClick(a, b);
    if(!c) return '<div class="hop none"><div class="arrow">→</div><div>Moved to <span class="to">'+esc(b.path)+'</span> — no link click recorded (browser back, a menu script, or a new tab)</div></div>';
    var r = REGION[c.region];
    var where = r ? r.words : (c.region ? esc(c.region) : "the page");
    return '<div class="hop"><div class="arrow">→</div><div>Left this page by clicking <b>“'+esc(c.label)+'”</b> in <b>'+where+'</b>'+regionChip(c)+' → went to <span class="to">'+esc(b.path)+'</span></div></div>';
  }

  function drawDetail(failed){
    var box = $("detail"), d = state.detail, id = state.selected;
    if(!id){
      $("detailFrom").textContent = "pick a visitor from Visitors now or Recent visits";
      box.innerHTML = '<div class="dcard"><div class="empty"><div class="ring"><i></i></div><b>No visitor picked yet.</b>Click a row in Visitors now or Recent visits, or move to one with <kbd>↑</kbd> <kbd>↓</kbd> and press <kbd>Enter</kbd>.</div></div>';
      return;
    }
    if(!d){
      box.innerHTML = '<div class="dcard"><div class="empty"><div class="ring"><i></i></div>' + (failed
        ? '<b>Could not load this visit.</b>The site did not answer for <span class="mono">'+esc(API.session(id))+'</span>.<small><button type="button" class="btn small" id="retryDetail">Try again</button></small>'
        : '<b>Loading this visit…</b>') + '</div></div>';
      var rb = $("retryDetail"); if(rb) rb.addEventListener("click", function(){ loadDetail(id); });
      return;
    }
    var s = d.session || {}, pages = journeyOf(d);
    var totalClicks = pages.reduce(function(n,p){ return n + p.clicks.length; }, 0);
    var allErrors = pages.reduce(function(a,p){ return a.concat(p.errors); }, []);
    var submitAt = null, started = false;
    (d.events || []).forEach(function(e){ if(e.type === "form_submit" && !submitAt) submitAt = e.at; if(e.type === "form_start") started = true; });
    var converted = !!s.converted || !!submitAt;
    $("detailFrom").textContent = "visit " + (s.session_id || id).slice(0, 12) + " · " + (s.active ? "still on the site" : "ended");
    $("navSel").textContent = shortIp(s);

    var banner = converted ? '<div class="banner good"><b>Submitted the enquiry form</b>'+(submitAt ? '<span class="t">'+ist(submitAt, true)+' IST</span>' : '')+'</div>'
               : started ? '<div class="banner grey">Started the enquiry form but did not submit it</div>' : '';
    var head = '<div class="dcard">' + banner + '<div class="jb"><div class="jhead"><div>'
      + '<div class="ip">'+esc(s.ip || "—")+'</div>'
      + '<div class="who">'+deviceWord(s).replace(/<span class="sub">/, ' · ').replace(/<\/span>/, '')+(s.city ? ' · '+esc(s.city) : ' · <span class="soon" title="City lookup is a later phase">location coming soon</span>')+'</div>'
      + '<div class="when">Arrived '+ist(s.started_at, true)+' IST · last seen '+ago(s.last_seen_at)+(s.active ? ' · now on <span class="mono">'+esc(s.current_path || "")+'</span>' : '')+'</div>'
      + '</div><div>'+statusPill(s)+'</div></div>'
      + '<div class="facts">'
        + '<div class="fact"><div class="n">'+words(s.engaged)+'</div><div class="l">Time on site</div></div>'
        + '<div class="fact"><div class="n">'+(s.pages || pages.length)+'</div><div class="l">Pages opened</div></div>'
        + '<div class="fact"><div class="n">'+(s.clicks != null ? s.clicks : totalClicks)+'</div><div class="l">Things clicked</div></div>'
        + '<div class="fact"><div class="n">'+(s.max_scroll || 0)+'%</div><div class="l">Furthest down a page</div></div>'
      + '</div></div></div>';

    var arrive = '<div class="dcard"><div class="jt">How they got here</div><div class="jb"><div class="arr">'
      + '<div class="k">Came from</div><div class="v"><b>'+esc(channelWord(s))+'</b>'+(refHost(s) ? '<span class="why">via <span class="mono">'+esc(refHost(s))+'</span></span>' : '')+'</div>'
      + '<div class="k">First page they saw</div><div class="v"><span class="mono">'+esc(s.landing_path || (pages[0] && pages[0].path) || "/")+'</span>'+(pages[0] && pages[0].title ? '<span class="why">'+esc(pages[0].title)+'</span>' : '')+'</div>'
      + (isGoogleSearch(s) ? '<div class="k">Which Google search?</div><div class="v"><b>Google does not tell websites this</b><span class="why">It stopped passing the search term in 2011, so no tool can show it. The first page they saw is your best clue.</span>'
          + '<span class="why">Google organic and a Google Business Profile click look identical to every website unless the Business Profile’s website link carries a ?utm_source tag — so some of these may be from your Google listing.</span></div>' : '')
      + '</div></div></div>';

    var errBlock = allErrors.length ? '<div class="dcard"><div class="banner poor"><b>Errors on this visit</b><span class="t">'+allErrors.length+'</span></div><ul class="errlist">'
      + allErrors.map(function(x){ return '<li><span class="t">'+ist(x.at)+'</span><span><b>'+esc(x.type==="page_error" ? "Broken page (" + x.label.replace(/^HTTP\s*/i, "") + ")" : x.label)+'</b><span class="el">on '+esc(x.path)+(x.element ? ' · '+esc(x.element) : '')+'</span></span></li>'; }).join("")
      + '</ul></div>' : '';

    var steps = pages.map(function(p, i){
      var clicks = p.clicks.map(function(c){
        var cls = c.form === "form_submit" ? " sent" : c.form ? " form" : "";
        return '<li><span class="at">'+rel(c.at, s.started_at)+'</span><span class="n'+cls+'">'+c.n+'</span><span><b>'+esc(c.label)+'</b>'+regionChip(c)+(c.element ? '<span class="el">'+esc(c.element)+(c.href ? ' → '+esc(c.href) : '')+'</span>' : '')+'</span></li>';
      }).join("");
      var next = pages[i+1];
      return '<div class="step"><div class="when"><b>'+ist(p.at)+'</b>page '+(i+1)+'</div><div>'
        + '<div class="pt">'+esc(p.title || p.path)+'</div><div class="pp">'+esc(p.path)+'</div>'
        + '<div class="stay"><span>Stayed about <b>'+words(p.secs)+'</b></span><span class="bar"><i style="width:'+Math.min(100, p.scroll)+'%"></i></span><span>read '+p.scroll+'% of the page</span></div>'
        + (clicks ? '<ul class="clicks">'+clicks+'</ul>' : '<div class="stay" style="color:var(--text-3)">No clicks on this page</div>')
        + '</div></div>' + (next ? hopHtml(p, next) : '');
    }).join("") || '<div class="empty"><b>No page views recorded yet for this visit.</b>The first heartbeat has arrived; page events follow within a few seconds.</div>';

    // click map: opens on the page they are on now (the last page view); earlier pages in the picker, newest first
    var byPath = {};
    pages.forEach(function(p, i){ var b = byPath[p.path] || (byPath[p.path] = {path:p.path, title:p.title, secs:0, clicks:[], moves:[], views:[], last:0}); b.secs += p.secs; b.clicks = b.clicks.concat(p.clicks); b.moves = b.moves.concat(p.moves); b.views = b.views.concat(p.views); b.last = i; if(!b.title) b.title = p.title; });
    var paths = Object.keys(byPath).map(function(k){ return byPath[k]; }).sort(function(a,b){ return b.last - a.last; });
    if(!state.cmPath || !byPath[state.cmPath]) state.cmPath = paths.length ? paths[0].path : null;
    var chosen = state.cmPath ? byPath[state.cmPath] : null;
    var picker = paths.length > 1 ? '<label>Page <select class="pick" id="cmPick">'+paths.map(function(p, i){ return '<option value="'+esc(p.path)+'"'+(p.path===state.cmPath?" selected":"")+'>'+(i===0 ? (s.active ? "now: " : "last: ") : "")+esc(p.path)+' · '+mss(p.secs)+' · '+p.clicks.length+' click'+(p.clicks.length===1?"":"s")+'</option>'; }).join("")+'</select></label>' : '';
    var hasMoves = !!(chosen && chosen.moves.length >= 2), hasViews = !!(chosen && chosen.views.length >= 2), L = state.cmLayers;
    var layerBox = function(key, label, on, cls, note){
      return '<label class="check lay '+cls+'"><input type="checkbox" data-layer="'+key+'"'+(L[key] && on ? ' checked' : '')+(on ? '' : ' disabled')+'> <i></i>'+label+(on ? '' : ' <span class="note">'+note+'</span>')+'</label>';
    };
    var layers = chosen ? '<div class="layers" role="group" aria-label="Layers">'
        + layerBox("reading", "Reading (time on screen)", hasViews, "reading", "no reading samples for this page")
        + layerBox("mouse", "Mouse path", hasMoves, "mouse", "no mouse movement recorded (a touch visit, or the cursor didn’t move)")
        + layerBox("clicks", "Clicks", true, "clicks", "")
        + '</div>' : '';
    var cmap = '<div class="dcard"><div class="jt">What '+esc(s.ip || "this visitor")+' did on <span class="mono">'+esc(chosen ? chosen.path : "")+'</span> <span class="note">clicks, mouse path and reading, together'+(paths.length > 1 ? ' · switch page on the right' : '')+'</span><span class="right">'+picker+'</span></div>'
      + layers
      + (chosen ? '<div class="cm"><div>'
          + '<div class="cm-scroll" id="cmScroll"><div class="cm-stage" id="cmStage"><div class="cm-doc" id="cmDoc">'
            + '<iframe id="cmFrame" src="'+esc(chosen.path)+'" title="'+esc(chosen.path)+' as it is on the site"></iframe>'
            + '<div class="ruled" id="cmRuled" hidden><div class="lbl">'+esc(chosen.path)+' — the page could not be drawn here, so the clicks are shown on a ruled backdrop at their recorded positions</div></div>'
            + '<canvas id="cmHeat" aria-hidden="true"></canvas>'
            + '<svg id="cmSvg" aria-hidden="true"></svg>'
          + '</div></div></div>'
        + '</div><div class="cm-list">'
          + (chosen.clicks.length ? '<ol>'+chosen.clicks.map(function(c){ var cls = c.form === "form_submit" ? " sent" : c.form ? " form" : ""; return '<li><span class="n'+cls+'">'+c.n+'</span><span><b>'+esc(c.label)+'</b>'+(c.element ? '<span class="el">'+esc(c.element)+(c.href ? ' → '+esc(c.href) : '')+'</span>' : '')+(c.x == null || c.y == null ? '<span class="el">position not recorded — listed, not drawn</span>' : '')+'</span><span class="t">'+rel(c.at, s.started_at)+'</span></li>'; }).join("")+'</ol>'
                            : '<div class="empty"><b>No clicks on this page.</b>They read it — '+mss(chosen.secs)+' — but did not click anything. That is worth knowing too.</div>')
        + '</div></div>'
        + '<div class="cm-cap" id="cmCap"></div>'
        : '<div class="empty"><b>Nothing to draw yet.</b>The click map appears once this visit has a page view.</div>')
      + '</div>';

    box.innerHTML = head + arrive + errBlock + '<div class="dcard"><div class="jt">What they did, in order <span class="note">clicks are numbered across the whole visit</span></div>'+steps+'</div>' + cmap;

    var pk = $("cmPick"); if(pk) pk.addEventListener("change", function(){ state.cmPath = this.value; drawDetail(); });
    Array.prototype.forEach.call(box.querySelectorAll("[data-layer]"), function(b){ b.addEventListener("change", function(){ state.cmLayers[this.dataset.layer] = this.checked; if(state.cmRedraw) state.cmRedraw(); }); });
    if(chosen) mountClickMap(chosen, s);
  }

  /* ---- the per-visitor click map: real recorded coordinates on the real page ---- */
  function mountClickMap(page, s){
    var frame = $("cmFrame"), docEl = $("cmDoc"), stage = $("cmStage"), svg = $("cmSvg"), ruled = $("cmRuled"), cap = $("cmCap"), heat = $("cmHeat");
    if(!frame) return;
    // Page width = the stored `vw`: the beacon records x as a fraction of the page's true content width
    // (documentElement.clientWidth, no scrollbar) and stores that same width in vw. Rendering the page at vw,
    // with the wrapper expanded to the full height so there is no inner scrollbar, makes left = x × vw exact.
    var vws = page.clicks.concat(page.moves, page.views).map(function(c){ return +c.vw; }).filter(function(v){ return v > 0; });
    var W = vws.length ? mode(vws) : (s.device === "mobile" ? 360 : s.device === "tablet" ? 768 : 1280);
    W = Math.max(200, Math.min(2400, Math.round(W)));
    var maxY = page.clicks.concat(page.moves).reduce(function(m,c){ return Math.max(m, +c.y || 0); }, 0);
    var H = Math.max(600, maxY + 400), live = false;

    function layout(){
      var doc = null;
      try { doc = frame.contentDocument; if(doc && (!doc.body || !doc.body.children.length)) doc = null; } catch(e){ doc = null; }
      if(doc){
        try {
          var st = doc.getElementById("vr-inject");
          if(!st){ st = doc.createElement("style"); st.id = "vr-inject"; (doc.head || doc.body).appendChild(st); st.textContent = ".pa-backtop,.pa-wa-float,.portal-lightbox{display:none!important}"; }
          H = Math.max(H, doc.documentElement.scrollHeight, doc.body.scrollHeight); live = true;
        } catch(e){ live = false; }
      }
      var avail = Math.max(300, $("cmScroll").clientWidth - 36), sc = Math.min(1, avail / W);
      docEl.style.width = W + "px"; docEl.style.height = H + "px"; docEl.style.transform = "scale(" + sc + ")";
      stage.style.width = Math.round(W * sc) + "px"; stage.style.height = Math.round(H * sc) + "px";
      frame.hidden = !live; ruled.hidden = live;
      drawLayers(sc);
    }
    /* all three layers on one map: reading wash (canvas, bottom) → mouse path (svg, middle) → click dots (svg, top) */
    var lastSc = 1;
    function drawLayers(sc){
      lastSc = sc;
      var L = state.cmLayers, ns = "http://www.w3.org/2000/svg";
      var showReading = L.reading && page.views.length >= 2, showMouse = L.mouse && page.moves.length >= 2, showClicks = L.clicks;
      var reading = showReading ? drawReading() : clearReading();
      svg.setAttribute("viewBox", "0 0 " + W + " " + H); svg.setAttribute("width", W); svg.setAttribute("height", H);
      while(svg.firstChild) svg.removeChild(svg.firstChild);
      var gm = document.createElementNS(ns, "g"), gc = document.createElementNS(ns, "g");
      if(showMouse) drawMousePath(gm, sc);
      if(showClicks) drawDots(gc, sc);
      svg.appendChild(gm); svg.appendChild(gc);       // clicks appended last, so they sit above the mouse path
      var where = live ? '<b>The page as it is on the site</b>, loaded in an iframe at '+W+' px wide — the content width this visitor’s browser had — so everything lands where it did for them. '
                       : '<b>The page could not be loaded in the frame</b>, so everything is drawn on a ruled backdrop ('+W+' px wide). ';
      cap.innerHTML = where + 'All three layers use the same rule: left = the stored fraction of the page width × '+W+', top = the stored pixels from the top of the page.'
        + '<ul class="laykey">'
        + '<li class="reading"><i></i><span class="tx"><b>Heat — time on screen.</b> How long each strip of the page was in front of them: '+(page.views.length >= 2 ? 'from '+fmtN(page.views.length)+' reading samples over '+words(reading ? reading.total : 0)+', counted only while the tab was visible. Hot strips stayed on screen; blank strips were scrolled straight past or never reached. <span class="hm-legend">skimmed <i></i> dwelled'+(reading && reading.max ? ' · hottest strip '+Math.round(reading.max)+' s' : '')+'</span>' : 'no reading samples for this page.')+'</span></li>'
        + '<li class="mouse"><i></i><span class="tx"><b>Line — the mouse route.</b> '+(page.moves.length >= 2 ? 'The line the cursor travelled, in order — earliest faint, latest solid, from '+fmtN(page.moves.length)+' positions. On a computer only; phones have no mouse.' : 'No mouse movement recorded — a touch visit, or the cursor didn’t move.')+'</span></li>'
        + '<li class="clicks"><i></i><span class="tx"><b>Dots — clicks.</b> Numbered in the order they happened'+(page.clicks.length ? ', '+page.clicks.length+' on this page' : ' — none on this page')+'. Amber = started the form, green = sent it.</span></li>'
        + '</ul>' + (live ? 'Loaded the same way the Tools Hub loads its calculators, through a same-origin iframe.' : '');
    }
    state.cmRedraw = function(){ if($("cmFrame") === frame) drawLayers(lastSc); };
    function clearReading(){ if(heat){ heat.width = 1; heat.height = 1; } return null; }
    /* mouse path: the polyline the cursor actually travelled, one segment per consecutive sample, fading in with recency */
    function drawMousePath(g, sc){
      var ns = "http://www.w3.org/2000/svg";
      var pts = page.moves.filter(function(m){ return isFinite(m.x) && isFinite(m.y); }).map(function(m){ return {x:m.x * W, y:m.y}; });
      if(pts.length < 2) return;
      var n = pts.length - 1, w = 1.5 / sc, vr = Math.max(1.2, 1.6 / sc);
      for(var i=0;i<n;i++){
        var seg = document.createElementNS(ns, "line");
        seg.setAttribute("x1", pts[i].x); seg.setAttribute("y1", pts[i].y); seg.setAttribute("x2", pts[i+1].x); seg.setAttribute("y2", pts[i+1].y);
        seg.setAttribute("stroke", "#0E7490"); seg.setAttribute("stroke-width", String(w)); seg.setAttribute("stroke-linecap", "round");
        seg.setAttribute("opacity", (0.18 + 0.72 * (i + 1) / n).toFixed(3));     // earliest faint → latest solid
        g.appendChild(seg);
      }
      pts.forEach(function(p, i){
        var v = document.createElementNS(ns, "circle"); v.setAttribute("cx", p.x); v.setAttribute("cy", p.y); v.setAttribute("r", String(vr));
        v.setAttribute("fill", "#0E7490"); v.setAttribute("opacity", (0.15 + 0.5 * i / n).toFixed(3)); g.appendChild(v);
      });
      var end = document.createElementNS(ns, "circle"); end.setAttribute("cx", pts[n].x); end.setAttribute("cy", pts[n].y); end.setAttribute("r", String(Math.max(3, 4 / sc)));
      end.setAttribute("fill", "#FFFFFF"); end.setAttribute("stroke", "#0E7490"); end.setAttribute("stroke-width", String(1.5 / sc)); g.appendChild(end);   // where the cursor ended up
      var title = document.createElementNS(ns, "title"); title.textContent = "Mouse route: " + pts.length + " positions, ending here"; end.appendChild(title);
    }
    /* reading view: seconds each vertical strip of the page spent on screen, from the `view` samples */
    function readingBands(n){
      var v = page.views.slice().sort(function(a,b){ return a.es - b.es; }), bands = [], total = 0, i, j;
      for(i=0;i<n;i++) bands.push(0);
      for(i=0;i<v.length-1;i++){
        var dt = Math.min(30, Math.max(0, v[i+1].es - v[i].es)); if(!dt) continue;     // one sample never counts for more than 30 s
        var top = Math.max(0, Math.min(1, v[i].x)), bot = Math.max(top, Math.min(1, v[i].x + v[i].span));
        total += dt;
        for(j=Math.floor(top*n); j<Math.min(n, Math.ceil(bot*n)); j++){
          var b0 = j/n, b1 = (j+1)/n, overlap = Math.max(0, Math.min(b1, bot) - Math.max(b0, top)) / (b1 - b0);
          bands[j] += dt * overlap;
        }
      }
      var max = bands.reduce(function(m,x){ return Math.max(m,x); }, 0);
      return {bands:bands, total:total, max:max};
    }
    function drawReading(){
      if(!heat) return null;
      var n = 120, r = readingBands(n), rp = ramp();
      var dpr = Math.min(1.5, window.devicePixelRatio || 1), k = H > 6000 ? 6000 / H : 1;
      var cw = Math.round(W * dpr * k), ch = Math.round(H * dpr * k);
      heat.width = cw; heat.height = ch;
      var g = heat.getContext("2d"); g.clearRect(0,0,cw,ch);
      var strip = Math.max(10, Math.round(16 * dpr * k));
      for(var j=0;j<n;j++){
        if(!r.bands[j] || !r.max) continue;
        var t = Math.min(1, r.bands[j] / r.max), c = Math.round(t*255)*4, col = rp[c]+","+rp[c+1]+","+rp[c+2];
        var y0 = Math.floor(j/n*ch), y1 = Math.ceil((j+1)/n*ch);
        g.fillStyle = "rgba("+col+","+(0.12 + 0.26*t).toFixed(2)+")"; g.fillRect(0, y0, cw, y1 - y0);        // translucent band across the page
        g.fillStyle = "rgba("+col+",0.95)"; g.fillRect(0, y0, strip, y1 - y0);                                 // solid readout strip down the left edge
      }
      return r;
    }
    var rampData = null;
    function ramp(){
      if(rampData) return rampData;
      var c = document.createElement("canvas"); c.width = 256; c.height = 1;
      var g = c.getContext("2d"), gr = g.createLinearGradient(0,0,256,0);
      gr.addColorStop(0,"#2563EB"); gr.addColorStop(.4,"#10B981"); gr.addColorStop(.7,"#F59E0B"); gr.addColorStop(1,"#DC2626");
      g.fillStyle = gr; g.fillRect(0,0,256,1); rampData = g.getImageData(0,0,256,1).data; return rampData;
    }
    function drawDots(g, sc){
      var ns = "http://www.w3.org/2000/svg", svg = g;
      // only events with a recorded position are plotted; the rest stay in the list beside the map
      var pts = page.clicks.filter(function(c){ return c.x != null && c.y != null; })
        .map(function(c){ return {c:c, x:(+c.x) * W, y:+c.y}; }).filter(function(p){ return isFinite(p.x) && isFinite(p.y); });
      if(!pts.length) return;
      var r = Math.max(11, 13 / sc);   // readable after scaling
      if(pts.length > 1){
        var path = document.createElementNS(ns, "polyline");
        path.setAttribute("points", pts.map(function(p){ return p.x + "," + p.y; }).join(" "));
        path.setAttribute("fill", "none"); path.setAttribute("stroke", "#E8712C"); path.setAttribute("stroke-width", String(2 / sc)); path.setAttribute("stroke-dasharray", (6/sc) + " " + (5/sc)); path.setAttribute("opacity", ".7");
        svg.appendChild(path);
      }
      pts.forEach(function(p){
        var g = document.createElementNS(ns, "g");
        var halo = document.createElementNS(ns, "circle"); halo.setAttribute("cx", p.x); halo.setAttribute("cy", p.y); halo.setAttribute("r", r * 1.9); halo.setAttribute("fill", "#E8712C"); halo.setAttribute("opacity", ".18"); g.appendChild(halo);
        var dot = document.createElementNS(ns, "circle"); dot.setAttribute("cx", p.x); dot.setAttribute("cy", p.y); dot.setAttribute("r", r);
        dot.setAttribute("fill", p.c.form === "form_submit" ? "#10B981" : p.c.form ? "#F59E0B" : "#E8712C"); dot.setAttribute("stroke", "#FFFFFF"); dot.setAttribute("stroke-width", String(2 / sc)); g.appendChild(dot);
        var t = document.createElementNS(ns, "text"); t.setAttribute("x", p.x); t.setAttribute("y", p.y); t.setAttribute("text-anchor", "middle"); t.setAttribute("dominant-baseline", "central");
        t.setAttribute("font-family", "Source Sans 3, Segoe UI, sans-serif"); t.setAttribute("font-size", String(r * 1.15)); t.setAttribute("font-weight", "700"); t.setAttribute("fill", "#FFFFFF"); t.textContent = p.c.n; g.appendChild(t);
        var title = document.createElementNS(ns, "title"); title.textContent = p.c.n + ". " + p.c.label + " · " + rel(p.c.at, s.started_at); g.appendChild(title);
        svg.appendChild(g);
      });
    }
    function mode(arr){ var m = {}, best = arr[0], bc = 0; arr.forEach(function(v){ m[v] = (m[v]||0) + 1; if(m[v] > bc){ bc = m[v]; best = v; } }); return best; }

    layout();
    frame.addEventListener("load", layout);
    setTimeout(layout, 1500);   // a late layout pass in case the page is still settling
    window.addEventListener("resize", function(){ if(state.screen === "detail" && $("cmFrame") === frame) layout(); });
  }

  /* =====================================================================
     2b · ERRORS — daily counts for the headline; the list checks recent visits one by one
     ===================================================================== */
  var ERR_CHECK = 40;   // how many of the most recent visits to look inside
  function loadErrors(){
    state.errRows = []; state.errChecked = 0;
    var p = state.daily ? Promise.resolve() : loadDaily();
    var q = state.sessions ? Promise.resolve() : getJSON(API.sessions(state.showBots)).then(function(d){ state.sessions = d; });
    return Promise.all([p, q]).then(function(){
      var list = ((state.sessions && state.sessions.sessions) || []).filter(function(r){ return !r.is_bot; }).slice(0, ERR_CHECK);
      drawErrors();
      var i = 0;
      function next(){
        if(i >= list.length) return;
        var batch = list.slice(i, i + 5); i += 5;
        return Promise.all(batch.map(function(r){
          var cached = state.detailCache[r.session_id];
          var get = cached ? Promise.resolve(cached) : getJSON(API.session(r.session_id)).then(function(d){ state.detailCache[r.session_id] = d; return d; });
          return get.then(function(d){
            (d.events || []).forEach(function(e){ if(e.type === "error" || e.type === "page_error") state.errRows.push({at:e.at, id:r.session_id, ip:r.ip, path:e.path || r.current_path || r.landing_path, type:e.type, label:e.label || "", element:e.element || ""}); });
          }).catch(function(){}).then(function(){ state.errChecked++; });
        })).then(function(){ drawErrors(); return next(); });
      }
      return next();
    }).catch(function(){ state.error = true; drawBar(); drawErrors(true); });
  }
  function drawErrors(failed){
    var days = (state.daily && state.daily.days) || [];
    var sum = function(list, k){ return list.reduce(function(n,d){ return n + (+d[k] || 0); }, 0); };
    var e30 = sum(days, "errors"), e7 = sum(days.slice(0, 7), "errors");
    $("errCards").innerHTML =
      '<div class="card '+(e30 ? "poor" : "good")+'"><div class="n">'+fmtN(e30)+'</div><div class="l">Errors in the last 30 days</div><div class="s">from the daily counts</div></div>'
      + '<div class="card '+(e7 ? "poor" : "")+'"><div class="n">'+fmtN(e7)+'</div><div class="l">Last 7 days</div></div>'
      + '<div class="card"><div class="n">'+fmtN(state.errChecked)+'</div><div class="l">Recent visits checked</div><div class="s">of the '+ERR_CHECK+' most recent</div></div>';
    var nb = $("navErr"); nb.hidden = !e7; nb.textContent = e7; nb.className = "badge" + (e7 ? " poor" : "");
    var rows = (state.errRows || []).slice().sort(function(a,b){ return new Date(b.at) - new Date(a.at); });
    var body = rows.map(function(x){
      return '<tr class="row" tabindex="0" data-id="'+esc(x.id)+'" aria-label="Open '+esc(x.ip)+'"><td>'+ist(x.at, true)+'<span class="sub">'+ago(x.at)+'</span></td>'
        + '<td><span class="mono">'+esc(x.ip)+'</span></td><td class="path" title="'+esc(x.path)+'">'+esc(x.path)+'</td>'
        + '<td style="white-space:normal;min-width:240px">'+(x.type==="page_error" ? pill("poor", "Broken page (" + esc(String(x.label).replace(/^HTTP\s*/i, "")) + ")") : pill("warn", "Script error") + '<span class="sub">'+esc(x.label)+(x.element ? ' · '+esc(x.element) : '')+'</span>')+'</td>'
        + '<td><button type="button" class="btn link" data-open="'+esc(x.id)+'">See the visit →</button></td></tr>';
    }).join("");
    if(!body){
      var checking = state.errRows && state.errChecked < Math.min(ERR_CHECK, ((state.sessions && state.sessions.sessions) || []).length);
      body = '<tr><td colspan="5"><div class="empty'+(checking ? "" : " live")+'"><div class="ring"><i></i></div>'
        + (failed ? '<b>Could not reach the site.</b>Try Refresh in a moment.'
          : checking ? '<b>Checking recent visits…</b>Looking inside the '+ERR_CHECK+' most recent visits for errors and broken pages.'
          : !state.errRows ? '<b>Not checked yet.</b>'
          : '<b>No problems in the '+fmtN(state.errChecked)+' most recent visits.</b>No JavaScript errors and no broken pages. Open any visitor to see their visit in full.<small>Errors from older visits still count in the 30-day figure above.</small>')
        + '</div></td></tr>';
    }
    $("errTable").innerHTML = tableHead(['<th>When</th>','<th>Visitor</th>','<th>Page</th>','<th>Problem</th>','<th></th>']) + '<tbody>' + body + '</tbody>';
    $("errNote").textContent = state.errRows ? (state.errRows.length + " error" + (state.errRows.length===1?"":"s") + " in the " + state.errChecked + " visits checked") : "";
  }

  /* =====================================================================
     2c · DAILY REPORT — daily.json, real days only
     ===================================================================== */
  var DOW = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"], MON = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
  function dateObj(iso){ var p = String(iso).slice(0,10).split("-"); return new Date(+p[0], +p[1]-1, +p[2]); }
  function niceDate(iso){ var d = dateObj(iso); return isNaN(d) ? String(iso) : DOW[d.getDay()]+", "+d.getDate()+" "+MON[d.getMonth()]+" "+d.getFullYear(); }
  function shortDate(iso){ var d = dateObj(iso); return isNaN(d) ? String(iso) : DOW[d.getDay()]+" "+d.getDate()+" "+MON[d.getMonth()]; }
  function isWeekend(iso){ var g = dateObj(iso).getDay(); return g===0 || g===6; }
  function loadDaily(){
    return getJSON(API.daily(30)).then(function(d){ state.daily = d; state.error = false; drawDaily(); }).catch(function(){ state.error = true; drawBar(); drawDaily(true); });
  }
  function drawDaily(failed){
    var days = ((state.daily && state.daily.days) || []).slice();
    var sum = function(k){ return days.reduce(function(n,d){ return n + (+d[k] || 0); }, 0); };
    var best = days.reduce(function(b,d){ return (!b || (+d.visitors||0) > (+b.visitors||0)) ? d : b; }, null);
    $("dailyCards").innerHTML = days.length ?
      '<div class="card accent"><div class="n">'+fmtN(sum("visitors"))+'</div><div class="l">Visitors, last '+days.length+' day'+(days.length===1?"":"s")+'</div><div class="s">people, not bots</div></div>'
      + '<div class="card good"><div class="n">'+fmtN(sum("enquiries"))+'</div><div class="l">Enquiries submitted</div></div>'
      + '<div class="card '+(sum("errors") ? "poor" : "")+'"><div class="n">'+fmtN(sum("errors"))+'</div><div class="l">Errors hit</div></div>'
      + '<div class="card"><div class="n">'+(best ? shortDate(best.date) : "—")+'</div><div class="l">Best day</div><div class="s">'+(best ? fmtN(best.visitors)+' visitors' : '')+'</div></div>'
      : '';
    var chart = $("dailyChart"); chart.hidden = !days.length;
    if(days.length){
      var asc = days.slice().reverse(), max = Math.max(1, Math.max.apply(null, asc.map(function(d){ return +d.visitors || 0; })));
      $("dailyBars").innerHTML = asc.map(function(d){ return '<i class="'+(isWeekend(d.date)?"wk":"")+'" style="height:'+Math.round((+d.visitors||0)/max*100)+'%" title="'+niceDate(d.date)+': '+fmtN(d.visitors)+' visitors"></i>'; }).join("");
      $("dailyMarks").innerHTML = asc.map(function(d){ return '<span>'+(+d.enquiries ? '<em class="e"></em>' : '')+(+d.errors ? '<em class="x"></em>' : '')+'</span>'; }).join("");
      $("dailyFrom").textContent = shortDate(asc[0].date); $("dailyTo").textContent = shortDate(asc[asc.length-1].date);
      $("dailyPeak").textContent = best ? "peak " + fmtN(best.visitors) + " on " + shortDate(best.date) : "";
    }
    var s = state.sort.daily;
    var val = function(d,k){ return k==="date" ? String(d.date) : (+d[k] || 0); };
    days.sort(function(a,b){ var x = val(a,s.key), y = val(b,s.key); if(x===y) return 0; return (x<y?-1:1) * (s.dir==="asc"?1:-1); });
    var cols = [th("Date","","date","daily"), th("Visitors","num","visitors","daily"), th("Page views","num","pageviews","daily"), th("Enquiries submitted","num","enquiries","daily"), th("Errors","num","errors","daily"), th("Avg time on site","num","avg_engaged","daily"), '<th>Top page</th>'];
    var body = days.map(function(d){
      return '<tr><td>'+niceDate(d.date)+(isWeekend(d.date) ? '<span class="sub">Weekend</span>' : '')+'</td><td class="num">'+fmtN(d.visitors)+(+d.bots ? '<span class="sub">+ '+fmtN(d.bots)+' bots</span>' : '')+'</td>'
        + '<td class="num">'+fmtN(d.pageviews)+'</td><td class="num">'+(+d.enquiries ? '<b>'+fmtN(d.enquiries)+'</b>' : '0')+'</td><td class="num">'+(+d.errors ? '<span style="color:var(--poor);font-weight:600">'+fmtN(d.errors)+'</span>' : '0')+'</td>'
        + '<td class="num">'+mss(d.avg_engaged)+'</td><td class="path" title="'+esc(d.top_page || "")+'">'+esc(d.top_page || "—")+'</td></tr>';
    }).join("");
    if(!body){
      body = '<tr><td colspan="7"><div class="empty"><div class="ring"><i></i></div>'
        + (failed ? '<b>Could not reach the site.</b>The report reads <span class="mono">/admin/visitors/daily.json</span>. Try Refresh in a moment.'
                  : '<b>No days recorded yet.</b>Reports fill in as visits come in; a full day appears after midnight IST.')
        + '</div></td></tr>';
    }
    $("dailyTable").innerHTML = tableHead(cols) + '<tbody>' + body + '</tbody>';
  }

  /* =====================================================================
     2d · PAGE REPORT — pages.json, one row per page; SEO columns left, developer columns right
     ===================================================================== */
  function loadPages(){
    return getJSON(API.pages(state.pagesDays)).then(function(d){ state.pages = d; state.error = false; drawPages(); }).catch(function(){ state.error = true; drawBar(); drawPages(true); });
  }
  function barList(items, cls){
    if(!items || !items.length) return '<div class="empty" style="padding:14px 0">Nothing recorded.</div>';
    var max = Math.max.apply(null, items.map(function(i){ return +i.n || 0; })) || 1;
    return '<ol class="barlist">' + items.map(function(i){ return '<li><span class="k">'+esc(i.label || i.msg || "")+'</span><span class="b"><i class="'+(cls||"")+'" style="width:'+Math.round((+i.n||0)/max*100)+'%"></i></span><span class="v">'+fmtN(i.n)+'</span></li>'; }).join("") + '</ol>';
  }
  function drawPages(failed){
    var rows = ((state.pages && state.pages.pages) || []).slice();
    $("pagesDaysWord").textContent = (state.pages && state.pages.days) || state.pagesDays;
    var withErr = rows.filter(function(p){ return (+p.js_errors||0) + (+p.page_errors||0) > 0; }).length;
    var withDead = rows.filter(function(p){ return +p.dead_clicks > 0; }).length;
    var enq = rows.reduce(function(n,p){ return n + (+p.submits||0); }, 0);
    $("pagesCards").innerHTML = rows.length ?
      '<div class="card accent"><div class="n">'+fmtN(rows.length)+'</div><div class="l">Pages with visits</div></div>'
      + '<div class="card good"><div class="n">'+fmtN(enq)+'</div><div class="l">Total enquiries</div><div class="s">forms sent</div></div>'
      + '<div class="card '+(withErr ? "poor" : "")+'"><div class="n">'+fmtN(withErr)+'</div><div class="l">Pages with errors</div><div class="s">for a developer</div></div>'
      + '<div class="card '+(withDead ? "warn" : "")+'"><div class="n">'+fmtN(withDead)+'</div><div class="l">Pages with dead clicks</div><div class="s">clicked, nothing happened</div></div>'
      : '';
    var s = state.sort.pages;
    var val = function(p,k){ return k==="path" ? String(p.path||"") : (+p[k] || 0); };
    rows.sort(function(a,b){ var x = val(a,s.key), y = val(b,s.key); if(x===y) return 0; return (x<y?-1:1) * (s.dir==="asc"?1:-1); });
    var cols = [th("Page","","path","pages"),
      th("Views","num seo","views","pages"), th("Visitors","num seo","visitors","pages"), th("How far people read","seo","avg_scroll","pages"), th("Clicks","num seo","clicks","pages"), th("Enquiries","num seo","submits","pages"),
      th("Dead clicks","num dev","dead_clicks","pages"), th("JS errors","num dev","js_errors","pages"), th("404 hits","num dev","page_errors","pages")];
    var groupRow = '<tr class="grp"><th></th><th colspan="5" class="seo">Engagement — for SEO</th><th colspan="3" class="dev">Needs fixing — for developers</th></tr>';
    var body = rows.map(function(p){
      var open = state.pageOpen === p.path, sc = Math.max(0, Math.min(100, +p.avg_scroll || 0));
      var tr = '<tr class="row'+(open?" open":"")+'" tabindex="0" data-path="'+esc(p.path)+'" aria-expanded="'+open+'" aria-label="Show detail for '+esc(p.path)+'">'
        + '<td class="path" title="'+esc(p.path)+'">'+esc(p.path)+'</td>'
        + '<td class="num seo">'+fmtN(p.views)+'</td><td class="num seo">'+fmtN(p.visitors)+'</td>'
        + '<td class="seo"><span class="sbar"><i style="width:'+sc+'%"></i></span><span class="mono" style="font-size:13px">'+sc+'%</span></td>'
        + '<td class="num seo">'+fmtN(p.clicks)+'</td><td class="num seo">'+(+p.submits ? '<b>'+fmtN(p.submits)+'</b>' : '0')+'</td>'
        + '<td class="num dev">'+(+p.dead_clicks ? '<span class="warnn">'+fmtN(p.dead_clicks)+'</span>' : '0')+'</td>'
        + '<td class="num dev">'+(+p.js_errors ? '<span class="poorn">'+fmtN(p.js_errors)+'</span>' : '0')+'</td>'
        + '<td class="num dev">'+(+p.page_errors ? '<span class="poorn">'+fmtN(p.page_errors)+'</span>' : '0')+'</td></tr>';
      if(open){
        var errs = (p.errors || []).map(function(e){ return e.type === "page_error" ? '<li>'+pill("poor", "Broken page (" + esc(String(e.msg||"").replace(/^HTTP\s*/i,"")) + ")")+'<span class="v">×'+fmtN(e.n)+'</span></li>'
                                                                       : '<li><span class="k"><span class="mono">'+esc(e.msg||"")+'</span>'+(e.where ? ' <span class="mono" style="color:var(--text-3)">· '+esc(e.where)+'</span>' : '')+'</span><span class="v">×'+fmtN(e.n)+'</span></li>'; }).join("");
        tr += '<tr class="xp"><td colspan="9"><div class="xpg">'
          + '<div><h4>Top clicks <span class="who">SEO / UX — what people actually click</span></h4>'+barList(p.top_clicks, "")+'</div>'
          + '<div><h4>Dead clicks <span class="who">fix — people clicked these but nothing happened</span></h4>'+((p.dead_detail||[]).length ? '<p class="fx">Make them work or make them look less clickable:</p>'+barList(p.dead_detail, "warn") : '<div class="empty" style="padding:14px 0">None — everything people clicked here did something.</div>')+'</div>'
          + '<div><h4>Errors <span class="who">developer — to action</span></h4>'+(errs ? '<ul class="barlist errs">'+errs+'</ul>' : '<div class="empty" style="padding:14px 0">No errors on this page.</div>')+'</div>'
          + '</div></td></tr>';
      }
      return tr;
    }).join("");
    if(!body){
      body = '<tr><td colspan="9"><div class="empty"><div class="ring"><i></i></div>'
        + (failed ? '<b>Could not reach the site.</b>The report reads <span class="mono">/admin/visitors/pages.json</span>. Try Refresh in a moment.'
                  : state.pages ? '<b>No page data yet.</b>As visits come in, every page people touch appears here with its clicks, reading depth and any errors.'
                  : '<b>Loading…</b>')
        + '</div></td></tr>';
    }
    $("pagesTable").innerHTML = '<thead>' + groupRow + '<tr>' + cols.join("") + '</tr></thead><tbody>' + body + '</tbody>';
  }

  /* =====================================================================
     2e · PAGE ANALYSIS — pages-deep.json, one card per page
     ===================================================================== */
  function loadDeep(){
    return getJSON(API.deep(state.deepDays)).then(function(d){ state.deep = d; state.error = false; drawDeep(); }).catch(function(){ state.error = true; drawBar(); drawDeep(true); });
  }
  function trunc(s, n){ s = String(s == null ? "" : s).replace(/\s+/g, " ").trim(); return s.length > n ? s.slice(0, n - 1) + "…" : s; }
  function deepBars(items, keyLabel, keyVal, cls, fmt, extra){
    var max = Math.max.apply(null, items.map(function(i){ return +i[keyVal] || 0; })) || 1;
    return '<ol class="barlist">' + items.map(function(i){
      var v = +i[keyVal] || 0;
      return '<li><span class="k">'+esc(keyLabel(i))+(extra ? extra(i) : '')+'</span><span class="b"><i class="'+cls+'" style="width:'+Math.round(v/max*100)+'%"></i></span><span class="v">'+fmt(v)+'</span></li>';
    }).join("") + '</ol>';
  }
  function deepCard(p){
    var exit = +p.exit_rate || 0, left = +p.left_site_here || 0;
    var kpi = 'Views <b>'+fmtN(p.views)+'</b> · Entered here <b>'+fmtN(p.entered_here)+'</b> · Left site here <b>'+fmtN(left)+'</b>'+(p.views ? ' ('+Math.round(exit)+'%)' : '')
      + (p.avg_scroll_at_exit != null ? ' · Exit scroll <b>'+Math.round(+p.avg_scroll_at_exit)+'%</b>' : '');
    var secs = p.engaging_sections || [], hov = p.hover_lines || [], clk = p.top_clicks || [], nav = p.left_to || [];
    var secsHtml = secs.length ? deepBars(secs, function(i){ return trunc(i.section, 90); }, "seconds", "or", function(v){ return Math.round(v) + " s"; })
                               : '<p class="none">Not enough reading samples yet.</p>';
    var hovHtml = hov.length ? deepBars(hov, function(i){ return trunc(i.line, 110); }, "samples", "teal", function(v){ return fmtN(v); }, function(i){ return i.element ? ' <span class="el">'+esc(i.element)+'</span>' : ''; })
                             : '<p class="none">No mouse-hover data (a touch visit, or the cursor didn’t move).</p>';
    var clkHtml = clk.length ? deepBars(clk, function(i){ return trunc(i.label, 80); }, "n", "", function(v){ return fmtN(v); }, function(i){ return i.region ? ' <span class="rg'+((REGION[i.region]||{}).cls ? " "+REGION[i.region].cls : "")+'">'+esc(i.region)+'</span>' : ''; })
                             : '<p class="none">No clicks recorded.</p>';
    var navHtml = nav.length ? '<ol class="flow">' + nav.map(function(t){
        var via = (t.via || []).map(function(v){ return esc(v.label) + (v.n > 1 ? ' ('+fmtN(v.n)+')' : ''); }).join(", ");
        return '<li><span class="n">'+fmtN(t.n)+'×</span><span class="arrow">→</span><span class="to mono">'+esc(t.to)+'</span>'+(via ? '<span class="via">via '+via+'</span>' : '')+'</li>';
      }).join("") + '</ol>'
      : '<p class="none">No onward navigation (they left the site or this was the last page).</p>';
    var fs = +p.form_starts || 0, fsub = +p.form_submits || 0;
    var formHtml = (fs || fsub) ? '<b>'+fmtN(fs)+'</b> started · <b>'+fmtN(fsub)+'</b> submitted'+(fsub ? ' '+pill("good","Enquiry ✓") : '') : 'No enquiry-form activity.';
    return '<article class="pcard">'
      + '<header><h3 class="mono">'+esc(p.path)+'</h3><p class="kpi">'+kpi+'</p></header>'
      + '<div class="pgrid">'
      + '<section><h4>Most engaging sections <span class="who">where reading time went</span></h4>'+secsHtml+'</section>'
      + '<section><h4>Lines the mouse hovered most <span class="who">computer visits only</span></h4>'+hovHtml+'</section>'
      + '<section><h4>What they clicked <span class="who">with where on the page it was</span></h4>'+clkHtml+'</section>'
      + '<section><h4>Where they went next <span class="who">via which link or card</span></h4>'+navHtml+'</section>'
      + '</div>'
      + '<footer><b>Enquiry form:</b> '+formHtml+'</footer>'
      + '</article>';
  }
  function drawDeep(failed){
    var rows = ((state.deep && state.deep.pages) || []).slice().sort(function(a,b){ return (+b.views||0) - (+a.views||0); });
    $("deepDaysWord").textContent = (state.deep && state.deep.days) || state.deepDays;
    var mostRead = null, mostHov = null;
    rows.forEach(function(p){
      var s = (p.engaging_sections || [])[0]; if(s && (!mostRead || +s.seconds > +mostRead.s.seconds)) mostRead = {p:p, s:s};
      var h = (p.hover_lines || [])[0]; if(h && (!mostHov || +h.samples > +mostHov.h.samples)) mostHov = {p:p, h:h};
    });
    var quit = rows.filter(function(p){ return +p.exit_rate >= 60 && +p.views > 0; }).length;
    $("deepCards").innerHTML = rows.length ?
      '<div class="card accent"><div class="n">'+fmtN(rows.length)+'</div><div class="l">Pages analysed</div></div>'
      + '<div class="card"><div class="n" style="font-size:18px;line-height:1.25">'+(mostRead ? '<span class="mono">'+esc(trunc(mostRead.p.path, 40))+'</span>' : '—')+'</div><div class="l">Most-read page</div><div class="s">'+(mostRead ? Math.round(mostRead.s.seconds)+' s on “'+esc(trunc(mostRead.s.section, 48))+'”' : 'no reading samples yet')+'</div></div>'
      + '<div class="card"><div class="n" style="font-size:16px;line-height:1.3;color:#0E7490">'+(mostHov ? esc(trunc(mostHov.h.line, 70)) : '—')+'</div><div class="l">Most-hovered line</div><div class="s">'+(mostHov ? fmtN(mostHov.h.samples)+' samples on <span class="mono">'+esc(trunc(mostHov.p.path, 36))+'</span>' : 'no hover data yet')+'</div></div>'
      + '<div class="card '+(quit ? "warn" : "")+'"><div class="n">'+fmtN(quit)+'</div><div class="l">Pages people quit from</div><div class="s">left the site from here 60% of the time or more</div></div>'
      : '';
    $("deepList").innerHTML = rows.length ? rows.map(deepCard).join("")
      : '<div class="dcard"><div class="empty"><div class="ring"><i></i></div>'
        + (failed ? '<b>Could not reach the site.</b>The report reads <span class="mono">/admin/visitors/pages-deep.json</span>. Try Refresh in a moment.'
                  : state.deep ? '<b>No page behaviour yet.</b>As people browse, each page shows what its visitors read, hovered, clicked and did next.'
                  : '<b>Loading…</b>')
        + '</div></div>';
  }

  /* =====================================================================
     2f · EVENTS — events.json, GA4-style names grouped like GA4's event list
     ===================================================================== */
  var EV_GROUPS = [
    {name:"Page & session", why:"how people arrive and stay", names:["page_view","session_start","first_visit","user_engagement","scroll"]},
    {name:"Interactions", why:"what they tap and open", names:["click","phone_click","whatsapp_click","file_download","video_start","video_progress","video_complete"]},
    {name:"Forms & leads", why:"the steps toward an enquiry", names:["form_start","form_submit","contact_form_start","contact_form_submit","generate_lead","lead_submit","contact_us"]},
    {name:"Business conversions", why:"defined in the site config", names:["consultation_booking","consultation_start","ads_conversion_Sign_Up_1"]}
  ];
  function loadEvents(){
    return getJSON(API.events(state.evDays)).then(function(d){ state.events = d; state.error = false; drawEvents(); }).catch(function(){ state.error = true; drawBar(); drawEvents(true); });
  }
  function drawEvents(failed){
    var ev = ((state.events && state.events.events) || []).filter(function(e){ return e && e.event; }).slice().sort(function(a,b){ return (+b.count||0) - (+a.count||0); });
    $("evDaysWord").textContent = (state.events && state.events.days) || state.evDays;
    var total = ev.reduce(function(n,e){ return n + (+e.count||0); }, 0), max = ev.length ? (+ev[0].count || 1) : 1;
    var lead = ev.filter(function(e){ return e.event === "generate_lead"; })[0], topConv = lead || ev[0];
    $("evCards").innerHTML = ev.length ?
      '<div class="card accent"><div class="n">'+fmtN(total)+'</div><div class="l">Total events</div><div class="s">last '+((state.events && state.events.days) || state.evDays)+' days</div></div>'
      + '<div class="card"><div class="n">'+fmtN(ev.length)+'</div><div class="l">Distinct event types</div></div>'
      + '<div class="card good"><div class="n">'+fmtN(topConv.count)+'</div><div class="l"><span class="mono">'+esc(topConv.event)+'</span></div><div class="s">'+(lead ? "leads generated" : "most frequent event")+'</div></div>'
      : '';
    if(!ev.length){
      $("evList").innerHTML = '<div class="dcard"><div class="empty"><div class="ring"><i></i></div>'
        + (failed ? '<b>Could not reach the site.</b>The list reads <span class="mono">/admin/visitors/events.json</span>. Try Refresh in a moment.'
                  : state.events ? '<b>No events yet.</b>As people browse, every action is counted here in GA4’s vocabulary.' : '<b>Loading…</b>')
        + '</div></div>';
      $("evNote").hidden = true; return;
    }
    var byName = {}; ev.forEach(function(e){ byName[e.event] = +e.count || 0; });
    var placed = {};
    var row = function(name, count){ return '<li><span class="k mono">'+esc(name)+'</span><span class="b"><i style="width:'+Math.round(count/max*100)+'%"></i></span><span class="v">'+fmtN(count)+'</span></li>'; };
    var html = EV_GROUPS.map(function(g){
      var rows = g.names.filter(function(n){ placed[n] = true; return byName[n] > 0; }).sort(function(a,b){ return byName[b] - byName[a]; });
      var sub = rows.reduce(function(n,x){ return n + byName[x]; }, 0);
      if(!rows.length) return '<details class="evgrp empty"><summary><span class="gname">'+esc(g.name)+'</span><span class="gwhy">'+esc(g.why)+'</span><span class="gsum">not seen yet</span></summary><p class="none">No '+esc(g.name.toLowerCase())+' events in this period.</p></details>';
      return '<details class="evgrp" open><summary><span class="gname">'+esc(g.name)+'</span><span class="gwhy">'+esc(g.why)+'</span><span class="gsum">'+fmtN(sub)+' event'+(sub===1?"":"s")+' · '+rows.length+' type'+(rows.length===1?"":"s")+'</span></summary><ol class="barlist ev">'+rows.map(function(n){ return row(n, byName[n]); }).join("")+'</ol></details>';
    }).join("");
    var other = ev.filter(function(e){ return !placed[e.event] && +e.count > 0; });
    if(other.length) html += '<details class="evgrp" open><summary><span class="gname">Other</span><span class="gwhy">events not in the GA4 groups above</span><span class="gsum">'+fmtN(other.reduce(function(n,e){ return n + (+e.count||0); }, 0))+' events · '+other.length+' type'+(other.length===1?"":"s")+'</span></summary><ol class="barlist ev">'+other.map(function(e){ return row(e.event, +e.count); }).join("")+'</ol></details>';
    $("evList").innerHTML = '<div class="dcard evcard">' + html + '</div>';
    $("evNote").hidden = false;
  }

  /* =====================================================================
     0 · PAGE DEEP-DIVE — report-pages.json (picker) + report.json (one page, one period, optional previous period)
     ===================================================================== */
  var IST_OFFSET = 330; // minutes
  function istToday(){ var d = new Date(Date.now() + (IST_OFFSET + new Date().getTimezoneOffset()) * 60000); return d; }
  function isoDate(d){ return d.getFullYear() + "-" + pad(d.getMonth()+1) + "-" + pad(d.getDate()); }
  function addDays(d, n){ var x = new Date(d.getTime()); x.setDate(x.getDate() + n); return x; }
  function rpRangeFor(preset){
    var today = istToday(), yday = addDays(today, -1), first = state.rp.pages && state.rp.pages.first;
    if(preset === "today") return {from:isoDate(today), to:isoDate(today)};
    if(preset === "all") return {from: first || "2026-01-01", to:isoDate(yday)};
    var n = +preset || 30;
    return {from:isoDate(addDays(yday, -(n-1))), to:isoDate(yday)};   // n whole days ending yesterday
  }
  function rpLoadPages(){
    return getJSON(API.reportPages).then(function(d){
      var pages = (d.pages || []).slice();
      var first = pages.reduce(function(m,p){ return p.first_date && (!m || p.first_date < m) ? p.first_date : m; }, null);
      state.rp.pages = {list:pages, first:first};
      if(!state.rp.url && pages.length){ state.rp.url = pages[0].url; }
      rpApplyPreset(state.rp.preset, true);
    }).catch(function(){ state.error = true; drawBar(); state.rp.pages = {list:[], first:null, failed:true}; rpDraw(); });
  }
  function rpApplyPreset(preset, silent){
    state.rp.preset = preset;
    var r = rpRangeFor(preset); state.rp.from = r.from; state.rp.to = r.to;
    Array.prototype.forEach.call(document.querySelectorAll("[data-rp]"), function(b){ b.setAttribute("aria-pressed", String(b.dataset.rp === preset)); });
    $("rpFrom").value = r.from; $("rpTo").value = r.to;
    if(!silent || state.rp.url) rpLoad();
  }
  function rpLoad(){
    if(!state.rp.url || !state.rp.from || !state.rp.to) { rpDraw(); return; }
    state.rp.loading = true; state.rp.failed = false; rpDraw();
    var want = state.rp.url + "|" + state.rp.from + "|" + state.rp.to + "|" + state.rp.compare;
    return getJSON(API.report(state.rp.url, state.rp.from, state.rp.to, state.rp.compare)).then(function(d){
      if(state.rp.url + "|" + state.rp.from + "|" + state.rp.to + "|" + state.rp.compare !== want) return;
      state.rp.data = d; state.rp.loading = false; state.error = false; rpDraw();
    }).catch(function(){ state.rp.loading = false; state.rp.failed = true; state.error = true; drawBar(); rpDraw(); });
  }
  function rpFilter(q){
    var list = (state.rp.pages && state.rp.pages.list) || [], t = (q || "").trim().toLowerCase();
    var hits = t ? list.filter(function(p){ return String(p.url).toLowerCase().indexOf(t) >= 0; }) : list;
    return hits.slice(0, 40);
  }
  function rpDrawList(q){
    var box = $("rpList"), hits = rpFilter(q);
    box.innerHTML = hits.length ? hits.map(function(p, i){
      return '<div class="pickrow" role="option" id="rpo-'+i+'" data-url="'+esc(p.url)+'" aria-selected="'+(p.url===state.rp.url)+'"><span class="mono">'+esc(p.url)+'</span><span class="pv">'+fmtN(p.visits)+' visit'+(+p.visits===1?"":"s")+'</span></div>';
    }).join("") + ((state.rp.pages.list.length > hits.length) ? '<div class="pickmore">Showing '+hits.length+' of '+fmtN(state.rp.pages.list.length)+' pages — keep typing to narrow</div>' : '')
      : '<div class="pickmore">No page matches “'+esc(q)+'”</div>';
    box.hidden = false; $("rpSearch").setAttribute("aria-expanded", "true");
  }
  function rpCloseList(){ $("rpList").hidden = true; $("rpSearch").setAttribute("aria-expanded", "false"); }
  function rpPick(url){ state.rp.url = url; $("rpSearch").value = url; $("navRep").textContent = url; rpCloseList(); if(state.rp.preset === "all") rpApplyPreset("all", true); else rpLoad(); }

  /* ---- rendering ---- */
  function pctOf(a, b){ return b ? Math.round(a / b * 100) : 0; }
  function delta(cur, prev, goodWhenUp, fmt){
    if(prev == null || isNaN(+prev)) return '';
    cur = +cur || 0; prev = +prev || 0;
    if(!prev && !cur) return '<span class="dl0">no change</span>';
    var ch = prev ? Math.round((cur - prev) / prev * 100) : 100, up = cur > prev, same = cur === prev;
    var good = same ? null : (up === goodWhenUp);
    return '<span class="dlt '+(same ? "dl0" : good ? "dlg" : "dlb")+'">'+(same ? "no change" : (up ? "▲" : "▼") + " " + Math.abs(ch) + "%")+'</span><span class="prev">was '+fmt(prev)+'</span>';
  }
  function nicePeriod(from, to){ return from === to ? niceDate(from) : niceDate(from) + " – " + niceDate(to); }
  function rpDraw(){
    var rp = state.rp, body = $("rpBody"), pages = rp.pages;
    // range line
    var rangeTxt = "";
    if(rp.from && rp.to){
      rangeTxt = (rp.preset === "today" ? "Today, " + niceDate(rp.from) + " — in progress, so averages will move until midnight IST"
               : rp.preset === "all" ? "All time (since " + niceDate(pages && pages.first ? pages.first : rp.from) + ") to " + niceDate(rp.to)
               : nicePeriod(rp.from, rp.to) + " · ends yesterday");
      if(rp.compare && rp.data && rp.data.previous) rangeTxt += " · compared with " + nicePeriod(rp.data.previous.from, rp.data.previous.to);
    }
    $("rpRange").textContent = rangeTxt;
    if($("rpSearch").value !== (rp.url || "") && document.activeElement !== $("rpSearch")) $("rpSearch").value = rp.url || "";
    $("navRep").textContent = rp.url || "pick a page";

    if(!pages){ body.innerHTML = '<div class="dcard"><div class="empty"><div class="ring"><i></i></div><b>Loading the page list…</b></div></div>'; return; }
    if(pages.failed && !pages.list.length){ body.innerHTML = '<div class="dcard"><div class="empty"><div class="ring"><i></i></div><b>Could not reach the site.</b>The page list reads <span class="mono">/admin/visitors/report-pages.json</span>. <small><button type="button" class="btn small" id="rpRetryPages">Try again</button></small></div></div>'; var rb = $("rpRetryPages"); if(rb) rb.addEventListener("click", rpLoadPages); return; }
    if(!pages.list.length){ body.innerHTML = '<div class="dcard"><div class="empty"><div class="ring"><i></i></div><b>No pages recorded yet.</b>As visits come in, every page appears in the picker above.</div></div>'; return; }
    if(!rp.url){ body.innerHTML = '<div class="dcard"><div class="empty"><div class="ring"><i></i></div><b>Pick a page above.</b>Type part of its address to find it.</div></div>'; return; }
    if(rp.loading && !rp.data){ body.innerHTML = '<div class="dcard"><div class="empty"><div class="ring"><i></i></div><b>Building the report for <span class="mono">'+esc(rp.url)+'</span>…</b></div></div>'; return; }
    if(rp.failed && !rp.data){ body.innerHTML = '<div class="dcard"><div class="empty"><div class="ring"><i></i></div><b>Could not reach the site.</b>The report reads <span class="mono">/admin/visitors/report.json</span>. <small><button type="button" class="btn small" id="rpRetry">Try again</button></small></div></div>'; var r2 = $("rpRetry"); if(r2) r2.addEventListener("click", rpLoad); return; }
    var d = rp.data; if(!d || !d.report){ body.innerHTML = ""; return; }
    var R = d.report, P = rp.compare ? d.previous : null, visits = +R.visits || 0;
    var stale = (rp.failed || rp.loading) ? '<div class="banner grey">'+(rp.loading ? "Updating…" : "Could not refresh — showing the last report that loaded")+'</div>' : '';
    if(!visits){
      body.innerHTML = stale + '<div class="dcard"><div class="empty"><div class="ring"><i></i></div><b>No data for this page in this range.</b><span class="mono">'+esc(rp.url)+'</span> had no recorded visits between '+niceDate(R.from)+' and '+niceDate(R.to)+'.<small>Try a longer period, or All time (since '+niceDate(d.first_date || pages.first || R.from)+').</small></div></div>';
      return;
    }
    var thin = R.reliable === false || visits < 30;
    var html = stale;
    if(thin) html += '<div class="banner warn"><b>Based on '+fmtN(visits)+' visit'+(visits===1?"":"s")+' — too few to be reliable.</b> Read these numbers as a rough indication only; the click heatmap is not shown under 30 visits.</div>';
    var lv = R.layout_versions || [];
    if(R.spans_layout_change) html += '<div class="banner poor"><b>This page changed on '+esc(lv.slice(1).map(niceDate).join(", ") || "a date in this range")+' during this range — numbers before and after are not directly comparable.</b><span class="t">layouts: '+esc(lv.map(niceDate).join(" · "))+'</span></div>';
    else if(lv.length) html += '<div class="banner grey">Layout unchanged in this range — version dated '+esc(niceDate(lv[0]))+'<span class="t">one layout version</span></div>';

    // 1 · headline scorecards
    var card = function(cls, val, label, sub, prevHtml){ return '<div class="card '+cls+(thin ? " thin" : "")+'"><div class="n">'+val+'</div><div class="l">'+label+'</div>'+(sub ? '<div class="s">'+sub+'</div>' : '')+(prevHtml ? '<div class="cmp">'+prevHtml+'</div>' : '')+'</div>'; };
    html += '<div class="cards">'
      + card("accent", fmtN(visits), "Visits", null, P ? delta(visits, P.visits, true, fmtN) : "")
      + card("", mss(R.avg_time), "Avg time on page", "while the tab was in front of them", P ? delta(R.avg_time, P.avg_time, true, mss) : "")
      + card("", Math.round(+R.avg_read || 0) + "%", "Avg read", "how far down the page, on average", P ? delta(R.avg_read, P.avg_read, true, function(v){ return Math.round(v)+"%"; }) : "")
      + card("", Math.round(+R.bounce_rate || 0) + "%", "Bounce rate", "left without doing anything", P ? delta(R.bounce_rate, P.bounce_rate, false, function(v){ return Math.round(v)+"%"; }) : "")
      + card("", fmtN(R.exits), "Exits", "visits that ended on this page", P ? delta(R.exits, P.exits, false, fmtN) : "")
      + '</div>';

    // 2 · form funnel
    var F = R.funnel;
    html += '<div class="dcard"><div class="jt">Enquiry-form funnel <span class="note">who saw it, who started it, who sent it</span></div>';
    if(F && (+F.saw || +F.started || +F.submitted)){
      var saw = +F.saw||0, st = +F.started||0, sub = +F.submitted||0, drop = F.drop_off != null ? +F.drop_off : Math.max(0, st - sub);
      var step = function(n, label, count, base, cls){ return '<div class="fstep '+cls+'"><div class="fn">'+n+'</div><div><div class="fl">'+label+'</div><div class="fc">'+fmtN(count)+'</div><div class="fp">'+(base != null ? pctOf(count, base)+'% of '+(n===2?"those who saw it":"those who started")+'' : "of "+fmtN(visits)+" visits · "+pctOf(count, visits)+"%")+'</div></div></div>'; };
      html += '<div class="jb"><div class="funnel">'
        + step(1, "Saw the form", saw, null, "")
        + '<div class="farrow">→</div>' + step(2, "Started filling it in", st, saw, "warn")
        + '<div class="farrow">→</div>' + step(3, "Submitted", sub, st, "good")
        + '</div>'
        + '<div class="fdrop">'+(drop ? '<b>'+fmtN(drop)+' started but did not submit.</b> ' + (F.last_field && F.last_field.field ? 'The field they touched last was <b>'+esc(F.last_field.field)+'</b> ('+fmtN(F.last_field.count)+' of them) — that is where the form loses people.' : 'Which field they stopped at was not recorded for these visits.') : '<b>Everyone who started the form submitted it.</b>')+'</div>'
        + (P && P.funnel ? '<p class="cmpline">Previous period: '+fmtN(P.funnel.saw)+' saw · '+fmtN(P.funnel.started)+' started · '+fmtN(P.funnel.submitted)+' submitted'+(P.funnel.last_field && P.funnel.last_field.field ? ' · last field then: '+esc(P.funnel.last_field.field) : '')+'</p>' : '')
        + '</div>';
    } else html += '<div class="empty" style="padding:28px">No enquiry-form activity on this page in this range.</div>';
    html += '</div>';

    // 3 · section attention
    var secs = (R.sections || []).slice().sort(function(a,b){ return (+b.seconds||0) - (+a.seconds||0); });
    html += '<div class="dcard"><div class="jt">Section attention <span class="note">which sections earn their place — ranked by time on screen</span></div>';
    if(secs.length){
      var maxS = Math.max.apply(null, secs.map(function(s){ return +s.seconds||0; })) || 1;
      var prevSec = {}; if(P && P.sections) P.sections.forEach(function(s){ prevSec[s.section] = s; });
      html += '<ol class="seclist">' + secs.map(function(s, i){
        var ps = prevSec[s.section];
        return '<li><span class="rank">'+(i+1)+'</span><span class="sname">'+esc(s.section)+'</span>'
          + '<span class="sbarw"><i style="width:'+Math.round((+s.seconds||0)/maxS*100)+'%"></i></span>'
          + '<span class="ssec">'+Math.round(+s.seconds||0)+' s</span>'
          + '<span class="sreach"><i style="width:'+Math.min(100, +s.reach_share||0)+'%"></i><b>'+Math.round(+s.reach_share||0)+'%</b> of visitors reached this'+(ps ? ' <span class="prev">(was '+Math.round(+ps.seconds||0)+' s · '+Math.round(+ps.reach_share||0)+'%)</span>' : '')+'</span></li>';
      }).join("") + '</ol><div class="cm-cap">Time is counted only while the section was on screen in front of the visitor. Reach is the share of visits that scrolled far enough to see the section at all — a section with high reach and low time is being skipped; one with low reach never gets a chance.</div>';
    } else html += '<div class="empty" style="padding:28px">No reading samples for this page in this range.</div>';
    html += '</div>';

    // 4 · most-clicked elements
    var clk = (R.clicks || []).slice().sort(function(a,b){ return (+b.sessions||0) - (+a.sessions||0); });
    html += '<div class="dcard"><div class="jt">Most-clicked elements <span class="note">ranked by distinct visits, so one rage-clicker can’t skew it</span></div>';
    if(clk.length){
      html += '<div class="tscroll"><table><thead><tr><th>Element</th><th class="num">Visits that clicked it</th><th class="num">Share of visits</th><th class="num">Total clicks</th><th class="num">Clicks per visit</th></tr></thead><tbody>'
        + clk.map(function(c){ var ses = +c.sessions||0, n = +c.clicks||0; return '<tr><td class="path" title="'+esc(c.element_key)+'">'+esc(c.element_key)+'</td><td class="num"><b>'+fmtN(ses)+'</b></td><td class="num">'+pctOf(ses, visits)+'%</td><td class="num">'+fmtN(n)+'</td><td class="num">'+(ses ? (n/ses).toFixed(1) : "—")+(ses && n/ses >= 3 ? ' <span class="warnn" title="Many clicks per visit can mean a button that does not respond">⚠</span>' : '')+'</td></tr>'; }).join("")
        + '</tbody></table></div>';
    } else html += '<div class="empty" style="padding:28px">No clicks recorded on this page in this range.</div>';
    html += '</div>';

    // 5 · click heatmap, per device, per element
    html += '<div class="dcard"><div class="jt">Where people click inside each element <span class="note">element-relative — each box is one element, dots are where inside it the clicks landed</span>'
      + '<span class="right"><div class="chips" role="group" aria-label="Device"><button type="button" class="chip" data-rpdev="mobile" aria-pressed="'+(rp.dev==="mobile")+'">Mobile</button><button type="button" class="chip" data-rpdev="desktop" aria-pressed="'+(rp.dev==="desktop")+'">Desktop</button><button type="button" class="chip" data-rpdev="tablet" aria-pressed="'+(rp.dev==="tablet")+'">Tablet</button></div></span></div>';
    if(thin){ html += '<div class="empty" style="padding:28px"><b>Not enough data for a heatmap.</b>Under 30 visits the dots would say more about chance than about the page.</div>'; }
    else {
      var pts = ((R.heatmap || {})[rp.dev] || []).filter(function(p){ return p && p.key && p.x != null && p.y != null; });
      if(!pts.length) html += '<div class="empty" style="padding:28px">No '+rp.dev+' clicks with a position in this range.</div>';
      else {
        var byKey = {}, order = [];
        pts.forEach(function(p){ if(!byKey[p.key]){ byKey[p.key] = []; order.push(p.key); } byKey[p.key].push(p); });
        order.sort(function(a,b){ return byKey[b].length - byKey[a].length; });
        html += '<div class="hmgrid">' + order.slice(0, 24).map(function(k){
          var ps = byKey[k];
          return '<div class="hmcell"><div class="hmk" title="'+esc(k)+'"><span class="mono">'+esc(k)+'</span><span class="pv">'+fmtN(ps.length)+' click'+(ps.length===1?"":"s")+'</span></div><div class="hmbox">'
            + ps.slice(0, 400).map(function(p){ return '<i style="left:'+(Math.max(0, Math.min(1, +p.x))*100).toFixed(1)+'%;top:'+(Math.max(0, Math.min(1, +p.y))*100).toFixed(1)+'%"></i>'; }).join("")
            + '</div></div>';
        }).join("") + '</div>'
        + '<div class="cm-cap">Each box stands for one element on the page (its left edge is the element’s left edge, its top its top). A cluster at one corner means people aim at the label there; dots spread across the whole box mean the element reads as clickable everywhere. '+(order.length > 24 ? 'Showing the 24 most-clicked of '+order.length+' elements. ' : '')+'Mobile, desktop and tablet are kept apart because the same element sits in a different place on each.</div>';
      }
    }
    html += '</div>';

    // 6 · exits breakdown
    var ex = (R.exits_breakdown || []).filter(function(e){ return +e.count > 0; }).sort(function(a,b){ return (+b.count||0) - (+a.count||0); });
    var EXW = {navigated_away:"Went to another page on the site", closed_or_back:"Closed the tab or went back", idle_timeout:"Went idle and timed out", off_site:"Followed a link off the site"};
    html += '<div class="dcard"><div class="jt">How visits ended here <span class="note">'+fmtN(R.exits)+' exits</span></div>';
    if(ex.length){
      var exT = ex.reduce(function(n,e){ return n + (+e.count||0); }, 0) || 1;
      html += '<div class="exbar">' + ex.map(function(e){ return '<i class="ex-'+esc(e.type)+'" style="width:'+(+e.count/exT*100).toFixed(1)+'%" title="'+esc(EXW[e.type] || e.type)+': '+fmtN(e.count)+'"></i>'; }).join("") + '</div>'
        + '<ol class="barlist" style="padding:6px 22px 18px">' + ex.map(function(e){ return '<li><span class="k"><em class="exdot ex-'+esc(e.type)+'"></em>'+esc(EXW[e.type] || e.type)+' <span class="el">'+esc(e.type)+'</span></span><span class="b"><i style="width:'+Math.round(+e.count/exT*100)+'%"></i></span><span class="v">'+fmtN(e.count)+' · '+pctOf(+e.count, exT)+'%</span></li>'; }).join("") + '</ol>';
    } else html += '<div class="empty" style="padding:28px">No exits recorded from this page in this range.</div>';
    html += '</div>';

    // 7 · by device
    var dev = (R.by_device || []).filter(function(x){ return +x.visits > 0; });
    if(dev.length){
      html += '<div class="dcard"><div class="jt">By device</div><div class="tscroll"><table><thead><tr><th>Device</th><th class="num">Visits</th><th class="num">Share</th><th class="num">Avg time</th><th class="num">Avg read</th></tr></thead><tbody>'
        + dev.map(function(x){ return '<tr><td>'+esc({mobile:"Phone",desktop:"Computer",tablet:"Tablet"}[x.device] || x.device)+'</td><td class="num">'+fmtN(x.visits)+'</td><td class="num">'+pctOf(+x.visits, visits)+'%</td><td class="num">'+mss(x.avg_time)+'</td><td class="num">'+Math.round(+x.avg_read||0)+'%</td></tr>'; }).join("")
        + '</tbody></table></div></div>';
    }
    body.innerHTML = html;
    Array.prototype.forEach.call(body.querySelectorAll("[data-rpdev]"), function(b){ b.addEventListener("click", function(){ state.rp.dev = this.dataset.rpdev; rpDraw(); }); });
  }

  /* export: build the file from what's on screen and download it. The tool opens
     in its own browser tab, so a client-side Blob download works fine here. All
     reports export as CSV (opens directly in Excel/Sheets); the nested Page
     analysis screen shows a short note instead of a single flat sheet. */
  var expOpener = null;
  function csvCell(v){
    v = (v==null?"":String(v)).replace(/\u00a0/g," ").replace(/\s+/g," ").trim();
    /* Neutralise spreadsheet formula injection: a cell that opens with = + - @
       or a tab/CR runs as a formula in Excel/Sheets, so prefix it with an apostrophe. */
    if(/^[=+\-@\t\r]/.test(v)) v = "'" + v;
    return /[",\n]/.test(v) ? '"'+v.replace(/"/g,'""')+'"' : v;
  }
  function downloadCsv(name, rows){
    var csv = "﻿" + rows.map(function(r){ return r.map(csvCell).join(","); }).join("\r\n");
    var url = URL.createObjectURL(new Blob([csv], {type:"text/csv;charset=utf-8"}));
    var a = document.createElement("a"); a.href = url; a.download = name;
    document.body.appendChild(a); a.click();
    setTimeout(function(){ URL.revokeObjectURL(url); if(a.parentNode) a.parentNode.removeChild(a); }, 1500);
  }
  /* Read a rendered <table> into rows[] (last header row + body rows that match
     its column count, so expandable/detail rows are skipped). */
  function tableToRows(id){
    var t = document.getElementById(id); if(!t) return [];
    var heads = t.querySelectorAll("thead tr"), headRow = heads.length ? heads[heads.length-1] : null;
    if(!headRow) return [];
    var hc = headRow.querySelectorAll("th,td"), n = hc.length, rows = [], hr = [];
    Array.prototype.forEach.call(hc, function(c){ hr.push(c.textContent); });
    rows.push(hr);
    Array.prototype.forEach.call(t.querySelectorAll("tbody tr"), function(tr){
      var cells = tr.querySelectorAll("th,td");
      if(cells.length !== n) return;
      var r = []; Array.prototype.forEach.call(cells, function(c){ r.push(c.textContent); });
      rows.push(r);
    });
    return rows;
  }
  function eventsRows(){
    var ev = ((state.events && state.events.events) || []).filter(function(e){ return e && e.event; });
    var groupOf = {}; (typeof EV_GROUPS !== "undefined" ? EV_GROUPS : []).forEach(function(g){ (g.names||[]).forEach(function(nm){ groupOf[nm] = g.name; }); });
    var rows = [["Event","Group","Count"]];
    ev.slice().sort(function(a,b){ return (+b.count||0)-(+a.count||0); }).forEach(function(e){
      rows.push([e.event, groupOf[e.event] || "Other", (+e.count||0)]);
    });
    return rows;
  }
  function openExport(kind, fmt){
    var today = new Date().toISOString().slice(0,10), rows, name;
    if(kind === "pages"){ rows = tableToRows("pagesTable"); name = "patron-page-report-"+today+".csv"; }
    else if(kind === "events"){ rows = eventsRows(); name = "patron-events-"+today+".csv"; }
    else if(kind === "deep"){
      $("expTitle").textContent = "Export — Page analysis";
      $("expBody").innerHTML = '<p style="font-size:15px;line-height:1.6;margin:0 0 10px">Page analysis is a nested report — sections, hover lines, clicks and exits <em>per page</em> — so it does not fit a single spreadsheet cleanly.</p><p style="font-size:15px;line-height:1.6;margin:0">For a per-page table you can export right now, use <b>Page report → Export</b>. Ask the team if you also need a dedicated Page-analysis export.</p>';
      $("expOverlay").hidden = false; $("expClose").focus(); return;
    }
    else { rows = tableToRows("dailyTable"); name = "patron-daily-report-"+today+".csv"; }
    if(!rows || rows.length < 2){ alert("Nothing to export yet — this report has no rows for the selected period. Try Refresh, then Export again."); return; }
    downloadCsv(name, rows);
  }
  function closeExport(){ $("expOverlay").hidden = true; if(expOpener && expOpener.focus) expOpener.focus(); }
  function closeMenus(){ Array.prototype.forEach.call(document.querySelectorAll(".exp-menu"), function(m){ m.hidden = true; }); Array.prototype.forEach.call(document.querySelectorAll(".exp-btn"), function(b){ b.setAttribute("aria-expanded","false"); }); }

  /* =====================================================================
     LIVE BAR + POLLING
     ===================================================================== */
  var sinceOk = 0;
  function drawBar(){
    var dot = $("liveDot");
    dot.className = "dot" + (!state.playing ? " off" : state.error ? " err" : "");
    $("liveWord").textContent = !state.playing ? "Paused" : state.error ? "Reconnecting…" : "Live";
    $("refreshNote").textContent = !state.playing ? "not refreshing" : state.lastOk ? ("updated " + sinceOk + " s ago" + (state.error ? " · showing the last good data" : "")) : (state.error ? "cannot reach the site yet" : "connecting…");
  }
  var pollTimer = null;
  function startPolling(){ if(pollTimer) return; loadLive(); pollTimer = setInterval(loadLive, POLL_MS); }
  function stopPolling(){ clearInterval(pollTimer); pollTimer = null; }
  setInterval(function(){ if(state.lastOk) sinceOk = Math.round((Date.now() - state.lastOk.getTime())/1000); drawBar(); }, 1000);

  /* =====================================================================
     EVENTS
     ===================================================================== */
  Array.prototype.forEach.call(document.querySelectorAll(".nav [data-go]"), function(b){ b.addEventListener("click", function(){ go(this.dataset.go); }); });

  function wireTable(tbl){
    tbl.addEventListener("click", function(e){ if(e.target.closest(".sort")) return; var tr = e.target.closest("tr.row"); if(tr) open(tr.dataset.id); });
    tbl.addEventListener("keydown", function(e){
      var rows = Array.prototype.slice.call(this.querySelectorAll("tr.row")), cur = rows.indexOf(document.activeElement);
      if(cur < 0) return;
      if(e.key==="Enter" || e.key===" "){ e.preventDefault(); open(rows[cur].dataset.id); }
      else if(e.key==="ArrowDown"){ e.preventDefault(); rows[Math.min(rows.length-1, cur+1)].focus(); }
      else if(e.key==="ArrowUp"){ e.preventDefault(); rows[Math.max(0, cur-1)].focus(); }
      else if(e.key==="Home"){ e.preventDefault(); rows[0].focus(); }
      else if(e.key==="End"){ e.preventDefault(); rows[rows.length-1].focus(); }
    });
  }
  wireTable($("liveTable")); wireTable($("recentTable")); wireTable($("errTable"));

  document.addEventListener("click", function(e){
    var o = e.target.closest("[data-open]"); if(o){ open(o.dataset.open); return; }
    var b = e.target.closest(".sort"); if(!b) return;
    var s = state.sort[b.dataset.tbl]; if(!s) return;
    if(s.key === b.dataset.key) s.dir = s.dir==="asc" ? "desc" : "asc"; else { s.key = b.dataset.key; s.dir = "desc"; }
    if(b.dataset.tbl === "daily") drawDaily(); else if(b.dataset.tbl === "pages") drawPages(); else drawRecent();
  });
  $("errRefresh").addEventListener("click", function(){ state.sessions = null; loadErrors(); });
  $("dailyRefresh").addEventListener("click", loadDaily);
  (function(){
    var btn = $("dailyRollup"); if(!btn) return;
    btn.addEventListener("click", function(){
      var msg = $("dailyRollupMsg");
      btn.disabled = true; if(msg) msg.textContent = "rolling up…";
      postJSON("/admin/visitors/rollup-now", {}).then(function(d){
        if(msg) msg.textContent = "done · " + ((d && d.page_daily_rows != null) ? fmtN(d.page_daily_rows) + " page-day rows saved" : "saved");
        state.daily = null; loadDaily();
      }).catch(function(){
        if(msg) msg.textContent = "could not roll up — try again";
      }).then(function(){
        btn.disabled = false; setTimeout(function(){ if(msg) msg.textContent = ""; }, 6000);
      });
    });
  })();
  document.addEventListener("click", function(e){
    var t = e.target.closest(".exp-btn");
    if(t){ var m = t.nextElementSibling, was = !m.hidden; closeMenus(); m.hidden = was; t.setAttribute("aria-expanded", String(!was)); expOpener = t; return; }
    var x = e.target.closest(".exp-menu [data-fmt]");
    if(x){ closeMenus(); openExport(x.dataset.kind, x.dataset.fmt); return; }
    if(!e.target.closest(".export")) closeMenus();
  });
  $("expClose").addEventListener("click", closeExport);
  $("expOverlay").addEventListener("click", function(e){ if(e.target === this) closeExport(); });
  document.addEventListener("keydown", function(e){ if(e.key === "Escape"){ if(!$("expOverlay").hidden) closeExport(); else closeMenus(); } });
  // page report: period, refresh, row expand
  Array.prototype.forEach.call(document.querySelectorAll("[data-pdays]"), function(b){ b.addEventListener("click", function(){
    state.pagesDays = +this.dataset.pdays; state.pages = null; state.pageOpen = null;
    Array.prototype.forEach.call(document.querySelectorAll("[data-pdays]"), function(x){ x.setAttribute("aria-pressed", String(x===b)); });
    drawPages(); loadPages();
  }); });
  $("pagesRefresh").addEventListener("click", loadPages);
  // page analysis: period, refresh
  Array.prototype.forEach.call(document.querySelectorAll("[data-ddays]"), function(b){ b.addEventListener("click", function(){
    state.deepDays = +this.dataset.ddays; state.deep = null;
    Array.prototype.forEach.call(document.querySelectorAll("[data-ddays]"), function(x){ x.setAttribute("aria-pressed", String(x===b)); });
    drawDeep(); loadDeep();
  }); });
  $("deepRefresh").addEventListener("click", loadDeep);
  // events: period, refresh
  Array.prototype.forEach.call(document.querySelectorAll("[data-edays]"), function(b){ b.addEventListener("click", function(){
    state.evDays = +this.dataset.edays; state.events = null;
    Array.prototype.forEach.call(document.querySelectorAll("[data-edays]"), function(x){ x.setAttribute("aria-pressed", String(x===b)); });
    drawEvents(); loadEvents();
  }); });
  $("evRefresh").addEventListener("click", loadEvents);
  // page deep-dive: picker, presets, custom range, compare
  var rpSearch = $("rpSearch");
  rpSearch.addEventListener("input", function(){ if(state.rp.pages) rpDrawList(this.value); });
  rpSearch.addEventListener("focus", function(){ if(state.rp.pages){ this.select(); rpDrawList(""); } });
  rpSearch.addEventListener("keydown", function(e){
    var opts = Array.prototype.slice.call($("rpList").querySelectorAll(".pickrow")), cur = opts.findIndex(function(o){ return o.classList.contains("hi"); });
    if(e.key === "ArrowDown" || e.key === "ArrowUp"){ e.preventDefault(); if(!opts.length) return; var n = e.key === "ArrowDown" ? Math.min(opts.length-1, cur+1) : Math.max(0, cur-1); opts.forEach(function(o,i){ o.classList.toggle("hi", i===n); }); opts[n].scrollIntoView({block:"nearest"}); this.setAttribute("aria-activedescendant", opts[n].id); }
    else if(e.key === "Enter"){ e.preventDefault(); var pick = cur >= 0 ? opts[cur] : opts[0]; if(pick) rpPick(pick.dataset.url); }
    else if(e.key === "Escape"){ rpCloseList(); this.value = state.rp.url || ""; }
  });
  $("rpList").addEventListener("mousedown", function(e){ var o = e.target.closest(".pickrow"); if(o){ e.preventDefault(); rpPick(o.dataset.url); } });
  document.addEventListener("click", function(e){ if(!e.target.closest(".pickwrap")) rpCloseList(); });
  Array.prototype.forEach.call(document.querySelectorAll("[data-rp]"), function(b){ b.addEventListener("click", function(){ rpApplyPreset(this.dataset.rp); }); });
  $("rpApply").addEventListener("click", function(){
    var f = $("rpFrom").value, t = $("rpTo").value; if(!f || !t) return;
    if(f > t){ var s = f; f = t; t = s; }
    state.rp.preset = "custom"; state.rp.from = f; state.rp.to = t;
    Array.prototype.forEach.call(document.querySelectorAll("[data-rp]"), function(x){ x.setAttribute("aria-pressed", "false"); });
    rpLoad();
  });
  $("rpCompare").addEventListener("change", function(){ state.rp.compare = this.checked; rpLoad(); });
  $("pagesTable").addEventListener("click", function(e){ if(e.target.closest(".sort")) return; var tr = e.target.closest("tr.row"); if(!tr) return; state.pageOpen = state.pageOpen === tr.dataset.path ? null : tr.dataset.path; drawPages(); var again = this.querySelector('tr[data-path="'+tr.dataset.path+'"]'); if(again) again.focus({preventScroll:true}); });
  $("pagesTable").addEventListener("keydown", function(e){
    var rows = Array.prototype.slice.call(this.querySelectorAll("tr.row")), cur = rows.indexOf(document.activeElement); if(cur < 0) return;
    if(e.key==="Enter" || e.key===" "){ e.preventDefault(); rows[cur].click(); }
    else if(e.key==="ArrowDown"){ e.preventDefault(); rows[Math.min(rows.length-1, cur+1)].focus(); }
    else if(e.key==="ArrowUp"){ e.preventDefault(); rows[Math.max(0, cur-1)].focus(); }
  });

  function setBots(v){ state.showBots = v; $("botToggle").checked = v; $("botToggle2").checked = v; drawLive(); if(state.screen === "recent" || state.sessions){ state.errRows = null; loadSessions(); } }
  $("botToggle").addEventListener("change", function(){ setBots(this.checked); });
  $("botToggle2").addEventListener("change", function(){ setBots(this.checked); });
  $("recentRefresh").addEventListener("click", loadSessions);

  $("playToggle").addEventListener("click", function(){
    state.playing = !state.playing;
    this.setAttribute("aria-pressed", String(state.playing));
    this.textContent = state.playing ? "Pause" : "Resume";
    if(state.playing) startPolling(); else stopPolling();
    drawBar();
  });

  /* =====================================================================
     BOOT
     ===================================================================== */
  drawLive(); drawBar();
  startPolling();
})();
</script>
</body>
</html>
