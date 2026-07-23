<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    
.registration-form-input {
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #61666D !important;
}

.registration-form-input::placeholder {
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #61666D !important;
}

.registration-submit-btn {
    width: 422px;
    height: 44px;
    opacity: 1;
    gap: 10px;
    border-radius: 100px;
    padding: 10px 141px;
    background-color: #F26522 !important;
    border: none !important;
    color: white !important;
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 20px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    transition: all 0.3s ease;
}

.registration-submit-btn:hover {
    background-color: #e55722 !important;
    color: white !important;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(242, 101, 34, 0.3);
}

</style>
<body>
 <!--<form action="{{ route('frontend.company-registration') }}" method="POST" class="registration-form">-->
 <!--                           @csrf-->
                             <!--Name Field -->
 <!--                           <div class="mb-3">-->
 <!--                               <input type="text"-->
 <!--                                   class="form-control form-control-lg registration-form-input @error('name') is-invalid @enderror"-->
 <!--                                   name="name" placeholder="Your Name" value="{{ old('name') }}" required-->
 <!--                                   style="border-radius: 10px; border: 1px solid #ddd; padding: 15px;">-->
 <!--                               @error('name')-->
 <!--                               <div class="invalid-feedback">{{ $message }}</div>-->
 <!--                               @enderror-->
 <!--                           </div>-->

                             <!--Email Field -->
 <!--                           <div class="mb-3">-->
 <!--                               <input type="email"-->
 <!--                                   class="form-control form-control-lg registration-form-input @error('email') is-invalid @enderror"-->
 <!--                                   name="email" placeholder="Your Email id." value="{{ old('email') }}" required-->
 <!--                                   style="border-radius: 10px; border: 1px solid #ddd; padding: 15px;">-->
 <!--                               @error('email')-->
 <!--                               <div class="invalid-feedback">{{ $message }}</div>-->
 <!--                               @enderror-->
 <!--                           </div>-->

                             <!--Mobile Field with India Flag -->
 <!--                           <div class="mb-3">-->
 <!--                               <div class="input-group">-->
 <!--                                   <span class="input-group-text d-flex align-items-center gap-2"-->
 <!--                                       style="border-radius: 10px 0 0 10px; border: 1px solid #ddd; background: white; padding: 15px 12px;">-->
 <!--                                       <img src="{{ asset('images/india.png') }}" alt="India Flag"-->
 <!--                                           style="width: 53px; height: 36px;">-->
 <!--                                       <span-->
 <!--                                           style="display: flex; align-items: center; justify-content: center; font-weight: 500; color: #61666D; font-size: 16px; border: 1px solid #CDCDCD; border-radius: 8px; width: 54px; height: 42px;">+91</span>-->
 <!--                                   </span>-->
 <!--                                   <input type="tel"-->
 <!--                                       class="form-control form-control-lg registration-form-input @error('mobile') is-invalid @enderror"-->
 <!--                                       name="mobile" placeholder="Your Mobile no." value="{{ old('mobile') }}" required-->
 <!--                                       pattern="[0-9]{10}" maxlength="10"-->
 <!--                                       oninput="this.value = this.value.replace(/[^0-9]/g, '')"-->
 <!--                                       title="Please enter a valid 10-digit mobile number"-->
 <!--                                       style="border-radius: 0 10px 10px 0; border: 1px solid #ddd; border-left: none; padding: 15px;">-->
 <!--                                   @error('mobile')-->
 <!--                                   <div class="invalid-feedback">{{ $message }}</div>-->
 <!--                                   @enderror-->
 <!--                               </div>-->
 <!--                           </div>-->

                             <!--City/Pincode Field -->
 <!--                           <div class="mb-3">-->
 <!--                               <input type="text"-->
 <!--                                   class="form-control form-control-lg registration-form-input @error('location') is-invalid @enderror"-->
 <!--                                   name="location" placeholder="City/Pincode" value="{{ old('location') }}" required-->
 <!--                                   style="border-radius: 10px; border: 1px solid #ddd; padding: 15px;">-->
 <!--                               @error('location')-->
 <!--                               <div class="invalid-feedback">{{ $message }}</div>-->
 <!--                               @enderror-->
 <!--                           </div>-->

                             <!--WhatsApp Updates Toggle -->
 <!--                           <div class="mb-4 d-flex align-items-center">-->
 <!--                               <span style="font-size: 16px; font-weight: 500; color: #61666D;">Get updates on</span>-->
 <!--                               <img src="{{ asset('images/whatsapp.svg') }}" alt="WhatsApp" class="mx-2"-->
 <!--                                   style="width: 22px; height: 22px;">-->
 <!--                               <span style="font-size: 16px; font-weight: 500; color: #61666D;">WhatsApp</span>-->
 <!--                               <div class="form-check form-switch mx-2">-->
 <!--                                   <input class="form-check-input whatsapp-switch" type="checkbox" id="whatsappUpdates"-->
 <!--                                       name="whatsapp_updates" checked="">-->
 <!--                                   <label class="form-check-label" for="whatsappUpdates"></label>-->
 <!--                               </div>-->
 <!--                           </div>-->

 <!--                           <button type="submit" class="btn w-100"-->
 <!--                               style="background-color: #F26522; color: white; font-family: 'DM Sans', sans-serif; font-weight: 600; font-size: 16px; padding: 15px; border-radius: 10px; border: none; transition: all 0.3s ease;">-->
 <!--                               Get started now-->
 <!--                           </button>-->
 <!--                       </form>    -->
    
