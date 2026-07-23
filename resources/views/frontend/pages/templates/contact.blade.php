@extends('layouts.app')

@section('title', $page->title)

@push('styles')
<style>
    .contact-header {
        /*background: linear-gradient(135deg, #28a745 0%, #20c997 100%);*/
        /*color: white;*/
        /*padding: 4rem 0;*/
        /*margin-bottom: 2rem;*/
    }
    
    .contact-form {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        padding: 3rem;
        margin-top: -3rem;
        position: relative;
        z-index: 10;
    }
    
    .contact-info-card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        padding: 2rem;
        text-align: center;
        height: 100%;
        transition: transform 0.3s ease;
    }
    
    .contact-info-card:hover {
        transform: translateY(-5px);
    }
    
    .contact-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.8rem;
    }
    
    .map-container {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    
    .faq-section {
        background: #f8f9fa;
        border-radius: 1rem;
        padding: 2rem;
        margin-top: 2rem;
    }
    
    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }
    
    .btn-contact {
        background: linear-gradient(45deg, #28a745, #20c997);
        border: none;
        padding: 0.75rem 2rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .contact-header{
        background: linear-gradient(135deg, #1E2A4A 0%, #2D3E66 100%)!important;
    padding: 60px 20px 80px;
    /*position: relative;*/
    color:#fff;
    overflow: hidden;

    }
</style>
@endpush

@section('content')
<!-- Contact Header -->
<div class="contact-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4" style="font-weight:700">{{ $page->title }}</h1>
                @if($page->excerpt)
                    <p class="lead mb-0" >{{ $page->excerpt }}</p>
                @else
                    <p class="lead mb-0">At Patron Accounting, we believe professional support should be accessible, responsive, and reliable. Whether you’re a startup, small business, NGO, or an established organisation, our experts are here to guide you with accurate accounting, taxation, and compliance solutions.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- Contact Form -->
        <div class="col-lg-8 mb-5">
            <div class="contact-form">
                <h3 class="mb-4"><i class="bi bi-envelope text-success"></i> Send us a Message</h3>
                
                <!--<form action="/contact" method="POST">-->
                <!--    @csrf-->
                <!--    <div class="row">-->
                <!--        <div class="col-md-6 mb-3">-->
                <!--            <label for="first_name" class="form-label">First Name *</label>-->
                <!--            <input type="text" class="form-control" id="first_name" name="first_name" required>-->
                <!--        </div>-->
                <!--        <div class="col-md-6 mb-3">-->
                <!--            <label for="last_name" class="form-label">Last Name *</label>-->
                <!--            <input type="text" class="form-control" id="last_name" name="last_name" required>-->
                <!--        </div>-->
                <!--    </div>-->
                    
                <!--    <div class="row">-->
                <!--        <div class="col-md-6 mb-3">-->
                <!--            <label for="email" class="form-label">Email Address *</label>-->
                <!--            <input type="email" class="form-control" id="email" name="email" required>-->
                <!--        </div>-->
                <!--        <div class="col-md-6 mb-3">-->
                <!--            <label for="phone" class="form-label">Phone Number</label>-->
                <!--            <input type="tel" class="form-control" id="phone" name="phone">-->
                <!--        </div>-->
                <!--    </div>-->
                    
                <!--    <div class="mb-3">-->
                <!--        <label for="subject" class="form-label">Subject *</label>-->
                <!--        <select class="form-control" id="subject" name="subject" required>-->
                <!--            <option value="">Choose a subject...</option>-->
                <!--            <option value="general">General Inquiry</option>-->
                <!--            <option value="support">Technical Support</option>-->
                <!--            <option value="billing">Billing Question</option>-->
                <!--            <option value="partnership">Partnership</option>-->
                <!--            <option value="other">Other</option>-->
                <!--        </select>-->
                <!--    </div>-->
                    
                <!--    <div class="mb-4">-->
                <!--        <label for="message" class="form-label">Message *</label>-->
                <!--        <textarea class="form-control" id="message" name="message" rows="6" -->
                <!--                  placeholder="Tell us how we can help you..." required></textarea>-->
                <!--    </div>-->
                    
                <!--    <div class="form-check mb-4">-->
                <!--        <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">-->
                <!--        <label class="form-check-label" for="newsletter">-->
                <!--            I'd like to receive updates and newsletters-->
                <!--        </label>-->
                <!--    </div>-->
                    
                <!--    <button type="submit" class="btn btn-success btn-contact btn-lg">-->
                <!--        <i class="bi bi-send"></i> Send Message-->
                <!--    </button>-->
                <!--</form>-->
                
                                             <div class='wf-parent row'  id='BiginWebToRecordFormParent208810000000579045' >
	<div class='wf-wrapper ' id='BiginWebToRecordFormDiv208810000000579045'>
	<form id='BiginWebToRecordForm208810000000579045' name='BiginWebToRecordForm208810000000579045' class='wf-form-component registration-form' data-ux-form-alignment='top' method='POST' enctype='multipart/form-data' target='hidden208810000000579045Frame' onSubmit='javascript:document.charset="UTF-8"; return validateForm208810000000579045()' accept-charset='UTF-8' >

 	<input type='text' style='display:none;' name='xnQsjsdp' value='795ef8f70f1c54b1a9e83bcfd6fafa58a8d2b1c9dce286f0029e1130b56a6785'/>
 	<input type='hidden' name='zc_gad' id='zc_gad' value=''/>
 	<input type='text' style='display:none;' name='xmIwtLD' value='68068a589747e0631f4703c9e56d44219029e87402543e29b2dba1288ae50f8da36096355314aa3e546c881e9b066143'/>
 	<input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
 	<input type='hidden' name='rmsg' id='rmsg' value='true'/>
 	<input type='text' style='display:none;' name='returnURL' value='null' />
 	
 	<div id='elementDiv208810000000579045' class='wf-form-wrapper'>
 	 	        <div class='mb-3'>
 	 	 	 	<input name='Contacts.Last Name' type='text' value='' class='wf-field-item wf-field-input form-control form-control-lg registration-form-input' oninput='removeError(this)' placeholder='Your Name' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;' />
 	 	 	 	</div>
 	 	 	    <div class='mb-3'>
 	 	 	 	<input fvalidate='true' ftype='email' name='Contacts.Email' type='text' value='' class='wf-field-item wf-field-input form-control form-control-lg registration-form-input' oninput='removeError(this)' placeholder='Your Email id.' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;' />
 	 	 	 	</div>
 	 	 	 	    <div class='mb-3'>
                                <div class='input-group'>
                                    <span class='input-group-text d-flex align-items-center gap-2'
                                        style='border-radius: 10px 0 0 10px; border: 1px solid #ddd; background: white; padding: 15px 12px;'>
                                        <img src='{{ asset("images/india.png") }}' alt='India Flag'
                                            style='width: 53px; height: 36px;'>
                                        <span  style='display: flex; align-items: center; justify-content: center; font-weight: 500; color: #61666D; font-size: 16px; border: 1px solid #CDCDCD; border-radius: 8px; width: 54px; height: 42px;'>+91</span>
                                    </span>
                                    <!--<input type='tel'-->
                                    <!--    class='form-control form-control-lg registration-form-input @error('mobile') is-invalid @enderror'-->
                                    <!--    name='mobile' placeholder='Your Mobile no.' value='{{ old('mobile') }}' required-->
                                    <!--    pattern='[0-9]{10}' maxlength='10'-->
                                    <!--    oninput='this.value = this.value.replace(/[^0-9]/g, "")'-->
                                    <!--    title='Please enter a valid 10-digit mobile number'-->
                                    <!--    style='border-radius: 0 10px 10px 0; border: 1px solid #ddd; border-left: none; padding: 15px; ' value='' oninput='removeError(this)'>-->
                                        
                                        <input fvalidate='true' ftype='mobile' name='Contacts.Mobile'  class='wf-field-item wf-field-input form-control form-control-lg registration-form-input @error('mobile') is-invalid @enderror' maxlength='30' type='text' value='' pattern='[0-9]{10}' maxlength='10'  oninput='this.value = this.value.replace(/[^0-9]/g, "")'
                                            title='Please enter a valid 10-digit mobile number' style='border-radius: 0 10px 10px 0; border: 1px solid #ddd; border-left: none; padding: 15px; ' required
                                        />
                                    <!--<input ftype='dialcode' name='Contacts.Mobile' maxlength='30' type='text' style='display:none;'/>-->
                                    @error('mobile')
                                    <div class='invalid-feedback'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
 	 	 	 	
 	 	 	 	
 	 	 	 	<div class='wf-field-inner mb-3'>
 	 	 	 	<input name='Contacts.Mailing City' type='text' value='' class='wf-field-item wf-field-input form-control form-control-lg registration-form-input' oninput='removeError(this)' placeholder='City/Pincode' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;' required/>
 	 	 	 	</div>
 	 
 	 	<div class='wf-row' style='display:none;';>  
 	 	 	<div class='wf-label'>Sub-Pipeline</div>
 	 	 	<div class='wf-field'>
 	 	 	 	<div class='wf-field-inner dropdown-contents'>
 	 	 	 	<select name='Pipeline' class='wf-field-item wf-field-dropdown' data-wform-field='select' onchange='removeError(this);'>
 	 	 	 	 	<option selected value='Standard'>Standard</option>
 	 	 	 	</select>
 	 	 	 	</div>
 	 	 	</div>
 	 	</div>
 	 	<div class='wf-row' style='display:none;';>  
 	 	 	<div class='wf-label'>Stage</div>
 	 	 	<div class='wf-field'>
 	 	 	 	<div class='wf-field-inner dropdown-contents'>
 	 	 	 	<select name='Stage' class='wf-field-item wf-field-dropdown' data-wform-field='select' onchange='removeError(this);'>
 	 	 	 	 	<option selected value='Qualification'>Qualification</option>

 	 	 	 	</select>
 	 	 	 	</div>
 	 	 	</div>
 	 	</div>
 	 	<div class='wf-row' style='display:none;';>  
 	 	 	<div class='wf-label'>Deal Name</div>
 	 	 	<div class='wf-field'>
 	 	 	 	<div class='wf-field-inner'>
 	 	 	 	<input name='Potential Name' maxlength='120' type='text' value='New Lead' class='wf-field-item wf-field-input' oninput='removeError(this)'/>
 	 	 	 	</div>
 	 	 	</div>
 	 	</div>
 	 	<div class='wform-btn-wrap' data-ux-pos='left'>
 	 	 	<input id='formsubmit' type='submit' class='wf-btn w-100' data-ux-btn-type='default' style="background-color: #F26522; color: white; font-family: 'DM Sans', sans-serif; font-weight: 600; font-size: 16px; padding: 15px; border-radius: 10px; border: none; transition: all 0.3s ease;" value='Get started now'/>
 	 	</div>
	</div>
	</form>
	</div>
</div>        
            </div>
        </div>
        
        <!-- Contact Information -->
        <div class="col-lg-4 mb-5">
            <div class="row g-4">
                <div class="col-12">
                    <div class="contact-info-card">
                        <div class="contact-icon bg-primary text-white">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h5 class="mb-3">Head Office</h5>
                        <p class="text-muted mb-0">
                            Office No B4, <br>RTC Silver, Wagholi, <br>Pune, Maharashtra-412207
                            
                        </p>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="contact-info-card">
                        <div class="contact-icon bg-success text-white">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h5 class="mb-3">Phone & Email</h5>
                        <p class="text-muted mb-2">
<strong>Phone:</strong>
<a href="tel:+919459456700" style="text-decoration:none; color:inherit;">
  +91 9459456700
</a><br>

<strong>Email:</strong>
<a href="mailto:sales@patronaccounting.com" style="text-decoration:none; color:inherit;">
  sales@patronaccounting.com
</a>

                        </p>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="contact-info-card">
                        <div class="contact-icon bg-info text-white">
                            <i class="bi bi-clock"></i>
                        </div>
                        <h5 class="mb-3">Business Hours</h5>
                        <p class="text-muted mb-0">
                            <strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM<br>
                            <strong>Saturday:</strong> 10:00 AM - 4:00 PM<br> <span>(Closed on the 1st and 4th Saturday of each month)</span> <br>
                            <strong>Sunday:</strong> Closed
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Page Content -->
    <!--@if($page->content)-->
    <!--    <div class="row mb-5">-->
    <!--        <div class="col-12">-->
    <!--            <div class="page-content">-->
    <!--                {!! $page->content !!}-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--@endif-->
    
    <!-- Map Section -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="mb-4 text-center">Find Us on the Map</h3>
            <div class="map-container">
                <!-- Replace with actual Google Maps embed -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60509.59755125826!2d73.9638807!3d18.580807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c159ec4ca057%3A0xa3321f8b681f20cb!2sPatron%20Accounting%20LLP!5e0!3m2!1sen!2sin!4v1769110200524!5m2!1sen!2sin" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    
    <!-- FAQ Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="faq-section">
                <h3 class="mb-4"><i class="bi bi-question-circle text-info"></i> Frequently Asked Questions</h3>
                
                <div class="accordion" id="contactFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                How quickly do you respond to messages?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call us directly.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                What information should I include in my message?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Please provide as much detail as possible about your inquiry, including your contact preferences and any relevant background information.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                Do you offer phone consultations?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Yes! We offer phone consultations by appointment. Please mention in your message that you'd prefer a phone consultation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Social Media Links -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h4 class="mb-4">Connect with Us</h4>
            <div class="d-flex justify-content-center gap-3">
                <!--<a href="#" class="btn btn-outline-primary btn-lg">-->
                <!--    <i class="bi bi-facebook"></i>-->
                <!--</a>-->
                <!--<a href="#" class="btn btn-outline-info btn-lg">-->
                <!--    <i class="bi bi-twitter"></i>-->
                <!--</a>-->
                <a href="https://www.instagram.com/patronaccounting/" class="btn btn-outline-danger btn-lg">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://in.linkedin.com/company/patron-accounting-llp" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Categories -->
    @if($page->categories->count() > 0)
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h5 class="mb-3">Related Topics</h5>
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    @foreach($page->categories as $category)
                        <a href="{{ url('/page-categories/' . $category->slug) }}" 
                           class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-tag"></i> {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
@endsection

@push('scripts')
<script>
// Form validation
document.querySelector('form').addEventListener('submit', function(e) {
    const requiredFields = ['first_name', 'last_name', 'email', 'subject', 'message'];
    let isValid = true;
    
    requiredFields.forEach(field => {
        const input = document.getElementById(field);
        if (!input.value.trim()) {
            input.classList.add('is-invalid');
            isValid = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });
    
    if (!isValid) {
        e.preventDefault();
        alert('Please fill in all required fields.');
    }
});

// Remove invalid class on input
document.querySelectorAll('input, select, textarea').forEach(field => {
    field.addEventListener('input', function() {
        this.classList.remove('is-invalid');
    });
});
</script>

<script>
 	  var mndFields208810000000579045=new Array('Contacts.Last\x20Name','Contacts.Mailing\x20City');
 	  var fldLangVal208810000000579045=new Array('Name','City');
 	 var wfInnerWidth = window.innerWidth;
 	 if(wfInnerWidth <= 768){
 	 	 document.forms['BiginWebToRecordForm208810000000579045'].setAttribute('data-ux-form-alignment', 'top');
 	 }
 	function removeError(fieldObj) {
 	 	var parentElement = fieldObj.closest('.wf-field'),
 	 	 	childEle = parentElement.getElementsByClassName('wf-error-parent-ele')[0];
 	 	if(childEle) {
 	 	 	parentElement.classList.remove('wf-field-error-active');
 	 	 	parentElement.removeChild(parentElement.getElementsByClassName('wf-error-parent-ele')[0]);
 	 	}
 	}
 	function setError(fieldObj, label) {
 	 	var parentElement = fieldObj.closest('.wf-field'),
 	 		childEle = parentElement.getElementsByClassName('wf-error-parent-ele')[0];
 	 	if(!childEle) {
 	 	 	var errorParentEle = document.createElement('DIV'),
 	 	 	spanEle = document.createElement('SPAN'),
 	 	 	viewMoreEle = document.createElement('SPAN');
 	 	 	spanEle.setAttribute('class', 'wf-field-error wf-field-error-long');
 	 	 	spanEle.innerHTML = label;
 	 	 	errorParentEle.classList.add('wf-error-parent-ele');
 	 	 	errorParentEle.appendChild(spanEle);
 	 	 	parentElement.append(errorParentEle);
 	 	 	parentElement.classList.add('wf-field-error-active');
 	 	 	if(spanEle.scrollWidth > parentElement.offsetWidth) {
 	 	 	 	viewMoreEle.innerHTML = 'View More';
 	 	 	 	viewMoreEle.classList.add('wf-error-view-more');
 	 	 	 	errorParentEle.append(viewMoreEle);
 	 	 	 	viewMoreEle.addEventListener('click', function() {
 	 	 	 	errorParentEle.removeChild(viewMoreEle);
 	 	 	 	spanEle.classList.remove('wf-field-error-long');
 	 	 	 	});
 	 	 	} else {
 	 	 	 	spanEle.classList.remove('wf-field-error-long')
 	 	 	}
 	 	}
 	}
 	function validateFields208810000000579045() {
 	 	var isReturn = true;
 	 	var form = document.forms['BiginWebToRecordForm208810000000579045'];
 	 	var validateFld = form.querySelectorAll('[fvalidate=true]');
 	 	var i;
 	 	for (i = 0; i < validateFld.length; i++)
 	 	{
 	 	 	var validateFldVal = validateFld[i].value;
 	 	 	var fType = validateFld[i].getAttribute('ftype');
 	 	 	if(validateFldVal !== '' || (validateFldVal === '' && fType.indexOf('date') !== -1)) {
 	 	 	 	var wfLabel = validateFld[i].parentElement.parentElement.parentElement.getElementsByClassName('wf-label')[0];
 	 	 	 	var fLabel = wfLabel ? wfLabel.innerHTML: '';
 	 	 	 	switch(validateFld[i].getAttribute('ftype')) {
 	 	 	 	case 'string_rest_number':
 	 	 	 	case 'string':
 	 	 	 	 	var isError = false,
 	 	 	 	 	errorKey = 'Only letters are allowed.';
 	 	 	 	 	if(validateFld[i].getAttribute('ftype') === 'string_rest_number' && validateFldVal.match((/\d/g)) !== null) {	
 	 	 	 	 	 	isError = true;
 	 	 	 	 	}else if(validateFld[i].hasAttribute('fmin')){
 	 	 	 	 	 	if(validateFldVal.length < parseInt(validateFld[i].getAttribute('fmin'))) {
 	 	 	 	 	 	 	errorKey = 'Your input must be at least ' +validateFld[i].getAttribute('fmin') + ' character(s).';
 	 	 	 	 	 	 	isError = true;
 	 	 	 	 	 	} else if(validateFldVal.length > parseInt(validateFld[i].getAttribute('fmax'))) {
 	 	 	 	 	 	 	errorKey = 'Your input should not exceed ' +validateFld[i].getAttribute('fmax') + ' character(s).';
 	 	 	 	 	 	 	isError = true;
 	 	 	 	 	 	}
 	 	 	 	 	}
 	 	 	 	 	if(isError){
 	 	 	 	 	 	setError(validateFld[i], errorKey);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	}
 	 	 	 	 	break;
 	 	 	 	case 'email':
 	 	 	 	 	if(validateFldVal.match(/^([A-Za-z0-9-._%'+/]+@[A-Za-z0-9.-]+.[a-zA-Z]{2,22})$/) === null) {
 	 	 	 	 	 	setError(validateFld[i], 'Enter valid ' + fLabel);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	}
 	 	 	 	 	break;
 	 	 	 	case 'number':
 	 	 	 	case 'double':
 	 	 	 	 	var isError = false,
 	 	 	 	 	errorKey = 'Enter valid ' + fLabel;
 	 	 	 	 	if((validateFld[i].getAttribute('ftype') === 'number' && validateFldVal.match(/^[0-9]+$/) === null)
 	 	 	 	 			|| (validateFld[i].getAttribute('ftype') === 'double' && validateFldVal.match(/^[0-9]*(\.[0-9]{0,2})?$/) === null)) {
 	 	 	 	 	 	isError = true;
 	 	 	 	 	}else if(validateFld[i].hasAttribute('fmin')){
 	 	 	 	 	 	if(validateFldVal < parseInt(validateFld[i].getAttribute('fmin'))) {
 	 	 	 	 	 	 	errorKey = 'Enter a number greater than or equal to ' +validateFld[i].getAttribute('fmin');
 	 	 	 	 	 	 	isError = true;
 	 	 	 	 	 	} else if(validateFldVal > parseInt(validateFld[i].getAttribute('fmax'))) {
 	 	 	 	 	 	 	errorKey = 'Enter a number less than or equal to ' +validateFld[i].getAttribute('fmax');
 	 	 	 	 	 	 	isError = true;
 	 	 	 	 	 	}
 	 	 	 	 	}
 	 	 	 	 	if(isError){
 	 	 	 	 	 	setError(validateFld[i], errorKey);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	}
 	 	 	 	 	break;
 	 	 	 	case 'mobile':
 	 	 	 	 	 if(validateFldVal.match(/^[0-9a-zA-Z+.()\-;\s]+$/) === null) {
 	 	 	 	 	 	setError(validateFld[i], 'Enter valid ' + fLabel);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	 }
 	 	 	 	 	break;
 	 	 	 	 }
 	 	 	}
 	 	}
 	 	return isReturn;
 	}

		function checkMandatory208810000000579045() {
		var isReturn = true;
		var isNotCaptcha = false;
		for(i=0;i<mndFields208810000000579045.length;i++) {
		  var fieldObj=document.forms['BiginWebToRecordForm208810000000579045'][mndFields208810000000579045[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
				if(fieldObj.type =='file'){
					setError(fieldObj, 'Please select a file to upload.'); 
					isReturn = false;
				}
				else {
					setError(fieldObj, fldLangVal208810000000579045[i] + ' cannot be empty');
				isReturn= false;
				}
			}  else if(fieldObj.nodeName=='SELECT') {
				if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				setError(fieldObj, fldLangVal208810000000579045[i] +' cannot be none.');
				isReturn = false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				setError(fieldObj, 'Please accept  '+fldLangVal208810000000579045[i]);
				isReturn= false;
				} 
			 }
		    }
		}
		 isNotCaptcha = true;
		if(!validateFields208810000000579045()){isReturn = false;}
		if(!isReturn){
			var errEle = document.getElementsByClassName('wf-field-error');
			if(errEle && errEle.length >0){
				var inputEle = errEle[0].closest('.wf-field').getElementsByTagName('input');
				if(inputEle && inputEle.length == 0) {
					inputEle = errEle[0].closest('.wf-field').getElementsByTagName('select');
				}
				if(inputEle && inputEle.length > 0) {
					inputEle[0].focus();
				}
			}
		}else if(isNotCaptcha){
			document.getElementById('formsubmit').disabled = true;
		}
		return isReturn; 
		}

	   
		document.getElementById('hidden208810000000579045Frame').addEventListener('load', function () {
			try {
				var doc = arguments[0].currentTarget.contentWindow.document;
				if(doc.body.childElementCount !== 0) {
					arguments[0].currentTarget.style.display = 'block';
					document.getElementById('BiginWebToRecordFormParent208810000000579045').style.display = 'none';
				}
			} catch (error) {
				arguments[0].currentTarget.style.display = 'block';
				document.getElementById('BiginWebToRecordFormParent208810000000579045').style.display = 'none'
			}
		});
</script>
 	 <script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=f26c7ff799b3eaf0c3606838e88b274be7c9911af160c3db82aa11f7d01dca343d6bb7afabda191c26b8dcf1a273e9cfgidb215ea2680256b8fe2d35a432e6cb566a42a8aae3149a75892a75de20a91bd11'></script>

@endpush