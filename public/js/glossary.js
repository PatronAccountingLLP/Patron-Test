/* ============================================================
   Patron Accounting — Glossary shared behaviours
   Deploy to public/js/glossary.js. Loaded once per glossary page
   with <script src="/js/glossary.js" defer></script>.
   (1) Sticky TOC scroll-spy — active pill tracks the section in view.
   (2) Unified expanded FAQ — auto "Collapse all / Expand all" +
       per-question toggle with aria-expanded kept in sync.
   Both guard for missing elements, so the file is safe on any page.
   ============================================================ */
(function () {
  function initTOC() {
    var pills = [].slice.call(document.querySelectorAll('.gl-toc .gl-pill'));
    if (!pills.length) return;
    var map = pills.map(function (p) {
      var id = (p.getAttribute('href') || '').replace('#', '');
      return { pill: p, el: document.getElementById(id) };
    }).filter(function (m) { return m.el; });
    function onScroll() {
      var line = 120, cur = map[0];
      for (var i = 0; i < map.length; i++) {
        if (map[i].el.getBoundingClientRect().top <= line) cur = map[i];
      }
      pills.forEach(function (p) { p.classList.remove('is-active'); });
      if (cur) cur.pill.classList.add('is-active');
    }
    var t;
    window.addEventListener('scroll', function () {
      if (t) return;
      t = requestAnimationFrame(function () { t = null; onScroll(); });
    }, { passive: true });
    onScroll();
  }

  function initFAQ() {
    var list = document.querySelector('.faq-expanded__list');
    if (!list) return;
    var items = list.querySelectorAll('.faq-expanded__item');
    if (!items.length) return;
    var A = Array.prototype;
    function aria(it) {
      var q = it.querySelector('.faq-expanded__q');
      if (q) q.setAttribute('aria-expanded', (!it.classList.contains('is-collapsed')).toString());
    }
    function allCollapsed() {
      return A.every.call(items, function (it) { return it.classList.contains('is-collapsed'); });
    }
    var btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'faq-expanded__toggle-all';
    function sync() { btn.textContent = allCollapsed() ? 'Expand all' : 'Collapse all'; }
    btn.addEventListener('click', function () {
      var collapse = !allCollapsed();
      A.forEach.call(items, function (it) { it.classList.toggle('is-collapsed', collapse); aria(it); });
      sync();
    });
    list.insertBefore(btn, list.firstChild);
    A.forEach.call(items, function (it) {
      var q = it.querySelector('.faq-expanded__q');
      if (!q) return;
      q.setAttribute('role', 'button');
      q.setAttribute('tabindex', '0');
      function toggle() { it.classList.toggle('is-collapsed'); aria(it); sync(); }
      q.addEventListener('click', toggle);
      q.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggle(); }
      });
      aria(it);
    });
    sync();
  }

  function init() { initTOC(); initFAQ(); }
  if (document.readyState !== 'loading') init();
  else document.addEventListener('DOMContentLoaded', init);
})();

/* ---- Glossary HUB: live search + category filter (no-ops off the hub) ---- */
(function () {
  function init() {
    var search = document.getElementById('glh2-search');
    var pills = [].slice.call(document.querySelectorAll('.glh2-fpill'));
    var groups = [].slice.call(document.querySelectorAll('.glh2-group'));
    if (!groups.length) return;
    var cat = 'all';
    function apply() {
      var q = (search ? search.value : '').trim().toLowerCase();
      var totalShown = 0;
      groups.forEach(function (g) {
        var gk = g.getAttribute('data-group');
        var shown = 0;
        [].forEach.call(g.querySelectorAll('.glh2-card'), function (c) {
          var okCat = (cat === 'all' || cat === gk);
          var okQ = !q || c.getAttribute('data-term').indexOf(q) > -1;
          var show = okCat && okQ;
          c.style.display = show ? '' : 'none';
          if (show) shown++;
        });
        g.style.display = shown ? '' : 'none';
        var live = g.querySelector('.glh2-livecount');
        if (live) live.textContent = shown;
        totalShown += shown;
      });
      var nr = document.getElementById('glh2-noresults');
      if (nr) nr.style.display = totalShown ? 'none' : '';
    }
    if (search) search.addEventListener('input', apply);
    pills.forEach(function (p) {
      p.addEventListener('click', function () {
        cat = p.getAttribute('data-cat');
        pills.forEach(function (x) { x.classList.remove('is-active'); });
        p.classList.add('is-active');
        apply();
      });
    });
  }
  if (document.readyState !== 'loading') init();
  else document.addEventListener('DOMContentLoaded', init);
})();

/* ---- Rotating hero CTA (term pages): 5 CTAs, ~7s cycle, pause on hover ---- */
(function () {
  function init() {
    var wraps = [].slice.call(document.querySelectorAll('[data-rotate]'));
    wraps.forEach(function (w) {
      var slides = [].slice.call(w.querySelectorAll('.gl-rotcta__slide'));
      var dots = [].slice.call(w.querySelectorAll('.gl-rotcta__dot'));
      if (slides.length < 2) return;
      var i = 0, timer = null;
      function show(n) {
        i = (n + slides.length) % slides.length;
        slides.forEach(function (s, k) { s.classList.toggle('is-active', k === i); });
        dots.forEach(function (d, k) { d.classList.toggle('is-active', k === i); });
      }
      function start() { stop(); timer = setInterval(function () { show(i + 1); }, 7000); }
      function stop() { if (timer) { clearInterval(timer); timer = null; } }
      dots.forEach(function (d, k) { d.addEventListener('click', function () { show(k); start(); }); });
      w.addEventListener('mouseenter', stop);
      w.addEventListener('mouseleave', start);
      show(0); start();
    });
  }
  if (document.readyState !== 'loading') init();
  else document.addEventListener('DOMContentLoaded', init);
})();
