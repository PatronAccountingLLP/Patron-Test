{{--
    Shared Enquiry / "Get Free Consultation" form (Zoho Bigin — form id 208810000001209168)
    Single source of truth. Include where the form should appear (hero right column):

        @include('partials.enquiry-form', ['serviceSlug' => 'accounting-services-for-startups', 'serviceLabel' => 'Startup Accounting'])

    Params (all optional):
        $serviceSlug   CRM value for the page's own service, pre-selected in the dropdown
        $serviceLabel  Display text for that pre-selected service
    CSS lives in /css/patron-cluster.css. JS lives in /js/enquiry-form.js.
--}}
{{-- Tell the layout a form is already on this page, so the site-wide band stands down. --}}
@php
    config(['pa.enquiry_form_rendered' => true]);
@endphp
@php
    // Primary API: pass $options (ordered [value => label]) + $selected (value string) to keep the
    // page's own service list. Back-compat: $serviceSlug/$serviceLabel fall back to a canonical list.
    $options      = $options      ?? null;
    $serviceSlug  = $serviceSlug  ?? '';
    $serviceLabel = $serviceLabel ?? '';
    $selected     = $selected     ?? ($serviceSlug !== '' ? $serviceSlug : null);

    if (!is_array($options) || empty($options)) {
        $canonical = [
            'accounting-services'                          => 'All Accounting Services',
            'accounting-services-for-e-commerce-industry'  => 'E-Commerce Accounting',
            'financial-statement-preparation-services'     => 'Financial Statement Preparation',
            'mis-reporting-services'                        => 'MIS Reporting',
            'backlog-bookkeeping-catch-up-services'         => 'Backlog Bookkeeping Catch-up',
            'other'                                         => 'Other',
        ];
        $options = [];
        if ($serviceSlug !== '' && $serviceLabel !== '' && !array_key_exists($serviceSlug, $canonical)) {
            $options[$serviceSlug] = $serviceLabel;
        }
        foreach ($canonical as $slug => $label) { $options[$slug] = $label; }
    }

    $selectedSlug = ($selected !== null && isset($options[$selected])) ? $selected : null;
    $dealSeed     = $selectedSlug !== null ? $options[$selectedSlug] : 'General Enquiry';
@endphp

<div class="form-card" id="consultationFormCard">
    <div class="form-header">
        <h2 class="form-title">Get Free Consultation</h2>
        <p class="form-subtitle">Talk to a CA/CS expert today</p>
    </div>

    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

    <form id='BiginWebToRecordForm208810000001209168'
          name='BiginWebToRecordForm208810000001209168'
          action='https://bigin.zoho.in/crm/WebToRecordForm'
          method='POST'
          enctype='multipart/form-data'
          target='hidden208810000001209168Frame'
          onSubmit='javascript:document.charset="UTF-8"; return validateConsultationForm() && checkMandatory208810000001209168()'
          accept-charset='UTF-8'>

        <input type='text' style='display:none;' name='xnQsjsdp' value='e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'/>
        <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
        <input type='text' style='display:none;' name='xmIwtLD' value='2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843'/>
        <input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
        <input type='hidden' name='rmsg' id='rmsg' value='true'/>
        <input type='text' style='display:none;' name='returnURL' value='null' />
        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - {{ $dealSeed }}'/>
        <input type='hidden' name='Pipeline' value='Sales Pipeline Standard'/>
        <input type='hidden' name='Stage' value='Qualification'/>
        <input type='hidden' name='Contacts.Lead Source' id='pageSourceField' value=''/>

        <div class="form-group">
            <label class="form-label">Full Name</label>
            <input name='Contacts.Last Name' id='consultFullName' type='text' maxlength='80'
                   class='form-input' placeholder='Your name' oninput='clearFieldError(this)'/>
        </div>

        <div class="form-group">
            <label class="form-label">Phone Number</label>
            <div class="phone-group" id="phoneGroup">
                <div class="country-code-dropdown" id="countryCodeDropdown" onclick="toggleCountryDropdown(event)">
                    <span class="selected-flag" id="selectedFlag">&#127470;&#127475;</span>
                    <span class="selected-code" id="selectedCode">+91</span>
                    <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    <div class="country-dropdown-list" id="countryDropdownList">
                        <input type="text" class="country-search-input" id="countrySearchInput"
                               placeholder="Search country..." onclick="event.stopPropagation()" oninput="filterCountries(this.value)"/>
                        <div class="country-options" id="countryOptions"></div>
                    </div>
                </div>
                <input type='text' class='form-input phone-input' id='phoneNumberInput' maxlength='15'
                       placeholder='Enter phone number'
                       oninput='this.value = this.value.replace(/[^0-9]/g, ""); clearFieldError(this); document.getElementById("phoneGroup").classList.remove("input-error"); document.getElementById("phoneError").style.display="none";'
                       onblur='validatePhoneOnBlur(this)'/>
                <div id="phoneError" style="display:none;font-size:12px;color:#FD6B6D;margin-top:4px;padding-left:2px;"></div>
            </div>
            <input type='hidden' name='Contacts.Mobile' id='combinedMobileField' value=''/>
        </div>

        <div class="form-group">
            <label class="form-label">City</label>
            <input name='Contacts.Mailing City' id='consultCity' type='text' maxlength='100'
                   class='form-input' placeholder='Enter your city' oninput='clearFieldError(this)'/>
        </div>

        <div class="form-group">
            <label class="form-label">Service Needed</label>
            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
                <option value='' disabled {{ $selectedSlug ? '' : 'selected' }}>Select a service</option>
                @foreach($options as $slug => $label)
                    <option value="{{ $slug }}" {{ $selectedSlug === $slug ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <button type='submit' class='btn-submit' id='formSubmitBtn'>Get Free Quote &rarr;</button>
    </form>

    <p class="form-response-note">Our team will get back to you shortly. No spam.</p>

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
