{{--
    Mini FAQ enquiry form — REMOVED 2026-08-29. Renders a placeholder box.

    NOTE this one was never a Bigin form. It AJAX-POSTed to the internal Laravel
    route frontend.company-registration (POST /company-registration), which
    validated name/email/mobile/location and emailed both admin and client. It
    is removed anyway, on instruction, so that no page carries any form.

    The route and its controller are untouched and still exist — only this
    caller was removed.

    Call sites are UNCHANGED and still pass their old arguments; they are
    accepted and ignored, so the 2,144 pages including this partial — directly
    or through partials/faq-section — keep working without edits.

    The .faq-enquiry wrapper class is kept so the FAQ left column keeps the
    width and spacing css/faq-enquiry-form.css gives it.
--}}
{{-- Kept so the site-wide enquiry band still stands down on these pages. --}}
@php
    config(['pa.enquiry_form_rendered' => true]);
@endphp
<div class="faq-enquiry">
    @include('partials.form-placeholder', [
        'phTitle' => 'Form placeholder',
        'phNote'  => 'The callback form has been removed from this page.',
    ])
</div>
