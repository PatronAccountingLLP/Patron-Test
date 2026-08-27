{{--
    Mini "hero-style" FAQ enquiry form — Patron Accounting
    ------------------------------------------------------------------
    A compact version of the hero consultation form for the FAQ left
    column. Submits via AJAX to the existing internal endpoint
    (route frontend.company-registration = POST /company-registration),
    which validates + emails admin & client.

    Endpoint requires: name, email, mobile (10 digits), location.
    Styling: /css/faq.css (.faq-enquiry*). Self-contained CSRF + JS.

    Optional params:
      $enquiryTitle     string  default 'Get a free callback'
      $enquirySub       string  default supporting line
      $enquiryLocation  string  prefill for the City field
      $enquiryService   string  the current page's service (sent as a hidden field)
--}}
{{-- Tell the layout a form is already on this page, so the site-wide band stands down. --}}
@php(config(['pa.enquiry_form_rendered' => true]))
{{-- Styles live in css/faq-enquiry-form.css, linked by the layouts.
     They used to be inlined here, which shipped 8.6 KB of identical CSS
     on every one of the 2,000+ pages that render this partial. --}}
<form class="faq-enquiry" action="{{ route('frontend.company-registration') }}" method="POST" novalidate>
    @csrf
    <p class="faq-enquiry__title">{{ $enquiryTitle ?? 'Get a free callback' }}</p>
    <p class="faq-enquiry__sub">{{ $enquirySub ?? 'Talk to a CA/CS expert today — no charge, no spam.' }}</p>
    @if(!empty($enquiryService))
        <p class="faq-enquiry__context">Enquiry about <strong>{{ $enquiryService }}</strong></p>
    @endif

    <input class="faq-enquiry__input" type="text" name="name" placeholder="Full name" autocomplete="name" required>

    <div class="faq-enquiry__phone">
        <span class="faq-enquiry__cc">+91</span>
        <input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="mobile" placeholder="10-digit mobile"
               inputmode="numeric" pattern="[0-9]{10}" maxlength="10" autocomplete="tel" required>
    </div>

    <input class="faq-enquiry__input" type="email" name="email" placeholder="Email address" autocomplete="email" required>
    <input class="faq-enquiry__input" type="text" name="location" placeholder="City" autocomplete="address-level2"
           value="{{ $enquiryLocation ?? '' }}" required>

    {{-- Current page's service is kept by default (no picker shown). --}}
    <input type="hidden" name="service" value="{{ $enquiryService ?? '' }}">

    <button class="faq-enquiry__btn" type="submit">Get Free Quote <span aria-hidden="true">&rarr;</span></button>

    <div class="faq-enquiry__badges">
        <span class="faq-enquiry__badge">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:13px;height:13px;flex-shrink:0;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            100% Secure
        </span>
        <span class="faq-enquiry__badge">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:13px;height:13px;flex-shrink:0;"><path d="M5 13l4 4L19 7"/></svg>
            No Spam
        </span>
        <span class="faq-enquiry__badge">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:13px;height:13px;flex-shrink:0;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Quick Reply
        </span>
    </div>

    <p class="faq-enquiry__msg" role="status" aria-live="polite"></p>
</form>

@once
<script>
(function () {
    if (window.__faqEnquiryBound) return;
    window.__faqEnquiryBound = true;
    document.addEventListener('submit', function (e) {
        var form = e.target.closest('.faq-enquiry');
        if (!form) return;
        e.preventDefault();

        var btn = form.querySelector('.faq-enquiry__btn');
        var msg = form.querySelector('.faq-enquiry__msg');
        var mobileField = form.querySelector('[name="mobile"]');
        var mobile = mobileField ? mobileField.value.trim() : '';

        if (!/^[0-9]{10}$/.test(mobile)) {
            msg.className = 'faq-enquiry__msg is-error';
            msg.textContent = 'Please enter a valid 10-digit mobile number.';
            if (mobileField) mobileField.focus();
            return;
        }

        var original = btn.innerHTML;
        btn.disabled = true;
        btn.textContent = 'Sending…';
        msg.className = 'faq-enquiry__msg';
        msg.textContent = '';

        fetch(form.action, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
            body: new FormData(form)
        })
        .then(function (r) { return r.json().then(function (d) { return { ok: r.ok, data: d }; }); })
        .then(function (res) {
            if (res.ok && res.data && res.data.success) {
                msg.className = 'faq-enquiry__msg is-success';
                msg.textContent = res.data.message || 'Thank you! Our team will contact you shortly.';
                form.reset();
            } else {
                var err = 'Something went wrong. Please try again.';
                if (res.data && res.data.errors) {
                    err = res.data.errors[Object.keys(res.data.errors)[0]][0];
                } else if (res.data && res.data.message) {
                    err = res.data.message;
                }
                msg.className = 'faq-enquiry__msg is-error';
                msg.textContent = err;
            }
        })
        .catch(function () {
            msg.className = 'faq-enquiry__msg is-error';
            msg.textContent = 'Network error. Please check your connection and try again.';
        })
        .finally(function () {
            btn.disabled = false;
            btn.innerHTML = original;
        });
    });
})();
</script>
@endonce
