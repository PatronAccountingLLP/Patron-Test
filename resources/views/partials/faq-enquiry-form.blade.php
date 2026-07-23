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
@once
@push('styles')
<style>
/* ============================================================
   Patron Accounting — Unified Expanded FAQ (two-column)
   ------------------------------------------------------------
   Inlined copy of /css/faq.css so the FAQ + enquiry form always
   render correctly even if the external stylesheet is cached
   stale or fails to load. Keep in sync with public/css/faq.css.
   Pushed to the layout's <head> styles stack (NOT rendered inside
   the FAQ aside) so it never adds a stray box to the section.
   ============================================================ */

.faq-expanded {
    max-width: 1320px;       /* full site content width */
    margin: 0 auto;
    display: grid;
    grid-template-columns: minmax(260px, 340px) minmax(0, 1fr);
    gap: 48px;
    align-items: start;
}

/* Let the two-column grid use full width even inside a narrow text column. */
.text-content:has(.faq-expanded),
.column-content:has(.faq-expanded) {
    max-width: none;
}

/* Clear the fixed navbar + sticky TOC bar when the FAQ is reached via its
   anchor (e.g. the "FAQs" pill in the table-of-contents). ID selector so it
   wins over the per-page `.content-section[id]` scroll-margin rule. */
#faq-section {
    scroll-margin-top: 190px;
}

/* ---------- Left column ---------- */
/* Sticky, but offset so it clears the fixed navbar (~100px) AND the sticky
   TOC bar (~80px) instead of pinning behind them. Tunable per template via
   the --faq-aside-top variable if a page's nav stack is a different height. */
.faq-expanded__aside {
    position: sticky;
    top: var(--faq-aside-top, 180px);
    align-self: start;
}

.faq-expanded__title {
    font-size: clamp(26px, 2.4vw, 34px);
    font-weight: 800;
    color: #0F2C5C;          /* Patron navy */
    text-align: left;
    line-height: 1.2;
    margin: 0 0 16px;
}

.faq-expanded__lead {
    font-size: 16px;
    font-weight: 400;
    color: #4B5563;
    line-height: 1.6;
    margin: 0 0 22px;
}

.faq-expanded__cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #E8712C;          /* Patron orange */
    text-decoration: none;
}

.faq-expanded__cta:hover {
    text-decoration: underline;
}

/* ---------- Compact enquiry form (left column) ---------- */
.faq-enquiry {
    margin-top: 24px;
    background: #FFFFFF;
    border: 1px solid #E5E7EB;
    border-radius: 12px;
    padding: 18px 18px 20px;
    box-shadow: 0 2px 10px rgba(15, 44, 92, 0.06);
}

.faq-enquiry__title {
    font-size: 16px;
    font-weight: 700;
    color: #0F2C5C;
    margin: 0 0 4px;
}

.faq-enquiry__sub {
    font-size: 13px;
    color: #6B7280;
    line-height: 1.5;
    margin: 0 0 14px;
}

.faq-enquiry__input {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 10px;
    font-family: inherit;
    font-size: 14px;
    color: #1F2937;
    background: #F9FAFB;
    border: 1px solid #E5E7EB;
    border-radius: 8px;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
}

