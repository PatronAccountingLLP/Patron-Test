{{--
    Zoho SalesIQ (Zobot) live chat — shared across EVERY page via partials/footer.blade.php.

    DEFAULT appearance: we use Zoho's own launcher button and chat window as-is — no custom
    button, no forced window size, no launcher hiding. Any look/position changes are made in
    the Zoho SalesIQ console.

    This file only (a) embeds the widget and (b) pushes a token-safe `service_interest` on
    service pages so the Zobot can branch to its Service Greet fast-path
    (IF %visitor.service_interest% is not empty → Service Greet, ELSE → normal flow). The
    homepage leaves it unset. Flow + Bigin lead hand-off are configured in the Zoho console.
    A page may override the auto-derived label with:
        <script>window.PATRON_CHAT_CONTEXT = { service: '80G Registration' };</script>
--}}

{{-- Zoho SalesIQ embed --}}
<script>window.$zoho=window.$zoho || {};$zoho.salesiq=$zoho.salesiq||{ready:function(){}}</script>
<script id="zsiqscript" src="https://salesiq.zohopublic.in/widget?wc=siq4648268b2d3ff1c3f599eaf84492e5a9eb084e744a0b5499ec0d58071df1403f" defer></script>

{{-- Align the Zoho launcher to the same right edge as the WhatsApp float (24px / 16px),
     so the two icons line up vertically. Bottom is left at Zoho's default (stays below). --}}
<style>
#zsiq_float, .zsiq_floatmain, .zsiq_float, [id^="zsiq_float"]{ right:24px !important; }
@media(max-width:520px){
    #zsiq_float, .zsiq_floatmain, .zsiq_float, [id^="zsiq_float"]{ right:16px !important; }
}
</style>

<script>
(function () {
    window.$zoho = window.$zoho || {};
    $zoho.salesiq = $zoho.salesiq || {};

    // Page-aware: push a token-safe `service_interest` on service pages only (homepage skips),
    // so the Zobot can branch to its Service Greet fast-path. Read as %visitor.service_interest%.
    function pushContext() {
        var override = window.PATRON_CHAT_CONTEXT || {};
        var slug = (location.pathname || '').replace(/\/+$/, '').split('/').pop() || '';
        slug = slug.replace(/\.(php|html?)$/i, '');                 // tolerate .php/.html slugs
        var isService = slug && ['home', 'index'].indexOf(slug) === -1;   // homepage => skip
        if (!isService) { return; }

        var label = override.service || slug
            .replace(/[-_]+/g, ' ')
            .replace(/\b\w/g, function (c) { return c.toUpperCase(); });

        try { $zoho.salesiq.visitor.info({ "service_interest": label }); } catch (e) {}
    }

    var prevReady = (typeof $zoho.salesiq.ready === 'function') ? $zoho.salesiq.ready : null;
    $zoho.salesiq.ready = function () {
        pushContext();
        if (prevReady) { try { prevReady(); } catch (e) {} }
    };
})();
</script>
