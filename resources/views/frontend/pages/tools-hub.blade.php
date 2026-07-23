@extends('layouts.service-app')

@section('meta')
    <title>Free Tools and Calculators 2026 | Patron Accounting</title>
    <meta name="description" content="157 free finance, tax, GST, payroll and compliance calculators by Patron Accounting LLP. Income tax, GST, ESOP, ROC, audit and net worth tools in one hub.">
    <link rel="canonical" href="/tools">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Free Tools and Calculators 2026 | Patron Accounting">
    <meta property="og:description" content="157 free finance, tax, GST, payroll and compliance calculators by Patron Accounting LLP, all in one hub.">
    <meta property="og:url" content="/tools">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Free Tools and Calculators 2026 | Patron Accounting">
    <meta name="twitter:description" content="157 free finance, tax, GST, payroll and compliance calculators by Patron Accounting LLP, all in one hub.">
@endsection

@section('schema')
@php
    // Data-driven structured data for the Tools Hub. The tool list is read from the
    // same public/tools-index.json the hub already ships with, so this ItemList stays
    // in sync automatically (currently 157 tools). JSON-LD requires ABSOLUTE URLs, so
    // production URLs are used here even though page markup elsewhere uses relative paths.
    $__siteBase   = 'https://www.patronaccounting.com';
    // Prefer resource_path (deploys with app code); fall back to public_path for local serve.
    $__toolsIndex = resource_path('data/tools-hub/tools-index.json');
    if (!is_file($__toolsIndex)) { $__toolsIndex = public_path('tools-index.json'); }
    $__tools      = [];
    if (is_file($__toolsIndex)) {
        $__decoded = json_decode(@file_get_contents($__toolsIndex), true);
        if (is_array($__decoded)) { $__tools = $__decoded; }
    }

    $__itemListElements = [];
    $__pos = 1;
    foreach ($__tools as $__t) {
        if (empty($__t['s'])) { continue; }
        $__itemListElements[] = [
            '@type'    => 'ListItem',
            'position' => $__pos++,
            'name'     => $__t['t'] ?? $__t['s'],
            'url'      => $__siteBase . '/tools/' . $__t['s'],
        ];
    }

    $__breadcrumb = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',       'item' => $__siteBase . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Free Tools', 'item' => $__siteBase . '/tools'],
        ],
    ];

    $__itemList = [
        '@context'        => 'https://schema.org',
        '@type'           => 'ItemList',
        'name'            => 'Free Finance, Tax, GST & Compliance Tools',
        'description'     => 'Free calculators, generators and checklists for Indian income tax, GST, ESOP, payroll, ROC, audit, net worth and finance — reviewed by Chartered Accountants at Patron Accounting LLP.',
        'url'             => $__siteBase . '/tools',
        'numberOfItems'   => count($__itemListElements),
        'itemListOrder'   => 'https://schema.org/ItemListUnordered',
        'itemListElement' => $__itemListElements,
    ];

    $__jsonFlags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
@endphp
    <script type="application/ld+json">{!! json_encode($__breadcrumb, $__jsonFlags) !!}</script>
    <script type="application/ld+json">{!! json_encode($__itemList, $__jsonFlags) !!}</script>
@endsection

