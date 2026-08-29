{{--
  Compatibility shim. The real form is partials/bigin-form.

  1,787 pages call this with 'deal' plus an 'options' list, and some with 'city'
  and 'cta'. Rather than edit all of them, the parameters are forwarded:
  bigin-form reads 'deal' and the selected 'options' row to work out the page's
  service, so every lead is still tagged with the service of its page.

  Forwarded explicitly rather than with get_defined_vars(), which would also
  hand over Blade's own __env / app / errors and let them shadow the real ones.

  New pages should include partials.bigin-form directly.
--}}
@include('partials.bigin-form', [
    'deal'     => $deal     ?? null,
    'city'     => $city     ?? null,
    'cta'      => $cta      ?? null,
    'options'  => $options  ?? null,
    'selected' => $selected ?? null,
])