<iframe id='hidden208810000000579045Frame' name='hidden208810000000579045Frame' style='display: none;' ></iframe>
     <div class='wf-parent row'  id='BiginWebToRecordFormParent208810000000579045' >
	<<div class='wf-wrapper' id='BiginWebToRecordFormDiv208810000000579045'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
	<form id='BiginWebToRecordForm208810000000579045' name='BiginWebToRecordForm208810000000579045' class='wf-form-component' data-ux-form-alignment='top' style='font-family: Calibri, Candara, Segoe, Segoe UI, Optima, Arial;position: relative;font-size:16px;' method='POST' enctype='multipart/form-data' target='hidden208810000000579045Frame' onSubmit='javascript:document.charset="UTF-8"; return validateForm208810000000579045()' accept-charset='UTF-8'>
<!-- Do not remove this code. -->
 	<input type='text' style='display:none;' name='xnQsjsdp' value='395847d01272628a22ee2ef63d33ebba6f31cbfc5455c1323ad866cca6b97803'/>
 	<input type='hidden' name='zc_gad' id='zc_gad' value=''/>
 	<input type='text' style='display:none;' name='xmIwtLD' value='d8a0a423c36e2660f6ef9f769e4905683359ff6b2e41fed3862393301e04f8ff23b0383a34ca5e89293221c35fd59a78'/>
 	<input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
 	<input type='hidden' name='rmsg' id='rmsg' value='true'/>
 	<input type='text' style='display:none;' name='returnURL' value='null' />
 	<!--<div class='wf-logo' data-ux-logo-pos='center' data-ux-logo-size='md'><img src='https://bigin.zoho.in/crm/WebformImgServlet?type=logo&rid=d8a0a423c36e2660f6ef9f769e4905683359ff6b2e41fed3862393301e04f8ff23b0383a34ca5e89293221c35fd59a78gid395847d01272628a22ee2ef63d33ebba6f31cbfc5455c1323ad866cca6b97803'/></div>-->
 	<!--<div class='wf-header'>Enquiry Form</div>-->
 	
 	<div id='elementDiv208810000000579045' class='wf-form-wrapper'>
 	 	        <div class='mb-3'>
 	 	 	 	<input name='Contacts.Last Name' type='text' value='' class='wf-field-item wf-field-input form-control form-control-lg registration-form-input' oninput='removeError(this)' placeholder='Your Name' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;' />
 	 	 	 	</div>
 	 	 	    <div class='mb-3'>
 	 	 	 	<input fvalidate='true' ftype='email' name='Contacts.Email' type='text' value='' class='wf-field-item wf-field-input form-control form-control-lg registration-form-input' oninput='removeError(this)' placeholder='Your Email id.' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;' />
 	 	 	 	</div>
 	 	 	 	 	<div class='wf-row'>  
 	 	 	<div class='wf-label'>Mobile</div>
 	 	 	<div class='wf-field'>
 	 	 	 	<div class='wf-field-inner'>
 	 	 	 	<input fvalidate='true' ftype='mobile' name='Contacts.Mobile' maxlength='30' type='text' value='' class='wf-field-item wf-field-input' oninput='removeError(this)'/>
 	 	 	 	</div>
 	 	 	</div>
 	 	</div>
 	 	 	 	
 	 	 	 	
 	 	 	 	<div class='wf-field-inner mb-3'>
 	 	 	 	<input name='Contacts.Mailing City' type='text' value='' class='wf-field-item wf-field-input form-control form-control-lg registration-form-input' oninput='removeError(this)' placeholder='City/Pincode' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;'/>
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
 	 <script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=f26c7ff799b3eaf0c3606838e88b274be7c9911af160c3db82aa11f7d01dca343d6bb7afabda191c26b8dcf1a273e9cfgidb215ea2680256b8fe2d35a432e6cb566a42a8aae3149a75892a75de20a91bd11'></script></body>
</html>