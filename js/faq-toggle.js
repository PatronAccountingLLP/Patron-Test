/* ============================================================
   Patron Accounting — Unified FAQ expand/collapse
   ------------------------------------------------------------
   - Every item is EXPANDED BY DEFAULT; click a question (or
     Enter/Space) to collapse/expand it. Orange "+" rotates 45deg
     into an "x" when open.
   - A single "Collapse all / Expand all" button is auto-inserted
     into each FAQ block (no per-page markup needed) and toggles
     every item in one click.
   Keyed off the .faq-expanded* class contract.
   ============================================================ */
(function () {
    function items(container) {
        return container.querySelectorAll('.faq-expanded__item');
    }
    function anyOpen(container) {
        var it = items(container);
        for (var i = 0; i < it.length; i++) {
            if (!it[i].classList.contains('is-collapsed')) return true;
        }
        return false;
    }
    function setQ(q, collapsed) {
        if (q) q.setAttribute('aria-expanded', collapsed ? 'false' : 'true');
    }
    function syncBtn(container) {
        var btn = container.querySelector('.faq-expanded__toggle-all');
        if (!btn) return;
        var open = anyOpen(container);
        btn.textContent = open ? 'Collapse all' : 'Expand all';
        btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    }
    function init() {
        var containers = document.querySelectorAll('.faq-expanded');
        for (var c = 0; c < containers.length; c++) {
            var container = containers[c];
            var qs = container.querySelectorAll('.faq-expanded__q');
            for (var i = 0; i < qs.length; i++) {
                var q = qs[i];
                if (!q.dataset.faqInit) {
                    q.dataset.faqInit = '1';
                    q.setAttribute('role', 'button');
                    q.setAttribute('tabindex', '0');
                    q.setAttribute('aria-expanded', 'true');
                }
            }
            var list = container.querySelector('.faq-expanded__list');
            if (list && items(container).length > 1 && !container.querySelector('.faq-expanded__toggle-all')) {
                var btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'faq-expanded__toggle-all';
                btn.textContent = 'Collapse all';
                btn.setAttribute('aria-label', 'Expand or collapse all questions');
                list.insertBefore(btn, list.firstChild);
            }
        }
    }
    function toggleItem(q) {
        var item = q.closest('.faq-expanded__item');
        if (!item) return;
        var collapsed = item.classList.toggle('is-collapsed');
        setQ(q, collapsed);
        var container = item.closest('.faq-expanded');
        if (container) syncBtn(container);
    }
    function toggleAll(btn) {
        var container = btn.closest('.faq-expanded');
        if (!container) return;
        var collapseAll = anyOpen(container);   // if anything is open -> collapse everything
        var it = items(container);
        for (var i = 0; i < it.length; i++) {
            it[i].classList.toggle('is-collapsed', collapseAll);
            setQ(it[i].querySelector('.faq-expanded__q'), collapseAll);
        }
        syncBtn(container);
    }
    document.addEventListener('click', function (e) {
        var btn = e.target.closest('.faq-expanded__toggle-all');
        if (btn) { toggleAll(btn); return; }
        var q = e.target.closest('.faq-expanded__q');
        if (q) toggleItem(q);
    });
    document.addEventListener('keydown', function (e) {
        if (e.key !== 'Enter' && e.key !== ' ' && e.key !== 'Spacebar') return;
        var q = e.target.closest('.faq-expanded__q');
        if (q) { e.preventDefault(); toggleItem(q); }
    });
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
