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
