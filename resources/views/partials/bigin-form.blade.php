{{--
    THE enquiry form. One partial, used in every form slot on the site.

    Every lead goes to Zoho Bigin webform 208810000001209168, tagged with the
    service of the page it was submitted from -- fill it in on /gst-registration
    and the deal lands in Bigin as "Website Enquiry - GST Registration"; do it on
    /itr-services and it lands as "Website Enquiry - ITR Services".

    The service is LOCKED to the page and shown read-only. There is no service
    picker, so there is no per-page options list to maintain: the markup is
    identical everywhere and only the resolved service differs.

    ---------------------------------------------------------------- parameters

      $service   the service to tag the lead with. Everything else is fallback.
      $city      prefills and tags the city.
      $variant   'card'    hero / right-hand column (default)
                 'compact' FAQ column and other narrow slots
      $title     heading above the form
      $subtitle  supporting line
      $cta       submit button text

    Nothing is required. Called with no arguments at all it still resolves a
    sensible service from the URL.

    -------------------------------------------------- how the service resolves

    First hit wins:

      1  $service              explicit, from the call site
      2  $enquiryService       faq-enquiry-form's old parameter
      3  $serviceLabel         enquiry-form's old parameter
      4  $deal                 lead-form's old parameter, prefix stripped
      5  $options + $selected  either old options shape, including the
                               ['selected' => true] row lead-form used
      6  pa.enquiry_service    resolved by an earlier form on this page
      7  the URL slug          de-slugged and title-cased

    Steps 2-5 are why no page template needed editing: the 4,109 existing call
    sites already pass their service, in four different shapes, and all four are
    understood here. Step 6 covers the 701 pages whose FAQ form passes nothing
    but whose hero form above it does. Step 7 covers the remaining 3.

    ------------------------------------------------------------------ instances

    A page usually renders this twice (hero + FAQ), so every id is suffixed with
    a per-instance counter and each form gets its own hidden iframe. The JS in
    js/enquiry-form.js scopes itself to each <form data-bigin-form> instead of
    reaching for document.getElementById, so instances never collide.
--}}
@php
    // ---- unique instance -------------------------------------------------
    // Counter lives in config, not a static: a compiled Blade view is include()d
    // inside the view engine's method, so a static there is shared in ways that
    // are hard to reason about. Config is per-request and explicit.
    $paSeq = ((int) config('pa.bigin_seq', 0)) + 1;
    config(['pa.bigin_seq' => $paSeq]);
    $uid = 'bg'.$paSeq;

    // ---- the URL-derived name, always computed ---------------------------
    // Used both as the last-resort service and as a sanity check on $deal.
    $paCityList = ['delhi','mumbai','pune','gurugram','gurgaon','bangalore','bengaluru','chennai',
                   'kolkata','hyderabad','ahmedabad','noida','jaipur','surat','lucknow','indore',
                   'chandigarh','coimbatore','kochi','thane','nagpur','bhopal','patna','vadodara'];

    // City pages come in two shapes and both have to be understood:
    //   /12a-registration-delhi      city as the last hyphen token
    //   /accounting-services/delhi   city as its own path segment
    $paPath = trim((string) (parse_url(request()->getRequestUri(), PHP_URL_PATH) ?: ''), '/');
    $paSegs = array_values(array_filter(explode('/', strtolower($paPath))));
    $paTailCity = null;
    if ($paSegs && in_array(end($paSegs), $paCityList, true)) { $paTailCity = array_pop($paSegs); }
    $paSeg = $paSegs ? end($paSegs) : '';
    $paSeg = preg_replace('/\.(html?|php)$/i', '', $paSeg);
    $paParts = array_values(array_filter(explode('-', $paSeg)));
    if ($paTailCity === null && $paParts && in_array(end($paParts), $paCityList, true)) {
        $paTailCity = array_pop($paParts);
    }
    $paSlugWords = $paParts;
    $paAcr = ['gst','itr','tds','tcs','roc','llp','opc','msme','iec','esop','fssai','fcra','pan','tan',
              'ngo','aoa','moa','ca','cs','imf','epf','esic','nic','hsn','ifsc','caro','aoc','adt','chg',
              'stk','egm','agm','ncd','rpt','posh','fmv','cma','mis','ind','usa','uk','uae','din','kyc',
              'ppf','nps','sez','stpi','edf','qrmp','gstr','gstat','mca','sebi','rbi','fema','ohsas'];
    $paSmall = ['for','of','in','and','to','the','a','an','vs','by','on','with'];
    $paWords = [];
    foreach ($paParts as $n => $w) {
        if (preg_match('/^\d+[a-z]$/i', $w))             { $paWords[] = strtoupper($w); }   // 12a -> 12A
        elseif (in_array($w, $paAcr, true))              { $paWords[] = strtoupper($w); }
        elseif ($n > 0 && in_array($w, $paSmall, true))  { $paWords[] = $w; }
        else                                             { $paWords[] = ucfirst($w); }
    }
    $paUrlSvc = trim(implode(' ', $paWords));
    if ($paUrlSvc !== '' && $paTailCity) { $paUrlSvc .= ' in '.ucfirst($paTailCity); }

    // ---- resolve the service --------------------------------------------
    // One page = one service. The first form to render decides it and every
    // later form on the same page reuses it, so a page never sends two spellings
    // of itself to Bigin ("Copyright for Literary Work" from the hero and
    // "Literary Work Copyright" from the FAQ column would split the pipeline
    // report in two). It also means a typo in one slot's parameter cannot
    // surface if another slot got it right.
    // An explicit 'service' still overrides, so a page can deliberately differ.
    $paSvc = null;
    if (!empty($service) && is_string($service) && trim($service) !== '') {
        $paSvc = trim($service);
    }
    if ($paSvc === null) { $paSvc = config('pa.enquiry_service') ?: null; }
    if ($paSvc === null) {
        foreach ([$enquiryService ?? null, $serviceLabel ?? null] as $cand) {
            if (is_string($cand) && trim($cand) !== '') { $paSvc = trim($cand); break; }
        }
    }

    // $deal is right on ~1,250 pages but a handful carry a stale template value
    // ("Legal Drafting" on the ESOP pages) or a call to action ("Get Personalised
    // Accounting Guidance"). The old JS overwrote the deal name with the dropdown
    // selection at submit time, so nobody ever saw those. With the service locked
    // they would show, so $deal has to earn its place: it is only trusted when it
    // shares a word with the page's own URL and does not read as a CTA.
    if ($paSvc === null && !empty($deal) && is_string($deal)) {
        $paCand = trim(preg_replace('/^\s*Website\s+Enquiry\s*[-\x{2013}\x{2014}]\s*/iu', '', $deal));
        $paCandWords = preg_split('/[^a-z0-9]+/', strtolower(html_entity_decode($paCand)), -1, PREG_SPLIT_NO_EMPTY) ?: [];
        $paShares = (bool) array_intersect($paCandWords, $paSlugWords);
        $paIsCta  = (bool) preg_match('/^(get|find|talk|book|start|claim|request|speak|call|enquire|contact|discuss|schedule)\b/i', $paCand);
        if ($paCand !== '' && !$paIsCta && ($paShares || $paUrlSvc === '')) { $paSvc = $paCand; }
    }

    // Most lead-form pages pre-select a DISABLED placeholder row --
    //   ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true]
    // -- because the old dropdown forced the visitor to choose. Taking the
    // selected row blindly would file those leads under "Select a service", so
    // rows with no value, or marked disabled, are skipped.
    if ($paSvc === null && !empty($options) && is_array($options)) {
        $sel = $selected ?? null;
        if ($sel !== null && isset($options[$sel]) && is_string($options[$sel])) {
            $paSvc = $options[$sel];                        // ['slug' => 'Label']
        } else {
            foreach ($options as $k => $o) {
                if (is_array($o)) {
                    if (empty($o['selected']) || empty($o['label'])) { continue; }
                    if (!empty($o['disabled']) || (isset($o['value']) && trim((string) $o['value']) === '')) { continue; }
                    $paSvc = $o['label']; break;            // [['label'=>..,'selected'=>true]]
                }
                if (is_string($o) && $sel !== null && $k === $sel && trim($o) !== '') { $paSvc = $o; break; }
            }
        }
    }
    if ($paSvc === null) { $paSvc = $paUrlSvc !== '' ? $paUrlSvc : 'General Enquiry'; }

    // Some labels arrive already entity-encoded ("Accounting &amp; Bookkeeping"),
    // others contain a bare "&". Decode first so Blade's {{ }} escapes exactly
    // once and the page never shows "&amp;amp;".
    $paSvc = trim(html_entity_decode($paSvc, ENT_QUOTES | ENT_HTML5, 'UTF-8'));

    // ---- resolve the city ------------------------------------------------
    // The URL is the last fallback so a city page still prefills the field even
    // when the slot that rendered first takes no city parameter - partials/
    // enquiry-form never had one, which left all 178 of its pages blank.
    $paCity = '';
    foreach ([$city ?? null, $enquiryLocation ?? null, config('pa.enquiry_city'),
              $paTailCity ? ucfirst($paTailCity) : null] as $cand) {
        if (is_string($cand) && trim($cand) !== '') { $paCity = trim($cand); break; }
    }

    // Publish for any later form on this page; tell the layout band to stand down.
    config([
        'pa.enquiry_form_rendered' => true,
        'pa.enquiry_service'       => $paSvc,
        'pa.enquiry_city'          => $paCity,
    ]);

    $paCompact = (($variant ?? 'card') === 'compact');
    $paTitle   = $title    ?? 'Get Free Consultation';
    $paSub     = $subtitle ?? 'Talk to a CA/CS expert today';
    $paCta     = $cta      ?? 'Get Free Quote &rarr;';
