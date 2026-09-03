{{--
    THE enquiry form. The only one on the site.

    Every lead goes to Zoho Bigin webform 208810000001209168, tagged with the
    service of the page it was submitted from. Fill it in on /gst-registration
    and the deal reaches Bigin as "Website Enquiry - GST Registration".

    Use it like this - the service is the only thing worth passing:

        @include('partials.bigin-form', ['service' => 'GST Registration'])

        @include('partials.bigin-form', [
            'service' => 'Stock Audit in Pune',
            'city'    => 'Pune',
            'variant' => 'compact',
        ])

    Parameters, all optional:

        service   what the lead is filed under in Bigin. Omit it and the page's
                  URL is de-slugged instead, so a new page still tags correctly.
        city      prefills the City field and travels to Bigin as Mailing City.
        variant   'card' for the hero column (default), 'compact' for the FAQ
                  column and other narrow slots.
        title     heading. Defaults per variant.
        subtitle  supporting line. Defaults per variant.
        cta       submit button text.

    A page usually renders this twice, hero and FAQ. Pass the SAME service to
    both: one page should file under one service, or the pipeline report splits
    in two. Every id here is suffixed per instance and each form gets its own
    hidden response frame, so the two never collide.

    The service is written into hidden fields server-side, so a lead is tagged
    correctly even if JavaScript never runs. js/enquiry-form.js only adds the
    country picker, validation and the thank-you state.
--}}
@php
    $paSeq = ((int) config('pa.bigin_seq', 0)) + 1;
    config(['pa.bigin_seq' => $paSeq]);
    $uid = 'bg'.$paSeq;

    $paVariant = $variant ?? 'card';
    $paCompact = ($paVariant === 'compact');
    // 'bare' renders the <form> and nothing around it, for the ~1,787 pages that
    // already build their own .form-card and heading in the hero column. Without
    // it they get a card inside a card and "Get Free Consultation" twice.
    $paBare    = ($paVariant === 'bare');
    $paCity    = trim((string) ($city ?? ''));
    $paSvc     = trim((string) ($service ?? ''));

    // Nothing passed? Reuse whatever the first form on this page settled on.
    // partials/faq-section renders this without a service on pages that do not
    // hand one down, and those pages must not file two spellings of themselves
    // ("Ind AS" from the hero, "IND As" de-slugged from the URL here).
    if ($paSvc === '') { $paSvc = trim((string) config('pa.enquiry_service', '')); }
    if ($paCity === '') { $paCity = trim((string) config('pa.enquiry_city', '')); }

    if ($paSvc === '') {
        // Still nothing, and no earlier form to borrow from. De-slug the URL so
        // the lead is filed under something meaningful. Handles both
        // /12a-registration-delhi and /accounting-services/delhi.
        $paCityList = ['delhi','mumbai','pune','gurugram','gurgaon','bangalore','bengaluru','chennai',
                       'kolkata','hyderabad','ahmedabad','noida','jaipur','surat','lucknow','indore',
                       'chandigarh','coimbatore','kochi','thane','nagpur','bhopal','patna','vadodara'];
        $paAcr = ['gst','itr','tds','tcs','roc','llp','opc','msme','iec','esop','fssai','fcra','pan','tan',
                  'ngo','aoa','moa','ca','cs','imf','epf','esic','nic','hsn','ifsc','caro','aoc','adt','chg',
                  'stk','egm','agm','ncd','rpt','posh','fmv','cma','mis','ind','usa','uk','uae','din','kyc',
                  'ppf','nps','sez','stpi','edf','qrmp','gstr','gstat','mca','sebi','rbi','fema'];
        $paSmall = ['for','of','in','and','to','the','a','an','vs','by','on','with'];

        $paSegs = array_values(array_filter(explode('/', strtolower(
            trim((string) (parse_url(request()->getRequestUri(), PHP_URL_PATH) ?: ''), '/')
        ))));
        $paTailCity = null;
        if ($paSegs && in_array(end($paSegs), $paCityList, true)) { $paTailCity = array_pop($paSegs); }
        $paSeg   = preg_replace('/\.(html?|php)$/i', '', $paSegs ? end($paSegs) : '');
        $paParts = array_values(array_filter(explode('-', $paSeg)));
        if ($paTailCity === null && $paParts && in_array(end($paParts), $paCityList, true)) {
            $paTailCity = array_pop($paParts);
        }
        $paWords = [];
        foreach ($paParts as $n => $w) {
            if (preg_match('/^\d+[a-z]$/i', $w))            { $paWords[] = strtoupper($w); }
            elseif (in_array($w, $paAcr, true))             { $paWords[] = strtoupper($w); }
            elseif ($n > 0 && in_array($w, $paSmall, true)) { $paWords[] = $w; }
            else                                            { $paWords[] = ucfirst($w); }
        }
        $paSvc = trim(implode(' ', $paWords));
        if ($paSvc !== '' && $paTailCity) { $paSvc .= ' in '.ucfirst($paTailCity); }
        if ($paSvc === '') { $paSvc = 'General Enquiry'; }
        if ($paCity === '' && $paTailCity) { $paCity = ucfirst($paTailCity); }
    }

    // Labels sometimes arrive already entity-encoded ("Accounting &amp; Bookkeeping"),
    // sometimes with a bare "&". Decode first so Blade escapes exactly once and the
    // page never shows "&amp;amp;".
    $paSvc = trim(html_entity_decode($paSvc, ENT_QUOTES | ENT_HTML5, 'UTF-8'));

    // The message the sales team reads on the deal. Bigin's Lead Source is a
    // picklist, so a URL cannot be stored in it - it comes back as "Websites"
    // whatever we send. The page address therefore goes in the message body,
    // which is the only free-text field we control. Built server-side so it is
    // right even if JavaScript never runs.
    $paUrl = url()->current();
    // The deal name is prefixed on pages that are not service pages ("Glossary -
    // General Ledger", "Blog - ...") so they are filterable in the pipeline. The
    // message is written in the client's voice, so it uses the plain topic.
    $paTopic = preg_replace('/^(?:Glossary|Blog) - /', '', $paSvc);
    $paMsg = 'Hi, I would like to know about '.$paTopic.'.';
    // Most city pages already name the city in the service ("Stock Audit in
    // Mumbai"), so only add it when it is not already in there.
    if ($paCity !== '' && stripos($paSvc, $paCity) === false) {
        $paMsg .= ' I am looking for this in '.$paCity.'.';
    }
    $paMsg .= ' (Enquiry submitted from '.$paUrl.')';
    // Extra context for pages that are not service pages - a blog post or a
    // glossary term - where the sales team has to ask what the client actually
    // wants rather than assume the page topic is the service.
    if (!empty($note)) {
        $paMsg .= ' NOTE FOR THE TEAM: '.trim($note);
    }

    $paTitle = $title    ?? ($paCompact ? 'Get a free callback' : 'Get Free Consultation');
    $paSub   = $subtitle ?? ($paCompact
                    ? 'Talk to a CA/CS expert today, no charge, no spam.'
                    : 'Talk to a CA/CS expert today');
    $paCta   = $cta      ?? 'Get Free Quote &rarr;';

    // Legacy anchor. 45 pages carry a "Get a Callback" button pointing at
    // #consultationFormCard; 1,776 of them define that id on their own hero card
    // (the 'bare' pages), but 25 relied on the old partials/enquiry-form to
    // render it. Only the first full card on a page takes the id, so a page can
    // never end up with two elements sharing it.
    $paLegacyId = (!$paBare && !$paCompact && !config('pa.bigin_legacy_id_used'));

    // Publish for any later form on this page, and let layouts know a form is here.
    config([
        'pa.enquiry_form_rendered' => true,
        'pa.enquiry_service'       => $paSvc,
        // The topic without the "Glossary - " / "Blog - " prefix. partials/footer
        // reads this to name the page in the floating WhatsApp button's message.
        'pa.enquiry_topic'         => $paTopic,
        'pa.enquiry_city'          => $paCity,
        'pa.bigin_legacy_id_used'  => config('pa.bigin_legacy_id_used') || $paLegacyId,
    ]);
