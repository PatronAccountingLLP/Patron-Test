{{--
  The Zoho Bigin lead form, shared by every service / city page.

      @include('partials.lead-form', [
          'deal'    => 'Website Enquiry - GST Registration',   // hidden Potential Name
          'city'    => 'Pune',                                  // optional: pre-fills the City input
          'cta'     => 'Find My ESOP Service',                  // optional: overrides the button text
          'options' => [ ['value' => 'gst-registration', 'label' => 'GST Registration',
                          'selected' => true, 'disabled' => false], ... ],
      ])

  Markup, field names and element ids are byte-for-byte what the ~1,830 inline copies had —
  the per-page <script> still drives this form by id (dealNameField, pageSourceField,
  consultService, validateConsultationForm, checkMandatory…), so nothing may be renamed here.

  $deal / $city / option text are emitted RAW on purpose. Some labels legitimately contain
  `&` and some already contain `&amp;`; escaping them with {{ }} would double-encode the
  latter and literally render "&amp;" on the page. The values come from our own templates,
  not from user input.
--}}
{{-- Tell the layout a form is already on this page, so the site-wide band stands down. --}}
@php(config(['pa.enquiry_form_rendered' => true]))
@php($city = $city ?? '')
@php($cta  = $cta  ?? 'Get Free Quote &rarr;')
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='{!! $deal !!}'/>
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
                                   class='form-input' placeholder='Enter your city'{!! $city !== '' ? " value='" . $city . "'" : '' !!} oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Needed</label>
                            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
{{-- ternaries, not @if: Blade ignores a directive glued to a word character ("disabled@endif"),
     which leaves the @if open and the compiled view dies with a PHP parse error. --}}
@foreach ($options as $o)
                                <option value="{!! $o['value'] !!}"{!! $o['disabled'] ? ' disabled' : '' !!}{!! $o['selected'] ? ' selected' : '' !!}>{!! $o['label'] !!}</option>
@endforeach
                            </select>
                        </div>

                        <button type='submit' class='btn-submit' id='formSubmitBtn'>{!! $cta !!}</button>
                    </form>

@include('partials.enquiry-form-scripts')