@endphp

<div class="form-card bigin-form{{ $paCompact ? ' bigin-form--compact' : '' }}" id="formCard{{ $uid }}">
    <div class="form-header">
        <h2 class="form-title">{{ $paTitle }}</h2>
        <p class="form-subtitle">{{ $paSub }}</p>
    </div>

    <iframe name="biginFrame{{ $uid }}" id="biginFrame{{ $uid }}" style="display:none;" src="about:blank" title="Form submission target" aria-hidden="true"></iframe>

    <form data-bigin-form
          data-uid="{{ $uid }}"
          id="biginForm{{ $uid }}"
          action="https://bigin.zoho.in/crm/WebToRecordForm"
          method="POST"
          enctype="multipart/form-data"
          target="biginFrame{{ $uid }}"
          accept-charset="UTF-8">

        {{-- Zoho webform identity. These name the form on Zoho's side; the record
             is built from the POST body, so the <form> id is ours to make unique. --}}
        <input type="hidden" name="xnQsjsdp" value="e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79"/>
        <input type="hidden" name="xmIwtLD" value="2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843"/>
        <input type="hidden" name="actionType" value="UG90ZW50aWFscw=="/>
        <input type="hidden" name="returnURL" value="null"/>
        <input type="hidden" name="rmsg" value="true"/>
        <input type="hidden" name="zc_gad" value=""/>

        {{-- The service tagging. This is what makes the form service-level. --}}
        <input type="hidden" name="Potential Name" value="Website Enquiry - {{ $paSvc }}"/>
        <input type="hidden" name="Contacts.Description" value="{{ $paSvc }}"/>
        <input type="hidden" name="Pipeline" value="Sales Pipeline Standard"/>
        <input type="hidden" name="Stage" value="Qualification"/>
        <input type="hidden" name="Contacts.Lead Source" data-page-url value=""/>

        {{-- The service is deliberately NOT shown. It still reaches Bigin through
             the hidden "Potential Name" and "Contacts.Description" fields above,
             so the lead is tagged per page either way. --}}

        <div class="form-group">
            <label class="form-label" for="name{{ $uid }}">Full Name</label>
            <input class="form-input" id="name{{ $uid }}" name="Contacts.Last Name" type="text"
                   maxlength="80" placeholder="Your name" autocomplete="name"
                   data-req="Full name is required"/>
        </div>

        <div class="form-group">
            <label class="form-label" for="phone{{ $uid }}">Phone Number</label>
            <div class="phone-group" data-phone-group>
                <div class="country-code-dropdown" data-cc tabindex="0" role="button" aria-label="Select country code">
                    <span class="selected-flag" data-cc-flag>&#127470;&#127475;</span>
                    <span class="selected-code" data-cc-code>+91</span>
                    <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    <div class="country-dropdown-list" data-cc-list>
                        <input type="text" class="country-search-input" data-cc-search placeholder="Search country..."/>
                        <div class="country-options" data-cc-options></div>
                    </div>
                </div>
                <input class="form-input phone-input" id="phone{{ $uid }}" type="tel"
                       maxlength="15" placeholder="Enter phone number" autocomplete="tel" data-phone/>
            </div>
            <div class="field-error-msg" data-phone-error style="display:none;"></div>
            <input type="hidden" name="Contacts.Mobile" data-mobile value=""/>
        </div>

        <div class="form-group">
            <label class="form-label" for="city{{ $uid }}">City</label>
            <input class="form-input" id="city{{ $uid }}" name="Contacts.Mailing City" type="text"
                   maxlength="100" placeholder="Enter your city" autocomplete="address-level2"
                   value="{{ $paCity }}" data-req="City is required"/>
        </div>

        <button type="submit" class="btn-submit" data-submit>{!! $paCta !!}</button>
    </form>

    @unless ($paCompact)
        <p class="form-response-note">Our team will get back to you shortly. No spam.</p>
    @endunless

    <div class="form-footer">
        <span class="form-footer-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            100% Secure
        </span>
        <span class="form-footer-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"></path></svg>
            No Spam
        </span>
        <span class="form-footer-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
            Quick Response
        </span>
    </div>
</div>

@include('partials.enquiry-form-scripts')
