{{--
  Compatibility shim. The real form is partials/bigin-form.

  178 pages call this with 'options' + 'selected', and one with
  'serviceSlug' / 'serviceLabel'. bigin-form understands all of those shapes and
  resolves the page's service from them, so the old canonical-list fallback that
  used to live here is no longer needed.

  New pages should include partials.bigin-form directly.
--}}
@include('partials.bigin-form', [
    'options'      => $options      ?? null,
    'selected'     => $selected     ?? null,
    'serviceSlug'  => $serviceSlug  ?? null,
    'serviceLabel' => $serviceLabel ?? null,
])
