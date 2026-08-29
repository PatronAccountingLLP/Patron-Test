{{--
  Zoho Bigin lead form — REMOVED 2026-08-29. Renders a placeholder box.

  The <form>, its Bigin hidden fields, the country dropdown, the phone / city /
  service inputs and the submit button are all gone. Nothing posts to Zoho.

  Call sites are UNCHANGED and still pass their old arguments:

      @include('partials.lead-form', [
          'deal' => '...', 'city' => '...', 'cta' => '...', 'options' => [...],
      ])

  Those arguments are accepted and ignored, so the ~1,787 pages that include
  this partial keep working without edits. The page still supplies its own
  .form-card wrapper, so hero layout and spacing are intact.

  enquiry-form-scripts is still included: it now ships only the stylesheet, so
  the page's .form-card keeps its styling. Both <script> tags were removed.
--}}
{{-- Kept so the site-wide enquiry band still stands down on these pages. --}}
@php
    config(['pa.enquiry_form_rendered' => true]);
@endphp
@include('partials.form-placeholder', [
    'phTitle' => 'Form placeholder',
    'phNote'  => 'The consultation form has been removed from this page.',
])

@include('partials.enquiry-form-scripts')