@section('content')
<style>
    .pa-tools-embed-wrap { width: 100%; background: #F1F2F4; }
    /* Fixed to the viewport area below the site header so the hub owns one internal scroll. This lets
       its sidebar be position:sticky and scroll by its own height. JS keeps the height exact. */
    .pa-tools-embed { display: block; width: 100%; border: 0; height: calc(100vh - 118px); min-height: 560px; }
</style>
<div class="pa-tools-embed-wrap">
    <iframe id="paToolsHub" class="pa-tools-embed" src="/tools-hub/tools-hub.html" title="Patron Accounting Tools Hub" loading="eager"></iframe>
</div>
<script>
(function(){
    var f = document.getElementById('paToolsHub');
    if(!f) return;

    function hubWin(){ try{ return f.contentWindow; }catch(e){ return null; } }
    function hubDoc(){ try{ return f.contentDocument || f.contentWindow.document; }catch(e){ return null; } }
    function hubHash(){ try{ return (f.contentWindow.location.hash) || ''; }catch(e){ return ''; } }
    function headerH(){ var h = document.querySelector('.pa-h'); return (h && h.offsetHeight) ? h.offsetHeight : 118; }

    // Size the iframe to the area under the site header; the hub scrolls inside it.
    // Only write when the value actually changes, so the periodic re-apply never triggers a reflow/jump.
    function setH(){
        var v = Math.max(560, window.innerHeight - headerH()) + 'px';
        if(f.style.height !== v){ f.style.height = v; }
    }

    // Make the desktop sidebar sticky and self-scrolling (the hub ships it as a plain grid column).
    // Inside the iframe 100vh == the iframe height, so max-height makes a tall sidebar scroll on its own.
    function injectSidebarCSS(){
        var d = hubDoc(); if(!d || !d.head) return;
        if(d.getElementById('pa-sticky-aside')) return;
        var st = d.createElement('style');
        st.id = 'pa-sticky-aside';
        st.textContent = ''
            // thin glowing orange scrollbars (hub body + sidebar) to match the brand
            // hide ALL scrollbars INSIDE the hub (the browser/page scrollbar stays default)
            + '*{scrollbar-width:none !important;-ms-overflow-style:none !important;}'
            + '::-webkit-scrollbar{width:0 !important;height:0 !important;display:none !important;}'
            // sidebar "scroll for more" hint (minimal bouncing chevron + soft fade)
            + '.pa-scroll-more{position:sticky;bottom:0;left:0;right:0;display:flex;justify-content:center;align-items:flex-end;height:36px;margin-top:-36px;pointer-events:none;background:linear-gradient(to top,#fff 26%,rgba(255,255,255,0));z-index:5;transition:opacity .25s ease;}'
            + '.pa-scroll-more svg{width:18px;height:18px;color:#F0592A;margin-bottom:5px;animation:paBob 1.5s ease-in-out infinite;}'
            + '@keyframes paBob{0%,100%{transform:translateY(0)}50%{transform:translateY(3px)}}'
            + '.ph-aside.pa-atbottom .pa-scroll-more{opacity:0;}'
            // Tool iframe: stay invisible (override the bundle's fadeUp, which flashes the full
            // un-stripped page) until we've stripped the chrome + sized it, then fade in smoothly.
            + '#ph-tool-frame{opacity:0 !important;animation:none !important;transition:opacity .3s ease, height .35s ease !important;}'
            + '#ph-tool-frame.pa-tool-ready{opacity:1 !important;}'
            + '@media (min-width:821px){'
            + '.ph-layout{align-items:start !important;}'
            + '.ph-aside{position:sticky !important;top:12px !important;align-self:start !important;height:auto !important;max-height:calc(100vh - 24px) !important;overflow-y:auto !important;}'
            // hero promo slideshow: visible and sticky at the top
            + '.ph-banner{display:block !important;position:sticky !important;top:12px !important;z-index:20 !important;margin-bottom:18px !important;}'
            + '}';
        d.head.appendChild(st);
    }

    // Add a subtle "more below" chevron at the bottom of the sidebar when it overflows; hide it at the end.
    function updateHint(aside){
        var hint = aside.querySelector('.pa-scroll-more'); if(!hint) return;
        var scrollable = (aside.scrollHeight - aside.clientHeight) > 6;
        var atBottom = (aside.scrollTop + aside.clientHeight) >= (aside.scrollHeight - 6);
        hint.style.display = scrollable ? 'flex' : 'none';
        aside.classList.toggle('pa-atbottom', atBottom);
    }
    function ensureScrollHint(){
        var d = hubDoc(); if(!d) return;
        var aside = d.querySelector('.ph-aside'); if(!aside) return;
        if(!aside.querySelector('.pa-scroll-more')){
            var hint = d.createElement('div');
            hint.className = 'pa-scroll-more';
            hint.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>';
            aside.appendChild(hint);
            aside.addEventListener('scroll', function(){ updateHint(aside); });
        }
        updateHint(aside);
    }

    // On tool open, scroll inside the hub to the tool's top (and bring the hub under the site header).
    function hubScrollToTool(){
        var d = hubDoc(), w = hubWin(); if(!d || !w) return;
        var el = d.getElementById('ph-tool-frame'); if(!el) return;
        var top = el.getBoundingClientRect().top + (w.pageYOffset || 0);
        w.scrollTo({ top: Math.max(0, top - 12), behavior: 'auto' });
    }

    // Each tool is embedded (iframe#ph-tool-frame, srcdoc) as its FULL standalone page:
    // hero header, lead-CTA bar, TL;DR, a related-services sidebar, body CTAs and office strip.
    // In the hub we only want the interactive tool itself (.calc-card), so strip the rest.
    function injectToolStrip(){
        var d = hubDoc(); if(!d) return;
        var tf = d.getElementById('ph-tool-frame'); if(!tf) return;
        var td; try{ td = tf.contentDocument || tf.contentWindow.document; }catch(e){ return; }
        if(!td || !td.head || td.getElementById('pa-tool-strip')) return;
        var st = td.createElement('style');
        st.id = 'pa-tool-strip';
        st.textContent = ''
            // page chrome around the tool (siblings of the main layout)
            + '.hero,.brand-cta-bar,.tldr,.body-cta,.office-strip,.toc-nav{display:none !important;}'
            // hide the related-services / promo sidebar column, keep the content column
            + '.main-layout>*:not(.content-col){display:none !important;}'
            // inside the content column keep only the calculator card (drop FAQs/explainers)
            + '.content-col>*:not(.calc-card){display:none !important;}'
            // let the remaining tool span the full width
            + '.main-layout,.content-col{display:block !important;max-width:none !important;width:100% !important;margin:0 !important;grid-template-columns:none !important;}'
            + 'body{background:#fff !important;}';
        td.head.appendChild(st);
    }

    // Hide the tool frame instantly (called the moment a new tool starts opening) so the
    // un-stripped full page never flashes; injectToolStrip + fitAndRevealTool fade it back in.
    function hideToolFrame(){
        var d = hubDoc(); if(!d) return;
        var tf = d.getElementById('ph-tool-frame'); if(!tf) return;
        tf.classList.remove('pa-tool-ready');
    }

    // Once the chrome is stripped, size the frame to the tool (kills the 1500px whitespace)
    // and reveal it with the CSS fade. Safe to call repeatedly; only reveals when stripped.
    function fitAndRevealTool(){
        var d = hubDoc(); if(!d) return;
        var tf = d.getElementById('ph-tool-frame'); if(!tf) return;
        var td; try{ td = tf.contentDocument || tf.contentWindow.document; }catch(e){ return; }
        if(!td || !td.body || !td.getElementById('pa-tool-strip')) return;   // wait until stripped
        var hgt = 0;
        try{ hgt = Math.max(td.body.scrollHeight, td.documentElement ? td.documentElement.scrollHeight : 0); }catch(e){}
        if(hgt > 80){
            var want = (hgt + 24) + 'px';
            if(tf.style.height !== want && Math.abs(parseInt(tf.style.height || 0, 10) - (hgt + 24)) > 4){
                tf.style.height = want;   // only rewrite on a real change (avoids reflow jitter)
            }
        }
        tf.classList.add('pa-tool-ready');
    }

    // --- Hub search: recent-search "history" chips under the search box ---
    // The hub is a self-extracting SPA that mounts into <body> and re-renders, so element-bound
    // listeners get dropped and injected nodes wiped. We therefore DELEGATE all events on the hub
    // document (which persists) and re-create the chip row on demand. History is saved as the user
    // types (debounced) so it actually populates. All best-effort, wrapped in try/catch by boot().
    var PA_TQ_KEY = 'patronTools.searchHistory';
    function hubLS(){ try{ return hubWin().localStorage; }catch(e){ return null; } }
    function paGetTQ(){ var ls=hubLS(); if(!ls) return []; try{ return JSON.parse(ls.getItem(PA_TQ_KEY)||'[]'); }catch(e){ return []; } }
    function paSaveTQ(q){ q=(q||'').trim(); if(q.length<2) return; var ls=hubLS(); if(!ls) return; var a=paGetTQ().filter(function(x){ return x.toLowerCase()!==q.toLowerCase(); }); a.unshift(q); try{ ls.setItem(PA_TQ_KEY, JSON.stringify(a.slice(0,6))); }catch(e){} }
    // The hub renders TWO search inputs (a hidden desktop one + the visible responsive one);
    // always return the one that is actually visible on the current screen.
    function hubSearchInput(){
        var d=hubDoc(); if(!d) return null;
        var list=d.querySelectorAll('input[placeholder^="Search tools"]');
        for(var i=0;i<list.length;i++){ var el=list[i], r=el.getBoundingClientRect(); if(r.width>1 && r.height>1 && el.offsetParent!==null) return el; }
        return list[0]||null;
    }
    function isHubSearch(el){ return !!(el && el.matches && el.matches('input[placeholder^="Search tools"]')); }
    function setHubQuery(inp, val){
        try{
            var setter = Object.getOwnPropertyDescriptor(hubWin().HTMLInputElement.prototype, 'value').set;
            setter.call(inp, val);
        }catch(e){ inp.value = val; }
        try{ inp.dispatchEvent(new (hubWin().Event)('input',  {bubbles:true})); }catch(e){}
        try{ inp.dispatchEvent(new (hubWin().Event)('change', {bubbles:true})); }catch(e){}
    }
    function hideChips(){ var d=hubDoc(); if(!d) return; var b=d.getElementById('pa-tq-chips'); if(b) b.style.display='none'; try{ if(paGlueRAF){ hubWin().cancelAnimationFrame(paGlueRAF); paGlueRAF=0; } }catch(e){} }
    function renderChips(inp){
        var d=hubDoc(); if(!d || !inp || inp.value.trim()){ hideChips(); return; }
        var items = paGetTQ();
        var b = d.getElementById('pa-tq-chips');
        if(!b){
            b = d.createElement('div'); b.id='pa-tq-chips';
            // position:fixed → anchored to the iframe viewport, so it sits under the input on
            // every screen regardless of the hub's internal scroll container (mobile-safe).
            b.style.cssText = 'position:fixed;display:none;box-sizing:border-box;z-index:99999;flex-wrap:wrap;gap:7px;padding:10px 12px;background:#fff;border:1px solid #E2E3E8;border-radius:12px;box-shadow:0 10px 30px rgba(27,42,74,.14);';
            (d.body || d.documentElement).appendChild(b);
        }
        if(!items.length){ b.style.display='none'; return; }
        var html = '<span style="width:100%;font-size:11px;font-weight:700;color:#8A8F99;text-transform:uppercase;letter-spacing:.05em;margin-bottom:2px">Recent searches</span>';
        items.forEach(function(q){
            var esc = q.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
            html += '<button type="button" class="pa-tq-chip" data-q="'+esc+'" style="border:1px solid #E2E3E8;background:#F7F8FA;border-radius:999px;padding:6px 13px;font:inherit;font-size:13px;color:#1B2A4A;cursor:pointer;max-width:100%">&#8634;&nbsp; '+esc+'</button>';
        });
        b.innerHTML = html;
        try{ b.style.fontFamily = hubWin().getComputedStyle(inp).fontFamily; }catch(e){}  // match the hub's font
        b.style.display = 'flex';
        positionChips();           // place it now…
        startGlue();               // …and keep it glued under the input (scroll/keyboard/layout)
    }
    // Place the fixed chip row directly under the input, clamped to the viewport.
    function positionChips(){
        var d=hubDoc(); if(!d) return;
        var b=d.getElementById('pa-tq-chips'), inp=hubSearchInput();
        if(!b || b.style.display==='none' || !inp){ return; }
        var r=inp.getBoundingClientRect(), w=hubWin();
        var vh=(w.innerHeight||d.documentElement.clientHeight||844);
        if(inp.value.trim() || r.bottom<0 || r.top>vh){ hideChips(); return; }   // input gone/scrolled away
        var vw=(d.documentElement && d.documentElement.clientWidth) || w.innerWidth || 360;
        var margin=8;
        var boxW=Math.min(Math.max(r.width,240), vw-margin*2);
        var left=Math.min(Math.max(r.left,margin), vw-boxW-margin);
        b.style.width=boxW+'px';
        b.style.top=(r.bottom+8)+'px';   // fixed → viewport coords
        b.style.left=left+'px';
    }
    var paGlueRAF=0;
    function startGlue(){
        var w=hubWin(); if(!w || paGlueRAF) return;
        var step=function(){
            var d=hubDoc(), b=d&&d.getElementById('pa-tq-chips');
            if(!b || b.style.display==='none'){ paGlueRAF=0; return; }
            positionChips();
            paGlueRAF = w.requestAnimationFrame(step);
        };
        paGlueRAF = w.requestAnimationFrame(step);
    }
    // Wire ONCE via delegation on the hub document (survives the SPA's re-renders).
    function ensureSearchChips(){
        var d = hubDoc(); if(!d) return;
        if(!d.__paTqWired){
            d.__paTqWired = true;
            var saveT;
            d.addEventListener('focusin', function(e){ if(isHubSearch(e.target)) renderChips(e.target); });
            d.addEventListener('input', function(e){
                if(!isHubSearch(e.target)) return;
                var inp = e.target;
                if(inp.value.trim()){ hideChips(); clearTimeout(saveT); saveT=setTimeout(function(){ paSaveTQ(inp.value); }, 700); }
                else { renderChips(inp); }
            });
            d.addEventListener('focusout', function(e){ if(!isHubSearch(e.target)) return; var inp=e.target; if(inp.value.trim()) paSaveTQ(inp.value); setTimeout(hideChips, 200); });
            // keep the fixed chip row glued under the input while the hub scrolls
            var reflow = function(){ var bb=d.getElementById('pa-tq-chips'), ii=hubSearchInput(); if(bb && bb.style.display!=='none' && ii && !ii.value.trim()) renderChips(ii); };
            try{ hubWin().addEventListener('scroll', reflow, {passive:true}); }catch(e){}
            d.addEventListener('scroll', reflow, {passive:true, capture:true});
            // mousedown (not click) so the chip fires before the input blurs/hides the row
            d.addEventListener('mousedown', function(e){
                var c = e.target.closest && e.target.closest('.pa-tq-chip'); if(!c) return;
                e.preventDefault();
                var inp = hubSearchInput(); if(inp){ inp.focus(); setHubQuery(inp, c.getAttribute('data-q')); }
                hideChips();
            });
        }
        // keep an open row positioned as the SPA re-renders / page scrolls
        var b = d.getElementById('pa-tq-chips'), inp = hubSearchInput();
        if(b && b.style.display !== 'none' && inp && !inp.value.trim()) renderChips(inp);
    }

    function boot(){ try{ setH(); injectSidebarCSS(); ensureScrollHint(); injectToolStrip(); fitAndRevealTool(); ensureSearchChips(); }catch(e){} }

    // Run now (covers a cached iframe whose load already fired), on resize, on load with retries,
    // and on a gentle interval (re-applies if the hub re-rendered and dropped our style/hint).
    boot();
    window.addEventListener('resize', function(){ try{ setH(); ensureScrollHint(); ensureSearchChips(); }catch(e){} });
    document.addEventListener('DOMContentLoaded', boot);
    f.addEventListener('load', function(){
        boot();
        [100, 400, 900, 1600, 2500].forEach(function(t){ setTimeout(boot, t); });
    });
    setInterval(boot, 1500);

    // The hub updates its hash to #tool/<slug> via replaceState (fires no event), so poll it.
    var lastHash = hubHash();
    setInterval(function(){
        try{
            var h = hubHash();
            if(h === lastHash) return;
            lastHash = h;
            if(h.indexOf('#tool/') === 0){
                window.scrollTo({ top: 0, behavior: 'auto' });   // bring the hub fully under the site header
                hideToolFrame();                                 // hide instantly so the full page never flashes
                // strip chrome + size + fade in as the new tool iframe loads
                [0, 80, 200, 400, 700, 1100, 1600].forEach(function(t){
                    setTimeout(function(){ injectToolStrip(); fitAndRevealTool(); }, t);
                });
                setTimeout(hubScrollToTool, 250);
                setTimeout(hubScrollToTool, 800);
            }
        }catch(e){}
    }, 150);
})();
</script>
@endsection
