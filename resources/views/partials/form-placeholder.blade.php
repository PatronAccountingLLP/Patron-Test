{{--
    Stand-in shown wherever an enquiry form used to be.

    2026-08-29 — every enquiry form was taken off the site. That is all three
    lead paths, not just the Zoho ones:

      partials/lead-form          Zoho Bigin webform 208810000001209168
      partials/enquiry-form       the same Bigin webform, own .form-card wrapper
      partials/faq-enquiry-form   NOT Bigin — AJAX POST to the internal Laravel
                                  route frontend.company-registration
      partials/site-enquiry-form  band wrapper around faq-enquiry-form
      testForm                    legacy Bigin webform 208810000000579045

    Each of those now renders this box instead of a <form>. No page carries a
    form element and nothing posts anywhere — neither to Zoho nor to our own
    endpoint.

    Params (both optional):
      $phTitle  heading inside the box
      $phNote   supporting line

    To restore: git revert this commit. No page template was edited to remove a
    form, so the revert is contained to this folder plus the stray-tag cleanups.
--}}
@once
<style>
.form-placeholder{
    display:flex; flex-direction:column; align-items:center; justify-content:center;
    text-align:center; gap:6px;
    min-height:180px; padding:28px 20px;
    border:1px dashed #C9CDD4; border-radius:10px;
    background:#FAFBFC; color:#5B6472;
    font-family:inherit;
}
.form-placeholder__title{ margin:0; font-size:15px; font-weight:600; color:#3A424E; }
.form-placeholder__note{ margin:0; font-size:13px; line-height:1.5; max-width:34ch; }
</style>
@endonce
<div class="form-placeholder" role="note">
    <p class="form-placeholder__title">{{ $phTitle ?? 'Form placeholder' }}</p>
    <p class="form-placeholder__note">{{ $phNote ?? 'The enquiry form has been removed from this page.' }}</p>
</div>