.faq-enquiry__input::placeholder { color: #9CA3AF; }

.faq-enquiry__input:focus {
    outline: none;
    background: #FFFFFF;
    border-color: #E8712C;
    box-shadow: 0 0 0 3px rgba(232, 113, 44, 0.12);
}

.faq-enquiry__btn {
    width: 100%;
    padding: 11px 16px;
    margin-top: 2px;
    font-family: inherit;
    font-size: 15px;
    font-weight: 700;
    color: #FFFFFF;
    background: #E8712C;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.2s, transform 0.15s;
}

.faq-enquiry__btn:hover { background: #D4621F; }
.faq-enquiry__btn:active { transform: translateY(1px); }
.faq-enquiry__btn:disabled { opacity: 0.6; cursor: not-allowed; }

.faq-enquiry__msg { font-size: 13px; line-height: 1.5; margin: 10px 0 0; }
.faq-enquiry__msg.is-success { color: #0F9D58; }
.faq-enquiry__msg.is-error { color: #DC2626; }

/* Phone field with +91 prefix */
.faq-enquiry__phone {
    display: flex;
    align-items: stretch;
    margin-bottom: 10px;
}

.faq-enquiry__cc {
    display: inline-flex;
    align-items: center;
    padding: 0 12px;
    font-size: 14px;
    font-weight: 600;
    color: #374151;
    background: #F3F4F6;
    border: 1px solid #E5E7EB;
    border-right: none;
    border-radius: 8px 0 0 8px;
}

.faq-enquiry__input--phone {
    margin-bottom: 0;
    border-radius: 0 8px 8px 0;
}

/* Current-service context line (replaces the service picker) */
.faq-enquiry__context {
    font-size: 12.5px;
    color: #6B7280;
    margin: 0 0 12px;
}
.faq-enquiry__context strong { color: #0F2C5C; font-weight: 600; }

/* Trust badges */
.faq-enquiry__badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px 14px;
    margin-top: 12px;
}

.faq-enquiry__badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 11.5px;
    font-weight: 600;
    color: #6B7280;
}

.faq-enquiry__badge svg {
    width: 13px;
    height: 13px;
    color: #0F9D58;
}

/* ---------- Right column ---------- */
.faq-expanded__list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    min-width: 0;            /* allow text to wrap inside the grid track */
}

.faq-expanded__item {
    background: #FFFFFF;
    border: 1px solid #E5E7EB;
    border-radius: 12px;
    padding: 20px 24px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
}

.faq-expanded__q {
    font-size: 18px;
    font-weight: 600;
    color: #0F2C5C;
    line-height: 1.4;
    margin: 0 0 10px;
}

.faq-expanded__a {
    font-size: 16px;
    font-weight: 400;
    color: #374151;
    line-height: 1.65;
    margin: 0;
}

.faq-expanded__a p { margin: 0 0 12px; }
.faq-expanded__a p:last-child { margin-bottom: 0; }
.faq-expanded__a a { color: #E8712C; text-decoration: none; }
.faq-expanded__a a:hover { text-decoration: underline; }

/* ---------- Expand / collapse (expanded by default; orange + <-> X) ---------- */
.faq-expanded__q {
    cursor: pointer;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 14px;
    -webkit-tap-highlight-color: transparent;
}

.faq-expanded__q::after {
    content: '';
    flex: 0 0 20px;
    width: 20px;
    height: 20px;
    margin-top: 2px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23E8712C' stroke-width='2.5' stroke-linecap='round'%3E%3Cpath d='M12 5v14M5 12h14'/%3E%3C/svg%3E") no-repeat center / contain;
    transition: transform 0.3s ease;
    transform: rotate(45deg);   /* expanded (default) = X (a + rotated 45deg) */
}

.faq-expanded__item.is-collapsed .faq-expanded__q::after { transform: rotate(0deg); }   /* collapsed = + */
.faq-expanded__item.is-collapsed .faq-expanded__q { margin-bottom: 0; }
.faq-expanded__item.is-collapsed .faq-expanded__a { display: none; }

.faq-expanded__q:focus-visible {
    outline: 2px solid #E8712C;
    outline-offset: 3px;
    border-radius: 4px;
}

/* "Collapse all / Expand all" control (auto-inserted by faq-toggle.js) */
.faq-expanded__toggle-all {
    align-self: flex-end;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin: 0 2px 2px;
    padding: 7px 14px;
    font-family: inherit;
    font-size: 13px;
    font-weight: 600;
    color: #E8712C;
    background: #FEF4EE;
    border: 1px solid #F4D7C6;
    border-radius: 999px;
    cursor: pointer;
    transition: background 0.15s ease, border-color 0.15s ease;
}

.faq-expanded__toggle-all:hover {
    background: #FCE7DA;
    border-color: #E8712C;
}

.faq-expanded__toggle-all:focus-visible {
    outline: 2px solid #E8712C;
    outline-offset: 2px;
}

/* ---------- Stack on tablet / mobile ---------- */
@media (max-width: 900px) {
    /* Single column. Unwrap the aside (display:contents) so heading / lead /
       form become reorderable siblings of the list — this also stops the
       desktop-sticky aside from overlapping the scrolling list. */
    .faq-expanded {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .faq-expanded__aside { display: contents; }
    .faq-expanded__title { order: 1; }
    .faq-expanded__lead  { order: 2; margin-bottom: 0; }
    .faq-expanded__list  { order: 3; }
    /* Enquiry form: not sticky, moved to the BOTTOM (below the questions) */
    .faq-enquiry { order: 4; margin-top: 0; }
}

/* ---------- Mobile ---------- */
@media (max-width: 640px) {
    .faq-expanded__title { font-size: 24px; }
    .faq-expanded__item  { padding: 16px 18px; }
    .faq-expanded__q     { font-size: 16px; }
    .faq-expanded__a,
    .faq-expanded__a p   { font-size: 15px; }
}
</style>
@endpush
@endonce
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