@endphp

@unless ($paBare)
<div class="form-card bigin-form{{ $paCompact ? ' bigin-form--compact' : '' }}" id="{{ $paLegacyId ? 'consultationFormCard' : 'formCard'.$uid }}">
    <div class="form-header">
        <h2 class="form-title">{{ $paTitle }}</h2>
        <p class="form-subtitle">{{ $paSub }}</p>
    </div>
@endunless

    <iframe name="biginFrame{{ $uid }}" id="biginFrame{{ $uid }}" style="display:none;" src="about:blank" title="Form submission target" aria-hidden="true"></iframe>

    <form data-bigin-form
          data-uid="{{ $uid }}"
          id="biginForm{{ $uid }}"
          {{-- Posts to US, not straight to Zoho. LeadCaptureController saves the
               lead to our own `leads` table FIRST, then forwards the identical body
               to https://bigin.zoho.in/crm/WebForm. Zoho being down, slow, or
               silently dropping a field can no longer lose an enquiry - the row is
               already ours, and Lead::notInCrm() lists the ones Zoho did not take.
               The Zoho endpoint itself is unchanged and still the only CRM target;
               see LeadCaptureController::ZOHO_ENDPOINT. --}}
          action="{{ route('lead.capture') }}"
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

        {{-- The service tagging. This is what makes the form service-level.

             Potential Name is the ONLY deal field this webform accepts, so it
             carries everything the team must see without opening the contact:
             the service, and the city appended on submit. Bigin silently drops
             any field the form was not built with, which is why the deal's own
             Description and City stay empty (see the note below). --}}
        <input type="hidden" name="Potential Name" data-deal-name value="Website Enquiry - {{ $paSvc }}"/>
        <input type="hidden" name="Pipeline" value="Sales Pipeline Standard"/>
        <input type="hidden" name="Stage" value="Qualification"/>

        {{-- The readable message. This reaches the CONTACT record, not the deal.

             "Description" and "City" below are the DEAL's own fields. Webform
             208810000001209168 was not built with them, and Bigin discards any
             field it does not know, so today they do nothing - verified against a
             live submission where both stayed empty. They are left in place so
             that adding those two fields in Bigin's form builder is all it takes
             to populate them; no code change would be needed. Until then the deal
             carries its context in Potential Name above. --}}
        <input type="hidden" name="Contacts.Description" value="{{ $paMsg }}"/>
        <input type="hidden" name="Description" value="{{ $paMsg }}"/>
        <input type="hidden" name="City" data-deal-city value="{{ $paCity }}"/>

        {{-- Lead Source is a PICKLIST in Bigin. This used to be posted with the
             page URL in it, which is not one of its options - Bigin threw the value
             away and stored "Websites" regardless. Send the option it actually
             stores, and keep the page address in a field of our own below. --}}
        <input type="hidden" name="Contacts.Lead Source" value="Websites"/>

        {{-- Ours, not Zoho's - Bigin discards it, LeadCaptureController reads it.
             Rendered server-side so the page is recorded even when the script does
             not run; the script overwrites it with the full URL including any query
             string, which is what tells us which campaign a lead came from. --}}
        <input type="hidden" name="pa_page_url" data-page-url value="{{ $paUrl }}"/>

        <div class="form-group">
            <label class="form-label" for="name{{ $uid }}">Full Name</label>
            <input class="form-input" id="name{{ $uid }}" name="Contacts.Last Name" type="text"
                   maxlength="80" placeholder="Your name" autocomplete="name"
                   required data-req="Full name is required"/>
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
                {{-- This input carries name="Contacts.Mobile" ITSELF. It used to be
                     nameless, with a hidden Contacts.Mobile beside it that
                     js/enquiry-form.js filled in on submit - which meant the phone
                     number was the ONE field that only arrived if JavaScript ran.
                     Name and City are ordinary named inputs and always posted, so a
                     blocked or slow script produced a lead with a name, a city and
                     no way to call anyone back. The number now posts by itself; the
                     script only upgrades it to +CC form on submit. Do not take this
                     name off again. --}}
                <input class="form-input phone-input" id="phone{{ $uid }}" name="Contacts.Mobile"
                       type="tel" inputmode="tel" maxlength="15" placeholder="Enter phone number"
                       autocomplete="tel" required data-phone data-mobile/>
                {{-- No data-req here on purpose. That marks a field for the generic
                     checker, which appends its error into the input's parent - for
                     this input that is .phone-group, the bordered row holding the
                     flag and the box, so the message would land inside the control.
                     validatePhone() already reports "Phone number is required"
                     through [data-phone-error] below, which sits in the right place. --}}
            </div>
            <div class="field-error-msg" data-phone-error role="alert" style="display:none;"></div>
        </div>

        {{-- Not required, and the label does not say so either - the business's
             decision, made and re-made deliberately, so do not "tidy" it in either
             direction. No `required` attribute, and no "(optional)" hint: someone
             who has an email to give will fill it in, and someone who does not can
             still send the enquiry. The phone number used to be the only way to
             reach a lead, and when it arrived blank the enquiry was worthless; this
             is the second route, not a gate.

             Bigin discards any field its web form was not built with, so this
             arrives empty at the CRM until "Email" is added to web form
             208810000001209168 in Bigin's form builder. It IS saved to our own
             `leads` table from day one, so nothing is lost in the meantime. --}}
        <div class="form-group">
            <label class="form-label" for="email{{ $uid }}">Email</label>
            <input class="form-input" id="email{{ $uid }}" name="Contacts.Email" type="email"
                   maxlength="120" placeholder="Enter your email" autocomplete="email"/>
        </div>

        <div class="form-group">
            <label class="form-label" for="city{{ $uid }}">City</label>
            <input class="form-input" id="city{{ $uid }}" name="Contacts.Mailing City" type="text"
                   maxlength="100" placeholder="Enter your city" autocomplete="address-level2"
                   value="{{ $paCity }}" required data-city data-req="City is required"/>
        </div>

        <button type="submit" class="btn-submit" data-submit>{!! $paCta !!}</button>
    </form>

@unless ($paBare)
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
@endunless

{{-- Our own JS, once per page however many forms it render. The stylesheet is
     NOT here: css/enquiry-form.css is linked by the layouts next to the header
     and footer, so it loads on every page.

     Zoho's wf_script loader is deliberately NOT included. All it did was find
     the form by its name attribute and rewrite the action:

         var formname = document.BiginWebToRecordForm208810000001209168;
         formname.action = 'https://bigin.zoho.in/crm/WebForm';

     WebToRecordForm - the action Zoho's generated markup ships with, and which
     production still carries - is only a placeholder; posting to it returns
     HTTP 400 and creates nothing. We set the real /crm/WebForm action above, so
     the loader has nothing left to do, and it could not work here anyway: it
     looks the form up by a single fixed name and a page renders two of them. --}}
@once
<script src="{{ asset('js/enquiry-form.js') }}?v={{ @filemtime(base_path('js/enquiry-form.js')) ?: '1' }}" defer></script>
@endonce
