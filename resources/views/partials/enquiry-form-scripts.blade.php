{{--
    Scripts for the Bigin enquiry form. Included by partials/bigin-form, wrapped
    in @once so a page with two forms still gets one copy.

    The STYLESHEET is not here. css/enquiry-form.css is linked by the three
    layouts (app, app-blog, service-app) next to the header and footer, so it
    loads on every page rather than only the ones that render a form. Pushing it
    from here meant it had to travel up through @stack('styles') from inside a
    captured @section, which is fragile when the form is included from a nested
    partial. Adding it back here would link it twice.

    js/enquiry-form.js drives every <form data-bigin-form> on the page
    independently, so hero and FAQ instances do not collide. It stays scoped to
    pages that actually have a form: there is nothing for it to bind to
    elsewhere, and it is the heavier of the two files.

    wf_script is Zoho's own loader; it sets the zc_gad Google Ads click id on the
    form. The record is created from the POST body, so a lead is still captured
    correctly if this third-party script is blocked.

    Files are served from the web root; public/ mirrors exist so `php artisan
    serve` (root = public/) finds them locally.
--}}
@once
<script src="{{ asset('js/enquiry-form.js') }}?v={{ @filemtime(base_path('js/enquiry-form.js')) ?: '1' }}" defer></script>
<script id="wf_script" src="https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79"></script>
@endonce
