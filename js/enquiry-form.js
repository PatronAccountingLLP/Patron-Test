/* Patron Accounting - Bigin enquiry form
 * ---------------------------------------------------------------------------
 * Drives every <form data-bigin-form> on the page (resources/views/partials/
 * bigin-form.blade.php). A service page renders two of them, hero + FAQ column,
 * so nothing here may touch document.getElementById for form internals: each
 * instance is wired from its own <form> element and keeps its state in a
 * closure. Adding a third form to a page needs no change here.
 *
 * What it does per instance:
 *   - builds the country-code dropdown (search, keyboard, outside-click close)
 *   - validates name / phone / city, with per-field inline errors
 *   - normalises the number and rewrites the Contacts.Mobile input to +CC form
 *   - stamps the full page URL into the hidden Contacts.Lead Source
 *   - swaps the card for a thank-you state when Zoho's iframe comes back
 *
 * NOTHING HERE IS LOAD-BEARING FOR LEAD CAPTURE, and it must stay that way.
 * Every field the CRM needs is a named input rendered server-side, so a blocked,
 * slow or broken script costs a country code - never a lead. This script only
 * improves what is already being posted. The phone input in particular used to
 * be nameless, with this file copying it into a hidden field on submit; that one
 * dependency was quietly losing enquiries whenever the script did not run.
 *
 * The service is NOT set here. It is rendered server-side into the hidden
 * "Potential Name" and "Contacts.Description" fields, so the lead is tagged
 * with the page's service even if this script never runs.
 */
