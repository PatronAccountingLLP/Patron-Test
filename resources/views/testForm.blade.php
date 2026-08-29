{{-- This page carries its own working Bigin form (the Hub v2 template), so the
     site-wide band in the layout must stand down or the page shows two. --}}
@php
    config(['pa.enquiry_form_rendered' => true]);
@endphp
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
    
     @include('partials.form-placeholder', [
    'phTitle' => 'Form placeholder',
    'phNote'  => 'The enquiry form has been removed from this page.',
])

</body>
</html>