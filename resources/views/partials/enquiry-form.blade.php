{{--
    Shared Enquiry / "Get Free Consultation" form (Zoho Bigin 208810000001209168)
    — REMOVED 2026-08-29. Renders a placeholder box inside the same .form-card.

    Gone: the hidden Bigin iframe, the <form>, every Bigin hidden field, the
    country dropdown, all inputs, the service <select> and the submit button.

    Call sites are UNCHANGED and still pass their old arguments; they are
    accepted and ignored, so the 178 pages including this partial keep working.
    The .form-card wrapper and its header are kept so the hero right-hand column
    keeps its width, height and styling.

    The trust badges and the "we will get back to you" note were dropped with
    the form — they promise a reply to a submission that can no longer happen.
--}}
{{-- Kept so the site-wide enquiry band still stands down on these pages. --}}
@php
    config(['pa.enquiry_form_rendered' => true]);
@endphp

<div class="form-card" id="consultationFormCard">
    <div class="form-header">
        <h2 class="form-title">Get Free Consultation</h2>
        <p class="form-subtitle">Talk to a CA/CS expert today</p>
    </div>

    @include('partials.form-placeholder', [
        'phTitle' => 'Form placeholder',
        'phNote'  => 'The consultation form has been removed from this page.',
    ])
</div>

@include('partials.enquiry-form-scripts')