(function () {
    'use strict';

    var COUNTRIES = [
        { name: 'India', code: '+91', flag: '🇮🇳', iso: 'IN' },
        { name: 'United States', code: '+1', flag: '🇺🇸', iso: 'US' },
        { name: 'United Kingdom', code: '+44', flag: '🇬🇧', iso: 'GB' },
        { name: 'United Arab Emirates', code: '+971', flag: '🇦🇪', iso: 'AE' },
        { name: 'Saudi Arabia', code: '+966', flag: '🇸🇦', iso: 'SA' },
        { name: 'Singapore', code: '+65', flag: '🇸🇬', iso: 'SG' },
        { name: 'Australia', code: '+61', flag: '🇦🇺', iso: 'AU' },
        { name: 'Canada', code: '+1', flag: '🇨🇦', iso: 'CA' },
        { name: 'Germany', code: '+49', flag: '🇩🇪', iso: 'DE' },
        { name: 'France', code: '+33', flag: '🇫🇷', iso: 'FR' },
        { name: 'Japan', code: '+81', flag: '🇯🇵', iso: 'JP' },
        { name: 'China', code: '+86', flag: '🇨🇳', iso: 'CN' },
        { name: 'South Korea', code: '+82', flag: '🇰🇷', iso: 'KR' },
        { name: 'Brazil', code: '+55', flag: '🇧🇷', iso: 'BR' },
        { name: 'South Africa', code: '+27', flag: '🇿🇦', iso: 'ZA' },
        { name: 'Nigeria', code: '+234', flag: '🇳🇬', iso: 'NG' },
        { name: 'Kenya', code: '+254', flag: '🇰🇪', iso: 'KE' },
        { name: 'Malaysia', code: '+60', flag: '🇲🇾', iso: 'MY' },
        { name: 'Indonesia', code: '+62', flag: '🇮🇩', iso: 'ID' },
        { name: 'Thailand', code: '+66', flag: '🇹🇭', iso: 'TH' },
        { name: 'Vietnam', code: '+84', flag: '🇻🇳', iso: 'VN' },
        { name: 'Philippines', code: '+63', flag: '🇵🇭', iso: 'PH' },
        { name: 'Bangladesh', code: '+880', flag: '🇧🇩', iso: 'BD' },
        { name: 'Pakistan', code: '+92', flag: '🇵🇰', iso: 'PK' },
        { name: 'Sri Lanka', code: '+94', flag: '🇱🇰', iso: 'LK' },
        { name: 'Nepal', code: '+977', flag: '🇳🇵', iso: 'NP' },
        { name: 'Qatar', code: '+974', flag: '🇶🇦', iso: 'QA' },
        { name: 'Kuwait', code: '+965', flag: '🇰🇼', iso: 'KW' },
        { name: 'Bahrain', code: '+973', flag: '🇧🇭', iso: 'BH' },
        { name: 'Oman', code: '+968', flag: '🇴🇲', iso: 'OM' },
        { name: 'New Zealand', code: '+64', flag: '🇳🇿', iso: 'NZ' },
        { name: 'Ireland', code: '+353', flag: '🇮🇪', iso: 'IE' },
        { name: 'Netherlands', code: '+31', flag: '🇳🇱', iso: 'NL' },
        { name: 'Italy', code: '+39', flag: '🇮🇹', iso: 'IT' },
        { name: 'Spain', code: '+34', flag: '🇪🇸', iso: 'ES' },
        { name: 'Switzerland', code: '+41', flag: '🇨🇭', iso: 'CH' },
        { name: 'Sweden', code: '+46', flag: '🇸🇪', iso: 'SE' },
        { name: 'Russia', code: '+7', flag: '🇷🇺', iso: 'RU' },
        { name: 'Mexico', code: '+52', flag: '🇲🇽', iso: 'MX' },
        { name: 'Egypt', code: '+20', flag: '🇪🇬', iso: 'EG' },
        { name: 'Turkey', code: '+90', flag: '🇹🇷', iso: 'TR' },
        { name: 'Israel', code: '+972', flag: '🇮🇱', iso: 'IL' },
        { name: 'Hong Kong', code: '+852', flag: '🇭🇰', iso: 'HK' },
        { name: 'Taiwan', code: '+886', flag: '🇹🇼', iso: 'TW' },
        { name: 'Myanmar', code: '+95', flag: '🇲🇲', iso: 'MM' },
        { name: 'Afghanistan', code: '+93', flag: '🇦🇫', iso: 'AF' }
    ];

    /* India is the only country we can length-check with confidence. Everything
     * else just has to be a plausible international subscriber number, so the
     * form never rejects a valid foreign lead it does not have a rule for. */
    /* Two ways people write their own number that used to reach the CRM as
     * something undiallable, both of them normal outside India:
     *
     *   1. The national trunk prefix. A UK visitor writes 07911 123456, and we
     *      stored +44 0 7911 123456. No national number legitimately starts with
     *      a zero once it is behind a country code, so leading zeros always go.
     *
     *   2. The country code typed into the number box as well as picked from the
     *      dropdown - 971501234567 under +971, stored as +971971501234567. Only
     *      stripped when the number is longer than 10 digits, which is what keeps
     *      a plain 10-digit Indian mobile starting "91" (9198765432) intact: it
     *      is not over the threshold, so the leading 91 is never mistaken for a
     *      country code. Zeros go first, so 00447911123456 lands correctly too.
     */
    function normalisePhone(raw, dialCode) {
        var digits = (raw || '').replace(/\D/g, '').replace(/^0+/, '');
        var cc = (dialCode || '').replace('+', '');
        if (cc && digits.length > 10 && digits.indexOf(cc) === 0 &&
            (digits.length - cc.length) >= 6) {
            digits = digits.slice(cc.length);
        }
        return digits;
    }

    function validatePhone(raw, dialCode) {
        var digits = normalisePhone(raw, dialCode);
        if (!digits) { return { valid: false, message: 'Phone number is required' }; }
        if (dialCode === '+91') {
            if (digits.length !== 10) { return { valid: false, message: 'Enter a 10-digit mobile number' }; }
            if (!/^[6-9]/.test(digits)) { return { valid: false, message: 'Indian mobile numbers start with 6, 7, 8 or 9' }; }
            return { valid: true, digits: digits };
        }
        if (digits.length < 6 || digits.length > 15) {
            return { valid: false, message: 'Enter a valid phone number' };
        }
        return { valid: true, digits: digits };
    }

    function setError(field, message) {
        if (!field) { return; }
        field.classList.add('input-error');
        var msg = field.parentNode.querySelector('.field-error-msg[data-for-field]');
        if (!msg) {
            msg = document.createElement('div');
            msg.className = 'field-error-msg';
            msg.setAttribute('data-for-field', '');
            field.parentNode.appendChild(msg);
        }
        msg.textContent = message;
        msg.style.display = 'block';
    }

    function clearError(field) {
        if (!field) { return; }
        field.classList.remove('input-error');
        var msg = field.parentNode.querySelector('.field-error-msg[data-for-field]');
        if (msg) { msg.style.display = 'none'; }
    }

    function initForm(form) {
        if (form.__paBound) { return; }
        form.__paBound = true;

        // Found by class, not id: the first full card on a page is given the
        // legacy id "consultationFormCard" so old "Get a Callback" anchors still
        // land, and a 'bare' instance has no wrapper at all.
        var card       = form.closest('.bigin-form');
        var ccWrap     = form.querySelector('[data-cc]');
        var ccFlag     = form.querySelector('[data-cc-flag]');
        var ccCode     = form.querySelector('[data-cc-code]');
        var ccList     = form.querySelector('[data-cc-list]');
        var ccSearch   = form.querySelector('[data-cc-search]');
        var ccOptions  = form.querySelector('[data-cc-options]');
        var phone      = form.querySelector('[data-phone]');
        var phoneGroup = form.querySelector('[data-phone-group]');
        var phoneError = form.querySelector('[data-phone-error]');
        var mobile     = form.querySelector('[data-mobile]');
        var submitBtn  = form.querySelector('[data-submit]');
        var pageUrl    = form.querySelector('[data-page-url]');

        var selected = COUNTRIES[0];

        if (pageUrl) { pageUrl.value = window.location.href; }

        // ---- country dropdown ------------------------------------------------
        function renderOptions(filter) {
            if (!ccOptions) { return; }
            var f = (filter || '').toLowerCase();
            var list = f
                ? COUNTRIES.filter(function (c) {
                      return c.name.toLowerCase().indexOf(f) !== -1 || c.code.indexOf(f) !== -1;
                  })
                : COUNTRIES;
            ccOptions.textContent = '';
            list.forEach(function (c) {
                var el = document.createElement('div');
                el.className = 'country-option' + (c.iso === selected.iso ? ' active' : '');
                el.innerHTML =
                    '<span class="flag-emoji"></span>' +
                    '<span class="country-name"></span>' +
                    '<span class="dial-code"></span>';
                el.children[0].textContent = c.flag;
                el.children[1].textContent = c.name;
                el.children[2].textContent = c.code;
                el.addEventListener('click', function (e) {
                    e.stopPropagation();
                    selected = c;
                    if (ccFlag) { ccFlag.textContent = c.flag; }
                    if (ccCode) { ccCode.textContent = c.code; }
                    if (ccWrap) { ccWrap.classList.remove('open'); }
                    if (ccSearch) { ccSearch.value = ''; }
                    renderOptions('');
                    if (phone) { phone.focus(); }
                });
                ccOptions.appendChild(el);
            });
        }

        if (ccWrap) {
            ccWrap.addEventListener('click', function (e) {
                if (ccList && ccList.contains(e.target)) { return; }
                e.stopPropagation();
                ccWrap.classList.toggle('open');
                if (ccWrap.classList.contains('open') && ccSearch) { ccSearch.focus(); }
            });
            ccWrap.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); ccWrap.click(); }
            });
        }
        if (ccSearch) {
            ccSearch.addEventListener('click', function (e) { e.stopPropagation(); });
            ccSearch.addEventListener('input', function () { renderOptions(this.value); });
        }
        document.addEventListener('click', function (e) {
            if (ccWrap && !ccWrap.contains(e.target)) { ccWrap.classList.remove('open'); }
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && ccWrap) { ccWrap.classList.remove('open'); }
        });
        renderOptions('');

        // ---- field-level behaviour -------------------------------------------
        Array.prototype.forEach.call(form.querySelectorAll('[data-req]'), function (field) {
            field.addEventListener('input', function () { clearError(field); });
        });

        if (phone) {
            phone.addEventListener('input', function () {
                this.value = this.value.replace(/[^0-9]/g, '');
                clearError(this);
                if (phoneGroup) { phoneGroup.classList.remove('input-error'); }
                if (phoneError) { phoneError.style.display = 'none'; }
            });
            phone.addEventListener('blur', function () {
                if (!this.value.trim()) { return; }
                var r = validatePhone(this.value, selected.code);
                if (!r.valid && phoneError) {
                    phoneGroup.classList.add('input-error');
                    phoneError.textContent = r.message;
                    phoneError.style.display = 'block';
                }
            });
        }

        // ---- submit ----------------------------------------------------------
        form.addEventListener('submit', function (e) {
            var ok = true;

            Array.prototype.forEach.call(form.querySelectorAll('[data-req]'), function (field) {
                if (!field.value.trim()) { setError(field, field.getAttribute('data-req')); ok = false; }
            });

            var r = validatePhone(phone ? phone.value : '', selected.code);
            if (!r.valid) {
                if (phoneGroup) { phoneGroup.classList.add('input-error'); }
                if (phoneError) { phoneError.textContent = r.message; phoneError.style.display = 'block'; }
                ok = false;
            } else if (phoneGroup) {
                phoneGroup.classList.remove('input-error');
                if (phoneError) { phoneError.style.display = 'none'; }
            }

            if (!ok) {
                e.preventDefault();
                var bad = form.querySelector('.input-error');
                if (bad && bad.focus) { bad.focus(); }
                return false;
            }

            // [data-mobile] is the visible phone input itself, which already
            // carries name="Contacts.Mobile" and posts on its own. All we do here
            // is upgrade what the visitor typed to +CC form. If this line never
            // runs, the CRM still gets the number - just without the country code.
            if (mobile) { mobile.value = selected.code + r.digits; }
            if (pageUrl) { pageUrl.value = window.location.href; }

            // Where the city goes.
            //
            // The visible input is named Contacts.Mailing City, so it lands on the
            // CONTACT. The deal's own City field is not part of this Zoho webform
            // and is discarded, so the only way to show a city ON THE DEAL is to
            // put it in Potential Name - the one deal field the form accepts.
            //
            //   Website Enquiry - PAN Registration - Mumbai
            //
            // Skipped when the service already names the city, so a city page does
            // not read "Stock Audit in Mumbai - Mumbai".
            var typedCity = form.querySelector('[data-city]');
            var dealCity  = form.querySelector('[data-deal-city]');
            var dealName  = form.querySelector('[data-deal-name]');
            var city      = typedCity ? typedCity.value.trim() : '';

            if (dealCity && city) { dealCity.value = city; }

            if (dealName && city) {
                var base = dealName.value;
                if (base.toLowerCase().indexOf(city.toLowerCase()) === -1) {
                    dealName.value = base + ' - ' + city;
                }
            }

            // The iframe fires 'load' once for about:blank before any submit.
            // This flag is what separates that from Zoho's actual answer.
            form.__paSubmitted = true;

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Submitting…';
                // Zoho answers into the hidden iframe. If that never fires (offline,
                // blocked third party), give the visitor the button back.
                setTimeout(function () {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Get Free Quote →';
                }, 8000);
            }
            return true;
        });

        // ---- success ---------------------------------------------------------
        var frame = document.getElementById('biginFrame' + form.getAttribute('data-uid'));
        if (frame) {
            frame.addEventListener('load', function () {
                // Only a load that follows a real submit is an answer;
                // the about:blank paint on page load is not.
                if (!form.__paSubmitted) { return; }

                // The answer now comes from our own domain, so we can read it and
                // tell the truth. This used to celebrate on ANY load - a 500 page
                // in this frame still said "we will call you shortly", which is how
                // a lost enquiry looked identical to a captured one.
                if (readLeadState(frame) === 'failed') {
                    showFailure(form, submitBtn);
                    return;
                }

                showSuccess(card || form);
            });
        }
    }

    /* 'captured' | 'failed' | null when the frame cannot be read. Same-origin now,
     * but a redirect elsewhere would throw, and an unreadable answer must NOT be
     * treated as failure - better a wrong thank-you than scaring off a visitor
     * whose enquiry actually landed. */
    function readLeadState(frame) {
        try {
            var doc = frame.contentDocument || (frame.contentWindow && frame.contentWindow.document);
            if (!doc) { return null; }
            var meta = doc.querySelector('meta[name="pa-lead"]');
            return meta ? meta.getAttribute('content') : null;
        } catch (e) {
            return null;
        }
    }

    /* The enquiry reached neither our database nor Zoho. Keep the form on screen
     * with what they typed still in it, and give them a number to ring. */
    function showFailure(form, submitBtn) {
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Try again →';
        }

        var box = form.querySelector('[data-submit-error]');
        if (!box) {
            box = document.createElement('div');
            box.className = 'field-error-msg';
            box.setAttribute('data-submit-error', '');
            box.style.marginTop = '10px';
            form.appendChild(box);
        }
        box.textContent = 'Sorry, we could not record your enquiry. Please call us on +91 94594 56700.';
        box.style.display = 'block';
    }

    function showSuccess(target) {
        if (!target) { return; }
        target.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32">' +
                        '<path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>' +
                'Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }

    function boot() {
        Array.prototype.forEach.call(document.querySelectorAll('form[data-bigin-form]'), initForm);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }
})();
