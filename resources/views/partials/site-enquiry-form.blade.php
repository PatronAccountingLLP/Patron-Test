{{--
    NOT CURRENTLY INCLUDED BY ANY LAYOUT.

    Decision 2026-08-27: the enquiry form goes only on pages that already had
    one. Injecting this band from the layouts put a form on ~300 pages that
    never carried one - the homepage, the 162 calculators, the 82 tool pages
    and the glossary index pages - which is not wanted.

    Kept because the mechanism is sound and re-enabling is one line: add
    @include('partials.site-enquiry-form') above @include('partials.footer') in
    layouts/app, app-blog and service-app. The pa.enquiry_form_rendered flag the
    three form partials set is still in place, so it will still stand down on
    pages that already have a form.
--}}
{{--
    Site-wide enquiry form band.

    This is the "pull it like the header and footer" copy: the layouts render it
    on every page, so a page needs no markup of its own to have an enquiry form.

    It stands down in two cases:

      1. The page already rendered a form. partials/lead-form, enquiry-form and
         faq-enquiry-form each set pa.enquiry_form_rendered while the page's
         @section is being captured, which happens before the layout body runs,
         so the flag is reliably set by the time this is reached. That keeps the
         ~1,900 pages with a hero form from showing a second one.

      2. The path is on the skip list below - the admin panel, the login screen,
         and the HSN / NIC / port-code directory, which is queued for retirement
         behind the retired_directory middleware. Drop those prefixes from $skip
         to switch the directory on.

    Error views opt out by setting the flag themselves; they are rendered
    through layouts.app like anything else and a callback form has no business
    on a 404.
--}}
@php
    $skip = [
        'hsn-code', 'hsn-code/*',
        'nic-code', 'nic-code/*',
        'port-code', 'port-code/*',
        'admin', 'admin/*',
        'login', 'login-panel-patron', 'register', 'password/*',
    ];
@endphp

@unless (config('pa.enquiry_form_rendered') || request()->is($skip))
<section class="site-enquiry" id="site-enquiry">
    <div class="site-enquiry__inner">
        <div class="site-enquiry__copy">
            <h2 class="site-enquiry__title">Talk to a CA before you file</h2>
            <p class="site-enquiry__lead">
                Tell us what you need and a chartered accountant from our team calls you back.
                No charge for the first conversation.
            </p>
            <ul class="site-enquiry__points">
                <li>ICAI-registered CAs and Company Secretaries</li>
                <li>Straight answer on scope and fees before any work starts</li>
                <li>Serving clients across India from our Pune office</li>
            </ul>
            <a class="site-enquiry__phone" href="tel:+919459456700">Prefer to call? +91 94594 56700</a>
        </div>
        <div class="site-enquiry__form">
            @include('partials.faq-enquiry-form', [
                'enquiryTitle' => 'Request a callback',
                'enquirySub'   => 'A CA from the team will call you back, usually the same working day.',
            ])
        </div>
    </div>
</section>
@endunless
