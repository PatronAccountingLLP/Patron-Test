@extends('layouts.app')

{{-- This page carries its own working Bigin form (the Hub v2 template), so the
     site-wide band in the layout must stand down or the page shows two. --}}
@php
    config(['pa.enquiry_form_rendered' => true]);
@endphp
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
    

    .pa-c-mainpages-head {
        font-family: 'Barlow', sans-serif; font-weight: 700; color: #14365F;
        font-size: 22px; margin-bottom: 16px;
    }
    .pa-c-mainpages { display: flex; flex-wrap: wrap; gap: 10px; }
    .pa-c-mainpage {
        display: inline-block; padding: 9px 16px; border-radius: 999px;
        border: 1px solid #DDE3EA; background: #fff; color: #14365F;
        font-size: 14px; font-weight: 600; text-decoration: none;
        transition: border-color .2s ease, color .2s ease, background .2s ease;
    }
    .pa-c-mainpage:hover { border-color: #F26522; color: #F26522; background: #FFF7F3; }

    .pa-c-link {
        color: #F26522;
        text-decoration: none;
        font-weight: 600;
        transition: color .2s ease;
    }
    .pa-c-link:hover { color: #14365F; text-decoration: underline; }
    .contact-info-card .pa-c-link { display: inline-block; }
    .pa-c-maps { display: block; margin-top: 10px; font-size: 13px; }

    .pa-c-offices { margin-top: 32px; }
    .pa-c-offices-head {
        font-family: 'Barlow', sans-serif; font-weight: 700; color: #14365F;
        font-size: 22px; margin-bottom: 18px;
    }
    .pa-c-off { height: 100%; display: flex; flex-direction: column; }
    .pa-c-off-city {
        font-family: 'Barlow', sans-serif; font-weight: 700; color: #14365F;
        font-size: 17px; margin-bottom: 8px;
    }
    .pa-c-off-addr { font-size: 14px; line-height: 1.6; margin-bottom: 12px; flex: 1; }
    .pa-c-off-bot {
        display: flex; justify-content: space-between; align-items: center;
        gap: 12px; font-size: 13px; flex-wrap: wrap;
    }
    .pa-c-off-hours { color: #6B7683; }
    .pa-c-off-bot a { color: #F26522; text-decoration: none; font-weight: 600; }
    .pa-c-off-bot a:hover { text-decoration: underline; }

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
                
{{-- The Bigin form that stood here posted to webform 208810000000579045, the
     TEST form, so its leads never reached the CRM. Removed rather than replaced:
     this page already carries a working enquiry form posting to /contact, and the
     FAQ block below renders partials/faq-enquiry-form. --}}
        
            </div>
        
                {{-- Our other offices. Fills the space left by the short form
                     column, and puts the four non-HQ offices on a page that
                     previously showed only Pune. --}}
                <div class="pa-c-offices">
                    <h4 class="pa-c-offices-head">Our Other Offices</h4>
                    <div class="row g-4">
                    <div class="col-md-6">
                        <div class="contact-info-card pa-c-off">
                            <h6 class="pa-c-off-city">Mumbai</h6>
                            <p class="text-muted pa-c-off-addr">104, Rajshila Building, 597 J.S.S. Rd,<br>Marine Lines, Mumbai &ndash; 400002</p>
                            <div class="pa-c-off-bot"><span class="pa-c-off-hours">Mon&ndash;Sat 9&ndash;5</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+Rajshila+Building+597+JSS+Road+Marine+Lines+Mumbai+400002" target="_blank" rel="noopener">View on Maps &rarr;</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-card pa-c-off">
                            <h6 class="pa-c-off-city">Delhi</h6>
                            <p class="text-muted pa-c-off-addr">3rd Floor, B-6/154-155,<br>Sector 5, Rohini, Delhi &ndash; 110085</p>
                            <div class="pa-c-off-bot"><span class="pa-c-off-hours">Open 24/7</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+B-6+154-155+Sector+5+Rohini+Delhi+110085" target="_blank" rel="noopener">View on Maps &rarr;</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-card pa-c-off">
                            <h6 class="pa-c-off-city">Gurugram</h6>
                            <p class="text-muted pa-c-off-addr">Pioneer Urban Square, B109,<br>Golf Course Ext Rd, Sector 62, Gurugram &ndash; 122098</p>
                            <div class="pa-c-off-bot"><span class="pa-c-off-hours">Mon&ndash;Sun 9&ndash;7</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+Pioneer+Urban+Square+B109+Golf+Course+Ext+Road+Sector+62+Gurugram+122098" target="_blank" rel="noopener">View on Maps &rarr;</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-card pa-c-off">
                            <h6 class="pa-c-off-city">Ahmedabad</h6>
                            <p class="text-muted pa-c-off-addr">Phoenix Tower, 1107, near Commerce Six Road,<br>Drive In Rd, Navrangpura, Ahmedabad &ndash; 380009</p>
                            <div class="pa-c-off-bot"><span></span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+Phoenix+Tower+1107+Commerce+Six+Road+Drive+In+Road+Navrangpura+Ahmedabad+380009" target="_blank" rel="noopener">View on Maps &rarr;</a></div>
                        </div>
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
                            <a class="pa-c-link" href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+RTC+Silver+Sai+Satyam+Park+Wagholi+Pune+412207" target="_blank" rel="noopener">
                                Office No B4, <br>RTC Silver, Wagholi, <br>Pune, Maharashtra-412207
                            </a>
                            <span class="pa-c-maps"><a class="pa-c-link" href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+RTC+Silver+Sai+Satyam+Park+Wagholi+Pune+412207" target="_blank" rel="noopener">View on Maps &rarr;</a></span>
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
<a class="pa-c-link" href="tel:+919459456700">
  +91 9459456700
</a><br>

<strong>Email:</strong>
<a class="pa-c-link" href="mailto:sales@patronaccounting.com">
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
    
    {{-- FAQ. Uses the sitewide expanded-FAQ partial (class contract in
                 /css/faq.css, toggle in /js/faq-toggle.js) rather than the
                 Bootstrap accordion this template shipped with, so it matches
                 every other FAQ on the site and emits FAQPage schema. The
                 partial renders its enquiry form in the left column. --}}
            @include('partials.faq-section', [
                    'faqs' => [
                        ['question' => 'How quickly do you respond to messages?',
                         'answer'   => 'We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call us directly.'],
                        ['question' => 'What information should I include in my message?',
                         'answer'   => 'Please provide as much detail as possible about your inquiry, including your contact preferences and any relevant background information.'],
                        ['question' => 'Do you offer phone consultations?',
                         'answer'   => 'Yes! We offer phone consultations by appointment. Please mention in your message that you\'d prefer a phone consultation.'],
                    ],
                    'lead' => 'Quick answers to what we are asked most. Prefer to talk it through? Send the form and a CA will come back to you.',
                    'sectionId' => 'contact-faq',
                    'includeSchema' => true,
                ])

            {{-- Main service pages. Replaces the CMS "Related Topics" chips,
                 which pointed at /page-categories/* — a listing route, not
                 anywhere a visitor on the contact page wants to land. --}}
            <div class="row mb-5">
                    <div class="col-12">
                        <h4 class="pa-c-mainpages-head">Explore our main services</h4>
                        <div class="pa-c-mainpages">
                            <a class="pa-c-mainpage" href="/accounting-bookkeeping-services">Accounting &amp; Bookkeeping</a>
                            <a class="pa-c-mainpage" href="/business-registration-services">Company Registration</a>
                            <a class="pa-c-mainpage" href="/gst-registration">GST Registration</a>
                            <a class="pa-c-mainpage" href="/itr-services">ITR Filing</a>
                            <a class="pa-c-mainpage" href="/payroll-services">Payroll &amp; EOR</a>
                            <a class="pa-c-mainpage" href="/statutory-audit">Statutory Audit</a>
                            <a class="pa-c-mainpage" href="/net-worth-certificate-by-ca">Net Worth Certificate</a>
                            <a class="pa-c-mainpage" href="/trademark-registration">Trademark Registration</a>
                        </div>
                    </div>
                </div>

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


 	 <script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=f26c7ff799b3eaf0c3606838e88b274be7c9911af160c3db82aa11f7d01dca343d6bb7afabda191c26b8dcf1a273e9cfgidb215ea2680256b8fe2d35a432e6cb566a42a8aae3149a75892a75de20a91bd11'></script>

@endpush