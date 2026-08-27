{{--
    Shared logic for the Bigin consultation form (id 208810000001209168).

    Included by BOTH form partials — partials/lead-form (page supplies its own
    .form-card wrapper) and partials/enquiry-form (partial supplies the wrapper) —
    so a page gets exactly one copy of the JS no matter which one it uses.

    @once lives HERE, in a single call site, rather than in each partial: two
    separate @once blocks are two different keys and would both fire on a page
    that somehow rendered both forms, emitting a duplicate id='wf_script'.

    The file is served from the web root. On production the document root IS the
    repo root, so /js/enquiry-form.js resolves; public/js/enquiry-form.js is a
    mirror kept only so `php artisan serve` (root = public/) can find it locally.
--}}
@once
@push('styles')
<link href="{{ asset('css/enquiry-form.css') }}?v={{ @filemtime(base_path('css/enquiry-form.css')) ?: '1' }}" rel="stylesheet">
@endpush
<script src="{{ asset('js/enquiry-form.js') }}?v={{ @filemtime(base_path('js/enquiry-form.js')) ?: '1' }}" defer></script>
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>
@endonce
