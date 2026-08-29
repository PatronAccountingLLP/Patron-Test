{{--
  Compatibility shim. The real form is partials/bigin-form, compact variant.

  2,144 pages call this. Most pass 'enquiryService' and 'enquiryLocation'; 704
  pass no service at all. bigin-form maps these across and, where the service is
  missing, picks up the one an earlier form on the same page already resolved
  (701 pages) or derives it from the URL (the remaining 3).

  This slot used to POST to the internal route frontend.company-registration and
  email the team. It now goes to Zoho Bigin like every other form on the site, so
  all leads land in one pipeline. That route and its controller still exist and
  are simply no longer called from here.

  New pages should include partials.bigin-form with 'variant' => 'compact'.
--}}
{{-- Forwarded as 'enquiryService', NOT as 'service': 'service' is the deliberate
     per-call override and outranks the page-level value, which would stop the
     hero form's service from carrying down to this one. --}}
@include('partials.bigin-form', [
    'variant'         => 'compact',
    'enquiryService'  => $enquiryService  ?? null,
    'city'            => $enquiryLocation ?? null,
    'title'           => $enquiryTitle    ?? 'Get a free callback',
    'subtitle'        => $enquirySub      ?? 'Talk to a CA/CS expert today - no charge, no spam.',
])
