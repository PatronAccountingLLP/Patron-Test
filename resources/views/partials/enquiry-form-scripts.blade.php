{{--
    Was: the shared JS for the Bigin consultation form (208810000001209168).

    2026-08-29 — both <script> tags were removed with the forms:

      js/enquiry-form.js  our own country dropdown + field validation. It only
                          ever drove the Bigin form, so it has nothing to bind
                          to now.
      wf_script           Zoho's WebformScriptServlet loader. This was the last
                          thing on the site reaching bigin.zoho.in.

    The stylesheet stays. css/enquiry-form.css styles the .form-card that pages
    still render around the placeholder, so dropping it would visibly break
    ~1,900 hero layouts. js/enquiry-form.js is left on disk, just not loaded.
--}}
@once
@push('styles')
<link href="{{ asset('css/enquiry-form.css') }}?v={{ @filemtime(base_path('css/enquiry-form.css')) ?: '1' }}" rel="stylesheet">
@endpush
@endonce
